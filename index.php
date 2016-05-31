<?php
//echo readfile('php://input');
$script_name = $_SERVER['SCRIPT_NAME'];
$request_uri = $_SERVER['REQUEST_URI'];

$uri = substr($request_uri, strlen($_SERVER['SCRIPT_NAME']));
$segments = explode('/', $uri);
print_r($segments);

$class = $segments[1];
$param = $segments[2];

$obj = new $class();

if(method_exists($obj, $param) && is_callable(array($obj, $param))){
    call_user_func(array($obj, $param));
}else{
    call_user_func(array($obj, 'index'));
}


function __autoload($classname)
{
    require_once('Controllers/'.ucfirst($classname).'.php');
}

//print_r($_SERVER);
//print_r($_GET);
//echo $uri;