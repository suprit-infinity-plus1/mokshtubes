@extends('layouts.master')

@section('title', 'Aluminium 5083 - Moksh Tubes & Fittings LLP')

@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Aluminium 5083</h1>
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
                Introduction To Aluminium 5083
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="https://placehold.co/550x400?" alt="Aluminium 5083" class="img-fluid rounded shadow-sm">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a leading manufacturer,
                            supplier, exporter, importer, and stockist of<strong class="text-black"> Aluminium Alloy 5083
                                <a href="{{ route('products') }}"> products</a></strong> including sheets,
                            plates, bars, rods,<a href="{{ route('products.pipes-tubes') }}"> tubes</a>, and custom
                            fabricated components.
                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">Aluminium 5083</strong> is a non-heat-treatable alloy known for
                            exceptional corrosion resistance, especially in marine and highly corrosive environments. It
                            offers excellent performance in extreme conditions such as seawater exposure, making it a
                            popular choice for marine, automotive, and industrial applications. The alloy is strengthened
                            primarily by magnesium and manganese and exhibits high strength combined with good weldability
                            and formability. 5083 is widely used where strength, corrosion resistance, and weldability are
                            critical.
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
                                    <td>Aluminum</td>
                                    <td>Balance</td>
                                </tr>
                                <tr>
                                    <td>Copper</td>
                                    <td>0.1 max</td>
                                </tr>
                                <tr>
                                    <td>Iron</td>
                                    <td>0.4 max</td>
                                </tr>
                                <tr>
                                    <td>Manganese</td>
                                    <td>0.4 – 1.0</td>
                                </tr>
                                <tr>
                                    <td>Silicon</td>
                                    <td>0.4 max</td>
                                </tr>
                                <tr>
                                    <td>Zinc</td>
                                    <td>0.25 max</td>
                                </tr>
                                <tr>
                                    <td>Titanium</td>
                                    <td>0.15 max</td>
                                </tr>
                                <tr>
                                    <td>Magnesium</td>
                                    <td>4.0 – 4.9</td>
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
                                    <td>0.099 lb/in³</td>
                                    <td>2.66 g/cm³</td>
                                </tr>
                                <tr>
                                    <td>Melting Point</td>
                                    <td>1175 – 1225 °F</td>
                                    <td>635 – 665 °C</td>
                                </tr>
                                <tr>
                                    <td>Elastic Modulus</td>
                                    <td>10.0 × 10³ ksi</td>
                                    <td>69 GPa</td>
                                </tr>
                                <tr>
                                    <td>Thermal Conductivity</td>
                                    <td>120 W/m-K</td>
                                    <td>—</td>
                                </tr>
                                <tr>
                                    <td>Electrical Resistivity</td>
                                    <td>29% IACS</td>
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
                                    <th>Annealed</th>
                                    <th>Hot-Finished</th>
                                    <th>Cold-Drawn</th>
                                    <th>Hot-Rolled</th>
                                    <th>Sheet (H321)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td>Tensile Strength (ksi / MPa)</td>
                                    <td>40–48 / 275–330</td>
                                    <td>45–55 / 310–380</td>
                                    <td>50–60 / 345–415</td>
                                    <td>45–55 / 310–380</td>
                                    <td>45–58 / 310–400</td>
                                </tr>
                                <tr>
                                    <td>Yield Strength (0.2%) (ksi / MPa)</td>
                                    <td>18–25 / 125–170</td>
                                    <td>25–35 / 170–240</td>
                                    <td>30–40 / 210–275</td>
                                    <td>28–35 / 195–240</td>
                                    <td>30–38 / 210–260</td>
                                </tr>
                                <tr>
                                    <td>Elongation (%)</td>
                                    <td>16–23</td>
                                    <td>12–18</td>
                                    <td>10–16</td>
                                    <td>12–18</td>
                                    <td>10–16</td>
                                </tr>
                                <tr>
                                    <td>Brinell Hardness (3000 kg)</td>
                                    <td>75–85</td>
                                    <td>80–90</td>
                                    <td>85–95</td>
                                    <td>80–90</td>
                                    <td>80–90</td>
                                </tr>
                                <tr>
                                    <td>Rockwell Hardness (B / C)</td>
                                    <td>40–55 B</td>
                                    <td>55–65 B</td>
                                    <td>60–70 B</td>
                                    <td>55–65 B</td>
                                    <td>60–70 B</td>
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
                <h2>Products in Aluminium Alloys</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Aluminium 5083</strong> is available in various mill forms such as:
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
                        We supply Aluminium 5083 materials in accordance with the most stringent industry standards: </p>
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
                        <h5>Exceptional corrosion resistance, especially to seawater and industrial chemicals</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>High strength-to-weight ratio</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Excellent weldability and formability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Good fatigue resistance and toughness</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Non-magnetic and resistant to stress corrosion cracking</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Aluminium 5083</h2>
                <p class="text-center pb-3"><strong class="text-dark">Aluminium 5083</strong> is extensively used where
                    corrosion resistance, strength, and weldability are paramount:
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Marine Industry</h5>
                        <p>hipbuilding, boat hulls, offshore platforms, and marine structures exposed to seawater.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Transportation</h5>
                        <p>Truck bodies, trailers, and railway cars requiring lightweight and durable materials.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Pressure Vessels</h5>
                        <p>Used in LPG tanks, cryogenic tanks, and other pressure vessels requiring corrosion resistance.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Automotive</h5>
                        <p>Body panels, frames, and components in vehicles for enhanced performance and corrosion
                            protection.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Industrial Applications</h5>
                        <p>Chemical tanks, piping systems, and structures exposed to corrosive environments.
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
                        <h5>Trusted supplier of premium Aluminium 5083 products
                        </h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Adherence to international quality standards and certifications</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Comprehensive stock availability and fast delivery</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Technical support and customized solutions for your specific requirements</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Commitment to customer satisfaction and product excellence</h5>
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
                    For inquiries, quotations, or custom Aluminium Alloy 5083 solutions, <strong>Moksh Tubes & Fittings
                        LLP</strong> your reliable partner for high-quality aluminum alloy products.</p>
                <!-- Call button -->
                <a href="tel:+919769584950" class="contact-cta-btn">Get in Touch</a>
            </div>
        </div>
    </section>





@endsection
