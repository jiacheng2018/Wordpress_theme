<?php
function ju_scripts()
{
 $uri = get_theme_file_uri();
 $ver = JU_DEV_MODE ? time() : false;
 wp_register_style('ju_google_fonts', 'https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i', [], time());
 wp_register_style('ju_boostrap', $uri . '/assets/css/bootstrap.css');
 wp_register_style('ju_style', $uri . '/assets/css/style.css');
 wp_register_style('ju_animate', $uri . '/assets/css/animate.css');
 wp_register_style('ju_icons', $uri . '/assets/css/font-icons.css');
 wp_register_style('ju_popup', $uri . '/assets/css/magnific-popup.css');
 wp_register_style('ju_custom', $uri . '/assets/css/custom.css');
 wp_register_style('ju_responsive', $uri . '/assets/css/responsive.css');

 wp_register_script('ju_plugin', $uri . '/assets/js/plugins.js', [], false, true);
 wp_register_script('ju_functions', $uri . '/assets/js/functions.js', [], false, true);

 wp_enqueue_style('ju_google_fonts');
 wp_enqueue_style('ju_boostrap');
 wp_enqueue_style('ju_style');
 wp_enqueue_style('ju_animate');
 wp_enqueue_style('ju_icons');
 wp_enqueue_style('ju_popup');
 wp_enqueue_style('ju_custom');
 wp_enqueue_style('ju_responsive');

 wp_enqueue_script('jquery');
 wp_enqueue_script('ju_plugin');
 wp_enqueue_script('ju_functions');
}
