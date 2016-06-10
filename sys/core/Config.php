<?php

class Config
{
    private $keys;
    
    private static $instance;

    private function __construct(){
        global $config;
        
        require_once($config['system_dir'].DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'config.php');
        
        $this->keys = $config;
    }
    
    public static function getInstance(){
        if(!isset(self::$instance)){
          self::$instance = new Config();
        }
        //var_dump(self::$instance);
        return self::$instance;
    }
    
    public function item($key){
        if(array_key_exists($key, $this->keys))
            return $this->keys[$key];
        else
            return null;
    }
    
    public function site_url(){
        return $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'];
    }
    
    public function base_url(){
        $url = $this->site_url();
        return substr($url, 0, strrpos($url, '/'));
    }
    
    public function redirect($url){
        //http://regexone.com/references/php
        if(preg_match("@^(https?://)([^/]+)@i", $url)){
            header("Location: ${url}");
        }else{
            $url = $this->site_url().'/'.$url;
            header("Location: ${url}");
        }
        //header("Location: ${url}");
        exit();
    }

}

