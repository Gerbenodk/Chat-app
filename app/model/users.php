<?php
class users extends model{
    
        public function __construct(){
        parent::__construct();
        
        // $hash = password_hash('root', PASSWORD_BCRYPT);
        // $this->query('INSERT INTO user (username,userlastname,password,) VALUES (:username,:userlastname,:password,)');
        // $this->bind(':username', 'test');
        // $this->bind(':userlastname', 'testachternaam');
        // $this->bind(':password', 'root');
        // $this->bind(':password', $hash);
        // $this->execute();
        // if ($this->execute() == true) {
        //     echo'inserted';
        // }
    }
    
    public function checkLogin($username){
        $this->query('SELECT * FROM user WHERE username=:username');
        $this->bind(':username', $username);
        return $this->single();
    }
    
    public function getUsersession() {
        $this->query('SELECT * FROM user WHERE userid=:userid');
        $this->bind(':userid', $_SESSION['userid']);
        return $this->single();
    }
    
    public function getUserdata() {
        $this->query('SELECT * FROM user');
        return $this->resultSet();
        
    }
    
}
?>
