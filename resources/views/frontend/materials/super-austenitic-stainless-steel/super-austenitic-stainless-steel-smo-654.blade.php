@extends('layouts.master')

@section('title', 'SMO 654 – Super Austenitic Stainless Steel') <!-- 52 chars -->
@section('meta_description', 'SMO 654 is a super austenitic stainless steel offering excellent chloride resistance, high
    strength, and durability in harsh chemical environments.')
@section('meta_keywords', 'SMO 654, Super Austenitic Stainless Steel, Chloride Resistant Alloy, Chemical Resistant
    Steel, High Strength Stainless Steel, Industrial Stainless Steel Alloys')
@section('og_image',
    asset('assets/images/super-austenitic-stainless-steel/super-austenitic-stainless-steel-SMO-654.webp'))
@section('og_type', 'article')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area"
        style="background-image: url(/assets/images/super-austenitic-stainless-steel/super-austenitic-stainless-steel-SMO-654.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>SMO 654 <br> High Strength & Chloride Resistant Stainless Steel</h1>

 <!-- Add your extra content here -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        SMO® 654 is one of the most corrosion-resistant stainless steels in the world. With extremely high molybdenum (7–8%), chromium (24–25%), nickel (22%), and nitrogen (0.5%) content, it offers outstanding resistance to pitting, crevice corrosion, and chloride stress corrosion cracking (SCC) It is widely used in seawater systems, desalination, offshore structures, chemical processing, and pulp & paper bleaching environments.
                        <!-- End extra content -->
                </div>
            </div>
        </div>
    </section>

<div class="sticky-top bg-white border-bottom material-tabs  w-100">
         <div class="container">
            <a href="#overview">Overview</a> |
            <a href="#composition">Chemical Composition</a> |
            <a href="#heat-treatment">Heat Treatment</a> |
            <a href="#mechanical">Mechanical Properties</a> |
            <a href="#price">Advantages</a> |
            <a href="#applications">Applications</a> |
            <a href="#faq">FAQ</a> |
            <a href="#contact us">Contact Us</a>
        </div>
    </div>
    <!--End breadcrumb area-->
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Product Overview</h2>
            </div>

            <h2 class="fw-semibold text-center mb-5" style="color: #db7227;">
                Introduction To SMO 654 / UNS S31254 / 6Mo Stainless Steel
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/super-austenitic-stainless-steel/super-austenitic-stainless-steel-SMO-654.webp') }}"
                        alt="SMO 654" class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a trusted manufacturer,
                            supplier, exporter, and stockist of high-performance<strong class="text-black"> SMO 654 (UNS
                                S32654) <a href="{{ route('products') }}">products</a>.</strong> We offer a
                            wide range of components including Pipes & Tubes, Pipe Fittings, Flanges, Sheets & Plates,
                            Coils, Wires, Fasteners, Bars, and Custom-Fabricated Items, suited for highly corrosive and
                            demanding environments.

                        <p> <strong class="text-black">SMO 654</strong> is an advanced super austenitic stainless steel
                            alloy that provides exceptional resistance to pitting, crevice corrosion, and chloride stress
                            corrosion cracking, even in the most aggressive environments like seawater, pulp & paper
                            bleaching, or offshore operations. With a very high level of molybdenum (~7.5%), chromium, and
                            nitrogen, SMO 654 surpasses other <a
                                href="{{ route('materials.austenitic-stainless-Steel') }}">stainless
                                steels</a> in terms of corrosion resistance and
                            mechanical strength.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Super Austentic SMO654 Datasheet</h3>
            <p class="mb-3">
                Get the complete Super Austentic SMO654 datasheet with chemical composition,
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

    <!-- End Datasheet Download Section -->


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
                                    <td>21.0 – 23.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium</td>
                                    <td>24.0 – 25.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon</td>
                                    <td>0.02 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon</td>
                                    <td>0.5 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese</td>
                                    <td>1.0 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Molybdenum</td>
                                    <td>7.0 – 8.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nitrogen</td>
                                    <td>0.45 – 0.55</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron</td>
                                    <td>Balance</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron</td>
                                    <td>Balance</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Phosphorus</td>
                                    <td>0.03 max</td>
                                </tr>
                                <tr class="t-row">
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
                                <tr class="t-row">
                                    <th>Property</th>
                                    <th>Imperial</th>
                                    <th>Metric</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Density</td>
                                    <td>0.289 lb/in³</td>
                                    <td>8.00 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Point</td>
                                    <td>2550 – 2650 °F</td>
                                    <td>1399 – 1454 °C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Modulus of Elasticity – Tension</td>
                                    <td>29.0 × 10³ ksi</td>
                                    <td>200 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Modulus of Elasticity – Compression</td>
                                    <td>29.0 × 10³ ksi</td>
                                    <td>200 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Modulus of Elasticity – Torsion</td>
                                    <td>11.0 × 10³ ksi</td>
                                    <td>76 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Poisson’s Ratio</td>
                                    <td>0.29</td>
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
                                    <td>90–115 ksi / 620–790 MPa</td>
                                    <td>110–135 ksi / 760–930 MPa</td>
                                    <td>90–115 ksi / 620–790 MPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (0.2%) (ksi / MPa)</td>
                                    <td>50–70 ksi / 345–485 MPa</td>
                                    <td>75–100 ksi / 515–690 MPa</td>
                                    <td>50–70 ksi / 345–485 MPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elongation (%)</td>
                                    <td>25–40%</td>
                                    <td>10–25%</td>
                                    <td>25–40%</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Hardness (Rockwell B / C)</td>
                                    <td>80–95 B</td>
                                    <td>90–100 B</td>
                                    <td>80–95 B</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Brinell Hardness (HB)</td>
                                    <td>220–280 HB</td>
                                    <td>260–310 HB</td>
                                    <td>220–280 HB</td>
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
            [
                'name' => 'Seamless Pipes',
                'route' => 'products.pipes-tubes.seamless-pipes',
                'image' => 'assets/images/all product/seamless-pipes-10.webp',
            ],

            [
                'name' => 'Welded Pipes (ERW & EFW)',
                'route' => 'products.pipes-tubes.welded-pipes',
                'image' => 'assets/images/all product/welded-pipes-tubes-1.webp',
            ],
            [
                'name' => 'Tubes (Capillary, U-Bend)',
                'route' => 'products.pipes-tubes.u-bent-tubes',
                'image' => 'assets/images/all product/u-bent-tube.webp',
            ],
            [
                'name' => 'Sheets & Plates',
                'route' => 'products.sheets-plates-coils.sheets-and-plates',
                'image' => 'assets/images/all product/sheets-plates.webp',
            ],
            [
                'name' => 'Coils & Strips',
                'route' => 'products.sheets-plates-coils.strips',
                'image' => 'assets/images/aluminium-alloys/aluminium-alloys-5083.webp',
            ],
            [
                'name' => 'Round Bars, Flat Bars, Hex Bars, Square Bars',
                'route' => 'products.bars-rods',
                'image' => 'assets/images/aluminium-alloys/aluminium-alloys-6063.webp',
            ],
            [
                'name' => 'Pipe Fittings (Elbows, Tees, Reducers, Caps, Stub Ends)',
                'route' => 'products.pipe-fittings-flanges-fasteners.pipe-fittings',
                'image' => 'assets/images/aluminium-alloys/aluminium-alloys-6012.webp',
            ],
            [
                'name' => 'Flanges (Weld Neck, Slip-On, Blind, Socket Weld, Threaded)',
                'route' => 'products.pipe-fittings-flanges-fasteners.flanges-and-gaskets',
                'image' => 'assets/images/engineering-steels/engineering-steels-4130.webp',
            ],
            [
                'name' => 'Fasteners (Bolts, Nuts, Screws, Washers, Studs)',
                'route' => 'products.pipe-fittings-flanges-fasteners.fasteners',
                'image' => 'assets/images/all product/FASTENERS.webp',
            ],
            [
                'name' => 'Custom Fabricated Components',
                'route' => 'products.pipe-fittings-flanges-fasteners.custom-fabricated-fittings',
                'image' => 'assets/images/all product/custom-metal-fabricated.webp',
            ],
        ];
    @endphp

    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Products in SMO 654</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">SMO 654</strong> is commonly supplied as:
                    </p>
                </div>
            </div>

            <!-- Horizontal Styled Product List -->
            <div class="row justify-content-center mb-5">
                <div class="col-lg-10">
                    <div class="p-4 bg-white rounded shadow-sm border-start border-4" style="border-color: #db7227;">
                        <div class="row">
                            {{-- @foreach ($products as $slug => $product) --}}
                            @foreach ($products as $product)
                                <div class="col-12 col-sm-6 mb-2 d-flex justify-content-start align-items-start">
                                    <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                    <span>{{ $product['name'] }}</span>
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
                        We supply SMO 654 materials in accordance with the most stringent industry standards: </p>
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


    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Uses and Advantages</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Exceptional resistance to pitting (PREN > 50), crevice corrosion, and chloride-induced SCC</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Higher strength than 300 series stainless steels and conventional austenitic grades</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Outstanding weldability and formability with low carbon content</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Reliable performance in oxidizing, reducing, and chloride-rich environments</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Suitable for marine, acidic, high-saline, and offshore conditions</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of SMO 654</h2>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Marine & Offshore Engineering</h5>
                        <p>Seawater piping, desalination plants, marine heat exchangers, splash zone structures</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Chemical & Petrochemical Processing</h5>
                        <p>Vessels, piping systems, agitators, heat exchangers handling chlorides and acidic media
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Pulp & Paper Industry</h5>
                        <p>Bleaching equipment, digesters, storage tanks in chloride-rich and high-pH conditions
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Oil & Gas Exploration</h5>
                        <p>Components exposed to sour gas, hydrogen sulfide (H₂S), CO₂, and chloride-rich fluids</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Power Generation</h5>
                        <p>Condensers, superheaters, and cooling systems operating in harsh cooling water conditions</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Desalination Plants</h5>
                        <p>Brine heaters, evaporator tubes, heat recovery units where chloride stress is significant</p>
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
                        <h5>In-house expertise in manufacturing super austenitic stainless steels</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Reliable sourcing of certified raw materials from global mills</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Customized solutions and sizes available on demand</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Stringent quality checks, testing, and certification for each order</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Export-ready packaging, global logistics, and customer-first support</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Start faq content area-->
    <section class="faq-content-area sec-padd2">
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
                                <h4>What is SMO 654 (UNS S32654) stainless steel?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    SMO 654 is a super-austenitic stainless steel alloy engineered for maximum corrosion
                                    resistance and mechanical strength in extremely aggressive environments. With very high
                                    molybdenum content (~7.5%), chromium, and nitrogen, it provides exceptional protection
                                    against pitting, crevice corrosion, and chloride stress corrosion cracking. It is widely
                                    used in seawater applications, pulp and paper bleaching processes, marine operations,
                                    and offshore engineering due to its durability and ability to withstand harsh,
                                    chloride rich conditions.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the chemical and mechanical properties of SMO 654?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    The chemical composition of SMO 654 includes Nickel 21–23%, Chromium 24–25%, Molybdenum
                                    7–8%, Nitrogen 0.45–0.55%, Carbon 0.02% max, and Iron as balance. Phosphorus and sulfur
                                    are controlled to low levels for improved corrosion resistance. Mechanically, annealed
                                    SMO 654 exhibits a tensile strength of 90–115 ksi (620–790 MPa), yield strength of 50–70
                                    ksi (345–485 MPa), and elongation of 25–40%. Cold-worked material reaches higher
                                    strengths up to 135 ksi (930 MPa) with slightly reduced ductility. Its hardness ranges
                                    between 80–100 HRB, making it robust for demanding industrial applications.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What products are available in SMO 654?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    SMO 654 is supplied in a wide variety of forms to meet industrial needs. It is available
                                    as seamless and welded pipes, capillary, U-bend, boiler, and heat exchanger tubes,
                                    sheets, plates, coils, and strips. Additionally, it comes in bars including round, flat,
                                    hexagonal, and square shapes. SMO 654 is also fabricated into pipe fittings, flanges,
                                    fasteners such as bolts, nuts, screws, washers, and studs, and custom engineered
                                    components for specialized applications in marine, chemical, oil, and gas industries.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the main applications of SMO 654?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    SMO 654 is preferred in industries where both corrosion resistance and mechanical
                                    strength are critical. In marine and offshore engineering, it is used for seawater
                                    piping, desalination plants, and splash zone structures. Chemical and petrochemical
                                    industries employ it in vessels, piping systems, and heat exchangers handling chlorides
                                    and acids. The pulp and paper industry uses SMO 654 for bleaching equipment, digesters,
                                    and storage tanks in high-pH or chloride rich conditions. It is also suitable for oil
                                    and gas exploration, power generation cooling systems, and desalination plant components
                                    where resistance to chloride stress is essential.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose MOKSH TUBES & FITTINGS LLP for SMO 654?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP provides high quality, certified SMO 654 materials backed by
                                    in house expertise in super austenitic stainless steels. We source premium raw materials
                                    globally, offer customized solutions and sizes, and ensure strict quality control with
                                    testing and certification for every order. With export ready packaging, global logistics
                                    support, and customer first service, MOKSH TUBES & FITTINGS LLP is a trusted partner for
                                    industries requiring durable, high-performance stainless steel solutions.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End faq content area-->

     {{-- blog section start --}}
      <section class="blog-section sec-padd2">
        <div class="container">
            <div class="section-title">
                <h2>blogs</h2>
            </div>
            <div class="row">
                @foreach ($blogs as $blog)
                    {{-- {{ dd($blog) }} --}}
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
    {{-- blog section end --}}


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Contact Us</h2>
                <p>
                    Get in touch with <strong>Moksh Tubes & Fittings LLP</strong> your dependable partner for
                    high-performance alloys.
                </p>
                <!-- Call button -->
                <a href="javascript:void(0);" class="contact-cta-btn" data-bs-toggle="modal"
                    data-bs-target="#contactFormModal">
                    Get in Touch
                </a>
            </div>
        </div>
    </section>





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
                "name": "What is SMO 654 (UNS S32654) stainless steel?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "SMO 654 is a super-austenitic stainless steel alloy engineered for maximum corrosion resistance and mechanical strength in extremely aggressive environments. With very high molybdenum content (~7.5%), chromium, and nitrogen, it provides exceptional protection against pitting, crevice corrosion, and chloride stress corrosion cracking. It is widely used in seawater applications, pulp and paper bleaching processes, marine operations, and offshore engineering due to its durability and ability to withstand harsh, chloride rich conditions."
                }
                },
                {
                "@type": "Question",
                "name": "What are the chemical and mechanical properties of SMO 654?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The chemical composition of SMO 654 includes Nickel 21–23%, Chromium 24–25%, Molybdenum 7–8%, Nitrogen 0.45–0.55%, Carbon 0.02% max, and Iron as balance. Phosphorus and sulfur are controlled to low levels for improved corrosion resistance. Mechanically, annealed SMO 654 exhibits a tensile strength of 90–115 ksi (620–790 MPa), yield strength of 50–70 ksi (345–485 MPa), and elongation of 25–40%. Cold-worked material reaches higher strengths up to 135 ksi (930 MPa) with slightly reduced ductility. Its hardness ranges between 80–100 HRB, making it robust for demanding industrial applications."
                }
                },
                {
                "@type": "Question",
                "name": "What products are available in SMO 654?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "SMO 654 is supplied in a wide variety of forms to meet industrial needs. It is available as seamless and welded pipes, capillary, U-bend, boiler, and heat exchanger tubes, sheets, plates, coils, and strips. Additionally, it comes in bars including round, flat, hexagonal, and square shapes. SMO 654 is also fabricated into pipe fittings, flanges, fasteners such as bolts, nuts, screws, washers, and studs, and custom engineered components for specialized applications in marine, chemical, oil, and gas industries."
                }
                },
                {
                "@type": "Question",
                "name": "What are the main applications of SMO 654?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "SMO 654 is preferred in industries where both corrosion resistance and mechanical strength are critical. In marine and offshore engineering, it is used for seawater piping, desalination plants, and splash zone structures. Chemical and petrochemical industries employ it in vessels, piping systems, and heat exchangers handling chlorides and acids. The pulp and paper industry uses SMO 654 for bleaching equipment, digesters, and storage tanks in high-pH or chloride rich conditions. It is also suitable for oil and gas exploration, power generation cooling systems, and desalination plant components where resistance to chloride stress is essential."
                }
                },
                {
                "@type": "Question",
                "name": "Why choose MOKSH TUBES & FITTINGS LLP for SMO 654?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "MOKSH TUBES & FITTINGS LLP provides high quality, certified SMO 654 materials backed by in house expertise in super austenitic stainless steels. We source premium raw materials globally, offer customized solutions and sizes, and ensure strict quality control with testing and certification for every order. With export ready packaging, global logistics support, and customer first service, MOKSH TUBES & FITTINGS LLP is a trusted partner for industries requiring durable, high-performance stainless steel solutions."
                }
                }
            ]
            }

        @endverbatim
    </script>
@endsection
