@extends('layouts.master')
@section('title', 'Hex Nuts, Heavy Hex & Specialized Nuts | India & GCC')
<!-- 52 characters -->
@section('meta_description',
    'High-strength Nuts including Hex Nuts, Heavy Hex Nuts, and Lock Nuts for industrial, pipeline, and heavy machinery applications. Wide range of materials available.')
@section('meta_keywords',
    'Nuts, Hex Nuts, Heavy Hex Nuts, Lock Nuts, Fasteners, Stainless Steel Nuts, High Strength Nuts')
@section('og_image', asset('assets/images/product/flangs/FASTENERS.webp'))
@section('og_type', 'product')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/product/flangs/FASTENERS.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1 class="page-title">Industrial Nuts (Hex, Heavy Hex, Nyloc & Flange Nuts)</h1>
                        <p class="text-center mt-3 px-3 py-2 text-white position-relative" style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Industrial Nuts are critical fasteners engineered to provide secure, high-tension clamping force when paired with bolts and studs in high-temperature, high-pressure, and corrosive environments. At <a href="{{ route('index') }}" class="text-white text-decoration-underline">Moksh Tubes & Fittings LLP</a>, we supply precision-manufactured nuts in carbon steel, alloy steel, stainless steel, duplex, nickel alloys, and titanium grades—fully compliant with ASTM, ASME, DIN, and EN standards.  
                    </p>
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
            <a href="#chemical-composition">Chemical</a> |
            <a href="#mechanical-properties">Mechanical</a> |
            <a href="#applications">Applications</a> |
            <a href="#industries">Industries</a> |
            <a href="#manufacturing">Manufacturing</a> |
            <a href="#export">Export</a> |
            <a href="#buying-guide">Buying Guide</a> |
            <a href="#faq">FAQ</a>
        </div>
    </div>

    <section id="overview" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Industrial Nuts</h2>
            </div>

            <div class="row align-items-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('/assets/images/product/flangs/FASTENERS.webp') }}"
                        alt="Industrial Nuts" class="img-fluid rounded shadow-sm" width="550"
                        height="350" loading="lazy">
                </div>

                <div class="col-md-6">
                    <p class="fs-6 mb-3 text-justify">
                        <strong class="text-black">Industrial Nuts</strong> are internally threaded fastening
                        components designed to mate with bolts, screws, and studs to secure joints securely. Under vibration or high-stress environments, selecting the right nut—whether a standard Hex Nut, Heavy Hex Nut, or Lock Nut—is critical for safety and operational integrity.
                    </p>

                    <p class="fs-6 mb-3 text-justify">
                        <a href="{{ route('index') }}">Moksh Tubes & Fittings LLP</a> is a trusted manufacturer,
                        supplier, and exporter of Nuts in India, supplying premium-quality fasteners
                        conforming to ASTM A194, ASTM F594, and DIN standards. Our products are widely
                        supplied to <a href="{{ route('materials.austenitic-stainless-Steel') }}">Indian projects</a> and
                        Gulf / GCC countries including UAE, Saudi Arabia, Qatar, Oman, and Kuwait.
                    </p>

                    <p class="fs-6 text-justify">
                        Manufactured using advanced hot forging and precision tapping processes, our nuts offer
                        excellent thread strength, corrosion resistance, dimensional accuracy, and long
                        service life, even in extreme industrial applications.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Nuts Datasheet</h3>
            <p class="mb-3">
                Get the complete datasheet with chemical composition, mechanical properties, thread details, and
                application guidelines.
                Enter your email below to receive the PDF instantly.
            </p>

            <form id="leadForm" method="POST" action="https://mokshtubes.com/datasheet-leads-capture" class="mb-3">
                <input type="hidden" name="_token" value="WNVWvpO4YR2OqZaIJDl2mE3UfyreGys3Vp19brsc" autocomplete="off">
                <div class="row justify-content-center">
                    <input type="hidden" name="pdf" value="nuts-datasheet.pdf">
                    <div class="col-md-6 mb-2">
                        <input type="email" name="email" required="" class="form-control p-3"
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
            <hr class="my-4">
            <p class="small text-muted">We respect your privacy. Your email will only be used to send the datasheet.</p>
        </div>
    </section>
    
    <section id="specifications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>SPECIFICATIONS</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Category</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody class="text-start">
                                <tr class="t-row">
                                    <td>Material</td>
                                    <td><a href="{{ route('materials.austenitic-stainless-Steel') }}">Stainless Steel</a>,
                                        <a href="{{ route('materials.duplex-and-super-duplex') }}">Duplex & Super Duplex</a>, 
                                        <a href="{{ route('materials.nickel-Based-Superalloys') }}">Nickel Alloys</a>, 
                                        <a href="{{ route('materials.titanium') }}">Titanium</a>, Alloy Steel, Carbon Steel
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Grades</td>
                                    <td>ASTM A194 (2H, 8, 8M, 4, 7), ASTM F594, DIN 934, DIN 6915</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Size Range</td>
                                    <td>M6 to M100 | 1/4" to 4" (Custom sizes available)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Thread Type</td>
                                    <td>Metric (Coarse/Fine), UNC, UNF, BSW</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Finishes</td>
                                    <td>Zinc Plated, PTFE Coated, Hot Dip Galvanized, Black Oxide, Plain</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Types</td>
                                    <td>Hex Nuts, Heavy Hex Nuts, Lock Nuts (Nyloc), Flange Nuts, Dome Nuts</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Standards</td>
                                    <td>DIN 934, DIN 936, ASME B18.2.2, IS 1364</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Applications</td>
                                    <td>Pipeline flanges, structural steelworks, valves, pumps, automotive</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <!-- charts -->
    <section id="size-chart" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Charts</h2>
            </div>
            <div class="section-title center mb-3">
                <h3 class="text-center mb-0" style="color: #db7227;">Size Chart</h3>
                <h4 class="text-center mb-0" style="color: #db7227;">Standard Metric Hex Nuts Dimensions (DIN 934)</h4>
            </div>
            
            <div class="table-responsive mt-4">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr class="t-row">
                            <th>Nominal Size (d)</th>
                            <th>Pitch (mm)</th>
                            <th>Width Across Flats (s) - mm</th>
                            <th>Width Across Corners (e) - mm</th>
                            <th>Thickness (m) - mm</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row"><td>M6</td><td>1.0</td><td>10.0</td><td>11.05</td><td>5.0</td></tr>
                        <tr class="t-row"><td>M8</td><td>1.25</td><td>13.0</td><td>14.38</td><td>6.5</td></tr>
                        <tr class="t-row"><td>M10</td><td>1.5</td><td>17.0</td><td>18.90</td><td>8.0</td></tr>
                        <tr class="t-row"><td>M12</td><td>1.75</td><td>19.0</td><td>21.10</td><td>10.0</td></tr>
                        <tr class="t-row"><td>M16</td><td>2.0</td><td>24.0</td><td>26.75</td><td>13.0</td></tr>
                        <tr class="t-row"><td>M20</td><td>2.5</td><td>30.0</td><td>32.95</td><td>16.0</td></tr>
                        <tr class="t-row"><td>M24</td><td>3.0</td><td>36.0</td><td>39.55</td><td>19.0</td></tr>
                        <tr class="t-row"><td>M30</td><td>3.5</td><td>46.0</td><td>50.85</td><td>24.0</td></tr>
                        <tr class="t-row"><td>M36</td><td>4.0</td><td>55.0</td><td>60.79</td><td>29.0</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    {{-- Grades Available --}}
    <section id="chemical-composition" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Available Grades & Materials</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Material</th>
                                    <th>Grades</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td><a href="{{ route('materials.austenitic-stainless-Steel') }}">Stainless Steel</a></td>
                                    <td>ASTM A194 Gr. 8 (304), 8M (316), 8T (321)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Alloy / Carbon Steel</td>
                                    <td>ASTM A194 Gr. 2H, Gr. 4, Gr. 7</td>
                                </tr>
                                <tr class="t-row">
                                    <td><a href="{{ route('materials.duplex-and-super-duplex') }}">Duplex Steel</a></td>
                                    <td>UNS S31803 (F51), UNS S32750 (F53)</td>
                                </tr>
                                <tr class="t-row">
                                    <td><a href="{{ route('materials.nickel-Based-Superalloys') }}">Nickel Alloys</a></td>
                                    <td>Inconel 718, Inconel 625, Monel 400, Hastelloy C276</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Titanium</td>
                                    <td><a href="{{ route('materials.titanium') }}">Grades 2, 5</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Gallery --}}
    <section class="our-services">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.nickel-Based-Superalloys') }}">
                                <img class="w-100" src="{{ asset('assets/images/product/NICKLE-ALLOYS.webp') }}"
                                    alt="Nickel alloy nuts" loading="lazy" width="400" height="260">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0">NICKEL ALLOYS</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.austenitic-stainless-Steel') }}">
                                <img class="w-100" src="{{ asset('assets/images/product/STAINLESS-STEEL.webp') }}"
                                    alt="Stainless steel nuts" loading="lazy" width="400" height="260">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0">STAINLESS STEEL</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.duplex-and-super-duplex') }}">
                                <img class="w-100" src="{{ asset('assets/images/product/DUPLEX-SUPER.webp') }}"
                                    alt="Duplex and super duplex nuts" loading="lazy" width="400" height="260">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0">DUPLEX & SUPER</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Applications --}}
    <section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Industrial Nuts</h2>
            </div>
            <div class="row g-4 mt-4">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Oil & Gas Flanges</h5>
                        <ul><li>Securing pipeline flanges using Heavy Hex Nuts</li></ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Power Generation</h5>
                        <ul><li>Turbine casings, boiler mountings</li></ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-building"></i></div>
                        <h5>Construction</h5>
                        <ul><li>Structural steel joints and anchoring</li></ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Industries We Serve --}}
    <!-- Buying Guide Section -->
    <section id="buying-guide" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Buying Guide:</h2>
                <h4 style="color: #db7227;">How to Select the Right Nuts</h4>
            </div>
            <div class="row g-4 mt-4">
                <div class="col-md-12">
                    <div class="application-card">
                        <div class="table-responsive mt-3">
                            <table class="table table-bordered">
                                <thead class="table-light">
                                    <tr class="t-row"><th>Material/Grade</th><th>Ideal For</th></tr>
                                </thead>
                                <tbody>
                                    <tr class="t-row"><td>ASTM A194 2H</td><td>High-temperature heavy hex applications, paired with B7 studs</td></tr>
                                    <tr class="t-row"><td>ASTM A194 Gr. 8 (SS304)</td><td>Corrosive environments, paired with B8 studs</td></tr>
                                    <tr class="t-row"><td>Nyloc Nuts</td><td>Vibrating machinery where standard nuts may loosen</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Engineering Diagrams</h2>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-md-6 center">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-diagram-3"></i></div>
                        <img class="w-100" src="{{ asset('/assets/images/fasteners/hex-nuts.png') }}" alt="Nuts layout diagram" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Uses --}}
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Uses of Nuts</h2>
            </div>
            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4"><div class="advantage-card"><h4>Flange Fastening</h4><h5>Clamping pipeline flanges securely.</h5></div></div>
                <div class="col-sm-6 col-lg-4"><div class="advantage-card"><h4>Vibration Damping</h4><h5>Lock nuts prevent loosening.</h5></div></div>
                <div class="col-sm-6 col-lg-4"><div class="advantage-card"><h4>Structural Joints</h4><h5>Connecting steel beams and columns.</h5></div></div>
            </div>
        </div>
    </section>
    
    {{-- Advantages --}}
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Advantages </h2>
            </div>
            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-6"><div class="advantage-card"><h4>High Stripping Strength</h4><h5>Tapped with precision to prevent thread stripping under heavy loads.</h5></div></div>
                <div class="col-sm-6 col-lg-6"><div class="advantage-card"><h4>Versatility</h4><h5>Available in standard hex, heavy hex, and lock variants for any application.</h5></div></div>
            </div>
        </div>
    </section>

    <section id="mechanical-properties" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
             <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Mechanical Properties</h2>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr class="t-row"><th>Grade</th><th>Proof Load Stress (MPa)</th><th>Hardness (Rockwell)</th></tr>
                    </thead>
                    <tbody>
                        <tr class="t-row"><td>ASTM A194 2H</td><td>1205 (up to M36)</td><td>24 to 35 HRC</td></tr>
                        <tr class="t-row"><td>ASTM A194 Gr. 8</td><td>550</td><td>126 to 300 HBW</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section id="export" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container text-center">
             <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Exports & Supply Coverage</h2>
            </div>
            <p class="fs-5">We supply Nuts across Indian industrial hubs and export to UAE, Saudi Arabia, Qatar, Oman, and Kuwait.</p>
        </div>
    </section>

     <!-- Testing & Quality Control -->
    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Testing & Quality Control</h2>
            </div>
            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4"><div class="advantage-card"><div class="advantage-icon"><i class="bi bi-shield-shaded"></i></div><h4>Proof Load Test</h4><h5>Ensures threads won't strip under load.</h5></div></div>
                <div class="col-sm-6 col-lg-4"><div class="advantage-card"><div class="advantage-icon"><i class="bi bi-rulers"></i></div><h4>Thread Gauging</h4><h5>GO/NO-GO gauge inspection.</h5></div></div>
                <div class="col-sm-6 col-lg-4"><div class="advantage-card"><div class="advantage-icon"><i class="bi bi-check2-circle"></i></div><h4>Hardness Test</h4><h5>Verifies material strength.</h5></div></div>
            </div>
        </div>
    </section>

    {{-- why choose us --}}
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container text-center">
            <div class="section-title center">
                <h2>Why Choose Moksh Tubes?</h2>
            </div>
            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4"><div class="why-banner-block"><h5>Ready stock for fast dispatch</h5></div></div>
                <div class="col-sm-6 col-lg-4"><div class="why-banner-block"><h5>Compliance with Indian & Gulf standards</h5></div></div>
                <div class="col-sm-6 col-lg-4"><div class="why-banner-block"><h5>EN 10204 3.1 Certification</h5></div></div>
            </div>
        </div>
    </section>

    <!--Start faq content area-->
    <section id="faq" class="faq-content-area sec-padd2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="accordion-box">
                        <div class="section-title center"><h2>Frequently Asked Questions (FAQ)</h2></div>
                        <div class="accordion accordion-block"><div class="accord-btn"><h4>What is the difference between a Hex Nut and a Heavy Hex Nut?</h4></div><div class="accord-content"><p>A Heavy Hex Nut is slightly wider and thicker than a standard Hex Nut, offering a greater bearing surface and stronger hold, making it ideal for high-pressure flanges (e.g. A194 2H).</p></div></div>
                        <div class="accordion accordion-block"><div class="accord-btn"><h4>What materials are available?</h4></div><div class="accord-content"><p>Stainless Steel (304, 316), Carbon Steel, Alloy Steel (2H), Duplex, and Nickel Alloys.</p></div></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End faq content area-->

    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Contact Us</h2>
                <p>For further information, quotes, or customized fastening solutions, <strong>Moksh Tubes & Fittings LLP</strong> is your dependable partner.</p>
                <a href="javascript:void(0);" class="contact-cta-btn" data-bs-toggle="modal" data-bs-target="#contactFormModal">Get in Touch</a>
            </div>
        </div>
    </section>

@endsection

@push('styles')
    <style>
        tr.collapse { opacity: 0; transform: translateY(-6px) scale(0.98); transition: opacity .35s ease, transform .35s ease; }
        tr.collapsing { opacity: 0; transform: translateY(-10px) scale(0.96); display: table-row !important; }
        tr.collapse.show { opacity: 1; transform: translateY(0) scale(1); display: table-row; }
    </style>
@endpush

@section('jsscripts')
    @verbatim
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@graph": [
            {
              "@type": ["Organization", "LocalBusiness"],
              "@id": "https://mokshtubes.com/#organization",
              "name": "Moksh Tubes & Fittings LLP",
              "url": "https://mokshtubes.com/",
              "logo": "https://mokshtubes.com/assets/images/logo.webp",
              "telephone": "+91-9769584950",
              "email": "info@mokshtubes.com"
            },
            {
              "@type": "WebPage",
              "@id": "https://mokshtubes.com/products/fasteners/nuts#webpage",
              "name": "Industrial Nuts | Moksh Tubes & Fittings LLP",
              "url": "https://mokshtubes.com/products/fasteners/nuts",
              "description": "High-strength industrial nuts including Hex Nuts, Heavy Hex Nuts, and Lock Nuts for flanges and structural joints."
            },
            {
              "@type": ["Product"],
              "@id": "https://mokshtubes.com/#nuts",
              "name": "Industrial Nuts",
              "image": "https://mokshtubes.com/assets/images/product/flangs/FASTENERS.webp",
              "category": "Fasteners",
              "brand": { "@id": "https://mokshtubes.com/#organization" }
            }
          ]
        }
        </script>
    @endverbatim
@endsection
