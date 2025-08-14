@extends('layouts.master')

@section('title', 'Haynes Superalloys 160')
@section('meta_description','High-strength Haynes Alloy 160 for extreme heat resistance and corrosion protection. Available in various forms.
')
@section('canonical', url()->current())

@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Haynes Superalloys 160</h1>
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
                Introduction To Haynes Superalloys 160 / UNS N07160
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/haynes /haynes-alloy-160.webp') }}" alt="Haynes-160"
                        class="img-fluid rounded shadow-sm">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a leading manufacturer,
                            supplier, exporter, importer, and stockist of a broad range of<strong class="text-black"> Haynes
                                160 (UNS N07160) <a href="{{ route('products') }}">products</a></strong>.
                            including Pipes & Tubes, Pipe Fittings, Flanges, Fasteners, Sheets & Plates, Coils, Wires, Round
                            Bars, Flat Bars, Angles, Channels, Welding Rods, Wire Mesh, and other custom and hard-to-find
                            Haynes 160 products.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black"><a href="{{ route('materials.haynes-Superalloys') }}">Haynes
                                    Superalloys 160</a></strong class="text-black"> is a nickel-chromium-iron alloy known
                            for its
                            excellent resistance to oxidation and carburization in highly aggressive environments. It offers
                            outstanding high-temperature strength and corrosion resistance, making it an ideal choice for
                            demanding industrial applications.
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
                                    <td>Balance</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium</td>
                                    <td>22.0 – 24.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron</td>
                                    <td>17.0 – 20.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese</td>
                                    <td>≤ 1.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon</td>
                                    <td>≤ 0.35</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon</td>
                                    <td>≤ 0.10</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Aluminum</td>
                                    <td>≤ 0.30</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Titanium</td>
                                    <td>≤ 0.30</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Phosphorus</td>
                                    <td>≤ 0.015</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sulfur</td>
                                    <td>≤ 0.015</td>
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
                                    <th>Imperial</th>
                                    <th>Metric</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Density</td>
                                    <td>0.304 lb/in³</td>
                                    <td>8.43 g/cm³ </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Point</td>
                                    <td>2560–2700 °F</td>
                                    <td>1404–1482 °C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Specific Heat</td>
                                    <td>0.12 Btu/lb·°F</td>
                                    <td>502 J/kg·°C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Curie Temperature</td>
                                    <td>—</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Magnetic Permeability at 200 oersteds (15.9 kA/m)</td>
                                    <td>1.02</td>
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
                                <tr class="t-row">
                                    <th>Property</th>
                                    <th>Plate (Annealed)</th>
                                    <th>Bar/Rod (Annealed)</th>
                                    <th>Sheet (Annealed)</th>
                                    <th>Tube/Cold‑drawn</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Tensile Strength (ksi / MPa)</td>
                                    <td>112 ksi / 774 MPa</td>
                                    <td>111 ksi / 767 MPa</td>
                                    <td>110 ksi / 758 MPa</td>
                                    <td>111 ksi / 767 MPa</td>
                                </tr>
                                {{-- <tr class="t-row">
                                    <td>Tensile Strength (MPa)</td>
                                    <td>379</td>
                                    <td>207</td>
                                    <td>172</td>
                                    <td>138</td>
                                    <td>124</td>
                                    <td>117</td>
                                </tr> --}}
                                <tr class="t-row">
                                    <td>Yield Strength (0.2%) (ksi / MPa)</td>
                                    <td>46 ksi / 321 MPa</td>
                                    <td>45 ksi / 314 MPa</td>
                                    <td>51 ksi / 353 MPa</td>
                                    <td>45 ksi / 314 MPa</td>
                                </tr>
                                {{-- <tr class="t-row">
                                    <td>Yield Strength (MPa)</td>
                                    <td>207</td>
                                    <td>124</td>
                                    <td>103</td>
                                    <td>83</td>
                                    <td>69</td>
                                    <td>62</td>
                                </tr> --}}
                                <tr class="t-row">
                                    <td>Elongation (%)</td>
                                    <td>66 %</td>
                                    <td>68 %</td>
                                    <td>63–68 %</td>
                                    <td>68 %</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Reduction of Area (%)</td>
                                    <td>73 %</td>
                                    <td>–</td>
                                    <td>–</td>
                                    <td>–</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Modulus of Elasticity (GPa)</td>
                                    <td>211 GPa</td>
                                    <td>211 GPa</td>
                                    <td>sheet same as plate</td>
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
                <h2>Products in Haynes Superalloys 160</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Haynes Superalloys 160</strong> is offered in numerous product forms
                        meeting ASTM, ASME, and other standards:
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
                        Haynes Superalloys 160 products are produced to the following global standards:
                    </p>
                </div>
            </div>

            <!-- Product Image Cards (Now centered and responsive) -->
            <div class="row g-4">
                @foreach ($products as $slug => $product)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex">
                        <div class="mx-auto" style="width: 100%; max-width: 300px;">
                            {{-- <a href="{{ url('/materials/nickel-alloys/hastelloy-c276/') }}" class="text-decoration-none"> --}}
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
                        <h5>Excellent oxidation and carburization resistance up to 1100°C (2000°F)</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Strong high-temperature strength and durability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Outstanding corrosion resistance in oxidizing and reducing environments</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Good fabricability and weldability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Resistance to thermal fatigue and creep</h5>
                    </div>
                </div>
                {{-- <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Economical compared to other titanium grades with higher alloy content</h5>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Haynes Superalloys 160</h2>
                <p class="text-center pb-3"><strong class="text-dark">Haynes Superalloys 160</strong> Commonly used in
                    industries requiring reliable performance under extreme conditions:
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Aerospace Industry</h5>
                        <p>Components exposed to high temperatures such as combustion chambers and heat shields</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Industrial Furnaces and Heat Treating</h5>
                        <p>Parts subjected to continuous high temperatures and aggressive atmospheres</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Chemical Processing</h5>
                        <p>Reactors, vessels, and piping exposed to corrosive chemicals</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Power Generation</h5>
                        <p>Gas turbine components and boiler parts</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Environmental Control</h5>
                        <p>Equipment handling flue gas and exhaust streams</p>
                    </div>
                </div>

                {{-- <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Medical and Pharmaceutical Equipment</h5>
                        <p>Favored for surgical tools, implants, and cleanroom processing systems because of its purity and
                            biocompatibility.</p>
                    </div>
                </div> --}}

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
                        <h5>Extensive expertise in delivering high-quality nickel alloys</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Global sourcing of premium raw materials</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Strict quality assurance for consistent product performance</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Custom manufacturing to meet specific project needs</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Dedicated customer support and technical guidance</h5>
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
                    <strong>Moksh Tubes & Fittings LLP</strong> your dependable partner for specialty alloys.
                </p>
                <!-- Call button -->
                <a href="tel:+919769584950" class="contact-cta-btn">Get in Touch</a>
            </div>
        </div>
    </section>





@endsection
