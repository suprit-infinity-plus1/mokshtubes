@extends('layouts.master')

@section('title', 'SS 316 ERW Pipes ASTM A312 TP316 / TP316L | Manufacturer')
@section('meta_description',
    'SS 316 ERW Pipes as per ASTM A312 TP316/TP316L. Manufacturer, supplier & exporter to
    India, UAE, Saudi Arabia, Qatar, Oman & Kuwait.')
@section('meta_keywords',
    'SS 316 ERW Pipes, ASTM A312 TP316 Pipes, SS 316L ERW Pipes, Stainless Steel 316 ERW Pipes, SS
    316 ERW Pipe Manufacturer, SS 316 ERW Pipe Supplier India, SS 316 ERW Pipe Exporter, ASTM A312 ERW Pipes')
@section('og_image', asset('assets/images/product/welded-pipes-tubes.webp'))
@section('og_type', 'article')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/product/welded-pipes-tubes.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>SS 316 ERW Pipes<br>ASTM A312 TP316 / TP316L</h1>

                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        SS 316 ERW Pipes are high-performance austenitic stainless steel pipes offering superior corrosion
                        resistance, especially against chlorides, chemicals, and marine environments. Manufactured using
                        Electric Resistance Welding (ERW) technology, these pipes provide excellent surface finish,
                        dimensional accuracy, and cost efficiency for industrial, hygienic, and structural applications.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

    <!-- Start Material Tabs -->
    <div class="sticky-top bg-white border-bottom material-tabs w-100">
        <div class="container">
            <a href="#overview">Overview</a> |
            <a href="#specifications">Specifications</a> |
            <a href="#size-weight">Size & Weight</a> |
            <a href="#grades">Grades</a> |
            <a href="#applications">Applications</a> |
            <a href="#erw-vs-seamless">ERW vs Seamless</a> |
            <a href="#manufacturing">Manufacturing</a> |
            <a href="#mechanical">Mechanical Properties</a> |
            <a href="#tolerances">Tolerances</a> |
            <a href="#export">Packaging & Exports</a> |
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
                STAINLESS STEEL 316 ERW PIPES
            </h3>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/product/welded-pipes-tubes.webp') }}" alt="SS 316 ERW Pipes"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4" style="text-align: justify;">
                            <strong class="text-black">SS 316 ERW Pipes</strong> are manufactured from molybdenum-bearing <a
                                href="{{ route('materials.austenitic-stainless-Steel') }}">Austenitic Stainless Steel</a>,
                            offering enhanced resistance to pitting, crevice corrosion, and aggressive chemical environments
                            compared to <a
                                href="{{ route('products.pipes-tubes.welded-pipes.SS-304-ERW-pipes') ?? '#' }}">SS 304 ERW
                                Pipes</a>. The presence of molybdenum makes SS 316 ideal for marine, chemical processing,
                            pharmaceutical, and oil & gas applications.
                        </p>

                        <p class="fs-6 mb-4" style="text-align: justify;">
                            These pipes are produced by cold-forming <a
                                href="{{ route('materials.austenitic-stainless-Steel') }}">Stainless Steel Materials</a>
                            strips into tubular shapes followed by high-frequency electric resistance welding (ERW),
                            ensuring uniform weld integrity and excellent dimensional control.
                        </p>

                        <p class="fs-6 mb-4" style="text-align: justify;">
                            At <strong style="color:black;"><a href="{{ url('/contact-us') }}">Moksh Tubes & Fittings
                                    LLP</a></strong>, we are a trusted manufacturer, supplier, and exporter of SS 316 ERW
                            Pipes in India, supplying both domestic projects and Gulf / GCC markets including UAE, Saudi
                            Arabia, Qatar, Oman, and Kuwait.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            Our SS 316 / 316L ERW Pipes are widely used where corrosion resistance, hygiene, and long
                            service life are critical.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download SS 316 ERW Pipes Datasheet</h3>
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
                <h2>Specifications</h2>
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
                                    <td>Material</td>
                                    <td>Stainless Steel 316 / 316L</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Standard</td>
                                    <td>ASTM A312 / ASME SA312</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manufacturing</td>
                                    <td>Electric Resistance Welded (ERW)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Outer Diameter (OD)</td>
                                    <td>6 mm to 610 mm</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Wall Thickness</td>
                                    <td>0.8 mm to 12.7 mm</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Length</td>
                                    <td>6 m, 12 m, or cut-to-length</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Surface Finish</td>
                                    <td>Mill Finish, Pickled & Passivated, Polished</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Pipe Ends</td>
                                    <td>Plain End, Beveled End</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Form</td>
                                    <td>Round Pipes</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Heat Treatment</td>
                                    <td>Solution Annealed</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Applications</td>
                                    <td>Industrial, Hygienic, Marine & Pressure</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="size-weight" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Size & Weight Chart – SS 316 ERW Pipes</h2>
            </div>

            <p class="text-center mb-4">SS 316 ERW Pipes are available in standard schedules (ASTM A312):<br>📌 Weights are
                theoretical (kg/m) | 📌 Dimensions as per ASTM A312 | 📌 Custom OD & wall thickness available</p>

            <div class="row justify-content-center">
                <div class="col-lg-6 mb-4">
                    <h4 class="text-center mb-3" style="color: #db7227;">Schedule 5S</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>NB (Inch)</th>
                                    <th>OD (mm)</th>
                                    <th>WT (mm)</th>
                                    <th>Weight (kg/m)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>1/2"</td>
                                    <td>21.34</td>
                                    <td>1.65</td>
                                    <td>0.79</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3/4"</td>
                                    <td>26.67</td>
                                    <td>1.65</td>
                                    <td>1.02</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1"</td>
                                    <td>33.40</td>
                                    <td>1.65</td>
                                    <td>1.29</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1½"</td>
                                    <td>48.30</td>
                                    <td>1.65</td>
                                    <td>1.88</td>
                                </tr>
                                <tr class="t-row">
                                    <td>2"</td>
                                    <td>60.33</td>
                                    <td>1.65</td>
                                    <td>2.36</td>
                                </tr>
                                <tr class="t-row">
                                    <td>2½"</td>
                                    <td>73.03</td>
                                    <td>2.11</td>
                                    <td>3.54</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3"</td>
                                    <td>88.90</td>
                                    <td>2.11</td>
                                    <td>4.35</td>
                                </tr>
                                <tr class="t-row">
                                    <td>4"</td>
                                    <td>114.30</td>
                                    <td>2.11</td>
                                    <td>5.63</td>
                                </tr>
                                <tr class="t-row">
                                    <td>6"</td>
                                    <td>168.28</td>
                                    <td>2.77</td>
                                    <td>11.2</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <h4 class="text-center mb-3" style="color: #db7227;">Schedule 10S</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>NB (Inch)</th>
                                    <th>OD (mm)</th>
                                    <th>WT (mm)</th>
                                    <th>Weight (kg/m)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>1/2"</td>
                                    <td>21.34</td>
                                    <td>2.11</td>
                                    <td>1.00</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3/4"</td>
                                    <td>26.67</td>
                                    <td>2.11</td>
                                    <td>1.27</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1"</td>
                                    <td>33.40</td>
                                    <td>2.77</td>
                                    <td>2.13</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1½"</td>
                                    <td>48.30</td>
                                    <td>2.77</td>
                                    <td>3.16</td>
                                </tr>
                                <tr class="t-row">
                                    <td>2"</td>
                                    <td>60.33</td>
                                    <td>2.77</td>
                                    <td>3.99</td>
                                </tr>
                                <tr class="t-row">
                                    <td>2½"</td>
                                    <td>73.03</td>
                                    <td>3.05</td>
                                    <td>5.44</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3"</td>
                                    <td>88.90</td>
                                    <td>3.05</td>
                                    <td>6.44</td>
                                </tr>
                                <tr class="t-row">
                                    <td>4"</td>
                                    <td>114.30</td>
                                    <td>3.05</td>
                                    <td>8.87</td>
                                </tr>
                                <tr class="t-row">
                                    <td>6"</td>
                                    <td>168.28</td>
                                    <td>3.40</td>
                                    <td>13.6</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <h4 class="text-center mb-3" style="color: #db7227;">Schedule 40S</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>NB (Inch)</th>
                                    <th>OD (mm)</th>
                                    <th>WT (mm)</th>
                                    <th>Weight (kg/m)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>1/2"</td>
                                    <td>21.34</td>
                                    <td>2.77</td>
                                    <td>1.29</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3/4"</td>
                                    <td>26.67</td>
                                    <td>2.87</td>
                                    <td>1.71</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1"</td>
                                    <td>33.40</td>
                                    <td>3.38</td>
                                    <td>2.54</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1½"</td>
                                    <td>48.30</td>
                                    <td>3.68</td>
                                    <td>4.11</td>
                                </tr>
                                <tr class="t-row">
                                    <td>2"</td>
                                    <td>60.33</td>
                                    <td>3.91</td>
                                    <td>5.52</td>
                                </tr>
                                <tr class="t-row">
                                    <td>2½"</td>
                                    <td>73.03</td>
                                    <td>5.16</td>
                                    <td>8.63</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3"</td>
                                    <td>88.90</td>
                                    <td>5.49</td>
                                    <td>11.3</td>
                                </tr>
                                <tr class="t-row">
                                    <td>4"</td>
                                    <td>114.30</td>
                                    <td>6.02</td>
                                    <td>16.1</td>
                                </tr>
                                <tr class="t-row">
                                    <td>6"</td>
                                    <td>168.28</td>
                                    <td>7.11</td>
                                    <td>28.3</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <h4 class="text-center mb-3" style="color: #db7227;">Schedule 80S</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>NB (Inch)</th>
                                    <th>OD (mm)</th>
                                    <th>WT (mm)</th>
                                    <th>Weight (kg/m)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>1/2"</td>
                                    <td>21.34</td>
                                    <td>3.73</td>
                                    <td>1.65</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3/4"</td>
                                    <td>26.67</td>
                                    <td>3.91</td>
                                    <td>2.23</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1"</td>
                                    <td>33.40</td>
                                    <td>4.55</td>
                                    <td>3.29</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1½"</td>
                                    <td>48.30</td>
                                    <td>5.08</td>
                                    <td>5.49</td>
                                </tr>
                                <tr class="t-row">
                                    <td>2"</td>
                                    <td>60.33</td>
                                    <td>5.54</td>
                                    <td>7.60</td>
                                </tr>
                                <tr class="t-row">
                                    <td>2½"</td>
                                    <td>73.03</td>
                                    <td>7.01</td>
                                    <td>11.4</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3"</td>
                                    <td>88.90</td>
                                    <td>7.62</td>
                                    <td>15.3</td>
                                </tr>
                                <tr class="t-row">
                                    <td>4"</td>
                                    <td>114.30</td>
                                    <td>8.56</td>
                                    <td>22.3</td>
                                </tr>
                                <tr class="t-row">
                                    <td>6"</td>
                                    <td>168.28</td>
                                    <td>10.97</td>
                                    <td>42.6</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="erw-vs-seamless" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>ERW vs Seamless Stainless Steel Pipes</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Parameter</th>
                                    <th>ERW Pipes</th>
                                    <th><a href="{{ route('products.pipes-tubes.seamless-pipes') ?? '#' }}"
                                            class="text-white text-decoration-underline">Seamless Pipes</a></th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Manufacturing</td>
                                    <td>Electric Resistance Welding</td>
                                    <td>Hot extrusion / cold drawing</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Weld Seam</td>
                                    <td>Present</td>
                                    <td>No weld seam</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Pressure Rating</td>
                                    <td>Low–Medium</td>
                                    <td>High</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Dimensional Accuracy</td>
                                    <td>Excellent</td>
                                    <td>Good</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Cost</td>
                                    <td>Economical</td>
                                    <td>Higher</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Typical Use</td>
                                    <td>Food, chemical, fabrication</td>
                                    <td>High-pressure critical lines</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="text-center mt-3">
                        📌 <strong>SS 316 ERW Pipes</strong> are ideal where corrosion resistance and cost efficiency are
                        required without extreme pressure conditions. For high-pressure applications, consider our <a
                            href="{{ route('products.pipes-tubes.seamless-pipes') ?? '#' }}">Stainless Steel 316 Seamless
                            Pipes</a>.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="grades" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Grades Available</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>SS 316 (UNS S31600)</h5>
                        <p>Excellent corrosion & chemical resistance</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>SS 316L (UNS S31603)</h5>
                        <p>Low carbon, improved weld corrosion resistance</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Equivalent Grades</h5>
                        <p>EN 1.4401 / 1.4404<br>DIN X5CrNiMo17-12-2<br>JIS SUS 316</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications</h2>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Chemical & Pharmaceutical Industry</h5>
                        <p>✔ Chemical transfer pipelines<br>✔ Process & reactor piping</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-water"></i></div>
                        <h5>Marine & Coastal Applications</h5>
                        <p>✔ Seawater pipelines<br>✔ Offshore structures</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cup-straw"></i></div>
                        <h5>Food, Dairy & Beverage</h5>
                        <p>✔ Hygienic process lines<br>✔ Brewing & dairy plants</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Oil & Gas / Industrial Fabrication</h5>
                        <p>✔ Utility piping<br>✔ Instrumentation lines</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Water Treatment & Desalination</h5>
                        <p>✔ RO plants<br>✔ Treated & saline water systems</p>
                    </div>
                </div>
            </div>

            <p class="text-center mt-4">
                We also offer <a href="{{ route('materials.nickel-Based-Superalloys') ?? '#' }}">High Corrosion Resistant
                    Alloys</a> and <a
                    href="{{ route('products.pipe-fittings-flanges-fasteners.pipe-fittings') ?? '#' }}">Pipe Fittings &
                    Flanges</a> for these demanding applications.
            </p>
        </div>
    </section>

    <section id="uses" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Uses & Advantages of SS 316 ERW Pipes</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Superior corrosion resistance (chloride & chemical)</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Smooth internal surface for efficient flow</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-piggy-bank"></i></div>
                        <h5>Cost-effective vs seamless pipes</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Easy fabrication & welding</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                        <h5>Suitable for food-grade, marine, structural & fabrication use</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="manufacturing" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Manufacturing Process & Quality Control</h2>
            </div>

            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6" style="text-align: justify;"><strong>Manufacturing Process of SS 316 ERW
                                Pipes:</strong></p>
                        <p>Slitting of stainless steel coils</p>
                        <p>Cold forming into tubular shape</p>
                        <p>High-frequency ERW longitudinal welding</p>
                        <p>Weld seam solution annealing</p>
                        <p>Sizing, straightening & surface finishing</p>
                        <p>NDT testing & final inspection</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6" style="text-align: justify;"><strong>Testing & Quality Control:</strong></p>
                        <p>Each SS 316 ERW Pipe undergoes:</p>
                        <p>✔ Eddy Current Test</p>
                        <p>✔ Ultrasonic Testing (UT)</p>
                        <p>✔ PMI Test</p>
                        <p>✔ Dimensional Inspection</p>
                        <p>✔ Visual & Surface Inspection</p>
                        <p><strong>📄 Test Certificate:</strong> EN 10204 3.1</p>
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
                <div class="col-lg-10">
                    <h4 class="text-center mb-3" style="color: #db7227;">Mechanical Properties of SS 316 / 316L ERW Pipes
                    </h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Property</th>
                                    <th>SS 316</th>
                                    <th>SS 316L</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Tensile Strength</td>
                                    <td>Min. 515 MPa</td>
                                    <td>Min. 485 MPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (0.2%)</td>
                                    <td>Min. 205 MPa</td>
                                    <td>Min. 170 MPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elongation</td>
                                    <td>Min. 40%</td>
                                    <td>Min. 40%</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Hardness (HB)</td>
                                    <td>Max. 217</td>
                                    <td>Max. 217</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="text-center mt-3">
                        📌 <strong>SS 316L</strong> offers improved resistance to intergranular corrosion after welding,
                        making it ideal for fabrication and pressure piping.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="tolerances" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="row mt-4 justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-rulers"></i></div>
                        <h5>Dimensional Tolerances</h5>
                        <p><strong>OD tolerance:</strong> ±0.75%</p>
                        <p><strong>Wall thickness:</strong> −12.5% / +10%</p>
                        <p><strong>Length:</strong> Random: +100 mm | Cut length: ±3 mm</p>
                        <p><strong>Ovality & straightness:</strong> As per ASTM A312</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-5">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-box-seam"></i></div>
                        <h5>Export & Supply</h5>
                        <p><strong>Supply Regions:</strong> Pan-India, UAE, Saudi Arabia, Qatar, Oman, Kuwait</p>
                        <p><strong>Export Packaging:</strong> Seaworthy wooden crates & bundles, ISPM-15 fumigated packaging
                        </p>
                        <p><strong>Documentation:</strong> Commercial Invoice & Packing List, Certificate of Origin, EN
                            10204 3.1</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container text-center">
            <div class="section-title center">
                <h2>WHY CHOOSE US?</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-box-seam"></i></div>
                        <h5>Ready stock & fast dispatch</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-tags"></i></div>
                        <h5>Competitive bulk pricing</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Indian & Gulf standards compliance</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Export & project supply expertise</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-file-earmark-check"></i></div>
                        <h5>Reliable logistics, documentation & technical support</h5>
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

                        <!-- Q1 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What is SS 316 ERW Pipe?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    A welded stainless steel pipe with molybdenum for enhanced corrosion resistance.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Is SS 316 ERW suitable for marine use?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Yes, it performs excellently in marine and saline environments.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>ERW vs Seamless – which is better?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    ERW is economical and precise; seamless is preferred only for extreme pressure.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Do you provide test certificates?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Yes, EN 10204 3.1 with every supply.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Delivery time?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Ex-stock: 2–5 working days<br>
                                    Manufacturing: 2–4 weeks
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
    <section id="contact-us" class="sec-padd-bottom">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Contact Us</h2>
                <p>
                    Looking for SS 316 ERW Pipes for industrial or export projects?<br>
                    📞 Call: +91 97695 84950<br>
                    🌐 <strong>Moksh Tubes & Fittings LLP</strong> - Precision stainless steel piping solutions you can
                    trust.
                </p>
                <!-- Call button -->
                <a href="javascript:void(0);" class="contact-cta-btn" data-bs-toggle="modal"
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
                "contactType": "sales",
                "areaServed": ["IN","AE","SA","QA","OM","KW"],
                "availableLanguage": ["English"]
            }
        },
        {
            "@context": "https://schema.org",
            "@type": "Product",
            "name": "SS 316 ERW Pipes ASTM A312 TP316 / TP316L",
            "description": "SS 316 ERW Pipes manufactured as per ASTM A312 TP316/TP316L for chemical, marine, food, pharmaceutical and industrial applications.",
            "brand": {
                "@type": "Brand",
                "name": "Moksh Tubes & Fittings LLP"
            },
            "manufacturer": {
                "@type": "Organization",
                "name": "Moksh Tubes & Fittings LLP"
            },
            "material": "Stainless Steel 316 / 316L",
            "url": "https://www.mokshtubes.com/products/pipes-tubes/ss-316-erw-pipes",
            "offers": {
                "@type": "Offer",
                "availability": "https://schema.org/InStock",
                "priceCurrency": "INR",
                "url": "https://www.mokshtubes.com/contact-us"
            }
        },
        {
            "@context": "https://schema.org",
            "@type": "FAQPage",
            "mainEntity": [{
                "@type": "Question",
                "name": "What is SS 316 ERW Pipe?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "SS 316 ERW Pipe is a welded stainless steel pipe containing molybdenum for enhanced corrosion resistance."
                }
            },{
                "@type": "Question",
                "name": "Is SS 316 ERW suitable for marine applications?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, SS 316 ERW Pipes offer excellent resistance to chlorides and saline environments."
                }
            },{
                "@type": "Question",
                "name": "Do you provide EN 10204 3.1 certificates?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, all SS 316 ERW Pipes are supplied with EN 10204 3.1 test certificates."
                }
            }]
        },
        {
            "@context": "https://schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": [{
                "@type": "ListItem",
                "position": 1,
                "name": "Home",
                "item": "https://www.mokshtubes.com"
            },{
                "@type": "ListItem",
                "position": 2,
                "name": "Pipes & Tubes",
                "item": "https://www.mokshtubes.com/products/pipes-tubes"
            },{
                "@type": "ListItem",
                "position": 3,
                "name": "SS 316 ERW Pipes",
                "item": "https://www.mokshtubes.com/products/pipes-tubes/ss-316-erw-pipes"
            }]
        },
        {
            "@context": "https://schema.org",
            "@type": "LocalBusiness",
            "name": "Moksh Tubes & Fittings LLP",
            "address": {
                "@type": "PostalAddress",
                "addressCountry": "India"
            },
            "areaServed": ["India","UAE","Saudi Arabia","Qatar","Oman","Kuwait"],
            "telephone": "+91-97695-84950"
        }]
        @endverbatim
    </script>
@endsection
