@extends('layouts.master')
@section('title', 'American Structural Columns | ASTM / AISC Steel Columns')
@section('meta_description', 'American Structural Columns for buildings, industrial structures, warehouses, infrastructure and engineering applications. ASTM / AISC specification-based steel columns from Moksh Tubes & Fittings LLP.')
@section('canonical', url()->current())
@section('og_type', 'product')
@section('og_title', 'American Structural Columns | ASTM / AISC Steel Columns')
@section('og_description', 'American Structural Columns for buildings, industrial structures, warehouses, infrastructure and engineering applications. ASTM / AISC specification-based steel columns from Moksh Tubes & Fittings LLP.')
@section('twitter_title', 'American Structural Columns | ASTM / AISC Steel Columns')
@section('twitter_description', 'American Structural Columns for buildings, industrial structures, warehouses, infrastructure and engineering applications. ASTM / AISC specification-based steel columns from Moksh Tubes & Fittings LLP.')

@section('content')
<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image: url({{ asset('assets/images/product/default-bg.jpg') }});">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto text-center">
                <h1 class="page-title">American Structural Columns – ASTM / AISC Steel Columns</h1>
                <p class="text-center mt-3 px-3 py-2 text-white position-relative" style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                    American Structural Columns are heavy-duty structural steel sections used as vertical load-bearing members in buildings, industrial facilities, warehouses, infrastructure and engineered steel structures. Common American column sections include W-Shapes and other structural shapes selected according to AISC section specifications, ASTM material grades and project requirements.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Quick Navigation -->
<div class="sticky-top bg-white border-bottom material-tabs w-100 shadow-sm">
    <div class="container text-center py-2">
        <a href="#overview">Overview</a> |
        <a href="#specifications">Specifications</a> |
        <a href="#size-chart">Size & Weight Chart</a> |
        <a href="#grades">Grades</a> |
        <a href="#applications">Applications</a> |
        <a href="#uses">Uses</a> |
        <a href="#advantages">Advantages</a> |
        <a href="#mechanical-properties">Mechanical</a> |
        <a href="#why-choose-us">Why Choose Us</a> |
        <a href="#faq">FAQ</a>
    </div>
</div>

<section id="overview" class="sec-padd-top sec-padd-bottom bg-light">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">American Structural Columns</h2>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="https://placehold.co/550x350" alt="American Structural Columns" class="img-fluid rounded shadow-sm" loading="lazy">
            </div>
            <div class="col-md-6">
                <p class="fs-6 mb-3 text-justify"><strong>American Structural Columns</strong> are vertical structural steel members designed to transfer loads from beams, floors, roofs and other structural components to the foundation or supporting structure.</p>
                <p class="fs-6 mb-3 text-justify">They are an important part of steel building systems and are widely used in commercial buildings, industrial facilities, warehouses, infrastructure projects, platforms and engineered steel frameworks.</p>
                <p class="fs-6 mb-3 text-justify">American Structural Columns are commonly selected according to section properties, axial loading, column height, structural stability, connection requirements, material grade and engineering design. W-Shapes and other applicable structural sections can be used depending on the requirements of the project.</p>
                <p class="fs-6 mb-3 text-justify">American structural sections are generally referenced through AISC steel section specifications, while the material grade is specified through the applicable ASTM material standard.</p>
                <p class="fs-6 mb-3 text-justify">At <a href="{{ route('index') }}">Moksh Tubes & Fittings LLP</a>, we support American Structural Column requirements based on customer drawings, technical specifications and project requirements. Customers can specify the required column designation, section dimensions, ASTM grade, length, quantity and applicable AISC requirements.</p>
                <p class="fs-6 mb-3 text-justify">American Structural Columns can also be used together with American Structural Angles, Channels, Beams and Hollow Structural Sections (HSS) to create complete steel building frameworks and fabricated structural assemblies.</p>
                <p class="fs-6 mb-3 text-justify">For an accurate quotation, customers can provide their required column designation, section dimensions, material grade, length, quantity and applicable ASTM / AISC specification, along with project drawings or technical documentation where required.</p>
            </div>
        </div>
    </div>
</section>

<!-- Datasheet Download -->
<section class="sec-padd-bottom bg-light">
    <div class="datasheet-download px-4 text-center">
        <h3 class="mb-3" style="color:#174268;">Download American Structural Columns Datasheet</h3>
        <p class="mb-3">
            Get the complete American Structural Columns datasheet with chemical composition,
            mechanical properties, heat treatment details, and applications.
            Enter your email to receive the PDF instantly.
        </p>

        <!-- Lead Capture Form -->
        <form id="leadForm" method="POST" action="{{ route('lead.capture') }}" class="mb-3">
            @csrf
            <input type="hidden" name="page_path" value="{{ $slug ?? 'american-structural-columns' }}">
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
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Specifications</h2>
            <p class="text-center">American Structural Columns are available in different section designations, depths, flange widths, web thicknesses, flange thicknesses, lengths and structural steel grades according to applicable ASTM material specifications, AISC requirements and project specifications.</p>
        </div>
        <div class="table-responsive mb-5">
            <table class="table table-bordered table-striped align-middle text-center">
                <thead class="table-dark">
                    <tr>
                        <th>Category</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>Product</td><td>American Structural Columns</td></tr>
                    <tr><td>Profile</td><td>W-Shapes / I-Shaped Structural Sections</td></tr>
                    <tr><td>Material</td><td>Carbon Steel / Structural Steel</td></tr>
                    <tr><td>Types</td><td>Structural Column Sections as per applicable AISC requirements</td></tr>
                    <tr><td>Standards</td><td>Applicable ASTM Standards / AISC Requirements</td></tr>
                    <tr><td>Grades</td><td>As per applicable ASTM material specification</td></tr>
                    <tr><td>Section Depth</td><td>Various standard sizes</td></tr>
                    <tr><td>Flange Width</td><td>As per selected column section</td></tr>
                    <tr><td>Web Thickness</td><td>As per selected section</td></tr>
                    <tr><td>Flange Thickness</td><td>As per selected section</td></tr>
                    <tr><td>Length</td><td>Standard Lengths / Cut-to-Length</td></tr>
                    <tr><td>Surface</td><td>Mill Finish / As Specified</td></tr>
                    <tr><td>Supply Form</td><td>Individual Sections / Bundles</td></tr>
                    <tr><td>Customization</td><td>Section, size, grade, length and quantity as required</td></tr>
                    <tr><td>Applications</td><td>Buildings, Industrial Structures, Warehouses, Infrastructure & Engineering</td></tr>
                </tbody>
            </table>
        </div>
        
        <div class="row g-4 mt-4">
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100 border-0 bg-white shadow-sm border border-secondary border-opacity-25 rounded-3">
                    <h4 class="mb-3 text-center" style="color: #db7227;">W-Shapes / Wide Flange Columns</h4>
                    <p class="mb-0 text-justify">W-Shapes (Wide Flange Sections) are commonly used as structural columns in American steel construction. Their wide-flange geometry provides structural properties suitable for vertical load-bearing applications when selected according to engineering design.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100 border-0 bg-white shadow-sm border border-secondary border-opacity-25 rounded-3">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Column Section Dimensions</h4>
                    <p class="mb-3 text-justify">American Structural Columns are generally identified by their AISC designation and section dimensions, including:</p>
                    <div class="row">
                        <div class="col-6">
                            <ul class="list-unstyled mb-0">
                                <li><i class="bi bi-check-circle text-success me-2"></i>Overall Section Depth</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Flange Width</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Web Thickness</li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="list-unstyled mb-0">
                                <li><i class="bi bi-check-circle text-success me-2"></i>Flange Thickness</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Section Weight</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Column Length</li>
                            </ul>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-justify">The appropriate section should be selected according to axial loading, column height, structural stability, connection requirements and engineering design.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100 border-0 bg-white shadow-sm border border-secondary border-opacity-25 rounded-3">
                    <h4 class="mb-3 text-center" style="color: #db7227;">ASTM Specifications</h4>
                    <p class="mb-0 text-justify">The applicable ASTM material specification depends on the required steel grade and project requirements. Material properties, chemical composition and mechanical requirements should be confirmed against the applicable ASTM specification.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100 border-0 bg-white shadow-sm border border-secondary border-opacity-25 rounded-3">
                    <h4 class="mb-3 text-center" style="color: #db7227;">AISC Requirements</h4>
                    <p class="mb-0 text-justify">AISC requirements may be referenced for structural steel design, section properties, column selection and application of American structural members. The applicable project drawings and engineering specifications should determine the required AISC requirements.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100 border-0 bg-white shadow-sm border border-secondary border-opacity-25 rounded-3">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Length Availability</h4>
                    <p class="mb-0 text-justify">Structural columns can be considered in standard lengths or cut-to-length requirements, depending on product availability and customer specifications.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100 border-0 bg-white shadow-sm border border-secondary border-opacity-25 rounded-3">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Material & Grade</h4>
                    <p class="mb-0 text-justify">The material grade is selected according to the applicable ASTM specification and project requirements. Customers can specify the required ASTM grade along with the column designation and dimensions.</p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card p-4 shadow-sm h-100 border-0 bg-white shadow-sm border border-secondary border-opacity-25 rounded-3">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Supply Requirements</h4>
                    <p class="mb-3 text-justify">For an accurate quotation, customers should provide:</p>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-unstyled mb-0">
                                <li><i class="bi bi-check-circle text-success me-2"></i>Column Type / Designation</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Section Size</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Section Depth</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Flange Width</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Web Thickness</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Flange Thickness</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled mb-0">
                                <li><i class="bi bi-check-circle text-success me-2"></i>ASTM Material Grade</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Required Length</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Quantity</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Applicable AISC Requirements</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Project Specification, if applicable</li>
                            </ul>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-justify">Moksh Tubes & Fittings LLP can support standard and project-based requirements for American Structural Columns, subject to product availability and agreed specifications.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="size-chart" class="sec-padd-top sec-padd-bottom bg-light">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Size & Weight Chart</h2>
            <p class="text-center">W-Shapes – American Structural Column Size & Weight Chart</p>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle text-center">
                <thead class="table-dark">
                    <tr>
                        <th>Section</th>
                        <th>Depth d (in)</th>
                        <th>Flange Width bf (in)</th>
                        <th>Web Thickness tw (in)</th>
                        <th>Flange Thickness tf (in)</th>
                        <th>Weight (lb/ft)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>W4×13</td><td>4.16</td><td>4.060</td><td>0.280</td><td>0.345</td><td>13</td></tr>
                    <tr><td>W5×16</td><td>5.01</td><td>5.000</td><td>0.240</td><td>0.360</td><td>16</td></tr>
                    <tr><td>W5×19</td><td>5.15</td><td>5.030</td><td>0.270</td><td>0.430</td><td>19</td></tr>
                    <tr><td>W6×9</td><td>5.90</td><td>3.940</td><td>0.170</td><td>0.215</td><td>9</td></tr>
                    <tr><td>W6×12</td><td>6.03</td><td>4.000</td><td>0.230</td><td>0.280</td><td>12</td></tr>
                    <tr><td>W6×15</td><td>5.99</td><td>5.990</td><td>0.230</td><td>0.260</td><td>15</td></tr>
                    <tr><td>W6×20</td><td>6.20</td><td>6.020</td><td>0.260</td><td>0.365</td><td>20</td></tr>
                    <tr><td>W6×25</td><td>6.38</td><td>6.080</td><td>0.320</td><td>0.455</td><td>25</td></tr>
                    <tr><td>W8×10</td><td>7.89</td><td>3.940</td><td>0.170</td><td>0.205</td><td>10</td></tr>
                    <tr><td>W8×13</td><td>7.99</td><td>4.000</td><td>0.230</td><td>0.255</td><td>13</td></tr>
                    <tr><td>W8×15</td><td>8.11</td><td>4.015</td><td>0.245</td><td>0.315</td><td>15</td></tr>
                    <tr><td>W8×18</td><td>8.14</td><td>5.250</td><td>0.230</td><td>0.330</td><td>18</td></tr>
                    <tr><td>W8×21</td><td>8.28</td><td>5.270</td><td>0.250</td><td>0.400</td><td>21</td></tr>
                    <tr><td>W8×24</td><td>7.93</td><td>6.495</td><td>0.245</td><td>0.400</td><td>24</td></tr>
                    <tr><td>W8×28</td><td>8.06</td><td>6.535</td><td>0.285</td><td>0.465</td><td>28</td></tr>
                    <tr><td>W8×31</td><td>8.00</td><td>8.000</td><td>0.285</td><td>0.435</td><td>31</td></tr>
                    <tr><td>W8×40</td><td>8.25</td><td>8.070</td><td>0.360</td><td>0.560</td><td>40</td></tr>
                    <tr><td>W10×12</td><td>9.87</td><td>3.960</td><td>0.190</td><td>0.200</td><td>12</td></tr>
                    <tr><td>W10×15</td><td>9.99</td><td>4.000</td><td>0.230</td><td>0.270</td><td>15</td></tr>
                    <tr><td>W10×22</td><td>10.17</td><td>5.750</td><td>0.240</td><td>0.360</td><td>22</td></tr>
                    <tr><td>W10×30</td><td>10.47</td><td>5.810</td><td>0.300</td><td>0.510</td><td>30</td></tr>
                    <tr><td>W10×33</td><td>9.73</td><td>7.960</td><td>0.290</td><td>0.395</td><td>33</td></tr>
                    <tr><td>W10×45</td><td>10.10</td><td>8.020</td><td>0.350</td><td>0.620</td><td>45</td></tr>
                    <tr><td>W12×14</td><td>11.91</td><td>3.970</td><td>0.170</td><td>0.200</td><td>14</td></tr>
                    <tr><td>W12×16</td><td>11.99</td><td>3.990</td><td>0.190</td><td>0.225</td><td>16</td></tr>
                    <tr><td>W12×19</td><td>12.16</td><td>4.005</td><td>0.230</td><td>0.260</td><td>19</td></tr>
                    <tr><td>W12×22</td><td>12.31</td><td>4.030</td><td>0.260</td><td>0.315</td><td>22</td></tr>
                    <tr><td>W12×26</td><td>12.22</td><td>6.490</td><td>0.230</td><td>0.380</td><td>26</td></tr>
                    <tr><td>W12×30</td><td>12.34</td><td>6.520</td><td>0.260</td><td>0.440</td><td>30</td></tr>
                    <tr><td>W12×35</td><td>12.50</td><td>6.560</td><td>0.300</td><td>0.520</td><td>35</td></tr>
                    <tr><td>W12×40</td><td>11.94</td><td>8.005</td><td>0.295</td><td>0.515</td><td>40</td></tr>
                    <tr><td>W12×45</td><td>12.12</td><td>8.050</td><td>0.345</td><td>0.575</td><td>45</td></tr>
                    <tr><td>W12×50</td><td>12.19</td><td>8.080</td><td>0.370</td><td>0.640</td><td>50</td></tr>
                    <tr><td>W12×53</td><td>12.06</td><td>10.000</td><td>0.345</td><td>0.580</td><td>53</td></tr>
                    <tr><td>W12×58</td><td>12.22</td><td>10.010</td><td>0.355</td><td>0.640</td><td>58</td></tr>
                    <tr><td>W12×65</td><td>12.12</td><td>12.000</td><td>0.375</td><td>0.605</td><td>65</td></tr>
                    <tr><td>W14×22</td><td>13.74</td><td>5.000</td><td>0.230</td><td>0.335</td><td>22</td></tr>
                    <tr><td>W14×30</td><td>13.84</td><td>6.730</td><td>0.270</td><td>0.430</td><td>30</td></tr>
                    <tr><td>W14×38</td><td>14.02</td><td>6.770</td><td>0.310</td><td>0.515</td><td>38</td></tr>
                    <tr><td>W14×43</td><td>13.66</td><td>7.700</td><td>0.305</td><td>0.450</td><td>43</td></tr>
                    <tr><td>W14×48</td><td>13.79</td><td>8.030</td><td>0.340</td><td>0.510</td><td>48</td></tr>
                    <tr><td>W14×53</td><td>13.92</td><td>8.060</td><td>0.370</td><td>0.550</td><td>53</td></tr>
                    <tr><td>W14×61</td><td>13.89</td><td>9.995</td><td>0.375</td><td>0.645</td><td>61</td></tr>
                    <tr><td>W14×68</td><td>14.04</td><td>10.035</td><td>0.415</td><td>0.720</td><td>68</td></tr>
                    <tr><td>W14×74</td><td>14.17</td><td>10.070</td><td>0.440</td><td>0.785</td><td>74</td></tr>
                    <tr><td>W14×82</td><td>14.31</td><td>10.130</td><td>0.510</td><td>0.835</td><td>82</td></tr>
                    <tr><td>W14×90</td><td>14.02</td><td>14.520</td><td>0.550</td><td>0.570</td><td>90</td></tr>
                    <tr><td>W16×26</td><td>15.69</td><td>5.525</td><td>0.250</td><td>0.345</td><td>26</td></tr>
                    <tr><td>W16×31</td><td>15.88</td><td>5.525</td><td>0.275</td><td>0.430</td><td>31</td></tr>
                    <tr><td>W16×36</td><td>15.86</td><td>6.985</td><td>0.275</td><td>0.430</td><td>36</td></tr>
                    <tr><td>W16×40</td><td>16.01</td><td>6.995</td><td>0.305</td><td>0.505</td><td>40</td></tr>
                    <tr><td>W16×45</td><td>16.13</td><td>7.035</td><td>0.345</td><td>0.565</td><td>45</td></tr>
                    <tr><td>W16×50</td><td>16.26</td><td>7.070</td><td>0.380</td><td>0.585</td><td>50</td></tr>
                    <tr><td>W18×35</td><td>17.70</td><td>6.000</td><td>0.300</td><td>0.495</td><td>35</td></tr>
                    <tr><td>W18×40</td><td>17.90</td><td>6.015</td><td>0.315</td><td>0.525</td><td>40</td></tr>
                    <tr><td>W18×46</td><td>18.06</td><td>6.060</td><td>0.345</td><td>0.605</td><td>46</td></tr>
                    <tr><td>W18×50</td><td>18.20</td><td>7.500</td><td>0.355</td><td>0.570</td><td>50</td></tr>
                    <tr><td>W18×55</td><td>18.11</td><td>7.530</td><td>0.390</td><td>0.600</td><td>55</td></tr>
                    <tr><td>W18×60</td><td>18.24</td><td>7.555</td><td>0.415</td><td>0.630</td><td>60</td></tr>
                    <tr><td>W18×65</td><td>18.35</td><td>7.590</td><td>0.450</td><td>0.680</td><td>65</td></tr>
                    <tr><td>W18×71</td><td>18.47</td><td>7.635</td><td>0.495</td><td>0.730</td><td>71</td></tr>
                    <tr><td>W18×76</td><td>18.21</td><td>11.035</td><td>0.400</td><td>0.680</td><td>76</td></tr>
                    <tr><td>W21×44</td><td>20.66</td><td>6.500</td><td>0.350</td><td>0.450</td><td>44</td></tr>
                    <tr><td>W21×50</td><td>20.83</td><td>6.530</td><td>0.380</td><td>0.535</td><td>50</td></tr>
                    <tr><td>W21×57</td><td>21.06</td><td>6.555</td><td>0.405</td><td>0.650</td><td>57</td></tr>
                    <tr><td>W21×62</td><td>20.99</td><td>8.240</td><td>0.400</td><td>0.615</td><td>62</td></tr>
                    <tr><td>W21×68</td><td>21.13</td><td>8.240</td><td>0.405</td><td>0.650</td><td>68</td></tr>
                    <tr><td>W21×73</td><td>21.23</td><td>8.270</td><td>0.430</td><td>0.685</td><td>73</td></tr>
                    <tr><td>W21×83</td><td>21.43</td><td>8.300</td><td>0.515</td><td>0.740</td><td>83</td></tr>
                    <tr><td>W21×93</td><td>21.62</td><td>8.360</td><td>0.580</td><td>0.800</td><td>93</td></tr>
                    <tr><td>W24×55</td><td>23.57</td><td>7.005</td><td>0.395</td><td>0.505</td><td>55</td></tr>
                    <tr><td>W24×62</td><td>23.74</td><td>7.040</td><td>0.430</td><td>0.590</td><td>62</td></tr>
                    <tr><td>W24×68</td><td>23.73</td><td>8.960</td><td>0.415</td><td>0.585</td><td>68</td></tr>
                    <tr><td>W24×76</td><td>23.91</td><td>8.990</td><td>0.440</td><td>0.680</td><td>76</td></tr>
                    <tr><td>W24×84</td><td>24.10</td><td>9.020</td><td>0.470</td><td>0.770</td><td>84</td></tr>
                    <tr><td>W24×103</td><td>24.50</td><td>9.060</td><td>0.550</td><td>0.980</td><td>103</td></tr>
                    <tr><td>W27×84</td><td>26.71</td><td>9.960</td><td>0.490</td><td>0.640</td><td>84</td></tr>
                    <tr><td>W27×94</td><td>26.92</td><td>9.990</td><td>0.525</td><td>0.715</td><td>94</td></tr>
                    <tr><td>W27×102</td><td>27.29</td><td>10.010</td><td>0.515</td><td>0.750</td><td>102</td></tr>
                    <tr><td>W27×114</td><td>27.57</td><td>10.070</td><td>0.570</td><td>0.830</td><td>114</td></tr>
                    <tr><td>W27×129</td><td>27.97</td><td>10.070</td><td>0.610</td><td>0.930</td><td>129</td></tr>
                    <tr><td>W30×90</td><td>29.65</td><td>10.410</td><td>0.500</td><td>0.620</td><td>90</td></tr>
                    <tr><td>W30×99</td><td>29.65</td><td>10.458</td><td>0.520</td><td>0.670</td><td>99</td></tr>
                    <tr><td>W30×108</td><td>29.88</td><td>10.510</td><td>0.565</td><td>0.710</td><td>108</td></tr>
                    <tr><td>W30×116</td><td>30.05</td><td>10.520</td><td>0.565</td><td>0.830</td><td>116</td></tr>
                    <tr><td>W30×124</td><td>30.17</td><td>10.510</td><td>0.510</td><td>0.835</td><td>124</td></tr>
                    <tr><td>W33×118</td><td>32.91</td><td>11.480</td><td>0.510</td><td>0.710</td><td>118</td></tr>
                    <tr><td>W33×130</td><td>33.10</td><td>11.510</td><td>0.550</td><td>0.815</td><td>130</td></tr>
                    <tr><td>W36×135</td><td>35.85</td><td>11.995</td><td>0.600</td><td>0.825</td><td>135</td></tr>
                    <tr><td>W36×150</td><td>36.74</td><td>12.000</td><td>0.650</td><td>0.890</td><td>150</td></tr>
                </tbody>
            </table>
        </div>
        <p class="text-center mt-3 text-muted">The AISC W-shape convention uses the nominal depth in inches × weight in lb/ft, so, for example, W12×26 means a W-shape with a nominal 12-inch depth and 26 lb/ft nominal weight; actual depth varies by section.</p>
    </div>
</section>

<section id="grades" class="sec-padd-top sec-padd-bottom">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Grades Available</h2>
            <p class="text-center">American Structural Columns can be supplied in different structural steel grades according to applicable ASTM material specifications, AISC requirements and project specifications. The selected grade depends on the required mechanical properties, structural loading, column design, fabrication requirements and engineering requirements.</p>
            <p class="text-center pb-3">At Moksh Tubes & Fittings LLP, American Structural Columns can be sourced according to the customer's specified column designation, grade, dimensions, length, quantity and applicable ASTM / AISC requirements, subject to product availability.</p>
        </div>
        <div class="table-responsive mb-5">
            <table class="table table-bordered table-striped align-middle text-center">
                <thead class="table-dark">
                    <tr>
                        <th>Grade / Specification</th>
                        <th>Material Type</th>
                        <th>Typical Requirement</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>ASTM A36</td><td>Carbon Structural Steel</td><td>General structural and fabrication applications</td></tr>
                    <tr><td>ASTM A572 Grade 50</td><td>High-Strength Low-Alloy Structural Steel</td><td>Structural applications requiring higher strength</td></tr>
                    <tr><td>ASTM A992</td><td>Structural Steel</td><td>Commonly specified for structural building members</td></tr>
                    <tr><td>Other ASTM Grades</td><td>Structural Steel</td><td>As per project specification and requirement</td></tr>
                </tbody>
            </table>
        </div>
        
        <div class="row g-4 mt-4">
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100 border-0 bg-white shadow-sm border border-secondary border-opacity-25 rounded-3">
                    <h4 class="mb-3 text-center" style="color: #db7227;">ASTM A36</h4>
                    <p class="mb-0 text-justify">ASTM A36 is a widely specified carbon structural steel grade used for general construction, fabrication and engineering applications. It can be considered for structural column requirements where the specified material properties meet the project requirements.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100 border-0 bg-white shadow-sm border border-secondary border-opacity-25 rounded-3">
                    <h4 class="mb-3 text-center" style="color: #db7227;">ASTM A572 Grade 50</h4>
                    <p class="mb-0 text-justify">ASTM A572 Grade 50 is a high-strength low-alloy structural steel specification that can be considered for applications requiring higher specified strength than general-purpose structural steel grades.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100 border-0 bg-white shadow-sm border border-secondary border-opacity-25 rounded-3">
                    <h4 class="mb-3 text-center" style="color: #db7227;">ASTM A992</h4>
                    <p class="mb-0 text-justify">ASTM A992 is a structural steel specification commonly associated with structural shapes used in building construction. Its suitability for a particular column application should be confirmed against the applicable product and project specification.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100 border-0 bg-white shadow-sm border border-secondary border-opacity-25 rounded-3">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Grade Selection</h4>
                    <p class="mb-3 text-justify">The appropriate grade for an American Structural Column should be selected based on:</p>
                    <div class="row">
                        <div class="col-6">
                            <ul class="list-unstyled mb-0">
                                <li><i class="bi bi-check-circle text-success me-2"></i>Required mechanical properties</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Axial and structural loading</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Column height</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Section dimensions</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Structural stability requirements</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Design requirements</li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="list-unstyled mb-0">
                                <li><i class="bi bi-check-circle text-success me-2"></i>Fabrication requirements</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Welding requirements</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Applicable ASTM specification</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>AISC requirements</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Project specification</li>
                            </ul>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-justify">Customers should specify the required ASTM grade, column designation, section dimensions, length and quantity when submitting an enquiry.</p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card p-4 shadow-sm h-100 border-0 bg-white shadow-sm border border-secondary border-opacity-25 rounded-3">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Material Documentation</h4>
                    <p class="mb-3 text-justify">Where required and agreed at the time of order, applicable material test certificates and supporting documentation can be provided according to the purchase order and project requirements.</p>
                    <div class="alert alert-warning mb-0 border-0 shadow-sm" role="alert">
                        <strong>Note:</strong> Exact grade availability should be confirmed with Moksh Tubes & Fittings LLP before ordering, as availability may vary according to column section, size, specification and project requirements.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="applications" class="sec-padd-top sec-padd-bottom bg-light">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Applications</h2>
            <p class="text-center pb-3">American Structural Columns are widely used in construction, industrial structures, infrastructure and engineering projects where vertical load-bearing and structural support members are required.</p>
        </div>
        <div class="row g-4 mt-4">
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-building"></i></div>
                    <h5>Building & Construction</h5>
                    <p class="mb-0 text-center">American Structural Columns are commonly used in steel building systems for:</p>
                    <ul class="mb-0 mt-2 list-unstyled text-center">
                        <li>Commercial buildings</li>
                        <li>Industrial buildings</li>
                        <li>Steel-framed structures</li>
                        <li>Multi-level structural frameworks</li>
                        <li>Load-bearing structural systems</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-industry"></i></div>
                    <h5>Industrial Structures</h5>
                    <p class="mb-0 text-center">Structural columns are used in industrial facilities where vertical steel members are required to support structural loads. Applications include:</p>
                    <ul class="mb-0 mt-2 list-unstyled text-center">
                        <li>Factory structures</li>
                        <li>Manufacturing facilities</li>
                        <li>Industrial buildings</li>
                        <li>Equipment support structures</li>
                        <li>Heavy-duty steel frameworks</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-box-seam"></i></div>
                    <h5>Warehouses & Storage Facilities</h5>
                    <p class="mb-0 text-center">American Structural Columns can be incorporated into warehouse and storage structures as part of the main vertical framework. Applications include:</p>
                    <ul class="mb-0 mt-2 list-unstyled text-center">
                        <li>Warehouse structures</li>
                        <li>Industrial storage buildings</li>
                        <li>Steel building frameworks</li>
                        <li>Roof-support systems</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-cone-striped"></i></div>
                    <h5>Infrastructure Projects</h5>
                    <p class="mb-0 text-center">Structural columns can be used in infrastructure and civil engineering projects where the specified ASTM / AISC section meets the project requirements. Applications include:</p>
                    <ul class="mb-0 mt-2 list-unstyled text-center">
                        <li>Infrastructure frameworks</li>
                        <li>Elevated structures</li>
                        <li>Supporting structures</li>
                        <li>Platforms</li>
                        <li>Engineering structures</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-tools"></i></div>
                    <h5>Heavy Structural Fabrication</h5>
                    <p class="mb-0 text-center">American Structural Columns are suitable for fabricated steel structures requiring vertical load-bearing members. Applications include:</p>
                    <ul class="mb-0 mt-2 list-unstyled text-center">
                        <li>Structural frames</li>
                        <li>Support structures</li>
                        <li>Heavy fabricated assemblies</li>
                        <li>Industrial platforms</li>
                        <li>Steel frameworks</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-gear"></i></div>
                    <h5>Machinery & Equipment Supports</h5>
                    <p class="mb-0 text-center">Structural columns can form part of support frameworks for industrial machinery and equipment, subject to the required structural design and loading conditions.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-arrow-up-square"></i></div>
                    <h5>Platforms & Supporting Structures</h5>
                    <p class="mb-0 text-center">American Structural Columns can be incorporated into industrial platforms, elevated structures and supporting frameworks where the selected section provides the required structural properties.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-grid-3x3"></i></div>
                    <h5>Steel Building Frameworks</h5>
                    <p class="mb-0 text-center">Structural columns can be combined with American Structural Beams, Channels, Angles and Hollow Structural Sections (HSS) to create complete steel building and industrial frameworks.</p>
                </div>
            </div>
        </div>
        <p class="text-center mt-4 text-muted">The appropriate column designation, dimensions and material grade should always be selected according to the structural loading, column height, stability requirements, applicable ASTM specification, AISC requirements and project specifications.</p>
    </div>
</section>

<section id="uses" class="sec-padd-top sec-padd-bottom">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Uses of American Structural Columns</h2>
            <p class="text-center mb-2">American Structural Columns are versatile structural steel members used for vertical load-bearing, structural support and steel framework applications across construction, industrial, infrastructure and engineering projects.</p>
        </div>
        <div class="row g-4 mt-4">
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-building"></i></div>
                    <h5>Used for main vertical support members in commercial, industrial and steel building structures.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-shop"></i></div>
                    <h5>Suitable for industrial sheds and factory buildings requiring structural steel column sections.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-box-seam"></i></div>
                    <h5>Used in warehouses and storage facilities as part of the main structural framework.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-layers"></i></div>
                    <h5>Suitable for multi-level steel structures where structural columns are specified according to engineering design.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-tools"></i></div>
                    <h5>Used for heavy-duty structural frameworks and fabricated steel structures.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-gear"></i></div>
                    <h5>Suitable for machinery and equipment support structures in industrial facilities.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-arrow-up-square"></i></div>
                    <h5>Used for platforms, elevated structures and supporting frameworks according to project requirements.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-cone-striped"></i></div>
                    <h5>Suitable for infrastructure and civil engineering projects requiring ASTM / AISC specified structural steel sections.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-bezier"></i></div>
                    <h5>Used for general structural fabrication, including frames, supports and steel assemblies.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-grid-3x3"></i></div>
                    <h5>Can be combined with American Structural Beams, Channels, Angles and Hollow Structural Sections (HSS) to create complete steel frameworks.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                    <h5>Suitable for load-bearing applications where the selected column section meets the required structural design and section-property requirements.</h5>
                </div>
            </div>
        </div>
        <p class="text-center mt-4 text-muted">The appropriate column designation, dimensions, grade and length should be selected according to the structural loading, column height, stability requirements, applicable ASTM specification, AISC requirements and project specifications.</p>
    </div>
</section>

<section id="advantages" class="sec-padd-top sec-padd-bottom bg-light">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold text-center" style="color:#174268;">Advantages of American Structural Columns</h2>
            <p class="text-center mb-2">American Structural Columns provide a reliable solution for vertical load-bearing, structural support and steel framework applications across construction, industrial, infrastructure and engineering projects.</p>
        </div>
        <div class="row g-4 mt-2">
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-arrow-bar-down"></i></div>
                    <h5>High Load-Bearing Capability – Suitable for vertical structural support when the appropriate section is selected according to the engineering design.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-shield-lock"></i></div>
                    <h5>Structural Strength & Rigidity – Properly selected column sections provide the required strength and rigidity for structural frameworks.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-arrows-expand"></i></div>
                    <h5>Wide Application Range – Suitable for commercial buildings, industrial facilities, warehouses, infrastructure, platforms and engineered structures.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-layout-wtf"></i></div>
                    <h5>W-Shapes / Wide Flange Options – Wide flange sections provide flexibility for structural column designs requiring suitable section properties.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-tags"></i></div>
                    <h5>ASTM Grade Options – Material grades such as ASTM A36, ASTM A572 Grade 50 and ASTM A992 can be considered according to the applicable product and project specification.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check2-square"></i></div>
                    <h5>AISC-Based Section Selection – Column designation and section properties can be selected according to applicable AISC requirements and engineering design.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-aspect-ratio"></i></div>
                    <h5>Different Section Sizes – Available in different section depths, flange widths and thicknesses according to applicable AISC section tables and product requirements.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-bounding-box"></i></div>
                    <h5>Design Flexibility – Different column sections allow engineers to select suitable members according to loading, column height and structural configuration.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-truck-flatbed"></i></div>
                    <h5>Suitable for Heavy Structures – Appropriate sections can be considered for industrial buildings, warehouses and other heavy structural applications.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-screwdriver"></i></div>
                    <h5>Fabrication Friendly – Suitable for common structural fabrication operations such as cutting, drilling, welding and assembly, subject to applicable specifications.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-card-checklist"></i></div>
                    <h5>Project-Based Supply – Column requirements can be specified according to designation, dimensions, grade, length and quantity.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-puzzle"></i></div>
                    <h5>Compatible with Other American Sections – Can be used with American Structural Angles, Channels, Beams and Hollow Structural Sections (HSS) to create complete steel frameworks.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-globe"></i></div>
                    <h5>Domestic & International Applications – Suitable for projects requiring structural steel columns specified to ASTM / AISC requirements.</h5>
                </div>
            </div>
        </div>
        <p class="text-center mt-4 text-muted">The appropriate column designation and section should always be selected according to the structural loading, column height, stability requirements, section properties, applicable ASTM specification, AISC requirements and project specifications.</p>
    </div>
</section>

<section id="mechanical-properties" class="sec-padd-top sec-padd-bottom">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Mechanical Properties – American Structural Columns</h2>
            <p class="text-center pb-3">(Typical minimum values for commonly used ASTM structural steel grades.)</p>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle text-center">
                <thead class="table-dark">
                    <tr>
                        <th>Standard / Grade</th>
                        <th>ASTM A36</th>
                        <th>ASTM A572 Grade 50</th>
                        <th>ASTM A992/A992M</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>Tensile Strength (MPa), Min.</td><td>400</td><td>450</td><td>450</td></tr>
                    <tr><td>Yield Strength (MPa), Min.</td><td>250</td><td>345</td><td>345</td></tr>
                    <tr><td>Elongation (%), Min.</td><td>20</td><td>21</td><td>21</td></tr>
                </tbody>
            </table>
        </div>
        <p class="text-center mt-3 text-muted"><small>For A572 Grade 50, ASTM specifies minimum yield strength of 345 MPa, minimum tensile strength of 450 MPa, and minimum elongation of 21% in 2 in. A992 specifies 345 MPa minimum yield strength, 448 MPa minimum tensile strength, and 21% minimum elongation in 50.8 mm.</small></p>
    </div>
</section>

<section id="why-choose-us" class="sec-padd-top sec-padd-bottom bg-light">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Why Choose Moksh Tubes & Fittings LLP?</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p>Moksh Tubes & Fittings LLP supports customers looking for American Structural Columns for construction, industrial, infrastructure, fabrication and engineering requirements. Our supply approach is based on the customer's required column designation, section dimensions, grade, length, quantity and applicable ASTM / AISC specifications.</p>
                <div class="row g-4 mt-4">
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-box-seam"></i></div>
                            <h5>Project-Based Sourcing</h5>
                            <p class="mb-0">American Structural Columns can be sourced according to specific project requirements and technical specifications.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-patch-check"></i></div>
                            <h5>ASTM Specification Support</h5>
                            <p class="mb-0">Product requirements can be aligned with the applicable ASTM material specification specified by the customer.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-ui-checks"></i></div>
                            <h5>AISC Requirements</h5>
                            <p class="mb-0">Column section requirements can be considered according to applicable AISC project and engineering requirements.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-boxes"></i></div>
                            <h5>Wide Product Range</h5>
                            <p class="mb-0">Different column designations, section dimensions, thicknesses and structural steel grades can be considered according to customer requirements.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-arrows-expand"></i></div>
                            <h5>W-Shape / Wide Flange Options</h5>
                            <p class="mb-0">Requirements for wide flange structural column sections can be considered according to specification and product availability.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                            <h5>Bulk Supply Capability</h5>
                            <p class="mb-0">Suitable for contractors, fabricators, EPC companies, engineering companies and industrial buyers requiring larger quantities.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-file-earmark-text"></i></div>
                            <h5>Specification-Based Supply</h5>
                            <p class="mb-0">Product requirements can be matched with customer drawings, technical specifications and project documentation.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-headset"></i></div>
                            <h5>Technical Support</h5>
                            <p class="mb-0">Assistance with column designations, section dimensions, material grades, ASTM specifications and procurement requirements.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-sliders"></i></div>
                            <h5>Custom Requirements</h5>
                            <p class="mb-0">Specific column sections, dimensions, grades, lengths and quantities can be discussed for project requirements.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-building"></i></div>
                            <h5>Suitable for Industrial & Infrastructure Projects</h5>
                            <p class="mb-0">Support for customers sourcing American Structural Columns for construction, fabrication, industrial and infrastructure applications.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-globe"></i></div>
                            <h5>International Project Support</h5>
                            <p class="mb-0">Suitable for customers requiring American-specification structural steel columns for domestic and international projects.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-clock-history"></i></div>
                            <h5>Reliable Supply Coordination</h5>
                            <p class="mb-0">Focus on product availability, order coordination and delivery requirements according to agreed specifications.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="faq" class="sec-padd-top sec-padd-bottom">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">FAQ – American Structural Columns</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="accordion-box">
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn active">
                            <h4>What are American Structural Columns?</h4>
                        </div>
                        <div class="accord-content collapsed">
                            <p>American Structural Columns are structural steel sections primarily used as vertical load-bearing and supporting members in buildings, industrial facilities, warehouses, infrastructure and engineered steel structures.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What types of American Structural Columns are available?</h4>
                        </div>
                        <div class="accord-content">
                            <p>American Structural Columns commonly include W-Shapes (Wide Flange Sections) and other applicable structural shapes, depending on the project specification and AISC requirements.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What are W-Shapes used for as structural columns?</h4>
                        </div>
                        <div class="accord-content">
                            <p>W-Shapes are commonly used as vertical structural members in steel buildings, industrial structures, warehouses and other load-bearing frameworks where the selected section meets the engineering requirements.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What are American Structural Columns used for?</h4>
                        </div>
                        <div class="accord-content">
                            <p>They are commonly used in commercial buildings, industrial facilities, warehouses, infrastructure projects, platforms, equipment supports and heavy structural frameworks.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Which standards apply to American Structural Columns?</h4>
                        </div>
                        <div class="accord-content">
                            <p>American Structural Columns can be specified according to applicable ASTM material standards and AISC requirements, depending on the project and engineering specification.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Which ASTM grades are available?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Grades such as ASTM A36, ASTM A572 Grade 50 and ASTM A992 may be considered according to the applicable product specification and project requirements. Exact availability should be confirmed at the time of enquiry.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What sizes of American Structural Columns are available?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Structural Columns are available in different AISC designations, section depths, flange widths and thicknesses. Actual availability depends on the applicable AISC section tables and Moksh Tubes & Fittings LLP's current product range.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Can American Structural Columns be supplied in custom lengths?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Yes. Standard and cut-to-length requirements can be considered depending on product availability and customer specifications.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>How do I select the right American Structural Column?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Selection should consider the column designation, axial loading, column height, section properties, dimensions, material grade, stability requirements, connections and applicable ASTM / AISC specifications.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Can Moksh Tubes & Fittings LLP supply American Structural Columns in bulk?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Yes. Moksh Tubes & Fittings LLP can support bulk and project-based requirements, subject to product availability and agreed specifications.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What information is required for a quotation?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Customers should provide the column designation, section size, dimensions, ASTM grade, required length, quantity and applicable AISC requirements. Project drawings or technical specifications can also be shared.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Can American Structural Columns be used with other American structural sections?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Yes. They can be used with American Structural Angles, Channels, Beams and Hollow Structural Sections (HSS) to create complete steel building frameworks and fabricated assemblies.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Does Moksh Tubes & Fittings LLP support international enquiries?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Yes. International enquiries for American Structural Columns can be discussed based on the required ASTM specification, column section, dimensions, quantity and delivery requirements.</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec-padd-top sec-padd-bottom">
    <div class="container text-center">
        <div class="p-5 border rounded shadow-sm" style="background-color: #174268; color: #fff;">
            <h3 class="fw-bold text-white">Request a Quote</h3>
            <p class="fs-5 mt-3">Looking for American Structural Columns for your construction, industrial, infrastructure or fabrication project?</p>
            <p class="mb-4 text-light">
                Contact <strong>Moksh Tubes & Fittings LLP</strong> for American Structural Column requirements based on your required column designation, section dimensions, ASTM grade, length and quantity.
                <br>
                Share your project specifications, drawings or material requirements with our team to discuss the suitable American Structural Columns for your application.
            </p>
            <a href="{{ route('contact-us') ?? '#' }}" class="btn btn-lg text-white shadow"
                style="background-color:#db7227; border-radius:8px; padding: 12px 30px;">Contact Us Now</a>
        </div>
    </div>
</section>
@endsection