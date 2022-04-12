<?php
	session_start();
	include 'connection.php'; 
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$username = $_POST["username"];
		$password = $_POST["password"];
	}
	
	$sql = "SELECT agent_code from agent where agent_name='$username'";
	$result = $conn->query($sql);        

    while($row = $result->fetch_assoc()) {
		if($password == $row["agent_code"]){
			echo "welcome you have successfully logged in";
			$_SESSION["username"] = $username;
			header("Location: home.php");
		}
    }
	$sql = "SELECT Customer_Num from customer where first_name='$username'";
	$result = $conn->query($sql);        

    while($row = $result->fetch_assoc()) {
		if($password == $row["Customer_Num"]){
			echo "welcome you have successfully logged in";
			$_SESSION["username"] = $username;
			header("Location: home.php");
		}
    }
	
	if(!isset($_SESSION["username"])){
		$_SESSION["error"] = "error";
		header("Location: index.php");

	}
?>
