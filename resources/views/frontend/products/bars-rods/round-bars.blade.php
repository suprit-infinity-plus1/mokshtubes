@extends('layouts.master')

@section('title', 'Round Bars Manufacturer, Supplier & Exporter in India | SS, MS, Alloy')
@section('meta_description', 'Buy high-quality Round Bars in Stainless Steel, Carbon Steel, Alloy Steel, Duplex, Nickel Alloy, Titanium, Aluminium & Brass grades from Moksh Tubes.')
@section('meta_keywords', 'Round Bars, Stainless Steel Round Bars, Carbon Steel Round Bars, Alloy Steel Round Bars, MS Round Bars, Aluminium Round Bars, Brass Round Bars')
@section('og_image', asset('assets/images/product/Bars-&-Rods/round-bars.webp'))
@section('og_title', 'Round Bars Manufacturer, Supplier & Exporter in India')
@section('og_type', 'article')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url('{{ asset('assets/images/product/Bars-&-Rods/round-bars.webp') }}');">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Round Bars Manufacturer, Supplier & Exporter in India</h1>

                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px; max-width: 900px;">
                        Round Bars are among the most widely used metal products in engineering, construction, manufacturing, automotive, aerospace, marine, oil & gas, and industrial applications. Their circular cross-section provides excellent strength, machinability, and load-bearing capability, making them ideal for shafts, fasteners, machine components, structural supports, and precision-engineered parts.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

    <!-- Start Material Tabs -->
    <div class="sticky-top bg-white border-bottom material-tabs w-100">
        <div class="container d-flex flex-wrap justify-content-center" style="gap: 15px; padding: 10px 0;">
            <a href="#overview">Overview</a> |
            <a href="#specifications">Specifications</a> |
            <a href="#size-weight">Weight Chart</a> |
            <a href="#types">Types</a> |
            <a href="#grades">Grades</a> |
            <a href="#manufacturing">Manufacturing</a> |
            <a href="#mechanical">Mechanical Properties</a> |
            <a href="#applications">Applications</a> |
            <a href="#buying-guide">Buying Guide</a> |
            <a href="#testing">Testing</a> |
            <a href="#industries">Industries Served</a> |
            <a href="#faq">FAQ</a>
        </div>
    </div>
    <!-- End Material Tabs -->

    <section id="overview" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Product Overview</h2>
            </div>

            <h3 class="fw-semibold text-center mb-5" style="color: #db7227;">
                ROUND BARS
            </h3>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/product/Bars-&-Rods/round-bars.webp') }}" alt="Round Bars"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4" style="text-align: justify;">
                            <strong class="text-black">Round Bars</strong> are solid cylindrical metal bars extensively used across numerous industries for fabrication, machining, forging, structural reinforcement, and manufacturing applications. Due to their uniform shape and excellent mechanical properties, round bars serve as the primary raw material for producing shafts, bolts, fasteners, gears, valves, pumps, bearings, machine parts, and engineering components.
                        </p>

                        <p class="fs-6 mb-4" style="text-align: justify;">
                            Whether used in high-temperature environments, corrosive conditions, marine applications, heavy engineering projects, or precision machining operations, round bars provide the strength and reliability required for demanding industrial applications.
                        </p>

                        <p class="fs-6 mb-4" style="text-align: justify;">
                            At <strong style="color:black;"><a href="{{ url('/contact-us') }}">Moksh Tubes & Fittings LLP</a></strong>, we offer an extensive range of Stainless Steel Round Bars, Mild Steel Round Bars, Alloy Steel Round Bars, Duplex Round Bars, Inconel Round Bars, Monel Round Bars, Titanium Round Bars, Brass Round Bars, Copper Round Bars, and Aluminium Round Bars for domestic and international projects.
                        </p>

                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Round Bars Datasheet</h3>
            <p class="mb-3">
                Get the complete datasheet including chemical composition, mechanical properties, standards, tolerances, and
                application guidelines. Enter your email to receive the PDF instantly.
            </p>

            <form id="leadForm" method="POST" action="{{ route('lead.capture') }}" class="mb-3">
                @csrf
                <input type="hidden" name="page_path" value="{{ Request::path() }}">
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

    <section id="specifications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Specifications of Round Bars</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Category</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Product</td>
                                    <td>Round Bars</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Material</td>
                                    <td>Stainless Steel, Carbon Steel, Alloy Steel, Duplex, Nickel Alloy, Titanium, Aluminium, Brass & Copper</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Diameter Range</td>
                                    <td>3 mm to 500 mm</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Custom Diameter</td>
                                    <td>Up to 600 mm</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Length</td>
                                    <td>3m, 4m, 6m & Custom Cut Lengths</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Types</td>
                                    <td>Hot Rolled, Cold Drawn, Forged, Bright Bars</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Finishes</td>
                                    <td>Bright, Polished, Peeled, Ground, Shot Blasted, Pickled & Passivated</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Standards</td>
                                    <td>ASTM A276, ASTM A479, ASTM A484, ASTM A582, EN 10060, DIN 671</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Certification</td>
                                    <td>EN 10204 3.1, Mill Test Certificates</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="size-weight" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Round Bar Weight Chart</h2>
            </div>

            <p class="text-center mb-4 fs-5">Moksh Tubes supplies round bars from 3 mm to 500 mm diameter with custom diameters available upon request.</p>

            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <p class="fs-5 p-4 border rounded bg-white shadow-sm">
                        The complete Round Bar Weight Chart from 6 mm to 200 mm can be inserted here as provided in the technical specification section.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="types" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Types of Round Bars</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-3">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-hammer"></i></div>
                        <h5>Hot Rolled Round Bars</h5>
                        <p>Hot rolled round bars are produced at elevated temperatures and are commonly used in construction, fabrication, heavy engineering, and structural applications.</p>
                        <hr>
                        <h6>Features</h6>
                        <ul class="text-start mb-0 ps-3">
                            <li>Cost-effective solution</li>
                            <li>Excellent strength</li>
                            <li>Easy fabrication</li>
                            <li>Suitable for large structural projects</li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-rulers"></i></div>
                        <h5>Cold Drawn Round Bars</h5>
                        <p>Cold drawn round bars offer tighter dimensional tolerances and improved surface finish.</p>
                        <hr>
                        <h6>Features</h6>
                        <ul class="text-start mb-0 ps-3">
                            <li>Superior dimensional accuracy</li>
                            <li>Better machinability</li>
                            <li>Enhanced mechanical properties</li>
                            <li>Smooth surface finish</li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Forged Round Bars</h5>
                        <p>Forged round bars are manufactured through forging operations to improve grain structure and strength.</p>
                        <hr>
                        <h6>Features</h6>
                        <ul class="text-start mb-0 ps-3">
                            <li>High impact resistance</li>
                            <li>Superior fatigue strength</li>
                            <li>Excellent toughness</li>
                            <li>Ideal for heavy engineering</li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-stars"></i></div>
                        <h5>Bright Round Bars</h5>
                        <p>Bright round bars are precision-finished products used for decorative, architectural, and precision machining applications.</p>
                        <hr>
                        <h6>Features</h6>
                        <ul class="text-start mb-0 ps-3">
                            <li>Excellent surface finish</li>
                            <li>Tight tolerances</li>
                            <li>Attractive appearance</li>
                            <li>Suitable for precision components</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="grades" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Grades Available</h2>
            </div>
            
            <div class="row align-items-center mt-4 justify-content-center">
                <div class="col-lg-10">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Material</th>
                                    <th>Available Grades</th>
                                    <th>Application</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td class="fw-bold text-center">Stainless Steel</td>
                                    <td>304, 304L, 316, 316L, 310, 321, 347</td>
                                    <td>Ideal for food processing, pharmaceutical, marine, and chemical industries.</td>
                                </tr>
                                <tr class="t-row">
                                    <td class="fw-bold text-center">Carbon Steel</td>
                                    <td>ASTM A36, EN8, EN9, IS 2062</td>
                                    <td>Suitable for construction, fabrication, and engineering applications.</td>
                                </tr>
                                <tr class="t-row">
                                    <td class="fw-bold text-center">Alloy Steel</td>
                                    <td>EN19, EN24, EN31, AISI 4140, AISI 4130</td>
                                    <td>Designed for high-strength engineering applications.</td>
                                </tr>
                                <tr class="t-row">
                                    <td class="fw-bold text-center">Duplex & Super Duplex</td>
                                    <td>Duplex 2205, S31803, S32750, S32760</td>
                                    <td>Used in offshore, marine, and corrosive environments.</td>
                                </tr>
                                <tr class="t-row">
                                    <td class="fw-bold text-center">Nickel Alloy</td>
                                    <td>Inconel 600, Inconel 625, Inconel 718, Alloy 601, Monel 400, Monel K500, Waspaloy</td>
                                    <td>Designed for extreme temperatures and corrosive environments.</td>
                                </tr>
                                <tr class="t-row">
                                    <td class="fw-bold text-center">Titanium</td>
                                    <td>Grade 2, Grade 5</td>
                                    <td>Preferred for aerospace, desalination, and chemical industries.</td>
                                </tr>
                                <tr class="t-row">
                                    <td class="fw-bold text-center">Copper & Brass</td>
                                    <td>Copper C11000, Brass C26000, Phosphor Bronze</td>
                                    <td>Used in marine, decorative, and electrical applications.</td>
                                </tr>
                                <tr class="t-row">
                                    <td class="fw-bold text-center">Aluminium</td>
                                    <td>6061, 6082, 7075</td>
                                    <td>Lightweight and corrosion-resistant for engineering applications.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="manufacturing" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Manufacturing Process of Round Bars</h2>
            </div>
            
            <p class="text-center mb-4">The manufacturing of round bars involves advanced metallurgical processes to achieve optimum mechanical properties and dimensional accuracy.</p>

            <div class="row mt-4 justify-content-center">
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="pe-md-3">
                                <p class="fs-6" style="text-align: justify;"><strong>Raw Material Selection</strong><br>
                                High-quality billets and ingots are selected according to ASTM, ASME, DIN, EN, and JIS standards.</p>
                                
                                <p class="fs-6 mt-3" style="text-align: justify;"><strong>Hot Rolling & Forging</strong><br>
                                The material is processed into round profiles through rolling or forging operations.</p>
                                
                                <p class="fs-6 mt-3" style="text-align: justify;"><strong>Heat Treatment</strong><br>
                                Depending on the grade, round bars may undergo Annealing, Solution Annealing, Normalizing, Quenching & Tempering, or Stress Relieving.</p>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="pe-md-3">
                                <p class="fs-6 mt-3" style="text-align: justify;"><strong>Surface Finishing</strong><br>
                                Available finishing processes include Grinding, Polishing, Bright Drawing, Pickling, Passivation, and Peeling.</p>
                                
                                <p class="fs-6 mt-3" style="text-align: justify;"><strong>Inspection & Testing</strong><br>
                                Every batch undergoes strict quality control procedures before dispatch.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="mechanical" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Mechanical Properties</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h4 class="text-center mb-3" style="color: #db7227;">Mechanical Properties of Round Bars</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Material Grade</th>
                                    <th>Tensile Strength (MPa)</th>
                                    <th>Yield Strength (MPa)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>SS 304</td><td>515</td><td>205</td></tr>
                                <tr class="t-row"><td>SS 316</td><td>515</td><td>205</td></tr>
                                <tr class="t-row"><td>EN8</td><td>550</td><td>280</td></tr>
                                <tr class="t-row"><td>EN19</td><td>850</td><td>680</td></tr>
                                <tr class="t-row"><td>Duplex 2205</td><td>620</td><td>450</td></tr>
                                <tr class="t-row"><td>Inconel 625</td><td>827</td><td>414</td></tr>
                                <tr class="t-row"><td>Titanium Grade 2</td><td>345</td><td>275</td></tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="text-center mt-3">
                        📌 Actual values vary depending on material grade, diameter, and heat treatment condition.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Round Bars</h2>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card h-100">
                        <div class="application-icon"><i class="bi bi-building"></i></div>
                        <h5>Construction & Infrastructure</h5>
                        <p>✔ Structural supports<br>✔ Reinforcement systems<br>✔ Tie rods<br>✔ Foundation applications</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card h-100">
                        <div class="application-icon"><i class="bi bi-tsunami"></i></div>
                        <h5>Marine & Offshore</h5>
                        <p>✔ Marine shafts<br>✔ Offshore structures<br>✔ Propeller components<br>✔ Corrosion-resistant fittings</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card h-100">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Oil & Gas Industry</h5>
                        <p>✔ Valve components<br>✔ Pump shafts<br>✔ Pipeline equipment<br>✔ Refinery components</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card h-100">
                        <div class="application-icon"><i class="bi bi-car-front"></i></div>
                        <h5>Automotive & Aerospace</h5>
                        <p>✔ Axles<br>✔ Suspension components<br>✔ Landing gear components<br>✔ Structural aerospace parts</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="application-card h-100">
                        <div class="application-icon"><i class="bi bi-gear"></i></div>
                        <h5>Industrial Manufacturing</h5>
                        <p>✔ Machinery parts<br>✔ Fasteners<br>✔ Bearings<br>✔ Engineering equipment</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card h-100">
                        <div class="application-icon"><i class="bi bi-stars"></i></div>
                        <h5>Decorative & Architectural</h5>
                        <p>✔ Railings<br>✔ Furniture<br>✔ Interior design structures<br>✔ Decorative metalwork</p>
                    </div>
                </div>
            </div>
            
            <div class="row mt-5 justify-content-center">
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <h4 class="mb-3" style="color: #174268;">Uses of Round Bars</h4>
                            <ul class="list-unstyled lh-lg">
                                <li>✔ Machining stock</li>
                                <li>✔ Structural fabrication</li>
                                <li>✔ Fastener manufacturing</li>
                                <li>✔ Industrial machinery</li>
                                <li>✔ Engineering components</li>
                                <li>✔ Automotive applications</li>
                                <li>✔ Aerospace applications</li>
                                <li>✔ Marine hardware</li>
                            </ul>
                        </div>
                        <div class="col-md-6 mb-4">
                            <h4 class="mb-3" style="color: #174268;">Advantages of Round Bars</h4>
                            <ul class="list-unstyled lh-lg">
                                <li>✔ Excellent machinability</li>
                                <li>✔ High strength-to-weight ratio</li>
                                <li>✔ Superior dimensional accuracy</li>
                                <li>✔ Available in numerous grades</li>
                                <li>✔ Corrosion-resistant options available</li>
                                <li>✔ Easy fabrication and welding</li>
                                <li>✔ Long service life</li>
                                <li>✔ Suitable for critical engineering applications</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="buying-guide" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="row mt-4 justify-content-center">
                <div class="col-md-6 col-lg-5 mb-4">
                    <div class="application-card h-100 p-4 bg-white border rounded shadow-sm">
                        <h4 class="mb-3" style="color: #174268;">Buying Guide – How to Select the Right Round Bar</h4>
                        <p class="mb-3">Before purchasing round bars, consider:</p>
                        <ul class="list-unstyled lh-lg mb-0 text-start">
                            <li>✔ Material grade</li>
                            <li>✔ Mechanical strength requirements</li>
                            <li>✔ Corrosion resistance needs</li>
                            <li>✔ Surface finish requirements</li>
                            <li>✔ Diameter tolerance requirements</li>
                            <li>✔ Machining and welding requirements</li>
                            <li>✔ Applicable standards</li>
                            <li>✔ Project specifications</li>
                        </ul>
                        <p class="mt-3 text-muted"><em>For export projects, EN 10204 3.1 certification and full traceability are recommended.</em></p>
                    </div>
                </div>

                <div id="testing" class="col-md-6 col-lg-5 mb-4">
                    <div class="application-card h-100 p-4 bg-white border rounded shadow-sm">
                        <h4 class="mb-3" style="color: #174268;">Testing & Quality Control</h4>
                        <p class="mb-3">All round bars supplied by Moksh Tubes & Fittings LLP undergo strict quality inspections:</p>
                        <ul class="list-unstyled lh-lg mb-0 text-start">
                            <li>✔ Visual Inspection</li>
                            <li>✔ Dimensional Verification</li>
                            <li>✔ Chemical Analysis</li>
                            <li>✔ Tensile Testing</li>
                            <li>✔ Hardness Testing</li>
                            <li>✔ PMI Testing</li>
                            <li>✔ Ultrasonic Testing</li>
                            <li>✔ Surface Finish Inspection</li>
                        </ul>
                        <p class="mt-3 text-muted"><em>Mill Test Certificates and third-party inspection reports are available upon request.</em></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="industries" class="sec-padd-top sec-padd-bottom">
        <div class="container text-center">
            <div class="section-title center">
                <h2>Industries We Serve</h2>
            </div>
            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-4 col-md-3"><div class="p-3 border rounded bg-light">Construction</div></div>
                <div class="col-sm-4 col-md-3"><div class="p-3 border rounded bg-light">Infrastructure</div></div>
                <div class="col-sm-4 col-md-3"><div class="p-3 border rounded bg-light">Oil & Gas</div></div>
                <div class="col-sm-4 col-md-3"><div class="p-3 border rounded bg-light">Petrochemical</div></div>
                <div class="col-sm-4 col-md-3"><div class="p-3 border rounded bg-light">Marine & Offshore</div></div>
                <div class="col-sm-4 col-md-3"><div class="p-3 border rounded bg-light">Power Generation</div></div>
                <div class="col-sm-4 col-md-3"><div class="p-3 border rounded bg-light">Aerospace</div></div>
                <div class="col-sm-4 col-md-3"><div class="p-3 border rounded bg-light">Automotive</div></div>
                <div class="col-sm-4 col-md-3"><div class="p-3 border rounded bg-light">Heavy Engineering</div></div>
                <div class="col-sm-4 col-md-3"><div class="p-3 border rounded bg-light">Manufacturing</div></div>
                <div class="col-sm-4 col-md-3"><div class="p-3 border rounded bg-light">Mining</div></div>
                <div class="col-sm-4 col-md-3"><div class="p-3 border rounded bg-light">Defense</div></div>
            </div>
        </div>
    </section>

    <section id="why-choose-us" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container text-center">
            <div class="section-title center">
                <h2>Why Choose Moksh Tubes & Fittings LLP?</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block h-100 bg-white border p-4 rounded">
                        <div class="why-banner-icon mb-3"><i class="bi bi-box-seam fs-2 text-primary"></i></div>
                        <h5>Extensive stock availability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block h-100 bg-white border p-4 rounded">
                        <div class="why-banner-icon mb-3"><i class="bi bi-diagram-3 fs-2 text-primary"></i></div>
                        <h5>Wide range of material grades</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block h-100 bg-white border p-4 rounded">
                        <div class="why-banner-icon mb-3"><i class="bi bi-tags fs-2 text-primary"></i></div>
                        <h5>Competitive pricing</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block h-100 bg-white border p-4 rounded">
                        <div class="why-banner-icon mb-3"><i class="bi bi-award fs-2 text-primary"></i></div>
                        <h5>ISO-certified quality systems</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block h-100 bg-white border p-4 rounded">
                        <div class="why-banner-icon mb-3"><i class="bi bi-globe2 fs-2 text-primary"></i></div>
                        <h5>Worldwide export capability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block h-100 bg-white border p-4 rounded">
                        <div class="why-banner-icon mb-3"><i class="bi bi-truck fs-2 text-primary"></i></div>
                        <h5>Fast dispatch schedules</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block h-100 bg-white border p-4 rounded">
                        <div class="why-banner-icon mb-3"><i class="bi bi-headset fs-2 text-primary"></i></div>
                        <h5>Technical support</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block h-100 bg-white border p-4 rounded">
                        <div class="why-banner-icon mb-3"><i class="bi bi-scissors fs-2 text-primary"></i></div>
                        <h5>Custom cutting services</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block h-100 bg-white border p-4 rounded">
                        <div class="why-banner-icon mb-3"><i class="bi bi-file-earmark-check fs-2 text-primary"></i></div>
                        <h5>Complete documentation and traceability</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="faq" class="faq-content-area sec-padd2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="accordion-box">
                        <div class="section-title center">
                            <h2>Frequently Asked Questions</h2>
                        </div>

                        <!-- Q1 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are Round Bars?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Round Bars are solid cylindrical metal bars used for machining, fabrication, structural applications, and manufacturing components.</p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What materials are available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Round bars are available in stainless steel, carbon steel, alloy steel, duplex steel, nickel alloys, titanium, brass, copper, and aluminium.</p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What sizes are available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Round bars are available from 3 mm to 500 mm diameter, with custom diameters available upon request.</p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What is the difference between hot rolled and cold drawn round bars?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Hot rolled bars are economical and suitable for structural applications, while cold drawn bars provide tighter tolerances and improved surface finish.</p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Can round bars be supplied in custom lengths?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Yes. We supply cut-to-length round bars according to customer specifications.</p>
                            </div>
                        </div>

                        <!-- Q6 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Do you provide Mill Test Certificates?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Yes. EN 10204 3.1 Mill Test Certificates and third-party inspection reports are available.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact-us" class="sec-padd-bottom bg-light">
        <div class="container">
            <div class="contact-cta-box text-center p-5 rounded border shadow-sm">
                <h2>Request A Quote</h2>
                <p class="fs-5 mt-3">
                    Looking for premium-quality Round Bars for construction, engineering, machining, marine, or industrial projects?<br>
                    Contact <strong>Moksh Tubes & Fittings LLP</strong> today for competitive pricing, technical assistance, and worldwide delivery.<br><br>
                    📞 <strong>Call:</strong> +91 97695 84950<br><br>
                    We supply Stainless Steel Round Bars, Carbon Steel Round Bars, Alloy Steel Round Bars, Duplex Round Bars, Nickel Alloy Round Bars, Titanium Round Bars, Brass Round Bars, Copper Round Bars, and Aluminium Round Bars manufactured to the highest international standards.
                </p>
                <!-- Call button -->
                <a href="javascript:void(0);" class="btn btn-lg mt-4 text-white" style="background-color: #db7227; padding: 12px 30px; border-radius: 8px;" data-bs-toggle="modal"
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
        [{
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "Moksh Tubes & Fittings LLP",
            "url": "https://www.mokshtubes.com",
            "logo": "https://www.mokshtubes.com/assets/logo.png",
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+91-97695-84950",
                "email": "sales@mokshtubes.com",
                "contactType": "sales",
                "areaServed": ["IN","AE","SA","QA","OM","KW","US","EU"],
                "availableLanguage": ["English"]
            }
        },
        {
            "@context": "https://schema.org",
            "@type": "Product",
            "name": "Round Bars",
            "description": "Buy high-quality Round Bars in Stainless Steel, Carbon Steel, Alloy Steel, Duplex, Nickel Alloy, Titanium, Aluminium & Brass grades from Moksh Tubes.",
            "brand": {
                "@type": "Brand",
                "name": "Moksh Tubes & Fittings LLP"
            },
            "manufacturer": {
                "@type": "Organization",
                "name": "Moksh Tubes & Fittings LLP"
            },
            "url": "https://www.mokshtubes.com/round-bars",
            "offers": {
                "@type": "AggregateOffer",
                "priceCurrency": "USD",
                "lowPrice": "1.5",
                "highPrice": "50",
                "offerCount": "100"
            }
        },
        {
            "@context": "https://schema.org",
            "@type": "FAQPage",
            "mainEntity": [
                {
                    "@type": "Question",
                    "name": "What are Round Bars?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Round Bars are solid cylindrical metal bars used for machining, fabrication, structural applications, and manufacturing components."
                    }
                },
                {
                    "@type": "Question",
                    "name": "What materials are available?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Round bars are available in stainless steel, carbon steel, alloy steel, duplex steel, nickel alloys, titanium, brass, copper, and aluminium."
                    }
                },
                {
                    "@type": "Question",
                    "name": "What sizes are available?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Round bars are available from 3 mm to 500 mm diameter, with custom diameters available upon request."
                    }
                },
                {
                    "@type": "Question",
                    "name": "What is the difference between hot rolled and cold drawn round bars?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Hot rolled bars are economical and suitable for structural applications, while cold drawn bars provide tighter tolerances and improved surface finish."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Can round bars be supplied in custom lengths?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Yes. We supply cut-to-length round bars according to customer specifications."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Do you provide Mill Test Certificates?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Yes. EN 10204 3.1 Mill Test Certificates and third-party inspection reports are available."
                    }
                }
            ]
        }]
        @endverbatim
    </script>
@endsection
