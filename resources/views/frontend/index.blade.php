@extends('layouts.master')

@section('title', 'Moksh Tubes LLP | High-Performance Metal Alloys & Products')
@section('meta_description',
    'Leading supplier of stainless steel, nickel alloys, titanium and special metals. Moksh
    Tubes LLP delivers pipes, tubes, fittings and custom alloy solutions worldwide.')
@section('meta_keywords',
    'stainless steel pipes, nickel alloy pipes, titanium pipes, stainless steel tubes, nickel alloy tubes,
    titanium tubes, stainless steel fittings, nickel alloy fittings, titanium fittings, seamless pipes, welded pipes,
    high-quality metal pipes, industrial metal tubes, corrosion-resistant pipes, durable metal fittings,
    ISO-certified metal products')
@section('canonical', url('/'))
{{-- OG overrides --}}
@section('og_image', asset('assets/images/slides/Mokshtubes-banner-desktop.webp'))
@section('og_type', 'website')
@section('content')
<style>
/* Custom Premium Styles - Theme Colors Applied */
.premium-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
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
    box-shadow: 0 4px 6px rgba(0,0,0,0.02);
}
.premium-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.08);
    border-color: var(--brown); 
}
.premium-card .icon-wrapper {
    background: rgba(219, 114, 39, 0.1); /* light theme color */
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
    box-shadow: 0 2px 5px rgba(0,0,0,0.02);
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
.industry-card:hover i, .industry-card:hover span {
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
    box-shadow: 0 2px 4px rgba(0,0,0,0.02);
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
    box-shadow: 0 2px 4px rgba(0,0,0,0.02);
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
                    <img src="{{ asset('assets/images/slides/Mokshtubes-banner-desktop.webp') }}"
                        alt="Stainless Steel Welded Pipes ERW EFW ASTM A312" width="1920" height="880" loading="lazy"
                        data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1">

                    <div class="tp-caption  tp-resizeme" data-x="left" data-hoffset="15" data-y="center" data-voffset="-50"
                        data-transform_idle="o:1;"
                        data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none"
                        data-responsive_offset="on" data-start="700">
                        <div class="slide-content-box">
                            <h1>Stainless Steel & Nickel Alloy Pipes <br>Moksh Tubes LLP</h1>

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
                                <a class="thm-btn bg-clr1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#contactFormModal">Get Quote</a>
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
                                <a class="thm-btn bg-clr2" href="https://wa.me/919769584950" target="_blank">WhatsApp Now</a>
                            </div>
                        </div>
                    </div>

                </li>



                <li data-transition="slidingoverlayleft">
                    <img src="{{ asset('assets/images/slides/carpenteria-interno.webp') }}" alt="banner image"
                        width="1920" height="880" data-bgposition="top center" data-bgfit="cover"
                        data-bgrepeat="no-repeat" data-bgparallax="1" loading="lazy">

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
                                <a class="thm-btn bg-clr1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#contactFormModal">Get Quote</a>
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
                                <a class="thm-btn bg-clr2" href="https://wa.me/919769584950" target="_blank">WhatsApp Now</a>
                            </div>
                        </div>
                    </div>
                </li>

                <li data-transition="slidingoverlayright">
                    <img src="{{ asset('assets/images/slides/we-help.webp') }}" alt="banner image" width="1920"
                        height="550" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat"
                        data-bgparallax="1" loading="lazy">

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
                                <a class="thm-btn bg-clr1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#contactFormModal">Get Quote</a>
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
                                <a class="thm-btn bg-clr2" href="https://wa.me/919769584950" target="_blank">WhatsApp Now</a>
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
                        <!-- <img src="images/resource/1.png" alt="about titan builders photo"> -->
                        <img src="{{ asset('assets/images/about/about-moksh-tubes.webp') }}"
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
                            <a class="w-100" href="{{ route('products.pipes-tubes.seamless-pipes') }}">
                                <img src="/assets/images/service/SEAMLESS-PIPES.webp" alt="Seamless Pipes" class="w-100" loading="lazy">
                            </a>
                        </figure>
                        <div class="p-3 text-left">
                            <a href="{{ route('products.pipes-tubes.seamless-pipes') }}">
                                <h3 class="mt-0 h5">Seamless Pipes</h3>
                            </a>
                            <p>High-strength, leak-proof pipes perfect for high-pressure industrial applications.</p>
                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#contactFormModal" class="thm-btn bg-clr1 mt-2" style=" font-size: 14px;">Get Price</a>
                        </div>
                    </div>
                </div>

                <!-- Welded Pipes -->
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-4">
                    <div class="single-our-service border" style="background: #fff;">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('products.pipes-tubes.welded-pipes') }}">
                                <img src="/assets/images/service/WELDED-PIPES.webp" alt="Welded Pipes" class="w-100" loading="lazy">
                            </a>
                        </figure>
                        <div class="p-3 text-left">
                            <a href="{{ route('products.pipes-tubes.welded-pipes') }}">
                                <h3 class="mt-0 h5">Welded Pipes (ERW/EFW)</h3>
                            </a>
                            <p>Cost-effective and durable pipes suitable for structural and general engineering use.</p>
                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#contactFormModal" class="thm-btn bg-clr1 mt-2" style=" font-size: 14px;">Get Price</a>
                        </div>
                    </div>
                </div>

                <!-- Boiler & Heat Exchanger Tubes -->
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-4">
                    <div class="single-our-service border" style="background: #fff;">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('products.pipes-tubes.boiler-heat-exchanger-tubes') }}">
                                <img src="/assets/images/product/boiler-heat-exchanger-tubes-Copy.png" alt="Boiler Tubes" class="w-100" loading="lazy">
                            </a>
                        </figure>
                        <div class="p-3 text-left">
                            <a href="{{ route('products.pipes-tubes.boiler-heat-exchanger-tubes') }}">
                                <h3 class="mt-0 h5">Boiler & Heat Exchanger Tubes</h3>
                            </a>
                            <p>Designed to withstand high temperatures and pressure in critical heat transfer systems.</p>
                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#contactFormModal" class="thm-btn bg-clr1 mt-2" style=" font-size: 14px;">Get Price</a>
                        </div>
                    </div>
                </div>

                <!-- Inconel / Hastelloy Pipes -->
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-4">
                    <div class="single-our-service border" style="background: #fff;">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.inconel') }}">
                                <img src="/assets/images/inconel/Inconel-625.png" alt="Inconel Pipes" class="w-100" loading="lazy">
                            </a>
                        </figure>
                        <div class="p-3 text-left">
                            <a href="{{ route('materials.inconel') }}">
                                <h3 class="mt-0 h5">Inconel / Hastelloy Pipes</h3>
                            </a>
                            <p>Superior corrosion and oxidation resistance for the most extreme environments.</p>
                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#contactFormModal" class="thm-btn bg-clr1 mt-2" style=" font-size: 14px;">Get Price</a>
                        </div>
                    </div>
                </div>

                <!-- SS 316 Pipes -->
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-4">
                    <div class="single-our-service border" style="background: #fff;">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.austenitic-stainless-Steel') }}">
                                <img src="/assets/images/austenitic-stainless-steel/austenitic-stainless-steel-316-Copy.png" alt="SS 316 Pipes" class="w-100" loading="lazy">
                            </a>
                        </figure>
                        <div class="p-3 text-left">
                            <a href="{{ route('materials.austenitic-stainless-Steel') }}">
                                <h3 class="mt-0 h5">SS 316 Pipes</h3>
                            </a>
                            <p>Excellent corrosion resistance, ideal for chemical, marine, and medical applications.</p>
                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#contactFormModal" class="thm-btn bg-clr1 mt-2" style=" font-size: 14px;">Get Price</a>
                        </div>
                    </div>
                </div>

                <!-- Stainless Steel Sheets & Plates -->
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-4">
                    <div class="single-our-service border" style="background: #fff;">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('products.sheets-plates-coils.sheets-and-plates') }}">
                                <img src="/assets/images/service/SHEETS-PLATES.webp" alt="Stainless Steel Sheets & Plates" class="w-100" loading="lazy">
                            </a>
                        </figure>
                        <div class="p-3 text-left">
                            <a href="{{ route('products.sheets-plates-coils.sheets-and-plates') }}">
                                <h3 class="mt-0 h5">Stainless Steel Sheets & Plates</h3>
                            </a>
                            <p>High-quality SS sheets and plates available in various grades and finishes for diverse gauge.</p>
                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#contactFormModal" class="thm-btn bg-clr1 mt-2" style=" font-size: 14px;">Get Price</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trust & Urgency Badges -->
    <section class="trust-badges" style="padding: 30px 0; background-color: #fff; border-bottom: 1px solid #ebebeb;">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-center" style="gap: 20px; text-align: center;">
                
                <!-- Same Day Dispatch -->
                <div class="trust-item" style="flex: 1; min-width: 140px; padding: 10px;">
                    <i class="fa fa-truck fa-2x thm-color" style="margin-bottom: 15px;"></i>
                    <h5 style="margin: 0; font-size: 16px; font-weight: 600;">Same Day Dispatch</h5>
                </div>

                <!-- MTC Available -->
                <div class="trust-item" style="flex: 1; min-width: 140px; padding: 10px;">
                    <i class="fa fa-file-text-o fa-2x thm-color" style="margin-bottom: 15px;"></i>
                    <h5 style="margin: 0; font-size: 16px; font-weight: 600;">MTC Available</h5>
                </div>

                <!-- Custom Cutting -->
                <div class="trust-item" style="flex: 1; min-width: 140px; padding: 10px;">
                    <i class="fa fa-scissors fa-2x thm-color" style="margin-bottom: 15px;"></i>
                    <h5 style="margin: 0; font-size: 16px; font-weight: 600;">Custom Cutting</h5>
                </div>

                <!-- Export Packing -->
                <div class="trust-item" style="flex: 1; min-width: 140px; padding: 10px;">
                    <i class="fa fa-cubes fa-2x thm-color" style="margin-bottom: 15px;"></i>
                    <h5 style="margin: 0; font-size: 16px; font-weight: 600;">Export Packing</h5>
                </div>

                <!-- Bulk Discounts -->
                <div class="trust-item" style="flex: 1; min-width: 140px; padding: 10px;">
                    <i class="fa fa-tags fa-2x thm-color" style="margin-bottom: 15px;"></i>
                    <h5 style="margin: 0; font-size: 16px; font-weight: 600;">Bulk Discounts</h5>
                </div>

            </div>
            <div class="text-center mt-4">
                <h4 style="color: #ed1c24; font-weight: bold; margin: 0;">Get a Quote Within 30 Minutes ⏱️</h4>
            </div>
        </div>
    </section>

    <section class="brand-area sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>SOME OF OUR ESTEEMED CLIENTS</h2>
            </div>
            <div class="brand-carousel owl-carousel owl-theme brand">
                <div class="single-item">
                    <a href="javascript:void(0);">
                        <img src="{{ asset('assets/images/bharat-heavy-electricals-limited.jpg') }}" alt="Bharat Heavy Electricals Limited (BHEL)">
                        <p class="company-name">Bharat Heavy Electricals Limited (BHEL)</p>
                    </a>
                </div>
                <div class="single-item">
                    <a href="javascript:void(0);">
                        <img src="{{ asset('assets/images/Maharashtra-Seamless-Limited.png') }}" alt="Maharashtra Seamless Limited (MSL)">
                        <p class="company-name">Maharashtra Seamless Limited (MSL)</p>
                    </a>
                </div>
                <div class="single-item">
                    <a href="javascript:void(0);">
                        <img src="{{ asset('assets/images/nuclear-power-corporation-of-india-limited.gif') }}" alt="Nuclear Power Corporation of India Limited (NPCIL)">
                        <p class="company-name">Nuclear Power Corporation of India Limited (NPCIL)</p>
                    </a>
                </div>
                <div class="single-item">
                    <a href="javascript:void(0);">
                        <img src="{{ asset('assets/images/CHEMDIST-PROCESS-SOLUTIONS-PRIVATE-LIMITED.jpg') }}" alt="Chemdist Process Solutions Private Limited">
                        <p class="company-name">Chemdist Process Solutions Pvt Ltd</p>
                    </a>
                </div>
                <div class="single-item">
                    <a href="javascript:void(0);">
                        <img src="{{ asset('assets/images/SSEPL-TECHNO-PRIVATE-LIMITED.png') }}" alt="SSEPL Techno Private Limited">
                        <p class="company-name">SSEPL Techno Private Limited</p>
                    </a>
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
                            <figure class="img-box mb-0">
                                <a class="w-100" href="{{ route('products.pipes-tubes.welded-pipes') }}">
                                    <img src="/assets/images/service/WELDED-PIPES.webp" alt="Awesome Image"
                                        class="w-100" loading="lazy"></a>
                            </figure>

                            <div class="p-3">
                                <a href="{{ route('products.pipes-tubes.welded-pipes') }}">
                                    <h3 class="mt-0 h5">WELDED PIPES</h3>
                                </a>
                                <p>
                                    We supply high-quality welded pipes sourced from trusted and certified mills. Each pipe
                                    offers strong weld integrity, consistent wall thickness, and excellent corrosion
                                    resistance. Ideal for fabrication work, structural use, chemical plants, and general
                                    engineering applications.
                                </p>
                            </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('products.pipes-tubes.seamless-pipes') }}">
                                <img class="w-100" src="/assets/images/service/SEAMLESS-PIPES.webp" alt="Awesome Image"
                                    loading="lazy">
                            </a>
                        </figure>
                        <div class="p-3">
                            <a href="{{ route('products.pipes-tubes.seamless-pipes') }}">
                                <h3 class="mt-0 h5">SEAMLESS PIPES</h3>
                            </a>
                            <p>
                                Our seamless pipes are procured from reputed manufacturers known for superior strength and
                                leak-proof performance. They perform exceptionally well under high pressure and temperature,
                                making them suitable for boilers, heat exchangers, hydraulic systems, and industrial piping
                                networks.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('products.sheets-plates-coils.sheets-and-plates') }}">
                                <img src="/assets/images/service/SHEETS-PLATES.webp" alt="Sheets and Plates"
                                    class="w-100" loading="lazy">

                            </a>
                        </figure>
                        <div class="p-3">
                            <a href="{{ route('products.sheets-plates-coils.sheets-and-plates') }}">
                                <h3 class="mt-0 h5">SHEETS & PLATES</h3>
                            </a>
                            <p>
                                We stock a wide range of stainless steel sheets, plates, coils, and chequered sheets sourced
                                from reliable rolling mills. Each sheet ensures uniform thickness, high strength, and a
                                smooth surface finish—ideal for fabrication, marine use, heavy equipment manufacturing, and
                                architectural work.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('products.sheets-plates-coils.perforated-sheets') }}">
                                <img src="/assets/images/service/PERFORATED-SHEETS.webp" alt="Perforated Sheets"
                                    class="w-100">
                            </a>
                        </figure>

                        <div class="p-3">
                            <a href="{{ route('products.sheets-plates-coils.perforated-sheets') }}">
                                <h3 class="mt-0 h5">PERFORATED SHEETS</h3>
                            </a>
                            <p>
                                Our perforated sheets are supplied in stainless steel, galvanised iron (GI), aluminium, and
                                mild steel options. Designed for ventilation, filtration, acoustic control, and decorative
                                applications, they are available in multiple hole patterns and thicknesses.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('products.bars-rods.round-bars') }}">
                                <img class="w-100" src="/assets/images/service/ROUND-BARS.webp" alt="round bars">
                            </a>
                        </figure>
                        <div class="p-3">
                            <a href="{{ route('products.bars-rods.round-bars') }}">
                                <h3 class="mt-0 h5">ROUND BARS</h3>
                            </a>
                            <p>
                                We supply round bars in stainless steel, carbon steel, alloy steel, and nickel alloys.
                                Sourced from quality mills, these bars offer excellent strength, durability, and dimensional
                                accuracy, suitable for machining, construction, automotive, and engineering components.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('products.fasteners') }}">
                                {{-- <img class="w-100" src="{{ asset('assets/images/service/6.jpg') }}" alt="Awesome Image"> --}}
                                <img class="w-100" src="/assets/images/service/FASTENERS-1.webp" alt="Awesome Image"
                                    loading="lazy">
                            </a>
                        </figure>
                        <div class="p-3">
                            <a href="{{ route('products.fasteners') }}">
                                <h3 class="mt-0 h5">Fasteners & Fittings</h3>
                            </a>
                            <p>
                                We supply a full range of pipe fittings, flanges, SS fasteners, and threaded components. All
                                items are sourced from trusted mills and tested for durability and corrosion
                                resistance—ideal for industrial and structural applications.
                            </p>
                        </div>
                    </div>
                </div>

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
                    <p>Selecting the right supplier is just as important as choosing the right material. At Moksh Tubes & Fittings LLP, we are committed to supplying premium-quality industrial metal products that meet international standards for performance, durability, and reliability.</p>
                    <p>With more than 20 years of industry experience, we serve customers across India and international markets by providing high-quality stainless steel, nickel alloys, titanium, engineering steels, aluminium alloys, copper alloys, and other specialty metals for demanding industrial applications.</p>
                    <p>Whether you require standard products or custom-manufactured components, our experienced team ensures every order meets your exact technical specifications and delivery requirements.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    {{-- <h3 class="text-center mb-5">Why Customers Choose Moksh Tubes</h3> --}}
                    <div class="premium-grid">
                        <div class="premium-card">
                            <div class="icon-wrapper"><i class="fa fa-clock-o"></i></div>
                            <h4>Over 20 Years of Industry Experience</h4>
                        </div>
                        <div class="premium-card">
                            <div class="icon-wrapper"><i class="fa fa-diamond"></i></div>
                            <h4>Premium Quality Materials</h4>
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
                            <div class="icon-wrapper"><i class="fa fa-tags"></i></div>
                            <h4>Competitive Pricing</h4>
                        </div>
                        <div class="premium-card">
                            <div class="icon-wrapper"><i class="fa fa-bolt"></i></div>
                            <h4>Ready Stock for Fast Dispatch</h4>
                        </div>
                        <div class="premium-card">
                            <div class="icon-wrapper"><i class="fa fa-cubes"></i></div>
                            <h4>Export Quality Packaging</h4>
                        </div>
                        <div class="premium-card">
                            <div class="icon-wrapper"><i class="fa fa-globe"></i></div>
                            <h4>Worldwide Shipping</h4>
                        </div>
                        <div class="premium-card">
                            <div class="icon-wrapper"><i class="fa fa-cogs"></i></div>
                            <h4>Technical Material Selection Support</h4>
                        </div>
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
                    <p>Our products are trusted by companies operating in some of the world's most demanding industries. We supply materials designed to perform reliably under high pressure, elevated temperatures, corrosive environments, and heavy mechanical loads.</p>
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
                        <div class="industry-card"><i class="fa fa-building-o"></i><span>Construction</span></div>
                        <div class="industry-card"><i class="fa fa-cogs"></i><span>Heavy Engineering</span></div>
                        <div class="industry-card"><i class="fa fa-diamond"></i><span>Mining</span></div>
                        <div class="industry-card"><i class="fa fa-industry"></i><span>Cement Plants</span></div>
                        <div class="industry-card"><i class="fa fa-cubes"></i><span>Sugar Industry</span></div>
                        <div class="industry-card"><i class="fa fa-car"></i><span>Automotive</span></div>
                        <div class="industry-card"><i class="fa fa-plane"></i><span>Aerospace</span></div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-12 text-center">
                    <p>No matter the industry, our team can recommend the right material to match your application, operating conditions, and performance requirements.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Materials We Supply Section -->
    <section class="materials-we-supply sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Materials We Supply</h2>
            </div>
            <div class="row mb-4">
                <div class="col-md-12 text-center">
                    <p>Moksh Tubes & Fittings LLP offers a comprehensive range of industrial metals and specialty alloys for critical engineering applications. Our products are available in multiple grades, sizes, and specifications to meet domestic and international project requirements.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mt-4">
                    {{-- <h3 class="text-center mb-4">Our Material Range</h3> --}}
                    <div class="materials-flex">
                        <div class="material-pill">Stainless Steel</div>
                        <div class="material-pill">Duplex Stainless Steel</div>
                        <div class="material-pill">Super Duplex Stainless Steel</div>
                        <div class="material-pill">Inconel Alloys</div>
                        <div class="material-pill">Monel Alloys</div>
                        <div class="material-pill">Hastelloy Alloys</div>
                        <div class="material-pill">Incoloy Alloys</div>
                        <div class="material-pill">Titanium</div>
                        <div class="material-pill">Nickel Alloys</div>
                        <div class="material-pill">Aluminium Alloys</div>
                        <div class="material-pill">Copper Alloys</div>
                        <div class="material-pill">Engineering Steels</div>
                        <div class="material-pill">Carbon Steel</div>
                        <div class="material-pill">Alloy Steel</div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-12 text-center">
                    <p>All materials are supplied with complete documentation, including mill test certificates, ensuring quality and traceability.</p>
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
                                                                                                                                                                                                                                                                                                                                        action="{{ url('sendmail') }}" method="post" novalidate="novalidate">
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
                                    href="{{ route('products.flanges.flanges-and-gaskets') }}">FLANGES</a>
                            </li>
                            <li><a href="{{ route('products.fasteners') }}">FASTENERS</a>
                            </li>
                            <li><a
                                    href="{{ route('products.flanges.flanges-and-gaskets') }}">GASKETS</a>
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
                @foreach ($blogs as $blog)
                    {{-- {{ dd($blog) }} --}}
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

                                <!--<div class="text">-->
                                <!--</div>-->
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


    {{-- <section class="blog-section sec-padd2">
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
                                    alt="News" loading="lazy"></a>
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
                                    alt="News" loading="lazy"></a>
                            <figcaption class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="{{ route('blogs.indias-stainless-steel-export-industry') }}"><i
                                                class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                        <div class="lower-content">
                            <a href="{{ route('blogs.indias-stainless-steel-export-industry') }}">
                                <h3 class="h5">India’s Stainless Steel Exports – Moksh Tubes Global Reach</h3>
                            </a>
                            <div class="post-meta">by Richards | 22 Comments | 17 Apr</div>
                            <div class="text">
                                <p>India continues to lead global exports of stainless steel pipes and fittings, with Moksh
                                    Tubes at the forefront of international markets.</p>
                            </div>
                            <div class="link">
                                <a href="{{ route('blogs.indias-stainless-steel-export-industry') }}"
                                    class="default_link">Read More <i class="fa fa-angle-right"></i></a>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="default-blog-news wow fadeInUp animated animated"
                        style="visibility: visible; animation-name: fadeInUp;">
                        <figure class="img-holder mb-0">
                            <a href="#"><img src="{{ asset('assets/images/blog/Untitled.webp') }}" alt="News"
                                    loading="lazy"></a>
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
    </section> --}}

    <div class="container mt-5 text-center bg-white ">
        <div class="section-title">
            <h2>International Market to Explore</h2>
        </div>
        <div class="col-md-8 mx-auto mt-4" style="position:relative;width:100%;aspect-ratio:3/2;overflow:hidden;">
            <img src="{{ asset('assets/images/map.jpg') }}" alt="International Market"
                style="position:absolute;top:0;left:0;width:100%;object-fit:cover;">
        </div>

    </div>

    <!-- Certifications Section -->
    <section class="certifications-section sec-padd2"  style="background-color: #f9f9f9;">
        <div class="container">
            <div class="section-title center">
                <h2>Our <span class="thm-color">Certifications</span></h2>
                <p>We are committed to delivering the highest quality products and adhere to global industry standards.</p>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 mb-4">
                    <div class="single-our-service border p-4 text-center rounded shadow-sm" style="background-color: #fff; height: 100%;">
                        <div class="mb-3">
                            <a href="{{ asset('assets/images/ISO 9001 CERTIFICATE MOKSH STEEL.pdf') }}" target="_blank">
                                <img src="{{ asset('assets/images/iso-9001-certificate.png') }}" alt="ISO 9001 Certificate" class="img-fluid border" style="height: 250px; object-fit: contain; width: 100%; border-radius: 4px; background-color: #f8f9fa;">
                            </a>
                        </div>
                        <h3 class="mt-0 mb-2 h5">ISO 9001:2015</h3>
                        <p class="mb-4 text-muted">Quality Management System</p>
                        <a href="{{ asset('assets/images/ISO 9001 CERTIFICATE MOKSH STEEL.pdf') }}" target="_blank" class="thm-btn bg-clr1" style="padding: 8px 20px; font-size: 14px;">View Certificate</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 mb-4">
                    <div class="single-our-service border p-4 text-center rounded shadow-sm" style="background-color: #fff; height: 100%;">
                        <div class="mb-3">
                            <a href="{{ asset('assets/images/MTF LLP UDYAM CERTIFICATE.pdf') }}" target="_blank">
                                <img src="{{ asset('assets/images/udyam-certificate.png') }}" alt="UDYAM Registration" class="img-fluid border" style="height: 250px; object-fit: contain; width: 100%; border-radius: 4px; background-color: #f8f9fa;">
                            </a>
                        </div>
                        <h3 class="mt-0 mb-2 h5">UDYAM Registration</h3>
                        <p class="mb-4 text-muted">MSME Government of India</p>
                        <a href="{{ asset('assets/images/MTF LLP UDYAM CERTIFICATE.pdf') }}" target="_blank" class="thm-btn bg-clr1" style="padding: 8px 20px; font-size: 14px;">View Certificate</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 mb-4">
                    <div class="single-our-service border p-4 text-center rounded shadow-sm" style="background-color: #fff; height: 100%;">
                        <div class="mb-3">
                            <a href="{{ asset('assets/images/PED CERTIFICATE MOKSH STEEL.pdf') }}" target="_blank">
                                <img src="{{ asset('assets/images/ped-certificate.png') }}" alt="PED Certificate" class="img-fluid border" style="height: 250px; object-fit: contain; width: 100%; border-radius: 4px; background-color: #f8f9fa;">
                            </a>
                        </div>
                        <h3 class="mt-0 mb-2 h5">PED Certificate</h3>
                        <p class="mb-4 text-muted">Pressure Equipment Directive</p>
                        <a href="{{ asset('assets/images/PED CERTIFICATE MOKSH STEEL.pdf') }}" target="_blank" class="thm-btn bg-clr1" style="padding: 8px 20px; font-size: 14px;">View Certificate</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Certifications Section-->

    <!-- Global Export & Quality Assurance Section -->
    <section class="global-export-quality sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Global Export & Quality Assurance</h2>
            </div>
            <div class="row mb-4">
                <div class="col-md-12 text-center">
                    <p>Quality is at the core of everything we do. Every product supplied by Moksh Tubes & Fittings LLP undergoes strict quality checks to ensure compliance with customer specifications and international standards.</p>
                    <p>We provide complete quality documentation, including Mill Test Certificates (MTC), Positive Material Identification (PMI), third-party inspection reports, and custom testing based on project requirements.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    {{-- <h3 class="text-center mb-4">We Export Worldwide</h3>
                    <p class="text-center mb-4">Our products are supplied to customers across:</p> --}}
                    <div class="export-grid">
                        <div class="export-item"><i class="fa fa-map-marker"></i> United Arab Emirates</div>
                        <div class="export-item"><i class="fa fa-map-marker"></i> Saudi Arabia</div>
                        <div class="export-item"><i class="fa fa-map-marker"></i> Qatar</div>
                        <div class="export-item"><i class="fa fa-map-marker"></i> Oman</div>
                        <div class="export-item"><i class="fa fa-map-marker"></i> Kuwait</div>
                        <div class="export-item"><i class="fa fa-map-marker"></i> Bahrain</div>
                        <div class="export-item"><i class="fa fa-map-marker"></i> Singapore</div>
                        <div class="export-item"><i class="fa fa-map-marker"></i> Malaysia</div>
                        <div class="export-item"><i class="fa fa-map-marker"></i> Germany</div>
                        <div class="export-item"><i class="fa fa-map-marker"></i> Netherlands</div>
                        <div class="export-item"><i class="fa fa-map-marker"></i> Italy</div>
                        <div class="export-item"><i class="fa fa-map-marker"></i> United Kingdom</div>
                        <div class="export-item"><i class="fa fa-map-marker"></i> United States</div>
                        <div class="export-item"><i class="fa fa-map-marker"></i> Canada</div>
                        <div class="export-item"><i class="fa fa-map-marker"></i> Australia</div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-12 text-center">
                    <p>With export-grade packaging and reliable logistics, we ensure materials reach customers safely and on time.</p>
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
                            <div class="accord-content collapsed">
                                <p>Yes. We offer custom lengths, diameters, wall thicknesses, and cutting services based on project requirements.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h3>Do you provide Mill Test Certificates?</h3>
                            </div>
                            <div class="accord-content">
                                <p>Yes. All applicable products can be supplied with EN 10204 3.1 Mill Test Certificates.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h3>Which industries do you serve?</h3>
                            </div>
                            <div class="accord-content">
                                <p>We supply products for oil & gas, chemical processing, power plants, marine, pharmaceutical, food processing, construction, mining, and many other industries.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h3>Do you export outside India?</h3>
                            </div>
                            <div class="accord-content">
                                <p>Yes. We regularly export industrial metal products to customers across Asia, Europe, the Middle East, North America, and other international markets.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h3>Can you arrange third-party inspection?</h3>
                            </div>
                            <div class="accord-content">
                                <p>Yes. Third-party inspection can be arranged through internationally recognized inspection agencies upon request.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h3>How quickly can I receive a quotation?</h3>
                            </div>
                            <div class="accord-content">
                                <p>Our team aims to respond to most enquiries within 30 minutes during business hours.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h3>Which materials do you stock?</h3>
                            </div>
                            <div class="accord-content">
                                <p>We stock stainless steel, duplex steel, nickel alloys, titanium, engineering steels, aluminium alloys, copper alloys, and other specialty metals.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h3>How can I request a quote?</h3>
                            </div>
                            <div class="accord-content">
                                <p>You can contact us through our enquiry form, email, phone, or WhatsApp. Our technical sales team will recommend the right material and provide a competitive quotation based on your specifications.</p>
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
                <p>Looking for premium quality <strong>Stainless Steel Pipes, Sheets, Plates, or Custom Engineering solutions</strong>?<br>Fill out the form below and our experts will get back to you within 30 minutes.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form action="{{ url('sendmail') }}" method="POST" class="default-form contact-form border p-4 bg-white shadow-sm rounded">
                        @csrf
                        <div class="row">
                            <!-- Honeypot Anti-Bot Field -->
                            <input type="text" name="website" style="display:none !important;" tabindex="-1"
                                autocomplete="off">
                            <div class="col-md-6 mb-3">
                                <input type="text" name="form_name" class="form-control" placeholder="Your Name*" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="tel" name="form_phone" class="form-control" placeholder="Phone Number*" required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <input type="email" name="form_email" class="form-control" placeholder="Email Address">
                            </div>
                            <div class="col-md-12 mb-3">
                                <textarea name="form_message" class="form-control" placeholder="Your Requirement*" required rows="4"></textarea>
                            </div>
                            <div class="col-md-12 mb-3 d-none">
                                <input id="form_botcheck" name="form_botcheck" type="hidden" value="">
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
        "text": "We supply products for oil & gas, chemical processing, power plants, marine, pharmaceutical, food processing, construction, mining, and many other industries."
      }
    },
    {
      "@type": "Question",
      "name": "Do you export outside India?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. We regularly export industrial metal products to customers across Asia, Europe, the Middle East, North America, and other international markets."
      }
    },
    {
      "@type": "Question",
      "name": "Can you arrange third-party inspection?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Third-party inspection can be arranged through internationally recognized inspection agencies upon request."
      }
    },
    {
      "@type": "Question",
      "name": "How quickly can I receive a quotation?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Our team aims to respond to most enquiries within 30 minutes during business hours."
      }
    },
    {
      "@type": "Question",
      "name": "Which materials do you stock?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We stock stainless steel, duplex steel, nickel alloys, titanium, engineering steels, aluminium alloys, copper alloys, and other specialty metals."
      }
    },
    {
      "@type": "Question",
      "name": "How can I request a quote?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You can contact us through our enquiry form, email, phone, or WhatsApp. Our technical sales team will recommend the right material and provide a competitive quotation based on your specifications."
      }
    }
  ]
}
</script>
@endverbatim
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     @if (session('status') && session('msg'))
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

