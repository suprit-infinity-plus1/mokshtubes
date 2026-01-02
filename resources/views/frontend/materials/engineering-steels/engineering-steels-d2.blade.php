@extends('layouts.master')

@section('title', 'D2 Tool Steel | High Carbon, High Chromium Alloy')
@section('meta_description', 'D2 Tool Steel offering exceptional wear resistance and toughness for cutting tools, dies,
    and industrial applications.')
@section('meta_keywords', 'D2 Tool Steel, high carbon steel, high chromium steel, wear resistant steel, tough tool
    steel, cutting tools steel, die steel, industrial tool steel')

@section('og_image', asset('assets/images/engineering-steels/engineering-steels-d2.webp'))
@section('og_type', 'article')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area"
        style="background-image: url(/assets/images/engineering-steels/engineering-steels-d2.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Premium D2 Tool Steel for Industrial Applications<br>High-Carbon, High-Chromium Tool Steel</h1>
                    <!-- Add your extra content here -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        D2 Engineering Steel (EN D2 / AISI D2) is a high-carbon, high-chromium tool steel known for
                        excellent wear resistance, high hardness, and toughness. Below is the complete datasheet including
                        composition, properties, heat treatment, and applications.
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
                Introduction To Engineering Steel D2 Tool
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/engineering-steels/engineering-steels-d2.webp') }}" alt="ENd2"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a leading manufacturer,
                            supplier, exporter, importer, and stockist of<strong class="tex-black"> D2 steel
                                products</strong> including bars, plates, sheets,<a
                                href="{{ route('products.pipes-tubes') }}"> tubes</a> and precision ground tooling
                            materials.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">EN D2</strong class="text-black">, is a high-carbon, high-chromium,
                            air-hardening tool steel known for its excellent wear resistance, toughness, and ability to
                            maintain a sharp edge. It is classified as a cold work tool steel and is commonly used in
                            applications requiring high abrasion resistance and moderate toughness. Its high chromium
                            content provides good corrosion resistance compared to other tool steels, making it suitable for
                            tools exposed to mild corrosive environments.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Engineering Steels D2 Datasheet</h3>
            <p class="mb-3">
                Get the complete Engineering Steels D2 datasheet with chemical composition,
                mechanical properties, heat treatment details, and applications.
                Enter your email to receive the PDF instantly.
            </p>

            <!-- Lead Capture Form -->
            <form id="leadForm" method="POST" action="{{ route('lead.capture') }}" class="mb-3">
                @csrf
                <div class="row justify-content-center">
                    <input type="hidden" name="pdf" value="en_d2.pdf">
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
                                    <td>1.40 – 1.60</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium</td>
                                    <td>11.00 – 13.00</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon</td>
                                    <td>0.20 – 0.60</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese</td>
                                    <td>0.60 – 0.90</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Molybdenum</td>
                                    <td>0.70 – 1.20</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sulfur</td>
                                    <td>≤ 0.03</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Phosphorus</td>
                                    <td>≤ 0.03</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Vanadium </td>
                                    <td>0.80 – 1.20</td>
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
                                    <td>0.28 lb/in³</td>
                                    <td>7.7 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Point</td>
                                    <td>2040 – 2130 °F</td>
                                    <td>1115 – 1165 °C</td>
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
                                    <td>0.28</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Thermal Conductivity</td>
                                    <td>18 W/m·K</td>
                                    <td>18 W/m·K</td>
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
                                    <td>90–105 ksi / 620–724 MPa</td>
                                    <td>—</td>
                                    <td>—</td>
                                    <td>—</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (0.2%)</td>
                                    <td>70–85 ksi / 482–586 MPa</td>
                                    <td>—</td>
                                    <td>—</td>
                                    <td>—</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elongation (%)</td>
                                    <td>8–12</td>
                                    <td>—</td>
                                    <td>—</td>
                                    <td>—</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Brinell Hardness (3000 kg)</td>
                                    <td>200–230</td>
                                    <td>—</td>
                                    <td>—</td>
                                    <td>—</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Rockwell Hardness (B / C)</td>
                                    <td>58–62 HRC</td>
                                    <td>—</td>
                                    <td>—</td>
                                    <td>—</td>
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
                <h2>Products in Engineering Steel D2</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Engineering Steel D2</strong> is typically available in:
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
                        Engineering Steel D2 products are produced to the following global standards:
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
                        <h5>Exceptional wear resistance and edge retention</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Good toughness compared to other high-carbon tool steels</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Moderate corrosion resistance due to high chromium content</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Can be air-hardened with minimal distortion</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Excellent dimensional stability during heat treatment</h5>
                    </div>
                </div>
            </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Engineering Steel D2</h2>
                <p class="text-center pb-3"><strong class="text-dark">Engineering Steel D2</strong> is widely used in:</p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Cold Work Tooling</h5>
                        <p>Dies, punches, blanking tools, shear blades, and cutting tools requiring high wear resistance.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Industrial Knives & Blades</h5>
                        <p>Paper cutting, leather cutting, plastic trimming, and metal shear blades.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Mold Making</h5>
                        <p>For plastic molds and extrusion dies due to excellent wear and corrosion resistance.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Wear-Resistant Parts</h5>
                        <p>Machine components subjected to abrasive wear such as shafts, rollers, and dies.</p>
                    </div>
                </div>

                {{-- <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Tool Manufacturing</h5>
                        <p>Used in making dies and heavy-duty tools requiring durability.</p>
                    </div>
                </div> --}}

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
                        <h5>Large stock availability of D2 steel in various sizes and forms</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Precision cutting and custom processing available</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Technical expertise to guide material selection and heat treatment</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Reliable and prompt delivery services worldwide</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Competitive pricing and customer-focused solutions</h5>
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
                                <h4>What is EN D2 steel and why is it important in toolmaking?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    EN D2 is a high-carbon, high-chromium, air-hardening cold work tool steel renowned for
                                    its exceptional wear resistance, toughness, and edge retention.
                                    With a high chromium content of 11–13%, it offers moderate corrosion resistance compared
                                    to other tool steels, making it suitable for applications where tools face both abrasive
                                    wear and mild corrosive conditions.
                                    Due to its ability to maintain dimensional stability during heat treatment, EN D2 is a
                                    preferred choice in toolmaking and industrial applications requiring long lasting
                                    performance.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the chemical and mechanical properties of EN D2 steel?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    EN D2 steel has a chemical composition of 1.40–1.60% carbon, 11–13% chromium, 0.70–1.20%
                                    molybdenum, 0.80–1.20% vanadium, along with controlled amounts of silicon, manganese,
                                    phosphorus, and sulfur.
                                    In terms of mechanical properties, it offers tensile strength of 90–105 ksi (620–724
                                    MPa), yield strength of 70–85 ksi (482–586 MPa), elongation of 8–12%, and hardness of
                                    58–62 HRC after heat treatment.
                                    These properties provide a balance of hardness, strength, and wear resistance that make
                                    EN D2 suitable for high performance tooling and industrial use.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What D2 steel products are offered by MOKSH TUBES & FITTINGS LLP?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP supplies a wide range of EN D2 steel products including
                                    seamless and welded pipes, precision tubes, sheets, plates, coils, strips, round bars,
                                    flat bars, square bars, and hex bars.
                                    Additionally, the company manufactures pipe fittings, flanges, fasteners, and
                                    custom fabricated components designed to meet global quality standards.
                                    All products are available in standard and customized specifications to fulfill diverse
                                    industry requirements.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the common applications of EN D2 tool steel?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    EN D2 steel is widely used in cold work tooling applications such as dies, punches,
                                    blanking tools, shear blades, and cutting tools that require high wear resistance.
                                    It is also popular in the production of industrial knives and blades for paper, leather,
                                    plastic, and metal cutting.
                                    In mold-making, EN D2 is used for plastic molds and extrusion dies due to its ability to
                                    withstand wear and maintain stability.
                                    Furthermore, it is applied in manufacturing wear resistant machine parts like shafts,
                                    rollers, and dies for heavy duty operations.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose MOKSH TUBES & FITTINGS LLP for D2 steel materials?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP is a reliable manufacturer, supplier, and exporter of EN D2
                                    tool steel with large stock availability in multiple sizes and forms.
                                    The company provides precision cutting, heat-treatment guidance, and custom processing
                                    to meet industry-specific needs.
                                    With strong technical expertise, competitive pricing, and a commitment to quality and
                                    timely delivery, MOKSH TUBES & FITTINGS LLP ensures that clients worldwide receive
                                    durable and high performance D2 steel solutions.
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
                    For inquiries or to request a quote for D2 tool steel products, contact<strong> Moksh Tubes & Fittings
                        LLP</strong> — your dependable partner for high-performance tool steels.
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
                    "name": "What is EN D2 steel and why is it important in toolmaking?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "EN D2 is a high-carbon, high-chromium, air-hardening cold work tool steel renowned for its exceptional wear resistance, toughness, and edge retention. With a high chromium content of 11–13%, it offers moderate corrosion resistance compared to other tool steels, making it suitable for applications where tools face both abrasive wear and mild corrosive conditions. Due to its ability to maintain dimensional stability during heat treatment, EN D2 is a preferred choice in toolmaking and industrial applications requiring long lasting performance."
                    }
                    },
                    {
                    "@type": "Question",
                    "name": "What are the chemical and mechanical properties of EN D2 steel?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "EN D2 steel has a chemical composition of 1.40–1.60% carbon, 11–13% chromium, 0.70–1.20% molybdenum, 0.80–1.20% vanadium, along with controlled amounts of silicon, manganese, phosphorus, and sulfur. It offers tensile strength of 90–105 ksi, yield strength of 70–85 ksi, elongation of 8–12%, and hardness of 58–62 HRC after heat treatment."
                    }
                    },
                    {
                    "@type": "Question",
                    "name": "What D2 steel products are offered by MOKSH TUBES & FITTINGS LLP?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "MOKSH TUBES & FITTINGS LLP supplies EN D2 steel products including seamless and welded pipes, precision tubes, sheets, plates, coils, strips, round bars, flat bars, square bars, and hex bars. They also offer pipe fittings, flanges, fasteners, and custom fabricated components in standard and custom specifications."
                    }
                    },
                    {
                    "@type": "Question",
                    "name": "What are the common applications of EN D2 tool steel?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "EN D2 steel is used in cold work tooling like dies, punches, blanking tools, shear blades, and cutting tools. It’s also common in industrial knives, mold making, and wear-resistant parts such as shafts and rollers."
                    }
                    },
                    {
                    "@type": "Question",
                    "name": "Why choose MOKSH TUBES & FITTINGS LLP for D2 steel materials?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "MOKSH TUBES & FITTINGS LLP is a trusted manufacturer and exporter of EN D2 steel with large stock availability. They provide precision cutting, heat-treatment guidance, and custom processing, ensuring quality, performance, and timely delivery."
                    }
                    }
                ]
                }

            @endverbatim
    </script>
@endsection
