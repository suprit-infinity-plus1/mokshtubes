@extends('layouts.master')
@section('title', '90 Degree Elbow | Buttweld Pipe Elbows | Moksh Tubes')
<!-- 52 characters -->
@section(
    'meta_description',
    'High-quality 90 Degree Pipe Elbows (LR & SR) for right-angle flow direction changes. Available in Stainless Steel, Carbon Steel, and Alloy Steel.'
)
@section(
    'meta_keywords',
    '90 Degree Elbow, Pipe Elbow, Buttweld Elbow, Stainless Steel Elbow, Carbon Steel Elbow, ASME B16.9'
)
@section('og_image', asset('assets/images/product/flangs/90-degree-elbows_11zon.jpeg'))
@section('og_type', 'product')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area"
        style="background-image: url(/assets/images/product/flangs/90-degree-elbows_11zon.jpeg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1 class="page-title">90 Degree Elbow</h1>
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        A 90 Degree Elbow is the most commonly used pipe fitting, designed to alter the direction of fluid
                        flow by exactly 90 degrees (a right angle) within a piping system. It is essential for routing pipes
                        through industrial facilities. At <a href="{{ route('index') }}"
                            class="text-white text-decoration-underline">Moksh Tubes & Fittings LLP</a>, we manufacture and
                        supply premium quality seamless and welded 90-degree elbows in Long Radius (LR) and Short Radius
                        (SR) configurations, strictly adhering to ASME B16.9 and MSS-SP-43 standards.
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
            <!-- <a href="#lr-vs-sr">LR vs SR Elbows</a> | -->
            <!-- <a href="#manufacturing">Manufacturing</a> | -->
            <a href="#mechanical">Mechanical Properties</a> |
            <!-- <a href="#tolerances">Tolerances</a> | -->
            <a href="#why-choose-us">Why Choose Us</a> |
            <a href="#faq">FAQ</a>
        </div>
    </div>
    <!-- End Material Tabs -->

    <section id="overview" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">90 Degree Elbows</h2>
            </div>

            <div class="row align-items-center">
                <!-- Left Image -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('/assets/images/product/flangs/90-degree-elbows_11zon.jpeg') }}"
                        alt="90 Degree Buttweld Elbows" class="img-fluid rounded shadow-sm" width="550" height="350"
                        loading="lazy">
                </div>

                <!-- Right Content -->
                <div class="col-md-6">
                    <p class="fs-6 mb-3 text-justify">
                        <strong class="text-black">90 Degree Elbows</strong> (sometimes called "90 bends" or "quarter
                        bends") are critical for navigating structural layouts, allowing pipelines to conform to building
                        walls, equipment housing, and trench layouts. They are permanently butt-welded to the pipe to
                        provide a robust, leak-free connection capable of withstanding extreme internal pressures.
                    </p>

                    <p class="fs-6 mb-3 text-justify">
                        <a href="{{ route('index') }}">Moksh Tubes & Fittings LLP</a> is a leading manufacturer,
                        supplier, and exporter of 90 Degree Buttweld Elbows in India. We supply both Long Radius (R = 1.5D)
                        and Short Radius (R = 1.0D) elbows to <a
                            href="{{ route('materials.austenitic-stainless-Steel') }}">Indian petrochemical complexes</a>
                        and
                        major Gulf / GCC nations including UAE, Saudi Arabia, Qatar, Oman, and Kuwait.
                    </p>

                    <p class="fs-6 text-justify">
                        Our elbows are manufactured from high-grade carbon steel, stainless steel, and alloy steel,
                        featuring precisely machined bevel ends to ensure optimal weld penetration and X-ray quality joints.
                    </p>

                </div>
            </div>
        </div>
    </section>

    {{-- datasheet --}}


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
                                    <td><a href="{{ route('materials.engineering-Steels') }}">Carbon Steel</a>, <a
                                            href="{{ route('materials.austenitic-stainless-Steel') }}">Stainless Steel</a>,
                                        Alloy Steel,
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
                                    <td>Radius Type</td>
                                    <td>Long Radius (LR) [R=1.5D], Short Radius (SR) [R=1.0D]</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Dimensional Standards</td>
                                    <td>ASME B16.9 (LR), ASME B16.28 (SR), MSS-SP-43, EN 10253</td>
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
                <h3 class="text-center mb-0" style="color: #db7227;">90 Degree Long Radius (LR) Elbow Dimensions</h3>
            </div>

            <div class="text-center mb-4">
                <img src="{{ asset('assets/images/product/flangs/90-degree-elbows_11zon.jpeg') }}"
                    alt="90 Degree Elbow Dimensions" class="img-fluid border p-2 bg-white"
                    style="max-width: 600px; border-radius: 8px;">
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr class="t-row">
                            <th>Nominal Pipe Size (NPS)</th>
                            <th>Outside Diameter (OD) (mm)</th>
                            <th>Center to End (A) (mm)</th>
                            <th>Approx. Weight (Sch 40) (kg)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row">
                            <td>1/2"</td>
                            <td>21.3</td>
                            <td>38</td>
                            <td>0.08</td>
                        </tr>
                        <tr class="t-row">
                            <td>3/4"</td>
                            <td>26.7</td>
                            <td>29</td>
                            <td>0.08</td>
                        </tr>
                        <tr class="t-row">
                            <td>1"</td>
                            <td>33.4</td>
                            <td>38</td>
                            <td>0.15</td>
                        </tr>
                        <tr class="t-row">
                            <td>1-1/2"</td>
                            <td>48.3</td>
                            <td>57</td>
                            <td>0.35</td>
                        </tr>
                        <tr class="t-row">
                            <td>2"</td>
                            <td>60.3</td>
                            <td>76</td>
                            <td>0.66</td>
                        </tr>
                        <tr class="t-row">
                            <td>3"</td>
                            <td>88.9</td>
                            <td>114</td>
                            <td>2.10</td>
                        </tr>
                        <tr class="t-row">
                            <td>4"</td>
                            <td>114.3</td>
                            <td>152</td>
                            <td>4.00</td>
                        </tr>
                        <tr class="t-row">
                            <td>6"</td>
                            <td>168.3</td>
                            <td>229</td>
                            <td>10.90</td>
                        </tr>
                        <tr class="t-row">
                            <td>8"</td>
                            <td>219.1</td>
                            <td>305</td>
                            <td>21.80</td>
                        </tr>
                        <tr class="t-row">
                            <td>10"</td>
                            <td>273.0</td>
                            <td>381</td>
                            <td>37.00</td>
                        </tr>
                        <tr class="t-row">
                            <td>12"</td>
                            <td>323.8</td>
                            <td>457</td>
                            <td>54.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="text-center mt-2 small text-muted">*Dimensions conform to ASME B16.9. The Center to End dimension for
                an LR elbow is 1.5 times the Nominal Pipe Size (NPS).</p>
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
                                    <td><a href="{{ route('materials.austenitic-stainless-Steel') }}">Stainless Steel</a>
                                    </td>
                                    <td>ASTM A403 WP304/304L, WP316/316L, WP321, WP347</td>
                                </tr>
                                <tr class="t-row">
                                    <td><a href="{{ route('materials.duplex-and-super-duplex') }}">Duplex & Super Duplex</a>
                                    </td>
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
            <div class="container">
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.nickel-Based-Superalloys') }}">
                                <img class="w-100" src="{{ asset('assets/images/product/NICKLE-ALLOYS.webp') }}"
                                    alt="Nickel alloy tubes for heat exchangers" loading="lazy" width="400" height="260">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0">NICKEL ALLOYS</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.austenitic-stainless-Steel') }}">
                                <img class="w-100" src="{{ asset('assets/images/product/STAINLESS-STEEL.webp') }}"
                                    alt="Stainless steel boiler and condenser tubes" loading="lazy" width="400"
                                    height="260">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0">STAINLESS STEEL</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.duplex-and-super-duplex') }}">
                                <img class="w-100" src="{{ asset('assets/images/product/DUPLEX-SUPER.webp') }}"
                                    alt="Duplex and super duplex tubes for seawater service" loading="lazy" width="400"
                                    height="260">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0">DUPLEX & SUPER</h6>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.titanium') }}">
                                <img class="w-100" src="{{ asset('assets/images/product/TITANIUM-ALLOYS.webp') }}"
                                    alt="Titanium heat exchanger and condenser tubes" loading="lazy" width="400"
                                    height="260">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0">TITANIUM ALLOYS</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4 ">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.haynes-Superalloys') }}">
                                <img class="w-100" src="{{ asset('assets/images/product/RARE-TO-ALLOYS.webp') }}"
                                    alt="Haynes superalloy tubes for high-temperature service" loading="lazy" width="400"
                                    height="260">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0">Haynes Superalloys</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.inconel') }}">
                                <img class="w-100" src="{{ asset('assets/images/product/CARBON-ALLOYS.webp') }}"
                                    alt="Inconel alloy tubes for corrosion-resistant applications" loading="lazy"
                                    width="400" height="260">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0">Inconel</h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    {{-- Gallery --}}


    {{-- Applications --}}
    <section id="applications" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of 90 Degree Elbows</h2>
                <p class="text-center pb-3">
                    <strong class="text-black">90 Degree Elbows</strong> are ubiquitous in any piping infrastructure:
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Petrochemical & Refineries</h5>
                        <ul>
                            <li>Primary fitting used to route process piping, crude oil lines, and flare stacks.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Oil & Gas Exploration</h5>
                        <ul>
                            <li>Used extensively in high-pressure onshore and offshore drilling manifolds.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge"></i></div>
                        <h5>Power Plants</h5>
                        <ul>
                            <li>Alloy steel (P91) elbows are used for high-temperature, high-pressure steam distribution.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-buildings"></i></div>
                        <h5>Shipbuilding & Marine</h5>
                        <ul>
                            <li>Short Radius (SR) elbows are heavily used in compact shipboard engine rooms and cargo
                                piping.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-prescription2"></i></div>
                        <h5>Chemical & Pharmaceutical</h5>
                        <ul>
                            <li>Stainless steel (316L) elbows prevent contamination and resist chemical corrosion.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-water"></i></div>
                        <h5>Water Treatment</h5>
                        <ul>
                            <li>Routing large diameter water mains and pump station discharge lines.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="mechanical" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Mechanical Properties (Stainless Steel A403 WP316)</h2>
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
                            <td>ASTM A403 WP304</td>
                            <td>515</td>
                            <td>205</td>
                            <td>28</td>
                            <td>-</td>
                        </tr>
                        <tr class="t-row">
                            <td>ASTM A403 WP316</td>
                            <td>515</td>
                            <td>205</td>
                            <td>28</td>
                            <td>-</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="text-center mt-2 small text-muted">*Properties must match the corresponding seamless pipe
                specification (e.g., A312 TP316 for A403 WP316).</p>
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
                        <h5>Massive inventory of ASME B16.9 fittings</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Seamless elbows up to 24" (Welded up to 48")</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Both LR and SR geometries in stock</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Fast, reliable global shipping to the GCC</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-file-earmark-text"></i></div>
                        <h5>100% Traceability and EN 10204 3.1 Certification</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-tools"></i></div>
                        <h5>Capability to supply high-thickness (XXS) elbows</h5>
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
                                <h4>How do I choose between a Long Radius (LR) and a Short Radius (SR) elbow?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Long Radius (LR) elbows are the industry standard for most applications because they
                                    offer less fluid resistance and lower pressure drop. You should only choose a Short
                                    Radius (SR) elbow when space is extremely tight and an LR elbow simply will not fit
                                    (e.g., inside machinery enclosures or ship hulls).</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What is the difference between a seamless and a welded elbow?</h4>
                            </div>
                            <div class="accord-content">
                                <p>A seamless elbow is hot-formed directly from a seamless pipe and has no weld seam, making
                                    it inherently stronger and ideal for critical high-pressure systems. Welded elbows are
                                    formed from welded pipes or steel plates; they are more cost-effective and are the only
                                    option for very large diameters (typically > 24").</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What does "Schedule 40" mean for an elbow?</h4>
                            </div>
                            <div class="accord-content">
                                <p>The Schedule refers to the wall thickness of the fitting. A Schedule 40 elbow will
                                    exactly match the inner and outer diameter of a Schedule 40 pipe, ensuring a flush joint
                                    for butt-welding. Higher schedules (like Sch 80 or 160) mean thicker walls for higher
                                    pressure ratings.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Are 90 Degree Elbows radiographed?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Yes, for welded elbows (like ASTM A234 WPBW), the longitudinal weld seam is usually 100%
                                    radiographed to ensure there are no defects before forming.</p>
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
                <p>For further information, bulk quotes, or custom high-pressure requirements for 90 Degree Elbows,
                    <strong>Moksh Tubes & Fittings LLP</strong> is your reliable industrial partner.</p>
                <a href="javascript:void(0);" class="contact-cta-btn" data-bs-toggle="modal"
                    data-bs-target="#contactFormModal">
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
                      "@id": "https://mokshtubes.com/#90-degree-elbow",
                      "name": "90 Degree Buttweld Elbow",
                      "image": "https://mokshtubes.com/assets/images/product/flangs/90-degree-elbows_11zon.jpeg",
                      "category": "Pipe Fittings",
                      "description": "Premium 90 Degree Pipe Elbows (LR & SR) per ASME B16.9. Available in Carbon Steel, Stainless Steel, and Alloy Steel.",
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