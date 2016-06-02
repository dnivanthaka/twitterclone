<?php

class Controller
{
    protected $view;
    protected $config;

    public function __construct(){       
        $this->config = new Config();
        $this->view   = new View($this->config); 
    }

}

