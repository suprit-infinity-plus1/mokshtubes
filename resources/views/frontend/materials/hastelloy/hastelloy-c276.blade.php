@extends('layouts.master')

@section('title', 'Hastelloy C276 (UNS N10276) – Composition & Properties')
@section('meta_description',
    'Buy Hastelloy C276 (UNS N10276) – corrosion-resistant nickel alloy used in chemical, oil &
    gas, marine and industrial applications. Get composition, properties, datasheet & product forms.')
@section('meta_keywords',
    'Hastelloy C276, Corrosion Resistant Alloy, Nickel Alloy, Hastelloy C276 Pipes, Hastelloy C276
    Tubes, Hastelloy C276 Fittings, Industrial Corrosion Resistant Alloys, Durable Nickel Alloys, Chemical Processing
    Alloys, Marine Alloys')
@section('og_image', asset('assets/images/hastelloy/hastelloy-c276.webp'))
@section('og_type', 'article')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/hastelloy/hastelloy-c276.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Hastelloy C276 (UNS N10276)<br>Pipes, Tubes, Sheets, Plates & Bars</h1>

                    <!-- Add your extra content here -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Hastelloy C276 is a premium nickel-molybdenum-chromium alloy known for its exceptional corrosion
                        resistance in highly aggressive and extreme environments. Widely used in chemical processing,
                        offshore applications, pollution control, and high-temperature systems, Hastelloy C276 delivers
                        unmatched performance against pitting, crevice corrosion, and strong oxidizing media—making it one
                        of the most reliable materials for critical industrial operations.
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

            <h3 class="fw-semibold text-center mb-5" style="color: #db7227;">
                Introduction to Hastelloy C276 / Alloy C276 / UNS N10276
            </h3>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/hastelloy/hastelloy-c276.webp') }}" alt="Hastelloy C276"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black">Hastelloy C276 (UNS N10276)</strong> is a premium
                            nickel–chromium–molybdenum alloy widely used for its exceptional corrosion resistance in highly
                            aggressive chemical environments.
                            <a href="{{ route('index') }}">MOKSH TUBES & FITTINGS LLP</a> supplies high-quality Hastelloy
                            C276 products including
                            pipes, tubes, pipe fittings, flanges, fasteners, sheets, plates, coils, wires, round bars, and
                            custom-machined components.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black"><a href="{{ route('materials.hastelloy') }}">Hastelloy</a>
                                C276</strong> offers outstanding protection against pitting, crevice corrosion, and
                            stress-corrosion cracking, especially in chloride-rich or acidic media. Its robust nickel-Cr-Mo
                            composition makes it one of the most reliable corrosion-resistant alloys for extreme industrial
                            environments.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">Hastelloy C276</strong> delivers excellent weldability, high
                            ductility, and dependable performance under continuous chemical exposure and elevated
                            temperatures, making it ideal for industries handling highly corrosive substances.
                        </p>

                        <p class="fs-6 mb-4" style="text-align: justify;">
                            With a density of <strong>8.89 g/cm³</strong>—significantly higher than the <strong>7.85
                                g/cm³</strong> average density of carbon steel—<strong>Hastelloy C276</strong> provides
                            superior strength and long-term durability. These properties make <strong>C276 material</strong>
                            a preferred choice for applications that demand extreme corrosion resistance and mechanical
                            reliability.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Hastelloy C276 Datasheet</h3>
            <p class="mb-3">
                Get the complete Hastelloy C276 datasheet with chemical composition,
                mechanical properties, heat treatment details, and applications.
                Enter your email to receive the PDF instantly.
            </p>

            <!-- Lead Capture Form -->
            <form id="leadForm" method="POST" action="{{ route('lead.capture') }}" class="mb-3">
                @csrf
                <div class="row justify-content-center">
                    <input type="hidden" name="pdf" value="haselloy_c276.pdf">
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
                <h2>Hastelloy C276 Chemical Composition</h2>
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
                                    <td>57 (Balance)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium</td>
                                    <td>16</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Molybdenum</td>
                                    <td>16</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron</td>
                                    <td>5</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tungsten</td>
                                    <td>4</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Cobalt</td>
                                    <td>2.5 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese</td>
                                    <td>1 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Vanadium</td>
                                    <td>0.35 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon</td>
                                    <td>0.08</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon</td>
                                    <td>0.01 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Copper</td>
                                    <td>0.5 max</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="fs-6 text-center mt-3">
                            The unique <strong>Hastelloy C276 chemical composition</strong> provides excellent resistance
                            against both
                            oxidizing and reducing agents. In comparison, <strong>mild steel density</strong> and
                            <strong>carbon steel density</strong> vary based on grade, often expressed as
                            <strong>density of steel in kg m3</strong>, <strong>density of steel g cm3</strong>, or even
                            <strong>density of steel lb ft3</strong>. By contrast, the <strong>Hastelloy
                                composition</strong> balances
                            Nickel, Chromium, and Molybdenum, which ensures superior performance where steels or other
                            alloys may fail.
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
                                    <td>8.89 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Point</td>
                                    <td>1370°C (2500°F)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tensile Strength</td>
                                    <td>115,000 psi / 790 MPa</td>
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
                    <h4 class="text-center mb-3" style="color: #db7227;">Mechanical Properties of Hastelloy C276</h4>
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
                                    <td>Tensile Strength (@ 538°C / 1000°F)</td>
                                    <td>601.2 MPa</td>
                                    <td>87,200 psi</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (0.2% offset @ 427°C / 801°F)</td>
                                    <td>204.8 MPa</td>
                                    <td>29,700 psi</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elastic Modulus (RT)</td>
                                    <td>205 GPa</td>
                                    <td>29,700 ksi</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elongation at Break (@ 204°C / 399°F)</td>
                                    <td>56%</td>
                                    <td>56%</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Hardness, Rockwell B (plate)</td>
                                    <td>87</td>
                                    <td>87</td>
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
                <h2>Products in Hastelloy C276</h2>
            </div>

            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">MOKSH TUBES & FITTINGS LLP</strong>, with its extensive experience in
                        nickel-chromium-molybdenum grades and huge network of sources, deals in a wide variety of <strong
                            class="text-dark">HASTELLOY C276</strong> products. These products have an extensive range of
                        applications, including Chemical Processing, Nuclear Power Plants, Pollution Control Projects, Pulp
                        & Paper, Oil & Gas, Flue Gas Desulphurization, Waste Water Treatment, and other associated
                        industries. They are exceptionally suited for extremely corrosive environments and high-temperature
                        conditions. Such harsh environments require materials that can maintain integrity, form, and
                        performance under severe chemical and thermal stress. <strong class="text-dark">HASTELLOY
                            C276</strong> effectively meets these challenges, making it a reliable choice for critical
                        applications where long-term durability and resistance to degradation are essential for client
                        success in their projects.
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
                        We offer Hastelloy C276 in a wide range of product forms, including:
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
                        <h5>Outstanding resistance to a wide range of aggressive chemicals</h5>
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
                        <h5>High mechanical strength and durability at elevated temperatures</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Excellent weldability and formability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Suitable for severe operating conditions in critical industries</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Hastelloy C276</h2>
                <p class="text-center pb-3"><strong class="text-dark">HASTELLOY C-276</strong> is widely used in
                    industries where exceptional corrosion resistance and mechanical strength are critical:
                </p>

            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Chemical Processing Industry</h5>
                        <p>Used in reactors, heat exchangers, scrubbers, columns, piping systems, evaporators, and storage
                            tanks handling acidic and chloride-laden fluids.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Pollution Control / FGD Systems</h5>
                        <p>Ideal for stack liners, ducts, dampers, scrubbers, and other components exposed to harsh acidic
                            gases and high temperatures.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Oil & Gas Sector</h5>
                        <p>Deployed in sour gas service components such as downhole tubing, wellhead equipment, valves,
                            manifolds, and separators.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Marine & Offshore Applications</h5>
                        <p>Suitable for seawater systems, condenser tubes, marine exhaust systems, and offshore structures
                            subjected to saltwater exposure.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Pulp and Paper Industry</h5>
                        <p>Utilized in digesters, bleach plants, and chemical recovery systems that require resistance to
                            chlorine-based chemicals and acidic solutions.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Nuclear & Power Generation</h5>
                        <p>For critical components exposed to high temperatures, corrosive media, and radiation in nuclear
                            and conventional power plants.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-capsule"></i></div>
                        <h5>Pharmaceutical & Food Processing</h5>
                        <p>Applied in systems requiring high corrosion resistance, hygiene standards, and compliance with
                            strict regulatory norms.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-recycle"></i></div>
                        <h5>Wastewater Treatment</h5>
                        <p>For tanks, piping, and equipment exposed to corrosive waste streams and aggressive chemical
                            cleaning agents.</p>
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
            <p class="text-center pb-3 my-4"><strong class="text-dark">Engineers often compare <strong>Hastelloy C22 vs
                        C276</strong> when selecting alloys for
                    demanding projects. While both are premium <strong>hastelloy materials</strong>,
                    <strong>Alloy C276</strong> delivers better performance in chloride-rich environments,
                    high-temperature exposure, and seawater applications. This makes it highly suitable for
                    <strong>Hastelloy C276 pipe</strong>, <strong>Hastelloy tubing</strong>,
                    <strong>Hastelloy C276 plate</strong>, and <strong>Hastelloy C276 round bar</strong>,
                    outperforming traditional options like <strong>carbon steel density</strong> and
                    <strong>ss density in kg m3</strong>.
            </p>

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
                        <h5>Specialists in manufacturing high-quality products</h5>
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
                                <h4>What is Hastelloy C-276 and why is it important?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Hastelloy C-276 (UNS N10276) is a nickel-chromium-molybdenum alloy with excellent
                                    resistance to strong oxidizers, reducing agents, and chloride-induced corrosion. Its low
                                    silicon and carbon content reduce welding challenges, while its superior resistance to
                                    pitting, crevice corrosion, and stress corrosion cracking makes it an ideal choice for
                                    industries operating in highly aggressive chemical and thermal environments.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>How does Hastelloy C-276 compare to steel in terms of density?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Traditional steels such as mild steel and carbon steel typically have a
                                    <strong>density of steel</strong> around <strong>7.85 g/cm³</strong>
                                    (<strong>density of steel in kg m3</strong> ≈ 7850). Variants like
                                    <strong>density of carbon steel lb/in3</strong> or
                                    <strong>density of steel per cubic inch</strong> are often used in engineering
                                    calculations.
                                    In comparison, <strong>Hastelloy C276 density</strong> is approximately
                                    <strong>8.89 g/cm³</strong>, making it heavier but far more resistant to corrosion,
                                    stress,
                                    and extreme temperatures than conventional steel grades.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Is Hastelloy C276 weldable?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Yes, Hastelloy C276 is weldable using standard welding techniques like TIG and MIG.
                                    However, low carbon content and controlled heat input are recommended to maintain its
                                    corrosion resistance.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What products are available in Hastelloy C-276 from MOKSH TUBES & FITTINGS LLP?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP manufactures and supplies a complete range of Hastelloy C-276
                                    products including seamless and welded pipes, tubes, sheets, plates, coils, bars, pipe
                                    fittings, flanges, fasteners, welding rods, wire mesh, and customized fabricated
                                    components. All products are made to international standards to deliver durability,
                                    precision, and long term reliability in corrosive environments.
                                </p>
                            </div>

                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose MOKSH TUBES & FITTINGS LLP for Hastelloy C-276 products?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP is a trusted manufacturer, supplier, exporter, importer, and
                                    stockist of high-quality Hastelloy C-276 products. With expertise in nickel-based
                                    alloys, a strong global supply network, advanced manufacturing capabilities, and a
                                    commitment to quality and customer satisfaction, the company delivers customized
                                    solutions and reliable materials for critical industrial requirements worldwide.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End faq content area-->

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

    <!-- Supplier / Price Info -->
    <section>
        <div class="container">
            <p class="text-center">
                Looking for reliable <strong>Hastelloy C276 suppliers</strong> or checking the
                <strong>Hastelloy C276 price per kg</strong> in India?
                <strong>Moksh Tubes & Fittings LLP</strong> offers competitive rates on
                <strong>Hastelloy C276 sheet</strong>, <strong>Hastelloy C276 plate</strong>,
                <strong>Hastelloy C276 pipe fittings</strong>, <strong>Hastelloy C276 fasteners</strong>,
                and <strong>Hastelloy C276 welding consumables</strong>. We also provide export-quality
                <strong>Hastelloy C276 round bar suppliers</strong> network for global clients.
            </p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="sec-padd-bottom">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Contact Us</h2>
                <p>
                    For any inquiries or to request a quote, reach out to <strong>Moksh Tubes & Fittings LLP</strong> – your
                    trusted partner for <strong>HASTELLOY C-276</strong> products.
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
                "name": "What is Hastelloy C-276 and why is it important?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Hastelloy C-276 (UNS N10276) is a nickel-chromium-molybdenum alloy with excellent resistance to strong oxidizers, reducing agents, and chloride-induced corrosion. Its low silicon and carbon content reduce welding challenges, while its superior resistance to pitting, crevice corrosion, and stress corrosion cracking makes it an ideal choice for industries operating in highly aggressive chemical and thermal environments."
                }
                },
                {
                "@type": "Question",
                "name": "How does Hastelloy C-276 compare to steel in terms of density?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Traditional steels such as mild steel and carbon steel typically have a density around 7.85 g/cm³ (7850 kg/m³). In comparison, Hastelloy C276 density is approximately 8.89 g/cm³, making it heavier but far more resistant to corrosion, stress, and extreme temperatures than conventional steel grades."
                }
                },
                {
                "@type": "Question",
                "name": "Is Hastelloy C276 weldable?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, Hastelloy C276 is weldable using standard welding techniques like TIG and MIG. However, low carbon content and controlled heat input are recommended to maintain its corrosion resistance."
                }
                },
                {
                "@type": "Question",
                "name": "What products are available in Hastelloy C-276 from MOKSH TUBES & FITTINGS LLP?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "MOKSH TUBES & FITTINGS LLP manufactures and supplies a complete range of Hastelloy C-276 products including seamless and welded pipes, tubes, sheets, plates, coils, bars, pipe fittings, flanges, fasteners, welding rods, wire mesh, and customized fabricated components. All products are made to international standards for durability and long-term reliability in corrosive environments."
                }
                },
                {
                "@type": "Question",
                "name": "Why choose MOKSH TUBES & FITTINGS LLP for Hastelloy C-276 products?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "MOKSH TUBES & FITTINGS LLP is a trusted manufacturer, supplier, exporter, importer, and stockist of high-quality Hastelloy C-276 products. With expertise in nickel-based alloys, a strong global supply network, advanced manufacturing capabilities, and a commitment to quality and customer satisfaction, the company delivers reliable materials for critical industrial requirements worldwide."
                }
                }
            ]
            }

        @endverbatim
    </script>
@endsection
