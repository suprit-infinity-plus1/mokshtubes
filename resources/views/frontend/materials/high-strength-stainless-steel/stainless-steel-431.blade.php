@extends('layouts.master')

@section('title', 'Stainless Steel 431 | Mokshtubes Precision Alloy Supplier')
@section('meta_description',
    'Stainless Steel 431 – high-quality, corrosion-resistant, hard, and tough for aerospace,
    tooling, and engineering applications.')
@section('meta_keywords',
    'Stainless Steel 431, Alloy 431, UNS S43100, High-Strength Martensitic Stainless Steel, SS 431
    Pipes, SS 431 Tubes, SS 431 Sheets, SS 431 Plates, SS 431 Coils, SS 431 Flanges, SS 431 Fasteners, SS 431 Bars, SS 431
    Rods, SS 431 Components')
@section('og_image', asset('assets/images/high-strength-stainless-steel/Stainless-Steel-431.webp'))
@section('og_type', 'article')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area"
        style="background-image: url(/assets/images/high-strength-stainless-steel/Stainless-Steel-431.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Stainless Steel 431<br>High-Strength Martensitic Stainless Steel</h1>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->
        <div class="sticky-top bg-white border-bottom material-tabs  w-100">
        <div class="container">
            <a href="#overview">Overview</a> |
            <a href="#composition">Chemical Composition</a> |
            <a href="#heat-treatment">Heat Treatment</a> |
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
                Introduction to Stainless Steel 431 / Alloy 431 / UNS S43100
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/high-strength-stainless-steel/Stainless-Steel-431.webp') }}"
                        alt="Stainless Steel 431" class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">Stainless Steel 431 (UNS S43100)</strong> is a high-strength
                            martensitic stainless steel known for
                            its excellent corrosion resistance, toughness, and superior tensile strength. It is widely used
                            in
                            aerospace, marine, chemical, and automotive applications where both strength and corrosion
                            resistance are key.
                        </p>

                        <p class="fs-6 mb-4" style="text-align: justify;">
                            <strong>MOKSH TUBES & FITTINGS LLP</strong> supplies and stocks an extensive range of Stainless
                            Steel 431
                            products, including pipes, tubes, sheets, plates, coils, flanges, fasteners, bars, rods, and
                            precision-engineered
                            components. It provides high resistance to mild acids, freshwater, and a variety of industrial
                            chemicals.
                            After heat treatment, this grade offers exceptional hardness and mechanical properties, making
                            <strong>Stainless Steel 431</strong> one of the most versatile grades in the 400-series
                            category.
                            The <strong>Stainless Steel 431 density</strong> is approximately <strong>7.75 g/cm³</strong>,
                            providing a balance between
                            corrosion resistance, durability, and machinability.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download High Strength Stainless Steel 431 Datasheet</h3>
            <p class="mb-3">
                Get the complete High Strength Stainless Steel 431 datasheet with chemical composition,
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
    <!-- End Datasheet -->

    <!-- Specifications Section -->
    <section class="sec-padd-top" id="specification">
        <div class="container">
            <div class="section-title center">
                <h2>Material Summary – SS 431 / UNS S43100</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Property</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td>Material Type</td>
                                    <td>Martensitic Stainless Steel</td>
                                </tr>
                                <tr class="t-row">
                                    <td>UNS Designation</td>
                                    <td>S43100</td>
                                </tr>
                                <tr class="t-row">
                                    <td>EN Equivalent</td>
                                    <td>X17CrNi16-2</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Strength Level</td>
                                    <td>Very High (Heat Treatable)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Corrosion Resistance</td>
                                    <td>Good (Better than SS 410 / 420)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Heat Treatable</td>
                                    <td>✔ Yes</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Weldability</td>
                                    <td>Fair (with precautions)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Magnetic Property</td>
                                    <td>Magnetic</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Typical Density</td>
                                    <td>~7.75 g/cm³</td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="mt-3 text-center">
                            👉 The chromium–nickel balance in SS 431 provides superior strength and better corrosion
                            resistance than conventional martensitic grades.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Chemical Composition -->
    <section id="composition" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Chemical Composition of Stainless Steel 431</h2>
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
                                    <td>Carbon (C)</td>
                                    <td>0.20 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium (Cr)</td>
                                    <td>15.0 – 17.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nickel (Ni)</td>
                                    <td>1.25 – 2.50</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese (Mn)</td>
                                    <td>1.0 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon (Si)</td>
                                    <td>1.0 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Phosphorus (P)</td>
                                    <td>0.040 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sulfur (S)</td>
                                    <td>0.030 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron (Fe)</td>
                                    <td>Balance</td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="mt-3 text-center">
                            This chemical balance provides excellent corrosion resistance, while carbon enables high
                            strength after heat treatment.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Physical Properties -->
    <section id="properties" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color:#174268;">Technical Composition of Stainless Steel 431</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h3 class="text-center mb-3" style="color: #db7227;">Physical Properties of Stainless Steel 431
                    </h3>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Property</th>
                                    <th>Value</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Density</td>
                                    <td>7.75 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Point</td>
                                    <td>1450 °C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Modulus of Elasticity</td>
                                    <td>200 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Thermal Conductivity</td>
                                    <td>25 W/m·K</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Electrical Resistivity</td>
                                    <td>0.60 µΩ·m</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Heat Treatment -->
            <div class="row justify-content-center mt-5" id="heat-treatment">
                <div class="col-lg-8">
                    <h4 class="text-center mb-3" style="color:#db7227;">
                        Heat Treatment & Hardening – SS 431
                    </h4>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Process</th>
                                    <th>Temperature Range</th>
                                    <th>Purpose</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Annealing</td>
                                    <td>815 – 900 °C</td>
                                    <td>Improves machinability</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Hardening (Austenitizing)</td>
                                    <td>980 – 1050 °C</td>
                                    <td>Prepares for quenching</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Quenching</td>
                                    <td>Oil / Air</td>
                                    <td>Achieves martensitic structure</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tempering</td>
                                    <td>600 – 750 °C</td>
                                    <td>Improves toughness & ductility</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Stress Relieving</td>
                                    <td>600 – 650 °C</td>
                                    <td>Reduces residual stresses</td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="mt-3 text-center">
                            📌 SS 431 achieves maximum strength only after proper quenching and tempering.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mechanical Properties -->
    <section class="sec-padd-top sec-padd-bottom" id="mechanical">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color:#174268;">
                    Mechanical Properties of Stainless Steel 431
                </h2>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Property</th>
                            <th>Metric</th>
                            <th>Imperial</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="t-row">
                            <td>Tensile Strength</td>
                            <td>850 – 1000 MPa</td>
                            <td>123,000 – 145,000 psi</td>
                        </tr>
                        <tr class="t-row">
                            <td>Yield Strength (0.2%)</td>
                            <td>600 – 800 MPa</td>
                            <td>87,000 – 116,000 psi</td>
                        </tr>
                        <tr class="t-row">
                            <td>Elongation</td>
                            <td>18 – 22%</td>
                            <td>18 – 22%</td>
                        </tr>
                        <tr class="t-row">
                            <td>Hardness (Brinell)</td>
                            <td>230 – 300 HB</td>
                            <td>230 – 300 HB</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Available Forms -->
    <section class="sec-padd-top sec-padd-bottom bg-light" id="related grades">
        <div class="container">
            <div class="section-title center mt-5">
                <h2>Available Forms & Size Range – Stainless Steel 431</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <table class="table table-bordered table-striped align-middle">
                        <thead class="table-dark text-center">
                            <tr class="t-row">
                                <th>Product Form</th>
                                <th>Typical Size Range</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr class="t-row">
                                <td>Round Bars / Rods</td>
                                <td>Ø6 mm – Ø450 mm</td>
                            </tr>
                            <tr class="t-row">
                                <td>Flat Bars</td>
                                <td>5 – 120 mm</td>
                            </tr>
                            <tr class="t-row">
                                <td>Sheets & Plates</td>
                                <td>0.5 – 80 mm</td>
                            </tr>
                            <tr class="t-row">
                                <td>Coils & Strips</td>
                                <td>0.3 – 6 mm</td>
                            </tr>
                            <tr class="t-row">
                                <td>Pipes & Tubes</td>
                                <td>OD 6 – 610 mm</td>
                            </tr>
                            <tr class="t-row">
                                <td>Forged Components</td>
                                <td>As per drawing</td>
                            </tr>
                            <tr class="t-row">
                                <td>Fasteners</td>
                                <td>M6 – M72</td>
                            </tr>
                            <tr class="t-row">
                                <td>Precision Machined Parts</td>
                                <td>CNC / Turned</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- International Standards -->
    <section class="sec-padd-top sec-padd-bottom" id="international">
        <div class="container">
            <div class="section-title center">
                <h2>International Standards & Equivalent Grades – SS 431</h2>
            </div>

            <div class="table-responsive col-lg-8 mx-auto">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Standard</th>
                            <th>Equivalent Grade</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="t-row">
                            <td>UNS</td>
                            <td>S43100</td>
                        </tr>
                        <tr class="t-row">
                            <td>EN</td>
                            <td>1.4057 (X17CrNi16-2)</td>
                        </tr>
                        <tr class="t-row">
                            <td>DIN</td>
                            <td>X17CrNi16-2</td>
                        </tr>
                        <tr class="t-row">
                            <td>ASTM</td>
                            <td>A276, A479</td>
                        </tr>
                        <tr class="t-row">
                            <td>AISI</td>
                            <td>431</td>
                        </tr>
                        <tr class="t-row">
                            <td>JIS</td>
                            <td>SUS 431</td>
                        </tr>
                        <tr class="t-row">
                            <td>ISO</td>
                            <td>X17CrNi16-2</td>
                        </tr>
                    </tbody>
                </table>
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

    <section id="products" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Products in Stainless Steel 431</h2>
            </div>

            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">MOKSH TUBES & FITTINGS LLP</strong>, with extensive experience in
                        high-strength martensitic stainless steels and a strong supply network, offers a complete range of
                        <strong class="text-dark">STAINLESS STEEL 431</strong> products. These materials are designed for
                        demanding applications in aerospace, marine, chemical, and automotive industries, where superior
                        mechanical performance and corrosion resistance are essential.
                        Our SS 431 offerings meet international quality standards, ensuring reliability, durability, and
                        precision for both critical and general-purpose projects.
                    </p>
                </div>
            </div>

            <!-- Horizontal Styled Product List -->
            <div class="row justify-content-center mb-5">
                <div class="col-lg-10">
                    <div class="p-4 bg-white rounded shadow-sm border-start border-4" style="border-color: #db7227;">
                        <div class="row">
                            <div class="col-12 col-sm-6 mb-2 d-flex justify-content-start align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Seamless Pipes</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex justify-content-start align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Welded Pipes & Tubes</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex justify-content-start align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Sheets, Plates & Coils</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex justify-content-start align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Bars & Rods (Round, Flat, Hex, Square)</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex justify-content-start align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Forged Components</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex justify-content-start align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Pipe Fittings (Elbows, Reducers, Caps, Stub Ends, Tees)</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex justify-content-start align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Flanges (Weld Neck, Slip-On, Blind, Socket Weld, Threaded)</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex justify-content-start align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Fasteners (Bolts, Nuts, Screws, Studs, Washers)</span>
                            </div>
                            <div class="col-12 col-sm-6 mb-2 d-flex justify-content-start align-items-start">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                <span>Custom Fabricated Components</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Emphasized Line -->
            <div class="row justify-content-center mb-3">
                <div class="col-lg-10">
                    <p class="fw-bold fs-5 text-center my-4" style="color: #174268;">
                        All Stainless Steel 431 products conform to ASTM A276, A479, A484, and other internationally
                        recognized specifications.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Image Cards (Now centered and responsive) -->
    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-4 justify-content-center">
        @foreach ($products as $product)
            <div class="col d-flex">
                <a href="{{ route($product['route']) }}" class="text-decoration-none w-100">
                    <div class="product-card h-100">
                        <img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}" class="img-fluid w-100">
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
                        <div class="advantage-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>High strength and hardness after heat treatment</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Excellent resistance to freshwater, mild acids, and alkalis</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-shaded"></i></div>
                        <h5>Good corrosion resistance compared to other martensitic grades</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-fire"></i></div>
                        <h5>Suitable for both quenched and heat-treated conditions</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-hammer"></i></div>
                        <h5>Excellent toughness and durability under mechanical stress</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Stainless Steel 431</h2>
                <p class="text-center pb-3">
                    <strong class="text-dark">STAINLESS STEEL 431</strong> is used across industries that demand
                    high strength, hardness, and corrosion resistance in moderate environments:
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-airplane-engines"></i></div>
                        <h5>Aerospace Industry</h5>
                        <p>Used in aircraft fittings, landing gear components, shafts, and fasteners requiring high tensile
                            strength and toughness.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-water"></i></div>
                        <h5>Marine & Offshore</h5>
                        <p>Ideal for propeller shafts, pump shafts, and marine fasteners with resistance to seawater
                            corrosion.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Chemical Processing</h5>
                        <p>Used for reactors, valves, pumps, and components exposed to mildly corrosive media and chemical
                            solutions.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-car-front"></i></div>
                        <h5>Automotive & Transport</h5>
                        <p>Widely used in axles, drive shafts, and components exposed to vibration, stress, and moderate
                            corrosion.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Oil & Gas Sector</h5>
                        <p>Applications include valve parts, pump impellers, and structural elements exposed to drilling
                            environments.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-file-ruled"></i></div>
                        <h5>Paper & Pulp Industry</h5>
                        <p>Used in equipment handling chloride-rich or acidic chemical streams.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-shield-fill-exclamation"></i></div>
                        <h5>Defense Applications</h5>
                        <p>Ideal for heavy-duty components and fasteners requiring superior strength under extreme stress
                            conditions.</p>
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
                        <h5>Experts in high-performance stainless steel production</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-box-seam"></i></div>
                        <h5>Extensive global supplier network for raw materials</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-check2-circle"></i></div>
                        <h5>Quality assurance and compliance with global standards</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-people-fill"></i></div>
                        <h5>Custom-engineered solutions for every project</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Trusted by aerospace, marine, and engineering sectors worldwide</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="price" class="sec-padd-top sec-padd-bottom bg-light py-5">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h2>Stainless Steel 431 Price per kg in India</h2>
            </div>

            <p class="text-center fs-5">
                <strong>Typical Range:</strong> ₹320 – ₹780 per kg
            </p>
            <p class="text-center mb-2">
                (Price varies by OD, wall thickness, form, and finish)
            </p>

            <p class="text-center fs-5">
                Contact us for exact quotation based on size and quantity.
            </p>
        </div>
    </section>


    <!--Start faq content area-->
    <section id="faq" class="faq-content-area sec-padd2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="accordion-box">
                        <div class="section-title center">
                            <h2>FAQ’s – Stainless Steel 431</h2>
                        </div>

                        <!-- Q1 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>1. What is Stainless Steel 431 used for?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Stainless Steel 431 is widely used in aerospace, marine, oil & gas, and automotive
                                    applications where strength, toughness, and corrosion resistance are required.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>2. Is Stainless Steel 431 magnetic?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Yes. Being a martensitic stainless steel, it is magnetic both in annealed and hardened
                                    conditions.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>3. Can Stainless Steel 431 be welded?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Welding is possible, but preheating and post-weld heat treatment are recommended to
                                    minimize cracking and maintain mechanical strength.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>4. How does Stainless Steel 431 compare with 304 or 316?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Stainless Steel 431 has higher hardness and tensile strength than 304 or 316 but
                                    slightly lower corrosion resistance, making it suitable for mechanical and structural
                                    use.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>5. What products are available in Stainless Steel 431 at MOKSH TUBES?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP supplies SS 431 in pipes, tubes, sheets, plates, coils,
                                    flanges, fittings, fasteners, bars, rods, and customized components engineered for
                                    precision projects.
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


    <!-- Contact Section -->
    <section id="contact-us" class="sec-padd-bottom">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Contact Us</h2>
                <p>
                    For any inquiries or to request a quote, reach out to <strong>Moksh Tubes & Fittings LLP</strong> – your
                    trusted partner for <strong>stainless steel 431</strong> products.
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
                        "name": "What is Stainless Steel 431 used for?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Stainless Steel 431 is widely used in aerospace, marine, oil & gas, and automotive applications where strength, toughness, and corrosion resistance are required."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Is Stainless Steel 431 magnetic?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Yes. Being a martensitic stainless steel, it is magnetic both in annealed and hardened conditions."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Can Stainless Steel 431 be welded?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Welding is possible, but preheating and post-weld heat treatment are recommended to minimize cracking and maintain mechanical strength."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "How does Stainless Steel 431 compare with 304 or 316?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Stainless Steel 431 has higher hardness and tensile strength than 304 or 316 but slightly lower corrosion resistance, making it suitable for mechanical and structural use."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "What products are available in Stainless Steel 431 at MOKSH TUBES?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "MOKSH TUBES & FITTINGS LLP supplies SS 431 in pipes, tubes, sheets, plates, coils, flanges, fittings, fasteners, bars, rods, and customized components engineered for precision projects."
                        }
                    }
                ]
            }

        @endverbatim
    </script>
@endsection
