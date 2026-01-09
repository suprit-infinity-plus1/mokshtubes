@extends('layouts.master')

@section('title', 'Hastelloy C-4 | High-Performance Alloy for Oxidizing Media')
@section('meta_description',
    'Hastelloy C-4 pipes, tubes & fittings from Moksh Tubes — long-term stability & resistance
    to oxidizing chemicals, acids & high heat for industrial use.')
@section('meta_keywords',
    'Hastelloy C-4, Hastelloy C4, high performance alloy, corrosion resistant alloy, Hastelloy C4
    pipes, Hastelloy C4 tubes, Hastelloy C4 fittings, oxidizer resistant alloy, acid resistant alloy, industrial corrosion
    resistant alloys, high temperature alloys, durable nickel alloys')
@section('og_image', asset('assets/images/hastelloy/hastelloy-C4.webp'))
@section('og_type', 'article')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/hastelloy/hastelloy-C4.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Hastelloy C-4 Alloy <br> UNS N06455 High-Performance Nickel Alloy</h1>
                    <!-- Add your extra content here -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        High-Temperature & Corrosion-Resistant Nickel-Chromium-Molybdenum Alloy
                        Hastelloy C-4 is one of the most stable and reliable nickel alloys designed for extreme chemical and
                        high-temperature environments. Below is the complete datasheet, including chemical composition,
                        properties, heat treatment, applications, advantages, and more.</p>
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
                Introduction To Hastelloy C-4 / Alloy C-4 / UNS N06455 </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/hastelloy/hastelloy-C4.webp') }}" alt="Hastelloy C276"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a trusted supplier, exporter,
                            importer, and stockist of high-performance Hastelloy C-4 (UNS N06455)
                            products, including <strong class="text-black"><a
                                    href="{{ route('products.pipes-tubes') }}">Pipes & Tubes</a>, Pipe Fittings, Flanges,
                                Sheets & Plates, Coils, Bars, Wire Mesh</strong>, and custom-engineered components.
                        </p>

                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black">HASTELLOY C4</strong> is a nickel-chromium-molybdenum alloy designed
                            to minimize welding challenges
                            due to its low silicon and carbon content. Like other <a
                                href="{{ route('materials.nickel-Based-Superalloys') }}">nickel alloys</a>, it is known for
                            its outstanding resistance
                            to high-temperature oxidation, stress corrosion cracking, and strong oxidizing agents. With
                            excellent stability across
                            a wide range of thermal conditions, <a
                                href="{{ route('materials.hard-To-Find-Special-Alloys') }}">Hastelloy C-4</a>
                            exhibits superior performance in harsh chemical environments—particularly in hot, contaminated
                            mineral acids like
                            hydrochloric and sulfuric acid. Its low carbon and silicon content also help prevent
                            grain-boundary precipitation during
                            welding, enhancing its weldability and corrosion resistance.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            Hastelloy C-4 alloy is a nickel-chromium-molybdenum material specially developed to provide
                            excellent corrosion resistance
                            in highly aggressive environments. With its low carbon and silicon content, Hastelloy C-4
                            composition ensures superior
                            weldability and resistance to grain boundary precipitation. It is widely used in industries that
                            require corrosion-resistant
                            alloys, particularly in hot mineral acids such as hydrochloric and sulfuric acid.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Hastelloy C4 Datasheet</h3>
            <p class="mb-3">
                Get the complete Hastelloy C4 datasheet with chemical composition,
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
                <h2>Hastelloy C-4 – Specifications (UNS N06455)</h2>
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
                                    <td>Hastelloy C-4 / Alloy C-4 / UNS N06455</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Material Type</td>
                                    <td>Nickel–Chromium–Molybdenum Alloy</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Key Characteristics</td>
                                    <td>High-temperature stability, excellent corrosion resistance, superior weldability
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chemical Summary</td>
                                    <td>Ni ≥ 65%, Cr 14.5–16.5%, Mo 14–17%</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Operating Temperature</td>
                                    <td>Up to 1040 °C (1900 °F)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Available Conditions</td>
                                    <td>Annealed, Solution Annealed, Hot Rolled, Cold Worked</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Heat Treatment</td>
                                    <td>Solution Anneal at 1100–1160 °C with rapid cooling</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Weldability</td>
                                    <td>Excellent — minimal carbide precipitation</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Corrosion Resistance</td>
                                    <td>Outstanding in hot mineral acids and oxidizing environments</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Testing Offered</td>
                                    <td>PMI, Chemical Test, Hardness, Tensile, NDT, UT</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Standards</td>
                                    <td>ASTM B575, B619, B622, B626</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Certification</td>
                                    <td>EN 10204 3.1 / 3.2</td>
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
                <h2>Chemical Composition of Hastelloy C-4 (UNS N06455)</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Element</th>
                                    <th>Content (%)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Nickel (Ni)</td>
                                    <td>65.0 min</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium (Cr)</td>
                                    <td>14.5 – 16.5</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron (Fe)</td>
                                    <td>5.0 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Molybdenum (Mo)</td>
                                    <td>14.0 – 17.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Cobalt (Co)</td>
                                    <td>2.0 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon (Si)</td>
                                    <td>0.08 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese (Mn)</td>
                                    <td>1.0 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon (C)</td>
                                    <td>0.015 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Phosphorus (P)</td>
                                    <td>0.04 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sulfur (S)</td>
                                    <td>0.03 max</td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="mt-3 text-center">
                            The optimized chromium–molybdenum balance provides exceptional resistance to oxidizing and
                            reducing acids.
                        </p>
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
                    Technical Composition Properties of Hastelloy C-4
                </h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                     <h3 class="text-center mb-3" style="color: #db7227;">Physical Properties of Hastelloy C-4
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
                                    <td>8.64 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Point</td>
                                    <td>1330 °C (2430 °F)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tensile Strength</td>
                                    <td>690 MPa / 100,000 psi</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (0.2%)</td>
                                    <td>310 MPa / 45,000 psi</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elongation</td>
                                    <td>40%</td>
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
                        Heat Treatment of Hastelloy C-4
                    </h4>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Process</th>
                                    <th>Temperature Range</th>
                                    <th>Cooling Method</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Solution Annealing</td>
                                    <td>1100 – 1160 °C</td>
                                    <td>Rapid air or water quench</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Stress Relieving</td>
                                    <td>870 – 900 °C</td>
                                    <td>Air cool, hold 1–2 hours</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Hot Working</td>
                                    <td>900 – 1200 °C</td>
                                    <td>Finish above 950 °C, quench afterward</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Cold Working</td>
                                    <td>—</td>
                                    <td>Annealing required after severe forming</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Post-Weld Heat Treatment</td>
                                    <td>Optional</td>
                                    <td>Enhances corrosion resistance</td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="mt-3 text-center">
                            Hastelloy C-4 is exceptionally stable at high temperatures, resisting carbide and sigma-phase
                            precipitation.
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
                    Mechanical Properties of Hastelloy C-4
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
                            <td>690 MPa</td>
                            <td>100,000 psi</td>
                        </tr>
                        <tr class="t-row">
                            <td>Yield Strength (0.2%)</td>
                            <td>310 MPa</td>
                            <td>45,000 psi</td>
                        </tr>
                        <tr class="t-row">
                            <td>Elastic Modulus (RT)</td>
                            <td>205 GPa</td>
                            <td>29,700 ksi</td>
                        </tr>
                        <tr class="t-row">
                            <td>Elongation (50.8 mm)</td>
                            <td>40%</td>
                            <td>40%</td>
                        </tr>
                        <tr class="t-row">
                            <td>Hardness (Rockwell B)</td>
                            <td>89</td>
                            <td>89</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Available Forms -->
    <section class="sec-padd-top sec-padd-bottom bg-light" id="related grades">
        <div class="container">
            <div class="section-title center mt-5">
                <h2>Available Forms & Size Range – Hastelloy C-4</h2>
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
                            <td>Seamless Pipes</td>
                            <td>6 – 219 mm OD</td>
                        </tr>
                        <tr class="t-row">
                            <td>Welded Pipes</td>
                            <td>Custom sizes</td>
                        </tr>
                        <tr class="t-row">
                            <td>Heat Exchanger / Capillary / U-Bend Tubes</td>
                            <td>As required</td>
                        </tr>
                        <tr class="t-row">
                            <td>Sheets & Plates</td>
                            <td>0.5 – 100 mm</td>
                        </tr>
                        <tr class="t-row">
                            <td>Coils & Strips</td>
                            <td>0.1 – 12 mm</td>
                        </tr>
                        <tr class="t-row">
                            <td>Bars (Round / Flat / Square / Hex)</td>
                            <td>Up to 300 mm</td>
                        </tr>
                        <tr class="t-row">
                            <td>Pipe Fittings</td>
                            <td>ASME / DIN compliant</td>
                        </tr>
                        <tr class="t-row">
                            <td>Flanges</td>
                            <td>WN, SO, BL, SW, Threaded</td>
                        </tr>
                        <tr class="t-row">
                            <td>Fasteners</td>
                            <td>M3 – M80</td>
                        </tr>
                        <tr class="t-row">
                            <td>Custom Components</td>
                            <td>As per drawing</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Standards -->
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
                            <td>N06455</td>
                        </tr>
                        <tr class="t-row">
                            <td>W.Nr</td>
                            <td>2.4610</td>
                        </tr>
                        <tr class="t-row">
                            <td>ASTM</td>
                            <td>B575, B619, B622, B626</td>
                        </tr>
                        <tr class="t-row">
                            <td>ASME</td>
                            <td>SB575, SB619, SB622, SB626</td>
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
                <h2>Products in Hastelloy C4</h2>
            </div>

            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">MOKSH TUBES & FITTINGS LLP</strong>, we offer Hastelloy C-4 in a variety
                        of product forms to meet the diverse demands of industries facing aggressive chemical environments:
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
                        We offer Hastelloy C4 in a wide range of product forms, including:
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

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4 justify-content-center">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Superior resistance to strong oxidizers (especially nitric acid mixtures)</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Excellent thermal stability up to 1040°C (1900°F)</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Resistant to intergranular corrosion after welding</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Maintains mechanical strength and integrity in extreme environments</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Great weldability and workability for fabrication</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="applications"  class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Hastelloy C4</h2>
                <p class="text-center pb-3"><strong class="text-dark">HASTELLOY C-4</strong> is a
                    nickel-chromium-molybdenum alloy specifically designed to offer excellent resistance to a wide range of
                    corrosive environments, especially under high heat and stress. Known for its stability during welding
                    and outstanding resistance to stress corrosion cracking, it's a trusted choice across several critical
                    industries.
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Chemical and Petrochemical Processing</h5>
                        <p>Used in reactors, heat exchangers, piping systems, and pressure vessels that handle aggressive
                            acids like hydrochloric, sulfuric, and phosphoric acid — even at elevated temperatures.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Pharmaceutical and Fine Chemical Industries</h5>
                        <p>Ideal for process equipment that must withstand aggressive cleaning agents and maintain material
                            integrity under high-purity conditions.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Pollution Control Systems</h5>
                        <p>Applied in scrubbers, ducts, and stack liners that are exposed to hot, acidic gases and oxidizing
                            media found in flue gas desulfurization (FGD) and other emission control setups.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Nuclear Industry</h5>
                        <p>Relied on for components exposed to highly corrosive and high-radiation environments, including
                            heat exchangers and piping in nuclear fuel reprocessing.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Pulp and Paper Industry</h5>
                        <p>Suitable for bleaching and chemical recovery sections where strong oxidizers and acidic chemicals
                            are in use.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Waste Treatment and Environmental Engineering</h5>
                        <p>Used in waste acid recovery systems, incineration scrubbers, and wastewater components where
                            resistance to mixed corrosive chemicals is essential.</p>
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
            <p class="text-center pb-3 my-4"><strong class="text-dark">HASTELLOY C-4's</strong> with its excellent
                resistance to oxidizing and reducing agents, plus superb weldability and thermal stability stands out as a
                dependable material in challenging, corrosion-prone applications where durability and safety are
                non-negotiable.
            </p>
        </div>
    </section>

      <section id="price" class="sec-padd-top sec-padd-bottom bg-light py-5">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h2>Hastelloy C-4 Price in India</h2>
            </div>

            <p class="text-center fs-5">
                <strong>Typical Range:</strong> ₹2,600 – ₹5,200 per kg
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
                                <h4>What is Hastelloy C-4 and what are its key properties?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Hastelloy C-4 (UNS N06455) is a nickel-chromium-molybdenum alloy engineered for high
                                    corrosion resistance, thermal stability, and superior weldability. It excels in
                                    resisting oxidizing and reducing agents, making it ideal for chemical processing,
                                    pharmaceuticals, and nuclear applications.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Which products are available in Hastelloy C-4?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP supplies Hastelloy C-4 in pipes, tubes, sheets, plates,
                                    coils, bars, flanges, fittings, fasteners, and custom-engineered components to meet
                                    diverse industrial requirements.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What industries use Hastelloy C-4?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Hastelloy C-4 is widely used in chemical and petrochemical processing, pharmaceutical
                                    production, pollution control systems, nuclear industries, pulp and paper, and waste
                                    treatment due to its ability to handle hot acids, oxidizers, and extreme temperatures.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why is Hastelloy C-4 preferred over other nickel alloys?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Its low carbon and silicon content prevents grain boundary precipitation during welding,
                                    enhancing corrosion resistance and structural integrity. Additionally, it maintains
                                    mechanical strength under extreme heat and stress, outperforming many other nickel
                                    alloys.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose MOKSH TUBES & FITTINGS LLP for Hastelloy C-4 products?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    We offer ISO certified quality, ready stock, custom fabrication, in house manufacturing,
                                    and expert technical support, ensuring reliable supply of high performance Hastelloy C-4
                                    products worldwide.
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


    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container text-center">
            <div class="section-title center">
                <h2>WHY CHOOSE US?</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-award-fill"></i></div>
                        <h5>Expertise in high-performance corrosion-resistant alloys</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>In-house manufacturing and export compliance</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Committed customer support and project-based solutions</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>ISO and international standards-driven quality control</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Ready stock of standard sizes & customizable offerings</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="contact-us" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Contact Us</h2>
                <p>
                    Partner with <strong>Moksh Tubes & Fittings LLP</strong> for reliable sourcing of <strong>HASTELLOY
                        C-4</strong> products.. Get expert support, certified material, and on-time delivery for all your
                    industrial needs.
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
                "name": "What is Hastelloy C-4 and what are its key properties?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Hastelloy C-4 (UNS N06455) is a nickel-chromium-molybdenum alloy engineered for high corrosion resistance, thermal stability, and superior weldability. It excels in resisting oxidizing and reducing agents, making it ideal for chemical processing, pharmaceuticals, and nuclear applications."
                }
                },
                {
                "@type": "Question",
                "name": "Which products are available in Hastelloy C-4?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "MOKSH TUBES & FITTINGS LLP supplies Hastelloy C-4 in pipes, tubes, sheets, plates, coils, bars, flanges, fittings, fasteners, and custom-engineered components to meet diverse industrial requirements."
                }
                },
                {
                "@type": "Question",
                "name": "What industries use Hastelloy C-4?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Hastelloy C-4 is widely used in chemical and petrochemical processing, pharmaceutical production, pollution control systems, nuclear industries, pulp and paper, and waste treatment due to its ability to handle hot acids, oxidizers, and extreme temperatures."
                }
                },
                {
                "@type": "Question",
                "name": "Why is Hastelloy C-4 preferred over other nickel alloys?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Its low carbon and silicon content prevents grain boundary precipitation during welding, enhancing corrosion resistance and structural integrity. Additionally, it maintains mechanical strength under extreme heat and stress, outperforming many other nickel alloys."
                }
                },
                {
                "@type": "Question",
                "name": "Why choose MOKSH TUBES & FITTINGS LLP for Hastelloy C-4 products?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We offer ISO certified quality, ready stock, custom fabrication, in house manufacturing, and expert technical support, ensuring reliable supply of high performance Hastelloy C-4 products worldwide."
                }
                }
            ]
            }

        @endverbatim
    </script>
@endsection
