@extends('layouts.master')

@section('title', 'Hastelloy G30 | Superior Oxidation Resistance')
@section('meta_description', 'Hastelloy G30 pipes, tubes & fittings offer exceptional resistance to nitric, phosphoric,
    and sulfuric acids, ideal for harsh chemical processing.')
@section('meta_keywords',
    'Hastelloy G30, Oxidation Resistant Alloy, Hastelloy G30 Pipes, Hastelloy G30 Tubes, Hastelloy
    G30 Fittings, Chemical Processing Alloys, Acid Resistant Alloy, Industrial Corrosion Resistant Alloys')
@section('og_image', asset('assets/images/hastelloy/Hastelloy-G30.webp'))
@section('og_type', 'article')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/hastelloy/Hastelloy-G30.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Hastelloy G30 Alloy <br> Superior Oxidation Resistant Nickel Alloy</h1>
                </div>
            </div>
        </div>
    </section>

    <!--End breadcrumb area-->
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Product Overview</h2>
            </div>

            <h2 class="fw-semibold text-center mb-5" style="color: #db7227;">
                Introduction To Hastelloy G-30 /Alloy G-30 / UNS N06030
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/hastelloy/Hastelloy-G30.webp') }}" alt="Hastelloy g30"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> LLP is a leading manufacturer,
                            supplier, exporter, importer, and stockist of ALLOY G-30 (UNS N06030) <a
                                href="{{ route('products') }}">products</a>, available in
                            various forms such as <a href="{{ route('products.pipes-tubes') }}">Pipes & Tubes</a>, Pipe
                            Fittings, Flanges, Fasteners, Sheets & Plates, Coils,
                            Wires, Round Bars, Flat Bars, Angles, Channels, Welding Rods, Wire Mesh, and special custom-made
                            components.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">HASTELLOY G30</strong class="text-black"> is a nickel-chromium-iron
                            alloy with high additions of cobalt, molybdenum, and copper, developed specifically for improved
                            corrosion resistance in strongly oxidizing acid environments, especially phosphoric and nitric
                            acids. It offers significantly better performance than ALLOY G-3 in many highly oxidizing
                            chemical environments and resists intergranular corrosion even after welding. Known for its
                            exceptional resistance to mixed acid environments, <a
                                href="{{ route('materials.hastelloy') }}">HASTELLOY G30</a> also retains good fabricability
                            and is a
                            popular choice in fertilizer production, chemical processing, and pollution control systems.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- datasheet --}}


    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Hastelloy G30 Datasheet</h3>
            <p class="mb-3">
                Get the complete Hastelloy G30 datasheet with chemical composition,
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
                                    <td>Balance (43.0)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium</td>
                                    <td>28.0 – 31.5</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Molybdenum</td>
                                    <td>4.0 – 6.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron</td>
                                    <td>13.0 – 17.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Cobalt</td>
                                    <td>4.0 – 6.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese</td>
                                    <td>1.5 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon</td>
                                    <td>0.8 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon</td>
                                    <td>0.03 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Copper</td>
                                    <td>1.0 – 2.4</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sulfur</td>
                                    <td>0.02 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tungsten</td>
                                    <td>1.5 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Phosphorus</td>
                                    <td>0.04 max</td>
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
                                    <th>Value</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Density</td>
                                    <td>8.22 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Point</td>
                                    <td>1330–1380°C (2430–2515°F)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tensile Strength</td>
                                    <td>100,000 psi / 690 MPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (0.2% Offset)</td>
                                    <td>45,000 psi / 310 MPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elongation</td>
                                    <td>40%</td>
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
                                    <th>Metric</th>
                                    <th>Imperial</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Tensile Strength (@ 538°C / 1000°F)</td>
                                    <td>690 MPa</td>
                                    <td>100,000 psi</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (0.2% offset @ 427°C / 801°F)</td>
                                    <td>310 MPa</td>
                                    <td>45,000 psi</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elastic Modulus (RT)</td>
                                    <td>210 GPa</td>
                                    <td>30,000 ksi</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elongation at Break (@ 204°C / 399°F)</td>
                                    <td>40%</td>
                                    <td>40%</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Hardness, Rockwell B (plate)</td>
                                    <td>85</td>
                                    <td>85</td>
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
                <h2>Products in Hastelloy G30</h2>
            </div>

            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">MOKSH TUBES & FITTINGS LLP</strong>, with a proven track record in
                        corrosion-resistant alloys,delivers reliable ALLOY G-30 components used in harsh chemical
                        environments where superior resistance to oxidizing media is crucial. G-30 is especially valued for
                        maintaining structural integrity under mixed acid conditions.
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
                        We offer Hastelloy G30 in a wide range of product forms, including:
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


    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Uses and Advantages</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Outstanding resistance to nitric, phosphoric, and sulfuric acid</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Enhanced protection against oxidizing chlorides and mixed acid solutions</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Excellent intergranular corrosion resistance post-welding</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Reliable mechanical properties in aggressive chemical environments</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Good fabricability and formability</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Long-term service life in corrosion-prone sectors</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Hastelloy G30</h2>
                <p class="text-center pb-3"><strong class="text-dark">HASTELLOY G-30</strong> is ideally suited for
                    industrial applications involving strong oxidizing acids and multi-component chemical streams. Typical
                    uses include:
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Fertilizer Industry</h5>
                        <p>Used in phosphate reactors, evaporators, and acid piping where phosphoric acid corrosion is a
                            concern.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Chemical Processing Plants</h5>
                        <p>Ideal for use in handling nitric-phosphoric-sulfuric acid mixtures and other aggressive
                            solutions.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Pickling Equipment</h5>
                        <p>Applied in heat exchangers and tanks used in acid regeneration and pickling processes.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Pollution Control Systems</h5>
                        <p>Used in stack gas scrubbers, absorber towers, and ducts exposed to acidic fumes and gases.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Pulp and Paper Industry</h5>
                        <p>Used in bleach plant and chemical recovery components exposed to oxidizing agents.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Food & Beverage Applications</h5>
                        <p>Chosen where chemical cleaning agents are used, requiring high resistance and hygiene.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Wastewater Treatment</h5>
                        <p>Effective in tanks, piping, and pressure vessels exposed to acid-laden effluents.</p>
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
                        <h5>Deep inventory of corrosion-resistant and specialty alloys</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Precision engineering and fabrication capabilities</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Global logistics and export-ready product solutions</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Custom cut sizes and configurations available</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Total commitment to client satisfaction and quality assurance</h5>
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
                                <h4>What is Hastelloy G-30 and why is it important in industrial use?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Hastelloy G-30 (UNS N06030) is a nickel-chromium-iron alloy with significant additions
                                    of cobalt, molybdenum, and copper, designed for superior resistance to strongly
                                    oxidizing acid environments such as nitric and phosphoric acid. It offers better
                                    performance than Alloy G-3 in highly oxidizing conditions and maintains excellent
                                    resistance to intergranular corrosion even after welding, making it a critical material
                                    for industries dealing with aggressive chemical environments.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the main properties of Hastelloy G-30?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Hastelloy G-30 combines outstanding corrosion resistance with reliable mechanical
                                    stability. It has a density of 8.22 g/cm³, a melting point of 1330–1380°C, tensile
                                    strength of 100,000 psi, yield strength of 45,000 psi, and elongation of 40%. The alloy
                                    provides superior protection against nitric, sulfuric, and phosphoric acids, oxidizing
                                    chlorides, and mixed acid environments while retaining good formability and weldability
                                    for complex industrial applications.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Which industries commonly use Hastelloy G-30 products?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Hastelloy G-30 is widely used in fertilizer production, where it resists corrosion from
                                    phosphoric acid, as well as in chemical processing plants handling aggressive acid
                                    mixtures. It is also applied in pickling equipment, pollution control systems such as
                                    scrubbers and absorber towers, pulp and paper bleaching units, food and beverage
                                    facilities requiring chemical cleaning resistance, and wastewater treatment plants
                                    exposed to acid laden effluents.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What types of Hastelloy G-30 products are available from MOKSH TUBES & FITTINGS LLP?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP manufactures and supplies a wide range of Hastelloy G-30
                                    products including seamless and welded pipes, tubes, sheets, plates, coils, flanges,
                                    fittings, fasteners, round bars, wire mesh, welding rods, and custom-fabricated
                                    components. Each product is engineered to international quality standards to deliver
                                    long-term durability and performance in aggressive chemical environments.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose MOKSH TUBES & FITTINGS LLP for Hastelloy G-30 materials?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP is a trusted supplier of corrosion-resistant alloys with a
                                    deep inventory, global shipping capabilities, and expertise in precision engineering.
                                    The company adheres to ASTM and ASME standards, offers custom cut sizes and
                                    fabrications, and ensures reliable delivery of high-quality Hastelloy G-30 products,
                                    backed by responsive customer service and a strong commitment to client satisfaction.
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
                    <strong>Moksh Tubes & Fittings LLP</strong> your reliable source for
                    <strong>HASTELLOY G-30</strong> products built for demanding chemical environments and long-term
                    durability.
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
                "name": "What is Hastelloy G-30 and why is it important in industrial use?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Hastelloy G-30 (UNS N06030) is a nickel-chromium-iron alloy with significant additions of cobalt, molybdenum, and copper, designed for superior resistance to strongly oxidizing acid environments such as nitric and phosphoric acid. It offers better performance than Alloy G-3 in highly oxidizing conditions and maintains excellent resistance to intergranular corrosion even after welding, making it a critical material for industries dealing with aggressive chemical environments."
                }
                },
                {
                "@type": "Question",
                "name": "What are the main properties of Hastelloy G-30?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Hastelloy G-30 combines outstanding corrosion resistance with reliable mechanical stability. It has a density of 8.22 g/cm³, a melting point of 1330–1380°C, tensile strength of 100,000 psi, yield strength of 45,000 psi, and elongation of 40%. The alloy provides superior protection against nitric, sulfuric, and phosphoric acids, oxidizing chlorides, and mixed acid environments while retaining good formability and weldability for complex industrial applications."
                }
                },
                {
                "@type": "Question",
                "name": "Which industries commonly use Hastelloy G-30 products?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Hastelloy G-30 is widely used in fertilizer production, where it resists corrosion from phosphoric acid, as well as in chemical processing plants handling aggressive acid mixtures. It is also applied in pickling equipment, pollution control systems such as scrubbers and absorber towers, pulp and paper bleaching units, food and beverage facilities requiring chemical cleaning resistance, and wastewater treatment plants exposed to acid laden effluents."
                }
                },
                {
                "@type": "Question",
                "name": "What types of Hastelloy G-30 products are available from MOKSH TUBES & FITTINGS LLP?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "MOKSH TUBES & FITTINGS LLP manufactures and supplies a wide range of Hastelloy G-30 products including seamless and welded pipes, tubes, sheets, plates, coils, flanges, fittings, fasteners, round bars, wire mesh, welding rods, and custom-fabricated components. Each product is engineered to international quality standards to deliver long-term durability and performance in aggressive chemical environments."
                }
                },
                {
                "@type": "Question",
                "name": "Why choose MOKSH TUBES & FITTINGS LLP for Hastelloy G-30 materials?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "MOKSH TUBES & FITTINGS LLP is a trusted supplier of corrosion-resistant alloys with a deep inventory, global shipping capabilities, and expertise in precision engineering. The company adheres to ASTM and ASME standards, offers custom cut sizes and fabrications, and ensures reliable delivery of high-quality Hastelloy G-30 products, backed by responsive customer service and a strong commitment to client satisfaction."
                }
                }
            ]
            }
        @endverbatim
    </script>
@endsection
