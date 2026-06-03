@extends('layouts.master')

@section('title', 'Seamless Pipes Supplier UAE, Saudi | Exporter India')
@section('meta_description', 'Seamless pipes exporter to UAE, Saudi Arabia, Qatar & Oman. ASTM pipes in stainless steel, carbon & alloy steel. Fast delivery from India.')
@section('meta_keywords', 'Seamless pipes, seamless pipes exporter, seamless steel pipes, carbon steel seamless pipes, stainless steel seamless pipes, alloy steel seamless pipes, ASTM seamless pipes')
@section('og_image', asset('assets/images/product/seamless-pipes.webp'))
@section('og_type', 'article')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url('{{ asset('assets/images/product/seamless-pipes.webp') }}');">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Seamless Pipes & Tubes Supplier & Exporter <br> ASTM / ASME Industrial Pipes</h1>

                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px; max-width: 900px;">
                        Seamless Pipes are engineered for applications requiring exceptional strength, pressure resistance, and reliability. Manufactured without any welded joints, seamless pipes provide a uniform structure, superior mechanical properties, and excellent performance in high-pressure, high-temperature, and corrosive environments.
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
            <a href="#seamless-vs-welded">Seamless vs Welded</a> |
            <a href="#manufacturing">Manufacturing</a> |
            <a href="#mechanical">Mechanical</a> |
            <a href="#tolerances">Tolerances</a> |
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
                SEAMLESS PIPES
            </h3>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/product/seamless-pipes.webp') }}" alt="Seamless Pipes"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4" style="text-align: justify;">
                            <strong>Seamless Pipes</strong> are high-performance tubular products manufactured from solid billets without any welding seam. The seamless manufacturing process produces pipes with superior structural integrity, making them the preferred choice for critical applications involving high pressure, elevated temperatures, corrosive media, and demanding operating conditions.
                        </p>

                        <p class="fs-6 mb-4" style="text-align: justify;">
                            Unlike welded pipes, seamless pipes eliminate the risk associated with weld failures, providing improved strength, enhanced pressure handling capability, and better resistance to fatigue. Their uniform wall thickness and smooth internal surface contribute to efficient fluid flow and long service life.
                        </p>

                        <p class="fs-6 mb-4" style="text-align: justify;">
                            At <strong style="color:black;"><a href="{{ url('/contact-us') }}">Moksh Tubes & Fittings
                                    LLP</a></strong>, we are a trusted manufacturer, supplier, stockist, and exporter of Seamless Pipes in India. We offer an extensive range of seamless pipes in stainless steel, nickel alloys, duplex stainless steel, titanium, copper alloys, alloy steel, carbon steel, aluminum alloys, zirconium, tantalum, and other specialty metals.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            Manufactured to international standards and subjected to strict quality control procedures, our seamless pipes deliver outstanding performance in industries where reliability, safety, and durability are essential.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Seamless Pipes Datasheet</h3>
            <p class="mb-3">
                Get the complete technical datasheet including specifications, chemical composition, mechanical properties, pressure ratings, testing requirements, and application guidelines. Enter your email below to receive the PDF instantly.
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
                We respect your privacy and only use your email to send the requested datasheet.
            </p>
        </div>
    </section>

    <section id="specifications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>2. Specifications of Seamless Pipes</h2>
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
                                    <td>Stainless Steel, Duplex & Super Duplex Steel, Nickel Alloys, Inconel, Monel, Titanium, Zirconium, Tantalum, Aluminium, Copper Alloys, Carbon Steel, Alloy Steel</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Grades</td>
                                    <td>Available as per ASTM, ASME, API, DIN & EN Standards</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Outer Diameter (OD)</td>
                                    <td>3 mm to 610 mm (¼” to 24” NB)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Wall Thickness</td>
                                    <td>Available in all standard and custom schedules</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Lengths</td>
                                    <td>Up to 12 meters or custom lengths</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Surface Finish</td>
                                    <td>Mill Finish, Pickled & Passivated, Mechanical Polished, Electro Polished, Matt Finish</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Form</td>
                                    <td>Round, Square, Rectangular, Hollow Section, Hydraulic, Oval</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manufacturing Process</td>
                                    <td>Hot Finished, Cold Drawn, Cold Rolled</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Standards</td>
                                    <td>ASTM, ASME, API, DIN, EN</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Applications</td>
                                    <td>Oil & Gas, Petrochemical, Power, Chemical, Marine, Construction, Food Processing</td>
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
                <h2 class="fw-bold" style="color: #174268;">3. Size & Weight Chart</h2>
            </div>

            <p class="text-center mb-4">Weight and size charts for seamless pipes can be provided upon request, customized to the required schedules including Schedule 5S, 10S, 40S, 80S, 160S, and XXS.</p>

            <!-- Combined Chart -->
            <div class="row justify-content-center mb-5">
                <div class="col-lg-12">
                    <h4 class="text-center mb-3" style="color: #db7227;">Seamless Pipes Weight Chart</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>NB (mm)</th>
                                    <th>Size (inches)</th>
                                    <th>OD (mm)</th>
                                    <th>Sch 5S (Kg/m)</th>
                                    <th>Sch 10S (Kg/m)</th>
                                    <th>Sch 40S (Kg/m)</th>
                                    <th>Sch 80S (Kg/m)</th>
                                    <th>Sch 160S (Kg/m)</th>
                                    <th>Sch XXS (Kg/m)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>3</td><td>1/8</td><td>10.3</td><td>0.276</td><td>0.28</td><td>0.37</td><td>0.47</td><td>-</td><td>-</td></tr>
                                <tr class="t-row"><td>6</td><td>1/4</td><td>13.7</td><td>0.39</td><td>0.49</td><td>0.631</td><td>0.80</td><td>-</td><td>-</td></tr>
                                <tr class="t-row"><td>10</td><td>3/8</td><td>17.1</td><td>0.49</td><td>0.63</td><td>0.845</td><td>1.10</td><td>-</td><td>-</td></tr>
                                <tr class="t-row"><td>15</td><td>1/2</td><td>21.3</td><td>0.80</td><td>1.00</td><td>1.27</td><td>1.62</td><td>1.94</td><td>2.55</td></tr>
                                <tr class="t-row"><td>20</td><td>3/4</td><td>26.7</td><td>1.03</td><td>1.28</td><td>1.68</td><td>2.20</td><td>2.89</td><td>3.63</td></tr>
                                <tr class="t-row"><td>25</td><td>1</td><td>33.4</td><td>1.30</td><td>2.09</td><td>2.50</td><td>3.24</td><td>4.24</td><td>5.45</td></tr>
                                <tr class="t-row"><td>32</td><td>1 1/4</td><td>42.2</td><td>1.65</td><td>2.70</td><td>3.38</td><td>4.47</td><td>5.61</td><td>7.77</td></tr>
                                <tr class="t-row"><td>40</td><td>1 1/2</td><td>48.3</td><td>1.91</td><td>3.11</td><td>4.05</td><td>5.41</td><td>7.25</td><td>9.54</td></tr>
                                <tr class="t-row"><td>50</td><td>2</td><td>60.3</td><td>2.40</td><td>3.93</td><td>5.44</td><td>7.48</td><td>11.1</td><td>13.44</td></tr>
                                <tr class="t-row"><td>65</td><td>2 1/2</td><td>73.0</td><td>3.69</td><td>5.26</td><td>8.63</td><td>11.4</td><td>14.9</td><td>20.39</td></tr>
                                <tr class="t-row"><td>80</td><td>3</td><td>88.9</td><td>4.51</td><td>6.45</td><td>11.30</td><td>15.2</td><td>21.3</td><td>27.65</td></tr>
                                <tr class="t-row"><td>100</td><td>4</td><td>114.3</td><td>5.84</td><td>8.36</td><td>16.07</td><td>22.3</td><td>33.54</td><td>41.03</td></tr>
                                <tr class="t-row"><td>125</td><td>5</td><td>141.3</td><td>9.47</td><td>11.57</td><td>21.8</td><td>31.97</td><td>49.11</td><td>57.43</td></tr>
                                <tr class="t-row"><td>150</td><td>6</td><td>168.3</td><td>11.32</td><td>13.84</td><td>28.3</td><td>42.7</td><td>67.56</td><td>79.22</td></tr>
                                <tr class="t-row"><td>200</td><td>8</td><td>219.1</td><td>14.79</td><td>19.96</td><td>42.6</td><td>64.6</td><td>111.2</td><td>107.8</td></tr>
                                <tr class="t-row"><td>250</td><td>10</td><td>273.1</td><td>22.63</td><td>27.78</td><td>60.5</td><td>96.0</td><td>172.4</td><td>155.15</td></tr>
                                <tr class="t-row"><td>300</td><td>12</td><td>323.9</td><td>31.25</td><td>36.00</td><td>73.88</td><td>132.0</td><td>238.76</td><td>186.97</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Schedule 5S and 10S -->
            <div class="row justify-content-center">
                <div class="col-lg-6 mb-4">
                    <h4 class="text-center mb-3" style="color: #db7227;">Schedule 5S</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>NPS</th>
                                    <th>OD (mm)</th>
                                    <th>Wall (mm)</th>
                                    <th>Weight (kg/m)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>1/8</td><td>10.3</td><td>1.24</td><td>0.276</td></tr>
                                <tr class="t-row"><td>1/4</td><td>13.7</td><td>1.24</td><td>0.390</td></tr>
                                <tr class="t-row"><td>3/8</td><td>17.1</td><td>1.24</td><td>0.490</td></tr>
                                <tr class="t-row"><td>1/2</td><td>21.3</td><td>1.65</td><td>0.840</td></tr>
                                <tr class="t-row"><td>3/4</td><td>26.7</td><td>1.65</td><td>1.030</td></tr>
                                <tr class="t-row"><td>1</td><td>33.4</td><td>1.65</td><td>1.300</td></tr>
                                <tr class="t-row"><td>1¼</td><td>42.2</td><td>1.65</td><td>1.650</td></tr>
                                <tr class="t-row"><td>1½</td><td>48.3</td><td>1.65</td><td>1.910</td></tr>
                                <tr class="t-row"><td>2</td><td>60.3</td><td>1.65</td><td>2.400</td></tr>
                                <tr class="t-row"><td>2½</td><td>73.0</td><td>2.11</td><td>3.690</td></tr>
                                <tr class="t-row"><td>3</td><td>88.9</td><td>2.11</td><td>4.510</td></tr>
                                <tr class="t-row"><td>3½</td><td>101.6</td><td>2.11</td><td>5.170</td></tr>
                                <tr class="t-row"><td>4</td><td>114.3</td><td>2.11</td><td>5.840</td></tr>
                                <tr class="t-row"><td>5</td><td>141.3</td><td>2.77</td><td>9.470</td></tr>
                                <tr class="t-row"><td>6</td><td>168.3</td><td>2.77</td><td>11.320</td></tr>
                                <tr class="t-row"><td>8</td><td>219.1</td><td>2.77</td><td>14.790</td></tr>
                                <tr class="t-row"><td>10</td><td>273.1</td><td>3.40</td><td>22.630</td></tr>
                                <tr class="t-row"><td>12</td><td>323.9</td><td>3.56</td><td>31.250</td></tr>
                                <tr class="t-row"><td>14</td><td>355.6</td><td>3.96</td><td>36.960</td></tr>
                                <tr class="t-row"><td>16</td><td>406.4</td><td>4.19</td><td>41.560</td></tr>
                                <tr class="t-row"><td>18</td><td>457.2</td><td>4.57</td><td>49.420</td></tr>
                                <tr class="t-row"><td>20</td><td>508.0</td><td>5.54</td><td>59.250</td></tr>
                                <tr class="t-row"><td>22</td><td>558.8</td><td>5.54</td><td>65.970</td></tr>
                                <tr class="t-row"><td>24</td><td>609.6</td><td>5.54</td><td>82.470</td></tr>
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
                                    <th>NPS</th>
                                    <th>OD (mm)</th>
                                    <th>Wall (mm)</th>
                                    <th>Weight (kg/m)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>1/8</td><td>10.3</td><td>1.65</td><td>0.37</td></tr>
                                <tr class="t-row"><td>1/4</td><td>13.7</td><td>1.65</td><td>0.52</td></tr>
                                <tr class="t-row"><td>3/8</td><td>17.1</td><td>1.65</td><td>0.66</td></tr>
                                <tr class="t-row"><td>1/2</td><td>21.3</td><td>1.65</td><td>0.84</td></tr>
                                <tr class="t-row"><td>3/4</td><td>26.7</td><td>2.11</td><td>1.33</td></tr>
                                <tr class="t-row"><td>1</td><td>33.4</td><td>2.11</td><td>1.70</td></tr>
                                <tr class="t-row"><td>1¼</td><td>42.2</td><td>2.11</td><td>2.15</td></tr>
                                <tr class="t-row"><td>1½</td><td>48.3</td><td>2.11</td><td>2.51</td></tr>
                                <tr class="t-row"><td>2</td><td>60.3</td><td>2.11</td><td>3.16</td></tr>
                                <tr class="t-row"><td>2½</td><td>73.0</td><td>2.77</td><td>4.89</td></tr>
                                <tr class="t-row"><td>3</td><td>88.9</td><td>2.77</td><td>6.02</td></tr>
                                <tr class="t-row"><td>3½</td><td>101.6</td><td>2.77</td><td>6.87</td></tr>
                                <tr class="t-row"><td>4</td><td>114.3</td><td>2.77</td><td>7.73</td></tr>
                                <tr class="t-row"><td>5</td><td>141.3</td><td>3.40</td><td>11.90</td></tr>
                                <tr class="t-row"><td>6</td><td>168.3</td><td>3.40</td><td>14.30</td></tr>
                                <tr class="t-row"><td>8</td><td>219.1</td><td>3.40</td><td>18.30</td></tr>
                                <tr class="t-row"><td>10</td><td>273.1</td><td>4.78</td><td>29.40</td></tr>
                                <tr class="t-row"><td>12</td><td>323.9</td><td>4.78</td><td>40.70</td></tr>
                                <tr class="t-row"><td>14</td><td>355.6</td><td>5.54</td><td>47.50</td></tr>
                                <tr class="t-row"><td>16</td><td>406.4</td><td>5.54</td><td>53.40</td></tr>
                                <tr class="t-row"><td>18</td><td>457.2</td><td>5.54</td><td>63.50</td></tr>
                                <tr class="t-row"><td>20</td><td>508.0</td><td>7.11</td><td>78.70</td></tr>
                                <tr class="t-row"><td>22</td><td>558.8</td><td>7.11</td><td>87.70</td></tr>
                                <tr class="t-row"><td>24</td><td>609.6</td><td>7.11</td><td>109.40</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Schedule 40S and 80S -->
            <div class="row justify-content-center">
                <div class="col-lg-6 mb-4">
                    <h4 class="text-center mb-3" style="color: #db7227;">Schedule 40S</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>NPS</th>
                                    <th>OD (mm)</th>
                                    <th>Wall (mm)</th>
                                    <th>Weight (kg/m)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>1/8</td><td>10.3</td><td>2.77</td><td>0.72</td></tr>
                                <tr class="t-row"><td>1/4</td><td>13.7</td><td>2.77</td><td>1.06</td></tr>
                                <tr class="t-row"><td>3/8</td><td>17.1</td><td>2.77</td><td>1.39</td></tr>
                                <tr class="t-row"><td>1/2</td><td>21.3</td><td>3.38</td><td>1.69</td></tr>
                                <tr class="t-row"><td>3/4</td><td>26.7</td><td>3.38</td><td>2.45</td></tr>
                                <tr class="t-row"><td>1</td><td>33.4</td><td>3.38</td><td>3.35</td></tr>
                                <tr class="t-row"><td>1¼</td><td>42.2</td><td>3.56</td><td>4.54</td></tr>
                                <tr class="t-row"><td>1½</td><td>48.3</td><td>3.68</td><td>5.35</td></tr>
                                <tr class="t-row"><td>2</td><td>60.3</td><td>3.68</td><td>7.41</td></tr>
                                <tr class="t-row"><td>2½</td><td>73.0</td><td>3.91</td><td>9.84</td></tr>
                                <tr class="t-row"><td>3</td><td>88.9</td><td>4.55</td><td>13.10</td></tr>
                                <tr class="t-row"><td>3½</td><td>101.6</td><td>4.55</td><td>15.20</td></tr>
                                <tr class="t-row"><td>4</td><td>114.3</td><td>6.02</td><td>19.10</td></tr>
                                <tr class="t-row"><td>5</td><td>141.3</td><td>6.02</td><td>25.50</td></tr>
                                <tr class="t-row"><td>6</td><td>150.3</td><td>6.55</td><td>31.70</td></tr>
                                <tr class="t-row"><td>8</td><td>219.1</td><td>8.18</td><td>46.40</td></tr>
                                <tr class="t-row"><td>10</td><td>273.1</td><td>9.27</td><td>65.80</td></tr>
                                <tr class="t-row"><td>12</td><td>323.9</td><td>9.53</td><td>82.60</td></tr>
                                <tr class="t-row"><td>14</td><td>355.6</td><td>10.97</td><td>96.80</td></tr>
                                <tr class="t-row"><td>16</td><td>406.4</td><td>12.70</td><td>120.30</td></tr>
                                <tr class="t-row"><td>18</td><td>457.2</td><td>12.70</td><td>135.60</td></tr>
                                <tr class="t-row"><td>20</td><td>508.0</td><td>15.09</td><td>171.70</td></tr>
                                <tr class="t-row"><td>22</td><td>558.8</td><td>15.09</td><td>191.60</td></tr>
                                <tr class="t-row"><td>24</td><td>609.6</td><td>15.09</td><td>213.20</td></tr>
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
                                    <th>NPS</th>
                                    <th>OD (mm)</th>
                                    <th>Wall (mm)</th>
                                    <th>Weight (kg/m)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>1/8</td><td>10.3</td><td>1.73</td><td>0.39</td></tr>
                                <tr class="t-row"><td>1/4</td><td>13.7</td><td>2.24</td><td>0.64</td></tr>
                                <tr class="t-row"><td>3/8</td><td>17.1</td><td>2.31</td><td>0.84</td></tr>
                                <tr class="t-row"><td>1/2</td><td>21.3</td><td>3.73</td><td>1.43</td></tr>
                                <tr class="t-row"><td>3/4</td><td>26.7</td><td>3.91</td><td>2.21</td></tr>
                                <tr class="t-row"><td>1</td><td>33.4</td><td>4.55</td><td>3.39</td></tr>
                                <tr class="t-row"><td>1¼</td><td>42.2</td><td>4.85</td><td>4.90</td></tr>
                                <tr class="t-row"><td>1½</td><td>48.3</td><td>5.08</td><td>6.20</td></tr>
                                <tr class="t-row"><td>2</td><td>60.3</td><td>5.54</td><td>8.59</td></tr>
                                <tr class="t-row"><td>2½</td><td>73.0</td><td>7.01</td><td>12.60</td></tr>
                                <tr class="t-row"><td>3</td><td>88.9</td><td>7.62</td><td>17.40</td></tr>
                                <tr class="t-row"><td>3½</td><td>101.6</td><td>8.08</td><td>21.70</td></tr>
                                <tr class="t-row"><td>4</td><td>114.3</td><td>8.56</td><td>26.70</td></tr>
                                <tr class="t-row"><td>5</td><td>141.3</td><td>9.53</td><td>36.50</td></tr>
                                <tr class="t-row"><td>6</td><td>168.3</td><td>10.97</td><td>49.60</td></tr>
                                <tr class="t-row"><td>8</td><td>219.1</td><td>12.70</td><td>72.40</td></tr>
                                <tr class="t-row"><td>10</td><td>273.1</td><td>15.09</td><td>107.40</td></tr>
                                <tr class="t-row"><td>12</td><td>323.9</td><td>17.48</td><td>145.20</td></tr>
                                <tr class="t-row"><td>14</td><td>355.6</td><td>19.05</td><td>174.50</td></tr>
                                <tr class="t-row"><td>16</td><td>406.4</td><td>21.44</td><td>224.50</td></tr>
                                <tr class="t-row"><td>18</td><td>457.2</td><td>23.83</td><td>280.60</td></tr>
                                <tr class="t-row"><td>20</td><td>508.0</td><td>26.23</td><td>342.60</td></tr>
                                <tr class="t-row"><td>22</td><td>558.8</td><td>28.58</td><td>408.70</td></tr>
                                <tr class="t-row"><td>24</td><td>609.6</td><td>30.96</td><td>479.70</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Schedule 160S and XXS -->
            <div class="row justify-content-center">
                <div class="col-lg-6 mb-4">
                    <h4 class="text-center mb-3" style="color: #db7227;">Schedule 160S</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>NPS</th>
                                    <th>OD (mm)</th>
                                    <th>Wall (mm)</th>
                                    <th>Weight (kg/m)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>1/8</td><td>10.3</td><td>2.41</td><td>0.53</td></tr>
                                <tr class="t-row"><td>1/4</td><td>13.7</td><td>3.02</td><td>0.89</td></tr>
                                <tr class="t-row"><td>3/8</td><td>17.1</td><td>3.20</td><td>1.13</td></tr>
                                <tr class="t-row"><td>1/2</td><td>21.3</td><td>4.78</td><td>1.80</td></tr>
                                <tr class="t-row"><td>3/4</td><td>26.7</td><td>5.56</td><td>3.06</td></tr>
                                <tr class="t-row"><td>1</td><td>33.4</td><td>6.35</td><td>4.70</td></tr>
                                <tr class="t-row"><td>1¼</td><td>42.2</td><td>6.35</td><td>6.40</td></tr>
                                <tr class="t-row"><td>1½</td><td>48.3</td><td>7.14</td><td>8.40</td></tr>
                                <tr class="t-row"><td>2</td><td>60.3</td><td>8.74</td><td>12.80</td></tr>
                                <tr class="t-row"><td>2½</td><td>73.0</td><td>9.53</td><td>17.40</td></tr>
                                <tr class="t-row"><td>3</td><td>88.9</td><td>11.13</td><td>25.00</td></tr>
                                <tr class="t-row"><td>3½</td><td>101.6</td><td>12.70</td><td>32.60</td></tr>
                                <tr class="t-row"><td>4</td><td>114.3</td><td>13.49</td><td>40.30</td></tr>
                                <tr class="t-row"><td>5</td><td>141.3</td><td>15.88</td><td>60.20</td></tr>
                                <tr class="t-row"><td>6</td><td>168.3</td><td>18.26</td><td>84.90</td></tr>
                                <tr class="t-row"><td>8</td><td>219.1</td><td>23.01</td><td>133.60</td></tr>
                                <tr class="t-row"><td>10</td><td>273.1</td><td>28.58</td><td>198.20</td></tr>
                                <tr class="t-row"><td>12</td><td>323.9</td><td>33.32</td><td>267.40</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <h4 class="text-center mb-3" style="color: #db7227;">Schedule XXS</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>NPS</th>
                                    <th>OD (mm)</th>
                                    <th>Wall (mm)</th>
                                    <th>Weight (kg/m)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>1/8</td><td>10.3</td><td>2.41</td><td>0.53</td></tr>
                                <tr class="t-row"><td>1/4</td><td>13.7</td><td>3.02</td><td>0.89</td></tr>
                                <tr class="t-row"><td>3/8</td><td>17.1</td><td>3.20</td><td>1.13</td></tr>
                                <tr class="t-row"><td>1/2</td><td>21.3</td><td>4.78</td><td>1.80</td></tr>
                                <tr class="t-row"><td>3/4</td><td>26.7</td><td>7.47</td><td>3.76</td></tr>
                                <tr class="t-row"><td>1</td><td>33.4</td><td>9.09</td><td>5.95</td></tr>
                                <tr class="t-row"><td>1¼</td><td>42.2</td><td>9.70</td><td>8.88</td></tr>
                                <tr class="t-row"><td>1½</td><td>48.3</td><td>10.16</td><td>11.17</td></tr>
                                <tr class="t-row"><td>2</td><td>60.3</td><td>11.07</td><td>15.76</td></tr>
                                <tr class="t-row"><td>2½</td><td>73.0</td><td>15.88</td><td>25.70</td></tr>
                                <tr class="t-row"><td>3</td><td>88.9</td><td>17.48</td><td>35.30</td></tr>
                                <tr class="t-row"><td>3½</td><td>101.6</td><td>19.05</td><td>46.10</td></tr>
                                <tr class="t-row"><td>4</td><td>114.3</td><td>21.44</td><td>59.30</td></tr>
                                <tr class="t-row"><td>5</td><td>141.3</td><td>25.40</td><td>89.00</td></tr>
                                <tr class="t-row"><td>6</td><td>168.3</td><td>28.58</td><td>123.00</td></tr>
                                <tr class="t-row"><td>8</td><td>219.1</td><td>33.32</td><td>185.30</td></tr>
                                <tr class="t-row"><td>10</td><td>273.1</td><td>38.89</td><td>274.00</td></tr>
                                <tr class="t-row"><td>12</td><td>300</td><td>44.45</td><td>371.00</td></tr>
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

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Material</th>
                                    <th>Grades</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Nickel Alloys</td>
                                    <td>Hastelloy C276, C22, C4, B2, B3, C2000, G3, G30, Hastelloy X; Inconel 600, 601, 625, 690, 718, X750; Incoloy 800, 825, 925; Monel 400, K500, R405; Nickel 200, 201, A286 660</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Titanium Alloys</td>
                                    <td>Grade 1, 2, 4, 4 ELI, 5, 5 ELI, 23, 7, 7NB, 9, 12</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Duplex / Super Duplex</td>
                                    <td>2507, S32760, S31803, 2205</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Austenitic Stainless Steel</td>
                                    <td>304, 310, 316, 316Ti, 317, 321, 347, 309, Nitronic 50, Nitronic 60</td>
                                </tr>
                                <tr class="t-row">
                                    <td>High Strength Stainless Steel</td>
                                    <td>17-4PH, 15-5PH, 14-4PH, 410, 420, 420HC, 430F, 416, 431, 440A, 440B, 440C, 422, 403, 405</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Super Austenitic Stainless Steel</td>
                                    <td>904L, SMO 254, SMO 654, AL-6XN, Alloy 926, 253-MA</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Zirconium / Tantalum</td>
                                    <td>Zirconium 702, 704, 705 / Tantalum R05200, R05252, R05255</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Engineering Steels</td>
                                    <td>EN8, EN9, EN19, EN24, EN31, EN36, EN47, D2, 1045, 1055, 4140, 4130, 4340, P1, P11, P12, P22</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon Steel</td>
                                    <td>ASTM A106, A105, A36, A234 WPB, EN10210, IS2062</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Aluminium Alloys</td>
                                    <td>HE30, 6082-T6, 6061-T6, 5083, 7075, 2014-T6, 6063, 1100, 1200, 6012</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Copper Alloys</td>
                                    <td>CU-NI 70/30, 90/10, C44300, C46400, Aluminium Bronze, NAB, C71520, C71500, C63000, Brass, Naval Brass, Beryllium Copper</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Special Alloys</td>
                                    <td>Tungsten, Carbide, Nitinol, Nimonic, Stellite, Tantalum, Haynes 188, 230, 160, 242</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="applications" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>5. Applications & Uses</h2>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet-fill"></i></div>
                        <h5>Oil & Gas Industry</h5>
                        <p>✔ High-pressure pipelines<br>✔ Offshore platforms<br>✔ Refineries & LNG</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Power Generation</h5>
                        <p>✔ Boiler systems & Steam lines<br>✔ Condensers<br>✔ Heat exchangers</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-flask-fill"></i></div>
                        <h5>Chemical & Petrochemical</h5>
                        <p>✔ Process piping<br>✔ Pressure vessels<br>✔ Chemical reactors</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-water"></i></div>
                        <h5>Marine & Offshore</h5>
                        <p>✔ Shipbuilding<br>✔ Ballast systems<br>✔ Seawater piping</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-building"></i></div>
                        <h5>Construction & Infrastructure</h5>
                        <p>✔ Structural applications<br>✔ Bridges & Support columns</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Food & Pharmaceutical</h5>
                        <p>✔ Hygienic process piping<br>✔ CIP systems<br>✔ Sterile fluid transfer</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="buying-guide" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Buying Guide & Advantages</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-6 mb-4">
                    <div class="p-4 border rounded shadow-sm h-100 bg-white">
                        <h4 class="text-primary mb-3"><i class="bi bi-cart-check-fill me-2"></i>Before selecting seamless pipes, consider:</h4>
                        <ul class="fs-6 list-unstyled">
                            <li class="mb-2">✔ Material grade & Pipe schedule</li>
                            <li class="mb-2">✔ Operating pressure & Service temperature</li>
                            <li class="mb-2">✔ Corrosion requirements</li>
                            <li class="mb-2">✔ Testing & Applicable standards</li>
                            <li class="mb-2">✔ Certification requirements (EN 10204 3.1)</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="p-4 border rounded shadow-sm h-100 bg-white">
                        <h4 class="text-primary mb-3"><i class="bi bi-star-fill me-2"></i>Advantages of Seamless Pipes</h4>
                        <ul class="fs-6 list-unstyled">
                            <li class="mb-2">✔ <strong>Superior Strength:</strong> No weld seam eliminates structural weak points.</li>
                            <li class="mb-2">✔ <strong>Excellent Pressure Resistance:</strong> Suitable for high-pressure service.</li>
                            <li class="mb-2">✔ <strong>Better Corrosion Resistance:</strong> Performs well in aggressive environments.</li>
                            <li class="mb-2">✔ <strong>Enhanced Reliability:</strong> Lower risk of failure in critical applications.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="seamless-vs-welded" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Seamless vs Welded Pipes – Key Differences</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Parameter</th>
                                    <th>Seamless Pipes</th>
                                    <th><a href="{{ route('products.pipes-tubes.welded-pipes') ?? '#' }}" class="text-white text-decoration-underline">Welded Pipes</a></th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Manufacturing</td>
                                    <td>Billet Piercing</td>
                                    <td>Plate/Strip Welding</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Weld Joint</td>
                                    <td>None</td>
                                    <td>Present</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Strength</td>
                                    <td>Higher</td>
                                    <td>Moderate</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Pressure Handling</td>
                                    <td>Excellent</td>
                                    <td>Good</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Corrosion Resistance</td>
                                    <td>Superior</td>
                                    <td>Good</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Cost</td>
                                    <td>Higher</td>
                                    <td>Economical</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Typical Applications</td>
                                    <td>Oil & Gas, Boilers, High Pressure Systems</td>
                                    <td>General Industrial Applications</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="text-center mt-3">
                        📌 <strong>Seamless Pipes</strong> are preferred where reliability, safety, and high-pressure performance are critical.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="manufacturing" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Manufacturing Process of Seamless Pipes</h2>
            </div>

            <div class="row mt-4 justify-content-center">
                <div class="col-md-6 text-center mb-4">
                    <h5 class="fw-bold text-primary mb-3">Hot Finished Seamless Pipe</h5>
                    <p>1️⃣ Raw material billet inspection</p>
                    <p>2️⃣ Billet heating</p>
                    <p>3️⃣ Rotary piercing process</p>
                    <p>4️⃣ Hot rolling and elongation</p>
                    <p>5️⃣ Sizing and shaping</p>
                    <p>6️⃣ Heat treatment & Straightening</p>
                    <p>7️⃣ Final inspection</p>
                </div>
                <div class="col-md-6 text-center mb-4">
                    <h5 class="fw-bold text-primary mb-3">Cold Drawn Seamless Pipe</h5>
                    <p>1️⃣ Seamless mother tube production</p>
                    <p>2️⃣ Pickling and lubrication</p>
                    <p>3️⃣ Cold drawing operation</p>
                    <p>4️⃣ Intermediate annealing</p>
                    <p>5️⃣ Sizing and calibration</p>
                    <p>6️⃣ Surface finishing</p>
                    <p>7️⃣ Testing and inspection</p>
                </div>
                <div class="col-12 text-center mt-3">
                    <p class="fs-6"><em>This manufacturing process ensures uniform wall thickness, excellent concentricity, high strength, and superior pressure-handling capability.</em></p>
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
                    <h4 class="text-center mb-3" style="color: #db7227;">Mechanical Properties of Seamless Pipes</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Material Type</th>
                                    <th>Tensile Strength (MPa)</th>
                                    <th>Yield Strength (MPa)</th>
                                    <th>Elongation (%)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
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

    <section id="tolerances" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2>Dimensional Tolerances</h2>
            </div>
            
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <p class="fs-6 mb-4">Seamless Pipes are manufactured according to ASTM, ASME, API, and EN dimensional requirements.</p>
                    <ul class="list-group list-group-flush border shadow-sm rounded text-start fs-6 mx-auto">
                        <li class="list-group-item"><strong>Outside Diameter (OD):</strong> ±1%</li>
                        <li class="list-group-item"><strong>Wall Thickness:</strong> -12.5% minimum</li>
                        <li class="list-group-item"><strong>Length Tolerance:</strong> ±3 mm (cut lengths)</li>
                        <li class="list-group-item"><strong>Straightness:</strong> As per ASTM specifications</li>
                        <li class="list-group-item"><strong>Ovality:</strong> Controlled within permissible limits</li>
                        <li class="list-group-item"><strong>Concentricity:</strong> Maintained throughout manufacturing</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="testing" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="row mt-4 justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="application-card h-100">
                        <div class="application-icon"><i class="bi bi-tools"></i></div>
                        <h5>Testing & Quality Control</h5>
                        <p>All Seamless Pipes undergo rigorous testing procedures:</p>
                        <ul class="text-start fs-6">
                            <li>Hydrostatic & Ultrasonic Testing (UT)</li>
                            <li>Eddy Current Testing</li>
                            <li>Positive Material Identification (PMI)</li>
                            <li>Hardness & Flattening Test</li>
                            <li>Intergranular Corrosion Test</li>
                            <li>Visual & Dimensional Inspection</li>
                        </ul>
                        <p><strong>📄 Certification:</strong> EN 10204 3.1 Mill Test Certificates available.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-5">
                    <div class="application-card h-100">
                        <div class="application-icon"><i class="bi bi-globe"></i></div>
                        <h5>Export & Supply Coverage</h5>
                        <p>We supply Seamless Pipes across India including Mumbai, Chennai, Ahmedabad, Pune, Hyderabad, Delhi, Bengaluru.</p>
                        <p><strong>We regularly export to:</strong> UAE, Saudi Arabia, Qatar, Oman, Kuwait, Bahrain, South Africa, Europe, and Southeast Asia.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="why-choose-us" class="sec-padd-top sec-padd-bottom">
        <div class="container text-center">
            <div class="section-title center">
                <h2>Why Choose Moksh Tubes & Fittings LLP?</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block h-100">
                        <div class="why-banner-icon"><i class="bi bi-box-seam"></i></div>
                        <h5>Ready Stock Availability</h5>
                        <p>Over 200+ tons of seamless pipes available for immediate dispatch.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block h-100">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Global Sourcing Capability</h5>
                        <p>Access to hard-to-find grades and custom dimensions.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block h-100">
                        <div class="why-banner-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Certified Quality</h5>
                        <p>ISO 9001:2015 quality management system.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block h-100">
                        <div class="why-banner-icon"><i class="bi bi-tags"></i></div>
                        <h5>Competitive Pricing</h5>
                        <p>Cost-effective solutions without compromising quality.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block h-100">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Fast Delivery</h5>
                        <p>Reliable dispatch schedules aligned with project deadlines.</p>
                    </div>
                </div>
                
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block h-100">
                        <div class="why-banner-icon"><i class="bi bi-headset"></i></div>
                        <h5>Technical Support</h5>
                        <p>Expert assistance from material selection to project completion.</p>
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
                                <h4>What are Seamless Pipes?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Seamless Pipes are pipes manufactured without any welded seam, providing superior strength and pressure resistance.</p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What sizes are available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Sizes range from 3 mm to 610 mm OD with various schedules and wall thicknesses.</p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Which industries use Seamless Pipes?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Oil & Gas, Power Generation, Petrochemical, Marine, Construction, Food Processing, and Aerospace industries.</p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What standards do you follow?</h4>
                            </div>
                            <div class="accord-content">
                                <p>ASTM, ASME, API, DIN, and EN standards.</p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Are custom sizes available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Yes, custom diameters, wall thicknesses, and lengths can be supplied.</p>
                            </div>
                        </div>
                        
                        <!-- Q6 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Do you provide test certificates?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Yes, EN 10204 3.1 Mill Test Certificates are available.</p>
                            </div>
                        </div>
                        
                        <!-- Q7 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Do you export Seamless Pipes?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Yes, we export globally with a strong presence in GCC countries.</p>
                            </div>
                        </div>
                        
                        <!-- Q8 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What materials are available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Stainless Steel, Nickel Alloys, Duplex Steel, Titanium, Copper Alloys, Carbon Steel, Alloy Steel, and Specialty Metals.</p>
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
                <h2>Request a Quote</h2>
                <p>
                    Looking for high-quality Seamless Pipes for critical industrial applications?<br>
                    📞 Contact <strong>Moksh Tubes & Fittings LLP</strong> today for pricing, technical assistance, and immediate availability. We deliver precision-engineered Seamless Pipes designed to meet the highest international quality standards.
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
            "name": "Seamless Pipes",
            "description": "Seamless pipes supplier and exporter to UAE, Saudi Arabia, Qatar and Oman",
            "brand": {
                "@type": "Brand",
                "name": "Moksh Tubes & Fittings LLP"
            },
            "manufacturer": {
                "@type": "Organization",
                "name": "Moksh Tubes & Fittings LLP"
            },
            "url": "https://www.mokshtubes.com/products/pipes-tubes/seamless-pipes",
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
                "name": "What are Seamless Pipes?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Seamless Pipes are pipes manufactured without any welded seam, providing superior strength and pressure resistance."
                }
                },
                {
                "@type": "Question",
                "name": "What sizes are available?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Sizes range from 3 mm to 610 mm OD with various schedules and wall thicknesses."
                }
                },
                {
                "@type": "Question",
                "name": "Which industries use Seamless Pipes?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Oil & Gas, Power Generation, Petrochemical, Marine, Construction, Food Processing, and Aerospace industries."
                }
                },
                {
                "@type": "Question",
                "name": "What standards do you follow?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "ASTM, ASME, API, DIN, and EN standards."
                }
                },
                {
                "@type": "Question",
                "name": "Are custom sizes available?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, custom diameters, wall thicknesses, and lengths can be supplied."
                }
                },
                {
                "@type": "Question",
                "name": "Do you provide test certificates?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, EN 10204 3.1 Mill Test Certificates are available."
                }
                },
                {
                "@type": "Question",
                "name": "Do you export Seamless Pipes?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we export globally with a strong presence in GCC countries."
                }
                },
                {
                "@type": "Question",
                "name": "What materials are available?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Stainless Steel, Nickel Alloys, Duplex Steel, Titanium, Copper Alloys, Carbon Steel, Alloy Steel, and Specialty Metals."
                }
                }
            ]
        }]
        @endverbatim
    </script>
@endsection