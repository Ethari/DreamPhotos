<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('/admin/header_admin');
        $this->load->view('/admin/sidebar');
        $this->load->view('/admin/dashboard');
        $this->load->view('/admin/footer_admin');
	}
}
