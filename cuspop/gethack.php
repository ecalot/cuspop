<?

require('parsecommands.php');

/* actions */

$todo=array();
function action_check($codes,&$offset) {
	global $todo;
	$list=explode(' ',$codes);
	$i=0;
	while ($code=@$list[$i++]) {
		if ($code=='..') {
			$offset++;
		} else {
			$todo[$offset++]=array('action'=>'check','code'=>hexdec($code));
		}
	}
}

function action_write($type,$value,&$offset,$size=0) {
	global $todo;
	switch ($type) {
	case 'short':
	case 'short int':
	case 'signed short int':
		if ($value<0) $value+=65536;
	case 'unsigned short int':
		$todo[$offset++]=array('action'=>'write','code'=>$value%256);
		$todo[$offset++]=array('action'=>'write','code'=>floor($value/256));
		break;
	case 'long int':
	case 'long':
	case 'signed long int':
		if ($value<0) $value+=1<<32;
	case 'unsigned long int':
		$todo[$offset++]=array('action'=>'write','code'=>$value&0xff);
		$todo[$offset++]=array('action'=>'write','code'=>($value>>8)&0xff);
		$todo[$offset++]=array('action'=>'write','code'=>($value>>16)&0xff);
		$todo[$offset++]=array('action'=>'write','code'=>($value>>24)&0xff);
		break;
	case 'bool':
	case 'boolean':
	case 'char':
	case 'signed char':
		if ($value<0) $value+=256;
	case 'unsigned char':
		$todo[$offset++]=array('action'=>'write','code'=>$value);
		break;
	case 'hex char':
		$todo[$offset++]=array('action'=>'write','code'=>hexdec($value));
		break;
	case 'string':
	case 'null-terminated string':
		$size2=min($size,strlen($value));
		for ($i=0;$i<$size2;$i++) {
			$todo[$offset++]=array('action'=>'write','code'=>ord(substr($value,$i,1)));
		}
		if ($size2<$size) $todo[$offset++]=array('action'=>'write','code'=>0);
		break;
	case 'array':
	case 'binary':
		$list=explode(' ',$value);
		$i=0;
		while ($code=@$list[$i++]) {
			if ($code=='..') {
				$offset++;
			} else {
				$todo[$offset++]=array('action'=>'write','code'=>hexdec($code));
			}
		}
		break;
	case 'dummy':
		break;
	default:
		die("Unknown type $type for $value at $offset");
	}
}

function perform_actions($binary,$version) {
	$i=0;
	$references=array();
	$references_size=array();
	$references2=array();
	$offset=-65536;
	while ($action=@$binary[$i++]) {
//		if ($action['file']!=$version) continue;
		switch($action['action']) {
		case 'offset':
			if ($o=@$action['info'][$version]) {
				$offset=checkhex($o);
			} else {
				$offset=-65336;
			}
			break;	
		case 'check':
			action_check($action['codes'],$offset);	
			break;
		case 'read':
			$value=@$_POST[$action['reference']];
			if ($action['wop']) parse_commands($action['wop'],$value);
			action_write($action['type'],$value,$offset,@$action['size']);

			$references[$action['reference']]=$action['type'];
			$references_size[$action['reference']]=@$action['size'];
			$references2[$action['reference']]=$action['wop'];
			break;
		case 'duplicate':
			if (!@$action['type']) $action['type']=$references[$action['reference']];
			if (!@$action['size']) $action['size']=@$references_size[$action['reference']];
			if (!@$action['wop']) $action['wop']=$references2[$action['reference']];

			$value=$_POST[$action['reference']];
			if ($action['wop']) parse_commands($action['wop'],$value);
			action_write($action['type'],$value,$offset,@$action['size']);
			break;
		}
	}
}

function checkhex($hex) {
	if ($hex=='none') return -65536;
	if (@substr($hex,0,2)=='0x') {
		return hexdec(substr($hex,2));
	}
	return $hex/1;
}

function print_file($version) {
	global $todo;

	/* open the file */
	$fd=@fopen("vers/bin.$version",rb);
	if (!$fd ) die('The version you selected was not found on this server');
	
	$i=0;
	$out='';
	while (false !== ($char = fgetc($fd))) {
	  $c=ord($char);
		if ($action=@$todo[$i]) {
			if ($action['action']=='check') {
				if ($action['code']!=$c) die (sprintf("File differs with the version in XML: offset 0x%x (%d) has %02x but %02x expected.",$i,$i,$c,$action['code']));
			} else {
				if ($action['action']=='write') {
					$c=$action['code'];
				}
			}
		}
		$out.=chr($c);
		$i++;
	}
	fclose($fd);

	/* Send file */
	header('Content-type: application/octet-stream');
	echo $out;
}

/* start processing */

$version=$_POST['file'];

if (false && @$_POST['pass']) { /* Select the information from input or from a saved file */
	$verify=$_POST['verify'];
	$pass=$_POST['pass'];
	if ($verify!=md5($pass.'mega_hit_34')) die('wrong password');
	$tosend=unserialize(base64_decode($pass));
} else {
	require('cached/cachedtree.php');
}

/*read the hack list */
$i=0;
while ($binary=@$tosend[$i++]) {
	perform_actions($binary,$version);
}

print_file($version);

