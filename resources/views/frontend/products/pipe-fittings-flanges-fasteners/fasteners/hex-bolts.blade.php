@extends('layouts.master')
@section('title', 'Hex Bolts | High-Strength Structural Fasteners | Moksh Tubes')
<!-- 52 characters -->
@section('meta_description',
    'High-quality Hex Bolts for structural and industrial applications. Available in Stainless Steel, Carbon Steel, and Alloy Steel in various sizes and grades.')
@section('meta_keywords',
    'Hex Bolts, Hexagonal Head Bolts, Structural Bolts, Stainless Steel Hex Bolts, Carbon Steel Hex Bolts')
@section('og_image', asset('assets/images/fasteners/hax-bolt.png'))
@section('og_type', 'product')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/fasteners/hax-bolt.png);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1 class="page-title">Hex Bolts (Structural & Industrial)</h1>
                        <p class="text-center mt-3 px-3 py-2 text-white position-relative" style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Hex Bolts are one of the most versatile and widely used fasteners in industrial construction, piping, and heavy machinery. Characterized by their hexagonal heads, they provide a large gripping surface for high-torque tightening. At <a href="{{ route('index') }}" class="text-white text-decoration-underline">Moksh Tubes & Fittings LLP</a>, we supply high-strength fully threaded and partially threaded hex bolts in carbon steel, alloy steel, stainless steel, and exotic alloys—fully compliant with DIN, ISO, ASTM, and ASME standards.  
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
            <a href="#full-vs-partial">Full vs Partial Thread</a> |
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
                <h2 class="fw-bold" style="color: #174268;">Hex Bolts</h2>
            </div>

            <div class="row align-items-center">
                <!-- Left Image -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/fasteners/hax-bolt.png') }}"
                        alt="Hex Bolts" class="img-fluid rounded shadow-sm" width="550"
                        height="350" loading="lazy">
                </div>

                <!-- Right Content -->
                <div class="col-md-6">
                    <p class="fs-6 mb-3 text-justify">
                        <strong class="text-black">Hex Bolts</strong> (or Hex Cap Screws) are designed for heavy-duty structural fastening. The hexagonal head allows for the application of immense torque using a wrench or spanner, ensuring a tightly sealed and vibration-resistant joint when paired with a corresponding hex nut and washer.
                    </p>

                    <p class="fs-6 mb-3 text-justify">
                        <a href="{{ route('index') }}">Moksh Tubes & Fittings LLP</a> is a premier manufacturer,
                        supplier, and exporter of Hex Bolts in India. We offer both structural bolts (like ASTM A325 and A490) and high-temperature bolts (like ASTM A193). Our products are widely
                        supplied to <a href="{{ route('materials.austenitic-stainless-Steel') }}">Indian projects</a> and
                        Gulf / GCC countries including UAE, Saudi Arabia, Qatar, Oman, and Kuwait.
                    </p>

                    <p class="fs-6 text-justify">
                        Our hex bolts undergo rigorous mechanical testing (including tensile and hardness tests) and dimensional verification to ensure flawless performance under severe stress and corrosive conditions.
                    </p>

                </div>
            </div>
        </div>
    </section>

    {{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Hex Bolts Datasheet</h3>
            <p class="mb-3">
                Get the complete datasheet with dimensional specifications, weight charts, and material properties.
                Enter your email below to receive the PDF instantly.
            </p>

            <!-- Lead Capture Form -->
            <form id="leadForm" method="POST" action="https://mokshtubes.com/datasheet-leads-capture" class="mb-3">
                <input type="hidden" name="_token" value="WNVWvpO4YR2OqZaIJDl2mE3UfyreGys3Vp19brsc" autocomplete="off">
                <div class="row justify-content-center">
                    <input type="hidden" name="pdf" value="hex-bolts.pdf">
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
                                        <a href="{{ route('materials.duplex-and-super-duplex') }}">Duplex & Super Duplex
                                            Steel</a>, <a href="{{ route('materials.nickel-Based-Superalloys') }}">Nickel
                                            Alloys</a>, <a href="{{ route('materials.inconel') }}">Inconel</a>, Monel, <a
                                            href="{{ route('materials.titanium') }}">Titanium</a>
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Size Range</td>
                                    <td>M6 to M100 (Metric) | 1/4" to 4" (Imperial)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Length</td>
                                    <td>10mm to 500mm (Custom lengths available)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Thread Type</td>
                                    <td>UNC, UNF, Metric Coarse, Metric Fine</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Finishes</td>
                                    <td>PTFE (Teflon) Coated, Zinc Plated, Hot Dip Galvanized, Black Oxide, Plain</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Standards</td>
                                    <td>DIN 931, DIN 933, ISO 4014, ISO 4017, ASME B18.2.1, IS 1364</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Head Type</td>
                                    <td>Hexagonal (Heavy Hex also available)</td>
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
                <h2 class="fw-bold" style="color: #174268;">Dimensional & Weight Data</h2>
            </div>

            <div class="section-title center mb-3">
                <h3 class="text-center mb-0" style="color: #db7227;">Indicative Weight Chart (Metric - kg/100 pcs)</h3>
            </div>
            
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr class="t-row">
                            <th>Nominal Size</th>
                            <th>Width Across Flats (A/F) mm</th>
                            <th>50 mm Length</th>
                            <th>75 mm Length</th>
                            <th>100 mm Length</th>
                            <th>150 mm Length</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row"><td>M6</td><td>10</td><td>0.90</td><td>1.30</td><td>1.70</td><td>2.40</td></tr>
                        <tr class="t-row"><td>M8</td><td>13</td><td>1.60</td><td>2.40</td><td>3.20</td><td>4.80</td></tr>
                        <tr class="t-row"><td>M10</td><td>17</td><td>3.50</td><td>5.10</td><td>6.80</td><td>10.20</td></tr>
                        <tr class="t-row"><td>M12</td><td>19</td><td>5.60</td><td>8.40</td><td>11.20</td><td>16.80</td></tr>
                        <tr class="t-row"><td>M16</td><td>24</td><td>11.50</td><td>17.20</td><td>23.00</td><td>34.50</td></tr>
                        <tr class="t-row"><td>M20</td><td>30</td><td>23.00</td><td>34.50</td><td>46.00</td><td>69.00</td></tr>
                        <tr class="t-row"><td>M24</td><td>36</td><td>40.00</td><td>60.00</td><td>80.00</td><td>120.00</td></tr>
                        <tr class="t-row"><td>M30</td><td>46</td><td>75.00</td><td>112.00</td><td>150.00</td><td>225.00</td></tr>
                    </tbody>
                </table>
            </div>
            <p class="text-center mt-2 small text-muted">*Weights are approximate and based on Carbon Steel density (7.85 g/cm³). Assumes full thread. Head weight is included, but nut and washer are excluded.</p>
        </div>
    </section>

    <section id="full-vs-partial" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Full Thread vs Partial Thread Hex Bolts</h2>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-12">
                     <p class="fs-6 mb-3 text-justify">
                        Hex bolts are manufactured in two primary configurations depending on their application:
                    </p>

                    <div class="table-responsive ">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Feature</th>
                                    <th>Fully Threaded (DIN 933 / ISO 4017)</th>
                                    <th>Partially Threaded (DIN 931 / ISO 4014)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td class="fw-bold">Configuration</td>
                                    <td>Threads run from under the head to the tip.</td>
                                    <td>Has an unthreaded shank below the head.</td>
                                </tr>
                                <tr class="t-row">
                                    <td class="fw-bold">Grip Strength</td>
                                    <td>Good, allows for maximum adjustment.</td>
                                    <td>Superior; the unthreaded shank acts as a solid dowel pin.</td>
                                </tr>
                                <tr class="t-row">
                                    <td class="fw-bold">Shear Resistance</td>
                                    <td>Lower (threads can create stress points).</td>
                                    <td>High (the smooth shank bears the shear load).</td>
                                </tr>
                                <tr class="t-row">
                                    <td class="fw-bold">Primary Application</td>
                                    <td>General fastening, tapped holes.</td>
                                    <td>Structural joints subject to shear forces (bridges, frames).</td>
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

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Material & Standard</th>
                                    <th>Common Grades</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td>Carbon Steel (ISO 898-1)</td>
                                    <td>Grade 4.6, 4.8, 8.8 (High Tensile), 10.9, 12.9</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Structural Bolts (ASTM)</td>
                                    <td>ASTM A325, ASTM A490 (For heavy construction)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Alloy Steel (ASTM A193)</td>
                                    <td>B7 (High-Temp), B7M, B16</td>
                                </tr>
                                <tr class="t-row">
                                    <td><a href="{{ route('materials.austenitic-stainless-Steel') }}">Stainless Steel</a></td>
                                    <td>A2-70 (SS304), A4-80 (SS316), ASTM A193 B8, B8M</td>
                                </tr>
                                <tr class="t-row">
                                    <td><a href="{{ route('materials.duplex-and-super-duplex') }}">Duplex & Super Duplex</a></td>
                                    <td>UNS S31803, UNS S32750</td>
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
                                    alt="Carbon Steel Hex Bolts" loading="lazy" width="400"
                                    height="260">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0">HIGH TENSILE (GRADE 8.8/10.9)</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.austenitic-stainless-Steel') }}">
                                <img class="w-100" src="{{ asset('assets/images/product/STAINLESS-STEEL.webp') }}"
                                    alt="Stainless Steel Hex Bolts" loading="lazy" width="400"
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
                                    alt="Duplex and Super Duplex Bolts" loading="lazy"
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
                                    alt="Nickel Alloy Hex Bolts" loading="lazy" width="400"
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
                                    alt="Haynes Superalloy Bolts" loading="lazy"
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
                                    alt="Titanium Hex Bolts" loading="lazy"
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
                <h2>Applications of Hex Bolts</h2>
                <p class="text-center pb-3">
                    <strong class="text-black">Hex Bolts</strong> are the workhorse of industrial fastening:
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-building"></i></div>
                        <h5>Construction & Infrastructure</h5>
                        <ul>
                            <li>Securing steel I-beams in bridges, skyscrapers, and structural frameworks (ASTM A325/A490).</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Machinery Assembly</h5>
                        <ul>
                            <li>Mounting heavy industrial equipment, motors, and hydraulic presses.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Oil, Gas & Piping</h5>
                        <ul>
                            <li>Used as alternatives to studs on flanged connections and pressure vessels.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge"></i></div>
                        <h5>Power Generation</h5>
                        <ul>
                            <li>Securing boiler mountings and turbine casings (ASTM A193 B7).</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-truck"></i></div>
                        <h5>Automotive & Transport</h5>
                        <ul>
                            <li>High-tensile Grade 10.9/12.9 bolts used in chassis and engine mountings.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-water"></i></div>
                        <h5>Marine & Offshore</h5>
                        <ul>
                            <li>Stainless steel (A4-80) bolts are used to resist saltwater corrosion on docks and ships.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="mechanical" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
             <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Mechanical Properties (Typical Values)</h2>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr class="t-row">
                            <th>Grade</th>
                            <th>Tensile Strength (MPa min)</th>
                            <th>Yield Strength (MPa min)</th>
                            <th>Typical Application</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row">
                            <td>Grade 4.6 (Mild Steel)</td>
                            <td>400</td>
                            <td>240</td>
                            <td>Low-stress, general fastening</td>
                        </tr>
                        <tr class="t-row">
                            <td>Grade 8.8 (High Tensile)</td>
                            <td>800</td>
                            <td>640</td>
                            <td>Heavy machinery, structural</td>
                        </tr>
                         <tr class="t-row">
                            <td>Grade 10.9 (High Tensile)</td>
                            <td>1040</td>
                            <td>900</td>
                            <td>Automotive, highly stressed joints</td>
                        </tr>
                         <tr class="t-row">
                            <td>ASTM A325</td>
                            <td>830</td>
                            <td>660</td>
                            <td>Structural steel bridges/buildings</td>
                        </tr>
                        <tr class="t-row">
                            <td>ASTM A193 B7</td>
                            <td>860</td>
                            <td>725</td>
                            <td>High-temp flanged piping</td>
                        </tr>
                    </tbody>
                </table>
            </div>
             <p class="text-center mt-2 small text-muted">*Mechanical values depend strictly on the grade specification and heat treatment processes applied.</p>
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
                        <li class="list-group-item"><strong>Thread Tolerance:</strong> Metric threads strictly conform to ISO 965 Class 6g; Unified Inch threads to ASME B1.1 Class 2A.</li>
                        <li class="list-group-item"><strong>Dimensional Standards:</strong> Manufactured in accordance with ASME B18.2.1 and ISO 4014/4017 ensuring precise wrench engagement across the flats.</li>
                        <li class="list-group-item"><strong>Testing & Inspection:</strong> All bolts undergo Tensile Testing, Hardness Testing, Thread Gauge Inspection, and PMI (Positive Material Identification) for alloy/stainless grades.</li>
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
                        <h5>Ready stock for fast dispatch</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Rolled threads for maximum fatigue resistance</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Compliance with Indian, ASME, and DIN standards</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Global export and logistics support</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-file-earmark-text"></i></div>
                        <h5>100% Traceability and EN 10204 3.1 Certification</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-tools"></i></div>
                        <h5>Technical support for structural projects</h5>
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
                                <h4>What is the difference between DIN 931 and DIN 933?</h4>
                            </div>
                            <div class="accord-content">
                                <p>DIN 931 specifies a hex bolt with a partially threaded shank, which is ideal for grip strength and shear resistance. DIN 933 specifies a hex bolt that is fully threaded to the head, providing maximum adjustment and grip along its entire length.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>When should I use an ASTM A325 bolt?</h4>
                            </div>
                            <div class="accord-content">
                                <p>ASTM A325 structural bolts are specifically designed for structural steel connections in bridges, buildings, and large frameworks where a high clamping force is necessary to create a slip-critical joint.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What do the numbers "8.8" or "10.9" mean on a bolt head?</h4>
                            </div>
                            <div class="accord-content">
                                <p>These are ISO property classes indicating strength. In "8.8", the first "8" means the tensile strength is roughly 800 MPa. The second "8" means the yield strength is 80% of the tensile strength (640 MPa).</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Are coated bolts available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Yes, we provide Zinc Plated, Hot-Dip Galvanized, and specialized PTFE/Xylan coated bolts to enhance corrosion resistance in harsh outdoor and marine environments.</p>
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
                <p>For further information, bulk quotes, or technical assistance regarding Hex Bolts, <strong>Moksh Tubes & Fittings LLP</strong> is your dependable partner for industrial fastening solutions.</p>
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
              "@id": "https://mokshtubes.com/#hex-bolts",
              "name": "Hex Bolts",
              "image": "https://mokshtubes.com/assets/images/fasteners/hax-bolt.png",
              "category": "Fasteners",
              "description": "High-strength Hex Bolts for structural and industrial applications. Grades include 8.8, 10.9, ASTM A325, and ASTM A193 B7.",
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
