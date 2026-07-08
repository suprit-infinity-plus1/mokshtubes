@extends('layouts.master')
@section('title', 'Allen Bolts & Socket Head Cap Screws | India & GCC')
<!-- 52 characters -->
@section('meta_description',
    'Allen Bolts and Socket Head Cap Screws for high-precision, high-strength industrial applications. Available in Stainless Steel, Alloy, and High-Tensile grades.')
@section('meta_keywords',
    'Allen Bolts, Socket Head Cap Screws, Fasteners, Hex Socket Screws, Stainless Steel Allen Bolts, High Tensile Bolts')
@section('og_image', asset('assets/images/product/flangs/FASTENERS.webp'))
@section('og_type', 'product')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/product/flangs/FASTENERS.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1 class="page-title">Allen Bolts (Socket Head Cap Screws)</h1>
                        <p class="text-center mt-3 px-3 py-2 text-white position-relative" style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Allen Bolts (also known as Socket Head Cap Screws) are precision fasteners designed for applications with limited clearance requiring high clamping force. At <a href="{{ route('index') }}" class="text-white text-decoration-underline">Moksh Tubes & Fittings LLP</a>, we supply high-tensile and corrosion-resistant Allen Bolts in carbon steel, alloy steel, stainless steel, and specialty grades—fully compliant with DIN, ISO, ASTM, and ASME standards.  
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
                <h2 class="fw-bold" style="color: #174268;">Allen Bolts / Socket Head Cap Screws</h2>
            </div>

            <div class="row align-items-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('/assets/images/product/flangs/FASTENERS.webp') }}"
                        alt="Allen Bolts" class="img-fluid rounded shadow-sm" width="550"
                        height="350" loading="lazy">
                </div>

                <div class="col-md-6">
                    <p class="fs-6 mb-3 text-justify">
                        <strong class="text-black">Allen Bolts</strong>, commonly referred to as Socket Head Cap Screws, feature a cylindrical head and a hexagonal drive hole. They are driven using an Allen wrench (hex key), making them ideal for applications where there is not enough space to use a traditional wrench or socket.
                    </p>

                    <p class="fs-6 mb-3 text-justify">
                        <a href="{{ route('index') }}">Moksh Tubes & Fittings LLP</a> is a trusted manufacturer,
                        supplier, and exporter of Allen Bolts in India, supplying premium-quality fasteners
                        conforming to DIN 912, ISO 4762, and ASME standards. Our products are widely
                        supplied to <a href="{{ route('materials.austenitic-stainless-Steel') }}">Indian projects</a> and
                        Gulf / GCC countries including UAE, Saudi Arabia, Qatar, Oman, and Kuwait.
                    </p>

                    <p class="fs-6 text-justify">
                        Manufactured using advanced cold forging techniques, our socket head cap screws offer
                        exceptional tensile strength, precise thread engagement, and a sleek profile for high-end machinery and precision equipment.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Allen Bolts Datasheet</h3>
            <p class="mb-3">
                Get the complete datasheet with dimensional tolerances, mechanical properties, and tightening torques.
                Enter your email below to receive the PDF instantly.
            </p>

            <form id="leadForm" method="POST" action="https://mokshtubes.com/datasheet-leads-capture" class="mb-3">
                <input type="hidden" name="_token" value="WNVWvpO4YR2OqZaIJDl2mE3UfyreGys3Vp19brsc" autocomplete="off">
                <div class="row justify-content-center">
                    <input type="hidden" name="pdf" value="allen-bolts-datasheet.pdf">
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
            <p class="small text-muted">We respect your privacy. Your email will only be used to send the datasheet.</p>
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
                                    <td>High Tensile Alloy Steel, <a href="{{ route('materials.austenitic-stainless-Steel') }}">Stainless Steel</a>,
                                        <a href="{{ route('materials.duplex-and-super-duplex') }}">Duplex Steel</a>
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Property Classes</td>
                                    <td>8.8, 10.9, 12.9 (High Tensile), A2-70, A4-70, A4-80 (Stainless Steel)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Size Range</td>
                                    <td>M3 to M48 | 1/8" to 2"</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Lengths</td>
                                    <td>6 mm to 500 mm</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Thread Type</td>
                                    <td>Metric Coarse, Metric Fine, UNC, UNF</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Finishes</td>
                                    <td>Black Oxide, Zinc Plated, Plain, PTFE Coated</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Standards</td>
                                    <td>DIN 912, ISO 4762, ASME B18.3, IS 2269</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Applications</td>
                                    <td>Machinery, Dies, Injection Molding, Precision Engineering</td>
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
            <div class="section-title center mb-3">
                <h3 class="text-center mb-0" style="color: #db7227;">Size Chart</h3>
                <h4 class="text-center mb-0" style="color: #db7227;">Socket Head Cap Screws Dimensions (DIN 912)</h4>
            </div>
            
            <div class="table-responsive mt-4">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr class="t-row">
                            <th>Nominal Size (d)</th>
                            <th>Pitch (mm)</th>
                            <th>Head Diameter (dk) - mm</th>
                            <th>Head Height (k) - mm</th>
                            <th>Socket Size (s) - mm</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row"><td>M4</td><td>0.7</td><td>7.0</td><td>4.0</td><td>3.0</td></tr>
                        <tr class="t-row"><td>M5</td><td>0.8</td><td>8.5</td><td>5.0</td><td>4.0</td></tr>
                        <tr class="t-row"><td>M6</td><td>1.0</td><td>10.0</td><td>6.0</td><td>5.0</td></tr>
                        <tr class="t-row"><td>M8</td><td>1.25</td><td>13.0</td><td>8.0</td><td>6.0</td></tr>
                        <tr class="t-row"><td>M10</td><td>1.5</td><td>16.0</td><td>10.0</td><td>8.0</td></tr>
                        <tr class="t-row"><td>M12</td><td>1.75</td><td>18.0</td><td>12.0</td><td>10.0</td></tr>
                        <tr class="t-row"><td>M16</td><td>2.0</td><td>24.0</td><td>16.0</td><td>14.0</td></tr>
                        <tr class="t-row"><td>M20</td><td>2.5</td><td>30.0</td><td>20.0</td><td>17.0</td></tr>
                        <tr class="t-row"><td>M24</td><td>3.0</td><td>36.0</td><td>24.0</td><td>19.0</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section id="types" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Types of Socket Screws</h2>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="table-responsive ">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Type</th>
                                    <th>Description</th>
                                    <th>Standard</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Socket Head Cap Screw</td>
                                    <td>Cylindrical head for high strength clamping</td>
                                    <td>DIN 912 / ISO 4762</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Countersunk Socket Screw</td>
                                    <td>Flat head for flush installation</td>
                                    <td>DIN 7991</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Button Head Socket Screw</td>
                                    <td>Low profile dome head for safety and aesthetics</td>
                                    <td>ISO 7380</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Socket Set Screw (Grub Screw)</td>
                                    <td>Headless screw for securing pulleys and gears</td>
                                    <td>DIN 916</td>
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
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Material</th>
                                    <th>Grades / Property Classes</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td>High Tensile Alloy Steel</td>
                                    <td>Class 8.8, Class 10.9, Class 12.9</td>
                                </tr>
                                <tr class="t-row">
                                    <td><a href="{{ route('materials.austenitic-stainless-Steel') }}">Stainless Steel</a></td>
                                    <td>A2 (SS304), A4 (SS316)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Specialty Alloys</td>
                                    <td>ASTM A193 B7/B8/B8M configuration per ASME B18.3</td>
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
                            <a class="w-100" href="{{ route('materials.austenitic-stainless-Steel') }}">
                                <img class="w-100" src="{{ asset('assets/images/product/STAINLESS-STEEL.webp') }}"
                                    alt="Stainless steel Allen Bolts" loading="lazy" width="400" height="260">
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
                            <a class="w-100" href="{{ route('materials.nickel-Based-Superalloys') }}">
                                <img class="w-100" src="{{ asset('assets/images/product/CARBON-ALLOYS.webp') }}"
                                    alt="High Tensile Allen Bolts" loading="lazy" width="400" height="260">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0">HIGH TENSILE STEEL</h6>
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
                <h2>Applications of Allen Bolts</h2>
            </div>
            <div class="row g-4 mt-4">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Precision Engineering</h5>
                        <ul><li>Machine tools and automated systems</li></ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cpu"></i></div>
                        <h5>Die & Mold Making</h5>
                        <ul><li>Securing heavy dies in injection molding machines</li></ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-car-front"></i></div>
                        <h5>Automotive & Aerospace</h5>
                        <ul><li>Engine components and structural assemblies</li></ul>
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
                <div class="col-6 col-md-4 col-lg-2"><div class="application-card text-center"><div class="application-icon"><i class="bi bi-gear"></i></div><h5>Machine Tools</h5></div></div>
                <div class="col-6 col-md-4 col-lg-2"><div class="application-card text-center"><div class="application-icon"><i class="bi bi-hammer"></i></div><h5>Tool & Die</h5></div></div>
                <div class="col-6 col-md-4 col-lg-2"><div class="application-card text-center"><div class="application-icon"><i class="ri-car-fill"></i></div><h5>Automotive</h5></div></div>
                <div class="col-6 col-md-4 col-lg-2"><div class="application-card text-center"><div class="application-icon"><i class="bi bi-robot"></i></div><h5>Robotics</h5></div></div>
                <div class="col-6 col-md-4 col-lg-2"><div class="application-card text-center"><div class="application-icon"><i class="bi bi-building"></i></div><h5>Construction</h5></div></div>
                <div class="col-6 col-md-4 col-lg-2"><div class="application-card text-center"><div class="application-icon"><i class="ri-rocket-fill"></i></div><h5>Aerospace</h5></div></div>
            </div>
        </div>
    </section>

    <!-- Buying Guide Section -->
    <section id="buying-guide" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Buying Guide:</h2>
                <h4 style="color: #db7227;">How to Select the Right Allen Bolts</h4>
            </div>
            <div class="row g-4 mt-4">
                <div class="col-md-12">
                    <div class="application-card">
                        <div class="table-responsive mt-3">
                            <table class="table table-bordered">
                                <thead class="table-light">
                                    <tr class="t-row"><th>Property Class</th><th>Ideal For</th></tr>
                                </thead>
                                <tbody>
                                    <tr class="t-row"><td>Class 8.8</td><td>General high-strength machinery applications</td></tr>
                                    <tr class="t-row"><td>Class 10.9</td><td>Automotive suspensions, critical structural joints</td></tr>
                                    <tr class="t-row"><td>Class 12.9</td><td>Maximum strength requirements like heavy presses and molds</td></tr>
                                    <tr class="t-row"><td>A2 / A4 (Stainless)</td><td>Food processing, marine, and outdoor environments</td></tr>
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
                <div class="col-md-6 center">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-diagram-3"></i></div>
                        <img class="w-100" src="{{ asset('/assets/images/fasteners/allen-bolts.png') }}" alt="Allen Bolts layout diagram" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Uses --}}
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Uses of Allen Bolts</h2>
            </div>
            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4"><div class="advantage-card"><h4>Confined Spaces</h4><h5>Ideal where wrench clearance is limited.</h5></div></div>
                <div class="col-sm-6 col-lg-4"><div class="advantage-card"><h4>High Clamping</h4><h5>Provides higher tension than standard bolts.</h5></div></div>
                <div class="col-sm-6 col-lg-4"><div class="advantage-card"><h4>Flush Mounting</h4><h5>Can be countersunk into components for a smooth finish.</h5></div></div>
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
                <div class="col-sm-6 col-lg-6"><div class="advantage-card"><h4>Space Saving</h4><h5>Cylindrical head allows for tighter grouping of fasteners.</h5></div></div>
                <div class="col-sm-6 col-lg-6"><div class="advantage-card"><h4>High Strength</h4><h5>Usually forged from alloy steel and hardened to Class 12.9.</h5></div></div>
            </div>
        </div>
    </section>

    <section id="manufacturing" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-3 mt-4">
                <h2 class="fw-bold" style="color: #174268;">Manufacturing Process</h2>
            </div>
            <div class="table-responsive mt-3">
                <table class="table table-bordered table-striped text-center align-middle">
                    <thead class="table-dark"><tr class="t-row"><th class="fw-bold">Process Step</th><th class="fw-bold">Description</th></tr></thead>
                    <tbody>
                        <tr class="t-row"><td>Cold Forging</td><td>Wire is cut and cold-forged to form the head and internal hex socket.</td></tr>
                        <tr class="t-row"><td>Thread Rolling</td><td>Threads are rolled onto the shank to improve fatigue strength.</td></tr>
                        <tr class="t-row"><td>Heat Treatment</td><td>Quenched and tempered to achieve high tensile strength (12.9).</td></tr>
                        <tr class="t-row"><td>Surface Finish</td><td>Black oxide (thermal) or zinc plating is applied.</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section id="mechanical-properties" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
             <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Mechanical Properties</h2>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr class="t-row"><th>Property Class</th><th>Tensile Strength (MPa)</th><th>Yield Strength (MPa)</th><th>Hardness (HRC)</th></tr>
                    </thead>
                    <tbody>
                        <tr class="t-row"><td>Class 8.8</td><td>800 min</td><td>640 min</td><td>22 - 32</td></tr>
                        <tr class="t-row"><td>Class 10.9</td><td>1040 min</td><td>940 min</td><td>32 - 39</td></tr>
                        <tr class="t-row"><td>Class 12.9</td><td>1220 min</td><td>1100 min</td><td>39 - 44</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Dimensional Tolerances</h2>
                <p>Manufactured according to DIN 912 and ISO 4762. Thread tolerances are typically 6g.</p>
            </div>
        </div>
    </section>

     <section id="export" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container text-center">
             <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Exports & Supply Coverage</h2>
            </div>
            <p class="fs-5">We supply Allen Bolts across Indian industrial hubs and export to UAE, Saudi Arabia, Qatar, Oman, and Kuwait.</p>
        </div>
    </section>

     <!-- Testing & Quality Control -->
    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Testing & Quality Control</h2>
            </div>
            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4"><div class="advantage-card"><div class="advantage-icon"><i class="bi bi-hammer"></i></div><h4>Tensile Test</h4><h5>Ensures bolts won't break under load.</h5></div></div>
                <div class="col-sm-6 col-lg-4"><div class="advantage-card"><div class="advantage-icon"><i class="bi bi-rulers"></i></div><h4>Thread Gauging</h4><h5>GO/NO-GO gauge inspection.</h5></div></div>
                <div class="col-sm-6 col-lg-4"><div class="advantage-card"><div class="advantage-icon"><i class="bi bi-check2-circle"></i></div><h4>Hardness Test</h4><h5>Verifies material strength via Rockwell C scale.</h5></div></div>
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
                <div class="col-sm-6 col-lg-4"><div class="why-banner-block"><h5>Ready stock for fast dispatch</h5></div></div>
                <div class="col-sm-6 col-lg-4"><div class="why-banner-block"><h5>Compliance with ISO & DIN standards</h5></div></div>
                <div class="col-sm-6 col-lg-4"><div class="why-banner-block"><h5>EN 10204 3.1 Certification</h5></div></div>
            </div>
        </div>
    </section>

    <!--Start faq content area-->
    <section id="faq" class="faq-content-area sec-padd2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="accordion-box">
                        <div class="section-title center"><h2>Frequently Asked Questions (FAQ)</h2></div>
                        <div class="accordion accordion-block"><div class="accord-btn"><h4>What is the difference between Class 8.8 and 12.9?</h4></div><div class="accord-content"><p>Class 12.9 is much harder and has a higher tensile strength (1220 MPa) compared to Class 8.8 (800 MPa). It is used for more critical, high-stress applications.</p></div></div>
                        <div class="accordion accordion-block"><div class="accord-btn"><h4>Can I use Allen Bolts in marine environments?</h4></div><div class="accord-content"><p>Yes, but you should select A4 (SS316) stainless steel Allen Bolts, as they provide excellent resistance against chloride and seawater corrosion.</p></div></div>
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
                <p>For further information, quotes, or customized fastening solutions, <strong>Moksh Tubes & Fittings LLP</strong> is your dependable partner.</p>
                <a href="javascript:void(0);" class="contact-cta-btn" data-bs-toggle="modal" data-bs-target="#contactFormModal">Get in Touch</a>
            </div>
        </div>
    </section>

@endsection

@push('styles')
    <style>
        tr.collapse { opacity: 0; transform: translateY(-6px) scale(0.98); transition: opacity .35s ease, transform .35s ease; }
        tr.collapsing { opacity: 0; transform: translateY(-10px) scale(0.96); display: table-row !important; }
        tr.collapse.show { opacity: 1; transform: translateY(0) scale(1); display: table-row; }
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
              "@id": "https://mokshtubes.com/products/fasteners/allen-bolts#webpage",
              "name": "Allen Bolts & Socket Screws | Moksh Tubes & Fittings LLP",
              "url": "https://mokshtubes.com/products/fasteners/allen-bolts",
              "description": "High-tensile Allen bolts and socket head cap screws for precision machinery and limited clearance applications."
            },
            {
              "@type": ["Product"],
              "@id": "https://mokshtubes.com/#allen-bolts",
              "name": "Allen Bolts",
              "image": "https://mokshtubes.com/assets/images/product/flangs/FASTENERS.webp",
              "category": "Fasteners",
              "brand": { "@id": "https://mokshtubes.com/#organization" }
            }
          ]
        }
        </script>
    @endverbatim
@endsection
