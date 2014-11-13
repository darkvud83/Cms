<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Article extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        //$this->data['subview'] = 'admin/article/login';
        $this->load->model('article_m');
       // $this->load->library('upload');
    }

    public function index() {
        $this->data['articles'] = $this->article_m->get();
        $this->data['subview'] = 'admin/article/index';
        $this->load->view('admin/_layout_main', $this->data);
    }

    public function edit($id = NULL) {

        // $id = NULL || $this->data['article']= $this->article_m->get($id);
        //$this->data['subview']='admin/article/edit';
        $this->load->helper('security');
        if ($id) {

            $this->data['article'] = $this->article_m->get($id);
            //count($this->data['article']) || $this->data['errors'][]='User could not be found';
        } else {

            $this->data['article'] = $this->article_m->get_new();
        }


        //dump($this->data['articles_no_parents']);

        $rules = $this->article_m->rules;
        //$id || $rules['password']['rules'].= '|required';
        $this->form_validation->set_rules($rules);
        if ($this->form_validation->run() == TRUE) {
            $data = $this->article_m->array_from_post(array('title', 'slug', 'body', 'pubdate'));
            //$data['password']= do_hash($data['password'],'md5');
            $this->article_m->save($data, $id);
            redirect('admin/article');
        }

        $this->data['subview'] = 'admin/article/edit';
        $this->load->view('admin/_layout_main', $this->data);
    }

    public function delete($id) {

        $this->article_m->delete($id);
        redirect('admin/article');
    }

    public function postavi() {
        $config['upload_path'] = './uploads';
        $config['allowed_types'] = 'jpg|jpeg';
        $config['max_size'] = '100';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {

            $error = array('error' => $this->upload->display_errors());

            $this->load->view('admin/article/edit', $error);
        } else {
           // $data = array('upload_data' => $this->upload->data());

            //$this->load->view('upload_success', $data);
            redirect('admin/article');
        }
    }

}
