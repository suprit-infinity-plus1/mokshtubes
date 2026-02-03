@extends('layouts.master')

@section('title', 'Incoloy 825 | Premium Corrosion-Resistant Nickel Alloy')
@section('meta_description',
    'Incoloy 825 delivers exceptional resistance to acids, alkalis, and oxidizing agents—making
    it a trusted choice for chemical and marine industries.')
@section('meta_keywords', 'Incoloy 825, nickel alloy, corrosion resistant alloy, premium metal alloys, moksh tubes')
@section('canonical', 'https://mokshtubes.com/materials/incoloy/incoloy-825')
@section('og_image', asset('assets/images/incoloy/incoloy-825.webp'))
@section('og_type', 'article')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/incoloy/incoloy-825.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Incoloy 825 <br> Corrosion Resistant Alloy for Industries</h1>

                    <!-- Add your extra content here -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        INCOLOY® 825 is a nickel-iron-chromium alloy with excellent resistance to acids, chlorides, and
                        stress corrosion cracking, offering high strength and durability in harsh chemical environments.

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
                <h2>Product Overview</h2>
            </div>

            <h2 class="fw-semibold text-center mb-5" style="color: #db7227;">
                Introduction To Incoloy 825 / Alloy 825 / UNS N08825 </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/incoloy/incoloy-825.webp') }}" alt="Incoloy 825"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> <a href="{{ route('index') }}">MOKSH TUBES & FITTINGS
                                    LLP</a></strong> is a <a
                                href="{{ route('materials.nickel-Based-Superalloys') }}">supplier</a>,
                            exporter, importer and stockist of a variety of INCOLOY 825 products such as <a
                                href="{{ route('products.pipes-tubes') }}">Pipes & Tubes</a>,
                            Pipe Fittings, Flanges, Fasteners, Sheets & Plates, Coils, Wires, Round Bars, Flat Bars, Angles,
                            Channels, Welding rods, Wire Mesh, and other Custom and <a
                                href="{{ route('materials.hard-To-Find-Special-Alloys') }}">Hard to Find</a> <strong
                                class="text-black">
                                INCOLOY 825 </strong>Products.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">INCOLOY 825</strong class="text-black"> is a <a
                                href="{{ route('materials.nickel-Based-Superalloys') }}">nickel</a> iron chromium
                            alloy with additions of molybdenum, copper, and <a
                                href="{{ route('materials.titanium') }}">titanium</a>. The alloy offers exceptional
                            resistance to reducing and oxidizing acids, stress corrosion cracking, pitting, and crevice
                            corrosion. Its unique composition makes it highly suitable for aggressive environments,
                            including those containing sulfuric, phosphoric, and nitric acids. Additionally, the <a
                                href="{{ route('materials.titanium') }}">titanium</a>
                            stabilization provides resistance to intergranular corrosion after exposure to sensitization
                            temperatures. With excellent mechanical properties across a wide temperature range, <strong
                                class="text-black"> INCOLOY 825</strong>
                            is a go to alloy for critical industries where corrosion performance and strength are key.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Incoloy 825 Datasheet</h3>
            <p class="mb-3">
                Get the complete Incoloy 825 datasheet with chemical composition,
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
                <h2>INCOLOY® 825 Specifications (UNS N08825)</h2>
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
                                    <td>INCOLOY® 825 / UNS N08825</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Type</td>
                                    <td>Nickel-Iron-Chromium Alloy</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Typical Chemical Composition</td>
                                    <td>Ni 38–46%, Fe 39.5–45%, Cr 19.5–23.5%, Mo 2.5–3.5%, Cu 1.5–3.0%, C ≤ 0.05%, Mn ≤
                                        2.0%, Si ≤ 1.0%</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Conditions</td>
                                    <td>Annealed, Hot Rolled, Cold Drawn, Solution Treated</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Heat Treatment</td>
                                    <td>Annealing, Stress Relieving, Solution Treatment</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Testing</td>
                                    <td>Tensile, Hardness, Chemical, Corrosion, NDT on request</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Certification</td>
                                    <td>EN 10204 3.1 / 3.2 (Mill Test Certificate available)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="composition" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Chemical Composition of INCOLOY® 825</h2>
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
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Nickel (Ni)</td>
                                    <td>38.0 – 46.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium (Cr)</td>
                                    <td>19.5 – 23.5</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron (Fe)</td>
                                    <td>Balance</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Molybdenum (Mo)</td>
                                    <td>2.5 – 3.5</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Copper (Cu)</td>
                                    <td>1.5 – 3.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Titanium (Ti)</td>
                                    <td>0.6 – 1.2</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese (Mn)</td>
                                    <td>1.0 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon (Si)</td>
                                    <td>0.5 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon (C)</td>
                                    <td>0.05 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Aluminum (Al)</td>
                                    <td>0.2 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sulfur (S)</td>
                                    <td>0.03 max</td>
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
                <h2 class="fw-bold" style="color: #174268;">Technical Composition of INCOLOY® 825</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                      <h3 class="text-center mb-3" style="color: #db7227;">Physical Properties of INCOLOY® 825
                    </h3>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Property</th>
                                    <th>Imperial Units</th>
                                    <th>Metric Units</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Density</td>
                                    <td>0.294 lb/in³</td>
                                    <td>8.14 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Range</td>
                                    <td>2500–2550 °F</td>
                                    <td>1370–1400 °C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Specific Heat</td>
                                    <td>0.105 Btu/lb·°F</td>
                                    <td>440 J/kg·°C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Curie Temperature</td>
                                    <td>–320 °F</td>
                                    <td>–196 °C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Magnetic Permeability</td>
                                    <td>1.005</td>
                                    <td>—</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mt-5" id="heat-treatment">
                <div class="col-lg-8">
                    <h4 class="text-center mb-3" style="color: #db7227;">Heat Treatment of INCOLOY® 825
                    </h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Heat Treatment Process</th>
                                    <th>Temperature Range</th>
                                    <th>Cooling / Procedure</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Annealing</td>
                                    <td>1020–1120°C</td>
                                    <td>Air or furnace cool</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Solution Treatment</td>
                                    <td>980–1020°C</td>
                                    <td>Water quench</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Stress Relieving</td>
                                    <td>620–730°C</td>
                                    <td>Hold 1–2 hours, air cool</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="mt-3 text-center">
                            Note: INCOLOY® 825 is typically used in annealed or solution-treated condition for optimum
                            corrosion resistance.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-padd-top sec-padd-bottom bg-light" id="related grades">
        <div class="container">
            <div class="section-title center mt-5">
                <h2>Available Forms & Size Range</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <table class="table table-bordered table-striped align-middle">
                        <thead class="table-dark text-center">
                            <tr class="t-row">
                                <th>Product Form</th>
                                <th>Size Range / Description</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr class="t-row">
                                <td>Round Bars</td>
                                <td>10 mm – 300 mm</td>
                            </tr>
                            <tr class="t-row">
                                <td>Flat, Square & Hex Bars</td>
                                <td>Custom up to 250 mm</td>
                            </tr>
                            <tr class="t-row">
                                <td>Sheets & Plates</td>
                                <td>2 – 100 mm (600–2500 mm width)</td>
                            </tr>
                            <tr class="t-row">
                                <td>Coils & Strips</td>
                                <td>0.5 – 10 mm</td>
                            </tr>
                            <tr class="t-row">
                                <td>Seamless & Welded Pipes/Tubes</td>
                                <td>OD 10–219 mm, WT 2–20 mm</td>
                            </tr>
                            <tr class="t-row">
                                <td>Forged Components</td>
                                <td>Custom per drawing</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

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
                    <tbody class="text-center">
                        <tr class="t-row">
                            <td>ASTM / ASME</td>
                            <td>B429, B446</td>
                        </tr>
                        <tr class="t-row">
                            <td>EN</td>
                            <td>2.4858</td>
                        </tr>
                        <tr class="t-row">
                            <td>UNS</td>
                            <td>N08825</td>
                        </tr>
                        <tr class="t-row">
                            <td>DIN</td>
                            <td>2.4858</td>
                        </tr>
                        <tr class="t-row">
                            <td>JIS</td>
                            <td>SNCM 825</td>
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
                <h2>Products in Incoloy 825</h2>
            </div>

            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">INCOLOY 825 </strong>, (UNS N08825 / W.Nr. 2.4858) is a trusted material
                        in the world of corrosion resistant alloys. Known for its excellent performance in aggressive
                        environments—especially those containing acids this <a
                            href="{{ route('materials.nickel-Based-Superalloys') }}">nickel</a> iron chromium alloy is
                        commonly found in
                        oil and gas operations, chemical processing, pollution control, and nuclear fuel reprocessing.
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
                        <h5>Outstanding resistance to sulfuric, phosphoric, nitric, and organic acids</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Excellent resistance to pitting, crevice corrosion, and stress corrosion cracking</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>High mechanical strength and reliable performance under thermal stress</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Excellent weldability and formability for ease of fabrication</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Suitable for both oxidizing and reducing environments in critical industries</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of INCOLOY 825</h2>
                <p class="text-center pb-3"><strong class="text-dark">INCOLOY 825</strong> is extensively used in
                    industries where superior corrosion resistance and mechanical reliability are required. Its ability to
                    resist acidic and chloride laden environments makes it ideal for the following applications:
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Chemical Processing Industry</h5>
                        <p>Used in heat exchangers, evaporators, tanks, and piping systems handling acidic and chloride rich
                            fluids.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Pollution Control and Flue Gas Systems</h5>
                        <p>Ideal for scrubbers, stack liners, ducts, and other components exposed to harsh chemical fumes
                            and gases.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Oil & Gas Sector</h5>
                        <p>Used in downhole equipment, piping systems, and components exposed to sour gas and offshore
                            environments.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Marine and Offshore Applications</h5>
                        <p>Perfect for seawater cooling systems, marine exhaust systems, and desalination plants.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Acid Production & StorageAerospace & Defense</h5>
                        <p>Reliable in sulfuric and phosphoric acid environments including piping, tanks, and heat
                            exchangers.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Nuclear and Power Generation</h5>
                        <p>Deployed in nuclear fuel reprocessing, heat exchangers, and high-temperature service components.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-capsule"></i></div>
                        <h5>Wastewater Treatment</h5>
                        <p>Ideal for systems exposed to acidic waste, chemical cleaning solutions, and aggressive effluents.
                        </p>
                    </div>
                </div>
                <div class="row mt-4 mb-4" style="text-align: justify;">
                    <div class="col-lg-10">
                        <p class="">
                            <strong class="text-dark">INCOLOY 825’s </strong>unique combination of corrosion
                            resistance, strength, and workability ensures optimal performance in mission critical
                            applications.
                        </p>
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
                        <h5>Specialists in manufacturing high quality products</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Strong supplier network for premium raw materials</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Expertise in nickel alloys and high-performance materials</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Global presence with customized solutions for diverse needs</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Dedicated to quality, dependability, and customer satisfaction</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="price" class="sec-padd-top sec-padd-bottom bg-light py-5">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h2>INCOLOY® 825 Price per kg in India</h2>
            </div>

            <p class="text-center fs-5">
                <strong>Typical Range:</strong> ₹950 – ₹1,500 per kg
            </p>
            <p class="text-center mb-2">
                (Price varies by product form, size, OD, thickness, and condition)
            </p>

            <p class="text-center fs-5">
                Contact us for exact quotation based on size and quantity.
            </p>
        </div>
    </section>

    <!--Start faq content area-->
    <section  id="faq" class="faq-content-area sec-padd2">
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
                                <h4>What is Incoloy 825 and what makes it unique?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Incoloy 825 (UNS N08825 / W.Nr. 2.4858) is a nickel-iron-chromium alloy with added
                                    molybdenum, copper, and titanium, designed for exceptional corrosion resistance in both
                                    oxidizing and reducing environments. Its titanium stabilization provides excellent
                                    protection against intergranular corrosion after exposure to sensitization temperatures,
                                    making it highly reliable in aggressive conditions such as sulfuric, phosphoric, and
                                    nitric acids.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the key properties of Incoloy 825?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Incoloy 825 is known for its outstanding resistance to pitting, crevice corrosion, and
                                    stress corrosion cracking in chloride bearing environments. It offers excellent
                                    mechanical strength, high ductility, and reliable performance across a wide temperature
                                    range. With superior resistance to sulfuric, phosphoric, and nitric acids, this alloy
                                    delivers long term durability in harsh chemical and marine conditions, while also
                                    offering excellent weldability and formability.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Where is Incoloy 825 commonly used?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Incoloy 825 is widely used in industries where corrosion resistance and mechanical
                                    stability are crucial. Its applications include chemical processing equipment, heat
                                    exchangers, evaporators, tanks, and piping systems handling acidic solutions. It is also
                                    used in oil and gas exploration, pollution control systems, marine and offshore
                                    structures, nuclear fuel reprocessing, power generation, and wastewater treatment plants
                                    where aggressive chemical exposure is a concern.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What product forms are available in Incoloy 825?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    <a href="{{ route('index') }}">MOKSH TUBES & FITTINGS LLP</a> manufactures, supplies,
                                    and exports Incoloy 825 in a wide
                                    range of forms, including seamless and welded pipes, tubes, sheets, plates, coils, bars,
                                    wire mesh, welding rods, flanges, fasteners, pipe fittings, and custom fabricated
                                    components. Each product conforms to international standards and specifications,
                                    ensuring superior quality and reliability for critical service conditions.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose MOKSH TUBES & FITTINGS LLP for Incoloy 825 materials?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    <a href="{{ route('index') }}">MOKSH TUBES & FITTINGS LLP</a> is a trusted global
                                    supplier of Incoloy 825 products,
                                    offering premium quality materials backed by ISO and ASTM standards. With extensive
                                    expertise in nickel alloys, a strong supplier network, and a commitment to timely
                                    delivery, the company ensures tailored solutions for diverse industrial needs. Their
                                    dedication to quality, dependability, and customer satisfaction makes them the preferred
                                    choice for industries requiring high-performance corrosion resistant alloys.
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
                    For any inquiries or to request a quote, reach out to <strong>Moksh Tubes & Fittings LLP</strong> your
                    trusted partner for INCOLOY 825 products.
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
                "name": "What is Incoloy 825 and what makes it unique?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Incoloy 825 (UNS N08825 / W.Nr. 2.4858) is a nickel-iron-chromium alloy with added molybdenum, copper, and titanium, designed for exceptional corrosion resistance in both oxidizing and reducing environments. Its titanium stabilization provides excellent protection against intergranular corrosion after exposure to sensitization temperatures, making it highly reliable in aggressive conditions such as sulfuric, phosphoric, and nitric acids."
                }
                },
                {
                "@type": "Question",
                "name": "What are the key properties of Incoloy 825?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Incoloy 825 is known for its outstanding resistance to pitting, crevice corrosion, and stress corrosion cracking in chloride bearing environments. It offers excellent mechanical strength, high ductility, and reliable performance across a wide temperature range. With superior resistance to sulfuric, phosphoric, and nitric acids, this alloy delivers long term durability in harsh chemical and marine conditions, while also offering excellent weldability and formability."
                }
                },
                {
                "@type": "Question",
                "name": "Where is Incoloy 825 commonly used?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Incoloy 825 is widely used in industries where corrosion resistance and mechanical stability are crucial. Its applications include chemical processing equipment, heat exchangers, evaporators, tanks, and piping systems handling acidic solutions. It is also used in oil and gas exploration, pollution control systems, marine and offshore structures, nuclear fuel reprocessing, power generation, and wastewater treatment plants where aggressive chemical exposure is a concern."
                }
                },
                {
                "@type": "Question",
                "name": "What product forms are available in Incoloy 825?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "MOKSH TUBES & FITTINGS LLP manufactures, supplies, and exports Incoloy 825 in a wide range of forms, including seamless and welded pipes, tubes, sheets, plates, coils, bars, wire mesh, welding rods, flanges, fasteners, pipe fittings, and custom fabricated components. Each product conforms to international standards and specifications, ensuring superior quality and reliability for critical service conditions."
                }
                },
                {
                "@type": "Question",
                "name": "Why choose MOKSH TUBES & FITTINGS LLP for Incoloy 825 materials?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "MOKSH TUBES & FITTINGS LLP is a trusted global supplier of Incoloy 825 products, offering premium-quality materials backed by ISO and ASTM standards. With extensive expertise in nickel alloys, a strong supplier network, and a commitment to timely delivery, the company ensures tailored solutions for diverse industrial needs. Their dedication to quality, dependability, and customer satisfaction makes them the preferred choice for industries requiring high-performance corrosion resistant alloys."
                }
                }
            ]
            }

        @endverbatim
    </script>
@endsection
