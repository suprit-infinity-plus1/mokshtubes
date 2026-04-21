@extends('layouts.master')

@section('title', 'Seamless Pipes Supplier UAE, Saudi | Exporter India')
@section('meta_description', 'Seamless pipes exporter to UAE, Saudi Arabia, Qatar & Oman. ASTM pipes in stainless steel, carbon & alloy steel. Fast delivery from India.')
@section('meta_keywords', 'Seamless pipes, seamless pipes exporter, seamless steel pipes, carbon steel seamless pipes, stainless steel seamless pipes, alloy steel seamless pipes, ASTM seamless pipes')
@section('og_image', asset('assets/images/product/seamless-pipes.webp'))
@section('og_type', 'article')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/product/seamless-pipes.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Seamless Pipes & Tubes Supplier & Exporter <br> ASTM / ASME Industrial Pipes</h1>
                    <!-- Short Introduction -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Seamless Pipes & Tubes are designed for high-pressure, high-temperature, and critical industrial
                        applications, offering superior strength and reliability due to their seamless (no-weld)
                        construction. <br>
                        At Moksh Tubes & Fittings LLP, we are a leading supplier and exporter of seamless pipes in India,
                        delivering high-quality pipes across GCC countries, Europe, and global markets.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sticky Navigation -->
    <div class="sticky-top bg-white border-bottom material-tabs  w-100">
        <div class="container text-center">
            <ul class="nav justify-content-center py-2 nav-pills custom-nav-scroll">
                <li class=""><a class="" href="#overview">Overview</a></li>
                <li class=""><a class="" href="#specifications">Specifications</a></li>
                <li class=""><a class="" href="#types">Types</a></li>
                <li class=""><a class="" href="#size-chart">Size Chart</a></li>
                <li class=""><a class="" href="#grades">Grades</a></li>
                <li class=""><a class="" href="#applications">Applications</a></li>
                <li class=""><a class="" href="#industries">Industries</a></li>
                <li class=""><a class="" href="#manufacturing">Manufacturing</a></li>
                <li class=""><a class="" href="#export">Export</a></li>
                <li class=""><a class="" href="#quality">Quality</a></li>
                <li class=""><a class="" href="#faq">FAQ</a></li>
            </ul>
        </div>
    </div>

    <!-- Product Overview -->
    <section id="overview" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Product Overview</h2>
            </div>

            <h2 class="fw-semibold text-center mb-5" style="color: #db7227;">
                Introduction to Seamless Pipes
            </h2>

            <div class="row align-items-center">
                <!-- Left Content -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/product/seamless-pipes.webp') }}" alt="Seamless Pipes"
                        class="img-fluid rounded shadow-sm w-100" style="object-fit: cover;">
                </div>

                <!-- Right Content -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-3 text-justify" style="text-align: justify;">
                            <strong class="text-black">Seamless pipes</strong> are the preferred choice for industries where
                            failure is not an option. Unlike <a class="text-primary text-decoration-none fw-semibold" href="{{ route('products.pipes-tubes.welded-pipes') }}">welded pipes</a>, they are manufactured without joints, ensuring
                            maximum integrity under extreme pressure.
                        </p>

                        <ul class="fs-6 mb-4 list-unstyled">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> Uniform strength across
                                the pipe</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> Better resistance to
                                pressure and temperature</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> Long-term durability in
                                harsh environments</li>
                        </ul>

                        <p class="fs-6 mb-3 text-justify" style="text-align: justify;">
                            At <strong class="text-black">Moksh Tubes & Fittings LLP</strong>, we supply seamless pipes
                            tailored for EPC projects, oil & gas, power plants, and international export requirements. Wide
                            range of alloys available including <a class="text-primary text-decoration-none fw-semibold" href="{{ route('materials.austenitic-stainless-Steel') }}">stainless steel</a>, <a class="text-primary text-decoration-none fw-semibold" href="{{ route('materials.engineering-Steels') }}">carbon steel</a>, <a class="text-primary text-decoration-none fw-semibold" href="{{ route('materials.nickel-Based-Superalloys') }}">nickel alloys</a>, and <a class="text-primary text-decoration-none fw-semibold" href="{{ route('materials.titanium') }}">titanium</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Features -->
    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-5">
                <h2>Key Features</h2>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="p-4 bg-white border  rounded text-center h-100 shadow-sm custom-hover-card">
                        <i class="bi bi-shield-shaded fs-1 text-primary mb-3"></i>
                        <h4 class="fw-bold mb-3">No Weld Seam</h4>
                        <p class="text-muted">Eliminates weak points, ensuring higher strength and structural safety.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="p-4 bg-white border  rounded text-center h-100 shadow-sm custom-hover-card">
                        <i class="bi bi-thermometer-high fs-1 text-danger mb-3"></i>
                        <h4 class="fw-bold mb-3">High Pressure & Temperature Resistance</h4>
                        <p class="text-muted">Capable of handling extreme operational stress.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="p-4 bg-white border  rounded text-center h-100 shadow-sm custom-hover-card">
                        <i class="bi bi-droplet-half fs-1 text-info mb-3"></i>
                        <h4 class="fw-bold mb-3">Excellent Corrosion Resistance</h4>
                        <p class="text-muted">Available in high-grade alloys designed for harsh environments.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="p-4 bg-white border  rounded text-center h-100 shadow-sm custom-hover-card">
                        <i class="bi bi-water fs-1 text-primary mb-3"></i>
                        <h4 class="fw-bold mb-3">Smooth Internal Surface</h4>
                        <p class="text-muted">Allows for better flow characteristics and reduced friction.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="p-4 bg-white border  rounded text-center h-100 shadow-sm custom-hover-card">
                        <i class="bi bi-collection-fill fs-1 text-secondary mb-3"></i>
                        <h4 class="fw-bold mb-3">Wide Range of Alloys</h4>
                        <p class="text-muted"><a class="text-decoration-none" style="color: inherit;" href="{{ route('materials.austenitic-stainless-Steel') }}">Stainless steel</a>, <a class="text-decoration-none" style="color: inherit;" href="{{ route('materials.engineering-Steels') }}">carbon steel</a>, <a class="text-decoration-none" style="color: inherit;" href="{{ route('materials.duplex-and-super-duplex') }}">duplex</a>, <a class="text-decoration-none" style="color: inherit;" href="{{ route('materials.nickel-Based-Superalloys') }}">nickel alloys</a> & <a class="text-decoration-none" style="color: inherit;" href="{{ route('materials.titanium') }}">titanium</a>.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="p-4 bg-white border  rounded text-center h-100 shadow-sm custom-hover-card">
                        <i class="bi bi-box-seam fs-1 text-success mb-3"></i>
                        <h4 class="fw-bold mb-3">Export-Ready Packaging</h4>
                        <p class="text-muted">Complete documentation and fast global delivery included.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Specifications -->
    <section class="sec-padd-top sec-padd-bottom bg-light" id="specifications">
        <div class="container">
            <div class="section-title center">
                <h2>Specifications</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="table-responsive shadow-sm rounded">
                        <table class="table table-bordered table-striped align-middle mb-0 bg-white">
                            <thead class="table-dark text-center">
                                <tr>
                                    <th width="30%">Category</th>
                                    <th width="70%">Details</th>
                                </tr>
                            </thead>
                            <tbody class="text-start fs-6">
                                <tr>
                                    <td class="fw-bold">Material</td>
                                    <td><a class="text-primary text-decoration-none" href="{{ route('materials.austenitic-stainless-Steel') }}">Stainless Steel</a>, <a class="text-primary text-decoration-none" href="{{ route('materials.engineering-Steels') }}">Carbon Steel</a>, Alloy Steel, <a class="text-primary text-decoration-none" href="{{ route('materials.duplex-and-super-duplex') }}">Duplex</a>, <a class="text-primary text-decoration-none" href="{{ route('materials.nickel-Based-Superalloys') }}">Nickel Alloys</a>, <a class="text-primary text-decoration-none" href="{{ route('materials.titanium') }}">Titanium</a></td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">OD Range</td>
                                    <td>3 mm to 610 mm</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Thickness</td>
                                    <td>All standard schedules (5S to XXS)</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Length</td>
                                    <td>Up to 12 meters</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Finish</td>
                                    <td>Pickled, Polished, Bright Annealed</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Forms</td>
                                    <td>Round, Square, Rectangular</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Standards</td>
                                    <td>ASTM, ASME, API, DIN, EN</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Start product area-->
    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Seamless Pipes and Tubes</h2>
            </div>

            <div class="row g-4">
                 <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ route('products.pipes-tubes.welded-pipes.astm-sa106-grade-b-seamless-pipes') }}"
                        class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">

                            <img src="{{ asset('assets/images/welded/image2.png') }}"
                                alt="ASTM SA106 Grade B Seamless Pipes" class="img-fluid rounded mb-3" style="border-radius: 8px;">

                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                ASTM SA106 Grade B Seamless Pipes
                            </h6>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{ route('products.pipes-tubes.seamless-pipes.astm-a106-gr-b-seamless-pipes') }}"
                        class="text-decoration-none d-block h-100">
                        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                            style="border-color: #db7227; transition: 0.3s;">

                            <img src="{{ asset('assets/images/welded/image2.png') }}"
                                alt="ASTM A106 Gr B Seamless Pipes" class="img-fluid rounded mb-3" style="border-radius: 8px;">

                            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                style="background-color: #174268; color: #fff; display: inline-block;">
                                ASTM A106 Gr B Seamless Pipes
                            </h6>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- Types of Seamless Pipes -->
    <section id="types" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2>Types of Seamless Pipes</h2>
            </div>

            <div class="row g-4 justify-content-center pt-2">
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm border-0 border-start border-4 border-primary">
                        <div class="card-body">
                            <h4 class="card-title fw-bold text-primary"><i class="bi bi-fire me-2"></i>Hot Finished Seamless
                                Pipes</h4>
                            <p class="card-text fs-6 mt-3">Used for heavy-duty industrial and structural applications where
                                high yield strength is necessary.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm border-0 border-start border-4 border-success">
                        <div class="card-body">
                            <h4 class="card-title fw-bold text-success"><i class="bi bi-snow2 me-2"></i>Cold Drawn Seamless
                                Pipes</h4>
                            <p class="card-text fs-6 mt-3">High precision pipes primarily used for instrumentation and
                                critical mechanical use.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm border-0 border-start border-4 border-warning">
                        <div class="card-body">
                            <h4 class="card-title fw-bold text-warning"><i class="bi bi-water me-2"></i>Hydraulic Seamless
                                Tubes</h4>
                            <p class="card-text fs-6 mt-3">Designed specifically for use in fluid hydraulic systems and
                                specialized pressure applications.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Charts Table -->
    <section id="size-chart" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-4">
                <h2>Charts</h2>
            </div>

            <div class="section-title center mb-4">
                <h4 class="fw-bold" style="color: #db7227;">Seamless Pipes – Combined Weight & Size Chart</h4>
            </div>
            <p class="text-center text-muted mb-4">Weight and size charts for seamless pipes can be provided upon request,
                customized to the required schedules.</p>

            <div class="table-responsive mb-5">
                <table class="table table-bordered table-striped text-center align-middle">
                    <thead class="table-dark">
                        <tr>
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
                        <tr>
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
                        <tr>
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
                        <tr>
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
                        <tr>
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
                        <tr>
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
                        <tr>
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
                        <tr>
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
                        <tr>
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
                        <tr>
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
                        <tr>
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
                        <tr>
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
                        <tr>
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
                        <tr>
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
                        <tr>
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
                        <tr>
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
                        <tr>
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
                        <tr>
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

            <!-- Start Accordion Charts -->
            <div class="row justify-content-center pt-4">
                <div class="col-lg-10">
                    <h4 class="fw-bold mb-4 text-center" style="color: #174268;">
                        DETAILED SIZE CHARTS
                    </h4>
                    <div class="accordion" id="accordionSizeCharts">

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading5S">
                                <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse5S" aria-expanded="true" aria-controls="collapse5S">Schedule 5S
                                    – Size Chart</button>
                            </h2>
                            <div id="collapse5S" class="accordion-collapse collapse show" aria-labelledby="heading5S"
                                data-bs-parent="#accordionSizeCharts">
                                <div class="accordion-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped text-center align-middle mb-0">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>NPS</th>
                                                    <th>NB (mm)</th>
                                                    <th>OD (mm)</th>
                                                    <th>Wall (mm)</th>
                                                    <th>ID (mm)</th>
                                                    <th>Weight (kg/m)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1/8</td>
                                                    <td>3</td>
                                                    <td>10.3</td>
                                                    <td>1.24</td>
                                                    <td>7.8</td>
                                                    <td>0.276</td>
                                                </tr>
                                                <tr>
                                                    <td>1/4</td>
                                                    <td>6</td>
                                                    <td>13.7</td>
                                                    <td>1.24</td>
                                                    <td>11.2</td>
                                                    <td>0.390</td>
                                                </tr>
                                                <tr>
                                                    <td>3/8</td>
                                                    <td>10</td>
                                                    <td>17.1</td>
                                                    <td>1.24</td>
                                                    <td>14.6</td>
                                                    <td>0.490</td>
                                                </tr>
                                                <tr>
                                                    <td>1/2</td>
                                                    <td>15</td>
                                                    <td>21.3</td>
                                                    <td>1.65</td>
                                                    <td>18.0</td>
                                                    <td>0.840</td>
                                                </tr>
                                                <tr>
                                                    <td>3/4</td>
                                                    <td>20</td>
                                                    <td>26.7</td>
                                                    <td>1.65</td>
                                                    <td>23.4</td>
                                                    <td>1.030</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>25</td>
                                                    <td>33.4</td>
                                                    <td>1.65</td>
                                                    <td>30.1</td>
                                                    <td>1.300</td>
                                                </tr>
                                                <tr>
                                                    <td>1 1/4</td>
                                                    <td>32</td>
                                                    <td>42.2</td>
                                                    <td>1.65</td>
                                                    <td>38.9</td>
                                                    <td>1.650</td>
                                                </tr>
                                                <tr>
                                                    <td>1 1/2</td>
                                                    <td>40</td>
                                                    <td>48.3</td>
                                                    <td>1.65</td>
                                                    <td>44.9</td>
                                                    <td>1.910</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>50</td>
                                                    <td>60.3</td>
                                                    <td>1.65</td>
                                                    <td>56.0</td>
                                                    <td>2.400</td>
                                                </tr>
                                                <tr>
                                                    <td>2 1/2</td>
                                                    <td>65</td>
                                                    <td>73.0</td>
                                                    <td>2.11</td>
                                                    <td>68.8</td>
                                                    <td>3.690</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>80</td>
                                                    <td>88.9</td>
                                                    <td>2.11</td>
                                                    <td>84.7</td>
                                                    <td>4.510</td>
                                                </tr>
                                                <tr>
                                                    <td>3 1/2</td>
                                                    <td>90</td>
                                                    <td>101.6</td>
                                                    <td>2.11</td>
                                                    <td>97.4</td>
                                                    <td>5.170</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>100</td>
                                                    <td>114.3</td>
                                                    <td>2.11</td>
                                                    <td>110.1</td>
                                                    <td>5.840</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>125</td>
                                                    <td>141.3</td>
                                                    <td>2.77</td>
                                                    <td>135.8</td>
                                                    <td>9.470</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>150</td>
                                                    <td>168.3</td>
                                                    <td>2.77</td>
                                                    <td>162.8</td>
                                                    <td>11.320</td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>200</td>
                                                    <td>219.1</td>
                                                    <td>2.77</td>
                                                    <td>213.6</td>
                                                    <td>14.790</td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>250</td>
                                                    <td>273.1</td>
                                                    <td>3.40</td>
                                                    <td>266.3</td>
                                                    <td>22.630</td>
                                                </tr>
                                                <tr>
                                                    <td>12</td>
                                                    <td>300</td>
                                                    <td>323.9</td>
                                                    <td>3.56</td>
                                                    <td>317.0</td>
                                                    <td>31.250</td>
                                                </tr>
                                                <tr>
                                                    <td>14</td>
                                                    <td>350</td>
                                                    <td>355.6</td>
                                                    <td>3.96</td>
                                                    <td>347.7</td>
                                                    <td>36.960</td>
                                                </tr>
                                                <tr>
                                                    <td>16</td>
                                                    <td>400</td>
                                                    <td>406.4</td>
                                                    <td>4.19</td>
                                                    <td>398.0</td>
                                                    <td>41.560</td>
                                                </tr>
                                                <tr>
                                                    <td>18</td>
                                                    <td>450</td>
                                                    <td>457.2</td>
                                                    <td>4.57</td>
                                                    <td>448.1</td>
                                                    <td>49.420</td>
                                                </tr>
                                                <tr>
                                                    <td>20</td>
                                                    <td>500</td>
                                                    <td>508.0</td>
                                                    <td>5.54</td>
                                                    <td>496.9</td>
                                                    <td>59.250</td>
                                                </tr>
                                                <tr>
                                                    <td>22</td>
                                                    <td>550</td>
                                                    <td>558.8</td>
                                                    <td>5.54</td>
                                                    <td>547.7</td>
                                                    <td>65.970</td>
                                                </tr>
                                                <tr>
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
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading10S">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse10S" aria-expanded="false" aria-controls="collapse10S">Schedule
                                    10S (ASME B36.19)</button>
                            </h2>
                            <div id="collapse10S" class="accordion-collapse collapse" aria-labelledby="heading10S"
                                data-bs-parent="#accordionSizeCharts">
                                <div class="accordion-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped text-center align-middle mb-0">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>NPS</th>
                                                    <th>NB (mm)</th>
                                                    <th>OD (mm)</th>
                                                    <th>Wall Thickness (mm)</th>
                                                    <th>ID (mm)</th>
                                                    <th>Weight (kg/m)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1/8</td>
                                                    <td>3</td>
                                                    <td>10.3</td>
                                                    <td>1.65</td>
                                                    <td>7.0</td>
                                                    <td>0.37</td>
                                                </tr>
                                                <tr>
                                                    <td>1/4</td>
                                                    <td>6</td>
                                                    <td>13.7</td>
                                                    <td>1.65</td>
                                                    <td>10.4</td>
                                                    <td>0.52</td>
                                                </tr>
                                                <tr>
                                                    <td>3/8</td>
                                                    <td>10</td>
                                                    <td>17.1</td>
                                                    <td>1.65</td>
                                                    <td>13.8</td>
                                                    <td>0.66</td>
                                                </tr>
                                                <tr>
                                                    <td>1/2</td>
                                                    <td>15</td>
                                                    <td>21.3</td>
                                                    <td>1.65</td>
                                                    <td>18.0</td>
                                                    <td>0.84</td>
                                                </tr>
                                                <tr>
                                                    <td>3/4</td>
                                                    <td>20</td>
                                                    <td>26.7</td>
                                                    <td>2.11</td>
                                                    <td>22.5</td>
                                                    <td>1.33</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>25</td>
                                                    <td>33.4</td>
                                                    <td>2.11</td>
                                                    <td>29.2</td>
                                                    <td>1.7</td>
                                                </tr>
                                                <tr>
                                                    <td>1 1/4</td>
                                                    <td>32</td>
                                                    <td>42.2</td>
                                                    <td>2.11</td>
                                                    <td>38.0</td>
                                                    <td>2.15</td>
                                                </tr>
                                                <tr>
                                                    <td>1 1/2</td>
                                                    <td>40</td>
                                                    <td>48.3</td>
                                                    <td>2.11</td>
                                                    <td>44.0</td>
                                                    <td>2.51</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>50</td>
                                                    <td>60.3</td>
                                                    <td>2.11</td>
                                                    <td>56.1</td>
                                                    <td>3.16</td>
                                                </tr>
                                                <tr>
                                                    <td>2 1/2</td>
                                                    <td>65</td>
                                                    <td>73.0</td>
                                                    <td>2.77</td>
                                                    <td>67.5</td>
                                                    <td>4.89</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>80</td>
                                                    <td>88.9</td>
                                                    <td>2.77</td>
                                                    <td>83.4</td>
                                                    <td>6.02</td>
                                                </tr>
                                                <tr>
                                                    <td>3 1/2</td>
                                                    <td>90</td>
                                                    <td>101.6</td>
                                                    <td>2.77</td>
                                                    <td>96.1</td>
                                                    <td>6.87</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>100</td>
                                                    <td>114.3</td>
                                                    <td>2.77</td>
                                                    <td>108.8</td>
                                                    <td>7.73</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>125</td>
                                                    <td>141.3</td>
                                                    <td>3.40</td>
                                                    <td>134.5</td>
                                                    <td>11.9</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>150</td>
                                                    <td>168.3</td>
                                                    <td>3.40</td>
                                                    <td>161.5</td>
                                                    <td>14.3</td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>200</td>
                                                    <td>219.1</td>
                                                    <td>3.40</td>
                                                    <td>212.3</td>
                                                    <td>18.3</td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>250</td>
                                                    <td>273.1</td>
                                                    <td>4.78</td>
                                                    <td>263.5</td>
                                                    <td>29.4</td>
                                                </tr>
                                                <tr>
                                                    <td>12</td>
                                                    <td>300</td>
                                                    <td>323.9</td>
                                                    <td>4.78</td>
                                                    <td>314.3</td>
                                                    <td>40.7</td>
                                                </tr>
                                                <tr>
                                                    <td>14</td>
                                                    <td>350</td>
                                                    <td>355.6</td>
                                                    <td>5.54</td>
                                                    <td>344.5</td>
                                                    <td>47.5</td>
                                                </tr>
                                                <tr>
                                                    <td>16</td>
                                                    <td>400</td>
                                                    <td>406.4</td>
                                                    <td>5.54</td>
                                                    <td>395.3</td>
                                                    <td>53.4</td>
                                                </tr>
                                                <tr>
                                                    <td>18</td>
                                                    <td>450</td>
                                                    <td>457.2</td>
                                                    <td>5.54</td>
                                                    <td>446.1</td>
                                                    <td>63.5</td>
                                                </tr>
                                                <tr>
                                                    <td>20</td>
                                                    <td>500</td>
                                                    <td>508.0</td>
                                                    <td>7.11</td>
                                                    <td>493.8</td>
                                                    <td>78.7</td>
                                                </tr>
                                                <tr>
                                                    <td>22</td>
                                                    <td>550</td>
                                                    <td>558.8</td>
                                                    <td>7.11</td>
                                                    <td>544.6</td>
                                                    <td>87.7</td>
                                                </tr>
                                                <tr>
                                                    <td>24</td>
                                                    <td>600</td>
                                                    <td>609.6</td>
                                                    <td>7.11</td>
                                                    <td>595.4</td>
                                                    <td>109.4</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading40S">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse40S" aria-expanded="false" aria-controls="collapse40S">Schedule
                                    40S (ASME B36.19)</button>
                            </h2>
                            <div id="collapse40S" class="accordion-collapse collapse" aria-labelledby="heading40S"
                                data-bs-parent="#accordionSizeCharts">
                                <div class="accordion-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped text-center align-middle mb-0">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>NPS</th>
                                                    <th>NB (mm)</th>
                                                    <th>OD (mm)</th>
                                                    <th>Wall Thickness (mm)</th>
                                                    <th>ID (mm)</th>
                                                    <th>Weight (kg/m)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1/8</td>
                                                    <td>3</td>
                                                    <td>10.3</td>
                                                    <td>2.77</td>
                                                    <td>4.76</td>
                                                    <td>0.72</td>
                                                </tr>
                                                <tr>
                                                    <td>1/4</td>
                                                    <td>6</td>
                                                    <td>13.7</td>
                                                    <td>2.77</td>
                                                    <td>8.16</td>
                                                    <td>1.06</td>
                                                </tr>
                                                <tr>
                                                    <td>3/8</td>
                                                    <td>10</td>
                                                    <td>17.1</td>
                                                    <td>2.77</td>
                                                    <td>11.56</td>
                                                    <td>1.39</td>
                                                </tr>
                                                <tr>
                                                    <td>1/2</td>
                                                    <td>15</td>
                                                    <td>21.3</td>
                                                    <td>3.38</td>
                                                    <td>14.54</td>
                                                    <td>1.69</td>
                                                </tr>
                                                <tr>
                                                    <td>3/4</td>
                                                    <td>20</td>
                                                    <td>26.7</td>
                                                    <td>3.38</td>
                                                    <td>20.0</td>
                                                    <td>2.45</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>25</td>
                                                    <td>33.4</td>
                                                    <td>3.38</td>
                                                    <td>26.64</td>
                                                    <td>3.35</td>
                                                </tr>
                                                <tr>
                                                    <td>1 1/4</td>
                                                    <td>32</td>
                                                    <td>42.2</td>
                                                    <td>3.56</td>
                                                    <td>35.08</td>
                                                    <td>4.54</td>
                                                </tr>
                                                <tr>
                                                    <td>1 1/2</td>
                                                    <td>40</td>
                                                    <td>48.3</td>
                                                    <td>3.68</td>
                                                    <td>40.94</td>
                                                    <td>5.35</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>50</td>
                                                    <td>60.3</td>
                                                    <td>3.68</td>
                                                    <td>52.94</td>
                                                    <td>7.41</td>
                                                </tr>
                                                <tr>
                                                    <td>2 1/2</td>
                                                    <td>65</td>
                                                    <td>73.0</td>
                                                    <td>3.91</td>
                                                    <td>65.18</td>
                                                    <td>9.84</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>80</td>
                                                    <td>88.9</td>
                                                    <td>4.55</td>
                                                    <td>79.8</td>
                                                    <td>13.1</td>
                                                </tr>
                                                <tr>
                                                    <td>3 1/2</td>
                                                    <td>90</td>
                                                    <td>101.6</td>
                                                    <td>4.55</td>
                                                    <td>92.5</td>
                                                    <td>15.2</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>100</td>
                                                    <td>114.3</td>
                                                    <td>6.02</td>
                                                    <td>102.3</td>
                                                    <td>19.1</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>125</td>
                                                    <td>141.3</td>
                                                    <td>6.02</td>
                                                    <td>129.3</td>
                                                    <td>25.5</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>150</td>
                                                    <td>168.3</td>
                                                    <td>6.55</td>
                                                    <td>155.2</td>
                                                    <td>31.7</td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>200</td>
                                                    <td>219.1</td>
                                                    <td>8.18</td>
                                                    <td>202.7</td>
                                                    <td>46.4</td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>250</td>
                                                    <td>273.1</td>
                                                    <td>9.27</td>
                                                    <td>254.6</td>
                                                    <td>65.8</td>
                                                </tr>
                                                <tr>
                                                    <td>12</td>
                                                    <td>300</td>
                                                    <td>323.9</td>
                                                    <td>9.53</td>
                                                    <td>305.0</td>
                                                    <td>82.6</td>
                                                </tr>
                                                <tr>
                                                    <td>14</td>
                                                    <td>350</td>
                                                    <td>355.6</td>
                                                    <td>10.97</td>
                                                    <td>333.7</td>
                                                    <td>96.8</td>
                                                </tr>
                                                <tr>
                                                    <td>16</td>
                                                    <td>400</td>
                                                    <td>406.4</td>
                                                    <td>12.7</td>
                                                    <td>381.0</td>
                                                    <td>120.3</td>
                                                </tr>
                                                <tr>
                                                    <td>18</td>
                                                    <td>450</td>
                                                    <td>457.2</td>
                                                    <td>12.7</td>
                                                    <td>434.8</td>
                                                    <td>135.6</td>
                                                </tr>
                                                <tr>
                                                    <td>20</td>
                                                    <td>500</td>
                                                    <td>508.0</td>
                                                    <td>15.09</td>
                                                    <td>477.8</td>
                                                    <td>171.7</td>
                                                </tr>
                                                <tr>
                                                    <td>22</td>
                                                    <td>550</td>
                                                    <td>558.8</td>
                                                    <td>15.09</td>
                                                    <td>528.2</td>
                                                    <td>191.6</td>
                                                </tr>
                                                <tr>
                                                    <td>24</td>
                                                    <td>600</td>
                                                    <td>609.6</td>
                                                    <td>15.09</td>
                                                    <td>579.4</td>
                                                    <td>213.2</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading80S">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse80S" aria-expanded="false" aria-controls="collapse80S">Schedule
                                    80S (ASME B36.19)</button>
                            </h2>
                            <div id="collapse80S" class="accordion-collapse collapse" aria-labelledby="heading80S"
                                data-bs-parent="#accordionSizeCharts">
                                <div class="accordion-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped text-center align-middle mb-0">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>NPS</th>
                                                    <th>NB (mm)</th>
                                                    <th>OD (mm)</th>
                                                    <th>Wall Thickness (mm)</th>
                                                    <th>ID (mm)</th>
                                                    <th>Weight (kg/m)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1/8</td>
                                                    <td>3</td>
                                                    <td>10.3</td>
                                                    <td>1.73</td>
                                                    <td>6.84</td>
                                                    <td>0.39</td>
                                                </tr>
                                                <tr>
                                                    <td>1/4</td>
                                                    <td>6</td>
                                                    <td>13.7</td>
                                                    <td>2.24</td>
                                                    <td>9.22</td>
                                                    <td>0.64</td>
                                                </tr>
                                                <tr>
                                                    <td>3/8</td>
                                                    <td>10</td>
                                                    <td>17.1</td>
                                                    <td>2.31</td>
                                                    <td>12.48</td>
                                                    <td>0.84</td>
                                                </tr>
                                                <tr>
                                                    <td>1/2</td>
                                                    <td>15</td>
                                                    <td>21.3</td>
                                                    <td>3.73</td>
                                                    <td>13.84</td>
                                                    <td>1.43</td>
                                                </tr>
                                                <tr>
                                                    <td>3/4</td>
                                                    <td>20</td>
                                                    <td>26.7</td>
                                                    <td>3.91</td>
                                                    <td>18.88</td>
                                                    <td>2.21</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>25</td>
                                                    <td>33.4</td>
                                                    <td>4.55</td>
                                                    <td>24.3</td>
                                                    <td>3.39</td>
                                                </tr>
                                                <tr>
                                                    <td>1 1/4</td>
                                                    <td>32</td>
                                                    <td>42.2</td>
                                                    <td>4.85</td>
                                                    <td>32.5</td>
                                                    <td>4.9</td>
                                                </tr>
                                                <tr>
                                                    <td>1 1/2</td>
                                                    <td>40</td>
                                                    <td>48.3</td>
                                                    <td>5.08</td>
                                                    <td>38.1</td>
                                                    <td>6.2</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>50</td>
                                                    <td>60.3</td>
                                                    <td>5.54</td>
                                                    <td>49.2</td>
                                                    <td>8.59</td>
                                                </tr>
                                                <tr>
                                                    <td>2 1/2</td>
                                                    <td>65</td>
                                                    <td>73.0</td>
                                                    <td>7.01</td>
                                                    <td>59.0</td>
                                                    <td>12.6</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>80</td>
                                                    <td>88.9</td>
                                                    <td>7.62</td>
                                                    <td>73.66</td>
                                                    <td>17.4</td>
                                                </tr>
                                                <tr>
                                                    <td>3 1/2</td>
                                                    <td>90</td>
                                                    <td>101.6</td>
                                                    <td>8.08</td>
                                                    <td>85.44</td>
                                                    <td>21.7</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>100</td>
                                                    <td>114.3</td>
                                                    <td>8.56</td>
                                                    <td>97.18</td>
                                                    <td>26.7</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>125</td>
                                                    <td>141.3</td>
                                                    <td>9.53</td>
                                                    <td>122.2</td>
                                                    <td>36.5</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>150</td>
                                                    <td>168.3</td>
                                                    <td>10.97</td>
                                                    <td>146.36</td>
                                                    <td>49.6</td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>200</td>
                                                    <td>219.1</td>
                                                    <td>12.7</td>
                                                    <td>193.7</td>
                                                    <td>72.4</td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>250</td>
                                                    <td>273.1</td>
                                                    <td>15.09</td>
                                                    <td>242.9</td>
                                                    <td>107.4</td>
                                                </tr>
                                                <tr>
                                                    <td>12</td>
                                                    <td>300</td>
                                                    <td>323.9</td>
                                                    <td>17.48</td>
                                                    <td>289.0</td>
                                                    <td>145.2</td>
                                                </tr>
                                                <tr>
                                                    <td>14</td>
                                                    <td>350</td>
                                                    <td>355.6</td>
                                                    <td>19.05</td>
                                                    <td>317.5</td>
                                                    <td>174.5</td>
                                                </tr>
                                                <tr>
                                                    <td>16</td>
                                                    <td>400</td>
                                                    <td>406.4</td>
                                                    <td>21.44</td>
                                                    <td>363.5</td>
                                                    <td>224.5</td>
                                                </tr>
                                                <tr>
                                                    <td>18</td>
                                                    <td>450</td>
                                                    <td>457.2</td>
                                                    <td>23.83</td>
                                                    <td>409.5</td>
                                                    <td>280.6</td>
                                                </tr>
                                                <tr>
                                                    <td>20</td>
                                                    <td>500</td>
                                                    <td>508.0</td>
                                                    <td>26.23</td>
                                                    <td>455.5</td>
                                                    <td>342.6</td>
                                                </tr>
                                                <tr>
                                                    <td>22</td>
                                                    <td>550</td>
                                                    <td>558.8</td>
                                                    <td>28.58</td>
                                                    <td>501.6</td>
                                                    <td>408.7</td>
                                                </tr>
                                                <tr>
                                                    <td>24</td>
                                                    <td>600</td>
                                                    <td>609.6</td>
                                                    <td>30.96</td>
                                                    <td>547.7</td>
                                                    <td>479.7</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading160S">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse160S" aria-expanded="false"
                                    aria-controls="collapse160S">Schedule 160S & XXS – Size Chart</button>
                            </h2>
                            <div id="collapse160S" class="accordion-collapse collapse" aria-labelledby="heading160S"
                                data-bs-parent="#accordionSizeCharts">
                                <div class="accordion-body">
                                    <h5 class="text-center mb-3 mt-2">Schedule 160S (ASME B36.19)</h5>
                                    <div class="table-responsive mb-4">
                                        <table class="table table-bordered table-striped text-center align-middle mb-0">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>NPS</th>
                                                    <th>NB (mm)</th>
                                                    <th>OD (mm)</th>
                                                    <th>Wall Thickness (mm)</th>
                                                    <th>ID (mm)</th>
                                                    <th>Weight (kg/m)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1/8</td>
                                                    <td>3</td>
                                                    <td>10.3</td>
                                                    <td>2.41</td>
                                                    <td>5.48</td>
                                                    <td>0.53</td>
                                                </tr>
                                                <tr>
                                                    <td>1/4</td>
                                                    <td>6</td>
                                                    <td>13.7</td>
                                                    <td>3.02</td>
                                                    <td>7.66</td>
                                                    <td>0.89</td>
                                                </tr>
                                                <tr>
                                                    <td>3/8</td>
                                                    <td>10</td>
                                                    <td>17.1</td>
                                                    <td>3.20</td>
                                                    <td>10.70</td>
                                                    <td>1.13</td>
                                                </tr>
                                                <tr>
                                                    <td>1/2</td>
                                                    <td>15</td>
                                                    <td>21.3</td>
                                                    <td>4.78</td>
                                                    <td>11.74</td>
                                                    <td>1.80</td>
                                                </tr>
                                                <tr>
                                                    <td>3/4</td>
                                                    <td>20</td>
                                                    <td>26.7</td>
                                                    <td>5.56</td>
                                                    <td>15.58</td>
                                                    <td>3.06</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>25</td>
                                                    <td>33.4</td>
                                                    <td>6.35</td>
                                                    <td>20.70</td>
                                                    <td>4.70</td>
                                                </tr>
                                                <tr>
                                                    <td>1 1/4</td>
                                                    <td>32</td>
                                                    <td>42.2</td>
                                                    <td>6.35</td>
                                                    <td>29.50</td>
                                                    <td>6.40</td>
                                                </tr>
                                                <tr>
                                                    <td>1 1/2</td>
                                                    <td>40</td>
                                                    <td>48.3</td>
                                                    <td>7.14</td>
                                                    <td>34.02</td>
                                                    <td>8.40</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>50</td>
                                                    <td>60.3</td>
                                                    <td>8.74</td>
                                                    <td>42.82</td>
                                                    <td>12.80</td>
                                                </tr>
                                                <tr>
                                                    <td>2 1/2</td>
                                                    <td>65</td>
                                                    <td>73.0</td>
                                                    <td>9.53</td>
                                                    <td>53.94</td>
                                                    <td>17.40</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>80</td>
                                                    <td>88.9</td>
                                                    <td>11.13</td>
                                                    <td>66.64</td>
                                                    <td>25.00</td>
                                                </tr>
                                                <tr>
                                                    <td>3 1/2</td>
                                                    <td>90</td>
                                                    <td>101.6</td>
                                                    <td>12.70</td>
                                                    <td>76.20</td>
                                                    <td>32.60</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>100</td>
                                                    <td>114.3</td>
                                                    <td>13.49</td>
                                                    <td>87.32</td>
                                                    <td>40.30</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>125</td>
                                                    <td>141.3</td>
                                                    <td>15.88</td>
                                                    <td>109.54</td>
                                                    <td>60.20</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>150</td>
                                                    <td>168.3</td>
                                                    <td>18.26</td>
                                                    <td>131.78</td>
                                                    <td>84.90</td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>200</td>
                                                    <td>219.1</td>
                                                    <td>23.01</td>
                                                    <td>173.08</td>
                                                    <td>133.60</td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>250</td>
                                                    <td>273.1</td>
                                                    <td>28.58</td>
                                                    <td>215.94</td>
                                                    <td>198.20</td>
                                                </tr>
                                                <tr>
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

                                    <h5 class="text-center mb-3 border-top pt-4">Schedule XXS (ASME B36.10)</h5>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped text-center align-middle mb-0">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>NPS</th>
                                                    <th>NB (mm)</th>
                                                    <th>OD (mm)</th>
                                                    <th>Wall Thickness (mm)</th>
                                                    <th>ID (mm)</th>
                                                    <th>Weight (kg/m)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1/8</td>
                                                    <td>3</td>
                                                    <td>10.3</td>
                                                    <td>2.41</td>
                                                    <td>5.48</td>
                                                    <td>0.53</td>
                                                </tr>
                                                <tr>
                                                    <td>1/4</td>
                                                    <td>6</td>
                                                    <td>13.7</td>
                                                    <td>3.02</td>
                                                    <td>7.66</td>
                                                    <td>0.89</td>
                                                </tr>
                                                <tr>
                                                    <td>3/8</td>
                                                    <td>10</td>
                                                    <td>17.1</td>
                                                    <td>3.20</td>
                                                    <td>10.70</td>
                                                    <td>1.13</td>
                                                </tr>
                                                <tr>
                                                    <td>1/2</td>
                                                    <td>15</td>
                                                    <td>21.3</td>
                                                    <td>4.78</td>
                                                    <td>11.74</td>
                                                    <td>1.80</td>
                                                </tr>
                                                <tr>
                                                    <td>3/4</td>
                                                    <td>20</td>
                                                    <td>26.7</td>
                                                    <td>7.47</td>
                                                    <td>11.76</td>
                                                    <td>3.76</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>25</td>
                                                    <td>33.4</td>
                                                    <td>9.09</td>
                                                    <td>15.22</td>
                                                    <td>5.95</td>
                                                </tr>
                                                <tr>
                                                    <td>1 1/4</td>
                                                    <td>32</td>
                                                    <td>42.2</td>
                                                    <td>9.70</td>
                                                    <td>22.80</td>
                                                    <td>8.88</td>
                                                </tr>
                                                <tr>
                                                    <td>1 1/2</td>
                                                    <td>40</td>
                                                    <td>48.3</td>
                                                    <td>10.16</td>
                                                    <td>28.00</td>
                                                    <td>11.17</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>50</td>
                                                    <td>60.3</td>
                                                    <td>11.07</td>
                                                    <td>38.16</td>
                                                    <td>15.76</td>
                                                </tr>
                                                <tr>
                                                    <td>2 1/2</td>
                                                    <td>65</td>
                                                    <td>73.0</td>
                                                    <td>15.88</td>
                                                    <td>41.24</td>
                                                    <td>25.70</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>80</td>
                                                    <td>88.9</td>
                                                    <td>17.48</td>
                                                    <td>53.94</td>
                                                    <td>35.30</td>
                                                </tr>
                                                <tr>
                                                    <td>3 1/2</td>
                                                    <td>90</td>
                                                    <td>101.6</td>
                                                    <td>19.05</td>
                                                    <td>63.50</td>
                                                    <td>46.10</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>100</td>
                                                    <td>114.3</td>
                                                    <td>21.44</td>
                                                    <td>71.42</td>
                                                    <td>59.30</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>125</td>
                                                    <td>141.3</td>
                                                    <td>25.40</td>
                                                    <td>90.50</td>
                                                    <td>89.00</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>150</td>
                                                    <td>168.3</td>
                                                    <td>28.58</td>
                                                    <td>111.14</td>
                                                    <td>123.00</td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>200</td>
                                                    <td>219.1</td>
                                                    <td>33.32</td>
                                                    <td>152.46</td>
                                                    <td>185.30</td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>250</td>
                                                    <td>273.1</td>
                                                    <td>38.89</td>
                                                    <td>195.32</td>
                                                    <td>274.00</td>
                                                </tr>
                                                <tr>
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

                    </div>
                </div>
            </div>
            <!-- End Accordion -->
        </div>
    </section>

    <!-- 6. Grades Available -->
    <section id="grades" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-5">
                <h2>Grades Available</h2>
            </div>
            <p class="fs-6 text-center mb-4">We supply seamless pipes in the following grades and specifications:</p>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Stainless Steel</h5>
                        <ul class="list-unstyled text-start mb-0 ps-3">
                            <li>• 304, 316, 321, 347</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-layers"></i></div>
                        <h5>Carbon & Alloy Steel</h5>
                        <ul class="list-unstyled text-start mb-0 ps-3">
                            <li>• ASTM A106, A105, P11, P22</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-box"></i></div>
                        <h5>Duplex & Super Duplex</h5>
                        <ul class="list-unstyled text-start mb-0 ps-3">
                            <li>• 2205, S31803, S32750</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-nut"></i></div>
                        <h5>Nickel Alloys</h5>
                        <ul class="list-unstyled text-start mb-0 ps-3">
                            <li>• Inconel, Monel, Incoloy</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-heptagon-fill"></i></div>
                        <h5>Others</h5>
                        <ul class="list-unstyled text-start mb-0 ps-3">
                            <li>• Titanium, Zirconium & Tantalum</li>
                            <li>• For high-performance applications</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. Applications -->
    <section id="applications" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2>Applications</h2>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Oil & Gas</h5>
                        <ul class="list-unstyled text-start mb-0 ps-3">
                            <li>• High-pressure pipelines</li>
                            <li>• Offshore platforms</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge"></i></div>
                        <h5>Power Plants</h5>
                        <ul class="list-unstyled text-start mb-0 ps-3">
                            <li>• Boiler tubes</li>
                            <li>• Steam lines</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-shield-shaded"></i></div>
                        <h5>Chemical Industry</h5>
                        <ul class="list-unstyled text-start mb-0 ps-3">
                            <li>• Corrosive fluid transport</li>
                            <li>• Reactors & pressure vessels</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cone-striped"></i></div>
                        <h5>Construction</h5>
                        <ul class="list-unstyled text-start mb-0 ps-3">
                            <li>• Structural applications</li>
                            <li>• Bridges & infrastructure</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-car-front"></i></div>
                        <h5>Automotive & Aerospace</h5>
                        <ul class="list-unstyled text-start mb-0 ps-3">
                            <li>• Hydraulic systems</li>
                            <li>• Fuel lines</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. Industries Served -->
    <section id="industries" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2>Industries Served</h2>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <div class="d-flex flex-wrap justify-content-center gap-3">
                        <span class="badge bg-primary fs-6 py-2 px-4 shadow-sm border border-secondary"
                            style="background-color: #174268 !important;">• Oil & Gas</span>
                        <span class="badge bg-primary fs-6 py-2 px-4 shadow-sm border border-secondary"
                            style="background-color: #174268 !important;">• Power Generation</span>
                        <span class="badge bg-primary fs-6 py-2 px-4 shadow-sm border border-secondary"
                            style="background-color: #174268 !important;">• Petrochemical</span>
                        <span class="badge bg-primary fs-6 py-2 px-4 shadow-sm border border-secondary"
                            style="background-color: #174268 !important;">• Marine & Offshore</span>
                        <span class="badge bg-primary fs-6 py-2 px-4 shadow-sm border border-secondary"
                            style="background-color: #174268 !important;">• Construction & Infrastructure</span>
                        <span class="badge bg-primary fs-6 py-2 px-4 shadow-sm border border-secondary"
                            style="background-color: #174268 !important;">• Aerospace & Defense</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. Manufacturing Process -->
    <section id="manufacturing" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container text-center">
            <div class="section-title center mb-4">
                <h2>Manufacturing Process</h2>
            </div>
            <p class="fs-6 text-center text-success fw-bold mb-4">Ensures uniform structure and superior strength.</p>
            <div class="row g-4 mt-3">
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-1-circle-fill"></i></div>
                        <h5>Billet heating</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-2-circle-fill"></i></div>
                        <h5>Piercing & extrusion</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-3-circle-fill"></i></div>
                        <h5>Hot rolling / cold drawing</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-4-circle-fill"></i></div>
                        <h5>Heat treatment</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-5-circle-fill"></i></div>
                        <h5>Sizing & finishing</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-6-circle-fill"></i></div>
                        <h5>Inspection & testing</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 10. Supply & Export Capability -->
    <section id="export" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2>Supply & Export Capability</h2>
            </div>
            <p class="fs-6 text-center text-muted mb-4">
                We are a trusted global supplier and exporter of seamless pipes, delivering to EPC contractors, oil & gas
                projects, and international buyers.
            </p>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="p-4 bg-white rounded shadow-sm border border-light h-100">
                        <h4 class="fw-bold text-primary mb-3"><i class="bi bi-globe me-2"></i>Export Countries</h4>
                        <ul class="fs-6 list-unstyled text-muted">
                            <li class="mb-2"><i class="bi bi-check me-2 text-success"></i> UAE</li>
                            <li class="mb-2"><i class="bi bi-check me-2 text-success"></i> Saudi Arabia</li>
                            <li class="mb-2"><i class="bi bi-check me-2 text-success"></i> Qatar</li>
                            <li class="mb-2"><i class="bi bi-check me-2 text-success"></i> Oman</li>
                            <li class="mb-2"><i class="bi bi-check me-2 text-success"></i> Kuwait</li>
                            <li class="mb-2"><i class="bi bi-check me-2 text-success"></i> Europe & Southeast Asia</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="p-4 bg-white rounded shadow-sm border border-light h-100">
                        <h4 class="fw-bold text-primary mb-3"><i class="bi bi-box-seam me-2"></i>Export Services</h4>
                        <ul class="fs-6 list-unstyled text-muted">
                            <li class="mb-2"><i class="bi bi-check me-2 text-success"></i> Export-grade packaging</li>
                            <li class="mb-2"><i class="bi bi-check me-2 text-success"></i> EN 10204 3.1 certification</li>
                            <li class="mb-2"><i class="bi bi-check me-2 text-success"></i> Complete documentation</li>
                            <li class="mb-2"><i class="bi bi-check me-2 text-success"></i> Fast shipping & logistics support
                            </li>
                            <li class="mb-2"><i class="bi bi-check me-2 text-success"></i> Bulk project supply capability
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Advantages & Quality Control -->
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="section-title mb-4">
                        <h2>Advantages</h2>
                    </div>
                    <ul class="fs-6 list-unstyled">
                        <li class="mb-3 p-3 bg-white border rounded shadow-sm"><i
                                class="bi bi-check-circle-fill text-primary me-2"></i> Superior strength without weld joints
                        </li>
                        <li class="mb-3 p-3 bg-white border rounded shadow-sm"><i
                                class="bi bi-check-circle-fill text-primary me-2"></i> Reliable performance in extreme
                            conditions</li>
                        <li class="mb-3 p-3 bg-white border rounded shadow-sm"><i
                                class="bi bi-check-circle-fill text-primary me-2"></i> Longer service life</li>
                        <li class="mb-3 p-3 bg-white border rounded shadow-sm"><i
                                class="bi bi-check-circle-fill text-primary me-2"></i> High resistance to corrosion &
                            pressure</li>
                        <li class="mb-3 p-3 bg-white border rounded shadow-sm"><i
                                class="bi bi-check-circle-fill text-primary me-2"></i> Suitable for critical industrial
                            applications</li>
                    </ul>
                </div>

                <div id="quality" class="col-lg-6">
                    <div class="p-4 bg-white rounded shadow-sm border-start border-4 border-primary h-100">
                        <h3 class="fw-bold mb-4" style="color: #174268;">Testing & Quality Control</h3>
                        <ul class="fs-6 list-unstyled text-muted">
                            <li class="mb-2"><i class="bi bi-tools text-primary me-2"></i> • Hydrostatic testing</li>
                            <li class="mb-2"><i class="bi bi-tools text-primary me-2"></i> • Ultrasonic testing (UT)</li>
                            <li class="mb-2"><i class="bi bi-tools text-primary me-2"></i> • Eddy current testing</li>
                            <li class="mb-2"><i class="bi bi-tools text-primary me-2"></i> • PMI testing</li>
                            <li class="mb-2"><i class="bi bi-tools text-primary me-2"></i> • Mechanical testing</li>
                        </ul>
                        <p class="fs-6 mt-4 fw-bold text-success"><i class="bi bi-patch-check-fill me-2"></i> EN 10204 3.1
                            certification provided.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Buying Guide Section -->
    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="row g-5 justify-content-center">
                <div class="col-md-8">
                    <div class="p-4 bg-light rounded shadow-sm border-start border-4 border-warning h-100">
                        <h3 class="fw-bold mb-4" style="color: #174268;">Buying Guide</h3>
                        <p class="fs-6 text-muted">Before selecting seamless pipes:</p>
                        <ul class="fs-6 list-unstyled font-weight-bold">
                            <li class="mb-2"><i class="bi bi-arrow-right text-warning me-2"></i> Choose correct material
                                grade</li>
                            <li class="mb-2"><i class="bi bi-arrow-right text-warning me-2"></i> Check pressure &
                                temperature requirements</li>
                            <li class="mb-2"><i class="bi bi-arrow-right text-warning me-2"></i> Select proper schedule
                                (thickness)</li>
                            <li class="mb-2"><i class="bi bi-arrow-right text-warning me-2"></i> Ensure certifications (ASTM
                                / EN)</li>
                            <li class="mb-2"><i class="bi bi-arrow-right text-warning me-2"></i> Consider application (oil &
                                gas / power / chemical)</li>
                        </ul>
                        <p class="fs-6 mt-4 fw-bold p-2 bg-white rounded border">Our team helps you select the right pipe
                            for your project.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Moksh Tubes -->
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container text-center">
            <div class="section-title center">
                <h2>Why Choose Moksh Tubes & Fittings LLP</h2>
            </div>
            <div class="row g-4 mt-3">
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-box-seam-fill"></i></div>
                        <h5>200+ tons ready stock</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe"></i></div>
                        <h5>Global export expertise</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-gem"></i></div>
                        <h5>Wide alloy range (rare materials available)</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-currency-dollar"></i></div>
                        <h5>Competitive pricing</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Fast delivery timelines</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-headset"></i></div>
                        <h5>Technical support for EPC projects</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Products / Internal Linking -->
    <section class="sec-padd-top sec-padd-bottom">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="p-4 bg-light rounded shadow-sm border border-secondary">
                        <h4 class="fw-bold mb-4" style="color: #db7227;">Explore Related Products</h4>
                        <p class="fs-6 mb-3 text-muted">We also supply <a href="{{ route('products.pipes-tubes.u-bent-tubes', ['country' => $country ?? 'india']) }}" class="text-primary fw-bold text-decoration-none">U-bent tubes</a> for heat exchanger applications in UAE and Saudi Arabia.</p>
                        <p class="fs-6 mb-3 text-muted">Explore our <a href="{{ route('products.pipes-tubes.boiler-heat-exchanger-tubes', ['country' => $country ?? 'india']) }}" class="text-primary fw-bold text-decoration-none">heat exchanger tubes</a> for GCC industrial projects.</p>
                        <p class="fs-6 mb-0 text-muted">Check our <a href="{{ route('products.pipes-tubes.welded-pipes', ['country' => $country ?? 'india']) }}" class="text-primary fw-bold text-decoration-none">welded pipes</a> for cost-effective piping solutions.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="accordion-box">
                        <div class="section-title center">
                            <h2>FAQ</h2>
                        </div>
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Do you supply seamless pipes to UAE and Saudi Arabia?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Yes, we export seamless pipes to UAE, Saudi Arabia, Qatar, Oman, and Kuwait.</p>
                            </div>
                        </div>
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Can you deliver pipes to Dubai or Riyadh?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Yes, we provide fast delivery to Dubai, Abu Dhabi, Riyadh, Jeddah, and Doha.</p>
                            </div>
                        </div>
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are seamless pipes used for?</h4>
                            </div>
                            <div class="accord-content">
                                <p>They are used in oil & gas, power plants, and industrial applications.</p>
                            </div>
                        </div>
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Do you provide ASTM certified pipes?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Yes, we supply ASTM and EN certified seamless pipes.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Strong CTA -->
    <section id="contact-us" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Contact Us</h2>
                <p>
                    Looking for a reliable seamless pipe supplier & exporter? For custom solutions, export to GCC & global
                    markets, and fast delivery, contact <strong>Moksh Tubes & Fittings LLP</strong>. Get the best price and
                    technical support today.
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
                    "@type": "Product",
                    "name": "Seamless Pipes",
                    "description": "Seamless pipes supplier and exporter to UAE, Saudi Arabia, Qatar and Oman",
                    "brand": {
                        "@type": "Brand",
                        "name": "Moksh Tubes & Fittings LLP"
                    },
                    "areaServed": ["UAE","Saudi Arabia","Qatar","Oman","Kuwait"]
                }
            @endverbatim
        </script>
        
        <script type="application/ld+json">
            @verbatim
                {
                    "@context": "https://schema.org",
                    "@type": "FAQPage",
                    "mainEntity": [
                        {
                            "@type": "Question",
                            "name": "Do you supply seamless pipes to UAE and Saudi Arabia?",
                            "acceptedAnswer": {
                                "@type": "Answer",
                                "text": "Yes, we export seamless pipes to UAE, Saudi Arabia, Qatar, Oman, and Kuwait."
                            }
                        },
                        {
                            "@type": "Question",
                            "name": "Can you deliver pipes to Dubai or Riyadh?",
                            "acceptedAnswer": {
                                "@type": "Answer",
                                "text": "Yes, we provide fast delivery to Dubai, Abu Dhabi, Riyadh, Jeddah, and Doha."
                            }
                        },
                        {
                            "@type": "Question",
                            "name": "What are seamless pipes used for?",
                            "acceptedAnswer": {
                                "@type": "Answer",
                                "text": "They are used in oil & gas, power plants, and industrial applications."
                            }
                        },
                        {
                            "@type": "Question",
                            "name": "Do you provide ASTM certified pipes?",
                            "acceptedAnswer": {
                                "@type": "Answer",
                                "text": "Yes, we supply ASTM and EN certified seamless pipes."
                            }
                        }
                    ]
                }
            @endverbatim
        </script>
@endsection