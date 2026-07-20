@extends('layouts.master')
@section('title', 'Concentric Reducer | Buttweld Pipe Reducers | Moksh Tubes')
<!-- 52 characters -->
@section('meta_description',
    'High-quality Concentric Reducers for connecting pipes of different diameters on the same axis. Available in Stainless Steel, Carbon Steel, and Alloy Steel.')
@section('meta_keywords',
    'Concentric Reducer, Pipe Reducer, Buttweld Reducer, Stainless Steel Reducer, Carbon Steel Reducer, ASME B16.9')
@section('og_image', asset('assets/images/product/flangs/concentric-reducers_11zon.jpg'))
@section('og_type', 'product')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/product/flangs/concentric-reducers_11zon.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1 class="page-title">Concentric Reducer</h1>
                        <p class="text-center mt-3 px-3 py-2 text-white position-relative" style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        A Concentric Reducer is a cone-shaped pipe fitting used to join two pipes of different diameters along the same central axis. It ensures a smooth transition of fluid flow, minimizing turbulence and friction. At <a href="{{ route('index') }}" class="text-white text-decoration-underline">Moksh Tubes & Fittings LLP</a>, we manufacture and supply premium quality seamless and welded concentric reducers in carbon steel, stainless steel, alloy steel, and exotic metals, strictly adhering to ASME B16.9 and MSS-SP-43 standards.
                    </p>

                </div>
            </div>
        </div>
    </section>

    <!-- Start Material Tabs -->
    <div class="sticky-top bg-white border-bottom material-tabs w-100">
        <div class="container">
            <a href="#overview">Overview</a> |
            <a href="#specifications">Specifications</a> |
            <a href="#size-weight">Dimensions</a> |
            <a href="#grades">Grades</a> |
            <a href="#applications">Applications</a> |
            <a href="#concentric-vs-eccentric">Concentric vs Eccentric</a> |
            <a href="#manufacturing">Manufacturing</a> |
            <a href="#mechanical">Mechanical Properties</a> |
            <a href="#tolerances">Tolerances</a> |
            <a href="#why-choose-us">Why Choose Us</a> |
            <a href="#faq">FAQ</a>
        </div>
    </div>
    <!-- End Material Tabs -->

    <section id="overview" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Concentric Reducers</h2>
            </div>

            <div class="row align-items-center">
                <!-- Left Image -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('/assets/images/product/flangs/concentric-reducers_11zon.jpg') }}"
                        alt="Concentric Buttweld Reducers" class="img-fluid rounded shadow-sm" width="550"
                        height="350" loading="lazy">
                </div>

                <!-- Right Content -->
                <div class="col-md-6">
                    <p class="fs-6 mb-3 text-justify">
                        <strong class="text-black">Concentric Reducers</strong> feature a symmetrical, cone-like shape where the center lines of both the larger (run) and smaller (branch) pipes perfectly align. This geometry ensures an even distribution of fluid pressure and is typically installed in vertical piping systems to prevent cavitation.
                    </p>

                    <p class="fs-6 mb-3 text-justify">
                        <a href="{{ route('index') }}">Moksh Tubes & Fittings LLP</a> is a leading manufacturer,
                        supplier, and exporter of Concentric Reducers in India. We cater to high-pressure pipeline requirements across <a href="{{ route('materials.austenitic-stainless-Steel') }}">Indian refineries</a> and
                        major Gulf / GCC nations including UAE, Saudi Arabia, Qatar, Oman, and Kuwait.
                    </p>

                    <p class="fs-6 text-justify">
                        Manufactured through advanced pressing and machining techniques, our reducers provide a seamless transition between varying pipe schedules and diameters, featuring precision-beveled ends for flawless butt-welding.
                    </p>

                </div>
            </div>
        </div>
    </section>

    {{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Concentric Reducer Datasheet</h3>
            <p class="mb-3">
                Get the complete datasheet with dimensional specifications, weight charts, and material properties.
                Enter your email below to receive the PDF instantly.
            </p>

            <!-- Lead Capture Form -->
            <form id="leadForm" method="POST" action="https://mokshtubes.com/datasheet-leads-capture" class="mb-3">
                <input type="hidden" name="_token" value="WNVWvpO4YR2OqZaIJDl2mE3UfyreGys3Vp19brsc" autocomplete="off">
                <div class="row justify-content-center">
                    <input type="hidden" name="pdf" value="concentric-reducer.pdf">
                    <div class="col-md-6 mb-2">
                        <input type="email" name="email" required="" class="form-control p-3"
                            placeholder="Enter your email address">
                    </div>
                    <div class="col-md-3 mb-2">
                        <button type="submit" class="btn btn-lg w-100 text-white"
                            style="background-color:#db7227; border-radius:8px;">
                            Get Datasheet
                        </button>
                    </div>
                </div>
            </form>

            <hr class="my-4">
            <p class="small text-muted">
                We respect your privacy. Your email will only be used to send the datasheet.
            </p>
        </div>
    </section>

    <section id="specifications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>SPECIFICATIONS</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Category</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody class="text-start">
                                <tr class="t-row">
                                    <td>Material</td>
                                    <td><a href="{{ route('materials.engineering-Steels') }}">Carbon Steel</a>, <a href="{{ route('materials.austenitic-stainless-Steel') }}">Stainless Steel</a>, Alloy Steel, 
                                        <a href="{{ route('materials.duplex-and-super-duplex') }}">Duplex / Super Duplex
                                            Steel</a>, <a href="{{ route('materials.nickel-Based-Superalloys') }}">Nickel
                                            Alloys</a>, <a href="{{ route('materials.titanium') }}">Titanium</a>
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Size Range (Seamless)</td>
                                    <td>1/2" NB to 24" NB</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Size Range (Welded)</td>
                                    <td>24" NB to 48" NB (and above)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Wall Thickness (Schedule)</td>
                                    <td>Sch 10, Sch 40, Sch 80, Sch 160, XXS (Custom up to 100mm thick)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Type</td>
                                    <td>Concentric (CONC)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Dimensional Standards</td>
                                    <td>ASME B16.9, MSS-SP-43, EN 10253, DIN 2616</td>
                                </tr>
                                <tr class="t-row">
                                    <td>End Connection</td>
                                    <td>Beveled Ends for Butt-Welding (ASME B16.25)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <!-- charts -->
    <section id="size-weight" class="sec-padd-top sec-padd-bottom bg-light">

        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Dimensional Data (ASME B16.9)</h2>
            </div>

            <div class="section-title center mb-3">
                <h3 class="text-center mb-0" style="color: #db7227;">Concentric Reducer Dimensions</h3>
            </div>
            
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr class="t-row">
                            <th>Nominal Pipe Size (Large x Small)</th>
                            <th>Large End OD (mm)</th>
                            <th>Small End OD (mm)</th>
                            <th>End-to-End Length (H) (mm)</th>
                            <th>Approx. Weight (Sch 40) (kg)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row"><td>3/4" × 1/2"</td><td>26.7</td><td>21.3</td><td>38</td><td>0.12</td></tr>
                        <tr class="t-row"><td>1" × 3/4"</td><td>33.4</td><td>26.7</td><td>51</td><td>0.20</td></tr>
                        <tr class="t-row"><td>1-1/2" × 1"</td><td>48.3</td><td>33.4</td><td>64</td><td>0.35</td></tr>
                        <tr class="t-row"><td>2" × 1-1/2"</td><td>60.3</td><td>48.3</td><td>76</td><td>0.50</td></tr>
                        <tr class="t-row"><td>3" × 2"</td><td>88.9</td><td>60.3</td><td>89</td><td>1.20</td></tr>
                        <tr class="t-row"><td>4" × 3"</td><td>114.3</td><td>88.9</td><td>102</td><td>1.85</td></tr>
                        <tr class="t-row"><td>6" × 4"</td><td>168.3</td><td>114.3</td><td>140</td><td>4.20</td></tr>
                        <tr class="t-row"><td>8" × 6"</td><td>219.1</td><td>168.3</td><td>152</td><td>6.80</td></tr>
                        <tr class="t-row"><td>10" × 8"</td><td>273.0</td><td>219.1</td><td>178</td><td>11.30</td></tr>
                        <tr class="t-row"><td>12" × 10"</td><td>323.8</td><td>273.0</td><td>203</td><td>16.50</td></tr>
                    </tbody>
                </table>
            </div>
            <p class="text-center mt-2 small text-muted">*Dimensions conform to ASME B16.9. The End-to-End length (H) determines the slope angle of the reducer.</p>
        </div>
    </section>

    <section id="concentric-vs-eccentric" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Concentric vs Eccentric Reducers</h2>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-12">
                     <p class="fs-6 mb-3 text-justify">
                        Choosing the right type of reducer is critical for flow dynamics and preventing pump cavitation:
                    </p>

                    <div class="table-responsive ">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Feature</th>
                                    <th>Concentric Reducer</th>
                                    <th>Eccentric Reducer</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td class="fw-bold">Geometry</td>
                                    <td>Cone-shaped, symmetrical around the center line.</td>
                                    <td>Asymmetrical, with one flat edge (offset center lines).</td>
                                </tr>
                                <tr class="t-row">
                                    <td class="fw-bold">Orientation</td>
                                    <td>Typically installed vertically.</td>
                                    <td>Typically installed horizontally.</td>
                                </tr>
                                <tr class="t-row">
                                    <td class="fw-bold">Air Pocket Prevention</td>
                                    <td>Can trap air if installed horizontally on a suction line.</td>
                                    <td>Flat side up (FOT) prevents air pockets in pump suction lines.</td>
                                </tr>
                                <tr class="t-row">
                                    <td class="fw-bold">Primary Application</td>
                                    <td>Pump discharge, vertical pipelines, inline diameter changes.</td>
                                    <td>Pump suction, pipe racks, maintaining flat bottom clearance.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Grades Available --}}
    <section id="grades" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Available Grades & Materials</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Material Type</th>
                                    <th>ASTM Specification & Grades</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td>Carbon Steel</td>
                                    <td>ASTM A234 WPB, WPC, MSS-SP-75 WPHY 42, 46, 52, 60, 65, 70</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Low Temp Carbon Steel (LTCS)</td>
                                    <td>ASTM A420 WPL6, WPL3</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Alloy Steel</td>
                                    <td>ASTM A234 WP1, WP5, WP9, WP11, WP22, WP91</td>
                                </tr>
                                <tr class="t-row">
                                    <td><a href="{{ route('materials.austenitic-stainless-Steel') }}">Stainless Steel</a></td>
                                    <td>ASTM A403 WP304/304L, WP316/316L, WP321, WP347</td>
                                </tr>
                                <tr class="t-row">
                                    <td><a href="{{ route('materials.duplex-and-super-duplex') }}">Duplex & Super Duplex</a></td>
                                    <td>ASTM A815 UNS S31803, S32205, S32750, S32760</td>
                                </tr>
                                <tr class="t-row">
                                    <td><a href="{{ route('materials.nickel-Based-Superalloys') }}">Nickel Alloys</a></td>
                                    <td>Inconel 600/625, Hastelloy C276, Monel 400, Alloy 20</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Gallery --}}
    <section class="our-services">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.engineering-Steels') }}">
                                <img class="w-100" src="{{ asset('assets/images/product/CARBON-ALLOYS.webp') }}"
                                    alt="Carbon Steel Concentric Reducer" loading="lazy" width="400"
                                    height="260">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0">CARBON STEEL (A234 WPB)</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.austenitic-stainless-Steel') }}">
                                <img class="w-100" src="{{ asset('assets/images/product/STAINLESS-STEEL.webp') }}"
                                    alt="Stainless Steel Concentric Reducer" loading="lazy" width="400"
                                    height="260">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0">STAINLESS STEEL (A403)</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.duplex-and-super-duplex') }}">
                                <img class="w-100" src="{{ asset('assets/images/product/DUPLEX-SUPER.webp') }}"
                                    alt="Duplex Concentric Reducer" loading="lazy"
                                    width="400" height="260">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0">DUPLEX & SUPER DUPLEX</h6>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.nickel-Based-Superalloys') }}">
                                <img class="w-100" src="{{ asset('assets/images/product/NICKLE-ALLOYS.webp') }}"
                                    alt="Nickel Alloy Concentric Reducer" loading="lazy" width="400"
                                    height="260">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0">NICKEL ALLOYS</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4 ">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.engineering-Steels') }}">
                                <img class="w-100" src="{{ asset('assets/images/product/RARE-TO-ALLOYS.webp') }}"
                                    alt="Alloy Steel Concentric Reducer" loading="lazy"
                                    width="400" height="260">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0">ALLOY STEEL (WP11/WP22)</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.titanium') }}">
                                <img class="w-100" src="{{ asset('assets/images/product/TITANIUM-ALLOYS.webp') }}"
                                    alt="Titanium Concentric Reducer" loading="lazy"
                                    width="400" height="260">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0">TITANIUM ALLOYS</h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Applications --}}
    <section id="applications" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Concentric Reducers</h2>
                <p class="text-center pb-3">
                    <strong class="text-black">Concentric Reducers</strong> are universally employed to transition between pipe sizes:
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fan"></i></div>
                        <h5>Pump Discharge Lines</h5>
                        <ul>
                            <li>Placed at the discharge side of a centrifugal pump to smoothly transition to a larger pipe diameter.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Vertical Pipelines</h5>
                        <ul>
                            <li>Ideal for vertical pipe runs in chemical plants where gas pocket accumulation is not an issue.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Control Valves</h5>
                        <ul>
                            <li>Used upstream and downstream of control valves to adjust pipe sizing to the valve bore.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge"></i></div>
                        <h5>Power Generation</h5>
                        <ul>
                            <li>Alloy steel reducers in high-pressure steam distribution headers in thermal plants.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Oil & Gas Refineries</h5>
                        <ul>
                            <li>Transporting crude oil and refined products through varying pipeline capacities.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-water"></i></div>
                        <h5>Water Treatment</h5>
                        <ul>
                            <li>Municipal water supply mains, transitioning from large header pipes to smaller distribution lines.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="mechanical" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
             <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Mechanical Properties (Carbon Steel A234 WPB)</h2>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr class="t-row">
                            <th>Grade</th>
                            <th>Tensile Strength (MPa)</th>
                            <th>Yield Strength (MPa min)</th>
                            <th>Elongation (%)</th>
                            <th>Hardness (HB max)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row">
                            <td>ASTM A234 WPB</td>
                            <td>415 - 585</td>
                            <td>240</td>
                            <td>22 (longitudinal)</td>
                            <td>197</td>
                        </tr>
                        <tr class="t-row">
                            <td>ASTM A234 WPC</td>
                            <td>485 - 655</td>
                            <td>275</td>
                            <td>20 (longitudinal)</td>
                            <td>223</td>
                        </tr>
                    </tbody>
                </table>
            </div>
             <p class="text-center mt-2 small text-muted">*Properties must match the corresponding seamless pipe specification (e.g., A106 Gr. B for A234 WPB).</p>
        </div>
    </section>

    {{-- why choose us --}}
    <section id="why-choose-us" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container text-center">
            <div class="section-title center">
                <h2>Why Choose Moksh Tubes?</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-award-fill"></i></div>
                        <h5>100% compliant with ASME B16.9</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Seamless reducers up to 24" readily available</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Strict wall thickness control during forming</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Exporting to GCC and global markets</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-file-earmark-text"></i></div>
                        <h5>Complete EN 10204 3.1 Certification</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-braces"></i></div>
                        <h5>Custom wall thicknesses (Schedule 160 / XXS)</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Start faq content area-->
    <section id="faq" class="faq-content-area sec-padd2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="accordion-box">
                        <div class="section-title center">
                            <h2>Frequently Asked Questions (FAQ)</h2>
                        </div>

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why use a Concentric Reducer instead of an Eccentric Reducer?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Concentric reducers are generally used in vertical piping systems or at pump discharges. They provide a smooth, symmetrical transition that minimizes pressure loss. However, if installed horizontally on a pump suction line, they can trap air pockets; in that specific case, an eccentric reducer with the flat side up is required.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Are reducers seamless or welded?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Both. Reducers up to 24" are typically seamless, pressed from seamless pipe. For sizes larger than 24", they are commonly manufactured from welded pipe or rolled and welded steel plates (often referred to as fabricated reducers).</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Can I order a reducer with different schedules on each end?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Typically, a reducer maintains the same wall thickness (e.g., Sch 40) across both ends. However, custom reducers with varying wall thicknesses can be manufactured or specially bored to match the inner diameter of specific pipes.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What standards govern concentric reducers?</h4>
                            </div>
                            <div class="accord-content">
                                <p>The most widely accepted dimensional standard is ASME B16.9 (Factory-Made Wrought Buttwelding Fittings). Material standards include ASTM A234 for carbon/alloy steel and ASTM A403 for stainless steel.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Contact Us</h2>
                <p>For further information, CAD models, quotes, or custom thickness requirements for Concentric Reducers, <strong>Moksh Tubes & Fittings LLP</strong> is your trusted partner for premium buttweld fittings.</p>
                <a href="javascript:void(0);" class="contact-cta-btn" data-bs-toggle="modal" data-bs-target="#contactFormModal">
                    Get in Touch
                </a>
            </div>
        </div>
    </section>

@endsection

@push('styles')
    <style>
        /* Base state for collapsed rows */
        tr.collapse {
            opacity: 0;
            transform: translateY(-6px) scale(0.98);
            transition: opacity .35s ease, transform .35s ease;
        }

        /* When collapsing (Bootstrap interim state) */
        tr.collapsing {
            opacity: 0;
            transform: translateY(-10px) scale(0.96);
            display: table-row !important;
        }

        /* When fully shown */
        tr.collapse.show {
            opacity: 1;
            transform: translateY(0) scale(1);
            display: table-row;
        }
    </style>
@endpush

@section('jsscripts')
    @verbatim
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@graph": [
            {
              "@type": ["Organization", "LocalBusiness"],
              "@id": "https://mokshtubes.com/#organization",
              "name": "Moksh Tubes & Fittings LLP",
              "url": "https://mokshtubes.com/",
              "logo": "https://mokshtubes.com/assets/images/logo.webp",
              "telephone": "+91-9769584950",
              "email": "info@mokshtubes.com"
            },
            {
              "@type": "Product",
              "@id": "https://mokshtubes.com/#concentric-reducer",
              "name": "Concentric Buttweld Reducer",
              "image": "https://mokshtubes.com/assets/images/product/flangs/concentric-reducers_11zon.jpg",
              "category": "Pipe Fittings",
              "description": "Premium Concentric Pipe Reducers (ASME B16.9) in Carbon Steel (A234 WPB) and Stainless Steel for inline diameter transitions.",
              "brand": {
                "@type": "Brand",
                "@id": "https://mokshtubes.com/#organization"
              }
            }
          ]
        }
        </script>
    @endverbatim
@endsection
