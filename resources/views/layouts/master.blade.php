<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=GTM-PT5QP6JV' + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PT5QP6JV');
    </script>
    <!-- End Google Tag Manager -->


    {{-- Dynamic Page Title --}}
    <title>@yield('title', 'Mokshtubes')</title>

    {{-- Dynamic Meta Description --}}
    <meta name="description" content="@yield('meta_description', 'Mokshtubes')">

    {{-- Dynamic Meta Keywords --}}
    <meta name="keywords" content="@yield('meta_keywords', 'mokshtubes')">

    {{-- Canonical Tag --}}
    {{-- <link rel="canonical" href="@yield('canonical', url()->fullUrl())"> --}}
    <link rel="canonical" href="@yield('canonical', request()->fullUrl())">

    {{-- <link rel="canonical" href="@yield('canonical', url()->current())"> --}}
    <!-- Individual Page OG Override -->
    {{-- @yield('meta') --}}

    <!-- OpenGraph -->
    <meta property="og:title" content="@yield('title', 'Mokshtubes')" />
    <meta property="og:description" content="@yield('meta_description', 'Mokshtubes')" />
    <meta property="og:url" content="@yield('canonical', url()->current())" />
    <meta property="og:image" content="@yield('og_image', asset('assets/images/slides/Mokshtubes-banner-desktop.webp'))" />
    <meta property="og:type" content="@yield('og_type', 'website')" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'Mokshtubes')" />
    <meta name="twitter:description" content="@yield('meta_description', 'Mokshtubes')" />
    <meta name="twitter:image" content="@yield('og_image', asset('assets/images/slides/Mokshtubes-banner-desktop.webp'))" />

    {{-- <meta name="title" content="@yield('meta_title')">
    <meta name="description" content="@yield('meta_description')">
    <meta name="keyword" content="@yield('meta_keyword')"> --}}
    {{-- <link rel="canonical" href="@yield('canonical')">
    <title>@yield('title')</title> --}}

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">




    {{--
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
    <!-- Favicon -->
    {{-- <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicon/apple-touch-icon.png') }}"> --}}
    {{-- <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon/logo-moksh-32x32.png') }}"
        sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon/logo-moksh-16x16.png') }}"
        sizes="16x16"> --}}


    <link rel="icon" href="{{ asset('assets/images/favicon/favicon.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon/favicon.ico') }}" type="image/x-icon">

    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('assets/images/favicon/logo-moksh-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('assets/images/favicon/logo-moksh-16x16.png') }}">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicon/apple-touch-icon.png') }}">

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
    @stack('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css">

    {{-- <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "@id": "https://mokshtubes.com/#organization",
  "name": "Moksh Tubes & Fittings LLP",
  "url": "https://mokshtubes.com/",
  "logo": "https://mokshtubes.com/assets/images/logo.png",

  "description": "Manufacturer & global supplier of stainless steel, alloy steel, carbon steel, nickel alloy, duplex & titanium pipes and tubes.",

  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Your Full Address",
    "addressLocality": "Mumbai",
    "addressRegion": "MH",
    "postalCode": "4000XX",
    "addressCountry": "IN"
  },

  "contactPoint": [
    {
      "@type": "ContactPoint",
      "contactType": "sales",
      "telephone": "+91-XXXXXXXXXX",
      "email": "sales@mokshtubes.com",
      "availableLanguage": ["en", "hi"],
      "areaServed": "Worldwide"
    }
  ],

  "sameAs": [
    "https://www.linkedin.com/company/xxxx",
    "https://www.facebook.com/xxxx",
    "https://www.youtube.com/@xxxx"
  ]
}
</script> --}}

</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PT5QP6JV" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


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
                        <p><i class="fa fa-clock-o"></i>Monday - Friday : 8:00 AM to 7:00 PM</p>
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
                <a href="{{ route('index') }}">
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
                            <p>Call Us On</p>
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
                            <p>Mail Us @</p>
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


        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API = Tawk_API || {},

                Tawk_LoadStart = new Date();
            (function() {
                var s1 = document.createElement("script"),
                    s0 = document.getElementsByTagName("script")[0];
                s1.async = true;
                s1.src = 'https://embed.tawk.to/692d953abb2f8419802db9ae/1jbd0trj6';
                s1.charset = 'UTF-8';
                s1.setAttribute('crossorigin', '*');
                s0.parentNode.insertBefore(s1, s0);
            })();
        </script>
        <script type="text/javascript">
            var Tawk_API = Tawk_API || {};
            Tawk_API.customStyle = {
                visibility: {
                    desktop: {
                        position: 'br', // bottom-right
                        xOffset: 18,
                        yOffset: 80 // ⬆ moves it UP
                    },
                    mobile: {
                        position: 'br',
                        xOffset: 10,
                        yOffset: 70
                    }
                }
            };
        </script>
        <!--End of Tawk.to Script-->


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
                                        <li class="nav-item"><a class="nav-link"
                                                href="{{ route('index') }}">Home</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="{{ route('about-us') }}">About
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
                                                        'Sheets, Plates & Coils',
                                                        'Bars & Rods',
                                                        'Pipe Fittings, Flanges & Fasteners',
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


                                        <li class="nav-item dropdown ">
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
                                                        'Duplex and Super Duplex',
                                                        'Austenitic Stainless Steel',
                                                        'High Strength Stainless Steel',
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


                                        <li class="nav-item"><a class="nav-link" href="#">Quality</a></li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="{{ route('calculator') }}">Calculator</a></li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="{{ route('blogs') }}">Blogs</a></li>
                                    </ul>
                                    <ul class="mobile-menu clearfix">
                                        <li><a href="{{ route('index') }}">Home</a></li>
                                        <li><a href="{{ route('about-us') }}">About Us</a></li>

                                        <li class="dropdown"><a href="{{ route('products') }}">Products</a>
                                            <ul>
                                                <li><a href="{{ route('products.pipes-tubes') }}">PIPES & TUBES</a>
                                                </li>
                                                {{-- <li><a href="#">SHEETS, PLATES & COILS</a></li> --}}
                                                <li><a href="#">BARS & RODS</a></li>
                                                <li><a href="{{ route('products.pipe-fittings-flanges-fasteners') }}">PIPE
                                                        FITTINGS, FLANGES & FASTENERS</a></li>
                                                <li><a href="{{ route('products.special-fabricated') }}">SPECIAL
                                                        FABRICATED PRODUCTS</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="{{ route('materials') }}">Materials</a>
                                            <ul>
                                                <li><a href="{{ route('materials.hastelloy') }}">Hastelloy</a></li>
                                                <li><a href="{{ route('materials.monel') }}">Monel</a></li>
                                                <li><a href="{{ route('materials.incoloy') }}">Incoloy</a></li>
                                                <li><a href="{{ route('materials.nickel-Based-Superalloys') }}">Nickel
                                                        Based Superalloys</a></li>
                                                <li><a href="{{ route('materials.inconel') }}">Inconel</a></li>
                                                <li><a href="{{ route('materials.titanium') }}">Titanium</a></li>
                                                <li><a href="{{ route('materials.aluminium-Alloys') }}">Aluminium
                                                        Alloys</a></li>
                                                <li><a
                                                        href="{{ route('materials.super-Austenitic-Stainless-Steel') }}">Super
                                                        Austenitic Stainless Steel</a></li>
                                                <li><a href="{{ route('materials.hard-To-Find-Special-Alloys') }}">Hard
                                                        To Find Special Alloys</a></li>
                                                <li><a href="{{ route('materials.engineering-Steels') }}">Engineering
                                                        Steels</a></li>
                                                <li><a href="{{ route('materials.austenitic-stainless-Steel') }}">Austenitic
                                                        Stainless Steel</a></li>
                                                <li><a href="{{ route('materials.copper-Alloys') }}">Copper Alloys</a>
                                                </li>
                                                <li><a href="{{ route('materials.zirconium') }}">Zirconium</a></li>
                                                <li><a href="{{ route('materials.haynes-Superalloys') }}">Haynes
                                                        Superalloys</a></li>
                                            </ul>
                                            {{-- <li><a href="{{ route('materials') }}">MATERIALS</a>
                                        </li> --}}

                                        <li><a href="#">Quality</a></li>
                                        <li><a href="{{ route('calculator') }}">Calculator</a></li>
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
                                    <a href="{{ route('index') }}" class="footer-logo text-uppercase">
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
                                    <li><a href="{{ route('products.pipes-tubes') }}">PIPES & TUBES</a>
                                    </li>
                                    <li><a href="{{ route('products.sheets-plates-coils') }}">SHEETS, PLATES &
                                            COILS</a></li>
                                    <li><a href="{{ route('products.bars-rods') }}">BARS & RODS</a></li>
                                    <li><a href="{{ route('products.pipe-fittings-flanges-fasteners') }}">PIPE
                                            FITTINGS, FLANGES & FASTENERS</a></li>
                                    <li><a href="{{ route('products.special-fabricated') }}">SPECIAL FABRICATED</a>
                                    </li>
                                    {{-- <li><a
                                            href="{{ route('products.pipe-fittings-flanges-fasteners') }}">FASTENERS</a>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>


                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-col post-column">
                                <h3 class="footer-title">Materials</h3>
                                <ul class="footer-list">
                                    <li><a href="{{ route('materials.hastelloy') }}">HASTELLOY</a></li>
                                    <li><a href="{{ route('materials.austenitic-stainless-Steel') }}">AUSTENTIC
                                            STAINLESS STEEL</a>
                                    </li>
                                    <li><a href="{{ route('materials.engineering-Steels') }}">ENGINEERING STEELS</a>
                                    </li>
                                    <li><a href="{{ route('materials.copper-Alloys') }}">COPPER ALLOYS</a>
                                    </li>
                                    <li><a href="{{ route('materials.nickel-Based-Superalloys') }}">NICKEL BASED
                                            SUPERALLOYS</a></li>
                                    <li><a href="{{ route('materials.inconel') }}">INCONEL</a></li>
                                </ul>

                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-col">
                                <h3 class="footer-title">Useful Links</h3>
                                <ul class="footer-list">
                                    <li><a href="{{ route('index') }}">Home</a></li>
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
                                    <li class="nav-item"><a class="nav-link" href="{{ route('index') }}">home</a>
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



        <div class="whatsapp-btn-container"
            style="
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    border-radius: 50px;
                    position: fixed;
                    bottom: 25px;
                    background: #25d366;
                    left: 2.1875rem;
                    width: 60px;
                    height: 60px;
                    z-index:99;">
            <div id="whatsapp-btn" style="margin-top:5px;">
                <a class="whatsapp" href="https://wa.me/+919769584950">
                    <i class="fa fa-whatsapp fa-2x text-white" aria-hidden="true"></i>
                </a>
            </div>
        </div>

        <!-- Contact Form Modal -->
        <!-- Contact Form Modal -->
        <div class="modal fade" id="contactFormModal" tabindex="-1" role="dialog"
            aria-labelledby="contactFormModalLabel" aria-hidden="true" style="z-index: 2000;">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content p-3" style="z-index:2001;">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h5 class="modal-title fw-bold fs-3" id="contactFormModalLabel">Get in Touch</h5>
                        <button type="button" class="close ms-auto" data-bs-dismiss="modal" aria-label="Close"
                            style="font-size: 3rem;">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <form id="contact-form" name="contact_form" class="default-form"
                            action="{{ url('sendmail') }}" method="post">
                            @csrf
                            <div class="row">
                                <!-- Honeypot Anti-Bot Field -->
                                <input type="text" name="website" style="display:none !important;" tabindex="-1"
                                    autocomplete="off">
                                <div class="col-md-12 mb-3">
                                    <input class="form-control" type="text" name="form_name"
                                        placeholder="Your Name*" required>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <input class="form-control" type="email" name="form_email"
                                        placeholder="Your Mail*" required>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <input class="form-control" type="text" name="form_phone"
                                        placeholder="Phone">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <input class="form-control" type="text" name="form_subject"
                                        placeholder="Subject">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <textarea name="form_message" class="form-control" placeholder="Your Message.." required></textarea>
                                </div>
                                <div class="col-md-12 text-end">
                                    <input id="form_botcheck" name="form_botcheck" type="hidden" value="">
                                    <button class="thm-btn bg-clr1" type="submit"
                                        data-loading-text="Please wait...">
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>



        @if (!Cookie::get('cookie_consent'))
            <div id="cookie-consent" class="position-fixed text-white shadow-lg"
                style="background: rgba(33,33,33,0.95);
               bottom: 0;
               left: 0;
               right: 0;
               width: 100%;
               z-index: 999999;
               display: none;
               border-radius: 0;
               padding: 15px 20px;">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Text -->
                        <div class="col-12 col-sm-9 mb-3 mb-sm-0">
                            <p class="mb-0 small text-white">
                                We use cookies to personalize content, improve site performance, and analyze traffic.
                                Some
                                cookies are essential for the site to function correctly. You can manage your
                                preferences or
                                accept all cookies.
                            </p>
                        </div>

                        <!-- Buttons -->
                        <div class="col-12 col-sm-3">
                            <div class="d-flex flex-row flex-sm-column justify-content-between p-2">
                                <button id="accept-cookies" class="btn btn-sm text-white mb-sm-2"
                                    style="background-color:#db7227;">Accept</button>
                                <button id="reject-cookies" class="btn btn-sm border text-white"
                                    style="border-color:#db7227;">Reject</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        @endif











        <!--Scroll to top-->
        <div class="scroll-to-top scroll-to-target" data-bs-target="html"><span class="fa fa-angle-up"></span></div>
        <div class="prealoader"></div>
        <!-- main jQuery -->
        <script src="{{ asset('assets/js/jquery.js') }}"></script>
        <!-- bootstrap -->
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const popup = document.getElementById("cookie-consent");
                if (!popup) return;

                setTimeout(() => popup.style.display = "block", 3000);

                function sendConsent(url) {
                    fetch(url, {
                            method: "POST",
                            headers: {
                                "Content-Type": "application/json",
                                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute(
                                    "content"),
                            },
                            credentials: "same-origin" // 👈 VERY IMPORTANT: allows cookies to be saved
                        })
                        .then(res => res.json())
                        .then(data => {
                            console.log("Cookie status:", data.status);
                            popup.style.display = "none";
                        })
                        .catch(err => console.error("Cookie error:", err));
                }

                document.getElementById("accept-cookies")?.addEventListener("click", () => sendConsent(
                    "{{ route('cookie.accept') }}"));
                document.getElementById("reject-cookies")?.addEventListener("click", () => sendConsent(
                    "{{ route('cookie.reject') }}"));
            });
        </script>



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
        <script>
            // document.addEventListener("DOMContentLoaded", function() {
            //     setTimeout(function() {
            //         var contactModal = new bootstrap.Modal(document.getElementById('contactFormModal'));
            //         contactModal.show();
            //     }, 10000);
            // });
        </script>








    </div>
    @yield('extrajs')
    @yield('jsscripts')
</body>



</html>
