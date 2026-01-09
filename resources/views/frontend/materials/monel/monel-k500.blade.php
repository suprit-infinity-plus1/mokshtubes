@extends('layouts.master')

@section('title', 'Monel K500 Alloy – Ultimate Strength & Corrosion Shield') <!-- 53 chars -->
@section('meta_description',
    'Monel K500 offers extreme strength and corrosion resistance—engineered for peak
    performance in marine, chemical, and oilfield applications.')
@section('meta_keywords',
    'Monel K500, Monel K500 Alloy, Nickel-Copper Alloy, High Strength Alloy, Corrosion Resistant
    Alloy, Marine Industry Alloys, Chemical Processing Alloys, Oilfield Alloys, Impact Resistant Alloys, Durable Nickel
    Alloys')
@section('og_image', asset('assets/images/monel/Monel-K500.webp'))
@section('og_type', 'article')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/monel/Monel-K500.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Monel K500 <br> High-Strength & Corrosion Resistant Alloy</h1>

                    <!-- Add your extra content here -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        MONEL® K500 (Alloy K500 / UNS N05500) is a high-strength, precipitation-hardened nickel-copper alloy
                        offering excellent corrosion resistance, durability, and toughness, making it ideal for marine,
                        chemical, and industrial applications.

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
                Introduction To Monel K500 / Alloy K500 / UNS N05500 </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/monel/Monel-K500.webp') }}" alt="Monel K500"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong>LLP is a manufacturer, supplier,
                            exporter, importer and stockist of a comprehensive range of MONEL K500 (UNS N05500) <a
                                href="{{ route('products') }}">products</a>
                            including <a href="{{ route('products.pipes-tubes') }}">Pipes & Tubes</a>, Pipe Fittings,
                            Flanges, Fasteners, Sheets, Plates, Coils, Bars, Wires,
                            Welding Rods, and other Custom and Hard to Find <strong class="text-black">MONEL K500 </strong>
                            Components.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">MONEL K500</strong class="text-black"> is a precipitation-hardenable
                            nickel copper <a href="{{ route('materials.hastelloy') }}">alloy</a> that combines the excellent
                            corrosion resistance of MONEL 400 with added
                            strength and hardness due to its <a
                                href="{{ route('materials.aluminium-Alloys') }}">aluminum</a> and <a
                                href="{{ route('materials.titanium') }}">titanium</a> content. It retains high mechanical
                            properties and is particularly resistant to stress corrosion cracking and pitting in marine and
                            chemical environments. MONEL K500 is non-magnetic, even at sub-zero temperatures, and maintains
                            dimensional stability in harsh conditions, making it ideal for high-performance,
                            high-reliability applications.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Monel K500 Datasheet</h3>
            <p class="mb-3">
                Get the complete Monel K500 datasheet with chemical composition,
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
                    <h3 class="text-center mb-3" style="color: #db7227;">Physical Properties of MONEL® K500
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
                <h2>Products in Monel K500</h2>
            </div>

            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">MOKSH TUBES & FITTINGS LLP</strong>, we proudly supply MONEL® Alloy K-500
                        (UNS N05500 / Werkstoff Nr. 2.4375) — a premium nickel-copper alloy engineered for exceptional
                        strength, corrosion resistance, and long-term performance.
                        This alloy is approved under NACE MR-01-75, making it a trusted material for critical operations in
                        the oil and gas industry, as well as in marine, chemical, and industrial applications.
                    </p>
                </div>
            </div>

            <!-- Horizontal Styled Product List -->
            <div class="row justify-content-center mb-5">
                <div class="col-lg-10">
                    <div class="p-4 bg-white rounded shadow-sm border-start border-4" style="border-color: #db7227;">
                        <div class="row">
                            @foreach ($products as $product)
                                <div class="col-12 col-sm-6 mb-2 d-flex justify-content-start align-items-start">
                                    <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                    <span>{{ $product['name'] }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-4 mt-4" style="text-align: justify;">
                    <div class="col-lg-10">
                        <p class="fs-6">
                            Whether you're working in high-pressure, high-temperature, or corrosive environments, we
                            deliver MONEL K-500 in stock sizes or tailor-made dimensions to meet your specific
                            requirements.</p>
                    </div>
                </div>

            </div>

            <!-- Emphasized Line -->
            <div class="row justify-content-center mb-3">
                <div class="col-lg-10">
                    <p class="fw-bold fs-5 text-center my-4" style="color: #174268;">
                        We offer Monel K-500 in a wide variety of standard and custom mill forms, including:
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
                <div class="col-lg-10">
                    <p class="fs-6">
                        Whether you're working in high-pressure, high-temperature, or corrosive environments, we deliver
                        MONEL K-500 in stock sizes or tailor-made dimensions to meet your specific requirements.</p>
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
                        <h5>Excellent corrosion resistance in seawater and chemical environments</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Superior strength and hardness via precipitation hardening</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Non-magnetic at sub-zero temperatures</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>High resistance to stress corrosion cracking and erosion</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Long service life and low maintenance in tough operating conditions</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Monel K500</h2>
                <p class="text-center pb-3"><strong class="text-dark">Monel K500</strong> is widely used in demanding
                    environments that require a combination of high strength, toughness, and outstanding resistance to
                    corrosion, particularly in marine and chemical settings. Its ability to withstand high pressure,
                    corrosive media, and severe mechanical stress makes it suitable for:
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Marine and Offshore Engineering</h5>
                        <p>Ideal for propeller shafts, pump shafts, seawater valves, fasteners, and marine hardware due to
                            excellent resistance to saltwater corrosion and biofouling.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Oil and Gas Industry</h5>
                        <p>Utilized in downhole equipment, non-magnetic drill collars, valve components, and oil well tools
                            exposed to sour gas (H₂S) and high-pressure environments.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Chemical Processing</h5>
                        <p>Applied in components such as impellers, heat exchangers, pumps, and tanks that are exposed to
                            sulfuric, hydrofluoric, and hydrochloric acids.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Aerospace and Defense</h5>
                        <p>Used for structural components, fasteners, springs, and actuators requiring excellent mechanical
                            strength and resistance to corrosive atmospheres.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Power Generation</h5>
                        <p>Deployed in turbine blades, bolting, and condensers where high-temperature resistance and
                            corrosion protection are essential.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Pump and Valve Manufacturing</h5>
                        <p>Preferred for shafting, seats, and bearings where wear resistance and long-term stability are
                            critical.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-capsule"></i></div>
                        <h5>Medical and Electronic Industries</h5>
                        <p>Suitable for precision components requiring non-magnetic properties, corrosion resistance, and
                            biocompatibility.</p>
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
            <p class="text-center pb-3 my-4"><strong class="text-dark">Monel K500’s</strong> precipitation-hardened
                structure delivers unmatched performance in mechanical strength and resistance to both oxidizing and
                reducing environments—making it the alloy of choice for mission-critical applications.

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
                        <h5>Specialists in MONEL K500 stock and custom fabrication</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Strong sourcing network and certified raw materials</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Rapid turnaround and global export capabilities</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Unmatched quality assurance and technical expertise</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Trusted by industries with mission-critical demands</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="price" class="sec-padd-top sec-padd-bottom bg-light py-5">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h2>MONEL K500 Price (India)</h2>
            </div>

            <p class="text-center fs-5">
                <strong>Typical Range:</strong> ₹2,800 – ₹4,800 per kg
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
                                <h4>What is Monel K500 and how does it differ from Monel 400?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Monel K500 (UNS N05500) is a precipitation-hardenable nickel-copper alloy that combines
                                    the corrosion resistance of Monel 400 with enhanced strength and hardness provided by
                                    aluminum and titanium additions. Unlike Monel 400, Monel K500 offers higher mechanical
                                    strength, excellent resistance to stress corrosion cracking, and better performance in
                                    high-pressure and high temperature environments, making it ideal for demanding
                                    industrial applications.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What types of Monel K500 products are supplied by Moksh Tubes & Fittings LLP?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Moksh Tubes & Fittings LLP supplies a comprehensive range of Monel K500 products
                                    including seamless and welded pipes, tubes, pipe fittings, flanges, fasteners, sheets,
                                    plates, coils, bars, wires, welding rods, and custom-fabricated components. All products
                                    are available in both standard and custom dimensions to meet the requirements of marine,
                                    oil and gas, chemical, and aerospace industries.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the key advantages of using Monel K500 in industrial applications?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    The main advantages of Monel K500 include superior resistance to seawater and chemical
                                    corrosion, non-magnetic behavior even at sub-zero temperatures, high resistance to
                                    stress corrosion cracking and erosion, and long-term durability in harsh operating
                                    conditions. Its combination of strength, toughness, and corrosion resistance makes it an
                                    alloy of choice for mission critical applications in offshore, marine, and petrochemical
                                    industries.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Which industries commonly use Monel K500 products?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Monel K500 is widely used in marine and offshore engineering, oil and gas exploration,
                                    chemical processing, aerospace, defense, power generation, and pump and valve
                                    manufacturing. Applications include propeller shafts, pump shafts, non-magnetic drill
                                    collars, valve components, heat exchangers, turbine blades, springs, fasteners, and
                                    medical equipment where reliability under extreme conditions is essential.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose Moksh Tubes & Fittings LLP for Monel K500 supply?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Moksh Tubes & Fittings LLP is a trusted manufacturer, supplier, and global exporter of
                                    Monel K500 products with proven expertise in nickel alloys and high performance
                                    materials. The company ensures top quality raw materials, precision engineering,
                                    customized fabrication, rapid delivery, and strict quality assurance, making it the
                                    preferred choice for clients requiring durable and dependable Monel K500 solutions.
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
                    <strong>Moksh Tubes & Fittings LLP</strong> your partner in performance-grade MONEL K500 materials.
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
                        "name": "What is Monel K500 and how does it differ from Monel 400?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Monel K500 (UNS N05500) is a precipitation-hardenable nickel-copper alloy that combines the corrosion resistance of Monel 400 with enhanced strength and hardness provided by aluminum and titanium additions. Unlike Monel 400, Monel K500 offers higher mechanical strength, excellent resistance to stress corrosion cracking, and better performance in high-pressure and high temperature environments, making it ideal for demanding industrial applications."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "What types of Monel K500 products are supplied by Moksh Tubes & Fittings LLP?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Moksh Tubes & Fittings LLP supplies a comprehensive range of Monel K500 products including seamless and welded pipes, tubes, pipe fittings, flanges, fasteners, sheets, plates, coils, bars, wires, welding rods, and custom-fabricated components. All products are available in both standard and custom dimensions to meet the requirements of marine, oil and gas, chemical, and aerospace industries."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "What are the key advantages of using Monel K500 in industrial applications?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "The main advantages of Monel K500 include superior resistance to seawater and chemical corrosion, non-magnetic behavior even at sub-zero temperatures, high resistance to stress corrosion cracking and erosion, and long-term durability in harsh operating conditions. Its combination of strength, toughness, and corrosion resistance makes it an alloy of choice for mission critical applications in offshore, marine, and petrochemical industries."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Which industries commonly use Monel K500 products?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Monel K500 is widely used in marine and offshore engineering, oil and gas exploration, chemical processing, aerospace, defense, power generation, and pump and valve manufacturing. Applications include propeller shafts, pump shafts, non-magnetic drill collars, valve components, heat exchangers, turbine blades, springs, fasteners, and medical equipment where reliability under extreme conditions is essential."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Why choose Moksh Tubes & Fittings LLP for Monel K500 supply?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Moksh Tubes & Fittings LLP is a trusted manufacturer, supplier, and global exporter of Monel K500 products with proven expertise in nickel alloys and high performance materials. The company ensures top quality raw materials, precision engineering, customized fabrication, rapid delivery, and strict quality assurance, making it the preferred choice for clients requiring durable and dependable Monel K500 solutions."
                        }
                    }
                ]
            }

        @endverbatim
    </script>
@endsection
