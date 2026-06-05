@extends('layouts.master')

@section('title', 'Threaded Rods Manufacturer, Supplier & Exporter in India | SS, Alloy & Carbon Steel')
@section('meta_description', 'Buy Threaded Rods in Stainless Steel, Carbon Steel, Alloy Steel, Duplex, Nickel Alloy & Galvanized grades. Available in M6–M64 sizes with weight chart, specifications and worldwide supply.')
@section('meta_keywords', 'Threaded Rods, Stainless Steel Threaded Rods, Galvanized Threaded Rods, ASTM A193 B7 Threaded Rods, SS 316 Threaded Rods, Metric Threaded Rods, Industrial Threaded Rods, Stud Rods')
@section('og_image', asset('assets/images/product/Bars-&-Rods/threaded-rods.webp'))
@section('og_type', 'article')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url('{{ asset('assets/images/product/Bars-&-Rods/threaded-rods.webp') }}');">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>THREADED RODS<br>STAINLESS STEEL, CARBON STEEL, ALLOY STEEL & GALVANIZED</h1>

                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px; max-width: 900px;">
                        Threaded Rods are among the most widely used fastening products in construction, infrastructure, manufacturing, oil & gas, marine, and industrial applications. Designed with continuous threading along the entire length, these rods provide secure fastening, easy adjustability, and exceptional load-bearing capability.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

    <!-- Start Material Tabs -->
    <div class="sticky-top bg-white border-bottom material-tabs w-100">
        <div class="container d-flex flex-wrap justify-content-center" style="gap: 15px; padding: 10px 0;">
            <a href="#overview">Overview</a> |
            <a href="#specifications">Specifications</a> |
            <a href="#weight-chart">Weight Chart</a> |
            <a href="#types">Types</a> |
            <a href="#grades">Grades</a> |
            <a href="#manufacturing">Manufacturing</a> |
            <a href="#mechanical">Mechanical Properties</a> |
            <a href="#applications">Applications</a> |
            <a href="#advantages">Advantages</a> |
            <a href="#buying-guide">Buying Guide</a> |
            <a href="#testing">Testing</a> |
            <a href="#industries">Industries We Serve</a> |
            <a href="#why-choose-us">Why Choose Us</a> |
            <a href="#faq">FAQ</a>
        </div>
    </div>
    <!-- End Material Tabs -->

    <section id="overview" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Product Overview</h2>
            </div>

            <h3 class="fw-semibold text-center mb-5" style="color: #db7227;">
                THREADED RODS
            </h3>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/product/Bars-&-Rods/threaded-rods.webp') }}" alt="Threaded Rods"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4" style="text-align: justify;">
                            <strong class="text-black">Threaded Rods</strong>, commonly referred to as Stud Rods, All-Thread Rods, or Thread Bars, are essential fastening components used to connect, secure, suspend, and reinforce structures and mechanical assemblies. Unlike standard bolts, threaded rods feature threading along their entire length, allowing nuts and washers to be installed at any position.
                        </p>

                        <p class="fs-6 mb-4" style="text-align: justify;">
                            These versatile fasteners are extensively used in steel structures, concrete anchoring systems, HVAC installations, piping supports, marine structures, petrochemical plants, and heavy engineering projects where strength and reliability are critical.
                        </p>

                        <p class="fs-6 mb-4" style="text-align: justify;">
                            At <strong style="color:black;"><a href="{{ url('/contact-us') }}">Moksh Tubes & Fittings LLP</a></strong>, we offer a complete range of Threaded Rods manufactured from corrosion-resistant and high-strength materials suitable for harsh industrial environments, offshore installations, and structural applications.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            We supply premium-quality Threaded Rods in Stainless Steel, Carbon Steel, Alloy Steel, Duplex Steel, Nickel Alloys, Titanium, Brass, Copper, and Galvanized Steel grades. Our threaded rods are manufactured according to ASTM, ASME, DIN, ISO, and BS standards and are available in multiple diameters, thread types, finishes, and custom lengths for domestic and international projects.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Threaded Rods Datasheet</h3>
            <p class="mb-3">
                Get the complete datasheet including chemical composition, mechanical properties, standards, tolerances, and
                application guidelines. Enter your email to receive the PDF instantly.
            </p>

            <form id="leadForm" method="POST" action="{{ route('lead.capture') }}" class="mb-3">
                @csrf
                <input type="hidden" name="page_path" value="{{ Request::path() }}">
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
            <div class="section-title center">
                <h2>Threaded Rod Specifications</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Category</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Product</td>
                                    <td>Threaded Rods / Stud Rods</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Diameter Range</td>
                                    <td>M6 to M64</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Imperial Sizes</td>
                                    <td>1/4" to 4"</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Length</td>
                                    <td>1m, 2m, 3m & Custom Lengths</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Thread Type</td>
                                    <td>UNC, UNF, Metric Coarse, Metric Fine</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Standards</td>
                                    <td>DIN 975, DIN 976, ASTM A193, ASTM A307, ISO 898-1</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Materials</td>
                                    <td>Stainless Steel, Carbon Steel, Alloy Steel, Duplex, Nickel Alloy, Titanium, Brass & Copper</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Finishes</td>
                                    <td>Plain, Zinc Plated, Hot Dip Galvanized, PTFE Coated, Passivated</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Certification</td>
                                    <td>EN 10204 3.1, MTC Available</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="weight-chart" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Threaded Rod Weight Chart</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10 mb-4">
                    <h4 class="text-center mb-3" style="color: #db7227;">Threaded Rods Weight Chart (Metric – ISO Coarse Pitch)</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Nominal Size (M)</th>
                                    <th>Pitch (mm)</th>
                                    <th>Tensile Stress Area (mm²)</th>
                                    <th>Weight (kg/m)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>M6</td><td>1.00</td><td>20.1</td><td>0.222</td></tr>
                                <tr class="t-row"><td>M8</td><td>1.25</td><td>36.6</td><td>0.373</td></tr>
                                <tr class="t-row"><td>M10</td><td>1.50</td><td>58.0</td><td>0.579</td></tr>
                                <tr class="t-row"><td>M12</td><td>1.75</td><td>84.3</td><td>0.821</td></tr>
                                <tr class="t-row"><td>M14</td><td>2.00</td><td>115</td><td>1.12</td></tr>
                                <tr class="t-row"><td>M16</td><td>2.00</td><td>157</td><td>1.58</td></tr>
                                <tr class="t-row"><td>M18</td><td>2.50</td><td>192</td><td>2.00</td></tr>
                                <tr class="t-row"><td>M20</td><td>2.50</td><td>245</td><td>2.47</td></tr>
                                <tr class="t-row"><td>M22</td><td>2.50</td><td>303</td><td>3.04</td></tr>
                                <tr class="t-row"><td>M24</td><td>3.00</td><td>353</td><td>3.77</td></tr>
                                <tr class="t-row"><td>M27</td><td>3.00</td><td>459</td><td>4.90</td></tr>
                                <tr class="t-row"><td>M30</td><td>3.50</td><td>561</td><td>6.40</td></tr>
                                <tr class="t-row"><td>M33</td><td>3.50</td><td>694</td><td>7.98</td></tr>
                                <tr class="t-row"><td>M36</td><td>4.00</td><td>817</td><td>9.29</td></tr>
                                <tr class="t-row"><td>M39</td><td>4.00</td><td>976</td><td>11.0</td></tr>
                                <tr class="t-row"><td>M42</td><td>4.50</td><td>1,134</td><td>13.4</td></tr>
                                <tr class="t-row"><td>M45</td><td>4.50</td><td>1,303</td><td>15.5</td></tr>
                                <tr class="t-row"><td>M48</td><td>5.00</td><td>1,470</td><td>17.7</td></tr>
                                <tr class="t-row"><td>M52</td><td>5.00</td><td>1,676</td><td>20.9</td></tr>
                                <tr class="t-row"><td>M56</td><td>5.50</td><td>1,962</td><td>24.8</td></tr>
                                <tr class="t-row"><td>M60</td><td>5.50</td><td>2,216</td><td>28.6</td></tr>
                                <tr class="t-row"><td>M64</td><td>6.00</td><td>2,561</td><td>33.6</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10 mb-4">
                    <h4 class="text-center mb-3" style="color: #db7227;">Threaded Rod Weight Chart by Material (Metric – ISO Coarse Pitch)</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Nominal Size (M)</th>
                                    <th>Pitch (mm)</th>
                                    <th>Tensile Stress Area (mm²)</th>
                                    <th>Black Steel (kg/m)</th>
                                    <th>Zinc Plated (kg/m)</th>
                                    <th>Hot Dip Galvanized (kg/m)</th>
                                    <th>Stainless Steel 304 (kg/m)</th>
                                    <th>Stainless Steel 316 (kg/m)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>M6</td><td>1.00</td><td>20.1</td><td>0.222</td><td>0.222</td><td>0.223</td><td>0.224</td><td>0.224</td></tr>
                                <tr class="t-row"><td>M8</td><td>1.25</td><td>36.6</td><td>0.373</td><td>0.374</td><td>0.375</td><td>0.376</td><td>0.376</td></tr>
                                <tr class="t-row"><td>M10</td><td>1.50</td><td>58.0</td><td>0.579</td><td>0.580</td><td>0.582</td><td>0.584</td><td>0.584</td></tr>
                                <tr class="t-row"><td>M12</td><td>1.75</td><td>84.3</td><td>0.821</td><td>0.823</td><td>0.826</td><td>0.829</td><td>0.829</td></tr>
                                <tr class="t-row"><td>M14</td><td>2.00</td><td>115</td><td>1.12</td><td>1.13</td><td>1.14</td><td>1.15</td><td>1.15</td></tr>
                                <tr class="t-row"><td>M16</td><td>2.00</td><td>157</td><td>1.58</td><td>1.59</td><td>1.60</td><td>1.62</td><td>1.62</td></tr>
                                <tr class="t-row"><td>M18</td><td>2.50</td><td>192</td><td>2.00</td><td>2.02</td><td>2.04</td><td>2.06</td><td>2.06</td></tr>
                                <tr class="t-row"><td>M20</td><td>2.50</td><td>245</td><td>2.47</td><td>2.49</td><td>2.51</td><td>2.53</td><td>2.53</td></tr>
                                <tr class="t-row"><td>M22</td><td>2.50</td><td>303</td><td>3.04</td><td>3.06</td><td>3.09</td><td>3.12</td><td>3.12</td></tr>
                                <tr class="t-row"><td>M24</td><td>3.00</td><td>353</td><td>3.77</td><td>3.80</td><td>3.83</td><td>3.86</td><td>3.86</td></tr>
                                <tr class="t-row"><td>M27</td><td>3.00</td><td>459</td><td>4.90</td><td>4.93</td><td>4.97</td><td>5.01</td><td>5.01</td></tr>
                                <tr class="t-row"><td>M30</td><td>3.50</td><td>561</td><td>6.40</td><td>6.44</td><td>6.48</td><td>6.53</td><td>6.53</td></tr>
                                <tr class="t-row"><td>M33</td><td>3.50</td><td>694</td><td>7.98</td><td>8.02</td><td>8.07</td><td>8.12</td><td>8.12</td></tr>
                                <tr class="t-row"><td>M36</td><td>4.00</td><td>817</td><td>9.29</td><td>9.34</td><td>9.39</td><td>9.44</td><td>9.44</td></tr>
                                <tr class="t-row"><td>M39</td><td>4.00</td><td>976</td><td>11.0</td><td>11.1</td><td>11.2</td><td>11.3</td><td>11.3</td></tr>
                                <tr class="t-row"><td>M42</td><td>4.50</td><td>1,134</td><td>13.4</td><td>13.5</td><td>13.6</td><td>13.7</td><td>13.7</td></tr>
                                <tr class="t-row"><td>M45</td><td>4.50</td><td>1,303</td><td>15.5</td><td>15.6</td><td>15.7</td><td>15.9</td><td>15.9</td></tr>
                                <tr class="t-row"><td>M48</td><td>5.00</td><td>1,470</td><td>17.7</td><td>17.8</td><td>18.0</td><td>18.2</td><td>18.2</td></tr>
                                <tr class="t-row"><td>M52</td><td>5.00</td><td>1,676</td><td>20.9</td><td>21.0</td><td>21.2</td><td>21.4</td><td>21.4</td></tr>
                                <tr class="t-row"><td>M56</td><td>5.50</td><td>1,962</td><td>24.8</td><td>25.0</td><td>25.2</td><td>25.4</td><td>25.4</td></tr>
                                <tr class="t-row"><td>M60</td><td>5.50</td><td>2,216</td><td>28.6</td><td>28.8</td><td>29.0</td><td>29.3</td><td>29.3</td></tr>
                                <tr class="t-row"><td>M64</td><td>6.00</td><td>2,561</td><td>33.6</td><td>33.8</td><td>34.0</td><td>34.3</td><td>34.3</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="types" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Types of Threaded Rods</h2>
            </div>
            
            <p class="text-center mb-4">We supply threaded rods in various configurations to meet different engineering requirements.</p>

            <div class="row g-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Fully Threaded Rods (All Thread)</h5>
                        <p>Threaded continuously from end to end, offering maximum adjustment flexibility.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-arrows-expand"></i></div>
                        <h5>Double-End Studs</h5>
                        <p>Threaded at both ends with an unthreaded center section, commonly used in flange connections.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-nut"></i></div>
                        <h5>Tap-End Studs</h5>
                        <p>Featuring one short-threaded end and one long-threaded end for equipment assembly applications.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-tools"></i></div>
                        <h5>Coarse Thread Rods</h5>
                        <p>Suitable for construction and general engineering applications.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-rulers"></i></div>
                        <h5>Fine Thread Rods</h5>
                        <p>Used where vibration resistance and precise clamping force are required.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-wrench-adjustable"></i></div>
                        <h5>Custom Threaded Rods</h5>
                        <p>Manufactured according to project specifications, including special thread forms, coatings, and lengths.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="grades" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Grades Available</h2>
            </div>
            
            <div class="row align-items-center mt-4 justify-content-center">
                <div class="col-lg-10">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Material</th>
                                    <th>Grades</th>
                                    <th>Application</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td class="fw-bold text-center">Stainless Steel</td>
                                    <td>SS 304, SS 304L, SS 316, SS 316L, SS 310, SS 321</td>
                                    <td>Ideal for marine, food processing, pharmaceutical, and chemical industries.</td>
                                </tr>
                                <tr class="t-row">
                                    <td class="fw-bold text-center">Carbon & Alloy Steel</td>
                                    <td>ASTM A193 B7, ASTM A193 B7M, ASTM A320 L7, ASTM A320 L7M, ASTM A307</td>
                                    <td>Suitable for high-strength structural and industrial applications.</td>
                                </tr>
                                <tr class="t-row">
                                    <td class="fw-bold text-center">Duplex & Super Duplex</td>
                                    <td>UNS S31803, UNS S32205, UNS S32750, UNS S32760</td>
                                    <td>Designed for offshore and highly corrosive environments.</td>
                                </tr>
                                <tr class="t-row">
                                    <td class="fw-bold text-center">Nickel Alloy</td>
                                    <td>Inconel 600, Inconel 625, Monel 400, Monel K500, Hastelloy C22, Hastelloy C276</td>
                                    <td>Used in chemical processing, offshore, and high-temperature applications.</td>
                                </tr>
                                <tr class="t-row">
                                    <td class="fw-bold text-center">Titanium</td>
                                    <td>Grade 2, Grade 5</td>
                                    <td>Lightweight and highly corrosion-resistant.</td>
                                </tr>
                                <tr class="t-row">
                                    <td class="fw-bold text-center">Copper & Brass</td>
                                    <td>C36000 Brass, C11000 Copper</td>
                                    <td>For decorative, electrical & architectural purposes.</td>
                                </tr>
                                <tr class="t-row">
                                    <td class="fw-bold text-center">Aluminum</td>
                                    <td>6061, 6082</td>
                                    <td>For lightweight fastening & corrosion-prone environments.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="manufacturing" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Manufacturing Process of Threaded Rods</h2>
            </div>
            
            <p class="text-center mb-4">Threaded rods are manufactured using advanced production methods to ensure strength, accuracy, and durability.</p>

            <div class="row mt-4 justify-content-center">
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="pe-md-3">
                                <p class="fs-6" style="text-align: justify;"><strong>1. Raw Material Selection</strong><br>
                                Premium-quality bars are selected according to ASTM, DIN, ISO, and ASME specifications.</p>
                                
                                <p class="fs-6 mt-3" style="text-align: justify;"><strong>2. Cutting & Straightening</strong><br>
                                Bars are straightened and cut to required stock or project lengths.</p>
                                
                                <p class="fs-6 mt-3" style="text-align: justify;"><strong>3. Thread Formation</strong><br>
                                Threads are produced using Thread Rolling or Thread Cutting. Thread rolling is preferred because it increases fatigue strength and thread durability.</p>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="pe-md-3">
                                <p class="fs-6" style="text-align: justify;"><strong>4. Heat Treatment</strong><br>
                                Depending on the grade, rods may undergo Annealing, Normalizing, Quenching & Tempering, or Stress Relieving.</p>
                                
                                <p class="fs-6 mt-3" style="text-align: justify;"><strong>5. Surface Finishing</strong><br>
                                Available finishes include Plain Finish, Zinc Plated, Hot Dip Galvanized, PTFE Coated, Passivated, and Electro Polished.</p>
                                
                                <p class="fs-6 mt-3" style="text-align: justify;"><strong>6. Final Inspection</strong><br>
                                Every batch is inspected for dimensional accuracy, thread quality, mechanical properties, and material traceability.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="mechanical" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Mechanical Properties</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h4 class="text-center mb-3" style="color: #db7227;">Mechanical Properties of Threaded Rods</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Grade</th>
                                    <th>Tensile Strength (MPa)</th>
                                    <th>Yield Strength (MPa)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>SS 304</td><td>515</td><td>205</td></tr>
                                <tr class="t-row"><td>SS 316</td><td>515</td><td>205</td></tr>
                                <tr class="t-row"><td>ASTM A193 B7</td><td>860</td><td>720</td></tr>
                                <tr class="t-row"><td>ASTM A320 L7</td><td>860</td><td>720</td></tr>
                                <tr class="t-row"><td>Duplex 2205</td><td>620</td><td>450</td></tr>
                                <tr class="t-row"><td>Inconel 625</td><td>827</td><td>414</td></tr>
                                <tr class="t-row"><td>Titanium Grade 2</td><td>345</td><td>275</td></tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="text-center mt-3">
                        📌 Values are typical and may vary according to size and heat treatment.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications & Uses</h2>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card h-100">
                        <div class="application-icon"><i class="bi bi-building"></i></div>
                        <h5>Construction & Infrastructure</h5>
                        <p>✔ Structural steel connections<br>✔ Concrete anchoring systems<br>✔ Building reinforcement<br>✔ Suspension systems</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card h-100">
                        <div class="application-icon"><i class="bi bi-tsunami"></i></div>
                        <h5>Marine & Offshore</h5>
                        <p>✔ Dock structures<br>✔ Offshore platforms<br>✔ Shipbuilding projects<br>✔ Saltwater applications</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card h-100">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Oil & Gas Industry</h5>
                        <p>✔ Flange assemblies<br>✔ Pressure vessels<br>✔ Refineries<br>✔ Petrochemical facilities</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card h-100">
                        <div class="application-icon"><i class="bi bi-gear"></i></div>
                        <h5>Industrial Machinery</h5>
                        <p>✔ Pumps<br>✔ Compressors<br>✔ Turbines<br>✔ Manufacturing equipment</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card h-100">
                        <div class="application-icon"><i class="bi bi-airplane"></i></div>
                        <h5>Automotive & Aerospace</h5>
                        <p>✔ Engine components<br>✔ Suspension systems<br>✔ Aircraft structures</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="application-card h-100">
                        <div class="application-icon"><i class="bi bi-house"></i></div>
                        <h5>Architectural Applications</h5>
                        <p>✔ Railings<br>✔ Decorative fittings<br>✔ Signage systems<br>✔ Furniture manufacturing</p>
                    </div>
                </div>
            </div>
            
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <h4 style="color: #db7227;">General Uses of Threaded Rods</h4>
                    <p class="fs-6 mt-3 lh-lg">✔ Structural fastening &nbsp;|&nbsp; ✔ Pipe support systems &nbsp;|&nbsp; ✔ Equipment suspension &nbsp;|&nbsp; ✔ Machinery assembly &nbsp;|&nbsp; ✔ Concrete anchoring &nbsp;|&nbsp; ✔ Maintenance and repair work &nbsp;|&nbsp; ✔ Industrial fabrication &nbsp;|&nbsp; ✔ Heavy engineering projects</p>
                </div>
            </div>
        </div>
    </section>

    <section id="advantages" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Advantages of Threaded Rods</h2>
            </div>
            
            <div class="row mt-4 justify-content-center">
                <div class="col-lg-8">
                    <ul class="fs-6 lh-lg" style="list-style-type: none; padding-left: 0;">
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> High tensile strength</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Excellent load-bearing capability</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Easy installation</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Available in multiple materials</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Corrosion-resistant options available</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Cost-effective fastening solution</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Easily cut to custom lengths</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Suitable for high-temperature environments</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Long service life</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="buying-guide" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Buying Guide – How to Choose the Right Threaded Rod</h2>
            </div>
            
            <p class="text-center mb-4">Before selecting threaded rods, consider the following factors:</p>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="row g-3">
                        <div class="col-md-6"><div class="p-3 border rounded"><i class="bi bi-box me-2 text-primary"></i> Material grade</div></div>
                        <div class="col-md-6"><div class="p-3 border rounded"><i class="bi bi-speedometer2 me-2 text-primary"></i> Load requirements</div></div>
                        <div class="col-md-6"><div class="p-3 border rounded"><i class="bi bi-shield-check me-2 text-primary"></i> Corrosion resistance needs</div></div>
                        <div class="col-md-6"><div class="p-3 border rounded"><i class="bi bi-thermometer-half me-2 text-primary"></i> Operating temperature</div></div>
                        <div class="col-md-6"><div class="p-3 border rounded"><i class="bi bi-nut me-2 text-primary"></i> Thread type</div></div>
                        <div class="col-md-6"><div class="p-3 border rounded"><i class="bi bi-brush me-2 text-primary"></i> Required finish</div></div>
                        <div class="col-md-6"><div class="p-3 border rounded"><i class="bi bi-journal-text me-2 text-primary"></i> Applicable ASTM or DIN standards</div></div>
                        <div class="col-md-6"><div class="p-3 border rounded"><i class="bi bi-file-earmark-check me-2 text-primary"></i> Certification requirements</div></div>
                    </div>
                    <p class="mt-4 text-center"><strong>📌 Note:</strong> For offshore and export projects, EN 10204 3.1 certification is strongly recommended.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="testing" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Testing & Quality Control</h2>
            </div>
            
            <p class="text-center mb-4">Every threaded rod supplied by Moksh Tubes & Fittings LLP undergoes rigorous testing:</p>

            <div class="row mt-4 justify-content-center">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="fs-6 lh-lg" style="list-style-type: none; padding-left: 0;">
                                <li><i class="bi bi-check-all text-primary me-2"></i> Visual Inspection</li>
                                <li><i class="bi bi-check-all text-primary me-2"></i> Dimensional Inspection</li>
                                <li><i class="bi bi-check-all text-primary me-2"></i> Thread Gauge Testing</li>
                                <li><i class="bi bi-check-all text-primary me-2"></i> Tensile Testing</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="fs-6 lh-lg" style="list-style-type: none; padding-left: 0;">
                                <li><i class="bi bi-check-all text-primary me-2"></i> Hardness Testing</li>
                                <li><i class="bi bi-check-all text-primary me-2"></i> PMI Testing</li>
                                <li><i class="bi bi-check-all text-primary me-2"></i> Coating Thickness Inspection</li>
                                <li><i class="bi bi-check-all text-primary me-2"></i> Corrosion Resistance Testing</li>
                            </ul>
                        </div>
                    </div>
                    <p class="text-center mt-3"><strong>Mill Test Certificates and EN 10204 3.1 certification are available upon request.</strong></p>
                </div>
            </div>
        </div>
    </section>

    <section id="industries" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Industries We Serve</h2>
            </div>
            
            <div class="row g-4 justify-content-center mt-3">
                <div class="col-6 col-md-3 text-center">
                    <div class="p-3 border rounded bg-light h-100"><i class="bi bi-building fs-3 d-block mb-2 text-primary"></i> Construction</div>
                </div>
                <div class="col-6 col-md-3 text-center">
                    <div class="p-3 border rounded bg-light h-100"><i class="bi bi-cone fs-3 d-block mb-2 text-primary"></i> Infrastructure</div>
                </div>
                <div class="col-6 col-md-3 text-center">
                    <div class="p-3 border rounded bg-light h-100"><i class="bi bi-fuel-pump fs-3 d-block mb-2 text-primary"></i> Oil & Gas</div>
                </div>
                <div class="col-6 col-md-3 text-center">
                    <div class="p-3 border rounded bg-light h-100"><i class="bi bi-ev-station fs-3 d-block mb-2 text-primary"></i> Petrochemical</div>
                </div>
                <div class="col-6 col-md-3 text-center">
                    <div class="p-3 border rounded bg-light h-100"><i class="bi bi-tsunami fs-3 d-block mb-2 text-primary"></i> Marine & Offshore</div>
                </div>
                <div class="col-6 col-md-3 text-center">
                    <div class="p-3 border rounded bg-light h-100"><i class="bi bi-lightning-charge fs-3 d-block mb-2 text-primary"></i> Power Generation</div>
                </div>
                <div class="col-6 col-md-3 text-center">
                    <div class="p-3 border rounded bg-light h-100"><i class="bi bi-hammer fs-3 d-block mb-2 text-primary"></i> Mining</div>
                </div>
                <div class="col-6 col-md-3 text-center">
                    <div class="p-3 border rounded bg-light h-100"><i class="bi bi-snow fs-3 d-block mb-2 text-primary"></i> HVAC</div>
                </div>
                <div class="col-6 col-md-3 text-center">
                    <div class="p-3 border rounded bg-light h-100"><i class="bi bi-droplet fs-3 d-block mb-2 text-primary"></i> Water Treatment</div>
                </div>
                <div class="col-6 col-md-3 text-center">
                    <div class="p-3 border rounded bg-light h-100"><i class="bi bi-cup-straw fs-3 d-block mb-2 text-primary"></i> Food Processing</div>
                </div>
                <div class="col-6 col-md-3 text-center">
                    <div class="p-3 border rounded bg-light h-100"><i class="bi bi-capsule fs-3 d-block mb-2 text-primary"></i> Pharmaceutical</div>
                </div>
                <div class="col-6 col-md-3 text-center">
                    <div class="p-3 border rounded bg-light h-100"><i class="bi bi-car-front fs-3 d-block mb-2 text-primary"></i> Automotive</div>
                </div>
                <div class="col-6 col-md-3 text-center">
                    <div class="p-3 border rounded bg-light h-100"><i class="bi bi-airplane fs-3 d-block mb-2 text-primary"></i> Aerospace</div>
                </div>
            </div>
        </div>
    </section>

    <section id="why-choose-us" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container text-center">
            <div class="section-title center">
                <h2>Why Choose Moksh Tubes & Fittings LLP?</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-3">
                    <div class="why-banner-block h-100 bg-white border p-4 rounded">
                        <div class="why-banner-icon mb-3"><i class="bi bi-box-seam fs-2 text-primary"></i></div>
                        <h5>Extensive inventory availability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="why-banner-block h-100 bg-white border p-4 rounded">
                        <div class="why-banner-icon mb-3"><i class="bi bi-award fs-2 text-primary"></i></div>
                        <h5>ISO-certified quality systems</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="why-banner-block h-100 bg-white border p-4 rounded">
                        <div class="why-banner-icon mb-3"><i class="bi bi-gear fs-2 text-primary"></i></div>
                        <h5>Custom manufacturing capabilities</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="why-banner-block h-100 bg-white border p-4 rounded">
                        <div class="why-banner-icon mb-3"><i class="bi bi-tags fs-2 text-primary"></i></div>
                        <h5>Competitive pricing</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="why-banner-block h-100 bg-white border p-4 rounded">
                        <div class="why-banner-icon mb-3"><i class="bi bi-globe2 fs-2 text-primary"></i></div>
                        <h5>Worldwide export support</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="why-banner-block h-100 bg-white border p-4 rounded">
                        <div class="why-banner-icon mb-3"><i class="bi bi-truck fs-2 text-primary"></i></div>
                        <h5>Fast dispatch schedules</h5>
                    </div>
                </div>
                
                <div class="col-sm-6 col-lg-3">
                    <div class="why-banner-block h-100 bg-white border p-4 rounded">
                        <div class="why-banner-icon mb-3"><i class="bi bi-headset fs-2 text-primary"></i></div>
                        <h5>Technical assistance for project requirements</h5>
                    </div>
                </div>
                
                <div class="col-sm-6 col-lg-3">
                    <div class="why-banner-block h-100 bg-white border p-4 rounded">
                        <div class="why-banner-icon mb-3"><i class="bi bi-file-earmark-text fs-2 text-primary"></i></div>
                        <h5>Complete documentation and certification</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Start faq content area-->
    <section id="faq" class="faq-content-area sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="accordion-box">
                        <div class="section-title center">
                            <h2>Frequently Asked Questions (FAQ)</h2>
                        </div>

                        <!-- Q1 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are threaded rods used for?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Threaded rods are used for fastening, anchoring, suspension systems, structural reinforcement, machinery assembly, and industrial installations.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What is the standard size range?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Standard sizes range from M6 to M64 and from 1/4" to 4" in imperial dimensions.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Which threaded rod material offers the best corrosion resistance?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Stainless Steel 316, Duplex Stainless Steel, Titanium, and Nickel Alloy threaded rods provide excellent corrosion resistance.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Can threaded rods be supplied in custom lengths?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Yes. We supply threaded rods in standard and custom lengths according to project requirements.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Do you provide test certificates?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Yes. EN 10204 3.1 Mill Test Certificates and additional inspection reports are available.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End faq content area-->

    <!-- Contact Section -->
    <section id="contact-us" class="sec-padd-bottom bg-light">
        <div class="container">
            <div class="contact-cta-box text-center p-5 rounded border shadow-sm">
                <h2>Request a Quote</h2>
                <p class="fs-5 mt-3">
                    Looking for premium-quality Threaded Rods for construction, industrial, marine, or oil & gas projects?<br>
                    Contact <strong>Moksh Tubes & Fittings LLP</strong> today for competitive pricing, technical assistance, and worldwide delivery.<br><br>
                    📞 <strong>Call:</strong> +91 97695 84950<br>
                    📧 <strong>Email:</strong> sales@mokshtubes.com<br><br>
                    We supply high-performance threaded rods engineered for strength, reliability, and long service life in demanding industrial environments.
                </p>
                <!-- Call button -->
                <a href="javascript:void(0);" class="btn btn-lg mt-4 text-white" style="background-color: #db7227; padding: 12px 30px; border-radius: 8px;" data-bs-toggle="modal"
                    data-bs-target="#contactFormModal">
                    Get in Touch
                </a>
            </div>
        </div>
    </section>

@endsection

@section('jsscripts')
    <script type="application/ld+json">
        @verbatim
        [{
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "Moksh Tubes & Fittings LLP",
            "url": "https://www.mokshtubes.com",
            "logo": "https://www.mokshtubes.com/assets/logo.png",
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+91-97695-84950",
                "email": "sales@mokshtubes.com",
                "contactType": "sales",
                "areaServed": ["IN","AE","SA","QA","OM","KW","US","EU"],
                "availableLanguage": ["English"]
            }
        },
        {
            "@context": "https://schema.org",
            "@type": "Product",
            "name": "Threaded Rods",
            "description": "Buy Threaded Rods in Stainless Steel, Carbon Steel, Alloy Steel, Duplex, Nickel Alloy & Galvanized grades. Available in M6–M64 sizes with weight chart, specifications and worldwide supply.",
            "brand": {
                "@type": "Brand",
                "name": "Moksh Tubes & Fittings LLP"
            },
            "manufacturer": {
                "@type": "Organization",
                "name": "Moksh Tubes & Fittings LLP"
            },
            "url": "https://www.mokshtubes.com/threaded-rods",
            "offers": {
                "@type": "AggregateOffer",
                "priceCurrency": "USD",
                "lowPrice": "1.5",
                "highPrice": "50",
                "offerCount": "100"
            }
        },
        {
            "@context": "https://schema.org",
            "@type": "FAQPage",
            "mainEntity": [
                {
                "@type": "Question",
                "name": "What are threaded rods used for?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Threaded rods are used for fastening, anchoring, suspension systems, structural reinforcement, machinery assembly, and industrial installations."
                }
                },
                {
                "@type": "Question",
                "name": "What is the standard size range?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Standard sizes range from M6 to M64 and from 1/4\" to 4\" in imperial dimensions."
                }
                },
                {
                "@type": "Question",
                "name": "Which threaded rod material offers the best corrosion resistance?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Stainless Steel 316, Duplex Stainless Steel, Titanium, and Nickel Alloy threaded rods provide excellent corrosion resistance."
                }
                },
                {
                "@type": "Question",
                "name": "Can threaded rods be supplied in custom lengths?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We supply threaded rods in standard and custom lengths according to project requirements."
                }
                },
                {
                "@type": "Question",
                "name": "Do you provide test certificates?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. EN 10204 3.1 Mill Test Certificates and additional inspection reports are available."
                }
                }
            ]
        }]
        @endverbatim
    </script>
@endsection
