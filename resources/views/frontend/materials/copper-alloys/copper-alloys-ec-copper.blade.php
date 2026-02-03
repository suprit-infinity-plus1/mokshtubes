@extends('layouts.master')

@section('title', 'Electrolytic Copper (EC Copper) | High Purity Copper')
@section('meta_description', 'High purity Electrolytic Copper with excellent electrical and thermal conductivity.')
@section('meta_keywords',
    'Electrolytic Copper, EC Copper, high purity copper, electrical conductivity copper, thermal
    conductivity copper, industrial copper')
@section('og_image', asset('assets/images/copper-alloys/copper-alloys-ec-copper.webp'))
@section('og_type', 'article')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area"
        style="background-image: url(/assets/images/copper-alloys/copper-alloys-ec-copper.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Copper Alloys Electrolytic Copper<br> (EC Copper)</h1>


                    <!-- Add your extra content here -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Electrolytic Copper (EC Copper) is a high-purity copper alloy known for its exceptional electrical
                        and thermal conductivity. It offers excellent corrosion resistance, good ductility, and reliable
                        workability, making it ideal for electrical components, conductors, busbars, wiring, and industrial
                        applications where efficient conductivity and consistent performance are critical.

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
                <h2>Copper Alloys Electrolytic Copper | Product Overview</h2>
            </div>

            <h2 class="fw-semibold text-center mb-5" style="color: #db7227;">
                Introduction To Copper Alloys EC Copper / C10100 / CW009A
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/copper-alloys/copper-alloys-ec-copper.webp') }}"alt="Copper Alloys EC Copper"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a prominent manufacturer,
                            supplier, exporter, importer, and stockist of<strong class="text-black"> EC Copper (Electrolytic
                                Copper / C10100 / CW009A)
                                <a href="{{ route('products') }}">products</a></strong>. Our offerings include Wires, Rods,
                            Bars, Sheets, Plates, Pipes, Busbars, Strips,
                            Foils, Coils, and precision-machined parts. We also provide custom and hard-to-find EC Copper
                            solutions to meet your specific industry needs.

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black"><a href="{{ route('materials.copper-Alloys') }}">Copper Alloys EC
                                    Copper</a></strong>, also known as Electrolytic Grade Copper, is a high-purity copper
                            (>99.95%) renowned for its exceptional electrical and thermal conductivity, ductility, and
                            corrosion resistance. It is oxygen-free or has extremely low oxygen content, making it ideal for
                            high-performance electrical and electronic applications. EC Copper is widely used in power
                            generation, distribution, motors, transformers, switchgear, renewable energy, and electronics.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Copper Alloys Ec Datasheet</h3>
            <p class="mb-3">
                Get the complete Copper Alloys Ec datasheet with chemical composition,
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
                <h2>EC Copper Specifications (C10100 / CW009A)</h2>
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
                            <td>C10100 / CW009A / Cu-ETP1 / EC Copper</td>
                        </tr>
                         <tr class="t-row">
                            <td>Type</td>
                            <td>High-Purity Electrolytic Copper (Electrical Grade)</td>
                        </tr>
                         <tr class="t-row">
                            <td>Typical Chemical Composition</td>
                            <td>Cu ≥ 99.95%, O ≤ 0.0005%, Ag ≤ 0.002%, Impurities ≤ 0.03%</td>
                        </tr>
                         <tr class="t-row">
                            <td>Conditions Available</td>
                            <td>Annealed, Half-Hard, Hard, Extra Hard, Hot Rolled, Cold Drawn</td>
                        </tr>
                         <tr class="t-row">
                            <td>Heat Treatment</td>
                            <td>Annealing, Stress Relieving</td>
                        </tr>
                         <tr class="t-row">
                            <td>Testing</td>
                            <td>Tensile, Hardness, Chemical, Conductivity, PMI, UT (on request)</td>
                        </tr>
                         <tr class="t-row">
                            <td>Certification</td>
                            <td>EN 10204 3.1 / 3.2 MTC available</td>
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
                <h2>Chemical Composition – EC Copper (C10100 / CW009A)</h2>
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
                            <td>≥ 99.95</td>
                        </tr>
                         <tr class="t-row">
                            <td>Oxygen (O)</td>
                            <td>≤ 0.0005 (oxygen-free grades)</td>
                        </tr>
                         <tr class="t-row">
                            <td>Silver (Ag)</td>
                            <td>≤ 0.002</td>
                        </tr>
                         <tr class="t-row">
                            <td>Other Elements</td>
                            <td>≤ 0.03 total impurities</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="text-center mt-3">
                Note: EC Grade Copper may be oxygen-bearing (C11000) or oxygen-free (C10100 / OFC) depending on application.
            </p>
        </div>
    </section>

    <!-- ================= PHYSICAL PROPERTIES ================= -->
    <section class="sec-padd-top sec-padd-bottom bg-light" id="properties">
        <div class="container">
            <div class="section-title center">
                <h2>Physical Properties – EC Copper</h2>
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
                            <td>Electrical Conductivity</td>
                            <td>101% IACS (min)</td>
                            <td>≥ 58 MS/m</td>
                        </tr>
                         <tr class="t-row">
                            <td>Thermal Conductivity</td>
                            <td>~226 Btu/ft·hr·°F</td>
                            <td>~390 W/m·K</td>
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
                <h2>Heat Treatment – EC Copper (C10100 / CW009A)</h2>
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
                            <td>Furnace cool for maximum ductility</td>
                        </tr>
                         <tr class="t-row">
                            <td>Stress Relieving</td>
                            <td>150 – 250 °C</td>
                            <td>Hold 1–2 hours, air cool</td>
                        </tr>
                         <tr class="t-row">
                            <td>Hot Working</td>
                            <td>700 – 900 °C</td>
                            <td>Extrusion, rolling & forging</td>
                        </tr>
                         <tr class="t-row">
                            <td>Cold Working + Anneal</td>
                            <td>—</td>
                            <td>Controls strength & conductivity</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="text-center mt-3">
                EC Copper cannot be hardened by quenching; only cold working increases strength.
            </p>
        </div>
    </section>

    <!-- ================= MECHANICAL PROPERTIES ================= -->
    <section class="sec-padd-top sec-padd-bottom" id="mechanical">
        <div class="container">
            <div class="section-title center">
                <h2>Mechanical Properties – EC Copper</h2>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                         <tr class="t-row">
                            <th>Property / Condition</th>
                            <th>Annealed (R200)</th>
                            <th>Half-Hard (R240)</th>
                            <th>Hard (R290)</th>
                            <th>Extra Hard (R360)</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr class="t-row">
                            <td>Tensile Strength (MPa)</td>
                            <td>220 – 260</td>
                            <td>240 – 300</td>
                            <td>290 – 360</td>
                            <td>≥ 360</td>
                        </tr>
                         <tr class="t-row">
                            <td>Yield Strength (0.2%) (MPa)</td>
                            <td>≤ 100</td>
                            <td>≥ 180</td>
                            <td>≥ 250</td>
                            <td>≥ 320</td>
                        </tr>
                         <tr class="t-row">
                            <td>Elongation (%)</td>
                            <td>≥ 33</td>
                            <td>≥ 8</td>
                            <td>≥ 4</td>
                            <td>≥ 2</td>
                        </tr>
                         <tr class="t-row">
                            <td>Hardness (HV)</td>
                            <td>40 – 65</td>
                            <td>65 – 95</td>
                            <td>90 – 110</td>
                            <td>≥ 110</td>
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
                <h2>Available Forms & Size Range – EC Copper</h2>
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
                            <td>4 mm – 200 mm dia</td>
                        </tr>
                         <tr class="t-row">
                            <td>Flat Bars & Busbars</td>
                            <td>Thickness 2 – 60 mm; Width 10 – 300 mm</td>
                        </tr>
                         <tr class="t-row">
                            <td>Sheets & Plates</td>
                            <td>0.5 – 80 mm thick (Width 600 – 1500 mm)</td>
                        </tr>
                         <tr class="t-row">
                            <td>Coils, Strips & Foils</td>
                            <td>0.05 – 6 mm thickness</td>
                        </tr>
                         <tr class="t-row">
                            <td>Pipes & Tubes</td>
                            <td>OD 6 – 108 mm; WT 0.5 – 10 mm</td>
                        </tr>
                         <tr class="t-row">
                            <td>Wires (Bare & Tinned)</td>
                            <td>0.1 – 25 mm</td>
                        </tr>
                         <tr class="t-row">
                            <td>Custom Fabricated Parts</td>
                            <td>CNC machined components as per drawing</td>
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
                <h2>International Standards & Equivalent Grades – EC Copper</h2>
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
                            <td>C10100</td>
                        </tr>
                         <tr class="t-row">
                            <td>EN</td>
                            <td>CW009A</td>
                        </tr>
                         <tr class="t-row">
                            <td>DIN</td>
                            <td>Cu-ETP1</td>
                        </tr>
                         <tr class="t-row">
                            <td>ASTM</td>
                            <td>B152, B187, B170</td>
                        </tr>
                         <tr class="t-row">
                            <td>JIS</td>
                            <td>C1011</td>
                        </tr>
                         <tr class="t-row">
                            <td>ISO</td>
                            <td>Cu-ETP1 / Cu-a1</td>
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
                <h2>Products in Copper Alloys EC Copper</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Copper Alloys EC Copper</strong> is available in:
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
                        Copper Alloys EC Copper products are produced to the following global standards:
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
                        <h5>With over 101% IACS, EC Copper is ideal for critical current-carrying applications.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Efficient heat dissipation in motors, transformers, and power electronics.
                        </h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Allows for easy drawing, forming, and welding (especially OFC grades).</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Performs well in atmospheric, humid, and chemically neutral environments.</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Used in sensitive and high-frequency circuits with minimal signal loss.</h5>
                    </div>
                </div>
            </div>
    </section>


    <section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Copper Alloys EC Copper</h2>
                <p class="text-center pb-3"><strong class="text-dark">Copper Alloys EC Copper</strong> is a vital material
                    for power and precision engineering sectors. It is chosen for its conductivity, reliability, and ease of
                    fabrication.</p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Power Transmission & Distribution</h5>
                        <p>Overhead conductors, busbars, switchgear, and substations.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Electrical Motors & Generators</h5>
                        <p>Stator/rotor windings, commutators, motor terminals.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Transformers & Inductors</h5>
                        <p>LV/HV transformer windings, coils, and terminals.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Electronics & Microelectronics</h5>
                        <p>High-frequency connectors, PCBs, semiconductors.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Telecommunication & Broadcasting</h5>
                        <p>RF shielding, ground systems, cable conductors.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Automotive & EVs</h5>
                        <p>Battery connectors, electric motor wiring, and sensors.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-strategies"></i></div>
                        <h5>Renewable Energy Systems</h5>
                        <p>Wind turbines, solar panels, inverters, energy storage.</p>
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
                        <h5>Top-quality EC Grade Copper with global certifications</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Custom sizes, shapes, and finishes available</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Expertise in high-conductivity and low-resistance applications</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Responsive service with technical guidance and support</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Pan-India and global shipping for timely delivery</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="price" class="sec-padd-top sec-padd-bottom bg-light py-5">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h2>EC Copper Price per kg in India</h2>
            </div>

            <p class="text-center fs-5">
                <strong>Typical Range:</strong> ₹780 – ₹1,350 per kg
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
                                <h4>What is EC Copper and why is it important in electrical applications?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    EC Copper, also known as Electrolytic Copper, C10100, or CW009A, is a high purity copper
                                    grade with over
                                    99.95% copper content. It is valued for its outstanding electrical conductivity (≥101%
                                    IACS), thermal
                                    conductivity, ductility, and corrosion resistance. Due to its purity and low oxygen
                                    levels, EC Copper is
                                    widely used in electrical, electronic, and thermal applications where high efficiency
                                    and performance are
                                    essential.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the advantages of using EC Copper over other copper alloys?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    EC Copper offers superior electrical and thermal conductivity compared to most other
                                    copper alloys, making
                                    it the preferred choice for current carrying and heat dissipating components. It is
                                    highly ductile, weldable,
                                    and easy to form into wires, rods, sheets, and busbars. Oxygen-free grades of EC Copper
                                    further enhance
                                    performance in sensitive electronic applications, reducing signal loss and improving
                                    reliability in
                                    high frequency and precision systems.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the main applications of EC Copper in industries?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    EC Copper is extensively used in power transmission and distribution systems for
                                    busbars, switchgear,
                                    substations, and overhead conductors. It is also widely applied in motors, generators,
                                    and transformers for
                                    windings, commutators, and terminals. In addition, EC Copper is used in electronics,
                                    microelectronics,
                                    telecommunications, renewable energy, automotive, and electric vehicles due to its
                                    excellent conductivity,
                                    durability, and thermal stability.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What EC Copper products are supplied by MOKSH TUBES & FITTINGS LLP?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP provides a complete range of EC Copper products including
                                    wires, rods, bars,
                                    pipes, sheets, plates, coils, foils, strips, busbars, fasteners, flanges, and
                                    custom-fabricated parts.
                                    These products are manufactured to meet global standards and are available in different
                                    sizes, shapes,
                                    and finishes to suit diverse industrial applications. Precision-machined components and
                                    custom solutions
                                    are also offered for specific technical requirements.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose MOKSH TUBES & FITTINGS LLP for EC Copper products?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP is a trusted manufacturer, supplier, and exporter of EC
                                    Copper products with
                                    expertise in high conductivity applications. The company offers certified and globally
                                    compliant materials,
                                    custom machining, and technical support to meet industry-specific demands. With strong
                                    inventory, competitive
                                    pricing, and worldwide delivery, MOKSH TUBES & FITTINGS LLP ensures reliable and timely
                                    supply of EC Copper
                                    for electrical, thermal, and electronic industries.
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
                    contact <strong>Moksh Tubes & Fittings LLP</strong> — for premium-quality electrolytic copper solutions.
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
      "name": "What is EC Copper and why is it important in electrical applications?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "EC Copper, also known as Electrolytic Copper, C10100, or CW009A, is a high purity copper grade with over 99.95% copper content. It is valued for its outstanding electrical conductivity (≥101% IACS), thermal conductivity, ductility, and corrosion resistance. Due to its purity and low oxygen levels, EC Copper is widely used in electrical, electronic, and thermal applications where high efficiency and performance are essential."
      }
    },
    {
      "@type": "Question",
      "name": "What are the advantages of using EC Copper over other copper alloys?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "EC Copper offers superior electrical and thermal conductivity compared to most other copper alloys, making it the preferred choice for current carrying and heat dissipating components. It is highly ductile, weldable, and easy to form into wires, rods, sheets, and busbars. Oxygen-free grades of EC Copper further enhance performance in sensitive electronic applications, reducing signal loss and improving reliability in high frequency and precision systems."
      }
    },
    {
      "@type": "Question",
      "name": "What are the main applications of EC Copper in industries?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "EC Copper is extensively used in power transmission and distribution systems for busbars, switchgear, substations, and overhead conductors. It is also widely applied in motors, generators, and transformers for windings, commutators, and terminals. In addition, EC Copper is used in electronics, microelectronics, telecommunications, renewable energy, automotive, and electric vehicles due to its excellent conductivity, durability, and thermal stability."
      }
    },
    {
      "@type": "Question",
      "name": "What EC Copper products are supplied by MOKSH TUBES & FITTINGS LLP?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "MOKSH TUBES & FITTINGS LLP provides a complete range of EC Copper products including wires, rods, bars, pipes, sheets, plates, coils, foils, strips, busbars, fasteners, flanges, and custom-fabricated parts. These products are manufactured to meet global standards and are available in different sizes, shapes, and finishes to suit diverse industrial applications. Precision-machined components and custom solutions are also offered for specific technical requirements."
      }
    },
    {
      "@type": "Question",
      "name": "Why choose MOKSH TUBES & FITTINGS LLP for EC Copper products?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "MOKSH TUBES & FITTINGS LLP is a trusted manufacturer, supplier, and exporter of EC Copper products with expertise in high conductivity applications. The company offers certified and globally compliant materials, custom machining, and technical support to meet industry-specific demands. With strong inventory, competitive pricing, and worldwide delivery, MOKSH TUBES & FITTINGS LLP ensures reliable and timely supply of EC Copper for electrical, thermal, and electronic industries."
      }
    }
  ]
}
@endverbatim
</script>
@endsection
