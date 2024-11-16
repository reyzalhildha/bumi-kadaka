<!doctype html>
<html>

<?php include '../header.php'?>

<body align="center" class="bg-repeat-y bg-[url('../../resources/img/bg/background.svg')] bg-center">

  <?php include '../nav.php'?>

  <div style="margin: auto;" 
       class="w-[1440px]
              lg:w-[1000px] lg:ml-[0px]
              xl:w-[1280px]
              min-[412px]:w-[412px]
              min-[390px]:w-[390px]
              min-[320px]:w-[320px]">
    
    <!-- MAIN -->
    <div class="flex w-full flex-col 
                  lg:block mt-[120px]
                  xl:block 
                  min-[412px]:hidden 
                  min-[390px]:hidden
                  min-[320px]:hidden">
        <div class="bg-[url('../../resources/img/about-us/main-about-us.png')] mt-[125px] w-[100%] h-[550px]">
        </div>
        <div class="bg-[#F1AE93] w-[263px] mt-[-45px]">
            <span class="text-white text-[30px] font-bold">About US</span>
        </div>

        <div class="m-[50px]">
          <div class="text-left">
            <span class="font-bold text-[40px]">Awards</span>
          </div>

          <div class="xl:mt-[50px]
                      lg:mt-[50px]">
            <div class="w-[100%] text-justify">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
          </div>

          <div class="bg-[#307060]
                      xl:mt-[50px] xl:h-[27px] xl:w-[100%]
                      lg:mt-[50px] lg:h-[27px] lg:w-[100%]">
          </div>

          <div class="flex
                      xl:mt-[50px]
                      lg:mt-[50px]">
              <div class="text-left
                          xl:w-[45%] xl:mr-[50px] 
                          lg:w-[45%] lg:mr-[50px]">
                <span class="font-bold text-[40px]">Tripadivisor</span>

                <div class="text-justify">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>
                </div>
              </div>

              <div class="xl:w-[50%]
                          lg:w-[50%]">
                <img src="/bumi-kadaka/resources/img/about-us/tripadivisor.png" 
                        class="xl:w-[100%]
                               lg:w-[100%]"
                        style="border: 10px solid #307060;">
              </div>
          </div>
          
          <div class="bg-[#307060]
                      xl:mt-[50px] xl:h-[27px] xl:w-[100%]
                      lg:mt-[50px] lg:h-[27px] lg:w-[100%]">
          </div>

    </div>
    <!-- END MAIN -->

    <?php include '../footer.php'?>

  </div>
</body>
</html>