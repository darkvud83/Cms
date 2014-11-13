<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Migration extends Admin_Controller {
    
    function __construct() {
        parent::__construct();
    }
    
    public function index() {
        
      
      $this->load->library('migration');

      if ( ! $this->migration->current())
{
	show_error($this->migration->error_string());
}
 else {
    echo 'Migration worked';
}
        
        
    }
    
    
}
