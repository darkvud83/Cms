<!DOCTYPE html>

<html>
	<head>
		<title>	Upload Data</title>
	</head>
	
	<body>
		
           
<h2> Upload data </h2>

		<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo $error; 

 echo form_open_multipart('upload/postavi');
 $data_form=array('name'=>'userfile');
 echo form_upload($data_form)."<br>";
 echo form_submit('','Upload');
 echo form_close();
		?>
	</body>
	
	
	
</html>


