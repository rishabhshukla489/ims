

<!DOCTYPE html>
<html lang="en">

<head>


    <title>Edited</title>


</head>

<body>
<link href = "registration.css" type = "text/css" rel = "stylesheet" />
<link href = "../style.css" type = "text/css" rel = "stylesheet" />
<ul>
<li style="float:right;"><a href="../home.php">Back to homepage</a></li>    
</ul>                
                    <h1><center>CUSTOMER DETAIL</center></h1>
            
            
                                    

<?php

				include '../connection.php';
				$id=$_POST['id'];
				$fn=$_POST['First_Name'];
		$mn=$_POST['Middle_Name'];
		$d=$_POST['DOB'];
		$ln=$_POST['Last_Name'];
		$g=$_POST['Gender'];
		$a=$_POST['Address'];
		$p=$_POST['Pincode'];
		$con=$_POST['Contact_Number'];
		$mon=$_POST['Mother_Name'];
		$mos=$_POST['Mother_Status'];
		$fan=$_POST['Father_Name'];
		$fas=$_POST['Father_Status'];
		$ms=$_POST['Marital_Status'];
		$s=$_POST['Spouse'];
				//update query
				$qry = "update customer set First_Name='$fn',Middle_Name='$mn',Last_Name='$ln',Gender='$g',DOB='$d',Address='$a',Pincode='$p',Contact_Number='$con', Mother_Name='$mon', Mother_Status='$mos',Father_Name='$fan', Father_Status='$fas', Marital_status='$ms', Spouse='$s' where Customer_num='$id'";
				$result=mysqli_query($conn,$qry); //query executes
                if(!$result){
					echo"ERROR". mysqli_error();
				}else {
					echo"SUCCESSFULLY UPDATED!!!";
					// header("Location:editview.php");

				}

?>
  
                            

</body>
</html>
