$(function(){
	$.ajax({
	  url: '/standards/xml/princehack/princehack.xml',
	  success:create_form
	});
});

function create_form(princehack) {
	var $ph=$(princehack).children();
	$('.entry-content').prepend("<form id='z' />");

	console.log($ph.attr('version'));
	var 
		$enums=$ph.children('defines').children('enum'),
		$files=$ph.children('files').children('file'),
		$hacks=$ph.children('hacks');
		
	var $form=$('#z');
		print_form($hacks,2,$enums,$form);
//	console.log(enums);
//			console.log(princehack);
}
function print_form($info,level,$enums,$parent) {
	$info.children().each(function() {
		var $node=$(this);
		if (this.nodeName=='folder') {
			$parent.append("<h"+level+">Folder "+$node.attr('name')+"</h"+level+">");
			var $div=$("<div class='hc4' />");
			print_form($node,level+1,$enums,$div);
			$parent.append($div);
		} else {
			$parent.append("<h"+level+">Set up "+$node.attr('name')+"</h"+level+">");
			var $div=$("<div class='hc5' />"),help;
			if ((help=$node.attr('help')))
				$div.append("<p class='helptip'>"+help+"</p>");
			print_hack($node,$enums,$div);
			$parent.append($div);
		}
	});
}
global_id=0;
function get_free_id() {
	return global_id++;
}
function print_hack($hack_info,$enums,$parent) {
	/* first: separate the offsets and versions availables and the reading algorithm */
	var refid=get_free_id(),offsets={};
	$hack_info.children().each(function(){
		process_action(this.nodeName,$(this),refid,undefined,offsets,$enums,$parent);
	});
}

//function process_action($item,&$thereareoffsets,&$binary,&$i,&$refid,$level,$gname,&$offsets,$total,&$enums) {
function process_action(tag,$item,refid,gname,offsets,$enums,$parent) { //gname==undefined means group main
		switch (tag) {
		case 'offset':
			offsets[$item.attr('file')]=true;
			break;
		case 'read':
			if (!$item.attr('duplicated')) {
				print_input($item,refid,offsets,gname,$enums,$parent);
			}
			break;
/*		case 'group':
			$j=0;
			while ($item2=@$item['children'][$j++]) {
				process_action($item2,$thereareoffsets,$binary,$j,$refid,$level+1,$item['attributes']['name'],$offsets,count($item['children']),$enums);
			}
			break;*/
		}
}
function ucfirst(string){
	return string.charAt(0).toUpperCase()+string.slice(1);
}
var global_refs_array={},global_n=0;
function create_ref(ref) {
	var r;
	if ((r=global_refs_array[ref])) return r;
	global_refs_array[ref]="f"+global_n;
	global_n++;
	return global_refs_array[ref];
}

function print_input($item,refid,offsets,gname,$enums,$parent) {
	console.log($item,refid,offsets,gname,$enums,$parent);
	var
		type=$item.attr("type"),
		name=$item.attr("name"),
		en=$item.attr("enum"),
		use=$item.attr("use"),
		def_set=$item.attr("default"),
		minval=$item.attr("minval"),
		maxval=$item.attr("maxval"),
		desc=$item.attr("help"),
		readoperation=$item.attr("readoperation"),
		from=(minval && maxval)?" (from "+minval+" to "+maxval+")":'',
//	if (def && readoperation) parse_commands($readoperation,$default);
		def=def_set?"value='$default'":'',
		ref=create_ref(name+''+refid),
		pname=ucfirst(name),
		tip=desc?"<p class='helptip'>"+desc+"</p>":'';

	if (use=='checkbox') {
		def=def_set?"checked='checked' ":'';
		if (gname) { /* it is grouped */
			gname=ucfirst(gname);
			$parent.append("<p>TODO: insetando grupo"+gname+"</p>");
/*			if ($i==1) 
				echo "<div class='black'><p><label>$gname:</label><span class='inputblock'>";
			echo " <input name='$ref' type='checkbox' value='1' title='$pname' $def/>";
			if ($i==$total)
				echo "</span></p></div>";*/

		} else {
			$parent.append("<div class='black'><p><label>"+pname+":</label> <input name='"+ref+"' type='checkbox' value='1' "+def+"/></p>"+tip+"</div>");
		}
	} else if ($item.children().size() || en) {  /* cool it is a combo box */
		$parent.append("<p>TODO: combo</p>");
/*
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
*/
	} else {
		if (gname) { // it is grouped 
			$parent.append("<p>TODO: insetando grupo"+gname+" de labels</p>");
/*			if ($i==1) 
				echo "<div class='black'><p><label>$gname:</label><span class='inputblock'>";
			echo "<input name='$ref' type='text' class='inputblocktext' title='$pname' $def/>";
			if ($i==$total)
				echo "</span></p></div>";*/
		} else {
			$parent.append("<div class='black'><p><label>"+pname+":</label> <input name='"+ref+"' type='text' class='nonblocked' "+def+"/>"+from+"</p>"+tip+"</div>");
		}
	}
	//add_field($offsets,$ref);
}

/*

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
	 first: separate the offsets and versions availables and the reading algorithm 
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
		if ($level) {  it is grouped 
			if ($i==1) 
				echo "<div class='black'><p><label>$gname:</label><span class='inputblock'>";
			echo " <input name='$ref' type='checkbox' value='1' title='$pname' $def/>";
			if ($i==$total)
				echo "</span></p></div>";

		} else {
			echo "<div class='black'><p><label>$pname:</label> <input name='$ref' type='checkbox' value='1' $def/></p>$tip</div>";
		}
	} else if (@$extra[0] || $enum) {  cool it is a combo box 
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
		if ($level) { // it is grouped 
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
*/
