@extends('layouts.master')

@section('title', 'Metal Strips | Stainless Steel, Aluminium & Precision Strips')
@section('meta_description', 'Buy metal strips in stainless steel, aluminium, copper & more. Precision slit strips with custom widths & thickness. India & export supply.')
@section('meta_keywords', 'Metal Strips, stainless steel strips, precision metal strips, aluminium strips, copper strips, steel strips')
@section('og_image', asset('assets/images/product/Sheets-Plates-and-Coils/Metal-Strips.webp'))
@section('og_type', 'article')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/product/Sheets-Plates-and-Coils/Metal-Strips.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Metal Strips<br>Stainless Steel, Carbon Steel, Aluminium & Precision Strip Products</h1>

                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Metal Strips are precision flat-rolled products slit from coils or sheets, widely used in industrial, automotive, electrical, and architectural applications. Moksh Tubes & Fittings LLP supplies high-quality metal strips in stainless steel, carbon steel, aluminium, copper, brass, nickel alloys, and specialty metals. Our strips are manufactured with tight tolerances, excellent surface finish, and compliance with international standards, ensuring reliability for both industrial and decorative applications across India and global markets.
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
                METAL STRIPS
            </h3>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/product/Sheets-Plates-and-Coils/Metal-Strips.webp') }}" alt="Metal Strips"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4" style="text-align: justify;">
                            <strong class="text-black">Metal Strips</strong> are narrow-width flat metal products manufactured by slitting coils or sheets into precise widths and thicknesses. These strips are widely used in engineering, fabrication, electrical, automotive, and construction industries.
                        </p>

                        <p class="fs-6 mb-4" style="text-align: justify;">
                            Due to their dimensional accuracy, flexibility, and material versatility, metal strips are essential for applications requiring precision and consistency. They are available in various finishes and can be further processed into components like clamps, springs, washers, trims, and connectors.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            At <strong style="color:black;"><a href="{{ url('/contact-us') }}">Moksh Tubes & Fittings LLP</a></strong>, we supply premium-quality metal strips in multiple materials and grades, conforming to ASTM, ASME, DIN, JIS, and EN standards. Our strips are suitable for both heavy-duty industrial use and fine decorative applications.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Metal Strips Datasheet</h3>
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
                <h2>Specifications of Metal Strips</h2>
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
                                <tr class="t-row"><td>Material</td><td>Stainless Steel, Carbon Steel, Mild Steel, Aluminium, Copper, Brass, Nickel Alloys, Titanium</td></tr>
                                <tr class="t-row"><td>Grades</td><td>ASTM / ASME / DIN / JIS / EN compliant</td></tr>
                                <tr class="t-row"><td>Thickness</td><td>0.10 mm to 6 mm</td></tr>
                                <tr class="t-row"><td>Width</td><td>5 mm to 500 mm (custom slit widths available)</td></tr>
                                <tr class="t-row"><td>Length</td><td>Coil form or cut-to-length</td></tr>
                                <tr class="t-row"><td>Finishes</td><td>2B, BA, Matte, Hairline, Mirror, PVC Coated</td></tr>
                                <tr class="t-row"><td>Types</td><td>Hot Rolled, Cold Rolled, Precision, Decorative</td></tr>
                                <tr class="t-row"><td>Standards</td><td>ASTM A240, A480, A666, EN 10088</td></tr>
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
                    <h4 class="text-center mb-3" style="color: #db7227;">Thickness Range Chart</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row"><th>Material</th><th>Thickness (mm)</th><th>Thickness (inch)</th></tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>Stainless Steel</td><td>0.10 – 6.00</td><td>0.004 – 0.236</td></tr>
                                <tr class="t-row"><td>Aluminium</td><td>0.15 – 4.00</td><td>0.006 – 0.157</td></tr>
                                <tr class="t-row"><td>Copper / Brass</td><td>0.10 – 3.00</td><td>0.004 – 0.118</td></tr>
                                <tr class="t-row"><td>Carbon Steel</td><td>0.20 – 6.00</td><td>0.008 – 0.236</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <h4 class="text-center mb-3" style="color: #db7227;">Width Range Chart</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row"><th>Type</th><th>Width (mm)</th></tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>Narrow Strips</td><td>10 – 100</td></tr>
                                <tr class="t-row"><td>Medium Strips</td><td>100 – 600</td></tr>
                                <tr class="t-row"><td>Wide Strips</td><td>600 – 1250</td></tr>
                                <tr class="t-row"><td>Custom</td><td>As required</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <h4 class="text-center mb-3" style="color: #db7227;">Thickness Tolerance Chart</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row"><th>Thickness (mm)</th><th>Tolerance</th></tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>0.10 – 0.30</td><td>±0.010</td></tr>
                                <tr class="t-row"><td>0.30 – 0.60</td><td>±0.015</td></tr>
                                <tr class="t-row"><td>0.60 – 1.00</td><td>±0.020</td></tr>
                                <tr class="t-row"><td>1.00 – 2.00</td><td>±0.030</td></tr>
                                <tr class="t-row"><td>2.00 – 6.00</td><td>±0.050</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <h4 class="text-center mb-3" style="color: #db7227;">Strip Weight Chart (Sample – per meter)</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row"><th>Thickness</th><th>SS (kg/m)</th><th>MS (kg/m)</th><th>Aluminium</th><th>Copper</th></tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>1.0 mm</td><td>0.079</td><td>0.079</td><td>0.027</td><td>0.089</td></tr>
                                <tr class="t-row"><td>2.0 mm</td><td>0.159</td><td>0.157</td><td>0.054</td><td>0.179</td></tr>
                                <tr class="t-row"><td>3.0 mm</td><td>0.238</td><td>0.236</td><td>0.081</td><td>0.268</td></tr>
                                <tr class="t-row"><td>5.0 mm</td><td>0.397</td><td>0.393</td><td>0.135</td><td>0.447</td></tr>
                            </tbody>
                        </table>
                        <p class="text-center mt-2 small text-muted">(Detailed charts available for multiple widths and materials)</p>
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
                        <h5>Stainless Steel Strips</h5>
                        <p>304 / 304L<br>316 / 316L<br>310 / 321 / 347</p>
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
                        <div class="advantage-icon"><i class="bi bi-tools"></i></div>
                        <h5>Duplex & Super Duplex</h5>
                        <p>2205, S32750</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-box"></i></div>
                        <h5>Aluminium Strips</h5>
                        <p>1100, 5052, 6061, 6063</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-lightbulb"></i></div>
                        <h5>Copper & Brass</h5>
                        <p>C11000, C26000</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-diamond"></i></div>
                        <h5>Nickel & Titanium</h5>
                        <p>Inconel, Monel, Hastelloy, Titanium</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="applications" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Metal Strips</h2>
            </div>

            <div class="row g-4 justify-content-center mt-4">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-building"></i></div>
                        <h5>Construction & Architecture</h5>
                        <p>✔ Cladding, trims, flashings<br>✔ Decorative panels & interiors</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-car-front"></i></div>
                        <h5>Automotive Industry</h5>
                        <p>✔ Exhaust systems & clamps<br>✔ Fuel lines & brackets</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Industrial & Engineering</h5>
                        <p>✔ Machine components<br>✔ Springs, washers, shims</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning"></i></div>
                        <h5>Electrical & Electronics</h5>
                        <p>✔ Bus bars & connectors<br>✔ Transformer windings</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-water"></i></div>
                        <h5>Marine & Offshore</h5>
                        <p>✔ Corrosion-resistant components<br>✔ Lightweight structures</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-house"></i></div>
                        <h5>Decorative & Consumer Goods</h5>
                        <p>✔ Furniture trims<br>✔ Interior design elements</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-box-seam"></i></div>
                        <h5>Packaging & Logistics</h5>
                        <p>✔ Steel strapping<br>✔ Binding & securing materials</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="uses" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Uses & Advantages of Metal Strips</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-bullseye"></i></div>
                        <h5>High Precision & Accuracy</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-layers"></i></div>
                        <h5>Wide Material Availability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-rulers"></i></div>
                        <h5>Customizable Dimensions</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Durable & Versatile</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-piggy-bank"></i></div>
                        <h5>Cost-Effective Usage</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-patch-check"></i></div>
                        <h5>International Standard Compliance</h5>
                    </div>
                </div>
            </div>
            
            <p class="text-center mt-4">
                <strong>Uses:</strong> Fabrication & component manufacturing | Trims and edging applications | Electrical conductivity applications | Industrial strapping & packaging | Decorative architectural use
            </p>
        </div>
    </section>

    <section id="manufacturing" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Manufacturing Process & Quality Control</h2>
            </div>
            
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6" style="text-align: justify;"><strong>Manufacturing Process of Metal Strips:</strong></p>
                        <p>Hot rolling or cold rolling</p>
                        <p>Slitting into required width</p>
                        <p>Surface finishing</p>
                        <p>Annealing (if required)</p>
                        <p>Inspection & packaging</p>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6" style="text-align: justify;"><strong>Testing & Quality Control:</strong></p>
                        <p>Each Metal Strip undergoes strict inspection including:</p>
                        <p>✔ Thickness measurement</p>
                        <p>✔ Surface inspection</p>
                        <p>✔ Dimensional accuracy testing</p>
                        <p>✔ Material certification</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="mechanical" class="sec-padd-top sec-padd-bottom">
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

    <section id="tolerances" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="row mt-4 justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-rulers"></i></div>
                        <h5>Dimensional Tolerances</h5>
                        <p><strong>Thickness tolerance:</strong> As per chart</p>
                        <p><strong>Width tolerance:</strong> ±0.1 mm to ±0.5 mm</p>
                        <p><strong>Length tolerance:</strong> ±5 mm</p>
                        <p><strong>Flatness & surface:</strong> As per standards</p>
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

    <section id="why-choose-us" class="sec-padd-top sec-padd-bottom">
        <div class="container text-center">
            <div class="section-title center">
                <h2>Why Choose Moksh Tubes & Fittings LLP?</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-layers"></i></div>
                        <h5>Wide product range</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Precision processing capability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-scissors"></i></div>
                        <h5>Custom slitting & finishing</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-box-seam"></i></div>
                        <h5>Ready stock availability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Reliable global supply</h5>
                    </div>
                </div>
            </div>

            <div class="row mt-5 justify-content-center text-start">
                <div class="col-lg-8">
                    <div class="p-4 rounded shadow-sm bg-light border">
                        <h4 class="mb-3 text-center" style="color: #db7227;">Buying Guide – Metal Strips</h4>
                        <p class="mb-2"><strong>Before selecting strips:</strong></p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Material type (SS / MS / Aluminium / Copper)</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Thickness & width requirement</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Surface finish</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Application (industrial / decorative)</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Coil vs cut length</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Standard compliance</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Start faq content area-->
    <section id="faq" class="faq-content-area sec-padd2 bg-light">
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
                                <h4>Q1. What are metal strips?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Narrow flat metal products used in various industries.</p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Q2. What materials are available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>SS, MS, aluminium, copper, brass, titanium, and more.</p>
                            </div>
                        </div>
                        
                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Q3. What sizes are available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Thickness 0.1–6 mm, width 5–500 mm.</p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Q4. What are common uses?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Electrical, automotive, construction, fabrication.</p>
                            </div>
                        </div>
                        
                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Q5. Difference between strips and sheets?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Strips are narrower and slit from coils.</p>
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
                    Looking for high-quality metal strips?<br>
                    📞 Contact Moksh Tubes & Fittings LLP at +91 97695 84950<br>
                    We supply precision-engineered metal strips for industrial and commercial applications.
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
            "name": "Metal Strips | Stainless Steel, Aluminium & Precision Strips",
            "description": "Buy metal strips in stainless steel, aluminium, copper & more. Precision slit strips with custom widths & thickness. India & export supply.",
            "brand": {
                "@type": "Brand",
                "name": "Moksh Tubes & Fittings LLP"
            },
            "manufacturer": {
                "@type": "Organization",
                "name": "Moksh Tubes & Fittings LLP"
            },
            "material": "Stainless Steel, Carbon Steel, Mild Steel, Aluminium, Copper, Brass, Nickel Alloys, Titanium",
            "url": "https://www.mokshtubes.com/metal-strips",
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
                "name": "Q1. What are metal strips?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "Narrow flat metal products used in various industries."
                }
            },{
                "@type": "Question",
                "name": "Q2. What materials are available?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "SS, MS, aluminium, copper, brass, titanium, and more."
                }
            },{
                "@type": "Question",
                "name": "Q3. What sizes are available?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "Thickness 0.1–6 mm, width 5–500 mm."
                }
            },{
                "@type": "Question",
                "name": "Q4. What are common uses?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "Electrical, automotive, construction, fabrication."
                }
            },{
                "@type": "Question",
                "name": "Q5. Difference between strips and sheets?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "Strips are narrower and slit from coils."
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
                "name": "Metal Strips",
                "item": "https://www.mokshtubes.com/metal-strips"
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
