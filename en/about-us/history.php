<!doctype html>
<html>
<head>
  <title>PT. Bumi Kadaka</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="/bumi-kadaka/resources/img/ico/ico-bumi-kadaka.png" sizes="32x32">
  <link rel="stylesheet" href="./resources/css/main.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://flowbite.com/docs/flowbite.min.js"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <script src="./resources/js/function.js"></script>
</head>
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
        <div>
          <img class="w-[100%] h-[auto]" src="/bumi-kadaka/resources/img/about-us/main-about-us.png" alt="">
        </div>
        <div class="bg-[#F1AE93] w-[263px] h-[78px]">
          <div class="pt-[15px] mt-[-78px]">
            <span class="text-white text-[30px] font-bold">About US</span>
          </div>
        </div>

        <div class="m-[50px]">
          <div class="text-left">
            <span class="font-bold text-[40px]">History</span>
          </div>

          <div class="flex">
          </div>
        </div>

    </div>
    <!-- END MAIN -->

    <?php include '../footer.php'?>

  </div>
</body>
</html>