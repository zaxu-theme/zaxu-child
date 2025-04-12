<?php
/*
 * @Description: Color scheme
 * @Version: 1.1.9
 * @Author: ZAXU
 * @Link: https://www.zaxu.com
 * @Package: ZAXU
 */

if ( !defined('ABSPATH') ) exit;

add_action('wp_enqueue_scripts', function() {
    // Color scheme value start
        if ( function_exists('zaxu_color_scheme_value') ) {
            $bg_color = zaxu_color_scheme_value()[0];
            $txt_color = zaxu_color_scheme_value()[1];
            $acc_color = zaxu_color_scheme_value()[2];
        } else {
            $bg_color = null;
            $txt_color = null;
            $acc_color = null;
        }
    // Color scheme value end

    if (get_theme_mod('zaxu_dynamic_color', 'disabled') == 'disabled') {
        // General color start
            $custom_css = "
                /* General color css code starts here */
            ";
        // General color end
    } else {
        // Dynamic color start
                $custom_css = "
                /* Dynamic color css code starts here */
            ";
        // Dynamic color end
        
        if ( isset( $_SERVER['HTTP_USER_AGENT'] ) ) {
            if ( strpos($_SERVER['HTTP_USER_AGENT'], "Triden") ) {
                // IE browser start
                    $custom_css = "
                        /* IE browser css code starts here */
                    ";
                // IE browser end
            }
        }
    }

    if (get_theme_mod('zaxu_minify_engine', 'enabled') == 'enabled') {
        $custom_css = str_replace(
            array(
                "\rn",
                "\r",
                "\n",
                "\t",
                '  ',
                '    ',
                '    '
            ),
            '',
            $custom_css
        );
        $custom_css = preg_replace('/\/\*.*?\*\//s', '', $custom_css);
    }

    wp_register_style('zaxu-child-color-scheme', false);
    wp_enqueue_style('zaxu-child-color-scheme');
    wp_add_inline_style('zaxu-child-color-scheme', $custom_css);
}, 999);
?>