@extends('layouts.master')

@section('title', 'Inconel 690 | High-Chromium Corrosion Master Alloy')
@section('meta_description', 'Inconel 690 provides outstanding resistance to oxidizing chemicals and hot gases—trusted in nuclear, chemical, and thermal processing.')
@section('meta_keywords', 'Inconel 690, High-Chromium Alloy, Corrosion Resistant Alloy, Nickel Alloys, Oxidation Resistant Alloy, Nuclear Industry Alloys, Chemical Processing Alloys, Thermal Processing Alloys, High Temperature Alloys, Oxidizing Chemical Resistant Alloys')
@section('canonical', url()->current())

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Inconel 690</h1>
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
                Introduction To Inconel 690 / Alloy 690 / UNS N06690 </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/inconel/Inconel-690.webp') }}" alt="Inconel 690" class="img-fluid rounded shadow-sm">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a premier manufacturer,
                            supplier, exporter, importer, and stockist of<strong class="text-black"> INCONEL 690</strong>
                            (UNS N06690) products in multiple
                            forms such as <a href="{{ route('products.pipes-tubes') }}">Pipes & Tubes</a>, Pipe Fittings,
                            Flanges, Fasteners, Sheets & Plates, Coils, Wires,
                            Round Bars, Flat Bars, Angles, Channels, Welding Rods, Wire Mesh, and customized components.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">INCONEL 690</strong> is a high-chromium, nickel-based alloy known for
                            its excellent resistance to high-temperature oxidation, aqueous corrosion, and especially
                            corrosive attack by hot acidic and caustic solutions. It offers significantly improved
                            performance over INCONEL 600 due to its higher chromium content (30%), which enhances its
                            performance in nuclear steam generators, chemical processing, and marine applications. <a
                                href="{{ route('materials.inconel') }}">INCONEL
                                690</a> also provides superb mechanical strength, metallurgical stability, and weldability
                            for
                            long-term use in demanding environments.
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
                                    <td>58.0 min</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium</td>
                                    <td>27.0 – 31.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron</td>
                                    <td>7.0 – 11.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon</td>
                                    <td>0.05 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon</td>
                                    <td>0.50 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese</td>
                                    <td>0.50 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sulfur</td>
                                    <td>0.015 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Copper</td>
                                    <td>0.50 max</td>
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
                                    <td>0.296 lb/in³</td>
                                    <td>8.19 Mg/m³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Range</td>
                                    <td>2450 – 2510 °F</td>
                                    <td>1343 – 1377 °C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Specific Heat</td>
                                    <td>0.107 Btu/lb•°F</td>
                                    <td>450 J/kg•°C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Permeability at 200 oersteds</td>
                                    <td>1.001</td>
                                    <td>1.001</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Young’s Modulus</td>
                                    <td>30.6 × 10³ ksi</td>
                                    <td>211 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Poisson’s Ratio</td>
                                    <td>0.289</td>
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
                                    <th>Tube, Cold Drawn 0.50 x 0.050 in</th>
                                    <th>Tube, Cold Drawn 0.75 x 0.065 in</th>
                                    <th>Tube, Cold Drawn 3.50 x 0.216 in</th>
                                    <th>Flat, Hot Rolled 0.5 x 2.0 in</th>
                                    <th>Rod, Hot Rolled 2.0 in dia</th>
                                    <th>Rod, Hot Rolled 0.62 in dia</th>
                                    <th>Strip, Cold Rolled 0.150 in thick</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Size (mm)</td>
                                    <td>12.7 x 1.27</td>
                                    <td>19.0 x 1.65</td>
                                    <td>88.9 x 5.49</td>
                                    <td>13 x 51</td>
                                    <td>51 dia</td>
                                    <td>16 dia</td>
                                    <td>3.81</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (ksi)</td>
                                    <td>66.8</td>
                                    <td>55.0</td>
                                    <td>40.9</td>
                                    <td>51.0</td>
                                    <td>48.5</td>
                                    <td>54.0</td>
                                    <td>50.5</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (MPa)</td>
                                    <td>461</td>
                                    <td>379</td>
                                    <td>282</td>
                                    <td>352</td>
                                    <td>334</td>
                                    <td>372</td>
                                    <td>348</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tensile Strength (ksi)</td>
                                    <td>110.0</td>
                                    <td>101.5</td>
                                    <td>94.0</td>
                                    <td>102.0</td>
                                    <td>100.0</td>
                                    <td>107.0</td>
                                    <td>105.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tensile Strength (MPa)</td>
                                    <td>758</td>
                                    <td>700</td>
                                    <td>648</td>
                                    <td>703</td>
                                    <td>690</td>
                                    <td>738</td>
                                    <td>724</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elongation (%)</td>
                                    <td>39</td>
                                    <td>46</td>
                                    <td>52</td>
                                    <td>46</td>
                                    <td>50</td>
                                    <td>44</td>
                                    <td>41</td>
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
                <h2>Products in Inconel 690</h2>
            </div>

            <!-- Highlighted Paragraph -->


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
                        <h5>Outstanding resistance to high-temperature oxidizing environments</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Excellent corrosion resistance in acidic and caustic solutions</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>High strength and stability under long-term service at elevated temperatures</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Superior metallurgical structure and weldability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Excellent resistance to stress corrosion cracking and pitting</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Inconel 690</h2>
                <p class="text-center pb-3"><strong class="text-dark">Inconel 690</strong> is trusted in critical
                    industries where oxidation resistance and structural integrity at high temperatures are essential.
                    Applications include:
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Nuclear Power Generation</h5>
                        <p>Used in steam generator tubing, heat exchangers, and other components exposed to high-pressure
                            and high-temperature steam.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Chemical Processing Plants</h5>
                        <p>Applied in equipment handling hot acidic solutions, oxidizing salts, and caustic environments,
                            including heat exchangers and reactors.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Power Boilers and Heat Recovery Units</h5>
                        <p>Ideal for superheaters, reheaters, and other components subject to high thermal stress and
                            oxidation.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Marine Engineering</h5>
                        <p>Suited for marine heat exchangers, condensers, and other seawater-exposed systems requiring
                            anti-corrosive strength.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Aerospace and Gas Turbines</h5>
                        <p>Used in engine components, combustion liners, and exhaust assemblies needing high-temperature
                            strength and oxidation resistance.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Desalination and Water Treatment Systems</h5>
                        <p>Applied in evaporators and heat transfer equipment where saline and acidic media are present.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-capsule"></i></div>
                        <h5>Food and Beverage Equipment</h5>
                        <p>Deployed in hot water systems, steam sterilization, and handling of acidic/alkaline solutions
                            with hygienic requirements.</p>
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
                        <h5>Proven expertise in nickel-chromium alloy systems</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Access to rare, hard-to-source materials globally</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Reliable supply chain with prompt delivery</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>State-of-the-art processing and testing facilities</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Commitment to quality, performance, and customer satisfaction</h5>
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
                    <strong>Moksh Tubes & Fittings LLP</strong> your trusted source for INCONEL 690 components tailored for
                    high-performance and longevity in corrosive and elevated temperature environments.
                </p>
                <!-- Call button -->
                <a href="tel:+919769584950" class="contact-cta-btn">Get in Touch</a>
            </div>
        </div>
    </section>





@endsection
