@extends('layouts.master')

@section('title', 'Stainless Steel & Nickel Alloy Pipes Supplier | Moksh Tubes')
@section(
    'meta_description',
    'Moksh Tubes & Fittings LLP supplies stainless steel, nickel alloy, titanium and special-alloy pipes, tubes, fittings and flanges.'
)
@section('canonical', url('/'))
{{-- OG overrides --}}
@section('og_image', asset('assets/images/slides/mokshtubes-banner-desktop.webp'))
@section('og_type', 'website')
@section('og_site_name', 'Moksh Tubes & Fittings LLP')
{{-- Preload the hero slide (LCP image) --}}
@section('extracss')
    <link rel="preload" as="image" href="{{ asset('assets/images/slides/mokshtubes-banner-desktop.webp') }}"
        type="image/webp" fetchpriority="high">
@endsection
@section('content')
        <style>
            /* Custom Premium Styles - Theme Colors Applied */
            .premium-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
                gap: 20px;
            }

            .premium-card {
                background: #ffffff;
                border: 1px solid #eaeaea;
                border-radius: 8px;
                padding: 20px;
                display: flex;
                align-items: center;
                gap: 15px;
                transition: all 0.3s ease;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.02);
            }

            .premium-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
                border-color: var(--brown);
            }

            .premium-card .icon-wrapper {
                background: rgba(219, 114, 39, 0.1);
                /* light theme color */
                color: var(--brown);
                width: 50px;
                height: 50px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 20px;
                flex-shrink: 0;
            }

            .premium-card h4 {
                margin: 0;
                font-size: 16px;
                font-weight: 600;
                line-height: 1.4;
                color: #333;
            }

            .industry-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
                gap: 15px;
            }

            .industry-card {
                background: #fff;
                border-radius: 8px;
                padding: 20px 15px;
                text-align: center;
                border: 1px solid #eee;
                transition: all 0.3s ease;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.02);
            }

            .industry-card i {
                display: block;
                font-size: 28px;
                color: var(--brown);
                margin-bottom: 15px;
                transition: all 0.3s ease;
            }

            .industry-card span {
                font-weight: 600;
                font-size: 15px;
                color: #444;
            }

            .industry-card:hover {
                background: var(--brown);
                border-color: var(--brown);
                transform: translateY(-3px);
                box-shadow: 0 8px 15px rgba(219, 114, 39, 0.3);
            }

            .industry-card:hover i,
            .industry-card:hover span {
                color: #fff;
            }

            .materials-flex {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                gap: 12px;
            }

            .material-pill {
                background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
                border: 1px solid #dee2e6;
                padding: 12px 24px;
                border-radius: 30px;
                font-weight: 600;
                color: #333;
                transition: all 0.3s ease;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.02);
            }

            .material-pill:hover {
                background: linear-gradient(135deg, var(--brown) 0%, #b95e1c 100%);
                color: #fff;
                border-color: var(--brown);
                transform: translateY(-2px);
                box-shadow: 0 4px 10px rgba(219, 114, 39, 0.4);
            }

            .export-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
                gap: 15px;
            }

            .export-item {
                background: #fff;
                border: 1px solid #f0f0f0;
                padding: 12px 15px;
                border-radius: 8px;
                display: flex;
                align-items: center;
                gap: 12px;
                font-weight: 600;
                color: #555;
                transition: all 0.3s ease;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.02);
            }

            .export-item:hover {
                border-color: var(--brown);
                color: var(--brown);
                background: #fffdfc;
                box-shadow: 0 6px 12px rgba(219, 114, 39, 0.15);
                transform: translateY(-2px);
            }

            .export-item i {
                color: var(--brown);
                font-size: 18px;
            }
        </style>



        <!--Start rev slider wrapper-->
        <section class="rev_slider_wrapper">
            <div id="slider1" class="rev_slider" data-version="5.0">
                <ul>
                    <li data-transition="slidingoverlayleft">
                        <img src="{{ asset('assets/images/slides/mokshtubes-banner-desktop.webp') }}"
                            alt="Stainless Steel Welded Pipes ERW EFW ASTM A312" width="1920" height="880" fetchpriority="high"
                            data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1">

                        <div class="tp-caption  tp-resizeme" data-x="left" data-hoffset="15" data-y="center" data-voffset="-50"
                            data-transform_idle="o:1;"
                            data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none"
                            data-responsive_offset="on" data-start="700">
                            <div class="slide-content-box">
                                <div class="slide-brand-line" style="font-size: 16px; font-weight: 600; letter-spacing: 2px; text-transform: uppercase; margin-bottom: 10px;">Moksh Tubes &amp; Fittings LLP</div>
                                <h1>Stainless Steel &amp; Nickel Alloy Pipes, <br>Tubes &amp; Fittings Supplier</h1>

                                <p>Seamless & Welded Pipes/Tubes in SS 304/316/321/904L, <br>Inconel & Hastelloy with MTC (EN
                                    10204 3.1), PMI & Hydro Test ready stock<br>
                                    Cut to length, export grade packing, fast dispatch across India, the Middle East (GCC), Europe &amp; North America</p>
                            </div>
                        </div>
                        <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="15" data-y="center" data-voffset="110"
                            data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-splitin="none"
                            data-splitout="none" data-responsive_offset="on" data-start="2300">
                            <div class="slide-content-box">
                                <div class="button">
                                    <button type="button" class="thm-btn bg-clr1" data-bs-toggle="modal"
                                        data-bs-target="#contactFormModal">Get Quote</button>
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
                                    <a class="thm-btn bg-clr2" href="https://wa.me/919769584950" target="_blank">WhatsApp
                                        Now</a>
                                </div>
                            </div>
                        </div>

                    </li>



                    <li data-transition="slidingoverlayleft">
                        <img src="{{ asset('assets/images/slides/carpenteria-interno.webp') }}" alt="Welder in protective mask welding a steel pipe in a fabrication workshop" width="1920"
                            height="880" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat"
                            data-bgparallax="1" loading="lazy">

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
                        <div class="tp-caption tp-resizeme" data-x="right" data-hoffset="440" data-y="center" data-voffset="110"
                            data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-splitin="none"
                            data-splitout="none" data-responsive_offset="on" data-start="2300">
                            <div class="slide-content-box">
                                <div class="button">
                                    <button type="button" class="thm-btn bg-clr1" data-bs-toggle="modal"
                                        data-bs-target="#contactFormModal">Get Quote</button>
                                </div>
                            </div>
                        </div>
                        <div class="tp-caption tp-resizeme" data-x="right" data-hoffset="190" data-y="center" data-voffset="110"
                            data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-splitin="none"
                            data-splitout="none" data-responsive_offset="on" data-start="2600">
                            <div class="slide-content-box">
                                <div class="button">
                                    <a class="thm-btn bg-clr2" href="https://wa.me/919769584950" target="_blank">WhatsApp
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li data-transition="slidingoverlayright">
                        <img src="{{ asset('assets/images/slides/we-help.webp') }}" alt="Team of professionals discussing a project around a table in an industrial-style office" width="1920" height="550"
                            data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1"
                            loading="lazy">

                        <div class="tp-caption  tp-resizeme" data-x="left" data-hoffset="15" data-y="center" data-voffset="-50"
                            data-transform_idle="o:1;"
                            data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none"
                            data-responsive_offset="on" data-start="700">
                            <div class="slide-content-box">
                                <h2 class="hero-title">We help Industries <br> innovate and grow</h2>
                                <p>Cut‑to‑length, export‑grade packing<br> fast dispatch across India, the Middle East (GCC), Europe &amp; North America</p>

                            </div>
                        </div>
                        <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="15" data-y="center" data-voffset="110"
                            data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-splitin="none"
                            data-splitout="none" data-responsive_offset="on" data-start="2300">
                            <div class="slide-content-box">
                                <div class="button">
                                    <button type="button" class="thm-btn bg-clr1" data-bs-toggle="modal"
                                        data-bs-target="#contactFormModal">Get Quote</button>
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
                                    <a class="thm-btn bg-clr2" href="https://wa.me/919769584950" target="_blank">WhatsApp
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </li>



                </ul>
            </div>
        </section>
        <!--End rev slider wrapper-->


        <section class="about-us sec-padd-top sec-padd-bottom bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">

                        <figure class="about-img">
                            <img src="{{ asset('assets/images/about/about-moksh-tubes.webp') }}" width="1000" height="700"
                                alt="Workers inspecting machined stainless steel components in a factory">
                        </figure>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="about-text">
                            <h2>
                                About <span class="thm-color">Moksh Tubes & Fittings LLP</span>
                            </h2>
                            <div class="text">
                                <p>Welcome to Moksh Tubes & Fittings LLP, a trusted provider of stainless steel and nickel alloy
                                    pipes, tubes and fittings in seamless and welded forms. With over 20 years of experience and
                                    projects delivered in over 12 countries, we supply austenitic and duplex stainless steels,
                                    nickel alloys such as Inconel, Monel, Incoloy and Hastelloy, titanium, and hard-to-find
                                    special alloys for oil & gas, chemical, power and engineering applications.</p>
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

        <!-- Best Selling Products Section -->
        <section class="best-selling-products sec-padd-top sec-padd-bottom" style="background-color: #f9f9f9;">
            <div class="container">
                <div class="section-title center">
                    <h2>Best Selling Products</h2>
                </div>
                <div class="row">
                    <!-- Seamless Pipes -->
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-4">
                        <div class="single-our-service border" style="background: #fff;">
                            <figure class="img-box mb-0">
                                <a class="w-100" href="{{ url('products/pipes-tubes/seamless-pipes') }}">
                                    <img src="/assets/images/service/seamless-pipes.webp" width="370" height="190" alt="Seamless Pipes" class="w-100"
                                        loading="lazy">
                                </a>
                            </figure>
                            <div class="p-3 text-left">
                                <a href="{{ url('products/pipes-tubes/seamless-pipes') }}">
                                    <h3 class="mt-0 h5">Seamless Pipes</h3>
                                </a>
                                <p>High-strength, leak-proof pipes perfect for high-pressure industrial applications.</p>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#contactFormModal"
                                    class="thm-btn bg-clr1 mt-2" style=" font-size: 14px;">Get Price</button>
                            </div>
                        </div>
                    </div>

                    <!-- Welded Pipes -->
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-4">
                        <div class="single-our-service border" style="background: #fff;">
                            <figure class="img-box mb-0">
                                <a class="w-100" href="{{ url('products/pipes-tubes/welded-pipes') }}">
                                    <img src="/assets/images/service/welded-pipes.webp" width="370" height="190" alt="Welded Pipes" class="w-100"
                                        loading="lazy">
                                </a>
                            </figure>
                            <div class="p-3 text-left">
                                <a href="{{ url('products/pipes-tubes/welded-pipes') }}">
                                    <h3 class="mt-0 h5">Welded Pipes (ERW/EFW)</h3>
                                </a>
                                <p>Cost-effective and durable pipes suitable for structural and general engineering use.</p>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#contactFormModal"
                                    class="thm-btn bg-clr1 mt-2" style=" font-size: 14px;">Get Price</button>
                            </div>
                        </div>
                    </div>

                    <!-- Boiler & Heat Exchanger Tubes -->
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-4">
                        <div class="single-our-service border" style="background: #fff;">
                            <figure class="img-box mb-0">
                                <a class="w-100" href="{{ url('products/pipes-tubes/boiler-heat-exchanger-tubes') }}">
                                    <img src="/assets/images/product/boiler-heat-exchanger-tubes-thumb.webp" width="370" height="190" alt="Boiler Tubes"
                                        class="w-100" loading="lazy">
                                </a>
                            </figure>
                            <div class="p-3 text-left">
                                <a href="{{ url('products/pipes-tubes/boiler-heat-exchanger-tubes') }}">
                                    <h3 class="mt-0 h5">Boiler & Heat Exchanger Tubes</h3>
                                </a>
                                <p>Designed to withstand high temperatures and pressure in critical heat transfer systems.</p>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#contactFormModal"
                                    class="thm-btn bg-clr1 mt-2" style=" font-size: 14px;">Get Price</button>
                            </div>
                        </div>
                    </div>

                    <!-- Inconel / Hastelloy Pipes -->
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-4">
                        <div class="single-our-service border" style="background: #fff;">
                            <figure class="img-box mb-0">
                                <a class="w-100" href="{{ route('materials.inconel') }}">
                                    <img src="/assets/images/inconel/inconel-625-thumb.webp" width="370" height="190" alt="Inconel Pipes" class="w-100"
                                        loading="lazy">
                                </a>
                            </figure>
                            <div class="p-3 text-left">
                                <h3 class="mt-0 h5"><a href="{{ route('materials.inconel') }}">Inconel</a> /
                                    <a href="{{ route('materials.hastelloy') }}">Hastelloy</a> Pipes</h3>
                                <p>Superior corrosion and oxidation resistance for the most extreme environments.</p>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#contactFormModal"
                                    class="thm-btn bg-clr1 mt-2" style=" font-size: 14px;">Get Price</button>
                            </div>
                        </div>
                    </div>

                    <!-- SS 316 Pipes -->
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-4">
                        <div class="single-our-service border" style="background: #fff;">
                            <figure class="img-box mb-0">
                                <a class="w-100" href="{{ route('materials.austenitic-stainless-steel.grade', 'austenitic-stainless-steel-316') }}">
                                    <img src="/assets/images/austenitic-stainless-steel/austenitic-stainless-steel-316-thumb.webp" width="370" height="190"
                                        alt="SS 316 Pipes" class="w-100" loading="lazy">
                                </a>
                            </figure>
                            <div class="p-3 text-left">
                                <a href="{{ route('materials.austenitic-stainless-steel.grade', 'austenitic-stainless-steel-316') }}">
                                    <h3 class="mt-0 h5">SS 316 Pipes</h3>
                                </a>
                                <p>Excellent corrosion resistance, ideal for chemical, marine, and medical applications.</p>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#contactFormModal"
                                    class="thm-btn bg-clr1 mt-2" style=" font-size: 14px;">Get Price</button>
                            </div>
                        </div>
                    </div>

                    <!-- Stainless Steel Sheets & Plates -->
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-4">
                        <div class="single-our-service border" style="background: #fff;">
                            <figure class="img-box mb-0">
                                <a class="w-100" href="{{ url('products/sheets-plates-coils/sheets-and-plates') }}">
                                    <img src="/assets/images/service/sheets-plates.webp" width="370" height="190" alt="Stainless Steel Sheets & Plates"
                                        class="w-100" loading="lazy">
                                </a>
                            </figure>
                            <div class="p-3 text-left">
                                <a href="{{ url('products/sheets-plates-coils/sheets-and-plates') }}">
                                    <h3 class="mt-0 h5">Stainless Steel Sheets & Plates</h3>
                                </a>
                                <p>High-quality SS sheets and plates available in various grades and finishes for diverse gauge.
                                </p>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#contactFormModal"
                                    class="thm-btn bg-clr1 mt-2" style=" font-size: 14px;">Get Price</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Trust & Urgency Badges -->






        <!-- Materials We Supply Section -->




        <section class="all-products-container sec-padd2 ">
            <div class="container">
                <div class="section-title center">
                    <h2>Our Product Range</h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-col service-col">
                            <h3 class="footer-title h4">Pipes & Tubes</h3>
                            <ul class="footer-list">
                                <li><a href="{{ url('products/pipes-tubes/welded-pipes') }}">WELDED PIPES (ERW & EFW)</a>
                                </li>
                                <li><a href="{{ url('products/pipes-tubes/seamless-pipes') }}">SEAMLESS PIPES</a></li>
                                <li><a href="{{ url('products/pipes-tubes/capillaries') }}">CAPILLARY TUBES</a></li>
                                <li><a href="{{ url('products/pipes-tubes/hollow-section-pipe') }}">HOLLOW SECTION PIPE
                                        (SQUARE, RECTANGULAR & OVAL)</a></li>
                                <li><a href="{{ url('products/pipes-tubes/u-bent-tubes') }}">U-BENT TUBES</a></li>
                                <li><a href="{{ url('products/pipes-tubes/boiler-heat-exchanger-tubes') }}">BOILER & HEAT
                                        EXCHANGER TUBES</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-col service-col">
                            <h3 class="footer-title h4">Sheets, Plates & Coils</h3>
                            <ul class="footer-list">
                                <li><a href="{{ route('products.sheets-plates-coils') }}">SHEETS & PLATES</a></li>
                                <li><a href="{{ url('products/sheets-plates-coils/coils') }}">COILS</a></li>
                                <li><a href="{{ url('products/sheets-plates-coils/strips') }}">STRIPS</a></li>
                                <li><a href="{{ url('products/sheets-plates-coils/perforated-sheets') }}">PERFORATED
                                        SHEETS</a></li>
                                <li><a href="{{ url('products/sheets-plates-coils/chequered-sheets') }}">CHEQUERED
                                        SHEETS</a></li>
                                <li><a href="{{ url('products/sheets-plates-coils/shim-sheets') }}">SHIM SHEETS</a></li>
                                <li><a href="{{ url('products/sheets-plates-coils/cladded-plates') }}">CLADDED PLATES</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-col service-col">
                            <h3 class="footer-title h4">Bars & Rods</h3>
                            <ul class="footer-list">
                                <li><a href="{{ url('products/bars-rods/round-bars') }}">ROUND BARS</a></li>
                                <li><a href="{{ url('products/bars-rods/hexagon-bars') }}">HEXAGON BARS</a></li>
                                <li><a href="{{ url('products/bars-rods/flat-bars') }}">FLAT BARS</a></li>
                                <li><a href="{{ url('products/bars-rods/square-bars') }}">SQUARE BARS</a></li>
                                <li><a href="{{ url('products/bars-rods/threaded-rods') }}">THREADED RODS</a></li>
                                <li><a href="{{ url('products/bars-rods/hollow-bars') }}">HOLLOW BARS</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="footer-col service-col">
                            <h3 class="footer-title h4">Pipe Fittings, Flanges & Fasteners</h3>
                            <ul class="footer-list">
                                <li><a href="{{ route('products.pipe-fittings-flanges-fasteners') }}">FITTINGS</a></li>
                                <li><a href="{{ url('products/flanges/flanges-and-gaskets') }}">FLANGES</a>
                                </li>
                                <li><a href="{{ route('products.fasteners') }}">FASTENERS</a>
                                </li>
                                <li><a href="{{ url('products/flanges/flanges-and-gaskets') }}">GASKETS</a>
                                </li>
                                <li><a href="{{ url('products/pipe-fittings-flanges-fasteners/custom-fabricated-fittings') }}">CUSTOM
                                        FABRICATED FITTINGS</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="footer-col service-col">
                            <h3 class="footer-title h4">Special Fabricated Products</h3>
                            <ul class="footer-list">
                                <li><a href="{{ url('products/special-fabricated/ss-railings') }}">SS RAILING PRODUCTS</a>
                                </li>
                                <li><a href="{{ url('products/special-fabricated/glass-railings') }}">GLASS RAILINGS</a>
                                </li>
                                <li><a href="{{ url('products/special-fabricated/custom-steel-furniture') }}">CUSTOM STEEL
                                        FURNITURE</a></li>
                                <li><a href="{{ url('products/special-fabricated/fabricated-ss-grills') }}">FABRICATED SS
                                        GRILLS</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Industries We Serve Section -->
        <section class="industries-we-serve sec-padd-top sec-padd-bottom" style="background-color: #f9f9f9;">
            <div class="container">
                <div class="section-title center">
                    <h2>Industries We Serve</h2>
                </div>
                <div class="row mb-4">
                    <div class="col-md-12 text-center">
                        <p>Our products are trusted by companies operating in some of the world's most demanding industries. We
                            supply materials designed to perform reliably under high pressure, elevated temperatures, corrosive
                            environments, and heavy mechanical loads.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-4">
                        <div class="industry-grid">
                            <div class="industry-card"><i class="fa fa-tint"></i><span>Oil & Gas</span></div>
                            <div class="industry-card"><i class="fa fa-flask"></i><span>Petrochemical</span></div>
                            <div class="industry-card"><i class="fa fa-fire"></i><span>Chemical Processing</span></div>
                            <div class="industry-card"><i class="fa fa-industry"></i><span>Refineries</span></div>
                            <div class="industry-card"><i class="fa fa-bolt"></i><span>Power Generation</span></div>
                            <div class="industry-card"><i class="fa fa-ship"></i><span>Marine & Shipbuilding</span></div>
                            <div class="industry-card"><i class="fa fa-medkit"></i><span>Pharmaceutical</span></div>
                            <div class="industry-card"><i class="fa fa-cutlery"></i><span>Food Processing</span></div>
                            <div class="industry-card"><i class="fa fa-leaf"></i><span>Water Treatment</span></div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-12 text-center">
                        <p>No matter the industry, our team can recommend the right material to match your application,
                            operating conditions, and performance requirements.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="brand-area sec-padd-top sec-padd-bottom">
            <div class="container">
                <div class="section-title center">
                    <h2>Some of Our Esteemed Clients</h2>
                </div>
                <div class="brand-carousel owl-carousel owl-theme brand">
                    <div class="single-item">
                        <a href="javascript:void(0);">
                            <img src="{{ asset('assets/images/bharat-heavy-electricals-limited.jpg') }}" width="612" height="355"
                                alt="Bharat Heavy Electricals Limited (BHEL)">
                            <p class="company-name">Bharat Heavy Electricals Limited (BHEL)</p>
                        </a>
                    </div>
                    <div class="single-item">
                        <a href="javascript:void(0);">
                            <img src="{{ asset('assets/images/maharashtra-seamless-limited-logo.png') }}" width="1200" height="666"
                                alt="Maharashtra Seamless Limited (MSL)">
                            <p class="company-name">Maharashtra Seamless Limited (MSL)</p>
                        </a>
                    </div>
                    <div class="single-item">
                        <a href="javascript:void(0);">
                            <img src="{{ asset('assets/images/nuclear-power-corporation-of-india-limited.webp') }}" width="449" height="160"
                                alt="Nuclear Power Corporation of India Limited (NPCIL)">
                            <p class="company-name">Nuclear Power Corporation of India Limited (NPCIL)</p>
                        </a>
                    </div>
                    <div class="single-item">
                        <a href="javascript:void(0);">
                            <img src="{{ asset('assets/images/chemdist-process-solutions-logo.jpg') }}" width="674" height="296"
                                alt="Chemdist Process Solutions Private Limited">
                            <p class="company-name">Chemdist Process Solutions Pvt Ltd</p>
                        </a>
                    </div>
                    <div class="single-item">
                        <a href="javascript:void(0);">
                            <img src="{{ asset('assets/images/ssepl-techno-logo.png') }}" width="359" height="185"
                                alt="SSEPL Techno Private Limited">
                            <p class="company-name">SSEPL Techno Private Limited</p>
                        </a>
                    </div>
                </div>
            </div>
        </section>



        <!-- Certifications Section -->
        <section class="certifications-section sec-padd2">
            <div class="container">
                <div class="section-title center">
                    <h2>Our <span class="thm-color">Certifications &amp; Registrations</span></h2>
                    <p>Our quality certifications (ISO 9001:2015 and PED) and our government business registration (UDYAM).</p>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12 mb-4">
                        <div class="single-our-service cert-card border p-4 text-center rounded shadow-sm">
                            <div class="mb-3">
                                <a href="{{ asset('assets/certificates/iso-9001-2015-certificate-moksh-steel.pdf') }}" target="_blank">
                                    <img src="{{ asset('assets/images/iso-9001-certificate.png') }}" width="514" height="728" alt="ISO 9001 Certificate"
                                        class="img-fluid border cert-img">
                                </a>
                            </div>
                            <h3 class="mt-0 mb-2 h5">ISO 9001:2015</h3>
                            <p class="mb-1 text-muted">Quality Management System</p>
                            <p class="mb-4 small text-muted">Issued to: Moksh Steel</p>
                            <a href="{{ asset('assets/certificates/iso-9001-2015-certificate-moksh-steel.pdf') }}" target="_blank"
                                class="thm-btn bg-clr1 cert-btn">View Certificate</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 mb-4">
                        <div class="single-our-service cert-card border p-4 text-center rounded shadow-sm">
                            <div class="mb-3">
                                <a href="{{ asset('assets/certificates/udyam-registration-moksh-tubes-fittings-llp.pdf') }}" target="_blank">
                                    <img src="{{ asset('assets/images/udyam-certificate.png') }}" width="517" height="708" alt="UDYAM MSME Registration Certificate"
                                        class="img-fluid border cert-img">
                                </a>
                            </div>
                            <h3 class="mt-0 mb-2 h5">UDYAM Registration</h3>
                            <p class="mb-1 text-muted">MSME business registration, Government of India</p>
                            <p class="mb-1 small text-muted">Registers the business as a Micro enterprise. It is not a quality certification.</p>
                            <p class="mb-4 small text-muted">Issued to: Moksh Tubes &amp; Fittings LLP (UDYAM-MH-19-0367411)</p>
                            <a href="{{ asset('assets/certificates/udyam-registration-moksh-tubes-fittings-llp.pdf') }}" target="_blank"
                                class="thm-btn bg-clr1 cert-btn">View Registration</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 mb-4">
                        <div class="single-our-service cert-card border p-4 text-center rounded shadow-sm">
                            <div class="mb-3">
                                <a href="{{ asset('assets/certificates/ped-certificate-moksh-steel.pdf') }}" target="_blank">
                                    <img src="{{ asset('assets/images/ped-certificate.png') }}" width="516" height="671" alt="PED Certificate"
                                        class="img-fluid border cert-img">
                                </a>
                            </div>
                            <h3 class="mt-0 mb-2 h5">PED Certificate</h3>
                            <p class="mb-1 text-muted">Pressure Equipment Directive</p>
                            <p class="mb-4 small text-muted">Issued to: Moksh Steel</p>
                            <a href="{{ asset('assets/certificates/ped-certificate-moksh-steel.pdf') }}" target="_blank"
                                class="thm-btn bg-clr1 cert-btn">View Certificate</a>
                        </div>
                    </div>
                </div>
                <p class="text-center text-muted small mt-2 mb-0">
                    <strong>About the names on these documents:</strong> This website is operated by
                    Moksh Tubes &amp; Fittings LLP ("MTF LLP"), the holder of the UDYAM registration above.
                    The ISO 9001:2015 and PED certificates are issued in the name of Moksh Steel, registered at our
                    Kamatipura premises: Ground Floor, 4, 95/95A, Dawood Baug, Sukhlaji Street, Kamatipura,
                    Mumbai&nbsp;400008. This is the same address as on the UDYAM registration.
                </p>
            </div>
        </section>


        <div class="container mt-5 text-center bg-white ">
            <div class="section-title">
                <h2>Markets We Serve</h2>
            </div>
            <div class="col-md-8 mx-auto mt-4" style="position:relative;width:100%;aspect-ratio:3/2;overflow:hidden;">
                <img src="{{ asset('assets/images/map.jpg') }}" width="700" height="400" alt="World map of markets we serve"
                    style="position:absolute;top:0;left:0;width:100%;object-fit:cover;">
            </div>

        </div>

        <!--End Certifications Section-->

        <!-- Global Export & Quality Assurance Section -->

          <section class="blog-section sec-padd2">
            <div class="container">
                <div class="section-title">
                    <h2>Blogs</h2>
                </div>
                <div class="row">
                    @foreach ($blogs as $blog)
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="default-blog-news wow fadeInUp animated">

                                <figure class="img-holder mb-0">
                                    <a href="{{ route('frontend.single-blog', $blog->slug) }}">
                                        <img src="{{ asset('storage/' . $blog->cover_image) }}" alt="{{ $blog->title }}"
                                            loading="lazy">
                                    </a>
                                    <figcaption class="overlay">
                                        <div class="box">
                                            <div class="content">
                                                <a href="{{ route('frontend.single-blog', $blog->slug) }}">
                                                    <i class="fa fa-link" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                                <div class="lower-content">
                                    <a href="{{ route('frontend.single-blog', $blog->slug) }}">
                                        <h5>{{ Str::limit($blog->title, 30) }}</h5>
                                    </a>

                                    <div class="post-meta">
                                        by {{ $blog->author ?? 'Admin' }} |
                                        {{ $blog->created_at->format('F d, Y') }}
                                    </div>

                                    {!! \Str::limit(strip_tags($blog->content, '<i>'), 120) !!}

                                    <div class="link">
                                        <a href="{{ route('frontend.single-blog', $blog->slug) }}" class="default_link">
                                            Read More <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>


         <!-- Why Choose Us Section -->
        <section class="why-choose-us sec-padd-bottom">
            <div class="container">
                <div class="section-title center">
                    <h2>Why Choose Moksh Tubes & Fittings LLP?</h2>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center mb-4">
                        <p>Selecting the right supplier is just as important as choosing the right material. Moksh Tubes &
                            Fittings LLP works under an ISO 9001:2015 certified quality management system and holds PED
                            certification for pressure equipment supply.</p>
                        <p>All applicable products are supplied with EN 10204 3.1 Mill Test Certificates, and we offer Positive Material
                            Identification (PMI), hydrostatic testing and third-party inspection for stainless steel, nickel
                            alloys, titanium, engineering steels, aluminium alloys, copper alloys and other specialty metals.
                        </p>
                        <p>Whether you require standard products or custom-manufactured components, our experienced team ensures
                            every order meets your exact technical specifications and delivery requirements.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="premium-grid">
                            <div class="premium-card">
                                <div class="icon-wrapper"><i class="fa fa-shield-halved"></i></div>
                                <h4>ISO 9001:2015 & PED Certified</h4>
                            </div>
                            <div class="premium-card">
                                <div class="icon-wrapper"><i class="fa fa-flask"></i></div>
                                <h4>Positive Material Identification (PMI)</h4>
                            </div>
                            <div class="premium-card">
                                <div class="icon-wrapper"><i class="fa fa-certificate"></i></div>
                                <h4>Mill Test Certificates (EN 10204 3.1)</h4>
                            </div>
                            <div class="premium-card">
                                <div class="icon-wrapper"><i class="fa fa-search"></i></div>
                                <h4>Third-Party Inspection Available</h4>
                            </div>
                            <div class="premium-card">
                                <div class="icon-wrapper"><i class="fa fa-scissors"></i></div>
                                <h4>Custom Sizes & Cutting Services</h4>
                            </div>
                            <div class="premium-card">
                                <div class="icon-wrapper"><i class="fa fa-droplet"></i></div>
                                <h4>Hydrostatic Testing</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Start faq content area-->
        <section class="faq-content-area sec-padd2">
            <div class="container">
                <div class="section-title center">
                    <h2>Frequently Asked Questions</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="accordion-box">
                            <!--Start single accordion box-->
                            <div class="accordion accordion-block">
                                <div class="accord-btn active">
                                    <h3>Do you supply stainless steel pipes in custom sizes?</h3>
                                </div>
                                <div class="accord-content">
                                    <p>Yes. We offer custom lengths, diameters, wall thicknesses, and cutting services based on
                                        project requirements.</p>
                                </div>
                            </div>
                            <!--End single accordion box-->
                            <!--Start single accordion box-->
                            <div class="accordion accordion-block">
                                <div class="accord-btn">
                                    <h3>Do you provide Mill Test Certificates?</h3>
                                </div>
                                <div class="accord-content">
                                    <p>Yes. All applicable products can be supplied with EN 10204 3.1 Mill Test Certificates.
                                    </p>
                                </div>
                            </div>
                            <!--End single accordion box-->
                            <!--Start single accordion box-->
                            <div class="accordion accordion-block">
                                <div class="accord-btn">
                                    <h3>Which industries do you serve?</h3>
                                </div>
                                <div class="accord-content">
                                    <p>We supply products for oil & gas, petrochemical, chemical processing, refineries,
                                        power generation, marine & shipbuilding, pharmaceutical, food processing, water
                                        treatment, and many other industries.</p>
                                </div>
                            </div>
                            <!--End single accordion box-->
                            <!--Start single accordion box-->
                            <div class="accordion accordion-block">
                                <div class="accord-btn">
                                    <h3>Do you export outside India?</h3>
                                </div>
                                <div class="accord-content">
                                    <p>Yes. We regularly export industrial metal products to customers across the Middle East (GCC), Europe,
                                        North America, Asia and other international markets.</p>
                                </div>
                            </div>
                            <!--End single accordion box-->
                            <!--Start single accordion box-->
                            <div class="accordion accordion-block">
                                <div class="accord-btn">
                                    <h3>Can you arrange third-party inspection?</h3>
                                </div>
                                <div class="accord-content">
                                    <p>Yes. Third-party inspection can be arranged through internationally recognized inspection
                                        agencies upon request.</p>
                                </div>
                            </div>
                            <!--End single accordion box-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End faq content area-->

        <!-- Inquiry Form Section -->
        <section id="contact-form" class="contact-form-section sec-padd-top sec-padd-bottom bg-light">
            <div class="container">
                <div class="section-title center">
                    <h2>Request a <span class="thm-color">Quote</span></h2>
                    <p>Looking for <strong>Stainless Steel Pipes, Sheets, Plates, or Custom Engineering
                            solutions</strong>?<br>Fill out the form below and our experts will get back to you within 30
                        minutes during business hours.</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <form id="quote-form" action="{{ url('sendmail') }}" method="POST"
                            class="default-form contact-form border p-4 bg-white shadow-sm rounded">
                            @csrf
                            <div class="row">
                                <!-- Honeypot Anti-Bot Field -->
                                <input type="text" name="website" style="display:none !important;" tabindex="-1"
                                    autocomplete="off">
                                <div class="col-md-6 mb-3">
                                    <input type="text" name="form_name" class="form-control" placeholder="Your Name*" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="tel" name="form_phone" class="form-control" placeholder="Phone Number">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <input type="email" name="form_email" class="form-control" placeholder="Email Address*" required>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <textarea name="form_message" class="form-control" placeholder="Your Requirement*" required
                                        rows="4"></textarea>
                                </div>
                                <div class="col-md-12 mb-3 d-none">
                                    <input id="form_botcheck_quote" name="form_botcheck" type="hidden" value="">
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"
                                            style="margin-bottom:10px;"></div>
                                    </div>
                                </div>
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="thm-btn bg-clr1 px-5">Get Quote Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--End Inquiry Form Section-->




@endsection

@section('jsscripts')
    @verbatim
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Do you supply stainless steel pipes in custom sizes?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. We offer custom lengths, diameters, wall thicknesses, and cutting services based on project requirements."
              }
            },
            {
              "@type": "Question",
              "name": "Do you provide Mill Test Certificates?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. All applicable products can be supplied with EN 10204 3.1 Mill Test Certificates."
              }
            },
            {
              "@type": "Question",
              "name": "Which industries do you serve?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "We supply products for oil & gas, petrochemical, chemical processing, refineries, power generation, marine & shipbuilding, pharmaceutical, food processing, water treatment, and many other industries."
              }
            },
            {
              "@type": "Question",
              "name": "Do you export outside India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. We regularly export industrial metal products to customers across the Middle East (GCC), Europe, North America, Asia and other international markets."
              }
            },
            {
              "@type": "Question",
              "name": "Can you arrange third-party inspection?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Third-party inspection can be arranged through internationally recognized inspection agencies upon request."
              }
            }
          ]
        }
        </script>
    @endverbatim
    @if (session('status') && session('msg'))
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            Swal.fire({
                icon: "{{ session('status') === 'success' ? 'success' : 'error' }}",
                title: "{{ session('status') === 'success' ? 'Success' : 'Error' }}",
                text: "{{ session('msg') }}",
                confirmButtonColor: "#1a73e8"
            });
        </script>
    @endif
@endsection
@push('vendor-scripts')
    <!-- Revolution slider (tools, core, layeranimation, navigation, slideanims, parallax, migration) -->
    <script src="{{ asset('assets/js/revolution.bundle.min.js') }}" defer></script>
    <!-- Owl carousel, jquery.appear, countTo -->
    <script src="{{ asset('assets/js/counter-carousel.bundle.min.js') }}" defer></script>
@endpush
