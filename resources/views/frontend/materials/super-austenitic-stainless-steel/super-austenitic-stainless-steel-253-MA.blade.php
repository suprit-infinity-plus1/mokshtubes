@extends('layouts.master')

@section('title', '253 MA - Moksh Tubes & Fittings LLP')

@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>253 MA</h1>
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
                Introduction To 253 MA / UNS S30815 / EN 1.4835
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="https://placehold.co/550x400?" alt="253 MA" class="img-fluid rounded shadow-sm">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a trusted manufacturer,
                            supplier, exporter, and stockist of 253 MA (UNS S30815 / EN 1.4835) – a high-temperature
                            austenitic stainless steel designed for excellent oxidation resistance, high creep strength, and
                            good structural stability. We offer a broad range of<strong class="text-black"> 253 MA
                                products</strong> including <a href="{{ route('products.pipes-tubes') }}">Pipes & Tubes</a>,
                            Fittings, Flanges, Fasteners, Sheets & Plates, Bars, Wire Mesh, and Custom Components.

                        <p> <strong class="text-black">253 MA</strong> Originally developed by Outokumpu, 253 MA combines
                            moderate <a href="{{ route('materials.nickel-Based-Superalloys') }}">nickel</a> content with rare earth and alkali metal additions, delivering superior strength
                            and oxidation resistance at elevated temperatures (up to 1150°C / 2100°F). It is ideal for
                            applications involving high thermal stresses, cyclic heating, and corrosive industrial
                            atmospheres.
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
                                    <td>10.0 – 12.0</td>
                                </tr>
                                <tr>
                                    <td>Chromium</td>
                                    <td>20.0 – 22.0</td>
                                </tr>
                                <tr>
                                    <td>Carbon</td>
                                    <td>0.05 – 0.10</td>
                                </tr>
                                <tr>
                                    <td>Silicon</td>
                                    <td>1.40 – 2.00</td>
                                </tr>
                                <tr>
                                    <td>Manganese</td>
                                    <td>≤ 0.80</td>
                                </tr>
                                <tr>
                                    <td>Nitrogen</td>
                                    <td>0.14 – 0.20</td>
                                </tr>
                                <tr>
                                    <td>Rare Earth Metals</td>
                                    <td>0.05</td>
                                </tr>
                                <tr>
                                    <td>Iron</td>
                                    <td>Balance</td>
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
                                    <td>0.289 lb/in³</td>
                                    <td>8.00 g/cm³</td>
                                </tr>
                                <tr>
                                    <td>Melting Point</td>
                                    <td>2475 – 2550 °F</td>
                                    <td>1357 – 1399 °C</td>
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
                                    <td>75–95 ksi / 520–655 MPa</td>
                                    <td>90–110 ksi / 620–760 MPa</td>
                                    <td>90–115 ksi / 620–790 MPa</td>
                                </tr>
                                <tr>
                                    <td>Yield Strength (0.2%) (ksi / MPa)</td>
                                    <td>30–50 ksi / 205–345 MPa</td>
                                    <td>60–90 ksi / 415–620 MPa</td>
                                    <td>65–90 ksi / 450–620 MPa</td>
                                </tr>
                                <tr>
                                    <td>Elongation (%)</td>
                                    <td>30–50%</td>
                                    <td>15–30%</td>
                                    <td>15–30%</td>
                                </tr>
                                <tr>
                                    <td>Hardness (Rockwell B / C)</td>
                                    <td>70–90 B</td>
                                    <td>80–95 B</td>
                                    <td>80–95 B</td>
                                </tr>
                                <tr>
                                    <td>Brinell Hardness (HB)</td>
                                    <td>150–200 HBB</td>
                                    <td>180–230 HB</td>
                                    <td>180–230 HB</td>
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
                <h2>Products in 253 MA</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">253 MA</strong> is commonly supplied as:
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
                        We supply 253 MA materials in accordance with the most stringent industry standards: </p>
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
                        <h5>High oxidation resistance up to 1150°C (2100°F)</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Outstanding creep rupture strength</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Excellent structural stability at elevated temperatures</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Good weldability and fabricability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Lower nickel content for cost efficiency compared to other heat-resistant alloys </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of 253 MA</h2>
                <p class="text-center pb-3"><strong class="text-dark">253 MA</strong> is designed for use in
                    high-temperature, high-stress, and highly oxidizing environments. Its unique combination of strength,
                    oxidation resistance, and formability makes it suitable for:
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Heat Treatment Equipment</h5>
                        <p>Furnace parts, rollers, supports, and radiant tubes for continuous and batch furnaces.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Petrochemical Industry</h5>
                        <p>Reformer tubes, manifolds, burners, and catalyst supports in hydrogen and syngas production.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Power Generation</h5>
                        <p>Boiler components, heat exchangers, and superheater tubes subjected to high heat.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Cement & Lime Kilns</h5>
                        <p>Lifters, anchor bolts, and refractory supports in rotary kilns.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Incineration & Waste Processing</h5>
                        <p>Chambers, ash hoppers, and grates in solid waste and biomass incinerators.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Steel & Glass Manufacturing</h5>
                        <p>Conveyor belts, flame shields, and hot zones in metal and glass processing.</p>
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
                        <h5>Moksh Tubes & Fittings LLP is a pioneer in supplying high-performance heat-resistant alloys like
                            253 MA</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Rigorous quality control and mill certifications (EN 10204 3.1 / 3.2 available)</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Worldwide logistics with ready-to-ship inventory</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Custom sizes and rapid turnaround for industrial clients</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Experienced technical team and metallurgical support</h5>
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
                    <strong>Moksh Tubes & Fittings LLP</strong> for quotations, product inquiries, or technical support:
                </p>
                <!-- Call button -->
                <a href="tel:+919769584950" class="contact-cta-btn">Get in Touch</a>
            </div>
        </div>
    </section>





@endsection
