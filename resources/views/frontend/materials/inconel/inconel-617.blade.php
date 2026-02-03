@extends('layouts.master')

@section('title', 'Inconel 617 – High-Temperature & Corrosion Alloy')
@section('meta_description',
    'Inconel 617 provides high strength, oxidation & corrosion resistance—ideal for gas
    turbines, chemical processing, and petrochemical applications.')
@section('meta_keywords',
    'Inconel 617, High-Temperature Alloy, Corrosion Resistant Alloy, Oxidation Resistant Alloy,
    Nickel Alloys, Gas Turbine Alloys, Chemical Processing Alloys, Petrochemical Industry Alloys, Heat Resistant Alloys,
    High Strength Alloys')
@section('og_image', asset('assets/images/inconel/Inconel-617.webp'))
@section('og_type', 'article')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/inconel/Inconel-617.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Inconel 617 <br> High-Temperature Strength & Oxidation</h1>
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">INCONEL 617 is one of
                        the industry's most reliable high-temperature alloys, designed for strength,
                        oxidation resistance, and stability at temperatures exceeding 1100°C. Below is the complete,
                        SEO-ready master-format page exactly matching your 1055 Blade Template.</p>
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
                Introduction To Inconel 617 / Alloy 617 / UNS N06617 </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/inconel/Inconel-617.webp') }}" alt="Inconel 617"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a trusted supplier, exporter,
                            importer, and stockist of premium-grade Inconel 617 products including pipes, tubes, sheets,
                            plates, coils, bars, pipe fittings, flanges, fasteners, welding rods, wire mesh, and
                            custom-fabricated components.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">INCONEL 617</strong> is a nickel chromium cobalt molybdenum <a
                                href="{{ route('materials.hastelloy') }}">alloy</a>
                            engineered for excellent high temperature strength and outstanding resistance to oxidation and
                            carburization. It offers superior metallurgical stability and resistance to a wide range of
                            corrosive environments, making it ideal for service in extreme conditions such as combustion and
                            flue gas environments. The alloy retains its mechanical properties at elevated temperatures,
                            providing long-term service life in heat-exposed applications. It also offers excellent
                            weldability and workability across varied manufacturing conditions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Inconel 617 Datasheet</h3>
            <p class="mb-3">
                Get the complete Inconel 617 datasheet with chemical composition,
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
                                    <td>INCONEL 617 / Alloy 617 / UNS N06617</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Material Type</td>
                                    <td>Nickel-Chromium-Cobalt-Molybdenum High-Temperature Alloy</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Forms Available</td>
                                    <td>Pipes, Tubes, Sheets, Plates, Coils, Bars, Fittings, Flanges, Fasteners</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Standards</td>
                                    <td>ASTM B166, B168, B546, B564, ASME SB166 / SB168 / SB564 / SB546</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Certification</td>
                                    <td>EN 10204 3.1 / 3.2</td>
                                </tr>
                                <tr class="t-row">
                                    <td>ASME Approval</td>
                                    <td>ASME Code Cases 1956, 1982</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Applications</td>
                                    <td>High-temperature, oxidizing &amp; carburizing environments</td>
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
                <h2>Chemical Composition of INCONEL 617</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Element</th>
                                    <th>Content (%)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td>Nickel (Ni)</td>
                                    <td>44.5 min</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium (Cr)</td>
                                    <td>20.0 – 24.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Cobalt (Co)</td>
                                    <td>10.0 – 15.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Molybdenum (Mo)</td>
                                    <td>8.0 – 10.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Aluminum (Al)</td>
                                    <td>0.8 – 1.5</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Titanium (Ti)</td>
                                    <td>0.6 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon (C)</td>
                                    <td>0.05 – 0.15</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron (Fe)</td>
                                    <td>3.0 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese (Mn)</td>
                                    <td>1.0 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon (Si)</td>
                                    <td>1.0 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sulfur (S)</td>
                                    <td>0.015 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Copper (Cu)</td>
                                    <td>0.5 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Boron (B)</td>
                                    <td>0.006 max</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="properties" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Technical Composition (Physical & Thermal Properties)</h2>
            </div>
            <!-- Mechanical Properties Table -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h3 class="text-center mb-3" style="color: #db7227;">Physical Properties of INCONEL 617
                    </h3>
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
                                    <td>0.302 lb/in³</td>
                                    <td>8.36 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Range</td>
                                    <td>2430–2510 °F</td>
                                    <td>1332–1380 °C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Specific Heat</td>
                                    <td>0.100 Btu/lb·°F</td>
                                    <td>419 J/kg·°C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Electrical Resistivity</td>
                                    <td>736 ohm·cir·mil/ft</td>
                                    <td>1.22 µΩ·m</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Mechanical Properties Table -->
            <div class="row justify-content-center mt-5" id="heat-treatment">
                <div class="col-lg-8">
                    <h4 class="text-center mb-3" style="color: #db7227;">Heat Treatment of INCONEL 617
                    </h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Process</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td>Solution Annealing</td>
                                    <td>2150–2200°F (1175–1205°C), rapid quench</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Stress Relieving</td>
                                    <td>1650–1800°F (900–980°C)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Aging</td>
                                    <td>Not typically age-hardened — strengthening occurs via solid-solution &amp; carbide
                                        precipitation</td>
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
                <h2 class="fw-bold" style="color: #174268;">Mechanical Properties of INCONEL 617</h2>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Form</th>
                            <th>Yield Strength</th>
                            <th>Tensile Strength</th>
                            <th>Elongation</th>
                            <th>Hardness</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row">
                            <td>Plate (Hot Rolled)</td>
                            <td>46.7 ksi / 322 MPa</td>
                            <td>106.5 ksi / 734 MPa</td>
                            <td>62%</td>
                            <td>172 BHN</td>
                        </tr>
                        <tr class="t-row">
                            <td>Bar (Hot Rolled)</td>
                            <td>46.1 ksi / 318 MPa</td>
                            <td>111.5 ksi / 769 MPa</td>
                            <td>56%</td>
                            <td>181 BHN</td>
                        </tr>
                        <tr class="t-row">
                            <td>Tubing (Cold Drawn)</td>
                            <td>55.6 ksi / 383 MPa</td>
                            <td>110.0 ksi / 758 MPa</td>
                            <td>56%</td>
                            <td>193 BHN</td>
                        </tr>
                        <tr class="t-row">
                            <td>Sheet / Strip (Cold Rolled)</td>
                            <td>50.9 ksi / 351 MPa</td>
                            <td>109.5 ksi / 755 MPa</td>
                            <td>58%</td>
                            <td>173 BHN</td>
                        </tr>
                    </tbody>
                </table>
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
                        We supply INCONEL 617 in the following product forms and dimensions:
                    </p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="p-4 bg-white rounded shadow-sm border-start border-4" style="border-color:#db7227;">
                        <h5 class="fw-bold mt-3">Product Forms</h5>
                        <ul class="list-group list-group-flush mb-4">
                            <li class="list-group-item">✔ Seamless Pipes &amp; Tubes</li>
                            <li class="list-group-item">✔ Welded Pipes (ERW / EFW)</li>
                            <li class="list-group-item">✔ Heat Exchanger, Capillary &amp; U-Bend Tubes</li>
                            <li class="list-group-item">✔ Sheets / Plates / Coils</li>
                            <li class="list-group-item">✔ Round / Flat / Square / Hex Bars</li>
                            <li class="list-group-item">✔ Pipe Fittings (Elbows, Tees, Reducers)</li>
                            <li class="list-group-item">✔ Flanges (WN, SO, Blind, SW, Threaded)</li>
                            <li class="list-group-item">✔ Fasteners</li>
                            <li class="list-group-item">✔ Welding Rods &amp; Wires</li>
                            <li class="list-group-item">✔ Custom Fabricated Parts</li>
                        </ul>
                        <h5 class="fw-bold mt-3">Sizes</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">✔ Pipes / Tubes: <strong>6 mm – 600 mm OD</strong></li>
                            <li class="list-group-item">✔ Sheets / Plates: <strong>0.5 mm – 100 mm thickness</strong></li>
                            <li class="list-group-item">✔ Bars: <strong>6 mm – 300 mm diameter</strong></li>
                            <li class="list-group-item">✔ Fittings: <strong>1/2&quot; – 24&quot;</strong></li>
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
                            <th>Standard</th>
                            <th>Equivalent Grade</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row">
                            <td>UNS</td>
                            <td>N06617</td>
                        </tr>
                        <tr class="t-row">
                            <td>W.Nr.</td>
                            <td>2.4663a</td>
                        </tr>
                        <tr class="t-row">
                            <td>ISO</td>
                            <td>6208</td>
                        </tr>
                        <tr class="t-row">
                            <td>ASTM</td>
                            <td>B166 / B168 / B546 / B564</td>
                        </tr>
                        <tr class="t-row">
                            <td>ASME</td>
                            <td>SB166 / SB168 / SB564 / SB546</td>
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
                <h2>Products in Inconel 617</h2>
            </div>

            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">INCONEL 617 </strong>identified as UNS N06617 and Werkstoff Nr. 2.4663a,
                        is a high-performance nickel-chromium-cobalt-molybdenum alloy known for its exceptional strength and
                        oxidation resistance at high temperatures. It is approved for pressure vessel construction under
                        ASME Code Cases 1956 and 1982, making it an excellent choice for demanding industrial applications.
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


    <section id="uses" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Uses and Advantages</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Exceptional high-temperature strength and metallurgical stability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Superior resistance to oxidation, nitriding, and carburization</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Good resistance to a broad spectrum of corrosive environments</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Excellent weldability and formability for ease of fabricationGood weldability and machinability
                        </h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Maintains structural integrity in temperatures up to 1100°C</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section  id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Inconel 617</h2>
                <p class="text-center pb-3"><strong class="text-dark">Inconel 617</strong> is a high-performance
                    nickel-chromium-cobalt-molybdenum alloy designed for superior strength and corrosion resistance in
                    extreme temperature environments. Its exceptional ability to withstand oxidation, carburization, and
                    thermal cycling makes it a trusted choice in industries where components are pushed to their limits.
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Aerospace and Gas Turbines</h5>
                        <p>Used in combustion liners, transition ducts, and other critical hot-section parts in jet engines
                            and gas turbines. INCONEL 617 delivers high creep strength, oxidation resistance, and structural
                            integrity at temperatures above 1000°C (1832°F).
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Power Generation (Fossil & Nuclear)</h5>
                        <p>Ideal for recuperators, heat exchangers, and steam generator tubing in advanced fossil fuel and
                            nuclear power systems. The alloy retains strength and resists degradation in high-pressure,
                            high-temperature conditions, including supercritical CO₂ and helium-cooled reactors.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Petrochemical and Refining Plants</h5>
                        <p>Relied upon in reformers, flare tips, catalyst grids, and furnace internals where high heat and
                            aggressive chemical exposure are present. Its resistance to oxidizing and reducing atmospheres
                            helps prolong equipment life.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Industrial Furnace Equipment</h5>
                        <p>Commonly used in radiant tubes, heat shields, retorts, trays, and other components exposed to
                            constant heating and cooling. INCONEL 617 resists scaling and structural weakening during
                            repeated thermal cycles.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Waste Incineration and Pollution Control</h5>
                        <p>Applied in components such as liners, baffles, and exhaust ducts exposed to corrosive gases at
                            elevated temperatures, helping improve safety and durability in emission-heavy environments.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Chemical Processing</h5>
                        <p>Ideal for equipment that must handle aggressive chemical mixtures at elevated temperatures. Its
                            metallurgical stability and corrosion resistance provide reliability for the long haul.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-capsule"></i></div>
                        <h5>Heat Recovery Systems</h5>
                        <p>Used in recuperators and high-efficiency heat exchangers, especially in systems where thermal
                            performance, oxidation resistance, and material longevity are crucial.</p>
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
                        <h5>Proven expertise in high-performance alloy solutions</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Global reach with local support and quick delivery</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Strong inventory of nickel-based and heat-resistant alloys</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Customization available for unique industrial requirements</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Stringent quality control and testing compliance</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

       <section id="price" class="sec-padd-top sec-padd-bottom bg-light py-5">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h2>Inconel 617 Price per kg in India</h2>
            </div>

            <p class="text-center fs-5">
                <strong>Typical Range:</strong> ₹3,500 – ₹7,500 per kg
            </p>
            <p class="text-center mb-2">
                (Price varies by size, thickness, form & quantity.)
            </p>

            <p class="text-center fs-5">
                Contact us for exact quotation based on size and quantity.
            </p>
        </div>
    </section>

    <!--Start faq content area-->
    <section id="faq"  class="faq-content-area sec-padd2">
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
                                <h4>What is Inconel 617 and what makes it unique?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Inconel 617 is a high performance nickel chromium cobalt molybdenum alloy designed for
                                    exceptional strength, oxidation resistance, and carburization resistance at elevated
                                    temperatures. Its unique chemical composition provides excellent metallurgical
                                    stability, making it ideal for demanding industrial environments such as aerospace,
                                    power generation, and petrochemical processing. Unlike conventional alloys, Inconel 617
                                    retains its mechanical properties even in extreme heat and corrosive conditions,
                                    ensuring long-term durability and reliability.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the main applications of Inconel 617?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Inconel 617 is widely used in industries where components must withstand high
                                    temperatures and aggressive environments. Common applications include jet engine
                                    hot-section parts, gas turbines, heat exchangers, recuperators, steam generator tubing,
                                    chemical processing equipment, reformers, and furnace internals. The alloy’s superior
                                    creep strength and resistance to oxidation, nitriding, and carburization make it
                                    especially suitable for aerospace, nuclear power plants, petrochemical facilities, waste
                                    incineration, and heat recovery systems.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the advantages of using Inconel 617 over other alloys?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    The biggest advantage of Inconel 617 is its ability to maintain mechanical strength and
                                    structural integrity at temperatures up to 1100°C while resisting oxidation and
                                    carburization. It also offers excellent weldability, machinability, and formability,
                                    making fabrication easier across diverse industries. Compared to conventional alloys,
                                    Inconel 617 provides longer service life in severe environments, reduces maintenance
                                    costs, and ensures reliable performance in both oxidizing and reducing atmospheres.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>How does the chemical composition of Inconel 617 enhance its properties?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    The chemical composition of Inconel 617, which includes nickel, chromium, cobalt, and
                                    molybdenum, plays a vital role in its superior performance. Nickel provides overall
                                    strength and corrosion resistance, chromium improves oxidation resistance, cobalt
                                    enhances stability at high temperatures, and molybdenum contributes to creep resistance
                                    and toughness. The balance of these elements ensures outstanding resistance to thermal
                                    cycling, aggressive chemicals, and environmental degradation, making it one of the most
                                    versatile high temperature alloys available.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose Moksh Tubes & Fittings LLP for Inconel 617 products?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Moksh Tubes & Fittings LLP is a trusted manufacturer, supplier, exporter, importer, and
                                    stockist of premium Inconel 617 products, offering a complete range including pipes,
                                    tubes, sheets, plates, flanges, fittings, fasteners, and custom fabricated components.
                                    With strong sourcing networks, advanced manufacturing capabilities, and strict quality
                                    control, the company ensures that every product meets international standards and
                                    industry specific requirements. Backed by global logistics support and technical
                                    expertise, Moksh Tubes & Fittings LLP provides reliable Inconel 617 solutions for
                                    critical industrial applications.
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
                    <strong>Moksh Tubes & Fittings LLP</strong> your trusted partner for INCONEL 617 solutions built for
                    durability, strength, and superior performance in the most demanding environments.
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
                        "name": "What is Inconel 617 and what makes it unique?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Inconel 617 is a high performance nickel chromium cobalt molybdenum alloy designed for exceptional strength, oxidation resistance, and carburization resistance at elevated temperatures. Its unique chemical composition provides excellent metallurgical stability, making it ideal for demanding industrial environments such as aerospace, power generation, and petrochemical processing. Unlike conventional alloys, Inconel 617 retains its mechanical properties even in extreme heat and corrosive conditions, ensuring long-term durability and reliability."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "What are the main applications of Inconel 617?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Inconel 617 is widely used in industries where components must withstand high temperatures and aggressive environments. Common applications include jet engine hot-section parts, gas turbines, heat exchangers, recuperators, steam generator tubing, chemical processing equipment, reformers, and furnace internals. The alloy’s superior creep strength and resistance to oxidation, nitriding, and carburization make it especially suitable for aerospace, nuclear power plants, petrochemical facilities, waste incineration, and heat recovery systems."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "What are the advantages of using Inconel 617 over other alloys?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "The biggest advantage of Inconel 617 is its ability to maintain mechanical strength and structural integrity at temperatures up to 1100°C while resisting oxidation and carburization. It also offers excellent weldability, machinability, and formability, making fabrication easier across diverse industries. Compared to conventional alloys, Inconel 617 provides longer service life in severe environments, reduces maintenance costs, and ensures reliable performance in both oxidizing and reducing atmospheres."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "How does the chemical composition of Inconel 617 enhance its properties?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "The chemical composition of Inconel 617, which includes nickel, chromium, cobalt, and molybdenum, plays a vital role in its superior performance. Nickel provides overall strength and corrosion resistance, chromium improves oxidation resistance, cobalt enhances stability at high temperatures, and molybdenum contributes to creep resistance and toughness. The balance of these elements ensures outstanding resistance to thermal cycling, aggressive chemicals, and environmental degradation, making it one of the most versatile high temperature alloys available."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Why choose Moksh Tubes & Fittings LLP for Inconel 617 products?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Moksh Tubes & Fittings LLP is a trusted manufacturer, supplier, exporter, importer, and stockist of premium Inconel 617 products, offering a complete range including pipes, tubes, sheets, plates, flanges, fittings, fasteners, and custom fabricated components. With strong sourcing networks, advanced manufacturing capabilities, and strict quality control, the company ensures that every product meets international standards and industry specific requirements. Backed by global logistics support and technical expertise, Moksh Tubes & Fittings LLP provides reliable Inconel 617 solutions for critical industrial applications."
                        }
                    }
                ]
            }

        @endverbatim
    </script>
@endsection
