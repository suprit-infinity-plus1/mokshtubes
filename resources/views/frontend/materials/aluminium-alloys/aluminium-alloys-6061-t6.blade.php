@extends('layouts.master')

@section('title', 'Aluminium Alloy 6061 T6 | High Strength Aluminium')

@section('meta_description',
    'Aluminium 6061 T6 – high strength alloy offering excellent corrosion resistance and
    weldability, ideal for structural and aerospace applications.')

@section('meta_keywords',
    'Aluminium Alloy 6061 T6, High Strength Aluminium, Aluminium 6061 T6 Pipes, Aluminium 6061 T6
    Tubes, Aluminium 6061 T6 Sheets, Corrosion Resistant Aluminium, Weldable Aluminium Alloy, Structural Aluminium Alloys,
    Aerospace Aluminium, Industrial Aluminium Grades')

@section('og_image', asset('assets/images/aluminium-alloys/aluminium-alloys-6061-t6.webp'))
@section('og_type', 'article')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area"
        style="background-image: url(/assets/images/aluminium-alloys/aluminium-alloys-6061-t6.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Aluminium 6061 T6 <br>High Strength Corrosion-Resistant Alloy</h1>

                    <!-- Add your extra content here -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Aluminium Alloy 6061-T6 is a precipitation-hardened aluminium alloy known for its excellent
                        strength-to-weight ratio, corrosion resistance, weldability, and machinability. The T6 temper
                        indicates that the alloy has been solution heat-treated and artificially aged, resulting in high
                        strength and superior mechanical performance. Below is the complete datasheet including composition,
                        properties, specifications, and applications.

                    </p>
                    <!-- End extra content -->

                </div>
            </div>
        </div>
    </section>

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


    <!--End breadcrumb area-->
    <section id="overview" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Aluminium 6061-T6 | Product Overview</h2>
            </div>

            <h2 class="fw-semibold text-center mb-5" style="color: #db7227;">
                Introduction To Aluminium 6061-T6
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/aluminium-alloys/aluminium-alloys-6061-t6.webp') }}"
                        alt="Aluminium 6061 T6" class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a leading manufacturer,
                            supplier, exporter, importer, and stockist of<strong class="text-black"> Aluminium Alloy 6061-T6
                                <a href="{{ route('products') }}"> products</a></strong> including sheets,
                            plates, tubes,<a href="{{ route('products.pipes-tubes') }}"> pipes</a>, bars, rods, and custom
                            fabrications.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">Aluminium 6061-T6</strong> is a versatile, heat-treated aluminium
                            alloy known for its excellent mechanical properties, corrosion resistance, and good weldability.
                            It is widely used in structural applications due to its high strength-to-weight ratio and good
                            machinability. The T6 temper indicates the alloy is solution heat-treated and artificially aged,
                            providing enhanced strength and durability.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Alluminium Alloy 6061 T6 Datasheet</h3>
            <p class="mb-3">
                Get the complete Alluminium Alloy 6061 T6 datasheet with chemical composition,
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


    <!-- ================= ALUMINIUM 6061-T6 SPECIFICATIONS ================= -->
    <section class="sec-padd-top" id="specification">
        <div class="container">
            <div class="section-title center">
                <h2>Aluminium 6061-T6 Specifications (AA6061-T6)</h2>
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
                            <td>6061-T6 / AA6061 / UNS A96061</td>
                        </tr>
                         <tr class="t-row">
                            <td>Alloy Type</td>
                            <td>Heat-treatable aluminium alloy (precipitation hardened)</td>
                        </tr>
                         <tr class="t-row">
                            <td>Typical Chemical Composition</td>
                            <td>Si 0.4–0.8%, Mg 0.8–1.2%, Cu 0.15–0.40%</td>
                        </tr>
                         <tr class="t-row">
                            <td>Conditions</td>
                            <td>O, T4, T6, T651, T6511</td>
                        </tr>
                         <tr class="t-row">
                            <td>Processes</td>
                            <td>Hot Rolled, Cold Rolled, Extruded, Forged</td>
                        </tr>
                         <tr class="t-row">
                            <td>Testing</td>
                            <td>Tensile, Hardness, Chemical, Ultrasonic (on request)</td>
                        </tr>
                         <tr class="t-row">
                            <td>Certification</td>
                            <td>EN 10204 – 3.1 / 3.2</td>
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
                <h2>Chemical Composition – Aluminium Alloy 6061-T6</h2>
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
                            <td>Silicon (Si)</td>
                            <td>0.40 – 0.80</td>
                        </tr>
                         <tr class="t-row">
                            <td>Iron (Fe)</td>
                            <td>0.70 max</td>
                        </tr>
                         <tr class="t-row">
                            <td>Copper (Cu)</td>
                            <td>0.15 – 0.40</td>
                        </tr>
                         <tr class="t-row">
                            <td>Manganese (Mn)</td>
                            <td>0.15 max</td>
                        </tr>
                         <tr class="t-row">
                            <td>Magnesium (Mg)</td>
                            <td>0.80 – 1.20</td>
                        </tr>
                         <tr class="t-row">
                            <td>Chromium (Cr)</td>
                            <td>0.04 – 0.35</td>
                        </tr>
                         <tr class="t-row">
                            <td>Zinc (Zn)</td>
                            <td>0.25 max</td>
                        </tr>
                         <tr class="t-row">
                            <td>Titanium (Ti)</td>
                            <td>0.15 max</td>
                        </tr>
                         <tr class="t-row">
                            <td>Aluminium (Al)</td>
                            <td>Balance</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="text-center mt-3">
                6061-T6 uses Mg + Si precipitation strengthening, providing excellent structural strength.
            </p>
        </div>
    </section>

    <!-- ================= PHYSICAL PROPERTIES ================= -->
    <section class="sec-padd-top sec-padd-bottom bg-light" id="properties">
        <div class="container">
            <div class="section-title center">
                <h2>Physical Properties – Aluminium 6061-T6</h2>
            </div>

            <div class="table-responsive col-lg-10 mx-auto">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                         <tr class="t-row">
                            <th>Property</th>
                            <th>Imperial Units</th>
                            <th>Metric Units</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr class="t-row">
                            <td>Density</td>
                            <td>0.0975 lb/in³</td>
                            <td>2.70 g/cm³</td>
                        </tr>
                         <tr class="t-row">
                            <td>Melting Range</td>
                            <td>1070–1090 °F</td>
                            <td>575–590 °C</td>
                        </tr>
                         <tr class="t-row">
                            <td>Modulus of Elasticity</td>
                            <td>10 × 10³ ksi</td>
                            <td>69 GPa</td>
                        </tr>
                         <tr class="t-row">
                            <td>Thermal Conductivity</td>
                            <td>—</td>
                            <td>167 W/m·K</td>
                        </tr>
                         <tr class="t-row">
                            <td>Electrical Conductivity</td>
                            <td>40% IACS</td>
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
                <h2>Heat Treatment – Aluminium Alloy 6061</h2>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                         <tr class="t-row">
                            <th>Heat Treatment Process</th>
                            <th>Temperature Range</th>
                            <th>Cooling Method</th>
                            <th>Notes / Purpose</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr class="t-row">
                            <td>Solution Heat Treatment</td>
                            <td>530 – 550°C</td>
                            <td>Rapid water quench</td>
                            <td>Dissolves Mg & Si prior to aging</td>
                        </tr>
                         <tr class="t-row">
                            <td>Artificial Aging (T6)</td>
                            <td>160 – 180°C (6–18 hrs)</td>
                            <td>Air cool</td>
                            <td>Precipitates Mg₂Si for maximum strength</td>
                        </tr>
                         <tr class="t-row">
                            <td>Annealing (O Temper)</td>
                            <td>345°C (2–3 hrs)</td>
                            <td>Furnace cool</td>
                            <td>Restores full ductility</td>
                        </tr>
                         <tr class="t-row">
                            <td>Stress Relieving</td>
                            <td>205 – 230°C</td>
                            <td>Air cool</td>
                            <td>Reduces residual stresses</td>
                        </tr>
                         <tr class="t-row">
                            <td>Natural Aging (T4)</td>
                            <td>Room temperature</td>
                            <td>—</td>
                            <td>Moderate strength development</td>
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
                <h2>Mechanical Properties – Aluminium 6061-T6</h2>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                         <tr class="t-row">
                            <th>Property</th>
                            <th>Annealed</th>
                            <th>Hot Finished</th>
                            <th>Cold-Drawn</th>
                            <th>Hot-Rolled</th>
                            <th>Sheet (T6)</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr class="t-row">
                            <td>Tensile Strength (MPa)</td>
                            <td>125 – 185</td>
                            <td>260 – 310</td>
                            <td>290 – 345</td>
                            <td>260 – 310</td>
                            <td>290 – 330</td>
                        </tr>
                         <tr class="t-row">
                            <td>Yield Strength (MPa)</td>
                            <td>55 – 85</td>
                            <td>240 – 275</td>
                            <td>255 – 310</td>
                            <td>240 – 275</td>
                            <td>240 – 290</td>
                        </tr>
                         <tr class="t-row">
                            <td>Elongation (%)</td>
                            <td>18 – 25</td>
                            <td>10 – 18</td>
                            <td>10 – 15</td>
                            <td>12 – 18</td>
                            <td>8 – 12</td>
                        </tr>
                         <tr class="t-row">
                            <td>Brinell Hardness (HB)</td>
                            <td>30 – 50</td>
                            <td>90 – 100</td>
                            <td>95 – 105</td>
                            <td>90 – 100</td>
                            <td>95 – 105</td>
                        </tr>
                         <tr class="t-row">
                            <td>Rockwell Hardness</td>
                            <td>25 – 35 B</td>
                            <td>60 – 65 B</td>
                            <td>65 – 70 B</td>
                            <td>60 – 65 B</td>
                            <td>65 – 70 B</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="text-center mt-3">
                6061-T6 temper provides maximum strength through controlled precipitation hardening.
            </p>
        </div>
    </section>

    <!-- ================= AVAILABLE FORMS ================= -->
    <section class="sec-padd-top sec-padd-bottom bg-light" id="related grades">
        <div class="container">
            <div class="section-title center">
                <h2>Available Forms & Size Range – Aluminium 6061-T6</h2>
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
                            <td>Sheets, Plates & Coils</td>
                            <td>0.5 mm – 300 mm</td>
                        </tr>
                         <tr class="t-row">
                            <td>Seamless & Welded Tubes/Pipes</td>
                            <td>OD 6 mm – 300 mm</td>
                        </tr>
                         <tr class="t-row">
                            <td>Round, Flat, Hex & Square Bars</td>
                            <td>Custom sizes available</td>
                        </tr>
                         <tr class="t-row">
                            <td>Rods & Wires</td>
                            <td>1.6 mm – 25 mm</td>
                        </tr>
                         <tr class="t-row">
                            <td>Extrusions & Profiles</td>
                            <td>Complex shapes available</td>
                        </tr>
                         <tr class="t-row">
                            <td>Forged Blocks, Rings & Discs</td>
                            <td>As per drawing</td>
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
                <h2>International Standards & Equivalent Grades – Aluminium 6061-T6</h2>
            </div>

            <div class="table-responsive col-lg-8 mx-auto">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                         <tr class="t-row">
                            <th>Standard</th>
                            <th>Equivalent Grade</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr class="t-row">
                            <td>ASTM</td>
                            <td>B209, B210, B211</td>
                        </tr>
                         <tr class="t-row">
                            <td>AMS</td>
                            <td>4027, 4115</td>
                        </tr>
                         <tr class="t-row">
                            <td>QQ-A</td>
                            <td>250/11</td>
                        </tr>
                         <tr class="t-row">
                            <td>ISO</td>
                            <td>6361</td>
                        </tr>
                         <tr class="t-row">
                            <td>JIS</td>
                            <td>H4000 Series</td>
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
                <h2>Products in Aluminium Alloys</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Aluminium 6061-T6</strong> is available in a variety of mill forms:
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
                        We supply Aluminium 6061-T6 materials in accordance with the most stringent industry standards: </p>
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
                        <h5>Excellent strength-to-weight ratio</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Good corrosion resistance especially against atmospheric conditions</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Superior machinability and weldability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Good fatigue strength</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Suitable for anodizing and other surface treatments</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Aluminium 6061-T6</h2>
                <p class="text-center pb-3"><strong class="text-dark">Aluminium 6061-T6</strong> is widely used across
                    multiple industries due to its excellent strength, corrosion resistance, and machinability:
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Aerospace & Aviation</h5>
                        <p>Aircraft structural components, fittings, and frames requiring lightweight and durable materials.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Automotive</h5>
                        <p>Chassis, wheels, and body panels where high strength and low weight are critical.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Marine & Shipbuilding</h5>
                        <p>Boat hulls, decks, and marine fittings with superior corrosion resistance in saltwater.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Construction & Architecture</h5>
                        <p>Structural framing, window frames, and curtain walls requiring strength and weather resistance.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Electrical & Electronics</h5>
                        <p>Heat sinks, enclosures, and components due to good thermal and electrical conductivity.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Sports Equipment</h5>
                        <p>Bicycle frames, golf clubs, and other gear where weight reduction and strength are essential.</p>
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


    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container text-center">
            <div class="section-title center">
                <h2>WHY CHOOSE US?</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-award-fill"></i></div>
                        <h5>High-quality Aluminium 6061-T6 products meeting industry standards
                        </h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Large inventory ensuring prompt delivery</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Customized sizes and fabrication services</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Experienced technical support for material selection and application</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Commitment to customer satisfaction and quality assurance</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="price" class="sec-padd-top sec-padd-bottom bg-light py-5">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h2>Aluminium 6061-T6 Price per kg in India</h2>
            </div>

            <p class="text-center fs-5">
                <strong>Typical Range:</strong> ₹340 – ₹550 per kg
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

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>
                                    What is Aluminium Alloy 6061-T6 and why is it widely used?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Aluminium Alloy 6061-T6 is a heat treated, high strength aluminum alloy known for its
                                    excellent corrosion resistance, weldability, and machinability.
                                    The T6 temper means it has been solution heat treated and artificially aged, providing
                                    superior strength, hardness, and durability,
                                    making it one of the most versatile aluminum grades for industrial applications.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>
                                    What are the main applications of Aluminium 6061-T6?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>Aluminium 6061-T6 is used in a wide variety of industries, including:</p>
                                <ul>
                                    <li><strong>Aerospace & Aviation :</strong> Aircraft structures, fittings, and frames.
                                    </li>
                                    <li><strong>Automotive :</strong> Wheels, chassis, and lightweight body panels.</li>
                                    <li><strong>Marine :</strong> Boat hulls, decks, and fittings with seawater resistance.
                                    </li>
                                    <li><strong>Construction & Architecture :</strong> Urtain walls, window frames, and
                                        structural framing.</li>
                                    <li><strong>Electrical & Electronics :</strong> Heat sinks, enclosures, and components.
                                    </li>
                                    <li><strong>Sports Equipment :</strong> Bicycle frames, golf clubs, and performance
                                        gear.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>
                                    What are the advantages of Aluminium 6061-T6 over other alloys?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>Key benefits of Aluminium 6061-T6 include:</p>
                                <ul>
                                    <li>Excellent strength to weight ratio for structural applications.</li>
                                    <li>High corrosion resistance in atmospheric and marine conditions.</li>
                                    <li>Good weldability and machinability for fabrication.</li>
                                    <li>Durability with fatigue resistance in heavy duty uses.</li>
                                    <li>Suitable for anodizing and surface treatments for enhanced protection and
                                        aesthetics.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>
                                    Is Aluminium 6061-T6 suitable for marine and aerospace applications?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Yes, Aluminium 6061-T6 is widely used in both marine and aerospace industries due to its
                                    lightweight, strength, and corrosion resistance.
                                    In aerospace, it is used for frames, fittings, and aircraft structures, while in marine
                                    applications, it is commonly found in boat hulls, decks, and fittings exposed to
                                    seawater.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>
                                    What Aluminium 6061-T6 products are available at Moksh Tubes & Fittings LLP?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>Moksh Tubes & Fittings LLP offers a wide range of Aluminium 6061-T6 products, including:
                                </p>
                                <ul>
                                    <li>Sheets, Plates, Coils & Strips.</li>
                                    <li>Pipes & Tubes (Seamless, Welded, Heat Exchanger, U-Bend).</li>
                                    <li>Bars & Rods (Round, Hex, Flat, Square).</li>
                                    <li>Pipe Fittings, Flanges & Fasteners.</li>
                                    <li>Custom Fabricated Components designed as per client requirements.</li>
                                </ul>
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
                    For inquiries, pricing, or customized Aluminium 6061-T6 solutions, <strong>Moksh Tubes & Fittings
                        LLP</strong> your reliable partner in aluminium alloys.</p>
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
      "name": "What is Aluminium Alloy 6061-T6 and why is it widely used?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Aluminium Alloy 6061-T6 is a heat treated, high strength aluminum alloy known for its excellent corrosion resistance, weldability, and machinability. The T6 temper means it has been solution heat treated and artificially aged, providing superior strength, hardness, and durability, making it one of the most versatile aluminum grades for industrial applications."
      }
    },
    {
      "@type": "Question",
      "name": "What are the main applications of Aluminium 6061-T6?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Aluminium 6061-T6 is used in aerospace, automotive, marine, construction, electronics, and sports equipment industries for its strength, corrosion resistance, and lightweight properties."
      }
    },
    {
      "@type": "Question",
      "name": "What are the advantages of Aluminium 6061-T6 over other alloys?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "It offers excellent strength to weight ratio, high corrosion resistance, good weldability, durability, and suitability for anodizing or surface treatments."
      }
    },
    {
      "@type": "Question",
      "name": "Is Aluminium 6061-T6 suitable for marine and aerospace applications?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, Aluminium 6061-T6 is ideal for marine and aerospace applications due to its lightweight, strength, and corrosion resistance, used in boat hulls, aircraft frames, and structural components."
      }
    },
    {
      "@type": "Question",
      "name": "What Aluminium 6061-T6 products are available at Moksh Tubes & Fittings LLP?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Moksh Tubes & Fittings LLP supplies Aluminium 6061-T6 sheets, plates, coils, strips, pipes, tubes, bars, rods, pipe fittings, flanges, fasteners, and custom fabricated components."
      }
    }
  ]
}
@endverbatim
</script>
@endsection
