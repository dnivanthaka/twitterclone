<?php
//http://startbootstrap.com/template-categories/all/
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
        //$this->view->load('common/header');
        $this->view->load('forms/login');
        //$this->view->load('common/footer');
    }
    
    public function submit(){
        $user = new User();
        if($user->authenticate($_POST['username'], $_POST['password'])){
            //put any addditional session data creations here
            $this->config->redirect('home');
        }else{
            echo 'Failed';
        }
    }
    
    public function logout(){
        $this->_session->destroy();
        
        $this->config->redirect('login');
    }
}

