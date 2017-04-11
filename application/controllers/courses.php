<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends CI_Controller {

    public function index($mode)
    {
        $this->load->model('admin_loader');
        $page = 'create';
        $this->admin_loader->generateAdminPage($page);

    }
}
