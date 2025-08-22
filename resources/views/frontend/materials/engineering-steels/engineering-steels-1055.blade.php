@extends('layouts.master')

@section('title', '1055 Engineering Steel | Medium Carbon Steel')
@section('meta_description', '1055 Engineering Steel ideal for manufacturing components requiring medium carbon content
    and durability.')
@section('meta_keywords', '1055 Engineering Steel, medium carbon steel, durable steel, mechanical steel, industrial
    steel, high strength steel, steel for components')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Engineering Steel 1055</h1>
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
                Introduction To EN 1055 / C1055 Steel
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/engineering-steels/engineering-steels-1055.webp') }}" alt="EN-1055"
                        class="img-fluid rounded shadow-sm">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a manufacturer, supplier,
                            exporter, importer, and stockist of<strong class="text-black"> EN 1055 steel products</strong>
                            such as bars, plates,<a href="{{ route('products.pipes-tubes') }}"> tubes</a>, and fittings.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">EN 1055</strong class="text-black">, also known as C1055 or SAE 1055,
                            is a medium carbon steel grade characterized by higher carbon content than typical medium carbon
                            steels. It offers higher hardness and strength, suitable for applications requiring good wear
                            resistance and toughness.<a href="{{ route('materials.engineering-Steels') }}"> EN 1055
                                steel</a> is commonly used in structural and mechanical components
                            that require strength and moderate ductility.
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

                                <th>Element</th>
                                <th>Composition (%)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">

                                <td>Carbon</td>
                                <td>0.52 – 0.60</td>
                                </tr>

                                <td>Manganese</td>
                                <td>0.60 – 0.90</td>
                                </tr>

                                <td>Phosphorus </td>
                                <td>≤ 0.040</td>
                                </tr>

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
                    <h4 class="text-center mb-3" style="color: #db7227;">Physical Properties</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">

                                <th>Property</th>
                                <th>Imperial</th>
                                <th>Metric</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">

                                <td>Density</td>
                                <td>0.284 lb/in³</td>
                                <td>7.85 g/cm³</td>
                                </tr>

                                <td>Melting Point</td>
                                <td>2500 – 2550 °F</td>
                                <td>1370 – 1400 °C</td>
                                </tr>

                                <td>Modulus of Elasticity(Tension)</td>
                                <td>29,000 ksi</td>
                                <td>200 GPa</td>
                                </tr>

                                <td>Modulus of Elasticity(Torsion)</td>
                                <td>11,600 ksi</td>
                                <td>80 GPa</td>
                                </tr>

                                <td>Poisson's Ratio</td>
                                <td>0.29</td>
                                <td>-</td>
                                </tr>

                                <td>Thermal Conductivity</td>
                                <td>44 W/m·K</td>
                                <td>44 W/m·K</td>
                                </tr>

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

                                <th>Property</th>
                                <th>Annealed</th>
                                <th>Hot-Finished</th>
                                <th>Cold Drawn</th>
                                <th>Hot-rolled</th>
                                <th>Sheet</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">

                                <td>Tensile Strength (ksi / MPa)</td>
                                <td>75–95 ksi / 517–655 MPa</td>
                                <td>80–110 ksi / 552–758 MPa</td>
                                <td>90–120 ksi / 620–827 MPa</td>
                                <td>75–95 ksi / 517–655 MPa</td>
                                <td>70–90 ksi / 482–620 MPa</td>
                                </tr>

                                <td>Yield Strength (0.2%)</td>
                                <td>40–55 ksi / 276–379 MPa</td>
                                <td>45–85 ksi / 310–586 MPa</td>
                                <td>55–85 ksi / 379–586 MPa</td>
                                <td>40–60 ksi / 276–414 MPa</td>
                                <td>35–50 ksi / 241–345 MPa</td>
                                </tr>

                                <td>Elongation (%)</td>
                                <td>18–25</td>
                                <td>15–22</td>
                                <td>12–20</td>
                                <td>20–30</td>
                                <td>20–25</td>
                                </tr>

                                <td>Brinell Hardness (3000 kg)</td>
                                <td>130–190</td>
                                <td>160–220</td>
                                <td>160–210</td>
                                <td>130–190</td>
                                <td>—</td>
                                </tr>

                                <td>Rockwell Hardness (B / C)</td>
                                <td>75–85 B</td>
                                <td>85–95 B</td>
                                <td>85–95 B</td>
                                <td>75–85 B</td>
                                <td>75–85 B</td>
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
                <h2>Products in Engineering Steel 1055</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Engineering Steel 1055</strong> is typically available in:
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
                        Engineering Steel 1055 products are produced to the following global standards:
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
                        <h5>Higher hardness and tensile strength compared to lower carbon steels</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Good wear resistance and toughness</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Good machinability and weldability with proper heat treatment</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Suitable for parts requiring strength and moderate ductility</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Engineering Steel 1055</h2>
                <p class="text-center pb-3"><strong class="text-dark">Engineering Steel 1055</strong> is widely used in:
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Automotive and Machinery</h5>
                        <p>Shafts, gears, crankshafts, bolts, and studs requiring higher strength and wear resistance.</p>
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
                                <h4>What is EN 1055 steel and what are its main characteristics?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    EN 1055, also known as C1055 or SAE 1055, is a medium carbon steel grade with higher
                                    carbon content compared to standard medium carbon steels.
                                    It offers superior hardness, strength, and wear resistance, making it ideal for
                                    applications that demand toughness and durability.
                                    With a good balance of mechanical properties, EN 1055 is widely used in structural and
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
                                    EN 1055 steel has a density of 7.85 g/cm³ and a melting point range of 1370–1400 °C.
                                    Its tensile strength varies between 517–827 MPa depending on the product condition,
                                    while yield strength ranges from 241–586 MPa.
                                    It also exhibits elongation values between 12–30%, Brinell hardness of 130–220, and
                                    Rockwell hardness between 75–95 B.
                                    These properties make EN 1055 suitable for heavy-duty engineering and industrial use.
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
                                    MOKSH TUBES & FITTINGS LLP manufactures, supplies, and exports a complete range of EN
                                    1055 steel products including seamless and welded pipes, tubes, sheets, plates, coils,
                                    strips, bars,
                                    pipe fittings, flanges, fasteners, and custom-fabricated components.
                                    All products are manufactured according to global quality standards and can be
                                    customized in terms of dimensions, specifications, and heat treatment to meet specific
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
                                    EN 1055 steel is extensively used in the automotive and machinery industries for the
                                    production of shafts, gears, crankshafts, bolts, and studs that require high strength
                                    and wear resistance.
                                    In structural engineering, it is applied in heavy-duty parts exposed to mechanical
                                    stress.
                                    It is also widely utilized in manufacturing for tools, dies, and machine components
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
                                    MOKSH TUBES & FITTINGS LLP is a trusted manufacturer and global supplier of EN 1055
                                    steel, offering premium quality materials sourced from reliable mills.
                                    The company provides custom sizes, heat treatment options, and technical support to meet
                                    project-specific requirements.
                                    With strong logistics for timely worldwide delivery and a commitment to quality and
                                    customer satisfaction,
                                    MOKSH TUBES & FITTINGS LLP ensures dependable steel solutions for diverse industries.
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
                    For inquiries or to request a quote for EN 1055 steel products, contact <strong> Moksh Tubes & Fittings
                        LLP </strong> — your dependable partner for medium carbon steel solutions.
                </p>
                <!-- Call button -->
                <a href="tel:+919769584950" class="contact-cta-btn">Get in Touch</a>
            </div>
        </div>
    </section>





@endsection
