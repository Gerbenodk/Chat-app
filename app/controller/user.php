<?php

class user extends controller{

    public function __construct(){
        if(!isset($_SESSION['userid'])){
            header('Location: /');
        }
    }

    public function index(){
        $model = $this->model('users');
        $users = $model->getUserdata();
        $this->view('common/user/header', ['page' => 'Welkom', 'users' => $users]);
        $this->view('user/index', []);
        $this->view('common/user/footer', []);
    }

    public function education(){
        $model = $this->model('users');
        $users = $model->getUserdata();
        $this->view('common/user/header', ['page' => 'Opleidingen', 'users' => $users]);
        $this->view('user/education', []);
        $this->view('common/user/footer', []);
    }

    public function getsession(){
        $model = $this->model('users');
        $users = $model->getUsersession();
    }

    public function logout(){
         $Model = $this->model('logout');
         $Model->logout();
         header('Location: /');
    }
}
?>
