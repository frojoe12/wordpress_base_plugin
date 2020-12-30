<?php

/*
* @package JoeFrostPlugin
*/

namespace Inc\Pages;

class Admin {

    public function register() {
        add_action('admin_menu',[$this,'add_admin_pages']);
    }

    public function add_admin_pages() {
        add_menu_page( 'Joe Frost Plugin','JoeFrost','manage_options','joefrost_plugin', [$this,'admin_index'], 'dashicons-store', 110);
    }

    public function admin_index() {
        require_once JOEFROST_PLUGIN_PATH . 'templates/admin.php';
    }
    
}