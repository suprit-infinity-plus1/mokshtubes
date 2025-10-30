@extends('layouts.master')

@section('title', '4130 Alloy Steel | Chromium-Molybdenum Steel')
@section('meta_description', '4130 Alloy Steel offering high strength, toughness, and weldability for aerospace, automotive, and industrial applications.')
@section('meta_keywords', '4130 Alloy Steel, chromium-molybdenum steel, high strength steel, tough steel, weldable steel, aerospace steel, automotive steel, industrial alloy steel')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>4130 Alloy Steel <br> Chromium-Molybdenum Steel</h1>
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
                Introduction To Engineering Steel 4130 / AISI 4130 Steel
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/engineering-steels/engineering-steels-4130.webp') }}" alt="EN 4130"
                        class="img-fluid rounded shadow-sm">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a manufacturer, supplier,
                            exporter, importer, and stockist of<strong class="text-black"> EN 4130 steel products</strong>
                            including pipes,<a href="{{ route('products.pipes-tubes') }}"> tubes</a>, bars, plates,
                            and fittings.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">EN 4130</strong class="text-black">, also known as AISI 4130, is a
                            low-alloy steel containing chromium and molybdenum as key alloying elements. It is well-known
                            for its excellent strength, toughness, and good weldability.<a
                                href="{{ route('materials.engineering-Steels') }}"> EN 4130</a> is widely used in
                            structural and mechanical applications where high strength-to-weight ratio and good fatigue
                            resistance are essential. This steel is also easily heat-treated to improve mechanical
                            properties, making it ideal for aerospace, automotive, and oil and gas industries.
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
                                    <td>0.28 – 0.33</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese</td>
                                    <td>0.40 – 0.60</td>
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
                                    <td>0.283 lb/in³</td>
                                    <td>7.83 g/cm³</td>
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
                                    <td>85–105 ksi / 586–724 MPa</td>
                                    <td>90–115 ksi / 620–793 MPa</td>
                                    <td>95–130 ksi / 655–896 MPa</td>
                                    <td>85–110 ksi / 586–758 MPa</td>
                                    <td>80–105 ksi / 552–724 MPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (0.2%)</td>
                                    <td>55–70 ksi / 379–483 MPa</td>
                                    <td>60–95 ksi / 414–655 MPa</td>
                                    <td>65–105 ksi / 448–724 MPa</td>
                                    <td>55–80 ksi / 379–552 MPa</td>
                                    <td>50–75 ksi / 345–517 MPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elongation (%)</td>
                                    <td>20–30</td>
                                    <td>15–25</td>
                                    <td>15–20</td>
                                    <td>20–25</td>
                                    <td>20–30</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Brinell Hardness (3000 kg)</td>
                                    <td>150–200</td>
                                    <td>180–240</td>
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
                <h2>Products in Engineering Steel 4130</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Engineering Steel 4130</strong> is typically available in:
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
                        Engineering Steel 4130 products are produced to the following global standards:
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
                        <h5>Excellent strength-to-weight ratio</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Good weldability and machinability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>High fatigue resistance and toughness</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>meCan be heat-treated for enhanced mechanical properties</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Engineering Steel 4130</h2>
                <p class="text-center pb-3"><strong class="text-dark">Engineering Steel 4130</strong> is widely used in:
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Aerospace & Aviation</h5>
                        <p>Aircraft structural components, engine mounts, and landing gear parts.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Automotive & Motorsport</h5>
                        <p>Roll cages, chassis, suspension parts, and drive shafts requiring strength and fatigue
                            resistance.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Oil & Gas Industry</h5>
                        <p>Pipelines, tubing, and equipment subjected to high pressure and harsh environments.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Mechanical Engineering</h5>
                        <p>High-strength machinery components, gears, bolts, and shafts.</p>
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
                        <h5>Trusted supplier of premium EN 4130 steel products</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Wide inventory of customized sizes and specifications</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Expertise in alloy steel manufacturing and distribution</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Timely global delivery and competitive pricing</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Dedicated customer support and technical assistance</h5>
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
                                <h4>What is EN 4130 steel and why is it widely used?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    EN 4130, also known as AISI 4130, is a low-alloy steel containing chromium and
                                    molybdenum, which provide excellent strength, toughness, and weldability.
                                    It is valued for its high strength-to-weight ratio and fatigue resistance, making it
                                    suitable for demanding structural and mechanical applications.
                                    Due to its ability to be heat-treated for enhanced mechanical properties, EN 4130 is
                                    extensively used in aerospace, automotive, and oil & gas industries.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the chemical and mechanical properties of EN 4130 steel?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    EN 4130 steel has a chemical composition that includes carbon (0.28–0.33%), manganese
                                    (0.40–0.60%), chromium (0.80–1.10%), and molybdenum (0.15–0.25%),
                                    along with small amounts of silicon, phosphorus, and sulfur.
                                    Mechanically, it offers tensile strength between 552–896 MPa and yield strength between
                                    345–724 MPa, depending on the product form and heat treatment.
                                    With elongation up to 30% and hardness ranging from 150–260 Brinell, EN 4130 is strong,
                                    ductile, and highly versatile.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What EN 4130 steel products are offered by MOKSH TUBES & FITTINGS LLP?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP supplies a complete range of EN 4130 steel products including
                                    seamless and welded pipes, tubes, sheets, plates, coils, strips, bars,
                                    pipe fittings, flanges, fasteners, and custom-fabricated components.
                                    All products are manufactured to international standards and can be customized in terms
                                    of dimensions, thickness, and heat treatment to meet specific industry requirements.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the key applications of EN 4130 steel?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    EN 4130 steel is widely used in aerospace and aviation for manufacturing aircraft
                                    components, engine mounts, and landing gear parts.
                                    In the automotive and motorsport industry, it is used for roll cages, chassis, drive
                                    shafts, and suspension parts that require strength and fatigue resistance.
                                    It is also extensively used in the oil & gas industry for pipelines, high-pressure
                                    tubing, and equipment exposed to extreme environments,
                                    as well as in mechanical engineering for gears, bolts, and machinery components.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose MOKSH TUBES & FITTINGS LLP for EN 4130 steel materials?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP is a trusted supplier of high-quality EN 4130 steel products
                                    with a wide inventory and the ability to provide customized solutions.
                                    The company has strong expertise in alloy steel manufacturing and ensures compliance
                                    with international standards.
                                    With global supply capabilities, timely deliveries, competitive pricing, and dedicated
                                    customer support,
                                    MOKSH TUBES & FITTINGS LLP is a reliable partner for industries requiring durable and
                                    high-performance EN 4130 steel materials.
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
                    For inquiries or quotations on EN 4130 steel products, contact <strong> Moksh Tubes & Fittings
                        LLP </strong> — your reliable partner for chromium-molybdenum alloy steels.
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
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is EN 4130 steel and why is it widely used?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "EN 4130, also known as AISI 4130, is a low-alloy steel containing chromium and molybdenum, which provide excellent strength, toughness, and weldability. It has a high strength-to-weight ratio and fatigue resistance, making it suitable for demanding structural and mechanical applications in aerospace, automotive, and oil & gas industries."
      }
    },
    {
      "@type": "Question",
      "name": "What are the chemical and mechanical properties of EN 4130 steel?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "EN 4130 steel contains carbon (0.28–0.33%), manganese (0.40–0.60%), chromium (0.80–1.10%), and molybdenum (0.15–0.25%), with small amounts of silicon, phosphorus, and sulfur. It offers tensile strength between 552–896 MPa and yield strength between 345–724 MPa, depending on heat treatment, with elongation up to 30% and hardness from 150–260 Brinell."
      }
    },
    {
      "@type": "Question",
      "name": "What EN 4130 steel products are offered by MOKSH TUBES & FITTINGS LLP?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "MOKSH TUBES & FITTINGS LLP provides seamless and welded pipes, tubes, sheets, plates, coils, strips, bars, pipe fittings, flanges, fasteners, and custom-fabricated EN 4130 steel components. All are made to international standards and customizable in dimensions, thickness, and heat treatment."
      }
    },
    {
      "@type": "Question",
      "name": "What are the key applications of EN 4130 steel?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "EN 4130 steel is used in aerospace for aircraft components and landing gear, in automotive and motorsport for chassis, roll cages, and drive shafts, and in oil & gas for pipelines and high-pressure equipment. It’s also applied in mechanical engineering for gears, bolts, and machinery components."
      }
    },
    {
      "@type": "Question",
      "name": "Why choose MOKSH TUBES & FITTINGS LLP for EN 4130 steel materials?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "MOKSH TUBES & FITTINGS LLP is a trusted supplier of EN 4130 steel with a wide product range, customization options, and global supply capability. The company ensures compliance with international standards, offers competitive pricing, timely delivery, and strong customer support."
      }
    }
  ]
}
</script>
@endsection
