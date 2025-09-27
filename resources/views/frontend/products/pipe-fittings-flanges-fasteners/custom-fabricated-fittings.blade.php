@extends('layouts.master')
@section('title', 'Custom Fabricated Fittings | Moksh Tubes & Fittings')
@section('meta_description', 'Moksh Tubes & Fittings LLP offers custom fabricated fittings in SS, CS, Duplex, Nickel, and Titanium alloys, made to ASTM/ASME standards for critical industrial applications.')
@section('meta_keywords', 'custom fabricated fittings, stainless steel fittings, alloy steel fittings, duplex fittings, titanium fittings, nickel alloy fittings, ASTM fittings, ASME fittings, industrial fittings, pressure vessel fittings')
@section('content')
    <!--Start breadcrumb area-->


    <!--End mainmenu area-->

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Custom Fabricated Fittings</h1>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Custom Fabricated Fittings</h2>
            </div>

            <div class="row align-items-center">
                <!-- Left Image -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/peoduct/flangs/custom-fabricated-fittings.jpeg') }}"
                        alt="Custom-Fabricated-Fittings" class="img-fluid rounded shadow-sm">
                </div>

                <!-- Right Content -->
                <div class="col-md-6">
                    <p class="fs-6 mb-3 text-justify">
                        <strong class="text-black">Custom Fabricated Fittings</strong> are specialized piping and structural
                        components supplied to meet unique design, dimensional, or operational requirements. Unlike standard
                        fittings, these are engineered and fabricated to customer specifications ensuring perfect
                        compatibility with project layouts, pressure ratings, and environmental conditions.
                    </p>
                    <p class="fs-6 mb-3 text-justify">
                        <a href="{{ route('index') }}">Moksh Tubes & Fittings LLP</a>, we produce a wide range of custom
                        fabricated fittings in <a href="{{ route('materials') }}">materials</a> like stainless steel, carbon
                        steel, alloy steel, duplex & super
                        duplex, <a href="{{ route('materials.titanium') }}">titanium</a>, and <a
                            href="{{ route('materials.nickel-Based-Superalloys') }}">nickel alloys</a>. Our fittings comply
                        with ASTM, ASME, DIN, EN, and API
                        standards, and are crafted using cutting, forming, bending, <a
                            href="{{ route('blogs.welded-vs-seamless') }}">welding</a>, and machining techniques to
                        deliver precision and reliability for critical industries.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Specifications</h2>
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
                                    <td>Stainless Steel, Carbon Steel, Alloy Steel, Duplex &amp; Super Duplex, Nickel
                                        Alloys, Titanium, Copper Alloys</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Grades</td>
                                    <td>ASTM, ASME, DIN, EN, and API certified grades – all major alloys available</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Size Range</td>
                                    <td>½” NB to 72” NB (larger sizes on request)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Thickness</td>
                                    <td>SCH 5 to SCH XXS (custom schedules available)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Types</td>
                                    <td>Elbows, Tees, Reducers, Crosses, Stub Ends, Laterals, Headers, Manifolds, Y-pieces,
                                        Custom Shapes</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Fabrication Methods</td>
                                    <td>Cutting, Forming, Welding, Bending, Machining, CNC Finishing</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Standards</td>
                                    <td>ASTM A403, A815, B366, MSS-SP-43, ASME B16.9/B16.28 (as applicable)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Finishes</td>
                                    <td>Pickled &amp; Passivated, Bead Blasted, Mirror Polish (for decorative or sanitary
                                        applications)</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2 class="fw-bold" style="color: #174268;">Product Range Charts</h2>


            </div>
            <!-- Child Title -->
            <div class="section-title center mb-3">
                <h4 class="text-center mb-0" style="color: #db7227;">Weight Chart</h4>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr class="t-row">
                            <th>Fitting Type</th>
                            <th>Available Sizes (inches)</th>
                            <th>Wall Thickness (SCH)</th>
                            <th>Materials Available</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row">
                            <td>Elbows (Short/Long Radius)</td>
                            <td>½&quot; – 48&quot;</td>
                            <td>SCH 5 – SCH 160, XXS</td>
                            <td>Nickel Alloys, Stainless, Duplex, Titanium</td>
                        </tr>
                        <tr class="t-row">
                            <td>Reducers (Concentric / Eccentric)</td>
                            <td>½&quot; – 48&quot;</td>
                            <td>SCH 10 – SCH 160</td>
                            <td>Hastelloy, Inconel, Monel, Alloy Steel</td>
                        </tr>
                        <tr class="t-row">
                            <td>Tees / Crosses</td>
                            <td>½&quot; – 48&quot;</td>
                            <td>SCH 10 – SCH 160</td>
                            <td>SS, Duplex, Super Duplex, Copper Alloys</td>
                        </tr>
                        <tr class="t-row">
                            <td>Stub Ends / Lap Joint</td>
                            <td>½&quot; – 24&quot;</td>
                            <td>SCH 5 – SCH 80</td>
                            <td>All Grades</td>
                        </tr>
                        <tr class="t-row">
                            <td>Headers, Laterals, Branch Fittings</td>
                            <td>As per design</td>
                            <td>Custom wall thickness</td>
                            <td>On request</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </section>
    <section class="bg-light" style="">
        <div class="container">

            <!-- Parent Title -->
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Dimensions</h2>
            </div>

            <!-- Child Title -->
            <div class="section-title center mb-3">
                <h4 class="text-center mb-0" style="color: #db7227;">Expanded Table (Long Radius Elbow – ASME B16.9)</h4>
            </div>


            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Nominal Pipe Size (NPS)</th>
                                    <th>Outside Diameter (D) (mm)</th>
                                    <th>Center-to-End (A) (mm)</th>
                                    <th>Wall Thickness (t) (mm)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>2&quot;</td>
                                    <td>60.3</td>
                                    <td>76</td>
                                    <td>As per schedule</td>
                                </tr>
                                <tr class="t-row">
                                    <td>4&quot;</td>
                                    <td>114.3</td>
                                    <td>152</td>
                                    <td>As per schedule</td>
                                </tr>
                                <tr class="t-row">
                                    <td>8&quot;</td>
                                    <td>219.1</td>
                                    <td>305</td>
                                    <td>As per schedule</td>
                                </tr>
                                <tr class="t-row">
                                    <td>12&quot;</td>
                                    <td>323.9</td>
                                    <td>457</td>
                                    <td>As per schedule</td>
                                </tr>
                                <tr class="t-row">
                                    <td>24&quot;</td>
                                    <td>610</td>
                                    <td>914</td>
                                    <td>As per schedule</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light" style="padding-top: 80px;">
        <div class="container">

            <!-- Parent Title -->
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Pressure Rating Chart</h2>
            </div>

            <!-- Child Title -->
            <div class="section-title center mb-3">
                <h4 class="text-center mb-0" style="color: #db7227;">Expanded Table (Typical – for Welded Fabricated
                    Fittings)
                </h4>
            </div>


            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped align-middle">
                                <thead class="table-dark text-center">
                                    <tr class="t-row">
                                        <th>Material</th>
                                        <th>Class 150</th>
                                        <th>Class 300</th>
                                        <th>Class 600</th>
                                        <th>Class 900</th>
                                        <th>Class 1500</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <tr class="t-row">
                                        <td>Stainless Steel 316</td>
                                        <td>285 psi</td>
                                        <td>740 psi</td>
                                        <td>1480 psi</td>
                                        <td>2220 psi</td>
                                        <td>3700 psi</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>Duplex 2205</td>
                                        <td>290 psi</td>
                                        <td>750 psi</td>
                                        <td>1500 psi</td>
                                        <td>2250 psi</td>
                                        <td>3750 psi</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>Inconel 625</td>
                                        <td>260 psi</td>
                                        <td>675 psi</td>
                                        <td>1350 psi</td>
                                        <td>2025 psi</td>
                                        <td>3375 psi</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>Hastelloy C276</td>
                                        <td>270 psi</td>
                                        <td>710 psi</td>
                                        <td>1420 psi</td>
                                        <td>2130 psi</td>
                                        <td>3550 psi</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="bg-light" style="padding-top: 80px;">
        <div class="container">

            <!-- Parent Title -->
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Weight Chart</h2>
            </div>

            <!-- Child Title -->
            <div class="section-title center mb-3">
                <h4 class="text-center mb-0" style="color: #db7227;">Expanded Table (Custom Fabricated Reducers)
                </h4>
            </div>


            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped align-middle">
                                <thead class="table-dark text-center">
                                    <tr class="t-row">
                                        <th>NPS (Large End)</th>
                                        <th>NPS (Small End)</th>
                                        <th>Wall Thickness (mm)</th>
                                        <th>Approx. Weight (kg)</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <tr class="t-row">
                                        <td>4&quot;</td>
                                        <td>2&quot;</td>
                                        <td>6.0</td>
                                        <td>3.5</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>8&quot;</td>
                                        <td>4&quot;</td>
                                        <td>8.0</td>
                                        <td>12.0</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>12&quot;</td>
                                        <td>6&quot;</td>
                                        <td>10.0</td>
                                        <td>28.0</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>16&quot;</td>
                                        <td>8&quot;</td>
                                        <td>12.5</td>
                                        <td>50.0</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>24&quot;</td>
                                        <td>12&quot;</td>
                                        <td>15.0</td>
                                        <td>120.0</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="bg-light" style="padding-top: 80px;">
        <div class="container">

            <!-- Parent Title -->
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Tolerances</h2>
            </div>

            <!-- Child Title -->
            <div class="section-title center mb-3">
                <h4 class="text-center mb-0" style="color: #db7227;">Expanded Table (Fabricated Fittings – as per ASME
                    B16.9)
                </h4>
            </div>


            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped align-middle">
                                <thead class="table-dark text-center">
                                    <tr class="t-row">
                                        <th>Parameter</th>
                                        <th>Tolerance</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <tr class="t-row">
                                        <td>Outside Diameter (D)</td>
                                        <td>±1% or ±1.5 mm (whichever is greater)</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>Wall Thickness (t)</td>
                                        <td>Not less than 87.5% of specified</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>Center-to-End (A)</td>
                                        <td>±3 mm (NPS ≤ 12&quot;), ±5 mm (NPS &gt; 12&quot;)</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>Angularity</td>
                                        <td>±0.5°</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>Straightness</td>
                                        <td>0.03 mm per mm</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
    </section>

    {{-- Grades Available --}}
    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Grades Available</h2>
            </div>
            <div class="section-title center mb-3">
                <h4 class="text-center mb-0" style="color: #db7227;"><strong>Custom fabricated fittings</strong> are
                    available in multiple grades for diverse industries:</h4>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Material</th>
                                    <th>Grades</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td>Stainless Steel</td>
                                    <td>304, 304L, 316, 316L, 310, 321, 347 – for hygiene-critical and corrosion-resistant
                                        uses.</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon Steel</td>
                                    <td>ASTM A234 WPB, ASTM A105, IS2062 – for structural and high-pressure piping.</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Duplex & Super Duplex</td>
                                    <td>UNS S31803, S32205, S32750, S32760 – for offshore, marine, and chemical processing.
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nickel Alloys</td>
                                    <td>Inconel 600/625/825, Monel 400/K500, Hastelloy C22/C276 – for extreme heat and
                                        corrosive service.</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Titanium</td>
                                    <td>Grades 1, 2, 5 – for aerospace, desalination, and medical industries.</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Copper Alloys</td>
                                    <td>Cu-Ni 70/30, Cu-Ni 90/10 – for marine, desalination, and shipbuilding applications.
                                    </td>
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
                            <a class="w-100" href="#">
                                <img class="w-100" src="{{ asset('assets/images/peoduct/NICKLE-ALLOYS.jpeg') }}"
                                    alt="NICKLE ALLOYS">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0">NICKLE ALLOYS</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="#">
                                <img class="w-100" src="{{ asset('assets/images/peoduct/STAINLESS-STEEL.jpeg') }}"
                                    alt="STAINLESS STEEL">
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
                            <a class="w-100" href="#">
                                <img class="w-100" src="{{ asset('assets/images/peoduct/DUPLEX-SUPER.png') }}"
                                    alt="DUPLEX & SUPER">
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
                            <a class="w-100" href="##">
                                <img class="w-100" src="{{ asset('assets/images/peoduct/TITANIUM-ALLOYS.jpg') }}"
                                    alt="TITANIUM ALLOYS">
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
                            <a class="w-100">
                                <img class="w-100" src="{{ asset('assets/images/peoduct/RARE-TO-ALLOYS.jpg') }}"
                                    alt="RARE TO ALLOYS">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0">RARE TO ALLOYS</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100">
                                <img class="w-100" src="{{ asset('assets/images/peoduct/CARBON-ALLOYS.jpg') }}"
                                    alt="CARBON ALLOYS">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0">CARBON ALLOYS</h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- Applications --}}
    {{-- <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Application</h2>
            </div>
            <p class="mb-4">
                Welded pipes and tubes are indispensable components in numerous industries due to their exceptional
                strength, precise dimensional accuracy, and cost-effectiveness. These versatile products are widely utilized
                for structural purposes and fluid transport systems, particularly in demanding environments.
            </p>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            1. Oil and Gas Industry
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Welded pipes and tubes find extensive use in the energy sector, including:</strong>
                            <ul>
                                <li>
                                    Onshore and offshore pipeline networks
                                </li>
                                <li>
                                    Crude oil and natural gas transmission systems
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            2. Power Generation
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Power plants rely on welded pipes and tubes to ensure operational efficiency in areas
                                such as:</strong>
                            <ul>
                                <li>
                                    Boiler tubes, superheaters, and economizers
                                </li>
                                <li>
                                    Condensers and feedwater systems
                                </li>
                                <li>
                                    Heat recovery steam generators (HRSG)
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            3. Chemical and Petrochemical Industry
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>For handling corrosive substances and high-pressure environments, welded pipes and tubes
                                are essential in:</strong>
                            <ul>
                                <li>
                                    Transporting corrosive fluids and gases
                                </li>
                                <li>
                                    Process piping within chemical reactors
                                </li>
                                <li>
                                    Distillation and separation systems
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            4. Construction and Infrastructure
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Welded pipes and tubes are critical in the construction sector for:</strong>
                            <ul>
                                <li>
                                    Building structures and architectural frameworks
                                </li>
                                <li>
                                    Bridges, tunnels, and industrial sheds
                                </li>
                                <li>
                                    Water distribution and sewage systems
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            5. Automotive and Transport
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>The automotive and heavy transport industries heavily utilize welded pipes and tubes
                                for:</strong>
                            <ul>
                                <li>
                                    Exhaust systems and fuel lines
                                </li>
                                <li>
                                    Hydraulic systems and structural components
                                </li>
                                <li>
                                    Roll cages and chassis frameworks
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            6. Food, Beverage, and Dairy Processing
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Hygienic-grade welded pipes and tubes ensure safe and sanitary applications in:</strong>
                            <ul>
                                <li>
                                    Sanitary fluid transfer systems
                                </li>
                                <li>
                                    Process lines for dairy and beverage production
                                </li>
                                <li>
                                    Clean-in-place (CIP) and sterilization systems
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            7. Marine and Shipbuilding
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Welded pipes and tubes also serve an integral role in:</strong>
                            <ul>
                                <li>
                                    Seawater piping systems
                                </li>
                                <li>
                                    Ballast and bilge systems
                                </li>
                                <li>
                                    Structural frameworks for ships and offshore platforms
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            8. HVAC and Plumbing
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Welded pipes and tubes provide reliable solutions for the HVAC and plumbing sectors,
                                including:</strong>
                            <ul>
                                <li>
                                    Hot and cold water distribution
                                </li>
                                <li>
                                    Heating, ventilation, and air conditioning systems
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications</h2>
                <p class="text-center pb-3">
                    <strong class="text-black">Custom Fabricated Fittings</strong> are crucial in projects where standard
                    fittings are not suitable due to design constraints or operational demands.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon">
                            <i class="bi bi-fuel-pump-fill"></i>
                        </div>
                        <h5>Oil, Gas & Petrochemical</h5>
                        <ul>
                            <li>Complex pipeline layouts for refineries and offshore platforms.</li>
                            <li>Manifold assemblies, laterals, and special reducers for processing units.</li>
                            <li>High-pressure and high-temperature fittings for critical flow lines.</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon">
                            <i class="bi bi-lightning-charge-fill"></i>
                        </div>
                        <h5>Power Generation & Energy</h5>
                        <ul>
                            <li>Fittings for boiler feed lines, condensers, and turbine systems.</li>
                            <li>Custom elbows, tees, and reducers for nuclear, thermal, and renewable plants.</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon">
                            <i class="bi bi-tsunami"></i>
                        </div>
                        <h5>Marine & Shipbuilding</h5>
                        <ul>
                            <li>Saltwater-resistant fittings for ship piping, ballast systems, and offshore rigs.</li>
                            <li>Large-bore fabricated fittings for desalination plants and marine structures.</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6">
                    <div class="application-card">
                        <div class="application-icon">
                            <i class="bi bi-airplane-engines-fill"></i>
                        </div>
                        <h5>Automotive & Aerospace</h5>
                        <ul>
                            <li>Precision fabricated fittings for fuel lines, exhaust systems, and hydraulic systems.</li>
                            <li>Titanium and nickel alloy fittings for aerospace assemblies and prototypes.</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6">
                    <div class="application-card">
                        <div class="application-icon">
                            <i class="bi bi-building"></i>
                        </div>
                        <h5>Construction & Infrastructure</h5>
                        <ul>
                            <li>Custom bends, headers, and Y-pieces for HVAC, fire protection, and water distribution
                                systems.</li>
                            <li>Structural and architectural fittings for stadiums, malls, and high-rise projects.</li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- <p class="text-center pb-3 my-4"><strong class="text-dark">HASTELLOY C-276's</strong> unique combination of
                corrosion resistance, weldability, and mechanical durability makes it a reliable material for
                mission-critical applications where long-term performance is non-negotiable.

            </p> --}}
        </div>
    </section>

    {{-- Uses of Welded Pipes and Tubes --}}
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Uses of Custom Fabricated Fittings</h2>
            </div>
            <!-- Child Title -->
            <div class="section-title center mb-3">
                <h4 class="text-center mb-0" style="color: #db7227;">Custom Fabricated Fittings</h4>
            </div>
            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-layout-text-sidebar-reverse"></i></div>
                        <h4>Special Layouts</h4>
                        <h5>Enables complex piping designs not possible with standard fittings.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-tools"></i></div>
                        <h4>Project-Specific Needs</h4>
                        <h5>Tailored for unique pressures, temperatures, and flow requirements.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-arrow-counterclockwise"></i></div>
                        <h4>Repair & Replacement</h4>
                        <h5>Used for retrofit projects where older pipelines require non-standard fittings.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-fill-check"></i></div>
                        <h4>Heavy-Duty Service</h4>
                        <h5>Handles harsh chemicals, seawater, and extreme conditions.</h5>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-6">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-vector-pen"></i></div>
                        <h4>Design Flexibility</h4>
                        <h5>Allows architects and engineers to integrate fittings into challenging spaces.</h5>
                    </div>
                </div>
            </div>

        </div>
    </section>
    {{-- Advantages of Welded Pipes & Tubes --}}
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Advantages of Custom Fabricated Fittings</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h4>Precision Engineering</h4>
                        <h5>Designed and fabricated to exact specifications.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-layers"></i></div>
                        <h4>Material Flexibility</h4>
                        <h5>Available in stainless, carbon, duplex, nickel, titanium, and copper alloys.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-cash-stack"></i></div>
                        <h4>Cost-Effective Solutions</h4>
                        <h5>Eliminates the need for multiple welded joints by providing a single-piece fitting.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-clock-history"></i></div>
                        <h4>Quick Turnaround</h4>
                        <h5>Custom solutions delivered faster than sourcing rare or imported parts.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-patch-check-fill"></i></div>
                        <h4>Compliance</h4>
                        <h5>Manufactured as per ASTM, ASME, API, and international standards.</h5>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-fill-check"></i></div>
                        <h4>Enhanced Safety</h4>
                        <h5>Ensures proper flow, pressure handling, and leak-proof integrity.</h5>
                    </div>
                </div>
            </div>

        </div>
    </section>



    {{-- why choose us --}}
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container text-center">
            <div class="section-title center">
                <h2>WHY CHOOSE US?</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3-fill"></i></div>
                        <h5>Decades of Expertise: Specialists in custom fabrication for oil & gas, power, and marine
                            sectors.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-building"></i></div>
                        <h5>State of the Art Facilities: Advanced CNC, bending, and welding capabilities.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-box-seam"></i></div>
                        <h5>Wide Material Inventory: Ready stock of alloys for quick fabrication.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-patch-check-fill"></i></div>
                        <h5>Strict Quality Control: ISO 9001:2015 certified; Mill Test Certificates (MTC) provided.</h5>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Global Supply Network: Serving industries across India, Middle East, Europe, and Asia.</h5>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <!--Start faq content area-->
    <section class="faq-content-area sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="accordion-box">
                        <div class="section-title center">
                            <h2>FAQ's</h2>
                        </div>

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are custom fabricated fittings?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Custom fabricated fittings are specially designed pipe fittings that are manufactured
                                    according to specific requirements, such as size, material, design, or application. They
                                    are used when standard fittings do not meet the needs of a project.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Which industries use custom fabricated fittings?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    These fittings are widely used in oil & gas, petrochemical, power generation, marine,
                                    chemical processing, food & beverage, water treatment, and other industries where unique
                                    piping solutions are required.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What materials are available for custom fabricated fittings?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    We offer fittings in stainless steel, duplex steel, super duplex, nickel alloys
                                    (Inconel, Hastelloy, Monel), titanium, copper alloys, and other high-performance
                                    materials depending on the application.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What types of fittings can be custom fabricated?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Elbows, tees, reducers, crosses, stub ends, branch fittings, lateral fittings, headers,
                                    manifolds, and other complex pipe components can all be fabricated as per project needs.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>How are custom fabricated fittings manufactured?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    They are manufactured through advanced processes such as cutting, bending, welding,
                                    machining, and heat treatment to ensure precise dimensions, strength, and durability.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End faq content area-->

    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Contact Us</h2>
                <p>
                    Need custom fabricated fittings for your pipeline or industrial project?<br>Contact
                    <strong><a href="{{ route('index') }}">Moksh Tubes & Fittings LLP</a></strong>
                </p>
                <!-- Call button -->
                <a href="tel:+919769584950" class="contact-cta-btn">Get in Touch</a>
            </div>
        </div>
    </section>

    <!--End breadcrumb area-->


@endsection
