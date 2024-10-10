<!doctype html>
<html>
<head>
  <title>PT. Bumi Kadaka</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="./resources/img/ico/ico-bumi-kadaka.png" sizes="32x32">
  <link rel="stylesheet" href="./resources/css/main.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://flowbite.com/docs/flowbite.min.js"></script>

  <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

  </head>
<body class="bg-repeat-y bg-[url('./resources/img/bg/background.svg')] bg-top" align="center">
  <!-- TOP -->
   <header class="absolute inset-x-0 top-0 z-50 h-[28px] bg-[#307060] fixed" style="position: fixed;">
    <div class="text-[#FFF] text-center text-[14px] font-normal font-[400] leading-normal float-right mr-[20px]">
      IN | EN
    </div>
  </header>
  <!-- END TOP -->

  <!-- NAV BAR -->
  <header class="absolute inset-x-0 top-7 z-50 shadow-[0px_1px_4px_rgba(0,0,0,0.25)] bg-white" style="position: fixed;">
    <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
      <div class="flex lg:flex-1">
        <img class="h-8 w-[232px] h-[40.117px]" src="./resources/img/logo/logo-bumi-kadaka.svg" alt="">
      </div>

      <ul class="flex flex-wrap items-center font-medium text-sm">
        <li class="p-4 lg:px-8">
          <a class="text-slate-800 hover:text-slate-900 font-bold text-[15px]" href="#">Home</a>
        </li>
        <li class="p-4 lg:px-8 relative flex items-center space-x-1"
            x-data="{ open: false }"
            @mouseenter="open = true"
            @mouseleave="open = false" style="margin-right: -20px;">
              <a class="text-slate-800 hover:text-slate-900 font-normal text-[15px]"
                  href="#0"
                  :aria-expanded="open">About Us</a>

                  <button class="shrink-0 p-1"
                          :aria-expanded="open"
                          @click.prevent="open = !open"
                          >
              </button>
                <ul style="margin-left: 80px;"
                  class="origin-top-right absolute top-full left-1/2 -translate-x-1/2 min-w-[240px] bg-white border border-slate-200 p-2 rounded-lg shadow-xl mt-[25px] [&[x-cloak]]:hidden"
                  x-show="open"
                  x-transition:enter="transition ease-out duration-200 transform"
                  x-transition:enter-start="opacity-0 -translate-y-2"
                  x-transition:enter-end="opacity-100 translate-y-0"
                  x-transition:leave="transition ease-out duration-200"
                  x-transition:leave-start="opacity-100"
                  x-transition:leave-end="opacity-0"
                  x-cloak
                  @focusout="await $nextTick();!$el.contains($focus.focused()) && (open = false)">
                  <li>
                      <a class="text-slate-800 hover:bg-[#EFAE93] hover:text-white flex items-center p-2 font-normal" href="#">
                          <span class="whitespace-nowrap">History</span>
                      </a>
                  </li>
                  <li>
                      <a class="text-slate-800 hover:bg-[#EFAE93] hover:text-white flex items-center p-2 font-normal" href="#">
                          <span class="whitespace-nowrap">Visi Misi</span>
                      </a>
                  </li>
                  <li>
                      <a class="text-slate-800 hover:bg-[#EFAE93] hover:text-white flex items-center p-2 font-normal" href="#">
                          <span class="whitespace-nowrap">Milestone</span>
                      </a>
                  </li>
                  <li>
                      <a class="text-slate-800 hover:bg-[#EFAE93] hover:text-white flex items-center p-2 font-normal" href="#">
                          <span class="whitespace-nowrap">Awards</span>
                      </a>
                  </li>
                  <li>
                      <a class="text-slate-800 hover:bg-[#EFAE93] hover:text-white flex items-center p-2 font-normal" href="#">
                          <span class="whitespace-nowrap">Structure Organization</span>
                      </a>
                  </li>
              </ul>
          </li>
          <li class="p-4 lg:px-8 relative flex items-center space-x-1"
            x-data="{ open: false }"
            @mouseenter="open = true"
            @mouseleave="open = false" style="margin-right: -20px;">
              <a class="text-slate-800 hover:text-slate-900 font-normal text-[15px]"
                  href="#0"
                  :aria-expanded="open">Our Brands</a>

                  <button class="shrink-0 p-1"
                          :aria-expanded="open"
                          @click.prevent="open = !open"
                          >
              </button>
                <ul style="margin-left: 75px;"
                  class="origin-top-right absolute top-full left-1/2 -translate-x-1/2 min-w-[240px] bg-white border border-slate-200 p-2 rounded-lg shadow-xl mt-[25px] [&[x-cloak]]:hidden"
                  x-show="open"
                  x-transition:enter="transition ease-out duration-200 transform"
                  x-transition:enter-start="opacity-0 -translate-y-2"
                  x-transition:enter-end="opacity-100 translate-y-0"
                  x-transition:leave="transition ease-out duration-200"
                  x-transition:leave-start="opacity-100"
                  x-transition:leave-end="opacity-0"
                  x-cloak
                  @focusout="await $nextTick();!$el.contains($focus.focused()) && (open = false)">
                  <li>
                      <a class="text-slate-800 hover:bg-[#EFAE93] hover:text-white flex items-center p-2 font-normal" href="#">
                          <span class="whitespace-nowrap">Hotels</span>
                      </a>
                  </li>
                  <li>
                      <a class="text-slate-800 hover:bg-[#EFAE93] hover:text-white flex items-center p-2 font-normal" href="#">
                          <span class="whitespace-nowrap">Restaurant</span>
                      </a>
                  </li>
              </ul>
          </li>
          <li class="p-4 lg:px-8">
              <a class="text-slate-800 hover:text-slate-900 font-normal" href="#">Investor</a>
          </li>
          <li class="p-4 lg:px-8">
              <a class="text-slate-800 hover:text-slate-900 font-normal" href="#">Contact Us</a>
          </li>
      </ul>
    </nav>
  </header>
  <!-- END NAV BAR -->

  <div class="w-[1440px] m-auto">
    
    <!-- SLIDER -->
      <div class="flex w-full flex-col">
        <div class="mt-[130px]">
          <div id="default-carousel" class="relative w-full" data-carousel="slide">
              <div class="relative h-56 overflow-hidden rounded-lg md:h-[598px]">
                  <div class="hidden duration-700 ease-in-out" data-carousel-item>
                      <img src="./resources/img/slider/slider-1.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                  </div>
                  <div class="hidden duration-700 ease-in-out" data-carousel-item>
                      <img src="./resources/img/slider/slider-2.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                  </div>
              </div>
              <div class="absolute top-0 end-0 z-30 flex items-end justify-end h-full cursor-pointer">
                <button type="button" class="group focus:outline-none" data-carousel-next>
                  <span class="inline-flex items-center justify-center w-[43px] h-[34px] bg-white/30 dark:bg-[#F1AE93] group-hover:bg-white/50 dark:group-hover:bg-[#F1AE93] group-focus:outline-none">
                      <svg class="w-4 h-4 text-white dark:text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                      </svg>
                      <span class="sr-only">Previous</span>
                  </span>

                  <span class="inline-flex items-center justify-center w-[43px] h-[34px] bg-white/30 dark:bg-[#F1AE93] group-hover:bg-white/50 dark:group-hover:bg-[#F1AE93] group-focus:outline-none">
                      <svg class="w-4 h-4 text-white dark:text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                      </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
              </div>
          </div>
        </div>
      </div>
    <!-- END SLIDER -->

    <!-- ABOUT US -->
    <div class="flex w-full flex-col">
      <div class="mt-[90px]">
        <div class="items-center">
          <div class="float-left ml-[50px;]">
            <img class="w-[735px] h-[571px]" src="./resources/img/home/about-us-home.png" alt="">
          </div>
          <div class="float-left pl-[50px] mt-[60px] w-[40%]">
            <div class="text-left">
              <span class="text-[51px] font-bold leading-normal text-[#2F2E2E]" >About Us</span>
            </div>
            <br><br>
            <p class="text-[#2F2E2E] text-[24px] text-justify non-italic font-normal">
              Founded in 2013 in Bandung, Indonesia, PT Bumi Kadaka is designed to specialize in hotel, resort, culinary, and tourism services. Our approach harmonizes local uniqueness and natural beauty with technology and sustainable practices. Committed to redefining hospitality, we focus on crafting memorable experiences rooted in Indonesian.
            </p>

            <br><br>
            <div class="text-[#2F2E2E] text-[24px] non-italic font-bold text-left">
              <a href="">Read More . . .</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END ABOUT US -->

    <!-- DOCUMENTARY -->
    <div class="flex w-full flex-col">
      <div class="mt-[90px] h-[245px] bg-[url('./resources/img/bg/documentary.png')]">
        <br>
        <div class="text-center font-medium non-italic w-auto">
          <span class="text-white font-[500]" style="font-size: 25px">Our approach harmonizes local uniqueness and natural beauty with </span>
          <br> 
          <span class="text-white font-[500]" style="font-size: 25px;"> technology and sustainable practices. </span>
        </div>
        <br><br>
        <div align="center">
          <a href="#">
            <button class="w-[343px] h-[48px] rounded-[10px] bg-[#F1AE93] shadow-[0px_4px_4px_0px_rgba(0,0,0,0.25)] text-white" align="center">
              Watch Our Documentary
            </button>
          </a>
        </div>
      </div>
    </div>
    <!-- END DOCUMENTARY -->

    <!-- MOVING IMAGE -->
    <div class="flex w-full flex-col">
      <div class="mt-[90px]">
        <div class="w-[719px] h-[599px] float-left">
          <div class="bg-[url('./resources/img/home/doc-image-dark.png')] hover:bg-[url('./resources/img/home/doc-image-real.png')] w-[719px] h-[599px]">
          </div>
        </div>
        <div class="w-[719px] h-[599px] float-left">
          <div class="bg-[url('./resources/img/home/doc-image-dark-1.png')] hover:bg-[url('./resources/img/home/doc-image-real-1.png')] w-[719px] h-[599px]">
          </div>
        </div>
    </div>
    <!-- END MOVING IMAGE -->

    <!-- PARTNER -->
    <div class="flex w-full flex-col">
      <div class="mt-[90px]">
        <div class="w-[100%]">
          <spam class="font-bold text-[40px]">Our Partner</spam>
        </div>
        <div class="mt-[20px]">
          <div class="flex w-full flex-col">
            <div class="mt-[20px]">
              <div id="default-carousel" class="relative w-full" data-carousel="slide">
                  <div class="relative h-[100px] overflow-hidden rounded-lg">
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="./resources/img/partner/slider-partner-1.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="./resources/img/partner/slider-partner-2.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END PARTNER -->

    <!-- ANNUAL REPORT -->
    <div class="flex w-full flex-col">
      <div class="mt-[90px]">
        <div class="items-center">
          <div class="float-left pl-[50px] mt-[60px] w-[40%]">
            <div class="text-left">
              <span class="text-[51px] font-bold leading-normal text-[#2F2E2E]" >Annual Report</span>
            </div>
            <br><br>
            <p class="text-[#2F2E2E] text-[24px] text-justify non-italic font-normal">
              Our purpose is to provide True Hospitality for Good. It brings our brands to life, shapes our culture and represents a commitment to make a difference to our people, guests and communities, and to protect the world around us. With strong stakeholder engagement, together we work towards common goals that help create shared value for all.
            </p>

            <br><br>
            <div class="text-[#2F2E2E] text-[24px] non-italic font-bold text-left">
              <a href="">Download Annual Report</a>
            </div>
          </div>
          <div class="float-left ml-[50px;]">
            <img class="w-[735px] h-[571px]" src="./resources/img/home/annual-report.png" alt="">
          </div>
        </div>
      </div>
    </div>
    <!-- END ANNUAL REPORT -->

    <!-- FEATURED -->
    <div class="flex w-full flex-col">
      <div class="mt-[90px] bg-[#EFAE93]">
        <div class="m-[50px] h-[430px]">
          
          <div class="float-left">
            <div class="w-[100%] text-left">
              <span class="text-white text-[51px] font-[700]">Featured</span>
            </div>
            
            <div class="float-left">
              <div class="w-[100%] text-left mt-[40px]">
                <div class="w-[396px] h-[298px]">
                  <img src="./resources/img/home/feature-1.png" alt="">

                  <div class="mt-[20px] text-white text-[28px] font-[700]">
                    The Lounge
                  </div>
                  <div class="mt-[20px] text-white text-[17px] font-normal text-justify">
                    Savour indonesian and western cuisine at our all day dining restaurant. Located on 1st Floor Forest Hills Hotel Ciwidey, surrounded by lush
                  </div>
                </div>
              </div>
            </div>

            <div class="float-left">
              <div class="w-[100%] text-left mt-[40px] ml-[76px]">
                <div class="w-[396px] h-[298px]">
                  <img src="./resources/img/home/feature-2.png" alt="">

                  <div class="mt-[20px] text-white text-[28px] font-[700]">
                    Lobby Lounge
                  </div>
                  <div class="mt-[20px] text-white text-[17px] font-normal text-justify">
                    An elegant setting to savor delicious pastries, coffee or tea in the morning and also popular spot in the evening to enjoy creative mocktail
                  </div>
                </div>
              </div>
            </div>

            <div class="float-left">
              <div class="w-[100%] text-left mt-[40px] ml-[76px]">
                <div class="w-[396px] h-[298px]">
                  <img src="./resources/img/home/feature-3.png" alt="">

                  <div class="mt-[20px] text-white text-[28px] font-[700]">
                    Playground
                  </div>
                  <div class="mt-[20px] text-white text-[17px] font-normal text-justify">
                    Have a good time! in an outdoor playground with beautiful views. Our outdoor playground is equipped with slides, trampolines, climbing
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END FEATURED -->

    <!-- FOOTER -->
    <div class="flex w-full flex-col">
      <div class="mt-[50px]">
        <div class="float-left ml-[50px] mb-[50px] w-[430px]">
          <img class="h-8 w-[232px] h-[40.117px]" src="./resources/img/logo/logo-bumi-kadaka.svg" alt="">
          <div class="w-[369px] text-justify mt-[20px] text-[#2F2E2E] text-[17px]">
            PT Bumi Kadaka is designed to specialize in hotel, resort, culinary, and tourism services. Our approach harmonizes local uniqueness and natural beauty with technology and sustainable practices. 
          </div>
        </div>
        <div class="float-left ml-[50px] mb-[50px] w-[430px]"></div>
        <div class="float-left ml-[50px] mb-[50px] w-[430px]">
          <div class="float-left w-[215px] text-left">
            Site Map

            <div class="mt-[20px] text-[#4F4F4F] text-[14px]">
              <div class="mt-[5px]">Home</div>
              <div class="mt-[5px]">About</div>
              <div class="mt-[5px]">Our Company</div>
              <div class="mt-[5px]">Contact</div>
              <div class="mt-[5px]">Find A Job</div>
            </div>
          </div>

          <div class="float-left w-[215px] text-left">
            Connect

            <div class="mt-[20px] text-[#4F4F4F] text-[14px]">
              <div class="mt-[5px]">Twitter</div>
              <div class="mt-[5px]">Facebook</div>
              <div class="mt-[5px]">LinkedIn</div>
              <div class="mt-[5px]">Email Subscription</div>
              <div class="mt-[5px]">RSS Subscription</div>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-[#307060] h-[50px] text-left">
          <div class="float-left ml-[50px] mt-[15px] w-[430px]">
            <span class="text-white text-[14px]">© PT. Bumi Kadaka 2024</span>
          </div>
          <div class="float-left ml-[50px] mt-[15px] w-[430px]"></div>
          <div class="float-left ml-[50px] mt-[15px] w-[430px]">
            <span class="text-white text-[14px]">Accessibility</span>
            <span class="text-white text-[14px] ml-[65px]">Legal</span>
            <span class="text-white text-[14px] ml-[65px]">Privacy Statement</span>
          </div>
      </div>
    </div>
    <!-- END FOOTER -->

  </div>
</body>
</html>