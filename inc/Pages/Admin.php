<?php

/*
* @package JoeFrostPlugin
*/

namespace Inc\Pages;

use \Inc\Base\BaseController;
use \Inc\Api\SettingsApi;


class Admin extends BaseController {

    public $settings;
    public $pages;

    public function __construct() {
        $this->settings = new SettingsApi();

        $this->pages = [
            [
                'page_title' => 'Joe Frost Plugin',
                'menu_title' => 'JoeFrost',
                'capability' => 'manage_options',
                'menu_slug' => 'joefrost_plugin',
                'callback' => function() {echo '<h1>Joe</h1>';},
                'icon_url' => 'dashicons-store',
                'position' => 110
            ],
        ];


    }

    public function register() {
        // add_action('admin_menu',[$this,'add_admin_pages']);
        
        $this->settings->addPages($this->pages)->register();

    }
    /*
    public function add_admin_pages() {
        add_menu_page( '','','','', [$this,'admin_index'], 'dashicons-store', 110);
    }
    
    public function admin_index() {
        require_once $this->plugin_path . 'templates/admin.php';
    }
    */
    
}



