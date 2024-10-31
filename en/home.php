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
  <script src="./resources/js/function.js"></script>
</head>
<body align="center" class="bg-repeat-y bg-[url('./resources/img/bg/background.svg')] bg-center">

  <!-- TOP -->
   <header class="absolute inset-x-0 top-0 z-50 h-[28px] bg-[#307060]
                  lg:w-[100%] lg:h-[auto] lg:fixed
                  xl:w-[100%] xl:h-[auto] xl:fixed
                  min-[412px]:w-[100%] min-[412px]:block
                  min-[390px]:w-[100%] min-[390px]:block">
    <div class="text-[#FFF] text-center text-[14px] font-normal font-[400] leading-normal float-right mr-[20px] 
                min-[390px]:mt-[3px]">
      IN | EN
    </div>
  </header>
  <!-- END TOP -->

  <!-- NAV BAR -->
  <header class="absolute inset-x-0 top-7 z-50 shadow-[0px_1px_4px_rgba(0,0,0,0.25)] bg-white
                lg:w-[100%] lg:h-[auto] lg:mt-[-6px] lg:fixed
                xl:w-[100%] xl:h-[auto] xl:mt-[-6px] xl:fixed
                min-[412px]:w-[100%] min-[412px]:block
                min-[390px]:w-[100%] min-[390px]:block">
    
    <!-- WEB -->
    <nav aria-label="Global" 
         class="flex items-center justify-between p-6 
                max-[960px]:hidden
                lg:px-8" >
      <div class="flex lg:flex-1">
        <img class="h-8 w-[232px] h-[40.117px]" src="./resources/img/logo/logo-bumi-kadaka.svg" alt="">
      </div>

      <ul class="flex flex-wrap items-center font-medium text-sm">
        <li class="p-4 
                    lg:px-8">
          <a class="text-slate-800 hover:text-slate-900 font-bold text-[15px]" href="#">Home</a>
        </li>
        <li class="p-4 
                    lg:px-8
                    relative flex items-center space-x-1"
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
        <li class="p-4 
                    lg:px-8
                    relative flex items-center space-x-1"
                    x-data="{ open: false }"
                    @mouseenter="open = true"
                    @mouseleave="open = false" style="margin-right: -20px;">

            <a class="text-slate-800 hover:text-slate-900 font-normal text-[15px]"
                href="#0"
                :aria-expanded="open">Our Brands</a>

                <button class="shrink-0 p-1"
                        :aria-expanded="open"
                        @click.prevent="open = !open">
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
        <li class="p-4 
                    lg:px-8">
            <a class="text-slate-800 hover:text-slate-900 font-normal" href="#">Investor</a>
        </li>
        <li class="p-4 
                    lg:px-8">
            <a class="text-slate-800 hover:text-slate-900 font-normal" href="#">Contact Us</a>
        </li>
      </ul>
    </nav>
    <!-- END WEB -->

    <!-- MOBILE -->
    <?php include 'home-nav-mobile.php' ?>
    <!-- END MOBILE -->

  </header>
  <!-- END NAV BAR -->

  <div style="margin: auto;" 
       class="w-[1440px]
              lg:w-[1000px] lg:ml-[0px]
              xl:w-[1280px]
              min-[412px]:w-[412px]
              min-[390px]:w-[390px]">
    
    <!-- SLIDER -->
      <div class="flex w-full flex-col 
                  lg:block 
                  xl:block 
                  min-[412px]:hidden 
                  min-[390px]:hidden">
        <div class="lg:mt-[130px]">
          <div  id="default-carousel" 
                data-carousel="slide"
                class="relative w-full
                        xl:mt-[-33px]" >
              <div class="relative h-56 overflow-hidden rounded-lg 
                          xl:h-[598px]
                          lg:h-[340px]">
                  <div class="hidden duration-700 ease-in-out" data-carousel-item>
                      <img src="./resources/img/slider/slider-1.png" 
                      class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2
                      lg:w-[100%]">
                  </div>
                  <div class="hidden duration-700 ease-in-out" data-carousel-item>
                      <img src="./resources/img/slider/slider-2.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2
                      lg:w-[100%]">
                  </div>
              </div>
              <div class="absolute top-0 end-0 z-30 flex items-end justify-end h-full cursor-pointer 
                          xl:mt-[-32px]">
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

      <!-- MOBILE -->
      <div class="flex w-full flex-col 
                  lg:hidden 
                  xl:hidden 
                  min-[412px]:block
                  min-[390px]:block">
        <div class="mt-[117px]">
          <img src="./resources/img/mobile/slide-mobile.png" 
               class="min-[412px]:w-[412px]
                      min-[390px]:w-[390px]">
                      
        </div>
        <div class="bg-[#F1AE93] h-[92px] text-justify
                    min-[412px]:w-[412px]
                    min-[390px]:w-[390px]">
          <div class="float-left ml-[10px] mt-[10px]">
            <span class="text-white text-[14px] font-bold">Sadesa Restaurant</span>
          </div>
          <div class="float-left ml-[10px] 
                      min-[412px]:w-[392px]
                      min-[390px]:w-[370px]">
            <p class="text-white text-[9px] 
                      min-[412px]:w-[392px]
                      min-[390px]:w-[370px]">Sadesa is a restaurant at Forest Hills Hotel Ciwidey. Located on the 2nd floor of the Hotel, you can enjoy breakfast, lunch, dinner or a romantic dinner with views of beautiful mountains, rice fields and flowing rivers.</p>
          </div>
        </div>
      </div>
      <!-- END MOBILE -->
    <!-- END SLIDER -->

    <!-- DE LIGHT -->
      <div class="flex w-full flex-col 
                  lg:block 
                  xl:block 
                  min-[412px]:hidden 
                  min-[390px]:hidden">
        <div class="mt-[20px]">
          <span class="text-[24px]">“ DELIGHT IN THE GLORIOUS OF NATURE COMFORTABLY ”</span>
        </div>
      </div>

      <!-- MOBILE -->
      <div class="flex w-full flex-col 
                  lg:hidden 
                  xl:hidden 
                  min-[412px]:block min-[412px]:ml-[10px] min-[412px]:w-[392px]
                  min-[390px]:block min-[390px]:ml-[10px] min-[390px]:w-[370px]">
        <div class="mt-[10px]">
          <span class="text-[11px]">“ DELIGHT IN THE GLORIOUS OF NATURE COMFORTABLY ”</span>
        </div>
      </div>
      <!-- END MOBILE -->
    <!-- END DE LIGHT -->

    <!-- ABOUT US -->
    <div class="flex w-full flex-col 
                lg:block 
                xl:block 
                min-[412px]:hidden 
                min-[390px]:hidden">
      <div class="mt-[50px]">
        <div class="items-center">
          <div class="float-left ml-[50px;]">
            <img class="w-[735px] h-[571px] 
                        lg:w-[500px] lg:h-[auto]
                        xl:w-[650px] xl:h-[auto]" 
                        src="./resources/img/home/about-us-home.png" alt="">
          </div>
          <div class="float-left pl-[50px] mt-[60px] w-[40%] lg:mt-[0px;]">
            <div class="text-left 
                        lg:mt-[30px]
                        xl:mt-[70px]">
              <span class="text-[51px] font-bold leading-normal text-[#2F2E2E]
                          lg:text-[32px]
                          xl:text-[42px]">About Us</span>
            </div>
            <br>
            <p class="text-[#2F2E2E] text-[24px] text-justify non-italic font-normal
                      lg:text-[15px]
                      xl:text-[20px]">
              Founded in 2013 in Bandung, Indonesia, PT Bumi Kadaka is designed to specialize in hotel, resort, culinary, and tourism services. Our approach harmonizes local uniqueness and natural beauty with technology and sustainable practices. Committed to redefining hospitality, we focus on crafting memorable experiences rooted in Indonesian.
            </p>

            <br>
            <div class="text-[#2F2E2E] text-[24px] non-italic font-bold text-left
                        lg:text-[14px]
                        xl:text-[20px]">
              <a href="">Read More . . .</a>
            </div>
          </div>
        </div>
      </div>
    </div>

      <!-- MOBILE -->
      <div class="flex w-full flex-col 
                  lg:hidden xl:hidden 
                  min-[412px]:block
                  min-[390px]:block">
        <div class="mt-[20px]">
          <img src="./resources/img/mobile/about-us-mobile.png" 
               class="min-[412px]:w-[412px]
                      min-[390px]:w-[390px]">
        </div>
        <div class="h-[92px] text-justify">
          <div class="float-left ml-[10px] mt-[15px] 
                      min-[412px]:w-[390px]
                      min-[390px]:w-[370px]">
            <span class="text-[16px] font-bold">About Us</span>
          </div>
          <div class="float-left ml-[10px] mt-[5px] 
                      min-[412px]:w-[390px]
                      min-[390px]:w-[370px]">
            <p class="text-[9px]">Sadesa is a restaurant at Forest Hills Hotel Ciwidey. Located on the 2nd floor of the Hotel, you can enjoy breakfast, lunch, dinner or a romantic dinner with views of beautiful mountains, rice fields and flowing rivers.</p>
          </div>
          <div class="float-left ml-[10px] 
                      min-[412px]:w-[390px]
                      min-[390px]:w-[370px]">
            <span class="text-[9px] font-bold">Read More ...</span>
          </div>
        </div>
      </div>
      <!-- END MOBILE -->
    <!-- END ABOUT US -->

    <!-- DOCUMENTARY -->
    <div class="flex w-full flex-col 
                lg:block 
                xl:block 
                min-[412px]:hidden 
                min-[390px]:hidden">
        <div class="mt-[680px] h-[245px] bg-[url('./resources/img/bg/documentary.png')] 
                    lg:h-[185px] 
                    xl:h-[200px]">
          <div class="text-center font-medium non-italic w-auto
                    lg:text-[14px]
                    xl:text-[20px]">
            <br>
            <span class="text-white font-[500]">Our approach harmonizes local uniqueness and natural beauty with </span>
            <br> 
            <span class="text-white font-[500]"> technology and sustainable practices. </span>
          </div>

          <br><br>
          <div align="center">
            <a href="#">
              <button class="w-[343px] h-[48px] rounded-[10px] bg-[#F1AE93] shadow-[0px_4px_4px_0px_rgba(0,0,0,0.25)] text-white
              lg:text-[14px] lg:w-[223px] lg:h-[38px]" 
              align="center">
                Watch Our Documentary
              </button>
            </a>
          </div>
        </div>
    </div>

      <!-- END MOBILE -->
      <div class="flex w-full flex-col 
                  lg:hidden 
                  xl:hidden 
                  min-[412px]:block
                  min-[390px]:block">
        <div class="mt-[40px] h-[160px] bg-[url('./resources/img/mobile/documentary-mobile.png')]">
          <div class="text-center font-medium non-italic w-auto">
            <br>
            <span class=" text-white font-[500] 
                          min-[412px]:text-[10px]
                          min-[390px]:text-[10px]">Our approach harmonizes local uniqueness and natural </span>
          </div>
          <div>
            <span class=" text-white font-[500] 
                          min-[412px]:text-[10px]
                          min-[390px]:text-[10px]"> beauty with technology and sustainable practices. </span>
          </div>
          <br>
          <div align="center">
            <a href="#">
              <button align="center" 
                      class="w-[200px] h-[28px] rounded-[10px] bg-[#F1AE93] shadow-[0px_4px_4px_0px_rgba(0,0,0,0.25)] text-white text-[12px]">
                Watch Our Documentary
              </button>
            </a>
          </div>
        </div>
      </div>
      <!-- END ABOUT US -->
    <!-- END DOCUMENTARY -->

    <!-- MOVING IMAGE -->
    <div class="flex w-full flex-col lg:block xl:block min-[412px]:hidden min-[390px]:hidden">
      <div class="mt-[90px]">
        <div class="w-[719px] h-[599px] float-left 
                    lg:w-[500px] 
                    xl:w-[640px]">
          <div class="bg-[url('./resources/img/home/doc-image-dark.png')] 
                      hover:bg-[url('./resources/img/home/doc-image-real.png')] w-[719px] h-[599px]
                      lg:w-[500px]
                      xl:w-[640px]">
          </div>
        </div>
        <div class="w-[719px] h-[599px] float-left 
                    lg:w-[500px] 
                    xl:w-[640px]">
          <div class="bg-[url('./resources/img/home/doc-image-dark-1.png')] 
                      hover:bg-[url('./resources/img/home/doc-image-real-1.png')] w-[719px] h-[599px]
                      lg:w-[500px]
                      xl:w-[640px]">
          </div>
        </div>
      </div>
    </div>

      <!-- MOBILE -->
      <div class="flex w-full flex-col 
                  lg:hidden 
                  xl:hidden 
                  min-[412px]:block
                  min-[390px]:block">
        <div class="mt-[40px] h-[180px] bg-[url('./resources/img/mobile/moving-image-mobile.png')]"></div>
      </div>
      <!-- END MOBILE -->
    <!-- END MOVING IMAGE -->

    <!-- PARTNER -->
    <div class="flex w-full flex-col 
                lg:block 
                xl:block 
                min-[412px]:hidden 
                min-[390px]:hidden">
      <div class="mt-[50px]">
        <div class="w-[100%] mt-[750px]">
          <span class="font-bold text-[40px]">Our Partner</span>
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

      <!-- MOBILE -->
      <div class="flex w-full flex-col 
                  lg:hidden 
                  xl:hidden 
                  min-[412px]:block
                  min-[390px]:block">
        <div class="w-[100%] mt-[20px]">
          <span class="font-bold text-[18px]">Our Partner</span>
        </div>
        <div id="default-carousel" class="relative w-full" data-carousel="slide">
          <div class="relative h-[50px] overflow-hidden rounded-lg">
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="./resources/img/partner/slider-partner-1.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="./resources/img/partner/slider-partner-2.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
          </div>
        </div>
      </div>
      <!-- END MOBILE -->
    <!-- END PARTNER -->
    
    <!-- ANNUAL REPORT -->
    <div class="flex w-full flex-col 
                lg:block 
                xl:block 
                min-[412px]:hidden 
                min-[390px]:hidden">
      <div class="mt-[80px]">
        <div class="items-center">
          <div class="float-left pl-[50px] mt-[60px] w-[40%] 
                      lg:w-[45%] lg:mt-[0px]
                      xl:w-[40%] xl:mt-[30px]">
            <div class="text-left">
              <span class="text-[51px] font-bold leading-normal text-[#2F2E2E]
                            lg:text-[32px]
                            xl:text-[42px]" >Annual Report</span>
            </div>
            <br><br>
            <p class="text-[#2F2E2E] text-[24px] text-justify non-italic font-normal
                      lg:text-[14px]
                      xl:text-[20px]">
              Our purpose is to provide True Hospitality for Good. It brings our brands to life, shapes our culture and represents a commitment to make a difference to our people, guests and communities, and to protect the world around us. With strong stakeholder engagement, together we work towards common goals that help create shared value for all.
            </p>

            <br><br>
            <div class="text-[#2F2E2E] text-[24px] non-italic font-bold text-left
                        lg:text-[14px]
                        xl:text-[20px]">
              <a href="">Download Annual Report</a>
            </div>
          </div>
          <div class="float-left ml-[50px;] lg:ml-[75px]">
            <img class="w-[735px] h-[571px] 
                        lg:w-[400px] lg:h-[auto]
                        xl:w-[610px] xl:h-[auto]" src="./resources/img/home/annual-report.png" alt="">
          </div>
        </div>
      </div>
    </div>

      <!-- MOBILE -->
      <div class="flex w-full flex-col 
                  lg:hidden 
                  xl:hidden 
                  min-[412px]:block 
                  min-[390px]:block">
        <div class="mt-[20px]">
          <img src="./resources/img/mobile/annual-report-mobile.png" 
               class="min-[412px]:w-[412px]
                      min-[390px]:w-[390px]">
        </div>
        <div class="h-[92px] text-justify">
          <div class="float-left ml-[10px] mt-[15px] 
                      min-[412px]:w-[390px]
                      min-[390px]:w-[370px]">
            <span class="text-[16px] font-bold">Annual Report</span>
          </div>
          <div class="float-left ml-[10px] mt-[5px] 
                      min-[412px]:w-[390px]
                      min-[390px]:w-[370px]">
            <p class="text-[9px]">Our purpose  is to provide True Hospitality for Good. It brings our brands to life, shapes our culture and represents a commitment to make a difference to our people, guests and communities, and to protect the world around us. With strong stakeholder engagement, together we work towards common goals that help create shared value for all.</p>
          </div>
          <div class="float-left ml-[10px] 
                      min-[412px]:w-[390px]
                      min-[390px]:w-[370px]">
            <span class="text-[9px] font-bold">Download Annual Report</span>
          </div>
        </div>
      </div>
      <!-- END MOBILE -->
    <!-- END ANNUAL REPORT -->   

    <!-- FEATURED -->
    <div class="flex w-full flex-col 
                lg:block 
                xl:block 
                min-[412px]:hidden 
                min-[390px]:hidden">
      <div class="mt-[650px]">
        <div class="mt-[90px] bg-[#EFAE93] 
                    lg:w-[100%] 
                    xl:w-[100%]">
          <div class="m-[50px] h-[430px]">
            
            <div class="float-left">
              <div class="w-[100%] text-left mt-[20px]">
                <span class="text-white text-[51px] font-[700]
                             lg:text-[34px]">Featured</span>
              </div>
              
              <div class="float-left">
                <div class="w-[100%] text-left mt-[40px]">
                  <div class="w-[396px] h-[298px] 
                              lg:w-[249px] 
                              xl:w-[342px]">
                    <img src="./resources/img/home/feature-1.png" alt="">

                    <div class="mt-[20px] text-white text-[28px] font-[700]
                              lg:text-[18px]">
                      The Lounge
                    </div>
                    <div class="mt-[20px] text-white text-[17px] font-normal text-justify
                              lg:text-[14px] lg:mt-[10px]">
                      Savour indonesian and western cuisine at our all day dining restaurant. Located on 1st Floor Forest Hills Hotel Ciwidey, surrounded by lush
                    </div>
                  </div>
                </div>
              </div>

              <div class="float-left">
                <div class="w-[100%] text-left mt-[40px] ml-[76px]">
                  <div class="w-[396px] h-[298px] 
                              lg:w-[249px] 
                              xl:w-[342px]">
                    <img src="./resources/img/home/feature-2.png" alt="">

                    <div class="mt-[20px] text-white text-[28px] font-[700]
                              lg:text-[18px]">
                      Lobby Lounge
                    </div>
                    <div class="mt-[20px] text-white text-[17px] font-normal text-justify
                              lg:text-[14px] lg:mt-[10px]">
                      An elegant setting to savor delicious pastries, coffee or tea in the morning and also popular spot in the evening to enjoy creative mocktail
                    </div>
                  </div>
                </div>
              </div>

              <div class="float-left">
                <div class="w-[100%] text-left mt-[40px] ml-[76px]">
                  <div class="w-[396px] h-[298px] 
                              lg:w-[249px] 
                              xl:w-[342px]">
                    <img src="./resources/img/home/feature-3.png" alt="">

                    <div class="mt-[20px] text-white text-[28px] font-[700]
                              lg:text-[18px]">
                      Playground
                    </div>
                    <div class="mt-[20px] text-white text-[17px] font-normal text-justify
                              lg:text-[14px] lg:mt-[10px]">
                      Have a good time! in an outdoor playground with beautiful views. Our outdoor playground is equipped with slides, trampolines, climbing
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> 

      <!-- MOBILE -->
      <div class="flex w-full flex-col 
                  lg:hidden 
                  xl:hidden 
                  min-[412px]:block min-[412px]:mt-[50px]
                  min-[390px]:block min-[390px]:mt-[50px]">
        <div class="bg-[#EFAE93] h-[230px]">
          <span class="float-left mt-[10px] ml-[10px] text-white">Featured</span>

          <div class="float-left overflow-y-auto ml-[10px] h-[180px]
                      min-[412px]:w-[390px]
                      min-[390px]:w-[370px]">
            <div class="w-[126%] text-left mt-[20px]">
              <div class="w-[140px] h-[90px]">
                <img src="./resources/img/home/feature-1.png" alt="">

                <div class="mt-[10px] text-white text-[12px]">
                  The Lounge
                </div>
                <div class="text-white text-[9px] font-normal text-justify
                          lg:text-[14px] lg:mt-[10px]">
                  Savour indonesian and western cuisine at our all day dining restaurant. Located on 1st Floor Forest Hills Hotel Ciwidey, surrounded by lush
                </div>
              </div>

              <div class="w-[140px] h-[90px] ml-[170px] mt-[-90px]">
                <img src="./resources/img/home/feature-1.png" alt="">

                <div class="mt-[10px] text-white text-[12px]">
                  The Lounge
                </div>
                <div class="text-white text-[9px] font-normal text-justify">
                  Savour indonesian and western cuisine at our all day dining restaurant. Located on 1st Floor Forest Hills Hotel Ciwidey, surrounded by lush
                </div>
              </div>

              <div class="w-[140px] h-[90px] ml-[340px] mt-[-90px]">
                <img src="./resources/img/home/feature-1.png">

                <div class="mt-[10px] text-white text-[12px]">
                  The Lounge
                </div>
                <div class="text-white text-[9px] font-normal text-justify">
                  Savour indonesian and western cuisine at our all day dining restaurant. Located on 1st Floor Forest Hills Hotel Ciwidey, surrounded by lush
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <!-- END MOBILE -->
    <!-- END FEATURED -->

    <!-- FOOTER -->
    <div class="flex w-full flex-col 
                lg:block 
                xl:block 
                min-[412px]:hidden 
                min-[390px]:hidden">
      <div class="mt-[50px]">
        <div class="float-left ml-[50px] mb-[50px] w-[430px]">
          <img class="h-8 w-[232px] h-[40.117px]" src="./resources/img/logo/logo-bumi-kadaka.svg" alt="">
          <div class="w-[369px] text-justify mt-[20px] text-[#2F2E2E] text-[17px]
                      lg:text-[14px]">
            PT Bumi Kadaka is designed to specialize in hotel, resort, culinary, and tourism services. Our approach harmonizes local uniqueness and natural beauty with technology and sustainable practices. 
          </div>
        </div>

        <div class="float-left ml-[495px] mb-[50px] w-[430px] 
                    lg:ml-[240px] lg:w-[280px]
                    xl:ml-[448px]">
          <div class="float-left w-[215px] text-left
                      lg:w-[130px]">
            Site Map

            <div class="mt-[20px] text-[#4F4F4F] text-[14px]
                        lg:-text[14px]">
              <div class="mt-[5px]">Home</div>
              <div class="mt-[5px]">About</div>
              <div class="mt-[5px]">Our Company</div>
              <div class="mt-[5px]">Contact</div>
              <div class="mt-[5px]">Find A Job</div>
            </div>
          </div>

          <div class="float-left w-[215px] text-left
                      lg:w-[130px]">
            Connect

            <div class="mt-[20px] text-[#4F4F4F] text-[14px]
                        lg:w-[120px] lg:-text[14px]">
              <div class="mt-[5px]">Twitter</div>
              <div class="mt-[5px]">Facebook</div>
              <div class="mt-[5px]">LinkedIn</div>
              <div class="mt-[5px]">Email Subscription</div>
              <div class="mt-[5px]">RSS Subscription</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="flex w-full flex-col lg:block xl:block min-[412px]:hidden min-[390px]:hidden">
      <div class="bg-[#307060] h-[50px] text-left 
                  lg:w-[100%] lg:mt-[270px]
                  xl:w-[100%] xl:mt-[270px]">
          <div class="float-left ml-[50px] mt-[15px]">
            <span class="text-white text-[14px]">© PT. Bumi Kadaka 2024</span>
          </div>
          <div class="float-left ml-[50px] mt-[15px]
                      lg:ml-[145px] lg:w-[375px]
                      xl:ml-[425px]">
            <span class="text-white text-[14px]">Accessibility</span>
            <span class="text-white text-[14px] ml-[65px]
                         lg:ml-[50px]">Legal</span>
            <span class="text-white text-[14px] ml-[65px]
                         lg:ml-[50px]">Privacy Statement</span>
          </div>
      </div>
    </div>

      <!-- MOBILE -->
      <div class="flex w-full flex-col 
                  lg:hidden 
                  xl:hidden 
                  min-[412px]:block
                  min-[390px]:block">
        <div class="mt-[20px]">
          <div class="float-left ml-[20px] mb-[50px] 
                      min-[412px]:w-[390px]
                      min-[390px]:w-[370px]">
            <img class="h-8 w-[211px] h-[40.117px]" src="./resources/img/logo/logo-bumi-kadaka.svg" alt="">
            <div class="text-justify mt-[20px] text-[#2F2E2E] text-[14px]
                        min-[412px]:w-[372px]
                        min-[390px]:w-[350px]">
              PT Bumi Kadaka is designed to specialize in hotel, resort, culinary, and tourism services. Our approach harmonizes local uniqueness and natural beauty with technology and sustainable practices. 
            </div>
          </div>
        </div>
      </div>

       <div class="flex w-full flex-col 
                    lg:hidden 
                    xl:hidden 
                    min-[412px]:block
                    min-[390px]:block">
        <div class="mt-[20px]">
          <div class="bg-[#307060] h-[39px] text-left mt-[190px]">
            <div class="float-left ml-[20px] mt-[-20px]
                        min-[412px]:w-[212px]
                        min-[390px]:w-[112px]">
              <span class="text-white text-[8px]">© PT. Bumi Kadaka 2024</span>
            </div>
            <div class="float-left mt-[-25px] 
                        min-[412px]:w-[192px] min-[412px]:ml-[220px]
                        min-[390px]:w-[185px] min-[390px]:ml-[198px]">
              <span class="text-white text-[8px]">Accessibility</span>
              <span class="text-white text-[8px] ml-[10px]">Legal</span>
              <span class="text-white text-[8px] ml-[10px]">Privacy Statement</span>
            </div>
          </div>
        </div>
      </div>
      <!-- END MOBILE -->
    <!-- END FOOTER -->


  </div>
</body>
</html>