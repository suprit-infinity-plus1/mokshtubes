@extends('layouts.master')
@section('title', 'European Structural Columns | EN Standard HEA, HEB & HEM')
@section('meta_description', 'European Structural Columns including HEA, HEB and HEM profiles for buildings, industrial structures, warehouses and infrastructure applications. Enquire with Moksh Tubes & Fittings LLP.')
@section('canonical', url()->current())
@section('og_type', 'product')
@section('og_title', 'European Structural Columns | EN Standard HEA, HEB & HEM')
@section('og_description', 'European Structural Columns including HEA, HEB and HEM profiles for buildings, industrial structures, warehouses and infrastructure applications. Enquire with Moksh Tubes & Fittings LLP.')
@section('twitter_title', 'European Structural Columns | EN Standard HEA, HEB & HEM')
@section('twitter_description', 'European Structural Columns including HEA, HEB and HEM profiles for buildings, industrial structures, warehouses and infrastructure applications. Enquire with Moksh Tubes & Fittings LLP.')

@section('content')
<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image: url({{ asset('assets/images/product/default-bg.jpg') }});">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto text-center">
                <h1 class="page-title">European Structural Columns – EN Standard Steel Columns</h1>
                <p class="text-center mt-3 px-3 py-2 text-white position-relative" style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                    European Structural Columns are load-bearing structural steel sections used as vertical supporting members in buildings, industrial facilities, warehouses, infrastructure and engineered steel structures. Common European column profiles include HEA, HEB, HEM and other applicable H-shaped sections, selected according to applicable EN standards, material grade, section properties and project requirements.<br><br>At <a href="https://mokshtubes.com" class="text-white text-decoration-underline" target="_blank">Moksh Tubes & Fittings LLP</a>, we supply European Structural Columns according to customer and project requirements, including specified column designation, section dimensions, material grade, length, quantity and applicable EN specifications.
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
            <h2 class="fw-bold" style="color: #174268;">European Structural Columns</h2>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="{{ asset('/assets/images/product/default-columns.jpg') }}" alt="European Structural Columns" class="img-fluid rounded shadow-sm" loading="lazy">
            </div>
            <div class="col-md-6">
                <p class="fs-6 mb-3 text-justify"><strong>European Structural Columns</strong> are vertical structural steel members designed to transfer loads from beams, floors, roofs and other structural components to the foundation or supporting structure.</p>
                <p class="fs-6 mb-2 text-justify">Common European column profiles include:</p>
                <ul class="mb-3">
                    <li><strong>HEA Columns</strong> – Wide-flange H-shaped structural sections used for general structural applications.</li>
                    <li><strong>HEB Columns</strong> – Heavier H-shaped sections used where greater section capacity and rigidity are required.</li>
                    <li><strong>HEM Columns</strong> – Heavy H-shaped sections designed for applications requiring substantial structural capacity.</li>
                    <li><strong>Other EN Column Profiles</strong> – As specified by the applicable European standard and project requirements.</li>
                </ul>
                <p class="fs-6 mb-3 text-justify">The appropriate column section is selected according to axial loading, column height, structural stability, section properties, connection requirements, material grade and engineering design.</p>
                <p class="fs-6 mb-3 text-justify">European Structural Columns are specified according to applicable European Standards (EN), with the material grade selected according to the required mechanical properties and project specification. Common structural steel grades may include S235JR, S275JR, S355JR and S355J2, subject to the applicable specification.</p>
                <p class="fs-6 mb-3 text-justify">At Moksh Tubes & Fittings LLP, we support European Structural Column requirements based on customer drawings, technical specifications and project requirements. Customers can specify the required column designation, section dimensions, material grade, length and quantity.</p>
                <p class="fs-6 mb-3 text-justify">European Structural Columns can also be used together with European Structural Angles, Channels, Beams and Hollow Sections to create complete steel building frameworks and fabricated structural assemblies.</p>
                <p class="fs-6 mb-0 text-justify">For an accurate quotation, customers can provide their required column designation, section dimensions, grade, length and quantity, along with project drawings or technical documentation where required.</p>
            </div>
        </div>
    </div>
</section>

<!-- Datasheet Download -->
<section class="sec-padd-bottom bg-light">
    <div class="datasheet-download px-4 text-center">
        <h3 class="mb-3" style="color:#174268;">Download European Structural Columns Datasheet</h3>
        <p class="mb-3">
            Get the complete European Structural Columns datasheet with chemical composition,
            mechanical properties, heat treatment details, and applications.
            Enter your email to receive the PDF instantly.
        </p>

        <!-- Lead Capture Form -->
        <form id="leadForm" method="POST" action="{{ route('lead.capture') }}" class="mb-3">
            @csrf
            <input type="hidden" name="page_path" value="{{ $slug ?? 'european-structural-columns' }}">
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
            <p class="text-center">European Structural Columns are available in different column profiles, section depths, flange widths, web thicknesses, flange thicknesses, lengths and structural steel grades according to applicable European Standards (EN) and project specifications.</p>
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
                    <tr><td>Product</td><td>European Structural Columns</td></tr>
                    <tr><td>Profiles</td><td>HEA / HEB / HEM & Other Applicable EN Sections</td></tr>
                    <tr><td>Profile Type</td><td>H-Shaped Structural Sections</td></tr>
                    <tr><td>Material</td><td>Structural Steel / Carbon Steel</td></tr>
                    <tr><td>Standards</td><td>Applicable European Standards (EN)</td></tr>
                    <tr><td>Grades</td><td>S235JR / S275JR / S355JR / S355J2 & Other Applicable Grades</td></tr>
                    <tr><td>Section Depth</td><td>Various Standard Sizes</td></tr>
                    <tr><td>Flange Width</td><td>As per Selected Column Section</td></tr>
                    <tr><td>Web Thickness</td><td>As per Selected Section</td></tr>
                    <tr><td>Flange Thickness</td><td>As per Selected Section</td></tr>
                    <tr><td>Length</td><td>Standard Lengths / Cut-to-Length</td></tr>
                    <tr><td>Surface</td><td>Mill Finish / As Specified</td></tr>
                    <tr><td>Supply Form</td><td>Individual Sections / Bundles</td></tr>
                    <tr><td>Customization</td><td>Section, Size, Grade, Length & Quantity as Required</td></tr>
                    <tr><td>Applications</td><td>Construction, Industrial, Infrastructure, Fabrication & Engineering</td></tr>
                </tbody>
            </table>
        </div>
        
        <div class="row g-4 mt-4">
            <div class="col-md-4">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">HEA Columns</h4>
                    <p class="mb-0 text-justify">HEA sections are wide-flange H-shaped structural sections commonly used as columns and other load-bearing members in buildings, industrial structures and engineered steel frameworks.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">HEB Columns</h4>
                    <p class="mb-0 text-justify">HEB sections are heavier H-shaped structural sections that can be considered for applications requiring greater section capacity and rigidity according to engineering design.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">HEM Columns</h4>
                    <p class="mb-0 text-justify">HEM sections are heavier European H-shaped structural sections intended for applications requiring substantial structural capacity and stiffness.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">EN Standards</h4>
                    <p class="mb-0 text-justify">European Structural Columns should be specified according to the applicable EN standard and project specification. The relevant standard depends on the column profile, dimensions, material grade and intended application.</p>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Column Dimensions</h4>
                    <p class="mb-2 text-justify">European Structural Columns are generally identified by their designation and section dimensions, including:</p>
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li><i class="bi bi-check2 text-success me-2"></i>Overall Section Depth</li>
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
                                <li><i class="bi bi-check-circle text-success me-2"></i>Column Type / Designation</li>
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
                    <p class="mt-3 mb-0 text-center text-muted">Moksh Tubes & Fittings LLP can support standard and project-based requirements for European Structural Columns, subject to product availability and agreed specifications.</p>
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
        
        <h4 class="fw-bold mt-4 mb-3" style="color:#db7227;">HEA – European Standard Wide Flange Columns</h4>
        <div class="table-responsive mb-5">
            <table class="table table-bordered table-striped text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Section</th>
                        <th>Height h (mm)</th>
                        <th>Width b (mm)</th>
                        <th>Web Thickness tw (mm)</th>
                        <th>Flange Thickness tf (mm)</th>
                        <th>Weight (kg/m)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>HEA 100</td><td>96</td><td>100</td><td>5.0</td><td>8.0</td><td>16.7</td></tr>
                    <tr><td>HEA 120</td><td>114</td><td>120</td><td>5.0</td><td>8.0</td><td>19.9</td></tr>
                    <tr><td>HEA 140</td><td>133</td><td>140</td><td>5.5</td><td>8.5</td><td>24.7</td></tr>
                    <tr><td>HEA 160</td><td>152</td><td>160</td><td>6.0</td><td>9.0</td><td>30.4</td></tr>
                    <tr><td>HEA 180</td><td>171</td><td>180</td><td>6.0</td><td>9.5</td><td>35.5</td></tr>
                    <tr><td>HEA 200</td><td>190</td><td>200</td><td>6.5</td><td>10.0</td><td>42.3</td></tr>
                    <tr><td>HEA 220</td><td>210</td><td>220</td><td>7.0</td><td>11.0</td><td>50.5</td></tr>
                    <tr><td>HEA 240</td><td>230</td><td>240</td><td>7.5</td><td>12.0</td><td>60.3</td></tr>
                    <tr><td>HEA 260</td><td>250</td><td>260</td><td>7.5</td><td>12.5</td><td>68.2</td></tr>
                    <tr><td>HEA 280</td><td>270</td><td>280</td><td>8.0</td><td>13.0</td><td>76.4</td></tr>
                    <tr><td>HEA 300</td><td>290</td><td>300</td><td>8.5</td><td>14.0</td><td>88.3</td></tr>
                    <tr><td>HEA 320</td><td>310</td><td>300</td><td>9.0</td><td>15.5</td><td>97.6</td></tr>
                    <tr><td>HEA 340</td><td>330</td><td>300</td><td>9.5</td><td>16.5</td><td>105.0</td></tr>
                    <tr><td>HEA 360</td><td>350</td><td>300</td><td>10.0</td><td>17.5</td><td>112.0</td></tr>
                    <tr><td>HEA 400</td><td>390</td><td>300</td><td>11.0</td><td>19.0</td><td>125.0</td></tr>
                    <tr><td>HEA 450</td><td>440</td><td>300</td><td>11.5</td><td>21.0</td><td>140.0</td></tr>
                    <tr><td>HEA 500</td><td>490</td><td>300</td><td>12.0</td><td>23.0</td><td>155.0</td></tr>
                    <tr><td>HEA 550</td><td>540</td><td>300</td><td>12.5</td><td>24.0</td><td>166.0</td></tr>
                    <tr><td>HEA 600</td><td>590</td><td>300</td><td>13.0</td><td>25.0</td><td>178.0</td></tr>
                </tbody>
            </table>
        </div>

        <h4 class="fw-bold mt-5 mb-3" style="color:#db7227;">HEB – European Standard Heavy Wide Flange Columns</h4>
        <div class="table-responsive mb-5">
            <table class="table table-bordered table-striped text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Section</th>
                        <th>Height h (mm)</th>
                        <th>Width b (mm)</th>
                        <th>Web Thickness tw (mm)</th>
                        <th>Flange Thickness tf (mm)</th>
                        <th>Weight (kg/m)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>HEB 100</td><td>100</td><td>100</td><td>6.0</td><td>10.0</td><td>20.4</td></tr>
                    <tr><td>HEB 120</td><td>120</td><td>120</td><td>6.5</td><td>11.0</td><td>26.7</td></tr>
                    <tr><td>HEB 140</td><td>140</td><td>140</td><td>7.0</td><td>12.0</td><td>33.7</td></tr>
                    <tr><td>HEB 160</td><td>160</td><td>160</td><td>8.0</td><td>13.0</td><td>42.6</td></tr>
                    <tr><td>HEB 180</td><td>180</td><td>180</td><td>8.5</td><td>14.0</td><td>51.2</td></tr>
                    <tr><td>HEB 200</td><td>200</td><td>200</td><td>9.0</td><td>15.0</td><td>61.3</td></tr>
                    <tr><td>HEB 220</td><td>220</td><td>220</td><td>9.5</td><td>16.0</td><td>71.5</td></tr>
                    <tr><td>HEB 240</td><td>240</td><td>240</td><td>10.0</td><td>17.0</td><td>83.2</td></tr>
                    <tr><td>HEB 260</td><td>260</td><td>260</td><td>10.0</td><td>17.5</td><td>93.0</td></tr>
                    <tr><td>HEB 280</td><td>280</td><td>280</td><td>10.5</td><td>18.0</td><td>103.0</td></tr>
                    <tr><td>HEB 300</td><td>300</td><td>300</td><td>11.0</td><td>19.0</td><td>117.0</td></tr>
                    <tr><td>HEB 320</td><td>320</td><td>300</td><td>11.5</td><td>20.5</td><td>127.0</td></tr>
                    <tr><td>HEB 340</td><td>340</td><td>300</td><td>12.0</td><td>21.5</td><td>134.0</td></tr>
                    <tr><td>HEB 360</td><td>360</td><td>300</td><td>12.5</td><td>22.5</td><td>142.0</td></tr>
                    <tr><td>HEB 400</td><td>400</td><td>300</td><td>13.5</td><td>24.0</td><td>155.0</td></tr>
                    <tr><td>HEB 450</td><td>450</td><td>300</td><td>14.0</td><td>26.0</td><td>171.0</td></tr>
                    <tr><td>HEB 500</td><td>500</td><td>300</td><td>15.5</td><td>28.0</td><td>187.0</td></tr>
                    <tr><td>HEB 550</td><td>550</td><td>300</td><td>15.0</td><td>29.0</td><td>199.0</td></tr>
                    <tr><td>HEB 600</td><td>600</td><td>300</td><td>17.5</td><td>30.0</td><td>212.0</td></tr>
                </tbody>
            </table>
        </div>

        <h4 class="fw-bold mt-5 mb-3" style="color:#db7227;">HEM – European Extra Heavy Columns</h4>
        <div class="table-responsive mb-5">
            <table class="table table-bordered table-striped text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Section</th>
                        <th>Height h (mm)</th>
                        <th>Width b (mm)</th>
                        <th>Web Thickness tw (mm)</th>
                        <th>Flange Thickness tf (mm)</th>
                        <th>Weight (kg/m)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>HEM 100</td><td>120</td><td>106</td><td>12.0</td><td>20.0</td><td>41.8</td></tr>
                    <tr><td>HEM 120</td><td>140</td><td>126</td><td>12.5</td><td>21.0</td><td>52.1</td></tr>
                    <tr><td>HEM 140</td><td>160</td><td>146</td><td>13.0</td><td>22.0</td><td>63.2</td></tr>
                    <tr><td>HEM 160</td><td>180</td><td>166</td><td>14.0</td><td>23.0</td><td>76.2</td></tr>
                    <tr><td>HEM 180</td><td>200</td><td>186</td><td>14.5</td><td>24.0</td><td>88.9</td></tr>
                    <tr><td>HEM 200</td><td>220</td><td>206</td><td>15.0</td><td>25.0</td><td>103.0</td></tr>
                    <tr><td>HEM 220</td><td>240</td><td>226</td><td>15.5</td><td>26.0</td><td>117.0</td></tr>
                    <tr><td>HEM 240</td><td>270</td><td>248</td><td>18.0</td><td>32.0</td><td>157.0</td></tr>
                    <tr><td>HEM 260</td><td>290</td><td>268</td><td>18.0</td><td>32.5</td><td>172.0</td></tr>
                    <tr><td>HEM 280</td><td>310</td><td>288</td><td>18.5</td><td>33.0</td><td>189.0</td></tr>
                    <tr><td>HEM 300</td><td>340</td><td>310</td><td>21.0</td><td>39.0</td><td>238.0</td></tr>
                    <tr><td>HEM 320</td><td>359</td><td>309</td><td>21.0</td><td>40.0</td><td>245.0</td></tr>
                    <tr><td>HEM 360</td><td>377</td><td>309</td><td>21.0</td><td>40.0</td><td>256.0</td></tr>
                    <tr><td>HEM 400</td><td>432</td><td>307</td><td>21.0</td><td>40.0</td><td>268.0</td></tr>
                    <tr><td>HEM 500</td><td>524</td><td>306</td><td>21.0</td><td>40.0</td><td>290.0</td></tr>
                    <tr><td>HEM 600</td><td>618</td><td>310</td><td>21.0</td><td>40.0</td><td>301.0</td></tr>
                </tbody>
            </table>
        </div>

        <h4 class="fw-bold mt-5 mb-3" style="color:#db7227;">HEAA – European Light Wide Flange Sections</h4>
        <div class="table-responsive mb-5">
            <table class="table table-bordered table-striped text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Section</th>
                        <th>Height h (mm)</th>
                        <th>Width b (mm)</th>
                        <th>Web Thickness tw (mm)</th>
                        <th>Flange Thickness tf (mm)</th>
                        <th>Weight (kg/m)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>HEAA 100</td><td>91</td><td>100</td><td>4.5</td><td>5.0</td><td>12.2</td></tr>
                    <tr><td>HEAA 120</td><td>109</td><td>120</td><td>4.5</td><td>5.0</td><td>14.7</td></tr>
                    <tr><td>HEAA 140</td><td>128</td><td>140</td><td>4.5</td><td>6.0</td><td>18.1</td></tr>
                    <tr><td>HEAA 160</td><td>152</td><td>160</td><td>5.0</td><td>6.0</td><td>23.8</td></tr>
                    <tr><td>HEAA 180</td><td>171</td><td>180</td><td>5.0</td><td>6.0</td><td>27.1</td></tr>
                    <tr><td>HEAA 200</td><td>190</td><td>200</td><td>5.5</td><td>6.5</td><td>31.2</td></tr>
                    <tr><td>HEAA 220</td><td>210</td><td>220</td><td>5.5</td><td>7.0</td><td>36.2</td></tr>
                    <tr><td>HEAA 240</td><td>230</td><td>240</td><td>6.0</td><td>7.5</td><td>43.0</td></tr>
                    <tr><td>HEAA 260</td><td>250</td><td>260</td><td>6.0</td><td>7.5</td><td>48.0</td></tr>
                    <tr><td>HEAA 280</td><td>270</td><td>280</td><td>6.5</td><td>8.0</td><td>55.0</td></tr>
                    <tr><td>HEAA 300</td><td>290</td><td>300</td><td>6.5</td><td>8.5</td><td>62.0</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<section id="grades" class="sec-padd-top sec-padd-bottom">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Grades Available</h2>
            <p class="text-center pb-3">European Structural Columns can be supplied in different structural steel grades according to applicable European Standards (EN) and project specifications. The selected grade depends on the required mechanical properties, structural loading, column dimensions, fabrication requirements and engineering design.</p>
        </div>
        <p class="text-center mb-4">At Moksh Tubes & Fittings LLP, European Structural Columns can be sourced according to the customer's specified column designation, grade, dimensions, thickness, length, quantity and applicable EN requirements, subject to product availability.</p>
        
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
                    <p class="mb-0 text-justify">S275JR is a structural steel grade with higher specified yield strength than S235-grade steel and can be considered for structural column applications according to the applicable EN specification and project requirements.</p>
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
                    <p class="mb-2">The appropriate grade for a European Structural Column should be selected based on:</p>
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
                                <li><i class="bi bi-check-circle text-success me-2"></i>Applicable EN standard</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Project specification</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Required impact properties, where applicable</li>
                            </ul>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-justify">Customers should specify the required EN grade, column designation, section dimensions, length and quantity when submitting an enquiry.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100 border-0 bg-white shadow-sm border border-secondary border-opacity-25 rounded-3">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Material Documentation</h4>
                    <p class="mb-3 text-justify">Where required and agreed at the time of order, applicable material test certificates and supporting documentation can be provided according to the purchase order and project requirements.</p>
                    <div class="alert alert-warning mb-0 border-0 shadow-sm" role="alert">
                        <strong>Note:</strong> Exact grade availability should be confirmed with Moksh Tubes & Fittings LLP before ordering, as availability may vary according to column section, size, thickness, specification and project requirements.
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
            <p class="text-center pb-3">European Structural Columns are widely used in construction, industrial structures, infrastructure, warehouses and engineering projects where strong vertical load-bearing and structural support members are required.</p>
        </div>
        <div class="row g-4 mt-4">
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-building"></i></div>
                    <h5>Building & Construction</h5>
                    <p class="mb-0 text-center">European Structural Columns are commonly used in building projects for commercial buildings, industrial buildings, steel-framed structures, multi-level structural frameworks, and load-bearing structural systems.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-industry"></i></div>
                    <h5>Industrial Structures</h5>
                    <p class="mb-0 text-center">Structural columns are widely used in industrial facilities where vertical steel members are required to support structural loads. Applications include factory buildings, manufacturing facilities, industrial sheds, equipment support structures, and heavy-duty steel frameworks.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-box-seam"></i></div>
                    <h5>Warehouses & Storage Facilities</h5>
                    <p class="mb-0 text-center">European Structural Columns can be incorporated into warehouse and storage structures as part of the main vertical framework. Applications include warehouse structures, industrial storage buildings, steel building frameworks, and roof-support systems.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-cone-striped"></i></div>
                    <h5>Infrastructure Projects</h5>
                    <p class="mb-0 text-center">Structural columns can be used in infrastructure and civil engineering projects where the specified EN section and material grade meet the project requirements. Applications include infrastructure frameworks, elevated structures, supporting structures, platforms, and engineering structures.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-tools"></i></div>
                    <h5>Heavy Structural Fabrication</h5>
                    <p class="mb-0 text-center">European Structural Columns are suitable for fabricated steel structures requiring vertical load-bearing members. Applications include structural frames, support structures, heavy fabricated assemblies, industrial platforms, and steel frameworks.</p>
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
                    <div class="application-icon"><i class="bi bi-layers"></i></div>
                    <h5>Platforms & Supporting Structures</h5>
                    <p class="mb-0 text-center">European Structural Columns can be incorporated into industrial platforms, elevated structures and supporting frameworks where the selected section provides the required structural properties.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-boxes"></i></div>
                    <h5>Steel Building Frameworks</h5>
                    <p class="mb-0 text-center">Structural columns can be combined with European Structural Beams, Channels, Angles and Hollow Sections to create complete steel building and industrial frameworks.</p>
                </div>
            </div>
        </div>
        <p class="text-center mt-4 text-muted">The appropriate column designation, dimensions and material grade should always be selected according to the structural loading, column height, stability requirements, applicable EN standard and project specifications.</p>
    </div>
</section>

<section id="uses" class="sec-padd-top sec-padd-bottom">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Uses of European Structural Columns</h2>
            <p class="text-center mb-2">European Structural Columns are versatile structural steel members used for vertical load-bearing, structural support and steel framework applications across construction, industrial, infrastructure and engineering projects.</p>
        </div>
        <div class="row g-4 mt-4">
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Used for main vertical support members in commercial, industrial and steel building structures.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Suitable for industrial sheds and factory buildings requiring structural steel column sections.</h5>
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
                    <h5>Suitable for multi-level steel structures where structural columns are specified according to engineering design.</h5>
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
                    <h5>Used for platforms, elevated structures and supporting frameworks according to project requirements.</h5>
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
                    <h5>Used for general structural fabrication, including frames, supports and steel assemblies.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Suitable for load-bearing applications where the selected column section meets the required structural design and section-property requirements.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Can be combined with European Structural Beams, Channels, Angles and Hollow Sections to create complete steel frameworks.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Available in profiles such as HEA, HEB and HEM, providing flexibility for different structural loading and support requirements.</h5>
                </div>
            </div>
        </div>
        <p class="text-center mt-4 text-muted">The appropriate column designation, dimensions, grade and length should be selected according to the structural loading, column height, stability requirements, section properties, applicable EN standard and project specifications.</p>
    </div>
</section>

<section id="advantages" class="sec-padd-top sec-padd-bottom bg-light">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold text-center" style="color:#174268;">Advantages of European Structural Columns</h2>
            <p class="text-center mb-2">European Structural Columns provide a reliable structural steel solution for vertical load-bearing, structural support and steel framework applications across construction, industrial, infrastructure and engineering projects.</p>
        </div>
        <div class="row g-4 mt-2">
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                    <h5>High Load-Bearing Capability</h5>
                    <p class="mb-0 text-center">Suitable for vertical structural support when the appropriate section is selected according to engineering design.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-layer-forward"></i></div>
                    <h5>Structural Strength & Rigidity</h5>
                    <p class="mb-0 text-center">Properly selected column sections provide the required strength and rigidity for structural frameworks.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-collection"></i></div>
                    <h5>HEA, HEB & HEM Options</h5>
                    <p class="mb-0 text-center">Different European H-shaped column profiles provide flexibility for various structural loading and support requirements.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-building"></i></div>
                    <h5>Wide Application Range</h5>
                    <p class="mb-0 text-center">Suitable for commercial buildings, industrial facilities, warehouses, infrastructure, platforms and engineered structures.</p>
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
                    <p class="mb-0 text-center">Column sections can be selected according to applicable EN standards, section dimensions, material grade and engineering requirements.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-bounding-box"></i></div>
                    <h5>Different Section Sizes</h5>
                    <p class="mb-0 text-center">Available in different section depths, flange widths and thicknesses according to applicable European section standards and product range.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-vector-pen"></i></div>
                    <h5>Design Flexibility</h5>
                    <p class="mb-0 text-center">HEA, HEB and HEM profiles allow engineers to select suitable sections according to loading, column height and structural configuration.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-bricks"></i></div>
                    <h5>Suitable for Heavy Structures</h5>
                    <p class="mb-0 text-center">Appropriate column sections can be considered for industrial buildings, warehouses and other heavy structural applications.</p>
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
                    <p class="mb-0 text-center">Requirements can be specified according to column designation, dimensions, grade, length and quantity.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-link"></i></div>
                    <h5>Compatible with Other European Sections</h5>
                    <p class="mb-0 text-center">Can be used with European Structural Angles, Channels, Beams and Hollow Sections to create complete steel frameworks.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-globe"></i></div>
                    <h5>Domestic & International Applications</h5>
                    <p class="mb-0 text-center">Suitable for projects requiring structural steel columns specified to applicable EN requirements.</p>
                </div>
            </div>
        </div>
        <p class="text-center mt-4 text-muted">The appropriate column designation and section should always be selected according to the structural loading, column height, stability requirements, section properties, applicable EN standard and project specifications.</p>
    </div>
</section>

<section id="mechanical-properties" class="sec-padd-top sec-padd-bottom">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Mechanical Properties – European Structural Columns</h2>
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
                    <tr><td>Tensile Strength (MPa), Min.</td><td>360</td><td>370</td><td>470</td><td>470</td></tr>
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
                <p class="text-center mb-4">Moksh Tubes & Fittings LLP supports customers looking for European Structural Columns for construction, industrial, infrastructure, fabrication and engineering requirements. Our supply approach is based on the customer's required column designation, dimensions, grade, length, quantity and applicable EN specifications.</p>
                <div class="row g-4 mt-4">
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-box-seam"></i></div>
                            <h5>Project-Based Sourcing</h5>
                            <p class="mb-0">European Structural Columns can be sourced according to specific project requirements and technical specifications.</p>
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
                            <h5>HEA, HEB & HEM Options</h5>
                            <p class="mb-0">Requirements for HEA, HEB, HEM and other applicable European column sections can be considered according to specification and product availability.</p>
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
                            <p class="mb-0">Assistance with column designations, section dimensions, material grades, EN specifications and procurement requirements.</p>
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
                            <p class="mb-0">Support for customers sourcing European Structural Columns for construction, fabrication, industrial and infrastructure applications.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-globe-americas"></i></div>
                            <h5>International Project Support</h5>
                            <p class="mb-0">Suitable for customers requiring European-standard structural steel columns for domestic and international projects.</p>
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
            <h2 class="fw-bold" style="color: #174268;">FAQ – European Structural Columns</h2>
        </div>
        <div class="row mt-4">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="accordion-box">
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What are European Structural Columns?</h4>
                        </div>
                        <div class="accord-content">
                            <p>European Structural Columns are structural steel sections primarily used as vertical load-bearing and supporting members in buildings, industrial facilities, warehouses, infrastructure and engineered steel structures.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What types of European Structural Columns are available?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Common European column profiles include HEA, HEB and HEM, along with other applicable H-shaped structural sections.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What are HEA Columns used for?</h4>
                        </div>
                        <div class="accord-content">
                            <p>HEA sections are commonly used as structural columns and load-bearing members in commercial buildings, industrial structures, warehouses and steel frameworks where the selected section meets the engineering requirements.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What are HEB Columns used for?</h4>
                        </div>
                        <div class="accord-content">
                            <p>HEB sections are heavier H-shaped structural sections commonly used where greater section capacity and rigidity are required according to structural design.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What are HEM Columns used for?</h4>
                        </div>
                        <div class="accord-content">
                            <p>HEM sections are heavier European H-shaped sections that can be considered for applications requiring substantial structural capacity and stiffness, subject to engineering design.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Which standards apply to European Structural Columns?</h4>
                        </div>
                        <div class="accord-content">
                            <p>European Structural Columns can be specified according to applicable European Standards (EN) and the requirements stated in the project specification.</p>
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
                            <h4>What sizes of European Structural Columns are available?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Columns are available in different section depths, flange widths, web thicknesses and flange thicknesses. Actual availability depends on the applicable EN section tables and Moksh Tubes & Fittings LLP's current product range.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Can European Structural Columns be supplied in custom lengths?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Yes. Standard and cut-to-length requirements can be considered depending on product availability and customer specifications.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>How do I select the right European Structural Column?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Selection should consider the column designation, axial loading, column height, section properties, dimensions, material grade, structural stability, connection requirements and applicable EN standards.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Can Moksh Tubes & Fittings LLP supply European Structural Columns in bulk?</h4>
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
                            <p>Customers should provide the column designation, section dimensions, EN grade, required length and quantity. Project drawings or technical specifications can also be shared.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Can European Structural Columns be used with other European structural sections?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Yes. They can be used with European Structural Angles, Channels, Beams and Hollow Sections to create complete steel building frameworks and fabricated assemblies.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Does Moksh Tubes & Fittings LLP support international enquiries?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Yes. International enquiries for European Structural Columns can be discussed based on the required EN specification, column section, dimensions, quantity and delivery requirements.</p>
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
            <p class="fs-5 mt-3">Looking for European Structural Columns for your construction, industrial, infrastructure or fabrication project?</p>
            <p class="mb-4 text-light">
                Contact <strong>Moksh Tubes & Fittings LLP</strong> for European Structural Column requirements based on your required column designation, section dimensions, EN grade, length and quantity.<br>
                Share your project specifications, drawings or material requirements with our team to discuss the suitable European Structural Columns for your application.
            </p>
            <a href="{{ route('contact-us') ?? '#' }}" class="btn btn-lg text-white shadow"
                style="background-color:#db7227; border-radius:8px; padding: 12px 30px;">Contact Us Now</a>
            <p class="mt-4 mb-0 text-light opacity-75">📞 Contact Moksh Tubes & Fittings LLP at +91 97695 84950 for product availability, technical specifications and quotation enquiries.</p>
        </div>
    </div>
</section>

@endsection
