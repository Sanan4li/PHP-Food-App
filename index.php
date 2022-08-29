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
    <title>Home</title>
  </head>
  <body class="w-full bg-background">
    <div class="w-full bg-white">
      <div class="main-container">
      <?php displayNavbar("", "", "", "","") ?>
      </div>
    </div>
    <div class="w-full bg-white">
      <div
        class="mx-auto h-[700px] max-w-7xl object-cover px-6"
        style="background-image: url('images/header-bg.png')"
      >
        <div class="container mx-auto h-full max-h-[700px] px-6">
          <div class="h-full items-center lg:flex">
            <div class="flex h-full w-full flex-col justify-center">
              <div class="w-full md:w-1/2">
                <h1
                  class="my-2 bg-white/80 px-2 py-2 font-heading text-2xl font-extrabold text-black lg:text-5xl"
                >
                  World Class Products
                </h1>
                <h1
                  class="my-2 bg-white/80 px-2 py-2 font-heading text-2xl font-extrabold text-black lg:text-5xl"
                >
                  Excellent Distribution
                </h1>

                <h1
                  class="my-2 bg-white/80 px-2 py-2 font-heading text-2xl font-extrabold text-black lg:text-5xl"
                >
                  Global Network
                </h1>

                <div class="mt-12">
                  <a href="#" class="button"> Learn More </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="main-container -z-10 py-28">
      <h1 class="heading w-full px-10 md:w-1/2">
        We Offer a Wide Range of products and commodities
      </h1>
      <div class="relative m-auto max-w-7xl px-10 py-12">
        <div class="fade mySlides relative hidden px-5">
          <img src="images/slider1.png" class="w-full" />
          <div class="absolute -top-20 right-40">
            <img src="images/ChoppedTomatoes.png" class="w-[200px]" alt="" />
          </div>
        </div>

        <div class="fade mySlides relative hidden px-5">
          <img src="images/slider2.png" class="w-full" />
          <div class="absolute -top-20 right-40">
            <img src="images/ChoppedTomatoes.png" class="w-[200px]" alt="" />
          </div>
        </div>

        <div class="fade mySlides relative hidden px-5">
          <img src="images/slider3.png" class="w-full" />
          <div class="absolute -top-20 right-40">
            <img src="images/ChoppedTomatoes.png" class="w-[200px]" alt="" />
          </div>
        </div>

        <a
          class="absolute top-1/2 mx-3 -mt-6 w-auto cursor-pointer rounded-full bg-white/80 p-6 font-bold text-black"
          onclick="plusSlides(-1)"
          ><svg
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
              d="M15.75 19.5L8.25 12l7.5-7.5"
            />
          </svg>
        </a>
        <a
          class="absolute top-1/2 right-20 mx-3 -mt-6 w-auto cursor-pointer rounded-full bg-white/80 p-6 font-bold text-black"
          onclick="plusSlides(1)"
        >
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
              d="M8.25 4.5l7.5 7.5-7.5 7.5"
            />
          </svg>
        </a>
      </div>
      <br />

      <div class="text-center">
        <span
          class="dot mx-0 my-0.5 inline-block h-4 w-20 cursor-pointer rounded-full bg-primary"
          onclick="currentSlide(1)"
        ></span>
        <span
          class="dot mx-0 my-0.5 inline-block h-4 w-20 cursor-pointer rounded-full bg-gray-300"
          onclick="currentSlide(2)"
        ></span>
        <span
          class="dot mx-0 my-0.5 inline-block h-4 w-20 cursor-pointer rounded-full bg-gray-300"
          onclick="currentSlide(3)"
        ></span>
      </div>
    </div>
    <div class="relative z-10 overflow-hidden">
      <div
        class="absolute -top-40 -right-52 z-50 hidden h-[500px] w-[500px] overflow-hidden rounded-full bg-red-500 object-cover md:block"
        style="background-image: url(images/worldrounded.png)"
      ></div>
      <div class="main-container py-28">
        <div
          class="mx-auto flex w-full flex-col items-center justify-between space-y-28 md:w-3/4 md:flex-row md:space-y-0 md:space-x-28"
        >
          <div class="relative h-full w-full md:w-1/2">
            <div class="absolute -left-16 -top-10 -z-10">
              <img src="images/dots.png" alt="" />
            </div>
            <img src="images/services.png" class="h-500px] w-[400px]" alt="" />
          </div>
          <div class="h-full w-full md:w-1/2">
            <h1 class="heading">Our Services</h1>
            <p class="mt-8 text-lg">
              With our extensive network, our services connect your products
              with the wider marketplace
            </p>
            <div class="mt-8">
              <a href="#" class="button">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-white">
      <div class="main-container relative py-24">
        <div
          class="mx-auto flex w-full flex-col items-center justify-between space-y-28 md:w-3/4 md:flex-row md:space-y-0 md:space-x-28"
        >
          <div class="w-full md:w-1/2">
            <h1 class="heading">Message from Us</h1>
            <p class="mt-8">
              Magna ut diam tortor malesuada cursus faucibus. Netus tincidunt
              suspendisse at feugiat neque sit. Mattis felis pretium, blandit
              in. Risus massa, at aenean sociis lectus magna felis. Purus
              volutpat vitae varius donec massa cras lacus sit. Fusce commodo
              lectus rutrum nibh. Sit nam varius amet, consequat nunc tellus
              ullamcorper amet in.
            </p>
            <div class="mt-8">
              <a href="#" class="button"> Get in Touch </a>
            </div>
          </div>
          <div class="w-full md:w-1/2">
            <img class="rounded-full" src="images/hands.png" />
          </div>
        </div>
        <img
          src="images/sundi.png"
          class="absolute -bottom-20 -left-5 md:-bottom-5 md:left-16"
          alt=""
        />
      </div>
    </div>
    <div class="main-container py-20">
      <div class="">
        <h1 class="heading text-center">Recipe Hub</h1>
        <div
          class="mt-10 grid grid-cols-1 gap-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4"
        >
        <?php
          $Query = "SELECT * FROM recipes LIMIT 4 ";
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
               <h2 class="text-center text-2xl font-bold">'.$Data["Name"].'</h2>
               <p class="mt-4 text-center">
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
        <div class="mt-12 flex justify-center">
          <a href="recipes.php" class="button">View all Recipes</a>
        </div>
      </div>
    </div>

  <?php displayFooter() ?>
    <script>
      let slideIndex = 1;
      showSlides(slideIndex);

      function plusSlides(n) {
        showSlides((slideIndex += n));
      }

      function currentSlide(n) {
        showSlides((slideIndex = n));
      }

      function showSlides(n) {
        let i;
        let slides = document.querySelectorAll(".mySlides");
        let dots = document.querySelectorAll(".dot");
        if (n > slides.length) {
          slideIndex = 1;
        }
        if (n < 1) {
          slideIndex = slides.length;
        }
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(
            "bg-primary",
            "bg-gray-300"
          );
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className = dots[slideIndex - 1].className.replace(
          "bg-gray-300",
          "bg-primary"
        );
      }
    </script>
  </body>
</html>
