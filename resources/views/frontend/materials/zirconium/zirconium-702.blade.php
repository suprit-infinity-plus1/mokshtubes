@extends('layouts.master')

@section('title', 'Zirconium 702 | High-Purity Corrosion Resistant')
@section('meta_description',
    'Zirconium 702 alloy offers excellent corrosion resistance and high purity, ideal for
    chemical, nuclear, and industrial applications.')
@section('meta_keywords',
    'Zirconium 702, High Purity Zirconium, Corrosion Resistant Zirconium, Zirconium 702 Pipes,
    Zirconium 702 Tubes, Zirconium 702 Sheets, Chemical Industry Zirconium, Nuclear Zirconium, Industrial Zirconium Alloys,
    High Performance Zirconium')
@section('og_image', asset('assets/images/zirconium/zirconium-702.webp'))
@section('og_type', 'article')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/zirconium/zirconium-702.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Zirconium 702 <br> High Purity & Corrosion Resistant Alloy</h1>

                    <!-- Add your extra content here -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        commercially pure zirconium grade known for its exceptional corrosion resistance, excellent
                        formability, and reliable performance in extreme chemical environments. Below is the complete
                        datasheet including chemical composition, mechanical properties, physical properties, heat
                        treatment, and applications.

                    </p>
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
            <a href="#contact-us">Contact Us</a>
        </div>
    </div>
    <!--End breadcrumb area-->
    <section id="overview" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Product Overview</h2>
            </div>

            <h2 class="fw-semibold text-center mb-5" style="color: #db7227;">
                Introduction To Zirconium 702 / UNS R60702
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/zirconium/zirconium-702.webp') }}" alt="Zirconium 702"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> proudly manufactures, supplies,
                            exports, imports, and stocks a wide range of<strong class="text-black"> Zirconium 702 (UNS
                                R60702) <a href="{{ route('products') }}">products</a></strong>. Our offerings
                            include Pipes & Tubes, Fittings, Flanges, Fasteners, Sheets, Plates, Coils, Wires, Bars, Welding
                            Rods, and Custom-Engineered Components—all tailored to meet the needs of demanding industries.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black"><a href="{{ route('materials.zirconium') }}">Zirconium
                                    702</a></strong class="text-black"> is a commercially pure
                            zirconium alloy known for its exceptional corrosion resistance, particularly in aggressive
                            chemical environments like strong acids and alkalis. With excellent weldability, ductility, and
                            mechanical strength, it’s a go-to material for applications that require purity, performance,
                            and longevity.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Zicrnium 702 Datasheet</h3>
            <p class="mb-3">
                Get the complete Zicrnium 702 datasheet with chemical composition,
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
                <h2>Specifications of Zirconium 702 (UNS R60702)</h2>
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
                                    <td>Zirconium 702 / UNS R60702</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Type</td>
                                    <td>Commercially Pure Zirconium</td>
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

    <!-- Chemical Composition -->
    <section id="composition" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Chemical Composition of Zirconium 702 (UNS R60702)</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Element</th>
                                    <th>Max. Composition (%)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Zirconium (Zr)</td>
                                    <td>≥ 99.2 (Balance)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Hafnium (Hf)</td>
                                    <td>≤ 4.5</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron + Chromium</td>
                                    <td>≤ 0.2</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nitrogen (N)</td>
                                    <td>≤ 0.025</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Hydrogen (H)</td>
                                    <td>≤ 0.005</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Oxygen (O)</td>
                                    <td>≤ 0.16</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon (C)</td>
                                    <td>≤ 0.05</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Niobium (Nb)</td>
                                    <td>≤ 0.01</td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="mt-3 text-center">
                            Zirconium 702 achieves exceptional corrosion resistance due to ultra-low interstitial impurities
                            (O, N, H, C).
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
                <h2 class="fw-bold" style="color:#174268;">Technical Composition of Zirconium 702</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                     <h3 class="text-center mb-3" style="color: #db7227;">Physical Properties of Zirconium 702
                    </h3>
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
                                    <td>0.235 lb/in³</td>
                                    <td>6.51 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Point</td>
                                    <td>3370 °F</td>
                                    <td>1852 °C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elastic Modulus</td>
                                    <td>14.4 ×10³ ksi</td>
                                    <td>99.3 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Shear Modulus</td>
                                    <td>5.25 ×10³ ksi</td>
                                    <td>36.2 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Poisson’s Ratio</td>
                                    <td>0.34</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Magnetic Properties</td>
                                    <td>Non-magnetic</td>
                                    <td>Non-magnetic</td>
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
                        Heat Treatment of Zirconium 702
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
                                    <td>Stress Relieving</td>
                                    <td>540 – 650 °C</td>
                                    <td>Reduce residual stresses</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Annealing</td>
                                    <td>700 – 900 °C</td>
                                    <td>Restore ductility & corrosion resistance</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Vacuum Annealing</td>
                                    <td>—</td>
                                    <td>Semiconductor-grade purity</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Recrystallization Annealing</td>
                                    <td>850 – 950 °C</td>
                                    <td>Restore properties after heavy cold work</td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="mt-3 text-center">
                            📌 Inert gas shielding (argon or helium) is mandatory during heat treatment to prevent oxygen,
                            nitrogen, and hydrogen contamination.
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
                    Mechanical Properties of Zirconium 702 (Annealed)
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

    <!-- Available Forms -->
    <section class="sec-padd-top sec-padd-bottom bg-light" id="related grades">
        <div class="container">
            <div class="section-title center mt-5">
                <h2>Available Forms & Size Range – Zirconium 702</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <p class="text-center mb-3">
                        We supply Zirconium 702 in the following product forms:
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



    @php
        $products = [
            [
                'name' => 'Seamless Pipes',
                'route' => 'products.pipes-tubes.seamless-pipes',
                'image' => 'assets/images/all-product/seamless-pipes-10.webp',
            ],

            [
                'name' => 'Welded Pipes (ERW & EFW)',
                'route' => 'products.pipes-tubes.welded-pipes',
                'image' => 'assets/images/all-product/welded-pipes-tubes-1.webp',
            ],
            [
                'name' => 'Tubes (Capillary, U-Bend)',
                'route' => 'products.pipes-tubes.u-bent-tubes',
                'image' => 'assets/images/all-product/u-bent-tube.webp',
            ],
            [
                'name' => 'Sheets & Plates',
                'route' => 'products.sheets-plates-coils.sheets-and-plates',
                'image' => 'assets/images/all-product/Sheets-Plates.webp',
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
                'image' => 'assets/images/all-product/FASTENERS.webp',
            ],
            [
                'name' => 'Custom Fabricated Components',
                'route' => 'products.pipe-fittings-flanges-fasteners.custom-fabricated-fittings',
                'image' => 'assets/images/all-product/custom-metal-fabricated.webp',
            ],
        ];
    @endphp

    <section id="products" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Products in Zirconium 702</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Zirconium 702</strong> in the following standard and custom-engineered
                        forms:
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
                        Zirconium 702 products are produced to the following global standards:
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
                        <h5>Excellent Corrosion Resistance in acids like hydrochloric, sulfuric, nitric, and organic acids
                        </h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Good Strength and Toughness at room and elevated temperatures</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Easily Weldable and Formable—supports complex fabrication</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Low Reactivity with Process Media—ideal for sensitive applications</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Non-toxic and Biocompatible—used in medical and high-purity chemical systems</h5>
                    </div>
                </div>
                {{-- <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Economical compared to other titanium grades with higher alloy content</h5>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>


    <section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Zirconium 702</h2>
                <p class="text-center pb-3"><strong class="text-dark">Zirconium 702</strong> is trusted in industries that
                    demand purity, performance, and resistance to extreme environments.
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Chemical Processing</h5>
                        <p>Perfect for reactors, heat exchangers, pressure vessels, columns, and piping systems exposed to
                            strong acids.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Nuclear Power</h5>
                        <p>Due to its low neutron absorption, Zirconium 702 is used in fuel cladding, cooling systems, and
                            structural components.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Pharmaceutical & Food Industry</h5>
                        <p>Used for high-purity fluid handling, steam lines, and acid-resistant parts that require hygienic
                            surfaces.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Aerospace</h5>
                        <p>Applicable in corrosive fuel systems and specialty aerospace equipment due to its light weight
                            and chemical resistance.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Medical Devices</h5>
                        <p>Biocompatible and corrosion-resistant—used in implants, surgical instruments, and sterilization
                            chambers.</p>
                    </div>
                </div>

                {{-- <div class="col-md-6 col-lg-4">
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


    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container text-center">
            <div class="section-title center">
                <h2>WHY CHOOSE US?</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-award-fill"></i></div>
                        <h5>Specialists in Zirconium & Exotic Alloys</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Global sourcing of top-grade raw materials</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Precision manufacturing to ASTM/ASME standards</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Custom fabrication to meet your specs</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Reliable delivery & support across industries</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <section id="price" class="sec-padd-top sec-padd-bottom bg-light py-5">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h2>Zirconium 702 Price in India</h2>
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
                                <h4>What is Zirconium 702 and its key features?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Zirconium 702 (UNS R60702) is a commercially pure zirconium alloy known for its
                                    exceptional corrosion resistance, excellent weldability, high strength, and
                                    biocompatibility. These properties make it highly suitable for chemical processing,
                                    nuclear, and medical applications where purity and durability are critical.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Which products are available in Zirconium 702?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP offers a wide range of Zirconium 702 products, including
                                    seamless and welded pipes, tubes, sheets, plates, coils, bars, flanges, fittings,
                                    fasteners, welding rods, and custom fabricated components suitable for high performance
                                    industrial and medical applications.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the main applications of Zirconium 702?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Zirconium 702 is extensively used in chemical processing, nuclear power plants,
                                    pharmaceuticals, food processing, aerospace systems, and medical devices, providing
                                    outstanding performance where high purity and corrosion resistance are essential.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What advantages does Zirconium 702 offer over other alloys?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Zirconium 702 delivers superior corrosion resistance in acidic and alkaline
                                    environments, excellent formability and weldability, low reactivity, biocompatibility,
                                    and long term durability under extreme industrial conditions, making it a reliable
                                    choice for critical applications.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose MOKSH TUBES & FITTINGS LLP for Zirconium 702?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP provides high quality Zirconium 702 with precision
                                    fabrication, global sourcing, compliance with ASTM/ASME standards, timely delivery, and
                                    expert technical support, ensuring reliable solutions for demanding industrial and
                                    medical applications.
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

    <section id="contact-us" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Contact Us</h2>
                <p>
                    <strong>Moksh Tubes & Fittings LLP</strong> Let our team help you source exactly what you need, when you
                    need it.
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
                "name": "What is Zirconium 702 and its key features?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Zirconium 702 (UNS R60702) is a commercially pure zirconium alloy known for its exceptional corrosion resistance, excellent weldability, high strength, and biocompatibility. These properties make it highly suitable for chemical processing, nuclear, and medical applications where purity and durability are critical."
                }
                },
                {
                "@type": "Question",
                "name": "Which products are available in Zirconium 702?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "MOKSH TUBES & FITTINGS LLP offers a wide range of Zirconium 702 products, including seamless and welded pipes, tubes, sheets, plates, coils, bars, flanges, fittings, fasteners, welding rods, and custom fabricated components suitable for high performance industrial and medical applications."
                }
                },
                {
                "@type": "Question",
                "name": "What are the main applications of Zirconium 702?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Zirconium 702 is extensively used in chemical processing, nuclear power plants, pharmaceuticals, food processing, aerospace systems, and medical devices, providing outstanding performance where high purity and corrosion resistance are essential."
                }
                },
                {
                "@type": "Question",
                "name": "What advantages does Zirconium 702 offer over other alloys?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Zirconium 702 delivers superior corrosion resistance in acidic and alkaline environments, excellent formability and weldability, low reactivity, biocompatibility, and long term durability under extreme industrial conditions, making it a reliable choice for critical applications."
                }
                },
                {
                "@type": "Question",
                "name": "Why choose MOKSH TUBES & FITTINGS LLP for Zirconium 702?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "MOKSH TUBES & FITTINGS LLP provides high quality Zirconium 702 with precision fabrication, global sourcing, compliance with ASTM/ASME standards, timely delivery, and expert technical support, ensuring reliable solutions for demanding industrial and medical applications."
                }
                }
            ]
            }

        @endverbatim
    </script>
@endsection
