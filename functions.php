<?php
/**
 * file: functions.php
 * purpose: tweaking WordPress
 **/

// add your stylesheet(s)
function add_my_stylesheet() {
    // how to enqueue a stylesheet
    wp_enqueue_style('blanko', get_template_directory_uri() . '/style.css');
    
    // how to enqueue a script
    wp_enqueue_script('blankoJavascript', get_template_directory_uri() . '/js/js.js', array(), false);
}
add_action('wp_enqueue_scripts','add_my_stylesheet');
