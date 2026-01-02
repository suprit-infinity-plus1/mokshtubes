@extends('layouts.master')

@section('title', 'Nickel 200 – Commercial Pure Nickel Grade') <!-- 52 chars -->
@section('meta_description',
    'Premium Nickel 200 offers excellent thermal and electrical conductivity along with
    outstanding corrosion resistance for diverse industrial applications.')
@section('meta_keywords',
    'Nickel 200, Commercial Nickel, Pure Nickel, Thermal Conductivity, Electrical Conductivity,
    Corrosion Resistant Nickel, Industrial Nickel, Nickel Alloy, High Purity Nickel')
@section('og_image', asset('assets/images/nickel-based-superalloys/nickel-based-superalloys-200.webp'))
@section('og_type', 'article')
@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area"
        style="background-image: url(/assets/images/nickel-based-superalloys/nickel-based-superalloys-200.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Nickel 200<br> High Purity Nickel with Great Conductivity</h1>

                    <!-- Add your extra content here -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Nickel 200 is a commercially pure wrought nickel alloy (≥99.0% Ni) known for its outstanding
                        resistance to caustic alkalies, excellent ductility, and exceptional thermal & electrical
                        conductivity. Below is the complete datasheet including chemical composition, mechanical properties,
                        technical specifications, applications, pricing, and FAQs.

                    </p>
                    <!-- End extra content -->
                </div>
            </div>
        </div>
    </section>

    <div class="sticky-top bg-white border-bottom material-tabs d-none d-md-block w-100">
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
    <section id="overview" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Product Overview</h2>
            </div>

            <h2 class="fw-semibold text-center mb-5" style="color: #db7227;">
                Introduction To Nickel 200 / Alloy 200 / UNS N02200 </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/nickel-based-superalloys/nickel-based-superalloys-200.webp') }}"
                        alt="Nickel 200" class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a trusted supplier, exporter,
                            importer, and stockist of a wide range of<strong class="text-black"> NICKEL
                                200 products</strong> including
                            <a href="{{ route('products.pipes-tubes') }}">Pipes & Tubes</a>, Pipe Fittings, Flanges,
                            Fasteners, Sheets & Plates, Coils, Wires, Round Bars,
                            Flat Bars, Angles, Channels, Welding Rods, Wire Mesh, and other Custom and Hard-to-Find <a
                                href="{{ route('materials.nickel-Based-Superalloys') }}">Nickel
                                200</a> Components.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">Nickel 200</strong>, is a commercially pure wrought nickel alloy
                            (99.6% Ni) that offers excellent resistance to a wide range of corrosive environments. It
                            exhibits outstanding mechanical properties and exceptional resistance to alkaline media,
                            especially in caustic soda and other strongly alkaline solutions. This solid-solution
                            strengthened alloy is highly ductile, making it ideal for both hot and cold working, and is
                            particularly suited for applications requiring high thermal and electrical conductivity.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Nickel Based Superalloys 200 Datasheet</h3>
            <p class="mb-3">
                Get the complete Nickel Based Superalloys 200 datasheet with chemical composition,
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

    <!-- Specifications Section -->
    <section class="sec-padd-top" id="specification">
        <div class="container">
            <div class="section-title center">
                <h2>Nickel 200 Specifications</h2>
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
                                    <td>Nickel 200 / Alloy 200 / UNS N02200</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Material Type</td>
                                    <td>Commercially Pure Nickel</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Purity</td>
                                    <td>≥ 99.0% Nickel</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon Content</td>
                                    <td>≤ 0.15%</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Forms Available</td>
                                    <td>Pipes, Tubes, Plates, Bars, Coils, Fittings, Flanges, Fasteners</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Conditions</td>
                                    <td>Annealed / Cold Worked / Stress-Relieved</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Testing</td>
                                    <td>PMI, Tensile, Hardness, Corrosion Test</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Certification</td>
                                    <td>EN 10204 3.1 / 3.2</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> <!-- col-lg-8 -->

            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <section id="composition" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Chemical Composition of Nickel 200</h2>
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
                            <tbody>
                                <tr class="t-row">
                                    <td>Nickel (Ni)</td>
                                    <td>99.0 min</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Copper (Cu)</td>
                                    <td>0.25 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron (Fe)</td>
                                    <td>0.40 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese (Mn)</td>
                                    <td>0.35 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon (Si)</td>
                                    <td>0.35 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon (C)</td>
                                    <td>0.15 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sulfur (S)</td>
                                    <td>0.01 max</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="mt-3 text-center">
                            Nickel 200 offers high purity + high conductivity → ideal for electronics, food processing &
                            chemical media.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="properties" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Technical Composition of Nickel 200</h2>
            </div>
            <!-- Mechanical Properties Table -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h3 class="text-center mb-3" style="color: #db7227;">Physical Properties of Nickel 200</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Property</th>
                                    <th>Imperial</th>
                                    <th>Metric</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td>Density</td>
                                    <td>0.321 lb/in³</td>
                                    <td>8.89 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Range</td>
                                    <td>2615–2635 °F</td>
                                    <td>1435–1446 °C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Specific Heat</td>
                                    <td>0.109 Btu/lb·°F</td>
                                    <td>456 J/kg·°C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Curie Temperature</td>
                                    <td>680 °F</td>
                                    <td>360 °C</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="mt-3 text-center">
                            Duplex S31803 has double the strength of 304/316 stainless steel and significantly higher
                            pitting resistance.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Mechanical Properties Table -->
            <div class="row justify-content-center mt-5" id="heat-treatment">
                <div class="col-lg-8">
                    <h4 class="text-center mb-3" style="color: #db7227;">Mechanical Properties of Nickel 200</h4>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Condition</th>
                                    <th>Tensile Strength</th>
                                    <th>Yield Strength</th>
                                    <th>Hardness</th>
                                    <th>Elongation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td>Rod &amp; Bar – Hot Finished</td>
                                    <td>55–35 ksi (380–240 MPa)</td>
                                    <td>15–45 ksi (105–310 MPa)</td>
                                    <td>60–85 HB</td>
                                    <td>90–150%</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Rod &amp; Bar – Cold Drawn</td>
                                    <td>35–10 ksi (240–70 MPa)</td>
                                    <td>40–100 ksi (275–690 MPa)</td>
                                    <td>65–110 HB</td>
                                    <td>140–230%</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Rod &amp; Bar – Annealed</td>
                                    <td>55–40 ksi</td>
                                    <td>15–30 ksi</td>
                                    <td>55–75 HB</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Plate – Hot Rolled</td>
                                    <td>55–35 ksi</td>
                                    <td>20–80 ksi</td>
                                    <td>55–100 HB</td>
                                    <td>100–150%</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Plate – Annealed</td>
                                    <td>60–40 ksi</td>
                                    <td>15–40 ksi</td>
                                    <td>55–80 HB</td>
                                    <td>90–140%</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sheet – Hard</td>
                                    <td>15–2 ksi</td>
                                    <td>70–105 ksi</td>
                                    <td>90–115 HB</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sheet – Annealed</td>
                                    <td>55–40 ksi</td>
                                    <td>15–30 ksi</td>
                                    <td>55–75 HB</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Strip – Spring</td>
                                    <td>15–2 ksi</td>
                                    <td>70–115 ksi</td>
                                    <td>90–130 HB</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tubing – Stress Relieved</td>
                                    <td>35–15 ksi</td>
                                    <td>40–90 ksi</td>
                                    <td>65–110 HB</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tubing – Annealed</td>
                                    <td>60–40 ksi</td>
                                    <td>12–30 ksi</td>
                                    <td>55–75 HB</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Wire – No.1 Temper</td>
                                    <td>—</td>
                                    <td>40–75 ksi</td>
                                    <td>70–95 HRB</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Wire – Spring Temper</td>
                                    <td>—</td>
                                    <td>105–135 ksi</td>
                                    <td>125–145 HB</td>
                                    <td>—</td>
                                </tr>
                            </tbody>
                        </table>
                        {{-- <p class="mt-3 text-center">
                            ⚠ Important: Duplex steels must be cooled quickly after heat treatment to prevent formation of
                            sigma
                            phase, which reduces corrosion resistance.
                        </p> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-padd-top sec-padd-bottom bg-light" id="related grades">
        <div class="container">
            <div class="section-title center mt-5" id="available forms">
                <h2>Available Forms & Size Range</h2>
            </div>

            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6 text-center">
                        We supply Duplex Stainless Steel S31803 in the following product forms and dimensions:
                    </p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="p-4 bg-white rounded shadow-sm border-start border-4" style="border-color:#db7227;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">✔ Seamless Pipes (ASTM B161 / B163)</li>
                            <li class="list-group-item">✔ ERW &amp; EFW Welded Pipes (ASTM B725 / B751)</li>
                            <li class="list-group-item">✔ Capillary, Heat Exchanger &amp; U-Bend Tubes</li>
                            <li class="list-group-item">✔ Sheets, Plates &amp; Strips (ASTM B162)</li>
                            <li class="list-group-item">✔ Coils &amp; Foils</li>
                            <li class="list-group-item">✔ Round, Flat, Square &amp; Hex Bars (ASTM B160)</li>
                            <li class="list-group-item">✔ Buttweld Fittings – A403</li>
                            <li class="list-group-item">✔ Flanges – A182 / B564</li>
                            <li class="list-group-item">✔ Fasteners – Bolts, Nuts, Screws, Studs</li>
                            <li class="list-group-item">✔ Wire, Welding Rods, Wire Mesh</li>
                            <li class="list-group-item">✔ Custom-Machined Parts</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Standards & Equivalent Grades Section -->
    <section class="sec-padd-top sec-padd-bottom" id="international">
        <div class="container">
            <div class="section-title center">
                <h2>International Standards & Equivalent Grades</h2>
            </div>

            <div class="table-responsive col-lg-8 mx-auto">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Product</th>
                            <th>Standards</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row">
                            <td>Rods &amp; Bars</td>
                            <td>ASTM B160, DIN 17752, ISO 9723, VdTÜV 345</td>
                        </tr>
                        <tr class="t-row">
                            <td>Pipes &amp; Tubes</td>
                            <td>ASTM B161, B163, B725, B730 / ISO 6207</td>
                        </tr>
                        <tr class="t-row">
                            <td>Plates &amp; Sheets</td>
                            <td>ASTM B162, DIN 17750, ISO 6208</td>
                        </tr>
                        <tr class="t-row">
                            <td>Fittings</td>
                            <td>ASTM B366</td>
                        </tr>
                        <tr class="t-row">
                            <td>Forgings</td>
                            <td>ISO 9725, DIN 17754</td>
                        </tr>
                        <tr class="t-row">
                            <td>Wire</td>
                            <td>DIN 17753, ISO 9724</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- End Standards & Equivalent Grades Section -->


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
                <h2>Products in NICKEL 200</h2>
            </div>

            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">NICKEL 200 (UNS N02200 / W.Nr. 2.4066) </strong> is known for its purity
                        and resistance to alkaline environments. It is widely used in electrical, chemical, and food
                        processing applications due to its ability to resist corrosion and maintain strength in extreme
                        environments.
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
                        This alloy meets several recognized industry standards, including:
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


    <section id="uses"  class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Uses and Advantages</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Excellent corrosion resistance in caustic and alkaline environments</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>High thermal and electrical conductivity</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Suitable for food processing and handling due to high purity</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Outstanding ductility and mechanical strength</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Resistant to neutral and alkaline salt solutions</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Easy to fabricate and weld using conventional techniques</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="applications"  class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Nickel 200</h2>
                <p class="text-center pb-3"><strong class="text-dark">Nickel 200</strong> is a preferred material in
                    industries where purity, resistance to alkalis, and non-magnetic properties are critical. Typical
                    applications include:
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Chemical Processing</h5>
                        <p>Used in tanks, vessels, and piping for caustic soda, caustic potash, and chlor-alkali production.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Electronics & Electrical</h5>
                        <p>Ideal for battery components, electrical contacts, terminals, and lead wires due to its
                            conductivity.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Food Processing</h5>
                        <p>Used in handling of fatty acids, fruits, and caustic cleaning solutions.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Aerospace & Defense</h5>
                        <p>Deployed in precision instrumentation and radar/electronics components.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Marine & Offshore</h5>
                        <p>Corrosion-resistant fasteners and components exposed to seawater and saline atmospheres.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Heat Exchangers</h5>
                        <p>Preferred in systems requiring purity and thermal conductivity under caustic conditions.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-capsule"></i></div>
                        <h5>Medical Equipment</h5>
                        <p>Used in equipment requiring non-reactive and clean-contact materials.</p>
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
                        <h5>Decades of experience in supplying high-performance nickel alloys</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Wide inventory and fast delivery on Nickel 200 materials</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Advanced testing and quality assurance protocols</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Custom machining and cutting services available</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Global network for sourcing and logistics</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <section id="price" class="sec-padd-top sec-padd-bottom bg-light py-5">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h2>Duplex Stainless Steel S31803 Price per kg in India</h2>
            </div>

            <p class="text-center fs-5">
                <strong>Typical Range:</strong> ₹1,350 – ₹2,100 per kg
            </p>
            <p class="text-center mb-2">
                (Price varies by size, thickness, condition & quantity.)
            </p>

            <p class="text-center fs-5">
                Contact us for exact quotation based on size and quantity.
            </p>
        </div>
    </section>

    <!--Start faq content area-->
    <section id="faq"  class="faq-content-area sec-padd2">
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
                                <h4>What is Nickel 200 and what makes it unique?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Nickel 200 (UNS N02200) is a commercially pure wrought nickel alloy containing about
                                    99.6% nickel. It is widely recognized for its excellent resistance to alkaline and
                                    caustic environments, outstanding ductility, and high thermal and electrical
                                    conductivity. These properties make Nickel 200 an ideal choice for applications
                                    requiring both purity and performance, such as chemical processing, food handling,
                                    electronics, and marine engineering.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What types of Nickel 200 products does Moksh Tubes & Fittings LLP offer?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Moksh Tubes & Fittings LLP manufactures, supplies, and exports a wide range of Nickel
                                    200 products including seamless and welded pipes, tubes, sheets, plates, coils, wire
                                    mesh, round bars, flat bars, angles, channels, flanges, pipe fittings, fasteners,
                                    welding rods, and custom-fabricated components. All products meet global industry
                                    standards and can be customized to meet specific client requirements across diverse
                                    industries.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the key benefits of using Nickel 200 in industrial applications?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    The main advantages of Nickel 200 include excellent corrosion resistance in caustic and
                                    alkaline environments, superior thermal and electrical conductivity, high purity that
                                    makes it suitable for food and pharmaceutical industries, and outstanding ductility that
                                    allows easy fabrication and welding. Additionally, its non-magnetic properties and
                                    mechanical strength make it a reliable material for high-performance applications in
                                    aerospace, marine, and power generation.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Which industries commonly use Nickel 200 alloy products?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Nickel 200 is widely used in industries such as chemical processing, food processing,
                                    electronics, aerospace, defense, marine, medical, and power generation. It is commonly
                                    applied in equipment like tanks, vessels, heat exchangers, piping systems, battery
                                    components, electrical contacts, caustic soda production systems, marine fasteners,
                                    instrumentation, and medical equipment where purity, durability, and corrosion
                                    resistance are critical.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose Moksh Tubes & Fittings LLP for Nickel 200 supply?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Moksh Tubes & Fittings LLP is a trusted global supplier of Nickel 200 products, known
                                    for its extensive inventory, ISO certified operations, and commitment to quality
                                    assurance. With decades of expertise, advanced testing facilities, and precision
                                    machining services, the company ensures reliable supply and timely delivery of Nickel
                                    200 materials. Their dedication to traceability, customer satisfaction, and customized
                                    solutions makes them a preferred partner for clients across industries worldwide.
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


    <section id="contact us" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Contact Us</h2>
                <p>
                    Reach out to <strong>Moksh Tubes & Fittings LLP</strong> your reliable partner for premium nickel alloy
                    products.
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
                        "name": "What is Nickel 200 and what makes it unique?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Nickel 200 (UNS N02200) is a commercially pure wrought nickel alloy containing about 99.6% nickel. It is widely recognized for its excellent resistance to alkaline and caustic environments, outstanding ductility, and high thermal and electrical conductivity. These properties make Nickel 200 an ideal choice for applications requiring both purity and performance, such as chemical processing, food handling, electronics, and marine engineering."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "What types of Nickel 200 products does Moksh Tubes & Fittings LLP offer?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Moksh Tubes & Fittings LLP manufactures, supplies, and exports a wide range of Nickel 200 products including seamless and welded pipes, tubes, sheets, plates, coils, wire mesh, round bars, flat bars, angles, channels, flanges, pipe fittings, fasteners, welding rods, and custom-fabricated components. All products meet global industry standards and can be customized to meet specific client requirements across diverse industries."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "What are the key benefits of using Nickel 200 in industrial applications?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "The main advantages of Nickel 200 include excellent corrosion resistance in caustic and alkaline environments, superior thermal and electrical conductivity, high purity that makes it suitable for food and pharmaceutical industries, and outstanding ductility that allows easy fabrication and welding. Additionally, its non-magnetic properties and mechanical strength make it a reliable material for high-performance applications in aerospace, marine, and power generation."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Which industries commonly use Nickel 200 alloy products?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Nickel 200 is widely used in industries such as chemical processing, food processing, electronics, aerospace, defense, marine, medical, and power generation. It is commonly applied in equipment like tanks, vessels, heat exchangers, piping systems, battery components, electrical contacts, caustic soda production systems, marine fasteners, instrumentation, and medical equipment where purity, durability, and corrosion resistance are critical."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Why choose Moksh Tubes & Fittings LLP for Nickel 200 supply?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Moksh Tubes & Fittings LLP is a trusted global supplier of Nickel 200 products, known for its extensive inventory, ISO certified operations, and commitment to quality assurance. With decades of expertise, advanced testing facilities, and precision machining services, the company ensures reliable supply and timely delivery of Nickel 200 materials. Their dedication to traceability, customer satisfaction, and customized solutions makes them a preferred partner for clients across industries worldwide."
                        }
                    }
                ]
            }

        @endverbatim
    </script>
@endsection
