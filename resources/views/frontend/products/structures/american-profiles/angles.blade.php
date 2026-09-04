@extends('layouts.master')
@section('title', 'American Structural Angles | ASTM / AISC Steel Angle Supplier')
@section('meta_description', 'American Structural Angles in equal and unequal leg profiles for construction, fabrication, infrastructure and industrial applications. Enquire with Moksh Tubes & Fittings LLP.')
@section('canonical', url()->current())
@section('og_type', 'product')
@section('og_title', 'American Structural Angles | ASTM / AISC Steel Angle Supplier')
@section('og_description', 'American Structural Angles in equal and unequal leg profiles for construction, fabrication, infrastructure and industrial applications. Enquire with Moksh Tubes & Fittings LLP.')
@section('twitter_title', 'American Structural Angles | ASTM / AISC Steel Angle Supplier')
@section('twitter_description', 'American Structural Angles in equal and unequal leg profiles for construction, fabrication, infrastructure and industrial applications. Enquire with Moksh Tubes & Fittings LLP.')

@section('content')
<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image: url({{ asset('assets/images/product/default-bg.jpg') }});">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto text-center">
                <h1 class="page-title">American Structural Angles – ASTM / AISC Steel Angles</h1>
                <p class="text-center mt-3 px-3 py-2 text-white position-relative" style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                    American Structural Angles are L-shaped structural steel sections used in construction, industrial structures, infrastructure, fabrication and engineering applications. Available in equal and unequal configurations, these steel angles can be specified according to applicable ASTM standards, AISC requirements, material grade, dimensions and project specifications.
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
        <a href="#mechanical-properties">Mechanical</a> |
        <a href="#applications">Applications</a> |
        <a href="#uses">Uses & Advantages</a> |
        <a href="#why-choose-us">Why Choose Us</a> |
        <a href="#faq">FAQ</a>
    </div>
</div>

<section id="overview" class="sec-padd-top sec-padd-bottom bg-light">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">American Structural Angles</h2>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="https://placehold.co/550x350" alt="American Structural Angles" class="img-fluid rounded shadow-sm" loading="lazy">
            </div>
            <div class="col-md-6">
                <p class="fs-6 mb-3 text-justify"><strong>American Structural Angles</strong> are L-shaped steel sections commonly used as structural and fabricated members in buildings, industrial facilities, infrastructure, equipment supports, towers, frames, trusses and general engineering applications.</p>
                <p class="fs-6 mb-3 text-justify">These angles are available in equal-leg and unequal-leg profiles, providing flexibility for different structural designs and connection requirements. Equal angles have legs of the same width, while unequal angles have different leg widths.</p>
                <p class="fs-6 mb-3 text-justify">American Structural Angles are commonly specified using ASTM material standards and AISC design and structural requirements, depending on the project. The appropriate section is selected according to dimensions, thickness, material grade, structural loading and engineering design.</p>
                <p class="fs-6 mb-3 text-justify">At <a href="{{ route('index') }}">Moksh Tubes & Fittings LLP</a>, we support requirements for American Structural Angles based on customer drawings, technical specifications and project requirements. Customers can specify the required angle dimensions, thickness, grade, length, quantity and applicable ASTM / AISC specification.</p>
                <p class="fs-6 mb-3 text-justify">American Structural Angles can be used together with American Structural Channels, Beams, Columns and Hollow Structural Sections (HSS) to create complete steel frameworks and fabricated structures.</p>
                <p class="fs-6 mb-3 text-justify">For an accurate quotation, customers can provide their required angle profile, dimensions, thickness, material grade, length, quantity and applicable specification, along with project drawings or technical documentation where required.</p>
            </div>
        </div>
    </div>
</section>

<!-- Datasheet Download -->
<section class="sec-padd-bottom bg-light">
    <div class="datasheet-download px-4 text-center">
        <h3 class="mb-3" style="color:#174268;">Download American Structural Angles Datasheet</h3>
        <p class="mb-3">
            Get the complete American Structural Angles datasheet with chemical composition,
            mechanical properties, heat treatment details, and applications.
            Enter your email to receive the PDF instantly.
        </p>

        <!-- Lead Capture Form -->
        <form id="leadForm" method="POST" action="{{ route('lead.capture') }}" class="mb-3">
            @csrf

            <input type="hidden" name="page_path" value="{{ $slug ?? 'american-structural-angles' }}">

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
            <p class="text-center">American Structural Angles are available in different leg dimensions, thicknesses, lengths and structural steel grades according to applicable ASTM material standards, AISC requirements and project specifications.</p>
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
                    <tr><td>Product</td><td>American Structural Angles</td></tr>
                    <tr><td>Profile</td><td>L-Shaped Structural Section</td></tr>
                    <tr><td>Types</td><td>Equal Leg Angles / Unequal Leg Angles</td></tr>
                    <tr><td>Material</td><td>Carbon Steel / Structural Steel</td></tr>
                    <tr><td>Standards</td><td>Applicable ASTM Standards / AISC Requirements</td></tr>
                    <tr><td>Grades</td><td>As per applicable ASTM material specification</td></tr>
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
                    <p class="mb-0 text-justify">Equal Leg Angles have two legs of the same nominal width, creating a symmetrical L-shaped section. They are commonly selected for structural frameworks, bracing, trusses, supports and fabricated assemblies.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Unequal Leg Angles</h4>
                    <p class="mb-0 text-justify">Unequal Leg Angles have two legs of different widths. They provide flexibility where different leg dimensions are required for structural connections, supports or specific fabrication requirements.</p>
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
                    <p class="mb-0 text-justify">AISC standards and design requirements may be referenced for structural steel design, section properties, fabrication and application of American structural steel members. The applicable project specification should determine the required AISC requirements.</p>
                </div>
            </div>
        </div>
        
        <div class="row g-4 mt-2">
            <div class="col-md-4">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Dimensional Availability</h4>
                    <p class="mb-2">American Structural Angles can be specified according to:</p>
                    <ul class="list-unstyled mb-0">
                        <li><i class="bi bi-check2 text-success me-2"></i>Angle Type – Equal / Unequal</li>
                        <li><i class="bi bi-check2 text-success me-2"></i>Leg Dimensions</li>
                        <li><i class="bi bi-check2 text-success me-2"></i>Thickness</li>
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
                    <p class="mb-0 text-justify">Structural angles can be considered in standard lengths or cut-to-length requirements, depending on product availability and customer specifications.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Supply Requirements</h4>
                    <p class="mb-2 text-justify">For an accurate quotation, customers should provide the required angle profile, leg dimensions, thickness, material grade, length, quantity and applicable ASTM / AISC specification.</p>
                    <p class="mb-2 text-justify">Project drawings or technical specifications can also be shared where specific structural requirements need to be considered.</p>
                    <p class="mb-0 text-justify">Moksh Tubes & Fittings LLP can support standard and project-based requirements for American Structural Angles, subject to product availability and agreed specifications.</p>
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
        
        <h4 class="mb-3">Equal Leg Angles – L Shapes</h4>
        <div class="table-responsive mb-5">
            <table class="table table-bordered table-striped align-middle text-center">
                <thead class="table-dark">
                    <tr>
                        <th>Section</th>
                        <th>Leg Size A × B (in)</th>
                        <th>Thickness t (in)</th>
                        <th>Weight (lb/ft)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>L 1½ × 1½ × ⅛</td><td>1.500 × 1.500</td><td>0.125</td><td>1.16</td></tr>
                    <tr><td>L 1½ × 1½ × 3⁄16</td><td>1.500 × 1.500</td><td>0.188</td><td>1.71</td></tr>
                    <tr><td>L 1½ × 1½ × ¼</td><td>1.500 × 1.500</td><td>0.250</td><td>2.25</td></tr>
                    <tr><td>L 2 × 2 × ⅛</td><td>2.000 × 2.000</td><td>0.125</td><td>1.55</td></tr>
                    <tr><td>L 2 × 2 × 3⁄16</td><td>2.000 × 2.000</td><td>0.188</td><td>2.31</td></tr>
                    <tr><td>L 2 × 2 × ¼</td><td>2.000 × 2.000</td><td>0.250</td><td>3.03</td></tr>
                    <tr><td>L 2 × 2 × 5⁄16</td><td>2.000 × 2.000</td><td>0.313</td><td>3.75</td></tr>
                    <tr><td>L 2½ × 2½ × ⅛</td><td>2.500 × 2.500</td><td>0.125</td><td>1.96</td></tr>
                    <tr><td>L 2½ × 2½ × 3⁄16</td><td>2.500 × 2.500</td><td>0.188</td><td>2.93</td></tr>
                    <tr><td>L 2½ × 2½ × ¼</td><td>2.500 × 2.500</td><td>0.250</td><td>3.90</td></tr>
                    <tr><td>L 2½ × 2½ × 5⁄16</td><td>2.500 × 2.500</td><td>0.313</td><td>4.82</td></tr>
                    <tr><td>L 3 × 3 × ¼</td><td>3.000 × 3.000</td><td>0.250</td><td>4.91</td></tr>
                    <tr><td>L 3 × 3 × 5⁄16</td><td>3.000 × 3.000</td><td>0.313</td><td>6.00</td></tr>
                    <tr><td>L 3 × 3 × ⅜</td><td>3.000 × 3.000</td><td>0.375</td><td>7.17</td></tr>
                    <tr><td>L 3 × 3 × ½</td><td>3.000 × 3.000</td><td>0.500</td><td>9.52</td></tr>
                    <tr><td>L 3½ × 3½ × ¼</td><td>3.500 × 3.500</td><td>0.250</td><td>5.74</td></tr>
                    <tr><td>L 3½ × 3½ × 5⁄16</td><td>3.500 × 3.500</td><td>0.313</td><td>7.02</td></tr>
                    <tr><td>L 3½ × 3½ × ⅜</td><td>3.500 × 3.500</td><td>0.375</td><td>8.42</td></tr>
                    <tr><td>L 3½ × 3½ × ½</td><td>3.500 × 3.500</td><td>0.500</td><td>11.20</td></tr>
                    <tr><td>L 4 × 4 × ¼</td><td>4.000 × 4.000</td><td>0.250</td><td>6.60</td></tr>
                    <tr><td>L 4 × 4 × 5⁄16</td><td>4.000 × 4.000</td><td>0.313</td><td>8.12</td></tr>
                    <tr><td>L 4 × 4 × ⅜</td><td>4.000 × 4.000</td><td>0.375</td><td>9.69</td></tr>
                    <tr><td>L 4 × 4 × ½</td><td>4.000 × 4.000</td><td>0.500</td><td>12.80</td></tr>
                    <tr><td>L 4 × 4 × ⅝</td><td>4.000 × 4.000</td><td>0.625</td><td>15.90</td></tr>
                    <tr><td>L 5 × 5 × ¼</td><td>5.000 × 5.000</td><td>0.250</td><td>8.30</td></tr>
                    <tr><td>L 5 × 5 × 5⁄16</td><td>5.000 × 5.000</td><td>0.313</td><td>10.20</td></tr>
                    <tr><td>L 5 × 5 × ⅜</td><td>5.000 × 5.000</td><td>0.375</td><td>12.20</td></tr>
                    <tr><td>L 5 × 5 × ½</td><td>5.000 × 5.000</td><td>0.500</td><td>16.10</td></tr>
                    <tr><td>L 5 × 5 × ⅝</td><td>5.000 × 5.000</td><td>0.625</td><td>20.00</td></tr>
                    <tr><td>L 6 × 6 × ⅜</td><td>6.000 × 6.000</td><td>0.375</td><td>14.70</td></tr>
                    <tr><td>L 6 × 6 × ½</td><td>6.000 × 6.000</td><td>0.500</td><td>19.90</td></tr>
                    <tr><td>L 6 × 6 × ⅝</td><td>6.000 × 6.000</td><td>0.625</td><td>24.70</td></tr>
                    <tr><td>L 6 × 6 × ¾</td><td>6.000 × 6.000</td><td>0.750</td><td>29.30</td></tr>
                    <tr><td>L 6 × 6 × 1</td><td>6.000 × 6.000</td><td>1.000</td><td>38.10</td></tr>
                    <tr><td>L 8 × 8 × ½</td><td>8.000 × 8.000</td><td>0.500</td><td>26.80</td></tr>
                    <tr><td>L 8 × 8 × ⅝</td><td>8.000 × 8.000</td><td>0.625</td><td>33.30</td></tr>
                    <tr><td>L 8 × 8 × ¾</td><td>8.000 × 8.000</td><td>0.750</td><td>39.70</td></tr>
                    <tr><td>L 8 × 8 × 1</td><td>8.000 × 8.000</td><td>1.000</td><td>52.00</td></tr>
                    <tr><td>L 10 × 10 × ¾</td><td>10.000 × 10.000</td><td>0.750</td><td>50.30</td></tr>
                    <tr><td>L 10 × 10 × 1</td><td>10.000 × 10.000</td><td>1.000</td><td>66.00</td></tr>
                    <tr><td>L 10 × 10 × 1¼</td><td>10.000 × 10.000</td><td>1.250</td><td>81.30</td></tr>
                    <tr><td>L 12 × 12 × 1</td><td>12.000 × 12.000</td><td>1.000</td><td>79.00</td></tr>
                    <tr><td>L 12 × 12 × 1¼</td><td>12.000 × 12.000</td><td>1.250</td><td>97.60</td></tr>
                    <tr><td>L 12 × 12 × 1½</td><td>12.000 × 12.000</td><td>1.500</td><td>116.00</td></tr>
                </tbody>
            </table>
        </div>
        
        <h4 class="mb-3">Unequal Leg Angles – L Shapes</h4>
        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle text-center">
                <thead class="table-dark">
                    <tr>
                        <th>Section</th>
                        <th>Leg Size A × B (in)</th>
                        <th>Thickness t (in)</th>
                        <th>Weight (lb/ft)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>L 2 × 1½ × ⅛</td><td>2.000 × 1.500</td><td>0.125</td><td>1.36</td></tr>
                    <tr><td>L 2 × 1½ × 3⁄16</td><td>2.000 × 1.500</td><td>0.188</td><td>2.04</td></tr>
                    <tr><td>L 2 × 1½ × ¼</td><td>2.000 × 1.500</td><td>0.250</td><td>2.69</td></tr>
                    <tr><td>L 2½ × 2 × ⅛</td><td>2.500 × 2.000</td><td>0.125</td><td>1.55</td></tr>
                    <tr><td>L 2½ × 2 × 3⁄16</td><td>2.500 × 2.000</td><td>0.188</td><td>2.31</td></tr>
                    <tr><td>L 2½ × 2 × ¼</td><td>2.500 × 2.000</td><td>0.250</td><td>3.03</td></tr>
                    <tr><td>L 3 × 2 × ¼</td><td>3.000 × 2.000</td><td>0.250</td><td>3.90</td></tr>
                    <tr><td>L 3 × 2 × 5⁄16</td><td>3.000 × 2.000</td><td>0.313</td><td>4.82</td></tr>
                    <tr><td>L 3 × 2 × ⅜</td><td>3.000 × 2.000</td><td>0.375</td><td>5.70</td></tr>
                    <tr><td>L 3½ × 2½ × ¼</td><td>3.500 × 2.500</td><td>0.250</td><td>4.53</td></tr>
                    <tr><td>L 3½ × 2½ × 5⁄16</td><td>3.500 × 2.500</td><td>0.313</td><td>5.60</td></tr>
                    <tr><td>L 3½ × 2½ × ⅜</td><td>3.500 × 2.500</td><td>0.375</td><td>6.65</td></tr>
                    <tr><td>L 4 × 3 × ¼</td><td>4.000 × 3.000</td><td>0.250</td><td>4.91</td></tr>
                    <tr><td>L 4 × 3 × 5⁄16</td><td>4.000 × 3.000</td><td>0.313</td><td>6.08</td></tr>
                    <tr><td>L 4 × 3 × ⅜</td><td>4.000 × 3.000</td><td>0.375</td><td>7.17</td></tr>
                    <tr><td>L 4 × 3 × ½</td><td>4.000 × 3.000</td><td>0.500</td><td>9.52</td></tr>
                    <tr><td>L 5 × 3 × ¼</td><td>5.000 × 3.000</td><td>0.250</td><td>5.85</td></tr>
                    <tr><td>L 5 × 3 × 5⁄16</td><td>5.000 × 3.000</td><td>0.313</td><td>7.26</td></tr>
                    <tr><td>L 5 × 3 × ⅜</td><td>5.000 × 3.000</td><td>0.375</td><td>8.62</td></tr>
                    <tr><td>L 5 × 3½ × ¼</td><td>5.000 × 3.500</td><td>0.250</td><td>6.23</td></tr>
                    <tr><td>L 5 × 3½ × ⅜</td><td>5.000 × 3.500</td><td>0.375</td><td>9.17</td></tr>
                    <tr><td>L 6 × 3½ × ¼</td><td>6.000 × 3.500</td><td>0.250</td><td>7.17</td></tr>
                    <tr><td>L 6 × 3½ × ⅜</td><td>6.000 × 3.500</td><td>0.375</td><td>10.60</td></tr>
                    <tr><td>L 6 × 4 × ¼</td><td>6.000 × 4.000</td><td>0.250</td><td>7.55</td></tr>
                    <tr><td>L 6 × 4 × ⅜</td><td>6.000 × 4.000</td><td>0.375</td><td>11.20</td></tr>
                    <tr><td>L 6 × 4 × ½</td><td>6.000 × 4.000</td><td>0.500</td><td>14.70</td></tr>
                    <tr><td>L 8 × 4 × ⅜</td><td>8.000 × 4.000</td><td>0.375</td><td>13.00</td></tr>
                    <tr><td>L 8 × 4 × ½</td><td>8.000 × 4.000</td><td>0.500</td><td>17.10</td></tr>
                    <tr><td>L 8 × 6 × ½</td><td>8.000 × 6.000</td><td>0.500</td><td>20.10</td></tr>
                    <tr><td>L 8 × 6 × ⅝</td><td>8.000 × 6.000</td><td>0.625</td><td>25.00</td></tr>
                    <tr><td>L 10 × 6 × ½</td><td>10.000 × 6.000</td><td>0.500</td><td>23.90</td></tr>
                    <tr><td>L 10 × 6 × ⅝</td><td>10.000 × 6.000</td><td>0.625</td><td>29.60</td></tr>
                    <tr><td>L 10 × 8 × ¾</td><td>10.000 × 8.000</td><td>0.750</td><td>44.00</td></tr>
                    <tr><td>L 12 × 8 × ¾</td><td>12.000 × 8.000</td><td>0.750</td><td>50.30</td></tr>
                    <tr><td>L 12 × 8 × 1</td><td>12.000 × 8.000</td><td>1.000</td><td>66.00</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<section id="grades" class="sec-padd-top sec-padd-bottom">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Grades Available</h2>
            <p class="text-center mb-2">American Structural Angles can be supplied in different structural steel grades according to applicable ASTM material specifications, AISC requirements and project specifications. The selected grade depends on the required mechanical properties, structural application, fabrication requirements and engineering design.</p>
            <p class="text-center">At Moksh Tubes & Fittings LLP, American Structural Angles can be sourced according to the customer's specified grade, angle section, dimensions, thickness, length, quantity and applicable ASTM / AISC requirements, subject to product availability.</p>
        </div>
        <div class="table-responsive mb-4">
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
            <div class="col-md-4">
                <div class="card p-4 shadow-sm h-100 border-0 bg-light">
                    <h4 class="mb-3 text-center" style="color: #db7227;">ASTM A36</h4>
                    <p class="mb-0 text-justify">ASTM A36 is a widely specified carbon structural steel grade used for general construction, fabrication and engineering applications. It can be considered for structural angle requirements where the specified material properties meet the project requirements.</p>
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
                    <p class="mb-0 text-justify">ASTM A992 is a structural steel specification commonly associated with structural shapes used in building construction. Its suitability for a particular angle application should be confirmed against the applicable product and project specification.</p>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-4">
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100 border-0 bg-white shadow-sm border border-secondary border-opacity-25 rounded-3">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Grade Selection</h4>
                    <p class="mb-2">The appropriate grade for an American Structural Angle should be selected based on:</p>
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
                    <p class="mt-3 mb-0 text-justify">Customers should specify the required ASTM grade, angle type, dimensions, thickness, length and quantity when submitting an enquiry.</p>
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
            <p class="text-center pb-3">American Structural Angles are widely used in construction, industrial fabrication, infrastructure and engineering projects where L-shaped structural steel sections are required for support, framing, bracing, connections and fabricated assemblies.</p>
        </div>
        <div class="row g-4 mt-4">
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-building"></i></div>
                    <h5>Building & Construction</h5>
                    <p class="mb-0 text-center">Steel structural frameworks, roof structures, trusses, bracing members, supports, brackets, and connections.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-industry"></i></div>
                    <h5>Industrial Structures</h5>
                    <p class="mb-0 text-center">Industrial buildings, factory structures, equipment supports, platforms, walkways, and steel frameworks.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-broadcast"></i></div>
                    <h5>Towers & Lattice</h5>
                    <p class="mb-0 text-center">Communication towers, lattice structures, tower frameworks, and equipment support frameworks.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-cone-striped"></i></div>
                    <h5>Infrastructure Projects</h5>
                    <p class="mb-0 text-center">Infrastructure frameworks, supporting structures, platforms, and civil engineering fabricated components.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-gear"></i></div>
                    <h5>Steel Fabrication</h5>
                    <p class="mb-0 text-center">Frames, brackets, supports, trusses, base structures, and various structural connections.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-tools"></i></div>
                    <h5>Equipment Supports</h5>
                    <p class="mb-0 text-center">Supports and frameworks for industrial equipment and machinery requiring design criteria compliance.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-bounding-box-circles"></i></div>
                    <h5>Trusses & Bracing Systems</h5>
                    <p class="mb-0 text-center">Equal and unequal angles can be used in roof trusses, bracing systems and supporting members, depending on the structural design and required section properties.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-nut"></i></div>
                    <h5>General Engineering</h5>
                    <p class="mb-0 text-center">American Structural Angles are also used in general engineering and fabrication applications requiring an L-shaped structural steel section.</p>
                </div>
            </div>
        </div>
        <p class="text-center mt-4 text-muted">The appropriate angle type, dimensions, thickness and grade should always be selected according to the structural design, loading conditions, applicable ASTM specification, AISC requirements and project specifications.</p>
    </div>
</section>

<section id="uses" class="sec-padd-top sec-padd-bottom">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Uses & Advantages</h2>
            <p class="text-center mb-2">American Structural Angles are versatile L-shaped steel sections used for structural support, framing, bracing, connections and fabrication across construction, industrial, infrastructure and engineering applications.</p>
            <p class="text-center pb-3">They provide a versatile structural steel solution. Their L-shaped profile and availability in equal-leg and unequal-leg configurations allow flexibility for different structural designs.</p>
        </div>
        <div class="row g-4 mt-4">
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-building"></i></div>
                    <h5>Steel structural frameworks in commercial & industrial projects</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-tools"></i></div>
                    <h5>Suitable for roof trusses, bracing systems, frames, and supports</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-broadcast"></i></div>
                    <h5>Communication towers and lattice structures</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-gear"></i></div>
                    <h5>Machinery, equipment support structures, and industrial platforms</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                    <h5>High structural strength for support, framing and bracing</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-arrows-expand"></i></div>
                    <h5>Profile flexibility with equal and unequal configurations</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Available in multiple ASTM grades as per project requirements</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-rulers"></i></div>
                    <h5>Section selection aligned with AISC design requirements</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-hammer"></i></div>
                    <h5>Easy fabrication (cutting, drilling, and welding)</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-bezier"></i></div>
                    <h5>Design flexibility with symmetrical and asymmetrical geometries</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-box"></i></div>
                    <h5>Compatible with Channels, Beams, Columns and HSS</h5>
                </div>
            </div>
        </div>
        <p class="text-center mt-4 text-muted">The appropriate angle section should always be selected according to the structural design, loading conditions, section properties, applicable ASTM specification, AISC requirements and project specifications.</p>
    </div>
</section>

<section id="mechanical-properties" class="sec-padd-top sec-padd-bottom">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Mechanical Properties</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle text-center">
                <thead class="table-dark">
                    <tr>
                        <th>Standard / Grade</th>
                        <th>ASTM A36</th>
                        <th>ASTM A572 Grade 50</th>
                        <th>ASTM A529 Grade 50</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>Tensile Strength (MPa), Min.</td><td>400</td><td>450</td><td>450</td></tr>
                    <tr><td>Yield Strength (MPa), Min.</td><td>250</td><td>345</td><td>345</td></tr>
                    <tr><td>Elongation (%), Min.</td><td>20</td><td>21</td><td>18</td></tr>
                </tbody>
            </table>
        </div>
        <p class="mt-2 text-muted text-center"><small>AISC gives A36 as Fy = 36 ksi / Fu = 58 ksi, while A572 Grade 50 and A529 Grade 50 provide Fy = 50 ksi / Fu = 65 ksi.</small></p>
    </div>
</section>

<section id="why-choose-us" class="sec-padd-top sec-padd-bottom bg-light">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Why Choose Moksh Tubes & Fittings LLP?</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p>Moksh Tubes & Fittings LLP supports customers looking for American Structural Angles for construction, industrial, infrastructure, fabrication and engineering requirements. Our supply approach is based on the customer's required angle section, dimensions, thickness, grade, length, quantity and applicable ASTM / AISC specifications.</p>
                <div class="row g-4 mt-4">
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-box-seam"></i></div>
                            <h5>Project-Based Sourcing</h5>
                            <p class="mb-0">American Structural Angles can be sourced according to specific project requirements and technical specifications.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-patch-check"></i></div>
                            <h5>ASTM & AISC Support</h5>
                            <p class="mb-0">Product requirements can be aligned with applicable ASTM material specifications and AISC engineering requirements.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-bezier"></i></div>
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
                            <p class="mb-0">Assistance with angle dimensions, material grades, ASTM specifications and procurement requirements.</p>
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
                            <div class="why-banner-icon"><i class="bi bi-globe"></i></div>
                            <h5>International Project Support</h5>
                            <p class="mb-0">Suitable for customers sourcing American-specification structural steel for domestic and international projects.</p>
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
                            <h4>What are American Structural Angles?</h4>
                        </div>
                        <div class="accord-content">
                            <p>American Structural Angles are L-shaped structural steel sections used in construction, industrial structures, infrastructure, fabrication and engineering applications.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What types of American Structural Angles are available?</h4>
                        </div>
                        <div class="accord-content">
                            <p>American Structural Angles are commonly available as Equal Leg Angles and Unequal Leg Angles. Equal-leg angles have two nominally equal legs, while unequal-leg angles have different leg dimensions.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What are American Structural Angles used for?</h4>
                        </div>
                        <div class="accord-content">
                            <p>They are commonly used for structural frameworks, bracing, roof trusses, towers, supports, brackets, platforms, fabrication and engineering assemblies.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Which standards apply to American Structural Angles?</h4>
                        </div>
                        <div class="accord-content">
                            <p>American Structural Angles can be specified according to applicable ASTM material standards and AISC requirements, depending on the project and engineering specification.</p>
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
                            <h4>What sizes of American Structural Angles are available?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Angles are available in different leg dimensions and thicknesses. Actual section availability depends on the applicable standard, product specification and Moksh Tubes & Fittings LLP's current supply range.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Can American Structural Angles be supplied in custom lengths?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Yes. Standard and cut-to-length requirements can be considered depending on product availability and customer specifications.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>How do I select the right American Structural Angle?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Selection should consider the angle type, leg dimensions, thickness, loading conditions, connection requirements, material grade, structural design and applicable ASTM / AISC requirements.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Can Moksh Tubes & Fittings LLP supply American Structural Angles in bulk?</h4>
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
                            <p>Customers should provide the angle type, leg dimensions, thickness, ASTM grade, required length, quantity and applicable AISC/project requirements. Drawings or technical specifications can also be shared.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Can American Structural Angles be used with other American structural sections?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Yes. They can be used with American Structural Channels, Beams, Columns and Hollow Structural Sections (HSS) to create complete steel frameworks and fabricated assemblies.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Does Moksh Tubes & Fittings LLP support international enquiries?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Yes. International enquiries for American Structural Angles can be discussed based on the required ASTM specification, dimensions, quantity and delivery requirements.</p>
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
            <p class="fs-5 mt-3">Looking for American Structural Angles for your construction, industrial, infrastructure or fabrication project?</p>
            <p class="mb-4 text-light">
                Contact <strong>Moksh Tubes & Fittings LLP</strong> for requirements based on your specified angle type, leg dimensions, thickness, ASTM grade, length and quantity.
                <br>
                Share your project specifications, drawings or material requirements with our team to discuss the suitable American Structural Angles for your application.
            </p>
            <a href="{{ route('contact-us') ?? '#' }}" class="btn btn-lg text-white shadow"
                style="background-color:#db7227; border-radius:8px; padding: 12px 30px;">Contact Us Now</a>
        </div>
    </div>
</section>

@endsection
