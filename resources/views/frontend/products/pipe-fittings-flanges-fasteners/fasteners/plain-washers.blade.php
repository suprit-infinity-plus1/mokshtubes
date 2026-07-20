@extends('layouts.master')
@section('title', 'Plain Washers | Flat Washers | Moksh Tubes')
<!-- 52 characters -->
@section('meta_description',
    'High-quality Plain Washers (Flat Washers) for distributing fastener loads. Available in Stainless Steel, Carbon Steel, and Alloy Steel across all standard sizes.')
@section('meta_keywords',
    'Plain Washers, Flat Washers, ASTM F436, DIN 125, Stainless Steel Washers, Structural Washers')
@section('og_image', asset('assets/images/product/flangs/FASTENERS.webp'))
@section('og_type', 'product')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/product/flangs/FASTENERS.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1 class="page-title">Plain Washers (Flat Washers)</h1>
                        <p class="text-center mt-3 px-3 py-2 text-white position-relative" style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Plain Washers, commonly known as Flat Washers, are essential components used alongside bolts and nuts to distribute the clamping load of the fastener evenly across a wider surface area. This prevents damage to the mated surfaces and ensures a secure, tight connection under high-tension loads. At <a href="{{ route('index') }}" class="text-white text-decoration-underline">Moksh Tubes & Fittings LLP</a>, we supply premium-grade structural and industrial plain washers in carbon steel, stainless steel, and alloy steel, strictly complying with ASTM F436, DIN 125, and ISO 7089 standards.
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
            <a href="#types">Washer Types</a> |
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
                <h2 class="fw-bold" style="color: #174268;">Plain Washers</h2>
            </div>

            <div class="row align-items-center">
                <!-- Left Image -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('/assets/images/product/flangs/FASTENERS.webp') }}"
                        alt="Plain Washers" class="img-fluid rounded shadow-sm" width="550"
                        height="350" loading="lazy">
                </div>

                <!-- Right Content -->
                <div class="col-md-6">
                    <p class="fs-6 mb-3 text-justify">
                        <strong class="text-black">Plain Washers</strong> provide a smooth, hard bearing surface that prevents the bolt head or nut from embedding into softer materials during torquing. By reducing friction and ensuring uniform load distribution, they play a critical role in preventing joint failure in high-vibration and high-pressure assemblies.
                    </p>

                    <p class="fs-6 mb-3 text-justify">
                        <a href="{{ route('index') }}">Moksh Tubes & Fittings LLP</a> is a leading manufacturer,
                        supplier, and exporter of Plain Washers in India. We specialize in hardened structural washers (ASTM F436) intended for use with high-strength structural bolts (A325 and A490). Our products are widely
                        supplied to <a href="{{ route('materials.austenitic-stainless-Steel') }}">Indian industrial projects</a> and
                        Gulf / GCC countries including UAE, Saudi Arabia, Qatar, Oman, and Kuwait.
                    </p>

                    <p class="fs-6 text-justify">
                        Whether you need standard DIN 125 commercial washers or highly customized PTFE-coated thick washers for offshore pipelines, our precision-punched and machined washers guarantee zero deformation and exceptional corrosion resistance.
                    </p>

                </div>
            </div>
        </div>
    </section>

    {{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Plain Washers Datasheet</h3>
            <p class="mb-3">
                Get the complete datasheet with dimensional specifications, thickness charts, material properties, and
                application guidelines.
                Enter your email below to receive the PDF instantly.
            </p>

            <!-- Lead Capture Form -->
            <form id="leadForm" method="POST" action="https://mokshtubes.com/datasheet-leads-capture" class="mb-3">
                <input type="hidden" name="_token" value="WNVWvpO4YR2OqZaIJDl2mE3UfyreGys3Vp19brsc" autocomplete="off">
                <div class="row justify-content-center">
                    <input type="hidden" name="pdf" value="plain-washers.pdf">
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
            <p class="small text-muted">
                We respect your privacy. Your email will only be used to send the datasheet.
            </p>
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
                                    <td><a href="{{ route('materials.engineering-Steels') }}">Carbon/Alloy Steel</a>, <a href="{{ route('materials.austenitic-stainless-Steel') }}">Stainless Steel</a>,
                                        <a href="{{ route('materials.duplex-and-super-duplex') }}">Duplex Steel</a>, <a href="{{ route('materials.nickel-Based-Superalloys') }}">Nickel
                                            Alloys</a>, Brass, Copper, <a
                                            href="{{ route('materials.titanium') }}">Titanium</a>
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Inner Diameter (ID) Range</td>
                                    <td>M3 to M100 (Metric) | 1/8" to 4" (Imperial)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Form</td>
                                    <td>Circular (Standard), Square (Special), Beveled</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Finishes</td>
                                    <td>Bright Zinc Plated (BZP), Hot Dip Galvanized (HDG), Black Oxide, PTFE, Xylan, Plain</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Standards</td>
                                    <td>ASTM F436, DIN 125 A/B, DIN 9021, ISO 7089, ISO 7093, ASME B18.22.1</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Mating Fasteners</td>
                                    <td>Hex Bolts, Stud Bolts, Heavy Hex Nuts, Threaded Rods</td>
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
                <h2 class="fw-bold" style="color: #174268;">Dimensional Data</h2>
            </div>

            <div class="section-title center mb-3">
                <h3 class="text-center mb-0" style="color: #db7227;">Standard Plain Washers (DIN 125 Form A - Metric)</h3>
            </div>
            
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr class="t-row">
                            <th>Nominal Size (For Bolt)</th>
                            <th>Inner Diameter (ID) (mm)</th>
                            <th>Outer Diameter (OD) (mm)</th>
                            <th>Thickness (T) (mm)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row"><td>M6</td><td>6.4</td><td>12.0</td><td>1.6</td></tr>
                        <tr class="t-row"><td>M8</td><td>8.4</td><td>16.0</td><td>1.6</td></tr>
                        <tr class="t-row"><td>M10</td><td>10.5</td><td>20.0</td><td>2.0</td></tr>
                        <tr class="t-row"><td>M12</td><td>13.0</td><td>24.0</td><td>2.5</td></tr>
                        <tr class="t-row"><td>M16</td><td>17.0</td><td>30.0</td><td>3.0</td></tr>
                        <tr class="t-row"><td>M20</td><td>21.0</td><td>37.0</td><td>3.0</td></tr>
                        <tr class="t-row"><td>M24</td><td>25.0</td><td>44.0</td><td>4.0</td></tr>
                        <tr class="t-row"><td>M30</td><td>31.0</td><td>56.0</td><td>4.0</td></tr>
                        <tr class="t-row"><td>M36</td><td>37.0</td><td>66.0</td><td>5.0</td></tr>
                    </tbody>
                </table>
            </div>
            <p class="text-center mt-2 small text-muted">*DIN 125 is the standard metric flat washer. For larger OD, DIN 9021 (Penny Washers) are used. For structural applications, hardened ASTM F436 washers must be used.</p>
        </div>
    </section>

    <section id="types" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Types of Washers</h2>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="table-responsive ">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Washer Type</th>
                                    <th>Description / Form</th>
                                    <th>Primary Application</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td class="fw-bold">Standard Flat Washer (DIN 125)</td>
                                    <td>Circular flat metal ring with a standard OD.</td>
                                    <td>General manufacturing, load distribution for standard hex bolts.</td>
                                </tr>
                                <tr class="t-row">
                                    <td class="fw-bold">Hardened Structural Washer (ASTM F436)</td>
                                    <td>Thicker, hardened steel washer, often chamfered.</td>
                                    <td>Structural steel connections (bridges, buildings) paired with A325/A490 bolts.</td>
                                </tr>
                                <tr class="t-row">
                                    <td class="fw-bold">Penny / Fender Washer (DIN 9021)</td>
                                    <td>Exceptionally large Outer Diameter (OD).</td>
                                    <td>Distributing load over soft materials like wood, plastic, or thin sheet metal.</td>
                                </tr>
                                <tr class="t-row">
                                    <td class="fw-bold">Beveled Washer (ASTM F436 Type 2)</td>
                                    <td>Square or circular with a tapered/slanted surface.</td>
                                    <td>Used in structural steel to compensate for lack of parallelism (e.g., I-beams).</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Grades Available --}}
    <section id="grades" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Available Grades & Materials</h2>
            </div>
            <div class="section-title center mb-3">
                <h4 class="text-center mb-0" style="color: #db7227;">Standard Specifications:</h4>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Material / Standard</th>
                                    <th>Grades & Specifications</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td>Structural Carbon Steel</td>
                                    <td>ASTM F436 Type 1 (Through-hardened), Type 3 (Weathering Steel)</td>
                                </tr>
                                <tr class="t-row">
                                    <td><a href="{{ route('materials.austenitic-stainless-Steel') }}">Stainless Steel</a></td>
                                    <td>SS304 (A2), SS316 (A4), ASTM A240</td>
                                </tr>
                                <tr class="t-row">
                                    <td>High Tensile Alloy Steel</td>
                                    <td>AISI 4140, EN8 (Quenched and Tempered for extreme loads)</td>
                                </tr>
                                <tr class="t-row">
                                    <td><a href="{{ route('materials.duplex-and-super-duplex') }}">Duplex & Super Duplex</a></td>
                                    <td>UNS S31803, UNS S32750 (For offshore pipelines)</td>
                                </tr>
                                <tr class="t-row">
                                    <td><a href="{{ route('materials.nickel-Based-Superalloys') }}">Exotic Alloys</a></td>
                                    <td>Inconel 625/718, Hastelloy, Titanium Grade 2/5</td>
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
                            <a class="w-100" href="{{ route('materials.engineering-Steels') }}">
                                <img class="w-100" src="{{ asset('assets/images/product/CARBON-ALLOYS.webp') }}"
                                    alt="Carbon Steel Flat Washers" loading="lazy" width="400"
                                    height="260">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0">STRUCTURAL STEEL (ASTM F436)</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.austenitic-stainless-Steel') }}">
                                <img class="w-100" src="{{ asset('assets/images/product/STAINLESS-STEEL.webp') }}"
                                    alt="Stainless Steel Flat Washers" loading="lazy" width="400"
                                    height="260">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0">STAINLESS STEEL (A2/A4)</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.duplex-and-super-duplex') }}">
                                <img class="w-100" src="{{ asset('assets/images/product/DUPLEX-SUPER.webp') }}"
                                    alt="Duplex and Super Duplex Washers" loading="lazy"
                                    width="400" height="260">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0">DUPLEX & SUPER DUPLEX</h6>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.nickel-Based-Superalloys') }}">
                                <img class="w-100" src="{{ asset('assets/images/product/NICKLE-ALLOYS.webp') }}"
                                    alt="Nickel Alloy Flat Washers" loading="lazy" width="400"
                                    height="260">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0">NICKEL ALLOYS</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4 ">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.haynes-Superalloys') }}">
                                <img class="w-100" src="{{ asset('assets/images/product/RARE-TO-ALLOYS.webp') }}"
                                    alt="Haynes Superalloy Washers" loading="lazy"
                                    width="400" height="260">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0">HAYNES SUPERALLOYS</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.titanium') }}">
                                <img class="w-100" src="{{ asset('assets/images/product/TITANIUM-ALLOYS.webp') }}"
                                    alt="Titanium Flat Washers" loading="lazy"
                                    width="400" height="260">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0">TITANIUM ALLOYS</h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Applications --}}
    <section id="applications" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Plain Washers</h2>
                <p class="text-center pb-3">
                    <strong class="text-black">Plain Washers</strong> are universally required in almost every mechanical assembly:
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-building"></i></div>
                        <h5>Structural Engineering</h5>
                        <ul>
                            <li>Hardened ASTM F436 washers are mandatory in bridge girders, steel buildings, and high-load structural joints.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Pipeline Flanges</h5>
                        <ul>
                            <li>Distributing extreme compressive forces when tightening heavy hex nuts onto stud bolts in refineries.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-truck"></i></div>
                        <h5>Automotive & Machinery</h5>
                        <ul>
                            <li>Preventing galling and protecting equipment surfaces from rotating bolt heads during engine assembly.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fan"></i></div>
                        <h5>HVAC & Electrical</h5>
                        <ul>
                            <li>Fender/Penny washers are used to secure sheet metal ducting and thin-walled enclosures without tearing.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Marine Construction</h5>
                        <ul>
                            <li>Thick stainless steel (A4/316) washers used to prevent saltwater corrosion on docks and offshore rigs.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-water"></i></div>
                        <h5>Water & Wastewater</h5>
                        <ul>
                            <li>Used extensively on large municipal pump flanges and cast iron pipe assemblies.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="mechanical" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
             <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Hardness Properties – ASTM F436</h2>
                 <p class="text-center">Hardness is the critical metric for structural washers to ensure they do not deform.</p>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr class="t-row">
                            <th>Washer Type</th>
                            <th>Hardness (Rockwell C - HRC)</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row">
                            <td>ASTM F436 Type 1</td>
                            <td>38 to 45 HRC</td>
                            <td>Standard through-hardened carbon steel.</td>
                        </tr>
                        <tr class="t-row">
                            <td>ASTM F436 Type 3</td>
                            <td>38 to 45 HRC</td>
                            <td>Weathering steel (Corten), used without coating.</td>
                        </tr>
                         <tr class="t-row">
                            <td>DIN 125 (Commercial)</td>
                            <td>Varies (typically low)</td>
                            <td>Mild steel, not intended for high-tension structural bolting.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section id="tolerances" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Tolerances & Quality Standards</h2>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Flatness Tolerance:</strong> Strictly controlled to ensure the washer does not introduce uneven tension to the bolt head.</li>
                        <li class="list-group-item"><strong>Concentricity:</strong> The Inner Diameter (ID) must be perfectly centered within the Outer Diameter (OD) to prevent eccentric loading on the fastener assembly.</li>
                        <li class="list-group-item"><strong>Clearance Fit:</strong> The ID is manufactured slightly larger than the nominal bolt diameter to allow easy installation over the threads without binding.</li>
                    </ul>
                </div>
            </div>
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
                        <h5>Massive inventory of DIN 125 & ASTM F436</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Perfectly flat, burr-free surfaces</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Custom CNC machining for extreme thicknesses</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Export-grade packaging for international shipping</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-file-earmark-text"></i></div>
                        <h5>Complete traceability and MTC 3.1 documentation</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-brush"></i></div>
                        <h5>Wide variety of anti-corrosion coatings</h5>
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
                                <h4>Why is a hardened washer (ASTM F436) necessary?</h4>
                            </div>
                            <div class="accord-content">
                                <p>When high-strength structural bolts (like A325 or A490) are tightened to their extreme required tensions, standard mild steel washers will crush, warp, or deform, causing the joint to lose tension. Hardened washers can withstand this immense clamping force.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Do I need a washer under the bolt head or the nut?</h4>
                            </div>
                            <div class="accord-content">
                                <p>It is best practice to place a washer under the element being rotated during tightening (usually the nut). This prevents the rotating element from galling or digging into the base material. In highly critical structural applications, a washer is placed under both the head and the nut.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What is a Fender / Penny Washer?</h4>
                            </div>
                            <div class="accord-content">
                                <p>A fender washer (DIN 9021) has a standard Inner Diameter but an abnormally large Outer Diameter. It is used to distribute the load over a very wide area, typically on thin sheet metal, plastics, or wood, to prevent the bolt head from pulling through.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Are your stainless steel washers magnetic?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Our 300-series (A2/A4) austenitic stainless steel washers are generally non-magnetic. However, they may exhibit slight magnetism due to cold-working during the manufacturing/punching process.</p>
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
                <p>For further information, bulk quotes, or custom machined washers, <strong>Moksh Tubes & Fittings LLP</strong> is your dependable partner for structural and industrial fastening solutions.</p>
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
              "@id": "https://mokshtubes.com/#plain-washers",
              "name": "Plain Washers (Flat Washers)",
              "image": "https://mokshtubes.com/assets/images/product/flangs/FASTENERS.webp",
              "category": "Fasteners",
              "description": "High-quality Plain Washers, Flat Washers, and Hardened Structural Washers (ASTM F436, DIN 125) for load distribution.",
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
