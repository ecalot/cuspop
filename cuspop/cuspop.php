<?php
/*
Plugin Name: CusPop
Plugin URI: http://www.princed.org
Description: Adds support of web based CusPOP under Wordpress using the [cus_pop] and [cus_asm] placeholders.
Author: Enrique Calot
Version: 3.0
Author URI: http://www.calot.org
*/

// We need some CSS to position the paragraph
function cuspop_css() {
	echo "<style type='text/css'>
	pre {
		overflow:auto;
		border:#aaa dashed 1px;
		background:#eee;
	}
textarea {
border:#555 solid 1px;
background:#eee;
}
input.inputblocktext {
 width:3em
}
	</style><script src='/wp-content/plugins/cuspop/jquery.min.js' type='text/javascript'></script>";
}
add_action('wp_head', 'cuspop_css', 9);

require(dirname(__FILE__) . '/cusasm.php');

function add_cuspop($text) {
 static $singleton_cuspop=null;
 if (!$singleton_cuspop) $singleton_cuspop=file_get_contents(dirname(__FILE__) . '/cached/form.htm');

 if (strpos($text,'[cus_asm]')!==false) {
  $cusasm=get_cusasm_output();
  $text=str_replace('[cus_asm]',$cusasm,$text);
 }

 return str_replace('[cus_pop]',$singleton_cuspop,$text);
}


add_filter('the_content', 'add_cuspop' );

add_action('admin_menu', 'cuspop_admin_head');
function cuspop_admin_head()
{
    add_options_page('CusPop', 'CusPop', 8, 'cuspop','cuspopOptions');
}
function cuspopOptions() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissiiiiiiiiions to access this page.' ) );
	}
echo "<h2>Regenerate cache</h2>
<form><method='post'><input type=submit name='recache' value='Re cache'> </form>

<h2>Update XML</h2>

<h2>Download XML</h2>";
}

?>
