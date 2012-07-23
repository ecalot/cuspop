<?
function parse_commands($text,&$value) {
	$l=explode(';',$text);
	$i=0;
	while($cmd=@$l[$i++]) {
		if ($cmd) run_command($cmd,$value);
	}
}

function run_command($cmd,&$value) {
	if (ereg("([a-z]*)\((.*)\)",$cmd,$reg)) {
		$args=explode(',',$reg[2]);
		$c=$reg[1];
		$i=0;
		while (isset($args[$i])) {
			if ($args[$i]=='~') $args[$i]=$value;
			$i++;
		}
		run_command_p($c,$args,$value);
	} else {
		run_command_p($cmd,array(),$value);
	}
}

function run_command_p($cmd,$args,&$value) {
	switch($cmd) {
	case 'multiply':
		$value*=$args[0];
		break;
	case 'add':
		$value+=$args[0];
		break;
	case 'subtract':
		$value-=$args[0];
		break;
	case 'divide':
		$value/=$args[0];
		break;
	case 'floor':
		$value=floor($value);
		break;
	case 'round':
		$value=round($value);
		break;
	case 'tofloat':
		$value=floatval($value);
		break;
	case 'toupper':
		$value=strtoupper($value);
		break;
	case 'tolower':
		$value=strtolower($value);
		break;
	case 'capitalize':
		$value=ucwords($value);
		break;
	case 'tointeger':
		$value=intval($value);
		break;
	case 'if':
		$value=($value==$args[0])?$args[1]:$args[2];
		break;
	case 'case':
		if (isset($arg[$value])) {
			$value=$arg[$value];
		} else {
			$value=$arg[0];
		}
		break;
	case 'replace':
		$value=str_replace($value,$args[0],$args[1]);
		break;
	}
}


