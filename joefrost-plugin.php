<?php

/*
* @package JoeFrostPlugin
*/

/*
* Plugin Name: joefrost-plugin
* Plugin URI: https://www.joefrost.co.uk
* Description: This is a custom plugin for testing.
* Version: 1.0.0
* Author: Joe Frost
* Author URI: https://www.joefrost.co.uk
* License: GPLv2 or later
* Text Domain: joefrost-plugin
*/

if (!defined('ABSPATH')) {
    die("Direct access to file prohibited.");
}

// require composer autoload
if (file_exists(dirname( __FILE__ ) . '/vendor/autoload.php')) {
    require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}



function joefrost_plugin_activate() {
    Inc\Base\Activate::activate();
}
register_activation_hook( __FILE__, 'joefrost_plugin_activate');

function joefrost_plugin_deactivate() {
    Inc\Base\Deactivate::deactivate();
}
register_deactivation_hook( __FILE__, 'joefrost_plugin_deactivate');


if (class_exists('Inc\\Init')) {
    Inc\Init::register_services();
}

/*
class JoeFrostPlugin {

    public $plugin;

    function __construct() {
        $this->plugin = plugin_basename(__FILE__);
    }

    public function register() {
        
        add_action('admin_menu',[$this,'add_admin_pages']);
        
        add_filter('plugin_action_links_' . $this->plugin , [$this,'settings_link']);
    }

    public function settings_link($links) {
        $settings_link = '<a href="options-general.php?page=joefrost_plugin">Settings</a>';
        array_push($links,$settings_link);
        return $links;
    }

    function uninstall() {
        // delete CPT
        // delete plugin data from Database
    }

    protected function custom_post_type() {
        register_post_type('book',[ 'public' => true, 'label' =>'Books' ]);
    }

    
    
    
}

if (class_exists('JoeFrostPlugin')) {
    $joeFrostPlugin = new JoeFrostPlugin();
    $joeFrostPlugin->register();
}



// uninstall
// register_uninstall_hook( __FILE__, [$joeFrostPlugin,'uninstall']);
*/