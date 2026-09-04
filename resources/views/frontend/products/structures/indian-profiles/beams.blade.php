@extends('layouts.master')
@section('title', 'Indian Structural Beams | IS Standard Steel Beam Supplier')
@section('meta_description', 'Indian Structural Beams for construction, industrial, infrastructure and fabrication applications. Source structural steel beams from Moksh Tubes & Fittings LLP.')
@section('canonical', url()->current())
@section('og_type', 'product')
@section('og_title', 'Indian Structural Beams | IS Standard Steel Beam Supplier')
@section('og_description', 'Indian Structural Beams for construction, industrial, infrastructure and fabrication applications. Source structural steel beams from Moksh Tubes & Fittings LLP.')
@section('twitter_title', 'Indian Structural Beams | IS Standard Steel Beam Supplier')
@section('twitter_description', 'Indian Structural Beams for construction, industrial, infrastructure and fabrication applications. Source structural steel beams from Moksh Tubes & Fittings LLP.')

@section('content')
<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image: url({{ asset('assets/images/product/default-bg.jpg') }});">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto text-center">
                <h1 class="page-title">Indian Structural Beams – IS Standard I Beams & Structural Steel Beams</h1>
                <p class="text-center mt-3 px-3 py-2 text-white position-relative" style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                    Indian Structural Beams are heavy-duty structural steel sections widely used in construction, industrial structures, infrastructure, fabrication, bridges, warehouses and engineering projects. Their beam profiles are designed to provide structural support and load-bearing capability in a wide range of steel structures.
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
            <h2 class="fw-bold" style="color: #174268;">Indian Structural Beams</h2>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="https://placehold.co/550x350" alt="Indian Structural Beams" class="img-fluid rounded shadow-sm" loading="lazy">
            </div>
            <div class="col-md-6">
                <p class="fs-6 mb-3 text-justify"><strong>Indian Structural Beams</strong> are structural steel sections used primarily as load-bearing members in buildings, industrial structures, infrastructure and engineering applications. Their engineered cross-sectional profile provides strength and rigidity for supporting loads across structural frameworks.</p>
                <p class="fs-6 mb-3 text-justify">Structural beams are used in applications where reliable load distribution, structural support and stability are required. They can form an important part of steel buildings, industrial sheds, warehouses, platforms, bridges and other fabricated structures.</p>
                <p class="fs-6 mb-3 text-justify">Depending on the design and project requirements, different beam sections can be selected according to their section dimensions, weight, material grade, span, loading conditions and applicable Indian Standard.</p>
                <p class="fs-6 mb-3 text-justify">At <a href="https://mokshtubes.com" class="text-white text-decoration-underline" target="_blank">Moksh Tubes & Fittings LLP</a>, we support requirements for Indian Structural Beams for construction, fabrication, industrial and infrastructure projects. Customers can specify their required beam section, dimensions, grade, length and quantity for project-based procurement.</p>
                <p class="fs-6 mb-3 text-justify">Indian Structural Beams can also be used together with structural angles, channels, columns and hollow sections to create complete steel frameworks and fabricated structural assemblies.</p>
                <p class="fs-6 mb-3 text-justify">For an accurate quotation, customers can provide their required beam size, section specification, material grade, length, quantity and applicable standard, along with project drawings or technical specifications where required.</p>
            </div>
        </div>
    </div>
</section>

<!-- Datasheet Download -->
<section class="sec-padd-bottom bg-light">
    <div class="datasheet-download px-4 text-center">
        <h3 class="mb-3" style="color:#174268;">Download Indian Structural Beams Datasheet</h3>
        <p class="mb-3">
            Get the complete Indian Structural Beams datasheet with chemical composition,
            mechanical properties, heat treatment details, and applications.
            Enter your email to receive the PDF instantly.
        </p>

        <!-- Lead Capture Form -->
        <form id="leadForm" method="POST" action="{{ route('lead.capture') }}" class="mb-3">
            @csrf
            <input type="hidden" name="page_path" value="{{ $slug ?? 'indian-structural-beams' }}">
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
            <p class="text-center">Indian Structural Beams are available in different section sizes, depths, flange dimensions, thicknesses, lengths and structural steel grades according to applicable Indian Standards and project requirements. The appropriate beam section is selected based on structural design, loading conditions, span requirements and intended application.</p>
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
                    <tr><td>Product</td><td>Indian Structural Beams</td></tr>
                    <tr><td>Profile</td><td>I-Beam / H-Beam Structural Sections</td></tr>
                    <tr><td>Material</td><td>Structural Steel / Carbon Steel</td></tr>
                    <tr><td>Types</td><td>Structural Beam Sections as per applicable IS specifications</td></tr>
                    <tr><td>Standards</td><td>Applicable Indian Standards / Project Specifications</td></tr>
                    <tr><td>Grades</td><td>As per applicable material specification</td></tr>
                    <tr><td>Section Depth</td><td>Various standard sizes</td></tr>
                    <tr><td>Flange Width</td><td>As per selected beam section</td></tr>
                    <tr><td>Thickness</td><td>As per selected beam specification</td></tr>
                    <tr><td>Length</td><td>Standard Lengths / Cut-to-Length</td></tr>
                    <tr><td>Surface</td><td>Mill Finish / As Specified</td></tr>
                    <tr><td>Supply Form</td><td>Individual Sections / Bundles</td></tr>
                    <tr><td>Customization</td><td>Size, thickness, length and grade as required</td></tr>
                    <tr><td>Applications</td><td>Construction, Infrastructure, Industrial, Fabrication & Engineering</td></tr>
                </tbody>
            </table>
        </div>
        
        <div class="row g-4 mt-4">
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Beam Section Dimensions</h4>
                    <p class="mb-0 text-justify">Indian Structural Beams are identified according to their overall section depth, flange width, web thickness and flange thickness. These dimensional characteristics determine the section properties and help engineers select the appropriate beam for a particular structural application.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">I-Beam & H-Beam Sections</h4>
                    <p class="mb-0 text-justify">Depending on the applicable Indian specification, structural beam sections may include different I-shaped and H-shaped profiles designed for varying structural requirements. The appropriate profile should be selected according to the required load-bearing capacity, span, structural design and connection arrangement.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Length Availability</h4>
                    <p class="mb-0 text-justify">Structural beams can be considered in standard lengths or cut-to-length requirements, subject to product availability and customer specifications.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Material & Grade</h4>
                    <p class="mb-0 text-justify">The material grade is selected according to the applicable Indian Standard and project specification. Customers can specify the required grade along with the beam section and dimensions.</p>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-4">
            <div class="col-md-12">
                <div class="card p-4 shadow-sm h-100">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Supply Requirements</h4>
                    <p class="mb-2">For an accurate quotation, customers should provide:</p>
                    <ul class="list-unstyled mb-3 d-flex flex-wrap">
                        <li class="me-4 mb-2"><i class="bi bi-check2 text-success me-2"></i>Beam Type / Section</li>
                        <li class="me-4 mb-2"><i class="bi bi-check2 text-success me-2"></i>Beam Size</li>
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
                    <p class="mb-0 text-justify">Moksh Tubes & Fittings LLP can support standard and project-based requirements for Indian Structural Beams, subject to product availability and agreed specifications.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="size-chart" class="sec-padd-top sec-padd-bottom bg-light">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Size & Weight Chart</h2>
            <p class="text-center">Indian Structural Beams are available in different section depths, flange widths, web thicknesses, flange thicknesses and unit weights. The appropriate beam section is selected according to structural design, span, loading requirements and applicable Indian Standard.</p>
        </div>
        
        <h4 class="fw-bold mt-4 mb-3" style="color:#db7227;">ISMB / MB – Indian Standard Medium Weight Beams</h4>
        <div class="table-responsive mb-5">
            <table class="table table-bordered table-striped text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Section</th>
                        <th>Depth D (mm)</th>
                        <th>Flange Width B (mm)</th>
                        <th>Web Thickness t (mm)</th>
                        <th>Flange Thickness T (mm)</th>
                        <th>Weight (kg/m)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>ISMB 100</td><td>100</td><td>50</td><td>4.7</td><td>7.0</td><td>8.95</td></tr>
                    <tr><td>ISMB 125</td><td>125</td><td>70</td><td>5.0</td><td>8.0</td><td>13.35</td></tr>
                    <tr><td>ISMB 150</td><td>150</td><td>75</td><td>5.0</td><td>8.0</td><td>14.96</td></tr>
                    <tr><td>ISMB 175</td><td>175</td><td>85</td><td>5.8</td><td>9.0</td><td>19.50</td></tr>
                    <tr><td>ISMB 200</td><td>200</td><td>100</td><td>5.7</td><td>10.0</td><td>24.17</td></tr>
                    <tr><td>ISMB 225</td><td>225</td><td>110</td><td>6.5</td><td>11.8</td><td>31.15</td></tr>
                    <tr><td>ISMB 250</td><td>250</td><td>125</td><td>6.9</td><td>12.5</td><td>37.30</td></tr>
                    <tr><td>ISMB 300</td><td>300</td><td>140</td><td>7.7</td><td>13.1</td><td>46.02</td></tr>
                    <tr><td>ISMB 350</td><td>350</td><td>140</td><td>8.1</td><td>14.2</td><td>52.33</td></tr>
                    <tr><td>ISMB 400</td><td>400</td><td>140</td><td>8.9</td><td>16.0</td><td>61.55</td></tr>
                    <tr><td>ISMB 450</td><td>450</td><td>150</td><td>9.4</td><td>17.4</td><td>72.38</td></tr>
                    <tr><td>ISMB 500</td><td>500</td><td>180</td><td>10.2</td><td>17.2</td><td>86.88</td></tr>
                    <tr><td>ISMB 550</td><td>550</td><td>190</td><td>11.2</td><td>19.3</td><td>103.64</td></tr>
                    <tr><td>ISMB 600</td><td>600</td><td>210</td><td>12.0</td><td>20.3</td><td>121.00</td></tr>
                </tbody>
            </table>
        </div>
        <p class="text-center mt-3 text-muted">These values are from IS 808:2021 Table 1, Medium Flange Beams.</p>

        <h4 class="fw-bold mt-5 mb-3" style="color:#db7227;">ISWB / WB – Indian Standard Wide Flange Beams</h4>
        <div class="table-responsive mb-5">
            <table class="table table-bordered table-striped text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Section</th>
                        <th>Depth D (mm)</th>
                        <th>Flange Width B (mm)</th>
                        <th>Web Thickness t (mm)</th>
                        <th>Flange Thickness T (mm)</th>
                        <th>Weight (kg/m)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>ISWB 150</td><td>150</td><td>100</td><td>5.4</td><td>7.0</td><td>17.00</td></tr>
                    <tr><td>ISWB 175</td><td>175</td><td>125</td><td>5.8</td><td>7.4</td><td>22.06</td></tr>
                    <tr><td>ISWB 200</td><td>200</td><td>140</td><td>6.1</td><td>9.0</td><td>28.80</td></tr>
                    <tr><td>ISWB 200*</td><td>203</td><td>152</td><td>8.9</td><td>16.5</td><td>52.09</td></tr>
                    <tr><td>ISWB 225</td><td>225</td><td>150</td><td>6.4</td><td>9.9</td><td>33.93</td></tr>
                    <tr><td>ISWB 250</td><td>250</td><td>200</td><td>6.7</td><td>9.0</td><td>40.84</td></tr>
                    <tr><td>ISWB 300</td><td>300</td><td>200</td><td>7.4</td><td>10.0</td><td>48.12</td></tr>
                    <tr><td>ISWB 350</td><td>350</td><td>200</td><td>8.0</td><td>11.4</td><td>56.89</td></tr>
                    <tr><td>ISWB 400</td><td>400</td><td>200</td><td>8.6</td><td>13.0</td><td>66.71</td></tr>
                    <tr><td>ISWB 450</td><td>450</td><td>200</td><td>9.2</td><td>15.4</td><td>79.52</td></tr>
                    <tr><td>ISWB 500</td><td>500</td><td>250</td><td>9.9</td><td>14.7</td><td>95.12</td></tr>
                    <tr><td>ISWB 550</td><td>550</td><td>250</td><td>10.5</td><td>17.6</td><td>112.48</td></tr>
                    <tr><td>ISWB 600</td><td>600</td><td>250</td><td>11.2</td><td>21.3</td><td>133.70</td></tr>
                    <tr><td>ISWB 600*</td><td>600</td><td>250</td><td>11.8</td><td>23.6</td><td>145.06</td></tr>
                </tbody>
            </table>
        </div>

        <h4 class="fw-bold mt-5 mb-3" style="color:#db7227;">ISLB / LB – Indian Standard Light Weight Beams</h4>
        <div class="table-responsive mb-5">
            <table class="table table-bordered table-striped text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Section</th>
                        <th>Depth D (mm)</th>
                        <th>Flange Width B (mm)</th>
                        <th>Web Thickness t (mm)</th>
                        <th>Flange Thickness T (mm)</th>
                        <th>Weight (kg/m)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>ISLB 75</td><td>75</td><td>50</td><td>3.7</td><td>5.0</td><td>6.05</td></tr>
                    <tr><td>ISLB 100</td><td>100</td><td>50</td><td>4.0</td><td>6.4</td><td>8.01</td></tr>
                    <tr><td>ISLB 100(P)</td><td>100</td><td>50</td><td>4.3</td><td>7.0</td><td>8.75</td></tr>
                    <tr><td>ISLB 125</td><td>125</td><td>75</td><td>4.4</td><td>6.5</td><td>11.87</td></tr>
                    <tr><td>ISLB 150</td><td>150</td><td>80</td><td>4.8</td><td>6.8</td><td>14.19</td></tr>
                    <tr><td>ISLB 175</td><td>175</td><td>90</td><td>5.0</td><td>6.9</td><td>16.59</td></tr>
                    <tr><td>ISLB 175(P)</td><td>175</td><td>80</td><td>5.2</td><td>7.7</td><td>16.60</td></tr>
                    <tr><td>ISLB 200</td><td>200</td><td>100</td><td>5.4</td><td>7.3</td><td>19.83</td></tr>
                    <tr><td>ISLB 200(P)</td><td>200</td><td>100</td><td>5.6</td><td>8.0</td><td>21.06</td></tr>
                    <tr><td>ISLB 225</td><td>225</td><td>100</td><td>5.8</td><td>8.6</td><td>23.47</td></tr>
                    <tr><td>ISLB 250</td><td>250</td><td>125</td><td>6.1</td><td>8.2</td><td>27.87</td></tr>
                    <tr><td>ISLB 275</td><td>275</td><td>140</td><td>6.4</td><td>8.8</td><td>32.96</td></tr>
                    <tr><td>ISLB 300</td><td>300</td><td>150</td><td>6.7</td><td>9.4</td><td>37.72</td></tr>
                    <tr><td>ISLB 300(P)</td><td>300</td><td>140</td><td>7.0</td><td>11.6</td><td>41.50</td></tr>
                    <tr><td>ISLB 325</td><td>325</td><td>165</td><td>7.0</td><td>9.8</td><td>43.07</td></tr>
                    <tr><td>ISLB 350</td><td>350</td><td>165</td><td>7.4</td><td>11.4</td><td>49.44</td></tr>
                    <tr><td>ISLB 400</td><td>400</td><td>165</td><td>8.0</td><td>12.5</td><td>56.82</td></tr>
                    <tr><td>ISLB 450</td><td>450</td><td>170</td><td>8.6</td><td>13.4</td><td>65.22</td></tr>
                    <tr><td>ISLB 500</td><td>500</td><td>180</td><td>9.2</td><td>14.1</td><td>74.92</td></tr>
                    <tr><td>ISLB 550</td><td>550</td><td>190</td><td>9.9</td><td>15.0</td><td>86.28</td></tr>
                    <tr><td>ISLB 600</td><td>600</td><td>210</td><td>10.5</td><td>15.5</td><td>99.39</td></tr>
                </tbody>
            </table>
        </div>

        <h4 class="fw-bold mt-5 mb-3" style="color:#db7227;">ISJB / JB – Indian Standard Junior Beams</h4>
        <div class="table-responsive mb-4">
            <table class="table table-bordered table-striped text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Section</th>
                        <th>Depth D (mm)</th>
                        <th>Flange Width B (mm)</th>
                        <th>Web Thickness t (mm)</th>
                        <th>Flange Thickness T (mm)</th>
                        <th>Weight (kg/m)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>ISJB 150</td><td>150</td><td>50</td><td>3.0</td><td>4.6</td><td>7.07</td></tr>
                    <tr><td>ISJB 175</td><td>175</td><td>50</td><td>3.2</td><td>4.8</td><td>8.07</td></tr>
                    <tr><td>ISJB 200</td><td>200</td><td>60</td><td>3.4</td><td>5.0</td><td>9.92</td></tr>
                    <tr><td>ISJB 225</td><td>225</td><td>80</td><td>3.7</td><td>5.0</td><td>12.78</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<section id="grades" class="sec-padd-top sec-padd-bottom">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Grades Available</h2>
            <p class="text-center pb-3">Indian Structural Beams can be supplied in different structural steel grades according to the applicable Indian Standard and project requirements. The required grade is selected based on the structural application, required mechanical properties, loading conditions, fabrication requirements and engineering specifications.</p>
        </div>
        <p class="text-center mb-4">At Moksh Tubes & Fittings LLP, Structural Beams can be sourced according to the customer's specified grade, beam section, dimensions, length, quantity and applicable standard, subject to product availability.</p>
        
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
                    <p class="mb-0 text-justify">E250 structural steel can be considered for general structural applications where the specified mechanical properties meet the requirements of the design. It may be used for structural frameworks, supports, fabrication and engineering structures.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 shadow-sm h-100 border-0 bg-light">
                    <h4 class="mb-3 text-center" style="color: #db7227;">E350 Grade</h4>
                    <p class="mb-0 text-justify">E350 structural steel provides a higher specified strength level and can be considered for applications requiring increased strength, subject to the applicable specification and engineering design.</p>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-4">
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100 border-0 bg-white shadow-sm border border-secondary border-opacity-25 rounded-3">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Grade Selection</h4>
                    <p class="mb-2">The appropriate grade for an Indian Structural Beam should be selected based on:</p>
                    <div class="row">
                        <div class="col-6">
                            <ul class="list-unstyled mb-0">
                                <li><i class="bi bi-check-circle text-success me-2"></i>Required mechanical properties</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Structural loading</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Beam span and design requirements</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Section dimensions</li>
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
                    <p class="mt-3 mb-0 text-justify">Customers should specify the required grade, beam section, dimensions, length, quantity and applicable standard when submitting an enquiry.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 shadow-sm h-100 border-0 bg-white shadow-sm border border-secondary border-opacity-25 rounded-3">
                    <h4 class="mb-3 text-center" style="color: #db7227;">Material Documentation</h4>
                    <p class="mb-3 text-justify">Where required and agreed at the time of order, applicable material test certificates and supporting documentation can be provided according to the purchase order and project requirements.</p>
                    <div class="alert alert-warning mb-0 border-0 shadow-sm" role="alert">
                        <strong>Note:</strong> Exact grade availability should be confirmed with Moksh Tubes & Fittings LLP before ordering, as availability may vary according to beam section, size, specification and project requirements.
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
            <p class="text-center pb-3">Indian Structural Beams are widely used in construction, industrial structures, infrastructure, fabrication and engineering projects where strong structural members are required for load-bearing, framing and support applications.</p>
        </div>
        <div class="row g-4 mt-4">
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-building"></i></div>
                    <h5>Building & Construction</h5>
                    <p class="mb-0 text-center">Structural beams form an important part of steel and composite structural systems used in building projects. Common applications include building frameworks, roof structures, floor-supporting structures, structural frames, columns and beam assemblies, and industrial and commercial buildings.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-industry"></i></div>
                    <h5>Industrial Structures</h5>
                    <p class="mb-0 text-center">Indian Structural Beams are used in industrial facilities where load-bearing steel sections are required for structural frameworks and supporting systems. Applications include industrial sheds, warehouses, factory structures, equipment support structures, heavy-duty platforms, and steel frameworks.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-cone-striped"></i></div>
                    <h5>Infrastructure Projects</h5>
                    <p class="mb-0 text-center">Structural beams can be used in various infrastructure and civil engineering projects where the specified beam section meets the structural design requirements. Applications include bridges and associated structures, infrastructure frameworks, elevated structures, supporting structures, and platforms and access systems.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-house"></i></div>
                    <h5>Warehouses & Industrial Sheds</h5>
                    <p class="mb-0 text-center">Structural beams are commonly used for the main structural framework of warehouses, storage facilities and industrial sheds. They can be incorporated into roof framing, main structural frames, supporting members, and industrial building frameworks.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-tools"></i></div>
                    <h5>Steel Fabrication</h5>
                    <p class="mb-0 text-center">Structural beams are suitable for fabrication into different steel structures and assemblies. Applications include fabricated frames, platforms, support structures, structural assemblies, and heavy fabrication projects.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-bezier2"></i></div>
                    <h5>Bridges & Supporting Structures</h5>
                    <p class="mb-0 text-center">Depending on the engineering design and applicable specifications, structural beams can be used in bridge-related structures and supporting steel frameworks.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-gear"></i></div>
                    <h5>Machinery & Equipment Structures</h5>
                    <p class="mb-0 text-center">Structural beams can be incorporated into heavy-duty support structures for industrial machinery and equipment where the selected section provides the required structural properties.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-nut"></i></div>
                    <h5>General Engineering Applications</h5>
                    <p class="mb-0 text-center">Indian Structural Beams are also used in engineering and fabrication projects requiring rigid, load-bearing steel sections for structural support and framework construction.</p>
                </div>
            </div>
        </div>
        <p class="text-center mt-4 text-muted">The appropriate beam section, dimensions and material grade should always be selected according to the structural design, loading conditions, span requirements, applicable Indian Standard and project specifications.</p>
    </div>
</section>

<section id="uses" class="sec-padd-top sec-padd-bottom">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Uses of Indian Structural Beams</h2>
            <p class="text-center mb-2">Indian Structural Beams are widely used as load-bearing and supporting members in construction, industrial structures, infrastructure, fabrication and engineering applications.</p>
        </div>
        <div class="row g-4 mt-4">
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Used for main structural frameworks in commercial, industrial and building construction.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Suitable for roof structures and framing systems where structural beams are specified.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Used in warehouses and industrial sheds for supporting roof and building frameworks.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Suitable for floor-supporting and load-bearing structures according to engineering design.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Used for industrial platforms, elevated structures and supporting frameworks.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Suitable for bridge-related structures and infrastructure projects where the specified beam section is required.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Used in machinery and equipment support structures in industrial facilities.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Suitable for heavy steel fabrication including frames, platforms and structural assemblies.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Used for general engineering and construction applications requiring rigid, load-bearing steel sections.</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                    <h5>Can be combined with structural angles, channels, columns and hollow sections to form complete steel frameworks.</h5>
                </div>
            </div>
        </div>
        <p class="text-center mt-4 text-muted">The appropriate beam section, dimensions, grade and length should be selected according to the structural design, loading conditions, span requirements, applicable Indian Standard and project specifications.</p>
    </div>
</section>

<section id="advantages" class="sec-padd-top sec-padd-bottom bg-light">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold text-center" style="color:#174268;">Advantages of Indian Structural Beams</h2>
            <p class="text-center mb-2">Indian Structural Beams provide a practical and reliable solution for load-bearing, framing and supporting applications across construction, industrial, infrastructure and engineering projects.</p>
        </div>
        <div class="row g-4 mt-2">
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                    <h5>High Load-Bearing Capability</h5>
                    <p class="mb-0 text-center">Suitable for structural applications requiring strong load-bearing members when selected according to the engineering design.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-layers"></i></div>
                    <h5>Structural Strength & Rigidity</h5>
                    <p class="mb-0 text-center">Beam sections provide useful strength and rigidity for building and industrial structural frameworks.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-grid"></i></div>
                    <h5>Wide Application Range</h5>
                    <p class="mb-0 text-center">Suitable for buildings, warehouses, industrial sheds, infrastructure, platforms, fabrication and engineering structures.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-arrows-expand"></i></div>
                    <h5>Different Section Options</h5>
                    <p class="mb-0 text-center">Different beam profiles and section sizes can be selected according to project requirements.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-layout-wtf"></i></div>
                    <h5>Efficient Structural Design</h5>
                    <p class="mb-0 text-center">Appropriate beam sections can help provide effective load distribution across structural frameworks.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-building"></i></div>
                    <h5>Suitable for Heavy Structures</h5>
                    <p class="mb-0 text-center">Larger beam sections can be considered for heavy-duty structural applications where required by the engineering design.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-bezier2"></i></div>
                    <h5>Easy Integration</h5>
                    <p class="mb-0 text-center">Can be used together with structural angles, channels, columns and hollow sections in complete steel structures.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-tools"></i></div>
                    <h5>Fabrication Friendly</h5>
                    <p class="mb-0 text-center">Suitable for common structural fabrication operations such as cutting, drilling, welding and assembly, subject to applicable specifications.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-file-earmark-check"></i></div>
                    <h5>Different Grade Options</h5>
                    <p class="mb-0 text-center">Structural steel grades can be selected according to the required mechanical properties and project specifications.</p>
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
                    <p class="mb-0 text-center">Beam requirements can be supplied according to specified section, dimensions, grade, length and quantity.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-cone-striped"></i></div>
                    <h5>Suitable for Construction & Infrastructure</h5>
                    <p class="mb-0 text-center">Widely applicable to structural frameworks, industrial buildings, warehouses, platforms and infrastructure projects.</p>
                </div>
            </div>
        </div>
        <p class="text-center mt-4 text-muted">The appropriate beam section should always be selected according to the structural design, loading conditions, span, section properties, applicable Indian Standard and project specifications.</p>
    </div>
</section>

<section id="mechanical-properties" class="sec-padd-top sec-padd-bottom">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Mechanical Properties – Indian Structural Beams</h2>
        </div>
        <p class="text-center mb-4 text-muted">(Typical minimum values as per IS 2062; values vary with material thickness and grade.)</p>
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
        <p class="mt-2 text-muted text-center"><small>The IS 2062 values are thickness-dependent; for example, E250 has minimum yield strength of 250 MPa for thickness up to 20 mm, 240 MPa for 20–40 mm and 230 MPa above 40 mm.</small></p>
    </div>
</section>

<section id="why-choose-us" class="sec-padd-top sec-padd-bottom bg-light">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">Why Choose Moksh Tubes & Fittings LLP?</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-center mb-4">Moksh Tubes & Fittings LLP supports customers looking for Indian Structural Beams for construction, industrial, infrastructure, fabrication and engineering requirements. Our supply approach is based on the customer's required beam section, dimensions, grade, length, quantity and applicable specifications.</p>
                <div class="row g-4 mt-4">
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-box-seam"></i></div>
                            <h5>Project-Based Sourcing</h5>
                            <p class="mb-0">Structural beams can be sourced according to specific project requirements and technical specifications.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-boxes"></i></div>
                            <h5>Wide Product Range</h5>
                            <p class="mb-0">Different structural beam sections, sizes and grades can be considered according to availability and specification.</p>
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
                            <p class="mb-0">Assistance with beam dimensions, section specifications, grades and procurement requirements.</p>
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
                            <p class="mb-0">Specific beam sections, dimensions, grades, lengths and quantities can be discussed for project requirements.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-building"></i></div>
                            <h5>Suitable for Industrial & Infrastructure Projects</h5>
                            <p class="mb-0">Support for customers sourcing structural beams for construction, fabrication, industrial and infrastructure applications.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="why-banner-block h-100">
                            <div class="why-banner-icon"><i class="bi bi-globe"></i></div>
                            <h5>Domestic & International Enquiries</h5>
                            <p class="mb-0">Support for customers requiring Indian Structural Beams for domestic and international project requirements.</p>
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
            <h2 class="fw-bold" style="color: #174268;">FAQ – Indian Structural Beams</h2>
        </div>
        <div class="row mt-4">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="accordion-box">
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What are Indian Structural Beams?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Indian Structural Beams are structural steel sections used primarily for load-bearing, framing and supporting applications in buildings, industrial structures, warehouses, infrastructure and engineering projects.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What types of Structural Beams are available?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Structural beams are available in different I-shaped and H-shaped profiles, with the appropriate section selected according to structural design, loading conditions and project requirements.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What are Indian Structural Beams used for?</h4>
                        </div>
                        <div class="accord-content">
                            <p>They are commonly used in building frameworks, industrial sheds, warehouses, roof structures, platforms, infrastructure projects, bridge-related structures and heavy fabrication.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Which standards are applicable to Indian Structural Beams?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Structural Beams can be supplied according to the applicable Indian Standard or project specification. The exact standard should be confirmed according to the required beam section and application.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Which grades are available for Indian Structural Beams?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Grades such as IS 2062, E250 and E350 may be considered according to the applicable specification and product availability. Exact grade availability should be confirmed at the time of enquiry.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What sizes of Indian Structural Beams are available?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Structural Beams are available in different section depths, flange widths and thicknesses. Actual size availability depends on the applicable standard and Moksh Tubes & Fittings LLP's current product range.</p>
                        </div>
                    </div>

                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Can Structural Beams be supplied in custom lengths?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Yes. Standard and cut-to-length requirements can be considered depending on product availability and customer specifications.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>How do I select the right Structural Beam?</h4>
                        </div>
                        <div class="accord-content">
                            <p>The appropriate beam should be selected according to required load-bearing capacity, span, section properties, dimensions, material grade, structural design and applicable standard. Engineering drawings or project specifications should be referred to for final selection.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Can Moksh Tubes & Fittings LLP supply Structural Beams in bulk?</h4>
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
                            <p>Customers should provide the beam section, size, dimensions, material grade, required length, quantity and applicable standard. Project drawings or technical specifications can also be shared where applicable.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Can Structural Beams be used with other structural steel sections?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Yes. Structural Beams can be combined with angles, channels, columns and hollow sections to form complete steel frameworks and fabricated structural assemblies.</p>
                        </div>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Does Moksh Tubes & Fittings LLP support international enquiries?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Yes. International enquiries for Indian Structural Beams can be discussed based on the required product specification, quantity and delivery requirements.</p>
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
            <p class="fs-5 mt-3">Looking for Indian Structural Beams for your construction, industrial, infrastructure or fabrication project?</p>
            <p class="mb-4 text-light">
                Contact <strong>Moksh Tubes & Fittings LLP</strong> for Structural Beam requirements based on your required beam section, dimensions, grade, length and quantity.<br>
                Share your project specifications, drawings or material requirements with our team to discuss the suitable Indian Structural Beams for your application.
            </p>
            <a href="{{ route('contact-us') ?? '#' }}" class="btn btn-lg text-white shadow"
                style="background-color:#db7227; border-radius:8px; padding: 12px 30px;">Contact Us Now</a>
            <p class="mt-4 mb-0 text-light opacity-75">📞 Contact Moksh Tubes & Fittings LLP at <a href="tel:+919769584950" class="text-light fw-bold text-decoration-none">+91 97695 84950</a> for product availability, technical specifications and quotation enquiries.</p>
        </div>
    </div>
</section>

@endsection
