<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('authentication');
    }

    public function index()
    {
        $user = $_POST;
        if($this->authentication->login($user)){
            echo "true";
        } else{
            echo "false";
        }
    }
    public function logout(){
        $this->authentication->logout();
    }

    public function register(){
        $new_user = $_POST;

        if($this->authentication->register($new_user)){
            echo "true";
        } else{
            echo "false";
        }
    }
}
