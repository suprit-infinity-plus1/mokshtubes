@extends('layouts.master')

@section('title', 'Sheets & Plates | Stainless Steel, Carbon Steel & Alloy Plates')
@section('meta_description', 'Buy sheets & plates in stainless steel, carbon steel & alloys. Wide thickness range, custom sizes, and industrial-grade materials.')
@section('meta_keywords', 'Sheets & Plates, stainless steel sheets, steel plates, metal sheets, industrial plates, alloy steel plates')
@section('og_image', asset('assets/images/product/Sheets-Plates-and-Coils/Sheets-and-Plates.webp'))
@section('og_type', 'article')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/product/Sheets-Plates-and-Coils/Sheets-and-Plates.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Sheets & Plates<br>Stainless Steel, Carbon Steel, Alloy & Metal Plates</h1>

                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Sheets & Plates are essential flat-rolled metal products used in construction, fabrication, oil & gas, marine, and heavy engineering industries. Moksh Tubes & Fittings LLP supplies high-quality sheets and plates in stainless steel, carbon steel, aluminium, copper, nickel alloys, and specialty metals. Our products offer excellent strength, corrosion resistance, and dimensional accuracy, making them ideal for structural, industrial, and decorative applications across India and global markets.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

    <!-- Start Material Tabs -->
    <div class="sticky-top bg-white border-bottom material-tabs w-100">
        <div class="container">
            <a href="#overview">Overview</a> |
            <a href="#specifications">Specifications</a> |
            <a href="#size-weight">Size & Weight</a> |
            <a href="#grades">Grades</a> |
            <a href="#types">Types</a> |
            <a href="#applications">Applications</a> |
            <a href="#uses">Uses & Advantages</a> |
            <a href="#manufacturing">Manufacturing</a> |
            <a href="#mechanical">Mechanical Properties</a> |
            <a href="#tolerances">Tolerances</a> |
            <a href="#export">Packaging & Exports</a> |
            <a href="#why-choose-us">Why Choose Us</a> |
            <a href="#faq">FAQ</a>
        </div>
    </div>
    <!-- End Material Tabs -->

    <section id="overview" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Introduction</h2>
            </div>

            <h3 class="fw-semibold text-center mb-5" style="color: #db7227;">
                SHEETS & PLATES
            </h3>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/product/Sheets-Plates-and-Coils/Sheets-and-Plates.webp') }}" alt="Sheets & Plates"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4" style="text-align: justify;">
                            <strong class="text-black">Sheets & Plates</strong> are flat metal products manufactured through rolling processes and widely used across industrial and structural applications. The key difference lies in thickness — sheets are generally thinner (up to 6 mm), while plates are thicker and used for heavy-duty structural applications.
                        </p>

                        <p class="fs-6 mb-4" style="text-align: justify;">
                            These products are critical for industries such as construction, shipbuilding, automotive, oil & gas, and manufacturing. Their versatility allows them to be cut, welded, and fabricated into complex components.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            At <strong style="color:black;"><a href="{{ url('/contact-us') }}">Moksh Tubes & Fittings LLP</a></strong>, we supply premium-quality sheets and plates in multiple materials and grades, complying with ASTM, ASME, EN, JIS, and DIN standards. Our products are known for their durability, surface finish, and performance in demanding environments.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Sheets & Plates Datasheet</h3>
            <p class="mb-3">
                Get the complete datasheet including chemical composition, mechanical properties, standards, tolerances, and application guidelines. Enter your email to receive the PDF instantly.
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
                <h2>Specifications of Sheets & Plates</h2>
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
                            <tbody class="text-center">
                                <tr class="t-row"><td>Material</td><td>Stainless Steel, Carbon Steel, Alloy Steel, Aluminium, Copper, Brass, Nickel Alloys, Titanium</td></tr>
                                <tr class="t-row"><td>Grades</td><td>ASTM / ASME / EN / JIS / DIN compliant</td></tr>
                                <tr class="t-row"><td>Thickness</td><td>Sheets: 0.3–6 mm; Plates: 6–150 mm+</td></tr>
                                <tr class="t-row"><td>Width</td><td>1000 mm – 3000 mm</td></tr>
                                <tr class="t-row"><td>Length</td><td>Up to 12 meters or cut-to-size</td></tr>
                                <tr class="t-row"><td>Finishes</td><td>No.1, 2B, BA, Mirror, Matte, Hairline, Pickled & Passivated</td></tr>
                                <tr class="t-row"><td>Types</td><td>Hot Rolled, Cold Rolled, Chequered, Perforated</td></tr>
                                <tr class="t-row"><td>Standards</td><td>ASTM A240, A36, EN 10088, IS 2062</td></tr>
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
                <h2 class="fw-bold" style="color: #174268;">Size & Weight Charts</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-6 mb-4">
                    <h4 class="text-center mb-3" style="color: #db7227;">Thickness Classification</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row"><th>Type</th><th>Thickness (mm)</th></tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>Thin Sheets</td><td>0.5 – 5</td></tr>
                                <tr class="t-row"><td>Medium Plates</td><td>5 – 25</td></tr>
                                <tr class="t-row"><td>Heavy Plates</td><td>25 – 150</td></tr>
                                <tr class="t-row"><td>Extra Heavy</td><td>150+</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <h4 class="text-center mb-3" style="color: #db7227;">Standard Sizes</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row"><th>Size (mm)</th><th>Usage</th></tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>1000 × 2000</td><td>General fabrication</td></tr>
                                <tr class="t-row"><td>1250 × 2500</td><td>Industrial</td></tr>
                                <tr class="t-row"><td>1500 × 3000</td><td>Structural</td></tr>
                                <tr class="t-row"><td>2000 × 4000</td><td>Pressure vessels</td></tr>
                                <tr class="t-row"><td>2500 × 6000</td><td>Heavy engineering</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <h4 class="text-center mb-3" style="color: #db7227;">Thickness Tolerance</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row"><th>Thickness</th><th>Tolerance</th></tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>0.5 – 1 mm</td><td>±0.03</td></tr>
                                <tr class="t-row"><td>1 – 3 mm</td><td>±0.05</td></tr>
                                <tr class="t-row"><td>3 – 10 mm</td><td>±0.10</td></tr>
                                <tr class="t-row"><td>10 – 25 mm</td><td>±0.20</td></tr>
                                <tr class="t-row"><td>25+ mm</td><td>±0.30 to ±1.00</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <h4 class="text-center mb-3" style="color: #db7227;">Weight Chart (kg/m²)</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row"><th>Thickness</th><th>SS</th><th>MS</th><th>Aluminium</th><th>Copper</th></tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>1 mm</td><td>7.93</td><td>7.85</td><td>2.70</td><td>8.94</td></tr>
                                <tr class="t-row"><td>2 mm</td><td>15.86</td><td>15.70</td><td>5.40</td><td>17.88</td></tr>
                                <tr class="t-row"><td>5 mm</td><td>39.65</td><td>39.25</td><td>13.50</td><td>44.70</td></tr>
                                <tr class="t-row"><td>10 mm</td><td>79.30</td><td>78.50</td><td>27.00</td><td>89.40</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="grades" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Grades Available</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Stainless Steel</h5>
                        <p>304 / 304L<br>316 / 316L<br>310 / 321 / 347<br>904L</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear"></i></div>
                        <h5>Carbon & Alloy Steel</h5>
                        <p>ASTM A36, IS 2062<br>EN8, EN19<br>ASTM A516, A387</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-tools"></i></div>
                        <h5>Duplex & Super Duplex</h5>
                        <p>2205, S31803, S32750</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-star"></i></div>
                        <h5>Nickel Alloys</h5>
                        <p>Inconel, Monel, Hastelloy</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-box"></i></div>
                        <h5>Aluminium</h5>
                        <p>1100, 5052, 6061, 6082</p>
                    </div>
                </div>
                
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-lightbulb"></i></div>
                        <h5>Copper & Brass</h5>
                        <p>Electrical & decorative grades</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-diamond"></i></div>
                        <h5>Titanium</h5>
                        <p>Grade 1, 2, 5</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="types" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Types of Sheets & Plates</h2>
            </div>
            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-fire"></i></div>
                        <h5>Hot Rolled Sheets & Plates (HR)</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-snow"></i></div>
                        <h5>Cold Rolled Sheets (CR)</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-grid-3x3"></i></div>
                        <h5>Chequered Plates</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-grid-1x2"></i></div>
                        <h5>Perforated Sheets</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-layers"></i></div>
                        <h5>Cladded Plates</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Sheets & Plates</h2>
            </div>

            <div class="row g-4 justify-content-center mt-4">
                <div class="col-md-6 col-lg-3">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-building"></i></div>
                        <h5>Construction & Infrastructure</h5>
                        <p>✔ Structural components<br>✔ Bridges & buildings</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-water"></i></div>
                        <h5>Shipbuilding & Marine</h5>
                        <p>✔ Hulls & decks<br>✔ Offshore platforms</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Oil, Gas & Petrochemical</h5>
                        <p>✔ Pressure vessels<br>✔ Boilers & tanks</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-car-front"></i></div>
                        <h5>Automotive & Transport</h5>
                        <p>✔ Chassis & panels<br>✔ Rail & aerospace</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Industrial Fabrication</h5>
                        <p>✔ Machine bases<br>✔ Conveyor systems</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cup-straw"></i></div>
                        <h5>Food & Pharma</h5>
                        <p>✔ Hygienic surfaces<br>✔ Processing equipment</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning"></i></div>
                        <h5>Power & Energy</h5>
                        <p>✔ Boilers & turbines<br>✔ Solar & wind systems</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-house"></i></div>
                        <h5>Decorative & Architectural</h5>
                        <p>✔ Cladding & interiors<br>✔ Designer panels</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="uses" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Uses & Advantages of Sheets & Plates</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-layers"></i></div>
                        <h5>Wide Material Range</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-lock"></i></div>
                        <h5>High Strength & Durability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Corrosion Resistance</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-rulers"></i></div>
                        <h5>Custom Sizes Available</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-star"></i></div>
                        <h5>Excellent Surface Finish</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-tools"></i></div>
                        <h5>Easy Fabrication</h5>
                    </div>
                </div>
            </div>
            
            <p class="text-center mt-4">
                <strong>Uses:</strong> Structural fabrication | Pressure vessel manufacturing | Corrosion-resistant applications | Decorative architecture | Industrial component production
            </p>
        </div>
    </section>

    <section id="manufacturing" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Manufacturing Process & Quality Control</h2>
            </div>
            
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6" style="text-align: justify;"><strong>Manufacturing Process of Sheets & Plates:</strong></p>
                        <p>Hot or cold rolling</p>
                        <p>Cutting & leveling</p>
                        <p>Heat treatment</p>
                        <p>Surface finishing</p>
                        <p>Inspection & packaging</p>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6" style="text-align: justify;"><strong>Testing & Quality Control:</strong></p>
                        <p>Each Sheet and Plate undergoes strict inspection including:</p>
                        <p>✔ Thickness inspection</p>
                        <p>✔ Surface testing</p>
                        <p>✔ Dimensional checks</p>
                        <p>✔ Material certification</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="mechanical" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Mechanical Properties (Typical)</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Material</th>
                                    <th>Tensile Strength (MPa)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>Stainless Steel</td><td>515</td></tr>
                                <tr class="t-row"><td>Carbon Steel</td><td>400–550</td></tr>
                                <tr class="t-row"><td>Aluminium</td><td>150–300</td></tr>
                                <tr class="t-row"><td>Copper</td><td>200–400</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="tolerances" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="row mt-4 justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-rulers"></i></div>
                        <h5>Dimensional Tolerances</h5>
                        <p><strong>Thickness:</strong> As per tolerance chart</p>
                        <p><strong>Width:</strong> ±1%</p>
                        <p><strong>Length:</strong> ±5 mm</p>
                        <p><strong>Flatness:</strong> As per standards</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-5" id="export">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-box-seam"></i></div>
                        <h5>Exports & Supply Coverage</h5>
                        <p><strong>We supply across India:</strong> Mumbai, Pune, Ahmedabad, Bangalore, Chennai, Hyderabad</p>
                        <p><strong>Export markets:</strong> UAE, Saudi Arabia, Qatar, Oman, Kuwait</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="why-choose-us" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container text-center">
            <div class="section-title center">
                <h2>Why Choose Moksh Tubes & Fittings LLP?</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-box-seam"></i></div>
                        <h5>Wide stock availability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-star"></i></div>
                        <h5>Premium material quality</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-scissors"></i></div>
                        <h5>Custom cutting & finishing</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Global export capability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Reliable delivery</h5>
                    </div>
                </div>
            </div>

            <div class="row mt-5 justify-content-center text-start">
                <div class="col-lg-8">
                    <div class="p-4 rounded shadow-sm bg-white border">
                        <h4 class="mb-3 text-center" style="color: #db7227;">Buying Guide – Sheets & Plates</h4>
                        <p class="mb-2"><strong>Before selecting:</strong></p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Material type</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Thickness requirement</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Application (structural / decorative)</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Surface finish</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Standard compliance</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Custom size requirement</li>
                        </ul>
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

                        <!-- Q1 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Q1. Difference between sheets and plates?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Sheets are thinner (<6 mm), plates are thicker (>6 mm).</p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Q2. What materials are available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>SS, MS, aluminium, copper, titanium, and more.</p>
                            </div>
                        </div>
                        
                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Q3. What sizes are available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Thickness 0.3–150 mm+, custom sizes available.</p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Q4. What are common uses?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Construction, pressure vessels, fabrication.</p>
                            </div>
                        </div>
                        
                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Q5. What finishes are available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>2B, BA, HR, polished, matte, chequered.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End faq content area-->

    <!-- Contact Section -->
    <section id="contact-us" class="sec-padd-bottom mt-5">
        <div class="container">
            <div class="contact-cta-box">
                <h2>REQUEST A QUOTE</h2>
                <p>
                    Looking for high-quality sheets & plates?<br>
                    📞 Contact Moksh Tubes & Fittings LLP at +91 97695 84950<br>
                    We supply durable, precision-engineered sheets and plates for industrial and structural applications.
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
                "areaServed": ["IN","AE","SA","QA","OM","KW"],
                "availableLanguage": ["English"]
            }
        },
        {
            "@context": "https://schema.org",
            "@type": "Product",
            "name": "Sheets & Plates | Stainless Steel, Carbon Steel & Alloy Plates",
            "description": "Buy sheets & plates in stainless steel, carbon steel & alloys. Wide thickness range, custom sizes, and industrial-grade materials.",
            "brand": {
                "@type": "Brand",
                "name": "Moksh Tubes & Fittings LLP"
            },
            "manufacturer": {
                "@type": "Organization",
                "name": "Moksh Tubes & Fittings LLP"
            },
            "material": "Stainless Steel, Carbon Steel, Alloy Steel, Aluminium, Copper, Brass, Nickel Alloys, Titanium",
            "url": "https://www.mokshtubes.com/sheets-plates",
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
                "name": "Q1. Difference between sheets and plates?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "Sheets are thinner (<6 mm), plates are thicker (>6 mm)."
                }
            },{
                "@type": "Question",
                "name": "Q2. What materials are available?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "SS, MS, aluminium, copper, titanium, and more."
                }
            },{
                "@type": "Question",
                "name": "Q3. What sizes are available?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "Thickness 0.3–150 mm+, custom sizes available."
                }
            },{
                "@type": "Question",
                "name": "Q4. What are common uses?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "Construction, pressure vessels, fabrication."
                }
            },{
                "@type": "Question",
                "name": "Q5. What finishes are available?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "2B, BA, HR, polished, matte, chequered."
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
                "name": "Products",
                "item": "https://www.mokshtubes.com/products"
            },{
                "@type": "ListItem",
                "position": 3,
                "name": "Sheets & Plates",
                "item": "https://www.mokshtubes.com/sheets-plates"
            }]
        },
        {
            "@context": "https://schema.org",
            "@type": "LocalBusiness",
            "name": "Moksh Tubes & Fittings LLP",
            "address": {
                "@type": "PostalAddress",
                "addressCountry": "India"
            },
            "areaServed": ["India","UAE","Saudi Arabia","Qatar","Oman","Kuwait"],
            "telephone": "+91-97695-84950"
        }]
        @endverbatim
    </script>
@endsection
