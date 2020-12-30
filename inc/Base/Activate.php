<?php

/*
* @package JoeFrostPlugin
*/

namespace Inc\Base;

class Activate 
{
    public static function activate() {
        echo "aaa";
        flush_rewrite_rules();
    }
}