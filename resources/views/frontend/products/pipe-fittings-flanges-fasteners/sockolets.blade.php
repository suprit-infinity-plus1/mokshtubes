@extends('layouts.master')
@section('title', 'Sockolet | Socket Weld Branch Fitting | Moksh Tubes')
<!-- 52 characters -->
@section('meta_description',
    'Premium Sockolets (Socket Weld Olets) for high-pressure 90-degree branch connections. Available in 3000# and 6000# ratings in Stainless, Carbon, and Alloy Steel.')
@section('meta_keywords',
    'Sockolet, Socket Weld Olet, Branch Connection, MSS-SP-97, 3000# Sockolet, Stainless Steel Sockolet, Carbon Steel Sockolet')
@section('og_image', asset('assets/images/product/flangs/FITTINGS.webp'))
@section('og_type', 'product')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/product/flangs/FITTINGS.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1 class="page-title">Sockolet</h1>
                        <p class="text-center mt-3 px-3 py-2 text-white position-relative" style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        A Sockolet is a forged pipe fitting used to create a highly reinforced 90-degree branch connection from a larger run pipe to a smaller branch pipe. Unlike a Weldolet, it features a socket-weld connection on the branch side, allowing the branch pipe to be inserted into a recess before fillet welding, ensuring perfect alignment without the need for beveling. At <a href="{{ route('index') }}" class="text-white text-decoration-underline">Moksh Tubes & Fittings LLP</a>, we supply high-pressure 3000# and 6000# Sockolets conforming strictly to MSS-SP-97 and ASME B16.11 standards.
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
            <a href="#sockolet-vs-weldolet">Sockolet vs Weldolet</a> |
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
                <h2 class="fw-bold" style="color: #174268;">Sockolets</h2>
            </div>

            <div class="row align-items-center">
                <!-- Left Image -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('/assets/images/product/flangs/FITTINGS.webp') }}"
                        alt="Forged Sockolets" class="img-fluid rounded shadow-sm" width="550"
                        height="350" loading="lazy">
                </div>

                <!-- Right Content -->
                <div class="col-md-6">
                    <p class="fs-6 mb-3 text-justify">
                        <strong class="text-black">Sockolets</strong> provide a self-reinforcing, fully integrated branch connection that is vastly superior to cutting a hole in the run pipe and welding in a stub. The base of the Sockolet is profiled (contoured) to perfectly match the outer curvature of the run pipe, while the branch side features a standardized socket bore.
                    </p>

                    <p class="fs-6 mb-3 text-justify">
                        <a href="{{ route('index') }}">Moksh Tubes & Fittings LLP</a> is a leading manufacturer,
                        supplier, and exporter of Sockolets in India. We cater to critical small-bore branching requirements for <a href="{{ route('materials.austenitic-stainless-Steel') }}">Indian refineries</a> and
                        major Gulf / GCC nations including UAE, Saudi Arabia, Qatar, Oman, and Kuwait.
                    </p>

                    <p class="fs-6 text-justify">
                        Available in Class 3000 and Class 6000 pressure ratings, our Sockolets are hot-forged from premium steel billets, completely eliminating porosity and ensuring the highest structural integrity for high-pressure, high-temperature fluid lines.
                    </p>

                </div>
            </div>
        </div>
    </section>

    {{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Sockolet Datasheet</h3>
            <p class="mb-3">
                Get the complete datasheet with dimensional specifications (3000# & 6000#), consolidation charts, and material properties.
                Enter your email below to receive the PDF instantly.
            </p>

            <!-- Lead Capture Form -->
            <form id="leadForm" method="POST" action="https://mokshtubes.com/datasheet-leads-capture" class="mb-3">
                <input type="hidden" name="_token" value="WNVWvpO4YR2OqZaIJDl2mE3UfyreGys3Vp19brsc" autocomplete="off">
                <div class="row justify-content-center">
                    <input type="hidden" name="pdf" value="sockolet.pdf">
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
                                    <td>Run Pipe Size (Header)</td>
                                    <td>1/2" to 36" (and larger / custom consolidations)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Branch Pipe Size</td>
                                    <td>1/8" to 4" (Standard for socket-weld fittings)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Pressure Rating</td>
                                    <td>Class 3000 (Sch 80), Class 6000 (Sch 160), Class 9000 (XXS)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Connection Type</td>
                                    <td>Base: Welded to Run Pipe | Branch: Socket Weld (SW) to Branch Pipe</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Dimensional Standards</td>
                                    <td>MSS-SP-97, ASME B16.11 (for socket dimensions)</td>
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
                <h3 class="text-center mb-0" style="color: #db7227;">Class 3000 Sockolet Dimensions</h3>
            </div>
            
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr class="t-row">
                            <th>Branch Size (NPS)</th>
                            <th>Face to Run Pipe (A) (mm)</th>
                            <th>Socket Bore Diameter (B) (mm)</th>
                            <th>Socket Depth (C) (mm)</th>
                            <th>Approx. Weight (kg)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row"><td>1/2"</td><td>25.4</td><td>21.8</td><td>9.5</td><td>0.14</td></tr>
                        <tr class="t-row"><td>3/4"</td><td>27.0</td><td>27.2</td><td>12.5</td><td>0.20</td></tr>
                        <tr class="t-row"><td>1"</td><td>33.3</td><td>33.9</td><td>12.5</td><td>0.38</td></tr>
                        <tr class="t-row"><td>1-1/4"</td><td>33.3</td><td>42.7</td><td>12.5</td><td>0.60</td></tr>
                        <tr class="t-row"><td>1-1/2"</td><td>35.0</td><td>48.8</td><td>12.5</td><td>0.75</td></tr>
                        <tr class="t-row"><td>2"</td><td>38.1</td><td>61.2</td><td>16.0</td><td>1.25</td></tr>
                        <tr class="t-row"><td>2-1/2"</td><td>46.0</td><td>73.9</td><td>16.0</td><td>2.10</td></tr>
                        <tr class="t-row"><td>3"</td><td>51.0</td><td>89.8</td><td>16.0</td><td>3.05</td></tr>
                        <tr class="t-row"><td>4"</td><td>57.0</td><td>115.2</td><td>19.0</td><td>5.10</td></tr>
                    </tbody>
                </table>
            </div>
            <p class="text-center mt-2 small text-muted">*Dimensions based on MSS-SP-97. The base curvature varies depending on the specific Run Pipe consolidation (e.g., a 1" branch on a 6"-3" run pipe).</p>
        </div>
    </section>

    <section id="sockolet-vs-weldolet" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Sockolet vs Weldolet</h2>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-12">
                     <p class="fs-6 mb-3 text-justify">
                        Both are branch connection fittings (Olets), but they differ entirely in how they connect to the smaller branch pipe:
                    </p>

                    <div class="table-responsive ">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Feature</th>
                                    <th>Sockolet</th>
                                    <th>Weldolet</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td class="fw-bold">Branch Connection Type</td>
                                    <td>Socket Weld (SW). The branch pipe slides into a recessed socket.</td>
                                    <td>Butt Weld (BW). The branch pipe is welded edge-to-edge.</td>
                                </tr>
                                <tr class="t-row">
                                    <td class="fw-bold">Welding Process</td>
                                    <td>Requires a fillet weld around the socket lip.</td>
                                    <td>Requires full penetration V-groove butt welding.</td>
                                </tr>
                                <tr class="t-row">
                                    <td class="fw-bold">Branch Pipe Preparation</td>
                                    <td>Pipe ends are cut square (plain end), no beveling needed.</td>
                                    <td>Pipe ends must be precisely beveled.</td>
                                </tr>
                                <tr class="t-row">
                                    <td class="fw-bold">Typical Size Range</td>
                                    <td>Small bore (typically 1/8" to 4" max).</td>
                                    <td>Small to very large bore (1/2" up to 36"+).</td>
                                </tr>
                                <tr class="t-row">
                                    <td class="fw-bold">Primary Advantage</td>
                                    <td>Faster, easier fit-up and welding without slag entering the pipe.</td>
                                    <td>Highest strength, easily radiographed (X-ray tested).</td>
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
    <section class="our-services">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.engineering-Steels') }}">
                                <img class="w-100" src="{{ asset('assets/images/product/CARBON-ALLOYS.webp') }}"
                                    alt="Carbon Steel Sockolet" loading="lazy" width="400"
                                    height="260">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0">CARBON STEEL (A105N)</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.austenitic-stainless-Steel') }}">
                                <img class="w-100" src="{{ asset('assets/images/product/STAINLESS-STEEL.webp') }}"
                                    alt="Stainless Steel Sockolet" loading="lazy" width="400"
                                    height="260">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0">STAINLESS STEEL (F316L)</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.duplex-and-super-duplex') }}">
                                <img class="w-100" src="{{ asset('assets/images/product/DUPLEX-SUPER.webp') }}"
                                    alt="Duplex Sockolet" loading="lazy"
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
                                    alt="Nickel Alloy Sockolet" loading="lazy" width="400"
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
                                    alt="Alloy Steel Sockolet" loading="lazy"
                                    width="400" height="260">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0">ALLOY STEEL (F11/F22)</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.titanium') }}">
                                <img class="w-100" src="{{ asset('assets/images/product/TITANIUM-ALLOYS.webp') }}"
                                    alt="Titanium Sockolet" loading="lazy"
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
                <h2>Applications of Sockolets</h2>
                <p class="text-center pb-3">
                    <strong class="text-black">Sockolets</strong> are specifically used for creating small-bore branch lines from larger high-pressure headers:
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-speedometer2"></i></div>
                        <h5>Instrumentation & Control</h5>
                        <ul>
                            <li>Installing pressure gauges, thermowells, and flow meters on main process pipelines.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Oil & Gas Refineries</h5>
                        <ul>
                            <li>Branching off small sampling lines, vent lines, and drain lines from large crude oil headers.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fan"></i></div>
                        <h5>Hydraulic Systems</h5>
                        <ul>
                            <li>High-pressure 6000# Sockolets are used for branching off thick-walled hydraulic and lubrication lines.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge"></i></div>
                        <h5>Power Generation</h5>
                        <ul>
                            <li>Alloy steel (F11, F22, F91) Sockolets for tapping high-pressure steam distribution headers.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-prescription2"></i></div>
                        <h5>Chemical Processing</h5>
                        <ul>
                            <li>Stainless steel and Exotic alloy Sockolets ensure leak-proof, corrosion-resistant branches for caustic chemicals.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fire"></i></div>
                        <h5>Fire Protection Systems</h5>
                        <ul>
                            <li>Connecting sprinkler lines directly to the main firewater distribution headers.</li>
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
                <p class="text-justify">Our Sockolets are exclusively manufactured via closed-die hot forging to guarantee a continuous grain structure.</p>
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
                            <td>Billet Cutting & Heating</td>
                            <td>High-quality steel bars are cut to calculated billet sizes and heated to forging temperature (e.g., 1200°C for carbon steel).</td>
                        </tr>
                        <tr class="t-row">
                            <td>Closed-Die Forging</td>
                            <td>The hot billet is pressed between two dies using immense force to form the rough shape of the Olet, aligning the metal grain for maximum strength.</td>
                        </tr>
                        <tr class="t-row">
                            <td>Heat Treatment</td>
                            <td>Forgings are Normalized (A105N) or Solution Annealed (Stainless) to refine the grain structure and relieve forging stresses.</td>
                        </tr>
                        <tr class="t-row">
                            <td>CNC Machining</td>
                            <td>The base is profiled to match the specific Run Pipe consolidation. The internal bore and the socket recess are precision machined to MSS-SP-97 and ASME B16.11 tolerances.</td>
                        </tr>
                        <tr class="t-row">
                            <td>Quality Inspection</td>
                            <td>100% Dimensional checks, Magnetic Particle Inspection (MPI) for surface cracks, and Hardness Testing.</td>
                        </tr>
                    </tbody>
                </table>
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
             <p class="text-center mt-2 small text-muted">*A105N indicates the forging has been Normalized, which is critical for low-temperature toughness in pressure piping.</p>
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
                        <li class="list-group-item"><strong>Dimensional Tolerances:</strong> Adhere strictly to MSS-SP-97. The socket bore dimensions must also comply with ASME B16.11 for socket-weld fittings.</li>
                        <li class="list-group-item"><strong>Consolidation:</strong> The profiled base of the Sockolet is designed to fit a range of run pipe sizes (e.g., 6"-3"). A single Sockolet can correctly fit any run pipe diameter within its consolidation range.</li>
                        <li class="list-group-item"><strong>Gap Requirement:</strong> During installation, a 1/16" (1.6mm) gap must be maintained between the end of the branch pipe and the bottom of the socket to prevent thermal expansion stresses from cracking the fillet weld.</li>
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
                        <h5>100% hot-forged, zero-defect fittings</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Extensive inventory of 3000# and 6000# ratings</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Precision CNC machined sockets and bases</h5>
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
                                <h4>Why use a Sockolet instead of a Weldolet?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Sockolets are preferred for small diameter branch pipes (typically under 2") because socket welding is much easier and faster than full penetration butt-welding. The socket automatically aligns the branch pipe, and the welder does not have to worry about weld slag falling inside the pipeline (which is a risk with butt-welding small pipes).</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What is the difference between a 3000# and a 6000# Sockolet?</h4>
                            </div>
                            <div class="accord-content">
                                <p>These classes designate the pressure rating and wall thickness. A 3000# Sockolet is designed to match the wall thickness of a Schedule 80 branch pipe. A 6000# Sockolet matches the thickness of a Schedule 160 branch pipe and is much thicker and heavier to withstand higher pressures.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What does the "consolidation" mean on a Sockolet, like 8"-3" x 1"?</h4>
                            </div>
                            <div class="accord-content">
                                <p>The base curve of a Sockolet can fit a range of run pipe sizes. An "8-3 x 1" Sockolet has a base machined to fit any run pipe from 3" to 8" in diameter, while providing a 1" socket branch. This consolidation drastically reduces the inventory needed.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why must I leave a gap when welding a pipe into a Sockolet?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Per ASME standards, a 1/16" gap must be left between the end of the pipe and the bottom of the socket recess before welding. If the pipe is pushed tight against the bottom, thermal expansion during welding (or in service) will cause massive stress and crack the fillet weld.</p>
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
                <p>For further information, technical specifications, quotes, or custom alloy requirements for Sockolets, <strong>Moksh Tubes & Fittings LLP</strong> is your trusted manufacturer for forged branch connections.</p>
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
              "@id": "https://mokshtubes.com/#sockolet",
              "name": "Sockolet (Socket Weld Olet)",
              "image": "https://mokshtubes.com/assets/images/product/flangs/FITTINGS.webp",
              "category": "Forged Fittings",
              "description": "High-pressure forged Sockolets (MSS-SP-97, 3000#, 6000#) for small-bore branching. Available in Carbon Steel (A105N) and Stainless Steel.",
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
