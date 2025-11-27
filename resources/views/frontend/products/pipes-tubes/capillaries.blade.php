@extends('layouts.master')
@section('title', 'Stainless Steel & Nickel Alloy Capillary Tubes – Moksh Tubes') <!-- 70 characters -->
@section('meta_description',
    'Moksh Tubes provides premium capillary tubes with precision, durability, and reliability
    for industrial, medical, and high-performance applications.')
    @section('og_image', asset('assets/images/product/capillary-tubes.webp'))
@section('og_type', 'article')
@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/product/capillary-tubes.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>High Precision Capillary Tubes for Industrial Use</h1> <!-- 52 characters -->
                </div>
            </div>
        </div>
    </section>



    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Capillary Tubes</h2>
            </div>

            <div class="row align-items-center">
                <!-- Left Image -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/product/capillary-tubes.webp') }}" alt="Capillary Tubes"
                        class="img-fluid rounded shadow-sm" width="550" height="350" loading="lazy">
                </div>

                <!-- Right Content -->
                <div class="col-md-6">
                    <p class="fs-6 mb-3 text-justify">
                        <strong class="text-black">Capillary Tubes</strong> Capillary Tubes are precision-engineered tubing
                        <a href="{{ route('products') }}">products</a> with extremely small diameters designed for
                        applications requiring high accuracy,
                        controlled flow, and superior surface finish. These tubes are widely used in medical,
                        instrumentation, refrigeration, and chemical industries where micro level precision and reliability
                        are essential.
                    </p>
                    <p class="fs-6 mb-3 text-justify">
                        Made from high-quality <a href="{{ route('materials.super-Austenitic-Stainless-Steel') }}">stainless
                            steel</a>,<a href="{{ route('materials.nickel-Based-Superalloys') }}"> nickel alloys</a>, <a
                            href="{{ route('materials.titanium') }}">titanium</a>, and other specialty materials,
                        capillary tubes offer excellent corrosion resistance, mechanical <a
                            href="{{ route('materials.high-strength-stainless-steel') }}">strength</a>, and durability.
                        Their
                        tight dimensional tolerances and smooth internal surfaces make them indispensable for sensitive
                        applications like chromatography, thermocouples, and hydraulic systems.
                    </p>
                    <p class="fs-6 mb-3 text-justify">
                        <strong class="text-black"> <a href="{{ route('index') }}">Moksh Tubes & Fittings LLP</a></strong>,
                        we produce capillaries to ASTM,
                        ASME, and
                        international standards,
                        ensuring consistency, quality, and performance. Our advanced manufacturing techniques, including
                        cold drawing, bright annealing, and precision polishing, ensure capillary tubes meet the most
                        demanding industry requirements.
                    </p>
                </div>
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
                                    <td>Material</td>
                                    <td>Stainless Steel, <a href="{{ route('materials.duplex-and-super-duplex') }}">Duplex &
                                            Super Duplex</a>, Nickel Alloys, Inconel, <a
                                            href="{{ route('materials.monel') }}">Monel</a>, Titanium,
                                        Copper Alloys</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Grades</td>
                                    <td>Available in ASTM/ASME certified grades across all mentioned alloys</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Outer Diameter (OD)</td>
                                    <td>0.3 mm to 8 mm (custom options available)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Wall Thickness</td>
                                    <td>0.05 mm to 1.0 mm (tolerances as per application needs)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Lengths</td>
                                    <td>Standard up to 6 meters or custom coil lengths supplied</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Finishes</td>
                                    <td>Bright Annealed, Electro Polished, Matte, Mechanical Polished</td>
                                </tr>
                                <tr class="t-row">
                                    <td>From</td>
                                    <td>Coiled, Straight Lengths, Cut to Length Precision Pieces</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Standards</td>
                                    <td>ASTM A213, ASTM A269, ASTM B338, DIN, EN standards</td>
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
                            <th colspan="2">Nominal Bore Chart</th>
                            <th rowspan="2">Outside Diameter (O.D) <br> (mm)</th>
                            <th colspan="2">Schedule 5C</th>
                            <th colspan="2">Schedule 10C</th>
                            <th colspan="2">Schedule 40C</th>
                            <th colspan="2">Schedule 80C</th>
                            <th colspan="2">Schedule 160C</th>
                            <th colspan="2">Schedule XXC</th>
                        </tr>
                        <tr class="t-row">
                            <th>mm</th>
                            <th>inches</th>
                            <th>Wt</th>
                            <th>Weight</th>
                            <th>Wt</th>
                            <th>Weight</th>
                            <th>Wt</th>
                            <th>Weight</th>
                            <th>Wt</th>
                            <th>Weight</th>
                            <th>Wt</th>
                            <th>Weight</th>
                            <th>Wt</th>
                            <th>Weight</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row">
                            <td>3</td>

                            <td>1/8</td>
                            <td>10.3</td>
                            <td>0.2</td>
                            <td>0.01</td>
                            <td>0.3</td>
                            <td>0.02</td>
                            <td>0.4</td>
                            <td>0.03</td>
                            <td>0.6</td>
                            <td>0.04</td>
                            <td>0.8</td>
                            <td>0.06</td>
                            <td>1.0</td>
                            <td>0.07</td>

                        </tr>

                        <tr class="t-row">
                            <td>6</td>

                            <td>1/4</td>
                            <td>13.7</td>
                            <td>0.2</td>
                            <td>0.02</td>
                            <td>0.3</td>
                            <td>0.03</td>
                            <td>0.4</td>
                            <td>0.04</td>
                            <td>0.6</td>
                            <td>0.06</td>
                            <td>0.8</td>
                            <td>0.08</td>
                            <td>1.0</td>
                            <td>0.10</td>

                        </tr>
                        <tr class="t-row">
                            <td>10</td>
                            <td>3/8</td>
                            <td>17.1</td>
                            <td>0.2</td>
                            <td>0.03</td>
                            <td>0.3</td>
                            <td>0.04</td>
                            <td>0.4</td>
                            <td>0.06</td>
                            <td>0.6</td>
                            <td>0.08</td>
                            <td>0.8</td>
                            <td>0.11</td>
                            <td>1.0</td>
                            <td>0.14</td>

                        </tr>
                        <tr class="t-row">
                            <td>15</td>
                            <td>1/2</td>
                            <td>21.3</td>
                            <td>0.2</td>
                            <td>0.04</td>
                            <td>0.3</td>
                            <td>0.06</td>
                            <td>0.4</td>
                            <td>0.08</td>
                            <td>0.6</td>
                            <td>0.12</td>
                            <td>0.8</td>
                            <td>0.16</td>
                            <td>1.0</td>
                            <td>0.20</td>

                        </tr>
                        <tr class="t-row">
                            <td>20</td>
                            <td>3/4</td>
                            <td>26.7</td>
                            <td>0.2</td>
                            <td>0.06</td>
                            <td>0.3</td>
                            <td>0.09</td>
                            <td>0.4</td>
                            <td>0.12</td>
                            <td>0.6</td>
                            <td>0.17</td>
                            <td>0.8</td>
                            <td>0.22</td>
                            <td>1.0</td>
                            <td>0.28</td>
                        </tr>
                        <tr class="t-row">
                            <td>25</td>
                            <td>1</td>
                            <td>33.4</td>
                            <td>0.2</td>
                            <td>0.08</td>
                            <td>0.3</td>
                            <td>0.12</td>
                            <td>0.4</td>
                            <td>0.17</td>
                            <td>0.6</td>
                            <td>0.25</td>
                            <td>0.8</td>
                            <td>0.33</td>
                            <td>1.0</td>
                            <td>0.41</td>
                        </tr>
                        <tr class="t-row">
                            <td>32</td>
                            <td>11.4</td>
                            <td>42.2</td>
                            <td>0.2</td>
                            <td>0.13</td>
                            <td>0.3</td>
                            <td>0.19</td>
                            <td>0.4</td>
                            <td>0.26</td>
                            <td>0.6</td>
                            <td>0.38</td>
                            <td>0.8</td>
                            <td>0.50</td>
                            <td>1.0</td>
                            <td>0.62</td>
                        </tr>
                        <tr class="t-row">
                            <td>40</td>
                            <td>1 1/2</td>
                            <td>48.3</td>
                            <td>0.2</td>
                            <td>0.16</td>
                            <td>0.3</td>
                            <td>0.24</td>
                            <td>0.4</td>
                            <td>0.32</td>
                            <td>0.6</td>
                            <td>0.48</td>
                            <td>0.8</td>
                            <td>0.63</td>
                            <td>1.0</td>
                            <td>0.78</td>
                        </tr>
                        <tr class="t-row">
                            <td>50</td>
                            <td>2</td>
                            <td>60.3</td>
                            <td>0.2</td>
                            <td>0.24</td>
                            <td>0.3</td>
                            <td>0.36</td>
                            <td>0.4</td>
                            <td>0.47</td>
                            <td>0.6</td>
                            <td>0.70</td>
                            <td>0.8</td>
                            <td>0.93</td>
                            <td>1.0</td>
                            <td>1.17</td>
                        </tr>
                        <tr class="t-row">
                            <td>65</td>
                            <td>2 1/2</td>
                            <td>73.00</td>
                            <td>0.2</td>
                            <td>0.33</td>
                            <td>0.3</td>
                            <td>0.49</td>
                            <td>0.4</td>
                            <td>0.65</td>
                            <td>0.6</td>
                            <td>0.97</td>
                            <td>0.8</td>
                            <td>1.29</td>
                            <td>1.0</td>
                            <td>1.63</td>
                        </tr>
                        <tr class="t-row">
                            <td>80</td>
                            <td>3</td>
                            <td>88.9</td>
                            <td>0.2</td>
                            <td>0.47</td>
                            <td>0.3</td>
                            <td>0.70</td>
                            <td>0.4</td>
                            <td>0.93</td>
                            <td>0.6</td>
                            <td>1.40</td>
                            <td>0.8</td>
                            <td>1.87</td>
                            <td>1.0</td>
                            <td>2.36</td>
                        </tr>
                        <tr class="t-row">
                            <td>100</td>
                            <td>4</td>
                            <td>114.3</td>
                            <td>0.2</td>
                            <td>0.77</td>
                            <td>0.3</td>
                            <td>1.14</td>
                            <td>0.4</td>
                            <td>1.52</td>
                            <td>0.6</td>
                            <td>2.27</td>
                            <td>0.8</td>
                            <td>3.04</td>
                            <td>1.0</td>
                            <td>3.82</td>
                        </tr>
                        <tr class="t-row">
                            <td>125</td>
                            <td>5</td>
                            <td>141.3</td>
                            <td>0.2</td>
                            <td>1.17</td>
                            <td>0.3</td>
                            <td>1.72</td>
                            <td>0.4</td>
                            <td>2.30</td>
                            <td>0.6</td>
                            <td>3.42</td>
                            <td>0.8</td>
                            <td>4.58</td>
                            <td>1.0</td>
                            <td>5.76</td>
                        </tr>
                        <tr class="t-row">
                            <td>150</td>
                            <td>6</td>
                            <td>168.3</td>
                            <td>0.2</td>
                            <td>1.63</td>
                            <td>0.3</td>
                            <td>2.41</td>
                            <td>0.4</td>
                            <td>3.23</td>
                            <td>0.6</td>
                            <td>4.79</td>
                            <td>0.8</td>
                            <td>6.38</td>
                            <td>1.0</td>
                            <td>8.02</td>
                        </tr>
                        <tr class="t-row">
                            <td>200</td>
                            <td>8</td>
                            <td>219.1</td>
                            <td>0.2</td>
                            <td>2.73</td>
                            <td>0.3</td>
                            <td>4.03</td>
                            <td>0.4</td>
                            <td>5.40</td>
                            <td>0.6</td>
                            <td>8.01</td>
                            <td>0.8</td>
                            <td>10.65</td>
                            <td>1.0</td>
                            <td>13.33</td>
                        </tr>
                        <tr class="t-row">
                            <td>250</td>
                            <td>10</td>
                            <td>273.1</td>
                            <td>0.2</td>
                            <td>4.17</td>
                            <td>0.3</td>
                            <td>6.15</td>
                            <td>0.4</td>
                            <td>8.23</td>
                            <td>0.6</td>
                            <td>12.23</td>
                            <td>0.8</td>
                            <td>16.27</td>
                            <td>1.0</td>
                            <td>20.35</td>
                        </tr>
                        <tr class="t-row">
                            <td>300</td>
                            <td>12</td>
                            <td>323.9</td>
                            <td>0.2</td>
                            <td>31.25</td>
                            <td>4.57</td>
                            <td>36.00</td>
                            <td>9.52</td>
                            <td>73.88</td>
                            <td>12.7</td>
                            <td>132.0</td>
                            <td>33.32</td>
                            <td>238.76</td>
                            <td>25.40</td>
                            <td>186.97</td>
                        </tr>
                        <tr class="t-row">
                            <td>300</td>
                            <td>12</td>
                            <td>323.9</td>
                            <td>0.2</td>
                            <td>5.94</td>
                            <td>0.3</td>
                            <td>8.76</td>
                            <td>0.4</td>
                            <td>11.71</td>
                            <td>0.6</td>
                            <td>17.45</td>
                            <td>0.8</td>
                            <td>23.23</td>
                            <td>1.0</td>
                            <td>29.05</td>
                        </tr>
                        <tr class="t-row">
                            <td>350</td>
                            <td>14</td>
                            <td>355.6</td>
                            <td>0.2</td>
                            <td>7.21</td>
                            <td>0.3</td>
                            <td>10.63</td>
                            <td>0.4</td>
                            <td>14.23</td>
                            <td>0.6</td>
                            <td>21.20</td>
                            <td>0.8</td>
                            <td>28.26</td>
                            <td>1.0</td>
                            <td>35.35</td>
                        </tr>
                        <tr class="t-row">
                            <td>400</td>
                            <td>16</td>
                            <td>406.4</td>
                            <td>0.2</td>
                            <td>9.29</td>
                            <td>0.3</td>
                            <td>13.70</td>
                            <td>0.4</td>
                            <td>18.35</td>
                            <td>0.6</td>
                            <td>27.37</td>
                            <td>0.8</td>
                            <td>36.46</td>
                            <td>1.0</td>
                            <td>45.59</td>
                        </tr>
                        <tr class="t-row">
                            <td>450</td>
                            <td>18</td>
                            <td>457.2</td>
                            <td>0.2</td>
                            <td>11.52</td>
                            <td>0.3</td>
                            <td>17.00</td>
                            <td>0.4</td>
                            <td>22.78</td>
                            <td>0.6</td>
                            <td>34.00</td>
                            <td>0.8</td>
                            <td>45.33</td>
                            <td>1.0</td>
                            <td>56.70</td>
                        </tr>
                        <tr class="t-row">
                            <td>500</td>
                            <td>20</td>
                            <td>508.0</td>
                            <td>0.2</td>
                            <td>13.88</td>
                            <td>0.3</td>
                            <td>20.50</td>
                            <td>0.4</td>
                            <td>27.50</td>
                            <td>0.6</td>
                            <td>41.10</td>
                            <td>0.8</td>
                            <td>54.75</td>
                            <td>1.0</td>
                            <td>68.45</td>
                        </tr>
                        <tr class="t-row">
                            <td>600</td>
                            <td>24</td>
                            <td>609.6</td>
                            <td>0.2</td>
                            <td>18.93</td>
                            <td>0.3</td>
                            <td>28.00</td>
                            <td>0.4</td>
                            <td>37.50</td>
                            <td>0.6</td>
                            <td>56.05</td>
                            <td>0.8</td>
                            <td>74.68</td>
                            <td>1.0</td>
                            <td>93.95</td>
                        </tr>

                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="bg-light" style="padding-top: 80px;">
        <div class="container">

            <!-- Parent Title -->
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Size Charts</h2>
            </div>

            <!-- Child Title -->
            <div class="section-title center mb-3">
                <h4 class="text-center mb-0" style="color: #db7227;">Schedule 5C – Size Chart (ASME B36.19)</h4>
            </div>


            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>OD (mm)</th>
                                    <th>Wall Thickness (mm)</th>
                                    <th>Weight (kg/m)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>0.30</td>
                                    <td>0.05</td>
                                    <td>0.00028</td>
                                </tr>
                                <tr class="t-row">
                                    <td>0.50</td>
                                    <td>0.05</td>
                                    <td>0.00045</td>
                                </tr>
                                <tr class="t-row">
                                    <td>0.80</td>
                                    <td>0.08</td>
                                    <td>0.00080</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1.00</td>
                                    <td>0.10</td>
                                    <td>0.00140</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1.50</td>
                                    <td>0.12</td>
                                    <td>0.00250</td>
                                </tr>
                                <tr class="t-row">
                                    <td>2.00</td>
                                    <td>0.15</td>
                                    <td>0.00370</td>
                                </tr>
                                <tr class="t-row">
                                    <td>2.50</td>
                                    <td>0.20</td>
                                    <td>0.00620</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3.00</td>
                                    <td>0.25</td>
                                    <td>0.00970</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3.50</td>
                                    <td>0.30</td>
                                    <td>0.01380</td>
                                </tr>
                                <tr class="t-row">
                                    <td>4.00</td>
                                    <td>0.35</td>
                                    <td>0.01890</td>
                                </tr>
                                <tr class="t-row">
                                    <td>5.00</td>
                                    <td>0.40</td>
                                    <td>0.02700</td>
                                </tr>
                                <tr class="t-row">
                                    <td>6.00</td>
                                    <td>0.50</td>
                                    <td>0.04150</td>
                                </tr>
                                <tr class="t-row">
                                    <td>8.00</td>
                                    <td>0.50</td>
                                    <td>0.05500</td>
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
            <!-- Child Title -->
            <div class="section-title center mb-3">
                <h4 class="text-center mb-0" style="color: #db7227;">Schedule 10C – Size Chart (ASME B36.19)</h4>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>OD (mm)</th>
                                    <th>Wall Thickness (mm)</th>
                                    <th>Weight (kg/m)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>0.30</td>
                                    <td>0.06</td>
                                    <td>0.00033</td>
                                </tr>
                                <tr class="t-row">
                                    <td>0.50</td>
                                    <td>0.08</td>
                                    <td>0.00055</td>
                                </tr>
                                <tr class="t-row">
                                    <td>0.80</td>
                                    <td>0.10</td>
                                    <td>0.00095</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1.00</td>
                                    <td>0.12</td>
                                    <td>0.00160</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1.50</td>
                                    <td>0.15</td>
                                    <td>0.00290</td>
                                </tr>
                                <tr class="t-row">
                                    <td>2.00</td>
                                    <td>0.20</td>
                                    <td>0.00480</td>
                                </tr>
                                <tr class="t-row">
                                    <td>2.50</td>
                                    <td>0.25</td>
                                    <td>0.00750</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3.00</td>
                                    <td>0.30</td>
                                    <td>0.01100</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3.50</td>
                                    <td>0.35</td>
                                    <td>0.01520</td>
                                </tr>
                                <tr class="t-row">
                                    <td>4.00</td>
                                    <td>0.40</td>
                                    <td>0.02040</td>
                                </tr>
                                <tr class="t-row">
                                    <td>5.00</td>
                                    <td>0.50</td>
                                    <td>0.03120</td>
                                </tr>
                                <tr class="t-row">
                                    <td>6.00</td>
                                    <td>0.60</td>
                                    <td>0.04900</td>
                                </tr>
                                <tr class="t-row">
                                    <td>8.00</td>
                                    <td>0.60</td>
                                    <td>0.06280</td>
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
            <!-- Child Title -->
            <div class="section-title center mb-3">
                <h4 class="text-center mb-0" style="color: #db7227;">Schedule 40C – Size Chart (ASME B36.19)</h4>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>OD (mm)</th>
                                    <th>Wall Thickness (mm)</th>
                                    <th>Weight (kg/m)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>0.50</td>
                                    <td>0.10</td>
                                    <td>0.00065</td>
                                </tr>
                                <tr class="t-row">
                                    <td>0.80</td>
                                    <td>0.12</td>
                                    <td>0.00110</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1.00</td>
                                    <td>0.15</td>
                                    <td>0.00200</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1.50</td>
                                    <td>0.20</td>
                                    <td>0.00390</td>
                                </tr>
                                <tr class="t-row">
                                    <td>2.00</td>
                                    <td>0.25</td>
                                    <td>0.00610</td>
                                </tr>
                                <tr class="t-row">
                                    <td>2.50</td>
                                    <td>0.30</td>
                                    <td>0.00950</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3.00</td>
                                    <td>0.35</td>
                                    <td>0.01370</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3.50</td>
                                    <td>0.40</td>
                                    <td>0.01880</td>
                                </tr>
                                <tr class="t-row">
                                    <td>4.00</td>
                                    <td>0.45</td>
                                    <td>0.02450</td>
                                </tr>
                                <tr class="t-row">
                                    <td>5.00</td>
                                    <td>0.50</td>
                                    <td>0.03340</td>
                                </tr>
                                <tr class="t-row">
                                    <td>6.00</td>
                                    <td>0.60</td>
                                    <td>0.05350</td>
                                </tr>
                                <tr class="t-row">
                                    <td>8.00</td>
                                    <td>0.70</td>
                                    <td>0.07900</td>
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
            <!-- Child Title -->
            <div class="section-title center mb-3">
                <h4 class="text-center mb-0" style="color: #db7227;">Schedule 80C – Size Chart (ASME B36.19)</h4>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>OD (mm)</th>
                                    <th>Wall Thickness (mm)</th>
                                    <th>Weight (kg/m)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>0.50</td>
                                    <td>0.12</td>
                                    <td>0.00075</td>
                                </tr>
                                <tr class="t-row">
                                    <td>0.80</td>
                                    <td>0.15</td>
                                    <td>0.00130</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1.00</td>
                                    <td>0.20</td>
                                    <td>0.00240</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1.50</td>
                                    <td>0.25</td>
                                    <td>0.00460</td>
                                </tr>
                                <tr class="t-row">
                                    <td>2.00</td>
                                    <td>0.30</td>
                                    <td>0.00730</td>
                                </tr>
                                <tr class="t-row">
                                    <td>2.50</td>
                                    <td>0.35</td>
                                    <td>0.01120</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3.00</td>
                                    <td>0.40</td>
                                    <td>0.01550</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3.50</td>
                                    <td>0.50</td>
                                    <td>0.02150</td>
                                </tr>
                                <tr class="t-row">
                                    <td>4.00</td>
                                    <td>0.60</td>
                                    <td>0.03010</td>
                                </tr>
                                <tr class="t-row">
                                    <td>5.00</td>
                                    <td>0.70</td>
                                    <td>0.04260</td>
                                </tr>
                                <tr class="t-row">
                                    <td>6.00</td>
                                    <td>0.80</td>
                                    <td>0.06100</td>
                                </tr>
                                <tr class="t-row">
                                    <td>8.00</td>
                                    <td>1.00</td>
                                    <td>0.09000</td>
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
            <!-- Child Title -->
            <div class="section-title center mb-3">
                <h4 class="text-center mb-0" style="color: #db7227;">Schedule 160C – Size Chart (ASME B36.19)</h4>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>OD (mm)</th>
                                    <th>Wall Thickness (mm)</th>
                                    <th>Weight (kg/m)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>0.80</td>
                                    <td>0.20</td>
                                    <td>0.00165</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1.00</td>
                                    <td>0.25</td>
                                    <td>0.00280</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1.50</td>
                                    <td>0.30</td>
                                    <td>0.00510</td>
                                </tr>
                                <tr class="t-row">
                                    <td>2.00</td>
                                    <td>0.35</td>
                                    <td>0.00820</td>
                                </tr>
                                <tr class="t-row">
                                    <td>2.50</td>
                                    <td>0.40</td>
                                    <td>0.01250</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3.00</td>
                                    <td>0.50</td>
                                    <td>0.01900</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3.50</td>
                                    <td>0.60</td>
                                    <td>0.02600</td>
                                </tr>
                                <tr class="t-row">
                                    <td>4.00</td>
                                    <td>0.70</td>
                                    <td>0.03650</td>
                                </tr>
                                <tr class="t-row">
                                    <td>5.00</td>
                                    <td>0.80</td>
                                    <td>0.05040</td>
                                </tr>
                                <tr class="t-row">
                                    <td>6.00</td>
                                    <td>0.90</td>
                                    <td>0.07180</td>
                                </tr>
                                <tr class="t-row">
                                    <td>8.00</td>
                                    <td>1.20</td>
                                    <td>0.12200</td>
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
            <!-- Child Title -->
            <div class="section-title center mb-3">
                <h4 class="text-center mb-0" style="color: #db7227;">Schedule XXC – Size Chart (ASME B36.19)</h4>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>OD (mm)</th>
                                    <th>Wall Thickness (mm)</th>
                                    <th>Weight (kg/m)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>0.80</td>
                                    <td>0.25</td>
                                    <td>0.00210</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1.00</td>
                                    <td>0.30</td>
                                    <td>0.00350</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1.50</td>
                                    <td>0.40</td>
                                    <td>0.00670</td>
                                </tr>
                                <tr class="t-row">
                                    <td>2.00</td>
                                    <td>0.50</td>
                                    <td>0.01080</td>
                                </tr>
                                <tr class="t-row">
                                    <td>2.50</td>
                                    <td>0.60</td>
                                    <td>0.01650</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3.00</td>
                                    <td>0.70</td>
                                    <td>0.02350</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3.50</td>
                                    <td>0.80</td>
                                    <td>0.03200</td>
                                </tr>
                                <tr class="t-row">
                                    <td>4.00</td>
                                    <td>1.00</td>
                                    <td>0.04900</td>
                                </tr>
                                <tr class="t-row">
                                    <td>5.00</td>
                                    <td>1.20</td>
                                    <td>0.07200</td>
                                </tr>
                                <tr class="t-row">
                                    <td>6.00</td>
                                    <td>1.50</td>
                                    <td>0.11200</td>
                                </tr>
                                <tr class="t-row">
                                    <td>8.00</td>
                                    <td>2.00</td>
                                    <td>0.18000</td>
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
                <h4 class="text-center mb-0" style="color: #db7227;">Capillary Tubes are manufactured in a wide range of
                    grades to suit specialized environments:</h4>
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
                                    <td>Stainless Steel Grades</td>
                                    <td><a href="{{ route('materials.austenitic-stainless-Steel') }}">304, 304L, 316, 316L,
                                            321, 310</a> – for medical, food grade, and precision
                                        applications.</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nickel Alloys</td>
                                    <td><a href="{{ route('materials.inconel') }}">Inconel 600, 625, 718</a> – for high
                                        temperature & corrosive environments.</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Monel Grades</td>
                                    <td><a href="{{ route('materials.monel') }}">Monel 400, K500</a> – for marine and chemical use.</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Titanium Grades</td>
                                    <td><a href="{{ route('materials.titanium') }}">Gr. 1, 2, 5</a> – for aerospace and medical devices.</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Duplex & Super Duplex</td>
                                    <td><a href="{{ route('materials.duplex-and-super-duplex') }}">2205, S32750</a> – for offshore and harsh industrial use.</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Copper Alloys</td>
                                    <td><a href="{{ route('materials.copper-Alloys') }}">Cu-Ni 70/30, 90/10</a> – for refrigeration, marine, and heat exchanger systems.</td>
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
                                <img class="w-100" src="{{ asset('assets/images/product/NICKLE-ALLOYS.webp') }}"
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
                                <img class="w-100" src="{{ asset('assets/images/product/STAINLESS-STEEL.webp') }}"
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
                                <img class="w-100" src="{{ asset('assets/images/product/DUPLEX-SUPER.webp') }}"
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
                                <img class="w-100" src="{{ asset('assets/images/product/TITANIUM-ALLOYS.webp') }}"
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
                                <img class="w-100" src="{{ asset('assets/images/product/RARE-TO-ALLOYS.webp') }}"
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
                                <img class="w-100" src="{{ asset('assets/images/product/CARBON-ALLOYS.webp') }}"
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
                    <strong class="text-black">Capillary Tubes</strong> are critical for industries requiring precise
                    control and miniature fluid handling, including:
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon">
                            <i class="bi bi-gear-wide-connected"></i>
                        </div>
                        <h5>Medical & Pharmaceutical</h5>
                        <ul>
                            <li>
                                Hypodermic needles and surgical instruments
                            </li>
                            <li>
                                Catheters and fluid delivery systems
                            </li>
                            <li>
                                Laboratory equipment and chromatography
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Instrumentation & Control</h5>
                        <ul>
                            <li>
                                Pressure measuring devices
                            </li>
                            <li>
                                Hydraulic and pneumatic control lines
                            </li>
                            <li>
                                Thermocouples and sensor lines
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Refrigeration & HVAC</h5>
                        <ul>
                            <li>
                                Precision flow control in cooling systems
                            </li>
                            <li>
                                Expansion lines for refrigerators and AC units
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Chemical & Petrochemical</h5>
                        <ul>
                            <li>
                                Microfluidics and sampling lines
                            </li>
                            <li>
                                Chemical dosing and analytical instrumentation
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Aerospace & Automotive</h5>
                        <ul>
                            <li>
                                Lightweight fluid transmission systems
                            </li>
                            <li>
                                Fuel and brake line applications
                            </li>
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

    {{-- Uses of Welded Pipes and Tubes --}}
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Uses of Capillary Tubes</h2>
            </div>
            <!-- Child Title -->
            <div class="section-title center mb-3">
                <h4 class="text-center mb-0" style="color: #db7227;">Capillary Tubes are used extensively across multiple
                    industries, including:</h4>
            </div>
            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h4>Precision Fluid Flow Control</h4>
                        <h5>Provides highly accurate fluid flow control in sensitive systems</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h4>Miniaturized System Integration</h4>
                        <h5>Enables miniaturized solutions for medical, scientific, and industrial uses</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h4>Corrosion Resistant Performance</h4>
                        <h5>Offers corrosion resistance in harsh chemical or marine environments</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h4>Compact Installation Flexibility</h4>
                        <h5>Allows tight bending radius for compact installations</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h4>Instrumentation & Safety Systems</h4>
                        <h5>Supports critical safety and measurement functions in instrumentation</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-globe2"></i></div>
                        <h4>Efficient Supply Chain Integration</h4>
                        <h5>Facilitates seamless import and logistics operations for global distribution</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Advantages of Welded Pipes & Tubes --}}
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Advantages of Capillary Tubes</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h4>Superior Surface Finish </h4>
                        <h5>Smooth internal bore for optimal flow.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h4>Wide <a href="{{ route('materials') }}">Material</a> Selection </h4>
                        <h5>Compatible with a variety of specialized alloys.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h4>Corrosion Resistance </h4>
                        <h5>Ideal for aggressive chemicals and marine use.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h4>Lightweight & Strong </h4>
                        <h5>Small diameter with exceptional strength to weight ratio.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h4>Customizable Lengths & Forms </h4>
                        <h5>Available in straight lengths, coils, and cut pieces.</h5>
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
                        <div class="why-banner-icon"><i class="bi bi-award-fill"></i></div>
                        <h5>Specialized Expertise: Decades of experience in precision tubing manufacturing</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Advanced Technology: Cold drawing & bright annealing for best tolerances</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Wide Stock Range: Ready-to-ship standard sizes with custom options available</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Global Supply: Serving medical, aerospace, and industrial clients worldwide</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Stringent Quality Control: Compliance with ASTM, ASME, and ISO standards</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-headset"></i></div>
                        <h5>Responsive Support – Dedicated technical assistance and customer service</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--End breadcrumb area-->

   <!--Start faq content area-->
<section class="faq-content-area sec-padd2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="accordion-box">
                    <div class="section-title center">
                        <h2>FAQ's</h2>
                    </div>

                    <!-- Q1 -->
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What is Haynes 242 and why is it important in high-temperature applications?</h4>
                        </div>
                        <div class="accord-content">
                            <p>
                                Haynes 242 (UNS N10242) is an age-hardenable nickel-molybdenum-chromium alloy that combines excellent high-temperature strength with very low thermal expansion. It is widely used in aerospace, chemical, and power generation industries because it provides outstanding dimensional stability, fatigue resistance, and oxidation resistance up to 815 °C (1500 °F), making it ideal for critical operations under extreme conditions.
                            </p>
                        </div>
                    </div>

                    <!-- Q2 -->
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What are the key properties of Haynes 242 alloy?</h4>
                        </div>
                        <div class="accord-content">
                            <p>
                                Haynes 242 offers a unique combination of properties including exceptional strength at elevated temperatures, the lowest thermal expansion among comparable superalloys, high resistance to oxidation, and excellent fatigue and creep performance. It has a tensile strength ranging from 105 to 218 ksi depending on form, with yield strength up to 140 ksi, and maintains structural stability up to 705 °C (1300 °F). Its weldability and formability, even in the age-hardened condition, make it a versatile alloy for demanding applications.
                            </p>
                        </div>
                    </div>

                    <!-- Q3 -->
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Which industries and applications commonly use Haynes 242?</h4>
                        </div>
                        <div class="accord-content">
                            <p>
                                Haynes 242 is widely used in aerospace and gas turbines for seal rings, ducting, fuel nozzles, and containment casings. In chemical and petrochemical industries, it is used for HF and fluorine resistant components, reactors, and extrusion screws. It also finds applications in industrial furnaces for press tooling, heat exchangers, and furnace parts, in nuclear and specialty energy sectors for controlled expansion components, and in power generation for boiler superheaters and gas turbine hardware.
                            </p>
                        </div>
                    </div>

                    <!-- Q4 -->
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What types of Haynes 242 products are supplied by MOKSH TUBES & FITTINGS LLP?</h4>
                        </div>
                        <div class="accord-content">
                            <p>
                                MOKSH TUBES & FITTINGS LLP supplies a wide range of Haynes 242 products including seamless and welded pipes, tubes, sheets, plates, coils, bars, flanges, pipe fittings, fasteners, welding rods, wire mesh, and custom-fabricated components. All products conform to ASTM, ASME, NACE, and international standards, ensuring that industries receive high-quality materials designed for long service life and superior performance.
                            </p>
                        </div>
                    </div>

                    <!-- Q5 -->
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Why choose MOKSH TUBES & FITTINGS LLP for Haynes 242 materials?</h4>
                        </div>
                        <div class="accord-content">
                            <p>
                                MOKSH TUBES & FITTINGS LLP is a trusted manufacturer and global supplier of Haynes 242, offering deep expertise in exotic alloys, a strong international supply chain, and ISO 9001 certified quality assurance. The company provides customized machining, age treatment, and fabrication services while ensuring timely delivery and full material traceability. With technical support from selection to fabrication, MOKSH TUBES & FITTINGS LLP is a reliable partner for industries operating in extreme environments.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--End faq content area-->

<section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Contact Us</h2>
                <p>
                    For further information, quotes, or customized capillaries products, <strong>Moksh Tubes & Fittings
                        LLP</strong> your dependable partner in aluminum alloys.</p>
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
                "name": "What are Capillary Tubes?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Capillary Tubes are precision-engineered tubes with extremely small diameters designed for applications requiring accurate flow control and high surface quality. They are essential in medical, instrumentation, refrigeration, and chemical industries due to their micro-level precision and durability."
                }
                },
                {
                "@type": "Question",
                "name": "What materials are used for manufacturing Capillary Tubes?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Capillary Tubes are made from Stainless Steel, Duplex & Super Duplex, Nickel Alloys (Inconel, Monel), Titanium, and Copper Alloys. Each material is selected for its corrosion resistance, mechanical strength, and compatibility with specific industrial or medical environments."
                }
                },
                {
                "@type": "Question",
                "name": "What are the available dimensions of Capillary Tubes?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Capillary Tubes are available in outer diameters from 0.3 mm to 8 mm and wall thicknesses from 0.05 mm to 1.0 mm, with lengths up to 6 meters or supplied in coils. Custom sizes can also be manufactured on request."
                }
                },
                {
                "@type": "Question",
                "name": "What are the common applications of Capillary Tubes?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "<ul><li>Medical & Pharmaceutical – hypodermic needles, catheters, and laboratory equipment</li><li>Instrumentation & Control – pressure sensors, thermocouples, and hydraulic lines</li><li>Refrigeration & HVAC – flow control and expansion systems</li><li>Chemical & Petrochemical – sampling and dosing systems</li><li>Aerospace & Automotive – lightweight fuel and brake lines</li></ul>"
                }
                },
                {
                "@type": "Question",
                "name": "What are the advantages of using Capillary Tubes?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "<ul><li>Superior surface finish for smooth flow</li><li>High corrosion resistance in harsh conditions</li><li>Lightweight yet strong construction</li><li>Available in coils, straight lengths, and custom cut pieces</li><li>Excellent dimensional accuracy and tight tolerances</li></ul>"
                }
                },
                {
                "@type": "Question",
                "name": "What standards do your Capillary Tubes comply with?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Moksh Tubes & Fittings LLP manufactures Capillary Tubes as per ASTM A213, ASTM A269, ASTM B338, DIN, and EN standards. All tubes undergo strict quality control to ensure compliance with international dimensional and mechanical requirements."
                }
                },
                {
                "@type": "Question",
                "name": "What finishes are available for Capillary Tubes?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We offer various surface finishes including Bright Annealed, Electro Polished, Matte, and Mechanical Polished finishes. These ensure both optimal performance and visual appeal based on the application’s needs."
                }
                },
                {
                "@type": "Question",
                "name": "Why choose Moksh Tubes & Fittings LLP for Capillary Tubes?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "<ul><li>Decades of experience in precision tube manufacturing</li><li>Advanced cold drawing and bright annealing processes</li><li>Wide stock availability with global supply network</li><li>Strict compliance with ASTM, ASME, and ISO standards</li><li>Responsive technical and customer support</li></ul>"
                }
                }
            ]
            }
        
        @endverbatim
    </script>
@endsection
