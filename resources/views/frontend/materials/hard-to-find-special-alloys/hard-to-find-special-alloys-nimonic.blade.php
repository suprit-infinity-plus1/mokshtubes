@extends('layouts.master')

@section('title', 'Nimonic Alloys | High-Temp Strength & Durability')
@section('meta_description',
    'Nimonic alloys – high-temperature, creep-resistant, and durable for aerospace, turbines,
    power generation, and extreme industrial environments.')
@section('meta_keywords',
    'Nimonic alloy, high temperature alloy, creep resistant alloy, aerospace alloy, turbine alloy,
    power generation alloy, durable high strength alloy')
@section('og_image',
    asset('assets/images/hard-to-find-and-special-alloys/hard-to-find-and-special-alloys-nimonic.webp'))
@section('og_type', 'article')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area"
        style="background-image: url(/assets/images/hard-to-find-and-special-alloys/hard-to-find-and-special-alloys-nimonic.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Nimonic Alloys for High-Temperature Strength</h1>
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
                Introduction To Nimonic Alloys
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/hard-to-find-and-special-alloys/hard-to-find-and-special-alloys-nimonic.webp') }}"
                        alt="Nimonic Alloys" class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a leading supplier, stockist,
                            and exporter of high-performance<strong class="text-black"> Nimonic Alloys,</strong> known for
                            their exceptional resistance to heat,
                            oxidation, and corrosion. These nickel-chromium-based superalloys are engineered for extreme
                            temperature applications where mechanical strength and structural stability are vital—especially
                            in aerospace, gas turbines, nuclear reactors, and high-stress environments.
                        </p>
                        <p> <strong class="text-black"><a
                                    href="{{ route('materials.hard-To-Find-Special-Alloys') }}">Nimonic
                                    Alloys</a></strong> are primarily composed of Nickel (Ni) and
                            Chromium (Cr), often combined with Titanium (Ti) and Aluminum (Al) for precipitation hardening.
                            Popular grades include Nimonic 75, 80A, 90, 105, 263, and others—each suited to specific
                            mechanical and thermal requirements.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Nimonic Alloys Datasheet</h3>
            <p class="mb-3">
                Get the complete Nimonic Alloys datasheet with chemical composition,
                mechanical properties, heat treatment details, and applications.
                Enter your email to receive the PDF instantly.
            </p>

            <!-- Lead Capture Form -->
            <form id="leadForm" method="POST" action="https://mokshtubes.com/datasheet-leads-capture" class="mb-3">
                <input type="hidden" name="_token" value="WNVWvpO4YR2OqZaIJDl2mE3UfyreGys3Vp19brsc" autocomplete="off">
                <div class="row justify-content-center">
                    <input type="hidden" name="pdf" value="haynes-242.pdf">
                    <div class="col-md-6 mb-2">
                        <input type="email" name="email" required="" class="form-control p-3"
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
                                    <th>Anti-NIMONIC 75</th>
                                    <th>Anti-NIMONIC 80A</th>
                                    <th>Anti-NIMONIC 90</th>
                                    <th>Anti-NIMONIC 105</th>
                                    <th>Anti-NIMONIC 263</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Nickel</td>
                                    <td>≤ 20%</td>
                                    <td>≤ 30%</td>
                                    <td>≤ 30%</td>
                                    <td>≤ 30%</td>
                                    <td>≤ 20%</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium</td>
                                    <td>≤ 3%</td>
                                    <td>≤ 3%</td>
                                    <td>≤ 3%</td>
                                    <td>≤ 5%</td>
                                    <td>≤ 3%</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Cobalt</td>
                                    <td>Present</td>
                                    <td>≥ 2.5%</td>
                                    <td>≤ 5%</td>
                                    <td>≤ 5%</td>
                                    <td>≤ 5%</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Titanium</td>
                                    <td>≥ 0.6%</td>
                                    <td>≥ 0.5%</td>
                                    <td>≥ 0.5%</td>
                                    <td>≥ 0.5%</td>
                                    <td>≥ 0.5%</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Aluminum</td>
                                    <td>≥ 0.6%</td>
                                    <td>≥ 0.5%</td>
                                    <td>≥ 0.5%</td>
                                    <td>≥ 0.5%</td>
                                    <td>≥ 0.1.0%</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Molybdenum</td>
                                    <td>Present</td>
                                    <td>Present</td>
                                    <td>Present</td>
                                    <td>≤ 1.0%</td>
                                    <td>≤ 1.0%</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron</td>
                                    <td>≥ 10%</td>
                                    <td>≥ 5.0%</td>
                                    <td>≥ 5.0%</td>
                                    <td>≥ 5.0%</td>
                                    <td>≥ 2.0%</td>
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
                                    <td>0.30 lb/in³</td>
                                    <td>8.2 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Range</td>
                                    <td>2500 – 2650 °F</td>
                                    <td>1370 – 1460 °C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Modulus of Elasticity – Tension</td>
                                    <td>28.0 × 10³ ksi</td>
                                    <td>193 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Modulus of Elasticity – Compression</td>
                                    <td>28.0 × 10³ ksii</td>
                                    <td>193 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Modulus of Elasticity – Torsion</td>
                                    <td>10.0 × 10³ ksi</td>
                                    <td>193 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Poisson’s Ratio</td>
                                    <td>0.30</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Curie Temperature</td>
                                    <td>1040 °F</td>
                                    <td>560 °C</td>
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
                                    <th>Cold Worked</th>
                                    <th>Hot-Rolled</th>
                                    <th>Sheet</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Tensile Strength (ksi / MPa)</td>
                                    <td>90–120 / 620–830</td>
                                    <td>130–170 / 896–1172</td>
                                    <td>150–200 / 1034–1379</td>
                                    <td>100–140 / 690–965</td>
                                    <td>90–130 / 620–896</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (0.2%) (ksi / MPa)</td>
                                    <td>60–90 / 414–620</td>
                                    <td>110–150 / 758–1034</td>
                                    <td>140–180 / 965–1240</td>
                                    <td>70–110 / 483–758</td>
                                    <td>60–90 / 414–620</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elongation (%)</td>
                                    <td>15–30</td>
                                    <td>8–15</td>
                                    <td>5–10</td>
                                    <td>15–25</td>
                                    <td>20–30</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Rockwell Hardness (B / C)</td>
                                    <td>60–70 B</td>
                                    <td>80–90 B</td>
                                    <td>90–95 B</td>
                                    <td>70–80 B</td>
                                    <td>65–75 B</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Brinell Hardness (HB)</td>
                                    <td>180–220</td>
                                    <td>250–300</td>
                                    <td>300–350</td>
                                    <td>200–250</td>
                                    <td>180–220</td>
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
                <h2>Products in Nimonic Alloys</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Nimonic Alloys</strong> is commonly supplied as:
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
                        We supply Nimonic Alloys materials in accordance with the most stringent industry standards: </p>
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
                        <h5>Superior resistance to heat creep and fatigue</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Excellent oxidation and corrosion resistance at high temperatures</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>High strength-to-weight ratio</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Good weldability and workability (especially Nimonic 263)</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Long-term dimensional and structural stability</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Nimonic Alloys</h2>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Aerospace & Jet Engines</h5>
                        <p>Used in turbine blades, combustion chambers, and exhaust systems due to excellent heat
                            resistance.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Gas Turbines & Power Generation</h5>
                        <p>Nimonic components withstand long-term exposure to high temperatures and stress.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Nuclear Reactors</h5>
                        <p>Ideal for components exposed to neutron irradiation and extreme heat.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Automotive & Motorsport</h5>
                        <p>Applied in valves, manifolds, and turbocharger parts.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Industrial Heating</h5>
                        <p>Used in furnace parts, heat shields, and high-temp tooling.</p>
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
                        <h5>Wide inventory of Nimonic bars, tubes, wires, and forgings</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Custom fabrication and CNC machining available</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Global shipping with export compliance</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>ISO 9001:2015 certified quality assurance</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Fast turnaround and competitive pricing</h5>
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
                                <h4>What are Nimonic Alloys used for?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Nimonic Alloys are used in turbine blades, combustion chambers, exhaust systems, gas
                                    turbines, nuclear reactors, high performance automotive components, and industrial
                                    furnace parts requiring superior heat and corrosion resistance.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Which grades of Nimonic Alloys are available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Popular grades include Nimonic 75, 80A, 90, 105, and 263, each engineered for specific
                                    mechanical strength, thermal performance, and structural stability under extreme
                                    conditions.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the key properties of Nimonic Alloys?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Nimonic Alloys offer excellent heat creep resistance, oxidation and corrosion
                                    resistance, high strength to weight ratio, dimensional stability, and good weldability,
                                    especially in Nimonic 263.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>In what forms are Nimonic Alloys supplied?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    They are supplied as seamless and welded pipes, tubes, sheets, plates, coils, strips,
                                    round/flat/hex/square bars, pipe fittings, flanges, fasteners, and custom engineered
                                    components.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose MOKSH TUBES & FITTINGS for Nimonic Alloys?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    We provide ISO 9001:2015 certified Nimonic products with wide inventory availability,
                                    custom fabrication, CNC machining, fast turnaround, competitive pricing, and global
                                    shipping with export compliance.
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
                    Contact <strong>Moksh Tubes & Fittings LLP</strong> — for expert support, MTC-certified materials, and
                    custom solutions.
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
                    "name": "What are Nimonic Alloys used for?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Nimonic Alloys are used in turbine blades, combustion chambers, exhaust systems, gas turbines, nuclear reactors, high performance automotive components, and industrial furnace parts requiring superior heat and corrosion resistance."
                    }
                    },
                    {
                    "@type": "Question",
                    "name": "Which grades of Nimonic Alloys are available?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Popular grades include Nimonic 75, 80A, 90, 105, and 263, each engineered for specific mechanical strength, thermal performance, and structural stability under extreme conditions."
                    }
                    },
                    {
                    "@type": "Question",
                    "name": "What are the key properties of Nimonic Alloys?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Nimonic Alloys offer excellent heat creep resistance, oxidation and corrosion resistance, high strength to weight ratio, dimensional stability, and good weldability, especially in Nimonic 263."
                    }
                    },
                    {
                    "@type": "Question",
                    "name": "In what forms are Nimonic Alloys supplied?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "They are supplied as seamless and welded pipes, tubes, sheets, plates, coils, strips, round/flat/hex/square bars, pipe fittings, flanges, fasteners, and custom engineered components."
                    }
                    },
                    {
                    "@type": "Question",
                    "name": "Why choose MOKSH TUBES & FITTINGS for Nimonic Alloys?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "We provide ISO 9001:2015 certified Nimonic products with wide inventory availability, custom fabrication, CNC machining, fast turnaround, competitive pricing, and global shipping with export compliance."
                    }
                    }
                ]
                }

            @endverbatim
    </script>
@endsection
