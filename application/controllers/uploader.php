<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uploader extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('pictures');
    }

    public function index(){
        $id = $this->pictures->uploadPicture($_FILES);
        echo $id;
    }
}
