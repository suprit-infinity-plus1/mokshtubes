@extends('layouts.master')

@section('title', 'Hastelloy B2 | Premium Acid-Resistant Nickel Alloy')
@section('meta_description',
    'Hastelloy B2 pipes, tubes, and fittings deliver strong resistance to hydrochloric and
    reducing acids—ideal for chemical process industries.')
@section('meta_keywords',
    'Hastelloy B2, acid resistant nickel alloy, corrosion resistant alloy, Hastelloy B2 pipes,
    Hastelloy B2 tubes, Hastelloy B2 fittings, hydrochloric acid resistant, sulfuric acid resistant, chemical processing
    alloys, industrial corrosion resistant alloys, durable nickel alloys')
@section('og_image', asset('assets/images/hastelloy/hastelloy-b2.webp'))
@section('og_type', 'article')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/hastelloy/hastelloy-b2.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Hastelloy B2 Alloy <br> Acid Resistant Nickel Alloy</h1>
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
                Introduction To Hastelloy B‑2 / Alloy B‑2 / UNS N10665
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/hastelloy/hastelloy-b2.webp') }}" alt="Hastelloy-b2"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a renowned manufacturer,
                            supplier, exporter, importer, and stockist of <strong class="text-black">HASTELLOY B2</strong>
                            Products. Including <a href="{{ route('products.pipes-tubes') }}">pipes & tubes</a>, fittings,
                            flanges, sheets, plates, bars, wires, welding rods,
                            wire mesh, and custom-engineered components. Leveraging our deep expertise in nickel-molybdenum
                            alloys and a robust sourcing network, we deliver high-performance B‑2 solutions tailored to your
                            industrial needs.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black"><a href="{{ route('materials.hastelloy') }}">HASTELLOY B2</a></strong
                                class="text-black"> is a <a href="{{ route('materials.nickel-Based-Superalloys') }}">nickel
                                alloy
                                specifically</a> formulated for superior resistance to reducing acids—including
                            hydrochloric,
                            sulfuric, acetic, and phosphoric—especially valuable where oxidizing alloys fail under welded
                            conditions. Its low chromium, carbon, and silicon content ensures minimal carbide formation
                            during welding, maintaining alloy integrity in corrosive and high-temperature environments.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Hastelloy B2 Datasheet</h3>
            <p class="mb-3">
                Get the complete Hastelloy B2 datasheet with chemical composition,
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
                <h2>Hastelloy B-2 – Specifications (UNS N10665)</h2>
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
                                    <td>Hastelloy B-2 / Alloy B-2 / UNS N10665</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Material Type</td>
                                    <td>Nickel–Molybdenum Alloy</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Key Characteristics</td>
                                    <td>Excellent resistance to reducing acids, high purity, superior weldability</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chemical Summary</td>
                                    <td>Ni ~65%, Mo 26–30%, Fe ~2%, Cr ~1%</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Operating Conditions</td>
                                    <td>Ideal for strong reducing media</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Conditions Available</td>
                                    <td>Annealed, Solution Annealed, Hot Rolled, Cold Worked</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Heat Treatment</td>
                                    <td>Solution Anneal at 1065–1120°C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Weldability</td>
                                    <td>Excellent — low carbide formation</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Testing Offered</td>
                                    <td>PMI, Chemical Analysis, Hardness, Tensile, NDT</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Certification</td>
                                    <td>EN 10204 3.1 / 3.2</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Applicable Standards</td>
                                    <td>ASTM B333, B619, B622, B626</td>
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
                <h2>Chemical Composition of Hastelloy B-2</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Element</th>
                                    <th>Composition (% by Weight)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Nickel (Ni)</td>
                                    <td>~65 (Balance)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Molybdenum (Mo)</td>
                                    <td>26 – 30</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron (Fe)</td>
                                    <td>2.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium (Cr)</td>
                                    <td>1.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Cobalt (Co)</td>
                                    <td>1.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese (Mn)</td>
                                    <td>1.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon (Si)</td>
                                    <td>0.10</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon (C)</td>
                                    <td>0.02</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Phosphorus (P)</td>
                                    <td>0.04</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sulfur (S)</td>
                                    <td>0.03</td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="mt-3 text-center">
                            High molybdenum content provides outstanding resistance to strong reducing acids.
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
                <h2 class="fw-bold" style="color:#174268;">Physical Properties of Hastelloy B-2</h2>
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
                                    <td>9.24 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Point</td>
                                    <td>1370 °C (2500 °F)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tensile Strength</td>
                                    <td>760 MPa / 110,000 psi</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (0.2%)</td>
                                    <td>355 MPa / 52,000 psi</td>
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
                        Heat Treatment of Hastelloy B-2
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
                                    <td>1065 – 1120 °C</td>
                                    <td>Rapid air or water quench</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Stress Relieving</td>
                                    <td>870 – 900 °C</td>
                                    <td>Air cool</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Hot Working</td>
                                    <td>900 – 1200 °C</td>
                                    <td>Finish above 950 °C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Cold Working</td>
                                    <td>—</td>
                                    <td>Annealing recommended</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Post-Weld Heat Treatment</td>
                                    <td>Optional</td>
                                    <td>Improves corrosion resistance</td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="mt-3 text-center">
                            ⚠ Rapid cooling prevents carbide precipitation. Hastelloy B-2 must not be exposed to oxidizing
                            environments.
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
                    Mechanical Properties of Hastelloy B-2
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
                            <td>355 MPa</td>
                            <td>52,000 psi</td>
                        </tr>
                        <tr class="t-row">
                            <td>Elastic Modulus (RT)</td>
                            <td>210 GPa</td>
                            <td>30,000 ksi</td>
                        </tr>
                        <tr class="t-row">
                            <td>Elongation (50.8 mm)</td>
                            <td>40%</td>
                            <td>40%</td>
                        </tr>
                        <tr class="t-row">
                            <td>Hardness (Rockwell B)</td>
                            <td>88</td>
                            <td>88</td>
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
                <h2>Available Forms & Size Range – Hastelloy B-2</h2>
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
                            <td>Welded Pipes / Tubes</td>
                            <td>Custom sizes</td>
                        </tr>
                        <tr class="t-row">
                            <td>Heat Exchanger / U-Bend Tubes</td>
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
                            <td>Bars (Round / Flat / Hex)</td>
                            <td>Up to 300 mm</td>
                        </tr>
                        <tr class="t-row">
                            <td>Pipe Fittings</td>
                            <td>ASME / DIN</td>
                        </tr>
                        <tr class="t-row">
                            <td>Flanges</td>
                            <td>WN, SO, Blind, SW, Threaded</td>
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
                            <td>N10665</td>
                        </tr>
                        <tr class="t-row">
                            <td>W.Nr</td>
                            <td>2.4617</td>
                        </tr>
                        <tr class="t-row">
                            <td>ASTM</td>
                            <td>B333, B619, B622, B626</td>
                        </tr>
                        <tr class="t-row">
                            <td>ASME</td>
                            <td>SB333, SB619, SB622, SB626</td>
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
                <h2>Products in Hastelloy B2</h2>
            </div>

            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">MOKSH TUBES & FITTINGS LLP</strong> offers Hastelloy B‑2 in a
                        comprehensive
                        range of forms and product types:
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
                        We offer Hastelloy B2 in a wide range of product forms, including:
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
                        <h5>Maintains integrity and strength at moderate to elevated temperatures</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Exceptional resistance to reducing acids (HCl, H₂SO₄)</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Ideal for welded fabrication—minimizes sensitization and corrosion</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Excellent ductility and weldability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Reliable in acid handling equipment, corrosion-resistant tanks, piping, and heat exchangers</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Hastelloy B2</h2>
                <p class="text-center pb-3"><strong class="text-dark">HASTELLOY B-2</strong> is a nickel-molybdenum alloy
                    known for its excellent resistance to strong reducing environments, particularly hydrochloric acid in a
                    wide range of concentrations and temperatures. It also resists stress corrosion cracking, pitting, and
                    crevice attack, making it a dependable material for tough chemical processing conditions.
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Chemical Processing Industry</h5>
                        <p>Commonly used in reactors, heat exchangers, distillation columns, and piping systems handling
                            hydrochloric, sulfuric, acetic, and phosphoric acids under reducing conditions.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Pickling and Acid Regeneration Equipment</h5>
                        <p>Ideal for use in pickling lines, acid tanks, and regeneration units where strong acids are used
                            to clean and treat metal surfaces.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Agrochemical & Fertilizer Production</h5>
                        <p> Deployed in acid handling systems, reactors, and piping where highly corrosive environments and
                            reducing chemicals are present.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Pharmaceutical & Fine Chemicals</h5>
                        <p>Used in vessels and systems that demand high purity and corrosion resistance to strong reducing
                            agents during production and cleaning processes.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Electronics and Semiconductor Manufacturing</h5>
                        <p>Suitable for acid handling components in wet etching and cleaning systems where metal purity and
                            corrosion resistance are essential.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Waste Treatment & Pollution Control</h5>
                        <p>Applied in systems treating acidic waste streams and corrosive off-gases where reducing acids and
                            aggressive cleaning agents are used.</p>
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
            <p class="text-center pb-3 my-4"><strong class="text-dark">HASTELLOY B-2's</strong> Thanks to its resistance
                to a wide range of non-oxidizing acids and its proven performance in demanding environments, HASTELLOY B-2
                remains a trusted choice for critical chemical service where long-term corrosion resistance is key

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
                        <h5>Extensive experience with nickel-molybdenum alloys</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>End-to-end supply chain from raw materials to finished parts</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>ISO-quality systems and global export compliances</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Tailored fabrication and responsive technical support</h5>
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
                            <h2>FAQ's</h2>
                        </div>

                        <!-- Q1 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What is Hastelloy B2 and what are its properties?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Hastelloy B2 is a nickel-molybdenum alloy designed for outstanding resistance to
                                    reducing acids. It maintains strength at moderate to elevated temperatures, offers
                                    excellent ductility, weldability, and resists stress corrosion cracking, pitting, and
                                    crevice attack.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Which Hastelloy B2 products are available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Products include seamless and welded pipes, tubes (capillary, U-bend, boiler, heat
                                    exchanger), sheets, plates, coils, strips, bars (round, flat, hex, square), pipe
                                    fittings, flanges, fasteners, wires, welding rods, wire mesh, and custom-fabricated
                                    components.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the key advantages of Hastelloy B2?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Hastelloy B2 provides exceptional resistance to hydrochloric, sulfuric, acetic, and
                                    phosphoric acids, excellent weldability, low sensitization risk, structural integrity
                                    under high temperatures, and reliable performance in chemical handling equipment.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>In which industries is Hastelloy B2 used?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    It is widely used in chemical processing, pickling and acid regeneration, agrochemical
                                    and fertilizer production, pharmaceutical and fine chemicals, electronics and
                                    semiconductor manufacturing, and waste treatment systems.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose MOKSH TUBES & FITTINGS for Hastelloy B2?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    We deliver pure and alloyed Hastelloy B2 in multiple forms, offer precision fabrication,
                                    maintain ISO certified quality systems, provide end to end supply chain support, and
                                    ensure responsive technical assistance with global delivery.
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
                    For assistance, technical specifications, or pricing inquiries, connect with <strong>Moksh Tubes &
                        Fittings LLP</strong> – your
                    go-to partner for <strong>HASTELLOY B-2</strong> expertise.
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
                "name": "What is Hastelloy B2 and what are its properties?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Hastelloy B2 is a nickel-molybdenum alloy designed for outstanding resistance to reducing acids. It maintains strength at moderate to elevated temperatures, offers excellent ductility, weldability, and resists stress corrosion cracking, pitting, and crevice attack."
                }
                },
                {
                "@type": "Question",
                "name": "Which Hastelloy B2 products are available?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Products include seamless and welded pipes, tubes (capillary, U-bend, boiler, heat exchanger), sheets, plates, coils, strips, bars (round, flat, hex, square), pipe fittings, flanges, fasteners, wires, welding rods, wire mesh, and custom-fabricated components."
                }
                },
                {
                "@type": "Question",
                "name": "What are the key advantages of Hastelloy B2?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Hastelloy B2 provides exceptional resistance to hydrochloric, sulfuric, acetic, and phosphoric acids, excellent weldability, low sensitization risk, structural integrity under high temperatures, and reliable performance in chemical handling equipment."
                }
                },
                {
                "@type": "Question",
                "name": "In which industries is Hastelloy B2 used?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "It is widely used in chemical processing, pickling and acid regeneration, agrochemical and fertilizer production, pharmaceutical and fine chemicals, electronics and semiconductor manufacturing, and waste treatment systems."
                }
                },
                {
                "@type": "Question",
                "name": "Why choose MOKSH TUBES & FITTINGS for Hastelloy B2?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We deliver pure and alloyed Hastelloy B2 in multiple forms, offer precision fabrication, maintain ISO certified quality systems, provide end to end supply chain support, and ensure responsive technical assistance with global delivery."
                }
                }
            ]
            }

        @endverbatim
    </script>
@endsection
