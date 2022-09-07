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
				<h2>Edit Recipe</h2>
				<div class="form-row">
                    <?php
                       
                         $RID = $_GET["edit"];
                         $C = new DataBaseConnection();
                         $Connection = $C->Connect();
                         $Query1 = "SELECT * from recipes where id =".$RID;
                                 $Result1 = mysqli_query($Connection , $Query1);
                         if($Result1){
                             $D = mysqli_fetch_assoc($Result1);
                    ?>
					<label for="name">Recipe Name</label>
					<input type="text" name="Name" id="name" class="input-text" value="<?php echo $D["Name"]; ?>" required >
					
                </div>

                    <input type="hidden" value="<?php echo $D["Id"]; ?>" name="RecipeId" >

                    <div class="form-row">
					<label for="Product">Product</label>
					<select class="gender" name="Product">
                        
									<?php
							$Query = "SELECT * from products Where Id=".$D["ProductId"];
							$Result = mysqli_query($Connection , $Query);
							
							if($Result) {
                                $Data = mysqli_fetch_assoc($Result);
                                echo '<option value="'.$Data["Id"].'">'.$Data["Name"].'</option>';
                            }
                            else{
								echo "<h1>Error</h1>";
                            }
                            
                            $Query = "SELECT * from products";
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
					<label for="Description">Description</label>
					<textarea rows="10" cols="76" name="Description" class="input-text" id="Description"><?php echo $D["Description"]; ?> </textarea>
				</div>
                <div class="form-row">
					<label for="Ingredients">Ingredients</label>
					<textarea rows="10" cols="76" name="Ingredients" class="input-text" id="Ingredients"><?php echo $D["Ingredients"]; ?> </textarea>
				</div>
				<div class="form-row">
					<label for="Image" >Primary Image Uploaded</label>
                    <img height="400"  width="570" src="../<?php echo $D["PrimaryImage"]; ?>">
				</div>
                <div class="form-row">
					<label for="Image">Upload New Primary Image</label>
					<input type="file" accept="image/*" class="text-input"  placeholder="Upload Image" name="SecondaryImage" id="Image" value="<?php echo $D["PrimaryImage"]; ?>">
                </div>
				
				<div class="form-row-last">
					<input type="submit" name="EditRecipe" class="register" value="Edit Recipe">
                         <?php } ?>
				</div>
			</form>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>