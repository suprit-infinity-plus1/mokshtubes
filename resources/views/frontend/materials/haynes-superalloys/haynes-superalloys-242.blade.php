@extends('layouts.master')

@section('title', 'Haynes Superalloys 242 - Oxidation & Corrosion Resistant')
@section('meta_description',
    'Haynes Alloy 242 offers excellent oxidation, thermal stability, and corrosion resistance
    for demanding industrial environments.')
@section('meta_keywords',
    'Haynes Superalloys 242, Haynes Alloy 242, Oxidation Resistant Alloy, Corrosion Resistant
    Alloy, Thermal Stability Alloy, High Temperature Alloy, Industrial Haynes Alloys, Chemical Processing Haynes, Power
    Industry Haynes, Aerospace Haynes Alloys, Marine Industry Haynes')
@section('og_image', asset('assets/images/haynes/haynes-242.webp'))
@section('og_type', 'article')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(assets/images/haynes/haynes-242.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Haynes Superalloy 242 <br> Oxidation & Corrosion Resistant</h1>

                    <!-- Add your extra content here -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Haynes Superalloy 242 is a high-strength nickel-based alloy designed for excellent resistance to
                        oxidation and corrosion at elevated temperatures. It offers superior thermal stability, creep
                        resistance, and long-term durability, making it suitable for gas turbine components, aerospace
                        hardware, and high-temperature industrial applications where consistent performance is critical.

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
                Introduction To Haynes Superalloys 242 / UNS N10242
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/haynes/haynes-242.webp') }}" alt="Haynes-242"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a manufacturer, supplier,
                            exporter, importer, and stockist of a wide range of<strong class="text-black"> Haynes 242 (UNS
                                N10242)<a href="{{ route('products') }}"> products</a></strong> including
                            Pipes & Tubes, Pipe Fittings, Flanges, Fasteners, Sheets & Plates, Coils, Wires, Round Bars,
                            Flat Bars, Angles, Channels, Welding Rods, Wire Mesh, and other custom and hard-to-find
                            Haynes 242 products.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black"><a href="{{ route('materials.haynes-Superalloys') }}">Haynes
                                    Superalloys 242</a></strong> is an age-hardenable nickel-molybdenum-chromium alloy known
                            for its exceptional high-temperature strength, low thermal expansion, outstanding oxidation
                            resistance, and good fatigue performance. It remains dimensionally stable and structurally
                            robust up to approximately 705 °C (1300 °F).
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Haynes Superalloys 242 Datasheet</h3>
            <p class="mb-3">
                Get the complete Haynes Superalloys 242 datasheet with chemical composition,
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
                <h2>HAYNES 242® Specifications (UNS N10242 / Alloy 242)</h2>
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
                                    <td>Haynes 242® / Alloy 242 / UNS N10242</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Type</td>
                                    <td>Age-hardenable Nickel–Molybdenum–Chromium Alloy</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Conditions Available</td>
                                    <td>Annealed, Solution Treated, Cold Worked, Aged</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manufacturing Forms</td>
                                    <td>Rolled, Forged, Extruded, Drawn</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Heat Treatment</td>
                                    <td>Solution Annealing + Age Hardening</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Testing</td>
                                    <td>Tensile, Hardness, Charpy, PMI, Chemical, UT</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Certification</td>
                                    <td>EN 10204 3.1 / 3.2, ASTM / ASME</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Standards</td>
                                    <td>ASTM B435, B572, B619, B622, B626 & ASME SB equivalents</td>
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
                <h2>Chemical Composition of HAYNES 242®</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <p class="text-center mb-3">
                        The alloy’s exceptional properties stem from its specific chemical makeup.
                    </p>
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
                                    <td>Balance</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Molybdenum (Mo)</td>
                                    <td>24 – 26</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium (Cr)</td>
                                    <td>7 – 9</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron (Fe)</td>
                                    <td>≤ 2.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Cobalt (Co)</td>
                                    <td>≤ 2.5</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese (Mn)</td>
                                    <td>≤ 0.8</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon (Si)</td>
                                    <td>≤ 0.8</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Aluminum (Al)</td>
                                    <td>≤ 0.5</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon (C)</td>
                                    <td>≤ 0.03</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Boron (B)</td>
                                    <td>≤ 0.006</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Copper (Cu)</td>
                                    <td>≤ 0.5</td>
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
                <h2 class="fw-bold" style="color:#174268;">Technical Composition     of HAYNES 242®</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                     <h3 class="text-center mb-3" style="color: #db7227;">Physical Properties of HAYNES 242®
                    </h3>
                    <div class="table-responsive">
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
                                    <td>0.321 lb/in³</td>
                                    <td>8.88 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Range</td>
                                    <td>2410 – 2460 °F</td>
                                    <td>1320 – 1350 °C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Specific Heat</td>
                                    <td>0.10 Btu/lb·°F</td>
                                    <td>418 J/kg·°C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Magnetic Permeability</td>
                                    <td>~1.002</td>
                                    <td>—</td>
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
                        Heat Treatment of HAYNES 242® (UNS N10242)
                    </h4>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Process</th>
                                    <th>Temperature Range</th>
                                    <th>Cooling / Notes</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Solution Annealing</td>
                                    <td>1120–1175 °C (2050–2150 °F)</td>
                                    <td>Rapid air or water quench</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Age Hardening</td>
                                    <td>650–700 °C (1200–1300 °F)</td>
                                    <td>Hold 24 hrs, then air cool</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Stress Relieving</td>
                                    <td>870–900 °C (1600–1650 °F)</td>
                                    <td>Slow cool</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Weld Annealing</td>
                                    <td>1120 °C (2050 °F)</td>
                                    <td>Restores corrosion resistance</td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="mt-3 text-center">
                            📌 HAYNES 242® develops maximum strength through precipitation of ordered Ni₂(Mo,Cr) particles
                            during aging.
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
                    Mechanical Properties of HAYNES 242®
                </h2>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Property</th>
                            <th>Tubing (Annealed)</th>
                            <th>Tubing (Cold Drawn)</th>
                            <th>Bar (Aged)</th>
                            <th>Plate (Aged)</th>
                            <th>Sheet (CW*)</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="t-row">
                            <td>Tensile Strength (MPa)</td>
                            <td>724</td>
                            <td>993</td>
                            <td>1290</td>
                            <td>1290</td>
                            <td>1034 – 1500</td>
                        </tr>
                        <tr class="t-row">
                            <td>Yield Strength (0.2%) MPa</td>
                            <td>—</td>
                            <td>717</td>
                            <td>845</td>
                            <td>845</td>
                            <td>965</td>
                        </tr>
                        <tr class="t-row">
                            <td>Elongation (%)</td>
                            <td>—</td>
                            <td>15 – 20</td>
                            <td>33.7</td>
                            <td>33.7</td>
                            <td>8</td>
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
                <h2>Available Forms & Size Range – HAYNES 242®</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
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
                                <td>6 mm – 200 mm</td>
                            </tr>
                            <tr class="t-row">
                                <td>Sheets & Plates</td>
                                <td>0.5 – 50 mm; Width up to 2000 mm</td>
                            </tr>
                            <tr class="t-row">
                                <td>Coils & Strips</td>
                                <td>0.1 – 6 mm</td>
                            </tr>
                            <tr class="t-row">
                                <td>Pipes & Tubes</td>
                                <td>OD 6 – 219 mm, WT 1 – 20 mm</td>
                            </tr>
                            <tr class="t-row">
                                <td>Wire & Welding Rods</td>
                                <td>0.8 – 6 mm</td>
                            </tr>
                            <tr class="t-row">
                                <td>Forged Components</td>
                                <td>As per customer drawing</td>
                            </tr>
                            <tr class="t-row">
                                <td>Fittings & Flanges</td>
                                <td>All ASME classes</td>
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
                <h2>Equivalent Grades of HAYNES 242®</h2>
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
                            <td>N10242</td>
                        </tr>
                        <tr class="t-row">
                            <td>W.Nr.</td>
                            <td>2.4618</td>
                        </tr>
                        <tr class="t-row">
                            <td>ASTM</td>
                            <td>B435, B572, B619, B622, B626</td>
                        </tr>
                        <tr class="t-row">
                            <td>ASME</td>
                            <td>SB435, SB572, SB619, SB622, SB626</td>
                        </tr>
                        <tr class="t-row">
                            <td>ISO</td>
                            <td>NiMoCr Alloy</td>
                        </tr>
                        <tr class="t-row">
                            <td>Trade Name</td>
                            <td>Haynes® 242®</td>
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
                <h2>Products in Haynes Superalloys 242</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Haynes Superalloys 242</strong> is a high-performance alloy, conforming
                        to
                        aerospace and industrial standards, and supplied in a variety of forms:
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
                        Haynes Superalloys 242 products are produced to the following global standards:
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
                        <h5>Exceptional high-temperature strength up to 705 °C (1300 °F)</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5g>Lowest thermal expansion among comparable superalloys</h5g>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Outstanding oxidation resistance up to ~815 °C (1500 °F)</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>High fatigue and creep resistance</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Good formability and weldability, including in age‑hardened condition</h5>
                    </div>
                </div>
                {{-- <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Economical compared to other titanium grades with higher alloy content</h5>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>


    <section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Haynes Superalloys 242</h2>
                <p class="text-center pb-3"><strong class="text-dark">Haynes Superalloys 242</strong> is ideal for
                    critical applications requiring simultaneous dimensional stability, mechanical strength, and corrosion
                    resistance:
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Aerospace and Gas Turbines</h5>
                        <p>Seal/containment rings, ducting, fasteners, casings, fuel nozzles</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Chemical & Petrochemical Processing</h5>
                        <p>HF/fluorine-resistant components, extrusion screws, reactors</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Industrial Furnaces and Heat Treating</h5>
                        <p>Heat exchangers, press tooling, furnace parts</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Nuclear & Specialty Energy Environments</h5>
                        <p>Salt-furnace hardware, controlled expansion components</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Power Generation</h5>
                        <p>Boiler superheaters, gas turbine components</p>
                    </div>
                </div>

                {{-- <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Medical and Pharmaceutical Equipment</h5>
                        <p>Favored for surgical tools, implants, and cleanroom processing systems because of its purity and
                            biocompatibility.</p>
                    </div>
                </div> --}}

                {{-- <div class="col-md-6 col-lg-4">
                <div class="application-card">
                     <div class="application-icon"><i class="bi bi-strategies"></i></div>
                    <h5>Why It Works</h5>
                    <p><strong>HASTELLOY C276’s</strong> combination of corrosion resistance, weldability, and mechanical durability makes it ideal for mission-critical applications where long-term performance is non-negotiable.</p>
                </div>
            </div> --}}
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
                        <h5>Deep expertise in exotic, high-performance alloys</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Global supply chain for aerospace/industrial-grade stock</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Custom machining, age treatment, and fabrication capabilities</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Products certified to ASTM/ASME/NACE specifications</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>ISO 9001 quality assurance with material traceability</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="price" class="sec-padd-top sec-padd-bottom bg-light py-5">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h2>Haynes 242® Price Per Kg in India</h2>
            </div>

            <p class="text-center fs-5">
                <strong>Typical Range:</strong> ₹4,500 – ₹12,000 per kg
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
                                <h4>What is Haynes 242 and why is it important in high-temperature applications?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Haynes 242 (UNS N10242) is an age-hardenable nickel-molybdenum-chromium alloy that
                                    combines excellent high-temperature strength with very low thermal expansion. It is
                                    widely used in aerospace, chemical, and power generation industries because it provides
                                    outstanding dimensional stability, fatigue resistance, and oxidation resistance up to
                                    815 °C (1500 °F), making it ideal for critical operations under extreme conditions.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the key properties of Haynes 242 alloy?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Haynes 242 offers a unique combination of properties including exceptional strength at
                                    elevated temperatures, the lowest thermal expansion among comparable superalloys, high
                                    resistance to oxidation, and excellent fatigue and creep performance. It has a tensile
                                    strength ranging from 105 to 218 ksi depending on form, with yield strength up to 140
                                    ksi, and maintains structural stability up to 705 °C (1300 °F). Its weldability and
                                    formability, even in the age-hardened condition, make it a versatile alloy for demanding
                                    applications.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Which industries and applications commonly use Haynes 242?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Haynes 242 is widely used in aerospace and gas turbines for seal rings, ducting, fuel
                                    nozzles, and containment casings. In chemical and petrochemical industries, it is used
                                    for HF and fluorine resistant components, reactors, and extrusion screws. It also finds
                                    applications in industrial furnaces for press tooling, heat exchangers, and furnace
                                    parts, in nuclear and specialty energy sectors for controlled expansion components, and
                                    in power generation for boiler superheaters and gas turbine hardware.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What types of Haynes 242 products are supplied by MOKSH TUBES & FITTINGS LLP?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP supplies a wide range of Haynes 242 products including
                                    seamless and welded pipes, tubes, sheets, plates, coils, bars, flanges, pipe fittings,
                                    fasteners, welding rods, wire mesh, and custom-fabricated components. All products
                                    conform to ASTM, ASME, NACE, and international standards, ensuring that industries
                                    receive high-quality materials designed for long service life and superior performance.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose MOKSH TUBES & FITTINGS LLP for Haynes 242 materials?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP is a trusted manufacturer and global supplier of Haynes 242,
                                    offering deep expertise in exotic alloys, a strong international supply chain, and ISO
                                    9001 certified quality assurance. The company provides customized machining, age
                                    treatment, and fabrication services while ensuring timely delivery and full material
                                    traceability. With technical support from selection to fabrication, MOKSH TUBES &
                                    FITTINGS LLP is a reliable partner for industries operating in extreme environments.
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
                    <strong>Moksh Tubes & Fittings LLP</strong> delivers premium alloys, expert advice, and swift, reliable
                    service—request your quote today!
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
                "name": "What is Haynes 242 and why is it important in high-temperature applications?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Haynes 242 (UNS N10242) is an age-hardenable nickel-molybdenum-chromium alloy that combines excellent high-temperature strength with very low thermal expansion. It is widely used in aerospace, chemical, and power generation industries because it provides outstanding dimensional stability, fatigue resistance, and oxidation resistance up to 815 °C (1500 °F), making it ideal for critical operations under extreme conditions."
                }
                },
                {
                "@type": "Question",
                "name": "What are the key properties of Haynes 242 alloy?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Haynes 242 offers a unique combination of properties including exceptional strength at elevated temperatures, the lowest thermal expansion among comparable superalloys, high resistance to oxidation, and excellent fatigue and creep performance. It has a tensile strength ranging from 105 to 218 ksi depending on form, with yield strength up to 140 ksi, and maintains structural stability up to 705 °C (1300 °F). Its weldability and formability, even in the age-hardened condition, make it a versatile alloy for demanding applications."
                }
                },
                {
                "@type": "Question",
                "name": "Which industries and applications commonly use Haynes 242?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Haynes 242 is widely used in aerospace and gas turbines for seal rings, ducting, fuel nozzles, and containment casings. In chemical and petrochemical industries, it is used for HF and fluorine resistant components, reactors, and extrusion screws. It also finds applications in industrial furnaces for press tooling, heat exchangers, and furnace parts, in nuclear and specialty energy sectors for controlled expansion components, and in power generation for boiler superheaters and gas turbine hardware."
                }
                },
                {
                "@type": "Question",
                "name": "What types of Haynes 242 products are supplied by MOKSH TUBES & FITTINGS LLP?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "MOKSH TUBES & FITTINGS LLP supplies a wide range of Haynes 242 products including seamless and welded pipes, tubes, sheets, plates, coils, bars, flanges, pipe fittings, fasteners, welding rods, wire mesh, and custom-fabricated components. All products conform to ASTM, ASME, NACE, and international standards, ensuring that industries receive high-quality materials designed for long service life and superior performance."
                }
                },
                {
                "@type": "Question",
                "name": "Why choose MOKSH TUBES & FITTINGS LLP for Haynes 242 materials?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "MOKSH TUBES & FITTINGS LLP is a trusted manufacturer and global supplier of Haynes 242, offering deep expertise in exotic alloys, a strong international supply chain, and ISO 9001 certified quality assurance. The company provides customized machining, age treatment, and fabrication services while ensuring timely delivery and full material traceability. With technical support from selection to fabrication, MOKSH TUBES & FITTINGS LLP is a reliable partner for industries operating in extreme environments."
                }
                }
            ]
            }

        @endverbatim
    </script>
@endsection
