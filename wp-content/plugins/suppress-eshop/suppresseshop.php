<?php
/*
Plugin Name: Suppress eShop 
Plugin URI: http://
Description: Used to suppress eShop tags.  Will be used to supress when coming from a specified domain, eventually
Version: 0.1
Author: Christian Mayne
Author URI: http://www.christian-mayne.net 
License: 
*/

function display_array($array){
	echo '<pre>'.print_r($array,1).'</pre>';
}

function supress_eshop_tags($content) {
    get_page($pageId);
		$eshopStrings = array('/\[eshop.+\]/');
    $content=preg_replace($eshopStrings,'',$content);
    return $content;
}

add_filter('the_content', 'supress_eshop_tags');

?>
