@extends('layouts.master')

@section('title', 'EN24 Steel Supplier, Manufacturer & Stockist | EN24 Round Bars, Plates, Sheets & Pipes')
@section('meta_description',
    'Moksh Tubes supplies EN24 Engineering Steel Round Bars, Plates, Pipes, Tubes and Custom Products. View chemical composition, mechanical properties, equivalents, applications and request a quote today.')
@section('meta_keywords',
    'EN24 Alloy Steel, high strength alloy steel, fatigue resistant steel, tough alloy steel,
    heavy-duty steel, industrial alloy steel')
@section('og_image', asset('assets/images/engineering-steels/engineering-steels-en24.webp'))
@section('og_type', 'article')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area"
        style="background-image: url(/assets/images/engineering-steels/engineering-steels-en24.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Premium EN24 Alloy Steel for Heavy Duty Application<br>High-Strength Alloy Steel
                    </h1>

                    <!-- Add your extra content here -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        EN24 Engineering Steel (EN24 / 817M40 / 1.6511) is a high-strength nickel-chromium-molybdenum alloy
                        steel grade known for exceptional toughness, fatigue resistance, and high tensile strength. Below is
                        the complete datasheet including composition, properties, heat treatment, and applications.

                    </p>


                    <!-- End extra content -->
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

    .
    <div class="sticky-top bg-white border-bottom material-tabs  w-100">
        <div class="container">
            <a href="#overview">Overview</a> |
            <a href="#composition">Chemical Composition</a> |
            <a href="#heat-treatment">Heat Treatment</a> |
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

            <h2 class="fw-semibold text-center mb-5" style="color: #db7227;">
                Introduction To Engineering Steel 24 / 817M40 / AISI 4340 STEEL
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/engineering-steels/engineering-steels-en24.webp') }}"
                        alt="EN24 Alloy Steel Round Bars and Forged Components – Moksh Tubes"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a reliable manufacturer,
                            supplier, and exporter of high quality<strong class="text-black"> EN24 steel <a
                                    href="{{ route('products') }}">products</a>,</strong>
                            including Round Bars, Forgings,
                            Bright Bars, Hex Bars, Flats, Shafts, <a
                                href="{{ route('products.bars-rods.hollow-bars') }}">Hollow Bars</a>, and Custom Components.
                            <a href="{{ url('materials/engineering-steels/engineering-steels-en36') }}">EN36</a>, also known
                            as
                            817M40 or AISI 4340, is a high strength, alloy <a
                                href="{{ url('materials/engineering-steels/engineering-steels-en8') }}"> engineering steel
                                8</a> renowned for its
                            excellent
                            toughness, fatigue strength, and wear resistance. With high tensile strength and good ductility,
                            EN24 is particularly suitable for heavy duty applications requiring high load bearing capacity.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">EN 24</strong class="text-black">, responds well to heat treatment
                            and exhibits good machinability in its hardened and tempered condition, making it ideal for
                            critical mechanical components. It is widely used in the automotive, aerospace, defense, and
                            general engineering industries.
                        </p>
                        <p class="fw-semibold mt-3"><strong class="text-black">EN24 Alloy Steel Features:</strong
                                class="text-black"></p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i>High
                                tensile strength and fatigue resistance</li>
                            <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i>Excellent
                                wear resistance and toughness</li>
                            <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i>Responds
                                well to heat treatment</li>
                            <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i>Suitable
                                for shafts, gears, bolts, automotive and aerospace components</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= WHY CHOOSE ================= -->
    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Why Choose EN24 Engineering Steel?</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10 text-justify" style="text-align: justify;">
                    <p class="fs-6 mb-3">
                        EN24 is a high-strength nickel chromium molybdenum alloy steel designed for applications that demand exceptional toughness, wear resistance, and fatigue strength. It is widely used in industries where components operate under heavy loads, repeated stress, and high-impact conditions.
                    </p>
                    <p class="fs-6 mb-3">
                        Compared to standard carbon steels, EN24 offers superior hardenability and mechanical performance after heat treatment. Its excellent strength-to-weight ratio and long service life make it a preferred choice for manufacturing critical components such as gears, shafts, axles, crankshafts, bolts, and heavy-duty machine parts.
                    </p>
                    <p class="fs-6 mb-3">
                        Whether you are manufacturing industrial equipment, mining machinery, automotive components, or aerospace parts, EN24 delivers reliable performance even in demanding operating environments.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Engineering Steels 24 Datasheet</h3>
            <p class="mb-3">
                Get the complete Engineering Steels 24 datasheet with chemical composition,
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

    <!-- Specifications Section -->
    <section class="sec-padd-top" id="specification">
        <div class="container">
            <div class="section-title center">
                <h2>Engineering Steel EN24 Specifications</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Category</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td>Grade</td>
                                    <td>EN 24 / 817M40 / AISI 4340</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Type</td>
                                    <td>High-Strength Alloy Steel</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Typical Chemical Composition</td>
                                    <td>C 0.36–0.44%, Mn 0.60–0.90%, Si 0.15–0.35%, Cr 1.35–1.65%, Ni 1.90–2.20%, Mo
                                        0.20–0.35%, P ≤ 0.035%, S ≤ 0.035%</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Conditions</td>
                                    <td>Annealed, Normalized, Hot Rolled, Forged, Quenched & Tempered</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Heat Treatment</td>
                                    <td>Quenching & Tempering, Stress Relieving, Case Hardening (optional)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Testing</td>
                                    <td>Tensile, Hardness, Chemical, UT / NDT (on request)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Certification</td>
                                    <td>EN 10204 3.1 / 3.2</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Chemical Composition -->
    <section id="composition" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Chemical Composition of EN24 / AISI 4340 Steel</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Element</th>
                                    <th>Content (%)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Carbon (C)</td>
                                    <td>0.36 – 0.44</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon (Si)</td>
                                    <td>0.10 – 0.35</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese (Mn)</td>
                                    <td>0.45 – 0.70</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium (Cr)</td>
                                    <td>0.90 – 1.40</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nickel (Ni)</td>
                                    <td>1.30 – 1.80</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Molybdenum (Mo)</td>
                                    <td>0.20 – 0.35</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Sulfur (S)</td>
                                    <td>≤ 0.035</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Phosphorus (P)</td>
                                    <td>≤ 0.035</td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="mt-3 text-center">
                            The balanced Ni–Cr–Mo alloying provides EN24 with exceptional strength,
                            impact toughness, and deep hardenability.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Physical Properties -->
    <section id="properties" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color:#174268;">Physical Properties of EN24 Steel</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Property</th>
                                    <th>Metric</th>
                                    <th>Imperial</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Density</td>
                                    <td>7.85 g/cm³</td>
                                    <td>0.284 lb/in³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Range</td>
                                    <td>1358 – 1400 °C</td>
                                    <td>2475 – 2550 °F</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Modulus of Elasticity (Tension)</td>
                                    <td>200 GPa</td>
                                    <td>29,000 ksi</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Modulus of Elasticity (Torsion)</td>
                                    <td>80 GPa</td>
                                    <td>11,600 ksi</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Poisson’s Ratio</td>
                                    <td>0.27</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Thermal Conductivity</td>
                                    <td>44 W/m·K</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Specific Heat</td>
                                    <td>460 J/kg·K</td>
                                    <td>—</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Heat Treatment -->
            <div class="row justify-content-center mt-5" id="heat-treatment">
                <div class="col-lg-8">
                    <h4 class="text-center mb-3" style="color:#db7227;">
                        Heat Treatment of EN24 / 817M40 Steel
                    </h4>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Process</th>
                                    <th>Temperature</th>
                                    <th>Cooling Method</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Annealing</td>
                                    <td>650 – 700 °C</td>
                                    <td>Furnace cool</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Normalizing</td>
                                    <td>860 – 880 °C</td>
                                    <td>Air cool</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Hardening</td>
                                    <td>820 – 850 °C</td>
                                    <td>Oil quench</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tempering</td>
                                    <td>200 – 650 °C</td>
                                    <td>Air cool</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Stress Relieving</td>
                                    <td>550 – 650 °C</td>
                                    <td>Hold 1–2 hours</td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="mt-3 text-center">
                            👉 Achievable hardness after Q&T: <strong>45 – 52 HRC</strong><br>
                            👉 In hardened & tempered condition, EN24 can reach <strong>50+ HRC</strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= EQUIVALENT GRADES ================= -->
    <section class="sec-padd-top sec-padd-bottom" id="international">
        <div class="container">
            <div class="section-title center">
                <h2>EN24 Equivalent Grades</h2>
            </div>
            <div class="row justify-content-center mb-4">
                <div class="col-lg-10">
                    <p class="fs-6 text-center">
                        EN24 is manufactured according to British Standards and has several internationally recognised equivalent grades. Although these materials have similar mechanical properties, the exact chemical composition may vary depending on the applicable standard.
                    </p>
                </div>
            </div>

            <div class="table-responsive col-lg-8 mx-auto mb-4">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Standard</th>
                            <th>Equivalent Grade</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="t-row">
                            <td>British Standard</td>
                            <td>EN24 / 817M40</td>
                        </tr>
                        <tr class="t-row">
                            <td>AISI / SAE</td>
                            <td>4340</td>
                        </tr>
                        <tr class="t-row">
                            <td>DIN</td>
                            <td>34CrNiMo6</td>
                        </tr>
                        <tr class="t-row">
                            <td>UNS</td>
                            <td>G43400</td>
                        </tr>
                        <tr class="t-row">
                            <td>ISO</td>
                            <td>34CrNiMo6</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <p class="fs-6 mt-2 text-center text-muted">
                        <em>Note: Always verify the material specification before substituting equivalent grades in critical engineering applications.</em>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Mechanical Properties -->
    <section class="sec-padd-top sec-padd-bottom" id="mechanical">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color:#174268;">
                    Mechanical Properties of EN24 Steel
                </h2>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Property</th>
                            <th>Annealed</th>
                            <th>Hot Finished</th>
                            <th>Cold Drawn</th>
                            <th>Hot Rolled</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="t-row">
                            <td>Tensile Strength (MPa)</td>
                            <td>586–724</td>
                            <td>620–827</td>
                            <td>655–896</td>
                            <td>586–758</td>
                        </tr>
                        <tr class="t-row">
                            <td>Yield Strength (MPa)</td>
                            <td>345–448</td>
                            <td>414–690</td>
                            <td>448–758</td>
                            <td>345–517</td>
                        </tr>
                        <tr class="t-row">
                            <td>Elongation (%)</td>
                            <td>20–25</td>
                            <td>15–25</td>
                            <td>12–18</td>
                            <td>18–25</td>
                        </tr>
                        <tr class="t-row">
                            <td>Brinell Hardness (HB)</td>
                            <td>150–200</td>
                            <td>180–250</td>
                            <td>200–270</td>
                            <td>150–210</td>
                        </tr>
                        <tr class="t-row">
                            <td>Rockwell Hardness</td>
                            <td>80–90 B</td>
                            <td>85–95 B</td>
                            <td>20–30 C</td>
                            <td>80–90 B</td>
                        </tr>
                    </tbody>
                </table>

                <p class="mt-3 text-center">
                    In hardened & tempered condition, EN24 is suitable for heavily loaded,
                    high-impact engineering applications.
                </p>
            </div>
        </div>
    </section>

    <!-- ================= KEY FEATURES ================= -->
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Key Features of EN24 Steel</h2>
            </div>
            <div class="row justify-content-center mb-4">
                <div class="col-lg-10">
                    <p class="fs-6 text-center">
                        EN24 is one of the most versatile engineering steels available for high-performance applications. Its alloy composition provides an excellent combination of strength, toughness, and durability.
                    </p>
                </div>
            </div>
            <div class="row g-4 mt-2 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>High tensile strength</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-activity"></i></div>
                        <h5>Excellent fatigue resistance</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-hammer"></i></div>
                        <h5>Outstanding impact toughness</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-thermometer-half"></i></div>
                        <h5>Deep hardening capability</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-shield-shaded"></i></div>
                        <h5>Good wear resistance</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-gear"></i></div>
                        <h5>Excellent machinability in the annealed condition</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-fire"></i></div>
                        <h5>Suitable for heat treatment</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-clock-history"></i></div>
                        <h5>Long service life under heavy loads</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-rulers"></i></div>
                        <h5>Reliable dimensional stability</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-box-seam"></i></div>
                        <h5>Ideal for critical engineering components</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Available Forms -->
    <section class="sec-padd-top sec-padd-bottom bg-light" id="related grades">
        <div class="container">
            <div class="section-title center mt-5">
                <h2>Available Forms & Size Range – EN24 Steel</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <table class="table table-bordered table-striped align-middle">
                        <thead class="table-dark text-center">
                            <tr class="t-row">
                                <th>Product Form</th>
                                <th>Size Range / Description</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr class="t-row">
                                <td>Round Bars</td>
                                <td>10 mm – 400 mm</td>
                            </tr>
                            <tr class="t-row">
                                <td>Flat, Square & Hex Bars</td>
                                <td>Custom sizes up to 300 mm</td>
                            </tr>
                            <tr class="t-row">
                                <td>Sheets & Plates</td>
                                <td>2 – 150 mm (Width 600 – 3000 mm)</td>
                            </tr>
                            <tr class="t-row">
                                <td>Coils & Strips</td>
                                <td>0.5 – 12 mm</td>
                            </tr>
                            <tr class="t-row">
                                <td>Pipes & Tubes</td>
                                <td>OD 10 – 219 mm, WT 2 – 20 mm</td>
                            </tr>
                            <tr class="t-row">
                                <td>Forged Components</td>
                                <td>Blocks, rings, bushings (custom per drawing)</td>
                            </tr>
                        </tbody>
                    </table>
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
                'route' => 'products.pipe-fittings',
                'image' => 'assets/images/aluminium-alloys/aluminium-alloys-6012.webp',
            ],
            [
                'name' => 'Flanges (Weld Neck, Slip-On, Blind, Socket Weld, Threaded)',
                'route' => 'products.flanges.flanges-and-gaskets',
                'image' => 'assets/images/engineering-steels/engineering-steels-4130.webp',
            ],
            [
                'name' => 'Fasteners (Bolts, Nuts, Screws, Washers, Studs)',
                'route' => 'products.fasteners',
                'image' => 'assets/images/all-product/FASTENERS.webp',
            ],
            [
                'name' => 'Custom Fabricated Components',
                'route' => 'products.pipe-fittings-flanges-fasteners.custom-fabricated-fittings',
                'image' => 'assets/images/all-product/custom-metal-fabricated.webp',
            ],
        ];
    @endphp

    <section id="products" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Products in Engineering Steel 24</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Engineering Steel 24</strong> is typically available in:
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
                        Engineering Steel 24 products are produced to the following global standards:
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


    <section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Engineering Steel 24</h2>
                <p class="text-center pb-3"><strong class="text-dark">Engineering Steel 24 (817M40 / AISI 4340)</strong>
                    is ideal for applications demanding high strength, shock resistance, and fatigue performance:</p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Automotive & Transport</h5>
                        <p>Gear shafts, pinions, drive shafts, and transmission components</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Aerospace & Defense</h5>
                        <p>Landing gear components, fasteners, structural fittings, and actuators</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Power Generation</h5>
                        <p>Turbine components, high-load shafts, couplings</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Mining & Construction</h5>
                        <p>Drill rods, rock breaker arms, wear-resistant parts</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>General Engineering</h5>
                        <p>Hydraulic rams, crankshafts, machine spindles, jigs, and fixtures</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Oil & Gase</h5>
                        <p>Tool joints, pump shafts, downhole components</p>
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

    <!-- ================= ADVANTAGES ================= -->
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Advantages of EN24 Steel</h2>
            </div>
            <div class="row justify-content-center mb-4">
                <div class="col-lg-10">
                    <p class="fs-6 text-center">
                        EN24 is widely selected for demanding engineering projects because it provides exceptional mechanical performance and long-term reliability.
                    </p>
                </div>
            </div>
            <div class="row g-4 mt-2 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Excellent strength-to-weight ratio</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-activity"></i></div>
                        <h5>Superior fatigue resistance</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-shield-shaded"></i></div>
                        <h5>Outstanding toughness</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-gear"></i></div>
                        <h5>Excellent wear resistance</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-thermometer-half"></i></div>
                        <h5>Deep hardening capability</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-hammer"></i></div>
                        <h5>High impact strength</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-tools"></i></div>
                        <h5>Good machinability before heat treatment</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-clock-history"></i></div>
                        <h5>Long service life</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-building"></i></div>
                        <h5>Suitable for heavy-duty engineering</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-arrow-repeat"></i></div>
                        <h5>Performs well under cyclic loading</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= LIMITATIONS ================= -->
    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Limitations of EN24 Steel</h2>
            </div>
            <div class="row justify-content-center mb-4">
                <div class="col-lg-10">
                    <p class="fs-6 text-center">
                        Although EN24 offers excellent mechanical performance, it may not be the ideal choice for every application.
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <ul class="list-unstyled">
                        <li class="mb-3 d-flex align-items-start"><i class="bi bi-exclamation-triangle-fill text-warning me-3 fs-5"></i><span class="fs-6">Higher cost than medium carbon steels</span></li>
                        <li class="mb-3 d-flex align-items-start"><i class="bi bi-exclamation-triangle-fill text-warning me-3 fs-5"></i><span class="fs-6">Requires controlled heat treatment</span></li>
                        <li class="mb-3 d-flex align-items-start"><i class="bi bi-exclamation-triangle-fill text-warning me-3 fs-5"></i><span class="fs-6">More difficult to weld than low-carbon steels</span></li>
                        <li class="mb-3 d-flex align-items-start"><i class="bi bi-exclamation-triangle-fill text-warning me-3 fs-5"></i><span class="fs-6">Protective coating is recommended in corrosive environments</span></li>
                        <li class="mb-3 d-flex align-items-start"><i class="bi bi-exclamation-triangle-fill text-warning me-3 fs-5"></i><span class="fs-6">Machining becomes more difficult after hardening</span></li>
                    </ul>
                    <p class="fs-6 mt-4 fw-bold text-center" style="color: #174268;">
                        Selecting the correct material should always be based on operating conditions, mechanical requirements, and budget.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= INDUSTRIES ================= -->
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Why Industries Choose EN24 Steel</h2>
            </div>
            <div class="row justify-content-center mb-4">
                <div class="col-lg-10">
                    <p class="fs-6 text-center">
                        EN24 is trusted across a wide range of industries because it combines high strength with exceptional toughness and fatigue resistance. It performs reliably in applications where components are subjected to continuous loading, vibration, and impact.
                    </p>
                </div>
            </div>
            
            <div class="row justify-content-center mb-4">
                <div class="col-lg-10">
                    <div class="p-4 bg-white rounded shadow-sm border-start border-4" style="border-color: #db7227;">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-4 mb-2 d-flex align-items-center">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span> Aerospace
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 mb-2 d-flex align-items-center">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span> Automotive
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 mb-2 d-flex align-items-center">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span> Defence
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 mb-2 d-flex align-items-center">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span> Mining
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 mb-2 d-flex align-items-center">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span> Oil & Gas
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 mb-2 d-flex align-items-center">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span> Heavy Engineering
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 mb-2 d-flex align-items-center">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span> Power Generation
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 mb-2 d-flex align-items-center">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span> Marine
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 mb-2 d-flex align-items-center">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span> Construction Equipment
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 mb-2 d-flex align-items-center">
                                <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span> Industrial Machinery
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <p class="fs-6 mt-2 text-center fw-bold" style="color: #174268;">
                        Its ability to maintain mechanical properties under demanding conditions makes EN24 one of the most widely used alloy steels for critical engineering applications.
                    </p>
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
                        <h5>In-House Heat Treatment & Forging Capabilities</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Strict Dimensional Accuracy and Quality Control</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Quick Delivery and Global Shipping Network</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Customization Available in Size, Finish, and Tolerance</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Experienced Team with Metallurgical Expertise</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="price" class="sec-padd-top sec-padd-bottom bg-light py-5">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h2>EN24 / 817M40 / AISI 4340 Steel Price in India</h2>
            </div>

            <p class="text-center fs-5">
                <strong>Typical Range:</strong> ₹140 – ₹260 per kg
            </p>
            <p class="text-center mb-2">
                (Price varies by OD, wall thickness, form, and finish)
            </p>

            <p class="text-center fs-5">
                Contact us for exact quotation based on size and quantity.
            </p>
        </div>
    </section>

    <!--Start faq content area-->
    <section id="faq" class="faq-content-area sec-padd2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="accordion-box">
                        <div class="section-title center">
                            <h2>EN24 Steel FAQ's</h2>
                        </div>

                        <!-- Q1 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What is EN24 steel used for?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    EN24 steel is a high-strength alloy used for critical engineering components that operate under heavy loads, such as gears, shafts, axles, crankshafts, bolts, and heavy-duty machine parts in the aerospace, automotive, and mining industries.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Is EN24 equivalent to AISI 4340?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Yes, EN24 is generally considered the British Standard equivalent to AISI/SAE 4340. Both are nickel-chromium-molybdenum alloy steels offering similar high tensile strength, toughness, and deep hardenability.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What is the tensile strength of EN24 steel?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    The tensile strength of EN24 steel ranges from 850 to 1000 MPa (123 to 145 ksi) in the hardened and tempered condition, depending on the specific heat treatment and ruling section.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Can EN24 be heat treated?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Yes, EN24 responds excellently to heat treatment. It can be annealed, normalized, hardened by oil quenching, and tempered to achieve the desired balance of strength, hardness (up to 52 HRC), and toughness.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Is EN24 suitable for gears and shafts?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Absolutely. Due to its outstanding fatigue resistance, high strength-to-weight ratio, and excellent wear resistance, EN24 is a preferred material for heavily stressed gears, drive shafts, and pinions.
                                </p>
                            </div>
                        </div>

                        <!-- Q6 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Is EN24 stronger than EN19?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Yes, EN24 is generally stronger and tougher than EN19 due to the addition of nickel, which provides deeper hardenability and higher impact resistance, making it better suited for larger cross-sections and higher stress applications.
                                </p>
                            </div>
                        </div>

                        <!-- Q7 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Can EN24 be welded?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    EN24 can be welded, but it is considered difficult due to its high carbon and alloy content. Special precautions, including preheating and post-weld stress relieving, are strictly required to avoid cracking.
                                </p>
                            </div>
                        </div>

                        <!-- Q8 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Which industries use EN24 steel?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    EN24 steel is widely used across multiple industries, including aerospace, automotive, defense, oil and gas, marine, power generation, mining, construction, and general heavy engineering.
                                </p>
                            </div>
                        </div>

                        <!-- Q9 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the advantages of EN24 steel?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Key advantages include an excellent strength-to-weight ratio, superior fatigue and wear resistance, deep hardening capability, high impact strength, and good machinability prior to final heat treatment.
                                </p>
                            </div>
                        </div>

                        <!-- Q10 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Where can I buy EN24 steel in India?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    You can purchase premium-quality EN24 steel in various forms, including round bars, bright bars, forged bars, and plates, from Moksh Tubes & Fittings LLP, a leading supplier offering competitive pricing and nationwide delivery.
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

    <!-- ================= SUPPLIER ================= -->
    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Looking for EN24 Engineering Steel Supplier?</h2>
            </div>
            <div class="row justify-content-center mb-4">
                <div class="col-lg-10">
                    <p class="fs-6 text-justify mb-3" style="text-align: justify;">
                        Choosing a reliable supplier is just as important as selecting the right material. At <strong>Moksh Tubes & Fittings LLP</strong>, we supply premium-quality EN24 engineering steel in a wide range of sizes and specifications for customers across India and international markets.
                    </p>
                </div>
            </div>
            
            <div class="row justify-content-center mb-5">
                <div class="col-md-5 mb-4 mb-md-0">
                    <h4 class="mb-3" style="color: #db7227;">We Supply</h4>
                    <ul class="list-unstyled fs-6">
                        <li class="mb-2"><i class="bi bi-chevron-right text-primary me-2"></i>EN24 Round Bars</li>
                        <li class="mb-2"><i class="bi bi-chevron-right text-primary me-2"></i>EN24 Bright Bars</li>
                        <li class="mb-2"><i class="bi bi-chevron-right text-primary me-2"></i>EN24 Black Bars</li>
                        <li class="mb-2"><i class="bi bi-chevron-right text-primary me-2"></i>EN24 Forged Bars</li>
                        <li class="mb-2"><i class="bi bi-chevron-right text-primary me-2"></i>EN24 Plates</li>
                        <li class="mb-2"><i class="bi bi-chevron-right text-primary me-2"></i>EN24 Blocks</li>
                        <li class="mb-2"><i class="bi bi-chevron-right text-primary me-2"></i>Custom Cut Sizes</li>
                    </ul>
                </div>
                <div class="col-md-5">
                    <h4 class="mb-3" style="color: #db7227;">Why Choose Moksh Tubes?</h4>
                    <ul class="list-unstyled fs-6">
                        <li class="mb-2"><i class="bi bi-check2-square text-success me-2"></i>Mill Test Certificates (EN 10204 3.1)</li>
                        <li class="mb-2"><i class="bi bi-check2-square text-success me-2"></i>Third-Party Inspection</li>
                        <li class="mb-2"><i class="bi bi-check2-square text-success me-2"></i>Custom Cutting Services</li>
                        <li class="mb-2"><i class="bi bi-check2-square text-success me-2"></i>Ready Stock</li>
                        <li class="mb-2"><i class="bi bi-check2-square text-success me-2"></i>Competitive Pricing</li>
                        <li class="mb-2"><i class="bi bi-check2-square text-success me-2"></i>Fast Delivery Across India</li>
                        <li class="mb-2"><i class="bi bi-check2-square text-success me-2"></i>Export Quality Packaging</li>
                        <li class="mb-2"><i class="bi bi-check2-square text-success me-2"></i>Worldwide Shipping</li>
                        <li class="mb-2"><i class="bi bi-check2-square text-success me-2"></i>Technical Material Selection Support</li>
                    </ul>
                </div>
            </div>
            
            <div class="row justify-content-center text-center">
                <div class="col-lg-10">
                    <p class="fs-6 mb-4">
                        Whether you need material for prototype development or large-scale industrial production, our experienced team can help you select the right EN24 steel for your application.
                    </p>
                    <a href="javascript:void(0);" class="btn btn-lg text-white px-5 py-3 fw-bold" style="background-color: #db7227; border-radius: 8px;" data-bs-toggle="modal" data-bs-target="#contactFormModal">
                        👉 Request a Quote Today
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="contact-us" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Contact Us</h2>
                <p>
                    Get in touch with <strong> Moksh Tubes & Fittings LLP
                    </strong> — Your Trusted Source for EN24 Alloy Steel Products
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
                "name": "What is EN24 steel used for?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "EN24 steel is a high-strength alloy used for critical engineering components that operate under heavy loads, such as gears, shafts, axles, crankshafts, bolts, and heavy-duty machine parts in the aerospace, automotive, and mining industries."
                }
                },
                {
                "@type": "Question",
                "name": "Is EN24 equivalent to AISI 4340?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, EN24 is generally considered the British Standard equivalent to AISI/SAE 4340. Both are nickel-chromium-molybdenum alloy steels offering similar high tensile strength, toughness, and deep hardenability."
                }
                },
                {
                "@type": "Question",
                "name": "What is the tensile strength of EN24 steel?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The tensile strength of EN24 steel ranges from 850 to 1000 MPa (123 to 145 ksi) in the hardened and tempered condition, depending on the specific heat treatment and ruling section."
                }
                },
                {
                "@type": "Question",
                "name": "Can EN24 be heat treated?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, EN24 responds excellently to heat treatment. It can be annealed, normalized, hardened by oil quenching, and tempered to achieve the desired balance of strength, hardness (up to 52 HRC), and toughness."
                }
                },
                {
                "@type": "Question",
                "name": "Is EN24 suitable for gears and shafts?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Absolutely. Due to its outstanding fatigue resistance, high strength-to-weight ratio, and excellent wear resistance, EN24 is a preferred material for heavily stressed gears, drive shafts, and pinions."
                }
                },
                {
                "@type": "Question",
                "name": "Is EN24 stronger than EN19?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, EN24 is generally stronger and tougher than EN19 due to the addition of nickel, which provides deeper hardenability and higher impact resistance, making it better suited for larger cross-sections and higher stress applications."
                }
                },
                {
                "@type": "Question",
                "name": "Can EN24 be welded?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "EN24 can be welded, but it is considered difficult due to its high carbon and alloy content. Special precautions, including preheating and post-weld stress relieving, are strictly required to avoid cracking."
                }
                },
                {
                "@type": "Question",
                "name": "Which industries use EN24 steel?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "EN24 steel is widely used across multiple industries, including aerospace, automotive, defense, oil and gas, marine, power generation, mining, construction, and general heavy engineering."
                }
                },
                {
                "@type": "Question",
                "name": "What are the advantages of EN24 steel?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Key advantages include an excellent strength-to-weight ratio, superior fatigue and wear resistance, deep hardening capability, high impact strength, and good machinability prior to final heat treatment."
                }
                },
                {
                "@type": "Question",
                "name": "Where can I buy EN24 steel in India?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "You can purchase premium-quality EN24 steel in various forms, including round bars, bright bars, forged bars, and plates, from Moksh Tubes & Fittings LLP, a leading supplier offering competitive pricing and nationwide delivery."
                }
                }
            ]
            }

        @endverbatim
    </script>
@endsection


