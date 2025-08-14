@extends('layouts.master')

@section('title', 'Beryllium Copper Alloy')
@section('meta_description','Durable beryllium copper alloys offering high strength, conductivity & wear resistance for aerospace, electronics & tooling.
')
@section('canonical', url()->current())

@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Beryllium Copper</h1>
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
                Introduction To Beryllium Copper / UNS C17200 / ALLOY 25
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/copper-alloys/copper-alloys-beryllium-copper.webp') }}"alt="Beryllium Copper"
                        class="img-fluid rounded shadow-sm">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a reliable manufacturer,
                            exporter, importer, and stockist of high-quality<strong class="text-black"> Beryllium Copper <a
                                    href="{{ route('products') }}">products</a></strong>. We offer a wide
                            range of forms, including <a href="{{ route('products.pipes-tubes') }}">Pipes & Tubes</a>,
                            Sheets & Plates, Coils, Rods, Bars, Wire, Foil,
                            Forgings, and Custom Components tailored to industrial needs.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black"><a href="{{ route('materials.copper-Alloys') }}">Beryllium
                                    Copper</a></strong>, also known as<strong class="text-black"> Copper Beryllium</strong>,
                            is a high-performance alloy known
                            for its remarkable combination of strength, conductivity, and corrosion resistance. This
                            non-ferrous alloy contains 0.4% to 2% beryllium and is often used where non-sparking,
                            non-magnetic, and high-strength materials are required. It can be heat-treated for enhanced
                            mechanical properties and performs excellently in electrical, aerospace, marine, and oil & gas
                            environments.
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
                                    <td>Beryllium</td>
                                    <td>1.80 – 2.00</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Cobalt + Nickel</td>
                                    <td>0.20 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Copper</td>
                                    <td>Balance</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron</td>
                                    <td>0.15 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Lead</td>
                                    <td>0.02 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Other Elements</td>
                                    <td>0.10 max</td>
                                </tr>
                                {{-- <tr class="t-row">
                                    <td>Phosphorus</td>
                                    <td>≤ 0.035</td>
                                    <td>≤ 0.035</td>
                                    <td>≤ 0.035</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sulfur</td>
                                    <td>≤ 0.03</td>
                                    <td>≤ 0.03</td>
                                    <td>≤ 0.03</td>
                                </tr>
                                <tr class="t-row">
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
                                    <th>Value</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Density</td>
                                    <td>8.25 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Point</td>
                                    <td>866 – 982 °C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Thermal Conductivity</td>
                                    <td>105 W/m·K</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Electrical Conductivity</td>
                                    <td>20 – 65% IACS</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Specific Heat Capacity</td>
                                    <td>0.38 J/g·K</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Modulus of Elasticity</td>
                                    <td>131 GPa</td>
                                </tr>
                                {{-- <tr class="t-row">
                                    <td>Specific Heat Capacity</td>
                                    <td>460 J/kg·K</td>
                                    <td>460 J/kg·K</td>
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
                                    <th>Annealed (TB00)</th>
                                    <th>Cold-Drawn (¼ to Full Hard)</th>
                                    <th>Precipitation Hardened (HT Series)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Tensile Strength (ksi / MPa)</td>
                                    <td>60–85 ksi / 415–585 MPa</td>
                                    <td>90–165 ksi / 620–1140 MPa (increases with hardness)</td>
                                    <td>165–230 ksi / 1140–1585 MPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (0.2%) (ksi / MPa)</td>
                                    <td>40–50 ksi / 275–345 MPa</td>
                                    <td>Approx. 90% of tensile strength for HT tempers</td>
                                    <td>Approx. 90% of tensile strength</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elongation (%)</td>
                                    <td>20–30%</td>
                                    <td>10–20%</td>
                                    <td>2–5%</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Hardness (Rockwell B / C)</td>
                                    <td>35–60 B</td>
                                    <td>Up to 60 B</td>
                                    <td>36–45 HRC</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Electrical Conductivity (% IACS)</td>
                                    <td>19–28%</td>
                                    <td>15–20%</td>
                                    <td>15–20%</td>
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
                <h2>Products in Beryllium Copper</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Beryllium Copper</strong> is available in:
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
                        Beryllium Copper products are produced to the following global standards:
                    </p>
                </div>
            </div>

            <!-- Product Image Cards (Now centered and responsive) -->
            <div class="row g-4">
                @foreach ($products as $slug => $product)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex">
                        <div class="mx-auto" style="width: 100%; max-width: 300px;">
                            {{-- <a href="{{ url('/materials/nickel-alloys/hastelloy-c276/') }}" class="text-decoration-none"> --}}
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
                        <h5>High strength comparable to steels</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Excellent fatigue and stress relaxation resistance</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Non-magnetic and non-sparking</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>High electrical and thermal conductivity</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Excellent corrosion and wear resistance</h5>
                    </div>
                </div>
            </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Beryllium Copper</h2>
                <p class="text-center pb-3"><strong class="text-dark">Beryllium Copper</strong> is widely chosen for its
                    unmatched combination of high strength, corrosion resistance, and non-magnetic properties, making it
                    indispensable in:</p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Electrical & Electronics</h5>
                        <p>Connectors, contacts, switches, relays, springs, EMI shielding</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Aerospace & Defense</h5>
                        <p>Aircraft bushings, landing gear components, missile parts</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Oil & Gas Industry</h5>
                        <p>Non-sparking tools, downhole components, wellhead parts</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Marine Engineering</h5>
                        <p>Valve parts, pump shafts, corrosion-resistant hardware</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Automotive Industry</h5>
                        <p>ABS brake components, engine contacts, sensor springs</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Tooling & Molds</h5>
                        <p>Injection molds, die-casting inserts, electrodes for EDM</p>
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
                        <h5>In-house quality control and inspection</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Custom shapes and non-standard sizes available</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Compliance with international standards (ASTM, AMS, DIN)</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Fast delivery with global logistics support</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Technical support and material traceability</h5>
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
                    contact <strong>Moksh Tubes & Fittings LLP</strong> — for reliable supply, precision quality, and
                    unbeatable service.
                    <!-- Call button -->
                    <a href="tel:+919769584950" class="contact-cta-btn">Get in Touch</a>
            </div>
        </div>
    </section>





@endsection
