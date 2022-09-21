<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add Product</title>
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
				<h2>Add New Product</h2>
				<div class="form-row">
					<label for="name"> Name</label>
					<input type="text" name="Name" id="name" class="input-text" placeholder="Product Name" required>
					
				</div>
	
				<div class="form-row">
					<label for="Category">Category</label>
					<select class="gender" name="Category">
									<?php
							$C = new DataBaseConnection();
							$Connection = $C->Connect();
							$Query = "SELECT * from category";
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
						<label for="SKU">SKU</label>
						<input type="text" name="SKU" id="SKU" class="input-text" placeholder="SKU" required >
						
					</div>
				
                <div class="form-row">
                    <label for="Pack">Pack</label>
                    <input type="text" name="Pack" id="Pack" class="input-text" placeholder="Pack" required >
                    
                </div>
				<div class="form-row">
							<label for="CasesPerPallet">Cases Per Pallet </label>
							<input type="number" name="CasesPerPallet" id="CasesPerPallet" class="input-text"  required >
                </div>
				<div class="form-row">
							<label for="CasesPerContainer">Cases Per 20' Container </label>
							<input type="number" name="CasesPerContainer" id="CasesPerContainer" class="input-text"  required >
                </div>
				<div class="form-row">
							<label for="ShelfLife">Shelf Life</label>
							<input type="text" name="ShelfLife" id="ShelfLife" class="input-text"  required >
                </div>
                <div class="form-row">
					<label for="PrimaryDescription">Primary Description</label>
					<textarea rows="8" class="input-text" cols="76" name="PrimaryDescription" id="PrimaryDescription"></textarea>
				</div>
				
				<div class="form-row">
                    <label for="SecondaryDescription">Secondary Description</label>
                    <input type="text" name="SecondaryDescription" id="SecondaryDescription" class="input-text" placeholder="SecondaryDescription" required >
                    
                </div>
				<div class="form-row">
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
                    
                </div>
				
                <div class="form-row">
					<label for="PrimaryImage">Primary Image</label>
					<input type="file" accept="image/*" placeholder="Upload PrimaryImage" name="PrimaryImage" id="PrimaryImage" class="input-text">
				</div>
				<div class="form-row">
					<label for="SecondaryImage">Secondary Image</label>
					<input type="file" accept="image/*" placeholder="Upload Secondary Image" name="SecondaryImage" class="input-text" id="SecondaryImage">
				</div>
				
			
				<div class="form-row-last">
					<input type="submit" name="AddProduct" class="register" value="Add Product" id="register">
					
				</div>
			</form>
		</div>
	</div>
	
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>