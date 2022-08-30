<?php
include "DataBaseConnection.php";
include "Navbar.php";
include "Footer.php";
$DBC = new DataBaseConnection();
$Connection = $DBC->Connect();
$ProductId = $_GET["ProductId"];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/tailwind.css" />
    <title>Recipes</title>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  </head>
  <body class="w-full bg-background">
    <div class="w-full bg-white">
      <div class="main-container">
      <?php displayNavbar("", "", "", "","active-menu") ?>
      </div>
    </div>
    <div
      class="relative -z-10 h-[660px] w-full object-cover"
      style="
        background-image: url(images/featuredRecipesBg.png);
        background-repeat: no-repeat;
        background-size:100%;
      "
    >
      <div class="main-container -mt-32 py-40">
      <?php
          $Query = "SELECT * FROM products WHERE Id='$ProductId'";
          $Result = mysqli_query( $Connection, $Query);
          
          if($Result){
            while($Data = mysqli_fetch_assoc($Result)){
               echo ' <h1 class="heading mt-20 text-center text-white">'.$Data["Name"].'</h1> ';
            }}
            ?>
      </div>
    </div>
    <div
      class="main-container -mt-60 flex w-full flex-col space-x-0 md:flex-row md:space-x-5"
    >
    <div class="w-full">
        <div
          class="grid grid-cols-1 gap-2 gap-y-4 sm:grid-cols-2 md:grid-col-3 lg:grid-cols-4"
        >
        <?php
          $Query = "SELECT * FROM recipes WHERE ProductId='$ProductId'";
          $Result = mysqli_query( $Connection, $Query);
          
          if($Result){
            while($Data = mysqli_fetch_assoc($Result)){
              echo '
              <a href="recipe-details.php?RecipeId='.$Data["Id"].'">
              <div class="w-full min-w-[300px] rounded-[32px] bg-white p-2">
              <div>
                <img
                  src="'.$Data["PrimaryImage"].'"
                  class="h-[230px] w-full max-w-full rounded-3xl object-cover"
                  alt=""
                />
              </div>
              <div class="p-3">
                <h2 class="text-center text-2xl font-bold recipe-heading">'.$Data["Name"].'</h2>
                <p class="mt-4 text-center recipe-description">
                  '.$Data["Description"].'
                </p>
              </div>
            </div>
              </a>
            ';

            }
          }
          ?>

        </div>
      </div>



       
      </div>
     
    </div>
   <?php
      displayFooter();
   ?>
  </body>
</html>
