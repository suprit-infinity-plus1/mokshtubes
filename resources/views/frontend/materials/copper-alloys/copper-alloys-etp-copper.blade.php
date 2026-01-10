@extends('layouts.master')

@section('title', 'Electrolytic Tough Pitch Copper | Industrial Grade Copper')
@section('meta_description',
    'Electrolytic Tough Pitch Copper with excellent conductivity and mechanical properties for
    industrial use.')
@section('meta_keywords',
    'Electrolytic Tough Pitch Copper, ETP Copper, industrial grade copper, high conductivity
    copper, mechanical properties copper, durable copper alloy')


@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area"
        style="background-image: url(/assets/images/copper-alloys/copper-alloys-etp-copper.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Copper Alloys Electrolytic Tough Pitch <br>(ETP Copper)</h1>


                    <!-- Add your extra content here -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Electrolytic Tough Pitch (ETP Copper) is a high-conductivity copper alloy widely used for electrical
                        and industrial applications. It offers excellent electrical and thermal conductivity, good
                        ductility, and reliable corrosion resistance, making it ideal for electrical wiring, busbars,
                        transformers, heat exchangers, and components where efficient current flow and dependable
                        performance are essential.

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
                <h2>Copper Alloys Electrolytic Tough Pitch | Product Overview</h2>
            </div>

            <h2 class="fw-semibold text-center mb-5" style="color: #db7227;">
                Introduction To Copper Alloys ETP Copper / C11000 / CW004A
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/copper-alloys/copper-alloys-etp-copper.webp') }}"alt="Copper Alloys EC Copper"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> proudly manufactures, supplies,
                            exports, imports, and stocks a comprehensive range of<strong class="text-black"> ETP Copper
                                (Electrolytic Tough Pitch
                                Copper) <a href="{{ route('products') }}">products</a></strong>. Our offerings include Pipes
                            & Tubes, Rods, Flats, Sheets & Plates, Coils,
                            Busbars, Wires, Strips, Foils, Fasteners, and Custom Fabricated Products in ETP Copper.

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black"><a href="{{ route('materials.copper-Alloys') }}">Copper Alloys
                                    ETP Copper</a></strong>, is the most widely used commercial copper grade, known for its
                            exceptional electrical and thermal conductivity. With a minimum copper content of 99.90%, ETP
                            copper is extensively used in electrical, electronic, and industrial applications. It has
                            excellent ductility, corrosion resistance, and workability. This alloy is also suitable for
                            soldering, brazing, and welding under controlled conditions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Copper Alloys Etp Datasheet</h3>
            <p class="mb-3">
                Get the complete Copper Alloys Etp datasheet with chemical composition,
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
    <!-- End Datasheet -->


    <!-- ================= SPECIFICATION ================= -->
    <section class="sec-padd-top" id="specification">
        <div class="container">
            <div class="section-title center">
                <h2>ETP Copper Specifications (C11000 / CW004A)</h2>
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
                            <td>C11000 / CW004A / ETP Copper</td>
                        </tr>
                         <tr class="t-row">
                            <td>Type</td>
                            <td>High-Conductivity Electrolytic Tough Pitch Copper</td>
                        </tr>
                         <tr class="t-row">
                            <td>Typical Chemical Composition</td>
                            <td>Cu 99.90% min (incl. Ag), O 0.02–0.04%, Ag ≥ 0.002%, Impurities ≤ 0.03%</td>
                        </tr>
                         <tr class="t-row">
                            <td>Conditions Available</td>
                            <td>Annealed, Half-Hard, Hard, Extra-Hard, Hot Rolled, Cold Drawn</td>
                        </tr>
                         <tr class="t-row">
                            <td>Heat Treatment</td>
                            <td>Stress Relieving, Annealing</td>
                        </tr>
                         <tr class="t-row">
                            <td>Testing</td>
                            <td>Tensile, Hardness, Conductivity, Chemical, PMI, UT (on request)</td>
                        </tr>
                         <tr class="t-row">
                            <td>Certification</td>
                            <td>EN 10204 3.1 / 3.2 (Mill Test Certificate)</td>
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
                <h2>Chemical Composition – ETP Copper (C11000)</h2>
            </div>

            <div class="table-responsive col-lg-8 mx-auto">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                         <tr class="t-row">
                            <th>Element</th>
                            <th>Composition (% by weight)</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr class="t-row">
                            <td>Copper (Cu)</td>
                            <td>99.90 min (including Ag)</td>
                        </tr>
                         <tr class="t-row">
                            <td>Oxygen (O)</td>
                            <td>0.02 – 0.04</td>
                        </tr>
                         <tr class="t-row">
                            <td>Silver (Ag)</td>
                            <td>0.002 min</td>
                        </tr>
                         <tr class="t-row">
                            <td>Others</td>
                            <td>0.03 max (total)</td>
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
                <h2>Physical Properties – ETP Copper</h2>
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
                            <td>0.323 lb/in³</td>
                            <td>8.94 g/cm³</td>
                        </tr>
                         <tr class="t-row">
                            <td>Melting Point</td>
                            <td>1981 °F</td>
                            <td>1083 °C</td>
                        </tr>
                         <tr class="t-row">
                            <td>Thermal Conductivity</td>
                            <td>223 Btu/ft·hr·°F</td>
                            <td>386 W/m·K</td>
                        </tr>
                         <tr class="t-row">
                            <td>Electrical Conductivity</td>
                            <td>100% IACS</td>
                            <td>≥ 58 MS/m</td>
                        </tr>
                         <tr class="t-row">
                            <td>Coefficient of Expansion</td>
                            <td>9.8 × 10⁻⁶ /°F</td>
                            <td>17.6 × 10⁻⁶ /°C</td>
                        </tr>
                         <tr class="t-row">
                            <td>Modulus of Elasticity</td>
                            <td>17 × 10³ ksi</td>
                            <td>117 GPa</td>
                        </tr>
                         <tr class="t-row">
                            <td>Specific Heat Capacity</td>
                            <td>0.092 Btu/lb·°F</td>
                            <td>0.385 J/g·K</td>
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
                <h2>Heat Treatment – ETP Copper (C11000 / CW004A)</h2>
            </div>

            <div class="table-responsive col-lg-8 mx-auto">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                         <tr class="t-row">
                            <th>Heat Treatment Process</th>
                            <th>Temperature Range</th>
                            <th>Cooling / Procedure</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr class="t-row">
                            <td>Annealing (Soft Anneal)</td>
                            <td>200 – 400 °C</td>
                            <td>Furnace cool for max ductility</td>
                        </tr>
                         <tr class="t-row">
                            <td>Stress Relieving</td>
                            <td>150 – 250 °C</td>
                            <td>Hold 1–2 hrs, air cool</td>
                        </tr>
                         <tr class="t-row">
                            <td>Hot Working</td>
                            <td>700 – 900 °C</td>
                            <td>Forging / extrusion</td>
                        </tr>
                         <tr class="t-row">
                            <td>Cold Work + Stress Relief</td>
                            <td>—</td>
                            <td>Increases strength & conductivity</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="text-center mt-3">
                ETP Copper cannot be hardened by heat treatment; strength is achieved by cold working only.
            </p>
        </div>
    </section>

    <!-- ================= MECHANICAL PROPERTIES ================= -->
    <section class="sec-padd-top sec-padd-bottom" id="mechanical">
        <div class="container">
            <div class="section-title center">
                <h2>Mechanical Properties – ETP Copper</h2>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                         <tr class="t-row">
                            <th>Property</th>
                            <th>Annealed</th>
                            <th>Half-Hard</th>
                            <th>Hard</th>
                            <th>Extra-Hard</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr class="t-row">
                            <td>Tensile Strength</td>
                            <td>220–260 MPa</td>
                            <td>240–300 MPa</td>
                            <td>290–360 MPa</td>
                            <td>≥ 360 MPa</td>
                        </tr>
                         <tr class="t-row">
                            <td>Yield Strength (0.2%)</td>
                            <td>≤ 100 MPa</td>
                            <td>≥ 180 MPa</td>
                            <td>≥ 250 MPa</td>
                            <td>≥ 320 MPa</td>
                        </tr>
                         <tr class="t-row">
                            <td>Elongation</td>
                            <td>≥ 33%</td>
                            <td>≥ 8%</td>
                            <td>≥ 4%</td>
                            <td>≥ 2%</td>
                        </tr>
                         <tr class="t-row">
                            <td>Hardness (HB)</td>
                            <td>45–65</td>
                            <td>65–95</td>
                            <td>90–110</td>
                            <td>110–120</td>
                        </tr>
                         <tr class="t-row">
                            <td>Electrical Conductivity</td>
                            <td>≥ 100% IACS</td>
                            <td>≥ 98% IACS</td>
                            <td>≥ 97% IACS</td>
                            <td>≥ 97% IACS</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- ================= AVAILABLE FORMS ================= -->
    <section class="sec-padd-top sec-padd-bottom bg-light" id="related grades">
        <div class="container">
            <div class="section-title center">
                <h2>Available Forms & Size Range – ETP Copper</h2>
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
                            <td>Round Bars / Rods</td>
                            <td>4 – 200 mm diameter</td>
                        </tr>
                         <tr class="t-row">
                            <td>Flats, Busbars & Strips</td>
                            <td>Thickness 2 – 60 mm; Width 10 – 300 mm</td>
                        </tr>
                         <tr class="t-row">
                            <td>Sheets & Plates</td>
                            <td>0.5 – 80 mm (Width 600 – 1500 mm)</td>
                        </tr>
                         <tr class="t-row">
                            <td>Coils & Foils</td>
                            <td>0.05 – 6 mm thickness</td>
                        </tr>
                         <tr class="t-row">
                            <td>Pipes & Tubes</td>
                            <td>OD 6 – 108 mm; WT 0.5 – 10 mm</td>
                        </tr>
                         <tr class="t-row">
                            <td>Wires</td>
                            <td>0.1 – 25 mm (Bare & Tinned)</td>
                        </tr>
                         <tr class="t-row">
                            <td>Custom Components</td>
                            <td>Machined as per drawing</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- ================= INTERNATIONAL STANDARDS ================= -->
    <section class="sec-padd-top sec-padd-bottom" id="international">
        <div class="container">
            <div class="section-title center">
                <h2>International Standards & Equivalent Grades – ETP Copper</h2>
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
                            <td>UNS</td>
                            <td>C11000</td>
                        </tr>
                         <tr class="t-row">
                            <td>EN</td>
                            <td>CW004A</td>
                        </tr>
                         <tr class="t-row">
                            <td>BS</td>
                            <td>C101 / C110</td>
                        </tr>
                         <tr class="t-row">
                            <td>ASTM</td>
                            <td>B152, B187, B152M, B88</td>
                        </tr>
                         <tr class="t-row">
                            <td>JIS</td>
                            <td>C1100</td>
                        </tr>
                         <tr class="t-row">
                            <td>ISO</td>
                            <td>Cu-ETP</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- ================= PRODUCTS IN COPPER ALLOYS ETP COPPER ================= -->


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
                <h2>Products in Copper Alloys ETP Copper</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Copper Alloys ETP Copper</strong> is available in:
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
                        Copper Alloys ETP Copper products are produced to the following global standards:
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
                        <h5>ETP Copper provides nearly 100% IACS, making it ideal for high-performance electrical
                            applications.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Efficiently transfers heat in cooling systems, heat exchangers, and radiators.
                        </h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Easily formed, drawn, or machined for intricate parts.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Performs reliably in atmospheric, industrial, and freshwater environments.</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Suitable for sensitive electronic and explosive environments.</h5>
                    </div>
                </div>
            </div>
    </section>


    <section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Copper Alloys ETP Copper</h2>
                <p class="text-center pb-3"><strong class="text-dark">Copper Alloys ETP Copper</strong> is the industry
                    standard for electrical and electronic components due to its unmatched conductivity and ease of
                    fabrication. Common applications include:</p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Electrical Wiring & Busbars</h5>
                        <p>Used in power distribution boards, panels, switchgear, and transformers.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Electronics & Circuitry</h5>
                        <p>Printed circuit boards (PCBs), terminals, lead frames, and connectors.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Telecommunication & Data Transmission</h5>
                        <p>Cables, grounding systems, and RF/microwave shielding.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Power Generation & Renewable Energy</h5>
                        <p>Wind turbines, solar panels, and electrical generators.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>HVAC & Refrigeration</h5>
                        <p>Heat exchangers, condenser coils, and refrigeration tubing.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Architecture & Decorative Applications</h5>
                        <p>Roofing, cladding, lightning arrestors, and ornaments.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-strategies"></i></div>
                        <h5>Automotive & Transportation</h5>
                        <p>Battery cables, alternator windings, and electric vehicle components.</p>
                    </div>
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
                        <h5>Experts in Pure Copper & Conductive Alloys</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>State-of-the-art production and processing facilities</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Reliable supply of standard and custom sizes</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Strict quality checks and compliance with global standards</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Serving clients across electrical, automotive, telecom, and energy sectors</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="price" class="sec-padd-top sec-padd-bottom bg-light py-5">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h2>ETP Copper Price per kg in India</h2>
            </div>

            <p class="text-center fs-5">
                <strong>Typical Range:</strong> ₹750 – ₹1,200 per kg
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
                                <h4>What is ETP Copper and why is it widely used in industries?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    ETP Copper, also known as Electrolytic Tough Pitch Copper, is the most commonly used
                                    commercial copper grade containing a minimum of 99.90% copper.
                                    It is well-known for its excellent electrical and thermal conductivity, ductility, and
                                    corrosion resistance.
                                    With nearly 100% IACS conductivity, ETP Copper is widely used in electrical, electronic,
                                    and industrial sectors where efficiency and reliability are critical.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the key benefits of using ETP Copper?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    The main advantages of ETP Copper include superior electrical and thermal conductivity,
                                    easy formability, and excellent performance in atmospheric and industrial environments.
                                    It is suitable for welding, brazing, and soldering under controlled conditions and
                                    offers consistent reliability in electrical wiring, power systems, and electronic
                                    components.
                                    Its versatility also makes it useful in cooling systems, architecture, and automotive
                                    applications.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the main applications of ETP Copper in different sectors?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    ETP Copper is widely used in electrical wiring, busbars, power distribution panels,
                                    transformers, and switchgear due to its high conductivity.
                                    In electronics, it is used for PCBs, connectors, and lead frames, while in
                                    telecommunications it supports grounding systems, RF shielding, and data transmission
                                    cables.
                                    Additionally, it is applied in renewable energy systems, HVAC, refrigeration,
                                    architectural projects, and the automotive industry, especially in electric vehicles and
                                    battery components.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What ETP Copper products does MOKSH TUBES & FITTINGS LLP provide?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP manufactures and supplies a wide range of ETP Copper products
                                    including pipes, tubes, rods, flats, coils, sheets, plates, busbars, strips, foils,
                                    fasteners, flanges, pipe fittings, and custom-fabricated components.
                                    All products are produced to meet global quality standards and can be supplied in both
                                    standard and customized sizes to suit the requirements of various industries.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose MOKSH TUBES & FITTINGS LLP for ETP Copper materials?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP is a trusted supplier and exporter of ETP Copper with
                                    advanced production facilities and strict quality control processes.
                                    The company offers reliable supply, technical support, and the flexibility to deliver
                                    both standard and customized products worldwide.
                                    With a strong reputation in electrical, automotive, telecom, and energy sectors, MOKSH
                                    TUBES & FITTINGS LLP ensures high quality ETP Copper solutions for global clients.
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
                    contact <strong>Moksh Tubes & Fittings LLP</strong> — your trusted partner for high-conductivity copper
                    solutions.</p>
                <!-- Call button -->
                <a href="javascript:void(0);" class="contact-cta-btn" data-bs-toggle="modal"
                    data-bs-target="#contactFormModal">
                    Get in Touch
                </a>
            </div>
        </div>
    </section>





@endsection
<!-- FAQ Schema Markup -->
@section('jsscripts')
    <script type="application/ld+json">
    @verbatim
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is ETP Copper and why is it widely used in industries?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "ETP Copper, also known as Electrolytic Tough Pitch Copper, is the most commonly used commercial copper grade containing a minimum of 99.90% copper. It is well-known for its excellent electrical and thermal conductivity, ductility, and corrosion resistance. With nearly 100% IACS conductivity, ETP Copper is widely used in electrical, electronic, and industrial sectors where efficiency and reliability are critical."
      }
    },
    {
      "@type": "Question",
      "name": "What are the key benefits of using ETP Copper?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The main advantages of ETP Copper include superior electrical and thermal conductivity, easy formability, and excellent performance in atmospheric and industrial environments. It is suitable for welding, brazing, and soldering under controlled conditions and offers consistent reliability in electrical wiring, power systems, and electronic components. Its versatility also makes it useful in cooling systems, architecture, and automotive applications."
      }
    },
    {
      "@type": "Question",
      "name": "What are the main applications of ETP Copper in different sectors?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "ETP Copper is widely used in electrical wiring, busbars, power distribution panels, transformers, and switchgear due to its high conductivity. In electronics, it is used for PCBs, connectors, and lead frames, while in telecommunications it supports grounding systems, RF shielding, and data transmission cables. Additionally, it is applied in renewable energy systems, HVAC, refrigeration, architectural projects, and the automotive industry, especially in electric vehicles and battery components."
      }
    },
    {
      "@type": "Question",
      "name": "What ETP Copper products does MOKSH TUBES & FITTINGS LLP provide?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "MOKSH TUBES & FITTINGS LLP manufactures and supplies a wide range of ETP Copper products including pipes, tubes, rods, flats, coils, sheets, plates, busbars, strips, foils, fasteners, flanges, pipe fittings, and custom-fabricated components. All products are produced to meet global quality standards and can be supplied in both standard and customized sizes to suit the requirements of various industries."
      }
    },
    {
      "@type": "Question",
      "name": "Why choose MOKSH TUBES & FITTINGS LLP for ETP Copper materials?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "MOKSH TUBES & FITTINGS LLP is a trusted supplier and exporter of ETP Copper with advanced production facilities and strict quality control processes. The company offers reliable supply, technical support, and the flexibility to deliver both standard and customized products worldwide. With a strong reputation in electrical, automotive, telecom, and energy sectors, MOKSH TUBES & FITTINGS LLP ensures high quality ETP Copper solutions for global clients."
      }
    }
  ]
}
@endverbatim
</script>
@endsection
