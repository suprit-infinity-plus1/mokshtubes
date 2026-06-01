@extends('layouts.master')

@section('title', 'SS 304 Welded Pipes ASTM A312 TP304 / TP304L | Manufacturer')
@section('meta_description', 'SS 304 Welded Pipes as per ASTM A312 TP304/TP304L. Manufacturer, supplier & exporter to India, UAE, Saudi Arabia, Qatar, Oman & Kuwait.')
@section('meta_keywords', 'Stainless Steel 304 Welded Pipes, ASTM A312 TP304 Pipe, SS 304 ERW Pipe, SS 304 EFW Pipe, SS 304 Pipe Supplier India, Stainless Steel Pipe Exporter')
@section('og_image', asset('assets/images/welded/SS-304-Welded.png'))
@section('og_type', 'article')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/welded/SS-304-Welded.png);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>SS 304 Welded Pipes<br>ASTM A312 TP304 / TP304L</h1>

                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        SS 304 Welded Pipes are corrosion-resistant, hygienic, and cost-effective stainless steel pipes widely used in industrial, commercial, and structural applications. Manufactured by welding stainless steel strips or plates, these pipes offer excellent dimensional accuracy, smooth surface finish, and reliable performance for low to medium pressure services.
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
            <a href="#welded-vs-seamless">Welded vs Seamless</a> |
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
                STAINLESS STEEL 304 WELDED PIPES
            </h3>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/welded/SS-304-Welded.png') }}" alt="SS 304 Welded Pipes"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4" style="text-align: justify;">
                            <strong class="text-black">SS 304 Welded Pipes</strong> are manufactured from austenitic stainless steel containing chromium and nickel, providing excellent corrosion resistance, formability, and weldability. These pipes are produced by forming stainless steel coils or plates into tubular shapes and welding the seam using advanced welding techniques such as ERW, EFW, or TIG welding, followed by heat treatment and finishing.
                        </p>

                        <p class="fs-6 mb-4" style="text-align: justify;">
                            At <strong style="color:black;"><a href="{{ url('/contact-us') }}">Moksh Tubes & Fittings LLP</a></strong>, we are a leading manufacturer, supplier, and exporter of SS 304 Welded Pipes in India, supplying high-quality pipes to domestic infrastructure projects and international markets including UAE, Saudi Arabia, Qatar, Oman, and Kuwait.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            SS 304 Welded Pipes are widely used in food processing, dairy, pharmaceuticals, water pipelines, oil & gas utilities, fabrication, and architectural applications where hygiene, corrosion resistance, and cost efficiency are essential.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download SS 304 Welded Pipes Datasheet</h3>
            <p class="mb-3">
                Get the complete datasheet including chemical composition, mechanical properties, standards, tolerances, and application guidelines. Enter your email to receive the PDF instantly.
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
                <h2>2. Specifications</h2>
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
                                <tr class="t-row"><td>Material</td><td>Stainless Steel 304 / 304L</td></tr>
                                <tr class="t-row"><td>Standard</td><td>ASTM A312 / ASME SA312</td></tr>
                                <tr class="t-row"><td>Manufacturing</td><td>Welded (ERW / EFW / TIG)</td></tr>
                                <tr class="t-row"><td>Outer Diameter (OD)</td><td>6 mm to 1200 mm</td></tr>
                                <tr class="t-row"><td>Wall Thickness</td><td>0.8 mm to 20 mm</td></tr>
                                <tr class="t-row"><td>Length</td><td>6 m, 12 m, or cut-to-length</td></tr>
                                <tr class="t-row"><td>Surface Finish</td><td>Mill Finish, Pickled & Passivated, Polished</td></tr>
                                <tr class="t-row"><td>Pipe Ends</td><td>Plain End, Beveled End</td></tr>
                                <tr class="t-row"><td>Form</td><td>Round Pipes</td></tr>
                                <tr class="t-row"><td>Heat Treatment</td><td>Solution Annealed</td></tr>
                                <tr class="t-row"><td>Applications</td><td>Industrial, Structural, Hygienic</td></tr>
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
                <h2 class="fw-bold" style="color: #174268;">3. Size & Weight Chart – SS 304 Welded Pipes</h2>
            </div>
            
            <p class="text-center mb-4">SS 304 Welded Pipes are available in standard schedules such as 5S, 10S, 40S, and 80S.</p>

            <div class="row justify-content-center">
                <div class="col-lg-6 mb-4">
                    <h4 class="text-center mb-3" style="color: #db7227;">Schedule 5S</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row"><th>NB (Inch)</th><th>OD (mm)</th><th>WT (mm)</th><th>Weight (kg/m)</th></tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>1/2"</td><td>21.34</td><td>1.65</td><td>0.79</td></tr>
                                <tr class="t-row"><td>3/4"</td><td>26.67</td><td>1.65</td><td>1.02</td></tr>
                                <tr class="t-row"><td>1"</td><td>33.40</td><td>1.65</td><td>1.29</td></tr>
                                <tr class="t-row"><td>1½"</td><td>48.30</td><td>1.65</td><td>1.88</td></tr>
                                <tr class="t-row"><td>2"</td><td>60.33</td><td>1.65</td><td>2.36</td></tr>
                                <tr class="t-row"><td>2½"</td><td>73.03</td><td>2.11</td><td>3.54</td></tr>
                                <tr class="t-row"><td>3"</td><td>88.90</td><td>2.11</td><td>4.35</td></tr>
                                <tr class="t-row"><td>4"</td><td>114.30</td><td>2.11</td><td>5.63</td></tr>
                                <tr class="t-row"><td>6"</td><td>168.28</td><td>2.77</td><td>11.2</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <h4 class="text-center mb-3" style="color: #db7227;">Schedule 10S</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row"><th>NB (Inch)</th><th>OD (mm)</th><th>WT (mm)</th><th>Weight (kg/m)</th></tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>1/2"</td><td>21.34</td><td>2.11</td><td>1.00</td></tr>
                                <tr class="t-row"><td>3/4"</td><td>26.67</td><td>2.11</td><td>1.27</td></tr>
                                <tr class="t-row"><td>1"</td><td>33.40</td><td>2.77</td><td>2.13</td></tr>
                                <tr class="t-row"><td>1½"</td><td>48.30</td><td>2.77</td><td>3.16</td></tr>
                                <tr class="t-row"><td>2"</td><td>60.33</td><td>2.77</td><td>3.99</td></tr>
                                <tr class="t-row"><td>2½"</td><td>73.03</td><td>3.05</td><td>5.44</td></tr>
                                <tr class="t-row"><td>3"</td><td>88.90</td><td>3.05</td><td>6.44</td></tr>
                                <tr class="t-row"><td>4"</td><td>114.30</td><td>3.05</td><td>8.87</td></tr>
                                <tr class="t-row"><td>6"</td><td>168.28</td><td>3.40</td><td>13.6</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <h4 class="text-center mb-3" style="color: #db7227;">Schedule 40S</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row"><th>NB (Inch)</th><th>OD (mm)</th><th>WT (mm)</th><th>Weight (kg/m)</th></tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>1/2"</td><td>21.34</td><td>2.77</td><td>1.29</td></tr>
                                <tr class="t-row"><td>3/4"</td><td>26.67</td><td>2.87</td><td>1.71</td></tr>
                                <tr class="t-row"><td>1"</td><td>33.40</td><td>3.38</td><td>2.54</td></tr>
                                <tr class="t-row"><td>1½"</td><td>48.30</td><td>3.68</td><td>4.11</td></tr>
                                <tr class="t-row"><td>2"</td><td>60.33</td><td>3.91</td><td>5.52</td></tr>
                                <tr class="t-row"><td>2½"</td><td>73.03</td><td>5.16</td><td>8.63</td></tr>
                                <tr class="t-row"><td>3"</td><td>88.90</td><td>5.49</td><td>11.3</td></tr>
                                <tr class="t-row"><td>4"</td><td>114.30</td><td>6.02</td><td>16.1</td></tr>
                                <tr class="t-row"><td>6"</td><td>168.28</td><td>7.11</td><td>28.3</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <h4 class="text-center mb-3" style="color: #db7227;">Schedule 80S</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row"><th>NB (Inch)</th><th>OD (mm)</th><th>WT (mm)</th><th>Weight (kg/m)</th></tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>1/2"</td><td>21.34</td><td>3.73</td><td>1.65</td></tr>
                                <tr class="t-row"><td>3/4"</td><td>26.67</td><td>3.91</td><td>2.23</td></tr>
                                <tr class="t-row"><td>1"</td><td>33.40</td><td>4.55</td><td>3.29</td></tr>
                                <tr class="t-row"><td>1½"</td><td>48.30</td><td>5.08</td><td>5.49</td></tr>
                                <tr class="t-row"><td>2"</td><td>60.33</td><td>5.54</td><td>7.60</td></tr>
                                <tr class="t-row"><td>2½"</td><td>73.03</td><td>7.01</td><td>11.4</td></tr>
                                <tr class="t-row"><td>3"</td><td>88.90</td><td>7.62</td><td>15.3</td></tr>
                                <tr class="t-row"><td>4"</td><td>114.30</td><td>8.56</td><td>22.3</td></tr>
                                <tr class="t-row"><td>6"</td><td>168.28</td><td>10.97</td><td>42.6</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="welded-vs-seamless" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Welded vs Seamless Stainless Steel Pipes – Key Differences</h2>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Parameter</th>
                                    <th>Welded Pipes</th>
                                    <th>Seamless Pipes</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>Manufacturing</td><td>Formed & welded</td><td>Hot extrusion / cold drawing</td></tr>
                                <tr class="t-row"><td>Weld Seam</td><td>Present</td><td>No seam</td></tr>
                                <tr class="t-row"><td>Pressure Rating</td><td>Low–Medium</td><td>High</td></tr>
                                <tr class="t-row"><td>Dimensional Accuracy</td><td>Excellent</td><td>Good</td></tr>
                                <tr class="t-row"><td>Cost</td><td>Economical</td><td>Higher</td></tr>
                                <tr class="t-row"><td>Typical Use</td><td>Food, water, fabrication</td><td>High-pressure critical lines</td></tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="text-center mt-3">
                        📌 <strong>SS 304 Welded Pipes</strong> are ideal where hygiene, corrosion resistance, and cost efficiency are required.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="grades" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>4. Grades Available</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>SS 304 (UNS S30400)</h5>
                        <p>General corrosion resistance and fabrication</p>
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
                        <p>EN 1.4301 / 1.4307<br>DIN X5CrNi18-10<br>JIS SUS 304</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>5. Applications</h2>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cup-straw"></i></div>
                        <h5>1️⃣ Food, Dairy & Beverage Industry</h5>
                        <p>✔ Milk and beverage pipelines<br>✔ Brewing & processing lines</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>2️⃣ Chemical & Pharmaceutical</h5>
                        <p>✔ Chemical transfer piping<br>✔ Process & reactor pipelines</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>3️⃣ Oil & Gas / Industrial Fabrication</h5>
                        <p>✔ Utility piping<br>✔ Instrumentation lines</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>4️⃣ Water & Plumbing Systems</h5>
                        <p>✔ Drinking water pipelines<br>✔ RO & water treatment plants</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-building"></i></div>
                        <h5>5️⃣ Architectural & Structural</h5>
                        <p>✔ Handrails, frames, supports<br>✔ Decorative stainless steel works</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="uses" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>6. Uses & Advantages of SS 304 Welded Pipes</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Excellent corrosion resistance</h5>
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
                        <h5>Cost-effective compared to seamless pipes</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Easy fabrication and welding</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                        <h5>Suitable for food-grade and hygienic applications</h5>
                    </div>
                </div>
            </div>
            
            <p class="text-center mt-4">
                <strong>Uses:</strong> Corrosion-resistant fluid transport | Hygienic processing systems | Structural fabrication | Low to medium pressure pipelines | Industrial utility services
            </p>
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
                        <p class="fs-6" style="text-align: justify;"><strong>Manufacturing Process of SS 304 Welded Pipes:</strong></p>
                        <p>1️⃣ Slitting of stainless steel coils / plates</p>
                        <p>2️⃣ Cold forming into tubular shape</p>
                        <p>3️⃣ Welding (ERW / EFW / TIG)</p>
                        <p>4️⃣ Weld seam heat treatment (solution annealing)</p>
                        <p>5️⃣ Sizing, straightening & surface finishing</p>
                        <p>6️⃣ Non-destructive testing & final inspection</p>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6" style="text-align: justify;"><strong>Testing & Quality Control:</strong></p>
                        <p>Each SS 304 Welded Pipe undergoes strict inspection including:</p>
                        <p>✔ Eddy Current Test</p>
                        <p>✔ Ultrasonic Testing (UT)</p>
                        <p>✔ PMI Test</p>
                        <p>✔ Dimensional Inspection</p>
                        <p>✔ Visual & Surface Finish Inspection</p>
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
                    <h4 class="text-center mb-3" style="color: #db7227;">Mechanical Properties of SS 304 / 304L Welded Pipes</h4>
                    <p class="text-center mb-4">(As per ASTM A312 / ASME SA312)</p>
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
                                <tr class="t-row"><td>Tensile Strength</td><td>Min. 515 MPa</td><td>Min. 485 MPa</td></tr>
                                <tr class="t-row"><td>Yield Strength (0.2%)</td><td>Min. 205 MPa</td><td>Min. 170 MPa</td></tr>
                                <tr class="t-row"><td>Elongation</td><td>Min. 40%</td><td>Min. 40%</td></tr>
                                <tr class="t-row"><td>Hardness (HB)</td><td>Max. 201</td><td>Max. 201</td></tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="text-center mt-3">
                        📌 <strong>SS 304L</strong> provides improved resistance to intergranular corrosion after welding, making it ideal for fabrication and pressure piping.
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
                        <p><strong>Length tolerance:</strong> Random: +100 mm | Cut length: ±3 mm</p>
                        <p><strong>Ovality & straightness:</strong> As per ASTM A312</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-5">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-box-seam"></i></div>
                        <h5>Export & Supply</h5>
                        <p><strong>Supply Regions:</strong> Pan-India, UAE, Saudi Arabia, Qatar, Oman, Kuwait</p>
                        <p><strong>Export Packaging:</strong> Seaworthy wooden crates & bundles, Plastic end caps & moisture protection, ISPM-15 fumigated packaging, Proper heat & batch traceability</p>
                        <p><strong>Export Documentation:</strong> Commercial Invoice & Packing List, Certificate of Origin, EN 10204 3.1, Third-Party Inspection (TPI) if required</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container text-center">
            <div class="section-title center">
                <h2>Why Choose Moksh Tubes & Fittings LLP?</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-box-seam"></i></div>
                        <h5>Ready stock & fast delivery</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-tags"></i></div>
                        <h5>Competitive pricing for bulk orders</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Compliance with Indian & Gulf standards</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Project-based supply expertise</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-file-earmark-check"></i></div>
                        <h5>Reliable logistics & documentation</h5>
                    </div>
                </div>
                
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-headset"></i></div>
                        <h5>Technical support & consultation</h5>
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
                                <h4>What is SS 304 Welded Pipe?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    A stainless steel pipe manufactured by forming and welding SS 304 strips or plates, suitable for corrosion-resistant applications.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Is SS 304 Welded Pipe food-grade?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Yes, it is widely used in food, dairy, and beverage industries.
                                </p>
                            </div>
                        </div>
                        
                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Difference between Welded and Seamless pipes?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Welded pipes are economical and precise, while seamless pipes are preferred for very high-pressure applications.
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
                                    Yes, EN 10204 3.1 certificates are provided with every supply.
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
                <h2>REQUEST A QUOTE</h2>
                <p>
                    Looking for SS 304 Welded Pipes for industrial or export projects?<br>
                    📞 Call: +91 97695 84950<br>
                    🌐 <strong>Moksh Tubes & Fittings LLP</strong><br>
                    Precision stainless steel piping solutions you can trust.
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
            "name": "SS 304 Welded Pipes ASTM A312 TP304 / TP304L",
            "description": "SS 304 Welded Pipes as per ASTM A312 TP304/TP304L. Manufacturer, supplier & exporter to India, UAE, Saudi Arabia, Qatar, Oman & Kuwait.",
            "brand": {
                "@type": "Brand",
                "name": "Moksh Tubes & Fittings LLP"
            },
            "manufacturer": {
                "@type": "Organization",
                "name": "Moksh Tubes & Fittings LLP"
            },
            "material": "Stainless Steel 304 / 304L",
            "url": "https://www.mokshtubes.com/products/pipes-tubes/ss-304-welded-pipes",
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
                "name": "What is SS 304 Welded Pipe?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "A stainless steel pipe manufactured by forming and welding SS 304 strips or plates, suitable for corrosion-resistant applications."
                }
            },{
                "@type": "Question",
                "name": "Is SS 304 Welded Pipe food-grade?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, it is widely used in food, dairy, and beverage industries."
                }
            },{
                "@type": "Question",
                "name": "Difference between Welded and Seamless pipes?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "Welded pipes are economical and precise, while seamless pipes are preferred for very high-pressure applications."
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
                "name": "SS 304 Welded Pipes",
                "item": "https://www.mokshtubes.com/products/pipes-tubes/ss-304-welded-pipes"
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
