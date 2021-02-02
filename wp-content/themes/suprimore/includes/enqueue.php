<?php

/*

=====================

FRONT END

=====================

*/

function temp_load_scripts() {

    /**
     * CSS
     */
    wp_enqueue_style('style', get_template_directory_uri()."/css/style.css", array(), null, 'all');
    wp_enqueue_style('bootstrap', get_template_directory_uri()."/plugins/bootstrap/css/bootstrap.min.css", array(), null, 'all');
    wp_enqueue_style( 'Font_Awesome', get_template_directory_uri().'/plugins/fontawesome/css/all.min.css', array(), null, 'all');
    wp_enqueue_style('slick', get_template_directory_uri()."/plugins/slick/slick/slick.css", array(), null, 'all');
    wp_enqueue_style('slick-theme', get_template_directory_uri()."/plugins/slick/slick/slick-theme.css", array(), null, 'all');
    wp_enqueue_style('lightbox', get_template_directory_uri()."/plugins/lightbox/dist/css/lightbox.css", array(), null, 'all');

    /**
     * JS
     */
    wp_register_script('jquery',  get_template_directory_uri()."/js/jquery-3.3.1.slim.min.js", array(), '', true);
    wp_register_script('popper',  get_template_directory_uri()."/js/popper.min.js", array(), '', true);
    wp_register_script('bootstrap_js', get_template_directory_uri()."/plugins/bootstrap/js/bootstrap.min.js", array(), '', true);
    wp_register_script('slick', get_template_directory_uri()."/plugins/slick/slick/slick.min.js", array(), '', true);
    wp_register_script('lightbox', get_template_directory_uri()."/plugins/lightbox/dist/js/lightbox.js", array(), '', true);
    wp_register_script('instafeed', get_template_directory_uri()."/js/instafeed.js", array(), '', true);


    wp_enqueue_script('jquery');
    wp_enqueue_script('popper');
    wp_enqueue_script('bootstrap_js');
    wp_enqueue_script('slick');
    wp_enqueue_script('lightbox');
    wp_enqueue_script('instafeed');
}

add_action('wp_enqueue_scripts', 'temp_load_scripts');

?>