<?php
        include("./Sessions.php");
        CheckSessions();
      ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit Brand</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="form/css/roboto-font.css">
	<link rel="stylesheet" type="text/css" href="form/fonts/font-awesome-5/css/fontawesome-all.min.css">
	<!-- Main Style Css -->
	<link rel="stylesheet" href="form/css/style.css"/>
    <style>
    #Description{
        border-radius: 5px;
       
    }
    </style>
</head>
<body class="form-v5">
	<div class="page-content">
		<div class="form-v5-content">
			<form class="form-detail" action="../Admin.php" method="post"   enctype="multipart/form-data">
				<h2>Edit Brand</h2>
				<div class="form-row">
                    <?php
                       
                         $Bid = $_GET["edit"];
                         $C = new DataBaseConnection();
                         $Connection = $C->Connect();
                         $Query1 = "SELECT * from brands where Id = '$Bid'";
                                 $Result1 = mysqli_query($Connection , $Query1);
                         if($Result1){
                             $D = mysqli_fetch_assoc($Result1);
                    ?>
					<label for="name">Brand Name</label>
					<input type="text" name="Name" id="name" class="input-text" value="<?php echo $D["Name"]; ?>" required >
					
                </div>
                    <input type="hidden" value="<?php echo $D["Id"]; ?>" name="BrandId" >
				
					<div class="form-row">
					<label for="Description">Description</label>
					<textarea rows="10" cols="76" class="input-text" name="Description" id="Description"><?php echo $D["Description"]; ?></textarea>
				</div>
				<div class="form-row">
					<label for="Image" >Background Image Uploaded</label>
                    <img height="300"  width="500" class="object-cover" src="../<?php echo $D["BackgroundImage"]; ?>">
				</div>
				<div class="form-row">
						<label for="Image">New Background Image</label>
						<input type="file" accept="image/*" placeholder="Upload Image" class="input-text" name="BackgroundImage" value="<?php echo $D["BackgroundImage"]; ?>" id="Image">
				</div>
				<div class="form-row">
					<label for="Image" >Image Uploaded</label>
                    <img height="100"  width="100" src="../<?php echo $D["Image"]; ?>">
				</div>
				<div class="form-row">
						<label for="Image">New Image</label>
						<input type="file" accept="image/*" placeholder="Upload Image" class="input-text" name="Image" value="<?php echo $D["Image"]; ?>" id="Image">
				</div>
				
				
				<div class="form-row-last">
					<input type="submit" name="EditBrand" class="register" value="Edit Brand">
                         <?php } ?>
				</div>
			</form>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>