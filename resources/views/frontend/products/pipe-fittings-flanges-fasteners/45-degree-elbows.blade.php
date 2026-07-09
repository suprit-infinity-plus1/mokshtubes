@extends('layouts.master')
@section('title', '45 Degree Elbow | Buttweld Pipe Elbows | Moksh Tubes')
<!-- 52 characters -->
@section('meta_description',
    'High-quality 45 Degree Pipe Elbows for altering flow direction in pipelines. Available in Stainless Steel, Carbon Steel, and Alloy Steel in seamless and welded forms.')
@section('meta_keywords',
    '45 Degree Elbow, Pipe Elbow, Buttweld Elbow, Stainless Steel Elbow, Carbon Steel Elbow, ASME B16.9')
@section('og_image', asset('assets/images/product/flangs/45-degree-elbows_11zon.jpg'))
@section('og_type', 'product')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/product/flangs/45-degree-elbows_11zon.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1 class="page-title">45 Degree Elbow</h1>
                        <p class="text-center mt-3 px-3 py-2 text-white position-relative" style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        A 45 Degree Elbow is a critical pipe fitting used to change the direction of flow in a piping system by 45 degrees. It provides a smoother flow path with less frictional resistance and pressure drop compared to a 90-degree elbow. At <a href="{{ route('index') }}" class="text-white text-decoration-underline">Moksh Tubes & Fittings LLP</a>, we manufacture and supply premium quality seamless and welded 45-degree elbows in carbon steel, stainless steel, alloy steel, and exotic metals, strictly adhering to ASME B16.9 and MSS-SP-43 standards for butt-welding fittings.
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
            <a href="#lr-vs-sr">LR vs SR Elbows</a> |
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
                <h2 class="fw-bold" style="color: #174268;">45 Degree Elbows</h2>
            </div>

            <div class="row align-items-center">
                <!-- Left Image -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('/assets/images/product/flangs/45-degree-elbows_11zon.jpg') }}"
                        alt="45 Degree Buttweld Elbows" class="img-fluid rounded shadow-sm" width="550"
                        height="350" loading="lazy">
                </div>

                <!-- Right Content -->
                <div class="col-md-6">
                    <p class="fs-6 mb-3 text-justify">
                        <strong class="text-black">45 Degree Elbows</strong> are utilized to offset pipe routing and bypass obstacles in complex industrial layouts. By altering the flow path by 45°, they minimize turbulence and fluid resistance, making them ideal for high-velocity or high-viscosity applications.
                    </p>

                    <p class="fs-6 mb-3 text-justify">
                        <a href="{{ route('index') }}">Moksh Tubes & Fittings LLP</a> is a renowned manufacturer,
                        supplier, and exporter of 45 Degree Buttweld Elbows in India. We cater to high-pressure pipeline requirements across <a href="{{ route('materials.austenitic-stainless-Steel') }}">Indian refineries</a> and
                        major Gulf / GCC nations including UAE, Saudi Arabia, Qatar, Oman, and Kuwait.
                    </p>

                    <p class="fs-6 text-justify">
                        Available in Long Radius (LR) configurations, our 45-degree elbows feature beveled ends for perfect penetration during butt welding, ensuring a permanent, leak-proof, and radiographically testable joint.
                    </p>

                </div>
            </div>
        </div>
    </section>

    {{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download 45 Degree Elbow Datasheet</h3>
            <p class="mb-3">
                Get the complete datasheet with dimensional specifications, weight charts, and material properties.
                Enter your email below to receive the PDF instantly.
            </p>

            <!-- Lead Capture Form -->
            <form id="leadForm" method="POST" action="https://mokshtubes.com/datasheet-leads-capture" class="mb-3">
                <input type="hidden" name="_token" value="WNVWvpO4YR2OqZaIJDl2mE3UfyreGys3Vp19brsc" autocomplete="off">
                <div class="row justify-content-center">
                    <input type="hidden" name="pdf" value="45-degree-elbow.pdf">
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
                                    <td><a href="{{ route('materials.engineering-Steels') }}">Carbon Steel</a>, <a href="{{ route('materials.austenitic-stainless-Steel') }}">Stainless Steel</a>, Alloy Steel, 
                                        <a href="{{ route('materials.duplex-and-super-duplex') }}">Duplex / Super Duplex
                                            Steel</a>, <a href="{{ route('materials.nickel-Based-Superalloys') }}">Nickel
                                            Alloys</a>, <a href="{{ route('materials.titanium') }}">Titanium</a>
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Size Range (Seamless)</td>
                                    <td>1/2" NB to 24" NB</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Size Range (Welded)</td>
                                    <td>24" NB to 48" NB (and above)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Wall Thickness (Schedule)</td>
                                    <td>Sch 10, Sch 40, Sch 80, Sch 160, XXS (Custom up to 100mm thick)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Radius Type</td>
                                    <td>Long Radius (LR) - Standard for 45 Degree</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Dimensional Standards</td>
                                    <td>ASME B16.9, MSS-SP-43, EN 10253, DIN 2605</td>
                                </tr>
                                <tr class="t-row">
                                    <td>End Connection</td>
                                    <td>Beveled Ends for Butt-Welding (ASME B16.25)</td>
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
                <h2 class="fw-bold" style="color: #174268;">Dimensional Data (ASME B16.9)</h2>
            </div>

            <div class="section-title center mb-3">
                <h3 class="text-center mb-0" style="color: #db7227;">45 Degree Long Radius (LR) Elbow Dimensions</h3>
            </div>
            
            <div class="text-center mb-4">
                <img src="{{ asset('assets/images/product/flangs/45-degree-elbows_11zon.jpg') }}" alt="45 Degree Elbow Dimensions" class="img-fluid border p-2 bg-white" style="max-width: 600px; border-radius: 8px;">
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr class="t-row">
                            <th>Nominal Pipe Size (NPS)</th>
                            <th>Outside Diameter (OD) (mm)</th>
                            <th>Center to End (A) (mm)</th>
                            <th>Approx. Weight (Sch 40) (kg)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row"><td>1/2"</td><td>21.3</td><td>16</td><td>0.04</td></tr>
                        <tr class="t-row"><td>3/4"</td><td>26.7</td><td>19</td><td>0.05</td></tr>
                        <tr class="t-row"><td>1"</td><td>33.4</td><td>22</td><td>0.09</td></tr>
                        <tr class="t-row"><td>1-1/2"</td><td>48.3</td><td>29</td><td>0.18</td></tr>
                        <tr class="t-row"><td>2"</td><td>60.3</td><td>35</td><td>0.31</td></tr>
                        <tr class="t-row"><td>3"</td><td>88.9</td><td>51</td><td>0.90</td></tr>
                        <tr class="t-row"><td>4"</td><td>114.3</td><td>64</td><td>1.73</td></tr>
                        <tr class="t-row"><td>6"</td><td>168.3</td><td>95</td><td>4.50</td></tr>
                        <tr class="t-row"><td>8"</td><td>219.1</td><td>127</td><td>8.90</td></tr>
                        <tr class="t-row"><td>10"</td><td>273.0</td><td>159</td><td>14.80</td></tr>
                        <tr class="t-row"><td>12"</td><td>323.8</td><td>190</td><td>22.50</td></tr>
                    </tbody>
                </table>
            </div>
            <p class="text-center mt-2 small text-muted">*Dimensions conform to ASME B16.9. Center to End (A) dimension is measured from the center line to the face of the fitting.</p>
        </div>
    </section>

    <section id="lr-vs-sr" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">45 Degree Elbow vs 90 Degree Elbow</h2>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-12">
                     <p class="fs-6 mb-3 text-justify">
                        While 90-degree elbows are the most common, 45-degree elbows offer distinct fluid dynamic advantages:
                    </p>

                    <div class="table-responsive ">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Feature</th>
                                    <th>45 Degree Elbow</th>
                                    <th>90 Degree Elbow</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td class="fw-bold">Flow Resistance</td>
                                    <td>Lower friction and pressure drop.</td>
                                    <td>Higher friction due to sharper turn.</td>
                                </tr>
                                <tr class="t-row">
                                    <td class="fw-bold">Turbulence</td>
                                    <td>Minimal turbulence.</td>
                                    <td>Higher turbulence, especially at high velocities.</td>
                                </tr>
                                <tr class="t-row">
                                    <td class="fw-bold">Space Requirement</td>
                                    <td>Requires a longer diagonal offset footprint.</td>
                                    <td>More compact in square/rectangular spaces.</td>
                                </tr>
                                <tr class="t-row">
                                    <td class="fw-bold">Primary Application</td>
                                    <td>Slurry pipelines, gravity drains, bypassing obstacles.</td>
                                    <td>Standard right-angle pipe routing.</td>
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
                                    <th>Material Type</th>
                                    <th>ASTM Specification & Grades</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td>Carbon Steel</td>
                                    <td>ASTM A234 WPB, WPC, MSS-SP-75 WPHY 42, 46, 52, 60, 65, 70</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Low Temp Carbon Steel (LTCS)</td>
                                    <td>ASTM A420 WPL6, WPL3</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Alloy Steel</td>
                                    <td>ASTM A234 WP1, WP5, WP9, WP11, WP22, WP91</td>
                                </tr>
                                <tr class="t-row">
                                    <td><a href="{{ route('materials.austenitic-stainless-Steel') }}">Stainless Steel</a></td>
                                    <td>ASTM A403 WP304/304L, WP316/316L, WP321, WP347</td>
                                </tr>
                                <tr class="t-row">
                                    <td><a href="{{ route('materials.duplex-and-super-duplex') }}">Duplex & Super Duplex</a></td>
                                    <td>ASTM A815 UNS S31803, S32205, S32750, S32760</td>
                                </tr>
                                <tr class="t-row">
                                    <td><a href="{{ route('materials.nickel-Based-Superalloys') }}">Nickel Alloys</a></td>
                                    <td>Inconel 600/625, Hastelloy C276, Monel 400, Alloy 20</td>
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
                                    alt="Carbon Steel 45 Degree Elbow" loading="lazy" width="400"
                                    height="260">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0">CARBON STEEL (A234 WPB)</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.austenitic-stainless-Steel') }}">
                                <img class="w-100" src="{{ asset('assets/images/product/STAINLESS-STEEL.webp') }}"
                                    alt="Stainless Steel 45 Degree Elbow" loading="lazy" width="400"
                                    height="260">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0">STAINLESS STEEL (A403)</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.duplex-and-super-duplex') }}">
                                <img class="w-100" src="{{ asset('assets/images/product/DUPLEX-SUPER.webp') }}"
                                    alt="Duplex 45 Degree Elbow" loading="lazy"
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
                                    alt="Nickel Alloy 45 Degree Elbow" loading="lazy" width="400"
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
                            <a class="w-100" href="{{ route('materials.engineering-Steels') }}">
                                <img class="w-100" src="{{ asset('assets/images/product/RARE-TO-ALLOYS.webp') }}"
                                    alt="Alloy Steel 45 Degree Elbow" loading="lazy"
                                    width="400" height="260">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0">ALLOY STEEL (WP11/WP22)</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.titanium') }}">
                                <img class="w-100" src="{{ asset('assets/images/product/TITANIUM-ALLOYS.webp') }}"
                                    alt="Titanium 45 Degree Elbow" loading="lazy"
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
                <h2>Applications of 45 Degree Elbows</h2>
                <p class="text-center pb-3">
                    <strong class="text-black">45 Degree Elbows</strong> are chosen when minimizing pressure loss is critical:
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Oil & Gas Refineries</h5>
                        <ul>
                            <li>Routing pipelines around existing infrastructure with minimal fluid turbulence.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Petrochemical Plants</h5>
                        <ul>
                            <li>Transporting highly viscous or volatile chemicals where smooth flow is required.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-water"></i></div>
                        <h5>Water & Slurry Transport</h5>
                        <ul>
                            <li>Used in municipal water treatment and mining to prevent clogs and sediment buildup at corners.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge"></i></div>
                        <h5>Power Generation</h5>
                        <ul>
                            <li>High-pressure steam routing in thermal and nuclear power plants using Alloy Steel (WP91).</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fan"></i></div>
                        <h5>HVAC & District Cooling</h5>
                        <ul>
                            <li>Chilled water pipelines requiring efficient, low-friction routing.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Offshore & Marine</h5>
                        <ul>
                            <li>Duplex stainless elbows used in seawater desalination and offshore platforms.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="manufacturing" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-3 mt-4">
                <h2 class="fw-bold" style="color: #174268;">Manufacturing Process</h2>
                <p class="text-justify">Our buttweld elbows are manufactured using hot induction bending or cold forming for maximum integrity.</p>
            </div>

            <div class="table-responsive mt-3">
                <table class="table table-bordered table-striped text-center align-middle">
                    <thead class="table-dark">
                        <tr class="t-row">
                            <th class="fw-bold">Process Step</th>
                            <th class="fw-bold">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row">
                            <td>Mandrel Forming (Hot Forming)</td>
                            <td>Seamless pipes are pushed over a heated die (mandrel) to form the curve while strictly controlling wall thinning on the extrados.</td>
                        </tr>
                        <tr class="t-row">
                            <td>Cold Forming</td>
                            <td>For smaller sizes, pipes are cold-pressed in hydraulic dies.</td>
                        </tr>
                        <tr class="t-row">
                            <td>Heat Treatment</td>
                            <td>Elbows are Normalized or Quenched & Tempered to relieve internal stresses and restore mechanical properties according to ASTM material standards.</td>
                        </tr>
                        <tr class="t-row">
                            <td>Machining (Beveling)</td>
                            <td>The ends are precision machined to specific bevel angles (usually 37.5° ± 2.5°) per ASME B16.25 for optimal welding.</td>
                        </tr>
                        <tr class="t-row">
                            <td>Non-Destructive Testing</td>
                            <td>100% Visual, Dimensional, Ultrasonic (UT), and Magnetic Particle Inspection (MPI) to ensure zero cracks or defects.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section id="mechanical" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
             <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Mechanical Properties (Carbon Steel A234 WPB)</h2>
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
                            <td>ASTM A234 WPB</td>
                            <td>415 - 585</td>
                            <td>240</td>
                            <td>22 (longitudinal)</td>
                            <td>197</td>
                        </tr>
                        <tr class="t-row">
                            <td>ASTM A234 WPC</td>
                            <td>485 - 655</td>
                            <td>275</td>
                            <td>20 (longitudinal)</td>
                            <td>223</td>
                        </tr>
                    </tbody>
                </table>
            </div>
             <p class="text-center mt-2 small text-muted">*Properties must match the corresponding seamless pipe specification (e.g., A106 Gr. B for A234 WPB).</p>
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
                        <li class="list-group-item"><strong>Dimensional Tolerances:</strong> Adhere strictly to ASME B16.9. Center-to-end dimension tolerance is typically ±2.0 mm for sizes ≤ NPS 8.</li>
                        <li class="list-group-item"><strong>Wall Thickness:</strong> Wall thickness on the outer curve (extrados) must not be less than 87.5% of the nominal wall thickness.</li>
                        <li class="list-group-item"><strong>Bevel Ends:</strong> Beveled per ASME B16.25 to ensure consistent weld penetration for X-ray quality pipe joints.</li>
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
                        <h5>100% compliant with ASME B16.9</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Seamless elbows up to 24" readily available</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Precision beveled ends for perfect welding</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Exporting to GCC and global markets</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-file-earmark-text"></i></div>
                        <h5>Complete EN 10204 3.1 Certification</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-braces"></i></div>
                        <h5>Custom wall thicknesses (Schedule 160 / XXS)</h5>
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
                                <h4>When should a 45 Degree Elbow be used instead of a 90 Degree Elbow?</h4>
                            </div>
                            <div class="accord-content">
                                <p>A 45 degree elbow is used when you need to offset a pipe but want to minimize pressure drop and fluid friction. It creates a gentler turn, which is especially important in high-velocity pipelines, slurry transport, or gravity-fed drainage systems where a 90 degree turn might cause clogs or excessive turbulence.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Are 45 Degree Elbows available in Short Radius (SR)?</h4>
                            </div>
                            <div class="accord-content">
                                <p>No, standard 45 degree elbows are manufactured only as Long Radius (LR) according to ASME B16.9. Short Radius (SR) is practically only applicable to 90 degree and 180 degree elbows.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What does "WPB" stand for in ASTM A234 WPB?</h4>
                            </div>
                            <div class="accord-content">
                                <p>WPB stands for "Wrought Pipe Grade B". Wrought indicates it is formed from a pipe (not cast). Grade B signifies the mechanical strength (matching ASTM A106 Grade B carbon steel pipe).</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why are the ends beveled?</h4>
                            </div>
                            <div class="accord-content">
                                <p>The ends are machined with a bevel (usually 37.5 degrees) to facilitate V-groove butt welding. This allows the welding filler metal to fully penetrate the joint, resulting in a weld that is as strong as the pipe itself.</p>
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
                <p>For further information, CAD models, quotes, or custom thickness requirements for 45 Degree Elbows, <strong>Moksh Tubes & Fittings LLP</strong> is your trusted partner for premium buttweld fittings.</p>
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
              "@id": "https://mokshtubes.com/#45-degree-elbow",
              "name": "45 Degree Buttweld Elbow",
              "image": "https://mokshtubes.com/assets/images/product/flangs/45-degree-elbows_11zon.jpg",
              "category": "Pipe Fittings",
              "description": "Premium 45 Degree Pipe Elbows (ASME B16.9) in Carbon Steel (A234 WPB) and Stainless Steel for high-pressure pipeline routing.",
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
