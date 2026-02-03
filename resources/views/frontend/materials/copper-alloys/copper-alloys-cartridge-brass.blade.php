@extends('layouts.master')

@section('title', 'C26000 Cartridge Brass: Machinable & Corrosion-Resistant')

@section('meta_description',
    'Cartridge Brass Alloy C26000 offers excellent machinability, durability, and corrosion
    resistance for engineering, marine, and industrial uses.')

@section('meta_keywords',
    'Cartridge Brass C26000, C26000 brass alloy, machinable brass, corrosion resistant brass,
    durable brass alloy, general engineering brass, marine brass alloy, industrial brass grade')
@section('og_image', asset('assets/images/copper-alloys/copper-alloys-cartridge-brass.webp'))
@section('og_type', 'article')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area"
        style="background-image: url(/assets/images/copper-alloys/copper-alloys-cartridge-brass.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Cartridge Brass Alloy C26000 <br> Durable & Corrosion Resistant</h1>

                    <!-- Add your extra content here -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Cartridge Brass Alloy C26000 is a versatile copper-zinc alloy known for its excellent durability,
                        corrosion resistance, and outstanding formability. It offers good strength and workability, making
                        it ideal for cartridges, electrical components, fasteners, architectural fittings, and general
                        engineering applications requiring reliable performance and long service life.

                    </p>
                    <!-- End extra content -->
                </div>
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
                <h2>Cartridge Brass Alloy C26000 | Product Overview</h2>
            </div>

            <h2 class="fw-semibold text-center mb-5" style="color: #db7227;">
                Introduction To Copper Alloys C26000 Cartridge Brass / 70-30 BRASS
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/copper-alloys/copper-alloys-cartridge-brass.webp') }}"alt="Copper Alloys C26000 Cartridge Brass"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a leading manufacturer,
                            exporter, importer, and stockist of<strong class="text-black"> Cartridge Brass (C26000) <a
                                    href="{{ route('products') }}">products</a></strong>, including Pipes, Tubes,
                            Sheets, Plates, Coils, Rods, Flats, Wires, Foils, Circles, and Custom Shapes. We specialize in
                            supplying high-quality C26000 in a wide range of dimensions, finishes, and tempers to suit
                            industrial, architectural, and engineering needs.

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black"><a href="{{ route('materials.copper-Alloys') }}">Copper Alloys
                                    C26000 Cartridge Brass</a></strong>, commonly referred to as 70/30 Brass, is a
                            copper-zinc alloy containing 70% copper and 30% zinc. It is known for its excellent cold
                            workability, corrosion resistance, high ductility, and aesthetic golden color. This alloy is
                            widely used in the manufacture of ammunition components (hence the name "Cartridge Brass"),
                            plumbing fittings, electrical terminals, architectural accents, and musical instruments.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Copper Alloys Cartridge Brass Datasheet</h3>
            <p class="mb-3">
                Get the complete Copper Alloys Cartridge Brass datasheet with chemical composition,
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
                <h2>Technical Specifications – C26000 Cartridge Brass (UNS C26000 / CuZn30)</h2>
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
                            <td>Cartridge Brass 70/30</td>
                        </tr>
                         <tr class="t-row">
                            <td>UNS No.</td>
                            <td>C26000</td>
                        </tr>
                         <tr class="t-row">
                            <td>Alloy Type</td>
                            <td>Copper–Zinc Alloy</td>
                        </tr>
                         <tr class="t-row">
                            <td>Copper Content</td>
                            <td>68.5 – 71.5 %</td>
                        </tr>
                         <tr class="t-row">
                            <td>Zinc Content</td>
                            <td>Balance</td>
                        </tr>
                         <tr class="t-row">
                            <td>Density</td>
                            <td>8.53 g/cm³</td>
                        </tr>
                         <tr class="t-row">
                            <td>Magnetic Properties</td>
                            <td>Non-Magnetic</td>
                        </tr>
                         <tr class="t-row">
                            <td>Heat Treatable</td>
                            <td>❌ No (strength by cold working)</td>
                        </tr>
                         <tr class="t-row">
                            <td>Formability</td>
                            <td>Excellent</td>
                        </tr>
                         <tr class="t-row">
                            <td>Corrosion Resistance</td>
                            <td>Good (atmospheric & fresh water)</td>
                        </tr>
                         <tr class="t-row">
                            <td>Electrical Conductivity</td>
                            <td>~28% IACS</td>
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
                <h2>Chemical Composition – C26000 Cartridge Brass</h2>
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
                            <td>Copper (Cu)</td>
                            <td>68.5 – 71.5</td>
                        </tr>
                         <tr class="t-row">
                            <td>Zinc (Zn)</td>
                            <td>Remainder</td>
                        </tr>
                         <tr class="t-row">
                            <td>Lead (Pb)</td>
                            <td>0.07 max</td>
                        </tr>
                         <tr class="t-row">
                            <td>Iron (Fe)</td>
                            <td>0.05 max</td>
                        </tr>
                         <tr class="t-row">
                            <td>Total Impurities</td>
                            <td>0.30 max</td>
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
                <h2>Physical Properties – C26000</h2>
            </div>

            <div class="table-responsive col-lg-8 mx-auto">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                         <tr class="t-row">
                            <th>Property</th>
                            <th>Metric Units</th>
                            <th>Imperial Units</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr class="t-row">
                            <td>Density</td>
                            <td>8.53 g/cm³</td>
                            <td>0.308 lb/in³</td>
                        </tr>
                         <tr class="t-row">
                            <td>Melting Point</td>
                            <td>899 – 940 °C</td>
                            <td>1650 – 1724 °F</td>
                        </tr>
                         <tr class="t-row">
                            <td>Electrical Conductivity</td>
                            <td>28% IACS</td>
                            <td>—</td>
                        </tr>
                         <tr class="t-row">
                            <td>Thermal Conductivity</td>
                            <td>111 W/m·K</td>
                            <td>64.2 BTU/ft·hr·°F</td>
                        </tr>
                         <tr class="t-row">
                            <td>Coefficient of Expansion</td>
                            <td>20.5 µm/m·°C</td>
                            <td>11.4 µin/in·°F</td>
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
                <h2>Heat Treatment & Fabrication – C26000</h2>
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
                            <td>450 – 650 °C</td>
                            <td>Restores ductility</td>
                        </tr>
                         <tr class="t-row">
                            <td>Stress Relieving</td>
                            <td>250 – 350 °C</td>
                            <td>Reduces residual stress</td>
                        </tr>
                         <tr class="t-row">
                            <td>Cold Working</td>
                            <td>—</td>
                            <td>Increases strength & hardness</td>
                        </tr>
                         <tr class="t-row">
                            <td>Brazing / Soldering</td>
                            <td>✔ Excellent</td>
                            <td>Commonly used</td>
                        </tr>
                         <tr class="t-row">
                            <td>Machinability</td>
                            <td>Moderate</td>
                            <td>Improved in harder tempers</td>
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
                <h2>Mechanical Properties – C26000 (Annealed Temper O)</h2>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                         <tr class="t-row">
                            <th>Property / Temper</th>
                            <th>Annealed (Soft)</th>
                            <th>½-Hard</th>
                            <th>Hard / Full-Hard</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr class="t-row">
                            <td>Tensile Strength</td>
                            <td>45–60 ksi / 310–415 MPa</td>
                            <td>60–75 ksi / 415–520 MPa</td>
                            <td>83–92 ksi / 575–635 MPa</td>
                        </tr>
                         <tr class="t-row">
                            <td>Yield Strength (0.2%)</td>
                            <td>10–15 ksi / 70–100 MPa</td>
                            <td>32–42 ksi / 220–290 MPa</td>
                            <td>67–78 ksi / 460–540 MPa</td>
                        </tr>
                         <tr class="t-row">
                            <td>Elongation (%)</td>
                            <td>40–67%</td>
                            <td>10–25%</td>
                            <td>2–14%</td>
                        </tr>
                         <tr class="t-row">
                            <td>Brinell Hardness</td>
                            <td>65–80 HB</td>
                            <td>100–120 HB</td>
                            <td>~175–185 HV</td>
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
                <h2>Available Forms & Size Range – C26000</h2>
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
                            <td>Sheets & Plates</td>
                            <td>0.3 – 50 mm</td>
                        </tr>
                         <tr class="t-row">
                            <td>Coils & Strips</td>
                            <td>0.05 – 6 mm</td>
                        </tr>
                         <tr class="t-row">
                            <td>Pipes & Tubes</td>
                            <td>OD 6 – 150 mm</td>
                        </tr>
                         <tr class="t-row">
                            <td>Rods & Bars</td>
                            <td>Ø 5 – 300 mm</td>
                        </tr>
                         <tr class="t-row">
                            <td>Flats</td>
                            <td>Width up to 300 mm</td>
                        </tr>
                         <tr class="t-row">
                            <td>Foils</td>
                            <td>As thin as 0.02 mm</td>
                        </tr>
                         <tr class="t-row">
                            <td>Custom Components</td>
                            <td>CNC machined</td>
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
                <h2>International Standards & Equivalent Grades – C26000</h2>
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
                            <td>C26000</td>
                        </tr>
                         <tr class="t-row">
                            <td>ASTM</td>
                            <td>B36, B122, B135</td>
                        </tr>
                         <tr class="t-row">
                            <td>SAE</td>
                            <td>J461 / J463</td>
                        </tr>
                         <tr class="t-row">
                            <td>ISO</td>
                            <td>CuZn30</td>
                        </tr>
                         <tr class="t-row">
                            <td>BS</td>
                            <td>CZ126</td>
                        </tr>
                         <tr class="t-row">
                            <td>DIN</td>
                            <td>CuZn30</td>
                        </tr>
                         <tr class="t-row">
                            <td>EN</td>
                            <td>CW505L</td>
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
                <h2>Products in Copper Alloys C26000 Cartridge Brass</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Copper Alloys C26000 Cartridge Brass</strong> is available in:
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
                        Copper Alloys C26000 Cartridge Brass products are produced to the following global standards:
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
                        <h5>Excellent cold workability and formability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>High corrosion resistance in most environments</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Attractive golden-yellow color for decorative use</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Good strength and moderate conductivity</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Easily soldered and brazed</h5>
                    </div>
                </div>
            </div>
    </section>


    <section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Copper Alloys C26000 Cartridge Brass</h2>
                <p class="text-center pb-3"><strong class="text-dark">Copper Alloys C26000 Cartridge Brass</strong> is
                    widely used across a range of industries for its mechanical and aesthetic properties:</p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Ammunition Components</h5>
                        <p>Cartridge cases, bullet jackets</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Architecture & Decoration</h5>
                        <p>Door hardware, trim, handles, railings, and nameplates</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Plumbing & HVAC</h5>
                        <p>Valves, fittings, pump components, and radiators</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Electrical & Electronics</h5>
                        <p>Terminals, connectors, switch components</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Musical Instruments</h5>
                        <p>Trumpets, trombones, saxophones</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Industrial Components</h5>
                        <p>Heat exchangers, radiator cores, condenser tubes</p>
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
                        <h5>Over a decade of experience in supplying brass and copper alloys</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>High-precision processing and customization services</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Rapid delivery and reliable sourcing network</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Compliance with international quality standards</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Competitive pricing and global logistics support</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="price" class="sec-padd-top sec-padd-bottom bg-light py-5">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h2>C26000 CARTRIDGE BRASS PRICE PER KG (INDIA)</h2>
            </div>

            <p class="text-center fs-5">
                <strong>Typical Range:</strong> ₹620 – ₹1,050 per kg
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
                                <h4>What is Cartridge Brass C26000 and why is it called 70/30 Brass?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Cartridge Brass C26000, also known as 70/30 Brass, is a copper zinc alloy containing
                                    approximately
                                    70% copper and 30% zinc. It is recognized for its excellent cold workability, high
                                    ductility,
                                    attractive golden-yellow color, and strong corrosion resistance. The name “Cartridge
                                    Brass” comes
                                    from its traditional use in ammunition cases and bullet jackets due to its superior
                                    formability
                                    and strength.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the main benefits of using C26000 Cartridge Brass?</h4>
                            </div>
                            <div class="accord-content">
                                <ul>
                                    <li>Outstanding cold working properties</li>
                                    <li>Excellent corrosion resistance in different environments</li>
                                    <li>Bright decorative finish for functional and aesthetic applications</li>
                                    <li>Good strength with moderate electrical and thermal conductivity</li>
                                    <li>Easily soldered, brazed, or machined</li>
                                    <li>Versatile choice for multiple industries</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Where is Cartridge Brass C26000 commonly used?</h4>
                            </div>
                            <div class="accord-content">
                                <ul>
                                    <li>Ammunition manufacturing cartridge cases and bullet jackets</li>
                                    <li>Architecture & Decoration door handles, trim, railings, nameplates</li>
                                    <li>Plumbing & HVAC valves, fittings, radiators</li>
                                    <li>Electrical & Electronics connectors and terminals</li>
                                    <li>Musical instruments trumpets, saxophones</li>
                                    <li>Industrial equipment heat exchangers, condenser tubes, radiator cores</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What Cartridge Brass C26000 products does MOKSH TUBES & FITTINGS LLP supply?</h4>
                            </div>
                            <div class="accord-content">
                                <ul>
                                    <li>Seamless and Welded Pipes</li>
                                    <li>Tubes</li>
                                    <li>Sheets, Plates, Coils, Strips</li>
                                    <li>Round Bars, Hex Bars, Square Bars, Flats</li>
                                    <li>Pipe Fittings</li>
                                    <li>Flanges</li>
                                    <li>Fasteners</li>
                                    <li>Custom Fabricated Components</li>
                                </ul>
                                <p>
                                    All products are manufactured in compliance with international quality standards to meet
                                    diverse
                                    industrial, architectural, and engineering requirements.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose MOKSH TUBES & FITTINGS LLP for Cartridge Brass C26000 materials?</h4>
                            </div>
                            <div class="accord-content">
                                <ul>
                                    <li>Trusted manufacturer, exporter, importer, and stockist with over a decade of
                                        expertise</li>
                                    <li>High precision processing with tailored dimensions and finishes</li>
                                    <li>Rapid delivery and global logistics support</li>
                                    <li>Strict adherence to ASTM and international standards</li>
                                    <li>Competitive pricing with reliable sourcing</li>
                                    <li>Ensures quality and consistency for every order worldwide</li>
                                </ul>
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
                    contact <strong>Moksh Tubes & Fittings LLP</strong> — today for quotes, technical support, and custom
                    orders.
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
    @verbatim
        <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is Cartridge Brass C26000 and why is it called 70/30 Brass?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Cartridge Brass C26000, also known as 70/30 Brass, is a copper zinc alloy containing approximately 70% copper and 30% zinc. It is recognized for its excellent cold workability, high ductility, attractive golden-yellow color, and strong corrosion resistance. The name 'Cartridge Brass' comes from its traditional use in ammunition cases and bullet jackets due to its superior formability and strength."
      }
    },
    {
      "@type": "Question",
      "name": "What are the main benefits of using C26000 Cartridge Brass?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The main benefits of using C26000 Cartridge Brass include outstanding cold working properties, excellent corrosion resistance, bright decorative finish, good strength with moderate electrical and thermal conductivity, easy soldering and brazing, and versatility across industries."
      }
    },
    {
      "@type": "Question",
      "name": "Where is Cartridge Brass C26000 commonly used?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "C26000 Cartridge Brass is used in ammunition manufacturing (cartridge cases, bullet jackets), architecture and decoration (door handles, trim, railings, nameplates), plumbing and HVAC (valves, fittings, radiators), electrical and electronics (connectors, terminals), musical instruments (trumpets, saxophones), and industrial equipment (heat exchangers, condenser tubes, radiator cores)."
      }
    },
    {
      "@type": "Question",
      "name": "What Cartridge Brass C26000 products does MOKSH TUBES & FITTINGS LLP supply?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "MOKSH TUBES & FITTINGS LLP supplies Seamless and Welded Pipes, Tubes, Sheets, Plates, Coils, Strips, Round Bars, Hex Bars, Square Bars, Flats, Pipe Fittings, Flanges, Fasteners, and Custom Fabricated Components. All products comply with international quality standards for industrial, architectural, and engineering applications."
      }
    },
    {
      "@type": "Question",
      "name": "Why choose MOKSH TUBES & FITTINGS LLP for Cartridge Brass C26000 materials?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "MOKSH TUBES & FITTINGS LLP is a trusted manufacturer, exporter, importer, and stockist with over a decade of expertise. The company provides high-precision processing, rapid global delivery, strict adherence to ASTM standards, competitive pricing, and consistent quality for every order."
      }
    }
  ]
}
@endverbatim
</script>
    @endsection
