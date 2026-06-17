@extends('layouts.master')

@section('title', 'Metal Coils | Stainless Steel, Carbon Steel & Aluminium Coils')
@section('meta_description', 'Buy metal coils in stainless steel, aluminium & carbon steel. Wide sizes, finishes & grades for industrial applications.')
@section('meta_keywords', 'Metal Coils, stainless steel coils, steel coils, aluminium coils, industrial coils, metal coil suppliers')
@section('og_image', asset('assets/images/product/Sheets-Plates-and-Coils/Metal-Coils.webp'))
@section('og_type', 'article')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/product/Sheets-Plates-and-Coils/Metal-Coils.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Metal Coils<br>Stainless Steel, Carbon Steel, Aluminium & Industrial Coil Products</h1>

                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Metal Coils are essential flat-rolled products used as raw material in manufacturing, construction, automotive, and industrial applications. Moksh Tubes & Fittings LLP supplies high-quality metal coils in stainless steel, carbon steel, aluminium, copper, brass, and specialty alloys. Our coils offer excellent surface finish, dimensional accuracy, and durability, making them ideal for fabrication, stamping, slitting, and forming applications across India and global markets.
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
                METAL COILS
            </h3>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/product/Sheets-Plates-and-Coils/Metal-Coils.webp') }}" alt="Metal Coils"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4" style="text-align: justify;">
                            <strong class="text-black">Metal Coils</strong> are continuous strips of metal produced through hot rolling or cold rolling processes and wound into coil form for easy transportation and processing. These coils serve as primary raw material for manufacturing sheets, strips, and fabricated components.
                        </p>

                        <p class="fs-6 mb-4" style="text-align: justify;">
                            They are widely used across industries due to their versatility, cost efficiency, and ease of handling. Coils can be further processed through slitting, cutting, stamping, and forming operations.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            At <strong style="color:black;"><a href="{{ url('/contact-us') }}">Moksh Tubes & Fittings LLP</a></strong>, we supply premium-quality metal coils in a wide range of materials, grades, thicknesses, and finishes. Our products comply with international standards such as ASTM, ASME, EN, JIS, and DIN, ensuring consistent performance and quality.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Metal Coils Datasheet</h3>
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
                <h2>Specifications of Metal Coils</h2>
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
                                <tr class="t-row"><td>Material</td><td>Stainless Steel, Carbon Steel, Mild Steel, Alloy Steel, Aluminium, Copper, Brass</td></tr>
                                <tr class="t-row"><td>Grades</td><td>ASTM / ASME / EN / JIS compliant</td></tr>
                                <tr class="t-row"><td>Thickness</td><td>0.3 mm to 20 mm</td></tr>
                                <tr class="t-row"><td>Width</td><td>10 mm to 2500 mm</td></tr>
                                <tr class="t-row"><td>Types</td><td>Hot Rolled (HRC), Cold Rolled (CRC), Galvanized (GI), Color-Coated (PPGI), Slit Coils</td></tr>
                                <tr class="t-row"><td>Finishes</td><td>No.1, 2B, BA, Matte, Mirror, PVC Coated</td></tr>
                                <tr class="t-row"><td>Standards</td><td>ASTM A240, A480, EN 10088, JIS G4304</td></tr>
                                <tr class="t-row"><td>Applications</td><td>Construction, Automotive, HVAC, Industrial</td></tr>
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
                    <h4 class="text-center mb-3" style="color: #db7227;">Coil Weight Chart (kg/m²)</h4>
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

                <div class="col-lg-6 mb-4">
                    <h4 class="text-center mb-3" style="color: #db7227;">Coil Weight for 1250 mm Width</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row"><th>Thickness</th><th>SS</th><th>MS</th></tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>1 mm</td><td>9.91</td><td>9.81</td></tr>
                                <tr class="t-row"><td>2 mm</td><td>19.83</td><td>19.63</td></tr>
                                <tr class="t-row"><td>5 mm</td><td>49.56</td><td>49.06</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <h4 class="text-center mb-3" style="color: #db7227;">Coil Weight for 1500 mm Width</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row"><th>Thickness</th><th>SS</th><th>MS</th></tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>1 mm</td><td>11.90</td><td>11.78</td></tr>
                                <tr class="t-row"><td>2 mm</td><td>23.79</td><td>23.55</td></tr>
                                <tr class="t-row"><td>5 mm</td><td>59.48</td><td>58.88</td></tr>
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
                        <p>304 / 304L<br>316 / 316L<br>321 / 347</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear"></i></div>
                        <h5>Carbon & Mild Steel</h5>
                        <p>ASTM A36, IS 2062<br>EN 10025</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-nut"></i></div>
                        <h5>Alloy Steel</h5>
                        <p>High-strength engineering grades</p>
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
                        <div class="advantage-icon"><i class="bi bi-box"></i></div>
                        <h5>Aluminium</h5>
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
            </div>
        </div>
    </section>

    <section id="types" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Types of Metal Coils</h2>
            </div>
            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-fire"></i></div>
                        <h5>Hot Rolled Coils (HRC)</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-snow"></i></div>
                        <h5>Cold Rolled Coils (CRC)</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield"></i></div>
                        <h5>Galvanized Coils (GI)</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-palette"></i></div>
                        <h5>Color-Coated Coils (PPGI)</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-scissors"></i></div>
                        <h5>Slit Coils</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Metal Coils</h2>
            </div>

            <div class="row g-4 justify-content-center mt-4">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-building"></i></div>
                        <h5>Construction & Infrastructure</h5>
                        <p>✔ Roofing & cladding<br>✔ Structural components</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-car-front"></i></div>
                        <h5>Automotive Industry</h5>
                        <p>✔ Body panels<br>✔ Structural parts</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fan"></i></div>
                        <h5>HVAC & Appliances</h5>
                        <p>✔ Air conditioners<br>✔ Refrigerators</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Industrial Fabrication</h5>
                        <p>✔ Machine components<br>✔ Conveyor systems</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-box-seam"></i></div>
                        <h5>Packaging Industry</h5>
                        <p>✔ Drums & containers</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-water"></i></div>
                        <h5>Marine & Offshore</h5>
                        <p>✔ Corrosion-resistant components</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="uses" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Uses & Advantages of Metal Coils</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-piggy-bank"></i></div>
                        <h5>Cost-Effective Production</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-bezier"></i></div>
                        <h5>High Flexibility</h5>
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
                        <div class="advantage-icon"><i class="bi bi-layers"></i></div>
                        <h5>Wide Material Availability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Durable & Reliable</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-tools"></i></div>
                        <h5>Custom Processing Options</h5>
                    </div>
                </div>
            </div>
            
            <p class="text-center mt-4">
                <strong>Uses:</strong> Raw material for sheets & strips | Used in fabrication and forming | Suitable for mass production | Easy storage and transport | Customizable into required sizes
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
                        <p class="fs-6" style="text-align: justify;"><strong>Manufacturing Process of Metal Coils:</strong></p>
                        <p>Hot or cold rolling</p>
                        <p>Coiling into rolls</p>
                        <p>Surface finishing</p>
                        <p>Slitting or cutting</p>
                        <p>Inspection & packaging</p>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6" style="text-align: justify;"><strong>Testing & Quality Control:</strong></p>
                        <p>Each Metal Coil undergoes strict inspection including:</p>
                        <p>✔ Thickness inspection</p>
                        <p>✔ Surface quality testing</p>
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
                        <p><strong>Thickness:</strong> ±0.02 mm to ±0.1 mm</p>
                        <p><strong>Width:</strong> ±0.5 mm</p>
                        <p><strong>Coil weight:</strong> As per standard</p>
                        <p><strong>Surface finish:</strong> As required</p>
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
                        <div class="why-banner-icon"><i class="bi bi-layers"></i></div>
                        <h5>Extensive stock availability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-star"></i></div>
                        <h5>Premium-grade materials</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-scissors"></i></div>
                        <h5>Custom processing services</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Reliable delivery timelines</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Global export capability</h5>
                    </div>
                </div>
            </div>

            <div class="row mt-5 justify-content-center text-start">
                <div class="col-lg-8">
                    <div class="p-4 rounded shadow-sm bg-white border">
                        <h4 class="mb-3 text-center" style="color: #db7227;">Buying Guide – Metal Coils</h4>
                        <p class="mb-2"><strong>Before selecting:</strong></p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Material type</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Thickness & width</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Coil type (HRC / CRC / GI)</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Surface finish</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Application</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Processing requirements</li>
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
                                <h4>Q1. What are metal coils?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Continuous rolled metal strips used as raw material.</p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Q2. What materials are available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>SS, MS, aluminium, copper, brass, alloys.</p>
                            </div>
                        </div>
                        
                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Q3. What thickness range is available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>0.3 mm to 20 mm.</p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Q4. What are common uses?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Sheets, strips, fabrication, automotive parts.</p>
                            </div>
                        </div>
                        
                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Q5. What types of coils are available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>HRC, CRC, GI, PPGI, slit coils.</p>
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
                    Looking for high-quality metal coils?<br>
                    📞 Contact Moksh Tubes & Fittings LLP at +91 97695 84950<br>
                    We supply precision-engineered coils for industrial and commercial applications.
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
            "name": "Metal Coils | Stainless Steel, Carbon Steel & Aluminium Coils",
            "description": "Buy metal coils in stainless steel, aluminium & carbon steel. Wide sizes, finishes & grades for industrial applications.",
            "brand": {
                "@type": "Brand",
                "name": "Moksh Tubes & Fittings LLP"
            },
            "manufacturer": {
                "@type": "Organization",
                "name": "Moksh Tubes & Fittings LLP"
            },
            "material": "Stainless Steel, Carbon Steel, Mild Steel, Alloy Steel, Aluminium, Copper, Brass",
            "url": "https://www.mokshtubes.com/metal-coils",
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
                "name": "Q1. What are metal coils?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "Continuous rolled metal strips used as raw material."
                }
            },{
                "@type": "Question",
                "name": "Q2. What materials are available?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "SS, MS, aluminium, copper, brass, alloys."
                }
            },{
                "@type": "Question",
                "name": "Q3. What thickness range is available?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "0.3 mm to 20 mm."
                }
            },{
                "@type": "Question",
                "name": "Q4. What are common uses?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "Sheets, strips, fabrication, automotive parts."
                }
            },{
                "@type": "Question",
                "name": "Q5. What types of coils are available?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "HRC, CRC, GI, PPGI, slit coils."
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
                "name": "Metal Coils",
                "item": "https://www.mokshtubes.com/metal-coils"
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
