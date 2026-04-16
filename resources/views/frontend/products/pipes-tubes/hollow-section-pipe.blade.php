@extends('layouts.master')

@section('title', 'Hollow Section Pipes Supplier UAE, Saudi | SHS RHS Exporter')
@section('meta_description', 'Hollow section pipes exporter to UAE, Saudi Arabia, Qatar & Oman. SHS, RHS, oval pipes in steel & aluminium. Structural tubes with fast delivery from India.')
@section('meta_keywords', 'Hollow section pipes, SHS pipes, RHS pipes, square hollow section, rectangular hollow section, oval hollow section, hollow section exporter, structural steel tubes')
@section('og_image', asset('assets/images/product/hollow-section-pipe.webp'))
@section('og_type', 'article')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/product/hollow-section-pipe.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Hollow Section Pipes Supplier for UAE, Saudi Arabia & GCC Countries</h1>
                    <!-- Short Introduction -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Hollow Section Pipes are widely used in construction, fabrication, and structural applications due
                        to their high strength-to-weight ratio and design flexibility. As a leading hollow section pipes
                        supplier for UAE, Saudi Arabia, Qatar, and Oman, Moksh Tubes & Fittings LLP exports high-quality
                        SHS, RHS, and oval pipes in stainless steel, carbon steel, duplex, aluminium, and specialty alloys.
                        <br>
                        &bull; Structural strength with reduced weight &bull; Multiple shapes for design flexibility
                        &bull; Suitable for construction, automotive & fabrication
                        &bull; Available in custom sizes, finishes, and international standards (ASTM, EN, DIN, IS).
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sticky Navigation -->
    <div class="sticky-top bg-white border-bottom shadow-sm">
        <div class="container text-center">
            <ul class="nav justify-content-center py-2 nav-pills custom-nav-scroll">
                <li class="nav-item"><a class="nav-link fw-bold text-dark" href="#overview">Overview</a></li>
                <li class="nav-item"><a class="nav-link fw-bold text-dark" href="#specifications">Specifications</a></li>
                <li class="nav-item"><a class="nav-link fw-bold text-dark" href="#types">Types</a></li>
                <li class="nav-item"><a class="nav-link fw-bold text-dark" href="#size-chart">Size Chart</a></li>
                <li class="nav-item"><a class="nav-link fw-bold text-dark" href="#grades">Grades</a></li>
                <li class="nav-item"><a class="nav-link fw-bold text-dark" href="#applications">Applications</a></li>
                <li class="nav-item"><a class="nav-link fw-bold text-dark" href="#industries">Industries</a></li>
                <li class="nav-item"><a class="nav-link fw-bold text-dark" href="#manufacturing">Manufacturing</a></li>
                <li class="nav-item"><a class="nav-link fw-bold text-dark" href="#export">Export</a></li>
                <li class="nav-item"><a class="nav-link fw-bold text-dark" href="#quality">Quality</a></li>
                <li class="nav-item"><a class="nav-link fw-bold text-dark" href="#faq">FAQ</a></li>
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
                Introduction to Hollow Section Pipes
            </h2>

            <div class="row align-items-center">
                <!-- Left Content -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/product/hollow-section-pipe.webp') }}" alt="Hollow Section Pipes"
                        class="img-fluid rounded shadow-sm w-100" style="object-fit: cover;">
                </div>

                <!-- Right Content -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-3 text-justify" style="text-align: justify;">
                            In today's construction and industrial landscape, <strong class="text-black">hollow section pipes</strong>
                            have become the preferred choice due to their efficient load distribution, modern appearance,
                            and versatility. Unlike conventional round pipes, hollow sections offer better structural
                            stability, improved resistance to bending and torsion, and enhanced design flexibility for
                            architects and engineers.
                        </p>

                        <ul class="fs-6 mb-4 list-unstyled">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> Uniform wall thickness
                                across the full length</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> Superior surface finish
                                for aesthetic and structural use</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> High durability for
                                long-term performance</li>
                        </ul>

                        <p class="fs-6 mb-3 text-justify" style="text-align: justify;">
                            At <strong class="text-black">Moksh Tubes & Fittings LLP</strong>, we manufacture hollow
                            section pipes using advanced ERW, EFW, and seamless processes. Wide range of alloys available
                            including
                            <a class="text-primary text-decoration-none fw-semibold" href="{{ route('materials.austenitic-stainless-Steel', ['country' => $country ?? 'india']) }}">stainless steel</a>,
                            <a class="text-primary text-decoration-none fw-semibold" href="{{ route('materials.engineering-Steels', ['country' => $country ?? 'india']) }}">carbon steel</a>,
                            <a class="text-primary text-decoration-none fw-semibold" href="{{ route('materials.duplex-and-super-duplex', ['country' => $country ?? 'india']) }}">duplex steel</a>, and
                            aluminium alloys.
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
                    <div class="p-4 bg-white border rounded text-center h-100 shadow-sm custom-hover-card">
                        <i class="bi bi-shield-shaded fs-1 text-primary mb-3"></i>
                        <h4 class="fw-bold mb-3">High Strength-to-Weight Ratio</h4>
                        <p class="text-muted">Maximum structural performance with minimal material weight.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="p-4 bg-white border rounded text-center h-100 shadow-sm custom-hover-card">
                        <i class="bi bi-distribute-vertical fs-1 text-success mb-3"></i>
                        <h4 class="fw-bold mb-3">Uniform Load Distribution</h4>
                        <p class="text-muted">Consistent cross-section ensures even load distribution in structures.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="p-4 bg-white border rounded text-center h-100 shadow-sm custom-hover-card">
                        <i class="bi bi-tools fs-1 text-info mb-3"></i>
                        <h4 class="fw-bold mb-3">Excellent Weldability</h4>
                        <p class="text-muted">Easy to weld, cut, drill, and fabricate for all project types.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="p-4 bg-white border rounded text-center h-100 shadow-sm custom-hover-card">
                        <i class="bi bi-droplet-half fs-1 text-warning mb-3"></i>
                        <h4 class="fw-bold mb-3">Corrosion Resistant Options</h4>
                        <p class="text-muted">Available in stainless steel and duplex grades for harsh environments.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="p-4 bg-white border rounded text-center h-100 shadow-sm custom-hover-card">
                        <i class="bi bi-grid-3x3-gap-fill fs-1 text-secondary mb-3"></i>
                        <h4 class="fw-bold mb-3">Wide Range of Shapes & Sizes</h4>
                        <p class="text-muted">Square, rectangular, and oval profiles in custom dimensions.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="p-4 bg-white border rounded text-center h-100 shadow-sm custom-hover-card">
                        <i class="bi bi-star-half fs-1 text-danger mb-3"></i>
                        <h4 class="fw-bold mb-3">Structural & Decorative Use</h4>
                        <p class="text-muted">Suitable for both load-bearing structures and architectural finishes.</p>
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
                                    <td>
                                        <a class="text-primary text-decoration-none" href="{{ route('materials.austenitic-stainless-Steel', ['country' => $country ?? 'india']) }}">Stainless Steel</a>,
                                        <a class="text-primary text-decoration-none" href="{{ route('materials.engineering-Steels', ['country' => $country ?? 'india']) }}">Carbon Steel</a>,
                                        <a class="text-primary text-decoration-none" href="{{ route('materials.duplex-and-super-duplex', ['country' => $country ?? 'india']) }}">Duplex</a>,
                                        Aluminium, Copper Alloys
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Shapes</td>
                                    <td>Square (SHS), Rectangular (RHS), Oval</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Size Range</td>
                                    <td>10×10 mm to 500×300 mm</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Thickness</td>
                                    <td>0.5 mm to 12 mm</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Length</td>
                                    <td>Up to 12 meters / Custom lengths available</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Finish</td>
                                    <td>Hot Rolled, Polished, Powder Coated, Galvanized</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Manufacturing</td>
                                    <td>ERW, EFW, Seamless</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Standards</td>
                                    <td>ASTM A500, EN 10210, EN 10219, IS 4923, DIN 2395</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Types of Hollow Section Pipes -->
    <section id="types" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2>Types of Hollow Section Pipes</h2>
            </div>

            <div class="row g-4 justify-content-center pt-2">
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm border-0 border-start border-4 border-primary">
                        <div class="card-body">
                            <h4 class="card-title fw-bold text-primary"><i class="bi bi-square me-2"></i>Square Hollow Sections (SHS)</h4>
                            <p class="card-text fs-6 mt-3">Used for columns, frames, and load-bearing structures where equal strength in all directions is required.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm border-0 border-start border-4 border-success">
                        <div class="card-body">
                            <h4 class="card-title fw-bold text-success"><i class="bi bi-app me-2"></i>Rectangular Hollow Sections (RHS)</h4>
                            <p class="card-text fs-6 mt-3">Ideal for beams, bridges, and heavy structural applications where directional strength is needed.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm border-0 border-start border-4 border-warning">
                        <div class="card-body">
                            <h4 class="card-title fw-bold text-warning"><i class="bi bi-egg me-2"></i>Oval Hollow Sections</h4>
                            <p class="card-text fs-6 mt-3">Preferred for architectural, decorative, and furniture designs where aesthetics and elegance are priorities.</p>
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
                <h4 class="fw-bold" style="color: #db7227;">Hollow Section Pipes – Weight Charts (kg/m)</h4>
            </div>
            <p class="text-center text-muted mb-4">Weight charts for square, rectangular, and oval hollow sections across standard wall thicknesses.</p>

            <!-- Accordion Charts -->
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="accordion" id="accordionSizeCharts">

                        <!-- Square Sections -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSquare">
                                <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSquare" aria-expanded="true" aria-controls="collapseSquare">
                                    <i class="bi bi-square me-2 text-primary"></i> Square Hollow Sections (SHS) – Weight Chart
                                </button>
                            </h2>
                            <div id="collapseSquare" class="accordion-collapse collapse show" aria-labelledby="headingSquare"
                                data-bs-parent="#accordionSizeCharts">
                                <div class="accordion-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped text-center align-middle mb-0">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>Size (mm)</th>
                                                    <th>OD Width (mm)</th>
                                                    <th>1.0 mm Wt (kg/m)</th>
                                                    <th>2.0 mm Wt (kg/m)</th>
                                                    <th>3.0 mm Wt (kg/m)</th>
                                                    <th>4.0 mm Wt (kg/m)</th>
                                                    <th>5.0 mm Wt (kg/m)</th>
                                                    <th>6.0 mm Wt (kg/m)</th>
                                                    <th>8.0 mm Wt (kg/m)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr><td>20×20</td><td>20</td><td>0.59</td><td>1.10</td><td>1.60</td><td>2.10</td><td>2.60</td><td>3.10</td><td>4.10</td></tr>
                                                <tr><td>25×25</td><td>25</td><td>0.74</td><td>1.38</td><td>2.02</td><td>2.67</td><td>3.32</td><td>3.96</td><td>5.24</td></tr>
                                                <tr><td>30×30</td><td>30</td><td>0.89</td><td>1.66</td><td>2.42</td><td>3.18</td><td>3.94</td><td>4.70</td><td>6.23</td></tr>
                                                <tr><td>40×40</td><td>40</td><td>1.18</td><td>2.22</td><td>3.26</td><td>4.31</td><td>5.36</td><td>6.39</td><td>8.46</td></tr>
                                                <tr><td>50×50</td><td>50</td><td>1.48</td><td>2.83</td><td>4.18</td><td>5.53</td><td>6.88</td><td>8.21</td><td>10.88</td></tr>
                                                <tr><td>60×60</td><td>60</td><td>1.77</td><td>3.38</td><td>4.98</td><td>6.59</td><td>8.19</td><td>9.78</td><td>13.00</td></tr>
                                                <tr><td>70×70</td><td>70</td><td>2.06</td><td>3.94</td><td>5.78</td><td>7.65</td><td>9.42</td><td>11.18</td><td>15.12</td></tr>
                                                <tr><td>80×80</td><td>80</td><td>2.36</td><td>4.51</td><td>6.60</td><td>8.72</td><td>10.75</td><td>12.78</td><td>17.26</td></tr>
                                                <tr><td>100×100</td><td>100</td><td>2.97</td><td>5.70</td><td>8.43</td><td>11.17</td><td>13.90</td><td>16.61</td><td>22.05</td></tr>
                                                <tr><td>120×120</td><td>120</td><td>3.56</td><td>6.86</td><td>10.15</td><td>13.43</td><td>16.72</td><td>20.00</td><td>26.56</td></tr>
                                                <tr><td>150×150</td><td>150</td><td>4.45</td><td>8.60</td><td>12.74</td><td>16.88</td><td>21.02</td><td>25.16</td><td>33.44</td></tr>
                                                <tr><td>200×200</td><td>200</td><td>5.94</td><td>11.50</td><td>17.04</td><td>22.59</td><td>28.13</td><td>33.67</td><td>44.74</td></tr>
                                                <tr><td>250×250</td><td>250</td><td>7.43</td><td>14.40</td><td>21.33</td><td>28.30</td><td>35.23</td><td>42.16</td><td>56.05</td></tr>
                                                <tr><td>300×300</td><td>300</td><td>8.92</td><td>17.30</td><td>25.63</td><td>34.01</td><td>42.33</td><td>50.67</td><td>67.36</td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Rectangular Sections -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingRect">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseRect" aria-expanded="false" aria-controls="collapseRect">
                                    <i class="bi bi-app me-2 text-success"></i> Rectangular Hollow Sections (RHS) – Weight Chart
                                </button>
                            </h2>
                            <div id="collapseRect" class="accordion-collapse collapse" aria-labelledby="headingRect"
                                data-bs-parent="#accordionSizeCharts">
                                <div class="accordion-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped text-center align-middle mb-0">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>Size (mm)</th>
                                                    <th>Width × Height (mm)</th>
                                                    <th>1.0 mm Wt (kg/m)</th>
                                                    <th>2.0 mm Wt (kg/m)</th>
                                                    <th>3.0 mm Wt (kg/m)</th>
                                                    <th>4.0 mm Wt (kg/m)</th>
                                                    <th>5.0 mm Wt (kg/m)</th>
                                                    <th>6.0 mm Wt (kg/m)</th>
                                                    <th>8.0 mm Wt (kg/m)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr><td>40×20</td><td>20×40</td><td>1.02</td><td>1.93</td><td>2.83</td><td>3.74</td><td>4.63</td><td>5.52</td><td>7.31</td></tr>
                                                <tr><td>50×25</td><td>25×50</td><td>1.27</td><td>2.41</td><td>3.54</td><td>4.67</td><td>5.79</td><td>6.90</td><td>9.14</td></tr>
                                                <tr><td>60×40</td><td>40×60</td><td>1.77</td><td>3.38</td><td>4.98</td><td>6.59</td><td>8.19</td><td>9.78</td><td>13.00</td></tr>
                                                <tr><td>80×40</td><td>40×80</td><td>2.12</td><td>4.04</td><td>5.96</td><td>7.88</td><td>9.80</td><td>11.72</td><td>15.55</td></tr>
                                                <tr><td>100×50</td><td>50×100</td><td>2.70</td><td>5.15</td><td>7.60</td><td>10.05</td><td>12.49</td><td>14.92</td><td>19.78</td></tr>
                                                <tr><td>120×60</td><td>60×120</td><td>3.28</td><td>6.26</td><td>9.23</td><td>12.20</td><td>15.16</td><td>18.12</td><td>24.01</td></tr>
                                                <tr><td>150×100</td><td>100×150</td><td>4.45</td><td>8.60</td><td>12.74</td><td>16.88</td><td>21.02</td><td>25.16</td><td>33.44</td></tr>
                                                <tr><td>200×100</td><td>100×200</td><td>5.70</td><td>11.10</td><td>16.41</td><td>21.71</td><td>27.02</td><td>32.31</td><td>43.00</td></tr>
                                                <tr><td>250×150</td><td>150×250</td><td>7.43</td><td>14.40</td><td>21.33</td><td>28.30</td><td>35.23</td><td>42.16</td><td>56.05</td></tr>
                                                <tr><td>300×150</td><td>150×300</td><td>8.45</td><td>16.38</td><td>24.30</td><td>32.22</td><td>40.14</td><td>48.06</td><td>63.90</td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Oval Sections -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOval">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOval" aria-expanded="false" aria-controls="collapseOval">
                                    <i class="bi bi-egg me-2 text-warning"></i> Oval Hollow Sections – Weight Chart
                                </button>
                            </h2>
                            <div id="collapseOval" class="accordion-collapse collapse" aria-labelledby="headingOval"
                                data-bs-parent="#accordionSizeCharts">
                                <div class="accordion-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped text-center align-middle mb-0">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>Size (mm)</th>
                                                    <th>Major × Minor Dia (mm)</th>
                                                    <th>1.0 mm Wt (kg/m)</th>
                                                    <th>2.0 mm Wt (kg/m)</th>
                                                    <th>3.0 mm Wt (kg/m)</th>
                                                    <th>4.0 mm Wt (kg/m)</th>
                                                    <th>5.0 mm Wt (kg/m)</th>
                                                    <th>6.0 mm Wt (kg/m)</th>
                                                    <th>8.0 mm Wt (kg/m)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr><td>25×13</td><td>25×13</td><td>0.45</td><td>0.87</td><td>1.29</td><td>1.71</td><td>2.13</td><td>2.54</td><td>3.37</td></tr>
                                                <tr><td>38×25</td><td>38×25</td><td>0.80</td><td>1.54</td><td>2.28</td><td>3.02</td><td>3.76</td><td>4.50</td><td>5.96</td></tr>
                                                <tr><td>50×30</td><td>50×30</td><td>1.02</td><td>1.96</td><td>2.90</td><td>3.83</td><td>4.76</td><td>5.68</td><td>7.52</td></tr>
                                                <tr><td>63×38</td><td>63×38</td><td>1.30</td><td>2.51</td><td>3.72</td><td>4.93</td><td>6.14</td><td>7.35</td><td>9.78</td></tr>
                                                <tr><td>76×38</td><td>76×38</td><td>1.52</td><td>2.94</td><td>4.36</td><td>5.78</td><td>7.20</td><td>8.62</td><td>11.48</td></tr>
                                                <tr><td>100×50</td><td>100×50</td><td>2.00</td><td>3.85</td><td>5.70</td><td>7.56</td><td>9.41</td><td>11.26</td><td>15.00</td></tr>
                                                <tr><td>120×60</td><td>120×60</td><td>2.45</td><td>4.72</td><td>6.98</td><td>9.25</td><td>11.51</td><td>13.77</td><td>18.34</td></tr>
                                                <tr><td>150×75</td><td>150×75</td><td>3.15</td><td>6.06</td><td>8.96</td><td>11.85</td><td>14.75</td><td>17.64</td><td>23.42</td></tr>
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

    <!-- Grades Available -->
    <section id="grades" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-5">
                <h2>Grades Available</h2>
            </div>
            <p class="fs-6 text-center mb-4">We offer hollow section pipes in multiple material grades:</p>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Stainless Steel</h5>
                        <ul class="list-unstyled text-start mb-0 ps-3">
                            <li>• 304, 316, 316L</li>
                            <li>• Architectural & corrosion-resistant use</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-layers"></i></div>
                        <h5>Carbon & Mild Steel</h5>
                        <ul class="list-unstyled text-start mb-0 ps-3">
                            <li>• IS 2062, ASTM A36, ASTM A500</li>
                            <li>• Structural applications</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-box"></i></div>
                        <h5>Duplex & Super Duplex</h5>
                        <ul class="list-unstyled text-start mb-0 ps-3">
                            <li>• 2205, S32750</li>
                            <li>• Marine & heavy industry</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge"></i></div>
                        <h5>Aluminium Alloys</h5>
                        <ul class="list-unstyled text-start mb-0 ps-3">
                            <li>• 6061, 6063, 6082</li>
                            <li>• Lightweight structures</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gem"></i></div>
                        <h5>Copper Alloys</h5>
                        <ul class="list-unstyled text-start mb-0 ps-3">
                            <li>• Cu-Ni, Brass, Naval Brass</li>
                            <li>• Decorative & marine use</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Applications -->
    <section id="applications" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2>Applications</h2>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-building-fill"></i></div>
                        <h5>Construction & Infrastructure</h5>
                        <ul class="list-unstyled text-start mb-0 ps-3">
                            <li>• Structural frameworks & columns</li>
                            <li>• Beams, trusses & bridges</li>
                            <li>• Industrial buildings</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-house-heart-fill"></i></div>
                        <h5>Furniture & Architecture</h5>
                        <ul class="list-unstyled text-start mb-0 ps-3">
                            <li>• Designer furniture</li>
                            <li>• Railings, gates, partitions</li>
                            <li>• Interior & exterior structures</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-truck-front-fill"></i></div>
                        <h5>Automotive & Transport</h5>
                        <ul class="list-unstyled text-start mb-0 ps-3">
                            <li>• Vehicle chassis & frames</li>
                            <li>• Bus body structures</li>
                            <li>• Railway frameworks</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Industrial Fabrication</h5>
                        <ul class="list-unstyled text-start mb-0 ps-3">
                            <li>• Equipment frames & supports</li>
                            <li>• Conveyor systems</li>
                            <li>• Storage racks</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-water"></i></div>
                        <h5>Agriculture & Marine</h5>
                        <ul class="list-unstyled text-start mb-0 ps-3">
                            <li>• Greenhouse structures</li>
                            <li>• Irrigation systems</li>
                            <li>• Offshore platforms</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Industries Served -->
    <section id="industries" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2>Industries Served</h2>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-lg-9">
                    <div class="d-flex flex-wrap justify-content-center gap-3">
                        <span class="badge bg-primary fs-6 py-2 px-4 shadow-sm border border-secondary"
                            style="background-color: #174268 !important;">• Construction & Infrastructure</span>
                        <span class="badge bg-primary fs-6 py-2 px-4 shadow-sm border border-secondary"
                            style="background-color: #174268 !important;">• Automotive & Transport</span>
                        <span class="badge bg-primary fs-6 py-2 px-4 shadow-sm border border-secondary"
                            style="background-color: #174268 !important;">• Fabrication & Engineering</span>
                        <span class="badge bg-primary fs-6 py-2 px-4 shadow-sm border border-secondary"
                            style="background-color: #174268 !important;">• Furniture & Interior Design</span>
                        <span class="badge bg-primary fs-6 py-2 px-4 shadow-sm border border-secondary"
                            style="background-color: #174268 !important;">• Marine & Offshore</span>
                        <span class="badge bg-primary fs-6 py-2 px-4 shadow-sm border border-secondary"
                            style="background-color: #174268 !important;">• Agriculture & Industrial Projects</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Manufacturing Process -->
    <section id="manufacturing" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container text-center">
            <div class="section-title center mb-4">
                <h2>Manufacturing Process</h2>
            </div>
            <p class="fs-6 text-center text-success fw-bold mb-4">Ensures high structural integrity and dimensional accuracy.</p>
            <div class="row g-4 mt-3">
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-1-circle-fill"></i></div>
                        <h5>Steel Coil or Billet Preparation</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-2-circle-fill"></i></div>
                        <h5>Forming into Square / Rectangular / Oval Shapes</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-3-circle-fill"></i></div>
                        <h5>ERW / EFW Welding or Seamless Processing</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-4-circle-fill"></i></div>
                        <h5>Heat Treatment & Sizing</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-5-circle-fill"></i></div>
                        <h5>Surface Finishing (Polishing / Coating)</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-6-circle-fill"></i></div>
                        <h5>Inspection & Testing</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Supply & Export Capability -->
    <section id="export" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-4">
                <h2>Hollow Section Pipes Exporter to UAE, Saudi Arabia & GCC</h2>
            </div>
            <p class="fs-6 text-center text-muted mb-4">
                Moksh Tubes & Fittings LLP is a trusted hollow section pipes supplier for UAE, Saudi Arabia, Qatar, Oman,
                and Kuwait. We supply square (SHS), rectangular (RHS), and oval hollow sections for construction,
                infrastructure, and fabrication projects across the Gulf region. We regularly supply to Dubai, Abu Dhabi,
                Riyadh, Jeddah, Doha, and Muscat.
            </p>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="p-4 bg-white rounded shadow-sm border border-light h-100">
                        <h4 class="fw-bold text-primary mb-3"><i class="bi bi-globe me-2"></i>Export Countries</h4>
                        <ul class="fs-6 list-unstyled text-muted">
                            <li class="mb-2"><i class="bi bi-check me-2 text-success"></i> UAE (Dubai, Abu Dhabi)</li>
                            <li class="mb-2"><i class="bi bi-check me-2 text-success"></i> Saudi Arabia (Riyadh, Jeddah)</li>
                            <li class="mb-2"><i class="bi bi-check me-2 text-success"></i> Qatar (Doha)</li>
                            <li class="mb-2"><i class="bi bi-check me-2 text-success"></i> Oman (Muscat)</li>
                            <li class="mb-2"><i class="bi bi-check me-2 text-success"></i> Kuwait & Bahrain</li>
                            <li class="mb-2"><i class="bi bi-check me-2 text-success"></i> Europe & Southeast Asia</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="p-4 bg-white rounded shadow-sm border border-light h-100">
                        <h4 class="fw-bold text-primary mb-3"><i class="bi bi-box-seam me-2"></i>Export Services</h4>
                        <ul class="fs-6 list-unstyled text-muted">
                            <li class="mb-2"><i class="bi bi-check me-2 text-success"></i> Fast delivery to GCC countries</li>
                            <li class="mb-2"><i class="bi bi-check me-2 text-success"></i> EN 10204 3.1 certification</li>
                            <li class="mb-2"><i class="bi bi-check me-2 text-success"></i> Third-party inspection (TPI)</li>
                            <li class="mb-2"><i class="bi bi-check me-2 text-success"></i> Export-grade packaging</li>
                            <li class="mb-2"><i class="bi bi-check me-2 text-success"></i> Bulk structural supply capability</li>
                            <li class="mb-2"><i class="bi bi-check me-2 text-success"></i> Complete technical documentation</li>
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
                                class="bi bi-check-circle-fill text-primary me-2"></i> Strong yet lightweight structures</li>
                        <li class="mb-3 p-3 bg-white border rounded shadow-sm"><i
                                class="bi bi-check-circle-fill text-primary me-2"></i> Reduced material cost in construction</li>
                        <li class="mb-3 p-3 bg-white border rounded shadow-sm"><i
                                class="bi bi-check-circle-fill text-primary me-2"></i> Easy to weld, cut, and fabricate</li>
                        <li class="mb-3 p-3 bg-white border rounded shadow-sm"><i
                                class="bi bi-check-circle-fill text-primary me-2"></i> Modern aesthetic finish for architectural use</li>
                        <li class="mb-3 p-3 bg-white border rounded shadow-sm"><i
                                class="bi bi-check-circle-fill text-primary me-2"></i> Long service life in harsh environments</li>
                    </ul>
                </div>

                <div id="quality" class="col-lg-6">
                    <div class="p-4 bg-white rounded shadow-sm border-start border-4 border-primary h-100">
                        <h3 class="fw-bold mb-4" style="color: #174268;">Testing & Quality Control</h3>
                        <ul class="fs-6 list-unstyled text-muted">
                            <li class="mb-2"><i class="bi bi-tools text-primary me-2"></i> • Dimensional inspection</li>
                            <li class="mb-2"><i class="bi bi-tools text-primary me-2"></i> • Weld integrity testing</li>
                            <li class="mb-2"><i class="bi bi-tools text-primary me-2"></i> • Ultrasonic testing (UT)</li>
                            <li class="mb-2"><i class="bi bi-tools text-primary me-2"></i> • Surface quality checks</li>
                            <li class="mb-2"><i class="bi bi-tools text-primary me-2"></i> • Mechanical strength testing</li>
                        </ul>
                        <p class="fs-6 mt-4 fw-bold text-success"><i class="bi bi-patch-check-fill me-2"></i> Supplied with standard test certificates.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Material Selection Guide & Buying Guide -->
    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="row g-5 justify-content-center">
                <div class="col-md-6">
                    <div class="p-4 bg-light rounded shadow-sm border-start border-4 border-info h-100">
                        <h3 class="fw-bold mb-4" style="color: #174268;">Material Selection Guide</h3>
                        <ul class="fs-6 list-unstyled">
                            <li class="mb-3 p-2 bg-white rounded border"><i class="bi bi-arrow-right text-info me-2"></i>
                                <strong>Construction</strong> → Carbon Steel / Mild Steel</li>
                            <li class="mb-3 p-2 bg-white rounded border"><i class="bi bi-arrow-right text-info me-2"></i>
                                <strong>Corrosion Resistance</strong> → Stainless Steel / Duplex</li>
                            <li class="mb-3 p-2 bg-white rounded border"><i class="bi bi-arrow-right text-info me-2"></i>
                                <strong>Lightweight Structures</strong> → Aluminium</li>
                            <li class="mb-3 p-2 bg-white rounded border"><i class="bi bi-arrow-right text-info me-2"></i>
                                <strong>Marine Use</strong> → Duplex / Cu-Ni Alloys</li>
                            <li class="mb-3 p-2 bg-white rounded border"><i class="bi bi-arrow-right text-info me-2"></i>
                                <strong>Decorative / Furniture</strong> → Stainless / Aluminium</li>
                        </ul>
                        <p class="fs-6 mt-3 fw-bold text-success small"><i class="bi bi-lightbulb-fill me-2"></i>
                            Choosing the right material improves durability and cost efficiency.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-4 bg-light rounded shadow-sm border-start border-4 border-warning h-100">
                        <h3 class="fw-bold mb-4" style="color: #174268;">Buying Guide</h3>
                        <p class="fs-6 text-muted">Before selecting hollow section pipes, consider:</p>
                        <ul class="fs-6 list-unstyled">
                            <li class="mb-2"><i class="bi bi-arrow-right text-warning me-2"></i> Shape (Square / Rectangular / Oval)</li>
                            <li class="mb-2"><i class="bi bi-arrow-right text-warning me-2"></i> Load-bearing requirements</li>
                            <li class="mb-2"><i class="bi bi-arrow-right text-warning me-2"></i> Material grade for your environment</li>
                            <li class="mb-2"><i class="bi bi-arrow-right text-warning me-2"></i> Required thickness & size</li>
                            <li class="mb-2"><i class="bi bi-arrow-right text-warning me-2"></i> Surface finish (coated / polished)</li>
                            <li class="mb-2"><i class="bi bi-arrow-right text-warning me-2"></i> Certification requirements (ASTM / EN)</li>
                        </ul>
                        <p class="fs-6 mt-4 fw-bold p-2 bg-white rounded border">Our team helps you select the best structural solution for your project.</p>
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
                        <div class="why-banner-icon"><i class="bi bi-grid-3x3-gap-fill"></i></div>
                        <h5>Wide range of shapes & sizes</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-sliders"></i></div>
                        <h5>Custom fabrication options</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-patch-check-fill"></i></div>
                        <h5>High-quality certified materials</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-box-seam-fill"></i></div>
                        <h5>Fast delivery & ready stock</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe"></i></div>
                        <h5>Export capability (India + global markets)</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-headset"></i></div>
                        <h5>Technical support for structural projects</h5>
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
                        <p class="fs-6 mb-3 text-muted">Explore our <a href="{{ route('products.pipes-tubes.seamless-pipes', ['country' => $country ?? 'india']) }}" class="text-primary fw-bold text-decoration-none">seamless pipes</a> for high-pressure and critical industrial applications.</p>
                        <p class="fs-6 mb-3 text-muted">We also supply <a href="{{ route('products.pipes-tubes.welded-pipes', ['country' => $country ?? 'india']) }}" class="text-primary fw-bold text-decoration-none">welded pipes</a> (ERW, EFW, LSAW) for cost-effective piping solutions.</p>
                        <p class="fs-6 mb-0 text-muted">Check our <a href="{{ route('products.pipes-tubes.boiler-heat-exchanger-tubes', ['country' => $country ?? 'india']) }}" class="text-primary fw-bold text-decoration-none">boiler & heat exchanger tubes</a> for GCC industrial projects.</p>
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
                                <h4>What are hollow section pipes used for?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Hollow section pipes are used in construction, fabrication, furniture, and automotive industries for structural support and design applications. They are ideal for columns, beams, trusses, vehicle frames, and architectural features.</p>
                            </div>
                        </div>
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Which shapes are available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>We supply Square Hollow Sections (SHS), Rectangular Hollow Sections (RHS), oval sections, and custom profiles as per your project requirements.</p>
                            </div>
                        </div>
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What materials are available for hollow sections?</h4>
                            </div>
                            <div class="accord-content">
                                <p>We offer hollow section pipes in stainless steel (304, 316, 316L), carbon/mild steel (IS 2062, ASTM A36, A500), duplex (2205, S32750), aluminium alloys (6061, 6063, 6082), and copper alloys (Cu-Ni, Brass).</p>
                            </div>
                        </div>
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Can you provide custom sizes and finishes?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Yes, Moksh Tubes & Fittings LLP provides custom dimensions, wall thicknesses, lengths, and finishes including hot rolled, polished, powder coated, and galvanized options based on your project requirements.</p>
                            </div>
                        </div>
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Do you export hollow sections to UAE and Saudi Arabia?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Yes, we are a leading exporter of hollow section pipes to UAE, Saudi Arabia, Qatar, Oman, and Kuwait. We provide fast delivery to Dubai, Abu Dhabi, Riyadh, Jeddah, Doha, and Muscat with full EN 10204 3.1 certification and export-grade packaging.</p>
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
                <h2>Request a Quote for Hollow Section Pipes</h2>
                <p>
                    Looking for high-quality hollow section pipes for structural or fabrication projects?
                    Contact <strong>Moksh Tubes & Fittings LLP</strong> today. We offer custom sizes & finishes,
                    bulk supply capability, fast delivery, and expert guidance for your project requirements.
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
                "name": "Hollow Section Pipes",
                "description": "Hollow section pipes (SHS, RHS, Oval) supplier and exporter to UAE, Saudi Arabia, Qatar and Oman",
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
                        "name": "What are hollow section pipes used for?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "They are used in construction, fabrication, furniture, and automotive industries for structural support and design applications."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Which shapes are available?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Square (SHS), rectangular (RHS), oval sections, and custom profiles."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "What materials are available for hollow sections?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Stainless steel, carbon steel, duplex, aluminium alloys, and copper alloys."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Can you provide custom sizes and finishes?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Yes, we offer custom dimensions, thickness, finishes including hot rolled, polished, powder coated, and galvanized options."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Do you export hollow sections to UAE and Saudi Arabia?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Yes, we export to UAE, Saudi Arabia, Qatar, Oman, and Kuwait with fast delivery to Dubai, Abu Dhabi, Riyadh, Jeddah, Doha, and Muscat."
                        }
                    }
                ]
            }
        @endverbatim
    </script>
@endsection
