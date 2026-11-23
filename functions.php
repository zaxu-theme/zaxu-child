<?php
/*
 * @Description: Theme child functions and definitions
 * @Version: 1.2.3
 * @Author: ZAXU
 * @Link: https://www.zaxu.com
 * @Package: ZAXU
 */

if ( !defined('ABSPATH') ) exit;

// Load languages start
    add_action('init', function () {
        $locale = determine_locale();
        $directories = array(
            get_template_directory() . '/languages',
            get_stylesheet_directory() . '/languages',
        );

        foreach ($directories as $directory) {
            $file = $directory . '/' . $locale . '.mo';

            if (is_readable($file)) {
                load_textdomain('zaxu', $file, $locale);
            }
        }
    }, 20);
// Load languages end

// Frontend theme style start
    add_action('wp_enqueue_scripts', function() {
        wp_enqueue_style(
            'zaxu-child-theme',
            get_stylesheet_directory_uri() . '/assets/css/style.min.css',
            array('zaxu-parent-theme')
        );
    }, 996);
// Frontend theme style end
    
// Frontend theme script start
    add_action('wp_enqueue_scripts', function() {
        wp_enqueue_script(
            'zaxu-child-theme',
            get_stylesheet_directory_uri() . '/assets/js/main.min.js',
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
            get_stylesheet_directory_uri() . '/assets/css/admin.min.css'
        );
    }, 999);
// Backend theme style end

// Backend theme script start
    add_action('admin_enqueue_scripts', function() {
        wp_enqueue_script(
            'zaxu-admin-child-theme',
            get_stylesheet_directory_uri() . '/assets/js/admin.min.js',
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
            get_stylesheet_directory_uri() . '/assets/css/login.min.css'
        );
    }, 999);
// Login theme style end

// Login theme script start
    add_action('login_enqueue_scripts', function() {
        wp_enqueue_script(
            'zaxu-login-child-theme',
            get_stylesheet_directory_uri() . '/assets/js/login.min.js',
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
			get_stylesheet_directory_uri() . '/assets/css/customizer.min.css'
		);
	}, 999);
// Customizer theme style end

// Customizer theme script start
	add_action('customize_controls_enqueue_scripts', function() {
		wp_enqueue_script(
			'zaxu-customizer-child-theme',
			get_stylesheet_directory_uri() . '/assets/js/customizer.min.js',
			array('jquery'),
			true,
			true
		);
	}, 999);
// Customizer theme script end

// Load the required files start
    // Load functions
	require get_stylesheet_directory() . '/inc/functions/functions.php';
    // Load helpers
	require get_stylesheet_directory() . '/inc/functions/helpers.php';
    // Load color scheme
    require get_stylesheet_directory() . '/inc/functions/color-scheme.php';
    // Load ACF config
    require get_stylesheet_directory() . '/inc/acf/acf-config.php';
// Load the required files end

?>