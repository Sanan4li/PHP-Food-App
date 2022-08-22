<?php
session_start();
include "DataBaseConnection.php";


class Admin{
    
    public $Name;
    public $City;
    public $Address;
    public $Emal;
    public $CellNumber;
    public $Password;
    public $Connection;
    
    public $RecipeIdGlobal;
    
    
    // checking if the use is already logged in or not
    public function CheckSession(){
        if(!(isset($_SESSION["AdminEmail"])) && !(isset($_SESSION["AdminPassword"]))){
            header("location:../AdminLogin.php");
        }
        else{
        }
    }
    
    
    
    // connection to the database
    public function Connect(){
        $C = new DataBaseConnection();
        $this->Connection = $C->Connect(); 
    }
    
   
    
    
    
    // function to login the customer
    public function Login(){
        $this->Email = $_POST["SignInEmail"];
        $this->Password =   $_POST["SignInPassword"];
     //   $this->Email = mysqli_real_escape_string($this->Email);
     //   $this->Password  = mysqli_real_escape_string($this->Password);
        $Query = "SELECT  * FROM Admin
                              WHERE Email = '$this->Email' AND Password = '$this->Password' ";
        $Result = mysqli_query($this->Connection , $Query);
        
        if($Result){
            
                if(mysqli_fetch_row($Result)==0){
                   header("location: AdminLogin.php?Invalid=1");
                    // echo "Wrong Email or Password";
                }
            else{
                 $_SESSION["AdminEmail"] = $this->Email;
                 $_SESSION["AdminPassword"] = $this->Password;
                  header("location:AdminPanel/AdminPanel.php");
                // echo "Welcome Admin!";
            }
        
        }
       
        
    }
    
    
    

     // function to delete Category
    
     public function DeleteCategory($id){
         echo $id;
        $Query = "DELETE from category WHERE Id = $id";
        echo $Query;
            $Result  = mysqli_query($this->Connection , $Query);
        if($Result){
              $Page = $_GET["Page"];
            
            header("location:AdminPanel/".$Page.".php?Deleted=1");
        }
        else{
            $Page = $_GET["Page"];
            
            header("location:AdminPanel/".$Page.".php?Error=1");
        }
    }
    
    
    // function to delete
    
    public function DeleteMessage($id){
        $Query = "DELETE from Messages 
                            WHERE Id = $id";
            $Result  = mysqli_query($this->Connection , $Query);
        if($Result){
            header("location:AdminPanel/AllMessages.php?MessageDeleted=1");
        }
        else{
            echo "Not Deleted";
        }
    }
    
    


    // function to update record
    public function EditProfile($id){
  
    $Email = $_POST["SignInEmail"];
    $OldPassword = $_POST["OldPassword"];
    $Password  = $_POST["SignInPassword"];
    $Q = "SELECT * from admin where Password = '$OldPassword'";
    $Res = mysqli_query($this->Connection, $Q);
    if($Res){
        $Rows = mysqli_num_rows($Res);
        if($Rows!=0){
            $Query  = "Update admin Set Email = '$Email', Password = '$Password' WHERE Id = $id";
            $Result = mysqli_query($this->Connection , $Query);
            if($Result){
                header("location:AdminPanel/AdminPanel.php?ProfileUpdated");
            }
            else{
                echo "Not Done";
            }
        }
        else{
            header("location:AdminPanel/EditAdminProfile.php?Wrong");
        }
        
    }

    // $Query  = "Update Admin
    //                         Set Name = '$Name' , City = '$City' , Address = '$Address' , Cell_Number = '$Cell_Number' , Email = '$Email' , Password = '$Password'
    //                         WHERE Id = $id";
    // $Result = mysqli_query($this->Connection , $Query);
    // if($Result){
    //     header("location:AdminPanel/AdminPanel.php?ProfileUpdated");
    // }
    // else{
    //     echo "Not Done";
    // }
}
    
    // function to add Category 
    
    public function AddCategory(){
        $Name = $_POST["Name"];
        $Description = $_POST["Description"];
        $ImageName = $_FILES["Image"]["name"];
        $IconName = $_FILES["Icon"]["name"];
       
        $TempImageName = $_FILES["Image"]["tmp_name"];
        $TempIconName = $_FILES["Icon"]["tmp_name"];
        $SaveImage = "images/".$ImageName;
        $SaveIcon = "images/".$IconName;
        $Query = "INSERT INTO category(Name  , Description, BackgroundImage, CategoryIcon )
                            Values('$Name' ,  '$Description', '$SaveImage', '$SaveIcon' )";
        $Result = mysqli_query($this->Connection , $Query);
        move_uploaded_file($TempImageName , $SaveImage);
        move_uploaded_file($TempIconName , $SaveIcon);
        if($Result){
          
             header("location:AdminPanel/AllCategories.php?CategoryAdded");
        }
        else{
            echo "Error";
        }
    }


    public function AddRecipe(){
        
        $Name = $_POST["Name"];
        $Description = $_POST["Description"];
        $Ingredients = $_POST["Ingredients"];
        $Product = $_POST["Product"];
        $ImageName = $_FILES["PrimaryImage"]["name"];
        $TempImageName = $_FILES["PrimaryImage"]["tmp_name"];
        $SaveImage = "images/".$ImageName;




        $Query = "INSERT INTO recipes(Name  , Description, PrimaryImage, ProductId )
                            Values('$Name' ,  '$Description',  '$SaveImage', '$Product' )";
        $Result = mysqli_query($this->Connection , $Query);
        move_uploaded_file($TempImageName , $SaveImage);
        if($Result){
            $this->InsertMultpleImages();
            $this->insertSteps();
            $this->insertIngredients();
             header("location:AdminPanel/AllRecipes.php?RecipeAdded");
        }
        else{
            echo "Error";
        }
    }

    public function insertSteps(){
        // $RecipeId =  mysqli_insert_id($this->Connection);
        foreach ($_POST['Steps'] as $key => $value) {
           $query = "INSERT INTO `recipe_steps`( `Description`, `RecipeId`) VALUES ('$value','$this->RecipeIdGlobal')";
         
        $Result = mysqli_query($this->Connection, $query);

        if(!$Result){
            echo "<h1?>Something went wrong</h1>";
        }
        return;

        }
    }
    
    public function insertIngredients(){
        // $RecipeId =  mysqli_insert_id($this->Connection);
        foreach ($_POST['Ingredients'] as $key => $value) {
           $query = "INSERT INTO `recipe_ingredients`( `Name`, `RecipeId`) VALUES ('$value','$this->RecipeIdGlobal')";
         
        $Result = mysqli_query($this->Connection, $query);
            echo $query;
            echo "<br>";
            echo $value;
            echo $this->RecipeIdGlobal;
        if(!$Result){
            echo "<h1?>Something went wrong</h1>";
        }
        return;

        }
    }

    
    public function AddProduct(){
        $Name = $_POST["Name"];
        $Category = $_POST["Category"];
        $SKU = $_POST["SKU"];
        $CasesPerPallet = $_POST["CasesPerPallet"];
        $CasesPerContainer = $_POST["CasesPerContainer"];
        $Pack = $_POST["Pack"];
        $ShelfLife = $_POST["ShelfLife"];
        $PrimaryDescription = $_POST["PrimaryDescription"];
        $SecondaryDescription = $_POST["SecondaryDescription"];
        $ReasonOne = $_POST["ReasonOne"];
        $ReasonTwo = $_POST["ReasonTwo"];
        $ReasonThree = $_POST["ReasonThree"];
        $ImageName = $_FILES["PrimaryImage"]["name"];
        $SecondaryImageName = $_FILES["SecondaryImage"]["name"];
        $BrandIcon = $_FILES["BrandIcon"]["name"];
        $TempImageName = $_FILES["PrimaryImage"]["tmp_name"];
        $TempBrandIcon = $_FILES["BrandIcon"]["tmp_name"];
        $TempImageNameSecondary = $_FILES["SecondaryImage"]["tmp_name"];
        $SaveImage = "images/".$ImageName;
        $SaveImageSecondary = "images/".$SecondaryImageName; 
        $SaveImageBrand = "images/".$BrandIcon; 
        $Query = "INSERT INTO products(Name  , CategoryId, SKU, CasesPerPallet, CasesPerContainer, Pack, ShelfLife, PrimaryDescription, SecondaryDescription, ReasonOne, ReasonTwo, ReasonThree, PrimaryImage, SecondaryImage , BrandIcon  )
                        Values('$Name' , '$Category', '$SKU' , '$CasesPerPallet', '$CasesPerContainer', '$Pack','$ShelfLife', '$PrimaryDescription', '$SecondaryDescription', '$ReasonOne','$ReasonTwo','$ReasonThree',  '$SaveImage', '$SaveImageSecondary', '$SaveImageBrand'  )";
        $Result = mysqli_query($this->Connection , $Query);
        move_uploaded_file($TempImageName , $SaveImage);
        move_uploaded_file($TempImageNameSecondary , $SaveImageSecondary);
        move_uploaded_file($TempBrandIcon , $SaveImageBrand);
        if($Result){
            
              header("location:AdminPanel/AllProducts.php?ProductAdded");
        }
        else{
            echo "Error";
        }
    }
      
    public function EditProduct(){

        $Name = $_POST["Name"];
        $Category = $_POST["Category"];
        $SKU = $_POST["SKU"];
        $CasesPerPallet = $_POST["CasesPerPallet"];
        $CasesPerContainer = $_POST["CasesPerContainer"];
        $Pack = $_POST["Pack"];
        $ShelfLife = $_POST["ShelfLife"];
        $PrimaryDescription = $_POST["PrimaryDescription"];
        $SecondaryDescription = $_POST["SecondaryDescription"];
        $ReasonOne = $_POST["ReasonOne"];
        $ReasonTwo = $_POST["ReasonTwo"];
        $ReasonThree = $_POST["ReasonThree"];
        $ImageName = $_FILES["PrimaryImage"]["name"];
        $SecondaryImageName = $_FILES["SecondaryImage"]["name"];
        $BrandIcon = $_FILES["BrandIcon"]["name"];
        $TempImageName = $_FILES["PrimaryImage"]["tmp_name"];
        $TempBrandIcon = $_FILES["BrandIcon"]["tmp_name"];
        $TempImageNameSecondary = $_FILES["SecondaryImage"]["tmp_name"];
        $SaveImage = "images/".$ImageName;
        $SaveImageSecondary = "images/".$SecondaryImageName; 
        $SaveImageBrand = "images/".$BrandIcon; 

        $Pid = $_POST["Pid"];
        if(!file_exists($_FILES["Image"]["tmp_name"]) || !is_uploaded_file($_FILES["Image"]["tmp_name"])){
            $Query = "Update products Set Name = '$Name'  , CategoryId = '$Category' , SKU = '$SKU', CasesPerPallet = '$CasesPerPallet', CasesPerContainer = '$CasesPerContainer', Pack = '$Pack', ShelfLife = '$ShelfLife', PrimaryDescription = '$PrimaryDescription', SecondaryDescription = '$SecondaryDescription', ReasonOne = '$ReasonOne', ReasonTwo = '$ReasonTwo', ReasonThree = '$ReasonThree' Where Id = '$Pid'";
        }
        else{
            $Query = "Update products Set Name = '$Name'  , CategoryId = '$Category' , SKU = '$SKU', CasesPerPallet = '$CasesPerPallet', CasesPerContainer = '$CasesPerContainer', Pack = '$Pack', ShelfLife = '$ShelfLife', PrimaryDescription = '$PrimaryDescription', SecondaryDescription = '$SecondaryDescription', ReasonOne = '$ReasonOne', ReasonTwo = '$ReasonTwo', ReasonThree = '$ReasonThree' , Image = '$SaveImage' Where Id = '$Pid'";
        }
                       
        $Result = mysqli_query($this->Connection , $Query);
        move_uploaded_file($TempImageName , $SaveImage);
        if($Result){
            
            // echo "Added";
               header("location:AdminPanel/AllProducts.php?ProductEdited");
        }
        else{
            echo "Error";
        }
    }
      
     // function to delete Product
    
     public function DeleteProduct($id){
        $Query = "DELETE from products 
                            WHERE Id = $id";
            $Result  = mysqli_query($this->Connection , $Query);
        if($Result){
              $Page = $_GET["Page"];
            
            header("location:AdminPanel/".$Page.".php?Deleted=1");
        }
        else{
            echo "Not Deleted";
        }
    }
    
    // function to delete Product
    
     public function DeleteRecipe($id){
        $Query = "DELETE from recipes 
                            WHERE Id = $id";
            $Result  = mysqli_query($this->Connection , $Query);
        if($Result){
              $Page = $_GET["Page"];
             
            header("location:AdminPanel/".$Page.".php?Deleted=1");
        }
        else{
            echo "Error in deleting data";
        }
    }
 
    
    // function to edit category
    public function EditCategory(){
        $CatId = $_POST["CatId"];
        $Name  = $_POST["Name"];
        $Description  = $_POST["Description"];
        $ImageName = $_FILES["Image"]["name"];
        $IconName = $_FILES["Icon"]["name"];
       
        $TempImageName = $_FILES["Image"]["tmp_name"];
        $TempIconName = $_FILES["Icon"]["tmp_name"];
        $SaveImage = "images/".$ImageName;
        $SaveIcon = "images/".$IconName;
        if(!file_exists($_FILES["Image"]["tmp_name"]) || !is_uploaded_file($_FILES["Image"]["tmp_name"])){
            $Query = "UPDATE category SET Name= '$Name', Description = '$Description' Where  Id='$CatId'";
        }
        else{
            $Query = "UPDATE category SET Name= '$Name', Description = '$Description', BackgroundImage = '$SaveImage', CategoryIcon='$SaveIcon'  Where  Id='$CatId'";
        }

        $Result = mysqli_query($this->Connection , $Query);
        move_uploaded_file($TempImageName , $SaveImage);
        move_uploaded_file($TempIconName , $SaveIcon);
        echo $Result;
        if($Result){
            header("Location:AdminPanel/AllCategories.php?Edited");
        }
        else{
            echo "<h1>Error!</h1>";
        }
    }
    



    public function InsertMultpleImages(){

       $this->RecipeIdGlobal =  mysqli_insert_id($this->Connection);
        $extension=array('jpeg','jpg','png','gif');
	foreach ($_FILES['image']['tmp_name'] as $key => $value) {
		$filename=$_FILES['image']['name'][$key];
		$filename_tmp=$_FILES['image']['tmp_name'][$key];
		echo '<br>';
		$ext=pathinfo($filename,PATHINFO_EXTENSION);

		$finalimg='';
		if(in_array($ext,$extension))
		{
			if(!file_exists('images/'.$filename))
			{
			move_uploaded_file($filename_tmp, 'images/'.$filename);
			$finalimg=$filename;
			}else
			{
				 $filename=str_replace('.','-',basename($filename,$ext));
				 $newfilename=$filename.time().".".$ext;
				 move_uploaded_file($filename_tmp, 'images/'.$newfilename);
				 $finalimg=$newfilename;
			}
		
			//insert
			$insertqry="INSERT INTO `recipe_images`( `ImageLink`, `RecipeId`) VALUES ('$finalimg','$this->RecipeIdGlobal')";
			mysqli_query($this->Connection,$insertqry);

			// header('Location: index.php');
		}else
		{
			//display error
		}
	}
    }
    
    
     // function to edit Recipe
    public function EditRecipe(){
        $RecipeId = $_POST["RecipeId"];
        $Name  = $_POST["Name"];
        $Description  = $_POST["Description"];
        $Ingredients  = $_POST["Ingredients"];
        $Product  = $_POST["Product"];
        $ImageName = $_FILES["Image"]["name"];
        // $IconName = $_FILES["Icon"]["name"];
        $TempImageName = $_FILES["Image"]["tmp_name"];
        // $TempIconName = $_FILES["Icon"]["tmp_name"];
        $SaveImage = "images/".$ImageName;
       
        // $SaveIcon = "images/".$IconName;
        if(!file_exists($_FILES["Image"]["tmp_name"]) || !is_uploaded_file($_FILES["Image"]["tmp_name"])){
            $Query = "UPDATE recipes SET Name= '$Name', Description = '$Description' , Ingredients ='$Ingredients' , ProductId = '$Product' Where  Id='$RecipeId'";
        }
        else{
            $Query = "UPDATE recipes SET Name= '$Name', Description = '$Description', Ingredients ='$Ingredients',  ProductId = '$Product', PrimaryImage = '$SaveImage'   Where  Id='$RecipeId'";
        }

        $Result = mysqli_query($this->Connection , $Query);
        move_uploaded_file($TempImageName , $SaveImage);
        // move_uploaded_file($TempIconName , $SaveIcon);
        if($Result){
            header("Location:AdminPanel/AllRecipes.php?Edited");
        }
        else{
            echo $Result;
            echo "<h1>Error!</h1>";
        }
    }
    
}




// creating object and connecting to the database
 $N = new Admin();
    $N->Connect();


// if sign in was clicked
if(isset($_POST["Login"])){
   $N->Login();
}






if(isset($_GET["deleteP"])){
    // echo "Done";
    $id = $_GET["deleteP"];
    $N->DeleteProduct($id);
}
if(isset($_GET["deleteR"])){
    // echo "Done";
    $id = $_GET["deleteR"];
    $N->DeleteRecipe($id);
}
if(isset($_GET["deleteCat"])){
   
    $id = $_GET["deleteCat"];
    $N->DeleteCategory($id);
}
if(isset($_GET["deleteM"])){
    $id = $_GET["deleteM"];
    $N->DeleteMessage($id);
}

if(isset($_POST["EditProfile"])){
    $id = $_POST["Id"];
    $N->EditProfile($id);
}
if(isset($_POST["AddCategory"])){
    $N->AddCategory();
}
if(isset($_POST["AddRecipe"])){
    $N->AddRecipe();
}
if(isset($_POST["EditRecipe"])){
    $N->EditRecipe();
}
if(isset($_POST["AddProduct"])){
    $N->AddProduct();
}
if(isset($_POST["EditProduct"])){
    $N->EditProduct();
}
if(isset($_POST["EditCategory"])){
    $N->EditCategory();
}













?>