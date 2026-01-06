@extends('layouts.master')

@section('title', 'AL-6XN – Superior Corrosion Resistant Alloy') <!-- 52 chars -->
@section('meta_description', 'AL-6XN pipes, tubes, and fittings offer exceptional corrosion resistance in seawater,
    chemical, and food processing environments.')
@section('meta_keywords', 'AL-6XN, Corrosion Resistant Alloy, AL-6XN Pipes, AL-6XN Tubes, AL-6XN Fittings, Seawater
    Resistant Alloy, Chemical Processing Alloys, Food Processing Alloys, High Strength Stainless Steel, Industrial Corrosion
    Resistant Alloys')
@section('og_image',
    asset('assets/images/super-austenitic-stainless-steel/super-austenitic-stainless-steel-AL-6XN.webp'))
@section('og_type', 'article')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area"
        style="background-image: url(/assets/images/super-austenitic-stainless-steel/super-austenitic-stainless-steel-AL-6XN.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>AL-6XN <br> Corrosion Resistant & High-Strength Alloy</h1>

                     <!-- Add your extra content here -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                      AL-6XN® is a superaustenitic stainless steel engineered for extreme corrosion resistance in chloride-rich, acidic, and high-purity environments. With high levels of nickel (24%), molybdenum (6.3%), and nitrogen, it offers exceptional resistance to pitting, crevice corrosion, and chloride stress-corrosion cracking—far superior to 316L, 317L, and duplex grades.
 It is widely used in desalination, chemical processing, marine, pharma, food, and high-purity industrial systems.

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
                Introduction To AL 6XN / UNS N08367 / W.Nr. 1.4529
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/super-austenitic-stainless-steel/super-austenitic-stainless-steel-AL-6XN.webp') }}"
                        alt="AL 6XN" class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a trusted manufacturer,
                            supplier, exporter, importer, and stockist of<strong class="text-black"> AL 6XN Alloy (UNS
                                N08367) <a href="{{ route('products') }}">products</a></strong> including
                            <a href="{{ route('products.pipes-tubes') }}">Pipes & Tubes</a>, Pipe Fittings, Flanges, Sheets
                            & Plates, Coils, Wires, Round Bars, Forged
                            Components, Fasteners, Welding Electrodes, and custom-engineered parts.
                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">AL 6XN</strong> is a superaustenitic stainless steel designed for
                            superior corrosion resistance in aggressive chloride environments, especially where standard
                            stainless steels (like 316L) are inadequate. It is known for its high nickel (24%), molybdenum
                            (6.3%), and <a href="{{ route('materials.hard-To-Find-Special-Alloys') }}">nitrogen</a>
                            content, providing excellent resistance to pitting, crevice corrosion, and
                            stress corrosion cracking (SCC). Its strength, formability, and weldability make it ideal for
                            critical applications in chemical processing, marine environments, pulp & paper, food, and
                            pharmaceutical industries.
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Super Austentic AL 6XN Datasheet</h3>
            <p class="mb-3">
                Get the complete Super Austentic AL 6XN datasheet with chemical composition,
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

    <!-- End Datasheet Download Section -->


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
                                    <td>23.5 – 25.5</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium</td>
                                    <td>20.0 – 22.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Molybdenum</td>
                                    <td>6.0 – 7.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron</td>
                                    <td>Balance</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nitrogen</td>
                                    <td>0.18 – 0.25</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese</td>
                                    <td>2.0 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon</td>
                                    <td>1.0 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon</td>
                                    <td>0.03 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Phosphorus</td>
                                    <td>0.04 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sulfur</td>
                                    <td>0.03 max</td>
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
                                    <td>0.292 lb/in³</td>
                                    <td>8.08 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Point</td>
                                    <td>2415–2535 °F</td>
                                    <td>1324–1390 °C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Specific Heat</td>
                                    <td>0.11 BTU/lb·°F</td>
                                    <td>460 J/kg·K</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Electrical Resistivity</td>
                                    <td>53.9 µΩ·cm</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Thermal Conductivity</td>
                                    <td>8.7 W/m·K</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Magnetic Permeability</td>
                                    <td>Non-magnetic</td>
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
                                    <th>Annealed</th>
                                    <th>Cold Worked</th>
                                    <th>Solution Treated / Aged</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Tensile Strength (ksi / MPa)</td>
                                    <td>75–95 ksi / 520–655 MPa</td>
                                    <td>90–110 ksi / 620–760 MPa</td>
                                    <td>90–115 ksi / 620–790 MPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (0.2%) (ksi / MPa)</td>
                                    <td>30–50 ksi / 205–345 MPa</td>
                                    <td>60–90 ksi / 415–620 MPa</td>
                                    <td>65–90 ksi / 450–620 MPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elongation (%)</td>
                                    <td>30–50%</td>
                                    <td>15–30%</td>
                                    <td>15–30%</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Hardness (Rockwell B / C)</td>
                                    <td>70–90 B</td>
                                    <td>80–95 B</td>
                                    <td>80–95 B</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Brinell Hardness (HB)</td>
                                    <td>150–200 HB</td>
                                    <td>180–230 HB</td>
                                    <td>180–230 HB</td>
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
                <h2>Products in AL 6XN</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">AL 6XN</strong> is commonly supplied as:
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
                        We supply AL 6XN materials in accordance with the most stringent industry standards: </p>
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
                        <h5>Outstanding Resistance to pitting, crevice corrosion, and SCC</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Performs in high-temperature, high-chloride environments</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Excellent weldability without post-weld heat treatment</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Non-magnetic and seawater resistant</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Suitable for sanitary and ultra-clean applications</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of AL 6XN</h2>
                <p class="text-center pb-3"><strong class="text-dark">AL 6XN</strong> is widely chosen for critical
                    applications where corrosion resistance is vital. Key industries and uses include:
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Marine Applications</h5>
                        <p>Desalination plants, seawater cooling systems, marine heat exchangers, pump housings.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Chemical Processing</h5>
                        <p>Heat exchangers, process vessels, piping in acidic and chloride-rich environments.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Food & Beverage Industry</h5>
                        <p>Equipment in brine systems, salt evaporators, and pickling lines.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Pharmaceutical & Biotech</h5>
                        <p>High-purity process piping, tanks, and clean-in-place (CIP) systems.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Pulp & Paper</h5>
                        <p>Bleaching equipment, digesters, and chlorination systems.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Power Generation</h5>
                        <p>Condensers, flue gas desulfurization (FGD) systems.</p>
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
                        <h5>Reliable supplier of high-grade Aluminium 6082-T6 products </h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Specialists in high-performance alloys and custom fabrications</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Strict quality checks and mill test certifications (MTC)</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Wide inventory with fast global shipping</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>ISO-certified facility ensuring consistent product quality</h5>
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
                                <h4>What is AL 6XN Alloy and why is it important?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    AL 6XN (UNS N08367) is a superaustenitic stainless steel known for its exceptional
                                    resistance to pitting, crevice corrosion, and stress corrosion cracking (SCC) in
                                    aggressive chloride environments. With high nickel (24%), molybdenum (6.3%), and
                                    nitrogen content, it outperforms standard stainless steels like 316L. Its strength,
                                    excellent formability, and weldability make it ideal for applications where durability
                                    and corrosion resistance are critical, including chemical, marine, and pharmaceutical
                                    industries.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What AL 6XN products does Moksh Tubes & Fittings LLP supply?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Moksh Tubes & Fittings LLP offers a comprehensive range of AL 6XN products, including
                                    seamless and welded pipes, capillary and U-bend tubes, boiler and heat exchanger tubes,
                                    sheets, plates, coils, strips, round, flat, hex, and square bars, pipe fittings,
                                    flanges, fasteners, welding electrodes, wires, and custom-engineered components. All
                                    products are manufactured to meet stringent international quality standards and are
                                    available in customized dimensions for diverse industrial needs.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the advantages of using AL 6XN?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    AL 6XN provides outstanding resistance to corrosion in high-chloride and acidic
                                    environments, making it suitable for critical applications. It offers superior
                                    performance in pitting, crevice corrosion, and SCC, excellent weldability without the
                                    need for post weld heat treatment, non magnetic properties, and high durability in
                                    seawater. Its combination of corrosion resistance and strength ensures long-lasting
                                    reliability even in harsh operating conditions.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Which industries commonly use AL 6XN Alloy?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    AL 6XN is widely used in marine and desalination applications, chemical processing
                                    plants, food and beverage production, pharmaceutical and biotech industries, pulp and
                                    paper mills, and power generation. Its ability to resist chloride induced corrosion
                                    makes it ideal for seawater cooling systems, heat exchangers, process piping, tanks,
                                    clean-in-place (CIP) systems, bleaching equipment, and flue gas desulfurization (FGD)
                                    components.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose Moksh Tubes & Fittings LLP for AL 6XN supply?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Moksh Tubes & Fittings LLP is a trusted manufacturer, supplier, and exporter of
                                    high-grade AL 6XN Alloy products. The company ensures strict quality control, mill test
                                    certification (MTC), ISO-certified processes, and fast global delivery. With expertise
                                    in high-performance alloys and custom fabrications, Moksh Tubes & Fittings LLP provides
                                    reliable solutions for critical industrial applications, ensuring consistent product
                                    performance and customer satisfaction.
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
                    <strong>Moksh Tubes & Fittings LLP</strong> Your reliable source for premium AL 6XN alloy products.
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
                        "name": "What is AL 6XN Alloy and why is it important?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "AL 6XN (UNS N08367) is a superaustenitic stainless steel known for its exceptional resistance to pitting, crevice corrosion, and stress corrosion cracking (SCC) in aggressive chloride environments. With high nickel (24%), molybdenum (6.3%), and nitrogen content, it outperforms standard stainless steels like 316L. Its strength, excellent formability, and weldability make it ideal for applications where durability and corrosion resistance are critical, including chemical, marine, and pharmaceutical industries."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "What AL 6XN products does Moksh Tubes & Fittings LLP supply?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Moksh Tubes & Fittings LLP offers a comprehensive range of AL 6XN products, including seamless and welded pipes, capillary and U-bend tubes, boiler and heat exchanger tubes, sheets, plates, coils, strips, round, flat, hex, and square bars, pipe fittings, flanges, fasteners, welding electrodes, wires, and custom-engineered components. All products are manufactured to meet stringent international quality standards and are available in customized dimensions for diverse industrial needs."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "What are the advantages of using AL 6XN?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "AL 6XN provides outstanding resistance to corrosion in high-chloride and acidic environments, making it suitable for critical applications. It offers superior performance in pitting, crevice corrosion, and SCC, excellent weldability without the need for post weld heat treatment, non magnetic properties, and high durability in seawater. Its combination of corrosion resistance and strength ensures long-lasting reliability even in harsh operating conditions."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Which industries commonly use AL 6XN Alloy?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "AL 6XN is widely used in marine and desalination applications, chemical processing plants, food and beverage production, pharmaceutical and biotech industries, pulp and paper mills, and power generation. Its ability to resist chloride induced corrosion makes it ideal for seawater cooling systems, heat exchangers, process piping, tanks, clean-in-place (CIP) systems, bleaching equipment, and flue gas desulfurization (FGD) components."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Why choose Moksh Tubes & Fittings LLP for AL 6XN supply?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Moksh Tubes & Fittings LLP is a trusted manufacturer, supplier, and exporter of high-grade AL 6XN Alloy products. The company ensures strict quality control, mill test certification (MTC), ISO-certified processes, and fast global delivery. With expertise in high-performance alloys and custom fabrications, Moksh Tubes & Fittings LLP provides reliable solutions for critical industrial applications, ensuring consistent product performance and customer satisfaction."
                        }
                    }
                ]
            }

        @endverbatim
    </script>
@endsection
