@extends('layouts.master')

@section('title', 'Stainless Steel & Nickel Alloy Pipes – Moksh Tubes LLP') <!-- 60 chars -->
@section('meta_description',
    'Leading exporter of stainless steel, nickel alloy & titanium pipes, tubes & fittings. ISO-certified quality, fast quotes & global delivery.')
@section('meta_keywords', 'Incoloy 825, nickel alloy, corrosion resistant alloy, premium metal alloys, moksh tubes')
@section('canonical', 'https://mokshtubes.com')
@section('content')



    <!--Start rev slider wrapper-->
    <section class="rev_slider_wrapper">
        <div id="slider1" class="rev_slider" data-version="5.0">
            <ul>
                <li data-transition="slidingoverlayleft">
                    <img src="{{ asset('assets/images/slides/Mokshtubes-banner-desktop.webp') }}"
                        alt="Stainless Steel Welded Pipes ERW EFW ASTM A312" width="1920" height="880"
                        data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1">

                    <div class="tp-caption  tp-resizeme" data-x="left" data-hoffset="15" data-y="center" data-voffset="-50"
                        data-transform_idle="o:1;"
                        data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none"
                        data-responsive_offset="on" data-start="700">
                        <div class="slide-content-box">
                            <h1>Stainless Steel & Nickel Alloy Pipes <br> <span>Moksh Tubes LLP</span></h1>

                            <p>Seamless & Welded Pipes/Tubes in SS 304/316/321/904L, <br>Inconel & Hastelloy with MTC (EN
                                10204 3.1), PMI & Hydro Test ready stock<br>
                            Cut to length, export grade packing, fast dispatch across India, GCC, EU</p>
                        </div>
                    </div>
                    <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="15" data-y="center" data-voffset="110"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-splitin="none"
                        data-splitout="none" data-responsive_offset="on" data-start="2300">
                        <div class="slide-content-box">
                            <div class="button">
                                <a class="thm-btn bg-clr1" href="{{ route('about-us') }}">about us</a>
                            </div>
                        </div>
                    </div>
                    <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="227" data-y="center" data-voffset="110"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-splitin="none"
                        data-splitout="none" data-responsive_offset="on" data-start="2600">
                        <div class="slide-content-box">
                            <div class="button">
                                <a class="thm-btn bg-clr2" href="{{ route('contact-us') }}">Contact Us</a>
                            </div>
                        </div>
                    </div>

                </li>



                <li data-transition="slidingoverlayleft">
                    <img src="{{ asset('assets/images/slides/carpenteria-interno.webp') }}" alt="banner image" width="1920"
                        height="880" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat"
                        data-bgparallax="1">

                    <div class="tp-caption  tp-resizeme" data-x="right" data-hoffset="15" data-y="center" data-voffset="-50"
                        data-transform_idle="o:1;"
                        data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none"
                        data-responsive_offset="on" data-start="700">
                        <div class="slide-content-box">
                            <h2 class="hero-title">Provide Solution for <br>Industries plan</h2>
                            <p>Seamless & Welded Pipes/Tubes in SS 304/316/321/904L<br>Inconel & Hastelloy with MTC (EN
                                10204 3.1)<br>PMI & Hydro Test ready stock</p>

                        </div>
                    </div>
                    <div class="tp-caption tp-resizeme" data-x="right" data-hoffset="400" data-y="center" data-voffset="110"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-splitin="none"
                        data-splitout="none" data-responsive_offset="on" data-start="2300">
                        <div class="slide-content-box">
                            <div class="button">
                                <a class="thm-btn bg-clr1" href="{{ route('about-us') }}">About Us</a>
                            </div>
                        </div>
                    </div>
                    <div class="tp-caption tp-resizeme" data-x="right" data-hoffset="190" data-y="center"
                        data-voffset="110" data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-splitin="none"
                        data-splitout="none" data-responsive_offset="on" data-start="2600">
                        <div class="slide-content-box">
                            <div class="button">
                                <a class="thm-btn bg-clr2" href="{{ route('contact-us') }}">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </li>

                <li data-transition="slidingoverlayright">
                    <img src="{{ asset('assets/images/slides/we-help.webp') }}" alt="banner image" width="1920"
                        height="550" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat"
                        data-bgparallax="1">

                    <div class="tp-caption  tp-resizeme" data-x="left" data-hoffset="15" data-y="center"
                        data-voffset="-50" data-transform_idle="o:1;"
                        data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none"
                        data-responsive_offset="on" data-start="700">
                        <div class="slide-content-box">
                            <h2 class="hero-title">We help Industries <br> innovate and grow</h2>
                            <p>Cut‑to‑length, export‑grade packing<br> fast dispatch across India, GCC, EU</p>

                        </div>
                    </div>
                    <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="15" data-y="center"
                        data-voffset="110" data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-splitin="none"
                        data-splitout="none" data-responsive_offset="on" data-start="2300">
                        <div class="slide-content-box">
                            <div class="button">
                                <a class="thm-btn bg-clr1" href="{{ route('about-us') }}">About Us</a>
                            </div>
                        </div>
                    </div>
                    <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="227" data-y="center"
                        data-voffset="110" data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-splitin="none"
                        data-splitout="none" data-responsive_offset="on" data-start="2600">
                        <div class="slide-content-box">
                            <div class="button">
                                <a class="thm-btn bg-clr2" href="{{ route('contact-us') }}">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </li>



            </ul>
        </div>
    </section>
    <!--End rev slider wrapper-->


    <section class="about-us sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12">

                    <figure class="about-img">
                        <!-- <img src="images/resource/1.png" alt="about titan builders photo"> -->
                        <img src="{{ asset('assets/images/about/about-moksh-tubes.jpg') }}"
                            alt="about titan builders photo">
                    </figure>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="about-text">
                        <h2>
                            about <span class="thm-color">Moksh Tubes & Fittings LLP</span>
                        </h2>
                        <div class="text">
                            <p>Welcome to Moksh Tubes & Fittings LLP, a trusted provider of high-quality gi pipes, ss pipes,
                                welded pipes, and seamless pipes. With over 20 years of experience and projects delivered
                                across 12 countries, we offer premium metal products designed for construction,
                                manufacturing, and engineering applications. Our mild steel, stainless steel, and ms
                                materials are manufactured with precision and reliability.</p>
                        </div>
                        <div class="fact-counter d-xl-block d-none">
                            <ul class="d-flex flex-wrap justify-content-center gap-5">
                                <li class="single-fact-counter">
                                    <div class="icon-holder"><span class="flaticon-social"></span></div>
                                    <span class="timer" data-from="1" data-to="20" data-speed="5000"
                                        data-refresh-interval="50">20</span>
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                    <h3>Years Of Experience</h3>
                                </li>
                                <li class="single-fact-counter">
                                    <div class="icon-holder"><span class="flaticon-landscape"></span></div>
                                    <span class="timer" data-from="1" data-to="12" data-speed="5000"
                                        data-refresh-interval="50">12</span>
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                    <h3>Countries Served Globally</h3>
                                </li>
                                <li class="single-fact-counter">
                                    <div class="icon-holder"><span class="flaticon-innovation"></span></div>
                                    <span class="timer" data-from="1" data-to="300" data-speed="5000"
                                        data-refresh-interval="50">300</span>
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                    <h3>Projects Completed</h3>
                                </li>
                            </ul>
                        </div>

                    </div>




                </div>
                <div class="fact-counter d-xl-none d-block">
                    <ul class="d-flex flex-wrap justify-content-center gap-5">
                        <li class="single-fact-counter">
                            <div class="icon-holder"><span class="flaticon-social"></span></div>
                            <span class="timer" data-from="1" data-to="20" data-speed="5000"
                                data-refresh-interval="50">20</span>
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            <h3>Years Of Experience</h3>
                        </li>
                        <li class="single-fact-counter">
                            <div class="icon-holder"><span class="flaticon-landscape"></span></div>
                            <span class="timer" data-from="1" data-to="12" data-speed="5000"
                                data-refresh-interval="50">12</span>
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            <h3>Countries Served Globally</h3>
                        </li>
                        <li class="single-fact-counter">
                            <div class="icon-holder"><span class="flaticon-innovation"></span></div>
                            <span class="timer" data-from="1" data-to="300" data-speed="5000"
                                data-refresh-interval="50">300</span>
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            <h3>Projects Completed</h3>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section class="our-services sec-padd-top sec-padd-bottom">
        <div class="container">

            <div class="row">
                <div class="col-md-4 col-sm-5 col-xs-12">
                    <div class="section-title">
                        <h2>Our Products</h2>
                    </div>
                </div>
                <div class="col-md-8 col-sm-7 col-xs-12 font-20 mb-4">
                    <p>Our products include <strong> pipes (ERW & EFW), seamless pipes, gi pipes, ss pipes, stainless steel
                            sheets, metal plates, perforated sheets, round bars, and industrial fasteners. We provide
                            complete pipe sizes charts, pipe schedules, and steel density specifications</strong> to ensure
                        you get the right product for your needs.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                       <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('products.pipes-tubes.welded-pipes') }}">
                            <img src="/assets/images/service/WELDED-PIPES.webp"  alt="Awesome Image" ></a>
                        </figure>

                        <div class="p-3">
                            <a href="{{ route('products.pipes-tubes.welded-pipes') }}">
                                <h3 class="mt-0 h5">WELDED PIPES</h3>
                            </a>
                            <p>
                                Our welded pipes are produced from mild steel and stainless steel materials, offering
                                strength, uniform wall thickness, and excellent corrosion resistance.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('products.pipes-tubes.seamless-pipes') }}">
                                <img class="w-100" src="/assets/images/service/SEAMLESS-PIPES.webp" alt="Awesome Image">
                            </a>
                        </figure>
                        <div class="p-3">
                            <a href="{{ route('products.pipes-tubes.seamless-pipes') }}">
                                <h3 class="mt-0 h5">SEAMLESS PIPES</h3>
                            </a>
                            <p>
                                Our seamless pipes deliver superior strength, reliability, and resistance to high pressure.
                                Ideal for boiler tubes, heat exchangers, and structural applications.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('products.sheets-plates-coils.sheets-and-plates') }}">
                                <img src="/assets/images/service/SHEETS-PLATES.webp" alt="Sheets and Plates" >

                            </a>
                        </figure>
                        <div class="p-3">
                            <a href="{{ route('products.sheets-plates-coils.sheets-and-plates') }}">
                                <h3 class="mt-0 h5">SHEETS & PLATES</h3>
                            </a>
                            <p>
                                We supply steel sheets, plates, coils, and chequered sheets, manufactured using precision
                                rolling to maintain consistent steel density and flatness.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0" >
                            <a class="w-100" href="{{ route('products.sheets-plates-coils.perforated-sheets') }}">
                                <img src="/assets/images/service/PERFORATED-SHEETS.jpg" alt="Perforated Sheets" >
                            </a>
                        </figure>

                        <div class="p-3">
                            <a href="{{ route('products.sheets-plates-coils.perforated-sheets') }}">
                                <h3 class="mt-0 h5">PERFORATED SHEETS</h3>
                            </a>
                            <p>
                                Our perforated sheets are designed for ventilation, filtration, and decorative applications.
                                Available in stainless steel, galvanized iron, and mild steel.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('products.bars-rods.round-bars') }}">
                                <img class="w-100" src="/assets/images/service/ROUND-BARS.jpg" alt="Awesome Image">
                            </a>
                        </figure>
                        <div class="p-3">
                            <a href="{{ route('products.bars-rods.round-bars') }}">
                                <h3 class="mt-0 h5">ROUND BARS</h3>
                            </a>
                            <p>
                                Round Bars are solid cylindrical metal bars widely used across construction, automotive, aerospace, marine, and engineering sectors. Available in different materials, sizes, and
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('products.pipe-fittings-flanges-fasteners.fasteners') }}">
                                {{-- <img class="w-100" src="{{ asset('assets/images/service/6.jpg') }}" alt="Awesome Image"> --}}
                                <img class="w-100" src="/assets/images/service/FASTENERS-1.webp" alt="Awesome Image">
                            </a>
                        </figure>
                        <div class="p-3">
                            <a href="{{ route('products.pipe-fittings-flanges-fasteners.fasteners') }}">
                                <h3 class="mt-0 h5">Fasteners & Fittings</h3>
                            </a>
                            <p>
                                We supply all types of pipe fittings, flanges, threaded pipes, and SS fasteners. Custom
                                sizes and fabricated products are also available for unique project.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- <section class="latest-project sec-padd" style="background-image: url(images/background/5.jpg);">
                                                                                                                                                                                                                                                                                        <div class="container">
                                                                                                                                                                                                                                                                                            <div class="section-title">
                                                                                                                                                                                                                                                                                                <h2>Latest Projects</h2>
                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                            <div class="latest-project-carousel">
                                                                                                                                                                                                                                                                                                <div class="item">
                                                                                                                                                                                                                                                                                                    <div class="single-project">
                                                                                                                                                                                                                                                                                                        <figure class="imghvr-shutter-in-out-horiz">
                                                                                                                                                                                                                                                                                                            <img src="images/project/p1.jpg" alt="Awesome Image" />
                                                                                                                                                                                                                                                                                                            <figcaption>
                                                                                                                                                                                                                                                                                                                <div class="content">
                                                                                                                                                                                                                                                                                                                    <a href="project-single.html">
                                                                                                                                                                                                                                                                                                                        <h5>PETROLEUM GAS</h5>
                                                                                                                                                                                                                                                                                                                    </a>
                                                                                                                                                                                                                                                                                                                    <p>Chemical</p>
                                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                                            </figcaption>
                                                                                                                                                                                                                                                                                                        </figure>
                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                                <div class="item">
                                                                                                                                                                                                                                                                                                    <div class="single-latest-project-carousel">
                                                                                                                                                                                                                                                                                                        <div class="single-project">
                                                                                                                                                                                                                                                                                                            <figure class="imghvr-shutter-in-out-horiz">
                                                                                                                                                                                                                                                                                                                <img src="images/project/p2.jpg" alt="Awesome Image" />
                                                                                                                                                                                                                                                                                                                <figcaption>
                                                                                                                                                                                                                                                                                                                    <div class="content">
                                                                                                                                                                                                                                                                                                                        <a href="project-single.html">
                                                                                                                                                                                                                                                                                                                            <h5>MULTI SPRING PUSH</h5>
                                                                                                                                                                                                                                                                                                                        </a>
                                                                                                                                                                                                                                                                                                                        <p>Mechanical</p>
                                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                                </figcaption>
                                                                                                                                                                                                                                                                                                            </figure>
                                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                                <div class="item">
                                                                                                                                                                                                                                                                                                    <div class="single-latest-project-carousel">
                                                                                                                                                                                                                                                                                                        <div class="single-project">
                                                                                                                                                                                                                                                                                                            <figure class="imghvr-shutter-in-out-horiz">
                                                                                                                                                                                                                                                                                                                <img src="images/project/p3.jpg" alt="Awesome Image" />
                                                                                                                                                                                                                                                                                                                <figcaption>
                                                                                                                                                                                                                                                                                                                    <div class="content">
                                                                                                                                                                                                                                                                                                                        <a href="project-single.html">
                                                                                                                                                                                                                                                                                                                            <h5>STORAGE SYSTEM</h5>
                                                                                                                                                                                                                                                                                                                        </a>
                                                                                                                                                                                                                                                                                                                        <p>Power Energy</p>
                                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                                </figcaption>
                                                                                                                                                                                                                                                                                                            </figure>
                                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                                <div class="item">
                                                                                                                                                                                                                                                                                                    <div class="single-latest-project-carousel">
                                                                                                                                                                                                                                                                                                        <div class="single-project">
                                                                                                                                                                                                                                                                                                            <figure class="imghvr-shutter-in-out-horiz">
                                                                                                                                                                                                                                                                                                                <img src="images/project/p4.jpg" alt="Awesome Image" />
                                                                                                                                                                                                                                                                                                                <figcaption>
                                                                                                                                                                                                                                                                                                                    <div class="content">
                                                                                                                                                                                                                                                                                                                        <a href="project-single.html">
                                                                                                                                                                                                                                                                                                                            <h5>MENUFACTURING</h5>
                                                                                                                                                                                                                                                                                                                        </a>
                                                                                                                                                                                                                                                                                                                        <p>Agricultural</p>
                                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                                </figcaption>
                                                                                                                                                                                                                                                                                                            </figure>
                                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                            </div>

                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                    </section> -->


    <!-- <section class="call-back sec-padd2" style="background-image: url(images/background/4.jpg);">
                                                                                                                                                                                                                                                                                        <div class="container">

                                                                                                                                                                                                                                                                                            <div class="row">
                                                                                                                                                                                                                                                                                                <div class="col-md-5 col-sm-12">
                                                                                                                                                                                                                                                                                                    <div class="section-title">
                                                                                                                                                                                                                                                                                                        <h2>Request a Call Back</h2>
                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                    <h5>Have You Any Question About Us?</h5>
                                                                                                                                                                                                                                                                                                    <br>
                                                                                                                                                                                                                                                                                                    <div class="text">
                                                                                                                                                                                                                                                                                                        <p>Any kind of business solution and consultion hesitate to contact with us for customer
                                                                                                                                                                                                                                                                                                            support. We are love to hear from you</p><br>
                                                                                                                                                                                                                                                                                                        <p><span>Phone & Email:</span> For any information contact with us through our <a href="#">
                                                                                                                                                                                                                                                                                                                Email</a> and you can also contact with directe by call us in this number
                                                                                                                                                                                                                                                                                                            <span>(+880) 1723801729</span>
                                                                                                                                                                                                                                                                                                        </p><br>
                                                                                                                                                                                                                                                                                                        <p><span>Office Hours:</span> We are alwyes open excpet saturday & Sunday from
                                                                                                                                                                                                                                                                                                            <span>10:00am</span> to <span> 8:00pm</span>
                                                                                                                                                                                                                                                                                                        </p>
                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                                <div class="col-md-7 col-sm-12">
                                                                                                                                                                                                                                                                                                    <div class="contact-form-area">
                                                                                                                                                                                                                                                                                                        <div class="contact-form">
                                                                                                                                                                                                                                                                                                            <form id="contact-form" name="contact_form" class="default-form"
                                                                                                                                                                                                                                                                                                                action="inc/sendmail.php" method="post" novalidate="novalidate">
                                                                                                                                                                                                                                                                                                                <div class="row">
                                                                                                                                                                                                                                                                                                                    <div class="col-md-6">
                                                                                                                                                                                                                                                                                                                        <input type="text" name="form_name" value="" placeholder="Your Name*"
                                                                                                                                                                                                                                                                                                                            required="" aria-required="true">
                                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                                    <div class="col-md-6">
                                                                                                                                                                                                                                                                                                                        <input type="email" name="form_email" value="" placeholder="Your Mail*"
                                                                                                                                                                                                                                                                                                                            required="" aria-required="true">
                                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                                                <div class="row">
                                                                                                                                                                                                                                                                                                                    <div class="col-md-6">
                                                                                                                                                                                                                                                                                                                        <input type="text" name="form_phone" value="" placeholder="Phone">
                                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                                    <div class="col-md-6">
                                                                                                                                                                                                                                                                                                                        <input type="text" name="form_subject" value="" placeholder="Subject">
                                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                                                <div class="row">
                                                                                                                                                                                                                                                                                                                    <div class="col-md-12">
                                                                                                                                                                                                                                                                                                                        <textarea name="form_message" placeholder="Your Message.." required="" aria-required="true"></textarea>
                                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                                                <div class="row">
                                                                                                                                                                                                                                                                                                                    <div class="col-md-12">
                                                                                                                                                                                                                                                                                                                        <input id="form_botcheck" name="form_botcheck" class="form-control"
                                                                                                                                                                                                                                                                                                                            type="hidden" value="">
                                                                                                                                                                                                                                                                                                                        <button class="thm-btn bg-clr1" type="submit"
                                                                                                                                                                                                                                                                                                                            data-loading-text="Please wait...">send message</button>
                                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                                            </form>
                                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                                    </div>

                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                    </section> -->

    <section class="all-products-container sec-padd2 ">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-col service-col">
                        <h2 class="footer-title h4">PIPES & TUBES </h2>
                        <ul class="footer-list">
                            <li><a href="{{ route('products.pipes-tubes.welded-pipes') }}">WELDED PIPES (ERW & EFW)</a>
                            </li>
                            <li><a href="{{ route('products.pipes-tubes.seamless-pipes') }}">SEAMLESS PIPES</a></li>
                            <li><a href="{{ route('products.pipes-tubes.capillaries') }}">CAPILLARIESS</a></li>
                            <li><a href="{{ route('products.pipes-tubes.hollow-section-pipe') }}">HOLLOW SECTION PIPE
                                    (SQUARE, RECTANGULAR & OVAL)</a></li>
                            <li><a href="{{ route('products.pipes-tubes.u-bent-tubes') }}">U-BENT TUBES</a></li>
                            <li><a href="{{ route('products.pipes-tubes.boiler-heat-exchanger-tubes') }}">BOILER & HEAT
                                    EXCHANGER TUBES</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-col service-col">
                        <h2 class="footer-title h4">SHEETS, PLATES & COILS</h2>
                        <ul class="footer-list">
                            <li><a href="{{ route('products.sheets-plates-coils') }}">SHEETS & PLATES</a></li>
                            <li><a href="{{ route('products.sheets-plates-coils.coils') }}">COILS</a></li>
                            <li><a href="{{ route('products.sheets-plates-coils.strips') }}">STRIPS</a></li>
                            <li><a href="{{ route('products.sheets-plates-coils.perforated-sheets') }}">PERFORATED
                                    SHEETS</a></li>
                            <li><a href="{{ route('products.sheets-plates-coils.chequered-sheets') }}">CHEQUERED
                                    SHEETS</a></li>
                            <li><a href="{{ route('products.sheets-plates-coils.shim-sheets') }}">SHIM SHEETS</a></li>
                            <li><a href="{{ route('products.sheets-plates-coils.cladded-plates') }}">CLADDED PLATES</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-col service-col">
                        <h2 class="footer-title h4">BARS & RODS</h2>
                        <ul class="footer-list">
                            <li><a href="{{ route('products.bars-rods.round-bars') }}">ROUND BARS</a></li>
                            <li><a href="{{ route('products.bars-rods.hexagon-bars') }}">HEXAGON BARS</a></li>
                            <li><a href="{{ route('products.bars-rods.flat-bars') }}">FLAT BARS</a></li>
                            <li><a href="{{ route('products.bars-rods.square-bars') }}">SQUARE BARS</a></li>
                            <li><a href="{{ route('products.bars-rods.threaded-rods') }}">THREADED RODS</a></li>
                            <li><a href="{{ route('products.bars-rods.hollow-bars') }}">HOLLOW BARS</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="footer-col service-col">
                        <h2 class="footer-title h4">PIPE FITTINGS, FLANGES & FASTENERS</h2>
                        <ul class="footer-list">
                            <li><a href="{{ route('products.pipe-fittings-flanges-fasteners') }}">FITTINGS</a></li>
                            <li><a
                                    href="{{ route('products.pipe-fittings-flanges-fasteners.fittings-and-flanges') }}">FLANGES</a>
                            </li>
                            <li><a href="{{ route('products.pipe-fittings-flanges-fasteners.fasteners') }}">FASTENERS</a>
                            </li>
                            <li><a
                                    href="{{ route('products.pipe-fittings-flanges-fasteners.flanges-and-gaskets') }}">GASKETS</a>
                            </li>
                            <li><a href="{{ route('products.special-fabricated.custom-steel-furniture') }}">CUSTOM
                                    FABRICATED FITTINGS</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="footer-col service-col">
                        <h2 class="footer-title h4">SPECIAL FABRICATED PRODUCTS </h2>
                        <ul class="footer-list">
                            <li><a href="{{ route('products.special-fabricated.ss-railings') }}">SS RAILING PRODUCTS</a>
                            </li>
                            <li><a href="{{ route('products.special-fabricated.glass-railings') }}">GLASS RAILINGS</a>
                            </li>
                            <li><a href="{{ route('products.special-fabricated.custom-steel-furniture') }}">CUSTOM STEEL
                                    FURNITURE</a></li>
                            <li><a href="{{ route('products.special-fabricated.fabricated-ss-grills') }}">FABRICATED SS
                                    GRILLS</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-col service-col">
                        <h4 class="footer-title">PIPES & TUBES </h4>
                        <ul class="footer-list">
                            <li><a href="#">WELDED PIPES (ERW & EFW)</a></li>
                            <li><a href="#">SEAMLESS PIPES</a></li>
                            <li><a href="#">CAPILLARIESS</a></li>
                            <li><a href="#">HOLLOW SECTION PIPE (SQUARE, RECTANGULAR & OVAL)</a></li>
                            <li><a href="#">U-BENT TUBES</a></li>
                            <li><a href="#">BOILER & HEAT EXCHANGER TUBES</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-col service-col">
                        <h4 class="footer-title">SHEETS, PLATES & COILS</h4>
                        <ul class="footer-list">
                            <li><a href="#">SHEETS & PLATES</a></li>
                            <li><a href="#">COILS</a></li>
                            <li><a href="#">STRIPS</a></li>
                            <li><a href="#">PERFORATED SHEETS</a></li>
                            <li><a href="#">CHEQUERED SHEETS</a></li>
                            <li><a href="#">SHIM SHEETS</a></li>
                            <li><a href="#">CLADDED PLATES</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-col service-col">
                        <h4 class="footer-title">BARS & RODS</h4>
                        <ul class="footer-list">
                            <li><a href="#">ROUND BARS</a></li>
                            <li><a href="#">HEXAGON BARS</a></li>
                            <li><a href="#">FLAT BARS</a></li>
                            <li><a href="#">SQUARE BARS</a></li>
                            <li><a href="#">THREADED RODS</a></li>
                            <li><a href="#">HOLLOW BARS</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-col service-col">
                        <h4 class="footer-title">PIPE FITTINGS, FLANGES & FASTENERS</h4>
                        <ul class="footer-list">
                            <li><a href="#">FITTINGS</a></li>
                            <li><a href="#">FLANGES</a></li>
                            <li><a href="#">FASTENERS</a></li>
                            <li><a href="#">GASKETS</a></li>
                            <li><a href="#">CUSTOM FABRICATED FITTINGS</a></li>
                        </ul>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>

    {{-- <section class="brand-logo sec-padd">
         <div class="container">
            <ul class="brand-carousel">
                <li><a href="#"><img src="{{ asset('assets/images/brand/1.jpg') }}" alt=""></a></li>
                <li><a href="#"><img src="{{ asset('assets/images/brand/2.jpg') }}" alt=""></a></li>
                <li><a href="#"><img src="{{ asset('assets/images/brand/3.jpg') }}" alt=""></a></li>
                <li><a href="#"><img src="{{ asset('assets/images/brand/4.jpg') }}" alt=""></a></li>
                <li><a href="#"><img src="{{ asset('assets/images/brand/5.jpg') }}" alt=""></a></li>
            </ul>
        </div>
     </section> --}}

    <section class="blog-section sec-padd2">
        <div class="container">
            <div class="section-title">
                <h2>blogs</h2>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="default-blog-news wow fadeInUp animated animated"
                        style="visibility: visible; animation-name: fadeInUp;">
                        <figure class="img-holder mb-0">
                            <a href="{{ route('blogs.emerging-trends-in-industrial-piping-for-2025-and-beyond') }}"><img
                                    src="{{ asset('assets/images/blog/emerging-trends-in-industrial-piping-for-2025-and-beyond_11zon_11zon_11zon.webp') }}"
                                    alt="News"></a>
                            <figcaption class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a
                                            href="{{ route('blogs.emerging-trends-in-industrial-piping-for-2025-and-beyond') }}"><i
                                                class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                        <div class="lower-content">
                            <a href="{{ route('blogs.emerging-trends-in-industrial-piping-for-2025-and-beyond') }}">
                                <h3 class="h5">Emerging Trends in Industrial Piping for 2025 and Beyond</h3>
                            </a>
                            <div class="post-meta">by fletcher | 14 Comments | 21 Feb</div>
                            <div class="text">
                                <p>Discover how pipeline transport, hydraulic piping, and high-performance steel materials
                                    are shaping the future of industrial engineering.</p>
                            </div>
                            <div class="link">
                                <a href="{{ route('blogs.emerging-trends-in-industrial-piping-for-2025-and-beyond') }}"
                                    class="default_link">Read More <i class="fa fa-angle-right"></i></a>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="default-blog-news wow fadeInUp animated animated"
                        style="visibility: visible; animation-name: fadeInUp;">
                        <figure class="img-holder mb-0">
                            <a href="#"><img
                                    src="{{ asset('/assets/images/blog/indias-stainless-steel-export-industry.webp') }}"
                                    alt="News"></a>
                            <figcaption class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="{{ route('blogs.india’s-stainless-steel-export-industry') }}"><i
                                                class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                        <div class="lower-content">
                            <a href="{{ route('blogs.india’s-stainless-steel-export-industry') }}">
                                <h3 class="h5">India’s Stainless Steel Exports – Moksh Tubes Global Reach</h3>
                            </a>
                            <div class="post-meta">by Richards | 22 Comments | 17 Apr</div>
                            <div class="text">
                                <p>India continues to lead global exports of stainless steel pipes and fittings, with Moksh
                                    Tubes at the forefront of international markets.</p>
                            </div>
                            <div class="link">
                                <a href="{{ route('blogs.india’s-stainless-steel-export-industry') }}"
                                    class="default_link">Read More <i class="fa fa-angle-right"></i></a>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="default-blog-news wow fadeInUp animated animated"
                        style="visibility: visible; animation-name: fadeInUp;">
                        <figure class="img-holder mb-0">
                            <a href="#"><img src="{{ asset('assets/images/blog/Untitled.webp') }}"
                                    alt="News"></a>
                            <figcaption class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="{{ route('blogs.the-role-of-high-performance') }}"><i class="fa fa-link"
                                                aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                        <div class="lower-content">
                            <a href="{{ route('blogs.the-role-of-high-performance') }}">
                                <h3 class="h5">The Role of High Performance Alloys in Desalination Plants</h3>
                            </a>
                            <div class="post-meta">by Vincent | 16 Comments | 14 June</div>
                            <div class="text">
                                <p>Explore the use of ERW pipes, seamless tubes, and low carbon steel in desalination and
                                    water treatment projects.</p>
                            </div>
                            <div class="link">
                                <a href="{{ route('blogs.the-role-of-high-performance') }}" class="default_link">Read
                                    More <i class="fa fa-angle-right"></i></a>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>





    </section>

    <div class="container py-5 text-center ">
        <div class="section-title">
            <h2>International Market to Explore</h2>
        </div>
        <div class="col-md-8 mx-auto mt-4" style="position:relative;width:100%;aspect-ratio:3/2;overflow:hidden;">
            <img src="{{ asset('assets/images/map.png') }}" alt="International Market" style="position:absolute;top:0;left:0;width:100%;height:100%;object-fit:cover;">
        </div>

    </div>
    <!--Start faq content area-->
    <section class="faq-content-area sec-padd2">
        <div class="container">
            <div class="section-title center">
                <h2>FAQ's</h2>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="accordion-box">
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn active">
                                <h3>What types of metal products do you offer?</h3>
                            </div>
                            <div class="accord-content collapsed">
                                <p>We supply GI pipes, SS pipes, welded and seamless pipes, stainless steel sheets, metal
                                    plates, perforated sheets, and industrial fasteners.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h3>What are the uses of perforated metal sheets?</h3>
                            </div>
                            <div class="accord-content">
                                <p>Our perforated metal sheets are widely used for ventilation, filtration,
                                    soundproofing, and decorative applications in construction, machinery, and
                                    architecture. They can be customized with different hole patterns, sizes, and
                                    materials to suit your specific needs.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h3>Do you provide size or schedule charts?
                                </h3>
                            </div>
                            <div class="accord-content">
                                <p>Yes, we offer complete pipe size charts, nominal diameter (DN) references, and pipe
                                    schedule tables for all pipe types.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h3>Do you offer corrosion-resistant stainless steel sheets and plates?
                                </h3>
                            </div>
                            <div class="accord-content">
                                <p>Yes. Our stainless steel sheets and plates are highly corrosion-resistant and deliver
                                    long-lasting performance in marine, chemical, and industrial environments. They are
                                    available in various thicknesses, grades, and finishes to match your project
                                    requirements.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h3>Can I order custom-sized pipes or fittings?
                                </h3>
                            </div>
                            <div class="accord-content">
                                <p>Absolutely. We specialize in custom-fabricated fittings, special steel furniture, and
                                    custom SS railings according to client requirements.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End faq content area-->

@endsection

@section('jsscripts')
<script type="application/ld+json">
    @verbatim
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What types of metal products do you offer?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We supply GI pipes, SS pipes, welded and seamless pipes, stainless steel sheets, metal plates, perforated sheets, and industrial fasteners."
      }
    },
    {
      "@type": "Question",
      "name": "What are the uses of perforated metal sheets?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Our perforated metal sheets are widely used for ventilation, filtration, soundproofing, and decorative applications in construction, machinery, and architecture. They can be customized with different hole patterns, sizes, and materials to suit your specific needs."
      }
    },
    {
      "@type": "Question",
      "name": "Do you provide size or schedule charts?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we offer complete pipe size charts, nominal diameter (DN) references, and pipe schedule tables for all pipe types."
      }
    },
    {
      "@type": "Question",
      "name": "Do you offer corrosion-resistant stainless steel sheets and plates?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Our stainless steel sheets and plates are highly corrosion-resistant and deliver long-lasting performance in marine, chemical, and industrial environments. They are available in various thicknesses, grades, and finishes to match your project requirements."
      }
    },
    {
      "@type": "Question",
      "name": "Can I order custom-sized pipes or fittings?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Absolutely. We specialize in custom-fabricated fittings, special steel furniture, and custom SS railings according to client requirements."
      }
    }
  ]
}
@endverbatim
</script>
@endsection

