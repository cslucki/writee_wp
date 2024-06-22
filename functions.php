<?php 
/*
File Name: functions.php
Description: Core functions file of Writty theme.
Writty theme directories setup

*/


define('WRT_TEMPLATE_DIRECTORY_URI', get_template_directory_uri()); 
define('WRT_INC_DIR', get_template_directory() . '/inc' ); 
define('WRT_IMAGE_URL', WRT_TEMPLATE_DIRECTORY_URI . '/images' );

/*********************************************************/
## Writty theme functions files
/**********************************************************/
/**
 * Writee only works in WordPress 4.5 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.5', '<' ) ) {
	require_once(WRT_INC_DIR.'/functions/back-compat.php');
	return;
}

/*********************************************************/
## Personnalisation fpres.org
/**********************************************************/


## Modif Cyril - 100 articles par page voir archive.php et inc\theme\layouts\standard.php

// Désactiver la pagination
if ( ! function_exists ( 'writee_pagenavi' ) ) {
    function writee_pagenavi(){
        // Ne rien faire
    }
}


function wp_auto_link_images($html, $id, $caption, $title, $align, $url, $size, $alt) {
    $image_src = wp_get_attachment_image_src($id, $size);
    $html = '<a href="' . $image_src[0] . '" target="_blank">' . $html . '</a>';
    return $html;
}
add_filter('image_send_to_editor', 'wp_auto_link_images', 10, 8);

/*********************************************************/
## Fin personnalisation
/**********************************************************/



require_once(WRT_INC_DIR.'/functions/tgm-activation.php');
require_once(WRT_INC_DIR.'/functions/customizer.php');
require_once(WRT_INC_DIR.'/functions/theme-functions.php');
require_once(WRT_INC_DIR.'/functions/navigations.php');
require_once(WRT_INC_DIR.'/functions/sidebars.php');
require_once(WRT_INC_DIR.'/functions/widgets.php');
require_once(WRT_INC_DIR.'/functions/featured-media.php');
require_once(WRT_INC_DIR.'/functions/custom-css-js.php');

if ( ! isset( $content_width ) ) {
	$content_width = 1080;
}
?>