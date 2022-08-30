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
    <title>About Us</title>
  </head>
  <body class="w-full bg-background" id="body">
    <div class="w-full bg-white">
      <div class="main-container">
      <?php displayNavbar("active-menu", "", "", "","") ?>
      </div>
    </div>
    <div class="main-container w-full">
      <div class="flex w-full flex-col space-y-24 py-5 md:px-20">
        <div
          class="flex w-full flex-col space-y-10 rounded-[32px] p-5 md:flex-row md:space-y-0"
        >
          <div class="flex w-full flex-col justify-center p-2 md:p-4 md:w-1/2">
            <h2 class="text-2xl font-bold text-primary">About Us</h2>
            <p class="mt-4">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae
              perspiciatis maiores placeat minima, illo obcaecati totam sapiente
              voluptas, voluptates neque modi! Perspiciatis fuga eligendi sint
              totam alias quasi aliquam explicabo.
            </p>
          </div>
          <div class="w-full md:w-1/2">
            <img
              src="images/investigations.png"
              class="max-h-[330px] w-full rounded-2xl object-cover"
              alt=""
            />
          </div>
        </div>
      </div>
      <div class="mt-10 md:px-10">
        <section class="body-font rounded-[32px] bg-primary text-gray-100">
          <div class="container mx-auto px-5 py-10">
            <div class="-m-4 flex flex-wrap text-center">
              <div class="w-1/2 p-4 sm:w-1/4">
                <h2
                  class="title-font text-3xl font-medium text-white sm:text-4xl"
                >
                  2.7K
                </h2>
                <p class="leading-relaxed">Lives Changed</p>
              </div>
              <div class="w-1/2 p-4 sm:w-1/4">
                <h2
                  class="title-font text-3xl font-medium text-white sm:text-4xl"
                >
                  1.8K
                </h2>
                <p class="leading-relaxed">Products</p>
              </div>
              <div class="w-1/2 p-4 sm:w-1/4">
                <h2
                  class="title-font text-3xl font-medium text-white sm:text-4xl"
                >
                  35
                </h2>
                <p class="leading-relaxed">Customers</p>
              </div>
              <div class="w-1/2 p-4 sm:w-1/4">
                <h2
                  class="title-font text-3xl font-medium text-white sm:text-4xl"
                >
                  4
                </h2>
                <p class="leading-relaxed">Visitors</p>
              </div>
            </div>
          </div>
        </section>
      </div>
      <div
        class="mt-10 flex w-full flex-col space-x-0 space-y-10 md:flex-row md:space-y-0 md:space-x-20 md:px-32"
      >
        <div class="w-full overflow-hidden rounded-[20px] bg-white md:w-1/2">
          <div>
            <img
              src="images/investigations.png"
              class="h-[330px] w-full max-w-full object-cover"
              alt=""
            />
          </div>
          <div class="px-8 py-6">
            <div>
              <h1 class="text-2xl font-bold">Values</h1>
              <p class="mt-5 mb-3">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. In
                omnis tempore
              </p>
            </div>
          </div>
        </div>
        <div class="w-full overflow-hidden rounded-[20px] bg-white md:w-1/2">
          <div>
            <img
              src="images/investigations.png"
              class="h-[330px] w-full max-w-full object-cover"
              alt=""
            />
          </div>
          <div class="px-8 py-6">
            <div>
              <h1 class="text-2xl font-bold">Values</h1>
              <p class="mt-5 mb-3">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. In
                omnis tempore
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="mt-20 flex flex-col space-y-24 py-5 md:px-20">
        <div
          class="flex flex-col justify-between rounded-[32px] md:flex-row-reverse md:p-5"
        >
          <div
            class="flex w-full flex-col justify-center p-4 md:w-1/2 md:px-20"
          >
            <h2 class="text-2xl font-bold">Our Culture</h2>
            <p class="mt-4">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae
              perspiciatis maiores placeat minima, illo obcaecati totam sapiente
              voluptas, voluptates neque modi! Perspiciatis fuga eligendi sint
              totam alias quasi aliquam explicabo.
            </p>
          </div>
          <div class="w-full md:w-1/2">
            <img
              src="images/investigations.png"
              class="max-h-[330px] w-full rounded-2xl object-cover"
              alt=""
            />
          </div>
        </div>
      </div>
      <div class="mt-20 flex flex-col md:px-32">
        <div class="rounded-[32px] bg-white px-10 py-5">
          <div>
            <h1 class="text-center text-2xl font-bold">Our Brands</h1>
          </div>
          <div class="mt-4 flex w-full items-center justify-center">
            <img src="images/tentes.png" alt="" />
            <img src="images/rock.png" alt="" />
          </div>
        </div>
      </div>
    </div>

    <?php displayFooter(); ?>
    <script src="javascript/responsive.js"></script>
   
  </body>
</html>
