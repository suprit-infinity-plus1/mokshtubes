@extends('layouts.master')

@section('title', 'SMO 254 – High Strength Chloride Resistant Alloy | Moksh') <!-- 52 chars -->
@section('meta_description', 'Moksh Tubes supplies SMO 254 pipes, tubes & fittings offering high chloride corrosion
    resistance for marine, offshore & chemical environments.')
@section('meta_keywords', 'SMO 254, Super Austenitic Stainless Steel, Chloride Resistant Alloy, Corrosion Resistant
    Alloy, SMO 254 Pipes, SMO 254 Tubes, SMO 254 Fittings, Marine Industry Alloys, Offshore Industry Alloys, Chemical
    Processing Alloys, Industrial Corrosion Resistant Alloys')
@section('og_image',
    asset('assets/images/super-austenitic-stainless-steel/super-austenitic-stainless-steel-SMO-254.webp'))
@section('og_type', 'article')
@section('content')
<section class="breadcrumb-area"
        style="background-image: url(/assets/images/super-austenitic-stainless-steel/super-austenitic-stainless-steel-SMO-254.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>SMO 254 Stainless Steel <br> High Corrosion Resistance</h1>

                     <!-- Add your extra content here -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                       SMO 254 (UNS S31254) is an advanced 6Mo super-austenitic stainless steel engineered for extreme chloride-rich environments including seawater, desalination systems, brine processing, and aggressive chemical media. With high molybdenum (6%), nitrogen, and chromium levels, it offers exceptional pitting, crevice corrosion & chloride SCC resistance—far superior to Duplex, Super Duplex, and standard stainless steels.

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
                Introduction To SMO 254 (UNS S31254/6Mo) Stainless Steel
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/super-austenitic-stainless-steel/super-austenitic-stainless-steel-SMO-254.webp') }}"
                        alt="SMO 254" class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a leading manufacturer,
                            supplier, exporter, and stockist of high-performance<strong class="text-black"> SMO 254 (UNS
                                S31254) <a href="{{ route('products') }}">products</a>,</strong> including
                            Pipes & Tubes, Fittings, Flanges, Sheets & Plates, Round Bars, Wires, Fasteners, and Custom
                            Fabricated Components.

                        <p> <strong class="text-black">SMO 254</strong> is a <a
                                href="{{ route('materials.super-Austenitic-Stainless-Steel') }}">super austenitic stainless
                                steel alloy</a>
                            developed for superior corrosion resistance in high chloride environments, including seawater
                            and aggressive chemical media. With high molybdenum (6%) and nitrogen content, it offers
                            excellent pitting resistance, crevice corrosion resistance, and stress corrosion cracking
                            resistance. SMO 254 delivers high mechanical strength, weldability, and durability — making it
                            ideal for extreme industrial applications such as offshore oil platforms, desalination plants,
                            and chemical processing units.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Super Austentic SMO254 Datasheet</h3>
            <p class="mb-3">
                Get the complete Super Austentic SMO254 datasheet with chemical composition,
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
                <h2>Specifications of SMO 254 Stainless Steel (UNS R60702)</h2>
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
                                    <td>SMO 254 Stainless Steel / UNS R60702</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Type</td>
                                    <td>Commercially Pure SMO</td>
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

                                <th>Element</th>
                                <th>Composition (%)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">

                                <td>Nickel</td>
                                <td>17.5 – 18.5</td>
                                </tr>

                                <td>Chromium</td>
                                <td>19.5 – 20.5</td>
                                </tr>

                                <td>Carbon</td>
                                <td>0.02 max</td>
                                </tr>

                                <td>Silicon</td>
                                <td>0.8 max</td>
                                </tr>

                                <td>Manganese</td>
                                <td>1.0 max</td>
                                </tr>

                                <td>Molybdenum</td>
                                <td>6.0 – 6.5</td>
                                </tr>

                                <td>Nitrogen</td>
                                <td>0.18 – 0.22</td>
                                </tr>

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

                                <th>Property</th>
                                <th>Imperial</th>
                                <th>Metric</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">

                                <td>Density</td>
                                <td>0.289 lb/in³</td>
                                <td>8.00 g/cm³</td>
                                </tr>

                                <td>Melting Point</td>
                                <td>2500 – 2650 °F</td>
                                <td>1370 – 1454 °C</td>
                                </tr>

                                <td>Modulus of Elasticity – Tension</td>
                                <td>29.0 × 10³ ksi</td>
                                <td>200 GPa</td>
                                </tr>

                                <td>Modulus of Elasticity – Compression</td>
                                <td>29.0 × 10³ ksi</td>
                                <td>200 GPa</td>
                                </tr>

                                <td>Modulus of Elasticity – Torsion</td>
                                <td>11.0 × 10³ ksi</td>
                                <td>76 GPa</td>
                                </tr>

                                <td>Poisson’s Ratio</td>
                                <td>0.29</td>
                                <td>—</td>
                                </tr>

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

                                <th>Property</th>
                                <th>Annealed</th>
                                <th>Cold Worked</th>
                                <th>Solution Treated</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">

                                <td>Tensile Strength (ksi / MPa)</td>
                                <td>80–100 ksi / 550–690 MPa</td>
                                <td>100–120 ksi / 690–830 MPa</td>
                                <td>80–100 ksi / 550–690 MPa</td>
                                </tr>

                                <td>Yield Strength (0.2%) (ksi / MPa)</td>
                                <td>40–60 ksi / 275–415 MPa</td>
                                <td>65–90 ksi / 450–620 MPa</td>
                                <td>40–60 ksi / 275–415 MPa</td>
                                </tr>

                                <td>Elongation (%)</td>
                                <td>30–55%</td>
                                <td>15–30%</td>
                                <td>30–55%</td>
                                </tr>

                                <td>Hardness (Rockwell B / C)</td>
                                <td>75–90 B</td>
                                <td>85–95 B</td>
                                <td>75–90 B</td>
                                </tr>

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
                    Mechanical Properties of SMO 254 Stainless Steel (Annealed)
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
                <h2>Available Forms & Size Range – SMO 254 Stainless Steel</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <p class="text-center mb-3">
                        We supply SMO 254 Stainless Steel in the following product forms:
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
                <h2>Products in SMO 254</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">SMO 254</strong> is commonly supplied as:
                    </p>
                </div>
            </div>

            <!-- Emphasized Line -->
            <div class="row justify-content-center mb-3">
                <div class="col-lg-10">
                    <p class="fw-bold fs-5 text-center my-4" style="color: #174268;">
                        We supply SMO 254 materials in accordance with the most stringent industry standards: </p>
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
                        <h5>Excellent resistance to pitting & crevice corrosion in seawater and chloride-rich media</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Superior mechanical strength vs. standard stainless steels (2x stronger than 316L)</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Outstanding resistance to stress corrosion cracking</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>High weldability and formability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Longer service life, reduced maintenance costs in harsh environments</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of SMO 254</h2>
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
                <h2>SMO 254 Stainless Steel Price in India</h2>
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
                                <h4>What is SMO 254 (UNS S31254) stainless steel?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    SMO 254 is a super-austenitic stainless steel alloy specifically designed for high
                                    corrosion resistance in chloride-rich environments, such as seawater and aggressive
                                    chemical media. With high molybdenum (6%) and nitrogen content, it offers excellent
                                    resistance to pitting, crevice corrosion, and stress corrosion cracking, while
                                    maintaining superior mechanical strength, weldability, and durability. This makes it
                                    ideal for extreme industrial applications, including offshore oil platforms,
                                    desalination plants, and chemical processing units.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the chemical and mechanical properties of SMO 254?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    SMO 254 contains Nickel 17.5–18.5%, Chromium 19.5–20.5%, Molybdenum 6–6.5%, Nitrogen
                                    0.18–0.22%, Carbon up to 0.02%, and Iron as balance. Its mechanical properties vary
                                    based on treatment; annealed SMO 254 has a tensile strength of 80–100 ksi (550–690 MPa),
                                    yield strength of 40–60 ksi (275–415 MPa), and elongation of 30–55%, while cold-worked
                                    material can reach a tensile strength of 100–120 ksi (690–830 MPa) and yield strength of
                                    65–90 ksi (450–620 MPa). Hardness ranges from 75–95 HRB depending on the processing
                                    method, ensuring both toughness and durability in harsh conditions.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What products are available in SMO 254?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    SMO 254 is supplied in a wide range of products to suit industrial needs. It is
                                    available as seamless and welded pipes, tubes for heat exchangers and boilers, sheets,
                                    plates, coils, and strips. The alloy is also offered in bars, including round, flat,
                                    hexagonal, and square forms. Additionally, SMO 254 is fabricated into pipe fittings,
                                    flanges, fasteners such as bolts, nuts, screws, washers, and studs, as well as custom
                                    fabricated components tailored to specific industrial requirements.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the key applications of SMO 254?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    SMO 254 is widely used in industries that require both high corrosion resistance and
                                    mechanical strength. In the marine and offshore sector, it is ideal for seawater piping
                                    systems, heat exchangers, and desalination plants. The chemical and petrochemical
                                    industries rely on SMO 254 for tanks, piping, and chemical processing equipment that
                                    handle chloride rich or acidic media. It is also used in oil and gas applications,
                                    including sour gas environments and high pressure pipelines. Other key applications
                                    include digesters and bleaching vessels in the pulp and paper industry, as well as
                                    hygienic and corrosion resistant processing equipment in the food and beverage sector.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose MOKSH TUBES & FITTINGS LLP for SMO 254?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP offers ISO-certified, high-performance SMO 254 materials with
                                    extensive global inventory and fast delivery. With expertise in nickel alloys, 6Mo,
                                    Duplex, and Super Duplex stainless steels, the company ensures high-quality materials
                                    through in-house testing and custom fabrication. Clients benefit from adherence to
                                    international standards, competitive pricing, and a commitment to customer satisfaction,
                                    making MOKSH TUBES & FITTINGS LLP a trusted supplier for marine, chemical, oil, and gas
                                    industries worldwide.
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
                    Get in touch with <strong>Moksh Tubes & Fittings LLP</strong> today for expert consultation, custom
                    sizes, and fast delivery.
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
                "name": "What is SMO 254 (UNS S31254) stainless steel?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "SMO 254 is a super-austenitic stainless steel alloy specifically designed for high corrosion resistance in chloride-rich environments, such as seawater and aggressive chemical media. With high molybdenum (6%) and nitrogen content, it offers excellent resistance to pitting, crevice corrosion, and stress corrosion cracking, while maintaining superior mechanical strength, weldability, and durability. This makes it ideal for extreme industrial applications, including offshore oil platforms, desalination plants, and chemical processing units."
                }
                },
                {
                "@type": "Question",
                "name": "What are the chemical and mechanical properties of SMO 254?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "SMO 254 contains Nickel 17.5–18.5%, Chromium 19.5–20.5%, Molybdenum 6–6.5%, Nitrogen 0.18–0.22%, Carbon up to 0.02%, and Iron as balance. Its mechanical properties vary based on treatment; annealed SMO 254 has a tensile strength of 80–100 ksi (550–690 MPa), yield strength of 40–60 ksi (275–415 MPa), and elongation of 30–55%, while cold-worked material can reach a tensile strength of 100–120 ksi (690–830 MPa) and yield strength of 65–90 ksi (450–620 MPa). Hardness ranges from 75–95 HRB depending on the processing method, ensuring both toughness and durability in harsh conditions."
                }
                },
                {
                "@type": "Question",
                "name": "What products are available in SMO 254?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "SMO 254 is supplied in a wide range of products to suit industrial needs. It is available as seamless and welded pipes, tubes for heat exchangers and boilers, sheets, plates, coils, and strips. The alloy is also offered in bars, including round, flat, hexagonal, and square forms. Additionally, SMO 254 is fabricated into pipe fittings, flanges, fasteners such as bolts, nuts, screws, washers, and studs, as well as custom fabricated components tailored to specific industrial requirements."
                }
                },
                {
                "@type": "Question",
                "name": "What are the key applications of SMO 254?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "SMO 254 is widely used in industries that require both high corrosion resistance and mechanical strength. In the marine and offshore sector, it is ideal for seawater piping systems, heat exchangers, and desalination plants. The chemical and petrochemical industries rely on SMO 254 for tanks, piping, and chemical processing equipment that handle chloride rich or acidic media. It is also used in oil and gas applications, including sour gas environments and high pressure pipelines. Other key applications include digesters and bleaching vessels in the pulp and paper industry, as well as hygienic and corrosion resistant processing equipment in the food and beverage sector."
                }
                },
                {
                "@type": "Question",
                "name": "Why choose MOKSH TUBES & FITTINGS LLP for SMO 254?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "MOKSH TUBES & FITTINGS LLP offers ISO-certified, high-performance SMO 254 materials with extensive global inventory and fast delivery. With expertise in nickel alloys, 6Mo, Duplex, and Super Duplex stainless steels, the company ensures high-quality materials through in-house testing and custom fabrication. Clients benefit from adherence to international standards, competitive pricing, and a commitment to customer satisfaction, making MOKSH TUBES & FITTINGS LLP a trusted supplier for marine, chemical, oil, and gas industries worldwide."
                }
                }
            ]
            }

        @endverbatim
    </script>
@endsection


