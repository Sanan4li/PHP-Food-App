<?php
include "Navbar.php";
include "Footer.php";

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/tailwind.css" />
    <title>Services</title>
  </head>
  <body class="w-full bg-background" id="body">
    <div class="w-full bg-white">
      <div class="main-container">
      <?php displayNavbar("", "", "active-menu", "","") ?>
      </div>
    </div>
    <div
      class="relative -z-10 h-[660px] w-full object-cover"
      style="
        background-image: url(images/servicesbg.png);
        background-repeat: no-repeat;
      "
    >
      <div class="main-container -mt-32 py-40">
        <h1 class="heading mt-20 text-center text-white">
          What We Can do For You
        </h1>
      </div>
    </div>
    <div class="main-container -mt-60">
      <div class="flex flex-col space-y-24 py-5 md:px-20">
        <div class="flex flex-col rounded-[32px] bg-white md:flex-row p-5">
          <div class="w-full p-4 md:w-1/2">
            <h2 class="text-2xl font-bold">Modern Trade Distribution</h2>
            <p class="mt-4">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae
              perspiciatis maiores placeat minima, illo obcaecati totam sapiente
              voluptas, voluptates neque modi! Perspiciatis fuga eligendi sint
              totam alias quasi aliquam explicabo.
            </p>
            <p class="mt-4">
              <a
                id="0"
                href="#"
                class="border-b border-primary py-1 font-bold text-primary learnMoreButton"
              >
                Learn More
              </a>
            </p>
          </div>
          <div class="w-full md:w-1/2">
            <img
              src="images/investigations.png"
              class="max-h-[330px] w-full rounded-2xl object-cover shadow-2xl md:ml-16 md:-mb-16"
              alt=""
            />
          </div>
        </div>

        <div
          class="flex flex-col rounded-[32px] bg-white p-5 md:flex-row-reverse"
        >
          <div class="w-full p-4 md:w-1/2">
            <h2 class="text-2xl font-bold">Export Services</h2>
            <p class="mt-4">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae
              perspiciatis maiores placeat minima, illo obcaecati totam sapiente
              voluptas, voluptates neque modi! Perspiciatis fuga eligendi sint
              totam alias quasi aliquam explicabo.
            </p>
            <p class="mt-4">
              <a
                id="1"
                href="#"
                class="border-b border-primary py-1 font-bold text-primary learnMoreButton"
              >
                Learn More
              </a>
            </p>
          </div>
          <div class="w-full md:w-1/2">
            <img
              src="images/investigations.png"
              class="-mb-16 max-h-[330px] w-full rounded-2xl object-cover shadow-2xl md:-ml-16"
              alt=""
            />
          </div>
        </div>

        <div class="flex flex-col rounded-[32px] bg-white p-5 md:flex-row">
          <div class="w-full p-4 md:w-1/2">
            <h2 class="text-2xl font-bold">Supermarket Chain OEM Services</h2>
            <p class="mt-4">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae
              perspiciatis maiores placeat minima, illo obcaecati totam sapiente
              voluptas, voluptates neque modi! Perspiciatis fuga eligendi sint
              totam alias quasi aliquam explicabo.
            </p>
            <p class="mt-4">
              <a
                href="#"
                id="2"
                class="border-b border-primary py-1 font-bold text-primary learnMoreButton"
              >
                Learn More
              </a>
            </p>
          </div>
          <div class="w-full md:w-1/2">
            <img
              src="images/investigations.png"
              class="-mb-16 max-h-[330px] w-full rounded-2xl object-cover shadow-2xl md:ml-16"
              alt=""
            />
          </div>
        </div>
      </div>
    </div>
    <div
      class="absolute hidden h-full w-full items-center justify-center top-0 overflow-y-auto bg-gray-600/50"
      aria-labelledby="modal-title"
      role="dialog"
      aria-modal="true"
      id="serviceSection"
    >
      <div class="flex w-1/2 flex-col rounded-2xl bg-white p-10">
        <div class="my-3 flex w-full items-center justify-between">
          <h1 class="text-2xl font-bold" id="serviceHeading">Supermarket Chain OEM Services</h1>
          <div class="cursor-pointer" id="closeButton">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 20 20"
              stroke-width="1.5"
              stroke="currentColor"
              class="h-4 w-4"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M4.5 19.5l15-15m-15 0l15 15"
              />
            </svg>
          </div>
        </div>
        <div class="mt-4" id="servicePara">
          o iure non, vitae iste, rerum eum ex totam vel eaque repudiandae
          expedita? Vitae nisi accusantium magnam facere esse harum hic
          laudantium voluptatibus quis dignissimos iure dolore, voluptatum
          sapiente ea, numquam ipsum nesciunt? Optio soluta commodi at beatae
          assumenda, quos laborum voluptas provident veritatis error earum.
          Corporis impedit obcaecati voluptates explicabo sapiente ratione nemo
          quasi dolor? Nobis fugiat corrupti facere enim debitis quis dolorum
          molestias! Dicta fugiat culpa quos laborum ratione ea ex earum dolore
          ipsam tempore? Deleniti ut eum odio illo dicta id quis
        </div>
       
      </div>
    </div>
     <?php displayFooter(); ?>
    <script>

      const learnMoreButton = document.querySelectorAll(".learnMoreButton");
      const cloneButtonButton = document.querySelector("#closeButton");
      const serviceSection = document.querySelector("#serviceSection");
      const headingsArray = ["Modern Trade Distribution", "Export Services", "Supermarket Chain OEM Services"];
      const paragraphsArray = [
        "Modern Elit leo proin adipiscing sit. Lectus tellus phasellus mattis mauris scelerisque non accumsan donec nulla. Amet eu diam eu dui pulvinar vitae rutrum purus. Sit pulvinar ac feugiat velit convallis. Tempor gravida dictum eget leo fermentum platea ac enim, sed. Leo iaculis aliquet tellus scelerisque gravida congue sed cras. Nullam nisl id dui ut mi, ipsum suspendisse fames. Ridiculus in auctor vulputate sem diam mi ac. Quisque viverra quis odio iaculis adipiscing quam. Habitasse turpis leo eget mauris platea semper nunc. Odio viverra urna ac enim, tortor, proin. Ullamcorper risus mauris nunc sapien euismod sed. Vitae cras eget sem volutpat facilisis.Tellus, enim, sapien iaculis adipiscing porttitor. Viverra diam sem semper sapien enim, eu a imperdiet orci. Dictum consectetur eu velit lacus posuere non. Sed arcu sit quisque nulla congue nulla justo. Non sit dictum volutpat pulvinar facilisis. Non facilisis massa odio orci amet. Vitae vehicula eu sem adipiscing consectetur tristique aliquet. A nec facilisis egestas libero adipiscing id duis. Cras nunc, tempus magna tellus tristique. Dui tellus lectus volutpat ut est sagittis tellus ornare. Semper lectus mauris, eros, massa ut duis in diam.Nulla sit facilisis iaculis eget at nunc nunc ut gravida. Gravida suspendisse ullamcorper pulvinar sit urna. Viverra sem adipiscing platea est cursus placerat. Faucibus eu lorem lorem massa. Amet auctor mattis quis volutpat consectetur amet egestas risus.Cursus est facilisis eget maecenas viverra. Nulla et ultrices ipsum donec. Iaculis sit enim at nulla enim id ante feugiat pellentesque. Morbi elit nullam ut id enim, ", 
      
      "Export Elit leo proin adipiscing sit. Lectus tellus phasellus mattis mauris scelerisque non accumsan donec nulla. Amet eu diam eu dui pulvinar vitae rutrum purus. Sit pulvinar ac feugiat velit convallis. Tempor gravida dictum eget leo fermentum platea ac enim, sed. Leo iaculis aliquet tellus scelerisque gravida congue sed cras. Nullam nisl id dui ut mi, ipsum suspendisse fames. Ridiculus in auctor vulputate sem diam mi ac. Quisque viverra quis odio iaculis adipiscing quam. Habitasse turpis leo eget mauris platea semper nunc. Odio viverra urna ac enim, tortor, proin. Ullamcorper risus mauris nunc sapien euismod sed. Vitae cras eget sem volutpat facilisis.Tellus, enim, sapien iaculis adipiscing porttitor. Viverra diam sem semper sapien enim, eu a imperdiet orci. Dictum consectetur eu velit lacus posuere non. Sed arcu sit quisque nulla congue nulla justo. Non sit dictum volutpat pulvinar facilisis. Non facilisis massa odio orci amet. Vitae vehicula eu sem adipiscing consectetur tristique aliquet. A nec facilisis egestas libero adipiscing id duis. Cras nunc, tempus magna tellus tristique. Dui tellus lectus volutpat ut est sagittis tellus ornare. Semper lectus mauris, eros, massa ut duis in diam.Nulla sit facilisis iaculis eget at nunc nunc ut gravida. Gravida suspendisse ullamcorper pulvinar sit urna. Viverra sem adipiscing platea est cursus placerat. Faucibus eu lorem lorem massa. Amet auctor mattis quis volutpat consectetur amet egestas risus.Cursus est facilisis eget maecenas viverra. Nulla et ultrices ipsum donec. Iaculis sit enim at nulla enim id ante feugiat pellentesque. Morbi elit nullam ut id enim,", 
      
      "Supermarket Elit leo proin adipiscing sit. Lectus tellus phasellus mattis mauris scelerisque non accumsan donec nulla. Amet eu diam eu dui pulvinar vitae rutrum purus. Sit pulvinar ac feugiat velit convallis. Tempor gravida dictum eget leo fermentum platea ac enim, sed. Leo iaculis aliquet tellus scelerisque gravida congue sed cras. Nullam nisl id dui ut mi, ipsum suspendisse fames. Ridiculus in auctor vulputate sem diam mi ac. Quisque viverra quis odio iaculis adipiscing quam. Habitasse turpis leo eget mauris platea semper nunc. Odio viverra urna ac enim, tortor, proin. Ullamcorper risus mauris nunc sapien euismod sed. Vitae cras eget sem volutpat facilisis.Tellus, enim, sapien iaculis adipiscing porttitor. Viverra diam sem semper sapien enim, eu a imperdiet orci. Dictum consectetur eu velit lacus posuere non. Sed arcu sit quisque nulla congue nulla justo. Non sit dictum volutpat pulvinar facilisis. Non facilisis massa odio orci amet. Vitae vehicula eu sem adipiscing consectetur tristique aliquet. A nec facilisis egestas libero adipiscing id duis. Cras nunc, tempus magna tellus tristique. Dui tellus lectus volutpat ut est sagittis tellus ornare. Semper lectus mauris, eros, massa ut duis in diam.Nulla sit facilisis iaculis eget at nunc nunc ut gravida. Gravida suspendisse ullamcorper pulvinar sit urna. Viverra sem adipiscing platea est cursus placerat. Faucibus eu lorem lorem massa. Amet auctor mattis quis volutpat consectetur amet egestas risus.Cursus est facilisis eget maecenas viverra. Nulla et ultrices ipsum donec. Iaculis sit enim at nulla enim id ante feugiat pellentesque. Morbi elit nullam ut id enim,"
    
    ]
    const servicePara = document.querySelector("#servicePara");
    const serviceHeading = document.querySelector("#serviceHeading");
    let elementClicked;
    const showService = 
      (e)=>{
              
              document.body.style.overflowY="hidden"
              e.preventDefault();
              servicePara.innerText = paragraphsArray[Number(e.target.id)]
              serviceHeading.innerText = headingsArray[Number(e.target.id)]
              serviceSection.classList.remove("hidden");
              // serviceSection.classList.remove("hidden");
              serviceSection.classList.add("flex");
              elementClicked = e.target.parentElement.parentElement.parentElement;
              serviceSection.scrollIntoView(); 
            }
    for(let i = 0; i<learnMoreButton.length; i++){
      learnMoreButton[i].addEventListener("click", showService)
    }

            
            cloneButtonButton.addEventListener("click", ()=>{
              serviceSection.classList.remove("flex");
              serviceSection.classList.add("hidden");
              elementClicked.scrollIntoView();
              document.body.style.overflowY="auto";
            })
      </script>
       <script src="javascript/responsive.js"></script>
   
  </body>
</html>
