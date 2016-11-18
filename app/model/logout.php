<?php

class logout extends Model{
    
    public function logout() {
        //Kill all session data.
        session_start();
        unset($_SESSION);
        session_unset();
        session_destroy(); 
    }
}
?>