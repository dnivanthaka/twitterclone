<?php
class Login extends Controller{
    private $session;
    
    public function __construct(){
        parent::__construct();
        
        $this->session = new Session();       
        $this->session->put('TEST', '123');
    }
    
    public function index(){
        //echo $this->session->get('TEST');
        
        //$this->view->load('common/header');
        $this->view->load('forms/login');
        //$this->view->load('common/footer');
    }
    
    public function submit(){
        echo $_POST['username'].' - '.$_POST['password'];
    }
}

