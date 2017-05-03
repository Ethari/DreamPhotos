<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('pictures');
    }

    public function index(){
        $this->load->model('admin_loader');
        $this->load->model('user_functions');
        $pictures = array_chunk($this->user_functions->getPictures(), 3);
        $data = array(
            'pictures' => $pictures
        );

        $page = 'gallery';
        $this->admin_loader->generatePage($page, $data);
    }
}
