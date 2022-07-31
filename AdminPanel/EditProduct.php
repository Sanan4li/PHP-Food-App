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
                            
                            $Query = "SELECT * from categories";
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
						<label for="Price">Price</label>
						<input type="number" name="Price" id="Price" class="input-text" value="<?php echo $D["Price"]; ?>" required >
						
					</div>
				<div class="form-row">
							<label for="Discounted">Discounted Price</label>
							<input type="number" name="DiscountedPrice" id="Discounted" class="input-text" value="<?php echo $D["DiscountedPrice"]; ?>" required >
							
                </div>
                <div class="form-row">
                    <label for="Quantity">Quantity</label>
                    <input type="number" name="Quantity" id="Quantity" class="input-text" value="<?php echo $D["Quantity"]; ?>" required >
                    
                </div>
                <div class="form-row">
                    <label for="Expiry">Expiry Date</label>
                    <input type="date" name="ExpiryDate" id="Expiry" class="input-text" value="<?php echo $D["ExpiryDate"]; ?>" required >
                    
                </div>
				
				<div class="form-row">
					<label for="status">Status</label>
					<select class="gender" name="Status" id="Status">
                        <?php 
                        
                        if($D["Status"]=="Display"){
                            echo '
                            <option value="Display">Display</option>
                            <option value="Dont Display">Don\'t Display</option>
                            ';
                        }
                        else if($D["Status"]=="Dont Display"){
                            echo '
                            <option value="Dont Display">Don\'t Display</option>
                            <option value="Display">Display</option>
                            ';
                        }
                        ?>
                        
                    </select>
                </div>
                <div class="form-row">
					<label for="Image">Image Uploaded</label>
                    <img height="400" width="570" src="../<?php echo $D["Image"]; ?>">
                </div>
                <div class="form-row">
					<label for="Image">Upload New Image</label>
					<input type="file"  placeholder="Upload Image" name="Image" id="Image" value="<?php echo $D["Image"]; ?>">
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