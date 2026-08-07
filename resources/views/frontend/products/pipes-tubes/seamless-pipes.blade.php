@extends('layouts.master')

@section('title', 'Seamless Pipes Manufacturer, Supplier & Exporter in India | Moksh Tubes')
@section('meta_description', 'Buy premium Seamless Pipes from Moksh Tubes & Fittings LLP. Manufacturer, supplier & exporter of stainless steel, duplex, nickel alloy & carbon steel seamless pipes.')
@section('meta_keywords', 'Seamless Pipes Manufacturer in India, Stainless Steel Seamless Pipes Supplier, Industrial Seamless Pipes Exporter, ASTM ASME Seamless Pipes, Carbon Steel Seamless Pipes, Duplex Stainless Steel Seamless Pipes, Nickel Alloy Seamless Pipes')
@section('canonical', 'https://mokshtubes.com/seamless-pipes/')
@section('og_image', asset('assets/images/product/seamless-pipes.webp'))
@section('og_type', 'product')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area"
        style="background-image: url('{{ asset('assets/images/product/seamless-pipes.webp') }}');">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1 class="page-title">Seamless Pipes Manufacturer, Supplier & Exporter in India</h1>
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px; max-width: 900px;">
                        Seamless Pipes are engineered for applications requiring exceptional strength, pressure resistance,
                        and reliability. Manufactured without any welded joints, seamless pipes provide a uniform structure,
                        superior mechanical properties, and excellent performance in high-pressure, high-temperature, and
                        corrosive environments. At Moksh Tubes & Fittings LLP, we supply premium-quality Seamless Pipes in
                        Stainless Steel, Duplex & Super Duplex Steel, Nickel Alloys, Titanium, Copper Alloys, Carbon Steel,
                        Alloy Steel, and Special Alloys, fully compliant with ASTM, ASME, API, DIN, and EN standards.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Navigation (Standardized sticky tabs)-->
    <div class="sticky-top bg-white border-bottom material-tabs w-100 shadow-sm">
        <div class="container text-center py-2">
            <a href="#overview">Overview</a> |
            <a href="#specifications">Specifications</a> |
            <a href="#weight-chart">Weight Chart</a> |
            <a href="#size-charts">Size Charts</a> |
            <a href="#grades">Grades</a> |
            <a href="#applications">Applications</a> |
            <a href="#buying-guide">Advantages</a> |
            <a href="#mechanical-properties">Mechanical Properties</a> |
            <a href="#why-choose-us">Why Choose Us</a> |
            <a href="#faq">FAQ</a>
        </div>
    </div>

    <!-- 1. Introduction (Overview) -->
    <section id="overview" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">SEAMLESS PIPES</h2>
            </div>

            <div class="row align-items-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/product/seamless-pipes.webp') }}"
                        alt="Seamless Pipes Manufacturer in India" class="img-fluid rounded shadow-sm" width="550"
                        height="350" loading="lazy">
                </div>
                <div class="col-md-6">
                    <p class="fs-6 mb-3 text-justify">
                        <strong class="text-black">Seamless Pipes</strong> are high-performance tubular products
                        manufactured from solid billets without any welding seam. The seamless manufacturing process
                        produces pipes with superior structural integrity, making them the preferred choice for critical
                        applications involving high pressure, elevated temperatures, corrosive media, and demanding
                        operating conditions.
                    </p>
                    <p class="fs-6 mb-3 text-justify">
                        Unlike welded pipes, seamless pipes eliminate the risk associated with weld failures, providing
                        improved strength, enhanced pressure handling capability, and better resistance to fatigue. Their
                        uniform wall thickness and smooth internal surface contribute to efficient fluid flow and long
                        service life.
                    </p>
                    <p class="fs-6 mb-3 text-justify">
                        At <a href="{{ route('index') }}">Moksh Tubes & Fittings LLP</a>, we are a trusted manufacturer,
                        supplier, stockist, and exporter of Seamless Pipes in India. We offer an extensive range of seamless
                        pipes in stainless steel, nickel alloys, duplex stainless steel, titanium, copper alloys, alloy
                        steel, carbon steel, aluminum alloys, zirconium, tantalum, and other specialty metals. Our products
                        are widely supplied to refineries, petrochemical plants, power projects, offshore platforms, EPC
                        contractors, and industrial processing facilities across India and GCC countries including UAE,
                        Saudi Arabia, Qatar, Oman, Kuwait, and Bahrain.
                    </p>
                    <p class="fs-6 text-justify">
                        Manufactured to international standards and subjected to strict quality control procedures, our
                        seamless pipes deliver outstanding performance in industries where reliability, safety, and
                        durability are essential.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Datasheet Download -->

    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Inconel 600 Datasheet</h3>
            <p class="mb-3">
                Get the complete Inconel 600 datasheet with chemical composition,
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



    <!-- 2. Specifications -->
    <section id="specifications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">2. Specifications of Seamless Pipes</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle text-start">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Category</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td><strong>Material</strong></td>
                                    <td>Stainless Steel, Duplex & Super Duplex Steel, Nickel Alloys, Inconel, Monel,
                                        Titanium, Zirconium, Tantalum, Aluminium, Copper Alloys, Carbon Steel, Alloy Steel
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td><strong>Grades</strong></td>
                                    <td>Available as per ASTM, ASME, API, DIN & EN Standards</td>
                                </tr>
                                <tr class="t-row">
                                    <td><strong>Outer Diameter (OD)</strong></td>
                                    <td>3 mm to 610 mm (¼” to 24” NB)</td>
                                </tr>
                                <tr class="t-row">
                                    <td><strong>Wall Thickness</strong></td>
                                    <td>Available in all standard and custom schedules</td>
                                </tr>
                                <tr class="t-row">
                                    <td><strong>Lengths</strong></td>
                                    <td>Up to 12 meters or custom lengths</td>
                                </tr>
                                <tr class="t-row">
                                    <td><strong>Surface Finish</strong></td>
                                    <td>Mill Finish, Pickled & Passivated, Mechanical Polished, Electro Polished, Matt
                                        Finish</td>
                                </tr>
                                <tr class="t-row">
                                    <td><strong>Form</strong></td>
                                    <td>Round, Square, Rectangular, Hollow Section, Hydraulic, Oval</td>
                                </tr>
                                <tr class="t-row">
                                    <td><strong>Manufacturing Process</strong></td>
                                    <td>Hot Finished, Cold Drawn, Cold Rolled</td>
                                </tr>
                                <tr class="t-row">
                                    <td><strong>Standards</strong></td>
                                    <td>ASTM, ASME, API, DIN, EN</td>
                                </tr>
                                <tr class="t-row">
                                    <td><strong>Applications</strong></td>
                                    <td>Oil & Gas, Petrochemical, Power, Chemical, Marine, Construction, Food Processing
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Weight Chart -->
    <section id="weight-chart" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">3. Seamless Pipes Weight Chart</h2>
            </div>
            <p class="text-center mb-4">Weight and size charts for seamless pipes can be provided upon request, customized
                to the required schedules including Schedule 5S, 10S, 40S, 80S, 160S, and XXS.</p>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr class="t-row">
                            <th>NB (mm)</th>
                            <th>Size (inches)</th>
                            <th>OD (mm)</th>
                            <th>Schedule 5S (Kg/m)</th>
                            <th>Schedule 10S (Kg/m)</th>
                            <th>Schedule 40S (Kg/m)</th>
                            <th>Schedule 80S (Kg/m)</th>
                            <th>Schedule 160S (Kg/m)</th>
                            <th>Schedule XXS (Kg/m)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row">
                            <td>3</td>
                            <td>1/8</td>
                            <td>10.3</td>
                            <td>1.24 / 0.276</td>
                            <td>1.24 / 0.28</td>
                            <td>1.73 / 0.37</td>
                            <td>2.41 / 0.47</td>
                            <td>–</td>
                            <td>–</td>
                        </tr>
                        <tr class="t-row">
                            <td>6</td>
                            <td>1/4</td>
                            <td>13.7</td>
                            <td>1.24 / 0.39</td>
                            <td>1.65 / 0.49</td>
                            <td>2.24 / 0.631</td>
                            <td>3.02 / 0.80</td>
                            <td>–</td>
                            <td>–</td>
                        </tr>
                        <tr class="t-row">
                            <td>10</td>
                            <td>3/8</td>
                            <td>17.1</td>
                            <td>1.24 / 0.49</td>
                            <td>1.65 / 0.63</td>
                            <td>2.31 / 0.845</td>
                            <td>3.20 / 1.10</td>
                            <td>–</td>
                            <td>–</td>
                        </tr>
                        <tr class="t-row">
                            <td>15</td>
                            <td>1/2</td>
                            <td>21.3</td>
                            <td>1.65 / 0.80</td>
                            <td>2.11 / 1.00</td>
                            <td>2.77 / 1.27</td>
                            <td>3.75 / 1.62</td>
                            <td>4.75 / 1.94</td>
                            <td>7.47 / 2.55</td>
                        </tr>
                        <tr class="t-row">
                            <td>20</td>
                            <td>3/4</td>
                            <td>26.7</td>
                            <td>1.65 / 1.03</td>
                            <td>2.11 / 1.28</td>
                            <td>2.87 / 1.68</td>
                            <td>3.91 / 2.20</td>
                            <td>5.54 / 2.89</td>
                            <td>7.82 / 3.63</td>
                        </tr>
                        <tr class="t-row">
                            <td>25</td>
                            <td>1</td>
                            <td>33.4</td>
                            <td>1.65 / 1.30</td>
                            <td>2.77 / 2.09</td>
                            <td>3.38 / 2.50</td>
                            <td>4.55 / 3.24</td>
                            <td>6.35 / 4.24</td>
                            <td>9.09 / 5.45</td>
                        </tr>
                        <tr class="t-row">
                            <td>32</td>
                            <td>1 1/4</td>
                            <td>42.2</td>
                            <td>1.65 / 1.65</td>
                            <td>2.70 / 2.70</td>
                            <td>3.56 / 3.38</td>
                            <td>4.85 / 4.47</td>
                            <td>6.35 / 5.61</td>
                            <td>9.70 / 7.77</td>
                        </tr>
                        <tr class="t-row">
                            <td>40</td>
                            <td>1 1/2</td>
                            <td>48.3</td>
                            <td>1.65 / 1.91</td>
                            <td>2.77 / 3.11</td>
                            <td>3.68 / 4.05</td>
                            <td>5.08 / 5.41</td>
                            <td>7.14 / 7.25</td>
                            <td>10.16 / 9.54</td>
                        </tr>
                        <tr class="t-row">
                            <td>50</td>
                            <td>2</td>
                            <td>60.3</td>
                            <td>1.65 / 2.40</td>
                            <td>2.77 / 3.93</td>
                            <td>3.91 / 5.44</td>
                            <td>5.54 / 7.48</td>
                            <td>8.74 / 11.1</td>
                            <td>11.07 / 13.44</td>
                        </tr>
                        <tr class="t-row">
                            <td>65</td>
                            <td>2 1/2</td>
                            <td>73.0</td>
                            <td>2.11 / 3.69</td>
                            <td>3.05 / 5.26</td>
                            <td>5.16 / 8.63</td>
                            <td>7.01 / 11.4</td>
                            <td>9.53 / 14.9</td>
                            <td>14.2 / 20.39</td>
                        </tr>
                        <tr class="t-row">
                            <td>80</td>
                            <td>3</td>
                            <td>88.9</td>
                            <td>2.11 / 4.51</td>
                            <td>3.05 / 6.45</td>
                            <td>5.49 / 11.30</td>
                            <td>7.62 / 15.2</td>
                            <td>11.1 / 21.3</td>
                            <td>15.24 / 27.65</td>
                        </tr>
                        <tr class="t-row">
                            <td>100</td>
                            <td>4</td>
                            <td>114.3</td>
                            <td>2.11 / 5.84</td>
                            <td>3.05 / 8.36</td>
                            <td>6.02 / 16.07</td>
                            <td>8.56 / 22.3</td>
                            <td>13.49 / 33.54</td>
                            <td>17.12 / 41.03</td>
                        </tr>
                        <tr class="t-row">
                            <td>125</td>
                            <td>5</td>
                            <td>141.3</td>
                            <td>2.77 / 9.47</td>
                            <td>3.40 / 11.57</td>
                            <td>6.55 / 21.8</td>
                            <td>9.53 / 31.97</td>
                            <td>15.88 / 49.11</td>
                            <td>19.05 / 57.43</td>
                        </tr>
                        <tr class="t-row">
                            <td>150</td>
                            <td>6</td>
                            <td>168.3</td>
                            <td>2.77 / 11.32</td>
                            <td>3.40 / 13.84</td>
                            <td>7.11 / 28.3</td>
                            <td>10.97 / 42.7</td>
                            <td>18.2 / 67.56</td>
                            <td>21.95 / 79.22</td>
                        </tr>
                        <tr class="t-row">
                            <td>200</td>
                            <td>8</td>
                            <td>219.1</td>
                            <td>2.77 / 14.79</td>
                            <td>3.76 / 19.96</td>
                            <td>8.18 / 42.6</td>
                            <td>12.7 / 64.6</td>
                            <td>23.0 / 111.2</td>
                            <td>22.23 / 107.8</td>
                        </tr>
                        <tr class="t-row">
                            <td>250</td>
                            <td>10</td>
                            <td>273.1</td>
                            <td>3.40 / 22.63</td>
                            <td>4.19 / 27.78</td>
                            <td>9.27 / 60.5</td>
                            <td>12.7 / 96.0</td>
                            <td>28.6 / 172.4</td>
                            <td>25.40 / 155.15</td>
                        </tr>
                        <tr class="t-row">
                            <td>300</td>
                            <td>12</td>
                            <td>323.9</td>
                            <td>3.96 / 31.25</td>
                            <td>4.57 / 36.00</td>
                            <td>9.52 / 73.88</td>
                            <td>12.7 / 132.0</td>
                            <td>33.32 / 238.76</td>
                            <td>25.40 / 186.97</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- 4. Size Charts Detailed -->
    <section id="size-charts" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">4. Detailed Size Charts</h2>
            </div>

            <div class="row">
                <div class="col-md-6 mb-4">
                    <h4 class="text-center mb-3" style="color: #db7227;">Schedule 5S</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle text-center">
                            <thead class="table-dark">
                                <tr class="t-row">
                                    <th>NPS</th>
                                    <th>NB (mm)</th>
                                    <th>OD (mm)</th>
                                    <th>Wall (mm)</th>
                                    <th>ID (mm)</th>
                                    <th>Weight (kg/m)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td>1/8</td>
                                    <td>3</td>
                                    <td>10.3</td>
                                    <td>1.24</td>
                                    <td>7.8</td>
                                    <td>0.276</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1/4</td>
                                    <td>6</td>
                                    <td>13.7</td>
                                    <td>1.24</td>
                                    <td>11.2</td>
                                    <td>0.390</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3/8</td>
                                    <td>10</td>
                                    <td>17.1</td>
                                    <td>1.24</td>
                                    <td>14.6</td>
                                    <td>0.490</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1/2</td>
                                    <td>15</td>
                                    <td>21.3</td>
                                    <td>1.65</td>
                                    <td>18.0</td>
                                    <td>0.840</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3/4</td>
                                    <td>20</td>
                                    <td>26.7</td>
                                    <td>1.65</td>
                                    <td>23.4</td>
                                    <td>1.030</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1</td>
                                    <td>25</td>
                                    <td>33.4</td>
                                    <td>1.65</td>
                                    <td>30.1</td>
                                    <td>1.300</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1¼</td>
                                    <td>32</td>
                                    <td>42.2</td>
                                    <td>1.65</td>
                                    <td>38.9</td>
                                    <td>1.650</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1½</td>
                                    <td>40</td>
                                    <td>48.3</td>
                                    <td>1.65</td>
                                    <td>44.9</td>
                                    <td>1.910</td>
                                </tr>
                                <tr class="t-row">
                                    <td>2</td>
                                    <td>50</td>
                                    <td>60.3</td>
                                    <td>1.65</td>
                                    <td>56.0</td>
                                    <td>2.400</td>
                                </tr>
                                <tr class="t-row">
                                    <td>2½</td>
                                    <td>65</td>
                                    <td>73.0</td>
                                    <td>2.11</td>
                                    <td>68.8</td>
                                    <td>3.690</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3</td>
                                    <td>80</td>
                                    <td>88.9</td>
                                    <td>2.11</td>
                                    <td>84.7</td>
                                    <td>4.510</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3½</td>
                                    <td>90</td>
                                    <td>101.6</td>
                                    <td>2.11</td>
                                    <td>97.4</td>
                                    <td>5.170</td>
                                </tr>
                                <tr class="t-row">
                                    <td>4</td>
                                    <td>100</td>
                                    <td>114.3</td>
                                    <td>2.11</td>
                                    <td>110.1</td>
                                    <td>5.840</td>
                                </tr>
                                <tr class="t-row">
                                    <td>5</td>
                                    <td>125</td>
                                    <td>141.3</td>
                                    <td>2.77</td>
                                    <td>135.8</td>
                                    <td>9.470</td>
                                </tr>
                                <tr class="t-row">
                                    <td>6</td>
                                    <td>150</td>
                                    <td>168.3</td>
                                    <td>2.77</td>
                                    <td>162.8</td>
                                    <td>11.320</td>
                                </tr>
                                <tr class="t-row">
                                    <td>8</td>
                                    <td>200</td>
                                    <td>219.1</td>
                                    <td>2.77</td>
                                    <td>213.6</td>
                                    <td>14.790</td>
                                </tr>
                                <tr class="t-row">
                                    <td>10</td>
                                    <td>250</td>
                                    <td>273.1</td>
                                    <td>3.40</td>
                                    <td>266.3</td>
                                    <td>22.630</td>
                                </tr>
                                <tr class="t-row">
                                    <td>12</td>
                                    <td>300</td>
                                    <td>323.9</td>
                                    <td>3.56</td>
                                    <td>317.0</td>
                                    <td>31.250</td>
                                </tr>
                                <tr class="t-row">
                                    <td>14</td>
                                    <td>350</td>
                                    <td>355.6</td>
                                    <td>3.96</td>
                                    <td>347.7</td>
                                    <td>36.960</td>
                                </tr>
                                <tr class="t-row">
                                    <td>16</td>
                                    <td>400</td>
                                    <td>406.4</td>
                                    <td>4.19</td>
                                    <td>398.0</td>
                                    <td>41.560</td>
                                </tr>
                                <tr class="t-row">
                                    <td>18</td>
                                    <td>450</td>
                                    <td>457.2</td>
                                    <td>4.57</td>
                                    <td>448.1</td>
                                    <td>49.420</td>
                                </tr>
                                <tr class="t-row">
                                    <td>20</td>
                                    <td>500</td>
                                    <td>508.0</td>
                                    <td>5.54</td>
                                    <td>496.9</td>
                                    <td>59.250</td>
                                </tr>
                                <tr class="t-row">
                                    <td>22</td>
                                    <td>550</td>
                                    <td>558.8</td>
                                    <td>5.54</td>
                                    <td>547.7</td>
                                    <td>65.970</td>
                                </tr>
                                <tr class="t-row">
                                    <td>24</td>
                                    <td>600</td>
                                    <td>609.6</td>
                                    <td>5.54</td>
                                    <td>598.5</td>
                                    <td>82.470</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <h4 class="text-center mb-3" style="color: #db7227;">Schedule 10S</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle text-center">
                            <thead class="table-dark">
                                <tr class="t-row">
                                    <th>NPS</th>
                                    <th>NB (mm)</th>
                                    <th>OD (mm)</th>
                                    <th>Wall (mm)</th>
                                    <th>ID (mm)</th>
                                    <th>Weight (kg/m)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td>1/8</td>
                                    <td>3</td>
                                    <td>10.3</td>
                                    <td>1.65</td>
                                    <td>7.0</td>
                                    <td>0.37</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1/4</td>
                                    <td>6</td>
                                    <td>13.7</td>
                                    <td>1.65</td>
                                    <td>10.4</td>
                                    <td>0.52</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3/8</td>
                                    <td>10</td>
                                    <td>17.1</td>
                                    <td>1.65</td>
                                    <td>13.8</td>
                                    <td>0.66</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1/2</td>
                                    <td>15</td>
                                    <td>21.3</td>
                                    <td>1.65</td>
                                    <td>18.0</td>
                                    <td>0.84</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3/4</td>
                                    <td>20</td>
                                    <td>26.7</td>
                                    <td>2.11</td>
                                    <td>22.5</td>
                                    <td>1.33</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1</td>
                                    <td>25</td>
                                    <td>33.4</td>
                                    <td>2.11</td>
                                    <td>29.2</td>
                                    <td>1.70</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1¼</td>
                                    <td>32</td>
                                    <td>42.2</td>
                                    <td>2.11</td>
                                    <td>38.0</td>
                                    <td>2.15</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1½</td>
                                    <td>40</td>
                                    <td>48.3</td>
                                    <td>2.11</td>
                                    <td>44.0</td>
                                    <td>2.51</td>
                                </tr>
                                <tr class="t-row">
                                    <td>2</td>
                                    <td>50</td>
                                    <td>60.3</td>
                                    <td>2.11</td>
                                    <td>56.1</td>
                                    <td>3.16</td>
                                </tr>
                                <tr class="t-row">
                                    <td>2½</td>
                                    <td>65</td>
                                    <td>73.0</td>
                                    <td>2.77</td>
                                    <td>67.5</td>
                                    <td>4.89</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3</td>
                                    <td>80</td>
                                    <td>88.9</td>
                                    <td>2.77</td>
                                    <td>83.4</td>
                                    <td>6.02</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3½</td>
                                    <td>90</td>
                                    <td>101.6</td>
                                    <td>2.77</td>
                                    <td>96.1</td>
                                    <td>6.87</td>
                                </tr>
                                <tr class="t-row">
                                    <td>4</td>
                                    <td>100</td>
                                    <td>114.3</td>
                                    <td>2.77</td>
                                    <td>108.8</td>
                                    <td>7.73</td>
                                </tr>
                                <tr class="t-row">
                                    <td>5</td>
                                    <td>125</td>
                                    <td>141.3</td>
                                    <td>3.40</td>
                                    <td>134.5</td>
                                    <td>11.90</td>
                                </tr>
                                <tr class="t-row">
                                    <td>6</td>
                                    <td>150</td>
                                    <td>168.3</td>
                                    <td>3.40</td>
                                    <td>161.5</td>
                                    <td>14.30</td>
                                </tr>
                                <tr class="t-row">
                                    <td>8</td>
                                    <td>200</td>
                                    <td>219.1</td>
                                    <td>3.40</td>
                                    <td>212.3</td>
                                    <td>18.30</td>
                                </tr>
                                <tr class="t-row">
                                    <td>10</td>
                                    <td>250</td>
                                    <td>273.1</td>
                                    <td>4.78</td>
                                    <td>263.5</td>
                                    <td>29.40</td>
                                </tr>
                                <tr class="t-row">
                                    <td>12</td>
                                    <td>300</td>
                                    <td>323.9</td>
                                    <td>4.78</td>
                                    <td>314.3</td>
                                    <td>40.70</td>
                                </tr>
                                <tr class="t-row">
                                    <td>14</td>
                                    <td>350</td>
                                    <td>355.6</td>
                                    <td>5.54</td>
                                    <td>344.5</td>
                                    <td>47.50</td>
                                </tr>
                                <tr class="t-row">
                                    <td>16</td>
                                    <td>400</td>
                                    <td>406.4</td>
                                    <td>5.54</td>
                                    <td>395.3</td>
                                    <td>53.40</td>
                                </tr>
                                <tr class="t-row">
                                    <td>18</td>
                                    <td>450</td>
                                    <td>457.2</td>
                                    <td>5.54</td>
                                    <td>446.1</td>
                                    <td>63.50</td>
                                </tr>
                                <tr class="t-row">
                                    <td>20</td>
                                    <td>500</td>
                                    <td>508.0</td>
                                    <td>7.11</td>
                                    <td>493.8</td>
                                    <td>78.70</td>
                                </tr>
                                <tr class="t-row">
                                    <td>22</td>
                                    <td>550</td>
                                    <td>558.8</td>
                                    <td>7.11</td>
                                    <td>544.6</td>
                                    <td>87.70</td>
                                </tr>
                                <tr class="t-row">
                                    <td>24</td>
                                    <td>600</td>
                                    <td>609.6</td>
                                    <td>7.11</td>
                                    <td>595.4</td>
                                    <td>109.40</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <h4 class="text-center mb-3" style="color: #db7227;">Schedule 40S</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle text-center">
                            <thead class="table-dark">
                                <tr class="t-row">
                                    <th>NPS</th>
                                    <th>NB (mm)</th>
                                    <th>OD (mm)</th>
                                    <th>Wall (mm)</th>
                                    <th>ID (mm)</th>
                                    <th>Weight (kg/m)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td>1/8</td>
                                    <td>3</td>
                                    <td>10.3</td>
                                    <td>2.77</td>
                                    <td>4.76</td>
                                    <td>0.72</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1/4</td>
                                    <td>6</td>
                                    <td>13.7</td>
                                    <td>2.77</td>
                                    <td>8.16</td>
                                    <td>1.06</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3/8</td>
                                    <td>10</td>
                                    <td>17.1</td>
                                    <td>2.77</td>
                                    <td>11.56</td>
                                    <td>1.39</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1/2</td>
                                    <td>15</td>
                                    <td>21.3</td>
                                    <td>3.38</td>
                                    <td>14.54</td>
                                    <td>1.69</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3/4</td>
                                    <td>20</td>
                                    <td>26.7</td>
                                    <td>3.38</td>
                                    <td>20.00</td>
                                    <td>2.45</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1</td>
                                    <td>25</td>
                                    <td>33.4</td>
                                    <td>3.38</td>
                                    <td>26.64</td>
                                    <td>3.35</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1¼</td>
                                    <td>32</td>
                                    <td>42.2</td>
                                    <td>3.56</td>
                                    <td>35.08</td>
                                    <td>4.54</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1½</td>
                                    <td>40</td>
                                    <td>48.3</td>
                                    <td>3.68</td>
                                    <td>40.94</td>
                                    <td>5.35</td>
                                </tr>
                                <tr class="t-row">
                                    <td>2</td>
                                    <td>50</td>
                                    <td>60.3</td>
                                    <td>3.68</td>
                                    <td>52.94</td>
                                    <td>7.41</td>
                                </tr>
                                <tr class="t-row">
                                    <td>2½</td>
                                    <td>65</td>
                                    <td>73.0</td>
                                    <td>3.91</td>
                                    <td>65.18</td>
                                    <td>9.84</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3</td>
                                    <td>80</td>
                                    <td>88.9</td>
                                    <td>4.55</td>
                                    <td>79.80</td>
                                    <td>13.10</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3½</td>
                                    <td>90</td>
                                    <td>101.6</td>
                                    <td>4.55</td>
                                    <td>92.50</td>
                                    <td>15.20</td>
                                </tr>
                                <tr class="t-row">
                                    <td>4</td>
                                    <td>100</td>
                                    <td>114.3</td>
                                    <td>6.02</td>
                                    <td>102.30</td>
                                    <td>19.10</td>
                                </tr>
                                <tr class="t-row">
                                    <td>5</td>
                                    <td>125</td>
                                    <td>141.3</td>
                                    <td>6.02</td>
                                    <td>129.30</td>
                                    <td>25.50</td>
                                </tr>
                                <tr class="t-row">
                                    <td>6</td>
                                    <td>150</td>
                                    <td>168.3</td>
                                    <td>6.55</td>
                                    <td>155.20</td>
                                    <td>31.70</td>
                                </tr>
                                <tr class="t-row">
                                    <td>8</td>
                                    <td>200</td>
                                    <td>219.1</td>
                                    <td>8.18</td>
                                    <td>202.70</td>
                                    <td>46.40</td>
                                </tr>
                                <tr class="t-row">
                                    <td>10</td>
                                    <td>250</td>
                                    <td>273.1</td>
                                    <td>9.27</td>
                                    <td>254.60</td>
                                    <td>65.80</td>
                                </tr>
                                <tr class="t-row">
                                    <td>12</td>
                                    <td>300</td>
                                    <td>323.9</td>
                                    <td>9.53</td>
                                    <td>305.00</td>
                                    <td>82.60</td>
                                </tr>
                                <tr class="t-row">
                                    <td>14</td>
                                    <td>350</td>
                                    <td>355.6</td>
                                    <td>10.97</td>
                                    <td>333.70</td>
                                    <td>96.80</td>
                                </tr>
                                <tr class="t-row">
                                    <td>16</td>
                                    <td>400</td>
                                    <td>406.4</td>
                                    <td>12.70</td>
                                    <td>381.00</td>
                                    <td>120.30</td>
                                </tr>
                                <tr class="t-row">
                                    <td>18</td>
                                    <td>450</td>
                                    <td>457.2</td>
                                    <td>12.70</td>
                                    <td>434.80</td>
                                    <td>135.60</td>
                                </tr>
                                <tr class="t-row">
                                    <td>20</td>
                                    <td>500</td>
                                    <td>508.0</td>
                                    <td>15.09</td>
                                    <td>477.80</td>
                                    <td>171.70</td>
                                </tr>
                                <tr class="t-row">
                                    <td>22</td>
                                    <td>550</td>
                                    <td>558.8</td>
                                    <td>15.09</td>
                                    <td>528.20</td>
                                    <td>191.60</td>
                                </tr>
                                <tr class="t-row">
                                    <td>24</td>
                                    <td>600</td>
                                    <td>609.6</td>
                                    <td>15.09</td>
                                    <td>579.40</td>
                                    <td>213.20</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <h4 class="text-center mb-3" style="color: #db7227;">Schedule 80S</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle text-center">
                            <thead class="table-dark">
                                <tr class="t-row">
                                    <th>NPS</th>
                                    <th>NB (mm)</th>
                                    <th>OD (mm)</th>
                                    <th>Wall (mm)</th>
                                    <th>ID (mm)</th>
                                    <th>Weight (kg/m)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td>1/8</td>
                                    <td>3</td>
                                    <td>10.3</td>
                                    <td>1.73</td>
                                    <td>6.84</td>
                                    <td>0.39</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1/4</td>
                                    <td>6</td>
                                    <td>13.7</td>
                                    <td>2.24</td>
                                    <td>9.22</td>
                                    <td>0.64</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3/8</td>
                                    <td>10</td>
                                    <td>17.1</td>
                                    <td>2.31</td>
                                    <td>12.48</td>
                                    <td>0.84</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1/2</td>
                                    <td>15</td>
                                    <td>21.3</td>
                                    <td>3.73</td>
                                    <td>13.84</td>
                                    <td>1.43</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3/4</td>
                                    <td>20</td>
                                    <td>26.7</td>
                                    <td>3.91</td>
                                    <td>18.88</td>
                                    <td>2.21</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1</td>
                                    <td>25</td>
                                    <td>33.4</td>
                                    <td>4.55</td>
                                    <td>24.30</td>
                                    <td>3.39</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1¼</td>
                                    <td>32</td>
                                    <td>42.2</td>
                                    <td>4.85</td>
                                    <td>32.50</td>
                                    <td>4.90</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1½</td>
                                    <td>40</td>
                                    <td>48.3</td>
                                    <td>5.08</td>
                                    <td>38.10</td>
                                    <td>6.20</td>
                                </tr>
                                <tr class="t-row">
                                    <td>2</td>
                                    <td>50</td>
                                    <td>60.3</td>
                                    <td>5.54</td>
                                    <td>49.20</td>
                                    <td>8.59</td>
                                </tr>
                                <tr class="t-row">
                                    <td>2½</td>
                                    <td>65</td>
                                    <td>73.0</td>
                                    <td>7.01</td>
                                    <td>59.00</td>
                                    <td>12.60</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3</td>
                                    <td>80</td>
                                    <td>88.9</td>
                                    <td>7.62</td>
                                    <td>73.66</td>
                                    <td>17.40</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3½</td>
                                    <td>90</td>
                                    <td>101.6</td>
                                    <td>8.08</td>
                                    <td>85.44</td>
                                    <td>21.70</td>
                                </tr>
                                <tr class="t-row">
                                    <td>4</td>
                                    <td>100</td>
                                    <td>114.3</td>
                                    <td>8.56</td>
                                    <td>97.18</td>
                                    <td>26.70</td>
                                </tr>
                                <tr class="t-row">
                                    <td>5</td>
                                    <td>125</td>
                                    <td>141.3</td>
                                    <td>9.53</td>
                                    <td>122.20</td>
                                    <td>36.50</td>
                                </tr>
                                <tr class="t-row">
                                    <td>6</td>
                                    <td>150</td>
                                    <td>168.3</td>
                                    <td>10.97</td>
                                    <td>146.36</td>
                                    <td>49.60</td>
                                </tr>
                                <tr class="t-row">
                                    <td>8</td>
                                    <td>200</td>
                                    <td>219.1</td>
                                    <td>12.70</td>
                                    <td>193.70</td>
                                    <td>72.40</td>
                                </tr>
                                <tr class="t-row">
                                    <td>10</td>
                                    <td>250</td>
                                    <td>273.1</td>
                                    <td>15.09</td>
                                    <td>242.90</td>
                                    <td>107.40</td>
                                </tr>
                                <tr class="t-row">
                                    <td>12</td>
                                    <td>300</td>
                                    <td>323.9</td>
                                    <td>17.48</td>
                                    <td>289.00</td>
                                    <td>145.20</td>
                                </tr>
                                <tr class="t-row">
                                    <td>14</td>
                                    <td>350</td>
                                    <td>355.6</td>
                                    <td>19.05</td>
                                    <td>317.50</td>
                                    <td>174.50</td>
                                </tr>
                                <tr class="t-row">
                                    <td>16</td>
                                    <td>400</td>
                                    <td>406.4</td>
                                    <td>21.44</td>
                                    <td>363.50</td>
                                    <td>224.50</td>
                                </tr>
                                <tr class="t-row">
                                    <td>18</td>
                                    <td>450</td>
                                    <td>457.2</td>
                                    <td>23.83</td>
                                    <td>409.50</td>
                                    <td>280.60</td>
                                </tr>
                                <tr class="t-row">
                                    <td>20</td>
                                    <td>500</td>
                                    <td>508.0</td>
                                    <td>26.23</td>
                                    <td>455.50</td>
                                    <td>342.60</td>
                                </tr>
                                <tr class="t-row">
                                    <td>22</td>
                                    <td>550</td>
                                    <td>558.8</td>
                                    <td>28.58</td>
                                    <td>501.60</td>
                                    <td>408.70</td>
                                </tr>
                                <tr class="t-row">
                                    <td>24</td>
                                    <td>600</td>
                                    <td>609.6</td>
                                    <td>30.96</td>
                                    <td>547.70</td>
                                    <td>479.70</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <h4 class="text-center mb-3" style="color: #db7227;">Schedule 160S</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle text-center">
                            <thead class="table-dark">
                                <tr class="t-row">
                                    <th>NPS</th>
                                    <th>NB (mm)</th>
                                    <th>OD (mm)</th>
                                    <th>Wall (mm)</th>
                                    <th>ID (mm)</th>
                                    <th>Weight (kg/m)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td>1/8</td>
                                    <td>3</td>
                                    <td>10.3</td>
                                    <td>2.41</td>
                                    <td>5.48</td>
                                    <td>0.53</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1/4</td>
                                    <td>6</td>
                                    <td>13.7</td>
                                    <td>3.02</td>
                                    <td>7.66</td>
                                    <td>0.89</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3/8</td>
                                    <td>10</td>
                                    <td>17.1</td>
                                    <td>3.20</td>
                                    <td>10.70</td>
                                    <td>1.13</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1/2</td>
                                    <td>15</td>
                                    <td>21.3</td>
                                    <td>4.78</td>
                                    <td>11.74</td>
                                    <td>1.80</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3/4</td>
                                    <td>20</td>
                                    <td>26.7</td>
                                    <td>5.56</td>
                                    <td>15.58</td>
                                    <td>3.06</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1</td>
                                    <td>25</td>
                                    <td>33.4</td>
                                    <td>6.35</td>
                                    <td>20.70</td>
                                    <td>4.70</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1¼</td>
                                    <td>32</td>
                                    <td>42.2</td>
                                    <td>6.35</td>
                                    <td>29.50</td>
                                    <td>6.40</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1½</td>
                                    <td>40</td>
                                    <td>48.3</td>
                                    <td>7.14</td>
                                    <td>34.02</td>
                                    <td>8.40</td>
                                </tr>
                                <tr class="t-row">
                                    <td>2</td>
                                    <td>50</td>
                                    <td>60.3</td>
                                    <td>8.74</td>
                                    <td>42.82</td>
                                    <td>12.80</td>
                                </tr>
                                <tr class="t-row">
                                    <td>2½</td>
                                    <td>65</td>
                                    <td>73.0</td>
                                    <td>9.53</td>
                                    <td>53.94</td>
                                    <td>17.40</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3</td>
                                    <td>80</td>
                                    <td>88.9</td>
                                    <td>11.13</td>
                                    <td>66.64</td>
                                    <td>25.00</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3½</td>
                                    <td>90</td>
                                    <td>101.6</td>
                                    <td>12.70</td>
                                    <td>76.20</td>
                                    <td>32.60</td>
                                </tr>
                                <tr class="t-row">
                                    <td>4</td>
                                    <td>100</td>
                                    <td>114.3</td>
                                    <td>13.49</td>
                                    <td>87.32</td>
                                    <td>40.30</td>
                                </tr>
                                <tr class="t-row">
                                    <td>5</td>
                                    <td>125</td>
                                    <td>141.3</td>
                                    <td>15.88</td>
                                    <td>109.54</td>
                                    <td>60.20</td>
                                </tr>
                                <tr class="t-row">
                                    <td>6</td>
                                    <td>150</td>
                                    <td>168.3</td>
                                    <td>18.26</td>
                                    <td>131.78</td>
                                    <td>84.90</td>
                                </tr>
                                <tr class="t-row">
                                    <td>8</td>
                                    <td>200</td>
                                    <td>219.1</td>
                                    <td>23.01</td>
                                    <td>173.08</td>
                                    <td>133.60</td>
                                </tr>
                                <tr class="t-row">
                                    <td>10</td>
                                    <td>250</td>
                                    <td>273.1</td>
                                    <td>28.58</td>
                                    <td>215.94</td>
                                    <td>198.20</td>
                                </tr>
                                <tr class="t-row">
                                    <td>12</td>
                                    <td>300</td>
                                    <td>323.9</td>
                                    <td>33.32</td>
                                    <td>257.26</td>
                                    <td>267.40</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <h4 class="text-center mb-3" style="color: #db7227;">Schedule XXS</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle text-center">
                            <thead class="table-dark">
                                <tr class="t-row">
                                    <th>NPS</th>
                                    <th>NB (mm)</th>
                                    <th>OD (mm)</th>
                                    <th>Wall (mm)</th>
                                    <th>ID (mm)</th>
                                    <th>Weight (kg/m)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td>1/8</td>
                                    <td>3</td>
                                    <td>10.3</td>
                                    <td>2.41</td>
                                    <td>5.48</td>
                                    <td>0.53</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1/4</td>
                                    <td>6</td>
                                    <td>13.7</td>
                                    <td>3.02</td>
                                    <td>7.66</td>
                                    <td>0.89</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3/8</td>
                                    <td>10</td>
                                    <td>17.1</td>
                                    <td>3.20</td>
                                    <td>10.70</td>
                                    <td>1.13</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1/2</td>
                                    <td>15</td>
                                    <td>21.3</td>
                                    <td>4.78</td>
                                    <td>11.74</td>
                                    <td>1.80</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3/4</td>
                                    <td>20</td>
                                    <td>26.7</td>
                                    <td>7.47</td>
                                    <td>11.76</td>
                                    <td>3.76</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1</td>
                                    <td>25</td>
                                    <td>33.4</td>
                                    <td>9.09</td>
                                    <td>15.22</td>
                                    <td>5.95</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1¼</td>
                                    <td>32</td>
                                    <td>42.2</td>
                                    <td>9.70</td>
                                    <td>22.80</td>
                                    <td>8.88</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1½</td>
                                    <td>40</td>
                                    <td>48.3</td>
                                    <td>10.16</td>
                                    <td>28.00</td>
                                    <td>11.17</td>
                                </tr>
                                <tr class="t-row">
                                    <td>2</td>
                                    <td>50</td>
                                    <td>60.3</td>
                                    <td>11.07</td>
                                    <td>38.16</td>
                                    <td>15.76</td>
                                </tr>
                                <tr class="t-row">
                                    <td>2½</td>
                                    <td>65</td>
                                    <td>73.0</td>
                                    <td>15.88</td>
                                    <td>41.24</td>
                                    <td>25.70</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3</td>
                                    <td>80</td>
                                    <td>88.9</td>
                                    <td>17.48</td>
                                    <td>53.94</td>
                                    <td>35.30</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3½</td>
                                    <td>90</td>
                                    <td>101.6</td>
                                    <td>19.05</td>
                                    <td>63.50</td>
                                    <td>46.10</td>
                                </tr>
                                <tr class="t-row">
                                    <td>4</td>
                                    <td>100</td>
                                    <td>114.3</td>
                                    <td>21.44</td>
                                    <td>71.42</td>
                                    <td>59.30</td>
                                </tr>
                                <tr class="t-row">
                                    <td>5</td>
                                    <td>125</td>
                                    <td>141.3</td>
                                    <td>25.40</td>
                                    <td>90.50</td>
                                    <td>89.00</td>
                                </tr>
                                <tr class="t-row">
                                    <td>6</td>
                                    <td>150</td>
                                    <td>168.3</td>
                                    <td>28.58</td>
                                    <td>111.14</td>
                                    <td>123.00</td>
                                </tr>
                                <tr class="t-row">
                                    <td>8</td>
                                    <td>200</td>
                                    <td>219.1</td>
                                    <td>33.32</td>
                                    <td>152.46</td>
                                    <td>185.30</td>
                                </tr>
                                <tr class="t-row">
                                    <td>10</td>
                                    <td>250</td>
                                    <td>273.1</td>
                                    <td>38.89</td>
                                    <td>195.32</td>
                                    <td>274.00</td>
                                </tr>
                                <tr class="t-row">
                                    <td>12</td>
                                    <td>300</td>
                                    <td>323.9</td>
                                    <td>44.45</td>
                                    <td>235.00</td>
                                    <td>371.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Grades Available -->
    <section id="grades" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">5. Grades Available</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle text-start">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Material</th>
                                    <th>Grades</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td><strong>Nickel Alloys</strong></td>
                                    <td>Hastelloy C276, C22, C4, B2, B3, C2000, G3, G30, Hastelloy X; Inconel 600, 601, 625,
                                        690, 718, X750; Incoloy 800, 825, 925; Monel 400, K500, R405; Nickel 200, 201, A286
                                        660</td>
                                </tr>
                                <tr class="t-row">
                                    <td><strong>Titanium Alloys</strong></td>
                                    <td>Grade 1, 2, 4, 4 ELI, 5, 5 ELI, 23, 7, 7NB, 9, 12</td>
                                </tr>
                                <tr class="t-row">
                                    <td><strong>Duplex / Super Duplex</strong></td>
                                    <td>2507, S32760, S31803, 2205</td>
                                </tr>
                                <tr class="t-row">
                                    <td><strong>Austenitic Stainless Steel</strong></td>
                                    <td>304, 310, 316, 316Ti, 317, 321, 347, 309, Nitronic 50, Nitronic 60</td>
                                </tr>
                                <tr class="t-row">
                                    <td><strong>High Strength Stainless Steel</strong></td>
                                    <td>17-4PH, 15-5PH, 14-4PH, 410, 420, 420HC, 430F, 416, 431, 440A, 440B, 440C, 422, 403,
                                        405</td>
                                </tr>
                                <tr class="t-row">
                                    <td><strong>Super Austenitic Stainless Steel</strong></td>
                                    <td>904L, SMO 254, SMO 654, AL-6XN, Alloy 926, 253-MA</td>
                                </tr>
                                <tr class="t-row">
                                    <td><strong>Zirconium</strong></td>
                                    <td>702, 704, 705</td>
                                </tr>
                                <tr class="t-row">
                                    <td><strong>Tantalum</strong></td>
                                    <td>R05200, R05252, R05255</td>
                                </tr>
                                <tr class="t-row">
                                    <td><strong>Engineering Steels</strong></td>
                                    <td>EN8, EN9, EN19, EN24, EN31, EN36, EN47, D2, 1045, 1055, 4140, 4130, 4340, P1, P11,
                                        P12, P22</td>
                                </tr>
                                <tr class="t-row">
                                    <td><strong>Carbon Steel</strong></td>
                                    <td>ASTM A106, A105, A36, A234 WPB, EN10210, IS2062</td>
                                </tr>
                                <tr class="t-row">
                                    <td><strong>Aluminium Alloys</strong></td>
                                    <td>HE30, 6082-T6, 6061-T6, 5083, 7075, 2014-T6, 6063, 1100, 1200, 6012</td>
                                </tr>
                                <tr class="t-row">
                                    <td><strong>Copper Alloys</strong></td>
                                    <td>CU-NI 70/30, 90/10, C44300, C46400, Aluminium Bronze, NAB, C71520, C71500, C63000,
                                        Brass, Naval Brass, Beryllium Copper</td>
                                </tr>
                                <tr class="t-row">
                                    <td><strong>Special Alloys</strong></td>
                                    <td>Tungsten, Carbide, Nitinol, Nimonic, Stellite, Tantalum</td>
                                </tr>
                                <tr class="t-row">
                                    <td><strong>Haynes Superalloys</strong></td>
                                    <td>Haynes 188, 230, 160, 242</td>
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
                                    alt="Nickel alloy tubes for heat exchangers" loading="lazy" width="400" height="260">
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
                                    alt="Duplex and super duplex tubes for seawater service" loading="lazy" width="400"
                                    height="260">
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
                                    alt="Haynes superalloy tubes for high-temperature service" loading="lazy" width="400"
                                    height="260">
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

    <!-- Applications & Uses -->
    <section id="applications" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Applications & Uses of Seamless Pipes</h2>
            </div>
            <div class="row g-4 mt-2">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet-fill"></i></div>
                        <h5>Oil & Gas Industry</h5>
                        <ul>
                            <li>High-pressure pipelines</li>
                            <li>Offshore platforms</li>
                            <li>Refineries</li>
                            <li>LNG facilities</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Power Generation</h5>
                        <ul>
                            <li>Boiler systems</li>
                            <li>Steam lines</li>
                            <li>Condensers</li>
                            <li>Heat exchangers</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-flask-fill"></i></div>
                        <h5>Chemical & Petrochemical</h5>
                        <ul>
                            <li>Process piping</li>
                            <li>Pressure vessels</li>
                            <li>Chemical reactors</li>
                            <li>Distillation systems</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-water"></i></div>
                        <h5>Marine & Offshore</h5>
                        <ul>
                            <li>Shipbuilding</li>
                            <li>Ballast systems</li>
                            <li>Seawater piping</li>
                            <li>Offshore structures</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-building"></i></div>
                        <h5>Construction & Infrastructure</h5>
                        <ul>
                            <li>Structural applications</li>
                            <li>Bridges</li>
                            <li>Industrial buildings</li>
                            <li>Support columns</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Food & Pharmaceutical</h5>
                        <ul>
                            <li>Hygienic process piping</li>
                            <li>CIP systems</li>
                            <li>Sterile fluid transfer</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-airplane-engines-fill"></i></div>
                        <h5>Aerospace & Defence</h5>
                        <ul>
                            <li>Hydraulic systems</li>
                            <li>Aircraft structures</li>
                            <li>High-performance applications</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- <div class="section-title center mb-4 mt-5">
                    <h3 class="fw-bold" style="color: #174268;">General Uses of Seamless Pipes</h3>
                </div>
                <div class="row g-4 mt-2">
                    <div class="col-md-6 col-lg-3">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-droplet-fill"></i></div>
                            <h5>High-pressure fluid transportation</h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-cloud-haze2"></i></div>
                            <h5>Steam and condensate systems</h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-thermometer-high"></i></div>
                            <h5>Boiler & superheater applications</h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-gear-fill"></i></div>
                            <h5>Hydraulic and pneumatic systems</h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-building"></i></div>
                            <h5>Structural fabrication</h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-exclamation-triangle"></i></div>
                            <h5>Corrosive chemical handling</h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-water"></i></div>
                            <h5>Offshore & marine installations</h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-heart-pulse"></i></div>
                            <h5>Food & pharmaceutical processing</h5>
                        </div>
                    </div>
                </div>
            </div> -->
    </section>

    <!-- Advantages -->
    <section id="buying-guide" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Advantages of Seamless Pipes</h2>
            </div>
            <div class="row g-4 mt-2">
                <div class="col-md-6 col-lg-4">
                    <div class="why-banner-block h-100">
                        <div class="why-banner-icon"><i class="bi bi-shield-shaded"></i></div>
                        <h5>Superior Strength</h5>
                        <p class="mb-0">No weld seam eliminates structural weak points.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="why-banner-block h-100">
                        <div class="why-banner-icon"><i class="bi bi-speedometer2"></i></div>
                        <h5>Excellent Pressure Resistance</h5>
                        <p class="mb-0">Suitable for high-pressure and high-temperature service.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="why-banner-block h-100">
                        <div class="why-banner-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Better Corrosion Resistance</h5>
                        <p class="mb-0">Performs exceptionally well in aggressive environments.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="why-banner-block h-100">
                        <div class="why-banner-icon"><i class="bi bi-layers"></i></div>
                        <h5>Uniform Structure</h5>
                        <p class="mb-0">Consistent wall thickness and mechanical properties.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="why-banner-block h-100">
                        <div class="why-banner-icon"><i class="bi bi-check-circle"></i></div>
                        <h5>Enhanced Reliability</h5>
                        <p class="mb-0">Lower risk of failure in critical applications.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="why-banner-block h-100">
                        <div class="why-banner-icon"><i class="bi bi-clock-history"></i></div>
                        <h5>Long Service Life</h5>
                        <p class="mb-0">Reduced maintenance and extended operational performance.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mechanical Properties -->
    <section id="mechanical-properties" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Mechanical Properties of Seamless Pipes</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle text-center">
                            <thead class="table-dark">
                                <tr class="t-row">
                                    <th>Material Type</th>
                                    <th>Tensile Strength (MPa)</th>
                                    <th>Yield Strength (MPa)</th>
                                    <th>Elongation (%)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td>Carbon Steel ASTM A106</td>
                                    <td>415</td>
                                    <td>240</td>
                                    <td>30</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Stainless Steel 304</td>
                                    <td>515</td>
                                    <td>205</td>
                                    <td>40</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Stainless Steel 316</td>
                                    <td>515</td>
                                    <td>205</td>
                                    <td>40</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Duplex 2205</td>
                                    <td>620</td>
                                    <td>450</td>
                                    <td>25</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Inconel 625</td>
                                    <td>827</td>
                                    <td>414</td>
                                    <td>30</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Monel 400</td>
                                    <td>550</td>
                                    <td>240</td>
                                    <td>35</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="text-center mt-3">
                        📌 <em>Actual values vary according to material grade, size, and heat treatment condition.</em>
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section id="why-choose-us" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container text-center">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Why Choose Moksh Tubes & Fittings LLP?</h2>
            </div>
            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block h-100">
                        <div class="why-banner-icon"><i class="bi bi-box-seam"></i></div>
                        <h5>Ready Stock Availability</h5>
                        <p class="mb-0">Over 200+ tons of seamless pipes available for immediate dispatch.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block h-100">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Global Sourcing Capability</h5>
                        <p class="mb-0">Access to hard-to-find grades and custom dimensions.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block h-100">
                        <div class="why-banner-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Certified Quality</h5>
                        <p class="mb-0">ISO 9001:2015 quality management system.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block h-100">
                        <div class="why-banner-icon"><i class="bi bi-tags"></i></div>
                        <h5>Competitive Pricing</h5>
                        <p class="mb-0">Cost-effective solutions without compromising quality.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block h-100">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Fast Delivery</h5>
                        <p class="mb-0">Reliable dispatch schedules aligned with project deadlines.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block h-100">
                        <div class="why-banner-icon"><i class="bi bi-headset"></i></div>
                        <h5>Technical Support</h5>
                        <p class="mb-0">Expert assistance from material selection to project completion.</p>
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

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are Seamless Pipes?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Seamless Pipes are pipes manufactured without any welded seam, providing superior
                                    strength and pressure resistance.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What sizes are available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Sizes range from 3 mm to 610 mm OD with various schedules and wall thicknesses.
                                </p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Which industries use Seamless Pipes?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Oil & Gas, Power Generation, Petrochemical, Marine, Construction, Food Processing, and
                                    Aerospace industries.
                                </p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What standards do you follow?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    ASTM, ASME, API, DIN, and EN standards.
                                </p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Are custom sizes available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Yes, custom diameters, wall thicknesses, and lengths can be supplied.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Products -->


    <!-- Request a Quote -->
    <section class="sec-padd-top sec-padd-bottom">
        <div class="container text-center">
            <div class="p-5 border rounded shadow-sm" style="background-color: #174268; color: #fff;">
                <h3 class="fw-bold text-white">Request a Quote</h3>
                <p class="fs-5 mt-3">Looking for high-quality Seamless Pipes for critical industrial applications?</p>
                <p class="mb-4 text-light">Contact Moksh Tubes & Fittings LLP today for pricing, technical assistance, and
                    immediate availability.<br>We deliver precision-engineered Seamless Pipes designed to meet the highest
                    international quality standards and the most demanding industrial requirements.</p>
                <a href="{{ route('contact-us') ?? '#' }}" class="btn btn-lg text-white shadow"
                    style="background-color:#db7227; border-radius:8px; padding: 12px 30px;">Contact Us Now</a>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <!-- Schema JSON-LD -->
    <script type="application/ld+json">
            {
              "@@context": "https://schema.org/",
              "@type": "Product",
              "name": "Seamless Pipes",
              "image": "https://mokshtubes.com/assets/images/product/seamless-pipes.webp",
              "description": "Premium-quality Seamless Pipes in Stainless Steel, Duplex, Nickel Alloy & Carbon Steel for high-pressure applications.",
              "brand": {
                "@type": "Brand",
                "name": "Moksh Tubes & Fittings LLP"
              },
              "offers": {
                "@type": "Offer",
                "url": "https://mokshtubes.com/seamless-pipes/",
                "priceCurrency": "INR",
                "price": "0",
                "priceValidUntil": "2029-12-31",
                "availability": "https://schema.org/InStock"
              }
            }
            </script>

    <script type="application/ld+json">
            {
              "@@context": "https://schema.org",
              "@type": "FAQPage",
              "mainEntity": [{
                "@type": "Question",
                "name": "What are Seamless Pipes?",
                "acceptedAnswer": {
                  "@type": "Answer",
                  "text": "Seamless Pipes are pipes manufactured without any welded seam, providing superior strength and pressure resistance."
                }
              }, {
                "@type": "Question",
                "name": "What sizes are available?",
                "acceptedAnswer": {
                  "@type": "Answer",
                  "text": "Sizes range from 3 mm to 610 mm OD with various schedules and wall thicknesses."
                }
              }, {
                "@type": "Question",
                "name": "Which industries use Seamless Pipes?",
                "acceptedAnswer": {
                  "@type": "Answer",
                  "text": "Oil & Gas, Power Generation, Petrochemical, Marine, Construction, Food Processing, and Aerospace industries."
                }
              }, {
                "@type": "Question",
                "name": "What standards do you follow?",
                "acceptedAnswer": {
                  "@type": "Answer",
                  "text": "ASTM, ASME, API, DIN, and EN standards."
                }
              }, {
                "@type": "Question",
                "name": "Are custom sizes available?",
                "acceptedAnswer": {
                  "@type": "Answer",
                  "text": "Yes, custom diameters, wall thicknesses, and lengths can be supplied."
                }
              }]
            }
            </script>

    <script type="application/ld+json">
            {
              "@@context": "https://schema.org/",
              "@type": "BreadcrumbList",
              "itemListElement": [{
                "@type": "ListItem",
                "position": 1,
                "name": "Home",
                "item": "https://mokshtubes.com/"
              },{
                "@type": "ListItem",
                "position": 2,
                "name": "Pipes",
                "item": "https://mokshtubes.com/pipes/"
              },{
                "@type": "ListItem",
                "position": 3,
                "name": "Seamless Pipes",
                "item": "https://mokshtubes.com/seamless-pipes/"
              }]
            }
            </script>

    <script type="application/ld+json">
            {
              "@@context": "https://schema.org",
              "@type": "Organization",
              "name": "Moksh Tubes & Fittings LLP",
              "url": "https://mokshtubes.com/",
              "logo": "https://mokshtubes.com/assets/images/logo.png",
              "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+91-9876543210",
                "contactType": "sales",
                "areaServed": "IN",
                "availableLanguage": ["en", "hi"]
              }
            }
            </script>

    <script type="application/ld+json">
            {
              "@@context": "https://schema.org",
              "@type": "LocalBusiness",
              "name": "Moksh Tubes & Fittings LLP",
              "image": "https://mokshtubes.com/assets/images/logo.png",
              "url": "https://mokshtubes.com/",
              "telephone": "+91-9876543210",
              "address": {
                "@type": "PostalAddress",
                "streetAddress": "Mumbai",
                "addressLocality": "Mumbai",
                "addressRegion": "MH",
                "postalCode": "400004",
                "addressCountry": "IN"
              }
            }
            </script>
@endpush