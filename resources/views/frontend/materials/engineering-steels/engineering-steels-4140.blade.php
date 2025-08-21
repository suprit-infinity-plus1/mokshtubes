@extends('layouts.master')

@section('title', '4140 Alloy Steel | Versatile Alloy Steel')
@section('meta_description', '4140 Alloy Steel offers a balance of strength, hardness, and wear resistance for diverse
    engineering needs.')
@section('meta_keywords', '4140 Alloy Steel, versatile alloy steel, high strength steel, wear resistant steel,
    hardenable steel, industrial alloy steel, engineering steel')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Engineering Steel 4140</h1>
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
                Introduction To Engineering Steel 4140 / AISI 4140 Steel
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/engineering-steels/engineering-steels-4140.webp') }}" alt="EN 4140"
                        class="img-fluid rounded shadow-sm">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a trusted manufacturer,
                            supplier, exporter, importer, and stockist of<strong class="text-black"> EN 4140 steel
                                products</strong> including<a href="{{ route('products.pipes-tubes') }}"> pipes</a>, tubes,
                            bars, plates, and fittings.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">EN 4140</strong class="text-black">, is a chromium-molybdenum
                            low-alloy steel renowned for its high tensile strength, toughness, and excellent wear
                            resistance. It is highly versatile and widely used in engineering and structural applications.
                            <a href="{{ route('materials.engineering-Steels') }}"> EN 4140</a> can be heat-treated to
                            achieve a wide range of mechanical properties, making it ideal
                            for applications requiring fatigue resistance and high stress endurance, such as in automotive,
                            oil & gas, and heavy machinery industries.
                        </p>
                    </div>
                </div>
            </div>
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
                                    <td>Carbon</td>
                                    <td>0.38 – 0.43</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese</td>
                                    <td>0.38 – 0.43</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Phosphorus</td>
                                    <td>≤ 0.035</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sulfur</td>
                                    <td>≤ 0.040</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium</td>
                                    <td>0.80 – 1.10</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Molybdenum</td>
                                    <td>0.15 – 0.25</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon</td>
                                    <td>0.15 – 0.35</td>
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
                                    <td>42 W/m·K</td>
                                    <td>42 W/m·K</td>
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
                                    <th>Hot-Finished</th>
                                    <th>Cold Drawn</th>
                                    <th>Hot-rolled</th>
                                    <th>Sheet</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Tensile Strength (ksi / MPa)</td>
                                    <td>90–105 ksi / 620–724 MPa</td>
                                    <td>95–120 ksi / 655–827 MPa</td>
                                    <td>100–130 ksi / 690–896 MPa</td>
                                    <td>90–110 ksi / 620–758 MPa</td>
                                    <td>85–105 ksi / 586–724 MPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (0.2%)</td>
                                    <td>60–75 ksi / 414–517 MPa</td>
                                    <td>70–110 ksi / 482–758 MPa</td>
                                    <td>75–120 ksi / 517–827 MPa</td>
                                    <td>60–85 ksi / 414–586 MPa</td>
                                    <td>55–75 ksi / 379–517 MPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elongation (%)</td>
                                    <td>20–30</td>
                                    <td>15–25</td>
                                    <td>12–20</td>
                                    <td>20–30</td>
                                    <td>20–25</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Brinell Hardness (3000 kg)</td>
                                    <td>150–200</td>
                                    <td>180–250</td>
                                    <td>200–260</td>
                                    <td>150–210</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Rockwell Hardness (B / C)</td>
                                    <td>80–90 B</td>
                                    <td>85–95 B</td>
                                    <td>85–95 B</td>
                                    <td>80–90 B</td>
                                    <td>80–90 B</td>
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
                'route' => 'products.pipes-tubes.u-bent-tubes',
                'image' => 'assets/images/all product/sheets-plates.jpg',
            ],
            [
                'name' => 'Coils & Strips',
                'route' => 'products.pipes-tubes.u-bent-tubes',
                'image' => 'assets/images/aluminium-alloys/aluminium-alloys-5083.webp',
            ],
            [
                'name' => 'Round Bars, Flat Bars, Hex Bars, Square Bars',
                'route' => 'products.pipes-tubes.u-bent-tubes',
                'image' => 'assets/images/aluminium-alloys/aluminium-alloys-6063.webp',
            ],
            [
                'name' => 'Pipe Fittings (Elbows, Tees, Reducers, Caps, Stub Ends)',
                'route' => 'products.pipes-tubes.u-bent-tubes',
                'image' => 'assets/images/aluminium-alloys/aluminium-alloys-6012.webp',
            ],
            [
                'name' => 'Flanges (Weld Neck, Slip-On, Blind, Socket Weld, Threaded)',
                'route' => 'products.pipes-tubes.u-bent-tubes',
                'image' => 'assets/images/engineering-steels/engineering-steels-4130.webp',
            ],
            [
                'name' => 'Fasteners (Bolts, Nuts, Screws, Washers, Studs)',
                'route' => 'products.pipes-tubes.u-bent-tubes',
                'image' => 'assets/images/all product/FASTENERS-1.png',
            ],
            [
                'name' => 'Custom Fabricated Components',
                'route' => 'products.pipes-tubes.u-bent-tubes',
                'image' => 'assets/images/all product/custom-metal-fabricated.jpg',
            ],
        ];
    @endphp

    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Products in Engineering Steel 4140</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Engineering Steel 4140</strong> is typically available in:
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
                        Engineering Steel 4140 products are produced to the following global standards:
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
                        <h5>High strength and toughness</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Excellent wear and abrasion resistance</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Good fatigue strength</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Excellent hardenability and heat treatment response</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Engineering Steel 4140</h2>
                <p class="text-center pb-3"><strong class="text-dark">Engineering Steel 4140</strong> is extensively used
                    in:
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Automotive & Motorsport</h5>
                        <p>Axles, crankshafts, gears, and connecting rods requiring high strength and fatigue resistance.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Oil & Gas Industry</h5>
                        <p>High-pressure piping, tubing, and drilling equipment exposed to harsh environments.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Mechanical Engineering</h5>
                        <p>Shafts, bolts, heavy-duty machinery parts, and structural components.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Aerospace Industry</h5>
                        <p>Components requiring high tensile strength and toughness under dynamic loads.</p>
                    </div>
                </div>

                {{-- <div class="col-md-6 col-lg-4">
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


    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container text-center">
            <div class="section-title center">
                <h2>WHY CHOOSE US?</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-award-fill"></i></div>
                        <h5>Comprehensive stock of EN 4140 products in various forms</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Customized cutting and processing services</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Expert technical support on material selection and application</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Reliable and timely deliveries worldwide</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Competitive pricing and customer satisfaction guaranteed</h5>
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
                                <h4>What is EN 4140 steel and what are its main features?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    EN 4140 is a chromium-molybdenum low-alloy steel well-known for its high tensile
                                    strength, toughness, and superior wear resistance.
                                    It is a highly versatile engineering material that can be heat-treated to achieve a wide
                                    range of mechanical properties.
                                    Because of its excellent fatigue resistance and ability to perform under high stress, EN
                                    4140 is widely used in automotive, oil and gas, aerospace, and heavy machinery
                                    industries.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the chemical and mechanical properties of EN 4140 steel?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    EN 4140 steel contains 0.38–0.43% carbon, 0.80–1.10% chromium, and 0.15–0.25%
                                    molybdenum, along with manganese, silicon, phosphorus, and sulfur in controlled amounts.
                                    Its tensile strength ranges from 586–896 MPa and yield strength from 379–827 MPa,
                                    depending on the condition and heat treatment.
                                    It has elongation values up to 30%, Brinell hardness between 150–260, and Rockwell
                                    hardness of 80–95 B.
                                    These properties make EN 4140 a strong, tough, and durable alloy steel suitable for
                                    high-performance engineering applications.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What EN 4140 steel products are supplied by MOKSH TUBES & FITTINGS LLP?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP manufactures and supplies a complete range of EN 4140 steel
                                    products including seamless and welded pipes, tubes, sheets, plates, coils, strips,
                                    bars,
                                    pipe fittings, flanges, fasteners, and custom-fabricated components.
                                    All products are manufactured to international standards and are available in customized
                                    sizes, dimensions, and heat treatments to suit diverse industrial needs.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the common applications of EN 4140 steel?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    EN 4140 steel is extensively used in the automotive industry for axles, crankshafts,
                                    gears, and connecting rods that demand high strength and fatigue resistance.
                                    In the oil and gas sector, it is applied in pipelines, drilling equipment, and
                                    high-pressure tubing exposed to extreme environments.
                                    It is also widely used in aerospace for components requiring high tensile strength under
                                    dynamic loads,
                                    and in mechanical engineering for heavy-duty shafts, bolts, and machinery parts.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose MOKSH TUBES & FITTINGS LLP for EN 4140 steel materials?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP is a trusted supplier and exporter of EN 4140 steel with a
                                    comprehensive stock of products in multiple forms.
                                    The company provides customized cutting and processing services, technical support for
                                    material selection, and ensures reliable global deliveries.
                                    With competitive pricing, premium quality materials, and a strong focus on customer
                                    satisfaction,
                                    MOKSH TUBES & FITTINGS LLP is the preferred choice for industries requiring durable and
                                    high-performance EN 4140 steel solutions.
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
                    For detailed information or to request a quote for EN 4140 steel products, contact <strong> Moksh Tubes
                        & Fittings
                        LLP </strong> — your trusted partner for alloy steels.
                </p>
                <!-- Call button -->
                <a href="tel:+919769584950" class="contact-cta-btn">Get in Touch</a>
            </div>
        </div>
    </section>





@endsection
