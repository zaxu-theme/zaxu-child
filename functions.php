<?php
/*
 * @Description: Theme child functions and definitions
 * @Version: 1.2.2
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

// Login theme style start
    add_action('login_enqueue_scripts', function() {
        wp_enqueue_style(
            'zaxu-login-child-theme',
            get_stylesheet_directory_uri() . '/assets/css/login.css'
        );
    }, 999);
// Login theme style end

// Login theme script start
    add_action('login_enqueue_scripts', function() {
        wp_enqueue_script(
            'zaxu-login-child-theme',
            get_stylesheet_directory_uri() . '/assets/js/login.js',
            array('jquery'),
            true,
            true
        );
    }, 999);
// Login theme script end

// Customizer theme style start
	add_action('customize_controls_enqueue_scripts', function() {
		wp_enqueue_style(
			'zaxu-customizer-child-theme',
			get_stylesheet_directory_uri() . '/assets/css/customizer.css'
		);
	}, 999);
// Customizer theme style end

// Customizer theme script start
	add_action('customize_controls_enqueue_scripts', function() {
		wp_enqueue_script(
			'zaxu-customizer-child-theme',
			get_stylesheet_directory_uri() . '/assets/js/customizer.js',
			array('jquery'),
			true,
			true
		);
	}, 999);
// Customizer theme script end

// Load the required files start
    // Load color scheme
    require get_stylesheet_directory() . '/color-scheme.php';
// Load the required files end
?>