<?php

function displayFooter(){
    echo '
    <footer class="mt-20 w-full bg-white py-20">
    <div class="mx-auto max-w-7xl px-6 py-8">
      <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
        <div>
          <div class="text-lg font-bold text-black">Address</div>

          <a
            href="#"
            class="mt-5 block text-base text-gray-500 duration-700 hover:text-gray-900 hover:underline"
          >
            1901 Thornridge Cir. Shiloh,<br />
            Hawaii 81063
          </a>
        </div>

        <div>
          <div class="text-lg font-bold text-black">Get In Touch</div>

          <a
            href="mailto:johndoe@gmail.com"
            class="mt-5 block text-base text-gray-500 duration-700 hover:text-gray-900 hover:underline"
          >
            Email : johndoe@gmail.com
          </a>
          <a
            href="mailto:johndoe@gmail.com"
            class="mt-5 block text-base text-gray-500 duration-700 hover:text-gray-900 hover:underline"
          >
            Phone : +23456442334
          </a>
        </div>

        <div>
          <div class="text-lg font-bold text-black">Products</div>

          <a
            href="#"
            class="mt-5 block text-base text-gray-500 duration-700 hover:text-gray-900 hover:underline"
          >
            Installation
          </a>
          <a
            href="#"
            class="mt-3 block text-base text-gray-500 duration-700 hover:text-gray-900 hover:underline"
          >
            Release Notes
          </a>
          <a
            href="#"
            class="mt-3 block text-base text-gray-500 duration-700 hover:text-gray-900 hover:underline"
          >
            Upgrade Guide
          </a>
          <a
            href="#"
            class="mt-3 block text-base text-gray-500 duration-700 hover:text-gray-900 hover:underline"
          >
            Using with Preprocessors
          </a>
          <a
            href="#"
            class="mt-3 block text-base text-gray-500 duration-700 hover:text-gray-900 hover:underline"
          >
            Optimizing for Production
          </a>
          <a
            href="#"
            class="mt-3 block text-base text-gray-500 duration-700 hover:text-gray-900 hover:underline"
          >
            Browser Support
          </a>
          <a
            href="#"
            class="mt-3 block text-base text-gray-500 duration-700 hover:text-gray-900 hover:underline"
          >
            IntelliSense
          </a>
        </div>

        <div>
          <div class="text-lg font-bold text-black">Social</div>
          <div class="mt-4 flex space-x-4">
            <div
              class="flex h-12 w-12 items-center justify-center rounded-full bg-primary"
            >
              <a href="#">
                <svg
                  width="25"
                  height="21"
                  viewBox="0 0 25 21"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M22.1635 5.34928C22.1782 5.56203 22.1782 5.77477 22.1782 5.98948C22.1782 12.5316 17.2075 20.0767 8.11823 20.0767V20.0728C5.43324 20.0767 2.80402 19.3061 0.543701 17.8532C0.934121 17.9003 1.3265 17.9238 1.71985 17.9248C3.94495 17.9267 6.10644 17.1787 7.85697 15.8012C5.74244 15.761 3.8882 14.3797 3.24043 12.363C3.98115 12.5061 4.74438 12.4767 5.4714 12.2777C3.16607 11.811 1.50752 9.78163 1.50752 7.42477C1.50752 7.4032 1.50752 7.38261 1.50752 7.36203C2.19442 7.74536 2.96352 7.9581 3.75023 7.98163C1.57895 6.52771 0.909658 3.63359 2.22084 1.37085C4.7297 4.46399 8.43135 6.34438 12.405 6.5434C12.0068 4.82379 12.5508 3.02183 13.8346 1.81301C15.8249 -0.0615032 18.9551 0.0345753 20.8259 2.02771C21.9326 1.80909 22.9933 1.40222 23.964 0.825752C23.5951 1.97183 22.823 2.94536 21.7917 3.56399C22.7712 3.4483 23.7282 3.18556 24.6293 2.78458C23.9659 3.78065 23.1303 4.6483 22.1635 5.34928Z"
                    fill="white"
                  />
                </svg>
              </a>
            </div>

            <div
              class="flex h-12 w-12 items-center justify-center rounded-full bg-primary"
            >
              <a href="#">
                <svg
                  width="25"
                  height="25"
                  viewBox="0 0 25 25"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M24.5791 12.3209C24.5791 5.69353 19.2065 0.320949 12.5791 0.320949C5.95168 0.320949 0.579102 5.69353 0.579102 12.3209C0.579102 18.3105 4.96733 23.2749 10.7041 24.1752V15.7897H7.65723V12.3209H10.7041V9.6772C10.7041 6.6697 12.4956 5.00845 15.2367 5.00845C16.5496 5.00845 17.9229 5.24282 17.9229 5.24282V8.19595H16.4097C14.919 8.19595 14.4541 9.12096 14.4541 10.0699V12.3209H17.7822L17.2502 15.7897H14.4541V24.1752C20.1909 23.2749 24.5791 18.3105 24.5791 12.3209Z"
                    fill="white"
                  />
                </svg>
              </a>
            </div>

            <div
              class="flex h-12 w-12 items-center justify-center rounded-full bg-primary"
            >
              <a href="#">
                <svg
                  width="25"
                  height="25"
                  viewBox="0 0 25 25"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M12.5791 2.64106C15.7338 2.64106 16.1041 2.65513 17.351 2.71138C18.5041 2.76294 19.1276 2.95513 19.5447 3.11919C20.0979 3.33481 20.4916 3.58794 20.9041 4.00044C21.3166 4.41294 21.5744 4.80669 21.7854 5.35981C21.9447 5.777 22.1416 6.40044 22.1932 7.55356C22.2494 8.80044 22.2635 9.17075 22.2635 12.3254C22.2635 15.4801 22.2494 15.8504 22.1932 17.0973C22.1416 18.2504 21.9494 18.8739 21.7854 19.2911C21.5697 19.8442 21.3166 20.2379 20.9041 20.6504C20.4916 21.0629 20.0979 21.3208 19.5447 21.5317C19.1276 21.6911 18.5041 21.8879 17.351 21.9395C16.1041 21.9958 15.7338 22.0098 12.5791 22.0098C9.42443 22.0098 9.05411 21.9958 7.80724 21.9395C6.65411 21.8879 6.03068 21.6958 5.61349 21.5317C5.06036 21.3161 4.66661 21.0629 4.25411 20.6504C3.84161 20.2379 3.5838 19.8442 3.37286 19.2911C3.21349 18.8739 3.01661 18.2504 2.96505 17.0973C2.9088 15.8504 2.89474 15.4801 2.89474 12.3254C2.89474 9.17075 2.9088 8.80044 2.96505 7.55356C3.01661 6.40044 3.2088 5.777 3.37286 5.35981C3.58849 4.80669 3.84161 4.41294 4.25411 4.00044C4.66661 3.58794 5.06036 3.33013 5.61349 3.11919C6.03068 2.95981 6.65411 2.76294 7.80724 2.71138C9.05411 2.65044 9.42443 2.64106 12.5791 2.64106ZM12.5791 0.512939C9.37286 0.512939 8.96974 0.527002 7.7088 0.583252C6.45255 0.639502 5.59474 0.841064 4.84474 1.13169C4.06661 1.43169 3.41036 1.8395 2.75411 2.49575C2.09786 3.152 1.69474 3.81294 1.39005 4.58638C1.09943 5.33638 0.897864 6.19419 0.841614 7.45513C0.785364 8.71138 0.771301 9.1145 0.771301 12.3208C0.771301 15.527 0.785364 15.9301 0.841614 17.1911C0.897864 18.4473 1.09943 19.3051 1.39005 20.0598C1.69005 20.8379 2.09786 21.4942 2.75411 22.1504C3.41036 22.8067 4.0713 23.2098 4.84474 23.5145C5.59474 23.8051 6.45255 24.0067 7.71349 24.0629C8.97443 24.1192 9.37286 24.1333 12.5838 24.1333C15.7947 24.1333 16.1932 24.1192 17.4541 24.0629C18.7104 24.0067 19.5682 23.8051 20.3229 23.5145C21.101 23.2145 21.7572 22.8067 22.4135 22.1504C23.0697 21.4942 23.4729 20.8333 23.7776 20.0598C24.0682 19.3098 24.2697 18.452 24.326 17.1911C24.3822 15.9301 24.3963 15.5317 24.3963 12.3208C24.3963 9.10981 24.3822 8.71138 24.326 7.45044C24.2697 6.19419 24.0682 5.33638 23.7776 4.58169C23.4776 3.80356 23.0697 3.14731 22.4135 2.49106C21.7572 1.83481 21.0963 1.43169 20.3229 1.127C19.5729 0.836377 18.7151 0.634814 17.4541 0.578564C16.1885 0.527002 15.7854 0.512939 12.5791 0.512939Z"
                    fill="white"
                  />
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
    
    ';
}

?>