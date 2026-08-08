@extends('layouts.master')
@section('title', '90 Degree Bend Manufacturer, Supplier & Exporter in India | SS, CS & Alloy Steel')
@section('meta_description', 'Moksh Tubes & Fittings LLP is a leading manufacturer, supplier & exporter of 90 Degree
    Bends in Stainless Steel, Carbon Steel, Alloy Steel, Duplex & Super Duplex. Available in ASME B16.49 & B16.9 standards
    with worldwide delivery.')
@section('meta_keywords', '90 Degree Bend Manufacturer in India, 90 Degree Bend Supplier, 90 Degree Bend Exporter,
    Stainless Steel 90 Degree Bend, Carbon Steel 90 Degree Bend, Alloy Steel 90 Degree Bend, Duplex 90 Degree Bend, Super
    Duplex 90 Degree Bend, Long Radius 90 Degree Bend, Buttweld 90 Degree Bend, Pipe Bend Manufacturer, ASME B16.49 Bend,
    ASME B16.9 Bend, Industrial Pipe Bend, Seamless 90 Degree Bend, Welded 90 Degree Bend')
@section('og_image', asset('assets/images/product/flangs/90-degree-elbows_11zon.jpeg'))
@section('og_title', '90 Degree Bend Manufacturer, Supplier & Exporter in India | Moksh Tubes')
@section('og_description', 'Buy premium quality 90 Degree Bends in Stainless Steel, Carbon Steel, Alloy Steel, Duplex &
    Super Duplex from Moksh Tubes & Fittings LLP. Fast delivery across India & worldwide.')
@section('twitter_title', '90 Degree Bend Manufacturer in India | Moksh Tubes')
@section('twitter_description', 'Leading manufacturer, supplier & exporter of Stainless Steel, Carbon Steel & Alloy
    Steel 90 Degree Bends with global shipping.')
@section('og_type', 'product')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area"
        style="background-image: url(/assets/images/product/flangs/90-degree-elbows_11zon.jpeg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1 class="page-title">90 Degree Bend Manufacturer, Supplier & Exporter in India</h1>
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        90 Degree Bends are high-quality pipe fittings designed to change the direction of fluid flow by 90
                        degrees while providing a smoother flow path than standard elbows. They are commonly used in
                        industrial piping systems where a larger bending radius helps reduce pressure loss and improve flow
                        efficiency. At Moksh Tubes & Fittings LLP, we manufacture, supply, and export premium-quality 90
                        Degree Bends in stainless steel, carbon steel, alloy steel, duplex, and super duplex materials. Our
                        bends are manufactured to international standards, ensuring superior strength, corrosion resistance,
                        and long-lasting performance for demanding industrial applications.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Navigation -->
    <div class="sticky-top bg-white border-bottom material-tabs w-100 shadow-sm">
        <div class="container text-center py-2">
            <a href="#overview">Overview</a> |
            <a href="#specifications">Specifications</a> |
            <!-- <a href="#chemical-composition">Chemical Composition</a> | -->
            <a href="#dimensions">Dimensions</a> |
            <a href="#types">Grades</a> |
            <a href="#applications">Applications</a> |
            <a href="#features">Features</a> |
            <a href="#mechanical-properties">Mechanical</a> |
            <a href="#why-choose-us">Why Choose Us</a> |
            <a href="#faq">FAQ</a>
        </div>
    </div>

    <section id="overview" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Product Overview</h2>
            </div>

            <div class="row align-items-center">
                <!-- Left Image -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('/assets/images/product/flangs/90-degree-elbows_11zon.jpeg') }}"
                        alt="90 Degree Bend Manufacturer in India" class="img-fluid rounded shadow-sm" width="550"
                        height="350" loading="lazy">
                </div>

                <!-- Right Content -->
                <div class="col-md-6">
                    <p class="fs-6 mb-3 text-justify">
                        A <strong>90 Degree Bend</strong> is a pipe fitting used to redirect the flow of liquids, gases, or
                        steam by 90 degrees with a larger radius than a standard elbow. This larger bend radius minimizes
                        turbulence, reduces pressure drop, and improves flow efficiency, making it ideal for high-flow and
                        high-pressure piping systems. These bends are widely used in oil & gas, chemical processing, power
                        plants, water treatment, marine, petrochemical, and industrial process piping.
                    </p>
                    <p class="fs-6 mb-3 text-justify">
                        At <a href="{{ route('index') }}">Moksh Tubes & Fittings LLP</a>, we manufacture 90 Degree Bends in
                        various sizes, wall thicknesses, and material grades to meet the requirements of industrial projects
                        in India and international export markets. Our products undergo strict quality inspections to ensure
                        reliable performance, dimensional accuracy, and long service life.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- datasheet --}}


    <!-- Datasheet Download -->
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download 90 Degree Bend Datasheet</h3>
            <p class="mb-3">
                Get the complete 90 Degree Bend datasheet with chemical composition,
                mechanical properties, heat treatment details, and applications.
                Enter your email to receive the PDF instantly.
            </p>

            <!-- Lead Capture Form -->
            <form id="leadForm" method="POST" action="{{ route('lead.capture') }}" class="mb-3">
                @csrf

                <input type="hidden" name="page_path" value="{{ $slug }}">

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
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Specifications</h2>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>Specification</th>
                            <th>Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Product</td>
                            <td>90 Degree Bend</td>
                        </tr>
                        <tr>
                            <td>Standards</td>
                            <td>ASME B16.49, ASME B16.9, ASTM</td>
                        </tr>
                        <tr>
                            <td>Material</td>
                            <td>Stainless Steel, Carbon Steel, Alloy Steel, Duplex & Super Duplex</td>
                        </tr>
                        <tr>
                            <td>Size Range</td>
                            <td>½" NB to 48" NB</td>
                        </tr>
                        <tr>
                            <td>Schedule</td>
                            <td>SCH 10, SCH 20, SCH 40, SCH 80, SCH 160 & XXS</td>
                        </tr>
                        <tr>
                            <td>Type</td>
                            <td>Seamless & Welded</td>
                        </tr>
                        <tr>
                            <td>Bend Radius</td>
                            <td>3D, 5D, 10D & Custom Radius</td>
                        </tr>
                        <tr>
                            <td>End Connection</td>
                            <td>Butt Weld</td>
                        </tr>
                        <tr>
                            <td>Surface Finish</td>
                            <td>Pickled, Passivated, Shot Blasted or Polished</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>



    <section id="dimensions" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Size & Weight Chart</h2>
                <p class="text-center">The dimensions and approximate weights of 90 Degree Bends vary depending on the
                    nominal pipe size, schedule, and bend radius. Below is a standard reference chart for Long Radius (3D)
                    90 Degree Bends.</p>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>Nominal Size (NB)</th>
                            <th>Outside Diameter (mm)</th>
                            <th>3D Radius (mm)</th>
                            <th>Approx. Weight (kg)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>½" (15 NB)</td>
                            <td>21.3</td>
                            <td>45</td>
                            <td>0.15</td>
                        </tr>
                        <tr>
                            <td>¾" (20 NB)</td>
                            <td>26.7</td>
                            <td>60</td>
                            <td>0.22</td>
                        </tr>
                        <tr>
                            <td>1" (25 NB)</td>
                            <td>33.4</td>
                            <td>75</td>
                            <td>0.35</td>
                        </tr>
                        <tr>
                            <td>1¼" (32 NB)</td>
                            <td>42.2</td>
                            <td>95</td>
                            <td>0.58</td>
                        </tr>
                        <tr>
                            <td>1½" (40 NB)</td>
                            <td>48.3</td>
                            <td>120</td>
                            <td>0.82</td>
                        </tr>
                        <tr>
                            <td>2" (50 NB)</td>
                            <td>60.3</td>
                            <td>150</td>
                            <td>1.25</td>
                        </tr>
                        <tr>
                            <td>2½" (65 NB)</td>
                            <td>73.0</td>
                            <td>195</td>
                            <td>2.05</td>
                        </tr>
                        <tr>
                            <td>3" (80 NB)</td>
                            <td>88.9</td>
                            <td>240</td>
                            <td>3.10</td>
                        </tr>
                        <tr>
                            <td>4" (100 NB)</td>
                            <td>114.3</td>
                            <td>300</td>
                            <td>5.25</td>
                        </tr>
                        <tr>
                            <td>6" (150 NB)</td>
                            <td>168.3</td>
                            <td>450</td>
                            <td>11.80</td>
                        </tr>
                        <tr>
                            <td>8" (200 NB)</td>
                            <td>219.1</td>
                            <td>600</td>
                            <td>22.40</td>
                        </tr>
                        <tr>
                            <td>10" (250 NB)</td>
                            <td>273.0</td>
                            <td>750</td>
                            <td>37.80</td>
                        </tr>
                        <tr>
                            <td>12" (300 NB)</td>
                            <td>323.9</td>
                            <td>900</td>
                            <td>56.50</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="text-center mt-3">Note: Dimensions and weights are approximate and may vary based on the selected
                material grade, wall thickness (Schedule), manufacturing standard, and bend radius (3D, 5D, 10D, or custom).
                Custom sizes and dimensions are available on request.</p>
        </div>
    </section>

    <section id="types" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Grades & Equivalent</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card p-4 shadow-sm mb-4">
                        <h4 class="text-center" style="color: #db7227;">Available Grades</h4>
                        <ul class="list-group list-group-flush mt-3">
                            <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i> Stainless
                                Steel 304 / 304L</li>
                            <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i> Stainless
                                Steel 316 / 316L</li>
                            <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i> Carbon
                                Steel ASTM A234 WPB</li>
                            <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i> Alloy
                                Steel ASTM A234 WP11 / WP22</li>
                            <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i> Duplex
                                Stainless Steel S31803 / S32205</li>
                            <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i> Super
                                Duplex Stainless Steel S32750 / S32760</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card p-4 shadow-sm mb-4">
                        <h4 class="text-center" style="color: #db7227;">International Equivalents</h4>
                        <ul class="list-group list-group-flush mt-3">
                            <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i> ASTM
                            </li>
                            <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i> ASME
                            </li>
                            <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i> EN</li>
                            <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i> DIN</li>
                            <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i> JIS</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Gallery --}}

    <section class="our-services">
        <div class="container">
            <div class="container">
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.nickel-Based-Superalloys') }}">
                                <img class="w-100" src="{{ asset('assets/images/product/NICKLE-ALLOYS.webp') }}"
                                    alt="Nickel alloy tubes for heat exchangers" loading="lazy" width="400"
                                    height="260">
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
                                    alt="Stainless steel boiler and condenser tubes" loading="lazy" width="400"
                                    height="260">
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
                                    alt="Duplex and super duplex tubes for seawater service" loading="lazy"
                                    width="400" height="260">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0">DUPLEX & SUPER</h6>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.titanium') }}">
                                <img class="w-100" src="{{ asset('assets/images/product/TITANIUM-ALLOYS.webp') }}"
                                    alt="Titanium heat exchanger and condenser tubes" loading="lazy" width="400"
                                    height="260">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0">TITANIUM ALLOYS</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4 ">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.haynes-Superalloys') }}">
                                <img class="w-100" src="{{ asset('assets/images/product/RARE-TO-ALLOYS.webp') }}"
                                    alt="Haynes superalloy tubes for high-temperature service" loading="lazy"
                                    width="400" height="260">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0">Haynes Superalloys</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.inconel') }}">
                                <img class="w-100" src="{{ asset('assets/images/product/CARBON-ALLOYS.webp') }}"
                                    alt="Inconel alloy tubes for corrosion-resistant applications" loading="lazy"
                                    width="400" height="260">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0">Inconel</h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    {{-- Gallery --}}

    <section id="applications" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Applications</h2>
                <p class="text-center pb-3">Our 90 Degree Bends are widely used in:</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Oil & Gas Pipelines</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Petrochemical Plants</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Chemical Processing</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Power Generation</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Water & Wastewater Treatment</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Food & Beverage Industry</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-capsule"></i></div>
                        <h5>Pharmaceutical Plants</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-water"></i></div>
                        <h5>Marine & Offshore Projects</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-building"></i></div>
                        <h5>Construction & Infrastructure</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-tools"></i></div>
                        <h5>Industrial Process Piping</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="features" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Features & Advantages</h2>
            </div>
            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Smooth flow with reduced pressure loss</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Excellent corrosion resistance</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-hammer"></i></div>
                        <h5>High mechanical strength</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Suitable for high-pressure and high-temperature applications</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-arrows-expand"></i></div>
                        <h5>Larger bend radius reduces turbulence</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-link-45deg"></i></div>
                        <h5>Leak-proof butt weld connection</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-clock-history"></i></div>
                        <h5>Long service life</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-award-fill"></i></div>
                        <h5>Manufactured to international quality standards</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="mechanical-properties" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Mechanical Properties</h2>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>Property</th>
                            <th>SS 304</th>
                            <th>SS 304L</th>
                            <th>SS 316</th>
                            <th>SS 316L</th>
                            <th>ASTM A234 WPB</th>
                            <th>ASTM A234 WP11</th>
                            <th>ASTM A234 WP22</th>
                            <th>Duplex S31803</th>
                            <th>Super Duplex S32750</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tensile Strength (MPa)</td>
                            <td>515 Min</td>
                            <td>485 Min</td>
                            <td>515 Min</td>
                            <td>485 Min</td>
                            <td>415 Min</td>
                            <td>415 Min</td>
                            <td>415 Min</td>
                            <td>620 Min</td>
                            <td>795 Min</td>
                        </tr>
                        <tr>
                            <td>Yield Strength (MPa)</td>
                            <td>205 Min</td>
                            <td>170 Min</td>
                            <td>205 Min</td>
                            <td>170 Min</td>
                            <td>240 Min</td>
                            <td>205 Min</td>
                            <td>205 Min</td>
                            <td>450 Min</td>
                            <td>550 Min</td>
                        </tr>
                        <tr>
                            <td>Elongation (%)</td>
                            <td>40 Min</td>
                            <td>40 Min</td>
                            <td>40 Min</td>
                            <td>40 Min</td>
                            <td>22 Min</td>
                            <td>20 Min</td>
                            <td>20 Min</td>
                            <td>25 Min</td>
                            <td>15 Min</td>
                        </tr>
                        <tr>
                            <td>Hardness (HB Max)</td>
                            <td>201</td>
                            <td>201</td>
                            <td>217</td>
                            <td>217</td>
                            <td>197</td>
                            <td>197</td>
                            <td>197</td>
                            <td>290</td>
                            <td>310</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="mt-3 text-center">Note: The above values are typical mechanical properties in accordance with the
                relevant ASTM and ASME standards. Actual values may vary slightly depending on the material grade,
                manufacturing process, heat treatment, and product dimensions.</p>
        </div>
    </section>

    <section id="why-choose-us" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container text-center">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Why Choose Moksh Tubes & Fittings LLP?</h2>
            </div>
            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-award"></i></div>
                        <h5>Leading Manufacturer, Supplier & Exporter</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gem"></i></div>
                        <h5>Premium Quality Pipe Fittings</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-rulers"></i></div>
                        <h5>Wide Range of Sizes & Material Grades</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-truck"></i></div>
                        <h5>Ready Stock for Fast Delivery</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-tags"></i></div>
                        <h5>Competitive Pricing</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Strict Quality Assurance</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-globe"></i></div>
                        <h5>Global Export Experience</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-file-earmark-text"></i></div>
                        <h5>Complete Documentation Support</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-headset"></i></div>
                        <h5>Expert Technical Assistance</h5>
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
                        <div class="section-title center mb-4">
                            <h2 class="fw-bold" style="color: #174268;">Frequently Asked Questions (FAQ)</h2>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What is a 90 Degree Bend?</h4>
                            </div>
                            <div class="accord-content">
                                <p>A 90 Degree Bend is a pipe fitting that changes the direction of a pipeline by 90 degrees
                                    using a larger bend radius to improve flow efficiency and reduce pressure loss.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What is the difference between a 90 Degree Bend and a 90 Degree Elbow?</h4>
                            </div>
                            <div class="accord-content">
                                <p>A bend has a larger radius, resulting in smoother flow and lower pressure drop, while an
                                    elbow has a shorter radius and is typically used where installation space is limited.
                                </p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Which materials are available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>We manufacture 90 Degree Bends in stainless steel, carbon steel, alloy steel, duplex, and
                                    super duplex materials.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Do you provide material test certificates?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Yes. EN 10204 3.1 Material Test Certificates are supplied with every order.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Can you export internationally?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Yes. We export to the Middle East, Asia, Europe, and other global markets.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End faq content area-->


    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="contact-cta-box text-center">
                <h2 class="fw-bold" style="color: #db7227;">Request a Quote</h2>
                <p>Looking for high-quality 90 Degree Bends for your industrial piping project? Moksh Tubes & Fittings LLP
                    offers premium-quality bends with competitive pricing, reliable quality, and fast worldwide delivery.
                    Contact us today to discuss your requirements and receive a customized quotation.</p>
                <a href="javascript:void(0);" class="contact-cta-btn" data-bs-toggle="modal"
                    data-bs-target="#contactFormModal">
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
            transition:
                opacity .35s ease,
                transform .35s ease;
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
                                                      "email": "info@mokshtubes.com",
                                                      "address": {
                                                        "@type": "PostalAddress",
                                                        "addressLocality": "Mumbai",
                                                        "addressRegion": "MH",
                                                        "addressCountry": "IN"
                                                      }
                                                    },
                                                    {
                                                      "@type": "WebSite",
                                                      "@id": "https://mokshtubes.com/#website",
                                                      "url": "https://mokshtubes.com/",
                                                      "name": "Moksh Tubes & Fittings LLP"
                                                    },
                                                    {
                                                      "@type": "WebPage",
                                                      "@id": "https://mokshtubes.com/90-degree-bend#webpage",
                                                      "name": "90 Degree Bend Manufacturer, Supplier & Exporter in India | SS, CS & Alloy Steel",
                                                      "url": "https://mokshtubes.com/90-degree-bend",
                                                      "description": "Moksh Tubes & Fittings LLP is a leading manufacturer, supplier & exporter of 90 Degree Bends in Stainless Steel, Carbon Steel, Alloy Steel, Duplex & Super Duplex. Available in ASME B16.49 & B16.9 standards with worldwide delivery.",
                                                      "isPartOf": { "@id": "https://mokshtubes.com/#website" },
                                                      "primaryImageOfPage": { "@id": "https://mokshtubes.com/#product-image" }
                                                    },
                                                    {
                                                      "@type": ["Product", "Service"],
                                                      "@id": "https://mokshtubes.com/#90-degree-bend",
                                                      "name": "90 Degree Bends",
                                                      "url": "https://mokshtubes.com/90-degree-bend",
                                                      "image": "https://mokshtubes.com/assets/images/product/flangs/90-degree-elbows_11zon.jpeg",
                                                      "category": "Industrial Bends",
                                                      "description": "Premium-quality Stainless Steel, Carbon Steel, Alloy Steel, Duplex, and Super Duplex 90 Degree Bends.",
                                                      "brand": {
                                                        "@type": "Brand",
                                                        "@id": "https://mokshtubes.com/#organization",
                                                        "name": "Moksh Tubes & Fittings LLP"
                                                      },
                                                      "manufacturer": {
                                                        "@type": "Organization",
                                                        "@id": "https://mokshtubes.com/#organization"
                                                      },
                                                      "material": [
                                                        "Stainless Steel",
                                                        "Carbon Steel",
                                                        "Alloy Steel",
                                                        "Duplex Stainless Steel",
                                                        "Super Duplex Stainless Steel"
                                                      ],
                                                      "additionalProperty": [
                                                        { "@type": "PropertyValue", "name": "Outer Diameter", "value": "½\" NB to 48\" NB" },
                                                        { "@type": "PropertyValue", "name": "Standards", "value": "ASME B16.49, ASME B16.9, ASTM" }
                                                      ],
                                                      "offers": {
                                                        "@type": "Offer",
                                                        "@id": "https://mokshtubes.com/#offer",
                                                        "url": "https://mokshtubes.com/90-degree-bend",
                                                        "availability": "https://schema.org/InStock",
                                                        "priceCurrency": "USD",
                                                        "price": "0.00",
                                                        "priceValidUntil": "2030-12-31",
                                                        "businessFunction": "https://schema.org/Sell",
                                                        "seller": { "@id": "https://mokshtubes.com/#organization" }
                                                      }
                                                    },
                                                    {
                                                      "@type": "ImageObject",
                                                      "@id": "https://mokshtubes.com/#product-image",
                                                      "url": "https://mokshtubes.com/assets/images/product/flangs/90-degree-elbows_11zon.jpeg",
                                                      "description": "90 Degree Bend Manufacturer in India"
                                                    },
                                                    {
                                                      "@type": "BreadcrumbList",
                                                      "@id": "https://mokshtubes.com/#breadcrumb",
                                                      "itemListElement": [
                                                        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://mokshtubes.com/" },
                                                        { "@type": "ListItem", "position": 2, "name": "Pipe Fittings", "item": "https://mokshtubes.com/products/pipe-fittings" },
                                                        { "@type": "ListItem", "position": 3, "name": "90 Degree Bend", "item": "https://mokshtubes.com/90-degree-bend" }
                                                      ]
                                                    },
                                                    {
                                                      "@type": "FAQPage",
                                                      "@id": "https://mokshtubes.com/#faq-90-degree-bends",
                                                      "mainEntity": [
                                                        {
                                                          "@type": "Question",
                                                          "name": "What is a 90 Degree Bend?",
                                                          "acceptedAnswer": { "@type": "Answer", "text": "A 90 Degree Bend is a pipe fitting that changes the direction of a pipeline by 90 degrees using a larger bend radius to improve flow efficiency and reduce pressure loss." }
                                                        },
                                                        {
                                                          "@type": "Question",
                                                          "name": "What is the difference between a 90 Degree Bend and a 90 Degree Elbow?",
                                                          "acceptedAnswer": { "@type": "Answer", "text": "A bend has a larger radius, resulting in smoother flow and lower pressure drop, while an elbow has a shorter radius and is typically used where installation space is limited." }
                                                        },
                                                        {
                                                          "@type": "Question",
                                                          "name": "Which materials are available?",
                                                          "acceptedAnswer": { "@type": "Answer", "text": "We manufacture 90 Degree Bends in stainless steel, carbon steel, alloy steel, duplex, and super duplex materials." }
                                                        },
                                                        {
                                                          "@type": "Question",
                                                          "name": "Do you provide material test certificates?",
                                                          "acceptedAnswer": { "@type": "Answer", "text": "Yes. EN 10204 3.1 Material Test Certificates are supplied with every order." }
                                                        },
                                                        {
                                                          "@type": "Question",
                                                          "name": "Can you export internationally?",
                                                          "acceptedAnswer": { "@type": "Answer", "text": "Yes. We export to the Middle East, Asia, Europe, and other global markets." }
                                                        }
                                                      ]
                                                    }
                                                  ]
                                                }
                                                </script>
    @endverbatim
@endsection
