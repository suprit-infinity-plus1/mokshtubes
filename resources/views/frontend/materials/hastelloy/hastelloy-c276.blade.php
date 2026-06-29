@extends('layouts.master')

@section('title', 'Hastelloy C276 (UNS N10276) | Manufacturer, Supplier & Exporter')
@section('meta_description', 'Buy Hastelloy C276 (UNS N10276 / 2.4819) corrosion-resistant nickel alloy. Get chemical composition, mechanical properties, equivalent grades, products, sizes & prices.')
@section('meta_keywords', 'Hastelloy C276, UNS N10276, Alloy C276, 2.4819, Hastelloy C276 Pipes, Hastelloy C276 Tubes, Hastelloy C276 Flanges, Hastelloy C276 Sheet, Nickel Molybdenum Chromium Alloy')
@section('og_image', asset('assets/images/hastelloy/hastelloy-c276.webp'))
@section('og_type', 'article')

@section('content')

    <!--Start breadcrumb area-->
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
    <!--End breadcrumb area-->

    <!-- Start Material Tabs -->
    <div class="sticky-top bg-white border-bottom material-tabs w-100">
        <div class="container py-2 text-center">
            <a href="#overview">Overview</a> |
            <a href="#specifications">Specifications</a> |
            <a href="#composition">Composition</a> |
            <a href="#properties">Properties</a> |
            <a href="#fabrication-welding">Welding & Machining</a> |
            <a href="#corrosion">Corrosion & Advantages</a> |
            <a href="#products">Products</a> |
            <a href="#applications">Applications</a> |
            <a href="#comparison">Comparison</a> |
            <a href="#why-choose-us">Why Choose Us</a> |
            <a href="#quick-facts">AI Quick Facts</a> |
            <a href="#faq">FAQ</a> |
            <a href="#contact-us">Contact Us</a>
        </div>
    </div>
    <!-- End Material Tabs -->

    <!-- Product Overview -->
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

    <!-- Datasheet Download -->
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Hastelloy C276 Technical Datasheet</h3>
            <p class="mb-3">
                Need complete technical information before purchasing? Download the official Hastelloy C276 datasheet containing chemical composition, mechanical & physical properties, equivalent grades, ASTM standards, product forms, welding guidelines, and applications.
            </p>

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

    <!-- Material Specifications -->
    <section id="specifications" class="sec-padd-top sec-padd-bottom">
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

    <!-- Chemical Composition & Equivalent Grades -->
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

    <!-- Physical, Mechanical & Thermal Properties (Requested Section 1) -->
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

    <!-- Heat Treatment -->
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-4">
                <h2>Heat Treatment Guidelines</h2>
            </div>
            
            <p class="text-center mb-4">
                Hastelloy C276 is generally supplied in the solution annealed condition, providing the optimum combination of corrosion resistance, ductility, and mechanical strength. Solution annealing dissolves unwanted precipitates and restores grain structure after welding or forming.
            </p>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Process</th>
                                    <th>Temperature</th>
                                    <th>Cooling Method</th>
                                    <th>Purpose</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td><strong>Solution Annealing</strong></td><td>1120–1175°C</td><td>Rapid Water Quench</td><td>Restores corrosion resistance and ductility</td></tr>
                                <tr class="t-row"><td><strong>Stress Relieving</strong></td><td>Generally Not Required</td><td>Air Cooling</td><td>Used only in specialized fabrication applications</td></tr>
                                <tr class="t-row"><td><strong>Hot Working</strong></td><td>950–1230°C</td><td>Air Cooling</td><td>Improves formability during heavy processing</td></tr>
                                <tr class="t-row"><td><strong>Cold Working</strong></td><td>Room Temperature</td><td>Not Required</td><td>Increases mechanical strength through work hardening</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Welding, Machining & Fabrication (Requested Section 2) -->
    <section id="fabrication-welding" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2>Welding, Machining & Fabrication</h2>
            </div>

            <p class="text-center mb-5 fs-6">
                One of the biggest advantages of Hastelloy C276 is its excellent weldability and fabrication formability. The alloy can be welded and shaped using conventional methods without significantly affecting its corrosion resistance when proper procedures are followed.
            </p>

            <!-- Welding Table -->
            <div class="row justify-content-center mb-5">
                <div class="col-lg-10">
                    <h4 class="text-center mb-3" style="color: #174268;"><i class="bi bi-fire me-2"></i>Recommended Welding Processes & Filler Metals</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle text-center">
                            <thead class="table-dark">
                                <tr class="t-row">
                                    <th>Welding Process</th>
                                    <th>Suitability Rating</th>
                                    <th>Recommended Filler Metal</th>
                                    <th>Key Application Notes</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row"><td><strong>GTAW (TIG Welding)</strong></td><td><span class="badge bg-success fs-6">Excellent</span></td><td>ERNiCrMo-4</td><td>Preferred for precision joints & root passes</td></tr>
                                <tr class="t-row"><td><strong>GMAW (MIG Welding)</strong></td><td><span class="badge bg-success fs-6">Excellent</span></td><td>ERNiCrMo-4</td><td>Ideal for structural fabrication & heavy deposition</td></tr>
                                <tr class="t-row"><td><strong>SMAW (Stick Welding)</strong></td><td><span class="badge bg-success fs-6">Excellent</span></td><td>ENiCrMo-4</td><td>Used for field repairs and maintenance work</td></tr>
                                <tr class="t-row"><td><strong>Plasma Arc Welding</strong></td><td><span class="badge bg-success fs-6">Excellent</span></td><td>ERNiCrMo-4</td><td>High-speed automated seam welding</td></tr>
                                <tr class="t-row"><td><strong>Laser Welding</strong></td><td><span class="badge bg-primary fs-6">Good</span></td><td>Specialized Wire</td><td>Low heat distortion for thin precision tubes</td></tr>
                                <tr class="t-row"><td><strong>Electron Beam Welding</strong></td><td><span class="badge bg-primary fs-6">Good</span></td><td>No Filler Needed</td><td>Deep penetration welding in vacuum chambers</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Machining & Fabrication Tables -->
            <div class="row g-4 justify-content-center">
                <div class="col-lg-6">
                    <h4 class="text-center mb-3" style="color: #174268;"><i class="bi bi-gear-wide-connected me-2"></i>Machining Parameters & Operations</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Operation / Parameter</th>
                                    <th>Recommendation / Best Practice</th>
                                </tr>
                            </thead>
                            <tbody class="text-start">
                                <tr class="t-row"><td><strong>Cutting Speed</strong></td><td>Low to Medium (to prevent work hardening)</td></tr>
                                <tr class="t-row"><td><strong>Feed Rate</strong></td><td>Moderate & Constant (avoid pausing tool in cut)</td></tr>
                                <tr class="t-row"><td><strong>Tool Material</strong></td><td>Heavy-duty Carbide Cutting Tools</td></tr>
                                <tr class="t-row"><td><strong>Coolant Type</strong></td><td>Abundant Water-Based Cutting Fluid</td></tr>
                                <tr class="t-row"><td><strong>Machine Setup</strong></td><td>High Rigidity & Heavy-Duty Machine Tools</td></tr>
                                <tr class="t-row"><td><strong>Machining Operations</strong></td><td>Turning, Milling, Drilling, Tapping, Reaming, Grinding</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-6">
                    <h4 class="text-center mb-3" style="color: #174268;"><i class="bi bi-tools me-2"></i>Fabrication Methods & Advantages</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle text-center">
                            <thead class="table-dark">
                                <tr class="t-row">
                                    <th>Fabrication Method</th>
                                    <th>Suitability</th>
                                    <th>Major Advantage</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row"><td><strong>Cold Forming</strong></td><td><span class="badge bg-success fs-6">Excellent</span></td><td>High ductility allows complex shaping</td></tr>
                                <tr class="t-row"><td><strong>Hot Forming</strong></td><td><span class="badge bg-success fs-6">Excellent</span></td><td>Easy shaping between 950–1230°C</td></tr>
                                <tr class="t-row"><td><strong>Rolling & Bending</strong></td><td><span class="badge bg-success fs-6">Excellent</span></td><td>Smooth curvature for pressure vessel shells</td></tr>
                                <tr class="t-row"><td><strong>Cutting & Drilling</strong></td><td><span class="badge bg-success fs-6">Excellent</span></td><td>Precision hole penetration with carbide bits</td></tr>
                                <tr class="t-row"><td><strong>Welding & Joining</strong></td><td><span class="badge bg-success fs-6">Excellent</span></td><td>No carbide precipitation in weld heat zone</td></tr>
                                <tr class="t-row"><td><strong>Machining</strong></td><td><span class="badge bg-primary fs-6">Good</span></td><td>Smooth surface finish with rigid setup</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Corrosion Resistance & Performance Advantages (Requested Section 3) -->
    <section id="corrosion" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-4">
                <h2>Corrosion Resistance & Performance Advantages</h2>
            </div>
            
            <p class="text-center mb-5 fs-6">
                Hastelloy C276 is internationally recognized as one of the most corrosion-resistant nickel alloys available today. Its high nickel, molybdenum, chromium, and tungsten content provides outstanding protection against pitting, crevice corrosion, stress corrosion cracking, and localized chemical attack.
            </p>

            <!-- Chemical Performance Table -->
            <div class="row justify-content-center mb-5">
                <div class="col-lg-10">
                    <h4 class="text-center mb-3" style="color: #174268;">Chemical Environment Resistance Table</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle text-center">
                            <thead class="table-dark">
                                <tr class="t-row">
                                    <th>Chemical Environment</th>
                                    <th>Performance Rating</th>
                                    <th>Chemical Environment</th>
                                    <th>Performance Rating</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row"><td><strong>Hydrochloric Acid (HCl)</strong></td><td><span class="badge bg-success fs-6">Excellent</span></td><td><strong>Ferric & Cupric Chlorides</strong></td><td><span class="badge bg-success fs-6">Excellent</span></td></tr>
                                <tr class="t-row"><td><strong>Sulfuric Acid (H2SO4)</strong></td><td><span class="badge bg-success fs-6">Excellent</span></td><td><strong>Wet Chlorine Gas</strong></td><td><span class="badge bg-success fs-6">Excellent</span></td></tr>
                                <tr class="t-row"><td><strong>Nitric Acid (HNO3)</strong></td><td><span class="badge bg-primary fs-6">Very Good</span></td><td><strong>Seawater & Brine</strong></td><td><span class="badge bg-success fs-6">Excellent</span></td></tr>
                                <tr class="t-row"><td><strong>Phosphoric Acid (H3PO4)</strong></td><td><span class="badge bg-success fs-6">Excellent</span></td><td><strong>Salt Spray & Atmospheric</strong></td><td><span class="badge bg-success fs-6">Excellent</span></td></tr>
                                <tr class="t-row"><td><strong>Acetic & Formic Acid</strong></td><td><span class="badge bg-success fs-6">Excellent</span></td><td><strong>Oxidizing Chemical Media</strong></td><td><span class="badge bg-success fs-6">Excellent</span></td></tr>
                                <tr class="t-row"><td><strong>Chloride Solutions</strong></td><td><span class="badge bg-success fs-6">Excellent</span></td><td><strong>Reducing Chemical Media</strong></td><td><span class="badge bg-success fs-6">Excellent</span></td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Advantages vs Limitations Tables -->
            <div class="row g-4 justify-content-center">
                <div class="col-lg-6">
                    <h4 class="text-center mb-3" style="color: #28a745;"><i class="bi bi-check-circle-fill me-2"></i>Major Performance Advantages</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Advantage Area</th>
                                    <th>Engineering Benefit</th>
                                </tr>
                            </thead>
                            <tbody class="text-start">
                                <tr class="t-row"><td><strong>Chloride Protection</strong></td><td>Outstanding resistance to localized pitting and crevice attack</td></tr>
                                <tr class="t-row"><td><strong>SCC Resistance</strong></td><td>Immune to chloride-induced stress corrosion cracking</td></tr>
                                <tr class="t-row"><td><strong>Versatile Compatibility</strong></td><td>Performs flawlessly in both oxidizing and reducing acid media</td></tr>
                                <tr class="t-row"><td><strong>High Strength</strong></td><td>Superior mechanical integrity compared to standard austenitic steels</td></tr>
                                <tr class="t-row"><td><strong>Weld Seam Integrity</strong></td><td>Resists grain boundary precipitation during welding operations</td></tr>
                                <tr class="t-row"><td><strong>Lifecycle Cost</strong></td><td>Minimal maintenance and exceptionally long operating service life</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-6">
                    <h4 class="text-center mb-3" style="color: #dc3545;"><i class="bi bi-exclamation-triangle-fill me-2"></i>Understanding Limitations</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Limitation</th>
                                    <th>Description & Mitigation</th>
                                </tr>
                            </thead>
                            <tbody class="text-start">
                                <tr class="t-row"><td><strong>Higher Material Cost</strong></td><td>More expensive upfront than stainless steel, but offset by longer lifecycle durability</td></tr>
                                <tr class="t-row"><td><strong>Work Hardening</strong></td><td>Hardens during machining; requires slower cutting speeds and sharp carbide tools</td></tr>
                                <tr class="t-row"><td><strong>Heavy Density</strong></td><td>Heavier density (8.89 g/cm³) than carbon steel requires sturdy structural support</td></tr>
                                <tr class="t-row"><td><strong>Specialized Welding</strong></td><td>Skilled qualified welders and clean preparation recommended for critical pressure joints</td></tr>
                                <tr class="t-row"><td><strong>Over-Engineering</strong></td><td>May not be economical for mild non-corrosive water or low-temperature piping</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Manufacturing Process & Quality Testing -->
    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2>Manufacturing Process & Quality Testing</h2>
            </div>
            
            <p class="text-center mb-5">
                At Moksh Tubes, Hastelloy C276 products undergo strict quality control from vacuum induction melting to worldwide dispatch, guaranteeing compliance with ASTM, ASME, and EN standards.
            </p>

            <div class="row g-4 mb-5">
                <div class="col-lg-12">
                    <h5 class="text-center mb-3" style="color: #db7227;">12-Step Manufacturing Flow</h5>
                    <div class="d-flex flex-wrap justify-content-center gap-2 text-center">
                        <span class="badge bg-dark p-2 fs-6">1. Raw Material Inspection</span> ➔
                        <span class="badge bg-dark p-2 fs-6">2. Vacuum Induction Melting</span> ➔
                        <span class="badge bg-dark p-2 fs-6">3. Hot Rolling / Forging</span> ➔
                        <span class="badge bg-dark p-2 fs-6">4. Heat Treatment</span> ➔
                        <span class="badge bg-dark p-2 fs-6">5. Pickling & Cleaning</span> ➔
                        <span class="badge bg-dark p-2 fs-6">6. Straightening</span> ➔
                        <span class="badge bg-dark p-2 fs-6">7. Machining</span> ➔
                        <span class="badge bg-dark p-2 fs-6">8. Dimensional Check</span> ➔
                        <span class="badge bg-dark p-2 fs-6">9. Mechanical Testing</span> ➔
                        <span class="badge bg-dark p-2 fs-6">10. Final Inspection</span> ➔
                        <span class="badge bg-dark p-2 fs-6">11. Export Packing</span> ➔
                        <span class="badge bg-success p-2 fs-6">12. Worldwide Dispatch</span>
                    </div>
                </div>
            </div>

            <h4 class="text-center mb-3" style="color: #174268;">Rigorous Quality Assurance & Testing Table</h4>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row"><th>Test Performed</th><th>Purpose & Verification</th><th>Test Performed</th><th>Purpose & Verification</th></tr>
                            </thead>
                            <tbody class="text-start">
                                <tr class="t-row"><td><strong>PMI Test</strong></td><td>Confirms exact chemical grade</td><td><strong>Eddy Current Test</strong></td><td>Identifies surface flaws</td></tr>
                                <tr class="t-row"><td><strong>Chemical Analysis</strong></td><td>Verifies alloy element %</td><td><strong>Radiography (RT)</strong></td><td>Examines weld seam integrity</td></tr>
                                <tr class="t-row"><td><strong>Mechanical Testing</strong></td><td>Confirms tensile & elongation</td><td><strong>Dye Penetrant (DPT)</strong></td><td>Detects surface cracks</td></tr>
                                <tr class="t-row"><td><strong>Hardness Test</strong></td><td>Measures hardness values</td><td><strong>Visual & Dimensional</strong></td><td>Confirms surface finish & tolerances</td></tr>
                                <tr class="t-row"><td><strong>Hydrostatic Test</strong></td><td>Checks pressure resistance</td><td><strong>EN 10204 3.1 / 3.2</strong></td><td>Mill Test Certificate traceability</td></tr>
                                <tr class="t-row"><td><strong>Ultrasonic Test (UT)</strong></td><td>Detects internal subsurface defects</td><td><strong>Third-Party Inspection</strong></td><td>TÜV, SGS, DNV, BV, Lloyd's support</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Available -->
    <section id="products" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-4">
                <h2>Hastelloy C276 Products Available</h2>
            </div>
            
            <p class="text-center mb-5 fs-6">
                Moksh Tubes & Fittings LLP supplies a comprehensive range of Hastelloy C276 product forms compliant with ASTM B575, B622, B619, B626, and ASME standards.
            </p>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card h-100">
                        <div class="application-icon"><i class="bi bi-slash-circle"></i></div>
                        <h5>Pipes & Tubes</h5>
                        <p>Seamless, Welded, ERW, EFW, U-Bend, Capillary, and Large Diameter heavy wall piping.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card h-100">
                        <div class="application-icon"><i class="bi bi-square"></i></div>
                        <h5>Sheets, Plates & Coils</h5>
                        <p>Cold Rolled, Hot Rolled, Slit Coils, Full Coils, and custom-cut shims & thickness plates.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card h-100">
                        <div class="application-icon"><i class="bi bi-record-circle"></i></div>
                        <h5>Bars & Rods</h5>
                        <p>Round Bars, Flat Bars, Square Bars, Hexagonal Bars, Bright, Black, and Forged Rods.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card h-100">
                        <div class="application-icon"><i class="bi bi-disc"></i></div>
                        <h5>Flanges</h5>
                        <p>Weld Neck (WNRF), Slip-On (SORF), Blind, Socket Weld, Threaded, and Lap Joint Flanges.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card h-100">
                        <div class="application-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Pipe Fittings & Fasteners</h5>
                        <p>Elbows, Tees, Reducers, Stub Ends, Caps, Bolts, Nuts, Washers, Stud Bolts, and Screws.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card h-100">
                        <div class="application-icon"><i class="bi bi-tools"></i></div>
                        <h5>Wires & Custom Components</h5>
                        <p>Welding Wire, Filler Wire (ERNiCrMo-4), and custom precision fabricated components.</p>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-4">
                <p class="fw-bold">Available Standards: ASTM | ASME | ANSI | DIN | EN | ISO | MSS | BS</p>
            </div>
        </div>
    </section>

    <!-- Applications & Industries Served -->
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

            <h4 class="text-center mb-3" style="color: #db7227;">Industries We Serve Worldwide</h4>
            <div class="d-flex flex-wrap justify-content-center gap-2 text-center">
                <span class="badge bg-light text-dark border p-2 fs-6">Chemical Processing</span>
                <span class="badge bg-light text-dark border p-2 fs-6">Oil & Gas</span>
                <span class="badge bg-light text-dark border p-2 fs-6">Petrochemical</span>
                <span class="badge bg-light text-dark border p-2 fs-6">Marine Engineering</span>
                <span class="badge bg-light text-dark border p-2 fs-6">Offshore Platforms</span>
                <span class="badge bg-light text-dark border p-2 fs-6">Pharmaceuticals</span>
                <span class="badge bg-light text-dark border p-2 fs-6">Food & Beverage</span>
                <span class="badge bg-light text-dark border p-2 fs-6">Fertilizer Plants</span>
                <span class="badge bg-light text-dark border p-2 fs-6">Sugar Industry</span>
                <span class="badge bg-light text-dark border p-2 fs-6">Cement Plants</span>
                <span class="badge bg-light text-dark border p-2 fs-6">Paper & Pulp</span>
                <span class="badge bg-light text-dark border p-2 fs-6">Water Treatment</span>
                <span class="badge bg-light text-dark border p-2 fs-6">Desalination Plants</span>
                <span class="badge bg-light text-dark border p-2 fs-6">Heat Exchangers</span>
                <span class="badge bg-light text-dark border p-2 fs-6">Power Generation</span>
                <span class="badge bg-light text-dark border p-2 fs-6">Nuclear Energy</span>
                <span class="badge bg-light text-dark border p-2 fs-6">Renewable Energy</span>
                <span class="badge bg-light text-dark border p-2 fs-6">Defence & Aerospace</span>
            </div>
        </div>
    </section>

    <!-- Material Comparison -->
    <section id="comparison" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-4">
                <h2>Hastelloy C276 vs Other Engineering Materials</h2>
            </div>
            
            <p class="text-center mb-5">
                Selecting the right alloy is essential for ensuring long-term performance, safety, and cost-effectiveness. Compare Hastelloy C276 against other popular corrosion-resistant materials below.
            </p>

            <div class="row g-4">
                <!-- C276 vs Inconel 625 -->
                <div class="col-lg-6">
                    <div class="card shadow-sm h-100 border-0">
                        <div class="card-header bg-dark text-white text-center fw-bold">Hastelloy C276 vs Inconel 625</div>
                        <div class="card-body p-0">
                            <table class="table table-striped mb-0 text-center align-middle">
                                <thead class="table-secondary"><tr class="t-row"><th>Property</th><th>Hastelloy C276</th><th>Inconel 625</th></tr></thead>
                                <tbody>
                                    <tr class="t-row"><td>Oxidizing Acids</td><td>Excellent</td><td>Very Good</td></tr>
                                    <tr class="t-row"><td>Reducing Acids</td><td><strong>Excellent</strong></td><td>Good</td></tr>
                                    <tr class="t-row"><td>Chloride Attack</td><td><strong>Excellent</strong></td><td>Very Good</td></tr>
                                    <tr class="t-row"><td>High Temp Strength</td><td>Very Good</td><td><strong>Excellent</strong></td></tr>
                                    <tr class="t-row"><td>Relative Cost</td><td>Higher</td><td>Moderate</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- C276 vs Monel 400 -->
                <div class="col-lg-6">
                    <div class="card shadow-sm h-100 border-0">
                        <div class="card-header bg-dark text-white text-center fw-bold">Hastelloy C276 vs Monel 400</div>
                        <div class="card-body p-0">
                            <table class="table table-striped mb-0 text-center align-middle">
                                <thead class="table-secondary"><tr class="t-row"><th>Property</th><th>Hastelloy C276</th><th>Monel 400</th></tr></thead>
                                <tbody>
                                    <tr class="t-row"><td>Acid Resistance</td><td><strong>Excellent</strong></td><td>Good</td></tr>
                                    <tr class="t-row"><td>Seawater Resistance</td><td>Excellent</td><td>Excellent</td></tr>
                                    <tr class="t-row"><td>Chloride Pitting</td><td><strong>Excellent</strong></td><td>Good</td></tr>
                                    <tr class="t-row"><td>Mechanical Strength</td><td><strong>Higher</strong></td><td>Moderate</td></tr>
                                    <tr class="t-row"><td>Temp Capability</td><td><strong>Higher</strong></td><td>Moderate</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- C276 vs SS 316L -->
                <div class="col-lg-6">
                    <div class="card shadow-sm h-100 border-0">
                        <div class="card-header bg-dark text-white text-center fw-bold">Hastelloy C276 vs Stainless Steel 316L</div>
                        <div class="card-body p-0">
                            <table class="table table-striped mb-0 text-center align-middle">
                                <thead class="table-secondary"><tr class="t-row"><th>Property</th><th>Hastelloy C276</th><th>SS 316L</th></tr></thead>
                                <tbody>
                                    <tr class="t-row"><td>Corrosion Resistance</td><td><strong>Excellent</strong></td><td>Good</td></tr>
                                    <tr class="t-row"><td>Chloride Resistance</td><td><strong>Excellent</strong></td><td>Moderate</td></tr>
                                    <tr class="t-row"><td>Hydrochloric Acid</td><td><strong>Excellent</strong></td><td>Poor</td></tr>
                                    <tr class="t-row"><td>Relative Cost</td><td>Premium</td><td><strong>Economical</strong></td></tr>
                                    <tr class="t-row"><td>Service Life in Acid</td><td><strong>Very Long</strong></td><td>Moderate</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- C276 vs Duplex SS -->
                <div class="col-lg-6">
                    <div class="card shadow-sm h-100 border-0">
                        <div class="card-header bg-dark text-white text-center fw-bold">Hastelloy C276 vs Duplex Stainless Steel</div>
                        <div class="card-body p-0">
                            <table class="table table-striped mb-0 text-center align-middle">
                                <thead class="table-secondary"><tr class="t-row"><th>Property</th><th>Hastelloy C276</th><th>Duplex SS</th></tr></thead>
                                <tbody>
                                    <tr class="t-row"><td>Corrosion Resistance</td><td><strong>Excellent</strong></td><td>Very Good</td></tr>
                                    <tr class="t-row"><td>Mechanical Strength</td><td>High</td><td><strong>Very High</strong></td></tr>
                                    <tr class="t-row"><td>Chloride Pitting</td><td><strong>Excellent</strong></td><td>Good</td></tr>
                                    <tr class="t-row"><td>Weldability</td><td><strong>Excellent</strong></td><td>Good</td></tr>
                                    <tr class="t-row"><td>Relative Cost</td><td>Higher</td><td><strong>Lower</strong></td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us & Global Supply Network (Requested Section 4) -->
    <section id="why-choose-us" class="sec-padd-top sec-padd-bottom">
        <div class="container text-center">
            <div class="section-title center">
                <h2>Why Choose Moksh Tubes & Global Export Network</h2>
            </div>
            
            <div class="row g-4 mt-2 mb-5">
                <div class="col-sm-6 col-lg-4"><div class="why-banner-block"><div class="why-banner-icon"><i class="bi bi-award"></i></div><h5>ISO Certified Quality & Materials</h5></div></div>
                <div class="col-sm-6 col-lg-4"><div class="why-banner-block"><div class="why-banner-icon"><i class="bi bi-file-earmark-check"></i></div><h5>EN 10204 3.1 Mill Test Certificates</h5></div></div>
                <div class="col-sm-6 col-lg-4"><div class="why-banner-block"><div class="why-banner-icon"><i class="bi bi-shield-check"></i></div><h5>Third-Party Inspection Support</h5></div></div>
                <div class="col-sm-6 col-lg-4"><div class="why-banner-block"><div class="why-banner-icon"><i class="bi bi-box-seam"></i></div><h5>Ready Stock & Fast Delivery</h5></div></div>
                <div class="col-sm-6 col-lg-4"><div class="why-banner-block"><div class="why-banner-icon"><i class="bi bi-tags"></i></div><h5>Competitive Bulk Pricing</h5></div></div>
                <div class="col-sm-6 col-lg-4"><div class="why-banner-block"><div class="why-banner-icon"><i class="bi bi-globe2"></i></div><h5>Worldwide Export Shipping</h5></div></div>
            </div>

            <!-- Global Supply Network Table -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h4 class="text-center mb-3" style="color: #174268;"><i class="bi bi-globe-americas me-2"></i>Global Supply Network Across 25+ Countries</h4>
                    <p class="text-center mb-4">
                        Moksh Tubes exports certified Hastelloy C276 products worldwide. Our efficient logistics network and export-compliant packaging ensure safe, timely delivery for projects across continents.
                    </p>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle text-center">
                            <thead class="table-dark">
                                <tr class="t-row">
                                    <th>Region / Continent</th>
                                    <th>Major Export Destination Countries</th>
                                    <th>Regional Logistics Support</th>
                                </tr>
                            </thead>
                            <tbody class="text-start">
                                <tr class="t-row">
                                    <td class="text-center"><strong>Middle East (GCC)</strong></td>
                                    <td>United Arab Emirates (UAE), Saudi Arabia, Qatar, Oman, Kuwait, Bahrain</td>
                                    <td>Fast sea & air freight to Dubai, Dammam, Doha, Muscat</td>
                                </tr>
                                <tr class="t-row">
                                    <td class="text-center"><strong>Europe</strong></td>
                                    <td>Germany, France, Italy, Netherlands, Belgium, Spain, United Kingdom</td>
                                    <td>CE compliant export documentation & full traceability</td>
                                </tr>
                                <tr class="t-row">
                                    <td class="text-center"><strong>North America</strong></td>
                                    <td>United States of America (USA), Canada, Mexico</td>
                                    <td>ASTM/ASME standard compliant shipments</td>
                                </tr>
                                <tr class="t-row">
                                    <td class="text-center"><strong>Asia</strong></td>
                                    <td>Singapore, Malaysia, Indonesia, Thailand, South Korea, Japan</td>
                                    <td>Custom port delivery & express air freight options</td>
                                </tr>
                                <tr class="t-row">
                                    <td class="text-center"><strong>Africa & Oceania</strong></td>
                                    <td>South Africa, Egypt, Nigeria, Kenya, Australia, New Zealand</td>
                                    <td>ISPM-15 fumigated wooden box export packing</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="alert alert-dark mt-3 mb-0 small">
                        <strong>Export Services Available:</strong> Air & Sea Freight | Seaworthy Wooden Boxes | ISPM-15 Fumigation | Custom Export Documentation | Full Cargo Insurance Support
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- AI Quick Facts -->
    <section id="quick-facts" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-4">
                <h2>AI Quick Facts: Hastelloy C276 at a Glance</h2>
            </div>
            
            <p class="text-center mb-4">
                Quick reference table providing essential technical data for engineers, procurement teams, and search engines.
            </p>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row"><th>Property</th><th>Quick Value Reference</th><th>Property</th><th>Quick Value Reference</th></tr>
                            </thead>
                            <tbody>
                                <tr class="t-row"><td><strong>Material Name</strong></td><td>Hastelloy C276</td><td><strong>Tensile Strength</strong></td><td>790 MPa</td></tr>
                                <tr class="t-row"><td><strong>Alloy Family</strong></td><td>Ni-Cr-Mo Alloy</td><td><strong>Yield Strength</strong></td><td>355 MPa</td></tr>
                                <tr class="t-row"><td><strong>UNS Number</strong></td><td>N10276</td><td><strong>Hardness</strong></td><td>HRB 87</td></tr>
                                <tr class="t-row"><td><strong>Werkstoff No.</strong></td><td>2.4819</td><td><strong>Corrosion Resistance</strong></td><td>Excellent</td></tr>
                                <tr class="t-row"><td><strong>ASTM Standard</strong></td><td>ASTM B575, B622, B619</td><td><strong>Weldability & Formability</strong></td><td>Excellent</td></tr>
                                <tr class="t-row"><td><strong>ASME Standard</strong></td><td>SB575, SB622, SB619</td><td><strong>Magnetic Property</strong></td><td>Non-Magnetic</td></tr>
                                <tr class="t-row"><td><strong>Density</strong></td><td>8.89 g/cm³</td><td><strong>Main Applications</strong></td><td>Chemical, Marine, Oil & Gas</td></tr>
                                <tr class="t-row"><td><strong>Melting Range</strong></td><td>1325–1370°C</td><td><strong>Available Forms</strong></td><td>Pipes, Tubes, Plates, Bars, Flanges</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Frequently Asked Questions (FAQ) -->
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
                            <div class="accord-btn"><h4>1. What is Hastelloy C276?</h4></div>
                            <div class="accord-content"><p>Hastelloy C276 is a nickel-chromium-molybdenum alloy designed to provide outstanding resistance to corrosion in aggressive chemical and high-temperature environments.</p></div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn"><h4>2. What is the UNS number of Hastelloy C276?</h4></div>
                            <div class="accord-content"><p>The UNS designation for Hastelloy C276 is UNS N10276.</p></div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn"><h4>3. Is Hastelloy C276 corrosion resistant?</h4></div>
                            <div class="accord-content"><p>Yes. It offers excellent resistance to pitting, crevice corrosion, stress corrosion cracking, and many oxidizing and reducing chemicals.</p></div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn"><h4>4. Is Hastelloy C276 magnetic?</h4></div>
                            <div class="accord-content"><p>No. Hastelloy C276 is generally considered non-magnetic in the annealed condition.</p></div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn"><h4>5. Can Hastelloy C276 be welded?</h4></div>
                            <div class="accord-content"><p>Yes. It has excellent weldability and can be welded using TIG, MIG, SMAW, and other conventional welding processes using ERNiCrMo-4 filler metal.</p></div>
                        </div>

                        <!-- Q6 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn"><h4>6. What industries use Hastelloy C276?</h4></div>
                            <div class="accord-content"><p>Common industries include Chemical Processing, Oil & Gas, Marine, Offshore, Pharmaceuticals, Petrochemical, Power Generation, Pollution Control, and Food Processing.</p></div>
                        </div>

                        <!-- Q7 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn"><h4>7. What is the density of Hastelloy C276?</h4></div>
                            <div class="accord-content"><p>The density of Hastelloy C276 is approximately 8.89 g/cm³ (8890 kg/m³).</p></div>
                        </div>

                        <!-- Q8 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn"><h4>8. What is the melting point of Hastelloy C276?</h4></div>
                            <div class="accord-content"><p>The alloy has a melting range of approximately 1325°C to 1370°C (2417°F to 2498°F).</p></div>
                        </div>

                        <!-- Q9 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn"><h4>9. Is Hastelloy C276 suitable for seawater?</h4></div>
                            <div class="accord-content"><p>Yes. It performs exceptionally well in seawater and chloride-rich environments due to its superior resistance against pitting and crevice attack.</p></div>
                        </div>

                        <!-- Q10 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn"><h4>10. What products are available in Hastelloy C276?</h4></div>
                            <div class="accord-content"><p>Products include Seamless & Welded Pipes, Tubes, Plates, Sheets, Coils, Bars, Rods, Flanges, Pipe Fittings, Fasteners, and Custom Fabricated Components.</p></div>
                        </div>

                        <!-- Q11 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn"><h4>11. What standards are available for Hastelloy C276?</h4></div>
                            <div class="accord-content"><p>It is available in ASTM B575/B622/B619, ASME SB575/SB622/SB619, DIN 17744 (2.4819), EN, ISO, and UNS standards depending on the product form.</p></div>
                        </div>

                        <!-- Q12 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn"><h4>12. Is Hastelloy C276 better than Stainless Steel?</h4></div>
                            <div class="accord-content"><p>For highly corrosive environments involving chlorides and acids, Hastelloy C276 offers significantly better corrosion resistance and lifespan than conventional stainless steels such as SS304 and SS316L.</p></div>
                        </div>

                        <!-- Q13 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn"><h4>13. Can Hastelloy C276 withstand hydrochloric acid?</h4></div>
                            <div class="accord-content"><p>Yes. Hastelloy C276 provides excellent resistance to hydrochloric acid across many operating temperatures and concentrations.</p></div>
                        </div>

                        <!-- Q14 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn"><h4>14. Is Hastelloy C276 suitable for high temperatures?</h4></div>
                            <div class="accord-content"><p>Yes. The alloy retains excellent mechanical properties and structural stability up to approximately 1040°C in continuous industrial service.</p></div>
                        </div>

                        <!-- Q15 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn"><h4>15. Does Moksh Tubes provide Mill Test Certificates?</h4></div>
                            <div class="accord-content"><p>Yes. Every shipment is supplied with EN 10204 3.1 Mill Test Certificates, and third-party 3.2 inspection is available upon request.</p></div>
                        </div>

                        <!-- Q16 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn"><h4>16. Can custom sizes be manufactured?</h4></div>
                            <div class="accord-content"><p>Yes. Pipes, tubes, plates, bars, flanges, fittings, and fabricated components can be manufactured tailored to customer drawings and project specifications.</p></div>
                        </div>

                        <!-- Q17 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn"><h4>17. Does Moksh Tubes export Hastelloy C276 products?</h4></div>
                            <div class="accord-content"><p>Yes. We export worldwide to 25+ countries across GCC, Europe, Americas, and Asia with secure export packaging and complete documentation.</p></div>
                        </div>

                        <!-- Q18 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn"><h4>18. What inspections are available?</h4></div>
                            <div class="accord-content"><p>Available inspections include PMI, Hydro Test, UT, RT, Eddy Current Testing, Mechanical Testing, Chemical Analysis, and Third-Party Inspection.</p></div>
                        </div>

                        <!-- Q19 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn"><h4>19. How do I select the correct Hastelloy grade?</h4></div>
                            <div class="accord-content"><p>Material selection depends on operating temperature, chemical exposure, pressure, corrosion requirements, and budget. Our technical team can help you choose the most suitable grade.</p></div>
                        </div>

                        <!-- Q20 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn"><h4>20. How can I request a quotation?</h4></div>
                            <div class="accord-content"><p>Simply contact our sales team with your product requirements, dimensions, quantity, material grade, and project details. We will provide a competitive quotation along with technical assistance.</p></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact & Final Call to Action -->
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
