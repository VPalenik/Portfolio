<?php

    function dynamic_title(){

        add_theme_support('title-tag');
        add_theme_support('custom-logo');

    }

    add_action('after_setup_theme', 'dynamic_title');

    function poetista_register_styles() {

        $version = wp_get_theme()->get('Version');
        wp_enqueue_style('poetista-style-css', get_template_directory_uri() . "/style.css", array(), $version, 'all');

    }

    add_action('wp_enqueue_scripts', 'poetista_register_styles');

?>