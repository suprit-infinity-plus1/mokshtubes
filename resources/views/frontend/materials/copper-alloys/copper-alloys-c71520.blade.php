@extends('layouts.master')

@section('title', 'Copper Nickel Alloy C71520 | Marine Grade Performance')

@section('meta_description',
    'Copper Nickel Alloy C71520 provides high performance, durability, and corrosion resistance
    in marine, seawater, and industrial applications.')

@section('meta_keywords',
    'Copper Nickel Alloy C71520, marine grade copper nickel, high performance copper alloy,
    corrosion resistant copper nickel, seawater resistant alloy, durable copper nickel, industrial copper alloy')
@section('og_image', asset('assets/images/copper-alloys/copper-alloys-c71520.webp'))
@section('og_type', 'article')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/copper-alloys/copper-alloys-c71520.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Copper Nickel Alloy C71520 <br> Marine Grade & Corrosion Resistant</h1>

                    <!-- Add your extra content here -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Copper Nickel Alloy C71520 is a high-performance marine-grade alloy offering exceptional resistance
                        to seawater corrosion, erosion, and biofouling. It combines excellent strength, durability, and
                        thermal conductivity, making it ideal for shipbuilding, heat exchangers, condensers, offshore
                        structures, and other demanding marine and coastal applications requiring long-term reliability.
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
                <h2>Copper Alloys C71520 | Product Overview</h2>
            </div>

            <h2 class="fw-semibold text-center mb-5" style="color: #db7227;">
                Introduction To Copper Alloys C71520 / CU-NI 70/30
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/copper-alloys/copper-alloys-c71520.webp') }}"alt="Copper Alloys C71520"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> proudly supplies and exports
                            <strong class="text-black"> Copper Nickel C71520</strong>, a high-performance variant of the
                            traditional CU-NI 70/30 (UNS C71500)
                            alloy. This enhanced copper-<a
                                href="{{ route('materials.nickel-Based-Superalloys') }}">nickel</a> alloy offers improved
                            mechanical strength, corrosion
                            resistance, and erosion resistance over conventional grades.

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black"><a href="{{ route('materials.copper-Alloys') }}">Copper Alloys
                                    C71520</a></strong>, is a controlled composition<strong class="text-black">
                                Copper-Nickel Alloy</strong> with
                            approximately
                            70% copper and 30% nickel, with additions of iron and manganese for increased resistance to
                            seawater flow, cavitation, and stress corrosion cracking. It is specially formulated for
                            high-velocity seawater environments and heat exchanger service. This alloy is often specified in
                            naval, offshore, desalination, and thermal power applications.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Copper Alloys C71520 Datasheet</h3>
            <p class="mb-3">
                Get the complete Copper Alloys C71520 datasheet with chemical composition,
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
                <h2>Technical Specifications – Copper Nickel C71520 (Enhanced Cu-Ni 70/30)</h2>
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
                            <td>Copper Nickel 70/30 – Enhanced Grade</td>
                        </tr>
                         <tr class="t-row">
                            <td>UNS Number</td>
                            <td>C71520</td>
                        </tr>
                         <tr class="t-row">
                            <td>EN Equivalent</td>
                            <td>CW354H</td>
                        </tr>
                         <tr class="t-row">
                            <td>ISO / DIN</td>
                            <td>CuNi30Fe1Mn</td>
                        </tr>
                         <tr class="t-row">
                            <td>Copper Content</td>
                            <td>~65 – 69 %</td>
                        </tr>
                         <tr class="t-row">
                            <td>Nickel Content</td>
                            <td>29 – 33 %</td>
                        </tr>
                         <tr class="t-row">
                            <td>Iron Content</td>
                            <td>0.4 – 1.2 %</td>
                        </tr>
                         <tr class="t-row">
                            <td>Manganese</td>
                            <td>0.5 – 1.0 %</td>
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
                            <td>Excellent (High-Velocity Flow)</td>
                        </tr>
                         <tr class="t-row">
                            <td>Erosion / Cavitation</td>
                            <td>Superior</td>
                        </tr>
                         <tr class="t-row">
                            <td>Typical Use</td>
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
                <h2>Chemical Composition – UNS C71520</h2>
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
                            <td>Balance (approx. 65 – 69)</td>
                        </tr>
                         <tr class="t-row">
                            <td>Nickel (Ni)</td>
                            <td>29.0 – 33.0</td>
                        </tr>
                         <tr class="t-row">
                            <td>Iron (Fe)</td>
                            <td>0.4 – 1.2</td>
                        </tr>
                         <tr class="t-row">
                            <td>Manganese (Mn)</td>
                            <td>0.5 – 1.0</td>
                        </tr>
                         <tr class="t-row">
                            <td>Zinc (Zn)</td>
                            <td>≤ 1.0</td>
                        </tr>
                         <tr class="t-row">
                            <td>Lead (Pb)</td>
                            <td>≤ 0.02</td>
                        </tr>
                         <tr class="t-row">
                            <td>Other Impurities</td>
                            <td>≤ 0.50 (Total)</td>
                        </tr>
                    </tbody>
                </table>

                <p class="mt-3 text-center">
                    <strong>Note:</strong> C71520 includes enhanced control over trace elements and impurity levels for
                    superior corrosion resistance in critical systems.
                </p>
            </div>
        </div>
    </section>

    <!-- ================= PHYSICAL PROPERTIES ================= -->
    <section class="sec-padd-top sec-padd-bottom bg-light" id="properties">
        <div class="container">
            <div class="section-title center">
                <h2>Physical Properties – Copper Nickel C71520</h2>
            </div>

            <div class="table-responsive col-lg-8 mx-auto">
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
                            <td>Melting Range</td>
                            <td>2260 – 2390 °F</td>
                            <td>1240 – 1310 °C</td>
                        </tr>
                         <tr class="t-row">
                            <td>Thermal Conductivity</td>
                            <td>19 Btu/ft·hr·°F</td>
                            <td>33 W/m·K</td>
                        </tr>
                         <tr class="t-row">
                            <td>Electrical Conductivity</td>
                            <td>6 – 10% IACS</td>
                            <td>—</td>
                        </tr>
                         <tr class="t-row">
                            <td>Electrical Resistivity</td>
                            <td>312 ohm·cmil/ft</td>
                            <td>0.520 µΩ·m</td>
                        </tr>
                         <tr class="t-row">
                            <td>Specific Heat</td>
                            <td>0.09 Btu/lb·°F</td>
                            <td>0.38 J/g·K</td>
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
                <h2>Heat Treatment & Fabrication – C71520</h2>
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
                            <td>Restores ductility</td>
                        </tr>
                         <tr class="t-row">
                            <td>Stress Relieving</td>
                            <td>300 – 350 °C</td>
                            <td>Reduces residual stresses</td>
                        </tr>
                         <tr class="t-row">
                            <td>Cold Working</td>
                            <td>—</td>
                            <td>Increases strength & hardness</td>
                        </tr>
                         <tr class="t-row">
                            <td>Welding</td>
                            <td>TIG / MIG / SMAW</td>
                            <td>Excellent weldability</td>
                        </tr>
                         <tr class="t-row">
                            <td>Brazing</td>
                            <td>✔</td>
                            <td>Suitable</td>
                        </tr>
                    </tbody>
                </table>

                <p class="mt-3 text-center">
                    C71520 retains corrosion resistance and mechanical integrity after welding, making it ideal for naval
                    and offshore systems.
                </p>
            </div>
        </div>
    </section>

    <!-- ================= MECHANICAL PROPERTIES ================= -->
    <section class="sec-padd-top sec-padd-bottom" id="mechanical">
        <div class="container">
            <div class="section-title center">
                <h2>Mechanical Properties – C71520 (Annealed Condition)</h2>
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
                            <td>Annealed / Soft (M20 / O25)</td>
                            <td>≥ 50 ksi / ≥ 345 MPa</td>
                            <td>≥ 18 ksi / ≥ 125 MPa</td>
                            <td>30 – 35%</td>
                            <td>~80 HB</td>
                        </tr>
                         <tr class="t-row">
                            <td>Half-Hard (H01)</td>
                            <td>~55 ksi / ~380 MPa</td>
                            <td>~25 ksi / ~170 MPa</td>
                            <td>≥ 10%</td>
                            <td>80 – 100 HB</td>
                        </tr>
                         <tr class="t-row">
                            <td>Quarter-Hard (H04)</td>
                            <td>~60 ksi / ~415 MPa</td>
                            <td>~25 ksi / ~170 MPa</td>
                            <td>≥ 10%</td>
                            <td>100 – 120 HB</td>
                        </tr>
                         <tr class="t-row">
                            <td>Full-Hard (H08)</td>
                            <td>~65 ksi / ~450 MPa</td>
                            <td>~25 ksi / ~170 MPa</td>
                            <td>≥ 10%</td>
                            <td>110 – 130 HB</td>
                        </tr>
                         <tr class="t-row">
                            <td>Flat Products (M10)</td>
                            <td>45 – 50 ksi / 310 – 345 MPa</td>
                            <td>≥ 20 ksi / ≥ 105 MPa</td>
                            <td>≥ 30%</td>
                            <td>~80 HB</td>
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
                <h2>Available Forms & Size Range – C71520</h2>
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
                            <td>Forged Components</td>
                            <td>As per drawing</td>
                        </tr>
                         <tr class="t-row">
                            <td>Welding Products</td>
                            <td>Matching filler wires & electrodes</td>
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
                <h2>International Standards & Equivalent Grades – C71520</h2>
            </div>

            <div class="table-responsive col-lg-8 mx-auto">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                         <tr class="t-row">
                            <th>Standard</th>
                            <th>Equivalent</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr class="t-row">
                            <td>UNS</td>
                            <td>C71520</td>
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
                            <td>DIN</td>
                            <td>2.0882</td>
                        </tr>
                         <tr class="t-row">
                            <td>ASTM</td>
                            <td>B111, B122, B171, B466, B467</td>
                        </tr>
                         <tr class="t-row">
                            <td>MIL</td>
                            <td>MIL-T-16420</td>
                        </tr>
                         <tr class="t-row">
                            <td>DEF-STAN</td>
                            <td>02-879</td>
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
                <h2>Products in Copper Alloys C71520</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Copper Alloys C71520</strong> is available in:
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
                        Copper Alloys C71520 products are produced to the following global standards:
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
                <h2>Applications of Copper Alloys C71520</h2>
                <p class="text-center pb-3"><strong class="text-dark">Copper Alloys C71520</strong> is extensively used
                    in:</p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Outstanding Seawater Corrosion Resistance</h5>
                        <p>C71520 offers superior resistance to saltwater, chloride ions, biofouling, and MIC (microbial
                            corrosion).</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Improved Strength & Durability</h5>
                        <p>Higher tensile and yield strength than standard C71500, making it suitable for pressurized and
                            structural marine components.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Superior Erosion Resistance</h5>
                        <p>Highly effective in high-velocity turbulent seawater systems and brine environments.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Excellent Heat Transfer Properties</h5>
                        <p>Low scaling and fouling rates with excellent thermal conductivity make it perfect for heat
                            exchangers and condensers.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Good Weldability & Fabricability</h5>
                        <p>Compatible with all common welding methods including TIG, MIG, and brazing.</p>
                    </div>
                </div>

                {{-- <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Naval & Defense Applications</h5>
                        <p>Anti-fouling systems, seawater coolers, submarine components.</p>
                    </div> --}}
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
                        <h5>Trusted Exporter of Defense-Grade CU-NI Alloys</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Wide inventory with short lead times and global delivery</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Certified to ASTM, EN, MIL, and DEF-STAN standards</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>In-house CNC machining and custom fabrication services</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Marine, offshore, and power project specialists</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="price" class="sec-padd-top sec-padd-bottom bg-light py-5">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h2>COPPER NICKEL C71520 PRICE PER KG (INDIA)</h2>
            </div>

            <p class="text-center fs-5">
                <strong>Typical Range:</strong> ₹2,400 – ₹4,800 per kg
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
                                <h4>What is Copper Nickel C71520 and how is it different from C71500?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Copper Nickel C71520 is a high performance version of the traditional Cu-Ni 70/30 alloy
                                    (UNS C71500).
                                    It contains around 70% copper and 30% nickel with controlled additions of iron and
                                    manganese,
                                    giving it enhanced mechanical strength, better erosion resistance, and improved
                                    durability in
                                    high-velocity seawater environments compared to the standard grade.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the main advantages of Copper Nickel C71520?</h4>
                            </div>
                            <div class="accord-content">
                                <ul>
                                    <li>Exceptional resistance to seawater corrosion, biofouling, and microbial corrosion
                                    </li>
                                    <li>Superior erosion and cavitation resistance in turbulent marine systems</li>
                                    <li>Excellent thermal conductivity for heat exchangers</li>
                                    <li>Retains strength at high pressures</li>
                                    <li>Non-magnetic and spark resistant</li>
                                    <li>Highly weldable, making it ideal for critical engineering applications</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Where is Copper Nickel C71520 commonly used?</h4>
                            </div>
                            <div class="accord-content">
                                <ul>
                                    <li>Marine & Offshore engineering seawater piping, condensers, pumps, ship hulls.</li>
                                    <li>Naval & Defense submarine components, anti-fouling systems, seawater cooling lines.
                                    </li>
                                    <li>Desalination plants brine heaters, high-pressure piping.</li>
                                    <li>Power plants condensers and heat exchangers.</li>
                                    <li>Oil & Gas firewater systems, hydraulic lines, instrumentation tubing.</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What Copper Nickel C71520 products are available from MOKSH TUBES & FITTINGS LLP?</h4>
                            </div>
                            <div class="accord-content">
                                <ul>
                                    <li>Seamless and Welded Pipes.</li>
                                    <li>Heat Exchanger and U-bend Tubes.</li>
                                    <li>Sheets, Plates, Coils, Strips.</li>
                                    <li>Round Bars, Square Bars, Hex Bars.</li>
                                    <li>Pipe Fittings.</li>
                                    <li>Flanges.</li>
                                    <li>Fasteners.</li>
                                    <li>Custom Fabricated Components.</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why should I choose MOKSH TUBES & FITTINGS LLP for Copper Nickel C71520?</h4>
                            </div>
                            <div class="accord-content">
                                <ul>
                                    <li>Certified materials that meet ASTM, EN, MIL, and DEF STAN standards.</li>
                                    <li>In house CNC machining & customized fabrication.</li>
                                    <li>Strict quality control with third party inspections.</li>
                                    <li>Fast worldwide delivery with export ready packaging.</li>
                                    <li>Trusted solutions for marine, power, offshore, oil & gas, and defense projects.</li>
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
                    contact <strong>Moksh Tubes & Fittings LLP</strong> — a trusted global source for
                    corrosion-resistant alloys.
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
      "name": "What is Copper Nickel C71520 and how is it different from C71500?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Copper Nickel C71520 is a high-performance version of the traditional Cu-Ni 70/30 alloy (UNS C71500). It contains around 70% copper and 30% nickel with controlled additions of iron and manganese, giving it enhanced mechanical strength, better erosion resistance, and improved durability in high-velocity seawater environments compared to the standard grade."
      }
    },
    {
      "@type": "Question",
      "name": "What are the main advantages of Copper Nickel C71520?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Copper Nickel C71520 offers exceptional resistance to seawater corrosion, biofouling, and microbial corrosion. It has superior erosion and cavitation resistance in turbulent marine systems, excellent thermal conductivity for heat exchangers, retains strength at high pressures, is non-magnetic and spark resistant, and is highly weldable for critical engineering applications."
      }
    },
    {
      "@type": "Question",
      "name": "Where is Copper Nickel C71520 commonly used?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "C71520 is commonly used in marine and offshore engineering for seawater piping, condensers, pumps, and ship hulls; naval and defense applications like submarine components and seawater cooling lines; desalination plants for brine heaters and high-pressure piping; power plants for condensers and heat exchangers; and oil & gas systems such as firewater, hydraulic, and instrumentation lines."
      }
    },
    {
      "@type": "Question",
      "name": "What Copper Nickel C71520 products are available from MOKSH TUBES & FITTINGS LLP?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "MOKSH TUBES & FITTINGS LLP supplies a wide range of Copper Nickel C71520 products, including seamless and welded pipes, heat exchanger and U-bend tubes, sheets, plates, coils, strips, round bars, square bars, hex bars, pipe fittings, flanges, fasteners, and custom fabricated components."
      }
    },
    {
      "@type": "Question",
      "name": "Why should I choose MOKSH TUBES & FITTINGS LLP for Copper Nickel C71520?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "MOKSH TUBES & FITTINGS LLP provides certified materials that meet ASTM, EN, MIL, and DEF STAN standards. The company offers in-house CNC machining and custom fabrication, strict quality control with third-party inspections, fast worldwide delivery with export-ready packaging, and trusted solutions for marine, power, offshore, oil & gas, and defense projects."
      }
    }
  ]
}
@endverbatim
</script>
@endsection
