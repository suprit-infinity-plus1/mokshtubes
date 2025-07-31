@extends('layouts.master')

@section('title', 'Copper Alloys C44300 - Moksh Tubes & Fittings LLP')

@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Copper Alloys C44300</h1>
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
                Introduction To Copper Alloys C44300 ADMIRALTY BRASS
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="https://placehold.co/550x400?"alt="Copper Alloys C44300" class="img-fluid rounded shadow-sm">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a reputed manufacturer,
                            supplier, and exporter of high-quality<strong class="text-black"> C44300 Admiralty Brass <a
                                    href="{{ route('products') }}">products</a></strong> including tubes, pipes,
                            sheets, plates, coils, and customized fabricated items. C44300, also known as Admiralty Brass,
                            is a copper-zinc alloy with a small addition of tin (around 1%) and arsenic, which enhances its
                            corrosion resistance—especially against dezincification in marine and brackish water
                            environments.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black"><a href="{{ route('materials.copper-Alloys') }}">Copper Alloys
                                    C44300</a></strong>, is particularly suited for heat exchangers and condenser tubes due
                            to its superior corrosion resistance, high thermal conductivity, and good mechanical strength.
                            It is one of the most commonly used brass alloys in marine and desalination applications.
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
                                    <td>Copper</td>
                                    <td>70.0 – 73.0</td>
                                </tr>
                                <tr>
                                    <td>Zinc</td>
                                    <td>Balance</td>
                                </tr>
                                <tr>
                                    <td>Tin</td>
                                    <td>0.9 – 1.2</td>
                                </tr>
                                <tr>
                                    <td>Arsenic</td>
                                    <td>0.02 – 0.06</td>
                                </tr>
                                <tr>
                                    <td>Lead</td>
                                    <td>0.07 max</td>
                                </tr>
                                <tr>
                                    <td>Iron</td>
                                    <td>0.06 max</td>
                                </tr>
                                {{-- <tr>
                                    <td>Phosphorus</td>
                                    <td>≤ 0.035</td>
                                    <td>≤ 0.035</td>
                                    <td>≤ 0.035</td>
                                </tr>
                                <tr>
                                    <td>Sulfur</td>
                                    <td>≤ 0.03</td>
                                    <td>≤ 0.03</td>
                                    <td>≤ 0.03</td>
                                </tr>
                                <tr>
                                    <td>Nitrogen</td>
                                    <td>0.20 – 0.30</td>
                                    <td>0.20 – 0.30</td>
                                    <td>0.20 – 0.30</td>
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
                                <tr>
                                    <th>Property</th>
                                    <th>Imperial</th>
                                    <th>Metric</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td>Density</td>
                                    <td>0.307 lb/in</td>
                                    <td>8.49 g/cm³</td>
                                </tr>
                                <tr>
                                    <td>Melting Point</td>
                                    <td>1630–1660 °F</td>
                                    <td>888–905 °C</td>
                                </tr>
                                <tr>
                                    <td>Thermal Conductivity</td>
                                    <td>64 Btu/ft·hr·°F</td>
                                    <td>111 W/m·K</td>
                                </tr>
                                <tr>
                                    <td>Electrical Conductivity</td>
                                    <td>28% IACS</td>
                                    <td>—</td>
                                </tr>
                                <tr>
                                    <td>Specific Heat</td>
                                    <td>0.09 Btu/lb·°F</td>
                                    <td>377 J/kg·K</td>
                                </tr>
                                <tr>
                                    <td>Coefficient of Expansion</td>
                                    <td>10.2 µin/in·°F</td>
                                    <td>18.5 µm/m·K</td>
                                </tr>
                                {{-- <tr>
                                    <td>Specific Heat Capacity</td>
                                    <td>460 J/kg·K</td>
                                    <td>460 J/kg·K</td>
                                </tr> --}}
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
                                    <th>Plate – Hot-Rolled (M20)</th>
                                    <th>Strip – O50 Soft Annealed</th>
                                    <th>Strip – O60 Soft Annealed</th>
                                    <th>Tube (OS025)</th>
                                    <th>Wire (OS015)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td>Tensile Strength (ksi / MPa)</td>
                                    <td>48 ksi / 331 MPa </td>
                                    <td>48 ksi / 331 MPa</td>
                                    <td>45 ksi / 310 MPa</td>
                                    <td>53 ksi / 365 MPa</td>
                                    <td>55 ksi / 379 MPa</td>
                                </tr>
                                <tr>
                                    <td>Yield Strength (0.2%) (ksi / MPa)</td>
                                    <td>18 ksi / 124 MPa</td>
                                    <td>14 ksi / 97 MPa</td>
                                    <td>13 ksi / 90 MPa</td>
                                    <td>22 ksi / 152 MPa</td>
                                    <td>60 ksi? (likely psi typo; skip)</td>
                                </tr>
                                <tr>
                                    <td>Elongation (%)</td>
                                    <td>65% (0 mm section)</td>
                                    <td>62%</td>
                                    <td>69%</td>
                                    <td>65%</td>
                                    <td>—</td>
                                </tr>
                                <tr>
                                    <td>Hardness</td>
                                    <td>70 HV / 70 F</td>
                                    <td>69 HV / 69 F</td>
                                    <td>—</td>
                                    <td>75 F</td>
                                    <td>—</td>
                                </tr>
                                <tr>
                                    <td>Brinell Hardness </td>
                                    <td>—</td>
                                    <td>—</td>
                                    <td>—</td>
                                    <td>—</td>
                                    <td>—</td>
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
                <h2>Products in Copper Alloys C44300</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Copper Alloys C44300</strong> is available in:
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
                        Copper Alloys C44300 products are produced to the following global standards:
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
                        <h5>Excellent corrosion resistance in marine & brackish waters</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Good thermal conductivity for heat exchange applications</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>High resistance to dezincification (due to tin & arsenic)</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Good ductility and ease of fabrication</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Long service life in aggressive environments</h5>
                    </div>
                </div>
            </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Copper Alloys C44300</h2>
                <p class="text-center pb-3"><strong class="text-dark">Copper Alloys C44300</strong> is widely chosen for
                    its
                    unmatched combination of high strength, corrosion resistance, and non-magnetic properties, making it
                    indispensable in:</p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Electrical & Electronics</h5>
                        <p>Connectors, contacts, switches, relays, springs, EMI shielding</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Marine & Shipbuilding</h5>
                        <p>Condenser and heat exchanger tubing</p>
                        <p>Saltwater piping and cooling systems</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Power & Desalination Plants</h5>
                        <p>Tube bundles in evaporators and heaters</p>
                        <p>Heat transfer tubes in multi-stage flash (MSF) systems</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>HVAC & Industrial Applications</h5>
                        <p>Condenser coils, air conditioning units, refrigeration piping</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Petrochemical Industry</h5>
                        <p>Non-oxidizing acid handling components</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Plumbing</h5>
                        <p>Water heaters, geysers, and industrial plumbing fittings</p>
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
                        <h5>Superior Product Quality: Adherence to global metallurgical standards</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Extensive Inventory: Large stock of standard and customized sizes</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Custom Manufacturing: Tailor-made solutions for critical applications</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Quick Delivery: Efficient logistics and export packaging</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Global Reach: Serving marine, HVAC, energy, and desalination sectors worldwide</h5>
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
                    contact <strong >Moksh Tubes & Fittings LLP</strong> — your trusted partner in
                    premium copper alloy solutions.
                    <!-- Call button -->
                    <a href="tel:+919769584950" class="contact-cta-btn">Get in Touch</a>
            </div>
        </div>
    </section>





@endsection
