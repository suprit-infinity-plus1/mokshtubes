@extends('layouts.master')

@section('title', 'Perforated Sheets | Stainless Steel & Decorative Metal Sheets')
@section('meta_description', 'Buy perforated sheets in SS, aluminium & steel. Custom hole patterns, sizes & finishes for industrial & architectural use.')
@section('meta_keywords', 'Perforated Sheets, stainless steel perforated sheets, metal perforated sheets, decorative perforated panels, industrial perforated sheets, perforated sheet design')
@section('og_image', asset('assets/images/product/Sheets-Plates-and-Coils/sheets-Perforated.webp'))
@section('og_type', 'article')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/product/Sheets-Plates-and-Coils/sheets-Perforated.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Perforated Sheets<br>Stainless Steel, Aluminium & Decorative Metal Perforated Sheets</h1>

                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Perforated Sheets are precision metal sheets with punched holes, slots, or decorative patterns used for filtration, ventilation, acoustic control, and architectural applications. Moksh Tubes & Fittings LLP supplies high-quality perforated sheets in stainless steel, carbon steel, aluminium, brass, and specialty alloys. Our sheets offer uniform perforation, clean edges, and excellent durability, making them ideal for industrial, architectural, and design applications across India and global markets.
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
                PERFORATED SHEETS
            </h3>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/product/Sheets-Plates-and-Coils/sheets-Perforated.webp') }}" alt="Perforated Sheets"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4" style="text-align: justify;">
                            <strong class="text-black">Perforated Sheets</strong> are metal sheets manufactured with a pattern of holes, slots, or custom designs using advanced punching or stamping processes. These sheets serve both functional and aesthetic purposes, providing airflow, filtration, sound control, and visual appeal.
                        </p>

                        <p class="fs-6 mb-4" style="text-align: justify;">
                            They are widely used in industries such as construction, architecture, automotive, HVAC, and manufacturing. With various hole patterns and materials available, perforated sheets can be tailored for specific performance and design requirements.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            At <strong style="color:black;"><a href="{{ url('/contact-us') }}">Moksh Tubes & Fittings LLP</a></strong>, we supply premium-quality perforated sheets with precise hole patterns, uniform spacing, and high-quality finishes. Our products comply with international standards and are suitable for both industrial and decorative applications.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Perforated Sheets Datasheet</h3>
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
                <h2>Specifications of Perforated Sheets</h2>
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
                                <tr class="t-row"><td>Material</td><td>Stainless Steel, Carbon Steel, Aluminium, Brass, Copper, Titanium</td></tr>
                                <tr class="t-row"><td>Grades</td><td>ASTM / ASME / EN / IS compliant</td></tr>
                                <tr class="t-row"><td>Thickness</td><td>0.3 mm to 12 mm</td></tr>
                                <tr class="t-row"><td>Sheet Size</td><td>1000×2000 mm, 1220×2440 mm, 1500×3000 mm</td></tr>
                                <tr class="t-row"><td>Hole Patterns</td><td>Round, Square, Slotted, Hexagonal, Decorative</td></tr>
                                <tr class="t-row"><td>Hole Size</td><td>0.5 mm to 50 mm</td></tr>
                                <tr class="t-row"><td>Finishes</td><td>Mill Finish, Polished, Anodized, Powder Coated</td></tr>
                                <tr class="t-row"><td>Standards</td><td>ASTM A240, A480, EN 10088, IS 6911</td></tr>
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
                                <tr class="t-row"><td>Stainless Steel</td><td>0.4 – 12</td></tr>
                                <tr class="t-row"><td>Carbon Steel</td><td>0.5 – 10</td></tr>
                                <tr class="t-row"><td>Aluminium</td><td>0.4 – 8</td></tr>
                                <tr class="t-row"><td>Brass / Copper</td><td>0.4 – 6</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <h4 class="text-center mb-3" style="color: #db7227;">Standard Sheet Sizes</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row"><th>Size (mm)</th></tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>1000 × 2000</td></tr>
                                <tr class="t-row"><td>1250 × 2500</td></tr>
                                <tr class="t-row"><td>1500 × 3000</td></tr>
                                <tr class="t-row"><td>2000 × 4000</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <h4 class="text-center mb-3" style="color: #db7227;">Common Hole Patterns</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row"><th>Type</th><th>Description</th></tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>Round</td><td>Most common for ventilation</td></tr>
                                <tr class="t-row"><td>Square</td><td>High open area</td></tr>
                                <tr class="t-row"><td>Slotted</td><td>Drainage & screening</td></tr>
                                <tr class="t-row"><td>Decorative</td><td>Hexagonal, custom designs</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <h4 class="text-center mb-3" style="color: #db7227;">Hole Size & Open Area</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row"><th>Hole Size</th><th>Pitch</th><th>Open Area</th></tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>2 mm</td><td>3 mm</td><td>40%</td></tr>
                                <tr class="t-row"><td>5 mm</td><td>8 mm</td><td>36%</td></tr>
                                <tr class="t-row"><td>10 mm</td><td>15 mm</td><td>44%</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <h4 class="text-center mb-3" style="color: #db7227;">Weight Reduction (Example – MS)</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row"><th>Thickness</th><th>Plain</th><th>30% OA</th><th>50% OA</th></tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>1 mm</td><td>7.85</td><td>5.49</td><td>3.92</td></tr>
                                <tr class="t-row"><td>2 mm</td><td>15.7</td><td>10.99</td><td>7.85</td></tr>
                                <tr class="t-row"><td>5 mm</td><td>39.25</td><td>27.47</td><td>19.62</td></tr>
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
                        <p>304 / 304L<br>316 / 316L<br>321</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear"></i></div>
                        <h5>Carbon & Mild Steel</h5>
                        <p>ASTM A36, IS 2062</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-box"></i></div>
                        <h5>Aluminium</h5>
                        <p>1100, 3003, 5052, 6061</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-lightbulb"></i></div>
                        <h5>Copper & Brass</h5>
                        <p>Decorative & electrical grades</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-diamond"></i></div>
                        <h5>Titanium & Special Alloys</h5>
                        <p>High-performance applications</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="types" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Types of Perforated Sheets</h2>
            </div>
            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-md-6 col-lg-3">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-record-circle"></i></div>
                        <h5>Round Hole Perforated Sheets</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-square"></i></div>
                        <h5>Square Hole Perforated Sheets</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-distribute-vertical"></i></div>
                        <h5>Slotted Hole Sheets</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-hexagon"></i></div>
                        <h5>Hexagonal & Decorative Sheets</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Perforated Sheets</h2>
            </div>

            <div class="row g-4 justify-content-center mt-4">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-building"></i></div>
                        <h5>Architecture & Interiors</h5>
                        <p>✔ Facades & cladding<br>✔ Decorative panels<br>✔ Sunshades</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Industrial Applications</h5>
                        <p>✔ Filters & sieves<br>✔ Machine guards</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cup-straw"></i></div>
                        <h5>Food & Pharma</h5>
                        <p>✔ Hygienic trays & baskets<br>✔ Filtration systems</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-car-front"></i></div>
                        <h5>Automotive & Transport</h5>
                        <p>✔ Grilles & covers<br>✔ Soundproofing panels</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-volume-mute"></i></div>
                        <h5>Acoustics & Noise Control</h5>
                        <p>✔ Acoustic panels<br>✔ Sound barriers</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fan"></i></div>
                        <h5>HVAC & Ventilation</h5>
                        <p>✔ Air diffusers<br>✔ Ventilation panels</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="uses" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Uses & Advantages of Perforated Sheets</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-bezier"></i></div>
                        <h5>Versatile Applications</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-lock"></i></div>
                        <h5>Lightweight & Strong</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-piggy-bank"></i></div>
                        <h5>Cost-Effective</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-brush"></i></div>
                        <h5>Customizable Designs</h5>
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
                        <div class="advantage-icon"><i class="bi bi-patch-check"></i></div>
                        <h5>Standard Compliance</h5>
                    </div>
                </div>
            </div>
            
            <p class="text-center mt-4">
                <strong>Uses:</strong> Improves airflow & ventilation | Provides filtration & screening | Enhances architectural aesthetics | Reduces noise levels | Lightweight structural solution
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
                        <p class="fs-6" style="text-align: justify;"><strong>Manufacturing Process of Perforated Sheets:</strong></p>
                        <p>Sheet selection</p>
                        <p>CNC punching / perforation</p>
                        <p>Pattern alignment</p>
                        <p>Surface finishing</p>
                        <p>Inspection & packaging</p>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6" style="text-align: justify;"><strong>Testing & Quality Control:</strong></p>
                        <p>Each Perforated Sheet undergoes strict inspection including:</p>
                        <p>✔ Hole accuracy testing</p>
                        <p>✔ Thickness inspection</p>
                        <p>✔ Surface quality check</p>
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
                        <p><strong>Thickness:</strong> ±10%</p>
                        <p><strong>Hole accuracy:</strong> ±0.05 mm</p>
                        <p><strong>Sheet size:</strong> ±5 mm</p>
                        <p><strong>Flatness:</strong> As per standard</p>
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
                        <div class="why-banner-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Precision perforation technology</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-layers"></i></div>
                        <h5>Wide material range</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-brush"></i></div>
                        <h5>Custom design capability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Fast delivery</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Global supply</h5>
                    </div>
                </div>
            </div>

            <div class="row mt-5 justify-content-center text-start">
                <div class="col-lg-8">
                    <div class="p-4 rounded shadow-sm bg-white border">
                        <h4 class="mb-3 text-center" style="color: #db7227;">Buying Guide – Perforated Sheets</h4>
                        <p class="mb-2"><strong>Before selecting:</strong></p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Material type</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Thickness & strength</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Hole size & pattern</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Open area requirement</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Application (industrial / decorative)</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Finish type</li>
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
                                <h4>Q1. What are perforated sheets?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Metal sheets with punched holes for filtration and design.</p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Q2. What materials are available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>SS, MS, aluminium, brass, copper, titanium.</p>
                            </div>
                        </div>
                        
                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Q3. What thickness range is available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>0.3 mm to 12 mm.</p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Q4. What are common uses?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Ventilation, filtration, acoustic panels, design.</p>
                            </div>
                        </div>
                        
                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Q5. Can patterns be customized?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Yes, fully customizable designs available.</p>
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
                    Looking for high-quality perforated sheets?<br>
                    📞 Contact Moksh Tubes & Fittings LLP at +91 97695 84950<br>
                    We supply precision perforated sheets for industrial and architectural applications.
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
            "name": "Perforated Sheets | Stainless Steel & Decorative Metal Sheets",
            "description": "Buy perforated sheets in SS, aluminium & steel. Custom hole patterns, sizes & finishes for industrial & architectural use.",
            "brand": {
                "@type": "Brand",
                "name": "Moksh Tubes & Fittings LLP"
            },
            "manufacturer": {
                "@type": "Organization",
                "name": "Moksh Tubes & Fittings LLP"
            },
            "material": "Stainless Steel, Carbon Steel, Aluminium, Brass, Copper, Titanium",
            "url": "https://www.mokshtubes.com/perforated-sheets",
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
                "name": "Q1. What are perforated sheets?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "Metal sheets with punched holes for filtration and design."
                }
            },{
                "@type": "Question",
                "name": "Q2. What materials are available?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "SS, MS, aluminium, brass, copper, titanium."
                }
            },{
                "@type": "Question",
                "name": "Q3. What thickness range is available?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "0.3 mm to 12 mm."
                }
            },{
                "@type": "Question",
                "name": "Q4. What are common uses?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "Ventilation, filtration, acoustic panels, design."
                }
            },{
                "@type": "Question",
                "name": "Q5. Can patterns be customized?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, fully customizable designs available."
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
                "name": "Perforated Sheets",
                "item": "https://www.mokshtubes.com/perforated-sheets"
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
