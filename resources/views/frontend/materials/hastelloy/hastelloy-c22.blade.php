@extends('layouts.master')

@section('title', 'Hastelloy C-22 – Superior Corrosion-Resistant Alloys.')
@section('meta_description',
    'Hastelloy C-22 pipes, tubes, and fittings offer unmatched corrosion resistance against
    oxidizing and reducing agents in harsh industrial environments.')
@section('meta_keywords',
    'Hastelloy C-22, Hastelloy C22, Corrosion Resistant Alloy, Hastelloy C22 Pipes, Hastelloy C22
    Tubes, Hastelloy C22 Fittings, Pitting Resistant Alloy, Crevice Corrosion Resistant, Stress Corrosion Resistant,
    Chemical Processing Alloys, Industrial Corrosion Resistant Alloys, Durable Nickel Alloys')
@section('og_image', asset('assets/images/hastelloy/hastelloy-c22.webp'))
@section('og_type', 'article')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/hastelloy/hastelloy-c22.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Hastelloy C-22 Alloy <br> UNS N06022 Corrosion-Resistant Nickel Alloy</h1>
                    <!-- Add your extra content here -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Hastelloy C22 is a premium corrosion-resistant alloy designed for the harshest chemical
                        environments, where stainless steels and lower-grade alloys fail. This page includes the complete
                        datasheet containing chemical composition, mechanical properties, heat treatment, applications,
                        available forms, prices, and more.</p>
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
                Hastelloy C22 (UNS N06022) Pipes, Sheets, Bars & Applications </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/hastelloy/hastelloy-c22.webp') }}" alt="Hastelloy C276"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black">MOKSH TUBES & FITTINGS LLP</strong> is a trusted
                            <strong>supplier</strong>, exporter, importer, and stockist of
                            Hastelloy C22</a> (Alloy C22 / UNS N06022) along with other nickel alloys such as <a
                                href="{{ url('materials/hastelloy/hastelloy-c276') }}">Hastelloy C276</a>
                            and <a href="{{ url('materials/incoloy/incoloy-825') }}">Incoloy 825</a>.
                            We offer a complete range of <a href="{{ route('products') }}">products</a> including
                            <a href="{{ route('products.pipes-tubes') }}">Pipes & Tubes</a>, Pipe Fittings, Flanges,
                            Fasteners,
                            Sheets & Plates, Coils, Wires, Round Bars, Flat Bars, Angles, Channels, Welding Rods, Wire Mesh,
                            and other Custom Hastelloy solutions.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            Unlike conventional stainless steels, <strong class="text-black">Hastelloy alloys</strong> such
                            as
                            <strong>C22</strong> and <strong>C276</strong> are designed for highly corrosive and
                            unpredictable environments.
                            With excellent resistance to both oxidizing and reducing media,
                            <strong class="text-black">Hastelloy C22</strong> provides superior protection against pitting,
                            crevice corrosion, and stress corrosion cracking – even in aggressive chemical processes
                            involving
                            chlorides, wet chlorine gas, ferric and cupric salts, formic and acetic acids.
                            Its unique chemistry and superior mechanical properties make it indispensable in
                            chemical processing, marine, oil & gas, and other critical industries.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Hastelloy C22 Datasheet</h3>
            <p class="mb-3">
                Get the complete Hastelloy C22 datasheet with chemical composition,
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
                <h2>Hastelloy C22 – Specifications (UNS N06022)</h2>
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
                                    <td>Hastelloy C22 / Alloy 22 / UNS N06022</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Type</td>
                                    <td>Nickel–Chromium–Molybdenum–Tungsten Alloy</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Main Features</td>
                                    <td>Extreme corrosion resistance, excellent resistance to pitting & crevice corrosion,
                                        superior weldability</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Available Conditions</td>
                                    <td>Annealed, Solution Annealed, Hot Rolled, Cold Worked</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Testing Offered</td>
                                    <td>Tensile, Hardness, Chemical Analysis, PMI, UT Testing</td>
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
                <h2>Chemical Composition of Hastelloy C22</h2>
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
                                    <td>Balance (~56%)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium (Cr)</td>
                                    <td>22</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Molybdenum (Mo)</td>
                                    <td>13</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron (Fe)</td>
                                    <td>3</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tungsten (W)</td>
                                    <td>3</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Cobalt (Co)</td>
                                    <td>2.5 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese (Mn)</td>
                                    <td>0.5 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Vanadium (V)</td>
                                    <td>0.35 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon (Si)</td>
                                    <td>0.08 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon (C)</td>
                                    <td>0.01 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Phosphorus (P)</td>
                                    <td>0.02 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sulfur (S)</td>
                                    <td>0.02 max</td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="mt-3 text-center">
                            Hastelloy C22 is engineered to withstand both oxidizing and reducing environments — a rare
                            capability among corrosion-resistant alloys.
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
                    Physical Properties of Hastelloy C22
                </h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
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
                                    <td>8.69 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Point</td>
                                    <td>1350 °C (2460 °F)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tensile Strength</td>
                                    <td>790 MPa / 115,000 psi</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (0.2%)</td>
                                    <td>355 MPa / 52,000 psi</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elongation</td>
                                    <td>45%</td>
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
                        Heat Treatment of Hastelloy C22
                    </h4>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Process</th>
                                    <th>Temperature</th>
                                    <th>Cooling Method</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Solution Annealing</td>
                                    <td>1120 – 1175 °C</td>
                                    <td>Rapid water quench</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Stress Relieving</td>
                                    <td>870 – 900 °C</td>
                                    <td>Air cool</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Hot Working</td>
                                    <td>950 – 1175 °C</td>
                                    <td>Water quench or rapid cooling</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Cold Working</td>
                                    <td>—</td>
                                    <td>Requires periodic annealing</td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="mt-3 text-center">
                            ⚠ Prolonged exposure between 650–900 °C should be avoided due to precipitation risk.
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
                    Mechanical Properties of Hastelloy C22
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
                            <td>690 – 790 MPa</td>
                            <td>100,000 – 115,000 psi</td>
                        </tr>
                        <tr class="t-row">
                            <td>Yield Strength (0.2%)</td>
                            <td>379 MPa</td>
                            <td>55,000 psi</td>
                        </tr>
                        <tr class="t-row">
                            <td>Elongation</td>
                            <td>45%</td>
                            <td>45%</td>
                        </tr>
                        <tr class="t-row">
                            <td>Hardness</td>
                            <td>89 – 100 HRB</td>
                            <td>89 – 100 HRB</td>
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
                <h2>Available Forms & Size Range – Hastelloy C22</h2>
            </div>

            <div class="table-responsive col-lg-10 mx-auto">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Product Form</th>
                            <th>Size Range</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="t-row">
                            <td>Seamless Pipes</td>
                            <td>6 – 219 mm OD</td>
                        </tr>
                        <tr class="t-row">
                            <td>Welded Pipes (ERW / EFW)</td>
                            <td>Custom sizes</td>
                        </tr>
                        <tr class="t-row">
                            <td>Tubes (Capillary / U-Bend / Boiler)</td>
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
                            <td>Round Bars</td>
                            <td>6 – 300 mm</td>
                        </tr>
                        <tr class="t-row">
                            <td>Flat / Square / Hex Bars</td>
                            <td>Custom sizes</td>
                        </tr>
                        <tr class="t-row">
                            <td>Flanges & Fittings</td>
                            <td>ASME / DIN standards</td>
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
                <h2>Equivalent Grades & Standards</h2>
            </div>

            <div class="table-responsive col-lg-6 mx-auto">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Standard</th>
                            <th>Grade</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="t-row">
                            <td>UNS</td>
                            <td>N06022</td>
                        </tr>
                        <tr class="t-row">
                            <td>W.Nr</td>
                            <td>2.4602</td>
                        </tr>
                        <tr class="t-row">
                            <td>ASTM</td>
                            <td>B575, B622, B619, B626</td>
                        </tr>
                        <tr class="t-row">
                            <td>ASME</td>
                            <td>SB575, SB622, SB619</td>
                        </tr>
                        <tr class="t-row">
                            <td>EN</td>
                            <td>NiCr22Mo14W</td>
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
                <h2>Products in Hastelloy C22</h2>
            </div>

            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">MOKSH TUBES & FITTINGS LLP</strong>, with years of expertise in
                        nickel-based alloys and an extensive global supply network,offers a complete range <strong
                            class="text-dark">HASTELLOY
                            products</strong>. These products are engineered to perform in the most corrosive
                        environments found across industries such as Chemical Processing, Pollution Control, Oil & Gas,
                        Marine, Power Generation, Wastewater Treatment, and more. The unique chemical composition of C22
                        makes it capable of resisting a wide variety of complex and mixed chemical conditions, delivering
                        unmatched durability and reliability for mission-critical applications.
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
                        We offer Hastelloy C22 in a wide range of product forms, including:
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
                        <h5>Exceptional corrosion resistance in both oxidizing and reducing environments</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>High resistance to pitting, crevice corrosion, and stress corrosion cracking</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Excellent mechanical properties under chemical and thermal stress</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Superior weldability and fabrication capability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Suitable for extremely aggressive and mixed chemical environments</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="applications"  class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Hastelloy C22 (UNS N06022)</h2>
                <p class="text-center pb-3"><strong class="text-dark">HASTELLOY C-22</strong> is extensively utilized
                    across industries that demand superior corrosion resistance and long-term mechanical performance in
                    highly aggressive and unpredictable chemical processes. Its multi-purpose capabilities make it an
                    excellent choice for a wide range of critical applications:
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Chemical Processing Industry</h5>
                        <p>reactors, heat exchangers, scrubbers, storage vessels, piping systems</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Pollution Control / FGD Systems</h5>
                        <p>ducts, dampers, scrubbers, stack liners.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Oil & Gas Sector</h5>
                        <p>sour gas service, subsea equipment, wellhead components, manifolds, separators.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Marine & Offshore Applications</h5>
                        <p>seawater systems, offshore platforms, marine exhausts.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Pulp and Paper Industry</h5>
                        <p>bleach plants, digesters, chlorine dioxide generators.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Power Generation and Nuclear Plants</h5>
                        <p>condensers, pressure vessels, heat exchangers.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-capsule"></i></div>
                        <h5>Pharmaceutical & Food Processing</h5>
                        <p>hygienic piping, vessels, systems with strict quality standards.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-recycle"></i></div>
                        <h5>Wastewater Treatment and Environmental Systems</h5>
                        <p>tanks, filters, piping exposed to corrosive effluents.</p>
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
            <p class="text-center pb-3 my-4"><strong class="text-dark">HASTELLOY C-22's</strong> exceptional versatility,
                combined with its outstanding resistance to multiple types of corrosion, makes it the material of choice for
                industries where failure is simply not an option.
            </p>
        </div>
    </section>

    <section id="price" class="sec-padd-top sec-padd-bottom bg-light py-5">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h2>Hastelloy C22 Price in India</h2>
            </div>

            <p class="text-center fs-5">
                <strong>Typical Range:</strong> ₹2,500 – ₹5,000 per kg
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
                                <h4>What is Hastelloy C22 and why is it unique?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Hastelloy C22 (Alloy C22 / UNS N06022) is a nickel-chromium-molybdenum-tungsten alloy
                                    with unmatched resistance to mixed chemical environments. Its composition makes it
                                    superior to many other Hastelloy grades.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What is the Hastelloy C22 price per kg?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Prices vary depending on product form (pipes, sheets, bars) and order size. Contact us
                                    for the latest Hastelloy C22 price in India.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Hastelloy C22 vs C276 – which one should I choose?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    C22 offers better resistance to oxidizing agents, while C276 is widely available and
                                    more cost-effective. Choice depends on application.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Is Hastelloy better than stainless steel 316L?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Yes, for highly aggressive chemical environments, Hastelloy alloys outperform 316L
                                    stainless steel in corrosion resistance.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Who are the leading Hastelloy C22 suppliers?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Moksh Tubes & Fittings LLP is a leading Hastelloy C22 supplier, stockist, and exporter
                                    with a strong global presence.
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
                        <h5>Reliable Supplier & Distributor of Hastelloy C22 Products</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Strong global supplier network ensuring best raw materials</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Expertise in nickel alloys and high-performance metals</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Customized solutions for unique project needs</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Commitment to quality, reliability, and customer satisfaction</h5>
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
                    For inquiries, technical assistance, or quotations, contact
                    <strong>Moksh Tubes & Fittings LLP</strong> – your global supplier for
                    <strong>Hastelloy C22</strong> and <strong>Hastelloy C276 products</strong>.
                    Reach us at <a href="mailto:info@mokshfittings.com"><strong>info@mokshfittings.com</strong></a>
                    or call us at <a href="tel:+91 97695 84950"><strong>+91 97695 84950</strong></a>.
                </p>

                <!-- Call button -->
                <a href="tel:+919769584950" class="contact-cta-btn">Get in Touch</a>
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
                "name": "What is Hastelloy C22 and why is it unique?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Hastelloy C22 (Alloy C22 / UNS N06022) is a nickel-chromium-molybdenum-tungsten alloy with unmatched resistance to mixed chemical environments. Its composition makes it superior to many other Hastelloy grades."
                }
                },
                {
                "@type": "Question",
                "name": "What is the Hastelloy C22 price per kg?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Prices vary depending on product form (pipes, sheets, bars) and order size. Contact us for the latest Hastelloy C22 price in India."
                }
                },
                {
                "@type": "Question",
                "name": "Hastelloy C22 vs C276 – which one should I choose?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "C22 offers better resistance to oxidizing agents, while C276 is widely available and more cost-effective. Choice depends on application."
                }
                },
                {
                "@type": "Question",
                "name": "Is Hastelloy better than stainless steel 316L?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, for highly aggressive chemical environments, Hastelloy alloys outperform 316L stainless steel in corrosion resistance."
                }
                },
                {
                "@type": "Question",
                "name": "Who are the leading Hastelloy C22 suppliers?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Moksh Tubes & Fittings LLP is a leading Hastelloy C22 supplier, stockist, and exporter with a strong global presence."
                }
                }
            ]
            }

        @endverbatim
    </script>
@endsection
