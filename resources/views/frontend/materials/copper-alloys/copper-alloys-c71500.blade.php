@extends('layouts.master')

@section('title', 'Copper Alloy C71500 | Marine Grade Durability')

@section('meta_description',
    'Copper Alloy C71500 is a marine-grade, high strength and corrosion resistant alloy ideal
    for seawater, marine, and industrial applications.')

@section('meta_keywords',
    'Copper Alloy C71500, marine grade copper alloy, high strength copper, corrosion resistant
    copper, seawater copper alloy, durable copper alloy, industrial copper alloy')
@section('og_image', asset('assets/images/copper-alloys/copper-alloys-c71500.webp'))
@section('og_type', 'article')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/copper-alloys/copper-alloys-c71500.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Copper Alloy C71500 <br> Marine Grade & Corrosion Resistant</h1>

                    <!-- Add your extra content here -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Copper Alloy C71500 is a marine-grade copper-nickel alloy known for its excellent resistance to
                        seawater corrosion, biofouling, and erosion. It offers good strength, high durability, and reliable
                        thermal conductivity, making it ideal for shipbuilding, heat exchangers, condensers, and offshore
                        applications where long-term performance in harsh marine environments is essential.

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
                <h2>Copper Alloys C71500 | Product Overview</h2>
            </div>

            <h2 class="fw-semibold text-center mb-5" style="color: #db7227;">
                Introduction To Copper Alloys C71500
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/copper-alloys/copper-alloys-c71500.webp') }}"alt="Copper Alloys C71500"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a leading manufacturer,
                            supplier, stockist, and exporter of Copper <a
                                href="{{ route('materials.nickel-Based-Superalloys') }}">Nickel</a> 70/30 (C71500) <a
                                href="{{ route('products') }}">products</a>. This alloy contains
                            70% copper and 30% nickel with added iron and manganese for enhanced strength and corrosion
                            resistance. It is especially renowned for its superior resistance to seawater corrosion,
                            biofouling, and stress corrosion cracking, making it a preferred material for marine, offshore,
                            and heat exchanger applications.

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black"><a href="{{ route('materials.copper-Alloys') }}">Copper Alloys
                                    C71500</a></strong>, offers excellent mechanical properties, thermal stability, and
                            weldability. It is non-magnetic and retains its strength and corrosion resistance even at
                            elevated temperatures and high-pressure environments.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Copper Alloys C71500 Datasheet</h3>
            <p class="mb-3">
                Get the complete Copper Alloys C71500 datasheet with chemical composition,
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
                <h2>Technical Specifications – Copper Nickel C71500 (Cu-Ni 70/30)</h2>
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
                            <td>Material</td>
                            <td>Copper Nickel 70/30</td>
                        </tr>
                         <tr class="t-row">
                            <td>UNS No.</td>
                            <td>C71500</td>
                        </tr>
                         <tr class="t-row">
                            <td>EN Equivalent</td>
                            <td>CW354H</td>
                        </tr>
                         <tr class="t-row">
                            <td>ISO Designation</td>
                            <td>CuNi30Fe1Mn</td>
                        </tr>
                         <tr class="t-row">
                            <td>Copper Content</td>
                            <td>≥ 69 %</td>
                        </tr>
                         <tr class="t-row">
                            <td>Nickel Content</td>
                            <td>29 – 33 %</td>
                        </tr>
                         <tr class="t-row">
                            <td>Iron Content</td>
                            <td>0.4 – 1.0 %</td>
                        </tr>
                         <tr class="t-row">
                            <td>Manganese</td>
                            <td>0.4 – 1.0 %</td>
                        </tr>
                         <tr class="t-row">
                            <td>Magnetic Properties</td>
                            <td>Non-Magnetic</td>
                        </tr>
                         <tr class="t-row">
                            <td>Heat Treatable</td>
                            <td>❌ No</td>
                        </tr>
                         <tr class="t-row">
                            <td>Strength Control</td>
                            <td>Cold Working</td>
                        </tr>
                         <tr class="t-row">
                            <td>Seawater Resistance</td>
                            <td>Excellent</td>
                        </tr>
                         <tr class="t-row">
                            <td>Erosion / Cavitation</td>
                            <td>Very Good</td>
                        </tr>
                         <tr class="t-row">
                            <td>Typical Service</td>
                            <td>Marine, Offshore, Heat Exchangers</td>
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
                <h2>Chemical Composition – UNS C71500</h2>
            </div>

            <div class="table-responsive col-lg-8 mx-auto">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                         <tr class="t-row">
                            <th>Element</th>
                            <th>Content (%)</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr class="t-row">
                            <td>Copper (Cu)</td>
                            <td>69.0 min</td>
                        </tr>
                         <tr class="t-row">
                            <td>Nickel (Ni)</td>
                            <td>29.0 – 33.0</td>
                        </tr>
                         <tr class="t-row">
                            <td>Iron (Fe)</td>
                            <td>0.4 – 1.0</td>
                        </tr>
                         <tr class="t-row">
                            <td>Manganese (Mn)</td>
                            <td>0.4 – 1.0</td>
                        </tr>
                         <tr class="t-row">
                            <td>Zinc (Zn)</td>
                            <td>1.0 max</td>
                        </tr>
                         <tr class="t-row">
                            <td>Lead (Pb)</td>
                            <td>0.05 max</td>
                        </tr>
                         <tr class="t-row">
                            <td>Others</td>
                            <td>0.50 max (total)</td>
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
                <h2>Physical Properties – Copper Nickel C71500</h2>
            </div>

            <div class="table-responsive col-lg-8 mx-auto">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                         <tr class="t-row">
                            <th>Property</th>
                            <th>Metric</th>
                            <th>Imperial</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr class="t-row">
                            <td>Density</td>
                            <td>8.94 g/cm³</td>
                            <td>0.323 lb/in³</td>
                        </tr>
                         <tr class="t-row">
                            <td>Melting Point</td>
                            <td>1170 – 1240 °C</td>
                            <td>2140 – 2264 °F</td>
                        </tr>
                         <tr class="t-row">
                            <td>Electrical Conductivity</td>
                            <td>7% IACS</td>
                            <td>—</td>
                        </tr>
                         <tr class="t-row">
                            <td>Thermal Conductivity</td>
                            <td>29 W/m·K</td>
                            <td>200 BTU-in/hr-ft²-°F</td>
                        </tr>
                         <tr class="t-row">
                            <td>Modulus of Elasticity</td>
                            <td>140 GPa</td>
                            <td>20.3 × 10⁶ psi</td>
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
                <h2>Heat Treatment & Fabrication – C71500</h2>
            </div>

            <div class="table-responsive col-lg-8 mx-auto">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                         <tr class="t-row">
                            <th>Process</th>
                            <th>Temperature Range</th>
                            <th>Purpose</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr class="t-row">
                            <td>Annealing</td>
                            <td>700 – 900 °C</td>
                            <td>Restore ductility</td>
                        </tr>
                         <tr class="t-row">
                            <td>Stress Relieving</td>
                            <td>300 – 350 °C</td>
                            <td>Reduce residual stress</td>
                        </tr>
                         <tr class="t-row">
                            <td>Cold Working</td>
                            <td>—</td>
                            <td>Increase strength & hardness</td>
                        </tr>
                         <tr class="t-row">
                            <td>Welding</td>
                            <td>TIG / MIG / SMAW</td>
                            <td>Excellent weldability</td>
                        </tr>
                         <tr class="t-row">
                            <td>Brazing</td>
                            <td>✔</td>
                            <td>Commonly used</td>
                        </tr>
                    </tbody>
                </table>

                <p class="mt-3 text-center">
                    C71500 maintains corrosion resistance even after welding, making it ideal for marine and condenser
                    service.
                </p>
            </div>
        </div>
    </section>

    <!-- ================= MECHANICAL PROPERTIES ================= -->
    <section class="sec-padd-top sec-padd-bottom" id="mechanical">
        <div class="container">
            <div class="section-title center">
                <h2>Mechanical Properties – Copper Nickel C71500</h2>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                         <tr class="t-row">
                            <th>Condition</th>
                            <th>Tensile Strength</th>
                            <th>Yield Strength (0.2%)</th>
                            <th>Elongation (%)</th>
                            <th>Hardness</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr class="t-row">
                            <td>Annealed (Soft)</td>
                            <td>52–66 ksi / 360–455 MPa</td>
                            <td>18–25 ksi / 125–170 MPa</td>
                            <td>30–45%</td>
                            <td>80–120 HB</td>
                        </tr>
                         <tr class="t-row">
                            <td>Cold-Worked / Hard</td>
                            <td>70–85 ksi / 485–586 MPa</td>
                            <td>35–50 ksi / 240–345 MPa</td>
                            <td>10–20%</td>
                            <td>120–160 HB</td>
                        </tr>
                         <tr class="t-row">
                            <td>Tube (ASTM B466)</td>
                            <td>≥ 52 ksi / ≥ 360 MPa</td>
                            <td>≥ 18 ksi / ≥ 125 MPa</td>
                            <td>≥ 30%</td>
                            <td>~88 HRB</td>
                        </tr>
                         <tr class="t-row">
                            <td>Sheet / Plate (ASTM B122)</td>
                            <td>54–75 ksi / 372–517 MPa</td>
                            <td>18–43 ksi / 125–300 MPa</td>
                            <td>30–45%</td>
                            <td>90–130 HB</td>
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
                <h2>Available Forms & Size Range – C71500</h2>
            </div>

            <div class="table-responsive col-lg-10 mx-auto">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                         <tr class="t-row">
                            <th>Product Form</th>
                            <th>Size Range</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr class="t-row">
                            <td>Pipes & Tubes</td>
                            <td>OD 6 – 450 mm, WT 0.7 – 35 mm</td>
                        </tr>
                         <tr class="t-row">
                            <td>Sheets & Plates</td>
                            <td>Thickness 0.5 – 80 mm</td>
                        </tr>
                         <tr class="t-row">
                            <td>Coils & Strips</td>
                            <td>0.1 – 6 mm</td>
                        </tr>
                         <tr class="t-row">
                            <td>Rods & Bars</td>
                            <td>Ø 6 – 350 mm</td>
                        </tr>
                         <tr class="t-row">
                            <td>Fittings & Flanges</td>
                            <td>ASME / DIN Standards</td>
                        </tr>
                         <tr class="t-row">
                            <td>Wires & Electrodes</td>
                            <td>Standard & matching fillers</td>
                        </tr>
                         <tr class="t-row">
                            <td>Forged Components</td>
                            <td>As per drawing</td>
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
                <h2>International Standards & Equivalent Grades – C71500</h2>
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
                            <td>C71500</td>
                        </tr>
                         <tr class="t-row">
                            <td>ASTM</td>
                            <td>B111, B122, B151, B466</td>
                        </tr>
                         <tr class="t-row">
                            <td>ASME</td>
                            <td>SB111, SB122, SB151, SB466</td>
                        </tr>
                         <tr class="t-row">
                            <td>EN</td>
                            <td>CW354H</td>
                        </tr>
                         <tr class="t-row">
                            <td>ISO</td>
                            <td>CuNi30Fe1Mn</td>
                        </tr>
                         <tr class="t-row">
                            <td>BS</td>
                            <td>CN107</td>
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
                <h2>Products in Copper Alloys C71500</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Copper Alloys C71500</strong> is available in:
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
                        Copper Alloys C71500 products are produced to the following global standards:
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
                        <h5>Exceptional resistance to seawater corrosion and biofouling</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>High mechanical strength and toughness</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Excellent weldability and formability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Non-magnetic and spark-resistant</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Thermal and electrical stability</h5>
                    </div>
                </div>
            </div>
    </section>


    <section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Copper Alloys C71500</h2>
                <p class="text-center pb-3"><strong class="text-dark">Copper Alloys C71500</strong> is extensively used
                    in:</p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Marine Engineering</h5>
                        <p>Seawater piping, condensers, saltwater flanges, ship hulls, and offshore platforms.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Power Plants</h5>
                        <p>Heat exchangers, evaporators, condensers.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Desalination Plants</h5>
                        <p>Brine heaters, flash chambers, high-pressure piping.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Chemical Processing</h5>
                        <p>Acid-resistant vessels and piping.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Oil & Gas Industry</h5>
                        <p>Hydraulic lines, instrumentation tubing, firewater systems.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Naval & Defense Applications</h5>
                        <p>Anti-fouling systems, seawater coolers, submarine components.</p>
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
                        <h5>In-house manufacturing of Cu-Ni 70/30 products in a wide range of sizes and standards</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Fast delivery and customized supply as per project requirements</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Stringent quality control and third-party testing (TPIs on request)</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Export ready packaging with worldwide shipping</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Trusted by clients in marine, power, oil & gas, and defense industries</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="price" class="sec-padd-top sec-padd-bottom bg-light py-5">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h2>COPPER NICKEL C71500 PRICE PER KG (INDIA)</h2>
            </div>

            <p class="text-center fs-5">
                <strong>Typical Range:</strong> ₹2,000 – ₹3,800 per kg
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
                                    What is Copper Nickel 70/30 (C71500) and why is it widely used?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Copper Nickel 70/30, also known as C71500, is an alloy made of 70% copper and 30% nickel
                                    with small additions of iron and manganese for added strength. It is highly valued for
                                    its exceptional resistance to seawater corrosion, biofouling, and stress corrosion
                                    cracking, making it ideal for marine, offshore, and heat exchanger applications.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>
                                    What are the key benefits of Copper Nickel 70/30 (C71500)?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>C71500 offers several performance advantages:</p>
                                <ul>
                                    <li>Outstanding seawater corrosion resistance.</li>
                                    <li>High mechanical strength and toughness.</li>
                                    <li>Non-magnetic and spark-resistant properties.</li>
                                    <li>Excellent weldability, machinability, and formability.</li>
                                    <li>Thermal and electrical stability under high pressure and elevated temperatures.</li>
                                </ul>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>
                                    What are the common applications of Copper Nickel C71500?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>C71500 is widely used in:</p>
                                <ul>
                                    <li>Marine engineering seawater piping, condensers, saltwater flanges, ship hulls,
                                        offshore platforms.</li>
                                    <li>Power plants heat exchangers, evaporators, condensers.</li>
                                    <li>Desalination plants brine heaters, flash chambers, high-pressure piping.</li>
                                    <li>Chemical processing acid-resistant piping and vessels.</li>
                                    <li>Oil & Gas hydraulic lines, firewater systems, instrumentation tubing.</li>
                                    <li>Naval & Defense submarine components, seawater coolers, anti-fouling systems.</li>
                                </ul>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>
                                    What types of Copper Nickel 70/30 (C71500) products does MOKSH TUBES & FITTINGS LLP
                                    supply?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>We offer a full range of C71500 Copper Nickel products, including:</p>
                                <ul>
                                    <li>Seamless & Welded Pipes.</li>
                                    <li>Tubes (U-bend, boiler, heat exchanger).</li>
                                    <li>Sheets, Plates, Coils & Strips.</li>
                                    <li>Round Bars, Hex Bars, Square Bars.</li>
                                    <li>Pipe Fittings (elbows, tees, reducers, caps, stub ends).</li>
                                    <li>Flanges (weld neck, slip on, blind, threaded, socket weld).</li>
                                    <li>Fasteners (bolts, nuts, washers, studs).</li>
                                    <li>Custom-fabricated components.</li>
                                </ul>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>
                                    Why choose MOKSH TUBES & FITTINGS LLP for Copper Nickel 70/30 (C71500)?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>MOKSH TUBES & FITTINGS LLP is a leading manufacturer, supplier, and exporter of Copper
                                    Nickel 70/30 with:</p>
                                <ul>
                                    <li>In house manufacturing and a wide product range.</li>
                                    <li>Fast delivery & customized supply for project needs.</li>
                                    <li>Stringent quality control and third party inspection (TPI available).</li>
                                    <li>Export ready packaging and worldwide delivery.</li>
                                    <li>Trusted supplier for marine, power, desalination, oil & gas, and defense
                                        industries.</li>
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
                    contact <strong>Moksh Tubes & Fittings LLP</strong> — We offer competitive pricing and reliable supply
                    for global projects.
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
      "name": "What is Copper Nickel 70/30 (C71500) and why is it widely used?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Copper Nickel 70/30, also known as C71500, is an alloy made of 70% copper and 30% nickel with small additions of iron and manganese for added strength. It is highly valued for its exceptional resistance to seawater corrosion, biofouling, and stress corrosion cracking, making it ideal for marine, offshore, and heat exchanger applications."
      }
    },
    {
      "@type": "Question",
      "name": "What are the key benefits of Copper Nickel 70/30 (C71500)?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "C71500 offers several performance advantages including outstanding seawater corrosion resistance, high mechanical strength and toughness, non-magnetic and spark-resistant properties, excellent weldability, machinability, and formability, and thermal and electrical stability under high pressure and elevated temperatures."
      }
    },
    {
      "@type": "Question",
      "name": "What are the common applications of Copper Nickel C71500?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "C71500 is widely used in marine engineering (seawater piping, condensers, saltwater flanges, ship hulls, offshore platforms), power plants (heat exchangers, evaporators, condensers), desalination plants (brine heaters, flash chambers, high-pressure piping), chemical processing (acid-resistant piping and vessels), oil & gas (hydraulic lines, firewater systems, instrumentation tubing), and naval & defense applications (submarine components, seawater coolers, anti-fouling systems)."
      }
    },
    {
      "@type": "Question",
      "name": "What types of Copper Nickel 70/30 (C71500) products does MOKSH TUBES & FITTINGS LLP supply?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "MOKSH TUBES & FITTINGS LLP offers a full range of C71500 Copper Nickel products including seamless and welded pipes, tubes (U-bend, boiler, heat exchanger), sheets, plates, coils, strips, round bars, hex bars, square bars, pipe fittings (elbows, tees, reducers, caps, stub ends), flanges (weld neck, slip on, blind, threaded, socket weld), fasteners (bolts, nuts, washers, studs), and custom fabricated components."
      }
    },
    {
      "@type": "Question",
      "name": "Why choose MOKSH TUBES & FITTINGS LLP for Copper Nickel 70/30 (C71500)?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "MOKSH TUBES & FITTINGS LLP is a leading manufacturer, supplier, and exporter of Copper Nickel 70/30 with in-house manufacturing, a wide product range, fast delivery and customized supply for project needs, stringent quality control with third-party inspection, export-ready packaging, and worldwide delivery. The company is a trusted supplier for marine, power, desalination, oil & gas, and defense industries."
      }
    }
  ]
}
@endverbatim
</script>
@endsection
