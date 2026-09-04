@extends('layouts.master')
@section('title', 'European Structural Channels | EN Standard Steel Channels')
@section('meta_description', 'European Structural Channels including UPN and UPE profiles for construction, fabrication, infrastructure and industrial applications. Enquire with Moksh Tubes & Fittings LLP.')
@section('canonical', url()->current())
@section('og_type', 'product')
@section('og_title', 'European Structural Channels | EN Standard Steel Channels')
@section('og_description', 'European Structural Channels including UPN and UPE profiles for construction, fabrication, infrastructure and industrial applications. Enquire with Moksh Tubes & Fittings LLP.')
@section('twitter_title', 'European Structural Channels | EN Standard Steel Channels')
@section('twitter_description', 'European Structural Channels including UPN and UPE profiles for construction, fabrication, infrastructure and industrial applications. Enquire with Moksh Tubes & Fittings LLP.')

@section('content')
<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image: url({{ asset('assets/images/product/default-bg.jpg') }});">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto text-center">
                <h1 class="page-title">European Structural Channels – EN Standard Steel Channels</h1>
                <p class="text-center mt-3 px-3 py-2 text-white position-relative" style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                    European Structural Channels are channel-shaped structural steel sections manufactured and specified according to applicable European Standards (EN). Common profiles include U-shaped and channel sections, widely used in construction, industrial structures, infrastructure, fabrication and engineering applications.<br><br>At <a href="https://mokshtubes.com" class="text-white text-decoration-underline" target="_blank">Moksh Tubes & Fittings LLP</a>, we supply European Structural Channels according to customer and project requirements, including specified channel profile, dimensions, thickness, material grade, length, quantity and applicable EN standards.
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
            <h2 class="fw-bold" style="color: #174268;">European Structural Channels</h2>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="{{ asset('/assets/images/product/default-channels.jpg') }}" alt="European Structural Channels" class="img-fluid rounded shadow-sm" loading="lazy">
            </div>
            <div class="col-md-6">
                <p class="fs-6 mb-3 text-justify"><strong>European Structural Channels</strong> are open-profile structural steel sections commonly used as supporting and framing members in buildings, industrial facilities, infrastructure and engineering structures.</p>
                <p class="fs-6 mb-3 text-justify">Their channel-shaped geometry provides a practical solution for structural framing, supports, bracing, platforms, frames and fabricated assemblies. Different channel profiles can be selected according to the required section properties, dimensions, loading conditions and engineering design.</p>
                <p class="fs-6 mb-3 text-justify">European channel sections may include profiles such as UPN, UPE and other applicable European channel sections, depending on the project specification and required standard.</p>
                <p class="fs-6 mb-3 text-justify">European Structural Channels are specified according to applicable EN standards, with the material grade selected according to the required mechanical properties and project requirements. Common structural steel grades may include S235JR, S275JR, S355JR and S355J2, subject to the applicable specification.</p>
                <p class="fs-6 mb-3 text-justify">At Moksh Tubes & Fittings LLP, we support requirements for European Structural Channels based on customer drawings, technical specifications and project requirements. Customers can specify the required channel designation, dimensions, material grade, length, quantity and applicable EN specification.</p>
                <p class="fs-6 mb-3 text-justify">European Structural Channels can also be used together with European Structural Angles, Beams, Columns and Hollow Sections to create complete steel frameworks and fabricated structural assemblies.</p>
                <p class="fs-6 mb-0 text-justify">For an accurate quotation, customers can provide their required channel profile, designation, dimensions, thickness, grade, length and quantity, along with project drawings or technical documentation where required.</p>
            </div>
        </div>
    </div>
</section>

<!-- Datasheet Download -->
<section class="sec-padd-bottom bg-light">
    <div class="datasheet-download px-4 text-center">
        <h3 class="mb-3" style="color:#174268;">Download European Structural Channels Datasheet</h3>
        <p class="mb-3">
            Get the complete European Structural Channels datasheet with chemical composition,
            mechanical properties, heat treatment details, and applications.
            Enter your email to receive the PDF instantly.
        </p>

        <!-- Lead Capture Form -->
        <form id="leadForm" method="POST" action="{{ route('lead.capture') }}" class="mb-3">
            @csrf
            <input type="hidden" name="page_path" value="{{ $slug ?? 'european-structural-channels' }}">
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
            <p class="text-center">European Structural Channels are available in different channel profiles, section depths, flange widths, web thicknesses, flange thicknesses, lengths and structural steel grades according to applicable European Standards (EN) and project specifications.</p>
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
                    <tr><td>Product</td><td>European Structural Channels</td></tr>
                    <tr><td>Profile</td><td>U-Shaped / Channel Structural Section</td></tr>
                    <tr><td>Common Types</td><td>UPN / UPE & Other Applicable EN Sections</td></tr>
                    <tr><td>Material</td><td>Structural Steel / Carbon Steel</td></tr>
                    <tr><td>Standards</td><td>Applicable European Standards (EN)</td></tr>
                    <tr><td>Grades</td><td>S235JR / S275JR / S355JR / S355J2 & Other Applicable Grades</td></tr>
                    <tr><td>Section Depth</td><td>Various Standard Sizes</td></tr>
                    <tr><td>Flange Width</td><td>As per Selected Channel Section</td></tr>
                    <tr><td>Web Thickness</td><td>As per Selected Section</td></tr>
                    <tr><td>Flange Thickness</td><td>As per Selected Section</td></tr>
                    <tr><td>Length</td><td>Standard Lengths / Cut-to-Length</td></tr>
                    <tr><td>Surface</td><td>Mill Finish / As Specified</td></tr>
                    <tr><td>Supply Form</td><td>Individual Sections / Bundles</td></tr>
                    <tr><td>Customization</td><td>Size, Grade, Length & Quantity as Required</td></tr>
                    <tr><td>Applications</td><td>Construction, Fabrication, Infrastructure, Industrial & Engineering</td></tr>
                </tbody>
            </table>
        </div>
        
        <div class="row g-4 mt-4">
            <div class="col-md-4">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">UPN Channels</h4>
                    <p class="mb-0 text-justify">UPN channels are European standard U-shaped structural sections with tapered flanges. They are used for structural framing, supports, bracing, platforms and fabricated assemblies according to project requirements.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">UPE Channels</h4>
                    <p class="mb-0 text-justify">UPE channels have parallel flanges and can provide flexibility for structural and fabrication applications where a parallel-flange channel section is specified.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">EN Standards</h4>
                    <p class="mb-0 text-justify">European Structural Channels should be specified according to the applicable EN standard and project specification. The relevant standard depends on the channel profile, dimensions, material grade and intended application.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Length Availability</h4>
                    <p class="mb-0 text-justify">Structural channels can be considered in standard lengths or cut-to-length requirements, depending on product availability and customer specifications.</p>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Channel Section Dimensions</h4>
                    <p class="mb-2 text-justify">European Structural Channels are generally identified by their designation and section dimensions, including:</p>
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li><i class="bi bi-check2 text-success me-2"></i>Section Depth</li>
                                <li><i class="bi bi-check2 text-success me-2"></i>Flange Width</li>
                                <li><i class="bi bi-check2 text-success me-2"></i>Web Thickness</li>
                                <li><i class="bi bi-check2 text-success me-2"></i>Flange Thickness</li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li><i class="bi bi-check2 text-success me-2"></i>Cross-Sectional Area</li>
                                <li><i class="bi bi-check2 text-success me-2"></i>Section Weight</li>
                                <li><i class="bi bi-check2 text-success me-2"></i>Required Length</li>
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
                                <li><i class="bi bi-check-circle text-success me-2"></i>Channel Type / Designation</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Section Depth & Flange Width</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Web & Flange Thickness</li>
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
                    <p class="mt-3 mb-0 text-center text-muted">Moksh Tubes & Fittings LLP can support standard and project-based requirements for European Structural Channels, subject to product availability and agreed specifications.</p>
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
        
        <h4 class="fw-bold mt-4 mb-3" style="color:#db7227;">UPN – European Standard U Channels</h4>
        <div class="table-responsive mb-5">
            <table class="table table-bordered table-striped text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Section</th>
                        <th>Height h (mm)</th>
                        <th>Flange Width b (mm)</th>
                        <th>Web Thickness tw (mm)</th>
                        <th>Flange Thickness tf (mm)</th>
                        <th>Weight (kg/m)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>UPN 50</td><td>50</td><td>38</td><td>5.0</td><td>7.0</td><td>5.59</td></tr>
                    <tr><td>UPN 65</td><td>65</td><td>42</td><td>5.5</td><td>7.5</td><td>7.09</td></tr>
                    <tr><td>UPN 80</td><td>80</td><td>45</td><td>6.0</td><td>8.0</td><td>8.64</td></tr>
                    <tr><td>UPN 100</td><td>100</td><td>50</td><td>6.0</td><td>8.5</td><td>10.60</td></tr>
                    <tr><td>UPN 120</td><td>120</td><td>55</td><td>7.0</td><td>9.0</td><td>13.40</td></tr>
                    <tr><td>UPN 140</td><td>140</td><td>60</td><td>7.0</td><td>10.0</td><td>16.00</td></tr>
                    <tr><td>UPN 160</td><td>160</td><td>65</td><td>7.5</td><td>10.5</td><td>18.80</td></tr>
                    <tr><td>UPN 180</td><td>180</td><td>70</td><td>8.0</td><td>11.0</td><td>22.00</td></tr>
                    <tr><td>UPN 200</td><td>200</td><td>75</td><td>8.5</td><td>11.5</td><td>25.30</td></tr>
                    <tr><td>UPN 220</td><td>220</td><td>80</td><td>9.0</td><td>12.5</td><td>29.40</td></tr>
                    <tr><td>UPN 240</td><td>240</td><td>85</td><td>9.5</td><td>13.0</td><td>33.20</td></tr>
                    <tr><td>UPN 260</td><td>260</td><td>90</td><td>10.0</td><td>14.0</td><td>37.90</td></tr>
                    <tr><td>UPN 280</td><td>280</td><td>95</td><td>10.0</td><td>15.0</td><td>41.80</td></tr>
                    <tr><td>UPN 300</td><td>300</td><td>100</td><td>10.0</td><td>16.0</td><td>46.20</td></tr>
                    <tr><td>UPN 320</td><td>320</td><td>100</td><td>14.0</td><td>17.5</td><td>59.50</td></tr>
                    <tr><td>UPN 350</td><td>350</td><td>100</td><td>14.0</td><td>16.0</td><td>60.60</td></tr>
                    <tr><td>UPN 380</td><td>380</td><td>102</td><td>13.5</td><td>16.0</td><td>63.00</td></tr>
                    <tr><td>UPN 400</td><td>400</td><td>110</td><td>14.0</td><td>18.0</td><td>71.80</td></tr>
                </tbody>
            </table>
        </div>

        <h4 class="fw-bold mt-5 mb-3" style="color:#db7227;">UPE – European Parallel Flange Channels</h4>
        <div class="table-responsive mb-5">
            <table class="table table-bordered table-striped text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Section</th>
                        <th>Height h (mm)</th>
                        <th>Flange Width b (mm)</th>
                        <th>Web Thickness tw (mm)</th>
                        <th>Flange Thickness tf (mm)</th>
                        <th>Weight (kg/m)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>UPE 80</td><td>80</td><td>40</td><td>4.0</td><td>6.0</td><td>7.05</td></tr>
                    <tr><td>UPE 100</td><td>100</td><td>46</td><td>4.0</td><td>6.0</td><td>8.59</td></tr>
                    <tr><td>UPE 120</td><td>120</td><td>52</td><td>4.5</td><td>6.5</td><td>10.40</td></tr>
                    <tr><td>UPE 140</td><td>140</td><td>55</td><td>4.5</td><td>6.5</td><td>12.90</td></tr>
                    <tr><td>UPE 160</td><td>160</td><td>64</td><td>5.0</td><td>7.5</td><td>15.80</td></tr>
                    <tr><td>UPE 180</td><td>180</td><td>70</td><td>5.0</td><td>8.0</td><td>18.80</td></tr>
                    <tr><td>UPE 200</td><td>200</td><td>75</td><td>5.5</td><td>8.5</td><td>22.80</td></tr>
                    <tr><td>UPE 220</td><td>220</td><td>80</td><td>6.0</td><td>9.0</td><td>26.60</td></tr>
                    <tr><td>UPE 240</td><td>240</td><td>85</td><td>6.0</td><td>9.5</td><td>30.20</td></tr>
                    <tr><td>UPE 270</td><td>270</td><td>95</td><td>6.5</td><td>10.0</td><td>35.80</td></tr>
                    <tr><td>UPE 300</td><td>300</td><td>100</td><td>7.0</td><td>10.0</td><td>42.20</td></tr>
                    <tr><td>UPE 330</td><td>330</td><td>105</td><td>7.5</td><td>11.0</td><td>49.10</td></tr>
                    <tr><td>UPE 360</td><td>360</td><td>110</td><td>8.0</td><td>12.0</td><td>57.30</td></tr>
                    <tr><td>UPE 400</td><td>400</td><td>115</td><td>8.6</td><td>13.5</td><td>66.30</td></tr>
                </tbody>
            </table>
        </div>

        <h4 class="fw-bold mt-5 mb-3" style="color:#db7227;">UPA – European Light Channels</h4>
        <div class="table-responsive mb-5">
            <table class="table table-bordered table-striped text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Section</th>
                        <th>Height h (mm)</th>
                        <th>Flange Width b (mm)</th>
                        <th>Web Thickness tw (mm)</th>
                        <th>Flange Thickness tf (mm)</th>
                        <th>Weight (kg/m)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>UPA 50</td><td>50</td><td>25</td><td>4.0</td><td>5.0</td><td>3.86</td></tr>
                    <tr><td>UPA 65</td><td>65</td><td>30</td><td>4.0</td><td>5.5</td><td>5.06</td></tr>
                    <tr><td>UPA 80</td><td>80</td><td>35</td><td>4.5</td><td>6.0</td><td>6.85</td></tr>
                    <tr><td>UPA 100</td><td>100</td><td>40</td><td>5.0</td><td>6.5</td><td>8.90</td></tr>
                    <tr><td>UPA 120</td><td>120</td><td>45</td><td>5.0</td><td>7.0</td><td>10.40</td></tr>
                    <tr><td>UPA 140</td><td>140</td><td>50</td><td>5.5</td><td>7.5</td><td>12.90</td></tr>
                    <tr><td>UPA 160</td><td>160</td><td>55</td><td>6.0</td><td>8.0</td><td>15.30</td></tr>
                    <tr><td>UPA 180</td><td>180</td><td>60</td><td>6.0</td><td>8.5</td><td>18.00</td></tr>
                    <tr><td>UPA 200</td><td>200</td><td>65</td><td>6.5</td><td>9.0</td><td>21.30</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<section id="grades" class="sec-padd-top sec-padd-bottom">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Grades Available</h2>
            <p class="text-center pb-3">European Structural Channels can be supplied in different structural steel grades according to applicable European Standards (EN) and project specifications. The selected grade depends on the required mechanical properties, structural loading, channel dimensions, fabrication requirements and engineering design.</p>
        </div>
        <p class="text-center mb-4">At Moksh Tubes & Fittings LLP, European Structural Channels can be sourced according to the customer's specified channel designation, grade, dimensions, thickness, length, quantity and applicable EN requirements, subject to product availability.</p>
        
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
                    <p class="mb-0 text-justify">S275JR is a structural steel grade with higher specified yield strength than S235-grade steel and can be considered for structural channel applications according to the applicable EN specification and project requirements.</p>
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
                    <p class="mb-2">The appropriate grade for a European Structural Channel should be selected based on:</p>
                    <div class="row">
                        <div class="col-6">
                            <ul class="list-unstyled mb-0">
                                <li><i class="bi bi-check-circle text-success me-2"></i>Required mechanical properties</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Structural loading</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Channel section and dimensions</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Web and flange thickness</li>
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
                    <p class="mt-3 mb-0 text-justify">Customers should specify the required EN grade, channel designation, section dimensions, length and quantity when submitting an enquiry.</p>
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
            <p class="text-center pb-3">European Structural Channels are widely used in construction, industrial structures, infrastructure, fabrication and engineering projects where channel-shaped structural steel sections are required for support, framing, bracing and fabricated assemblies.</p>
        </div>
        <div class="row g-4 mt-4">
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-building"></i></div>
                    <h5>Building & Construction</h5>
                    <p class="mb-0 text-center">European Structural Channels are commonly used in building and construction projects for steel structural frameworks, roof-support systems, supporting members, bracing systems, structural connections, and fabricated building components.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-industry"></i></div>
                    <h5>Industrial Structures</h5>
                    <p class="mb-0 text-center">Structural channels are suitable for industrial facilities where steel sections are required for structural and fabrication applications. Common applications include factory structures, industrial buildings, manufacturing facilities, equipment support structures, platforms, and steel frameworks.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-box-seam"></i></div>
                    <h5>Warehouses & Industrial Sheds</h5>
                    <p class="mb-0 text-center">European Structural Channels can be incorporated into warehouse and industrial shed structures for structural framing, roof-support systems, supporting members, bracing systems, and fabricated steel frameworks.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-cone-striped"></i></div>
                    <h5>Infrastructure Projects</h5>
                    <p class="mb-0 text-center">European Structural Channels can be used in infrastructure and civil engineering projects where the specified EN section and material grade meet the project requirements. Applications include infrastructure frameworks, supporting structures, platforms, access structures, and fabricated steel components.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-tools"></i></div>
                    <h5>Steel Fabrication</h5>
                    <p class="mb-0 text-center">Structural channels are suitable for various fabrication requirements, including frames, brackets, supports, base structures, structural assemblies, and fabricated components.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-gear"></i></div>
                    <h5>Machinery & Equipment Supports</h5>
                    <p class="mb-0 text-center">European Structural Channels can be incorporated into support structures for industrial machinery and equipment where the selected channel section meets the required structural design.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-layers"></i></div>
                    <h5>Platforms & Walkways</h5>
                    <p class="mb-0 text-center">Channel sections can be used in industrial platforms, walkways and access structures where the specified section provides the required structural properties.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-nut"></i></div>
                    <h5>General Engineering Applications</h5>
                    <p class="mb-0 text-center">European Structural Channels are also used in engineering and fabrication projects requiring an open channel-shaped structural steel section for support, framing or structural assemblies.</p>
                </div>
            </div>
        </div>
        <p class="text-center mt-4 text-muted">The appropriate channel designation, dimensions, thickness and grade should always be selected according to the structural design, loading conditions, applicable EN standard and project specifications.</p>
    </div>
</section>

<section id="uses" class="sec-padd-top sec-padd-bottom">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Uses of European Structural Channels</h2>
            <p class="text-center mb-2">European Structural Channels are versatile channel-shaped steel sections used for structural support, framing, bracing, reinforcement and fabrication across construction, industrial, infrastructure and engineering applications.</p>
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
                    <h5>Suitable for supporting members and framing systems where European structural channel sections are specified.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Used in industrial sheds and warehouses for structural and supporting frameworks.</h5>
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
                    <h5>Used for machinery and equipment support structures according to engineering design requirements.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Suitable for fabricated frames, brackets, supports and base structures.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Used in infrastructure and civil engineering projects requiring EN-specified structural steel sections.</h5>
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
                    <h5>Used for structural connections and supporting members according to project requirements.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Available in profiles such as UPN and UPE, providing flexibility for different structural and fabrication requirements.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Can be combined with European Structural Angles, Beams, Columns and Hollow Sections to create complete steel frameworks.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Suitable for industrial and heavy structural applications where the selected channel section meets the required design and section-property requirements.</h5>
                </div>
            </div>
        </div>
        <p class="text-center mt-4 text-muted">The appropriate channel designation, dimensions, thickness and grade should be selected according to the structural design, loading conditions, section properties, applicable EN standard and project specifications.</p>
    </div>
</section>

<section id="advantages" class="sec-padd-top sec-padd-bottom bg-light">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold text-center" style="color:#174268;">Advantages of European Structural Channels</h2>
            <p class="text-center mb-2">European Structural Channels provide a versatile structural steel solution for construction, industrial structures, infrastructure, fabrication and engineering applications. Their open channel profile offers flexibility for different structural and supporting requirements.</p>
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
                    <h5>UPN & UPE Options</h5>
                    <p class="mb-0 text-center">Different European channel profiles, including UPN and UPE, provide flexibility for structural and fabrication requirements.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-building"></i></div>
                    <h5>Wide Application Range</h5>
                    <p class="mb-0 text-center">Suitable for buildings, industrial structures, warehouses, platforms, supports and general engineering applications.</p>
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
                    <p class="mb-0 text-center">Channel sections can be selected according to applicable EN standards, dimensions, thickness, material grade and engineering requirements.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-bounding-box"></i></div>
                    <h5>Different Section Sizes</h5>
                    <p class="mb-0 text-center">Available in different section depths, flange dimensions and thicknesses according to applicable European section standards and product range.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-vector-pen"></i></div>
                    <h5>Design Flexibility</h5>
                    <p class="mb-0 text-center">Different channel profiles allow engineers to select suitable sections according to structural configuration and application requirements.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-bricks"></i></div>
                    <h5>Suitable for Structural Frameworks</h5>
                    <p class="mb-0 text-center">Can be incorporated into frames, supports, bracing systems, platforms, industrial structures and fabricated assemblies.</p>
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
                    <p class="mb-0 text-center">Requirements can be specified according to channel designation, dimensions, grade, length and quantity.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-link"></i></div>
                    <h5>Compatible with Other European Sections</h5>
                    <p class="mb-0 text-center">Can be used with European Structural Angles, Beams, Columns and Hollow Sections to create complete steel frameworks.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-globe"></i></div>
                    <h5>Domestic & International Applications</h5>
                    <p class="mb-0 text-center">Suitable for projects requiring structural steel channels specified to applicable EN requirements.</p>
                </div>
            </div>
        </div>
        <p class="text-center mt-4 text-muted">The appropriate channel designation and section should always be selected according to the structural design, loading conditions, section properties, applicable EN standard and project specifications.</p>
    </div>
</section>

<section id="mechanical-properties" class="sec-padd-top sec-padd-bottom">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Mechanical Properties – European Structural Channels</h2>
        </div>
        <p class="text-center mb-4 text-muted">(Typical minimum values for common EN 10025-2 structural steel grades; values depend on material thickness.)</p>
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
        <p class="text-center mt-3 text-muted" style="font-size:0.9rem;">The tensile-strength ranges for these grades are thickness-dependent; for example, S235JR is typically 360–510 MPa, S275JR 410–560 MPa, and S355JR/S355J2 470–630 MPa for common section thicknesses.</p>
    </div>
</section>

<section id="why-choose-us" class="sec-padd-top sec-padd-bottom bg-light">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Why Choose Moksh Tubes & Fittings LLP?</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-center mb-4">Moksh Tubes & Fittings LLP supports customers looking for European Structural Channels for construction, industrial, infrastructure, fabrication and engineering requirements. Our supply approach is based on the customer's required channel designation, dimensions, thickness, grade, length, quantity and applicable EN specifications.</p>
                <div class="row g-4 mt-4">
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-box-seam"></i></div>
                            <h5>Project-Based Sourcing</h5>
                            <p class="mb-0">European Structural Channels can be sourced according to specific project requirements and technical specifications.</p>
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
                            <h5>UPN & UPE Options</h5>
                            <p class="mb-0">Requirements for UPN, UPE and other applicable European channel sections can be considered according to specification and product availability.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-boxes"></i></div>
                            <h5>Wide Product Range</h5>
                            <p class="mb-0">Different channel designations, section dimensions, thicknesses and structural steel grades can be considered according to customer requirements.</p>
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
                            <p class="mb-0">Assistance with channel designations, dimensions, material grades, EN specifications and procurement requirements.</p>
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
                            <h5>Suitable for Industrial & Infrastructure Projects</h5>
                            <p class="mb-0">Support for customers sourcing European Structural Channels for construction, fabrication, industrial and infrastructure applications.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-globe-americas"></i></div>
                            <h5>International Project Support</h5>
                            <p class="mb-0">Suitable for customers requiring European-standard structural steel channels for domestic and international projects.</p>
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
            <h2 class="fw-bold" style="color: #174268;">FAQ – European Structural Channels</h2>
        </div>
        <div class="row mt-4">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="accordion-box">
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What are European Structural Channels?</h4>
                        </div>
                        <div class="accord-content">
                            <p>European Structural Channels are open, channel-shaped structural steel sections manufactured and specified according to applicable European Standards (EN). They are used in construction, industrial structures, infrastructure, fabrication and engineering applications.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What types of European Structural Channels are available?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Common European channel profiles include UPN and UPE channels, along with other applicable European structural channel sections.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What is the difference between UPN and UPE channels?</h4>
                        </div>
                        <div class="accord-content">
                            <p>UPN and UPE are different European channel profiles. UPN channels generally have tapered flanges, while UPE channels have parallel flanges. The appropriate profile should be selected according to the structural design and project specification.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What are European Structural Channels used for?</h4>
                        </div>
                        <div class="accord-content">
                            <p>They are commonly used for structural frameworks, supporting members, bracing, platforms, walkways, industrial structures and fabricated steel assemblies.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Which standards apply to European Structural Channels?</h4>
                        </div>
                        <div class="accord-content">
                            <p>European Structural Channels can be specified according to applicable European Standards (EN) and the requirements stated in the project specification.</p>
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
                            <h4>What sizes of European Structural Channels are available?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Channels are available in different section depths, flange widths, web thicknesses and flange thicknesses. Actual availability depends on the applicable EN section tables and Moksh Tubes & Fittings LLP's current product range.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Can European Structural Channels be supplied in custom lengths?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Yes. Standard and cut-to-length requirements can be considered depending on product availability and customer specifications.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>How do I select the right European Structural Channel?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Selection should consider the channel designation, section dimensions, loading conditions, section properties, material grade, connection requirements and applicable EN standards.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Can Moksh Tubes & Fittings LLP supply European Structural Channels in bulk?</h4>
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
                            <p>Customers should provide the channel designation, section depth, flange width, web thickness, flange thickness, EN grade, required length and quantity. Project drawings or technical specifications can also be shared.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Can European Structural Channels be used with other European structural sections?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Yes. They can be used with European Structural Angles, Beams, Columns and Hollow Sections to create complete steel frameworks and fabricated assemblies.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Does Moksh Tubes & Fittings LLP support international enquiries?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Yes. International enquiries for European Structural Channels can be discussed based on the required EN specification, channel section, dimensions, quantity and delivery requirements.</p>
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
            <p class="fs-5 mt-3">Looking for European Structural Channels for your construction, industrial, infrastructure or fabrication project?</p>
            <p class="mb-4 text-light">
                Contact <strong>Moksh Tubes & Fittings LLP</strong> for European Structural Channel requirements based on your required channel designation, section dimensions, thickness, EN grade, length and quantity.<br>
                Share your project specifications, drawings or material requirements with our team to discuss the suitable European Structural Channels for your application.
            </p>
            <a href="{{ route('contact-us') ?? '#' }}" class="btn btn-lg text-white shadow"
                style="background-color:#db7227; border-radius:8px; padding: 12px 30px;">Contact Us Now</a>
            <p class="mt-4 mb-0 text-light opacity-75">📞 Contact Moksh Tubes & Fittings LLP at +91 97695 84950 for product availability, technical specifications and quotation enquiries.</p>
        </div>
    </div>
</section>

@endsection
