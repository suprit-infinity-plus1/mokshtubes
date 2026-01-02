@extends('layouts.master')

@section('title', 'EN19 Alloy Steel | Hardened High Strength Steel')
@section('meta_description',
    'EN19 Alloy Steel offering superior hardness, strength, and durability for tools and heavy
    machinery parts.')
@section('meta_keywords',
    'EN19 Alloy Steel, hardened alloy steel, high strength steel, tool steel, machinery steel,
    durable alloy steel, industrial alloy steel')
@section('og_image', asset('assets/images/engineering-steels/engineering-steels-en19.webp'))
@section('og_type', 'article')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area"
        style="background-image: url(/assets/images/engineering-steels/engineering-steels-en19.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Premium EN19 Hardened Alloy Steel<br>High Strength Alloy Steel
                    </h1>

                    <!-- Add your extra content here -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        EN19 Engineering Steel (EN19 / 4140 / 42CrMo4) is a high-strength chromium-molybdenum alloy steel
                        grade known for excellent toughness, high tensile strength, shock resistance, and superior
                        hardenability. It is widely used for shafts, gears, axles, bolts, crankshafts, and other heavy-duty
                        engineering components.

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
            position: sticky;
            /* you missed this */
            top: 50px;
            /* and this */
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
                Introduction To Engineering Steel 19 / AISI 4140 / 42CrMo4
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/engineering-steels/engineering-steels-en19.webp') }}" alt="EN19"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a leading manufacturer,
                            stockist, exporter, and supplier of<strong class="text-black"> EN19 (also known as AISI 4140 /
                                42CrMo4) engineering steel
                                products.</strong> We offer a wide range of EN19 products including Round Bars, Flats, Hex
                            Bars,
                            Forgings, Shafts, Hollow Bars,<a href="{{ route('products.pipes-tubes') }}"> Pipes</a>,
                            Fasteners, and Customized Components, suitable for
                            demanding mechanical and structural applications.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">EN 19</strong class="text-black">, <a
                                href="{{ url('materials/engineering-steels/engineering-steels-en8') }}">EN8</a>
                            is a high tensile alloy steel
                            grade with excellent strength, toughness, and wear resistance. It contains chromium and
                            molybdenum, which provide improved hardenability and high fatigue strength.<a
                                href="{{ route('materials.engineering-Steels') }}"> EN19</a> is commonly
                            used for automotive components, gears, shafts, and high-stress machine.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Engineering Steels 19 Datasheet</h3>
            <p class="mb-3">
                Get the complete Engineering Steels 19 datasheet with chemical composition,
                mechanical properties, heat treatment details, and applications.
                Enter your email to receive the PDF instantly.
            </p>

            <!-- Lead Capture Form -->
            <form id="leadForm" method="POST" action="{{ route('lead.capture') }}" class="mb-3">
                @csrf
                <div class="row justify-content-center">
                    <input type="hidden" name="pdf" value="en_en19.pdf">
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
                                    <td>0.36 – 0.44</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon</td>
                                    <td>0.10 – 0.35</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese</td>
                                    <td>0.50 – 0.80</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium</td>
                                    <td>0.90 – 1.50</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Molybdenum</td>
                                    <td>0.15 – 0.35</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sulfur</td>
                                    <td>0.035 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Phosphorus</td>
                                    <td>0.035 max</td>
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
                                    <td>85–105 ksi / 586–724 MPa</td>
                                    <td>90–120 ksi / 620–827 MPa</td>
                                    <td>95–130 ksi / 655–896 MPa</td>
                                    <td>85–110 ksi / 586–758 MPa</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (0.2%)</td>
                                    <td>50–65 ksi / 345–448 MPa</td>
                                    <td>60–100 ksi / 414–690 MPa</td>
                                    <td>65–110 ksi / 448–758 MPa</td>
                                    <td>50–75 ksi / 345–517 MPa</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elongation (%)</td>
                                    <td>20–25</td>
                                    <td>15–25</td>
                                    <td>12–18</td>
                                    <td>18–25</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Brinell Hardness (3000 kg)</td>
                                    <td>150–200</td>
                                    <td>180–250</td>
                                    <td>200–270</td>
                                    <td>150–210</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Rockwell Hardness (B / C)</td>
                                    <td>80–90 B</td>
                                    <td>85–95 B</td>
                                    <td>90–95 B / 20–30 C</td>
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
                <h2>Products in Engineering Steel 19</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Engineering Steel 19</strong> is typically available in:
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
                        Engineering Steel 19 products are produced to the following global standards:
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
                        <h5>High tensile and yield strength</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Excellent wear resistance and fatigue life</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Good machinability in normalized or QT condition</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Can be nitrided or case-hardened for surface hardness</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Excellent toughness and resistance to crack propagation</h5>
                    </div>
                </div>
            </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Engineering Steel 19</h2>
                <p class="text-center pb-3"><strong class="text-dark">Engineering Steel 19</strong> is widely used in
                    high-stress industrial, mechanical, and automotive components, including:</p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Automotive & Transport</h5>
                        <p>Axles, drive shafts, crankshafts, connecting rods, gear shafts</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Oil & Gas Equipment</h5>
                        <p>Drill collars, hydraulic tools, blowout preventers</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Power Generation</h5>
                        <p>Rotor shafts, gearboxes, coupling rods</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Heavy Engineering</h5>
                        <p>Machine tool components, press tools, die blocks, rollers</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Construction Machinery</h5>
                        <p>Pinions, gears, sprockets, cranes, and load-bearing equipment</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Defense & Aerospace</h5>
                        <p>Landing gear components, hydraulic cylinders, structural brackets</p>
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
                        <h5>Trusted Supplier Network – We source certified raw materials from reputed mills</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Precision Processing – Cutting, heat treatment, CNC machining & testing</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Custom Solutions – Special profiles and tailor-made parts available</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Fast Delivery – Ready stock and global shipping</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Strict Quality Control – ISO-certified processes and third-party inspections</h5>
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
                                <h4>What is EN19 steel and why is it also known as AISI 4140 or 42CrMo4?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    EN19, also referred to as AISI 4140 or 42CrMo4, is a high-tensile chromium-molybdenum
                                    alloy steel widely recognized for its excellent combination of strength, toughness, and
                                    wear resistance.
                                    The presence of chromium provides enhanced hardenability and corrosion resistance, while
                                    molybdenum improves fatigue strength and toughness.
                                    These properties make EN19 suitable for heavy-duty engineering and mechanical
                                    applications where high performance under stress is required.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the key chemical and mechanical properties of EN19 steel?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    The chemical composition of EN19 includes 0.36–0.44% carbon, 0.90–1.50% chromium,
                                    0.15–0.35% molybdenum, 0.50–0.80% manganese, 0.10–0.35% silicon, and controlled levels
                                    of phosphorus and sulfur.
                                    It provides tensile strength in the range of 85–130 ksi (586–896 MPa) depending on
                                    condition, with yield strength between 50–110 ksi (345–758 MPa).
                                    EN19 also offers elongation of 12–25%, hardness between 150–270 Brinell, and good
                                    machinability in normalized or quenched and tempered conditions, making it an excellent
                                    choice for precision-engineered parts.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What EN19 steel products does MOKSH TUBES & FITTINGS LLP supply?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP supplies a comprehensive range of EN19 steel products
                                    including round bars, flat bars, hex bars, square bars, hollow bars, forgings, shafts,
                                    sheets, plates, coils, strips, seamless and welded pipes, tubes, flanges, pipe fittings,
                                    fasteners, and custom-fabricated components.
                                    All products are manufactured to international standards and can be supplied in
                                    annealed, hot rolled, cold drawn, or quenched and tempered conditions with precision
                                    machining and heat treatment options.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the common applications of EN19 steel in different industries?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    EN19 steel is extensively used across automotive, oil and gas, power generation, heavy
                                    engineering, construction, defense, and aerospace sectors.
                                    In the automotive industry, it is used for axles, crankshafts, gear shafts, and drive
                                    shafts, while in oil and gas it is used for drill collars, hydraulic tools, and blowout
                                    preventers.
                                    In power generation and heavy machinery, EN19 is used for rotor shafts, press tools,
                                    coupling rods, rollers, and die blocks.
                                    Its toughness also makes it suitable for aerospace landing gear components, structural
                                    brackets, and hydraulic cylinders.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose MOKSH TUBES & FITTINGS LLP for EN19 steel products?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    <a href="{{ route('index') }}">MOKSH TUBES & FITTINGS LLP</a> is a trusted
                                    manufacturer, supplier, stockist, and exporter
                                    of EN19 steel products, offering precision processing, CNC machining, cutting, heat
                                    treatment, and custom-tailored solutions to meet exact client requirements.
                                    The company sources certified raw materials from reputed mills and ensures strict
                                    quality control with ISO-certified processes and third party inspections.
                                    With ready stock availability, fast global shipping, and technical expertise, MOKSH
                                    TUBES & FITTINGS LLP is a reliable partner for industries requiring high-performance
                                    EN19 steel solutions.
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
                    Get in touch with <strong> Moksh Tubes & Fittings LLP
                    </strong> — for high-quality EN19 steel products tailored to your specifications.
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
                    "name": "What is EN19 steel and why is it also known as AISI 4140 or 42CrMo4?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "EN19, also referred to as AISI 4140 or 42CrMo4, is a high-tensile chromium-molybdenum alloy steel known for its strength, toughness, and wear resistance. Chromium enhances hardenability and corrosion resistance, while molybdenum improves fatigue strength and toughness, making EN19 suitable for heavy-duty engineering applications."
                    }
                    },
                    {
                    "@type": "Question",
                    "name": "What are the key chemical and mechanical properties of EN19 steel?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "EN19 steel contains 0.36–0.44% carbon, 0.90–1.50% chromium, 0.15–0.35% molybdenum, 0.50–0.80% manganese, and 0.10–0.35% silicon. It offers tensile strength between 85–130 ksi, yield strength of 50–110 ksi, elongation of 12–25%, and hardness from 150–270 Brinell. It also has good machinability in normalized or quenched and tempered conditions."
                    }
                    },
                    {
                    "@type": "Question",
                    "name": "What EN19 steel products does MOKSH TUBES & FITTINGS LLP supply?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "MOKSH TUBES & FITTINGS LLP supplies EN19 round bars, flat bars, hex bars, hollow bars, forgings, shafts, sheets, plates, coils, strips, seamless and welded pipes, tubes, flanges, fittings, fasteners, and custom-fabricated parts. Products meet international standards and are available in annealed, hot rolled, cold drawn, or quenched and tempered conditions."
                    }
                    },
                    {
                    "@type": "Question",
                    "name": "What are the common applications of EN19 steel in different industries?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "EN19 steel is used in automotive, oil and gas, power generation, heavy engineering, construction, defense, and aerospace sectors. Applications include axles, crankshafts, gear shafts, drill collars, hydraulic tools, rotor shafts, coupling rods, press tools, die blocks, and landing gear components."
                    }
                    },
                    {
                    "@type": "Question",
                    "name": "Why choose MOKSH TUBES & FITTINGS LLP for EN19 steel products?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "MOKSH TUBES & FITTINGS LLP is a trusted manufacturer and exporter of EN19 steel, offering precision machining, cutting, heat treatment, and custom solutions. The company ensures quality through ISO-certified processes, third-party inspections, and certified raw materials, providing ready stock and global shipping for reliable performance."
                    }
                    }
                ]
                }

        @endverbatim
    </script>
@endsection
