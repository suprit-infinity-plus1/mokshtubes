@extends('layouts.master')

@section('title', 'Hastelloy G3 - Moksh Tubes & Fittings LLP')

@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Hastelloy G3</h1>
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
                Introduction To Hastelloy G-3 /Alloy G-3 / UNS N06985
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="https://placehold.co/550x400?" alt="Hastelloy C276" class="img-fluid rounded shadow-sm">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a reliable manufacturer,
                            supplier, exporter, importer, and stockist of ALLOY G-3 (UNS N06985) in various <a
                                href="{{ route('products') }}">product</a> forms
                            including <a href="{{ route('products.pipes-tubes') }}">Pipes & Tubes</a>, Pipe Fittings,
                            Flanges, Fasteners, Sheets & Plates, Coils, Wires, Round
                            Bars, Flat Bars, Angles, Channels, Welding Rods, Wire Mesh, and other customized or special
                            components.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black"><a href="{{ route('materials.hastelloy') }}">HASTELLOY G3</a></strong class="text-black"> is a nickel-chromium-iron
                            alloy with additions of molybdenum and copper, specifically designed to resist a broad range of
                            oxidizing and reducing chemicals. It offers excellent resistance to sulfuric acid, phosphoric
                            acid, nitric acid, and other strongly corrosive environments. Its improved weldability and lower
                            sensitivity to thermal cracking (compared to other high-nickel alloys) make it a preferred
                            choice in chemical process and pollution control equipment. The alloy resists intergranular
                            corrosion and maintains strength even after welding.
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
                                    <td>47.0 – 50.0</td>
                                </tr>
                                <tr>
                                    <td>Chromium</td>
                                    <td>20.0 – 23.5</td>
                                </tr>
                                <tr>
                                    <td>Molybdenum</td>
                                    <td>6.0 – 8.0</td>
                                </tr>
                                <tr>
                                    <td>Iron</td>
                                    <td>18.0 – 21.0</td>
                                </tr>
                                <tr>
                                    <td>Cobalt</td>
                                    <td>5.0 max</td>
                                </tr>
                                <tr>
                                    <td>Manganese</td>
                                    <td>2.0 max</td>
                                </tr>
                                <tr>
                                    <td>Silicon</td>
                                    <td>0.6 max</td>
                                </tr>
                                <tr>
                                    <td>Carbon</td>
                                    <td>0.03 max</td>
                                </tr>
                                <tr>
                                    <td>Copper</td>
                                    <td>1.5 – 2.5</td>
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
                                    <th>Value</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td>Density</td>
                                    <td>8.22 g/cm³</td>
                                </tr>
                                <tr>
                                    <td>Melting Point</td>
                                    <td>1350–1395°C (2462–2543°F)</td>
                                </tr>
                                <tr>
                                    <td>Tensile Strength</td>
                                    <td>95,000 psi / 655 MPa</td>
                                </tr>
                                <tr>
                                    <td>Yield Strength (0.2% Offset)</td>
                                    <td>43,000 psi / 295 MPa</td>
                                </tr>
                                <tr>
                                    <td>Elongation</td>
                                    <td>45 %</td>
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
                                    <th>Metric</th>
                                    <th>Imperial</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td>Tensile Strength (@ 538°C / 1000°F)</td>
                                    <td>586 MPa</td>
                                    <td>85,000 psi</td>
                                </tr>
                                <tr>
                                    <td>Yield Strength (0.2% offset @ 427°C / 801°F)</td>
                                    <td>276 MPa</td>
                                    <td>40,000 psi</td>
                                </tr>
                                <tr>
                                    <td>Elastic Modulus (RT)</td>
                                    <td>208 GPa</td>
                                    <td>30,000 ksi</td>
                                </tr>
                                <tr>
                                    <td>Elongation at Break (@ 204°C / 399°F)</td>
                                    <td>45%</td>
                                    <td>45%</td>
                                </tr>
                                <tr>
                                    <td>Hardness, Rockwell B (plate)</td>
                                    <td>88</td>
                                    <td>88</td>
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
                <h2>Products in Hastelloy G3</h2>
            </div>

            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">MOKSH TUBES & FITTINGS LLP</strong>, with specialized capabilities in
                        corrosion-resistant materials offers ALLOY G-3 products trusted across demanding industrial sectors.
                        Known for its performance in mixed acid environments and welding stability, G-3 is especially
                        suitable for critical chemical processing systems.
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
                        We offer Hastelloy G3 in a wide range of product forms, including:
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
                        <h5>Excellent corrosion resistance in both oxidizing and reducing acids</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Superior resistance to phosphoric, sulfuric, nitric, and hydrochloric acids</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Stable mechanical properties after welding or high-heat exposure</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Reduced sensitivity to intergranular corrosion and weld cracking</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Good formability and fabricability across industrial settings</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Long-lasting performance in aggressive chemical service</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Hastelloy G3</h2>
                <p class="text-center pb-3"><strong class="text-dark">HASTELLOY G-3</strong> is a versatile and reliable
                    material used in systems where chemical resistance and weldability are both required. Common
                    applications include:
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Chemical Processing Industry</h5>
                        <p>Used in tanks, piping, heat exchangers, valves, and pressure vessels exposed to aggressive acidic
                            media.x`</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Pollution Control and Environmental Systems</h5>
                        <p>Applied in flue gas scrubbers, stack liners, and equipment exposed to acid condensates.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Fertilizer and Agricultural Chemical Production</h5>
                        <p>Ideal for handling nitric-phosphoric-sulfuric acid blends and aggressive liquid fertilizers.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Pickling and Acid Regeneration Plants</h5>
                        <p>Used in tanks, ducts, and processing components exposed to concentrated acids.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Waste Treatment Systems</h5>
                        <p>Employed in treatment tanks and pipework in contact with chemical-laden wastewater.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Pharmaceutical and Food Sectors</h5>
                        <p>Used in corrosive environments requiring high-purity and hygienic performance.</p>
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
            <p class="text-center pb-3 my-4"><strong class="text-dark">HASTELLOY G-3's</strong> with its broad-spectrum
                corrosion resistance and excellent mechanical strength, HASTELLOY G-3 delivers long-term performance in
                environments where other alloys simply can’t hold up.

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
                        <h5>Trusted supplier of high-performance nickel and specialty alloys</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Large inventory with flexible sizes and global shipping</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Strong vendor network and global supply chain</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Adherence to ASTM, ASME, and international quality standards</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Responsive customer service and expert technical assistance</h5>
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
                    <strong>Moksh Tubes & Fittings LLP</strong> for pricing, availability, or technical queries related to
                    <strong>HASTELLOY G-3</strong> your dependable partner for corrosion-resistant alloy solutions built to
                    last in the harshest industrial conditions.
                </p>
                <!-- Call button -->
                <a href="tel:+919769584950" class="contact-cta-btn">Get in Touch</a>
            </div>
        </div>
    </section>





@endsection
