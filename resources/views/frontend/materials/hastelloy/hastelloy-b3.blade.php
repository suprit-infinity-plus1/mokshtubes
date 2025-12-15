@extends('layouts.master')

@section('title', 'Hastelloy B3 | Enhanced High-Stability Nickel Alloy')
@section('meta_description',
    'Hastelloy B3 pipes, tubes & fittings offer improved thermal stability and superior
    resistance to strong acids, ideal for harsh chemical environments.')
@section('meta_keywords',
    'Hastelloy B3, high stability nickel alloy, corrosion resistant alloy, Hastelloy B3 pipes,
    Hastelloy B3 tubes, Hastelloy B3 fittings, hydrochloric acid resistant, sulfuric acid resistant, phosphoric acid
    resistant, chemical processing alloys, industrial corrosion resistant alloys, durable nickel alloys')
@section('og_image', asset('assets/images/hastelloy/Hastelloy-B3.webp'))
@section('og_type', 'article')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/hastelloy/Hastelloy-B3.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Hastelloy B3 Alloy <br> High-Stability Nickel Alloy</h1>
                </div>
            </div>
        </div>
    </section>


    <!--End breadcrumb area-->
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Product Overview</h2>
            </div>

            <h2 class="fw-semibold text-center mb-5" style="color: #db7227;">
                Introduction To Hastelloy B-3 / Alloy B-3 / UNS N10675
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/hastelloy/Hastelloy-B3.webp') }}" alt="Hastelloy-b3"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> LLP is a reputed manufacturer,
                            exporter, importer, and stockist of high-quality HASTELLOY B-3 (UNS N10675) products. We supply
                            an extensive range of B-3 alloy materials such as <a
                                href="{{ route('products.pipes-tubes') }}">Pipes & Tubes</a>, Pipe Fittings, Flanges,
                            Fasteners, Sheets, Plates, Coils, Bars, Welding Rods, Wire Mesh, and precision-engineered custom
                            components. Built to withstand extreme corrosion, <strong class="text-black">HASTELLOY
                                B3</strong> is the enhanced version of<strong class="text-black"> Hastelloy B-2</strong>,
                            offering improved thermal stability and fabrication properties.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">HASTELLOY B3</strong class="text-black"> is a nickel-molybdenum alloy
                            designed to handle strong reducing agents, including hydrochloric, hydrobromic, sulfuric, and
                            phosphoric acids. Compared to <a href="{{ route('materials.hastelloy') }}">B-2</a>, it provides
                            better resistance to pitting, stress corrosion
                            cracking, and knife-line/heat-affected zone (HAZ) attack after welding. Its superior formability
                            and weldability make it ideal for modern chemical processing and pickling systems.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Hastelloy B3 Datasheet</h3>
            <p class="mb-3">
                Get the complete Hastelloy B3 datasheet with chemical composition,
                mechanical properties, heat treatment details, and applications.
                Enter your email to receive the PDF instantly.
            </p>

            <!-- Lead Capture Form -->
            <form id="leadForm" method="POST" action="{{ route('lead.capture') }}" class="mb-3">
                @csrf
                <div class="row justify-content-center">
                    <input type="hidden" name="pdf" value="hastelloy_b3.pdf">
                    <div class="col-md-6 mb-2">
                        <input type="email" name="email" required class="form-control p-3"
                            placeholder="Enter your email address">
                    </div>
                    <div class="col-md-3 mb-2">
                        <button type="submit" class="btn btn-lg w-100 text-white"
                            style="background-color:#db7227; border-radius:8px;">
                            📥 Get Datasheet
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
                                    <td>65 (Balance)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium</td>
                                    <td>1.5</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Molybdenum</td>
                                    <td>27.0 – 32.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron</td>
                                    <td>1.0 – 3.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tungsten</td>
                                    <td>4</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Cobalt</td>
                                    <td>3.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese</td>
                                    <td>1.5</td>
                                </tr>

                                <tr class="t-row">
                                    <td>Silicon</td>
                                    <td>0.10</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon</td>
                                    <td>0.01</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Phosphorus</td>
                                    <td>0.2</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sulfur</td>
                                    <td>0.01</td>
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
                                    <th>Value</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Density</td>
                                    <td>9.22 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Point</td>
                                    <td>1370°C (2500°F)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tensile Strength</td>
                                    <td>110,000 psi / 760 MPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (0.2% Offset)</td>
                                    <td>52,000 psi / 355 MPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elongation</td>
                                    <td>40%</td>
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
                                    <th>Metric</th>
                                    <th>Imperial</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Tensile Strength (@thickness 4.80–25.4 mm, 538°C/@thickness 0.189–1.00 in, 1000°F)
                                    </td>
                                    <td>760 MPa</td>
                                    <td>110,000 psi</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (0.2% offset, @thickness 2.40 mm, 427°C/@thickness 0.0945 in, 801°F)
                                    </td>
                                    <td>355 MPa</td>
                                    <td>52,000 psi</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elastic Modulus (RT)</td>
                                    <td>210 GPa</td>
                                    <td>30,000 ksi</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elongation at Break (in 50.8 mm, @thickness 1.60–4.70 mm, 204°C/@thickness
                                        0.0630–0.185 in, 399°F)</td>
                                    <td>40%</td>
                                    <td>40%</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Hardness, Rockwell B (plate)</td>
                                    <td>88</td>
                                    <td>88</td>
                                </tr>
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

    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Products in Hastelloy B3</h2>
            </div>

            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">MOKSH TUBES & FITTINGS LLP</strong>, we offer Hastelloy B-3 in a full
                        range of product forms:
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
                        We offer Hastelloy B3 in a wide range of product forms, including:
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
                        <h5>Outstanding resistance to hydrochloric acid and other reducing media</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Superior performance after welding – no knife-line attack or HAZ corrosion</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Excellent mechanical strength in high-temperature, high-acidity environments</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Improved formability, weldability, and fabrication compared to B-2</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Long service life in aggressive chemical settings</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Hastelloy B3</h2>
                <p class="text-center pb-3"><strong class="text-dark">HASTELLOY B-3</strong> is a nickel-molybdenum alloy
                    designed for exceptional resistance to hydrochloric acid and other strongly reducing chemicals. Known
                    for its improved thermal stability and resistance to stress corrosion cracking over earlier B-series
                    alloys, B-3 is ideal for highly corrosive environments where reliability is critical.
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Chemical Processing Industry</h5>
                        <p>Extensively used in reactors, heat exchangers, evaporators, and storage tanks handling
                            hydrochloric acid, hydrobromic acid, sulfuric acid (under reducing conditions), and other
                            aggressive chemical mixtures.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Pharmaceutical and Fine Chemical Manufacturing</h5>
                        <p>Preferred for process vessels and piping where ultra-pure environments and resistance to reducing
                            agents (including cleaning chemicals) are necessary.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Metal Pickling and Acid Regeneration Systems</h5>
                        <p>Ideal for components exposed to highly concentrated hydrochloric acid during metal pickling or
                            acid recovery processes</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Electronics and Semiconductor Industry</h5>
                        <p>Used in equipment exposed to highly corrosive chemical baths and etchants that require material
                            purity and resistance to acid attack.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Agrochemical and Fertilizer Production</h5>
                        <p>Deployed in reaction vessels and acid transfer lines where strong reducing media are present in
                            the production of specialty chemicals and fertilizers.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Pulp and Paper Industry</h5>
                        <p>Utilized in specific stages of chemical pulping and bleaching where resistance to reducing agents
                            is required.</p>
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
            <p class="text-center pb-3 my-4"><strong class="text-dark">HASTELLOY B-3's</strong> with its outstanding
                corrosion resistance, particularly to hydrochloric acid, and improved fabricability, HASTELLOY B-3 is a
                reliable choice for mission-critical equipment exposed to some of the harshest reducing environments.</p>
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
                        <h5>Decades of experience in nickel-molybdenum alloys</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>In-house machining, testing, and documentation</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Guaranteed mill test certificates and traceability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Customized products and cut-to-length options</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Fast shipping and global delivery capabilities</h5>
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
                                <h4>What is Hastelloy B-3 used for?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Hastelloy B-3 is ideal for chemical processing, pharmaceutical, metal pickling, and
                                    semiconductor industries where strong reducing acids like hydrochloric acid are used.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>How is Hastelloy B-3 different from Hastelloy B-2?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    B-3 has better resistance to stress corrosion cracking, pitting, and knife-line attacks
                                    after welding, along with superior thermal stability and formability.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Which products are available in Hastelloy B-3?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    We offer pipes, tubes, sheets, plates, bars, flanges, fittings, fasteners, wire mesh,
                                    welding rods, and custom components.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the benefits of using Hastelloy B-3?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Hastelloy B-3 provides outstanding acid resistance, excellent weldability, high
                                    mechanical strength, and long lasting performance in harsh chemical environments.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose MOKSH TUBES & FITTINGS LLP for Hastelloy B-3 products?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    We provide decades of alloy expertise, certified quality, custom fabrication, traceable
                                    documentation, and fast international delivery for critical industrial applications.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End faq content area-->


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Contact Us</h2>
                <p>
                    Partner with <strong>Moksh Tubes & Fittings LLP</strong> for reliable sourcing of <strong>HASTELLOY
                        B-3</strong> products. Get expert support, certified material, and on-time delivery for all your
                    industrial needs.
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
                "name": "What is Hastelloy B-3 used for?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Hastelloy B-3 is ideal for chemical processing, pharmaceutical, metal pickling, and semiconductor industries where strong reducing acids like hydrochloric acid are used."
                }
                },
                {
                "@type": "Question",
                "name": "How is Hastelloy B-3 different from Hastelloy B-2?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "B-3 has better resistance to stress corrosion cracking, pitting, and knife-line attacks after welding, along with superior thermal stability and formability."
                }
                },
                {
                "@type": "Question",
                "name": "Which products are available in Hastelloy B-3?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We offer pipes, tubes, sheets, plates, bars, flanges, fittings, fasteners, wire mesh, welding rods, and custom components."
                }
                },
                {
                "@type": "Question",
                "name": "What are the benefits of using Hastelloy B-3?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Hastelloy B-3 provides outstanding acid resistance, excellent weldability, high mechanical strength, and long lasting performance in harsh chemical environments."
                }
                },
                {
                "@type": "Question",
                "name": "Why choose MOKSH TUBES & FITTINGS LLP for Hastelloy B-3 products?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We provide decades of alloy expertise, certified quality, custom fabrication, traceable documentation, and fast international delivery for critical industrial applications."
                }
                }
            ]
            }

        @endverbatim
    </script>
@endsection
