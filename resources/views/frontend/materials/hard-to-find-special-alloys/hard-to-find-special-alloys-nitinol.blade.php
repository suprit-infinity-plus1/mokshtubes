@extends('layouts.master')

@section('title', 'Nitinol | Superior Shape Memory & Flexibility')
@section('meta_description',
    'Nitinol offers exceptional shape memory, superelasticity, and durability for medical
    devices, robotics, and high-precision engineering.')
@section('meta_keywords',
    'Nitinol alloy, shape memory alloy, superelastic alloy, medical device alloy, robotics alloy,
    high precision engineering alloy, durable Nitinol')
@section('og_image',
    asset('assets/images/hard-to-find-and-special-alloys/hard-to-find-and-special-alloys-nitinol.webp'))
@section('og_type', 'article')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area"
        style="background-image: url(/assets/images/hard-to-find-and-special-alloys/hard-to-find-and-special-alloys-nitinol.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Nitinol Alloy <br> Superior Shape Memory & Flexibility</h1>

                    <!-- Add your extra content here -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Nitinol Alloy is a unique nickel–titanium material known for its superior shape memory effect and
                        exceptional flexibility. It can return to its original shape after deformation and offers excellent
                        fatigue resistance, corrosion resistance, and biocompatibility, making it ideal for medical devices,
                        aerospace components, actuators, and precision engineering applications.

                    </p>
                    <!-- End extra content -->
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
                Introduction to Nitinol Nickel-Titanium Alloy
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/hard-to-find-and-special-alloys/hard-to-find-and-special-alloys-nitinol.webp') }}"
                        alt="NITINOL" class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a leading manufacturer,
                            exporter, importer, stockist, and supplier of Nitinol products in a variety of forms including
                            wires, rods, sheets, <a href="{{ route('products.pipes-tubes') }}">tubes</a>, springs, strips,
                            and customized components.<strong class="text-black"> Nitinol (Nickel Titanium
                                Naval Ordnance Laboratory)</strong> is a unique metal alloy primarily composed of nickel and
                            titanium,
                            widely known for its two remarkable properties: Shape Memory Effect (SME) and Superelasticity.
                        </p>
                        <p> <strong class="text-black"><a
                                    href="{{ route('materials.hard-To-Find-Special-Alloys') }}">Nitinol's</a></strong>
                            ability to return to a predetermined shape when
                            heated and its exceptional elasticity under stress make it an ideal material for a variety of
                            medical, industrial, and aerospace applications. It also offers excellent corrosion resistance,
                            biocompatibility, and fatigue resistance, especially under cyclic loading environments.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Hard To Find Special Alloy Nitinol Datasheet</h3>
            <p class="mb-3">
                Get the complete Hard To Find Special Alloy Nitinol datasheet with chemical composition,
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
                <h2>NITINOL Specifications (Nickel–Titanium Alloy)</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Category</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td>Material Name</td>
                                    <td>Nitinol (Nickel–Titanium Alloy)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>UNS Designation</td>
                                    <td>N01555</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Composition</td>
                                    <td>Ni 54.5–57.0%, Ti Balance</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Density</td>
                                    <td>6.45 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Range</td>
                                    <td>1400 – 1480 °C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Magnetic Property</td>
                                    <td>Non-Magnetic</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Corrosion Resistance</td>
                                    <td>Excellent</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Biocompatibility</td>
                                    <td>Excellent (Medical Grade)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Shape Memory Effect</td>
                                    <td>✔ Yes</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Superelasticity</td>
                                    <td>✔ Yes</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Heat Treatable</td>
                                    <td>✔ Yes (Transformation tuning)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Chemical Composition -->
    <section id="composition" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Chemical Composition of Nitinol</h2>
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
                                    <td>Nickel (Ni)</td>
                                    <td>54.5 – 57.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Titanium (Ti)</td>
                                    <td>Balance</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon (C)</td>
                                    <td>≤ 0.05</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Oxygen (O)</td>
                                    <td>≤ 0.05</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Hydrogen (H)</td>
                                    <td>≤ 0.005</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nitrogen (N)</td>
                                    <td>≤ 0.01</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron (Fe)</td>
                                    <td>≤ 0.05</td>
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
                <h2 class="fw-bold" style="color:#174268;">
                    Physical Properties of Nitinol
                </h2>
            </div>

            <div class="table-responsive col-lg-10 mx-auto">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Property</th>
                            <th>Imperial Units</th>
                            <th>Metric Units</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="t-row">
                            <td>Density</td>
                            <td>0.30 lb/in³</td>
                            <td>6.45 g/cm³</td>
                        </tr>
                        <tr class="t-row">
                            <td>Melting Range</td>
                            <td>2550 – 2700 °F</td>
                            <td>1400 – 1480 °C</td>
                        </tr>
                        <tr class="t-row">
                            <td>Elastic Modulus (Tension)</td>
                            <td>7.5 – 30 × 10³ ksi</td>
                            <td>50 – 207 GPa</td>
                        </tr>
                        <tr class="t-row">
                            <td>Elastic Modulus (Compression)</td>
                            <td>Similar to tension</td>
                            <td>Similar to tension</td>
                        </tr>
                        <tr class="t-row">
                            <td>Poisson’s Ratio</td>
                            <td>0.33</td>
                            <td>—</td>
                        </tr>
                        <tr class="t-row">
                            <td>Curie Temperature</td>
                            <td>70 – 220 °F</td>
                            <td>20 – 105 °C</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Heat Treatment -->
            <div class="row justify-content-center mt-5" id="heat-treatment">
                <div class="col-lg-10">
                    <h4 class="text-center mb-3" style="color:#db7227;">
                        Heat Treatment & Transformation Control – Nitinol
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
                                    <td>Shape Setting</td>
                                    <td>400 – 550 °C</td>
                                    <td>Fixes permanent shape memory</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Annealing</td>
                                    <td>600 – 800 °C</td>
                                    <td>Improves ductility & formability</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Aging / Precipitation</td>
                                    <td>350 – 500 °C</td>
                                    <td>Adjusts transformation temperature</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Stress Relieving</td>
                                    <td>300 – 400 °C</td>
                                    <td>Reduces residual stresses</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Cold Work + Heat Treat</td>
                                    <td>—</td>
                                    <td>Enhances superelastic behavior</td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="mt-3 text-center">
                            📌 Transformation temperature (Af) can be precisely engineered for medical or industrial
                            applications.
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
                    Mechanical Properties of Nitinol
                </h2>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Property</th>
                            <th>Annealed</th>
                            <th>Hot-Finished</th>
                            <th>Cold-Drawn</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="t-row">
                            <td>Tensile Strength</td>
                            <td>480–690 MPa</td>
                            <td>620–830 MPa</td>
                            <td>900–1100 MPa</td>
                        </tr>
                        <tr class="t-row">
                            <td>Yield Strength (0.2%)</td>
                            <td>210–345 MPa</td>
                            <td>415–550 MPa</td>
                            <td>690–900 MPa</td>
                        </tr>
                        <tr class="t-row">
                            <td>Elongation</td>
                            <td>10–30%</td>
                            <td>8–20%</td>
                            <td>5–10%</td>
                        </tr>
                        <tr class="t-row">
                            <td>Brinell Hardness</td>
                            <td>150–200</td>
                            <td>200–300</td>
                            <td>300–350</td>
                        </tr>
                        <tr class="t-row">
                            <td>Rockwell Hardness</td>
                            <td>60–70 B</td>
                            <td>70–80 B</td>
                            <td>80–85 B</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Available Forms -->
    <section class="sec-padd-top sec-padd-bottom bg-light" id="available-forms">
        <div class="container">
            <div class="section-title center">
                <h2>Available Forms & Size Range – Nitinol</h2>
            </div>

            <div class="table-responsive col-lg-10 mx-auto">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Product Form</th>
                            <th>Typical Size Range</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="t-row">
                            <td>Wires</td>
                            <td>0.05 – 6.0 mm</td>
                        </tr>
                        <tr class="t-row">
                            <td>Tubes</td>
                            <td>OD 0.8 – 25 mm; WT 0.1 – 2.5 mm</td>
                        </tr>
                        <tr class="t-row">
                            <td>Sheets & Plates</td>
                            <td>0.2 – 10 mm</td>
                        </tr>
                        <tr class="t-row">
                            <td>Strips & Foils</td>
                            <td>0.03 – 2.0 mm</td>
                        </tr>
                        <tr class="t-row">
                            <td>Rods & Bars</td>
                            <td>3 – 100 mm</td>
                        </tr>
                        <tr class="t-row">
                            <td>Springs</td>
                            <td>As per design</td>
                        </tr>
                        <tr class="t-row">
                            <td>Custom Components</td>
                            <td>CNC / Laser-cut / Medical grade</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- International Standards -->
    <section class="sec-padd-top sec-padd-bottom" id="international">
        <div class="container">
            <div class="section-title center">
                <h2>International Standards & Equivalent Grades – Nitinol</h2>
            </div>

            <div class="table-responsive col-lg-8 mx-auto">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Standard / Organization</th>
                            <th>Equivalent / Description</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="t-row">
                            <td>UNS</td>
                            <td>N01555</td>
                        </tr>
                        <tr class="t-row">
                            <td>ASTM</td>
                            <td>ASTM F2063 (Medical Grade)</td>
                        </tr>
                        <tr class="t-row">
                            <td>ASTM</td>
                            <td>ASTM F2005 (Transformation Temperature)</td>
                        </tr>
                        <tr class="t-row">
                            <td>AMS</td>
                            <td>AMS 5898 (Aerospace)</td>
                        </tr>
                        <tr class="t-row">
                            <td>ISO</td>
                            <td>ISO 5832-11 (Implant Grade)</td>
                        </tr>
                        <tr class="t-row">
                            <td>DIN</td>
                            <td>DIN 17856</td>
                        </tr>
                        <tr class="t-row">
                            <td>EN</td>
                            <td>EN ISO 5832-11</td>
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
                <h2>Products in Nitinol</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Nitinol</strong> is commonly supplied as:
                    </p>
                </div>
            </div>

            <!-- Horizontal Styled Product List -->
            <div class="row justify-content-center mb-5">
                <div class="col-lg-10">
                    <div class="p-4 bg-white rounded shadow-sm border-start border-4" style="border-color: #db7227;">
                        <div class="row">
                            {{-- @foreach ($products as $slug => $product) --}}
                            @foreach ($products as $product)
                                <div class="col-12 col-sm-6 mb-2 d-flex justify-content-start align-items-start">
                                    <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                    <span>{{ $product['name'] }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- Emphasized Line -->
            <div class="row justify-content-center mb-3">
                <div class="col-lg-10">
                    <p class="fw-bold fs-5 text-center my-4" style="color: #174268;">
                        We supply Nitinol materials in accordance with the most stringent industry standards: </p>
                </div>
            </div>

            <!-- Product Image Cards (Now centered and responsive) -->
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-4 justify-content-center">
                @foreach ($products as $product)
                    <div class="col d-flex">
                        <a href="{{ route($product['route']) }}" class="text-decoration-none w-100">
                            <div class="product-card h-100">
                                <img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}"
                                    class="img-fluid w-100">
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
                <h2>Uses and Advantages</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Shape memory and superelastic behavior enable compact, adaptive designs</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Excellent corrosion and fatigue resistance</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Biocompatible – suitable for long-term medical implants</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>High strength-to-weight ratio</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Responds predictably to thermal and mechanical stimuli</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Nitinol</h2>
                <p><strong class="text-black">Nitinol’s</strong> extraordinary properties make it highly versatile across
                    numerous sectors:</p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Medical & Biomedical Devices</h5>
                        <p>Used extensively in stents, guidewires, orthodontic archwires, bone staples, and filters due to
                            its biocompatibility and superelastic behavior.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Aerospace & Defense</h5>
                        <p>Used in actuators, couplings, and vibration dampers due to its fatigue resistance and thermal
                            responsiveness.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Robotics & Automation</h5>
                        <p>Ideal for motion-control systems, micro-actuators, and adaptive mechanisms.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Consumer Electronics</h5>
                        <p>Applied in eyeglass frames, cellphone actuators, and flexible antenna components.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Industrial Equipment</h5>
                        <p>Deployed in valves, connectors, seals, and temperature-sensitive fasteners that rely on the shape
                            memory effect.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-strategies"></i></div>
                        <h5>Oil & Gas Industry</h5>
                        <p>Utilized in downhole tools and sealing components that undergo thermal cycling.</p>
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
                        <h5>Wide range of standard and custom Nitinol components</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Precision manufacturing & stringent quality controls</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Expertise in high-performance and smart materials</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Compliant with ASTM and medical-grade standards</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Prompt delivery and global export capabilities</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="price" class="sec-padd-top sec-padd-bottom bg-light py-5">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h2>Nitinol Price per kg in India</h2>
            </div>

            <p class="text-center fs-5">
                <strong>Typical Range:</strong> ₹18,000 – ₹45,000 per kg
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
    <section id="faq"  class="faq-content-area sec-padd2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="accordion-box">
                        <div class="section-title center">
                            <h2>FAQ's</h2>
                        </div>

                        <!-- Q1 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What is Nitinol and why is it special?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Nitinol is a nickel titanium alloy notable for its Shape Memory Effect and
                                    Superelasticity, allowing it to return to a preset shape when heated and endure large
                                    strains without permanent deformation.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Which forms of Nitinol products are available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Nitinol is supplied as seamless and welded pipes, tubes, sheets, plates, coils, strips,
                                    round/flat/hex/square bars, pipe fittings, flanges, fasteners, springs, and custom
                                    components.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the key advantages of Nitinol?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Nitinol offers shape memory, superelasticity, high corrosion and fatigue resistance,
                                    biocompatibility for medical implants, and predictable responses to thermal and
                                    mechanical stimuli.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>In which industries is Nitinol used?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Nitinol is used in medical devices (stents, guidewires, orthodontics), aerospace and
                                    defense (actuators, vibration dampers), robotics, consumer electronics (eyeglass frames,
                                    actuators), industrial equipment, and oil & gas applications.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose MOKSH TUBES & FITTINGS for Nitinol products?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    We provide a wide range of standard and custom Nitinol components with precision
                                    manufacturing, stringent quality controls, ASTM and medical-grade compliance, global
                                    shipping, and prompt delivery.
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


    <section id="contact-us" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Contact Us</h2>
                <p>
                    Contact <strong>Moksh Tubes & Fittings LLP</strong> — your trusted source for high-performance memory
                    alloys and nickel-titanium products.
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
                "name": "What is Nitinol and why is it special?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Nitinol is a nickel titanium alloy notable for its Shape Memory Effect and Superelasticity, allowing it to return to a preset shape when heated and endure large strains without permanent deformation."
                }
                },
                {
                "@type": "Question",
                "name": "Which forms of Nitinol products are available?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Nitinol is supplied as seamless and welded pipes, tubes, sheets, plates, coils, strips, round/flat/hex/square bars, pipe fittings, flanges, fasteners, springs, and custom components."
                }
                },
                {
                "@type": "Question",
                "name": "What are the key advantages of Nitinol?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Nitinol offers shape memory, superelasticity, high corrosion and fatigue resistance, biocompatibility for medical implants, and predictable responses to thermal and mechanical stimuli."
                }
                },
                {
                "@type": "Question",
                "name": "In which industries is Nitinol used?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Nitinol is used in medical devices (stents, guidewires, orthodontics), aerospace and defense (actuators, vibration dampers), robotics, consumer electronics (eyeglass frames, actuators), industrial equipment, and oil & gas applications."
                }
                },
                {
                "@type": "Question",
                "name": "Why choose MOKSH TUBES & FITTINGS for Nitinol products?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We provide a wide range of standard and custom Nitinol components with precision manufacturing, stringent quality controls, ASTM and medical-grade compliance, global shipping, and prompt delivery."
                }
                }
            ]
            }

        @endverbatim
    </script>
@endsection
