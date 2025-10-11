@extends('layouts.master')

@section('title', 'Super Duplex Stainless Steel 2205 | High Strength Corrosion-Resistant Alloy')

@section('meta_description',
    'Buy Super Duplex Stainless Steel 2205 pipes, tubes & fittings from Mokshtubes LLP. High strength, superior corrosion resistance, and durable performance.')

@section('meta_keywords',
    'Super Duplex Stainless Steel 2205, 2205 pipes, 2205 tubes, 2205 fittings, corrosion-resistant stainless steel, high strength super duplex steel, Mokshtubes LLP, chemical processing steel, marine engineering steel, oil and gas stainless steel, desalination plant steel, stainless steel plates, stainless steel flanges')

@section('content')

<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto text-center">
                <h1>Super Duplex Stainless Steel 2205 <br> High Strength Corrosion-Resistant Alloy</h1>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<section class="sec-padd-top sec-padd-bottom bg-light">
    <div class="container">
        <div class="section-title center">
            <h2>Super Duplex 2205 | Product Overview</h2>
        </div>

        <h3 class="h2 fw-semibold text-center mb-5" style="color: #db7227;">
            Introduction To Super Duplex Stainless Steel 2205
        </h3>

        <div class="row align-items-center">
            <!-- Image Left -->
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="{{ asset('assets/images/aluminium-alloys/aluminium-alloys-6061-T6.webp') }}"
                    alt="Super Duplex Stainless Steel 2205" class="img-fluid rounded shadow-sm">
            </div>

            <!-- Content Right -->
            <div class="col-md-6">
                <div class="pe-md-3">
                    <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                        <strong class="text-black">Super Duplex Stainless Steel 2205</strong> is a dual-phase (ferritic-austenitic) stainless steel that combines exceptional corrosion resistance with high strength. It contains approximately 22% chromium, 5–6% nickel, and 3% molybdenum, giving it superior resistance to pitting, crevice corrosion, and stress corrosion cracking compared to conventional austenitic and ferritic stainless steels.
                    </p>

                    <p class="fs-6 text-justify" style="text-align: justify;">
                        2205 is widely used in industries where chloride stress corrosion resistance, strength, and durability are crucial. <a href="{{ route('index') }}">MOKSH TUBES & FITTINGS LLP</a> is a trusted supplier, exporter, importer, and stockist of Super Duplex 2205 products such as <a href="{{ route('products') }}">pipes, tubes, fittings, flanges, plates, and custom components</a>.
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
                                <th>Content (%)</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr class="t-row">
                                <td>Carbon (C)</td>
                                <td>≤ 0.03</td>
                            </tr>
                            <tr class="t-row">
                                <td>Manganese (Mn)</td>
                                <td>≤ 2.00</td>
                            </tr>
                            <tr class="t-row">
                                <td>Silicon (Si)</td>
                                <td>≤ 1.00</td>
                            </tr>
                            <tr class="t-row">
                                <td>Chromium (Cr)</td>
                                <td>21.0 – 23.0</td>
                            </tr>
                            <tr class="t-row">
                                <td>Nickel (Ni)</td>
                                <td>4.5 – 6.5</td>
                            </tr>
                            <tr class="t-row">
                                <td>Molybdenum (Mo)</td>
                                <td>2.5 – 3.5</td>
                            </tr>
                            <tr class="t-row">
                                <td>Nitrogen (N)</td>
                                <td>0.08 – 0.20</td>
                            </tr>
                            <tr class="t-row">
                                <td>Iron (Fe)</td>
                                <td>Balance</td>
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
            <h2 class="fw-bold" style="color: #174268;">Mechanical Properties</h2>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
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
                                <td>Tensile Strength</td>
                                <td>620 – 880 MPa</td>
                            </tr>
                            <tr class="t-row">
                                <td>Yield Strength (0.2% Offset)</td>
                                <td>450 – 550 MPa</td>
                            </tr>
                            <tr class="t-row">
                                <td>Elongation</td>
                                <td>25 – 30%</td>
                            </tr>
                            <tr class="t-row">
                                <td>Hardness</td>
                                <td>290 HB (max)</td>
                            </tr>
                            <tr class="t-row">
                                <td>Density</td>
                                <td>7.80 g/cm³</td>
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
                <h2>Products in Duplex Stainless Steel S31803</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Duplex Stainless Steel S31803</strong> is available in a variety of mill
                        forms:
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
                    <h2 class="fw-bold fs-5 text-center my-4" style="color: #174268;">
                        We supply Duplex Stainless Steel S31803 materials in accordance with the most stringent industry
                        standards: </h2>
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
                    <h3>Excellent resistance to chloride-induced stress corrosion cracking</h3>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                    <h3>Superior pitting and crevice corrosion resistance</h3>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-arrow-up-square"></i></div>
                    <h3>Twice the yield strength of conventional austenitic stainless steels</h3>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-tools"></i></div>
                    <h3>Good weldability and formability</h3>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                    <h3>High mechanical strength and durability in harsh environments</h3>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="sec-padd-top sec-padd-bottom">
    <div class="container">
        <div class="section-title center">
            <h2>Applications of Super Duplex Stainless Steel 2205</h2>
            <p class="text-center pb-3"><strong class="text-dark">Super Duplex Stainless Steel 2205</strong> is widely used across multiple industries:</p>
        </div>

        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                    <h3>Chemical Processing</h3>
                    <p>Reactors, heat exchangers, and storage tanks for chemical processing equipment.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                    <h3>Oil & Gas Industry</h3>
                    <p>Offshore platforms, risers, subsea equipment, and pipelines.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                    <h3>Marine & Desalination Plants</h3>
                    <p>Seawater systems, offshore structures, and desalination equipment.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-file-earmark-text"></i></div>
                    <h3>Pulp & Paper Industry</h3>
                    <p>Machinery and piping used in pulp and paper production processes.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-box-seam"></i></div>
                    <h3>Pollution Control & Pressure Vessels</h3>
                    <p>Equipment and tanks in corrosive conditions for safe storage and processing.</p>
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
                    <h3>Seamless & Welded Pipes</h3>
                    <p>Mokshtubes Fittings & LLP offers Super Duplex 2205 in seamless pipes, welded pipes, tubes, fittings, flanges, sheets, plates, and custom fabricated components.</p>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="why-banner-block">
                    <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                    <h3>Custom Fabrication</h3>
                    <p>Our products adhere to strict quality standards to ensure long-term performance in the most demanding environments.</p>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="why-banner-block">
                    <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                    <h3>Quality Standards</h3>
                    <p>Manufactured to the highest standards for long-lasting industrial performance.</p>
                </div>
            </div>

            <div class="col-sm-6 col-lg-6">
                <div class="why-banner-block">
                    <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                    <h3>Technical Support</h3>
                    <p>Experienced guidance for material selection and application across industries.</p>
                </div>
            </div>

            <div class="col-sm-6 col-lg-6">
                <div class="why-banner-block">
                    <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                    <h3>Customer Satisfaction</h3>
                    <p>Commitment to quality assurance and long-term client satisfaction.</p>
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

                    <!--Start single accordion box-->
                    <div class="accordion accordion-block">
                        <div class="accord-btn active">
                            <h3>What makes Super Duplex 2205 superior to standard austenitic stainless steel?</h3>
                        </div>
                        <div class="accord-content collapsed">
                            <p>It has twice the strength and significantly better resistance to chloride stress corrosion cracking than standard austenitic grades like 304 or 316.</p>
                        </div>
                    </div>
                    <!--End single accordion box-->

                    <!--Start single accordion box-->
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h3>Is Super Duplex 2205 weldable?</h3>
                        </div>
                        <div class="accord-content">
                            <p>Yes, but proper control of heat input and post-weld treatment is essential to maintain corrosion resistance and strength.</p>
                        </div>
                    </div>
                    <!--End single accordion box-->

                    <!--Start single accordion box-->
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h3>Where is Super Duplex 2205 most commonly used?</h3>
                        </div>
                        <div class="accord-content">
                            <p>In offshore oil & gas, desalination plants, chemical processing, and marine applications where corrosion resistance and high strength are critical.</p>
                        </div>
                    </div>
                    <!--End single accordion box-->

                    <!--Start single accordion box-->
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h3>Can Super Duplex 2205 be used in seawater environments?</h3>
                        </div>
                        <div class="accord-content">
                            <p>Yes, it has excellent resistance to seawater corrosion and chloride-induced stress corrosion cracking.</p>
                        </div>
                    </div>
                    <!--End single accordion box-->

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
                    For inquiries, pricing, or customized Super Duplex Stainless Steel 2205 solutions, <strong>Moksh Tubes & Fittings
                        LLP</strong> your reliable partner in Super Duplex Stainless Steel 2205.</p>
                <!-- Call button -->
                <a href="javascript:void(0);" class="contact-cta-btn" data-bs-toggle="modal"
                    data-bs-target="#contactFormModal">
                    Get in Touch
                </a>
            </div>
        </div>
    </section>


@endsection
