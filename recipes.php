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
    <title>Recipes</title>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  </head>
  <body class="w-full bg-background" id="body">
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
        <h1 class="heading mt-20 text-center text-white">Featured Recipes</h1>
      </div>
    </div>
    <div
      class="main-container -mt-60 flex w-full flex-col space-x-0 md:flex-row md:space-x-5"
    >
      <div class="w-full rounded-3xl bg-white py-7 px-6 md:w-1/4">
        <div class="flex-center flex w-full justify-between">
          <div class="px-2">
            <h1 class="text-2xl font-bold">Filter</h1>
          </div>
          <div class="flex space-x-4">
          <div>
            <a href="#" class="bg-primary px-2 py-1 text-white  rounded-md">
              Apply
            </a>
          </div>
          <div>
            <a href="#" class="border-b border-blue-600 text-blue-600">
              Reset
            </a>
          </div>
          </div>
                   
        </div>
       <?php
       $Query = "SELECT * FROM category";
       $Result = mysqli_query( $Connection, $Query);
       
       if($Result){
         while($Data = mysqli_fetch_assoc($Result)){
          $Id = $Data["Id"];
           echo '
           <div x-data="{ open: false }">
          <div class="my-2 flex justify-between px-2" x-on:click="open = ! open">
           <div class=" flex w-full items-center space-x-4 ">
           <input type="checkbox" class="h-4 w-4 " id="test" />
           <label class="font-bold cursor-pointer" :class="{ \'text-primary\': open }" id="test">'.$Data["Name"].'</label>
           </div>
           <div class="cursor-pointer">
          
           <template x-if="open">
           <span>
           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
           <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
           </svg>        
         </span>
           </template>
           
           <template x-if="!open">
           <span>
           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
           <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
           </svg>
         </span>
           </template>
          


           </div>
          </div>
          '; 
          $Query1 = "SELECT * FROM products where CategoryId='$Id'";
       $Result1 = mysqli_query( $Connection, $Query1);
       
       if($Result1){
         while($Data1 = mysqli_fetch_assoc($Result1)){
         echo ' <div class="my-2 flex w-full items-center space-x-4 px-2"  x-show="open">
         <input type="checkbox" class="h-4 w-4" id="test" />
         <label class="" id="test">'.$Data1["Name"].'</label>
        </div>';
        }}
    echo '      </div>
           ';

         }
        }

  ?>



       
      </div>
      <div class="w-full md:w-3/4">
        <div
          class="grid grid-cols-1 gap-2 gap-y-4 sm:grid-cols-2 lg:grid-cols-3"
        >
        <?php
          $Query = "SELECT * FROM recipes";
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
   <?php
      displayFooter();
   ?>
    <script src="javascript/responsive.js"></script>
   
  </body>
</html>
