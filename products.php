<?php
include "DataBaseConnection.php";
include "Navbar.php";
include "Footer.php";
$DBC = new DataBaseConnection();
$Connection = $DBC->Connect();
$CategoryId = $_GET["CategoryId"];
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
  <body class="w-full bg-background">
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
        echo '
        <div
        class="relative -z-10 h-[660px] w-full object-cover"
        style="background-image: url('.$Data["BackgroundImage"].')"
      >
        <div
          class="main-container -mt-12 flex flex-col items-center justify-center py-20"
        >
          <img src="'.$Data["CategoryIcon"].'" alt="" />
          <h1 class="heading mt-10 text-center text-white">Our Products</h1>
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
            <div
            class="mt-10 flex flex-col items-center justify-center py-3"
            style="background-image: url(images/productBackground.png)"
          >
            <div class="-mt-24">
              <img
                src="'.$Data["PrimaryImage"].'"
                class="h-[320px] w-[220px]"
                alt=""
              />
            </div>
            <div class="-mt-10">
              <h2 class="text-3xl font-semibold">'.$Data["Name"].'</h2>
            </div>
          </div>
            ';
          }
        }
        

      ?>
      </div>
    </div>
    <div class="main-container py-20">
      <div class="">
        <h1 class="heading text-center">Cocktails Recipes</h1>
        <div
          class="mt-10 grid grid-cols-1 gap-x-4 gap-y-4 sm:grid-cols-2 lg:grid-cols-4"
        >
          <div class="w-[300px] rounded-[32px] bg-white p-2">
            <div>
              <img
                src="images/recipe1.png"
                class="h-[230px] w-full max-w-full rounded-3xl object-cover"
                alt=""
              />
            </div>
            <div class="p-1.5">
              <div class="mt-2 flex justify-between">
                <span> 23 Dec, 2022 </span>
                <span> 5 mins Read </span>
              </div>
              <div>
                <p class="mt-5 mb-3 text-2xl font-bold">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. In
                  omnis tempore
                </p>
              </div>
            </div>
          </div>
          <div class="w-[300px] rounded-[32px] bg-white p-2">
            <div>
              <img
                src="images/recipe1.png"
                class="h-[230px] w-full max-w-full rounded-3xl object-cover"
                alt=""
              />
            </div>
            <div class="p-1.5">
              <div class="mt-2 flex justify-between">
                <span> 23 Dec, 2022 </span>
                <span> 5 mins Read </span>
              </div>
              <div>
                <p class="mt-5 mb-3 text-2xl font-bold">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. In
                  omnis tempore
                </p>
              </div>
            </div>
          </div>
          <div class="w-[300px] rounded-[32px] bg-white p-2">
            <div>
              <img
                src="images/recipe1.png"
                class="h-[230px] w-full max-w-full rounded-3xl object-cover"
                alt=""
              />
            </div>
            <div class="p-1.5">
              <div class="mt-2 flex justify-between">
                <span> 23 Dec, 2022 </span>
                <span> 5 mins Read </span>
              </div>
              <div>
                <p class="mt-5 mb-3 text-2xl font-bold">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. In
                  omnis tempore
                </p>
              </div>
            </div>
          </div>
          <div class="w-[300px] rounded-[32px] bg-white p-2">
            <div>
              <img
                src="images/recipe1.png"
                class="h-[230px] w-full max-w-full rounded-3xl object-cover"
                alt=""
              />
            </div>
            <div class="p-1.5">
              <div class="mt-2 flex justify-between">
                <span> 23 Dec, 2022 </span>
                <span> 5 mins Read </span>
              </div>
              <div>
                <p class="mt-5 mb-3 text-2xl font-bold">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. In
                  omnis tempore
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-12 flex justify-center">
          <a href="#" class="button">View all Recipes</a>
        </div>
      </div>
    </div>
    <?php displayFooter(); ?>
  </body>
</html>
