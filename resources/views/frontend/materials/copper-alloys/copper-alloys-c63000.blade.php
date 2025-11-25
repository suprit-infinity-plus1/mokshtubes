@extends('layouts.master')

@section('title', 'Copper Alloy C63000 | High Strength & Durability')

@section('meta_description', 'Copper Alloy C63000 is a high-strength, heat treatable copper alloy offering excellent
    corrosion resistance and durability for marine and industrial use.')

@section('meta_keywords', 'Copper Alloy C63000, heat treatable copper alloy, high strength copper, corrosion resistant
    copper, durable copper alloy, marine copper alloy, industrial copper alloy')
@section('og_image', asset('assets/images/copper-alloys/Copper Alloys C63000.webp'))
@section('og_type', 'article')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Copper Alloy C63000 <br> Heat Treatable & Durable</h1>
                </div>
            </div>
        </div>
    </section>


    <!--End breadcrumb area-->
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Copper Alloys C63000 | Product Overview</h2>
            </div>

            <h2 class="fw-semibold text-center mb-5" style="color: #db7227;">
                Introduction To Copper Alloys C63000
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/copper-alloys/Copper Alloys C63000.webp') }}"alt="Copper Alloys C63000"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a leading manufacturer,
                            supplier, stockist, and exporter of<strong class="text-black"> Aluminum Bronze C63000</strong>,
                            also known as UNS C63000. This
                            high-strength <a href="{{ route('materials.copper-Alloys') }}">copper-based alloy</a> contains
                            <a href="{{ route('materials.aluminium-Alloys') }}">aluminum</a> and <a
                                href="{{ route('materials.nickel-Based-Superalloys') }}">nickel</a>, giving it outstanding
                            mechanical
                            properties, superior wear resistance, and excellent corrosion resistance in marine and
                            industrial environments.

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black"><a href="{{ route('materials.copper-Alloys') }}">Copper Alloys
                                    C63000</a></strong>, is highly valued for its toughness, fatigue resistance, and
                            non-sparking properties. It is ideal for applications requiring high strength, low magnetic
                            permeability, and resistance to abrasion, cavitation, and corrosion.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Copper Alloys C63000 Datasheet</h3>
            <p class="mb-3">
                Get the complete Copper Alloys C63000 datasheet with chemical composition,
                mechanical properties, heat treatment details, and applications.
                Enter your email to receive the PDF instantly.
            </p>

            <!-- Lead Capture Form -->
            <form id="leadForm" method="POST" action="https://mokshtubes.com/datasheet-leads-capture" class="mb-3">
                <input type="hidden" name="_token" value="WNVWvpO4YR2OqZaIJDl2mE3UfyreGys3Vp19brsc" autocomplete="off">
                <div class="row justify-content-center">
                    <input type="hidden" name="pdf" value="copper-alloy-C63000.pdf">
                    <div class="col-md-6 mb-2">
                        <input type="email" name="email" required="" class="form-control p-3"
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
                                    <td>Copper</td>
                                    <td>77.0 – 81.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Aluminum</td>
                                    <td>9.0 – 11.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nickel</td>
                                    <td>4.0 – 5.5</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron</td>
                                    <td>2.0 – 4.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese</td>
                                    <td>0.2 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon</td>
                                    <td>0.10 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Zinc</td>
                                    <td>0.30 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Others</td>
                                    <td>0.50 max (total)</td>
                                </tr>
                                {{--  <tr class="t-row">
                                    <td>Nitrogen</td>
                                    <td>0.20 – 0.30</td>
                                    <td>0.20 – 0.30</td>
                                    <td>0.20 – 0.30</td>
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
                                    <th>Value</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Density</td>
                                    <td>7.6 – 7.7 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Point</td>
                                    <td>1027 – 1049 °C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Thermal Conductivity</td>
                                    <td>25 W/m·K</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Electrical Conductivity</td>
                                    <td>7% IACS</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Modulus of Elasticity</td>
                                    <td>117 GPa</td>
                                </tr>
                                {{-- <tr class="t-row">
                                    <td>Coefficient of Expansion</td>
                                    <td>10.2 µin/in·°F</td>
                                    <td>18.5 µm/m·K</td>
                                </tr> --}}
                                {{-- <tr class="t-row">
                                    <td>Specific Heat Capacity</td>
                                    <td>460 J/kg·K</td>
                                    <td>460 J/kg·K</td>
                                </tr> --}}
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
                                    <th>Annealed (M30)</th>
                                    <th>Drawn & Stress-Relieved (HR50)</th>
                                    <th>Drawn & SR (Large Bars)</th>
                                    <th>Forged (TQ50)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Tensile Strength (ksi / MPa)</td>
                                    <td>90 ksi / 621 MPa</td>
                                    <td>110 ksi / 760 MPa</td>
                                    <td>110 ksi / 760 MPa</td>
                                    <td>87–101 ksi / 600–700 MPa </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (0.2%) (ksi / MPa)</td>
                                    <td>50 ksi / 345 MPa</td>
                                    <td>62 ksi / 470 MPa</td>
                                    <td>60 ksi / 415 MPa</td>
                                    <td>43–50 ksi / 300–350 MPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elongation (%)</td>
                                    <td>15%</td>
                                    <td>15%</td>
                                    <td>15–20%</td>
                                    <td>12–21%</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Hardness Rockwell B</td>
                                    <td>201–248 HB</td>
                                    <td>201–248 HB</td>
                                    <td>201–248 HB</td>
                                    <td>180–240 HB</td>
                                </tr>
                                {{-- <tr class="t-row">
                                    <td>Brinell Hardness </td>
                                    <td>—</td>
                                    <td>—</td>
                                    <td>—</td>
                                    <td>—</td>
                                    <td>—</td>
                                </tr> --}}
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
                <h2>Products in Copper Alloys C63000</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Copper Alloys C63000</strong> is available in:
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
                        Copper Alloys C63000 products are produced to the following global standards:
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
                        <h5>Excellent resistance to seawater corrosion, erosion, and cavitation</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>High mechanical strength and wear resistance</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Non-magnetic and spark-resistant</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Good weldability and machinability</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Maintains strength at elevated temperatures</h5>
                    </div>
                </div>
            </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Copper Alloys C63000</h2>
                <p class="text-center pb-3"><strong class="text-dark">Copper Alloys C63000</strong> is used in demanding
                    applications across industries such as:</p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Marine Engineering</h5>
                        <p>Propeller shafts, valves, and pump components</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Aerospace</h5>
                        <p>Landing gear bushings, wear plates</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Defense</h5>
                        <p>Submarine parts, torpedo components</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Oil & Gas</h5>
                        <p>Valve seats, offshore components</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Chemical Processing</h5>
                        <p>Corrosive fluid fittings, impellers</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Industrial Equipment</h5>
                        <p>Bushings, wear rings, gears, cam followers</p>
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
                        <h5>Wide inventory of C63000 products in all standard and custom sizes</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Guaranteed quality with mill test certificates and TPI approval</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Fast lead times and global supply capabilities</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Custom machining services for bushings, rings, and forged parts</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Serving marine, aerospace, defense, oil & gas, and chemical industries globally</h5>
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
                            <div class="accord-btn">
                                <h4>
                                    What is Aluminum Bronze C63000 and what makes it unique?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Aluminum Bronze C63000, also known as UNS C63000, is a high-strength copper based alloy
                                    containing
                                    aluminum, nickel, and iron. It is known for its exceptional corrosion resistance, wear
                                    resistance,
                                    and non sparking properties, making it ideal for marine, aerospace, oil & gas, and
                                    defense industries.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>
                                    What are the main applications of C63000 Aluminum Bronze?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    C63000 is widely used in marine engineering (propeller shafts, valves, pump components),
                                    aerospace
                                    (landing gear bushings, wear plates), defense (submarine and torpedo parts), oil & gas
                                    (valve seats,
                                    offshore components), chemical processing (corrosive fluid fittings, impellers), and
                                    industrial equipment
                                    (gears, bushings, wear rings, cam followers).
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>
                                    What are the key benefits of using Aluminum Bronze C63000?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>C63000 offers several advantages, including:</p>
                                <ul>
                                    <li>Excellent resistance to seawater, erosion, and cavitation</li>
                                    <li>High strength with superior fatigue and wear resistance</li>
                                    <li>Non magnetic and spark resistant properties for safety critical applications</li>
                                    <li>Good machinability and weldability</li>
                                    <li>Maintains mechanical strength even at elevated temperatures</li>
                                </ul>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>
                                    What C63000 Aluminum Bronze products does MOKSH TUBES & FITTINGS LLP supply?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    We manufacture and supply a complete range of C63000 Aluminum Bronze products such as
                                    seamless & welded pipes,
                                    tubes, rods, bars, sheets, plates, coils, flanges, pipe fittings, fasteners, and
                                    custom fabricated components.
                                    All products meet international standards (ASTM, DIN, UNS).
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>
                                    Why choose MOKSH TUBES & FITTINGS LLP for Aluminum Bronze C63000 materials?
                                </h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP is a trusted global supplier of Aluminum Bronze C63000 with:
                                </p>
                                <ul>
                                    <li>A wide inventory in standard and custom sizes.</li>
                                    <li>Guaranteed quality backed by Mill Test Certificates and TPI approval.</li>
                                    <li>Custom machining services for bushings, rings, and forged parts.</li>
                                    <li>Fast lead times and reliable global export services.</li>
                                    <li>Proven expertise in supplying marine, aerospace, defense, oil & gas, and chemical
                                        industries.</li>
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
                    contact <strong>Moksh Tubes & Fittings LLP</strong> — for custom quotes, technical support, and prompt
                    delivery. We're your trusted partner in non-ferrous alloys.
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
      "name": "What is Aluminum Bronze C63000 and what makes it unique?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Aluminum Bronze C63000, also known as UNS C63000, is a high-strength copper based alloy containing aluminum, nickel, and iron. It is known for its exceptional corrosion resistance, wear resistance, and non sparking properties, making it ideal for marine, aerospace, oil & gas, and defense industries."
      }
    },
    {
      "@type": "Question",
      "name": "What are the main applications of C63000 Aluminum Bronze?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "C63000 is widely used in marine engineering (propeller shafts, valves, pump components), aerospace (landing gear bushings, wear plates), defense (submarine and torpedo parts), oil & gas (valve seats, offshore components), chemical processing (corrosive fluid fittings, impellers), and industrial equipment (gears, bushings, wear rings, cam followers)."
      }
    },
    {
      "@type": "Question",
      "name": "What are the key benefits of using Aluminum Bronze C63000?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "C63000 offers several advantages, including excellent resistance to seawater, erosion, and cavitation; high strength with superior fatigue and wear resistance; non magnetic and spark resistant properties; good machinability and weldability; and maintains mechanical strength even at elevated temperatures."
      }
    },
    {
      "@type": "Question",
      "name": "What C63000 Aluminum Bronze products does MOKSH TUBES & FITTINGS LLP supply?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "MOKSH TUBES & FITTINGS LLP manufactures and supplies a complete range of C63000 Aluminum Bronze products such as seamless & welded pipes, tubes, rods, bars, sheets, plates, coils, flanges, pipe fittings, fasteners, and custom fabricated components. All products meet international standards (ASTM, DIN, UNS)."
      }
    },
    {
      "@type": "Question",
      "name": "Why choose MOKSH TUBES & FITTINGS LLP for Aluminum Bronze C63000 materials?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "MOKSH TUBES & FITTINGS LLP is a trusted global supplier of Aluminum Bronze C63000 offering a wide inventory in standard and custom sizes, guaranteed quality backed by Mill Test Certificates and TPI approval, custom machining services for bushings, rings, and forged parts, fast lead times, and proven expertise in marine, aerospace, defense, oil & gas, and chemical industries."
      }
    }
  ]
}
@endverbatim
</script>
@endsection
