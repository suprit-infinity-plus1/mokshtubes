@extends('layouts.master')

@section('title', 'Aluminium Alloy HE30 (AA6082) | Properties, Composition, Applications & Supplier in India')

@section('meta_description', 'Explore Aluminium Alloy HE30 (AA6082) properties, chemical composition, mechanical properties, heat treatment, applications, equivalent grades, sizes, and datasheet. Moksh Tubes supplies HE30 aluminium in bars, sheets, plates, tubes, and custom sizes worldwide.')

@section('meta_keywords',
    'Aluminium Alloy HE30, Hardened Aluminium Alloy, Aluminium HE30 Pipes, Aluminium HE30 Tubes,
    Aluminium HE30 Sheets, High Strength Aluminium, Corrosion Resistant Aluminium, Heavy Duty Aluminium Alloys, Structural
    Aluminium Alloys, Industrial Aluminium Grades')
@section('og_image', asset('assets/images/aluminium-alloys/aluminium-alloys-he30.webp'))
@section('og_type', 'article')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area"
        style="background-image: url(/assets/images/aluminium-alloys/aluminium-alloys-he30.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Aluminium HE30 <br> Hardened High Strength Aluminium Alloy</h1>

                    <!-- Add your extra content here -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Aluminium Alloy HE30 is a high-strength, heat-treatable 6000-series alloy widely used in aerospace,
                        defense, engineering, and structural applications. Below is the complete datasheet including
                        composition, heat treatment, mechanical properties, applications, and pricing.
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

    <!-- ================= WHY CHOOSE ================= -->
    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Why Choose Aluminium Alloy HE30?</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10 text-justify" style="text-align: justify;">
                    <p class="fs-6 mb-3">
                        <strong>Aluminium Alloy HE30 (AA6082)</strong> is one of the most widely used heat-treatable aluminium alloys for structural and engineering applications. It is valued for its excellent combination of strength, corrosion resistance, weldability, and machinability, making it suitable for a wide range of industrial sectors.
                    </p>
                    <p class="fs-6 mb-3">
                        Compared with many conventional aluminium grades, HE30 provides higher mechanical strength while remaining lightweight. This makes it an excellent choice for components that need to withstand heavy loads without increasing overall weight.
                    </p>
                    <p class="fs-6 mb-3">
                        The alloy performs exceptionally well in structural frameworks, transportation equipment, machinery, bridges, offshore platforms, and engineering components where durability and long service life are essential.
                    </p>
                    <p class="fs-6">
                        Whether you require aluminium HE30 sheets, plates, bars, rods, pipes, tubes, or custom-machined components, this alloy delivers dependable performance across demanding industrial applications.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="overview" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Aluminium HE30 | Product Overview</h2>
            </div>

            <h2 class="fw-semibold text-center mb-5" style="color: #db7227;">
                Introduction To Aluminium HE30
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/aluminium-alloys/aluminium-alloys-he30.webp') }}" alt="Aluminium HE30"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a manufacturer, supplier,
                            exporter, importer, and stockist of<strong class="text-black"> Aluminium Alloy HE30
                                <a href="{{ route('products') }}">products</a></strong> including sheets, plates,
                            bars, rods, and extrusions.
                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">Aluminium HE30</strong> is a high-strength aerospace-grade alloy,
                            part of the 7000 series, primarily alloyed with zinc and magnesium. It offers excellent
                            mechanical properties, including high tensile strength, good fatigue resistance, and moderate
                            corrosion resistance. HE30 is commonly used in aerospace, defense, and other high-performance
                            <a href="{{ route('materials.engineering-Steels') }}">engineering</a> applications where
                            lightweight and strength are critical.
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Alluminium Alloy HE 30 Datasheet</h3>
            <p class="mb-3">
                Get the complete Alluminium Alloy HE 30 datasheet with chemical composition,
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
    {{-- end datasheet --}}



    <!-- ================= ALUMINIUM HE30 SPECIFICATIONS ================= -->
    <section class="sec-padd-top" id="specification">
        <div class="container">
            <div class="section-title center">
                <h2>Aluminium HE30 Specifications (HE30 / AA6082)</h2>
            </div>

            <div class="table-responsive col-lg-8 mx-auto">
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
                            <td>HE30 / AA6082</td>
                        </tr>
                         <tr class="t-row">
                            <td>Type</td>
                            <td>Heat-treatable wrought aluminium alloy</td>
                        </tr>
                         <tr class="t-row">
                            <td>Typical Chemical Composition</td>
                            <td>Zn 5.5–6.5%, Mg 2.0–3.0%, Cu 1.2–2.0%</td>
                        </tr>
                         <tr class="t-row">
                            <td>Conditions</td>
                            <td>O, T4, T5, T6</td>
                        </tr>
                         <tr class="t-row">
                            <td>Heat Treatment</td>
                            <td>Solution Treatment + Artificial Aging</td>
                        </tr>
                         <tr class="t-row">
                            <td>Testing</td>
                            <td>Tensile, Hardness, Chemical, UT (optional)</td>
                        </tr>
                         <tr class="t-row">
                            <td>Certification</td>
                            <td>EN 10204 3.1 / 3.2 Available</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- ================= CHEMICAL COMPOSITION ================= -->
    <section class="sec-padd-top sec-padd-bottom" id="composition">
        <div class="container">
            <div class="section-title center">
                <h2>Chemical Composition – Aluminium Alloy HE30</h2>
            </div>

            <div class="table-responsive col-lg-8 mx-auto">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                         <tr class="t-row">
                            <th>Element</th>
                            <th>Composition (%)</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr class="t-row">
                            <td>Zinc (Zn)</td>
                            <td>5.5 – 6.5</td>
                        </tr>
                         <tr class="t-row">
                            <td>Magnesium (Mg)</td>
                            <td>2.0 – 3.0</td>
                        </tr>
                         <tr class="t-row">
                            <td>Copper (Cu)</td>
                            <td>1.2 – 2.0</td>
                        </tr>
                         <tr class="t-row">
                            <td>Chromium (Cr)</td>
                            <td>0.18 – 0.28</td>
                        </tr>
                         <tr class="t-row">
                            <td>Iron (Fe)</td>
                            <td>0.4 max</td>
                        </tr>
                         <tr class="t-row">
                            <td>Silicon (Si)</td>
                            <td>0.4 max</td>
                        </tr>
                         <tr class="t-row">
                            <td>Manganese (Mn)</td>
                            <td>0.3 max</td>
                        </tr>
                         <tr class="t-row">
                            <td>Titanium (Ti)</td>
                            <td>0.2 max</td>
                        </tr>
                         <tr class="t-row">
                            <td>Aluminium (Al)</td>
                            <td>Balance</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- ================= PHYSICAL PROPERTIES ================= -->
    <section class="sec-padd-top sec-padd-bottom bg-light" id="properties">
        <div class="container">
            <div class="section-title center">
                <h2>Physical Properties – Aluminium HE30</h2>
            </div>

            <div class="table-responsive col-lg-10 mx-auto">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                         <tr class="t-row">
                            <th>Property</th>
                            <th>Imperial</th>
                            <th>Metric</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr class="t-row">
                            <td>Density</td>
                            <td>0.102 lb/in³</td>
                            <td>2.83 g/cm³</td>
                        </tr>
                         <tr class="t-row">
                            <td>Melting Range</td>
                            <td>875 – 975 °F</td>
                            <td>468 – 524 °C</td>
                        </tr>
                         <tr class="t-row">
                            <td>Modulus of Elasticity</td>
                            <td>10.2 × 10³ ksi</td>
                            <td>70.3 GPa</td>
                        </tr>
                         <tr class="t-row">
                            <td>Thermal Conductivity</td>
                            <td>—</td>
                            <td>130 W/m·K</td>
                        </tr>
                         <tr class="t-row">
                            <td>Electrical Conductivity</td>
                            <td>33% IACS</td>
                            <td>—</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- ================= HEAT TREATMENT ================= -->
    <section class="sec-padd-top sec-padd-bottom" id="heat-treatment">
        <div class="container">
            <div class="section-title center">
                <h2>Heat Treatment – Aluminium HE30</h2>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                         <tr class="t-row">
                            <th>Heat Treatment Process</th>
                            <th>Temperature Range</th>
                            <th>Cooling / Procedure</th>
                            <th>Notes</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr class="t-row">
                            <td>Solution Heat Treatment</td>
                            <td>515 – 530°C</td>
                            <td>Water quench</td>
                            <td>Required for T6 properties</td>
                        </tr>
                         <tr class="t-row">
                            <td>Artificial Aging (T6)</td>
                            <td>160 – 180°C</td>
                            <td>Air cool</td>
                            <td>Maximum strength & hardness</td>
                        </tr>
                         <tr class="t-row">
                            <td>Annealing (O Temper)</td>
                            <td>350 – 410°C</td>
                            <td>Furnace cool</td>
                            <td>Restores ductility</td>
                        </tr>
                         <tr class="t-row">
                            <td>Stress Relieving</td>
                            <td>150 – 200°C</td>
                            <td>Air cool</td>
                            <td>Reduces machining stresses</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- ================= MECHANICAL PROPERTIES ================= -->
    <section class="sec-padd-top sec-padd-bottom" id="mechanical">
        <div class="container">
            <div class="section-title center">
                <h2>Mechanical Properties – Aluminium HE30</h2>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                         <tr class="t-row">
                            <th>Property</th>
                            <th>Annealed</th>
                            <th>Hot Finished</th>
                            <th>Cold Drawn</th>
                            <th>Hot Rolled</th>
                            <th>Sheet</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr class="t-row">
                            <td>Tensile Strength (MPa)</td>
                            <td>115 – 165</td>
                            <td>235 – 310</td>
                            <td>260 – 325</td>
                            <td>205 – 303</td>
                            <td>200 – 290</td>
                        </tr>
                         <tr class="t-row">
                            <td>Yield Strength (MPa)</td>
                            <td>70 – 100</td>
                            <td>190 – 275</td>
                            <td>235 – 290</td>
                            <td>165 – 260</td>
                            <td>150 – 240</td>
                        </tr>
                         <tr class="t-row">
                            <td>Elongation (%)</td>
                            <td>12 – 20</td>
                            <td>6 – 12</td>
                            <td>5 – 10</td>
                            <td>8 – 12</td>
                            <td>10 – 14</td>
                        </tr>
                         <tr class="t-row">
                            <td>Brinell Hardness</td>
                            <td>45 – 60 HB</td>
                            <td>80 – 95 HB</td>
                            <td>85 – 100 HB</td>
                            <td>70 – 90 HB</td>
                            <td>65 – 85 HB</td>
                        </tr>
                         <tr class="t-row">
                            <td>Rockwell Hardness</td>
                            <td>25 – 35 B</td>
                            <td>40 – 55 B</td>
                            <td>45 – 60 B</td>
                            <td>35 – 50 B</td>
                            <td>35 – 50 B</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="text-center mt-3">
                HE30-T6 offers excellent fatigue strength, making it ideal for long-term cyclic loading applications.
            </p>
        </div>
    </section>

    <!-- ================= HE30 VS OTHERS ================= -->
    <section class="sec-padd-top sec-padd-bottom" id="comparison">
        <div class="container">
            <div class="section-title center">
                <h2>Aluminium HE30 vs Other Popular Aluminium Alloys</h2>
            </div>
            <div class="row justify-content-center mb-4">
                <div class="col-lg-10">
                    <p class="fs-6 text-center">
                        Selecting the correct aluminium alloy depends on the strength, corrosion resistance, weldability, and machining requirements of your application. While Aluminium HE30 is one of the most versatile structural alloys, other grades may be better suited for specific operating conditions.
                    </p>
                </div>
            </div>

            <div class="table-responsive col-lg-10 mx-auto mb-4">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                         <tr class="t-row">
                            <th>Property</th>
                            <th>HE30 (6082)</th>
                            <th>6061</th>
                            <th>7075</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr class="t-row">
                            <td class="fw-bold">Strength</td>
                            <td>Excellent</td>
                            <td>Very Good</td>
                            <td>Outstanding</td>
                        </tr>
                         <tr class="t-row">
                            <td class="fw-bold">Corrosion Resistance</td>
                            <td>Excellent</td>
                            <td>Excellent</td>
                            <td>Good</td>
                        </tr>
                         <tr class="t-row">
                            <td class="fw-bold">Weldability</td>
                            <td>Excellent</td>
                            <td>Excellent</td>
                            <td>Fair</td>
                        </tr>
                         <tr class="t-row">
                            <td class="fw-bold">Machinability</td>
                            <td>Very Good</td>
                            <td>Very Good</td>
                            <td>Good</td>
                        </tr>
                         <tr class="t-row">
                            <td class="fw-bold">Structural Applications</td>
                            <td>Excellent</td>
                            <td>Excellent</td>
                            <td>Moderate</td>
                        </tr>
                         <tr class="t-row">
                            <td class="fw-bold">Aerospace</td>
                            <td>Good</td>
                            <td>Good</td>
                            <td>Excellent</td>
                        </tr>
                         <tr class="t-row">
                            <td class="fw-bold">Cost</td>
                            <td>Moderate</td>
                            <td>Moderate</td>
                            <td>Premium</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h4 class="mb-3" style="color: #db7227;">Which Aluminium Alloy Should You Choose?</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i><strong>Choose HE30 (6082)</strong> when your project requires high strength, excellent corrosion resistance, and reliable weldability for structural applications.</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i><strong>Choose 6061</strong> for general engineering, fabrication, and lightweight structural work.</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i><strong>Choose 7075</strong> where maximum strength is required, particularly in aerospace and high-performance engineering.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= AVAILABLE FORMS ================= -->
    <section class="sec-padd-top sec-padd-bottom bg-light" id="related grades">
        <div class="container">
            <div class="section-title center">
                <h2>Available Forms & Size Range – Aluminium HE30</h2>
            </div>

            <div class="table-responsive col-lg-10 mx-auto">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                         <tr class="t-row">
                            <th>Product Form</th>
                            <th>Size Range / Description</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr class="t-row">
                            <td>Sheets & Plates</td>
                            <td>2 mm – 150 mm</td>
                        </tr>
                         <tr class="t-row">
                            <td>Bars & Rods</td>
                            <td>6 mm – 300 mm</td>
                        </tr>
                         <tr class="t-row">
                            <td>Extrusions</td>
                            <td>Standard & custom profiles</td>
                        </tr>
                         <tr class="t-row">
                            <td>Tubes & Pipes</td>
                            <td>Seamless & welded</td>
                        </tr>
                         <tr class="t-row">
                            <td>Custom Components</td>
                            <td>Machined parts as per drawing</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- ================= STANDARDS ================= -->
    <section class="sec-padd-top sec-padd-bottom" id="international">
        <div class="container">
            <div class="section-title center">
                <h2>International Standards & Equivalent Grades – Aluminium HE30</h2>
            </div>

            <div class="table-responsive col-lg-8 mx-auto">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                         <tr class="t-row">
                            <th>Standard</th>
                            <th>Equivalent</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr class="t-row">
                            <td>ASTM</td>
                            <td>B209, B211</td>
                        </tr>
                         <tr class="t-row">
                            <td>AMS</td>
                            <td>4014, 4017</td>
                        </tr>
                         <tr class="t-row">
                            <td>EN</td>
                            <td>AW-6082</td>
                        </tr>
                         <tr class="t-row">
                            <td>ISO</td>
                            <td>6361</td>
                        </tr>
                         <tr class="t-row">
                            <td>British Equivalent</td>
                            <td>HE30</td>
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
                'route' => 'products.pipe-fittings',
                'image' => 'assets/images/aluminium-alloys/aluminium-alloys-6012.webp',
            ],
            [
                'name' => 'Flanges (Weld Neck, Slip-On, Blind, Socket Weld, Threaded)',
                'route' => 'products.flanges.flanges-and-gaskets',
                'image' => 'assets/images/engineering-steels/engineering-steels-4130.webp',
            ],
            [
                'name' => 'Fasteners (Bolts, Nuts, Screws, Washers, Studs)',
                'route' => 'products.fasteners',
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
                <h2>Products in Aluminium Alloys</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Aluminium HE30</strong> is supplied in various forms such as:
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
                        We supply Aluminium HE30 materials in accordance with the most stringent industry standards: </p>
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
                        <h5>High strength combined with good fatigue resistance</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Lightweight, reducing overall structural weight</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Good machinability and surface finish</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Can be anodized for enhanced corrosion resistance</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Meets stringent aerospace and defense quality standards</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Aluminium HE30</h2>
                <p class="text-center pb-3"><strong class="text-dark">Aluminium HE30</strong> is preferred in applications
                    requiring high strength-to-weight ratios, particularly in aerospace and defense

                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="application-card">
                            <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                            <h5>Aerospace Components</h5>
                            <p>Aircraft structural parts, fuselage panels, and wing skins.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="application-card">
                            <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                            <h5>Defense Industry</h5>
                            <p>Missile components, armor plating, and military vehicles.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="application-card">
                            <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                            <h5>Sports Equipment</h5>
                            <p>High-performance bicycle frames and sporting goods.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="application-card">
                            <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                            <h5>Automotive & Racing</h5>
                            <p>Lightweight chassis parts and performance accessories.
                            </p>
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
            </div>
    </section>

    <!-- ================= ADVANTAGES ================= -->
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Advantages of Aluminium HE30</h2>
            </div>
            <div class="row justify-content-center mb-4">
                <div class="col-lg-10">
                    <p class="fs-6 text-center">
                        Aluminium HE30 has become one of the preferred engineering alloys because it offers an excellent balance between mechanical performance and ease of fabrication.
                    </p>
                </div>
            </div>
            <div class="row g-4 mt-2 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Excellent strength-to-weight ratio</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-shield-shaded"></i></div>
                        <h5>Outstanding corrosion resistance</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-fire"></i></div>
                        <h5>Excellent weldability</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-gear"></i></div>
                        <h5>Good machinability</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-thermometer-half"></i></div>
                        <h5>Heat treatable for higher strength</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-activity"></i></div>
                        <h5>Good fatigue resistance</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-building"></i></div>
                        <h5>Suitable for structural applications</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-feather"></i></div>
                        <h5>Lightweight compared to steel</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-stars"></i></div>
                        <h5>Excellent surface finish</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-clock-history"></i></div>
                        <h5>Long service life</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-tools"></i></div>
                        <h5>Easy to fabricate</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-box-seam"></i></div>
                        <h5>Available in multiple product forms</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= LIMITATIONS ================= -->
    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Limitations of Aluminium HE30</h2>
            </div>
            <div class="row justify-content-center mb-4">
                <div class="col-lg-10">
                    <p class="fs-6 text-center">
                        Although Aluminium HE30 performs well in many industrial environments, it is important to understand its limitations before selecting it for critical applications.
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <ul class="list-unstyled">
                        <li class="mb-3 d-flex align-items-start"><i class="bi bi-exclamation-triangle-fill text-warning me-3 fs-5"></i><span class="fs-6">Lower strength than aerospace-grade 7075 aluminium</span></li>
                        <li class="mb-3 d-flex align-items-start"><i class="bi bi-exclamation-triangle-fill text-warning me-3 fs-5"></i><span class="fs-6">Not recommended for extremely acidic environments</span></li>
                        <li class="mb-3 d-flex align-items-start"><i class="bi bi-exclamation-triangle-fill text-warning me-3 fs-5"></i><span class="fs-6">Mechanical properties reduce at elevated temperatures</span></li>
                        <li class="mb-3 d-flex align-items-start"><i class="bi bi-exclamation-triangle-fill text-warning me-3 fs-5"></i><span class="fs-6">Surface protection may be required in highly corrosive environments</span></li>
                        <li class="mb-3 d-flex align-items-start"><i class="bi bi-exclamation-triangle-fill text-warning me-3 fs-5"></i><span class="fs-6">Lower wear resistance than hardened engineering steels</span></li>
                    </ul>
                    <p class="fs-6 mt-4 fw-bold text-center" style="color: #174268;">
                        Choosing the right alloy should always be based on the operating environment, mechanical loading, fabrication method, and service conditions.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= INDUSTRIES ================= -->
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Industries That Use Aluminium HE30</h2>
            </div>
            <div class="row justify-content-center mb-4">
                <div class="col-lg-10">
                    <p class="fs-6 text-center">
                        Thanks to its combination of strength, corrosion resistance, and excellent machinability, Aluminium HE30 is widely used across multiple industries.
                    </p>
                </div>
            </div>
            
            <div class="row justify-content-center mb-4">
                <div class="col-lg-10">
                    <div class="p-4 bg-white rounded shadow-sm border-start border-4" style="border-color: #db7227;">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-4 mb-2 d-flex align-items-center">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span> Aerospace
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 mb-2 d-flex align-items-center">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span> Defence
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 mb-2 d-flex align-items-center">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span> Automotive
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 mb-2 d-flex align-items-center">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span> Railway
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 mb-2 d-flex align-items-center">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span> Marine
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 mb-2 d-flex align-items-center">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span> Construction
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 mb-2 d-flex align-items-center">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span> Oil & Gas
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 mb-2 d-flex align-items-center">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span> Heavy Engineering
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 mb-2 d-flex align-items-center">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span> Power Generation
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 mb-2 d-flex align-items-center">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span> Chemical Processing
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 mb-2 d-flex align-items-center">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span> Food Processing
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 mb-2 d-flex align-items-center">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span> Packaging Equipment
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 mb-2 d-flex align-items-center">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span> Material Handling Equipment
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <p class="fs-6 mt-2 text-center fw-bold" style="color: #174268;">
                        Its versatility makes it one of the most widely specified aluminium alloys for structural engineering projects.
                    </p>
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
                        <h5>Leading supplier of aerospace-grade Aluminium HE30</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Large stock and custom size availability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Quality assurance with international certifications</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Technical expertise in high-performance aluminium alloys</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Competitive pricing with global delivery network</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="price" class="sec-padd-top sec-padd-bottom bg-light py-5">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h2> Aluminium HE30 Price per kg in India</h2>
            </div>

            <p class="text-center fs-5">
                <strong>Typical Range:</strong> ₹350 – ₹650 per kg
            </p>
            <p class="text-center mb-2">
                (Price varies by OD, wall thickness, form, and finish)
            </p>

            <p class="text-center fs-5">
                Contact us for exact quotation based on size and quantity.
            </p>
        </div>
    </section>


    <!-- ================= SUPPLIER ================= -->
    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Looking for Aluminium HE30 Supplier?</h2>
            </div>
            <div class="row justify-content-center mb-4">
                <div class="col-lg-10">
                    <p class="fs-6 text-justify mb-3" style="text-align: justify;">
                        Choosing the right supplier is just as important as selecting the right material. At <strong>Moksh Tubes & Fittings LLP</strong>, we supply premium-quality Aluminium Alloy HE30 in a wide range of forms and sizes to meet the requirements of engineering, construction, marine, transportation, and industrial applications.
                    </p>
                    <p class="fs-6 text-justify" style="text-align: justify;">
                        Our products are manufactured in accordance with international quality standards and are supplied with complete material traceability to ensure reliable performance.
                    </p>
                </div>
            </div>
            
            <div class="row justify-content-center mb-5">
                <div class="col-md-5 mb-4 mb-md-0">
                    <h4 class="mb-3" style="color: #db7227;">We Supply</h4>
                    <ul class="list-unstyled fs-6">
                        <li class="mb-2"><i class="bi bi-chevron-right text-primary me-2"></i>Aluminium HE30 Sheets</li>
                        <li class="mb-2"><i class="bi bi-chevron-right text-primary me-2"></i>Aluminium HE30 Plates</li>
                        <li class="mb-2"><i class="bi bi-chevron-right text-primary me-2"></i>Aluminium HE30 Bars</li>
                        <li class="mb-2"><i class="bi bi-chevron-right text-primary me-2"></i>Aluminium HE30 Rods</li>
                        <li class="mb-2"><i class="bi bi-chevron-right text-primary me-2"></i>Aluminium HE30 Pipes</li>
                        <li class="mb-2"><i class="bi bi-chevron-right text-primary me-2"></i>Aluminium HE30 Tubes</li>
                        <li class="mb-2"><i class="bi bi-chevron-right text-primary me-2"></i>Aluminium HE30 Extrusions</li>
                        <li class="mb-2"><i class="bi bi-chevron-right text-primary me-2"></i>Custom Machined Components</li>
                    </ul>
                </div>
                <div class="col-md-5">
                    <h4 class="mb-3" style="color: #db7227;">Why Choose Moksh Tubes?</h4>
                    <ul class="list-unstyled fs-6">
                        <li class="mb-2"><i class="bi bi-check2-square text-success me-2"></i>Mill Test Certificates (EN 10204 3.1)</li>
                        <li class="mb-2"><i class="bi bi-check2-square text-success me-2"></i>Third-Party Inspection Available</li>
                        <li class="mb-2"><i class="bi bi-check2-square text-success me-2"></i>Custom Cutting Services</li>
                        <li class="mb-2"><i class="bi bi-check2-square text-success me-2"></i>Competitive Pricing</li>
                        <li class="mb-2"><i class="bi bi-check2-square text-success me-2"></i>Ready Stock</li>
                        <li class="mb-2"><i class="bi bi-check2-square text-success me-2"></i>Fast Delivery</li>
                        <li class="mb-2"><i class="bi bi-check2-square text-success me-2"></i>Export Quality Packaging</li>
                        <li class="mb-2"><i class="bi bi-check2-square text-success me-2"></i>Worldwide Shipping</li>
                        <li class="mb-2"><i class="bi bi-check2-square text-success me-2"></i>Technical Material Selection Support</li>
                    </ul>
                </div>
            </div>
            
            <div class="row justify-content-center text-center">
                <div class="col-lg-10">
                    <p class="fs-6 mb-4">
                        Whether you require a small quantity for a prototype or bulk material for industrial production, our experienced team is ready to help you select the right aluminium solution for your project.
                    </p>
                    <a href="javascript:void(0);" class="btn btn-lg text-white px-5 py-3 fw-bold" style="background-color: #db7227; border-radius: 8px;" data-bs-toggle="modal" data-bs-target="#contactFormModal">
                        👉 Request a Quote Today
                    </a>
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

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>
                                    What is Aluminium Alloy HE30 used for?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Aluminium HE30 is an aerospace-grade aluminium alloy widely used in aircraft structures,
                                    defense equipment, automotive parts, and high performance sports gear.
                                    Its high strength to weight ratio makes it ideal for industries requiring both
                                    lightweight and durability.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>
                                    What are the key properties of Aluminium HE30?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    HE30 aluminium offers high tensile strength, excellent fatigue resistance, good
                                    machinability, and moderate corrosion resistance.
                                    It can also be anodized for improved surface protection, making it suitable for
                                    aerospace, defense, and automotive industries.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>
                                    How strong is Aluminium HE30 compared to other aluminium alloys?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Aluminium HE30, part of the 7000 series alloys, is stronger than most 6000 series alloys
                                    like 6061 and 6082.
                                    With tensile strength ranging from 200–310 MPa, HE30 is specifically engineered for
                                    aerospace and defense applications where strength and performance are critical.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>
                                    Can Aluminium HE30 be welded and machined?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Yes, Aluminium HE30 has good machinability, allowing it to be shaped into complex
                                    components.
                                    However, like many 7000 series alloys, its weldability is limited, and special care must
                                    be taken when welding to maintain mechanical properties.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>
                                    Where can I buy Aluminium HE30 in India?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    You can buy premium quality Aluminium HE30 sheets, plates, bars, rods, extrusions, and
                                    custom components from
                                    <strong>Moksh Tubes & Fittings LLP</strong> a trusted manufacturer, supplier,
                                    exporter, and stockist.
                                    They provide aerospace-grade certified materials with global delivery and competitive
                                    pricing.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

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
                    For quotes or inquiries on Aluminium Alloy HE30 products, <strong>Moksh Tubes & Fittings
                        LLP</strong> your trusted partner for aerospace-grade aluminium solutions.</p>
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
      "name": "What is Aluminium Alloy HE30 used for?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Aluminium HE30 is an aerospace-grade aluminium alloy widely used in aircraft structures, defense equipment, automotive parts, and high performance sports gear. Its high strength to weight ratio makes it ideal for industries requiring both lightweight and durability."
      }
    },
    {
      "@type": "Question",
      "name": "What are the key properties of Aluminium HE30?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "HE30 aluminium offers high tensile strength, excellent fatigue resistance, good machinability, and moderate corrosion resistance. It can also be anodized for improved surface protection, making it suitable for aerospace, defense, and automotive industries."
      }
    },
    {
      "@type": "Question",
      "name": "How strong is Aluminium HE30 compared to other aluminium alloys?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Aluminium HE30, part of the 7000 series alloys, is stronger than most 6000 series alloys like 6061 and 6082. With tensile strength ranging from 200–310 MPa, HE30 is specifically engineered for aerospace and defense applications where strength and performance are critical."
      }
    },
    {
      "@type": "Question",
      "name": "Can Aluminium HE30 be welded and machined?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, Aluminium HE30 has good machinability, allowing it to be shaped into complex components. However, like many 7000 series alloys, its weldability is limited, and special care must be taken when welding to maintain mechanical properties."
      }
    },
    {
      "@type": "Question",
      "name": "Where can I buy Aluminium HE30 in India?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You can buy premium quality Aluminium HE30 sheets, plates, bars, rods, extrusions, and custom components from Moksh Tubes & Fittings LLP, a trusted manufacturer, supplier, exporter, and stockist. They provide aerospace-grade certified materials with global delivery and competitive pricing."
      }
    }
  ]
}
@endverbatim
</script>
@endsection


