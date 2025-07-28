@extends('layouts.master')

@section('title', '800H and 800HT - Moksh Tubes & Fittings LLP')

@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>INCOLOY 800H / 800HT</h1>
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
                    <img src="https://placehold.co/550x400?" alt="Monel K500" class="img-fluid rounded shadow-sm">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> INCOLOY 800H and 800HT</strong> are high-performance alloys designed
                            for superior strength and corrosion resistance in high-temperature environments. These alloys
                            are modifications of <a href="{{ route('materials.incoloy') }}">INCOLOY 800</a>, specifically developed to improve creep and stress rupture
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
                                <tr>
                                    <th>Element</th>
                                    <th>INCOLOY 800H</th>
                                    <th>INCOLOY 800HT</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td>Nickel</td>
                                    <td>30.0 – 35.0</td>
                                    <td>30.0 – 35.0</td>
                                </tr>
                                <tr>
                                    <td>Chromium</td>
                                    <td>19.0 – 23.0</td>
                                    <td>19.0 – 23.0</td>
                                </tr>
                                <tr>
                                    <td>Iron</td>
                                    <td>39.5 min</td>
                                    <td>39.5 min</td>
                                </tr>
                                <tr>
                                    <td>Carbon</td>
                                    <td>0.05 – 0.10</td>
                                    <td>0.06 – 0.10</td>
                                </tr>
                                <tr>
                                    <td>Aluminum</td>
                                    <td>0.15 – 0.60</td>
                                    <td>0.25 – 0.60</td>
                                </tr>
                                <tr>
                                    <td>Titanium</td>
                                    <td>0.15 – 0.60</td>
                                    <td>0.25 – 0.60</td>
                                </tr>
                                <tr>
                                    <td>Al + Ti</td>
                                    <td>0.30 – 1.20</td>
                                    <td>0.85 – 1.20</td>
                                </tr>
                                <tr>
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
                                <tr>
                                    <th>Property</th>
                                    <th>Imperial</th>
                                    <th>Metric</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td>Density</td>
                                    <td>0.287 lb/in³</td>
                                    <td>7.94 g/cm³</td>
                                </tr>
                                <tr>
                                    <td>Melting Range</td>
                                    <td>2475–2525 °F</td>
                                    <td>1357–1385 °C</td>
                                </tr>
                                <tr>
                                    <td>Specific Heat (32–212°F / 0–100°C)</td>
                                    <td>0.11 Btu/lb·°F</td>
                                    <td>460 J/kg·°C</td>
                                </tr>
                                <tr>
                                    <td>Magnetic Permeability at 200 oersteds (15.9 kA/m)</td>
                                    <td>1.014 (Annealed)</td>
                                    <td>1.009 (Hot-Rolled)</td>
                                </tr>
                                <tr>
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
                                <tr>
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
                                <tr>
                                    <td>Tensile Strength (ksi / MPa)</td>
                                    <td>140 / 965</td>
                                    <td>140 / 965</td>
                                    <td>140 / 965</td>
                                    <td>140 / 965</td>
                                    <td>99.3 / 685</td>
                                    <td>167.3 / 1154</td>
                                </tr>
                                <tr>
                                    <td>Yield Strength (0.2% Offset), ksi</td>
                                    <td>126</td>
                                    <td>–</td>
                                    <td>90</td>
                                    <td>84</td>
                                    <td>82</td>
                                    <td>74</td>
                                </tr>
                                <tr>
                                    <td>Yield Strength (0.2% Offset), MPa</td>
                                    <td>868</td>
                                    <td>–</td>
                                    <td>621</td>
                                    <td>579</td>
                                    <td>565</td>
                                    <td>510</td>
                                </tr>
                                <tr>
                                    <td>Tensile Strength, ksi</td>
                                    <td>77.8</td>
                                    <td>67.5</td>
                                    <td>62.7</td>
                                    <td>54.8</td>
                                    <td>47.7</td>
                                    <td>34.2</td>
                                </tr>
                                <tr>
                                    <td>Tensile Strength, MPa</td>
                                    <td>536</td>
                                    <td>465</td>
                                    <td>432</td>
                                    <td>378</td>
                                    <td>329</td>
                                    <td>236</td>
                                </tr>
                                <tr>
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
                            <a href="{{ url('/materials/hastelloy/c22') }}" class="text-decoration-none">
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

    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Contact Us</h2>
                <p>
                    <strong>Moksh Tubes & Fittings LLP</strong> Your trusted partner in high-performance alloy solutions.
                </p>
                <!-- Call button -->
                <a href="tel:+919769584950" class="contact-cta-btn">Get in Touch</a>
            </div>
        </div>
    </section>





@endsection
