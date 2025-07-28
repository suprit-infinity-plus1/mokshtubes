@extends('layouts.master')

@section('title', 'INCOLOY 825 - Moksh Tubes & Fittings LLP')

@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>INCOLOY 825</h1>
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
                Introduction To Incoloy 825 / Alloy 825 / UNS N08825 </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="https://placehold.co/550x400?" alt="Incoloy 825" class="img-fluid rounded shadow-sm">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a manufacturer, supplier,
                            exporter, importer and stockist of a variety of INCOLOY 825 products such as <a
                                href="{{ route('products.pipes-tubes') }}">Pipes & Tubes</a>,
                            Pipe Fittings, Flanges, Fasteners, Sheets & Plates, Coils, Wires, Round Bars, Flat Bars, Angles,
                            Channels, Welding rods, Wire Mesh, and other Custom and <a href="{{ route('materials.hard-To-Find-And-Special-Alloys') }}">Hard to Find</a> <strong class="text-black">
                                INCOLOY 825 </strong>Products.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">INCOLOY 825</strong class="text-black"> is a nickel-iron-chromium
                            alloy with additions of molybdenum, copper, and <a href="{{ route('materials.titanium') }}">titanium</a>. The alloy offers exceptional
                            resistance to reducing and oxidizing acids, stress-corrosion cracking, pitting, and crevice
                            corrosion. Its unique composition makes it highly suitable for aggressive environments,
                            including those containing sulfuric, phosphoric, and nitric acids. Additionally, the titanium
                            stabilization provides resistance to intergranular corrosion after exposure to sensitization
                            temperatures. With excellent mechanical properties across a wide temperature range, <strong
                                class="text-black"> INCOLOY 825</strong>
                            is a go-to alloy for critical industries where corrosion performance and strength are key.
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
                                    <th>Composition (%)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td>Nickel</td>
                                    <td>38.0 – 46.0</td>
                                </tr>
                                <tr>
                                    <td>Chromium</td>
                                    <td>19.5 – 23.5</td>
                                </tr>
                                <tr>
                                    <td>Iron</td>
                                    <td>Balance</td>
                                </tr>
                                <tr>
                                    <td>Molybdenum</td>
                                    <td>2.5 – 3.5</td>
                                </tr>
                                <tr>
                                    <td>Copper</td>
                                    <td>1.5 – 3.0</td>
                                </tr>
                                <tr>
                                    <td>Titanium</td>
                                    <td>0.6 – 1.2</td>
                                </tr>
                                <tr>
                                    <td>Manganese</td>
                                    <td>1.0 max</td>
                                </tr>
                                <tr>
                                    <td>Silicon</td>
                                    <td>0.5 max</td>
                                </tr>
                                <tr>
                                    <td>Carbon</td>
                                    <td>0.05 max</td>
                                </tr>
                                <tr>
                                    <td>Aluminum</td>
                                    <td>0.2 max</td>
                                </tr>
                                <tr>
                                    <td>Sulfur</td>
                                    <td>0.03 max</td>
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
                                    <td>0.294 lb/in³</td>
                                    <td>8.14 Mg/m³ (or g/cm³)</td>
                                </tr>
                                <tr>
                                    <td>Melting Range</td>
                                    <td>2500–2550 °F</td>
                                    <td>1370–1400 °C</td>
                                </tr>
                                <tr>
                                    <td>Specific Heat</td>
                                    <td>0.105 Btu/lb·°F</td>
                                    <td>440 J/kg·°C</td>
                                </tr>
                                <tr>
                                    <td>Curie Temperature</td>
                                    <td>320 °F</td>
                                    <td>196 °C</td>
                                </tr>
                                <tr>
                                    <td>netic Permeability at 200 oersteds (15.9 kA/m)</td>
                                    <td>1.005</td>
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
                                <tr>
                                    <th>Property</th>
                                    <th>Tubing (Annealed)</th>
                                    <th>Tubing (Cold Drawn)</th>
                                    <th>Bar (Annealed)</th>
                                    <th>Plate (Annealed)</th>
                                    <th>Sheet (Annealed)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td>Tensile Strength (ksi)</td>
                                    <td>112</td>
                                    <td>145</td>
                                    <td>100</td>
                                    <td>96</td>
                                    <td>110</td>
                                </tr>
                                <tr>
                                    <td>Tensile Strength (MPa)</td>
                                    <td>772</td>
                                    <td>1000</td>
                                    <td>690</td>
                                    <td>662</td>
                                    <td>758</td>
                                </tr>
                                <tr>
                                    <td>Yield Strength (0.2%) (ksi)</td>
                                    <td>64</td>
                                    <td>129</td>
                                    <td>47</td>
                                    <td>49</td>
                                    <td>61</td>
                                </tr>
                                <tr>
                                    <td>Yield Strength (MPa)</td>
                                    <td>441</td>
                                    <td>889</td>
                                    <td>324</td>
                                    <td>338</td>
                                    <td>421</td>
                                </tr>
                                <tr>
                                    <td>Elongation (%)</td>
                                    <td>36</td>
                                    <td>15</td>
                                    <td>45</td>
                                    <td>45</td>
                                    <td>39</td>
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
                <h2>Products in Incoloy 825</h2>
            </div>

            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">INCOLOY 825 </strong>, (UNS N08825 / W.Nr. 2.4858) is a trusted material
                        in the world of corrosion-resistant alloys. Known for its excellent performance in aggressive
                        environments—especially those containing acids—this nickel-iron-chromium alloy is commonly found in
                        oil and gas operations, chemical processing, pollution control, and nuclear fuel reprocessing.
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
                        <h5>Outstanding resistance to sulfuric, phosphoric, nitric, and organic acids</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Excellent resistance to pitting, crevice corrosion, and stress corrosion cracking</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>High mechanical strength and reliable performance under thermal stress</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Excellent weldability and formability for ease of fabrication</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Suitable for both oxidizing and reducing environments in critical industries</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of INCOLOY 825</h2>
                <p class="text-center pb-3"><strong class="text-dark">INCOLOY 825</strong> is extensively used in
                    industries where superior corrosion resistance and mechanical reliability are required. Its ability to
                    resist acidic and chloride-laden environments makes it ideal for the following applications:
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Chemical Processing Industry</h5>
                        <p>Used in heat exchangers, evaporators, tanks, and piping systems handling acidic and chloride-rich
                            fluids.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Pollution Control and Flue Gas Systems</h5>
                        <p>Ideal for scrubbers, stack liners, ducts, and other components exposed to harsh chemical fumes
                            and gases.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Oil & Gas Sector</h5>
                        <p>Used in downhole equipment, piping systems, and components exposed to sour gas and offshore
                            environments.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Marine and Offshore Applications</h5>
                        <p>Perfect for seawater cooling systems, marine exhaust systems, and desalination plants.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Acid Production & StorageAerospace & Defense</h5>
                        <p>Reliable in sulfuric and phosphoric acid environments including piping, tanks, and heat
                            exchangers.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Nuclear and Power Generation</h5>
                        <p>Deployed in nuclear fuel reprocessing, heat exchangers, and high-temperature service components.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-capsule"></i></div>
                        <h5>Wastewater Treatment</h5>
                        <p>Ideal for systems exposed to acidic waste, chemical cleaning solutions, and aggressive effluents.
                        </p>
                    </div>
                </div>
                <div class="row mt-4 mb-4" style="text-align: justify;">
                    <div class="col-lg-10">
                        <p class="">
                            <strong class="text-dark">INCOLOY 825’s </strong>unique combination of corrosion
                            resistance, strength, and workability ensures optimal performance in mission-critical
                            applications.
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
                        <h5>Specialists in manufacturing high-quality products</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Strong supplier network for premium raw materials</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Expertise in nickel alloys and high-performance materials</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Global presence with customized solutions for diverse needs</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Dedicated to quality, dependability, and customer satisfaction</h5>
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
                    For any inquiries or to request a quote, reach out to <strong>Moksh Tubes & Fittings LLP</strong> your
                    trusted partner for INCOLOY 825 products.
                </p>
                <!-- Call button -->
                <a href="tel:+919769584950" class="contact-cta-btn">Get in Touch</a>
            </div>
        </div>
    </section>





@endsection
