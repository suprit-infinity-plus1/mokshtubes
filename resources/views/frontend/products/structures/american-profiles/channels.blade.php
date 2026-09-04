@extends('layouts.master')
@section('title', 'American Structural Channels | ASTM / AISC Steel Channels')
@section('meta_description', 'American Structural Channels for construction, fabrication, infrastructure and industrial applications. ASTM / AISC specification-based steel channels from Moksh Tubes & Fittings LLP.')
@section('canonical', url()->current())
@section('og_type', 'product')
@section('og_title', 'American Structural Channels | ASTM / AISC Steel Channels')
@section('og_description', 'American Structural Channels for construction, fabrication, infrastructure and industrial applications. ASTM / AISC specification-based steel channels from Moksh Tubes & Fittings LLP.')
@section('twitter_title', 'American Structural Channels | ASTM / AISC Steel Channels')
@section('twitter_description', 'American Structural Channels for construction, fabrication, infrastructure and industrial applications. ASTM / AISC specification-based steel channels from Moksh Tubes & Fittings LLP.')

@section('content')
<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image: url({{ asset('assets/images/product/default-bg.jpg') }});">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto text-center">
                <h1 class="page-title">American Structural Channels – ASTM / AISC Steel Channels</h1>
                <p class="text-center mt-3 px-3 py-2 text-white position-relative" style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                    American Structural Channels are channel-shaped structural steel sections widely used in construction, industrial structures, infrastructure, fabrication and engineering applications. Their open channel profile provides a practical solution for structural framing, supports, bracing, platforms, equipment structures and fabricated assemblies.
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
            <h2 class="fw-bold" style="color: #174268;">American Structural Channels</h2>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="https://placehold.co/550x350" alt="American Structural Channels" class="img-fluid rounded shadow-sm" loading="lazy">
            </div>
            <div class="col-md-6">
                <p class="fs-6 mb-3 text-justify"><strong>American Structural Channels</strong> are structural steel sections with a channel-shaped profile commonly used as supporting and framing members in buildings, industrial facilities, infrastructure and engineering structures.</p>
                <p class="fs-6 mb-3 text-justify">Their open-section geometry makes them suitable for a variety of applications requiring structural support, framing, reinforcement and fabricated assemblies. The appropriate channel section is selected according to section dimensions, thickness, loading conditions, structural design and project requirements.</p>
                <p class="fs-6 mb-3 text-justify">American Structural Channels are commonly specified according to ASTM material standards and AISC structural requirements. The applicable specification depends on the required material grade, section, design and project documentation.</p>
                <p class="fs-6 mb-3 text-justify">At <a href="{{ route('index') }}">Moksh Tubes & Fittings LLP</a>, we support requirements for American Structural Channels based on customer drawings, technical specifications and project requirements. Customers can specify the required channel section, dimensions, thickness, material grade, length, quantity and applicable ASTM / AISC specification.</p>
                <p class="fs-6 mb-3 text-justify">American Structural Channels can be used together with American Structural Angles, Beams, Columns and Hollow Structural Sections (HSS) to create complete steel frameworks and fabricated structural assemblies.</p>
                <p class="fs-6 mb-3 text-justify">For an accurate quotation, customers can provide their required channel section, dimensions, thickness, ASTM grade, length, quantity and applicable AISC requirements, along with project drawings or technical documentation where required.</p>
            </div>
        </div>
    </div>
</section>

<!-- Datasheet Download -->
<section class="sec-padd-bottom bg-light">
    <div class="datasheet-download px-4 text-center">
        <h3 class="mb-3" style="color:#174268;">Download American Structural Channels Datasheet</h3>
        <p class="mb-3">
            Get the complete American Structural Channels datasheet with chemical composition,
            mechanical properties, heat treatment details, and applications.
            Enter your email to receive the PDF instantly.
        </p>

        <!-- Lead Capture Form -->
        <form id="leadForm" method="POST" action="{{ route('lead.capture') }}" class="mb-3">
            @csrf

            <input type="hidden" name="page_path" value="{{ $slug ?? 'american-structural-channels' }}">

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
            <p class="text-center">American Structural Channels are available in different section depths, flange dimensions, web thicknesses, lengths and structural steel grades according to applicable ASTM material specifications, AISC requirements and project specifications.</p>
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
                            <tr><th>Product</th><td>American Structural Channels</td></tr>
                            <tr><th>Profile</th><td>Channel / C-Shaped Structural Section</td></tr>
                            <tr><th>Material</th><td>Carbon Steel / Structural Steel</td></tr>
                            <tr><th>Types</th><td>Structural Channel Sections as per applicable ASTM / AISC requirements</td></tr>
                            <tr><th>Standards</th><td>Applicable ASTM Standards / AISC Requirements</td></tr>
                            <tr><th>Grades</th><td>As per applicable ASTM material specification</td></tr>
                            <tr><th>Section Depth</th><td>Various standard sizes</td></tr>
                            <tr><th>Flange Width</th><td>As per selected channel section</td></tr>
                            <tr><th>Web Thickness</th><td>As per selected section</td></tr>
                            <tr><th>Flange Thickness</th><td>As per selected section</td></tr>
                            <tr><th>Length</th><td>Standard Lengths / Cut-to-Length</td></tr>
                            <tr><th>Surface</th><td>Mill Finish / As Specified</td></tr>
                            <tr><th>Supply Form</th><td>Individual Sections / Bundles</td></tr>
                            <tr><th>Customization</th><td>Size, thickness, length and grade as required</td></tr>
                            <tr><th>Applications</th><td>Construction, Fabrication, Infrastructure, Industrial & Engineering</td></tr>
                        </tbody>
                    </table>
                </div>
        
        <div class="row g-4 mt-4">
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Channel Section Dimensions</h4>
                    <p class="mb-0 text-justify">American Structural Channels are identified according to their nominal section depth, flange dimensions and thickness. The selected section depends on the required structural properties, loading conditions and engineering design.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">ASTM Specifications</h4>
                    <p class="mb-0 text-justify">The applicable ASTM material specification depends on the required steel grade and project requirements. Material requirements such as chemical composition and mechanical properties should be confirmed against the applicable ASTM specification.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">AISC Requirements</h4>
                    <p class="mb-0 text-justify">AISC requirements may be referenced for structural steel design, section properties and application of American structural members. The applicable project drawings and engineering specifications should determine the required AISC requirements.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Material & Grade</h4>
                    <p class="mb-0 text-justify">The material grade is selected according to the applicable ASTM specification and project requirements. Customers can specify the required grade along with the channel section and dimensions.</p>
                </div>
            </div>
        </div>
        
        <div class="row g-4 mt-2">
            <div class="col-md-4">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Dimensional Availability</h4>
                    <p class="mb-2">American Structural Channels can be specified according to:</p>
                    <ul class="list-unstyled mb-0">
                        <li><i class="bi bi-check2 text-success me-2"></i>Channel Section</li>
                        <li><i class="bi bi-check2 text-success me-2"></i>Section Depth & Flanges</li>
                        <li><i class="bi bi-check2 text-success me-2"></i>Web & Flange Thickness</li>
                        <li><i class="bi bi-check2 text-success me-2"></i>Material Grade</li>
                        <li><i class="bi bi-check2 text-success me-2"></i>Required Length</li>
                        <li><i class="bi bi-check2 text-success me-2"></i>Quantity</li>
                        <li><i class="bi bi-check2 text-success me-2"></i>Applicable ASTM Specification</li>
                        <li><i class="bi bi-check2 text-success me-2"></i>Applicable AISC Requirements</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Length Availability</h4>
                    <p class="mb-0 text-justify">Structural channels can be considered in standard lengths or cut-to-length requirements, depending on product availability and customer specifications.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Supply Requirements</h4>
                    <p class="mb-2 text-justify">For an accurate quotation, customers should provide the required channel section, dimensions, thickness, material grade, length, quantity and applicable ASTM / AISC specification.</p>
                    <p class="mb-2 text-justify">Project drawings or technical specifications can also be shared where specific structural requirements need to be considered.</p>
                    <p class="mb-0 text-justify">Moksh Tubes & Fittings LLP can support standard and project-based requirements for American Structural Channels, subject to product availability and agreed specifications.</p>
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
        <h4 class="fw-bold mt-4 mb-3" style="color:#db7227;">C – American Standard Channels</h4>
        <div class="table-responsive mb-4">
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
                    <tr><td>C3 × 4.1</td><td>3.00</td><td>1.410</td><td>0.170</td><td>0.312</td><td>4.1</td></tr>
                    <tr><td>C3 × 5</td><td>3.00</td><td>1.498</td><td>0.258</td><td>0.258</td><td>5.0</td></tr>
                    <tr><td>C3 × 6</td><td>3.00</td><td>1.596</td><td>0.356</td><td>0.356</td><td>6.0</td></tr>
                    <tr><td>C4 × 5.4</td><td>4.00</td><td>1.584</td><td>0.184</td><td>0.321</td><td>5.4</td></tr>
                    <tr><td>C4 × 7.25</td><td>4.00</td><td>1.647</td><td>0.280</td><td>0.296</td><td>7.25</td></tr>
                    <tr><td>C5 × 6.7</td><td>5.00</td><td>1.750</td><td>0.190</td><td>0.325</td><td>6.7</td></tr>
                    <tr><td>C5 × 9</td><td>5.00</td><td>1.885</td><td>0.325</td><td>0.325</td><td>9.0</td></tr>
                    <tr><td>C6 × 8.2</td><td>6.00</td><td>1.920</td><td>0.200</td><td>0.314</td><td>8.2</td></tr>
                    <tr><td>C6 × 10.5</td><td>6.00</td><td>1.956</td><td>0.260</td><td>0.358</td><td>10.5</td></tr>
                    <tr><td>C6 × 13</td><td>6.00</td><td>2.034</td><td>0.315</td><td>0.437</td><td>13.0</td></tr>
                    <tr><td>C7 × 9.8</td><td>7.00</td><td>2.090</td><td>0.210</td><td>0.337</td><td>9.8</td></tr>
                    <tr><td>C7 × 12.25</td><td>7.00</td><td>2.105</td><td>0.280</td><td>0.378</td><td>12.25</td></tr>
                    <tr><td>C7 × 14.75</td><td>7.00</td><td>2.121</td><td>0.315</td><td>0.437</td><td>14.75</td></tr>
                    <tr><td>C8 × 11.5</td><td>8.00</td><td>2.260</td><td>0.220</td><td>0.330</td><td>11.5</td></tr>
                    <tr><td>C8 × 13.75</td><td>8.00</td><td>2.343</td><td>0.285</td><td>0.375</td><td>13.75</td></tr>
                    <tr><td>C8 × 18.75</td><td>8.00</td><td>2.527</td><td>0.400</td><td>0.487</td><td>18.75</td></tr>
                    <tr><td>C10 × 15.3</td><td>10.00</td><td>2.600</td><td>0.230</td><td>0.379</td><td>15.3</td></tr>
                    <tr><td>C10 × 20</td><td>10.00</td><td>2.886</td><td>0.380</td><td>0.436</td><td>20.0</td></tr>
                    <tr><td>C10 × 25</td><td>10.00</td><td>2.949</td><td>0.435</td><td>0.480</td><td>25.0</td></tr>
                    <tr><td>C12 × 20.7</td><td>12.00</td><td>2.942</td><td>0.282</td><td>0.501</td><td>20.7</td></tr>
                    <tr><td>C12 × 25</td><td>12.00</td><td>3.047</td><td>0.390</td><td>0.517</td><td>25.0</td></tr>
                    <tr><td>C12 × 30</td><td>12.00</td><td>3.170</td><td>0.510</td><td>0.510</td><td>30.0</td></tr>
                    <tr><td>C15 × 33.9</td><td>15.00</td><td>3.400</td><td>0.400</td><td>0.625</td><td>33.9</td></tr>
                    <tr><td>C15 × 40</td><td>15.00</td><td>3.520</td><td>0.550</td><td>0.650</td><td>40.0</td></tr>
                    <tr><td>C15 × 50</td><td>15.00</td><td>3.716</td><td>0.650</td><td>0.750</td><td>50.0</td></tr>
                </tbody>
            </table>
        </div>

        <h4 class="fw-bold mt-4 mb-3" style="color:#db7227;">MC – Miscellaneous American Channels</h4>
        <div class="table-responsive">
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
                    <tr><td>MC6 × 6.5</td><td>6.00</td><td>2.034</td><td>0.230</td><td>0.290</td><td>6.5</td></tr>
                    <tr><td>MC6 × 8.2</td><td>6.00</td><td>2.035</td><td>0.260</td><td>0.312</td><td>8.2</td></tr>
                    <tr><td>MC6 × 10</td><td>6.00</td><td>2.034</td><td>0.280</td><td>0.356</td><td>10.0</td></tr>
                    <tr><td>MC6 × 12</td><td>6.00</td><td>2.034</td><td>0.315</td><td>0.437</td><td>12.0</td></tr>
                    <tr><td>MC7 × 6.8</td><td>7.00</td><td>2.045</td><td>0.230</td><td>0.290</td><td>6.8</td></tr>
                    <tr><td>MC7 × 9</td><td>7.00</td><td>2.045</td><td>0.260</td><td>0.312</td><td>9.0</td></tr>
                    <tr><td>MC7 × 11.5</td><td>7.00</td><td>2.050</td><td>0.290</td><td>0.375</td><td>11.5</td></tr>
                    <tr><td>MC8 × 8.5</td><td>8.00</td><td>2.260</td><td>0.230</td><td>0.310</td><td>8.5</td></tr>
                    <tr><td>MC8 × 11.5</td><td>8.00</td><td>2.260</td><td>0.285</td><td>0.375</td><td>11.5</td></tr>
                    <tr><td>MC8 × 13.75</td><td>8.00</td><td>2.343</td><td>0.310</td><td>0.437</td><td>13.75</td></tr>
                    <tr><td>MC8 × 18.7</td><td>8.00</td><td>2.527</td><td>0.400</td><td>0.487</td><td>18.7</td></tr>
                    <tr><td>MC10 × 8.4</td><td>10.00</td><td>2.600</td><td>0.230</td><td>0.290</td><td>8.4</td></tr>
                    <tr><td>MC10 × 12</td><td>10.00</td><td>2.600</td><td>0.280</td><td>0.375</td><td>12.0</td></tr>
                    <tr><td>MC10 × 15.3</td><td>10.00</td><td>2.600</td><td>0.340</td><td>0.435</td><td>15.3</td></tr>
                    <tr><td>MC10 × 20</td><td>10.00</td><td>2.886</td><td>0.380</td><td>0.436</td><td>20.0</td></tr>
                    <tr><td>MC12 × 10.6</td><td>12.00</td><td>2.942</td><td>0.230</td><td>0.350</td><td>10.6</td></tr>
                    <tr><td>MC12 × 14.3</td><td>12.00</td><td>2.942</td><td>0.260</td><td>0.400</td><td>14.3</td></tr>
                    <tr><td>MC12 × 18</td><td>12.00</td><td>2.942</td><td>0.330</td><td>0.500</td><td>18.0</td></tr>
                    <tr><td>MC12 × 22</td><td>12.00</td><td>3.047</td><td>0.390</td><td>0.517</td><td>22.0</td></tr>
                    <tr><td>MC12 × 30</td><td>12.00</td><td>3.170</td><td>0.510</td><td>0.510</td><td>30.0</td></tr>
                    <tr><td>MC15 × 33.9</td><td>15.00</td><td>3.400</td><td>0.400</td><td>0.625</td><td>33.9</td></tr>
                    <tr><td>MC15 × 40</td><td>15.00</td><td>3.520</td><td>0.550</td><td>0.650</td><td>40.0</td></tr>
                    <tr><td>MC15 × 50</td><td>15.00</td><td>3.716</td><td>0.650</td><td>0.750</td><td>50.0</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<section id="grades" class="sec-padd-top sec-padd-bottom">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Grades Available</h2>
            <p class="text-center pb-3">American Structural Channels can be supplied in different structural steel grades according to applicable ASTM material specifications, AISC requirements and project specifications. The selected grade depends on the required mechanical properties, structural loading, fabrication requirements and intended application.</p>
        </div>
        <p class="text-center mb-4">At Moksh Tubes & Fittings LLP, American Structural Channels can be sourced according to the customer's specified grade, channel section, dimensions, thickness, length, quantity and applicable ASTM / AISC requirements, subject to product availability.</p>
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
                    <tr><td>ASTM A992</td><td>Structural Steel</td><td>Structural applications where specified by project requirements</td></tr>
                    <tr><td>Other ASTM Grades</td><td>Structural Steel</td><td>As per project specification and requirement</td></tr>
                </tbody>
            </table>
        </div>
        <div class="row g-4 mt-4">
            <div class="col-md-4">
                <div class="card p-4 shadow-sm h-100 border-0 bg-light">
                    <h4 class="mb-3 text-center" style="color: #db7227;">ASTM A36</h4>
                    <p class="mb-0 text-justify">ASTM A36 is a widely specified carbon structural steel grade used for general construction, fabrication and engineering applications. It can be considered for structural channel requirements where the specified material properties meet the project requirements.</p>
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
                    <p class="mb-0 text-justify">ASTM A992 is a structural steel specification commonly associated with structural shapes used in building construction. Its suitability for a particular channel application should be confirmed against the applicable product and project specification.</p>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-4">
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100 border-0 bg-white shadow-sm border border-secondary border-opacity-25 rounded-3">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Grade Selection</h4>
                    <p class="mb-2">The appropriate grade for an American Structural Channel should be selected based on:</p>
                    <div class="row">
                        <div class="col-6">
                            <ul class="list-unstyled mb-0">
                                <li><i class="bi bi-check-circle text-success me-2"></i>Required mechanical properties</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Structural loading</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Section dimensions</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Design requirements</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Fabrication requirements</li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="list-unstyled mb-0">
                                <li><i class="bi bi-check-circle text-success me-2"></i>Welding requirements</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Applicable ASTM specification</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>AISC requirements</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Project specification</li>
                            </ul>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-justify">Customers should specify the required ASTM grade, channel section, dimensions, thickness, length and quantity when submitting an enquiry.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100 border-0 bg-white shadow-sm border border-secondary border-opacity-25 rounded-3">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Material Documentation</h4>
                    <p class="mb-3 text-justify">Where required and agreed at the time of order, applicable material test certificates and supporting documentation can be provided according to the purchase order and project requirements.</p>
                    <div class="alert alert-warning mb-0 border-0 shadow-sm" role="alert">
                        <strong>Note:</strong> Exact grade availability should be confirmed with Moksh Tubes & Fittings LLP before ordering, as availability may vary according to channel section, size, thickness, specification and project requirements.
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
            <p class="text-center pb-3">American Structural Channels are widely used in construction, industrial structures, infrastructure, fabrication and engineering projects where channel-shaped structural steel sections are required for support, framing, bracing and structural assemblies.</p>
        </div>
        <div class="row g-4 mt-4">
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-building"></i></div>
                    <h5>Building & Construction</h5>
                    <p class="mb-0 text-center">Steel structural frameworks, roof structures, supporting members, bracing systems, structural connections and fabricated building components.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-industry"></i></div>
                    <h5>Industrial Structures</h5>
                    <p class="mb-0 text-center">Industrial buildings, factory structures, equipment support structures, platforms, walkways and steel frameworks.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-shop"></i></div>
                    <h5>Warehouses & Industrial Sheds</h5>
                    <p class="mb-0 text-center">Structural framing, roof-support systems, supporting members and fabricated steel frameworks.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-cone-striped"></i></div>
                    <h5>Infrastructure Projects</h5>
                    <p class="mb-0 text-center">Infrastructure frameworks, supporting structures, platforms, access structures and fabricated steel components.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-gear"></i></div>
                    <h5>Steel Fabrication</h5>
                    <p class="mb-0 text-center">Frames, brackets, supports, base structures, structural assemblies and equipment supports.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-tools"></i></div>
                    <h5>Machinery & Equipment Structures</h5>
                    <p class="mb-0 text-center">Support structures for industrial machinery and equipment where the selected channel section meets the required structural design.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-arrow-down-up"></i></div>
                    <h5>Platforms & Walkways</h5>
                    <p class="mb-0 text-center">Industrial platforms, walkways and access structures where the specified section provides the required structural properties.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-nut"></i></div>
                    <h5>General Engineering Applications</h5>
                    <p class="mb-0 text-center">Engineering and fabrication projects requiring a rigid channel-shaped steel section for support, framing or structural assemblies.</p>
                </div>
            </div>
        </div>
        <p class="text-center mt-4 text-muted">The appropriate channel section, dimensions and grade should always be selected according to the structural design, loading conditions, applicable ASTM specification, AISC requirements and project specifications.</p>
    </div>
</section>

<section id="uses" class="sec-padd-top sec-padd-bottom">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Uses & Advantages</h2>
            <p class="text-center mb-2">American Structural Channels are versatile channel-shaped steel sections used for structural support, framing, reinforcement and fabrication across construction, industrial, infrastructure and engineering applications.</p>
        </div>
        <div class="row g-4 mt-4 mb-5">
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-building"></i></div>
                    <h5>Steel structural frameworks in commercial, industrial and building construction projects</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-hammer"></i></div>
                    <h5>Supporting members and framing systems where American structural channel sections are specified</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-shop"></i></div>
                    <h5>Industrial sheds and warehouses for structural and supporting frameworks</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-arrow-down-up"></i></div>
                    <h5>Platforms, walkways and access structures in industrial and engineering facilities</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-tools"></i></div>
                    <h5>Machinery and equipment support structures according to engineering design requirements</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-gear"></i></div>
                    <h5>Fabricated frames, brackets, supports and base structures</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-cone-striped"></i></div>
                    <h5>Infrastructure and civil engineering projects requiring ASTM-specified structural steel sections</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-bounding-box-circles"></i></div>
                    <h5>General steel fabrication and structural assemblies</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check2-circle"></i></div>
                    <h5>Structural connections and supporting members according to project requirements</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-box"></i></div>
                    <h5>Can be combined with American Structural Angles, Beams, Columns and HSS</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                    <h5>Heavy-duty structural applications meeting required design and section-property requirements</h5>
                </div>
            </div>
        </div>
        
        <h4 class="fw-bold mt-5 mb-3 text-center" style="color:#174268;">ADVANTAGES OF AMERICAN STRUCTURAL CHANNELS</h4>
        <p class="text-center mb-2">American Structural Channels provide a versatile structural steel solution for construction, industrial fabrication, infrastructure and engineering applications. Their channel-shaped profile makes them suitable for supporting, framing and fabricated structural assemblies.</p>
        <div class="row g-4 mt-2">
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-diagram-3"></i></div>
                    <h5>Structural Strength for structural support and framing applications</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-square-half"></i></div>
                    <h5>Rigid Channel Profile provides a practical section for structural frameworks</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-grid"></i></div>
                    <h5>Wide Application Range suitable for buildings, industrial structures, warehouses</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-tags"></i></div>
                    <h5>ASTM Grade Options available according to project requirements</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-file-earmark-check"></i></div>
                    <h5>AISC-Based Selection aligned with engineering specifications</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-arrows-fullscreen"></i></div>
                    <h5>Different Section Sizes available in different section depths and flanges</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-screwdriver"></i></div>
                    <h5>Easy Fabrication for cutting, drilling, welding and assembly</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-bezier"></i></div>
                    <h5>Design Flexibility into different structural frameworks and support systems</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-truck-flatbed"></i></div>
                    <h5>Suitable for Heavy Structures in industrial structures and heavy-duty applications</h5>
                </div>
            </div>
        </div>

        <p class="text-center mt-4 text-muted">The appropriate channel section, dimensions, thickness and grade should be selected according to the structural design, loading conditions, applicable ASTM specification, AISC requirements and project specifications.</p>
    </div>
</section>

<section id="mechanical-properties" class="sec-padd-top sec-padd-bottom">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Mechanical Properties</h2>
            <p class="text-center pb-3">Typical minimum values for commonly specified ASTM structural steel grades.</p>
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
        <p class="mt-2 text-muted text-center"><small>AISC identifies ASTM A36 as a common specification for channels, while 50-ksi grades such as A572 Grade 50 and A992 can also be used where available and specified appropriately.</small></p>
    </div>
</section>

<section id="why-choose-us" class="sec-padd-top sec-padd-bottom bg-light">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Why Choose Moksh Tubes & Fittings LLP?</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p>Moksh Tubes & Fittings LLP supports customers looking for American Structural Channels for construction, industrial, infrastructure, fabrication and engineering requirements. Our supply approach is based on the customer's required channel section, dimensions, thickness, grade, length, quantity and applicable ASTM / AISC specifications.</p>
                <div class="row g-4 mt-4">
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-box-seam"></i></div>
                            <h5>Project-Based Sourcing</h5>
                            <p class="mb-0">American Structural Channels can be sourced according to specific project requirements and technical specifications.</p>
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
                            <div class="why-banner-icon"><i class="bi bi-rulers"></i></div>
                            <h5>AISC Requirements</h5>
                            <p class="mb-0">Structural channel requirements can be considered according to applicable AISC project and engineering requirements.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-boxes"></i></div>
                            <h5>Wide Product Range</h5>
                            <p class="mb-0">Different channel sections, dimensions, thicknesses and structural steel grades can be considered according to customer requirements.</p>
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
                            <p class="mb-0">Product requirements can be matched with customer drawings, technical specifications and project documentation.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-headset"></i></div>
                            <h5>Technical Support</h5>
                            <p class="mb-0">Assistance with channel dimensions, material grades, ASTM specifications and procurement requirements.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-sliders"></i></div>
                            <h5>Custom Requirements</h5>
                            <p class="mb-0">Specific channel sections, dimensions, thicknesses, grades, lengths and quantities can be discussed for project requirements.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-building"></i></div>
                            <h5>Industrial & Infrastructure Projects</h5>
                            <p class="mb-0">Support for customers sourcing American Structural Channels for construction, fabrication, industrial and infrastructure applications.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-globe"></i></div>
                            <h5>International Project Support</h5>
                            <p class="mb-0">Suitable for customers requiring American-specification structural steel channels for domestic and international projects.</p>
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

<!--Start faq content area-->
<section id="faq" class="faq-content-area sec-padd2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="accordion-box">
                    <div class="section-title center">
                        <h2>Frequently Asked Questions (FAQ)</h2>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What are American Structural Channels?</h4>
                        </div>
                        <div class="accord-content">
                            <p>American Structural Channels are channel-shaped structural steel sections used in construction, industrial structures, infrastructure, fabrication and engineering applications.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What are American Structural Channels used for?</h4>
                        </div>
                        <div class="accord-content">
                            <p>They are commonly used for structural frameworks, supporting members, platforms, walkways, industrial sheds, machinery supports and fabricated steel assemblies.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What is the profile of an American Structural Channel?</h4>
                        </div>
                        <div class="accord-content">
                            <p>An American Structural Channel generally has an open channel or C-shaped profile consisting of a web and flanges that provide structural support and rigidity.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Which standards apply to American Structural Channels?</h4>
                        </div>
                        <div class="accord-content">
                            <p>American Structural Channels can be specified according to applicable ASTM material standards and AISC requirements, depending on the project and engineering specification.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Which ASTM grades are available for American Structural Channels?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Grades such as ASTM A36, ASTM A572 Grade 50 and ASTM A992 may be considered according to the applicable material specification and project requirements. Exact availability should be confirmed at the time of enquiry.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What sizes of American Structural Channels are available?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Structural Channels are available in different section depths, flange widths and thicknesses. Actual availability depends on the applicable AISC section tables and Moksh Tubes & Fittings LLP's current product range.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Can American Structural Channels be supplied in custom lengths?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Yes. Standard and cut-to-length requirements can be considered depending on product availability and customer specifications.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>How do I select the right American Structural Channel?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Selection should consider the required section, dimensions, loading conditions, structural design, material grade, connection requirements and applicable ASTM / AISC specifications.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Can Moksh Tubes & Fittings LLP supply American Structural Channels in bulk?</h4>
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
                            <p>Customers should provide the channel section, section depth, flange width, web thickness, flange thickness, ASTM grade, required length, quantity and applicable AISC requirements.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Can American Structural Channels be used with other American structural sections?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Yes. They can be used with American Structural Angles, Beams, Columns and Hollow Structural Sections (HSS) to create complete steel frameworks and fabricated assemblies.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Does Moksh Tubes & Fittings LLP support international enquiries?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Yes. International enquiries for American Structural Channels can be discussed based on the required ASTM specification, section, dimensions, quantity and delivery requirements.</p>
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
            <p class="fs-5 mt-3">Looking for American Structural Channels for your construction, industrial, infrastructure or fabrication project?</p>
            <p class="mb-4 text-light">
                Contact <strong>Moksh Tubes & Fittings LLP</strong> for American Structural Channel requirements based on your required channel section, dimensions, thickness, ASTM grade, length and quantity.<br>
                Share your project specifications, drawings or material requirements with our team to discuss the suitable American Structural Channels for your application.
            </p>
            <a href="{{ route('contact-us') ?? '#' }}" class="btn btn-lg text-white shadow"
                style="background-color:#db7227; border-radius:8px; padding: 12px 30px;">Contact Us Now</a>
            <p class="mt-4 mb-0 text-light opacity-75">📞 Contact Moksh Tubes & Fittings LLP at <a href="tel:+919769584950" class="text-light fw-bold text-decoration-none">+91 97695 84950</a> for product availability, technical specifications and quotation enquiries.</p>
        </div>
    </div>
</section>

@endsection
