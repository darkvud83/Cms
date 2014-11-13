<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Posts extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('post');
    }
            function index() {
        
        $this->load->model('post');
        $data['posts']= $this->post->get_posts();
        $this->load->view('post_index',$data);
    }
    function post($postID) {
        
        $data['post']= $this->post->get_post($postID);
        $this->load->view('post',$data);
        
    }
    function new_post() {
        
        if ($_POST) {
            
            $data = array('title' => $_POST['title'],
                'post' => $_POST['post'],
                'active'=>1);
            
            $this->post->insert_post($data);
        }
       
    
    }
    
    function edit_post($postID) {
        
        $data['success']=0;
        if($_POST){
           $data_post = array('title' => $_POST['title'],
                'post' => $_POST['post'],
                'active'=>1);
            $this->post->update_post($postID,$data);
            $data['success']=1;
            
        }
        
        
    }
    
    
    
    
}