<?php 
class Auth {
    protected $session;
    public function  __construct($session) {
        $this->session = $session;         
     } 
    
    public function isLoggedIn () {
        if(isset($this->session['usuario'])){
            return true;
        }else{
            return false;
        }
    }
}
?>