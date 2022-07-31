
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add Employee</title>
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






<body class="form-v5">

<div class="page-content">
		<div class="form-v5-content">
			<form class="form-detail" action="../Admin.php" method="post">
				<h2>Add Employee</h2>
				<div class="form-row">
					<label for="full-name"> Name</label>
					<input type="text" name="Name" id="full-name" class="input-text" placeholder=" Name" required>
					<i class="fas fa-user"></i>
                </div>
                <div class="form-row">
					<label for="full-name"> CNIC</label>
					<input type="text" name="CNIC" id="full-name" class="input-text" placeholder=" CNIC" required>
					<i class="fas fa-id-card"></i>
				</div>
				<div class="form-row">
					<label for="your-email">Email</label>
					<input type="email" name="Email" id="your-email" class="input-text" placeholder="Email" required >
					<i class="fas fa-envelope"></i>
				</div>
				<div class="form-row">
						<label for="your-email">Phone</label>
						<input type="number" name="Phone" id="your-email" maxlength="11" class="input-text" placeholder=" Phone Number" required >
						<i class="fa fa-mobile"></i>
					</div>
				<div class="form-row">
							<label for="your-email">City</label>
							<input type="text" name="City" id="your-email" class="input-text" placeholder="City" required >
							<i class="fas fa-id-card"></i>
                </div>
                <div class="form-row">
					<label for="password">Address</label>
					<input type="text" name="Address" id="password" class="input-text" placeholder="Address" required>
					<i class="fas fa-id-card"></i>
				</div>
				<div class="form-row">
						<label for="Gender">Gender</label>
						<select class="gender" name="Gender">
							<option value="male">Male</option>
							<option value="female">Female</option>
							
						</select>	
              </div>
			  <div class="form-row">
					<label for="password">Status</label>
					<input type="text" name="Status" id="password" class="input-text" placeholder="Job Status" required>
					<i class="fas "></i>
				</div>
				
			
				<div class="form-row-last">
					<input type="submit" name="AddEmployee" class="register" value="Add Employee" id="register">
					
				</div>
			</form>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>