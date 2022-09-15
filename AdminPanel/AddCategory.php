<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add New Category</title>
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
<?php
        include("./Sessions.php");
        CheckSessions();
      ?>
<body class="form-v5">
	<div class="page-content">
		<div class="form-v5-content">
			<form class="form-detail" action="../Admin.php" method="post"  enctype="multipart/form-data">
				<h2>Add New Category</h2>
				<div class="form-row">
					<label for="name">Category Name</label>
					<input type="text" name="Name" id="name" class="input-text" placeholder="Category Name" required >
					
				</div>
				<div class="form-row">
					<label for="Description">Description</label>
					<textarea rows="10" cols="76" class="input-text" name="Description" id="Description"></textarea>
				</div>
				<div class="form-row">
					<label for="Brand">Brand</label>
					<select class="gender" name="Brand">
									<?php
							$C = new DataBaseConnection();
							$Connection = $C->Connect();
							$Query = "SELECT * from brands";
							$Result = mysqli_query($Connection , $Query);
							
							if($Result){
								$Rows = mysqli_num_rows($Result);
                                      if($Rows!=0){
										while($Data = mysqli_fetch_assoc($Result)){
											echo '<option value="'.$Data["Id"].'">'.$Data["Name"].'</option>';
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
						<label for="Image">Image</label>
						<input type="file" accept="image/*" placeholder="Upload Image" class="input-text" name="Image" id="Image">
				</div>
				<!-- <div class="form-row">
						<label for="Icon">Brand Icon</label>
						<input type="file" accept="image/*" placeholder="Upload Icon for category" class="input-text" name="Icon" id="Icon">
				</div> -->
				
				<div class="form-row-last">
					<input type="submit" name="AddCategory" class="register" value="Add Category">
					
				</div>
			</form>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>