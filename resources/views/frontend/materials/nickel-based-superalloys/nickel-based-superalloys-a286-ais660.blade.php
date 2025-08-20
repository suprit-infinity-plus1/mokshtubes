@extends('layouts.master')

@section('title', 'Nickel A286 AIS600 Superalloy | High Strength & Heat Resistant | Mokshtubes ')
@section('meta_description',
    'Explore A286 superalloy known for high strength, heat resistance, and excellent
    performance in aerospace and high-temperature applications.')

@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Nickel A286 AIS600</h1>
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
                Introduction To Nickel A286 / Alloy A286 / AISI 660 / UNS S66286 </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/nickel-based-superalloys/nickel-based-superalloys-A286_AIS660.webp') }}"
                        alt="Nickel A286 AIS600" class="img-fluid rounded shadow-sm">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> proudly manufactures, supplies,
                            exports, and stocks a wide range of<strong class="text-black"> Nickel A286 products</strong>,
                            including <a href="{{ route('products.pipes-tubes') }}">Pipes & Tubes</a>, Sheets,
                            Plates, Coils, Bars, Forgings, Fasteners, Pipe Fittings, Flanges, Wire Mesh, Welding Rods, and
                            Custom Components designed for high-performance applications.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">Alloy A286</strong>, also known as <strong class="text-black">AISI
                                660 </strong>or UNS S66286, is a
                            high-strength, iron-<a
                                href="{{ route('materials.nickel-Based-Superalloys') }}">nickel</a>-chromium alloy with
                            additions of molybdenum and titanium. It is
                            designed for applications requiring excellent strength and corrosion resistance at temperatures
                            up to 704 °C (1300 °F). It exhibits outstanding mechanical properties and oxidation resistance,
                            making it a widely used material in aerospace, automotive, marine, and industrial gas turbine
                            components.
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
                                    <td>24.0 – 27.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium</td>
                                    <td>13.5 – 16.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron</td>
                                    <td>Balance</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Titanium</td>
                                    <td>1.90 – 2.35</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Molybdenum</td>
                                    <td>1.00 – 1.50</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese</td>
                                    <td>2.00</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon</td>
                                    <td>1.00</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon</td>
                                    <td>0.08</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Vanadium</td>
                                    <td>0.10 – 0.50</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sulfur</td>
                                    <td>0.030</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Phosphorus</td>
                                    <td>0.030</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Aluminum</td>
                                    <td>0.35 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Boron</td>
                                    <td>0.003 – 0.010</td>
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
                                    <td>0.286 lb/in³</td>
                                    <td>7.92 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Range</td>
                                    <td>2550 °F</td>
                                    <td>1399 °C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Specific Heat</td>
                                    <td>0.10 Btu/lb·°F</td>
                                    <td>420 J/kg·°C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Thermal Conductivity</td>
                                    <td>—</td>
                                    <td>12–13 W/m·°C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Electrical Resistivity</td>
                                    <td>—</td>
                                    <td>0.91 Ω·mm²/m</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Magnetic Permeability</td>
                                    <td>1.007–1.010</td>
                                    <td>(unitless)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Modulus of Elasticity (E)</td>
                                    <td>—</td>
                                    <td>200 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Coefficient of Thermal Expansion (70–1200 °F)</td>
                                    <td>9.2–9.9 ×10⁻⁶ /°F</td>
                                    <td>16.5–17.8 ×10⁻⁶ /°C</td>
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
                                    <th>Solution Annealed & Aged (Bar ≤160 mm)</th>
                                    <th>Aged/Forged Bar 300 mm</th>
                                    <th>Typical Bar</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Tensile Strength (ksi)</td>
                                    <td>130–160</td>
                                    <td>130–175</td>
                                    <td>130</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tensile Strength (MPa)</td>
                                    <td>895–1103</td>
                                    <td>895–1200</td>
                                    <td>895</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (0.2 % off) (ksi)</td>
                                    <td>≥ 90</td>
                                    <td>90</td>
                                    <td>90</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (MPa)</td>
                                    <td>620</td>
                                    <td>620</td>
                                    <td>585</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elongation (% in 2 in / 50 mm)</td>
                                    <td>15</td>
                                    <td>16</td>
                                    <td>15</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Reduction of Area (%)</td>
                                    <td>18</td>
                                    <td>18</td>
                                    <td>18</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Hardness (Brinell / Rockwell B/C)</td>
                                    <td>248–341 HB (approx. 24–35 HRC)</td>
                                    <td>Comparable</td>
                                    <td>248–341 HB</td>
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
            'seamless-pipes' => 'Seamless Pipes',
            'welded-pipes' => 'Welded Pipes (ERW & EFW)',
            'tubes' => 'Tubes (Capillary, U-Bend, Boiler & Heat Exchanger Tubes)',
            'sheets-plates' => 'Sheets & Plates',
            'coils-strips' => 'Coils & Strips',
            'bars' => 'Round Bars, Flat Bars, Hex Bars, Square Bars',
            'pipe-fittings' => 'Pipe Fittings (Elbows, Tees, Reducers, Caps, Stub Ends)',
            'flanges' => 'Flanges (Weld Neck, Slip-On, Blind, Socket Weld, Threaded)',
            'fasteners' => 'Fasteners (Bolts, Nuts, Screws, Washers, Studs)',
            'custom-components' => 'Custom Fabricated Components',
        ];
    @endphp

    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Products in Nickel A286 / AISI 660</h2>
            </div>

            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Nickel A286 / AISI 660</strong> is engineered for high-temperature,
                        high-stress environments where other alloys fail. It maintains excellent corrosion resistance, good
                        formability, and superior long-term stability in oxidizing conditions.
                    </p>
                </div>
            </div>

            <!-- Horizontal Styled Product List -->
            <div class="row justify-content-center mb-5">
                <div class="col-lg-10">
                    <div class="p-4 bg-white rounded shadow-sm border-start border-4" style="border-color: #db7227;">
                        <div class="row">
                            @foreach ($products as $slug => $product)
                                <div class="col-12 col-sm-6 mb-2 d-flex justify-content-start align-items-start">
                                    <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                    <span>{{ $product }}</span>
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
                @foreach ($products as $slug => $product)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex">
                        <div class="mx-auto" style="width: 100%; max-width: 300px;">
                            {{-- <a href="{{ url('/materials/hastelloy/c22') }}" class="text-decoration-none"> --}}
                            <a href="#" class="text-decoration-none">
                                <div class="product-card h-100">
                                    <img src="https://placehold.co/300x200?" alt="{{ $product }}"
                                        class="img-fluid  w-100">
                                    <h6 class="product-card-title text-center mt-2 px-2">{{ $product }}</h6>
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
                        <h5>High tensile and creep rupture strength at elevated temperatures</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Excellent oxidation and corrosion resistance in high-heat environments</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Superior fabricability and weldability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Maintains strength over long service periods</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Non-magnetic after heat treatment</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Readily available in both annealed and age-hardened forms</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Nickel Alloy A286</h2>
                <p class="text-center pb-3"><strong class="text-dark">Nickel Alloy A286</strong> is widely used in
                    environments where thermal stability and mechanical strength are critical. Key applications include:
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Aerospace Industry</h5>
                        <p>Jet engine components, afterburners, turbines, fasteners, and exhaust systems.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Power Generation</h5>
                        <p>Turbine blades, boilers, high-temperature steam systems.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Automotive</h5>
                        <p>Turbochargers, high-performance exhausts, engine components.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Chemical Processing</h5>
                        <p>Equipment exposed to elevated temperatures and corrosive substances.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Oil & Gas</h5>
                        <p>Offshore and subsea systems, flange connections, and downhole tools.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Marine</h5>
                        <p>Heat exchangers, high-temperature fasteners, and structural parts.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-capsule"></i></div>
                        <h5>Industrial Fasteners</h5>
                        <p>Used in high-pressure/high-temperature bolting (ASTM A453 Grade 660).</p>
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
                        <h5>Decades of experience in high-performance nickel-based alloys</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Certified materials with test reports & compliance to international codes</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>In-house machining and custom fabrication</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Fast delivery from ready stock and global export capabilities</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Dedicated technical support and customer-focused approach</h5>
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
                                <h4>What is Nickel A286 (AISI 660) and what are its key properties?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Nickel A286, also known as AISI 660 or UNS S66286, is a high-strength
                                    iron nickel chromium alloy with additions of molybdenum and titanium. It is designed for
                                    applications requiring excellent strength and corrosion resistance at temperatures up to
                                    704 °C (1300 °F). The alloy exhibits superior mechanical properties, oxidation
                                    resistance, and thermal stability, making it ideal for aerospace, automotive, marine,
                                    power generation, and chemical processing applications.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What Nickel A286 products does Moksh Tubes & Fittings LLP supply?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Moksh Tubes & Fittings LLP manufactures, stocks, and exports a wide range of Nickel A286
                                    products including seamless and welded pipes, tubes, sheets, plates, coils, strips,
                                    round bars, flat bars, hex bars, square bars, pipe fittings, flanges, fasteners, wire
                                    mesh, welding rods, and custom fabricated components. All products are designed for
                                    high-performance applications in extreme environments.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the main advantages of using Nickel A286 in industrial applications?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Nickel A286 offers high tensile and creep rupture strength even at elevated
                                    temperatures, excellent oxidation and corrosion resistance, and long-term dimensional
                                    stability. It is easily fabricated and welded, maintains mechanical integrity over
                                    prolonged service periods, and is non magnetic after heat treatment. These features make
                                    it suitable for critical, high-temperature, high stress industrial applications.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Which industries commonly use Nickel A286 alloy products?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Nickel A286 is widely used in aerospace for jet engines, turbines, exhaust systems, and
                                    fasteners; in power generation for turbines, boilers, and high temperature steam
                                    systems; in automotive for turbochargers and engine components; in chemical processing
                                    for high-temperature equipment; and in oil & gas, marine, and industrial sectors for
                                    heat exchangers, subsea tools, and high pressure fasteners.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose Moksh Tubes & Fittings LLP for Nickel A286 supply?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Moksh Tubes & Fittings LLP provides certified, high performance Nickel A286 products
                                    with comprehensive test reports and compliance with international standards. With
                                    decades of expertise in nickel based alloys, in house machining, custom fabrication,
                                    ready stock for fast delivery, global export capabilities, and dedicated technical
                                    support, the company ensures reliable solutions for critical industrial applications.
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
                    Connect with <strong>Moksh Tubes & Fittings LLP</strong> for precision products built for performance.
                </p>
                <!-- Call button -->
                <a href="tel:+919769584950" class="contact-cta-btn">Get in Touch</a>
            </div>
        </div>
    </section>





@endsection
