/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function() {
    var link = "http://localhost/PhpProject2/shoping_cart/index.php/";
    $("ul.products form").submit(function() {
        
          var  id = $(this).find('input[name=product_id]').val();
           var qty = $(this).find('input[name=quantity]').val();
        $.post(link + "cart/add_cart_item", { product_id: id, quantity: qty, ajax: '1' },
        
         function(data){ 
         
        if(data == 'true'){
            
             $.get(link + "cart/show_cart", function(cart){ // Get the contents of the url cart/show_cart
                $("#cart_content").html(cart); // Replace the information in the div #cart_content with the retrieved data
            });          

         
        }else{
            alert("Product does not exist");
        }

        
         } );

       // $.ajax({
         //   type: 'POST',
           // url: link + 'cart/add_cart_item',
            //data: order
           
        //}
  //  );
       // function(data) {
        // Interact with returned data
         // if (data === 'true') {


        //} else {
          //alert("Product does not exist");
           //}

       //  });




       // alert('ID:' + id + 'quantity:' + qty);
       // return false; // koristi se da bi zaustavilo action metodu 

    });

$(".empty").on("click", function(){
    $.get(link + "cart/empty_cart", function(){
        $.get(link + "cart/show_cart", function(cart){
            $("#cart_content").html(cart);
        });
    });
     
    //return false;
});




});
