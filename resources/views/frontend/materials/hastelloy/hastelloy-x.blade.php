@extends('layouts.master')

@section('title', 'Hastelloy X | High-Temp Strength Alloy')
@section('meta_description',
    'Hastelloy X pipes, tubes & fittings with high-temperature strength, oxidation resistance,
    and weldability for aerospace and turbine applications')
@section('meta_keywords',
    'Hastelloy X, High Temperature Alloy, Hastelloy X Pipes, Hastelloy X Tubes, Hastelloy X
    Fittings, Oxidation Resistant Alloy, Aerospace Alloys, Turbine Alloys, High-Temp Strength Alloy')
@section('og_image', asset('assets/images/hastelloy/hastelloy-x.webp'))
@section('og_type', 'article')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/hastelloy/hastelloy-x.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Hastelloy X Alloy <br> High-Temperature Strength Nickel Alloy</h1>
                    <!-- Add your extra content here -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        High-Temperature Nickel-Chromium-Iron-Molybdenum Superalloy
                        Hastelloy X is a premier high-temperature alloy used where extreme heat, oxidation, and mechanical
                        stress demand the highest material performance. This page includes the full datasheet covering
                        chemical composition, mechanical properties, heat treatment, applications, and more.</p>
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
                Introduction To Hastelloy X /Alloy X / UNS N06002
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/hastelloy/hastelloy-x.webp') }}" alt="Hastelloy X"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a renowned manufacturer,
                            supplier, exporter, importer, and stockist of Hastelloy X (UNS N06002) products, including <a
                                href="{{ route('products.pipes-tubes') }}">Pipes
                                & Tubes</a>, Pipe Fittings, Flanges, Sheets & Plates, Coils, Bars, Wires, and customized
                            components.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">HASTELLOY X</strong class="text-black"> is a
                            nickel-chromium-iron-molybdenum alloy developed primarily for high-temperature strength and
                            oxidation resistance. It is widely used in aerospace and industrial gas turbine applications due
                            to its excellent mechanical properties at elevated temperatures (up to 1100°C / 2000°F).
                            <strong class="text-black"> <a href="{{ route('materials.hastelloy') }}">Hastelloy
                                    X</a></strong> also exhibits good corrosion resistance to mild
                            oxidizing and reducing environments,
                            and its excellent fabricability makes it ideal for complex parts exposed to extreme thermal and
                            mechanical stress.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- adding datasheet --}}

    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Hastelloy X Datasheet</h3>
            <p class="mb-3">
                Get the complete Hastelloy X datasheet with chemical composition,
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


    <!-- Specifications Section -->
    <section class="sec-padd-top" id="specification">
        <div class="container">
            <div class="section-title center">
                <h2>Hastelloy X Specifications (UNS N06002)</h2>
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
                                    <td>Grade</td>
                                    <td>Hastelloy X / Alloy X / UNS N06002</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Material Type</td>
                                    <td>Nickel–Chromium–Iron–Molybdenum Superalloy</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Key Characteristics</td>
                                    <td>High-temperature strength and oxidation resistance</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chemical Summary</td>
                                    <td>Ni balance, Cr 19–23%, Fe 17–20%, Mo 8–10%, Co 1–2%</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Conditions Available</td>
                                    <td>Annealed, Solution Annealed, Hot Rolled, Cold Worked</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Heat Treatment</td>
                                    <td>Solution Annealing at 1120–1175°C, rapid quench</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Weldability</td>
                                    <td>Excellent (GTAW / GMAW / SMAW)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Applications</td>
                                    <td>Aerospace, Gas Turbines, Furnaces, Nuclear Systems</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Testing Offered</td>
                                    <td>Tensile, Hardness, Chemical, PMI, NDT, UT</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Standards</td>
                                    <td>ASTM B435, B619, B622, B626</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Certification</td>
                                    <td>EN 10204 3.1 / 3.2 MTC</td>
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
                <h2>Chemical Composition of Hastelloy X</h2>
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
                                    <td>Balance (~47)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium (Cr)</td>
                                    <td>19 – 23</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron (Fe)</td>
                                    <td>17 – 20</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Molybdenum (Mo)</td>
                                    <td>8 – 10</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Cobalt (Co)</td>
                                    <td>1 – 2</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese (Mn)</td>
                                    <td>1.0 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon (Si)</td>
                                    <td>0.08 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon (C)</td>
                                    <td>0.15 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Aluminum (Al)</td>
                                    <td>0.5 – 1.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Titanium (Ti)</td>
                                    <td>0.20 – 0.60</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Niobium + Tantalum (Nb + Ta)</td>
                                    <td>1.0 – 1.5</td>
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
                    Technical Composition of Hastelloy X
                </h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h3 class="text-center mb-3" style="color: #db7227;">Physical Properties of Hastelloy X
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
                                    <td>8.19 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Point</td>
                                    <td>1260 – 1340 °C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tensile Strength</td>
                                    <td>760 MPa / 110,000 psi</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (0.2%)</td>
                                    <td>415 MPa / 60,000 psi</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elongation</td>
                                    <td>30%</td>
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
                        Heat Treatment of Hastelloy X
                    </h4>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Process</th>
                                    <th>Temperature Range</th>
                                    <th>Procedure</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Solution Annealing</td>
                                    <td>1120 – 1175 °C</td>
                                    <td>Rapid water quenching</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Stress Relieving</td>
                                    <td>870 – 900 °C</td>
                                    <td>Air cool</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Hot Working</td>
                                    <td>950 – 1175 °C</td>
                                    <td>Rapid cooling recommended</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Cold Working</td>
                                    <td>—</td>
                                    <td>Intermediate annealing required</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Welding Heat Control</td>
                                    <td>—</td>
                                    <td>Minimize heat input to avoid grain growth</td>
                                </tr>
                            </tbody>
                        </table>
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
                    Mechanical Properties of Hastelloy X
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
                            <td>760 MPa</td>
                            <td>110,000 psi</td>
                        </tr>
                        <tr class="t-row">
                            <td>Yield Strength (0.2%)</td>
                            <td>400 MPa</td>
                            <td>58,000 psi</td>
                        </tr>
                        <tr class="t-row">
                            <td>Elastic Modulus (RT)</td>
                            <td>205 GPa</td>
                            <td>30,000 ksi</td>
                        </tr>
                        <tr class="t-row">
                            <td>Elongation</td>
                            <td>30%</td>
                            <td>30%</td>
                        </tr>
                        <tr class="t-row">
                            <td>Hardness (Rockwell B)</td>
                            <td>85 – 90 HRB</td>
                            <td>85 – 90 HRB</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Available Forms -->
    <section class="sec-padd-top sec-padd-bottom bg-light" id="available-forms">
        <div class="container">
            <div class="section-title center mt-5">
                <h2>Available Forms & Size Range – Hastelloy X</h2>
            </div>

            <div class="table-responsive col-lg-10 mx-auto">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Product Form</th>
                            <th>Size Range / Description</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="t-row">
                            <td>Round Bars</td>
                            <td>6 mm – 300 mm</td>
                        </tr>
                        <tr class="t-row">
                            <td>Flat, Square & Hex Bars</td>
                            <td>Custom sizes available</td>
                        </tr>
                        <tr class="t-row">
                            <td>Sheets & Plates</td>
                            <td>0.5 – 100 mm thickness</td>
                        </tr>
                        <tr class="t-row">
                            <td>Coils & Strips</td>
                            <td>0.1 – 12 mm</td>
                        </tr>
                        <tr class="t-row">
                            <td>Seamless & Welded Pipes / Tubes</td>
                            <td>OD 6 – 219 mm</td>
                        </tr>
                        <tr class="t-row">
                            <td>Heat Exchanger & Boiler Tubes</td>
                            <td>Custom lengths & bends</td>
                        </tr>
                        <tr class="t-row">
                            <td>Forged Components</td>
                            <td>Blocks, rings, bushings as per drawing</td>
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
                <h2>International Standards & Equivalent Grades</h2>
            </div>

            <div class="table-responsive col-lg-6 mx-auto">
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
                            <td>N06002</td>
                        </tr>
                        <tr class="t-row">
                            <td>Werkstoff Nr.</td>
                            <td>2.4665</td>
                        </tr>
                        <tr class="t-row">
                            <td>ASTM</td>
                            <td>B435, B619, B622, B626</td>
                        </tr>
                        <tr class="t-row">
                            <td>ASME</td>
                            <td>SB435, SB619, SB622, SB626</td>
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
                'image' => 'assets/images/all product/seamless-pipes-10.webp',
            ],

            [
                'name' => 'Welded Pipes (ERW & EFW)',
                'route' => 'products.pipes-tubes.welded-pipes',
                'image' => 'assets/images/all product/welded-pipes-tubes-1.webp',
            ],
            [
                'name' => 'Tubes (Capillary, U-Bend)',
                'route' => 'products.pipes-tubes.u-bent-tubes',
                'image' => 'assets/images/all product/u-bent-tube.webp',
            ],
            [
                'name' => 'Sheets & Plates',
                'route' => 'products.sheets-plates-coils.sheets-and-plates',
                'image' => 'assets/images/all product/sheets-plates.webp',
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
                'image' => 'assets/images/all product/FASTENERS.webp',
            ],
            [
                'name' => 'Custom Fabricated Components',
                'route' => 'products.pipe-fittings-flanges-fasteners.custom-fabricated-fittings',
                'image' => 'assets/images/all product/custom-metal-fabricated.webp',
            ],
        ];
    @endphp

    <section id="products" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Products in Hastelloy X</h2>
            </div>

            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">MOKSH TUBES & FITTINGS LLP</strong>, we supply Hastelloy X in multiple
                        product forms suited for high-temperature and corrosion-resistant applications:
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
                        We offer Hastelloy X in a wide range of product forms, including:
                    </p>
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
                        <h5>Exceptional strength and creep resistance at elevated temperatures</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Outstanding oxidation resistance up to 1100°C (2000°F)</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Good corrosion resistance in mild oxidizing and reducing atmospheres</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Excellent weldability and machinability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Suitable for critical aerospace, turbine, and power generation components</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Hastelloy X</h2>
                <p class="text-center pb-3"><strong class="text-dark">HASTELLOY X</strong> is a high-performance alloy
                    designed to thrive in extreme heat and demanding environments. Known for its outstanding strength,
                    excellent oxidation resistance, and good fabricability, it's a go-to choice in industries where both
                    performance and reliability are critical. Its versatility makes it ideal for the following applications:
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Aerospace Industry</h5>
                        <p>Widely used in gas turbine engines — including combustors, tailpipes, afterburners, and
                            transition ducts — thanks to its ability to maintain strength and resist oxidation at
                            temperatures beyond 1000°C.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Industrial Furnaces & Heat-Treating Equipment</h5>
                        <p>Perfect for components like burner nozzles, muffles, flame holders, and retorts that face
                            constant high heat and thermal cycling.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Power Generation & Nuclear Applications</h5>
                        <p>Trusted for parts exposed to extreme heat and radiation — such as structural supports, steam
                            generators, and pressure vessels — in both conventional and nuclear power plants.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Chemical & Petrochemical Processing</h5>
                        <p>Used in reactors, reformers, and heat exchangers that demand both high-temperature strength and
                            moderate corrosion resistance.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Welding Applications</h5>
                        <p>Often used as a filler metal for welding high-temperature alloys or dissimilar metals, ensuring
                            durable and heat-resistant joints.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Automotive & Motorsport</h5>
                        <p>Chosen for turbocharger parts, exhaust manifolds, and heat shields where performance under heat
                            and stress is essential.</p>
                    </div>
                </div>

                {{-- <div class="col-md-6 col-lg-4">
                <div class="application-card">
                     <div class="application-icon"><i class="bi bi-strategies"></i></div>
                    <h5>Why It Works</h5>
                    <p><strong>HASTELLOY C276’s</strong> combination of corrosion resistance, weldability, and mechanical durability makes it ideal for mission-critical applications where long-term performance is non-negotiable.</p>
                </div>
            </div> --}}
            </div>
            <p class="text-center pb-3 my-4"><strong class="text-dark">HASTELLOY X's</strong> with its unique combination
                of heat resistance, mechanical strength, and workability is a trusted material in high-performance
                environments where failure simply isn’t an option.

            </p>
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
                        <h5>Expertise in advanced nickel-based superalloys</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>High-quality manufacturing meeting aerospace standards</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Wide global distribution network</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Strong focus on timely delivery and customer satisfaction</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Support for custom specifications and fabrication</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="price" class="sec-padd-top sec-padd-bottom bg-light py-5">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h2>Hastelloy X Price per kg in India</h2>
            </div>

            <p class="text-center fs-5">
                <strong>Typical Range:</strong> ₹2,300 – ₹4,800 per kg
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
                            <h2>FAQ's</h2>
                        </div>

                        <!-- Q1 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What is Hastelloy X and why is it widely used in high-temperature applications?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Hastelloy X (UNS N06002) is a nickel chromium iron molybdenum alloy engineered for
                                    outstanding high-temperature strength and oxidation resistance up to 1100°C (2000°F). It
                                    is widely used in aerospace, industrial furnaces, and power generation because it
                                    retains excellent mechanical properties at elevated temperatures while also providing
                                    good resistance to mild oxidizing and reducing environments. Its unique combination of
                                    durability, creep resistance, and weldability makes it ideal for critical components
                                    exposed to extreme thermal and mechanical stress.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the key properties of Hastelloy X that make it reliable in extreme
                                    environments?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Hastelloy X offers exceptional strength, creep resistance, and oxidation resistance at
                                    high temperatures, with a tensile strength of 110,000 psi, yield strength of 60,000 psi,
                                    and elongation of 30%. The alloy resists degradation in oxidizing and reducing
                                    conditions, retains stability under thermal cycling, and offers excellent fabricability
                                    and weldability. These properties make it a preferred choice for industries requiring
                                    materials that can withstand both heat and stress without compromising performance.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Which industries commonly use Hastelloy X materials and components?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Hastelloy X is extensively used in aerospace for turbine engines, afterburners,
                                    combustors, and transition ducts due to its ability to maintain structural integrity in
                                    extreme heat. It is also applied in industrial furnaces, heat treating equipment, and
                                    petrochemical processing plants for burner nozzles, muffles, reactors, and reformers.
                                    Additionally, it is used in nuclear and power generation facilities for high stress
                                    structural components and in automotive and motorsport industries for turbocharger
                                    parts, exhaust manifolds, and heat shields.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What types of Hastelloy X products are available from MOKSH TUBES & FITTINGS LLP?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP supplies a wide range of Hastelloy X products including
                                    seamless and welded pipes, tubes, sheets, plates, coils, flanges, fittings, fasteners,
                                    round bars, and custom-fabricated components. These products are manufactured to meet
                                    global quality and aerospace standards, ensuring long-lasting reliability in demanding
                                    applications. The company also provides custom specifications to meet client
                                    requirements across various industries.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose MOKSH TUBES & FITTINGS LLP for Hastelloy X materials?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP is a trusted manufacturer and global supplier of nickel-based
                                    superalloys with expertise in high-performance materials like Hastelloy X. The company
                                    maintains strict quality control, supports aerospace-grade manufacturing standards, and
                                    offers a strong global supply network. With a focus on timely delivery, custom
                                    fabrication, and customer satisfaction, MOKSH TUBES & FITTINGS LLP ensures reliable
                                    solutions for industries that demand exceptional performance under extreme conditions.
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
                    <strong>Moksh Tubes & Fittings LLP</strong> your trusted partner for Hastelloy X
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
                "name": "What is Hastelloy X and why is it widely used in high-temperature applications?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Hastelloy X (UNS N06002) is a nickel chromium iron molybdenum alloy engineered for outstanding high-temperature strength and oxidation resistance up to 1100°C (2000°F). It is widely used in aerospace, industrial furnaces, and power generation because it retains excellent mechanical properties at elevated temperatures while also providing good resistance to mild oxidizing and reducing environments. Its unique combination of durability, creep resistance, and weldability makes it ideal for critical components exposed to extreme thermal and mechanical stress."
                }
                },
                {
                "@type": "Question",
                "name": "What are the key properties of Hastelloy X that make it reliable in extreme environments?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Hastelloy X offers exceptional strength, creep resistance, and oxidation resistance at high temperatures, with a tensile strength of 110,000 psi, yield strength of 60,000 psi, and elongation of 30%. The alloy resists degradation in oxidizing and reducing conditions, retains stability under thermal cycling, and offers excellent fabricability and weldability. These properties make it a preferred choice for industries requiring materials that can withstand both heat and stress without compromising performance."
                }
                },
                {
                "@type": "Question",
                "name": "Which industries commonly use Hastelloy X materials and components?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Hastelloy X is extensively used in aerospace for turbine engines, afterburners, combustors, and transition ducts due to its ability to maintain structural integrity in extreme heat. It is also applied in industrial furnaces, heat treating equipment, and petrochemical processing plants for burner nozzles, muffles, reactors, and reformers. Additionally, it is used in nuclear and power generation facilities for high stress structural components and in automotive and motorsport industries for turbocharger parts, exhaust manifolds, and heat shields."
                }
                },
                {
                "@type": "Question",
                "name": "What types of Hastelloy X products are available from MOKSH TUBES & FITTINGS LLP?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "MOKSH TUBES & FITTINGS LLP supplies a wide range of Hastelloy X products including seamless and welded pipes, tubes, sheets, plates, coils, flanges, fittings, fasteners, round bars, and custom-fabricated components. These products are manufactured to meet global quality and aerospace standards, ensuring long-lasting reliability in demanding applications. The company also provides custom specifications to meet client requirements across various industries."
                }
                },
                {
                "@type": "Question",
                "name": "Why choose MOKSH TUBES & FITTINGS LLP for Hastelloy X materials?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "MOKSH TUBES & FITTINGS LLP is a trusted manufacturer and global supplier of nickel-based superalloys with expertise in high-performance materials like Hastelloy X. The company maintains strict quality control, supports aerospace-grade manufacturing standards, and offers a strong global supply network. With a focus on timely delivery, custom fabrication, and customer satisfaction, MOKSH TUBES & FITTINGS LLP ensures reliable solutions for industries that demand exceptional performance under extreme conditions."
                }
                }
            ]
            }

        @endverbatim
    </script>
@endsection
