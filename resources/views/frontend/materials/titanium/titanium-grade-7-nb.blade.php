@extends('layouts.master')

@section('title', 'Titanium Grade 7 Nb – Niobium Stabilized Titanium Alloy') <!-- 52 chars -->
@section('meta_description', 'Titanium Grade 7 offers exceptional corrosion resistance for chemical, marine, and
    industrial applications in harsh environments.')
@section('meta_keywords', 'Titanium Grade 7 Nb, Niobium Stabilized Titanium, Corrosion Resistant Titanium, Titanium
    Grade 7 Nb Pipes, Titanium Grade 7 Nb Tubes, Titanium Grade 7 Nb Sheets, Reducing Environment Resistant Titanium,
    Chemical Processing Titanium, Industrial Titanium Alloys, High Performance Titanium')
@section('og_image', asset('assets/images/titanium/titanium-7nb.webp'))
@section('og_type', 'article')
@section('content')
<section class="breadcrumb-area" style="background-image: url(/assets/images/titanium/titanium-7nb.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Titanium Grade 7 Nb <br> Corrosion Resistant & High Performance Alloy</h1>
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
                Introduction To Titanium Grade 7 NB / Ti-0.2Pd / UNS R52400
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/titanium/titanium-7nb.webp') }}" alt="Titanium Grade 7 NB"
                        class="img-fluid rounded shadow-sm" loading="lazy">

                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a leading manufacturer,
                            supplier, exporter, importer, and stockist of a wide range of<strong class="text-black">
                                Titanium Grade 7 NB products</strong>
                            including Pipes & Tubes, Pipe Fittings, Flanges, Fasteners, Sheets & Plates, Coils, Wires, Bars,
                            Forgings, Custom Components, and other hard-to-find titanium alloy <a
                                href="{{ route('products') }}">products</a> tailored to your
                            exact requirements.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">Titanium Grade 7 NB (UNS R52400), </strong>also known as Ti-0.2Pd, is
                            a corrosion-resistant, alpha-phase <a href="{{ route('materials.titanium') }}">titanium
                                alloy</a> that offers the same mechanical properties as
                            Grade 2, but with enhanced corrosion resistance due to the addition of palladium (0.12–0.25%).
                            This makes it one of the most corrosion-resistant titanium grades available, especially in
                            reducing and mildly oxidizing environments such as hydrochloric and sulfuric acid.
                        </p>
                        <p>
                            Renowned for its excellent weldability, ductility, and formability,<strong class="text-black">
                                Titanium Grade 7 NB</strong> is ideal
                            for industries that operate in aggressive chemical environments and demand both longevity and
                            performance.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Titanium Grade 7 Nb Datasheet</h3>
            <p class="mb-3">
                Get the complete Titanium Grade 7 Nb datasheet with chemical composition,
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
                <h2>Specifications of Titanium Grade 7 Nb (UNS R60702)</h2>
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
                                    <td>Titanium Grade 7 Nb / UNS R60702</td>
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
                                    <td>Carbon</td>
                                    <td>≤ 0.08</td>
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
                                    <td>Nitrogen</td>
                                    <td>≤ 0.03</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Hydrogen</td>
                                    <td>≤ 0.015</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Oxygen</td>
                                    <td>≤ 0.25</td>
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
                                    <td>3038 °F</td>
                                    <td>1670 °C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elastic Modulus</td>
                                    <td>15 x 10⁶ psi</td>
                                    <td>103 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Thermal Conductivity</td>
                                    <td>10.1 BTU/hr·ft·°F</td>
                                    <td>14.6 W/m·K</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Electrical Resistivity</td>
                                    <td>27.1 µΩ·in</td>
                                    <td>68 µΩ·cm</td>
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
                    Mechanical Properties of Titanium Grade 7 Nb (Annealed)
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
                <h2>Available Forms & Size Range – Titanium Grade 7 Nb</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <p class="text-center mb-3">
                        We supply Titanium Grade 7 Nb in the following product forms:
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
                'route' => 'products.pipes-tubes.seamless-pipes',
                'image' => 'assets/images/all-product/seamless-pipes-10.webp',
            ],
            [
                'name' => 'Tubes',
                'route' => 'products.pipes-tubes.welded-pipes',
                'image' => 'assets/images/all-product/welded-pipes-tubes-1.webp',
            ],
            [
                'name' => 'Sheets',
                'route' => 'products.sheets-plates-coils.sheets-and-plates',
                'image' => 'assets/images/all-product/Sheets-Plates.webp',
            ],
            [
                'name' => 'Plates',
                'route' => 'products.sheets-plates-coils.sheets-and-plates',
                'image' => 'assets/images/all-product/Sheets-Plates.webp',
            ],
            [
                'name' => 'Flanges',
                'route' => 'products.flanges.flanges-and-gaskets',
                'image' => 'assets/images/engineering-steels/engineering-steels-4130.webp',
            ],
            [
                'name' => 'Bars',
                'route' => 'products.bars-rods',
                'image' => 'assets/images/aluminium-alloys/aluminium-alloys-6063.webp',
            ],
            [
                'name' => 'Fittings',
                'route' => 'products.pipe-fittings',
                'image' => 'assets/images/aluminium-alloys/aluminium-alloys-6012.webp',
            ]
        ];
    @endphp

<section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Products in Titanium Grade 7 NB</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Titanium Grade 7 NB </strong>is favored across critical applications for
                        its superior resistance to crevice corrosion, particularly in acidic, brine-rich, or
                        chloride-containing environments. Its performance in environments with high levels of moisture and
                        corrosive agents is exceptional, making it ideal for industries like chemical processing and
                        desalination.
                    </p>
                </div>
            </div>

            <!-- Emphasized Line -->
            <div class="row justify-content-center mb-3">
                <div class="col-lg-10">
                    <p class="fw-bold fs-5 text-center my-4" style="color: #174268;">
                        Titanium Grade 7 NB is produced and tested to meet international specifications:
                    </p>
                </div>
            </div>

            <!-- Product Image Cards (Now centered and responsive) -->
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-4 justify-content-center">
                @foreach ($products as $product)
                    <div class="col d-flex">
                        <a href="{{ route($product['route']) }}" class="text-decoration-none w-100">
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
                        <h5>Outstanding corrosion resistance, especially in chloride, acidic, and brine environments</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Excellent weldability with no post-weld heat treatment required</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Low density and high strength-to-weight ratio</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Superior resistance to crevice corrosion due to palladium addition</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Excellent formability and machinability</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Non-toxic and biocompatible for sensitive environments</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Titanium Grade 5</h2>
                <p class="text-center pb-3"><strong class="text-dark">Titanium Grade 7 NB</strong> reliability and
                    corrosion resistance have made it a preferred alloy for industries operating in harsh or reactive
                    environments. Some key applications include:
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
                <h2>Titanium Grade 7 Nb Price in India</h2>
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
                                <h4>What is Titanium Grade 7 NB (Ti-0.2Pd) and why is it used?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Titanium Grade 7 NB, also known as Ti-0.2Pd (UNS R52400), is a corrosion resistant,
                                    alpha phase titanium alloy. It shares the mechanical properties of Grade 2 titanium but
                                    includes palladium (0.12–0.25%) for enhanced resistance against acids and chlorides.
                                    These characteristics make it ideal for chemical processing, desalination, marine, and
                                    other aggressive environments where long lasting performance is critical.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What types of Titanium Grade 7 NB products are offered by MOKSH TUBES & FITTINGS LLP?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP provides an extensive range of Grade 7 NB products, including
                                    seamless and welded pipes, tubes, sheets, plates, coils, bars, wires, fasteners,
                                    flanges, forgings, and custom fabricated components. All products are manufactured to
                                    international standards and are suitable for high performance applications in
                                    corrosion prone environments.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the key advantages of Titanium Grade 7 NB?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Titanium Grade 7 NB offers exceptional corrosion resistance, especially in acidic,
                                    chloride, and brine-rich environments. It features excellent weldability without
                                    post weld heat treatment, a high strength to weight ratio, biocompatibility, and
                                    superior machinability and formability. These properties make it ideal for industries
                                    that require durable performance in harsh chemical conditions.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Which industries benefit most from Titanium Grade 7 NB products?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Industries that benefit from Titanium Grade 7 NB include chemical processing for piping
                                    and tanks, desalination plants for brine handling systems, pulp and paper for bleach
                                    tanks and digesters, power generation for condenser and feedwater systems,
                                    pharmaceutical and food sectors for sanitary equipment, and pollution control systems
                                    for scrubbers and reactors exposed to corrosive gases.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose MOKSH TUBES & FITTINGS LLP for Titanium Grade 7 NB solutions?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    With decades of expertise, MOKSH TUBES & FITTINGS LLP delivers globally sourced,
                                    high quality Grade 7 NB products with full traceability and strict quality control. The
                                    company provides custom-fabricated components tailored to specific requirements, ensures
                                    timely delivery, and offers expert technical support, making it a trusted partner for
                                    industries operating in aggressive environments.
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
                    For product inquiries, technical support, or to request a quote, contac <strong>Moksh Tubes & Fittings
                        LLP</strong> your reliable partner for Titanium Grade 7 NB products and solutions.</p>
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
                        "name": "What is Titanium Grade 7 NB (Ti-0.2Pd) and why is it used?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Titanium Grade 7 NB, also known as Ti-0.2Pd (UNS R52400), is a corrosion resistant, alpha phase titanium alloy. It shares the mechanical properties of Grade 2 titanium but includes palladium (0.12–0.25%) for enhanced resistance against acids and chlorides. These characteristics make it ideal for chemical processing, desalination, marine, and other aggressive environments where long lasting performance is critical."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "What types of Titanium Grade 7 NB products are offered by MOKSH TUBES & FITTINGS LLP?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "MOKSH TUBES & FITTINGS LLP provides an extensive range of Grade 7 NB products, including seamless and welded pipes, tubes, sheets, plates, coils, bars, wires, fasteners, flanges, forgings, and custom fabricated components. All products are manufactured to international standards and are suitable for high performance applications in corrosion prone environments."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "What are the key advantages of Titanium Grade 7 NB?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Titanium Grade 7 NB offers exceptional corrosion resistance, especially in acidic, chloride, and brine-rich environments. It features excellent weldability without post weld heat treatment, a high strength to weight ratio, biocompatibility, and superior machinability and formability. These properties make it ideal for industries that require durable performance in harsh chemical conditions."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Which industries benefit most from Titanium Grade 7 NB products?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Industries that benefit from Titanium Grade 7 NB include chemical processing for piping and tanks, desalination plants for brine handling systems, pulp and paper for bleach tanks and digesters, power generation for condenser and feedwater systems, pharmaceutical and food sectors for sanitary equipment, and pollution control systems for scrubbers and reactors exposed to corrosive gases."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Why choose MOKSH TUBES & FITTINGS LLP for Titanium Grade 7 NB solutions?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "With decades of expertise, MOKSH TUBES & FITTINGS LLP delivers globally sourced, high quality Grade 7 NB products with full traceability and strict quality control. The company provides custom-fabricated components tailored to specific requirements, ensures timely delivery, and offers expert technical support, making it a trusted partner for industries operating in aggressive environments."
                        }
                    }
                ]
            }

        @endverbatim
    </script>
@endsection


