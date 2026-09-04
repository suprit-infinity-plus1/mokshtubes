@extends('layouts.master')
@section('title', 'Indian Structural Channels | IS Steel Channel Supplier')
@section('meta_description', 'Indian Structural Channels for construction, fabrication, infrastructure and industrial applications. Equal and standard channel sections available from Moksh Tubes & Fittings LLP.')
@section('canonical', url()->current())
@section('og_type', 'product')
@section('og_title', 'Indian Structural Channels | IS Steel Channel Supplier')
@section('og_description', 'Indian Structural Channels for construction, fabrication, infrastructure and industrial applications. Equal and standard channel sections available from Moksh Tubes & Fittings LLP.')
@section('twitter_title', 'Indian Structural Channels | IS Steel Channel Supplier')
@section('twitter_description', 'Indian Structural Channels for construction, fabrication, infrastructure and industrial applications. Equal and standard channel sections available from Moksh Tubes & Fittings LLP.')

@section('content')
<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image: url({{ asset('assets/images/product/default-bg.jpg') }});">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto text-center">
                <h1 class="page-title">Indian Structural Channels – IS Standard Steel Channels</h1>
                <p class="text-center mt-3 px-3 py-2 text-white position-relative" style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                    Indian Structural Channels are U-shaped or C-shaped structural steel sections widely used in construction, industrial fabrication, infrastructure, engineering structures, supports and general structural applications. Their channel profile provides practical strength and support for frameworks, platforms, bracing systems, equipment supports and fabricated steel structures.
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
            <h2 class="fw-bold" style="color: #174268;">Indian Structural Channels</h2>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="https://placehold.co/550x350" alt="Indian Structural Channels" class="img-fluid rounded shadow-sm" loading="lazy">
            </div>
            <div class="col-md-6">
                <p class="fs-6 mb-3 text-justify"><strong>Indian Structural Channels</strong> are structural steel sections featuring a channel-shaped profile that is commonly used for supporting and framing applications. Their geometry makes them suitable for applications where a combination of structural strength, rigidity and convenient fabrication is required.</p>
                <p class="fs-6 mb-3 text-justify">Structural channels are used across construction, industrial structures, steel fabrication, infrastructure projects, platforms, supports, frames, machinery structures and engineering applications. Depending on the design requirement, the appropriate channel size and thickness can be selected to provide the required structural performance.</p>
                <p class="fs-6 mb-3 text-justify">Indian Structural Channels can be supplied according to the applicable Indian Standard and project specification. Customers can specify the required section dimensions, thickness, material grade, length and quantity when submitting an enquiry.</p>
                <p class="fs-6 mb-3 text-justify">At <a href="https://mokshtubes.com" class="text-white text-decoration-underline" target="_blank">Moksh Tubes & Fittings LLP</a>, we support structural channel requirements for contractors, fabricators, engineering companies, industrial buyers and project-based customers. Product requirements can be evaluated according to the customer's technical specifications and application.</p>
                <p class="fs-6 mb-3 text-justify">Structural channels can also be combined with other structural steel sections such as angles, beams, columns and hollow sections to create complete fabricated steel structures.</p>
                <p class="fs-6 mb-3 text-justify">For an accurate quotation, customers can provide their required channel size, thickness, grade, length, quantity and applicable specification, along with project drawings or technical documentation where required.</p>
            </div>
        </div>
    </div>
</section>

<!-- Datasheet Download -->
<section class="sec-padd-bottom bg-light">
    <div class="datasheet-download px-4 text-center">
        <h3 class="mb-3" style="color:#174268;">Download Indian Structural Channels Datasheet</h3>
        <p class="mb-3">
            Get the complete Indian Structural Channels datasheet with chemical composition,
            mechanical properties, heat treatment details, and applications.
            Enter your email to receive the PDF instantly.
        </p>

        <!-- Lead Capture Form -->
        <form id="leadForm" method="POST" action="{{ route('lead.capture') }}" class="mb-3">
            @csrf
            <input type="hidden" name="page_path" value="{{ $slug ?? 'indian-structural-channels' }}">
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
            <p class="text-center">Indian Structural Channels are available in different section dimensions, thicknesses, lengths and structural steel grades according to applicable Indian Standards and project requirements. The required channel section is selected based on structural design, loading conditions, connection requirements and intended application.</p>
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
                    <tr><td>Product</td><td>Indian Structural Channels</td></tr>
                    <tr><td>Profile</td><td>Channel / C-Shaped Structural Section</td></tr>
                    <tr><td>Material</td><td>Structural Steel / Carbon Steel</td></tr>
                    <tr><td>Types</td><td>Structural Channels as per applicable IS sections</td></tr>
                    <tr><td>Standards</td><td>Applicable Indian Standards / Project Specifications</td></tr>
                    <tr><td>Grades</td><td>As per applicable material specification</td></tr>
                    <tr><td>Section Dimensions</td><td>Various standard sizes</td></tr>
                    <tr><td>Thickness</td><td>As per selected channel section</td></tr>
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
                    <h4 class="mb-3 text-center" style="color: #db7227;">Channel Section Dimensions</h4>
                    <p class="mb-0 text-justify">Indian Structural Channels are identified according to their section dimensions, depth, flange dimensions and thickness. The appropriate section is selected according to the structural and engineering requirements of the project.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Length Availability</h4>
                    <p class="mb-0 text-justify">Structural channels can be supplied in standard lengths or cut-to-length requirements, depending on product availability and customer specifications.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Material & Grade</h4>
                    <p class="mb-0 text-justify">The material grade of the channel is selected according to the applicable Indian Standard and project specification. Customers can specify the required grade along with the channel dimensions and thickness.</p>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-4">
            <div class="col-md-12">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Supply Requirements</h4>
                    <p class="mb-2">For an accurate quotation, customers should provide:</p>
                    <ul class="list-unstyled mb-3 d-flex flex-wrap">
                        <li class="me-4 mb-2"><i class="bi bi-check2 text-success me-2"></i>Channel size</li>
                        <li class="me-4 mb-2"><i class="bi bi-check2 text-success me-2"></i>Section dimensions</li>
                        <li class="me-4 mb-2"><i class="bi bi-check2 text-success me-2"></i>Thickness</li>
                        <li class="me-4 mb-2"><i class="bi bi-check2 text-success me-2"></i>Material grade</li>
                        <li class="me-4 mb-2"><i class="bi bi-check2 text-success me-2"></i>Required length</li>
                        <li class="me-4 mb-2"><i class="bi bi-check2 text-success me-2"></i>Quantity</li>
                        <li class="me-4 mb-2"><i class="bi bi-check2 text-success me-2"></i>Applicable standard</li>
                        <li class="me-4 mb-2"><i class="bi bi-check2 text-success me-2"></i>Project specification</li>
                    </ul>
                    <p class="mb-0 text-justify">Moksh Tubes & Fittings LLP can support standard and project-based requirements for Indian Structural Channels, subject to product availability and agreed specifications.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="size-chart" class="sec-padd-top sec-padd-bottom bg-light">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Size & Weight Chart</h2>
            <p class="text-center">The standard classifies Indian channels into ISJC (Junior), ISLC (Light), ISMC (Medium), and ISMPC (Medium Weight Parallel Flange Channels).</p>
        </div>
        
        <h4 class="fw-bold mt-4 mb-3" style="color:#db7227;">ISJC – Indian Standard Junior Channels</h4>
        <div class="table-responsive mb-5">
            <table class="table table-bordered table-striped text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Section</th>
                        <th>Depth (mm)</th>
                        <th>Flange Width (mm)</th>
                        <th>Web Thickness (mm)</th>
                        <th>Flange Thickness (mm)</th>
                        <th>Weight (kg/m)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>ISJC 100</td><td>100</td><td>45</td><td>3.0</td><td>5.1</td><td>5.80</td></tr>
                    <tr><td>ISJC 125</td><td>125</td><td>50</td><td>3.0</td><td>6.6</td><td>7.90</td></tr>
                    <tr><td>ISJC 150</td><td>150</td><td>55</td><td>3.6</td><td>6.9</td><td>9.90</td></tr>
                    <tr><td>ISJC 175</td><td>175</td><td>60</td><td>3.6</td><td>6.9</td><td>11.20</td></tr>
                    <tr><td>ISJC 200</td><td>200</td><td>70</td><td>4.1</td><td>7.1</td><td>14.00</td></tr>
                </tbody>
            </table>
        </div>
        <p class="text-center mt-3 text-muted">The ISJC series is listed in IS 808:2021 under junior channels.</p>

        <h4 class="fw-bold mt-5 mb-3" style="color:#db7227;">ISLC – Indian Standard Light Weight Channels</h4>
        <div class="table-responsive mb-5">
            <table class="table table-bordered table-striped text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Section</th>
                        <th>Depth (mm)</th>
                        <th>Flange Width (mm)</th>
                        <th>Web Thickness (mm)</th>
                        <th>Flange Thickness (mm)</th>
                        <th>Weight (kg/m)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>ISLC 75</td><td>75</td><td>40</td><td>3.7</td><td>6.0</td><td>5.70</td></tr>
                    <tr><td>ISLC 100</td><td>100</td><td>50</td><td>4.0</td><td>6.4</td><td>7.90</td></tr>
                    <tr><td>ISLC 125</td><td>125</td><td>65</td><td>4.4</td><td>6.6</td><td>10.70</td></tr>
                    <tr><td>ISLC 150</td><td>150</td><td>75</td><td>4.8</td><td>7.8</td><td>14.40</td></tr>
                    <tr><td>ISLC 175</td><td>175</td><td>75</td><td>5.1</td><td>9.5</td><td>17.60</td></tr>
                    <tr><td>ISLC 200</td><td>200</td><td>75</td><td>5.5</td><td>10.8</td><td>20.60</td></tr>
                    <tr><td>ISLC 225</td><td>225</td><td>90</td><td>5.8</td><td>10.2</td><td>24.00</td></tr>
                    <tr><td>ISLC 250</td><td>250</td><td>100</td><td>6.1</td><td>10.7</td><td>28.00</td></tr>
                    <tr><td>ISLC 300</td><td>300</td><td>100</td><td>6.7</td><td>11.6</td><td>33.10</td></tr>
                    <tr><td>ISLC 350</td><td>350</td><td>100</td><td>7.4</td><td>12.5</td><td>38.90</td></tr>
                    <tr><td>ISLC 400</td><td>400</td><td>100</td><td>8.0</td><td>14.0</td><td>45.80</td></tr>
                </tbody>
            </table>
        </div>
        <p class="text-center mt-3 text-muted">These dimensions and masses correspond to the light-channel series in the IS 808:2021 table; the standard also identifies some provisional variants separately.</p>

        <h4 class="fw-bold mt-5 mb-3" style="color:#db7227;">ISMC – Indian Standard Medium Weight Channels</h4>
        <div class="table-responsive mb-5">
            <table class="table table-bordered table-striped text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Section</th>
                        <th>Depth (mm)</th>
                        <th>Flange Width (mm)</th>
                        <th>Web Thickness (mm)</th>
                        <th>Flange Thickness (mm)</th>
                        <th>Weight (kg/m)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>ISMC 75</td><td>75</td><td>40</td><td>4.8</td><td>7.5</td><td>7.14</td></tr>
                    <tr><td>ISMC 100</td><td>100</td><td>50</td><td>5.0</td><td>7.7</td><td>9.56</td></tr>
                    <tr><td>ISMC 125</td><td>125</td><td>65</td><td>5.3</td><td>8.2</td><td>13.10</td></tr>
                    <tr><td>ISMC 125*</td><td>125</td><td>66</td><td>6.0</td><td>8.1</td><td>13.70</td></tr>
                    <tr><td>ISMC 150</td><td>150</td><td>75</td><td>5.7</td><td>9.0</td><td>16.80</td></tr>
                    <tr><td>ISMC 150*</td><td>150</td><td>76</td><td>6.5</td><td>9.0</td><td>17.70</td></tr>
                    <tr><td>ISMC 175</td><td>175</td><td>75</td><td>6.0</td><td>10.2</td><td>19.60</td></tr>
                    <tr><td>ISMC 175*</td><td>175</td><td>76</td><td>7.5</td><td>10.2</td><td>22.70</td></tr>
                    <tr><td>ISMC 200</td><td>200</td><td>75</td><td>6.2</td><td>11.4</td><td>22.30</td></tr>
                    <tr><td>ISMC 200*</td><td>200</td><td>76</td><td>7.5</td><td>11.4</td><td>24.30</td></tr>
                    <tr><td>ISMC 225</td><td>225</td><td>80</td><td>6.5</td><td>12.4</td><td>26.10</td></tr>
                    <tr><td>ISMC 225*</td><td>225</td><td>82</td><td>9.0</td><td>12.4</td><td>30.70</td></tr>
                    <tr><td>ISMC 250</td><td>250</td><td>80</td><td>7.2</td><td>14.1</td><td>30.60</td></tr>
                    <tr><td>ISMC 250*</td><td>250</td><td>82</td><td>9.0</td><td>14.1</td><td>36.30</td></tr>
                    <tr><td>ISMC 300</td><td>300</td><td>90</td><td>7.6</td><td>13.6</td><td>36.30</td></tr>
                    <tr><td>ISMC 300*</td><td>300</td><td>92</td><td>10.0</td><td>13.6</td><td>41.50</td></tr>
                    <tr><td>ISMC 300*</td><td>300</td><td>94</td><td>12.0</td><td>13.6</td><td>46.20</td></tr>
                    <tr><td>ISMC 350</td><td>350</td><td>100</td><td>8.3</td><td>13.5</td><td>42.70</td></tr>
                    <tr><td>ISMC 400</td><td>400</td><td>100</td><td>8.8</td><td>15.3</td><td>50.10</td></tr>
                </tbody>
            </table>
        </div>

        <h4 class="fw-bold mt-5 mb-3" style="color:#db7227;">ISMPC – Indian Standard Medium Weight Parallel Flange Channels</h4>
        <div class="table-responsive mb-4">
            <table class="table table-bordered table-striped text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Section</th>
                        <th>Depth (mm)</th>
                        <th>Flange Width (mm)</th>
                        <th>Web Thickness (mm)</th>
                        <th>Flange Thickness (mm)</th>
                        <th>Weight (kg/m)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>ISMPC 75</td><td>75</td><td>40</td><td>4.8</td><td>7.5</td><td>7.14</td></tr>
                    <tr><td>ISMPC 100</td><td>100</td><td>50</td><td>5.0</td><td>7.7</td><td>9.56</td></tr>
                    <tr><td>ISMPC 125</td><td>125</td><td>65</td><td>5.5</td><td>8.1</td><td>13.10</td></tr>
                    <tr><td>ISMPC 125*</td><td>125</td><td>66</td><td>6.0</td><td>8.1</td><td>13.70</td></tr>
                    <tr><td>ISMPC 150</td><td>150</td><td>75</td><td>5.7</td><td>9.0</td><td>16.80</td></tr>
                    <tr><td>ISMPC 150*</td><td>150</td><td>76</td><td>6.5</td><td>9.0</td><td>17.70</td></tr>
                    <tr><td>ISMPC 175</td><td>175</td><td>75</td><td>6.0</td><td>10.2</td><td>19.60</td></tr>
                    <tr><td>ISMPC 175*</td><td>175</td><td>77</td><td>7.5</td><td>10.2</td><td>21.70</td></tr>
                    <tr><td>ISMPC 200</td><td>200</td><td>75</td><td>6.2</td><td>11.4</td><td>22.30</td></tr>
                    <tr><td>ISMPC 200*</td><td>200</td><td>76</td><td>7.5</td><td>11.4</td><td>24.30</td></tr>
                    <tr><td>ISMPC 225</td><td>225</td><td>80</td><td>6.5</td><td>12.4</td><td>26.10</td></tr>
                    <tr><td>ISMPC 225*</td><td>225</td><td>83</td><td>9.0</td><td>12.4</td><td>30.70</td></tr>
                </tbody>
            </table>
        </div>
        <p class="text-center mt-3 text-muted">For the parallel-flange series, IS 808:2021 uses the designation MPC in its section tables; the classification identifies this family as ISMPC.</p>
    </div>
</section>

<section id="grades" class="sec-padd-top sec-padd-bottom">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Grades Available</h2>
            <p class="text-center pb-3">Indian Structural Channels can be supplied in different structural steel grades according to the applicable Indian Standard and project requirements. The required grade is selected based on the intended structural application, required mechanical properties, design requirements and fabrication needs.</p>
        </div>
        <p class="text-center mb-4">At Moksh Tubes & Fittings LLP, Structural Channels can be sourced according to the customer's specified grade, dimensions, thickness, length and applicable standard, subject to product availability.</p>
        
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
                    <p class="mb-0 text-justify">IS 2062 is an Indian specification for structural steel products used in construction, engineering and fabrication applications. The applicable grade and quality should be selected according to the requirements of the project and relevant product specification.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 shadow-sm h-100 border-0 bg-light">
                    <h4 class="mb-3 text-center" style="color: #db7227;">E250 Grade</h4>
                    <p class="mb-0 text-justify">E250 structural steel can be used for general structural applications where the specified mechanical properties meet the requirements of the design. It may be considered for frameworks, supports, fabrication and engineering structures.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 shadow-sm h-100 border-0 bg-light">
                    <h4 class="mb-3 text-center" style="color: #db7227;">E350 Grade</h4>
                    <p class="mb-0 text-justify">E350 structural steel provides a higher specified strength level and can be considered for applications where increased strength is required, subject to the applicable specification and engineering design.</p>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-4">
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100 border-0 bg-white shadow-sm border border-secondary border-opacity-25 rounded-3">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Grade Selection</h4>
                    <p class="mb-2">The appropriate grade for an Indian Structural Channel should be selected based on:</p>
                    <div class="row">
                        <div class="col-6">
                            <ul class="list-unstyled mb-0">
                                <li><i class="bi bi-check-circle text-success me-2"></i>Required mechanical properties</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Structural loading</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Section dimensions</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Design requirements</li>
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
                    <p class="mt-3 mb-0 text-justify">Customers should specify the required grade, standard, channel size, thickness, length and quantity when submitting an enquiry.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100 border-0 bg-white shadow-sm border border-secondary border-opacity-25 rounded-3">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Material Documentation</h4>
                    <p class="mb-3 text-justify">Where required and agreed at the time of order, applicable material test certificates and supporting documentation can be provided according to the purchase order and project requirements.</p>
                    <div class="alert alert-warning mb-0 border-0 shadow-sm" role="alert">
                        <strong>Note:</strong> Exact grade availability should be confirmed with Moksh Tubes & Fittings LLP before ordering, as availability may vary according to section size, specification and project requirements.
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
            <p class="text-center pb-3">Indian Structural Channels are widely used in construction, industrial fabrication, infrastructure and engineering projects where channel-shaped structural sections are required for support, framing, reinforcement and structural assemblies.</p>
        </div>
        <div class="row g-4 mt-4">
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-building"></i></div>
                    <h5>Building & Construction</h5>
                    <p class="mb-0 text-center">Structural channels are commonly used in building construction and steel structures for steel frames and supporting members, roof and structural frameworks, bracing arrangements, support structures, and fabricated building components.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-industry"></i></div>
                    <h5>Industrial Structures</h5>
                    <p class="mb-0 text-center">Indian Structural Channels are suitable for industrial applications requiring reliable steel support sections. Common applications include industrial sheds, equipment support structures, platforms, walkways, structural frames, and industrial support assemblies.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-gear"></i></div>
                    <h5>Machinery & Equipment Supports</h5>
                    <p class="mb-0 text-center">Structural channels can be fabricated into support structures for machinery and industrial equipment. Applications include machine bases, equipment frames, support structures, mounting assemblies, and industrial platforms.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-cone-striped"></i></div>
                    <h5>Infrastructure Projects</h5>
                    <p class="mb-0 text-center">Indian Structural Channels can be used in infrastructure and civil engineering applications where channel sections are specified. These include structural frameworks, supporting structures, platforms, fabricated infrastructure components, and engineering structures.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-tools"></i></div>
                    <h5>Steel Fabrication</h5>
                    <p class="mb-0 text-center">The channel profile makes these sections suitable for various fabrication requirements, including frames, brackets, supports, base structures, fabricated assemblies, and structural connections.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-layout-wtf"></i></div>
                    <h5>Platforms & Walkways</h5>
                    <p class="mb-0 text-center">Structural channels can be incorporated into industrial platforms, access structures, walkways and supporting frameworks, depending on the project design and required section properties.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-nut"></i></div>
                    <h5>General Engineering</h5>
                    <p class="mb-0 text-center">Indian Structural Channels are also used in general engineering applications where a rigid channel-shaped steel section is required for support, framing or fabrication.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-bezier2"></i></div>
                    <h5>Structural Supports & Frameworks</h5>
                    <p class="mb-0 text-center">Channel sections can be used as supporting members in structural assemblies where the selected section meets the required loading, dimensional and engineering specifications.</p>
                </div>
            </div>
        </div>
        <p class="text-center mt-4 text-muted">The appropriate channel size, thickness and material grade should always be selected according to the engineering design, structural loading, applicable standard and project requirements.</p>
    </div>
</section>

<section id="uses" class="sec-padd-top sec-padd-bottom">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Uses of Indian Structural Channels</h2>
            <p class="text-center mb-2">Indian Structural Channels are versatile steel sections used for structural support, framing, reinforcement and fabrication across construction, industrial, infrastructure and engineering projects.</p>
        </div>
        <div class="row g-4 mt-4">
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Used for steel structural frameworks in buildings, industrial structures and fabricated assemblies.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Suitable for supporting members and structural frames where channel sections are specified.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Used for industrial platforms, walkways and access structures.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Suitable for machinery and equipment support structures, including machine bases and equipment frames.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Used for industrial sheds and structural support systems.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Suitable for fabricated brackets, frames, supports and base structures.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Used in infrastructure and civil engineering projects requiring structural channel sections.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Suitable for general engineering applications where a rigid channel-shaped steel section is required.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Used for structural connections and fabricated assemblies according to project design requirements.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Can be combined with structural angles, beams, columns and hollow sections to create complete steel frameworks.</h5>
                </div>
            </div>
        </div>
        <p class="text-center mt-4 text-muted">The appropriate channel size, thickness and grade should be selected according to the structural design, loading conditions, applicable Indian Standard and project specifications.</p>
    </div>
</section>

<section id="advantages" class="sec-padd-top sec-padd-bottom bg-light">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold text-center" style="color:#174268;">Advantages of Indian Structural Channels</h2>
            <p class="text-center mb-2">Indian Structural Channels provide a practical structural steel solution for construction, industrial fabrication, infrastructure and engineering applications. Their channel-shaped profile offers useful structural support and flexibility for different fabricated assemblies.</p>
        </div>
        <div class="row g-4 mt-2">
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                    <h5>Structural Strength</h5>
                    <p class="mb-0 text-center">Suitable for supporting and framing applications when the appropriate section is selected according to the engineering design.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-layers"></i></div>
                    <h5>Rigid Channel Profile</h5>
                    <p class="mb-0 text-center">The channel-shaped configuration provides a practical section for structural frameworks, supports and fabricated assemblies.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-grid"></i></div>
                    <h5>Versatile Applications</h5>
                    <p class="mb-0 text-center">Suitable for construction, industrial structures, platforms, machinery supports, infrastructure and general engineering.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-tools"></i></div>
                    <h5>Easy Fabrication</h5>
                    <p class="mb-0 text-center">Structural channels can be processed through common fabrication operations such as cutting, drilling, welding and assembly, subject to the applicable specification.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-arrows-expand"></i></div>
                    <h5>Different Section Sizes</h5>
                    <p class="mb-0 text-center">Available in various section dimensions and thicknesses according to the applicable Indian Standard and project requirements.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-building"></i></div>
                    <h5>Suitable for Heavy Structures</h5>
                    <p class="mb-0 text-center">Appropriate channel sections can be selected for structural supports and frameworks where the required section properties are specified.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-bezier2"></i></div>
                    <h5>Flexible Design</h5>
                    <p class="mb-0 text-center">Can be incorporated with other structural sections such as angles, beams, columns and hollow sections.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-truck"></i></div>
                    <h5>Project-Based Supply</h5>
                    <p class="mb-0 text-center">Requirements can be specified according to grade, dimensions, thickness, length and quantity.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-layout-wtf"></i></div>
                    <h5>Multiple Application Areas</h5>
                    <p class="mb-0 text-center">Used across building construction, industrial fabrication, infrastructure, machinery support and engineering projects.</p>
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
                    <div class="advantage-icon"><i class="bi bi-file-earmark-text"></i></div>
                    <h5>Specification-Based Selection</h5>
                    <p class="mb-0 text-center">Section size, thickness and grade can be selected according to the applicable Indian Standard and project specifications.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="mechanical-properties" class="sec-padd-top sec-padd-bottom">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Mechanical Properties – Indian Structural Channels</h2>
        </div>
        <p class="text-center mb-4 text-muted">(Typical minimum values as per IS 2062; actual values depend on grade, quality/sub-grade and material thickness.)</p>
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
        <p class="mt-2 text-muted text-center"><small>IS 808:2021 covers Indian hot-rolled channel sections including ISJC (Junior Channels), ISLC (Light Weight Channels), ISMC (Medium Weight Channels), and ISMPC (Medium Weight Parallel Flange Channels).</small></p>
    </div>
</section>

<section id="why-choose-us" class="sec-padd-top sec-padd-bottom bg-light">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Why Choose Moksh Tubes & Fittings LLP?</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-center mb-4">Moksh Tubes & Fittings LLP supports customers looking for Indian Structural Channels for construction, fabrication, infrastructure, industrial and engineering requirements. Our supply approach is based on the customer's required dimensions, grade, thickness, length, quantity and applicable specifications.</p>
                <div class="row g-4 mt-4">
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-box-seam"></i></div>
                            <h5>Project-Based Sourcing</h5>
                            <p class="mb-0">Structural channels can be sourced according to specific project requirements and technical specifications.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-boxes"></i></div>
                            <h5>Wide Product Range</h5>
                            <p class="mb-0">Channel requirements can be considered in different section sizes, thicknesses and grades according to availability and specification.</p>
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
                            <p class="mb-0">Assistance with product dimensions, grades, specifications and procurement requirements.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-calendar-check"></i></div>
                            <h5>Reliable Supply Coordination</h5>
                            <p class="mb-0">Focus on order coordination, product availability and delivery requirements.</p>
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
                            <p class="mb-0">Specific channel dimensions, thicknesses, grades, lengths and quantities can be discussed for project requirements.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-building"></i></div>
                            <h5>Industrial & Engineering Applications</h5>
                            <p class="mb-0">Suitable for customers sourcing structural steel channels for construction, fabrication, infrastructure and industrial projects.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-globe"></i></div>
                            <h5>Domestic & International Enquiries</h5>
                            <p class="mb-0">Support for customers requiring Indian Structural Channels for domestic and international project requirements.</p>
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
            <h2 class="fw-bold" style="color: #174268;">FAQ – Indian Structural Channels</h2>
        </div>
        <div class="row mt-4">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="accordion-box">
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What are Indian Structural Channels?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Indian Structural Channels are channel-shaped structural steel sections used for construction, structural fabrication, industrial frameworks, infrastructure, supports, platforms and general engineering applications.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What are Structural Channels used for?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Structural Channels are commonly used for steel frameworks, supports, platforms, walkways, machinery structures, industrial sheds, fabrication and engineering assemblies.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What is the profile of a Structural Channel?</h4>
                        </div>
                        <div class="accord-content">
                            <p>A Structural Channel generally has a channel or C-shaped profile, consisting of a web and flanges that provide structural support and rigidity.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Which standards are applicable to Indian Structural Channels?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Structural Channels can be supplied according to the applicable Indian Standard or project specification. The exact standard should be confirmed according to the required section and application.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Which grades are available for Indian Structural Channels?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Grades such as IS 2062, E250 and E350 may be considered according to the applicable specification and product availability. Exact grade availability should be confirmed at the time of enquiry.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What sizes of Indian Structural Channels are available?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Structural Channels are available in different section depths, flange dimensions and thicknesses. Actual size availability depends on the applicable standard and Moksh Tubes & Fittings LLP's current product range.</p>
                        </div>
                    </div>

                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Can Structural Channels be supplied in custom lengths?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Yes, standard and cut-to-length requirements can be considered depending on product availability and customer specifications.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Where are Indian Structural Channels commonly used?</h4>
                        </div>
                        <div class="accord-content">
                            <p>They are used in construction, industrial structures, machinery supports, platforms, infrastructure, steel fabrication and general engineering applications.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Can Moksh Tubes & Fittings LLP supply Structural Channels in bulk?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Yes. Moksh Tubes & Fittings LLP can support bulk and project-based requirements, subject to product availability and agreed specifications.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What information is required to request a quotation?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Customers should provide the channel size, section dimensions, thickness, material grade, required length, quantity and applicable standard. Project drawings or technical specifications can also be provided where applicable.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Can Indian Structural Channels be used with other structural steel sections?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Yes. Structural Channels can be incorporated with angles, beams, columns and hollow sections in fabricated structural assemblies according to the engineering design.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Does Moksh Tubes & Fittings LLP support international enquiries?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Yes. International enquiries for Indian Structural Channels can be discussed based on the required product specification, quantity and delivery requirements.</p>
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
            <p class="fs-5 mt-3">Looking for Indian Structural Channels for your construction, fabrication, infrastructure or industrial project?</p>
            <p class="mb-4 text-light">
                Contact <strong>Moksh Tubes & Fittings LLP</strong> for Structural Channel requirements based on your required channel size, section dimensions, thickness, grade, length and quantity.<br>
                Share your project specifications, drawings or material requirements with our team to discuss the suitable Indian Structural Channels for your application.
            </p>
            <a href="{{ route('contact-us') ?? '#' }}" class="btn btn-lg text-white shadow"
                style="background-color:#db7227; border-radius:8px; padding: 12px 30px;">Contact Us Now</a>
            <p class="mt-4 mb-0 text-light opacity-75">📞 Contact Moksh Tubes & Fittings LLP at <a href="tel:+919769584950" class="text-light fw-bold text-decoration-none">+91 97695 84950</a> for product availability, technical specifications and quotation enquiries.</p>
        </div>
    </div>
</section>

@endsection
