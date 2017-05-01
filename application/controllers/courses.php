<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends CI_Controller {

    public function index()
    {
        $this->load->model('Courses_Model');
        $courses = $this->Courses_Model->getCourses(1);
        $data = array(
            'courses' => $courses
        );

        $msg = $this->load->view('/admin/courses', $data, true);
        echo $msg;

    }
}
