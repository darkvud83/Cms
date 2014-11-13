<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class User extends Admin_Controller {
    
    public function __construct() {
        parent::__construct();
        //$this->load->model('user_m');
        //$this->data['subview'] = 'admin/user/login';
    }
    
    public function index() {
        $this->data['users']= $this->user_m->get();
        $this->data['subview']='admin/user/index';
        $this->load->view('admin/_layout_main',  $this->data);
        
        
    }
    public function edit($id = NULL) {
        
        $id = NULL || $this->data['user']= $this->user_m->get($id);
        //$this->data['subview']='admin/user/edit';
        $this->load->helper('security');
        if($id) {
            
            $this->data['user'] = $this->user_m->get($id);
            //count($this->data['user']) || $this->data['errors'][]='User could not be found';
            
        }
 else {
     
            $this->data['user'] = $this->user_m->get_new();
 }
         $rules = $this->user_m->rules_admin;
         $id || $rules['password']['rules'].= '|required';
         $this->form_validation->set_rules($rules);
         if($this->form_validation->run()==TRUE) {
             $data = $this->user_m->array_from_post(array('name','email','password'));
            $data['password']= do_hash($data['password'],'md5');
            $this->user_m->save($data,$id);
            redirect('admin/user');
         }
            
        $this->data['subview']='admin/user/edit';
        $this->load->view('admin/_layout_main',  $this->data);
        
    }
    public function delete($id)  {
        
        $this->user_m->delete($id);
        redirect('admin/user');
    }

    public function login() {
        $dashboard='admin/dashboard';
        $this->user_m->loggedin()== FALSE || redirect($dashboard);
        
         $rules = $this->user_m->rules;
         $this->form_validation->set_rules($rules);
         if($this->form_validation->run()==TRUE) {
             //We can login and redirect
            if ($this->user_m->login() == TRUE) {
                
                redirect($dashboard);
                
            }
 else {
     
                $this->session->set_flashdata('error','That email password is not exist');
                redirect('admin/user/login','refresh');
 }
         }
         $this->data['subview'] = 'admin/user/login';
         $this->load->view('admin/_layout_modal',  $this->data);
    }
    public function logout() {
        
        $this->user_m->logout();
        redirect('admin/user/login');
        
    }
    public function _unique_email($str) {
        
        $id = $this->uri->segment(4);
        $this->db->where('email', $this->input->post('email'));
        !$id || $this->db->where('id !=', $id);
        $user = $this->user_m->get();
        if (count($user)) {
            
            $this->form_validation->set_message('_unique_email', '%s should be unique');
            return FALSE;
            
        }
 else {
     
            return TRUE;
 }
        
    }
    
}