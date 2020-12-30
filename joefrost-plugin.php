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

if (file_exists(dirname(__FILE__). '/vendor/autoload.php')) {
    require_once dirname(__FILE__).'/vendor/autoload.php';
}

define ( 'JOEFROST_PLUGIN_PATH', plugin_dir_path(__FILE__));

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
        add_action('admin_enqueue_scripts', [$this, 'enqueue_admin']);
        add_action('wp_enqueue_scripts', [$this, 'enqueue_wp']);
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

    function enqueue_admin() {
        // enqueue all scripts
        wp_enqueue_style('mypluginstyle', plugins_url('/assets/admin-style.css', __FILE__ ));
        wp_enqueue_script('mypluginscript', plugins_url('/assets/admin-script.js', __FILE__ ));
    }
    function enqueue_wp() {
        // enqueue all scripts
        wp_enqueue_style('mypluginstyle', plugins_url('/assets/wp-style.css', __FILE__ ));
        wp_enqueue_script('mypluginscript', plugins_url('/assets/wp-script.js', __FILE__ ));
    }
    public function activate() {
        require_once plugin_dir_path( __FILE__) . "inc/base/JoeFrostPluginActivate.php";
        JoeFrostPluginActivate::activate();
    }
    public function deactivate() {
        require_once plugin_dir_path(__FILE__) . "inc/base/JoeFrostPluginDeactivate.php";
        JoeFrostPluginDeactivate::deactivate();
    }
    
}

if (class_exists('JoeFrostPlugin')) {
    $joeFrostPlugin = new JoeFrostPlugin();
    $joeFrostPlugin->register();
}

register_activation_hook( __FILE__, [$joeFrostPlugin,'activate']);
register_deactivation_hook( __FILE__, [$joeFrostPlugin,'deactivate']);

// uninstall
// register_uninstall_hook( __FILE__, [$joeFrostPlugin,'uninstall']);
*/