@extends('layouts.master')
@section('title', 'European Hollow Sections | EN Standard SHS, RHS & CHS')
@section('meta_description', 'European Hollow Sections including SHS, RHS and CHS profiles for construction, fabrication, infrastructure and industrial applications. Enquire with Moksh Tubes & Fittings LLP.')
@section('canonical', url()->current())
@section('og_type', 'product')
@section('og_title', 'European Hollow Sections | EN Standard SHS, RHS & CHS')
@section('og_description', 'European Hollow Sections including SHS, RHS and CHS profiles for construction, fabrication, infrastructure and industrial applications. Enquire with Moksh Tubes & Fittings LLP.')
@section('twitter_title', 'European Hollow Sections | EN Standard SHS, RHS & CHS')
@section('twitter_description', 'European Hollow Sections including SHS, RHS and CHS profiles for construction, fabrication, infrastructure and industrial applications. Enquire with Moksh Tubes & Fittings LLP.')

@section('content')
<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image: url({{ asset('assets/images/product/default-bg.jpg') }});">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto text-center">
                <h1 class="page-title">European Hollow Sections – EN Standard HSS, SHS, RHS & CHS</h1>
                <p class="text-center mt-3 px-3 py-2 text-white position-relative" style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                    European Hollow Sections are closed-profile structural steel sections widely used in construction, industrial structures, infrastructure, fabrication and engineering applications. Common profiles include Square Hollow Sections (SHS), Rectangular Hollow Sections (RHS) and Circular Hollow Sections (CHS), selected according to applicable European Standards (EN), material grades and project requirements.<br><br>At <a href="https://mokshtubes.com" class="text-white text-decoration-underline" target="_blank">Moksh Tubes & Fittings LLP</a>, we supply European Hollow Sections according to customer and project requirements, including specified section type, dimensions, wall thickness, material grade, length, quantity and applicable EN specifications.
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
            <h2 class="fw-bold" style="color: #174268;">European Hollow Sections</h2>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="{{ asset('/assets/images/product/default-hollow.jpg') }}" alt="European Hollow Sections" class="img-fluid rounded shadow-sm" loading="lazy">
            </div>
            <div class="col-md-6">
                <p class="fs-6 mb-3 text-justify"><strong>European Hollow Sections</strong> are closed-profile structural steel sections used for structural framing, columns, supports, trusses, bracing and fabricated assemblies.</p>
                <p class="fs-6 mb-2 text-justify">Depending on their geometry, European Hollow Sections are commonly classified as:</p>
                <ul class="mb-3">
                    <li><strong>SHS</strong> – Square Hollow Sections</li>
                    <li><strong>RHS</strong> – Rectangular Hollow Sections</li>
                    <li><strong>CHS</strong> – Circular Hollow Sections</li>
                </ul>
                <strong class="d-block mb-1">Square Hollow Sections (SHS)</strong>
                <p class="fs-6 mb-3 text-justify">SHS have equal outside dimensions on four sides and provide a symmetrical closed profile. They are commonly used for columns, frames, supports, trusses, bracing and fabricated structural assemblies.</p>
                
                <strong class="d-block mb-1">Rectangular Hollow Sections (RHS)</strong>
                <p class="fs-6 mb-3 text-justify">RHS have different outside width and height dimensions. They provide flexibility for structural frameworks and fabricated applications where a rectangular profile is preferred.</p>
                
                <strong class="d-block mb-1">Circular Hollow Sections (CHS)</strong>
                <p class="fs-6 mb-3 text-justify">CHS have a circular closed profile and are commonly used for tubular structures, columns, towers, supports, trusses and engineering applications where a round section is specified.</p>
                
                <p class="fs-6 mb-3 text-justify">European Hollow Sections are specified according to applicable EN standards, with material grades selected according to the required mechanical properties and project specifications. Common structural steel grades may include S235JR, S275JR, S355JR and S355J2, subject to the applicable specification.</p>
                <p class="fs-6 mb-3 text-justify">At Moksh Tubes & Fittings LLP, we support European Hollow Section requirements based on customer drawings, technical specifications and project requirements. Customers can specify the required HSS profile, dimensions, wall thickness, material grade, length and quantity.</p>
                <p class="fs-6 mb-3 text-justify">European Hollow Sections can also be used together with European Structural Angles, Channels, Beams and Columns to create complete steel frameworks and fabricated structural assemblies.</p>
                <p class="fs-6 mb-0 text-justify">For an accurate quotation, customers can provide their required section type, dimensions, wall thickness, grade, length and quantity, along with project drawings or technical documentation where required.</p>
            </div>
        </div>
    </div>
</section>

<!-- Datasheet Download -->
<section class="sec-padd-bottom bg-light">
    <div class="datasheet-download px-4 text-center">
        <h3 class="mb-3" style="color:#174268;">Download European Hollow Sections Datasheet</h3>
        <p class="mb-3">
            Get the complete European Hollow Sections datasheet with chemical composition,
            mechanical properties, heat treatment details, and applications.
            Enter your email to receive the PDF instantly.
        </p>

        <!-- Lead Capture Form -->
        <form id="leadForm" method="POST" action="{{ route('lead.capture') }}" class="mb-3">
            @csrf
            <input type="hidden" name="page_path" value="{{ $slug ?? 'european-hollow-sections' }}">
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
            <p class="text-center">European Hollow Sections are available in different square, rectangular and circular profiles, with varying outside dimensions, wall thicknesses, lengths and structural steel grades according to applicable European Standards (EN) and project specifications.</p>
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
                    <tr><td>Product</td><td>European Hollow Sections</td></tr>
                    <tr><td>Types</td><td>SHS / RHS / CHS</td></tr>
                    <tr><td>Profile</td><td>Square / Rectangular / Circular Closed Section</td></tr>
                    <tr><td>Material</td><td>Structural Steel / Carbon Steel</td></tr>
                    <tr><td>Standards</td><td>Applicable European Standards (EN)</td></tr>
                    <tr><td>Grades</td><td>S235JR / S275JR / S355JR / S355J2 & Other Applicable Grades</td></tr>
                    <tr><td>Outside Dimensions</td><td>Various Standard Sizes</td></tr>
                    <tr><td>Wall Thickness</td><td>As per Selected Section</td></tr>
                    <tr><td>Length</td><td>Standard Lengths / Cut-to-Length</td></tr>
                    <tr><td>Surface</td><td>Mill Finish / As Specified</td></tr>
                    <tr><td>Supply Form</td><td>Individual Sections / Bundles</td></tr>
                    <tr><td>Customization</td><td>Size, Thickness, Grade, Length & Quantity as Required</td></tr>
                    <tr><td>Applications</td><td>Construction, Industrial, Infrastructure, Fabrication & Engineering</td></tr>
                </tbody>
            </table>
        </div>
        
        <div class="row g-4 mt-4">
            <div class="col-md-4">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Square Hollow Sections (SHS)</h4>
                    <p class="mb-0 text-justify">SHS have equal outside dimensions and provide a symmetrical closed profile. They are commonly used for structural columns, frames, supports, trusses and fabricated steel structures.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Rectangular Hollow Sections (RHS)</h4>
                    <p class="mb-0 text-justify">RHS have different outside width and height dimensions. They are suitable for structural frameworks, columns, supports, platforms and fabricated assemblies where a rectangular profile is required.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Circular Hollow Sections (CHS)</h4>
                    <p class="mb-0 text-justify">CHS have a circular closed profile and are commonly used for tubular structures, columns, towers, trusses and engineering applications.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">EN Standards</h4>
                    <p class="mb-0 text-justify">European Hollow Sections should be specified according to the applicable EN standard and project specification. The relevant standard depends on the HSS profile, dimensions, material grade and intended application.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Section Dimensions</h4>
                    <p class="mb-2 text-justify">European Hollow Sections can be specified according to:</p>
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li><i class="bi bi-check2 text-success me-2"></i>Section Type – SHS / RHS / CHS</li>
                                <li><i class="bi bi-check2 text-success me-2"></i>Outside Dimensions or Diameter</li>
                                <li><i class="bi bi-check2 text-success me-2"></i>Wall Thickness</li>
                                <li><i class="bi bi-check2 text-success me-2"></i>Material Grade</li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li><i class="bi bi-check2 text-success me-2"></i>Required Length</li>
                                <li><i class="bi bi-check2 text-success me-2"></i>Quantity</li>
                                <li><i class="bi bi-check2 text-success me-2"></i>Applicable EN Standard</li>
                                <li><i class="bi bi-check2 text-success me-2"></i>Project Specification</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-4">
            <div class="col-md-12">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Supply Requirements</h4>
                    <p class="mb-2 text-center">For an accurate quotation, customers should provide:</p>
                    <div class="row justify-content-center">
                        <div class="col-md-4 col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li><i class="bi bi-check-circle text-success me-2"></i>HSS Type</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Outside Dimensions / Diameter</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Wall Thickness</li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li><i class="bi bi-check-circle text-success me-2"></i>Material Grade</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Required Length</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Quantity</li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li><i class="bi bi-check-circle text-success me-2"></i>Applicable EN Standard</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Project Specification, if applicable</li>
                            </ul>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-center text-muted">Moksh Tubes & Fittings LLP can support standard and project-based requirements for European Hollow Sections, subject to product availability and agreed specifications.</p>
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
                    <tr><td>SHS 20 × 20</td><td>2.0</td><td>1.13</td></tr>
                    <tr><td>SHS 25 × 25</td><td>2.0</td><td>1.45</td></tr>
                    <tr><td>SHS 25 × 25</td><td>2.5</td><td>1.77</td></tr>
                    <tr><td>SHS 30 × 30</td><td>2.0</td><td>1.76</td></tr>
                    <tr><td>SHS 30 × 30</td><td>2.5</td><td>2.16</td></tr>
                    <tr><td>SHS 30 × 30</td><td>3.0</td><td>2.55</td></tr>
                    <tr><td>SHS 40 × 40</td><td>2.0</td><td>2.39</td></tr>
                    <tr><td>SHS 40 × 40</td><td>2.5</td><td>2.96</td></tr>
                    <tr><td>SHS 40 × 40</td><td>3.0</td><td>3.49</td></tr>
                    <tr><td>SHS 40 × 40</td><td>4.0</td><td>4.56</td></tr>
                    <tr><td>SHS 50 × 50</td><td>2.0</td><td>3.01</td></tr>
                    <tr><td>SHS 50 × 50</td><td>2.5</td><td>3.73</td></tr>
                    <tr><td>SHS 50 × 50</td><td>3.0</td><td>4.43</td></tr>
                    <tr><td>SHS 50 × 50</td><td>4.0</td><td>5.80</td></tr>
                    <tr><td>SHS 60 × 60</td><td>2.0</td><td>3.64</td></tr>
                    <tr><td>SHS 60 × 60</td><td>2.5</td><td>4.51</td></tr>
                    <tr><td>SHS 60 × 60</td><td>3.0</td><td>5.36</td></tr>
                    <tr><td>SHS 60 × 60</td><td>4.0</td><td>7.04</td></tr>
                    <tr><td>SHS 70 × 70</td><td>2.0</td><td>4.27</td></tr>
                    <tr><td>SHS 70 × 70</td><td>2.5</td><td>5.29</td></tr>
                    <tr><td>SHS 70 × 70</td><td>3.0</td><td>6.30</td></tr>
                    <tr><td>SHS 70 × 70</td><td>4.0</td><td>8.29</td></tr>
                    <tr><td>SHS 80 × 80</td><td>2.0</td><td>4.89</td></tr>
                    <tr><td>SHS 80 × 80</td><td>2.5</td><td>6.07</td></tr>
                    <tr><td>SHS 80 × 80</td><td>3.0</td><td>7.21</td></tr>
                    <tr><td>SHS 80 × 80</td><td>4.0</td><td>9.49</td></tr>
                    <tr><td>SHS 80 × 80</td><td>5.0</td><td>11.68</td></tr>
                    <tr><td>SHS 90 × 90</td><td>2.0</td><td>5.52</td></tr>
                    <tr><td>SHS 90 × 90</td><td>2.5</td><td>6.84</td></tr>
                    <tr><td>SHS 90 × 90</td><td>3.0</td><td>8.13</td></tr>
                    <tr><td>SHS 90 × 90</td><td>4.0</td><td>10.72</td></tr>
                    <tr><td>SHS 100 × 100</td><td>2.0</td><td>6.15</td></tr>
                    <tr><td>SHS 100 × 100</td><td>2.5</td><td>7.61</td></tr>
                    <tr><td>SHS 100 × 100</td><td>3.0</td><td>9.02</td></tr>
                    <tr><td>SHS 100 × 100</td><td>4.0</td><td>11.90</td></tr>
                    <tr><td>SHS 100 × 100</td><td>5.0</td><td>14.70</td></tr>
                    <tr><td>SHS 120 × 120</td><td>3.0</td><td>10.90</td></tr>
                    <tr><td>SHS 120 × 120</td><td>4.0</td><td>14.43</td></tr>
                    <tr><td>SHS 120 × 120</td><td>5.0</td><td>17.83</td></tr>
                    <tr><td>SHS 120 × 120</td><td>6.0</td><td>21.18</td></tr>
                    <tr><td>SHS 140 × 140</td><td>4.0</td><td>17.00</td></tr>
                    <tr><td>SHS 140 × 140</td><td>5.0</td><td>21.05</td></tr>
                    <tr><td>SHS 140 × 140</td><td>6.0</td><td>25.06</td></tr>
                    <tr><td>SHS 150 × 150</td><td>5.0</td><td>22.61</td></tr>
                    <tr><td>SHS 150 × 150</td><td>6.0</td><td>26.92</td></tr>
                    <tr><td>SHS 150 × 150</td><td>8.0</td><td>35.34</td></tr>
                    <tr><td>SHS 160 × 160</td><td>6.0</td><td>28.80</td></tr>
                    <tr><td>SHS 160 × 160</td><td>8.0</td><td>37.85</td></tr>
                    <tr><td>SHS 180 × 180</td><td>6.0</td><td>32.56</td></tr>
                    <tr><td>SHS 180 × 180</td><td>8.0</td><td>42.85</td></tr>
                    <tr><td>SHS 200 × 200</td><td>6.0</td><td>36.33</td></tr>
                    <tr><td>SHS 200 × 200</td><td>8.0</td><td>47.88</td></tr>
                    <tr><td>SHS 200 × 200</td><td>10.0</td><td>59.16</td></tr>
                    <tr><td>SHS 250 × 250</td><td>8.0</td><td>60.22</td></tr>
                    <tr><td>SHS 250 × 250</td><td>10.0</td><td>74.50</td></tr>
                    <tr><td>SHS 250 × 250</td><td>12.5</td><td>91.90</td></tr>
                    <tr><td>SHS 300 × 300</td><td>10.0</td><td>89.23</td></tr>
                    <tr><td>SHS 300 × 300</td><td>12.5</td><td>110.45</td></tr>
                    <tr><td>SHS 300 × 300</td><td>16.0</td><td>139.30</td></tr>
                    <tr><td>SHS 400 × 400</td><td>12.5</td><td>147.90</td></tr>
                    <tr><td>SHS 400 × 400</td><td>16.0</td><td>188.10</td></tr>
                    <tr><td>SHS 400 × 400</td><td>20.0</td><td>232.60</td></tr>
                </tbody>
            </table>
        </div>

        <h4 class="fw-bold mt-5 mb-3" style="color:#db7227;">RHS – Rectangular Hollow Sections</h4>
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
                    <tr><td>RHS 40 × 20</td><td>2.0</td><td>1.76</td></tr>
                    <tr><td>RHS 40 × 20</td><td>2.5</td><td>2.16</td></tr>
                    <tr><td>RHS 50 × 25</td><td>2.0</td><td>2.39</td></tr>
                    <tr><td>RHS 50 × 25</td><td>2.5</td><td>2.96</td></tr>
                    <tr><td>RHS 60 × 40</td><td>2.0</td><td>3.02</td></tr>
                    <tr><td>RHS 60 × 40</td><td>2.5</td><td>3.73</td></tr>
                    <tr><td>RHS 60 × 40</td><td>3.0</td><td>4.43</td></tr>
                    <tr><td>RHS 80 × 40</td><td>2.0</td><td>3.64</td></tr>
                    <tr><td>RHS 80 × 40</td><td>2.5</td><td>4.51</td></tr>
                    <tr><td>RHS 80 × 40</td><td>3.0</td><td>5.36</td></tr>
                    <tr><td>RHS 80 × 40</td><td>4.0</td><td>7.04</td></tr>
                    <tr><td>RHS 100 × 50</td><td>2.0</td><td>4.89</td></tr>
                    <tr><td>RHS 100 × 50</td><td>2.5</td><td>6.07</td></tr>
                    <tr><td>RHS 100 × 50</td><td>3.0</td><td>7.21</td></tr>
                    <tr><td>RHS 100 × 50</td><td>4.0</td><td>9.49</td></tr>
                    <tr><td>RHS 100 × 50</td><td>5.0</td><td>11.68</td></tr>
                    <tr><td>RHS 120 × 60</td><td>3.0</td><td>8.13</td></tr>
                    <tr><td>RHS 120 × 60</td><td>4.0</td><td>10.72</td></tr>
                    <tr><td>RHS 120 × 60</td><td>5.0</td><td>13.25</td></tr>
                    <tr><td>RHS 120 × 60</td><td>6.0</td><td>15.73</td></tr>
                    <tr><td>RHS 120 × 80</td><td>3.0</td><td>9.08</td></tr>
                    <tr><td>RHS 120 × 80</td><td>4.0</td><td>11.97</td></tr>
                    <tr><td>RHS 120 × 80</td><td>5.0</td><td>14.82</td></tr>
                    <tr><td>RHS 150 × 75</td><td>4.0</td><td>14.43</td></tr>
                    <tr><td>RHS 150 × 75</td><td>5.0</td><td>17.83</td></tr>
                    <tr><td>RHS 150 × 75</td><td>6.0</td><td>21.18</td></tr>
                    <tr><td>RHS 150 × 100</td><td>4.0</td><td>16.32</td></tr>
                    <tr><td>RHS 150 × 100</td><td>5.0</td><td>20.19</td></tr>
                    <tr><td>RHS 150 × 100</td><td>6.0</td><td>24.02</td></tr>
                    <tr><td>RHS 160 × 80</td><td>5.0</td><td>19.73</td></tr>
                    <tr><td>RHS 160 × 80</td><td>6.0</td><td>23.50</td></tr>
                    <tr><td>RHS 200 × 100</td><td>5.0</td><td>22.61</td></tr>
                    <tr><td>RHS 200 × 100</td><td>6.0</td><td>26.92</td></tr>
                    <tr><td>RHS 200 × 100</td><td>8.0</td><td>35.34</td></tr>
                    <tr><td>RHS 200 × 120</td><td>6.0</td><td>28.80</td></tr>
                    <tr><td>RHS 200 × 120</td><td>8.0</td><td>37.85</td></tr>
                    <tr><td>RHS 200 × 150</td><td>6.0</td><td>32.56</td></tr>
                    <tr><td>RHS 200 × 150</td><td>8.0</td><td>42.85</td></tr>
                    <tr><td>RHS 250 × 150</td><td>6.0</td><td>37.27</td></tr>
                    <tr><td>RHS 250 × 150</td><td>8.0</td><td>49.13</td></tr>
                    <tr><td>RHS 250 × 150</td><td>10.0</td><td>60.72</td></tr>
                    <tr><td>RHS 250 × 200</td><td>8.0</td><td>56.67</td></tr>
                    <tr><td>RHS 250 × 200</td><td>10.0</td><td>70.00</td></tr>
                    <tr><td>RHS 250 × 200</td><td>12.5</td><td>86.40</td></tr>
                    <tr><td>RHS 300 × 200</td><td>8.0</td><td>62.96</td></tr>
                    <tr><td>RHS 300 × 200</td><td>10.0</td><td>77.85</td></tr>
                    <tr><td>RHS 300 × 200</td><td>12.5</td><td>96.20</td></tr>
                    <tr><td>RHS 300 × 200</td><td>16.0</td><td>121.70</td></tr>
                    <tr><td>RHS 400 × 200</td><td>10.0</td><td>93.56</td></tr>
                    <tr><td>RHS 400 × 200</td><td>12.5</td><td>115.70</td></tr>
                    <tr><td>RHS 400 × 200</td><td>16.0</td><td>147.00</td></tr>
                </tbody>
            </table>
        </div>

        <h4 class="fw-bold mt-5 mb-3" style="color:#db7227;">CHS – Circular Hollow Sections</h4>
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
                    <tr><td>21.3</td><td>2.0</td><td>0.96</td></tr>
                    <tr><td>26.9</td><td>2.0</td><td>1.23</td></tr>
                    <tr><td>33.7</td><td>2.0</td><td>1.55</td></tr>
                    <tr><td>42.4</td><td>2.0</td><td>1.98</td></tr>
                    <tr><td>48.3</td><td>2.0</td><td>2.27</td></tr>
                    <tr><td>48.3</td><td>2.5</td><td>2.80</td></tr>
                    <tr><td>60.3</td><td>2.0</td><td>2.85</td></tr>
                    <tr><td>60.3</td><td>2.5</td><td>3.49</td></tr>
                    <tr><td>60.3</td><td>3.0</td><td>4.12</td></tr>
                    <tr><td>76.1</td><td>2.0</td><td>3.64</td></tr>
                    <tr><td>76.1</td><td>2.5</td><td>4.50</td></tr>
                    <tr><td>76.1</td><td>3.0</td><td>5.33</td></tr>
                    <tr><td>88.9</td><td>2.5</td><td>5.28</td></tr>
                    <tr><td>88.9</td><td>3.0</td><td>6.26</td></tr>
                    <tr><td>88.9</td><td>4.0</td><td>8.22</td></tr>
                    <tr><td>101.6</td><td>2.5</td><td>6.06</td></tr>
                    <tr><td>101.6</td><td>3.0</td><td>7.20</td></tr>
                    <tr><td>101.6</td><td>4.0</td><td>9.48</td></tr>
                    <tr><td>114.3</td><td>3.0</td><td>8.14</td></tr>
                    <tr><td>114.3</td><td>4.0</td><td>10.72</td></tr>
                    <tr><td>114.3</td><td>5.0</td><td>13.25</td></tr>
                    <tr><td>139.7</td><td>3.0</td><td>10.02</td></tr>
                    <tr><td>139.7</td><td>4.0</td><td>13.21</td></tr>
                    <tr><td>139.7</td><td>5.0</td><td>16.36</td></tr>
                    <tr><td>139.7</td><td>6.0</td><td>19.48</td></tr>
                    <tr><td>168.3</td><td>4.0</td><td>15.99</td></tr>
                    <tr><td>168.3</td><td>5.0</td><td>19.84</td></tr>
                    <tr><td>168.3</td><td>6.0</td><td>23.66</td></tr>
                    <tr><td>193.7</td><td>5.0</td><td>22.92</td></tr>
                    <tr><td>193.7</td><td>6.0</td><td>27.39</td></tr>
                    <tr><td>193.7</td><td>8.0</td><td>36.06</td></tr>
                    <tr><td>219.1</td><td>5.0</td><td>26.00</td></tr>
                    <tr><td>219.1</td><td>6.0</td><td>31.08</td></tr>
                    <tr><td>219.1</td><td>8.0</td><td>40.98</td></tr>
                    <tr><td>244.5</td><td>6.0</td><td>34.75</td></tr>
                    <tr><td>244.5</td><td>8.0</td><td>45.85</td></tr>
                    <tr><td>244.5</td><td>10.0</td><td>56.78</td></tr>
                    <tr><td>273.0</td><td>6.0</td><td>38.92</td></tr>
                    <tr><td>273.0</td><td>8.0</td><td>51.49</td></tr>
                    <tr><td>273.0</td><td>10.0</td><td>63.90</td></tr>
                    <tr><td>273.0</td><td>12.5</td><td>78.92</td></tr>
                    <tr><td>323.9</td><td>8.0</td><td>61.32</td></tr>
                    <tr><td>323.9</td><td>10.0</td><td>75.98</td></tr>
                    <tr><td>323.9</td><td>12.5</td><td>93.77</td></tr>
                    <tr><td>355.6</td><td>8.0</td><td>67.47</td></tr>
                    <tr><td>355.6</td><td>10.0</td><td>83.72</td></tr>
                    <tr><td>355.6</td><td>12.5</td><td>103.30</td></tr>
                    <tr><td>406.4</td><td>10.0</td><td>96.10</td></tr>
                    <tr><td>406.4</td><td>12.5</td><td>118.80</td></tr>
                    <tr><td>406.4</td><td>16.0</td><td>150.90</td></tr>
                    <tr><td>457.2</td><td>10.0</td><td>108.20</td></tr>
                    <tr><td>457.2</td><td>12.5</td><td>133.80</td></tr>
                    <tr><td>457.2</td><td>16.0</td><td>170.00</td></tr>
                    <tr><td>508.0</td><td>10.0</td><td>120.30</td></tr>
                    <tr><td>508.0</td><td>12.5</td><td>148.70</td></tr>
                    <tr><td>508.0</td><td>16.0</td><td>189.20</td></tr>
                    <tr><td>610.0</td><td>12.5</td><td>179.20</td></tr>
                    <tr><td>610.0</td><td>16.0</td><td>228.80</td></tr>
                    <tr><td>610.0</td><td>20.0</td><td>282.80</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<section id="grades" class="sec-padd-top sec-padd-bottom">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Grades Available</h2>
            <p class="text-center pb-3">European Hollow Sections, including SHS, RHS and CHS, can be supplied in different structural steel grades according to applicable European Standards (EN) and project specifications. The selected grade depends on the required mechanical properties, structural loading, section dimensions, wall thickness, fabrication requirements and engineering design.</p>
        </div>
        <p class="text-center mb-4">At Moksh Tubes & Fittings LLP, European Hollow Sections can be sourced according to the customer's specified profile, dimensions, wall thickness, material grade, length, quantity and applicable EN requirements, subject to product availability.</p>
        
        <div class="table-responsive mb-4">
            <h5 class="fw-bold mt-4 mb-3" style="color:#db7227;">Common EN Structural Steel Grades</h5>
            <table class="table table-bordered table-striped text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Grade / Specification</th>
                        <th>Material Type</th>
                        <th>Typical Requirement</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>S235JR</td><td>Non-Alloy Structural Steel</td><td>General structural and fabrication applications</td></tr>
                    <tr><td>S275JR</td><td>Non-Alloy Structural Steel</td><td>Structural applications requiring higher strength</td></tr>
                    <tr><td>S355JR</td><td>Non-Alloy Structural Steel</td><td>Higher-strength structural applications</td></tr>
                    <tr><td>S355J2</td><td>Non-Alloy Structural Steel</td><td>Structural applications requiring specified impact properties</td></tr>
                    <tr><td>Other EN Grades</td><td>Structural Steel</td><td>As per project specification and requirement</td></tr>
                </tbody>
            </table>
        </div>

        <div class="row g-4 mt-4">
            <div class="col-md-3">
                <div class="card p-4 shadow-sm h-100 border-0 bg-light">
                    <h4 class="mb-3 text-center" style="color: #db7227;">S235JR</h4>
                    <p class="mb-0 text-justify">S235JR is a commonly specified European structural steel grade used for general construction, fabrication and engineering applications where the specified material properties meet the project requirements.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-4 shadow-sm h-100 border-0 bg-light">
                    <h4 class="mb-3 text-center" style="color: #db7227;">S275JR</h4>
                    <p class="mb-0 text-justify">S275JR is a structural steel grade with higher specified yield strength than S235-grade steel and can be considered for Hollow Section applications according to the applicable EN specification and project requirements.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-4 shadow-sm h-100 border-0 bg-light">
                    <h4 class="mb-3 text-center" style="color: #db7227;">S355JR</h4>
                    <p class="mb-0 text-justify">S355JR is a higher-strength structural steel grade used for structural applications where increased specified strength is required, subject to the applicable EN specification and engineering design.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-4 shadow-sm h-100 border-0 bg-light">
                    <h4 class="mb-3 text-center" style="color: #db7227;">S355J2</h4>
                    <p class="mb-0 text-justify">S355J2 is a structural steel grade with specified impact properties and can be considered for applications where the project specification requires the relevant mechanical and impact requirements.</p>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-4">
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100 border-0 bg-white shadow-sm border border-secondary border-opacity-25 rounded-3">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Grade Selection</h4>
                    <p class="mb-2">The appropriate grade for a European Hollow Section should be selected based on:</p>
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
                                <li><i class="bi bi-check-circle text-success me-2"></i>Applicable EN standard</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Project specification</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Required impact properties, where applicable</li>
                            </ul>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-justify">Customers should specify the required EN grade, HSS profile, dimensions, wall thickness, length and quantity when submitting an enquiry.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100 border-0 bg-white shadow-sm border border-secondary border-opacity-25 rounded-3">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Material Documentation</h4>
                    <p class="mb-3 text-justify">Where required and agreed at the time of order, applicable material test certificates and supporting documentation can be provided according to the purchase order and project requirements.</p>
                    <div class="alert alert-warning mb-0 border-0 shadow-sm" role="alert">
                        <strong>Note:</strong> Exact grade availability should be confirmed with Moksh Tubes & Fittings LLP before ordering, as availability may vary according to HSS profile, size, wall thickness, specification and project requirements.
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
            <p class="text-center pb-3">European Hollow Sections, including SHS, RHS and CHS, are widely used in construction, industrial structures, infrastructure, fabrication and engineering projects where closed-profile structural steel sections are required for columns, framing, supports, trusses and bracing.</p>
        </div>
        <div class="row g-4 mt-4">
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-building"></i></div>
                    <h5>Building & Construction</h5>
                    <p class="mb-0 text-center">European Hollow Sections are commonly used in building projects for steel building frameworks, structural columns, structural frames, roof structures, supporting members, and bracing systems.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-industry"></i></div>
                    <h5>Industrial Structures</h5>
                    <p class="mb-0 text-center">Hollow sections are suitable for industrial facilities where strong and rigid closed-profile structural members are required. Applications include factory structures, industrial buildings, manufacturing facilities, equipment support structures, platforms, and steel frameworks.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-box-seam"></i></div>
                    <h5>Warehouses & Industrial Sheds</h5>
                    <p class="mb-0 text-center">Square and rectangular hollow sections can be incorporated into warehouse and industrial shed structures for structural frames, columns, roof-support systems, bracing members, and fabricated steel frameworks.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-cone-striped"></i></div>
                    <h5>Infrastructure Projects</h5>
                    <p class="mb-0 text-center">European Hollow Sections can be used in infrastructure and civil engineering projects where the specified EN section and material grade meet the project requirements. Applications include infrastructure frameworks, supporting structures, elevated structures, platforms, and engineering assemblies.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-broadcast"></i></div>
                    <h5>Towers & Tubular Structures</h5>
                    <p class="mb-0 text-center">Circular Hollow Sections (CHS) can be used in tubular structural applications where a round closed profile is specified. Applications include towers, tubular frameworks, structural supports, trusses, and engineering structures.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-tools"></i></div>
                    <h5>Steel Fabrication</h5>
                    <p class="mb-0 text-center">European Hollow Sections are suitable for various fabrication requirements, including structural frames, brackets, supports, trusses, base structures, and fabricated assemblies.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-gear"></i></div>
                    <h5>Machinery & Equipment Structures</h5>
                    <p class="mb-0 text-center">Hollow sections can be incorporated into support frameworks for industrial machinery and equipment, subject to the required structural design and section properties.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-vector-pen"></i></div>
                    <h5>General Engineering Applications</h5>
                    <p class="mb-0 text-center">European Hollow Sections are also used in engineering and fabrication projects requiring square, rectangular or circular closed-profile structural steel sections.</p>
                </div>
            </div>
        </div>
        <p class="text-center mt-4 text-muted">The appropriate HSS profile, dimensions, wall thickness and material grade should always be selected according to the structural design, loading conditions, section properties, applicable EN standard and project specifications.</p>
    </div>
</section>

<section id="uses" class="sec-padd-top sec-padd-bottom">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Uses of European Hollow Sections</h2>
            <p class="text-center mb-2">European Hollow Sections, commonly classified as SHS (Square Hollow Sections), RHS (Rectangular Hollow Sections) and CHS (Circular Hollow Sections), are versatile closed-profile structural steel sections used for columns, framing, supports, trusses, bracing and fabricated assemblies.</p>
        </div>
        <div class="row g-4 mt-4">
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Used for steel structural frameworks in commercial, industrial and construction projects.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Suitable for structural columns and vertical supporting members where SHS, RHS or CHS sections are specified.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Used in industrial sheds and warehouses for structural frames, columns and supporting systems.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Suitable for roof structures and bracing systems according to engineering design requirements.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Used for platforms, walkways and access structures in industrial and engineering facilities.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Suitable for machinery and equipment support structures where the selected hollow section meets the required design criteria.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Used in towers and tubular structures, particularly where Circular Hollow Sections (CHS) are specified.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Suitable for infrastructure and civil engineering projects requiring EN-specified structural steel sections.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Used for fabricated frames, brackets, supports and structural assemblies.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Can be combined with European Structural Angles, Channels, Beams and Columns to create complete steel frameworks.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Available in square, rectangular and circular profiles, providing flexibility for different structural and fabrication requirements.</h5>
                </div>
            </div>
        </div>
        <p class="text-center mt-4 text-muted">The appropriate HSS profile, dimensions, wall thickness and material grade should be selected according to the structural design, loading conditions, section properties, applicable EN standard and project specifications.</p>
    </div>
</section>

<section id="advantages" class="sec-padd-top sec-padd-bottom bg-light">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold text-center" style="color:#174268;">Advantages of European Hollow Sections</h2>
            <p class="text-center mb-2">European Hollow Sections, including SHS, RHS and CHS, provide an efficient and versatile structural steel solution for construction, industrial structures, infrastructure, fabrication and engineering applications.</p>
        </div>
        <div class="row g-4 mt-2">
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                    <h5>Structural Strength & Rigidity</h5>
                    <p class="mb-0 text-center">Closed-profile geometry provides useful structural strength and rigidity when the appropriate section is selected according to engineering design.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-layers"></i></div>
                    <h5>SHS, RHS & CHS Options</h5>
                    <p class="mb-0 text-center">Square, rectangular and circular profiles provide flexibility for different structural and architectural requirements.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-bullseye"></i></div>
                    <h5>Efficient Closed Profile</h5>
                    <p class="mb-0 text-center">The hollow geometry provides a practical solution for columns, frames, trusses, supports and bracing systems.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-building"></i></div>
                    <h5>Wide Application Range</h5>
                    <p class="mb-0 text-center">Suitable for buildings, warehouses, industrial structures, towers, platforms, infrastructure and fabricated assemblies.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-journal-check"></i></div>
                    <h5>EN Grade Options</h5>
                    <p class="mb-0 text-center">Grades such as S235JR, S275JR, S355JR and S355J2 can be considered according to applicable EN specifications and project requirements.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-ui-checks"></i></div>
                    <h5>Standard-Based Selection</h5>
                    <p class="mb-0 text-center">Sections can be selected according to applicable EN standards, dimensions, wall thickness, material grade and engineering requirements.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-bounding-box"></i></div>
                    <h5>Different Size & Thickness Options</h5>
                    <p class="mb-0 text-center">Available in different outside dimensions, diameters and wall thicknesses according to applicable standards and product range.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-vector-pen"></i></div>
                    <h5>Design Flexibility</h5>
                    <p class="mb-0 text-center">SHS, RHS and CHS profiles allow engineers to select suitable sections according to structural configuration, loading and application requirements.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-bricks"></i></div>
                    <h5>Suitable for Structural Columns</h5>
                    <p class="mb-0 text-center">Hollow sections can be used as vertical structural members where the selected section meets the required structural design criteria.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-broadcast"></i></div>
                    <h5>Suitable for Tubular Structures</h5>
                    <p class="mb-0 text-center">CHS profiles can be considered for towers, trusses and other tubular structural applications.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-tools"></i></div>
                    <h5>Fabrication Friendly</h5>
                    <p class="mb-0 text-center">Suitable for common fabrication operations such as cutting, drilling, welding and assembly, subject to applicable material and project specifications.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-box-seam"></i></div>
                    <h5>Project-Based Supply</h5>
                    <p class="mb-0 text-center">Requirements can be specified according to profile, dimensions, wall thickness, grade, length and quantity.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-link"></i></div>
                    <h5>Compatible with Other European Sections</h5>
                    <p class="mb-0 text-center">Can be used with European Structural Angles, Channels, Beams and Columns to create complete steel frameworks.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-globe"></i></div>
                    <h5>Domestic & International Applications</h5>
                    <p class="mb-0 text-center">Suitable for projects requiring structural hollow sections specified to applicable EN requirements.</p>
                </div>
            </div>
        </div>
        <p class="text-center mt-4 text-muted">The appropriate HSS profile, dimensions, wall thickness and material grade should always be selected according to the structural design, loading conditions, section properties, applicable EN standard and project specifications.</p>
    </div>
</section>

<section id="mechanical-properties" class="sec-padd-top sec-padd-bottom">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Mechanical Properties – European Hollow Sections</h2>
        </div>
        <p class="text-center mb-4 text-muted">(Typical minimum values for common EN structural hollow-section grades; values depend on manufacturing standard and material thickness.)</p>
        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle text-center">
                <thead class="table-dark">
                    <tr>
                        <th>Standard / Grade</th>
                        <th>S235JRH</th>
                        <th>S275J0H / S275J2H</th>
                        <th>S355J0H / S355J2H</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>Tensile Strength (MPa), Min.</td><td>360</td><td>430</td><td>510</td></tr>
                    <tr><td>Yield Strength (MPa), ≤16 mm</td><td>235</td><td>275</td><td>355</td></tr>
                    <tr><td>Elongation (%), Min.</td><td>26</td><td>23</td><td>22</td></tr>
                </tbody>
            </table>
        </div>
        <p class="text-center mt-3 text-muted" style="font-size:0.9rem;">For EN 10210 hot-finished sections, yield strength decreases with increasing thickness—for example, S355J2H is 355 MPa up to 16 mm, 345 MPa for >16–40 mm and 335 MPa for >40–63 mm.</p>
    </div>
</section>

<section id="why-choose-us" class="sec-padd-top sec-padd-bottom bg-light">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Why Choose Moksh Tubes & Fittings LLP?</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-center mb-4">Moksh Tubes & Fittings LLP supports customers looking for European Hollow Sections / HSS for construction, industrial, infrastructure, fabrication and engineering requirements. Our supply approach is based on the customer's required HSS profile, dimensions, wall thickness, material grade, length, quantity and applicable EN specifications.</p>
                <div class="row g-4 mt-4">
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-box-seam"></i></div>
                            <h5>Project-Based Sourcing</h5>
                            <p class="mb-0">European Hollow Sections can be sourced according to specific project requirements and technical specifications.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-file-earmark-check"></i></div>
                            <h5>EN Specification Support</h5>
                            <p class="mb-0">Product requirements can be aligned with the applicable European Standard specified by the customer.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-bounding-box-circles"></i></div>
                            <h5>SHS, RHS & CHS Options</h5>
                            <p class="mb-0">Requirements for Square, Rectangular and Circular Hollow Sections can be considered according to specification and product availability.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-boxes"></i></div>
                            <h5>Wide Product Range</h5>
                            <p class="mb-0">Different HSS dimensions, wall thicknesses and structural steel grades can be considered according to customer requirements.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-journal-bookmark"></i></div>
                            <h5>EN Grade Options</h5>
                            <p class="mb-0">Grades such as S235JR, S275JR, S355JR and S355J2 can be considered according to applicable specifications and availability.</p>
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
                            <div class="why-banner-icon"><i class="bi bi-clipboard-check"></i></div>
                            <h5>Specification-Based Supply</h5>
                            <p class="mb-0">Product requirements can be matched with customer drawings, technical specifications and project documentation.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-headset"></i></div>
                            <h5>Technical Support</h5>
                            <p class="mb-0">Assistance with HSS profiles, dimensions, wall thicknesses, material grades, EN specifications and procurement requirements.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-sliders"></i></div>
                            <h5>Custom Requirements</h5>
                            <p class="mb-0">Specific HSS profiles, dimensions, thicknesses, grades, lengths and quantities can be discussed for project requirements.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-building"></i></div>
                            <h5>Suitable for Industrial & Infrastructure Projects</h5>
                            <p class="mb-0">Support for customers sourcing European Hollow Sections for construction, fabrication, industrial and infrastructure applications.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-globe-americas"></i></div>
                            <h5>International Project Support</h5>
                            <p class="mb-0">Suitable for customers requiring European-standard HSS for domestic and international projects.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-calendar-check"></i></div>
                            <h5>Reliable Supply Coordination</h5>
                            <p class="mb-0">Focus on product availability, order coordination and delivery requirements according to agreed specifications.</p>
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
            <h2 class="fw-bold" style="color: #174268;">FAQ – European Hollow Sections</h2>
        </div>
        <div class="row mt-4">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="accordion-box">
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What are European Hollow Sections?</h4>
                        </div>
                        <div class="accord-content">
                            <p>European Hollow Sections are closed-profile structural steel sections specified according to applicable European Standards (EN). They are widely used in construction, industrial structures, infrastructure, fabrication and engineering applications.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What are the main types of European Hollow Sections?</h4>
                        </div>
                        <div class="accord-content">
                            <p>The main profiles are SHS (Square Hollow Sections), RHS (Rectangular Hollow Sections) and CHS (Circular Hollow Sections).</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What are Square Hollow Sections (SHS) used for?</h4>
                        </div>
                        <div class="accord-content">
                            <p>SHS are commonly used for structural columns, frames, supports, trusses, bracing and fabricated steel structures where a symmetrical closed profile is required.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What are Rectangular Hollow Sections (RHS) used for?</h4>
                        </div>
                        <div class="accord-content">
                            <p>RHS are used for structural frameworks, columns, supports, platforms and fabricated assemblies where rectangular dimensions are preferred.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What are Circular Hollow Sections (CHS) used for?</h4>
                        </div>
                        <div class="accord-content">
                            <p>CHS are commonly used for tubular structures, columns, towers, trusses, supports and engineering applications where a circular profile is specified.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Which standards apply to European Hollow Sections?</h4>
                        </div>
                        <div class="accord-content">
                            <p>European Hollow Sections can be specified according to applicable European Standards (EN) and the requirements stated in the project specification.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Which EN grades are available?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Grades such as S235JR, S275JR, S355JR and S355J2 may be considered according to the applicable EN specification and project requirements. Exact availability should be confirmed at the time of enquiry.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What sizes of European Hollow Sections are available?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Hollow Sections are available in different outside dimensions, diameters and wall thicknesses. Actual availability depends on the applicable EN section tables and Moksh Tubes & Fittings LLP's current product range.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Can European Hollow Sections be supplied in custom lengths?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Yes. Standard and cut-to-length requirements can be considered depending on product availability and customer specifications.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>How do I select the right Hollow Section?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Selection should consider the profile, dimensions, wall thickness, loading conditions, section properties, material grade, connection requirements and applicable EN standards.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Can Moksh Tubes & Fittings LLP supply European Hollow Sections in bulk?</h4>
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
                            <p>Customers should provide the HSS type, outside dimensions or diameter, wall thickness, EN grade, required length and quantity. Project drawings or technical specifications can also be shared.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Can European Hollow Sections be used with other European structural sections?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Yes. They can be used with European Structural Angles, Channels, Beams and Columns to create complete steel frameworks and fabricated assemblies.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Does Moksh Tubes & Fittings LLP support international enquiries?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Yes. International enquiries for European Hollow Sections can be discussed based on the required EN specification, HSS profile, dimensions, quantity and delivery requirements.</p>
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
            <p class="fs-5 mt-3">Looking for European Hollow Sections / HSS for your construction, industrial, infrastructure or fabrication project?</p>
            <p class="mb-4 text-light">
                Contact <strong>Moksh Tubes & Fittings LLP</strong> for European Hollow Section requirements based on your required HSS profile, dimensions, wall thickness, EN grade, length and quantity.<br>
                Share your project specifications, drawings or material requirements with our team to discuss the suitable European Hollow Sections for your application.
            </p>
            <a href="{{ route('contact-us') ?? '#' }}" class="btn btn-lg text-white shadow"
                style="background-color:#db7227; border-radius:8px; padding: 12px 30px;">Contact Us Now</a>
            <p class="mt-4 mb-0 text-light opacity-75">📞 Contact Moksh Tubes & Fittings LLP at +91 97695 84950 for product availability, technical specifications and quotation enquiries.</p>
        </div>
    </div>
</section>

@endsection
