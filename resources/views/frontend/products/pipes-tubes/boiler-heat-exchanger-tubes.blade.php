@extends('layouts.master')
@section('title', 'ASTM A179 A192 A213 Boiler & Heat Exchanger Tubes | India & GCC')
<!-- 52 characters -->
@section(
    'meta_description',
    'Boiler & Heat Exchanger Tubes for high-temperature, high-pressure & corrosive environments. Seamless, welded & U-bend tubes in Carbon, Alloy, Stainless, Duplex, Nickel & Titanium options.'
)
@section(
    'meta_keywords',
    'Boiler Heat Exchanger Tubes, ASTM A179 Tubes, ASTM A213 Tubes, Seamless Boiler Tubes, U-Bent
    Heat Exchanger Tubes, Stainless Steel'
)
@section('og_image', asset('assets/images/product/boiler-and-heat.webp'))
@section('og_type', 'product')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/product/boiler-heat-banner.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1 class="page-title">Boiler & Heat Exchanger Tubes â€“ ASTM A179 / A192 / A213 (Seamless, Welded & U-Bend)</h1>

                </div>
            </div>
        </div>
    </section>



    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Boiler & Heat Exchanger Tubes</h2>
            </div>

            <div class="row align-items-center">
                <!-- Left Image -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('/assets/images/product/boiler-and-heat.webp') }}"
                        alt="Boiler & Heat Exchanger Tubes" class="img-fluid rounded shadow-sm" width="550"
                        height="350" loading="lazy">
                </div>

                <!-- Right Content -->
                <div class="col-md-6">
                    <p class="fs-6 mb-3 text-justify">
                        <strong class="text-black">Boiler &amp; Heat Exchanger Tubes</strong> are critical heat-transfer components designed to operate reliably under high temperature, high pressure, and corrosive environments. These tubes are extensively used in boilers, superheaters, economizers, condensers, and industrial heat exchangers across power plants, refineries, petrochemical units, chemical processing industries, marine systems, desalination plants, and HVAC applications.
                    </p>

                    <p class="fs-6 mb-3 text-justify">
                        At <a href="{{ route('index') }}">Moksh Tubes & Fittings LLP</a>, we are a trusted manufacturer, supplier, and exporter of Boiler & Heat Exchanger Tubes in India, supplying premium-quality tubes conforming to ASTM A179, ASTM A192, ASTM A213, and ASME SA213 standards. Our products are widely supplied to <a href="{{ route('materials.austenitic-stainless-Steel') }}">Indian projects</a> and Gulf / GCC countries including UAE, Saudi Arabia, Qatar, Oman, and Kuwait.
                    </p>

                    <p class="fs-6 text-justify">
                        Manufactured using advanced seamless and welded (ERW & EFW) processes, our boiler and heat exchanger tubes offer excellent mechanical strength, corrosion resistance, dimensional accuracy, and long service life, even in extreme operating conditions.
                    </p>

                </div>
            </div>
        </div>
    </section>
    {{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Boiler & Heat Exchanger Tubes Datasheet</h3>
            <p class="mb-3">
                Get the complete datasheet with chemical composition, mechanical properties, heat treatment details, and application guidelines.
                ðŸ‘‰ Enter your email below to receive the PDF instantly.
            </p>

            <!-- Lead Capture Form -->
            <form id="leadForm" method="POST" action="https://mokshtubes.com/datasheet-leads-capture" class="mb-3">
                <input type="hidden" name="_token" value="WNVWvpO4YR2OqZaIJDl2mE3UfyreGys3Vp19brsc" autocomplete="off">
                <div class="row justify-content-center">
                    <input type="hidden" name="pdf" value="haynes-242.pdf">
                    <div class="col-md-6 mb-2">
                        <input type="email" name="email" required="" class="form-control p-3"
                            placeholder="Enter your email address">
                    </div>
                    <div class="col-md-3 mb-2">
                        <button type="submit" class="btn btn-lg w-100 text-white"
                            style="background-color:#db7227; border-radius:8px;">
                            ðŸ“¥ Get Datasheet
                        </button>
                    </div>
                </div>
            </form>


            <hr class="my-4">
            <p class="small text-muted">
                We respect your privacy. Your email will only be used to send the datasheet.
            </p>
        </div>
    </section>
    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>SPECIFICATIONS</h2>
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
                                    <td><a href="{{ route('materials.austenitic-stainless-Steel') }}">Stainless Steel</a>, <a href="{{ route('materials.duplex-and-super-duplex') }}">Duplex & Super Duplex Steel</a>, <a href="{{ route('materials.nickel-Based-Superalloys') }}">Nickel Alloys</a>, <a href="{{ route('materials.inconel') }}">Inconel</a>, Monel, <a href="{{ route('materials.titanium') }}">Titanium</a>, Copper Alloys, Alloy Steel, Carbon Steel</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Grades</td>
                                    <td>ASTM/ASME certified â€“ available in all mentioned alloys</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Outer Diameter (OD)</td>
                                    <td>6 mm to 219 mm (Â¼â€ to 8â€ NB)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Wall Thickness</td>
                                    <td>0.5 mm to 12.7 mm (standard & custom schedules)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Lengths</td>
                                    <td>Up to 12 meters or cut-to-length as per project needs</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Finishes</td>
                                    <td>Bright Annealed, Pickled & Passivated, Electro Polished, Matte</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Types</td>
                                    <td>Seamless, Welded (ERW, EFW), U-Bent Tubes</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Standards</td>
                                    <td>ASTM A179, A192, A213, A249, A269, A333, ASME SA213, EN 10216, DIN standards</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Applications</td>
                                    <td>Boilers, Heat Exchangers, Superheaters, Condensers, Economizers</td>
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
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Charts</h2>
            </div>

            <!-- Child Title -->
            <div class="section-title center mb-3">
                 <h3 class="text-center mb-0" style="color: #db7227;">Size Range Chart</h3>
                 <h4 class="text-center mb-0" style="color: #db7227;">Boiler & Heat Exchanger Tubes â€“ Weight Chart</h4>
            </div>
            <!-- Schedule 10C -->
            <div class="section-title center mb-3 mt-4">
                 <h4 class="text-center mb-0" style="color: #db7227;">Schedule 10C â€“ Size & Weight Chart</h4>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>NB (mm)</th>
                            <th>NPS</th>
                            <th>OD (mm)</th>
                            <th>Wall Thickness (mm)</th>
                            <th>Weight (kg/m)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>3</td><td>1/8</td><td>10.3</td><td>1.24</td><td>0.28</td></tr>
                        <tr><td>6</td><td>1/4</td><td>13.7</td><td>1.24</td><td>0.39</td></tr>
                        <tr><td>10</td><td>3/8</td><td>17.1</td><td>1.24</td><td>0.49</td></tr>
                        <tr><td>15</td><td>1/2</td><td>21.3</td><td>1.65</td><td>0.81</td></tr>
                        <tr><td>20</td><td>3/4</td><td>26.7</td><td>1.65</td><td>1.04</td></tr>
                        <tr><td>25</td><td>1</td><td>33.4</td><td>1.65</td><td>1.32</td></tr>
                        <tr><td>32</td><td>1 1/4</td><td>42.2</td><td>1.65</td><td>1.68</td></tr>
                        <tr><td>40</td><td>1 1/2</td><td>48.3</td><td>1.65</td><td>1.93</td></tr>
                        <tr><td>50</td><td>2</td><td>60.3</td><td>1.65</td><td>2.43</td></tr>
                        <tr><td>65</td><td>2 1/2</td><td>73.0</td><td>1.65</td><td>2.96</td></tr>
                        <tr><td>80</td><td>3</td><td>88.9</td><td>1.65</td><td>3.62</td></tr>
                        <tr><td>100</td><td>4</td><td>114.3</td><td>1.65</td><td>4.67</td></tr>
                        <tr><td>125</td><td>5</td><td>141.3</td><td>1.65</td><td>5.79</td></tr>
                        <tr><td>150</td><td>6</td><td>168.3</td><td>1.65</td><td>6.91</td></tr>
                        <tr><td>200</td><td>8</td><td>219.1</td><td>2.11</td><td>11.51</td></tr>
                        <tr><td>250</td><td>10</td><td>273.1</td><td>2.77</td><td>18.81</td></tr>
                        <tr><td>300</td><td>12</td><td>323.9</td><td>3.05</td><td>24.59</td></tr>
                        <tr><td>350</td><td>14</td><td>355.6</td><td>3.4</td><td>30.1</td></tr>
                        <tr><td>400</td><td>16</td><td>406.4</td><td>3.4</td><td>34.44</td></tr>
                        <tr><td>450</td><td>18</td><td>457.2</td><td>3.8</td><td>43.28</td></tr>
                        <tr><td>500</td><td>20</td><td>508.0</td><td>3.8</td><td>48.15</td></tr>
                        <tr><td>600</td><td>24</td><td>609.6</td><td>4.0</td><td>60.92</td></tr>
                    </tbody>
                </table>
            </div>

            <!-- Schedule 40 -->
            <div class="section-title center mb-3 mt-4">
                 <h4 class="text-center mb-0" style="color: #db7227;">Schedule 40 â€“ Size & Weight Chart</h4>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>NB (mm)</th>
                            <th>NPS</th>
                            <th>OD (mm)</th>
                            <th>Wall Thickness (mm)</th>
                            <th>Weight (kg/m)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>3</td><td>1/8</td><td>10.3</td><td>1.73</td><td>0.37</td></tr>
                        <tr><td>6</td><td>1/4</td><td>13.7</td><td>2.24</td><td>0.64</td></tr>
                        <tr><td>10</td><td>3/8</td><td>17.1</td><td>2.31</td><td>0.86</td></tr>
                        <tr><td>15</td><td>1/2</td><td>21.3</td><td>2.77</td><td>1.27</td></tr>
                        <tr><td>20</td><td>3/4</td><td>26.7</td><td>2.87</td><td>1.7</td></tr>
                        <tr><td>25</td><td>1</td><td>33.4</td><td>3.38</td><td>2.46</td></tr>
                        <tr><td>32</td><td>1 1/4</td><td>42.2</td><td>3.56</td><td>3.61</td></tr>
                        <tr><td>40</td><td>1 1/2</td><td>48.3</td><td>3.68</td><td>4.18</td></tr>
                        <tr><td>50</td><td>2</td><td>60.3</td><td>3.91</td><td>5.44</td></tr>
                        <tr><td>65</td><td>2 1/2</td><td>73.0</td><td>5.16</td><td>8.63</td></tr>
                        <tr><td>80</td><td>3</td><td>88.9</td><td>5.49</td><td>11.29</td></tr>
                        <tr><td>100</td><td>4</td><td>114.3</td><td>6.02</td><td>17.15</td></tr>
                        <tr><td>125</td><td>5</td><td>141.3</td><td>6.55</td><td>23.85</td></tr>
                        <tr><td>150</td><td>6</td><td>168.3</td><td>7.11</td><td>30.7</td></tr>
                        <tr><td>200</td><td>8</td><td>219.1</td><td>8.18</td><td>49.56</td></tr>
                        <tr><td>250</td><td>10</td><td>273.1</td><td>9.27</td><td>73.5</td></tr>
                        <tr><td>300</td><td>12</td><td>323.9</td><td>10.31</td><td>95.54</td></tr>
                        <tr><td>350</td><td>14</td><td>355.6</td><td>11.13</td><td>112.63</td></tr>
                        <tr><td>400</td><td>16</td><td>406.4</td><td>12.7</td><td>144.27</td></tr>
                        <tr><td>450</td><td>18</td><td>457.2</td><td>14.27</td><td>179.28</td></tr>
                        <tr><td>500</td><td>20</td><td>508.0</td><td>15.09</td><td>213.93</td></tr>
                        <tr><td>600</td><td>24</td><td>609.6</td><td>15.88</td><td>274.06</td></tr>
                    </tbody>
                </table>
            </div>

            <!-- Schedule 80 -->
            <div class="section-title center mb-3 mt-4">
                 <h4 class="text-center mb-0" style="color: #db7227;">Schedule 80 â€“ Size & Weight Chart</h4>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>NB (mm)</th>
                            <th>NPS</th>
                            <th>OD (mm)</th>
                            <th>Wall Thickness (mm)</th>
                            <th>Weight (kg/m)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>3</td><td>1/8</td><td>10.3</td><td>1.73</td><td>0.37</td></tr>
                        <tr><td>6</td><td>1/4</td><td>13.7</td><td>3.02</td><td>0.83</td></tr>
                        <tr><td>10</td><td>3/8</td><td>17.1</td><td>3.2</td><td>1.13</td></tr>
                        <tr><td>15</td><td>1/2</td><td>21.3</td><td>3.73</td><td>1.63</td></tr>
                        <tr><td>20</td><td>3/4</td><td>26.7</td><td>3.91</td><td>2.3</td></tr>
                        <tr><td>25</td><td>1</td><td>33.4</td><td>4.55</td><td>3.38</td></tr>
                        <tr><td>32</td><td>1 1/4</td><td>42.2</td><td>4.85</td><td>4.84</td></tr>
                        <tr><td>40</td><td>1 1/2</td><td>48.3</td><td>5.08</td><td>5.61</td></tr>
                        <tr><td>50</td><td>2</td><td>60.3</td><td>5.54</td><td>7.48</td></tr>
                        <tr><td>65</td><td>2 1/2</td><td>73.0</td><td>7.01</td><td>11.76</td></tr>
                        <tr><td>80</td><td>3</td><td>88.9</td><td>7.62</td><td>15.74</td></tr>
                        <tr><td>100</td><td>4</td><td>114.3</td><td>8.56</td><td>25.1</td></tr>
                        <tr><td>125</td><td>5</td><td>141.3</td><td>9.53</td><td>36.46</td></tr>
                        <tr><td>150</td><td>6</td><td>168.3</td><td>10.97</td><td>49.56</td></tr>
                        <tr><td>200</td><td>8</td><td>219.1</td><td>12.7</td><td>77.1</td></tr>
                        <tr><td>250</td><td>10</td><td>273.1</td><td>15.09</td><td>114.0</td></tr>
                        <tr><td>300</td><td>12</td><td>323.9</td><td>17.48</td><td>153.0</td></tr>
                        <tr><td>350</td><td>14</td><td>355.6</td><td>19.05</td><td>180.0</td></tr>
                        <tr><td>400</td><td>16</td><td>406.4</td><td>21.44</td><td>227.5</td></tr>
                        <tr><td>450</td><td>18</td><td>457.2</td><td>23.83</td><td>282.5</td></tr>
                        <tr><td>500</td><td>20</td><td>508.0</td><td>26.18</td><td>342.0</td></tr>
                        <tr><td>600</td><td>24</td><td>609.6</td><td>30.96</td><td>480.0</td></tr>
                    </tbody>
                </table>
            </div>

            <!-- Schedule 160 -->
            <div class="section-title center mb-3 mt-4">
                 <h4 class="text-center mb-0" style="color: #db7227;">Schedule 160 â€“ Size & Weight Chart</h4>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>NB (mm)</th>
                            <th>NPS</th>
                            <th>OD (mm)</th>
                            <th>Wall Thickness (mm)</th>
                            <th>Weight (kg/m)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>3</td><td>1/8</td><td>10.3</td><td>2.41</td><td>0.49</td></tr>
                        <tr><td>6</td><td>1/4</td><td>13.7</td><td>3.02</td><td>0.83</td></tr>
                        <tr><td>10</td><td>3/8</td><td>17.1</td><td>3.2</td><td>1.13</td></tr>
                        <tr><td>15</td><td>1/2</td><td>21.3</td><td>4.09</td><td>1.75</td></tr>
                        <tr><td>20</td><td>3/4</td><td>26.7</td><td>4.55</td><td>2.63</td></tr>
                        <tr><td>25</td><td>1</td><td>33.4</td><td>6.35</td><td>4.51</td></tr>
                        <tr><td>32</td><td>1 1/4</td><td>42.2</td><td>6.35</td><td>6.12</td></tr>
                        <tr><td>40</td><td>1 1/2</td><td>48.3</td><td>7.14</td><td>7.92</td></tr>
                        <tr><td>50</td><td>2</td><td>60.3</td><td>8.71</td><td>11.06</td></tr>
                        <tr><td>65</td><td>2 1/2</td><td>73.0</td><td>9.53</td><td>14.9</td></tr>
                        <tr><td>80</td><td>3</td><td>88.9</td><td>11.13</td><td>21.31</td></tr>
                        <tr><td>100</td><td>4</td><td>114.3</td><td>13.49</td><td>34.35</td></tr>
                        <tr><td>125</td><td>5</td><td>141.3</td><td>15.88</td><td>53.3</td></tr>
                        <tr><td>150</td><td>6</td><td>168.3</td><td>18.26</td><td>75.53</td></tr>
                        <tr><td>200</td><td>8</td><td>219.1</td><td>23.01</td><td>123.9</td></tr>
                        <tr><td>250</td><td>10</td><td>273.1</td><td>28.58</td><td>190.5</td></tr>
                        <tr><td>300</td><td>12</td><td>323.9</td><td>33.32</td><td>268.0</td></tr>
                        <tr><td>350</td><td>14</td><td>355.6</td><td>35.71</td><td>327.0</td></tr>
                        <tr><td>400</td><td>16</td><td>406.4</td><td>40.49</td><td>429.5</td></tr>
                        <tr><td>450</td><td>18</td><td>457.2</td><td>45.24</td><td>544.0</td></tr>
                        <tr><td>500</td><td>20</td><td>508.0</td><td>50.01</td><td>677.5</td></tr>
                        <tr><td>600</td><td>24</td><td>609.6</td><td>59.54</td><td>997.0</td></tr>
                    </tbody>
                </table>
            </div>

            <!-- Schedule XXC -->
            <div class="section-title center mb-3 mt-4">
                 <h4 class="text-center mb-0" style="color: #db7227;">Schedule XXC â€“ Size & Weight Chart</h4>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>NB (mm)</th>
                            <th>NPS</th>
                            <th>OD (mm)</th>
                            <th>Wall Thickness (mm)</th>
                            <th>Weight (kg/m)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>3</td><td>1/8</td><td>10.3</td><td>2.41</td><td>0.49</td></tr>
                        <tr><td>6</td><td>1/4</td><td>13.7</td><td>3.02</td><td>0.83</td></tr>
                        <tr><td>10</td><td>3/8</td><td>17.1</td><td>3.2</td><td>1.13</td></tr>
                        <tr><td>15</td><td>1/2</td><td>21.3</td><td>4.78</td><td>1.98</td></tr>
                        <tr><td>20</td><td>3/4</td><td>26.7</td><td>6.02</td><td>3.32</td></tr>
                        <tr><td>25</td><td>1</td><td>33.4</td><td>7.47</td><td>5.25</td></tr>
                        <tr><td>32</td><td>1 1/4</td><td>42.2</td><td>9.09</td><td>8.26</td></tr>
                        <tr><td>40</td><td>1 1/2</td><td>48.3</td><td>10.15</td><td>10.68</td></tr>
                        <tr><td>50</td><td>2</td><td>60.3</td><td>11.07</td><td>14.82</td></tr>
                        <tr><td>65</td><td>2 1/2</td><td>73.0</td><td>13.49</td><td>21.56</td></tr>
                        <tr><td>80</td><td>3</td><td>88.9</td><td>15.24</td><td>29.83</td></tr>
                        <tr><td>100</td><td>4</td><td>114.3</td><td>18.26</td><td>47.17</td></tr>
                        <tr><td>125</td><td>5</td><td>141.3</td><td>21.95</td><td>70.65</td></tr>
                        <tr><td>150</td><td>6</td><td>168.3</td><td>25.4</td><td>99.57</td></tr>
                        <tr><td>200</td><td>8</td><td>219.1</td><td>28.58</td><td>144.45</td></tr>
                        <tr><td>250</td><td>10</td><td>273.1</td><td>31.75</td><td>202.0</td></tr>
                        <tr><td>300</td><td>12</td><td>323.9</td><td>36.53</td><td>281.25</td></tr>
                        <tr><td>350</td><td>14</td><td>355.6</td><td>38.89</td><td>338.0</td></tr>
                        <tr><td>400</td><td>16</td><td>406.4</td><td>44.45</td><td>442.5</td></tr>
                        <tr><td>450</td><td>18</td><td>457.2</td><td>50.01</td><td>562.0</td></tr>
                        <tr><td>500</td><td>20</td><td>508.0</td><td>55.56</td><td>697.0</td></tr>
                        <tr><td>600</td><td>24</td><td>609.6</td><td>63.5</td><td>984.0</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </section>




    <script>
        // document.addEventListener("DOMContentLoaded", function() {
        //     const fullTable = document.getElementById("table-5c-full");
        //     const btn = document.getElementById("toggleBtn");

        //     fullTable.addEventListener("shown.bs.collapse", function() {
        //         btn.textContent = "Show Less";
        //     });

        //     fullTable.addEventListener("hidden.bs.collapse", function() {
        //         btn.textContent = "View Full Chart";
        //     });
        // });

        // document.addEventListener("DOMContentLoaded", function() {
        //     const tables = document.querySelectorAll(".table-5c-full");
        //     const buttons = document.querySelectorAll(".toggleBtn");

        //     tables.forEach((table) => {
        //         buttons.forEach((btn) => {

        //             table.addEventListener("shown.bs.collapse", function() {
        //                 btn.textContent = "Show Less";
        //             });

        //             table.addEventListener("hidden.bs.collapse", function() {
        //                 btn.textContent = "View Full Chart";
        //             });

        //         });
        //     });
        // });
    </script>










    {{-- Grades Available --}}
    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Available Grades & Materials</h2>
            </div>
            <div class="section-title center mb-3">
                <h4 class="text-center mb-0" style="color: #db7227;">Boiler & Heat Exchanger Tubes are offered in a wide
                    range of materials and grades:</h4>
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
                                    <td><a href="{{ route('materials.austenitic-stainless-Steel') }}">Stainless Steel</a></td>
                                    <td>304, 304L, 316, 316L, 310, 321, 347 for high-temperature resistance.</td>
                                </tr>
                                <tr class="t-row">
                                    <td><a href="{{ route('materials.duplex-and-super-duplex') }}">Duplex & Super Duplex: </a></td>
                                    <td>2205, S31803, S32750 for high strength and corrosion </td>
                                </tr>
                                <tr class="t-row">
                                    <td><a href="{{ route('materials.nickel-Based-Superalloys') }}">Nickel Alloys</a></td>
                                    <td>Inconel 600, 625, 718, Monel 400, K500 for extreme environments.</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Alloy Steel</td>
                                    <td>T11, T12, T22, T91 for high pressure boilers.</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon Steel</td>
                                    <td>ASTM A179, A192 for low and medium pressure boilers.</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Copper Alloys</td>
                                    <td>Cu-Ni 70/30, 90/10 for marine heat exchangers and condensers.</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Titanium</td>
                                    <td><a href="{{ route('materials.titanium') }}">Grades 1, 2</a> for desalination plants
                                        and chemical industries.</td>
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
                                    alt="Nickel alloy tubes for heat exchangers" loading="lazy" width="400"
                                    height="260">
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
                                    alt="Duplex and super duplex tubes for seawater service" loading="lazy"
                                    width="400" height="260">
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
                                    alt="Haynes superalloy tubes for high-temperature service" loading="lazy"
                                    width="400" height="260">
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



    {{-- Applications --}}
    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Boiler & Heat Exchanger Tubes</h2>
                <p class="text-center pb-3">
                    <strong class="text-black">Boiler & Heat Exchanger Tubes </strong> are crucial for industries where
                    efficient heat transfer and mechanical strength are required:
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon">
                            <i class="bi bi-gear-wide-connected"></i>
                        </div>
                        <h5>Power Generation</h5>
                        <ul>
                            <li>Superheater & reheater tubes</li>
                            <li>Boiler tubes for thermal, gas & nuclear plants</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Oil & Gas / Petrochemical</h5>
                        <ul>
                            <li>Process heat exchangers</li>
                            <li>Condensers & coolers</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Chemical & Fertilizer Plants</h5>
                        <ul>
                            <li>Reactors, evaporators, cooling towers</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Marine & Offshore</h5>
                        <ul>
                            <li>Cu-Ni & Titanium seawater condensers</li>
                            <li>Marine boiler systems</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Food & Dairy</h5>
                        <ul>
                            <li>Hygienic stainless-steel heat exchanger tubes</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>HVAC & Refrigeration</h5>
                        <ul>
                            <li>Evaporators, condensers, chilled water systems</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        {{-- <p class="text-center pb-3 my-4"><strong class="text-dark">HASTELLOY C-276's</strong> unique combination of
                corrosion resistance, weldability, and mechanical durability makes it a reliable material for
                mission-critical applications where long-term performance is non-negotiable.

            </p> --}}
        </div>
    </section>


    {{-- Industries We Serve --}}
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Industries We Serve</h2>
            </div>

            <div class="row g-4 mt-4">

                <div class="col-6 col-md-4 col-lg-2">
                    <div class="application-card text-center">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Power Plants</h5>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-2">
                    <div class="application-card text-center">
                        <div class="application-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Petrochemical</h5>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-2">
                    <div class="application-card text-center">
                        <div class="application-icon"><i class="ri-ship-2-fill"></i></div>
                        <h5>Marine</h5>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-2">
                    <div class="application-card text-center">
                        <div class="application-icon"><i class="ri-test-tube-fill"></i></div>
                        <h5>Chemical</h5>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-2">
                    <div class="application-card text-center">
                        <div class="application-icon"><i class="bi bi-water"></i></div>
                        <h5>Desalination</h5>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-2">
                    <div class="application-card text-center">
                        <div class="application-icon"><i class="bi bi-snow"></i></div>
                        <h5>HVAC</h5>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Buying Guide Section (Styled for Your UI) -->
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Buying Guide:</h2>
                <h4 style="color: #db7227;">How to Select the Right Boiler & Heat Exchanger Tube</h4>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-md-12">
                    <div class="application-card">
                        {{--    <div class="application-icon center"><i class="bi bi-brightness-high-fill"></i><h5>3. Material Selection Guide</h5></div> --}}
                        <div class="application-icon center d-flex align-items-center gap-4 justify-content-center">
                            <i class="bi bi-brightness-high-fill"></i>
                            <h5 class="m-0">Material Selection Guide</h5>
                        </div>



                        <div class="table-responsive mt-3">
                            <table class="table table-bordered">
                                <thead class="table-light">
                                    <tr>
                                        <th>Material</th>
                                        <th>Ideal For</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="{{ route('materials.austenitic-stainless-Steel') }}">Stainless Steel</a></td>
                                        <td>Steam, hygienic systems</td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{ route('materials.duplex-and-super-duplex') }}">Duplex / Super Duplex</a></td>
                                        <td>Seawater, chlorides</td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{ route('materials.nickel-Based-Superalloys') }}">Nickel Alloys</a></td>
                                        <td>Acids, extreme corrosion</td>
                                    </tr>
                                    <tr>
                                        <td>Carbon Steel</td>
                                        <td>High-pressure boiler tubes</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <!-- Card 1 -->
                <!-- Card 1 -->

                <!-- Card 1 -->



            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Engineering Diagrams</h2>
            </div>

            <div class="row g-4 mt-4">

                <!-- Diagram 1 -->
                <div class="col-md-6 center">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-diagram-3"></i></div>

                        <a class="" href="{{ route('products.pipes-tubes.boiler-heat-exchanger-tubes') }}">
                            <img class="w-100" src="{{ asset('/assets/images/product/basic-tube-layout.webp') }}"
                                alt="basic tube layout of boiler heat exchanger" loading="lazy" width="400"
                                height="260">
                        </a>
                    </div>
                </div>

                <!-- Diagram 2 -->
                <div class="col-md-6 center">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-diagram-3-fill"></i></div>

                        <a class="" href="{{ route('products.pipes-tubes.u-bent-tubes') }}">
                            <img class="w-100"
                                src="{{ asset('/assets/images/product/u-bent-tube-heat-exchange-layout.webp') }}"
                                alt="u bent tube layout of boiler heat exchange" loading="lazy" width="400"
                                height="260">
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Uses of Welded Pipes and Tubes --}}
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Uses of Boiler & Heat Exchanger Tubes</h2>
            </div>
            <!-- Child Title -->
            <div class="section-title center mb-3">
                <h4 class="text-center mb-0" style="color: #db7227;">Boiler & Heat Exchanger Tubes are used extensively
                    across multiple
                    industries, including:</h4>
            </div>
            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h4>Efficient Heat Transfer</h4>
                        <h5>Ensures efficient heat transfer in industrial systems</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h4>Extreme Condition Performance</h4>
                        <h5>Handles extreme temperature and pressure conditions</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h4>Corrosion Resistance</h4>
                        <h5>Provides corrosion resistance in aggressive environments</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h4>Energy Efficiency Support</h4>
                        <h5>Supports energy efficiency in power plants and process industries</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h4>Multi-Media Compatibility</h4>
                        <h5>Suitable for steam, gas, liquid, and chemical transport in heat systems</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h4>Operational Reliability</h4>
                        <h5>Delivers long term reliability and consistent performance in demanding applications</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Advantages of Welded Pipes & Tubes --}}
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Advantages </h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h4>High Temperature Strength</h4>
                        <h5>Maintains integrity in boilers and superheaters.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h4>Precision Manufacturing</h4>
                        <h5>Tight dimensional tolerances for critical applications.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h4>Corrosion & Oxidation Resistance</h4>
                        <h5>Suitable for marine and chemical exposure.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h4>Versatile Material Selection</h4>
                        <h5>Stainless, alloy, carbon, copper <a
                                href="{{ route('materials.nickel-Based-Superalloys') }}">nickel</a> & titanium options.
                        </h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h4>Global Standards Compliance</h4>
                        <h5>Manufactured to ASTM, ASME, DIN, EN requirements.</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Testing & Quality Control for Boiler & Heat Exchanger Tubes</h2>
            </div>

            <div class="row g-4 mt-4">

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-fill"></i></div>
                        <h4>Hydrostatic Test</h4>
                        <h5>Hydrostatic test for pressure integrity verification.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-activity"></i></div>
                        <h4>Eddy Current Test</h4>
                        <h5>Eddy current testing for detecting surface-level defects.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-check2-circle"></i></div>
                        <h4>PMI Test</h4>
                        <h5>PMI testing to verify material grade and composition.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-hammer"></i></div>
                        <h4>Hardness Test</h4>
                        <h5>Hardness testing for strength and durability confirmation.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-arrows-expand"></i></div>
                        <h4>Flattening & Flaring Test</h4>
                        <h5>Flattening and flaring to assess ductility and deformation.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-broadcast-pin"></i></div>
                        <h4>Ultrasonic Test (UT)</h4>
                        <h5>Ultrasonic testing for internal and volumetric defects.</h5>
                    </div>
                </div>

            </div>

    </section>



    {{-- why choose us --}}
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container text-center">
            <div class="section-title center">
                <h2>Why Choose Moksh Tubes?</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-award-fill"></i></div>
                        <h5>Ready stock for fast dispatch
                        </h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Project-based sourcing & bulk supply capability
                        </h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Compliance with Indian & Gulf standards</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Export-grade packaging & complete documentation</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Reliable delivery timelines</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Technical support for EPC & industrial projects</h5>
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
                            <h2>Frequently Asked Questions (FAQ)</h2>

                        </div>

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are Boiler & Heat Exchanger Tubes?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Boiler & Heat Exchanger Tubes are precision-engineered components used in power plants,
                                    refineries, chemical industries, and various heat-transfer systems. They are built to
                                    withstand high temperature, high pressure, and corrosive environments while maintaining
                                    stable heat transfer efficiency.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What materials are used to manufacture these tubes?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    These tubes are manufactured in Stainless Steel, Duplex/Super Duplex, Nickel Alloys
                                    (Inconel, Monel), Alloy Steel, Carbon Steel, Copper Alloys, and Titanium. The selection
                                    depends on the operating temperature, pressure, and fluid medium.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What sizes and dimensions are available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Boiler & Heat Exchanger Tubes are available from 6 mm to 219 mm OD, 0.5 mm to 12.7 mm
                                    wall thickness, and lengths up to 12 meters. Available in Seamless, Welded, ERW, EFW,
                                    and U-Bent forms.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What standards do these tubes meet?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    These tubes are manufactured according to ASTM A179, A192, A213, A249, A269, A333, ASME
                                    SA213, EN 10216, DIN, and related global specifications with strict inspection and QC.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the main applications of Boiler & Heat Exchanger Tubes?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Used in boilers, superheaters, reheaters, economizers, heat exchangers, condensers,
                                    petrochemical heaters, chemical processing, marine applications (Cu-Ni & titanium), food
                                    & dairy systems, and HVAC/refrigeration.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->


                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What is the MOQ and typical lead time?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Exâ€‘stock sizes dispatch 2â€“5 days; makeâ€‘toâ€‘order 2â€“6 weeks, grade/OD/WT par depend karta
                                    hai.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->


                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What test certificates and NDT do you provide?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    EN 10204 3.1 MTC with heat/lot traceability; Hydro, Eddy Current, UT, PMI, Hardness
                                    testing available as per PO.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->


                    </div>
                </div>
    </section>
    <!--End faq content area-->

    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Contact Us</h2>
                <p>
                    For further information, quotes, or customized boiler and heat exchanger tube products, <strong>Moksh
                        Tubes & Fittings
                        LLP</strong> is your dependable partner for Boiler & Heat Exchanger Tubing Solutions.</p>
                <!-- Call button -->
                <a href="javascript:void(0);" class="contact-cta-btn" data-bs-toggle="modal"
                    data-bs-target="#contactFormModal">
                    Get in Touch
                </a>
            </div>
        </div>
    </section>

@endsection

@push('styles')
    <style>
        /* Base state for collapsed rows */
        tr.collapse {
            opacity: 0;
            transform: translateY(-6px) scale(0.98);
            transition:
                opacity .35s ease,
                transform .35s ease;
        }

        /* When collapsing (Bootstrap interim state) */
        tr.collapsing {
            opacity: 0;
            transform: translateY(-10px) scale(0.96);
            display: table-row !important;
        }

        /* When fully shown */
        tr.collapse.show {
            opacity: 1;
            transform: translateY(0) scale(1);
            display: table-row;
        }
    </style>
@endpush



@section('jsscripts')
    @verbatim
                <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@graph": [

            /* ======================================================
               0. INLINE ORGANIZATION (LIGHT VERSION FOR LINKING)
               (Full version will be in layouts.master)
            ====================================================== */
            {
              "@type": ["Organization", "LocalBusiness"],
              "@id": "https://mokshtubes.com/#organization",
              "name": "Moksh Tubes & Fittings LLP",
              "url": "https://mokshtubes.com/",
              "logo": "https://mokshtubes.com/assets/images/logo.webp",
              "telephone": "+91-9769584950",
              "email": "info@mokshtubes.com",
              "address": {
                "@type": "PostalAddress",
                "addressLocality": "Mumbai",
                "addressRegion": "MH",
                "addressCountry": "IN"
              }
            },

            /* ======================================================
               1. WEBSITE REFERENCE (FULL VERSION IN HEAD)
            ====================================================== */
            {
              "@type": "WebSite",
              "@id": "https://mokshtubes.com/#website",
              "url": "https://mokshtubes.com/",
              "name": "Moksh Tubes & Fittings LLP"
            },

            /* ======================================================
               2. PAGE LEVEL â€” WebPage Schema
            ====================================================== */
            {
              "@type": "WebPage",
              "@id": "https://mokshtubes.com/products/pipes-tubes/boiler-heat-exchanger-tubes#webpage",
              "name": "Boiler & Heat Exchanger Tubes | Moksh Tubes & Fittings LLP",
              "url": "https://mokshtubes.com/products/pipes-tubes/boiler-heat-exchanger-tubes",
              "description": "Industrial boiler & heat exchanger tubes for power plants, refineries, petrochemical, marine, HVAC, and process industries. Available in seamless, welded, ERW, EFW, and U-bent configurations.",
              "isPartOf": { "@id": "https://mokshtubes.com/#website" },
              "primaryImageOfPage": { "@id": "https://mokshtubes.com/#product-image" }
            },

            /* ======================================================
               3. PRODUCT + SERVICE (FULL)
            ====================================================== */
            {
              "@type": ["Product", "Service"],
              "@id": "https://mokshtubes.com/#boiler-heat-exchanger-tubes",
              "name": "Boiler & Heat Exchanger Tubes",
              "url": "https://mokshtubes.com/products/pipes-tubes/boiler-heat-exchanger-tubes",
              "image": "https://mokshtubes.com/assets/images/product/boiler-heat-exchanger-tubes.webp",
              "category": "Industrial Tubes",
              "description": "Seamless, welded (ERW/EFW), and U-bent boiler & heat exchanger tubes with OD 6â€“219 mm, WT 0.5â€“12.7 mm, lengths up to 12 m. Manufactured in stainless steel, alloy steel, carbon steel, nickel alloys, copper alloys, and titanium.",

              "brand": {
                "@type": "Brand",
                "@id": "https://mokshtubes.com/#organization",
                "name": "Moksh Tubes & Fittings LLP"
              },

              "manufacturer": {
                "@type": "Organization",
                "@id": "https://mokshtubes.com/#organization"
              },

              "material": [
                "Stainless Steel",
                "Duplex & Super Duplex",
                "Nickel Alloys (Inconel, Monel)",
                "Alloy Steel",
                "Carbon Steel",
                "Copper Alloys",
                "Titanium"
              ],

              /* --------------------------------------------------
                 Technical Specifications
              -------------------------------------------------- */
              "additionalProperty": [
                { "@type": "PropertyValue", "name": "Outer Diameter (OD)", "value": "6â€“219 mm" },
                { "@type": "PropertyValue", "name": "Wall Thickness (WT)", "value": "0.5â€“12.7 mm" },
                { "@type": "PropertyValue", "name": "Length", "value": "Up to 12 m (cut-to-length)" },
                { "@type": "PropertyValue", "name": "Types", "value": "Seamless, ERW, EFW, U-bent" },
                { "@type": "PropertyValue", "name": "Standards", "value": "ASTM A179/A192/A213/A249/A269/A333; ASME SA213; EN 10216; DIN" },
                { "@type": "PropertyValue", "name": "Finishes", "value": "Bright Annealed, Pickled & Passivated, Electro Polished, Matte" },
                { "@type": "PropertyValue", "name": "Testing", "value": "Hydrostatic, UT, Eddy Current, PMI, Hardness, Flaring/Flattening" },
                { "@type": "PropertyValue", "name": "Temperature Resistance", "value": "Up to 750Â°C (grade-dependent)" },
                { "@type": "PropertyValue", "name": "Corrosion Resistance", "value": "High resistance to oxidation & aggressive media" }
              ],

              /* --------------------------------------------------
                 OFFER SCHEMA (B2B)
              -------------------------------------------------- */
              "offers": {
                "@type": "Offer",
                "@id": "https://mokshtubes.com/#offer",
                "url": "https://mokshtubes.com/products/pipes-tubes/boiler-heat-exchanger-tubes",
                "availability": "https://schema.org/InStock",
                "priceCurrency": "USD",
                "price": "0.00",
                "priceValidUntil": "2030-12-31",
                "businessFunction": "https://schema.org/Sell",
                "seller": { "@id": "https://mokshtubes.com/#organization" }
              },

              /* --------------------------------------------------
                 AGGREGATE RATING (Stars)
              -------------------------------------------------- */
              "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "4.9",
                "bestRating": "5",
                "worstRating": "1",
                "reviewCount": "112"
              },

              /* --------------------------------------------------
                 OPTIONAL REVIEWS (PLACEHOLDERS)
              -------------------------------------------------- */
              "review": [
                {
                  "@type": "Review",
                  "author": "Client",
                  "reviewBody": "Excellent quality boiler tubes and fast delivery.",
                  "reviewRating": { "@type": "Rating", "ratingValue": "5", "bestRating": "5" }
                }
              ]
            },

            /* ======================================================
               4. IMAGE OBJECT
            ====================================================== */
            {
              "@type": "ImageObject",
              "@id": "https://mokshtubes.com/#product-image",
              "url": "https://mokshtubes.com/assets/images/product/boiler-heat-exchanger-tubes.webp",
              "description": "Boiler & Heat Exchanger Tubes"
            },

            /* ======================================================
               5. BREADCRUMB LIST
            ====================================================== */
            {
              "@type": "BreadcrumbList",
              "@id": "https://mokshtubes.com/#breadcrumb",
              "itemListElement": [
                { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://mokshtubes.com/" },
                { "@type": "ListItem", "position": 2, "name": "Products", "item": "https://mokshtubes.com/products" },
                { "@type": "ListItem", "position": 3, "name": "Pipes & Tubes", "item": "https://mokshtubes.com/products/pipes-tubes" },
                { "@type": "ListItem", "position": 4, "name": "Boiler & Heat Exchanger Tubes", "item": "https://mokshtubes.com/products/pipes-tubes/boiler-heat-exchanger-tubes" }
              ]
            },

            /* ======================================================
               6. FAQ SCHEMA
            ====================================================== */
            {
              "@type": "FAQPage",
              "@id": "https://mokshtubes.com/#faq-boiler-tubes",
              "mainEntity": [
                {
                  "@type": "Question",
                  "name": "What are Boiler & Heat Exchanger Tubes?",
                  "acceptedAnswer": { "@type": "Answer", "text": "Boiler & Heat Exchanger Tubes are precision-engineered components used in high temperature and high pressure heat transfer systems." }
                },
                {
                  "@type": "Question",
                  "name": "What materials are used?",
                  "acceptedAnswer": { "@type": "Answer", "text": "Manufactured in Stainless Steel, Alloy Steel, Carbon Steel, Duplex, Super Duplex, Nickel Alloys, Copper Alloys, and Titanium." }
                },
                {
                  "@type": "Question",
                  "name": "What sizes are available?",
                  "acceptedAnswer": { "@type": "Answer", "text": "OD 6â€“219 mm, WT 0.5â€“12.7 mm, lengths up to 12 meters in Seamless, ERW, EFW, and U-bent forms." }
                },
                {
                  "@type": "Question",
                  "name": "Which standards are followed?",
                  "acceptedAnswer": { "@type": "Answer", "text": "ASTM A179, A192, A213, A249, A269, A333, ASME SA213, EN 10216, DIN." }
                },
                {
                  "@type": "Question",
                  "name": "What are the applications?",
                  "acceptedAnswer": { "@type": "Answer", "text": "Used in boilers, superheaters, condensers, economizers, heat exchangers, petrochemical heaters, marine systems, desalination, food & dairy, HVAC." }
                },
                {
                  "@type": "Question",
                  "name": "Lead time?",
                  "acceptedAnswer": { "@type": "Answer", "text": "Ex-stock: 2â€“5 days. Make to order: 2â€“6 weeks." }
                }
              ]
            }

          ]
        }
        </script>
    @endverbatim
@endsection
