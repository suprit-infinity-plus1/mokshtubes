@extends('layouts.master')
@section('title', 'American Hollow Sections | ASTM / AISC HSS Supplier')
@section('meta_description', 'American Hollow Sections (HSS) including square, rectangular and circular sections for construction, fabrication, infrastructure and industrial applications. Enquire with Moksh Tubes & Fittings LLP.')
@section('canonical', url()->current())
@section('og_type', 'product')
@section('og_title', 'American Hollow Sections | ASTM / AISC HSS Supplier')
@section('og_description', 'American Hollow Sections (HSS) including square, rectangular and circular sections for construction, fabrication, infrastructure and industrial applications. Enquire with Moksh Tubes & Fittings LLP.')
@section('twitter_title', 'American Hollow Sections | ASTM / AISC HSS Supplier')
@section('twitter_description', 'American Hollow Sections (HSS) including square, rectangular and circular sections for construction, fabrication, infrastructure and industrial applications. Enquire with Moksh Tubes & Fittings LLP.')

@section('content')
<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image: url({{ asset('assets/images/product/default-bg.jpg') }});">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto text-center">
                <h1 class="page-title">American Hollow Sections – ASTM / AISC HSS, SHS, RHS & CHS</h1>
                <p class="text-center mt-3 px-3 py-2 text-white position-relative" style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                    American Hollow Sections are closed-profile structural steel sections widely used in construction, industrial structures, infrastructure, fabrication and engineering applications. Common profiles include Hollow Structural Sections (HSS), Square Hollow Sections (SHS), Rectangular Hollow Sections (RHS) and Circular Hollow Sections (CHS), depending on the applicable ASTM specification and AISC requirements.
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
            <h2 class="fw-bold" style="color: #174268;">American Hollow Sections</h2>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="{{ asset('/assets/images/product/default-hss.jpg') }}" alt="American Hollow Sections" class="img-fluid rounded shadow-sm" loading="lazy">
            </div>
            <div class="col-md-6">
                <p class="fs-6 mb-3 text-justify"><strong>American Hollow Sections</strong> are structural steel members manufactured with a closed cross-section. They are widely used where structural strength, rigidity and efficient section geometry are required for building frameworks, industrial structures, infrastructure and fabricated assemblies.</p>
                <p class="fs-6 mb-3 text-justify">American Hollow Sections are commonly referred to as Hollow Structural Sections (HSS) in American structural steel practice. Depending on the geometry, HSS can include square, rectangular and circular sections.</p>
                <ul class="mb-3">
                    <li><strong>Square HSS / SHS</strong> – Square closed-profile sections with equal outside dimensions.</li>
                    <li><strong>Rectangular HSS / RHS</strong> – Rectangular closed-profile sections with different outside width and height dimensions.</li>
                    <li><strong>Circular HSS / CHS</strong> – Circular hollow sections with a round outside profile.</li>
                </ul>
                <p class="fs-6 mb-3 text-justify">The appropriate section is selected according to structural loading, section properties, dimensions, wall thickness, connection requirements, material grade and engineering design.</p>
                <p class="fs-6 mb-3 text-justify">American Hollow Sections are commonly specified according to applicable ASTM material specifications and AISC structural requirements. The exact specification depends on the product, grade and project requirements.</p>
                <p class="fs-6 mb-3 text-justify">At Moksh Tubes & Fittings LLP, we support American Hollow Section requirements based on customer drawings, technical specifications and project requirements. Customers can specify the required HSS type, dimensions, wall thickness, ASTM grade, length, quantity and applicable AISC requirements.</p>
                <p class="fs-6 mb-3 text-justify">American Hollow Sections can also be used together with American Structural Angles, Channels, Beams and Columns to create complete steel frameworks and fabricated structural assemblies.</p>
                <p class="fs-6 mb-3 text-justify">For an accurate quotation, customers can provide their required HSS profile, dimensions, wall thickness, material grade, length, quantity and applicable ASTM / AISC specification, along with project drawings or technical documentation where required.</p>
            </div>
        </div>
    </div>
</section>

<!-- Datasheet Download -->
<section class="sec-padd-bottom bg-light">
    <div class="datasheet-download px-4 text-center">
        <h3 class="mb-3" style="color:#174268;">Download American Hollow Sections Datasheet</h3>
        <p class="mb-3">
            Get the complete American Hollow Sections datasheet with chemical composition,
            mechanical properties, heat treatment details, and applications.
            Enter your email to receive the PDF instantly.
        </p>

        <!-- Lead Capture Form -->
        <form id="leadForm" method="POST" action="{{ route('lead.capture') }}" class="mb-3">
            @csrf
            <input type="hidden" name="page_path" value="{{ $slug ?? 'american-structural-hollow-sections' }}">
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
            <p class="text-center">American Hollow Sections, commonly referred to as Hollow Structural Sections (HSS), are available in different square, rectangular and circular profiles, with varying outside dimensions, wall thicknesses, lengths and structural steel grades according to applicable ASTM material specifications, AISC requirements and project specifications.</p>
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
                    <tr><td>Product</td><td>American Hollow Sections / HSS</td></tr>
                    <tr><td>Types</td><td>Square HSS / Rectangular HSS / Circular HSS</td></tr>
                    <tr><td>Profile</td><td>Square / Rectangular / Circular Closed Section</td></tr>
                    <tr><td>Material</td><td>Carbon Steel / Structural Steel</td></tr>
                    <tr><td>Standards</td><td>Applicable ASTM Standards / AISC Requirements</td></tr>
                    <tr><td>Grades</td><td>As per applicable ASTM material specification</td></tr>
                    <tr><td>Outside Dimensions</td><td>Various standard sizes</td></tr>
                    <tr><td>Wall Thickness</td><td>As per selected section and specification</td></tr>
                    <tr><td>Length</td><td>Standard Lengths / Cut-to-Length</td></tr>
                    <tr><td>Surface</td><td>Mill Finish / As Specified</td></tr>
                    <tr><td>Supply Form</td><td>Individual Sections / Bundles</td></tr>
                    <tr><td>Customization</td><td>Size, thickness, length and grade as required</td></tr>
                    <tr><td>Applications</td><td>Construction, Industrial, Infrastructure, Fabrication & Engineering</td></tr>
                </tbody>
            </table>
        </div>
        
        <div class="row g-4 mt-4">
            <div class="col-md-4">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Square HSS</h4>
                    <p class="mb-0 text-justify">Square Hollow Structural Sections have equal outside dimensions on four sides and provide a symmetrical closed profile. They can be used for structural frames, supports, columns, trusses and fabricated steel structures where the specified section meets the engineering requirements.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Rectangular HSS</h4>
                    <p class="mb-0 text-justify">Rectangular Hollow Structural Sections have different outside width and height dimensions. They provide flexibility for structural frameworks and fabricated assemblies where a rectangular profile is preferred.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Circular HSS</h4>
                    <p class="mb-0 text-justify">Circular Hollow Structural Sections have a round closed profile and can be used for tubular structures, columns, supports, towers and other engineering applications where a circular section is specified.</p>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-4">
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">ASTM Specifications</h4>
                    <p class="mb-0 text-justify">The applicable ASTM material specification depends on the HSS product, material grade and project requirements. Chemical composition, mechanical properties and dimensional requirements should be confirmed against the applicable specification.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">AISC Requirements</h4>
                    <p class="mb-0 text-justify">AISC requirements may be referenced for structural design, section properties and selection of American Hollow Structural Sections. The applicable project drawings and engineering specifications should determine the required AISC requirements.</p>
                </div>
            </div>
        </div>
        
        <div class="row g-4 mt-2">
            <div class="col-md-4">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Section Dimensions</h4>
                    <p class="mb-2">American Hollow Sections can be specified according to:</p>
                    <ul class="list-unstyled mb-0">
                        <li><i class="bi bi-check2 text-success me-2"></i>Section Type – Square / Rectangular / Circular HSS</li>
                        <li><i class="bi bi-check2 text-success me-2"></i>Outside Dimensions</li>
                        <li><i class="bi bi-check2 text-success me-2"></i>Wall Thickness</li>
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
                    <p class="mb-0 text-justify">American Hollow Sections can be considered in standard lengths or cut-to-length requirements, depending on product availability and customer specifications.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Supply Requirements</h4>
                    <p class="mb-2 text-justify">For an accurate quotation, customers should provide:</p>
                    <ul class="list-unstyled mb-2">
                        <li><i class="bi bi-chevron-right text-secondary me-2"></i>HSS Type</li>
                        <li><i class="bi bi-chevron-right text-secondary me-2"></i>Outside Dimensions</li>
                        <li><i class="bi bi-chevron-right text-secondary me-2"></i>Wall Thickness</li>
                        <li><i class="bi bi-chevron-right text-secondary me-2"></i>ASTM Material Grade</li>
                        <li><i class="bi bi-chevron-right text-secondary me-2"></i>Required Length & Quantity</li>
                        <li><i class="bi bi-chevron-right text-secondary me-2"></i>Applicable AISC Requirements</li>
                        <li><i class="bi bi-chevron-right text-secondary me-2"></i>Project Specification, if applicable</li>
                    </ul>
                    <p class="mb-0 text-justify">Moksh Tubes & Fittings LLP can support standard and project-based requirements for American Hollow Sections, subject to product availability and agreed specifications.</p>
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
        
        <h4 class="fw-bold mt-4 mb-3" style="color:#db7227;">Square HSS – SHS</h4>
        <div class="table-responsive mb-5">
            <table class="table table-bordered table-striped text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Section</th>
                        <th>Outside Size (in)</th>
                        <th>Wall Thickness (in)</th>
                        <th>Weight (lb/ft)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>HSS 1½ × 1½ × ⅛</td><td>1.500 × 1.500</td><td>0.125</td><td>2.04</td></tr>
                    <tr><td>HSS 2 × 2 × ⅛</td><td>2.000 × 2.000</td><td>0.125</td><td>2.75</td></tr>
                    <tr><td>HSS 2 × 2 × 3⁄16</td><td>2.000 × 2.000</td><td>0.188</td><td>3.98</td></tr>
                    <tr><td>HSS 2½ × 2½ × ⅛</td><td>2.500 × 2.500</td><td>0.125</td><td>3.46</td></tr>
                    <tr><td>HSS 2½ × 2½ × 3⁄16</td><td>2.500 × 2.500</td><td>0.188</td><td>5.07</td></tr>
                    <tr><td>HSS 3 × 3 × ⅛</td><td>3.000 × 3.000</td><td>0.125</td><td>4.19</td></tr>
                    <tr><td>HSS 3 × 3 × 3⁄16</td><td>3.000 × 3.000</td><td>0.188</td><td>6.16</td></tr>
                    <tr><td>HSS 3 × 3 × ¼</td><td>3.000 × 3.000</td><td>0.250</td><td>8.04</td></tr>
                    <tr><td>HSS 4 × 4 × ⅛</td><td>4.000 × 4.000</td><td>0.125</td><td>5.62</td></tr>
                    <tr><td>HSS 4 × 4 × 3⁄16</td><td>4.000 × 4.000</td><td>0.188</td><td>8.33</td></tr>
                    <tr><td>HSS 4 × 4 × ¼</td><td>4.000 × 4.000</td><td>0.250</td><td>10.86</td></tr>
                    <tr><td>HSS 4 × 4 × ⅜</td><td>4.000 × 4.000</td><td>0.375</td><td>15.20</td></tr>
                    <tr><td>HSS 5 × 5 × ¼</td><td>5.000 × 5.000</td><td>0.250</td><td>13.69</td></tr>
                    <tr><td>HSS 5 × 5 × ⅜</td><td>5.000 × 5.000</td><td>0.375</td><td>19.22</td></tr>
                    <tr><td>HSS 5 × 5 × ½</td><td>5.000 × 5.000</td><td>0.500</td><td>24.55</td></tr>
                    <tr><td>HSS 6 × 6 × ¼</td><td>6.000 × 6.000</td><td>0.250</td><td>16.52</td></tr>
                    <tr><td>HSS 6 × 6 × ⅜</td><td>6.000 × 6.000</td><td>0.375</td><td>23.24</td></tr>
                    <tr><td>HSS 6 × 6 × ½</td><td>6.000 × 6.000</td><td>0.500</td><td>29.91</td></tr>
                    <tr><td>HSS 8 × 8 × ¼</td><td>8.000 × 8.000</td><td>0.250</td><td>22.24</td></tr>
                    <tr><td>HSS 8 × 8 × ⅜</td><td>8.000 × 8.000</td><td>0.375</td><td>31.26</td></tr>
                    <tr><td>HSS 8 × 8 × ½</td><td>8.000 × 8.000</td><td>0.500</td><td>40.28</td></tr>
                    <tr><td>HSS 8 × 8 × ⅝</td><td>8.000 × 8.000</td><td>0.625</td><td>49.04</td></tr>
                    <tr><td>HSS 10 × 10 × ⅜</td><td>10.000 × 10.000</td><td>0.375</td><td>39.28</td></tr>
                    <tr><td>HSS 10 × 10 × ½</td><td>10.000 × 10.000</td><td>0.500</td><td>50.70</td></tr>
                    <tr><td>HSS 10 × 10 × ⅝</td><td>10.000 × 10.000</td><td>0.625</td><td>61.83</td></tr>
                    <tr><td>HSS 12 × 12 × ½</td><td>12.000 × 12.000</td><td>0.500</td><td>61.13</td></tr>
                    <tr><td>HSS 12 × 12 × ⅝</td><td>12.000 × 12.000</td><td>0.625</td><td>74.63</td></tr>
                    <tr><td>HSS 12 × 12 × ¾</td><td>12.000 × 12.000</td><td>0.750</td><td>88.00</td></tr>
                    <tr><td>HSS 16 × 16 × ½</td><td>16.000 × 16.000</td><td>0.500</td><td>82.03</td></tr>
                    <tr><td>HSS 16 × 16 × ⅝</td><td>16.000 × 16.000</td><td>0.625</td><td>100.40</td></tr>
                    <tr><td>HSS 16 × 16 × ¾</td><td>16.000 × 16.000</td><td>0.750</td><td>118.30</td></tr>
                </tbody>
            </table>
        </div>

        <h4 class="fw-bold mt-4 mb-3" style="color:#db7227;">Rectangular HSS – RHS</h4>
        <div class="table-responsive mb-5">
            <table class="table table-bordered table-striped text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Section</th>
                        <th>Outside Size (in)</th>
                        <th>Wall Thickness (in)</th>
                        <th>Weight (lb/ft)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>HSS 2 × 1 × ⅛</td><td>2.000 × 1.000</td><td>0.125</td><td>2.04</td></tr>
                    <tr><td>HSS 3 × 2 × ⅛</td><td>3.000 × 2.000</td><td>0.125</td><td>3.46</td></tr>
                    <tr><td>HSS 3 × 2 × 3⁄16</td><td>3.000 × 2.000</td><td>0.188</td><td>5.07</td></tr>
                    <tr><td>HSS 4 × 2 × ⅛</td><td>4.000 × 2.000</td><td>0.125</td><td>4.19</td></tr>
                    <tr><td>HSS 4 × 2 × 3⁄16</td><td>4.000 × 2.000</td><td>0.188</td><td>6.16</td></tr>
                    <tr><td>HSS 4 × 2 × ¼</td><td>4.000 × 2.000</td><td>0.250</td><td>8.04</td></tr>
                    <tr><td>HSS 5 × 3 × ¼</td><td>5.000 × 3.000</td><td>0.250</td><td>10.86</td></tr>
                    <tr><td>HSS 5 × 3 × ⅜</td><td>5.000 × 3.000</td><td>0.375</td><td>15.20</td></tr>
                    <tr><td>HSS 6 × 3 × ¼</td><td>6.000 × 3.000</td><td>0.250</td><td>13.69</td></tr>
                    <tr><td>HSS 6 × 3 × ⅜</td><td>6.000 × 3.000</td><td>0.375</td><td>19.22</td></tr>
                    <tr><td>HSS 6 × 4 × ¼</td><td>6.000 × 4.000</td><td>0.250</td><td>16.52</td></tr>
                    <tr><td>HSS 6 × 4 × ⅜</td><td>6.000 × 4.000</td><td>0.375</td><td>23.24</td></tr>
                    <tr><td>HSS 6 × 4 × ½</td><td>6.000 × 4.000</td><td>0.500</td><td>29.91</td></tr>
                    <tr><td>HSS 8 × 4 × ¼</td><td>8.000 × 4.000</td><td>0.250</td><td>22.24</td></tr>
                    <tr><td>HSS 8 × 4 × ⅜</td><td>8.000 × 4.000</td><td>0.375</td><td>31.26</td></tr>
                    <tr><td>HSS 8 × 4 × ½</td><td>8.000 × 4.000</td><td>0.500</td><td>40.28</td></tr>
                    <tr><td>HSS 10 × 4 × ¼</td><td>10.000 × 4.000</td><td>0.250</td><td>27.96</td></tr>
                    <tr><td>HSS 10 × 4 × ⅜</td><td>10.000 × 4.000</td><td>0.375</td><td>39.28</td></tr>
                    <tr><td>HSS 10 × 4 × ½</td><td>10.000 × 4.000</td><td>0.500</td><td>50.70</td></tr>
                    <tr><td>HSS 10 × 6 × ⅜</td><td>10.000 × 6.000</td><td>0.375</td><td>46.60</td></tr>
                    <tr><td>HSS 10 × 6 × ½</td><td>10.000 × 6.000</td><td>0.500</td><td>60.27</td></tr>
                    <tr><td>HSS 12 × 4 × ⅜</td><td>12.000 × 4.000</td><td>0.375</td><td>46.60</td></tr>
                    <tr><td>HSS 12 × 4 × ½</td><td>12.000 × 4.000</td><td>0.500</td><td>60.27</td></tr>
                    <tr><td>HSS 12 × 6 × ½</td><td>12.000 × 6.000</td><td>0.500</td><td>69.69</td></tr>
                    <tr><td>HSS 12 × 6 × ⅝</td><td>12.000 × 6.000</td><td>0.625</td><td>85.12</td></tr>
                    <tr><td>HSS 12 × 8 × ½</td><td>12.000 × 8.000</td><td>0.500</td><td>79.11</td></tr>
                    <tr><td>HSS 12 × 8 × ⅝</td><td>12.000 × 8.000</td><td>0.625</td><td>96.74</td></tr>
                    <tr><td>HSS 16 × 8 × ½</td><td>16.000 × 8.000</td><td>0.500</td><td>100.70</td></tr>
                    <tr><td>HSS 16 × 8 × ⅝</td><td>16.000 × 8.000</td><td>0.625</td><td>123.50</td></tr>
                    <tr><td>HSS 16 × 8 × ¾</td><td>16.000 × 8.000</td><td>0.750</td><td>145.90</td></tr>
                    <tr><td>HSS 20 × 12 × ¾</td><td>20.000 × 12.000</td><td>0.750</td><td>208.00</td></tr>
                </tbody>
            </table>
        </div>

        <h4 class="fw-bold mt-4 mb-3" style="color:#db7227;">Round HSS – CHS</h4>
        <div class="table-responsive mb-5">
            <table class="table table-bordered table-striped text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Section</th>
                        <th>Outside Diameter (in)</th>
                        <th>Wall Thickness (in)</th>
                        <th>Weight (lb/ft)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>HSS 1.900 × 0.109</td><td>1.900</td><td>0.109</td><td>2.16</td></tr>
                    <tr><td>HSS 1.900 × 0.145</td><td>1.900</td><td>0.145</td><td>2.85</td></tr>
                    <tr><td>HSS 2.375 × 0.109</td><td>2.375</td><td>0.109</td><td>2.73</td></tr>
                    <tr><td>HSS 2.375 × 0.154</td><td>2.375</td><td>0.154</td><td>3.81</td></tr>
                    <tr><td>HSS 2.875 × 0.120</td><td>2.875</td><td>0.120</td><td>3.56</td></tr>
                    <tr><td>HSS 2.875 × 0.203</td><td>2.875</td><td>0.203</td><td>5.94</td></tr>
                    <tr><td>HSS 3.500 × 0.120</td><td>3.500</td><td>0.120</td><td>4.37</td></tr>
                    <tr><td>HSS 3.500 × 0.216</td><td>3.500</td><td>0.216</td><td>7.74</td></tr>
                    <tr><td>HSS 4.000 × 0.120</td><td>4.000</td><td>0.120</td><td>5.03</td></tr>
                    <tr><td>HSS 4.000 × 0.237</td><td>4.000</td><td>0.237</td><td>9.75</td></tr>
                    <tr><td>HSS 5.000 × 0.134</td><td>5.000</td><td>0.134</td><td>6.84</td></tr>
                    <tr><td>HSS 5.000 × 0.258</td><td>5.000</td><td>0.258</td><td>12.85</td></tr>
                    <tr><td>HSS 6.000 × 0.134</td><td>6.000</td><td>0.134</td><td>8.26</td></tr>
                    <tr><td>HSS 6.000 × 0.280</td><td>6.000</td><td>0.280</td><td>16.90</td></tr>
                    <tr><td>HSS 8.000 × 0.148</td><td>8.000</td><td>0.148</td><td>12.08</td></tr>
                    <tr><td>HSS 8.000 × 0.322</td><td>8.000</td><td>0.322</td><td>25.66</td></tr>
                    <tr><td>HSS 10.000 × 0.188</td><td>10.000</td><td>0.188</td><td>19.20</td></tr>
                    <tr><td>HSS 10.000 × 0.365</td><td>10.000</td><td>0.365</td><td>36.60</td></tr>
                    <tr><td>HSS 12.000 × 0.250</td><td>12.000</td><td>0.250</td><td>30.60</td></tr>
                    <tr><td>HSS 12.000 × 0.500</td><td>12.000</td><td>0.500</td><td>59.80</td></tr>
                    <tr><td>HSS 14.000 × 0.375</td><td>14.000</td><td>0.375</td><td>43.40</td></tr>
                    <tr><td>HSS 14.000 × 0.500</td><td>14.000</td><td>0.500</td><td>57.50</td></tr>
                    <tr><td>HSS 16.000 × 0.375</td><td>16.000</td><td>0.375</td><td>49.70</td></tr>
                    <tr><td>HSS 16.000 × 0.500</td><td>16.000</td><td>0.500</td><td>65.90</td></tr>
                    <tr><td>HSS 18.000 × 0.500</td><td>18.000</td><td>0.500</td><td>74.30</td></tr>
                    <tr><td>HSS 20.000 × 0.500</td><td>20.000</td><td>0.500</td><td>82.80</td></tr>
                    <tr><td>HSS 24.000 × 0.625</td><td>24.000</td><td>0.625</td><td>128.00</td></tr>
                </tbody>
            </table>
        </div>

        <h4 class="fw-bold mt-4 mb-3" style="color:#db7227;">American Hollow Sections – Quick Size & Weight Chart</h4>
        <div class="table-responsive mb-4">
            <table class="table table-bordered table-striped text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Section Type</th>
                        <th>Common Size Range</th>
                        <th>Weight Range</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>Square HSS / SHS</td><td>1½ × 1½ to 16 × 16 in</td><td>2.04–118.3 lb/ft</td></tr>
                    <tr><td>Rectangular HSS / RHS</td><td>2 × 1 to 20 × 12 in</td><td>2.04–208 lb/ft</td></tr>
                    <tr><td>Round HSS / CHS</td><td>1.900–24.000 in OD</td><td>2.16–128 lb/ft</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<section id="grades" class="sec-padd-top sec-padd-bottom">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Grades Available</h2>
            <p class="text-center pb-3">American Hollow Sections, commonly referred to as Hollow Structural Sections (HSS), can be supplied in different structural steel grades according to applicable ASTM material specifications, AISC requirements and project specifications.</p>
        </div>
        <p class="text-center mb-4">The selected grade depends on the required mechanical properties, structural loading, section dimensions, wall thickness, fabrication requirements and engineering design. At Moksh Tubes & Fittings LLP, American Hollow Sections can be sourced according to the customer's specified HSS profile, dimensions, wall thickness, grade, length, quantity and applicable ASTM / AISC requirements, subject to product availability.</p>
        
        <div class="table-responsive mb-4">
            <h5 class="fw-bold mt-4 mb-3" style="color:#db7227;">Common ASTM HSS Material Specifications</h5>
            <table class="table table-bordered table-striped text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Specification</th>
                        <th>Material Type</th>
                        <th>Typical Requirement</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>ASTM A500</td><td>Cold-Formed Welded Carbon Steel Structural Tubing</td><td>Square, rectangular and round HSS applications</td></tr>
                    <tr><td>ASTM A1085</td><td>High-Strength Carbon Steel Structural Tubing</td><td>Structural HSS applications requiring specified strength and enhanced performance</td></tr>
                    <tr><td>ASTM A1065</td><td>Large Diameter Cold-Formed Welded Structural Tubing</td><td>Large rectangular and square structural sections</td></tr>
                    <tr><td>Other ASTM Specifications</td><td>Structural Steel</td><td>As per project specification and requirement</td></tr>
                </tbody>
            </table>
        </div>

        <div class="row g-4 mt-4">
            <div class="col-md-4">
                <div class="card p-4 shadow-sm h-100 border-0 bg-light">
                    <h4 class="mb-3 text-center" style="color: #db7227;">ASTM A500</h4>
                    <p class="mb-0 text-justify">ASTM A500 covers cold-formed welded and seamless carbon steel structural tubing in round, square and rectangular shapes. It is commonly specified for HSS applications in structural construction and fabrication.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 shadow-sm h-100 border-0 bg-light">
                    <h4 class="mb-3 text-center" style="color: #db7227;">ASTM A1085</h4>
                    <p class="mb-0 text-justify">ASTM A1085 covers cold-formed welded carbon steel structural tubing in round, square and rectangular shapes and can be considered where the applicable project specification requires this material specification.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 shadow-sm h-100 border-0 bg-light">
                    <h4 class="mb-3 text-center" style="color: #db7227;">ASTM A1065</h4>
                    <p class="mb-0 text-justify">ASTM A1065 covers large diameter cold-formed welded structural tubing and may be considered for large square and rectangular structural HSS applications where specified.</p>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-4">
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100 border-0 bg-white shadow-sm border border-secondary border-opacity-25 rounded-3">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Grade Selection</h4>
                    <p class="mb-2">The appropriate material specification and grade for an American Hollow Section should be selected based on:</p>
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
                                <li><i class="bi bi-check-circle text-success me-2"></i>Applicable ASTM specification</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>AISC requirements</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Project specification</li>
                            </ul>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-justify">Customers should specify the required HSS type, dimensions, wall thickness, ASTM specification, grade, length and quantity when submitting an enquiry.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100 border-0 bg-white shadow-sm border border-secondary border-opacity-25 rounded-3">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Material Documentation</h4>
                    <p class="mb-3 text-justify">Where required and agreed at the time of order, applicable material test certificates and supporting documentation can be provided according to the purchase order and project requirements.</p>
                    <div class="alert alert-warning mb-0 border-0 shadow-sm" role="alert">
                        <strong>Note:</strong> Exact specification and grade availability should be confirmed with Moksh Tubes & Fittings LLP before ordering, as availability may vary according to HSS profile, size, wall thickness, specification and project requirements.
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
            <p class="text-center pb-3">American Hollow Sections, commonly known as Hollow Structural Sections (HSS), are widely used in construction, industrial structures, infrastructure, fabrication and engineering projects where closed-profile structural steel sections are required for framing, columns, supports and fabricated assemblies.</p>
        </div>
        <div class="row g-4 mt-4">
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-building"></i></div>
                    <h5>Building & Construction</h5>
                    <p class="mb-0 text-center">American Hollow Sections are commonly used in building projects for steel building frameworks, structural columns, structural frames, roof structures, supporting members and bracing systems.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-industry"></i></div>
                    <h5>Industrial Structures</h5>
                    <p class="mb-0 text-center">HSS sections are suitable for industrial facilities where strong and rigid closed-profile structural members are required. Applications include factory structures, industrial buildings, manufacturing facilities, equipment support structures, platforms and steel frameworks.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-box-seam"></i></div>
                    <h5>Warehouses & Industrial Sheds</h5>
                    <p class="mb-0 text-center">Square and rectangular HSS can be incorporated into warehouse and industrial shed structures for structural frames, columns, roof-support systems, bracing members and fabricated steel frameworks.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-cone-striped"></i></div>
                    <h5>Infrastructure Projects</h5>
                    <p class="mb-0 text-center">American Hollow Sections can be used in infrastructure and civil engineering projects where the specified ASTM / AISC section meets the project requirements. Applications include infrastructure frameworks, supporting structures, elevated structures, platforms and engineering assemblies.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-broadcast"></i></div>
                    <h5>Towers & Tubular Structures</h5>
                    <p class="mb-0 text-center">Circular HSS can be used in tubular structural applications where a round closed profile is specified. Applications include towers, tubular frameworks, structural supports, lattice-type structures and engineering structures.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-tools"></i></div>
                    <h5>Steel Fabrication</h5>
                    <p class="mb-0 text-center">HSS sections are widely used in fabricated steel structures and assemblies. Applications include frames, brackets, supports, base structures, structural assemblies and fabricated components.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-gear"></i></div>
                    <h5>Machinery & Equipment Structures</h5>
                    <p class="mb-0 text-center">American Hollow Sections can be incorporated into support frameworks for industrial machinery and equipment, subject to the required structural design and section properties.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-nut"></i></div>
                    <h5>General Engineering Applications</h5>
                    <p class="mb-0 text-center">American Hollow Sections are also used in engineering projects requiring square, rectangular or circular closed-profile structural steel sections.</p>
                </div>
            </div>
        </div>
        <p class="text-center mt-4 text-muted">The appropriate HSS type, dimensions, wall thickness and material specification should always be selected according to the structural design, loading conditions, section properties, applicable ASTM specification, AISC requirements and project specifications.</p>
    </div>
</section>

<section id="uses" class="sec-padd-top sec-padd-bottom">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Uses of American Hollow Sections</h2>
            <p class="text-center mb-2">American Hollow Sections, commonly known as Hollow Structural Sections (HSS), are versatile closed-profile structural steel sections used for framing, columns, supports, bracing and fabricated assemblies across construction, industrial, infrastructure and engineering applications.</p>
        </div>
        <div class="row g-4 mt-4">
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Used for steel structural frameworks in commercial, industrial and building construction projects.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Suitable for structural columns and vertical supporting members where square, rectangular or circular HSS sections are specified.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Used in industrial sheds, warehouses and factory structures for structural frames and supporting systems.</h5>
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
                    <h5>Suitable for machinery and equipment support structures where the selected HSS section meets the required design criteria.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Used in towers and tubular structures, particularly where Circular HSS sections are specified.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Suitable for infrastructure and civil engineering projects requiring ASTM / AISC specified structural sections.</h5>
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
                    <h5>Can be combined with American Structural Angles, Channels, Beams and Columns to create complete steel frameworks.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Available in square, rectangular and circular profiles, providing flexibility for different structural and fabrication requirements.</h5>
                </div>
            </div>
        </div>
        <p class="text-center mt-4 text-muted">The appropriate HSS profile, dimensions, wall thickness and material specification should be selected according to the structural design, loading conditions, section properties, applicable ASTM specification, AISC requirements and project specifications.</p>
    </div>
</section>

<section id="advantages" class="sec-padd-top sec-padd-bottom bg-light">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold text-center" style="color:#174268;">Advantages of American Hollow Sections</h2>
            <p class="text-center mb-2">American Hollow Sections, commonly known as Hollow Structural Sections (HSS), provide an efficient and versatile structural steel solution for construction, industrial structures, infrastructure, fabrication and engineering applications.</p>
        </div>
        <div class="row g-4 mt-2">
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                    <h5>Structural Strength & Rigidity</h5>
                    <p class="mb-0 text-center">Closed-profile sections provide useful structural strength and rigidity when the appropriate section is selected according to engineering design.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-layers"></i></div>
                    <h5>Square, Rectangular & Circular Options</h5>
                    <p class="mb-0 text-center">Square HSS, Rectangular HSS and Circular HSS provide flexibility for different structural requirements.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-bounding-box-circles"></i></div>
                    <h5>Efficient Structural Profile</h5>
                    <p class="mb-0 text-center">The closed geometry provides a practical profile for columns, frames, supports and fabricated structural assemblies.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-grid"></i></div>
                    <h5>Wide Application Range</h5>
                    <p class="mb-0 text-center">Suitable for buildings, warehouses, industrial structures, towers, platforms, infrastructure and general engineering applications.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-building"></i></div>
                    <h5>Suitable for Structural Columns</h5>
                    <p class="mb-0 text-center">HSS can be used as structural columns and vertical supporting members where the selected section meets the required design criteria.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-tags"></i></div>
                    <h5>ASTM Specification Options</h5>
                    <p class="mb-0 text-center">HSS can be specified according to applicable ASTM material specifications such as ASTM A500, ASTM A1085 and ASTM A1065, subject to product and project requirements.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-file-earmark-check"></i></div>
                    <h5>AISC-Based Selection</h5>
                    <p class="mb-0 text-center">HSS section selection and structural application can be considered according to applicable AISC requirements and engineering design.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-arrows-expand"></i></div>
                    <h5>Different Size & Thickness Options</h5>
                    <p class="mb-0 text-center">Available in different outside dimensions and wall thicknesses according to applicable standards and product requirements.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-bezier2"></i></div>
                    <h5>Design Flexibility</h5>
                    <p class="mb-0 text-center">Square, rectangular and circular profiles allow engineers to select sections according to structural configuration and application requirements.</p>
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
                    <div class="advantage-icon"><i class="bi bi-truck"></i></div>
                    <h5>Project-Based Supply</h5>
                    <p class="mb-0 text-center">Requirements can be specified according to HSS type, dimensions, wall thickness, material specification, length and quantity.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-box"></i></div>
                    <h5>Compatible with Other American Sections</h5>
                    <p class="mb-0 text-center">Can be used with American Structural Angles, Channels, Beams and Columns to create complete steel frameworks.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-globe"></i></div>
                    <h5>Domestic & International Applications</h5>
                    <p class="mb-0 text-center">Suitable for projects requiring structural HSS specified to ASTM / AISC requirements.</p>
                </div>
            </div>
        </div>
        <p class="text-center mt-4 text-muted">The appropriate HSS profile, dimensions, wall thickness and material specification should always be selected according to the structural design, loading conditions, section properties, applicable ASTM specification, AISC requirements and project specifications.</p>
    </div>
</section>

<section id="mechanical-properties" class="sec-padd-top sec-padd-bottom">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Mechanical Properties – American Hollow Sections</h2>
        </div>
        <p class="text-center mb-4 text-muted">(Typical minimum values; values depend on ASTM grade and section type.)</p>
        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle text-center">
                <thead class="table-dark">
                    <tr>
                        <th>Standard / Grade</th>
                        <th>ASTM A500 Grade B</th>
                        <th>ASTM A500 Grade C</th>
                        <th>ASTM A1085/A1085M</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>Tensile Strength (MPa), Min.</td><td>400</td><td>428</td><td>450</td></tr>
                    <tr><td>Yield Strength (MPa), Min.</td><td>317</td><td>345</td><td>345</td></tr>
                    <tr><td>Elongation (%), Min.</td><td>23</td><td>21</td><td>21</td></tr>
                </tbody>
            </table>
        </div>
        <p class="mt-2 text-muted text-center"><small>AISC lists A500 Grade B at 46 ksi (317 MPa) yield / 58 ksi (400 MPa) tensile for rectangular HSS, while Grade C is 50 ksi (345 MPa) / 62 ksi (428 MPa). ASTM A1085 uses a single 50 ksi (345 MPa) minimum yield and 65 ksi (450 MPa) minimum tensile strength for round, square and rectangular HSS.</small></p>
    </div>
</section>

<section id="why-choose-us" class="sec-padd-top sec-padd-bottom bg-light">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Why Choose Moksh Tubes & Fittings LLP?</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-center mb-4">Moksh Tubes & Fittings LLP supports customers looking for American Hollow Sections / HSS for construction, industrial, infrastructure, fabrication and engineering requirements. Our supply approach is based on the customer's required HSS profile, dimensions, wall thickness, material specification, length, quantity and applicable ASTM / AISC requirements.</p>
                <div class="row g-4 mt-4">
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-box-seam"></i></div>
                            <h5>Project-Based Sourcing</h5>
                            <p class="mb-0">American Hollow Sections can be sourced according to specific project requirements and technical specifications.</p>
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
                            <div class="why-banner-icon"><i class="bi bi-bezier"></i></div>
                            <h5>AISC Requirements</h5>
                            <p class="mb-0">HSS section requirements can be considered according to applicable AISC project and engineering requirements.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-boxes"></i></div>
                            <h5>Square, Rectangular & Circular HSS</h5>
                            <p class="mb-0">Requirements for square, rectangular and circular hollow structural sections can be considered according to specification and product availability.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                            <h5>Wide Product Range</h5>
                            <p class="mb-0">Different HSS dimensions, wall thicknesses and material specifications can be considered according to customer requirements.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-building"></i></div>
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
                            <p class="mb-0">Assistance with HSS dimensions, wall thickness, material specifications, ASTM requirements and procurement requirements.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-sliders"></i></div>
                            <h5>Custom Requirements</h5>
                            <p class="mb-0">Specific HSS profiles, dimensions, wall thicknesses, material specifications, lengths and quantities can be discussed for project requirements.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-gear"></i></div>
                            <h5>Suitable for Industrial & Infrastructure Projects</h5>
                            <p class="mb-0">Support for customers sourcing American Hollow Sections for construction, fabrication, industrial and infrastructure applications.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-globe"></i></div>
                            <h5>International Project Support</h5>
                            <p class="mb-0">Suitable for customers requiring American-specification HSS for domestic and international projects.</p>
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
            <h2 class="fw-bold" style="color: #174268;">FAQ – American Hollow Sections</h2>
        </div>
        <div class="row g-4 mt-4">
            <div class="col-md-6">
                <div class="accordion-box">
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What are American Hollow Sections?</h4>
                        </div>
                        <div class="accord-content">
                            <p>American Hollow Sections, commonly known as Hollow Structural Sections (HSS), are closed-profile structural steel sections used in construction, industrial structures, infrastructure, fabrication and engineering applications.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What are the main types of American Hollow Sections?</h4>
                        </div>
                        <div class="accord-content">
                            <p>The main profiles include Square HSS, Rectangular HSS and Circular HSS. The appropriate profile is selected according to structural design and project requirements.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What are Square HSS used for?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Square HSS are commonly used for structural frames, columns, supports, trusses, bracing and fabricated steel structures where a symmetrical closed profile is required.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What are Rectangular HSS used for?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Rectangular HSS are used for structural frameworks, columns, supports, platforms, frames and fabricated assemblies where rectangular dimensions are preferred.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What are Circular HSS used for?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Circular HSS are commonly used for tubular structures, columns, towers, supports and engineering applications where a circular structural section is specified.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Which standards apply to American Hollow Sections?</h4>
                        </div>
                        <div class="accord-content">
                            <p>American Hollow Sections can be specified according to applicable ASTM material specifications and AISC requirements, depending on the product and project requirements.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Which ASTM specifications are available for HSS?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Specifications such as ASTM A500, ASTM A1085 and ASTM A1065 may be considered according to the applicable HSS profile and project requirements. Exact specification availability should be confirmed at the time of enquiry.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="accordion-box">
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What sizes of American Hollow Sections are available?</h4>
                        </div>
                        <div class="accord-content">
                            <p>HSS are available in different outside dimensions, diameters and wall thicknesses. Actual availability depends on the applicable specification and Moksh Tubes & Fittings LLP's current product range.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Can American Hollow Sections be supplied in custom lengths?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Yes. Standard and cut-to-length requirements can be considered depending on product availability and customer specifications.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>How do I select the right HSS section?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Selection should consider the HSS profile, dimensions, wall thickness, loading conditions, section properties, connection requirements, material specification and applicable AISC requirements.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Can Moksh Tubes & Fittings LLP supply American Hollow Sections in bulk?</h4>
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
                            <p>Customers should provide the HSS type, outside dimensions or diameter, wall thickness, ASTM specification, required length and quantity. Project drawings or technical specifications can also be shared.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Can American Hollow Sections be used with other American structural sections?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Yes. HSS can be used with American Structural Angles, Channels, Beams and Columns to create complete steel frameworks and fabricated assemblies.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Does Moksh Tubes & Fittings LLP support international enquiries?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Yes. International enquiries for American Hollow Sections can be discussed based on the required HSS profile, ASTM specification, dimensions, quantity and delivery requirements.</p>
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
            <p class="fs-5 mt-3">Looking for American Hollow Sections / HSS for your construction, industrial, infrastructure or fabrication project?</p>
            <p class="mb-4 text-light">
                Contact <strong>Moksh Tubes & Fittings LLP</strong> for American Hollow Section requirements based on your required HSS profile, dimensions, wall thickness, ASTM specification, length and quantity.<br>
                Share your project specifications, drawings or material requirements with our team to discuss the suitable American Hollow Sections for your application.
            </p>
            <a href="{{ route('contact-us') ?? '#' }}" class="btn btn-lg text-white shadow"
                style="background-color:#db7227; border-radius:8px; padding: 12px 30px;">Contact Us Now</a>
            <p class="mt-4 mb-0 text-light opacity-75">📞 Contact Moksh Tubes & Fittings LLP at +91 97695 84950 for product availability, technical specifications and quotation enquiries.</p>
        </div>
    </div>
</section>

@endsection