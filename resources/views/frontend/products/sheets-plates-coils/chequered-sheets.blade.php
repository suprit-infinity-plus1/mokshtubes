@extends('layouts.master')

@section('title', 'Chequered Sheets | Stainless Steel & Aluminium Tread Plates')
@section('meta_description', 'Buy chequered sheets in SS, aluminium & steel. Anti-slip tread plates for flooring, ramps & industrial use.')
@section('meta_keywords', 'Chequered Sheets, tread plates, checker plates, anti-slip sheets, stainless steel chequered sheet, aluminium tread plate')
@section('og_image', asset('assets/images/product/Sheets-Plates-and-Coils/chequered-sheets.webp'))
@section('og_type', 'article')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/product/Sheets-Plates-and-Coils/chequered-sheets.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Chequered Sheets<br>Stainless Steel, Aluminium & Anti-Slip Tread Plates</h1>

                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Chequered Sheets (also known as tread plates or checker plates) are anti-slip metal sheets designed for safety, durability, and structural performance in industrial and architectural applications. Moksh Tubes & Fittings LLP supplies high-quality chequered sheets in stainless steel, carbon steel, aluminium, and alloy grades. With raised patterns such as diamond, tear drop, and lentil designs, our sheets provide superior grip, corrosion resistance, and long-lasting performance across India and global markets.
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
                CHEQUERED SHEETS
            </h3>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/product/Sheets-Plates-and-Coils/chequered-sheets.webp') }}" alt="Chequered Sheets"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4" style="text-align: justify;">
                            <strong class="text-black">Chequered Sheets</strong> are metal sheets with raised patterns on the surface, designed to provide anti-slip properties and enhanced safety in high-traffic and industrial environments. These sheets are widely used in flooring, walkways, ramps, and platforms where slip resistance is critical.
                        </p>

                        <p class="fs-6 mb-4" style="text-align: justify;">
                            Manufactured from materials like stainless steel, carbon steel, and aluminium, chequered sheets combine strength, durability, and corrosion resistance. Their textured surface not only improves grip but also adds aesthetic value in architectural applications.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            At <strong style="color:black;"><a href="{{ url('/contact-us') }}">Moksh Tubes & Fittings LLP</a></strong>, we supply premium-quality chequered sheets in various patterns, thicknesses, and finishes, complying with ASTM, ASME, EN, and IS standards for reliable performance in demanding conditions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Chequered Sheets Datasheet</h3>
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
                <h2>Specifications of Chequered Sheets</h2>
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
                                <tr class="t-row"><td>Material</td><td>Stainless Steel, Carbon Steel, Mild Steel, Aluminium, Alloy Steel</td></tr>
                                <tr class="t-row"><td>Grades</td><td>ASTM / ASME / EN / IS compliant</td></tr>
                                <tr class="t-row"><td>Thickness</td><td>1.5 mm to 12 mm</td></tr>
                                <tr class="t-row"><td>Sheet Size</td><td>1000×2000 mm, 1250×2500 mm, 1500×3000 mm</td></tr>
                                <tr class="t-row"><td>Patterns</td><td>Diamond, Tear Drop, Lentil, Checker</td></tr>
                                <tr class="t-row"><td>Finish</td><td>Mill Finish, Polished, Matte, Anodized</td></tr>
                                <tr class="t-row"><td>Standards</td><td>ASTM A240, ASTM B209, EN 10088, IS 3502</td></tr>
                                <tr class="t-row"><td>Applications</td><td>Flooring, Walkways, Ramps, Platforms</td></tr>
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
                    <h4 class="text-center mb-3" style="color: #db7227;">Thickness Range</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row"><th>Material</th><th>Thickness (mm)</th></tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>Stainless Steel</td><td>1.5 – 12</td></tr>
                                <tr class="t-row"><td>Carbon Steel</td><td>2 – 25</td></tr>
                                <tr class="t-row"><td>Aluminium</td><td>2 – 10</td></tr>
                                <tr class="t-row"><td>Copper / Brass</td><td>2 – 6</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <h4 class="text-center mb-3" style="color: #db7227;">Standard Sheet Sizes</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row"><th>Size (mm)</th><th>Application</th></tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>1000 × 2000</td><td>General flooring</td></tr>
                                <tr class="t-row"><td>1250 × 2500</td><td>Industrial use</td></tr>
                                <tr class="t-row"><td>1500 × 3000</td><td>Structural applications</td></tr>
                                <tr class="t-row"><td>2000 × 4000</td><td>Heavy-duty flooring</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-12 mb-4">
                    <h4 class="text-center mb-3" style="color: #db7227;">Weight Chart (Sample)</h4>
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <h5 class="text-center mb-2">Mild Steel</h5>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped align-middle">
                                    <thead class="table-dark text-center">
                                        <tr class="t-row"><th>Thickness</th><th>1000×2000 (kg)</th></tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <tr class="t-row"><td>3 mm</td><td>47.4</td></tr>
                                        <tr class="t-row"><td>5 mm</td><td>79.0</td></tr>
                                        <tr class="t-row"><td>10 mm</td><td>158.0</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h5 class="text-center mb-2">Stainless Steel</h5>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped align-middle">
                                    <thead class="table-dark text-center">
                                        <tr class="t-row"><th>Thickness</th><th>1000×2000 (kg)</th></tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <tr class="t-row"><td>2 mm</td><td>31.4</td></tr>
                                        <tr class="t-row"><td>5 mm</td><td>78.5</td></tr>
                                        <tr class="t-row"><td>10 mm</td><td>157.0</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h5 class="text-center mb-2">Aluminium</h5>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped align-middle">
                                    <thead class="table-dark text-center">
                                        <tr class="t-row"><th>Thickness</th><th>1000×2000 (kg)</th></tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <tr class="t-row"><td>2 mm</td><td>10.8</td></tr>
                                        <tr class="t-row"><td>5 mm</td><td>27.0</td></tr>
                                        <tr class="t-row"><td>10 mm</td><td>54.0</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
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
                <div class="col-sm-6 col-lg-3">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Stainless Steel</h5>
                        <p>304 / 304L<br>316 / 316L<br>321</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear"></i></div>
                        <h5>Carbon & Mild Steel</h5>
                        <p>ASTM A36, IS 2062</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-box"></i></div>
                        <h5>Aluminium</h5>
                        <p>6061, 6063, 5754, 1100</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-nut"></i></div>
                        <h5>Alloy Steel</h5>
                        <p>High-strength industrial grades</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="types" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Types of Chequered Sheets</h2>
            </div>
            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-3">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-diamond"></i></div>
                        <h5>Diamond Pattern Sheets</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Tear Drop Pattern Sheets</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-record-circle"></i></div>
                        <h5>Lentil Pattern Sheets</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-grid-3x3"></i></div>
                        <h5>Checker Pattern Sheets</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Chequered Sheets</h2>
            </div>

            <div class="row g-4 justify-content-center mt-4">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-building"></i></div>
                        <h5>Construction & Architecture</h5>
                        <p>✔ Staircases & walkways<br>✔ Decorative panels</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Industrial Use</h5>
                        <p>✔ Factory flooring<br>✔ Platforms & catwalks</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-truck"></i></div>
                        <h5>Transportation</h5>
                        <p>✔ Truck beds<br>✔ Vehicle ramps</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-water"></i></div>
                        <h5>Marine & Offshore</h5>
                        <p>✔ Ship decks<br>✔ Dock flooring</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-train-front"></i></div>
                        <h5>Public Infrastructure</h5>
                        <p>✔ Railway stations<br>✔ Airports & bridges</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="uses" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Uses & Advantages of Chequered Sheets</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-x"></i></div>
                        <h5>Anti-Slip Safety</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-hammer"></i></div>
                        <h5>High Strength & Durability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Corrosion Resistance</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-brush"></i></div>
                        <h5>Low Maintenance</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-layers"></i></div>
                        <h5>Versatile Applications</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-palette"></i></div>
                        <h5>Customizable Patterns</h5>
                    </div>
                </div>
            </div>
            
            <p class="text-center mt-4">
                <strong>Uses:</strong> Anti-slip flooring solution | Structural support for platforms | Decorative architectural panels | Lightweight aluminium applications | Durable surfaces for heavy use
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
                        <p class="fs-6" style="text-align: justify;"><strong>Manufacturing Process of Chequered Sheets:</strong></p>
                        <p>Rolling of base sheet</p>
                        <p>Pattern embossing</p>
                        <p>Cutting & sizing</p>
                        <p>Surface finishing</p>
                        <p>Inspection & packaging</p>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6" style="text-align: justify;"><strong>Testing & Quality Control:</strong></p>
                        <p>Each Chequered Sheet undergoes strict inspection including:</p>
                        <p>✔ Thickness measurement</p>
                        <p>✔ Surface inspection</p>
                        <p>✔ Pattern quality check</p>
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
                        <p><strong>Thickness:</strong> ±10%</p>
                        <p><strong>Length:</strong> ±5 mm</p>
                        <p><strong>Width:</strong> ±1%</p>
                        <p><strong>Pattern height:</strong> Standard tolerance</p>
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
                        <div class="why-banner-icon"><i class="bi bi-grid-3x3"></i></div>
                        <h5>Wide pattern availability</h5>
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
                        <h5>Custom sizes & finishes</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Reliable supply</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-tag"></i></div>
                        <h5>Competitive pricing</h5>
                    </div>
                </div>
            </div>

            <div class="row mt-5 justify-content-center text-start">
                <div class="col-lg-8">
                    <div class="p-4 rounded shadow-sm bg-white border">
                        <h4 class="mb-3 text-center" style="color: #db7227;">Buying Guide – Chequered Sheets</h4>
                        <p class="mb-2"><strong>Before selecting:</strong></p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Material type</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Thickness requirement</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Pattern type</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Load-bearing requirement</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Indoor vs outdoor use</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Surface finish</li>
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
                                <h4>Q1. What are chequered sheets?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Metal sheets with raised patterns for anti-slip use.</p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Q2. What materials are available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>SS, MS, aluminium, alloy steel.</p>
                            </div>
                        </div>
                        
                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Q3. What thickness range is available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>1.5 mm to 12 mm.</p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Q4. What are common uses?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Flooring, ramps, platforms, transport.</p>
                            </div>
                        </div>
                        
                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Q5. What patterns are available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Diamond, tear drop, lentil, checker.</p>
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
                    Looking for high-quality chequered sheets?<br>
                    📞 Contact Moksh Tubes & Fittings LLP at +91 97695 84950<br>
                    We supply durable anti-slip sheets for industrial and architectural applications.
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
            "name": "Chequered Sheets | Stainless Steel & Aluminium Tread Plates",
            "description": "Buy chequered sheets in SS, aluminium & steel. Anti-slip tread plates for flooring, ramps & industrial use.",
            "brand": {
                "@type": "Brand",
                "name": "Moksh Tubes & Fittings LLP"
            },
            "manufacturer": {
                "@type": "Organization",
                "name": "Moksh Tubes & Fittings LLP"
            },
            "material": "Stainless Steel, Carbon Steel, Mild Steel, Aluminium, Alloy Steel",
            "url": "https://www.mokshtubes.com/chequered-sheets",
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
                "name": "Q1. What are chequered sheets?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "Metal sheets with raised patterns for anti-slip use."
                }
            },{
                "@type": "Question",
                "name": "Q2. What materials are available?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "SS, MS, aluminium, alloy steel."
                }
            },{
                "@type": "Question",
                "name": "Q3. What thickness range is available?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "1.5 mm to 12 mm."
                }
            },{
                "@type": "Question",
                "name": "Q4. What are common uses?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "Flooring, ramps, platforms, transport."
                }
            },{
                "@type": "Question",
                "name": "Q5. What patterns are available?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "Diamond, tear drop, lentil, checker."
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
                "name": "Chequered Sheets",
                "item": "https://www.mokshtubes.com/chequered-sheets"
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
