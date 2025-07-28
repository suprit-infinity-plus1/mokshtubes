@extends('layouts.master')

@section('title', 'Nickel 200 - Moksh Tubes & Fittings LLP')

@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Nickel 200</h1>
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
                Introduction To Nickel 200 / Alloy 200 / UNS N02200 </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="https://placehold.co/550x400?" alt="Nickel 200" class="img-fluid rounded shadow-sm">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a trusted manufacturer,
                            supplier, exporter, importer, and stockist of a wide range of<strong class="text-black"> NICKEL
                                200 products</strong> including
                            <a href="{{ route('products.pipes-tubes') }}">Pipes & Tubes</a>, Pipe Fittings, Flanges,
                            Fasteners, Sheets & Plates, Coils, Wires, Round Bars,
                            Flat Bars, Angles, Channels, Welding Rods, Wire Mesh, and other Custom and Hard-to-Find <a href="{{ route('materials.nickel-Based-Superalloys') }}">Nickel
                            200</a> Components.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">Nickel 200</strong>, is a commercially pure wrought nickel alloy
                            (99.6% Ni) that offers excellent resistance to a wide range of corrosive environments. It
                            exhibits outstanding mechanical properties and exceptional resistance to alkaline media,
                            especially in caustic soda and other strongly alkaline solutions. This solid-solution
                            strengthened alloy is highly ductile, making it ideal for both hot and cold working, and is
                            particularly suited for applications requiring high thermal and electrical conductivity.
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
                                    <td>99.0</td>
                                </tr>
                                <tr>
                                    <td>Copper</td>
                                    <td>0.25 max</td>
                                </tr>
                                <tr>
                                    <td>Iron</td>
                                    <td>0.40 max</td>
                                </tr>
                                <tr>
                                    <td>Manganese</td>
                                    <td>0.35 max</td>
                                </tr>
                                <tr>
                                    <td>Silicon</td>
                                    <td>0.35 max</td>
                                </tr>
                                <tr>
                                    <td>Carbon</td>
                                    <td>0.15 max</td>
                                </tr>
                                <tr>
                                    <td>Sulfur</td>
                                    <td>0.01 max</td>
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
                                    <td>0.321 lb/in³</td>
                                    <td>8.89 g/cm³</td>
                                </tr>
                                <tr>
                                    <td>Melting Range</td>
                                    <td>2615 – 2635 °F</td>
                                    <td>1435 – 1446 °C</td>
                                </tr>
                                <tr>
                                    <td>Specific Heat</td>
                                    <td>0.109 Btu/lb•°F</td>
                                    <td>456 J/kg•°C</td>
                                </tr>
                                <tr>
                                    <td>Curie Temperature</td>
                                    <td>680 °F</td>
                                    <td>360 °C</td>
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
                                    <th>Rod and Bar (Hot-Finished)</th>
                                    <th>Rod and Bar (Cold-Drawn)</th>
                                    <th>Rod and Bar (CD Annealed or HF Annealed)</th>
                                    <th>Plate (Hot-Rolled)</th>
                                    <th>Plate (Hot-Rolled Annealed)</th>
                                    <th>Sheet (Hard)</th>
                                    <th>Sheet (Annealed)</th>
                                    <th>Strip (Spring)</th>
                                    <th>Strip (Annealed)</th>
                                    <th>Tubing (Stress-Relieved)</th>
                                    <th>Tubing (Annealed)</th>
                                    <th>Cond. & Evap. Tubing (Annealed)</th>
                                    <th>Cond. & Evap. Tubing (Stress-Relieved)</th>
                                    <th>Wire (Annealed)</th>
                                    <th>Wire (No. 1 Temper)</th>
                                    <th>Wire (Spring Temper)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td>Brinell Hardness (MP 3000 kg)</td>
                                    <td>60–85</td>
                                    <td>65–110</td>
                                    <td>55–75</td>
                                    <td>55–100</td>
                                    <td>55–80</td>
                                    <td>90–115</td>
                                    <td>55–75</td>
                                    <td>90–130</td>
                                    <td>55–75</td>
                                    <td>65–110</td>
                                    <td>55–75</td>
                                    <td>55–75</td>
                                    <td>65–110</td>
                                    <td>55–85</td>
                                    <td>70–95</td>
                                    <td>125–145</td>
                                </tr>
                                <tr>
                                    <td>Yield Strength (ksi)</td>
                                    <td>15–45</td>
                                    <td>40–100</td>
                                    <td>15–30</td>
                                    <td>20–80</td>
                                    <td>15–40</td>
                                    <td>70–105</td>
                                    <td>15–30</td>
                                    <td>70–115</td>
                                    <td>15–30</td>
                                    <td>40–90</td>
                                    <td>12–30</td>
                                    <td>15–30</td>
                                    <td>40–90</td>
                                    <td>15–50</td>
                                    <td>40–75</td>
                                    <td>105–135</td>
                                </tr>
                                <tr>
                                    <td>Yield Strength (MPa)</td>
                                    <td>105–310</td>
                                    <td>275–690</td>
                                    <td>105–210</td>
                                    <td>140–550</td>
                                    <td>105–275</td>
                                    <td>480–725</td>
                                    <td>105–210</td>
                                    <td>480–795</td>
                                    <td>105–210</td>
                                    <td>275–620</td>
                                    <td>85–210</td>
                                    <td>105–210</td>
                                    <td>275–620</td>
                                    <td>105–345</td>
                                    <td>275–520</td>
                                    <td>725–930</td>
                                </tr>
                                <tr>
                                    <td>Tensile Strength (ksi)</td>
                                    <td>55–35</td>
                                    <td>35–10</td>
                                    <td>55–40</td>
                                    <td>55–35</td>
                                    <td>60–40</td>
                                    <td>15–2</td>
                                    <td>55–40</td>
                                    <td>15–2</td>
                                    <td>55–40</td>
                                    <td>35–15</td>
                                    <td>60–40</td>
                                    <td>60–40</td>
                                    <td>35–20</td>
                                    <td>50–30</td>
                                    <td>40–20</td>
                                    <td>15–2</td>
                                </tr>
                                <tr>
                                    <td>Elongation % (in 2 in/51 mm)</td>
                                    <td>90–150</td>
                                    <td>140–230</td>
                                    <td>90–120</td>
                                    <td>100–150</td>
                                    <td>90–140</td>
                                    <td>–</td>
                                    <td>–</td>
                                    <td>–</td>
                                    <td>–</td>
                                    <td>–</td>
                                    <td>–</td>
                                    <td>–</td>
                                    <td>–</td>
                                    <td>–</td>
                                    <td>–</td>
                                    <td>–</td>
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
                <h2>Products in NICKEL 200</h2>
            </div>

            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">NICKEL 200 (UNS N02200 / W.Nr. 2.4066) </strong> is known for its purity
                        and resistance to alkaline environments. It is widely used in electrical, chemical, and food
                        processing applications due to its ability to resist corrosion and maintain strength in extreme
                        environments.
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
                        <h5>Excellent corrosion resistance in caustic and alkaline environments</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>High thermal and electrical conductivity</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Suitable for food processing and handling due to high purity</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Outstanding ductility and mechanical strength</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Resistant to neutral and alkaline salt solutions</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Easy to fabricate and weld using conventional techniques</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Nickel 200</h2>
                <p class="text-center pb-3"><strong class="text-dark">Nickel 200</strong> is a preferred material in
                    industries where purity, resistance to alkalis, and non-magnetic properties are critical. Typical
                    applications include:
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Chemical Processing</h5>
                        <p>Used in tanks, vessels, and piping for caustic soda, caustic potash, and chlor-alkali production.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Electronics & Electrical</h5>
                        <p>Ideal for battery components, electrical contacts, terminals, and lead wires due to its
                            conductivity.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Food Processing</h5>
                        <p>Used in handling of fatty acids, fruits, and caustic cleaning solutions.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Aerospace & Defense</h5>
                        <p>Deployed in precision instrumentation and radar/electronics components.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Marine & Offshore</h5>
                        <p>Corrosion-resistant fasteners and components exposed to seawater and saline atmospheres.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Heat Exchangers</h5>
                        <p>Preferred in systems requiring purity and thermal conductivity under caustic conditions.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-capsule"></i></div>
                        <h5>Medical Equipment</h5>
                        <p>Used in equipment requiring non-reactive and clean-contact materials.</p>
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
                        <h5>Decades of experience in supplying high-performance nickel alloys</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Wide inventory and fast delivery on Nickel 200 materials</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Advanced testing and quality assurance protocols</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Custom machining and cutting services available</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Global network for sourcing and logistics</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>ISO-certified production and export operations</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Commitment to material traceability and customer satisfaction</h5>
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
                    Reach out to <strong>Moksh Tubes & Fittings LLP</strong> your reliable partner for premium nickel alloy
                    products.
                </p>
                <!-- Call button -->
                <a href="tel:+919769584950" class="contact-cta-btn">Get in Touch</a>
            </div>
        </div>
    </section>





@endsection
