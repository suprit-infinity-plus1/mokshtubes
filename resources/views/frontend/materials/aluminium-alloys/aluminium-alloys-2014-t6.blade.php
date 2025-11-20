@extends('layouts.master')

@section('title', 'Aluminium Alloy 2014 T6 | High Strength Aerospace Alloy')

@section('meta_description',
    'Aluminium 2014 T6 – aerospace-grade alloy with excellent machinability, corrosion
    resistance, and high strength for industrial applications.')

@section('meta_keywords',
    'Aluminium Alloy 2014 T6, High Strength Aluminium, Aerospace Grade Aluminium, Aluminium 2014
    T6 Pipes, Aluminium 2014 T6 Tubes, Aluminium 2014 T6 Sheets, Corrosion Resistant Aluminium, Machinable Aluminium Alloy,
    Aerospace Aluminium Alloys, Industrial Aluminium Grades')

@section('meta')
    <!-- Open Graph -->
    <meta property="og:title" content="Aluminium Alloy 2014 T6 | High Strength Aerospace Alloy">
    <meta property="og:description"
        content="Aluminium 2014 T6 – aerospace-grade alloy with excellent machinability, corrosion resistance, and high strength for industrial applications.">
    <meta property="og:image" content="{{ asset('assets/images/aluminium-alloys/aluminium-alloys-2014-t6.webp') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="article">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Aluminium Alloy 2014 T6 | High Strength Aerospace Alloy">
    <meta name="twitter:description"
        content="Aluminium 2014 T6 – aerospace-grade alloy with excellent machinability, corrosion resistance, and high strength for industrial applications.">
    <meta name="twitter:image" content="{{ asset('assets/images/aluminium-alloys/aluminium-alloys-2014-t6.webp') }}">
@endsection

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Aluminium 2014 T6 <br>High Strength Aerospace Alloy</h1>
                </div>
            </div>
        </div>
    </section>


    <!--End breadcrumb area-->
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Aluminium 2014-T6 | Product Overview</h2>
            </div>

            <h2 class="fw-semibold text-center mb-5" style="color: #db7227;">
                Introduction To Aluminium 2014-T6
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/aluminium-alloys/aluminium-alloys-2014-t6.webp') }}"
                        alt="Aluminium 2014-T6" class="img-fluid rounded shadow-sm">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a renowned manufacturer,
                            supplier, exporter, importer, and stockist of<strong class="text-black"> Aluminium Alloy 2014-T6
                                <a href="{{ route('products') }}">products</a></strong> such as sheets,
                            plates, bars, rods,<a href="{{ route('products.pipes-tubes') }}"> tubes</a>, and custom
                            fabricated items.

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">Aluminium 2014-T6</strong> is a high-strength aerospace-grade alloy
                            with excellent mechanical properties and good machinability. It is primarily alloyed with
                            copper, which enhances its strength but reduces corrosion resistance compared to pure aluminum.
                            The T6 temper denotes that the alloy has been solution heat-treated and artificially aged to
                            achieve high tensile strength and hardness. This alloy is commonly used in structural
                            applications where high strength and good wear resistance are required.
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
                                    <td>Aluminum</td>
                                    <td>Balance</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Copper</td>
                                    <td>3.9 – 5.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron</td>
                                    <td>0.7 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese</td>
                                    <td>0.4 – 0.9</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon</td>
                                    <td>0.5 – 0.9</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Zinc</td>
                                    <td>0.25 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Titanium</td>
                                    <td>0.15 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Magnesium</td>
                                    <td>0.2 – 0.8</td>
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
                                    <td>0.098 lb/in³</td>
                                    <td>2.80 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Point</td>
                                    <td>1070 – 1120 °F</td>
                                    <td>575 – 605 °C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elastic Modulus</td>
                                    <td>10.4 × 10³ ksi</td>
                                    <td>72 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Thermal Conductivity</td>
                                    <td>120 W/m-K</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Electrical Resistivity</td>
                                    <td>30% IACS</td>
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
                                    <th>Cold-Drawn</th>
                                    <th>Hot-Rolled</th>
                                    <th>Sheet (T6)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Tensile Strength (ksi / MPa)</td>
                                    <td>28–38 / 195–260</td>
                                    <td>65–75 / 450–515</td>
                                    <td>70–80 / 480–550</td>
                                    <td>65–75 / 450–515</td>
                                    <td>68–78 / 470–540</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tensile Strength (kis / MPa)</td>
                                    <td>10–15 / 70–100</td>
                                    <td>6–9 / 40–60</td>
                                    <td>60–70 / 415–485</td>
                                    <td>55–65 / 380–450</td>
                                    <td>60–70 / 415–485</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elongation (%)</td>
                                    <td>15–20</td>
                                    <td>8–12</td>
                                    <td>6–10</td>
                                    <td>8–12</td>
                                    <td>6–10</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Brinell Hardness (3000 kg)</td>
                                    <td>65–85</td>
                                    <td>120–135</td>
                                    <td>125–140</td>
                                    <td>120–135</td>
                                    <td>130–140</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Rockwell Hardness (B / C)</td>
                                    <td>35–50 B</td>
                                    <td>80–85 B</td>
                                    <td>85–90 B</td>
                                    <td>80–85 B</td>
                                    <td>85–90 B</td>
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
                <h2>Products in Aluminium Alloys</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark"> Aluminium 2014-T6</strong> is supplied in multiple mill forms including:
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
                        We supply Aluminium 2014-T6 materials in accordance with the most stringent industry standards: </p>
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
                        <h5>High tensile and yield strength</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Excellent machinability and wear resistance</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Good fatigue resistance and toughness</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Strong but lightweight for structural applications</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Suitable for heat treatment (T6 temper) to enhance properties</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Aluminium 2014-T6</h2>
                <p class="text-center pb-3"><strong class="text-dark">Aluminium 2014-T6</strong> is widely used in
                    aerospace, automotive, and structural applications requiring high strength and good fatigue resistance:
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Aerospace & Defense</h5>
                        <p>Aircraft structures, wing skins, and fuselage components.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Automotive Industry</h5>
                        <p>Structural frames, chassis parts, and body panels.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Industrial Equipment</h5>
                        <p>Gears, shafts, and mechanical components requiring wear resistance.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Marine Applications</h5>
                        <p>Structural elements exposed to moderate corrosion.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Machinery & Tools</h5>
                        <p>Precision tools, dies, and molds.
                        </p>
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
                        <h5>Premium quality Aluminium 2014-T6 products
                        </h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Compliance with international aerospace and industrial standards</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Large inventory with quick turnaround</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Technical expertise and customer-focused service</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Custom sizing and processing options available</h5>
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
                            <div class="accord-btn ">
                                <h4>
                                    What is Aluminium Alloy 2014-T6 and what makes it unique?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Aluminium Alloy 2014-T6 is a high strength, <a
                                        href="{{ route('materials.copper-Alloys') }}">copper alloyed</a> aluminum grade
                                    widely used in
                                    aerospace, automotive, and structural <a
                                        href="{{ route('materials.engineering-Steels') }}">engineering</a>. The T6 temper
                                    means it has been
                                    solution heat-treated and artificially aged, giving it excellent tensile strength,
                                    hardness, and machinability, but with slightly reduced corrosion resistance compared to
                                    pure aluminum alloys.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>
                                    Is Aluminium 2014-T6 corrosion resistant?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Aluminium 2014-T6 offers moderate corrosion resistance, but it is not as
                                    corrosion resistant as commercially pure aluminum grades like <a
                                        href="{{ url('materials/aluminium-alloys/aluminium-alloys-1100') }}">1100</a> or
                                    <a href="{{ url('materials/aluminium-alloys/aluminium-alloys-1200') }}">1200</a>. In
                                    most
                                    cases, protective coatings, anodizing, or surface treatments are recommended when the
                                    alloy is used in corrosive or marine environments.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>
                                    What are the key applications of Aluminium 2014-T6?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Due to its strength-to-weight ratio and wear resistance, Aluminium 2014-T6 is
                                    extensively used in:
                                </p>
                                <ul>
                                    <li><strong>Aerospace</strong>: aircraft structures, wing skins, fuselage components.
                                    </li>
                                    <li><strong>Automotive</strong>: chassis, body panels, and high performance parts.</li>
                                    <li><strong>Industrial Equipment</strong>: gears, shafts, and load-bearing components.
                                    </li>
                                    <li><strong>Marine</strong>: moderate structural applications.</li>
                                    <li><strong>Machinery & Tools</strong>: dies, molds, and precision instruments.</li>
                                </ul>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>
                                    What are the advantages of Aluminium Alloy 2014-T6?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Some of the main benefits of Aluminium 2014-T6 include:
                                </p>
                                <ul>
                                    <li>High tensile and yield strength for demanding applications.</li>
                                    <li>Excellent machinability for complex precision parts.</li>
                                    <li>Good fatigue and wear resistance for structural use.</li>
                                    <li>Lightweight yet durable alternative to steel.</li>
                                    <li>Heat treatable alloy (T6) for enhanced performance.</li>
                                </ul>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>
                                    What Aluminium 2014-T6 products does Moksh Tubes & Fittings LLP supply?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Moksh Tubes & Fittings LLP manufactures and supplies a wide range of Aluminium 2014-T6
                                    products, including:
                                <ul>
                                    <li>Sheets, Plates, Coils & Strips.</li>
                                    <li>Pipes & Tubes (<a
                                            href="{{ route('products.pipes-tubes.seamless-pipes') }}">Seamless</a>, <a
                                            href="{{ route('products.pipes-tubes.welded-pipes') }}">Welded</a>, Heat
                                        Exchanger, U-Bend).</li>
                                    <li>Bars & Rods (Round, Hex, Flat, Square).</li>
                                    <li>Pipe Fittings, Flanges, and Fasteners.</li>
                                    <li>Custom Fabricated Components tailored to customer requirements.</li>
                                </ul>
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
                    For quotes, inquiries, or customized Aluminium Alloy 2014-T6 products, <strong>Moksh Tubes & Fittings
                        LLP</strong> your trusted supplier of high-performance aluminum alloys.</p>
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
      "name": "What is Aluminium Alloy 2014-T6 and what makes it unique?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Aluminium Alloy 2014-T6 is a high strength, copper alloyed aluminum grade widely used in aerospace, automotive, and structural engineering. The T6 temper means it has been solution heat-treated and artificially aged, giving it excellent tensile strength, hardness, and machinability, but with slightly reduced corrosion resistance compared to pure aluminum alloys."
      }
    },
    {
      "@type": "Question",
      "name": "Is Aluminium 2014-T6 corrosion resistant?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Aluminium 2014-T6 offers moderate corrosion resistance, but it is not as corrosion resistant as commercially pure aluminum grades like 1100 or 1200. In most cases, protective coatings, anodizing, or surface treatments are recommended when the alloy is used in corrosive or marine environments."
      }
    },
    {
      "@type": "Question",
      "name": "What are the key applications of Aluminium 2014-T6?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Due to its strength-to-weight ratio and wear resistance, Aluminium 2014-T6 is extensively used in: Aerospace: aircraft structures, wing skins, fuselage components. Automotive: chassis, body panels, and high performance parts. Industrial Equipment: gears, shafts, and load-bearing components. Marine: moderate structural applications. Machinery & Tools: dies, molds, and precision instruments."
      }
    },
    {
      "@type": "Question",
      "name": "What are the advantages of Aluminium Alloy 2014-T6?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Some of the main benefits of Aluminium 2014-T6 include: High tensile and yield strength for demanding applications. Excellent machinability for complex precision parts. Good fatigue and wear resistance for structural use. Lightweight yet durable alternative to steel. Heat treatable alloy (T6) for enhanced performance."
      }
    },
    {
      "@type": "Question",
      "name": "What Aluminium 2014-T6 products does Moksh Tubes & Fittings LLP supply?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Moksh Tubes & Fittings LLP manufactures and supplies a wide range of Aluminium 2014-T6 products, including: Sheets, Plates, Coils & Strips. Pipes & Tubes (Seamless, Welded, Heat Exchanger, U-Bend). Bars & Rods (Round, Hex, Flat, Square). Pipe Fittings, Flanges, and Fasteners. Custom Fabricated Components tailored to customer requirements."
      }
    }
  ]
}
@endverbatim
</script>
@endsection
