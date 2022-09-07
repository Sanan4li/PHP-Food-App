<?php

if((isset($_SESSION["AdminEmail"])) && (isset($_SESSION["AdminPassword"]))){
	header("location:AdminPanel/AdminPanel.php");
}

    include("Admin.php");
    // if(isset($_SESSION["page"])){
    //     $N = new Customer();
    //     $N->CheckSession($_SESSION["page"]);
    //      //echo $_SESSION["page"];
    // }
    // echo $_SESSION["page"];
   
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sign In</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="form/css/roboto-font.css">
	<link rel="stylesheet" type="text/css" href="form/fonts/font-awesome-5/css/fontawesome-all.min.css">
	<!-- Main Style Css -->
	<link rel="stylesheet" href="form/css/style.css"/>

</head>
<body class="form-v5">
	<div class="page-content">
   
		<div class="form-v5-content">
			<form class="form-detail" action="Admin.php" method="post">
				<h2>Admin Login</h2>
				<?php if(isset($_GET["Invalid"])){ echo '<h3 style="text-align:center; color:white; background:black; padding:10px;">Wrong Email or Password!</h3>';} ?>
				<div class="form-row">
					<label for="your-email">Your Email</label>
					<input type="email" name="SignInEmail" id="your-email" class="input-text" placeholder="Your Email" required >
					<i class="fas fa-envelope"></i>
				</div>
				
				
				
				<div class="form-row">
					<label for="password">Password</label>
					<input type="password" name="SignInPassword" id="password" class="input-text" placeholder="Your Password" required>
					<i class="fas fa-lock"></i>
				</div>
				
				<div class="form-row-last">
					<input type="submit" name="Login" class="register" value="Sign In">
					
				</div>
			</form>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>