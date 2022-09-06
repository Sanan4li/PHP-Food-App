<?php
include "Navbar.php";
include "Footer.php";
$CategoryId = $_GET["CategoryId"];
$ProductName;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/tailwind.css" />
    <title>Products</title>
  </head>
  <body class="w-full bg-background" id="body">
    <div class="w-full bg-white">
      <div class="main-container">
      <?php displayNavbar("", "active-menu", "", "", ""); ?>
      </div>
    </div>
    <?php
    $Query = "SELECT * FROM category where Id='$CategoryId'";
    $Result = mysqli_query( $Connection, $Query);
    
    if($Result){
      while($Data = mysqli_fetch_assoc($Result)){
        $ProductName = $Data["Name"];
        echo '
        <div
        class="relative -z-10 h-[660px] w-full object-cover"
        style="background-image: url('.$Data["BackgroundImage"].'); background-size:100%; background-repeat:no-repeat;"
      >
        <div
          class="main-container -mt-12 flex flex-col items-center justify-center py-20"
        >
          <img src="'.$Data["CategoryIcon"].'" class="mt-2 max-h-[70px] max-w-[100px] object-cover" alt="" />
          <h1 class="heading mt-10 text-center text-white">'.$Data["Name"].'</h1>
          <p class="mx-auto mt-5 w-full text-white md:w-1/2">
           '.$Data["Description"].'
          </p>
        </div>
      </div>
        
        ';
      }
    }



?>
   
    <div class="main-container lg-mt-96 -mt-80">
      <div
        class="mt-10 grid grid-cols-1 content-center py-4 md:grid-cols-2 lg:grid-cols-4"
      >
      <?php
        $Query = "SELECT * FROM products ";
        $Result = mysqli_query($Connection, $Query);
        if($Result){
          
          while($Data = mysqli_fetch_assoc($Result)){
            echo '
           <a href="product-details.php?ProductId='.$Data["Id"].'">
           <div
           class="mt-10 flex flex-col items-center justify-center py-3"
           style="background-image: url(images/productBackground.png)"
         >
           <div class="-mt-24">
             <img
               src="'.$Data["PrimaryImage"].'"
               class="h-[200px] w-[140px] object-cover"
               alt=""
             />
           </div>
           <div class="py-10">
             <h2 class="text-xl font-semibold">'.$Data["Name"].'</h2>
           </div>
         </div>

           </a>
            ';
          }
        }
        

      ?>
      </div>
    </div>
    <div class="main-container py-20">
      <div class="">
        <h1 class="heading text-center"><?php echo $ProductName;  ?> Recipes</h1>
        <div
          class="mt-10 grid grid-cols-1 gap-x-4 gap-y-4 sm:grid-cols-2 lg:grid-cols-4">
          <?php
            $Query = "SELECT * FROM recipes WHERE CategoryId = '$CategoryId'";
            $Result = mysqli_query($Connection, $Query);
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

            ?>
         
          
        </div>
        <div class="mt-12 flex justify-center">
          <a href="recipes.php" class="button">View all Recipes</a>
        </div>
      </div>
    </div>
    <?php displayFooter(); ?>
    <script src="javascript/responsive.js"></script>
   
  </body>
</html>
