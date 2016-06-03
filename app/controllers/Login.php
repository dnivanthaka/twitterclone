<?php
//http://startbootstrap.com/template-categories/all/
//http://getbootstrap.com/getting-started/

class Login extends Controller{
    private $_session;
    private $_db;
    
    public function __construct(){
        parent::__construct();
        
        $this->_session = Session::getInstance();       
        $this->_session->put('TEST', '123');
        
        $this->_db = DBHandling::getInstance();
    }
    
    public function index(){
        //echo $this->session->get('TEST');
        
        //$this->view->load('common/header');
        $this->view->load('forms/login');
        //$this->view->load('common/footer');
    }
    
    public function submit(){
        $user = new User();
        if($user->authenticate($_POST['username'], $_POST['password'])){
            echo 'Success';
        }else{
            echo 'Failed';
        }
        
        
        echo $_POST['username'].' - '.$_POST['password'];
        
    }
}

