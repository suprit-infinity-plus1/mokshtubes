@extends('layouts.master')

@section('title', '904L Stainless – Premium Corrosion Resistant Alloy') <!-- 53 chars -->
@section('meta_description', '904L stainless steel pipes, tubes, and fittings provide superior corrosion resistance for
    chemical, marine, and pharmaceutical industries.')
@section('meta_keywords', '904L Stainless Steel, Corrosion Resistant Alloy, 904L Pipes, 904L Tubes, 904L Fittings,
    Chemical Industry Alloys, Marine Industry Alloys, Pharmaceutical Industry Alloys, High Strength Stainless Steel,
    Industrial Corrosion Resistant Alloys')
@section('og_image', asset('assets/images/super-austenitic-stainless-steel/super-austenitic-stainless-steel-904L.webp'))
@section('og_type', 'article')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area"
        style="background-image: url(/assets/images/super-austenitic-stainless-steel/super-austenitic-stainless-steel-904L.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>904L Stainless <br> Corrosion Resistant & High Strength Alloy</h1>
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
                Introduction To Alloy 904L / UNS N08904 / 1.4539
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/super-austenitic-stainless-steel/super-austenitic-stainless-steel-904L.webp') }}"
                        alt="Alloy 904L" class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a leading manufacturer,
                            supplier, exporter, importer, and stockist of premium-grade<strong class="text-black"> Alloy
                                904L (UNS N08904) <a href="{{ route('products') }}">products</a>,</strong>
                            including <a href="{{ route('products.pipes-tubes') }}">Pipes & Tubes</a>, Pipe Fittings,
                            Flanges, Sheets, Plates, Coils, Bars, Wire, and Custom
                            Fabricated Components.

                        <p> <strong class="text-black">Alloy 904L</strong> is a high-alloy austenitic stainless steel
                            developed for exceptional corrosion resistance in harsh environments. With elevated levels of
                            chromium, <a href="{{ route('materials.nickel-Based-Superalloys') }}">nickel</a>, molybdenum,
                            and added copper, 904L offers superior resistance to sulfuric,
                            phosphoric, and acetic acids, as well as chloride-induced pitting and crevice corrosion.
                            Originally developed for the chemical industry, it also performs excellently in marine and
                            offshore applications. This non-stabilized, low-carbon alloy offers excellent formability,
                            weldability, and toughness across a wide temperature range.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Super Austentic 904L Datasheet</h3>
            <p class="mb-3">
                Get the complete Super Austentic 904L datasheet with chemical composition,
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

    <!-- End Datasheet Download Section -->


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
                                    <td>Nickel</td>
                                    <td>23.0 – 28.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium</td>
                                    <td>19.0 – 23.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon</td>
                                    <td>0.02 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon</td>
                                    <td>1.0 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese</td>
                                    <td>2.0 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Molybdenum</td>
                                    <td>4.0 – 5.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Phosphorus</td>
                                    <td>0.045 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sulfur</td>
                                    <td>0.035 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron</td>
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
                                    <td>0.289 lb/in³</td>
                                    <td>8.00 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Point</td>
                                    <td>2475 – 2550 °F</td>
                                    <td>1357 – 1399 °C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Modulus of Elasticity – Tension</td>
                                    <td>28.0 × 10³ ksi</td>
                                    <td>193 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Modulus of Elasticity – Compression</td>
                                    <td>28.0 × 10³ ksi</td>
                                    <td>193 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Modulus of Elasticity – Torsion</td>
                                    <td>10.0 × 10³ ksi</td>
                                    <td>69 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Poisson’s Ratio</td>
                                    <td>0.30</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Curie Temperature</td>
                                    <td>Not typically applicable</td>
                                    <td>Not typically applicable</td>
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
                                    <th>Cold Worked</th>
                                    <th>Solution Treated</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Tensile Strength (ksi / MPa)</td>
                                    <td>75–95 ksi / 520–655 MPa</td>
                                    <td>85–110 ksi / 585–760 MPa</td>
                                    <td>75–95 ksi / 520–655 MPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (0.2%) (ksi / MPa)</td>
                                    <td>30–50 ksi / 205–345 MPa</td>
                                    <td>55–85 ksi / 380–585 MPa</td>
                                    <td>30–55 ksi / 205–380 MPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elongation (%)</td>
                                    <td>30–55%</td>
                                    <td>15–30%</td>
                                    <td>30–55%</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Hardness (Rockwell B / C)</td>
                                    <td>70–90 B</td>
                                    <td>85–95 B</td>
                                    <td>75–90 B</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Brinell Hardness (HB)</td>
                                    <td>150–200 HBB</td>
                                    <td>180–230 HB</td>
                                    <td>150–200 HB</td>
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
                <h2>Products in Alloy 904L</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Alloy 904L</strong> is commonly supplied as:
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
                        We supply Alloy 904L materials in accordance with the most stringent industry standards: </p>
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
                        <h5>Exceptional resistance to strong reducing acids (especially sulfuric acid)</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Superior pitting and crevice corrosion resistance in chloride media</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Excellent toughness and ductility at both low and high temperatures</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Fully austenitic structure provides excellent formability and weldability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Non-magnetic and low carbon content prevents intergranular corrosion</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Alloy 904L</h2>
                <p class="text-center pb-3"><strong class="text-dark">Alloy 904L</strong> is designed for use in
                    high-temperature, high-stress, and highly oxidizing environments. Its unique combination of strength,
                    oxidation resistance, and formability makes it suitable for:
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Marine Engineering & Offshore</h5>
                        <p>Used in seawater cooling systems, ballast water systems, and marine equipment for outstanding
                            resistance to chloride stress corrosion and crevice attack.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Chemical & Petrochemical Processing</h5>
                        <p>Ideal for equipment handling sulfuric, phosphoric, and acetic acids such as heat exchangers,
                            reactors, tanks, and process vessels.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Oil & Gas Industry</h5>
                        <p>Preferred for piping systems, separators, heat exchangers, and offshore platforms due to
                            resistance in sour service and aggressive environments.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Pulp & Paper Industry</h5>
                        <p>Used in bleaching and chemical recovery areas where resistance to acidic compounds is essential.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Desalination & Water Treatment</h5>
                        <p>Excellent choice for evaporators, condenser tubes, and brine heaters in high-salinity
                            environments.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Pharmaceutical & Food Industry</h5>
                        <p>Used in clean-in-place systems and high-purity fluid processing due to its hygienic,
                            corrosion-resistant properties.</p>
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
                        <h5>Leading manufacturer of corrosion-resistant alloy products</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>In-house testing and full traceability with MTC certification</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Global export capability with fast turnaround</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Custom sizes, dimensions, and grades on request</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Trusted by major clients in marine, oil & gas, and chemical sectors</h5>
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
                                <h4>What is Alloy 904L stainless steel and what makes it special?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Alloy 904L (UNS N08904) is a premium-grade austenitic stainless steel designed for
                                    exceptional corrosion resistance in aggressive environments. With a high content of
                                    chromium, nickel, molybdenum, and added copper, it provides outstanding resistance to
                                    sulfuric, phosphoric, and acetic acids, as well as chloride induced pitting and crevice
                                    corrosion. Its low carbon content prevents intergranular corrosion while ensuring
                                    excellent toughness, weldability, and formability.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What Alloy 904L products does Moksh Tubes & Fittings LLP offer?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Moksh Tubes & Fittings LLP supplies a complete range of Alloy 904L products including
                                    seamless and welded pipes, capillary and U-bend tubes, boiler and heat exchanger tubes,
                                    sheets, plates, coils, strips, round bars, hex bars, square bars, flanges, pipe
                                    fittings, fasteners, wire, and custom-fabricated components. All products meet
                                    international standards and are available in various sizes and dimensions for industrial
                                    applications.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the main advantages of using Alloy 904L?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Alloy 904L provides superior resistance to strong reducing acids, particularly sulfuric
                                    acid, making it highly reliable in chemical and industrial processes. It resists pitting
                                    and crevice corrosion in chloride rich environments, maintains excellent toughness at
                                    both low and high temperatures, and is fully austenitic with excellent weldability and
                                    formability. Being non-magnetic with a low carbon content, it also minimizes the risk of
                                    intergranular corrosion, ensuring long service life.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Which industries commonly use Alloy 904L materials?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Alloy 904L is widely used across multiple industries such as marine engineering and
                                    offshore equipment, chemical and petrochemical processing, oil and gas production, pulp
                                    and paper processing, desalination and water treatment plants, pharmaceutical systems,
                                    and food industry equipment. Its ability to withstand strong acids, chloride rich
                                    seawater, and aggressive industrial chemicals makes it a preferred choice for critical
                                    applications.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose Moksh Tubes & Fittings LLP for Alloy 904L supply?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Moksh Tubes & Fittings LLP is a trusted manufacturer, supplier, and exporter of
                                    high quality Alloy 904L products with in-house testing, mill test certification, and
                                    complete traceability. The company offers custom sizes, quick delivery, and global
                                    export capabilities to meet client requirements. With extensive industry experience and
                                    a strong reputation in marine, chemical, and oil & gas sectors, Moksh Tubes & Fittings
                                    LLP ensures reliable supply and superior product performance.
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
                    <strong>Moksh Tubes & Fittings LLP</strong> Your Trusted Partner for ALLOY 904L Products
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
                "name": "What is Alloy 904L stainless steel and what makes it special?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Alloy 904L (UNS N08904) is a high-performance austenitic stainless steel with excellent corrosion resistance in aggressive environments. Containing high levels of chromium, nickel, molybdenum, and copper, it resists sulfuric, phosphoric, and acetic acids, as well as chloride-induced pitting and crevice corrosion. Its low carbon content prevents intergranular corrosion while ensuring good weldability, toughness, and formability."
                }
                },
                {
                "@type": "Question",
                "name": "What Alloy 904L products does Moksh Tubes & Fittings LLP offer?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Moksh Tubes & Fittings LLP supplies a wide range of Alloy 904L products such as seamless and welded pipes, capillary and U-bend tubes, boiler and heat exchanger tubes, sheets, plates, coils, strips, round bars, hex bars, square bars, flanges, pipe fittings, fasteners, wire, and custom-fabricated components. All items meet international standards and are available in various sizes and specifications."
                }
                },
                {
                "@type": "Question",
                "name": "What are the main advantages of using Alloy 904L?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Alloy 904L provides outstanding resistance to strong reducing acids like sulfuric acid, as well as excellent resistance to pitting and crevice corrosion in chloride-rich environments. It maintains toughness at both low and high temperatures, offers good weldability and formability, and remains non-magnetic. Its low carbon content minimizes intergranular corrosion, ensuring long-term durability."
                }
                },
                {
                "@type": "Question",
                "name": "Which industries commonly use Alloy 904L materials?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Alloy 904L is used in industries such as marine and offshore engineering, chemical and petrochemical processing, oil and gas production, pulp and paper, desalination, water treatment, pharmaceuticals, and food processing. Its high corrosion resistance in acidic and chloride environments makes it suitable for critical applications in harsh conditions."
                }
                },
                {
                "@type": "Question",
                "name": "Why choose Moksh Tubes & Fittings LLP for Alloy 904L supply?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Moksh Tubes & Fittings LLP provides certified, high-quality Alloy 904L products with in-house testing, mill test certification, and complete traceability. Offering custom dimensions, fast delivery, and global export support, the company is trusted for consistent quality, expertise, and reliability in marine, chemical, and oil & gas sectors."
                }
                }
            ]
            }

        @endverbatim
    </script>
@endsection
