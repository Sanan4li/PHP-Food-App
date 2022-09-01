<?php
include "Navbar.php";
include "Footer.php";
$RecipeId = $_GET["RecipeId"];
$ProductId =-1;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/tailwind.css" />
    <title>Products Details</title>
  </head>
  <body class="w-full bg-background" id="body">
    <div class="w-full bg-white">
      <div class="main-container">
      <?php displayNavbar("", "", "", "", "active-menu"); ?>
      </div>
    </div>
    <div
      class="main-container mt-10 flex flex-col py-10 md:flex-row md:space-x-5"
    >
    <?php 
    $Query = "SELECT * FROM recipes WHERE Id='$RecipeId'";
    $Result = mysqli_query($Connection, $Query);
        if($Result){
          while($Data=mysqli_fetch_assoc($Result)){
            $ProductId = $Data["ProductId"];
            echo '
            <div class="w-full md:w-1/2 md:px-10">
            <div class="overflow-hidden rounded-[32px]">
              <img
                src="'.$Data["PrimaryImage"].'"
                class="w-full overflow-hidden object-cover"
                alt=""
              />
            </div>
          </div>
          <div class="w-full md:w-1/2">
          <h1 class="heading mt-10">'.$Data["Name"].'</h1>
          <p class="mt-10 w-full md:w-3/4">
           '.$Data["Description"].'
          </p>
         
            
            ';
          }
        }
      ?>

<div class="mt-10 flex justify-between space-x-3"> 
        <?php
            $Query = "SELECT * FROM recipe_images WHERE RecipeId='$RecipeId' LIMIT 3";
            $Result = mysqli_query($Connection, $Query);
            if($Result){
              while($Data = mysqli_fetch_assoc($Result)){
                echo '
                <div class="overflow-hidden rounded-[32px] object-cover">
                  <img src="images/'.$Data["ImageLink"].'" alt="" />
                </div>
                
                
                ';
              }
            }
            
            ?>
            </div>
      </div>
     
    </div>
    <div
      class="main-container mt-10 flex flex-col space-y-3 md:flex-row md:space-y-0 md:space-x-5"
    >
      <div class="w-full md:w-1/2 md:px-10">
        <div class="w-full md:w-3/4">
          <h4 class="text-2xl font-bold">Ingredients</h4>
          <?php
            $Query = "SELECT * FROM recipe_ingredients WHERE RecipeId='$RecipeId'";
            $Result = mysqli_query($Connection, $Query);
            if($Result){
              while($Data = mysqli_fetch_assoc($Result)){
                echo '
                <p class="border-b-2 border-b-gray-200 py-4 text-gray-600">
                '.$Data["Name"].'
          </p>
                
                
                ';
              }
            }
            
            ?>
         
         
        </div>
      </div>
      <div class="w-full md:w-1/2">
        <h4 class="text-2xl font-bold">Method</h4>
        <?php
 $Query = "SELECT * FROM recipe_steps WHERE RecipeId='$RecipeId'";
 $Result = mysqli_query($Connection, $Query);
 if($Result){
   $Count = 1;
   while($Data = mysqli_fetch_assoc($Result)){
     echo '
    
     <h4 class="mt-10 text-xl font-bold">Step '.$Count.'</h4>
     <p class="mt-5">
       '.$Data["Description"].'
     </p>
     
     ';
     $Count++;
   }
 }

        ?>
       
       
        <div class="mt-10">
        <?php
 $Query = "SELECT * FROM products WHERE Id='$ProductId'";
 $Result = mysqli_query($Connection, $Query);
 if($Result){
  
   while($Data = mysqli_fetch_assoc($Result)){
     echo '
     <h2 class="text-2xl font-semibold">
            Made with '.$Data["Name"].'
          </h2>
          <div
            class="mt-10 flex w-full items-center justify-center rounded-full bg-white p-10 md:w-2/3"
          >
            <img
              src="'.$Data["PrimaryImage"].'"
              class="max-w-[170px]"
              alt=""
            />
          </div>
     
     ';
     
   }
 }

        ?>
         
        </div>
      </div>
    </div>

   <?php displayFooter(); ?>
   <script src="javascript/responsive.js"></script>
   
  </body>
</html>
