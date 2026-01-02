@extends('layouts.master')

@section('title', 'Incoloy 800H and 800HT | Enhanced Heat-Resistant Alloy')
@section('meta_description',
    'With superior creep and rupture strength, Incoloy 800H and 800HT thrives in petrochemical,
    heat treatment, and power generation applications.')
@section('meta_keywords',
    'Incoloy 800H, Incoloy 800HT, Incoloy 800H Pipes, Incoloy 800HT Pipes, Incoloy 800H Tubes,
    Incoloy 800HT Tubes, Incoloy 800H Fittings, Incoloy 800HT Fittings, Heat Resistant Incoloy 800H, Heat Resistant Incoloy
    800HT, High Temperature Incoloy 800H, High Temperature Incoloy 800HT, Creep Resistant Incoloy 800H, Creep Resistant
    Incoloy 800HT, Petrochemical Incoloy 800H, Power Generation Incoloy 800HT')
@section('og_image', asset('assets/images/incoloy/incoloy-800h_800ht.webp'))
@section('og_type', 'article')
@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/incoloy/incoloy-800h_800ht.webp)">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Incoloy 800H / 800HT <br> High Strength & Heat Resistance</h1>
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
                Introduction To Incoloy 800H / 800HT / UNS N08810 /N08811</h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/incoloy/incoloy-800h_800ht.webp') }}" alt="incoloy-800h_800ht"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> INCOLOY 800H and 800HT</strong> are high-performance alloys designed
                            for superior strength and corrosion resistance in high-temperature environments. These alloys
                            are modifications of <a href="{{ route('materials.incoloy') }}">INCOLOY 800</a>, specifically
                            developed to improve creep and stress rupture
                            properties at elevated temperatures.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">INCOLOY 800H</strong class="text-black"> (UNS N08810) and<strong
                                class="text-black"> 800HT</strong> (UNS
                            N08811) offer excellent resistance to oxidation, carburization, and sulfidation. Their enhanced
                            mechanical properties make them ideal for structural components exposed to long-term high-heat
                            conditions. With controlled carbon, <a
                                href="{{ route('materials.aluminium-Alloys') }}">aluminum</a>, and <a
                                href="{{ route('materials.titanium') }}">titanium</a> contents, these
                            alloys maintain their
                            strength and metallurgical stability even above 600°C (1110°F), making them a top choice in
                            heat-treating, petrochemical, and power generation sectors.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Incoloy 800H 800HT Datasheet</h3>
            <p class="mb-3">
                Get the complete Incoloy 800H 800HT datasheet with chemical composition,
                mechanical properties, heat treatment details, and applications.
                Enter your email to receive the PDF instantly.
            </p>

            <!-- Lead Capture Form -->
            <form id="leadForm" method="POST" action="{{ route('lead.capture') }}" class="mb-3">
                @csrf
                <div class="row justify-content-center">
                    <input type="hidden" name="pdf" value="incoloy_800h_800ht.pdf">
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
                                    <th>INCOLOY 800H</th>
                                    <th>INCOLOY 800HT</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Nickel</td>
                                    <td>30.0 – 35.0</td>
                                    <td>30.0 – 35.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium</td>
                                    <td>19.0 – 23.0</td>
                                    <td>19.0 – 23.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron</td>
                                    <td>39.5 min</td>
                                    <td>39.5 min</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon</td>
                                    <td>0.05 – 0.10</td>
                                    <td>0.06 – 0.10</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Aluminum</td>
                                    <td>0.15 – 0.60</td>
                                    <td>0.25 – 0.60</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Titanium</td>
                                    <td>0.15 – 0.60</td>
                                    <td>0.25 – 0.60</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Al + Ti</td>
                                    <td>0.30 – 1.20</td>
                                    <td>0.85 – 1.20</td>
                                </tr>
                                <tr class="t-row">
                                    <td>ASTM Grain Size</td>
                                    <td>5 or coarser</td>
                                    <td>5 or coarser</td>
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
                                    <td>0.287 lb/in³</td>
                                    <td>7.94 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Range</td>
                                    <td>2475–2525 °F</td>
                                    <td>1357–1385 °C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Specific Heat (32–212°F / 0–100°C)</td>
                                    <td>0.11 Btu/lb·°F</td>
                                    <td>460 J/kg·°C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Magnetic Permeability at 200 oersteds (15.9 kA/m)</td>
                                    <td>1.014 (Annealed)</td>
                                    <td>1.009 (Hot-Rolled)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Curie Temperature</td>
                                    <td>–175 °F</td>
                                    <td>–115 °C</td>
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
                                    <th>80°F (27°C)</th>
                                    <th>800°F (425°C)</th>
                                    <th>1000°F (540°C)</th>
                                    <th>1200°F (650°C)</th>
                                    <th>1300°F (705°C)</th>
                                    <th>1400°F (760°C)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Tensile Strength (ksi / MPa)</td>
                                    <td>140 / 965</td>
                                    <td>140 / 965</td>
                                    <td>140 / 965</td>
                                    <td>140 / 965</td>
                                    <td>99.3 / 685</td>
                                    <td>167.3 / 1154</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (0.2% Offset), ksi</td>
                                    <td>126</td>
                                    <td>–</td>
                                    <td>90</td>
                                    <td>84</td>
                                    <td>82</td>
                                    <td>74</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (0.2% Offset), MPa</td>
                                    <td>868</td>
                                    <td>–</td>
                                    <td>621</td>
                                    <td>579</td>
                                    <td>565</td>
                                    <td>510</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tensile Strength, ksi</td>
                                    <td>77.8</td>
                                    <td>67.5</td>
                                    <td>62.7</td>
                                    <td>54.8</td>
                                    <td>47.7</td>
                                    <td>34.2</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tensile Strength, MPa</td>
                                    <td>536</td>
                                    <td>465</td>
                                    <td>432</td>
                                    <td>378</td>
                                    <td>329</td>
                                    <td>236</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Hardness, BHN</td>
                                    <td>150</td>
                                    <td>130</td>
                                    <td>90</td>
                                    <td>93</td>
                                    <td>109</td>
                                    <td>90</td>
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
                <h2>Products in Incoloy 800H / 800HT</h2>
            </div>

            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Incoloy 800H / 800HT</strong>, are high-performance, high-temperature
                        austenitic alloys designed for exceptional structural stability and oxidation resistance in
                        demanding environments. These alloys, known for their superior creep and stress rupture strength,
                        are widely used in industries such as petrochemical processing, power generation, and heat
                        treatment. Supplied in a wide variety of product forms, INCOLOY® 800H/800HT meets numerous
                        international standards and specifications, making them suitable for critical applications in
                        extreme service conditions.
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


    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Uses and Advantages</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Excellent strength and creep resistance at elevated temperatures</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Outstanding resistance to oxidation, carburization, and sulfidation</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Stable metallurgy and corrosion resistance in high-temperature chemical exposure</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Good weldability and formability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Long service life in extreme industrial environments</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of INCOLOY 800H / 800HT</h2>
                <p class="text-center pb-3"><strong class="text-dark">INCOLOY 800H / 800HT</strong> is a high-temperature
                    alloy widely used across industries where long-term strength, metallurgical stability, and resistance to
                    oxidation and carburization are critical. Designed for elevated-temperature service, these alloys are
                    ideal for structural and pressure-bound components exposed to prolonged thermal exposure and corrosive
                    gases.
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Heat Treatment Industry</h5>
                        <p>Used in trays, muffles, baskets, retorts, radiant tubes, and other furnace components that
                            operate under constant thermal cycling and oxidizing environments.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Oil & Gas Industry</h5>
                        <p>Downhole tubing, wellhead components, hangers, valves, and other sour gas service equipment</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Petrochemical and Refining Sector</h5>
                        <p>Ideal for ethylene furnace tubes, reformer outlets, steam headers, and heat exchanger tubing in
                            high-temperature, high-pressure processing systems where carburization and scaling resistance
                            are essential.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Power Generation Plants</h5>
                        <p>Deployed in superheaters, reheaters, and boiler components subjected to high pressure and
                            temperature. Their ability to retain strength at elevated temperatures makes them reliable in
                            critical steam and thermal circuits.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Chemical Processing Industry</h5>
                        <p>Suitable for use in reactors, pressure vessels, transfer piping, and manifolds exposed to
                            nitridation, oxidation, and sulfur-rich environments.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Industrial Furnaces and Thermal Processing Equipment</h5>
                        <p>Perfect for structural parts in kilns, combustion systems, and thermal oxidizers due to their
                            excellent high-temperature creep resistance and dimensional stability.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-capsule"></i></div>
                        <h5>Nuclear Applications</h5>
                        <p>Trusted for internal components and structural supports in nuclear reactors where high thermal
                            resistance and mechanical integrity over extended periods are mandatory.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-capsule"></i></div>
                        <h5>Automotive and Engineered Systems</h5>
                        <p>Used in EGR systems, turbocharger housings, and exhaust manifolds in high-performance engines and
                            emission control systems requiring thermal fatigue resistance.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-capsule"></i></div>
                        <h5>Gas Turbine and Aerospace Systems</h5>
                        <p>Applied in combustion liners and transition ducts that endure oxidizing, high-temperature exhaust
                            streams</p>
                    </div>
                </div>
                <div class="row mt-4 mb-4" style="text-align: justify;">
                    <div class="col-lg-10">
                        <p class="">
                            <strong class="text-dark">INCOLOY 800H / 800HT’s </strong>stands out as a go-to material where
                            long-term performance under heat, stress, and corrosive gases is non-negotiable. It delivers
                            unmatched reliability in systems where dimensional stability and high-temperature strength are
                            key.
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
                        <h5>Specialists in high-temperature nickel alloys</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Extensive inventory of INCOLOY® 800H/800HT in various forms</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Fast delivery and global shipping capabilities</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>ISO and ASTM-compliant sourcing and processing</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Proven reliability for critical engineering applications</h5>
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
                                <h4>What are Incoloy 800H and 800HT alloys?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Incoloy 800H (UNS N08810) and Incoloy 800HT (UNS N08811) are high-performance
                                    nickel iron chromium alloys specifically developed to enhance creep strength and stress
                                    rupture resistance in high-temperature environments. They are modified versions of
                                    Incoloy 800, engineered with controlled carbon, aluminum, and titanium levels to deliver
                                    excellent metallurgical stability and long-term strength above 600°C, making them ideal
                                    for extreme industrial applications.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the key properties of Incoloy 800H and 800HT?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Both Incoloy 800H and 800HT offer excellent resistance to oxidation, carburization, and
                                    sulfidation under prolonged exposure to elevated temperatures. These alloys provide
                                    superior creep resistance, reliable structural integrity, and stable mechanical
                                    properties in aggressive chemical and thermal environments. Their good weldability and
                                    formability further increase their suitability for demanding high-temperature
                                    applications.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Where are Incoloy 800H and 800HT commonly used?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Incoloy 800H and 800HT are widely used across industries requiring long-term strength
                                    and corrosion resistance at elevated temperatures. Typical applications include heat
                                    treatment equipment, petrochemical furnaces, reformer tubes, superheaters, boiler
                                    components, nuclear reactor supports, chemical processing plants, industrial kilns, gas
                                    turbines, and aerospace combustion systems. Their durability makes them a preferred
                                    choice for critical service conditions.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What product forms are available in Incoloy 800H and 800HT?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP supplies Incoloy 800H and 800HT in a wide variety of product
                                    forms, including seamless and welded pipes, tubes, sheets, plates, coils, bars, pipe
                                    fittings, flanges, fasteners, and custom-fabricated components. All products are
                                    manufactured to international standards such as ASTM and ASME, ensuring quality,
                                    consistency, and performance in high-pressure, high temperature systems.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose MOKSH TUBES & FITTINGS LLP for Incoloy 800H and 800HT materials?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP is a trusted manufacturer, supplier, and exporter of Incoloy
                                    800H and 800HT products, offering ISO and ASTM-compliant materials across global
                                    markets. With extensive inventory, fast delivery, and customized solutions, the company
                                    ensures top quality products tailored to critical engineering applications. Its
                                    expertise in high performance nickel alloys, combined with strong customer support,
                                    makes it the preferred choice for industries worldwide.
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
                    <strong>Moksh Tubes & Fittings LLP</strong> Your trusted partner in high-performance alloy solutions.
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
                "name": "What are Incoloy 800H and 800HT alloys?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Incoloy 800H (UNS N08810) and Incoloy 800HT (UNS N08811) are high-performance nickel iron chromium alloys specifically developed to enhance creep strength and stress rupture resistance in high-temperature environments. They are modified versions of Incoloy 800, engineered with controlled carbon, aluminum, and titanium levels to deliver excellent metallurgical stability and long-term strength above 600°C, making them ideal for extreme industrial applications."
                }
                },
                {
                "@type": "Question",
                "name": "What are the key properties of Incoloy 800H and 800HT?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Both Incoloy 800H and 800HT offer excellent resistance to oxidation, carburization, and sulfidation under prolonged exposure to elevated temperatures. These alloys provide superior creep resistance, reliable structural integrity, and stable mechanical properties in aggressive chemical and thermal environments. Their good weldability and formability further increase their suitability for demanding high-temperature applications."
                }
                },
                {
                "@type": "Question",
                "name": "Where are Incoloy 800H and 800HT commonly used?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Incoloy 800H and 800HT are widely used across industries requiring long-term strength and corrosion resistance at elevated temperatures. Typical applications include heat treatment equipment, petrochemical furnaces, reformer tubes, superheaters, boiler components, nuclear reactor supports, chemical processing plants, industrial kilns, gas turbines, and aerospace combustion systems. Their durability makes them a preferred choice for critical service conditions."
                }
                },
                {
                "@type": "Question",
                "name": "What product forms are available in Incoloy 800H and 800HT?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "MOKSH TUBES & FITTINGS LLP supplies Incoloy 800H and 800HT in a wide variety of product forms, including seamless and welded pipes, tubes, sheets, plates, coils, bars, pipe fittings, flanges, fasteners, and custom-fabricated components. All products are manufactured to international standards such as ASTM and ASME, ensuring quality, consistency, and performance in high-pressure, high temperature systems."
                }
                },
                {
                "@type": "Question",
                "name": "Why choose MOKSH TUBES & FITTINGS LLP for Incoloy 800H and 800HT materials?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "MOKSH TUBES & FITTINGS LLP is a trusted manufacturer, supplier, and exporter of Incoloy 800H and 800HT products, offering ISO and ASTM-compliant materials across global markets. With extensive inventory, fast delivery, and customized solutions, the company ensures top quality products tailored to critical engineering applications. Its expertise in high performance nickel alloys, combined with strong customer support, makes it the preferred choice for industries worldwide."
                }
                }
            ]
            }

        @endverbatim
    </script>
@endsection
