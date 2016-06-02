<?php
require_once('sys/config/config.php');
//http://www.w3schools.com/php/php_error.asp

//echo readfile('php://input');
$script_name = $_SERVER['SCRIPT_NAME'];
$request_uri = $_SERVER['REQUEST_URI'];

$uri = substr($request_uri, strlen($_SERVER['SCRIPT_NAME']));
$segments = explode('/', $uri);
//print_r($segments);

if(count($segments) > 1 && !empty($segments[1])){
    $params = array();
    
    foreach($segments as $param){
        if(!empty($param)){
            $params[] = $param;
        }
    }
    
    //print_r($params);
    
    $class = $params[0];
    $param = $params[1];
    
    //print_r($config['app_dir'].'/'.'controllers'.'/'.$class);
    
    /*if(is_dir($config['app_dir'].'/'.'controllers'.'/'.$class)){
        $class = $param;
        $param = $params[2];
        
        $params = array_slice($params, 1);
    }*/
    
    //print_r($params);

    $obj = new $class();

    if(method_exists($obj, $param) && is_callable(array($obj, $param))){
        $func_args = array_slice($params, 2);
    
        call_user_func_array(array(&$obj, $param), $func_args);
    }else{
        $func_args = array_slice($params, 1);
        call_user_func_array(array(&$obj, 'index'), $func_args);
    }

}else{
    //Load default controller here
    $class = $config['default_controller'];

    $obj = new $class();
    call_user_func(array(&$obj, 'index'));
}


function __autoload($classname)
{
    global $config;
    
    $filename = '';
    $fullnamespace = '';
    
    if (($lastnspos = strripos($classname, '\\')) !== false) {
        $namespace = substr($classname, 0, $lastnspos);
        $classname = substr($classname, $lastnspos + 1);
        $filename = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
        $fullnamespace = '\\'.$namespace.'\\';
    }
    
    //Include parent core class
    include_once($config['system_dir'].DIRECTORY_SEPARATOR.'core'.DIRECTORY_SEPARATOR.'Controller.php');
    // Here we first try to load the class from the controllers of app directory
    // Then we look it in entities, lib directory in app and finally the lib directory in core directory
    if(is_file($config['app_dir'].DIRECTORY_SEPARATOR.'controllers'.DIRECTORY_SEPARATOR.$filename.ucfirst($classname).'.php')){
    
        include_once($config['app_dir'].DIRECTORY_SEPARATOR.'controllers'.DIRECTORY_SEPARATOR.$filename.ucfirst($classname).'.php');
        
    }else if(is_file($config['app_dir'].DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.$filename.ucfirst($classname).'.php')){
        
        include_once($config['app_dir'].DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.$filename.ucfirst($classname).'.php');
        
    }else if(is_file($config['app_dir'].DIRECTORY_SEPARATOR.'lib'.DIRECTORY_SEPARATOR.$filename.ucfirst($classname).'.php')){
    
        include_once($config['app_dir'].DIRECTORY_SEPARATOR.'lib'.DIRECTORY_SEPARATOR.$filename.ucfirst($classname).'.php');
        
    }else{
    
        include_once($config['system_dir'].DIRECTORY_SEPARATOR.'lib'.DIRECTORY_SEPARATOR.$filename.ucfirst($classname).'.php');
    }
    
    if(!class_exists($fullnamespace.ucfirst($classname), false)){
        //header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);
        //echo 'Class does not exist';
        $heading = 'Class does not exist';
        $error = ucfirst($classname);
        require_once($config['system_dir'].'/'.'error_pages/404.php');
        exit();
    }
}

