<?php  
		$servername = "localhost";  
		$username = "root";  
		$password = "";  
		$conn = mysqli_connect($servername , $username , $password,"test") or die("unable to connect to host"); 
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
			}
?>   