<?

function generate_marks(&$marks,&$marknames,$offset,$codes,$asm) {
	$markname=preg_match('/<-- (.*)$/',$asm,$r)?$r[1]:false;
	if (ereg(",([0-9A-Fa-f][0-9A-Fa-f])([0-9A-Fa-f][0-9A-Fa-f])",$asm,$r)) {
		$h1=$r[1];
		$h2=$r[2];
		if (ereg("$h2$h1$",$codes,$r)) {
			$marks[$offset-2]=2;
			$marknames[$offset-2]=$markname;
			return;
		}
		if (ereg("$h2$",$codes,$r)) {
			$marks[$offset-1]=1;
			$marknames[$offset-1]=$markname;
			return;
		}
		return;
	}
	if (ereg(",([0-9A-Fa-f][0-9A-Fa-f])",$asm,$r)) {
		$h1=$r[1];
		if (ereg("$h1$",$codes,$r)) {
			$marks[$offset-1]=1;
			$marknames[$offset-1]=$markname;
			return;
		}
	}
}

function xml($a) {
	return htmlentities($a)."\n";
}
function hex($a) {
	if ($a=='..') return -1;
	return hexdec($a);
}


function search_offsets($hex,&$return) {
	global $off;
	$bytes=array();
	while (ereg("([a-f0-9.][a-f0-9.]) (.*)",$hex,$r)) {
		$bytes[]=hex($r[1]);
		$hex=$r[2];
	}
	$bytes[]=hex($hex);

	$accum='';
	$coma='';
	foreach ($off as $file) {
		if (($offset=get_offset($bytes,"bin.$file"))!=-1) {
			$offset=dechex($offset);
			$return.=xml("\t<offset file=\"$file\" value=\"0x$offset\"/>");
			$accum.="$coma $file:0x$offset";$coma=',';
		}
	}
	return "(offsets are$accum)";
}

function separate($a) {
	$r='';
	for ($i=0;$i<strlen($a);$i++) {
		$c=substr($a,$i,1);
		$r.=$c;
		if (($i!=strlen($a)-1) && ($i%2==1)) $r.=" ";
	}
	return $r;
}

function get_offset($bytes,$file) {
	$fp = fopen(dirname(__FILE__) . "/vers/$file", 'rb');
	if (!$fp) return -1;
	$match=0;
	$offset=0;
	while (false !== ($char = fgetc($fp))) {
    $c=ord($char);
		if (!isset($bytes[$match])) return $offset-$match;
		if ($bytes[$match]==-1 || $bytes[$match]==$c) {
			$match++;
		} else {
			$match=0;
		}
		$offset++;
	}
	fclose($fp);
	if (!isset($bytes[$match])) return $offset-$match;
	return -1;
}

function codes($hex,&$return) {
	$bytes=array();
	$hex.=" ";
	$accum="";
	while (ereg("^([^{}]*) {([^}]*)} (.*)$",$hex,$r)) {
		$codes=$r[1];
		$return.=xml("\t<check codes=\"$codes\"/>");
		$read=$r[2];
		$name='name here';
		$name_bb='(..)';
		if (preg_match('/(.*) \((.*)\)/',$read,$z)) {
			$read=$z[1];
			$name_bb=$name=$z[2];
		}
		$accum.="$read for $name_bb<br>";
		$return.=xml("\t<read default=\"$read\" name=\"$name\" type=\"\"/>");
		$hex=$r[3];
	}
	if ($hex) {
		if (substr($hex,-1,1)==' ') $hex=substr($hex,0,-1);
		if ($hex)	xml("\t<check codes=\"$hex\"/>");
	}
	return $accum;
}

function fullSearch($codes,$marks,$marknames) {
	global $off;
	$list=explode(' ',$codes);
	$size=0;
	$bytes=array();
	while ($code=@$list[$size++]) {
		$bytes[]=hexdec($code);
	}

	/* find offsets */
	$offsets=array();
	foreach ($off as $file) {
		$offsets[$file]=get_offset_prob($bytes,$size,"bin.$file");
	}

	/* compare bytes */
	$mask=array();
	for ($i=0;$i<$size;$i++) {
		$c=$bytes[$i];
		foreach ($offsets as $file => $info) {
			list($offset,$file_content)=$info;
			if ($file_content[$i]!=$c) $c='..';
		}

		$mask[$i]=($c=='..'?'..':sprintf("%02x",$c));
	}

	/* drop the tailing .. */
	for ($i=$size;$mask[$i-1]=='..' && $i>0;$i--) {
		unset($mask[$i-1]);
	}

	/* add the {} using the mask information */
	for ($i=0;$i<count($mask);$i++) {
		if (($marksize=$marks[$i])) {
			if ($marksize==2) {
				if ($mask[$i]!='..' && $mask[$i+1] !='..') {
					$mask[$i]='{'.$mask[$i];
					$mask[$i+1]=$mask[$i].($marknames[$i]?' ('.$marknames[$i].')':'').'}';
				}
			}
			if ($marksize==1) {
        if ($mask[$i]!='..') {
          $mask[$i]='{'.$mask[$i].($marknames[$i]?' ('.$marknames[$i].')':'').'}';
        }
      }
		}
	}
	

	return implode($mask,' ');
}

function get_offset_prob($bytes,$bytes_size,$file) {
	$fp = fopen(dirname(__FILE__) . "/vers/$file", 'rb');
	if (!$fp) return -1;
	$size=0;
	$file_content=array();
	while (false !== ($char = fgetc($fp))) {
    $file_content[$size++]=ord($char);
	}
	fclose($fp);

	$result=-1;
	$offset=-65535;
	for ($i=0;$i<$size;$i++) {
		if ($file_content[$i]==$bytes[0]) {
			$prob=0;
			for ($j=0;$j<$bytes_size;$j++)
				if ($file_content[$i+$j]==$bytes[$j])
					$prob++;
			if ($result<$prob) {
				$result=$prob;
				$offset=$i;
			}
		}
	}
	return array($offset,array_slice($file_content,$offset,$bytes_size));
}


function get_cusasm_output() {
$return='';

global $off;
$off=array("p0","u0","p3","u3","p4","u4");

$asm=$_REQUEST['asm'];
$hex=strtolower($_REQUEST['hex']);

if (!$asm && $_REQUEST['example']) {
	$asm='1109 833E9E0F0D     cmp    word ptr [0F9E],000D <-- level
110E 7540           jne    1150
1110 833E9E4017     cmp    word ptr [409E],0017 <-- room 1
1115 7407           je     111E
1117 833E9E4010     cmp    word ptr [409E],0010 <-- room 2
111C 7532           jne    1150
111E A1904C         mov    ax,[4C90]
1121 A32A43         mov    [432A],ax
1124 50             push   ax
1125 9A0C1E3C1E     call   1E3C:1E0C
112A C606ED4216     mov    byte ptr [42ED],16 <-- start tile
112F B8FF00         mov    ax,00FF
1132 50             push   ax
1133 9A0A04F320     call   20F3:040A
1138 2AE4           sub    ah,ah
113A 250F00         and    ax,000F
113D F7D8           neg    ax
113F 50             push   ax
1140 9AD50ECF1C     call   1CCF:0ED5
1145 FE06ED42       inc    byte ptr [42ED]
1149 803EED421B     cmp    byte ptr [42ED],1B <-- end tile';
}

if ($asm) {
	$return.= "<h2>Assembler</h2>";
	$return.="<pre>[code]\n";

	$x=explode("\n",$asm);
	$ahex="";

	$marks=array();
	$marknames=array();
	$offset=0;
	
	foreach ($x as $line) {
		$line=strtolower($line);
		if (ereg("^([A-Fa-f0-9:]*) ([a-fA-F0-9]*) (.*)$",$line,$r)) {
			$offset+=strlen($r[2])/2;
			generate_marks($marks,$marknames,$offset,$r[2],$r[3]);
			$return.=$r[1]."  ";
			$s=separate($r[2]);
			$return.=$s;
			for ($i=0;$i<5-strlen($s)+strlen($r[2]);$i++) $return.=" ";
			$ahex=$ahex.$r[2];
			$return.=htmlentities(str_replace("\t"," ",$r[3]));
			$return.="\n";
		} else {
			$return.=htmlentities($line);
		}
	}
	$return.="[/code]</pre>";
	$ahex=separate($ahex);
	$ahex=fullSearch($ahex,$marks,$marknames);
}

if ($hex || $asm) {
	if (!$hex) $hex=$ahex;
	$return.="<h2>XML</h2>";
	$return.="<pre>";
	$return.=xml('<hack name="Hack name here">');
	$offsets=search_offsets(preg_replace('/( \([^)]*\))?}/','',str_replace('{','',$hex)),$return);
	$return.=xml('');
	$bytes=codes($hex,$return);
	$return.=xml('</hack>');

	$return.="</pre>";
	$return.="<h2>BBCode</h2>";
	$return.="Search for: ".preg_replace('/( \([^)]*\))?}/','[/b]',str_replace('{','[b]',$hex));
	$return.="<br />$offsets<br /><br />and replace<br />$bytes";
}

$return.=
"<h2>Form</h2><form method='post' id='cusasm'><div id='asm'><p>Asm: (tasm format)</p>
<p><textarea name='asm' rows='30' cols='60'>$asm</textarea></p></div><div id='hex'>
<p>Hex: (optional, it is autogenerated from the asm code, use {} to mark changing bytes and .. as the wildcard)</p>
<p><textarea name='hex' rows='30' cols='60'>$ahex</textarea></p></div>
<p><input type='submit' value='get code' /> <input type='submit' name='example' value='show me an example!' /></p></form>

<script>
$(function(){
	$('#cusasm').prepend('<input id=\'cusasm-asm\' type=\'radio\' name=\'type\' value=\'asm\'> Asm <input type=\'radio\' name=\'type\' value=\'hex\'> Hex');
	$('#cusasm input[name=type]').change(function(){
		if (this.value=='asm') {
			$('#asm').show();
			$('#hex').hide();
		} else {
			$('#asm').hide();
			$('#hex').show();
		}
	});
	$('#cusasm-asm').click();
});


</script>

";

return $return;
}

