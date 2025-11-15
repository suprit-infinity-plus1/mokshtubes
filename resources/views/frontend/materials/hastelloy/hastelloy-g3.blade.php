@extends('layouts.master')

@section('title', 'Hastelloy G3 | Weldable Corrosion Alloy')
@section('meta_description',
    'Hastelloy G3 pipes, tubes & fittings from Moksh Tubes — resistant to oxidizing & reducing
    acids, with excellent weldability & durability.')
@section('meta_keywords',
    'Hastelloy G3, Corrosion Resistant Alloy, Hastelloy G3 Pipes, Hastelloy G3 Tubes, Hastelloy G3
    Fittings, Weldable Alloy, Oxidizing Acid Resistant, Reducing Acid Resistant, Durable Alloy')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Hastelloy G3 Alloy <br> Weldable Corrosion Resistant Nickel Alloy</h1>
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
                Introduction To Hastelloy G-3 /Alloy G-3 / UNS N06985
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/hastelloy/hastelloy-G3.webp') }}" alt="Hastelloy g3"
                        class="img-fluid rounded shadow-sm">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a reliable manufacturer,
                            supplier, exporter, importer, and stockist of ALLOY G-3 (UNS N06985) in various <a
                                href="{{ route('products') }}">product</a> forms
                            including <a href="{{ route('products.pipes-tubes') }}">Pipes & Tubes</a>, Pipe Fittings,
                            Flanges, Fasteners, Sheets & Plates, Coils, Wires, Round
                            Bars, Flat Bars, Angles, Channels, Welding Rods, Wire Mesh, and other customized or special
                            components.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black"><a href="{{ route('materials.hastelloy') }}">HASTELLOY G3</a></strong
                                class="text-black"> is a nickel-chromium-iron
                            alloy with additions of molybdenum and copper, specifically designed to resist a broad range of
                            oxidizing and reducing chemicals. It offers excellent resistance to sulfuric acid, phosphoric
                            acid, nitric acid, and other strongly corrosive environments. Its improved weldability and lower
                            sensitivity to thermal cracking (compared to other high-nickel alloys) make it a preferred
                            choice in chemical process and pollution control equipment. The alloy resists intergranular
                            corrosion and maintains strength even after welding.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Hastelloy G3 Datasheet</h3>
            <p class="mb-3">
                Get the complete Hastelloy G3 datasheet with chemical composition,
                mechanical properties, heat treatment details, and applications.
                Enter your email to receive the PDF instantly.
            </p>

            <!-- Lead Capture Form -->
            <form id="leadForm" method="POST" action="{{ route('lead.capture') }}" class="mb-3">
                @csrf
                <div class="row justify-content-center">
                    <input type="hidden" name="pdf" value="Hastelloy_G3.pdf">
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

            <hr class="my-4">
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
                                    <td>47.0 – 50.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium</td>
                                    <td>20.0 – 23.5</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Molybdenum</td>
                                    <td>6.0 – 8.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron</td>
                                    <td>18.0 – 21.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Cobalt</td>
                                    <td>5.0 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese</td>
                                    <td>2.0 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon</td>
                                    <td>0.6 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon</td>
                                    <td>0.03 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Copper</td>
                                    <td>1.5 – 2.5</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sulfur</td>
                                    <td>0.03 max</td>
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
                                    <td>1350–1395°C (2462–2543°F)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tensile Strength</td>
                                    <td>95,000 psi / 655 MPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (0.2% Offset)</td>
                                    <td>43,000 psi / 295 MPa</td>
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
                                    <td>586 MPa</td>
                                    <td>85,000 psi</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (0.2% offset @ 427°C / 801°F)</td>
                                    <td>276 MPa</td>
                                    <td>40,000 psi</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elastic Modulus (RT)</td>
                                    <td>208 GPa</td>
                                    <td>30,000 ksi</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elongation at Break (@ 204°C / 399°F)</td>
                                    <td>45%</td>
                                    <td>45%</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Hardness, Rockwell B (plate)</td>
                                    <td>88</td>
                                    <td>88</td>
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

    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Products in Hastelloy G3</h2>
            </div>

            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">MOKSH TUBES & FITTINGS LLP</strong>, with specialized capabilities in
                        corrosion-resistant materials offers ALLOY G-3 products trusted across demanding industrial sectors.
                        Known for its performance in mixed acid environments and welding stability, G-3 is especially
                        suitable for critical chemical processing systems.
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
                        We offer Hastelloy G3 in a wide range of product forms, including:
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
                        <h5>Excellent corrosion resistance in both oxidizing and reducing acids</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Superior resistance to phosphoric, sulfuric, nitric, and hydrochloric acids</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Stable mechanical properties after welding or high-heat exposure</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Reduced sensitivity to intergranular corrosion and weld cracking</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Good formability and fabricability across industrial settings</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Long-lasting performance in aggressive chemical service</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Hastelloy G3</h2>
                <p class="text-center pb-3"><strong class="text-dark">HASTELLOY G-3</strong> is a versatile and reliable
                    material used in systems where chemical resistance and weldability are both required. Common
                    applications include:
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Chemical Processing Industry</h5>
                        <p>Used in tanks, piping, heat exchangers, valves, and pressure vessels exposed to aggressive acidic
                            media.x`</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Pollution Control and Environmental Systems</h5>
                        <p>Applied in flue gas scrubbers, stack liners, and equipment exposed to acid condensates.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Fertilizer and Agricultural Chemical Production</h5>
                        <p>Ideal for handling nitric-phosphoric-sulfuric acid blends and aggressive liquid fertilizers.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Pickling and Acid Regeneration Plants</h5>
                        <p>Used in tanks, ducts, and processing components exposed to concentrated acids.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Waste Treatment Systems</h5>
                        <p>Employed in treatment tanks and pipework in contact with chemical-laden wastewater.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Pharmaceutical and Food Sectors</h5>
                        <p>Used in corrosive environments requiring high-purity and hygienic performance.</p>
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
            <p class="text-center pb-3 my-4"><strong class="text-dark">HASTELLOY G-3's</strong> with its broad-spectrum
                corrosion resistance and excellent mechanical strength, HASTELLOY G-3 delivers long-term performance in
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
                        <h5>Trusted supplier of high-performance nickel and specialty alloys</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Large inventory with flexible sizes and global shipping</h5>
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
                        <h5>Adherence to ASTM, ASME, and international quality standards</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Responsive customer service and expert technical assistance</h5>
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
                                <h4>What is Hastelloy G-3 and why is it important in industrial applications?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Hastelloy G-3 (UNS N06985) is a nickel-chromium-iron alloy with additions of molybdenum
                                    and copper, engineered to resist a broad spectrum of oxidizing and reducing chemicals.
                                    It offers excellent resistance to sulfuric acid, nitric acid, phosphoric acid, and
                                    hydrochloric acid, making it an ideal material for industries that deal with aggressive
                                    chemical environments and require long-term performance.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the key properties of Hastelloy G-3 alloy?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Hastelloy G-3 provides outstanding corrosion resistance in both oxidizing and reducing
                                    acids while maintaining strength after welding and high heat exposure. It resists
                                    intergranular corrosion, has reduced sensitivity to weld cracking, and offers superior
                                    mechanical stability with a tensile strength of 95,000 psi and yield strength of 43,000
                                    psi. Its density of 8.22 g/cm³ and excellent formability make it highly adaptable in
                                    demanding industries.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Which industries commonly use Hastelloy G-3 products?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Hastelloy G-3 is widely used in the chemical processing industry for tanks, piping,
                                    valves, and heat exchangers exposed to mixed acids. It is also applied in pollution
                                    control systems such as scrubbers and stack liners, fertilizer production, pickling
                                    plants, acid regeneration units, wastewater treatment, and sectors like pharmaceuticals
                                    and food processing where both hygiene and chemical resistance are essential.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What types of Hastelloy G-3 products are supplied by MOKSH TUBES & FITTINGS LLP?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP offers a complete range of Hastelloy G-3 products including
                                    seamless and welded pipes, tubes, sheets, plates, coils, flanges, fittings, fasteners,
                                    round bars, wire mesh, welding rods, and custom-fabricated components. All products are
                                    manufactured under strict quality standards to ensure performance, durability, and
                                    compliance with international specifications.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose MOKSH TUBES & FITTINGS LLP for Hastelloy G-3 materials?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP is a trusted manufacturer, supplier, exporter, and stockist
                                    of Alloy G-3, known for its strong vendor network, large inventory, and global shipping
                                    capabilities. With adherence to ASTM and ASME standards, precision fabrication, and
                                    expert customer support, the company ensures reliable supply of high performance
                                    Hastelloy G-3 products for clients worldwide.
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
                    <strong>Moksh Tubes & Fittings LLP</strong> for pricing, availability, or technical queries related to
                    <strong>HASTELLOY G-3</strong> your dependable partner for corrosion-resistant alloy solutions built to
                    last in the harshest industrial conditions.
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
      "name": "What is Hastelloy G-3 and why is it important in industrial applications?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Hastelloy G-3 (UNS N06985) is a nickel-chromium-iron alloy with additions of molybdenum and copper, engineered to resist a broad spectrum of oxidizing and reducing chemicals. It offers excellent resistance to sulfuric acid, nitric acid, phosphoric acid, and hydrochloric acid, making it an ideal material for industries that deal with aggressive chemical environments and require long-term performance."
      }
    },
    {
      "@type": "Question",
      "name": "What are the key properties of Hastelloy G-3 alloy?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Hastelloy G-3 provides outstanding corrosion resistance in both oxidizing and reducing acids while maintaining strength after welding and high heat exposure. It resists intergranular corrosion, has reduced sensitivity to weld cracking, and offers superior mechanical stability with a tensile strength of 95,000 psi and yield strength of 43,000 psi. Its density of 8.22 g/cm³ and excellent formability make it highly adaptable in demanding industries."
      }
    },
    {
      "@type": "Question",
      "name": "Which industries commonly use Hastelloy G-3 products?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Hastelloy G-3 is widely used in the chemical processing industry for tanks, piping, valves, and heat exchangers exposed to mixed acids. It is also applied in pollution control systems such as scrubbers and stack liners, fertilizer production, pickling plants, acid regeneration units, wastewater treatment, and sectors like pharmaceuticals and food processing where both hygiene and chemical resistance are essential."
      }
    },
    {
      "@type": "Question",
      "name": "What types of Hastelloy G-3 products are supplied by MOKSH TUBES & FITTINGS LLP?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "MOKSH TUBES & FITTINGS LLP offers a complete range of Hastelloy G-3 products including seamless and welded pipes, tubes, sheets, plates, coils, flanges, fittings, fasteners, round bars, wire mesh, welding rods, and custom-fabricated components. All products are manufactured under strict quality standards to ensure performance, durability, and compliance with international specifications."
      }
    },
    {
      "@type": "Question",
      "name": "Why choose MOKSH TUBES & FITTINGS LLP for Hastelloy G-3 materials?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "MOKSH TUBES & FITTINGS LLP is a trusted manufacturer, supplier, exporter, and stockist of Alloy G-3, known for its strong vendor network, large inventory, and global shipping capabilities. With adherence to ASTM and ASME standards, precision fabrication, and expert customer support, the company ensures reliable supply of high performance Hastelloy G-3 products for clients worldwide."
      }
    }
  ]
}
@endverbatim
</script>
@endsection
