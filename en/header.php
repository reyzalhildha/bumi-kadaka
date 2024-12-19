<head>
  <title>PT. Bumi Kadaka</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="https://bumikadaka.com/resources/img/ico/ico-bumi-kadaka.png" sizes="32x32">
  <link rel="stylesheet" href="https://bumikadaka.com/resources/css/main.css">
  <link rel="stylesheet" href="https://bumikadaka.com/resources/css/responsive.css">
  <link rel="stylesheet" href="https://bumikadaka.com/resources/css/font-style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://flowbite.com/docs/flowbite.min.js"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <script src="https://bumikadaka.com/resources/js/function.js"></script>
  <script>
        function sendEmail() {
            // Ambil data dari form
            const form = document.getElementById("emailForm");
            const formData = new FormData(form);

            // Ambil nilai input
            const firstName = formData.get("firstName");
            const lastName = formData.get("lastName");
            const subject = formData.get("subject");
            const email = formData.get("email");
            const message = formData.get("message");

            // Format mailto link
            const mailtoLink = `mailto:${email}?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(
                `First Name: ${firstName}\n` +
                `Last Name: ${lastName}\n` +
                `Message: ${message}`
            )}`;

            // Buka mailto link
            window.location.href = mailtoLink;
        }
    </script>
</head>