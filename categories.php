<?php
include "DataBaseConnection.php";
include "Navbar.php";
include "Footer.php";
$DBC = new DataBaseConnection();
$Connection = $DBC->Connect();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/tailwind.css" />
    <title>Categories</title>
  </head>
  <body class="w-full bg-background">
    <div class="w-full bg-white">
      <div class="main-container">
       <?php displayNavbar("", "active-menu", "", "", ""); ?>
      </div>
    </div>
    <div
      class="relative -z-10 h-[660px] w-full object-cover"
      style="background-image: url(images/CategoriesBackground.png)"
    >
      <div class="main-container -mt-24 py-40">
        <h1 class="heading mt-20 text-center text-white">Our Products</h1>
      </div>
    </div>
    <div class="main-container -mt-96">
      <div
        class=" mt-10 grid grid-cols-1  md:space-y-0 py-4 md:grid-cols-2 lg:grid-cols-3">
        <?php
        $Query = "SELECT * FROM category";
        $Result = mysqli_query($Connection, $Query);
        if($Result){
          
          while($Data = mysqli_fetch_assoc($Result)){
            echo '
            <a href="products.php?CategoryId='.$Data["Id"].'">
            <div
            class="mt-10 flex flex-col items-center justify-center py-3"
            style="background-image: url(images/productBackground.png)">
            <div class="-mt-24">
              <img
                src="images/product-1.png"
                class="h-[350px] w-[240px]"
                alt=""
              />
            </div>
            <div class="py-4">
              <h2 class="text-3xl font-semibold">'.$Data["Name"].'</h2>
            </div>
          </div>


            </a>
            ';
          }
        }
        

      ?>
        
        
      </div>
    </div>
        <?php

        displayFooter();
?>
  </body>
</html>
