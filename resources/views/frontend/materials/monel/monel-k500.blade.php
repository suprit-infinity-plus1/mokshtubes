@extends('layouts.master')

@section('title', 'Monel K500 Alloy | Ultimate Strength & Shield')
@section('meta_description', 'Discover the extreme strength and corrosion resistance of Monel K500—engineered for top performance in marine, chemical, and oilfield environments.')
@section('meta_keywords', 'Monel K500, Monel K500 Alloy, Nickel-Copper Alloy, High Strength Alloy, Corrosion Resistant Alloy, Marine Industry Alloys, Chemical Processing Alloys, Oilfield Alloys, Impact Resistant Alloys, Durable Nickel Alloys')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Monel K500</h1>
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
                Introduction To Monel® K500 / Alloy K500 / UNS N05500 </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/monel/Monel-K500.webp') }}" alt="Monel K500" class="img-fluid rounded shadow-sm">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong>LLP is a manufacturer, supplier,
                            exporter, importer and stockist of a comprehensive range of MONEL K500 (UNS N05500) <a
                                href="{{ route('products') }}">products</a>
                            including <a href="{{ route('products.pipes-tubes') }}">Pipes & Tubes</a>, Pipe Fittings,
                            Flanges, Fasteners, Sheets, Plates, Coils, Bars, Wires,
                            Welding Rods, and other Custom and Hard-to-Find <strong class="text-black">MONEL K500 </strong>
                            Components.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">MONEL K500</strong class="text-black"> is a precipitation-hardenable
                            nickel-copper alloy that combines the excellent corrosion resistance of MONEL 400 with added
                            strength and hardness due to its <a
                                href="{{ route('materials.aluminium-Alloys') }}">aluminum</a> and <a
                                href="{{ route('materials.titanium') }}">titanium</a> content. It retains high mechanical
                            properties and is particularly resistant to stress corrosion cracking and pitting in marine and
                            chemical environments. MONEL K500 is non-magnetic, even at sub-zero temperatures, and maintains
                            dimensional stability in harsh conditions, making it ideal for high-performance,
                            high-reliability applications.
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
                                    <td>63.0 min</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Copper</td>
                                    <td>27.0 – 33.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Aluminum</td>
                                    <td>2.3 – 3.15</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Titanium</td>
                                    <td>0.35 – 0.85</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron</td>
                                    <td>2.0 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese</td>
                                    <td>1.5 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon</td>
                                    <td>0.5 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon</td>
                                    <td>0.25 max</td>
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
                                    <td>0.305 lb/in³</td>
                                    <td>8.44 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Range</td>
                                    <td>2400–2460 °F</td>
                                    <td>1315–1350 °C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elasticity (Tension)</td>
                                    <td>26.0 × 10³ ksi</td>
                                    <td>179 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elasticity (Torsion)</td>
                                    <td>9.5 × 10³ ksi</td>
                                    <td>65.5 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Poisson’s Ratio</td>
                                    <td>0.32 (aged material, RT)</td>
                                    <td>-</td>
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
                                    <th>Form & Condition</th>
                                    <th>Tensile Strength</th>
                                    <th>Yield Strength (0.2%)</th>
                                    <th>Elongation</th>
                                    <th>Hardness</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Rod & Bar – Hot-Finished, Aged</td>
                                    <td>140–190 ksi (965–1310 MPa)</td>
                                    <td>100–150 ksi (690–1034 MPa)</td>
                                    <td>35–20%%</td>
                                    <td>27–37C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Rod & Bar – Cold-Drawn, Annealed, Aged</td>
                                    <td>130–190 ksi (896–1310 MPa)</td>
                                    <td>85–120 ksi (586–827 MPa)</td>
                                    <td>30–10%</td>
                                    <td>24–35C</td>
                                </tr>

                                <tr class="t-row">
                                    <td>Strip – Spring Temper, Aged</td>
                                    <td>170–220 ksi (1172–1517 MPa)</td>
                                    <td>130–195 ksi (896–1345 MPa)</td>
                                    <td>10–5%</td>
                                    <td>34C min</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tube & Pipe – Cold-Drawn, Aged</td>
                                    <td>140–220 ksi (965–1517 MPa)</td>
                                    <td>100–200 ksi (690–1379 MPa)</td>
                                    <td>25–3%</td>
                                    <td>27–40C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Wire – Spring Temper, Aged</td>
                                    <td>160–200 ksi (1103–1379 MPa)</td>
                                    <td>140–190 ksi (965–1310 MPa)</td>
                                    <td>8–3%</td>
                                    <td>—</td>
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
                <h2>Products in Monel K500</h2>
            </div>

            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">MOKSH TUBES & FITTINGS LLP</strong>, we proudly supply MONEL® Alloy K-500
                        (UNS N05500 / Werkstoff Nr. 2.4375) — a premium nickel-copper alloy engineered for exceptional
                        strength, corrosion resistance, and long-term performance.
                        This alloy is approved under NACE MR-01-75, making it a trusted material for critical operations in
                        the oil and gas industry, as well as in marine, chemical, and industrial applications.
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
                <div class="row justify-content-center mb-4 mt-4" style="text-align: justify;">
                    <div class="col-lg-10">
                        <p class="fs-6">
                            Whether you're working in high-pressure, high-temperature, or corrosive environments, we
                            deliver MONEL K-500 in stock sizes or tailor-made dimensions to meet your specific
                            requirements.</p>
                    </div>
                </div>

            </div>

            <!-- Emphasized Line -->
            <div class="row justify-content-center mb-3">
                <div class="col-lg-10">
                    <p class="fw-bold fs-5 text-center my-4" style="color: #174268;">
                        We offer Monel K-500 in a wide variety of standard and custom mill forms, including:
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
            <div class="row  mb-4 mt-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        Whether you're working in high-pressure, high-temperature, or corrosive environments, we deliver
                        MONEL K-500 in stock sizes or tailor-made dimensions to meet your specific requirements.</p>
                </div>
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
                        <h5>Excellent corrosion resistance in seawater and chemical environments</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Superior strength and hardness via precipitation hardening</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Non-magnetic at sub-zero temperatures</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>High resistance to stress corrosion cracking and erosion</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Long service life and low maintenance in tough operating conditions</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Monel K500</h2>
                <p class="text-center pb-3"><strong class="text-dark">Monel K500</strong> is widely used in demanding
                    environments that require a combination of high strength, toughness, and outstanding resistance to
                    corrosion, particularly in marine and chemical settings. Its ability to withstand high pressure,
                    corrosive media, and severe mechanical stress makes it suitable for:
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Marine and Offshore Engineering</h5>
                        <p>Ideal for propeller shafts, pump shafts, seawater valves, fasteners, and marine hardware due to
                            excellent resistance to saltwater corrosion and biofouling.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Oil and Gas Industry</h5>
                        <p>Utilized in downhole equipment, non-magnetic drill collars, valve components, and oil well tools
                            exposed to sour gas (H₂S) and high-pressure environments.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Chemical Processing</h5>
                        <p>Applied in components such as impellers, heat exchangers, pumps, and tanks that are exposed to
                            sulfuric, hydrofluoric, and hydrochloric acids.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Aerospace and Defense</h5>
                        <p>Used for structural components, fasteners, springs, and actuators requiring excellent mechanical
                            strength and resistance to corrosive atmospheres.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Power Generation</h5>
                        <p>Deployed in turbine blades, bolting, and condensers where high-temperature resistance and
                            corrosion protection are essential.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Pump and Valve Manufacturing</h5>
                        <p>Preferred for shafting, seats, and bearings where wear resistance and long-term stability are
                            critical.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-capsule"></i></div>
                        <h5>Medical and Electronic Industries</h5>
                        <p>Suitable for precision components requiring non-magnetic properties, corrosion resistance, and
                            biocompatibility.</p>
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
            <p class="text-center pb-3 my-4"><strong class="text-dark">Monel K500’s</strong> precipitation-hardened
                structure delivers unmatched performance in mechanical strength and resistance to both oxidizing and
                reducing environments—making it the alloy of choice for mission-critical applications.

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
                        <h5>Specialists in MONEL K500 stock and custom fabrication</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Strong sourcing network and certified raw materials</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Rapid turnaround and global export capabilities</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Unmatched quality assurance and technical expertise</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Trusted by industries with mission-critical demands</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Contact Us</h2>
                <p>
                    <strong>Moksh Tubes & Fittings LLP</strong> your partner in performance-grade MONEL K500 materials.
                </p>
                <!-- Call button -->
                <a href="tel:+919769584950" class="contact-cta-btn">Get in Touch</a>
            </div>
        </div>
    </section>





@endsection
