<?php
include "Navbar.php";
include "Footer.php";

$ProductId = $_GET["ProductId"];
$CategoryId = 0;
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
        <?php displayNavbar("", "active-menu", "", "","") ?>
      </div>
    </div>
    <div
      class="main-container mt-10 flex flex-col space-y-10 py-10 md:flex-row md:space-y-0 md:space-x-5"
    >
    <?php
    $Query = "SELECT * FROM products where Id='$ProductId'";
    $Result = mysqli_query( $Connection, $Query);
    
    if($Result){
      while($Data = mysqli_fetch_assoc($Result)){
        $CategoryId = $Data["CategoryId"];
      ?>
      <div class="w-full md:w-1/3">
        <h1 class="text-3xl font-extrabold">About Product</h1>
        <p class="mt-8">
          <?php echo $Data["PrimaryDescription"]; ?>
        </p>
        <div class="mt-8">
          <a href="product-recipes.php?ProductId=<?php echo $Data['Id']; ?>" class="button"> View Recipes </a>
        </div>
      </div>
      <div class="flex w-full justify-center md:w-1/3">
        <div
          class="item-center relative flex h-[550px] w-[380px] flex-col justify-center rounded-full bg-white"
        >
          <div class="flex w-full items-center justify-center">
            <img src="<?php echo $Data["PrimaryImage"]; ?>"  class="max-h-[398px] max-w-[240px] object-cover" alt="" />
          </div>
          <div class="absolute -left-40 -bottom-8">
            <img src="<?php echo $Data["SecondaryImage"]; ?>" class="max-h-[285px] max-w-[285px] rounded-full object-cover" alt="" />
          </div>
        </div>
      </div>
      <div class="w-full md:w-1/3">
        <h3 class="text-2xl font-semibold">SKU : <?php echo $Data["SKU"]; ?> </h3>
        <div class="mt-6">
          <p class="text-xl">Brand :</p>
          <img class="mt-2 max-h-[70px] max-w-[100px] object-cover" src="<?php echo $Data["BrandIcon"]; ?>" alt="" />
        </div>
        <div class="mt-32">
          <h2 class="text-2xl font-semibold">Why Choose Product</h2>
          <div class="flex flex-col space-y-3">
            <div class="mt-4 flex items-center space-x-3">
              <img src="images/tick.png" alt="" />
              <span>
                <?php echo $Data["ReasonOne"]; ?>
      </span>
            </div>
            <div class="flex items-center space-x-3">
              <img src="images/tick.png" alt="" />
              <span>
              <?php echo $Data["ReasonTwo"]; ?> 
              </span>
            </div>
            <div class="flex items-center space-x-3">
              <img src="images/tick.png" alt="" />
              <span>
              <?php echo $Data["ReasonThree"]; ?> 
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="main-container">
      <h2 class="text-center text-2xl font-extrabold"><?php echo $Data["Name"]; ?></h2>
    </div>
    <div class="main-container">
      <div class="mt-20 overflow-x-auto">
        <table
          class="flex min-w-full divide-y-2 divide-gray-100 rounded-2xl bg-white text-base md:table md:flex-col"
        >
          <thead>
            <tr class="inline-flex flex-col p-3 md:table-row">
              <th
                class="px-6 py-4 text-left font-bold text-black md:whitespace-nowrap"
              >
                Pack
              </th>
              <th
                class="px-6 py-4 text-left font-bold text-black md:whitespace-nowrap"
              >
                Description
              </th>
              <th
                class="px-6 py-4 text-left font-bold text-black md:whitespace-nowrap"
              >
                Cases Per Pallet
              </th>
              <th
                class="px-6 py-4 text-left font-bold text-black md:whitespace-nowrap"
              >
                Cases Per 20' Container
              </th>
              <th
                class="px-6 py-4 text-left font-bold text-black md:whitespace-nowrap"
              >
                Shelf Life
              </th>
            </tr>
          </thead>

          <tbody class="divide-y divide-gray-200">
            <tr class="inline-flex flex-col p-3 md:table-row">
              <td class="px-6 py-4 md:whitespace-nowrap"><?php echo $Data["Pack"]; ?></td>
              <td class="px-6 py-4 md:whitespace-nowrap">
              <?php echo $Data["SecondaryDescription"]; ?>
              </td>
              <td class="px-6 py-4 md:whitespace-nowrap"><?php echo $Data["CasesPerPallet"]; ?></td>
              <td class="px-6 py-4 md:whitespace-nowrap"><?php echo $Data["CasesPerContainer"]; ?></td>
              <td class="px-6 py-4 md:whitespace-nowrap"><?php echo $Data["ShelfLife"]; } }?></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="mt-24">
        <h1 class="text-center text-3xl font-bold md:px-6 md:text-left">
          People Also Viewed 
        </h1>
        <div class="mt-10">
          <div
            class="mt-10 grid grid-cols-1 py-4 md:grid-cols-2 md:space-y-0 lg:grid-cols-4"
          >
          <?php 
            $Query = "SELECT * FROM products where CategoryId = '$CategoryId' LIMIT  4";
            $Result = mysqli_query($Connection, $Query);
            if($Result){
              while($Data = mysqli_fetch_assoc($Result)){
                if($Data["Id"]!=$ProductId){
                  echo '
                  <a href="product-details.php?ProductId='.$Data["Id"].'">
                  <div
                  class="mt-10 flex flex-col items-center justify-center"
                  style="background-image: url(images/productBackground.png)">
                  <div class="-mt-16">
                    <img
                      src="'.$Data["PrimaryImage"].'"
                      class="h-[200px] w-[140px] object-cover"
                      alt=""
                    />
                  </div>
                  <div class="py-10">
                    <h2 class="text-xl font-bold">'.$Data["Name"].'</h2>
                  </div>
                </div>
  
                  </a>
                  ';
                }
              }
            }
          
          ?>
           
            
          </div>
        </div>
      </div>
    </div>
   <?php displayFooter(); ?>
   <script src="javascript/responsive.js"></script>
   
  </body>
</html>
