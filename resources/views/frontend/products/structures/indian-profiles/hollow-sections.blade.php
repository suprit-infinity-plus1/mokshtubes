@extends('layouts.master')
@section('title', 'Indian Hollow Sections | SHS, RHS & CHS Supplier')
@section('meta_description', 'Indian Hollow Sections including SHS, RHS and CHS for construction, fabrication, infrastructure and industrial applications. Enquire with Moksh Tubes & Fittings LLP.')
@section('canonical', url()->current())
@section('og_type', 'product')
@section('og_title', 'Indian Hollow Sections | SHS, RHS & CHS Supplier')
@section('og_description', 'Indian Hollow Sections including SHS, RHS and CHS for construction, fabrication, infrastructure and industrial applications. Enquire with Moksh Tubes & Fittings LLP.')
@section('twitter_title', 'Indian Hollow Sections | SHS, RHS & CHS Supplier')
@section('twitter_description', 'Indian Hollow Sections including SHS, RHS and CHS for construction, fabrication, infrastructure and industrial applications. Enquire with Moksh Tubes & Fittings LLP.')

@section('content')
<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image: url({{ asset('assets/images/product/default-bg.jpg') }});">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto text-center">
                <h1 class="page-title">Indian Hollow Sections – IS Standard SHS, RHS & CHS</h1>
                <p class="text-center mt-3 px-3 py-2 text-white position-relative" style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                    Indian Hollow Sections are structural steel sections with a hollow cross-section, commonly supplied in Square Hollow Sections (SHS), Rectangular Hollow Sections (RHS), and Circular Hollow Sections (CHS). They are widely used in construction, structural fabrication, industrial frameworks, infrastructure, machinery structures and general engineering applications.<br><br>At <a href="https://mokshtubes.com" class="text-white text-decoration-underline" target="_blank">Moksh Tubes & Fittings LLP</a>, we supply Indian Hollow Sections according to customer and project requirements, including specified section type, dimensions, wall thickness, material grade, length, quantity and applicable standards.
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
        <a href="#why-choose-us">Why Choose Us</a> |
        <a href="#faq">FAQ</a>
    </div>
</div>

<section id="overview" class="sec-padd-top sec-padd-bottom bg-light">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Indian Hollow Sections</h2>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="https://placehold.co/550x350" alt="Indian Hollow Sections" class="img-fluid rounded shadow-sm" loading="lazy">
            </div>
            <div class="col-md-6">
                <p class="fs-6 mb-3 text-justify"><strong>Indian Hollow Sections</strong> are structural steel profiles manufactured with a hollow internal section. Their closed-profile geometry provides a practical combination of strength, rigidity and structural efficiency, making them suitable for a wide range of structural and fabrication applications.</p>
                <p class="fs-6 mb-3 text-justify">Indian Hollow Sections are commonly classified into Square Hollow Sections (SHS), Rectangular Hollow Sections (RHS), and Circular Hollow Sections (CHS). Each profile offers different dimensional and structural characteristics and can be selected according to the requirements of the application and engineering design.</p>
                <p class="fs-6 mb-3 text-justify">SHS and RHS are widely considered for steel frameworks, building structures, industrial sheds, platforms, supports, frames and fabricated assemblies, while CHS can be used in structural frameworks, tubular structures, supports and other engineering applications.</p>
                <p class="fs-6 mb-3 text-justify">At Moksh Tubes & Fittings LLP, we support Indian Hollow Section requirements based on the customer's required profile, outside dimensions, wall thickness, material grade, length, quantity and applicable Indian Standard.</p>
                <p class="fs-6 mb-3 text-justify">Indian Hollow Sections can also be combined with structural angles, channels, beams and columns to create complete steel frameworks and fabricated structural assemblies.</p>
                <p class="fs-6 mb-0 text-justify">For an accurate quotation, customers can provide their required hollow section type, dimensions, wall thickness, grade, length, quantity and applicable standard, along with project drawings or technical specifications where required.</p>
            </div>
        </div>
    </div>
</section>

<!-- Datasheet Download -->
<section class="sec-padd-bottom bg-light">
    <div class="datasheet-download px-4 text-center">
        <h3 class="mb-3" style="color:#174268;">Download Indian Hollow Sections Datasheet</h3>
        <p class="mb-3">
            Get the complete Indian Hollow Sections datasheet with chemical composition,
            mechanical properties, heat treatment details, and applications.
            Enter your email to receive the PDF instantly.
        </p>

        <!-- Lead Capture Form -->
        <form id="leadForm" method="POST" action="{{ route('lead.capture') }}" class="mb-3">
            @csrf
            <input type="hidden" name="page_path" value="{{ $slug ?? 'indian-hollow-sections' }}">
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
            <p class="text-center">Indian Hollow Sections are available in Square Hollow Sections (SHS), Rectangular Hollow Sections (RHS), and Circular Hollow Sections (CHS) with different dimensions, wall thicknesses, lengths and material grades according to applicable Indian Standards and project requirements.</p>
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
                    <tr><td>Product</td><td>Indian Hollow Sections</td></tr>
                    <tr><td>Types</td><td>Square Hollow Sections (SHS), Rectangular Hollow Sections (RHS), Circular Hollow Sections (CHS)</td></tr>
                    <tr><td>Material</td><td>Structural Steel / Carbon Steel</td></tr>
                    <tr><td>Profile</td><td>Square / Rectangular / Circular Hollow Section</td></tr>
                    <tr><td>Standards</td><td>Applicable Indian Standards / Project Specifications</td></tr>
                    <tr><td>Grades</td><td>As per applicable material specification</td></tr>
                    <tr><td>Outside Dimensions</td><td>Various standard sizes</td></tr>
                    <tr><td>Wall Thickness</td><td>As per selected section and specification</td></tr>
                    <tr><td>Length</td><td>Standard Lengths / Cut-to-Length</td></tr>
                    <tr><td>Surface</td><td>Mill Finish / As Specified</td></tr>
                    <tr><td>Supply Form</td><td>Individual Sections / Bundles</td></tr>
                    <tr><td>Customization</td><td>Size, thickness, length and grade as required</td></tr>
                    <tr><td>Applications</td><td>Construction, Fabrication, Infrastructure, Industrial & Engineering Applications</td></tr>
                </tbody>
            </table>
        </div>
        
        <div class="row g-4 mt-4">
            <div class="col-md-4">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Square Hollow Sections (SHS)</h4>
                    <p class="mb-0 text-justify">Square Hollow Sections have a square-shaped closed profile with equal external dimensions on all four sides. They are commonly selected for structural frameworks, supports, frames and fabricated steel structures where a symmetrical hollow section is required.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Rectangular Hollow Sections (RHS)</h4>
                    <p class="mb-0 text-justify">Rectangular Hollow Sections have a rectangular closed profile with different width and height dimensions. They provide flexibility for structural designs where the available space or required section geometry calls for a rectangular profile.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Circular Hollow Sections (CHS)</h4>
                    <p class="mb-0 text-justify">Circular Hollow Sections have a round closed profile and are commonly used in tubular structures, supports, frameworks and engineering applications where a circular structural section is specified.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Dimensional Availability</h4>
                    <p class="mb-2 text-justify">Indian Hollow Sections can be specified according to:</p>
                    <div class="row">
                        <div class="col-6">
                            <ul class="list-unstyled mb-0">
                                <li><i class="bi bi-check2 text-success me-2"></i>Section Type – SHS / RHS / CHS</li>
                                <li><i class="bi bi-check2 text-success me-2"></i>Outside Dimensions</li>
                                <li><i class="bi bi-check2 text-success me-2"></i>Wall Thickness</li>
                                <li><i class="bi bi-check2 text-success me-2"></i>Material Grade</li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="list-unstyled mb-0">
                                <li><i class="bi bi-check2 text-success me-2"></i>Required Length</li>
                                <li><i class="bi bi-check2 text-success me-2"></i>Quantity</li>
                                <li><i class="bi bi-check2 text-success me-2"></i>Applicable Standard</li>
                                <li><i class="bi bi-check2 text-success me-2"></i>Project Specification</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Length Availability</h4>
                    <p class="mb-0 text-justify">Hollow Sections can be considered in standard lengths or cut-to-length requirements, depending on product availability and customer specifications.</p>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-4">
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Material & Grade</h4>
                    <p class="mb-0 text-justify">The material grade is selected according to the applicable Indian Standard and project specification. Customers can specify the required grade along with the hollow section type, dimensions and wall thickness.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Supply Requirements</h4>
                    <p class="mb-2 text-justify">For an accurate quotation, customers should provide the required section type, dimensions, wall thickness, material grade, length and quantity. Project drawings or technical specifications can also be shared where applicable.</p>
                    <p class="mb-0 text-justify">Moksh Tubes & Fittings LLP can support standard and project-based requirements for Indian Hollow Sections, subject to product availability and agreed specifications.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="size-chart" class="sec-padd-top sec-padd-bottom bg-light">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Size & Weight Chart</h2>
            <p class="text-center">Indian Hollow Sections – IS Standard SHS, RHS & CHS</p>
        </div>
        
        <h4 class="fw-bold mt-4 mb-3" style="color:#db7227;">SHS Size & Weight Chart</h4>
        <div class="table-responsive mb-5">
            <table class="table table-bordered table-striped text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Section Size (mm)</th>
                        <th>Thickness (mm)</th>
                        <th>Weight (kg/m)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>20 × 20</td><td>2.0</td><td>1.12</td></tr>
                    <tr><td>25 × 25</td><td>2.0</td><td>1.43</td></tr>
                    <tr><td>25 × 25</td><td>2.5</td><td>1.73</td></tr>
                    <tr><td>30 × 30</td><td>2.0</td><td>1.74</td></tr>
                    <tr><td>30 × 30</td><td>2.5</td><td>2.12</td></tr>
                    <tr><td>30 × 30</td><td>3.0</td><td>2.48</td></tr>
                    <tr><td>40 × 40</td><td>2.0</td><td>2.37</td></tr>
                    <tr><td>40 × 40</td><td>2.5</td><td>2.91</td></tr>
                    <tr><td>40 × 40</td><td>3.0</td><td>3.43</td></tr>
                    <tr><td>50 × 50</td><td>2.0</td><td>2.99</td></tr>
                    <tr><td>50 × 50</td><td>2.5</td><td>3.67</td></tr>
                    <tr><td>50 × 50</td><td>3.0</td><td>4.34</td></tr>
                    <tr><td>50 × 50</td><td>4.0</td><td>5.68</td></tr>
                    <tr><td>60 × 60</td><td>2.0</td><td>3.61</td></tr>
                    <tr><td>60 × 60</td><td>2.5</td><td>4.44</td></tr>
                    <tr><td>60 × 60</td><td>3.0</td><td>5.27</td></tr>
                    <tr><td>60 × 60</td><td>4.0</td><td>6.91</td></tr>
                    <tr><td>72 × 72</td><td>2.0</td><td>4.34</td></tr>
                    <tr><td>72 × 72</td><td>2.5</td><td>5.35</td></tr>
                    <tr><td>72 × 72</td><td>3.0</td><td>6.35</td></tr>
                    <tr><td>72 × 72</td><td>4.0</td><td>8.34</td></tr>
                    <tr><td>75 × 75</td><td>2.0</td><td>4.53</td></tr>
                    <tr><td>75 × 75</td><td>2.5</td><td>5.58</td></tr>
                    <tr><td>75 × 75</td><td>3.0</td><td>6.62</td></tr>
                    <tr><td>75 × 75</td><td>4.0</td><td>8.70</td></tr>
                    <tr><td>80 × 80</td><td>2.0</td><td>4.86</td></tr>
                    <tr><td>80 × 80</td><td>2.5</td><td>5.98</td></tr>
                    <tr><td>80 × 80</td><td>3.0</td><td>7.10</td></tr>
                    <tr><td>80 × 80</td><td>4.0</td><td>9.33</td></tr>
                    <tr><td>90 × 90</td><td>2.0</td><td>5.48</td></tr>
                    <tr><td>90 × 90</td><td>2.5</td><td>6.76</td></tr>
                    <tr><td>90 × 90</td><td>3.0</td><td>8.03</td></tr>
                    <tr><td>90 × 90</td><td>4.0</td><td>10.57</td></tr>
                    <tr><td>100 × 100</td><td>2.0</td><td>6.11</td></tr>
                    <tr><td>100 × 100</td><td>2.5</td><td>7.54</td></tr>
                    <tr><td>100 × 100</td><td>3.0</td><td>8.96</td></tr>
                    <tr><td>100 × 100</td><td>4.0</td><td>11.82</td></tr>
                    <tr><td>100 × 100</td><td>5.0</td><td>14.61</td></tr>
                    <tr><td>110 × 110</td><td>3.0</td><td>9.90</td></tr>
                    <tr><td>110 × 110</td><td>4.0</td><td>13.08</td></tr>
                    <tr><td>110 × 110</td><td>5.0</td><td>16.19</td></tr>
                    <tr><td>120 × 120</td><td>3.0</td><td>10.84</td></tr>
                    <tr><td>120 × 120</td><td>4.0</td><td>14.34</td></tr>
                    <tr><td>120 × 120</td><td>5.0</td><td>17.77</td></tr>
                    <tr><td>125 × 125</td><td>3.0</td><td>11.31</td></tr>
                    <tr><td>125 × 125</td><td>4.0</td><td>14.97</td></tr>
                    <tr><td>125 × 125</td><td>5.0</td><td>18.56</td></tr>
                    <tr><td>150 × 150</td><td>4.0</td><td>18.12</td></tr>
                    <tr><td>150 × 150</td><td>5.0</td><td>22.50</td></tr>
                    <tr><td>150 × 150</td><td>6.0</td><td>26.82</td></tr>
                    <tr><td>200 × 200</td><td>5.0</td><td>30.04</td></tr>
                    <tr><td>200 × 200</td><td>6.0</td><td>35.90</td></tr>
                    <tr><td>200 × 200</td><td>8.0</td><td>47.42</td></tr>
                    <tr><td>250 × 250</td><td>6.0</td><td>45.08</td></tr>
                    <tr><td>250 × 250</td><td>8.0</td><td>59.63</td></tr>
                    <tr><td>250 × 250</td><td>10.0</td><td>73.98</td></tr>
                    <tr><td>300 × 300</td><td>8.0</td><td>71.84</td></tr>
                    <tr><td>300 × 300</td><td>10.0</td><td>89.23</td></tr>
                    <tr><td>300 × 300</td><td>12.0</td><td>106.38</td></tr>
                </tbody>
            </table>
        </div>

        <h4 class="fw-bold mt-5 mb-3" style="color:#db7227;">RHS Size & Weight Chart</h4>
        <div class="table-responsive mb-5">
            <table class="table table-bordered table-striped text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Section Size (mm)</th>
                        <th>Thickness (mm)</th>
                        <th>Weight (kg/m)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>40 × 20</td><td>2.0</td><td>1.74</td></tr>
                    <tr><td>40 × 20</td><td>2.5</td><td>2.12</td></tr>
                    <tr><td>50 × 25</td><td>2.0</td><td>2.37</td></tr>
                    <tr><td>50 × 25</td><td>2.5</td><td>2.91</td></tr>
                    <tr><td>60 × 40</td><td>2.0</td><td>3.00</td></tr>
                    <tr><td>60 × 40</td><td>2.5</td><td>3.68</td></tr>
                    <tr><td>60 × 40</td><td>3.0</td><td>4.34</td></tr>
                    <tr><td>75 × 40</td><td>2.0</td><td>3.46</td></tr>
                    <tr><td>75 × 40</td><td>2.5</td><td>4.24</td></tr>
                    <tr><td>75 × 40</td><td>3.0</td><td>5.01</td></tr>
                    <tr><td>80 × 40</td><td>2.0</td><td>3.61</td></tr>
                    <tr><td>80 × 40</td><td>2.5</td><td>4.44</td></tr>
                    <tr><td>80 × 40</td><td>3.0</td><td>5.27</td></tr>
                    <tr><td>100 × 50</td><td>2.0</td><td>4.86</td></tr>
                    <tr><td>100 × 50</td><td>2.5</td><td>5.98</td></tr>
                    <tr><td>100 × 50</td><td>3.0</td><td>7.10</td></tr>
                    <tr><td>100 × 50</td><td>4.0</td><td>9.33</td></tr>
                    <tr><td>120 × 60</td><td>3.0</td><td>8.03</td></tr>
                    <tr><td>120 × 60</td><td>4.0</td><td>10.57</td></tr>
                    <tr><td>120 × 60</td><td>5.0</td><td>13.08</td></tr>
                    <tr><td>125 × 75</td><td>3.0</td><td>8.96</td></tr>
                    <tr><td>125 × 75</td><td>4.0</td><td>11.82</td></tr>
                    <tr><td>125 × 75</td><td>5.0</td><td>14.61</td></tr>
                    <tr><td>150 × 75</td><td>4.0</td><td>14.34</td></tr>
                    <tr><td>150 × 75</td><td>5.0</td><td>17.77</td></tr>
                    <tr><td>150 × 75</td><td>6.0</td><td>21.16</td></tr>
                    <tr><td>150 × 100</td><td>4.0</td><td>16.00</td></tr>
                    <tr><td>150 × 100</td><td>5.0</td><td>19.84</td></tr>
                    <tr><td>150 × 100</td><td>6.0</td><td>23.64</td></tr>
                    <tr><td>200 × 100</td><td>5.0</td><td>22.68</td></tr>
                    <tr><td>200 × 100</td><td>6.0</td><td>27.09</td></tr>
                    <tr><td>200 × 100</td><td>8.0</td><td>35.72</td></tr>
                    <tr><td>200 × 150</td><td>6.0</td><td>35.57</td></tr>
                    <tr><td>200 × 150</td><td>8.0</td><td>47.01</td></tr>
                    <tr><td>200 × 150</td><td>10.0</td><td>58.25</td></tr>
                    <tr><td>250 × 150</td><td>6.0</td><td>40.28</td></tr>
                    <tr><td>250 × 150</td><td>8.0</td><td>53.27</td></tr>
                    <tr><td>250 × 150</td><td>10.0</td><td>66.05</td></tr>
                    <tr><td>300 × 200</td><td>8.0</td><td>71.84</td></tr>
                    <tr><td>300 × 200</td><td>10.0</td><td>89.23</td></tr>
                    <tr><td>300 × 200</td><td>12.0</td><td>106.38</td></tr>
                    <tr><td>400 × 200</td><td>10.0</td><td>104.94</td></tr>
                    <tr><td>400 × 200</td><td>12.0</td><td>125.33</td></tr>
                    <tr><td>400 × 200</td><td>16.0</td><td>164.79</td></tr>
                </tbody>
            </table>
        </div>

        <h4 class="fw-bold mt-5 mb-3" style="color:#db7227;">CHS Size & Weight Chart</h4>
        <div class="table-responsive mb-5">
            <table class="table table-bordered table-striped text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Outside Diameter (mm)</th>
                        <th>Thickness (mm)</th>
                        <th>Weight (kg/m)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>21.3</td><td>2.0</td><td>0.95</td></tr>
                    <tr><td>26.9</td><td>2.0</td><td>1.21</td></tr>
                    <tr><td>33.7</td><td>2.0</td><td>1.54</td></tr>
                    <tr><td>42.4</td><td>2.0</td><td>1.95</td></tr>
                    <tr><td>48.3</td><td>2.0</td><td>2.23</td></tr>
                    <tr><td>48.3</td><td>2.5</td><td>2.73</td></tr>
                    <tr><td>60.3</td><td>2.0</td><td>2.79</td></tr>
                    <tr><td>60.3</td><td>2.5</td><td>3.43</td></tr>
                    <tr><td>76.1</td><td>2.0</td><td>3.56</td></tr>
                    <tr><td>76.1</td><td>2.5</td><td>4.38</td></tr>
                    <tr><td>76.1</td><td>3.0</td><td>5.19</td></tr>
                    <tr><td>88.9</td><td>2.5</td><td>5.15</td></tr>
                    <tr><td>88.9</td><td>3.0</td><td>6.13</td></tr>
                    <tr><td>101.6</td><td>2.5</td><td>5.90</td></tr>
                    <tr><td>101.6</td><td>3.0</td><td>7.03</td></tr>
                    <tr><td>114.3</td><td>3.0</td><td>7.94</td></tr>
                    <tr><td>114.3</td><td>4.0</td><td>10.47</td></tr>
                    <tr><td>139.7</td><td>3.0</td><td>9.76</td></tr>
                    <tr><td>139.7</td><td>4.0</td><td>12.87</td></tr>
                    <tr><td>139.7</td><td>5.0</td><td>15.95</td></tr>
                    <tr><td>168.3</td><td>4.0</td><td>15.60</td></tr>
                    <tr><td>168.3</td><td>5.0</td><td>19.37</td></tr>
                    <tr><td>168.3</td><td>6.0</td><td>23.11</td></tr>
                    <tr><td>193.7</td><td>4.0</td><td>18.01</td></tr>
                    <tr><td>193.7</td><td>5.0</td><td>22.40</td></tr>
                    <tr><td>193.7</td><td>6.0</td><td>26.75</td></tr>
                    <tr><td>219.1</td><td>5.0</td><td>25.42</td></tr>
                    <tr><td>219.1</td><td>6.0</td><td>30.38</td></tr>
                    <tr><td>219.1</td><td>8.0</td><td>40.10</td></tr>
                    <tr><td>244.5</td><td>6.0</td><td>33.93</td></tr>
                    <tr><td>244.5</td><td>8.0</td><td>44.85</td></tr>
                    <tr><td>273.0</td><td>6.0</td><td>38.04</td></tr>
                    <tr><td>273.0</td><td>8.0</td><td>50.38</td></tr>
                    <tr><td>273.0</td><td>10.0</td><td>62.64</td></tr>
                    <tr><td>323.9</td><td>8.0</td><td>60.27</td></tr>
                    <tr><td>323.9</td><td>10.0</td><td>74.95</td></tr>
                    <tr><td>323.9</td><td>12.0</td><td>89.51</td></tr>
                    <tr><td>355.6</td><td>8.0</td><td>66.30</td></tr>
                    <tr><td>355.6</td><td>10.0</td><td>82.53</td></tr>
                    <tr><td>355.6</td><td>12.0</td><td>98.64</td></tr>
                    <tr><td>406.4</td><td>10.0</td><td>94.50</td></tr>
                    <tr><td>406.4</td><td>12.0</td><td>112.87</td></tr>
                    <tr><td>406.4</td><td>16.0</td><td>149.21</td></tr>
                    <tr><td>457.2</td><td>10.0</td><td>106.50</td></tr>
                    <tr><td>457.2</td><td>12.0</td><td>127.27</td></tr>
                    <tr><td>457.2</td><td>16.0</td><td>168.60</td></tr>
                    <tr><td>508.0</td><td>10.0</td><td>118.49</td></tr>
                    <tr><td>508.0</td><td>12.0</td><td>141.66</td></tr>
                    <tr><td>508.0</td><td>16.0</td><td>187.91</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<section id="grades" class="sec-padd-top sec-padd-bottom">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Grades Available</h2>
            <p class="text-center pb-3">Indian Hollow Sections can be supplied in different structural steel grades according to the applicable Indian Standard and project requirements. The selected grade depends on the intended application, required mechanical properties, structural design, fabrication requirements and project specifications.</p>
        </div>
        <p class="text-center mb-4">At Moksh Tubes & Fittings LLP, Hollow Sections can be sourced according to the customer's specified grade, section type, dimensions, wall thickness, length, quantity and applicable standard, subject to product availability.</p>
        
        <div class="table-responsive mb-4">
            <h5 class="fw-bold mt-4 mb-3" style="color:#db7227;">Structural Steel Grades</h5>
            <table class="table table-bordered table-striped text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Grade / Specification</th>
                        <th>Material Type</th>
                        <th>Typical Requirement</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>IS 2062</td><td>Structural Steel</td><td>General structural and engineering applications</td></tr>
                    <tr><td>E250</td><td>Structural Steel</td><td>General structural and fabrication applications</td></tr>
                    <tr><td>E350</td><td>Structural Steel</td><td>Applications requiring higher specified strength</td></tr>
                    <tr><td>Other Grades</td><td>Structural Steel</td><td>As per project specification and requirement</td></tr>
                </tbody>
            </table>
        </div>

        <div class="row g-4 mt-4">
            <div class="col-md-4">
                <div class="card p-4 shadow-sm h-100 border-0 bg-light">
                    <h4 class="mb-3 text-center" style="color: #db7227;">IS 2062 Structural Steel</h4>
                    <p class="mb-0 text-justify">IS 2062 is an Indian specification for structural steel products used in construction, engineering and fabrication applications. The applicable grade should be selected according to the required mechanical properties and project specification.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 shadow-sm h-100 border-0 bg-light">
                    <h4 class="mb-3 text-center" style="color: #db7227;">E250 Grade</h4>
                    <p class="mb-0 text-justify">E250 structural steel can be considered for general structural applications where the specified mechanical properties meet the requirements of the design. It may be used for structural frameworks, supports, frames and engineering structures.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 shadow-sm h-100 border-0 bg-light">
                    <h4 class="mb-3 text-center" style="color: #db7227;">E350 Grade</h4>
                    <p class="mb-0 text-justify">E350 structural steel provides a higher specified strength level and can be considered for applications requiring increased strength, subject to the applicable specification and engineering design.</p>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-4">
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100 border-0 bg-white shadow-sm border border-secondary border-opacity-25 rounded-3">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Grade Selection</h4>
                    <p class="mb-2">The appropriate grade for an Indian Hollow Section should be selected based on:</p>
                    <div class="row">
                        <div class="col-6">
                            <ul class="list-unstyled mb-0">
                                <li><i class="bi bi-check-circle text-success me-2"></i>Required mechanical properties</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Structural loading</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Section dimensions</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Wall thickness</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Structural design</li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="list-unstyled mb-0">
                                <li><i class="bi bi-check-circle text-success me-2"></i>Fabrication requirements</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Welding requirements</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Applicable Indian Standard</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Project specification</li>
                            </ul>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-justify">Customers should specify the required grade, SHS/RHS/CHS profile, dimensions, wall thickness, length and quantity when submitting an enquiry.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100 border-0 bg-white shadow-sm border border-secondary border-opacity-25 rounded-3">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Material Documentation</h4>
                    <p class="mb-3 text-justify">Where required and agreed at the time of order, applicable material test certificates and supporting documentation can be provided according to the purchase order and project requirements.</p>
                    <div class="alert alert-warning mb-0 border-0 shadow-sm" role="alert">
                        <strong>Note:</strong> Exact grade availability should be confirmed with Moksh Tubes & Fittings LLP before ordering, as availability may vary according to section type, size, wall thickness, specification and project requirements.
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
            <p class="text-center pb-3">Indian Hollow Sections are widely used in construction, structural fabrication, industrial structures, infrastructure and engineering projects where hollow steel sections are required for framing, support, reinforcement and fabricated structures.</p>
        </div>
        <div class="row g-4 mt-4">
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-building"></i></div>
                    <h5>Building & Construction</h5>
                    <p class="mb-0 text-center">SHS and RHS are commonly used in building and construction projects for steel building frameworks, structural frames, roof structures, supporting members, brackets and fabricated components.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-industry"></i></div>
                    <h5>Industrial Structures</h5>
                    <p class="mb-0 text-center">Indian Hollow Sections are suitable for industrial structures where efficient and rigid structural sections are required. Applications include industrial sheds, factory structures, equipment support structures, platforms, walkways and structural frameworks.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-tools"></i></div>
                    <h5>Steel Fabrication</h5>
                    <p class="mb-0 text-center">Hollow sections are widely used in fabrication because their closed profiles can be incorporated into different structural assemblies. Common applications include frames, supports, brackets, fabricated structures, base structures and structural assemblies.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-cone-striped"></i></div>
                    <h5>Infrastructure Projects</h5>
                    <p class="mb-0 text-center">Indian Hollow Sections can be used in infrastructure and civil engineering applications where the specified SHS, RHS or CHS section meets the project requirements. Applications include infrastructure frameworks, supporting structures, platforms, access structures and engineering assemblies.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-gear"></i></div>
                    <h5>Machinery & Equipment Structures</h5>
                    <p class="mb-0 text-center">Hollow sections can be used for fabricated supports and frameworks for industrial machinery and equipment, depending on the required section properties and engineering design.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-circle"></i></div>
                    <h5>Tubular Structures</h5>
                    <p class="mb-0 text-center">Circular Hollow Sections (CHS) are suitable for tubular structural applications where a circular profile is specified. Applications can include tubular frameworks, structural supports, towers and fabricated tubular structures.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-square"></i></div>
                    <h5>Frames & Supports</h5>
                    <p class="mb-0 text-center">Square Hollow Sections (SHS) and Rectangular Hollow Sections (RHS) can be used for structural frames, supports and fabricated assemblies where closed-section profiles are required.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-nut"></i></div>
                    <h5>General Engineering Applications</h5>
                    <p class="mb-0 text-center">Indian Hollow Sections are also used in general engineering and fabrication projects requiring square, rectangular or circular hollow steel profiles.</p>
                </div>
            </div>
        </div>
        <p class="text-center mt-4 text-muted">The appropriate SHS, RHS or CHS section, dimensions, wall thickness and material grade should always be selected according to the structural design, loading conditions, applicable Indian Standard and project specifications.</p>
    </div>
</section>

<section id="uses" class="sec-padd-top sec-padd-bottom">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Uses of Indian Hollow Sections</h2>
            <p class="text-center mb-2">Indian Hollow Sections are versatile structural steel sections used for framing, support, fabrication and structural assemblies across construction, industrial, infrastructure and engineering applications.</p>
        </div>
        <div class="row g-4 mt-4">
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Used for steel structural frameworks in buildings, commercial structures and industrial facilities.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Suitable for fabricated frames and support structures where SHS, RHS or CHS profiles are specified.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Used for industrial sheds, warehouses and factory structures.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Suitable for platforms, walkways and access structures in industrial and engineering facilities.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Used for machinery and equipment support structures according to the required structural design.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Suitable for tubular structures and supporting frameworks, particularly where Circular Hollow Sections are specified.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Used for towers and fabricated structural frameworks where suitable hollow sections are required.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Suitable for infrastructure and civil engineering projects requiring square, rectangular or circular hollow sections.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Used for brackets, supports, base structures and fabricated assemblies.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Can be combined with structural angles, channels, beams and columns to create complete steel frameworks.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Available in SHS, RHS and CHS profiles, providing flexibility for different structural and fabrication requirements.</h5>
                </div>
            </div>
        </div>
        <p class="text-center mt-4 text-muted">The appropriate hollow section should be selected according to the section type, dimensions, wall thickness, material grade, loading conditions, applicable Indian Standard and project specifications.</p>
    </div>
</section>

<section id="advantages" class="sec-padd-top sec-padd-bottom bg-light">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold text-center" style="color:#174268;">Advantages of Indian Hollow Sections</h2>
            <p class="text-center mb-2">Indian Hollow Sections provide an efficient and versatile structural steel solution for construction, fabrication, industrial structures, infrastructure and engineering applications. Their closed-section profiles offer flexibility for different structural and fabricated designs.</p>
        </div>
        <div class="row g-4 mt-2">
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                    <h5>Structural Strength & Rigidity</h5>
                    <p class="mb-0 text-center">Hollow sections provide useful structural strength and rigidity when the appropriate profile and dimensions are selected according to the engineering design.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-layers"></i></div>
                    <h5>SHS, RHS & CHS Options</h5>
                    <p class="mb-0 text-center">Square, rectangular and circular profiles provide flexibility for different structural requirements and applications.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-box"></i></div>
                    <h5>Efficient Structural Profile</h5>
                    <p class="mb-0 text-center">The closed geometry provides a practical section for structural frameworks, supports and fabricated assemblies.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-grid"></i></div>
                    <h5>Wide Application Range</h5>
                    <p class="mb-0 text-center">Suitable for buildings, industrial structures, warehouses, platforms, towers, infrastructure and general engineering.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-tools"></i></div>
                    <h5>Suitable for Fabrication</h5>
                    <p class="mb-0 text-center">SHS, RHS and CHS can be incorporated into fabricated frames, supports, brackets and structural assemblies.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-arrows-expand"></i></div>
                    <h5>Different Size Options</h5>
                    <p class="mb-0 text-center">Hollow sections can be selected in different outside dimensions and wall thicknesses according to the applicable standard and project requirements.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-layout-wtf"></i></div>
                    <h5>Design Flexibility</h5>
                    <p class="mb-0 text-center">Different hollow profiles allow engineers and fabricators to select a suitable section according to the required structural arrangement.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-circle"></i></div>
                    <h5>Suitable for Tubular Structures</h5>
                    <p class="mb-0 text-center">CHS provides a circular profile suitable for tubular frameworks and supporting structures.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-file-earmark-check"></i></div>
                    <h5>Project-Based Supply</h5>
                    <p class="mb-0 text-center">Hollow section requirements can be specified according to profile, dimensions, wall thickness, grade, length and quantity.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-bezier2"></i></div>
                    <h5>Easy Integration</h5>
                    <p class="mb-0 text-center">Hollow sections can be combined with angles, channels, beams and columns in complete steel frameworks.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-list-ol"></i></div>
                    <h5>Standard & Cut-to-Length Options</h5>
                    <p class="mb-0 text-center">Standard or specified lengths can be considered depending on product availability and customer requirements.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-cone-striped"></i></div>
                    <h5>Multiple Structural Applications</h5>
                    <p class="mb-0 text-center">Suitable for construction, industrial fabrication, infrastructure, equipment supports and engineering projects.</p>
                </div>
            </div>
        </div>
        <p class="text-center mt-4 text-muted">The appropriate SHS, RHS or CHS section should always be selected according to the structural design, loading conditions, dimensions, wall thickness, material grade, applicable Indian Standard and project specifications.</p>
    </div>
</section>

<section id="mechanical-properties" class="sec-padd-top sec-padd-bottom">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Mechanical Properties – Indian Hollow Sections</h2>
        </div>
        <p class="text-center mb-4 text-muted">(Typical minimum values as per IS 4923:2017)</p>
        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle text-center">
                <thead class="table-dark">
                    <tr>
                        <th>Standard / Grade</th>
                        <th>YSt 210</th>
                        <th>YSt 240</th>
                        <th>YSt 310</th>
                        <th>YSt 355</th>
                        <th>YSt 420</th>
                        <th>YSt 460</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>Tensile Strength (MPa), Min.</td><td>330</td><td>410</td><td>450</td><td>490</td><td>500</td><td>530</td></tr>
                    <tr><td>Yield Strength (MPa), Min.</td><td>210</td><td>240</td><td>310</td><td>355</td><td>420</td><td>460</td></tr>
                    <tr><td>Elongation (%), Min.</td><td>20</td><td>15</td><td>10</td><td>10</td><td>19</td><td>17</td></tr>
                </tbody>
            </table>
        </div>
        <p class="text-center mt-3 text-muted" style="font-size:0.9rem;">These values are from the amended tensile-property requirements for IS 4923:2017.</p>
    </div>
</section>

<section id="why-choose-us" class="sec-padd-top sec-padd-bottom bg-light">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Why Choose Moksh Tubes & Fittings LLP?</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-center mb-4">Moksh Tubes & Fittings LLP supports customers looking for Indian Hollow Sections for construction, industrial, infrastructure, fabrication and engineering requirements. Our supply approach is based on the customer's required section type, dimensions, wall thickness, grade, length, quantity and applicable specifications.</p>
                <div class="row g-4 mt-4">
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-box-seam"></i></div>
                            <h5>Project-Based Sourcing</h5>
                            <p class="mb-0">Hollow sections can be sourced according to specific project requirements and technical specifications.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-layers"></i></div>
                            <h5>SHS, RHS & CHS Options</h5>
                            <p class="mb-0">Requirements for Square Hollow Sections, Rectangular Hollow Sections and Circular Hollow Sections can be considered according to product availability and specification.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-boxes"></i></div>
                            <h5>Wide Product Range</h5>
                            <p class="mb-0">Different section dimensions, wall thicknesses and grades can be considered according to customer requirements.</p>
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
                            <div class="why-banner-icon"><i class="bi bi-file-earmark-ruled"></i></div>
                            <h5>Specification-Based Supply</h5>
                            <p class="mb-0">Product requirements can be aligned with the applicable Indian Standard and customer's technical specifications.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-headset"></i></div>
                            <h5>Technical Support</h5>
                            <p class="mb-0">Assistance with section dimensions, wall thickness, grades and procurement requirements.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-calendar-check"></i></div>
                            <h5>Reliable Supply Coordination</h5>
                            <p class="mb-0">Focus on product availability, order coordination and delivery requirements.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-shield-check"></i></div>
                            <h5>Quality-Focused Approach</h5>
                            <p class="mb-0">Material requirements are handled according to agreed product specifications and customer requirements.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-sliders"></i></div>
                            <h5>Custom Requirements</h5>
                            <p class="mb-0">Specific profiles, dimensions, wall thicknesses, grades, lengths and quantities can be discussed for project requirements.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-building"></i></div>
                            <h5>Suitable for Industrial & Infrastructure Projects</h5>
                            <p class="mb-0">Support for customers sourcing hollow sections for construction, fabrication, industrial and infrastructure applications.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-globe"></i></div>
                            <h5>Domestic & International Enquiries</h5>
                            <p class="mb-0">Support for customers requiring Indian Hollow Sections for domestic and international project requirements.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="faq" class="sec-padd-top sec-padd-bottom bg-light">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">FAQ – Indian Hollow Sections</h2>
        </div>
        <div class="row mt-4">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="accordion-box">
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What are Indian Hollow Sections?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Indian Hollow Sections are structural steel sections with a closed profile, commonly available as Square Hollow Sections (SHS), Rectangular Hollow Sections (RHS), and Circular Hollow Sections (CHS). They are used in construction, fabrication, industrial structures, infrastructure and engineering applications.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What are the main types of Indian Hollow Sections?</h4>
                        </div>
                        <div class="accord-content">
                            <p>The main types are SHS (Square Hollow Sections), RHS (Rectangular Hollow Sections), and CHS (Circular Hollow Sections).</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What are Square Hollow Sections (SHS) used for?</h4>
                        </div>
                        <div class="accord-content">
                            <p>SHS are commonly used for structural frames, supports, industrial structures, fabricated assemblies and construction applications where a symmetrical square profile is required.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What are Rectangular Hollow Sections (RHS) used for?</h4>
                        </div>
                        <div class="accord-content">
                            <p>RHS are used for structural frameworks, supports, frames, platforms and fabricated structures where rectangular dimensions are preferred.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What are Circular Hollow Sections (CHS) used for?</h4>
                        </div>
                        <div class="accord-content">
                            <p>CHS are commonly used for tubular structures, towers, supports, frameworks and engineering applications where a circular hollow profile is required.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Which standards are applicable to Indian Hollow Sections?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Hollow Sections can be supplied according to the applicable Indian Standard or project specification. The exact standard should be confirmed according to the required section type, grade and application.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Which grades are available for Indian Hollow Sections?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Grades such as IS 2062, E250 and E350 may be considered according to the applicable specification and product availability. Exact grade availability should be confirmed at the time of enquiry.</p>
                        </div>
                    </div>

                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What sizes of Indian Hollow Sections are available?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Hollow Sections are available in different outside dimensions and wall thicknesses. Actual size availability depends on the applicable standard and Moksh Tubes & Fittings LLP's current product range.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Can Indian Hollow Sections be supplied in custom lengths?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Yes. Standard and cut-to-length requirements can be considered depending on product availability and customer specifications.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Where are Indian Hollow Sections commonly used?</h4>
                        </div>
                        <div class="accord-content">
                            <p>They are used in construction, industrial structures, warehouses, steel fabrication, platforms, towers, infrastructure, equipment supports and general engineering applications.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Can Moksh Tubes & Fittings LLP supply Hollow Sections in bulk?</h4>
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
                            <p>Customers should provide the section type (SHS/RHS/CHS), dimensions, wall thickness, material grade, required length, quantity and applicable standard. Project drawings or technical specifications can also be shared where applicable.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Can Hollow Sections be used with other structural steel sections?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Yes. Hollow Sections can be combined with structural angles, channels, beams and columns to create complete steel frameworks and fabricated assemblies.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Does Moksh Tubes & Fittings LLP support international enquiries?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Yes. International enquiries for Indian Hollow Sections can be discussed based on the required profile, dimensions, grade, quantity and delivery requirements.</p>
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
            <p class="fs-5 mt-3">Looking for Indian Hollow Sections for your construction, industrial, infrastructure or fabrication project?</p>
            <p class="mb-4 text-light">
                Contact <strong>Moksh Tubes & Fittings LLP</strong> for Hollow Section requirements based on your required section type, dimensions, wall thickness, grade, length and quantity.<br>
                Share your project specifications, drawings or material requirements with our team to discuss the suitable Indian Hollow Sections for your application.
            </p>
            <a href="{{ route('contact-us') ?? '#' }}" class="btn btn-lg text-white shadow"
                style="background-color:#db7227; border-radius:8px; padding: 12px 30px;">Contact Us Now</a>
            <p class="mt-4 mb-0 text-light opacity-75">📞 Contact Moksh Tubes & Fittings LLP at <a href="tel:+919769584950" class="text-light fw-bold text-decoration-none">+91 97695 84950</a> for product availability, technical specifications and quotation enquiries.</p>
        </div>
    </div>
</section>

@endsection
