<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main_model extends CI_Model {

    function insertNewuser($postData){
        
        $response = "";
        
        if($postData['txt_name'] !='' || $postData['txt_uname'] !='' || $postData['txt_email'] !=''  ){
            
            // Check entry
            $this->db->select('count(*) as allcount');
            $this->db->where('username', $postData['txt_uname']);
            $q = $this->db->get('users3');
            $result = $q->result_array();
        
            if($result[0]['allcount'] == 0){

                // Insert record
                $newuser = array(
                    "name" => trim($postData['txt_name']),
                    "username" => trim($postData['txt_uname']),
                    "email" => trim($postData['txt_email'])
                );

                // $this->db->insert( [table-name], Array )
                $this->db->insert('users3', $newuser);

                $response = "Record insert successfully.";

            }else{
                $response = "Username already in use";
            }
		}else{
            $response = "Form is empty.";
        }
        
        return $response;
    }

}