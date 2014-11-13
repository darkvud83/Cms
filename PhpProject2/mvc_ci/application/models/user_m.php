<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class User_m extends MY_Model {
    
    protected $_table_name = 'users';
    protected $_order_by = 'name';
    
    public $rules = array(
        
        'email' => array('field'=>'email', 'label' =>'Email', 'rules'=>'trim|required|valid_email|xss_clean'),
        'password' => array('field'=>'password', 'label' =>'Password', 'rules'=>'required|md5|trim')
                         );
    
     public $rules_admin = array(
        'name' => array('field'=>'name', 'label'=>'Name', 'rules'=>'trim|required|xss_clean'),
        //'order' => array('field'=>'order', 'label' =>'Order', 'rules'=>'trim|is_natural'),
        'email' => array('field'=>'email', 'label' =>'Email', 'rules'=>'trim|required|valid_email|callback__unique_email|xss_clean'),
        'password' => array('field'=>'password', 'label' =>'Password', 'rules'=>'trim|required'),
        'confirm_password' => array('field'=>'confirm_password', 'label' =>'Confirm Password', 'rules'=>'trim|matches[password]')
                         );
    
   
    public function __construct() {
        parent::__construct();
    }
    
    public function login() {
        $user = $this->get_by(array('email'=> $this->input->post('email'),
            
            'password'=> $this->input->post('password')
            ),TRUE);
        
        if(count($user)) {
            
            $data = array(
                'name'=>$user->name,
                'email'=>$user->email,
                'id'=>$user->id,
                'loggedin'=>TRUE
            );
            $this->session->set_userdata($data);
            
        }
    }
    
    public function logout() {
        $this->session->sess_destroy();
        
    }
    
    public function loggedin() {
        
        return (bool)$this->session->userdata('loggedin');
        
    }
    public function get_new() {
        $user = new stdClass();
        $user->name = '';
        $user->email = '';
        $user->password = '';
        return $user;
        
        
    }
  
}