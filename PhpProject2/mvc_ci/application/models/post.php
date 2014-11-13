<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Post extends CI_Model {
    
    function get_posts() {
        $this->db->where('active',1);
       $query= $this->db->get('posts',10);
        return $query->result();
    }
    
    function get_post($postID) {
        
        $this->db->where(array('active'=>1,'postID'=>$postID));
        $query= $this->db->get('posts',10);
        return $query->first_row();
        
    }
    
    function insert_post($data) {
        
        $data= array ('title'=>'this is a test post',
                      'description'=>'this is description'
            );
            $this->db->insert('posts',$data);
            return $this->db->insert_id();
    }
    function update_post($postID,$data) {
         $this->db->where('postID',$postID);
         $this->db->update('posts',$data);
        
    }
    function delete_post($postID,$data) {
         $this->db->where('postID',$postID);
        $this->db->delete($postID,$data);
        
        
    }
}
