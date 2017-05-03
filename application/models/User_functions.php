<?php

class User_functions extends CI_Model {

    public function getPictures(){
        if($this->session->has_userdata('id')){
            $id = $this->session->userdata('id');
        } else{
            $id = null;
        }

        $sql = "SELECT * FROM picture WHERE user_id = " . $id;
        $query = $this->db->query($sql);

        return $query->result_array();
    }
}