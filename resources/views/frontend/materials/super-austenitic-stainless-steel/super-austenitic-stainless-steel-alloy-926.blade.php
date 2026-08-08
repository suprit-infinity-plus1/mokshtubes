@extends('layouts.master')

@section('title', 'Alloy 926 – High-Performance Super Austenitic') <!-- 52 chars -->
@section('meta_description', 'Alloy 926 pipes, tubes, and fittings offer excellent pitting, crevice, and chloride
    corrosion resistance for harsh marine and chemical environments.')
@section('meta_keywords', 'Alloy 926, Super Austenitic Stainless Steel, Corrosion Resistant Alloy, Alloy 926 Pipes,
    Alloy 926 Tubes, Alloy 926 Fittings, Pitting Resistant Alloy, Crevice Corrosion Resistant, Chloride Resistant Alloy,
    Marine Industry Alloys, Chemical Processing Alloys')
@section('og_image',
    asset('assets/images/super-austenitic-stainless-steel/super-austenitic-stainless-steel-AL-926.webp'))
@section('og_type', 'article')
@section('content')
<section class="breadcrumb-area"
        style="background-image: url(/assets/images/super-austenitic-stainless-steel/super-austenitic-stainless-steel-AL-926.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Alloy 926 <br> Super Austenitic & Corrosion Resistant</h1>

                     <!-- Add your extra content here -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                       Alloy 926 (UNS N08926 / 1.4529) is a high-performance super-austenitic stainless steel known for excellent resistance to pitting, crevice corrosion, and stress corrosion cracking—especially in chloride-rich and acidic environments. Its high nickel, chromium, and molybdenum content makes it ideal for chemical, marine, offshore, and desalination applications.

                        <!-- End extra content -->
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
                Introduction To Alloy 926/ UNS N08926 / W.Nr. 1.4529
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/super-austenitic-stainless-steel/super-austenitic-stainless-steel-AL-926.webp') }}"
                        alt="Alloy 926" class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a leading manufacturer,
                            stockist, importer, and exporter of premium<strong class="text-black"> Alloy 926 (UNS N08926)
                                products</strong> including Pipes &
                            <a href="{{ route('products.pipes-tubes') }}">Tubes & Pipe</a> Fittings, Flanges, Sheets &
                            Plates, Coils, Wires, Round Bars, Welding Rods,
                            Fasteners, and Custom Fabricated Components.
                            <strong class="text-black">Alloy 926</strong> is a super-austenitic stainless steel with
                            enhanced molybdenum (6.5%) and <a
                                href="{{ route('materials.hard-To-Find-Special-Alloys') }}">nitrogen</a> additions,
                            delivering excellent resistance to pitting,
                            crevice corrosion, and stress corrosion cracking in aggressive environments. Its high nickel and
                            chromium content provide superior corrosion protection in oxidizing and reducing environments,
                            especially in chloride-bearing solutions. Alloy 926 is ideal for applications in marine,
                            chemical processing, desalination, pulp & paper, and pollution control sectors.
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Super Austentic 926 Datasheet</h3>
            <p class="mb-3">
                Get the complete Super Austentic 926 datasheet with chemical composition,
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
                <h2>Specifications of Alloy 926 (UNS R60702)</h2>
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
                                    <td>Alloy 926 / UNS R60702</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Type</td>
                                    <td>Commercially Pure Alloy</td>
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
                                    <td>Nickel</td>
                                    <td>24.0 – 26.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium</td>
                                    <td>19.0 – 21.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Molybdenum</td>
                                    <td>6.0 – 7.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron</td>
                                    <td>Balance</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Copper</td>
                                    <td>0.5 – 1.5</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nitrogen</td>
                                    <td>0.15 – 0.25</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese</td>
                                    <td>≤ 2.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon</td>
                                    <td>≤ 0.5</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon</td>
                                    <td>≤ 0.02</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Phosphorus</td>
                                    <td>≤ 0.03</td>
                                </tr>
                                <tr class="t-row">
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
                                    <td>0.296 lb/in³</td>
                                    <td>8.20 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Point</td>
                                    <td>2470 – 2550 °F</td>
                                    <td>1354 – 1399 °C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Modulus of Elasticity – Tension</td>
                                    <td>28.0 × 10³ ksi</td>
                                    <td>193 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Modulus of Elasticity – Compression</td>
                                    <td>28.0 × 10³ ksi</td>
                                    <td>193 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Modulus of Elasticity – Torsion</td>
                                    <td>10.0 × 10³ ksi</td>
                                    <td>69 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Poisson’s Ratio</td>
                                    <td>0.30</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
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
                                <tr class="t-row">
                                    <th>Property</th>
                                    <th>Annealed</th>
                                    <th>Cold Worked</th>
                                    <th>Solution Treated</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Tensile Strength (ksi / MPa)</td>
                                    <td>85–105 ksi / 585–725 MPa</td>
                                    <td>100–120 ksi / 690–830 MPa</td>
                                    <td>85–105 ksi / 585–725 MPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (0.2%) (ksi / MPa)</td>
                                    <td>40–60 ksi / 275–415 MPa</td>
                                    <td>65–90 ksi / 450–620 MPa</td>
                                    <td>40–60 ksi / 275–415 MPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elongation (%)</td>
                                    <td>30–50%</td>
                                    <td>15–30%</td>
                                    <td>30–50%</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Hardness (Rockwell B / C)</td>
                                    <td>70–90 B</td>
                                    <td>85–95 B</td>
                                    <td>75–90 B</td>
                                </tr>
                                <tr class="t-row">
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
--}}

<section class="sec-padd-top sec-padd-bottom" id="mechanical">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color:#174268;">
                    Mechanical Properties of Alloy 926 (Annealed)
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
                <h2>Available Forms & Size Range – Alloy 926</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <p class="text-center mb-3">
                        We supply Alloy 926 in the following product forms:
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

            <!-- Emphasized Line -->
            <div class="row justify-content-center mb-3">
                <div class="col-lg-10">
                    <p class="fw-bold fs-5 text-center my-4" style="color: #174268;">
                        We supply Alloy 926 materials in accordance with the most stringent industry standards: </p>
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

<section id="applications" class="sec-padd-top sec-padd-bottom">
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
                <h2>Alloy 926 Price in India</h2>
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
                                <h4>What is Alloy 926 and why is it used?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Alloy 926 (UNS N08926) is a super austenitic stainless steel designed for extreme
                                    corrosion resistance in aggressive environments. With enhanced molybdenum (6.5%) and
                                    nitrogen, along with high nickel and chromium content, it offers superior protection
                                    against pitting, crevice corrosion, and stress corrosion cracking (SCC), particularly in
                                    chloride-bearing and acidic solutions. Alloy 926 is ideal for demanding applications in
                                    marine, chemical processing, desalination, pulp & paper, and pollution control
                                    industries.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What Alloy 926 products are supplied by Moksh Tubes & Fittings LLP?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Moksh Tubes & Fittings LLP supplies a comprehensive range of Alloy 926 products,
                                    including seamless and welded pipes (ERW & EFW), capillary, U-bend, boiler, and heat
                                    exchanger tubes, sheets, plates, coils, strips, round, flat, hex, and square bars, pipe
                                    fittings, flanges, fasteners, welding rods, wires, and custom fabricated components. All
                                    products comply with international standards and can be supplied in custom dimensions
                                    for specialized industrial requirements.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the benefits of Alloy 926?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Alloy 926 offers excellent corrosion resistance in both oxidizing and reducing
                                    environments, high strength, toughness, and resistance to stress corrosion cracking. It
                                    is non magnetic, performs well in cryogenic applications, and maintains excellent
                                    mechanical properties over a wide temperature range. These advantages make it suitable
                                    for critical components exposed to harsh chemicals, seawater, or high chloride
                                    conditions.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Which industries use Alloy 926?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Alloy 926 is widely used in marine applications, chemical processing, desalination and
                                    water treatment, pulp & paper, oil & gas, and pollution control sectors. Typical
                                    applications include seawater cooling systems, heat exchangers, tanks and piping in acid
                                    plants, evaporators, reverse osmosis (RO) systems, digesters, bleach plants, scrubbers,
                                    and flue gas desulfurization (FGD) equipment.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose Moksh Tubes & Fittings LLP for Alloy 926?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Moksh Tubes & Fittings LLP is a trusted manufacturer, importer, exporter, and stockist
                                    of Alloy 926. The company offers ISO certified manufacturing, extensive inventory, rapid
                                    global shipping, in house quality testing, and the ability to produce custom sizes,
                                    lengths, and finishes. With expertise in nickel alloys and high performance stainless
                                    steels, Moksh Tubes & Fittings LLP ensures reliable, high-quality materials for
                                    demanding industrial applications.
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
                    <strong>Moksh Tubes & Fittings LLP</strong> Your reliable source for premium Alloy 926 products.
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
                "name": "What is Alloy 926 and why is it used?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Alloy 926 (UNS N08926) is a super austenitic stainless steel designed for extreme corrosion resistance in aggressive environments. With enhanced molybdenum (6.5%) and nitrogen, along with high nickel and chromium content, it offers superior protection against pitting, crevice corrosion, and stress corrosion cracking (SCC), particularly in chloride-bearing and acidic solutions. Alloy 926 is ideal for demanding applications in marine, chemical processing, desalination, pulp & paper, and pollution control industries."
                }
                },
                {
                "@type": "Question",
                "name": "What Alloy 926 products are supplied by Moksh Tubes & Fittings LLP?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Moksh Tubes & Fittings LLP supplies a comprehensive range of Alloy 926 products, including seamless and welded pipes (ERW & EFW), capillary, U-bend, boiler, and heat exchanger tubes, sheets, plates, coils, strips, round, flat, hex, and square bars, pipe fittings, flanges, fasteners, welding rods, wires, and custom fabricated components. All products comply with international standards and can be supplied in custom dimensions for specialized industrial requirements."
                }
                },
                {
                "@type": "Question",
                "name": "What are the benefits of Alloy 926?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Alloy 926 offers excellent corrosion resistance in both oxidizing and reducing environments, high strength, toughness, and resistance to stress corrosion cracking. It is non magnetic, performs well in cryogenic applications, and maintains excellent mechanical properties over a wide temperature range. These advantages make it suitable for critical components exposed to harsh chemicals, seawater, or high chloride conditions."
                }
                },
                {
                "@type": "Question",
                "name": "Which industries use Alloy 926?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Alloy 926 is widely used in marine applications, chemical processing, desalination and water treatment, pulp & paper, oil & gas, and pollution control sectors. Typical applications include seawater cooling systems, heat exchangers, tanks and piping in acid plants, evaporators, reverse osmosis (RO) systems, digesters, bleach plants, scrubbers, and flue gas desulfurization (FGD) equipment."
                }
                },
                {
                "@type": "Question",
                "name": "Why choose Moksh Tubes & Fittings LLP for Alloy 926?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Moksh Tubes & Fittings LLP is a trusted manufacturer, importer, exporter, and stockist of Alloy 926. The company offers ISO certified manufacturing, extensive inventory, rapid global shipping, in house quality testing, and the ability to produce custom sizes, lengths, and finishes. With expertise in nickel alloys and high performance stainless steels, Moksh Tubes & Fittings LLP ensures reliable, high-quality materials for demanding industrial applications."
                }
                }
            ]
            }

        @endverbatim
    </script>
@endsection


