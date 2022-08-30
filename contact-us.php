<?php
include "DataBaseConnection.php";
include "Navbar.php";
include "Footer.php";
$DBC = new DataBaseConnection();
$Connection = $DBC->Connect();
  if(isset($_POST[""]))
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/tailwind.css" />
    <title>Contact Us</title>
  </head>
  <body class="w-full bg-background">
    <div class="w-full bg-white">
      <div class="main-container">
      <?php displayNavbar("", "", "", "active-menu","") ?>
      </div>
    </div>
    <div
      class="relative -z-10 h-[660px] w-full object-cover"
      style="
        background-image: url(images/contactbg.png);
        background-repeat: no-repeat;
      "
    >
      <div class="main-container -mt-32 py-40">
        <h1 class="heading mt-20 text-center text-black">
          Get in Touch With Us
        </h1>
      </div>
    </div>
    <div class="main-container">
      <section
        class="mx-auto -mt-72 w-full max-w-xl rounded-[32px] bg-white px-7 py-14 shadow-md md:px-14"
      >
        <h2 class="text-center text-2xl font-bold">Contact Us</h2>
        <form action="contact-us.php" method="post">
        <div class="mt-6">
          <div class="items-center">
            <div class="w-full">
              <label class="mb-2 block text-sm font-medium text-gray-600"
                >Name</label
              >

              <input
                class="block w-full rounded-md border bg-white px-4 py-2 text-gray-700 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-300 dark:text-gray-300"
                type="text"
                name=""
              />
            </div>

            <div class="mt-4 w-full">
              <label class="mb-2 block text-sm font-medium text-gray-600"
                >E-mail</label
              >

              <input
                class="block w-full rounded-md border bg-white px-4 py-2 text-gray-700 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-300 dark:text-gray-300"
                type="email"
              />
            </div>
            <div class="mt-4 w-full">
              <label class="mb-2 block text-sm font-medium text-gray-600"
                >Phone Number</label
              >

              <input
                class="block w-full rounded-md border bg-white px-4 py-2 text-gray-700 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-300 dark:text-gray-300"
                type="email"
              />
            </div>
            <div class="mt-4 w-full">
              <label class="mb-2 block text-sm font-medium text-gray-600"
                >Subject</label
              >

              <input
                class="block w-full rounded-md border bg-white px-4 py-2 text-gray-700 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-300 dark:text-gray-300"
                type="email"
              />
            </div>
          </div>

          <div class="mt-4 w-full">
            <label class="mb-2 block text-sm font-medium text-gray-600"
              >Message</label
            >

            <textarea
              class="block h-40 w-full rounded-md border bg-white px-4 py-2 text-gray-700 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-300 dark:text-gray-300"
            ></textarea>
          </div>

          <div class="mt-10 flex justify-center">
            <button class="button w-full transform" name="send">Send Us a Message</button>
          </div>
        </div>
</form>
      </section>
    </div>

   <?php displayFooter(); ?>
  </body>
</html>
