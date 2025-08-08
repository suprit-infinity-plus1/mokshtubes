@extends('layouts.master')

@section('title', 'INCOLOY 020 - Moksh Tubes & Fittings LLP')

@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>INCOLOY 020</h1>
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
                Introduction To Incoloy 020 / Alloy 020 / UNS N08020 / W.Nr. 2.4660 </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="/assets/images/incoloy/incoloy-020.jpeg" alt="incoloy-020"
                        class="img-fluid rounded shadow-sm">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"><a href="{{ route('materials.incoloy') }}">INCOLOY 020</a></strong>
                            is a corrosion-resistant nickel-iron-chromium
                            alloy designed specifically to handle sulfuric acid and other aggressive chemical environments.
                            With the addition of copper and molybdenum, this alloy offers exceptional resistance to pitting,
                            crevice corrosion, and chloride-induced stress corrosion cracking.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">MOKSH TUBES & FITTINGS LLP</strong class="text-black"> is a trusted
                            manufacturer, exporter, supplier, importer, and stockist of INCOLOY 020 in multiple forms
                            including <a href="{{ route('products.pipes-tubes') }}">pipes & tubes</a>, fittings, flanges,
                            fasteners, sheets, plates, bars, rods, coils, wire
                            mesh, and custom-fabricated products.
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
                                    <td>32.0–38.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium</td>
                                    <td>19.0–21.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron</td>
                                    <td>Balance</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Molybdenum</td>
                                    <td>2.0–3.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Copper</td>
                                    <td>3.0–4.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese</td>
                                    <td>2.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon</td>
                                    <td>1.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon</td>
                                    <td>0.02</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sulfur</td>
                                    <td>0.005</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Phosphorus</td>
                                    <td>0.02</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Niobium + Tantalum</td>
                                    <td>1.0</td>
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
                                    <td>0.292 lb/in³</td>
                                    <td>8.08 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Shear Modulus</td>
                                    <td>11 × 10³ ksi</td>
                                    <td>76 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Young’s Modulus</td>
                                    <td>28 × 10³ ksi</td>
                                    <td>193 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Specific Heat</td>
                                    <td>0.12 Btu/lb•°F</td>
                                    <td>500 J/kg•°C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Electrical Resistivity</td>
                                    <td>651 ohm·circ mil/ft</td>
                                    <td>1.08 µΩ·m</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Thermal Conductivity</td>
                                    <td>85 Btu·in/ft²·h·°F</td>
                                    <td>12.3 W/m·°C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Coefficient of Thermal Expansion (77–212°F)</td>
                                    <td>8.2 × 10⁻⁶ in/in·°F</td>
                                    <td>14.7 µm/m·°C (25–100°C)</td>
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
                                    <th>Cold Reduction (%)</th>
                                    <th>0%</th>
                                    <th>20%</th>
                                    <th>30%</th>
                                    <th>40%</th>
                                    <th>50%</th>
                                    <th>60%</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Yield Strength (ksi)</td>
                                    <td>44.4</td>
                                    <td>111.0</td>
                                    <td>124.3</td>
                                    <td>127.5</td>
                                    <td>139.5</td>
                                    <td>139.9</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (MPa)</td>
                                    <td>306</td>
                                    <td>765</td>
                                    <td>857</td>
                                    <td>879</td>
                                    <td>962</td>
                                    <td>965</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tensile Strength (ksi)</td>
                                    <td>95.8</td>
                                    <td>119.8</td>
                                    <td>131.5</td>
                                    <td>135.0</td>
                                    <td>147.5</td>
                                    <td>149.3</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tensile Strength (MPa)</td>
                                    <td>661</td>
                                    <td>826</td>
                                    <td>907</td>
                                    <td>931</td>
                                    <td>1017</td>
                                    <td>1029</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elongation (%)</td>
                                    <td>38</td>
                                    <td>13</td>
                                    <td>8</td>
                                    <td>7</td>
                                    <td>4</td>
                                    <td>5</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Hardness (Rockwell)</td>
                                    <td>B83</td>
                                    <td>C23</td>
                                    <td>C28</td>
                                    <td>C27</td>
                                    <td>C30</td>
                                    <td>C31</td>
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
                <h2>Products in Incoloy 020</h2>
            </div>

            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">INCOLOY 020</strong>, is available in a variety of standard mill product
                        forms used in high-performance corrosion-resistant applications. These include:
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
                        <h5>Excellent resistance to sulfuric acid and other strong acids</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>High resistance to pitting and crevice corrosion</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Resists stress corrosion cracking in chloride-bearing environments</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Maintains corrosion resistance even after welding</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Strong mechanical properties and good workability</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Ideal for highly acidic and mixed chemical media environments</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of INCOLOY 020</h2>
                <p class="text-center pb-3"><strong class="text-dark">INCOLOY 020</strong> is a premium
                    nickel-iron-chromium alloy engineered for superior corrosion resistance, especially in aggressive
                    chemical environments involving sulfuric acid, chlorides, and mixed acids. Its balanced composition with
                    copper and molybdenum makes it particularly effective against pitting, crevice corrosion, and stress
                    corrosion cracking. This makes Alloy 020 a preferred material across industries that require durability,
                    safety, and long-term reliability under corrosive and acidic conditions.
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Chemical Processing Industry</h5>
                        <p>Widely used in reactors, heat exchangers, piping systems, columns, evaporators, and storage
                            vessels exposed to sulfuric, nitric, phosphoric, and organic acids.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Pharmaceutical and Food Processing</h5>
                        <p>Ideal for production lines, processing tanks, filtration systems, and reactors requiring high
                            corrosion resistance, cleanliness, and compliance with hygiene standards.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Oil & Gas Sector</h5>
                        <p>Applied in sour gas processing, downhole tubing, manifolds, valves, and separators—especially in
                            environments rich in hydrogen sulfide and chlorides.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Pollution Control and Acid Recovery Systems</h5>
                        <p>Utilized in scrubbers, ductwork, acid regeneration units, and waste collection tanks handling
                            highly corrosive acidic streams.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Marine and Offshore Applications</h5>
                        <p>Suitable for seawater systems, desalination piping, and offshore equipment where pitting and
                            crevice corrosion from chlorides is a concern.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Pulp and Paper Industry</h5>
                        <p>Used in chlorine bleach plants, digesters, and chemical recovery systems that involve acidic or
                            chloride-bearing process fluids.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-capsule"></i></div>
                        <h5>Metal Pickling and Acid Storage</h5>
                        <p>Trusted for storage tanks, piping, and evaporators in acid pickling lines and chemical
                            regeneration systems.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-capsule"></i></div>
                        <h5>Power Generation</h5>
                        <p>Used in condensers, piping systems, and heat exchangers handling acidic cooling fluids or
                            aggressive condensate streams.
                        </p>
                    </div>
                </div>
                <div class=" mt-4 mb-4" style=":;">
                    <div class="">
                        <p class="">
                            <strong class="text-dark">INCOLOY 020’s </strong>remarkable chemical resistance, weldability,
                            and mechanical integrity make it the ideal choice for critical infrastructure where long-term
                            corrosion resistance is essential to plant reliability and operational safety.
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
                        <h5>Industry expertise in corrosion-resistant and nickel-based alloys</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Wide inventory with fast delivery across the globe</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Custom machining and fabrication available</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Products comply with ASTM, ASME, DIN, and international specifications</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Proven quality assurance and competitive pricing</h5>
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
                    <strong>Moksh Tubes & Fittings LLP</strong>Your trusted partner for INCOLOY 020 and high-performance
                    alloy solutions.
                </p>
                <!-- Call button -->
                <a href="tel:+919769584950" class="contact-cta-btn">Get in Touch</a>
            </div>
        </div>
    </section>





@endsection
