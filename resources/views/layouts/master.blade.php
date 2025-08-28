<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    {{-- Dynamic Page Title --}}
    <title>@yield('title', 'Mokshtubes')</title>

    {{-- Dynamic Meta Description --}}
    <meta name="description" content="@yield('meta_description', 'Mokshtubes')">

    {{-- Dynamic Meta Keywords --}}
    <meta name="keywords" content="@yield('meta_keywords', 'mokshtubes')">

    {{-- Canonical Tag --}}
    <link rel="canonical" href="@yield('canonical', url()->current())">

    {{-- <meta name="title" content="@yield('meta_title')">
    <meta name="description" content="@yield('meta_description')">
    <meta name="keyword" content="@yield('meta_keyword')"> --}}
    {{-- <link rel="canonical" href="@yield('canonical')">
    <title>@yield('title')</title> --}}

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-95HT8CTVJC"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-95HT8CTVJC');
    </script>


    {{--
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon/logo-moksh-32x32.png') }}"
        sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon/logo-moksh-16x16.png') }}"
        sizes="16x16">

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/html5shiv.js"></script>
    <![endif]-->


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css
">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">


    @yield('extracss')

    <!-- Font Awesome 6 CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <!-- master stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    <style>
        .nav-link:focus-visible {
            box-shadow: none !important;
        }
    </style>


</head>

<body>
    <div class="">
        <!--Start Preloader -->

        <!--End Preloader -->

        <!--Start Top bar area -->
        <section class="top-bar-area">
            <div class="container">
                <div class="clearfix d-none d-sm-block">
                    <div class="float-start">
                        <p>Welcome to Moksh Tubes & Fittings LLP</p>
                    </div>
                    <div class="float-end">
                        <p><i class="fa fa-clock-o"></i>Monday - friday : 8:00 AM to 7:00 Pm</p>
                    </div>
                </div>
                <div class="d-block d-sm-none d-flex justify-content-between align-items-center text-white">
                    <p>
                        <i class="fa-solid fa-phone-volume"></i>
                        <a href="tel:9769584950" class="text-white">+91 97695 84950</a>
                    </p>
                    <p>
                        <i class="fa-solid fa-envelope"></i>
                        <a href="mailto:info@mokshtubes.com" class="text-white">info@mokshtubes.com</a>
                    </p>
                </div>

            </div>
        </section>
        <!--End Top bar area -->

        <!--Start header area-->
        <header class="header-area">
            <div class="logo">
                <a href="{{ route('home') }}">
                    <!-- <img src="images/logo/logo moksh1-1.png" alt="Awesome Logo"> -->
                    <img src="{{ asset('assets/images/logo/Board-1.png') }}" alt="Moksh Tubes Logo">
                </a>
            </div>
            <div class="header-contact-info d-none d-md-block">
                <ul>
                    <li>
                        <div class="iocn-holder">
                            <span class="icon-technology-1"></span>
                        </div>
                        <div class="text-holder">
                            <h6>Call Us On</h6>
                            <a href="tel:9769584950">
                                <p>+91 97695 84950</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="iocn-holder">
                            <span class="icon-letter-1"></span>
                        </div>
                        <div class="text-holder">
                            <h6>Mail Us @</h6>
                            <a href="mailto:info@mokshtubes.com">
                                <p>info@mokshtubes.com</p>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="d-none d-sm-block d-md-none small-header-contact-info">
                <p>
                    <i class="fa-solid fa-phone-volume"></i>
                    <a href="tel:9769584950">+91 97695 84950</a>
                </p>
                <p>
                    <i class="fa-solid fa-envelope"></i>
                    <a href="mailto:info@mokshtubes.com">info@mokshtubes.com</a>
                </p>
            </div>
            {{-- <a href="tel:9769584950">
                <p>+91 97695 84950</p>
            </a>
            <a href="mailto:info@mokshtubes.com">
                <p>info@mokshtubes.com</p>
            </a> --}}
            <!-- <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="logo">
                        <a href="index.html">
                            <img src="images/logo/logo moksh1-1.png" alt="Awesome Logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="header-contact-info">
                        <ul>
                            <li>
                                <div class="iocn-holder">
                                    <span class="icon-technology-1"></span>
                                </div>
                                <div class="text-holder">
                                    <h6>Call Us On</h6>
                                    <a href="tel:9769584950">
                                        <p>+91 97695 84950</p>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="iocn-holder">
                                    <span class="icon-letter-1"></span>
                                </div>
                                <div class="text-holder">
                                    <h6>Mail Us @</h6>
                                    <a href="mailto:info@mokshtubes.com">
                                        <p>info@mokshtubes.com</p>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> -->
            <!-- <div class="container-fluid ">
                <div class="row">
                    <div class="col-lg-4 col-md-3 col-sm-12 col-xs-12">
                        <div class="logo">
                            <a href="index.html">
                                <img src="images/logo/logo moksh1-1.png" alt="Awesome Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-9 col-sm-12 col-xs-12">
                        <div class="header-contact-info">
                            <ul>
                                <li>
                                    <div class="iocn-holder">
                                        <span class="fa fa-home"></span>
                                    </div>
                                    <div class="text-holder">

                                        <h6>321, Breaking Street</h6>
                                        <p>Newyork ,USA 10002</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="iocn-holder">
                                        <span class="icon-technology-1"></span>
                                    </div>
                                    <div class="text-holder">
                                        <h6>Call Us On</h6>
                                        <p>1-8000-978-6543</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="iocn-holder">
                                        <span class="icon-letter-1"></span>
                                    </div>
                                    <div class="text-holder">
                                        <h6>Mail Us @</h6>
                                        <a href="#">
                                            <p>Supportuss@gmail.com</p>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> -->
        </header>
        <!--End header area-->

        <!--Start mainmenu area-->
        <section class="mainmenu-area stricky mainmenu-area-headers">
            <div class="container-xl">
                <div class="mainmenu-bg">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">

                            <nav class="main-menu navbar navbar-expand-lg">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggler ms-3 rounded-0 border-0"
                                        data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                </div>
                                <div class="collapse navbar-collapse clearfix">
                                    <ul class="navigation navbar-nav me-auto mb-2 mb-lg-0 clearfix">
                                        <li class="nav-item"><a class="nav-link" href="{{ route('index') }}">Home</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="{{ route('about-us') }}">About
                                                Us</a></li>
                                        {{-- <li class="nav-item dropdown"><a class="nav-link"
                                                href="{{ url('/products') }}" data-bs-toggle="dropdown">Products</a></li> --}}
                                        <li class="nav-item dropdown"><a class="nav-link"
                                                href="{{ route('products') }}">Products</a>
                                            <ul class="dropdown-menu"
                                                style="display: none; overflow-x: auto; padding-top: 12px; margin-top: 0px; padding-bottom: 12px; margin-bottom: 0px;">

                                                @php
                                                    $productCategories = [
                                                        'Pipes & Tubes',
                                                        // 'Sheets, Plates & Coils',
                                                        'Bars & Rods',
                                                        // 'Pipe Fittings, Flanges & Fasteners',
                                                        'Special Fabricated',
                                                    ];
                                                @endphp

                                                @foreach ($productCategories as $category)
                                                    @php
                                                        $slug = Str::slug($category); // Pipes & Tubes → pipes-tubes
                                                    @endphp
                                                    <li>
                                                        <a class="dropdown-item text-wrap"
                                                            href="{{ url('/products/' . $slug) }}">
                                                            {{ $category }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>


                                        <li class="nav-item dropdown">
                                            <a class="nav-link" href="{{ route('materials') }}">Materials</a>
                                            <ul class="dropdown-menu"
                                                style="display: none; overflow-x: auto; padding-top: 12px; margin-top: 0px; padding-bottom: 12px; margin-bottom: 0px;">

                                                @php
                                                    $materials = [
                                                        'Hastelloy',
                                                        'Monel',
                                                        'Inconel',
                                                        'Incoloy',
                                                        'Nickel Based Superalloys',
                                                        'Titanium',
                                                        // 'Duplex & Super Duplex',
                                                        'Austenitic Stainless Steel',
                                                        // 'High Strength Stainless Steel',
                                                        'Super Austenitic Stainless Steel',
                                                        'Zirconium',
                                                        'Engineering Steels',
                                                        'Aluminium Alloys',
                                                        'Copper Alloys',
                                                        'Hard To Find & Special Alloys',
                                                        'Haynes Superalloys',
                                                    ];
                                                @endphp

                                                @foreach ($materials as $material)
                                                    @php
                                                        $slug = Str::slug($material);
                                                    @endphp
                                                    <li>
                                                        <a class="dropdown-item text-wrap"
                                                            href="{{ url('/materials/' . $slug) }}">
                                                            {{ $material }}
                                                        </a>
                                                    </li>
                                                @endforeach

                                            </ul>
                                        </li>


                                        <li class="nav-item"><a class="nav-link" href="#">QUALITY</a></li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="{{ route('calculator') }}">CALCULATOR</a></li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="{{ route('blogs') }}">Blogs</a></li>
                                    </ul>
                                    <ul class="mobile-menu clearfix">
                                        <li><a href="{{ route('home') }}">Home</a></li>
                                        <li><a href="{{ route('about-us') }}">About Us</a></li>

                                        <li class="dropdown"><a href="{{ route('products') }}">Products</a>
                                            <ul>
                                                <li><a href="{{ route('products.pipes-tubes') }}">PIPES & TUBES</a></li>
                                                 {{-- <li><a href="#">SHEETS, PLATES & COILS</a></li> --}}
                                                <li><a href="#">BARS & RODS</a></li>
                                                {{--<li><a href="#">PIPE FITTINGS, FLANGES & FASTENERS</a></li> --}}
                                                <li><a href="{{ route('products.special-fabricated') }}">SPECIAL FABRICATED PRODUCTS</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="{{ route('materials') }}">Materials</a>
                                            <ul>
                                                <li><a href="{{ route('materials.hastelloy') }}">Hastelloy</a></li>
                                                <li><a href="{{ route('materials.monel') }}">Monel</a></li>
                                                <li><a href="{{ route('materials.incoloy') }}">Incoloy</a></li>
                                                <li><a href="{{ route('materials.nickel-Based-Superalloys') }}">Nickel Based Superalloys</a></li>
                                                <li><a href="{{ route('materials.inconel') }}">Inconel</a></li>
                                                <li><a href="{{ route('materials.titanium') }}">Titanium</a></li>
                                                <li><a href="{{ route('materials.aluminium-Alloys') }}">Aluminium Alloys</a></li>
                                                <li><a href="{{ route('materials.super-Austenitic-Stainless-Steel') }}">Super Austenitic Stainless Steel</a></li>
                                                <li><a href="{{ route('materials.hard-To-Find-Special-Alloys') }}">Hard To Find Special Alloys</a></li>
                                                <li><a href="{{ route('materials.engineering-Steels') }}">Engineering Steels</a></li>
                                                <li><a href="{{ route('materials.austenitic-stainless-Steel') }}">Austenitic Stainless Steel</a></li>
                                                <li><a href="{{ route('materials.copper-Alloys') }}">Copper Alloys</a></li>
                                                <li><a href="{{ route('materials.zirconium') }}">Zirconium</a></li>
                                                <li><a href="{{ route('materials.haynes-Superalloys') }}">Haynes Superalloys</a></li>
                                            </ul>
                                        {{-- <li><a href="{{ route('materials') }}">MATERIALS</a></li> --}}

                                        <li><a href="#">QUALITY</a></li>
                                        <li><a href="{{ route('calculator') }}">CALCULATOR</a></li>
                                        <li><a href="{{ route('blogs') }}">Blogs</a></li>

                                    </ul>
                                </div>
                            </nav>

                        </div>
                    </div>
                    <div class="right-column">
                        <div class="right-area">

                            <div class="link_btn float_right">
                                <a href="{{ route('contact-us') }}" class="thm-btn bg-clr1">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--End mainmenu area-->


        @yield('content')

        <!--Start footer area-->
        <footer>
            <div class="footer-main sec-padd2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-col">
                                <div class="logo-part">
                                    <a href="{{ route('home') }}" class="footer-logo text-uppercase">
                                        <!-- <img src="./images/logo/logo moksh1-1.png" alt="logo"> -->
                                        <img src="{{ asset('assets/images/logo/Board-1.png') }}" alt="Awesome Logo">
                                    </a>
                                </div>
                                <p class="footer-words">Over 24 years experience and of the international user
                                    standards
                                    and technological works changes and industrial systems, we dedicated to provide the
                                    best and economical. </p>
                                <ul class="list-inline footer-social mb-0">
                                    <li class="list-inline-item">
                                        <a href="https://www.facebook.com/mokshtubes/" target="_blank"
                                            rel="noopener">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://www.instagram.com/mokshtubesandfittingsllp?igsh=YjN6d3B4MzlnNDc1&utm_source=qr"
                                            target="_blank" rel="noopener">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://www.linkedin.com/company/moksh-tubes/?viewAsMember=true"
                                            target="_blank" rel="noopener">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://x.com/Moksh_Tubes" target="_blank" rel="noopener">
                                            <i class="fab fa-x-twitter"></i>
                                        </a>
                                    </li>
                                </ul>


                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
                            <div class="footer-col service-col">
                                <h3 class="footer-title">Products</h3>
                                <ul class="footer-list">
                                    <li><a href="{{ route('products.pipes-tubes.welded-pipes') }}">WELDED PIPES</a>
                                    </li>
                                    <li><a href="{{ route('products.pipes-tubes.seamless-pipes') }}">SEAMLESS
                                            PIPES</a></li>
                                    <li><a href="#">SHEETS & PLATES</a></li>
                                    <li><a href="#">PERFORATED SHEETS</a></li>
                                    <li><a href="#">ROUND BARS</a></li>
                                    <li><a href="#">FASTENERS</a></li>
                                </ul>
                            </div>
                        </div>


                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-col post-column">
                                <h3 class="footer-title">Areas We Serve</h3>
                                <ul class="footer-list">
                                    <li><a href="{{ route('products.pipes-tubes') }}">PIPES</a></li>
                                    <li><a href="#">FITTINGS</a></li>
                                    <li><a href="#">FLANGES</a></li>
                                    <li><a href="#">FASTENERS</a></li>
                                    <li><a href="#">STEEL</a></li>
                                </ul>

                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-col">
                                <h3 class="footer-title">Useful Links</h3>
                                <ul class="footer-list">
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li><a href="{{ route('about-us') }}">About Us</a></li>
                                    <li><a href="{{ route('products') }}">Our Products</a></li>
                                    <li><a href="{{ route('blogs') }}">Blogs</a></li>
                                    <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
                                </ul>

                            </div>
                        </div>

                    </div>
                    {{-- <div class="footer-col">
                        <h3 class="footer-title ">Materials</h3>
                        <div class="row">
                            <!-- Column 1: Nickel Alloys -->
                            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                                <h5 class="text-warning">Nickel Alloys</h5>
                                <ul class="footer-list footer-col">
                                    <li><a href="#">Hastelloy C276 – UNS N10276</a></li>
                                    <li><a href="#">Inconel 625 – UNS N06625</a></li>
                                    <li><a href="#">Hastelloy C22 – UNS N06022</a></li>
                                    <li><a href="#">Inconel 690 – UNS N06690</a></li>
                                    <li><a href="#">Hastelloy B2 – UNS N010665</a></li>
                                    <li><a href="#">Inconel 718 – UNS N07718</a></li>
                                    <li><a href="#">Hastelloy B3 – UNS N10675</a></li>
                                    <li><a href="#">Inconel X750 – UNS N07750</a></li>
                                    <li><a href="#">Hastelloy C2000 – UNS N06200</a></li>
                                    <li><a href="#">Incoloy 800 – UNS N08800</a></li>
                                    <li><a href="#">Hastelloy C4 – UNS N06455</a></li>
                                    <li><a href="#">Incoloy 825 – UNS N08825</a></li>
                                </ul>
                            </div>

                            <!-- Column 2: Nickel Alloys Continued  + Duplex/Super Duplex-->
                            <div class="col-lg-3 col-md-6 col-sm-12 mb-4 footer-col">
                                <h5 class="text-warning">Nickel Alloys (contd.)</h5>
                                <ul class="footer-list footer-col">
                                    <li><a href="#">Hastelloy X – UNS N06002</a></li>
                                    <li><a href="#">Incoloy 925 – UNS N09925</a></li>
                                    <li><a href="#">Monel K500 – UNS N05500</a></li>
                                    <li><a href="#">Nickel 200 – UNS N02200</a></li>
                                    <li><a href="#">Monel 400 – UNS N04400</a></li>
                                    <li><a href="#">Nickel 201 – UNS N02201</a></li>
                                    <li><a href="#">Inconel 600 – UNS N06600</a></li>
                                    <li><a href="#">AL-6XN – UNS N08367</a></li>
                                    <li><a href="#">Inconel 617 – UNS N06617</a></li>
                                    <li><a href="#">A286 GR. 660 – UNS S66286</a></li>
                                </ul>

                                <h5 class="text-warning mt-4">Duplex & Super Duplex Alloys</h5>
                                <ul class="footer-list footer-col">
                                    <li><a href="#">Super Duplex 2507 – UNS S32750</a></li>
                                    <li><a href="#">Duplex 2205 – UNS S32205</a></li>
                                    <li><a href="#">Super Duplex 32760 – UNS S32760</a></li>
                                    <li><a href="#">Duplex 31803 – UNS S31803</a></li>
                                </ul>
                            </div>

                            <!-- Column 3: Titanium -->
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <h5 class="text-warning">Titanium Alloys</h5>
                                <ul class="footer-list footer-col">
                                    <li><a href="#">Titanium Grade 1 – UNS R50250</a></li>
                                    <li><a href="#">Titanium Grade 7 – UNS R52400</a></li>
                                    <li><a href="#">Titanium Grade 2 – UNS R50400</a></li>
                                    <li><a href="#">Titanium Grade 9 – UNS R56320</a></li>
                                    <li><a href="#">Titanium Grade 5 (Ti-6Al-4V) – UNS R56400</a></li>
                                    <li><a href="#">Titanium Grade 12 – UNS R53400</a></li>
                                </ul>
                            </div>

                            <!-- Column 4: Stainless Steel + Rare Alloys -->
                            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                                <h5 class="text-warning">Stainless Steel</h5>
                                <ul class="footer-list footer-col">
                                    <li><a href="#">Stainless Steel 304 – UNS S30400</a></li>
                                    <li><a href="#">Stainless Steel 321 – UNS S32100</a></li>
                                    <li><a href="#">Stainless Steel 310 – UNS S31000</a></li>
                                    <li><a href="#">Stainless Steel 347 – UNS S34700</a></li>
                                    <li><a href="#">Stainless Steel 316 – UNS S31600</a></li>
                                    <li><a href="#">Stainless Steel 904L – UNS N08904</a></li>
                                    <li><a href="#">Stainless Steel 317 – UNS S31700</a></li>
                                    <li><a href="#">Stainless Steel 316Ti – UNS S31635</a></li>
                                </ul>

                                <h5 class="text-warning mt-4">Rare To Find Alloys</h5>
                                <ul class="footer-list footer-col">
                                    <li><a href="#">Zirconium Grade 702 – UNS R70250</a></li>
                                    <li><a href="#">Tantalum Grade R05200 – UNS R05200</a></li>
                                    <li><a href="#">Zirconium Grade 704 – UNS R70400</a></li>
                                    <li><a href="#">Tantalum Grade R05252 – UNS R05252</a></li>
                                    <li><a href="#">Zirconium Grade 705 – UNS R70500</a></li>
                                    <li><a href="#">Tantalum Grade R05255 – UNS R05255</a></li>
                                </ul>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <p class="copyright">© 2025 all rights reserved</p>
                        </div>
                        <div class="col-md-9">
                            <nav class="footer-menu d-flex justify-content-end">
                                <ul class="nav">
                                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">home</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{ route('products') }}">Products</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">term &amp; condition</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="#">privacy policy</a></li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{ route('contact-us') }}">contact us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

        </footer>


        <!--Scroll to top-->
        <div class="scroll-to-top scroll-to-target" data-bs-target="html"><span class="fa fa-angle-up"></span></div>
        <div class="prealoader"></div>
        <!-- main jQuery -->
        <script src="{{ asset('assets/js/jquery.js') }}"></script>
        <!-- bootstrap -->
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>


        <!-- Bootstrap 5.3 Bundle JS (includes Popper) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- bx slider -->
        <script src="{{ asset('assets/js/jquery.bxslider.min.js') }}"></script>
        <!-- count to -->
        <script src="{{ asset('assets/js/jquery.countTo.js') }}"></script>
        <!-- owl carousel -->
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <!-- validate -->
        <script src="{{ asset('assets/js/validation.js') }}"></script>
        <!-- mixit up -->
        <script src="{{ asset('assets/js/jquery.mixitup.min.js') }}"></script>
        <!-- easing -->
        <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
        <!-- gmap helper -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHzPSV2jshbjI8fqnC_C4L08ffnj5EN3A"></script>
        <!--gmap script-->
        <script src="{{ asset('assets/js/gmaps.js') }}"></script>
        <script src="{{ asset('assets/js/map-helper.js') }}"></script>
        <!-- fancy box -->
        <script src="{{ asset('assets/js/jquery.fancybox.pack.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
        <!-- isotope script-->
        <script src="{{ asset('assets/js/isotope.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.prettyPhoto.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.bootstrap-touchspin.js') }}"></script>

        <!-- jQuery ui js -->
        <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
        {{-- <script src="{{ asset('assets/js/SmoothScroll.js') }}"></script> --}}
        <script src="{{ asset('assets/js/validation.js') }}"></script>
        <script src="{{ asset('assets/js/wow.min.js') }}"></script>



        <!-- revolution slider js -->
        <script src="{{ asset('assets/js/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.themepunch.revolution.min.js') }}"></script>
        <script src="{{ asset('assets/js/revolution.extension.actions.min.js') }}"></script>
        <script src="{{ asset('assets/js/revolution.extension.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/js/revolution.extension.kenburn.min.js') }}"></script>
        <script src="{{ asset('assets/js/revolution.extension.layeranimation.min.js') }}"></script>
        <script src="{{ asset('assets/js/revolution.extension.migration.min.js') }}"></script>
        <script src="{{ asset('assets/js/revolution.extension.navigation.min.js') }}"></script>
        <script src="{{ asset('assets/js/revolution.extension.parallax.min.js') }}"></script>
        <script src="{{ asset('assets/js/revolution.extension.slideanims.min.js') }}"></script>
        <script src="{{ asset('assets/js/revolution.extension.video.min.js') }}"></script>


        {{--
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js"
            integrity="sha512-b+nQTCdtTBIRIbraqNEwsjB6UvL3UEMkXnhzd8awtCYh0Kcsjl9uEgwVFVbhoj3uu1DO1ZMacNvLoyJJiNfcvg=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
        <!-- thm custom script -->
        <script src="{{ asset('assets/js/custom.js') }}"></script>
        <script>
            // Enable dropdown on hover for desktop
            document.querySelectorAll('.dropdown').forEach(function(dropdown) {
                dropdown.addEventListener('mouseover', function() {
                    let toggle = this.querySelector('[data-bs-toggle="dropdown"]');
                    if (toggle && window.innerWidth > 992) {
                        let dropdownInstance = bootstrap.Dropdown.getOrCreateInstance(toggle);
                        dropdownInstance.show();
                    }
                });
                dropdown.addEventListener('mouseleave', function() {
                    let toggle = this.querySelector('[data-bs-toggle="dropdown"]');
                    if (toggle && window.innerWidth > 992) {
                        let dropdownInstance = bootstrap.Dropdown.getOrCreateInstance(toggle);
                        dropdownInstance.hide();
                    }
                });
            });
        </script>



        @yield('extrajs')



    </div>
</body>

</html>
