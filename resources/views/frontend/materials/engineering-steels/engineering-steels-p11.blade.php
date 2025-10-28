@extends('layouts.master')

@section('title', 'P11 Alloy Steel | High Temperature Pressure Vessel Steel')
@section('meta_description', 'P11 Alloy Steel designed for high-temperature pressure vessels, boilers, and pipework in power plants.')
@section('meta_keywords', 'P11 Alloy Steel, high temperature alloy steel, pressure vessel steel, boiler steel, power plant steel, industrial alloy steel')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>High Temperature P11 Alloy Steel</h1>
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
                Introduction To Engineering Steel P11
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/engineering-steels/engineering-steels-p11.webp') }}" alt="ENp11"
                        class="img-fluid rounded shadow-sm">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a trusted manufacturer,
                            supplier, exporter, importer, and stockist of<strong class="text-black"> P11 steel
                                products</strong> including pipes, tubes, plates,
                            and forgings.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">EN P11</strong class="text-black">, is a chromium-molybdenum alloy
                            steel commonly used in high-temperature and high-pressure applications such as boilers,
                            superheaters, and pressure vessels. It belongs to the Grade 1 group of alloy steels and is
                            designed to provide excellent strength, creep resistance, and oxidation resistance at elevated
                            temperatures up to 550°C (1022°F).
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
                                    <td>0.07 – 0.15</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium</td>
                                    <td>0.90 – 1.20</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon</td>
                                    <td>0.10 – 0.40</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese</td>
                                    <td>0.30 – 0.60</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Molybdenum</td>
                                    <td>0.44 – 0.65</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sulfur</td>
                                    <td>≤ 0.035</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Phosphorus</td>
                                    <td>≤ 0.035</td>
                                </tr>
                                {{-- <tr class="t-row">
                                    <td>Vanadium </td>
                                    <td>0.20 – 0.50</td>
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
                                    <td>2450 – 2550 °F</td>
                                    <td>1340 – 1400 °C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Modulus of Elasticity (Tension)</td>
                                    <td>29,000 ksi</td>
                                    <td>200 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Modulus of Elasticity (Torsion)</td>
                                    <td>11,600 ksi</td>
                                    <td>80 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Poisson’s Ratio</td>
                                    <td>0.29</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Thermal Conductivity</td>
                                    <td>45 W/m·K</td>
                                    <td>45 W/m·K</td>
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
                                    <td>75–95 ksi / 517–655 MPa/td>
                                    <td>80–110 ksi / 552–758 MPa</td>
                                    <td>—</td>
                                    <td>75–95 ksi / 517–655 MPa</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (0.2%)</td>
                                    <td>40–60 ksi / 276–414 MPa</td>
                                    <td>45–90 ksi / 310–620 MPa</td>
                                    <td>—</td>
                                    <td>40–60 ksi / 276–414 MPa</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elongation (%)</td>
                                    <td>20–30</td>
                                    <td>15–25</td>
                                    <td>—</td>
                                    <td>20–30</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Brinell Hardness (3000 kg)</td>
                                    <td>140–190</td>
                                    <td>160–220</td>
                                    <td>—</td>
                                    <td>140–190</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Rockwell Hardness (B / C)</td>
                                    <td>75–85 B</td>
                                    <td>85–90 B</td>
                                    <td>—</td>
                                    <td>75–85 B</td>
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
                <h2>Products in Engineering Steel P11</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Engineering Steel P11</strong> is typically available in:
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
                        Engineering Steel P11 products are produced to the following global standards:
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
                        <h5>Excellent strength and creep resistance at elevated temperatures</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Good oxidation and corrosion resistance in steam and gas environments</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Suitable for high pressure and thermal cycling applications</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Good weldability and machinability</h5>
                    </div>
                </div>
                {{-- <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Excellent dimensional stability during heat treatment</h5>
                    </div>
                </div> --}}
            </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Engineering Steel P11</h2>
                <p class="text-center pb-3"><strong class="text-dark">Engineering Steel P11</strong> is primarily used
                    for:
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Power Generation</h5>
                        <p>Boiler tubes, superheater tubes, and heat exchanger tubes operating at high temperatures and
                            pressures.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Petrochemical Industry</h5>
                        <p>Pressure vessels, reactors, and piping systems handling hot gases and fluids.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Oil & Gas Industry</h5>
                        <p>High-temperature pipelines and components in upstream and downstream processing.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Chemical Processing</h5>
                        <p>Equipment exposed to high temperature and corrosive environments.</p>
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
                        <h5>Trusted supplier with certified quality P11 steel</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Comprehensive stock and custom sizing available</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Technical expertise in alloy steel applications</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Competitive pricing and timely deliveries</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Full traceability and compliance documentation</h5>
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
                                <h4>What is P11 steel used for?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    P11 steel is primarily used in high temperature and high pressure applications,
                                    including boiler tubes, superheaters, pressure vessels, and heat exchanger components in
                                    power generation, petrochemical, oil & gas, and chemical processing industries.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the key properties of P11 steel?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    P11 steel provides excellent strength, creep resistance, oxidation resistance, good
                                    weldability, and machinability, making it suitable for thermal cycling and high-pressure
                                    environments.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>In what forms is P11 steel available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    P11 steel is available in seamless and welded pipes, tubes, sheets, plates, bars,
                                    flanges, fasteners, and custom fabricated components to meet diverse industrial
                                    requirements.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why is P11 steel suitable for high-temperature applications?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Its chromium molybdenum composition ensures superior creep resistance, oxidation
                                    resistance, and strength at elevated temperatures up to 550°C (1022°F), making it ideal
                                    for boilers, superheaters, and pressure vessels.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose MOKSH TUBES & FITTINGS LLP for P11 steel?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    We provide certified high-quality P11 steel products with comprehensive stock, custom
                                    sizing, technical expertise, timely deliveries, competitive pricing, and full
                                    traceability for critical alloy steel applications.
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
                    For inquiries or quotations for P11 steel products, contact<strong> Moksh Tubes & Fittings
                        LLP</strong> — your reliable partner for alloy steel solutions.
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
@verbatim
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is P11 steel used for?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "P11 steel is primarily used in high temperature and high pressure applications, including boiler tubes, superheaters, pressure vessels, and heat exchanger components in power generation, petrochemical, oil & gas, and chemical processing industries."
      }
    },
    {
      "@type": "Question",
      "name": "What are the key properties of P11 steel?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "P11 steel provides excellent strength, creep resistance, oxidation resistance, good weldability, and machinability, making it suitable for thermal cycling and high-pressure environments."
      }
    },
    {
      "@type": "Question",
      "name": "In what forms is P11 steel available?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "P11 steel is available in seamless and welded pipes, tubes, sheets, plates, bars, flanges, fasteners, and custom fabricated components to meet diverse industrial requirements."
      }
    },
    {
      "@type": "Question",
      "name": "Why is P11 steel suitable for high-temperature applications?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Its chromium molybdenum composition ensures superior creep resistance, oxidation resistance, and strength at elevated temperatures up to 550°C (1022°F), making it ideal for boilers, superheaters, and pressure vessels."
      }
    },
    {
      "@type": "Question",
      "name": "Why choose MOKSH TUBES & FITTINGS LLP for P11 steel?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We provide certified high-quality P11 steel products with comprehensive stock, custom sizing, technical expertise, timely deliveries, competitive pricing, and full traceability for critical alloy steel applications."
      }
    }
  ]
}
</script>
@endverbatim
@endsection
