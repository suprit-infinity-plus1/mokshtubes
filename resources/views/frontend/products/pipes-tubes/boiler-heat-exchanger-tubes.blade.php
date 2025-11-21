@extends('layouts.master')
@section('title', 'Boiler & Heat Exchanger Tubes: ASTM A179/A213 | Seamless, U‑Bent | Moksh Tubes') <!-- 52 characters -->
@section('meta_description',
    'Seamless, welded & U‑bent boiler/heat exchanger tubes per ASTM A179/A213. Fast delivery, global supply. Get datasheet & quote.') <!-- 153 characters -->
    <meta property="og:title" content="Boiler & Heat Exchanger Tubes | Moksh Tubes">
<meta property="og:description" content="Stainless Steel, Alloy Steel, Duplex, Nickel, Titanium boiler & heat exchanger tubes. Worldwide supplier with fast delivery.">
<meta property="og:image" content="/assets/images/product/boiler-heat-exchanger-tubes.webp">
<meta property="og:url" content="https://mokshtubes.com/products/pipes-tubes/boiler-heat-exchanger-tubes">
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/product/boiler-and-heat-banner.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Industrial Boiler & Heat Exchanger Tubes</h1> <!-- 52 characters -->
                </div>
            </div>
        </div>
    </section>



    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Product Overview</h2>
            </div>

            <div class="row align-items-center">
                <!-- Left Image -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('/assets/images/product/boiler-and-heat.jpg') }}"
                        alt="Boiler & Heat Exchanger Tubes" class="img-fluid rounded shadow-sm">
                </div>

                <!-- Right Content -->
                <div class="col-md-6">
                    <p class="fs-6 mb-3 text-justify">
                        <strong class="text-black">Boiler & Heat Exchanger Tubes</strong> are essential components in
                        thermal power plants, petrochemical plants, refineries, and process industries. They are designed to
                        withstand extreme temperatures, pressures, and corrosive environments while ensuring efficient heat
                        transfer.
                    </p>
                    <p class="fs-6 mb-3 text-justify">
                        Made from high grade<a href="{{ route('materials.austenitic-stainless-Steel') }}"> stainless
                            steel</a>, carbon steel, alloy steel, and specialty alloys, these tubes
                        are manufactured to strict tolerances and international quality standards (ASTM, ASME, DIN, EN).
                    </p>
                    <p class="fs-6 text-justify">
                        <strong class="text-black"> <a href="{{ route('index') }}">Moksh Tubes & Fittings LLP</a></strong>,
                        we produce boiler and heat
                        exchanger tubes using advanced cold drawing, seamless forming, and <a
                            href="{{ route('products.pipes-tubes.welded-pipes') }}">welding</a> technologies to deliver
                        precision, durability, and performance. Our tubes are trusted worldwide for use in boilers,
                        superheaters, condensers, heat exchangers, and other critical systems.
                </div>
            </div>
        </div>
    </section>
 {{-- datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Boiler Heat Exchanger Tubes Datasheet</h3>
            <p class="mb-3">
                Get the complete Boiler Heat Exchanger Tubes datasheet with chemical composition,
                mechanical properties, heat treatment details, and applications.
                Enter your email to receive the PDF instantly.
            </p>

            <!-- Lead Capture Form -->
            <form id="leadForm" method="POST" action="https://mokshtubes.com/datasheet-leads-capture" class="mb-3">
                <input type="hidden" name="_token" value="WNVWvpO4YR2OqZaIJDl2mE3UfyreGys3Vp19brsc" autocomplete="off">
                <div class="row justify-content-center">
                    <input type="hidden" name="pdf" value="haynes-242.pdf">
                    <div class="col-md-6 mb-2">
                        <input type="email" name="email" required="" class="form-control p-3" placeholder="Enter your email address">
                    </div>
                    <div class="col-md-3 mb-2">
                        <button type="submit" class="btn btn-lg w-100 text-white" style="background-color:#db7227; border-radius:8px;">
                            📥 Get Datasheet
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
                <h2>Specifications & Technical Details</h2>
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
                                            Super Duplex Steel</a>, Nickel Alloys, <a
                                            href="{{ route('materials.inconel') }}">Inconel</a>, Monel,
                                        Titanium, Copper Alloys, Alloy Steel, Carbon Steel</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Grades</td>
                                    <td>ASTM/ASME certified – available in all mentioned alloys</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Outer Diameter (OD)</td>
                                    <td>6 mm to 219 mm (¼” to 8” NB)</td>
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
                                    <td>Type</td>
                                    <td><a href="{{ url('products/pipes-tubes/seamless-pipes') }}">Seamless</a>, Welded
                                        (ERW, EFW), <a href="{{ url('products/pipes-tubes/u-bent-tubes') }}">U-Bent
                                            Tubes</a></td>
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
            <div class="section-title center">
                <h2 class="fw-bold" style="color: #174268;">Weight Chart</h2>
            </div>


            
            <!-- Child Title -->
            <div class="section-title center mb-3">
                <h4 class="text-center mb-0" style="color: #db7227;">Weight Chart (ASME B36.10 / B36.19 – Size & Weight Data)</h4>
            </div>
 
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
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="bg-light" style="padding-top: 80px;">
        <div class="container">

            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Size Charts</h2>
            </div>

            <div class="section-title center mb-3">
                <h4 class="text-center mb-0" style="color: #db7227;">Schedule 5C – Size Chart (ASME B36.10)</h4>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle" style="border-collapse:collapse;">
                    <thead class="table-dark text-center">
                        <tr>
                            <th>NB (mm)</th>
                            <th>NPS (inches)</th>
                            <th>OD (mm)</th>
                            <th>Wall Thickness (mm)</th>
                            <th>Weight (kg/m)</th>
                        </tr>
                    </thead>

                    <tbody class="text-center">

                        <!-- Preview rows -->
                        <tr class="t-row ">
                            <td>3</td>
                            <td>1/8"</td>
                            <td>10.3</td>
                            <td>1.24</td>
                            <td>0.276</td>
                        </tr>
                        <tr class="t-row ">
                            <td>6</td>
                            <td>1/4"</td>
                            <td>13.7</td>
                            <td>1.24</td>
                            <td>0.390</td>
                        </tr>
                        <tr class="t-row ">
                            <td>10</td>
                            <td>3/8"</td>
                            <td>17.1</td>
                            <td>1.24</td>
                            <td>0.490</td>
                        </tr>
                        <tr class="t-row ">
                            <td>15</td>
                            <td>1/2"</td>
                            <td>21.3</td>
                            <td>1.65</td>
                            <td>0.800</td>
                        </tr>
                        <tr class="t-row ">
                            <td>20</td>
                            <td>3/4"</td>
                            <td>26.7</td>
                            <td>1.65</td>
                            <td>1.030</td>
                        </tr>
                        <!-- Collapsible rows -->
                        
                        <tr class="t-row collapse table-5c-full">
                            <td>25</td>
                            <td>1"</td>
                            <td>33.4</td>
                            <td>1.65</td>
                            <td>1.300</td>
                        </tr>
                        <tr class="collapse table-5c-full">
                            <td>32</td>
                            <td>1 1/4"</td>
                            <td>42.2</td>
                            <td>1.65</td>
                            <td>1.650</td>
                        </tr>
                        <tr class="t-row collapse table-5c-full">
                            <td>40</td>
                            <td>1 1/2"</td>
                            <td>48.3</td>
                            <td>1.65</td>
                            <td>1.910</td>
                        </tr>
                        <tr class="t-row collapse table-5c-full">
                            <td>50</td>
                            <td>2"</td>
                            <td>60.3</td>
                            <td>1.65</td>
                            <td>2.400</td>
                        </tr>
                        <tr class="t-row collapse table-5c-full">
                            <td>65</td>
                            <td>2 1/2"</td>
                            <td>73.0</td>
                            <td>2.11</td>
                            <td>3.690</td>
                        </tr>
                        <tr class="t-row collapse table-5c-full">
                            <td>80</td>
                            <td>3"</td>
                            <td>88.9</td>
                            <td>2.11</td>
                            <td>4.510</td>
                        </tr>
                        <tr class="t-row collapse table-5c-full">
                            <td>100</td>
                            <td>4"</td>
                            <td>114.3</td>
                            <td>2.11</td>
                            <td>5.840</td>
                        </tr>
                        <tr class="t-row collapse table-5c-full">
                            <td>125</td>
                            <td>5"</td>
                            <td>141.3</td>
                            <td>2.77</td>
                            <td>9.470</td>
                        </tr>
                        <tr class="t-row collapse table-5c-full">
                            <td>150</td>
                            <td>6"</td>
                            <td>168.3</td>
                            <td>2.77</td>
                            <td>11.320</td>
                        </tr>
                        <tr class="t-row collapse table-5c-full">
                            <td>200</td>
                            <td>8"</td>
                            <td>219.1</td>
                            <td>2.77</td>
                            <td>14.790</td>
                        </tr>
                        <tr class="t-row collapse table-5c-full">
                            <td>250</td>
                            <td>10"</td>
                            <td>273.1</td>
                            <td>3.40</td>
                            <td>22.630</td>
                        </tr>
                        <tr class="t-row collapse table-5c-full">
                            <td>300</td>
                            <td>12"</td>
                            <td>323.9</td>
                            <td>3.96</td>
                            <td>31.250</td>
                        </tr>
                        <tr class="t-row collapse table-5c-full">
                            <td>350</td>
                            <td>14"</td>
                            <td>355.6</td>
                            <td>3.96</td>
                            <td>34.360</td>
                        </tr>
                        <tr class="t-row collapse table-5c-full">
                            <td>400</td>
                            <td>16"</td>
                            <td>406.4</td>
                            <td>4.19</td>
                            <td>41.560</td>
                        </tr>
                        <tr class="t-row collapse table-5c-full">
                            <td>450</td>
                            <td>18"</td>
                            <td>457.2</td>
                            <td>4.19</td>
                            <td>46.800</td>
                        </tr>
                        <tr class="t-row collapse table-5c-full">
                            <td>500</td>
                            <td>20"</td>
                            <td>508.0</td>
                            <td>4.78</td>
                            <td>59.250</td>
                        </tr>
                        <tr class="t-row collapse table-5c-full">
                            <td>600</td>
                            <td>24"</td>
                            <td>609.6</td>
                            <td>5.54</td>
                            <td>82.470</td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <div class="text-center mt-3">
                <button id="toggleBtn5C" class="btn btn-sm btn-primary cursor-pointer" data-bs-toggle="collapse"
                    data-bs-target=".table-5c-full" style="background-color: #db7227; border:none;">
                    View Full Chart
                </button>
            </div>

        </div>
    </section>
<script>
document.addEventListener('DOMContentLoaded', () => {

    // Find all collapse groups
    document.querySelectorAll("button[data-bs-target]").forEach(btn => {
        const target = btn.getAttribute("data-bs-target");
        const group = document.querySelectorAll(target);

        group.forEach(item => {
            item.addEventListener('shown.bs.collapse', () => {
                btn.textContent = "Hide Full Chart";
            });

            item.addEventListener('hidden.bs.collapse', () => {
                btn.textContent = "View Full Chart";
            });
        });
    });

});
</script>


    {{-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            const fullTable = document.getElementById("table-5c-full");
            const btn = document.getElementById("toggleBtn");

            fullTable.addEventListener("shown.bs.collapse", function() {
                btn.textContent = "Show Less";
            });

            fullTable.addEventListener("hidden.bs.collapse", function() {
                btn.textContent = "View Full Chart";
            });
        });
    </script> --}}


    <section class="bg-light" style="padding-top: 80px;">
        <div class="container">

            <!-- Child Title -->
            <div class="section-title center mb-3">
                <h4 class="text-center mb-0" style="color: #db7227;">Schedule 10C – Size Chart (ASME B36.10)</h4>
            </div>

            <!-- PREVIEW TABLE (just first 3 rows) -->
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
                        <!-- Preview rows -->
                        <tr class="t-row">
                            <td>1/8</td>
                            <td>3</td>
                            <td>10.30</td>
                            <td>1.24</td>
                            <td>7.82</td>
                            <td>0.28</td>
                        </tr>
                        <tr class="t-row">
                            <td>1/4</td>
                            <td>6</td>
                            <td>13.70</td>
                            <td>1.24</td>
                            <td>11.22</td>
                            <td>0.39</td>
                        </tr>
                        <tr class="t-row">
                            <td>3/8</td>
                            <td>10</td>
                            <td>17.10</td>
                            <td>1.24</td>
                            <td>14.62</td>
                            <td>0.49</td>
                        </tr>
                        <tr class="t-row">
                            <td>1/2</td>
                            <td>15</td>
                            <td>21.30</td>
                            <td>1.65</td>
                            <td>18.00</td>
                            <td>0.81</td>
                        </tr>
                        <tr class="t-row">
                            <td>3/4</td>
                            <td>20</td>
                            <td>26.70</td>
                            <td>1.65</td>
                            <td>23.40</td>
                            <td>1.04</td>
                        </tr>
                        <!-- All remaining rows collapse -->

                        <tr class="t-row collapse table-10c-full">
                            <td>1</td>
                            <td>25</td>
                            <td>33.40</td>
                            <td>1.65</td>
                            <td>30.10</td>
                            <td>1.32</td>
                        </tr>
                        <tr class="t-row collapse table-10c-full">
                            <td>1 1/4</td>
                            <td>32</td>
                            <td>42.20</td>
                            <td>1.65</td>
                            <td>38.90</td>
                            <td>1.68</td>
                        </tr>
                        <tr class="t-row collapse table-10c-full">
                            <td>1 1/2</td>
                            <td>40</td>
                            <td>48.30</td>
                            <td>1.65</td>
                            <td>45.00</td>
                            <td>1.93</td>
                        </tr>
                        <tr class="t-row collapse table-10c-full">
                            <td>2</td>
                            <td>50</td>
                            <td>60.30</td>
                            <td>1.65</td>
                            <td>57.00</td>
                            <td>2.43</td>
                        </tr>
                        <tr class="t-row collapse table-10c-full">
                            <td>2 1/2</td>
                            <td>65</td>
                            <td>73.00</td>
                            <td>1.65</td>
                            <td>69.70</td>
                            <td>2.96</td>
                        </tr>
                        <tr class="t-row collapse table-10c-full">
                            <td>3</td>
                            <td>80</td>
                            <td>88.90</td>
                            <td>1.65</td>
                            <td>85.60</td>
                            <td>3.62</td>
                        </tr>
                        <tr class="t-row collapse table-10c-full">
                            <td>4</td>
                            <td>100</td>
                            <td>114.30</td>
                            <td>1.65</td>
                            <td>111.00</td>
                            <td>4.67</td>
                        </tr>
                        <tr class="t-row collapse table-10c-full">
                            <td>5</td>
                            <td>125</td>
                            <td>141.30</td>
                            <td>1.65</td>
                            <td>138.00</td>
                            <td>5.79</td>
                        </tr>
                        <tr class="t-row collapse table-10c-full">
                            <td>6</td>
                            <td>150</td>
                            <td>168.30</td>
                            <td>1.65</td>
                            <td>165.00</td>
                            <td>6.91</td>
                        </tr>
                        <tr class="t-row collapse table-10c-full">
                            <td>8</td>
                            <td>200</td>
                            <td>219.10</td>
                            <td>2.11</td>
                            <td>214.88</td>
                            <td>11.51</td>
                        </tr>
                        <tr class="t-row collapse table-10c-full">
                            <td>10</td>
                            <td>250</td>
                            <td>273.10</td>
                            <td>2.77</td>
                            <td>267.56</td>
                            <td>18.81</td>
                        </tr>
                        <tr class="t-row collapse table-10c-full">
                            <td>12</td>
                            <td>300</td>
                            <td>323.90</td>
                            <td>3.05</td>
                            <td>317.80</td>
                            <td>24.59</td>
                        </tr>
                        <tr class="t-row collapse table-10c-full">
                            <td>14</td>
                            <td>350</td>
                            <td>355.60</td>
                            <td>3.40</td>
                            <td>348.80</td>
                            <td>30.10</td>
                        </tr>
                        <tr class="t-row collapse table-10c-full">
                            <td>16</td>
                            <td>400</td>
                            <td>406.40</td>
                            <td>3.40</td>
                            <td>399.60</td>
                            <td>34.44</td>
                        </tr>
                        <tr class="t-row collapse table-10c-full">
                            <td>18</td>
                            <td>450</td>
                            <td>457.20</td>
                            <td>3.80</td>
                            <td>449.60</td>
                            <td>43.28</td>
                        </tr>
                        <tr class="t-row collapse table-10c-full">
                            <td>20</td>
                            <td>500</td>
                            <td>508.00</td>
                            <td>3.80</td>
                            <td>500.40</td>
                            <td>48.15</td>
                        </tr>
                        <tr class="t-row collapse table-10c-full">
                            <td>24</td>
                            <td>600</td>
                            <td>609.60</td>
                            <td>4.00</td>
                            <td>601.60</td>
                            <td>60.92</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- BUTTON AT VERY BOTTOM -->
            <div class="text-center mt-3">
                <button id="toggleBtn10" class="btn btn-sm btn-primary cursor-pointer" data-bs-toggle="collapse"
                    data-bs-target=".table-10c-full" style="background-color: #db7227; border:none;">
                    View Full Chart
                </button>
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
                                    <th>Weight (kg/m)</th>
                                </tr>
                            </thead>

                            <tbody class="text-center">

                                <!-- Preview rows -->
                                <tr class="t-row">
                                    <td>1/8</td>
                                    <td>3</td>
                                    <td>10.3</td>
                                    <td>1.73</td>
                                    <td>0.37</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1/4</td>
                                    <td>6</td>
                                    <td>13.7</td>
                                    <td>2.24</td>
                                    <td>0.64</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3/8</td>
                                    <td>10</td>
                                    <td>17.1</td>
                                    <td>2.31</td>
                                    <td>0.86</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1/2</td>
                                    <td>15</td>
                                    <td>21.3</td>
                                    <td>2.77</td>
                                    <td>1.27</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3/4</td>
                                    <td>20</td>
                                    <td>26.7</td>
                                    <td>2.87</td>
                                    <td>1.70</td>
                                </tr>

                                <!-- Everything below collapses -->

                                <tr class="t-row collapse table-40c-full">
                                    <td>1</td>
                                    <td>25</td>
                                    <td>33.4</td>
                                    <td>3.38</td>
                                    <td>2.46</td>
                                </tr>
                                <tr class="t-row collapse table-40c-full">
                                    <td>1 1/4</td>
                                    <td>32</td>
                                    <td>42.2</td>
                                    <td>3.56</td>
                                    <td>3.61</td>
                                </tr>
                                <tr class="t-row collapse table-40c-full">
                                    <td>1 1/2</td>
                                    <td>40</td>
                                    <td>48.3</td>
                                    <td>3.68</td>
                                    <td>4.18</td>
                                </tr>
                                <tr class="t-row collapse table-40c-full">
                                    <td>2</td>
                                    <td>50</td>
                                    <td>60.3</td>
                                    <td>3.91</td>
                                    <td>5.44</td>
                                </tr>
                                <tr class="t-row collapse table-40c-full">
                                    <td>2 1/2</td>
                                    <td>65</td>
                                    <td>73.0</td>
                                    <td>5.16</td>
                                    <td>8.63</td>
                                </tr>
                                <tr class="t-row collapse table-40c-full">
                                    <td>3</td>
                                    <td>80</td>
                                    <td>88.9</td>
                                    <td>5.49</td>
                                    <td>11.29</td>
                                </tr>
                                <tr class="t-row collapse table-40c-full">
                                    <td>4</td>
                                    <td>100</td>
                                    <td>114.3</td>
                                    <td>6.02</td>
                                    <td>17.15</td>
                                </tr>
                                <tr class="t-row collapse table-40c-full">
                                    <td>5</td>
                                    <td>125</td>
                                    <td>141.3</td>
                                    <td>6.55</td>
                                    <td>23.85</td>
                                </tr>
                                <tr class="t-row collapse table-40c-full">
                                    <td>6</td>
                                    <td>150</td>
                                    <td>168.3</td>
                                    <td>7.11</td>
                                    <td>30.7</td>
                                </tr>
                                <tr class="t-row collapse table-40c-full">
                                    <td>8</td>
                                    <td>200</td>
                                    <td>219.1</td>
                                    <td>8.18</td>
                                    <td>49.56</td>
                                </tr>
                                <tr class="t-row collapse table-40c-full">
                                    <td>10</td>
                                    <td>250</td>
                                    <td>273.1</td>
                                    <td>9.27</td>
                                    <td>73.5</td>
                                </tr>
                                <tr class="t-row collapse table-40c-full">
                                    <td>12</td>
                                    <td>300</td>
                                    <td>323.9</td>
                                    <td>10.31</td>
                                    <td>95.54</td>
                                </tr>
                                <tr class="t-row collapse table-40c-full">
                                    <td>14</td>
                                    <td>350</td>
                                    <td>355.6</td>
                                    <td>11.13</td>
                                    <td>112.63</td>
                                </tr>
                                <tr class="t-row collapse table-40c-full">
                                    <td>16</td>
                                    <td>400</td>
                                    <td>406.4</td>
                                    <td>12.7</td>
                                    <td>144.27</td>
                                </tr>
                                <tr class="t-row collapse table-40c-full">
                                    <td>18</td>
                                    <td>450</td>
                                    <td>457.2</td>
                                    <td>14.27</td>
                                    <td>179.28</td>
                                </tr>
                                <tr class="t-row collapse table-40c-full">
                                    <td>20</td>
                                    <td>500</td>
                                    <td>508.0</td>
                                    <td>15.09</td>
                                    <td>213.93</td>
                                </tr>
                                <tr class="t-row collapse table-40c-full">
                                    <td>24</td>
                                    <td>600</td>
                                    <td>609.6</td>
                                    <td>15.88</td>
                                    <td>274.06</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- BUTTON -->
            <div class="text-center mt-3">
                <button id="toggleBtn40" class="btn btn-sm btn-primary cursor-pointer" data-bs-toggle="collapse"
                    data-bs-target=".table-40c-full" style="background-color: #db7227; border:none;">
                    View Full Chart
                </button>
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
                                    <th>Weight (kg/m)</th>
                                </tr>
                            </thead>

                            <tbody class="text-center">

                                <!-- Preview rows -->
                                <tr class="t-row">
                                    <td>1/8</td>
                                    <td>3</td>
                                    <td>10.3</td>
                                    <td>1.73</td>
                                    <td>0.37</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1/4</td>
                                    <td>6</td>
                                    <td>13.7</td>
                                    <td>3.02</td>
                                    <td>0.83</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3/8</td>
                                    <td>10</td>
                                    <td>17.1</td>
                                    <td>3.2</td>
                                    <td>1.13</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1/2</td>
                                    <td>15</td>
                                    <td>21.3</td>
                                    <td>3.73</td>
                                    <td>1.63</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3/4</td>
                                    <td>20</td>
                                    <td>26.7</td>
                                    <td>3.91</td>
                                    <td>2.3</td>
                                </tr>

                                <!-- Collapse rows -->
                                <tr class="t-row collapse table-80c-full">
                                    <td>1/2</td>
                                    <td>15</td>
                                    <td>21.3</td>
                                    <td>3.73</td>
                                    <td>1.63</td>
                                </tr>
                                <tr class="t-row collapse table-80c-full">
                                    <td>3/4</td>
                                    <td>20</td>
                                    <td>26.7</td>
                                    <td>3.91</td>
                                    <td>2.3</td>
                                </tr>
                                <tr class="t-row collapse table-80c-full">
                                    <td>1</td>
                                    <td>25</td>
                                    <td>33.4</td>
                                    <td>4.55</td>
                                    <td>3.38</td>
                                </tr>
                                <tr class="t-row collapse table-80c-full">
                                    <td>1 1/4</td>
                                    <td>32</td>
                                    <td>42.2</td>
                                    <td>4.85</td>
                                    <td>4.84</td>
                                </tr>
                                <tr class="t-row collapse table-80c-full">
                                    <td>1 1/2</td>
                                    <td>40</td>
                                    <td>48.3</td>
                                    <td>5.08</td>
                                    <td>5.61</td>
                                </tr>
                                <tr class="t-row collapse table-80c-full">
                                    <td>2</td>
                                    <td>50</td>
                                    <td>60.3</td>
                                    <td>5.54</td>
                                    <td>7.48</td>
                                </tr>
                                <tr class="t-row collapse table-80c-full">
                                    <td>2 1/2</td>
                                    <td>65</td>
                                    <td>73.0</td>
                                    <td>7.01</td>
                                    <td>11.76</td>
                                </tr>
                                <tr class="t-row collapse table-80c-full">
                                    <td>3</td>
                                    <td>80</td>
                                    <td>88.9</td>
                                    <td>7.62</td>
                                    <td>15.74</td>
                                </tr>
                                <tr class="t-row collapse table-80c-full">
                                    <td>4</td>
                                    <td>100</td>
                                    <td>114.3</td>
                                    <td>8.56</td>
                                    <td>25.1</td>
                                </tr>
                                <tr class="t-row collapse table-80c-full">
                                    <td>5</td>
                                    <td>125</td>
                                    <td>141.3</td>
                                    <td>9.53</td>
                                    <td>36.46</td>
                                </tr>
                                <tr class="t-row collapse table-80c-full">
                                    <td>6</td>
                                    <td>150</td>
                                    <td>168.3</td>
                                    <td>10.97</td>
                                    <td>49.56</td>
                                </tr>
                                <tr class="t-row collapse table-80c-full">
                                    <td>8</td>
                                    <td>200</td>
                                    <td>219.1</td>
                                    <td>12.7</td>
                                    <td>77.1</td>
                                </tr>
                                <tr class="t-row collapse table-80c-full">
                                    <td>10</td>
                                    <td>250</td>
                                    <td>273.1</td>
                                    <td>15.09</td>
                                    <td>114.0</td>
                                </tr>
                                <tr class="t-row collapse table-80c-full">
                                    <td>12</td>
                                    <td>300</td>
                                    <td>323.9</td>
                                    <td>17.48</td>
                                    <td>153.0</td>
                                </tr>
                                <tr class="t-row collapse table-80c-full">
                                    <td>14</td>
                                    <td>350</td>
                                    <td>355.6</td>
                                    <td>19.05</td>
                                    <td>180.0</td>
                                </tr>
                                <tr class="t-row collapse table-80c-full">
                                    <td>16</td>
                                    <td>400</td>
                                    <td>406.4</td>
                                    <td>21.44</td>
                                    <td>227.5</td>
                                </tr>
                                <tr class="t-row collapse table-80c-full">
                                    <td>18</td>
                                    <td>450</td>
                                    <td>457.2</td>
                                    <td>23.83</td>
                                    <td>282.5</td>
                                </tr>
                                <tr class="t-row collapse table-80c-full">
                                    <td>20</td>
                                    <td>500</td>
                                    <td>508.0</td>
                                    <td>26.18</td>
                                    <td>342.0</td>
                                </tr>
                                <tr class="t-row collapse table-80c-full">
                                    <td>24</td>
                                    <td>600</td>
                                    <td>609.6</td>
                                    <td>30.96</td>
                                    <td>480.0</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- BUTTON -->
            <div class="text-center mt-3">
                <button id="toggleBtn80" class="btn btn-sm btn-primary cursor-pointer" data-bs-toggle="collapse"
                    data-bs-target=".table-80c-full" style="background-color: #db7227; border:none;">
                    View Full Chart
                </button>
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
                                    <th>Weight (kg/m)</th>
                                </tr>
                            </thead>

                            <tbody class="text-center">

                                <!-- Preview rows -->
                                <tr class="t-row">
                                    <td>1/8</td>
                                    <td>3</td>
                                    <td>10.3</td>
                                    <td>2.41</td>
                                    <td>0.49</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1/4</td>
                                    <td>6</td>
                                    <td>13.7</td>
                                    <td>3.02</td>
                                    <td>0.83</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3/8</td>
                                    <td>10</td>
                                    <td>17.1</td>
                                    <td>3.2</td>
                                    <td>1.13</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1/2</td>
                                    <td>15</td>
                                    <td>21.3</td>
                                    <td>4.09</td>
                                    <td>1.75</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3/4</td>
                                    <td>20</td>
                                    <td>26.7</td>
                                    <td>4.55</td>
                                    <td>2.63</td>
                                </tr>

                                <!-- Everything below collapses -->

                                <tr class="t-row collapse table-160c-full">
                                    <td>1</td>
                                    <td>25</td>
                                    <td>33.4</td>
                                    <td>6.35</td>
                                    <td>4.51</td>
                                </tr>
                                <tr class="t-row collapse table-160c-full">
                                    <td>1 1/4</td>
                                    <td>32</td>
                                    <td>42.2</td>
                                    <td>6.35</td>
                                    <td>6.12</td>
                                </tr>
                                <tr class="t-row collapse table-160c-full">
                                    <td>1 1/2</td>
                                    <td>40</td>
                                    <td>48.3</td>
                                    <td>7.14</td>
                                    <td>7.92</td>
                                </tr>
                                <tr class="t-row collapse table-160c-full">
                                    <td>2</td>
                                    <td>50</td>
                                    <td>60.3</td>
                                    <td>8.71</td>
                                    <td>11.06</td>
                                </tr>
                                <tr class="t-row collapse table-160c-full">
                                    <td>2 1/2</td>
                                    <td>65</td>
                                    <td>73.0</td>
                                    <td>9.53</td>
                                    <td>14.9</td>
                                </tr>
                                <tr class="t-row collapse table-160c-full">
                                    <td>3</td>
                                    <td>80</td>
                                    <td>88.9</td>
                                    <td>11.13</td>
                                    <td>21.31</td>
                                </tr>
                                <tr class="t-row collapse table-160c-full">
                                    <td>4</td>
                                    <td>100</td>
                                    <td>114.3</td>
                                    <td>13.49</td>
                                    <td>34.35</td>
                                </tr>
                                <tr class="t-row collapse table-160c-full">
                                    <td>5</td>
                                    <td>125</td>
                                    <td>141.3</td>
                                    <td>15.88</td>
                                    <td>53.3</td>
                                </tr>
                                <tr class="t-row collapse table-160c-full">
                                    <td>6</td>
                                    <td>150</td>
                                    <td>168.3</td>
                                    <td>18.26</td>
                                    <td>75.53</td>
                                </tr>
                                <tr class="t-row collapse table-160c-full">
                                    <td>8</td>
                                    <td>200</td>
                                    <td>219.1</td>
                                    <td>23.01</td>
                                    <td>123.9</td>
                                </tr>
                                <tr class="t-row collapse table-160c-full">
                                    <td>10</td>
                                    <td>250</td>
                                    <td>273.1</td>
                                    <td>28.58</td>
                                    <td>190.5</td>
                                </tr>
                                <tr class="t-row collapse table-160c-full">
                                    <td>12</td>
                                    <td>300</td>
                                    <td>323.9</td>
                                    <td>33.32</td>
                                    <td>268.0</td>
                                </tr>
                                <tr class="t-row collapse table-160c-full">
                                    <td>14</td>
                                    <td>350</td>
                                    <td>355.6</td>
                                    <td>35.71</td>
                                    <td>327.0</td>
                                </tr>
                                <tr class="t-row collapse table-160c-full">
                                    <td>16</td>
                                    <td>400</td>
                                    <td>406.4</td>
                                    <td>40.49</td>
                                    <td>429.5</td>
                                </tr>
                                <tr class="t-row collapse table-160c-full">
                                    <td>18</td>
                                    <td>450</td>
                                    <td>457.2</td>
                                    <td>45.24</td>
                                    <td>544.0</td>
                                </tr>
                                <tr class="t-row collapse table-160c-full">
                                    <td>20</td>
                                    <td>500</td>
                                    <td>508.0</td>
                                    <td>50.01</td>
                                    <td>677.5</td>
                                </tr>
                                <tr class="t-row collapse table-160c-full">
                                    <td>24</td>
                                    <td>600</td>
                                    <td>609.6</td>
                                    <td>59.54</td>
                                    <td>997.0</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- BUTTON -->
            <div class="text-center mt-3">
                <button id="toggleBtn160" class="btn btn-sm btn-primary cursor-pointer" data-bs-toggle="collapse"
                    data-bs-target=".table-160c-full" style="background-color: #db7227; border:none;">
                    View Full Chart
                </button>
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
                                    <th>Weight (kg/m)</th>
                                </tr>
                            </thead>

                            <tbody class="text-center">

                                <!-- Preview rows -->
                                <tr class="t-row">
                                    <td>1/8</td>
                                    <td>3</td>
                                    <td>10.3</td>
                                    <td>2.41</td>
                                    <td>0.49</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1/4</td>
                                    <td>6</td>
                                    <td>13.7</td>
                                    <td>3.02</td>
                                    <td>0.83</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3/8</td>
                                    <td>10</td>
                                    <td>17.1</td>
                                    <td>3.2</td>
                                    <td>1.13</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1/2</td>
                                    <td>15</td>
                                    <td>21.3</td>
                                    <td>4.78</td>
                                    <td>1.98</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3/4</td>
                                    <td>20</td>
                                    <td>26.7</td>
                                    <td>6.02</td>
                                    <td>3.32</td>
                                </tr>

                                <!-- Collapse rows -->

                                <tr class="t-row collapse table-xxc-full">
                                    <td>1</td>
                                    <td>25</td>
                                    <td>33.4</td>
                                    <td>7.47</td>
                                    <td>5.25</td>
                                </tr>
                                <tr class="t-row collapse table-xxc-full">
                                    <td>1 1/4</td>
                                    <td>32</td>
                                    <td>42.2</td>
                                    <td>9.09</td>
                                    <td>8.26</td>
                                </tr>
                                <tr class="t-row collapse table-xxc-full">
                                    <td>1 1/2</td>
                                    <td>40</td>
                                    <td>48.3</td>
                                    <td>10.15</td>
                                    <td>10.68</td>
                                </tr>
                                <tr class="t-row collapse table-xxc-full">
                                    <td>2</td>
                                    <td>50</td>
                                    <td>60.3</td>
                                    <td>11.07</td>
                                    <td>14.82</td>
                                </tr>
                                <tr class="t-row collapse table-xxc-full">
                                    <td>2 1/2</td>
                                    <td>65</td>
                                    <td>73.0</td>
                                    <td>13.49</td>
                                    <td>21.56</td>
                                </tr>
                                <tr class="t-row collapse table-xxc-full">
                                    <td>3</td>
                                    <td>80</td>
                                    <td>88.9</td>
                                    <td>15.24</td>
                                    <td>29.83</td>
                                </tr>
                                <tr class="t-row collapse table-xxc-full">
                                    <td>4</td>
                                    <td>100</td>
                                    <td>114.3</td>
                                    <td>18.26</td>
                                    <td>47.17</td>
                                </tr>
                                <tr class="t-row collapse table-xxc-full">
                                    <td>5</td>
                                    <td>125</td>
                                    <td>141.3</td>
                                    <td>21.95</td>
                                    <td>70.65</td>
                                </tr>
                                <tr class="t-row collapse table-xxc-full">
                                    <td>6</td>
                                    <td>150</td>
                                    <td>168.3</td>
                                    <td>25.4</td>
                                    <td>99.57</td>
                                </tr>
                                <tr class="t-row collapse table-xxc-full">
                                    <td>8</td>
                                    <td>200</td>
                                    <td>219.1</td>
                                    <td>28.58</td>
                                    <td>144.45</td>
                                </tr>
                                <tr class="t-row collapse table-xxc-full">
                                    <td>10</td>
                                    <td>250</td>
                                    <td>273.1</td>
                                    <td>31.75</td>
                                    <td>202.0</td>
                                </tr>
                                <tr class="t-row collapse table-xxc-full">
                                    <td>12</td>
                                    <td>300</td>
                                    <td>323.9</td>
                                    <td>36.53</td>
                                    <td>281.25</td>
                                </tr>
                                <tr class="t-row collapse table-xxc-full">
                                    <td>14</td>
                                    <td>350</td>
                                    <td>355.6</td>
                                    <td>38.89</td>
                                    <td>338.0</td>
                                </tr>
                                <tr class="t-row collapse table-xxc-full">
                                    <td>16</td>
                                    <td>400</td>
                                    <td>406.4</td>
                                    <td>44.45</td>
                                    <td>442.5</td>
                                </tr>
                                <tr class="t-row collapse table-xxc-full">
                                    <td>18</td>
                                    <td>450</td>
                                    <td>457.2</td>
                                    <td>50.01</td>
                                    <td>562.0</td>
                                </tr>
                                <tr class="t-row collapse table-xxc-full">
                                    <td>20</td>
                                    <td>500</td>
                                    <td>508.0</td>
                                    <td>55.56</td>
                                    <td>697.0</td>
                                </tr>
                                <tr class="t-row collapse table-xxc-full">
                                    <td>24</td>
                                    <td>600</td>
                                    <td>609.6</td>
                                    <td>63.5</td>
                                    <td>984.0</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- BUTTON -->
            <div class="text-center mt-3">
                <button id="toggleBtnXXC" class="btn btn-sm btn-primary cursor-pointer mb-2" data-bs-toggle="collapse"
                    data-bs-target=".table-xxc-full" style="background-color: #db7227; border:none;">
                    View Full Chart
                </button>
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
                                    <td>Stainless Steel</td>
                                    <td>304, 304L, 316, 316L, 310, 321, 347 for high-temperature resistance.</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Duplex & Super Duplex: </td>
                                    <td>2205, S31803, S32750 for high strength and corrosion </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nickel Alloys</td>
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
                               <img class="w-100" src="{{ asset('assets/images/product/NICKEL-ALLOYS.jpeg') }}" alt="Nickel alloy tubes for heat exchangers" loading="lazy" width="400" height="260">
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
                                <img class="w-100" src="{{ asset('assets/images/product/STAINLESS-STEEL.jpeg') }}" alt="Stainless steel boiler and condenser tubes" loading="lazy" width="400" height="260">
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
                                <img class="w-100" src="{{ asset('assets/images/product/DUPLEX-SUPER.png') }}" alt="Duplex and super duplex tubes for seawater service" loading="lazy" width="400" height="260">
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
                               <img class="w-100" src="{{ asset('assets/images/product/TITANIUM-ALLOYS.jpg') }}" alt="Titanium heat exchanger and condenser tubes" loading="lazy" width="400" height="260">
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
                              <img class="w-100" src="{{ asset('assets/images/product/RARE-TO-ALLOYS.jpg') }}" alt="Haynes superalloy tubes for high-temperature service" loading="lazy" width="400" height="260">
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
                                <img class="w-100" src="{{ asset('assets/images/product/CARBON-ALLOYS.jpg') }}" alt="Inconel alloy tubes for corrosion-resistant applications" loading="lazy" width="400" height="260">
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
                <h2>Applications & Industry Usage</h2>
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
            <h2>Buying Guide: How to Select the Right Boiler & Heat Exchanger Tube</h2>
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
                        <td>Stainless Steel</td>
                        <td>Steam, hygienic systems</td>
                    </tr>
                    <tr>
                        <td>Duplex / Super Duplex</td>
                        <td>Seawater, chlorides</td>
                    </tr>
                    <tr>
                        <td>Nickel Alloys</td>
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
<div class="col-md-6 center">
    <div class="application-card">
        <div class="application-icon">
            <i class="bi bi-list-check"></i>
        </div>
        <h5>Selecting Boiler Tubes</h5>
        <ul>
            <li>Temperature and pressure rating requirements</li>
            <li>Flow medium compatibility (steam, water, chemical)</li>
            <li>Corrosion exposure considerations</li>
            <li>Dimensional specifications (OD, thickness, tolerance)</li>
            <li>Compliance with applicable codes and standards</li>
        </ul>
    </div>
</div>

<!-- Card 2 -->
<div class="col-md-6 center">
    <div class="application-card">
        <div class="application-icon">
            <i class="bi bi-diagram-3-fill"></i>
        </div>
        <h5>Seamless vs Welded Tubes</h5>
        <ul>
            <li><strong>Seamless:</strong> No weld seam, superior strength for high pressure</li>
            <li><strong>Seamless:</strong> Ideal for critical boiler and superheater applications</li>
            <li><strong>Welded:</strong> Lower manufacturing cost, economical solution</li>
            <li><strong>Welded:</strong> Best for low to medium pressure heat exchangers</li>
            <li><strong>Both:</strong> Available in various grades and specifications</li>
        </ul>
    </div>
</div>
<!-- Card 3 -->

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
            <div class="col-md-6">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-diagram-3"></i></div>
                    <h5>Boiler Tube Basic Layout</h5>
                    <pre style="background:#f7f7f7;padding:20px;border-radius:8px;font-size:14px;">
+-------------------------------+
|         Boiler Tube           |
|   OD → ●────────────● ← OD    |
|       |              |        |
|       |   Thickness  |        |
|       |              |        |
+-------------------------------+
                    </pre>
                </div>
            </div>

            <!-- Diagram 2 -->
            <div class="col-md-6">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-diagram-3-fill"></i></div>
                    <h5>U-Bend Heat Exchanger Tube Layout</h5>
                    <pre style="background:#f7f7f7;padding:20px;border-radius:8px;font-size:14px;">
       _______________
     /                 \
    |                   |
    |                   |
    |___________________|
                    </pre>
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
                <h2>Advantages of Boiler & Heat Exchanger Tubes</h2>
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
                <h2>WHY CHOOSE US?</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-award-fill"></i></div>
                        <h5>Extensive Stock & Range: Wide inventory of boiler and heat exchanger tubes in multiple grades.
                        </h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Advanced Manufacturing: Precision cold drawing, heat treatment, U-bending, and finishing for high-performance tubes.
                        </h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Global Supply Network: Serving power plants, refineries, and industries worldwide.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Quality Assurance: ISO 9001:2015 certified with full compliance to ASTM/ASME.</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Timely Dispatch: Efficient production and logistics for on time delivery.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Customized Solutions: Tailored tubing solutions to meet specific project and industry
                            requirements</h5>
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
            Boiler & Heat Exchanger Tubes are precision-engineered components used in power plants, refineries, chemical industries, and various heat-transfer systems. They are built to withstand high temperature, high pressure, and corrosive environments while maintaining stable heat transfer efficiency.
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
            These tubes are manufactured in Stainless Steel, Duplex/Super Duplex, Nickel Alloys (Inconel, Monel), Alloy Steel, Carbon Steel, Copper Alloys, and Titanium. The selection depends on the operating temperature, pressure, and fluid medium.
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
            Boiler & Heat Exchanger Tubes are available from 6 mm to 219 mm OD, 0.5 mm to 12.7 mm wall thickness, and lengths up to 12 meters. Available in Seamless, Welded, ERW, EFW, and U-Bent forms.
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
            These tubes are manufactured according to ASTM A179, A192, A213, A249, A269, A333, ASME SA213, EN 10216, DIN, and related global specifications with strict inspection and QC.
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
            Used in boilers, superheaters, reheaters, economizers, heat exchangers, condensers, petrochemical heaters, chemical processing, marine applications (Cu-Ni & titanium), food & dairy systems, and HVAC/refrigeration.
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
            Ex‑stock sizes dispatch 2–5 days; make‑to‑order 2–6 weeks, grade/OD/WT par depend karta hai.
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
            EN 10204 3.1 MTC with heat/lot traceability; Hydro, Eddy Current, UT, PMI, Hardness testing available as per PO.
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
                    For further information, quotes, or customized boiler and heat exchanger tube products, <strong>Moksh Tubes & Fittings
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
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What are Boiler & Heat Exchanger Tubes?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Boiler & Heat Exchanger Tubes are precision-engineered components used in power plants, refineries, chemical industries, and various heat-transfer systems. They are built to withstand high temperature, high pressure, and corrosive environments while maintaining stable heat transfer efficiency."
      }
    },
    {
      "@type": "Question",
      "name": "What materials are used to manufacture these tubes?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "These tubes are manufactured in Stainless Steel, Duplex and Super Duplex Steel, Nickel Alloys (Inconel, Monel), Alloy Steel, Carbon Steel, Copper Alloys, and Titanium. Material selection depends on the operating temperature, pressure, and fluid medium of the application."
      }
    },
    {
      "@type": "Question",
      "name": "What sizes and dimensions are available?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Boiler & Heat Exchanger Tubes are available from 6 mm to 219 mm outer diameter, 0.5 mm to 12.7 mm wall thickness, and lengths up to 12 meters. They are offered in Seamless, Welded, ERW, EFW, and U-bent configurations."
      }
    },
    {
      "@type": "Question",
      "name": "What standards do these tubes meet?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "These tubes comply with ASTM A179, A192, A213, A249, A269, A333, ASME SA213, EN 10216, DIN and related international standards. Each tube undergoes strict testing and quality inspection to ensure mechanical and dimensional accuracy."
      }
    },
    {
      "@type": "Question",
      "name": "What are the main applications of Boiler & Heat Exchanger Tubes?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "These tubes are used in boilers, superheaters, economizers, reheaters, heat exchangers, condensers, petrochemical heaters, chemical processing plants, marine and offshore systems (Cu-Ni and titanium tubes), food and dairy processing, and HVAC & refrigeration systems."
      }
    },
    {
      "@type": "Question",
      "name": "What is the MOQ and typical lead time?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ex-stock sizes dispatch within 2–5 days; make-to-order deliveries take 2–6 weeks depending on grade, outer diameter, and wall thickness."
      }
    },
    {
      "@type": "Question",
      "name": "What test certificates and NDT do you provide?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We provide EN 10204 3.1 Material Test Certificate with full heat/lot traceability. Available NDT options include Hydro Test, Eddy Current, Ultrasonic Testing (UT), Positive Material Identification (PMI), and Hardness Testing as per purchase order."
      }
    }
  ]
}
</script>

    @endverbatim
@endsection
