<!-- TOP -->
<header class=" absolute inset-x-0 top-0 z-50 h-[28px] bg-[#307060]
                lg:w-[100%] lg:h-[auto] lg:fixed
                xl:w-[100%] xl:h-[auto] xl:fixed
                min-[412px]:w-[100%] min-[412px]:block
                min-[390px]:w-[100%] min-[390px]:block
                min-[320px]:w-[100%] min-[320px]:block">
<div class="text-[#FFF] text-center text-[14px] font-normal font-[400] leading-normal
            min-[390px]:mt-[3px]
            min-[320px]:mt-[3px]">
    <div class="lg:w-[1440px] lg:m-auto
                xl:w-[1440px] xl:m-auto">
        <div class="float-right 
                    mr-[80px] 
                    lg:mr-[85px]
                    xl:mr-[85px]
                    min-[5120px]:mr-[80px]
                    min-[3840px]:mr-[80px]
                    min-[2560px]:mr-[80px]
                    min-[1920px]:mr-[80px]
                    min-[1706px]:mr-[80px]
                    min-[1600px]:mr-[80px]
                    min-[1422px]:mr-[90px]
                    min-[1280px]:mr-[195px]
                    min-[1163px]:mr-[330px]
                    min-[1024px]:mr-[440px]
                    min-[853px]:mr-[25px]
                    min-[731px]:mr-[27px]
                    min-[640px]:mr-[29px]
                    min-[512px]:mr-[31px]
                    min-[426px]:mr-[27px]
                    min-[320px]:mr-[25px]
                    min-[256px]:mr-[27px]">IN | EN</div>
    </div>
</div>
</header>
<!-- END TOP -->

<!-- NAV BAR -->
<header class="absolute inset-x-0 top-7 z-50 shadow-[0px_1px_4px_rgba(0,0,0,0.25)] bg-white
            lg:w-[100%] lg:h-[auto] lg:mt-[-6px] lg:fixed
            xl:w-[100%] xl:h-[auto] xl:mt-[-6px] xl:fixed
            min-[412px]:w-[100%] min-[412px]:block
            min-[390px]:w-[100%] min-[390px]:block
            min-[320px]:w-[100%] min-[320px]:block">

<!-- WEB -->
<nav aria-label="Global" 
     class="flex items-center justify-between p-6 
            max-[1023px]:hidden
            lg:px-8 
            lg:w-[1440px] lg:m-auto
            xl:w-[1440px] xl:m-auto">
  <div class="flex lg:flex-1">
    <div class="xl:w-[45%]
                lg:w-[45%]
                min-[5120px]:w-[63%]
                min-[3840px]:w-[63%]
                min-[2560px]:w-[63%]
                min-[1920px]:w-[63%]
                min-[1706px]:w-[63%]
                min-[1600px]:w-[63%]
                min-[1422px]:w-[61%]
                min-[1280px]:w-[54%]
                min-[1163px]:w-[44%]
                min-[1024px]:w-[36%]
                ">
        <img class="h-8 w-[232px] h-[40.117px]" src="/bumi-kadaka/resources/img/logo/logo-bumi-kadaka.svg" alt="">
    </div>
    <div class="xl:w-[38%]
                lg:w-[38%]
                min-[1280px]:w-[38%]">
        <ul class="flex flex-wrap items-center font-medium text-sm">
        <li class="p-4 
                   lg:px-8">
          <a class="text-slate-800 hover:text-slate-900 font-bold text-[15px]" href="/bumi-kadaka/index.php">Home</a>
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
                    <a class="text-slate-800 hover:bg-[#EFAE93] hover:text-white flex items-center p-2 font-normal" href="/bumi-kadaka/en/about-us/history.php">
                        <span class="whitespace-nowrap">History</span>
                    </a>
                </li>
                <li>
                    <a class="text-slate-800 hover:bg-[#EFAE93] hover:text-white flex items-center p-2 font-normal" href="/bumi-kadaka/en/about-us/vision-mission.php">
                        <span class="whitespace-nowrap">Vission Mission</span>
                    </a>
                </li>
                <li>
                    <a class="text-slate-800 hover:bg-[#EFAE93] hover:text-white flex items-center p-2 font-normal" href="#">
                        <span class="whitespace-nowrap">Milestone</span>
                    </a>
                </li>
                <li>
                    <a class="text-slate-800 hover:bg-[#EFAE93] hover:text-white flex items-center p-2 font-normal" href="/bumi-kadaka/en/about-us/awards.php">
                        <span class="whitespace-nowrap">Awards</span>
                    </a>
                </li>
                <li>
                    <a class="text-slate-800 hover:bg-[#EFAE93] hover:text-white flex items-center p-2 font-normal" href="/bumi-kadaka/en/about-us/structure-organization.php">
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
                        <a class="text-slate-800 hover:bg-[#EFAE93] hover:text-white flex items-center p-2 font-normal" href="/bumi-kadaka/en/our-brands/hotels.php">
                            <span class="whitespace-nowrap">Hotels</span>
                        </a>
                    </li>
                    <li>
                        <a class="text-slate-800 hover:bg-[#EFAE93] hover:text-white flex items-center p-2 font-normal" href="/bumi-kadaka/en/our-brands/restaurants.php">
                            <span class="whitespace-nowrap">Restaurant</span>
                        </a>
                    </li>
                </ul>
        </li>
        <!-- <li class="p-4 
                    lg:px-8">
            <a class="text-slate-800 hover:text-slate-900 font-normal" href="#">Investor</a>
        </li> -->
        <li class="p-4 
                    lg:px-8">
            <a class="text-slate-800 hover:text-slate-900 font-normal" href="#">Contact Us</a>
        </li>
  </ul>
    </div>
  </div>
</nav>
<!-- END WEB -->

<!-- MOBILE -->
<?php include 'nav-mobile.php' ?>
<!-- END MOBILE -->

</header>
<!-- END NAV BAR -->