@extends('layouts.master')

@section('title', 'Stainless Steel 304 Semi Welded Pipes Manufacturer, Supplier & Exporter in India')
@section('meta_description', 'Leading Stainless Steel 304 Semi Welded Pipes manufacturer, supplier and exporter in India. ASTM A312 TP304 semi welded pipes available in various sizes, schedules and finishes with worldwide delivery.')
@section('meta_keywords', 'stainless steel 304 semi welded pipes, ss 304 semi welded pipes, 304 semi welded pipes, stainless steel 304 pipes, tp304 semi welded pipes, astm a312 tp304 semi welded pipes, ss 304 welded pipes, 304 stainless steel welded pipe, tp304 pipe supplier, 304 stainless steel pipe manufacturer, ss 304 pipe exporter')
@section('og_image', asset('assets/images/welded/ss-304-semi-welded-pipes.jpg'))
@section('og_type', 'article')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url('{{ asset('assets/images/welded/ss-304-semi-welded-pipes.jpg') }}');">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>SS 304 Semi Welded Pipes<br>ASTM A312 TP304</h1>

                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px; max-width: 900px;">
                        Stainless Steel 304 Semi Welded Pipes are manufactured by forming stainless steel strips into tubular sections and joining them through a controlled welding process, followed by sizing and finishing operations. These pipes combine the advantages of welded construction with excellent corrosion resistance, making them suitable for medium-pressure and general industrial applications.
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
            <a href="#semi-welded-vs-seamless">Semi Welded vs Seamless</a> |
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
                STAINLESS STEEL 304 SEMI WELDED PIPES
            </h3>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/welded/ss-304-semi-welded-pipes.jpg') }}" alt="SS 304 Semi Welded Pipes"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4" style="text-align: justify;">
                            <strong class="text-black">Grade 304</strong> is the most widely used austenitic stainless steel due to its outstanding resistance to oxidation, corrosion, moisture, chemicals, and atmospheric conditions. It contains approximately 18% chromium and 8% <a href="{{ route('materials.nickel-Based-Superalloys') }}">nickel</a>, providing excellent durability and long service life across diverse operating environments.
                        </p>

                        <p class="fs-6 mb-4" style="text-align: justify;">
                            These pipes are produced by cold-forming stainless steel strips into tubular shapes followed by a controlled welding process, ensuring uniform weld integrity and excellent dimensional control.
                        </p>

                        <p class="fs-6 mb-4" style="text-align: justify;">
                            At <strong style="color:black;"><a href="{{ url('/contact-us') }}">Moksh Tubes & Fittings
                                    LLP</a></strong>, we are a trusted manufacturer, supplier, and exporter of SS 304 Semi Welded
                            Pipes in India, supplying both domestic projects and Gulf / GCC markets including UAE, Saudi
                            Arabia, Qatar, Oman, and Kuwait.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            Our SS 304 Semi Welded Pipes are widely used in chemical processing, food & dairy, pharmaceuticals, water pipelines, oil & gas, fabrication, and architectural applications.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download SS 304 Semi Welded Pipes Datasheet</h3>
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
                                    <td>Stainless Steel 304</td>
                                </tr>
                                <tr class="t-row">
                                    <td>UNS Number</td>
                                    <td>S30400</td>
                                </tr>
                                <tr class="t-row">
                                    <td>WERKSTOFF NR.</td>
                                    <td>1.4301</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Standard</td>
                                    <td>ASTM A312, ASTM A554, ASTM A249, ASTM A269</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manufacturing</td>
                                    <td>Semi Welded</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Outer Diameter (OD)</td>
                                    <td>6 mm to 610 mm</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Wall Thickness</td>
                                    <td>0.5 mm to 12.7 mm</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Length</td>
                                    <td>Up to 12 Meters</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Surface Finish</td>
                                    <td>Mill Finish, Polished, Bright Annealed, Pickled & Passivated</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Pipe Ends</td>
                                    <td>Plain End, Beveled End, Threaded End</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Form</td>
                                    <td>Round, Square, Rectangular</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Pipe Schedules</td>
                                    <td>SCH 5S, 10S, 40S, 80S, 160S, XXS</td>
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
                <h2 class="fw-bold" style="color: #174268;">Size & Weight Chart – SS 304 Semi Welded Pipes</h2>
            </div>

            <p class="text-center mb-4">SS 304 Semi Welded Pipes are available in standard schedules:<br>📌 Weights are
                theoretical (kg/m) | 📌 Dimensions as per ASTM A312 | 📌 Custom OD & wall thickness available</p>

            <div class="row justify-content-center">
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
                                <tr class="t-row"><td>1/8"</td><td>10.30</td><td>1.24</td><td>0.28</td></tr>
                                <tr class="t-row"><td>1/4"</td><td>13.70</td><td>1.65</td><td>0.49</td></tr>
                                <tr class="t-row"><td>3/8"</td><td>17.10</td><td>1.65</td><td>0.63</td></tr>
                                <tr class="t-row"><td>1/2"</td><td>21.34</td><td>2.11</td><td>0.85</td></tr>
                                <tr class="t-row"><td>3/4"</td><td>26.67</td><td>2.11</td><td>1.12</td></tr>
                                <tr class="t-row"><td>1"</td><td>33.40</td><td>2.77</td><td>1.41</td></tr>
                                <tr class="t-row"><td>1-1/4"</td><td>42.16</td><td>2.77</td><td>1.80</td></tr>
                                <tr class="t-row"><td>1-1/2"</td><td>48.26</td><td>2.77</td><td>2.09</td></tr>
                                <tr class="t-row"><td>2"</td><td>60.33</td><td>2.77</td><td>2.64</td></tr>
                                <tr class="t-row"><td>2-1/2"</td><td>73.03</td><td>3.05</td><td>3.42</td></tr>
                                <tr class="t-row"><td>3"</td><td>88.90</td><td>3.05</td><td>4.18</td></tr>
                                <tr class="t-row"><td>4"</td><td>114.30</td><td>3.05</td><td>5.44</td></tr>
                                <tr class="t-row"><td>5"</td><td>141.30</td><td>3.40</td><td>6.75</td></tr>
                                <tr class="t-row"><td>6"</td><td>168.28</td><td>3.40</td><td>8.07</td></tr>
                                <tr class="t-row"><td>8"</td><td>219.08</td><td>3.76</td><td>10.54</td></tr>
                                <tr class="t-row"><td>10"</td><td>273.05</td><td>4.19</td><td>13.19</td></tr>
                                <tr class="t-row"><td>12"</td><td>323.85</td><td>4.57</td><td>15.67</td></tr>
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
                                <tr class="t-row"><td>1/8"</td><td>10.30</td><td>1.73</td><td>0.37</td></tr>
                                <tr class="t-row"><td>1/4"</td><td>13.70</td><td>2.24</td><td>0.64</td></tr>
                                <tr class="t-row"><td>3/8"</td><td>17.10</td><td>2.31</td><td>0.86</td></tr>
                                <tr class="t-row"><td>1/2"</td><td>21.34</td><td>2.77</td><td>1.27</td></tr>
                                <tr class="t-row"><td>3/4"</td><td>26.67</td><td>2.87</td><td>1.69</td></tr>
                                <tr class="t-row"><td>1"</td><td>33.40</td><td>3.38</td><td>2.50</td></tr>
                                <tr class="t-row"><td>1-1/4"</td><td>42.16</td><td>3.56</td><td>3.39</td></tr>
                                <tr class="t-row"><td>1-1/2"</td><td>48.26</td><td>3.68</td><td>4.05</td></tr>
                                <tr class="t-row"><td>2"</td><td>60.33</td><td>3.91</td><td>5.44</td></tr>
                                <tr class="t-row"><td>2-1/2"</td><td>73.03</td><td>5.16</td><td>7.58</td></tr>
                                <tr class="t-row"><td>3"</td><td>88.90</td><td>5.49</td><td>10.26</td></tr>
                                <tr class="t-row"><td>4"</td><td>114.30</td><td>6.02</td><td>13.49</td></tr>
                                <tr class="t-row"><td>5"</td><td>141.30</td><td>6.55</td><td>18.24</td></tr>
                                <tr class="t-row"><td>6"</td><td>168.28</td><td>7.11</td><td>21.86</td></tr>
                                <tr class="t-row"><td>8"</td><td>219.08</td><td>8.18</td><td>28.55</td></tr>
                                <tr class="t-row"><td>10"</td><td>273.05</td><td>9.27</td><td>35.95</td></tr>
                                <tr class="t-row"><td>12"</td><td>323.85</td><td>9.53</td><td>49.56</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="grades" class="sec-padd-top sec-padd-bottom">
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

    <section id="applications" class="sec-padd-top sec-padd-bottom bg-light">
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

    <section id="semi-welded-vs-seamless" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Semi Welded vs Seamless Stainless Steel Pipes</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Parameter</th>
                                    <th>Semi Welded Pipes</th>
                                    <th><a href="{{ route('products.pipes-tubes.seamless-pipes') ?? '#' }}"
                                            class="text-white text-decoration-underline">Seamless Pipes</a></th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Manufacturing</td>
                                    <td>Controlled Welding</td>
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
                        📌 <strong>SS 304 Semi Welded Pipes</strong> are ideal where corrosion resistance and cost efficiency are
                        required without extreme pressure conditions. For high-pressure applications, consider our <a
                            href="{{ route('products.pipes-tubes.seamless-pipes') ?? '#' }}">Stainless Steel 304 Seamless
                            Pipes</a>.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="manufacturing" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Manufacturing Process & Quality Control</h2>
            </div>

            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6" style="text-align: justify;"><strong>Manufacturing Process of SS 304 Semi Welded
                                Pipes:</strong></p>
                        <p>Slitting of stainless steel coils</p>
                        <p>Cold forming into tubular shape</p>
                        <p>Controlled welding process</p>
                        <p>Weld seam solution annealing</p>
                        <p>Sizing, straightening & surface finishing</p>
                        <p>NDT testing & final inspection</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6" style="text-align: justify;"><strong>Testing & Quality Control:</strong></p>
                        <p>Each SS 304 Semi Welded Pipe undergoes:</p>
                        <p>✔ Eddy Current Test</p>
                        <p>✔ Hydrostatic Testing</p>
                        <p>✔ PMI Test</p>
                        <p>✔ Dimensional Inspection</p>
                        <p>✔ Visual & Surface Inspection</p>
                        <p><strong>📄 Test Certificate:</strong> EN 10204 3.1</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="mechanical" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Mechanical Properties</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h4 class="text-center mb-3" style="color: #db7227;">Mechanical Properties of SS 304 Semi Welded Pipes
                    </h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Property</th>
                                    <th>SS 304</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Tensile Strength</td>
                                    <td>Min. 515 MPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (0.2%)</td>
                                    <td>Min. 205 MPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elongation</td>
                                    <td>Min. 40%</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Hardness (HB)</td>
                                    <td>Max. 201</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="text-center mt-3">
                        📌 <strong>SS 304</strong> offers excellent strength and durability for general piping applications.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="tolerances" class="sec-padd-top sec-padd-bottom bg-light">
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

    <section id="why-choose-us" class="sec-padd-top sec-padd-bottom">
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
    <section id="faq" class="faq-content-area sec-padd2 bg-light">
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
                                <h4>What are Stainless Steel 304 Semi Welded Pipes?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    These are pipes manufactured from SS 304 coils using a controlled welding process, offering excellent corrosion resistance and durability.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Are SS 304 Semi Welded Pipes corrosion resistant?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Yes, they provide excellent resistance to corrosion, oxidation, and atmospheric exposure.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What is the difference between seamless and semi welded pipes?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Seamless pipes are manufactured without a weld seam, while semi welded pipes are produced by welding formed stainless steel strips.
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
                    Looking for SS 304 Semi Welded Pipes for industrial or export projects?<br>
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
            "name": "Stainless Steel 304 Semi Welded Pipes",
            "description": "Stainless Steel 304 Semi Welded Pipes manufactured as per ASTM A312 TP304 for chemical, marine, food, pharmaceutical and industrial applications.",
            "brand": {
                "@type": "Brand",
                "name": "Moksh Tubes & Fittings LLP"
            },
            "manufacturer": {
                "@type": "Organization",
                "name": "Moksh Tubes & Fittings LLP"
            },
            "material": "Stainless Steel 304",
            "url": "https://www.mokshtubes.com/products/pipes-tubes/welded-pipes/ss-304-semi-welded-pipes",
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
                "name": "What are Stainless Steel 304 Semi Welded Pipes?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "These are pipes manufactured from SS 304 coils using a controlled welding process, offering excellent corrosion resistance and durability."
                }
                },
                {
                "@type": "Question",
                "name": "Are SS 304 Semi Welded Pipes corrosion resistant?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, they provide excellent resistance to corrosion, oxidation, and atmospheric exposure."
                }
                },
                {
                "@type": "Question",
                "name": "What is the difference between seamless and semi welded pipes?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Seamless pipes are manufactured without a weld seam, while semi welded pipes are produced by welding formed stainless steel strips."
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
                    "text": "Ex-stock items: 2-5 working days. Manufacturing orders: 2-4 weeks."
                }
                }
            ]
        }]
        @endverbatim
    </script>
@endsection
