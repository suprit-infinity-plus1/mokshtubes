@extends('layouts.master')

@section('title', content: '1055 Engineering Steel – Chemical Composition & Properties')
@section('meta_description',
    'Engineering Steel 1055 (C1055/EN1055) for shafts, gears, plates and mechanical components.
    High-strength medium carbon steel. Get a quote from Moksh Tubes.')

@section('meta_keywords',
    '1055 Engineering Steel, medium carbon steel, durable steel, mechanical steel, industrial
    steel, high strength steel, steel for components')

@section('og_image', asset('assets/images/engineering-steels/engineering-steels-1055.webp'))
@section('og_type', 'article')



@section('content')
    {{-- start bread --}}
    <section class="breadcrumb-area"
        style="background-image: url(/assets/images/engineering-steels/engineering-steels-banner.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1>Engineering Steel 1055 (C1055 / EN 1055) <br> Medium Carbon Steel</h1>

                    <!-- Add your extra content here -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        1055 Engineering Steel (EN 1055 / C1055) is a medium carbon steel grade known for high strength,
                        wear resistance and durability. Below is the complete datasheet including composition, properties,
                        heat treatment and applications.
                    </p>
                    <!-- End extra content -->

                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

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


    <!-- Start Product Overview -->
    <section id="overview" class="sec-padd-top sec-padd-bottom bg-light">

        <div class="container">
            <div class="section-title center">
                <h2>Product Overview </h2>
            </div>

            <h3 class="fw-semibold text-center mb-5" style="color: #db7227;">
                Introduction
            </h3>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-12 col-md-6 mb-4 mb-md-0  align-self-start">
                    <img src="{{ asset('assets/images/engineering-steels/engineering-steels-1055.webp') }}"
                        alt="1055 Engineering Steel C1055 EN1055 Medium Carbon Steel" class="img-fluid rounded shadow-sm"
                        loading="lazy" width="500" height="400">
                </div>


                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-3 text-justify">
                            Engineering Steel 1055 (EN 1055 / C1055 / SAE 1055) is a reliable medium-carbon steel grade
                            valued for its high strength, solid wear resistance, and dependable toughness. It’s widely used
                            in industries that require durable materials for both everyday and heavy-duty engineering
                            applications. With a carbon content of 0.52–0.60%, this steel offers an excellent balance of
                            hardness and flexibility, making it suitable for real-world components such as shafts, gears,
                            crankshafts, pins, studs, and forged tools.
                        </p>

                        <p class="fs-6 text-justify">
                            <strong>Moksh Tubes & Fittings LLP</strong>, we supply high-quality 1055 steel in multiple forms
                            including
                            <strong>
                                <a href="{{ route('products.bars-rods.round-bars') }}">round bars</a>,
                                <a href="{{ route('products.bars-rods.flat-bars') }}">flat bars</a>,
                                hex bars, square bars, plates, sheets, coils, strips, seamless pipes,
                                <a href="{{ route('products.pipes-tubes.welded-pipes') }}">welded tubes</a>,
                                and forged components.
                            </strong>
                            These products are available in annealed, normalized, hot-rolled, cold-drawn, and fully
                            heat-treated conditions to meet diverse engineering needs.
                        </p>

                        <p class="fs-6 text-justify">
                            Every material we supply is sourced from trusted mills and provided with <strong>EN 10204 3.1 /
                                3.2 certification</strong>, ensuring consistent quality, traceability, and reliable
                            performance for industrial and mechanical applications.
                        </p>




                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Product Overview -->

    {{-- start datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Engineering Steels 1055 Datasheet</h3>
            <p class="mb-3">
                Get the complete Engineering Steels 1055 datasheet with chemical composition,
                mechanical properties, heat treatment details, and applications.
                Enter your email to receive the PDF instantly.
            </p>

            <!-- Lead Capture Form -->
            <form id="leadForm" method="POST" action="{{ route('lead.capture') }}" class="mb-3">
                @csrf
                <div class="row justify-content-center">
                    <input type="hidden" name="pdf" value="en_1055.pdf">
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

    <!-- End Datasheet Download Section -->

    <!-- Specifications Section -->
    <section class="sec-padd-top" id="specification">
        <div class="container">
            <div class="section-title center">
                <h2>Engineering Steel 1055 Specifications</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class = "t-row">
                                    <th>Category</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class = "t-row">
                                    <td>Grade</td>
                                    <td>EN 1055 / C1055 / SAE 1055</td>
                                </tr>
                                <tr class = "t-row">
                                    <td>Type</td>
                                    <td>Medium carbon steel</td>
                                </tr>
                                <tr class = "t-row">
                                    <td>Typical Chemical Composition</td>
                                    <td>C 0.52–0.60%, Mn 0.60–0.90%, P ≤ 0.040%, S ≤ 0.050%</td>
                                </tr>
                                <tr class = "t-row">
                                    <td>Conditions</td>
                                    <td>Annealed, Normalized, Hot Rolled, Cold Drawn</td>
                                </tr>
                                <tr class = "t-row">
                                    <td>Heat Treatment</td>
                                    <td>Quenching & Tempering, Stress Relieving</td>
                                </tr>
                                <tr class = "t-row">
                                    <td>Testing</td>
                                    <td>Tensile, Hardness, Chemical, UT (on request)</td>
                                </tr>
                                <tr class = "t-row">
                                    <td>Certification</td>
                                    <td>EN 10204 3.1 / 3.2 (Mill Test Certificate available)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> <!-- col-lg-8 -->

            </div> <!-- row -->
        </div> <!-- container -->
    </section>



    <!-- Chemical Composition -->
    <section id="composition" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Chemical Composition of Engineering Steel 1055</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class = "t-row">
                                    <th>Element</th>
                                    <th>Composition (%)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">

                                <tr class = "t-row">
                                    <td>Carbon</td>
                                    <td>0.52 – 0.60</td>
                                </tr>

                                <tr class = "t-row">
                                    <td>Manganese</td>
                                    <td>0.60 – 0.90</td>
                                </tr>

                                <tr class = "t-row">
                                    <td>Phosphorus</td>
                                    <td>0.040</td>
                                </tr>

                                <tr class = "t-row">
                                    <td>Sulfur</td>
                                    <td>0.050</td>
                                </tr>

                            </tbody>
                        </table>
                        <p class="mt-3 text-center">
                            1055 medium carbon steel (C1055) is preferred for its strong balance of
                            hardness, machinability and cost-effectiveness.
                        </p>

                    </div>
                </div>
            </div>

        </div>
    </section>




    <!-- Technical Properties Section -->

    <section id="properties" class="sec-padd-top sec-padd-bottom bg-light">

        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Technical Composition of Engineering Steel 1055</h2>
            </div>

            <!-- Physical Properties Table -->
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8">
                    <h4 class="text-center mb-3" style="color: #db7227;">Physical Properties of Engineering Steel 1055
                    </h4>


                    <div class="table-responsive">

                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr>
                                    <th>Property</th>
                                    <th>Imperial</th>
                                    <th>Metric</th>
                                </tr>
                            </thead>

                            <tbody class="text-center">
                                <tr class = "t-row">
                                    <td>Density</td>
                                    <td>0.284 lb/in³</td>
                                    <td>7.85 g/cm³</td>
                                </tr>

                                <tr class = "t-row">
                                    <td>Melting Point</td>
                                    <td>2500 – 2550 °F</td>
                                    <td>1370 – 1400 °C</td>
                                </tr>

                                <tr class = "t-row">
                                    <td>Modulus of Elasticity (Tension)</td>
                                    <td>29,000 ksi</td>
                                    <td>200 GPa</td>
                                </tr>

                                <tr class = "t-row">
                                    <td>Modulus of Elasticity (Torsion)</td>
                                    <td>11,600 ksi</td>
                                    <td>80 GPa</td>
                                </tr>

                                <tr class = "t-row">
                                    <td>Poisson's Ratio</td>
                                    <td>0.29</td>
                                    <td>-</td>
                                </tr>

                                <tr class = "t-row">
                                    <td>Thermal Conductivity</td>
                                    <td>44 W/m·K</td>
                                    <td>44 W/m·K</td>
                                </tr>

                                <tr class = "t-row">
                                    <td>Specific Heat Capacity</td>
                                    <td>460 J/kg·K</td>
                                    <td>460 J/kg·K</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-5" id="heat-treatment">
            <div class="col-lg-8">
                <h4 class="text-center mb-3" style="color: #db7227;">Heat Treatment of 1055 Steel</h4>

                <div class="table-responsive">
                    <table class="table table-bordered table-striped align-middle">
                        <thead class="table-dark text-center">
                            <tr>
                                <th>Heat Treatment Process</th>
                                <th>Temperature Range</th>
                                <th>Cooling / Procedure</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr class = "t-row">
                                <td><strong>Annealing</strong></td>
                                <td>790–870°C</td>
                                <td>Cool slowly in furnace</td>
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
                                <td>150–650°C</td>
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


    <!-- Heat Treatment -->



    <!-- Mechanical Properties -->
    <section class="sec-padd-top sec-padd-bottom" id="mechanical">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Mechanical Properties of Engineering Steel 1055</h2>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class = "t-row">
                            <th>Property</th>
                            <th>Annealed</th>
                            <th>Hot Finished</th>
                            <th>Cold Drawn</th>
                            <th>Hot Rolled</th>
                            <th>Sheet</th>
                        </tr>
                    </thead>

                    <tbody class="text-center">

                        <tr class = "t-row">
                            <td>Tensile Strength (ksi / MPa)</td>
                            <td>75–95 ksi / 517–655 MPa</td>
                            <td>80–110 ksi / 552–758 MPa</td>
                            <td>90–120 ksi / 620–827 MPa</td>
                            <td>75–95 ksi / 517–655 MPa</td>
                            <td>70–90 ksi / 482–620 MPa</td>
                        </tr>

                        <tr class = "t-row">
                            <td>Yield Strength (0.2%)</td>
                            <td>40–55 ksi / 276–379 MPa</td>
                            <td>45–85 ksi / 310–586 MPa</td>
                            <td>55–85 ksi / 379–586 MPa</td>
                            <td>40–60 ksi / 276–414 MPa</td>
                            <td>35–50 ksi / 241–345 MPa</td>
                        </tr>

                        <tr class = "t-row">
                            <td>Elongation (%)</td>
                            <td>18–25</td>
                            <td>15–22</td>
                            <td>12–20</td>
                            <td>20–30</td>
                            <td>20–25</td>
                        </tr>

                        <tr class = "t-row">
                            <td>Brinell Hardness (3000 kg)</td>
                            <td>130–190</td>
                            <td>160–220</td>
                            <td>160–210</td>
                            <td>130–190</td>
                            <td>—</td>
                        </tr>

                        <tr class = "t-row">
                            <td>Rockwell Hardness (B / C)</td>
                            <td>75–85 B</td>
                            <td>85–95 B</td>
                            <td>85–95 B</td>
                            <td>75–85 B</td>
                            <td>75–85 B</td>
                        </tr>

                    </tbody>
                </table>
                <p class="mt-3 text-center">
                    After quenching & tempering, 1055 steel hardness can reach 45–55 HRC depending on cooling media.
                </p>

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
                        We supply Engineering Steel 1055 in the following product forms and dimensions:
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
                                    <td>10 mm to 400 mm</td>
                                </tr>
                                <tr>
                                    <td>Flat, Square & Hex Bars</td>
                                    <td>Custom sizes up to 300 mm</td>
                                </tr>
                                <tr>
                                    <td>Sheets & Plates</td>
                                    <td>2 mm to 150 mm (Width 600–3000 mm)</td>
                                </tr>
                                <tr>
                                    <td>Coils & Strips</td>
                                    <td>0.5 mm to 12 mm</td>
                                </tr>
                                <tr>
                                    <td>Seamless & Welded Pipes/Tubes</td>
                                    <td>OD 10 mm to 219 mm, WT 2–20 mm</td>
                                </tr>
                                <tr>
                                    <td>Forged Blocks, Rings, Bushings & Machined Components</td>
                                    <td>Custom manufactured as per drawing</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- End Available Forms & Size Range Section -->

    <!-- Standards & Equivalent Grades Section -->
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
                            <td>EN 1055</td>
                        </tr>
                        <tr class = "t-row">
                            <td>AISI / SAE</td>
                            <td>1055</td>
                        </tr>
                        <tr class = "t-row">
                            <td>DIN</td>
                            <td>CK55</td>
                        </tr>
                        <tr class = "t-row">
                            <td>JIS</td>
                            <td>S55C</td>
                        </tr>
                        <tr class = "t-row">
                            <td>GB</td>
                            <td>55</td>
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

        $engineeringProducts = [
            [
                'name' => 'EN8 Carbon Steel',
                'slug' => 'en8',
                'image' => 'assets/images/engineering-steels/engineering-steels-en8.webp',
            ],
            [
                'name' => 'Engineering Steel EN9',
                'slug' => 'en9',
                'image' => 'assets/images/engineering-steels/engineering-steels-en9.webp',
            ],
            [
                'name' => 'Engineering Steel 1045',
                'slug' => '1045',
                'image' => 'assets/images/engineering-steels/engineering-steels-1045.webp',
            ],
            [
                'name' => 'Engineering Steel 1060',
                'slug' => '1060',
                'image' => 'assets/images/engineering-steels/engineering-steels-en8.webp',
            ],
        ];

    @endphp

    <section class="sec-padd-top sec-padd-bottom bg-light" id="products">
        <div class="container">
            <div class="section-title center">
                <h2>Products in Engineering Steel 1055</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10 center">
                    <p class="fs-6">
                        <strong class="text-dark">Engineering Steel 1055</strong> is typically available in
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
            <div class="row justify-content-center mb-3" id="global-standards">
                <div class="col-lg-10">
                    <p class="fw-bold fs-5 text-center my-4" style="color: #174268;">
                        Engineering Steel 1055 products are produced to the following global standards:
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
                <h2>Uses and Advantages</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-12 col-sm-6 col-md-5">
                    <div class="advantage-card h-100 d-flex flex-column">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5 class="flex-grow-1 d-flex align-items-center justify-content-center text-center">Higher
                            hardness and tensile strength compared to lower carbon steels</h5>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-5">
                    <div class="advantage-card h-100 d-flex flex-column">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5 class="flex-grow-1 d-flex align-items-center justify-content-center text-center">Good
                            wear resistance and toughness</h5>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-5">
                    <div class="advantage-card h-100 d-flex flex-column">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5 class="flex-grow-1 d-flex align-items-center justify-content-center text-center">Good
                            machinability and weldability with proper heat treatment</h5>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-5">
                    <div class="advantage-card h-100 d-flex flex-column">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5 class="flex-grow-1 d-flex align-items-center justify-content-center text-center">
                            Suitable for parts requiring strength and moderate ductility</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="applications" class="sec-padd-top sec-padd-bottom" id="application">
        <div class="container">
            <div class="section-title center">

                <h2>Applications of Engineering Steel 1055</h2>
                <p class="text-center pb-3"><strong class="text-dark">Engineering Steel 1055</strong> is widely
                    used in:
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Automotive and Machinery</h5>
                        <p>Shafts, gears, crankshafts, bolts, and studs requiring higher strength and wear
                            resistance.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Structural Components</h5>
                        <p>Heavy-duty structural parts and machinery components subject to mechanical stress.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Manufacturing</h5>
                        <p>Tools, dies, and machine parts that require a balance of strength and toughness.</p>
                    </div>
                </div>

                {{-- <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Power Generation</h5>
                        <p>Utilized in condensers, cooling systems, and heat recovery units due to its resistance to erosion
                            and chemical attack.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Aerospace Industry</h5>
                        <p>Used in structural frames, tubing, and fuel systems where strength-to-weight ratio is crucial.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Medical and Pharmaceutical Equipment</h5>
                        <p>Favored for surgical tools, implants, and cleanroom processing systems because of its purity and
                            biocompatibility.</p>
                    </div>
                </div> --}}

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


    <section class="sec-padd-top sec-padd-bottom bg-light py-5">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h2>Export Destinations</h2>
            </div>

            <p class="text-center mb-2">
                We export Engineering Steel 1055 to:
            </p>

            <p class="text-center fs-5">
                UAE, Saudi Arabia, Qatar, Oman, Kuwait, Bahrain, Turkey, Europe, USA, Canada, Singapore,
                Malaysia, Indonesia, South Africa, Nigeria.
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
                        <h5>Reliable supplier of high-quality EN 1055 steel products</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Customized product sizes and heat treatment options available</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Robust logistics ensuring timely deliveries worldwide</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Expert guidance on material selection and applications</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Commitment to quality and customer satisfaction</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="price"  class="sec-padd-top sec-padd-bottom bg-light py-5">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h2>1055 Steel Price per kg in India</h2>
            </div>

            <p class="text-center mb-2">
                Price varies based on size, OD, thickness, and heat-treatment condition.
            </p>

            <p class="text-center fs-5">
               <strong>Typical Range:</strong> ₹110 – ₹180 per kg (Indicative only)
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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="accordion-box">
                        <div class="section-title center">
                            <h2>FAQ's</h2>
                        </div>

                        <!-- Q1 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What is EN 1055 steel and what are its main characteristics?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    EN 1055, also known as C1055 or SAE 1055, is a medium carbon steel grade with
                                    higher
                                    carbon content compared to standard medium carbon steels.
                                    It offers superior hardness, strength, and wear resistance, making it ideal for
                                    applications that demand toughness and durability.
                                    With a good balance of mechanical properties, EN 1055 is widely used in
                                    structural and
                                    mechanical components requiring strength with moderate ductility.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the mechanical and physical properties of EN 1055 steel?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    EN 1055 steel has a density of 7.85 g/cm³ and a melting point range of 1370–1400
                                    °C.
                                    Its tensile strength varies between 517–827 MPa depending on the product
                                    condition,
                                    while yield strength ranges from 241–586 MPa.
                                    It also exhibits elongation values between 12–30%, Brinell hardness of 130–220,
                                    and
                                    Rockwell hardness between 75–95 B.
                                    These properties make EN 1055 suitable for heavy-duty engineering and industrial
                                    use.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What EN 1055 steel products does MOKSH TUBES & FITTINGS LLP supply?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP manufactures, supplies, and exports a complete range
                                    of EN
                                    1055 steel products including seamless and welded pipes, tubes, sheets, plates,
                                    coils,
                                    strips, bars,
                                    pipe fittings, flanges, fasteners, and custom-fabricated components.
                                    All products are manufactured according to global quality standards and can be
                                    customized in terms of dimensions, specifications, and heat treatment to meet
                                    specific
                                    industry needs.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the main applications of EN 1055 steel?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    EN 1055 steel is extensively used in the automotive and machinery industries for
                                    the
                                    production of shafts, gears, crankshafts, bolts, and studs that require high
                                    strength
                                    and wear resistance.
                                    In structural engineering, it is applied in heavy-duty parts exposed to
                                    mechanical
                                    stress.
                                    It is also widely utilized in manufacturing for tools, dies, and machine
                                    components
                                    where both strength and toughness are critical.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose MOKSH TUBES & FITTINGS LLP for EN 1055 steel products?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP is a trusted manufacturer and global supplier of EN
                                    1055
                                    steel, offering premium quality materials sourced from reliable mills.
                                    The company provides custom sizes, heat treatment options, and technical support
                                    to meet
                                    project-specific requirements.
                                    With strong logistics for timely worldwide delivery and a commitment to quality
                                    and
                                    customer satisfaction,
                                    MOKSH TUBES & FITTINGS LLP ensures dependable steel solutions for diverse
                                    industries.
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

    <!-- Contact CTA Section -->
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Contact Us</h2>
                <p>
                    For inquiries or to request a quote for EN 1055 steel products, contact <strong> Moksh Tubes &
                        Fittings
                        LLP </strong> — your dependable partner for medium carbon steel solutions.
                </p>
                <!-- Call button -->
                <a href="javascript:void(0);" class="contact-cta-btn" data-bs-toggle="modal"
                    data-bs-target="#contactFormModal">
                    Get in Touch
                </a>
            </div>
        </div>
    </section>







    <script type="application/ld+json">
        @verbatim
            {
            "@context": "https://schema.org",
            "@graph": [
                {
                "@type": "Product",
                "@id": "https://mokshtubes.com/materials/engineering-steels/engineering-steels-1055#product",
                "name": "Engineering Steel 1055 (C1055 / EN1055)",
                "image": "https://mokshtubes.com/assets/images/engineering-steels/engineering-steels-1055.webp",
                "description": "Engineering Steel 1055 (C1055 / EN1055) chemical composition, mechanical properties, hardness, tensile strength, applications and equivalent grades.",
                "sku": "1055-ENGINEERING-STEEL",
                "mpn": "C1055",
                "material": "Medium Carbon Steel",
                "category": "Engineering Steels",
                "brand": {
                    "@type": "Brand",
                    "name": "Moksh Tubes & Fittings LLP",
                    "logo": "https://mokshtubes.com/assets/images/logo/Board-1.webp"
                },
                "url": "https://mokshtubes.com/materials/engineering-steels/engineering-steels-1055",
                "additionalProperty": [
                    { "@type": "PropertyValue", "name": "Carbon", "value": "0.52–0.60%" },
                    { "@type": "PropertyValue", "name": "Manganese", "value": "0.60–0.90%" },
                    { "@type": "PropertyValue", "name": "Phosphorus", "value": "≤ 0.040%" },
                    { "@type": "PropertyValue", "name": "Sulfur", "value": "≤ 0.050%" },
                    { "@type": "PropertyValue", "name": "Hardness", "value": "130–220 HB" },
                    { "@type": "PropertyValue", "name": "Tensile Strength", "value": "517–827 MPa" }
                ]
                },

                {
                "@type": "Organization",
                "@id": "https://mokshtubes.com/#organization",
                "name": "Moksh Tubes & Fittings LLP",
                "url": "https://mokshtubes.com",
                "logo": "https://mokshtubes.com/assets/images/logo/Board-1.webp",
                "contactPoint": [
                    {
                    "@type": "ContactPoint",
                    "telephone": "+91-9967718848",
                    "contactType": "sales"
                    }
                ]
                },

            {
                "@type": "WebPage",
                "@id": "https://mokshtubes.com/materials/engineering-steels/engineering-steels-1055#webpage",
                "url": "https://mokshtubes.com/materials/engineering-steels/engineering-steels-1055",
                "name": "1055 Engineering Steel – Chemical Composition & Properties",
                "description": "Complete datasheet of 1055 Engineering Steel (C1055 / EN1055) including composition, properties, heat treatment and applications."
                },

                {
                "@type": "BreadcrumbList",
                "@id": "https://mokshtubes.com/materials/engineering-steels/engineering-steels-1055#breadcrumb",
                "itemListElement": [
                    { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://mokshtubes.com" },
                    { "@type": "ListItem", "position": 2, "name": "Engineering Steels", "item": "https://mokshtubes.com/materials/engineering-steels" },
                    { "@type": "ListItem", "position": 3, "name": "1055 Engineering Steel", "item": "https://mokshtubes.com/materials/engineering-steels/engineering-steels-1055" }
                ]
                },

                {
                "@type": "FAQPage",
                "@id": "https://mokshtubes.com/materials/engineering-steels/engineering-steels-1055#faq",
                "mainEntity": [
                    {
                    "@type": "Question",
                    "name": "What is EN 1055 steel?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "EN 1055 (C1055 / SAE 1055) is a medium carbon steel known for high hardness, durability, and wear resistance."
                    }
                    },
                    {
                    "@type": "Question",
                    "name": "What are the properties of 1055 steel?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "1055 steel has tensile strength 517–827 MPa, hardness 130–220 HB, density 7.85 g/cm³, and good wear resistance."
                    }
                    },
                    {
                    "@type": "Question",
                    "name": "What products are available in 1055 steel?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "1055 steel is available in round bars, plates, sheets, coils, strips, seamless pipes, welded tubes, flanges, fittings, fasteners, and machined components."
                    }
                    },
                    {
                    "@type": "Question",
                    "name": "Where is 1055 steel used?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "1055 steel is used in automotive parts, gears, shafts, crankshafts, machine components, tools, and engineering applications requiring strength and wear resistance."
                    }
                    }
                ]
                }
            ]
            }

        @endverbatim
    </script>
@endsection
