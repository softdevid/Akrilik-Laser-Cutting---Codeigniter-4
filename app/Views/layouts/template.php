<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?> | Mekar Laser Cutting Digital</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/fontawesome/css/all.css">
</head>

<body>
    <?= $this->include('layouts/navbar'); ?>
    <?= $this->renderSection('content'); ?>
    <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>


    <a class="whatsapp" href="https://wa.me/628888901970" target="_blank" title="Whatsapp"><i
            class="fa-brands fa-whatsapp"></i></a>
    <button onclick="topFunction()" class="back-to-top" id="myBtn" title="Go to top"><i
            class="fa fa-arrow-up"></i></button>

    <!-- scroll top button -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>

    <script>
    //Get the button:
    mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }
    </script>
    <script src="/javascript/portfolio.js"></script>
</body>

</html>