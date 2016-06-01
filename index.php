<?php
require_once('config/config.php');
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
    require_once('Controllers/'.ucfirst($classname).'.php');
    
    if(!class_exists(ucfirst($classname), false)){
        //header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);
        //echo 'Class does not exist';
        $error = 'Class does not exist - '.ucfirst($classname);
        require_once('error_pages/404.php');
        exit();
    }
}


//print_r($_SERVER);
//print_r($_GET);
//echo $uri;