<?php

/*
* @package JoeFrostPlugin
*/

namespace Inc\Base;

class Enqueue {

    public function register() {
        add_action('admin_enqueue_scripts', [$this, 'enqueue_admin']);
        add_action('wp_enqueue_scripts', [$this, 'enqueue_wp']);
        
    }

    function enqueue_admin() {
        // enqueue all scripts admin pages
        wp_enqueue_style('mypluginstyle', JOEFROST_PLUGIN_URL . 'assets/admin-style.css');
        wp_enqueue_script('mypluginscript',  JOEFROST_PLUGIN_URL . 'assets/admin-script.js');
    }
    function enqueue_wp() {
        // enqueue all scripts non-admin pages
        wp_enqueue_style('mypluginstyle',  JOEFROST_PLUGIN_URL . 'assets/wp-style.css');
        wp_enqueue_script('mypluginscript',  JOEFROST_PLUGIN_URL . 'assets/wp-script.js');
    }

}