@extends('layouts.master')

@section('title', '420HC Stainless Steel | High Strength Alloy Supplier')
@section('meta_description',
    'Premium 420HC Stainless Steel offering high hardness, corrosion resistance & excellent
    wear properties for industrial, engineering & tooling applications.')
@section('meta_keywords',
    '420HC Stainless Steel, UNS S42000, AISI 420HC, High Carbon Martensitic Stainless Steel,
    Corrosion Resistant Stainless Steel, High Hardness Stainless Steel, Wear Resistant Alloy, Industrial Stainless Steel
    Supplier, Engineering Grade Stainless Steel, Tooling Stainless Steel')
@section('og_image', asset('assets/images/high-strength-stainless-steel/420HC-STAINLESS-STEEL.jpeg'))
@section('og_type', 'article')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area"
        style="background-image: url(/assets/images/high-strength-stainless-steel/420HC-STAINLESS-STEEL.jpeg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Stainless Steel 420HC <br> High Carbon Martensitic Stainless Steel</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="sticky-top bg-white border-bottom material-tabs  w-100">
        <div class="container">
            <a href="#overview">Overview</a> |
            <a href="#composition">Chemical Composition</a> |
            <a href="#heat-treatment">Heat Treatment</a> |
            <a href="#mechanical">Mechanical Properties</a> |
            <a href="#price">Advantages</a> |
            <a href="#applications">Applications</a> |
            <a href="#faq">FAQ</a> |
            <a href="#contact-us">Contact Us</a>
        </div>
    </div>

    <!--End breadcrumb area-->
    <section id="overview" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Product Overview</h2>

            </div>

            <h2 class="fw-semibold text-center mb-5" style="color: #db7227;">
                INTRODUCTION TO STAINLESS STEEL 420HC / UNS S42000 / AISI 420HC
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/high-strength-stainless-steel/420HC-STAINLESS-STEEL.webp') }}"
                        alt="Hastelloy C276" class="img-fluid rounded shadow-sm">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <a href="{{ route('index') }}"><strong class="text-black">MOKSH TUBES & FITTINGS
                                    LLP</strong></a> is a trusted supplier, exporter, importer, and stockist of a wide range
                            of
                            <strong class="text-black">Stainless Steel 420HC</strong> products including Pipes & Tubes,
                            Sheets & Plates, Coils, Bars, Wires, Pipe Fittings, Flanges, Fasteners, and Custom Fabricated
                            Components.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">Stainless Steel 420HC</strong> is a high-carbon martensitic stainless
                            steel and a modified version of the standard 420 grade, designed with increased carbon content
                            for enhanced hardness and wear resistance. The “HC” stands for High Carbon, giving the alloy the
                            capability to reach hardness levels up to approximately 56 HRC after proper heat
                            treatment—higher than conventional 420.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            This grade is recognized for its excellent polishability, good corrosion resistance in mild
                            environments, and superior edge retention. These properties make it a preferred choice in the
                            manufacturing of cutlery, surgical instruments, valve components, precision tools, and
                            mechanical parts that demand a balance of strength and cost-effectiveness.
                        </p>

                        <p class="fs-6 mb-4" style="text-align: justify;">
                            <strong>420HC Stainless Steel</strong> can be readily hardened by heat treatment and responds
                            well to quenching and tempering processes. It also offers good machinability in the annealed
                            condition. While its corrosion resistance is somewhat lower than that of austenitic stainless
                            steels like 304, it performs effectively in fresh water, air, and mild chemical environments,
                            combining durability with affordability.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download High Strength Stainless Steel 420HC Datasheet</h3>
            <p class="mb-3">
                Get the complete High Strength Stainless Steel 420HC datasheet with chemical composition,
                mechanical properties, heat treatment details, and applications.
                Enter your email to receive the PDF instantly.
            </p>

            <!-- Lead Capture Form -->
            <form id="leadForm" method="POST" action="{{ route('lead.capture') }}" class="mb-3">
                @csrf

                <input type="hidden" name="page_path" value="{{ $slug }}">

                <div class="row justify-content-center">
                    <div class="col-md-6 mb-2">
                        <input type="email" name="email" required class="form-control p-3"
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

            @if (session('success'))
                <div class="alert alert-success mt-3">
                    {{ session('success') }}
                </div>
            @endif

            <p class="small text-muted">
                We respect your privacy. Your email will only be used to send the datasheet.
            </p>
        </div>
    </section>
    <!-- End Datasheet -->


    <!-- Specifications Section -->
    <section class="sec-padd-top" id="specification">
        <div class="container">
            <div class="section-title center">
                <h2>Material Summary – SS 420HC / UNS S42000</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Property</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td>Material Type</td>
                                    <td>High-Carbon Martensitic Stainless Steel</td>
                                </tr>
                                <tr class="t-row">
                                    <td>UNS Designation</td>
                                    <td>S42000 (High Carbon variant)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>AISI</td>
                                    <td>420HC</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium Content</td>
                                    <td>12.0 – 14.0 %</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon Content</td>
                                    <td>0.40 – 0.50 %</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Heat Treatable</td>
                                    <td>✔ Yes (Quench & Temper)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Maximum Hardness</td>
                                    <td>52 – 56 HRC</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Wear Resistance</td>
                                    <td>Very Good</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Corrosion Resistance</td>
                                    <td>Moderate</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Magnetic Property</td>
                                    <td>Fully Magnetic</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Typical Density</td>
                                    <td>~7.70 g/cm³</td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="mt-3 text-center">
                            📌 420HC sits between standard 420 and 440A — offering higher hardness than 420 with better
                            corrosion resistance than 440B/440C.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Chemical Composition -->
    <section id="composition" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Chemical Composition of SS 420HC</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Element</th>
                                    <th>Composition (%)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Carbon (C)</td>
                                    <td>0.40 – 0.50</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium (Cr)</td>
                                    <td>12.00 – 14.00</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese (Mn)</td>
                                    <td>1.00 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon (Si)</td>
                                    <td>1.00 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Phosphorus (P)</td>
                                    <td>0.040 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sulfur (S)</td>
                                    <td>0.030 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nickel (Ni)</td>
                                    <td>≤ 1.00 (typical)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron (Fe)</td>
                                    <td>Balance</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Physical Properties -->
    <section id="properties" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color:#174268;">Technical Composition of SS 420HC</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h3 class="text-center mb-3" style="color: #db7227;">Physical Properties of SS 420HC
                    </h3>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Property</th>
                                    <th>Value</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Density</td>
                                    <td>7.70 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Point</td>
                                    <td>1450 °C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Modulus of Elasticity</td>
                                    <td>200 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Thermal Conductivity</td>
                                    <td>24.9 W/m·K at 100 °C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Specific Heat</td>
                                    <td>460 J/kg·K</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Electrical Resistivity</td>
                                    <td>0.55 µΩ·m</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Heat Treatment -->
            <div class="row justify-content-center mt-5" id="heat-treatment">
                <div class="col-lg-8">
                    <h4 class="text-center mb-3" style="color:#db7227;">
                        Heat Treatment & Hardening Cycle – SS 420HC
                    </h4>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Process</th>
                                    <th>Temperature Range</th>
                                    <th>Purpose</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Annealing</td>
                                    <td>840 – 900 °C</td>
                                    <td>Improves machinability</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Hardening (Austenitizing)</td>
                                    <td>980 – 1050 °C</td>
                                    <td>Forms martensitic structure</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Quenching</td>
                                    <td>Oil / Air</td>
                                    <td>Achieves hardness</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tempering</td>
                                    <td>150 – 370 °C</td>
                                    <td>Adjusts toughness & strength</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Stress Relieving</td>
                                    <td>600 – 650 °C</td>
                                    <td>Reduces internal stresses</td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="mt-3 text-center">
                            📌 Proper quenching & tempering is essential to achieve optimal hardness, edge retention, and
                            wear resistance.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mechanical Properties -->
    <section class="sec-padd-top sec-padd-bottom" id="mechanical">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color:#174268;">
                    Mechanical Properties of SS 420HC (Hardened & Tempered)
                </h2>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Property</th>
                            <th>Metric</th>
                            <th>Imperial</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="t-row">
                            <td>Tensile Strength</td>
                            <td>700 – 850 MPa</td>
                            <td>102,000 – 123,000 psi</td>
                        </tr>
                        <tr class="t-row">
                            <td>Yield Strength (0.2%)</td>
                            <td>500 – 600 MPa</td>
                            <td>72,500 – 87,000 psi</td>
                        </tr>
                        <tr class="t-row">
                            <td>Elongation</td>
                            <td>15 – 20 %</td>
                            <td>15 – 20 %</td>
                        </tr>
                        <tr class="t-row">
                            <td>Hardness</td>
                            <td>52 – 56 HRC</td>
                            <td>52 – 56 HRC</td>
                        </tr>
                        <tr class="t-row">
                            <td>Impact Toughness</td>
                            <td>Moderate</td>
                            <td>Moderate</td>
                        </tr>
                    </tbody>
                </table>

                <p class="mt-3 text-center">
                    Note: Mechanical properties depend on exact heat treatment cycles (annealing, hardening, tempering).
                </p>
            </div>
        </div>
    </section>

    <!-- Available Forms -->
    <section class="sec-padd-top sec-padd-bottom bg-light" id="related grades">
        <div class="container">
            <div class="section-title center mt-5">
                <h2>Available Forms & Size Range – SS 420HC</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <table class="table table-bordered table-striped align-middle">
                        <thead class="table-dark text-center">
                            <tr class="t-row">
                                <th>Product Form</th>
                                <th>Typical Size Range</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr class="t-row">
                                <td>Round Bars / Rods</td>
                                <td>Ø6 mm – Ø400 mm</td>
                            </tr>
                            <tr class="t-row">
                                <td>Flat Bars</td>
                                <td>5 – 100 mm</td>
                            </tr>
                            <tr class="t-row">
                                <td>Sheets & Plates</td>
                                <td>0.5 – 60 mm</td>
                            </tr>
                            <tr class="t-row">
                                <td>Coils & Strips</td>
                                <td>0.3 – 6 mm</td>
                            </tr>
                            <tr class="t-row">
                                <td>Pipes & Tubes</td>
                                <td>OD 6 – 610 mm</td>
                            </tr>
                            <tr class="t-row">
                                <td>Fasteners</td>
                                <td>M6 – M64</td>
                            </tr>
                            <tr class="t-row">
                                <td>Forged Components</td>
                                <td>As per drawing</td>
                            </tr>
                            <tr class="t-row">
                                <td>Precision Machined Parts</td>
                                <td>CNC / Heat-treated</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- International Standards -->
    <section class="sec-padd-top sec-padd-bottom" id="international">
        <div class="container">
            <div class="section-title center">
                <h2>International Standards & Equivalent Grades – SS 420HC</h2>
            </div>

            <div class="table-responsive col-lg-8 mx-auto">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Standard</th>
                            <th>Equivalent Grade</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="t-row">
                            <td>UNS</td>
                            <td>S42000</td>
                        </tr>
                        <tr class="t-row">
                            <td>AISI</td>
                            <td>420HC</td>
                        </tr>
                        <tr class="t-row">
                            <td>EN</td>
                            <td>1.4021 / 1.4028 (close equivalents)</td>
                        </tr>
                        <tr class="t-row">
                            <td>DIN</td>
                            <td>X46Cr13</td>
                        </tr>
                        <tr class="t-row">
                            <td>ASTM</td>
                            <td>A276, A314, A580</td>
                        </tr>
                        <tr class="t-row">
                            <td>JIS</td>
                            <td>SUS 420</td>
                        </tr>
                        <tr class="t-row">
                            <td>ISO</td>
                            <td>X46Cr13</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>



    @php
        $products = [
            [
                'name' => 'Seamless Pipes',
                'route' => 'products.pipes-tubes.seamless-pipes',
                'image' => 'assets/images/all-product/seamless-pipes-10.webp',
            ],

            [
                'name' => 'Welded Pipes (ERW & EFW)',
                'route' => 'products.pipes-tubes.welded-pipes',
                'image' => 'assets/images/all-product/welded-pipes-tubes-1.webp',
            ],
            [
                'name' => 'Tubes (Capillary, U-Bend)',
                'route' => 'products.pipes-tubes.u-bent-tubes',
                'image' => 'assets/images/all-product/u-bent-tube.webp',
            ],
            [
                'name' => 'Sheets & Plates',
                'route' => 'products.sheets-plates-coils.sheets-and-plates',
                'image' => 'assets/images/all-product/Sheets-Plates.webp',
            ],
            [
                'name' => 'Coils & Strips',
                'route' => 'products.sheets-plates-coils.strips',
                'image' => 'assets/images/aluminium-alloys/aluminium-alloys-5083.webp',
            ],
            [
                'name' => 'Round Bars, Flat Bars, Hex Bars, Square Bars',
                'route' => 'products.bars-rods',
                'image' => 'assets/images/aluminium-alloys/aluminium-alloys-6063.webp',
            ],
            [
                'name' => 'Pipe Fittings (Elbows, Tees, Reducers, Caps, Stub Ends)',
                'route' => 'products.pipe-fittings-flanges-fasteners.pipe-fittings',
                'image' => 'assets/images/aluminium-alloys/aluminium-alloys-6012.webp',
            ],
            [
                'name' => 'Flanges (Weld Neck, Slip-On, Blind, Socket Weld, Threaded)',
                'route' => 'products.pipe-fittings-flanges-fasteners.flanges-and-gaskets',
                'image' => 'assets/images/engineering-steels/engineering-steels-4130.webp',
            ],
            [
                'name' => 'Fasteners (Bolts, Nuts, Screws, Washers, Studs)',
                'route' => 'products.pipe-fittings-flanges-fasteners.fasteners',
                'image' => 'assets/images/all-product/FASTENERS.webp',
            ],
            [
                'name' => 'Custom Fabricated Components',
                'route' => 'products.pipe-fittings-flanges-fasteners.custom-fabricated-fittings',
                'image' => 'assets/images/all-product/custom-metal-fabricated.webp',
            ],
        ];
    @endphp

    <section id="products" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Products in Stainless Steel 420HC</h2>
            </div>

            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        With our specialized manufacturing capabilities and extensive global sourcing network,
                        <strong class="text-dark">MOKSH TUBES & FITTINGS LLP</strong> offers a comprehensive range of
                        high-performance <strong class="text-dark">Stainless Steel 420HC</strong> products designed for
                        diverse
                        industrial and commercial applications. Known for its excellent hardness, polishability, and wear
                        resistance,
                        420HC Stainless Steel serves as an ideal material for high-precision and durable components.
                    </p>
                </div>
            </div>

            <!-- Horizontal Styled Product List -->
            <div class="row justify-content-center mb-5">
                <div class="col-lg-10">
                    <div class="p-4 bg-white rounded shadow-sm border-start border-4" style="border-color: #db7227;">
                        <div class="row">
                            <div class="col-12 col-sm-6 mb-2 d-flex align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Seamless Pipes & Tubes</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Welded Pipes (ERW & EFW)</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Capillary, U-Bend, Boiler & Heat Exchanger Tubes</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Sheets & Plates</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Coils & Strips</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Round Bars, Flat Bars, Square & Hex Bars</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Pipe Fittings (Elbows, Tees, Reducers, Caps, Stub Ends)</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Flanges (Weld Neck, Slip-On, Blind, Socket Weld, Threaded)</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Fasteners (Bolts, Nuts, Screws, Washers, Studs)</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Custom-Fabricated Components</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Emphasized Line -->
            <div class="row justify-content-center mb-3">
                <div class="col-lg-10">
                    <p class="fw-bold fs-5 text-center my-4" style="color: #174268;">
                        We offer Stainless Steel 420HC in a wide range of product forms, engineered for maximum strength,
                        durability, and reliability.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <!-- Product Image Cards (Now centered and responsive) -->
    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-4 justify-content-center">
        @foreach ($products as $product)
            <div class="col d-flex">
                <a href="{{ route($product['route']) }}" class="text-decoration-none w-100">
                    <div class="product-card h-100">
                        <img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}" class="img-fluid w-100">
                        <h6 class="product-card-title text-center mt-0 py-4">{{ $product['name'] }}</h6>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    </div>
    </section>


    <section id="uses" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Uses and Advantages of 420HC stainless steel</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-bar-chart-line"></i></div>
                        <h5>High Hardness & Edge Retention</h5>
                        <p>Achieves superior hardness levels through precise heat treatment processes.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-water"></i></div>
                        <h5>Moderate Corrosion Resistance</h5>
                        <p>Performs well in fresh water, air, and mild chemical environments.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-brush"></i></div>
                        <h5>Excellent Polishability</h5>
                        <p>Ideal for decorative applications and precision-finished parts requiring high polish.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-tools"></i></div>
                        <h5>Good Wear Resistance</h5>
                        <p>Suitable for cutting, sliding, and high-contact mechanical applications.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer"></i></div>
                        <h5>Heat-Treatable for Enhanced Properties</h5>
                        <p>Simple hardening and tempering treatments improve mechanical strength and performance.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-cash-stack"></i></div>
                        <h5>Cost-Effective Alloy</h5>
                        <p>Provides a balanced combination of performance, durability, and affordability.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Stainless Steel 420HC</h2>
                <p class="text-center pb-3">
                    <strong class="text-dark">Stainless Steel 420HC</strong> is widely used in applications requiring high
                    hardness, moderate corrosion resistance, and long-term durability across multiple industries.
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-scissors"></i></div>
                        <h5>Cutlery & Blades</h5>
                        <p>Used in knives, scissors, razor blades, surgical scalpels, and cutting tools that require sharp
                            edges, polishability, and wear resistance.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-hospital"></i></div>
                        <h5>Medical & Surgical Instruments</h5>
                        <p>Ideal for scissors, forceps, clamps, and other precision instruments that demand hardness,
                            cleanliness, and sterilization compatibility.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Industrial Components</h5>
                        <p>Used in valve parts, pump shafts, bushings, fasteners, and mechanical seals exposed to mild
                            chemical or abrasive environments.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-car-front"></i></div>
                        <h5>Automotive & Engineering</h5>
                        <p>Applied in shafts, wear-resistant components, and decorative trims that require durability and an
                            aesthetic polished surface.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-house-heart"></i></div>
                        <h5>Consumer Products</h5>
                        <p>Preferred for high-end tools, kitchen utensils, and luxury decorative items due to its polished
                            finish and prolonged edge retention.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-diagram-2"></i></div>
                        <h5>General Manufacturing</h5>
                        <p>Used in springs, dies, washers, and small precision-machined parts where strength and
                            machinability are essential.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container text-center">
            <div class="section-title center">
                <h2>WHY CHOOSE US?</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-award-fill"></i></div>
                        <h5>Experts in Stainless & High-Performance Alloys</h5>
                        <p>Specializing in manufacturing premium quality stainless steels and advanced alloys to meet
                            industry standards.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Reliable Global Supplier Network</h5>
                        <p>Access to top-grade raw materials through trusted global sourcing partnerships.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Extensive Product Portfolio</h5>
                        <p>Offering both standard and custom-sized products to cater to diverse industrial needs.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-flask"></i></div>
                        <h5>Technical Expertise in Heat-Treatable Grades</h5>
                        <p>Providing engineering guidance and manufacturing precision for heat-treated stainless steel
                            grades.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Commitment to Quality & Timely Delivery</h5>
                        <p>Ensuring reliability, consistency, and on-time delivery for every client project.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="price" class="sec-padd-top sec-padd-bottom bg-light py-5">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h2>Stainless Steel 420HC Price per kg in India</h2>
            </div>

            <p class="text-center fs-5">
                <strong>Typical Range:</strong> ₹280 – ₹620 per kg
            </p>
            <p class="text-center mb-2">
                (Price varies by OD, wall thickness, form, and finish)
            </p>

            <p class="text-center fs-5">
                Contact us for exact quotation based on size and quantity.
            </p>
        </div>
    </section>

    <!--Start faq content area-->
    <section  id="faq" class="faq-content-area sec-padd2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="accordion-box">
                        <div class="section-title center">
                            <h2>FAQ’s – 420HC Stainless Steel</h2>
                        </div>

                        <!-- Q1 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What is 420HC Stainless Steel?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    420HC Stainless Steel is a high-carbon martensitic stainless steel designed for superior
                                    hardness, wear resistance, and corrosion resistance. It is widely used in knives,
                                    cutting tools, and precision components.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are its main properties?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Key properties include:
                                <ul>
                                    <li>High hardness after heat treatment</li>
                                    <li>Excellent edge retention</li>
                                    <li>Good corrosion resistance</li>
                                    <li>Wear and abrasion resistance</li>
                                    <li>Good machinability and polishability</li>
                                </ul>
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Where is it used?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Common applications include knife blades, surgical instruments, hand tools, cutting
                                    tools, bearings, and wear parts.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Is it weldable?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Yes, but welding should be done with caution due to the high carbon content. Post-weld
                                    heat treatment is recommended to restore hardness and corrosion resistance.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose MOKSH TUBES & FITTINGS LLP for 420HC Stainless Steel?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP offers high-quality 420HC stainless steel manufactured to
                                    exacting standards, with precision, durability, and global delivery capabilities to meet
                                    specialized requirements across industries.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End faq content area-->

    {{-- blog section start --}}
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
    {{-- blog section end --}}


    <!-- Contact Section -->
    <section id="contact-us" class="sec-padd-bottom">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Contact Us</h2>
                <p>
                    For more information, technical support, or to request a quote for <strong>Stainless Steel
                        420HC</strong>, contact <strong>Moksh Tubes & Fittings LLP</strong> – your trusted partner for
                    high-quality stainless steel products and custom solutions.
                </p>

                <!-- Call button -->
                <a href="javascript:void(0);" class="contact-cta-btn" data-bs-toggle="modal"
                    data-bs-target="#contactFormModal">
                    Get in Touch
                </a>
            </div>
        </div>
    </section>






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
                "name": "What is 420HC Stainless Steel?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "420HC Stainless Steel is a high-carbon martensitic stainless steel designed for superior hardness, wear resistance, and corrosion resistance. It is widely used in knives, cutting tools, and precision components."
                }
                },
                {
                "@type": "Question",
                "name": "What are its main properties?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Key properties include: high hardness after heat treatment, excellent edge retention, good corrosion resistance, wear and abrasion resistance, and good machinability and polishability."
                }
                },
                {
                "@type": "Question",
                "name": "Where is it used?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Common applications include knife blades, surgical instruments, hand tools, cutting tools, bearings, and wear parts."
                }
                },
                {
                "@type": "Question",
                "name": "Is it weldable?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, but welding should be done with caution due to the high carbon content. Post-weld heat treatment is recommended to restore hardness and corrosion resistance."
                }
                },
                {
                "@type": "Question",
                "name": "Why choose MOKSH TUBES & FITTINGS LLP for 420HC Stainless Steel?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "MOKSH TUBES & FITTINGS LLP offers high-quality 420HC stainless steel manufactured to exacting standards, with precision, durability, and global delivery capabilities to meet specialized requirements across industries."
                }
                }
            ]
            }

        @endverbatim
    </script>
@endsection
