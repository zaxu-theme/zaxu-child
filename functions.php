<?php
/*
 * @Description: Theme child functions
 * @Version: 1.1.9
 * @Author: ZAXU
 * @Link: https://www.zaxu.com
 * @Package: ZAXU
 */

if ( !defined('ABSPATH') ) exit;

// Frontend theme style start
    add_action('wp_enqueue_scripts', function() {
        wp_enqueue_style(
            'zaxu-child-theme',
            get_stylesheet_directory_uri() . '/style.css',
            array('zaxu-parent-theme')
        );
    }, 996);
// Frontend theme style end
    
// Frontend theme script start
    add_action('wp_enqueue_scripts', function() {
        wp_enqueue_script(
            'zaxu-child-theme',
            get_stylesheet_directory_uri() . '/assets/js/main.js',
            array('jquery'),
            true,
            true
        );
    }, 999);
// Frontend theme script end

// Backend theme style start
    add_action('admin_enqueue_scripts', function() {
        wp_enqueue_style(
            'zaxu-admin-child-theme',
            get_stylesheet_directory_uri() . '/assets/css/admin.css'
        );
    }, 999);
// Backend theme style end

// Backend theme script start
    add_action('admin_enqueue_scripts', function() {
        wp_enqueue_script(
            'zaxu-admin-child-theme',
            get_stylesheet_directory_uri() . '/assets/js/admin.js',
            array('jquery'),
            true,
            true
        );
    }, 999);
// Backend theme script end

// Load the required files start
    // Load color scheme
    require get_stylesheet_directory() . '/color-scheme.php';
// Load the required files end
?>