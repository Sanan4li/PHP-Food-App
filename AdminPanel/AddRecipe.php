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
				 <div class="form-row">
					<label for="Ingredients"> Ingredients</label>
					<textarea rows="8" class="input-text" cols="76" name="Ingredients" id="Ingredients"></textarea>
				</div>
				
				
				
                <div class="form-row">
					<label for="PrimaryImage">Primary Image</label>
					<input type="file" accept="image/*" placeholder="Upload Primary Image" name="PrimaryImage" id="PrimaryImage" class="input-text">
				</div>
				<div class="form-row">
					<label for="SecondaryImage">Secondary Images (one or more) </label>
					<input type="file" accept="image/*" placeholder="Upload Secondary Image" name="image[]"  id="SecondaryImage" multiple="true" class="input-text">
				</div>
				
				<div id="steps">
				<div class="form-row">
					<label for="steps"> Steps 1</label>
					<textarea rows="8" cols="76" name="Steps[]" id="" class="input-text" placeholder="Recipe Steps" required></textarea>
					
				</div>
				<input type="hidden" value="1" name="totalSteps" id="totalSteps"/>
				
				</div>
				
				
				<div>
					<p class="input-text" style="display:block; color:white; text-decoration:underline; cursor:pointer;" id="addStepButton">Add More Step</p>
				</div>

				<div id="ingredients">
				<div class="form-row">
					<label for="ingredients"> Ingredient 1</label>
					<textarea rows="8" cols="76" name="Ingredients[]" id="" class="input-text" placeholder="Recipe Ingredients" required></textarea>
					
				</div>
				<input type="hidden" value="1" name="totalIngredients" id="totalIngredients"/>
				</div>
				<div>
					<p class="input-text" style="display:block; color:white; text-decoration:underline; cursor:pointer;" id="addIngredientButton">Add More Ingredient</p>
				</div>
				
			
				<div class="form-row-last">
					<input type="submit" name="AddRecipe" class="register" value="Add Recipe" id="register">
					
				</div>
			</form>
		</div>
	</div>
	<script>
		const button = document.querySelector("#addStepButton");
		const buttonIng = document.querySelector("#addIngredientButton");
		const stepsContainer = document.querySelector("#steps");
		const ingredientContainer = document.querySelector("#ingredients");
		let counter = 1;
		let counter2 = 1;
		button.addEventListener("click", ()=>{
			counter++;
			const row = createNode("div", {"class":"form-row"});
			const label = createNode("label",{});
				  label.innerText="Step "+Number(counter);
			const input = createNode("textarea", { "rows":"8", "cols":"76",  "class":"input-text", "name":"Steps[]","placeholder":"Enter Step "+counter, "required":true});
			row.appendChild(label);
			row.appendChild(input);
			stepsContainer.appendChild(row);
		});

		buttonIng.addEventListener("click", ()=>{
			counter2++;
			const row = createNode("div", {"class":"form-row"});
			const label = createNode("label",{});
				  label.innerText="Ingredient "+Number(counter2);
			const input = createNode("textarea", { "rows":"8", "cols":"76",  "class":"input-text", "name":"Ingredients[]","placeholder":"Enter Ingredient "+counter2, "required":true});
			row.appendChild(label);
			row.appendChild(input);
			ingredientContainer.appendChild(row);
		});

		
		
		function createNode(node, attributes){
    const el = document.createElement(node);
    for(let key in attributes){
        el.setAttribute(key, attributes[key]);
    }
    return el;
}
		</script>
	
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>