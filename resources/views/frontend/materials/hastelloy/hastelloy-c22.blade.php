@extends('layouts.master')

@section('title', 'Hastelloy C-22 | Superior All-Around Corrosion-Resistant Alloy')
@section('meta_description', 'Hastelloy C-22 pipes, tubes & fittings with unmatched resistance to oxidizing and reducing agents, exceptional protection against pitting, crevice corrosion, and stress corrosion — ideal for harsh chemical and industrial environments.')
@section('meta_keywords', 'Hastelloy C-22, Hastelloy C22, Corrosion Resistant Alloy, Hastelloy C22 Pipes, Hastelloy C22 Tubes, Hastelloy C22 Fittings, Pitting Resistant Alloy, Crevice Corrosion Resistant, Stress Corrosion Resistant, Chemical Processing Alloys, Industrial Corrosion Resistant Alloys, Durable Nickel Alloys')
@section('canonical', url()->current())

@section('content')


    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Hastelloy C22</h1>
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
                Introduction To Hastelloy C22 / Alloy C22 / UNS N06022 </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/hastelloy/hastelloy-c22.webp') }}" alt="Hastelloy C276"
                        class="img-fluid rounded shadow-sm">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a leading manufacturer,
                            supplier, exporter, importer, and stockist of a comprehensive range of <a
                                href="{{ route('materials.hastelloy') }}">HASTELLOY C-22</a> (UNS
                            N06022) <a href="{{ route('products') }}">products</a> including <a
                                href="{{ route('products.pipes-tubes') }}">Pipes & Tubes</a>, Pipe Fittings,
                            Flanges, Fasteners, Sheets & Plates,
                            Coils, Wires, Round Bars, Flat Bars, Angles, Channels, Welding Rods, Wire Mesh, and other Custom
                            and Hard-to-Find <strong class="text-black">HASTELLOY C22</strong> Products.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">HASTELLOY C22</strong class="text-black"> is a versatile
                            nickel-chromium-molybdenum-tungsten alloy with superior resistance to a broad spectrum of
                            corrosive media. Known for its outstanding resistance to both oxidizing and reducing
                            environments, <strong class="text-black">HASTELLOY C-22</strong> offers protection against
                            pitting, crevice corrosion, and stress corrosion cracking, even in highly aggressive chemical
                            processes involving chlorides, wet chlorine gas, formic and acetic acids, ferric and cupric
                            chlorides, and contaminated media. Its unique chemistry makes it a superior choice over
                            conventional alloys where multiple types of corrosion may occur simultaneously. With excellent
                            formability and weldability, HASTELLOY C22 maintains structural integrity even under extreme
                            thermal and chemical stress, making it indispensable in critical industries.
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
                                    <td>56 (Balance)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium</td>
                                    <td>22</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Molybdenum</td>
                                    <td>13</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron</td>
                                    <td>3</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tungsten</td>
                                    <td>3</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Cobalt</td>
                                    <td>2.5 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese</td>
                                    <td>0.5 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Vanadium</td>
                                    <td>0.35 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon</td>
                                    <td>0.08</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon</td>
                                    <td>0.01 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Phosphorus</td>
                                    <td>0.02 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sulfur</td>
                                    <td>0.02 max</td>
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
                                    <th>Value</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Density</td>
                                    <td>8.89 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Point</td>
                                    <td>1350°C (2460°F)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tensile Strength</td>
                                    <td>115,000 psi / 790 MPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (0.2% Offset)</td>
                                    <td>52,000 psi / 355 MPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elongation</td>
                                    <td>45%</td>
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
                                    <th>Metric</th>
                                    <th>Imperial</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Tensile Strength (@ 538°C / 1000°F)</td>
                                    <td>690 – 790 MPa</td>
                                    <td>100,000 – 115,000 psi</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (0.2% offset @ 427°C / 801°F)</td>
                                    <td>379 MPa</td>
                                    <td>55,000 psi</td>
                                </tr>

                                <tr class="t-row">
                                    <td>Elongation at Break (@ 204°C / 399°F)</td>
                                    <td>45%</td>
                                    <td>45%</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Hardness, Rockwell B (plate)</td>
                                    <td>89 – 100 HRB</td>
                                    <td>89 – 100 HRB</td>
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
                <h2>Products in Hastelloy C22</h2>
            </div>

            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">MOKSH TUBES & FITTINGS LLP</strong>, with years of expertise in
                        nickel-based alloys and an extensive global supply network,offers a complete range <strong
                            class="text-dark">HASTELLOY
                            C22</strong> products. These products are engineered to perform in the most corrosive
                        environments found across industries such as Chemical Processing, Pollution Control, Oil & Gas,
                        Marine, Power Generation, Wastewater Treatment, and more. The unique chemical composition of C22
                        makes it capable of resisting a wide variety of complex and mixed chemical conditions, delivering
                        unmatched durability and reliability for mission-critical applications.
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
                        We offer Hastelloy C22 in a wide range of product forms, including:
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
                        <h5>Exceptional resistance to oxidizing and reducing agents</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Superior pitting, crevice, and stress corrosion cracking resistance</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>High mechanical strength under severe thermal and chemical stress</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Excellent weldability and fabrication capabilities</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Suitable for extremely aggressive and mixed chemical environments</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Hastelloy C22</h2>
                <p class="text-center pb-3"><strong class="text-dark">HASTELLOY C-22</strong> is extensively utilized
                    across industries that demand superior corrosion resistance and long-term mechanical performance in
                    highly aggressive and unpredictable chemical processes. Its multi-purpose capabilities make it an
                    excellent choice for a wide range of critical applications:
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Chemical Processing Industry</h5>
                        <p>Ideal for reactors, heat exchangers, scrubbers, evaporators, columns, storage vessels, and piping
                            systems exposed to highly corrosive chemicals and mixed media</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Pollution Control / FGD Systems</h5>
                        <p>Used for scrubbers, stack liners, ducts, dampers, and other components exposed to wet chlorine
                            gas, sulfur dioxide, and acidic gases.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Oil & Gas Sector</h5>
                        <p>Suitable for sour gas service, subsea equipment, wellhead components, manifolds, separators, and
                            valves requiring resistance to sulfide and chloride stress corrosion.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Marine & Offshore Applications</h5>
                        <p>Used in seawater systems, marine exhausts, cooling systems, and offshore platforms exposed to
                            saltwater and biofouling risks.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Pulp and Paper Industry</h5>
                        <p>Applied in bleach plants, digesters, chemical recovery units, and chlorine dioxide generators
                            handling aggressive bleaching chemicals.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Power Generation and Nuclear Plants</h5>
                        <p>Utilized for heat exchangers, condensers, pressure vessels, and other components exposed to high
                            temperatures and corrosive media.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-capsule"></i></div>
                        <h5>Pharmaceutical & Food Processing</h5>
                        <p>Used for vessels, piping, and systems requiring superior corrosion resistance, hygiene, and
                            compliance with strict quality standards.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-recycle"></i></div>
                        <h5>Wastewater Treatment and Environmental Systems</h5>
                        <p>Deployed for tanks, piping, and filtration equipment exposed to aggressive cleaning agents,
                            biological contaminants, and corrosive effluents.</p>
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
            <p class="text-center pb-3 my-4"><strong class="text-dark">HASTELLOY C-22's</strong> exceptional versatility,
                combined with its outstanding resistance to multiple types of corrosion, makes it the material of choice for
                industries where failure is simply not an option.

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
                        <h5>Specialists in manufacturing high-quality HASTELLOY C-22 products</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Extensive supplier network ensuring the highest grade raw materials</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Proven expertise in nickel alloys and specialty high-performance metals</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Global reach with customized solutions to meet unique project requirements</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Committed to delivering excellence, reliability, and complete customer satisfaction</h5>
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
                    For inquiries, technical assistance, or quotations, contact <strong>Moksh Tubes & Fittings LLP</strong>
                    – your
                    global supplier for <strong>HASTELLOY C-22</strong> products.
                </p>
                <!-- Call button -->
                <a href="tel:+919769584950" class="contact-cta-btn">Get in Touch</a>
            </div>
        </div>
    </section>





@endsection
