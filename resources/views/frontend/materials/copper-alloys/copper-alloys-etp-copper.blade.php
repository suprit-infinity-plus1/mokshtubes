@extends('layouts.master')

@section('title', 'Electrolytic Tough Pitch Copper | Industrial Grade Copper')
@section('meta_description', 'Electrolytic Tough Pitch Copper with excellent conductivity and mechanical properties for
    industrial use.')
@section('meta_keywords', 'Electrolytic Tough Pitch Copper, ETP Copper, industrial grade copper, high conductivity
    copper, mechanical properties copper, durable copper alloy')


@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Copper Alloys Electrolytic Tough Pitch <br>(ETP Copper)</h1>
                </div>
            </div>
        </div>
    </section>

    <!--End breadcrumb area-->
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Copper Alloys Electrolytic Tough Pitch | Product Overview</h2>
            </div>

            <h2 class="fw-semibold text-center mb-5" style="color: #db7227;">
                Introduction To Copper Alloys ETP Copper / C11000 / CW004A
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/copper-alloys/copper-alloys-etp-copper.webp') }}"alt="Copper Alloys EC Copper"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> proudly manufactures, supplies,
                            exports, imports, and stocks a comprehensive range of<strong class="text-black"> ETP Copper
                                (Electrolytic Tough Pitch
                                Copper) <a href="{{ route('products') }}">products</a></strong>. Our offerings include Pipes
                            & Tubes, Rods, Flats, Sheets & Plates, Coils,
                            Busbars, Wires, Strips, Foils, Fasteners, and Custom Fabricated Products in ETP Copper.

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black"><a href="{{ route('materials.copper-Alloys') }}">Copper Alloys
                                    ETP Copper</a></strong>, is the most widely used commercial copper grade, known for its
                            exceptional electrical and thermal conductivity. With a minimum copper content of 99.90%, ETP
                            copper is extensively used in electrical, electronic, and industrial applications. It has
                            excellent ductility, corrosion resistance, and workability. This alloy is also suitable for
                            soldering, brazing, and welding under controlled conditions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Copper Alloys ETP Copper Datasheet</h3>
            <p class="mb-3">
                Get the complete Copper ETP Copper datasheet with chemical composition,
                mechanical properties, heat treatment details, and applications.
                Enter your email to receive the PDF instantly.
            </p>

            <!-- Lead Capture Form -->
            <form id="leadForm" method="POST" action="https://mokshtubes.com/datasheet-leads-capture" class="mb-3">
                <input type="hidden" name="_token" value="WNVWvpO4YR2OqZaIJDl2mE3UfyreGys3Vp19brsc" autocomplete="off">
                <div class="row justify-content-center">
                    <input type="hidden" name="pdf" value="haynes-242.pdf">
                    <div class="col-md-6 mb-2">
                        <input type="email" name="email" required="" class="form-control p-3" placeholder="Enter your email address">
                    </div>
                    <div class="col-md-3 mb-2">
                        <button type="submit" class="btn btn-lg w-100 text-white" style="background-color:#db7227; border-radius:8px;">
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
                                    <th>Composition (%)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Copper</td>
                                    <td>≥ 99.90</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Oxygen</td>
                                    <td>0.02 – 0.04</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silver</td>
                                    <td>≤ 0.002</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Other Elements</td>
                                    <td>≤ 0.03 total impurities</td>
                                </tr>
                                {{-- <tr class="t-row">
                                    <td>Zinc</td>
                                    <td>1.0 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Lead</td>
                                    <td>0.05 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Others</td>
                                    <td>0.50 max (total)</td>
                                </tr> --}}
                                {{-- <tr class="t-row">
                                    <td>Others</td>
                                    <td>0.50 max (total)</td>
                                </tr> --}}
                                {{--  <tr class="t-row">
                                    <td>Nitrogen</td>
                                    <td>0.20 – 0.30</td>
                                    <td>0.20 – 0.30</td>
                                    <td>0.20 – 0.30</td>
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
                                    <td>0.323 lb/in³</td>
                                    <td>8.94 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Point</td>
                                    <td>1981 °F</td>
                                    <td>1083 °C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Electrical Conductivity</td>
                                    <td>100% IACS (min)</td>
                                    <td>≥ 58 MS/m</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Thermal Conductivity</td>
                                    <td>223 Btu/ft·hr·°F</td>
                                    <td>386 W/m·K</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Modulus of Elasticity</td>
                                    <td>17 x 10³ ksi</td>
                                    <td>117 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Specific Heat Capacity</td>
                                    <td>0.092 Btu/lb·°F</td>
                                    <td>0.385 J/g·K</td>
                                </tr>
                                {{-- <tr class="t-row">
                                    <td>Coefficient of Expansion</td>
                                    <td>9.8 x 10⁻⁶ /°F</td>
                                    <td>17.6 x 10⁻⁶ /°C</td>
                                </tr> --}}
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
                                    <th>Annealed (Soft)</th>
                                    <th>Half-Hard</th>
                                    <th>Hard</th>
                                    <th>Extra Hard</th>
                                    <th>Typical Sheet / Strip</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Tensile Strength (ksi / MPa)</td>
                                    <td>32–38 ksi / 220–260 MPa</td>
                                    <td>35–44 ksi / 240–300 MPa</td>
                                    <td>42–52 ksi / 290–360 MPa</td>
                                    <td>≥ 52 ksi / ≥ 360 MPa</td>
                                    <td>34–52 ksi / 235–360 MPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (0.2%) (ksi / MPa)</td>
                                    <td>≤ 15 ksi / ≤ 100 MPa</td>
                                    <td>≥ 26 ksi / ≥ 180 MPa</td>
                                    <td>≥ 36 ksi / ≥ 250 MPa</td>
                                    <td>≥ 46 ksi / ≥ 320 MPa</td>
                                    <td>15–45 ksi / 100–310 MPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elongation (%)</td>
                                    <td>≥33%</td>
                                    <td>≥8 %</td>
                                    <td>≥4 %</td>
                                    <td>≥2 %</td>
                                    <td>2–35%</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Brinell Hardness (HBW)</td>
                                    <td>45–65 HB</td>
                                    <td>65–95 HB</td>
                                    <td>90–110 HB</td>
                                    <td>110–120 HB</td>
                                    <td>45–110 HB</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Rockwell Hardness (B)</td>
                                    <td>20–40 B</td>
                                    <td>40–60 B</td>
                                    <td>60–80 B</td>
                                    <td>80–90 B</td>
                                    <td>30–85 B</td>
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
                'image' => 'assets/images/all product/11zon_resized.webp',
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
                'image' => 'assets/images/all product/FASTENERS-1.webp',
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
                <h2>Products in Copper Alloys ETP Copper</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Copper Alloys ETP Copper</strong> is available in:
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
                        Copper Alloys ETP Copper products are produced to the following global standards:
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
                        <h5>ETP Copper provides nearly 100% IACS, making it ideal for high-performance electrical
                            applications.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Efficiently transfers heat in cooling systems, heat exchangers, and radiators.
                        </h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Easily formed, drawn, or machined for intricate parts.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Performs reliably in atmospheric, industrial, and freshwater environments.</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Suitable for sensitive electronic and explosive environments.</h5>
                    </div>
                </div>
            </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Copper Alloys ETP Copper</h2>
                <p class="text-center pb-3"><strong class="text-dark">Copper Alloys ETP Copper</strong> is the industry
                    standard for electrical and electronic components due to its unmatched conductivity and ease of
                    fabrication. Common applications include:</p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Electrical Wiring & Busbars</h5>
                        <p>Used in power distribution boards, panels, switchgear, and transformers.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Electronics & Circuitry</h5>
                        <p>Printed circuit boards (PCBs), terminals, lead frames, and connectors.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Telecommunication & Data Transmission</h5>
                        <p>Cables, grounding systems, and RF/microwave shielding.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Power Generation & Renewable Energy</h5>
                        <p>Wind turbines, solar panels, and electrical generators.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>HVAC & Refrigeration</h5>
                        <p>Heat exchangers, condenser coils, and refrigeration tubing.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Architecture & Decorative Applications</h5>
                        <p>Roofing, cladding, lightning arrestors, and ornaments.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-strategies"></i></div>
                        <h5>Automotive & Transportation</h5>
                        <p>Battery cables, alternator windings, and electric vehicle components.</p>
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
                        <h5>Experts in Pure Copper & Conductive Alloys</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>State-of-the-art production and processing facilities</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Reliable supply of standard and custom sizes</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Strict quality checks and compliance with global standards</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Serving clients across electrical, automotive, telecom, and energy sectors</h5>
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
                                <h4>What is ETP Copper and why is it widely used in industries?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    ETP Copper, also known as Electrolytic Tough Pitch Copper, is the most commonly used
                                    commercial copper grade containing a minimum of 99.90% copper.
                                    It is well-known for its excellent electrical and thermal conductivity, ductility, and
                                    corrosion resistance.
                                    With nearly 100% IACS conductivity, ETP Copper is widely used in electrical, electronic,
                                    and industrial sectors where efficiency and reliability are critical.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the key benefits of using ETP Copper?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    The main advantages of ETP Copper include superior electrical and thermal conductivity,
                                    easy formability, and excellent performance in atmospheric and industrial environments.
                                    It is suitable for welding, brazing, and soldering under controlled conditions and
                                    offers consistent reliability in electrical wiring, power systems, and electronic
                                    components.
                                    Its versatility also makes it useful in cooling systems, architecture, and automotive
                                    applications.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the main applications of ETP Copper in different sectors?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    ETP Copper is widely used in electrical wiring, busbars, power distribution panels,
                                    transformers, and switchgear due to its high conductivity.
                                    In electronics, it is used for PCBs, connectors, and lead frames, while in
                                    telecommunications it supports grounding systems, RF shielding, and data transmission
                                    cables.
                                    Additionally, it is applied in renewable energy systems, HVAC, refrigeration,
                                    architectural projects, and the automotive industry, especially in electric vehicles and
                                    battery components.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What ETP Copper products does MOKSH TUBES & FITTINGS LLP provide?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP manufactures and supplies a wide range of ETP Copper products
                                    including pipes, tubes, rods, flats, coils, sheets, plates, busbars, strips, foils,
                                    fasteners, flanges, pipe fittings, and custom-fabricated components.
                                    All products are produced to meet global quality standards and can be supplied in both
                                    standard and customized sizes to suit the requirements of various industries.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose MOKSH TUBES & FITTINGS LLP for ETP Copper materials?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP is a trusted supplier and exporter of ETP Copper with
                                    advanced production facilities and strict quality control processes.
                                    The company offers reliable supply, technical support, and the flexibility to deliver
                                    both standard and customized products worldwide.
                                    With a strong reputation in electrical, automotive, telecom, and energy sectors, MOKSH
                                    TUBES & FITTINGS LLP ensures high quality ETP Copper solutions for global clients.
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
                    contact <strong>Moksh Tubes & Fittings LLP</strong> — your trusted partner for high-conductivity copper
                    solutions.</p>
               <!-- Call button -->
                <a href="javascript:void(0);" class="contact-cta-btn" data-bs-toggle="modal"
                    data-bs-target="#contactFormModal">
                    Get in Touch
                </a>
            </div>
        </div>
    </section>





@endsection
<!-- FAQ Schema Markup -->
 @section('jsscripts')
<script type="application/ld+json">
    @verbatim
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is ETP Copper and why is it widely used in industries?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "ETP Copper, also known as Electrolytic Tough Pitch Copper, is the most commonly used commercial copper grade containing a minimum of 99.90% copper. It is well-known for its excellent electrical and thermal conductivity, ductility, and corrosion resistance. With nearly 100% IACS conductivity, ETP Copper is widely used in electrical, electronic, and industrial sectors where efficiency and reliability are critical."
      }
    },
    {
      "@type": "Question",
      "name": "What are the key benefits of using ETP Copper?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The main advantages of ETP Copper include superior electrical and thermal conductivity, easy formability, and excellent performance in atmospheric and industrial environments. It is suitable for welding, brazing, and soldering under controlled conditions and offers consistent reliability in electrical wiring, power systems, and electronic components. Its versatility also makes it useful in cooling systems, architecture, and automotive applications."
      }
    },
    {
      "@type": "Question",
      "name": "What are the main applications of ETP Copper in different sectors?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "ETP Copper is widely used in electrical wiring, busbars, power distribution panels, transformers, and switchgear due to its high conductivity. In electronics, it is used for PCBs, connectors, and lead frames, while in telecommunications it supports grounding systems, RF shielding, and data transmission cables. Additionally, it is applied in renewable energy systems, HVAC, refrigeration, architectural projects, and the automotive industry, especially in electric vehicles and battery components."
      }
    },
    {
      "@type": "Question",
      "name": "What ETP Copper products does MOKSH TUBES & FITTINGS LLP provide?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "MOKSH TUBES & FITTINGS LLP manufactures and supplies a wide range of ETP Copper products including pipes, tubes, rods, flats, coils, sheets, plates, busbars, strips, foils, fasteners, flanges, pipe fittings, and custom-fabricated components. All products are produced to meet global quality standards and can be supplied in both standard and customized sizes to suit the requirements of various industries."
      }
    },
    {
      "@type": "Question",
      "name": "Why choose MOKSH TUBES & FITTINGS LLP for ETP Copper materials?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "MOKSH TUBES & FITTINGS LLP is a trusted supplier and exporter of ETP Copper with advanced production facilities and strict quality control processes. The company offers reliable supply, technical support, and the flexibility to deliver both standard and customized products worldwide. With a strong reputation in electrical, automotive, telecom, and energy sectors, MOKSH TUBES & FITTINGS LLP ensures high quality ETP Copper solutions for global clients."
      }
    }
  ]
}
@endverbatim
</script>
@endsection