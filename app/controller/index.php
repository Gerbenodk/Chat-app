<?php
class index extends controller{

    public function __construct(){
        // session_start();
        if(isset($_SESSION['userid'])){
            header('Location: /home');
          }
    }

    public function index(){
        // session_start();
        if(isset($_POST['username']) && isset($_POST['password'])){
            $model = $this->model('users');
            $result = $model->checkLogin($_POST['username'], $_POST['password']);
        //Controleer of de hash uit de database en het ingevoerde wachtwoord matchen.
        if (password_verify($_POST['password'], $result['password'])) {
                $_SESSION['userid'] = $result['userid'];
                header('Location: /home');
            }
            else {
                $Model = $this->model('logout');
                $Model->logout();
                $this->view('index', ['error' => '1', 'page' => 'Login']);
            }
        }else{
            $this->view('index', ['page' => 'Login']);
        }
    }
}
?>
