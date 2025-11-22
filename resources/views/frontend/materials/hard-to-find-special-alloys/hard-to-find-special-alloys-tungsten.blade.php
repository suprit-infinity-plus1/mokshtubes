@extends('layouts.master')

@section('title', 'Tungsten | Exceptional Strength & Durability')
@section('meta_description', 'Tungsten offers exceptional strength, heat resistance & durability for tools, high-temperature applications & precision engineering.')
@section('meta_keywords', 'Tungsten, high strength metal, heat resistant metal, durable metal, industrial tools metal, high temperature applications, precision engineering metal')
@section('og_image', asset('assets/images/hard-to-find-and-special-alloys/hard-to-find-and-special-alloys-tungsten.webp'))
@section('og_type', 'article')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/hard-to-find-and-special-alloys/hard-to-find-and-special-alloys-tungsten.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Tungsten Alloy <br> High Strength & Durability Metal</h1>
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
                Introduction To Tungsten - Extreme Heat And Wear Resistant Metal
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/hard-to-find-and-special-alloys/hard-to-find-and-special-alloys-tungsten.webp') }}"
                        alt="Tungsten" class="img-fluid rounded shadow-sm">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a trusted supplier,
                            manufacturer, and exporter of Tungsten and<strong class="text-black"> Tungsten-based
                                alloys,</strong> offering a comprehensive range
                            of forms including Tungsten rods, bars, plates, sheets, wires, crucibles, <a
                                href="{{ route('products.pipes-tubes') }}">tubes</a>, and
                            custom-fabricated parts. Known for its exceptionally high melting point, density, and hardness,
                            Tungsten is widely used in applications where thermal, mechanical, and wear resistance is
                            critical.

                        <p> <strong class="text-black"><a
                                    href="{{ route('materials.hard-To-Find-Special-Alloys') }}">Tungsten</a></strong>
                            exhibits excellent electrical conductivity, minimal
                            thermal expansion, and outstanding resistance to erosion by molten metals and high temperatures,
                            making it indispensable in industries like aerospace, defense, electronics, lighting, and
                            metallurgy.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Tungsten Alloys Datasheet</h3>
            <p class="mb-3">
                Get the complete Tungsten Alloys datasheet with chemical composition,
                mechanical properties, heat treatment details, and applications.
                Enter your email to receive the PDF instantly.
            </p>

            <!-- Lead Capture Form -->
            <form id="leadForm" method="POST" action="https://mokshtubes.com/datasheet-leads-capture" class="mb-3">
                <input type="hidden" name="_token" value="WNVWvpO4YR2OqZaIJDl2mE3UfyreGys3Vp19brsc" autocomplete="off">
                <div class="row justify-content-center">
                    <input type="hidden" name="pdf" value="haynes-242.pdf">
                    <div class="col-md-6 mb-2">
                        <input type="email" name="email" required="" class="form-control p-3" placeholder="Enter your email address">
                    </div>
                    <div class="col-md-3 mb-2">
                        <button type="submit" class="btn btn-lg w-100 text-white" style="background-color:#db7227; border-radius:8px;">
                            📥 Get Datasheet
                        </button>
                    </div>
                </div>
            </form>

            
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
                                    <td>Tungsten</td>
                                    <td>≥ 99.95</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Molybdenum</td>
                                    <td>≤ 0.01</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron</td>
                                    <td>≤ 0.001</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon</td>
                                    <td>≤ 0.001</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nickel</td>
                                    <td>≤ 0.001</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Oxygen</td>
                                    <td>≤ 0.003</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon</td>
                                    <td>≤ 0.002</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nitrogen</td>
                                    <td>≤ 0.001</td>
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
                                    <td>0.698 lb/in³</td>
                                    <td>19.25 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Range</td>
                                    <td>6160 °F</td>
                                    <td>3410 °C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Modulus of Elasticity – Tension</td>
                                    <td>57.0 × 10³ ksi</td>
                                    <td>393 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Modulus of Elasticity – Compression</td>
                                    <td>57.0 × 10³ ksi</td>
                                    <td>393 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Modulus of Elasticity – Torsion</td>
                                    <td>20.0 × 10³ ksi</td>
                                    <td>138 GPa </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Poisson’s Ratio</td>
                                    <td>0.28</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Curie Temperature</td>
                                    <td>—</td>
                                    <td>—</td>
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
                                    <th>Cold Worked</th>
                                    <th>Hot-Rolled</th>
                                    <th>Sheet</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Tensile Strength (ksi / MPa)</td>
                                    <td>100–130 / 690–900</td>
                                    <td>120–150 / 827–1034</td>
                                    <td>130–160 / 896–1103</td>
                                    <td>100–140 / 690–965</td>
                                    <td>90–130 / 620–896</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (0.2%) (ksi / MPa)</td>
                                    <td>90–110 / 620–758</td>
                                    <td>100–130 / 690–896</td>
                                    <td>110–140 / 758–965</td>
                                    <td>90–120 / 620–827</td>
                                    <td>85–120 / 586–827</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elongation (%)</td>
                                    <td>1–2</td>
                                    <td>0.5–1.5</td>
                                    <td>0.5–1</td>
                                    <td>1–2</td>
                                    <td>0.5–1</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Rockwell Hardness (B / C)</td>
                                    <td>—</td>
                                    <td>70 HR C</td>
                                    <td>75 HR C</td>
                                    <td>70 HR C</td>
                                    <td>65 HR C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Brinell Hardness (HB)</td>
                                    <td>300–400</td>
                                    <td>400–500</td>
                                    <td>450–550</td>
                                    <td>350–450</td>
                                    <td>300–400</td>
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
                <h2>Products in Tungsten</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Tungsten</strong> is commonly supplied as:
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
                        We supply Tungsten materials in accordance with the most stringent industry standards: </p>
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
                        <h5>World’s highest melting point among metals (3422°C)</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Extremely dense – suitable for radiation and vibration shielding</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Outstanding hardness – ideal for wear-resistant applications</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>High thermal conductivity – used in heat sinks and crucibles</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Low thermal expansion – excellent dimensional stability</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Tungsten</h2>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Aerospace & Defense</h5>
                        <p>Used in rocket nozzles, radiation shielding, ballast weights, kinetic energy penetrators, and
                            counterbalances due to its high density and thermal stability.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Electronics & Semiconductor Industry</h5>
                        <p>Applied in filaments, X-ray tubes, sputtering targets, electrical contacts, and semiconductors
                            for its high melting point and conductivity.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Medical Devices</h5>
                        <p>Tungsten is used in radiation shielding for PET/CT scanners, collimators, and syringes.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Lighting</h5>
                        <p>Utilized in incandescent lamp filaments and high-intensity discharge lamps.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Metallurgy & Foundries</h5>
                        <p>Used in sintering boats, crucibles, furnace parts, and tools that endure extreme heat.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-strategies"></i></div>
                        <h5>Oil & Gas Industry</h5>
                        <p>Tungsten is used in drilling tools, wear parts, and logging equipment due to its abrasion
                            resistance.</p>
                    </div>
                </div>
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
                        <h5>Wide range of pure and alloyed Tungsten products</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Machining and custom fabrication as per drawing</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Strict quality controls and certification</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Quick delivery with global logistics</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Competitive pricing and ISO-certified operations</h5>
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
                                <h4>What is Tungsten and what are its key properties?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Tungsten is a dense, high melting-point metal known for outstanding hardness, high
                                    thermal conductivity, minimal thermal expansion, and excellent resistance to wear,
                                    corrosion, and high temperatures.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Which forms of Tungsten products are available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Tungsten is supplied as seamless and welded pipes, tubes (capillary, U-bend, boiler,
                                    heat exchanger), sheets, plates, coils, strips, round/flat/hex/square bars, pipe
                                    fittings, flanges, fasteners, wires, crucibles, and custom fabricated components.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the main advantages of Tungsten?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Tungsten offers the world’s highest melting point among metals, extreme density,
                                    exceptional hardness, high thermal conductivity, and low thermal expansion, making it
                                    ideal for high temperature, wear-resistant, and radiation shielding applications.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>In which industries is Tungsten commonly used?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Tungsten is widely used in aerospace and defense, electronics and semiconductors,
                                    medical devices, lighting, metallurgy, foundries, and oil & gas industries for its
                                    thermal stability, hardness, and durability.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose MOKSH TUBES & FITTINGS for Tungsten products?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    We provide pure and alloyed Tungsten in various forms, precision machining, custom
                                    fabrication, strict quality control, ISO certified operations, fast global delivery, and
                                    competitive pricing, trusted by industries worldwide.
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
                    Contact <strong>Moksh Tubes & Fittings LLP</strong> — is your reliable source for high-performance
                    refractory metals.
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
                "name": "What is Tungsten and what are its key properties?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Tungsten is a dense, high melting-point metal known for outstanding hardness, high thermal conductivity, minimal thermal expansion, and excellent resistance to wear, corrosion, and high temperatures."
                }
                },
                {
                "@type": "Question",
                "name": "Which forms of Tungsten products are available?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Tungsten is supplied as seamless and welded pipes, tubes (capillary, U-bend, boiler, heat exchanger), sheets, plates, coils, strips, round/flat/hex/square bars, pipe fittings, flanges, fasteners, wires, crucibles, and custom fabricated components."
                }
                },
                {
                "@type": "Question",
                "name": "What are the main advantages of Tungsten?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Tungsten offers the world’s highest melting point among metals, extreme density, exceptional hardness, high thermal conductivity, and low thermal expansion, making it ideal for high temperature, wear-resistant, and radiation shielding applications."
                }
                },
                {
                "@type": "Question",
                "name": "In which industries is Tungsten commonly used?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Tungsten is widely used in aerospace and defense, electronics and semiconductors, medical devices, lighting, metallurgy, foundries, and oil & gas industries for its thermal stability, hardness, and durability."
                }
                },
                {
                "@type": "Question",
                "name": "Why choose MOKSH TUBES & FITTINGS for Tungsten products?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We provide pure and alloyed Tungsten in various forms, precision machining, custom fabrication, strict quality control, ISO certified operations, fast global delivery, and competitive pricing, trusted by industries worldwide."
                }
                }
            ]
            }
        
        @endverbatim
    </script>
@endsection
