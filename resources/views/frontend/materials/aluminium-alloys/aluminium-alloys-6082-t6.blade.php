@extends('layouts.master')

@section('title', 'Aluminium Alloy 6082 T6 | Structural Grade Aluminium')

@section('meta_description',
    'Aluminium 6082 T6 – strong, corrosion resistant alloy ideal for structural, transport, and
    heavy-duty engineering applications.')

@section('meta_keywords',
    'Aluminium Alloy 6082 T6, Structural Grade Aluminium, Aluminium 6082 T6 Pipes, Aluminium 6082
    T6 Tubes, Aluminium 6082 T6 Sheets, High Strength Aluminium, Corrosion Resistant Aluminium, Structural Aluminium Alloys,
    Transport Industry Aluminium, Industrial Aluminium Grades')
@section('og_image', asset('assets/images/aluminium-alloys/aluminium-alloys-6082-t6.webp'))
@section('og_type', 'article')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area"
        style="background-image: url(/assets/images/aluminium-alloys/aluminium-alloys-6082-t6.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Aluminium 6082 T6 <br> Structural Grade Corrosion-Resistant Alloy</h1>

                    <!-- Add your extra content here -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Aluminium Alloy 6082-T6 is a medium-strength heat-treatable aluminium alloy known for its excellent
                        corrosion resistance, high strength, good weldability, and superior machinability. Below is the
                        complete datasheet including chemical composition, heat treatment, mechanical properties,
                        applications, and pricing.

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
                <h2>Aluminium 6082-T6 | Product Overview</h2>
            </div>

            <h2 class="fw-semibold text-center mb-5" style="color: #db7227;">
                Introduction To Aluminium 6082
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/aluminium-alloys/aluminium-alloys-6082-t6.webp') }}"
                        alt="Aluminium 6082" class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a manufacturer, supplier,
                            exporter, importer, and stockist of<strong class="text-black"> Aluminium Alloy 6082-T6
                                <a href="{{ route('products') }}">products</a></strong> including plates, sheets,<a
                                href="{{ route('products.pipes-tubes') }}"> tubes</a>,
                            bars, rods, and extrusions.
                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">Aluminium 6082</strong> is a medium-strength alloy in the 6000
                            series, known for its excellent corrosion resistance, good machinability, and superior
                            mechanical properties. The T6 temper refers to solution heat-treated and artificially aged
                            condition, providing enhanced strength and durability. 6082-T6 is widely used in structural
                            applications and marine environments, especially in Europe, where it is preferred for structural
                            and transport sectors.
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Alluminium Alloy 6083 T6 Datasheet</h3>
            <p class="mb-3">
                Get the complete Alluminium Alloy 6083 T6 datasheet with chemical composition,
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


    <!-- ================= ALUMINIUM 6082-T6 SPECIFICATIONS ================= -->
    <section class="sec-padd-top" id="specification">
        <div class="container">
            <div class="section-title center">
                <h2>Aluminium 6082-T6 Specifications (AA6082 / UNS A96082)</h2>
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
                            <td>AA 6082 / 6082-T6 / UNS A96082</td>
                        </tr>
                         <tr class="t-row">
                            <td>Type</td>
                            <td>Heat-treatable wrought aluminium alloy</td>
                        </tr>
                         <tr class="t-row">
                            <td>Typical Chemical Composition</td>
                            <td>Si 0.7–1.3%, Mg 0.6–1.2%, Mn 0.4–1.0%</td>
                        </tr>
                         <tr class="t-row">
                            <td>Conditions</td>
                            <td>O, T4, T5, T6</td>
                        </tr>
                         <tr class="t-row">
                            <td>Heat Treatment</td>
                            <td>Solution Heat Treatment + Artificial Aging</td>
                        </tr>
                         <tr class="t-row">
                            <td>Testing</td>
                            <td>Tensile, Hardness, Chemical, UT (on request)</td>
                        </tr>
                         <tr class="t-row">
                            <td>Certification</td>
                            <td>EN 10204 3.1 / 3.2 (MTC Available)</td>
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
                <h2>Chemical Composition – Aluminium Alloy 6082-T6</h2>
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
                            <td>0.7 – 1.3</td>
                        </tr>
                         <tr class="t-row">
                            <td>Magnesium (Mg)</td>
                            <td>0.6 – 1.2</td>
                        </tr>
                         <tr class="t-row">
                            <td>Manganese (Mn)</td>
                            <td>0.4 – 1.0</td>
                        </tr>
                         <tr class="t-row">
                            <td>Iron (Fe)</td>
                            <td>0.5 max</td>
                        </tr>
                         <tr class="t-row">
                            <td>Copper (Cu)</td>
                            <td>0.1 max</td>
                        </tr>
                         <tr class="t-row">
                            <td>Chromium (Cr)</td>
                            <td>0.25 – 0.45</td>
                        </tr>
                         <tr class="t-row">
                            <td>Zinc (Zn)</td>
                            <td>0.2 max</td>
                        </tr>
                         <tr class="t-row">
                            <td>Titanium (Ti)</td>
                            <td>0.1 max</td>
                        </tr>
                         <tr class="t-row">
                            <td>Aluminium (Al)</td>
                            <td>Balance</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="text-center mt-3">
                6082-T6 is often referred to as the structural aluminium alloy due to its superior strength.
            </p>
        </div>
    </section>

    <!-- ================= PHYSICAL PROPERTIES ================= -->
    <section class="sec-padd-top sec-padd-bottom bg-light" id="properties">
        <div class="container">
            <div class="section-title center">
                <h2>Physical Properties – Aluminium 6082-T6</h2>
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
                            <td>0.098 lb/in³</td>
                            <td>2.70 g/cm³</td>
                        </tr>
                         <tr class="t-row">
                            <td>Melting Range</td>
                            <td>1070–1220 °F</td>
                            <td>575–660 °C</td>
                        </tr>
                         <tr class="t-row">
                            <td>Modulus of Elasticity</td>
                            <td>10 × 10³ ksi</td>
                            <td>69 GPa</td>
                        </tr>
                         <tr class="t-row">
                            <td>Thermal Conductivity</td>
                            <td>—</td>
                            <td>165 W/m·K</td>
                        </tr>
                         <tr class="t-row">
                            <td>Electrical Conductivity</td>
                            <td>30% IACS</td>
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
                <h2>Heat Treatment – Aluminium Alloy 6082-T6</h2>
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
                            <td>Prepares alloy for T6 aging</td>
                        </tr>
                         <tr class="t-row">
                            <td>Artificial Aging (T6)</td>
                            <td>170 – 185°C</td>
                            <td>Air cool</td>
                            <td>Maximum strength by precipitation hardening</td>
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
                            <td>Reduces residual stresses</td>
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
                <h2>Mechanical Properties – Aluminium 6082-T6</h2>
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
                            <th>Sheet (T6)</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr class="t-row">
                            <td>Tensile Strength (MPa)</td>
                            <td>115 – 165</td>
                            <td>240 – 310</td>
                            <td>260 – 325</td>
                            <td>205 – 303</td>
                            <td>310 – 380</td>
                        </tr>
                         <tr class="t-row">
                            <td>Yield Strength (MPa)</td>
                            <td>70 – 100</td>
                            <td>210 – 275</td>
                            <td>235 – 290</td>
                            <td>170 – 260</td>
                            <td>275 – 345</td>
                        </tr>
                         <tr class="t-row">
                            <td>Elongation (%)</td>
                            <td>12 – 20</td>
                            <td>6 – 10</td>
                            <td>5 – 10</td>
                            <td>8 – 12</td>
                            <td>8 – 12</td>
                        </tr>
                         <tr class="t-row">
                            <td>Brinell Hardness</td>
                            <td>45 – 60 HB</td>
                            <td>80 – 95 HB</td>
                            <td>85 – 100 HB</td>
                            <td>70 – 90 HB</td>
                            <td>95 – 100 HB</td>
                        </tr>
                         <tr class="t-row">
                            <td>Rockwell Hardness</td>
                            <td>25 – 35 B</td>
                            <td>40 – 55 B</td>
                            <td>45 – 60 B</td>
                            <td>35 – 50 B</td>
                            <td>60 – 65 B</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="text-center mt-3">
                6082-T6 provides the highest strength of all 6000-series extruded aluminium alloys.
            </p>
        </div>
    </section>

    <!-- ================= AVAILABLE FORMS ================= -->
    <section class="sec-padd-top sec-padd-bottom bg-light" id="related grades">
        <div class="container">
            <div class="section-title center">
                <h2>Available Forms & Size Range – Aluminium 6082-T6</h2>
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
                            <td>Extruded Bars & Rods</td>
                            <td>6 mm – 300 mm</td>
                        </tr>
                         <tr class="t-row">
                            <td>Extruded Tubes & Profiles</td>
                            <td>Custom shapes available</td>
                        </tr>
                         <tr class="t-row">
                            <td>Plates & Sheets</td>
                            <td>2 mm – 200 mm</td>
                        </tr>
                         <tr class="t-row">
                            <td>Coils & Strips</td>
                            <td>0.5 mm – 10 mm</td>
                        </tr>
                         <tr class="t-row">
                            <td>Custom Fabricated Components</td>
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
                <h2>International Standards & Equivalent Grades – Aluminium 6082-T6</h2>
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
                            <td>BS EN</td>
                            <td>755-2</td>
                        </tr>
                         <tr class="t-row">
                            <td>ASTM</td>
                            <td>B221 (Extrusions)</td>
                        </tr>
                         <tr class="t-row">
                            <td>ISO</td>
                            <td>6361</td>
                        </tr>
                         <tr class="t-row">
                            <td>EN</td>
                            <td>AW-6082</td>
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
                        <strong class="text-dark">Aluminium 6082-T6</strong> is commonly supplied as:
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
                        We supply Aluminium 6082-T6 materials in accordance with the most stringent industry standards: </p>
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
                        <h5>High strength and good corrosion resistance</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Excellent machinability and weldability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Good fatigue resistance and toughness</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Suitable for structural and transport applications</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Good surface finish and anodizing capability</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Aluminium 6082-T6</h2>
                <p class="text-center pb-3"><strong class="text-dark">Aluminium 6082-T6</strong> is widely used for its
                    high strength, good corrosion resistance, and weldability in:
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Structural Applications</h5>
                        <p>Automotive and aerospace parts, trailers, and vehicle frames due to its lightweight and
                            durability.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Marine Industry</h5>
                        <p>Boat hulls, decks, and marine fittings exposed to saltwater environments.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>General Engineering</h5>
                        <p>Machinery parts, pipelines, and frames requiring strength and corrosion resistance.
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


    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container text-center">
            <div class="section-title center">
                <h2>WHY CHOOSE US?</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-award-fill"></i></div>
                        <h5>Reliable supplier of high-grade Aluminium 6082-T6 products </h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Wide range of stock and custom extrusion capabilities</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Commitment to quality and international standards</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Technical support and customer-focused service</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Timely deliveries and competitive pricing</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="price" class="sec-padd-top sec-padd-bottom bg-light py-5">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h2>Aluminium Alloy 6082-T6 Price per kg in India</h2>
            </div>

            <p class="text-center fs-5">
                <strong>Typical Range:</strong> ₹320 – ₹500 per kg
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
                                    What is Aluminium Alloy 6082-T6 used for?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Aluminium 6082-T6 is widely used in structural, marine, automotive, and aerospace
                                    applications due to its high strength, excellent corrosion resistance, and good
                                    machinability.
                                    Common uses include bridges, vehicle frames, boat hulls, cranes, and heavy duty
                                    equipment.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>
                                    What are the advantages of Aluminium 6082-T6?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    The main advantages of Aluminium 6082-T6 are its high tensile strength, superior
                                    corrosion resistance, excellent weldability, and good fatigue performance.
                                    It also offers a good surface finish for anodizing, making it suitable for both
                                    structural and decorative purposes.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>
                                    How strong is Aluminium 6082-T6 compared to other aluminium alloys?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Aluminium 6082-T6 is considered the strongest alloy in the 6000 series, with a tensile
                                    strength of 310–380 MPa and a yield strength of 275–345 MPa.
                                    It is stronger than 6061 and offers better machinability, making it a preferred choice
                                    in engineering and transport industries.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>
                                    Can Aluminium 6082-T6 be welded and machined easily?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Yes. Aluminium 6082-T6 offers excellent weldability with common welding techniques such
                                    as MIG and TIG.
                                    It also has superior machinability compared to many other alloys, making it ideal for
                                    precision engineering and custom fabrication.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>
                                    Where can I buy high-quality Aluminium 6082-T6 products in India?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    You can purchase premium quality Aluminium 6082-T6 sheets, plates, tubes, pipes, bars,
                                    and extrusions from
                                    <strong>Moksh Tubes & Fittings LLP</strong>, a leading manufacturer, supplier, exporter,
                                    and stockist in India.
                                    The company provides custom solutions, international quality standards, and timely
                                    deliveries.
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
                    For inquiries or to request a quote for Aluminium Alloy 6082-T6 products, <strong>Moksh Tubes & Fittings
                        LLP</strong> your trusted partner for premium aluminium materials</p>
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
      "name": "What is Aluminium Alloy 6082-T6 used for?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Aluminium 6082-T6 is widely used in structural, marine, automotive, and aerospace applications due to its high strength, excellent corrosion resistance, and good machinability. Common uses include bridges, vehicle frames, boat hulls, cranes, and heavy-duty equipment."
      }
    },
    {
      "@type": "Question",
      "name": "What are the advantages of Aluminium 6082-T6?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The main advantages of Aluminium 6082-T6 are its high tensile strength, superior corrosion resistance, excellent weldability, and good fatigue performance. It also offers a good surface finish for anodizing, making it suitable for both structural and decorative purposes."
      }
    },
    {
      "@type": "Question",
      "name": "How strong is Aluminium 6082-T6 compared to other aluminium alloys?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Aluminium 6082-T6 is considered the strongest alloy in the 6000 series, with a tensile strength of 310–380 MPa and a yield strength of 275–345 MPa. It is stronger than 6061 and offers better machinability, making it a preferred choice in engineering and transport industries."
      }
    },
    {
      "@type": "Question",
      "name": "Can Aluminium 6082-T6 be welded and machined easily?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Aluminium 6082-T6 offers excellent weldability with common welding techniques such as MIG and TIG. It also has superior machinability compared to many other alloys, making it ideal for precision engineering and custom fabrication."
      }
    },
    {
      "@type": "Question",
      "name": "Where can I buy high-quality Aluminium 6082-T6 products in India?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You can purchase premium quality Aluminium 6082-T6 sheets, plates, tubes, pipes, bars, and extrusions from Moksh Tubes & Fittings LLP, a leading manufacturer, supplier, exporter, and stockist in India. The company provides custom solutions, international quality standards, and timely deliveries."
      }
    }
  ]
}
@endverbatim
</script>
@endsection
