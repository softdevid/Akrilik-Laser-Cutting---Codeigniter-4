<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?> | Mekar Laser Cutting Digital</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/fontawesome/css/all.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
    <?= $this->include('layouts/navbar'); ?>
    <?= $this->renderSection('content'); ?>

    <footer class="bd-footer py-4 py-md-5 mt-5 bg-light">
        <div class="container py-4 py-md-5 px-4 px-md-3">
            <div class="row">
                <div class="col-lg-3 mb-3 text-dark">
                    <h5>Mekar Laser <span class="badge bg-dark text-white">Cutting Digital</span></h5>
                    <p>Dunia terus bergerak, Kami percaya bahwa perubahan dalam bisnis adalah satu hal yang niscaya. Mekar Laser hadir untuk menjadi Solusi.</p>
                </div>
                <div class="col-6 col-lg-3 mb-3 text-">
                    <hr class="line1">
                    <h5>LATEST ARTICLE</h5>
                    <ul class="list-unstyled style-a">
                        <li class="mb-2 mt-5">
                            <a href="#" class="nav-link">
                                <h5>Pembuatan Website</h5>
                            </a>
                        </li>
                        <hr>
                        <li class="mb-2">
                            <a href="#" class="nav-link">
                                <h5>Pembuatan Neon Box</h5>
                            </a>
                        </li>
                        <hr>
                        <li class="mb-2">
                            <a href="#" class="nav-link">
                                <h5>Pembuatan Huruf Timbul</h5>
                            </a>
                        </li>
                        </li>
                    </ul>
                </div>
                <div class="col-6 col-lg-3 mb-3 text-dark">
                    <hr class="line1">
                    <h5>USEFUL LINKS</h5>
                    <ul class="list-unstyled style-a">
                        <li class="mb-2"><a href="/portofolio" class="nav-link"> Portofolio</a></li>
                        <li class="mb-2"><a href="/team" class="nav-link">About Us</a></li>
                        <li class="mb-2"><a href="/carrer" class="nav-link">Carrer</a></li>
                        <li class="mb-2"><a href="/workphase" class="nav-link">How to Order</a></li>
                        <li class="mb-2"><a href="/faq" class="nav-link">FAQ's</a></li>
                        <li class="mb-2"><a href="/privacy-policy" class="nav-link">Privacy Policy</a></li>
                        <li class="mb-2"><a href="/terms-condition" class="nav-link">Terms Condition</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-3 mb-3 text-dark">
                    <hr class="line1">
                    <h5>Partner</h5>
                    <ul class="list-unstyled style-a">
                        <li class="mb-2"><a href="#" class="nav-link">Bima Helm</a></li>
                        <li class="mb-2"><a href="#" class="nav-link">FCS PROJECT</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <footer class="m-3 text-center">
        <strong>Copyright &copy 2022 : FCS PROJECT</strong>
    </footer>

    <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>
    <a class="whatsapp" href="https://wa.me/628888901970" target="_blank" title="Whatsapp"><i class="fa-brands fa-whatsapp"></i></a>
    <button onclick="topFunction()" class="back-to-top" id="myBtn" title="Go to top"><i class="fa fa-arrow-up"></i></button>

    <!-- scroll top button -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

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
    <script src="/javascript/animation.js"></script>
    <script>
        AOS.init({
            once: false
        });
    </script>
</body>

</html>