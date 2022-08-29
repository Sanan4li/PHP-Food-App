<?php
function displayNavbar($About, $Products, $Services, $Contact, $Recipes){
    echo '
    <nav>
    <div
      class="container mx-auto py-3 lg:flex lg:items-center lg:justify-between"
    >
      <div class="flex items-center justify-between">
        <div>
          <a
            class="text-2xl font-bold text-gray-800 hover:text-gray-700 dark:text-white lg:text-3xl"
            href="index.php"
          >
            <img src="images/logo.png" width="" />
          </a>
        </div>

        <!-- Mobile menu button -->
        <div class="flex lg:hidden">
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

      <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
      <div class="items-center lg:flex">
        <div class="flex flex-col lg:mx-6 lg:flex-row">
          <a
            class="'.$About.' menu-hover my-2 py-2 text-base font-medium text-black hover:text-blue-500 dark:hover:text-blue-400 md:my-0 lg:mx-4 lg:my-0"
            href="#"
            >About Us</a
          >
          <a
            class="'.$Products.' menu-hover my-2 py-2 text-base font-medium text-black hover:text-blue-500 dark:hover:text-blue-400 md:my-0 lg:mx-4 lg:my-0"
            href="categories.php"
            >Our Product Range</a
          >
          <a
            class="'.$Services.' menu-hover my-2 py-2 text-base font-medium text-black hover:text-blue-500 dark:hover:text-blue-400 md:my-0 lg:mx-4 lg:my-0"
            href="#"
          >
            Our Services</a
          >
          <a
            class="'.$Contact.' menu-hover my-2 py-2 text-base font-medium text-black hover:text-blue-500 dark:hover:text-blue-400 md:my-0 lg:mx-4 lg:my-0"
            href="#"
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