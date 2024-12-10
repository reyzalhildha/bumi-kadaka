<!doctype html>
<html>
<?php include 'header.php'?>
<body align="center" class="bg-repeat-y bg-[url('./resources/img/bg/background.svg')] bg-center work-sans">

  <?php include 'nav.php'?>

  <div style="margin: auto;" 
       class="w-[1440px]
              lg:w-[1000px] lg:ml-[0px]
              xl:w-[1280px]
              min-[412px]:w-[412px]
              min-[390px]:w-[390px]
              min-[320px]:w-[320px]">
    
    <!-- SLIDER -->
      <div class="flex w-full flex-col 
                  lg:block 
                  xl:block 
                  min-[412px]:hidden 
                  min-[390px]:hidden
                  min-[320px]:hidden">
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
                  min-[390px]:block
                  min-[320px]:block">
        <div class="mt-[117px]">
          <img src="./resources/img/mobile/slide-mobile.png" 
               class="min-[412px]:w-[412px]
                      min-[390px]:w-[390px]
                      min-[320px]:w-[320px]">
                      
        </div>
        <div class="bg-[#F1AE93] h-[92px] text-justify
                    min-[412px]:w-[412px]
                    min-[390px]:w-[390px]
                    min-[320px]:w-[320px]">
          <div class="float-left ml-[10px] mt-[10px]">
            <span class="text-white text-[14px] font-bold">Sadesa Restaurant</span>
          </div>
          <div class="float-left ml-[10px] 
                      min-[412px]:w-[392px]
                      min-[390px]:w-[370px]
                      min-[320px]:w-[300px]">
            <p class="text-white text-[9px] 
                      min-[412px]:w-[392px]
                      min-[390px]:w-[370px]
                      min-[320px]:w-[300px]">Sadesa is a restaurant at Forest Hills Hotel Ciwidey. Located on the 2nd floor of the Hotel, you can enjoy breakfast, lunch, dinner or a romantic dinner with views of beautiful mountains, rice fields and flowing rivers.</p>
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
                  min-[390px]:hidden
                  min-[320px]:hidden">
        <div class="mt-[20px]">
          <span class="text-[24px] de-light">“ DELIGHT IN THE GLORIOUS OF NATURE COMFORTABLY ”</span>
        </div>
      </div>

      <!-- MOBILE -->
      <div class="flex w-full flex-col 
                  lg:hidden 
                  xl:hidden 
                  min-[412px]:block min-[412px]:ml-[10px] min-[412px]:w-[392px]
                  min-[390px]:block min-[390px]:ml-[10px] min-[390px]:w-[370px]
                  min-[320px]:block min-[320px]:ml-[10px] min-[320px]:w-[300px]">
        <div class="mt-[10px]">
          <span class="text-[11px] de-light">“ DELIGHT IN THE GLORIOUS OF NATURE COMFORTABLY ”</span>
        </div>
      </div>
      <!-- END MOBILE -->
    <!-- END DE LIGHT -->

    <!-- ABOUT US -->
    <div class="flex w-full flex-col 
                lg:block 
                xl:block 
                min-[412px]:hidden 
                min-[390px]:hidden
                min-[320px]:hidden">
      <div class="mt-[50px]">
        <div class="items-center">
          <div class="ml-[50px] flex">
            <img class="w-[735px] h-[571px] 
                        lg:w-[500px] lg:h-[auto]
                        xl:w-[650px] xl:h-[auto]" 
                        src="./resources/img/home/about-us-home.png" alt="">

            <div class="pl-[50px] mt-[60px] w-[40%] lg:mt-[0px;]">
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
              <a href="en/about-us/history.php">Read More . . .</a>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>

      <!-- MOBILE -->
      <div class="flex w-full flex-col 
                  lg:hidden xl:hidden 
                  min-[412px]:block
                  min-[390px]:block
                  min-[320px]:block">
        <div class="mt-[20px]">
          <img src="./resources/img/mobile/about-us-mobile.png" 
               class="min-[412px]:w-[412px]
                      min-[390px]:w-[390px]
                      min-[320px]:w-[320px]">
        </div>
        <div class="h-[92px] text-justify">
          <div class="float-left ml-[10px] mt-[15px] 
                      min-[412px]:w-[390px]
                      min-[390px]:w-[370px]
                      min-[320px]:w-[300px]">
            <span class="text-[16px] font-bold">About Us</span>
          </div>
          <div class="float-left ml-[10px] mt-[5px] 
                      min-[412px]:w-[390px]
                      min-[390px]:w-[370px]
                      min-[320px]:w-[300px]">
            <p class="text-[9px]">Sadesa is a restaurant at Forest Hills Hotel Ciwidey. Located on the 2nd floor of the Hotel, you can enjoy breakfast, lunch, dinner or a romantic dinner with views of beautiful mountains, rice fields and flowing rivers.</p>
          </div>
          <div class="float-left ml-[10px] 
                      min-[412px]:w-[390px]
                      min-[390px]:w-[370px]
                      min-[320px]:w-[300px]">
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
                min-[390px]:hidden
                min-[320px]:hidden">
        <div class="mt-[80px] h-[245px] bg-[url('./resources/img/bg/documentary.png')] 
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
                  min-[390px]:block
                  min-[320px]:block">
        <div class="mt-[40px] h-[160px] bg-[url('./resources/img/mobile/documentary-mobile.png')]">
          <div class="text-center font-medium non-italic w-auto">
            <br>
            <span class=" text-white font-[500] 
                          min-[412px]:text-[10px]
                          min-[390px]:text-[10px]
                          min-[320px]:text-[10px]">
                        Our approach harmonizes local uniqueness and natural </span>
          </div>
          <div>
            <span class=" text-white font-[500] 
                          min-[412px]:text-[10px]
                          min-[390px]:text-[10px]
                          min-[320px]:text-[10px]"> 
                        beauty with technology and sustainable practices. </span>
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
    <div class="flex w-full flex-col 
                lg:block 
                xl:block 
                min-[412px]:hidden 
                min-[390px]:hidden
                min-[320px]:hidden">
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
                  min-[390px]:block
                  min-[320px]:block">
        <div class="mt-[40px] h-[180px] bg-[url('./resources/img/mobile/moving-image-mobile.png')]"></div>
      </div>
      <!-- END MOBILE -->
    <!-- END MOVING IMAGE -->

    <!-- PARTNER -->
    <div class="flex w-full flex-col 
                lg:block 
                xl:block 
                min-[412px]:hidden 
                min-[390px]:hidden
                min-[320px]:hidden">
      <div class="mt-[0px]">
        <!-- <div class="w-[100%] mt-[750px]">
          <span class="font-bold text-[40px]">Our Partner</span>
        </div> -->
        <div class="mt-[0px]">
          <div class="flex w-full flex-col">
            <div class="mt-[0px]">
              <!-- <div id="default-carousel" class="relative w-full" data-carousel="slide">
                  <div class="relative h-[100px] overflow-hidden rounded-lg">
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="./resources/img/partner/slider-partner-1.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="./resources/img/partner/slider-partner-2.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                  </div>
              </div> -->
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
                  min-[390px]:block
                  min-[320px]:block">
        <!-- <div class="w-[100%] mt-[20px]">
          <span class="font-bold text-[18px]">Our Partner</span>
        </div> -->
        <!-- <div id="default-carousel" class="relative w-full" data-carousel="slide">
          <div class="relative h-[50px] overflow-hidden rounded-lg">
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="./resources/img/partner/slider-partner-1.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="./resources/img/partner/slider-partner-2.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
          </div>
        </div> -->
      </div>
      <!-- END MOBILE -->
    <!-- END PARTNER -->
    
    <!-- ANNUAL REPORT -->
    <div class="flex w-full flex-col 
                lg:block 
                xl:block 
                min-[412px]:hidden 
                min-[390px]:hidden
                min-[320px]:hidden">
      <div class="mt-[80px]">
        <div class="flex items-center">
          <div class="pl-[50px] mt-[60px] w-[40%] 
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
          <div class="ml-[50px;] lg:ml-[75px]">
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
                  min-[390px]:block
                  min-[320px]:block">
        <div class="mt-[20px]">
          <img src="./resources/img/mobile/annual-report-mobile.png" 
               class="min-[412px]:w-[412px]
                      min-[390px]:w-[390px]
                      min-[320px]:w-[320px]">
        </div>
        <div class="h-[92px] text-justify">
          <div class="float-left ml-[10px] mt-[15px] 
                      min-[412px]:w-[390px]
                      min-[390px]:w-[370px]
                      min-[320px]:w-[300px]">
            <span class="text-[16px] font-bold">Annual Report</span>
          </div>
          <div class="float-left ml-[10px] mt-[5px] 
                      min-[412px]:w-[390px]
                      min-[390px]:w-[370px]
                      min-[320px]:w-[300px]">
            <p class="text-[9px]">Our purpose  is to provide True Hospitality for Good. It brings our brands to life, shapes our culture and represents a commitment to make a difference to our people, guests and communities, and to protect the world around us. With strong stakeholder engagement, together we work towards common goals that help create shared value for all.</p>
          </div>
          <div class="float-left ml-[10px] 
                      min-[412px]:w-[390px]
                      min-[390px]:w-[370px]
                      min-[320px]:w-[300px]">
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
                min-[390px]:hidden
                min-[320px]:hidden">
      <div class="lg:mt-[50px]
                  xl:mt-[50px]">
        <div class="mt-[90px] bg-[#EFAE93] 
                    lg:w-[100%] 
                    xl:w-[100%]">
          <div class="m-[50px] h-[470px]">
            
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
                    <img src="./resources/img/home/feature-1.png" alt="" class="h-[166px] w-[392px]">

                    <div class="mt-[20px] text-white text-[28px] font-[700]
                              lg:text-[12px]">
                      Bumi Kadaka at Demo Day KreatIPO 2024
                    </div>
                    <div class="mt-[20px] text-white text-[17px] font-normal text-justify
                              lg:text-[12px] lg:mt-[10px]">
                      Bumi Kadaka had the honor of participating in the Bursa Efek Indonesia Pitching Day, an event aimed at showcasing promising companies to potential investors and stakeholders. This event ...
                    </div>
                  </div>
                </div>
              </div>

              <div class="float-left">
                <a href="en/article/the-loungue.php">
                    <div class="w-[100%] text-left mt-[40px] ml-[76px]">
                      <div class="w-[396px] h-[298px] 
                                  lg:w-[249px] 
                                  xl:w-[342px]">
                        <img src="./resources/img/home/feature-2.png" alt="" class="h-[166px] w-[392px]">
    
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
                  </a>
              </div>

              <div class="float-left">
                <div class="w-[100%] text-left mt-[40px] ml-[76px]">
                  <div class="w-[396px] h-[298px] 
                              lg:w-[249px] 
                              xl:w-[342px]">
                    <img src="./resources/img/home/feature-3.png" alt="" class="h-[166px] w-[392px]">

                    <div class="mt-[20px] text-white text-[28px] font-[700]
                              lg:text-[12px]">
                      Playground
                    </div>
                    <div class="mt-[20px] text-white text-[17px] font-normal text-justify
                              lg:text-[12px] lg:mt-[10px]">
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
                  min-[390px]:block min-[390px]:mt-[50px]
                  min-[320px]:block min-[320px]:mt-[80px]">
        <div class="bg-[#EFAE93] h-[230px]">
          <span class="float-left mt-[10px] ml-[10px] text-white">Featured</span>

          <div class="float-left overflow-y-auto ml-[10px] h-[180px]
                      min-[412px]:w-[390px]
                      min-[390px]:w-[370px]
                      min-[320px]:w-[300px]">
            <div class="w-[126%] text-left mt-[20px]">
              <div class="w-[140px] h-[90px]">
                <img src="./resources/img/home/feature-1.png" alt="" class="w-[140px] h-[95px]">

                <div class="mt-[10px] text-white text-[12px] font-bold">
                  Bumi Kadaka at Demo Day KreatIPO 2024
                </div>
                <div class="text-white text-[9px] font-normal text-justify
                          lg:text-[14px] lg:mt-[10px]"><br>
                  Bumi Kadaka had the honor of participating in the Bursa Efek Indonesia Pitching Day, an event aimed at event aimed at showcasing promising ...
                </div>
              </div>

              <div class="w-[140px] h-[90px] ml-[170px] mt-[-90px]">
                <img src="./resources/img/home/feature-2.png" alt="" class="w-[140px] h-[95px]">

                <div class="mt-[10px] text-white text-[12px] font-bold">
                  The Lounge
                </div><br>
                <div class="text-white text-[9px] font-normal text-justify mt-[7px]">
                  Savour indonesian and western cuisine at our all day dining restaurant. Located on 1st Floor Forest Hills Hotel Ciwidey, surrounded by lush
                </div>
              </div>

              <div class="w-[140px] h-[90px] ml-[340px] mt-[-90px]">
                <img src="./resources/img/home/feature-3.png" alt="" class="w-[140px] h-[95px]">

                <div class="mt-[10px] text-white text-[12px] font-bold">
                  Playgorund
                </div><br>
                <div class="text-white text-[9px] font-normal text-justify mt-[7px]">
                  Have a good time! in an outdoor playground with beautiful views. Our outdoor playground is equipped with slides, trampolines, climbing
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <!-- END MOBILE -->
    <!-- END FEATURED -->

    <?php include 'footer.php'?>

  </div>
</body>
</html>