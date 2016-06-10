<?php
class User{
  const COLLECTION = 'users';
  
  private $_mongo;
  private $_collection;
  private $_user;
  private $_session;
  
  
  public function __construct(){
    $this->_session = Session::getInstance(); 
    $this->_mongo   = DBHandling::getInstance();
    
    $this->_collection = $this->_mongo->getCollection(User::COLLECTION);
    
    if($this->isLoggedIn())
      $this->_load();   
  }
  
  public function isLoggedIn(){
    return $this->_session->get('user_id');
  }
  
  public function authenticate($username, $password){
    $query = array(
      'username' => $username,
      'password' => sha1($password)
    );
    
    $this->_user = $this->_collection->findOne($query);
    if(empty($this->_user)) return false;
    
    $this->_session->put('user_id', (string)$this->_user['_id']);
    //$this->_session->put('role_id', (string)$this->_user['_id']);
    return true;
  }
  
  public function logout(){
    $this->_session->remove('user_id');
  }
  
  public function __get($attr){
    if(empty($this->_user)) return null;
    
    switch($attr){
      case 'firstname':
	    //return sprintf('Town: %s, Planet: %s', $address['town'], $address['planet']);
	    return $this->_user['firstname'];
      case 'lastname':
	    return $this->_user['lastname'];
      case 'email':
	    return $this->_user['email'];
	  case 'password':
	    return null;
      default:
	    return (isset($this->_user[$attr])) ? $this->_user[$attr] : null;
    }
  }
  
  private function _load(){
    $id = new MongoId($this->_session->get('user_id'));
    
    $this->_user = $this->_collection->findOne(array('_id'=>$id));
  }
}
