@extends('layouts.master')

@section('title', 'Monel R405 Alloy – Premium Strength & Machinability') <!-- 53 chars -->
@section('meta_description',
    'Monel R405 Alloy offers superior corrosion resistance, high strength, and exceptional
    machinability for marine, chemical, and industrial applications.')
@section('meta_keywords',
    'Monel R405, Monel R405 Alloy, Nickel-Copper Alloy, High Strength Alloy, Corrosion Resistant
    Alloy, Marine Industry Alloys, Chemical Processing Alloys, Oilfield Alloys, Machinable Nickel Alloys, Durable Nickel
    Alloys')
@section('og_image', asset('assets/images/monel/Monel-R405.webp'))
@section('og_type', 'article')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/monel/Monel-R405.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Monel R405 <br> High Strength & Machinable Alloy</h1>

                    <!-- Add your extra content here -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        MONEL® R405 (UNS N04405) is a nickel-copper alloy designed for superior corrosion resistance in
                        marine, chemical, and industrial environments. Below is the complete datasheet including
                        composition, properties, heat treatment, and applications.

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
                Introduction To Monel R405 / Alloy R405 / UNS N04405 </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/monel/Monel-R405.webp') }}" alt="Monel K500"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a leading manufacturer,
                            supplier, exporter, importer, and stockist of <a href="{{ route('materials.monel') }}">MONEL
                                R405</a></a> (UNS N04405) products, including <a
                                href="{{ route('products.pipes-tubes') }}">Pipes
                                & Tubes</a>, Sheets & Plates, Coils, Round Bars, Forgings, Pipe Fittings, Flanges,
                            Fasteners,
                            Welding Rods, and Custom-Machined Components.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">MONEL R405</strong class="text-black"> is a <a
                                href="{{ route('materials.nickel-Based-Superalloys') }}">nickel</a> copper <a
                                href="{{ route('materials.hastelloy') }}">alloy</a>
                            similar to Monel 400, but it is specially modified with controlled sulfur content to improve its
                            machinability. This grade is known for excellent resistance to seawater, hydrofluoric acid,
                            sulfuric acid, alkalis, and high-temperature steam. R405 retains high strength and toughness
                            across a wide temperature range and is particularly suitable for automatic screw machines and
                            precision-machined components in marine and chemical environments.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Monel R405 Datasheet</h3>
            <p class="mb-3">
                Get the complete Monel R405 datasheet with chemical composition,
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
                <h2>MONEL® K500 Specifications (UNS N05500)</h2>
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
                                    <td>MONEL® K500 / Alloy K500 / UNS N05500</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Material Type</td>
                                    <td>Precipitation-Hardened Nickel–Copper Alloy</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Typical Chemical Composition</td>
                                    <td>Ni ≥63%, Cu 27–33%, Al 2.3–3.15%, Ti 0.35–0.85%</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Available Conditions</td>
                                    <td>Annealed, Solution Treated, Cold Worked</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Heat Treatment</td>
                                    <td>Aging / Precipitation Hardening, Stress Relieving</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Testing Offered</td>
                                    <td>Tensile, Hardness, Chemical, Corrosion, NDT on request</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Certification</td>
                                    <td>EN 10204 3.1 / 3.2 (Mill Test Certificate)</td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="mt-3 text-center">
                            👉 Aluminum and titanium additions enable age-hardening, giving MONEL® K500 its exceptionally
                            high strength.
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
                <h2>Chemical Composition of MONEL® K500</h2>
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
                                    <td>63.0 min</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Copper (Cu)</td>
                                    <td>27.0 – 33.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Aluminum (Al)</td>
                                    <td>2.3 – 3.15</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Titanium (Ti)</td>
                                    <td>0.35 – 0.85</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron (Fe)</td>
                                    <td>2.0 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese (Mn)</td>
                                    <td>1.5 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon (Si)</td>
                                    <td>0.5 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon (C)</td>
                                    <td>0.25 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sulfur (S)</td>
                                    <td>0.01 max</td>
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
                    Technical Composition of MONEL® K500
                </h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h3 class="text-center mb-3" style="color: #db7227;"> Physical Properties of MONEL® K500
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
                                    <td>8.44 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Range</td>
                                    <td>1315 – 1350 °C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elastic Modulus (Tension)</td>
                                    <td>179 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Modulus of Rigidity</td>
                                    <td>~65.5 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Poisson’s Ratio</td>
                                    <td>0.32</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Magnetic Properties</td>
                                    <td>Non-Magnetic</td>
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
                        Heat Treatment of MONEL® K500
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
                                    <td>Solution Treatment</td>
                                    <td>980 – 1010 °C</td>
                                    <td>Water quench or air cool</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Aging / Precipitation Hardening</td>
                                    <td>675 – 705 °C</td>
                                    <td>Air cool for maximum strength</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Stress Relieving</td>
                                    <td>540 – 650 °C</td>
                                    <td>Hold 1–2 hours, air cool</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Softening (Optional)</td>
                                    <td>870 – 980 °C</td>
                                    <td>Furnace cool</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Hot Working Prep</td>
                                    <td>870 – 980 °C</td>
                                    <td>Uniform heating before forming</td>
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
                    Mechanical Properties of MONEL® K500
                </h2>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Product Form</th>
                            <th>Tensile Strength</th>
                            <th>Yield Strength (0.2%)</th>
                            <th>Elongation</th>
                            <th>Hardness</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="t-row">
                            <td>Rod & Bar (Annealed)</td>
                            <td>345 – 552 MPa</td>
                            <td>207 – 345 MPa</td>
                            <td>60 – 75%</td>
                            <td>10 – 20 HRB</td>
                        </tr>
                        <tr class="t-row">
                            <td>Cold-Drawn Rod</td>
                            <td>379 – 586 MPa</td>
                            <td>241 – 379 MPa</td>
                            <td>55 – 70%</td>
                            <td>15 – 25 HRB</td>
                        </tr>
                        <tr class="t-row">
                            <td>Strip (Soft Temper)</td>
                            <td>414 – 552 MPa</td>
                            <td>276 – 414 MPa</td>
                            <td>80 – 95%</td>
                            <td>≤20 HRB</td>
                        </tr>
                        <tr class="t-row">
                            <td>Tube & Pipe</td>
                            <td>414 – 621 MPa</td>
                            <td>276 – 448 MPa</td>
                            <td>70 – 95%</td>
                            <td>12 – 22 HRB</td>
                        </tr>
                        <tr class="t-row">
                            <td>Wire (Annealed)</td>
                            <td>379 – 517 MPa</td>
                            <td>207 – 345 MPa</td>
                            <td>80 – 97%</td>
                            <td>—</td>
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
                <h2>Available Forms & Size Range – MONEL® K500</h2>
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
                            <td>10 mm – 350 mm</td>
                        </tr>
                        <tr class="t-row">
                            <td>Flat, Square & Hex Bars</td>
                            <td>Custom sizes up to 250 mm</td>
                        </tr>
                        <tr class="t-row">
                            <td>Sheets & Plates</td>
                            <td>1.5 – 100 mm (Width 600 – 2500 mm)</td>
                        </tr>
                        <tr class="t-row">
                            <td>Coils & Strips</td>
                            <td>0.3 – 8 mm</td>
                        </tr>
                        <tr class="t-row">
                            <td>Seamless & Welded Pipes / Tubes</td>
                            <td>OD 6 – 273 mm, WT 1 – 25 mm</td>
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
                <h2>International Standards & Equivalent Grades – MONEL® K500</h2>
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
                            <td>N05500</td>
                        </tr>
                        <tr class="t-row">
                            <td>W.Nr (DIN)</td>
                            <td>2.4376</td>
                        </tr>
                        <tr class="t-row">
                            <td>ASTM</td>
                            <td>B127, B164, B165, B564, B725</td>
                        </tr>
                        <tr class="t-row">
                            <td>EN</td>
                            <td>NiCu30AlTi</td>
                        </tr>
                        <tr class="t-row">
                            <td>BS</td>
                            <td>NA 16</td>
                        </tr>
                        <tr class="t-row">
                            <td>JIS</td>
                            <td>NW 5500</td>
                        </tr>
                        <tr class="t-row">
                            <td>GOST</td>
                            <td>МНЖКмц 28-2.5-1.5</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
s


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
                <h2>Products in Monel R405</h2>
            </div>

            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">MONEL Alloy R-405 </strong>, (UNS N04405) is a nickel-copper alloy known
                        for its excellent machinability and corrosion resistance. It is typically supplied in rod and bar
                        form, with standard sizes readily available from stock. For specific applications, wire and
                        specialty shapes can also be sourced through custom converters.
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
                        This alloy meets several recognized industry standards, including:
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
            <div class="row  mb-4 mt-4" style="text-align: justify;">
                <div class="">
                    <p class="fs-6">
                        MONEL R-405 is a reliable choice for applications requiring both strength and corrosion resistance,
                        particularly where precision machining is essential.</p>
                </div>
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
                        <h5>Improved machinability due to controlled sulfur content</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Excellent corrosion resistance in marine and chemical environments</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>High strength and toughness at both cryogenic and elevated temperatures</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Good resistance to hydrofluoric acid and alkaline environments</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Cost-effective for precision machining on automated equipment</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Monel R405</h2>
                <p class="text-center pb-3"><strong class="text-dark">Monel R405</strong> is a specialty nickel-copper
                    alloy developed for exceptional machinability while preserving the core corrosion-resistant properties
                    of Monel 400. Its sulfur-enhanced chemistry allows for high-speed machining, making it an ideal choice
                    for components that require tight tolerances, dimensional stability, and long service life. Below are
                    the key applications where Monel R405 excels:
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Automatic Screw Machine Components</h5>
                        <p>Monel R405 is the preferred material for high-volume production of precision parts on automatic
                            and CNC screw machines. Typical components include threaded fittings, shafts, bolts, valve
                            stems, nuts, connectors, pump impellers, and inserts.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Chemical & Petrochemical Processing</h5>
                        <p>Widely used for equipment handling hydrofluoric acid, sulfuric acid, alkalis, and other corrosive
                            media. Common applications include process pumps, mixers, heat exchangers, and valve trim
                            components.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Oil & Gas Industry</h5>
                        <p>Monel R405 is ideal for parts used in sour gas (H₂S) environments and high-pressure systems.
                            Applications include drill collars, pump shafts, control valves, downhole tools, and
                            non-magnetic components for directional drilling.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Marine and Offshore Engineering</h5>
                        <p>Used in harsh saltwater and subsea environments. R405 is trusted for shaft sleeves, seawater
                            valves, marine hardware, fasteners, and corrosion-prone mechanical assemblies.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Nuclear and Power Generation</h5>
                        <p>Selected for its corrosion resistance and mechanical reliability in turbine systems, steam
                            systems, and auxiliary nuclear components where radiation and chemical exposure are a concern.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Electrical, Instrumentation & Sensor Housings</h5>
                        <p>Thanks to its excellent conductivity and machinability, R405 is used in terminals, switchgear
                            parts, pressure sensor housings, and grounding elements in corrosive industrial setups.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-capsule"></i></div>
                        <h5>Defense & Aerospace Applications</h5>
                        <p>Employed for precision-machined fittings, lock nuts, spring components, and fasteners used in
                            naval equipment, submarines, and aircraft exposed to corrosive and extreme mechanical
                            conditions.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-capsule"></i></div>
                        <h5>Pump & Valve Manufacturing</h5>
                        <p>Preferred for shafts, impellers, seats, bushings, bearings, and guides due to its strength,
                            anti-galling characteristics, and long-term corrosion resistance in service.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-capsule"></i></div>
                        <h5>Food & Pharmaceutical Equipment</h5>
                        <p>Where non-reactive, corrosion-resistant, and hygienic materials are required for valves,
                            connectors, and transfer components exposed to mild acids or clean-in-place systems.</p>
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
            <p class="text-center pb-3 my-4"><strong class="text-dark">Monel R405</strong> combines machinability and
                corrosion resistance like few other materials, making it the optimal choice for mission-critical components
                in high-performance industries.

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
                        <h5>Specialized stockist and supplier of Monel R405 bars and components</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Precision machining support for screw machine-grade products</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Quick delivery and global logistics support</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>ISO 9001:2015 certified with traceability and mill test reports</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Customized solutions for engineering, marine, and petrochemical sectors</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="price" class="sec-padd-top sec-padd-bottom bg-light py-5">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h2>MONEL R405 Price (India)</h2>
            </div>

            <p class="text-center fs-5">
                <strong>Typical Range:</strong> ₹2,400 – ₹3,800 per kg
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
                                <h4>What is Monel R405 and how does it differ from Monel 400?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Monel R405 (UNS N04405) is a nickel-copper alloy that offers the same corrosion
                                    resistance and mechanical strength as Monel 400, but with added sulfur content to
                                    improve machinability. This modification makes Monel R405 particularly suitable for
                                    high-speed automatic screw machines, while still retaining excellent resistance to
                                    seawater, acids, alkalis, and high-temperature steam.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What types of Monel R405 products are available at Moksh Tubes & Fittings LLP?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Moksh Tubes & Fittings LLP supplies a wide range of Monel R405 products including
                                    seamless and welded pipes, tubes, sheets, plates, coils, round bars, pipe fittings,
                                    flanges, fasteners, welding rods, forgings, and custom-machined components. These
                                    products are available in both standard and tailor-made dimensions, ensuring reliable
                                    performance in marine, oil and gas, chemical, aerospace, and power generation
                                    industries.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the key benefits of using Monel R405 in industrial applications?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    The main advantages of Monel R405 include excellent machinability due to controlled
                                    sulfur content, outstanding resistance to seawater and corrosive chemicals, high
                                    strength and toughness at both cryogenic and elevated temperatures, and suitability for
                                    automated machining processes. These properties make Monel R405 a cost effective and
                                    long lasting solution for industries requiring precision components and reliable
                                    performance under extreme conditions.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Which industries commonly use Monel R405 alloy products?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Monel R405 is widely used in industries such as marine and offshore engineering, oil and
                                    gas exploration, chemical and petrochemical processing, power generation, aerospace,
                                    defense, and medical equipment manufacturing. Typical applications include pump shafts,
                                    valve stems, fasteners, drill collars, screw machine parts, impellers, turbine
                                    components, and electrical sensor housings where machinability and corrosion resistance
                                    are equally important.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose Moksh Tubes & Fittings LLP for Monel R405 supply?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Moksh Tubes & Fittings LLP is a leading manufacturer, supplier, and global exporter of
                                    Monel R405 products, trusted for its high quality raw materials, precision machining,
                                    and customized solutions. With ISO certified processes, quick delivery schedules, and
                                    strong global logistics, the company ensures reliable supply for critical industries.
                                    Its expertise in Monel alloys and commitment to quality assurance make it the preferred
                                    partner for clients worldwide.
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
                    <strong>Moksh Tubes & Fittings LLP</strong> Your source for high-performance Monel materials.
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
                        "name": "What is Monel R405 and how does it differ from Monel 400?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Monel R405 (UNS N04405) is a nickel-copper alloy that offers the same corrosion resistance and mechanical strength as Monel 400, but with added sulfur content to improve machinability. This modification makes Monel R405 particularly suitable for high-speed automatic screw machines, while still retaining excellent resistance to seawater, acids, alkalis, and high-temperature steam."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "What types of Monel R405 products are available at Moksh Tubes & Fittings LLP?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Moksh Tubes & Fittings LLP supplies a wide range of Monel R405 products including seamless and welded pipes, tubes, sheets, plates, coils, round bars, pipe fittings, flanges, fasteners, welding rods, forgings, and custom-machined components. These products are available in both standard and tailor-made dimensions, ensuring reliable performance in marine, oil and gas, chemical, aerospace, and power generation industries."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "What are the key benefits of using Monel R405 in industrial applications?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "The main advantages of Monel R405 include excellent machinability due to controlled sulfur content, outstanding resistance to seawater and corrosive chemicals, high strength and toughness at both cryogenic and elevated temperatures, and suitability for automated machining processes. These properties make Monel R405 a cost effective and long lasting solution for industries requiring precision components and reliable performance under extreme conditions."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Which industries commonly use Monel R405 alloy products?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Monel R405 is widely used in industries such as marine and offshore engineering, oil and gas exploration, chemical and petrochemical processing, power generation, aerospace, defense, and medical equipment manufacturing. Typical applications include pump shafts, valve stems, fasteners, drill collars, screw machine parts, impellers, turbine components, and electrical sensor housings where machinability and corrosion resistance are equally important."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Why choose Moksh Tubes & Fittings LLP for Monel R405 supply?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Moksh Tubes & Fittings LLP is a leading manufacturer, supplier, and global exporter of Monel R405 products, trusted for its high quality raw materials, precision machining, and customized solutions. With ISO certified processes, quick delivery schedules, and strong global logistics, the company ensures reliable supply for critical industries. Its expertise in Monel alloys and commitment to quality assurance make it the preferred partner for clients worldwide."
                        }
                    }
                ]
            }

        @endverbatim
    </script>
@endsection
