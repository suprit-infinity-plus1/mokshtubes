@extends('layouts.master')

@section('title', 'SS 316 Welded Pipes ASTM A312 TP316 / TP316L | Manufacturer')
@section('meta_description', 'SS 316 Welded Pipes as per ASTM A312 TP316/TP316L. Manufacturer, supplier & exporter to India, UAE, Saudi Arabia, Qatar, Oman & Kuwait.')
@section('meta_keywords', 'Stainless Steel 316 Welded Pipes, ASTM A312 TP316 Pipe, SS 316 ERW Pipe, SS 316 EFW Pipe, SS 316 Pipe Supplier India, Stainless Steel Pipe Exporter')
@section('og_image', asset('assets/images/welded/ss-316-welded-pipes.png'))
@section('og_type', 'article')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/welded/ss-316-welded-pipes.png);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>SS 316 Welded Pipes<br>ASTM A312 TP316 / TP316L</h1>

                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Stainless Steel 316 Welded Pipes are premium-quality corrosion-resistant pipes manufactured from stainless steel strips or plates using advanced welding processes. Containing chromium, nickel, and molybdenum, Grade 316 offers superior resistance to pitting, crevice corrosion, and chloride attack compared to conventional stainless steel grades.
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
            <a href="#uses">Uses & Advantages</a> |
            <a href="#buying-guide">Buying Guide</a> |
            <a href="#ss316-vs-ss304">SS316 vs SS304</a> |
            <a href="#manufacturing">Manufacturing</a> |
            <a href="#mechanical">Mechanical Properties</a> |
            <a href="#tolerances">Tolerances & Exports</a> |
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
                STAINLESS STEEL 316 WELDED PIPES
            </h3>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/welded/ss-316-welded-pipes.png') }}" alt="SS 316 Welded Pipes"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4" style="text-align: justify;">
                            <strong class="text-black">Stainless Steel 316 Welded Pipes</strong> are among the most widely used austenitic stainless steel piping products for corrosive and high-temperature environments. Manufactured using advanced ERW (Electric Resistance Welded) and EFW (Electric Fusion Welded) processes, these pipes offer exceptional corrosion resistance, excellent weldability, high strength, and long service life.
                        </p>

                        <p class="fs-6 mb-4" style="text-align: justify;">
                            The addition of 2–3% molybdenum significantly improves resistance to chlorides, acids, seawater, and harsh industrial chemicals, making SS 316 Welded Pipes ideal for marine engineering, offshore platforms, chemical plants, desalination facilities, pharmaceutical manufacturing, food processing, and heat exchanger systems.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            At <strong style="color:black;"><a href="{{ url('/contact-us') }}">Moksh Tubes & Fittings LLP</a></strong>, we manufacture, stock, and export Stainless Steel 316 Welded Pipes in compliance with ASTM A312 TP316, ASTM A312 TP316L, ASTM A358, ASME SA312, and EN standards for domestic and international projects.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Stainless Steel 316 Welded Pipes Datasheet</h3>
            <p class="mb-3">
                Get the complete datasheet including chemical composition, mechanical properties, technical specifications, manufacturing standards, inspection & testing details, and application guidelines. Enter your email to receive the PDF instantly.
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

            <div class="row justify-content-center mb-5">
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
                                <tr class="t-row"><td>Material</td><td>Stainless Steel 316 / 316L</td></tr>
                                <tr class="t-row"><td>Standard</td><td>ASTM A312, ASTM A358, ASME SA312</td></tr>
                                <tr class="t-row"><td>Grade</td><td>TP316, TP316L</td></tr>
                                <tr class="t-row"><td>UNS Number</td><td>S31600, S31603</td></tr>
                                <tr class="t-row"><td>Outer Diameter</td><td>6 mm to 610 mm</td></tr>
                                <tr class="t-row"><td>Wall Thickness</td><td>0.5 mm to 40 mm</td></tr>
                                <tr class="t-row"><td>Length</td><td>Up to 12 Meters</td></tr>
                                <tr class="t-row"><td>Pipe Type</td><td>ERW, EFW, Welded</td></tr>
                                <tr class="t-row"><td>End Type</td><td>Plain End, Bevel End, Threaded</td></tr>
                                <tr class="t-row"><td>Surface Finish</td><td>Pickled, Annealed, Polished, Matte</td></tr>
                                <tr class="t-row"><td>Testing</td><td>Hydro Test, PMI, UT, Eddy Current</td></tr>
                                <tr class="t-row"><td>Certification</td><td>EN 10204 3.1 / 3.2</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="section-title center mt-5">
                <h3 class="fw-bold" style="color: #174268;">Chemical Composition</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Element</th>
                                    <th>Composition (%)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>Chromium (Cr)</td><td>16.0 – 18.0</td></tr>
                                <tr class="t-row"><td>Nickel (Ni)</td><td>10.0 – 14.0</td></tr>
                                <tr class="t-row"><td>Molybdenum (Mo)</td><td>2.0 – 3.0</td></tr>
                                <tr class="t-row"><td>Carbon (C)</td><td>Max 0.08</td></tr>
                                <tr class="t-row"><td>Manganese (Mn)</td><td>Max 2.0</td></tr>
                                <tr class="t-row"><td>Silicon (Si)</td><td>Max 0.75</td></tr>
                                <tr class="t-row"><td>Phosphorus (P)</td><td>Max 0.045</td></tr>
                                <tr class="t-row"><td>Sulfur (S)</td><td>Max 0.03</td></tr>
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
                <h2 class="fw-bold" style="color: #174268;">Stainless Steel 316 Welded Pipes Weight Chart</h2>
            </div>
            
            <p class="text-center mb-4">Weight Chart as per ASME B36.19M / ASTM A312 across standard schedules (5S, 10S, 40S, 80S, 160).</p>

            <div class="row justify-content-center">
                <!-- Sizes 1/8" to 2" -->
                <div class="col-lg-12 mb-5">
                    <h4 class="text-center mb-3" style="color: #db7227;">Sizes: 1/8" to 2" (ASME B36.19M / ASTM A312)</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>NB (NPS)</th>
                                    <th>OD (mm)</th>
                                    <th>SCH 5S WT (mm)</th>
                                    <th>SCH 5S Weight (kg/m)</th>
                                    <th>SCH 10S WT (mm)</th>
                                    <th>SCH 10S Weight (kg/m)</th>
                                    <th>SCH 40S WT (mm)</th>
                                    <th>SCH 40S Weight (kg/m)</th>
                                    <th>SCH 80S WT (mm)</th>
                                    <th>SCH 80S Weight (kg/m)</th>
                                    <th>SCH 160 WT (mm)</th>
                                    <th>SCH 160 Weight (kg/m)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>1/8"</td><td>10.3</td><td>1.24</td><td>0.27</td><td>1.73</td><td>0.37</td><td>1.73</td><td>0.37</td><td>2.41</td><td>0.49</td><td>3.20</td><td>0.62</td></tr>
                                <tr class="t-row"><td>1/4"</td><td>13.7</td><td>1.65</td><td>0.47</td><td>2.24</td><td>0.63</td><td>2.24</td><td>0.63</td><td>3.02</td><td>0.82</td><td>4.78</td><td>1.18</td></tr>
                                <tr class="t-row"><td>3/8"</td><td>17.1</td><td>1.65</td><td>0.60</td><td>2.31</td><td>0.86</td><td>2.31</td><td>0.86</td><td>3.20</td><td>1.14</td><td>4.78</td><td>1.61</td></tr>
                                <tr class="t-row"><td>1/2"</td><td>21.3</td><td>1.65</td><td>0.77</td><td>2.11</td><td>0.97</td><td>2.77</td><td>1.27</td><td>3.73</td><td>1.65</td><td>4.78</td><td>2.02</td></tr>
                                <tr class="t-row"><td>3/4"</td><td>26.7</td><td>1.65</td><td>0.98</td><td>2.11</td><td>1.24</td><td>2.87</td><td>1.69</td><td>3.91</td><td>2.25</td><td>5.56</td><td>3.03</td></tr>
                                <tr class="t-row"><td>1"</td><td>33.4</td><td>1.65</td><td>1.25</td><td>2.77</td><td>2.03</td><td>3.38</td><td>2.46</td><td>4.55</td><td>3.20</td><td>6.35</td><td>4.28</td></tr>
                                <tr class="t-row"><td>1-1/4"</td><td>42.2</td><td>1.65</td><td>1.60</td><td>2.77</td><td>2.63</td><td>3.56</td><td>3.38</td><td>4.85</td><td>4.50</td><td>6.35</td><td>5.75</td></tr>
                                <tr class="t-row"><td>1-1/2"</td><td>48.3</td><td>1.65</td><td>1.84</td><td>2.77</td><td>3.04</td><td>3.68</td><td>4.05</td><td>5.08</td><td>5.43</td><td>7.14</td><td>7.35</td></tr>
                                <tr class="t-row"><td>2"</td><td>60.3</td><td>1.65</td><td>2.31</td><td>2.77</td><td>3.91</td><td>3.91</td><td>5.44</td><td>5.54</td><td>7.48</td><td>8.74</td><td>11.06</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Sizes 2½" to 6" -->
                <div class="col-lg-12 mb-5">
                    <h4 class="text-center mb-3" style="color: #db7227;">Sizes: 2½" to 6" (ASME B36.19M / ASTM A312)</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>NB (NPS)</th>
                                    <th>OD (mm)</th>
                                    <th>SCH 5S WT (mm)</th>
                                    <th>SCH 5S Weight (kg/m)</th>
                                    <th>SCH 10S WT (mm)</th>
                                    <th>SCH 10S Weight (kg/m)</th>
                                    <th>SCH 40S WT (mm)</th>
                                    <th>SCH 40S Weight (kg/m)</th>
                                    <th>SCH 80S WT (mm)</th>
                                    <th>SCH 80S Weight (kg/m)</th>
                                    <th>SCH 160 WT (mm)</th>
                                    <th>SCH 160 Weight (kg/m)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>2-1/2"</td><td>73.0</td><td>2.11</td><td>3.74</td><td>3.05</td><td>5.36</td><td>5.16</td><td>8.63</td><td>7.01</td><td>11.47</td><td>9.53</td><td>15.06</td></tr>
                                <tr class="t-row"><td>3"</td><td>88.9</td><td>2.11</td><td>4.59</td><td>3.05</td><td>6.57</td><td>5.49</td><td>11.29</td><td>7.62</td><td>15.16</td><td>11.13</td><td>21.37</td></tr>
                                <tr class="t-row"><td>3-1/2"</td><td>101.6</td><td>2.11</td><td>5.28</td><td>3.05</td><td>7.56</td><td>5.74</td><td>13.57</td><td>8.08</td><td>18.68</td><td>12.70</td><td>28.21</td></tr>
                                <tr class="t-row"><td>4"</td><td>114.3</td><td>2.11</td><td>5.98</td><td>3.05</td><td>8.57</td><td>6.02</td><td>17.15</td><td>8.56</td><td>23.35</td><td>13.49</td><td>35.55</td></tr>
                                <tr class="t-row"><td>5"</td><td>141.3</td><td>2.77</td><td>9.56</td><td>3.40</td><td>11.64</td><td>6.55</td><td>22.81</td><td>9.53</td><td>32.52</td><td>15.88</td><td>52.45</td></tr>
                                <tr class="t-row"><td>6"</td><td>168.3</td><td>2.77</td><td>11.43</td><td>3.40</td><td>13.90</td><td>7.11</td><td>30.70</td><td>10.97</td><td>46.05</td><td>18.26</td><td>73.83</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Sizes 8" to 24" -->
                <div class="col-lg-12 mb-4">
                    <h4 class="text-center mb-3" style="color: #db7227;">Sizes: 8" to 24" (ASME B36.19M / ASTM A312)</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>NB (NPS)</th>
                                    <th>OD (mm)</th>
                                    <th>SCH 5S WT (mm)</th>
                                    <th>SCH 5S Weight (kg/m)</th>
                                    <th>SCH 10S WT (mm)</th>
                                    <th>SCH 10S Weight (kg/m)</th>
                                    <th>SCH 40S WT (mm)</th>
                                    <th>SCH 40S Weight (kg/m)</th>
                                    <th>SCH 80S WT (mm)</th>
                                    <th>SCH 80S Weight (kg/m)</th>
                                    <th>SCH 160 WT (mm)</th>
                                    <th>SCH 160 Weight (kg/m)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>8"</td><td>219.1</td><td>2.77</td><td>14.98</td><td>3.76</td><td>20.18</td><td>8.18</td><td>42.55</td><td>12.70</td><td>64.50</td><td>18.26</td><td>89.90</td></tr>
                                <tr class="t-row"><td>10"</td><td>273.0</td><td>3.40</td><td>22.75</td><td>4.19</td><td>27.80</td><td>9.27</td><td>60.30</td><td>15.09</td><td>95.00</td><td>21.44</td><td>131.60</td></tr>
                                <tr class="t-row"><td>12"</td><td>323.9</td><td>3.96</td><td>30.90</td><td>4.57</td><td>35.50</td><td>9.53</td><td>72.90</td><td>17.48</td><td>130.20</td><td>25.40</td><td>182.70</td></tr>
                                <tr class="t-row"><td>14"</td><td>355.6</td><td>3.96</td><td>33.90</td><td>4.78</td><td>40.70</td><td>9.53</td><td>80.20</td><td>19.05</td><td>158.00</td><td>27.79</td><td>219.80</td></tr>
                                <tr class="t-row"><td>16"</td><td>406.4</td><td>4.19</td><td>43.20</td><td>4.78</td><td>49.00</td><td>9.53</td><td>91.80</td><td>21.44</td><td>197.10</td><td>30.96</td><td>272.40</td></tr>
                                <tr class="t-row"><td>18"</td><td>457.2</td><td>4.19</td><td>48.50</td><td>4.78</td><td>55.20</td><td>9.53</td><td>103.30</td><td>23.83</td><td>237.50</td><td>34.93</td><td>334.30</td></tr>
                                <tr class="t-row"><td>20"</td><td>508.0</td><td>4.78</td><td>61.20</td><td>5.54</td><td>70.10</td><td>9.53</td><td>114.90</td><td>26.19</td><td>279.00</td><td>38.10</td><td>401.60</td></tr>
                                <tr class="t-row"><td>22"</td><td>558.8</td><td>4.78</td><td>67.40</td><td>5.54</td><td>77.40</td><td>9.53</td><td>126.40</td><td>28.58</td><td>323.50</td><td>41.28</td><td>474.20</td></tr>
                                <tr class="t-row"><td>24"</td><td>609.6</td><td>5.54</td><td>84.30</td><td>6.35</td><td>96.20</td><td>9.53</td><td>138.00</td><td>30.96</td><td>369.30</td><td>46.02</td><td>567.80</td></tr>
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
                        <h5>Stainless Steel 316</h5>
                        <p>Standard molybdenum-bearing stainless steel grade with excellent corrosion resistance and mechanical strength.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Stainless Steel 316L</h5>
                        <p>Low-carbon version of SS316 providing improved weldability and resistance to intergranular corrosion after welding.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>Stainless Steel 316H</h5>
                        <p>High-carbon variant suitable for elevated temperature applications and pressure systems.</p>
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
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Chemical Processing Industry</h5>
                        <p>✔ Chemical reactors<br>✔ Acid transfer lines<br>✔ Process piping systems</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-water"></i></div>
                        <h5>Marine & Offshore Industry</h5>
                        <p>✔ Seawater pipelines<br>✔ Shipbuilding structures<br>✔ Offshore platforms</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Oil & Gas Industry</h5>
                        <p>✔ Refinery piping<br>✔ Process equipment<br>✔ Offshore production systems</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-capsule"></i></div>
                        <h5>Pharmaceutical Industry</h5>
                        <p>✔ Sterile fluid transportation<br>✔ Clean room piping<br>✔ Manufacturing systems</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cup-straw"></i></div>
                        <h5>Food & Beverage Industry</h5>
                        <p>✔ Dairy processing plants<br>✔ Beverage production lines<br>✔ Food-grade piping systems</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Water Treatment Plants</h5>
                        <p>✔ Desalination facilities<br>✔ RO systems<br>✔ Water distribution networks</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="uses" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Uses & Advantages of SS 316 Welded Pipes</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Superior Corrosion Resistance</h5>
                        <p>Excellent protection against chlorides, acids, and aggressive chemicals.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-water"></i></div>
                        <h5>Outstanding Marine Performance</h5>
                        <p>Ideal for seawater, offshore platforms, and coastal installations.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-tools"></i></div>
                        <h5>Excellent Weldability</h5>
                        <p>Can be fabricated easily with high weld joint efficiency and mechanical strength.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>High Elevated Temperature Strength</h5>
                        <p>Maintains high creep, stress-to-rupture, and tensile strength at elevated temperatures.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                        <h5>Hygienic & Clean Surface</h5>
                        <p>Smooth internal flow surface suitable for sterile pharmaceutical and food processing.</p>
                    </div>
                </div>
            </div>
            
            <p class="text-center mt-4">
                <strong>Uses:</strong> Corrosion-resistant fluid transportation | Heat exchanger and condenser systems | Marine and offshore piping | Chemical processing plants | Pharmaceutical manufacturing systems | Food-grade process piping | Water treatment installations | Structural and fabrication projects
            </p>
        </div>
    </section>

    <section id="buying-guide" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Buying Guide for SS 316 Welded Pipes</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-check2-square"></i></div>
                        <h5>1. Verify Material Grade</h5>
                        <p>Ensure the pipes conform to SS 316 / 316L (UNS S31600 / S31603) with appropriate molybdenum content (2.0–3.0%) for superior pitting resistance.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-file-earmark-check"></i></div>
                        <h5>2. Check Manufacturing Standards</h5>
                        <p>Confirm compliance with ASTM A312, ASTM A358, ASME SA312, or EN standards depending on your pressure and temperature requirements.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-lock"></i></div>
                        <h5>3. Inspect Weld Integrity</h5>
                        <p>Check that welding processes (ERW/EFW/TIG) follow proper solution annealing and non-destructive testing (UT, Eddy Current, Hydrotest).</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-award"></i></div>
                        <h5>4. Request Test Certificates</h5>
                        <p>Always demand EN 10204 3.1 Mill Test Certificates verifying chemical composition, mechanical properties, and positive material identification (PMI).</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-aspect-ratio"></i></div>
                        <h5>5. Dimensional Accuracy & Finish</h5>
                        <p>Verify outer diameter, wall thickness (Schedule 5S to 160), length tolerances, and surface finish (Pickled, Annealed, Polished) match project specs.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="ss316-vs-ss304" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>SS 316 vs SS 304 Welded Pipes – Key Differences</h2>
            </div>
            
            <div class="row justify-content-center mt-4">
                <div class="col-lg-10">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Parameter</th>
                                    <th>SS 316 Welded Pipes</th>
                                    <th>SS 304 Welded Pipes</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>Alloy Composition</td><td>16-18% Cr, 10-14% Ni, <strong>2-3% Mo</strong></td><td>18% Cr, 8% Ni, <strong>No Mo</strong></td></tr>
                                <tr class="t-row"><td>Chloride / Marine Resistance</td><td><strong>Superior</strong> pitting & crevice corrosion resistance</td><td>Moderate resistance (susceptible to chloride pitting)</td></tr>
                                <tr class="t-row"><td>Corrosion in Acidic Media</td><td>Excellent against sulfuric, hydrochloric & acetic acids</td><td>Good general corrosion resistance</td></tr>
                                <tr class="t-row"><td>Temperature Resistance</td><td>Higher creep & stress rupture strength at elevated temps</td><td>Standard elevated temperature resistance</td></tr>
                                <tr class="t-row"><td>Cost</td><td>Slightly higher due to Molybdenum content</td><td>More economical for standard environments</td></tr>
                                <tr class="t-row"><td>Typical Applications</td><td>Marine, chemical plants, pharmaceuticals, offshore oil & gas</td><td>Food processing, domestic water, structural fabrication</td></tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="text-center mt-3">
                        📌 <strong>Conclusion:</strong> Choose <strong style="color: #db7227;">SS 316 Welded Pipes</strong> for marine environments, coastal installations, and aggressive chemical processing where maximum corrosion resistance is mandatory.
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
                        <p class="fs-6" style="text-align: justify;"><strong>Manufacturing Process of SS 316 Welded Pipes:</strong></p>
                        <p>Slitting of premium stainless steel 316 coils or plates</p>
                        <p>Cold roll-forming into precise cylindrical tubular shape</p>
                        <p>Advanced Welding (ERW / EFW / TIG) along longitudinal seam</p>
                        <p>Weld seam heat treatment (solution annealing)</p>
                        <p>Sizing, straightening & precision surface finishing</p>
                        <p>Non-destructive testing (NDT) & comprehensive final inspection</p>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6" style="text-align: justify;"><strong>Testing & Quality Control:</strong></p>
                        <p>Each SS 316 Welded Pipe undergoes stringent inspection including:</p>
                        <p>✔ Hydrostatic Testing</p>
                        <p>✔ Eddy Current Test & Ultrasonic Testing (UT)</p>
                        <p>✔ Positive Material Identification (PMI Test)</p>
                        <p>✔ Dimensional & Wall Thickness Inspection</p>
                        <p>✔ Visual & Surface Finish Verification</p>
                        <p><strong>📄 Test Certificate:</strong> EN 10204 3.1 / 3.2</p>
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
                    <h4 class="text-center mb-3" style="color: #db7227;">Mechanical Properties of SS 316 / 316L Welded Pipes</h4>
                    <p class="text-center mb-4">(As per ASTM A312 / ASME SA312)</p>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Property</th>
                                    <th>SS 316</th>
                                    <th>SS 316L</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>Tensile Strength</td><td>Min. 515 MPa</td><td>Min. 485 MPa</td></tr>
                                <tr class="t-row"><td>Yield Strength (0.2%)</td><td>Min. 205 MPa</td><td>Min. 170 MPa</td></tr>
                                <tr class="t-row"><td>Elongation</td><td>Min. 40%</td><td>Min. 40%</td></tr>
                                <tr class="t-row"><td>Hardness (HB)</td><td>Max. 217</td><td>Max. 217</td></tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="text-center mt-3">
                        📌 <strong>SS 316L</strong> provides low carbon content for enhanced weldability and protection against carbide precipitation during heavy gauge welding.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="tolerances" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="row mt-4 justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-rulers"></i></div>
                        <h5>Dimensional Tolerances</h5>
                        <p><strong>OD tolerance:</strong> ±0.75% to ±1.0%</p>
                        <p><strong>Wall thickness:</strong> −12.5% / +10%</p>
                        <p><strong>Length tolerance:</strong> Random: +100 mm | Cut length: ±3 mm</p>
                        <p><strong>Ovality & straightness:</strong> Strictly strictly conforming to ASTM A312 / ASME SA312</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-5">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-box-seam"></i></div>
                        <h5>Packaging & Global Exports</h5>
                        <p><strong>Supply Coverage:</strong> Pan-India, UAE, Saudi Arabia, Qatar, Oman, Kuwait, Bahrain, Europe & Americas</p>
                        <p><strong>Export Packaging:</strong> Seaworthy wooden crates & bundled packing, Plastic end caps & moisture protection, ISPM-15 fumigated packaging, Full heat & batch traceability</p>
                        <p><strong>Export Documentation:</strong> Commercial Invoice & Packing List, Certificate of Origin, EN 10204 3.1 / 3.2, Third-Party Inspection (TPI) support</p>
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
                        <h5>Compliance with ASTM, ASME & EN standards</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Project-based supply expertise worldwide</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-file-earmark-check"></i></div>
                        <h5>Reliable logistics & 3.1 documentation</h5>
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
                                <h4>What makes SS 316 welded pipe better than SS 304?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    SS 316 contains 2–3% molybdenum, which significantly enhances resistance to chloride pitting, crevice corrosion, and aggressive marine or chemical environments compared to SS 304.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Are SS 316 welded pipes suitable for seawater and marine applications?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Yes, due to its molybdenum alloy content, SS 316 is considered the standard marine grade stainless steel and performs exceptionally well in seawater pipelines, desalination plants, and offshore platforms.
                                </p>
                            </div>
                        </div>
                        
                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Can SS 316 welded pipes be used for high-temperature service?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Yes, Grade 316 offers excellent elevated temperature strength, high creep resistance, and good oxidation resistance up to 870°C in intermittent service and 925°C in continuous service.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Do you provide test certificates with SS 316 welded pipes?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Yes, we provide EN 10204 3.1 Mill Test Certificates with every order. Third-Party Inspection (TPI) reports such as EN 10204 3.2 can also be arranged upon request.
                                </p>
                            </div>
                        </div>
                        
                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What is the typical delivery time for orders?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Ex-stock standard items are dispatched within 2–5 working days. Customized manufacturing or project quantities typically take 2–4 weeks depending on order specifications.
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
                    Looking for SS 316 Welded Pipes for industrial, marine, or export projects?<br>
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
            "name": "SS 316 Welded Pipes ASTM A312 TP316 / TP316L",
            "description": "SS 316 Welded Pipes as per ASTM A312 TP316/TP316L. Manufacturer, supplier & exporter to India, UAE, Saudi Arabia, Qatar, Oman & Kuwait.",
            "brand": {
                "@type": "Brand",
                "name": "Moksh Tubes & Fittings LLP"
            },
            "manufacturer": {
                "@type": "Organization",
                "name": "Moksh Tubes & Fittings LLP"
            },
            "material": "Stainless Steel 316 / 316L",
            "url": "https://www.mokshtubes.com/products/pipes-tubes/ss-316-welded-pipes",
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
                "name": "What makes SS 316 welded pipe better than SS 304?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "SS 316 contains 2–3% molybdenum, which significantly enhances resistance to chloride pitting, crevice corrosion, and aggressive marine or chemical environments compared to SS 304."
                }
            },{
                "@type": "Question",
                "name": "Are SS 316 welded pipes suitable for seawater and marine applications?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, due to its molybdenum alloy content, SS 316 is considered the standard marine grade stainless steel and performs exceptionally well in seawater pipelines, desalination plants, and offshore platforms."
                }
            },{
                "@type": "Question",
                "name": "Can SS 316 welded pipes be used for high-temperature service?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, Grade 316 offers excellent elevated temperature strength, high creep resistance, and good oxidation resistance up to 870°C in intermittent service and 925°C in continuous service."
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
                "name": "SS 316 Welded Pipes",
                "item": "https://www.mokshtubes.com/products/pipes-tubes/ss-316-welded-pipes"
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
