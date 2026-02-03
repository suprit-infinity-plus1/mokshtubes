@extends('layouts.master')

@section('title', 'Inconel 600 | Premium Heat & Corrosion Shield')
@section('meta_description',
    'Inconel 600 offers exceptional oxidation & corrosion resistance at high temperatures—ideal
    for heat exchangers, furnaces, and chemical plants.')
@section('meta_keywords',
    'Inconel 600, Premium Heat Resistant Alloy, Corrosion Resistant Alloy, Oxidation Resistant
    Alloy, Nickel Alloys, Heat Exchanger Alloys, Furnace Alloys, Chemical Plant Alloys, High Temperature Alloys, Industrial
    Heat Resistant Alloys')
@section('og_image', asset('assets/images/inconel/inconel-600.webp'))
@section('og_type', 'article')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/inconel/inconel-600.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Inconel 600 <br> High-Temperature Strength & Oxidation</h1>
                    <!-- Add your extra content here -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        INCONEL® 600 is a nickel-chromium-iron alloy engineered for high-temperature strength, oxidation
                        resistance, and corrosion resistance in both oxidizing and reducing environments.
                        Moksh Tubes & Fittings LLP supplies certified INCONEL 600 for aerospace, nuclear, chemical
                        processing, heat treatment, marine, and cryogenic applications.</p>
                    <!-- End extra content -->
                </div>
            </div>
        </div>
    </section>

       <div class="sticky-top bg-white border-bottom material-tabs  w-100">
        <div class="container">
            <a href="#overview">Overview</a> |
            <a href="#composition">Chemical Composition</a> |
            <a href="#heat-treatment">Heat Treatment</a> |
            <a href="#mechanical">Mechanical Properties</a> |
            <a href="#price">Advantages</a> |
            <a href="#applications">Applications</a> |
            <a href="#faq">FAQ</a> |
            <a href="#contact us">Contact Us</a>
        </div>
    </div>

    <!--End breadcrumb area-->
    <section id="overview" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Product Overview</h2>
            </div>

            <h2 class="fw-semibold text-center mb-5" style="color: #db7227;">
                Introduction To Inconel 600 / Alloy 600 / UNS N06600 </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/inconel/inconel-600.webp') }}" alt="Inconel 600"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a leading,
                            supplier, exporter, importer, and stockist of high performance <strong
                                class="text-black">INCONEL 600 (UNS N06600)</strong>
                            <a href="{{ route('products') }}">products</a>. We offer a wide range of forms including <a
                                href="{{ route('products.pipes-tubes') }}">Pipes & Tubes</a>, Pipe Fittings, Flanges,
                            Fasteners, Sheets & Plates, Coils, Wires, Round Bars, Flat Bars, Angles, Channels, Welding Rods,
                            Wire Mesh, and other custom and hard to find Inconel 600 products.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">INCONEL 600</strong class="text-black"> is a <a
                                href="{{ route('materials.nickel-Based-Superalloys') }}">nickel</a>-chromium iron
                            <a href="{{ route('materials.hastelloy') }}">alloy</a> designed for service temperatures from
                            cryogenic to elevated levels in the range of 2000°F
                            (1093°C). Known for its high strength and excellent oxidation and corrosion resistance,
                            particularly in high temperature applications,<strong class="text-black"> INCONEL 600</strong>
                            also exhibits great mechanical
                            properties and is readily weldable and formable. It is immune to chloride ion stress-corrosion
                            cracking, non magnetic, and maintains stability under both oxidizing and reducing conditions.
                            These properties make it ideal for a variety of industries including chemical processing,
                            aerospace, marine, and heat treating equipment.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Inconel 600 Datasheet</h3>
            <p class="mb-3">
                Get the complete Inconel 600 datasheet with chemical composition,
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

                                <th>Element</th>
                                <th>Composition (%)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">

                                <td>Nickel</td>
                                <td>72.0 min (Balance)</td>
                                </tr>

                                <td>Chromium</td>
                                <td>14.0 – 17.0</td>
                                </tr>

                                <td>Iron</td>
                                <td>6.0 – 10.0</td>
                                </tr>

                                <td>Carbon</td>
                                <td>0.15 max</td>
                                </tr>

                                <td>Manganese</td>
                                <td>1.0 max</td>
                                </tr>

                                <td>Sulfur</td>
                                <td>0.015 max</td>
                                </tr>

                                <td>Silicon</td>
                                <td>0.5 max</td>
                                </tr>

                                <td>Copper</td>
                                <td>0.5 max</td>
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

                                <th>Property</th>
                                <th>Imperial</th>
                                <th>Metric</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">

                                <td>Density</td>
                                <td>0.306 lb/in³</td>
                                <td>8.47 Mg/m³</td>
                                </tr>

                                <td>Melting Range</td>
                                <td>2470–2575 °F</td>
                                <td>1354–1413 °C</td>
                                </tr>

                                <td>Specific Heat</td>
                                <td>0.106 Btu/lb·°F</td>
                                <td>444 J/kg·°C</td>
                                </tr>

                                <td>Electrical Resistivity</td>
                                <td>620 ohm·circ mil/ft</td>
                                <td>1.03 µΩ·m</td>
                                </tr>

                                <td>Curie Temperature</td>
                                <td>–192 °F</td>
                                <td>–124 °C</td>
                                </tr>

                                <td>Permeability at 200 oersted (15.9 kA/m)</td>
                                <td>1.010</td>
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

                                <th>Property</th>
                                <th>Rod & Bar (CD, Annealed)</th>
                                <th>Rod & Bar (CD, As-Drawn)</th>
                                <th>Rod & Bar (HF, Annealed)</th>
                                <th>Rod & Bar (HF)</th>
                                <th>Plate (Annealed)</th>
                                <th>Plate (As-Rolled)</th>
                                <th>Sheet (Annealed)</th>
                                <th>Sheet (Hard)</th>
                                <th>Strip (Annealed)</th>
                                <th>Strip (Spring Temper)</th>
                                <th>Tube/Pipe (HF)</th>
                                <th>Tube/Pipe (CD, Annealed)</th>
                                <th>Wire (Annealed)</th>
                                <th>Wire (No. 1 Temper)</th>
                                <th>Wire (Spring Temper)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">

                                <td>Tensile Strength (ksi)</td>
                                <td>80–100</td>
                                <td>105–150</td>
                                <td>80–100</td>
                                <td>85–120</td>
                                <td>80–105</td>
                                <td>85–110</td>
                                <td>80–100</td>
                                <td>120–150</td>
                                <td>80–100</td>
                                <td>145–170</td>
                                <td>75–100</td>
                                <td>80–100</td>
                                <td>80–120</td>
                                <td>105–135</td>
                                <td>170–220</td>
                                </tr>

                                <td>Tensile Strength (MPa)</td>
                                <td>550–690</td>
                                <td>725–1035</td>
                                <td>550–690</td>
                                <td>585–830</td>
                                <td>550–725</td>
                                <td>580–760</td>
                                <td>550–690</td>
                                <td>830–1035</td>
                                <td>550–690</td>
                                <td>1000–1170</td>
                                <td>520–690</td>
                                <td>550–690</td>
                                <td>550–830</td>
                                <td>725–930</td>
                                <td>1170–1520</td>
                                </tr>

                                <td>Yield Strength (ksi)</td>
                                <td>25–50</td>
                                <td>80–125</td>
                                <td>30–50</td>
                                <td>35–90</td>
                                <td>30–50</td>
                                <td>35–65</td>
                                <td>30–45</td>
                                <td>90–125</td>
                                <td>30–45</td>
                                <td>120–160</td>
                                <td>25–50</td>
                                <td>25–50</td>
                                <td>35–75</td>
                                <td>70–105</td>
                                <td>150–210</td>
                                </tr>

                                <td>Yield Strength (MPa)</td>
                                <td>170–345</td>
                                <td>550–860</td>
                                <td>205–345</td>
                                <td>240–620</td>
                                <td>205–345</td>
                                <td>240–450</td>
                                <td>205–310</td>
                                <td>620–860</td>
                                <td>205–310</td>
                                <td>830–1100</td>
                                <td>170–345</td>
                                <td>170–345</td>
                                <td>240–520</td>
                                <td>480–725</td>
                                <td>1035–1450</td>
                                </tr>

                                <td>Elongation (%)</td>
                                <td>55–35</td>
                                <td>30–10</td>
                                <td>55–35</td>
                                <td>50–30</td>
                                <td>55–35</td>
                                <td>50–30</td>
                                <td>55–35</td>
                                <td>15–2</td>
                                <td>55–35</td>
                                <td>10–2</td>
                                <td>55–35</td>
                                <td>55–35</td>
                                <td>45–20</td>
                                <td>35–15</td>
                                <td>5–2</td>
                                </tr>

                                <td>Hardness (Rockwell)</td>
                                <td>65–85B</td>
                                <td>90B–30C</td>
                                <td>65–85B</td>
                                <td>75–95B</td>
                                <td>65–85B</td>
                                <td>80–95B</td>
                                <td>88B max</td>
                                <td>24C min</td>
                                <td>84B max</td>
                                <td>30C min</td>
                                <td>–</td>
                                <td>88B max</td>
                                <td>–</td>
                                <td>–</td>
                                <td>–</td>
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
                'image' => 'assets/images/all-product/seamless-pipes-10.webp',
            ],

            [
                'name' => 'Welded Pipes (ERW & EFW)',
                'route' => 'products.pipes-tubes.welded-pipes',
                'image' => 'assets/images/all-product/welded-pipes-tubes-1.webp',
            ],
            [
                'name' => 'Tubes (Capillary, U-Bend)',
                'route' => 'products.pipes-tubes.u-bent-tubes',
                'image' => 'assets/images/all-product/u-bent-tube.webp',
            ],
            [
                'name' => 'Sheets & Plates',
                'route' => 'products.sheets-plates-coils.sheets-and-plates',
                'image' => 'assets/images/all-product/Sheets-Plates.webp',
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
                'image' => 'assets/images/all-product/FASTENERS.webp',
            ],
            [
                'name' => 'Custom Fabricated Components',
                'route' => 'products.pipe-fittings-flanges-fasteners.custom-fabricated-fittings',
                'image' => 'assets/images/all-product/custom-metal-fabricated.webp',
            ],
        ];
    @endphp

    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Products in Inconel 600</h2>
            </div>

            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">INCONEL 600 </strong>designated as UNS N06600 and Werkstoff Nr. 2.4816, is
                        a versatile nickel-chromium alloy known for its excellent resistance to oxidation and corrosion at
                        high temperatures. Widely used in heat and corrosion-resistant applications, this alloy is
                        officially approved under multiple sections of the ASME Boiler and Pressure Vessel Code, including:
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
                        This alloy meets several recognized industry standards, including:
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
                        <h5>High resistance to oxidation and corrosion at elevated temperatures</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>High resistance to oxidation and corrosion at elevated temperatures</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Resistance to chloride-ion stress-corrosion cracking</h5>
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
                        <h5>Outstanding performance in both oxidizing and reducing environments</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Inconel 600</h2>
                <p class="text-center pb-3"><strong class="text-dark">Inconel 600</strong>is a solid solution
                    nickel-chromium-iron alloy known for its excellent resistance to heat and corrosion across a wide range
                    of temperatures and environments. Its ability to retain strength and structural integrity under both
                    oxidizing and reducing conditions makes it a highly versatile choice for multiple critical industries.
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Heat Treatment and Industrial Furnaces</h5>
                        <p>Commonly used for retorts, furnace fixtures, trays, muffles, and radiant tubes exposed to high
                            temperatures. INCONEL 600 maintains mechanical strength and resists scaling in extreme thermal
                            cycles.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Chemical Processing</h5>
                        <p>Ideal for vessels, piping, and heat exchangers handling acidic, caustic, and chlorinated media.
                            The alloy's resistance to chlorine, hydrogen chloride, and oxidizing salts ensures long-term
                            stability and performance</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Nuclear and Power Generation</h5>
                        <p>Used in reactor core components, steam generator tubing, and fuel element spacers. INCONEL 600
                            offers good resistance to corrosion under high-purity water and steam conditions in nuclear
                            power plants.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Food Processing and Pharmaceutical Equipment</h5>
                        <p>Well-suited for systems exposed to organic and inorganic acids. Its non-magnetic properties and
                            resistance to high-purity water make it reliable for hygienic applications.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Aerospace and Jet Engines</h5>
                        <p>Used in components exposed to thermal and corrosive environments, such as engine parts,
                            afterburner assemblies, and exhaust liners. INCONEL 600 offers excellent oxidation and creep
                            resistance.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Marine and Offshore Systems</h5>
                        <p>Provides excellent resistance to chloride-induced corrosion in saltwater environments. Often used
                            in marine heat exchangers, pumps, and risers.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-capsule"></i></div>
                        <h5>Cryogenic Applications</h5>
                        <p>INCONEL 600 retains toughness and ductility at sub-zero temperatures, making it suitable for use
                            in cryogenic storage and transfer systems.</p>
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
                        <h5>Specialists in high-performance nickel alloys</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Strong sourcing network for premium materials</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Advanced manufacturing and machining capabilities</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Export-ready with global logistics support</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Committed to quality assurance and customer satisfaction</h5>
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
                                <h4>What is Inconel 600 and why is it widely used?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Inconel 600 is a high performance nickel chromium iron alloy designed to withstand
                                    extreme temperatures and harsh environments. Known for its excellent oxidation and
                                    corrosion resistance, it remains stable under both oxidizing and reducing conditions.
                                    Because of its outstanding mechanical strength and resistance to chloride ion
                                    stress corrosion cracking, Inconel 600 is widely used in industries such as chemical
                                    processing, aerospace, marine engineering, and power generation.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the key properties of Inconel 600?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Inconel 600 is highly resistant to heat, scaling, and oxidation, even at temperatures up
                                    to 2000°F (1093°C). It offers superior strength, good weldability, and excellent
                                    resistance to chloride-ion stress-corrosion cracking. This alloy is non-magnetic,
                                    retains toughness at cryogenic temperatures, and performs well in both oxidizing and
                                    reducing environments, making it suitable for critical applications where durability and
                                    reliability are essential.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the common applications of Inconel 600?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Inconel 600 is used across multiple industries where high strength and corrosion
                                    resistance are required. It is commonly applied in heat treatment furnaces, nuclear
                                    power plants, and chemical processing equipment. Other applications include jet engine
                                    components, exhaust systems, marine heat exchangers, food processing equipment, and
                                    cryogenic storage systems. Its versatility and ability to withstand extreme environments
                                    make it a preferred choice for demanding projects.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>How does Inconel 600 perform in chemical processing environments?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Inconel 600 is highly valued in chemical processing because of its resistance to acidic,
                                    caustic, and chloride-rich environments. It withstands exposure to chlorine, hydrogen
                                    chloride, and oxidizing salts without losing mechanical integrity. This makes it ideal
                                    for use in vessels, piping, and heat exchangers where long-term resistance to corrosion
                                    is critical, ensuring safe and reliable operation in aggressive chemical conditions.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose MOKSH TUBES & FITTINGS LLP for Inconel 600 products?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP is a trusted global supplier of premium Inconel 600 products
                                    in various forms including pipes, tubes, fittings, flanges, fasteners, sheets, plates,
                                    and custom-fabricated components. With strong sourcing from certified mills, advanced
                                    manufacturing expertise, and strict quality assurance, the company ensures superior
                                    product performance. Clients benefit from timely delivery, custom fabrication support,
                                    and a commitment to customer satisfaction, making MOKSH a reliable partner for Inconel
                                    600 solutions worldwide.
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
                    For inquiries or to request a quote, reach out to <strong>Moksh Tubes & Fittings LLP</strong> your
                    reliable source for INCONEL 600 products engineered for performance, precision, and reliability.
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
                "name": "What is Inconel 600 and why is it widely used?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Inconel 600 is a high performance nickel chromium iron alloy designed to withstand extreme temperatures and harsh environments. Known for its excellent oxidation and corrosion resistance, it remains stable under both oxidizing and reducing conditions. Because of its outstanding mechanical strength and resistance to chloride ion stress corrosion cracking, Inconel 600 is widely used in industries such as chemical processing, aerospace, marine engineering, and power generation."
                }
                },
                {
                "@type": "Question",
                "name": "What are the key properties of Inconel 600?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Inconel 600 is highly resistant to heat, scaling, and oxidation, even at temperatures up to 2000°F (1093°C). It offers superior strength, good weldability, and excellent resistance to chloride-ion stress-corrosion cracking. This alloy is non-magnetic, retains toughness at cryogenic temperatures, and performs well in both oxidizing and reducing environments, making it suitable for critical applications where durability and reliability are essential."
                }
                },
                {
                "@type": "Question",
                "name": "What are the common applications of Inconel 600?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Inconel 600 is used across multiple industries where high strength and corrosion resistance are required. It is commonly applied in heat treatment furnaces, nuclear power plants, and chemical processing equipment. Other applications include jet engine components, exhaust systems, marine heat exchangers, food processing equipment, and cryogenic storage systems. Its versatility and ability to withstand extreme environments make it a preferred choice for demanding projects."
                }
                },
                {
                "@type": "Question",
                "name": "How does Inconel 600 perform in chemical processing environments?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Inconel 600 is highly valued in chemical processing because of its resistance to acidic, caustic, and chloride-rich environments. It withstands exposure to chlorine, hydrogen chloride, and oxidizing salts without losing mechanical integrity. This makes it ideal for use in vessels, piping, and heat exchangers where long-term resistance to corrosion is critical, ensuring safe and reliable operation in aggressive chemical conditions."
                }
                },
                {
                "@type": "Question",
                "name": "Why choose MOKSH TUBES & FITTINGS LLP for Inconel 600 products?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "MOKSH TUBES & FITTINGS LLP is a trusted global supplier of premium Inconel 600 products in various forms including pipes, tubes, fittings, flanges, fasteners, sheets, plates, and custom-fabricated components. With strong sourcing from certified mills, advanced manufacturing expertise, and strict quality assurance, the company ensures superior product performance. Clients benefit from timely delivery, custom fabrication support, and a commitment to customer satisfaction, making MOKSH a reliable partner for Inconel 600 solutions worldwide."
                }
                }
            ]
            }

        @endverbatim
    </script>
@endsection
