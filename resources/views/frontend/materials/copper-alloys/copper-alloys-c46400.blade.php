@extends('layouts.master')

@section('title', 'Copper Alloy C46400 | High Strength & Durability')

@section('meta_description',
    'Copper Alloy C46400 is a high-strength, durable copper alloy offering excellent corrosion
    resistance for aerospace, marine, and industrial uses.')

@section('meta_keywords',
    'Copper Alloy C46400, high strength copper alloy, aerospace copper alloy, marine copper alloy,
    industrial copper alloy, durable copper alloy')
@section('og_image', asset('assets/images/copper-alloys/copper-alloys-c46400.webp'))
@section('og_type', 'article')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/copper-alloys/copper-alloys-c46400.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Copper Alloy C46400 <br> High Strength Durable Alloy</h1>

                    <!-- Add your extra content here -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Copper Alloy C46400 is a high-strength copper-zinc alloy known for its excellent durability,
                        corrosion resistance, and good mechanical properties. It offers reliable performance under heavy
                        loads and harsh environments, making it suitable for marine hardware, industrial components,
                        fasteners, and structural applications where long service life and strength are essential.

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
                <h2>Copper Alloy C46400 | Product Overview</h2>
            </div>

            <h2 class="fw-semibold text-center mb-5" style="color: #db7227;">
                Introduction To NAVAL BRASS Copper Alloys C46400
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/copper-alloys/copper-alloys-c46400.webp') }}"alt="Copper Alloys C46400"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a leading manufacturer,
                            supplier, exporter, and stockist of<strong class="tect-black"> C46400 Naval Brass
                                <a href="{{ route('products') }}"> products</a></strong>, including Pipes, Tubes, Rods,
                            Sheets, Plates, Coils, Flanges, Fittings, Fasteners, and custom-engineered components. Known for
                            its superior corrosion resistance in saltwater environments and high strength, Naval Brass
                            C46400 is a copper-zinc alloy enhanced with a small amount of tin to improve corrosion
                            resistance and mechanical properties.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black"><a href="{{ route('materials.copper-Alloys') }}">Copper Alloys
                                    C46400</a></strong>, combines the strength and hardness of brass with the corrosion
                            resistance of tin, making it ideal for marine and industrial applications. It exhibits excellent
                            resistance to dezincification and offers superior hot working characteristics and moderate
                            machinability. C46400 Naval Brass is frequently used in seawater service, propeller shafts, heat
                            exchangers, and other components exposed to harsh environments.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Copper Alloys C46400 Datasheet</h3>
            <p class="mb-3">
                Get the complete Copper Alloys C46400 datasheet with chemical composition,
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

    <!-- Specifications Section -->
    <section class="sec-padd-top" id="specification">
        <div class="container">
            <div class="section-title center">
                <h2>Technical Specifications – C46400 Naval Brass</h2>
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
                                    <td>Material</td>
                                    <td>Naval Brass</td>
                                </tr>
                                <tr class="t-row">
                                    <td>UNS No.</td>
                                    <td>C46400</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Alloy Type</td>
                                    <td>Copper–Zinc–Tin Alloy</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Copper Content</td>
                                    <td>59 – 62 %</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tin Content</td>
                                    <td>0.75 – 1.0 %</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Zinc Content</td>
                                    <td>Balance</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Density</td>
                                    <td>~8.39 g/cm³</td>
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
                                    <td>Cold / Hot Working</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Corrosion Resistance</td>
                                    <td>Excellent (Seawater)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Dezincification Resistance</td>
                                    <td>Very Good</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Chemical Composition -->
    <section id="composition" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Chemical Composition of C46400 Naval Brass</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="table-responsive">
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
                                    <td>59.0 – 62.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Zinc (Zn)</td>
                                    <td>Balance</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tin (Sn)</td>
                                    <td>0.75 – 1.00</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Lead (Pb)</td>
                                    <td>0.07 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron (Fe)</td>
                                    <td>0.06 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Others (Al, Ni)</td>
                                    <td>Trace</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Physical Properties -->
    <section id="properties" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Physical Properties – C46400 Naval Brass</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="table-responsive">
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
                                    <td>0.303 lb/in³</td>
                                    <td>8.39 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Point</td>
                                    <td>1630 – 1660 °F</td>
                                    <td>888 – 905 °C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Thermal Conductivity</td>
                                    <td>63 Btu/ft·hr·°F</td>
                                    <td>109 W/m·K</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Electrical Conductivity</td>
                                    <td>28% IACS</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Modulus of Elasticity</td>
                                    <td>16,000 ksi</td>
                                    <td>110 GPa</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Heat Treatment -->
            <div class="row justify-content-center mt-5" id="heat-treatment">
                <div class="col-lg-8">
                    <h4 class="text-center mb-3" style="color:#db7227;">
                        Heat Treatment & Fabrication of C46400 Naval Brass
                    </h4>

                    <div class="table-responsive">
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
                                    <td>Restore ductility</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Stress Relieving</td>
                                    <td>250 – 350 °C</td>
                                    <td>Reduce internal stresses</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Hot Working</td>
                                    <td>650 – 760 °C</td>
                                    <td>Forging & extrusion</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Cold Working</td>
                                    <td>—</td>
                                    <td>Increase strength</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Brazing / Soldering</td>
                                    <td>—</td>
                                    <td>Excellent</td>
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
            <div class="section-title center">
                <h2>Mechanical Properties – C46400 Naval Brass</h2>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr class="t-row">
                            <th>Condition</th>
                            <th>Tensile Strength</th>
                            <th>Yield Strength (0.5%)</th>
                            <th>Elongation (%)</th>
                            <th>Hardness (HRB)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row">
                            <td>Half-Hard (H02)</td>
                            <td>≥ 54–60 ksi (372–414 MPa)</td>
                            <td>≥ 22–27 ksi (152–186 MPa)</td>
                            <td>22 – 30</td>
                            <td>55 – 80 B</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Available Forms -->
    <section class="sec-padd-top sec-padd-bottom bg-light" id="related grades">
        <div class="container">
            <div class="section-title center">
                <h2>Available Forms & Size Range – C46400 Naval Brass</h2>
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
                            <td>OD 6 – 200 mm</td>
                        </tr>
                        <tr class="t-row">
                            <td>Sheets & Plates</td>
                            <td>0.5 – 60 mm</td>
                        </tr>
                        <tr class="t-row">
                            <td>Coils & Strips</td>
                            <td>0.1 – 6 mm</td>
                        </tr>
                        <tr class="t-row">
                            <td>Rods & Bars</td>
                            <td>Ø 6 – 300 mm</td>
                        </tr>
                        <tr class="t-row">
                            <td>Fittings & Flanges</td>
                            <td>ASME / DIN standards</td>
                        </tr>
                        <tr class="t-row">
                            <td>Fasteners</td>
                            <td>As per drawing</td>
                        </tr>
                        <tr class="t-row">
                            <td>Custom Machined Parts</td>
                            <td>CNC components</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- International Standards -->
    <section class="sec-padd-top sec-padd-bottom" id="international">
        <div class="container">
            <div class="section-title center">
                <h2>International Standards & Equivalent Grades – C46400</h2>
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
                            <td>C46400</td>
                        </tr>
                        <tr class="t-row">
                            <td>ASTM</td>
                            <td>B21, B122, B124, B171</td>
                        </tr>
                        <tr class="t-row">
                            <td>SAE</td>
                            <td>CA464</td>
                        </tr>
                        <tr class="t-row">
                            <td>EN</td>
                            <td>CW712R</td>
                        </tr>
                        <tr class="t-row">
                            <td>BS</td>
                            <td>CZ112</td>
                        </tr>
                        <tr class="t-row">
                            <td>ISO</td>
                            <td>CuZn40Sn1</td>
                        </tr>
                        <tr class="t-row">
                            <td>DIN</td>
                            <td>CuZn40Sn</td>
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
                <h2>Products in Copper Alloys C46400</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Copper Alloys C46400</strong> is available in:
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
                        Copper Alloys C46400 products are produced to the following global standards:
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


    <section id="uses"class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Uses and Advantages</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Excellent corrosion resistance in salt and brackish water</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>High strength and good ductility</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Excellent hot formability and moderate cold workability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Good resistance to dezincification and stress corrosion</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Ideal balance between machinability and durability</h5>
                    </div>
                </div>
            </div>
    </section>


    <section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Copper Alloys C46400</h2>
                <p class="text-center pb-3"><strong class="text-dark">Copper Alloys C46400</strong> is widely chosen for
                    its
                    unmatched combination of high strength, corrosion resistance, and non-magnetic properties, making it
                    indispensable in:</p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Marine Engineering</h5>
                        <p>Propeller shafts, marine hardware, seawater piping, condenser tubes</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Heat Exchangers & Desalination</h5>
                        <p>Tubesheets, evaporator plates, and components used in brine and saltwater systems</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Shipbuilding & Offshore Structures</h5>
                        <p>Valves, fasteners, hull fittings, rudders, and structural supports</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Industrial Applications</h5>
                        <p>Bushings, bearings, washers, and valve stems in water, oil, and gas systems</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Architectural and Decorative</h5>
                        <p>Used in antique fittings, nautical-themed décor, railings, and more due to its bright gold-like
                            appearance and corrosion resistance</p>
                    </div>
                </div>

                {{-- <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Plumbing</h5>
                        <p>Water heaters, geysers, and industrial plumbing fittings</p>
                    </div>
                </div> --}}

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
                        <h5>High-Quality Naval Brass Products: Manufactured to meet international standards</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Custom Fabrication: Tailored sizes and forms based on project needs</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Reliable Sourcing & Stock Availability: Ready-to-ship inventory and sourcing for rare sizes</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Experienced Exporter: Global delivery with quality assurance and proper documentation</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Industry Expertise: Trusted by clients in shipbuilding, desalination, and heavy industry sectors
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="price" class="sec-padd-top sec-padd-bottom bg-light py-5">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h2>C46400 NAVAL BRASS PRICE PER KG (INDIA)</h2>
            </div>

            <p class="text-center fs-5">
                <strong>Typical Range:</strong> ₹700 – ₹1,200 per kg
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
                                    What is C46400 Naval Brass and why is it important?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    C46400 Naval Brass is a copper zinc alloy with 0.75–1% tin, designed to improve
                                    corrosion resistance,
                                    strength, and durability. It is widely used in marine environments, seawater piping,
                                    propeller shafts,
                                    and industrial applications due to its excellent dezincification resistance and hot
                                    working properties.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>
                                    What are the main applications of Naval Brass C46400?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    C46400 is commonly used in shipbuilding, marine hardware, condenser tubes, propeller
                                    shafts, offshore structures,
                                    heat exchangers, desalination plants, bushings, valve stems, bearings, and architectural
                                    fittings. Its gold like
                                    finish also makes it popular for decorative and nautical themed applications.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>
                                    What are the key advantages of using C46400 Naval Brass?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>The alloy offers several benefits:</p>
                                <ul>
                                    <li>Superior corrosion resistance in saltwater and brackish water.</li>
                                    <li>High strength and ductility for heavy duty use.</li>
                                    <li>Resistance to dezincification and stress corrosion.</li>
                                    <li>Good hot formability and moderate machinability.</li>
                                    <li>Long service life in harsh marine and industrial environments.</li>
                                </ul>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>
                                    What types of C46400 Naval Brass products does MOKSH TUBES & FITTINGS LLP supply?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    We offer a complete range of C46400 Naval Brass products, including pipes, tubes, rods,
                                    sheets, plates, coils,
                                    flanges, pipe fittings, fasteners, and custom engineered components. All products are
                                    manufactured in compliance
                                    with ASTM, DIN, and other international standards.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>
                                    Why choose MOKSH TUBES & FITTINGS LLP for Naval Brass materials?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP is a trusted manufacturer and exporter with:
                                </p>
                                <ul>
                                    <li>High quality products meeting global standards.</li>
                                    <li>Custom fabrication for project specific requirements.</li>
                                    <li>Large stock availability and ready to ship inventory.</li>
                                    <li>Reliable export services with documentation support.</li>
                                    <li>Expertise in serving marine, shipbuilding, industrial, and desalination sectors
                                        worldwide.</li>
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


    <section id="contact-us"class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Contact Us</h2>
                <p>
                    contact <strong>Moksh Tubes & Fittings LLP</strong> — your dependable source for
                    premium-grade naval brass solutions.
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
      "name": "What is C46400 Naval Brass and why is it important?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "C46400 Naval Brass is a copper zinc alloy with 0.75–1% tin, designed to improve corrosion resistance, strength, and durability. It is widely used in marine environments, seawater piping, propeller shafts, and industrial applications due to its excellent dezincification resistance and hot working properties."
      }
    },
    {
      "@type": "Question",
      "name": "What are the main applications of Naval Brass C46400?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "C46400 is commonly used in shipbuilding, marine hardware, condenser tubes, propeller shafts, offshore structures, heat exchangers, desalination plants, bushings, valve stems, bearings, and architectural fittings. Its gold-like finish also makes it popular for decorative and nautical-themed applications."
      }
    },
    {
      "@type": "Question",
      "name": "What are the key advantages of using C46400 Naval Brass?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The alloy offers several benefits: Superior corrosion resistance in saltwater and brackish water, high strength and ductility, resistance to dezincification and stress corrosion, good hot formability, and long service life in harsh environments."
      }
    },
    {
      "@type": "Question",
      "name": "What types of C46400 Naval Brass products does MOKSH TUBES & FITTINGS LLP supply?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "MOKSH TUBES & FITTINGS LLP supplies C46400 Naval Brass pipes, tubes, rods, sheets, plates, coils, flanges, pipe fittings, fasteners, and custom-engineered components — all manufactured to ASTM, DIN, and other global standards."
      }
    },
    {
      "@type": "Question",
      "name": "Why choose MOKSH TUBES & FITTINGS LLP for Naval Brass materials?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "MOKSH TUBES & FITTINGS LLP provides high-quality products, custom fabrication, large inventory, export-ready documentation, and expertise in serving marine, shipbuilding, industrial, and desalination sectors worldwide."
      }
    }
  ]
}
@endverbatim
</script>
@endsection
