@extends('layouts.master')

@section('title', 'EN31 Alloy Steel | High Wear Resistance Steel')
@section('meta_description', 'EN31 Alloy Steel offering superior wear resistance and hardness for demanding industrial tooling applications.')
@section('meta_keywords', 'EN31 Alloy Steel, high wear resistance steel, high hardness steel, industrial tooling steel, durable alloy steel, engineering steel')
@section('og_image', asset('assets/images/engineering-steels/engineering-steels-en31.webp'))
@section('og_type', 'article')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/engineering-steels/engineering-steels-en31.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Premium EN31 Alloy Steel for Tooling Applications<br>High Carbon Alloy Steel
</h1>

 <!-- Add your extra content here -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        EN31 Engineering Steel (EN 31 / 52100 / 100Cr6) is a high carbon alloy steel grade known for excellent hardness, high wear resistance, and superior fatigue strength. Below is the complete datasheet including composition, properties, heat treatment, and applications.

                    </p>


                    <!-- End extra content -->
                </div>
            </div>
        </div>
    </section>

    <!--End breadcrumb area-->

    <style>

    .material-tabs {
    background: #ffffff;
    text-align: center;
    padding: 15px 0;
    border-bottom: 1px solid #e5e5e5;
    position: sticky;   /* you missed this */
    top: 50px;             /* and this */
    z-index: 1020;
}

.material-tabs a {
    margin: 0 14px;
    font-weight: 600;
    color: #1b3c61 !important;
    text-decoration: none;
    font-size: 16px;
    transition: 0.25s ease;
    display: inline-block;
}

.material-tabs a:hover {
    color: #db7227 !important;
    transform: translateY(-2px);
}
</style>
<div class="sticky-top bg-white border-bottom material-tabs d-none d-md-block w-100">
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

    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Product Overview</h2>
            </div>

            <h2 class="fw-semibold text-center mb-5" style="color: #db7227;">
                Introduction To Engineering Steel 31
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/engineering-steels/engineering-steels-en31.webp') }}" alt="EN31"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a manufacturer, supplier,
                            exporter, importer, and stockist of a wide range of EN31 steel <a
                                href="{{ route('products') }}">products</a> including bars, rods,
                            sheets, plates, forgings, and custom-engineered components.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black"><a href="{{ route('materials.engineering-Steels') }}">EN
                                    31</a></strong>, is a high carbon,
                            chromium-containing alloy steel known for its exceptional hardness, wear resistance, and high
                            tensile strength. It is widely used in engineering applications where toughness, abrasion
                            resistance, and fatigue strength are critical. This alloy is often employed for making
                            components that undergo heavy mechanical stress such as bearings, shafts, gears, and high-wear
                            machine parts.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Engineering Steels 31 Datasheet</h3>
            <p class="mb-3">
                Get the complete Engineering Steels 31 datasheet with chemical composition,
                mechanical properties, heat treatment details, and applications.
                Enter your email to receive the PDF instantly.
            </p>

            <!-- Lead Capture Form -->
            <form id="leadForm" method="POST" action="{{ route('lead.capture') }}" class="mb-3">
                @csrf
                <div class="row justify-content-center">
                    <input type="hidden" name="pdf" value="en_31.pdf">
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
                                    <td>Carbon</td>
                                    <td>1.00 – 1.10</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon</td>
                                    <td>0.10 – 0.35</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese</td>
                                    <td>0.40 – 0.70</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium</td>
                                    <td>1.40 – 1.65</td>
                                </tr>
                                {{-- <tr class="t-row">
                                    <td>Molybdenum</td>
                                    <td>0.20 – 0.35</td>
                                </tr> --}}
                                <tr class="t-row">
                                    <td>Sulfur</td>
                                    <td>≤ 0.035</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Phosphorus</td>
                                    <td>0.035 max</td>
                                </tr>
                                {{-- <tr class="t-row">
                                    <td>Nickel</td>
                                    <td>1.30 – 1.80</td>
                                </tr> --}}
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
                                    <td>0.284 lb/in³</td>
                                    <td>7.85 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Point</td>
                                    <td>2475 – 2550 °F</td>
                                    <td>1358 – 1400 °C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Modulus of Elasticity (Tension)</td>
                                    <td>29,000 ksi</td>
                                    <td>200 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Modulus of Elasticity (Torsion)</td>
                                    <td>11,500 ksi</td>
                                    <td>79 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Poisson’s Ratio</td>
                                    <td>0.27</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Thermal Conductivity</td>
                                    <td>44 W/m·K</td>
                                    <td>44 W/m·K</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Specific Heat Capacity</td>
                                    <td>460 J/kg·K</td>
                                    <td>460 J/kg·K</td>
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
                                    <th>Annealed</th>
                                    <th>Hot-Finished</th>
                                    <th>Cold Drawn</th>
                                    <th>Hot-rolled</th>
                                    <th>Sheet</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Tensile Strength (ksi / MPa)</td>
                                    <td>90–115 ksi / 620–793 MPa</td>
                                    <td>95–120 ksi / 655–827 MPa</td>
                                    <td>100–130 ksi / 690–896 MPa</td>
                                    <td>90–110 ksi / 620–758 MPa</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (0.2%)</td>
                                    <td>55–70 ksi / 379–483 MPa</td>
                                    <td>60–95 ksi / 414–655 MPa</td>
                                    <td>65–105 ksi / 448–724 MPa</td>
                                    <td>50–75 ksi / 345–517 MPa</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elongation (%)</td>
                                    <td>10–18</td>
                                    <td>10–15</td>
                                    <td>8–15</td>
                                    <td>15–20</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Brinell Hardness (3000 kg)</td>
                                    <td>180–230</td>
                                    <td>200–260</td>
                                    <td>230–280</td>
                                    <td>180–240</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Rockwell Hardness (B / C)</td>
                                    <td>80–95 B</td>
                                    <td>85–95 B / 20–30 C</td>
                                    <td>90–60 C</td>
                                    <td>80–90 B</td>
                                    <td>—</td>
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
                <h2>Products in Engineering Steel 31</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Engineering Steel 31</strong> is typically available in:
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
                        Engineering Steel 31 products are produced to the following global standards:
                    </p>
                </div>
            </div>

            <!-- Product Image Cards (Now centered and responsive) -->
            <div class="row g-4">
                 @foreach ($products as $product)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex">
                        <div class="mx-auto" style="width: 100%; max-width: 300px;">
                            <a href="{{ route($product['route']) }}" class="text-decoration-none">
                                <div class="product-card h-100">
                                    <img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}"
                                        class="img-fluid  w-100">
                                    <h6 class="product-card-title text-center mt-2 px-2">{{ $product['name'] }}</h6>
                                </div>
                            </a>
                        </div>
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
                        <h5>Exceptional hardness and wear resistance after heat treatment</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>High tensile and yield strength suitable for heavy load applications</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Good machinability in annealed condition</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Excellent fatigue strength and toughness</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Suitable for parts subjected to heavy impact and stress</h5>
                    </div>
                </div>
            </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Engineering Steel 31</h2>
                <p class="text-center pb-3"><strong class="text-dark">Engineering Steel 31</strong>is extensively used in
                    industries requiring high wear resistance, toughness, and mechanical strength:</p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Automotive and Engineering</h5>
                        <p>Manufacture of gears, shafts, spindles, crankshafts, and bearings due to its high strength and
                            wear resistance.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Tooling and Dies</h5>
                        <p>Used for making dies, punches, cutting tools, and other tooling parts that require high hardness.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Machinery Components</h5>
                        <p>Suitable for heavy-duty machine parts subjected to cyclic loading and wear such as rollers, valve
                            parts, and camshafts.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Agricultural Equipment</h5>
                        <p>Ideal for components like ploughshares, harrows, and tractor parts that face abrasive
                            environments.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Manufacturing Industry</h5>
                        <p>Shafts, pins, bolts, and various machine parts where fatigue resistance is essential.</p>
                    </div>
                </div>

                {{-- <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Oil & Gase</h5>
                        <p>Tool joints, pump shafts, downhole components</p>
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
                        <h5>Expertise in supply and customization of engineering steels including EN31</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Quality assured through rigorous testing and certification</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Global sourcing network for premium raw materials</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Prompt delivery and competitive pricing</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Technical support for selecting correct grades and heat treatment processes</h5>
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
                                <h4>What is EN31 steel and what are its key characteristics?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    EN31 is a high carbon, chromium containing alloy steel recognized for its exceptional
                                    hardness, wear resistance, and high tensile strength.
                                    It is widely used in applications that demand toughness, abrasion resistance, and
                                    fatigue strength.
                                    Components such as bearings, shafts, gears, and high-wear machine parts are commonly
                                    manufactured from EN31 due to its ability to withstand heavy mechanical stress while
                                    maintaining durability and performance.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the chemical and mechanical properties of EN31 steel?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    The chemical composition of EN31 includes 1.00–1.10% carbon, 1.40–1.65% chromium,
                                    0.40–0.70% manganese, 0.10–0.35% silicon, and low levels of sulfur and phosphorus.
                                    It exhibits tensile strength ranging from 90–130 ksi (620–896 MPa), yield strength
                                    between 50–105 ksi (345–724 MPa), and elongation of 8–20% depending on the condition.
                                    EN31 also offers Brinell hardness of 180–280, excellent fatigue strength, and maintains
                                    machinability in its annealed state, making it ideal for precision engineered
                                    components.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What EN31 steel products are supplied by MOKSH TUBES & FITTINGS LLP?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP offers a comprehensive range of EN31 products including round
                                    bars, flat bars, hex bars, square bars, sheets, plates, coils, strips, seamless and
                                    welded pipes, tubes, flanges, fittings, fasteners, forgings, and custom engineered
                                    components.
                                    These products are manufactured to international standards and can be supplied in
                                    annealed, hot finished, cold drawn, or heat treated conditions to meet various
                                    industrial specifications.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the main applications of EN31 steel?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    EN31 steel is extensively used in industries that require high wear resistance,
                                    mechanical strength, and fatigue durability.
                                    In automotive and engineering sectors, it is used for gears, shafts, spindles,
                                    crankshafts, and bearings.
                                    Tooling and die making industries rely on it for punches, dies, and cutting tools.
                                    Heavy machinery components, agricultural equipment such as ploughshares and tractor
                                    parts, and manufacturing industry components like pins, bolts, and rollers also commonly
                                    use EN31 steel due to its ability to endure high stress and abrasive conditions.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose MOKSH TUBES & FITTINGS LLP for EN31 steel products?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP is a trusted manufacturer, supplier, exporter, importer, and
                                    stockist of EN31 steel products.
                                    With expertise in heat treatment, customization, and precise quality control, the
                                    company ensures consistent material performance.
                                    Customers benefit from rigorous testing, global sourcing of premium raw materials,
                                    prompt delivery, competitive pricing, and technical support for selecting the right
                                    grades and processes, making MOKSH TUBES & FITTINGS LLP a reliable partner for EN31
                                    steel solutions.
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
                    For inquiries or quotes related to EN31 steel products<strong> Moksh Tubes & Fittings LLP
                    </strong> — your trusted partner for high-quality engineering steels.
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
                "name": "What is EN31 steel and what are its key characteristics?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "EN31 is a high carbon, chromium alloy steel known for its exceptional hardness, wear resistance, and tensile strength. It offers toughness, abrasion resistance, and fatigue strength, making it suitable for components such as bearings, shafts, gears, and machine parts that operate under heavy mechanical stress."
                }
                },
                {
                "@type": "Question",
                "name": "What are the chemical and mechanical properties of EN31 steel?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "EN31 steel contains 1.00–1.10% carbon, 1.40–1.65% chromium, 0.40–0.70% manganese, and 0.10–0.35% silicon, with low sulfur and phosphorus content. It provides tensile strength of 90–130 ksi, yield strength between 50–105 ksi, elongation of 8–20%, and Brinell hardness from 180–280. It offers excellent fatigue strength and machinability in the annealed state."
                }
                },
                {
                "@type": "Question",
                "name": "What EN31 steel products are supplied by MOKSH TUBES & FITTINGS LLP?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "MOKSH TUBES & FITTINGS LLP supplies EN31 round bars, flat bars, hex bars, square bars, sheets, plates, coils, strips, seamless and welded pipes, tubes, flanges, fittings, fasteners, forgings, and custom components. These are manufactured to international standards and supplied in annealed, hot finished, cold drawn, or heat treated conditions."
                }
                },
                {
                "@type": "Question",
                "name": "What are the main applications of EN31 steel?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "EN31 steel is used in industries demanding high wear resistance and strength, such as automotive, engineering, tooling, and heavy machinery. Typical applications include gears, shafts, spindles, crankshafts, bearings, punches, dies, cutting tools, agricultural equipment parts, pins, bolts, and rollers."
                }
                },
                {
                "@type": "Question",
                "name": "Why choose MOKSH TUBES & FITTINGS LLP for EN31 steel products?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "MOKSH TUBES & FITTINGS LLP is a reputable manufacturer, supplier, exporter, importer, and stockist of EN31 steel products. The company offers expertise in heat treatment, customization, and strict quality control, ensuring consistent material performance. Clients benefit from global sourcing, fast delivery, competitive pricing, and technical support for material selection."
                }
                }
            ]
            }

        @endverbatim
    </script>
@endsection
