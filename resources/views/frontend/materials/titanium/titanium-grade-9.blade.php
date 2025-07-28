@extends('layouts.master')

@section('title', 'Titanium Grade 9 - Moksh Tubes & Fittings LLP')

@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Titanium Grade 9</h1>
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
                Introduction To Titanium Grade 9 / Ti-3Al-2.5V / UNS R56320
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="https://placehold.co/550x400?" alt="Titanium Grade 9" class="img-fluid rounded shadow-sm">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a trusted manufacturer,
                            exporter, importer, and stockist of high-performance<strong class="text-black"> Titanium Grade 9
                                (Ti-3Al-2.5V) <a href="{{ route('products') }}">products</a></strong> ,
                            including: Pipes & Tubes, Pipe Fittings, Flanges, Fasteners, Sheets & Plates, Coils, Wires,
                            Round Bars,
                            Flat Bars, Forgings, and Custom Titanium Components.

                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">Titanium Grade 9 </strong>also known as Ti-3Al-2.5V, is a
                            medium-strength alloy offering an excellent balance between strength, formability, and corrosion
                            resistance. It is especially known for its superior weldability and good performance in
                            moderately high temperature and pressure environments. Grade 9 bridges the gap between
                            commercially pure titanium (like Grade 2) and higher strength alloys (like Grade 5), making it
                            ideal for industries that demand light weight, corrosion resistance, and structural
                            strength—without compromising formability.
                        </p>

                        <p>
                            Its composition, combining titanium with 3% aluminum and 2.5% vanadium, gives it excellent
                            resistance to seawater, oxidizing environments, and high-cycle fatigue. From aerospace tubing to
                            marine hardware and sports equipment,<strong class="text-black"> <a href="{{  }}">Titanium Grade 9</a></strong>
                            continues to be a material of choice for
                            mission-critical applications.
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
                                    <td>Titanium</td>
                                    <td>Balance</td>
                                </tr>
                                <tr>
                                    <td>Aluminum</td>
                                    <td>2.5 – 3.5</td>
                                </tr>
                                <tr>
                                    <td>Vanadium</td>
                                    <td>2.0 – 3.0</td>
                                </tr>
                                <tr>
                                    <td>Iron</td>
                                    <td>≤ 0.25</td>
                                </tr>
                                <tr>
                                    <td>Oxygen</td>
                                    <td>≤ 0.15</td>
                                </tr>
                                <tr>
                                    <td>Carbon</td>
                                    <td>≤ 0.08</td>
                                </tr>
                                <tr>
                                    <td>Nitrogen</td>
                                    <td>≤ 0.03</td>
                                </tr>
                                <tr>
                                    <td>Hydrogen</td>
                                    <td>≤ 0.015</td>
                                </tr>
                                <tr>
                                    <td>Other elements</td>
                                    <td>≤ 0.4 (Total)</td>
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
                                    <td>0.163 lb/in³</td>
                                    <td>4.51 g/cm³</td>
                                </tr>
                                <tr>
                                    <td>Melting Point</td>
                                    <td>2630 °F</td>
                                    <td>1443 °C</td>
                                </tr>
                                <tr>
                                    <td>Elastic Modulus</td>
                                    <td>14.9 x 10⁶ psi</td>
                                    <td>102 GPa</td>
                                </tr>
                                <tr>
                                    <td>Thermal Conductivity</td>
                                    <td>10.6 BTU/hr·ft·°F</td>
                                    <td>15.2 W/m·K</td>
                                </tr>
                                <tr>
                                    <td>Electrical Resistivity</td>
                                    <td>23.4 μΩ·cm</td>
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
                                    <td>90</td>
                                    <td>115</td>
                                    <td>95</td>
                                    <td>92</td>
                                    <td>94</td>
                                </tr>
                                <tr>
                                    <td>Tensile Strength (MPa)</td>
                                    <td>620</td>
                                    <td>793</td>
                                    <td>655</td>
                                    <td>634</td>
                                    <td>648</td>
                                </tr>
                                <tr>
                                    <td>Yield Strength (0.2%) (ksi)</td>
                                    <td>70</td>
                                    <td>100</td>
                                    <td>75</td>
                                    <td>72</td>
                                    <td>74</td>
                                </tr>
                                <tr>
                                    <td>Yield Strength (MPa)</td>
                                    <td>483</td>
                                    <td>689</td>
                                    <td>517</td>
                                    <td>496</td>
                                    <td>510</td>
                                </tr>
                                <tr>
                                    <td>Elongation (%)</td>
                                    <td>25</td>
                                    <td>12</td>
                                    <td>20</td>
                                    <td>4</td>
                                    <td>18</td>
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
                <h2>Products in Titanium Grade 9</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Titanium Grade 9 </strong>is renowned for combining strength and
                        formability, making it a versatile choice across several sectors. MOKSH TUBES & FITTINGS LLP offers
                        this alloy in a wide range of product forms tailored for specific industry applications.
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
                        Titanium Grade 9 is produced and tested to meet international specifications:
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
                        <h5>Superior strength-to-weight ratio</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Excellent weldability and formability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Corrosion resistance in marine and chemical environments</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>High fatigue strength and thermal stability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Non-magnetic and biocompatible</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Cost-effective compared to Grade 5 for moderate strength needs</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Titanium Grade 9</h2>
                <p class="text-center pb-3"><strong class="text-dark">Titanium Grade 9</strong> is ideal for industries
                    where performance, corrosion resistance, and weight-saving are essential. Its strength and workability
                    make it a favorite across:
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Aerospace & Aircraft Structures</h5>
                        <p>Used in hydraulic lines, airframes, and pressure vessels.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Marine Industry</h5>
                        <p>Excellent for seawater tubing, boat hardware, and desalination systems.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Chemical & Process Engineering</h5>
                        <p>Corrosion-resistant for heat exchangers, reactor vessels, and piping.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Automotive & Motorsport</h5>
                        <p>Used in exhausts, springs, and structural components for performance vehicles.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Medical Devices</h5>
                        <p>Suitable for surgical instruments and orthopedic implants (non-load-bearing).
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Power Generation</h5>
                        <p>Tubing and fasteners in geothermal, nuclear, and offshore platforms.</p>
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
                        <h5>Experts in Titanium and corrosion-resistant alloys</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>In-house manufacturing and strict quality control</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Wide stock range & custom sizes available</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Global shipping and on-time delivery</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Committed to technical support and customer satisfaction</h5>
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
                    Get in touch with <strong>Moksh Tubes & Fittings LLP</strong> your trusted source for Titanium solutions
                    built to perform.</p>
                <!-- Call button -->
                <a href="tel:+919769584950" class="contact-cta-btn">Get in Touch</a>
            </div>
        </div>
    </section>





@endsection
