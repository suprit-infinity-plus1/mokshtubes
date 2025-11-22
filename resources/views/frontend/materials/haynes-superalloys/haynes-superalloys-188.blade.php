@extends('layouts.master')

@section('title', 'Haynes Superalloys 188 - Premium Oxidation Resistant Alloy')
@section('meta_description', 'Premium Haynes Alloy 188 offers superior oxidation resistance at high temperatures. Ideal for aerospace and gas turbine applications.')
@section('meta_keywords', 'Haynes Superalloys 188, Haynes Alloy 188, High Temperature Alloy, Oxidation Resistant Alloy, Corrosion Resistant Alloy, Aerospace Alloys, Gas Turbine Alloys, Industrial Haynes Alloys, Chemical Processing Haynes, Power Industry Haynes')
@section('og_image', asset('assets/images/haynes/haynes-alloy-188.webp'))
@section('og_type', 'article')
@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/haynes/haynes-alloy-188.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Haynes Superalloy 188 <br> Premium Oxidation Resistant Alloy</h1>
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
                Introduction To Haynes Superalloys 188 / UNS N06188
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/haynes/haynes-alloy-188.webp') }}" alt="Haynes-188"
                        class="img-fluid rounded shadow-sm">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a manufacturer, supplier,
                            exporter, importer, and stockist of a wide range of <strong class="text-black">Haynes 188 (UNS
                                N06188) <a href="{{ route('products') }}">products</a></strong>. Including Pipes & Tubes,
                            Pipe Fittings, Flanges, Fasteners, Sheets & Plates, Coils, Wires, Round Bars, Flat Bars, Angles,
                            Channels, Welding Rods, Wire Mesh, and other custom and<a
                                href="{{ route('materials.hard-To-Find-Special-Alloys') }}"> hard-to-find</a> Haynes 188
                            products.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black"><a href="{{ route('materials.haynes-Superalloys') }}">Haynes
                                    Superalloys 188</a></strong> is a cobalt-based superalloy known for its excellent
                            strength, corrosion resistance, and exceptional resistance to oxidation and carburization at
                            high temperatures. It is widely used in aggressive high-temperature environments, especially
                            where resistance to thermal fatigue and creep is critical.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Haynes superalloys 188 Datasheet</h3>
            <p class="mb-3">
                Get the complete Haynes super alloys 188 datasheet with chemical composition,
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
                                    <td>Cobalt</td>
                                    <td>Balance</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium</td>
                                    <td>22.0 – 24.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nickel</td>
                                    <td>14.5 – 16.5</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Molybdenum</td>
                                    <td>4.0 – 5.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron</td>
                                    <td>≤ 2.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese</td>
                                    <td>≤ 1.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon</td>
                                    <td>≤ 0.35</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon</td>
                                    <td>≤ 0.10</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Aluminum</td>
                                    <td>≤ 0.30</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Titanium</td>
                                    <td>≤ 0.30</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Phosphorus</td>
                                    <td>≤ 0.015</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sulfur</td>
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
                                    <td>0.302 lb/in³</td>
                                    <td>8.36 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Point</td>
                                    <td>2475–2650 °F</td>
                                    <td>1357–1454 °C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Specific Heat</td>
                                    <td>0.11 Btu/lb·°F</td>
                                    <td>460 J/kg·°C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Curie Temperature</td>
                                    <td>—</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Magnetic Permeability at 200 oersteds (15.9 kA/m)</td>
                                    <td>1.02</td>
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
                                    <td>143</td>
                                    <td>150</td>
                                    <td>125 (min)</td>
                                    <td>144</td>
                                    <td>142</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tensile Strength (MPa)</td>
                                    <td>986</td>
                                    <td>1034</td>
                                    <td>862 (min)</td>
                                    <td>991</td>
                                    <td>982</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (0.2%) (ksi)</td>
                                    <td>70</td>
                                    <td>75</td>
                                    <td>55 (min)</td>
                                    <td>70</td>
                                    <td>70</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (MPa)</td>
                                    <td>483</td>
                                    <td>517</td>
                                    <td>379 (min)</td>
                                    <td>483</td>
                                    <td>483</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elongation (%)</td>
                                    <td>50</td>
                                    <td>45</td>
                                    <td>45 (min)</td>
                                    <td>50.6</td>
                                    <td>50.9</td>
                                </tr>
                                {{-- <tr class="t-row">
                                    <td>Reduction of Area (%)</td>
                                    <td>73 %</td>
                                    <td>–</td>
                                    <td>–</td>
                                    <td>–</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Modulus of Elasticity (GPa)</td>
                                    <td>211 GPa</td>
                                    <td>211 GPa</td>
                                    <td>sheet same as plate</td>
                                    <td>–</td>
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
                <h2>Products in Haynes Superalloys 188</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Haynes Superalloys 188</strong> is available in a variety of forms,
                        complying with ASTM, ASME, and other standards:
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
                        Haynes Superalloys 188 products are produced to the following global standards:
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
                        <h5>Exceptional high-temperature strength and creep resistance</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Superior oxidation and carburization resistance up to ~1093 °C (2000 °F)</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Excellent thermal fatigue resistance</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Good fabricability and weldability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Stability in harsh corrosive and oxidizing environments</h5>
                    </div>
                </div>
                {{-- <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Economical compared to other titanium grades with higher alloy content</h5>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Haynes Superalloys 188</h2>
                <p class="text-center pb-3"><strong class="text-dark">Haynes Superalloys 188</strong> Widely used in
                    industries requiring high-performance alloys under severe conditions:
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Aerospace and Gas Turbine Components</h5>
                        <p>Combustion chambers, turbine blades, hot section components</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Industrial Furnaces and Heat Treating Equipment</h5>
                        <p>Furnace parts exposed to extreme temperatures</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Chemical Processing</h5>
                        <p>Reactors and heat exchangers in corrosive environments</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Power Generation</h5>
                        <p>Components in steam turbines and boilers</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Environmental Control Equipment</h5>
                        <p>Parts for incinerators and flue gas treatment</p>
                    </div>
                </div>

                {{-- <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Medical and Pharmaceutical Equipment</h5>
                        <p>Favored for surgical tools, implants, and cleanroom processing systems because of its purity and
                            biocompatibility.</p>
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
                        <h5>Extensive experience in manufacturing and supplying cobalt-based superalloys</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Strict quality controls ensuring compliance with industry standards</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Wide global supply chain for on-time delivery</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Customized product solutions and expert technical support</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Dedicated customer support and technical guidance</h5>
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
                                <h4>What is Haynes 188 and why is it used in high-temperature applications?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Haynes 188 (UNS N06188) is a cobalt-based superalloy well known for its exceptional
                                    strength, corrosion resistance, and remarkable resistance to oxidation and carburization
                                    at elevated temperatures. It performs reliably in aggressive environments where
                                    components are exposed to extreme heat and stress, making it one of the most trusted
                                    alloys in aerospace, chemical processing, and power generation industries.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the key properties of Haynes 188 alloy?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Haynes 188 exhibits superior high-temperature strength, creep resistance, and stability
                                    in harsh conditions. It offers a tensile strength of up to 150 ksi, yield strength of 70
                                    ksi, and elongation of around 50%. With excellent resistance to oxidation and
                                    carburization up to 2000°F (1093°C), combined with good thermal fatigue resistance,
                                    fabricability, and weldability, this alloy provides long-lasting performance in
                                    demanding applications.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Which industries commonly use Haynes 188 products?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Haynes 188 is widely used in aerospace for gas turbine components such as combustion
                                    chambers, hot section parts, and turbine blades, in industrial furnaces for
                                    heat-treating equipment, in chemical processing for reactors and heat exchangers
                                    handling corrosive media, and in power generation for steam turbine and boiler parts. It
                                    is also applied in environmental control equipment such as incinerators and flue gas
                                    treatment systems due to its ability to withstand aggressive thermal and chemical
                                    conditions.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What types of Haynes 188 products are available from MOKSH TUBES & FITTINGS LLP?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP supplies a complete range of Haynes 188 products including
                                    seamless and welded pipes, tubes, sheets, plates, coils, bars, flanges, pipe fittings,
                                    fasteners, welding rods, wire mesh, and custom fabricated components. All materials are
                                    produced according to ASTM, ASME, and other international standards, ensuring superior
                                    quality, consistency, and performance for critical industrial applications.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose MOKSH TUBES & FITTINGS LLP for Haynes 188 materials?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP is a trusted manufacturer and global supplier of cobalt based
                                    superalloys like Haynes 188, offering expertise, strict quality assurance, and a robust
                                    supply chain. With a focus on custom manufacturing, technical support, and timely
                                    delivery, the company ensures clients receive high performance materials that meet
                                    industry standards and project requirements, making it a reliable partner for industries
                                    operating in extreme environments.
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
                    <strong>Moksh Tubes & Fittings LLP</strong> your trusted partner in specialty alloys.
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
                "name": "What is Haynes 188 and why is it used in high-temperature applications?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Haynes 188 (UNS N06188) is a cobalt-based superalloy well known for its exceptional strength, corrosion resistance, and remarkable resistance to oxidation and carburization at elevated temperatures. It performs reliably in aggressive environments where components are exposed to extreme heat and stress, making it one of the most trusted alloys in aerospace, chemical processing, and power generation industries."
                }
                },
                {
                "@type": "Question",
                "name": "What are the key properties of Haynes 188 alloy?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Haynes 188 exhibits superior high-temperature strength, creep resistance, and stability in harsh conditions. It offers a tensile strength of up to 150 ksi, yield strength of 70 ksi, and elongation of around 50%. With excellent resistance to oxidation and carburization up to 2000°F (1093°C), combined with good thermal fatigue resistance, fabricability, and weldability, this alloy provides long-lasting performance in demanding applications."
                }
                },
                {
                "@type": "Question",
                "name": "Which industries commonly use Haynes 188 products?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Haynes 188 is widely used in aerospace for gas turbine components such as combustion chambers, hot section parts, and turbine blades, in industrial furnaces for heat-treating equipment, in chemical processing for reactors and heat exchangers handling corrosive media, and in power generation for steam turbine and boiler parts. It is also applied in environmental control equipment such as incinerators and flue gas treatment systems due to its ability to withstand aggressive thermal and chemical conditions."
                }
                },
                {
                "@type": "Question",
                "name": "What types of Haynes 188 products are available from MOKSH TUBES & FITTINGS LLP?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "MOKSH TUBES & FITTINGS LLP supplies a complete range of Haynes 188 products including seamless and welded pipes, tubes, sheets, plates, coils, bars, flanges, pipe fittings, fasteners, welding rods, wire mesh, and custom fabricated components. All materials are produced according to ASTM, ASME, and other international standards, ensuring superior quality, consistency, and performance for critical industrial applications."
                }
                },
                {
                "@type": "Question",
                "name": "Why choose MOKSH TUBES & FITTINGS LLP for Haynes 188 materials?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "MOKSH TUBES & FITTINGS LLP is a trusted manufacturer and global supplier of cobalt based superalloys like Haynes 188, offering expertise, strict quality assurance, and a robust supply chain. With a focus on custom manufacturing, technical support, and timely delivery, the company ensures clients receive high performance materials that meet industry standards and project requirements, making it a reliable partner for industries operating in extreme environments."
                }
                }
            ]
            }
        
        @endverbatim
    </script>
@endsection
