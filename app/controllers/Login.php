<?php
//http://startbootstrap.com/template-categories/all/
//http://getbootstrap.com/getting-started/

class Login extends Controller{
    private $_session;
    private $_db;
   
    //private $_user;
    
    public function __construct(){
        parent::__construct();
        
        $this->_session = Session::getInstance();       
        $this->_session->put('TEST', '123');
        
        $this->_db = DBHandling::getInstance();
    }
    
    public function index(){
        //Testing code only
        $qb = new QueryBuilder(null);
        echo $qb->insert('test', array('col1'=>'val1', 'col2'=>'val 2'));
        echo $qb->insert('test', array('val1', 'val 2'));
        
    
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
        //logout();
        $this->_session->destroy();
        
        $this->config->redirect('login');
    }
}

