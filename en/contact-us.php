<!doctype html>
<html>

<?php include 'header.php'?>

<body align="center" class="bg-repeat-y bg-[url('../../resources/img/bg/background.svg')] bg-center">

  <?php include 'nav.php'?>

  <style type="text/css">
    .border-form{
      border:1px solid black;
    }
  </style>

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
        <div class="bg-[url('../resources/img/contact-us/contact-us.png')] mt-[125px] w-[100%] h-[500px] object-contain">
        </div>
        <div class="w-[100%] text-left mt-[-90px] h-[90px] p-[25px]" style="--tw-bg-opacity: 0.8;background-color: rgb(241 174 147 / var(--tw-bg-opacity));">
            <span class="text-white text-[30px] font-bold">Contact Us</span>
        </div>

        <div class="flex m-[50px]">
          <div class="w-[50%]">
            <div class="p-[20px] ml-[150px] text-left">
              <div class="text-[36px] font-bold">
                <p>
                  Let's talk with us
                </p>
              </div>
              <br>
              <p>
                Questions, comments, or suggestions? Simply fill in the form and we’ll be in touch shortly.
              </p>
              <br>

              <div class="font-bold flex">
                <div class="w-[100px]">
                  <img src="/bumi-kadaka/resources/img/contact-us/location.png">
                </div>
                <div>
                  <p>
                    Jalan Raya Soreang-Ciwidey KM. 23, Desa Sukajadi Kecamatan Soreang, Kabupaten Bandung 40911
                  </p>
                </div>
              </div>

              <div class="font-bold flex mt-[20px]">
                <div class="w-[45px]">
                  <img src="/bumi-kadaka/resources/img/contact-us/phone.png">
                </div>
                <div>
                  <p>
                    (022) 30500333
                  </p>
                </div>
              </div>

              <div class="font-bold flex mt-[20px]">
                <div class="w-[45px]">
                  <img src="/bumi-kadaka/resources/img/contact-us/whatsapp.png">
                </div>
                <div>
                  <p>
                    +62 821-2727-6585 
                  </p>
                </div>
              </div>

              <div class="font-bold flex mt-[20px]">
                <div class="w-[45px]">
                  <img src="/bumi-kadaka/resources/img/contact-us/email.png">
                </div>
                <div>
                  <p>
                    reservation@foresthillshotelciwidey.com
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="w-[50%]">
            <div class="p-[40px]">
              <div class="rounded-[10px] color-[#FFFFFF] border-form">
                <form>
                  <div class="flex p-[30px]">
                    <input class="rounded-[10px] p-[10px] border-form w-[50%]" type="text" name="nama" placeholder="First Name">

                    <input class="rounded-[10px] p-[10px] ml-[20px] border-form w-[50%]" type="text" name="nama" placeholder="Last Name*">
                  </div>

                  <div class="pl-[30px] pr-[30px]">
                    <input class="rounded-[10px] p-[10px] border-form w-[100%]" type="text" name="email" placeholder="Email*">
                  </div>

                  <div class="pl-[30px] pr-[30px] mt-[30px]">
                    <input class="rounded-[10px] p-[10px] border-form w-[100%]" type="text" name="email" placeholder="Email*">
                  </div>

                  <div class="pl-[30px] pr-[30px] mt-[30px]">
                    <textarea class="rounded-[10px] p-[10px] border-form w-[100%]" rows="5">
                    </textarea>
                  </div>

                  <div class="pl-[30px] pr-[30px] mt-[30px] mb-[30px]">
                    <input type="button" value="Send Message" class="bg-[#307060] text-white w-[100%] p-[15px] rounded-[10px]">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="bg-[#307060]
                    xl:mt-[50px] xl:h-[1px] xl:w-[100%]
                    lg:mt-[50px] lg:h-[1px] lg:w-[100%]">
        </div>
    </div>
    <!-- END MAIN -->

    <?php include 'footer.php'?>

  </div>
</body>
</html>