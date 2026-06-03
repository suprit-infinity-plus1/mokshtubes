@extends('layouts.master')

@section('title', 'U-Bent Tubes Manufacturer, Supplier & Exporter in India | ASTM A179, A192, A213')
@section('meta_description',
    'Leading U-Bent Tubes manufacturer, supplier and exporter in India. Available in Stainless Steel, Carbon Steel, Alloy Steel, Duplex, Super Duplex and Nickel Alloys for heat exchangers, condensers and boilers.')
@section('meta_keywords',
    'u bent tubes manufacturer india, u bent tubes supplier india, u bent tubes exporter india, astm a179 u bent tubes, astm a192 u bent tubes, astm a213 u bent tubes, heat exchanger u tubes, condenser tubes, boiler tubes, stainless steel u bent tubes, duplex steel u bent tubes, nickel alloy u tubes, seamless u bent tubes, welded u bent tubes, u tube heat exchanger tubes')
@section('og_image', asset('assets/images/product/u-bent-tubes.webp'))
@section('og_type', 'article')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url('{{ asset('assets/images/product/u-bent-tubes.webp') }}');">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>U-Bent Tubes Manufacturer, Supplier & Exporter in India</h1>

                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px; max-width: 900px;">
                        U-Bent Tubes are precision-engineered heat transfer tubes specifically designed for shell and tube heat exchangers, condensers, boilers, economizers, and pressure vessel applications. Their U-shaped configuration allows fluid to flow through a single continuous tube, eliminating the need for additional return fittings and reducing potential leakage points. At Moksh Tubes & Fittings LLP, we manufacture and supply premium-quality U-Bent Tubes in Stainless Steel, Carbon Steel, Alloy Steel, Duplex & Super Duplex Stainless Steel, Nickel Alloys, Titanium, and Copper Alloys, conforming to ASTM, ASME, EN, DIN, and BS standards.
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
                What are U-Bent Tubes?
            </h3>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/product/u-bent-tubes.webp') }}" alt="CNC Manufacturing Process of U-Bent Tubes"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4" style="text-align: justify;">
                            <strong class="text-black">U-Bent Tubes</strong> are specialized tubes manufactured by precisely bending straight tubes into a U-shape for use in heat transfer equipment. These tubes are primarily utilized in shell and tube heat exchangers where thermal expansion must be accommodated without additional expansion joints. Their design provides efficient heat transfer, compact equipment layouts, and reduced installation complexity.
                        </p>

                        <p class="fs-6 mb-4" style="text-align: justify;">
                            Industries such as power generation, oil & gas, petrochemical processing, chemical manufacturing, desalination, marine engineering, and HVAC systems extensively utilize U-Bent Tubes due to their excellent performance under high-pressure and high-temperature operating conditions.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            At <strong style="color:black;"><a href="{{ url('/contact-us') }}">Moksh Tubes & Fittings
                                    LLP</a></strong>, we are a trusted manufacturer, supplier, stockist, and exporter of U-Bent Tubes in India. Our products are manufactured using advanced CNC bending technology and undergo stringent quality inspections to ensure dimensional accuracy, minimal wall thinning, low ovality, and excellent mechanical properties. We supply U-Bent Tubes to domestic projects and international markets including UAE, Saudi Arabia, Qatar, Oman, Kuwait, Bahrain, Africa, Europe, and Southeast Asia.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download U-Bent Tubes Datasheet</h3>
            <p class="mb-3">
                Get the complete technical datasheet containing material grades, specifications, dimensions, testing requirements, and application guidelines. Enter your email below to receive the PDF instantly.
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
                <h2>U-Bent Tubes Specifications</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
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
                                    <td>Stainless Steel, Carbon Steel, Alloy Steel, Duplex & Super Duplex Steel, Nickel Alloys, Titanium, Copper Alloys</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Grades</td>
                                    <td>ASTM A179, ASTM A192, ASTM A210, ASTM A213, ASTM A268, ASTM A556, EN 10216-2, BS 3059</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Outer Diameter (OD)</td>
                                    <td>6 mm to 76.2 mm</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Wall Thickness</td>
                                    <td>0.5 mm to 8 mm</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Leg Length</td>
                                    <td>Up to 12 meters</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Bend Radius</td>
                                    <td>Minimum 1.5 × OD or as specified</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Surface Finish</td>
                                    <td>Bright Annealed, Pickled, Passivated, Polished</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Types</td>
                                    <td>Seamless U-Bent Tubes, Welded U-Bent Tubes</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Standards</td>
                                    <td>ASTM, ASME, EN, DIN, BS</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Applications</td>
                                    <td>Heat Exchangers, Boilers, Condensers, Economizers, Pressure Vessels</td>
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
                <h2 class="fw-bold" style="color: #174268;">U-Bent Tubes Weight Chart</h2>
            </div>

            <p class="text-center mb-4">Available in Schedule 5C, Schedule 10C, Schedule 40, Schedule 80, Schedule 160, and Schedule XXC dimensions.</p>

            <div class="row justify-content-center">
                <div class="col-lg-12 mb-5">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle" style="font-size: 14px;">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>NB (mm)</th>
                                    <th>Inches</th>
                                    <th>OD (mm)</th>
                                    <th>Sch 5C<br><small>Wt (kg/m)</small></th>
                                    <th>Sch 10C<br><small>Wt (kg/m)</small></th>
                                    <th>Sch 40C<br><small>Wt (kg/m)</small></th>
                                    <th>Sch 80C<br><small>Wt (kg/m)</small></th>
                                    <th>Sch 160C<br><small>Wt (kg/m)</small></th>
                                    <th>Sch XXC<br><small>Wt (kg/m)</small></th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>3</td><td>1/8</td><td>10.3</td><td>0.2 / 0.01</td><td>0.3 / 0.02</td><td>0.4 / 0.03</td><td>0.6 / 0.04</td><td>0.8 / 0.06</td><td>1.0 / 0.07</td></tr>
                                <tr class="t-row"><td>6</td><td>1/4</td><td>13.7</td><td>0.2 / 0.02</td><td>0.3 / 0.03</td><td>0.4 / 0.04</td><td>0.6 / 0.06</td><td>0.8 / 0.08</td><td>1.0 / 0.10</td></tr>
                                <tr class="t-row"><td>10</td><td>3/8</td><td>17.1</td><td>0.2 / 0.03</td><td>0.3 / 0.04</td><td>0.4 / 0.06</td><td>0.6 / 0.08</td><td>0.8 / 0.11</td><td>1.0 / 0.14</td></tr>
                                <tr class="t-row"><td>15</td><td>1/2</td><td>21.3</td><td>0.2 / 0.04</td><td>0.3 / 0.06</td><td>0.4 / 0.08</td><td>0.6 / 0.12</td><td>0.8 / 0.16</td><td>1.0 / 0.20</td></tr>
                                <tr class="t-row"><td>20</td><td>3/4</td><td>26.7</td><td>0.2 / 0.06</td><td>0.3 / 0.09</td><td>0.4 / 0.12</td><td>0.6 / 0.17</td><td>0.8 / 0.22</td><td>1.0 / 0.28</td></tr>
                                <tr class="t-row"><td>25</td><td>1</td><td>33.4</td><td>0.2 / 0.08</td><td>0.3 / 0.12</td><td>0.4 / 0.17</td><td>0.6 / 0.25</td><td>0.8 / 0.33</td><td>1.0 / 0.41</td></tr>
                                <tr class="t-row"><td>32</td><td>1 1/4</td><td>42.2</td><td>0.2 / 0.13</td><td>0.3 / 0.19</td><td>0.4 / 0.26</td><td>0.6 / 0.38</td><td>0.8 / 0.50</td><td>1.0 / 0.62</td></tr>
                                <tr class="t-row"><td>40</td><td>1 1/2</td><td>48.3</td><td>0.2 / 0.16</td><td>0.3 / 0.24</td><td>0.4 / 0.32</td><td>0.6 / 0.48</td><td>0.8 / 0.63</td><td>1.0 / 0.78</td></tr>
                                <tr class="t-row"><td>50</td><td>2</td><td>60.3</td><td>0.2 / 0.24</td><td>0.3 / 0.36</td><td>0.4 / 0.47</td><td>0.6 / 0.70</td><td>0.8 / 0.93</td><td>1.0 / 1.17</td></tr>
                                <tr class="t-row"><td>65</td><td>2 1/2</td><td>73.0</td><td>0.2 / 0.33</td><td>0.3 / 0.49</td><td>0.4 / 0.65</td><td>0.6 / 0.97</td><td>0.8 / 1.29</td><td>1.0 / 1.63</td></tr>
                                <tr class="t-row"><td>80</td><td>3</td><td>88.9</td><td>0.2 / 0.47</td><td>0.3 / 0.70</td><td>0.4 / 0.93</td><td>0.6 / 1.40</td><td>0.8 / 1.87</td><td>1.0 / 2.36</td></tr>
                                <tr class="t-row"><td>100</td><td>4</td><td>114.3</td><td>0.2 / 0.77</td><td>0.3 / 1.14</td><td>0.4 / 1.52</td><td>0.6 / 2.27</td><td>0.8 / 3.04</td><td>1.0 / 3.82</td></tr>
                                <tr class="t-row"><td>125</td><td>5</td><td>141.3</td><td>0.2 / 1.17</td><td>0.3 / 1.72</td><td>0.4 / 2.30</td><td>0.6 / 3.42</td><td>0.8 / 4.58</td><td>1.0 / 5.76</td></tr>
                                <tr class="t-row"><td>150</td><td>6</td><td>168.3</td><td>0.2 / 1.63</td><td>0.3 / 2.41</td><td>0.4 / 3.23</td><td>0.6 / 4.79</td><td>0.8 / 6.38</td><td>1.0 / 8.02</td></tr>
                                <tr class="t-row"><td>200</td><td>8</td><td>219.1</td><td>0.2 / 2.73</td><td>0.3 / 4.03</td><td>0.4 / 5.40</td><td>0.6 / 8.01</td><td>0.8 / 10.65</td><td>1.0 / 13.33</td></tr>
                                <tr class="t-row"><td>250</td><td>10</td><td>273.1</td><td>0.2 / 4.17</td><td>0.3 / 6.15</td><td>0.4 / 8.23</td><td>0.6 / 12.23</td><td>0.8 / 16.27</td><td>1.0 / 20.35</td></tr>
                                <tr class="t-row"><td>300</td><td>12</td><td>323.9</td><td>0.2 / 5.94</td><td>0.3 / 8.76</td><td>0.4 / 11.71</td><td>0.6 / 17.45</td><td>0.8 / 23.23</td><td>1.0 / 29.05</td></tr>
                                <tr class="t-row"><td>350</td><td>14</td><td>355.6</td><td>0.2 / 7.21</td><td>0.3 / 10.63</td><td>0.4 / 14.23</td><td>0.6 / 21.20</td><td>0.8 / 28.26</td><td>1.0 / 35.35</td></tr>
                                <tr class="t-row"><td>400</td><td>16</td><td>406.4</td><td>0.2 / 9.29</td><td>0.3 / 13.70</td><td>0.4 / 18.35</td><td>0.6 / 27.37</td><td>0.8 / 36.46</td><td>1.0 / 45.59</td></tr>
                                <tr class="t-row"><td>450</td><td>18</td><td>457.2</td><td>0.2 / 11.52</td><td>0.3 / 17.00</td><td>0.4 / 22.78</td><td>0.6 / 34.00</td><td>0.8 / 45.33</td><td>1.0 / 56.70</td></tr>
                                <tr class="t-row"><td>500</td><td>20</td><td>508.0</td><td>0.2 / 13.88</td><td>0.3 / 20.50</td><td>0.4 / 27.50</td><td>0.6 / 41.10</td><td>0.8 / 54.75</td><td>1.0 / 68.45</td></tr>
                                <tr class="t-row"><td>600</td><td>24</td><td>609.6</td><td>0.2 / 18.93</td><td>0.3 / 28.00</td><td>0.4 / 37.50</td><td>0.6 / 56.05</td><td>0.8 / 74.68</td><td>1.0 / 93.95</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">U-Bent Tubes Size Chart</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-6 mb-4">
                    <h4 class="text-center mb-3" style="color: #db7227;">Schedule 5C</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row"><th>NPS</th><th>NB (mm)</th><th>OD (mm)</th><th>WT (mm)</th><th>ID (mm)</th><th>Weight (kg/m)</th></tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>1/2</td><td>15</td><td>21.3</td><td>1.65</td><td>18.0</td><td>0.84</td></tr>
                                <tr class="t-row"><td>3/4</td><td>20</td><td>26.7</td><td>1.65</td><td>23.4</td><td>1.03</td></tr>
                                <tr class="t-row"><td>1</td><td>25</td><td>33.4</td><td>1.65</td><td>30.1</td><td>1.3</td></tr>
                                <tr class="t-row"><td>1 1/4</td><td>32</td><td>42.2</td><td>1.65</td><td>38.9</td><td>1.65</td></tr>
                                <tr class="t-row"><td>1 1/2</td><td>40</td><td>48.3</td><td>1.65</td><td>44.9</td><td>1.91</td></tr>
                                <tr class="t-row"><td>2</td><td>50</td><td>60.3</td><td>1.65</td><td>56.0</td><td>2.4</td></tr>
                                <tr class="t-row"><td>2 1/2</td><td>65</td><td>73.0</td><td>2.11</td><td>68.8</td><td>3.69</td></tr>
                                <tr class="t-row"><td>3</td><td>80</td><td>88.9</td><td>2.11</td><td>84.7</td><td>4.51</td></tr>
                                <tr class="t-row"><td>4</td><td>100</td><td>114.3</td><td>2.11</td><td>110.1</td><td>5.84</td></tr>
                                <tr class="t-row"><td>5</td><td>125</td><td>141.3</td><td>2.77</td><td>135.8</td><td>9.47</td></tr>
                                <tr class="t-row"><td>6</td><td>150</td><td>168.3</td><td>2.77</td><td>162.8</td><td>11.32</td></tr>
                                <tr class="t-row"><td>8</td><td>200</td><td>219.1</td><td>2.77</td><td>213.6</td><td>14.79</td></tr>
                                <tr class="t-row"><td>10</td><td>250</td><td>273.1</td><td>3.4</td><td>266.3</td><td>22.63</td></tr>
                                <tr class="t-row"><td>12</td><td>300</td><td>323.9</td><td>3.56</td><td>317.0</td><td>31.25</td></tr>
                                <tr class="t-row"><td>14</td><td>350</td><td>355.6</td><td>3.96</td><td>347.7</td><td>36.96</td></tr>
                                <tr class="t-row"><td>16</td><td>400</td><td>406.4</td><td>4.19</td><td>398.0</td><td>41.56</td></tr>
                                <tr class="t-row"><td>18</td><td>450</td><td>457.2</td><td>4.57</td><td>448.1</td><td>49.42</td></tr>
                                <tr class="t-row"><td>20</td><td>500</td><td>508.0</td><td>5.54</td><td>496.9</td><td>59.25</td></tr>
                                <tr class="t-row"><td>22</td><td>550</td><td>558.8</td><td>5.54</td><td>547.7</td><td>65.97</td></tr>
                                <tr class="t-row"><td>24</td><td>600</td><td>609.6</td><td>5.54</td><td>598.5</td><td>82.47</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <h4 class="text-center mb-3" style="color: #db7227;">Schedule 10C</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row"><th>NPS</th><th>NB (mm)</th><th>OD (mm)</th><th>WT (mm)</th><th>ID (mm)</th><th>Weight (kg/m)</th></tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>1/2</td><td>15</td><td>21.3</td><td>2.11</td><td>17.1</td><td>1.04</td></tr>
                                <tr class="t-row"><td>3/4</td><td>20</td><td>26.7</td><td>2.11</td><td>22.5</td><td>1.37</td></tr>
                                <tr class="t-row"><td>1</td><td>25</td><td>33.4</td><td>2.77</td><td>27.9</td><td>2.17</td></tr>
                                <tr class="t-row"><td>1 1/4</td><td>32</td><td>42.2</td><td>2.77</td><td>36.7</td><td>2.8</td></tr>
                                <tr class="t-row"><td>1 1/2</td><td>40</td><td>48.3</td><td>2.77</td><td>42.8</td><td>3.25</td></tr>
                                <tr class="t-row"><td>2</td><td>50</td><td>60.3</td><td>2.77</td><td>54.8</td><td>4.12</td></tr>
                                <tr class="t-row"><td>2 1/2</td><td>65</td><td>73.0</td><td>3.05</td><td>66.9</td><td>5.6</td></tr>
                                <tr class="t-row"><td>3</td><td>80</td><td>88.9</td><td>3.05</td><td>82.8</td><td>6.9</td></tr>
                                <tr class="t-row"><td>4</td><td>100</td><td>114.3</td><td>3.05</td><td>108.2</td><td>9.01</td></tr>
                                <tr class="t-row"><td>5</td><td>125</td><td>141.3</td><td>3.4</td><td>134.5</td><td>12.28</td></tr>
                                <tr class="t-row"><td>6</td><td>150</td><td>168.3</td><td>3.4</td><td>161.5</td><td>14.69</td></tr>
                                <tr class="t-row"><td>8</td><td>200</td><td>219.1</td><td>3.76</td><td>211.6</td><td>20.25</td></tr>
                                <tr class="t-row"><td>10</td><td>250</td><td>273.1</td><td>4.19</td><td>264.7</td><td>27.86</td></tr>
                                <tr class="t-row"><td>12</td><td>300</td><td>323.9</td><td>4.57</td><td>314.8</td><td>36.27</td></tr>
                                <tr class="t-row"><td>14</td><td>350</td><td>355.6</td><td>4.78</td><td>346.0</td><td>41.15</td></tr>
                                <tr class="t-row"><td>16</td><td>400</td><td>406.4</td><td>4.78</td><td>396.8</td><td>47.14</td></tr>
                                <tr class="t-row"><td>18</td><td>450</td><td>457.2</td><td>4.78</td><td>447.6</td><td>53.05</td></tr>
                                <tr class="t-row"><td>20</td><td>500</td><td>508.0</td><td>5.54</td><td>496.9</td><td>66.75</td></tr>
                                <tr class="t-row"><td>22</td><td>550</td><td>558.8</td><td>5.54</td><td>547.7</td><td>73.46</td></tr>
                                <tr class="t-row"><td>24</td><td>600</td><td>609.6</td><td>6.35</td><td>596.9</td><td>86.78</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <h4 class="text-center mb-3" style="color: #db7227;">Schedule 40C</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row"><th>NPS</th><th>NB (mm)</th><th>OD (mm)</th><th>WT (mm)</th><th>ID (mm)</th><th>Weight (kg/m)</th></tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>1/8</td><td>3</td><td>10.3</td><td>1.73</td><td>6.84</td><td>~0.37</td></tr>
                                <tr class="t-row"><td>1/4</td><td>6</td><td>13.7</td><td>2.24</td><td>9.22</td><td>~0.84</td></tr>
                                <tr class="t-row"><td>1/2</td><td>15</td><td>21.3</td><td>2.77</td><td>15.7</td><td>~1.27</td></tr>
                                <tr class="t-row"><td>3/4</td><td>20</td><td>26.7</td><td>2.87</td><td>21.0</td><td>~1.69</td></tr>
                                <tr class="t-row"><td>1</td><td>25</td><td>33.4</td><td>3.38</td><td>26.6</td><td>~2.50</td></tr>
                                <tr class="t-row"><td>1 1/4</td><td>32</td><td>42.2</td><td>3.56</td><td>35.1</td><td>~3.39</td></tr>
                                <tr class="t-row"><td>1 1/2</td><td>40</td><td>48.3</td><td>3.68</td><td>41.0</td><td>~4.05</td></tr>
                                <tr class="t-row"><td>2</td><td>50</td><td>60.3</td><td>3.91</td><td>52.5</td><td>~5.44</td></tr>
                                <tr class="t-row"><td>2 1/2</td><td>65</td><td>73.0</td><td>5.16</td><td>62.7</td><td>~8.63</td></tr>
                                <tr class="t-row"><td>3</td><td>80</td><td>88.9</td><td>5.49</td><td>78.9</td><td>~11.3</td></tr>
                                <tr class="t-row"><td>3 1/2</td><td>90</td><td>101.6</td><td>5.74</td><td>90.1</td><td>~13.6</td></tr>
                                <tr class="t-row"><td>4</td><td>100</td><td>114.3</td><td>6.02</td><td>102.3</td><td>~16.1</td></tr>
                                <tr class="t-row"><td>5</td><td>125</td><td>141.3</td><td>6.55</td><td>128.2</td><td>~21.8</td></tr>
                                <tr class="t-row"><td>6</td><td>150</td><td>168.3</td><td>7.11</td><td>154.1</td><td>~28.3</td></tr>
                                <tr class="t-row"><td>8</td><td>200</td><td>219.1</td><td>8.18</td><td>202.7</td><td>~42.6</td></tr>
                                <tr class="t-row"><td>10</td><td>250</td><td>273.0</td><td>9.27</td><td>254.5</td><td>~60.3</td></tr>
                                <tr class="t-row"><td>12</td><td>300</td><td>323.8</td><td>10.31</td><td>303.2</td><td>~79.7</td></tr>
                                <tr class="t-row"><td>14</td><td>350</td><td>355.6</td><td>11.13</td><td>333.4</td><td>~94.6</td></tr>
                                <tr class="t-row"><td>16</td><td>400</td><td>406.4</td><td>12.70</td><td>381.0</td><td>~123.3</td></tr>
                                <tr class="t-row"><td>18</td><td>450</td><td>457.2</td><td>14.27</td><td>428.7</td><td>~155.8</td></tr>
                                <tr class="t-row"><td>20</td><td>500</td><td>508.0</td><td>15.09</td><td>477.8</td><td>~183.4</td></tr>
                                <tr class="t-row"><td>24</td><td>600</td><td>610.0</td><td>17.48</td><td>575.0</td><td>~255.4</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <h4 class="text-center mb-3" style="color: #db7227;">Schedule 80C</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row"><th>NPS</th><th>NB (mm)</th><th>OD (mm)</th><th>WT (mm)</th><th>ID (mm)</th><th>Weight (kg/m)</th></tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>1/8</td><td>3</td><td>10.3</td><td>2.41</td><td>5.48</td><td>~0.47</td></tr>
                                <tr class="t-row"><td>1/4</td><td>6</td><td>13.7</td><td>3.02</td><td>7.66</td><td>~1.06</td></tr>
                                <tr class="t-row"><td>1/2</td><td>15</td><td>21.3</td><td>3.73</td><td>13.84</td><td>~1.61</td></tr>
                                <tr class="t-row"><td>3/4</td><td>20</td><td>26.7</td><td>3.91</td><td>18.88</td><td>~2.34</td></tr>
                                <tr class="t-row"><td>1</td><td>25</td><td>33.4</td><td>4.55</td><td>24.3</td><td>~3.37</td></tr>
                                <tr class="t-row"><td>1 1/4</td><td>32</td><td>42.2</td><td>4.85</td><td>32.5</td><td>~4.66</td></tr>
                                <tr class="t-row"><td>1 1/2</td><td>40</td><td>48.3</td><td>5.08</td><td>38.1</td><td>~5.57</td></tr>
                                <tr class="t-row"><td>2</td><td>50</td><td>60.3</td><td>5.54</td><td>49.2</td><td>~7.57</td></tr>
                                <tr class="t-row"><td>2 1/2</td><td>65</td><td>73.0</td><td>7.01</td><td>59.0</td><td>~11.3</td></tr>
                                <tr class="t-row"><td>3</td><td>80</td><td>88.9</td><td>7.62</td><td>73.7</td><td>~15.7</td></tr>
                                <tr class="t-row"><td>3 1/2</td><td>90</td><td>101.6</td><td>8.08</td><td>85.4</td><td>~19.1</td></tr>
                                <tr class="t-row"><td>4</td><td>100</td><td>114.3</td><td>8.56</td><td>97.2</td><td>~23.0</td></tr>
                                <tr class="t-row"><td>5</td><td>125</td><td>141.3</td><td>9.53</td><td>122.2</td><td>~31.4</td></tr>
                                <tr class="t-row"><td>6</td><td>150</td><td>168.3</td><td>10.97</td><td>146.4</td><td>~41.5</td></tr>
                                <tr class="t-row"><td>8</td><td>200</td><td>219.1</td><td>12.70</td><td>193.7</td><td>~63.6</td></tr>
                                <tr class="t-row"><td>10</td><td>250</td><td>273.1</td><td>15.09</td><td>243.0</td><td>~93.2</td></tr>
                                <tr class="t-row"><td>12</td><td>300</td><td>323.9</td><td>17.48</td><td>288.9</td><td>~124.3</td></tr>
                                <tr class="t-row"><td>14</td><td>350</td><td>355.6</td><td>19.05</td><td>317.5</td><td>~147.2</td></tr>
                                <tr class="t-row"><td>16</td><td>400</td><td>406.4</td><td>21.44</td><td>363.5</td><td>~185.5</td></tr>
                                <tr class="t-row"><td>18</td><td>450</td><td>457.2</td><td>23.83</td><td>409.5</td><td>~227.6</td></tr>
                                <tr class="t-row"><td>20</td><td>500</td><td>508.0</td><td>26.19</td><td>455.6</td><td>~276.5</td></tr>
                                <tr class="t-row"><td>24</td><td>600</td><td>609.6</td><td>28.58</td><td>552.4</td><td>~366.3</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <h4 class="text-center mb-3" style="color: #db7227;">Schedule 160C</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row"><th>NPS</th><th>NB (mm)</th><th>OD (mm)</th><th>WT (mm)</th><th>ID (mm)</th><th>Weight (kg/m)</th></tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>1/2</td><td>15</td><td>21.3</td><td>4.78</td><td>11.7</td><td>~1.97</td></tr>
                                <tr class="t-row"><td>3/4</td><td>20</td><td>26.7</td><td>5.56</td><td>15.6</td><td>~3.09</td></tr>
                                <tr class="t-row"><td>1</td><td>25</td><td>33.4</td><td>6.35</td><td>20.7</td><td>~4.56</td></tr>
                                <tr class="t-row"><td>1 1/4</td><td>32</td><td>42.2</td><td>6.35</td><td>29.5</td><td>~6.09</td></tr>
                                <tr class="t-row"><td>1 1/2</td><td>40</td><td>48.3</td><td>7.14</td><td>34.0</td><td>~7.89</td></tr>
                                <tr class="t-row"><td>2</td><td>50</td><td>60.3</td><td>8.74</td><td>42.8</td><td>~11.5</td></tr>
                                <tr class="t-row"><td>2 1/2</td><td>65</td><td>73.0</td><td>9.53</td><td>53.9</td><td>~15.9</td></tr>
                                <tr class="t-row"><td>3</td><td>80</td><td>88.9</td><td>11.13</td><td>66.6</td><td>~22.1</td></tr>
                                <tr class="t-row"><td>4</td><td>100</td><td>114.3</td><td>13.49</td><td>87.3</td><td>~34.3</td></tr>
                                <tr class="t-row"><td>5</td><td>125</td><td>141.3</td><td>15.88</td><td>109.5</td><td>~49.1</td></tr>
                                <tr class="t-row"><td>6</td><td>150</td><td>168.3</td><td>18.26</td><td>131.8</td><td>~66.9</td></tr>
                                <tr class="t-row"><td>8</td><td>200</td><td>219.1</td><td>23.01</td><td>173.1</td><td>~108.9</td></tr>
                                <tr class="t-row"><td>10</td><td>250</td><td>273.1</td><td>28.58</td><td>216.0</td><td>~168.6</td></tr>
                                <tr class="t-row"><td>12</td><td>300</td><td>323.9</td><td>33.32</td><td>257.3</td><td>~240.4</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <h4 class="text-center mb-3" style="color: #db7227;">Schedule XXC</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row"><th>NPS</th><th>NB (mm)</th><th>OD (mm)</th><th>WT (mm)</th><th>ID (mm)</th><th>Weight (kg/m)</th></tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>1/2</td><td>15</td><td>21.3</td><td>7.47</td><td>6.36</td><td>~2.86</td></tr>
                                <tr class="t-row"><td>3/4</td><td>20</td><td>26.7</td><td>7.82</td><td>11.06</td><td>~4.46</td></tr>
                                <tr class="t-row"><td>1</td><td>25</td><td>33.4</td><td>9.09</td><td>15.22</td><td>~6.56</td></tr>
                                <tr class="t-row"><td>1 1/4</td><td>32</td><td>42.2</td><td>9.70</td><td>22.80</td><td>~9.45</td></tr>
                                <tr class="t-row"><td>1 1/2</td><td>40</td><td>48.3</td><td>10.15</td><td>28.00</td><td>~11.3</td></tr>
                                <tr class="t-row"><td>2</td><td>50</td><td>60.3</td><td>11.07</td><td>38.16</td><td>~15.3</td></tr>
                                <tr class="t-row"><td>2 1/2</td><td>65</td><td>73.0</td><td>14.02</td><td>44.96</td><td>~23.3</td></tr>
                                <tr class="t-row"><td>3</td><td>80</td><td>88.9</td><td>15.24</td><td>58.42</td><td>~30.8</td></tr>
                                <tr class="t-row"><td>4</td><td>100</td><td>114.3</td><td>17.12</td><td>80.06</td><td>~44.1</td></tr>
                                <tr class="t-row"><td>5</td><td>125</td><td>141.3</td><td>19.05</td><td>103.2</td><td>~62.5</td></tr>
                                <tr class="t-row"><td>6</td><td>150</td><td>168.3</td><td>21.95</td><td>124.4</td><td>~84.7</td></tr>
                                <tr class="t-row"><td>8</td><td>200</td><td>219.1</td><td>25.40</td><td>168.3</td><td>~122.6</td></tr>
                                <tr class="t-row"><td>10</td><td>250</td><td>273.1</td><td>31.75</td><td>209.6</td><td>~184.8</td></tr>
                                <tr class="t-row"><td>12</td><td>300</td><td>323.9</td><td>38.10</td><td>247.7</td><td>~260.5</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="seamless-welded" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Seamless vs Welded U-Bent Tubes</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Parameter</th>
                                    <th>Seamless U-Bent Tubes</th>
                                    <th>Welded U-Bent Tubes</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Manufacturing</td>
                                    <td>Extruded Tube</td>
                                    <td>Strip Welded Tube</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Weld Seam</td>
                                    <td>No</td>
                                    <td>Yes</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Pressure Capability</td>
                                    <td>Very High</td>
                                    <td>Moderate</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Temperature Resistance</td>
                                    <td>Excellent</td>
                                    <td>Good</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Strength</td>
                                    <td>Superior</td>
                                    <td>Good</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Cost</td>
                                    <td>Higher</td>
                                    <td>Economical</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Applications</td>
                                    <td>Boilers, Power Plants</td>
                                    <td>Heat Exchangers, Condensers</td>
                                </tr>
                            </tbody>
                        </table>
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
                                    <td><strong>Carbon Steel</strong></td>
                                    <td>ASTM A179, ASTM A192, ASTM A210 Gr A1, ASTM A210 Gr C</td>
                                </tr>
                                <tr class="t-row">
                                    <td><strong>Alloy Steel</strong></td>
                                    <td>ASTM A213 T11, T12, T22, T91, T5, T9</td>
                                </tr>
                                <tr class="t-row">
                                    <td><strong>Stainless Steel</strong></td>
                                    <td>TP304, 304L, 316, 316L, 321, 347, 310, 904L</td>
                                </tr>
                                <tr class="t-row">
                                    <td><strong>Duplex / Super Duplex</strong></td>
                                    <td>UNS S31803, UNS S32205, UNS S32750, UNS S32760</td>
                                </tr>
                                <tr class="t-row">
                                    <td><strong>Nickel Alloys</strong></td>
                                    <td>Inconel 600, 625, Incoloy 800, 825, Monel 400, Hastelloy C22, C276, Alloy 20</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of U-Bent Tubes</h2>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge"></i></div>
                        <h5>1️⃣ Power Generation Industry</h5>
                        <p>✔ Boilers<br>✔ Condensers<br>✔ Economizers<br>✔ Heat Recovery Steam Generators</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>2️⃣ Oil & Gas Industry</h5>
                        <p>✔ Refineries<br>✔ Petrochemical Plants<br>✔ Process Heat Exchangers</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>3️⃣ Chemical Processing Industry</h5>
                        <p>✔ Reactors<br>✔ Evaporators<br>✔ Chemical Cooling Systems</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-water"></i></div>
                        <h5>4️⃣ Marine & Offshore Industry</h5>
                        <p>✔ Seawater Condensers<br>✔ Offshore Heat Exchangers<br>✔ Desalination Plants<br>✔ Brine Heaters<br>✔ Thermal Distillation Systems</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-snow"></i></div>
                        <h5>5️⃣ HVAC & Refrigeration</h5>
                        <p>✔ Cooling Coils<br>✔ Chillers<br>✔ Refrigeration Systems</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="uses" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Uses & Advantages of U-Bent Tubes</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-arrows-collapse"></i></div>
                        <h5>Space Saving Design</h5>
                        <p>Requires less installation space compared to straight tube assemblies.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-thermometer-sun"></i></div>
                        <h5>Improved Heat Transfer</h5>
                        <p>Optimized flow path ensures maximum thermal efficiency.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-shield-lock"></i></div>
                        <h5>Reduced Leakage Risk</h5>
                        <p>Fewer welded joints and fittings minimize potential leak points.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-tools"></i></div>
                        <h5>High Strength</h5>
                        <p>Capable of handling elevated pressure and temperature conditions.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Corrosion Resistance</h5>
                        <p>Available in materials suitable for aggressive industrial environments.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-clock-history"></i></div>
                        <h5>Long Service Life</h5>
                        <p>Designed for reliable operation over extended periods.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="manufacturing" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Manufacturing Process & Quality Control</h2>
            </div>
            
            <p class="text-center mb-4">The manufacturing process of U-Bent Tubes requires strict dimensional control and advanced bending technology to ensure consistent mechanical performance.</p>

            <div class="row mt-4">
                <div class="col-md-6 mb-4">
                    <div class="pe-md-3">
                        <h4 class="mb-3" style="color: #db7227;">Seamless U-Bent Tube Manufacturing</h4>
                        <p>1️⃣ Raw material inspection</p>
                        <p>2️⃣ Tube piercing and manufacturing</p>
                        <p>3️⃣ Solution annealing or heat treatment</p>
                        <p>4️⃣ CNC U-bending operation</p>
                        <p>5️⃣ Stress relieving</p>
                        <p>6️⃣ Surface finishing</p>
                        <p>7️⃣ Hydrostatic testing</p>
                        <p>8️⃣ Final inspection and packaging</p>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="pe-md-3">
                        <h4 class="mb-3" style="color: #db7227;">Welded U-Bent Tube Manufacturing</h4>
                        <p>1️⃣ Strip or plate forming</p>
                        <p>2️⃣ ERW / EFW welding</p>
                        <p>3️⃣ Weld heat treatment</p>
                        <p>4️⃣ Tube sizing</p>
                        <p>5️⃣ CNC bending process</p>
                        <p>6️⃣ NDT testing</p>
                        <p>7️⃣ Surface finishing</p>
                        <p>8️⃣ Final inspection</p>
                    </div>
                </div>
                
                <div class="col-12 mt-4 text-center">
                    <h4 class="mb-3" style="color: #db7227;">Testing & Quality Control</h4>
                    <p>All U-Bent Tubes undergo rigorous quality inspections:</p>
                    <p>✔ Hydrostatic Test | ✔ Eddy Current Test | ✔ Ultrasonic Testing (UT) | ✔ Positive Material Identification (PMI)</p>
                    <p>✔ Hardness Testing | ✔ Bend Test | ✔ Flattening Test | ✔ Visual Inspection</p>
                    <p class="mt-3"><strong>📄 EN 10204 3.1 Mill Test Certificates available.</strong></p>
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
                    <h4 class="text-center mb-3" style="color: #db7227;">Mechanical Properties – U-Bent Tubes</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Standard</th>
                                    <th>Tensile Strength (MPa)</th>
                                    <th>Yield Strength (MPa)</th>
                                    <th>Elongation (%)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>ASTM A179</td>
                                    <td>325</td>
                                    <td>180</td>
                                    <td>35</td>
                                </tr>
                                <tr class="t-row">
                                    <td>ASTM A192</td>
                                    <td>325</td>
                                    <td>180</td>
                                    <td>35</td>
                                </tr>
                                <tr class="t-row">
                                    <td>ASTM A210</td>
                                    <td>415</td>
                                    <td>255</td>
                                    <td>30</td>
                                </tr>
                                <tr class="t-row">
                                    <td>ASTM A213 TP304</td>
                                    <td>515</td>
                                    <td>205</td>
                                    <td>40</td>
                                </tr>
                                <tr class="t-row">
                                    <td>ASTM A213 TP316</td>
                                    <td>515</td>
                                    <td>205</td>
                                    <td>40</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="text-center mt-3">
                        📌 Actual values may vary depending on material grade and heat treatment condition.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="tolerances" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="row justify-content-center g-4">
                <div class="col-md-6 col-lg-5">
                    <div class="application-card h-100">
                        <div class="application-icon"><i class="bi bi-rulers"></i></div>
                        <h5 class="text-center mb-3">Dimensional Tolerances</h5>
                        <p class="text-center mb-4">U-Bent Tubes are manufactured according to international standards and customer specifications.</p>
                        <p><strong>Outside Diameter (OD):</strong> ±1%</p>
                        <p><strong>Wall Thickness:</strong> -12.5% minimum</p>
                        <p><strong>Bend Radius:</strong> As specified</p>
                        <p><strong>Leg Length Tolerance:</strong> ±3 mm</p>
                        <p><strong>Ovality:</strong> Controlled as per ASTM requirements</p>
                        <p><strong>Straight Leg Alignment:</strong> As specified by customer drawings</p>
                        <p class="mt-3 text-muted" style="font-size: 0.9em;">These tolerances ensure proper fitment and reliable performance in critical heat exchanger applications.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-5">
                    <div class="application-card h-100">
                        <div class="application-icon"><i class="bi bi-cart-check"></i></div>
                        <h5 class="text-center mb-3">Buying Guide & Exports</h5>
                        <p>Before selecting U-Bent Tubes, consider:</p>
                        <p>✔ Applicable ASTM or ASME specification<br>✔ Operating pressure and temperature<br>✔ Material grade selection<br>✔ Required bend radius<br>✔ Leg length requirements<br>✔ Surface finish requirements<br>✔ Inspection and certification (EN 10204 3.1)</p>
                        
                        <p class="mt-4 mb-2"><strong>We Supply & Export to:</strong></p>
                        <p>Mumbai, Chennai, Ahmedabad, Pune, Hyderabad, Delhi, Bengaluru.<br>
                        <strong>Global:</strong> UAE, Saudi Arabia, Qatar, Oman, Kuwait, Bahrain, South Africa, Europe, Southeast Asia.</p>
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
            <p class="fs-5 mb-5 text-muted">We deliver precision-engineered U-Bent Tubes designed to meet the highest international quality standards.</p>

            <div class="row g-4 mt-4 text-center justify-content-center">
                <div class="col-sm-6 col-lg-3">
                    <div class="why-banner-block h-100">
                        <div class="why-banner-icon"><i class="bi bi-box-seam"></i></div>
                        <h5>Ready Stock Availability</h5>
                        <p>Large inventory across various grades.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="why-banner-block h-100">
                        <div class="why-banner-icon"><i class="bi bi-layers"></i></div>
                        <h5>Extensive Grade Range</h5>
                        <p>Available in SS, CS, AS, Duplex, & Nickel Alloys.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="why-banner-block h-100">
                        <div class="why-banner-icon"><i class="bi bi-globe"></i></div>
                        <h5>Export Expertise</h5>
                        <p>Serving global markets with reliable shipping.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="why-banner-block h-100">
                        <div class="why-banner-icon"><i class="bi bi-tags"></i></div>
                        <h5>Competitive Pricing</h5>
                        <p>Direct manufacturer pricing.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="why-banner-block h-100">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Fast Delivery</h5>
                        <p>Quick processing and dispatch.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="why-banner-block h-100">
                        <div class="why-banner-icon"><i class="bi bi-file-earmark-check"></i></div>
                        <h5>Complete Traceability</h5>
                        <p>Full documentation and MTCs provided.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="why-banner-block h-100">
                        <div class="why-banner-icon"><i class="bi bi-headset"></i></div>
                        <h5>Technical Support</h5>
                        <p>Expert guidance for your project.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="why-banner-block h-100">
                        <div class="why-banner-icon"><i class="bi bi-award"></i></div>
                        <h5>International Standards</h5>
                        <p>Conforming to ASTM, ASME, EN, DIN, and BS.</p>
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
                                <h4>What are U-Bent Tubes used for?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    U-Bent Tubes are primarily used in heat exchangers, condensers, boilers, and thermal transfer systems.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What materials are available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Stainless Steel, Carbon Steel, Alloy Steel, Duplex Steel, Nickel Alloys, Titanium, and Copper Alloys.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Are seamless U-Bent Tubes available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Yes, both seamless and welded U-Bent Tubes are available.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What standards do you supply?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    ASTM, ASME, EN, DIN, and BS specifications.
                                </p>
                            </div>
                        </div>
                        
                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What is the maximum leg length available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Up to 12 meters or custom lengths as required.
                                </p>
                            </div>
                        </div>
                        
                        <!-- Q6 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Do you provide test certificates?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Yes, EN 10204 3.1 certificates are supplied upon request.
                                </p>
                            </div>
                        </div>

                        <!-- Q7 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Do you export U-Bent Tubes?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Yes, we export globally, especially to GCC countries and international EPC projects.
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
                    Looking for U-Bent Tubes for industrial or export projects?<br>
                    📞 Call: +91 97695 84950<br>
                    🌐 <strong>Moksh Tubes & Fittings LLP</strong> - Precision piping solutions you can trust.
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
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What are U-Bent Tubes?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "U-Bent Tubes are specialized tubes manufactured by precisely bending straight tubes into a U-shape for use in heat transfer equipment like shell and tube heat exchangers."
          }
        },
        {
          "@type": "Question",
          "name": "What are U-Bent Tubes used for?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "U-Bent Tubes are primarily used in heat exchangers, condensers, boilers, and thermal transfer systems."
          }
        },
        {
          "@type": "Question",
          "name": "What materials are available for U-Bent Tubes?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Stainless Steel, Carbon Steel, Alloy Steel, Duplex Steel, Nickel Alloys, Titanium, and Copper Alloys."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between seamless and welded U-Bent Tubes?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Seamless U-Bent Tubes have no weld seam, withstand higher pressures and temperatures, but cost more. Welded U-Bent Tubes are economical, good for moderate pressures, and have a welded seam."
          }
        },
        {
          "@type": "Question",
          "name": "What standards are available for U-Bent Tubes?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "ASTM, ASME, EN, DIN, and BS specifications including ASTM A179, ASTM A192, and ASTM A213."
          }
        },
        {
          "@type": "Question",
          "name": "Do you provide EN 10204 3.1 certification?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, EN 10204 3.1 certificates are supplied upon request for all our tubes."
          }
        },
        {
          "@type": "Question",
          "name": "What is the maximum leg length available?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Up to 12 meters or custom lengths as required."
          }
        },
        {
          "@type": "Question",
          "name": "Do you export U-Bent Tubes worldwide?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we export globally, especially to GCC countries like UAE, Saudi Arabia, Qatar, Oman, Kuwait, Bahrain, and international EPC projects."
          }
        }
      ]
    }
    @endverbatim
    </script>
@endsection