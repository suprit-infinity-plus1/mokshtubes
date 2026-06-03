@extends('layouts.master')

@section('title', 'Capillary Tubes Supplier UAE, Saudi | Precision Tubing Exporter')
@section('meta_description', 'Capillary tubes exporter to UAE, Saudi Arabia, Qatar & Oman. Precision micro tubes in stainless steel & alloys for medical, HVAC & industrial use.')
@section('meta_keywords', 'Capillary tubes, precision capillary tubing, stainless steel capillary tubes, medical capillary tubes, HVAC capillary tubes, capillary tubes exporter, micro tubing supplier')
@section('og_image', asset('assets/images/product/capillary-tubes.webp'))
@section('og_type', 'article')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url('{{ asset('assets/images/product/capillary-tubes.webp') }}');">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Capillary Tubes<br>Manufacturer, Supplier & Exporter</h1>

                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px; max-width: 900px;">
                        Capillary Tubes are precision-engineered tubing products with extremely small diameters and tight dimensional tolerances, designed for applications requiring accurate fluid control, high precision, and superior reliability. These tubes are widely used in medical equipment, instrumentation systems, refrigeration units, aerospace components, laboratory equipment, and chemical processing industries.
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
            <a href="#buying-guide">Buying Guide</a> |
            <a href="#manufacturing">Manufacturing</a> |
            <a href="#testing">Testing & Export</a> |
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
                CAPILLARY TUBES
            </h3>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/product/capillary-tubes.webp') }}" alt="Capillary Tubes"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4" style="text-align: justify;">
                            <strong>Capillary Tubes</strong> are highly specialized precision tubes manufactured with extremely small outside diameters and thin wall thicknesses to ensure accurate fluid flow control and exceptional dimensional precision. These tubes are essential in applications where standard tubing cannot provide the required level of accuracy, responsiveness, or compactness.
                        </p>

                        <p class="fs-6 mb-4" style="text-align: justify;">
                            Due to their small internal bore and superior surface finish, capillary tubes are extensively used in medical devices, chromatography systems, analytical instruments, refrigeration equipment, thermocouples, hydraulic systems, pneumatic control systems, and aerospace applications.
                        </p>

                        <p class="fs-6 mb-4" style="text-align: justify;">
                            At <strong style="color:black;"><a href="{{ url('/contact-us') }}">Moksh Tubes & Fittings
                                    LLP</a></strong>, we are a trusted manufacturer, supplier, stockist, and exporter of Capillary Tubes in India. Our capillary tubes are manufactured using advanced cold drawing, bright annealing, and precision finishing processes to achieve excellent dimensional accuracy, smooth internal surfaces, and superior mechanical properties.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            Manufactured according to ASTM, ASME, DIN, and EN standards, our capillary tubes offer outstanding corrosion resistance, strength, and durability in demanding industrial and scientific applications.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Capillary Tubes Datasheet</h3>
            <p class="mb-3">
                Get the complete technical datasheet including chemical composition, mechanical properties, size availability, standards, testing procedures, and application guidelines. Enter your email to receive the PDF instantly.
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
                <h2>2. Specifications of Capillary Tubes</h2>
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
                                    <td>Stainless Steel, Duplex & Super Duplex, Nickel Alloys, Inconel, Monel, Titanium, Copper Alloys</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Grades</td>
                                    <td>ASTM / ASME Certified Grades</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Outer Diameter (OD)</td>
                                    <td>0.3 mm to 8 mm</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Wall Thickness</td>
                                    <td>0.05 mm to 1.0 mm</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Lengths</td>
                                    <td>Up to 6 meters or custom coil lengths</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Surface Finish</td>
                                    <td>Bright Annealed, Electro Polished, Mechanical Polished, Matte Finish</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Form</td>
                                    <td>Coiled, Straight Lengths, Cut-to-Length</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Standards</td>
                                    <td>ASTM A213, ASTM A269, ASTM B338, DIN, EN</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manufacturing</td>
                                    <td>Cold Drawn Precision Tubing</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Applications</td>
                                    <td>Medical, Instrumentation, Refrigeration, Chemical Processing</td>
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
                <h2 class="fw-bold" style="color: #174268;">3. Size & Weight Chart – Capillary Tubes</h2>
            </div>

            <p class="text-center mb-4">Capillary Tubes – Weight & Nominal Bore Chart</p>

            <div class="row justify-content-center mb-5">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>NB (mm)</th>
                                    <th>Inches</th>
                                    <th>OD (mm)</th>
                                    <th>Sch 5C Wt (kg/m)</th>
                                    <th>Sch 10C Wt (kg/m)</th>
                                    <th>Sch 40C Wt (kg/m)</th>
                                    <th>Sch 80C Wt (kg/m)</th>
                                    <th>Sch 160C Wt (kg/m)</th>
                                    <th>Sch XXC Wt (kg/m)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>3</td><td>1/8</td><td>10.3</td><td>0.01</td><td>0.02</td><td>0.03</td><td>0.04</td><td>0.06</td><td>0.07</td></tr>
                                <tr class="t-row"><td>6</td><td>1/4</td><td>13.7</td><td>0.02</td><td>0.03</td><td>0.04</td><td>0.06</td><td>0.08</td><td>0.10</td></tr>
                                <tr class="t-row"><td>10</td><td>3/8</td><td>17.1</td><td>0.03</td><td>0.04</td><td>0.06</td><td>0.08</td><td>0.11</td><td>0.14</td></tr>
                                <tr class="t-row"><td>15</td><td>1/2</td><td>21.3</td><td>0.04</td><td>0.06</td><td>0.08</td><td>0.12</td><td>0.16</td><td>0.20</td></tr>
                                <tr class="t-row"><td>20</td><td>3/4</td><td>26.7</td><td>0.06</td><td>0.09</td><td>0.12</td><td>0.17</td><td>0.22</td><td>0.28</td></tr>
                                <tr class="t-row"><td>25</td><td>1</td><td>33.4</td><td>0.08</td><td>0.12</td><td>0.17</td><td>0.25</td><td>0.33</td><td>0.41</td></tr>
                                <tr class="t-row"><td>32</td><td>1 1/4</td><td>42.2</td><td>0.13</td><td>0.19</td><td>0.26</td><td>0.38</td><td>0.50</td><td>0.62</td></tr>
                                <tr class="t-row"><td>40</td><td>1 1/2</td><td>48.3</td><td>0.16</td><td>0.24</td><td>0.32</td><td>0.48</td><td>0.63</td><td>0.78</td></tr>
                                <tr class="t-row"><td>50</td><td>2</td><td>60.3</td><td>0.24</td><td>0.36</td><td>0.47</td><td>0.70</td><td>0.93</td><td>1.17</td></tr>
                                <tr class="t-row"><td>65</td><td>2 1/2</td><td>73.0</td><td>0.33</td><td>0.49</td><td>0.65</td><td>0.97</td><td>1.29</td><td>1.63</td></tr>
                                <tr class="t-row"><td>80</td><td>3</td><td>88.9</td><td>0.47</td><td>0.70</td><td>0.93</td><td>1.40</td><td>1.87</td><td>2.36</td></tr>
                                <tr class="t-row"><td>100</td><td>4</td><td>114.3</td><td>0.77</td><td>1.14</td><td>1.52</td><td>2.27</td><td>3.04</td><td>3.82</td></tr>
                                <tr class="t-row"><td>150</td><td>6</td><td>168.3</td><td>1.63</td><td>2.41</td><td>3.23</td><td>4.79</td><td>6.38</td><td>8.02</td></tr>
                                <tr class="t-row"><td>200</td><td>8</td><td>219.1</td><td>2.73</td><td>4.03</td><td>5.40</td><td>8.01</td><td>10.65</td><td>13.33</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-6 mb-4">
                    <h4 class="text-center mb-3" style="color: #db7227;">Schedule 5CWT</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>OD (mm)</th>
                                    <th>WT (mm)</th>
                                    <th>Weight (kg/m)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>0.30</td><td>0.05</td><td>0.00028</td></tr>
                                <tr class="t-row"><td>0.50</td><td>0.05</td><td>0.00045</td></tr>
                                <tr class="t-row"><td>0.80</td><td>0.08</td><td>0.00080</td></tr>
                                <tr class="t-row"><td>1.00</td><td>0.10</td><td>0.00140</td></tr>
                                <tr class="t-row"><td>1.50</td><td>0.12</td><td>0.00250</td></tr>
                                <tr class="t-row"><td>2.00</td><td>0.15</td><td>0.00370</td></tr>
                                <tr class="t-row"><td>2.50</td><td>0.20</td><td>0.00620</td></tr>
                                <tr class="t-row"><td>3.00</td><td>0.25</td><td>0.00970</td></tr>
                                <tr class="t-row"><td>3.50</td><td>0.30</td><td>0.01380</td></tr>
                                <tr class="t-row"><td>4.00</td><td>0.35</td><td>0.01890</td></tr>
                                <tr class="t-row"><td>5.00</td><td>0.40</td><td>0.02700</td></tr>
                                <tr class="t-row"><td>6.00</td><td>0.50</td><td>0.04150</td></tr>
                                <tr class="t-row"><td>8.00</td><td>0.50</td><td>0.05500</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <h4 class="text-center mb-3" style="color: #db7227;">Schedule 10CWT</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>OD (mm)</th>
                                    <th>WT (mm)</th>
                                    <th>Weight (kg/m)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>0.30</td><td>0.06</td><td>0.00033</td></tr>
                                <tr class="t-row"><td>0.50</td><td>0.08</td><td>0.00055</td></tr>
                                <tr class="t-row"><td>0.80</td><td>0.10</td><td>0.00095</td></tr>
                                <tr class="t-row"><td>1.00</td><td>0.12</td><td>0.00160</td></tr>
                                <tr class="t-row"><td>1.50</td><td>0.15</td><td>0.00290</td></tr>
                                <tr class="t-row"><td>2.00</td><td>0.20</td><td>0.00480</td></tr>
                                <tr class="t-row"><td>2.50</td><td>0.25</td><td>0.00750</td></tr>
                                <tr class="t-row"><td>3.00</td><td>0.30</td><td>0.01100</td></tr>
                                <tr class="t-row"><td>3.50</td><td>0.35</td><td>0.01520</td></tr>
                                <tr class="t-row"><td>4.00</td><td>0.40</td><td>0.02040</td></tr>
                                <tr class="t-row"><td>5.00</td><td>0.50</td><td>0.03120</td></tr>
                                <tr class="t-row"><td>6.00</td><td>0.60</td><td>0.04900</td></tr>
                                <tr class="t-row"><td>8.00</td><td>0.60</td><td>0.06280</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-6 mb-4">
                    <h4 class="text-center mb-3" style="color: #db7227;">Schedule 40CWT</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>OD (mm)</th>
                                    <th>WT (mm)</th>
                                    <th>Weight (kg/m)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>0.50</td><td>0.10</td><td>0.00065</td></tr>
                                <tr class="t-row"><td>0.80</td><td>0.12</td><td>0.00110</td></tr>
                                <tr class="t-row"><td>1.00</td><td>0.15</td><td>0.00200</td></tr>
                                <tr class="t-row"><td>1.50</td><td>0.20</td><td>0.00390</td></tr>
                                <tr class="t-row"><td>2.00</td><td>0.25</td><td>0.00610</td></tr>
                                <tr class="t-row"><td>2.50</td><td>0.30</td><td>0.00950</td></tr>
                                <tr class="t-row"><td>3.00</td><td>0.35</td><td>0.01370</td></tr>
                                <tr class="t-row"><td>3.50</td><td>0.40</td><td>0.01880</td></tr>
                                <tr class="t-row"><td>4.00</td><td>0.45</td><td>0.02450</td></tr>
                                <tr class="t-row"><td>5.00</td><td>0.50</td><td>0.03340</td></tr>
                                <tr class="t-row"><td>6.00</td><td>0.60</td><td>0.05350</td></tr>
                                <tr class="t-row"><td>8.00</td><td>0.70</td><td>0.07900</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <h4 class="text-center mb-3" style="color: #db7227;">Schedule 80CWT</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>OD (mm)</th>
                                    <th>WT (mm)</th>
                                    <th>Weight (kg/m)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>0.50</td><td>0.12</td><td>0.00075</td></tr>
                                <tr class="t-row"><td>0.80</td><td>0.15</td><td>0.00130</td></tr>
                                <tr class="t-row"><td>1.00</td><td>0.20</td><td>0.00240</td></tr>
                                <tr class="t-row"><td>1.50</td><td>0.25</td><td>0.00460</td></tr>
                                <tr class="t-row"><td>2.00</td><td>0.30</td><td>0.00730</td></tr>
                                <tr class="t-row"><td>2.50</td><td>0.35</td><td>0.01120</td></tr>
                                <tr class="t-row"><td>3.00</td><td>0.40</td><td>0.01550</td></tr>
                                <tr class="t-row"><td>3.50</td><td>0.50</td><td>0.02150</td></tr>
                                <tr class="t-row"><td>4.00</td><td>0.60</td><td>0.03010</td></tr>
                                <tr class="t-row"><td>5.00</td><td>0.70</td><td>0.04260</td></tr>
                                <tr class="t-row"><td>6.00</td><td>0.80</td><td>0.06100</td></tr>
                                <tr class="t-row"><td>8.00</td><td>1.00</td><td>0.09000</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-6 mb-4">
                    <h4 class="text-center mb-3" style="color: #db7227;">Schedule 160CWT</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>OD (mm)</th>
                                    <th>WT (mm)</th>
                                    <th>Weight (kg/m)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>0.80</td><td>0.20</td><td>0.00165</td></tr>
                                <tr class="t-row"><td>1.00</td><td>0.25</td><td>0.00280</td></tr>
                                <tr class="t-row"><td>1.50</td><td>0.30</td><td>0.00510</td></tr>
                                <tr class="t-row"><td>2.00</td><td>0.35</td><td>0.00820</td></tr>
                                <tr class="t-row"><td>2.50</td><td>0.40</td><td>0.01250</td></tr>
                                <tr class="t-row"><td>3.00</td><td>0.50</td><td>0.01900</td></tr>
                                <tr class="t-row"><td>3.50</td><td>0.60</td><td>0.02600</td></tr>
                                <tr class="t-row"><td>4.00</td><td>0.70</td><td>0.03650</td></tr>
                                <tr class="t-row"><td>5.00</td><td>0.80</td><td>0.05040</td></tr>
                                <tr class="t-row"><td>6.00</td><td>0.90</td><td>0.07180</td></tr>
                                <tr class="t-row"><td>8.00</td><td>1.20</td><td>0.12200</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <h4 class="text-center mb-3" style="color: #db7227;">Schedule XXCWT</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>OD (mm)</th>
                                    <th>WT (mm)</th>
                                    <th>Weight (kg/m)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>0.80</td><td>0.25</td><td>0.00210</td></tr>
                                <tr class="t-row"><td>1.00</td><td>0.30</td><td>0.00350</td></tr>
                                <tr class="t-row"><td>1.50</td><td>0.40</td><td>0.00670</td></tr>
                                <tr class="t-row"><td>2.00</td><td>0.50</td><td>0.01080</td></tr>
                                <tr class="t-row"><td>2.50</td><td>0.60</td><td>0.01650</td></tr>
                                <tr class="t-row"><td>3.00</td><td>0.70</td><td>0.02350</td></tr>
                                <tr class="t-row"><td>3.50</td><td>0.80</td><td>0.03200</td></tr>
                                <tr class="t-row"><td>4.00</td><td>1.00</td><td>0.04900</td></tr>
                                <tr class="t-row"><td>5.00</td><td>1.20</td><td>0.07200</td></tr>
                                <tr class="t-row"><td>6.00</td><td>1.50</td><td>0.11200</td></tr>
                                <tr class="t-row"><td>8.00</td><td>2.00</td><td>0.18000</td></tr>
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
                <h2>4. Grades Available</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Stainless Steel Grades</h5>
                        <p>304, 304L, 316, 316L, 321, 310 – for medical, food-grade, and precision applications.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Nickel Alloys</h5>
                        <p>Inconel 600, 625, 718 – for high-temperature & corrosive environments.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-water"></i></div>
                        <h5>Monel & Titanium Grades</h5>
                        <p>Monel 400, K500; Titanium Gr. 1, 2, 5 – for aerospace, marine, and medical devices.</p>
                    </div>
                </div>
                
                <div class="col-sm-6 col-lg-6">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-snow"></i></div>
                        <h5>Duplex & Copper Alloys</h5>
                        <p>Duplex 2205, S32750; Cu-Ni 70/30, 90/10 – for offshore, refrigeration, and marine use.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="applications" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>5. Applications</h2>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-capsule-pill"></i></div>
                        <h5>Medical & Pharmaceutical</h5>
                        <p>✔ Hypodermic needles<br>✔ Catheters & fluid delivery<br>✔ Chromatography equipment</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-speedometer2"></i></div>
                        <h5>Instrumentation</h5>
                        <p>✔ Pressure gauges<br>✔ Thermocouples<br>✔ Hydraulic & pneumatic lines</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-snow2"></i></div>
                        <h5>HVAC & Refrigeration</h5>
                        <p>✔ Refrigerant flow control<br>✔ Expansion lines</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-flask"></i></div>
                        <h5>Chemical Processing</h5>
                        <p>✔ Microfluidics<br>✔ Sampling & dosing systems</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-airplane-fill"></i></div>
                        <h5>Aerospace & Automotive</h5>
                        <p>✔ Fuel lines & brake systems<br>✔ Lightweight fluid transport</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="buying-guide" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Buying Guide & Material Selection</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Application / Media</th>
                                    <th>Recommended Material Grade</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Medical Use (Hypodermic Needles, Catheters)</td>
                                    <td>Stainless Steel (316L) / Titanium</td>
                                </tr>
                                <tr class="t-row">
                                    <td>High Temperature & Corrosive Use</td>
                                    <td>Inconel / Nickel Alloys</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Marine & Sea Water Use</td>
                                    <td>Monel / Cu-Ni (Copper-Nickel)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Precision Instrumentation</td>
                                    <td>SS 316L / SS 304</td>
                                </tr>
                                <tr class="t-row">
                                    <td>HVAC & Refrigeration</td>
                                    <td>Cu-Ni / SS 304</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="text-center mt-3">
                        📌 <strong>Choosing the right material</strong> ensures longer life and better performance. Consider OD, wall thickness, pressure limits, and surface finish before selecting.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="manufacturing" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Manufacturing Process</h2>
            </div>

            <div class="row mt-4 justify-content-center">
                <div class="col-md-8 text-center">
                    <p class="fs-6" style="text-align: center;"><strong>Capillary Tubes require highly controlled manufacturing procedures to achieve the extremely tight tolerances demanded by modern industries:</strong></p>
                    <p>1️⃣ Cold Drawing for Accurate Dimensions</p>
                    <p>2️⃣ Bright Annealing for Surface Finish</p>
                    <p>3️⃣ Precision Polishing for Smooth Internal Bore</p>
                    <p>4️⃣ Straightening & Precision Cutting</p>
                    <p>5️⃣ Final Inspection & Testing</p>
                    <p>6️⃣ Export Grade Packaging</p>
                </div>
            </div>
        </div>
    </section>

    <section id="testing" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="row mt-4 justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="application-card h-100">
                        <div class="application-icon"><i class="bi bi-tools"></i></div>
                        <h5>Testing & Quality Control</h5>
                        <p><strong>Inspections:</strong> Dimensional inspection & surface finish testing</p>
                        <p><strong>Integrity:</strong> Hydrostatic testing & Eddy current testing</p>
                        <p><strong>Material:</strong> PMI (Positive Material Identification)</p>
                        <p><strong>Certification:</strong> Supplied with EN 10204 3.1 certification.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-5">
                    <div class="application-card h-100">
                        <div class="application-icon"><i class="bi bi-box-seam"></i></div>
                        <h5>Export & Supply Capability</h5>
                        <p><strong>Supply Regions:</strong> UAE, Saudi Arabia, Qatar, Oman, Kuwait, Europe & SE Asia</p>
                        <p><strong>Export Packaging:</strong> Seaworthy wooden crates, customized coils, ISPM-15 packaging</p>
                        <p><strong>Documentation:</strong> Commercial Invoice & Packing List, Certificate of Origin, Mill Test Certificates</p>
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
                        <div class="why-banner-icon"><i class="bi bi-rulers"></i></div>
                        <h5>Precision manufacturing expertise</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block h-100">
                        <div class="why-banner-icon"><i class="bi bi-collection-fill"></i></div>
                        <h5>Wide range of alloys & custom sizes</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block h-100">
                        <div class="why-banner-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Strict quality control standards</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block h-100">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Export to GCC, Europe & global markets</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block h-100">
                        <div class="why-banner-icon"><i class="bi bi-headset"></i></div>
                        <h5>Technical support for critical applications</h5>
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
                                <h4>What are capillary tubes used for?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Capillary tubes are used in applications requiring precise fluid control such as medical devices (hypodermic needles, catheters), instrumentation (pressure gauges, thermocouples), HVAC refrigerant control, chromatography, and aerospace fuel lines.</p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What is the size range available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>OD ranges from 0.3 mm to 8 mm with ultra-thin wall thickness options starting from 0.05 mm. We also offer custom OD and wall thickness combinations upon request.</p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Which materials are available for capillary tubes?</h4>
                            </div>
                            <div class="accord-content">
                                <p>We supply capillary tubes in stainless steel (304, 316, 316L, 321), nickel alloys (Inconel 600, 625, 718), Monel (400, K500), titanium (Grade 1, 2, 5), duplex/super duplex (2205, S32750), and copper alloys (Cu-Ni 70/30, 90/10).</p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Do you provide custom sizes?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Yes, we offer custom OD, wall thickness, and length combinations based on your application needs. Available forms include straight lengths, coiled tubing, and precision cut pieces.</p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Do you export capillary tubes to UAE and Saudi Arabia?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Yes, we export capillary tubes to UAE, Saudi Arabia, Qatar, Oman, and Kuwait along with Europe and Southeast Asia. All supplies come with EN 10204 3.1 Mill Test Certificates and export-grade packaging.</p>
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
                <h2>Request a Quote for Capillary Tubes</h2>
                <p>
                    Looking for high-precision capillary tubes for critical applications or export projects?<br>
                    📞 Call: +91 97695 84950<br>
                    🌐 <strong>Moksh Tubes & Fittings LLP</strong> - Precision piping solutions you can
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
            "name": "Capillary Tubes",
            "description": "Precision capillary tubes supplier and exporter to UAE, Saudi Arabia, Qatar and Oman for medical, HVAC and industrial applications.",
            "brand": {
                "@type": "Brand",
                "name": "Moksh Tubes & Fittings LLP"
            },
            "manufacturer": {
                "@type": "Organization",
                "name": "Moksh Tubes & Fittings LLP"
            },
            "url": "https://www.mokshtubes.com/products/pipes-tubes/capillaries",
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
                "name": "What are capillary tubes used for?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "They are used in applications requiring precise fluid control such as medical devices, instrumentation, HVAC, chromatography, and aerospace fuel lines."
                }
                },
                {
                "@type": "Question",
                "name": "What is the size range available?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "OD ranges from 0.3 mm to 8 mm with ultra-thin wall thickness options starting from 0.05 mm."
                }
                },
                {
                "@type": "Question",
                "name": "Which materials are available for capillary tubes?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Stainless steel, nickel alloys (Inconel), Monel, titanium, duplex/super duplex, and copper alloys (Cu-Ni)."
                }
                },
                {
                "@type": "Question",
                "name": "Do you provide custom sizes?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we offer custom OD, wall thickness, and length combinations in straight, coiled, or precision cut forms."
                }
                },
                {
                "@type": "Question",
                "name": "Do you export capillary tubes to UAE and Saudi Arabia?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we export to UAE, Saudi Arabia, Qatar, Oman, and Kuwait with EN 10204 3.1 certification and export-grade packaging."
                }
                }
            ]
        }]
        @endverbatim
    </script>
@endsection
