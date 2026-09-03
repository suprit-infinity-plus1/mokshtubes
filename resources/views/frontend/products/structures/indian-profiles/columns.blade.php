@extends('layouts.master')
@section('title', 'Indian Structural Columns | IS Steel Column Supplier')
@section('meta_description', 'Indian Structural Columns for buildings, industrial structures, warehouses, infrastructure and engineering applications. Enquire with Moksh Tubes & Fittings LLP.')
@section('canonical', url()->current())
@section('og_type', 'product')
@section('og_title', 'Indian Structural Columns | IS Steel Column Supplier')
@section('og_description', 'Indian Structural Columns for buildings, industrial structures, warehouses, infrastructure and engineering applications. Enquire with Moksh Tubes & Fittings LLP.')
@section('twitter_title', 'Indian Structural Columns | IS Steel Column Supplier')
@section('twitter_description', 'Indian Structural Columns for buildings, industrial structures, warehouses, infrastructure and engineering applications. Enquire with Moksh Tubes & Fittings LLP.')

@section('content')
<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image: url({{ asset('assets/images/product/default-bg.jpg') }});">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto text-center">
                <h1 class="page-title">Indian Structural Columns – IS Standard Structural Steel Columns</h1>
                <p class="text-center mt-3 px-3 py-2 text-white position-relative" style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                    Indian Structural Columns are structural steel sections used to provide vertical load-bearing support in buildings, industrial structures, warehouses, infrastructure projects and engineered steel frameworks. They are selected according to structural design requirements, loading conditions, section dimensions, material grade and applicable Indian Standards.
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
            <h2 class="fw-bold" style="color: #174268;">Indian Structural Columns</h2>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="{{ asset('/assets/images/product/default-column.jpg') }}" alt="Indian Structural Columns" class="img-fluid rounded shadow-sm" loading="lazy">
            </div>
            <div class="col-md-6">
                <p class="fs-6 mb-3 text-justify"><strong>Indian Structural Columns</strong> are vertical structural members designed to transfer loads from upper portions of a structure to its foundation or supporting members. They are an important part of structural steel frameworks used in buildings, industrial facilities, warehouses, infrastructure and engineering structures.</p>
                <p class="fs-6 mb-3 text-justify">Structural columns are selected according to factors such as load-bearing requirements, column height, section properties, dimensions, material grade, connection design and applicable project specifications. The appropriate section helps provide the required strength and stability within the overall structural system.</p>
                <p class="fs-6 mb-3 text-justify">Depending on the structural design, different steel column sections can be incorporated into building frames, industrial structures, equipment-support systems and other fabricated assemblies. Structural columns can also be used together with beams, channels, angles and hollow sections to create complete steel frameworks.</p>
                <p class="fs-6 mb-3 text-justify">At Moksh Tubes & Fittings LLP, we support requirements for Indian Structural Columns based on customer and project specifications. Customers can provide the required column section, dimensions, material grade, length, quantity and applicable Indian Standard for procurement enquiries.</p>
                <p class="fs-6 mb-3 text-justify">Indian Structural Columns are suitable for both standard and project-based requirements across construction, industrial, infrastructure and engineering applications, subject to the specified product and design requirements.</p>
            </div>
        </div>
    </div>
</section>

<!-- Datasheet Download -->
<section class="sec-padd-bottom bg-light">
    <div class="datasheet-download px-4 text-center">
        <h3 class="mb-3" style="color:#174268;">Download Indian Structural Columns Datasheet</h3>
        <p class="mb-3">
            Get the complete Indian Structural Columns datasheet with chemical composition,
            mechanical properties, heat treatment details, and applications.
            Enter your email to receive the PDF instantly.
        </p>

        <!-- Lead Capture Form -->
        <form id="leadForm" method="POST" action="{{ route('lead.capture') }}" class="mb-3">
            @csrf
            <input type="hidden" name="page_path" value="{{ $slug ?? 'indian-structural-columns' }}">
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
            <p class="text-center">Indian Structural Columns are available in different section sizes, depths, flange dimensions, thicknesses, lengths and structural steel grades according to applicable Indian Standards and project requirements. The appropriate column section is selected based on the required load-bearing capacity, structural design, column height, connection requirements and intended application.</p>
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
                    <tr><td>Product</td><td>Indian Structural Columns</td></tr>
                    <tr><td>Profile</td><td>I-Section / H-Section / Structural Column Sections</td></tr>
                    <tr><td>Material</td><td>Structural Steel / Carbon Steel</td></tr>
                    <tr><td>Types</td><td>Structural Column Sections as per applicable IS specifications</td></tr>
                    <tr><td>Standards</td><td>Applicable Indian Standards / Project Specifications</td></tr>
                    <tr><td>Grades</td><td>As per applicable material specification</td></tr>
                    <tr><td>Section Depth</td><td>Various standard sizes</td></tr>
                    <tr><td>Flange Width</td><td>As per selected column section</td></tr>
                    <tr><td>Web Thickness</td><td>As per selected section</td></tr>
                    <tr><td>Flange Thickness</td><td>As per selected section</td></tr>
                    <tr><td>Length</td><td>Standard Lengths / Cut-to-Length</td></tr>
                    <tr><td>Surface</td><td>Mill Finish / As Specified</td></tr>
                    <tr><td>Supply Form</td><td>Individual Sections / Bundles</td></tr>
                    <tr><td>Customization</td><td>Size, thickness, length and grade as required</td></tr>
                    <tr><td>Applications</td><td>Buildings, Industrial Structures, Warehouses, Infrastructure & Engineering</td></tr>
                </tbody>
            </table>
        </div>
        
        <div class="row g-4 mt-4">
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Column Section Dimensions</h4>
                    <p class="mb-0 text-justify">Indian Structural Columns are identified according to their overall section depth, flange width, web thickness and flange thickness. These dimensions determine the geometry and structural properties of the selected section.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">I-Section & H-Section Columns</h4>
                    <p class="mb-0 text-justify">Depending on the applicable Indian specification and structural design, column sections may include different I-shaped and H-shaped profiles. The appropriate profile should be selected according to the required load, column height, structural stability and connection arrangement.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Length Availability</h4>
                    <p class="mb-0 text-justify">Structural Columns can be considered in standard lengths or cut-to-length requirements, depending on product availability and customer specifications.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Material & Grade</h4>
                    <p class="mb-0 text-justify">The material grade is selected according to the applicable Indian Standard and project specification. Customers can specify the required grade along with the column section and dimensions.</p>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-4">
            <div class="col-md-12">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Supply Requirements</h4>
                    <p class="mb-2">For an accurate quotation, customers should provide:</p>
                    <ul class="list-unstyled mb-3 d-flex flex-wrap">
                        <li class="me-4 mb-2"><i class="bi bi-check2 text-success me-2"></i>Column Type / Section</li>
                        <li class="me-4 mb-2"><i class="bi bi-check2 text-success me-2"></i>Column Size</li>
                        <li class="me-4 mb-2"><i class="bi bi-check2 text-success me-2"></i>Section Depth</li>
                        <li class="me-4 mb-2"><i class="bi bi-check2 text-success me-2"></i>Flange Width</li>
                        <li class="me-4 mb-2"><i class="bi bi-check2 text-success me-2"></i>Web Thickness</li>
                        <li class="me-4 mb-2"><i class="bi bi-check2 text-success me-2"></i>Flange Thickness</li>
                        <li class="me-4 mb-2"><i class="bi bi-check2 text-success me-2"></i>Material Grade</li>
                        <li class="me-4 mb-2"><i class="bi bi-check2 text-success me-2"></i>Required Length</li>
                        <li class="me-4 mb-2"><i class="bi bi-check2 text-success me-2"></i>Quantity</li>
                        <li class="me-4 mb-2"><i class="bi bi-check2 text-success me-2"></i>Applicable Standard</li>
                        <li class="me-4 mb-2"><i class="bi bi-check2 text-success me-2"></i>Project Specification, if applicable</li>
                    </ul>
                    <p class="mb-0 text-justify">Moksh Tubes & Fittings LLP can support standard and project-based requirements for Indian Structural Columns, subject to product availability and agreed specifications.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="size-chart" class="sec-padd-top sec-padd-bottom bg-light">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Size & Weight Chart</h2>
            <p class="text-center">Indian Structural Columns are available in different section depths, flange widths, web thicknesses, flange thicknesses and unit weights. The appropriate column section is selected according to structural design, loading conditions, column height and applicable Indian Standard.</p>
        </div>
        
        <h4 class="fw-bold mt-4 mb-3" style="color:#db7227;">SC Structural Columns Size & Weight Chart</h4>
        <div class="table-responsive mb-5">
            <table class="table table-bordered table-striped text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Section</th>
                        <th>Size (mm)</th>
                        <th>Web Thickness (mm)</th>
                        <th>Flange Thickness (mm)</th>
                        <th>Weight (kg/m)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>SC 100</td><td>100 × 100</td><td>6.0</td><td>10.0</td><td>19.97</td></tr>
                    <tr><td>SC 120</td><td>120 × 120</td><td>6.5</td><td>11.0</td><td>26.22</td></tr>
                    <tr><td>SC 140</td><td>140 × 140</td><td>7.0</td><td>12.0</td><td>33.25</td></tr>
                    <tr><td>SC 150*</td><td>152 × 152</td><td>7.9</td><td>11.9</td><td>36.93</td></tr>
                    <tr><td>SC 160</td><td>160 × 160</td><td>8.0</td><td>13.0</td><td>41.85</td></tr>
                    <tr><td>SC 180</td><td>180 × 180</td><td>8.5</td><td>14.0</td><td>50.48</td></tr>
                    <tr><td>SC 200</td><td>200 × 200</td><td>9.0</td><td>15.0</td><td>60.24</td></tr>
                    <tr><td>SC 220</td><td>220 × 220</td><td>9.5</td><td>16.0</td><td>70.41</td></tr>
                    <tr><td>SC 250</td><td>250 × 250</td><td>10.0</td><td>17.0</td><td>85.54</td></tr>
                </tbody>
            </table>
        </div>

        <h4 class="fw-bold mt-5 mb-3" style="color:#db7227;">HB Heavy Weight Beam & Column Size & Weight Chart</h4>
        <div class="table-responsive mb-5">
            <table class="table table-bordered table-striped text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Section</th>
                        <th>Size (mm)</th>
                        <th>Web Thickness (mm)</th>
                        <th>Flange Thickness (mm)</th>
                        <th>Weight (kg/m)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>HB 150</td><td>150 × 150</td><td>5.4</td><td>9.0</td><td>27.06</td></tr>
                    <tr><td>HB 150*</td><td>150 × 150</td><td>8.4</td><td>9.0</td><td>30.15</td></tr>
                    <tr><td>HB 150*</td><td>150 × 150</td><td>11.8</td><td>9.0</td><td>33.66</td></tr>
                    <tr><td>HB 200</td><td>200 × 200</td><td>6.1</td><td>9.0</td><td>37.31</td></tr>
                    <tr><td>HB 200*</td><td>200 × 200</td><td>7.8</td><td>9.0</td><td>39.73</td></tr>
                    <tr><td>HB 225</td><td>225 × 225</td><td>6.5</td><td>9.1</td><td>43.12</td></tr>
                    <tr><td>HB 225*</td><td>225 × 225</td><td>8.6</td><td>9.1</td><td>46.52</td></tr>
                    <tr><td>HB 250</td><td>250 × 250</td><td>6.9</td><td>9.7</td><td>50.98</td></tr>
                    <tr><td>HB 250*</td><td>250 × 250</td><td>8.8</td><td>9.7</td><td>54.41</td></tr>
                    <tr><td>HB 300</td><td>300 × 250</td><td>7.6</td><td>10.6</td><td>58.74</td></tr>
                    <tr><td>HB 300*</td><td>300 × 250</td><td>9.4</td><td>10.6</td><td>62.67</td></tr>
                    <tr><td>HB 350</td><td>350 × 250</td><td>8.3</td><td>11.6</td><td>67.42</td></tr>
                    <tr><td>HB 350*</td><td>350 × 250</td><td>10.1</td><td>11.6</td><td>72.03</td></tr>
                    <tr><td>HB 400</td><td>400 × 250</td><td>9.1</td><td>12.7</td><td>77.43</td></tr>
                    <tr><td>HB 400*</td><td>400 × 250</td><td>10.6</td><td>12.7</td><td>81.83</td></tr>
                    <tr><td>HB 450</td><td>450 × 250</td><td>9.8</td><td>13.7</td><td>87.22</td></tr>
                    <tr><td>HB 450*</td><td>450 × 250</td><td>11.3</td><td>13.7</td><td>92.19</td></tr>
                </tbody>
            </table>
        </div>
        
        <div class="row g-4 mt-2">
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100 border-0">
                    <h5 class="fw-bold" style="color:#db7227;">Column Section Dimensions</h5>
                    <p class="mb-2">Structural column sections are generally identified by their overall depth, flange width, web thickness and flange thickness. These dimensions determine the geometry and structural properties of the section.</p>
                    <p class="mb-0">The appropriate column size should be selected according to the required load-bearing capacity, column height, structural stability, connection design and applicable engineering requirements.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100 border-0">
                    <h5 class="fw-bold" style="color:#db7227;">Column Weight</h5>
                    <p class="mb-2">The unit weight of a structural column depends on its section dimensions, thickness and geometry. Larger sections and greater thickness generally result in higher weight per metre.</p>
                    <p class="mb-0">For engineering and procurement purposes, the final section weight should be taken from the applicable IS section table or confirmed product specification.</p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card p-4 shadow-sm h-100 border-0">
                    <h5 class="fw-bold" style="color:#db7227;">Standard & Cut-to-Length Supply</h5>
                    <p class="mb-3">Indian Structural Columns can be considered in standard lengths or cut-to-length requirements, subject to product availability and customer specifications.</p>
                    <p class="mb-2">Customers can provide the following details for quotation:</p>
                    <div class="row">
                        <div class="col-md-4">
                            <ul class="list-unstyled mb-0">
                                <li><i class="bi bi-arrow-right text-success me-2"></i>Column Type / Section</li>
                                <li><i class="bi bi-arrow-right text-success me-2"></i>Column Size</li>
                                <li><i class="bi bi-arrow-right text-success me-2"></i>Section Depth</li>
                                <li><i class="bi bi-arrow-right text-success me-2"></i>Flange Width</li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="list-unstyled mb-0">
                                <li><i class="bi bi-arrow-right text-success me-2"></i>Web Thickness</li>
                                <li><i class="bi bi-arrow-right text-success me-2"></i>Flange Thickness</li>
                                <li><i class="bi bi-arrow-right text-success me-2"></i>Material Grade</li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="list-unstyled mb-0">
                                <li><i class="bi bi-arrow-right text-success me-2"></i>Required Length</li>
                                <li><i class="bi bi-arrow-right text-success me-2"></i>Quantity</li>
                                <li><i class="bi bi-arrow-right text-success me-2"></i>Applicable Standard</li>
                            </ul>
                        </div>
                    </div>
                    <div class="alert alert-info mt-4 mb-0 border-0 shadow-sm" role="alert">
                        <strong>Important Note:</strong> Exact column dimensions and unit-weight values should be confirmed against the applicable Indian Standard and Moksh Tubes & Fittings LLP's current product range before publication or procurement.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="grades" class="sec-padd-top sec-padd-bottom">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Grades Available</h2>
            <p class="text-center pb-3">Indian Structural Columns can be supplied in different structural steel grades according to the applicable Indian Standard and project requirements. The selected grade depends on the required mechanical properties, structural loading, column design, fabrication requirements and intended application.</p>
        </div>
        <p class="text-center mb-4">At Moksh Tubes & Fittings LLP, Structural Columns can be sourced according to the customer's specified grade, section, dimensions, length, quantity and applicable standard, subject to product availability.</p>
        
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
                    <p class="mb-0 text-justify">E250 structural steel can be considered for general structural applications where the specified mechanical properties meet the requirements of the design. It may be used for structural frameworks, supports, columns and engineering structures.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 shadow-sm h-100 border-0 bg-light">
                    <h4 class="mb-3 text-center" style="color: #db7227;">E350 Grade</h4>
                    <p class="mb-0 text-justify">E350 structural steel provides a higher specified strength level and can be considered for structural applications requiring increased strength, subject to the applicable specification and engineering design.</p>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-4">
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100 border-0 bg-white shadow-sm border border-secondary border-opacity-25 rounded-3">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Grade Selection</h4>
                    <p class="mb-2">The appropriate grade for an Indian Structural Column should be selected based on:</p>
                    <div class="row">
                        <div class="col-6">
                            <ul class="list-unstyled mb-0">
                                <li><i class="bi bi-check-circle text-success me-2"></i>Required mechanical properties</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Structural loading</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Column height and design</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Section dimensions</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Structural stability requirements</li>
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
                    <p class="mt-3 mb-0 text-justify">Customers should specify the required grade, column section, dimensions, length, quantity and applicable standard when submitting an enquiry.</p>
                </div>
            </div>
            <div class="col-md-6">
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
            <p class="text-center pb-3">Indian Structural Columns are widely used in construction, industrial structures, infrastructure, fabrication and engineering projects where vertical load-bearing and structural support are required.</p>
        </div>
        <div class="row g-4 mt-4">
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-building"></i></div>
                    <h5>Building & Construction</h5>
                    <p class="mb-0 text-center">Structural columns are important load-bearing members in building structures and steel frameworks. Common applications include building structural frameworks, commercial and industrial buildings, steel-framed structures, supporting members, and structural connections and assemblies.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-industry"></i></div>
                    <h5>Industrial Structures</h5>
                    <p class="mb-0 text-center">Indian Structural Columns are used in industrial facilities where strong vertical structural members are required. Applications include industrial sheds, factory structures, warehouses, equipment support structures, and heavy-duty structural frameworks.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-house"></i></div>
                    <h5>Warehouses & Storage Structures</h5>
                    <p class="mb-0 text-center">Structural columns can be used as vertical supporting members in warehouse and storage facilities. Applications include warehouse frameworks, storage structures, roof-support systems, and steel building structures.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-cone-striped"></i></div>
                    <h5>Infrastructure Projects</h5>
                    <p class="mb-0 text-center">Structural columns can be incorporated into infrastructure and civil engineering projects where the specified column section meets the design requirements. Applications include infrastructure frameworks, elevated structures, supporting structures, platforms, and engineering structures.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-tools"></i></div>
                    <h5>Heavy Structural Fabrication</h5>
                    <p class="mb-0 text-center">Structural columns are suitable for fabrication of heavy steel frameworks and assemblies. Applications include structural frames, support structures, heavy fabricated assemblies, industrial platforms, and steel frameworks.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-gear"></i></div>
                    <h5>Machinery & Equipment Supports</h5>
                    <p class="mb-0 text-center">Structural columns can be used as part of supporting frameworks for industrial machinery and equipment where the selected section meets the required structural design.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-nut"></i></div>
                    <h5>Engineering Structures</h5>
                    <p class="mb-0 text-center">Indian Structural Columns are used in various engineering applications requiring vertical steel support members with specified structural properties.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-bezier2"></i></div>
                    <h5>Steel Building Frameworks</h5>
                    <p class="mb-0 text-center">Structural columns can be combined with beams, channels, angles and hollow sections to create complete steel building and industrial frameworks.</p>
                </div>
            </div>
        </div>
        <p class="text-center mt-4 text-muted">The appropriate column section, dimensions and grade should always be selected according to the structural loading, column height, stability requirements, applicable Indian Standard and project specifications.</p>
    </div>
</section>

<section id="uses" class="sec-padd-top sec-padd-bottom">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Uses of Indian Structural Columns</h2>
            <p class="text-center mb-2">Indian Structural Columns are widely used as vertical load-bearing and supporting members in construction, industrial, infrastructure and engineering applications.</p>
        </div>
        <div class="row g-4 mt-4">
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Used for main vertical support in steel building frameworks.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Suitable for industrial sheds and factory structures requiring structural column sections.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Used in warehouses and storage facilities as part of the main structural framework.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Suitable for commercial and industrial buildings where steel columns are specified.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Used for heavy-duty structural frameworks and fabricated steel structures.</h5>
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
                    <h5>Used in platforms, elevated structures and supporting frameworks according to engineering design.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Suitable for infrastructure and civil engineering projects requiring structural steel columns.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Used with structural beams, channels, angles and hollow sections to create complete steel frameworks.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Suitable for general engineering and fabrication applications requiring vertical steel support members.</h5>
                </div>
            </div>
        </div>
        <p class="text-center mt-4 text-muted">The appropriate column section, dimensions, grade and length should be selected according to the structural loading, column height, stability requirements, applicable Indian Standard and project specifications.</p>
    </div>
</section>

<section id="advantages" class="sec-padd-top sec-padd-bottom bg-light">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold text-center" style="color:#174268;">Advantages of Indian Structural Columns</h2>
            <p class="text-center mb-2">Indian Structural Columns provide a reliable solution for vertical load-bearing, structural support and steel framework applications across construction, industrial, infrastructure and engineering projects.</p>
        </div>
        <div class="row g-4 mt-2">
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                    <h5>High Load-Bearing Capability</h5>
                    <p class="mb-0 text-center">Suitable for vertical structural support when the appropriate section is selected according to the engineering design.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-layers"></i></div>
                    <h5>Structural Strength & Rigidity</h5>
                    <p class="mb-0 text-center">Properly selected column sections provide the required strength and rigidity for structural frameworks.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-building"></i></div>
                    <h5>Suitable for Heavy Structures</h5>
                    <p class="mb-0 text-center">Appropriate sections can be selected for industrial buildings, warehouses and other heavy structural applications.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-grid"></i></div>
                    <h5>Wide Application Range</h5>
                    <p class="mb-0 text-center">Suitable for buildings, industrial structures, warehouses, infrastructure, platforms and engineering projects.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-arrows-expand"></i></div>
                    <h5>Different Section Options</h5>
                    <p class="mb-0 text-center">I-shaped, H-shaped and other applicable structural column sections can be selected according to project requirements.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-layout-wtf"></i></div>
                    <h5>Design Flexibility</h5>
                    <p class="mb-0 text-center">Different section depths, flange widths and thicknesses allow engineers to select a suitable column section for the structural design.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-bezier2"></i></div>
                    <h5>Easy Integration</h5>
                    <p class="mb-0 text-center">Can be combined with beams, channels, angles and hollow sections to form complete steel frameworks.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-tools"></i></div>
                    <h5>Fabrication Friendly</h5>
                    <p class="mb-0 text-center">Suitable for common fabrication operations such as cutting, drilling, welding and assembly, subject to applicable specifications.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-file-earmark-check"></i></div>
                    <h5>Multiple Grade Options</h5>
                    <p class="mb-0 text-center">Structural steel grades can be selected according to required mechanical properties and project specifications.</p>
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
                    <div class="advantage-icon"><i class="bi bi-truck"></i></div>
                    <h5>Project-Based Supply</h5>
                    <p class="mb-0 text-center">Column requirements can be specified according to section, dimensions, grade, length and quantity.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-cone-striped"></i></div>
                    <h5>Suitable for Construction & Infrastructure</h5>
                    <p class="mb-0 text-center">Widely applicable to building frameworks, industrial structures, warehouses and infrastructure projects.</p>
                </div>
            </div>
        </div>
        <p class="text-center mt-4 text-muted">The appropriate column section should always be selected according to the structural loading, column height, stability requirements, section properties, applicable Indian Standard and project specifications.</p>
    </div>
</section>

<section id="mechanical-properties" class="sec-padd-top sec-padd-bottom">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Mechanical Properties – Indian Structural Columns</h2>
        </div>
        <p class="text-center mb-4 text-muted">(Typical minimum values as per IS 2062:2011; values vary with material thickness and quality/sub-grade.)</p>
        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle text-center">
                <thead class="table-dark">
                    <tr>
                        <th>Standard / Grade</th>
                        <th>IS 2062 E250</th>
                        <th>IS 2062 E350</th>
                        <th>IS 2062 E410</th>
                        <th>IS 2062 E450</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>Yield Strength (MPa), ≤20 mm</td><td>250</td><td>350</td><td>410</td><td>450</td></tr>
                    <tr><td>Yield Strength (MPa), 20–40 mm</td><td>240</td><td>330</td><td>390</td><td>430</td></tr>
                    <tr><td>Yield Strength (MPa), >40 mm</td><td>230</td><td>320</td><td>380</td><td>420</td></tr>
                    <tr><td>Tensile Strength (MPa), Min.</td><td>410</td><td>490</td><td>540</td><td>570</td></tr>
                    <tr><td>Elongation (%), Min.</td><td>23</td><td>22</td><td>20</td><td>20</td></tr>
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
                <p class="text-center mb-4">Moksh Tubes & Fittings LLP supports customers looking for Indian Structural Columns for construction, industrial, infrastructure, fabrication and engineering requirements. Our supply approach is based on the customer's required column section, dimensions, grade, length, quantity and applicable specifications.</p>
                <div class="row g-4 mt-4">
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-box-seam"></i></div>
                            <h5>Project-Based Sourcing</h5>
                            <p class="mb-0">Structural columns can be sourced according to specific project requirements and technical specifications.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-boxes"></i></div>
                            <h5>Wide Product Range</h5>
                            <p class="mb-0">Different structural column sections, sizes and grades can be considered according to availability and specification.</p>
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
                            <p class="mb-0">Assistance with column dimensions, section specifications, grades and procurement requirements.</p>
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
                            <p class="mb-0">Specific column sections, dimensions, grades, lengths and quantities can be discussed for project requirements.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-building"></i></div>
                            <h5>Suitable for Industrial & Infrastructure Projects</h5>
                            <p class="mb-0">Support for customers sourcing structural columns for construction, fabrication, industrial and infrastructure applications.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-globe"></i></div>
                            <h5>Domestic & International Enquiries</h5>
                            <p class="mb-0">Support for customers requiring Indian Structural Columns for domestic and international project requirements.</p>
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
            <h2 class="fw-bold" style="color: #174268;">FAQ – Indian Structural Columns</h2>
        </div>
        <div class="row g-4 mt-4">
            <div class="col-md-6">
                <div class="accordion-box">
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What are Indian Structural Columns?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Indian Structural Columns are structural steel sections primarily used as vertical load-bearing and supporting members in buildings, industrial structures, warehouses, infrastructure and engineering projects.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What are Structural Columns used for?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Structural Columns are commonly used in steel building frameworks, industrial sheds, warehouses, supporting structures, platforms, infrastructure projects and heavy fabrication.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What types of Structural Columns are available?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Structural Columns can include different I-shaped, H-shaped and other applicable structural column sections, depending on the Indian Standard and project requirements.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Which standards are applicable to Indian Structural Columns?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Structural Columns can be supplied according to the applicable Indian Standard or project specification. The exact standard should be confirmed according to the required section and application.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Which grades are available for Indian Structural Columns?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Grades such as IS 2062, E250 and E350 may be considered according to the applicable specification and product availability. Exact grade availability should be confirmed at the time of enquiry.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What sizes of Indian Structural Columns are available?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Structural Columns are available in different section depths, flange widths, web thicknesses and flange thicknesses. Actual size availability depends on the applicable standard and Moksh Tubes & Fittings LLP's current product range.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="accordion-box">
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Can Structural Columns be supplied in custom lengths?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Yes. Standard and cut-to-length requirements can be considered depending on product availability and customer specifications.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>How do I select the right Structural Column?</h4>
                        </div>
                        <div class="accord-content">
                            <p>The appropriate column section should be selected according to load requirements, column height, section properties, structural stability, dimensions, material grade and engineering design.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Can Moksh Tubes & Fittings LLP supply Structural Columns in bulk?</h4>
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
                            <p>Customers should provide the column section, size, section depth, flange width, web thickness, flange thickness, material grade, required length, quantity and applicable standard.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Can Structural Columns be used with other structural steel sections?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Yes. Structural Columns can be combined with structural beams, channels, angles and hollow sections to create complete steel building and industrial frameworks.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Does Moksh Tubes & Fittings LLP support international enquiries?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Yes. International enquiries for Indian Structural Columns can be discussed based on the required product specification, quantity and delivery requirements.</p>
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
            <p class="fs-5 mt-3">Looking for Indian Structural Columns for your construction, industrial, infrastructure or fabrication project?</p>
            <p class="mb-4 text-light">
                Contact <strong>Moksh Tubes & Fittings LLP</strong> for Structural Column requirements based on your required column section, dimensions, grade, length and quantity.<br>
                Share your project specifications, drawings or material requirements with our team to discuss the suitable Indian Structural Columns for your application.
            </p>
            <a href="{{ route('contact-us') ?? '#' }}" class="btn btn-lg text-white shadow"
                style="background-color:#db7227; border-radius:8px; padding: 12px 30px;">Contact Us Now</a>
            <p class="mt-4 mb-0 text-light opacity-75">📞 Contact Moksh Tubes & Fittings LLP at +91 97695 84950 for product availability, technical specifications and quotation enquiries.</p>
        </div>
    </div>
</section>

@endsection
