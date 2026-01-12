@extends('layouts.master')

@section('title', 'P11 Alloy Steel | High Temperature Pressure Vessel Steel')
@section('meta_description',
    'P11 Alloy Steel designed for high-temperature pressure vessels, boilers, and pipework in
    power plants.')
@section('meta_keywords',
    'P11 Alloy Steel, high temperature alloy steel, pressure vessel steel, boiler steel, power
    plant steel, industrial alloy steel')
@section('og_image', asset('assets/images/engineering-steels/engineering-steels-p11.webp'))
@section('og_type', 'article')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area"
        style="background-image: url(/assets/images/engineering-steels/engineering-steels-p11.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>High Temperature P11 Alloy Steel<br> Chromium-Molybdenum Low Alloy Steel</h1>

                    <!-- Add your extra content here -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        P11 Alloy Steel (ASTM A335 / ASME SA335 Grade P11) is a chromium-molybdenum low alloy steel designed
                        for high-temperature and high-pressure applications. It offers excellent strength, creep resistance,
                        and oxidation resistance at elevated temperatures, making it ideal for power plant piping, boilers,
                        and pressure vessels. Below is the complete datasheet including chemical composition, mechanical
                        properties, heat treatment, and applications.

                    </p>


                    <!-- End extra content -->
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

    .
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


    <section id="overview" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Product Overview</h2>
            </div>

            <h2 class="fw-semibold text-center mb-5" style="color: #db7227;">
                Introduction To Engineering Steel P11
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/engineering-steels/engineering-steels-p11.webp') }}" alt="ENp11"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a trusted manufacturer,
                            supplier, exporter, importer, and stockist of<strong class="text-black"> P11 steel
                                products</strong> including pipes, tubes, plates,
                            and forgings.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">EN P11</strong class="text-black">, is a chromium-molybdenum alloy
                            steel commonly used in high-temperature and high-pressure applications such as boilers,
                            superheaters, and pressure vessels. It belongs to the Grade 1 group of alloy steels and is
                            designed to provide excellent strength, creep resistance, and oxidation resistance at elevated
                            temperatures up to 550°C (1022°F).
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Engineering Steels P11 Datasheet</h3>
            <p class="mb-3">
                Get the complete Engineering Steels P11 datasheet with chemical composition,
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
                <h2>Specifications of Alloy Steel P11 (ASTM A335 / ASME SA335)</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
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
                                    <td>ASTM A335 P11 / ASME SA335 P11 / UNS K11597</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Type</td>
                                    <td>Chromium-Molybdenum (Cr-Mo) Alloy Steel</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Material Category</td>
                                    <td>High-Temperature Ferritic Alloy Steel</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon Content</td>
                                    <td>~0.10%</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Key Alloying Elements</td>
                                    <td>1.0–1.5% Cr, 0.44–0.65% Mo</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Primary Use</td>
                                    <td>High-temperature & high-pressure piping</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Supply Conditions</td>
                                    <td>Hot Finished, Cold Drawn, Normalized & Tempered</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Available Forms</td>
                                    <td>Seamless Pipes, Boiler Tubes, Heat Exchanger Tubes, Superheater Tubes</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Heat Treatment Options</td>
                                    <td>Normalizing, Tempering, Stress Relieving</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Testing Availability</td>
                                    <td>Tensile, Hydrostatic, NDT, Hardness, Chemical Analysis</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Certification</td>
                                    <td>EN 10204 3.1 / 3.2</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Standards</td>
                                    <td>ASTM A335 / ASME SA335, DIN 1.7386</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Machinability</td>
                                    <td>Moderate</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Weldability</td>
                                    <td>Good (Preheat recommended)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Corrosion Resistance</td>
                                    <td>Moderate – enhanced oxidation & creep resistance</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Temperature Resistance</td>
                                    <td>Excellent – service up to ~600°C</td>
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
                <h2>Chemical Composition of P11 Alloy Steel</h2>
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
                                    <td>Carbon (C)</td>
                                    <td>0.07 – 0.15</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese (Mn)</td>
                                    <td>0.30 – 0.60</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon (Si)</td>
                                    <td>0.10 – 0.40</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium (Cr)</td>
                                    <td>0.90 – 1.20</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Molybdenum (Mo)</td>
                                    <td>0.44 – 0.65</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Phosphorus (P)</td>
                                    <td>≤ 0.035</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sulfur (S)</td>
                                    <td>≤ 0.035</td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="mt-3 text-center">
                            Chromium and molybdenum provide P11 steel with excellent oxidation resistance,
                            creep strength, and stability at elevated temperatures.
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
                <h2 class="fw-bold" style="color:#174268;">Physical Properties of Alloy Steel P11</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
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
                                    <td>Density</td>
                                    <td>7.85 g/cm³</td>
                                    <td>0.284 lb/in³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Range</td>
                                    <td>1340 – 1400 °C</td>
                                    <td>2450 – 2550 °F</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elastic Modulus (Tension)</td>
                                    <td>200 GPa</td>
                                    <td>29,000 ksi</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elastic Modulus (Torsion)</td>
                                    <td>80 GPa</td>
                                    <td>11,600 ksi</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Poisson’s Ratio</td>
                                    <td>0.29</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Thermal Conductivity</td>
                                    <td>45 W/m·K</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Specific Heat</td>
                                    <td>460 J/kg·K</td>
                                    <td>—</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Heat Treatment -->
            <div class="row justify-content-center mt-5" id="heat-treatment">
                <div class="col-lg-10">
                    <h4 class="text-center mb-3" style="color:#db7227;">
                        Heat Treatment of Alloy Steel P11
                    </h4>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Process</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td>Normalizing</td>
                                    <td>900–950°C, air cooled to refine grain structure</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tempering</td>
                                    <td>650–750°C to achieve required mechanical properties</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Stress Relieving</td>
                                    <td>675–725°C to reduce residual stresses</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Annealing (Subcritical)</td>
                                    <td>720–760°C, slow furnace cool for machinability</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Hot Working</td>
                                    <td>900–1100°C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Cold Working</td>
                                    <td>Possible; stress relieving recommended afterward</td>
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
                    Mechanical Properties of Alloy Steel P11 (Normalized & Tempered)
                </h2>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Property</th>
                            <th>Annealed</th>
                            <th>Hot-Finished</th>
                            <th>Hot-Rolled</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="t-row">
                            <td>Tensile Strength (MPa)</td>
                            <td>517–655</td>
                            <td>552–758</td>
                            <td>517–655</td>
                        </tr>
                        <tr class="t-row">
                            <td>Yield Strength (MPa)</td>
                            <td>276–414</td>
                            <td>310–620</td>
                            <td>276–414</td>
                        </tr>
                        <tr class="t-row">
                            <td>Elongation (%)</td>
                            <td>20–30</td>
                            <td>15–25</td>
                            <td>20–30</td>
                        </tr>
                        <tr class="t-row">
                            <td>Brinell Hardness (HB)</td>
                            <td>140–190</td>
                            <td>160–220</td>
                            <td>140–190</td>
                        </tr>
                        <tr class="t-row">
                            <td>Rockwell Hardness</td>
                            <td>75–85 B</td>
                            <td>85–90 B</td>
                            <td>75–85 B</td>
                        </tr>
                    </tbody>
                </table>

                <p class="mt-3 text-center">
                    P11 maintains durability, thermal strength, and excellent resistance to creep
                    during long high-temperature service cycles.
                </p>
            </div>
        </div>
    </section>

    <!-- Available Forms -->
    <section class="sec-padd-top sec-padd-bottom bg-light" id="related grades">
        <div class="container">
            <div class="section-title center mt-5">
                <h2>Available Forms & Size Range of Alloy Steel P11</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <table class="table table-bordered table-striped align-middle">
                        <thead class="table-dark text-center">
                            <tr class="t-row">
                                <th>Form</th>
                                <th>Size Range / Details</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr class="t-row">
                                <td>Seamless Pipes</td>
                                <td>OD 15–610 mm, WT 2–50 mm, Length up to 12 m</td>
                            </tr>
                            <tr class="t-row">
                                <td>Welded Pipes (ERW / SAW)</td>
                                <td>OD 20–600 mm, WT 2–40 mm, Length up to 12 m</td>
                            </tr>
                            <tr class="t-row">
                                <td>Tubes</td>
                                <td>OD 10–200 mm, WT 1–20 mm, Custom lengths</td>
                            </tr>
                            <tr class="t-row">
                                <td>Bars</td>
                                <td>Round / Hex / Square: 10–200 mm, Length 3–6 m</td>
                            </tr>
                            <tr class="t-row">
                                <td>Plates & Sheets</td>
                                <td>Thickness 6–100 mm, Width up to 2500 mm</td>
                            </tr>
                            <tr class="t-row">
                                <td>Forgings / Flanges</td>
                                <td>Custom sizes as per requirement</td>
                            </tr>
                            <tr class="t-row">
                                <td>Custom Components</td>
                                <td>Manufactured per drawing or specification</td>
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
                <h2>International Standards & Equivalent Grades of Alloy Steel P11</h2>
            </div>

            <div class="table-responsive col-lg-10 mx-auto">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Standard</th>
                            <th>Equivalent Grade</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="t-row">
                            <td>ASTM / ASME</td>
                            <td>A335 P11 / SA335 P11</td>
                        </tr>
                        <tr class="t-row">
                            <td>UNS</td>
                            <td>K11597</td>
                        </tr>
                        <tr class="t-row">
                            <td>DIN / EN</td>
                            <td>1.7386 / 13CrMo4-5</td>
                        </tr>
                        <tr class="t-row">
                            <td>JIS</td>
                            <td>SCMV4</td>
                        </tr>
                        <tr class="t-row">
                            <td>GB</td>
                            <td>12Cr1MoV</td>
                        </tr>
                        <tr class="t-row">
                            <td>ISO</td>
                            <td>ISO 9329-1 P11</td>
                        </tr>
                        <tr class="t-row">
                            <td>BS</td>
                            <td>BS 1501 Gr. 4832-11</td>
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
                <h2>Products in Engineering Steel P11</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Engineering Steel P11</strong> is typically available in:
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
                        Engineering Steel P11 products are produced to the following global standards:
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
                        <h5>Excellent strength and creep resistance at elevated temperatures</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Good oxidation and corrosion resistance in steam and gas environments</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Suitable for high pressure and thermal cycling applications</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Good weldability and machinability</h5>
                    </div>
                </div>
                {{-- <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Excellent dimensional stability during heat treatment</h5>
                    </div>
                </div> --}}
            </div>
    </section>


    <section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Engineering Steel P11</h2>
                <p class="text-center pb-3"><strong class="text-dark">Engineering Steel P11</strong> is primarily used
                    for:
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Power Generation</h5>
                        <p>Boiler tubes, superheater tubes, and heat exchanger tubes operating at high temperatures and
                            pressures.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Petrochemical Industry</h5>
                        <p>Pressure vessels, reactors, and piping systems handling hot gases and fluids.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Oil & Gas Industry</h5>
                        <p>High-temperature pipelines and components in upstream and downstream processing.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Chemical Processing</h5>
                        <p>Equipment exposed to high temperature and corrosive environments.</p>
                    </div>
                </div>

                {{-- <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Tool Manufacturing</h5>
                        <p>Used in making dies and heavy-duty tools requiring durability.</p>
                    </div>
                </div> --}}

                {{-- <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Oil & Gase</h5>
                        <p>Tool joints, pump shafts, downhole components</p>
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
                        <h5>Trusted supplier with certified quality P11 steel</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Comprehensive stock and custom sizing available</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Technical expertise in alloy steel applications</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Competitive pricing and timely deliveries</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Full traceability and compliance documentation</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="price" class="sec-padd-top sec-padd-bottom bg-light py-5">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h2>P11 Alloy Steel Price in India</h2>
            </div>

            <p class="text-center fs-5">
                <strong>Typical Range:</strong> ₹130 – ₹250 per kg
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
                                <h4>What is P11 steel used for?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    P11 steel is primarily used in high temperature and high pressure applications,
                                    including boiler tubes, superheaters, pressure vessels, and heat exchanger components in
                                    power generation, petrochemical, oil & gas, and chemical processing industries.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the key properties of P11 steel?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    P11 steel provides excellent strength, creep resistance, oxidation resistance, good
                                    weldability, and machinability, making it suitable for thermal cycling and high-pressure
                                    environments.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>In what forms is P11 steel available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    P11 steel is available in seamless and welded pipes, tubes, sheets, plates, bars,
                                    flanges, fasteners, and custom fabricated components to meet diverse industrial
                                    requirements.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why is P11 steel suitable for high-temperature applications?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Its chromium molybdenum composition ensures superior creep resistance, oxidation
                                    resistance, and strength at elevated temperatures up to 550°C (1022°F), making it ideal
                                    for boilers, superheaters, and pressure vessels.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose MOKSH TUBES & FITTINGS LLP for P11 steel?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    We provide certified high-quality P11 steel products with comprehensive stock, custom
                                    sizing, technical expertise, timely deliveries, competitive pricing, and full
                                    traceability for critical alloy steel applications.
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


    <sectio id="contact-us" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Contact Us</h2>
                <p>
                    For inquiries or quotations for P11 steel products, contact<strong> Moksh Tubes & Fittings
                        LLP</strong> — your reliable partner for alloy steel solutions.
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
                "name": "What is P11 steel used for?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "P11 steel is primarily used in high temperature and high pressure applications, including boiler tubes, superheaters, pressure vessels, and heat exchanger components in power generation, petrochemical, oil & gas, and chemical processing industries."
                }
                },
                {
                "@type": "Question",
                "name": "What are the key properties of P11 steel?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "P11 steel provides excellent strength, creep resistance, oxidation resistance, good weldability, and machinability, making it suitable for thermal cycling and high-pressure environments."
                }
                },
                {
                "@type": "Question",
                "name": "In what forms is P11 steel available?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "P11 steel is available in seamless and welded pipes, tubes, sheets, plates, bars, flanges, fasteners, and custom fabricated components to meet diverse industrial requirements."
                }
                },
                {
                "@type": "Question",
                "name": "Why is P11 steel suitable for high-temperature applications?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Its chromium molybdenum composition ensures superior creep resistance, oxidation resistance, and strength at elevated temperatures up to 550°C (1022°F), making it ideal for boilers, superheaters, and pressure vessels."
                }
                },
                {
                "@type": "Question",
                "name": "Why choose MOKSH TUBES & FITTINGS LLP for P11 steel?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We provide certified high-quality P11 steel products with comprehensive stock, custom sizing, technical expertise, timely deliveries, competitive pricing, and full traceability for critical alloy steel applications."
                }
                }
            ]
            }

        @endverbatim
    </script>
    @endsection
