@extends('layouts.master')

@section('title', 'SS 304 ERW Pipes ASTM A312 TP304 / TP304L | Manufacturer')
@section('meta_description',
    'SS 304 ERW Pipes as per ASTM A312 TP304/TP304L. Manufacturer, supplier & exporter to
    India, UAE, Saudi Arabia, Qatar, Oman & Kuwait.')
@section('meta_keywords',
    'SS 304 ERW Pipes, ASTM A312 TP304 Pipes, SS 304L ERW Pipes, Stainless Steel 304 ERW Pipes, SS
    304 ERW Pipe Manufacturer, SS 304 ERW Pipe Supplier India, SS 304 ERW Pipe Exporter, ASTM A312 ERW Pipes')
@section('og_image', asset('assets/images/all-product/ss-304-ERW-PIPES.jpg'))
@section('og_type', 'article')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url('{{ asset('assets/images/all-product/ss-304-ERW-PIPES.jpg') }}');">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>SS 304 ERW Pipes<br>ASTM A312 TP304 / TP304L</h1>

                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px; max-width: 900px;">
                        SS 304 ERW Pipes are corrosion-resistant, hygienic, and high-strength stainless steel pipes widely used in industrial, commercial, and structural applications. Manufactured using Electric Resistance Welding (ERW) technology, these pipes offer excellent surface finish, dimensional accuracy, and cost efficiency.
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
                STAINLESS STEEL 304 ERW PIPES
            </h3>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/all-product/ss-304-ERW-PIPES.jpg') }}" alt="SS 304 ERW Pipes"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4" style="text-align: justify;">
                            <strong class="text-black">SS 304 ERW Pipes</strong> are manufactured from austenitic stainless steel containing chromium and <a
                                href="{{ route('materials.nickel-Based-Superalloys') }}">nickel</a>, providing excellent corrosion resistance, formability, and weldability.
                        </p>

                        <p class="fs-6 mb-4" style="text-align: justify;">
                            These pipes are produced by cold-forming stainless steel strips into tubular shapes followed by <a
                                href="{{ route('products.pipes-tubes.welded-pipes') }}">high-frequency electric resistance
                                welding</a> (ERW), ensuring uniform weld integrity and excellent dimensional control.
                        </p>

                        <p class="fs-6 mb-4" style="text-align: justify;">
                            At <strong style="color:black;"><a href="{{ url('/contact-us') }}">Moksh Tubes & Fittings
                                    LLP</a></strong>, we are a trusted manufacturer, supplier, and exporter of SS 304 ERW
                            Pipes in India, supplying both domestic projects and Gulf / GCC markets including UAE, Saudi
                            Arabia, Qatar, Oman, and Kuwait.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            Our SS 304 / 304L ERW Pipes are widely used in chemical processing, food & dairy, pharmaceuticals, water pipelines, oil & gas, fabrication, and architectural applications.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download SS 304 ERW Pipes Datasheet</h3>
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
                                    <td>Stainless Steel 304 / 304L</td>
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
                                    <td>Industrial, Structural, Hygienic & Pressure</td>
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
                <h2 class="fw-bold" style="color: #174268;">Size & Weight Chart – SS 304 ERW Pipes</h2>
            </div>

            <p class="text-center mb-4">SS 304 ERW Pipes are available in standard schedules (ASTM A312):<br>📌 Weights are
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
                                    <td>0.80</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3/4"</td>
                                    <td>26.67</td>
                                    <td>1.65</td>
                                    <td>1.03</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1"</td>
                                    <td>33.40</td>
                                    <td>1.65</td>
                                    <td>1.30</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1½"</td>
                                    <td>48.26</td>
                                    <td>1.65</td>
                                    <td>1.91</td>
                                </tr>
                                <tr class="t-row">
                                    <td>2"</td>
                                    <td>60.33</td>
                                    <td>1.65</td>
                                    <td>2.40</td>
                                </tr>
                                <tr class="t-row">
                                    <td>2½"</td>
                                    <td>73.03</td>
                                    <td>2.11</td>
                                    <td>3.69</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3"</td>
                                    <td>88.90</td>
                                    <td>2.11</td>
                                    <td>4.51</td>
                                </tr>
                                <tr class="t-row">
                                    <td>4"</td>
                                    <td>114.30</td>
                                    <td>2.11</td>
                                    <td>5.84</td>
                                </tr>
                                <tr class="t-row">
                                    <td>6"</td>
                                    <td>168.28</td>
                                    <td>2.77</td>
                                    <td>11.32</td>
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
                                    <td>1.28</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1"</td>
                                    <td>33.40</td>
                                    <td>2.77</td>
                                    <td>2.08</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1½"</td>
                                    <td>48.26</td>
                                    <td>2.77</td>
                                    <td>3.11</td>
                                </tr>
                                <tr class="t-row">
                                    <td>2"</td>
                                    <td>60.33</td>
                                    <td>2.77</td>
                                    <td>3.92</td>
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
                                    <td>6.63</td>
                                </tr>
                                <tr class="t-row">
                                    <td>4"</td>
                                    <td>114.30</td>
                                    <td>3.05</td>
                                    <td>8.84</td>
                                </tr>
                                <tr class="t-row">
                                    <td>6"</td>
                                    <td>168.28</td>
                                    <td>3.40</td>
                                    <td>14.92</td>
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
                                    <td>1.27</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3/4"</td>
                                    <td>26.67</td>
                                    <td>2.87</td>
                                    <td>1.70</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1"</td>
                                    <td>33.40</td>
                                    <td>3.38</td>
                                    <td>2.46</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1½"</td>
                                    <td>48.26</td>
                                    <td>3.68</td>
                                    <td>4.18</td>
                                </tr>
                                <tr class="t-row">
                                    <td>2"</td>
                                    <td>60.33</td>
                                    <td>3.91</td>
                                    <td>5.44</td>
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
                                    <td>11.29</td>
                                </tr>
                                <tr class="t-row">
                                    <td>4"</td>
                                    <td>114.30</td>
                                    <td>6.02</td>
                                    <td>17.15</td>
                                </tr>
                                <tr class="t-row">
                                    <td>6"</td>
                                    <td>168.28</td>
                                    <td>7.11</td>
                                    <td>30.70</td>
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
                                    <td>1.63</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3/4"</td>
                                    <td>26.67</td>
                                    <td>3.91</td>
                                    <td>2.30</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1"</td>
                                    <td>33.40</td>
                                    <td>4.55</td>
                                    <td>3.38</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1½"</td>
                                    <td>48.26</td>
                                    <td>5.08</td>
                                    <td>5.61</td>
                                </tr>
                                <tr class="t-row">
                                    <td>2"</td>
                                    <td>60.33</td>
                                    <td>5.54</td>
                                    <td>7.48</td>
                                </tr>
                                <tr class="t-row">
                                    <td>2½"</td>
                                    <td>73.03</td>
                                    <td>7.01</td>
                                    <td>11.76</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3"</td>
                                    <td>88.90</td>
                                    <td>7.62</td>
                                    <td>15.74</td>
                                </tr>
                                <tr class="t-row">
                                    <td>4"</td>
                                    <td>114.30</td>
                                    <td>8.56</td>
                                    <td>25.10</td>
                                </tr>
                                <tr class="t-row">
                                    <td>6"</td>
                                    <td>168.28</td>
                                    <td>10.97</td>
                                    <td>49.56</td>
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
                                    <td>Food, water, fabrication</td>
                                    <td>High-pressure critical lines</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="text-center mt-3">
                        📌 <strong>SS 304 ERW Pipes</strong> are ideal where corrosion resistance and cost efficiency are
                        required without extreme pressure conditions. For high-pressure applications, consider our <a
                            href="{{ route('products.pipes-tubes.seamless-pipes') ?? '#' }}">Stainless Steel 304 Seamless
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
                        <h5>SS 304 (UNS S30400)</h5>
                        <p>Excellent corrosion resistance & strength</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>SS 304L (UNS S30403)</h5>
                        <p>Low carbon, improved weld corrosion resistance</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Equivalent Grades</h5>
                        <p>EN 1.4301 / 1.4307<br>JIS SUS 304 / 304L</p>
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
                        <div class="application-icon"><i class="bi bi-cup-straw"></i></div>
                        <h5>Food, Dairy & Beverage</h5>
                        <p>✔ Milk pipelines<br>✔ Brewery & juice processing lines</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-heart-pulse"></i></div>
                        <h5>Chemical & Pharmaceutical</h5>
                        <p>✔ Chemical transfer pipelines<br>✔ Reactor & process piping</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Oil & Gas / Industrial</h5>
                        <p>✔ Utility piping<br>✔ Instrumentation lines</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Water & Plumbing Systems</h5>
                        <p>✔ Drinking water pipelines<br>✔ RO & water treatment plants</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-building"></i></div>
                        <h5>Architectural & Structural</h5>
                        <p>✔ Handrails, supports, frames<br>✔ Decorative stainless steel works</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="uses" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Uses & Advantages of SS 304 ERW Pipes</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Excellent corrosion resistance</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-water"></i></div>
                        <h5>Smooth internal surface for efficient flow</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-piggy-bank"></i></div>
                        <h5>Cost-effective vs seamless pipes</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Easy fabrication & welding</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                        <h5>Suitable for food-grade & hygienic use</h5>
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
                        <p class="fs-6" style="text-align: justify;"><strong>Manufacturing Process of SS 304 ERW
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
                        <p>Each SS 304 ERW Pipe undergoes:</p>
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
                    <h4 class="text-center mb-3" style="color: #db7227;">Mechanical Properties of SS 304 / 304L ERW Pipes
                    </h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Property</th>
                                    <th>SS 304</th>
                                    <th>SS 304L</th>
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
                                    <td>Max. 201</td>
                                    <td>Max. 201</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="text-center mt-3">
                        📌 <strong>SS 304L</strong> offers improved resistance to intergranular corrosion after welding,
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
                    <div class="application-card h-100">
                        <div class="application-icon"><i class="bi bi-rulers"></i></div>
                        <h5>Dimensional Tolerances</h5>
                        <p><strong>OD tolerance:</strong> ±0.75%</p>
                        <p><strong>Wall thickness:</strong> −12.5% / +10%</p>
                        <p><strong>Length:</strong> Random: +100 mm | Cut length: ±3 mm</p>
                        <p><strong>Ovality & straightness:</strong> As per ASTM A312</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-5">
                    <div class="application-card h-100">
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

    <section id="why-choose-us" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container text-center">
            <div class="section-title center">
                <h2>WHY CHOOSE US?</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block h-100">
                        <div class="why-banner-icon"><i class="bi bi-box-seam"></i></div>
                        <h5>Ready stock & fast dispatch</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block h-100">
                        <div class="why-banner-icon"><i class="bi bi-tags"></i></div>
                        <h5>Competitive bulk pricing</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block h-100">
                        <div class="why-banner-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Indian & Gulf standards compliance</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block h-100">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Export & project supply expertise</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block h-100">
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
                                <h4>What is SS 304 ERW Pipe?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    SS 304 ERW Pipe is a welded stainless steel pipe manufactured using electric resistance welding, suitable for corrosion-resistant and hygienic applications.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Is SS 304 ERW Pipe suitable for food-grade use?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Yes, SS 304 ERW Pipes are widely used in food, dairy, and beverage industries due to their hygiene and corrosion resistance.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What is the difference between ERW and Seamless pipes?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    ERW pipes are welded and cost-effective, while seamless pipes are preferred for very high-pressure applications.
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
                                    Yes, all supplies include EN 10204 3.1 certificates.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What is delivery time?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Ex-stock items: 2–5 working days<br>
                                    Manufacturing orders: 2–4 weeks
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
                    Looking for SS 304 ERW Pipes for industrial or export projects?<br>
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
            "name": "SS 304 ERW Pipes ASTM A312 TP304 / TP304L",
            "description": "SS 304 ERW Pipes manufactured as per ASTM A312 TP304/TP304L for chemical, marine, food, pharmaceutical and industrial applications.",
            "brand": {
                "@type": "Brand",
                "name": "Moksh Tubes & Fittings LLP"
            },
            "manufacturer": {
                "@type": "Organization",
                "name": "Moksh Tubes & Fittings LLP"
            },
            "material": "Stainless Steel 304 / 304L",
            "url": "https://www.mokshtubes.com/products/pipes-tubes/welded-pipes/ss-304-erw-pipes",
            "offers": {
                "@type": "AggregateOffer",
                "priceCurrency": "USD",
                "lowPrice": "2.5",
                "highPrice": "10",
                "offerCount": "100"
            }
        },
        {
            "@context": "https://schema.org",
            "@type": "FAQPage",
            "mainEntity": [
                {
                "@type": "Question",
                "name": "What is SS 304 ERW Pipe?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "SS 304 ERW Pipe is a welded stainless steel pipe manufactured using electric resistance welding, suitable for corrosion-resistant and hygienic applications."
                }
                },
                {
                "@type": "Question",
                "name": "Is SS 304 ERW Pipe suitable for food-grade use?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, SS 304 ERW Pipes are widely used in food, dairy, and beverage industries due to their hygiene and corrosion resistance."
                }
                },
                {
                "@type": "Question",
                "name": "What is the difference between ERW and Seamless pipes?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "ERW pipes are welded and cost-effective, while seamless pipes are preferred for very high-pressure applications."
                }
                },
                {
                "@type": "Question",
                "name": "Do you provide test certificates?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, all supplies include EN 10204 3.1 certificates."
                }
                },
                {
                "@type": "Question",
                "name": "What is delivery time?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Ex-stock items: 2–5 working days. Manufacturing orders: 2–4 weeks."
                }
                }
            ]
        }
        ]
        @endverbatim
    </script>
@endsection