@extends('layouts.master')

@section('title', 'EN47 Spring Steel | High Strength Elastic Alloy Steel')
@section('meta_description', 'EN47 Spring Steel with excellent elasticity and tensile strength ideal for precision spring manufacturing.')
@section('meta_keywords', 'EN47 Spring Steel, high strength spring steel, elastic steel, tensile strength steel, spring manufacturing steel, industrial spring steel')
@section('og_image', asset('assets/images/engineering-steels/engineering-steels-en47.webp'))
@section('og_type', 'article')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/engineering-steels/engineering-steels-en47.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>High Strength EN47 Spring Steel<br>Medium Carbon Steel
</h1>

 <!-- Add your extra content here -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        EN47 Engineering Steel (EN 47 / C47) is a medium carbon steel grade known for high strength, good wear resistance, and excellent machinability. Below is the complete datasheet including composition, properties, heat treatment, and applications.
                    </p>


                    <!-- End extra content -->
                </div>
            </div>
        </div>
    </section>
<!--End breadcrumb area-->


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
</style>
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

    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Product Overview</h2>
            </div>

            <h2 class="fw-semibold text-center mb-5" style="color: #db7227;">
                Introduction To Engineering Steel 47
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/engineering-steels/engineering-steels-en47.webp') }}" alt="EN47"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a manufacturer, supplier,
                            exporter, importer, and stockist of<strong class="text-black"> EN 47 steel products</strong>
                            such as bars, shafts, rods, and
                            components for engineering applications.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">EN 47</strong class="text-black">, is a high carbon chromium alloy
                            steel known for its excellent hardness, wear resistance, and high tensile strength after heat
                            treatment. It is commonly used for manufacturing springs, gears, and other mechanical components
                            requiring high fatigue strength and resistance to wear and tear.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

      <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Engineering Steels 47 Datasheet</h3>
            <p class="mb-3">
                Get the complete Engineering Steels 47 datasheet with chemical composition,
                mechanical properties, heat treatment details, and applications.
                Enter your email to receive the PDF instantly.
            </p>

            <!-- Lead Capture Form -->
            <form id="leadForm" method="POST" action="{{ route('lead.capture') }}" class="mb-3">
                @csrf
                <div class="row justify-content-center">
                    <input type="hidden" name="pdf" value="en_47.pdf">
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

                                <th>Element</th>
                                <th>Composition (%)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">

                                <td>Carbon</td>
                                <td>0.45 – 0.53</td>
                                </tr>

                                <td>Silicon</td>
                                <td>0.17 – 0.37</td>
                                </tr>

                                <td>Manganese</td>
                                <td>0.50 – 0.80</td>
                                </tr>

                                <td>Chromium</td>
                                <td>0.80 – 1.10</td>
                                </tr>
                                {{--
                                    <td>Molybdenum</td>
                                    <td>0.15 – 0.30</td>
                                </tr> --}}

                                <td>Sulfur</td>
                                <td>≤ 0.035</td>
                                </tr>

                                <td>Phosphorus</td>
                                <td>≤ 0.035</td>
                                </tr>
                                {{--
                                    <td>Nickel</td>
                                    <td>1.30 – 1.70</td>
                                </tr> --}}
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
                                <td>2480 – 2550 °F</td>
                                <td>1358 – 1400 °C</td>
                                </tr>

                                <td>Modulus of Elasticity (Tension)</td>
                                <td>29,000 ksi</td>
                                <td>200 GPa</td>
                                </tr>

                                <td>Modulus of Elasticity (Torsion)</td>
                                <td>11,600 ksi</td>
                                <td>80 GPa</td>
                                </tr>

                                <td>Poisson’s Ratio</td>
                                <td>0.29</td>
                                <td>—</td>
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
                                <td>85–105 ksi / 586–724 MPa</td>
                                <td>90–120 ksi / 620–827 MPa</td>
                                <td>95–135 ksi / 655–931 MPa</td>
                                <td>85–110 ksi / 586–758 MPa</td>
                                <td>—</td>
                                </tr>

                                <td>Yield Strength (0.2%)</td>
                                <td>50–65 ksi / 345–448 MPa</td>
                                <td>60–100 ksi / 414–690 MPa</td>
                                <td>65–110 ksi / 448–758 MPa</td>
                                <td>50–75 ksi / 345–517 MPa</td>
                                <td>—</td>
                                </tr>

                                <td>Elongation (%)</td>
                                <td>20–25</td>
                                <td>15–25</td>
                                <td>12–18</td>
                                <td>18–25</td>
                                <td>—</td>
                                </tr>

                                <td>Brinell Hardness (3000 kg)</td>
                                <td>150–200</td>
                                <td>180–250</td>
                                <td>200–270</td>
                                <td>150–210</td>
                                <td>—</td>
                                </tr>

                                <td>Rockwell Hardness (B / C)</td>
                                <td>80–90 B</td>
                                <td>85–95 B</td>
                                <td>90–95 B / 20–30 C</td>
                                <td>80–90 B</td>
                                <td>—</td>
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
                <h2>Products in Engineering Steel 47</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Engineering Steel 47</strong> is typically available in:
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
                        Engineering Steel 47 products are produced to the following global standards:
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
                        <h5>High hardness and tensile strength after heat treatment</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Excellent wear resistance</h5>
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
                        <h5>Suitable for dynamic and heavy-load applications</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Consistent quality and machinability</h5>
                    </div>
                </div>
            </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Engineering Steel 47</h2>
                <p class="text-center pb-3"><strong class="text-dark">Engineering Steel 47</strong> is widely used for
                    applications requiring high wear resistance and fatigue strength:</p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Spring Manufacturing</h5>
                        <p>Used extensively for making leaf springs, coil springs, and other spring types.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Automotive Components</h5>
                        <p>Gears, shafts, and transmission components that require durability.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Mechanical Engineering</h5>
                        <p>Heavy-duty machine parts subjected to cyclic loading and wear.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Tool Making</h5>
                        <p>Components requiring high hardness and wear resistance.</p>
                    </div>
                </div>

                {{-- <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Tool Manufacturing</h5>
                        <p>Used in making dies and heavy-duty tools requiring durability.</p>
                    </div>
                </div> --}}

                {{-- <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Oil & Gase</h5>
                        <p>Tool joints, pump shafts, downhole components</p>
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
                        <h5>Experienced supplier of premium quality EN47 steel</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Customized size and specifications as per client needs</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Global sourcing and efficient supply chain</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Commitment to product excellence and customer satisfaction</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Professional technical assistance and after-sales support</h5>
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
                                <h4>What is EN47 steel used for?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    EN47 steel is widely used for manufacturing springs, gears, shafts, automotive
                                    components, and heavy duty machinery parts requiring high wear resistance and fatigue
                                    strength.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the key properties of EN47 steel?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    EN47 steel offers excellent hardness, wear resistance, high tensile strength, and
                                    fatigue resistance, making it ideal for dynamic and heavy-load applications.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>In what forms is EN47 steel available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    EN47 steel is available in bars, rods, sheets, plates, pipes, tubes, flanges, fasteners,
                                    and custom fabricated components to meet diverse engineering requirements.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Is EN47 steel heat treated?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Yes, EN47 steel is typically heat-treated to achieve high hardness, wear resistance, and
                                    optimal mechanical properties for demanding applications.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose MOKSH TUBES & FITTINGS LLP for EN47 steel?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    We offer premium quality EN47 steel, customized sizes, global sourcing, strict quality
                                    control, timely delivery, and expert technical support, ensuring reliable and
                                    high-performance solutions.
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
                    For quotations and inquiries about EN47 steel bars, springs, and components, contact<strong> Moksh Tubes
                        & Fittings LLP
                    </strong> — your trusted partner for alloy steels.
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
                "name": "What is EN47 steel used for?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "EN47 steel is widely used for manufacturing springs, gears, shafts, automotive components, and heavy duty machinery parts requiring high wear resistance and fatigue strength."
                }
                },
                {
                "@type": "Question",
                "name": "What are the key properties of EN47 steel?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "EN47 steel offers excellent hardness, wear resistance, high tensile strength, and fatigue resistance, making it ideal for dynamic and heavy-load applications."
                }
                },
                {
                "@type": "Question",
                "name": "In what forms is EN47 steel available?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "EN47 steel is available in bars, rods, sheets, plates, pipes, tubes, flanges, fasteners, and custom fabricated components to meet diverse engineering requirements."
                }
                },
                {
                "@type": "Question",
                "name": "Is EN47 steel heat treated?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, EN47 steel is typically heat-treated to achieve high hardness, wear resistance, and optimal mechanical properties for demanding applications."
                }
                },
                {
                "@type": "Question",
                "name": "Why choose MOKSH TUBES & FITTINGS LLP for EN47 steel?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We offer premium quality EN47 steel, customized sizes, global sourcing, strict quality control, timely delivery, and expert technical support, ensuring reliable and high-performance solutions."
                }
                }
            ]
            }

        @endverbatim
    </script>
@endsection
