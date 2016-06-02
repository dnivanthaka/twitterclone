<?php

class Config
{
    public $keys;

    public function __construct(){
        global $config;
        
        require_once($config['system_dir'].DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'config.php');
        
        $this->keys = $config;
    }

}

