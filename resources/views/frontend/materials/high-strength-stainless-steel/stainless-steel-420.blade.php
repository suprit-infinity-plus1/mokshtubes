@extends('layouts.master')

@section('title', 'Stainless Steel 420 | Mokshtubes Sheets & Bars Dealer')
@section('meta_description', 'Stainless Steel 420 sheets, bars & coils from MokshTubes – corrosion-resistant, durable,
    and hard, perfect for precision engineering applications.')
@section('meta_keywords', 'Stainless Steel 420, AISI 420, UNS S42000, martensitic stainless steel, stainless steel
    sheets, stainless steel bars, stainless steel coils, corrosion-resistant stainless steel, high-strength stainless steel,
    precision engineering materials, wear-resistant stainless steel')
@section('og_image', asset('assets/images/high-strength-stainless-steel/Stainless-Steel-420.webp'))
@section('og_type', 'article')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area"
        style="background-image: url(/assets/images/high-strength-stainless-steel/Stainless-Steel-420.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Stainless Steel 420 <br> High-Carbon Martensitic Stainless Steel</h1>
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
                Introduction to Stainless Steel 420 / AISI 420 / UNS S42000
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/high-strength-stainless-steel/Stainless-Steel-420.webp') }}"
                        alt="Stainless Steel 420" class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black">MOKSH TUBES & FITTINGS LLP</strong> is a trusted supplier, exporter,
                            importer,
                            and stockist of premium-grade Stainless Steel 420 products, including pipes & tubes, sheets &
                            plates, coils,
                            bars, pipe fittings, flanges, fasteners, wire mesh, and a variety of custom-engineered
                            components.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">Stainless Steel 420</strong> is a high-carbon martensitic stainless
                            steel that
                            offers excellent hardenability, good strength, and moderate corrosion resistance. It contains
                            12–14% chromium,
                            which forms a passive oxide film for protection in mildly corrosive environments.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            Unlike austenitic stainless steels, SS 420 can be heat treated to achieve high hardness levels
                            (up to ~50 HRC),
                            making it suitable for cutting tools, surgical instruments, and wear-resistant parts. It is
                            magnetic in all
                            conditions and provides a good balance of strength, edge retention, and machinability.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download High Strength Stainless Steel 420 Datasheet</h3>
            <p class="mb-3">
                Get the complete High Strength Stainless Steel 420 datasheet with chemical composition,
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


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Stainless Steel 420 Chemical Composition</h2>
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
                                    <td>Carbon (C)</td>
                                    <td>0.15 – 0.40</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese (Mn)</td>
                                    <td>1.00 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon (Si)</td>
                                    <td>1.00 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Phosphorus (P)</td>
                                    <td>0.040 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sulfur (S)</td>
                                    <td>0.030 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium (Cr)</td>
                                    <td>12.0 – 14.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nickel (Ni)</td>
                                    <td>0.75 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron (Fe)</td>
                                    <td>Balance</td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="fs-6 text-center mt-3">
                            The higher carbon content in <strong>SS 420</strong> compared to 410 allows it to be hardened
                            and tempered,
                            offering excellent wear resistance and cutting performance.
                        </p>
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
                                    <td>7.75 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Point</td>
                                    <td>1450 – 1510 °C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Modulus of Elasticity</td>
                                    <td>200 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Thermal Conductivity</td>
                                    <td>24.9 W/m·K (at 100 °C)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Electrical Resistivity</td>
                                    <td>0.55 µΩ·m</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Magnetic Properties</td>
                                    <td>Magnetic (Martensitic)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Mechanical Properties Table -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h4 class="text-center mb-3" style="color: #db7227;">Mechanical Properties of Stainless Steel 420</h4>
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
                                    <td>Tensile Strength (Annealed)</td>
                                    <td>620 MPa</td>
                                    <td>90,000 psi</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (0.2% Offset)</td>
                                    <td>345 MPa</td>
                                    <td>50,000 psi</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elongation</td>
                                    <td>20%</td>
                                    <td>20%</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Hardness (Brinell)</td>
                                    <td>180 HB</td>
                                    <td>180 HB</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tensile Strength (Hardened & Tempered)</td>
                                    <td>760 – 1100 MPa</td>
                                    <td>110,000 – 160,000 psi</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Hardness (Rockwell C)</td>
                                    <td>45 – 50 HRC</td>
                                    <td>45 – 50 HRC</td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="fs-6 text-center mt-3">
                            <strong>SS 420</strong> can be hardened by heating between 980–1050 °C followed by air or oil
                            quenching and
                            tempering, delivering exceptional edge strength and wear resistance.
                        </p>
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
                <h2>Products in Stainless Steel 420</h2>
            </div>

            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">MOKSH TUBES & FITTINGS LLP</strong>, with extensive experience in
                        high-carbon martensitic stainless steel grades and a well-established global supply network, offers
                        an extensive range of <strong class="text-dark">STAINLESS STEEL 420</strong> products. These are
                        widely used in wear-resistant, cutting, and precision engineering applications across industries
                        including Surgical Tools, Cutlery Manufacturing, Automotive, Aerospace, Oil & Gas, Industrial
                        Equipment, and General Engineering. SS 420 is valued for its excellent hardenability, high strength,
                        and dependable performance under mechanical stress.
                    </p>
                </div>
            </div>

            <!-- Horizontal Styled Product List -->
            <div class="row justify-content-center mb-5">
                <div class="col-lg-10">
                    <div class="p-4 bg-white rounded shadow-sm border-start border-4" style="border-color: #db7227;">
                        <div class="row">
                            <div class="col-12 col-sm-6 mb-2 d-flex justify-content-start align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Seamless Pipes & Tubes</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex justify-content-start align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Welded Pipes (ERW & EFW)</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex justify-content-start align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Capillary & Heat Exchanger Tubes</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex justify-content-start align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Sheets, Plates & Strips</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex justify-content-start align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Coils (Hot Rolled & Cold Rolled)</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex justify-content-start align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Round Bars, Flat Bars, Hex & Square Bars</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex justify-content-start align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Pipe Fittings (Elbows, Tees, Reducers, Caps, Stub Ends)</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex justify-content-start align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Flanges (Weld Neck, Slip-On, Blind, Socket Weld, Threaded)</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex justify-content-start align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Fasteners (Bolts, Nuts, Screws, Studs, Washers)</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex justify-content-start align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Wire Mesh & Perforated Sheets</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex justify-content-start align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Precision Machined & Custom Fabricated Components</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Emphasized Line -->
            <div class="row justify-content-center mb-3">
                <div class="col-lg-10">
                    <p class="fw-bold fs-5 text-center my-4" style="color: #174268;">
                        All Stainless Steel 420 products conform to ASTM A276 / A580 / A484 / A473 and other relevant
                        international standards.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <!-- Product Image Cards (Now centered and responsive) -->
    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-4 justify-content-center">
        @foreach ($products as $product)
            <div class="col d-flex">
                <a href="{{ route($product['route']) }}" class="text-decoration-none w-100">
                    <div class="product-card h-100">
                        <img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}" class="img-fluid w-100">
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
                        <div class="advantage-icon"><i class="bi bi-hammer"></i></div>
                        <h5>Excellent hardenability and strength after heat treatment</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-scissors"></i></div>
                        <h5>Good edge retention – ideal for cutting instruments</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-magnet"></i></div>
                        <h5>Magnetic in all conditions</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Moderate corrosion resistance in mild environments</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-brightness-high"></i></div>
                        <h5>Machinable and polishable to a mirror finish</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-fill"></i></div>
                        <h5>Good wear and abrasion resistance after hardening</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Stainless Steel 420</h2>
                <p class="text-center pb-3"><strong class="text-dark">STAINLESS STEEL 420</strong> is used where high
                    strength, hardness, and moderate corrosion resistance are required:</p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-scissors"></i></div>
                        <h5>Cutlery & Cutting Tools</h5>
                        <p>Knife blades, scissors, surgical tools, and shears requiring sharpness and durability.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-heart-pulse-fill"></i></div>
                        <h5>Surgical & Dental Instruments</h5>
                        <p>Scalpels, forceps, scissors, and precision medical devices with high polishability.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Automotive & Aerospace</h5>
                        <p>Shafts, gears, and precision machined parts needing wear resistance.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-valve"></i></div>
                        <h5>Pump & Valve Components</h5>
                        <p>Valve seats, spindles, and parts exposed to mild chemicals and abrasive flows.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Industrial Machinery</h5>
                        <p>Wear plates, molds, dies, and fasteners for heavy-duty equipment.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-brightness-high"></i></div>
                        <h5>Household & Decorative</h5>
                        <p>High-polish mirror finish components, handles, and decorative fittings.</p>
                    </div>
                </div>
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
                        <h5>Decades of experience in stainless steel products</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-box-seam"></i></div>
                        <h5>Comprehensive stock of 420 pipes, bars, sheets & fittings</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-send-fill"></i></div>
                        <h5>Global distribution network for timely delivery</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-eyeglasses"></i></div>
                        <h5>Strict quality control & third-party inspection</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Custom sizes and finishes to meet client requirements</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--Start faq content area-->
    <section class="faq-content-area sec-padd2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="accordion-box">
                        <div class="section-title center">
                            <h2>FAQ’s – Stainless Steel 420</h2>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>1. What is 420 Stainless Steel?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    420 is a high-carbon martensitic stainless steel known for good hardness, corrosion
                                    resistance,
                                    and excellent polishability, often used in cutting tools and precision instruments.
                                </p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>2. What are its key properties?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    High hardness after heat treatment, good wear resistance, moderate corrosion resistance,
                                    and
                                    good machinability.
                                </p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>3. Where is it used?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Commonly used in cutlery, surgical instruments, bearings, valve parts, and precision
                                    tools.
                                </p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>4. Is it weldable?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Welding is possible but limited; preheating and post-weld heat treatment are recommended
                                    to
                                    maintain properties.
                                </p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>5. Why choose MOKSH TUBES & FITTINGS LLP for SS 420?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Mokshtubes offers premium 420 stainless steel with guaranteed quality, precision
                                    manufacturing,
                                    extensive stock, and reliable global delivery.
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



    <!-- Contact Section -->
    <section class="sec-padd-bottom">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Contact Us</h2>
                <p>
                    For any inquiries or to request a quote, reach out to <strong>Moksh Tubes & Fittings LLP</strong> – your
                    trusted partner for <strong>stainless steel 420</strong> products.
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
                        "name": "What is 420 Stainless Steel?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "420 is a high-carbon martensitic stainless steel known for good hardness, corrosion resistance, and excellent polishability, often used in cutting tools and precision instruments."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "What are its key properties?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "High hardness after heat treatment, good wear resistance, moderate corrosion resistance, and good machinability."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Where is it used?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Commonly used in cutlery, surgical instruments, bearings, valve parts, and precision tools."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Is it weldable?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Welding is possible but limited; preheating and post-weld heat treatment are recommended to maintain properties."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Why choose MOKSH TUBES & FITTINGS LLP for SS 420?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Mokshtubes offers premium 420 stainless steel with guaranteed quality, precision manufacturing, extensive stock, and reliable global delivery."
                        }
                    }
                ]
            }

        @endverbatim
    </script>
@endsection
