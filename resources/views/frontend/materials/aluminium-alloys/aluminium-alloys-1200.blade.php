@extends('layouts.master')

@section('title', 'Aluminium Alloy 1200 | Pure Aluminium Grade')

@section('meta_description',
    'Aluminium 1200 – high purity alloy with superior corrosion resistance and excellent
    electrical conductivity for industrial applications.')

@section('meta_keywords',
    'Aluminium Alloy 1200, Pure Aluminium Grade, Aluminium 1200 Pipes, Aluminium 1200 Tubes,
    Aluminium 1200 Sheets, Corrosion Resistant Aluminium, High Purity Aluminium, Electrical Conductive Aluminium, Industrial
    Aluminium Grades, Commercial Aluminium Alloys')

@section('og_image', asset('assets/images/aluminium-alloys/aluminium-alloys-1200.webp'))
@section('og_type', 'article')


@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area"
        style="background-image: url(/assets/images/aluminium-alloys/aluminium-alloys-1200.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Aluminium 1200 <br> Pure Corrosion-Resistant Aluminium Grade</h1>

                    <!-- Add your extra content here -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Aluminium Alloy 1200 (AA1200 / UNS A91200) is a commercially pure aluminium grade known for
                        excellent corrosion resistance, high ductility, good conductivity, and outstanding formability.
                        Below is the complete datasheet including chemical composition, technical properties, mechanical
                        values, applications, and pricing.
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
                <h2>Aluminium 1200 | Product Overview</h2>
            </div>

            <h2 class="fw-semibold text-center mb-5" style="color: #db7227;">
                Introduction To Aluminium 1200
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/aluminium-alloys/aluminium-alloys-1200.webp') }}" alt="Aluminium 1200"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a supplier, exporter,
                            importer, and stockist of<strong class="text-black"> Aluminium Alloy 1200
                                <a href="{{ route('products') }}">products</a></strong> including sheets,
                            plates, coils, <a href="{{ route('products.pipes-tubes') }}"> pipes</a>, tubes, bars, rods, and
                            custom fabrications.

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">Aluminium 1200</strong> is a commercially pure aluminum grade with
                            excellent corrosion resistance, high ductility, and good thermal and electrical conductivity. It
                            offers excellent workability and formability but has relatively low strength compared to other
                            aluminum alloys. This alloy is widely used in applications that require good corrosion
                            resistance and high conductivity combined with moderate strength.
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Alluminium Alloy 1200 Datasheet</h3>
            <p class="mb-3">
                Get the complete Alluminium Alloy 1200 datasheet with chemical composition,
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



    <!-- ================= SPECIFICATION ================= -->
    <section class="sec-padd-top" id="specification">
        <div class="container">
            <div class="section-title center">
                <h2>Aluminium Alloy 1200 Specifications (AA1200)</h2>
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
                            <td>Aluminium 1200 / AA1200 / UNS A91200</td>
                        </tr>
                         <tr class="t-row">
                            <td>Type</td>
                            <td>Commercially Pure Aluminium</td>
                        </tr>
                         <tr class="t-row">
                            <td>Chemical Composition</td>
                            <td>Al ≥ 99%, Cu ≤ 0.05%, Fe ≤ 0.30%, Si ≤ 0.10%</td>
                        </tr>
                         <tr class="t-row">
                            <td>Conditions</td>
                            <td>O, H12, H14, H16, H18</td>
                        </tr>
                         <tr class="t-row">
                            <td>Processes</td>
                            <td>Hot Rolled, Cold Rolled, Annealed</td>
                        </tr>
                         <tr class="t-row">
                            <td>Testing</td>
                            <td>Tensile, Hardness, Chemical</td>
                        </tr>
                         <tr class="t-row">
                            <td>Certification</td>
                            <td>EN 10204 3.1 / 3.2</td>
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
                <h2>Chemical Composition – Aluminium Alloy 1200</h2>
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
                            <td>Aluminium (Al)</td>
                            <td>99.0 min</td>
                        </tr>
                         <tr class="t-row">
                            <td>Copper (Cu)</td>
                            <td>0.05 max</td>
                        </tr>
                         <tr class="t-row">
                            <td>Iron (Fe)</td>
                            <td>0.30 max</td>
                        </tr>
                         <tr class="t-row">
                            <td>Silicon (Si)</td>
                            <td>0.10 max</td>
                        </tr>
                         <tr class="t-row">
                            <td>Manganese (Mn)</td>
                            <td>0.05 max</td>
                        </tr>
                         <tr class="t-row">
                            <td>Zinc (Zn)</td>
                            <td>0.10 max</td>
                        </tr>
                         <tr class="t-row">
                            <td>Titanium (Ti)</td>
                            <td>0.03 max</td>
                        </tr>
                         <tr class="t-row">
                            <td>Others</td>
                            <td>0.05 max each</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="text-center mt-3">
                This composition makes Aluminium 1200 highly corrosion-resistant, ductile, and thermally/electrically
                conductive.
            </p>
        </div>
    </section>

    <!-- ================= PHYSICAL PROPERTIES ================= -->
    <section class="sec-padd-top sec-padd-bottom bg-light" id="properties">
        <div class="container">
            <div class="section-title center">
                <h2>Physical Properties – Aluminium Alloy 1200</h2>
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
                            <td>2.7 g/cm³</td>
                        </tr>
                         <tr class="t-row">
                            <td>Melting Range</td>
                            <td>1220 – 1345 °F</td>
                            <td>660 – 730 °C</td>
                        </tr>
                         <tr class="t-row">
                            <td>Modulus of Elasticity</td>
                            <td>10 × 10³ ksi</td>
                            <td>69 GPa</td>
                        </tr>
                         <tr class="t-row">
                            <td>Thermal Conductivity</td>
                            <td>—</td>
                            <td>220 W/m·K</td>
                        </tr>
                         <tr class="t-row">
                            <td>Electrical Conductivity</td>
                            <td>59% IACS</td>
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
                <h2>Heat Treatment – Aluminium Alloy 1200</h2>
            </div>

            <div class="table-responsive col-lg-10 mx-auto">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                         <tr class="t-row">
                            <th>Heat Treatment Process</th>
                            <th>Temperature Range</th>
                            <th>Cooling Method</th>
                            <th>Purpose / Notes</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr class="t-row">
                            <td>Full Annealing</td>
                            <td>300 – 410 °C</td>
                            <td>Air cool slowly</td>
                            <td>Restores maximum ductility</td>
                        </tr>
                         <tr class="t-row">
                            <td>Process Annealing</td>
                            <td>260 – 340 °C</td>
                            <td>Air cool</td>
                            <td>Improves formability between cold work</td>
                        </tr>
                         <tr class="t-row">
                            <td>Stress Relieving</td>
                            <td>200 – 260 °C</td>
                            <td>Hold 1–2 hrs, air cool</td>
                            <td>Reduces residual stresses</td>
                        </tr>
                         <tr class="t-row">
                            <td>Homogenization</td>
                            <td>450 – 500 °C (max)</td>
                            <td>Controlled furnace / air cool</td>
                            <td>For billets/ingots before hot working</td>
                        </tr>
                         <tr class="t-row">
                            <td>Solution Treatment / Aging</td>
                            <td>Not applicable</td>
                            <td>—</td>
                            <td>AA1200 is non-heat-treatable</td>
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
                <h2>Mechanical Properties – Aluminium Alloy 1200</h2>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                         <tr class="t-row">
                            <th>Property</th>
                            <th>Annealed</th>
                            <th>Hot-Finished</th>
                            <th>Cold-Drawn</th>
                            <th>Hot-Rolled</th>
                            <th>Sheet (H14)</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr class="t-row">
                            <td>Tensile Strength (MPa)</td>
                            <td>85 – 115</td>
                            <td>110 – 140</td>
                            <td>125 – 150</td>
                            <td>105 – 140</td>
                            <td>125 – 150</td>
                        </tr>
                         <tr class="t-row">
                            <td>Yield Strength (MPa)</td>
                            <td>30 – 40</td>
                            <td>40 – 55</td>
                            <td>55 – 70</td>
                            <td>40 – 60</td>
                            <td>55 – 70</td>
                        </tr>
                         <tr class="t-row">
                            <td>Elongation (%)</td>
                            <td>30 – 40</td>
                            <td>20 – 30</td>
                            <td>10 – 20</td>
                            <td>15 – 25</td>
                            <td>10 – 20</td>
                        </tr>
                         <tr class="t-row">
                            <td>Brinell Hardness</td>
                            <td>20 – 30 HB</td>
                            <td>25 – 35 HB</td>
                            <td>30 – 40 HB</td>
                            <td>25 – 35 HB</td>
                            <td>30 – 40 HB</td>
                        </tr>
                         <tr class="t-row">
                            <td>Rockwell Hardness</td>
                            <td>15 – 25 B</td>
                            <td>20 – 30 B</td>
                            <td>25 – 35 B</td>
                            <td>20 – 30 B</td>
                            <td>25 – 35 B</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="text-center mt-3">
                AA1200 is a non-heat-treatable alloy; strength is developed by cold working only.
            </p>
        </div>
    </section>

    <!-- ================= AVAILABLE FORMS ================= -->
    <section class="sec-padd-top sec-padd-bottom bg-light" id="related grades">
        <div class="container">
            <div class="section-title center">
                <h2>Available Forms & Size Range – Aluminium Alloy 1200</h2>
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
                            <td>0.2 mm – 150 mm</td>
                        </tr>
                         <tr class="t-row">
                            <td>Coils & Strips</td>
                            <td>0.2 mm – 6 mm</td>
                        </tr>
                         <tr class="t-row">
                            <td>Foils</td>
                            <td>0.005 mm – 0.5 mm</td>
                        </tr>
                         <tr class="t-row">
                            <td>Round Bars</td>
                            <td>3 mm – 250 mm</td>
                        </tr>
                         <tr class="t-row">
                            <td>Flat, Square, Hex Bars</td>
                            <td>Custom sizes</td>
                        </tr>
                         <tr class="t-row">
                            <td>Pipes & Tubes</td>
                            <td>OD 6 mm – 219 mm</td>
                        </tr>
                         <tr class="t-row">
                            <td>Wire, Rods, Bus Bars</td>
                            <td>As required</td>
                        </tr>
                         <tr class="t-row">
                            <td>Custom Components</td>
                            <td>Per customer drawing</td>
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
                <h2>Industry Standards & Equivalent Designations – Aluminium 1200</h2>
            </div>

            <div class="table-responsive col-lg-8 mx-auto">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                         <tr class="t-row">
                            <th>Standard</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr class="t-row">
                            <td>ASTM B209</td>
                            <td>Sheets & Plates</td>
                        </tr>
                         <tr class="t-row">
                            <td>ASTM B211</td>
                            <td>Bars & Rods</td>
                        </tr>
                         <tr class="t-row">
                            <td>ASTM B210</td>
                            <td>Tubes & Pipes</td>
                        </tr>
                         <tr class="t-row">
                            <td>ISO</td>
                            <td>6361 Series</td>
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
                        <strong class="text-dark">Aluminium 1200</strong> is available in various mill forms:
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
                        We supply Aluminium 1200 materials in accordance with the most stringent industry standards: </p>
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
                        <h5>Excellent corrosion resistance</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>High thermal and electrical conductivity</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Good formability and machinability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Superior weldability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Non-heat treatable alloy with stable properties</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Aluminium 1200</h2>
                <p class="text-center pb-3"><strong class="text-dark">Aluminium 1200</strong> is mainly used in
                    applications requiring excellent corrosion resistance, high formability, and good conductivity,
                    including:
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Electrical Industry</h5>
                        <p>Electrical conductors, cables, and bus bars.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Packaging</h5>
                        <p>Foils, wrapping materials, and cans.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Architectural Applications</h5>
                        <p>Decorative trim, siding, and roofing materials.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Chemical Processing</h5>
                        <p>Cooking utensils and food containers.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Food & Beverage</h5>
                        <p>Cooking utensils and food containers.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>General Fabrication</h5>
                        <p>Signage, reflectors, and ornamental applications.</p>
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
                        <h5>High-quality Aluminium 1200 products meeting global standards
                        </h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Wide stock availability and prompt delivery</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Customized solutions and technical support</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Trusted supplier with consistent product reliability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Commitment to customer satisfaction</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="price" class="sec-padd-top sec-padd-bottom bg-light py-5">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h2>Aluminium 1200 Price per kg in India</h2>
            </div>

            <p class="text-center fs-5">
                <strong>Typical Range:</strong> ₹300 – ₹450 per kg
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
                            <div class="accord-btn ">
                                <h4>
                                    What is Aluminium Alloy 1200 and what are its main characteristics?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Aluminium Alloy 1200 is a commercially pure <a
                                        href="{{ route('materials.aluminium-Alloys') }}">aluminum grade</a> with a minimum
                                    of 99%
                                    aluminum. It is widely known for its excellent corrosion resistance, high ductility, and
                                    good thermal and electrical conductivity. It offers great workability and weldability,
                                    making it ideal for industries that require moderate strength with superior formability.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>
                                    Is Aluminium 1200 heat-treatable?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    No, Aluminium Alloy 1200 is a non heat treatable alloy. Its mechanical strength can be
                                    improved through cold working processes such as rolling, drawing, and forming. This
                                    ensures it retains stable properties across different applications.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>
                                    What are the typical applications of Aluminium 1200?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Aluminium 1200 is used in a wide range of industries such as:
                                </p>
                                <ul>
                                    <li><strong>Electrical</strong>: conductors, bus bars, and cables.</li>
                                    <li><strong>Packaging</strong>: foils, wrapping, and cans.</li>
                                    <li><strong>Architectural</strong>: siding, roofing, and decorative trim.</li>
                                    <li><strong>Food & Beverage</strong>: cooking utensils and food containers.</li>
                                    <li><strong>General Fabrication</strong>: signage, reflectors, and ornamental
                                        components.</li>
                                </ul>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>
                                    What are the advantages of Aluminium 1200 over other alloys?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Key benefits of Aluminium Alloy 1200 include:
                                </p>
                                <ul>
                                    <li>Excellent resistance to corrosion.</li>
                                    <li>Superior electrical & thermal conductivity.</li>
                                    <li>Good machinability and weldability.</li>
                                    <li>High ductility and formability.</li>
                                    <li>Cost effectiveness for mass applications.</li>
                                </ul>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>
                                    What Aluminium 1200 products does Moksh Tubes & Fittings LLP supply?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Moksh Tubes & Fittings LLP offers a wide variety of Aluminium 1200 products including:
                                </p>
                                <ul>
                                    <li>Sheets, Plates, Coils & Strips.</li>
                                    <li>Pipes & Tubes (Seamless, Welded, Heat Exchanger, U-Bend).</li>
                                    <li>Bars & Rods (Round, Hex, Flat, Square).</li>
                                    <li>Pipe Fittings, Flanges, and Fasteners.</li>
                                    <li>Custom Fabricated Components tailored to customer requirements.</li>
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
                    For inquiries, quotes, or customized Aluminium 1200 products, <strong>Moksh Tubes & Fittings
                        LLP</strong> your reliable partner in aluminum alloys.</p>
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
            "name": "What is Aluminium Alloy 1200 and what are its main characteristics?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Aluminium Alloy 1200 is a commercially pure aluminum grade with a minimum of 99% aluminum. It is widely known for its excellent corrosion resistance, high ductility, and good thermal and electrical conductivity. It offers great workability and weldability, making it ideal for industries that require moderate strength with superior formability."
            }
            },
            {
            "@type": "Question",
            "name": "Is Aluminium 1200 heat-treatable?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "No, Aluminium Alloy 1200 is a non heat treatable alloy. Its mechanical strength can be improved through cold working processes such as rolling, drawing, and forming. This ensures it retains stable properties across different applications."
            }
            },
            {
            "@type": "Question",
            "name": "What are the typical applications of Aluminium 1200?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Aluminium 1200 is used in a wide range of industries such as: Electrical: conductors, bus bars, and cables. Packaging: foils, wrapping, and cans. Architectural: siding, roofing, and decorative trim. Food & Beverage: cooking utensils and food containers. General Fabrication: signage, reflectors, and ornamental components."
            }
            },
            {
            "@type": "Question",
            "name": "What are the advantages of Aluminium 1200 over other alloys?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Key benefits of Aluminium Alloy 1200 include: Excellent resistance to corrosion. Superior electrical & thermal conductivity. Good machinability and weldability. High ductility and formability. Cost effectiveness for mass applications."
            }
            },
            {
            "@type": "Question",
            "name": "What Aluminium 1200 products does Moksh Tubes & Fittings LLP supply?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Moksh Tubes & Fittings LLP offers a wide variety of Aluminium 1200 products including: Sheets, Plates, Coils & Strips. Pipes & Tubes (Seamless, Welded, Heat Exchanger, U-Bend). Bars & Rods (Round, Hex, Flat, Square). Pipe Fittings, Flanges, and Fasteners. Custom Fabricated Components tailored to customer requirements."
            }
            }
        ]
        }
    @endverbatim
</script>
@endsection
