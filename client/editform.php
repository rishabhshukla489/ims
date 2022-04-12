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
$qry= "select * from customer where Customer_num='$id'";
$result=mysqli_query($conn,$qry);
while($row=mysqli_fetch_array($result)){   
?>
<html lang="en">
<h2>Edit Customer : <?php echo $id; ?></h2>    
        <form name = "form1" action='edit.php' method = 'POST' enctype = "multipart/form-data" >    
            <div class = "container">
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <div class = "form_group">    
                    <label>First Name:</label>    
                    <input type = "text" name = "First_Name" value = '<?php echo $row['First_Name']; ?>' required />    
                </div>    
                <div class = "form_group">    
                    <label>Middle Name:</label>    
                    <input type = "text" name = "Middle_Name" value = '<?php echo $row['Middle_Name']; ?>' required />    
                </div>    
                <div class = "form_group">    
                    <label>Last Name:</label>    
                    <input type = "text" name = "Last_Name" value = '<?php echo $row['Last_Name']; ?>' required />    
                </div>  
				<div class = "form_group">    
                    <label>Gender:	</label><input type = "radio" name = "Gender" <?php if($row['Gender']=="M") {echo "checked";}?> value ="M"  required />Male<input type = "radio" name = "Gender" <?php if($row['Gender']=="F") {echo "checked";}?> value = "F"  required />Female
                </div>
				<div class = "form_group">    
                    <label>Date of Birth:	</label><input type = "date" name = "DOB" value = '<?php echo $row['DOB']; ?>' required />
                </div>
				<div class = "form_group">    
                    <label>Address:</label>    
                    <input type = "text" name = "Address" value = '<?php echo $row['Address']; ?>' required />    
                </div>
				
				<div class = "form_group">    
                    <label>Pincode: </label>    
                    <input type = "text" name = "Pincode" value = '<?php echo $row['Pincode']; ?>'  required />    
                </div>
				<div class = "form_group">    
                    <label>Contact Number: </label>    
                    <input type = "text" name = "Contact_Number" value = '<?php echo $row['Contact_Number']; ?>'  required pattern="[0-9]{10}" />    
                </div>
				<div class = "form_group">    
                    <label>Mother Name: </label>    
                    <input type = "text" name = "Mother_Name" value = '<?php echo $row['Mother_Name']; ?>'  required />    
                </div>
				<div class = "form_group">    
                    <label>Mother Status: </label>    
                    <input type = "radio" name = "Mother_Status" <?php if($row['Mother_Status']=="A") {echo "checked";}?> value = "A" required />Alive	    <input type = "radio" name = "Mother_Status" <?php if($row['Mother_Status']=="D") {echo "checked";}?> value = "D" required />Dead    
                </div>
				<div class = "form_group">    
                    <label>Father Name: </label>    
                    <input type = "textbox" name = "Father_Name" value = '<?php echo $row['Father_Name']; ?>'  required />    
                </div>
				<div class = "form_group">    
                    <label>Father Status: </label>    
                    <input type = "radio" name = "Father_Status" <?php if($row['Father_Status']=="A") {echo "checked";}?> value = "A" required />Alive	    <input type = "radio" name = "Father_Status" <?php if($row['Father_Status']=="D") {echo "checked";}?> value = "D"  required/>Dead    
                </div>
				<div class = "form_group">    
                    <label>Marital Status: </label>    
                    <input type = "radio" name = "Marital_Status" <?php if($row['Marital_status']=="S") {echo "checked";}?> value = "S" required />Single	    <input type = "radio" name = "Marital_Status" <?php if($row['Marital_status']=="M") {echo "checked";}?> value = "M" required/>Married    
                </div>
				<div class = "form_group">    
                    <label>Spouse Name: </label>    
                    <input type = "textbox" name = "Spouse" value = '<?php echo $row['Spouse']; ?>'  />    
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