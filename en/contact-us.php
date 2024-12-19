<!doctype html>
<html>

<?php include 'header.php' ?>

<body align="center" class="bg-repeat-y bg-[url('https://bumikadaka.com/resources/img/bg/background.svg')] bg-center">

  <?php include 'nav.php' ?>

  <style type="text/css">
    .border-form {
      border: 1px solid black;
    }
  </style>

  <div class="container-kadaka">
    <div class="content-kadaka">

      <!-- MAIN -->
      <div class="flex w-full flex-col">
        <div class="bg-[url('https://bumikadaka.com/resources/img/contact-us/contact-us.png')] bg-cover bg-no-repeat w-[100%] h-[550px]">
        </div>
        <div class="w-[100%] text-left mt-[-90px] h-[90px] p-[25px]" style="--tw-bg-opacity: 0.8;background-color: rgb(241 174 147 / var(--tw-bg-opacity));">
          <span class="text-white text-[30px] font-bold">Contact Us</span>
        </div>

        <div class="grid md:flex mx-0 my-[50px] sm:m-[50px]">
          <div class="w-full">
            <div class="p-[20px] text-left">
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

              <div class="grid font-bold" style="grid-template-columns: 45px 1fr">
                <div class="w-[100px]">
                  <img src="https://bumikadaka.com/resources/img/contact-us/location.png">
                </div>
                <div>
                  <p>
                    Jalan Raya Soreang-Ciwidey KM. 23, Desa Sukajadi Kecamatan Soreang, Kabupaten Bandung 40911
                  </p>
                </div>
              </div>

              <div class="grid font-bold mt-[20px]" style="grid-template-columns: 45px 1fr">
                <div class="w-[45px]">
                  <img src="https://bumikadaka.com/resources/img/contact-us/phone.png">
                </div>
                <div>
                  <p>
                    (022) 30509995
                  </p>
                </div>
              </div>

              <!-- <div class="grid font-bold mt-[20px]" style="grid-template-columns: 45px 1fr">
                <div class="w-[45px]">
                  <img src="https://bumikadaka.com/resources/img/contact-us/whatsapp.png">
                </div>
                <div>
                  <p>
                    +62 821-2727-6585
                  </p>
                </div>
              </div> -->

              <div class="grid font-bold mt-[20px]" style="grid-template-columns: 45px 1fr">
                <div class="w-[45px]">
                  <img src="https://bumikadaka.com/resources/img/contact-us/email.png">
                </div>
                <div>
                  <p>
                    contact@ptbumikadaka.com
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="w-full">
            <div class="p-[40px]">
              <div class="rounded-[10px] color-[#FFFFFF] border-form">
                <form id="emailForm" onsubmit="event.preventDefault(); sendEmail();">
                  <div class="flex p-[30px]">
                    <input class="rounded-[10px] p-[10px] border-form w-[50%]" type="text" name="firstName" placeholder="First Name" required>

                    <input class="rounded-[10px] p-[10px] ml-[20px] border-form w-[50%]" type="text" name="lastName" placeholder="Last Name" required>
                  </div>

                  <div class="pl-[30px] pr-[30px]">
                    <input class="rounded-[10px] p-[10px] border-form w-[100%]" type="text" name="subject" placeholder="Subject" required>
                  </div>

                  <div class="pl-[30px] pr-[30px] mt-[30px]">
                    <input class="rounded-[10px] p-[10px] border-form w-[100%]" type="text" name="email" placeholder="Email" required>
                  </div>

                  <div class="pl-[30px] pr-[30px] mt-[30px]">
                    <textarea class="rounded-[10px] p-[10px] border-form w-[100%]" id="message" name="message" rows="5" placeholder="Message" required></textarea>
                  </div>

                  <div class="pl-[30px] pr-[30px] mt-[30px] mb-[30px]">
                    <input type="submit" value="Send Message" class="bg-[#307060] text-white w-[100%] p-[15px] rounded-[10px] hover:cursor-pointer">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="bg-[#307060] mt-[50px] h-[1px] w-full">
        </div>
      </div>
      <!-- END MAIN -->

      <?php include 'footer.php' ?>

    </div>
  </div>
</body>

</html>