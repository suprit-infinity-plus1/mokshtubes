@extends('layouts.master')
@section('title', 'Weldolet | Butt Weld Branch Fitting | Moksh Tubes')
<!-- 52 characters -->
@section('meta_description',
    'Premium Weldolets (Butt Weld Olets) for high-pressure 90-degree branch connections. Available in STD, XS, and Sch 160 in Stainless, Carbon, and Alloy Steel.')
@section('meta_keywords',
    'Weldolet, Butt Weld Olet, Branch Connection, MSS-SP-97, Schedule 80 Weldolet, Stainless Steel Weldolet, Carbon Steel Weldolet')
@section('og_image', asset('assets/images/product/flangs/weldolets_11zon.jpg'))
@section('og_type', 'product')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/product/flangs/weldolets_11zon.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1 class="page-title">Weldolet</h1>
                        <p class="text-center mt-3 px-3 py-2 text-white position-relative" style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        A Weldolet is the most common and versatile forged branch connection fitting. It provides a heavily reinforced, 90-degree butt-weld connection from a larger run pipe to a smaller branch pipe. Because both the run and branch sides are butt-welded, it offers the highest structural integrity and is fully radiographable (X-ray tested). At <a href="{{ route('index') }}" class="text-white text-decoration-underline">Moksh Tubes & Fittings LLP</a>, we supply premium Weldolets conforming to MSS-SP-97 in Standard (STD), Extra Strong (XS), and Schedule 160 thicknesses.
                    </p>

                </div>
            </div>
        </div>
    </section>

    <!-- Start Material Tabs -->
    <div class="sticky-top bg-white border-bottom material-tabs w-100">
        <div class="container">
            <a href="#overview">Overview</a> |
            <a href="#specifications">Specifications</a> |
            <a href="#size-weight">Dimensions</a> |
            <a href="#grades">Grades</a> |
            <a href="#applications">Applications</a> |
            <a href="#weldolet-vs-sockolet">Weldolet vs Sockolet</a> |
            <a href="#manufacturing">Manufacturing</a> |
            <a href="#mechanical">Mechanical Properties</a> |
            <a href="#tolerances">Tolerances</a> |
            <a href="#why-choose-us">Why Choose Us</a> |
            <a href="#faq">FAQ</a>
        </div>
    </div>
    <!-- End Material Tabs -->

    <section id="overview" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Weldolets</h2>
            </div>

            <div class="row align-items-center">
                <!-- Left Image -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('/assets/images/product/flangs/weldolets_11zon.jpg') }}"
                        alt="Forged Weldolets" class="img-fluid rounded shadow-sm" width="550"
                        height="350" loading="lazy">
                </div>

                <!-- Right Content -->
                <div class="col-md-6">
                    <p class="fs-6 mb-3 text-justify">
                        <strong class="text-black">Weldolets</strong> drastically reduce pipeline fabrication time compared to traditional tee fittings. The contoured base seamlessly saddles onto the main run pipe, while the beveled top allows for a full penetration butt-weld to the branch pipe. This design restores the mechanical strength lost when a hole is cut into the header.
                    </p>

                    <p class="fs-6 mb-3 text-justify">
                        <a href="{{ route('index') }}">Moksh Tubes & Fittings LLP</a> is a leading manufacturer,
                        supplier, and exporter of Weldolets in India. We cater to high-pressure piping manifolds in <a href="{{ route('materials.austenitic-stainless-Steel') }}">Indian petrochemical plants</a> and
                        major Gulf / GCC nations including UAE, Saudi Arabia, Qatar, Oman, and Kuwait.
                    </p>

                    <p class="fs-6 text-justify">
                        Manufactured through closed-die hot forging, our Weldolets are devoid of internal porosity. We supply them in Carbon Steel (A105N), Low-Temp Carbon Steel (LF2), Stainless Steel (316L), and exotic superalloys to handle the most demanding corrosive environments.
                    </p>

                </div>
            </div>
        </div>
    </section>

    {{-- datasheet --}}
    

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
                                    <td><a href="{{ route('materials.engineering-Steels') }}">Carbon Steel</a>, <a href="{{ route('materials.austenitic-stainless-Steel') }}">Stainless Steel</a>, Alloy Steel, 
                                        <a href="{{ route('materials.duplex-and-super-duplex') }}">Duplex / Super Duplex
                                            Steel</a>, <a href="{{ route('materials.nickel-Based-Superalloys') }}">Nickel
                                            Alloys</a>, <a href="{{ route('materials.titanium') }}">Titanium</a>
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Run Pipe Size (Header)</td>
                                    <td>1/2" to 36" (and larger custom consolidations)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Branch Pipe Size</td>
                                    <td>1/8" to 24" (Weldolets can handle much larger branches than Sockolets)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Wall Thickness Rating</td>
                                    <td>STD (Standard), XS (Extra Strong), Schedule 160</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Connection Type</td>
                                    <td>Base: Welded to Run Pipe | Branch: Beveled for Butt Weld (BW)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Dimensional Standards</td>
                                    <td>MSS-SP-97, ASME B16.9 (Bevel preparation B16.25)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <!-- charts -->
    <section id="size-weight" class="sec-padd-top sec-padd-bottom bg-light">

        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Dimensional Data (MSS-SP-97)</h2>
            </div>

            <div class="section-title center mb-3">
                <h3 class="text-center mb-0" style="color: #db7227;">Standard (STD) Weldolet Dimensions</h3>
            </div>
            
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr class="t-row">
                            <th>Branch Size (NPS)</th>
                            <th>Face to Run Pipe (A) (mm)</th>
                            <th>Branch OD (B) (mm)</th>
                            <th>Branch ID (C) (mm)</th>
                            <th>Approx. Weight (kg)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row"><td>1/2"</td><td>15.9</td><td>21.3</td><td>15.8</td><td>0.10</td></tr>
                        <tr class="t-row"><td>3/4"</td><td>19.1</td><td>26.7</td><td>20.9</td><td>0.15</td></tr>
                        <tr class="t-row"><td>1"</td><td>22.2</td><td>33.4</td><td>26.6</td><td>0.25</td></tr>
                        <tr class="t-row"><td>1-1/2"</td><td>33.3</td><td>48.3</td><td>40.9</td><td>0.50</td></tr>
                        <tr class="t-row"><td>2"</td><td>38.1</td><td>60.3</td><td>52.5</td><td>0.80</td></tr>
                        <tr class="t-row"><td>3"</td><td>44.5</td><td>88.9</td><td>77.9</td><td>1.60</td></tr>
                        <tr class="t-row"><td>4"</td><td>50.8</td><td>114.3</td><td>102.3</td><td>2.40</td></tr>
                        <tr class="t-row"><td>6"</td><td>60.3</td><td>168.3</td><td>154.1</td><td>5.50</td></tr>
                        <tr class="t-row"><td>8"</td><td>69.9</td><td>219.1</td><td>202.7</td><td>10.00</td></tr>
                        <tr class="t-row"><td>10"</td><td>77.8</td><td>273.0</td><td>254.5</td><td>16.50</td></tr>
                    </tbody>
                </table>
            </div>
            <p class="text-center mt-2 small text-muted">*Dimensions based on MSS-SP-97. The branch is beveled to a 37.5° angle per ASME B16.25 for full penetration butt welding.</p>
        </div>
    </section>

    

    {{-- Grades Available --}}
    <section id="grades" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Available Forged Grades & Materials</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Material Type</th>
                                    <th>ASTM Forging Specification & Grades</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td>Carbon Steel</td>
                                    <td>ASTM A105, ASTM A105N (Normalized)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Low Temp Carbon Steel (LTCS)</td>
                                    <td>ASTM A350 LF2, LF3</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Alloy Steel</td>
                                    <td>ASTM A182 F1, F5, F9, F11, F22, F91</td>
                                </tr>
                                <tr class="t-row">
                                    <td><a href="{{ route('materials.austenitic-stainless-Steel') }}">Stainless Steel</a></td>
                                    <td>ASTM A182 F304/304L, F316/316L, F321, F347</td>
                                </tr>
                                <tr class="t-row">
                                    <td><a href="{{ route('materials.duplex-and-super-duplex') }}">Duplex & Super Duplex</a></td>
                                    <td>ASTM A182 F51 (UNS S31803), F53 (UNS S32750)</td>
                                </tr>
                                <tr class="t-row">
                                    <td><a href="{{ route('materials.nickel-Based-Superalloys') }}">Nickel Alloys</a></td>
                                    <td>Inconel 600/625, Hastelloy C276, Monel 400</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Gallery --}}
    

    {{-- Applications --}}
    <section id="applications" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Weldolets</h2>
                <p class="text-center pb-3">
                    <strong class="text-black">Weldolets</strong> are the standard for high-criticality branch connections in heavy industry:
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Oil & Gas Pipelines</h5>
                        <ul>
                            <li>Branching off crude oil mains into distribution headers without compromising structural integrity.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Petrochemical Plants</h5>
                        <ul>
                            <li>Used for large-bore branch connections where high flow rates and high pressures are present.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge"></i></div>
                        <h5>Power Generation</h5>
                        <ul>
                            <li>Critical for tapping into ultra-high-pressure steam lines (requiring Alloy Steel F91 Weldolets).</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-prescription2"></i></div>
                        <h5>Chemical & Pharmaceutical</h5>
                        <ul>
                            <li>Smooth internal bore prevents crevices, making it ideal for corrosive and sanitary environments (316L).</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-water"></i></div>
                        <h5>Desalination Plants</h5>
                        <ul>
                            <li>Duplex and Super Duplex Weldolets are used to branch highly corrosive seawater pipelines.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Offshore Platforms</h5>
                        <ul>
                            <li>High-strength, fully radiographable joints are mandatory on offshore oil rigs to prevent catastrophic leaks.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="mechanical" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
             <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Mechanical Properties (Forged Carbon Steel A105N)</h2>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr class="t-row">
                            <th>Grade</th>
                            <th>Tensile Strength (MPa)</th>
                            <th>Yield Strength (MPa min)</th>
                            <th>Elongation (%)</th>
                            <th>Hardness (HB max)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row">
                            <td>ASTM A105 / A105N</td>
                            <td>485</td>
                            <td>250</td>
                            <td>22</td>
                            <td>187</td>
                        </tr>
                    </tbody>
                </table>
            </div>
             <p class="text-center mt-2 small text-muted">*A105N indicates the forging has been Normalized, guaranteeing superior toughness and impact resistance at low temperatures.</p>
        </div>
    </section>

    {{-- why choose us --}}
    <section id="why-choose-us" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container text-center">
            <div class="section-title center">
                <h2>Why Choose Moksh Tubes?</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-award-fill"></i></div>
                        <h5>100% hot-forged for maximum structural integrity</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Extensive inventory of STD, XS, and Sch 160 ratings</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Precision CNC beveled ends for perfect welding</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Fast dispatch to Middle East and global markets</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-file-earmark-text"></i></div>
                        <h5>Full traceability and EN 10204 3.1 Certification</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-braces"></i></div>
                        <h5>Available in Duplex, Inconel, and special alloys</h5>
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

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why use a Weldolet instead of a standard Tee fitting?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Weldolets are much cheaper and easier to install than cutting a large section out of a main pipe to install a Tee. They also cause less flow disruption and require only one hole to be cut and two welds to be made (one to the header, one to the branch), compared to three welds for a Tee.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Can a Weldolet be X-rayed?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Yes. Because the branch connection is a full penetration butt-weld, it can be 100% radiographically tested (X-rayed) to ensure there are no internal weld defects. This makes Weldolets the mandatory choice for highly critical, high-pressure pipelines where Sockolets cannot be used.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What does "XS" mean in Weldolet sizing?</h4>
                            </div>
                            <div class="accord-content">
                                <p>XS stands for "Extra Strong". It dictates the wall thickness of the branch connection. An XS Weldolet is designed to be butt-welded to a Schedule 80 pipe. A "STD" Weldolet matches a Schedule 40 pipe, and a "Sch 160" Weldolet matches a Schedule 160 pipe.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>How is the hole cut into the run pipe?</h4>
                            </div>
                            <div class="accord-content">
                                <p>The hole in the run pipe perfectly matches the inside diameter (ID) of the Weldolet. It is usually cut using a hole saw, plasma cutter, or oxy-acetylene torch, and then ground smooth before the Weldolet is welded over it.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Contact Us</h2>
                <p>For further information, technical specifications, quotes, or custom alloy requirements for Weldolets, <strong>Moksh Tubes & Fittings LLP</strong> is your trusted manufacturer for forged branch connections.</p>
                <a href="javascript:void(0);" class="contact-cta-btn" data-bs-toggle="modal" data-bs-target="#contactFormModal">
                    Get in Touch
                </a>
            </div>
        </div>
    </section>

@endsection

@push('styles')
    <style>
        /* Base state for collapsed rows */
        tr.collapse {
            opacity: 0;
            transform: translateY(-6px) scale(0.98);
            transition: opacity .35s ease, transform .35s ease;
        }

        /* When collapsing (Bootstrap interim state) */
        tr.collapsing {
            opacity: 0;
            transform: translateY(-10px) scale(0.96);
            display: table-row !important;
        }

        /* When fully shown */
        tr.collapse.show {
            opacity: 1;
            transform: translateY(0) scale(1);
            display: table-row;
        }
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
              "@type": "Product",
              "@id": "https://mokshtubes.com/#weldolet",
              "name": "Weldolet (Butt Weld Olet)",
              "image": "https://mokshtubes.com/assets/images/product/flangs/weldolets_11zon.jpg",
              "category": "Forged Fittings",
              "description": "High-pressure forged Weldolets (MSS-SP-97) for butt-welded branch connections. Available in STD, XS, and Sch 160 in Carbon and Stainless Steel.",
              "brand": {
                "@type": "Brand",
                "@id": "https://mokshtubes.com/#organization"
              }
            }
          ]
        }
        </script>
    @endverbatim
@endsection
