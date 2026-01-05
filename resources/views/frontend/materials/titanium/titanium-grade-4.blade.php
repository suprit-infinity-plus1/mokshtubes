@extends('layouts.master')

@section('title', 'Titanium Grade 4 – High Strength Titanium Alloy') <!-- 52 chars -->
@section('meta_description', 'Titanium Grade 4 offers high strength and excellent corrosion resistance, ideal for
    aerospace, marine, and chemical industry applications.')
@section('meta_keywords', 'Titanium Grade 4, High Strength Titanium, Corrosion Resistant Titanium, Titanium Grade 4
    Pipes, Titanium Grade 4 Tubes, Titanium Grade 4 Sheets, Aerospace Titanium Alloys, Marine Industry Titanium, Chemical
    Processing Titanium, Industrial Titanium Grades')
@section('og_image', asset('assets/images/material/titanium-grade4.webp'))
@section('og_type', 'article')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/material/titanium-grade4.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Titanium Grade 4 <br> Corrosion Resistant & High Strength Alloy</h1>
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
                Introduction To Titanium Grade 4 / UNS R50700
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/material/titanium-grade4.webp') }}" alt="Titanium Grade 4"
                        class="img-fluid rounded shadow-sm">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong>is a trusted manufacturer,
                            supplier, exporter, importer, and stockist of a wide range of<strong class="text-black">
                                Titanium Grade 4 <a href="{{ route('products') }}">products</a></strong>
                            including <a href="{{ route('products.pipes-tubes') }}">Pipes & Tubes</a>, Pipe Fittings,
                            Flanges, Fasteners, Sheets & Plates, Coils, Wires, Round
                            Bars, Flat Bars, Angles, Welding Rods, Wire Mesh, and other Custom or Hard-to-Find Titanium
                            Grade 4 components.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">Titanium Grade 4</strong> is the strongest among the commercially
                            pure titanium grades. It delivers an exceptional combination of high strength, corrosion
                            resistance, and weldability. Due to its superior mechanical strength and excellent resistance to
                            a wide range of aggressive environments—including chloride-rich and oxidizing
                            atmospheres—Titanium Grade 4 is a preferred material for applications in aerospace, marine,
                            chemical processing, power generation, and medical sectors. Despite its strength, it maintains
                            good formability and is well-suited for demanding engineering and structural applications.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

     {{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Titanium Grade 4 Datasheet</h3>
            <p class="mb-3">
                Get the complete Titanium Grade 4 datasheet with chemical composition,
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
                                    <td>≤ 0.40</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron</td>
                                    <td>≤ 0.50</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon</td>
                                    <td>≤ 0.08</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nitrogen</td>
                                    <td>≤ 0.05</td>
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
                                    <td>0.163 lb/in³</td>
                                    <td>4.51 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Point</td>
                                    <td>3020 °F</td>
                                    <td>1660 °C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elastic Modulus</td>
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
                                    <td>95</td>
                                    <td>125</td>
                                    <td>88</td>
                                    <td>85</td>
                                    <td>94</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tensile Strength (MPa)</td>
                                    <td>655</td>
                                    <td>862</td>
                                    <td>620</td>
                                    <td>586</td>
                                    <td>648</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (0.2%) (ksi)</td>
                                    <td>70</td>
                                    <td>115</td>
                                    <td>75</td>
                                    <td>73</td>
                                    <td>74</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (MPa)</td>
                                    <td>443</td>
                                    <td>793</td>
                                    <td>517</td>
                                    <td>503</td>
                                    <td>510</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elongation (%)</td>
                                    <td>18</td>
                                    <td>10</td>
                                    <td>20</td>
                                    <td>18</td>
                                    <td>20</td>
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
                <h2>Products in Titanium Grade 4</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Titanium Grade 4 (UNS R50700 / W.Nr. 3.7065) </strong>is known for its
                        excellent strength-to-weight ratio and durability in extreme environments. It stands out as the
                        strongest commercially pure titanium grade, making it well-suited for applications requiring
                        superior strength without compromising corrosion resistance or fabrication flexibility.
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
                        Titanium Grade 4 products are manufactured to conform with global specifications:
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
                        <h5>Highest strength among commercially pure titanium grades</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Outstanding resistance to oxidizing and chloride-rich environments</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Lightweight with superior mechanical durability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Good formability and excellent weldability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Biocompatible – suitable for medical and surgical components</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Performs exceptionally in elevated temperature conditions</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Titanium Grade 4</h2>
                <p class="text-center pb-3"><strong class="text-dark">Titanium Grade 4</strong> is extensively used in
                    critical applications where strength, corrosion resistance, and light weight are essential. Its robust
                    mechanical profile and chemical stability make it ideal for:
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Chemical Processing Industry</h5>
                        <p>Used in piping systems, heat exchangers, pressure vessels, and storage tanks handling corrosive
                            fluids like chlorides, acids, and alkalis.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Marine and Offshore Structures</h5>
                        <p>Perfect for saltwater-exposed components, underwater piping, ship hulls, and offshore drilling
                            rigs.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Aerospace & Defense</h5>
                        <p>Utilized in airframes, hydraulic systems, and critical components requiring high
                            strength-to-weight performance.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Power Generation</h5>
                        <p>Employed in condenser tubing, heat exchangers, and nuclear reactor applications for its
                            high-temperature resistance.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Medical & Surgical Applications</h5>
                        <p>Used in orthopedic implants, dental fixtures, and surgical tools due to its non-toxic,
                            non-reactive properties.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Oil & Gas Sector</h5>
                        <p>Found in risers, subsea components, and wellhead equipment exposed to sour gas and brine.</p>
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
                        <h5>Proven expertise in titanium and high-performance metals</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Strong supplier relationships ensuring premium-grade materials</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Fully equipped to deliver precision-based, custom-built solutions</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Committed to international quality standards and certifications</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Focused on prompt service, client satisfaction, and global reach</h5>
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
                                <h4>What is Titanium Grade 4 and why is it important?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Titanium Grade 4 is the strongest among commercially pure titanium grades. It offers an
                                    exceptional combination of high strength, corrosion resistance, and weldability while
                                    maintaining good formability. This makes it ideal for demanding applications in
                                    aerospace, marine, chemical processing, power generation, and medical sectors.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What types of Titanium Grade 4 products are available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP supplies a wide range of Titanium Grade 4 products,
                                    including:
                                <ul>
                                    <li>Seamless and welded pipes (ERW & EFW).</li>
                                    <li>Tubes (capillary, U-bend, boiler, and heat exchanger).</li>
                                    <li>Sheets, plates, coils, and strips.</li>
                                    <li>Round, flat, hex, and square bars.</li>
                                    <li>Pipe fittings (elbows, tees, reducers, caps, stub ends).</li>
                                    <li>Flanges (weld neck, slip-on, blind, socket weld, threaded).</li>
                                    <li>Fasteners (bolts, nuts, screws, washers, studs).</li>
                                    <li>Welding rods, wire mesh, and custom-fabricated components.</li>
                                </ul>
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the key advantages of Titanium Grade 4?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                <ul>
                                    <li>Highest strength among commercially pure titanium grades.</li>
                                    <li>Excellent resistance to oxidizing and chloride-rich environments.</li>
                                    <li>Lightweight with superior mechanical durability.</li>
                                    <li>Biocompatible for medical and surgical applications.</li>
                                    <li>Easy to weld and fabricate, suitable for intricate designs.</li>
                                    <li>Performs reliably in high-temperature and extreme environments.</li>
                                </ul>
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Which industries use Titanium Grade 4 products?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Titanium Grade 4 is widely used in critical industries, such as:
                                <ul>
                                    <li><strong>Chemical Processing:</strong> Piping, pressure vessels, heat exchangers.
                                    </li>
                                    <li><strong>Marine & Offshore:</strong> Ship hulls, underwater piping, offshore rigs.
                                    </li>
                                    <li><strong>Aerospace & Defense:</strong> Airframes, hydraulic systems, structural
                                        components.</li>
                                    <li><strong>Power Generation:</strong> Condenser tubes, heat exchangers, nuclear
                                        applications.</li>
                                    <li><strong>Medical & Surgical:</strong> Orthopedic implants, dental fixtures, surgical
                                        instruments.</li>
                                    <li><strong>Oil & Gas:</strong> Subsea components, risers, and wellhead equipment.</li>
                                </ul>
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose MOKSH TUBES & FITTINGS LLP for Titanium Grade 4 products?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    We provide premium-grade Titanium Grade 4 with precision engineering and strict quality
                                    control. Our global supply chain ensures availability of standard and custom sizes. With
                                    years of expertise in high performance metals, we guarantee reliable service, compliance
                                    with international standards, and exceptional customer support.
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
                    <strong>Moksh Tubes & Fittings LLP</strong> Get in touch with us today for expert advice,
                    project-specific solutions, or to request a quote for your Titanium Grade 4 needs. We are your dedicated
                    partner in advanced materials.
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
                        "name": "What is Titanium Grade 4 and why is it important?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Titanium Grade 4 is the strongest of all commercially pure titanium grades, offering exceptional strength, corrosion resistance, and weldability while maintaining good formability. It is ideal for demanding applications in aerospace, marine, chemical processing, power generation, and medical sectors."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "What types of Titanium Grade 4 products are available?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "MOKSH TUBES & FITTINGS LLP provides a wide range of Titanium Grade 4 products including seamless and welded pipes, tubes (capillary, U-bend, boiler, and heat exchanger), sheets, plates, coils, strips, bars, pipe fittings, flanges, fasteners, welding rods, wire mesh, and custom-fabricated components."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "What are the key advantages of Titanium Grade 4?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Titanium Grade 4 offers the highest strength among commercially pure titanium grades, excellent resistance to oxidizing and chloride-rich environments, lightweight durability, biocompatibility for medical use, easy weldability, and high performance in extreme conditions."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Which industries use Titanium Grade 4 products?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Titanium Grade 4 is used in chemical processing (piping, heat exchangers), marine and offshore (ship hulls, underwater systems), aerospace and defense (airframes, hydraulic systems), power generation (nuclear and condenser tubes), medical (implants, instruments), and oil & gas (subsea and wellhead components)."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Why choose MOKSH TUBES & FITTINGS LLP for Titanium Grade 4 products?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "MOKSH TUBES & FITTINGS LLP provides high-quality Titanium Grade 4 materials with precision manufacturing, strict quality assurance, and global supply capability. With extensive expertise in titanium and specialty metals, the company ensures reliability, compliance, and superior customer support."
                        }
                    }
                ]
            }

        @endverbatim
    </script>
@endsection
