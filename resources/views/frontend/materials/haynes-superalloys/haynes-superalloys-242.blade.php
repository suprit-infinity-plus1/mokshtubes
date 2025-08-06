@extends('layouts.master')

@section('title', 'Haynes Superalloys 242 - Moksh Tubes & Fittings LLP')

@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Haynes Superalloys 242</h1>
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
                Introduction To Haynes Superalloys 242 / UNS N10242
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="/assets/images/haynes /haynes- 242.jpg" alt="Haynes-242" class="img-fluid rounded shadow-sm">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a manufacturer, supplier,
                            exporter, importer, and stockist of a wide range of<strong class="text-black"> Haynes 242 (UNS
                                N10242)<a href="{{ route('products') }}"> products</a></strong> including
                            Pipes & Tubes, Pipe Fittings, Flanges, Fasteners, Sheets & Plates, Coils, Wires, Round Bars,
                            Flat Bars, Angles, Channels, Welding Rods, Wire Mesh, and other custom and hard-to-find
                            Haynes 242 products.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black"><a href="{{ route('materials.haynes-Superalloys') }}">Haynes
                                    Superalloys 242</a></strong> is an age-hardenable nickel-molybdenum-chromium alloy known
                            for its exceptional high-temperature strength, low thermal expansion, outstanding oxidation
                            resistance, and good fatigue performance. It remains dimensionally stable and structurally
                            robust up to approximately 705 °C (1300 °F).
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
                                    <td>Balance</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Molybdenum</td>
                                    <td>24–26</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium</td>
                                    <td>7–9</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron</td>
                                    <td>≤ 2</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Cobalt</td>
                                    <td>≤ 2.5</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese</td>
                                    <td>≤ 0.8</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon</td>
                                    <td>≤ 0.8</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Aluminum</td>
                                    <td>≤ 0.5</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon</td>
                                    <td>≤ 0.03</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Boron</td>
                                    <td>≤ 0.006</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Copper</td>
                                    <td>≤ 0.5</td>
                                </tr>
                                {{-- <tr class="t-row">
                                    <td>Sulfur</td>
                                    <td>≤ 0.015</td>
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
                                    <td>0.321 lb/in³</td>
                                    <td>8.88 g/cm³ </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Point</td>
                                    <td>2410–2460 °F</td>
                                    <td>1320–1350 °C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Specific Heat</td>
                                    <td>0.10 Btu/lb·°F</td>
                                    <td>418 J/kg·°C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Curie Temperature</td>
                                    <td>—</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Magnetic Permeability at 200 oersteds (15.9 kA/m)</td>
                                    <td>1.02</td>
                                    <td>—</td>
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
                                    <th>Tubing (Annealed)</th>
                                    <th>Tubing (Cold Drawn)</th>
                                    <th>Bar (Annealed + Aged)</th>
                                    <th>Plate (Annealed + Aged)</th>
                                    <th>Sheet (Annealed + Aged)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Tensile Strength (ksi)</td>
                                    <td>105</td>
                                    <td>144</td>
                                    <td>187</td>
                                    <td>187</td>
                                    <td>150–218</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tensile Strength (MPa)</td>
                                    <td>724</td>
                                    <td>993</td>
                                    <td>1290</td>
                                    <td>1290</td>
                                    <td>1034–1500</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (0.2%) (ksi)</td>
                                    <td>—</td>
                                    <td>104</td>
                                    <td>122</td>
                                    <td>122</td>
                                    <td>140</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (MPa)</td>
                                    <td>—</td>
                                    <td>717</td>
                                    <td>845</td>
                                    <td>845</td>
                                    <td>965</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elongation (%)</td>
                                    <td>—</td>
                                    <td>15–20</td>
                                    <td>33.7</td>
                                    <td>33.7</td>
                                    <td>8</td>
                                </tr>
                                {{-- <tr class="t-row">
                                    <td>Reduction of Area (%)</td>
                                    <td>73 %</td>
                                    <td>–</td>
                                    <td>–</td>
                                    <td>–</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Modulus of Elasticity (GPa)</td>
                                    <td>211 GPa</td>
                                    <td>211 GPa</td>
                                    <td>sheet same as plate</td>
                                    <td>–</td>
                                </tr> --}}
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
                <h2>Products in Haynes Superalloys 242</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Haynes Superalloys 242</strong> is a high-performance alloy, conforming to
                        aerospace and industrial standards, and supplied in a variety of forms:
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
                        Haynes Superalloys 242 products are produced to the following global standards:
                    </p>
                </div>
            </div>

            <!-- Product Image Cards (Now centered and responsive) -->
            <div class="row g-4">
                @foreach ($products as $slug => $product)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex">
                        <div class="mx-auto" style="width: 100%; max-width: 300px;">
                            <a href="{{ url('/materials/nickel-alloys/hastelloy-c276/') }}" class="text-decoration-none">
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
                        <h5>Exceptional high-temperature strength up to 705 °C (1300 °F)</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5g>Lowest thermal expansion among comparable superalloys</h5g>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Outstanding oxidation resistance up to ~815 °C (1500 °F)</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>High fatigue and creep resistance</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Good formability and weldability, including in age‑hardened condition</h5>
                    </div>
                </div>
                {{-- <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Economical compared to other titanium grades with higher alloy content</h5>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Haynes Superalloys 242</h2>
                <p class="text-center pb-3"><strong class="text-dark">Haynes Superalloys 242</strong> is ideal for
                    critical applications requiring simultaneous dimensional stability, mechanical strength, and corrosion
                    resistance:
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Aerospace and Gas Turbines</h5>
                        <p>Seal/containment rings, ducting, fasteners, casings, fuel nozzles</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Chemical & Petrochemical Processing</h5>
                        <p>HF/fluorine-resistant components, extrusion screws, reactors</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Industrial Furnaces and Heat Treating</h5>
                        <p>Heat exchangers, press tooling, furnace parts</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Nuclear & Specialty Energy Environments</h5>
                        <p>Salt-furnace hardware, controlled expansion components</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Power Generation</h5>
                        <p>Boiler superheaters, gas turbine components</p>
                    </div>
                </div>

                {{-- <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Medical and Pharmaceutical Equipment</h5>
                        <p>Favored for surgical tools, implants, and cleanroom processing systems because of its purity and
                            biocompatibility.</p>
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
                        <h5>Deep expertise in exotic, high-performance alloys</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Global supply chain for aerospace/industrial-grade stock</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Custom machining, age treatment, and fabrication capabilities</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Products certified to ASTM/ASME/NACE specifications</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>ISO 9001 quality assurance with material traceability</h5>
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
                    <strong>Moksh Tubes & Fittings LLP</strong> delivers premium alloys, expert advice, and swift, reliable
                    service—request your quote today!
                </p>
                <!-- Call button -->
                <a href="tel:+919769584950" class="contact-cta-btn">Get in Touch</a>
            </div>
        </div>
    </section>





@endsection
