<?php
require_once('models/loginModel.php');
require_once('views/loginView.php');
require_once('helpers/prendasAuth.php');

    class loginControl {
        private $model;
        private $view;
        private $outhHelper;

        public function __construct() {
            $this->model=new loginModel();
            $this->view=new loginView();
            $this->outhHelper= new outhHelper();
        }
        public function showLogin() {
            $this->view->showLogin();
        }
        public function vereficarUser($username){
            if(isset($_POST['usurname']) && isset ($_POST['password'])) {
                $usurname=$_POST['usurname'];
                $password=$_POST['password'];
                $user= $this->model->getUsersById($username);
            }
            if(!empty($user) && password_verify($password, $usurname->$password)) {
                $this->outhHelper->login($user);

            }
            else{
                $this->view->showLogin();
            }
        } 
        public function logaout() {
            $this->outhHelper->logaout();
        }
    }       
        
?>