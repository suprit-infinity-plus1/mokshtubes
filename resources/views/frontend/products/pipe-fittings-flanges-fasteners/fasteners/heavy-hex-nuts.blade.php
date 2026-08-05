@extends('layouts.master')
@section('title', 'Heavy Hex Nuts | High-Strength Nuts | Moksh Tubes')
<!-- 52 characters -->
@section('meta_description',
    'High-strength Heavy Hex Nuts for structural and flange connections. Available in ASTM A194 Grade 2H, 8, 8M and high-temperature alloys.')
@section('meta_keywords',
    'Heavy Hex Nuts, ASTM A194 Grade 2H, Structural Nuts, Flange Nuts, High Strength Nuts')
@section('og_image', asset('assets/images/product/flangs/FASTENERS.webp'))
@section('og_type', 'product')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/product/flangs/FASTENERS.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1 class="page-title">Heavy Hex Nuts</h1>
                        <p class="text-center mt-3 px-3 py-2 text-white position-relative" style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Heavy Hex Nuts are slightly larger and thicker than standard hex nuts, providing increased bearing surface area and superior thread engagement for high-pressure, high-temperature structural fastening. Commonly paired with large-diameter stud bolts and hex bolts, they are essential for flanged piping systems. At <a href="{{ route('index') }}" class="text-white text-decoration-underline">Moksh Tubes & Fittings LLP</a>, we supply premium heavy hex nuts in carbon steel, alloy steel, and stainless steel, conforming strictly to ASTM A194, ASME B18.2.2, and DIN standards.
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
            <a href="#heavy-vs-standard">Heavy vs Standard</a> |
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
                <h2 class="fw-bold" style="color: #174268;">Heavy Hex Nuts</h2>
            </div>

            <div class="row align-items-center">
                <!-- Left Image -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('/assets/images/product/flangs/FASTENERS.webp') }}"
                        alt="Heavy Hex Nuts" class="img-fluid rounded shadow-sm" width="550"
                        height="350" loading="lazy">
                </div>

                <!-- Right Content -->
                <div class="col-md-6">
                    <p class="fs-6 mb-3 text-justify">
                        <strong class="text-black">Heavy Hex Nuts</strong> are engineered to withstand extreme tension and vibration. Their wider dimensions across the flats and increased thickness distribute the load over a larger area, reducing the chance of nut deformation and providing exceptional strength in high-load assemblies.
                    </p>

                    <p class="fs-6 mb-3 text-justify">
                        <a href="{{ route('index') }}">Moksh Tubes & Fittings LLP</a> is a leading manufacturer,
                        supplier, and exporter of Heavy Hex Nuts in India, specializing in ASTM A194 Grade 2H, Grade 8, and Grade 8M. Our products are widely
                        supplied to <a href="{{ route('materials.austenitic-stainless-Steel') }}">Indian petrochemical projects</a> and
                        Gulf / GCC countries including UAE, Saudi Arabia, Qatar, Oman, and Kuwait.
                    </p>

                    <p class="fs-6 text-justify">
                        Manufactured via hot and cold forging processes, our nuts feature precision-tapped threads that ensure smooth engagement with stud bolts, preventing galling and providing a permanent, leak-proof seal for high-pressure flanges.
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
                                    <td><a href="{{ route('materials.engineering-Steels') }}">Carbon/Alloy Steel</a>, <a href="{{ route('materials.austenitic-stainless-Steel') }}">Stainless Steel</a>,
                                        <a href="{{ route('materials.duplex-and-super-duplex') }}">Duplex & Super Duplex
                                            Steel</a>, <a href="{{ route('materials.nickel-Based-Superalloys') }}">Nickel
                                            Alloys</a>, <a href="{{ route('materials.inconel') }}">Inconel</a>, Monel, <a
                                            href="{{ route('materials.titanium') }}">Titanium</a>
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Size Range</td>
                                    <td>1/4" to 4" (Imperial) | M6 to M100 (Metric)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Thread Type</td>
                                    <td>UNC, UNF, Metric Coarse, Metric Fine (8-UN standard for > 1")</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Finishes</td>
                                    <td>PTFE (Teflon), Zinc Plated, Hot Dip Galvanized (HDG), Black Oxide, Cadmium, Plain</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Standards</td>
                                    <td>ASTM A194, ASTM A563, ASME B18.2.2, DIN 6915, ISO 4032</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Mating Fasteners</td>
                                    <td>ASTM A193 B7/B8 Studs, ASTM A325/A490 Structural Bolts</td>
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
                <h3 class="text-center mb-0" style="color: #db7227;">Heavy Hex Nut Dimensions (ASME B18.2.2 - Imperial)</h3>
            </div>
            
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr class="t-row">
                            <th>Nominal Size</th>
                            <th>Threads per Inch (UNC)</th>
                            <th>Width Across Flats (F) (inches)</th>
                            <th>Thickness / Height (H) (inches)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row"><td>1/2"</td><td>13</td><td>7/8</td><td>31/64</td></tr>
                        <tr class="t-row"><td>5/8"</td><td>11</td><td>1-1/16</td><td>39/64</td></tr>
                        <tr class="t-row"><td>3/4"</td><td>10</td><td>1-1/4</td><td>47/64</td></tr>
                        <tr class="t-row"><td>7/8"</td><td>9</td><td>1-7/16</td><td>55/64</td></tr>
                        <tr class="t-row"><td>1"</td><td>8</td><td>1-5/8</td><td>63/64</td></tr>
                        <tr class="t-row"><td>1-1/8"</td><td>8 (8-UN)</td><td>1-13/16</td><td>1-7/64</td></tr>
                        <tr class="t-row"><td>1-1/4"</td><td>8 (8-UN)</td><td>2</td><td>1-7/32</td></tr>
                        <tr class="t-row"><td>1-1/2"</td><td>8 (8-UN)</td><td>2-3/8</td><td>1-15/32</td></tr>
                        <tr class="t-row"><td>2"</td><td>8 (8-UN)</td><td>3-1/8</td><td>1-31/32</td></tr>
                    </tbody>
                </table>
            </div>
            <p class="text-center mt-2 small text-muted">*Above 1" nominal size, the 8-UN (8 threads per inch) thread series is standard for ASTM A194 Grade 2H heavy hex nuts used in high-pressure flanges.</p>
        </div>
    </section>

    

    {{-- Grades Available --}}
    <section id="grades" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Available Grades & Materials</h2>
            </div>
            <div class="section-title center mb-3">
                <h4 class="text-center mb-0" style="color: #db7227;">ASTM A194 – Standard Specification for Carbon/Alloy/Stainless Nuts:</h4>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Material Grade</th>
                                    <th>Common Application</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td><strong>ASTM A194 Grade 2H</strong> (Carbon Steel)</td>
                                    <td>High-pressure, high-temperature service (Paired with B7 studs)</td>
                                </tr>
                                <tr class="t-row">
                                    <td><strong>ASTM A194 Grade 2HM</strong></td>
                                    <td>Sour gas / NACE MR0175 compliant (Paired with B7M studs)</td>
                                </tr>
                                <tr class="t-row">
                                    <td><strong>ASTM A194 Grade 8</strong> (SS304)</td>
                                    <td>Corrosive environments, general stainless applications (Paired with B8 studs)</td>
                                </tr>
                                <tr class="t-row">
                                    <td><strong>ASTM A194 Grade 8M</strong> (SS316)</td>
                                    <td>Marine environments, chemical processing (Paired with B8M studs)</td>
                                </tr>
                                <tr class="t-row">
                                    <td><strong>ASTM A194 Grade 4 / 7</strong></td>
                                    <td>Extreme high-temperature service / Sub-zero applications</td>
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
                                    alt="Carbon Steel Heavy Hex Nuts" loading="lazy" width="400"
                                    height="260">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0">GRADE 2H (CARBON STEEL)</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.austenitic-stainless-Steel') }}">
                                <img class="w-100" src="{{ asset('assets/images/product/STAINLESS-STEEL.webp') }}"
                                    alt="Stainless Steel Heavy Hex Nuts" loading="lazy" width="400"
                                    height="260">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0">STAINLESS STEEL (GRADE 8/8M)</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.duplex-and-super-duplex') }}">
                                <img class="w-100" src="{{ asset('assets/images/product/DUPLEX-SUPER.webp') }}"
                                    alt="Duplex and Super Duplex Nuts" loading="lazy"
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
                                    alt="Nickel Alloy Heavy Hex Nuts" loading="lazy" width="400"
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
                                    alt="Haynes Superalloy Nuts" loading="lazy"
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
                                    alt="Titanium Heavy Hex Nuts" loading="lazy"
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
                <h2>Applications of Heavy Hex Nuts</h2>
                <p class="text-center pb-3">
                    <strong class="text-black">Heavy Hex Nuts</strong> are the standard for high-stress connections across major industries:
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Pipeline Flanges</h5>
                        <ul>
                            <li>Securing raised face (RF) and ring-type joint (RTJ) flanges under high pressure.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-building"></i></div>
                        <h5>Structural Steel</h5>
                        <ul>
                            <li>Used with A325 and A490 structural bolts for bridge and building construction.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Oil & Gas Refineries</h5>
                        <ul>
                            <li>Fastening pressure vessels, heat exchangers, and high-temperature manifolds.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge"></i></div>
                        <h5>Power Generation</h5>
                        <ul>
                            <li>Securing steam turbines, boilers, and high-pressure steam lines.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Offshore Platforms</h5>
                        <ul>
                            <li>PTFE coated Grade 2H and 8M nuts are used to resist severe marine corrosion.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-water"></i></div>
                        <h5>Water Works</h5>
                        <ul>
                            <li>Large diameter valves and pump casings in municipal water treatment plants.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="mechanical" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
             <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Mechanical Properties – ASTM A194</h2>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr class="t-row">
                            <th>Grade</th>
                            <th>Proof Load Stress (MPa)</th>
                            <th>Hardness (Brinell HBW)</th>
                            <th>Hardness (Rockwell)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row">
                            <td>Grade 2H</td>
                            <td>1205 (for up to 1-1/2")</td>
                            <td>248 - 352</td>
                            <td>24 - 38 HRC</td>
                        </tr>
                        <tr class="t-row">
                            <td>Grade 2HM</td>
                            <td>1035</td>
                            <td>159 - 235</td>
                            <td>99 HRB - 22 HRC</td>
                        </tr>
                         <tr class="t-row">
                            <td>Grade 8 / 8M (Carbide Solution Treated)</td>
                            <td>550</td>
                            <td>126 - 300</td>
                            <td>60 HRB - 32 HRC</td>
                        </tr>
                    </tbody>
                </table>
            </div>
             <p class="text-center mt-2 small text-muted">*Grade 2H requires high proof load stress for heavy industrial use, while Grade 8/8M prioritizes corrosion resistance.</p>
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
                        <li class="list-group-item"><strong>Thread Tolerance:</strong> Unified Inch threads conform to ASME B1.1 Class 2B fit; Metric threads to ISO 965 Class 6H.</li>
                        <li class="list-group-item"><strong>Dimensional Tolerance:</strong> Strictly adheres to ASME B18.2.2 ensuring proper wrench fitment and bearing surface flatness.</li>
                        <li class="list-group-item"><strong>Overtapping for Galvanizing:</strong> Nuts that are Hot-Dip Galvanized (HDG) are tapped slightly oversize (overtapped) to accommodate the thickness of the zinc coating on the mating stud bolt.</li>
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
                        <h5>Extensive stock of A194 Grade 2H and Grade 8 nuts</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>100% Traceability and EN 10204 3.1 Certification</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Strict compliance with ASME B18.2.2 dimensions</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Global logistics and export packaging</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-file-earmark-text"></i></div>
                        <h5>In-house proof load and hardness testing</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-brush"></i></div>
                        <h5>Specialized PTFE & Xylan coating services</h5>
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
                                <h4>Why use a Heavy Hex Nut instead of a Standard Hex Nut?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Heavy hex nuts have a larger width across the flats and are slightly thicker. This provides a greater bearing surface against the flange face, preventing the nut from pulling through or deforming under the extreme tension required in high-pressure piping systems.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What stud bolt should be used with an ASTM A194 Grade 2H heavy hex nut?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Grade 2H nuts are most commonly paired with ASTM A193 Grade B7 stud bolts for high-temperature and high-pressure service.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What does "8-UN" mean in relation to heavy hex nuts?</h4>
                            </div>
                            <div class="accord-content">
                                <p>8-UN stands for 8 threads per inch. For heavy hex nuts and studs larger than 1 inch in diameter, the 8-UN thread series is standard (instead of UNC) to ensure consistent thread engagement and strength across larger sizes.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Are Heavy Hex Nuts reusable after being tightened in a flange?</h4>
                            </div>
                            <div class="accord-content">
                                <p>In critical high-pressure and high-temperature applications, it is generally recommended to replace heavy hex nuts and studs once they have been fully torqued and removed, as the threads may have yielded or deformed slightly.</p>
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
                <p>For further information, quotes, or custom manufacturing of Heavy Hex Nuts, <strong>Moksh Tubes & Fittings LLP</strong> is your dependable partner for industrial flanged fastening solutions.</p>
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
              "@id": "https://mokshtubes.com/#heavy-hex-nuts",
              "name": "Heavy Hex Nuts",
              "image": "https://mokshtubes.com/assets/images/product/flangs/FASTENERS.webp",
              "category": "Fasteners",
              "description": "Premium Heavy Hex Nuts (ASTM A194 Grade 2H, 8, 8M) for high-pressure structural and flanged piping connections.",
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
