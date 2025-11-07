@extends('layouts.master')
@section('title', 'Flat Bars – Stainless, Alloy, Aluminium & Brass') <!-- 52 characters -->
@section('meta_description',
    'Mokshtubes offers high-quality stainless, alloy, aluminium, and brass flat bars in various
    sizes, grades & custom cuts.') <!-- 153 characters -->
@section('meta_keywords', 'Flat Bars, Stainless Flat Bars, Alloy Flat Bars, Aluminium Flat Bars, Brass Flat Bars')
@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/peoduct/Flat-Bars.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>High Quality Stainless & Alloy Flat Bars</h1> <!-- 52 characters -->
                </div>
            </div>
        </div>
    </section>



    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Flat Bars</h2>
            </div>

            <div class="row align-items-center">
                <!-- Left Image -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/peoduct/Flat-Bars.jpg') }}"
                        alt="Flat Bars" class="img-fluid rounded shadow-sm">
                </div>

                <!-- Right Content -->
                <div class="col-md-6">
                    <p class="fs-6 mb-3 text-justify">
                        <strong class="text-black">Flat Bars</strong> are strong and versatile rectangular shaped <a
                            href="{{ route('products.bars-rods') }}">metal bars</a>
                        widely used in construction, fabrication, and engineering applications. Whether you need a steel
                        flat bar, mild steel flat bar (MS flat bar), or stainless steel flat bar (SS flat bar) <a
                            href="{{ route('index') }}">Moksh Tubes
                            & Fittings LLP</a> supplies precision engineered products manufactured to ASTM, ASME, DIN, EN,
                        and JIS
                        standards.
                    <p class="fs-6 mb-3 text-justify">
                        We stock a wide range including hot rolled flat bars, polished stainless steel flat bar, <a
                            href="{{ route('materials.aluminium-Alloys') }}">aluminium</a>
                        flat bar, brass flat bar, copper flat bar, and even specialty alloys like <a
                            href="{{ route('materials.titanium') }}">titanium</a> flat bar, nylon
                        flat bar, and plastic flat bar.
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
                                    <td>Materials</td>
                                    <td>Stainless Steel, Mild Steel, Alloy Steel, Duplex & Super Duplex, Aluminium, Brass,
                                        Copper, <a href="{{ route('materials.nickel-Based-Superalloys') }}">Nickel
                                            Alloys</a></td>
                                </tr>
                                <tr class="t-row">
                                    <td>Thickness</td>
                                    <td>3 mm to 100 mm (custom thickness available)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Widths</td>
                                    <td>20 mm to 400 mm (standard flat bar sizes & custom flat bar dimensions on request)
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Lengths</td>
                                    <td>3 meters to 6 meters (cut-to-length available)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Types</td>
                                    <td>Hot Rolled Steel Flat Bar, Cold Drawn, Polished, Edge Chamfered Bars</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Finishes</td>
                                    <td>Mill Finish, Pickled & Passivated, Polished (Matte, Hairline, Mirror)</td>
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
                <h4 class="text-center mb-0" style="color: #db7227;">Weight Chart</h4>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr class="t-row">
                            <th>Width (mm)</th>
                            <th>Width (inch)</th>
                            <th>Thickness Range (mm)</th>
                            <th>Standard Length (m)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row">
                            <td>20</td>
                            <td>3/4"</td>
                            <td>3 – 25</td>
                            <td>6</td>
                        </tr>
                        <tr class="t-row">
                            <td>25</td>
                            <td>1"</td>
                            <td>3 – 25</td>
                            <td>6</td>
                        </tr>
                        <tr class="t-row">
                            <td>30</td>
                            <td>1.1/4"</td>
                            <td>3 – 25</td>
                            <td>6</td>
                        </tr>
                        <tr class="t-row">
                            <td>40</td>
                            <td>1.1/2"</td>
                            <td>3 – 30</td>
                            <td>6</td>
                        </tr>
                        <tr class="t-row">
                            <td>50</td>
                            <td>2"</td>
                            <td>3 – 40</td>
                            <td>6</td>
                        </tr>
                        <tr class="t-row">
                            <td>65</td>
                            <td>2.1/2"</td>
                            <td>5 – 40</td>
                            <td>6</td>
                        </tr>
                        <tr class="t-row">
                            <td>75</td>
                            <td>3"</td>
                            <td>5 – 50</td>
                            <td>6</td>
                        </tr>
                        <tr class="t-row">
                            <td>100</td>
                            <td>4"</td>
                            <td>6 – 50</td>
                            <td>6</td>
                        </tr>
                        <tr class="t-row">
                            <td>125</td>
                            <td>5"</td>
                            <td>6 – 60</td>
                            <td>6</td>
                        </tr>
                        <tr class="t-row">
                            <td>150</td>
                            <td>6"</td>
                            <td>6 – 60</td>
                            <td>6</td>
                        </tr>
                        <tr class="t-row">
                            <td>200</td>
                            <td>8"</td>
                            <td>8 – 80</td>
                            <td>6</td>
                        </tr>
                        <tr class="t-row">
                            <td>250</td>
                            <td>10"</td>
                            <td>10 – 80</td>
                            <td>6</td>
                        </tr>
                        <tr class="t-row">
                            <td>300</td>
                            <td>12"</td>
                            <td>10 – 100</td>
                            <td>6</td>
                        </tr>
                    </tbody>
                </table>


            </div>
        </div>
    </section>
    <section class="bg-light" style="padding-top: 80px;">
        <div class="container">

            <!-- Parent Title -->
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Flat Bar</h2>
            </div>

            <!-- Child Title -->
            <div class="section-title center mb-3">
                <h4 class="text-center mb-0" style="color: #db7227;">Expanded Table (for one item – Flat Bar)</h4>
            </div>


            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle text-center">
                            <thead class="table-dark">
                                <tr class="t-row">
                                    <th>Width (mm)</th>
                                    <th>Thickness (mm)</th>
                                    <th>Weight (kg/m)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>25</td>
                                    <td>5</td>
                                    <td>0.98</td>
                                </tr>
                                <tr class="t-row">
                                    <td>25</td>
                                    <td>10</td>
                                    <td>1.96</td>
                                </tr>
                                <tr class="t-row">
                                    <td>50</td>
                                    <td>5</td>
                                    <td>1.96</td>
                                </tr>
                                <tr class="t-row">
                                    <td>50</td>
                                    <td>10</td>
                                    <td>3.93</td>
                                </tr>
                                <tr class="t-row">
                                    <td>50</td>
                                    <td>20</td>
                                    <td>7.85</td>
                                </tr>
                                <tr class="t-row">
                                    <td>75</td>
                                    <td>6</td>
                                    <td>3.53</td>
                                </tr>
                                <tr class="t-row">
                                    <td>75</td>
                                    <td>12</td>
                                    <td>7.06</td>
                                </tr>
                                <tr class="t-row">
                                    <td>100</td>
                                    <td>6</td>
                                    <td>4.71</td>
                                </tr>
                                <tr class="t-row">
                                    <td>100</td>
                                    <td>12</td>
                                    <td>9.42</td>
                                </tr>
                                <tr class="t-row">
                                    <td>100</td>
                                    <td>20</td>
                                    <td>15.70</td>
                                </tr>
                                <tr class="t-row">
                                    <td>150</td>
                                    <td>10</td>
                                    <td>11.78</td>
                                </tr>
                                <tr class="t-row">
                                    <td>150</td>
                                    <td>20</td>
                                    <td>23.55</td>
                                </tr>
                                <tr class="t-row">
                                    <td>200</td>
                                    <td>12</td>
                                    <td>18.84</td>
                                </tr>
                                <tr class="t-row">
                                    <td>200</td>
                                    <td>25</td>
                                    <td>39.25</td>
                                </tr>
                                <tr class="t-row">
                                    <td>250</td>
                                    <td>20</td>
                                    <td>39.25</td>
                                </tr>
                                <tr class="t-row">
                                    <td>300</td>
                                    <td>25</td>
                                    <td>58.88</td>
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
                <h2 class="fw-bold" style="color: #174268;">Flat Bar Sections</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle text-center">
                            <thead class="table-dark">
                                <tr class="t-row">
                                    <th>Thickness (mm)</th>
                                    <th>Available Width Range (mm)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>3</td>
                                    <td>20 – 100</td>
                                </tr>
                                <tr class="t-row">
                                    <td>5</td>
                                    <td>20 – 150</td>
                                </tr>
                                <tr class="t-row">
                                    <td>6</td>
                                    <td>25 – 200</td>
                                </tr>
                                <tr class="t-row">
                                    <td>8</td>
                                    <td>40 – 250</td>
                                </tr>
                                <tr class="t-row">
                                    <td>10</td>
                                    <td>50 – 300</td>
                                </tr>
                                <tr class="t-row">
                                    <td>12</td>
                                    <td>50 – 300</td>
                                </tr>
                                <tr class="t-row">
                                    <td>16</td>
                                    <td>75 – 300</td>
                                </tr>
                                <tr class="t-row">
                                    <td>20</td>
                                    <td>100 – 300</td>
                                </tr>
                                <tr class="t-row">
                                    <td>25</td>
                                    <td>100 – 300</td>
                                </tr>
                                <tr class="t-row">
                                    <td>30</td>
                                    <td>150 – 300</td>
                                </tr>
                                <tr class="t-row">
                                    <td>40</td>
                                    <td>200 – 300</td>
                                </tr>
                                <tr class="t-row">
                                    <td>50</td>
                                    <td>200 – 300</td>
                                </tr>
                                <tr class="t-row">
                                    <td>60 – 100</td>
                                    <td>250 – 300</td>
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
                <h2 class="fw-bold" style="color: #174268;">Rectangular Flat Bar Sections</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle text-center">
                            <thead class="table-dark">
                                <tr class="t-row">
                                    <th>Width (mm)</th>
                                    <th>Thickness (mm)</th>
                                    <th>Sectional Area (mm²)</th>
                                    <th>Weight (kg/m)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>20</td>
                                    <td>3</td>
                                    <td>60</td>
                                    <td>0.47</td>
                                </tr>
                                <tr class="t-row">
                                    <td>25</td>
                                    <td>5</td>
                                    <td>125</td>
                                    <td>0.98</td>
                                </tr>
                                <tr class="t-row">
                                    <td>40</td>
                                    <td>6</td>
                                    <td>240</td>
                                    <td>1.88</td>
                                </tr>
                                <tr class="t-row">
                                    <td>50</td>
                                    <td>10</td>
                                    <td>500</td>
                                    <td>3.93</td>
                                </tr>
                                <tr class="t-row">
                                    <td>65</td>
                                    <td>12</td>
                                    <td>780</td>
                                    <td>6.13</td>
                                </tr>
                                <tr class="t-row">
                                    <td>75</td>
                                    <td>16</td>
                                    <td>1200</td>
                                    <td>9.42</td>
                                </tr>
                                <tr class="t-row">
                                    <td>100</td>
                                    <td>20</td>
                                    <td>2000</td>
                                    <td>15.7</td>
                                </tr>
                                <tr class="t-row">
                                    <td>125</td>
                                    <td>25</td>
                                    <td>3125</td>
                                    <td>24.53</td>
                                </tr>
                                <tr class="t-row">
                                    <td>150</td>
                                    <td>30</td>
                                    <td>4500</td>
                                    <td>35.33</td>
                                </tr>
                                <tr class="t-row">
                                    <td>200</td>
                                    <td>40</td>
                                    <td>8000</td>
                                    <td>62.8</td>
                                </tr>
                                <tr class="t-row">
                                    <td>250</td>
                                    <td>50</td>
                                    <td>12500</td>
                                    <td>98.1</td>
                                </tr>
                                <tr class="t-row">
                                    <td>300</td>
                                    <td>60</td>
                                    <td>18000</td>
                                    <td>141.3</td>
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
                <h4 class="text-center mb-0" style="color: #db7227;"><strong>Flat Bar</strong> is
                    manufactured in a wide range of grades, ensuring suitability for different applications, environments,
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
                                    <td>Stainless Steel Flat Bar Sizes</td>
                                    <td><a
                                            href="{{ url('materials\austenitic-stainless-steel\austenitic-stainless-steel-304') }}">304</a>,
                                        304L, 316, 316L, 310, 321, 347</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Mild Steel Flat Bar Sizes</td>
                                    <td>ASTM A36, IS 2062, EN 10025</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Alloy Steel</td>
                                    <td>4140, 4130, EN19, EN24</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Duplex & Super Duplex</td>
                                    <td>2205, S32750, S32760</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Aluminium Alloy Flat Bars</td>
                                    <td>1100, 5052, 6061, 6082</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Copper & Brass</td>
                                    <td>C11000, C26000</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nickel Alloys</td>
                                    <td>Monel, Inconel, Hastelloy</td>
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
    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications</h2>
                <p class="text-center pb-3">
                    <strong class="text-black">Flat Bar</strong> is versatile and used across a variety of
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
                            <li>Structural supports, braces, and base plates</li>
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
                            <li>Copper <a href="{{ route('materials.nickel-Based-Superalloys') }}">nickel</a> and <a
                                    href="{{ route('materials.duplex-and-super-duplex') }}">duplex</a> flat bar rail, hull
                                reinforcement, offshore platforms</li>
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
                            <li>Corrosion resistant SS flat bar for pipe racks and skids</li>
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
                            <li><a href="{{ route('materials.aluminium-Alloys') }}">Aluminium</a> flat bar and titanium
                                flat bar for body trims, brackets, and aircraft parts</li>
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
                            <li>Machinery frames, tools, conveyors</li>
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
                            <li>Flat bar grill design, flat bar gate design, luxury interiors with mirror-finished SS flat
                                bar</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon">
                            <i class="bi bi-tools"></i>
                        </div>
                        <h5>Engineering Workshops</h5>
                        <ul>
                            <li>Flat bar bending machine, flat bar cutting machine, bending steel flat bar applications</li>
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
                <h2>Pricing & Availability Flat Bars</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building"></i></div>
                        <h4>Mild Steel Flat Bar Prices</h4>
                        <h5>Available across India & Bangladesh (BSRM, Bashundhara Steel flat bar supplier in BD)</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-patch-check"></i></div>
                        <h4>Stainless Steel Flat Bar Prices</h4>
                        <h5>Grades available: 304, <a
                                href="{{ url('materials/austenitic-stainless-steel/austenitic-stainless-steel-316') }}">316</a>,
                            416</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-bank"></i></div>
                        <h4>Aluminium Flat Bar Prices</h4>
                        <h5>For architecture & fabrication (Bangladesh market)</h5>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-6">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-globe2"></i></div>
                        <h4>Copper Flat Bar Suppliers</h4>
                        <h5>Export ready from South Africa</h5>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-6">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-box-seam"></i></div>
                        <h4>Nickel Flat Bar Suppliers</h4>
                        <h5>Available for international markets with corrosion resistance</h5>
                    </div>
                </div>
            </div>


        </div>
    </section>


    {{-- Advantages of Welded Pipes & Tubes --}}
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Advantages of Flat Bars</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-layers"></i></div>
                        <h4>Wide Range</h4>
                        <h5>From MS steel flat bar to polished stainless steel flat bar</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h4>Strong & Durable</h4>
                        <h5>Corrosion resistant for long lasting performance</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-box-seam"></i></div>
                        <h4>Ready Stock</h4>
                        <h5>Available in popular sizes & grades</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-scissors"></i></div>
                        <h4>Custom Cutting</h4>
                        <h5>Special dimensions & finishing available</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-patch-check"></i></div>
                        <h4>International Standards</h4>
                        <h5>ISO 9001:2015 certified quality assurance</h5>
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
                        <div class="why-banner-icon"><i class="bi bi-people-fill"></i></div>
                        <h5>Trusted flat bar suppliers in India & worldwide</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-layers"></i></div>
                        <h5>Ready stock of SS flat bar, MS flat bar, and aluminium alloy flat bars</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Export to Bangladesh, South Africa, Middle East, and Europe</h5>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Fast delivery, mill test certificates (MTCs), third-party inspections available</h5>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-cash-coin"></i></div>
                        <h5>Competitive pricing with bulk order discounts</h5>
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
                                <h4>What is the standard flat bar size?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Standard flat bar sizes vary by thickness and width. Common sizes range from 3mm to 50mm
                                    thickness
                                    and 12mm to 300mm width. Custom sizes are also available on request.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>How to calculate MS flat bar weight?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    The weight of a mild steel (MS) flat bar can be calculated using the formula:<br>
                                    <strong>Weight (kg) = Length (m) × Width (m) × Thickness (m) × 7850</strong><br>
                                    Where 7850 kg/m³ is the density of mild steel. A weight chart or <a
                                        href="{{ route('calculator') }}">calculator</a> can make
                                    this easier.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What <a href="{{ route('materials') }}">materials</a> are available for flat bars?
                                </h4>
                            </div>
                            <div class="accord-content">

                                Flat bars are available in <a
                                    href="{{ route('materials.high-strength-stainless-steel') }}">steel (SS)</a>, mild
                                steel (MS), alloy steel,
                                <a href="{{ route('materials.aluminium-Alloys') }}">aluminium</a>, <a
                                    href="{{ route('materials.copper-Alloys') }}">copper</a>,
                                brass, <a href="{{ route('materials.nickel-Based-Superalloys') }}">nickel alloys</a>,
                                and <a href="{{ route('materials.titanium') }}">titanium</a>. Grades comply with ASTM,
                                ASME, DIN, EN, and JIS
                                standards.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Can flat bars be custom cut?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Yes, flat bars can be custom cut to specific lengths, widths, or thicknesses according
                                    to
                                    project requirements. This is ideal for machining, fabrication, or structural
                                    applications.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What finishes are available for stainless steel flat bars?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Stainless steel flat bars come in bright, polished, mill finish, peeled & ground,
                                    shot blasted, pickled & passivated finishes, ensuring excellent surface quality
                                    for decorative and industrial applications.
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

    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Contact Us</h2>
                <p>
                    Looking for flat bars, steel slotted metal flat bar, or custom flat bar grating solutions?<br>Contact
                    <strong><a href="{{ route('index') }}">Moksh Tubes & Fittings LLP</a></strong>
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
      "name": "What is the standard flat bar size?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Standard flat bar sizes vary by thickness and width. Common sizes range from 3mm to 50mm thickness and 12mm to 300mm width. Custom sizes are also available on request."
      }
    },
    {
      "@type": "Question",
      "name": "How to calculate MS flat bar weight?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The weight of a mild steel (MS) flat bar can be calculated using the formula: Weight (kg) = Length (m) × Width (m) × Thickness (m) × 7850, where 7850 kg/m³ is the density of mild steel. A weight chart or an on-site calculator can make this easier."
      }
    },
    {
      "@type": "Question",
      "name": "What materials are available for flat bars?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Flat bars are available in steel (stainless steel), mild steel (MS), alloy steel, aluminium, copper, brass, nickel alloys, and titanium. Grades comply with standards such as ASTM, ASME, DIN, EN, and JIS."
      }
    },
    {
      "@type": "Question",
      "name": "Can flat bars be custom cut?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Flat bars can be custom cut to specific lengths, widths, or thicknesses according to project requirements. This is ideal for machining, fabrication, or structural applications."
      }
    },
    {
      "@type": "Question",
      "name": "What finishes are available for stainless steel flat bars?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Stainless steel flat bars come in bright, polished, mill finish, peeled & ground, shot blasted, pickled & passivated finishes to provide suitable surface quality for decorative and industrial uses."
      }
    }
  ]
}
@endverbatim
</script>
@endsection
