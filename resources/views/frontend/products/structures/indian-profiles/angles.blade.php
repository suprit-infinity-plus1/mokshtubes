@extends('layouts.master')
@section('title', 'Indian Structural Angles | IS Equal & Unequal Angles Supplier')
@section('meta_description', 'Indian Structural Angles in equal and unequal profiles for construction, fabrication, infrastructure and industrial applications. Enquire with Moksh Tubes & Fittings LLP.')
@section('canonical', url()->current())
@section('og_type', 'product')
@section('og_title', 'Indian Structural Angles | IS Equal & Unequal Angles Supplier')
@section('og_description', 'Indian Structural Angles in equal and unequal profiles for construction, fabrication, infrastructure and industrial applications. Enquire with Moksh Tubes & Fittings LLP.')
@section('twitter_title', 'Indian Structural Angles | IS Equal & Unequal Angles Supplier')
@section('twitter_description', 'Indian Structural Angles in equal and unequal profiles for construction, fabrication, infrastructure and industrial applications. Enquire with Moksh Tubes & Fittings LLP.')

@section('content')
<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image: url({{ asset('assets/images/product/default-bg.jpg') }});">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto text-center">
                <h1 class="page-title">Indian Structural Angles – IS Standard Equal & Unequal Angles</h1>
                <p class="text-center mt-3 px-3 py-2 text-white position-relative" style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                    Indian Structural Angles are L-shaped steel sections widely used for structural fabrication, construction, infrastructure, industrial frameworks, supports, trusses, towers, brackets, and general engineering applications. Available in equal and unequal angle profiles, these structural sections can be selected according to required dimensions, thickness, material grade and project specifications.
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
            <h2 class="fw-bold" style="color: #174268;">Indian Structural Angles</h2>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="{{ asset('/assets/images/product/default-angle.jpg') }}" alt="Indian Structural Angles" class="img-fluid rounded shadow-sm" loading="lazy">
            </div>
            <div class="col-md-6">
                <p class="fs-6 mb-3 text-justify"><strong>Indian Structural Angles</strong> are L-shaped structural steel sections designed for use in a wide range of construction, fabrication and engineering applications. Their simple and versatile profile makes them suitable for structural frames, bracing systems, trusses, supports, towers, platforms, brackets and fabricated assemblies.</p>
                <p class="fs-6 mb-3 text-justify">Structural angles are primarily available in two configurations: <strong>Equal Structural Angles</strong>, where both legs have the same width, and <strong>Unequal Structural Angles</strong>, where the two legs have different widths. The selection of the appropriate profile depends on the structural design, required dimensions, loading conditions and connection requirements.</p>
                <p class="fs-6 mb-3 text-justify">At <a href="https://mokshtubes.com" class="text-white text-decoration-underline" target="_blank">Moksh Tubes & Fittings LLP</a>, we cater to requirements for Indian Structural Angles based on specified size, thickness, grade, length, quantity and applicable standards. These profiles can be considered for both standard procurement and project-based structural steel requirements.</p>
                <p class="fs-6 mb-3 text-justify">Indian Structural Angles are valued for their practical fabrication characteristics and suitability for applications requiring structural support, reinforcement, framing and connections. They can be used in combination with other structural steel sections to create reliable and efficient fabricated structures.</p>
                <p class="fs-6 mb-3 text-justify">For specific projects, customers can provide their required angle dimensions, material grade, length, quantity and technical specifications so that the appropriate product requirement can be evaluated.</p>
            </div>
        </div>
    </div>
</section>

<!-- Datasheet Download -->
<section class="sec-padd-bottom bg-light">
    <div class="datasheet-download px-4 text-center">
        <h3 class="mb-3" style="color:#174268;">Download Indian Structural Angles Datasheet</h3>
        <p class="mb-3">
            Get the complete Indian Structural Angles datasheet with chemical composition,
            mechanical properties, heat treatment details, and applications.
            Enter your email to receive the PDF instantly.
        </p>

        <!-- Lead Capture Form -->
        <form id="leadForm" method="POST" action="{{ route('lead.capture') }}" class="mb-3">
            @csrf
            <input type="hidden" name="page_path" value="{{ $slug ?? 'indian-structural-angles' }}">
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
            <p class="text-center">Indian Structural Angles are supplied in equal and unequal angle profiles with dimensions, thicknesses, lengths and material grades selected according to the applicable Indian Standard and project requirements.</p>
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
                    <tr><td>Product</td><td>Indian Structural Angles</td></tr>
                    <tr><td>Types</td><td>Equal Angles & Unequal Angles</td></tr>
                    <tr><td>Profile</td><td>L-Shaped Structural Section</td></tr>
                    <tr><td>Material</td><td>Structural Steel / Carbon Steel</td></tr>
                    <tr><td>Standards</td><td>Applicable Indian Standards / Project Specifications</td></tr>
                    <tr><td>Grades</td><td>As per applicable material specification</td></tr>
                    <tr><td>Leg Dimensions</td><td>Various standard sizes</td></tr>
                    <tr><td>Thickness</td><td>As per selected angle size and specification</td></tr>
                    <tr><td>Length</td><td>Standard Lengths / Cut-to-Length</td></tr>
                    <tr><td>Surface</td><td>Mill Finish / As Specified</td></tr>
                    <tr><td>Supply Form</td><td>Individual Sections / Bundles</td></tr>
                    <tr><td>Customization</td><td>Size, thickness, length and grade as required</td></tr>
                    <tr><td>Applications</td><td>Construction, Fabrication, Infrastructure, Industrial & Engineering Applications</td></tr>
                </tbody>
            </table>
        </div>
        
        <div class="row g-4 mt-4">
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Equal Angles</h4>
                    <p class="mb-0 text-justify">Equal Structural Angles have two legs of the same width and are commonly selected for symmetrical structural applications, including framing, bracing, trusses, supports and fabricated structures.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Unequal Angles</h4>
                    <p class="mb-0 text-justify">Unequal Structural Angles have two legs of different widths and provide greater flexibility for applications where different leg dimensions are required for structural connections, supports or fabrication.</p>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-4">
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Dimensional Availability</h4>
                    <p class="mb-2">The required angle can be specified by its leg dimensions and thickness. Available sizes depend on the applicable standard and Moksh Tubes & Fittings LLP's confirmed product range.</p>
                    <p class="mb-2">Customers can specify:</p>
                    <ul class="list-unstyled mb-0">
                        <li><i class="bi bi-check2 text-success me-2"></i>Angle type</li>
                        <li><i class="bi bi-check2 text-success me-2"></i>Leg dimensions</li>
                        <li><i class="bi bi-check2 text-success me-2"></i>Thickness</li>
                        <li><i class="bi bi-check2 text-success me-2"></i>Material grade</li>
                        <li><i class="bi bi-check2 text-success me-2"></i>Required length</li>
                        <li><i class="bi bi-check2 text-success me-2"></i>Quantity</li>
                        <li><i class="bi bi-check2 text-success me-2"></i>Applicable standard</li>
                        <li><i class="bi bi-check2 text-success me-2"></i>Project specification</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Supply Requirements</h4>
                    <p class="mb-3 text-justify">For an accurate quotation, customers should provide the required size, thickness, grade, length and quantity. Project drawings or technical specifications can also be shared where specific structural requirements need to be considered.</p>
                    <p class="mb-0 text-justify">Moksh Tubes & Fittings LLP can support standard and project-based requirements for Indian Structural Angles, subject to product availability and agreed specifications.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="size-chart" class="sec-padd-top sec-padd-bottom bg-light">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Size & Weight Chart</h2>
            <p class="text-center">For this page, the correct standard is IS 808:2021, which classifies structural angles into Indian Standard Equal Leg Angles (ISA) and Indian Standard Unequal Leg Angles (ISA). IS 808:2021 covers nominal dimensions and mass of hot-rolled angle sections.</p>
        </div>
        
        <h4 class="fw-bold mt-4 mb-3" style="color:#db7227;">IS Equal Angles – ISA Size & Weight Chart</h4>
        <div class="table-responsive mb-5">
            <table class="table table-bordered table-striped text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Section</th>
                        <th>Size (A × B × t) mm</th>
                        <th>Thickness (mm)</th>
                        <th>Weight (kg/m)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>ISA 20×20×3</td><td>20 × 20 × 3</td><td>3</td><td>0.90</td></tr>
                    <tr><td>ISA 20×20×4</td><td>20 × 20 × 4</td><td>4</td><td>1.14</td></tr>
                    <tr><td>ISA 25×25×3</td><td>25 × 25 × 3</td><td>3</td><td>1.14</td></tr>
                    <tr><td>ISA 25×25×4</td><td>25 × 25 × 4</td><td>4</td><td>1.49</td></tr>
                    <tr><td>ISA 25×25×5</td><td>25 × 25 × 5</td><td>5</td><td>1.80</td></tr>
                    <tr><td>ISA 30×30×3</td><td>30 × 30 × 3</td><td>3</td><td>1.38</td></tr>
                    <tr><td>ISA 30×30×4</td><td>30 × 30 × 4</td><td>4</td><td>1.80</td></tr>
                    <tr><td>ISA 30×30×5</td><td>30 × 30 × 5</td><td>5</td><td>2.29</td></tr>
                    <tr><td>ISA 35×35×3</td><td>35 × 35 × 3</td><td>3</td><td>1.62</td></tr>
                    <tr><td>ISA 35×35×4</td><td>35 × 35 × 4</td><td>4</td><td>2.11</td></tr>
                    <tr><td>ISA 35×35×5</td><td>35 × 35 × 5</td><td>5</td><td>2.59</td></tr>
                    <tr><td>ISA 35×35×6</td><td>35 × 35 × 6</td><td>6</td><td>3.06</td></tr>
                    <tr><td>ISA 40×40×3</td><td>40 × 40 × 3</td><td>3</td><td>1.80</td></tr>
                    <tr><td>ISA 40×40×4</td><td>40 × 40 × 4</td><td>4</td><td>2.29</td></tr>
                    <tr><td>ISA 40×40×5</td><td>40 × 40 × 5</td><td>5</td><td>2.80</td></tr>
                    <tr><td>ISA 40×40×6</td><td>40 × 40 × 6</td><td>6</td><td>3.30</td></tr>
                    <tr><td>ISA 45×45×3</td><td>45 × 45 × 3</td><td>3</td><td>2.10</td></tr>
                    <tr><td>ISA 45×45×4</td><td>45 × 45 × 4</td><td>4</td><td>2.75</td></tr>
                    <tr><td>ISA 45×45×5</td><td>45 × 45 × 5</td><td>5</td><td>3.40</td></tr>
                    <tr><td>ISA 45×45×6</td><td>45 × 45 × 6</td><td>6</td><td>4.01</td></tr>
                    <tr><td>ISA 50×50×3</td><td>50 × 50 × 3</td><td>3</td><td>2.34</td></tr>
                    <tr><td>ISA 50×50×4</td><td>50 × 50 × 4</td><td>4</td><td>3.08</td></tr>
                    <tr><td>ISA 50×50×5</td><td>50 × 50 × 5</td><td>5</td><td>3.79</td></tr>
                    <tr><td>ISA 50×50×6</td><td>50 × 50 × 6</td><td>6</td><td>4.49</td></tr>
                    <tr><td>ISA 55×55×4</td><td>55 × 55 × 4</td><td>4</td><td>3.40</td></tr>
                    <tr><td>ISA 55×55×5</td><td>55 × 55 × 5</td><td>5</td><td>4.19</td></tr>
                    <tr><td>ISA 55×55×6</td><td>55 × 55 × 6</td><td>6</td><td>4.97</td></tr>
                    <tr><td>ISA 55×55×8</td><td>55 × 55 × 8</td><td>8</td><td>6.48</td></tr>
                    <tr><td>ISA 60×60×4</td><td>60 × 60 × 4</td><td>4</td><td>3.71</td></tr>
                    <tr><td>ISA 60×60×5</td><td>60 × 60 × 5</td><td>5</td><td>4.58</td></tr>
                    <tr><td>ISA 60×60×6</td><td>60 × 60 × 6</td><td>6</td><td>5.44</td></tr>
                    <tr><td>ISA 60×60×8</td><td>60 × 60 × 8</td><td>8</td><td>7.10</td></tr>
                    <tr><td>ISA 65×65×5</td><td>65 × 65 × 5</td><td>5</td><td>5.13</td></tr>
                    <tr><td>ISA 65×65×6</td><td>65 × 65 × 6</td><td>6</td><td>6.34</td></tr>
                    <tr><td>ISA 65×65×8</td><td>65 × 65 × 8</td><td>8</td><td>8.25</td></tr>
                    <tr><td>ISA 65×65×10</td><td>65 × 65 × 10</td><td>10</td><td>9.85</td></tr>
                    <tr><td>ISA 70×70×5</td><td>70 × 70 × 5</td><td>5</td><td>5.53</td></tr>
                    <tr><td>ISA 70×70×6</td><td>70 × 70 × 6</td><td>6</td><td>6.66</td></tr>
                    <tr><td>ISA 70×70×8</td><td>70 × 70 × 8</td><td>8</td><td>8.76</td></tr>
                    <tr><td>ISA 70×70×10</td><td>70 × 70 × 10</td><td>10</td><td>10.90</td></tr>
                    <tr><td>ISA 75×75×5</td><td>75 × 75 × 5</td><td>5</td><td>5.71</td></tr>
                    <tr><td>ISA 75×75×6</td><td>75 × 75 × 6</td><td>6</td><td>6.80</td></tr>
                    <tr><td>ISA 75×75×8</td><td>75 × 75 × 8</td><td>8</td><td>8.93</td></tr>
                    <tr><td>ISA 75×75×10</td><td>75 × 75 × 10</td><td>10</td><td>11.00</td></tr>
                    <tr><td>ISA 80×80×6</td><td>80 × 80 × 6</td><td>6</td><td>7.29</td></tr>
                    <tr><td>ISA 80×80×8</td><td>80 × 80 × 8</td><td>8</td><td>9.59</td></tr>
                    <tr><td>ISA 80×80×10</td><td>80 × 80 × 10</td><td>10</td><td>11.80</td></tr>
                    <tr><td>ISA 80×80×12</td><td>80 × 80 × 12</td><td>12</td><td>14.00</td></tr>
                    <tr><td>ISA 90×90×6</td><td>90 × 90 × 6</td><td>6</td><td>8.25</td></tr>
                    <tr><td>ISA 90×90×8</td><td>90 × 90 × 8</td><td>8</td><td>10.90</td></tr>
                    <tr><td>ISA 90×90×10</td><td>90 × 90 × 10</td><td>10</td><td>13.40</td></tr>
                    <tr><td>ISA 90×90×12</td><td>90 × 90 × 12</td><td>12</td><td>15.90</td></tr>
                    <tr><td>ISA 100×100×6</td><td>100 × 100 × 6</td><td>6</td><td>9.19</td></tr>
                    <tr><td>ISA 100×100×8</td><td>100 × 100 × 8</td><td>8</td><td>12.10</td></tr>
                    <tr><td>ISA 100×100×10</td><td>100 × 100 × 10</td><td>10</td><td>14.90</td></tr>
                    <tr><td>ISA 100×100×12</td><td>100 × 100 × 12</td><td>12</td><td>17.70</td></tr>
                    <tr><td>ISA 110×110×8</td><td>110 × 110 × 8</td><td>8</td><td>13.40</td></tr>
                    <tr><td>ISA 110×110×10</td><td>110 × 110 × 10</td><td>10</td><td>16.50</td></tr>
                    <tr><td>ISA 110×110×12</td><td>110 × 110 × 12</td><td>12</td><td>19.60</td></tr>
                    <tr><td>ISA 110×110×15</td><td>110 × 110 × 15</td><td>15</td><td>24.20</td></tr>
                    <tr><td>ISA 130×130×8</td><td>130 × 130 × 8</td><td>8</td><td>15.90</td></tr>
                    <tr><td>ISA 130×130×10</td><td>130 × 130 × 10</td><td>10</td><td>19.70</td></tr>
                    <tr><td>ISA 130×130×12</td><td>130 × 130 × 12</td><td>12</td><td>23.40</td></tr>
                    <tr><td>ISA 130×130×15</td><td>130 × 130 × 15</td><td>15</td><td>28.90</td></tr>
                    <tr><td>ISA 150×150×10</td><td>150 × 150 × 10</td><td>10</td><td>22.80</td></tr>
                    <tr><td>ISA 150×150×12</td><td>150 × 150 × 12</td><td>12</td><td>27.20</td></tr>
                    <tr><td>ISA 150×150×15</td><td>150 × 150 × 15</td><td>15</td><td>33.72</td></tr>
                    <tr><td>ISA 150×150×18</td><td>150 × 150 × 18</td><td>18</td><td>40.01</td></tr>
                    <tr><td>ISA 180×180×15</td><td>180 × 180 × 15</td><td>15</td><td>41.09</td></tr>
                    <tr><td>ISA 180×180×18</td><td>180 × 180 × 18</td><td>18</td><td>48.79</td></tr>
                    <tr><td>ISA 180×180×20</td><td>180 × 180 × 20</td><td>20</td><td>53.85</td></tr>
                    <tr><td>ISA 200×200×24</td><td>200 × 200 × 24</td><td>24</td><td>71.31</td></tr>
                </tbody>
            </table>
        </div>
        <p class="text-center mt-3 text-muted">The IS 808:2021 table identifies these as Indian Standard Equal Leg Angles and provides mass in kg/m together with dimensional and sectional-property data.</p>

        <h4 class="fw-bold mt-5 mb-3" style="color:#db7227;">IS Unequal Angles – ISA Size & Weight Chart</h4>
        <div class="table-responsive mb-4">
            <table class="table table-bordered table-striped text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Section</th>
                        <th>Size (A × B × t) mm</th>
                        <th>Thickness (mm)</th>
                        <th>Weight (kg/m)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>ISA 30×20×3</td><td>30 × 20 × 3</td><td>3</td><td>1.14</td></tr>
                    <tr><td>ISA 30×20×4</td><td>30 × 20 × 4</td><td>4</td><td>1.48</td></tr>
                    <tr><td>ISA 30×20×5</td><td>30 × 20 × 5</td><td>5</td><td>1.80</td></tr>
                    <tr><td>ISA 40×25×3</td><td>40 × 25 × 3</td><td>3</td><td>1.50</td></tr>
                    <tr><td>ISA 40×25×4</td><td>40 × 25 × 4</td><td>4</td><td>1.96</td></tr>
                    <tr><td>ISA 40×25×5</td><td>40 × 25 × 5</td><td>5</td><td>2.40</td></tr>
                    <tr><td>ISA 40×25×6</td><td>40 × 25 × 6</td><td>6</td><td>2.82</td></tr>
                    <tr><td>ISA 45×30×3</td><td>45 × 30 × 3</td><td>3</td><td>1.74</td></tr>
                    <tr><td>ISA 45×30×4</td><td>45 × 30 × 4</td><td>4</td><td>2.27</td></tr>
                    <tr><td>ISA 45×30×5</td><td>45 × 30 × 5</td><td>5</td><td>2.79</td></tr>
                    <tr><td>ISA 45×30×6</td><td>45 × 30 × 6</td><td>6</td><td>3.29</td></tr>
                    <tr><td>ISA 50×30×3</td><td>50 × 30 × 3</td><td>3</td><td>1.88</td></tr>
                    <tr><td>ISA 50×30×4</td><td>50 × 30 × 4</td><td>4</td><td>2.49</td></tr>
                    <tr><td>ISA 50×30×5</td><td>50 × 30 × 5</td><td>5</td><td>3.05</td></tr>
                    <tr><td>ISA 50×30×6</td><td>50 × 30 × 6</td><td>6</td><td>3.59</td></tr>
                    <tr><td>ISA 60×40×5</td><td>60 × 40 × 5</td><td>5</td><td>3.79</td></tr>
                    <tr><td>ISA 60×40×6</td><td>60 × 40 × 6</td><td>6</td><td>4.49</td></tr>
                    <tr><td>ISA 60×40×8</td><td>60 × 40 × 8</td><td>8</td><td>5.72</td></tr>
                    <tr><td>ISA 60×40×10</td><td>60 × 40 × 10</td><td>10</td><td>7.44</td></tr>
                    <tr><td>ISA 65×45×5</td><td>65 × 45 × 5</td><td>5</td><td>4.14</td></tr>
                    <tr><td>ISA 65×45×6</td><td>65 × 45 × 6</td><td>6</td><td>4.96</td></tr>
                    <tr><td>ISA 65×45×8</td><td>65 × 45 × 8</td><td>8</td><td>6.63</td></tr>
                    <tr><td>ISA 65×45×10</td><td>65 × 45 × 10</td><td>10</td><td>8.24</td></tr>
                    <tr><td>ISA 70×45×5</td><td>70 × 45 × 5</td><td>5</td><td>4.78</td></tr>
                    <tr><td>ISA 70×45×6</td><td>70 × 45 × 6</td><td>6</td><td>5.68</td></tr>
                    <tr><td>ISA 70×45×8</td><td>70 × 45 × 8</td><td>8</td><td>7.42</td></tr>
                    <tr><td>ISA 70×45×10</td><td>70 × 45 × 10</td><td>10</td><td>9.10</td></tr>
                    <tr><td>ISA 75×50×5</td><td>75 × 50 × 5</td><td>5</td><td>4.99</td></tr>
                    <tr><td>ISA 75×50×6</td><td>75 × 50 × 6</td><td>6</td><td>5.92</td></tr>
                    <tr><td>ISA 75×50×8</td><td>75 × 50 × 8</td><td>8</td><td>7.74</td></tr>
                    <tr><td>ISA 75×50×10</td><td>75 × 50 × 10</td><td>10</td><td>9.50</td></tr>
                    <tr><td>ISA 80×50×5</td><td>80 × 50 × 5</td><td>5</td><td>5.33</td></tr>
                    <tr><td>ISA 80×50×6</td><td>80 × 50 × 6</td><td>6</td><td>6.32</td></tr>
                    <tr><td>ISA 80×50×8</td><td>80 × 50 × 8</td><td>8</td><td>8.31</td></tr>
                    <tr><td>ISA 80×50×10</td><td>80 × 50 × 10</td><td>10</td><td>10.25</td></tr>
                    <tr><td>ISA 90×60×6</td><td>90 × 60 × 6</td><td>6</td><td>6.88</td></tr>
                    <tr><td>ISA 90×60×8</td><td>90 × 60 × 8</td><td>8</td><td>9.10</td></tr>
                    <tr><td>ISA 90×60×10</td><td>90 × 60 × 10</td><td>10</td><td>11.25</td></tr>
                    <tr><td>ISA 90×60×12</td><td>90 × 60 × 12</td><td>12</td><td>13.09</td></tr>
                    <tr><td>ISA 100×65×7</td><td>100 × 65 × 7</td><td>7</td><td>8.76</td></tr>
                    <tr><td>ISA 100×65×8</td><td>100 × 65 × 8</td><td>8</td><td>9.87</td></tr>
                    <tr><td>ISA 100×65×10</td><td>100 × 65 × 10</td><td>10</td><td>12.10</td></tr>
                    <tr><td>ISA 100×75×8</td><td>100 × 75 × 8</td><td>8</td><td>10.70</td></tr>
                    <tr><td>ISA 100×75×10</td><td>100 × 75 × 10</td><td>10</td><td>13.20</td></tr>
                    <tr><td>ISA 100×75×12</td><td>100 × 75 × 12</td><td>12</td><td>15.60</td></tr>
                    <tr><td>ISA 120×80×8</td><td>120 × 80 × 8</td><td>8</td><td>12.10</td></tr>
                    <tr><td>ISA 120×80×10</td><td>120 × 80 × 10</td><td>10</td><td>14.90</td></tr>
                    <tr><td>ISA 120×80×12</td><td>120 × 80 × 12</td><td>12</td><td>17.70</td></tr>
                    <tr><td>ISA 125×75×8</td><td>125 × 75 × 8</td><td>8</td><td>12.10</td></tr>
                    <tr><td>ISA 125×75×10</td><td>125 × 75 × 10</td><td>10</td><td>14.90</td></tr>
                    <tr><td>ISA 125×75×12</td><td>125 × 75 × 12</td><td>12</td><td>17.60</td></tr>
                    <tr><td>ISA 150×100×10</td><td>150 × 100 × 10</td><td>10</td><td>18.80</td></tr>
                    <tr><td>ISA 150×100×12</td><td>150 × 100 × 12</td><td>12</td><td>22.40</td></tr>
                    <tr><td>ISA 150×115×10</td><td>150 × 115 × 10</td><td>10</td><td>20.00</td></tr>
                    <tr><td>ISA 200×100×10</td><td>200 × 100 × 10</td><td>10</td><td>22.80</td></tr>
                    <tr><td>ISA 200×100×12</td><td>200 × 100 × 12</td><td>12</td><td>27.10</td></tr>
                    <tr><td>ISA 200×150×12</td><td>200 × 150 × 12</td><td>12</td><td>31.90</td></tr>
                    <tr><td>ISA 200×150×15</td><td>200 × 150 × 15</td><td>15</td><td>39.40</td></tr>
                    <tr><td>ISA 200×150×18</td><td>200 × 150 × 18</td><td>18</td><td>47.10</td></tr>
                </tbody>
            </table>
        </div>
        <p class="text-center mt-3 text-muted">The unequal-angle series is identified in IS 808:2021 Table 11; the standard records the longer leg, shorter leg, thickness, mass and sectional properties.</p>
    </div>
</section>

<section id="grades" class="sec-padd-top sec-padd-bottom">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Grades Available</h2>
            <p class="text-center pb-3">Indian Structural Angles can be supplied in different structural steel grades according to the applicable Indian Standard and project requirements. The selected grade depends on the required mechanical properties, structural application, fabrication requirements and design specifications.</p>
        </div>
        <p class="text-center mb-4">At Moksh Tubes & Fittings LLP, structural angles can be sourced according to the customer's specified grade, dimensions, thickness, length and applicable standard, subject to product availability.</p>
        
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
                    <tr><td>E250</td><td>Structural Steel</td><td>General fabrication and structural applications</td></tr>
                    <tr><td>E350</td><td>Structural Steel</td><td>Applications requiring higher strength</td></tr>
                    <tr><td>Other Grades</td><td>Structural Steel</td><td>Available as per project specification and requirement</td></tr>
                </tbody>
            </table>
        </div>

        <div class="row g-4 mt-4">
            <div class="col-md-4">
                <div class="card p-4 shadow-sm h-100 border-0 bg-light">
                    <h4 class="mb-3 text-center" style="color: #db7227;">IS 2062 Structural Steel</h4>
                    <p class="mb-0 text-justify">IS 2062 is a commonly specified Indian standard for structural steel products used in construction, engineering and fabrication applications. Different grades and sub-grades can be selected according to the required strength and project specification.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 shadow-sm h-100 border-0 bg-light">
                    <h4 class="mb-3 text-center" style="color: #db7227;">E250 Grade</h4>
                    <p class="mb-0 text-justify">E250 structural steel is used for general structural applications where the specified strength and mechanical properties meet the requirements of the project. It can be considered for structural frameworks, fabrication and engineering applications.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 shadow-sm h-100 border-0 bg-light">
                    <h4 class="mb-3 text-center" style="color: #db7227;">E350 Grade</h4>
                    <p class="mb-0 text-justify">E350 structural steel provides higher specified strength than standard lower-strength structural grades and can be selected for applications where higher strength is required, subject to the applicable specification and design requirements.</p>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-4">
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100 border-0 bg-white shadow-sm border border-secondary border-opacity-25 rounded-3">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Grade Selection</h4>
                    <p class="mb-2">The appropriate structural angle grade should be selected based on:</p>
                    <div class="row">
                        <div class="col-6">
                            <ul class="list-unstyled mb-0">
                                <li><i class="bi bi-check-circle text-success me-2"></i>Required mechanical properties</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Structural loading</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Design requirements</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Welding and fabrication requirements</li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="list-unstyled mb-0">
                                <li><i class="bi bi-check-circle text-success me-2"></i>Operating environment</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Section dimensions</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Applicable Indian Standard</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Project specification</li>
                            </ul>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-justify">Customers should mention the required grade, standard, angle size, thickness, length and quantity when submitting an enquiry.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100 border-0 bg-white shadow-sm border border-secondary border-opacity-25 rounded-3">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Material Documentation</h4>
                    <p class="mb-3 text-justify">Where required and agreed at the time of order, structural angles can be supplied with applicable material test certificates and supporting documentation according to the purchase order and project requirements.</p>
                    <div class="alert alert-warning mb-0 border-0 shadow-sm" role="alert">
                        <strong>Note:</strong> Exact grade availability should be confirmed with Moksh Tubes & Fittings LLP before ordering, as the available grades may vary according to size, specification and project requirements.
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
            <p class="text-center pb-3">Indian Structural Angles are widely used in construction, structural fabrication, infrastructure and engineering applications where reliable steel sections are required for support, framing, bracing, reinforcement and connections.</p>
        </div>
        <div class="row g-4 mt-4">
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-building"></i></div>
                    <h5>Construction & Building Structures</h5>
                    <p class="mb-0 text-center">Structural angles are commonly used in building and construction projects for steel structural frameworks, roof structures and trusses, bracing members, supports and brackets, frames and fabricated assemblies.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-industry"></i></div>
                    <h5>Industrial Structures</h5>
                    <p class="mb-0 text-center">Indian Structural Angles are suitable for various industrial fabrication and structural requirements, including industrial sheds, equipment support structures, platforms, walkways, steel frames and support assemblies.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-broadcast"></i></div>
                    <h5>Towers & Transmission Structures</h5>
                    <p class="mb-0 text-center">Angle sections are widely used in fabricated tower structures where L-shaped structural members are required. Applications include communication towers, transmission structures, lattice towers, tower supports and structural frameworks.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-cone-striped"></i></div>
                    <h5>Infrastructure Projects</h5>
                    <p class="mb-0 text-center">Structural angles can be used in infrastructure and civil engineering projects for supporting structures, steel frameworks, platforms, bridges and associated structures, and fabricated infrastructure components.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-tools"></i></div>
                    <h5>Engineering & Fabrication</h5>
                    <p class="mb-0 text-center">Indian Structural Angles are suitable for general engineering and fabrication requirements, including machine supports, brackets, frames, structural connections, fabricated assemblies and reinforcement structures.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-bezier2"></i></div>
                    <h5>Trusses & Bracing Systems</h5>
                    <p class="mb-0 text-center">Equal and unequal angles can be used for structural trusses, bracing and supporting members, depending on the engineering design and required section properties.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-gear"></i></div>
                    <h5>Equipment & Platform Supports</h5>
                    <p class="mb-0 text-center">Structural angles can be fabricated into supports for industrial equipment, platforms, access structures and other steel assemblies where the specified section meets the design requirements.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-nut"></i></div>
                    <h5>General Structural Applications</h5>
                    <p class="mb-0 text-center">Indian Structural Angles are also used for a variety of general structural applications where an L-shaped steel section is required for support, connection, framing or reinforcement.</p>
                </div>
            </div>
        </div>
        <p class="text-center mt-4 text-muted">The appropriate angle size, thickness and grade should always be selected according to the engineering design, loading conditions, applicable standard and project specification.</p>
    </div>
</section>

<section id="uses" class="sec-padd-top sec-padd-bottom">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Uses of Indian Structural Angles</h2>
            <p class="text-center mb-2">Indian Structural Angles are versatile steel sections used for supporting, framing, bracing, reinforcement and fabrication across construction, industrial and engineering projects.</p>
        </div>
        <div class="row g-4 mt-4">
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Used for steel structural frameworks in buildings and industrial structures.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Suitable for roof trusses and bracing systems where L-shaped structural members are required.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Used for fabricated supports, brackets and frames in construction and engineering applications.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Suitable for towers and lattice structures, including communication and other supporting frameworks.</h5>
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
                    <h5>Suitable for equipment and machinery support structures in industrial facilities.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Used for general fabrication and engineering assemblies requiring equal or unequal angle sections.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Suitable for infrastructure and civil engineering projects where structural steel angles are specified.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Used for reinforcement and structural connections according to project design requirements.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Available in equal and unequal configurations, providing flexibility for different structural applications.</h5>
                </div>
            </div>
        </div>
        <p class="text-center mt-4 text-muted">The required angle size, thickness, grade and length should be selected according to the engineering design, structural loading, applicable Indian Standard and project specifications.</p>
    </div>
</section>

<section id="advantages" class="sec-padd-top sec-padd-bottom bg-light">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold text-center" style="color:#174268;">Advantages of Indian Structural Angles</h2>
            <p class="text-center mb-2">Indian Structural Angles offer a practical and versatile solution for a wide range of structural, construction, fabrication and engineering applications. Their L-shaped profile and availability in equal and unequal configurations make them suitable for different structural requirements.</p>
        </div>
        <div class="row g-4 mt-2">
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                    <h5>High Structural Strength</h5>
                    <p class="mb-0 text-center">Suitable for structural support, framing, bracing and fabricated assemblies when selected according to the required design and specification.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-layers"></i></div>
                    <h5>Equal & Unequal Profiles</h5>
                    <p class="mb-0 text-center">Available in equal and unequal configurations to meet different structural and connection requirements.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-grid"></i></div>
                    <h5>Versatile Applications</h5>
                    <p class="mb-0 text-center">Suitable for construction, industrial structures, towers, trusses, platforms, supports and general engineering applications.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-tools"></i></div>
                    <h5>Easy Fabrication</h5>
                    <p class="mb-0 text-center">Can be processed through common fabrication operations such as cutting, drilling, welding and assembly, subject to the applicable material specification.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-arrows-expand"></i></div>
                    <h5>Wide Size Availability</h5>
                    <p class="mb-0 text-center">Structural angles can be selected in different leg dimensions and thicknesses according to the applicable standard and project requirements.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-building"></i></div>
                    <h5>Suitable for Structural Frameworks</h5>
                    <p class="mb-0 text-center">Can be used for frames, bracing members, trusses and supporting structures.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-bezier2"></i></div>
                    <h5>Flexible Design Options</h5>
                    <p class="mb-0 text-center">Equal angles provide symmetrical sections, while unequal angles offer flexibility where different leg dimensions are required.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-truck"></i></div>
                    <h5>Project-Based Supply</h5>
                    <p class="mb-0 text-center">Can be specified according to required grade, dimensions, thickness, length and quantity.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-cone-striped"></i></div>
                    <h5>Suitable for Industrial & Infrastructure Projects</h5>
                    <p class="mb-0 text-center">Commonly considered for industrial fabrication, infrastructure structures, towers and engineering projects.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-currency-dollar"></i></div>
                    <h5>Cost-Effective Structural Section</h5>
                    <p class="mb-0 text-center">The simple L-shaped profile provides an efficient option for various support, connection and fabrication requirements.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-list-ol"></i></div>
                    <h5>Multiple Length Options</h5>
                    <p class="mb-0 text-center">Standard or cut-to-length requirements can be considered depending on product availability and project specifications.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-file-earmark-text"></i></div>
                    <h5>Specification-Based Selection</h5>
                    <p class="mb-0 text-center">Material grade, dimensions and section properties can be selected according to applicable Indian Standards and engineering requirements.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="mechanical-properties" class="sec-padd-top sec-padd-bottom">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Mechanical Properties – Indian Structural Angles</h2>
        </div>
        <p class="text-center mb-4 text-muted">(Typical minimum values as per IS 2062; actual values vary with grade, quality/sub-grade and material thickness.)</p>
        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle text-center">
                <thead class="table-dark">
                    <tr>
                        <th>Standard / Grade</th>
                        <th>IS 2062 E250</th>
                        <th>IS 2062 E275</th>
                        <th>IS 2062 E350</th>
                        <th>IS 2062 E410</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>Tensile Strength (MPa), Min.</td><td>410</td><td>430</td><td>490</td><td>540</td></tr>
                    <tr><td>Yield Strength (MPa), ≤20 mm</td><td>250</td><td>275</td><td>350</td><td>410</td></tr>
                    <tr><td>Elongation (%), Min.</td><td>23</td><td>22</td><td>22</td><td>20</td></tr>
                </tbody>
            </table>
        </div>
        <p class="mt-2 text-muted text-center"><small>The underlying IS 2062 values show that yield strength is thickness-dependent—for example, E250 is 250 MPa up to 20 mm, 240 MPa for 20–40 mm and 230 MPa above 40 mm</small></p>
    </div>
</section>

<section id="why-choose-us" class="sec-padd-top sec-padd-bottom bg-light">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Why Choose Moksh Tubes & Fittings LLP?</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-center mb-4">Moksh Tubes & Fittings LLP supports customers looking for Indian Structural Angles for construction, fabrication, infrastructure and industrial requirements. Our approach is focused on supplying structural steel products according to the customer's required dimensions, grades, lengths, quantities and project specifications.</p>
                <div class="row g-4 mt-4">
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-box-seam"></i></div>
                            <h5>Project-Based Sourcing</h5>
                            <p class="mb-0">Support for structural angle requirements based on specific project specifications and technical requirements.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-boxes"></i></div>
                            <h5>Wide Product Range</h5>
                            <p class="mb-0">Equal and unequal structural angle requirements can be considered according to size, grade and application.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                            <h5>Bulk Supply Capability</h5>
                            <p class="mb-0">Suitable for contractors, fabricators, EPC companies and industrial buyers requiring larger quantities.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-file-earmark-ruled"></i></div>
                            <h5>Specification-Based Supply</h5>
                            <p class="mb-0">Product requirements can be aligned with the applicable Indian Standard and customer specifications.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-headset"></i></div>
                            <h5>Technical Support</h5>
                            <p class="mb-0">Assistance in understanding product dimensions, grades and specifications for procurement requirements.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-calendar-check"></i></div>
                            <h5>Reliable Supply Coordination</h5>
                            <p class="mb-0">Focused coordination for order processing, material availability and delivery requirements.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-shield-check"></i></div>
                            <h5>Quality-Focused Approach</h5>
                            <p class="mb-0">Structural steel requirements are handled according to agreed product specifications and documentation requirements.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-globe"></i></div>
                            <h5>Domestic & International Enquiries</h5>
                            <p class="mb-0">Support for customers sourcing structural steel products for Indian and international projects.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-sliders"></i></div>
                            <h5>Custom Requirements</h5>
                            <p class="mb-0">Specific dimensions, lengths, grades and quantities can be discussed according to project requirements.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-building"></i></div>
                            <h5>Experienced Steel Product Supplier</h5>
                            <p class="mb-0">Moksh Tubes & Fittings LLP serves customers requiring steel products for industrial, engineering, construction and infrastructure applications.</p>
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
            <h2 class="fw-bold" style="color: #174268;">FAQ – Indian Structural Angles</h2>
        </div>
        <div class="row mt-4">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="accordion-box">
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What are Indian Structural Angles?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Indian Structural Angles are L-shaped structural steel sections used for construction, structural fabrication, infrastructure, industrial frameworks, supports, trusses, towers and general engineering applications.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What types of Indian Structural Angles are available?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Indian Structural Angles are primarily available in Equal Angles and Unequal Angles. Equal angles have two legs of the same width, while unequal angles have different leg widths.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What are Equal Structural Angles used for?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Equal Structural Angles are commonly used for structural frameworks, bracing, trusses, supports, brackets, towers and general fabrication applications.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What are Unequal Structural Angles used for?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Unequal Structural Angles are used where different leg dimensions are required for structural connections, supports, fabrication or specific engineering requirements.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Which standards are applicable to Indian Structural Angles?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Structural angles can be supplied according to the applicable Indian Standard or project specification. The required standard should be confirmed based on the product, grade and application.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Which grades are available for Indian Structural Angles?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Grades such as IS 2062, E250 and E350 may be considered according to the applicable specification and product availability. Exact grade availability should be confirmed at the time of enquiry.</p>
                        </div>
                    </div>

                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What sizes of Indian Structural Angles are available?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Structural angles are available in different leg dimensions and thicknesses. The actual available sizes depend on the applicable standard and Moksh Tubes & Fittings LLP's current product range.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Can Indian Structural Angles be supplied in custom lengths?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Standard and cut-to-length requirements can be considered depending on product availability and customer specifications.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Where are Indian Structural Angles commonly used?</h4>
                        </div>
                        <div class="accord-content">
                            <p>They are used in construction, industrial structures, steel frameworks, towers, trusses, platforms, supports, infrastructure and general engineering applications.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Can Moksh Tubes & Fittings LLP supply Indian Structural Angles in bulk?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Yes. Moksh Tubes & Fittings LLP can support bulk and project-based requirements, subject to product availability and agreed specifications.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What information should I provide when requesting a quotation?</h4>
                        </div>
                        <div class="accord-content">
                            <p>For an accurate quotation, provide the angle type, leg dimensions, thickness, material grade, required length, quantity and applicable standard. Project drawings or technical specifications can also be provided where applicable.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Does Moksh Tubes & Fittings LLP support international enquiries?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Yes. International and export enquiries for Indian Structural Angles can be discussed based on the required product specifications, quantity and delivery requirements.</p>
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
            <p class="fs-5 mt-3">Looking for Indian Structural Angles for your construction, fabrication, infrastructure or industrial project?</p>
            <p class="mb-4 text-light">
                Contact <strong>Moksh Tubes & Fittings LLP</strong> for structural angle requirements based on your required angle type, dimensions, thickness, grade, length and quantity.<br>
                Share your project specifications, drawings or material requirements with our team to discuss the suitable Indian Structural Angles for your application.
            </p>
            <a href="{{ route('contact-us') ?? '#' }}" class="btn btn-lg text-white shadow"
                style="background-color:#db7227; border-radius:8px; padding: 12px 30px;">Contact Us Now</a>
            <p class="mt-4 mb-0 text-light opacity-75">📞 Contact Moksh Tubes & Fittings LLP at +91 97695 84950 for product availability, technical specifications and quotation enquiries.</p>
        </div>
    </div>
</section>

@endsection
