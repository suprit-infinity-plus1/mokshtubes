@extends('layouts.master')

@section('title', 'Haynes Superalloys 230 - Strength & Oxidation Resistant')
@section('meta_description', 'Haynes Alloy 230 offers exceptional strength, oxidation resistance, and thermal stability
    for extreme industrial applications.')
@section('meta_keywords', 'Haynes Superalloys 230, Haynes Alloy 230, High Strength Haynes, Oxidation Resistant Haynes,
    Thermal Stability Alloy, Corrosion Resistant Haynes, Industrial Haynes Alloys, Chemical Processing Haynes, Power
    Industry Haynes, Aerospace Haynes Alloys, Marine Industry Haynes')
@section('og_image', asset('assets/images/haynes/haynes-230.webp'))
@section('og_type', 'article')
@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/haynes/haynes-230.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Haynes Superalloy 230 <br> Strength & Oxidation Resistance</h1>

                      <!-- Add your extra content here -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                     Haynes Superalloy 230 is a high-performance nickel-based alloy offering an excellent combination of high-temperature strength, oxidation resistance, and thermal stability. It maintains mechanical integrity in extreme heat environments, making it ideal for gas turbines, aerospace components, heat-treatment equipment, and other demanding industrial applications requiring long-term reliability.

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
            <a href="#contact us">Contact Us</a>
        </div>
    </div>

    <!--End breadcrumb area-->
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Product Overview</h2>
            </div>

            <h2 class="fw-semibold text-center mb-5" style="color: #db7227;">
                Introduction To Haynes Superalloys 230 / UNS N06230
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/haynes/haynes-230.webp') }}" alt="Haynes-230"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a manufacturer, supplier,
                            exporter, importer, and stockist of a wide range of<strong class="text-black"> Haynes 230 (UNS
                                N06230) <a href="{{ route('products') }}">products</a></strong> including Pipes & Tubes,
                            Pipe Fittings, Flanges, Fasteners, Sheets & Plates, Coils, Wires, Round Bars, Flat Bars, Angles,
                            Channels, Welding Rods, Wire Mesh, and other custom and <a
                                href="{{ route('materials.hard-To-Find-Special-Alloys') }}">hard-to-find</a> Haynes 230
                            products.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black"><a href="{{ route('materials.haynes-Superalloys') }}">Haynes
                                    Superalloys 230</a></strong> is a <a
                                href="{{ route('materials.nickel-Based-Superalloys') }}">nickel</a>-chromium-tungsten-molybdenum
                            alloy renowned for
                            its outstanding strength, excellent oxidation resistance, and superior stability at elevated
                            temperatures. It maintains excellent mechanical properties and corrosion resistance up to about
                            1149 °C (2100 °F), making it ideal for use in aggressive environments and high-temperature
                            applications.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- data-sheet --}}

    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Haynes Superalloys 230 Datasheet</h3>
            <p class="mb-3">
                Get the complete Haynes Superalloys 230 datasheet with chemical composition,
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

    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Chemical Composition</h2>
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
                                    <td>Nickel</td>
                                    <td>Balance</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium</td>
                                    <td>22.0 – 23.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tungsten</td>
                                    <td>14.5 – 15.5</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Molybdenum</td>
                                    <td>1.5 – 2.5</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron</td>
                                    <td>≤ 2.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Cobalt</td>
                                    <td>≤ 1.5</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon</td>
                                    <td>≤ 0.35</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon</td>
                                    <td>≤ 0.10</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Aluminum</td>
                                    <td>≤ 0.30</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Titanium</td>
                                    <td>≤ 0.30</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Phosphorus</td>
                                    <td>≤ 0.015</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sulfur</td>
                                    <td>≤ 0.015</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Technical Composition</h2>
            </div>

            <!-- Physical Properties Table -->
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8">
                    <h4 class="text-center mb-3" style="color: #db7227;">Physical Properties</h4>
                    <div class="table-responsive">
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
                                    <td>0.302 lb/in³</td>
                                    <td>8.36 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Point</td>
                                    <td>2475–2650 °F</td>
                                    <td>1357–1454 °C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Specific Heat</td>
                                    <td>0.11 Btu/lb·°F</td>
                                    <td>460 J/kg·°C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Curie Temperature</td>
                                    <td>—</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Magnetic Permeability at 200 oersteds (15.9 kA/m)</td>
                                    <td>1.02</td>
                                    <td>—</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Mechanical Properties Table -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h4 class="text-center mb-3" style="color: #db7227;">Mechanical Properties</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Property</th>
                                    <th>Tubing (Annealed)</th>
                                    <th>Tubing (Cold Drawn)</th>
                                    <th>Bar (Annealed)</th>
                                    <th>Plate (Annealed)</th>
                                    <th>Sheet (Annealed)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Tensile Strength (ksi)</td>
                                    <td>128</td>
                                    <td>144</td>
                                    <td>128</td>
                                    <td>122 (RT avg)</td>
                                    <td>122 (RT)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tensile Strength (MPa)</td>
                                    <td>885</td>
                                    <td>995</td>
                                    <td>885</td>
                                    <td>838 (RT avg)</td>
                                    <td>838 (RT)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (0.2%) (ksi)</td>
                                    <td>62</td>
                                    <td>104</td>
                                    <td>62</td>
                                    <td>54 (RT avg)</td>
                                    <td>61 (RT)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (MPa)</td>
                                    <td>425</td>
                                    <td>715</td>
                                    <td>425</td>
                                    <td>375 (RT avg)</td>
                                    <td>422 (RT)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elongation (%)</td>
                                    <td>46</td>
                                    <td>32</td>
                                    <td>46.6</td>
                                    <td>47 (RT avg)</td>
                                    <td>47 (RT)</td>
                                </tr>
                                {{-- <tr class="t-row">
                                    <td>Reduction of Area (%)</td>
                                    <td>73 %</td>
                                    <td>–</td>
                                    <td>–</td>
                                    <td>–</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Modulus of Elasticity (GPa)</td>
                                    <td>211 GPa</td>
                                    <td>211 GPa</td>
                                    <td>sheet same as plate</td>
                                    <td>–</td>
                                </tr> --}}
                            </tbody>
                        </table>
                    </div>
                </div>
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
                'image' => 'assets/images/all product/sheets-and-plates.webp',
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

    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Products in Haynes Superalloys 230</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Haynes Superalloys 230</strong> is supplied in multiple product forms
                        meeting ASTM, ASME, and other industry standards:
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
                        Haynes Superalloys 230 products are produced to the following global standards:
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


    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Uses and Advantages</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Excellent high-temperature strength and creep resistance</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Outstanding oxidation and carburization resistance up to 1149 °C (2100 °F)</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Good fabricability and weldability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Maintains mechanical integrity in severe industrial environments</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Stable microstructure that supports long service life</h5>
                    </div>
                </div>
                {{-- <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Economical compared to other titanium grades with higher alloy content</h5>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Haynes Superalloys 230</h2>
                <p class="text-center pb-3"><strong class="text-dark">Haynes Superalloys 230</strong> Widely used in
                    industries requiring high-performance alloys under severe conditions:
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Aerospace and Gas Turbines</h5>
                        <p>Combustion chambers, turbine casings, hot gas ducts</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Industrial Furnaces and Heat Treating Equipment</h5>
                        <p>Furnace parts exposed to extreme temperatures</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Industrial Furnaces and Heat Treating</h5>
                        <p>Furnace muffles, radiant tubes, roller hearth components</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Chemical Processing Equipment</h5>
                        <p>Reactors, heat exchangers, reformer tubes</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Power Generation</h5>
                        <p>Boiler superheaters, gas turbine components</p>
                    </div>
                </div>

                {{-- <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Medical and Pharmaceutical Equipment</h5>
                        <p>Favored for surgical tools, implants, and cleanroom processing systems because of its purity and
                            biocompatibility.</p>
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
                        <h5>Comprehensive expertise in nickel-based superalloys</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Quality-assured sourcing meeting ASTM/ASME/NACE standards</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Customized product shapes, sizes, and heat treatments</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Global logistics with timely delivery</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Full technical support from alloy selection to fabrication</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Start faq content area-->
    <section class="faq-content-area sec-padd2">
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
                                <h4>What is Haynes 230 and why is it preferred in high-temperature industries?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Haynes 230 (UNS N06230) is a nickel-chromium-tungsten-molybdenum alloy widely recognized
                                    for its exceptional strength, excellent oxidation resistance, and superior stability at
                                    elevated temperatures. It maintains its mechanical properties and corrosion resistance
                                    up to about 1149°C (2100°F), making it one of the most reliable superalloys for use in
                                    extreme industrial conditions such as aerospace, chemical processing, and power
                                    generation.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the key properties of Haynes 230 alloy?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Haynes 230 exhibits outstanding high temperature strength, creep resistance, and thermal
                                    stability, along with excellent resistance to oxidation and carburization. It has a
                                    tensile strength of up to 144 ksi, yield strength ranging from 54 to 104 ksi depending
                                    on product form, and elongation of around 32–47%. Its good fabricability and
                                    weldability, combined with a stable microstructure, allow it to deliver long service
                                    life even in aggressive and high stress environments.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Which industries and applications use Haynes 230 products?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Haynes 230 is widely used in aerospace for combustion chambers, turbine casings, and hot
                                    gas ducts, in industrial furnaces for muffles, radiant tubes, and roller hearth
                                    components, and in chemical processing for reactors, reformer tubes, and heat
                                    exchangers. It also plays an important role in power generation for boiler superheaters
                                    and gas turbine components. Its ability to resist oxidation and maintain integrity under
                                    extreme conditions makes it a preferred alloy in industries that demand reliable
                                    performance.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What types of Haynes 230 products are available from MOKSH TUBES & FITTINGS LLP?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP provides a complete range of Haynes 230 products including
                                    seamless and welded pipes, tubes, sheets, plates, coils, bars, flanges, pipe fittings,
                                    fasteners, welding rods, wire mesh, and custom fabricated components. All products are
                                    manufactured to ASTM, ASME, and international standards, ensuring top-quality
                                    performance and durability for critical industrial applications.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why should industries choose MOKSH TUBES & FITTINGS LLP for Haynes 230 materials?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP is a trusted global supplier with expertise in nickel-based
                                    superalloys like Haynes 230, offering quality-assured products that meet ASTM, ASME, and
                                    NACE standards. With capabilities in customized manufacturing, global logistics, and
                                    on-time delivery, along with dedicated technical support from alloy selection to
                                    fabrication, the company provides reliable solutions that meet the demanding needs of
                                    industries operating in high-temperature and corrosive environments.
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


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Contact Us</h2>
                <p>
                    <strong>Moksh Tubes & Fittings LLP</strong> your trusted partner in high-performance alloys.
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
                "name": "What is Haynes 230 and why is it preferred in high-temperature industries?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Haynes 230 (UNS N06230) is a nickel-chromium-tungsten-molybdenum alloy widely recognized for its exceptional strength, excellent oxidation resistance, and superior stability at elevated temperatures. It maintains its mechanical properties and corrosion resistance up to about 1149°C (2100°F), making it one of the most reliable superalloys for use in extreme industrial conditions such as aerospace, chemical processing, and power generation."
                }
                },
                {
                "@type": "Question",
                "name": "What are the key properties of Haynes 230 alloy?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Haynes 230 exhibits outstanding high temperature strength, creep resistance, and thermal stability, along with excellent resistance to oxidation and carburization. It has a tensile strength of up to 144 ksi, yield strength ranging from 54 to 104 ksi depending on product form, and elongation of around 32–47%. Its good fabricability and weldability, combined with a stable microstructure, allow it to deliver long service life even in aggressive and high stress environments."
                }
                },
                {
                "@type": "Question",
                "name": "Which industries and applications use Haynes 230 products?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Haynes 230 is widely used in aerospace for combustion chambers, turbine casings, and hot gas ducts, in industrial furnaces for muffles, radiant tubes, and roller hearth components, and in chemical processing for reactors, reformer tubes, and heat exchangers. It also plays an important role in power generation for boiler superheaters and gas turbine components. Its ability to resist oxidation and maintain integrity under extreme conditions makes it a preferred alloy in industries that demand reliable performance."
                }
                },
                {
                "@type": "Question",
                "name": "What types of Haynes 230 products are available from MOKSH TUBES & FITTINGS LLP?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "MOKSH TUBES & FITTINGS LLP provides a complete range of Haynes 230 products including seamless and welded pipes, tubes, sheets, plates, coils, bars, flanges, pipe fittings, fasteners, welding rods, wire mesh, and custom fabricated components. All products are manufactured to ASTM, ASME, and international standards, ensuring top-quality performance and durability for critical industrial applications."
                }
                },
                {
                "@type": "Question",
                "name": "Why should industries choose MOKSH TUBES & FITTINGS LLP for Haynes 230 materials?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "MOKSH TUBES & FITTINGS LLP is a trusted global supplier with expertise in nickel-based superalloys like Haynes 230, offering quality-assured products that meet ASTM, ASME, and NACE standards. With capabilities in customized manufacturing, global logistics, and on-time delivery, along with dedicated technical support from alloy selection to fabrication, the company provides reliable solutions that meet the demanding needs of industries operating in high-temperature and corrosive environments."
                }
                }
            ]
            }

        @endverbatim
    </script>
@endsection
