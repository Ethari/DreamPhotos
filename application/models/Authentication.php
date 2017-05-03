<?php

class Authentication extends CI_Model {

    /*
     * This method generates an admin page wrapped in all necessary elements.
     */
    public function login($user){

        $this->db->where('username',$user['username']);
        $query = $this->db->get('user');

        if ($query->num_rows() > 0){
            $results = $query->result_array();
            $hashed_password = $results[0]['password'];

            if (hash_equals($hashed_password, crypt($user['password'], "d41d8cd98f00b204e9800998ecf8427e"))) {
                $user = array(
                    'username' => $user['username'],
                    'id' => $results[0]['id'],
                    'name' => $results[0]['firstName'],
                    'logged_in' => time()
                );
                $this->session->set_userdata($user);
                return true;
            } else{
                return false;
            }
        }
        else{
            return false;
        }

    }

    public function logout(){
        $user = array('username', 'logged_in', 'name', 'id');
        $this->session->unset_userdata($user);
    }

    public function register($user){
        $this->db->where('username',$user['username']);
        $query = $this->db->get('user');
        if ($query->num_rows() > 0){
            return false;
        }
        else{

            $user_insert = array(
                'username' => $user['username'],
                'firstName' => $user['firstName'],
                'lastName' => $user['lastName'],
                'email' => $user['email'],
                'password' => crypt($user['password_one'], 'd41d8cd98f00b204e9800998ecf8427e'),
                'joined' => date("Y-m-d H:i:s")
            );

            $this->db->insert('user', $user_insert);
            $insert_id = $this->db->insert_id();


            $session_user = array(
                'username' => $user['username'],
                'id' => $insert_id,
                'name' => $user['firstName'],
                'logged_in' => time()
            );

            $this->session->set_userdata($session_user);
            return true;
        }
    }
}