<?php
include "Navbar.php";
include "Footer.php";
$Category = "";
$BrandId = 0;
$CategoryId = 0;
$ProductName="";
if(isset($_GET["brandId"])){
  $BrandId = $_GET["brandId"];
}
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
    <div class="w-full bg-white relative z-10">
      <div class="main-container">
      <?php displayNavbar("", "active-menu", "", "", ""); ?>
      </div>
    </div>
    <?php
    echo "this is brand Id".$BrandId;
    $Query = "SELECT * FROM brands where Id='$BrandId'";
    $Result = mysqli_query( $Connection, $Query);
    
    if($Result){
      while($Data = mysqli_fetch_assoc($Result)){
        $ProductName = $Data["Name"];
        echo '
        <div
        class="relative  h-[660px] w-full object-cover"
        style="background-image: url('.$Data["BackgroundImage"].'); background-size:100%; background-repeat:no-repeat;"
      >
        <div
        class="main-container -mt-12 flex flex-col items-center justify-center py-20"
        >
        <a href="brandsProducts.php?brandId='.$Data["Id"].'"><img src="'.$Data["Image"].'" class="mt-2 max-h-[70px] max-w-[100px] object-cover" alt="" /></a>  
          <h1 class="heading mt-10 text-center text-white">'.$Data["Name"].' Products</h1>
          <p class="mx-auto mt-5 w-full text-white md:w-1/2">
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
        class=" mt-10 grid grid-cols-1  md:space-y-0 py-4 md:grid-cols-2 lg:grid-cols-3">
        <?php
        $Query = "SELECT * FROM category where BrandId='$BrandId'";
        $Result = mysqli_query($Connection, $Query);
        if($Result){
          
          while($Data = mysqli_fetch_assoc($Result)){
            $CatId = $Data["Id"];
            echo '
            <a href="products.php?CategoryId='.$Data["Id"].'">
           <div
            class="mt-20 flex flex-col items-center justify-center py-10"
            style="background-image: url(images/productBackground.png)">
            
            <div class="-mt-24">
            ';
            $Q = "SELECT * FROM products WHERE CategoryId='$CatId' LIMIT 1";
           $R = mysqli_query($Connection, $Q);
           if($R){
             
             while($D = mysqli_fetch_assoc($R)){
              echo '
            <img
                src="'.$D["PrimaryImage"].'"
                class="h-[200px] w-[140px]  object-cover"
                alt=""
              />';
             }
            }
            echo '
            </div>
            <div class="py-4">
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








    <!-- <div class="main-container lg-mt-96 -mt-80 relative z-10">
      <div
        class="mt-10 grid grid-cols-1 content-center py-4 gap-y-20 md:grid-cols-2 lg:grid-cols-4"
      >
      <?php
      
      $Query = "SELECT * FROM category where BrandId='$BrandId'";
        $Result = mysqli_query($Connection, $Query);
        if($Result){
          
          while($Data = mysqli_fetch_assoc($Result)){
            $CatId = $Data["Id"];
            $CategoryId = $Data["Id"];
            echo '
            <a href="products.php?CategoryId='.$Data["Id"].'">
           <div
            class="mt-20 flex flex-col items-center justify-center py-10"
            style="background-image: url(images/productBackground.png)">
            
            <div class="-mt-24">
            ';
            $Q = "SELECT * FROM products WHERE CategoryId='$CatId'";
           $R = mysqli_query($Connection, $Q);
           if($R){
             
             while($D = mysqli_fetch_assoc($R)){
              echo '
            <img
                src="'.$D["PrimaryImage"].'"
                class="h-[200px] w-[140px]  object-cover"
                alt=""
              />';
             }
            }
            echo '
            </div>
            <div class="py-4">
              <h2 class="text-xl font-semibold">'.$Data["Name"].'</h2>
            </div>
          </div>


            </a>
            ';
          }
        }
        

      ?>
      </div>
    </div> -->
  
    <?php displayFooter(); ?>
    <script src="javascript/responsive.js"></script>
   
  </body>
</html>
