
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit Profile</title>
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
				<h2>Edit Profile</h2>
				<?php if(isset($_GET["Wrong"])){ echo '<h3 style="text-align:center; color:white; background:black; padding:10px;">Old Password is Wrong!</h3>';} ?>
				
                <?php
                        $Email = "";
                                
                                
                                  $C = new DataBaseConnection();
                                  $Connection = $C->Connect();
                                   $AdminEmail = $_SESSION["AdminEmail"];
                                   $Query = "Select *from admin where Email = '$AdminEmail'";
                                   $Result = mysqli_query($Connection , $Query);
                                   if($Result){
                                       $Data = mysqli_fetch_assoc($Result);
                                     $Email = $Data["Email"];
                                     echo '
                                     <input type="hidden" name="Id" value="'.$Data["Id"].'">
                                     ';
                                   }
                    ?>

                <div class="form-row">
               
					<label for="your-email">Your Email</label>
					<input type="email" name="SignInEmail" id="your-email" class="input-text" placeholder="Your Email" required value="<?php echo $Email; ?>">
					<i class="fas fa-envelope"></i>
				</div>
				
				
				<div class="form-row">
					<label for="password">Old Password</label>
					<input type="password" name="OldPassword" id="password" class="input-text" placeholder="Enter Your Old Password" required>
					<i class="fas fa-lock"></i>
				</div>
                <div class="form-row">
					<label for="password">Password</label>
					<input type="password" name="SignInPassword" id="password" class="input-text" placeholder="New Your Password" required>
					<i class="fas fa-lock"></i>
				</div>
				
				<div class="form-row-last">
					<input type="submit" name="EditProfile" class="register" value="Update">
					
				</div>
			</form>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>