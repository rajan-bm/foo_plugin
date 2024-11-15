<?php

/**
 * @package foo_plugin
 */

/*
    Plugin Name: Foo Plugin
    Plugin URI: https://github.com/rajan-bm/foo_plugin
    Description: A plugin that does foo.
    Version: 1.0
    Author: rajan bm
    Author URI: https://github.com/rajan-bm/foo_plugin
    License: GPL2
*/

/*
    write something about licensing here if you are goint to publish you plugin else donot worry about this section
    copyright 2024-2025 rajan bm
*/

// If this file is called directly, abort.
if (!function_exists('add_action')) die('Direct access not allowed');

class Foo_Plugin
{
    function activate() {
        // generate cpt
        // flush rewrite rules
    }

    function deactivate() {
        // flush rewrite rules
    }

    function uninstall() {
        // delete all cpt
        // delete all the plugin data in the database
    }
}

if (class_exists('Foo_Plugin')) {
    $foo_plugin = new Foo_Plugin();
}

// three different states of a plugin (installation of plugin is handled by wordpress)
// 1: activation
register_activation_hook( __FILE__, array( $foo_plugin, 'activate' ) );

// 2: deactivation
register_deactivation_hook( __FILE__, array( $foo_plugin, 'deactivate' ) );

// 3: uninstall