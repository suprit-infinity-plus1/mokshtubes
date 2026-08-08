@extends('layouts.master')

@section('title', 'Hastelloy C276 (UNS N10276) | Manufacturer, Supplier & Exporter')
@section('meta_description', 'Buy Hastelloy C276 (UNS N10276 / 2.4819) corrosion-resistant nickel alloy. Get chemical composition, mechanical properties, equivalent grades, products, sizes & prices.')
@section('meta_keywords', 'Hastelloy C276, UNS N10276, Alloy C276, 2.4819, Hastelloy C276 Pipes, Hastelloy C276 Tubes, Hastelloy C276 Flanges, Hastelloy C276 Sheet, Nickel Molybdenum Chromium Alloy')
@section('og_image', asset('assets/images/hastelloy/hastelloy-c276.webp'))
@section('og_type', 'article')

@section('content')
<section class="breadcrumb-area" style="background-image: url(/assets/images/hastelloy/hastelloy-c276.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Hastelloy C276 (UNS N10276)<br>Pipes, Tubes, Sheets, Plates, Flanges & Bars</h1>

                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Hastelloy C276 is one of the world's most widely used corrosion-resistant nickel alloys. Its unique combination of nickel, molybdenum, chromium, tungsten, and iron provides exceptional resistance to both oxidizing and reducing chemicals, making it suitable for applications where conventional stainless steels fail.
                    </p>
                </div>
            </div>
        </div>
    </section>

<div class="sticky-top bg-white border-bottom material-tabs  w-100">
        <div class="container">
            <a href="#overview">Overview</a> |
            <a href="#specification">Specifications</a> |
            <a href="#composition">Chemical Composition</a> |
            <a href="#mechanical">Mechanical Properties</a> |
            <a href="#price">Advantages</a> |
            <a href="#applications">Applications</a> |
            <a href="#faq">FAQ</a> |
            <a href="#contact-us">Contact Us</a>
        </div>
    </div>

<section id="overview" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Product Overview</h2>
            </div>

            <h3 class="fw-semibold text-center mb-5" style="color: #db7227;">
                Introduction to Hastelloy C276 / Alloy C276 / UNS N10276
            </h3>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/hastelloy/hastelloy-c276.webp') }}" alt="Hastelloy C276 Products"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4" style="text-align: justify;">
                            <strong class="text-black">Hastelloy C276</strong> is one of the world's most widely used corrosion-resistant nickel alloys. Its unique combination of nickel, molybdenum, chromium, tungsten, and iron provides exceptional resistance to both oxidizing and reducing chemicals, making it suitable for applications where conventional stainless steels fail.
                        </p>

                        <p class="fs-6 mb-4" style="text-align: justify;">
                            The alloy performs exceptionally well under harsh operating conditions involving hydrochloric acid, sulfuric acid, wet chlorine, ferric chloride, seawater, acidic gases, and chloride-containing solutions. It also exhibits excellent resistance to pitting corrosion, crevice corrosion, stress corrosion cracking, and localized corrosion.
                        </p>

                        <p class="fs-6 mb-4" style="text-align: justify;">
                            Besides its outstanding corrosion resistance, <strong class="text-black"><a href="{{ route('materials.hastelloy') }}">Hastelloy C276</a></strong> offers excellent weldability, high ductility, superior mechanical strength, and long service life even at elevated temperatures. These characteristics make it an ideal material for pressure vessels, reactors, heat exchangers, piping systems, scrubbers, storage tanks, valves, and other critical process equipment.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            Today, engineers, project consultants, EPC contractors, and procurement professionals across industries rely on Hastelloy C276 supplied by <strong style="color:black;"><a href="{{ route('index') }}">Moksh Tubes & Fittings LLP</a></strong> whenever equipment must operate continuously in aggressive environments without compromising safety or performance.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Hastelloy C276 Technical Datasheet</h3>
            <p class="mb-3">
                Need complete technical information before purchasing? Download the official Hastelloy C276 datasheet containing chemical composition, mechanical & physical properties, equivalent grades, ASTM standards, product forms, welding guidelines, and applications.
            </p>

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

<section id="specification" id="specifications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Material Specifications</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Property</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody class="text-start">
                                <tr class="t-row"><td><strong>Material Name</strong></td><td>Hastelloy C276</td></tr>
                                <tr class="t-row"><td><strong>Alloy Name</strong></td><td>Alloy C276</td></tr>
                                <tr class="t-row"><td><strong>UNS Number</strong></td><td>N10276</td></tr>
                                <tr class="t-row"><td><strong>Werkstoff Number</strong></td><td>2.4819</td></tr>
                                <tr class="t-row"><td><strong>Material Family</strong></td><td>Nickel-Chromium-Molybdenum Alloy</td></tr>
                                <tr class="t-row"><td><strong>ASTM Specification</strong></td><td>ASTM B575, ASTM B622, ASTM B619, ASTM B626</td></tr>
                                <tr class="t-row"><td><strong>ASME Specification</strong></td><td>SB575, SB622, SB619, SB626</td></tr>
                                <tr class="t-row"><td><strong>DIN Standard</strong></td><td>DIN 17744 / NiMo16Cr15W</td></tr>
                                <tr class="t-row"><td><strong>EN Standard</strong></td><td>EN 2.4819</td></tr>
                                <tr class="t-row"><td><strong>ISO Standard</strong></td><td>Available</td></tr>
                                <tr class="t-row"><td><strong>Density</strong></td><td>8.89 g/cm³ (8890 kg/m³)</td></tr>
                                <tr class="t-row"><td><strong>Melting Range</strong></td><td>1325–1370°C (2417–2498°F)</td></tr>
                                <tr class="t-row"><td><strong>Magnetic Property</strong></td><td>Non-Magnetic</td></tr>
                                <tr class="t-row"><td><strong>Weldability & Corrosion Resistance</strong></td><td>Excellent</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section id="composition" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-4">
                <h2>Chemical Composition & Equivalent Grades</h2>
            </div>
            
            <p class="text-center mb-5 fs-6">
                The exceptional corrosion resistance of Hastelloy C276 comes from its carefully balanced nickel-rich composition. Nickel provides the primary corrosion resistance, while chromium protects against oxidizing environments. Molybdenum enhances resistance against reducing acids and pitting corrosion, whereas tungsten further improves resistance in highly aggressive chemical media.
            </p>

            <div class="row g-4">
                <!-- Composition Table -->
                <div class="col-lg-6">
                    <h4 class="text-center mb-3" style="color: #174268;">Chemical Composition (%)</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row"><th>Element</th><th>Composition (%)</th></tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>Nickel (Ni)</td><td>Balance</td></tr>
                                <tr class="t-row"><td>Chromium (Cr)</td><td>14.5 – 16.5</td></tr>
                                <tr class="t-row"><td>Molybdenum (Mo)</td><td>15.0 – 17.0</td></tr>
                                <tr class="t-row"><td>Iron (Fe)</td><td>4.0 – 7.0</td></tr>
                                <tr class="t-row"><td>Tungsten (W)</td><td>3.0 – 4.5</td></tr>
                                <tr class="t-row"><td>Cobalt (Co)</td><td>Maximum 2.5</td></tr>
                                <tr class="t-row"><td>Manganese (Mn)</td><td>Maximum 1.0</td></tr>
                                <tr class="t-row"><td>Vanadium (V)</td><td>Maximum 0.35</td></tr>
                                <tr class="t-row"><td>Silicon (Si)</td><td>Maximum 0.08</td></tr>
                                <tr class="t-row"><td>Carbon (C)</td><td>Maximum 0.01</td></tr>
                                <tr class="t-row"><td>Copper (Cu)</td><td>Maximum 0.5</td></tr>
                                <tr class="t-row"><td>Phosphorus (P)</td><td>Maximum 0.04</td></tr>
                                <tr class="t-row"><td>Sulfur (S)</td><td>Maximum 0.03</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Equivalent Grades Table & Benefits -->
                <div class="col-lg-6">
                    <h4 class="text-center mb-3" style="color: #174268;">Equivalent Grades</h4>
                    <div class="table-responsive mb-4">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row"><th>Standard</th><th>Grade / Designation</th></tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>UNS</td><td>N10276</td></tr>
                                <tr class="t-row"><td>Werkstoff / EN</td><td>2.4819</td></tr>
                                <tr class="t-row"><td>DIN</td><td>NiMo16Cr15W</td></tr>
                                <tr class="t-row"><td>ASTM Plate / Sheet</td><td>ASTM B575</td></tr>
                                <tr class="t-row"><td>ASTM Pipe</td><td>ASTM B622</td></tr>
                                <tr class="t-row"><td>ASTM Tube</td><td>ASTM B619</td></tr>
                                <tr class="t-row"><td>ASME Plate / Sheet</td><td>ASME SB575</td></tr>
                                <tr class="t-row"><td>ASME Pipe</td><td>ASME SB622</td></tr>
                                <tr class="t-row"><td>ASME Tube</td><td>ASME SB619</td></tr>
                                <tr class="t-row"><td>ISO</td><td>International Equivalent Available</td></tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="advantage-card">
                        <h5>Why is this Composition & Standard Important?</h5>
                        <ul class="fs-6 mt-2 mb-0">
                            <li>✔ Excellent resistance to aggressive chemicals & chloride attack</li>
                            <li>✔ Outstanding pitting and stress corrosion cracking resistance</li>
                            <li>✔ Suitable for both oxidizing and reducing acid environments</li>
                            <li>✔ Simplifies global procurement and standardizes international specs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

{{-- 
<section id="properties" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2>Physical, Mechanical & Thermal Properties</h2>
            </div>
            
            <p class="text-center mb-5 fs-6">
                The physical, mechanical, and thermal properties of Hastelloy C276 allow it to maintain dimensional stability, structural integrity, and outstanding mechanical strength under elevated temperatures and aggressive chemical service conditions.
            </p>

            <div class="row g-4 mb-5">
                <!-- Physical Properties Table -->
                <div class="col-lg-6">
                    <h4 class="text-center mb-3" style="color: #174268;"><i class="bi bi-layers me-2"></i>Physical Properties</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Property</th>
                                    <th>Value</th>
                                </tr>
                            </thead>
                            <tbody class="text-start">
                                <tr class="t-row"><td><strong>Density</strong></td><td>8.89 g/cm³ (8890 kg/m³)</td></tr>
                                <tr class="t-row"><td><strong>Melting Range</strong></td><td>1325–1370°C (2417–2498°F)</td></tr>
                                <tr class="t-row"><td><strong>Electrical Resistivity</strong></td><td>1.30 µΩ·m</td></tr>
                                <tr class="t-row"><td><strong>Magnetic Property</strong></td><td>Non-Magnetic</td></tr>
                                <tr class="t-row"><td><strong>Color</strong></td><td>Silver Grey</td></tr>
                                <tr class="t-row"><td><strong>Crystal Structure</strong></td><td>Face-Centered Cubic (FCC)</td></tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="alert alert-secondary mb-0 small">
                        <strong>Key Features:</strong> Excellent dimensional stability, high temperature capability, superior structural integrity, and long service life.
                    </div>
                </div>

                <!-- Mechanical Properties Table -->
                <div class="col-lg-6">
                    <h4 class="text-center mb-3" style="color: #174268;"><i class="bi bi-hammer me-2"></i>Mechanical Properties</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Property</th>
                                    <th>Metric</th>
                                    <th>Imperial</th>
                                </tr>
                            </thead>
                            <tbody class="text-start">
                                <tr class="t-row"><td><strong>Tensile Strength</strong></td><td>790 MPa</td><td>115,000 psi</td></tr>
                                <tr class="t-row"><td><strong>Yield Strength</strong></td><td>355 MPa</td><td>52,000 psi</td></tr>
                                <tr class="t-row"><td><strong>Elongation</strong></td><td>40%</td><td>40%</td></tr>
                                <tr class="t-row"><td><strong>Hardness</strong></td><td>HRB 87</td><td>HRB 87</td></tr>
                                <tr class="t-row"><td><strong>Elastic Modulus</strong></td><td>205 GPa</td><td>29,700 ksi</td></tr>
                                <tr class="t-row"><td><strong>Shear Modulus</strong></td><td>79 GPa</td><td>11,500 ksi</td></tr>
                                <tr class="t-row"><td><strong>Poisson's Ratio</strong></td><td>0.31</td><td>0.31</td></tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="alert alert-secondary mb-0 small">
                        <strong>Mechanical Advantages:</strong> High tensile strength, excellent ductility, outstanding fatigue resistance, and reliable pressure handling capability.
                    </div>
                </div>
            </div>

            <!-- Thermal Properties Table -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h4 class="text-center mb-3" style="color: #174268;"><i class="bi bi-thermometer-sun me-2"></i>Thermal Properties</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Property</th>
                                    <th>Value</th>
                                    <th>Benefit / Impact</th>
                                </tr>
                            </thead>
                            <tbody class="text-start">
                                <tr class="t-row"><td><strong>Thermal Conductivity</strong></td><td>10.2 W/m·K</td><td>Ensures uniform heat transfer across heat exchangers</td></tr>
                                <tr class="t-row"><td><strong>Specific Heat Capacity</strong></td><td>427 J/kg·K</td><td>Provides thermal stability during temperature fluctuations</td></tr>
                                <tr class="t-row"><td><strong>Coefficient of Thermal Expansion</strong></td><td>11.2 µm/m°C</td><td>Minimizes thermal distortion and structural stress</td></tr>
                                <tr class="t-row"><td><strong>Electrical Resistivity</strong></td><td>1.30 µΩ·m</td><td>Stable electrical characteristics in industrial systems</td></tr>
                                <tr class="t-row"><td><strong>Modulus of Elasticity</strong></td><td>205 GPa</td><td>Retains rigidity under mechanical and thermal loads</td></tr>
                                <tr class="t-row"><td><strong>Maximum Service Temperature</strong></td><td>Approx. 1040°C</td><td>Reliable operation in high-temperature chemical reactors</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
--}}

<section class="sec-padd-top sec-padd-bottom" id="mechanical">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color:#174268;">
                    Mechanical Properties of Hastelloy C276 (UNS N10276) (Annealed)
                </h2>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Temperature</th>
                            <th>Tensile Strength (MPa)</th>
                            <th>Yield Strength (MPa)</th>
                            <th>Hardness (BHN)</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="t-row">
                            <td>25 °C (80 °F)</td>
                            <td>379</td>
                            <td>207</td>
                            <td>145</td>
                        </tr>
                        <tr class="t-row">
                            <td>425 °C (800 °F)</td>
                            <td>~207</td>
                            <td>~124</td>
                            <td>~100</td>
                        </tr>
                        <tr class="t-row">
                            <td>540 °C (1000 °F)</td>
                            <td>~172</td>
                            <td>~103</td>
                            <td>~90</td>
                        </tr>
                        <tr class="t-row">
                            <td>650 °C (1200 °F)</td>
                            <td>~138</td>
                            <td>~83</td>
                            <td>~85</td>
                        </tr>
                        <tr class="t-row">
                            <td>705 °C (1300 °F)</td>
                            <td>~124</td>
                            <td>~69</td>
                            <td>~80</td>
                        </tr>
                        <tr class="t-row">
                            <td>760 °C (1400 °F)</td>
                            <td>~117</td>
                            <td>~62</td>
                            <td>~75</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

{{-- 
<section class="sec-padd-top sec-padd-bottom bg-light" id="related grades">
        <div class="container">
            <div class="section-title center mt-5">
                <h2>Available Forms & Size Range – Hastelloy C276 (UNS N10276)</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <p class="text-center mb-3">
                        We supply Hastelloy C276 (UNS N10276) in the following product forms:
                    </p>
                    <ul class="list-unstyled text-center">
                        <li>✔ Seamless & Welded Pipes</li>
                        <li>✔ Capillary & Boiler Tubes</li>
                        <li>✔ Sheets, Plates & Coils</li>
                        <li>✔ Strips & Foils</li>
                        <li>✔ Round / Flat / Hex Bars</li>
                        <li>✔ Wire & Welding Rods</li>
                        <li>✔ Pipe Fittings & Flanges (All ASME Types)</li>
                        <li>✔ Fasteners & CNC-Machined Components</li>
                    </ul>
                    <p class="text-center mt-3">
                        All materials comply with ASTM B551 / B523 / B658 / B493 / B550.
                    </p>
                </div>
            </div>
        </div>
    </section>
--}}

@php
    $products = [
        [
            'name' => 'PIPES',
            'url' => 'products/pipes-tubes/seamless-pipes',
            'image' => 'assets/images/all-product/seamless-pipes-10.webp',
        ],
        [
            'name' => 'TUBES',
            'url' => 'products/pipes-tubes/welded-pipes',
            'image' => 'assets/images/all-product/welded-pipes-tubes-1.webp',
        ],
        [
            'name' => 'SHEETS',
            'url' => 'products/sheets-plates-coils/sheets-and-plates',
            'image' => 'assets/images/all-product/Sheets-Plates.webp',
        ],
        [
            'name' => 'PLATES',
            'url' => 'products/sheets-plates-coils/sheets-and-plates',
            'image' => 'assets/images/all-product/Sheets-Plates.webp',
        ],
        [
            'name' => 'FLANGES',
            'url' => 'products/flanges/flanges-and-gaskets',
            'image' => 'assets/images/product/flangs/Flanges-&-Pipe-Fittings.webp',
        ],
        [
            'name' => 'BARS',
            'url' => 'products/bars-rods',
            'image' => 'assets/images/product/Bars-&-Rods/round-bars.webp',
        ],
        [
            'name' => 'FITTINGS',
            'url' => 'products/pipe-fittings',
            'image' => 'assets/images/product/main-product/fittings.webp',
        ],
    ];
@endphp

<section id="products" class="sec-padd-top sec-padd-bottom bg-light">
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-lg-10">
                <h3 class="text-center mb-4" style="color:#174268; font-weight: bold;">Products In Hastelloy C276</h3>
                
                <p class="text-center fs-6" style="color: #666; margin: 0 auto; text-align: justify; line-height: 1.8;">
                    <strong style="color: black;">MOKSH TUBES & FITTINGS LLP</strong>, with years of expertise in nickel-based alloys and an extensive global supply network, offers a complete range <strong style="color: black;">HASTELLOY</strong> products. These products are engineered to perform in the most corrosive environments found across industries such as Chemical Processing, Pollution Control, Oil & Gas, Marine, Power Generation, Wastewater Treatment, and more. The unique chemical composition of C276 makes it capable of resisting a wide variety of complex and mixed chemical conditions, delivering unmatched durability and reliability for mission-critical applications.
                </p>
            </div>
        </div>

        <div class="row justify-content-center mb-5">
            <div class="col-lg-10">
                <h5 class="text-center" style="color:#174268; font-weight: bold;">
                    We offer Hastelloy C276 in a wide range of product forms, including:
                </h5>
            </div>
        </div>

        <!-- Product Image Cards -->
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-4 justify-content-center">
            @foreach ($products as $product)
                <div class="col d-flex">
                    <a href="{{ url($product['url']) }}" class="text-decoration-none w-100">
                        <div class="product-card h-100">
                            <img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}"
                                class="img-fluid w-100" style="border-radius: 8px 8px 0 0;">
                            <h6 class="product-card-title text-center mt-0 py-4" style="text-transform: uppercase;">{{ $product['name'] }}</h6>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section id="uses" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Uses and Advantages</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Excellent Corrosion Resistance in acids like hydrochloric, sulfuric, nitric, and organic acids
                        </h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Good Strength and Toughness at room and elevated temperatures</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Easily Weldable and Formable—supports complex fabrication</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Low Reactivity with Process Media—ideal for sensitive applications</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Non-toxic and Biocompatible—used in medical and high-purity chemical systems</h5>
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

<section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2>Applications & Industries Served</h2>
            </div>

            <div class="row g-4 mb-5 justify-content-center">
                <div class="col-lg-10">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row"><th>Industry Sector</th><th>Typical Hastelloy C276 Applications</th></tr>
                            </thead>
                            <tbody>
                                <tr class="t-row"><td><strong>Chemical Processing</strong></td><td>Chemical Reactors, Columns, Heat Exchangers, Acid Transfer Scrubbers</td></tr>
                                <tr class="t-row"><td><strong>Oil, Gas & Petrochemical</strong></td><td>Downhole Equipment, Pipelines, Valves, Manifolds, Pressure Vessels, Storage Tanks</td></tr>
                                <tr class="t-row"><td><strong>Marine & Offshore Platforms</strong></td><td>Seawater Systems, Condensers, Structural Components, Subsea Pumps & Valves</td></tr>
                                <tr class="t-row"><td><strong>Pharmaceutical & Food</strong></td><td>Sterile Mixing Tanks, Clean Room Processing Equipment, Hygienic Process Lines</td></tr>
                                <tr class="t-row"><td><strong>Power & Nuclear Industry</strong></td><td>Boilers, Heat Exchangers, Condensers, Nuclear Reactor Components</td></tr>
                                <tr class="t-row"><td><strong>Pollution Control & Paper</strong></td><td>FGD Scrubbers, Ducting Systems, Pulp Bleaching Equipment, Digesters</td></tr>
                                <tr class="t-row"><td><strong>Desalination & Aerospace</strong></td><td>High-Pressure Seawater Handling Equipment, Elevated Temperature Components</td></tr>
                            </tbody>
                        </table>
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
                        <h5>ISO Certified</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-file-earmark-check"></i></div>
                        <h5>MTC 3.1</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Fast Delivery</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Worldwide Export</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-cash-coin"></i></div>
                        <h5>Competitive Price</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

{{-- 
<section id="price" class="sec-padd-top sec-padd-bottom bg-light py-5">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h2>Hastelloy C276 (UNS N10276) Price in India</h2>
            </div>

            <p class="text-center fs-5">
                <strong>Typical Range:</strong> ₹4,000 – ₹9,000 per kg
            </p>
            <p class="text-center mb-2">
                (Price varies by OD, wall thickness, form, and finish)
            </p>

            <p class="text-center fs-5">
                Contact us for exact quotation based on size and quantity.
            </p>
        </div>
    </section>
--}}

<section id="faq" class="faq-content-area sec-padd2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="accordion-box">
                        <div class="section-title center">
                            <h2>Frequently Asked Questions (FAQs)</h2>
                        </div>

                        <!-- Q1 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn"><h4> What is Hastelloy C276?</h4></div>
                            <div class="accord-content"><p>Hastelloy C276 is a nickel-chromium-molybdenum alloy designed to provide outstanding resistance to corrosion in aggressive chemical and high-temperature environments.</p></div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn"><h4> What is the UNS number of Hastelloy C276?</h4></div>
                            <div class="accord-content"><p>The UNS designation for Hastelloy C276 is UNS N10276.</p></div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn"><h4>Is Hastelloy C276 corrosion resistant?</h4></div>
                            <div class="accord-content"><p>Yes. It offers excellent resistance to pitting, crevice corrosion, stress corrosion cracking, and many oxidizing and reducing chemicals.</p></div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn"><h4>Is Hastelloy C276 magnetic?</h4></div>
                            <div class="accord-content"><p>No. Hastelloy C276 is generally considered non-magnetic in the annealed condition.</p></div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn"><h4> Can Hastelloy C276 be welded?</h4></div>
                            <div class="accord-content"><p>Yes. It has excellent weldability and can be welded using TIG, MIG, SMAW, and other conventional welding processes using ERNiCrMo-4 filler metal.</p></div>
                        </div>

                        <!-- Q6 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn"><h4>What industries use Hastelloy C276?</h4></div>
                            <div class="accord-content"><p>Common industries include Chemical Processing, Oil & Gas, Marine, Offshore, Pharmaceuticals, Petrochemical, Power Generation, Pollution Control, and Food Processing.</p></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

{{-- 
<section class="blog-section sec-padd2">
        <div class="container">
            <div class="section-title">
                <h2>blogs</h2>
            </div>
            <div class="row">
                @foreach ($blogs as $blog)
                    <!-- {{ dd($blog) }} -->
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
--}}

<section id="contact-us" class="sec-padd-bottom">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Looking for a Reliable Hastelloy C276 Supplier?</h2>
                <p>
                    Whether you require pipes, tubes, sheets, plates, bars, flanges, fittings, fasteners, or custom-fabricated components, <strong>Moksh Tubes & Fittings LLP</strong> is your trusted partner for certified high-quality nickel alloy products.<br>
                    📞 Call: +91 97695 84950 | ✉️ Email Sales Team<br>
                    ISO Certified Quality | Mill Test Certificates (EN 10204 3.1) | Fast Worldwide Delivery
                </p>
                <a href="javascript:void(0);" class="contact-cta-btn" data-bs-toggle="modal"
                    data-bs-target="#contactFormModal">
                    Request a Quote Now
                </a>
            </div>
        </div>
    </section>

@endsection

@section('jsscripts')
    <script type="application/ld+json">
        @verbatim
        [{
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "Moksh Tubes & Fittings LLP",
            "url": "https://www.mokshtubes.com",
            "logo": "https://www.mokshtubes.com/assets/logo.png",
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+91-97695-84950",
                "contactType": "sales",
                "areaServed": ["IN","AE","SA","QA","OM","KW","DE","US"],
                "availableLanguage": ["English"]
            }
        },
        {
            "@context": "https://schema.org",
            "@type": "Product",
            "name": "Hastelloy C276 (UNS N10276 / 2.4819) Products",
            "description": "Hastelloy C276 nickel-chromium-molybdenum alloy pipes, tubes, sheets, plates, flanges, fittings & bars. Manufacturer & supplier with EN 10204 3.1 certification.",
            "brand": {
                "@type": "Brand",
                "name": "Moksh Tubes & Fittings LLP"
            },
            "manufacturer": {
                "@type": "Organization",
                "name": "Moksh Tubes & Fittings LLP"
            },
            "material": "Hastelloy C276 / UNS N10276 / 2.4819",
            "url": "https://www.mokshtubes.com/materials/hastelloy/hastelloy-c276",
            "offers": {
                "@type": "Offer",
                "availability": "https://schema.org/InStock",
                "priceCurrency": "INR",
                "url": "https://www.mokshtubes.com/contact-us"
            }
        },
        {
            "@context": "https://schema.org",
            "@type": "FAQPage",
            "mainEntity": [{
                "@type": "Question",
                "name": "What is Hastelloy C276?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "Hastelloy C276 is a nickel-chromium-molybdenum alloy designed to provide outstanding resistance to corrosion in aggressive chemical and high-temperature environments."
                }
            },{
                "@type": "Question",
                "name": "What is the UNS number of Hastelloy C276?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "The UNS designation for Hastelloy C276 is UNS N10276."
                }
            },{
                "@type": "Question",
                "name": "Is Hastelloy C276 suitable for seawater?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. It performs exceptionally well in seawater and chloride-rich environments due to its superior resistance against pitting and crevice attack."
                }
            },{
                "@type": "Question",
                "name": "What products are available in Hastelloy C276?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "Products include Seamless & Welded Pipes, Tubes, Plates, Sheets, Coils, Bars, Rods, Flanges, Pipe Fittings, Fasteners, and Custom Fabricated Components."
                }
            }]
        },
        {
            "@context": "https://schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": [{
                "@type": "ListItem",
                "position": 1,
                "name": "Home",
                "item": "https://www.mokshtubes.com"
            },{
                "@type": "ListItem",
                "position": 2,
                "name": "Materials",
                "item": "https://www.mokshtubes.com/materials/hastelloy"
            },{
                "@type": "ListItem",
                "position": 3,
                "name": "Hastelloy C276",
                "item": "https://www.mokshtubes.com/materials/hastelloy/hastelloy-c276"
            }]
        }]
        @endverbatim
    </script>
@endsection
