@extends('layouts.master')
@section('title', 'European Structural Angles | EN Standard Steel Angle Supplier')
@section('meta_description', 'European Structural Angles in equal and unequal leg profiles for construction, fabrication, infrastructure and industrial applications. Enquire with Moksh Tubes & Fittings LLP.')
@section('canonical', url()->current())
@section('og_type', 'product')
@section('og_title', 'European Structural Angles | EN Standard Steel Angle Supplier')
@section('og_description', 'European Structural Angles in equal and unequal leg profiles for construction, fabrication, infrastructure and industrial applications. Enquire with Moksh Tubes & Fittings LLP.')
@section('twitter_title', 'European Structural Angles | EN Standard Steel Angle Supplier')
@section('twitter_description', 'European Structural Angles in equal and unequal leg profiles for construction, fabrication, infrastructure and industrial applications. Enquire with Moksh Tubes & Fittings LLP.')

@section('content')
<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image: url({{ asset('assets/images/product/default-bg.jpg') }});">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto text-center">
                <h1 class="page-title">European Structural Angles – EN Standard Steel Angles</h1>
                <p class="text-center mt-3 px-3 py-2 text-white position-relative" style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                    European Structural Angles are L-shaped structural steel sections manufactured and specified according to applicable European Standards (EN). Available in equal-leg and unequal-leg profiles, they are widely used in construction, industrial structures, infrastructure, fabrication, bridges, towers and general engineering applications.<br><br>At <a href="https://mokshtubes.com" class="text-white text-decoration-underline" target="_blank">Moksh Tubes & Fittings LLP</a>, we supply European Structural Angles according to customer and project requirements, including specified angle type, dimensions, thickness, material grade, length, quantity and applicable EN standards.
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
            <h2 class="fw-bold" style="color: #174268;">European Structural Angles</h2>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="{{ asset('/assets/images/product/default-angles.jpg') }}" alt="European Structural Angles" class="img-fluid rounded shadow-sm" loading="lazy">
            </div>
            <div class="col-md-6">
                <p class="fs-6 mb-3 text-justify"><strong>European Structural Angles</strong> are L-shaped steel sections commonly used as structural and fabricated members in construction, industrial facilities, infrastructure and engineering projects.</p>
                <p class="fs-6 mb-3 text-justify">They are generally available in equal-leg and unequal-leg configurations. Equal-leg angles have two legs of similar nominal width, while unequal-leg angles have different leg dimensions, providing flexibility for structural connections and specific design requirements.</p>
                <p class="fs-6 mb-3 text-justify">European Structural Angles are specified according to applicable EN standards, with the material grade selected according to the required mechanical properties and project specification. The appropriate angle section is determined based on dimensions, thickness, loading conditions, structural design and connection requirements.</p>
                <p class="fs-6 mb-3 text-justify">These angles can be used for bracing, trusses, structural frameworks, supports, towers, platforms, frames and fabricated assemblies. They can also be combined with European beams, channels, columns and hollow sections to create complete steel structures.</p>
                <p class="fs-6 mb-3 text-justify">At Moksh Tubes & Fittings LLP, we support requirements for European Structural Angles based on customer drawings, technical specifications and project requirements. Customers can specify the required angle profile, leg dimensions, thickness, material grade, length, quantity and applicable EN specification.</p>
                <p class="fs-6 mb-0 text-justify">For an accurate quotation, customers can provide their required angle type, dimensions, thickness, grade, length and quantity, along with project drawings or technical documentation where required.</p>
            </div>
        </div>
    </div>
</section>

<!-- Datasheet Download -->
<section class="sec-padd-bottom bg-light">
    <div class="datasheet-download px-4 text-center">
        <h3 class="mb-3" style="color:#174268;">Download European Structural Angles Datasheet</h3>
        <p class="mb-3">
            Get the complete European Structural Angles datasheet with chemical composition,
            mechanical properties, heat treatment details, and applications.
            Enter your email to receive the PDF instantly.
        </p>

        <!-- Lead Capture Form -->
        <form id="leadForm" method="POST" action="{{ route('lead.capture') }}" class="mb-3">
            @csrf
            <input type="hidden" name="page_path" value="{{ $slug ?? 'european-structural-angles' }}">
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
            <p class="text-center">European Structural Angles are available in different equal-leg and unequal-leg profiles, leg dimensions, thicknesses, lengths and structural steel grades according to applicable European Standards (EN) and project specifications.</p>
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
                    <tr><td>Product</td><td>European Structural Angles</td></tr>
                    <tr><td>Profile</td><td>L-Shaped Structural Section</td></tr>
                    <tr><td>Types</td><td>Equal Leg Angles / Unequal Leg Angles</td></tr>
                    <tr><td>Material</td><td>Structural Steel / Carbon Steel</td></tr>
                    <tr><td>Standards</td><td>Applicable European Standards (EN)</td></tr>
                    <tr><td>Grades</td><td>As per applicable EN material specification</td></tr>
                    <tr><td>Leg Dimensions</td><td>Various standard sizes</td></tr>
                    <tr><td>Thickness</td><td>As per selected angle section</td></tr>
                    <tr><td>Length</td><td>Standard Lengths / Cut-to-Length</td></tr>
                    <tr><td>Surface</td><td>Mill Finish / As Specified</td></tr>
                    <tr><td>Supply Form</td><td>Individual Sections / Bundles</td></tr>
                    <tr><td>Customization</td><td>Size, thickness, length and grade as required</td></tr>
                    <tr><td>Applications</td><td>Construction, Fabrication, Infrastructure, Industrial & Engineering</td></tr>
                </tbody>
            </table>
        </div>
        
        <div class="row g-4 mt-4">
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Equal Leg Angles</h4>
                    <p class="mb-0 text-justify">Equal Leg Angles have two legs of approximately equal nominal width, creating a symmetrical L-shaped section. They are commonly used for bracing, trusses, structural frameworks, supports and fabricated assemblies.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Unequal Leg Angles</h4>
                    <p class="mb-0 text-justify">Unequal Leg Angles have two legs of different nominal widths. They can provide greater flexibility where different leg dimensions are required for structural connections, supports, bracing or fabrication.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">EN Standards</h4>
                    <p class="mb-0 text-justify">European Structural Angles are supplied according to the applicable European Standard and project specification. The relevant standard should be confirmed based on the required angle profile, dimensions, material grade and application.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Length Availability</h4>
                    <p class="mb-0 text-justify">Structural angles can be considered in standard lengths or cut-to-length requirements, depending on product availability and customer specifications.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Dimensional Availability</h4>
                    <p class="mb-2 text-justify">European Structural Angles can be specified according to:</p>
                    <div class="row">
                        <div class="col-6">
                            <ul class="list-unstyled mb-0">
                                <li><i class="bi bi-check2 text-success me-2"></i>Angle Type – Equal / Unequal</li>
                                <li><i class="bi bi-check2 text-success me-2"></i>Leg Dimensions</li>
                                <li><i class="bi bi-check2 text-success me-2"></i>Thickness</li>
                                <li><i class="bi bi-check2 text-success me-2"></i>Material Grade</li>
                            </ul>
                        </div>
                        <div class="col-6">
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
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Material & Grade</h4>
                    <p class="mb-0 text-justify">The material grade is selected according to the applicable EN material specification and project requirements. Customers can specify the required grade along with the angle section and dimensions.</p>
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
                                <li><i class="bi bi-check-circle text-success me-2"></i>Angle Type</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Leg Dimensions</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Thickness</li>
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
                    <p class="mt-3 mb-0 text-center text-muted">Moksh Tubes & Fittings LLP can support standard and project-based requirements for European Structural Angles, subject to product availability and agreed specifications.</p>
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
        
        <h4 class="fw-bold mt-4 mb-3" style="color:#db7227;">Equal Angles – L Equal Leg Sections</h4>
        <div class="table-responsive mb-5">
            <table class="table table-bordered table-striped text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Section</th>
                        <th>Size A × B (mm)</th>
                        <th>Thickness t (mm)</th>
                        <th>Weight (kg/m)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>L 20 × 20 × 3</td><td>20 × 20</td><td>3</td><td>0.88</td></tr>
                    <tr><td>L 25 × 25 × 3</td><td>25 × 25</td><td>3</td><td>1.12</td></tr>
                    <tr><td>L 25 × 25 × 4</td><td>25 × 25</td><td>4</td><td>1.46</td></tr>
                    <tr><td>L 30 × 30 × 3</td><td>30 × 30</td><td>3</td><td>1.36</td></tr>
                    <tr><td>L 30 × 30 × 4</td><td>30 × 30</td><td>4</td><td>1.78</td></tr>
                    <tr><td>L 35 × 35 × 4</td><td>35 × 35</td><td>4</td><td>2.09</td></tr>
                    <tr><td>L 35 × 35 × 5</td><td>35 × 35</td><td>5</td><td>2.57</td></tr>
                    <tr><td>L 40 × 40 × 4</td><td>40 × 40</td><td>4</td><td>2.42</td></tr>
                    <tr><td>L 40 × 40 × 5</td><td>40 × 40</td><td>5</td><td>2.97</td></tr>
                    <tr><td>L 45 × 45 × 4</td><td>45 × 45</td><td>4</td><td>2.74</td></tr>
                    <tr><td>L 45 × 45 × 5</td><td>45 × 45</td><td>5</td><td>3.38</td></tr>
                    <tr><td>L 50 × 50 × 4</td><td>50 × 50</td><td>4</td><td>3.06</td></tr>
                    <tr><td>L 50 × 50 × 5</td><td>50 × 50</td><td>5</td><td>3.77</td></tr>
                    <tr><td>L 50 × 50 × 6</td><td>50 × 50</td><td>6</td><td>4.47</td></tr>
                    <tr><td>L 55 × 55 × 5</td><td>55 × 55</td><td>5</td><td>4.18</td></tr>
                    <tr><td>L 55 × 55 × 6</td><td>55 × 55</td><td>6</td><td>4.92</td></tr>
                    <tr><td>L 60 × 60 × 5</td><td>60 × 60</td><td>5</td><td>4.57</td></tr>
                    <tr><td>L 60 × 60 × 6</td><td>60 × 60</td><td>6</td><td>5.42</td></tr>
                    <tr><td>L 60 × 60 × 8</td><td>60 × 60</td><td>8</td><td>7.09</td></tr>
                    <tr><td>L 65 × 65 × 6</td><td>65 × 65</td><td>6</td><td>5.91</td></tr>
                    <tr><td>L 65 × 65 × 8</td><td>65 × 65</td><td>8</td><td>7.73</td></tr>
                    <tr><td>L 70 × 70 × 6</td><td>70 × 70</td><td>6</td><td>6.38</td></tr>
                    <tr><td>L 70 × 70 × 7</td><td>70 × 70</td><td>7</td><td>7.38</td></tr>
                    <tr><td>L 70 × 70 × 8</td><td>70 × 70</td><td>8</td><td>8.37</td></tr>
                    <tr><td>L 75 × 75 × 6</td><td>75 × 75</td><td>6</td><td>6.85</td></tr>
                    <tr><td>L 75 × 75 × 8</td><td>75 × 75</td><td>8</td><td>9.00</td></tr>
                    <tr><td>L 75 × 75 × 10</td><td>75 × 75</td><td>10</td><td>11.10</td></tr>
                    <tr><td>L 80 × 80 × 6</td><td>80 × 80</td><td>6</td><td>7.32</td></tr>
                    <tr><td>L 80 × 80 × 8</td><td>80 × 80</td><td>8</td><td>9.66</td></tr>
                    <tr><td>L 80 × 80 × 10</td><td>80 × 80</td><td>10</td><td>11.90</td></tr>
                    <tr><td>L 90 × 90 × 6</td><td>90 × 90</td><td>6</td><td>8.28</td></tr>
                    <tr><td>L 90 × 90 × 8</td><td>90 × 90</td><td>8</td><td>10.90</td></tr>
                    <tr><td>L 90 × 90 × 10</td><td>90 × 90</td><td>10</td><td>13.30</td></tr>
                    <tr><td>L 90 × 90 × 12</td><td>90 × 90</td><td>12</td><td>15.80</td></tr>
                    <tr><td>L 100 × 100 × 6</td><td>100 × 100</td><td>6</td><td>9.24</td></tr>
                    <tr><td>L 100 × 100 × 8</td><td>100 × 100</td><td>8</td><td>12.20</td></tr>
                    <tr><td>L 100 × 100 × 10</td><td>100 × 100</td><td>10</td><td>15.00</td></tr>
                    <tr><td>L 100 × 100 × 12</td><td>100 × 100</td><td>12</td><td>17.80</td></tr>
                    <tr><td>L 110 × 110 × 8</td><td>110 × 110</td><td>8</td><td>13.50</td></tr>
                    <tr><td>L 110 × 110 × 10</td><td>110 × 110</td><td>10</td><td>16.50</td></tr>
                    <tr><td>L 110 × 110 × 12</td><td>110 × 110</td><td>12</td><td>19.60</td></tr>
                    <tr><td>L 120 × 120 × 10</td><td>120 × 120</td><td>10</td><td>18.20</td></tr>
                    <tr><td>L 120 × 120 × 12</td><td>120 × 120</td><td>12</td><td>21.70</td></tr>
                    <tr><td>L 120 × 120 × 15</td><td>120 × 120</td><td>15</td><td>26.80</td></tr>
                    <tr><td>L 130 × 130 × 10</td><td>130 × 130</td><td>10</td><td>19.80</td></tr>
                    <tr><td>L 130 × 130 × 12</td><td>130 × 130</td><td>12</td><td>23.60</td></tr>
                    <tr><td>L 130 × 130 × 15</td><td>130 × 130</td><td>15</td><td>29.40</td></tr>
                    <tr><td>L 140 × 140 × 10</td><td>140 × 140</td><td>10</td><td>21.40</td></tr>
                    <tr><td>L 140 × 140 × 12</td><td>140 × 140</td><td>12</td><td>25.30</td></tr>
                    <tr><td>L 140 × 140 × 15</td><td>140 × 140</td><td>15</td><td>31.50</td></tr>
                    <tr><td>L 150 × 150 × 10</td><td>150 × 150</td><td>10</td><td>22.90</td></tr>
                    <tr><td>L 150 × 150 × 12</td><td>150 × 150</td><td>12</td><td>27.30</td></tr>
                    <tr><td>L 150 × 150 × 15</td><td>150 × 150</td><td>15</td><td>33.60</td></tr>
                    <tr><td>L 150 × 150 × 20</td><td>150 × 150</td><td>20</td><td>44.10</td></tr>
                    <tr><td>L 160 × 160 × 12</td><td>160 × 160</td><td>12</td><td>29.20</td></tr>
                    <tr><td>L 160 × 160 × 15</td><td>160 × 160</td><td>15</td><td>36.20</td></tr>
                    <tr><td>L 180 × 180 × 15</td><td>180 × 180</td><td>15</td><td>41.00</td></tr>
                    <tr><td>L 180 × 180 × 18</td><td>180 × 180</td><td>18</td><td>48.80</td></tr>
                    <tr><td>L 200 × 200 × 16</td><td>200 × 200</td><td>16</td><td>48.50</td></tr>
                    <tr><td>L 200 × 200 × 20</td><td>200 × 200</td><td>20</td><td>59.90</td></tr>
                    <tr><td>L 200 × 200 × 24</td><td>200 × 200</td><td>24</td><td>71.10</td></tr>
                </tbody>
            </table>
        </div>

        <h4 class="fw-bold mt-5 mb-3" style="color:#db7227;">Unequal Angles – L Unequal Leg Sections</h4>
        <div class="table-responsive mb-5">
            <table class="table table-bordered table-striped text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Section</th>
                        <th>Size A × B (mm)</th>
                        <th>Thickness t (mm)</th>
                        <th>Weight (kg/m)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>L 30 × 20 × 3</td><td>30 × 20</td><td>3</td><td>1.10</td></tr>
                    <tr><td>L 40 × 20 × 3</td><td>40 × 20</td><td>3</td><td>1.40</td></tr>
                    <tr><td>L 40 × 25 × 3</td><td>40 × 25</td><td>3</td><td>1.53</td></tr>
                    <tr><td>L 40 × 25 × 4</td><td>40 × 25</td><td>4</td><td>2.01</td></tr>
                    <tr><td>L 45 × 30 × 4</td><td>45 × 30</td><td>4</td><td>2.29</td></tr>
                    <tr><td>L 50 × 30 × 4</td><td>50 × 30</td><td>4</td><td>2.42</td></tr>
                    <tr><td>L 50 × 30 × 5</td><td>50 × 30</td><td>5</td><td>3.01</td></tr>
                    <tr><td>L 50 × 40 × 4</td><td>50 × 40</td><td>4</td><td>2.74</td></tr>
                    <tr><td>L 50 × 40 × 5</td><td>50 × 40</td><td>5</td><td>3.38</td></tr>
                    <tr><td>L 60 × 30 × 5</td><td>60 × 30</td><td>5</td><td>3.57</td></tr>
                    <tr><td>L 60 × 40 × 5</td><td>60 × 40</td><td>5</td><td>3.77</td></tr>
                    <tr><td>L 60 × 40 × 6</td><td>60 × 40</td><td>6</td><td>4.47</td></tr>
                    <tr><td>L 65 × 50 × 5</td><td>65 × 50</td><td>5</td><td>4.30</td></tr>
                    <tr><td>L 65 × 50 × 6</td><td>65 × 50</td><td>6</td><td>5.08</td></tr>
                    <tr><td>L 70 × 50 × 5</td><td>70 × 50</td><td>5</td><td>4.58</td></tr>
                    <tr><td>L 70 × 50 × 6</td><td>70 × 50</td><td>6</td><td>5.42</td></tr>
                    <tr><td>L 75 × 50 × 5</td><td>75 × 50</td><td>5</td><td>4.77</td></tr>
                    <tr><td>L 75 × 50 × 6</td><td>75 × 50</td><td>6</td><td>5.66</td></tr>
                    <tr><td>L 80 × 40 × 6</td><td>80 × 40</td><td>6</td><td>5.66</td></tr>
                    <tr><td>L 80 × 60 × 6</td><td>80 × 60</td><td>6</td><td>6.60</td></tr>
                    <tr><td>L 80 × 60 × 8</td><td>80 × 60</td><td>8</td><td>8.69</td></tr>
                    <tr><td>L 90 × 60 × 6</td><td>90 × 60</td><td>6</td><td>7.07</td></tr>
                    <tr><td>L 90 × 60 × 8</td><td>90 × 60</td><td>8</td><td>9.33</td></tr>
                    <tr><td>L 100 × 50 × 6</td><td>100 × 50</td><td>6</td><td>7.07</td></tr>
                    <tr><td>L 100 × 50 × 8</td><td>100 × 50</td><td>8</td><td>9.33</td></tr>
                    <tr><td>L 100 × 65 × 7</td><td>100 × 65</td><td>7</td><td>8.86</td></tr>
                    <tr><td>L 100 × 65 × 8</td><td>100 × 65</td><td>8</td><td>10.10</td></tr>
                    <tr><td>L 100 × 75 × 8</td><td>100 × 75</td><td>8</td><td>10.70</td></tr>
                    <tr><td>L 100 × 75 × 10</td><td>100 × 75</td><td>10</td><td>13.30</td></tr>
                    <tr><td>L 110 × 70 × 8</td><td>110 × 70</td><td>8</td><td>11.30</td></tr>
                    <tr><td>L 120 × 80 × 8</td><td>120 × 80</td><td>8</td><td>12.50</td></tr>
                    <tr><td>L 120 × 80 × 10</td><td>120 × 80</td><td>10</td><td>15.40</td></tr>
                    <tr><td>L 125 × 75 × 8</td><td>125 × 75</td><td>8</td><td>12.10</td></tr>
                    <tr><td>L 125 × 75 × 10</td><td>125 × 75</td><td>10</td><td>14.90</td></tr>
                    <tr><td>L 130 × 90 × 10</td><td>130 × 90</td><td>10</td><td>17.20</td></tr>
                    <tr><td>L 140 × 90 × 10</td><td>140 × 90</td><td>10</td><td>18.10</td></tr>
                    <tr><td>L 150 × 100 × 10</td><td>150 × 100</td><td>10</td><td>19.50</td></tr>
                    <tr><td>L 150 × 100 × 12</td><td>150 × 100</td><td>12</td><td>23.30</td></tr>
                    <tr><td>L 160 × 100 × 10</td><td>160 × 100</td><td>10</td><td>20.30</td></tr>
                    <tr><td>L 160 × 100 × 12</td><td>160 × 100</td><td>12</td><td>24.20</td></tr>
                    <tr><td>L 180 × 100 × 12</td><td>180 × 100</td><td>12</td><td>26.10</td></tr>
                    <tr><td>L 200 × 100 × 12</td><td>200 × 100</td><td>12</td><td>28.00</td></tr>
                    <tr><td>L 200 × 150 × 12</td><td>200 × 150</td><td>12</td><td>32.80</td></tr>
                    <tr><td>L 200 × 150 × 15</td><td>200 × 150</td><td>15</td><td>40.40</td></tr>
                    <tr><td>L 200 × 150 × 20</td><td>200 × 150</td><td>20</td><td>53.00</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<section id="grades" class="sec-padd-top sec-padd-bottom">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Grades Available</h2>
            <p class="text-center pb-3">European Structural Angles can be supplied in different structural steel grades according to applicable European Standards (EN) and project specifications. The selected grade depends on the required mechanical properties, structural loading, fabrication requirements and engineering design.</p>
        </div>
        <p class="text-center mb-4">At Moksh Tubes & Fittings LLP, European Structural Angles can be sourced according to the customer's specified angle type, grade, dimensions, thickness, length, quantity and applicable EN requirements, subject to product availability.</p>
        
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
                    <p class="mb-0 text-justify">S275JR is a structural steel grade with higher specified yield strength than S235-grade steel and can be considered for structural applications according to the applicable EN specification and project requirements.</p>
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
                    <p class="mb-2">The appropriate grade for a European Structural Angle should be selected based on:</p>
                    <div class="row">
                        <div class="col-6">
                            <ul class="list-unstyled mb-0">
                                <li><i class="bi bi-check-circle text-success me-2"></i>Required mechanical properties</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Structural loading</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Section dimensions</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Angle thickness</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Design requirements</li>
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
                    <p class="mt-3 mb-0 text-justify">Customers should specify the required EN grade, angle type, leg dimensions, thickness, length and quantity when submitting an enquiry.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100 border-0 bg-white shadow-sm border border-secondary border-opacity-25 rounded-3">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Material Documentation</h4>
                    <p class="mb-3 text-justify">Where required and agreed at the time of order, applicable material test certificates and supporting documentation can be provided according to the purchase order and project requirements.</p>
                    <div class="alert alert-warning mb-0 border-0 shadow-sm" role="alert">
                        <strong>Note:</strong> Exact grade availability should be confirmed with Moksh Tubes & Fittings LLP before ordering, as availability may vary according to angle section, size, thickness, specification and project requirements.
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
            <p class="text-center pb-3">European Structural Angles are widely used in construction, industrial structures, infrastructure, fabrication and engineering projects where L-shaped structural steel sections are required for support, framing, bracing and fabricated assemblies.</p>
        </div>
        <div class="row g-4 mt-4">
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-building"></i></div>
                    <h5>Building & Construction</h5>
                    <p class="mb-0 text-center">European Structural Angles are commonly used in building and construction projects for steel structural frameworks, roof structures and trusses, bracing members, supports and brackets, structural connections, and fabricated building components.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-industry"></i></div>
                    <h5>Industrial Structures</h5>
                    <p class="mb-0 text-center">Structural angles are suitable for industrial facilities where steel sections are required for structural and fabrication applications. Common applications include factory structures, industrial buildings, manufacturing facilities, equipment support structures, platforms, and steel frameworks.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-box-seam"></i></div>
                    <h5>Warehouses & Industrial Sheds</h5>
                    <p class="mb-0 text-center">European Structural Angles can be incorporated into warehouse and industrial shed structures for structural framing, roof-support systems, bracing systems, supporting members, and fabricated steel frameworks.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-cone-striped"></i></div>
                    <h5>Infrastructure Projects</h5>
                    <p class="mb-0 text-center">European Structural Angles can be used in infrastructure and civil engineering projects where the specified EN section and material grade meet the project requirements. Applications include infrastructure frameworks, supporting structures, platforms, access structures, and fabricated steel components.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-wifi"></i></div>
                    <h5>Towers & Lattice Structures</h5>
                    <p class="mb-0 text-center">Equal and unequal leg angles can be incorporated into tower and lattice-type structures where the selected section meets the engineering requirements. Applications include communication towers, lattice structures, tower frameworks, supporting structures, and equipment support frameworks.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-tools"></i></div>
                    <h5>Steel Fabrication</h5>
                    <p class="mb-0 text-center">European Structural Angles are suitable for various fabrication requirements, including frames, brackets, supports, trusses, base structures, and structural connections.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-gear"></i></div>
                    <h5>Machinery & Equipment Supports</h5>
                    <p class="mb-0 text-center">Structural angles can be fabricated into support structures for industrial machinery and equipment where the selected angle section meets the required structural design.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-nut"></i></div>
                    <h5>General Engineering Applications</h5>
                    <p class="mb-0 text-center">European Structural Angles are also used in general engineering and fabrication applications requiring an L-shaped structural steel section.</p>
                </div>
            </div>
        </div>
        <p class="text-center mt-4 text-muted">The appropriate angle type, dimensions, thickness and grade should always be selected according to the structural design, loading conditions, applicable EN standard and project specifications.</p>
    </div>
</section>

<section id="uses" class="sec-padd-top sec-padd-bottom">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Uses of European Structural Angles</h2>
            <p class="text-center mb-2">European Structural Angles are versatile L-shaped steel sections used for structural support, framing, bracing, connections and fabrication across construction, industrial, infrastructure and engineering applications.</p>
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
                    <h5>Suitable for roof trusses and bracing systems where European structural angle sections are specified.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Used for fabricated frames, brackets and supports in structural and engineering applications.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Suitable for communication towers, lattice structures and supporting frameworks.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Used in industrial platforms, walkways and access structures.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Suitable for machinery and equipment support structures in industrial facilities.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Used for infrastructure and civil engineering projects requiring EN-specified structural steel sections.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Suitable for general steel fabrication, including frames, supports, brackets and structural assemblies.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Used for structural connections and reinforcement according to engineering design requirements.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Available in equal-leg and unequal-leg configurations, providing flexibility for different structural designs.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Can be combined with European Structural Channels, Beams, Columns and Hollow Sections to create complete steel frameworks.</h5>
                </div>
            </div>
        </div>
        <p class="text-center mt-4 text-muted">The appropriate angle section, dimensions, thickness and grade should be selected according to the structural design, loading conditions, applicable EN standard and project specifications.</p>
    </div>
</section>

<section id="advantages" class="sec-padd-top sec-padd-bottom bg-light">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold text-center" style="color:#174268;">Advantages of European Structural Angles</h2>
            <p class="text-center mb-2">European Structural Angles provide a versatile structural steel solution for construction, industrial structures, infrastructure, fabrication and engineering applications. Their L-shaped profile and availability in equal-leg and unequal-leg configurations offer flexibility for different structural requirements.</p>
        </div>
        <div class="row g-4 mt-2">
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                    <h5>Structural Strength</h5>
                    <p class="mb-0 text-center">Suitable for structural support, framing and bracing applications when the appropriate section is selected according to engineering design.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-arrows-expand"></i></div>
                    <h5>Equal & Unequal Profiles</h5>
                    <p class="mb-0 text-center">Equal-leg and unequal-leg configurations provide flexibility for different structural and connection requirements.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-building"></i></div>
                    <h5>Wide Application Range</h5>
                    <p class="mb-0 text-center">Suitable for buildings, industrial structures, warehouses, towers, trusses, platforms and general fabrication.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-journal-check"></i></div>
                    <h5>EN Grade Options</h5>
                    <p class="mb-0 text-center">Different European structural steel grades such as S235JR, S275JR, S355JR and S355J2 can be considered according to applicable specifications and project requirements.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-ui-checks"></i></div>
                    <h5>Standard-Based Selection</h5>
                    <p class="mb-0 text-center">Angle sections can be selected according to applicable EN standards, dimensions, thickness, material grade and engineering requirements.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-bounding-box"></i></div>
                    <h5>Different Size Options</h5>
                    <p class="mb-0 text-center">Available in different leg dimensions and thicknesses according to applicable European section standards and product range.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-vector-pen"></i></div>
                    <h5>Design Flexibility</h5>
                    <p class="mb-0 text-center">Equal angles provide symmetrical geometry, while unequal angles can be selected where different leg dimensions are required.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-bricks"></i></div>
                    <h5>Suitable for Structural Frameworks</h5>
                    <p class="mb-0 text-center">Can be incorporated into trusses, bracing systems, frames, supports, towers and fabricated steel structures.</p>
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
                    <p class="mb-0 text-center">Requirements can be specified according to angle type, dimensions, grade, length and quantity.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-link"></i></div>
                    <h5>Compatible with Other European Sections</h5>
                    <p class="mb-0 text-center">Can be used with European Structural Channels, Beams, Columns and Hollow Sections to create complete steel frameworks.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-globe"></i></div>
                    <h5>Domestic & International Applications</h5>
                    <p class="mb-0 text-center">Suitable for projects requiring structural steel angles specified to applicable EN requirements.</p>
                </div>
            </div>
        </div>
        <p class="text-center mt-4 text-muted">The appropriate angle section should always be selected according to the structural design, loading conditions, section properties, applicable EN standard and project specifications.</p>
    </div>
</section>

<section id="mechanical-properties" class="sec-padd-top sec-padd-bottom">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Mechanical Properties – European Structural Angles</h2>
        </div>
        <p class="text-center mb-4 text-muted">(Typical minimum values for common EN 10025-2 structural steel grades; values depend on product thickness.)</p>
        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle text-center">
                <thead class="table-dark">
                    <tr>
                        <th>Standard / Grade</th>
                        <th>S235JR</th>
                        <th>S275JR</th>
                        <th>S355JR</th>
                        <th>S355J2</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>Tensile Strength (MPa), Min.</td><td>360</td><td>410</td><td>470</td><td>470</td></tr>
                    <tr><td>Yield Strength (MPa), ≤16 mm</td><td>235</td><td>275</td><td>355</td><td>355</td></tr>
                    <tr><td>Elongation (%), Min.</td><td>26</td><td>23</td><td>22</td><td>22</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<section id="why-choose-us" class="sec-padd-top sec-padd-bottom bg-light">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Why Choose Moksh Tubes & Fittings LLP?</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-center mb-4">Moksh Tubes & Fittings LLP supports customers looking for European Structural Angles for construction, industrial, infrastructure, fabrication and engineering requirements. Our supply approach is based on the customer's required angle type, dimensions, thickness, grade, length, quantity and applicable EN specifications.</p>
                <div class="row g-4 mt-4">
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-box-seam"></i></div>
                            <h5>Project-Based Sourcing</h5>
                            <p class="mb-0">European Structural Angles can be sourced according to specific project requirements and technical specifications.</p>
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
                            <div class="why-banner-icon"><i class="bi bi-rulers"></i></div>
                            <h5>Equal & Unequal Angle Options</h5>
                            <p class="mb-0">Requirements for equal-leg and unequal-leg angles can be considered according to product availability and specification.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-boxes"></i></div>
                            <h5>Wide Product Range</h5>
                            <p class="mb-0">Different angle dimensions, thicknesses and structural steel grades can be considered according to customer requirements.</p>
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
                            <p class="mb-0">Assistance with angle dimensions, material grades, EN specifications and procurement requirements.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-sliders"></i></div>
                            <h5>Custom Requirements</h5>
                            <p class="mb-0">Specific angle sections, dimensions, thicknesses, grades, lengths and quantities can be discussed for project requirements.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-building"></i></div>
                            <h5>Suitable for Industrial & Infrastructure Projects</h5>
                            <p class="mb-0">Support for customers sourcing European Structural Angles for construction, fabrication, industrial and infrastructure applications.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-globe-americas"></i></div>
                            <h5>International Project Support</h5>
                            <p class="mb-0">Suitable for customers requiring European-standard structural steel angles for domestic and international projects.</p>
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
            <h2 class="fw-bold" style="color: #174268;">FAQ – European Structural Angles</h2>
        </div>
        <div class="row mt-4">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="accordion-box">
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What are European Structural Angles?</h4>
                        </div>
                        <div class="accord-content">
                            <p>European Structural Angles are L-shaped structural steel sections manufactured and specified according to applicable European Standards (EN). They are used in construction, industrial structures, infrastructure, fabrication and engineering applications.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What types of European Structural Angles are available?</h4>
                        </div>
                        <div class="accord-content">
                            <p>The main types are Equal Leg Angles and Unequal Leg Angles. Equal-leg angles have two nominally equal legs, while unequal-leg angles have different leg dimensions.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What are European Structural Angles used for?</h4>
                        </div>
                        <div class="accord-content">
                            <p>They are commonly used for structural frameworks, bracing, roof trusses, towers, supports, brackets, platforms and fabricated steel assemblies.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Which standards apply to European Structural Angles?</h4>
                        </div>
                        <div class="accord-content">
                            <p>European Structural Angles can be specified according to applicable European Standards (EN) and the requirements stated in the project specification.</p>
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
                            <h4>What is the difference between equal and unequal leg angles?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Equal-leg angles have two legs of approximately equal nominal width, while unequal-leg angles have different leg widths. The appropriate profile is selected according to structural and connection requirements.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What sizes of European Structural Angles are available?</h4>
                        </div>
                        <div class="accord-content">
                            <p>European Structural Angles are available in different leg dimensions and thicknesses. Actual availability depends on the applicable EN section tables and Moksh Tubes & Fittings LLP's current product range.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Can European Structural Angles be supplied in custom lengths?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Yes. Standard and cut-to-length requirements can be considered depending on product availability and customer specifications.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>How do I select the right European Structural Angle?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Selection should consider the angle type, leg dimensions, thickness, loading conditions, section properties, material grade, connection requirements and applicable EN standards.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Can Moksh Tubes & Fittings LLP supply European Structural Angles in bulk?</h4>
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
                            <p>Customers should provide the angle type, leg dimensions, thickness, EN grade, required length, quantity and applicable EN specification. Project drawings or technical specifications can also be shared.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Can European Structural Angles be used with other European structural sections?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Yes. They can be used with European Structural Channels, Beams, Columns and Hollow Sections to create complete steel frameworks and fabricated assemblies.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Does Moksh Tubes & Fittings LLP support international enquiries?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Yes. International enquiries for European Structural Angles can be discussed based on the required EN specification, angle section, dimensions, quantity and delivery requirements.</p>
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
            <p class="fs-5 mt-3">Looking for European Structural Angles for your construction, industrial, infrastructure or fabrication project?</p>
            <p class="mb-4 text-light">
                Contact <strong>Moksh Tubes & Fittings LLP</strong> for European Structural Angle requirements based on your required angle type, leg dimensions, thickness, EN grade, length and quantity.<br>
                Share your project specifications, drawings or material requirements with our team to discuss the suitable European Structural Angles for your application.
            </p>
            <a href="{{ route('contact-us') ?? '#' }}" class="btn btn-lg text-white shadow"
                style="background-color:#db7227; border-radius:8px; padding: 12px 30px;">Contact Us Now</a>
            <p class="mt-4 mb-0 text-light opacity-75">📞 Contact Moksh Tubes & Fittings LLP at +91 97695 84950 for product availability, technical specifications and quotation enquiries.</p>
        </div>
    </div>
</section>

@endsection
