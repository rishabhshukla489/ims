<!DOCTYPE html>


<head>
<title>Edit User</title>   
</head>

<body>
<link href = "registration.css" type = "text/css" rel = "stylesheet" />
<link href = "../style.css" type = "text/css" rel = "stylesheet" /> 
<ul>
<li style="float:right;"><a href="../home.php">Back to homepage</a></li>    
</ul>
<?php
include '../connection.php';
$id=$_GET['id'];
$qry= "select * from agent where Agent_code='$id'";
$result=mysqli_query($conn,$qry);
while($row=mysqli_fetch_array($result)){   
?>
<html lang="en">
<h2>Edit Agent : <?php echo $row['Agent_code']; ?></h2>    
        <form name = "form1" action='edit.php' method = 'POST' enctype = "multipart/form-data" >    
            <div class = "container">
             <input type="hidden" name="Agent_code" value="<?php echo $row['Agent_code'];?>">
                <div class = "form_group">    
                    <label>Name:</label>    
                    <input type = "text" name = "Agent_name" value='<?php echo $row['Agent_name']; ?>' required />    
                </div>    
                <div class = "form_group">    
                    <label>Date of Birth:	</label><input type = "date" name = "DOB" value='<?php echo $row['DOB']; ?>' required />
                </div>
				<div class = "form_group">    
                    <label>Address:</label>    
                    <input type = "text" name = "Address" value='<?php echo $row['Address']; ?>' required />    
                </div>
				<div class = "form_group">    
                    <label>Pincode: </label>    
                    <input type = "text" name = "Pincode" value='<?php echo $row['Pincode']; ?>'  required />    
                </div>
				<div class = "form_group">    
                    <label>Branch: </label>    
                    <input type = "text" name = "Branch" value='<?php echo $row['Branch']; ?>'  required />    
                </div>
				<div class = "form_group">    
                    <label>Contact Number: </label>    
                    <input type = "text" name = "Contact_Num" value='<?php echo $row['Contact_Num']; ?>'  required pattern="[0-9]{10}" />    
                </div>
				<div class = "form_group">    
                    <input type = "submit" value = "submit"/>    
                </div>
				<div class = "form_group">    
                    <input type = "reset" value = "reset"/>    
                </div>
           
              
              
            </div>    
        </form> 
        <?php
}
?>   
    </body>    
</html>    