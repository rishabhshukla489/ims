

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
                    <h1><center>AGENT DETAIL</center></h1>
            
            
                                    

<?php

				include '../connection.php';

				$Agent_code = $_POST["Agent_code"];    
				$Agent_name = $_POST["Agent_name"];
				$DOB = $_POST["DOB"];
				$Address = $_POST["Address"];
				$Pincode = $_POST["Pincode"];
				$Branch = $_POST["Branch"];
				$Contact_Num = $_POST["Contact_Num"];
				//update query
				$qry = "update agent set Agent_code='$Agent_code', Agent_name='$Agent_name', DOB='$DOB', Address='$Address', Pincode='$Pincode', Branch='$Branch', Contact_Num='$Contact_Num' where Agent_code='$Agent_code'";
				$result=mysqli_query($conn,$qry); //query executes
                if(!$result){
					echo "ERROR".  mysqli_error();
				}else {
					echo"SUCCESSFULLY UPDATED!!!";
					// header("Location:editview.php");

				}

?>
  
                            

</body>
</html>
