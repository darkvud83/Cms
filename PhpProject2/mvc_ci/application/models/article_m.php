<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Article_m extends MY_Model {
    
        
    protected $_table_name = 'articles';
    //protected $_primary_key = 'id';
    //protected $_primary_filter='intval';
    protected $_order_by = 'pubdate desc, id desc';
    protected $_timestamps = TRUE;
    public $rules = array(
        'pubdate' => array('field'=>'pubdate', 'label' =>'Publication date', 'rules'=>'trim|required|exact_length[10]|xss_clean'),
        'email' => array('field'=>'title', 'label' =>'Title', 'rules'=>'trim|required|max_lenght[100]|xss_clean'),
        'slug' => array('field'=>'slug', 'label' =>'Slug', 'rules'=>'trim|required|max_lenght[100]|url_title|xss_clean'),
        'order' => array('field'=>'order', 'label' =>'Order', 'rules'=>'trim|is_natural|xss_clean'),  
        'body' => array('field'=>'body', 'label' =>'Body', 'rules'=>'trim|required'),
                         );
   
    public function get_new() {
        $article = new stdClass();
        $article->title = '';
        $article->slug = '';
        $article->order = '';
        $article->body = '';
        $article->pubdate = date('Y-m-d');
        return $article;
        
        
    }
    public function get2() {
        $query = $this->db->get('articles');
        return $query ->result();
        
        
        
    }
    
   
        
       
}
