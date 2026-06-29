@extends('layouts.master')

@section('title', 'Aluminium Alloy HE30 (AA6082) | Properties, Composition, Applications & Supplier')
@section('meta_description', 'Explore Aluminium Alloy HE30 (AA6082) properties, chemical composition, mechanical properties, thermal properties, welding, machining, fabrication, applications & price. Moksh Tubes supplies HE30 worldwide.')
@section('meta_keywords', 'Aluminium Alloy HE30, AA6082 Aluminium, Aluminium HE30 Pipes, Aluminium HE30 Tubes, Aluminium HE30 Sheets, High Strength Aluminium, Structural Aluminium Grade 6082')
@section('og_image', asset('assets/images/aluminium-alloys/aluminium-alloys-he30.webp'))
@section('og_type', 'article')

@section('content')

    <!-- Hero Banner -->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/aluminium-alloys/aluminium-alloys-he30.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Aluminium HE30 (AA6082)<br>Hardened High Strength Aluminium Alloy</h1>

                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Aluminium Alloy HE30 is a high-strength, heat-treatable 6000-series alloy widely used in aerospace, defense, engineering, marine, and structural applications. Below is the complete technical datasheet including thermal properties, welding, machining, manufacturing, and pricing.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sticky Material Tabs -->
    <div class="sticky-top bg-white border-bottom material-tabs w-100">
        <div class="container py-2 text-center">
            <a href="#why-choose">Why Choose</a> |
            <a href="#overview">Overview</a> |
            <a href="#specifications">Specifications</a> |
            <a href="#composition">Composition</a> |
            <a href="#properties">Properties</a> |
            <a href="#thermal">Thermal</a> |
            <a href="#welding">Welding</a> |
            <a href="#machining">Machining</a> |
            <a href="#fabrication">Fabrication</a> |
            <a href="#corrosion">Corrosion</a> |
            <a href="#manufacturing">Manufacturing</a> |
            <a href="#advantages">Advantages</a> |
            <a href="#industries">Industries</a> |
            <a href="#price">Price</a> |
            <a href="#faq">FAQ</a> |
            <a href="#contact-us">Contact Us</a>
        </div>
    </div>

    <!-- Why Choose HE30 -->
    <section id="why-choose" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Why Choose Aluminium Alloy HE30?</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10" style="text-align: justify;">
                    <p class="fs-6 mb-3">
                        <strong>Aluminium Alloy HE30 (AA6082)</strong> is one of the most widely used heat-treatable aluminium alloys for structural and engineering applications. It is valued for its excellent combination of strength, corrosion resistance, weldability, and machinability, making it suitable for a wide range of industrial sectors.
                    </p>
                    <p class="fs-6 mb-3">
                        Compared with many conventional aluminium grades, HE30 provides higher mechanical strength while remaining lightweight. This makes it an excellent choice for components that need to withstand heavy loads without increasing overall weight.
                    </p>
                    <p class="fs-6 mb-3">
                        The alloy performs exceptionally well in structural frameworks, transportation equipment, machinery, bridges, offshore platforms, and engineering components where durability and long service life are essential.
                    </p>
                    <p class="fs-6">
                        Whether you require aluminium HE30 sheets, plates, bars, rods, pipes, tubes, or custom-machined components, this alloy delivers dependable performance across demanding industrial applications.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Overview -->
    <section id="overview" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Aluminium HE30 | Product Overview</h2>
            </div>

            <h3 class="fw-semibold text-center mb-5" style="color: #db7227;">
                Introduction To Aluminium HE30 (AA6082)
            </h3>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/aluminium-alloys/aluminium-alloys-he30.webp') }}" alt="Aluminium HE30 Products"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4" style="text-align: justify;">
                            <strong class="text-black"><a href="{{ route('index') }}">MOKSH TUBES & FITTINGS LLP</a></strong> is a leading manufacturer, supplier, exporter, and stockist of <strong class="text-black">Aluminium Alloy HE30 <a href="{{ route('products') }}">products</a></strong> including sheets, plates, bars, rods, tubes, pipes, and structural extrusions.
                        </p>
                        <p class="fs-6 mb-4" style="text-align: justify;">
                            <strong class="text-black">Aluminium HE30 (AA6082)</strong> is a high-strength structural grade alloy belonging to the 6000 series (Aluminium-Magnesium-Silicon). Known as a medium-to-high strength heat-treatable alloy, it has replaced 6061 in many structural applications due to its higher yield strength and superior corrosion resistance.
                        </p>
                        <p class="fs-6" style="text-align: justify;">
                            Typically supplied in the T6 temper, HE30 provides excellent machining characteristics and outstanding durability in marine, transportation, heavy engineering, and structural frameworks.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Download Datasheet -->
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Aluminium Alloy HE30 Datasheet</h3>
            <p class="mb-3">
                Get the complete Aluminium Alloy HE30 (AA6082) technical datasheet with chemical composition, mechanical properties, thermal characteristics, welding parameters, and size ranges. Enter your email to receive the PDF instantly.
            </p>

            <!-- Lead Capture Form -->
            <form id="leadForm" method="POST" action="{{ route('lead.capture') }}" class="mb-3">
                @csrf
                <input type="hidden" name="page_path" value="{{ Request::path() }}">
                <div class="row justify-content-center">
                    <div class="col-md-6 mb-2">
                        <input type="email" name="email" required class="form-control p-3"
                            placeholder="Enter your email address to get instant PDF">
                    </div>
                    <div class="col-md-3 mb-2">
                        <button type="submit" class="btn btn-lg w-100 text-white"
                            style="background-color:#db7227; border-radius:8px;">
                            📥 Get Datasheet
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

    <!-- Specifications -->
    <section class="sec-padd-top sec-padd-bottom" id="specifications">
        <div class="container">
            <div class="section-title center">
                <h2>Aluminium HE30 Specifications (HE30 / AA6082)</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle text-center">
                            <thead class="table-dark">
                                <tr class="t-row">
                                    <th>Category</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody class="text-start">
                                <tr class="t-row"><td><strong>Grade Designation</strong></td><td>HE30 / AA6082 / EN AW-6082 / 3.2315</td></tr>
                                <tr class="t-row"><td><strong>Alloy Type</strong></td><td>Heat-Treatable Wrought Aluminium-Magnesium-Silicon Alloy</td></tr>
                                <tr class="t-row"><td><strong>Available Tempers</strong></td><td>O (Annealed), T4, T5, T6, T651</td></tr>
                                <tr class="t-row"><td><strong>Primary Standards</strong></td><td>ASTM B209, B211, B221, EN 573-3, EN 755, IS 733</td></tr>
                                <tr class="t-row"><td><strong>Heat Treatment</strong></td><td>Solution Heat Treatment + Artificial Aging (T6)</td></tr>
                                <tr class="t-row"><td><strong>Testing & Inspection</strong></td><td>Tensile, Hardness, Chemical Analysis, Ultrasonic (UT), PMI</td></tr>
                                <tr class="t-row"><td><strong>Material Certification</strong></td><td>EN 10204 3.1 Mill Test Certificate / 3.2 Third-Party Inspection</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Chemical Composition -->
    <section class="sec-padd-top sec-padd-bottom bg-light" id="composition">
        <div class="container">
            <div class="section-title center">
                <h2>Chemical Composition – Aluminium Alloy HE30 (AA6082)</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle text-center">
                            <thead class="table-dark">
                                <tr class="t-row">
                                    <th>Element</th>
                                    <th>Composition Range (%)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row"><td>Silicon (Si)</td><td>0.70 – 1.30</td></tr>
                                <tr class="t-row"><td>Magnesium (Mg)</td><td>0.60 – 1.20</td></tr>
                                <tr class="t-row"><td>Manganese (Mn)</td><td>0.40 – 1.00</td></tr>
                                <tr class="t-row"><td>Iron (Fe)</td><td>0.50 Max</td></tr>
                                <tr class="t-row"><td>Chromium (Cr)</td><td>0.25 Max</td></tr>
                                <tr class="t-row"><td>Zinc (Zn)</td><td>0.20 Max</td></tr>
                                <tr class="t-row"><td>Titanium (Ti)</td><td>0.10 Max</td></tr>
                                <tr class="t-row"><td>Copper (Cu)</td><td>0.10 Max</td></tr>
                                <tr class="t-row"><td>Aluminium (Al)</td><td>Balance</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Physical Properties -->
    <section class="sec-padd-top sec-padd-bottom" id="properties">
        <div class="container">
            <div class="section-title center">
                <h2>Physical Properties – Aluminium HE30</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle text-center">
                            <thead class="table-dark">
                                <tr class="t-row">
                                    <th>Property</th>
                                    <th>Metric Value</th>
                                    <th>Imperial Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row"><td><strong>Density</strong></td><td>2.70 g/cm³</td><td>0.0975 lb/in³</td></tr>
                                <tr class="t-row"><td><strong>Melting Point</strong></td><td>555 °C</td><td>1030 °F</td></tr>
                                <tr class="t-row"><td><strong>Modulus of Elasticity</strong></td><td>70 GPa</td><td>10,150 ksi</td></tr>
                                <tr class="t-row"><td><strong>Shear Modulus</strong></td><td>26 GPa</td><td>3,770 ksi</td></tr>
                                <tr class="t-row"><td><strong>Poisson's Ratio</strong></td><td>0.33</td><td>0.33</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ⭐ Thermal Properties (Requested Star Section 1) -->
    <section class="sec-padd-top sec-padd-bottom bg-light" id="thermal">
        <div class="container">
            <div class="section-title center">
                <h2>Thermal Properties of Aluminium HE30 (AA6082)</h2>
            </div>

            <div class="row justify-content-center mb-4">
                <div class="col-lg-10">
                    <p class="fs-6 text-center">
                        Aluminium Alloy HE30 (AA6082) offers excellent thermal conductivity and dimensional stability, making it suitable for structural engineering, transportation, marine equipment, and industrial applications where efficient heat dissipation is essential. The alloy maintains its mechanical integrity over a wide temperature range and performs reliably in demanding environments.
                    </p>
                </div>
            </div>

            <div class="row g-4 justify-content-center align-items-center">
                <!-- Thermal Table -->
                <div class="col-lg-7">
                    <h4 class="text-center mb-3" style="color: #174268;"><i class="bi bi-thermometer-sun me-2"></i>Thermal Properties Table</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle text-center">
                            <thead class="table-dark">
                                <tr class="t-row">
                                    <th>Property</th>
                                    <th>Value</th>
                                </tr>
                            </thead>
                            <tbody class="text-start">
                                <tr class="t-row"><td><strong>Thermal Conductivity</strong></td><td>130 W/m·K</td></tr>
                                <tr class="t-row"><td><strong>Specific Heat Capacity</strong></td><td>900 J/kg·K</td></tr>
                                <tr class="t-row"><td><strong>Coefficient of Thermal Expansion</strong></td><td>23.4 ×10⁻⁶ /°C</td></tr>
                                <tr class="t-row"><td><strong>Electrical Conductivity</strong></td><td>33% IACS</td></tr>
                                <tr class="t-row"><td><strong>Maximum Recommended Service Temp</strong></td><td>Approx. 150°C</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Benefits Box -->
                <div class="col-lg-5">
                    <div class="advantage-card h-100">
                        <h5>Key Thermal Benefits</h5>
                        <ul class="fs-6 mt-3 mb-0 list-unstyled">
                            <li class="mb-2">✔ <strong>Excellent heat transfer</strong> for thermal components</li>
                            <li class="mb-2">✔ <strong>Good dimensional stability</strong> under varying temperatures</li>
                            <li class="mb-2">✔ <strong>Low thermal distortion</strong> during processing</li>
                            <li class="mb-2">✔ <strong>Lightweight construction</strong> with high thermal efficiency</li>
                            <li>✔ <strong>Suitable for structural</strong> and engineering applications</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Heat Treatment -->
    <section class="sec-padd-top sec-padd-bottom" id="heat-treatment">
        <div class="container">
            <div class="section-title center">
                <h2>Heat Treatment – Aluminium HE30</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle text-center">
                            <thead class="table-dark">
                                <tr class="t-row">
                                    <th>Heat Treatment Process</th>
                                    <th>Temperature Range</th>
                                    <th>Cooling Method</th>
                                    <th>Purpose & Effect</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row"><td><strong>Solution Heat Treatment</strong></td><td>525 – 535°C</td><td>Water Quench</td><td>Dissolves alloying elements for age hardening</td></tr>
                                <tr class="t-row"><td><strong>Artificial Aging (T6 Temper)</strong></td><td>160 – 180°C (8-12 hrs)</td><td>Air Cool</td><td>Achieves maximum mechanical tensile strength</td></tr>
                                <tr class="t-row"><td><strong>Annealing (O Temper)</strong></td><td>350 – 400°C</td><td>Furnace Cool</td><td>Restores maximum ductility and formability</td></tr>
                                <tr class="t-row"><td><strong>Stress Relieving</strong></td><td>150 – 200°C</td><td>Air Cool</td><td>Reduces residual stresses after heavy machining</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ⭐ Welding of Aluminium HE30 (Requested Star Section 2) -->
    <section class="sec-padd-top sec-padd-bottom bg-light" id="welding">
        <div class="container">
            <div class="section-title center">
                <h2>Weldability of Aluminium Alloy HE30</h2>
            </div>

            <div class="row justify-content-center mb-4">
                <div class="col-lg-10">
                    <p class="fs-6 text-center">
                        Aluminium HE30 exhibits excellent weldability and can be successfully welded using conventional fusion welding methods. TIG (GTAW) and MIG (GMAW) welding are commonly used while maintaining high joint quality. Proper filler material selection ensures excellent corrosion resistance and mechanical performance after welding.
                    </p>
                </div>
            </div>

            <div class="row g-4 justify-content-center mb-4">
                <div class="col-lg-7">
                    <h4 class="text-center mb-3" style="color: #174268;"><i class="bi bi-fire me-2"></i>Recommended Welding Processes</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle text-center">
                            <thead class="table-dark">
                                <tr class="t-row">
                                    <th>Welding Process</th>
                                    <th>Suitability Rating</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row"><td><strong>TIG Welding (GTAW)</strong></td><td><span class="badge bg-success fs-6">Excellent</span></td></tr>
                                <tr class="t-row"><td><strong>MIG Welding (GMAW)</strong></td><td><span class="badge bg-success fs-6">Excellent</span></td></tr>
                                <tr class="t-row"><td><strong>Resistance Welding</strong></td><td><span class="badge bg-primary fs-6">Good</span></td></tr>
                                <tr class="t-row"><td><strong>Laser Welding</strong></td><td><span class="badge bg-primary fs-6">Good</span></td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="advantage-card mb-4">
                        <h5>Recommended Filler Metals</h5>
                        <div class="d-flex gap-2 mt-2">
                            <span class="badge bg-dark p-2 fs-6">ER4043 (Al-Si)</span>
                            <span class="badge bg-dark p-2 fs-6">ER5356 (Al-Mg)</span>
                        </div>
                    </div>

                    <div class="advantage-card">
                        <h5>Welding Advantages</h5>
                        <ul class="fs-6 mt-2 mb-0 list-unstyled">
                            <li>✔ Excellent overall weld quality</li>
                            <li>✔ Low solidification cracking tendency</li>
                            <li>✔ Good corrosion resistance across weld joints</li>
                            <li>✔ High structural fabrication flexibility</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ⭐ Machining of Aluminium HE30 (Requested Star Section 3) -->
    <section class="sec-padd-top sec-padd-bottom" id="machining">
        <div class="container">
            <div class="section-title center">
                <h2>Machining Characteristics of Aluminium HE30</h2>
            </div>

            <div class="row justify-content-center mb-4">
                <div class="col-lg-10">
                    <p class="fs-6 text-center">
                        Aluminium Alloy HE30 offers excellent machinability due to its balanced strength and hardness. It provides smooth surface finishes and high dimensional accuracy using standard carbide tooling.
                    </p>
                </div>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-lg-6">
                    <h4 class="text-center mb-3" style="color: #174268;"><i class="bi bi-gear-wide me-2"></i>Recommended Machining Parameters</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle text-center">
                            <thead class="table-dark">
                                <tr class="t-row">
                                    <th>Parameter</th>
                                    <th>Recommendation</th>
                                </tr>
                            </thead>
                            <tbody class="text-start">
                                <tr class="t-row"><td><strong>Cutting Speed</strong></td><td>High</td></tr>
                                <tr class="t-row"><td><strong>Tool Material</strong></td><td>Carbide Tooling</td></tr>
                                <tr class="t-row"><td><strong>Feed Rate</strong></td><td>Medium</td></tr>
                                <tr class="t-row"><td><strong>Coolant</strong></td><td>Abundant Water Soluble Cutting Fluid</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="advantage-card mb-4">
                        <h5>Machining Operations Performed</h5>
                        <div class="d-flex flex-wrap gap-2 mt-2">
                            <span class="badge bg-light text-dark border p-2 fs-6">Turning</span>
                            <span class="badge bg-light text-dark border p-2 fs-6">Milling</span>
                            <span class="badge bg-light text-dark border p-2 fs-6">Drilling</span>
                            <span class="badge bg-light text-dark border p-2 fs-6">Tapping</span>
                            <span class="badge bg-light text-dark border p-2 fs-6">Reaming</span>
                            <span class="badge bg-light text-dark border p-2 fs-6">CNC Machining</span>
                        </div>
                    </div>

                    <div class="advantage-card">
                        <h5>Machining Benefits</h5>
                        <ul class="fs-6 mt-2 mb-0 list-unstyled">
                            <li>✔ Excellent and consistent surface finish</li>
                            <li>✔ High machining cutting speeds</li>
                            <li>✔ Reduced cutting tool wear</li>
                            <li>✔ Ideal for precision engineering components</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ⭐ Fabrication of Aluminium HE30 (Requested Star Section 4) -->
    <section class="sec-padd-top sec-padd-bottom bg-light" id="fabrication">
        <div class="container">
            <div class="section-title center">
                <h2>Fabrication of Aluminium HE30</h2>
            </div>

            <div class="row justify-content-center mb-4">
                <div class="col-lg-10">
                    <p class="fs-6 text-center">
                        HE30 can be fabricated using conventional manufacturing techniques including cutting, bending, rolling, drilling, machining, and welding. Its excellent formability allows manufacturers to produce complex structural components with high dimensional accuracy.
                    </p>
                </div>
            </div>

            <div class="row g-4 justify-content-center align-items-center">
                <div class="col-lg-7">
                    <h4 class="text-center mb-3" style="color: #174268;"><i class="bi bi-tools me-2"></i>Fabrication Methods Table</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle text-center">
                            <thead class="table-dark">
                                <tr class="t-row">
                                    <th>Method</th>
                                    <th>Suitability Rating</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row"><td><strong>Cold Forming</strong></td><td><span class="badge bg-success fs-6">Excellent</span></td></tr>
                                <tr class="t-row"><td><strong>Hot Forming</strong></td><td><span class="badge bg-primary fs-6">Good</span></td></tr>
                                <tr class="t-row"><td><strong>Bending</strong></td><td><span class="badge bg-success fs-6">Excellent</span></td></tr>
                                <tr class="t-row"><td><strong>Rolling</strong></td><td><span class="badge bg-success fs-6">Excellent</span></td></tr>
                                <tr class="t-row"><td><strong>Drilling</strong></td><td><span class="badge bg-success fs-6">Excellent</span></td></tr>
                                <tr class="t-row"><td><strong>Machining</strong></td><td><span class="badge bg-success fs-6">Excellent</span></td></tr>
                                <tr class="t-row"><td><strong>Welding</strong></td><td><span class="badge bg-success fs-6">Excellent</span></td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="advantage-card h-100">
                        <h5>Fabrication Benefits</h5>
                        <ul class="fs-6 mt-3 mb-0 list-unstyled">
                            <li class="mb-2">✔ <strong>Lightweight fabrication</strong> for large structures</li>
                            <li class="mb-2">✔ <strong>Excellent weldability</strong> with structural stability</li>
                            <li class="mb-2">✔ <strong>Easy forming</strong> in annealed or T4 tempers</li>
                            <li class="mb-2">✔ <strong>Superior machinability</strong> for precision fittings</li>
                            <li>✔ <strong>High dimensional stability</strong> after shaping</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mechanical Properties -->
    <section class="sec-padd-top sec-padd-bottom" id="mechanical">
        <div class="container">
            <div class="section-title center">
                <h2>Mechanical Properties – Aluminium HE30 (AA6082)</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle text-center">
                            <thead class="table-dark">
                                <tr class="t-row">
                                    <th>Temper Condition</th>
                                    <th>Tensile Strength (MPa)</th>
                                    <th>Yield Strength (MPa)</th>
                                    <th>Elongation (%)</th>
                                    <th>Hardness (Brinell)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row"><td><strong>HE30 - O (Annealed)</strong></td><td>130 – 160</td><td>60 – 85</td><td>16 – 24 %</td><td>40 – 50 HB</td></tr>
                                <tr class="t-row"><td><strong>HE30 - T4 Temper</strong></td><td>205 – 260</td><td>110 – 170</td><td>14 – 20 %</td><td>65 – 80 HB</td></tr>
                                <tr class="t-row"><td><strong>HE30 - T6 Temper (Standard)</strong></td><td>290 – 340</td><td>250 – 310</td><td>8 – 12 %</td><td>90 – 100 HB</td></tr>
                                <tr class="t-row"><td><strong>HE30 - T651 Extrusions</strong></td><td>310 – 350</td><td>260 – 320</td><td>10 – 14 %</td><td>95 – 105 HB</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <p class="text-center mt-3 fs-6">
                <strong>Note:</strong> HE30-T6 offers outstanding fatigue strength, making it ideal for long-term structural and cyclic loading applications.
            </p>
        </div>
    </section>

    <!-- ⭐ Corrosion Resistance of Aluminium HE30 (Requested Star Section 5) -->
    <section class="sec-padd-top sec-padd-bottom bg-light" id="corrosion">
        <div class="container">
            <div class="section-title center">
                <h2>Corrosion Resistance of Aluminium HE30</h2>
            </div>

            <div class="row justify-content-center mb-4">
                <div class="col-lg-10">
                    <p class="fs-6 text-center">
                        Aluminium Alloy HE30 naturally forms a protective oxide layer that provides excellent resistance to atmospheric corrosion, seawater exposure, industrial environments, and oxidation. It is widely used in marine, offshore, and structural applications where long service life is required.
                    </p>
                </div>
            </div>

            <div class="row g-4 justify-content-center align-items-center">
                <div class="col-lg-7">
                    <h4 class="text-center mb-3" style="color: #174268;"><i class="bi bi-shield-check me-2"></i>Corrosion Performance Table</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle text-center">
                            <thead class="table-dark">
                                <tr class="t-row">
                                    <th>Environment</th>
                                    <th>Performance Rating</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row"><td><strong>Atmospheric Exposure</strong></td><td><span class="badge bg-success fs-6">Excellent</span></td></tr>
                                <tr class="t-row"><td><strong>Marine Environment</strong></td><td><span class="badge bg-primary fs-6">Very Good</span></td></tr>
                                <tr class="t-row"><td><strong>Fresh Water</strong></td><td><span class="badge bg-success fs-6">Excellent</span></td></tr>
                                <tr class="t-row"><td><strong>Industrial Atmosphere</strong></td><td><span class="badge bg-primary fs-6">Very Good</span></td></tr>
                                <tr class="t-row"><td><strong>Mild Chemicals</strong></td><td><span class="badge bg-primary fs-6">Good</span></td></tr>
                                <tr class="t-row"><td><strong>Salt Spray</strong></td><td><span class="badge bg-primary fs-6">Very Good</span></td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="advantage-card h-100">
                        <h5>Key Corrosion Benefits</h5>
                        <ul class="fs-6 mt-3 mb-0 list-unstyled">
                            <li class="mb-2">✔ <strong>Excellent weather resistance</strong> in outdoor service</li>
                            <li class="mb-2">✔ <strong>Long operational service life</strong> with zero rust</li>
                            <li class="mb-2">✔ <strong>Low lifecycle maintenance</strong> requirements</li>
                            <li class="mb-2">✔ <strong>Good marine performance</strong> against salt spray</li>
                            <li>✔ <strong>Highly resistant to surface oxidation</strong></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Material Comparison -->
    <section class="sec-padd-top sec-padd-bottom" id="comparison">
        <div class="container">
            <div class="section-title center">
                <h2>Aluminium HE30 vs Other Popular Aluminium Alloys</h2>
            </div>
            <div class="row justify-content-center mb-4">
                <div class="col-lg-10">
                    <p class="fs-6 text-center">
                        Selecting the correct aluminium alloy depends on strength, corrosion resistance, weldability, and machining requirements. Compare Aluminium HE30 (AA6082) against 6061 and 7075 below.
                    </p>
                </div>
            </div>

            <div class="row justify-content-center mb-4">
                <div class="col-lg-10">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle text-center">
                            <thead class="table-dark">
                                <tr class="t-row">
                                    <th>Property</th>
                                    <th>HE30 (AA6082)</th>
                                    <th>AA6061</th>
                                    <th>AA7075</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row"><td class="fw-bold">Mechanical Strength</td><td><strong>Excellent</strong></td><td>Very Good</td><td>Outstanding</td></tr>
                                <tr class="t-row"><td class="fw-bold">Corrosion Resistance</td><td><strong>Excellent</strong></td><td>Excellent</td><td>Good</td></tr>
                                <tr class="t-row"><td class="fw-bold">Weldability</td><td><strong>Excellent</strong></td><td>Excellent</td><td>Fair / Poor</td></tr>
                                <tr class="t-row"><td class="fw-bold">Machinability</td><td><strong>Very Good</strong></td><td>Very Good</td><td>Good</td></tr>
                                <tr class="t-row"><td class="fw-bold">Structural Applications</td><td><strong>Excellent</strong></td><td>Excellent</td><td>Moderate</td></tr>
                                <tr class="t-row"><td class="fw-bold">Relative Cost</td><td><strong>Moderate</strong></td><td>Moderate</td><td>Premium</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Available Forms & Equivalent Grades -->
    <section class="sec-padd-top sec-padd-bottom bg-light" id="forms">
        <div class="container">
            <div class="row g-5">
                <!-- Available Forms -->
                <div class="col-lg-6">
                    <div class="section-title center">
                        <h2>Available Forms & Size Range</h2>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle text-center">
                            <thead class="table-dark">
                                <tr class="t-row">
                                    <th>Product Form</th>
                                    <th>Size Range / Capabilities</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row"><td><strong>Sheets & Plates</strong></td><td>0.5 mm – 150 mm Thickness</td></tr>
                                <tr class="t-row"><td><strong>Round Bars & Rods</strong></td><td>6 mm – 350 mm Diameter</td></tr>
                                <tr class="t-row"><td><strong>Structural Extrusions</strong></td><td>Angles, Channels, Beams & Profiles</td></tr>
                                <tr class="t-row"><td><strong>Seamless & Welded Tubes</strong></td><td>6 mm OD – 250 mm OD</td></tr>
                                <tr class="t-row"><td><strong>Custom Machined Parts</strong></td><td>As per customer CAD drawing</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Equivalent Grades -->
                <div class="col-lg-6">
                    <div class="section-title center">
                        <h2>International Equivalent Grades</h2>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle text-center">
                            <thead class="table-dark">
                                <tr class="t-row">
                                    <th>Standard Body</th>
                                    <th>Grade Designation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row"><td><strong>British Standard (BS)</strong></td><td>HE30 / H30</td></tr>
                                <tr class="t-row"><td><strong>American (AA / UNS)</strong></td><td>AA6082 / UNS A96082</td></tr>
                                <tr class="t-row"><td><strong>European (EN)</strong></td><td>EN AW-6082 / AlSi1MgMn</td></tr>
                                <tr class="t-row"><td><strong>German (DIN / Werkstoff)</strong></td><td>DIN 3.2315</td></tr>
                                <tr class="t-row"><td><strong>ISO Standard</strong></td><td>AlSi1MgMn (ISO 6361)</td></tr>
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
                'name' => 'Round Bars, Flat Bars, Hex Bars',
                'route' => 'products.bars-rods',
                'image' => 'assets/images/aluminium-alloys/aluminium-alloys-6063.webp',
            ],
            [
                'name' => 'Pipe Fittings (Elbows, Tees, Reducers)',
                'route' => 'products.pipe-fittings',
                'image' => 'assets/images/aluminium-alloys/aluminium-alloys-6012.webp',
            ],
            [
                'name' => 'Flanges (Weld Neck, Slip-On, Blind)',
                'route' => 'products.flanges.flanges-and-gaskets',
                'image' => 'assets/images/engineering-steels/engineering-steels-4130.webp',
            ],
            [
                'name' => 'Fasteners (Bolts, Nuts, Studs)',
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

    <!-- Products Available -->
    <section id="products" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Aluminium HE30 Products Available</h2>
            </div>
            <p class="text-center mb-5 fs-6">
                Moksh Tubes & Fittings LLP supplies a comprehensive range of certified Aluminium HE30 product forms tailored to project specifications.
            </p>

            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-4 justify-content-center">
                @foreach ($products as $product)
                    <div class="col d-flex">
                        <a href="{{ route($product['route']) }}" class="text-decoration-none w-100">
                            <div class="product-card h-100 shadow-sm">
                                <img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}"
                                    class="img-fluid w-100">
                                <h6 class="product-card-title text-center mt-0 py-3 px-2">{{ $product['name'] }}</h6>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ⭐ Manufacturing Process (Requested Star Section 6) -->
    <section class="sec-padd-top sec-padd-bottom bg-light" id="manufacturing">
        <div class="container">
            <div class="section-title center mb-4">
                <h2>Manufacturing Process of Aluminium HE30 Products</h2>
            </div>
            
            <p class="text-center mb-5 fs-6">
                Every Aluminium HE30 product supplied by Moksh Tubes is manufactured using advanced processing techniques and strict quality control procedures to ensure compliance with international standards.
            </p>

            <div class="row justify-content-center mb-4">
                <div class="col-lg-12">
                    <h5 class="text-center mb-4" style="color: #db7227;">12-Step Manufacturing Flow</h5>
                    <div class="d-flex flex-wrap justify-content-center gap-2 text-center">
                        <span class="badge bg-dark p-3 fs-6">1. Raw Material Inspection</span> ➔
                        <span class="badge bg-dark p-3 fs-6">2. Billet Casting</span> ➔
                        <span class="badge bg-dark p-3 fs-6">3. Extrusion / Rolling</span> ➔
                        <span class="badge bg-dark p-3 fs-6">4. Heat Treatment</span> ➔
                        <span class="badge bg-dark p-3 fs-6">5. Straightening</span> ➔
                        <span class="badge bg-dark p-3 fs-6">6. Machining</span> ➔
                        <span class="badge bg-dark p-3 fs-6">7. Surface Finishing</span> ➔
                        <span class="badge bg-dark p-3 fs-6">8. Dimensional Inspection</span> ➔
                        <span class="badge bg-dark p-3 fs-6">9. Mechanical Testing</span> ➔
                        <span class="badge bg-dark p-3 fs-6">10. Final Inspection</span> ➔
                        <span class="badge bg-dark p-3 fs-6">11. Packing</span> ➔
                        <span class="badge bg-success p-3 fs-6">12. Worldwide Dispatch</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ⭐ Quality Testing (Requested Star Section 7) -->
    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2>Quality Assurance & Testing</h2>
            </div>

            <p class="text-center mb-5 fs-6">
                Every Aluminium HE30 product undergoes comprehensive inspection and testing before dispatch to ensure consistent quality and compliance with international standards.
            </p>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle text-center">
                            <thead class="table-dark">
                                <tr class="t-row">
                                    <th>Test Performed</th>
                                    <th>Purpose & Verification</th>
                                    <th>Test Performed</th>
                                    <th>Purpose & Verification</th>
                                </tr>
                            </thead>
                            <tbody class="text-start">
                                <tr class="t-row"><td><strong>Chemical Analysis</strong></td><td>Verify alloying composition</td><td><strong>PMI Test</strong></td><td>Positive material identification</td></tr>
                                <tr class="t-row"><td><strong>Mechanical Testing</strong></td><td>Strength verification</td><td><strong>Dimensional Inspection</strong></td><td>Exact size & tolerance verification</td></tr>
                                <tr class="t-row"><td><strong>Hardness Test</strong></td><td>Hardness measurement (HB/HRB)</td><td><strong>Visual Inspection</strong></td><td>Surface quality & defect check</td></tr>
                                <tr class="t-row"><td><strong>Tensile Test</strong></td><td>Confirm elongation & yield</td><td><strong>Mill Test Certificate</strong></td><td>EN 10204 3.1 material traceability</td></tr>
                                <tr class="t-row"><td><strong>Ultrasonic Testing (UT)</strong></td><td>Internal defect detection</td><td><strong>Third Party Inspection</strong></td><td>TÜV, SGS, DNV inspection available</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ⭐ Advantages of Aluminium HE30 (Requested Star Section 8) -->
    <section class="sec-padd-top sec-padd-bottom bg-light" id="advantages">
        <div class="container">
            <div class="section-title center">
                <h2>Advantages of Aluminium HE30</h2>
            </div>
            <p class="text-center mb-5 fs-6">
                Aluminium HE30 has become one of the preferred engineering alloys because it offers an excellent balance between mechanical performance and ease of fabrication.
            </p>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4"><div class="advantage-card h-100"><div class="advantage-icon"><i class="bi bi-shield-check"></i></div><h5>Excellent strength-to-weight ratio</h5></div></div>
                <div class="col-md-6 col-lg-4"><div class="advantage-card h-100"><div class="advantage-icon"><i class="bi bi-shield-shaded"></i></div><h5>High corrosion resistance</h5></div></div>
                <div class="col-md-6 col-lg-4"><div class="advantage-card h-100"><div class="advantage-icon"><i class="bi bi-fire"></i></div><h5>Excellent weldability</h5></div></div>
                <div class="col-md-6 col-lg-4"><div class="advantage-card h-100"><div class="advantage-icon"><i class="bi bi-gear-wide-connected"></i></div><h5>Superior machinability</h5></div></div>
                <div class="col-md-6 col-lg-4"><div class="advantage-card h-100"><div class="advantage-icon"><i class="bi bi-feather"></i></div><h5>Lightweight construction</h5></div></div>
                <div class="col-md-6 col-lg-4"><div class="advantage-card h-100"><div class="advantage-icon"><i class="bi bi-thermometer-sun"></i></div><h5>Excellent thermal conductivity</h5></div></div>
                <div class="col-md-6 col-lg-4"><div class="advantage-card h-100"><div class="advantage-icon"><i class="bi bi-clock-history"></i></div><h5>Long service life</h5></div></div>
                <div class="col-md-6 col-lg-4"><div class="advantage-card h-100"><div class="advantage-icon"><i class="bi bi-tools"></i></div><h5>Easy fabrication</h5></div></div>
                <div class="col-md-6 col-lg-4"><div class="advantage-card h-100"><div class="advantage-icon"><i class="bi bi-activity"></i></div><h5>Good fatigue resistance</h5></div></div>
                <div class="col-md-6 col-lg-4"><div class="advantage-card h-100"><div class="advantage-icon"><i class="bi bi-cash-stack"></i></div><h5>Cost-effective engineering material</h5></div></div>
            </div>
        </div>
    </section>

    <!-- ⭐ Limitations of Aluminium HE30 (Requested Star Section 9) -->
    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Limitations of Aluminium HE30</h2>
            </div>
            <p class="text-center mb-5 fs-6">
                Although Aluminium HE30 performs well in many industrial environments, it is important to understand its limitations before selecting it for critical engineering applications.
            </p>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle text-center">
                            <thead class="table-dark">
                                <tr class="t-row">
                                    <th>Limitation</th>
                                    <th>Description & Engineering Mitigation</th>
                                </tr>
                            </thead>
                            <tbody class="text-start">
                                <tr class="t-row"><td><strong>Lower Strength than 7075</strong></td><td>Not suitable for ultra-high strength aerospace armor applications where 7000-series alloys are required.</td></tr>
                                <tr class="t-row"><td><strong>Moderate Wear Resistance</strong></td><td>Surface treatment such as hard anodizing may improve continuous friction wear life.</td></tr>
                                <tr class="t-row"><td><strong>Heat Affected Zone Softening</strong></td><td>Welding heat may reduce local yield strength in the weld zone; post-weld aging helps restore strength.</td></tr>
                                <tr class="t-row"><td><strong>Limited High Temperature Use</strong></td><td>Not recommended for continuous load-bearing structural service above 150–200°C.</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Applications -->
    <section class="sec-padd-top sec-padd-bottom bg-light" id="applications">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Aluminium HE30</h2>
            </div>
            <p class="text-center mb-5 fs-6">
                Aluminium HE30 is widely specified across structural engineering projects requiring durability and high strength-to-weight ratios.
            </p>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4"><div class="application-card h-100"><div class="application-icon"><i class="bi bi-building"></i></div><h5>Structural Engineering</h5><p>Bridges, trusses, cranes, roof frameworks, and heavy load-bearing architectural columns.</p></div></div>
                <div class="col-md-6 col-lg-4"><div class="application-card h-100"><div class="application-icon"><i class="bi bi-truck"></i></div><h5>Transportation & Automotive</h5><p>Truck trailers, rail coaches, chassis structures, and dump bodies requiring high fatigue strength.</p></div></div>
                <div class="col-md-6 col-lg-4"><div class="application-card h-100"><div class="application-icon"><i class="bi bi-water"></i></div><h5>Marine Equipment</h5><p>Shipbuilding masts, gangways, offshore walkways, boat hulls, and marine structural components.</p></div></div>
                <div class="col-md-6 col-lg-4"><div class="application-card h-100"><div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div><h5>Industrial Machinery</h5><p>High-speed automation platforms, hydraulic valve bodies, jigs, fixtures, and base plates.</p></div></div>
                <div class="col-md-6 col-lg-4"><div class="application-card h-100"><div class="application-icon"><i class="bi bi-lightning-charge"></i></div><h5>Power & Energy</h5><p>Busbar supports, electrical towers, solar panel mounting frames, and wind turbine structural brackets.</p></div></div>
                <div class="col-md-6 col-lg-4"><div class="application-card h-100"><div class="application-icon"><i class="bi bi-shield-lock"></i></div><h5>Defence & Aerospace</h5><p>Military vehicle frames, transport scaffolding, radar structures, and aircraft interior framing.</p></div></div>
            </div>
        </div>
    </section>

    <!-- ⭐ Industries Served (Requested Star Section 10) -->
    <section class="sec-padd-top sec-padd-bottom" id="industries">
        <div class="container">
            <div class="section-title center">
                <h2>Industries We Serve</h2>
            </div>
            <p class="text-center mb-4 fs-6">
                Moksh Tubes supplies certified Aluminium HE30 products to customers across various industrial sectors worldwide.
            </p>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="p-4 bg-white rounded shadow-sm border-start border-4" style="border-color: #db7227;">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-4 mb-3 d-flex align-items-center"><span class="me-2" style="color: #db7227; font-size: 1.2rem;">&#10004;</span> <strong>Aerospace</strong></div>
                            <div class="col-12 col-sm-6 col-md-4 mb-3 d-flex align-items-center"><span class="me-2" style="color: #db7227; font-size: 1.2rem;">&#10004;</span> <strong>Defence</strong></div>
                            <div class="col-12 col-sm-6 col-md-4 mb-3 d-flex align-items-center"><span class="me-2" style="color: #db7227; font-size: 1.2rem;">&#10004;</span> <strong>Marine Engineering</strong></div>
                            <div class="col-12 col-sm-6 col-md-4 mb-3 d-flex align-items-center"><span class="me-2" style="color: #db7227; font-size: 1.2rem;">&#10004;</span> <strong>Offshore Platforms</strong></div>
                            <div class="col-12 col-sm-6 col-md-4 mb-3 d-flex align-items-center"><span class="me-2" style="color: #db7227; font-size: 1.2rem;">&#10004;</span> <strong>Automotive</strong></div>
                            <div class="col-12 col-sm-6 col-md-4 mb-3 d-flex align-items-center"><span class="me-2" style="color: #db7227; font-size: 1.2rem;">&#10004;</span> <strong>Railway</strong></div>
                            <div class="col-12 col-sm-6 col-md-4 mb-3 d-flex align-items-center"><span class="me-2" style="color: #db7227; font-size: 1.2rem;">&#10004;</span> <strong>Heavy Engineering</strong></div>
                            <div class="col-12 col-sm-6 col-md-4 mb-3 d-flex align-items-center"><span class="me-2" style="color: #db7227; font-size: 1.2rem;">&#10004;</span> <strong>Structural Construction</strong></div>
                            <div class="col-12 col-sm-6 col-md-4 mb-3 d-flex align-items-center"><span class="me-2" style="color: #db7227; font-size: 1.2rem;">&#10004;</span> <strong>Industrial Machinery</strong></div>
                            <div class="col-12 col-sm-6 col-md-4 mb-3 d-flex align-items-center"><span class="me-2" style="color: #db7227; font-size: 1.2rem;">&#10004;</span> <strong>Oil & Gas</strong></div>
                            <div class="col-12 col-sm-6 col-md-4 mb-3 d-flex align-items-center"><span class="me-2" style="color: #db7227; font-size: 1.2rem;">&#10004;</span> <strong>Chemical Processing</strong></div>
                            <div class="col-12 col-sm-6 col-md-4 mb-3 d-flex align-items-center"><span class="me-2" style="color: #db7227; font-size: 1.2rem;">&#10004;</span> <strong>Power Generation</strong></div>
                            <div class="col-12 col-sm-6 col-md-4 mb-3 d-flex align-items-center"><span class="me-2" style="color: #db7227; font-size: 1.2rem;">&#10004;</span> <strong>Renewable Energy</strong></div>
                            <div class="col-12 col-sm-6 col-md-4 mb-3 d-flex align-items-center"><span class="me-2" style="color: #db7227; font-size: 1.2rem;">&#10004;</span> <strong>Food Processing</strong></div>
                            <div class="col-12 col-sm-6 col-md-4 mb-3 d-flex align-items-center"><span class="me-2" style="color: #db7227; font-size: 1.2rem;">&#10004;</span> <strong>Pharmaceutical</strong></div>
                            <div class="col-12 col-sm-6 col-md-4 mb-3 d-flex align-items-center"><span class="me-2" style="color: #db7227; font-size: 1.2rem;">&#10004;</span> <strong>Infrastructure Projects</strong></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ⭐ Export Countries (Requested Star Section 11) -->
    <section class="sec-padd-top sec-padd-bottom bg-light" id="export">
        <div class="container">
            <div class="section-title center">
                <h2>Global Export Network</h2>
            </div>
            <p class="text-center mb-5 fs-6">
                We export certified Aluminium HE30 products to more than 30 countries worldwide with export-compliant ISPM-15 packaging.
            </p>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle text-center">
                            <thead class="table-dark">
                                <tr class="t-row">
                                    <th>Region / Continent</th>
                                    <th>Export Destination Countries</th>
                                </tr>
                            </thead>
                            <tbody class="text-start">
                                <tr class="t-row"><td class="text-center"><strong>Middle East (GCC)</strong></td><td>United Arab Emirates (UAE), Saudi Arabia, Qatar, Oman, Kuwait, Bahrain</td></tr>
                                <tr class="t-row"><td class="text-center"><strong>Europe</strong></td><td>Germany, France, Italy, Netherlands, Belgium, United Kingdom, Spain</td></tr>
                                <tr class="t-row"><td class="text-center"><strong>North America</strong></td><td>United States of America (USA), Canada, Mexico</td></tr>
                                <tr class="t-row"><td class="text-center"><strong>Asia</strong></td><td>Singapore, Malaysia, Indonesia, Thailand, Japan, South Korea</td></tr>
                                <tr class="t-row"><td class="text-center"><strong>Africa</strong></td><td>South Africa, Egypt, Nigeria, Kenya</td></tr>
                                <tr class="t-row"><td class="text-center"><strong>Oceania</strong></td><td>Australia, New Zealand</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Price -->
    <section id="price" class="sec-padd-top sec-padd-bottom py-5">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h2>Aluminium HE30 Price per kg in India</h2>
            </div>
            <p class="text-center fs-5">
                <strong>Typical Range:</strong> ₹350 – ₹650 per kg
            </p>
            <p class="text-center mb-2">
                (Price varies by outer diameter, wall thickness, product form, temper, and finish)
            </p>
            <p class="text-center fs-5 mb-4">
                Contact us for an exact competitive quotation based on your project dimensions and quantity.
            </p>
            <div class="text-center">
                <a href="javascript:void(0);" class="btn btn-lg text-white px-5 py-3 fw-bold" style="background-color: #db7227; border-radius: 8px;" data-bs-toggle="modal" data-bs-target="#contactFormModal">
                    👉 Request Instant Price Quote
                </a>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faq" class="faq-content-area sec-padd2 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="accordion-box">
                        <div class="section-title center">
                            <h2>Frequently Asked Questions (FAQs)</h2>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn"><h4>1. What is Aluminium Alloy HE30 used for?</h4></div>
                            <div class="accord-content"><p>Aluminium HE30 (AA6082) is widely used in structural engineering, shipbuilding, bridge frameworks, defense vehicles, and transportation equipment due to its high strength and excellent corrosion resistance.</p></div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn"><h4>2. What is the equivalent grade of Aluminium HE30?</h4></div>
                            <div class="accord-content"><p>The American AA equivalent is AA6082 (UNS A96082), European equivalent is EN AW-6082, and German Werkstoff designation is DIN 3.2315.</p></div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn"><h4>3. Can Aluminium HE30 be welded easily?</h4></div>
                            <div class="accord-content"><p>Yes, HE30 exhibits excellent weldability using TIG (GTAW) and MIG (GMAW) welding methods with ER4043 or ER5356 filler metals.</p></div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn"><h4>4. What is the thermal conductivity of Aluminium HE30?</h4></div>
                            <div class="accord-content"><p>The thermal conductivity of Aluminium HE30 is approximately 130 W/m·K, making it efficient for thermal dissipation in engineering components.</p></div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn"><h4>5. Where can I buy certified Aluminium HE30?</h4></div>
                            <div class="accord-content"><p>You can purchase certified Aluminium HE30 sheets, plates, bars, rods, tubes, and extrusions from Moksh Tubes & Fittings LLP with EN 10204 3.1 Mill Test Certificates and worldwide delivery.</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Materials -->
    <section class="sec-padd-top sec-padd-bottom">
        <div class="container text-center">
            <div class="section-title center mb-4">
                <h2>Related Aluminium Grades & Materials</h2>
            </div>
            <div class="d-flex flex-wrap justify-content-center gap-2">
                <a href="{{ route('materials.aluminium-Alloys') }}" class="badge bg-dark text-white p-3 fs-6 text-decoration-none">Aluminium 6061</a>
                <a href="{{ route('materials.aluminium-Alloys') }}" class="badge bg-dark text-white p-3 fs-6 text-decoration-none">Aluminium 6063</a>
                <a href="{{ route('materials.aluminium-Alloys') }}" class="badge bg-dark text-white p-3 fs-6 text-decoration-none">Aluminium 7075</a>
                <a href="{{ route('materials.aluminium-Alloys') }}" class="badge bg-dark text-white p-3 fs-6 text-decoration-none">Aluminium 2014</a>
                <a href="{{ route('materials.aluminium-Alloys') }}" class="badge bg-dark text-white p-3 fs-6 text-decoration-none">Aluminium 2024</a>
                <a href="{{ route('materials.aluminium-Alloys') }}" class="badge bg-dark text-white p-3 fs-6 text-decoration-none">Aluminium 5083</a>
                <a href="{{ route('materials.aluminium-Alloys') }}" class="badge bg-dark text-white p-3 fs-6 text-decoration-none">Aluminium 5052</a>
                <a href="{{ route('materials.aluminium-Alloys') }}" class="badge bg-dark text-white p-3 fs-6 text-decoration-none">Aluminium 1100</a>
                <a href="{{ route('materials.aluminium-Alloys') }}" class="badge bg-dark text-white p-3 fs-6 text-decoration-none">Aluminium 1050</a>
                <a href="{{ route('materials.aluminium-Alloys') }}" class="badge bg-dark text-white p-3 fs-6 text-decoration-none">Aluminium 6082</a>
            </div>
        </div>
    </section>

    <!-- Related Blogs -->
    <section class="blog-section sec-padd2 bg-light">
        <div class="container">
            <div class="section-title center mb-4">
                <h2>Related Blogs & Technical Guides</h2>
            </div>
            <div class="d-flex flex-wrap justify-content-center gap-2 mb-5 text-center">
                <span class="badge bg-white text-dark border p-2 fs-6">What is Aluminium HE30?</span>
                <span class="badge bg-white text-dark border p-2 fs-6">HE30 vs 6061 Aluminium</span>
                <span class="badge bg-white text-dark border p-2 fs-6">HE30 vs 7075 Aluminium</span>
                <span class="badge bg-white text-dark border p-2 fs-6">Complete Guide to Aluminium Alloys</span>
                <span class="badge bg-white text-dark border p-2 fs-6">Heat Treatment of Aluminium Alloys</span>
                <span class="badge bg-white text-dark border p-2 fs-6">Aluminium Alloy Selection Guide</span>
                <span class="badge bg-white text-dark border p-2 fs-6">Corrosion Resistance of Aluminium Alloys</span>
                <span class="badge bg-white text-dark border p-2 fs-6">Aluminium Alloy Applications in Aerospace</span>
                <span class="badge bg-white text-dark border p-2 fs-6">Difference Between HE30 and AA6082</span>
                <span class="badge bg-white text-dark border p-2 fs-6">Aluminium Alloy Standards Explained</span>
            </div>

            @if(isset($blogs) && count($blogs) > 0)
                <div class="row">
                    @foreach ($blogs as $blog)
                        <div class="col-md-4 col-sm-6 col-xs-12 mb-4">
                            <div class="default-blog-news h-100 shadow-sm bg-white rounded">
                                <figure class="img-holder mb-0">
                                    <a href="{{ route('frontend.single-blog', $blog->slug) }}">
                                        <img src="{{ asset('storage/' . $blog->cover_image) }}" alt="{{ $blog->title }}" loading="lazy" class="img-fluid w-100">
                                    </a>
                                </figure>
                                <div class="lower-content p-3">
                                    <a href="{{ route('frontend.single-blog', $blog->slug) }}">
                                        <h5>{{ Str::limit($blog->title, 45) }}</h5>
                                    </a>
                                    <div class="post-meta small text-muted mb-2">
                                        by {{ $blog->author ?? 'Admin' }} | {{ $blog->created_at->format('F d, Y') }}
                                    </div>
                                    <div class="small mb-3">
                                        {!! \Str::limit(strip_tags($blog->content), 100) !!}
                                    </div>
                                    <div class="link">
                                        <a href="{{ route('frontend.single-blog', $blog->slug) }}" class="default_link fw-bold text-decoration-none" style="color:#db7227;">
                                            Read More <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>

    <!-- Final CTA -->
    <section id="contact-us" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="contact-cta-box text-center p-5 rounded shadow" style="background: #174268; color: #fff;">
                <h2 class="text-white mb-3">Looking for a Reliable Aluminium HE30 Supplier?</h2>
                <p class="fs-6 mb-4 mx-auto" style="max-width: 800px;">
                    <strong>Moksh Tubes & Fittings LLP</strong> supplies premium-quality Aluminium Alloy HE30 (AA6082) in sheets, plates, bars, rods, pipes, tubes, extrusions, and custom-machined components. All products are manufactured according to international quality standards and are supplied with complete material traceability, Mill Test Certificates (EN 10204 3.1), and optional third-party inspection.
                </p>
                <a href="javascript:void(0);" class="contact-cta-btn btn btn-lg px-5 py-3 fw-bold text-white shadow" style="background-color: #db7227; border-radius: 8px;" data-bs-toggle="modal" data-bs-target="#contactFormModal">
                    👉 Request a Quote Today
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
      "@type": "Product",
      "name": "Aluminium Alloy HE30 (AA6082) Products",
      "description": "Premium Aluminium HE30 / AA6082 sheets, plates, round bars, pipes, tubes & structural extrusions. Supplied with EN 10204 3.1 certification.",
      "brand": {
        "@type": "Brand",
        "name": "Moksh Tubes & Fittings LLP"
      },
      "manufacturer": {
        "@type": "Organization",
        "name": "Moksh Tubes & Fittings LLP"
      },
      "material": "Aluminium Alloy HE30 / AA6082 / EN AW-6082",
      "url": "https://www.mokshtubes.com/materials/aluminium-alloys/aluminium-alloys-he30"
    },
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is Aluminium Alloy HE30 used for?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Aluminium HE30 (AA6082) is widely used in structural engineering, shipbuilding, bridge frameworks, defense vehicles, and transportation equipment due to its high strength and excellent corrosion resistance."
          }
        },
        {
          "@type": "Question",
          "name": "What is the equivalent grade of Aluminium HE30?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The American AA equivalent is AA6082 (UNS A96082), European equivalent is EN AW-6082, and German Werkstoff designation is DIN 3.2315."
          }
        },
        {
          "@type": "Question",
          "name": "Can Aluminium HE30 be welded easily?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, HE30 exhibits excellent weldability using TIG (GTAW) and MIG (GMAW) welding methods with ER4043 or ER5356 filler metals."
          }
        }
      ]
    }]
    @endverbatim
    </script>
@endsection
