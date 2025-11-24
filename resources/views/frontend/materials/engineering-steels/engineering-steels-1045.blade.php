@extends('layouts.master')

@section('title', '1045 Engineering Steel | High Strength Steel')
@section('meta_description',
    '1045 Engineering Steel offering superior strength, toughness, and wear resistance for
    mechanical, structural, and industrial applications.')
@section('meta_keywords',
    '1045 Engineering Steel, high strength carbon steel, medium carbon steel, mechanical steel,
    structural steel, durable steel, industrial steel')
@section('og_image', asset('assets/images/engineering-steels/engineering-steels-1045.webp'))
@section('og_type', 'article')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>EN 1045 Engineering Steel (C1045 / SAE 1045)
                        <br> High Strength Carbon Steel
                    </h1>
                </div>
            </div>
        </div>
    </section>
<style>

    .material-tabs {
    background: #ffffff;
    text-align: center;
    padding: 15px 0;
    border-bottom: 1px solid #e5e5e5;
    position: sticky;   /* you missed this */
    top: 50px;             /* and this */
    z-index: 1020;
}

.material-tabs a {
    margin: 0 14px;
    font-weight: 600;
    color: #1b3c61 !important;
    text-decoration: none;
    font-size: 16px;
    transition: 0.25s ease;
    display: inline-block;
}

.material-tabs a:hover {
    color: #db7227 !important;
    transform: translateY(-2px);
}


.material-tabs {
    background: #ffffff;
    text-align: center;
    padding: 15px 0;
    border-bottom: 1px solid #e5e5e5;
    z-index: 1020;
}

.material-tabs a {
    margin: 0 14px;
    font-weight: 600;
    color: #1b3c61 !important;
    text-decoration: none;
    font-size: 16px;
    transition: 0.25s ease;
    display: inline-block;
}

.material-tabs a:hover {
    color: #db7227 !important;
    transform: translateY(-2px);
}

</style>
<div class="sticky-top bg-white border-bottom material-tabs d-none d-md-block w-100">
    <div class="container">
        <a href="#overview">Overview</a> |
        <a href="#composition">Chemical Composition</a> |
        <a href="#heat-treatment">Heat Treatment</a> |
        <a href="#mechanical">Mechanical Properties</a> |
        <a href="#applications">Applications</a> |
        <a href="#price">Price</a> |
        <a href="#faq">FAQ</a>
    </div>
</div>

    <section id="overview" class="sec-padd-top sec-padd-bottom bg-light">

        <div class="container">
            <div class="section-title center">
                <h2>Product Overview</h2>
            </div>

            <h3 class="fw-semibold text-center mb-5" style="color: #db7227;">
                What Makes EN 1045 a Popular Engineering Steel?
            </h3>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/engineering-steels/engineering-steels-1045.webp') }}" alt="en-1045"
                        class="img-fluid rounded shadow-sm">
                </div>


                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4" style="text-align: justify;">
                            <strong class="text-black">MOKSH TUBES & FITTINGS LLP</strong> is a manufacturer, supplier,
                            exporter, importer, and stockist of <strong class="text-black">EN 1045 steel products</strong>
                            including pipes, <a href="{{ route('products.pipes-tubes') }}">tubes</a>, bars, plates, and
                            fittings.
                        </p>

                        <p class="fs-6 mb-3" style="text-align: justify;">
                            <strong class="text-black">EN 1045 Engineering Steel</strong> also known as C1045, SAE 1045,
                            or AISI 1045 is one of the most widely used medium-carbon steels. It offers a practical
                            balance of strength, hardness, and machinability, making it an excellent choice for everyday
                            mechanical and structural applications.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            Whether used for shafts, gears, bolts, machinery parts, or general engineering components,
                            EN 1045 delivers reliable performance, good wear resistance, and consistent strength under load.
                            Its versatility and affordability make it a preferred material for workshops, OEMs, and
                            fabrication industries.
                        </p>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--End breadcrumb area-->

    <section class="sec-padd-top sec-padd-bottom" id="composition">
        <div class="container">
            <div class="section-title center">
                <h2>Chemical Composition of EN 1045 Steel</h2>
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
                                    <td>Carbon</td>
                                    <td>0.43 – 0.50</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese</td>
                                    <td>0.60 – 0.90</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Phosphorus </td>
                                    <td>≤ 0.040</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sulfur </td>
                                    <td>≤ 0.050</td>
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
                    <h4 class="text-center mb-3" style="color: #db7227;">Physical Properties of EN 1045 Steel</h4>
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
                                    <td>0.284 lb/in³</td>
                                    <td>7.85 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Point</td>
                                    <td>2500 – 2550 °F</td>
                                    <td>1370 – 1400 °C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Modulus of Elasticity(Tension)</td>
                                    <td>29,000 ksi</td>
                                    <td>200 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Modulus of Elasticity(Torsion)</td>
                                    <td>11,600 ksi</td>
                                    <td>80 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Poisson's Ratio</td>
                                    <td>0.29</td>
                                    <td>-</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Thermal Conductivity</td>
                                    <td>44 W/m·K</td>
                                    <td>44 W/m·K</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Specific Heat Capacity</td>
                                    <td>460 J/kg·K</td>
                                    <td>460 J/kg·K</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-5" id="heat-treatment">
                <div class="col-lg-8">
                    <h4 class="text-center mb-3" style="color: #db7227;">Heat Treatment of 1045 Steel</h4>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr>
                                    <th class="text-center">Heat Treatment Process</th>
                                    <th class="text-center">Temperature Range</th>
                                    <th class="text-center">Cooling / Procedure</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class = "t-row">
                                    <td><strong>Annealing</strong></td>
                                    <td>790–870°C</td>
                                    <td>slow furnance cool</td>
                                </tr>

                                <tr class = "t-row">
                                    <td><strong>Normalizing</strong></td>
                                    <td>830–860°C</td>
                                    <td>Air cool</td>
                                </tr>

                                <tr class = "t-row">
                                    <td><strong>Hardening</strong></td>
                                    <td>800–820°C</td>
                                    <td>Quench in water or oil</td>
                                </tr>

                                <tr class = "t-row">
                                    <td><strong>Tempering</strong></td>
                                    <td>400–650°C</td>
                                    <td>Reheat depending on required hardness</td>
                                </tr>

                                <tr class = "t-row">
                                    <td><strong>Stress Relieving</strong></td>
                                    <td>540–650°C</td>
                                    <td>Hold for 1–2 hours</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </section>
        <section class="sec-padd-top sec-padd-bottom" id="mechanical">
            <!-- Mechanical Properties Table -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                  
                    <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Mechanical Properties of EN 1045 Steel</h2>
            </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Property</th>
                                    <th>Tubing (Annealed)</th>
                                    <th>Hot-Finished</th>
                                    <th>Tubing (Cold Drawn)</th>
                                    <th>Hot-rolled</th>
                                    <th>Sheet (Annealed)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Tensile Strength (ksi)</td>
                                    <td>65–85</td>
                                    <td>75–105</td>
                                    <td>85–110</td>
                                    <td>65–85</td>
                                    <td>60–80</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tensile Strength (MPa)</td>
                                    <td>448–586</td>
                                    <td>517–724 </td>
                                    <td>586–758</td>
                                    <td>448–586</td>
                                    <td>414–552 </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (0.2%) (ksi)</td>
                                    <td>35–55</td>
                                    <td>50–80</td>
                                    <td>60–85</td>
                                    <td>35–55</td>
                                    <td>30–50</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (MPa)</td>
                                    <td>241–379</td>
                                    <td>345–552</td>
                                    <td>414–586</td>
                                    <td>241–379</td>
                                    <td>207–345</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elongation (%)</td>
                                    <td>20–30</td>
                                    <td>15–25</td>
                                    <td>15–20</td>
                                    <td>20–30</td>
                                    <td>20–30</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Brinell Hardness (3000 kg)</td>
                                    <td>120–180</td>
                                    <td>160–220</td>
                                    <td>160–210</td>
                                    <td>120–180</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Rockwell Hardness (B / C)</td>
                                    <td>70–80 B</td>
                                    <td>85–95 B</td>
                                    <td>85–95 B</td>
                                    <td>70–80 B</td>
                                    <td>70–80 B</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="sec-padd-top sec-padd-bottom" id="international">
        <div class="container">
            <div class="section-title center">
                <h2>International Standards & Equivalent Grades</h2>
            </div>

            <div class="table-responsive col-lg-8 mx-auto">
                <table class="table table-bordered text-center">
                    <thead class="table-dark">
                        <tr class = "t-row" class = "t-row">
                            <th>Standard</th>
                            <th>Equivalent Grade</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class = "t-row">
                            <td>EN</td>
                            <td>EN 1045</td>
                        </tr>
                        <tr class = "t-row">
                            <td>AISI / SAE</td>
                            <td>1045</td>
                        </tr>
                        <tr class = "t-row">
                            <td>DIN</td>
                            <td>CK45</td>
                        </tr>
                        <tr class = "t-row">
                            <td>JIS</td>
                            <td>S45C</td>
                        </tr>
                        <tr class = "t-row">
                            <td>GB</td>
                            <td>45</td>
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
                'image' => 'assets/images/all product/seamless-pipes-10.jpg',
            ],

            [
                'name' => 'Welded Pipes (ERW & EFW)',
                'route' => 'products.pipes-tubes.welded-pipes',
                'image' => 'assets/images/all product/welded-pipes-tubes-1.jpg',
            ],
            [
                'name' => 'Tubes (Capillary, U-Bend)',
                'route' => 'products.pipes-tubes.u-bent-tubes',
                'image' => 'assets/images/all product/11zon_resized.jpg',
            ],
            [
                'name' => 'Sheets & Plates',
                'route' => 'products.sheets-plates-coils.sheets-and-plates',
                'image' => 'assets/images/all product/sheets-plates.jpg',
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
                'image' => 'assets/images/all product/FASTENERS-1.png',
            ],
            [
                'name' => 'Custom Fabricated Components',
                'route' => 'products.pipe-fittings-flanges-fasteners.custom-fabricated-fittings',
                'image' => 'assets/images/all product/custom-metal-fabricated.jpg',
            ],
        ];
    @endphp

    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Products in Engineering Steel 1045</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">EN 1045 </strong>is commonly available in:
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
                        Engineering Steel 1045 products are produced to the following global standards:
                    </p>
                </div>
            </div>

            <!-- Product Image Cards (Now centered and responsive) -->
            <div class="row g-4">
                @foreach ($products as $product)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex">
                        <div class="mx-auto" style="width: 100%; max-width: 300px;">
                            <a href="{{ route($product['route']) }}" class="text-decoration-none">
                                <div class="product-card h-100">
                                    <img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}"
                                        class="img-fluid  w-100">
                                    <h6 class="product-card-title text-center mt-2 px-2">{{ $product['name'] }}</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Uses and Advantages</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Good tensile strength and wear resistance</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Excellent machinability and weldability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Cost-effective medium carbon steel for structural and mechanical parts</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Can be heat treated to improve mechanical properties</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom bg-light" id="applications">
        <div class="container">
            <div class="section-title center">
                <h2>Applications</h2>
                <p class="text-center pb-3"><strong class="text-dark">Engineering Steel 1045</strong> is widely used in:
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Automotive Components</h5>
                        <p>Gears, shafts, axles, crankshafts, and connecting rods.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Machinery Parts</h5>
                        <p>Bushings, bolts, studs, and machine tool parts.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Construction & Structural</h5>
                        <p>Structural parts requiring moderate strength and toughness.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="ri-node-tree"></i></div>
                        <h5>Structural Engineering</h5>
                        <p>Base plates, Brackets, Supports
                            Load-bearing components
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Manufacturing</h5>
                        <p>Tools, dies, Jigs & fixtures and heavy-duty components requiring wear resistance.</p>
                    </div>
                </div>


            </div>
        </div>
    </section>
<section class="sec-padd-top sec-padd-bottom" id="uses">
    <div class="container">
        <div class="section-title center">
            <h2>Advantages</h2>
        </div>

        <div class="row g-4 mt-4 justify-content-center">

            <div class="col-12 col-sm-6 col-md-4">
                <div class="advantage-card h-100 d-flex flex-column">
                    <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                    <h5 class="flex-grow-1 d-flex align-items-center justify-content-center text-center">
                        Reliable medium carbon steel for everyday engineering work
                    </h5>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4">
                <div class="advantage-card h-100 d-flex flex-column">
                    <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                    <h5 class="flex-grow-1 d-flex align-items-center justify-content-center text-center">
                        Strong, tough, and able to withstand impact
                    </h5>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4">
                <div class="advantage-card h-100 d-flex flex-column">
                    <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                    <h5 class="flex-grow-1 d-flex align-items-center justify-content-center text-center">
                        Good machinability for turning, milling, drilling
                    </h5>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4">
                <div class="advantage-card h-100 d-flex flex-column">
                    <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                    <h5 class="flex-grow-1 d-flex align-items-center justify-content-center text-center">
                        Can be heat-treated for improved hardness
                    </h5>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4">
                <div class="advantage-card h-100 d-flex flex-column">
                    <div class="advantage-icon"><i class="ri-hand-coin-fill"></i></div>
                    <h5 class="flex-grow-1 d-flex align-items-center justify-content-center text-center">
                        Affordable and widely available
                    </h5>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4">
                <div class="advantage-card h-100 d-flex flex-column">
                    <div class="advantage-icon"><i class="ri-dashboard-2-fill"></i></div>
                    <h5 class="flex-grow-1 d-flex align-items-center justify-content-center text-center">
                        Performs well in general-purpose mechanical components
                    </h5>
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
                        <h5>Premium quality EN 1045 steel sourced from trusted mills</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Custom sizes and specifications available to meet your project needs</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Strong supply chain and global logistics for timely delivery</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Expert technical support for alloy and steel selection</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Commitment to customer satisfaction and quality assurance</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- price --}}
    <section id="price" class="sec-padd-top sec-padd-bottom bg-light" id="price">
        <div class="container text-center">
            <h2>1045 Steel Price per kg in India</h2>
            <p>Typical price range: ₹85 – ₹150 per kg
                (Varies by size, heat treatment, surface finish, and quantity).</p>
            
            <p>Contact us for exact quotation based on size and quantity.</p>
        </div>
    </section>
    {{-- price --}}
    <!--Start faq content area-->
    <section class="faq-content-area sec-padd2" id="faq">
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
                                <h4>What is EN 1045 steel and what makes it unique?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    EN 1045, also known as C1045 or SAE 1045, is a medium carbon steel known for its
                                    excellent balance of strength, hardness, and ductility.
                                    With a carbon content of 0.43–0.50%, it provides good wear resistance while maintaining
                                    machinability and weldability.
                                    These properties make EN 1045 a reliable choice for mechanical and structural
                                    applications that require moderate strength and toughness.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the key properties of EN 1045 steel?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    EN 1045 steel offers a tensile strength range of 448–758 MPa depending on the form,
                                    along with good yield strength and elongation values.
                                    It has a density of 7.85 g/cm³ and a melting point between 1370–1400 °C.
                                    Its machinability, weldability, and ability to be heat-treated make it highly versatile.
                                    Additionally, its wear resistance and hardness ensure durability in demanding industrial
                                    environments.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What products are available in EN 1045 steel?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP manufactures and supplies a wide range of EN 1045 steel
                                    products including seamless and welded pipes, tubes, sheets, plates, coils, strips,
                                    round bars,
                                    flat bars, hex bars, square bars, pipe fittings, flanges, fasteners, and
                                    custom-fabricated components.
                                    All products are produced to international quality standards and can be customized to
                                    meet specific project requirements.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Where is EN 1045 steel commonly used?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    EN 1045 steel is widely used in the automotive sector for gears, shafts, axles,
                                    crankshafts, and connecting rods.
                                    It is also applied in machinery for bushings, bolts, studs, and machine tool parts.
                                    In construction, it is used for structural components requiring strength and durability,
                                    while in manufacturing it is utilized for tools, dies, and heavy duty parts that demand
                                    wear resistance and toughness.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose MOKSH TUBES & FITTINGS LLP for EN 1045 steel?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP is a trusted manufacturer, supplier, exporter, importer, and
                                    stockist of EN 1045 steel products.
                                    The company ensures premium quality material sourced from reliable mills, offers
                                    customization in sizes and specifications,
                                    and provides global supply with timely delivery.
                                    Backed by expert technical support and strong quality assurance,
                                    MOKSH TUBES & FITTINGS LLP delivers reliable EN 1045 solutions for industries worldwide.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End faq content area-->


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Contact Us</h2>
                <p>
                    For inquiries or to request a quote for EN 1045 steel products, contact <strong> Moksh Tubes & Fittings
                        LLP </strong> — your trusted partner for medium carbon steels.
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
                "name": "What is EN 1045 steel and what makes it unique?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "EN 1045, also known as C1045 or SAE 1045, is a medium carbon steel known for its excellent balance of strength, hardness, and ductility. With a carbon content of 0.43–0.50%, it provides good wear resistance while maintaining machinability and weldability. These properties make EN 1045 a reliable choice for mechanical and structural applications that require moderate strength and toughness."
                }
                },
                {
                "@type": "Question",
                "name": "What are the key properties of EN 1045 steel?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "EN 1045 steel offers a tensile strength range of 448–758 MPa depending on the form, along with good yield strength and elongation values. It has a density of 7.85 g/cm³ and a melting point between 1370–1400 °C. Its machinability, weldability, and ability to be heat-treated make it highly versatile. Additionally, its wear resistance and hardness ensure durability in demanding industrial environments."
                }
                },
                {
                "@type": "Question",
                "name": "What products are available in EN 1045 steel?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "MOKSH TUBES & FITTINGS LLP manufactures and supplies a wide range of EN 1045 steel products including seamless and welded pipes, tubes, sheets, plates, coils, strips, round bars, flat bars, hex bars, square bars, pipe fittings, flanges, fasteners, and custom-fabricated components. All products are produced to international quality standards and can be customized to meet specific project requirements."
                }
                },
                {
                "@type": "Question",
                "name": "Where is EN 1045 steel commonly used?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "EN 1045 steel is widely used in the automotive sector for gears, shafts, axles, crankshafts, and connecting rods. It is also applied in machinery for bushings, bolts, studs, and machine tool parts. In construction, it is used for structural components requiring strength and durability, while in manufacturing it is utilized for tools, dies, and heavy duty parts that demand wear resistance and toughness."
                }
                },
                {
                "@type": "Question",
                "name": "Why choose MOKSH TUBES & FITTINGS LLP for EN 1045 steel?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "MOKSH TUBES & FITTINGS LLP is a trusted manufacturer, supplier, exporter, importer, and stockist of EN 1045 steel products. The company ensures premium quality material sourced from reliable mills, offers customization in sizes and specifications, and provides global supply with timely delivery. Backed by expert technical support and strong quality assurance, MOKSH TUBES & FITTINGS LLP delivers reliable EN 1045 solutions for industries worldwide."
                }
                }
            ]
            }
        @endverbatim
    </script>
@endsection
