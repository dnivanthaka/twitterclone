<?php

class View
{
    public function __construct(){
        //echo 'Parent View Construct';
    }
    
    public function load($viewname){
        global $config;
    
        include($config['app_dir'].DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.$viewname.'.php');
    }

}

