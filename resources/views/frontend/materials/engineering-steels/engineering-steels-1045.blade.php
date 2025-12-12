@extends('layouts.master')

@section('title', '1045 Engineering Steel (C45 / SAE 1045) – Properties & Uses')
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
    <section class="breadcrumb-area" style="background-image: url(images/background/3.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>EN 1045 Engineering Steel (C1045 / SAE 1045)
                        <br> Medium Carbon Steel
                    </h1>

                    <!-- Extra content can be added here -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        1045 Engineering Steel is a widely used medium carbon steel grade known for its good strength,
                        moderate toughness, and excellent machinability, making it a cost-effective choice for general
                        engineering, shafts, axles, fasteners and structural components.
                    </p>

                    <!-- End extra content -->
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
            position: sticky;
            /* you missed this */
            top: 50px;
            /* and this */
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
            <a href="#advantages">Advantages</a> |
            <a href="#applications">Applications</a> |
            <a href="#faq">FAQ</a> |
            <a href="#contact us">Contact Us</a>
        </div>
    </div>

    <section id="overview" class="sec-padd-top sec-padd-bottom bg-light">

        <div class="container">
            <div class="section-title center">
                <h2>Product Overview</h2>
            </div>

            <h3 class="fw-semibold text-center mb-5" style="color: #db7227;">
                Introduction
            </h3>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/engineering-steels/engineering-steels-1045.webp') }}" alt="en-1045"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>


                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4" style="text-align: justify;">
                            <strong class="text-black">MOKSH TUBES & FITTINGS LLP</strong> is a reliable supplier, stockist,
                            exporter, importer,
                            and distributor of <strong class="text-black">EN 1045 (C1045 / SAE 1045) medium carbon
                                steel</strong> in the form of
                            bars, plates, sheets, pipes, <a href="{{ route('products.pipes-tubes') }}">tubes</a>, forgings,
                            and custom-machined components.
                        </p>

                        <p class="fs-6 mb-3" style="text-align: justify;">
                            <strong class="text-black">EN 1045</strong> is a medium carbon steel (approx. 0.45% carbon)
                            valued for its good
                            tensile strength, moderate wear resistance, high machinability, balanced ductility and
                            toughness, and overall
                            economical performance for engineering applications. These properties make EN 1045 suitable for
                            components such
                            as shafts, gears, axles, bolts, bushings, and general structural parts. It can also be
                            heat-treated to further
                            enhance strength and hardness for more demanding industrial requirements.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            We supply EN 1045 in a wide range of forms, including round, square, and hex bars; HR/CR plates
                            and sheets;
                            seamless and welded tubes (limited availability); forged bars and components; and custom sizes
                            with CNC-machined
                            parts. All materials are provided with complete <strong class="text-black">EN 10204 3.1 / 3.2
                                certification</strong>
                            to ensure full traceability and quality assurance.
                        </p>



                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--End breadcrumb area-->


    {{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Engineering Steels 1045 Datasheet</h3>
            <p class="mb-3">
                Get the complete Engineering Steels 1045 datasheet with chemical composition,
                mechanical properties, heat treatment details, and applications.
                Enter your email to receive the PDF instantly.
            </p>

            <!-- Lead Capture Form -->
            <form id="leadForm" method="POST" action="{{ route('lead.capture') }}" class="mb-3">
                @csrf
                <div class="row justify-content-center">
                    <input type="hidden" name="pdf" value="en_1045.pdf">
                    <div class="col-md-6 mb-2">
                        <input type="email" name="email" required class="form-control p-3"
                            placeholder="Enter your email address">
                    </div>
                    <div class="col-md-3 mb-2">
                        <button type="submit" class="btn btn-lg w-100 text-white"
                            style="background-color:#db7227; border-radius:8px;">
                            📥 Get Datasheet
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
    {{-- end datasheet --}}

    <!-- Specifications Section -->
    <section class="sec-padd-top" id="specification">
        <div class="container">
            <div class="section-title center">
                <h2>Specifications of EN 1045 / C1045 / SAE 1045</h2>
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
                                    <td>EN 1045 / C45 / C1045 / SAE 1045</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Type</td>
                                    <td>Medium Carbon Steel</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon Content</td>
                                    <td>0.45%</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Material Category</td>
                                    <td>Engineering Steel</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Supply Conditions</td>
                                    <td>Annealed, Normalized, Hot Rolled, Cold Drawn, Hardened & Tempered</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Available Forms</td>
                                    <td>Bars, Plates, Sheets, Tubes (limited), Forgings, Custom Components</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Heat Treatment Options</td>
                                    <td>Normalizing, Quenching & Tempering, Induction/Flame Hardening</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Testing Availability</td>
                                    <td>Tensile, Chemical, Hardness, Ultrasonic (on request)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Certification</td>
                                    <td>EN 10204 3.1 / 3.2</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Standards</td>
                                    <td>EN 10083-2, SAE 1045, ASTM A29 (Equivalent Family)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Machinability</td>
                                    <td>Excellent</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Weldability</td>
                                    <td>Moderate</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Corrosion Resistance</td>
                                    <td>Low (standard for carbon steels)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> <!-- col-lg-8 -->
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <!-- End Specifications Section -->


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
                                    <td>0.040</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sulfur </td>
                                    <td>0.050</td>
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

    <section class="sec-padd-top sec-padd-bottom bg-light" id="related grades">
        <div class="container">
            <div class="section-title center mt-5" id="available forms">
                <h2>Available Forms & Size Range (EN 1045 Medium Carbon Steel)</h2>
            </div>

            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6 text-center">
                        We supply EN 1045 Medium Carbon Steel in the following product forms and dimensions:
                    </p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="p-4 bg-white rounded shadow-sm border-start border-4" style="border-color:#db7227;">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 40%;">Product Form</th>
                                    <th>Size Range / Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Round Bars</td>
                                    <td>10 mm – 400 mm dia (HR/CR, Annealed, Normalized, QT)</td>
                                </tr>
                                <tr>
                                    <td>Square Bars</td>
                                    <td>10 mm – 250 mm</td>
                                </tr>
                                <tr>
                                    <td>Hex Bars</td>
                                    <td>10 mm – 100 mm</td>
                                </tr>
                                <tr>
                                    <td>Flat Bars</td>
                                    <td>Thickness 5 mm – 150 mm, Width 20 mm – 500 mm</td>
                                </tr>
                                <tr>
                                    <td>Plates & Sheets (HR/CR)</td>
                                    <td>2 mm – 150 mm thickness (Width 600–3000 mm)</td>
                                </tr>
                                <tr>
                                    <td>Coils & Strips</td>
                                    <td>Thickness 0.5 mm – 12 mm (CR/HR)</td>
                                </tr>
                                <tr>
                                    <td>Seamless Pipes</td>
                                    <td>OD 10 mm – 219 mm, WT 2–20 mm</td>
                                </tr>
                                <tr>
                                    <td>Welded Tubes (ERW/EFW)</td>
                                    <td>OD 12 mm – 300 mm, WT 1–12 mm</td>
                                </tr>
                                <tr>
                                    <td>Forged Blocks / Rings / Shafts</td>
                                    <td>Custom as per drawing</td>
                                </tr>
                                <tr>
                                    <td>Custom-Machined Components</td>
                                    <td>CNC/Turning/Milling as per requirement</td>
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

    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Products in Engineering Steel 1045</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6 center">
                        <strong class="text-dark">EN 1045 </strong>is commonly available in
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
                        Engineering Steel 1045 products are produced to the following global standards
                    </p>
                </div>
            </div>


            <!-- Product Image Cards (Bootstrap Grid) -->
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


    <section class="sec-padd-top sec-padd-bottom" id="uses">
        <div class="container">
            <div class="section-title center">
                <h2>Advantages of EN 1045 Steel</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-12 col-sm-6 col-md-5">
                    <div class="advantage-card h-100 d-flex flex-column">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5 class="flex-grow-1 d-flex align-items-center justify-content-center text-center">
                            Good tensile strength and wear resistance
                        </h5>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-5">
                    <div class="advantage-card h-100 d-flex flex-column">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5 class="flex-grow-1 d-flex align-items-center justify-content-center text-center">
                            Excellent machinability & moderate weldability
                        </h5>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-5">
                    <div class="advantage-card h-100 d-flex flex-column">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5 class="flex-grow-1 d-flex align-items-center justify-content-center text-center">
                            Cost-effective engineering steel
                        </h5>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-5">
                    <div class="advantage-card h-100 d-flex flex-column">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5 class="flex-grow-1 d-flex align-items-center justify-content-center text-center">
                            Can be heat-treated for improved mechanical performance
                        </h5>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-5">
                    <div class="advantage-card h-100 d-flex flex-column">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5 class="flex-grow-1 d-flex align-items-center justify-content-center text-center">
                            Suitable for moderate-load and structural applications
                        </h5>
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


    <section class="sec-padd-top sec-padd-bottom bg-light py-5">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h2>Export Destinations</h2>
            </div>

            <p class="text-center mb-2">
                We export Engineering Steel 1045 (EN 1045 / C45 / SAE 1045) to the following countries:
            </p>

            <p class="text-center fs-5">
                UAE, Saudi Arabia, Qatar, Oman, Kuwait, Bahrain, Turkey, Europe, USA, Canada, Singapore, Malaysia,
                Indonesia, South Africa, Nigeria.
            </p>
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
