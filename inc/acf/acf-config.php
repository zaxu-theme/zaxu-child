<?php
/*
 * @Description: Theme child ACF config
 * @Version: 1.2.3
 * @Author: ZAXU
 * @Link: https://www.zaxu.com
 * @Package: ZAXU
 */

if ( !defined('ABSPATH') ) exit;

add_action("init", function() {
	if ( function_exists('acf_add_local_field_group') ) {
        // Your code starts here.
    };
}, 20)

?>