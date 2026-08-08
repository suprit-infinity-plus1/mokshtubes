@extends('layouts.master')

@section('title', 'Titanium Grade 7 – Corrosion Resistant Titanium Alloy') <!-- 52 chars -->
@section('meta_description', 'Titanium Grade 7 – excellent corrosion resistance in oxidizing and reducing environments,
    ideal for chemical, marine, and industrial applications.')
@section('meta_keywords', 'Titanium Grade 7, Corrosion Resistant Titanium, Titanium Grade 7 Pipes, Titanium Grade 7
    Tubes, Titanium Grade 7 Sheets, Oxidizing Resistant Titanium, Reducing Environment Titanium, Chemical Industry Titanium,
    Industrial Titanium Alloys, High Performance Titanium')
@section('og_image', asset('assets/images/titanium/titanium-7.webp'))
@section('og_type', 'article')
@section('content')
<section class="breadcrumb-area" style="background-image: url(/assets/images/titanium/titanium-7.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Titanium Grade 7 <br> High Corrosion Resistant Alloy</h1>
                </div>
            </div>
        </div>
    </section>

<div class="sticky-top bg-white border-bottom material-tabs  w-100">
        <div class="container">
            <a href="#overview">Overview</a> |
            <a href="#specification">Specifications</a> |
            <a href="#composition">Chemical Composition</a> |
            <a href="#mechanical">Mechanical Properties</a> |
            <a href="#price">Advantages</a> |
            <a href="#applications">Applications</a> |
            <a href="#faq">FAQ</a> |
            <a href="#contact-us">Contact Us</a>
        </div>
    </div>

<section id="overview" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Product Overview</h2>
            </div>

            <h2 class="fw-semibold text-center mb-5" style="color: #db7227;">
                Introduction To Titanium Grade 7 / UNS R52400
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/titanium/titanium-7.webp') }}" alt="Titanium Grade 7"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a trusted manufacturer,
                            supplier, exporter, importer, and stockist of premium<strong class="text-black"> Titanium Grade
                                7 <a href="{{ route('products') }}">products</a>.</strong> Our inventory
                            includes <a href="{{ route('products.pipes-tubes') }}">Pipes & Tubes</a>, Pipe Fittings,
                            Flanges, Fasteners, Sheets & Plates, Coils, Wires, Round
                            Bars, Welding Rods, Wire Mesh, and custom-engineered components designed to meet the most
                            demanding specifications.

                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">Titanium Grade 7 </strong>is a commercially pure titanium alloy with
                            a small addition of palladium (0.12–0.25%), enhancing its corrosion resistance—particularly in
                            strong reducing acids and brines. With excellent weldability, ductility, and mechanical
                            properties, this alloy is ideal for severe industrial environments. Its ability to withstand
                            crevice corrosion and pitting even in highly acidic and chloride-rich systems makes it a
                            standout choice in critical applications where both performance and reliability are paramount.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Titanium Grade 7 Datasheet</h3>
            <p class="mb-3">
                Get the complete Titanium Grade 7 datasheet with chemical composition,
                mechanical properties, heat treatment details, and applications.
                Enter your email to receive the PDF instantly.
            </p>

            <!-- Lead Capture Form -->
            <form id="leadForm" method="POST" action="{{ route('lead.capture') }}" class="mb-3">
                @csrf

                <input type="hidden" name="page_path" value="{{ $slug }}">

                <div class="row justify-content-center">
                    <div class="col-md-6 mb-2">
                        <input type="email" name="email" required class="form-control p-3"
                            placeholder="Enter your email address">
                    </div>

                    <div class="col-md-3 mb-2">
                        <button type="submit" class="btn btn-lg w-100 text-white"
                            style="background-color:#db7227; border-radius:8px;">
                            Get Datasheet
                        </button>
                    </div>
                </div>
            </form>

            @if (session('success'))
                <div class="alert alert-success mt-3">
                    {{ session('success') }}
                </div>
            @endif

            <p class="small text-muted">
                We respect your privacy. Your email will only be used to send the datasheet.
            </p>
        </div>
    </section>

<section class="sec-padd-top" id="specification">
        <div class="container">
            <div class="section-title center">
                <h2>Specifications of Titanium Grade 7 (UNS R60702)</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Category</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td>Grade</td>
                                    <td>Titanium Grade 7 / UNS R60702</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Type</td>
                                    <td>Commercially Pure Titanium</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Standards</td>
                                    <td>ASTM B551, B523, B658, B493, B550</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Forms</td>
                                    <td>Pipes, Tubes, Sheets, Plates, Rods, Wire, Fittings, Flanges, Fasteners</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Testing</td>
                                    <td>Chemical Analysis, PMI, Tensile, Hardness</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Certification</td>
                                    <td>EN 10204 3.1 / 3.2</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section id="composition" class="sec-padd-top sec-padd-bottom">
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
                                    <td>Titanium</td>
                                    <td>Balance</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Palladium</td>
                                    <td>0.12 – 0.25</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron</td>
                                    <td>≤ 0.30</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Oxygen</td>
                                    <td>≤ 0.25</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon</td>
                                    <td>≤ 0.08</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nitrogen</td>
                                    <td>≤ 0.03</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Other Elements</td>
                                    <td>≤ 0.40 (Total Max)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Hydrogen</td>
                                    <td>≤ 0.015</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

{{-- 
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
                                    <td>0.163 lb/in³</td>
                                    <td>4.51 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Point</td>
                                    <td>3020 °F</td>
                                    <td>1660 °C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elastic Modulus</td>
                                    <td>14.9 x 10⁶ psi</td>
                                    <td>102 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Thermal Conductivity</td>
                                    <td>10.6 BTU/hr·ft·°F</td>
                                    <td>15.2 W/m·K</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Electrical Resistivity</td>
                                    <td>20.0 μΩ·in</td>
                                    <td>50 μΩ·cm</td>
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
                                    <th>Tubing (Annealed)</th>
                                    <th>Tubing (Cold Drawn)</th>
                                    <th>Bar (Annealed)</th>
                                    <th>Plate (Annealed)</th>
                                    <th>Sheet (Annealed)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Tensile Strength (ksi)</td>
                                    <td>70</td>
                                    <td>90</td>
                                    <td>75</td>
                                    <td>71</td>
                                    <td>75</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tensile Strength (MPa)</td>
                                    <td>483</td>
                                    <td>620</td>
                                    <td>517</td>
                                    <td>490</td>
                                    <td>517</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (0.2%) (ksi)</td>
                                    <td>50</td>
                                    <td>70</td>
                                    <td>55</td>
                                    <td>52</td>
                                    <td>55</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (MPa)</td>
                                    <td>345</td>
                                    <td>483</td>
                                    <td>379</td>
                                    <td>359</td>
                                    <td>379</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elongation (%)</td>
                                    <td>30</td>
                                    <td>18</td>
                                    <td>25</td>
                                    <td>4</td>
                                    <td>24</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
--}}

<section class="sec-padd-top sec-padd-bottom" id="mechanical">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color:#174268;">
                    Mechanical Properties of Titanium Grade 7 (Annealed)
                </h2>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Temperature</th>
                            <th>Tensile Strength (MPa)</th>
                            <th>Yield Strength (MPa)</th>
                            <th>Hardness (BHN)</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="t-row">
                            <td>25 °C (80 °F)</td>
                            <td>379</td>
                            <td>207</td>
                            <td>145</td>
                        </tr>
                        <tr class="t-row">
                            <td>425 °C (800 °F)</td>
                            <td>~207</td>
                            <td>~124</td>
                            <td>~100</td>
                        </tr>
                        <tr class="t-row">
                            <td>540 °C (1000 °F)</td>
                            <td>~172</td>
                            <td>~103</td>
                            <td>~90</td>
                        </tr>
                        <tr class="t-row">
                            <td>650 °C (1200 °F)</td>
                            <td>~138</td>
                            <td>~83</td>
                            <td>~85</td>
                        </tr>
                        <tr class="t-row">
                            <td>705 °C (1300 °F)</td>
                            <td>~124</td>
                            <td>~69</td>
                            <td>~80</td>
                        </tr>
                        <tr class="t-row">
                            <td>760 °C (1400 °F)</td>
                            <td>~117</td>
                            <td>~62</td>
                            <td>~75</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

{{-- 
<section class="sec-padd-top sec-padd-bottom bg-light" id="related grades">
        <div class="container">
            <div class="section-title center mt-5">
                <h2>Available Forms & Size Range – Titanium Grade 7</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <p class="text-center mb-3">
                        We supply Titanium Grade 7 in the following product forms:
                    </p>
                    <ul class="list-unstyled text-center">
                        <li>✔ Seamless & Welded Pipes</li>
                        <li>✔ Capillary & Boiler Tubes</li>
                        <li>✔ Sheets, Plates & Coils</li>
                        <li>✔ Strips & Foils</li>
                        <li>✔ Round / Flat / Hex Bars</li>
                        <li>✔ Wire & Welding Rods</li>
                        <li>✔ Pipe Fittings & Flanges (All ASME Types)</li>
                        <li>✔ Fasteners & CNC-Machined Components</li>
                    </ul>
                    <p class="text-center mt-3">
                        All materials comply with ASTM B551 / B523 / B658 / B493 / B550.
                    </p>
                </div>
            </div>
        </div>
    </section>
--}}

@php
        $products = [
            [
                'name' => 'Pipes',
                'url' => 'products/pipes-tubes/seamless-pipes',
                'image' => 'assets/images/all-product/seamless-pipes-10.webp',
            ],
            [
                'name' => 'Tubes',
                'url' => 'products/pipes-tubes/welded-pipes',
                'image' => 'assets/images/all-product/welded-pipes-tubes-1.webp',
            ],
            [
                'name' => 'Sheets',
                'url' => 'products/sheets-plates-coils/sheets-and-plates',
                'image' => 'assets/images/all-product/Sheets-Plates.webp',
            ],
            [
                'name' => 'Plates',
                'url' => 'products/sheets-plates-coils/sheets-and-plates',
                'image' => 'assets/images/all-product/Sheets-Plates.webp',
            ],
            [
                'name' => 'Flanges',
                'url' => 'products/flanges/flanges-and-gaskets',
                'image' => 'assets/images/engineering-steels/engineering-steels-4130.webp',
            ],
            [
                'name' => 'Bars',
                'url' => 'products/bars-rods',
                'image' => 'assets/images/aluminium-alloys/aluminium-alloys-6063.webp',
            ],
            [
                'name' => 'Fittings',
                'url' => 'products/pipe-fittings',
                'image' => 'assets/images/aluminium-alloys/aluminium-alloys-6012.webp',
            ]
        ];
    @endphp

<section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Products in Titanium Grade 7</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Titanium Grade 7 (UNS R52400 / W.Nr. 3.7235) </strong>is an
                        industrial-grade material well-known for its corrosion resistance in highly aggressive chemical
                        media. It retains the excellent mechanical characteristics of commercially pure titanium, while its
                        palladium content significantly boosts resistance in strong acid and chloride environments.
                    </p>
                </div>
            </div>

            <!-- Emphasized Line -->
            <div class="row justify-content-center mb-3">
                <div class="col-lg-10">
                    <p class="fw-bold fs-5 text-center my-4" style="color: #174268;">
                        Titanium Grade 7 complies with a range of international standards, ensuring quality and performance:
                    </p>
                </div>
            </div>

            <!-- Product Image Cards (Now centered and responsive) -->
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-4 justify-content-center">
                @foreach ($products as $product)
                    <div class="col d-flex">
                        <a href="{{ url($product['url']) }}" class="text-decoration-none w-100">
                            <div class="product-card h-100">
                                <img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}"
                                    class="img-fluid w-100">
                                <h6 class="product-card-title text-center mt-0 py-4">{{ $product['name'] }}</h6>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

<section id="uses" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Uses and Advantages</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Exceptional Corrosion Resistance, especially in highly acidic and chloride-containing
                            environments</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Superior Resistance to Crevice Corrosion, stress corrosion cracking, and pitting</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Excellent Weldability and Formability, making fabrication efficient</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Outstanding Ductility and Strength even under thermal and mechanical stress</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Biocompatible and Non-Toxic, suitable for sensitive applications</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Titanium Grade 7</h2>
                <p class="text-center pb-3"><strong class="text-dark">Titanium Grade 7</strong> is a go-to material for
                    projects involving strong acids, chlorides, and reducing environments. Thanks to its unique balance of
                    corrosion resistance and workability, it is widely used in:
                </p>
            </div>

                        <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Chemical Processing</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Oil & Gas</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-water"></i></div>
                        <h5>Marine</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-capsule"></i></div>
                        <h5>Pharmaceutical</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-thermometer-half"></i></div>
                        <h5>Heat Exchangers</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge"></i></div>
                        <h5>Power Plants</h5>
                    </div>
                </div>
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
                        <h5>ISO Certified</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-file-earmark-check"></i></div>
                        <h5>MTC 3.1</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Fast Delivery</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Worldwide Export</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-cash-coin"></i></div>
                        <h5>Competitive Price</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

{{-- 
<section id="price" class="sec-padd-top sec-padd-bottom bg-light py-5">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h2>Titanium Grade 7 Price in India</h2>
            </div>

            <p class="text-center fs-5">
                <strong>Typical Range:</strong> ₹4,000 – ₹9,000 per kg
            </p>
            <p class="text-center mb-2">
                (Price varies by OD, wall thickness, form, and finish)
            </p>

            <p class="text-center fs-5">
                Contact us for exact quotation based on size and quantity.
            </p>
        </div>
    </section>
--}}

<section id="faq" class="faq-content-area sec-padd2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="accordion-box">
                        <div class="section-title center">
                            <h2>FAQ's</h2>
                        </div>

                        <!-- Q1 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What is Titanium Grade 7?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Titanium Grade 7 is a corrosion resistant titanium alloy that contains palladium,
                                    providing superior strength, weldability, and durability. It is particularly suited for
                                    chemical, marine, and industrial applications that demand high performance and
                                    long-lasting reliability.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the common applications of Titanium Grade 7?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Titanium Grade 7 is widely used in chemical processing plants, desalination systems,
                                    marine equipment, power generation facilities, pharmaceutical processing, and pollution
                                    control systems. It provides excellent resistance to acids, brines, and harsh industrial
                                    environments, ensuring long term performance in challenging conditions.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What products are available in Titanium Grade 7?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP supplies Titanium Grade 7 in a wide range of products,
                                    including pipes, tubes, sheets, plates, coils, bars, fittings, flanges, fasteners, and
                                    custom fabricated components. All products are manufactured to strict international
                                    standards for high-performance industrial applications.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose Titanium Grade 7 NB for harsh environments?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Titanium Grade 7 NB contains palladium, which enhances resistance to hydrochloric and
                                    sulfuric acids, brines, and chloride-rich conditions. It maintains excellent
                                    weldability, mechanical strength, and durability, making it ideal for critical
                                    industrial environments where reliability is essential.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose MOKSH TUBES & FITTINGS LLP?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP provides premium Titanium Grade 7 products with global
                                    sourcing, custom fabrication, strict quality control, fast delivery, and expert
                                    technical support. We ensure reliable, high-performance solutions for demanding
                                    industrial and chemical applications.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

{{-- 
<section class="blog-section sec-padd2">
        <div class="container">
            <div class="section-title">
                <h2>blogs</h2>
            </div>
            <div class="row">
                @foreach ($blogs as $blog)
                    <!-- {{ dd($blog) }} -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="default-blog-news wow fadeInUp animated">

                            <figure class="img-holder mb-0">
                                <a href="{{ route('frontend.single-blog', $blog->slug) }}">
                                    <img src="{{ asset('storage/' . $blog->cover_image) }}" alt="{{ $blog->title }}"
                                        loading="lazy">
                                </a>
                                <figcaption class="overlay">
                                    <div class="box">
                                        <div class="content">
                                            <a href="{{ route('frontend.single-blog', $blog->slug) }}">
                                                <i class="fa fa-link" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class="lower-content">
                                <a href="{{ route('frontend.single-blog', $blog->slug) }}">
                                    <h5>{{ Str::limit($blog->title, 30) }}</h5>
                                </a>

                                <div class="post-meta">
                                    by {{ $blog->author ?? 'Admin' }} |
                                    {{ $blog->created_at->format('F d, Y') }}
                                </div>

                                <!--<div class="text">-->
                                <!--</div>-->
                                {!! \Str::limit(strip_tags($blog->content, '<i>'), 120) !!}

                                <div class="link">
                                    <a href="{{ route('frontend.single-blog', $blog->slug) }}" class="default_link">
                                        Read More <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
--}}

<section id="contact-us" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Contact Us</h2>
                <p>
                    Get in touch with <strong>Moksh Tubes & Fittings LLP</strong> is your trusted partner for excellence in
                    material quality and service.</p>
                <!-- Call button -->
                <a href="javascript:void(0);" class="contact-cta-btn" data-bs-toggle="modal"
                    data-bs-target="#contactFormModal">
                    Get in Touch
                </a>
            </div>
        </div>
    </section>

    <!-- Extra Sections (Commented Out) -->
{{-- datasheet --}}

{{-- blog section start --}}

{{-- blog section end --}}

@endsection
@section('jsscripts')
    <script type="application/ld+json">
        @verbatim
            {
                "@context": "https://schema.org",
                "@type": "FAQPage",
                "mainEntity": [
                    {
                        "@type": "Question",
                        "name": "What is Titanium Grade 7?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Titanium Grade 7 is a corrosion resistant titanium alloy that contains palladium, providing superior strength, weldability, and durability. It is particularly suited for chemical, marine, and industrial applications that demand high performance and long-lasting reliability."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "What are the common applications of Titanium Grade 7?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Titanium Grade 7 is widely used in chemical processing plants, desalination systems, marine equipment, power generation facilities, pharmaceutical processing, and pollution control systems. It provides excellent resistance to acids, brines, and harsh industrial environments, ensuring long term performance in challenging conditions."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "What products are available in Titanium Grade 7?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "MOKSH TUBES & FITTINGS LLP supplies Titanium Grade 7 in a wide range of products, including pipes, tubes, sheets, plates, coils, bars, fittings, flanges, fasteners, and custom fabricated components. All products are manufactured to strict international standards for high-performance industrial applications."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Why choose Titanium Grade 7 NB for harsh environments?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Titanium Grade 7 NB contains palladium, which enhances resistance to hydrochloric and sulfuric acids, brines, and chloride-rich conditions. It maintains excellent weldability, mechanical strength, and durability, making it ideal for critical industrial environments where reliability is essential."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Why choose MOKSH TUBES & FITTINGS LLP?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "MOKSH TUBES & FITTINGS LLP provides premium Titanium Grade 7 products with global sourcing, custom fabrication, strict quality control, fast delivery, and expert technical support. We ensure reliable, high-performance solutions for demanding industrial and chemical applications."
                        }
                    }
                ]
            }

        @endverbatim
    </script>
@endsection


