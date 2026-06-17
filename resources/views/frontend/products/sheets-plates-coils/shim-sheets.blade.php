@extends('layouts.master')

@section('title', 'Shim Sheets | Precision Stainless Steel & Metal Shims')
@section('meta_description', 'Buy precision shim sheets in SS, brass, copper & aluminium. Tight tolerance shims for industrial, automotive & aerospace use.')
@section('meta_keywords', 'Shim Sheets, metal shim sheets, precision shims, stainless steel shims, brass shim sheets, industrial shims')
@section('og_image', asset('assets/images/product/Sheets-Plates-and-Coils/Shim-Sheets.webp'))
@section('og_type', 'article')


@section('content')


    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url('{{ asset('assets/images/product/Sheets-Plates-and-Coils/Shim-Sheets.webp') }}');">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Shim Sheets<br>Precision Stainless Steel, Brass, Copper & Alloy Shim Sheets</h1>

                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Shim Sheets are ultra-thin precision metal sheets used for alignment, spacing, and leveling in industrial and engineering applications. Moksh Tubes & Fittings LLP supplies high-quality shim sheets in stainless steel, carbon steel, brass, copper, aluminium, and specialty alloys. Manufactured with tight tolerances and excellent surface finishes, our shim sheets are ideal for automotive, aerospace, industrial machinery, and precision engineering applications across India and global markets.
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
                SHIM SHEETS
            </h3>

            <h3 class="fw-semibold text-center mb-5" style="color: #db7227;">
                SHIM SHEETS
            </h3>

            <div class="row align-items-center">
                <!-- Image Left -->
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/product/Sheets-Plates-and-Coils/Shim-Sheets.webp') }}" alt="Shim Sheets"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4" style="text-align: justify;">
                            <strong class="text-black">Shim Sheets</strong> are thin metal sheets specifically designed for precision alignment, spacing, and tolerance adjustments in mechanical and structural systems. These sheets are manufactured with highly accurate thicknesses to ensure proper fitment in critical applications.
                        </p>

                        <p class="fs-6 mb-4" style="text-align: justify;">
                            Shim sheets play a vital role in industries such as automotive, aerospace, heavy machinery, and tool manufacturing, where even minor misalignment can affect performance and safety.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            At <strong style="color:black;"><a href="{{ url('/contact-us') }}">Moksh Tubes & Fittings LLP</a></strong>, we supply premium-quality shim sheets in a wide range of materials, thicknesses, and finishes. Our products comply with ASTM, ASME, DIN, EN, and JIS standards, ensuring consistent quality and reliability for precision applications.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Shim Sheets Datasheet</h3>
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
    <section id="specifications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Specifications of Shim Sheets</h2>
                <h2>Specifications of Shim Sheets</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
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
                                <tr class="t-row"><td>Material</td><td>Stainless Steel, Carbon Steel, Brass, Copper, Aluminium, Nickel Alloys, Titanium</td></tr>
                                <tr class="t-row"><td>Grades</td><td>ASTM / ASME / DIN / EN / IS compliant</td></tr>
                                <tr class="t-row"><td>Thickness</td><td>0.02 mm to 3 mm</td></tr>
                                <tr class="t-row"><td>Width</td><td>150 mm to 1000 mm</td></tr>
                                <tr class="t-row"><td>Length</td><td>500 mm to 2000 mm or coil form</td></tr>
                                <tr class="t-row"><td>Finishes</td><td>Cold Rolled, 2B, BA, Matte, Mirror, PVC Coated</td></tr>
                                <tr class="t-row"><td>Types</td><td>Shim Sheets, Shim Coils, Pre-cut Shim Packs</td></tr>
                                <tr class="t-row"><td>Standards</td><td>ASTM A240, A666, EN 10151, IS 6911</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="size-weight" class="sec-padd-top sec-padd-bottom bg-light">
    <section id="size-weight" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Size & Weight Charts</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-6 mb-4">
                    <h4 class="text-center mb-3" style="color: #db7227;">Thickness Tolerance Chart</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row"><th>Thickness (mm)</th><th>Tolerance</th></tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>0.02 – 0.05</td><td>±0.005</td></tr>
                                <tr class="t-row"><td>0.05 – 0.10</td><td>±0.008</td></tr>
                                <tr class="t-row"><td>0.10 – 0.25</td><td>±0.010</td></tr>
                                <tr class="t-row"><td>0.25 – 0.50</td><td>±0.015</td></tr>
                                <tr class="t-row"><td>0.50 – 1.00</td><td>±0.020</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <h4 class="text-center mb-3" style="color: #db7227;">Standard Sheet Sizes</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row"><th>Size (mm)</th><th>Size (inch)</th></tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>300 × 300</td><td>12” × 12”</td></tr>
                                <tr class="t-row"><td>600 × 600</td><td>24” × 24”</td></tr>
                                <tr class="t-row"><td>1000 × 1000</td><td>39” × 39”</td></tr>
                                <tr class="t-row"><td>Custom</td><td>As required</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <h4 class="text-center mb-3" style="color: #db7227;">Material Thickness Range</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row"><th>Material</th><th>Thickness (mm)</th></tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>Stainless Steel</td><td>0.02 – 3.0</td></tr>
                                <tr class="t-row"><td>Brass</td><td>0.05 – 2.0</td></tr>
                                <tr class="t-row"><td>Copper</td><td>0.05 – 1.5</td></tr>
                                <tr class="t-row"><td>Aluminium</td><td>0.05 – 2.0</td></tr>
                                <tr class="t-row"><td>Carbon Steel</td><td>0.10 – 3.0</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <h4 class="text-center mb-3" style="color: #db7227;">Shim Sheet Weight Chart (kg/m²)</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row"><th>Thickness</th><th>SS</th><th>MS</th><th>Aluminium</th><th>Copper</th></tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>0.5 mm</td><td>3.965</td><td>3.925</td><td>1.35</td><td>4.47</td></tr>
                                <tr class="t-row"><td>1.0 mm</td><td>7.93</td><td>7.85</td><td>2.70</td><td>8.94</td></tr>
                                <tr class="t-row"><td>2.0 mm</td><td>15.86</td><td>15.70</td><td>5.40</td><td>17.88</td></tr>
                                <tr class="t-row"><td>3.0 mm</td><td>23.79</td><td>23.55</td><td>8.10</td><td>26.82</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="grades" class="sec-padd-top sec-padd-bottom">
    <section id="grades" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Grades Available</h2>
            <div class="section-title center">
                <h2>Grades Available</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Stainless Steel Shims</h5>
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
                        <div class="advantage-icon"><i class="bi bi-tools"></i></div>
                        <h5>Alloy Steel</h5>
                        <p>High-performance engineering grades</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-lightbulb"></i></div>
                        <h5>Brass & Copper</h5>
                        <p>C26000, C11000</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-box"></i></div>
                        <h5>Aluminium</h5>
                        <p>1100, 5052</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-diamond"></i></div>
                        <h5>Nickel & Titanium</h5>
                        <p>Inconel, Monel, Titanium</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="applications" class="sec-padd-top sec-padd-bottom bg-light">
    <section id="applications" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Shim Sheets</h2>
                <h2>Applications of Shim Sheets</h2>
            </div>

            <div class="row g-4 justify-content-center mt-4">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-car-front"></i></div>
                        <h5>Automotive Industry</h5>
                        <p>✔ Engine alignment<br>✔ Gearbox spacing<br>✔ Brake systems</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-airplane"></i></div>
                        <h5>Aerospace & Aviation</h5>
                        <p>✔ Aircraft component alignment<br>✔ Turbine spacing<br>✔ Precision instruments</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Industrial Machinery</h5>
                        <p>✔ Machine leveling<br>✔ Turbine & generator alignment<br>✔ Maintenance adjustments</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-building"></i></div>
                        <h5>Construction & Engineering</h5>
                        <p>✔ Structural alignment<br>✔ Equipment installation</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-water"></i></div>
                        <h5>Marine & Offshore</h5>
                        <p>✔ Engine alignment<br>✔ Deck machinery</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning"></i></div>
                        <h5>Electrical & Electronics</h5>
                        <p>✔ Transformers & motors<br>✔ Precision instruments</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-tools"></i></div>
                        <h5>Tool & Die Industry</h5>
                        <p>✔ Die adjustments<br>✔ Tool setup</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="uses" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Uses & Advantages of Shim Sheets</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-rulers"></i></div>
                        <h5>Ultra-Precise Thickness</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-layers"></i></div>
                        <h5>Wide Material Options</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-scissors"></i></div>
                        <h5>Easy Customization</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Corrosion & Heat Resistance</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-clock-history"></i></div>
                        <h5>Time-Saving Maintenance</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-piggy-bank"></i></div>
                        <h5>Cost-Effective Solution</h5>
                    </div>
                </div>
            </div>
            
            <p class="text-center mt-4">
                <strong>Uses:</strong> Precision alignment & leveling | Spacing & tolerance adjustment | Reduces vibration & wear | Quick maintenance solution | Custom fabrication use
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
                        <p class="fs-6" style="text-align: justify;"><strong>Manufacturing Process of Shim Sheets:</strong></p>
                        <p>Cold rolling for precision thickness</p>
                        <p>Slitting & cutting</p>
                        <p>Surface finishing</p>
                        <p>Annealing (if required)</p>
                        <p>Inspection & packaging</p>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6" style="text-align: justify;"><strong>Testing & Quality Control:</strong></p>
                        <p>Each Shim Sheet undergoes strict inspection including:</p>
                        <p>✔ Thickness measurement</p>
                        <p>✔ Dimensional inspection</p>
                        <p>✔ Surface finish inspection</p>
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
                                    <th>Yield Strength (MPa)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>SS 304</td><td>215 – 250</td></tr>
                                <tr class="t-row"><td>SS 316</td><td>205 – 240</td></tr>
                                <tr class="t-row"><td>Brass</td><td>120 – 200</td></tr>
                                <tr class="t-row"><td>Copper</td><td>70 – 140</td></tr>
                                <tr class="t-row"><td>Aluminium</td><td>35 – 100</td></tr>
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
                        <p><strong>Thickness:</strong> As per tolerance chart</p>
                        <p><strong>Width:</strong> ±0.1 mm to ±0.5 mm</p>
                        <p><strong>Length:</strong> ±5 mm</p>
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

    <section id="why-choose-us" class="sec-padd-top sec-padd-bottom">
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
                        <div class="why-banner-icon"><i class="bi bi-rulers"></i></div>
                        <h5>Precision manufacturing</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-tools"></i></div>
                        <h5>Custom shim solutions</h5>
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
                        <h5>Global supply capability</h5>
                    </div>
                </div>
            </div>

            <div class="row mt-5 justify-content-center text-start">
                <div class="col-lg-8">
                    <div class="p-4 rounded shadow-sm bg-light border">
                        <h4 class="mb-3 text-center" style="color: #db7227;">Buying Guide – Shim Sheets</h4>
                        <p class="mb-2"><strong>Before selecting shim sheets:</strong></p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Required thickness accuracy</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Material type</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Application (industrial / precision)</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Sheet vs coil format</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Corrosion resistance requirement</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Standards compliance</li>
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
                            <h2>Frequently Asked Questions (FAQ)</h2>
                        </div>

                        <!-- Q1 -->
                        <!-- Q1 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Q1. What are shim sheets?</h4>
                                <h4>Q1. What are shim sheets?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Thin metal sheets used for precision alignment and spacing.</p>
                                <p>Thin metal sheets used for precision alignment and spacing.</p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Q2. What materials are available?</h4>
                                <h4>Q2. What materials are available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>SS, brass, copper, aluminium, carbon steel, titanium.</p>
                                <p>SS, brass, copper, aluminium, carbon steel, titanium.</p>
                            </div>
                        </div>
                        
                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Q3. What thickness range is available?</h4>
                                <h4>Q3. What thickness range is available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>0.02 mm to 3 mm.</p>
                                <p>0.02 mm to 3 mm.</p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Q4. Where are shim sheets used?</h4>
                                <h4>Q4. Where are shim sheets used?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Automotive, aerospace, machinery, and tooling.</p>
                                <p>Automotive, aerospace, machinery, and tooling.</p>
                            </div>
                        </div>
                        
                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Q5. Can they be customized?</h4>
                                <h4>Q5. Can they be customized?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Yes, available in sheets, coils, and cut sizes.</p>
                                <p>Yes, available in sheets, coils, and cut sizes.</p>
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
                    Looking for precision shim sheets?<br>
                    📞 Contact Moksh Tubes & Fittings LLP at +91 97695 84950<br>
                    We supply high-accuracy shim sheets for industrial and engineering applications.
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
            "name": "Shim Sheets | Precision Stainless Steel & Metal Shims",
            "description": "Buy precision shim sheets in SS, brass, copper & aluminium. Tight tolerance shims for industrial, automotive & aerospace use.",
            "brand": {
                "@type": "Brand",
                "name": "Moksh Tubes & Fittings LLP"
            },
            "manufacturer": {
                "@type": "Organization",
                "name": "Moksh Tubes & Fittings LLP"
            },
            "material": "Stainless Steel, Brass, Copper, Aluminium, Alloy Steel",
            "url": "https://www.mokshtubes.com/shim-sheets",
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
                "name": "Q1. What are shim sheets?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "Thin metal sheets used for precision alignment and spacing."
                }
            },{
                "@type": "Question",
                "name": "Q2. What materials are available?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "SS, brass, copper, aluminium, carbon steel, titanium."
                }
            },{
                "@type": "Question",
                "name": "Q3. What thickness range is available?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "0.02 mm to 3 mm."
                }
            },{
                "@type": "Question",
                "name": "Q4. Where are shim sheets used?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "Automotive, aerospace, machinery, and tooling."
                }
            },{
                "@type": "Question",
                "name": "Q5. Can they be customized?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, available in sheets, coils, and cut sizes."
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
                "name": "Shim Sheets",
                "item": "https://www.mokshtubes.com/shim-sheets"
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
