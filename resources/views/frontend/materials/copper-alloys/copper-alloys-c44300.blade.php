@extends('layouts.master')

@section('title', 'Copper Alloy C44300 | Corrosion Resistant & Durable')

@section('meta_description',
    'Copper Alloy C44300 – high-performance copper alloy offering excellent corrosion
    resistance and strength for demanding industrial environments.')

@section('meta_keywords',
    'Copper Alloy C44300, corrosion resistant copper, durable copper alloy, industrial copper
    alloy, high strength copper')
@section('og_image', asset('assets/images/copper-alloys/copper-alloys-c44300.webp'))
@section('og_type', 'article')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/copper-alloys/copper-alloys-c44300.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Copper Alloy C44300<br>Admiralty Brass</h1>

                    <!-- Add your extra content here -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Copper Alloy C44300 (Admiralty Brass) is a corrosion-resistant copper-zinc-tin alloy specially
                        developed for marine and heat-exchange applications. It offers excellent resistance to seawater
                        corrosion, good thermal conductivity, and reliable mechanical strength, making it an ideal choice
                        for condenser tubes, heat exchangers, and coastal or offshore engineering environments where
                        long-term performance is essential.

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
                <h2>Copper Alloys C44300 | Product Overview</h2>
            </div>

            <h2 class="fw-semibold text-center mb-5" style="color: #db7227;">
                Introduction To Copper Alloys C44300 ADMIRALTY BRASS
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/copper-alloys/copper-alloys-c44300.webp') }}"alt="Copper Alloys C44300"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a reputed manufacturer,
                            supplier, and exporter of high-quality<strong class="text-black"> C44300 Admiralty Brass <a
                                    href="{{ route('products') }}">products</a></strong> including tubes, pipes,
                            sheets, plates, coils, and customized fabricated items. C44300, also known as Admiralty Brass,
                            is a copper-zinc alloy with a small addition of tin (around 1%) and arsenic, which enhances its
                            corrosion resistance—especially against dezincification in marine and brackish water
                            environments.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black"><a href="{{ route('materials.copper-Alloys') }}">Copper Alloys
                                    C44300</a></strong>, is particularly suited for heat exchangers and condenser tubes due
                            to its superior corrosion resistance, high thermal conductivity, and good mechanical strength.
                            It is one of the most commonly used brass alloys in marine and desalination applications.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Copper Alloys C44300 Datasheet</h3>
            <p class="mb-3">
                Get the complete Copper Alloys C44300 datasheet with chemical composition,
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
                <h2>Technical Specifications – C44300 Admiralty Brass</h2>
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
                                    <td>Admiralty Brass</td>
                                </tr>
                                <tr class="t-row">
                                    <td>UNS No.</td>
                                    <td>C44300</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Alloy Type</td>
                                    <td>Copper–Zinc–Tin–Arsenic Alloy</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Copper Content</td>
                                    <td>70 – 73 %</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tin Content</td>
                                    <td>0.9 – 1.2 %</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Arsenic Content</td>
                                    <td>0.02 – 0.06 %</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Zinc Content</td>
                                    <td>Balance</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Density</td>
                                    <td>~8.49 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Magnetic Properties</td>
                                    <td>Non-Magnetic</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Heat Treatable</td>
                                    <td>No</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Strength Control</td>
                                    <td>Cold Working</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Dezincification Resistance</td>
                                    <td>Excellent</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Typical Service</td>
                                    <td>Condensers & Heat Exchangers</td>
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
                <h2>Chemical Composition of C44300 Admiralty Brass</h2>
            </div>

            <div class="table-responsive col-lg-8 mx-auto">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Element</th>
                            <th>Composition (%)</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="t-row">
                            <td>Copper (Cu)</td>
                            <td>70.0 – 73.0</td>
                        </tr>
                        <tr class="t-row">
                            <td>Zinc (Zn)</td>
                            <td>Balance</td>
                        </tr>
                        <tr class="t-row">
                            <td>Tin (Sn)</td>
                            <td>0.9 – 1.2</td>
                        </tr>
                        <tr class="t-row">
                            <td>Arsenic (As)</td>
                            <td>0.02 – 0.06</td>
                        </tr>
                        <tr class="t-row">
                            <td>Lead (Pb)</td>
                            <td>0.07 max</td>
                        </tr>
                        <tr class="t-row">
                            <td>Iron (Fe)</td>
                            <td>0.06 max</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Physical Properties -->
    <section id="properties" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color:#174268;">Physical Properties of C44300 Admiralty Brass</h2>
            </div>

            <div class="table-responsive col-lg-8 mx-auto">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Property</th>
                            <th>Imperial</th>
                            <th>Metric</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="t-row">
                            <td>Density</td>
                            <td>0.307 lb/in³</td>
                            <td>8.49 g/cm³</td>
                        </tr>
                        <tr class="t-row">
                            <td>Melting Point</td>
                            <td>1630 – 1660 °F</td>
                            <td>888 – 905 °C</td>
                        </tr>
                        <tr class="t-row">
                            <td>Thermal Conductivity</td>
                            <td>64 Btu/ft·hr·°F</td>
                            <td>111 W/m·K</td>
                        </tr>
                        <tr class="t-row">
                            <td>Electrical Conductivity</td>
                            <td>28% IACS</td>
                            <td>—</td>
                        </tr>
                        <tr class="t-row">
                            <td>Specific Heat</td>
                            <td>0.09 Btu/lb·°F</td>
                            <td>377 J/kg·K</td>
                        </tr>
                        <tr class="t-row">
                            <td>Coefficient of Expansion</td>
                            <td>10.2 µin/in·°F</td>
                            <td>18.5 µm/m·K</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Heat Treatment -->
    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Heat Treatment & Fabrication of C44300</h2>
            </div>

            <div class="table-responsive col-lg-10 mx-auto">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Process</th>
                            <th>Temperature Range</th>
                            <th>Purpose</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="t-row">
                            <td>Annealing</td>
                            <td>450 – 650 °C</td>
                            <td>Restores ductility</td>
                        </tr>
                        <tr class="t-row">
                            <td>Stress Relieving</td>
                            <td>250 – 350 °C</td>
                            <td>Reduces internal stress</td>
                        </tr>
                        <tr class="t-row">
                            <td>Cold Working</td>
                            <td>—</td>
                            <td>Improves strength</td>
                        </tr>
                        <tr class="t-row">
                            <td>Tube Expansion</td>
                            <td>—</td>
                            <td>Excellent</td>
                        </tr>
                        <tr class="t-row">
                            <td>Bending & Flaring</td>
                            <td>—</td>
                            <td>Very Good</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Available Forms -->
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Available Forms & Size Range – C44300 Admiralty Brass</h2>
            </div>

            <div class="table-responsive col-lg-10 mx-auto">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Product Form</th>
                            <th>Size Range</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="t-row">
                            <td>Seamless Tubes</td>
                            <td>OD 6 – 100 mm</td>
                        </tr>
                        <tr class="t-row">
                            <td>Welded Tubes</td>
                            <td>OD up to 200 mm</td>
                        </tr>
                        <tr class="t-row">
                            <td>Pipes</td>
                            <td>As per ASTM B111</td>
                        </tr>
                        <tr class="t-row">
                            <td>Sheets & Plates</td>
                            <td>0.5 – 50 mm</td>
                        </tr>
                        <tr class="t-row">
                            <td>Coils & Strips</td>
                            <td>0.1 – 6 mm</td>
                        </tr>
                        <tr class="t-row">
                            <td>Finned Tubes</td>
                            <td>As per heat exchanger design</td>
                        </tr>
                        <tr class="t-row">
                            <td>Custom Components</td>
                            <td>As per drawing</td>
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
                <h2>International Standards & Equivalent Grades – C44300</h2>
            </div>

            <div class="table-responsive col-lg-8 mx-auto">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Standard</th>
                            <th>Equivalent Grade</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="t-row">
                            <td>UNS</td>
                            <td>C44300</td>
                        </tr>
                        <tr class="t-row">
                            <td>ASTM</td>
                            <td>B111, B171, B111M</td>
                        </tr>
                        <tr class="t-row">
                            <td>EN</td>
                            <td>CW508L</td>
                        </tr>
                        <tr class="t-row">
                            <td>BS</td>
                            <td>CZ111</td>
                        </tr>
                        <tr class="t-row">
                            <td>ISO</td>
                            <td>CuZn28Sn1As</td>
                        </tr>
                        <tr class="t-row">
                            <td>DIN</td>
                            <td>CuZn28SnAs</td>
                        </tr>
                        <tr class="t-row">
                            <td>JIS</td>
                            <td>H3300 (Equivalent)</td>
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
                <h2>Products in Copper Alloys C44300</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Copper Alloys C44300</strong> is available in:
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
                        Copper Alloys C44300 products are produced to the following global standards:
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
                        <h3>Excellent corrosion resistance in marine & brackish waters</h3>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h3>Good thermal conductivity for heat exchange applications</h3>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h3>High resistance to dezincification (due to tin & arsenic)</h3>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h3>Good ductility and ease of fabrication</h3>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h3>Long service life in aggressive environments</h3>
                    </div>
                </div>
            </div>
    </section>


    <section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Copper Alloys C44300</h2>
                <p class="text-center pb-3"><strong class="text-dark">Copper Alloys C44300</strong> is widely chosen for
                    its
                    unmatched combination of high strength, corrosion resistance, and non-magnetic properties, making it
                    indispensable in:</p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h3>Electrical & Electronics</h3>
                        <p>Connectors, contacts, switches, relays, springs, EMI shielding</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h3>Marine & Shipbuilding</h3>
                        <p>Condenser and heat exchanger tubing</p>
                        <p>Saltwater piping and cooling systems</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h3>Power & Desalination Plants</h3>
                        <p>Tube bundles in evaporators and heaters</p>
                        <p>Heat transfer tubes in multi-stage flash (MSF) systems</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h3>HVAC & Industrial Applications</h3>
                        <p>Condenser coils, air conditioning units, refrigeration piping</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h3>Petrochemical Industry</h3>
                        <p>Non-oxidizing acid handling components</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h3>Plumbing</h3>
                        <p>Water heaters, geysers, and industrial plumbing fittings</p>
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
                        <h3>Superior Product Quality: Adherence to global metallurgical standards</h3>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h3>Extensive Inventory: Large stock of standard and customized sizes</h3>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h3>Custom Manufacturing: Tailor-made solutions for critical applications</h3>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h3>Quick Delivery: Efficient logistics and export packaging</h3>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h3>Global Reach: Serving marine, HVAC, energy, and desalination sectors worldwide</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="price" class="sec-padd-top sec-padd-bottom bg-light py-5">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h2>C44300 ADMIRALTY BRASS PRICE PER KG (INDIA)</h2>
            </div>

            <p class="text-center fs-5">
                <strong>Typical Range:</strong> ₹650 – ₹1,150 per kg
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
                                <h3>
                                    What is C44300 Admiralty Brass and what makes it unique?
                                </h3>
                            </div>
                            <div class="accord-content">
                                <p>
                                    C44300 Admiralty Brass is a copper-zinc alloy with a small addition of tin (0.9–1.2%)
                                    and arsenic.
                                    These elements improve its corrosion resistance, especially against dezincification,
                                    making it ideal
                                    for marine and brackish water applications. It also provides good thermal conductivity
                                    and mechanical strength.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h3>
                                    Where is C44300 Admiralty Brass commonly used?
                                </h3>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Admiralty Brass is widely used in heat exchangers, condensers, desalination plants,
                                    saltwater piping,
                                    HVAC systems, power plants, petrochemical industries, and shipbuilding. Its excellent
                                    resistance to seawater
                                    corrosion makes it a preferred choice for marine engineering and industrial cooling
                                    systems.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h3>
                                    What are the advantages of using Admiralty Brass C44300 over other alloys?
                                </h3>
                            </div>
                            <div class="accord-content">
                                <p>C44300 offers several benefits including:</p>
                                <ul>
                                    <li>Superior corrosion resistance in marine and brackish water</li>
                                    <li>High thermal conductivity for efficient heat transfer</li>
                                    <li>Resistance to dezincification due to tin and arsenic content</li>
                                    <li>Ease of fabrication and ductility</li>
                                    <li>Long service life in harsh environments</li>
                                </ul>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h3>
                                    What C44300 Admiralty Brass products does MOKSH TUBES & FITTINGS LLP supply?
                                </h3>
                            </div>
                            <div class="accord-content">
                                <p>
                                    We manufacture and stock a complete range of C44300 Admiralty Brass products such as
                                    seamless & welded pipes,
                                    tubes (U-bend, boiler, heat exchanger), sheets, plates, coils, bars, pipe fittings,
                                    flanges, fasteners, and
                                    custom fabricated components, all in compliance with international standards like ASTM
                                    and DIN.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h3>
                                    Why choose MOKSH TUBES & FITTINGS LLP for Admiralty Brass materials?
                                </h3>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP is a trusted global supplier with:
                                </p>
                                <ul>
                                    <li>Strict quality control following metallurgical standards.</li>
                                    <li>Extensive inventory of standard and custom sizes.</li>
                                    <li>Tailor-made solutions for marine, HVAC, power, and desalination sectors.</li>
                                    <li>Quick delivery & export packaging for global clients.</li>
                                    <li>Proven expertise in copper alloys for critical industrial applications.</li>
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
                    contact <strong>Moksh Tubes & Fittings LLP</strong> — your trusted partner in
                    premium copper alloy solutions.
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
      "name": "What is C44300 Admiralty Brass and what makes it unique?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "C44300 Admiralty Brass is a copper-zinc alloy with a small addition of tin (0.9–1.2%) and arsenic. These elements improve its corrosion resistance, especially against dezincification, making it ideal for marine and brackish water applications. It also provides good thermal conductivity and mechanical strength."
      }
    },
    {
      "@type": "Question",
      "name": "Where is C44300 Admiralty Brass commonly used?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Admiralty Brass is widely used in heat exchangers, condensers, desalination plants, saltwater piping, HVAC systems, power plants, petrochemical industries, and shipbuilding. Its excellent resistance to seawater corrosion makes it a preferred choice for marine engineering and industrial cooling systems."
      }
    },
    {
      "@type": "Question",
      "name": "What are the advantages of using Admiralty Brass C44300 over other alloys?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "C44300 offers several benefits including: Superior corrosion resistance in marine and brackish water, high thermal conductivity for efficient heat transfer, resistance to dezincification due to tin and arsenic content, ease of fabrication and ductility, and long service life in harsh environments."
      }
    },
    {
      "@type": "Question",
      "name": "What C44300 Admiralty Brass products does MOKSH TUBES & FITTINGS LLP supply?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We manufacture and stock a complete range of C44300 Admiralty Brass products such as seamless and welded pipes, tubes (U-bend, boiler, heat exchanger), sheets, plates, coils, bars, pipe fittings, flanges, fasteners, and custom fabricated components, all in compliance with international standards like ASTM and DIN."
      }
    },
    {
      "@type": "Question",
      "name": "Why choose MOKSH TUBES & FITTINGS LLP for Admiralty Brass materials?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "MOKSH TUBES & FITTINGS LLP is a trusted global supplier with strict quality control following metallurgical standards, extensive inventory of standard and custom sizes, tailor-made solutions for marine, HVAC, power, and desalination sectors, quick delivery and export packaging for global clients, and proven expertise in copper alloys for critical industrial applications."
      }
    }
  ]
}
@endverbatim
</script>
@endsection
