<?php

class View
{
    private $config;
    
    public function __construct($config){
        $this->config = $config;
    }
    
    public function load($viewname){
        include($this->config->item('app_dir').DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.$viewname.'.php');
    }

}

