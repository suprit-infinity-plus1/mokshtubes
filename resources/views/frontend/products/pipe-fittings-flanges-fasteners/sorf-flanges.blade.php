@extends('layouts.master')

@section('title', 'SORF Flanges Supplier UAE, Saudi | Slip-On RF Flanges Exporter')
@section('meta_description', 'SORF flanges exporter to UAE, Saudi Arabia, Qatar & Oman. Slip-on raised face flanges in SS, CS & alloy steel. Fast delivery & certified supply.')
@section('meta_keywords', 'SORF Flanges, Slip-On Raised Face Flanges, SORF Flanges Supplier, Moksh Tubes')
@section('og_image', asset('assets/images/fasteners/sorf-flanges_11zon.jpg'))
@section('og_type', 'product')
@section('content')

    <!--Start breadcrumb area (Hero Section)-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/fasteners/sorf-flanges_11zon.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>SORF Flanges <br> Supplier & Exporter</h1>
                    <!-- Short Introduction -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        SORF Flanges (Slip-On Raised Face Flanges) are widely used in <a href="{{ route('products.pipes-tubes') }}" style="color: blue; text-decoration: underline;">piping systems</a> for their <br>ease of installation, cost-effectiveness, and reliable sealing performance. These <br><a href="{{ route('products.pipe-fittings-flanges-fasteners') }}" style="color: blue; text-decoration: underline;">flanges</a> are slipped over the pipe and welded from both sides to provide a secure <br>connection.
                        At Moksh Tubes & Fittings LLP, we are a trusted SORF flange supplier and exporter, <br>delivering high-quality flanges in accordance with ASTM, ASME, ANSI, DIN, and EN <br>standards.
                    </p>
                    <!-- End extra content -->
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
            <a href="#grades">Grades</a> |
            <a href="#applications">Applications</a> |
            <a href="#industries">Industries</a> |
            <a href="#manufacturing">Manufacturing</a> |
            <a href="#export">Export</a> |
            <a href="#buying-guide">Buying Guide</a> |
            <a href="#quality">Quality</a> |
            <a href="#faq">FAQ</a>
        </div>
    </div>

    <!-- 1. Product Overview -->
    <section id="overview" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Product Overview</h2>
            </div>

            <h2 class="fw-semibold text-center mb-5" style="color: #db7227;">
                Introduction to Slip-On Raised Face Flanges
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/fasteners/sorf-flanges_11zon.jpg') }}" alt="SORF Flanges Overview"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-3 text-justify" style="text-align: justify;">
                            <strong class="text-black">Slip-On Raised Face (SORF) flanges</strong> are designed for easy installation and cost efficiency, making them ideal for general piping applications.
                        </p>

                        <p class="fs-6 mb-2">Unlike <a href="{{ route('products.pipe-fittings-flanges-fasteners.wnrf-flanges') }}" style="color: blue;">weld neck flanges</a>:</p>
                        <ul class="fs-6 mb-3 list-unstyled">
                            <li class="mb-1"><i class="bi bi-check-circle-fill text-primary"></i> <a href="{{ route('products.pipes-tubes') }}" style="color: blue;">Pipe</a> is inserted into the flange</li>
                            <li class="mb-1"><i class="bi bi-check-circle-fill text-primary"></i> Welding is done on both sides</li>
                            <li class="mb-1"><i class="bi bi-check-circle-fill text-primary"></i> Alignment is simpler and faster</li>
                        </ul>

                        <p class="fs-6 mb-2">Raised Face (RF):</p>
                        <ul class="fs-6 mb-3 list-unstyled">
                            <li class="mb-1"><i class="bi bi-check-circle-fill text-primary"></i> Provides improved sealing</li>
                            <li class="mb-1"><i class="bi bi-check-circle-fill text-primary"></i> Enhances gasket compression</li>
                            <li class="mb-1"><i class="bi bi-check-circle-fill text-primary"></i> Reduces leakage risk</li>
                        </ul>

                        <p class="fs-6 text-justify" style="text-align: justify;">
                            These flanges are commonly used in water lines, low-pressure pipelines, and general industrial systems.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. Key Features -->
    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-5">
                <h2>Key Features</h2>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card" style="min-height: 120px;">
                        <div class="advantage-icon"><i class="bi bi-arrow-repeat"></i></div>
                        <h5>Easy installation & alignment</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card" style="min-height: 120px;">
                        <div class="advantage-icon"><i class="bi bi-fast-forward-circle"></i></div>
                        <h5>Double welding for better strength</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card" style="min-height: 120px;">
                        <div class="advantage-icon"><i class="bi bi-tag-fill"></i></div>
                        <h5>Cost-effective compared to <a href="{{ route('products.pipe-fittings-flanges-fasteners.wnrf-flanges') }}" style="color: blue; text-decoration: none;">WN flanges</a></h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card" style="min-height: 120px;">
                        <div class="advantage-icon"><i class="bi bi-lock-fill"></i></div>
                        <h5>Good sealing performance (RF face)</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card" style="min-height: 120px;">
                        <div class="advantage-icon"><i class="bi bi-speedometer2"></i></div>
                        <h5>Suitable for low & medium pressure</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card" style="min-height: 120px;">
                        <div class="advantage-icon"><i class="bi bi-layers"></i></div>
                        <h5>Available in wide material range</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Specifications -->
    <section class="sec-padd-top sec-padd-bottom bg-light" id="specifications">
        <div class="container">
            <div class="section-title center">
                <h2>Specifications</h2>
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
                                    <td><strong>Type</strong></td>
                                    <td>Slip-On (SO), Raised Face (RF)</td>
                                </tr>
                                <tr class="t-row">
                                    <td><strong>Sizes</strong></td>
                                    <td>½” to 48” (DN15 to DN1200)</td>
                                </tr>
                                <tr class="t-row">
                                    <td><strong>Pressure Class</strong></td>
                                    <td>150, 300, 600, 900</td>
                                </tr>
                                <tr class="t-row">
                                    <td><strong>Material</strong></td>
                                    <td><a href="{{ route('materials.austenitic-stainless-Steel') }}" style="color: blue; text-decoration: none;">SS</a>, CS, Alloy Steel, <a href="{{ route('materials.duplex-and-super-duplex') }}" style="color: blue; text-decoration: none;">Duplex</a>, <a href="{{ route('materials.nickel-Based-Superalloys') }}" style="color: blue; text-decoration: none;">Nickel Alloys</a></td>
                                </tr>
                                <tr class="t-row">
                                    <td><strong>Standards</strong></td>
                                    <td>ASME B16.5, B16.47, DIN, EN</td>
                                </tr>
                                <tr class="t-row">
                                    <td><strong>Facing</strong></td>
                                    <td>Raised Face (RF)</td>
                                </tr>
                                <tr class="t-row">
                                    <td><strong>Finish</strong></td>
                                    <td>Machined, Coated, Pickled</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Types of Slip-On Flanges -->
    <section id="types" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2>Types of Slip-On Flanges</h2>
            </div>

            <div class="row g-4 justify-content-center pt-2">
                <div class="col-md-5 mb-4">
                    <div class="card h-100 shadow-sm border-0 border-start border-4 border-primary">
                        <div class="card-body">
                            <h4 class="card-title fw-bold text-primary"><i class="bi bi-circle-square me-2"></i>SORF (Slip-On Raised Face)</h4>
                            <p class="card-text fs-6 mt-3">Most commonly used for general <a href="{{ route('products.pipes-tubes') }}" style="color: blue; text-decoration: underline;">piping systems</a>.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 mb-4">
                    <div class="card h-100 shadow-sm border-0 border-start border-4 border-info">
                        <div class="card-body">
                            <h4 class="card-title fw-bold text-info"><i class="bi bi-dash-square me-2"></i>SOFF (Slip-On Flat Face)</h4>
                            <p class="card-text fs-6 mt-3">Used for low-pressure applications.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Size Chart -->
    <section id="size-chart" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-4">
                <h2>Size & Pressure Range</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card shadow-sm border-0">
                        <div class="card-body p-4 text-center">
                            <div class="row g-4">
                                <div class="col-md-4">
                                    <h5 class="fw-bold text-primary">Pressure Class</h5>
                                    <p class="fs-6 mb-0">Class 150 to 900</p>
                                </div>
                                <div class="col-md-4">
                                    <h5 class="fw-bold text-success">Size Range</h5>
                                    <p class="fs-6 mb-0">½” to 48”</p>
                                </div>
                                <div class="col-md-4">
                                    <h5 class="fw-bold text-warning">Customization</h5>
                                    <p class="fs-6 mb-0">Custom sizes & drilling available</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="text-center mt-3 text-muted">For detailed dimension charts including bolt hole patterns and weights, please contact our technical team.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. Grades Available -->
    <section id="grades" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-5">
                <h2>Grades Available</h2>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Stainless Steel</h5>
                        <ul class="list-unstyled text-start mb-0 ps-3">
                            <li>• <a href="{{ route('materials.austenitic-stainless-Steel') }}" style="color: blue;">304, 304L, 316, 316L, 321</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-layers"></i></div>
                        <h5>Carbon Steel</h5>
                        <ul class="list-unstyled text-start mb-0 ps-3">
                            <li>• ASTM A105, <a href="{{ route('products.pipe-fittings-flanges-fasteners.astm-a350-lf2-flanges') }}" style="color: blue;">A350 LF2</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-heptagon-fill"></i></div>
                        <h5>Alloy Steel</h5>
                        <ul class="list-unstyled text-start mb-0 ps-3">
                            <li>• F11, F22</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-box"></i></div>
                        <h5>Duplex & Super Duplex</h5>
                        <ul class="list-unstyled text-start mb-0 ps-3">
                            <li>• <a href="{{ route('materials.duplex-and-super-duplex') }}" style="color: blue;">S31803, S32750</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-nut"></i></div>
                        <h5>Nickel Alloys</h5>
                        <ul class="list-unstyled text-start mb-0 ps-3">
                            <li>• <a href="{{ route('materials.inconel') }}" style="color: blue;">Inconel</a>, <a href="{{ route('materials.monel') }}" style="color: blue;">Monel</a>, <a href="{{ route('materials.hastelloy') }}" style="color: blue;">Hastelloy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. Applications -->
    <section id="applications" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2>Applications</h2>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-3">
                    <div class="application-card h-100">
                        <div class="application-icon"><i class="bi bi-water"></i></div>
                        <h5>Water & Plumbing Systems</h5>
                        <ul class="list-unstyled text-start mb-0 ps-3">
                            <li>• Water pipelines</li>
                            <li>• Treatment plants</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="application-card h-100">
                        <div class="application-icon"><i class="bi bi-building"></i></div>
                        <h5>Construction</h5>
                        <ul class="list-unstyled text-start mb-0 ps-3">
                            <li>• Structural piping</li>
                            <li>• Utility systems</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="application-card h-100">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Oil & Gas (Low Pressure)</h5>
                        <ul class="list-unstyled text-start mb-0 ps-3">
                            <li>• Auxiliary pipelines</li>
                            <li>• Storage systems</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="application-card h-100">
                        <div class="application-icon"><i class="bi bi-gear"></i></div>
                        <h5>Industrial Systems</h5>
                        <ul class="list-unstyled text-start mb-0 ps-3">
                            <li>• <a href="{{ route('products.pipes-tubes.welded-pipes') }}" style="color: blue;">Process piping</a></li>
                            <li>• General fabrication</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. Industries Served -->
    <section id="industries" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2>Industries Served</h2>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-lg-10">
                    <div class="d-flex flex-wrap justify-content-center gap-3">
                        <span class="badge bg-primary fs-6 py-2 px-4 shadow-sm border border-secondary"
                            style="background-color: #174268 !important;">• Water Treatment</span>
                        <span class="badge bg-primary fs-6 py-2 px-4 shadow-sm border border-secondary"
                            style="background-color: #174268 !important;">• Construction & Infrastructure</span>
                        <span class="badge bg-primary fs-6 py-2 px-4 shadow-sm border border-secondary"
                            style="background-color: #174268 !important;">• Oil & Gas</span>
                        <span class="badge bg-primary fs-6 py-2 px-4 shadow-sm border border-secondary"
                            style="background-color: #174268 !important;">• Chemical Processing</span>
                        <span class="badge bg-primary fs-6 py-2 px-4 shadow-sm border border-secondary"
                            style="background-color: #174268 !important;">• HVAC & Plumbing</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. Manufacturing Process -->
    <section id="manufacturing" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container text-center">
            <div class="section-title center mb-4">
                <h2>Manufacturing Process</h2>
            </div>
            <p class="fs-6 text-center text-success fw-bold mb-4">Ensures dimensional accuracy and sealing performance.
            </p>
            <div class="row g-4 mt-3 justify-content-center">
                <div class="col-sm-6 col-lg-2">
                    <div class="why-banner-block h-100">
                        <div class="why-banner-icon"><i class="bi bi-1-circle-fill"></i></div>
                        <h5>Forging of raw material</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="why-banner-block h-100">
                        <div class="why-banner-icon"><i class="bi bi-2-circle-fill"></i></div>
                        <h5>Machining of flange</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="why-banner-block h-100">
                        <div class="why-banner-icon"><i class="bi bi-3-circle-fill"></i></div>
                        <h5>Facing (RF surface)</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="why-banner-block h-100">
                        <div class="why-banner-icon"><i class="bi bi-4-circle-fill"></i></div>
                        <h5>Drilling & finishing</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="why-banner-block h-100">
                        <div class="why-banner-icon"><i class="bi bi-5-circle-fill"></i></div>
                        <h5>Inspection & testing</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 10. Supply & Export Capability -->
    <section id="export" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2>Supply & Export Capability</h2>
            </div>
            <p class="fs-6 text-center text-muted mb-4">
                We are a reliable SORF flange supplier and exporter, supplying globally. <br>Trusted by EPC contractors and industrial buyers.
            </p>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="p-4 bg-white rounded shadow-sm border border-light h-100">
                        <h4 class="fw-bold mb-3 text-primary border-bottom pb-2">Export Markets</h4>
                        <ul class="fs-6 list-unstyled mb-0 custom-list">
                            <li><i class="bi bi-chevron-right text-warning"></i> UAE</li>
                            <li><i class="bi bi-chevron-right text-warning"></i> Saudi Arabia</li>
                            <li><i class="bi bi-chevron-right text-warning"></i> Qatar</li>
                            <li><i class="bi bi-chevron-right text-warning"></i> Oman</li>
                            <li><i class="bi bi-chevron-right text-warning"></i> Kuwait</li>
                            <li><i class="bi bi-chevron-right text-warning"></i> Europe & Southeast Asia</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="p-4 bg-white rounded shadow-sm border border-light h-100">
                        <h4 class="fw-bold mb-3 text-success border-bottom pb-2">Export Services</h4>
                        <ul class="fs-6 list-unstyled mb-0 custom-list">
                            <li><i class="bi bi-box-seam text-success me-2"></i> Export packaging</li>
                            <li><i class="bi bi-file-earmark-check text-success me-2"></i> EN 10204 3.1 certification</li>
                            <li><i class="bi bi-geo-alt text-success me-2"></i> Third-party inspection</li>
                            <li><i class="bi bi-truck text-success me-2"></i> Bulk project supply</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 11. Advantages & 12. SORF vs WN Flanges & 13. Buying Guide -->
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="section-title mb-4">
                        <h2>Advantages</h2>
                    </div>
                    <ul class="fs-6 list-unstyled mb-5">
                        <li class="mb-3 p-3 bg-white border rounded shadow-sm"><i
                                class="bi bi-check-circle-fill text-primary me-2"></i> Easy installation reduces labor cost</li>
                        <li class="mb-3 p-3 bg-white border rounded shadow-sm"><i
                                class="bi bi-check-circle-fill text-primary me-2"></i> Lower cost than <a href="{{ route('products.pipe-fittings-flanges-fasteners.wnrf-flanges') }}" style="color: blue; text-decoration: none;">weld neck flanges</a></li>
                        <li class="mb-3 p-3 bg-white border rounded shadow-sm"><i
                                class="bi bi-check-circle-fill text-primary me-2"></i> Suitable for standard piping systems</li>
                        <li class="mb-3 p-3 bg-white border rounded shadow-sm"><i
                                class="bi bi-check-circle-fill text-primary me-2"></i> Reliable sealing with RF face</li>
                        <li class="mb-3 p-3 bg-white border rounded shadow-sm"><i
                                class="bi bi-check-circle-fill text-primary me-2"></i> Flexible for various applications</li>
                    </ul>

                    <div class="section-title mb-4">
                        <h2>SORF vs WN Flanges</h2>
                    </div>
                    <div class="table-responsive bg-white rounded shadow-sm border">
                        <table class="table table-bordered table-striped align-middle mb-0">
                            <thead class="table-dark text-center">
                                <tr>
                                    <th>Parameter</th>
                                    <th>SORF Flanges</th>
                                    <th>WN Flanges</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Cost</strong></td>
                                    <td>Lower</td>
                                    <td>Higher</td>
                                </tr>
                                <tr>
                                    <td><strong>Strength</strong></td>
                                    <td>Moderate</td>
                                    <td>Very High</td>
                                </tr>
                                <tr>
                                    <td><strong>Installation</strong></td>
                                    <td>Easy</td>
                                    <td>Complex</td>
                                </tr>
                                <tr>
                                    <td><strong>Applications</strong></td>
                                    <td>Low/Medium pressure</td>
                                    <td>High pressure</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="fs-6 mt-3 text-muted"><strong>Note:</strong> SORF is ideal for cost-effective systems, while WN is for critical applications.</p>
                </div>

                <div id="buying-guide" class="col-lg-6">
                    <div class="p-4 bg-white rounded shadow-sm border-start border-4 border-warning h-100">
                        <h3 class="fw-bold mb-4" style="color: #174268;">Buying Guide</h3>
                        <p class="fs-6 text-muted">Before selecting SORF flanges or other <a href="{{ route('products.pipe-fittings-flanges-fasteners') }}" style="color: blue; text-decoration: underline;">pipe fittings</a>, consider:</p>
                        <ul class="fs-6 list-unstyled font-weight-bold">
                            <li class="mb-2"><i class="bi bi-arrow-right text-warning me-2"></i> Check pressure class</li>
                            <li class="mb-2"><i class="bi bi-arrow-right text-warning me-2"></i> Select correct material</li>
                            <li class="mb-2"><i class="bi bi-arrow-right text-warning me-2"></i> Verify <a href="{{ route('products.pipes-tubes') }}" style="color: blue;">pipe</a> size compatibility</li>
                            <li class="mb-2"><i class="bi bi-arrow-right text-warning me-2"></i> Confirm gasket type</li>
                            <li class="mb-2"><i class="bi bi-arrow-right text-warning me-2"></i> Ensure certification</li>
                        </ul>
                        <p class="fs-6 mt-4 fw-bold p-3 bg-light rounded border text-center border-warning">We help you choose the right flange for your system.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 14. Testing & Quality Control -->
    <section id="quality" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="p-4 bg-light rounded shadow-sm border-start border-4 border-primary h-100">
                        <h3 class="fw-bold mb-4 text-center" style="color: #174268;">Testing & Quality Control</h3>
                        <div class="row">
                            <div class="col-md-4">
                                <ul class="fs-6 list-unstyled">
                                    <li class="mb-2"><i class="bi bi-tools text-primary me-2"></i> • Dimensional inspection</li>
                                    <li class="mb-2"><i class="bi bi-tools text-primary me-2"></i> • Hydro testing</li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul class="fs-6 list-unstyled">
                                    <li class="mb-2"><i class="bi bi-tools text-primary me-2"></i> • PMI testing</li>
                                    <li class="mb-2"><i class="bi bi-tools text-primary me-2"></i> • Hardness testing</li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul class="fs-6 list-unstyled">
                                    <li class="mb-2"><i class="bi bi-tools text-primary me-2"></i> • Visual inspection</li>
                                </ul>
                            </div>
                        </div>
                        <p class="fs-6 mt-4 fw-bold text-success text-center"><i class="bi bi-patch-check-fill me-2"></i> EN 10204 3.1 certification available.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 15. Why Choose Us -->
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container text-center">
            <div class="section-title center">
                <h2>Why Choose Moksh Tubes & Fittings LLP</h2>
            </div>
            <div class="row g-4 mt-3 justify-content-center">
                <div class="col-sm-6 col-lg-3">
                    <div class="why-banner-block h-100">
                        <div class="why-banner-icon"><i class="bi bi-box-seam"></i></div>
                        <h5>Ready stock availability</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="why-banner-block h-100">
                        <div class="why-banner-icon"><i class="bi bi-layers-fill"></i></div>
                        <h5>Wide material range</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="why-banner-block h-100">
                        <div class="why-banner-icon"><i class="bi bi-globe"></i></div>
                        <h5>Export expertise</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="why-banner-block h-100">
                        <div class="why-banner-icon"><i class="bi bi-tags-fill"></i></div>
                        <h5>Competitive pricing</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="why-banner-block h-100">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Fast delivery</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 16. FAQ -->
    <section id="faq" class="faq-content-area sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="accordion-box">
                        <div class="section-title center">
                            <h2>FAQ</h2>
                        </div>
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are SORF flanges used for?</h4>
                            </div>
                            <div class="accord-content">
                                <p>They are used in low to medium pressure piping systems.</p>
                            </div>
                        </div>
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What is the advantage of slip-on flange?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Easy alignment and lower cost.</p>
                            </div>
                        </div>
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Do you export SORF flanges?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Yes, we export globally including GCC countries.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 17. Strong CTA -->
    <section id="contact-us" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Request a Quote for SORF Flanges</h2>
                <p>
                    Looking for a reliable SORF flange supplier & exporter?<br>
                    Contact <a href="{{ route('contact-us') }}" style="color: blue; text-decoration: underline;"><strong>Moksh Tubes & Fittings LLP</strong></a> for bulk supply, custom sizes, and fast delivery. Get the best price today.
                </p>
                <!-- Call button -->
                <a href="javascript:void(0);" class="contact-cta-btn" data-bs-toggle="modal"
                    data-bs-target="#contactFormModal">
                    Contact Us
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
                        "name": "What are SORF flanges used for?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "They are used in low to medium pressure piping systems."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "What is the advantage of slip-on flange?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Easy alignment and lower cost."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Do you export SORF flanges?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Yes, we export globally including GCC countries."
                        }
                    }
                ]
            }
        @endverbatim
    </script>
@endsection
