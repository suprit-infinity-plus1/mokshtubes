@extends('layouts.master')
@section('title', 'Industrial Sheets & Plates – Premium Metal Solutions') <!-- 52 characters -->
@section('meta_description',
    'High-quality stainless, carbon, and alloy steel sheets and plates — durable, reliable, and ideal for manufacturing, construction, and industry.') <!-- 153 characters -->
@section('meta_keywords',
    'Industrial Sheets & Plates, Stainless Steel Sheets & Plates, Carbon Steel Sheets & Plates,
    Alloy Steel Sheets & Plates, Custom Metal Sheets & Plates, High-Quality Industrial Sheets & Plates')
    @section('og_image', asset('assets/images/peoduct/Sheets-Plates-and-Coils/Sheets-and-Plates.jpg'))
@section('og_type', 'article')
@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/peoduct/Sheets-Plates-and-Coils/Sheets-and-Plates.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>High Quality Sheets & Plates for Industrial Use</h1> <!-- 52 characters -->
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->





    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Sheets and Plates</h2>
            </div>

            <div class="row align-items-center">
                <!-- Left Image -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/peoduct/Sheets-Plates-and-Coils/Sheets-and-Plates.jpg') }}"
                        alt="Hexagon Bars" class="img-fluid rounded shadow-sm">
                </div>

                <!-- Right Content -->
                <div class="col-md-6">
                    <p class="fs-6 mb-3 text-justify">
                        <strong class="text-black">Sheets & Plates</strong> are essential flat rolled metal products
                        used across construction, manufacturing, infrastructure, automotive, shipbuilding, and heavy
                        <a href="{{ route('materials.engineering-Steels') }}">engineering</a> industries. The main
                        distinction lies in thickness sheets are typically 0.5 mm to
                        6 mm thick, while plates are 6 mm and above, designed for structural <a
                            href="{{ route('materials.high-strength-stainless-steel') }}">strength</a> and durability.
                    </p>

                    <p class="fs-6 mb-3 text-justify">
                        <a href="{{ route('index') }}">Moksh Tubes & Fittings LLP</a> supplies high quality metal sheets
                        & plates in a wide variety of
                        <a href="{{ route('materials') }}">materials</a>, finishes, and sizes, sourced and manufactured to
                        ASTM, ASME, EN, JIS, and DIN
                        standards. Our <a href="{{ route('products.sheets-plates-coils') }}">sheets</a> & plates are
                        trusted for their dimensional accuracy, superior surface
                        finish, and long lasting performance in demanding environments.
                    </p>

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
                                    <td>Stainless Steel, Carbon Steel, Mild Steel, Alloy Steel, Duplex & Super Duplex,
                                        Aluminum, Copper, Brass, Nickel Alloys, Titanium</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Grades</td>
                                    <td>ASTM, ASME, EN, JIS standards – all mentioned alloys available</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Thickness Range</td>
                                    <td>Sheets: 0.3 mm – 6 mm; Plates: 6 mm – 150 mm+</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Widths</td>
                                    <td>1000 mm – 3000 mm (custom widths available)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Lengths</td>
                                    <td>Up to 12 meters or cut-to-size</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Finishes</td>
                                    <td>No.1, 2B, BA, Mirror, Matte, Hairline, PVC Coated, Hot Rolled, Cold Rolled,
                                        Pickled & Passivated</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Standards</td>
                                    <td>ASTM A240, A480, A36, IS 2062, EN 10088, JIS G4304, DIN standards</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Types</td>
                                    <td>Hot Rolled Sheets/Plates, Cold Rolled Sheets, Chequered Plates, Perforated
                                        Sheets</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Applications</td>
                                    <td>Construction, Shipbuilding, Automotive, Pressure Vessels, Oil & Gas, Industrial
                                        Fabrication</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2 class="fw-bold" style="color: #174268;">Charts</h2>


            </div>
            <!-- Child Title -->
            <div class="section-title center mb-3">
                <h4 class="text-center mb-0" style="color: #db7227;">Metal Sheets & Plates (Weight Chart)</h4>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Thickness (mm)</th>
                            <th>MS (7.85)</th>
                            <th>SS (7.93)</th>
                            <th>Aluminium (2.70)</th>
                            <th>Brass (8.40)</th>
                            <th>Copper (8.94)</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="t-row">
                            <td>0.1</td>
                            <td>0.785</td>
                            <td>0.793</td>
                            <td>0.270</td>
                            <td>0.840</td>
                            <td>0.894</td>
                        </tr>
                        <tr class="t-row">
                            <td>0.2</td>
                            <td>1.570</td>
                            <td>1.586</td>
                            <td>0.540</td>
                            <td>1.680</td>
                            <td>1.788</td>
                        </tr>
                        <tr class="t-row">
                            <td>0.3</td>
                            <td>2.355</td>
                            <td>2.379</td>
                            <td>0.810</td>
                            <td>2.520</td>
                            <td>2.682</td>
                        </tr>
                        <tr class="t-row">
                            <td>0.4</td>
                            <td>3.140</td>
                            <td>3.172</td>
                            <td>1.080</td>
                            <td>3.360</td>
                            <td>3.576</td>
                        </tr>
                        <tr class="t-row">
                            <td>0.5</td>
                            <td>3.925</td>
                            <td>3.965</td>
                            <td>1.350</td>
                            <td>4.200</td>
                            <td>4.470</td>
                        </tr>
                        <tr class="t-row">
                            <td>0.6</td>
                            <td>4.710</td>
                            <td>4.758</td>
                            <td>1.620</td>
                            <td>5.040</td>
                            <td>5.364</td>
                        </tr>
                        <tr class="t-row">
                            <td>0.8</td>
                            <td>6.280</td>
                            <td>6.344</td>
                            <td>2.160</td>
                            <td>6.720</td>
                            <td>7.152</td>
                        </tr>
                        <tr class="t-row">
                            <td>1.0</td>
                            <td>7.850</td>
                            <td>7.930</td>
                            <td>2.700</td>
                            <td>8.400</td>
                            <td>8.940</td>
                        </tr>
                        <tr class="t-row">
                            <td>1.2</td>
                            <td>9.420</td>
                            <td>9.516</td>
                            <td>3.240</td>
                            <td>10.080</td>
                            <td>10.728</td>
                        </tr>
                        <tr class="t-row">
                            <td>1.5</td>
                            <td>11.775</td>
                            <td>11.895</td>
                            <td>4.050</td>
                            <td>12.600</td>
                            <td>13.410</td>
                        </tr>
                        <tr class="t-row">
                            <td>2.0</td>
                            <td>15.700</td>
                            <td>15.860</td>
                            <td>5.400</td>
                            <td>16.800</td>
                            <td>17.880</td>
                        </tr>
                        <tr class="t-row">
                            <td>2.5</td>
                            <td>19.625</td>
                            <td>19.825</td>
                            <td>6.750</td>
                            <td>21.000</td>
                            <td>22.350</td>
                        </tr>
                        <tr class="t-row">
                            <td>3.0</td>
                            <td>23.550</td>
                            <td>23.790</td>
                            <td>8.100</td>
                            <td>25.200</td>
                            <td>26.820</td>
                        </tr>
                        <tr class="t-row">
                            <td>3.5</td>
                            <td>27.475</td>
                            <td>27.755</td>
                            <td>9.450</td>
                            <td>29.400</td>
                            <td>31.290</td>
                        </tr>
                        <tr class="t-row">
                            <td>4.0</td>
                            <td>31.400</td>
                            <td>31.720</td>
                            <td>10.800</td>
                            <td>33.600</td>
                            <td>35.760</td>
                        </tr>
                        <tr class="t-row">
                            <td>5.0</td>
                            <td>39.250</td>
                            <td>39.650</td>
                            <td>13.500</td>
                            <td>42.000</td>
                            <td>44.700</td>
                        </tr>
                        <tr class="t-row">
                            <td>6.0</td>
                            <td>47.100</td>
                            <td>47.580</td>
                            <td>16.200</td>
                            <td>50.400</td>
                            <td>53.640</td>
                        </tr>
                        <tr class="t-row">
                            <td>8.0</td>
                            <td>62.800</td>
                            <td>63.440</td>
                            <td>21.600</td>
                            <td>67.200</td>
                            <td>71.520</td>
                        </tr>
                        <tr class="t-row">
                            <td>10.0</td>
                            <td>78.500</td>
                            <td>79.300</td>
                            <td>27.000</td>
                            <td>84.000</td>
                            <td>89.400</td>
                        </tr>
                        <tr class="t-row">
                            <td>12.0</td>
                            <td>94.200</td>
                            <td>95.160</td>
                            <td>32.400</td>
                            <td>100.800</td>
                            <td>107.280</td>
                        </tr>
                        <tr class="t-row">
                            <td>15.0</td>
                            <td>117.750</td>
                            <td>118.950</td>
                            <td>40.500</td>
                            <td>126.000</td>
                            <td>134.100</td>
                        </tr>
                        <tr class="t-row">
                            <td>16.0</td>
                            <td>125.600</td>
                            <td>126.880</td>
                            <td>43.200</td>
                            <td>134.400</td>
                            <td>142.560</td>
                        </tr>
                        <tr class="t-row">
                            <td>18.0</td>
                            <td>141.300</td>
                            <td>142.740</td>
                            <td>48.600</td>
                            <td>151.200</td>
                            <td>160.920</td>
                        </tr>
                        <tr class="t-row">
                            <td>20.0</td>
                            <td>157.000</td>
                            <td>158.600</td>
                            <td>54.000</td>
                            <td>168.000</td>
                            <td>178.800</td>
                        </tr>
                        <tr class="t-row">
                            <td>25.0</td>
                            <td>196.250</td>
                            <td>198.250</td>
                            <td>67.500</td>
                            <td>210.000</td>
                            <td>223.500</td>
                        </tr>
                        <tr class="t-row">
                            <td>30.0</td>
                            <td>235.500</td>
                            <td>237.900</td>
                            <td>81.000</td>
                            <td>252.000</td>
                            <td>268.200</td>
                        </tr>
                        <tr class="t-row">
                            <td>35.0</td>
                            <td>274.750</td>
                            <td>277.550</td>
                            <td>94.500</td>
                            <td>294.000</td>
                            <td>312.900</td>
                        </tr>
                        <tr class="t-row">
                            <td>40.0</td>
                            <td>314.000</td>
                            <td>317.200</td>
                            <td>108.000</td>
                            <td>336.000</td>
                            <td>357.600</td>
                        </tr>
                        <tr class="t-row">
                            <td>50.0</td>
                            <td>392.500</td>
                            <td>396.500</td>
                            <td>135.000</td>
                            <td>420.000</td>
                            <td>447.000</td>
                        </tr>
                        <tr class="t-row">
                            <td>60.0</td>
                            <td>471.000</td>
                            <td>475.800</td>
                            <td>162.000</td>
                            <td>504.000</td>
                            <td>536.400</td>
                        </tr>
                        <tr class="t-row">
                            <td>80.0</td>
                            <td>628.000</td>
                            <td>634.400</td>
                            <td>216.000</td>
                            <td>672.000</td>
                            <td>715.200</td>
                        </tr>
                        <tr class="t-row">
                            <td>100.0</td>
                            <td>785.000</td>
                            <td>793.000</td>
                            <td>270.000</td>
                            <td>840.000</td>
                            <td>894.000</td>
                        </tr>
                    </tbody>
                </table>
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
                <h4 class="text-center mb-0" style="color: #db7227;"><strong>Sheets and Plates</strong> in a wide range
                    of
                    grades, ensuring suitability for different applications, environments,
                    and design goals:</h4>
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
                                    <td>Stainless Steel</td>
                                    <td>
                                        304, 304L, 316, 316L, 310, 321, 347 – corrosion-resistant for food, pharma, and
                                        marine uses
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon & Mild Steel</td>
                                    <td>
                                        ASTM A36, IS 2062, EN 10025 – for structural and general engineering
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Duplex & Super Duplex</td>
                                    <td>
                                        2205, S31803, S32750 – for offshore, oil & gas, and chemical plants
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nickel Alloys</td>
                                    <td>
                                        Inconel, Monel, <a href="{{ route('materials.hastelloy') }}">Hastelloy</a> – for
                                        heat resistant and corrosive environments
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Aluminum</td>
                                    <td>
                                        <a href="{{ route('materials.aluminium-Alloys') }}">1100, 5052, 6061, 6082</a> –
                                        light weight, corrosion resistant, used in transport &
                                        aerospace
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Copper & Brass</td>
                                    <td>
                                        Decorative, electrical & plumbing applications
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Titanium</td>
                                    <td>
                                        <a href="{{ route('materials.titanium') }}">Grades 1, 2, 5</a> – for aerospace,
                                        desalination, and medical uses
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- Gallery --}}
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
                                <img class="w-100" src="{{ asset('assets/images/peoduct/NICKLE-ALLOYS.jpeg') }}"
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
                                <img class="w-100" src="{{ asset('assets/images/peoduct/STAINLESS-STEEL.jpeg') }}"
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
                                <img class="w-100" src="{{ asset('assets/images/peoduct/DUPLEX-SUPER.png') }}"
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
                                <img class="w-100" src="{{ asset('assets/images/peoduct/TITANIUM-ALLOYS.jpg') }}"
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
                                <img class="w-100" src="{{ asset('assets/images/peoduct/RARE-TO-ALLOYS.jpg') }}"
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
                                <img class="w-100" src="{{ asset('assets/images/peoduct/CARBON-ALLOYS.jpg') }}"
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
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Types of Sheets & Plates</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building"></i></div>
                        <h4>Hot Rolled Sheets & Plates (HR)</h4>
                        <h5>Produced at high temperature, suitable for structural & heavy duty applications.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h4>Cold Rolled Sheets (CR)</h4>
                        <h5>Smooth surface, tight tolerances for precision manufacturing.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-stars"></i></div>
                        <h4><a href="{{ url('products/sheets-plates-coils/chequered-sheets') }}">Chequered</a> Plates</h4>
                        <h5>Anti slip surface for flooring, stairs, ramps.</h5>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-6">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-tools"></i></div>
                        <h4>Perforated Sheets</h4>
                        <h5>Sheets with punched holes for ventilation, filtration, and design.</h5>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-6">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h4>Cladded Plates</h4>
                        <h5>Plates with corrosion resistant layers bonded to a structural base.</h5>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications</h2>
                <p class="text-center pb-3">
                    <strong class="text-black">Sheets and Plates</strong> is versatile and used across a variety of
                    industries and settings:
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
                            <li>Structural fabrication for columns, beams, bridges, facades, flooring, reinforcement for
                                concrete structures</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon">
                            <i class="bi bi-water"></i>
                        </div>
                        <h5>Shipbuilding & Marine</h5>
                        <ul>
                            <li>Hulls, decks, offshore platforms, pontoons, ballast tanks, storage tanks for harsh
                                marine environments</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon">
                            <i class="bi bi-fuel-pump"></i>
                        </div>
                        <h5>Oil, Gas & Petrochemical</h5>
                        <ul>
                            <li>Pressure vessels, boilers, refinery equipment, separators, heat exchanger shells</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon">
                            <i class="bi bi-truck-front"></i>
                        </div>
                        <h5>Automotive & Aerospace</h5>
                        <ul>
                            <li>Chassis, panels, truck beds, railway underframes, metro coaches, aerospace components
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon">
                            <i class="bi bi-gear-wide-connected"></i>
                        </div>
                        <h5>Industrial Fabrication</h5>
                        <ul>
                            <li>Machine bases, conveyor systems, hoppers, ducts, silos, repair & maintenance
                                applications</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon">
                            <i class="bi bi-bricks"></i>
                        </div>
                        <h5>Decorative & Architectural</h5>
                        <ul>
                            <li>Interior partitions, exterior cladding, signage, decorative roofing, designer elements
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6">
                    <div class="application-card">
                        <div class="application-icon">
                            <i class="bi bi-shop"></i>
                        </div>
                        <h5>Food Processing & Pharma</h5>
                        <ul>
                            <li>Stainless steel sheets for sanitary tanks, cleanroom walls, counters, processing
                                equipment</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6">
                    <div class="application-card">
                        <div class="application-icon">
                            <i class="bi bi-lightning-charge-fill"></i>
                        </div>
                        <h5>Power Generation & Energy</h5>
                        <ul>
                            <li>Boiler walls, condensers, solar panel frames, wind turbine parts, hydroelectric
                                structures</li>
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

    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Uses of Sheets and Plates</h2>
            </div>
            <!-- Child Title -->
            <div class="section-title center mb-3">
                <h4 class="text-center mb-0" style="color: #db7227;">Sheets and plates are used extensively
                    across multiple
                    industries, including:</h4>
            </div>
            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-nut"></i></div>
                        <h4>Provides structural strength in heavy <a
                                href="{{ route('materials.engineering-Steels') }}">engineering</a> projects</h4>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear"></i></div>
                        <h4>Offers corrosion resistance for marine & chemical environments</h4>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-diagram-3"></i></div>
                        <h4>Suitable for cutting, bending, and fabrication into components</h4>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-brush"></i></div>
                        <h4>Available in decorative finishes for architectural applications</h4>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-6">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-lightning-charge"></i></div>
                        <h4>Essential for pressure retaining equipment like <a
                                href="{{ url('products/pipes-tubes/boiler-heat-exchanger-tubes') }}">boilers</a> and tanks
                        </h4>
                    </div>
                </div>
            </div>


        </div>
    </section>


    {{-- Advantages of Welded Pipes & Tubes --}}
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Advantages of Sheets and Plates</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-tools"></i></div>
                        <h4>Versatile Material Selection</h4>
                        <h5>Wide range of alloys for every industry</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-bullseye"></i></div>
                        <h4>Durable & Reliable</h4>
                        <h5>Withstands high stress, temperature, and corrosion</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-cash-coin"></i></div>
                        <h4>Custom Sizes Available</h4>
                        <h5>Tailored thickness, width, and length for projects</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-layers"></i></div>
                        <h4>Superior Surface Finish</h4>
                        <h5>Cold rolled, polished, or mirror options available</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-globe2"></i></div>
                        <h4>Compliance with Global Standards</h4>
                        <h5>ASTM, ASME, DIN, EN, JIS certified</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-sliders"></i></div>
                        <h4>Supports Multiple Processes</h4>
                        <h5>Can be laser-cut, welded, and fabricated easily</h5>
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
                            <h2>Frequently Asked Questions (FAQ) – Sheets & Plates</h2>
                        </div>

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What is the difference between sheets and plates?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    <b>Sheets:</b> Flat rolled metal with a thickness usually below 6 mm.<br>
                                    <b>Plates:</b> Flat rolled metal with a thickness above 6 mm.<br>
                                    Both are used in construction, fabrication, and industrial applications, but plates
                                    are generally preferred for heavy-duty uses.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Which materials are available in sheets & plates?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    They are available in stainless steel, carbon steel, alloy steel, aluminum, copper,
                                    brass, titanium, nickel alloys, duplex/super duplex, and other special alloys.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What size range is offered?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Thickness: 0.3 mm to 200 mm (varies by material)<br>
                                    Width: up to 2500 mm (custom widths possible)<br>
                                    Length: custom cut lengths or standard 2000 mm, 2500 mm, 6000 mm, etc.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the common applications of sheets & plates?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Pressure vessels and boilers<br>
                                    Oil & gas pipelines<br>
                                    Heat exchangers and condensers<br>
                                    Aerospace & marine structures<br>
                                    Automotive & rail industry<br>
                                    Construction, bridges & heavy machinery<br>
                                    Food processing and medical equipment
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What finishes are available for sheets & plates?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Sheets & plates can be supplied in finishes such as 2B, BA, HR, No.1, No.4,
                                    polished, matte, checkered, perforated, or coated.
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

    {{-- why choose us --}}
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container text-center">
            <div class="section-title center">
                <h2>WHY CHOOSE US?</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-box-seam"></i></div>
                        <h5>Extensive Stock: Sheets & plates in multiple grades and sizes ready to ship.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Global Reach: Serving oil & gas, construction, and marine industries worldwide.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Custom Solutions: Cut-to-size, polishing, and finishing as per requirements.</h5>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-patch-check-fill"></i></div>
                        <h5>Quality Assurance: ISO 9001:2015 certified with mill test certificates (MTC).</h5>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Timely Delivery: Efficient logistics for on-time project fulfillment.</h5>
                    </div>
                </div>
            </div>


        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Contact Us</h2>
                <p>
                    Looking for Sheets & Plates that meet international standards?<br>Contact <strong><a
                            href="{{ route('index') }}">Moksh Tubes & Fittings LLP</a></strong>
                </p>
                <!-- Call button -->
                <a href="javascript:void(0);" class="contact-cta-btn" data-bs-toggle="modal"
                    data-bs-target="#contactFormModal">
                    Get in Touch
                </a>
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
                "name": "What is the difference between sheets and plates?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Sheets: Flat rolled metal with a thickness usually below 6 mm. Plates: Flat rolled metal with a thickness above 6 mm. Both are used in construction, fabrication, and industrial applications, but plates are generally preferred for heavy-duty uses."
                }
                },
                {
                "@type": "Question",
                "name": "Which materials are available in sheets & plates?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "They are available in stainless steel, carbon steel, alloy steel, aluminum, copper, brass, titanium, nickel alloys, duplex/super duplex, and other special alloys."
                }
                },
                {
                "@type": "Question",
                "name": "What size range is offered?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Thickness: 0.3 mm to 200 mm (varies by material). Width: up to 2500 mm (custom widths possible). Length: custom cut lengths or standard 2000 mm, 2500 mm, 6000 mm, etc."
                }
                },
                {
                "@type": "Question",
                "name": "What are the common applications of sheets & plates?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Pressure vessels and boilers, Oil & gas pipelines, Heat exchangers and condensers, Aerospace & marine structures, Automotive & rail industry, Construction, bridges & heavy machinery, Food processing and medical equipment."
                }
                },
                {
                "@type": "Question",
                "name": "What finishes are available for sheets & plates?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Sheets & plates can be supplied in finishes such as 2B, BA, HR, No.1, No.4, polished, matte, checkered, perforated, or coated."
                }
                }
            ]
            }
        
        @endverbatim
    </script>
@endsection
