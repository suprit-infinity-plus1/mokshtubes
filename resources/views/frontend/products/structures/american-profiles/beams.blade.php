@extends('layouts.master')
@section('title', 'American Structural Beams | ASTM / AISC Steel Beam Supplier')
@section('meta_description', 'American Structural Beams including W-Shapes and structural beam sections for construction, infrastructure, industrial and fabrication applications. Enquire with Moksh Tubes & Fittings LLP.')
@section('canonical', url()->current())
@section('og_type', 'product')
@section('og_title', 'American Structural Beams | ASTM / AISC Steel Beam Supplier')
@section('og_description', 'American Structural Beams including W-Shapes and structural beam sections for construction, infrastructure, industrial and fabrication applications. Enquire with Moksh Tubes & Fittings LLP.')
@section('twitter_title', 'American Structural Beams | ASTM / AISC Steel Beam Supplier')
@section('twitter_description', 'American Structural Beams including W-Shapes and structural beam sections for construction, infrastructure, industrial and fabrication applications. Enquire with Moksh Tubes & Fittings LLP.')

@section('content')
<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image: url({{ asset('assets/images/product/default-bg.jpg') }});">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto text-center">
                <h1 class="page-title">American Structural Beams – ASTM / AISC I Beams & W Shapes</h1>
                <p class="text-center mt-3 px-3 py-2 text-white position-relative" style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                    American Structural Beams are high-strength structural steel sections widely used in construction, industrial buildings, infrastructure, bridges, warehouses, fabrication and engineering projects. Common American beam profiles include I-shaped and W-shaped sections, selected according to structural design, section properties, material grade and project requirements.
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
        <a href="#uses">Uses & Advantages</a> |
        <a href="#mechanical-properties">Mechanical</a> |
        <a href="#why-choose-us">Why Choose Us</a> |
        <a href="#faq">FAQ</a>
    </div>
</div>

<section id="overview" class="sec-padd-top sec-padd-bottom bg-light">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">American Structural Beams</h2>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="https://placehold.co/550x350" alt="American Structural Beams" class="img-fluid rounded shadow-sm" loading="lazy">
            </div>
            <div class="col-md-6">
                <p class="fs-6 mb-3 text-justify"><strong>American Structural Beams</strong> are structural steel members primarily used for load-bearing, framing and support applications in buildings, industrial facilities, infrastructure and engineered steel structures.</p>
                <p class="fs-6 mb-3 text-justify">Their engineered cross-sectional geometry provides the required strength, stiffness and structural efficiency for transferring loads across structural frameworks. The appropriate beam section is selected according to the required span, loading conditions, section properties, connections and engineering design.</p>
                <p class="fs-6 mb-3 text-justify">American Structural Beams commonly include W-shapes (Wide Flange Beams), S-shapes and other structural sections specified according to applicable AISC section standards and ASTM material specifications.</p>
                <p class="fs-6 mb-3 text-justify">W-shape beams are widely used in modern steel construction because their wide flanges provide useful structural properties for beams and columns. Other sections may be selected according to the requirements of a particular structural design.</p>
                <p class="fs-6 mb-3 text-justify">At <a href="{{ route('index') }}">Moksh Tubes & Fittings LLP</a>, we support American Structural Beam requirements based on customer drawings, technical specifications and project requirements. Customers can specify the required beam designation, section size, material grade, length, quantity and applicable ASTM / AISC specification.</p>
                <p class="fs-6 mb-3 text-justify">American Structural Beams can also be used together with American Structural Angles, Channels, Columns and Hollow Structural Sections (HSS) to create complete steel frameworks and fabricated structural assemblies.</p>
                <p class="fs-6 mb-3 text-justify">For an accurate quotation, customers can provide their required beam section, designation, dimensions, material grade, length, quantity and applicable ASTM / AISC requirements, along with project drawings or technical documentation where required.</p>
            </div>
        </div>
    </div>
</section>

<!-- Datasheet Download -->
<section class="sec-padd-bottom bg-light">
    <div class="datasheet-download px-4 text-center">
        <h3 class="mb-3" style="color:#174268;">Download American Structural Beams Datasheet</h3>
        <p class="mb-3">
            Get the complete American Structural Beams datasheet with chemical composition,
            mechanical properties, heat treatment details, and applications.
            Enter your email to receive the PDF instantly.
        </p>

        <!-- Lead Capture Form -->
        <form id="leadForm" method="POST" action="{{ route('lead.capture') }}" class="mb-3">
            @csrf

            <input type="hidden" name="page_path" value="{{ $slug ?? 'american-structural-beams' }}">

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
            <p class="text-center">American Structural Beams are available in different beam designations, section depths, flange widths, web thicknesses, flange thicknesses, lengths and structural steel grades according to applicable ASTM material specifications, AISC requirements and project specifications.</p>
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
                    <tr><td>Product</td><td>American Structural Beams</td></tr>
                    <tr><td>Profile</td><td>W-Shapes / I-Shapes / Structural Beam Sections</td></tr>
                    <tr><td>Material</td><td>Carbon Steel / Structural Steel</td></tr>
                    <tr><td>Types</td><td>W-Shapes, S-Shapes & Other Applicable Structural Sections</td></tr>
                    <tr><td>Standards</td><td>Applicable ASTM Standards / AISC Requirements</td></tr>
                    <tr><td>Grades</td><td>As per applicable ASTM material specification</td></tr>
                    <tr><td>Section Depth</td><td>Various standard sizes</td></tr>
                    <tr><td>Flange Width</td><td>As per selected beam section</td></tr>
                    <tr><td>Web Thickness</td><td>As per selected section</td></tr>
                    <tr><td>Flange Thickness</td><td>As per selected section</td></tr>
                    <tr><td>Length</td><td>Standard Lengths / Cut-to-Length</td></tr>
                    <tr><td>Surface</td><td>Mill Finish / As Specified</td></tr>
                    <tr><td>Supply Form</td><td>Individual Sections / Bundles</td></tr>
                    <tr><td>Customization</td><td>Section, size, grade, length and quantity as required</td></tr>
                    <tr><td>Applications</td><td>Construction, Infrastructure, Industrial, Fabrication & Engineering</td></tr>
                </tbody>
            </table>
        </div>
        
        <div class="row g-4 mt-4">
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">W-Shapes / Wide Flange Beams</h4>
                    <p class="mb-0 text-justify">W-Shapes, commonly known as Wide Flange Beams, have relatively wide flanges and are widely used as structural members in building construction, industrial structures and infrastructure projects.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">S-Shapes</h4>
                    <p class="mb-0 text-justify">S-Shapes are another American structural beam profile that can be specified where the applicable design and project requirements call for this section.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">ASTM Specifications</h4>
                    <p class="mb-0 text-justify">The applicable ASTM material specification depends on the required steel grade and project requirements. Chemical composition, mechanical properties and other material requirements should be confirmed against the applicable ASTM specification.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">AISC Requirements</h4>
                    <p class="mb-0 text-justify">AISC requirements may be used for structural design, section properties and selection of American structural beam sections. The applicable project drawings and engineering specifications should determine the required AISC requirements.</p>
                </div>
            </div>
        </div>
        
        <div class="row g-4 mt-2">
            <div class="col-md-4">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Beam Dimensions</h4>
                    <p class="mb-2">American Structural Beams are generally identified by their beam designation and section dimensions, including:</p>
                    <ul class="list-unstyled mb-0">
                        <li><i class="bi bi-check2 text-success me-2"></i>Overall Section Depth</li>
                        <li><i class="bi bi-check2 text-success me-2"></i>Flange Width</li>
                        <li><i class="bi bi-check2 text-success me-2"></i>Web Thickness</li>
                        <li><i class="bi bi-check2 text-success me-2"></i>Flange Thickness</li>
                        <li><i class="bi bi-check2 text-success me-2"></i>Section Weight</li>
                        <li><i class="bi bi-check2 text-success me-2"></i>Beam Length</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Length Availability</h4>
                    <p class="mb-0 text-justify">Structural beams can be considered in standard lengths or cut-to-length requirements, depending on product availability and customer specifications.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Supply Requirements</h4>
                    <p class="mb-2 text-justify">For an accurate quotation, customers should provide the required beam type / designation, section size, dimensions, material grade, length, quantity and applicable ASTM / AISC specification.</p>
                    <p class="mb-2 text-justify">Project drawings or technical specifications can also be shared where specific structural requirements need to be considered.</p>
                    <p class="mb-0 text-justify">Moksh Tubes & Fittings LLP can support standard and project-based requirements for American Structural Beams, subject to product availability and agreed specifications.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="size-chart" class="sec-padd-top sec-padd-bottom bg-light">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Size & Weight Chart</h2>
        </div>
        
        <h4 class="fw-bold mt-4 mb-3" style="color:#db7227;">W Shapes – American I Beam & Wide Flange</h4>
        <div class="table-responsive mb-5">
            <table class="table table-bordered table-striped text-center align-middle">
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
                    <tr><td>W33×118</td><td>32.91</td><td>11.480</td><td>0.510</td><td>0.710</td><td>118</td></tr>
                    <tr><td>W33×130</td><td>33.10</td><td>11.510</td><td>0.550</td><td>0.815</td><td>130</td></tr>
                    <tr><td>W36×135</td><td>35.85</td><td>11.995</td><td>0.600</td><td>0.825</td><td>135</td></tr>
                    <tr><td>W36×150</td><td>36.74</td><td>12.000</td><td>0.650</td><td>0.890</td><td>150</td></tr>
                </tbody>
            </table>
        </div>

        <h4 class="fw-bold mt-4 mb-3" style="color:#db7227;">S Shapes – American I Beams</h4>
        <div class="table-responsive">
            <table class="table table-bordered table-striped text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Section</th>
                        <th>Depth d (in)</th>
                        <th>Flange Width bf (in)</th>
                        <th>Web Thickness tw (in)</th>
                        <th>Weight (lb/ft)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>S3×5.7</td><td>3.00</td><td>2.330</td><td>0.170</td><td>5.7</td></tr>
                    <tr><td>S4×7.7</td><td>4.00</td><td>2.663</td><td>0.190</td><td>7.7</td></tr>
                    <tr><td>S5×10</td><td>5.00</td><td>3.284</td><td>0.214</td><td>10.0</td></tr>
                    <tr><td>S6×12.5</td><td>6.00</td><td>3.332</td><td>0.230</td><td>12.5</td></tr>
                    <tr><td>S8×18.4</td><td>7.99</td><td>3.941</td><td>0.271</td><td>18.4</td></tr>
                    <tr><td>S10×25.4</td><td>10.00</td><td>4.944</td><td>0.311</td><td>25.4</td></tr>
                    <tr><td>S12×31.8</td><td>12.00</td><td>5.476</td><td>0.377</td><td>31.8</td></tr>
                    <tr><td>S15×42.9</td><td>15.00</td><td>5.640</td><td>0.411</td><td>42.9</td></tr>
                    <tr><td>S18×54.7</td><td>18.00</td><td>6.000</td><td>0.450</td><td>54.7</td></tr>
                    <tr><td>S20×66</td><td>20.00</td><td>6.250</td><td>0.500</td><td>66.0</td></tr>
                    <tr><td>S24×80</td><td>24.00</td><td>7.000</td><td>0.550</td><td>80.0</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<section id="grades" class="sec-padd-top sec-padd-bottom">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Grades Available</h2>
            <p class="text-center pb-3">American Structural Beams can be supplied in different structural steel grades according to applicable ASTM material specifications, AISC requirements and project specifications. The selected grade depends on the required mechanical properties, structural loading, beam section, fabrication requirements and engineering design.</p>
        </div>
        <p class="text-center mb-4">At Moksh Tubes & Fittings LLP, American Structural Beams can be sourced according to the customer's specified beam designation, grade, dimensions, length, quantity and applicable ASTM / AISC requirements, subject to product availability.</p>
        
        <div class="table-responsive mb-4">
            <h5 class="fw-bold mt-4 mb-3" style="color:#db7227;">Common ASTM Structural Steel Grades</h5>
            <table class="table table-bordered table-striped text-center align-middle">
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
            <div class="col-md-4">
                <div class="card p-4 shadow-sm h-100 border-0 bg-light">
                    <h4 class="mb-3 text-center" style="color: #db7227;">ASTM A36</h4>
                    <p class="mb-0 text-justify">ASTM A36 is a widely specified carbon structural steel grade used for general construction, fabrication and engineering applications. It can be considered for structural beam requirements where the specified material properties meet the project requirements.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 shadow-sm h-100 border-0 bg-light">
                    <h4 class="mb-3 text-center" style="color: #db7227;">ASTM A572 Grade 50</h4>
                    <p class="mb-0 text-justify">ASTM A572 Grade 50 is a high-strength low-alloy structural steel specification that can be considered for applications requiring higher specified strength than general-purpose structural steel grades.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 shadow-sm h-100 border-0 bg-light">
                    <h4 class="mb-3 text-center" style="color: #db7227;">ASTM A992</h4>
                    <p class="mb-0 text-justify">ASTM A992 is a structural steel specification commonly associated with structural shapes used in building construction. Its suitability for a particular beam application should be confirmed against the applicable product and project specification.</p>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-4">
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100 border-0 bg-white shadow-sm border border-secondary border-opacity-25 rounded-3">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Grade Selection</h4>
                    <p class="mb-2">The appropriate grade for an American Structural Beam should be selected based on:</p>
                    <div class="row">
                        <div class="col-6">
                            <ul class="list-unstyled mb-0">
                                <li><i class="bi bi-check-circle text-success me-2"></i>Required mechanical properties</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Structural loading</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Beam span</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Section dimensions</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Structural design</li>
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
                    <p class="mt-3 mb-0 text-justify">Customers should specify the required ASTM grade, beam designation, section dimensions, length and quantity when submitting an enquiry.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100 border-0 bg-white shadow-sm border border-secondary border-opacity-25 rounded-3">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Material Documentation</h4>
                    <p class="mb-3 text-justify">Where required and agreed at the time of order, applicable material test certificates and supporting documentation can be provided according to the purchase order and project requirements.</p>
                    <div class="alert alert-warning mb-0 border-0 shadow-sm" role="alert">
                        <strong>Note:</strong> Exact grade availability should be confirmed with Moksh Tubes & Fittings LLP before ordering, as availability may vary according to beam section, size, specification and project requirements.
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
            <p class="text-center pb-3">American Structural Beams are widely used in construction, industrial structures, infrastructure, bridges, warehouses and engineering projects where strong load-bearing and structural framing members are required.</p>
        </div>
        <div class="row g-4 mt-4">
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-building"></i></div>
                    <h5>Building & Construction</h5>
                    <p class="mb-0 text-center">Steel building frameworks, structural frames, roof-support systems, floor-supporting structures, load-bearing members, and commercial and industrial buildings.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-industry"></i></div>
                    <h5>Industrial Structures</h5>
                    <p class="mb-0 text-center">Factory buildings, industrial sheds, manufacturing facilities, equipment support structures, heavy-duty platforms, and steel frameworks.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-shop"></i></div>
                    <h5>Warehouses & Storage Facilities</h5>
                    <p class="mb-0 text-center">Main structural frames, roof structures, supporting members, industrial storage buildings, and steel building frameworks.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-cone-striped"></i></div>
                    <h5>Infrastructure Projects</h5>
                    <p class="mb-0 text-center">Bridge-related structures, infrastructure frameworks, elevated structures, supporting structures, and platforms and access systems.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-distribute-vertical"></i></div>
                    <h5>Bridges & Structural Frameworks</h5>
                    <p class="mb-0 text-center">Depending on the engineering design, structural beams can be used in bridge structures and supporting steel frameworks.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-gear"></i></div>
                    <h5>Heavy Steel Fabrication</h5>
                    <p class="mb-0 text-center">Structural frames, platforms, support structures, industrial assemblies, and heavy-duty fabricated structures.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-tools"></i></div>
                    <h5>Machinery & Equipment Structures</h5>
                    <p class="mb-0 text-center">Support frameworks for industrial machinery, equipment and heavy installations, subject to required structural design.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-nut"></i></div>
                    <h5>General Engineering Applications</h5>
                    <p class="mb-0 text-center">Engineering and fabrication projects requiring rigid, load-bearing structural steel sections.</p>
                </div>
            </div>
        </div>
        <p class="text-center mt-4 text-muted">The appropriate beam designation, dimensions, grade and section should always be selected according to the structural design, loading conditions, span, applicable ASTM specification, AISC requirements and project specifications.</p>
    </div>
</section>

<section id="uses" class="sec-padd-top sec-padd-bottom">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">USES OF AMERICAN STRUCTURAL BEAMS</h2>
            <p class="text-center mb-2">American Structural Beams are widely used as load-bearing and supporting members in construction, industrial structures, infrastructure, fabrication and engineering applications.</p>
        </div>
        
        <div class="row g-4 mt-4 mb-5">
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-building"></i></div>
                    <h5>Used for main structural frameworks in commercial, industrial and building construction.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-hammer"></i></div>
                    <h5>Suitable for roof structures and framing systems where American beam sections are specified.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-shop"></i></div>
                    <h5>Used in warehouses and industrial sheds for supporting roof and building frameworks.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-layers"></i></div>
                    <h5>Suitable for floor-supporting and load-bearing structures according to engineering design.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-arrow-down-up"></i></div>
                    <h5>Used for industrial platforms, elevated structures and supporting frameworks.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-cone-striped"></i></div>
                    <h5>Suitable for bridge-related structures and infrastructure projects where the specified beam section is required.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-tools"></i></div>
                    <h5>Used in machinery and equipment support structures in industrial facilities.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-gear"></i></div>
                    <h5>Suitable for heavy steel fabrication, including structural frames, platforms and support assemblies.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-bounding-box-circles"></i></div>
                    <h5>Used for general engineering and construction applications requiring rigid, load-bearing steel sections.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-box"></i></div>
                    <h5>Can be combined with American Structural Angles, Channels, Columns and Hollow Structural Sections (HSS) to create complete steel frameworks.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                    <h5>Suitable for heavy-duty structural applications where the selected beam section meets the required design and section-property requirements.</h5>
                </div>
            </div>
        </div>
        <p class="text-center mt-4 text-muted">The appropriate beam designation, section dimensions, grade and length should be selected according to the structural design, loading conditions, span requirements, applicable ASTM specification, AISC requirements and project specifications.</p>
    </div>
</section>

<section id="advantages" class="sec-padd-top sec-padd-bottom bg-light">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold text-center" style="color:#174268;">ADVANTAGES OF AMERICAN STRUCTURAL BEAMS</h2>
            <p class="text-center mb-2">American Structural Beams provide a reliable and versatile solution for load-bearing, structural framing and support applications across construction, industrial, infrastructure and engineering projects.</p>
        </div>
        <div class="row g-4 mt-2">
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-diagram-3"></i></div>
                    <h5>High Load-Bearing Capability – Suitable for structural applications requiring strong load-bearing members when the appropriate section is selected according to engineering design.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-square-half"></i></div>
                    <h5>Structural Strength & Rigidity – Beam profiles provide useful strength and rigidity for building and industrial structural frameworks.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-grid"></i></div>
                    <h5>Wide Application Range – Suitable for buildings, warehouses, industrial sheds, infrastructure, bridges, platforms and heavy fabrication.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-collection"></i></div>
                    <h5>W-Shapes & Other Profiles – Different American structural beam profiles can be selected according to project requirements and applicable AISC section specifications.</h5>
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
                    <div class="advantage-icon"><i class="bi bi-file-earmark-check"></i></div>
                    <h5>AISC-Based Section Selection – Beam designations and section properties can be selected according to applicable AISC requirements and engineering design.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-bezier"></i></div>
                    <h5>Efficient Structural Design – Appropriate beam sections can provide effective load distribution and structural support within a designed framework.</h5>
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
                    <div class="advantage-icon"><i class="bi bi-arrows-fullscreen"></i></div>
                    <h5>Different Section Sizes – Available in different depths, flange widths and thicknesses according to applicable AISC section tables and product requirements.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-truck-flatbed"></i></div>
                    <h5>Suitable for Heavy Structures – Appropriate beam sections can be considered for industrial buildings, warehouses, infrastructure and other heavy structural applications.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Project-Based Supply – Beam requirements can be specified according to designation, dimensions, grade, length and quantity.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-boxes"></i></div>
                    <h5>Compatible with Other American Sections – Can be used with American Structural Angles, Channels, Columns and Hollow Structural Sections (HSS) to create complete steel frameworks.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-globe"></i></div>
                    <h5>Domestic & International Applications – Suitable for projects requiring structural steel beams specified to ASTM / AISC requirements.</h5>
                </div>
            </div>
        </div>
        <p class="text-center mt-4 text-muted">The appropriate beam designation and section should always be selected according to the structural design, loading conditions, span, section properties, applicable ASTM specification, AISC requirements and project specifications.</p>
    </div>
</section>

<section id="mechanical-properties" class="sec-padd-top sec-padd-bottom bg-light">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Mechanical Properties</h2>
            <p class="text-center pb-3">Typical minimum values for commonly used ASTM structural steel grades.</p>
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
        <p class="text-center mt-3 text-muted"><small>AISC identifies ASTM A36 as a common specification for channels, while 50-ksi grades such as A572 Grade 50 and A992 can also be used where available and specified appropriately.</small></p>
    </div>
</section>

<section id="why-choose-us" class="sec-padd-top sec-padd-bottom">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Why Choose Moksh Tubes & Fittings LLP?</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p>Moksh Tubes & Fittings LLP supports customers looking for American Structural Beams for construction, industrial, infrastructure, fabrication and engineering requirements. Our supply approach is based on the customer's required beam designation, section dimensions, grade, length, quantity and applicable ASTM / AISC specifications.</p>
                <div class="row g-4 mt-4">
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-box-seam"></i></div>
                            <h5>Project-Based Sourcing</h5>
                            <p class="mb-0">American Structural Beams can be sourced according to specific project requirements and technical specifications.</p>
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
                            <p class="mb-0">Beam section requirements can be considered according to applicable AISC project and engineering requirements.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-diagram-2"></i></div>
                            <h5>W-Shape & Structural Beam Options</h5>
                            <p class="mb-0">Requirements for W-Shapes, S-Shapes and other applicable structural beam sections can be considered according to specification and availability.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-boxes"></i></div>
                            <h5>Wide Product Range</h5>
                            <p class="mb-0">Different beam designations, section dimensions, thicknesses and grades can be considered according to customer requirements.</p>
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
                            <p class="mb-0">Assistance with beam designations, section dimensions, material grades, ASTM specifications and procurement requirements.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-sliders"></i></div>
                            <h5>Custom Requirements</h5>
                            <p class="mb-0">Specific beam sections, dimensions, grades, lengths and quantities can be discussed for project requirements.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-building"></i></div>
                            <h5>Industrial & Infrastructure Projects</h5>
                            <p class="mb-0">Support for customers sourcing American Structural Beams for construction, fabrication, industrial and infrastructure applications.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-globe"></i></div>
                            <h5>International Project Support</h5>
                            <p class="mb-0">Suitable for customers requiring American-specification structural steel beams for domestic and international projects.</p>
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
            <h2 class="fw-bold" style="color: #174268;">FAQ – American Structural Beams</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="accordion-box">
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn active">
                            <h4>What are American Structural Beams?</h4>
                        </div>
                        <div class="accord-content collapsed">
                            <p>American Structural Beams are structural steel sections primarily used for load-bearing, framing and supporting applications in buildings, industrial structures, warehouses, infrastructure and engineering projects.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What types of American Structural Beams are available?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Common American structural beam profiles include W-Shapes (Wide Flange Beams), S-Shapes and other applicable structural sections, depending on the project specification and AISC requirements.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What are W-Shapes or Wide Flange Beams?</h4>
                        </div>
                        <div class="accord-content">
                            <p>W-Shapes, commonly called Wide Flange Beams, have wide flanges and are widely used as structural members in building construction, industrial structures and infrastructure projects.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What are American Structural Beams used for?</h4>
                        </div>
                        <div class="accord-content">
                            <p>They are commonly used in building frameworks, industrial sheds, warehouses, roof structures, bridges, platforms, infrastructure projects and heavy fabrication.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Which standards apply to American Structural Beams?</h4>
                        </div>
                        <div class="accord-content">
                            <p>American Structural Beams can be specified according to applicable ASTM material standards and AISC requirements, depending on the project and engineering specification.</p>
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
                            <h4>What sizes of American Structural Beams are available?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Structural Beams are available in different beam designations, section depths, flange widths and thicknesses. Actual section availability depends on the applicable AISC section tables and Moksh Tubes & Fittings LLP's current product range.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Can American Structural Beams be supplied in custom lengths?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Yes. Standard and cut-to-length requirements can be considered depending on product availability and customer specifications.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>How do I select the right American Structural Beam?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Selection should consider the beam designation, span, loading conditions, section properties, dimensions, material grade, connection requirements and applicable ASTM / AISC specifications.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Can Moksh Tubes & Fittings LLP supply American Structural Beams in bulk?</h4>
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
                            <p>Customers should provide the beam designation, section size, dimensions, ASTM grade, required length, quantity and applicable AISC requirements. Project drawings or technical specifications can also be shared.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Can American Structural Beams be used with other American structural sections?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Yes. They can be used with American Structural Angles, Channels, Columns and Hollow Structural Sections (HSS) to create complete steel frameworks and fabricated assemblies.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Does Moksh Tubes & Fittings LLP support international enquiries?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Yes. International enquiries for American Structural Beams can be discussed based on the required ASTM specification, beam section, dimensions, quantity and delivery requirements.</p>
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
            <p class="fs-5 mt-3">Looking for American Structural Beams for your construction, industrial, infrastructure or fabrication project?</p>
            <p class="mb-4 text-light">
                Contact <strong>Moksh Tubes & Fittings LLP</strong> for American Structural Beam requirements based on your required beam designation, section dimensions, ASTM grade, length and quantity.<br>
                Share your project specifications, drawings or material requirements with our team to discuss the suitable American Structural Beams for your application.
            </p>
            <a href="{{ route('contact-us') ?? '#' }}" class="btn btn-lg text-white shadow"
                style="background-color:#db7227; border-radius:8px; padding: 12px 30px;">Contact Us Now</a>
            <p class="mt-4 mb-0 text-light opacity-75">📞 Contact Moksh Tubes & Fittings LLP at <a href="tel:+919769584950" class="text-light fw-bold text-decoration-none">+91 97695 84950</a> for product availability, technical specifications and quotation enquiries.</p>
        </div>
    </div>
</section>
@endsection
