@extends('layouts.master')

@section('title', 'Hastelloy C2000 | Versatile Corrosion Alloy')
@section('meta_description',
    'Hastelloy C2000 pipes, tubes & fittings offer superior resistance to oxidizing and reducing agents, ideal for mixed-acid chemical processing applications.')
@section('meta_keywords',
    'Hastelloy C2000, Corrosion Resistant Alloy, Hastelloy C2000 Pipes, Hastelloy C2000 Tubes,
    Hastelloy C2000 Fittings, Oxidizing Agent Resistant, Reducing Agent Resistant, Chemical Processing Alloys, Mixed-Acid
    Resistant Alloy, Industrial Corrosion Alloys')
@section('og_image', asset('assets/images/hastelloy/hastelloy-c2000.webp'))
@section('og_type', 'article')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/hastelloy/hastelloy-c2000.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Hastelloy C2000 Alloy <br> Corrosion Resistant Nickel Alloy</h1>
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
                Introduction To Hastelloy C-2000 / Alloy C-2000 / UNS N06200
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/hastelloy/hastelloy-c2000.webp') }}" alt="Hastelloy C2000"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a trusted manufacturer,
                            exporter, importer, and stockist of high-performance <a
                                href="{{ route('materials.hastelloy') }}">HASTELLOY C-2000</a> (UNS N06200) products. Our
                            offering includes <a href="{{ route('products.pipes-tubes') }}">Pipes & Tubes</a>, Fittings,
                            Flanges, Fasteners, Plates, Sheets, Bars, Coils,
                            Wires, Welding Rods, and fully customized components. Designed to deliver exceptional resistance
                            in the broadest range of corrosive environments, <strong class="text-black">HASTELLOY
                                C2000</strong> combines outstanding oxidizing and reducing media performance.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">HASTELLOY C2000</strong class="text-black">is a
                            nickel-chromium-molybdenum-copper alloy engineered to address the limitations of other
                            corrosion-resistant materials. The addition of copper enhances resistance to sulfuric acid,
                            while chromium increases protection against oxidizing agents. This alloy is highly adaptable,
                            performing well across chemical processing, acid production, and environmental protection
                            industries.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Hastelloy C2000 Datasheet</h3>
            <p class="mb-3">
                Get the complete Hastelloy C2000 datasheet with chemical composition,
                mechanical properties, heat treatment details, and applications.
                Enter your email to receive the PDF instantly.
            </p>

            <!-- Lead Capture Form -->
            <form id="leadForm" method="POST" action="{{ route('lead.capture') }}" class="mb-3">
                @csrf
                <div class="row justify-content-center">
                    <input type="hidden" name="pdf" value="haselloy_c2000.pdf">
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
                                    <td>59 (Balance)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium</td>
                                    <td>22.0 – 24.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Molybdenum</td>
                                    <td>15.0 – 17.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron</td>
                                    <td>3.0 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Cobalt</td>
                                    <td>2.5 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese</td>
                                    <td>0.50 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon</td>
                                    <td>0.08 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon</td>
                                    <td>0.01 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Phosphorus</td>
                                    <td>0.02 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sulfur</td>
                                    <td>0.02 max</td>
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
                                    <td>8.50 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Point</td>
                                    <td>1350–1390°C (2462–2534°F)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tensile Strength</td>
                                    <td>1,00,000 psi / 690 MPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (0.2% Offset)</td>
                                    <td>43,500 psi / 300 MPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elongation</td>
                                    <td>45 %</td>
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
                                    <td>300 MPa</td>
                                    <td>43,500 psi</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elastic Modulus (RT)</td>
                                    <td>214 GPa</td>
                                    <td>31,000 ksi</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elongation at Break (@ 204°C / 399°F)</td>
                                    <td>45%</td>
                                    <td>45%</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Hardness, Rockwell B (plate)</td>
                                    <td>90</td>
                                    <td>90</td>
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
                <h2>Products in Hastelloy C2000</h2>
            </div>

            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">MOKSH TUBES & FITTINGS LLP</strong>, we offer Hastelloy C-2000 in a
                        variety of product forms:
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
                        We offer Hastelloy C2000 in a wide range of product forms, including:
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


    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Uses and Advantages</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Excellent resistance to both oxidizing and reducing agents</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Superior performance in sulfuric, nitric, and hydrochloric acid environments</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>High mechanical strength and metallurgical stability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Enhanced weldability compared to other C-grade alloys</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Long-term corrosion resistance across mixed-acid applications</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Hastelloy C2000</h2>
                <p class="text-center pb-3"><strong class="text-dark">HASTELLOY C-2000</strong> is a highly
                    corrosion-resistant alloy designed to handle a wide range of aggressive environments — from strong
                    oxidizers to reducing acids. Its unique blend of chromium, molybdenum, and copper provides outstanding
                    versatility, making it ideal for critical operations across several industries.
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Chemical Processing Industry</h5>
                        <p>Widely used in reactors, heat exchangers, piping systems, evaporators, and storage tanks where
                            mixed acid environments — including hydrochloric, sulfuric, and nitric acid — are present.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Pharmaceutical and Biotechnology</h5>
                        <p>Perfect for systems requiring ultra-high corrosion resistance, hygiene, and regulatory compliance
                            — such as process tanks, valves, and piping exposed to aggressive cleaning agents.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Pollution Control Equipment</h5>
                        <p>Applied in scrubbers, stack liners, and other components exposed to acidic off-gases and
                            corrosive condensates in air pollution control systems.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Food and Beverage Industry</h5>
                        <p>Used in processing lines and vessels where both sanitation and resistance to acidic food products
                            or cleaning chemicals are essential.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Pulp and Paper Industry</h5>
                        <p>Reliable for bleaching plants, digesters, and chlorine dioxide systems where resistance to
                            oxidizing and acidic chemicals is critical.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Mining and Metal Processing</h5>
                        <p>Ideal for equipment exposed to acidic leaching solutions and aggressive slurry conditions in
                            hydrometallurgical operations.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-recycle"></i></div>
                        <h5>Wastewater Treatment</h5>
                        <p>Trusted for handling highly corrosive effluents, chemical cleaning agents, and brine streams in
                            industrial and municipal water treatment systems.</p>
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
            <p class="text-center pb-3 my-4"><strong class="text-dark">HASTELLOY C-2000's</strong> with its broad-spectrum
                corrosion resistance and excellent mechanical strength, HASTELLOY C-2000 delivers long-term performance in
                environments where other alloys simply can’t hold up.

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
                        <h5>Expert support in material selection & documentation</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Prompt delivery of certified Hastelloy materials</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Strong vendor network and global supply chain</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Precision machining and fabrication under ISO standards</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Trusted by clients worldwide for performance alloys</h5>
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
                                <h4>What is Hastelloy C-2000 and why is it used in industries?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Hastelloy C-2000 (UNS N06200) is a nickel chromium molybdenum copper alloy developed to
                                    provide superior resistance to both oxidizing and reducing environments. The addition of
                                    copper enhances its performance in sulfuric acid, while chromium offers excellent
                                    resistance against oxidizing agents. This makes Hastelloy C-2000 a highly versatile
                                    material widely used in industries that require exceptional corrosion resistance and
                                    long term durability.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the key properties of Hastelloy C-2000?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Hastelloy C-2000 is known for its excellent resistance to mixed acid environments,
                                    including sulfuric, nitric, and hydrochloric acids. It has high mechanical strength,
                                    superior metallurgical stability, and improved weldability compared to other C-grade
                                    alloys. With a density of 8.50 g/cm³, melting point of 1350–1390°C, tensile strength of
                                    100,000 psi, and elongation of 45%, this alloy maintains structural integrity even in
                                    highly aggressive and high temperature conditions.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>In which industries is Hastelloy C-2000 most commonly used?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Hastelloy C-2000 is widely utilized in chemical processing, pharmaceutical and
                                    biotechnology, pollution control, pulp and paper, food and beverage, mining, wastewater
                                    treatment, and environmental protection industries. Its ability to perform well in the
                                    presence of strong acids, oxidizers, and corrosive effluents makes it a trusted choice
                                    for critical applications where conventional materials fail.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What types of Hastelloy C-2000 products are offered by MOKSH TUBES & FITTINGS LLP?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP supplies a comprehensive range of Hastelloy C-2000 products
                                    including seamless and welded pipes, tubes, sheets, plates, coils, bars, flanges,
                                    fittings, fasteners, wires, welding rods, and custom fabricated components. Each product
                                    is manufactured under strict quality control standards to ensure reliability,
                                    performance, and compliance with global specifications.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose MOKSH TUBES & FITTINGS LLP for Hastelloy C-2000 materials?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP is a trusted manufacturer, exporter, importer, and stockist
                                    of high performance Hastelloy C-2000 products. With a strong vendor network,
                                    ISO certified manufacturing, precision machining, and global supply capabilities, the
                                    company ensures timely delivery and reliable solutions. Clients worldwide prefer MOKSH
                                    TUBES & FITTINGS LLP for their expertise in nickel alloys, exceptional service, and
                                    commitment to customer satisfaction.
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
                    <strong>Moksh Tubes & Fittings LLP</strong> today for expert assistance and a competitive quote.
                    <strong>HASTELLOY C-2000</strong> products.
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
                "name": "What is Hastelloy C-2000 and why is it used in industries?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Hastelloy C-2000 (UNS N06200) is a nickel-chromium-molybdenum-copper alloy developed to provide superior resistance to both oxidizing and reducing environments. The addition of copper enhances its performance in sulfuric acid, while chromium offers excellent resistance against oxidizing agents. This makes Hastelloy C-2000 a highly versatile material widely used in industries that require exceptional corrosion resistance and long-term durability."
                }
                },
                {
                "@type": "Question",
                "name": "What are the key properties of Hastelloy C-2000?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Hastelloy C-2000 is known for its excellent resistance to mixed acid environments, including sulfuric, nitric, and hydrochloric acids. It has high mechanical strength, superior metallurgical stability, and improved weldability compared to other C-grade alloys. With a density of 8.50 g/cm³, melting point of 1350–1390°C, tensile strength of 100,000 psi, and elongation of 45%, this alloy maintains structural integrity even in highly aggressive and high-temperature conditions."
                }
                },
                {
                "@type": "Question",
                "name": "In which industries is Hastelloy C-2000 most commonly used?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Hastelloy C-2000 is widely utilized in chemical processing, pharmaceutical and biotechnology, pollution control, pulp and paper, food and beverage, mining, wastewater treatment, and environmental protection industries. Its ability to perform well in the presence of strong acids, oxidizers, and corrosive effluents makes it a trusted choice for critical applications where conventional materials fail."
                }
                },
                {
                "@type": "Question",
                "name": "What types of Hastelloy C-2000 products are offered by MOKSH TUBES & FITTINGS LLP?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "MOKSH TUBES & FITTINGS LLP supplies a comprehensive range of Hastelloy C-2000 products including seamless and welded pipes, tubes, sheets, plates, coils, bars, flanges, fittings, fasteners, wires, welding rods, and custom fabricated components. Each product is manufactured under strict quality control standards to ensure reliability, performance, and compliance with global specifications."
                }
                },
                {
                "@type": "Question",
                "name": "Why choose MOKSH TUBES & FITTINGS LLP for Hastelloy C-2000 materials?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "MOKSH TUBES & FITTINGS LLP is a trusted manufacturer, exporter, importer, and stockist of high-performance Hastelloy C-2000 products. With a strong vendor network, ISO-certified manufacturing, precision machining, and global supply capabilities, the company ensures timely delivery and reliable solutions. Clients worldwide prefer MOKSH TUBES & FITTINGS LLP for their expertise in nickel alloys, exceptional service, and commitment to customer satisfaction."
                }
                }
            ]
            }

        @endverbatim
    </script>
@endsection
