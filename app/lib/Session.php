<?php
session_start();

class Session{
    private $session_id;
    
    public function __construct(){
        $session_id = session_id();
    }
    
    public function destroy_session(){
        session_destroy();
    }
    
    public function put($key, $value=''){
        if(is_array($key)){
            foreach($key as $k=>$v){
                $_SESSION[$k] = $v;
            }
        }else{
            $_SESSION[$key] = $value;
        }
    }
    
    public function get($key){
        return $_SESSION[$key];
    }
}