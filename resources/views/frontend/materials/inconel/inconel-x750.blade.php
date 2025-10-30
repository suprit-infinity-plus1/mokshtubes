@extends('layouts.master')

@section('title', 'Inconel X-750 – Extreme Heat & Oxidation Alloy') <!-- 53 chars -->
@section('meta_description', 'Inconel X-750 maintains strength and stability in extreme heat—ideal for springs, fasteners, and high-performance gas turbines.')
@section('meta_keywords', 'Inconel X-750, Extreme Heat Alloys, Oxidation Resistant Alloys, High Temperature Alloys, Nickel Alloys, Corrosion Resistant Alloys, Inconel Springs, Inconel Fasteners, High-Performance Gas Turbine Alloys')

@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Inconel X-750 <br> High-Strength & Heat Resistant Alloy</h1>
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
                Introduction To Inconel X-750 / Alloy X-750 / UNS N07750 </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/inconel/Inconel-X 750.webp') }}" alt="Inconel X-750"
                        class="img-fluid rounded shadow-sm">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a leading manufacturer,
                            supplier, exporter, importer, and stockist of<strong class="text-black"> INCONEL X-750</strong>
                            (UNS N07750) products in a wide
                            range of forms including <a href="{{ route('products.pipes-tubes') }}">Pipes & Tubes</a>, Pipe
                            Fittings, Flanges, Fasteners, Sheets & Plates,
                            Coils, Wires, Round Bars, Flat Bars, Angles, Channels, Welding Rods, Wire Mesh, and
                            custom-engineered components.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">INCONEL X-750</strong> is a precipitation-hardenable nickel-chromium
                            <a href="{{ route('materials.hastelloy') }}">alloy</a> made for high-strength applications at elevated temperatures. This alloy is strengthened
                            by additions of <a href="{{ route('materials.aluminium-Alloys') }}">aluminum</a> and <a
                                href="{{ route('materials.titanium') }}">titanium</a>
                            and demonstrates exceptional resistance to relaxation and
                            oxidation at high temperatures. It maintains excellent mechanical properties from cryogenic
                            temperatures up to 1300°F (704°C) and provides outstanding resistance to creep rupture,
                            stress
                            corrosion cracking, and other high-temperature forms of degradation.<strong class="text-black">
                                INCONEL X-750</strong> is widely
                            used in aerospace, nuclear, gas turbine, and industrial heat treating applications.
                        </p>
                    </div>
                </div>
            </div>
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
                                    <td>≥70.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium</td>
                                    <td>14.0 – 17.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron</td>
                                    <td>5.0 – 9.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Titanium</td>
                                    <td>2.25 – 2.75</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Aluminum</td>
                                    <td>0.4 – 1.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Niobium + Tantalum</td>
                                    <td>0.7 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese</td>
                                    <td>1.0 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon</td>
                                    <td>0.5 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Copper</td>
                                    <td>0.5 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Cobalt</td>
                                    <td>1.0 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon</td>
                                    <td>0.08 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sulfur</td>
                                    <td>0.01 max</td>
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
                                    <td>0.299 lb/in³</td>
                                    <td>8.28 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Range</td>
                                    <td>2540–2600 °F</td>
                                    <td>1393–1427 °C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Curie Temperature (As Hot-Rolled)</td>
                                    <td>-225 °F</td>
                                    <td>-</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Curie Temperature (Triple Heat Treated)</td>
                                    <td>-193 °F</td>
                                    <td>-</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Emissivity of Oxidized Surface</td>
                                    <td>At 600°F</td>
                                    <td>0.895</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Linear Contraction During Precipitation Treatment</td>
                                    <td>Hot-Rolled (1300°F, 20 hr)</td>
                                    <td>0.00044 in/in</td>
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
                                    <th>Solution Treated & Aged</th>
                                    <th>Cold Worked & Aged</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Yield Strength (ksi / MPa)</td>
                                    <td>70 ksi (483 MPa)</td>
                                    <td>100–160 ksi (690–1103 MPa)</td>
                                    <td>140–180 ksi (965–1241 MPa)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tensile Strength</td>
                                    <td>110 ksi (758 MPa)</td>
                                    <td>130–180 ksi (896–1241 MPa)</td>
                                    <td>150–200 ksi (1035–1379 MPa)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elongation (%)</td>
                                    <td>20–25%</td>
                                    <td>10–20%</td>
                                    <td>8–15%</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Reduction of Area (%)</td>
                                    <td>—</td>
                                    <td>—</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Hardness (Rockwell C)</td>
                                    <td>30–35 RC</td>
                                    <td>35–40 RC</td>
                                    <td>40–45 RC</td>
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
                'image' => 'assets/images/all product/seamless-pipes-10.jpg',
            ],

            [
                'name' => 'Welded Pipes (ERW & EFW)',
                'route' => 'products.pipes-tubes.welded-pipes',
                'image' => 'assets/images/all product/welded-pipes-tubes-1.jpg',
            ],
            [
                'name' => 'Tubes (Capillary, U-Bend)',
                'route' => 'products.pipes-tubes.u-bent-tubes',
                'image' => 'assets/images/all product/11zon_resized.jpg',
            ],
            [
                'name' => 'Sheets & Plates',
                'route' => 'products.sheets-plates-coils.sheets-and-plates',
                'image' => 'assets/images/all product/sheets-plates.jpg',
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
                'image' => 'assets/images/all product/FASTENERS-1.png',
            ],
            [
                'name' => 'Custom Fabricated Components',
                'route' => 'products.pipe-fittings-flanges-fasteners.custom-fabricated-fittings',
                'image' => 'assets/images/all product/custom-metal-fabricated.jpg',
            ],
        ];
    @endphp

    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Products in Inconel X-750</h2>
            </div>

            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">INCONEL X-750 </strong>designated as UNS N07750 and Werkstoff Number
                        2.4669, meets the requirements of NACE MR-01-75. This versatile alloy is available in a variety of
                        product forms, including:
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
                        <h5>High strength and stress rupture resistance at elevated temperatures</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Excellent relaxation resistance in spring-type and bolting applications</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Superior oxidation and scaling resistance in hot environments</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Good resistance to chloride-ion stress-corrosion cracking
                        </h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Highly reliable in thermally cycling conditions</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Inconel 617</h2>
                <p class="text-center pb-3"><strong class="text-dark">Inconel X-750</strong> is a precipitation-hardenable
                    nickel-chromium alloy made for strength and stability at high temperatures. It offers excellent
                    oxidation and corrosion resistance combined with exceptional creep and rupture strength, making it a
                    go-to material for demanding environments where both heat and mechanical stress are factors.
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Aerospace and Jet Engine Components</h5>
                        <p>Used in turbine blades, seals, rotor bolts, thrust reversers, exhaust components, and afterburner
                            parts. INCONEL X-750 provides outstanding creep resistance and dimensional stability at
                            operating temperatures exceeding 700°C (1300°F).
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Nuclear Reactors</h5>
                        <p>Ideal for nuclear fuel rod spacers, core components, spring clips, and fasteners. It exhibits
                            excellent radiation resistance, corrosion tolerance, and maintains mechanical properties under
                            neutron bombardment.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Petrochemical and Refining Plants</h5>
                        <p>Relied upon in reformers, flare tips, catalyst grids, and furnace internals where high heat and
                            aggressive chemical exposure are present. Its resistance to oxidizing and reducing atmospheres
                            helps prolong equipment life.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Gas Turbines and Power Generation</h5>
                        <p>Deployed in combustion cans, nozzle guide vanes, and structural parts that operate in
                            high-temperature gas environments, including both industrial and aircraft turbine engines.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Industrial Furnaces and Thermal Processing</h5>
                        <p>Used in heat-treating fixtures, furnace parts, brackets, hangers, and tooling that experience
                            prolonged thermal exposure and cycling.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Springs and High-Temperature Fasteners</h5>
                        <p>INCONEL X-750 is commonly chosen for coil springs, wave washers, and bolting that must maintain
                            load-bearing capability under both high temperatures and corrosive conditions.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-capsule"></i></div>
                        <h5>Chemical and Petrochemical Equipment</h5>
                        <p>Trusted for valves, heat exchangers, seals, and reactor parts exposed to aggressive fluids and
                            elevated temperatures where strength and corrosion resistance are both essential.</p>
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
                        <h5>In-depth expertise in heat- and corrosion-resistant nickel alloys</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Global stockist network with timely delivery</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Custom solutions tailored to demanding engineering specs</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>ISO-compliant manufacturing and material testing protocols</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Dedicated customer service for technical and logistical support</h5>
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
                                <h4>What is Inconel X-750 and what makes it unique?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Inconel X-750 (UNS N07750) is a precipitation hardenable nickel chromium alloy
                                    strengthened with titanium and aluminum, designed for high temperature and high stress
                                    environments. It provides outstanding resistance to oxidation, stress corrosion
                                    cracking, and relaxation, while maintaining excellent mechanical properties from
                                    cryogenic temperatures up to 1300°F (704°C).
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What types of Inconel X-750 products are available at Moksh Tubes & Fittings LLP?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Moksh Tubes & Fittings LLP manufactures and supplies Inconel X-750 in multiple product
                                    forms, including seamless and welded pipes, tubes, sheets, plates, coils, round bars,
                                    flat bars, pipe fittings, flanges, fasteners, welding rods, wire mesh, and
                                    custom-engineered components, all meeting international quality standards.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Which industries commonly use Inconel X-750?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Inconel X-750 is widely used in aerospace, nuclear power, petrochemical plants, gas
                                    turbines, and industrial furnace applications. Its ability to withstand high stress,
                                    thermal cycling, and corrosive environments makes it a preferred material for turbine
                                    blades, nuclear reactor components, fasteners, springs, heat exchangers, and chemical
                                    processing equipment.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why is Inconel X-750 preferred over other high-temperature alloys?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    The advantage of Inconel X-750 lies in its excellent combination of high strength, creep
                                    resistance, and oxidation protection at elevated temperatures. Unlike many alloys, it
                                    maintains stability under prolonged thermal exposure, prevents relaxation in spring
                                    applications, and resists scaling, making it ideal for mission critical and long service
                                    applications.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why should customers choose Moksh Tubes & Fittings LLP for Inconel X-750 products?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Moksh Tubes & Fittings LLP is a trusted manufacturer and global supplier with unmatched
                                    expertise in high performance nickel alloys. The company provides ISO certified quality,
                                    a wide stock range, customized solutions, and strict adherence to international
                                    standards, ensuring reliable and timely delivery of Inconel X-750 products worldwide.
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
                    <strong>Moksh Tubes & Fittings LLP</strong> your reliable partner for INCONEL X-750 products engineered
                    for durability and performance in the world’s harshest operating conditions.
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
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "What is Inconel X-750 and what makes it unique?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Inconel X-750 (UNS N07750) is a precipitation-hardenable nickel-chromium alloy strengthened with titanium and aluminum. It offers exceptional resistance to oxidation, stress corrosion cracking, and relaxation, while maintaining high strength and stability from cryogenic temperatures up to 1300°F (704°C)."
            }
        },
        {
            "@type": "Question",
            "name": "What types of Inconel X-750 products are available at Moksh Tubes & Fittings LLP?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Moksh Tubes & Fittings LLP manufactures and supplies Inconel X-750 in seamless and welded pipes, tubes, sheets, plates, coils, bars, fittings, flanges, fasteners, wire mesh, welding rods, and custom-engineered components, all compliant with international quality standards."
            }
        },
        {
            "@type": "Question",
            "name": "Which industries commonly use Inconel X-750?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Inconel X-750 is used in aerospace, nuclear power, petrochemical, gas turbine, and furnace industries. Its resistance to high stress, corrosion, and thermal cycling makes it ideal for turbine blades, reactor components, springs, heat exchangers, and chemical processing equipment."
            }
        },
        {
            "@type": "Question",
            "name": "Why is Inconel X-750 preferred over other high-temperature alloys?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Inconel X-750 provides an excellent combination of strength, creep resistance, and oxidation protection at elevated temperatures. It remains stable during long thermal exposure, resists relaxation in springs, and prevents scaling, making it ideal for demanding, long-life applications."
            }
        },
        {
            "@type": "Question",
            "name": "Why should customers choose Moksh Tubes & Fittings LLP for Inconel X-750 products?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Moksh Tubes & Fittings LLP is a certified global supplier of high-performance nickel alloys, offering ISO-quality assurance, wide product availability, customized solutions, and on-time worldwide delivery of Inconel X-750 products."
            }
        }
    ]
}
</script>
@endverbatim
@endsection
