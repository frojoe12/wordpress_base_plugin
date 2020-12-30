<?php

/*
* @package JoeFrostPlugin
*/

namespace Inc\Base;

use \Inc\Base\BaseController;

class Enqueue extends BaseController {

    public function register() {
        add_action('admin_enqueue_scripts', [$this, 'enqueue_admin']);
        add_action('wp_enqueue_scripts', [$this, 'enqueue_wp']);
        
    }

    function enqueue_admin() {
        // enqueue all scripts admin pages
        wp_enqueue_style('mypluginstyle', $this->plugin_url . 'assets/admin-style.css');
        wp_enqueue_script('mypluginscript',  $this->plugin_url . 'assets/admin-script.js');
    }
    function enqueue_wp() {
        // enqueue all scripts non-admin pages
        wp_enqueue_style('mypluginstyle',  $this->plugin_url . 'assets/wp-style.css');
        wp_enqueue_script('mypluginscript',  $this->plugin_url . 'assets/wp-script.js');
    }

}