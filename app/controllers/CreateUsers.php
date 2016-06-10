<?php
//http://startbootstrap.com/template-categories/all/
//http://getbootstrap.com/getting-started/

class CreateUsers extends Controller{
    private $_session;
    private $_db;
    private $_collection;
   
    //private $_user;
    
    public function __construct(){
        parent::__construct();
        
        $this->_session = Session::getInstance();       
        $this->_session->put('TEST', '123');
        
        $this->_db = DBHandling::getInstance();
        $this->_collection = $this->_db->getCollection(User::COLLECTION);
        
        if($this->_collection->count() == 0){
            echo 'No users';
        }else{
            echo $this->_collection->count().' users found.';  
        }
    }
    
    public function index(){
        //Testing code only
        $qb = new QueryBuilder(null);
        //echo $qb->insert('test', array('col1'=>'val1', 'col2'=>'val 2'));
        //echo $qb->insert('test', array('val1', 'val 2'));
        
    }
    
    public function remove(){
        $this->_collection->remove();
    }
    
    public function insert(){
        $this->_collection->insert(array('username'=>'root', 'password'=>sha1('root')));
    }
    
}

