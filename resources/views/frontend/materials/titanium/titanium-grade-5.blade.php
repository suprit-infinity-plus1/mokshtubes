@extends('layouts.master')

@section('title', 'Titanium Grade 5 – Aerospace-Grade Titanium Alloy') <!-- 52 chars -->
@section('meta_description', 'Titanium Grade 5 provides superior strength, corrosion resistance, and weldability, ideal for aerospace, marine, and industrial applications.')
@section('meta_keywords', 'Titanium Grade 5, Aerospace Grade Titanium, High Strength Titanium, Corrosion Resistant Titanium, Titanium Grade 5 Pipes, Titanium Grade 5 Tubes, Titanium Grade 5 Sheets, Weldable Titanium Alloy, Industrial Titanium Grades, Marine Titanium Alloys')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Titanium Grade 5 <br> High Strength & Corrosion Resistant Alloy</h1>
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
                Introduction To Titanium Grade 5 / Ti-6Al-4V / UNS R56400
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/titanium/titanium-5.webp') }}" alt="Titanium Grade 5"
                        class="img-fluid rounded shadow-sm">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> proudly offers a complete range
                            of Titanium Grade 5 <a href="{{ route('products') }}">products</a>, including Pipes & Tubes,
                            Pipe Fittings, Flanges, Fasteners, Sheets
                            & Plates, Coils, Bars, Wires, Welding Rods, Mesh, Custom Machined Parts, and other specialty
                            components tailored to critical applications. As a manufacturer, stockist, exporter, importer,
                            and supplier, we are committed to delivering top-tier <a
                                href="{{ route('materials.titanium') }}">Titanium</a> Grade 5 solutions worldwide.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">Titanium Grade 5</strong> also known as Ti-6Al-4V, is the most widely
                            used titanium alloy, featuring 6% aluminum and 4% vanadium. This high-strength, lightweight
                            alloy strikes an excellent balance between performance and processability. It boasts outstanding
                            corrosion resistance, superior strength-to-weight ratio, and reliable performance at elevated
                            temperatures—making it the material of choice in aerospace, medical, marine, and industrial
                            sectors. Whether it's structural components or precision-engineered parts, Grade 5 is the
                            trusted solution for demanding environments.
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
                                    <td>Titanium</td>
                                    <td>Balance</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Aluminum</td>
                                    <td>5.5 – 6.75</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Vanadium</td>
                                    <td>3.5 – 4.5</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron</td>
                                    <td>0.40 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Oxygen</td>
                                    <td>0.20 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon</td>
                                    <td>0.08 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nitrogen</td>
                                    <td>0.05 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Hydrogen</td>
                                    <td>0.015 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Other elements</td>
                                    <td>0.10 max</td>
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
                                    <td>0.160 lb/in³</td>
                                    <td>4.43 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Point</td>
                                    <td>2,800 °F</td>
                                    <td>1,655 °C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elastic Modulus</td>
                                    <td>16.5 x 10⁶ psi</td>
                                    <td>114 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Thermal Conductivity</td>
                                    <td>6.7 Btu/h·ft·°F</td>
                                    <td>6.7 W/m·K</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Electrical Resistivity</td>
                                    <td>1.72 x 10⁻⁶ ohm·in</td>
                                    <td>1.47 µΩ·m</td>
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
                                    <td>130</td>
                                    <td>145</td>
                                    <td>138</td>
                                    <td>135</td>
                                    <td>140</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tensile Strength (MPa)</td>
                                    <td>896</td>
                                    <td>1000</td>
                                    <td>952</td>
                                    <td>931</td>
                                    <td>965</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (0.2%) (ksi)</td>
                                    <td>120</td>
                                    <td>129</td>
                                    <td>125</td>
                                    <td>122</td>
                                    <td>128</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (MPa)</td>
                                    <td>827</td>
                                    <td>889</td>
                                    <td>862</td>
                                    <td>841</td>
                                    <td>883</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elongation (%)</td>
                                    <td>14</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>4</td>
                                    <td>8</td>
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
                <h2>Products in Titanium Grade 5</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Titanium Grade 5 (UNS R56400 / Ti-6Al-4V) </strong>is recognized globally
                        for its strength, corrosion resistance, and temperature tolerance. It is the go-to material for
                        structural and pressure-containing applications across various high-performance industries. What
                        sets Grade 5 apart is its capability to maintain high strength even after heat treatment or
                        welding—ideal for aerospace components, marine hardware, and medical implants.
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
                        Titanium Grade 5 is manufactured in strict accordance with international norms and quality
                        benchmarks:
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
                        <h5>Exceptional strength-to-weight ratio</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Excellent corrosion resistance, including in saltwater</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Superior biocompatibility – safe for implants</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>High fatigue and crack resistance</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Maintains strength up to 400°C</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Ideal for welding, forging, and machining</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Titanium Grade 5</h2>
                <p class="text-center pb-3"><strong class="text-dark">Titanium Grade 5</strong> is synonymous with
                    performance. Its versatility and resilience make it a cornerstone material in critical applications:
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Aerospace & Defense</h5>
                        <p>From turbine blades and jet engine parts to structural airframe components</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Medical Sector</h5>
                        <p>Used in orthopedic implants, surgical instruments, dental devices, and prosthetics
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Marine & Offshore Engineering</h5>
                        <p>For ship structures, propulsion systems, desalination plants, and underwater equipment</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Automotive & Motorsport</h5>
                        <p>For valves, connecting rods, and performance parts in high-speed applications</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Chemical Processing</h5>
                        <p>Resistant to chlorides and acid attack—ideal for heat exchangers and reaction vessels
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Power Generation</h5>
                        <p>Used in condenser tubing, turbine blades, and components exposed to high temperature</p>
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
                        <h5>Over a decade of expertise in titanium and high-performance alloys</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>In-house processing, testing, and machining for complete traceability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Timely delivery and strict quality compliance to international standards</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Competitive pricing and flexible supply volumes</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Customized solutions for your most challenging specifications</h5>
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
                                <h4>What is Titanium Grade 5 (Ti-6Al-4V) and why is it widely used?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Titanium Grade 5, also known as Ti-6Al-4V, is a high strength titanium alloy containing
                                    6% aluminum and 4% vanadium. It combines an exceptional strength-to-weight ratio with
                                    corrosion resistance and temperature tolerance, making it ideal for aerospace, medical,
                                    marine, and industrial applications. Its versatility and reliability have made it the
                                    most widely used titanium alloy for precision-engineered and structural components.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What types of Titanium Grade 5 products does MOKSH TUBES & FITTINGS LLP provide?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP offers a complete range of Titanium Grade 5 products,
                                    including seamless and welded pipes, various tubes, sheets, plates, coils, bars, wires,
                                    fasteners, flanges, welding rods, mesh, and custom machined components. All products
                                    comply with international quality standards and are designed for high performance and
                                    critical applications where strength and durability are essential.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the main advantages of Titanium Grade 5?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Titanium Grade 5 offers a superior strength-to-weight ratio, excellent corrosion
                                    resistance including in saltwater environments high fatigue and crack resistance, and
                                    biocompatibility suitable for medical implants. It retains its strength at elevated
                                    temperatures up to 400°C and can be welded, forged, and machined with precision, making
                                    it ideal for demanding industrial and aerospace applications.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Which industries benefit most from Titanium Grade 5 products?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Titanium Grade 5 is widely used in aerospace and defense for airframes and jet engine
                                    components, in medical sectors for implants and surgical instruments, in marine and
                                    offshore engineering for underwater equipment and ship structures, in automotive and
                                    motorsport for high performance parts, in chemical processing for corrosion resistant
                                    vessels, and in power generation for turbines and condenser components.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose MOKSH TUBES & FITTINGS LLP for Titanium Grade 5 solutions?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    With over a decade of expertise, MOKSH TUBES & FITTINGS LLP provides globally compliant
                                    Titanium Grade 5 products with in house processing, testing, and machining for full
                                    traceability. We ensure timely delivery, competitive pricing, and custom solutions
                                    tailored to your specifications, making us a trusted supplier for high performance
                                    industries worldwide.
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
                    Reach out to <strong>Moksh Tubes & Fittings LLP</strong> – your trusted source for premium titanium
                    solutions.</p>
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
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "What is Titanium Grade 5 (Ti-6Al-4V) and why is it widely used?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Titanium Grade 5, also known as Ti-6Al-4V, is a high strength titanium alloy containing 6% aluminum and 4% vanadium. It combines an exceptional strength-to-weight ratio with corrosion resistance and temperature tolerance, making it ideal for aerospace, medical, marine, and industrial applications. Its versatility and reliability have made it the most widely used titanium alloy for precision-engineered and structural components."
            }
        },
        {
            "@type": "Question",
            "name": "What types of Titanium Grade 5 products does MOKSH TUBES & FITTINGS LLP provide?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "MOKSH TUBES & FITTINGS LLP offers a complete range of Titanium Grade 5 products, including seamless and welded pipes, various tubes, sheets, plates, coils, bars, wires, fasteners, flanges, welding rods, mesh, and custom machined components. All products comply with international quality standards and are designed for high performance and critical applications where strength and durability are essential."
            }
        },
        {
            "@type": "Question",
            "name": "What are the main advantages of Titanium Grade 5?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Titanium Grade 5 offers a superior strength-to-weight ratio, excellent corrosion resistance including in saltwater environments, high fatigue and crack resistance, and biocompatibility suitable for medical implants. It retains its strength at elevated temperatures up to 400°C and can be welded, forged, and machined with precision, making it ideal for demanding industrial and aerospace applications."
            }
        },
        {
            "@type": "Question",
            "name": "Which industries benefit most from Titanium Grade 5 products?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Titanium Grade 5 is widely used in aerospace and defense for airframes and jet engine components, in medical sectors for implants and surgical instruments, in marine and offshore engineering for underwater equipment and ship structures, in automotive and motorsport for high performance parts, in chemical processing for corrosion resistant vessels, and in power generation for turbines and condenser components."
            }
        },
        {
            "@type": "Question",
            "name": "Why choose MOKSH TUBES & FITTINGS LLP for Titanium Grade 5 solutions?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "With over a decade of expertise, MOKSH TUBES & FITTINGS LLP provides globally compliant Titanium Grade 5 products with in house processing, testing, and machining for full traceability. We ensure timely delivery, competitive pricing, and custom solutions tailored to your specifications, making us a trusted supplier for high performance industries worldwide."
            }
        }
    ]
}
</script>
@endverbatim
@endsection
