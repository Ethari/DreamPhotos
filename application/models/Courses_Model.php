<?php

class Courses_Model extends CI_Model {

    public function getCourses($user){
        $sql = "SELECT * FROM course WHERE owner = " . $user;
        $query = $this->db->query($sql);

        return $query->result_array();
    }
}