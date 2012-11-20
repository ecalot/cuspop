<?
require('parsecommands.php');

function print_form($info,$level,&$enums) {
	$level++;
	$i=0;
	while ($hack=@$info[$i++]) {
		$attr=$hack['attributes'];
		if ($hack['name']=='folder') {
			echo "<h$level>Folder $attr[name]</h$level>";
			echo "<div class='hc4'>";
			print_form($hack['children'],$level,$enums);
			echo "</div>";
		} else {
			echo "<h$level>Set up $attr[name]</h$level>";
			echo "<div class='hc5'>";
			if ($help=@$hack['attributes']['help']) {
				echo "<p class='helptip'>$help</p>";
			}
			print_hack($hack['children'],$enums);
			echo "</div>";
		}
	}
}

$global_refs_array=array();
$global_n=0;
function create_ref($ref) {
	global $global_refs_array,$global_n;
	if ($r=@$global_refs_array[$ref]) return $r;
	$global_refs_array[$ref]="f$global_n";
	$global_n++;
	return $global_refs_array[$ref];
}

$global_id=0;
function get_free_id() {
	global $global_id;
	return $global_id++;
}
function process_action(&$item,&$thereareoffsets,&$binary,&$i,&$refid,$level,$gname,&$offsets,$total,&$enums) {
		switch ($item['name']) {
		case 'offset':
			if (!$thereareoffsets) {
				$offsets=array();
				$thereareoffsets=true;
			}
			$offsets[$item['attributes']['file']]=$item['attributes']['value'];
			break;
		case 'check':
			if ($thereareoffsets) {
				$binary[]=array('action'=>'offset','info'=>$offsets);
				$thereareoffsets=false;
			}

			$binary[]=array('action'=>'check','codes'=>$item['attributes']['codes']);
			break;
		case 'read':
			if ($thereareoffsets) {
				$binary[]=array('action'=>'offset','info'=>$offsets);
				$thereareoffsets=false;
			}

			if ($dup=@$item['attributes']['duplicated']) {
				$binary[]=array('action'=>'duplicate','reference'=>create_ref($dup.$refid),'wop'=>@$item['attributes']['writeoperation'],'type'=>@$item['attributes']['type']);
			} else {
				$binary[]=array('action'=>'read','type'=>$item['attributes']['type'],'reference'=>create_ref($item['attributes']['name'].$refid),'wop'=>@$item['attributes']['writeoperation']);
				print_input($item['attributes'],$refid,@$item['children'],$offsets,$gname,$i,$level,$total,$enums);
			}
			break;
		case 'group':
			$j=0;
			while ($item2=@$item['children'][$j++]) {
				process_action($item2,$thereareoffsets,$binary,$j,$refid,$level+1,$item['attributes']['name'],$offsets,count($item['children']),$enums);
			}
			break;
		}
}

$global_tosend=array();
function print_hack($hack,&$enums) {
	/* first: separate the offsets and versions availables and the reading algorithm */
	global $global_tosend;
	$refid=get_free_id();
	$i=0;
	$thereareoffsets=false;
	$binary=array();
	$level=0;
	while ($item=@$hack[$i++]) {
		process_action($item,$thereareoffsets,$binary,$i,$refid,$level,'main',$offsets,count($hack),$enums);
	}

	$global_tosend[$refid]=$binary;
}

function print_input($read,$refid,$extra,$offsets,$gname,$i,$level,$total,&$enums) {
	$type=@$read['type'];
	$name=@$read['name'];
	$enum=@$read['enum'];
	$use=@$read['use'];
	$default=@$read['default'];
	$minval=@$read['minval'];
	$maxval=@$read['maxval'];
	$desc=@$read['help'];
	$readoperation=@$read['readoperation'];

	$from=($minval && $maxval)?" (from $minval to $maxval)":'';
	if ($default && $readoperation) parse_commands($readoperation,$default);
	$def=$default!==false?"value='$default'":'';
	$ref=create_ref($name.$refid);
	$pname=ucfirst($name);
	$gname=ucfirst($gname);
	$tip=$desc?"<p class='helptip'>$desc</p>":'';

	if ($use=='checkbox') {
		$def=$default?"checked='checked' ":'';
		if ($level) { /* it is grouped */
			if ($i==1) 
				echo "<div class='black'><p><label>$gname:</label><span class='inputblock'>";
			echo " <input name='$ref' type='checkbox' value='1' title='$pname' $def/>";
			if ($i==$total)
				echo "</span></p></div>";

		} else {
			echo "<div class='black'><p><label>$pname:</label> <input name='$ref' type='checkbox' value='1' $def/></p>$tip</div>";
		}
	} else if (@$extra[0] || $enum) { /* cool it is a combo box */
		$i=0;
		echo "<div class='black'><p><label>$pname:</label> <select name='$ref' class='nonblocked'>";
		if (@$extra[0]) {
			while ($option=@$extra[$i++]) {
				$value=@$option['attributes']['value'];
				$content=$option['content'];
				$default=@$option['attributes']['default'];

				$v=$value?" value='$value'":'';
				$d=$default?" selected='selected'":'';
				echo "<option$v$d>$content</option>";
			}
		} else {
			foreach ($enums[$enum] as $value=>$content) {
				$v=$value?" value='$value'":'';
				$d=($value==$default)?" selected='selected'":'';
				echo "<option$v$d>$content</option>";
			}

		}
		echo "</select></p>$tip</div>";
	} else {
		if ($level) { /* it is grouped */
			if ($i==1) 
				echo "<div class='black'><p><label>$gname:</label><span class='inputblock'>";
			echo "<input name='$ref' type='text' class='inputblocktext' title='$pname' $def/>";
			if ($i==$total)
				echo "</span></p></div>";
		} else {
			echo "<div class='black'><p><label>$pname:</label> <input name='$ref' type='text' class='nonblocked' $def/>$from</p>$tip</div>";
		}
	}
	add_field($offsets,$ref);
}

function xml_to_object($xml) {
	$parser = xml_parser_create();
	xml_parser_set_option($parser, XML_OPTION_CASE_FOLDING, 0);
	xml_parser_set_option($parser, XML_OPTION_SKIP_WHITE, 1);
	xml_parse_into_struct($parser, $xml, $tags);
	xml_parser_free($parser);

	$elements = array();
	$stack = array();
	foreach ($tags as $tag) {
		$index = count($elements);
		if ($tag['type'] == "complete" || $tag['type'] == "open") {
			$elements[$index] = array();
			$elements[$index]['name'] = $tag['tag'];
			$elements[$index]['attributes'] = @$tag['attributes'];
			$elements[$index]['content'] = @$tag['value'];
			if ($tag['type'] == "open") {
			 $elements[$index]['children'] = array();
				$stack[count($stack)] = &$elements;
				$elements = &$elements[$index]['children'];
			}
		}
		if ($tag['type'] == "close") {
			$elements = &$stack[count($stack) - 1];
			unset($stack[count($stack) - 1]);
		}
	}
	return $elements[0];
}

$global_disable_ids=array();
function add_field($offsets,$ref) {
	global $global_fileidlist,$global_disable_ids,$global_fileidlist_f;

	$r=$global_fileidlist;
	foreach($offsets as $file=>$v) {
		unset($r[$global_fileidlist_f[$file]]);
	}

	$global_disable_ids[$ref]=$r;
}

function print_script() {
	global $global_fileidlist,$global_disable_ids,$global_n;

	$coma='';
	$all='';
	for ($i=0;$i<$global_n;$i++) {
		$all1="f$i";
		$all.=$coma."z.$all1";
		$coma=',';
	}

	$coma='';
	$l='';
	for ($i=0;$i<$global_n;$i++) {
		$coma2='';
		$l2='';
		$val=@$global_disable_ids["f$i"];
		for ($j=0;$j<@count($val);$j++) {
			$l3=@$val[$j];
			$l2.="$coma2'$l3'";
			$coma2=',';
		}
		$l.=$coma."new Array($l2)";
		$coma=',';
	}

	echo "<script type='text/javascript'><!--\n".
	"var z=document.fr;".
	"all=new Array($all);".
	"var l=new Array($l);".

	"function x() {".
		"var a=document.fr.file.value;".
		"var l2=l[a];".
		"for (j=0;j<$global_n;j++) {".
			"all[j].disabled=false;".
			"for (i=0;i<l[j].length;i++) ".
				"if (l[j][i]==a) all[j].disabled=true;".
		"}".
	"}";

	echo "//-->\n</script>";
}

$global_fileidlist=array();
$global_fileidlist_f=array();
function print_page() {
	global $global_fileidlist,$global_fileidlist_f,$global_tosend;

	$tree=xml_to_object(file_get_contents("princehack.xml"));

	if ($tree['name']!='princehack') die('main tag is not princehack');
	if ($tree['children'][0]['name']!='files') die('where are the files?');
	$filelist=$tree['children'][0]['children'];

	/* begin form */
	echo "<form method='post' action='/wp-content/plugins/cuspop/prince.exe' name='fr'><div id='form'>";
	//echo "<h1>Generate your custom Prince</h1><div class='just'><p>This page allows you to download the file with the customizations you select in the form. By default the values are set as the original game. Take a look at <a href='standards/xml/princehack.xml'>the XML specification</a> for more info. You can contribute, contact us! Take a look at <a href='http://www.popuw.com/forum/viewtopic.php?t=590'>the hex editing thread</a> in the forum.</p></div>";

	/* draw versions */
	echo "<h2>Choose your file</h2><div class='hc4'><p><label>Choose the file you want:</label> ";
	$i=0;
	echo "<select name='file' class='nonblocked'>";

	while ($file=@$filelist[$i++]) {
		$file=$file['attributes'];
		$def=@$file['default'];
		$def=$def?' selected="selected"':'';
		echo "<option value='$file[name]'$def>$file[path] $file[version]</option>";
		$global_fileidlist[]=$file['name'];
	}
	$global_fileidlist_f=array_flip($global_fileidlist);
	echo "</select></p></div>";

	/* get the defines */
	$defines=$tree['children'][1]['children'];
	if ($tree['children'][1]['name']!='defines') die('where are the defines?');
	$enums=array();
	foreach ($defines as $d) {
		if ($d['name']=='enum') {
			$aux=array();
			foreach ($d['children'] as $enum) {
				$aux[$enum['attributes']['value']]=$enum['content'];
			}
			$enums[$d['attributes']['name']]=$aux;
		}
	}

	/* draw folders */
	$hacks=$tree['children'][2]['children'];
	if ($tree['children'][2]['name']!='hacks') die('where are the hacks?');
	print_form($hacks,1,$enums);

	/* draw hidden */
/*	$pass=base64_encode(serialize($global_tosend));
	$verify=md5($pass.'mega_hit_34');
	echo "</div><div class='center'><input type='hidden' name='pass' value='$pass' /><input type='hidden' name='verify' value='$verify' />";*/

	/* end form */
	echo "<input type='submit' value='Get the file' /></div></form>";
}
ob_start();
print_page();
//print_script();
$html = ob_get_clean();
ob_start();
print_to_send();
$php = ob_get_clean();

file_put_contents('cached/form.htm',$html);
file_put_contents('cached/cachedtree.php',$php);

function print_to_send() {
	global $global_tosend;
	echo "<?php\n";
	echo '$tosend=';
	var_export($global_tosend);
	echo ';';
}

