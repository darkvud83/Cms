<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Page extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        //$this->data['subview'] = 'admin/page/login';
        $this->load->model('page_m');
    }

    public function index() {
        $this->data['pages'] = $this->page_m->get_with_parent();
        $this->data['subview'] = 'admin/page/index';
        $this->load->view('admin/_layout_main', $this->data);
    }

    public function edit($id = NULL) {

        // $id = NULL || $this->data['page']= $this->page_m->get($id);
        //$this->data['subview']='admin/page/edit';
        $this->load->helper('security');
        if ($id) {

            $this->data['page'] = $this->page_m->get($id);
            //count($this->data['page']) || $this->data['errors'][]='User could not be found';
        } else {

            $this->data['page'] = $this->page_m->get_new();
        }

        $this->data['pages_no_parents'] = $this->page_m->get_no_parents();
        //dump($this->data['pages_no_parents']);

        $rules = $this->page_m->rules;
        //$id || $rules['password']['rules'].= '|required';
        $this->form_validation->set_rules($rules);
        if ($this->form_validation->run() == TRUE) {
            $data = $this->page_m->array_from_post(array('title', 'slug', 'order', 'body', 'template', 'parent_id'));
            //$data['password']= do_hash($data['password'],'md5');
            $this->page_m->save($data, $id);
            redirect('admin/page');
        }

        $this->data['subview'] = 'admin/page/edit';
        $this->load->view('admin/_layout_main', $this->data);
    }

    public function delete($id) {

        $this->page_m->delete($id);
        redirect('admin/page');
    }

    public function _unique_slug($str) {

        $id = $this->uri->segment(4);
        $this->db->where('slug', $this->input->post('slug'));
        !$id || $this->db->where('id !=', $id);
        $page = $this->page_m->get();
        if (count($page)) {

            $this->form_validation->set_message('_unique_slug', '%s should be unique');
            return FALSE;
        } else {

            return TRUE;
        }
    }

}
