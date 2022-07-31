
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit Employee</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="form/css/roboto-font.css">
	<link rel="stylesheet" type="text/css" href="form/fonts/font-awesome-5/css/fontawesome-all.min.css">
	<!-- Main Style Css -->
	<link rel="stylesheet" href="form/css/style.css"/>

</head>
<?php
        include("./Sessions.php");
        CheckSessions();
?>


<?php
    
    
     
     $id = $_GET["edit"];
     $C = new DataBaseConnection();
     $Connection = $C->Connect();
     $Q = "Select * from employees where Id = '$id'";
     $Result = mysqli_query($Connection, $Q);
     if($Result){
         $Data = mysqli_fetch_assoc($Result);
     
?>



<body class="form-v5">

<div class="page-content">
		<div class="form-v5-content">
			<form class="form-detail" action="../Admin.php" method="post">
                <h2>Edit Employee</h2>
                <div class="form-row">
				
					<input type="text" name="id" hidden="true" value="<?php echo $Data["Id"]; ?>" required>
					
                </div>
				<div class="form-row">
					<label for="full-name"> Name</label>
					<input type="text" name="Name" id="full-name" class="input-text" value="<?php echo $Data["Name"]; ?>" required>
					<i class="fas fa-user"></i>
                </div>
                <div class="form-row">
					<label for="full-name"> CNIC</label>
					<input type="text" name="CNIC" id="full-name" class="input-text" value="<?php echo $Data["CNIC"]; ?>" required>
					<i class="fas fa-id-card"></i>
				</div>
				<div class="form-row">
					<label for="your-email">Email</label>
					<input type="email" name="Email" id="your-email" class="input-text" value="<?php echo $Data["Email"]; ?>" required >
					<i class="fas fa-envelope"></i>
				</div>
				<div class="form-row">
						<label for="your-email">Phone</label>
						<input type="number" name="Phone" id="your-email" maxlength="11" class="input-text" value="<?php echo $Data["Phone"]; ?>" required >
						<i class="fa fa-mobile"></i>
					</div>
				<div class="form-row">
							<label for="your-email">City</label>
							<input type="text" name="City" id="your-email" class="input-text" value="<?php echo $Data["City"]; ?>" required >
							<i class="fas fa-id-card"></i>
                </div>
                <div class="form-row">
					<label for="password">Address</label>
					<input type="text" name="Address" id="password" class="input-text" value="<?php echo $Data["Address"]; ?>" required>
					<i class="fas fa-id-card"></i>
				</div>
				<div class="form-row">
                <label for="Gender">Gender</label>
                <select class="gender" name="Gender">
                    <?php
                    if($Data["Gender"]=="male"){
                        echo '
                        
							<option value="male">Male</option>
							<option value="female">Female</option>
							
					
                        ';
                    }
                    else{
                      
                            echo '
                            <option value="female">Female</option>
                            <option value="male">Male</option>
							
                            ';
							
						
                    }
                    ?>
				</select>
						
              </div>
              <div class="form-row">
					<label for="status">Job Status</label>
					<input type="text" name="Status" id="status" class="input-text" value="<?php echo $Data["Job_Status"]; ?>" required>
					
				</div>
             
				
			
				<div class="form-row-last">
					<input type="submit" name="EditEmployee" class="register" value="Add Employee" id="register">
                
				</div>
            </form>
            <?php } ?>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>