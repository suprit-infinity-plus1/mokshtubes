@extends('layouts.master')

@section('title', '17-4 PH Stainless Steel | Premium Alloy Supplier')
@section('meta_description',
    '17-4 PH Stainless Steel – high-strength, corrosion-resistant, and durable for aerospace,
    marine, petrochemical, and industrial use.')
@section('meta_keywords',
    '17-4 PH Stainless Steel, UNS S17400, ASTM A564, Precipitation Hardening Alloy, High Strength
    Stainless Steel, Corrosion Resistant Stainless Steel, Aerospace Stainless Steel, Marine Grade Stainless Steel,
    Industrial Stainless Steel Supplier')
@section('og_image', asset('assets/images/high-strength-stainless-steel/17-4-PH-STAINLESS-STEEL.webp'))
@section('og_type', 'article')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area"
        style="background-image: url(/assets/images/high-strength-stainless-steel/17-4-PH-STAINLESS-STEEL.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>17-4PH Stainless Steel Type 630 <br> Precipitation Hardening Alloy</h1>
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
    <section id="overview"  class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Product Overview</h2>

            </div>

            <h2 class="fw-semibold text-center mb-5" style="color: #db7227;">
                INTRODUCTION TO 17-4 PH STAINLESS STEEL / UNS S17400 / ASTM A564
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/high-strength-stainless-steel/17-4-PH-STAINLESS-STEEL.webp') }}"
                        alt="Hastelloy C276" class="img-fluid rounded shadow-sm">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <a href="{{ route('index') }}"><strong class="text-black">MOKSH TUBES & FITTINGS
                                    LLP</strong></a> is a leading supplier, exporter, importer, and stockist of a wide range
                            of
                            <strong class="text-black">17-4 PH Stainless Steel (UNS S17400)</strong> products including
                            Pipes & Tubes, Pipe Fittings, Flanges, Fasteners, Sheets & Plates, Coils,
                            Wires, Bars, Welding Rods, Mesh, and Custom Fabricated Components.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">17-4 PH Stainless Steel</strong> is a precipitation-hardening
                            martensitic stainless steel that combines high strength, excellent corrosion resistance,
                            and ease of heat treatment into one versatile alloy. Its nominal composition includes chromium,
                            nickel, and copper, which allow it to achieve very high tensile and yield
                            strengths through a simple heat treatment process.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            The alloy is magnetic in all conditions, weldable using conventional techniques, and can be
                            machined efficiently in its solution-annealed or aged states. Due to its ability
                            to develop high mechanical properties without extensive processing, <strong>17-4 PH</strong> is
                            widely used in aerospace, petrochemical, marine, power generation, and general
                            engineering industries.
                        </p>

                        <p class="fs-6 mb-4" style="text-align: justify;">
                            It performs well in mildly corrosive environments, similar to <strong>304 stainless
                                steel</strong>, and offers exceptional resistance to stress corrosion cracking in many
                            applications. Its balance of strength, toughness, and corrosion resistance makes it one of the
                            most commonly used precipitation-hardening stainless steels worldwide.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download High Strength Stainless Steel 17-4ph Datasheet</h3>
            <p class="mb-3">
                Get the complete High Strength Stainless Steel 17-4ph datasheet with chemical composition,
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
                <h2>Material Summary – 17-4 PH / Type 630 / UNS S17400</h2>
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
                                    <td>Precipitation Hardening Martensitic Stainless Steel</td>
                                </tr>
                                <tr class="t-row">
                                    <td>UNS Designation</td>
                                    <td>S17400</td>
                                </tr>
                                <tr class="t-row">
                                    <td>AISI / ASTM</td>
                                    <td>Type 630 / ASTM A564</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Strengthening Method</td>
                                    <td>Precipitation Hardening (Aging)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Heat Treatable</td>
                                    <td>✔ Yes (Solution + Aging)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Typical Hardness Range</td>
                                    <td>28 – 47 HRC (condition dependent)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Corrosion Resistance</td>
                                    <td>Comparable to SS 304</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Stress Corrosion Resistance</td>
                                    <td>Excellent</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Magnetic Property</td>
                                    <td>Fully Magnetic</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Typical Density</td>
                                    <td>~7.75 g/cm³</td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="mt-3 text-center">
                            📌 17-4 PH offers one of the best strength-to-corrosion-resistance ratios among stainless
                            steels.
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
                <h2>Chemical Composition of 17-4 PH Stainless Steel</h2>
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
                                    <td>Chromium (Cr)</td>
                                    <td>15.00 – 17.50</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nickel (Ni)</td>
                                    <td>3.00 – 5.00</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Copper (Cu)</td>
                                    <td>3.00 – 5.00</td>
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
                                    <td>Columbium + Tantalum (Cb + Ta)</td>
                                    <td>0.15 – 0.45</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon (C)</td>
                                    <td>0.07 max</td>
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
                <h2 class="fw-bold" style="color:#174268;">Technical Composition of 17-4 PH Stainless Steel</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h3 class="text-center mb-3" style="color: #db7227;">Physical Properties of 17-4 PH Stainless Steel
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
                                    <td>7.75 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Point</td>
                                    <td>1400–1440 °C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Modulus of Elasticity</td>
                                    <td>200 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Thermal Conductivity</td>
                                    <td>18.4 W/m·K at 100 °C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Specific Heat</td>
                                    <td>500 J/kg·K</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Electrical Resistivity</td>
                                    <td>0.80 µΩ·m</td>
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
                        Heat Treatment & Aging Conditions – 17-4 PH
                    </h4>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Condition</th>
                                    <th>Aging Temp</th>
                                    <th>Typical Properties</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Condition A</td>
                                    <td>1040°C + Air Cool</td>
                                    <td>Soft, machinable</td>
                                </tr>
                                <tr class="t-row">
                                    <td>H900</td>
                                    <td>482°C</td>
                                    <td>Maximum strength & hardness</td>
                                </tr>
                                <tr class="t-row">
                                    <td>H1025</td>
                                    <td>552°C</td>
                                    <td>Balanced strength & toughness</td>
                                </tr>
                                <tr class="t-row">
                                    <td>H1075</td>
                                    <td>580°C</td>
                                    <td>Improved toughness</td>
                                </tr>
                                <tr class="t-row">
                                    <td>H1150</td>
                                    <td>620°C</td>
                                    <td>Best toughness & SCC resistance</td>
                                </tr>
                                <tr class="t-row">
                                    <td>H1150M</td>
                                    <td>Double aged</td>
                                    <td>Marine & critical service</td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="mt-3 text-center">
                            📌 Lower aging temperature = higher strength<br>
                            📌 Higher aging temperature = better toughness & corrosion resistance
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
                    Mechanical Properties of 17-4 PH (H900 Condition)
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
                            <td>1310 MPa</td>
                            <td>190,000 psi</td>
                        </tr>
                        <tr class="t-row">
                            <td>Yield Strength (0.2%)</td>
                            <td>1170 MPa</td>
                            <td>170,000 psi</td>
                        </tr>
                        <tr class="t-row">
                            <td>Elongation</td>
                            <td>8–12 %</td>
                            <td>8–12 %</td>
                        </tr>
                        <tr class="t-row">
                            <td>Reduction of Area</td>
                            <td>45 %</td>
                            <td>45 %</td>
                        </tr>
                        <tr class="t-row">
                            <td>Hardness</td>
                            <td>40–47 HRC</td>
                            <td>40–47 HRC</td>
                        </tr>
                        <tr class="t-row">
                            <td>Impact Toughness</td>
                            <td colspan="2">Good transverse & longitudinal toughness</td>
                        </tr>
                    </tbody>
                </table>

                <p class="mt-3 text-center">
                    Note: Properties depend on heat treatment conditions such as H900, H1025, H1150, etc.
                </p>
            </div>
        </div>
    </section>

    <!-- Available Forms -->
    <section class="sec-padd-top sec-padd-bottom bg-light" id="related grades">
        <div class="container">
            <div class="section-title center mt-5">
                <h2>Available Forms & Size Range – 17-4 PH</h2>
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
                                <td>Ø6 mm – Ø450 mm</td>
                            </tr>
                            <tr class="t-row">
                                <td>Flat Bars</td>
                                <td>6 – 120 mm</td>
                            </tr>
                            <tr class="t-row">
                                <td>Sheets & Plates</td>
                                <td>0.5 – 100 mm</td>
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
                                <td>M6 – M72</td>
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
                <h2>International Standards & Equivalent Grades – 17-4 PH</h2>
            </div>

            <div class="table-responsive col-lg-8 mx-auto">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Standard</th>
                            <th>Equivalent</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="t-row">
                            <td>UNS</td>
                            <td>S17400</td>
                        </tr>
                        <tr class="t-row">
                            <td>ASTM</td>
                            <td>A564, A693</td>
                        </tr>
                        <tr class="t-row">
                            <td>AMS</td>
                            <td>5643, 5644</td>
                        </tr>
                        <tr class="t-row">
                            <td>EN</td>
                            <td>1.4542</td>
                        </tr>
                        <tr class="t-row">
                            <td>DIN</td>
                            <td>X5CrNiCuNb16-4</td>
                        </tr>
                        <tr class="t-row">
                            <td>JIS</td>
                            <td>SUS 630</td>
                        </tr>
                        <tr class="t-row">
                            <td>ISO</td>
                            <td>X5CrNiCuNb16-4</td>
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

    <section id="products"  class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Products in 17-4 PH Stainless Steel</h2>
            </div>

            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">MOKSH TUBES & FITTINGS LLP</strong>, we supply a complete range of
                        <strong class="text-dark">17-4 PH Stainless Steel</strong> products tailored to meet diverse
                        industrial applications.
                        Backed by years of experience and a strong global sourcing network, we ensure top-quality materials
                        that perform reliably under demanding and challenging service conditions.
                    </p>
                </div>
            </div>

            <!-- Horizontal Styled Product List -->
            <div class="row justify-content-center mb-5">
                <div class="col-lg-10">
                    <div class="p-4 bg-white rounded shadow-sm border-start border-4" style="border-color: #db7227;">
                        <div class="row">
                            <div class="col-12 col-sm-6 mb-2 d-flex justify-content-start align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Seamless Pipes</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex justify-content-start align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Welded Pipes (ERW & EFW)</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex justify-content-start align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Tubes (Capillary, U-Bend, Boiler & Heat Exchanger Tubes)</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex justify-content-start align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Sheets & Plates</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex justify-content-start align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Coils & Strips</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex justify-content-start align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Round Bars, Flat Bars, Hex Bars, Square Bars</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex justify-content-start align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Pipe Fittings (Elbows, Tees, Reducers, Caps, Stub Ends)</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex justify-content-start align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Flanges (Weld Neck, Slip-On, Blind, Socket Weld, Threaded)</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex justify-content-start align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Fasteners (Bolts, Nuts, Screws, Washers, Studs)</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex justify-content-start align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Custom Fabricated Components</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Emphasized Line -->
            <div class="row justify-content-center mb-3">
                <div class="col-lg-10">
                    <p class="fw-bold fs-5 text-center my-4" style="color: #174268;">
                        We offer 17-4 PH Stainless Steel in various product forms to match your specific industrial
                        requirements.
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


    <section id="uses"  class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Uses and Advantages of 17-4PH stainless steel</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-bar-chart-line"></i></div>
                        <h5>High Strength & Hardness</h5>
                        <p>Can be strengthened to very high levels through simple heat treatment processes.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Excellent Corrosion Resistance</h5>
                        <p>Exhibits corrosion resistance comparable to 304 stainless steel in many environments.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-wrench"></i></div>
                        <h5>Easy Fabrication & Welding</h5>
                        <p>Compatible with standard manufacturing and welding techniques, minimizing production complexity.
                        </p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-half"></i></div>
                        <h5>Wide Range of Heat Treatments</h5>
                        <p>Properties can be tailored for specific applications using different aging conditions (H900 to
                            H1150).</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Good Toughness & Creep Resistance</h5>
                        <p>Performs reliably under both ambient and elevated temperature conditions.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-globe"></i></div>
                        <h5>Versatile Applications</h5>
                        <p>Widely used in aerospace, marine, chemical, and general industrial sectors for critical
                            components.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="applications"  class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of 17-4 PH Stainless Steel</h2>
                <p class="text-center pb-3">
                    <strong class="text-dark">17-4 PH Stainless Steel</strong> is widely used in applications requiring
                    high mechanical strength and moderate corrosion resistance. Below are some of its major application
                    areas:
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-airplane"></i></div>
                        <h5>Aerospace Industry</h5>
                        <p>Used in aircraft fittings, turbine blades, shafts, landing gear parts, and structural components
                            requiring high fatigue strength and temperature stability.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-beaker"></i></div>
                        <h5>Chemical & Petrochemical Processing</h5>
                        <p>Ideal for pump shafts, valve components, fasteners, and fittings used in mildly corrosive
                            chemical environments.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-water"></i></div>
                        <h5>Marine & Offshore Engineering</h5>
                        <p>Commonly used for propeller shafts, pump housings, marine supports, and fasteners that resist
                            seawater and chloride corrosion.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning"></i></div>
                        <h5>Power Generation</h5>
                        <p>Used in steam turbine components, high-strength bolts, and critical rotating parts due to its
                            excellent heat resistance and strength retention.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cup-straw"></i></div>
                        <h5>Food & Pharmaceutical Processing</h5>
                        <p>Preferred for equipment where cleanliness, moderate corrosion resistance, and mechanical
                            reliability are essential for safety and efficiency.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear"></i></div>
                        <h5>General Engineering</h5>
                        <p>Used for high-strength tools, gears, molds, dies, and fixtures requiring hardness, precision, and
                            stability after heat treatment.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-text"></i></div>
                        <h5>Paper & Pulp Industry</h5>
                        <p>Applied in shafts, rolls, and processing equipment where resistance to moisture, abrasion, and
                            chemical exposure is required.</p>
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
                        <h5>Specialists in manufacturing high-quality products</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Strong supplier network for premium raw materials</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Expertise in nickel alloys and high-performance materials</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Global presence with customized solutions for diverse needs</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Dedicated to quality, dependability, and customer satisfaction</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <section id="price" class="sec-padd-top sec-padd-bottom bg-light py-5">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h2>17-4 PH Stainless Steel Price per kg in India</h2>
            </div>

            <p class="text-center fs-5">
                <strong>Typical Range:</strong> ₹520 – ₹1,200 per kg
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
    <section id="faq" class="faq-content-area sec-padd2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="accordion-box">
                        <div class="section-title center">
                            <h2>FAQ’s – 17-4 PH Stainless Steel</h2>
                        </div>

                        <!-- Q1 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What is 17-4 PH Stainless Steel?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    17-4 PH (Precipitation Hardening) Stainless Steel is a high-strength,
                                    corrosion-resistant alloy widely used in aerospace, chemical, petrochemical, and marine
                                    industries for demanding applications.
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
                                    17-4 PH Stainless Steel offers high hardness, exceptional strength, good corrosion
                                    resistance, and outstanding mechanical performance at elevated temperatures.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What is its chemical composition?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Typical composition includes:<br>
                                    <strong>Chromium (Cr):</strong> 15–17.5%<br>
                                    <strong>Nickel (Ni):</strong> 3–5%<br>
                                    <strong>Copper (Cu):</strong> 3–5%<br>
                                    <strong>Carbon (C):</strong> ≤ 0.07%<br>
                                    <strong>Manganese (Mn):</strong> ≤ 1%<br>
                                    <strong>Silicon (Si):</strong> ≤ 1%<br>
                                    <strong>Iron (Fe):</strong> Balance
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Where is it used?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    17-4 PH Stainless Steel is used in aerospace structural components, chemical process
                                    equipment, marine shafts, pump parts, valves, and tooling applications due to its
                                    strength and durability.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Is it weldable?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Yes, 17-4 PH Stainless Steel can be welded using methods such as TIG or MIG. Post-weld
                                    heat treatment is recommended to restore strength and corrosion resistance.
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
                    For inquiries, technical assistance, or to request a quote for <strong>17-4 PH Stainless Steel</strong>
                    products, reach out to <strong>Moksh Tubes & Fittings LLP</strong> – your trusted partner for
                    high-performance stainless steel solutions.
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
                "name": "What is 17-4 PH Stainless Steel?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "17-4 PH (Precipitation Hardening) Stainless Steel is a high-strength, corrosion-resistant alloy widely used in aerospace, chemical, petrochemical, and marine industries for demanding applications."
                }
                },
                {
                "@type": "Question",
                "name": "What are its main properties?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "17-4 PH Stainless Steel offers high hardness, exceptional strength, good corrosion resistance, and outstanding mechanical performance at elevated temperatures."
                }
                },
                {
                "@type": "Question",
                "name": "What is its chemical composition?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Typical composition includes: Chromium (Cr): 15–17.5%, Nickel (Ni): 3–5%, Copper (Cu): 3–5%, Carbon (C): ≤ 0.07%, Manganese (Mn): ≤ 1%, Silicon (Si): ≤ 1%, Iron (Fe): Balance."
                }
                },
                {
                "@type": "Question",
                "name": "Where is it used?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "17-4 PH Stainless Steel is used in aerospace structural components, chemical process equipment, marine shafts, pump parts, valves, and tooling applications due to its strength and durability."
                }
                },
                {
                "@type": "Question",
                "name": "Is it weldable?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, 17-4 PH Stainless Steel can be welded using methods such as TIG or MIG. Post-weld heat treatment is recommended to restore strength and corrosion resistance."
                }
                }
            ]
            }

        @endverbatim
    </script>
@endsection
