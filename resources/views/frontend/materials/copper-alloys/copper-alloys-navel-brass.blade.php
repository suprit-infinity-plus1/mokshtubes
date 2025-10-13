@extends('layouts.master')

@section('title', 'Naval Brass Alloy | Corrosion Resistant Marine Copper Alloy')
@section('meta_description', 'Naval Brass with excellent corrosion resistance for marine and offshore applications.')
@section('meta_keywords', 'Naval Brass, corrosion resistant brass, marine copper alloy, offshore brass alloy, durable
    brass, C46400 brass')


@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Copper Alloys Naval Brass <br> Corrosion Resistant Grade</h1>

                </div>
            </div>
        </div>
    </section>

    <!--End breadcrumb area-->
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Copper Alloys Naval Brass C11000 | Product Overview</h2>
            </div>

            <h2 class="fw-semibold text-center mb-5" style="color: #db7227;">
                Introduction To Copper Alloys Naval Brass / C11000 / CW004A
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/copper-alloys/copper-alloys-navel-brass.webp') }}"alt="Copper Alloys Naval Brass"
                        class="img-fluid rounded shadow-sm">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a leading manufacturer,
                            supplier, exporter, importer, and stockist of high-quality<strong class="text-black"> Naval
                                Brass (UNS C46400 / CW712R)
                                <a href="{{ route('products') }}">products</a></strong> including Pipes & Tubes, Sheets &
                            Plates, Rods, Bars, Angles, Channels, Flanges, Pipe
                            Fittings, Fasteners, Welding rods, Wire Mesh, and custom or hard-to-find Naval Brass components.

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black"><a href="{{ route('materials.copper-Alloys') }}">Copper Alloys
                                    Naval Brass</a></strong>, is a copper alloy containing zinc and a small amount of tin,
                            offering excellent corrosion resistance, especially in marine and saltwater environments. It
                            combines high strength and toughness with good ductility, making it a preferred material in
                            applications requiring durability, machinability, and resistance to dezincification and seawater
                            corrosion. It is especially suitable for moderately stressed parts in marine hardware and naval
                            applications.
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
                                    <td>Copper</td>
                                    <td>59.0 – 62.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Zinc</td>
                                    <td>Balance</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tin</td>
                                    <td>0.75 – 1.25</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Lead</td>
                                    <td>0.05 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron</td>
                                    <td>0.06 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Others</td>
                                    <td>0.30 max (Total)</td>
                                </tr>
                                {{--  <tr class="t-row">
                                    <td>Others</td>
                                    <td>0.50 max (total)</td>
                                </tr> --}}
                                {{-- <tr class="t-row">
                                    <td>Others</td>
                                    <td>0.50 max (total)</td>
                                </tr> --}}
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
                                    <th>Imperial</th>
                                    <th>Metric</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Density</td>
                                    <td>0.303 lb/in³</td>
                                    <td>8.39 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Point</td>
                                    <td>1620 – 1680 °F</td>
                                    <td>882 – 916 °C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Electrical Conductivity</td>
                                    <td>28% IACS</td>
                                    <td>16 MS/m</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Thermal Conductivity</td>
                                    <td>67 Btu/ft·hr·°F</td>
                                    <td>116 W/m·K</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Modulus of Elasticity</td>
                                    <td>15.0 x 10³ ksi</td>
                                    <td>103 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Coefficient of Expansion</td>
                                    <td>-</td>
                                    <td>19 x 10⁻⁶ /°C</td>
                                </tr>
                                {{-- <tr class="t-row">
                                    <td>Coefficient of Expansion</td>
                                    <td>9.8 x 10⁻⁶ /°F</td>
                                    <td>17.6 x 10⁻⁶ /°C</td>
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
                                    <th>Annealed</th>
                                    <th>Hot-Finished</th>
                                    <th>Cold-Drawn</th>
                                    <th>Hot-Rolled</th>
                                    <th>Sheet</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Tensile Strength (ksi / MPa)</td>
                                    <td>55–88 ksi / 379–607 MPa </td>
                                    <td>55–88 ksi / 379–607 MPa</td>
                                    <td>55–88 ksi / 379–607 MPa</td>
                                    <td>55–88 ksi / 379–607 MPa</td>
                                    <td>55–88 ksi / 379–607 MPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (0.2%) (ksi / MPa)</td>
                                    <td>25–66 ksi / 172–455 MPa</td>
                                    <td>25–66 ksi / 172–455 MPa</td>
                                    <td>25–66 ksi / 172–455 MPa</td>
                                    <td>25–66 ksi / 172–455 MPa</td>
                                    <td>25–66 ksi / 172–455 MPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elongation (%)</td>
                                    <td>50%</td>
                                    <td>50%</td>
                                    <td>50%</td>
                                    <td>50%</td>
                                    <td>50%</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Brinell Hardness (HBW)</td>
                                    <td>150 HB</td>
                                    <td>150 HB</td>
                                    <td>150 HB</td>
                                    <td>150 HB</td>
                                    <td>150 HB</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Rockwell Hardness (B)</td>
                                    <td>60–80 B</td>
                                    <td>60–80 B</td>
                                    <td>60–80 B</td>
                                    <td>60–80 B</td>
                                    <td>60–80 B</td>
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
                <h2>Products in Copper Alloys Naval Brass</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Copper Alloys Naval Brass</strong> is available in:
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
                        Copper Alloys Naval Brass products are produced to the following global standards:
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
                        <h5>Superior resistance to saltwater, brine, and biofouling environments.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Capable of withstanding mechanical stress, vibrations, and loads in structural and underwater
                            applications.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Well-suited for machining, turning, and forming operations with minimal tool wear.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Safe for use in hazardous or flammable environments such as shipyards and oil rigs.</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Durable material with reduced maintenance and high resistance to dezincification.</h5>
                    </div>
                </div>
            </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Copper Alloys Naval Brass</h2>
                <p class="text-center pb-3"><strong class="text-dark">Copper Alloys Naval Brass</strong> is widely used in
                    applications where exposure to seawater, friction, and high stress are common. Its balance of strength,
                    corrosion resistance, and workability makes it a top choice for:</p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Marine Hardware & Fittings</h5>
                        <p>Propeller shafts, turnbuckles, nuts, bolts, and seawater pump components.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Shipbuilding & Defense</h5>
                        <p>Used in naval ships for heat exchanger tubes, hulls, keels, and seawater piping.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Desalination & Heat Exchangers</h5>
                        <p>Tubes, shells, and plates in evaporators, condensers, and heaters.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Architectural Applications</h5>
                        <p>Decorative railings, cladding, and fixtures where a golden appearance is desired.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Automotive & Industrial Machinery</h5>
                        <p>Bushings, bearings, valve components, and gears exposed to wear and seawater.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Electrical & Instrumentation</h5>
                        <p>Connectors, terminals, and switch components needing both conductivity and corrosion resistance.
                        </p>
                    </div>
                </div>

                {{-- <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-strategies"></i></div>
                        <h5>Automotive & Transportation</h5>
                        <p>Battery cables, alternator windings, and electric vehicle components.</p>
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
                        <h5>In-House Manufacturing of Naval Brass Products</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Wide Range of Stock & Customization Options</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Expertise in Marine & High-Performance Alloys</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Global Shipping & Fast Turnaround Time</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Strict Adherence to International Quality Standards</h5>
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
                            <h2>FAQ's - ETP Copper</h2>
                        </div>

                        <!-- Q1 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What is ETP Copper and why is it widely used in industries?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    ETP Copper, also known as Electrolytic Tough Pitch Copper, is the most widely used
                                    commercial copper grade with a minimum of 99.90% copper content.
                                    It offers excellent electrical and thermal conductivity, ductility, and corrosion
                                    resistance.
                                    With nearly 100% IACS conductivity, ETP Copper is the preferred choice in electrical,
                                    electronic, and industrial applications that demand efficiency and long-term
                                    reliability.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the key benefits of using ETP Copper?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    The benefits of ETP Copper include superior electrical conductivity, excellent heat
                                    transfer, and high formability for easy fabrication.
                                    It performs reliably in atmospheric and industrial environments and is suitable for
                                    welding, brazing, and soldering.
                                    Its versatility makes it ideal for electrical systems, cooling equipment, architectural
                                    applications, and automotive components.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the main applications of ETP Copper in different sectors?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    ETP Copper is extensively used in electrical wiring, busbars, switchgear, and
                                    transformers due to its high conductivity.
                                    It is also applied in PCBs, terminals, and connectors in the electronics industry, while
                                    telecom and data sectors use it for cables, grounding, and RF shielding.
                                    Other applications include renewable energy systems, HVAC, refrigeration, architectural
                                    designs, and automotive parts such as electric vehicle components.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What ETP Copper products does MOKSH TUBES & FITTINGS LLP provide?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP supplies a comprehensive range of ETP Copper products
                                    including seamless and welded pipes, tubes, sheets, plates, coils, busbars, strips,
                                    foils,
                                    rods, flats, fasteners, flanges, pipe fittings, and custom-fabricated components.
                                    All products meet international quality standards and are available in both standard and
                                    customized specifications for various industrial needs.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose MOKSH TUBES & FITTINGS LLP for ETP Copper materials?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP is a leading manufacturer, supplier, and exporter of ETP
                                    Copper with advanced facilities and strict quality checks.
                                    The company ensures reliable global supply, competitive pricing, and customized
                                    solutions to meet client-specific requirements.
                                    With proven expertise across electrical, automotive, telecom, and renewable energy
                                    sectors, it delivers high-quality ETP Copper products trusted worldwide.
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
                    contact <strong>Moksh Tubes & Fittings LLP</strong> — your trusted partner for premium brass alloys.</p>
               <!-- Call button -->
                <a href="javascript:void(0);" class="contact-cta-btn" data-bs-toggle="modal"
                    data-bs-target="#contactFormModal">
                    Get in Touch
                </a>
            </div>
        </div>
    </section>





@endsection
