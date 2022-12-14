    <?php
        include("./Sessions.php");
        CheckSessions();
      ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit Category</title>
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
				<h2>Edit Category</h2>
				<div class="form-row">
                    <?php
                       
                         $Pid = $_GET["edit"];
                         $C = new DataBaseConnection();
                         $Connection = $C->Connect();
                         $Query1 = "SELECT * from category where id =".$Pid;
                                 $Result1 = mysqli_query($Connection , $Query1);
                         if($Result1){
                             $D = mysqli_fetch_assoc($Result1);
                    ?>
					<label for="name">Category Name</label>
					<input type="text" name="Name" id="name" class="input-text" value="<?php echo $D["Name"]; ?>" required >
					
                </div>
                    <input type="hidden" value="<?php echo $D["Id"]; ?>" name="CatId" >
				<div class="form-row">
					<label for="Description">Description</label>
					<textarea rows="10" cols="76" name="Description" class="input-text" id="Description"><?php echo $D["Description"]; ?> </textarea>
				</div>
				<div class="form-row">
					<label for="Brand">Brand</label>
					<select class="gender" name="Brand">
									<?php
							
							$Query = "SELECT * from brands";
							$Result = mysqli_query($Connection , $Query);
							
							if($Result){
								$Rows = mysqli_num_rows($Result);
                                      if($Rows!=0){
										
										while($Data = mysqli_fetch_assoc($Result)){
											if($Data["Id"]== $D["BrandId"]){
												echo '<option value="'.$Data["Id"].'" selected>'.$Data["Name"].'</option>';
											}
											else{
												
															echo '<option value="'.$Data["Id"].'">'.$Data["Name"].'</option>';
											}
                                      }
								
							}
						}
							else{
								echo "<h1>Error</h1>";
							}
						?>
                        
                    </select>
				</div>
				<div class="form-row">
					<label for="Image" >Image Uploaded</label>
                    <img height="400"  width="570" src="../<?php echo $D["BackgroundImage"]; ?>">
				</div>
				<div class="form-row">
						<label for="Image">New Image</label>
						<input type="file" accept="image/*" placeholder="Upload Image" class="input-text" name="Image" value="<?php echo $D["BackgroundImage"]; ?>" id="Image">
				</div>
				
				
				<div class="form-row-last">
					<input type="submit" name="EditCategory" class="register" value="Edit Category">
                         <?php } ?>
				</div>
			</form>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>