@extends('layouts.master')
@section('title', 'Industrial Fasteners – High-Quality Bolts & Nuts') <!-- 52 characters -->
@section('meta_description',
    'Premium industrial fasteners from Mokshtubes — bolts, nuts, screws & washers in stainless
    steel, alloy, titanium & nickel for marine & industrial use.') <!-- 153 characters -->
@section('meta_keywords',
    'Industrial Fasteners, Bolts, Nuts, Screws, Washers, Studs, Anchors, Stainless Steel
    Fasteners, Alloy Fasteners, Titanium Fasteners, Nickel Fasteners, High-Strength Fasteners, Corrosion-Resistant
    Fasteners, ISO Certified Fasteners')
@section('og_image', asset('assets/images/product/flangs/FASTENERS.webp'))
@section('og_type', 'article')
@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/product/flangs/FASTENERS.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Premium Industrial Bolts & Fasteners</h1> <!-- 52 characters -->
                </div>
            </div>
        </div>
    </section>



    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Fasteners</h2>
            </div>

            <div class="row align-items-center">
                <!-- Left Image -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/product/flangs/FASTENERS.webp') }}" alt="Custom-Fabricated-Fittings"
                        class="img-fluid rounded shadow-sm">
                </div>

                <!-- Right Content -->
                <div class="col-md-6">
                    <p class="fs-6 mb-3 text-justify">
                        <strong class="text-black">Fasteners</strong> are essential hardware components used to mechanically
                        join or affix two or more objects together. They play a critical role in construction, automotive,
                        aerospace, marine, energy, and countless industrial applications.
                    </p>
                    <p class="fs-6 mb-3 text-justify">
                        <a href="{{ route('index') }}">Moksh Tubes & Fittings LLP</a>, we supply a comprehensive range of
                        fasteners – from bolts, nuts, washers, and screws to specialized studs and anchors in stainless
                        steel, carbon steel, alloy steel, <a href="{{ route('materials.titanium') }}">titanium</a>, nickel
                        alloys, and copper alloys.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Specifications</h2>
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
                                    <td>Stainless Steel, Carbon Steel, Alloy Steel, <a
                                            href="{{ route('materials.duplex-and-super-duplex') }}">Duplex &amp; Super
                                            Duplex</a>, Nickel
                                        Alloys, Titanium, Copper Alloys</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Grades</td>
                                    <td>ASTM/ASME/DIN/ISO/BS certified grades – available in all major alloys</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Size Range</td>
                                    <td>M3 to M72 (Metric) / 1/8” to 4” (Inch series)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Threads</td>
                                    <td>Metric, UNC, UNF, BSW, BSF, ACME, Left Hand Threads</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Types</td>
                                    <td>Bolts, Nuts, Washers, Screws, Studs, Threaded Rods, Anchors, Rivets, Custom
                                        Fasteners</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Finishes</td>
                                    <td>Plain, Zinc Plated, Galvanized, Hot-Dip Galvanized, PTFE, Xylon, Nickel Plated</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Standards</td>
                                    <td>ASTM A193, A194, A320, A307, DIN 933, ISO 4014, BS 3692, JIS Standards</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--Start product area-->
    <section class="sec-padd-top sec-padd-bottom bg-white">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Fasteners Product</h2>
            </div>
            <div class="row g-4">
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ route('products.pipe-fittings-flanges-fasteners.fasteners.astm-a193-grade-b7-stud-bolts') }}"
                        class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">
                            <img src="{{ asset('assets/images/fasteners/b7-stud-bolts.png') }}" alt="B7 Stud Bolts"
                                class="img-fluid rounded mb-3" style="border-radius: 8px;">
                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                ASTM A193 Grade B7 Stud Bolts
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ route('products.pipe-fittings-flanges-fasteners.fasteners.astm-a193-grade-b8-stud-bolts') }}"
                        class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">
                            <img src="{{ asset('assets/images/fasteners/grade-b8-stud-bolts.png') }}" alt="B8 Stud Bolts"
                                class="img-fluid rounded mb-3" style="border-radius: 8px;">
                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                ASTM A193 Grade B8 Stud Bolts
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ route('products.pipe-fittings-flanges-fasteners.fasteners.hex-bolts') }}"
                        class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">
                            <img src="{{ asset('assets/images/fasteners/hax-bolt.png') }}" alt="Hex Bolts"
                                class="img-fluid rounded mb-3" style="border-radius: 8px;">
                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Hex Bolts
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ route('products.pipe-fittings-flanges-fasteners.fasteners.heavy-hex-nuts') }}"
                        class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">
                            <img src="{{ asset('assets/images/fasteners/hax-2.png') }}" alt="Heavy Hex Nuts"
                                class="img-fluid rounded mb-3" style="border-radius: 8px;">
                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Heavy Hex Nuts
                            </h6>
                        </div>
                    </a>
                </div>

                {{-- New Cards --}}
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ route('products.pipe-fittings-flanges-fasteners.fasteners.astm-a193-gr-b8m-studs') }}"
                        class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">
                            <img src="{{ asset('assets/images/fasteners/astm-a193-gr-b8m-studs.png') }}"
                                alt="ASTM A193 Gr B8M Studs" class="img-fluid rounded mb-3" style="border-radius: 8px;">
                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                ASTM A193 Gr B8M Stud Bolts
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ route('products.pipe-fittings-flanges-fasteners.fasteners.a286-gr-660-threaded-studs') }}"
                        class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">
                            <img src="{{ asset('assets/images/fasteners/a286-gr-660-threaded-studs.jpg') }}"
                                alt="A286 Gr 660 Threaded Studs" class="img-fluid rounded mb-3"
                                style="border-radius: 8px;">
                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                A286 Gr 660 Threaded Studs
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ route('products.pipe-fittings-flanges-fasteners.fasteners.gr-660a-threaded-studs') }}"
                        class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">
                            <img src="{{ asset('assets/images/fasteners/gr-660a-threaded-studs.jpg') }}"
                                alt="Gr 660A Threaded Studs" class="img-fluid rounded mb-3" style="border-radius: 8px;">
                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Gr 660A Threaded Studs
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ route('products.pipe-fittings-flanges-fasteners.fasteners.astm-a194-gr-7-nuts') }}"
                        class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">
                            <img src="{{ asset('assets/images/fasteners/astm-a194-gr-7-nuts.jpg') }}"
                                alt="ASTM A194 Gr 7 Nuts" class="img-fluid rounded mb-3" style="border-radius: 8px;">
                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                ASTM A194 Gr 7 Nuts
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ route('products.pipe-fittings-flanges-fasteners.fasteners.astm-a194-gr-8-nuts') }}"
                        class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">
                            <img src="{{ asset('assets/images/fasteners/astm-a194-gr-8-nuts.jpeg') }}"
                                alt="ASTM A194 Gr 8 Nuts" class="img-fluid rounded mb-3" style="border-radius: 8px;">
                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                ASTM A194 Gr 8 Nuts
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ route('products.pipe-fittings-flanges-fasteners.fasteners.astm-a194-gr-8m-heavy-hex-nuts') }}"
                        class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">
                            <img src="{{ asset('assets/images/fasteners/astm-a194-gr-8m-heavy-hex-nuts.jpg') }}"
                                alt="ASTM A194 Gr 8M Heavy Hex Nuts" class="img-fluid rounded mb-3"
                                style="border-radius: 8px;">
                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                ASTM A194 Gr 8M Heavy Hex Nuts
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ route('products.pipe-fittings-flanges-fasteners.fasteners.gr-660a-heavy-hex-nuts') }}"
                        class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">
                            <img src="{{ asset('assets/images/fasteners/gr-660a-heavy-hex-nuts.jpg') }}"
                                alt="Gr 660A Heavy Hex Nuts" class="img-fluid rounded mb-3" style="border-radius: 8px;">
                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Gr 660A Heavy Hex Nuts
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ route('products.pipe-fittings-flanges-fasteners.fasteners.asme-sf-467-nuts') }}"
                        class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">
                            <img src="{{ asset('assets/images/fasteners/asme-sf-467-nuts.jpg') }}" alt="ASME SF-467 Nuts"
                                class="img-fluid rounded mb-3" style="border-radius: 8px;">
                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                ASME SF-467 Nuts
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ route('products.pipe-fittings-flanges-fasteners.fasteners.full-threaded-rods') }}"
                        class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">
                            <img src="{{ asset('assets/images/fasteners/full-threaded-rods.png') }}"
                                alt="Full Threaded Rods" class="img-fluid rounded mb-3" style="border-radius: 8px;">
                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Full Threaded Rods
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ route('products.pipe-fittings-flanges-fasteners.fasteners.socket-head-cap-screws') }}"
                        class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">
                            <img src="{{ asset('assets/images/fasteners/socket-head-cap-screws.jpg') }}"
                                alt="Socket Head Cap Screws" class="img-fluid rounded mb-3" style="border-radius: 8px;">
                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Socket Head Cap Screws
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ route('products.pipe-fittings-flanges-fasteners.fasteners.plain-washers') }}"
                        class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">
                            <img src="{{ asset('assets/images/fasteners/plain-washers.jpg') }}" alt="Plain Washers"
                                class="img-fluid rounded mb-3" style="border-radius: 8px;">
                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                Plain Washers
                            </h6>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2 class="fw-bold" style="color: #174268;">Product Range Charts</h2>


            </div>
            <!-- Child Title -->
            <div class="section-title center mb-3">
                <h4 class="text-center mb-0" style="color: #db7227;">Weight Chart</h4>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr class="t-row">
                            <th>Fastener Type</th>
                            <th>Size Range (Metric)</th>
                            <th>Size Range (Inch)</th>
                            <th>Length Range</th>
                            <th>Head Types</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row">
                            <td>Bolts</td>
                            <td>M6 – M100</td>
                            <td>¼" – 4"</td>
                            <td>Up to 1000 mm</td>
                            <td>Hex, Heavy Hex, Socket, Eye</td>
                        </tr>
                        <tr class="t-row">
                            <td>Nuts</td>
                            <td>M6 – M100</td>
                            <td>¼" – 4"</td>
                            <td>Standard</td>
                            <td>Hex, Square, Dome, Wing</td>
                        </tr>
                        <tr class="t-row">
                            <td>Screws</td>
                            <td>M3 – M36</td>
                            <td>⅛" – 1½"</td>
                            <td>Up to 300 mm</td>
                            <td>CSK, Pan, Torx, Machine</td>
                        </tr>
                        <tr class="t-row">
                            <td>Washers</td>
                            <td>M6 – M100</td>
                            <td>¼" – 4"</td>
                            <td>Standard</td>
                            <td>Flat, Spring, Lock, Serrated</td>
                        </tr>
                        <tr class="t-row">
                            <td>Studs / Threaded Rods</td>
                            <td>M6 – M100</td>
                            <td>¼" – 4"</td>
                            <td>Up to 3000 mm</td>
                            <td>Double End, Tap End, Continuous Thread</td>
                        </tr>
                        <tr class="t-row">
                            <td>Special Fasteners</td>
                            <td>As per drawing</td>
                            <td>As per drawing</td>
                            <td>Custom</td>
                            <td>Fabricated</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </section>
    <section class="bg-light" style="">
        <div class="container">

            <!-- Parent Title -->
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Dimensions</h2>
            </div>

            <!-- Child Title -->
            <div class="section-title center mb-3">
                <h4 class="text-center mb-0" style="color: #db7227;">Expanded Table (Hex Bolts – ISO 4014 / DIN 931)</h4>
            </div>


            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle text-center">
                            <thead class="table-dark">
                                <tr class="t-row">
                                    <th>Nominal Diameter (d)</th>
                                    <th>Pitch (P) mm</th>
                                    <th>Across Flats (s) mm</th>
                                    <th>Head Height (k) mm</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td>M6</td>
                                    <td>1.0</td>
                                    <td>10</td>
                                    <td>4</td>
                                </tr>
                                <tr class="t-row">
                                    <td>M8</td>
                                    <td>1.25</td>
                                    <td>13</td>
                                    <td>5.3</td>
                                </tr>
                                <tr class="t-row">
                                    <td>M10</td>
                                    <td>1.5</td>
                                    <td>17</td>
                                    <td>6.4</td>
                                </tr>
                                <tr class="t-row">
                                    <td>M12</td>
                                    <td>1.75</td>
                                    <td>19</td>
                                    <td>7.5</td>
                                </tr>
                                <tr class="t-row">
                                    <td>M16</td>
                                    <td>2.0</td>
                                    <td>24</td>
                                    <td>10</td>
                                </tr>
                                <tr class="t-row">
                                    <td>M20</td>
                                    <td>2.5</td>
                                    <td>30</td>
                                    <td>12.5</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light" style="padding-top: 80px;">
        <div class="container">

            <!-- Parent Title -->
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Mechanical Properties Chart</h2>
            </div>

            <!-- Child Title -->
            <div class="section-title center mb-3">
                <h4 class="text-center mb-0" style="color: #db7227;">Expanded Table (As per ISO 898-1 / ASTM Standards)
                </h4>
            </div>


            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped align-middle text-center">
                                <thead class="table-dark">
                                    <tr class="t-row">
                                        <th>Property Class / Grade</th>
                                        <th>Tensile Strength (MPa)</th>
                                        <th>Yield Strength (MPa)</th>
                                        <th>Hardness (HB)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="t-row">
                                        <td>4.6</td>
                                        <td>400</td>
                                        <td>240</td>
                                        <td>116</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>8.8</td>
                                        <td>800</td>
                                        <td>640</td>
                                        <td>255</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>10.9</td>
                                        <td>1040</td>
                                        <td>940</td>
                                        <td>320</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>12.9</td>
                                        <td>1220</td>
                                        <td>1100</td>
                                        <td>380</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>A2-70 (SS 304)</td>
                                        <td>700</td>
                                        <td>450</td>
                                        <td>210</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>A4-80 (SS 316)</td>
                                        <td>800</td>
                                        <td>600</td>
                                        <td>220</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="bg-light" style="padding-top: 80px;">
        <div class="container">

            <!-- Parent Title -->
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Weight Chart</h2>
            </div>

            <!-- Child Title -->
            <div class="section-title center mb-3">
                <h4 class="text-center mb-0" style="color: #db7227;">Expanded Table (Approx. – Hex Bolts, per 100 pcs)
                </h4>
            </div>


            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped align-middle text-center">
                                <thead class="table-dark">
                                    <tr class="t-row">
                                        <th>Size (Dia × Length)</th>
                                        <th>Approx. Weight (kg)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="t-row">
                                        <td>M6 × 20</td>
                                        <td>0.55</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>M8 × 30</td>
                                        <td>1.25</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>M10 × 40</td>
                                        <td>2.75</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>M12 × 50</td>
                                        <td>4.80</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>M16 × 80</td>
                                        <td>12.20</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>M20 × 100</td>
                                        <td>23.50</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="bg-light" style="padding-top: 80px;">
        <div class="container">

            <!-- Parent Title -->
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Coating / Finish Options</h2>
            </div>

            <!-- Child Title -->
            {{-- <div class="section-title center mb-3">
                <h4 class="text-center mb-0" style="color: #db7227;">Expanded Table (Fabricated Fittings – as per ASME
                    B16.9)
                </h4>
            </div> --}}


            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped align-middle text-center">
                                <thead class="table-dark">
                                    <tr class="t-row">
                                        <th>Finish Type</th>
                                        <th>Thickness (µm)</th>
                                        <th>Corrosion Resistance</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="t-row">
                                        <td>Plain / Self-Color</td>
                                        <td>–</td>
                                        <td>Basic, indoor use</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>Zinc Plated</td>
                                        <td>5 – 25</td>
                                        <td>Moderate, indoor/outdoor</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>Hot-Dip Galvanized</td>
                                        <td>40 – 80</td>
                                        <td>Strong, marine & industrial</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>Black Oxide</td>
                                        <td>0.5 – 1</td>
                                        <td>Mild, aesthetic</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>PTFE / Xylon</td>
                                        <td>20 – 30</td>
                                        <td>Excellent, chemical-resistant</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>Cadmium Plated</td>
                                        <td>5 – 20</td>
                                        <td>High, aerospace use</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
    </section>

    {{-- Grades Available --}}
    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Grades Available</h2>
            </div>
            <div class="section-title center mb-3">
                <h4 class="text-center mb-0" style="color: #db7227;"><strong>Fasteners</strong> in an extensive range of
                    grades</h4>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Material</th>
                                    <th>Grades / Applications</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td>Stainless Steel</td>
                                    <td>304, 304L, 316, 316L, 310, 321, 347 – for corrosion-resistant use in marine, food,
                                        and pharma industries.</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon & Alloy Steel</td>
                                    <td>ASTM A193 B7/B7M, A320 L7/L7M – for high-strength and structural applications.</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Duplex & Super Duplex</td>
                                    <td>UNS S31803, S32750, S32760 – for offshore, oil & gas, and chemical processing.</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nickel Alloys</td>
                                    <td><a href="{{ route('materials.inconel') }}">Inconel 600/625/718</a>, Monel
                                        400/K500,
                                        <a href="{{ route('materials.hastelloy') }}">Hastelloy C22/C276</a> – for extreme
                                        heat and
                                        corrosive conditions.
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Titanium</td>
                                    <td><a href="{{ route('materials.titanium') }}">Grades 2, 5</a> (Ti-6Al-4V) –
                                        lightweight and strong for aerospace and medical use.</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Copper Alloys</td>
                                    <td>Brass, Bronze, Cu-Ni 70/30, Cu-Ni 90/10 – for decorative, marine, and electrical
                                        applications.</td>
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
            <div class="container">
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.nickel-Based-Superalloys') }}">
                                <img class="w-100" src="{{ asset('assets/images/product/NICKLE-ALLOYS.webp') }}"
                                    alt="NICKLE ALLOYS">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0">NICKLE ALLOYS</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.austenitic-stainless-Steel') }}">
                                <img class="w-100" src="{{ asset('assets/images/product/STAINLESS-STEEL.webp') }}"
                                    alt="STAINLESS STEEL">
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
                                    alt="DUPLEX & SUPER">
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
                                    alt="TITANIUM ALLOYS">
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
                                    alt="Haynes Superalloys">
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
                                    alt="Inconel">
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


    {{-- Applications --}}
    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications</h2>
                <p class="text-center pb-3">
                    <strong class="text-black">Fasteners</strong> are integral to almost every industry and sector.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon">
                            <i class="bi bi-building"></i>
                        </div>
                        <h5>Construction & Infrastructure</h5>
                        <ul>
                            <li>Structural steel fastening in bridges, buildings, stadiums, and towers</li>
                            <li>Roofing, cladding, railings, and façade attachment</li>
                            <li>Anchor bolts for machinery, pipelines, and heavy foundations</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon">
                            <i class="bi bi-tsunami"></i>
                        </div>
                        <h5>Marine & Offshore</h5>
                        <ul>
                            <li>Stainless & Duplex fasteners for shipbuilding, docks, offshore oil rigs</li>
                            <li>Saltwater resistant fasteners for marine decks and equipment</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon">
                            <i class="bi bi-fuel-pump-fill"></i>
                        </div>
                        <h5>Oil, Gas & Petrochemical</h5>
                        <ul>
                            <li><a href="{{ route('materials.high-strength-stainless-steel') }}">High strength</a> bolts
                                for pipeline flanges, valves, and pressure vessels</li>
                            <li>Alloy fasteners for refineries and chemical plants with harsh media</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon">
                            <i class="bi bi-airplane-engines-fill"></i>
                        </div>
                        <h5>Automotive, Aerospace & Transport</h5>
                        <ul>
                            <li>Screws, studs, and bolts for engines, chassis, and braking systems</li>
                            <li><a href="{{ route('materials.titanium') }}">Titanium</a> and nickel fasteners for
                                aircraft, satellites, and racing vehicles</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon">
                            <i class="bi bi-gear-fill"></i>
                        </div>
                        <h5>Industrial Machinery & Equipment</h5>
                        <ul>
                            <li>Used in conveyors, turbines, presses, compressors, and generators</li>
                            <li>Custom studs and anchors for heavy machinery installation</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon">
                            <i class="bi bi-droplet-fill"></i>
                        </div>
                        <h5>Food, Pharma & Sanitary Applications</h5>
                        <ul>
                            <li>Hygienic-grade stainless fasteners for dairy, beverage, and cleanroom equipment</li>
                            <li>Corrosion-proof fasteners for medical and pharmaceutical devices</li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- <p class="text-center pb-3 my-4"><strong class="text-dark">HASTELLOY C-276's</strong> unique combination of
                corrosion resistance, weldability, and mechanical durability makes it a reliable material for
                mission-critical applications where long-term performance is non-negotiable.

            </p> --}}
        </div>
    </section>

    {{-- Uses of Welded Pipes and Tubes --}}
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Uses of Fasteners</h2>
            </div>
            <!-- Child Title -->
            <div class="section-title center mb-3">
                <h4 class="text-center mb-0" style="color: #db7227;">Fasteners</h4>
            </div>
            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-plug-fill"></i></div>
                        <h4>Assembly & Installation</h4>
                        <h5>Joins components in machines, structures, and vehicles</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-arrow-repeat"></i></div>
                        <h4>Maintenance & Repairs</h4>
                        <h5>Easy removal and reinstallation for servicing</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-hammer"></i></div>
                        <h4>Load Bearing Support</h4>
                        <h5>Ensures safe transfer of loads in structural applications</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-sliders"></i></div>
                        <h4>Alignment & Adjustment</h4>
                        <h5>Maintains precise positioning of parts</h5>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-6">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-vector-pen"></i></div>
                        <h4>Temporary or Permanent Fixing</h4>
                        <h5>Can be reused (bolts) or permanent (rivets)</h5>
                    </div>
                </div>
            </div>

        </div>
    </section>
    {{-- Advantages of Welded Pipes & Tubes --}}
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Advantages of Fasteners</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-hammer"></i></div>
                        <h4>High Strength & Durability</h4>
                        <h5>Manufactured from premium raw materials</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h4>Corrosion Resistance</h4>
                        <h5>Stainless, Duplex, and Nickel fasteners for harsh conditions</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-grid-1x2-fill"></i></div>
                        <h4>Wide Range</h4>
                        <h5>Standard, metric, and <a
                                href="{{ url('products/pipe-fittings-flanges-fasteners/custom-fabricated-fittings') }}">custom
                                fasteners</a> available</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-patch-check-fill"></i></div>
                        <h4>Compliance</h4>
                        <h5>Manufactured to ASTM, ASME, DIN, ISO, BS standards</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-sliders"></i></div>
                        <h4>Customization</h4>
                        <h5>Tailored coatings, sizes, and threads for unique needs</h5>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-fill-check"></i></div>
                        <h4>Reliable Performance</h4>
                        <h5>Proven for critical applications in oil, gas, marine & aerospace</h5>
                    </div>
                </div>
            </div>

        </div>
    </section>



    {{-- why choose us --}}
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container text-center">
            <div class="section-title center">
                <h2>WHY CHOOSE US?</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3-fill"></i></div>
                        <h5>Complete Range: From tiny machine screws to heavy duty anchor bolts</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-layers"></i></div>
                        <h5><a href="{{ route('materials') }}">Material</a> Expertise: Stainless, Duplex, Nickel Alloys,
                            Titanium, Copper Alloys</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-award"></i></div>
                        <h5>Quality Certifications: ISO 9001:2015, MTC & third-party inspections available</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Global Reach: Supplying to clients in oil & gas, marine, construction & aerospace sectors</h5>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>On-Time Delivery: Robust inventory for urgent project requirements</h5>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!--Start faq content area-->
    <section class="faq-content-area sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="accordion-box">
                        <div class="section-title center">
                            <h2>FAQ's</h2>
                        </div>

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What types of fasteners are available from <a href="{{ route('index') }}">Moksh Tubes
                                        & Fittings LLP</a>?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    We provide a complete range including bolts, nuts, screws, washers, studs, threaded
                                    rods, anchors, rivets, and custom-engineered specialty fasteners.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Which materials are used for your fasteners?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Our fasteners are made from stainless steel, carbon steel, alloy steel, duplex & super
                                    duplex, titanium, nickel alloys, and copper alloys to suit various industrial needs.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Are your fasteners compliant with international standards?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Yes, our fasteners meet ASTM, ASME, DIN, ISO, BS, and JIS standards to ensure quality,
                                    strength, and reliability.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What industries use your fasteners?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Our fasteners are used in construction, marine, oil & gas, aerospace, automotive,
                                    industrial machinery, food & pharma, and energy sectors.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Can you provide custom fasteners for special applications?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Absolutely. We manufacture custom fasteners tailored to specific dimensions, materials,
                                    coatings, and performance requirements for unique industrial applications.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End faq content area-->
    <!-- Schema testing -->

    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Contact Us</h2>
                <p>
                    Looking for high-performance fasteners for your industrial or construction project?<br>Contact
                    <strong><a href="{{ route('index') }}">Moksh Tubes & Fittings LLP</a></strong>
                </p>
                <!-- Call button -->
                <a href="tel:+919769584950" class="contact-cta-btn">Get in Touch</a>
            </div>
        </div>
    </section>

    <!--End breadcrumb area-->


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
                "name": "What types of fasteners are available from Moksh Tubes & Fittings LLP?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We provide a complete range including bolts, nuts, screws, washers, studs, threaded rods, anchors, rivets, and custom-engineered specialty fasteners."
                }
                },
                {
                "@type": "Question",
                "name": "Which materials are used for your fasteners?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Our fasteners are made from stainless steel, carbon steel, alloy steel, duplex & super duplex, titanium, nickel alloys, and copper alloys to suit various industrial needs."
                }
                },
                {
                "@type": "Question",
                "name": "Are your fasteners compliant with international standards?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, our fasteners meet ASTM, ASME, DIN, ISO, BS, and JIS standards to ensure quality, strength, and reliability."
                }
                },
                {
                "@type": "Question",
                "name": "What industries use your fasteners?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Our fasteners are used in construction, marine, oil & gas, aerospace, automotive, industrial machinery, food & pharma, and energy sectors."
                }
                },
                {
                "@type": "Question",
                "name": "Can you provide custom fasteners for special applications?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Absolutely. We manufacture custom fasteners tailored to specific dimensions, materials, coatings, and performance requirements for unique industrial applications."
                }
                }
            ]
            }
        
        @endverbatim
    </script>
@endsection
