<?php
/*
Plugin Name: Gravatar SEO
Description: Gravatar images in Wordpress sites don`t have alt and title tags, with this plugin you can resolve this problem on your site.
Version: 1.0
License: GPLv2
Author: Amir Heydari
Author URI: http://www.3eo.ir
*/

function replace_content($text)
{
$alt = get_the_author_meta( 'display_name' );
$text = str_replace('alt=\'\'', 'alt=\'Avatar of '.$alt.'\' title=\'Gravatar Image for '.$alt.'\'',$text);
return $text;
}
add_filter('get_avatar','replace_content');

?>