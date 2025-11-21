@extends('layouts.master')
@section('title', 'Industrial U-Bent Tubes | Custom Fabrication') <!-- 54 characters -->
@section('meta_description',
    'Get precision U-Bent Tubes from Moksh Tubes — custom sizes, superior durability & performance for boilers, heat exchangers & industrial systems.') <!-- 153 characters -->
@section('meta_keywords',
    'U-Bent Tubes, U-Bend Tubes, Custom U-Bent Tubes, Industrial U-Bent Tubes, Heat Exchanger Tubes, Boiler Tubes, Stainless Steel U-Bent Tubes, Alloy U-Bent Tubes, Precision Bent Tubes, Moksh Tubes')
@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/peoduct/u-bent-tubes.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Industrial U-Bent Tubes for High-Performance Applications</h1> <!-- 52 characters -->
                </div>
            </div>
        </div>
    </section>



    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">U-Bent Tubes</h2>
            </div>

            <div class="row align-items-center">
                <!-- Left Image -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/peoduct/u-bent-tubes.webp') }}" alt="U-Bent Tubes for Industrial Heat Exchangers" width="550" height="350" class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Right Content -->
                <div class="col-md-6">
                    <p class="fs-6 mb-3 text-justify">
                        <strong class="text-black"> U-Bent Tubes</strong> are specially fabricated tubes designed for
                        efficient heat transfer in compact heat
                        exchanger systems. They are bent into a “U” shape to allow the fluid to flow in a reverse direction
                        without requiring separate return<a href="{{ route('products.pipes-tubes') }}"> piping</a>, thereby
                        saving space and enhancing heat recovery
                        performance.
                    </p>
                    <p class="fs-6 text-justify">
                        <strong class="text-black"> Moksh Tubes & Fittings LLP</strong>, we supply precision-engineered
                        U-Bent Tubes in <a href="{{ route('materials.austenitic-stainless-Steel') }}">stainless steel</a>,
                        carbon steel, alloy steel, and nickel alloys. These tubes are
                        widely used in boilers, condensers, and heat exchangers across power, petrochemical, and process
                        industries. All tubes are produced and bent under strict quality control to ensure dimensional
                        accuracy and structural integrity.
                    </p>
                     <ul class="fs-6 mb-3">
                    <li>Custom lengths & diameters up to 12 meters</li>
                    <li>Available in stainless steel, carbon steel, alloy steel & nickel alloys</li>
                    <li>Ideal for power, petrochemical & industrial applications</li>
                    <li>Strict quality control ensures dimensional accuracy & durability</li>
                </ul>
                <p class="fs-6 text-justify">
                    Explore our range of <a href="{{ route('products.pipes-tubes') }}">industrial piping solutions</a> and find the **perfect U-Bent Tube** for your system.
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
                                    <td>Stainless Steel, Carbon Steel, Alloy Steel, Duplex Steel, Nickel Alloys</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Grades</td>
                                    <td>ASTM A179, A192, A210, A213, A268, A556, EN10216-2, BS 3059, ASME SA213</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Outer Diameter (OD)</td>
                                    <td>6 mm to 76.2 mm</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Wall Thickness</td>
                                    <td>0.5 mm to 8 mm (as per design requirements)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Lengths</td>
                                    <td>Up to 12 meters (or as per specification)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Bend Radius</td>
                                    <td>Minimum 1.5 x OD or as per customer drawing</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Finishes</td>
                                    <td>Bright Annealed, Pickled, Polished, Passivated</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Type</td>
                                    <td>Seamless / Welded</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Form</td>
                                    <td>U-Bent Form with Straight Leg Extensions</td>
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
                            <td>1 1/4</td>
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
                            <td>73.0</td>
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
                <h4 class="text-center mb-0" style="color: #db7227;">Schedule 5C – Size Chart (ASME B36.10)</h4>
            </div>


            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>NPS (inches)</th>
                                    <th>NB (mm)</th>
                                    <th>OD (mm)</th>
                                    <th>Wall Thickness (mm)</th>
                                    <th>Internal Diameter (mm)</th>
                                    <th>Weight (kg/m)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
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
                                    <td>1.65</td>
                                    <td>23.4</td>
                                    <td>1.03</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1</td>
                                    <td>25</td>
                                    <td>33.4</td>
                                    <td>1.65</td>
                                    <td>30.1</td>
                                    <td>1.3</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1 1/4</td>
                                    <td>32</td>
                                    <td>42.2</td>
                                    <td>1.65</td>
                                    <td>38.9</td>
                                    <td>1.65</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1 1/2</td>
                                    <td>40</td>
                                    <td>48.3</td>
                                    <td>1.65</td>
                                    <td>44.9</td>
                                    <td>1.91</td>
                                </tr>
                                <tr class="t-row">
                                    <td>2</td>
                                    <td>50</td>
                                    <td>60.3</td>
                                    <td>1.65</td>
                                    <td>56.0</td>
                                    <td>2.4</td>
                                </tr>
                                <tr class="t-row">
                                    <td>2 1/2</td>
                                    <td>65</td>
                                    <td>73.0</td>
                                    <td>2.11</td>
                                    <td>68.8</td>
                                    <td>3.69</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3</td>
                                    <td>80</td>
                                    <td>88.9</td>
                                    <td>2.11</td>
                                    <td>84.7</td>
                                    <td>4.51</td>
                                </tr>
                                <tr class="t-row">
                                    <td>4</td>
                                    <td>100</td>
                                    <td>114.3</td>
                                    <td>2.11</td>
                                    <td>110.1</td>
                                    <td>5.84</td>
                                </tr>
                                <tr class="t-row">
                                    <td>5</td>
                                    <td>125</td>
                                    <td>141.3</td>
                                    <td>2.77</td>
                                    <td>135.8</td>
                                    <td>9.47</td>
                                </tr>
                                <tr class="t-row">
                                    <td>6</td>
                                    <td>150</td>
                                    <td>168.3</td>
                                    <td>2.77</td>
                                    <td>162.8</td>
                                    <td>11.32</td>
                                </tr>
                                <tr class="t-row">
                                    <td>8</td>
                                    <td>200</td>
                                    <td>219.1</td>
                                    <td>2.77</td>
                                    <td>213.6</td>
                                    <td>14.79</td>
                                </tr>
                                <tr class="t-row">
                                    <td>10</td>
                                    <td>250</td>
                                    <td>273.1</td>
                                    <td>3.4</td>
                                    <td>266.3</td>
                                    <td>22.63</td>
                                </tr>
                                <tr class="t-row">
                                    <td>12</td>
                                    <td>300</td>
                                    <td>323.9</td>
                                    <td>3.56</td>
                                    <td>317.0</td>
                                    <td>31.25</td>
                                </tr>
                                <tr class="t-row">
                                    <td>14</td>
                                    <td>350</td>
                                    <td>355.6</td>
                                    <td>3.96</td>
                                    <td>347.7</td>
                                    <td>36.96</td>
                                </tr>
                                <tr class="t-row">
                                    <td>16</td>
                                    <td>400</td>
                                    <td>406.4</td>
                                    <td>4.19</td>
                                    <td>398.0</td>
                                    <td>41.56</td>
                                </tr>
                                <tr class="t-row">
                                    <td>18</td>
                                    <td>450</td>
                                    <td>457.2</td>
                                    <td>4.57</td>
                                    <td>448.1</td>
                                    <td>49.42</td>
                                </tr>
                                <tr class="t-row">
                                    <td>20</td>
                                    <td>500</td>
                                    <td>508.0</td>
                                    <td>5.54</td>
                                    <td>496.9</td>
                                    <td>59.25</td>
                                </tr>
                                <tr class="t-row">
                                    <td>22</td>
                                    <td>550</td>
                                    <td>558.8</td>
                                    <td>5.54</td>
                                    <td>547.7</td>
                                    <td>65.97</td>
                                </tr>
                                <tr class="t-row">
                                    <td>24</td>
                                    <td>600</td>
                                    <td>609.6</td>
                                    <td>5.54</td>
                                    <td>598.5</td>
                                    <td>82.47</td>
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
                <h4 class="text-center mb-0" style="color: #db7227;">Schedule 10C – Size Chart (ASME B36.10)</h4>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>NPS (inches)</th>
                                    <th>NB (mm)</th>
                                    <th>OD (mm)</th>
                                    <th>Wall Thickness (mm)</th>
                                    <th>Internal Diameter (mm)</th>
                                    <th>Weight (kg/m)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>1/2</td>
                                    <td>15</td>
                                    <td>21.3</td>
                                    <td>2.11</td>
                                    <td>17.1</td>
                                    <td>1.04</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3/4</td>
                                    <td>20</td>
                                    <td>26.7</td>
                                    <td>2.11</td>
                                    <td>22.5</td>
                                    <td>1.37</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1</td>
                                    <td>25</td>
                                    <td>33.4</td>
                                    <td>2.77</td>
                                    <td>27.9</td>
                                    <td>2.17</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1 1/4</td>
                                    <td>32</td>
                                    <td>42.2</td>
                                    <td>2.77</td>
                                    <td>36.7</td>
                                    <td>2.8</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1 1/2</td>
                                    <td>40</td>
                                    <td>48.3</td>
                                    <td>2.77</td>
                                    <td>42.8</td>
                                    <td>3.25</td>
                                </tr>
                                <tr class="t-row">
                                    <td>2</td>
                                    <td>50</td>
                                    <td>60.3</td>
                                    <td>2.77</td>
                                    <td>54.8</td>
                                    <td>4.12</td>
                                </tr>
                                <tr class="t-row">
                                    <td>2 1/2</td>
                                    <td>65</td>
                                    <td>73.0</td>
                                    <td>3.05</td>
                                    <td>66.9</td>
                                    <td>5.6</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3</td>
                                    <td>80</td>
                                    <td>88.9</td>
                                    <td>3.05</td>
                                    <td>82.8</td>
                                    <td>6.9</td>
                                </tr>
                                <tr class="t-row">
                                    <td>4</td>
                                    <td>100</td>
                                    <td>114.3</td>
                                    <td>3.05</td>
                                    <td>108.2</td>
                                    <td>9.01</td>
                                </tr>
                                <tr class="t-row">
                                    <td>5</td>
                                    <td>125</td>
                                    <td>141.3</td>
                                    <td>3.4</td>
                                    <td>134.5</td>
                                    <td>12.28</td>
                                </tr>
                                <tr class="t-row">
                                    <td>6</td>
                                    <td>150</td>
                                    <td>168.3</td>
                                    <td>3.4</td>
                                    <td>161.5</td>
                                    <td>14.69</td>
                                </tr>
                                <tr class="t-row">
                                    <td>8</td>
                                    <td>200</td>
                                    <td>219.1</td>
                                    <td>3.76</td>
                                    <td>211.6</td>
                                    <td>20.25</td>
                                </tr>
                                <tr class="t-row">
                                    <td>10</td>
                                    <td>250</td>
                                    <td>273.1</td>
                                    <td>4.19</td>
                                    <td>264.7</td>
                                    <td>27.86</td>
                                </tr>
                                <tr class="t-row">
                                    <td>12</td>
                                    <td>300</td>
                                    <td>323.9</td>
                                    <td>4.57</td>
                                    <td>314.8</td>
                                    <td>36.27</td>
                                </tr>
                                <tr class="t-row">
                                    <td>14</td>
                                    <td>350</td>
                                    <td>355.6</td>
                                    <td>4.78</td>
                                    <td>346.0</td>
                                    <td>41.15</td>
                                </tr>
                                <tr class="t-row">
                                    <td>16</td>
                                    <td>400</td>
                                    <td>406.4</td>
                                    <td>4.78</td>
                                    <td>396.8</td>
                                    <td>47.14</td>
                                </tr>
                                <tr class="t-row">
                                    <td>18</td>
                                    <td>450</td>
                                    <td>457.2</td>
                                    <td>4.78</td>
                                    <td>447.6</td>
                                    <td>53.05</td>
                                </tr>
                                <tr class="t-row">
                                    <td>20</td>
                                    <td>500</td>
                                    <td>508.0</td>
                                    <td>5.54</td>
                                    <td>496.9</td>
                                    <td>66.75</td>
                                </tr>
                                <tr class="t-row">
                                    <td>22</td>
                                    <td>550</td>
                                    <td>558.8</td>
                                    <td>5.54</td>
                                    <td>547.7</td>
                                    <td>73.46</td>
                                </tr>
                                <tr class="t-row">
                                    <td>24</td>
                                    <td>600</td>
                                    <td>609.6</td>
                                    <td>6.35</td>
                                    <td>596.9</td>
                                    <td>86.78</td>
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
                <h4 class="text-center mb-0" style="color: #db7227;">Schedule 40C – Size Chart (ASME B36.10)</h4>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>NPS (inches)</th>
                                    <th>NB (mm)</th>
                                    <th>OD (mm)</th>
                                    <th>Wall Thickness (mm)</th>
                                    <th>Internal Diameter (mm)</th>
                                    <th>Weight (kg/m)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>1/8</td>
                                    <td>3</td>
                                    <td>10.3</td>
                                    <td>1.73</td>
                                    <td>6.84</td>
                                    <td>0.37</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1/4</td>
                                    <td>6</td>
                                    <td>13.7</td>
                                    <td>2.24</td>
                                    <td>9.22</td>
                                    <td>0.84</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1/2</td>
                                    <td>15</td>
                                    <td>21.3</td>
                                    <td>2.77</td>
                                    <td>15.7</td>
                                    <td>1.27</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3/4</td>
                                    <td>20</td>
                                    <td>26.7</td>
                                    <td>2.87</td>
                                    <td>21.0</td>
                                    <td>1.69</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1</td>
                                    <td>25</td>
                                    <td>33.4</td>
                                    <td>3.38</td>
                                    <td>26.6</td>
                                    <td>2.50</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1 1/4</td>
                                    <td>32</td>
                                    <td>42.2</td>
                                    <td>3.56</td>
                                    <td>35.1</td>
                                    <td>3.39</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1 1/2</td>
                                    <td>40</td>
                                    <td>48.3</td>
                                    <td>3.68</td>
                                    <td>41.0</td>
                                    <td>4.05</td>
                                </tr>
                                <tr class="t-row">
                                    <td>2</td>
                                    <td>50</td>
                                    <td>60.3</td>
                                    <td>3.91</td>
                                    <td>52.5</td>
                                    <td>5.44</td>
                                </tr>
                                <tr class="t-row">
                                    <td>2 1/2</td>
                                    <td>65</td>
                                    <td>73.0</td>
                                    <td>5.16</td>
                                    <td>62.7</td>
                                    <td>8.63</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3</td>
                                    <td>80</td>
                                    <td>88.9</td>
                                    <td>5.49</td>
                                    <td>78.9</td>
                                    <td>11.3</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3 1/2</td>
                                    <td>90</td>
                                    <td>101.6</td>
                                    <td>5.74</td>
                                    <td>90.1</td>
                                    <td>13.6</td>
                                </tr>
                                <tr class="t-row">
                                    <td>4</td>
                                    <td>100</td>
                                    <td>114.3</td>
                                    <td>6.02</td>
                                    <td>102.3</td>
                                    <td>16.1</td>
                                </tr>
                                <tr class="t-row">
                                    <td>5</td>
                                    <td>125</td>
                                    <td>141.3</td>
                                    <td>6.55</td>
                                    <td>128.2</td>
                                    <td>21.8</td>
                                </tr>
                                <tr class="t-row">
                                    <td>6</td>
                                    <td>150</td>
                                    <td>168.3</td>
                                    <td>7.11</td>
                                    <td>154.1</td>
                                    <td>28.3</td>
                                </tr>
                                <tr class="t-row">
                                    <td>8</td>
                                    <td>200</td>
                                    <td>219.1</td>
                                    <td>8.18</td>
                                    <td>202.7</td>
                                    <td>42.6</td>
                                </tr>
                                <tr class="t-row">
                                    <td>10</td>
                                    <td>250</td>
                                    <td>273.0</td>
                                    <td>9.27</td>
                                    <td>254.5</td>
                                    <td>60.3</td>
                                </tr>
                                <tr class="t-row">
                                    <td>12</td>
                                    <td>300</td>
                                    <td>323.8</td>
                                    <td>10.31</td>
                                    <td>303.2</td>
                                    <td>79.7</td>
                                </tr>
                                <tr class="t-row">
                                    <td>14</td>
                                    <td>350</td>
                                    <td>355.6</td>
                                    <td>11.13</td>
                                    <td>333.4</td>
                                    <td>94.6</td>
                                </tr>
                                <tr class="t-row">
                                    <td>16</td>
                                    <td>400</td>
                                    <td>406.4</td>
                                    <td>12.70</td>
                                    <td>381.0</td>
                                    <td>123.3</td>
                                </tr>
                                <tr class="t-row">
                                    <td>18</td>
                                    <td>450</td>
                                    <td>457.2</td>
                                    <td>14.27</td>
                                    <td>428.7</td>
                                    <td>155.8</td>
                                </tr>
                                <tr class="t-row">
                                    <td>20</td>
                                    <td>500</td>
                                    <td>508.0</td>
                                    <td>15.09</td>
                                    <td>477.8</td>
                                    <td>183.4</td>
                                </tr>
                                <tr class="t-row">
                                    <td>24</td>
                                    <td>600</td>
                                    <td>610.0</td>
                                    <td>17.48</td>
                                    <td>575.0</td>
                                    <td>255.4</td>
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
                                    <th>NPS (inches)</th>
                                    <th>NB (mm)</th>
                                    <th>OD (mm)</th>
                                    <th>Wall Thickness (mm)</th>
                                    <th>Internal Diameter (mm)</th>
                                    <th>Weight (kg/m)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>1/8</td>
                                    <td>3</td>
                                    <td>10.3</td>
                                    <td>2.41</td>
                                    <td>5.48</td>
                                    <td>0.47</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1/4</td>
                                    <td>6</td>
                                    <td>13.7</td>
                                    <td>3.02</td>
                                    <td>7.66</td>
                                    <td>1.06</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1/2</td>
                                    <td>15</td>
                                    <td>21.3</td>
                                    <td>3.73</td>
                                    <td>13.84</td>
                                    <td>1.61</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3/4</td>
                                    <td>20</td>
                                    <td>26.7</td>
                                    <td>3.91</td>
                                    <td>18.88</td>
                                    <td>2.34</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1</td>
                                    <td>25</td>
                                    <td>33.4</td>
                                    <td>4.55</td>
                                    <td>24.3</td>
                                    <td>3.37</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1 1/4</td>
                                    <td>32</td>
                                    <td>42.2</td>
                                    <td>4.85</td>
                                    <td>32.5</td>
                                    <td>4.66</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1 1/2</td>
                                    <td>40</td>
                                    <td>48.3</td>
                                    <td>5.08</td>
                                    <td>38.1</td>
                                    <td>5.57</td>
                                </tr>
                                <tr class="t-row">
                                    <td>2</td>
                                    <td>50</td>
                                    <td>60.3</td>
                                    <td>5.54</td>
                                    <td>49.2</td>
                                    <td>7.57</td>
                                </tr>
                                <tr class="t-row">
                                    <td>2 1/2</td>
                                    <td>65</td>
                                    <td>73.0</td>
                                    <td>7.01</td>
                                    <td>59.0</td>
                                    <td>11.3</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3</td>
                                    <td>80</td>
                                    <td>88.9</td>
                                    <td>7.62</td>
                                    <td>73.7</td>
                                    <td>15.7</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3 1/2</td>
                                    <td>90</td>
                                    <td>101.6</td>
                                    <td>8.08</td>
                                    <td>85.4</td>
                                    <td>19.1</td>
                                </tr>
                                <tr class="t-row">
                                    <td>4</td>
                                    <td>100</td>
                                    <td>114.3</td>
                                    <td>8.56</td>
                                    <td>97.2</td>
                                    <td>23.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>5</td>
                                    <td>125</td>
                                    <td>141.3</td>
                                    <td>9.53</td>
                                    <td>122.2</td>
                                    <td>31.4</td>
                                </tr>
                                <tr class="t-row">
                                    <td>6</td>
                                    <td>150</td>
                                    <td>168.3</td>
                                    <td>10.97</td>
                                    <td>146.4</td>
                                    <td>41.5</td>
                                </tr>
                                <tr class="t-row">
                                    <td>8</td>
                                    <td>200</td>
                                    <td>219.1</td>
                                    <td>12.70</td>
                                    <td>193.7</td>
                                    <td>63.6</td>
                                </tr>
                                <tr class="t-row">
                                    <td>10</td>
                                    <td>250</td>
                                    <td>273.1</td>
                                    <td>15.09</td>
                                    <td>243.0</td>
                                    <td>93.2</td>
                                </tr>
                                <tr class="t-row">
                                    <td>12</td>
                                    <td>300</td>
                                    <td>323.9</td>
                                    <td>17.48</td>
                                    <td>288.9</td>
                                    <td>124.3</td>
                                </tr>
                                <tr class="t-row">
                                    <td>14</td>
                                    <td>350</td>
                                    <td>355.6</td>
                                    <td>19.05</td>
                                    <td>317.5</td>
                                    <td>147.2</td>
                                </tr>
                                <tr class="t-row">
                                    <td>16</td>
                                    <td>400</td>
                                    <td>406.4</td>
                                    <td>21.44</td>
                                    <td>363.5</td>
                                    <td>185.5</td>
                                </tr>
                                <tr class="t-row">
                                    <td>18</td>
                                    <td>450</td>
                                    <td>457.2</td>
                                    <td>23.83</td>
                                    <td>409.5</td>
                                    <td>227.6</td>
                                </tr>
                                <tr class="t-row">
                                    <td>20</td>
                                    <td>500</td>
                                    <td>508.0</td>
                                    <td>26.19</td>
                                    <td>455.6</td>
                                    <td>276.5</td>
                                </tr>
                                <tr class="t-row">
                                    <td>24</td>
                                    <td>600</td>
                                    <td>609.6</td>
                                    <td>28.58</td>
                                    <td>552.4</td>
                                    <td>366.3</td>
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
                <h4 class="text-center mb-0" style="color: #db7227;">Schedule 160C – Size Chart (ASME B36.10)</h4>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>NPS (inches)</th>
                                    <th>NB (mm)</th>
                                    <th>OD (mm)</th>
                                    <th>Wall Thickness (mm)</th>
                                    <th>Internal Diameter (mm)</th>
                                    <th>Weight (kg/m)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>1/2</td>
                                    <td>15</td>
                                    <td>21.3</td>
                                    <td>4.78</td>
                                    <td>11.7</td>
                                    <td>1.97</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3/4</td>
                                    <td>20</td>
                                    <td>26.7</td>
                                    <td>5.56</td>
                                    <td>15.6</td>
                                    <td>3.09</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1</td>
                                    <td>25</td>
                                    <td>33.4</td>
                                    <td>6.35</td>
                                    <td>20.7</td>
                                    <td>4.56</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1 1/4</td>
                                    <td>32</td>
                                    <td>42.2</td>
                                    <td>6.35</td>
                                    <td>29.5</td>
                                    <td>6.09</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1 1/2</td>
                                    <td>40</td>
                                    <td>48.3</td>
                                    <td>7.14</td>
                                    <td>34.0</td>
                                    <td>7.89</td>
                                </tr>
                                <tr class="t-row">
                                    <td>2</td>
                                    <td>50</td>
                                    <td>60.3</td>
                                    <td>8.74</td>
                                    <td>42.8</td>
                                    <td>11.5</td>
                                </tr>
                                <tr class="t-row">
                                    <td>2 1/2</td>
                                    <td>65</td>
                                    <td>73.0</td>
                                    <td>9.53</td>
                                    <td>53.9</td>
                                    <td>15.9</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3</td>
                                    <td>80</td>
                                    <td>88.9</td>
                                    <td>11.13</td>
                                    <td>66.6</td>
                                    <td>22.1</td>
                                </tr>
                                <tr class="t-row">
                                    <td>4</td>
                                    <td>100</td>
                                    <td>114.3</td>
                                    <td>13.49</td>
                                    <td>87.3</td>
                                    <td>34.3</td>
                                </tr>
                                <tr class="t-row">
                                    <td>5</td>
                                    <td>125</td>
                                    <td>141.3</td>
                                    <td>15.88</td>
                                    <td>109.5</td>
                                    <td>49.1</td>
                                </tr>
                                <tr class="t-row">
                                    <td>6</td>
                                    <td>150</td>
                                    <td>168.3</td>
                                    <td>18.26</td>
                                    <td>131.8</td>
                                    <td>66.9</td>
                                </tr>
                                <tr class="t-row">
                                    <td>8</td>
                                    <td>200</td>
                                    <td>219.1</td>
                                    <td>23.01</td>
                                    <td>173.1</td>
                                    <td>108.9</td>
                                </tr>
                                <tr class="t-row">
                                    <td>10</td>
                                    <td>250</td>
                                    <td>273.1</td>
                                    <td>28.58</td>
                                    <td>216.0</td>
                                    <td>168.6</td>
                                </tr>
                                <tr class="t-row">
                                    <td>12</td>
                                    <td>300</td>
                                    <td>323.9</td>
                                    <td>33.32</td>
                                    <td>257.3</td>
                                    <td>240.4</td>
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
                <h4 class="text-center mb-0" style="color: #db7227;">Schedule XXC – Size Chart (ASME B36.10)</h4>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>NPS (inches)</th>
                                    <th>NB (mm)</th>
                                    <th>OD (mm)</th>
                                    <th>Wall Thickness (mm)</th>
                                    <th>Internal Diameter (mm)</th>
                                    <th>Weight (kg/m)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>1/2</td>
                                    <td>15</td>
                                    <td>21.3</td>
                                    <td>7.47</td>
                                    <td>6.36</td>
                                    <td>2.86</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3/4</td>
                                    <td>20</td>
                                    <td>26.7</td>
                                    <td>7.82</td>
                                    <td>11.06</td>
                                    <td>4.46</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1</td>
                                    <td>25</td>
                                    <td>33.4</td>
                                    <td>9.09</td>
                                    <td>15.22</td>
                                    <td>6.56</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1 1/4</td>
                                    <td>32</td>
                                    <td>42.2</td>
                                    <td>9.70</td>
                                    <td>22.80</td>
                                    <td>9.45</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1 1/2</td>
                                    <td>40</td>
                                    <td>48.3</td>
                                    <td>10.15</td>
                                    <td>28.00</td>
                                    <td>11.3</td>
                                </tr>
                                <tr class="t-row">
                                    <td>2</td>
                                    <td>50</td>
                                    <td>60.3</td>
                                    <td>11.07</td>
                                    <td>38.16</td>
                                    <td>15.3</td>
                                </tr>
                                <tr class="t-row">
                                    <td>2 1/2</td>
                                    <td>65</td>
                                    <td>73.0</td>
                                    <td>14.02</td>
                                    <td>44.96</td>
                                    <td>23.3</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3</td>
                                    <td>80</td>
                                    <td>88.9</td>
                                    <td>15.24</td>
                                    <td>58.42</td>
                                    <td>30.8</td>
                                </tr>
                                <tr class="t-row">
                                    <td>4</td>
                                    <td>100</td>
                                    <td>114.3</td>
                                    <td>17.12</td>
                                    <td>80.06</td>
                                    <td>44.1</td>
                                </tr>
                                <tr class="t-row">
                                    <td>5</td>
                                    <td>125</td>
                                    <td>141.3</td>
                                    <td>19.05</td>
                                    <td>103.2</td>
                                    <td>62.5</td>
                                </tr>
                                <tr class="t-row">
                                    <td>6</td>
                                    <td>150</td>
                                    <td>168.3</td>
                                    <td>21.95</td>
                                    <td>124.4</td>
                                    <td>84.7</td>
                                </tr>
                                <tr class="t-row">
                                    <td>8</td>
                                    <td>200</td>
                                    <td>219.1</td>
                                    <td>25.40</td>
                                    <td>168.3</td>
                                    <td>122.6</td>
                                </tr>
                                <tr class="t-row">
                                    <td>10</td>
                                    <td>250</td>
                                    <td>273.1</td>
                                    <td>31.75</td>
                                    <td>209.6</td>
                                    <td>184.8</td>
                                </tr>
                                <tr class="t-row">
                                    <td>12</td>
                                    <td>300</td>
                                    <td>323.9</td>
                                    <td>38.10</td>
                                    <td>247.7</td>
                                    <td>260.5</td>
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
                <h4 class="text-center mb-0" style="color: #db7227;">U-Bent Tubes are available in a wide range of
                    grades:</h4>
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
                                    <td>Carbon Steel</td>
                                    <td>ASTM A179, A192, A210 Gr A1/C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Alloy Steel</td>
                                    <td>
                                        ASTM A213 T11, T12, T22, T91, T5, T9
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Stainless Steel</td>
                                    <td>
                                        TP304, 304L, 316, 316L, 321, 347, 310, 904L
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Duplex / Super Duplex</td>
                                    <td>
                                        UNS S31803, S32205, S32750, S32760
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nickel Alloys</td>
                                    <td>
                                        Inconel 600, 625, 800, 825, Monel 400, Hastelloy C22, C276, Alloy 20
                                    </td>
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
                                <img class="w-100" src="{{ asset('assets/images/peoduct/NICKLE-ALLOYS.jpeg') }}"
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
                                <img class="w-100" src="{{ asset('assets/images/peoduct/STAINLESS-STEEL.jpeg') }}"
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
                                <img class="w-100" src="{{ asset('assets/images/peoduct/DUPLEX-SUPER.png') }}"
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
                                <img class="w-100" src="{{ asset('assets/images/peoduct/TITANIUM-ALLOYS.jpg') }}"
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
                                <img class="w-100" src="{{ asset('assets/images/peoduct/RARE-TO-ALLOYS.jpg') }}"
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
                                <img class="w-100" src="{{ asset('assets/images/peoduct/CARBON-ALLOYS.jpg') }}"
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


    <!-- {{-- Applications --}}
    {{-- <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Application</h2>
            </div>
            <p class="mb-4">
                Welded pipes and tubes are indispensable components in numerous industries due to their exceptional
                strength, precise dimensional accuracy, and cost-effectiveness. These versatile products are widely utilized
                for structural purposes and fluid transport systems, particularly in demanding environments.
            </p>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            1. Oil and Gas Industry
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Welded pipes and tubes find extensive use in the energy sector, including:</strong>
                            <ul>
                                <li>
                                    Onshore and offshore pipeline networks
                                </li>
                                <li>
                                    Crude oil and natural gas transmission systems
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            2. Power Generation
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Power plants rely on welded pipes and tubes to ensure operational efficiency in areas
                                such as:</strong>
                            <ul>
                                <li>
                                    Boiler tubes, superheaters, and economizers
                                </li>
                                <li>
                                    Condensers and feedwater systems
                                </li>
                                <li>
                                    Heat recovery steam generators (HRSG)
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            3. Chemical and Petrochemical Industry
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>For handling corrosive substances and high-pressure environments, welded pipes and tubes
                                are essential in:</strong>
                            <ul>
                                <li>
                                    Transporting corrosive fluids and gases
                                </li>
                                <li>
                                    Process piping within chemical reactors
                                </li>
                                <li>
                                    Distillation and separation systems
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            4. Construction and Infrastructure
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Welded pipes and tubes are critical in the construction sector for:</strong>
                            <ul>
                                <li>
                                    Building structures and architectural frameworks
                                </li>
                                <li>
                                    Bridges, tunnels, and industrial sheds
                                </li>
                                <li>
                                    Water distribution and sewage systems
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            5. Automotive and Transport
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>The automotive and heavy transport industries heavily utilize welded pipes and tubes
                                for:</strong>
                            <ul>
                                <li>
                                    Exhaust systems and fuel lines
                                </li>
                                <li>
                                    Hydraulic systems and structural components
                                </li>
                                <li>
                                    Roll cages and chassis frameworks
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            6. Food, Beverage, and Dairy Processing
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Hygienic-grade welded pipes and tubes ensure safe and sanitary applications in:</strong>
                            <ul>
                                <li>
                                    Sanitary fluid transfer systems
                                </li>
                                <li>
                                    Process lines for dairy and beverage production
                                </li>
                                <li>
                                    Clean-in-place (CIP) and sterilization systems
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            7. Marine and Shipbuilding
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Welded pipes and tubes also serve an integral role in:</strong>
                            <ul>
                                <li>
                                    Seawater piping systems
                                </li>
                                <li>
                                    Ballast and bilge systems
                                </li>
                                <li>
                                    Structural frameworks for ships and offshore platforms
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            8. HVAC and Plumbing
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Welded pipes and tubes provide reliable solutions for the HVAC and plumbing sectors,
                                including:</strong>
                            <ul>
                                <li>
                                    Hot and cold water distribution
                                </li>
                                <li>
                                    Heating, ventilation, and air conditioning systems
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
 -->
    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications</h2>
                <p class="text-center pb-3">
                    <strong class="text-black"> U-Bent Tubes</strong> are essential in thermal systems where compactness,
                    efficiency, and heat transfer performance are required:
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon">
                            <i class="bi bi-gear-wide-connected"></i>
                        </div>
                        <h5>Heat Exchangers</h5>
                        <ul>
                            <li>
                                Shell & Tube type for petrochemical plants and refineries
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Boilers & Superheaters</h5>
                        <ul>
                            <li>
                                For return fluid and steam generation loops
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Condensers & Economizers</h5>
                        <ul>
                            <li>
                                Used in power generation systems and HRSGs
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Chemical & Fertilizer Plants</h5>
                        <ul>
                            <li>
                                Urea, ammonia, and nitric acid production systems
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Desalination Plants</h5>
                        <ul>
                            <li>
                                Thermal distillation and brine concentration units
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>HVAC & Refrigeration Systems</h5>
                        <ul>
                            <li>
                                Compact heat exchange coils
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
                <h2>Uses of Welded U-Bent Tubes</h2>
            </div>
            <!-- Child Title -->
            <div class="section-title center mb-3">
                <h4 class="text-center mb-0" style="color: #db7227;">U-Bent Tubes are used extensively across multiple
                    industries, including:</h4>
            </div>
            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h4>Piping System Optimization</h4>
                        <h5>Reduces the need for pipe fittings and welding joints</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h4>Compact Thermal Design</h4>
                        <h5>Ensures compact design for thermal systems</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h4>High-Pressure Reliability</h4>
                        <h5>Enhances mechanical strength in high-pressure loops</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h4>Uniform Heat Distribution</h4>
                        <h5>Maintains uniform heat distribution across thermal networks</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h4>Efficient Flow Management</h4>
                        <h5>Minimizes pressure drop and turbulence in flow systems</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h4>Versatile System Integration</h4>
                        <h5>Supports integration into diverse thermal and fluid systems with ease</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Advantages of Welded Pipes & Tubes --}}
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Advantages of U-Bent Tubes</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h4>Space Saving Design </h4>
                        <h5>Ideal for compact heat exchanger layouts</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h4>High Heat Transfer Efficiency</h4>
                        <h5>Smooth ID and accurate bending</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h4>Pressure & Temperature Resistance </h4>
                        <h5>Engineered for demanding applications</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h4>Dimensional Precision </h4>
                        <h5>CNC-controlled bending, minimal ovality and thinning</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h4>Corrosion Resistance </h4>
                        <h5>Suitable for harsh and acidic process environments</h5>
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
                        <h5>Precision Bending: CNC and mandrel bending with exact tolerances</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Wide Material Range: From carbon steel to exotic nickel alloys</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Third-Party Inspection: TPI and NDT (Eddy current, hydro, PMI, etc.) on request</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Cut-to-Length & Bead Removal: End prep available as per design</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Certified Assurance: ISO 9001:2015 and international compliance</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Prompt Supply: Short lead times and packing suitable for overseas delivery</h5>
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

                    <!--Start single accordion box-->
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What are U-Bent Tubes used for?</h4>
                        </div>
                        <div class="accord-content">
                            <p>
                                U-Bent Tubes are used in heat exchangers, condensers, boilers, and other thermal systems 
                                to facilitate fluid return flow in compact designs. Their U-shaped configuration allows 
                                efficient heat transfer while reducing the need for extra fittings or space.
                            </p>
                        </div>
                    </div>
                    <!--End single accordion box-->

                    <!--Start single accordion box-->
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What materials are available for U-Bent Tubes?</h4>
                        </div>
                        <div class="accord-content">
                            <p>
                                U-Bent Tubes are available in a wide range of materials including Stainless Steel, Carbon Steel, 
                                Alloy Steel, Duplex & Super Duplex, and Nickel Alloys. Each material is selected based on the 
                                required temperature, pressure, and corrosion resistance for the application.
                            </p>
                        </div>
                    </div>
                    <!--End single accordion box-->

                    <!--Start single accordion box-->
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What are the key advantages of using U-Bent Tubes?</h4>
                        </div>
                        <div class="accord-content">
                            <p>
                                U-Bent Tubes offer multiple benefits such as compact design, high heat transfer efficiency, 
                                and reduced pressure drop. They also provide exceptional corrosion resistance, dimensional precision, 
                                and can handle high pressure and temperature conditions efficiently.
                            </p>
                        </div>
                    </div>
                    <!--End single accordion box-->

                    <!--Start single accordion box-->
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Which industries commonly use U-Bent Tubes?</h4>
                        </div>
                        <div class="accord-content">
                            <p>
                                U-Bent Tubes are used in power generation, petrochemical, fertilizer, chemical, 
                                desalination, and HVAC industries. They play a key role in heat exchangers, condensers, 
                                boilers, and economizers for efficient energy recovery.
                            </p>
                        </div>
                    </div>
                    <!--End single accordion box-->

                    <!--Start single accordion box-->
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What testing and inspection standards are followed?</h4>
                        </div>
                        <div class="accord-content">
                            <p>
                                All U-Bent Tubes supplied by <b>Moksh Tubes & Fittings LLP</b> undergo rigorous quality checks, 
                                including Non-Destructive Testing (NDT), Eddy Current, Hydrostatic, and PMI tests. 
                                Third-party inspection and ISO 9001:2015 compliance ensure superior quality and reliability.
                            </p>
                        </div>
                    </div>
                    <!--End single accordion box-->

                    <!--Start single accordion box-->
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Can U-Bent Tubes be customized for specific designs?</h4>
                        </div>
                        <div class="accord-content">
                            <p>
                                Yes, U-Bent Tubes can be custom-fabricated in various diameters, lengths (up to 12 meters), 
                                and bend radii as per customer drawings. CNC-controlled bending ensures minimal ovality, 
                                thinning, and perfect dimensional precision.
                            </p>
                        </div>
                    </div>
                    <!--End single accordion box-->

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
                    For further information, quotes, or customized u-bent-tube products, <strong>Moksh Tubes & Fittings
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
      "name": "What are U-Bent Tubes used for?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "U-Bent Tubes are used in heat exchangers, condensers, boilers, and other thermal systems to facilitate fluid return flow in compact designs. Their U-shaped configuration allows efficient heat transfer while reducing the need for extra fittings or space."
      }
    },
    {
      "@type": "Question",
      "name": "What materials are available for U-Bent Tubes?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "U-Bent Tubes are available in Stainless Steel, Carbon Steel, Alloy Steel, Duplex & Super Duplex, and Nickel Alloys. Each material is chosen based on the required temperature, pressure, and corrosion resistance for the application."
      }
    },
    {
      "@type": "Question",
      "name": "What are the key advantages of using U-Bent Tubes?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "U-Bent Tubes offer multiple benefits such as compact design, high heat transfer efficiency, and reduced pressure drop. They provide exceptional corrosion resistance, dimensional precision, and can handle high pressure and temperature conditions efficiently."
      }
    },
    {
      "@type": "Question",
      "name": "Which industries commonly use U-Bent Tubes?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "U-Bent Tubes are used in power generation, petrochemical, fertilizer, chemical, desalination, and HVAC industries. They are essential in heat exchangers, condensers, boilers, and economizers for efficient energy recovery."
      }
    },
    {
      "@type": "Question",
      "name": "What testing and inspection standards are followed?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "All U-Bent Tubes supplied by Moksh Tubes & Fittings LLP undergo Non-Destructive Testing (NDT), Eddy Current, Hydrostatic, and PMI tests. They are third-party inspected and comply with ISO 9001:2015 standards for quality assurance."
      }
    },
    {
      "@type": "Question",
      "name": "Can U-Bent Tubes be customized for specific designs?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, U-Bent Tubes can be custom-fabricated in various diameters, lengths, and bend radii as per customer drawings. CNC-controlled bending ensures minimal ovality, thinning, and precise dimensional accuracy."
      }
    }
  ]
}
@endverbatim
</script>
@endsection
