@extends('layouts.master')

@section('title', 'Titanium Grade 5 ELI – Aerospace Titanium Alloy') <!-- 52 chars -->
@section('meta_description', 'Titanium Grade 5 ELI offers extra purity and exceptional performance, ideal for aerospace,
    medical implants, and high-performance industrial applications.')
@section('meta_keywords', 'Titanium Grade 5 ELI, Extra Low Interstitial Titanium, Aerospace Grade Titanium, Medical
    Implant Titanium, Titanium Grade 5 ELI Pipes, Titanium Grade 5 ELI Tubes, High Performance Titanium, Corrosion Resistant
    Titanium, Medical Titanium Alloys, Industrial Titanium Grades')
@section('og_image', asset('assets/images/titanium/titanium-5-eli.webp'))
@section('og_type', 'article')
@section('content')
<section class="breadcrumb-area" style="background-image: url(/assets/images/titanium/titanium-5-eli.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Titanium Grade 5 ELI <br> High Purity & Aerospace Alloy</h1>
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
                Introduction To Titanium Grade 5 ELI / Ti-6Al-4V ELI / UNS R56401
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/titanium/titanium-5-eli.webp') }}" alt="Titanium Grade 5 ELI"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> proudly manufactures, supplies,
                            exports, imports, and stocks a comprehensive range of<strong class="text-black"> Titanium Grade
                                5 ELI products.</strong> Our
                            portfolio includes Pipes & Tubes, Pipe Fittings, Flanges, Fasteners, Sheets & Plates, Coils,
                            Wires, Round Bars, Forgings, Welding Rods, and other Custom and Hard-to-Find Titanium Grade 5
                            ELI components designed for high-performance industries.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">Titanium Grade 5 ELI (Ti-6Al-4V ELI)</strong> is a high-strength,
                            alpha-beta alloy known for its outstanding combination of corrosion resistance,
                            biocompatibility, and fracture toughness. The “ELI” stands for Extra Low Interstitial, meaning
                            it has reduced levels of oxygen, nitrogen, and carbon—making it cleaner, tougher, and more
                            ductile, especially in cryogenic and medical-grade applications. It offers all the strength of
                            standard Grade 5 <a href="{{ route('materials.titanium') }}">titanium</a> but with superior
                            notch sensitivity and enhanced fatigue resistance.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Titanium Grade 5 Eli Datasheet</h3>
            <p class="mb-3">
                Get the complete Titanium Grade 5 Eli datasheet with chemical composition,
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
                <h2>Specifications of Titanium Grade 5 ELI (UNS R60702)</h2>
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
                                    <td>Titanium Grade 5 ELI / UNS R60702</td>
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
                                    <td>Aluminum</td>
                                    <td>5.5 – 6.75</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Vanadium</td>
                                    <td>3.5 – 4.5</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Oxygen</td>
                                    <td>0.13 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron</td>
                                    <td>0.25 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon</td>
                                    <td>0.08 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nitrogen</td>
                                    <td>0.05 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Hydrogen</td>
                                    <td>0.0125 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Other elements</td>
                                    <td>0.3 max (total)</td>
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
                                    <td>0.160 lb/in³</td>
                                    <td>4.43 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Point</td>
                                    <td>2,800 – 3,010 °F</td>
                                    <td>1,540 – 1,655 °C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elastic Modulus</td>
                                    <td>16.5 x 10⁶ psi</td>
                                    <td>114 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Thermal Conductivity</td>
                                    <td>3.8 BTU/hr·ft·°F</td>
                                    <td>6.3 W/m·K</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Electrical Resistivity</td>
                                    <td>72 µΩ·cm</td>
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
                                    <td>125</td>
                                    <td>140</td>
                                    <td>130</td>
                                    <td>128</td>
                                    <td>132</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tensile Strength (MPa)</td>
                                    <td>862</td>
                                    <td>965</td>
                                    <td>896</td>
                                    <td>883</td>
                                    <td>910</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (0.2%) (ksi)</td>
                                    <td>115</td>
                                    <td>125</td>
                                    <td>120</td>
                                    <td>118</td>
                                    <td>121</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (MPa)</td>
                                    <td>793</td>
                                    <td>862</td>
                                    <td>827</td>
                                    <td>814</td>
                                    <td>834</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elongation (%)</td>
                                    <td>15</td>
                                    <td>10</td>
                                    <td>14</td>
                                    <td>4</td>
                                    <td>12</td>
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
                    Mechanical Properties of Titanium Grade 5 ELI (Annealed)
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
                <h2>Available Forms & Size Range – Titanium Grade 5 ELI</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <p class="text-center mb-3">
                        We supply Titanium Grade 5 ELI in the following product forms:
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
                <h2>Products in Titanium Grade 5 ELI</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Titanium Grade 5 ELI (UNS R56401 / ASTM B348) </strong>is highly
                        sought-after for applications requiring low interstitial content, superior fracture toughness, and
                        biocompatibility. It’s widely used in aerospace, marine, cryogenic, medical, and high-stress
                        engineering applications where safety and precision are non-negotiable.
                    </p>
                </div>
            </div>

            <!-- Emphasized Line -->
            <div class="row justify-content-center mb-3">
                <div class="col-lg-10">
                    <p class="fw-bold fs-5 text-center my-4" style="color: #174268;">
                        Titanium Grade 5 ELI is manufactured in strict accordance with international norms and quality
                        benchmarks:
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
                        <h5>Exceptional strength-to-weight ratio for load-bearing parts</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Biocompatible and non-toxic – ideal for surgical implants</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Superior fracture toughness, especially at cryogenic temperatures</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Excellent resistance to corrosion in marine and chloride environments</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Can withstand high mechanical stress and thermal cycling</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Weldable, forgeable, and machinable with appropriate care</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Titanium Grade 5 ELI</h2>
                <p class="text-center pb-3"><strong class="text-dark">Titanium Grade 5 ELI</strong> is a premium material
                    engineered for critical applications where failure is not an option. Whether you're designing an
                    orthopedic implant or an aircraft engine component, this alloy delivers trust and performance.
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
                <h2>Titanium Grade 5 ELI Price in India</h2>
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
                                <h4>What is Titanium Grade 5 ELI and why is it important?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Titanium Grade 5 ELI (Ti-6Al-4V ELI) is an advanced titanium alloy with extra low
                                    interstitials, making it stronger, more ductile, and corrosion-resistant than standard
                                    titanium. Its high fracture toughness and biocompatibility make it ideal for aerospace,
                                    medical, cryogenic, and high stress industrial applications. Industries choose Grade 5
                                    ELI when reliability and performance in extreme conditions are critical.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What types of Titanium Grade 5 ELI products are available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP offers a wide range of Titanium Grade 5 ELI products,
                                    including seamless and welded pipes, various tubes, sheets, plates, coils, bars, pipe
                                    fittings, flanges, fasteners, forgings, and custom-fabricated components. These products
                                    meet international standards, ensuring superior strength, durability, and precision for
                                    every application.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the key advantages of Titanium Grade 5 ELI?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Titanium Grade 5 ELI provides an exceptional strength to weight ratio, excellent
                                    corrosion resistance in marine and chloride environments, and superior fracture
                                    toughness, even at cryogenic temperatures. It is biocompatible, making it safe for
                                    medical implants. Additionally, it offers high machinability, weldability, and
                                    formability, making it suitable for engineering applications requiring precision and
                                    reliability.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Which industries use Titanium Grade 5 ELI products?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Titanium Grade 5 ELI is used across multiple high-performance industries. In the medical
                                    and surgical sectors, it is ideal for implants and orthopedic devices. Aerospace and
                                    defense industries use it for airframes and jet engine components. Marine and subsea
                                    applications benefit from its corrosion resistance in saline environments, while
                                    industrial and cryogenic sectors utilize it for turbines, heat exchangers, pressure
                                    vessels, and low-temperature equipment. It is also increasingly used in additive
                                    manufacturing for precision components.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose MOKSH TUBES & FITTINGS LLP for Titanium Grade 5 ELI products?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    We specialize in high performance titanium alloys, offering global-standard Grade 5 ELI
                                    products with precision manufacturing and quality testing. Our team ensures prompt
                                    delivery, custom solutions for critical applications, and reliable customer support.
                                    With years of expertise, MOKSH TUBES & FITTINGS LLP is a trusted partner for industries
                                    requiring high strength, corrosion resistant, and biocompatible titanium components.
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
                    <strong>Moksh Tubes & Fittings LLP</strong> today for pricing, availability, or expert technical
                    guidance.
                </p>
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
                        "name": "What is Titanium Grade 5 ELI and why is it important?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Titanium Grade 5 ELI (Ti-6Al-4V ELI) is an advanced titanium alloy with extra low interstitials, making it stronger, more ductile, and corrosion-resistant than standard titanium. Its high fracture toughness and biocompatibility make it ideal for aerospace, medical, cryogenic, and high stress industrial applications. Industries choose Grade 5 ELI when reliability and performance in extreme conditions are critical."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "What types of Titanium Grade 5 ELI products are available?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "MOKSH TUBES & FITTINGS LLP offers a wide range of Titanium Grade 5 ELI products, including seamless and welded pipes, various tubes, sheets, plates, coils, bars, pipe fittings, flanges, fasteners, forgings, and custom-fabricated components. These products meet international standards, ensuring superior strength, durability, and precision for every application."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "What are the key advantages of Titanium Grade 5 ELI?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Titanium Grade 5 ELI provides an exceptional strength to weight ratio, excellent corrosion resistance in marine and chloride environments, and superior fracture toughness, even at cryogenic temperatures. It is biocompatible, making it safe for medical implants. Additionally, it offers high machinability, weldability, and formability, making it suitable for engineering applications requiring precision and reliability."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Which industries use Titanium Grade 5 ELI products?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Titanium Grade 5 ELI is used across multiple high-performance industries. In the medical and surgical sectors, it is ideal for implants and orthopedic devices. Aerospace and defense industries use it for airframes and jet engine components. Marine and subsea applications benefit from its corrosion resistance in saline environments, while industrial and cryogenic sectors utilize it for turbines, heat exchangers, pressure vessels, and low-temperature equipment. It is also increasingly used in additive manufacturing for precision components."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Why choose MOKSH TUBES & FITTINGS LLP for Titanium Grade 5 ELI products?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "We specialize in high performance titanium alloys, offering global-standard Grade 5 ELI products with precision manufacturing and quality testing. Our team ensures prompt delivery, custom solutions for critical applications, and reliable customer support. With years of expertise, MOKSH TUBES & FITTINGS LLP is a trusted partner for industries requiring high strength, corrosion resistant, and biocompatible titanium components."
                        }
                    }
                ]
            }

        @endverbatim
    </script>
@endsection


