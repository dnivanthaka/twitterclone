<?php
class Home extends Controller{
    private $_user;
    private $_session;
    private $_db;
    private $_collection;

    public function __construct(){
        parent::__construct();
        
        $this->_session = Session::getInstance();
        $this->_db = DBHandling::getInstance();
        $this->_collection = $this->_db->getCollection("posts");
        
        //check if the user is properly logged in
        $this->_user = new User();
        
        if( !$this->_user->isLoggedIn() ){
            $this->config->redirect('login');
        }
        
        $this->view->header('common/header');
        $this->view->footer('common/footer');
    }

    public function index(){
        $data = array(
        'posts' => $this->_collection->find());
    
        $this->view->load('dashboard', $data);
    }
    
    public function post(){
        if(isset($_POST['post'])){
            $post = $_POST['post'];
            $user_id = $this->_session->get('user_id');
            
            try{
                $this->_collection->insert(array('post' => $post, 'user_id' => new MongoId($user_id), 'created_at' => new MongoDate()));
            }catch(Exception $e){
                echo $e->getMessage();
            }
        }
        
        $this->config->redirect('home');
    }
}
