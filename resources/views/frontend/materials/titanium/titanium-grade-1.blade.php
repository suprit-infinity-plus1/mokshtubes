@extends('layouts.master')

@section('title', 'Titanium Grade 1 – Pure Titanium Material & Uses') <!-- 52 chars -->
@section('meta_description', 'Titanium Grade 1 offers excellent corrosion resistance, ductility, and weldability—ideal
    for chemical, marine, and industrial applications.')
@section('meta_keywords', 'Titanium Grade 1, Commercially Pure Titanium, Corrosion Resistant Titanium, Titanium Grade 1
    Pipes, Titanium Grade 1 Tubes, Titanium Grade 1 Sheets, Marine Industry Titanium, Chemical Processing Titanium, Weldable
    Titanium Alloy, Industrial Titanium Grades')
@section('og_image', asset('assets/images/titanium/titanium-1.webp'))
@section('og_type', 'article')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/titanium/titanium-1.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Titanium Grade 1 <br> Corrosion Resistant & Weldable</h1>
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
                Introduction To Titanium Grade 1 / UNS R50250
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/titanium/titanium-1.webp') }}" alt="Titanium Grade 1"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> proudly manufactures, supplies,
                            exports, imports, and stocks a wide variety of<strong class="text-black"> Titanium Grade
                                1</strong> products, including <a href="{{ route('products.pipes-tubes') }}">Pipes &
                                Tubes</a>, Pipe Fittings, Flanges, Fasteners, Sheets & Plates, Coils, Wires, Round Bars,
                            Flat Bars,
                            Angles, Welding Rods, and other custom or hard-to-source components tailored to meet demanding
                            industry requirements.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">Titanium Grade 1</strong class="text-black"> is the most ductile and
                            softest among all commercially pure <a href="{{ route('materials.titanium') }}">titanium
                                grades</a>. It offers exceptional corrosion resistance,
                            outstanding formability, and superior weldability. As a result, it is widely used in industries
                            requiring lightweight, high-strength materials capable of withstanding extreme environments—such
                            as chemical processing, marine applications, aerospace, and medical sectors. Its superior
                            resistance to oxygenated and chlorinated media makes it particularly valuable in aggressive
                            service conditions.
                        </p>
                        <p class="fs-6" style="text-align: justify;">
                            The <strong>density of titanium metal</strong> is about 4.51 g/cm³, making it lighter yet
                            stronger
                            than many other engineering metals. Similarly, the <strong>titanium melting point</strong> is
                            1660 °C,
                            which ensures performance in high-temperature applications.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Titanium Grade 1 Datasheet</h3>
            <p class="mb-3">
                Get the complete Titanium Grade 1 datasheet with chemical composition,
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
    <!-- End Datasheet -->

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
                                    <td>Titanium</td>
                                    <td>Balance</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Oxygen</td>
                                    <td>≤ 0.18</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron</td>
                                    <td>≤ 0.20</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon</td>
                                    <td>≤ 0.08</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nitrogen</td>
                                    <td>≤ 0.03</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Hydrogen</td>
                                    <td>≤ 0.015</td>
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
                    <h4 class="text-center mb-3" style="color: #db7227;">Physical Properties of Titanium</h4>
                    <p class="text-center">
                        The <strong>density of titanium metal</strong> is about 4.51 g/cm³, making it lighter yet stronger
                        than many other engineering metals. Similarly, the <strong>titanium melting point</strong> is 1660
                        °C,
                        which ensures performance in high-temperature applications.
                    </p>
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
                                    <td>0.163 lb/in³</td>
                                    <td>4.51 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Point</td>
                                    <td>3020 °F</td>
                                    <td>1660 °C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Modulus of Elasticity</td>
                                    <td>15 x 10⁶ psi</td>
                                    <td>103 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Thermal Conductivity</td>
                                    <td>10.6 BTU/hr·ft·°F</td>
                                    <td>15.24 W/m·K</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Electrical Resistivity</td>
                                    <td>27.4 µΩ·in</td>
                                    <td>173 µΩ·cm</td>
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
                                    <th>Tubing (Annealed)</th>
                                    <th>Tubing (Cold Drawn)</th>
                                    <th>Bar (Annealed)</th>
                                    <th>Plate (Annealed)</th>
                                    <th>Sheet (Annealed)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Tensile Strength (ksi)</td>
                                    <td>35</td>
                                    <td>50</td>
                                    <td>35</td>
                                    <td>35</td>
                                    <td>35</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tensile Strength (MPa)</td>
                                    <td>240</td>
                                    <td>345</td>
                                    <td>240</td>
                                    <td>240</td>
                                    <td>240</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (0.2%) (ksi)</td>
                                    <td>25</td>
                                    <td>40</td>
                                    <td>25</td>
                                    <td>25</td>
                                    <td>25</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (MPa)</td>
                                    <td>170</td>
                                    <td>275</td>
                                    <td>170</td>
                                    <td>170</td>
                                    <td>170</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elongation (%)</td>
                                    <td>24</td>
                                    <td>18</td>
                                    <td>24</td>
                                    <td>24</td>
                                    <td>24</td>
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
                'image' => 'assets/images/all-product/u-bent-tubes.webp',
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

    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Products in Titanium Grade 1</h2>
            </div>

            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Titanium Grade 1 (UNS R50250 / W.Nr. 3.7025) </strong>is a widely accepted
                        solution in the world of corrosion-resistant metals. It excels in applications that demand strength
                        without adding excessive weight, particularly in industries that handle high-purity chemicals or
                        require exceptional biocompatibility.
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
                        Titanium Grade 1 products are manufactured according to globally recognized standards:
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
                        <h5>Excellent corrosion resistance in oxidizing and mildly reducing environments</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Lightweight with high strength-to-weight ratio</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Superior weldability and excellent formability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Biocompatible – safe for medical and food applications</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Outstanding resistance to chlorides and acidic environments</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Ideal for deep drawing and complex fabrications</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Titanium Grade 1</h2>
                <p class="text-center pb-3"><strong class="text-dark">Common <strong>titanium metal uses</strong> include
                        aircraft parts, marine equipment,
                        surgical implants, and sports gear. The versatility of <strong>titanium usage</strong>
                        ensures its demand across multiple industries worldwide.
                </p>
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Chemical Processing Plants</h5>
                        <p>Used for vessels, piping, heat exchangers, and tanks handling corrosive substances like nitric
                            and acetic acid.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Marine & Offshore Applications</h5>
                        <p>Ideal for seawater desalination units, marine hardware, and underwater components due to its
                            outstanding resistance to saltwater corrosion.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Aerospace & Aviation</h5>
                        <p>Used in structural components, airframe skins, and ducting where low weight and strength are
                            crucial.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Power Generation</h5>
                        <p>In condenser tubing, boiler parts, and heat exchangers for both nuclear and fossil fuel-based
                            plants.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Medical & Pharmaceutical Industries</h5>
                        <p>Perfect for surgical instruments, orthopedic devices, and pharmaceutical equipment due to its
                            biocompatibility and non-toxicity.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Food Processing</h5>
                        <p>Used in hygienic applications requiring corrosion resistance and food-grade compatibility.</p>
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
                        <h5>Experts in Titanium and corrosion-resistant alloy manufacturing</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>State-of-the-art production and testing facilities</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Commitment to premium raw materials and global standards</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Flexible production tailored to your technical drawings and custom requirements</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Quick turnaround times with a robust inventory and supply chain</h5>
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
                                <h4>What is Titanium Grade 1 and where is it used?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Titanium Grade 1 is the softest and most ductile of the commercially pure titanium
                                    grades, renowned for its exceptional corrosion resistance, superior formability, and
                                    excellent weldability. Its lightweight yet strong properties make it ideal for
                                    industries requiring durable materials that withstand extreme environments, such as
                                    chemical processing, marine and offshore applications, aerospace, medical, food, and
                                    pharmaceutical industries. It performs particularly well in oxygenated and chlorinated
                                    media, offering reliable performance in aggressive conditions.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the chemical and mechanical properties of Titanium Grade 1?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Titanium Grade 1 has a chemical composition of titanium as the balance element, with
                                    oxygen ≤0.18%, iron ≤0.20%, carbon ≤0.08%, nitrogen ≤0.03%, and hydrogen ≤0.015%.
                                    Mechanically, annealed tubing and bars have a tensile strength of 35 ksi (240 MPa) and
                                    yield strength of 25 ksi (170 MPa), with an elongation of 24%. Cold-drawn tubing
                                    achieves a higher tensile strength of 50 ksi (345 MPa) and yield strength of 40 ksi (275
                                    MPa) with slightly lower elongation of 18%, making it adaptable for different
                                    fabrication and structural needs.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What types of Titanium Grade 1 products are available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP manufactures and supplies Titanium Grade 1 in a wide variety
                                    of forms, including seamless and welded pipes, capillary, U-bend, boiler, and heat
                                    exchanger tubes, as well as sheets, plates, coils, strips, round, flat, hex, and square
                                    bars. It is also available in pipe fittings, flanges, fasteners such as bolts, nuts,
                                    screws, washers, studs, and custom-fabricated components designed to meet precise
                                    industrial requirements. All products are manufactured according to globally recognized
                                    standards for performance and reliability.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the key advantages of Titanium Grade 1?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Titanium Grade 1 offers excellent corrosion resistance in oxidizing and mildly reducing
                                    environments, a high strength to weight ratio, and superior formability and weldability.
                                    It is biocompatible, making it safe for medical and food applications, and highly
                                    resistant to chlorides and acidic conditions. Its ductility makes it suitable for deep
                                    drawing and complex fabrications, while maintaining long-term durability in harsh
                                    industrial and marine environments.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose MOKSH TUBES & FITTINGS LLP for Titanium Grade 1 products?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP is a trusted manufacturer, supplier, and exporter of
                                    high-quality Titanium Grade 1 products, backed by expertise in corrosion-resistant
                                    alloys. We use premium raw materials, employ state of the art production and testing
                                    facilities, and provide flexible manufacturing tailored to technical drawings and custom
                                    requirements. With robust inventory, efficient supply chain management, and quick
                                    turnaround times, we ensure reliable delivery and industry compliant solutions for
                                    global clients.
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
                    <strong>
                        <p>
                            Whether used as a structural <strong>titanium material</strong> or in
                            advanced alloys, its lightweight, high-strength, and corrosion-resistant
                            nature ensure that titanium remains one of the most valuable
                            engineering metals today. <strong>Moksh Tubes</strong>, we supply
                            premium quality <strong>titanium</strong> and its alloys for various
                            industrial applications.
                        </p>

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
                "name": "What is Titanium Grade 1 and where is it used?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Titanium Grade 1 is the softest and most ductile of the commercially pure titanium grades, renowned for its exceptional corrosion resistance, superior formability, and excellent weldability. Its lightweight yet strong properties make it ideal for industries requiring durable materials that withstand extreme environments, such as chemical processing, marine and offshore applications, aerospace, medical, food, and pharmaceutical industries. It performs particularly well in oxygenated and chlorinated media, offering reliable performance in aggressive conditions."
                }
                },
                {
                "@type": "Question",
                "name": "What are the chemical and mechanical properties of Titanium Grade 1?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Titanium Grade 1 has a chemical composition of titanium as the balance element, with oxygen ≤0.18%, iron ≤0.20%, carbon ≤0.08%, nitrogen ≤0.03%, and hydrogen ≤0.015%. Mechanically, annealed tubing and bars have a tensile strength of 35 ksi (240 MPa) and yield strength of 25 ksi (170 MPa), with an elongation of 24%. Cold-drawn tubing achieves a higher tensile strength of 50 ksi (345 MPa) and yield strength of 40 ksi (275 MPa) with slightly lower elongation of 18%, making it adaptable for different fabrication and structural needs."
                }
                },
                {
                "@type": "Question",
                "name": "What types of Titanium Grade 1 products are available?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "MOKSH TUBES & FITTINGS LLP manufactures and supplies Titanium Grade 1 in a wide variety of forms, including seamless and welded pipes, capillary, U-bend, boiler, and heat exchanger tubes, as well as sheets, plates, coils, strips, round, flat, hex, and square bars. It is also available in pipe fittings, flanges, fasteners such as bolts, nuts, screws, washers, studs, and custom-fabricated components designed to meet precise industrial requirements. All products are manufactured according to globally recognized standards for performance and reliability."
                }
                },
                {
                "@type": "Question",
                "name": "What are the key advantages of Titanium Grade 1?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Titanium Grade 1 offers excellent corrosion resistance in oxidizing and mildly reducing environments, a high strength to weight ratio, and superior formability and weldability. It is biocompatible, making it safe for medical and food applications, and highly resistant to chlorides and acidic conditions. Its ductility makes it suitable for deep drawing and complex fabrications, while maintaining long-term durability in harsh industrial and marine environments."
                }
                },
                {
                "@type": "Question",
                "name": "Why choose MOKSH TUBES & FITTINGS LLP for Titanium Grade 1 products?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "MOKSH TUBES & FITTINGS LLP is a trusted manufacturer, supplier, and exporter of high-quality Titanium Grade 1 products, backed by expertise in corrosion-resistant alloys. We use premium raw materials, employ state of the art production and testing facilities, and provide flexible manufacturing tailored to technical drawings and custom requirements. With robust inventory, efficient supply chain management, and quick turnaround times, we ensure reliable delivery and industry compliant solutions for global clients."
                }
                }
            ]
            }

        @endverbatim
    </script>
@endsection
