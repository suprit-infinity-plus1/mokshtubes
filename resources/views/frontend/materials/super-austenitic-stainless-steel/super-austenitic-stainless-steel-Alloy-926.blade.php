@extends('layouts.master')

@section('title', 'Alloy 926 - Moksh Tubes & Fittings LLP')

@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Alloy 926</h1>
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
                Introduction To Alloy 926/ UNS N08926 / W.Nr. 1.4529
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="https://placehold.co/550x400?" alt="Alloy 926" class="img-fluid rounded shadow-sm">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a leading manufacturer,
                            stockist, importer, and exporter of premium<strong class="text-black"> Alloy 926 (UNS N08926)
                                products</strong> including Pipes &
                            <a href="{{ route('products.pipes-tubes') }}">Tubes & Pipe</a> Fittings, Flanges, Sheets & Plates, Coils, Wires, Round Bars, Welding Rods,
                            Fasteners, and Custom Fabricated Components.
                            <strong class="text-black">Alloy 926</strong> is a super-austenitic stainless steel with
                            enhanced molybdenum (6.5%) and <a href="{{ route('materials.hard-To-Find-And-Special-Alloys') }}">nitrogen</a> additions, delivering excellent resistance to pitting,
                            crevice corrosion, and stress corrosion cracking in aggressive environments. Its high nickel and
                            chromium content provide superior corrosion protection in oxidizing and reducing environments,
                            especially in chloride-bearing solutions. Alloy 926 is ideal for applications in marine,
                            chemical processing, desalination, pulp & paper, and pollution control sectors.
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
                                    <td>24.0 – 26.0</td>
                                </tr>
                                <tr>
                                    <td>Chromium</td>
                                    <td>19.0 – 21.0</td>
                                </tr>
                                <tr>
                                    <td>Molybdenum</td>
                                    <td>6.0 – 7.0</td>
                                </tr>
                                <tr>
                                    <td>Iron</td>
                                    <td>Balance</td>
                                </tr>
                                <tr>
                                    <td>Copper</td>
                                    <td>0.5 – 1.5</td>
                                </tr>
                                <tr>
                                    <td>Nitrogen</td>
                                    <td>0.15 – 0.25</td>
                                </tr>
                                <tr>
                                    <td>Manganese</td>
                                    <td>≤ 2.0</td>
                                </tr>
                                <tr>
                                    <td>Silicon</td>
                                    <td>≤ 0.5</td>
                                </tr>
                                <tr>
                                    <td>Carbon</td>
                                    <td>≤ 0.02</td>
                                </tr>
                                <tr>
                                    <td>Phosphorus</td>
                                    <td>≤ 0.03</td>
                                </tr>
                                <tr>
                                    <td>Sulfur</td>
                                    <td>≤ 0.01</td>
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
                                    <td>0.296 lb/in³</td>
                                    <td>8.20 g/cm³</td>
                                </tr>
                                <tr>
                                    <td>Melting Point</td>
                                    <td>2470 – 2550 °F</td>
                                    <td>1354 – 1399 °C</td>
                                </tr>
                                <tr>
                                    <td>Modulus of Elasticity – Tension</td>
                                    <td>28.0 × 10³ ksi</td>
                                    <td>193 GPa</td>
                                </tr>
                                <tr>
                                    <td>Modulus of Elasticity – Compression</td>
                                    <td>28.0 × 10³ ksi</td>
                                    <td>193 GPa</td>
                                </tr>
                                <tr>
                                    <td>Modulus of Elasticity – Torsion</td>
                                    <td>10.0 × 10³ ksi</td>
                                    <td>69 GPa</td>
                                </tr>
                                <tr>
                                    <td>Poisson’s Ratio</td>
                                    <td>0.30</td>
                                    <td>—</td>
                                </tr>
                                <tr>
                                    <td>Curie Temperature</td>
                                    <td>Not typically applicable</td>
                                    <td>Not typically applicable</td>
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
                                    <th>Annealed</th>
                                    <th>Cold Worked</th>
                                    <th>Solution Treated</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td>Tensile Strength (ksi / MPa)</td>
                                    <td>85–105 ksi / 585–725 MPa</td>
                                    <td>100–120 ksi / 690–830 MPa</td>
                                    <td>85–105 ksi / 585–725 MPa</td>
                                </tr>
                                <tr>
                                    <td>Yield Strength (0.2%) (ksi / MPa)</td>
                                    <td>40–60 ksi / 275–415 MPa</td>
                                    <td>65–90 ksi / 450–620 MPa</td>
                                    <td>40–60 ksi / 275–415 MPa</td>
                                </tr>
                                <tr>
                                    <td>Elongation (%)</td>
                                    <td>30–50%</td>
                                    <td>15–30%</td>
                                    <td>30–50%</td>
                                </tr>
                                <tr>
                                    <td>Hardness (Rockwell B / C)</td>
                                    <td>70–90 B</td>
                                    <td>85–95 B</td>
                                    <td>75–90 B</td>
                                </tr>
                                <tr>
                                    <td>Brinell Hardness (HB)</td>
                                    <td>160–210 HB</td>
                                    <td>200–250 HB</td>
                                    <td>160–210 HB</td>
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
                <h2>Products in Alloy 926</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Alloy 926</strong> is commonly supplied as:
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
                        We supply Alloy 926 materials in accordance with the most stringent industry standards: </p>
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
                        <h5>Superior resistance to pitting (PREN > 40) and crevice corrosion</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Excellent performance in oxidizing and reducing acids</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Outstanding stress corrosion cracking resistance</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>High strength and toughness</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Non-magnetic and suitable for cryogenic service</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Alloy 926</h2>
                <p class="text-center pb-3"><strong class="text-dark">Alloy 926</strong> is engineered to deliver optimal
                    performance in highly corrosive and chloride-rich environments. Its primary industries and applications
                    include:
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Marine Applications</h5>
                        <p>Seawater cooling systems</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Chemical Processing</h5>
                        <p>Tanks and piping in sulfuric, phosphoric, and hydrochloric acid plants
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Oil & Gas Industry</h5>
                        <p>Tubing, piping, and instrumentation in sour gas (H₂S) service
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Desalination & Water Treatment</h5>
                        <p>Evaporators, brine heaters, RO systems, filters, and tubing</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Pulp & Paper Industry</h5>
                        <p>Digesters and bleach plants resistant to chlorides</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Pollution Control & Flue Gas Desulfurization (FGD)</h5>
                        <p>Ducting, scrubbers, and heat exchanger tubes in high chloride environments</p>
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
                        <h5>ISO-certified manufacturing and global sourcing capabilities</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Extensive inventory and fast lead times</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Specialized in nickel alloys and high-performance stainless steels</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>In-house quality testing and inspection facilities</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Custom sizes, lengths, and finishing available on demand</h5>
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
                    <strong>Moksh Tubes & Fittings LLP</strong> Your reliable source for premium Alloy 926 products.
                </p>
                <!-- Call button -->
                <a href="tel:+919769584950" class="contact-cta-btn">Get in Touch</a>
            </div>
        </div>
    </section>





@endsection
