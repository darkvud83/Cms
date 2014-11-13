<!DOCTYPE html>

<html>
	<head>
		<title>	Post Data</title>
	</head>
	
	<body>
		
            	
<h2> Blog post </h2>


<?php

 foreach ($posts as $row) {
    
     echo $row->postID. "<br>";
     echo $row->title. "<br>";
     echo $row->post. "<br>";
      echo $row->date_added. "<br>";
 }
    ?>
   

		
		
	</body>
	
	
	
</html>

