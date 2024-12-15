<nav x-data="{ open: false }"
  class="lg:hidden h-auto w-full
            min-[1023px]:hidden">
  <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
    <div class="flex lg:flex-1">
      <img class="h-8 w-[232px] h-[40.117px]
                  min-[412px]:w-[140px] min-[412px]:mt-[-10px]
                  min-[390px]:w-[140px] min-[390px]:mt-[-10px]
                  min-[320px]:w-[140px] min-[320px]:mt-[-10px]" src="https://bumikadaka.com/resources/img/logo/logo-bumi-kadaka.svg" alt="">
    </div>

    <button class="lg:hidden text-[#EFAE93] hover:text-[#307060] rounded-md transition duration-150 ease-in-out mr-1" aria-label="Main menu" aria-expanded="false">
      <svg @click="open = true"
        class="block h-6 w-6
                    min-[412px]:mt-[-10px] min-[412px]:w-[20px]
                    min-[390px]:mt-[-10px] min-[390px]:w-[20px]
                    min-[320px]:mt-[-10px] min-[320px]:w-[20px]"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>
  </nav>

  <div x-cloak x-show="open"
    @click.away="open = false"
    x-transition:enter="transition ease-out duration-200 transform"
    x-transition:enter-start="opacity-0 -translate-y-2"
    x-transition:enter-end="opacity-100 translate-y-0"
    x-transition:leave="transition ease-out duration-200"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    x-cloak
    @focusout="await $nextTick();!$el.contains($focus.focused()) && (open = false)"
    style="background-color: white;">
    <div class="pl-[30px] pr-[30px] pt-[10px] w-[100%]">
      <a href="/bumi-kadaka/index.php">
        <div class="rounded-[10px] bg-[#F1AE93] h-[39px] flex items-center pl-2">
          <p class="text-white text-[16px]">
            Home
          </p>
        </div>
      </a>
    </div>

    <div class="pl-[30px] pr-[30px] pt-[15px] w-[100%]">
      <nav class="lg:hidden" x-data="{ open: false }">
        <div @click="open = true" class="rounded-[10px] bg-[#F1AE93] h-[39px]">
          <nav class="flex items-center justify-between pl-[10px] pt-[6px] lg:px-8" aria-label="Global">
            <div>
              <button class="lg:hidden text-[#EFAE93] hover:text-[#307060] rounded-md transition duration-150 ease-in-out mr-1" aria-label="Main menu" aria-expanded="false">
                <p class="text-white mt-[5px] text-[16px]">About Us</p>
              </button>
            </div>
          </nav>
        </div>

        <div x-cloak x-show="open"
          @click.away="open = false"
          x-transition:enter="transition ease-out duration-200 transform"
          x-transition:enter-start="opacity-0 -translate-y-2"
          x-transition:enter-end="opacity-100 translate-y-0"
          x-transition:leave="transition ease-out duration-200"
          x-transition:leave-start="opacity-100"
          x-transition:leave-end="opacity-0"
          x-cloak
          @focusout="await $nextTick();!$el.contains($focus.focused()) && (open = false)">
          <div class="pl-[30px] pr-[30px] pt-[10px] w-[100%]">
            <a href="/bumi-kadaka/en/about-us/history.php" class="rounded-[10px] bg-[#F1AE93] h-[39px] flex items-center text-left text-white text-[16px] pl-2">
              History
            </a>
          </div>
          <div class="pl-[30px] pr-[30px] pt-[10px] w-[100%]">
            <a href="/bumi-kadaka/en/about-us/vision-mission.php" class="rounded-[10px] bg-[#F1AE93] h-[39px] flex items-center text-left text-white text-[16px] pl-2">
              Visi Misi
            </a>
          </div>
          <div class="pl-[30px] pr-[30px] pt-[10px] w-[100%]">
            <a href="/bumi-kadaka/en/about-us/history.php/#milestone" class="rounded-[10px] bg-[#F1AE93] h-[39px] flex items-center text-left text-white text-[16px] pl-2">
              Milestone
            </a>
          </div>
          <div class="pl-[30px] pr-[30px] pt-[10px] w-[100%]">
            <a href="/bumi-kadaka/en/about-us/awards.php" class="rounded-[10px] bg-[#F1AE93] h-[39px] flex items-center text-left text-white text-[16px] pl-2">
              Awards
            </a>
          </div>
          <div class="pl-[30px] pr-[30px] pt-[10px] w-[100%]">
            <a href="/bumi-kadaka/en/about-us/structure-organization.php" class="rounded-[10px] bg-[#F1AE93] h-[39px] flex items-center text-left text-white text-[16px] pl-2">
              Structure Organization
            </a>
          </div>
        </div>
      </nav>
    </div>

    <div class="pl-[30px] pr-[30px] pt-[15px] w-[100%]">
      <nav class="lg:hidden" x-data="{ open: false }">
        <div @click="open = true" class="rounded-[10px] bg-[#F1AE93] h-[39px]">
          <nav class="flex items-center justify-between pl-[10px] pt-[6px] lg:px-8" aria-label="Global">
            <button class="lg:hidden text-[#EFAE93] hover:text-[#307060] rounded-md transition duration-150 ease-in-out mr-1" aria-label="Main menu" aria-expanded="false">
              <a href="#" class="text-white mt-[5px] text-[16px]">Our Brands</a>
            </button>
          </nav>
        </div>

        <div x-cloak x-show="open"
          @click.away="open = false"
          x-transition:enter="transition ease-out duration-200 transform"
          x-transition:enter-start="opacity-0 -translate-y-2"
          x-transition:enter-end="opacity-100 translate-y-0"
          x-transition:leave="transition ease-out duration-200"
          x-transition:leave-start="opacity-100"
          x-transition:leave-end="opacity-0"
          x-cloak
          @focusout="await $nextTick();!$el.contains($focus.focused()) && (open = false)">

          <div class="pl-[30px] pr-[30px] pt-[10px] w-[100%]">
            <a href="/bumi-kadaka/en/our-brands/hotels.php" class="rounded-[10px] bg-[#F1AE93] h-[39px] flex items-center text-left text-white text-[16px] pl-2">
              Hotels
            </a>
          </div>
          <div class="pl-[30px] pr-[30px] pt-[10px] w-[100%]">
            <a href="/bumi-kadaka/en/our-brands/restaurants.php" class="rounded-[10px] bg-[#F1AE93] h-[39px] flex items-center text-left text-white text-[16px] pl-2">
              Restaurant
            </a>
          </div>
        </div>
      </nav>
    </div>


    <div class="pl-[30px] pr-[30px] pt-[10px] w-[100%]">
      <a href="/bumi-kadaka/index.php">
        <div class="rounded-[10px] bg-[#F1AE93] h-[39px] flex items-center pl-2">
          <p class="text-white text-[16px]">
            Investor
          </p>
        </div>
      </a>
    </div>
    <div class="pl-[30px] pr-[30px] pt-[10px] w-[100%]">
      <a href="/bumi-kadaka/en/contact-us.php">
        <div class="rounded-[10px] bg-[#F1AE93] h-[39px] flex items-center pl-2">
          <p class="text-white text-[16px]">
            Contact
          </p>
        </div>
      </a>
    </div>

    <div class="pl-[30px] pr-[30px] pt-[10px] w-[100%]">
      <div class="rounded-[10px] bg-[#307060] h-[7px]">
        <div class="mt-[5px] pl-[10px] pt-[6px] text-left">
        </div>
      </div>
    </div>

    <div class="pl-[30px] pr-[30px] pt-[80px] w-[100%]">
      <a href="#">
        <div class="rounded-[10px] bg-[#F1AE93] h-[39px] flex items-center pl-2">
          <p class="text-white text-[16px]">
            Accesibilty
          </p>
        </div>
      </a>
    </div>
    <div class="pl-[30px] pr-[30px] pt-[10px] w-[100%]">
      <a href="#">
        <div class="rounded-[10px] bg-[#F1AE93] h-[39px] flex items-center pl-2">
          <p class="text-white text-[16px]">
            Legal
          </p>
        </div>
      </a>
    </div>
    <div class="pl-[30px] pr-[30px] pt-[10px] w-[100%]">
      <a href="#">
        <div class="rounded-[10px] bg-[#F1AE93] h-[39px] flex items-center pl-2">
          <p class="text-white text-[16px]">
            Privacy Statement
          </p>
        </div>
      </a>
    </div>

    <div class="pl-[30px] pr-[30px] pt-[10px] w-[100%] pb-[15px]">
      <label class="text-[#307060]">© PT. Bumi Kadaka 2024</label>
    </div>
  </div>
</nav>