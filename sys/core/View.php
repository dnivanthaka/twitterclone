<?php

class View
{
    private $config;
    private $_template;
    private $_template_header;
    private $_template_footer;
    
    public function __construct(){
        $this->config = Config::getInstance();
    }
    
    public function load($viewname, &$data = NULL){
        
        if(is_array($data)){
            foreach($data as $key => $value){
                $$key = $value;
            }
        }
    
        if(isset($this->_template_header)){
            include($this->config->item('app_dir').DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.$this->_template_header.'.php');
        }
        
        include($this->config->item('app_dir').DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.$viewname.'.php');
        
        if(isset($this->_template_footer)){
            include($this->config->item('app_dir').DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.$this->_template_footer.'.php');
        }
    }

    public function template($template){
        $this->_template = $template;
    }
    
    public function header($header){
        $this->_template_header = $header;
    }
    
    public function footer($footer){
        $this->_template_footer = $footer;
    }
}

