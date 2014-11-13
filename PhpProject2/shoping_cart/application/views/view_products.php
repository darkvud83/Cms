<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Shopping Cart</title>

        <link href="<?php echo base_url(); ?>assets/css/core.css" media="screen" rel="stylesheet" type="text/css" />

        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/core.js"></script>
    </head>



    <body>

        <div id="wrap">

            <?php $this->view($content); ?>
            <div id="products" class="cart_list">
                <h3>Your shopping cart</h3>
                <div id="cart_content">
                    <?php echo $this->view('cart/cart.php'); ?>
                </div>
            </div>


        </div>


    </body>
</html>
