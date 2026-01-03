@extends('layouts.master')

@section('title', 'Nickel 201 – High-Purity Nickel for Corrosion Resistance') <!-- 53 chars -->
@section('meta_description',
    'High-purity Nickel 201 offers superior corrosion resistance and reliability, ideal for
    harsh chemical and industrial environments.')
@section('meta_keywords',
    'Nickel 201, High Purity Nickel, Corrosion Resistant Nickel, Industrial Nickel, Chemical
    Industry Nickel, Nickel Alloy, Reliable Nickel, Industrial Applications, High-Quality Nickel')
@section('og_image', asset('assets/images/nickel-based-superalloys/nickel-based-superalloys-201.webp'))
@section('og_type', 'article')
@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area"
        style="background-image: url(/assets/images/nickel-based-superalloys/nickel-based-superalloys-201.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Nickel 201 <br> High-Purity & Corrosion Resistant Nickel</h1>

                    <!-- Add your extra content here -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Nickel 201 is a low-carbon modification of Nickel 200, designed specifically for improved stability
                        in high-temperature service above 600°F (315°C). With 99.0% minimum Nickel, it offers outstanding
                        resistance to caustic alkalis, superior thermal & electrical conductivity, and exceptional
                        ductility. Below is the complete datasheet including chemical composition, technical properties,
                        mechanical properties, applications, pricing, and FAQs.

                    </p>
                    <!-- End extra content -->

                </div>
            </div>
        </div>
    </section>


    <div class="sticky-top bg-white border-bottom material-tabs d-none d-md-block w-100">
        <div class="container">
            <a href="#overview">Overview</a> |
            <a href="#composition">Chemical Composition</a> |
            {{-- <a href="#heat-treatment">Heat Treatment</a> | --}}
            <a href="#mechanical">Mechanical Properties</a> |
            <a href="#price">Advantages</a> |
            <a href="#applications">Applications</a> |
            <a href="#faq">FAQ</a> |
            <a href="#contact us">Contact Us</a>
        </div>
    </div>



    <!--End breadcrumb area-->
    <section id="overview" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Product Overview</h2>
            </div>

            <h2 class="fw-semibold text-center mb-5" style="color: #db7227;">
                Introduction To Nickel 201 / Alloy 201 / UNS N02201 </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/nickel-based-superalloys/nickel-based-superalloys-201.webp') }}"
                        alt="Nickel 201" class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a leading manufacturer,
                            supplier, exporter, importer, and stockist of<strong class="text-black"> NICKEL 201
                                products</strong>, offering <a href="{{ route('products.pipes-tubes') }}">Pipes & Tubes</a>,
                            Pipe
                            Fittings, Flanges, Fasteners, Sheets, Plates, Coils, Wires, Round Bars, Flat Bars, Angles,
                            Channels, Welding Rods, Wire Mesh, and other customized and specialty Nickel 201 components.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">Nickel 201</strong>, is a low-carbon version of commercially pure
                            wrought <a href="{{ route('materials.nickel-Based-Superalloys') }}">nickel</a> (99.6% Ni),
                            designed to provide enhanced resistance to graphitization in
                            high-temperature environments. It retains the excellent corrosion resistance, thermal and
                            electrical conductivity, and workability of Nickel 200 while offering superior performance in
                            applications above 600 °F (315 °C). The reduced carbon content (0.02% max) minimizes carbide
                            precipitation and ensures resistance to intergranular attack—making Nickel 201 ideal for
                            caustic, food-grade, and high-temperature service environments.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Nickel Based Superalloys 201 Datasheet</h3>
            <p class="mb-3">
                Get the complete Nickel Based Superalloys 201 datasheet with chemical composition,
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
    <!-- End Datasheet Download Section -->

    <!-- Specifications Section -->
    <section class="sec-padd-top" id="specification">
        <div class="container">
            <div class="section-title center">
                <h2>Duplex Stainless Steel S31803 Specifications</h2>
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
                                    <td>Nickel 201 / Alloy 201 / UNS N02201</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Type</td>
                                    <td>Commercially Pure Nickel (Low Carbon)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Purity</td>
                                    <td>≥ 99.0% Nickel</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon Content</td>
                                    <td>≤ 0.02%</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Conditions Available</td>
                                    <td>Annealed, Cold Worked, Stress-Relieved</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Testing</td>
                                    <td>PMI, Hardness, Tensile, Intergranular Corrosion</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Certification</td>
                                    <td>EN 10204 3.1 / 3.2</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> <!-- col-lg-8 -->
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <section id="composition" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Chemical Composition of Nickel 201</h2>
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
                            <tbody>
                                <tr class="t-row">
                                    <td>Nickel (Ni)</td>
                                    <td>99.0 min</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Copper (Cu)</td>
                                    <td>0.25 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron (Fe)</td>
                                    <td>0.40 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese (Mn)</td>
                                    <td>0.35 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon (Si)</td>
                                    <td>0.35 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon (C)</td>
                                    <td>0.02 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sulfur (S)</td>
                                    <td>0.01 max</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="mt-3 text-center">
                            Nickel 201 = Nickel 200 with lower carbon → prevents embrittlement at high temperature.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="properties" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Technical Properties of Nickel 201</h2>
            </div>
            <!-- Mechanical Properties Table -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h3 class="text-center mb-3" style="color: #db7227;">Physical Properties of Nickel 201< </h3>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped align-middle">
                                    <thead class="table-dark text-center">
                                        <tr class="t-row">
                                            <th>Property</th>
                                            <th>Imperial</th>
                                            <th>Metric</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="t-row">
                                            <td>Density</td>
                                            <td>0.321 lb/in³</td>
                                            <td>8.89 g/cm³</td>
                                        </tr>
                                        <tr class="t-row">
                                            <td>Melting Point</td>
                                            <td>2615–2635°F</td>
                                            <td>1435–1446°C</td>
                                        </tr>
                                        <tr class="t-row">
                                            <td>Thermal Conductivity</td>
                                            <td>346 BTU·in/hr·ft²·°F</td>
                                            <td>49.9 W/m·K</td>
                                        </tr>
                                        <tr class="t-row">
                                            <td>Electrical Conductivity</td>
                                            <td>22% IACS</td>
                                            <td>—</td>
                                        </tr>
                                        <tr class="t-row">
                                            <td>Specific Heat</td>
                                            <td>0.108 Btu/lb·°F</td>
                                            <td>450 J/kg·°C</td>
                                        </tr>
                                        <tr class="t-row">
                                            <td>Magnetic Permeability</td>
                                            <td>1.0004</td>
                                            <td>—</td>
                                        </tr>
                                    </tbody>
                                </table>
                                {{-- <p class="mt-3 text-center">
                                    Duplex S31803 has double the strength of 304/316 stainless steel and significantly
                                    higher
                                    pitting resistance.
                                </p> --}}
                            </div>
                </div>
            </div>

            <!-- Mechanical Properties Table -->
            <div class="row justify-content-center mt-5" id="mechanical">
                <div class="col-lg-8">
                    <h4 class="text-center mb-3" style="color: #db7227;">Mechanical Properties of Nickel 201
                    </h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Product Form</th>
                                    <th>Tensile Strength</th>
                                    <th>Yield Strength</th>
                                    <th>Elongation</th>
                                    <th>Hardness</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td>Rod/Bar – Hot Finished</td>
                                    <td>50–60 ksi (345–415 MPa)</td>
                                    <td>10–25 ksi (70–170 MPa)</td>
                                    <td>60–40%</td>
                                    <td>75–100 BHN</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Rod/Bar – Cold Drawn</td>
                                    <td>60–100 ksi (415–690 MPa)</td>
                                    <td>35–90 ksi (240–620 MPa)</td>
                                    <td>35–10%</td>
                                    <td>125–200 BHN</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Rod/Bar – CD + Annealed</td>
                                    <td>50–60 ksi</td>
                                    <td>10–25 ksi</td>
                                    <td>60–40%</td>
                                    <td>75–100 BHN</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Plate – Hot Rolled</td>
                                    <td>50–70 ksi</td>
                                    <td>12–35 ksi</td>
                                    <td>60–35%</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Plate – HR + Annealed</td>
                                    <td>50–70 ksi</td>
                                    <td>12–35 ksi</td>
                                    <td>60–40%</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tube/Pipe – CD + Annealed</td>
                                    <td>50–70 ksi</td>
                                    <td>10–28 ksi</td>
                                    <td>60–40%</td>
                                    <td>≤ 62 HRB</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tube/Pipe – Stress Relieved</td>
                                    <td>60–105 ksi</td>
                                    <td>30–85 ksi</td>
                                    <td>35–15%</td>
                                    <td>70–95 HRB</td>
                                </tr>
                            </tbody>
                        </table>
                        {{-- <p class="mt-3 text-center">
                            ⚠ Important: Duplex steels must be cooled quickly after heat treatment to prevent formation of
                            sigma
                            phase, which reduces corrosion resistance.
                        </p> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-padd-top sec-padd-bottom bg-light" id="related grades">
        <div class="container">
            <div class="section-title center mt-5" id="available forms">
                <h2>Available Forms & Size Range</h2>
            </div>

            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6 text-center">
                        We supply Duplex Stainless Steel S31803 in the following product forms and dimensions:
                    </p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="p-4 bg-white rounded shadow-sm border-start border-4" style="border-color:#db7227;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">✔ Seamless Pipes (ASTM B161 / B163)</li>
                            <li class="list-group-item">✔ ERW &amp; EFW Welded Pipes (ASTM B725)</li>
                            <li class="list-group-item">✔ Capillary, Boiler &amp; Heat Exchanger Tubes</li>
                            <li class="list-group-item">✔ Sheets &amp; Plates (ASTM B162)</li>
                            <li class="list-group-item">✔ Coils, Foils &amp; Precision Strips</li>
                            <li class="list-group-item">✔ Round, Hex, Flat &amp; Square Bars (ASTM B160)</li>
                            <li class="list-group-item">✔ Buttweld Fittings (ASTM B366)</li>
                            <li class="list-group-item">✔ Flanges (ASTM B564)</li>
                            <li class="list-group-item">✔ Fasteners – Bolts, Nuts, Screws, Studs</li>
                            <li class="list-group-item">✔ Welding Rods, Wire &amp; Wire Mesh</li>
                            <li class="list-group-item">✔ Custom machined parts &amp; components</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Standards & Equivalent Grades Section -->
    <section class="sec-padd-top sec-padd-bottom" id="international">
        <div class="container">
            <div class="section-title center">
                <h2>International Standards & Equivalent Grades</h2>
            </div>

            <div class="table-responsive col-lg-8 mx-auto">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Product</th>
                            <th>Standards</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row">
                            <td>Rods, Bars, Wire</td>
                            <td>ASTM B160 / ASME SB160, DIN 17752–17754, ISO 9723–9725</td>
                        </tr>
                        <tr class="t-row">
                            <td>Plates, Sheets, Strips</td>
                            <td>ASTM B162 / ASME SB162, DIN 17750, ISO 6208</td>
                        </tr>
                        <tr class="t-row">
                            <td>Pipes &amp; Tubes</td>
                            <td>ASTM B161, B163, B725 / ASME SB161, SB163, SB725</td>
                        </tr>
                        <tr class="t-row">
                            <td>Fittings</td>
                            <td>ASTM B366 / ASME SB366</td>
                        </tr>
                        <tr class="t-row">
                            <td>Flanges</td>
                            <td>ASTM B564 / ASME SB564</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- End Standards & Equivalent Grades Section -->

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
                <h2>Products in NICKEL 201</h2>
            </div>

            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">NICKEL 201 (UNS N02201 / W.Nr. 2.4068) </strong> is a dependable material
                        used across industries requiring purity, excellent ductility, and resistance to alkalis, acids, and
                        elevated temperatures. It performs especially well in processes where Nickel 200’s higher carbon
                        content might lead to embrittlement.
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
        </div>
    </section>


    <section  id="uses"  class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Uses and Advantages</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Exceptional resistance to caustic alkalis at various temperatures and concentrations</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Superior performance at elevated temperatures compared to Nickel 200</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Non-magnetic and high electrical conductivity</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Resistance to dry gases at room temperature and to acids like formic and acetic</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Excellent mechanical properties and workability</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Low carbon content prevents embrittlement and intergranular corrosion</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="applications"  class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Nickel 201</h2>
                <p class="text-center pb-3"><strong class="text-dark">Nickel 201</strong> is trusted in industries that
                    require high chemical resistance and reliability in elevated temperature or purity-demanding
                    environments.
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Chemical & Petrochemical Industry</h5>
                        <p>Used in reactors, piping, storage vessels, and caustic solution handling equipment.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Electronics & Batteries</h5>
                        <p>Ideal for components like battery connections, terminals, and leads.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Food Processing</h5>
                        <p>Used in caustic wash systems, food-grade tanks, and conveying equipment.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Aerospace & Defense</h5>
                        <p>Critical in radar, avionics, and EMI-sensitive shielding applications.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Heat Exchangers</h5>
                        <p>Deployed in caustic and acidic media at elevated service temperatures.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Marine & Offshore</h5>
                        <p>Used in saltwater desalination and anti-corrosive structural components.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-capsule"></i></div>
                        <h5>Nuclear & Power Generation</h5>
                        <p>Used in reactor vessels, chemical recovery systems, and thermal insulation.</p>
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
                        <h5>Specialized in high-purity nickel alloys and corrosion-resistant materials</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Unmatched product quality and dimensional accuracy</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Global reach and reliable export capabilities</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Ready stock of Nickel 201 in standard and custom sizes</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Testing and certification as per international norms</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="price" class="sec-padd-top sec-padd-bottom bg-light py-5">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h2>Duplex Stainless Steel S31803 Price per kg in India</h2>
            </div>

            <p class="text-center fs-5">
                <strong>Typical Range:</strong> ₹1,400 – ₹2,200 per kg
            </p>
            <p class="text-center mb-2">
                (Prices vary by size, thickness, form & quantity.)
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
                                <h4>What is Nickel 201 and how does it differ from Nickel 200?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Nickel 201, also known as UNS N02201 or W.Nr. 2.4068, is a low-carbon version of
                                    commercially pure wrought nickel (99.6% Ni). Compared to Nickel 200, it offers enhanced
                                    resistance to graphitization at high temperatures due to its reduced carbon content
                                    (0.02% max), minimizing carbide precipitation and intergranular corrosion. It retains
                                    excellent corrosion resistance, thermal and electrical conductivity, and workability,
                                    making it suitable for caustic, food-grade, and elevated-temperature applications.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What types of Nickel 201 products are supplied by Moksh Tubes & Fittings LLP?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Moksh Tubes & Fittings LLP manufactures, stocks, and exports a wide range of Nickel 201
                                    products including seamless and welded pipes, tubes, sheets, plates, coils, strips,
                                    round bars, flat bars, hex bars, square bars, pipe fittings, flanges, fasteners, wires,
                                    welding rods, wire mesh, and custom fabricated components. All products are designed to
                                    meet high-performance and industrial application requirements.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the main benefits of using Nickel 201 alloy?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Nickel 201 provides exceptional resistance to caustic alkalis, acids, and
                                    high temperature environments. It is non magnetic, maintains high electrical
                                    conductivity, and has excellent mechanical properties and workability. The low carbon
                                    content prevents embrittlement and intergranular corrosion, ensuring long term
                                    durability and reliability in demanding industrial processes.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Which industries commonly use Nickel 201 products?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Nickel 201 is widely used in chemical and petrochemical industries for reactors, piping,
                                    and caustic solution handling equipment; in electronics and battery components; in food
                                    processing for caustic wash systems and tanks; in aerospace and defense for
                                    EMI-sensitive shielding; in heat exchangers for caustic and acidic media; in marine and
                                    offshore for saltwater applications; and in nuclear and power generation for reactor
                                    vessels and thermal insulation.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose Moksh Tubes & Fittings LLP for Nickel 201 supply?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Moksh Tubes & Fittings LLP specializes in high purity nickel alloys with superior
                                    corrosion resistance and dimensional accuracy. The company offers ready stock of Nickel
                                    201 in standard and custom sizes, testing and certification according to international
                                    norms, fast delivery, precision cutting, and custom fabrication. With global export
                                    capabilities and a focus on quality and reliability, they provide dependable solutions
                                    for critical industrial applications.
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

    <section id="contact us"  class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Contact Us</h2>
                <p>
                    <strong>Moksh Tubes & Fittings LLP</strong> for reliable, cost-effective, and globally shipped
                    solutions.
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
                "name": "What is Nickel 201 and how does it differ from Nickel 200?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Nickel 201 (UNS N02201 or W.Nr. 2.4068) is a low-carbon version of commercially pure wrought nickel (99.6% Ni). Compared to Nickel 200, it offers enhanced resistance to graphitization at high temperatures due to its reduced carbon content (0.02% max), minimizing carbide precipitation and intergranular corrosion. It retains excellent corrosion resistance, thermal and electrical conductivity, and workability, making it suitable for caustic, food-grade, and elevated-temperature applications."
                }
                },
                {
                "@type": "Question",
                "name": "What types of Nickel 201 products are supplied by Moksh Tubes & Fittings LLP?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Moksh Tubes & Fittings LLP supplies a wide range of Nickel 201 products including seamless and welded pipes, tubes, sheets, plates, coils, strips, round bars, flat bars, hex bars, square bars, pipe fittings, flanges, fasteners, wires, welding rods, wire mesh, and custom fabricated components designed for industrial applications."
                }
                },
                {
                "@type": "Question",
                "name": "What are the main benefits of using Nickel 201 alloy?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Nickel 201 provides exceptional resistance to caustic alkalis, acids, and high temperature environments. It is non-magnetic, maintains high electrical conductivity, and has excellent mechanical properties and workability. The low carbon content prevents embrittlement and intergranular corrosion, ensuring long-term durability and reliability."
                }
                },
                {
                "@type": "Question",
                "name": "Which industries commonly use Nickel 201 products?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Nickel 201 is used across chemical and petrochemical industries, electronics and battery components, food processing systems, aerospace and defense, heat exchangers, marine and offshore applications, and nuclear and power generation sectors for its corrosion resistance and conductivity."
                }
                },
                {
                "@type": "Question",
                "name": "Why choose Moksh Tubes & Fittings LLP for Nickel 201 supply?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Moksh Tubes & Fittings LLP specializes in high purity nickel alloys with superior corrosion resistance and dimensional accuracy. The company offers ready stock, certification to international standards, fast delivery, precision cutting, and global export capabilities, ensuring dependable solutions for critical industrial applications."
                }
                }
            ]
            }

        @endverbatim
    </script>
@endsection
