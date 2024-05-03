{{-- @props(['title']) --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stage</title>
    <link rel="icon" type="image/x-icon" href="{{asset('imgs/logoPng.png')}}">
    <!--====== CSS fills ======-->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="https://cdn.ayroui.com/1.0/css/bootstrap.min.css"/>
    <!--====== Lineicons CSS ======-->
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet" />
    <!--====== Style css ======-->
    <link rel="stylesheet" href="https://cdn.ayroui.com/1.0/css/starter.css" />

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    <!--====== NAVBAR ONE PART START ======-->
    <section class="navbar-area navbar-one">
        <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="javascript:void(0)">
                    <img src="{{asset('imgs/logo.png')}}" alt="Logo" width="50%" />
                    </a>
                    <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarOne"
                    aria-controls="navbarOne"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                    >
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse sub-menu-bar" id="navbarOne">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a class="active" href="{{route('home')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a
                                class="page-scroll"
                                data-bs-toggle="collapse"
                                data-bs-target="#sub-nav1"
                                aria-controls="sub-nav1"
                                aria-expanded="false"
                                aria-label="Toggle navigation"
                                href="javascript:void(0)"
                                >
                                About us
                                <div class="sub-nav-toggler">
                                <span><i class="lni lni-chevron-down"></i></span>
                                </div>
                            </a>
                            <ul class="sub-menu collapse" id="sub-nav1">
                                <li><a href="{{route('1_aboutLink')}}">Our Expertise</a></li>
                                <li><a href="{{route('2_aboutLink')}}">Values & philosophy</a></li>
                                <li><a href="{{route('3_aboutLink')}}">Our Assets</a></li>
                                <li><a href="{{route('4_aboutLink')}}">Technical means</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('portfolio')}}">Protfolio</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('contact')}}">Contact</a>
                        </li>
                    </ul>
                    </div>
                </nav>
                <!-- navbar -->
            </div>
        </div>
        <!-- row -->
        </div>
        <!-- container -->
    </section>
    <!--====== NAVBAR ONE PART ENDS ======-->
    <div class="app">
        {{$slot}}
    </div>
    <x-clientReferences/>
    <x-map/>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"style='margin-bottom:-2px;'>
        <path fill="#009ee0" fill-opacity="1" d="M0,64L48,101.3C96,139,192,213,288,224C384,235,480,181,576,144C672,107,768,85,864,74.7C960,64,1056,64,1152,53.3C1248,43,1344,21,1392,10.7L1440,0L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
    <!--====== FOOTER ONE PART START ======-->
    <footer class="footer-area footer-one">
        <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-4 col-sm-12">
                    <div class="f-about">
                    <div class="footer-logo">
                        <a href="javascript:void(0)">
                        <img src="{{asset('imgs/logo.png')}}" alt="Logo" />
                        </a>
                    </div>
                    <p class="text">
                        Concept PLV specializes in all kinds of multi-material point 
                        of sale advertising and equipment tools design and manufacture.
                    </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-12">
                    <div class="footer-link">
                    <h6 class="footer-title">Company</h6>
                    <ul>
                        <li><a href="javascript:void(0)">Home</a></li>
                        <li><a href="javascript:void(0)">About us</a></li>
                        <li><a href="javascript:void(0)">Portfolio</a></li>
                        <li><a href="javascript:void(0)">Contact</a></li>
                    </ul>
                    </div>
                    <!-- footer link -->
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-12">
                    <!-- Start Footer Contact -->
                    <div class="footer-contact">
                    <h6 class="footer-title">Help & Suuport</h6>
                    <ul>
                        <li>
                            <i class="lni lni-map-marker"></i> 
                            Zone Industrielle de Had Soualem, Casablanca, Morocco
                        </li>
                        <li><i class="lni lni-phone-set"></i> (+212) 522 29 04 63</li>
                        <li><i class="lni lni-phone-set"></i> (+212) 522 29 05 63</li>
                        <li><i class="lni lni-envelope"></i> scontact@conceptplv.com</li>
                    </ul>
                    </div>
                    <!-- End Footer Contact -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
        </div>
        <!-- footer widget -->
        <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div
                    class="
                    copyright
                    text-center
                    d-md-flex
                    justify-content-between
                    align-items-center
                    "
                    >
                    <p class="text">Copyright © 2024 Concept-PLV. All Rights Reserved</p>
                    <ul class="social">
                        <li>
                            <a href="https://www.facebook.com/conceptplv" target="_blank">
                            <i class="lni lni-facebook-filled"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/conceptplv" target="_blank">
                            <i class="lni lni-instagram-filled"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/company/concept-plv-maroc/" target="_blank"
                                ><i class="lni lni-linkedin-original"></i
                                ></a>
                        </li>
                    </ul>
                    </div>
                    <!-- copyright -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
        </div>
        <!-- footer copyright -->
    </footer>
    <!--====== FOOTER ONE PART ENDS ======-->
     <!--====== Bootstrap js ======-->
    <script src="https://cdn.ayroui.com/1.0/js/bootstrap.bundle.min.js"></script>
    <script>
        //===== close navbar-collapse when a  clicked
        let navbarTogglerOne = document.querySelector(
          ".navbar-one .navbar-toggler"
        );
        navbarTogglerOne.addEventListener("click", function () {
          navbarTogglerOne.classList.toggle("active");
        });
     </script>
</body>
</html>