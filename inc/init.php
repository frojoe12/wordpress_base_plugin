<?php

/*
* @package JoeFrostPlugin
*/

namespace Inc;

final class Init {
    /*
    * Store all the classes inside an array
    * @return array Full list of classes
    */
    public static function get_services() {
        return [
            Base\Activate::class,
            Pages\Admin::class
        ];
    }

    /*
    * Loop through the classes, initialise them
    * and call the register() method if it exists
    * @return [type] [description]
    */
    public static function register_services() {
        $admin = new Pages\Admin;
        
        foreach( self::get_services() as $class) {
            $service = self::instantiate($class);
            if (method_exists($service,'register')) {
                $service->register();
            }
        }
    }

    /*
    * initialise the class
    * @param    class $class    class from the services array
    * @return   class instance  new instance of the class
    */
    private static function instantiate( $class ) {

        $service = new $class();
        
        return $service;
    }

}