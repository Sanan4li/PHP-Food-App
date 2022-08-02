<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit Product</title>
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
                <h2>Edit Product</h2>
                <?php
                    $Pid = $_GET["edit"];
                    $C = new DataBaseConnection();
                    $Connection = $C->Connect();
                    $Query1 = "SELECT * from products where id =".$Pid;
                            $Result1 = mysqli_query($Connection , $Query1);
                    if($Result1){
                        $D = mysqli_fetch_assoc($Result1);
                        
                    
                ?>
                <input type="hidden" name="Pid" value="<?php echo $Pid ?>">
				<div class="form-row">
					<label for="name"> Name</label>
					<input type="text" name="Name" id="name" class="input-text" value="<?php echo $D["Name"]; ?>" required>
					
				</div>
	
				<div class="form-row">
					<label for="Category">Category</label>
					<select class="gender" name="Category">
                        
									<?php
							$Query = "SELECT * from categories Where Id=".$D["CategoryId"];
							$Result = mysqli_query($Connection , $Query);
							
							if($Result) {
                                $Data = mysqli_fetch_assoc($Result);
                                echo '<option value="'.$Data["Id"].'">'.$Data["Name"].'</option>';
                            }
                            else{
								echo "<h1>Error</h1>";
                            }
                            
                            $Query = "SELECT * from category";
                            $Result1 = mysqli_query($Connection , $Query);
                            while($Data1 = mysqli_fetch_assoc($Result1)){
                                    if($Data["Id"]!=$Data1["Id"]){
                                        echo '<option value="'.$Data1["Id"].'">'.$Data1["Name"].'</option>';  
                                    }
                                      
                                      }
							
						?>
                        
                    </select>
				</div>
				<div class="form-row">
					<label for="name"> SKU</label>
					<input type="text" name="SKU" id="name" class="input-text" value="<?php echo $D["SKU"]; ?>" required>
					
				</div>
                <div class="form-row">
					<label for="name"> Pack</label>
					<input type="text" name="Pack" id="name" class="input-text" value="<?php echo $D["Pack"]; ?>" required>
					
				</div>
                <div class="form-row">
					<label for="name"> Cases Per Pallet</label>
					<input type="text" name="CasesPerPallet" id="name" class="input-text" value="<?php echo $D["CasesPerPallet"]; ?>" required>
					
				</div>
                <div class="form-row">
					<label for="name"> Cases Per 20' Container</label>
					<input type="text" name="CasesPerContainer" id="name" class="input-text" value="<?php echo $D["CasesPerContainer"]; ?>" required>
					
				</div>
                 <div class="form-row">
					<label for="name"> Shelf Life</label>
					<input type="text" name="ShelfLife" id="name" class="input-text" value="<?php echo $D["ShelfLife"]; ?>" required>
					
				</div>
                <div class="form-row">
					<label for="PrimaryDescription">Primary Description</label>
					<textarea rows="8" class="input-text" cols="76" name="PrimaryDescription" id="PrimaryDescription"><?php echo $D["PrimaryDescription"]; ?></textarea>
				</div>
                 <div class="form-row">
					<label for="name"> Secondary Description</label>
					<input type="text" name="SecondaryDescription" id="name" class="input-text" value="<?php echo $D["SecondaryDescription"]; ?>" required>
					
				</div>
                <div class="form-row">
					<label for="name"> Why Choose 1</label>
					<input type="text" name="ReasonOne" id="name" class="input-text" value="<?php echo $D["ReasonOne"]; ?>" required>
					
				</div>
                
                <div class="form-row">
					<label for="name"> Why Choose 2</label>
					<input type="text" name="ReasonTwo" id="name" class="input-text" value="<?php echo $D["ReasonTwo"]; ?>" required>
					
				</div>
                 <div class="form-row">
					<label for="name"> Why Choose 3</label>
					<input type="text" name="ReasonThree" id="name" class="input-text" value="<?php echo $D["ReasonThree"]; ?>" required>
					
				</div>
                <div class="form-row">
					<label for="Image">Primary Image Uploaded</label>
                    <img height="400" width="570" src="../<?php echo $D["PrimaryImage"]; ?>">
                </div>
                <div class="form-row">
					<label for="Image">Upload New Primary Image</label>
					<input type="file" accept="image/*" class="text-input"  placeholder="Upload Image" name="Image" id="Image" value="<?php echo $D["PrimaryImage"]; ?>">
                </div>
                
                <div class="form-row">
					<label for="Image">Secondary Image Uploaded</label>
                    <img height="400" width="270" src="../<?php echo $D["SecondaryImage"]; ?>">
                </div>
                <div class="form-row">
					<label for="Image">Upload New Secondary Image</label>
					<input type="file" accept="image/*" class="text-input"  placeholder="Upload Image" name="Image" id="Image" value="<?php echo $D["SecondaryImage"]; ?>">
                </div>
                        <?php } ?>
			
				<div class="form-row-last">
					<input type="submit" name="EditProduct" class="register" value="Edit Product" id="register">
					
				</div>
			</form>
		</div>
	</div>
	
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>