<?php

class Pictures extends CI_Model {

    /*
     * This method generates an admin page wrapped in all necessary elements.
     */
    public function uploadPicture($picture){

        $ds = DIRECTORY_SEPARATOR;  //1

        $storeFolder = "../../user_uploads";   //2

        if (!empty($picture)) {
            if($this->session->has_userdata('id')){
                $user_id = $this->session->userdata('id');
            } else {
                $user_id = null;
            }
            $new_picture = array(
                'user_id' => $user_id,
                'date_created' => date("Y-m-d H:i:s")
            );

            $this->db->insert('picture', $new_picture);
            $insert_id = $this->db->insert_id();

            $tempFile = $picture['file']['tmp_name'];          //3

            $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4

            $targetFile =  $targetPath. $insert_id . '.jpg';  //5

            move_uploaded_file($tempFile,$targetFile); //6

            $this->deepDream($targetFile);

            return $insert_id;

        }
    }

    public function deepDream($image){
        $im = imagecreatefromjpeg($image);
        imagefilter($im, IMG_FILTER_GRAYSCALE);
        imagejpeg($im, $image);
    }
}