<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Cart extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('cart_model');
    }

    function index() {

        $data['products'] = $this->cart_model->retrieve_product();
       // print_r($data['products']);
        $data['content'] = 'cart/products';
        $this->load->view('view_products', $data);
    }
    function show_cart(){
    $this->load->view('cart/cart');
}

function add_cart_item(){
     
    if($this->cart_model->validate_add_cart_item() == TRUE){
         
        // Check if user has javascript enabled
        if($this->input->post('ajax') != '1'){
            redirect('cart'); // If javascript is not enabled, reload the page with new data
        }else{
            echo 'true'; // If javascript is enabled, return true, so the cart gets updated
        }
    }
     
}

function update_cart() {
    
    $this->cart_model->validate_update_cart();
    redirect('cart');
    
    
}

function empty_cart(){
    $this->cart->destroy(); // Destroy all cart data
    redirect('cart'); // Refresh te page
}




}
