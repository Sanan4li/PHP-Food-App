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
<body class="form-v5">
	<div class="page-content">
		<div class="form-v5-content">
			<form class="form-detail" action="../Admin.php" method="post"  enctype="multipart/form-data">
				<h2>Add New Brand</h2>
				<div class="form-row">
					<label for="name">Brand Name</label>
					<input type="text" name="Name" id="name" class="input-text" placeholder="Category Name" required >
					
				</div>
				<div class="form-row">
						<label for="Icon">Brand Icon</label>
						<input type="file" accept="image/*" placeholder="Upload Icon for Brand" class="input-text" name="Icon" id="Icon">
				</div>
				
				<div class="form-row-last">
					<input type="submit" name="AddBrand" class="register" value="Add Brand">
					
				</div>
			</form>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>