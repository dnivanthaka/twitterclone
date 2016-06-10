<?php
class Home extends Controller{
    private $_user;
    private $_session;

    public function __construct(){
        parent::__construct();
        
        //check if the user is properly logged in
        $this->_user = new User();
        $this->_session = Session::getInstance();
        
        if( !$this->_user->isLoggedIn() ){
            $this->config->redirect('login');
        }
        
        $this->view->header('common/header');
        $this->view->footer('common/footer');
    }

    public function index(){
        //echo 'This is home'.'<br/>';
        //echo '<a href="login/logout">Logout</a>';
        $this->view->load('dashboard');
    }
}
