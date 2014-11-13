<!DOCTYPE html>

<html>
	<head>
		<title>	Delete book</title>
	</head>
	
	<body>
		
		
		
		<?php
		
	$con=mysqli_connect("localhost","root","","phonebook");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Pukla konekcija: " . mysqli_connect_error();
  }
  
else {
	
	echo "Konekcija je uspela";
	
}

	//$result = mysqli_query($con,"SELECT * FROM address ORDER BY name ASC");
	
	if (isset ($_POST['Update'])){
		
		$updateQuery = mysqli_query($con, "UPDATE address SET name = '$_POST[Name]', phone = '$_POST[Phone]', email = '$_POST[Email]' WHERE id = '$_POST[Hidden]' ");
		
	};
	
	
	if (isset ($_POST['Delete'])){
		
		$deleteQuery = mysqli_query($con, "DELETE FROM address WHERE id = '$_POST[Hidden]' ");
		
	};
	
	
	
	$result = mysqli_query($con,"SELECT * FROM address ORDER BY name ASC");
	
 echo "<h2>Address Book</h2><p>"; 
 echo "<table border cellpadding=3>"; 
 echo "<tr><th width=100>Name</th>
            <th width=100>Phone</th>
            <th width=200>Email</th>
            
       </tr>"; 
 
       while($info = mysqli_fetch_array( $result )) 
 {
 echo "<form action= delete.php method= post>"; 
 echo "<tr>";
 echo "<td>". "<input type=text name=Name value= ". $info['name'] . ">" . "</td>"; 
 echo "<td>"."<input type=text name=Phone value= ". $info['phone'] . ">" . "</td>"; 
 echo "<td>"."<input type=text name=Email value= ". $info['email'] . ">" . "</td>";
 echo "<td>"."<input type=hidden name=Hidden value= ". $info['id'] . ">" . "</td>";
 echo "<td>"."<input type=submit name=Update value=update " . ">" . "</td>";
 echo "<td>"."<input type=submit name=Delete value=delete " . ">" . "</td>";
 echo "</tr>"; 
 echo "</form>";
 }
 echo "</table>"; 
	
	
	
		?>
	</body>
	
	
	
</html>