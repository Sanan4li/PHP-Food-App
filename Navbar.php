<?php
include "DataBaseConnection.php";
$DBC = new DataBaseConnection();
$Connection = $DBC->Connect();
function displayNavbar($About, $Products, $Services, $Contact, $Recipes){
  global $Connection;
  $Query = "SELECT * FROM category";
  $Result = mysqli_query($Connection, $Query);
    echo '
    <nav>
    <div class="container mx-auto py-3 lg:flex lg:items-center lg:justify-between">
    <div class="flex items-center justify-between">
    <div>
      <a
        class="text-2xl font-bold text-gray-800 hover:text-gray-700 dark:text-white lg:text-3xl"
        href="index.php"
      >
        <img
          src="images/logo.png"
          class="w-[100px] md:w-auto"
          width=""
        />
      </a>
    </div>

    <!-- Mobile menu button -->
    <div class="flex lg:hidden" id="mobileMenuOpenButton">
      <button
        type="button text-base text-gray-500 hover:text-gray-600 focus:text-gray-600 focus:outline-none dark:hover:text-gray-400 dark:focus:text-gray-400"
        aria-label="toggle menu"
      >
        <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
          <path
            fill-rule="evenodd"
            d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"
          ></path>
        </svg>
      </button>
    </div>
  </div>

      <div
      id="mobileMenu"
      class="absolute top-0 -left-[2000px] h-full w-full bg-gray-500/30 transition duration-1000"
    >
      <div
        class="h-full w-9/12 items-center bg-white px-8 py-4 lg:flex"
      >
        <div class="flex items-center justify-between">
          <p>
            <a
              class="text-2xl font-bold text-gray-800 hover:text-gray-700 dark:text-white lg:text-3xl"
              href="index.php"
            >
              <img src="images/logo.png" width="100" />
            </a>
          </p>
          <div id="mobileMenuCloseButton">
            <span>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="h-6 w-6"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M6 18L18 6M6 6l12 12"
                />
              </svg>
            </span>
          </div>
        </div>
        <div class="mt-5 flex flex-col lg:flex-row">
          <a
            class="my-2 py-2 text-base font-medium text-black hover:text-blue-500 dark:hover:text-blue-400 md:my-0 lg:mx-4 lg:my-0"
            href="about-us.php"
            >About Us</a
          >
          <div class="relative group cursor-pointer py-2">
          <div class="flex items-center justify-between">
            <a class="menu-hover my-2 py-2 text-base font-medium text-black hover:text-blue-500  md:my-0 lg:mx-4 lg:my-0" onClick="">
              Our Product Range
            </a>
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
              </svg>
              
            </span>
          </div>
          <div
            class="
              absolute
              invisible
              z-50
              py-1
              px-4
              w-full
              bg-gray-100
              shadow-xl
              text-gray-800
              flex flex-col
              group-hover:visible
            "
            onClick=""
          >';

         
          while($Data= mysqli_fetch_assoc($Result)){
            echo '
            <a
            class="
              block
              py-1
              text-gray-900
              hover:text-primary
              md:mx-2 md:my-0
              font-semibold
              border-b border-gray-100
              my-2
           "
           href="products.php?CategoryId='.$Data["Id"].'"
            >'.$Data["Name"].'</a
          >
            ';
          }
            
echo '
           
          </div>
        </div>
          <a
            class="my-2 py-2 text-base font-medium text-black hover:text-blue-500 dark:hover:text-blue-400 md:my-0 lg:mx-4 lg:my-0"
            href="services.php"
          >
            Our Services</a
          >
          <a
            class="my-2 py-2 text-base font-medium text-black hover:text-blue-500 dark:hover:text-blue-400 md:my-0 lg:mx-4 lg:my-0"
            href="contact-us.php"
            >Contact Us</a
          >
          <a
            class="my-2 py-2 text-base font-medium text-black hover:text-blue-500 dark:hover:text-blue-400 md:my-0 lg:mx-4 lg:my-0"
            href="recipes.php"
            >Recipe Hub</a
          >
        </div>
      </div>
    </div>




      <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
      <div class="items-center hidden lg:flex">
        <div class="flex flex-col lg:mx-6 lg:flex-row">
          <a
            class="'.$About.' menu-hover my-2 py-2 text-base font-medium text-black hover:text-blue-500 dark:hover:text-blue-400 md:my-0 lg:mx-4 lg:my-0"
            href="about-us.php"
            >About Us</a
          >
          <div class="relative group cursor-pointer py-2">
          <a class="'.$Products.' menu-hover my-2 py-2 text-base font-medium text-black hover:text-blue-500  md:my-0 lg:mx-4 lg:my-0" href="categories.php">
            Our Product Range
          </a>
          <div
            class="
              absolute
              invisible
              md:w-44 md:mt-2
              z-50
              py-1
              px-1
              left-4
              w-auto
              bg-gray-50
              shadow-xl
              text-gray-800
              flex flex-col
              group-hover:visible
            "
            onClick=""
          >
         ';
          
        $Q = "SELECT * FROM category";
        $R = mysqli_query($Connection, $Query);
          while($D= mysqli_fetch_assoc($R)){
            echo '
            <a
              class="
                block
                py-1
                text-gray-900
                hover:text-primary
                md:mx-2 md:my-0
                font-semibold
                border-b border-gray-100
                my-3
             "
             href="products.php?CategoryId='.$D["Id"].'"
              >'.$D["Name"].'</a
            >';
          }
echo '
           
          </div>
        </div>
          <a
            class="'.$Services.' menu-hover my-2 py-2 text-base font-medium text-black hover:text-blue-500 dark:hover:text-blue-400 md:my-0 lg:mx-4 lg:my-0"
            href="services.php"
          >
            Our Services</a
          >
          <a
            class="'.$Contact.' menu-hover my-2 py-2 text-base font-medium text-black hover:text-blue-500 dark:hover:text-blue-400 md:my-0 lg:mx-4 lg:my-0"
            href="contact-us.php"
            >Contact Us</a
          >
          <a
            class="'.$Recipes.' menu-hover my-2 py-2 text-base font-medium text-black hover:text-blue-500 dark:hover:text-blue-400 md:my-0 lg:mx-4 lg:my-0"
            href="recipes.php"
            >Recipe Hub</a
          >
        </div>
      </div>
    </div>
  </nav>
    
    
    
    
    
    ';
    
}


?>