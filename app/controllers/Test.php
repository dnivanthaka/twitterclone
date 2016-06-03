<?php
class Test extends Controller{

    public function testMe($p1, $p2){
        echo 'testMeXXX - p1 = '.$p1.' p2 = '.$p2;
    }
    
    public function index($p1, $p2, $p3){
        echo 'Im in index - p1 = '.$p1.' p2 = '.$p2. ' p3 = '.$p3;
        
        $user = new \my\entities\Role();
        
        $user->testCall();
        
        $user2 = new \Role();
        
        $user2->testCall();
        
        $this->view->load('testView');
        $this->view->load('common/testHeader');
    }
}

