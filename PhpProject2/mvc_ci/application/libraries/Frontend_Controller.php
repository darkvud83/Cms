<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Frontend_Controller extends My_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('page_m');
    }
    
    
    
}