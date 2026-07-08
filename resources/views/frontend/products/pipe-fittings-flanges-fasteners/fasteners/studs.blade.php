@extends('layouts.master')
@section('title', 'Studs & Stud Bolts | High-Strength Fasteners | India & GCC')
<!-- 52 characters -->
@section('meta_description',
    'Studs and Stud Bolts for high-temperature, high-pressure & corrosive
    environments. Available in Carbon, Alloy, Stainless, Duplex, Nickel & Titanium options.')
@section('meta_keywords',
    'Studs, Stud Bolts, Threaded Studs, Fasteners, High Strength Studs, Stainless Steel Studs, Alloy Steel Stud Bolts')
@section('og_image', asset('assets/images/product/flangs/FASTENERS.webp'))
@section('og_type', 'product')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/product/flangs/FASTENERS.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1 class="page-title">Studs & Stud Bolts (Fully Threaded, Double End & Tap End)</h1>
                        <p class="text-center mt-3 px-3 py-2 text-white position-relative" style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Studs and Stud Bolts are engineered for high-temperature, high-pressure and corrosive operating environments, making them essential for flanges, pressure vessels, valves, and industrial equipment. At <a href="{{ route('index') }}" class="text-white text-decoration-underline">Moksh Tubes & Fittings LLP</a>, we supply precision-manufactured studs in carbon steel, alloy steel, stainless steel, duplex, nickel alloys, and titanium grades—fully compliant with ASTM, ASME, DIN, and EN standards.  
                    </p>

                </div>
            </div>
        </div>
    </section>

    <!-- Quick Navigation (Standardized sticky tabs)-->
    <div class="sticky-top bg-white border-bottom material-tabs w-100 shadow-sm">
        <div class="container text-center py-2">
            <a href="#overview">Overview</a> |
            <a href="#specifications">Specifications</a> |
            <a href="#types">Types</a> |
            <a href="#size-chart">Size Chart</a> |
            <a href="#chemical-composition">Chemical</a> |
            <a href="#mechanical-properties">Mechanical</a> |
            <a href="#applications">Applications</a> |
            <a href="#industries">Industries</a> |
            <a href="#manufacturing">Manufacturing</a> |
            <a href="#export">Export</a> |
            <a href="#buying-guide">Buying Guide</a> |
            <a href="#faq">FAQ</a>
        </div>
    </div>

    <section id="overview" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Studs & Stud Bolts</h2>
            </div>

            <div class="row align-items-center">
                <!-- Left Image -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('/assets/images/product/flangs/FASTENERS.webp') }}"
                        alt="Studs & Stud Bolts" class="img-fluid rounded shadow-sm" width="550"
                        height="350" loading="lazy">
                </div>

                <!-- Right Content -->
                <div class="col-md-6">
                    <p class="fs-6 mb-3 text-justify">
                        <strong class="text-black">Studs &amp; Stud Bolts</strong> are critical fastening
                        components designed to operate reliably under high tension, high pressure, and corrosive
                        environments. These fasteners are extensively used in pipeline flanges, heat exchangers, valves,
                        and industrial machinery across power plants, refineries, petrochemical units, chemical
                        processing industries, marine systems, and offshore applications.
                    </p>

                    <p class="fs-6 mb-3 text-justify">
                        <a href="{{ route('index') }}">Moksh Tubes & Fittings LLP</a> is a trusted manufacturer,
                        supplier, and exporter of Studs and Stud Bolts in India, supplying premium-quality fasteners
                        conforming to ASTM A193, ASTM A320, ASTM A453, and ASME standards. Our products are widely
                        supplied to <a href="{{ route('materials.austenitic-stainless-Steel') }}">Indian projects</a> and
                        Gulf / GCC countries including UAE, Saudi Arabia, Qatar, Oman, and Kuwait.
                    </p>

                    <p class="fs-6 text-justify">
                        Manufactured using advanced cold forging and CNC machining processes, our studs offer
                        excellent mechanical strength, thread precision, corrosion resistance, and long
                        service life, even in extreme operating conditions.
                    </p>

                </div>
            </div>
        </div>
    </section>
    {{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Studs Datasheet</h3>
            <p class="mb-3">
                Get the complete datasheet with chemical composition, mechanical properties, thread details, and
                application guidelines.
                Enter your email below to receive the PDF instantly.
            </p>

            <!-- Lead Capture Form -->
            <form id="leadForm" method="POST" action="https://mokshtubes.com/datasheet-leads-capture" class="mb-3">
                <input type="hidden" name="_token" value="WNVWvpO4YR2OqZaIJDl2mE3UfyreGys3Vp19brsc" autocomplete="off">
                <div class="row justify-content-center">
                    <input type="hidden" name="pdf" value="studs-datasheet.pdf">
                    <div class="col-md-6 mb-2">
                        <input type="email" name="email" required="" class="form-control p-3"
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

            <hr class="my-4">
            <p class="small text-muted">
                We respect your privacy. Your email will only be used to send the datasheet.
            </p>
        </div>
    </section>
    
    <section id="specifications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>SPECIFICATIONS</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Category</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody class="text-start">
                                <tr class="t-row">
                                    <td>Material</td>
                                    <td><a href="{{ route('materials.austenitic-stainless-Steel') }}">Stainless Steel</a>,
                                        <a href="{{ route('materials.duplex-and-super-duplex') }}">Duplex & Super Duplex
                                            Steel</a>, <a href="{{ route('materials.nickel-Based-Superalloys') }}">Nickel
                                            Alloys</a>, <a href="{{ route('materials.inconel') }}">Inconel</a>, Monel, <a
                                            href="{{ route('materials.titanium') }}">Titanium</a>, Alloy
                                        Steel, Carbon Steel
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Grades</td>
                                    <td>ASTM A193 (B7, B8, B8M, B16), ASTM A320 (L7, L7M), ASTM A453 (Gr. 660)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Size Range</td>
                                    <td>M6 to M100 | 1/4" to 4" (Custom sizes available)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Thread Type</td>
                                    <td>Metric, UNC, UNF, BSW, BSF (Rolled and Machined)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Lengths</td>
                                    <td>10 mm to 3000 mm (Cut-to-length as per project needs)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Finishes</td>
                                    <td>Zinc Plated, PTFE Coated, Hot Dip Galvanized, Black Oxide, Plain</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Types</td>
                                    <td>Fully Threaded, Double Ended, Tap End Studs</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Standards</td>
                                    <td>DIN 975, DIN 976, ASME B16.5, ASME B18.31.2, BS 4882</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Applications</td>
                                    <td>Flanges, Pressure Vessels, Valves, Pumps, Heat Exchangers</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>

   <!-- charts -->
    <section id="size-chart" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Charts</h2>
            </div>

            <!-- Child Title -->
            <div class="section-title center mb-3">
                <h3 class="text-center mb-0" style="color: #db7227;">Size & Weight Chart</h3>
                <h4 class="text-center mb-0" style="color: #db7227;">Fully Threaded Stud Bolts (Indicative Weight kg/100pcs)</h4>
            </div>
            
            <div class="table-responsive mt-4">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr class="t-row">
                            <th>Nominal Size</th>
                            <th>Pitch (mm)</th>
                            <th>50 mm Length</th>
                            <th>100 mm Length</th>
                            <th>150 mm Length</th>
                            <th>200 mm Length</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row"><td>M8</td><td>1.25</td><td>1.6</td><td>3.1</td><td>4.7</td><td>6.3</td></tr>
                        <tr class="t-row"><td>M10</td><td>1.5</td><td>2.5</td><td>4.9</td><td>7.4</td><td>9.9</td></tr>
                        <tr class="t-row"><td>M12</td><td>1.75</td><td>3.6</td><td>7.1</td><td>10.7</td><td>14.2</td></tr>
                        <tr class="t-row"><td>M16</td><td>2.0</td><td>6.3</td><td>12.6</td><td>18.9</td><td>25.2</td></tr>
                        <tr class="t-row"><td>M20</td><td>2.5</td><td>9.9</td><td>19.7</td><td>29.6</td><td>39.5</td></tr>
                        <tr class="t-row"><td>M24</td><td>3.0</td><td>14.2</td><td>28.4</td><td>42.6</td><td>56.8</td></tr>
                        <tr class="t-row"><td>M30</td><td>3.5</td><td>22.2</td><td>44.4</td><td>66.6</td><td>88.8</td></tr>
                        <tr class="t-row"><td>M36</td><td>4.0</td><td>32.0</td><td>63.9</td><td>95.9</td><td>127.8</td></tr>
                    </tbody>
                </table>
            </div>
            <p class="text-center mt-2 small text-muted">*Weights are approximate. Assumes standard carbon/alloy steel density.</p>
        </div>
    </section>

    <section id="types" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Types of Studs – Key Differences</h2>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-12">
                     <p class="fs-6 mb-3 text-justify">
                        Studs are supplied in different configurations depending on the application and joint requirements.
                    </p>

                    <div class="table-responsive ">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Parameter</th>
                                    <th>Fully Threaded Studs</th>
                                    <th>Double End Studs</th>
                                    <th>Tap End Studs</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Configuration</td>
                                    <td>Threaded from end to end</td>
                                    <td>Threaded at both ends with an unthreaded center</td>
                                    <td>Threaded at both ends with unequal thread lengths</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Engagement</td>
                                    <td>Uses nuts on both sides</td>
                                    <td>Uses nuts on both sides</td>
                                    <td>One end tapped into a machined hole, other uses a nut</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Applications</td>
                                    <td>Flanges, high-pressure piping</td>
                                    <td>High-strength structural joints</td>
                                    <td>Engine blocks, blind hole assemblies</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Grades Available --}}
    <section id="chemical-composition" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Available Grades & Materials</h2>
            </div>
            <div class="section-title center mb-3">
                <h4 class="text-center mb-0" style="color: #db7227;">Studs are offered in a wide
                    range of materials and grades:</h4>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Material</th>
                                    <th>Grades</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td><a href="{{ route('materials.austenitic-stainless-Steel') }}">Stainless Steel</a></td>
                                    <td>ASTM A193 B8 (304), B8M (316), B8T (321), B8C (347)</td>
                                </tr>
                                <tr class="t-row">
                                    <td><a href="{{ route('materials.duplex-and-super-duplex') }}">Duplex & Super Duplex</a></td>
                                    <td>UNS S31803 (F51), UNS S32750 (F53), UNS S32760 (F55)</td>
                                </tr>
                                <tr class="t-row">
                                    <td><a href="{{ route('materials.nickel-Based-Superalloys') }}">Nickel Alloys</a></td>
                                    <td>Inconel 718, Inconel 625, Monel 400, Hastelloy C276</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Alloy Steel (High Temp)</td>
                                    <td>ASTM A193 B7, B7M, B16</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Alloy Steel (Low Temp)</td>
                                    <td>ASTM A320 L7, L7M, L43</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Titanium</td>
                                    <td><a href="{{ route('materials.titanium') }}">Grades 2, 5</a> for extreme chemical applications.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Gallery --}}
    <section class="our-services">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.nickel-Based-Superalloys') }}">
                                <img class="w-100" src="{{ asset('assets/images/product/NICKLE-ALLOYS.webp') }}"
                                    alt="Nickel alloy studs" loading="lazy" width="400"
                                    height="260">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0">NICKEL ALLOYS</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.austenitic-stainless-Steel') }}">
                                <img class="w-100" src="{{ asset('assets/images/product/STAINLESS-STEEL.webp') }}"
                                    alt="Stainless steel studs" loading="lazy" width="400"
                                    height="260">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0">STAINLESS STEEL</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.duplex-and-super-duplex') }}">
                                <img class="w-100" src="{{ asset('assets/images/product/DUPLEX-SUPER.webp') }}"
                                    alt="Duplex and super duplex studs" loading="lazy"
                                    width="400" height="260">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0">DUPLEX & SUPER</h6>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.titanium') }}">
                                <img class="w-100" src="{{ asset('assets/images/product/TITANIUM-ALLOYS.webp') }}"
                                    alt="Titanium studs" loading="lazy" width="400"
                                    height="260">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0">TITANIUM ALLOYS</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4 ">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.haynes-Superalloys') }}">
                                <img class="w-100" src="{{ asset('assets/images/product/RARE-TO-ALLOYS.webp') }}"
                                    alt="Haynes superalloy studs" loading="lazy"
                                    width="400" height="260">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0">Haynes Superalloys</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.inconel') }}">
                                <img class="w-100" src="{{ asset('assets/images/product/CARBON-ALLOYS.webp') }}"
                                    alt="Inconel alloy studs" loading="lazy"
                                    width="400" height="260">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0">Inconel</h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Applications --}}
    <section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Studs</h2>
                <p class="text-center pb-3">
                    <strong class="text-black">Studs & Stud Bolts </strong> are crucial for industries where
                    high-tension and reliable clamping force is required:
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon">
                            <i class="bi bi-gear-wide-connected"></i>
                        </div>
                        <h5>Oil & Gas Piping</h5>
                        <ul>
                            <li>Securing pipeline flanges</li>
                            <li>Valve body and bonnet connections</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Power Generation</h5>
                        <ul>
                            <li>Turbine casings and high-pressure steam lines</li>
                            <li>Boiler mountings</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Chemical Processing</h5>
                        <ul>
                            <li>Heat exchangers, reactors, pressure vessels</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Marine & Offshore</h5>
                        <ul>
                            <li>Subsea pipeline connections</li>
                            <li>Offshore platform structures</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-truck"></i></div>
                        <h5>Automotive & Heavy Machinery</h5>
                        <ul>
                            <li>Engine blocks and cylinder heads</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-building"></i></div>
                        <h5>Construction</h5>
                        <ul>
                            <li>Structural anchoring in concrete and steel frameworks</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Industries We Serve --}}
    <section id="industries" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Industries We Serve</h2>
            </div>

            <div class="row g-4 mt-4">

                <div class="col-6 col-md-4 col-lg-2">
                    <div class="application-card text-center">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Power Plants</h5>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-2">
                    <div class="application-card text-center">
                        <div class="application-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Petrochemical</h5>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-2">
                    <div class="application-card text-center">
                        <div class="application-icon"><i class="ri-ship-2-fill"></i></div>
                        <h5>Marine</h5>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-2">
                    <div class="application-card text-center">
                        <div class="application-icon"><i class="ri-test-tube-fill"></i></div>
                        <h5>Chemical</h5>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-2">
                    <div class="application-card text-center">
                        <div class="application-icon"><i class="bi bi-building"></i></div>
                        <h5>Construction</h5>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-2">
                    <div class="application-card text-center">
                        <div class="application-icon"><i class="bi bi-gear"></i></div>
                        <h5>Machinery</h5>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Buying Guide Section -->
    <section id="buying-guide" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Buying Guide:</h2>
                <h4 style="color: #db7227;">How to Select the Right Stud Bolts</h4>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-md-12">
                    <div class="application-card">
                        <div class="application-icon center d-flex align-items-center gap-4 justify-content-center">
                            <i class="bi bi-brightness-high-fill"></i>
                            <h5 class="m-0">Material Selection Guide</h5>
                        </div>

                        <div class="table-responsive mt-3">
                            <table class="table table-bordered">
                                <thead class="table-light">
                                    <tr class="t-row">
                                        <th>Material/Grade</th>
                                        <th>Ideal For</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="t-row">
                                        <td>ASTM A193 B7</td>
                                        <td>High-temperature, high-pressure flanged joints</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>ASTM A320 L7</td>
                                        <td>Low-temperature service (cryogenic pipelines)</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>ASTM A193 B8M (SS316)</td>
                                        <td>Corrosive chemical and marine environments</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td><a href="{{ route('materials.nickel-Based-Superalloys') }}">Inconel / Monel</a>
                                        </td>
                                        <td>Acids, offshore rigs, extreme corrosion</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Engineering Diagrams</h2>
            </div>

            <div class="row justify-content-center mt-4">
                <div class="col-md-8 center">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-diagram-3"></i></div>
                        <img class="w-100" src="{{ asset('/assets/images/fasteners/full-threaded-rods.png') }}"
                            alt="Studs layout diagram" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Uses --}}
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Uses of Studs</h2>
            </div>
            <!-- Child Title -->
            <div class="section-title center mb-3">
                <h4 class="text-center mb-0" style="color: #db7227;">Studs are used extensively
                    across multiple industries, including:</h4>
            </div>
            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h4>Secure Flange Joints</h4>
                        <h5>Ensures leak-proof connections in piping systems</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h4>High-Pressure Systems</h4>
                        <h5>Handles extreme tension in pressure vessels</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h4>Engine Assembly</h4>
                        <h5>Used for mounting engine heads to engine blocks</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h4>Structural Fastening</h4>
                        <h5>Acts as anchors for structural columns in concrete</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h4>Machinery Assembly</h4>
                        <h5>Used to join large, heavy components reliably</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h4>Operational Reliability</h4>
                        <h5>Delivers consistent tensioning without shearing</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    {{-- Advantages --}}
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Advantages </h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h4>Superior Clamping Force</h4>
                        <h5>Evenly distributes tension across joints.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h4>Reduced Shear Stress</h4>
                        <h5>Applying nuts from both sides reduces the risk of shear failure.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h4>Adjustability</h4>
                        <h5>Allows for length adjustments and tensioning using hydraulic tools.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h4>Versatile Material Selection</h4>
                        <h5>Stainless, alloy, carbon, copper <a
                                href="{{ route('materials.nickel-Based-Superalloys') }}">nickel</a> & titanium options.
                        </h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h4>Global Standards Compliance</h4>
                        <h5>Manufactured to ASTM, ASME, DIN, EN requirements.</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="manufacturing" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-3 mt-4">
                <h2 class="fw-bold" style="color: #174268;">Manufacturing Process of Studs</h2>
                <p class="text-justify">Our studs are manufactured using controlled processes to ensure strength, reliable thread engagement, and long service life.</p>
            </div>

            <div class="table-responsive mt-3">
                <table class="table table-bordered table-striped text-center align-middle">
                    <thead class="table-dark">
                        <tr class="t-row">
                            <th class="fw-bold" >Process Step</th>
                            <th class="fw-bold" >Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row">
                            <td>Cutting/Shearing</td>
                            <td>Steel bars are cut to specific lengths.</td>
                        </tr>
                        <tr class="t-row">
                            <td>Thread Rolling/Machining</td>
                            <td>Threads are cold-rolled for better fatigue resistance or machined.</td>
                        </tr>
                        <tr class="t-row">
                            <td>Heat Treatment</td>
                            <td>Quenching and tempering for required tensile strength.</td>
                        </tr>
                        <tr class="t-row">
                            <td>Surface Treatment</td>
                            <td>Zinc plating, PTFE coating, or galvanizing for corrosion resistance.</td>
                        </tr>
                        <tr class="t-row">
                            <td>Testing and Inspection</td>
                            <td>Tensile testing, thread gauge inspection, and PMI.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
             <p class="mt-3 text-center">This ensures uniform thread profiles and reliable performance in high-tension applications.</p>
        </div>
    </section>

    <section id="mechanical-properties" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
             <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Mechanical Properties</h2>
                 <p class="text-center">(Typical values for common stud bolt grades)</p>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr class="t-row">
                            <th>Grade</th>
                            <th>Tensile Strength (MPa min)</th>
                            <th>Yield Strength (MPa min)</th>
                            <th>Elongation (%)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row">
                            <td>ASTM A193 B7</td>
                            <td>860</td>
                            <td>725</td>
                            <td>16</td>
                        </tr>
                         <tr class="t-row">
                            <td>ASTM A193 B8 (Class 1)</td>
                            <td>515</td>
                            <td>205</td>
                            <td>30</td>
                        </tr>
                         <tr class="t-row">
                            <td>ASTM A320 L7</td>
                            <td>860</td>
                            <td>725</td>
                            <td>16</td>
                        </tr>
                    </tbody>
                </table>
            </div>
             <p class="mt-2 text-muted text-center"><small>📌 Actual values depend on material grade, class, and heat treatment.</small></p>
        </div>
    </section>

    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Dimensional Tolerances</h2>
                <p>Studs are manufactured in accordance with strict international tolerances:</p>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Thread Tolerance:</strong> 6g for Metric, Class 2A for Imperial (ASME B1.1)</li>
                        <li class="list-group-item"><strong>Length Tolerance:</strong> ±1.5 mm to ±3.0 mm depending on length</li>
                        <li class="list-group-item"><strong>Straightness:</strong> 0.006 in/in of length maximum</li>
                    </ul>
                     <p class="mt-3 text-center">These tolerances ensure proper nut engagement, pressure integrity, and trouble-free installation in flanges.</p>
                </div>
            </div>
        </div>
    </section>

     <section id="export" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container text-center">
             <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Exports & Supply Coverage</h2>
            </div>
            <p class="fs-5">We supply Studs across major Indian industrial locations including Mumbai, Chennai, Ahmedabad, Pune, and Hyderabad, with efficient logistics support for domestic projects.</p>
            <p class="fs-5">We also regularly export to UAE, Saudi Arabia, Qatar, Oman, and Kuwait, supplying fasteners for piping systems, refineries, and EPC contractors.</p>
        </div>
    </section>

     <!-- Testing & Quality Control -->
    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Testing & Quality Control</h2>
            </div>

            <div class="row g-4 mt-4">

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-hammer"></i></div>
                        <h4>Tensile Test</h4>
                        <h5>To verify maximum load capacity before fracture.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-shaded"></i></div>
                        <h4>Proof Load Test</h4>
                        <h5>Ensures the stud can hold a specific tension without yielding.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-check2-circle"></i></div>
                        <h4>PMI Test</h4>
                        <h5>Positive Material Identification to verify alloy composition.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-rulers"></i></div>
                        <h4>Thread Gauging</h4>
                        <h5>Using GO/NO-GO gauges for thread precision.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-record-circle"></i></div>
                        <h4>Hardness Test</h4>
                        <h5>Testing for strength and durability (Rockwell/Brinell).</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-brightness-high"></i></div>
                        <h4>Magnetic Particle Inspection</h4>
                        <h5>To detect surface cracks on high-strength studs.</h5>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- why choose us --}}
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container text-center">
            <div class="section-title center">
                <h2>Why Choose Moksh Tubes?</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-award-fill"></i></div>
                        <h5>Ready stock for fast dispatch
                        </h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Project-based sourcing & bulk supply capability
                        </h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Compliance with Indian & Gulf standards</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Export-grade packaging & complete documentation</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-file-earmark-text"></i></div>
                        <h5>EN 10204 3.1 Certification</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Technical support for EPC & industrial projects</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--Start faq content area-->
    <section id="faq" class="faq-content-area sec-padd2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="accordion-box">
                        <div class="section-title center">
                            <h2>Frequently Asked Questions (FAQ)</h2>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are Studs and Stud Bolts?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Studs are headless fasteners that are externally threaded, designed to be used with two nuts on either end to secure flanges and heavy machinery together securely.
                                </p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What materials are used to manufacture studs?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    We manufacture studs in Stainless Steel, Alloy Steel (B7, L7), Carbon Steel, Duplex, Super Duplex, Nickel Alloys (Inconel, Monel), and Titanium.
                                </p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What is the difference between B7 and B8 studs?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    ASTM A193 B7 is a high-tensile alloy steel stud for high-temperature and pressure applications, while B8 is a stainless steel (304) stud used primarily for its corrosion resistance.
                                </p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What coatings can be applied?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Common coatings include PTFE (Teflon), Zinc Plating, Hot Dip Galvanizing, and Black Oxide, offering extra protection against severe corrosion.
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
                    For further information, quotes, or customized fastening solutions, <strong>Moksh
                        Tubes & Fittings
                        LLP</strong> is your dependable partner.</p>
                <a href="javascript:void(0);" class="contact-cta-btn" data-bs-toggle="modal"
                    data-bs-target="#contactFormModal">
                    Get in Touch
                </a>
            </div>
        </div>
    </section>

@endsection

@push('styles')
    <style>
        tr.collapse {
            opacity: 0;
            transform: translateY(-6px) scale(0.98);
            transition: opacity .35s ease, transform .35s ease;
        }
        tr.collapsing {
            opacity: 0;
            transform: translateY(-10px) scale(0.96);
            display: table-row !important;
        }
        tr.collapse.show {
            opacity: 1;
            transform: translateY(0) scale(1);
            display: table-row;
        }
    </style>
@endpush

@section('jsscripts')
    @verbatim
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@graph": [
            {
              "@type": ["Organization", "LocalBusiness"],
              "@id": "https://mokshtubes.com/#organization",
              "name": "Moksh Tubes & Fittings LLP",
              "url": "https://mokshtubes.com/",
              "logo": "https://mokshtubes.com/assets/images/logo.webp",
              "telephone": "+91-9769584950",
              "email": "info@mokshtubes.com"
            },
            {
              "@type": "WebPage",
              "@id": "https://mokshtubes.com/products/fasteners/studs#webpage",
              "name": "Studs & Stud Bolts | Moksh Tubes & Fittings LLP",
              "url": "https://mokshtubes.com/products/fasteners/studs",
              "description": "High-strength studs and stud bolts for flanged connections and high-pressure systems. Available in alloy, stainless, duplex, and nickel alloys."
            },
            {
              "@type": ["Product"],
              "@id": "https://mokshtubes.com/#studs",
              "name": "Studs & Stud Bolts",
              "image": "https://mokshtubes.com/assets/images/product/flangs/FASTENERS.webp",
              "category": "Fasteners",
              "brand": { "@id": "https://mokshtubes.com/#organization" }
            }
          ]
        }
        </script>
    @endverbatim
@endsection
