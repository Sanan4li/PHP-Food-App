<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add Recipe</title>
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
			<form class="form-detail" action="../Admin.php" method="post" enctype="multipart/form-data">
				<h2>Add New Recipe</h2>
				<div class="form-row">
					<label for="name"> Name</label>
					<input type="text" name="Name" id="name" class="input-text" placeholder="Product Name" required>
					
				</div>
	
				<div class="form-row">
					<label for="Product">Product</label>
					<select class="gender" name="Product">
									<?php
							$C = new DataBaseConnection();
							$Connection = $C->Connect();
							$Query = "SELECT * from products";
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
					<label for="Description"> Description</label>
					<textarea rows="8" class="input-text" cols="76" name="Description" id="Description"></textarea>
				</div>
				
				
				<!-- <div class="form-row">
                    <label for="ReasonOne">Why Choose Us 1</label>
                    <input type="text" name="ReasonOne" id="ReasonOne" class="input-text" placeholder="ReasonOne" required >
                    
                </div>
				<div class="form-row">
                    <label for="ReasonTwo">Why Choose Us 2</label>
                    <input type="text" name="ReasonTwo" id="ReasonTwo" class="input-text" placeholder="ReasonTwo" required >
                    
                </div>
				<div class="form-row">
                    <label for="ReasonThree">Why Choose Us 3</label>
                    <input type="text" name="ReasonThree" id="ReasonThree" class="input-text" placeholder="ReasonThree" required >
                    
                </div> -->
				
                <div class="form-row">
					<label for="PrimaryImage">Primary Image</label>
					<input type="file" accept="image/*" placeholder="Upload Primary Image" name="PrimaryImage" id="PrimaryImage" class="input-text">
				</div>
				<div class="form-row">
					<label for="SecondaryImage">Secondary Images (one or more) </label>
					<input type="file" accept="image/*" placeholder="Upload Secondary Image" name="SecondaryImage"  id="SecondaryImage[]" multiple="true" class="input-text">
				</div>
				
			
				<div class="form-row-last">
					<input type="submit" name="AddRecipe" class="register" value="Add Recipe" id="register">
					
				</div>
			</form>
		</div>
	</div>
	
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>