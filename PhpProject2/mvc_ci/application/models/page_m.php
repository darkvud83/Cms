<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Page_m extends MY_Model {
    
        
    protected $_table_name = 'pages';
    //protected $_primary_key = 'id';
    //protected $_primary_filter='intval';
    protected $_order_by = 'order';
    public $rules = array(
        'parent_id' => array('field'=>'parent_id', 'label' =>'Parent', 'rules'=>'trim|intval'),
        'title' => array('field'=>'title', 'label' =>'Title', 'rules'=>'trim|required|max_lenght[100]|xss_clean'),
        'template' => array('field'=>'template', 'label' =>'Template', 'rules'=>'trim|required|xss_clean'),
        'slug' => array('field'=>'slug', 'label' =>'Slug', 'rules'=>'trim|required|max_lenght[100]|url_title|callback_unique_slug|xss_clean'),
        'order' => array('field'=>'order', 'label' =>'Order', 'rules'=>'trim|is_natural|xss_clean'),  
        'body' => array('field'=>'body', 'label' =>'Body', 'rules'=>'trim|required'),
                         );
   
    public function get_new() {
        $page = new stdClass();
        $page->title = '';
        $page->slug = '';
        $page->order = '';
        $page->body = '';
        $page->template='page';
        $page->parent_id = 0;
        return $page;
        
        
    }
    
    public function get_with_parent ($id = NULL, $single = FALSE)
	{
		$this->db->select('pages.*, p.slug as parent_slug, p.title as parent_title');
		$this->db->join('pages as p', 'pages.parent_id=p.id', 'left');
		return parent::get($id, $single);
	}
        
        public function delete ($id)
	{
		// Delete a page
		parent::delete($id);
		
		// Reset parent ID for its children
		$this->db->set(array(
			'parent_id' => 0
		))->where('parent_id', $id)->update($this->_table_name);
	}

	
	
    
    
    public function get_no_parents ()
	{
		// Fetch pages without parents
		$this->db->select('id, title');
		$this->db->where('parent_id', 0);
		$pages = parent::get();
		
		// Return key => value pair array
		$array = array(
			0 => 'No parent'
		);
		if (count($pages)) {
			foreach ($pages as $page) {
				$array[$page->id] = $page->title;
			}
		}
		
		return $array;
	}
}
