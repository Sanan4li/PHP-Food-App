<?php
include "Navbar.php";
include "Footer.php";
$Category = "";
if(isset($_GET["CategoryId"])){

  $CategoryId = $_GET["CategoryId"];
}
$ProductName;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/tailwind.css" />
    <link rel="stylesheet" href="css/mytailwind.css" />
    <title>Products</title>
    
  </head>
  <body class="w-full bg-background" id="body">
    <div class="w-full bg-white relative z-10">
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
        class="relative  h-[660px] w-full object-cover"
        
        style="background-image: url('.$Data["BackgroundImage"].'); background-size:100% 70%; object-fit:cover;   background-repeat:no-repeat; "
      >
        <div
        class="main-container -mt-12 flex flex-col items-center justify-center py-20"
        >';
        $BrandId = $Data["BrandId"];
        $Q = "SELECT * FROM brands where Id='$BrandId'";
        $R = mysqli_query($Connection, $Q);
        if($R){
          while($D = mysqli_fetch_assoc($R)){
       echo  '<a href="brandsProducts.php?brandId='.$D["Id"].'"><img src="'.$D["Image"].'" class="mt-2 max-h-[70px] max-w-[100px] object-cover" alt="" /></a>';

          }
        }
        echo '

          <h1 class="heading mt-10 text-center text-white">'.$Data["Name"].'</h1>
          <p class="mx-auto mt-5 w-full text-white md:w-1/2 text-center">
           '.$Data["Description"].'
          </p>
        </div>
      </div>
        
        ';
      }
    }



?>
   
    <div class="main-container lg-mt-96 -mt-80 relative z-10">
      <div
        class="mt-10 grid grid-cols-1 sm:grid-cols-2 space-y-10 md:space-y-0 content-center py-4 gap-y-20 md:grid-cols-2 lg:grid-cols-4"
      >
      <?php
      
      $Query = "SELECT * FROM products ";
      if($CategoryId!=""){
         $Query = "SELECT * FROM products WHERE CategoryId='$CategoryId'";

       }
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
           <div class="py-10 flex justify-center items-center">
             <h2 class="text-xl ml-20p font-semibold text-center bg-cu" style="max-width:150px">'.$Data["Name"].'</h2>
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
          class="mt-10 grid grid-cols-2 gap-x-4 gap-y-4 sm:grid-cols-2 lg:grid-cols-4">
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
                 class=" w-full max-w-full h-full max-h-250p rounded-3xl object-cover md:h-[230px]"
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
