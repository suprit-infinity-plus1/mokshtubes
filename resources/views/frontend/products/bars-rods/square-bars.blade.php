@extends('layouts.master')

@section('title', 'Square Bars Manufacturer, Supplier & Exporter in India | SS, Alloy & Carbon Steel')
@section('meta_description', 'Buy Square Bars in Stainless Steel, Carbon Steel, Alloy Steel, Duplex, Nickel Alloy, Titanium, Aluminium & Brass grades. Available in various sizes and specifications.')
@section('meta_keywords', 'Square Bars, Stainless Steel Square Bars, Carbon Steel Square Bars, Alloy Steel Square Bars, MS Square Bars, Aluminium Square Bars, Brass Square Bars')
@section('og_image', asset('assets/images/product/Bars-&-Rods/square-bars.webp'))
@section('og_title', 'Square Bars Manufacturer, Supplier & Exporter in India')
@section('og_type', 'article')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url('{{ asset('assets/images/product/Bars-&-Rods/square-bars.webp') }}');">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>SQUARE BARS<br>STAINLESS STEEL, CARBON STEEL, ALLOY STEEL & MORE</h1>

                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px; max-width: 900px;">
                        Square Bars are solid metal bars with a uniform square cross-section, widely used in construction, engineering, fabrication, machining, marine, automotive, and architectural applications. Known for their excellent strength, dimensional accuracy, and versatility, square bars are an essential raw material for manufacturing structural components, machine parts, supports, frames, and decorative products.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

    <!-- Start Material Tabs -->
    <div class="sticky-top bg-white border-bottom material-tabs w-100">
        <div class="container d-flex flex-wrap justify-content-center" style="gap: 15px; padding: 10px 0;">
            <a href="#overview">Overview</a> |
            <a href="#specifications">Specifications</a> |
            <a href="#size-weight">Size & Weight</a> |
            <a href="#types">Types</a> |
            <a href="#grades">Grades</a> |
            <a href="#manufacturing">Manufacturing</a> |
            <a href="#mechanical">Mechanical</a> |
            <a href="#applications">Applications</a> |
            <a href="#why-choose-us">Why Choose Us</a> |
            <a href="#faq">FAQ</a>
        </div>
    </div>
    <!-- End Material Tabs -->

    <section id="overview" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Product Overview</h2>
            </div>

            <h3 class="fw-semibold text-center mb-5" style="color: #db7227;">
                SQUARE BARS
            </h3>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/product/Bars-&-Rods/square-bars.webp') }}" alt="Square Bars"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4" style="text-align: justify;">
                            <strong class="text-black">Square Bars</strong> are one of the most widely used metal products in fabrication and engineering industries due to their balanced strength, easy machinability, and excellent structural properties. Their equal-sided geometry provides superior load distribution, making them suitable for both structural and precision engineering applications.
                        </p>

                        <p class="fs-6 mb-4" style="text-align: justify;">
                            These bars are extensively used for manufacturing machine components, support structures, brackets, tools, frames, shafts, railings, gates, grills, and heavy-duty industrial equipment. Depending on the application, square bars can be supplied in hot rolled, cold drawn, forged, bright, polished, and precision-machined finishes.
                        </p>

                        <p class="fs-6 mb-4" style="text-align: justify;">
                            At <strong style="color:black;"><a href="{{ url('/contact-us') }}">Moksh Tubes & Fittings LLP</a></strong>, we supply premium-quality Square Bars in Stainless Steel, Carbon Steel, Alloy Steel, Duplex & Super Duplex Steel, Nickel Alloys, Titanium, Aluminium, Brass, and Copper grades. 
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            Our square bars are manufactured according to ASTM, ASME, DIN, EN, and JIS standards, ensuring exceptional quality, durability, and performance. We serve customers across India, the Middle East, Europe, Southeast Asia, and other global markets.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Square Bars Datasheet</h3>
            <p class="mb-3">
                Get the complete datasheet including chemical composition, mechanical properties, standards, tolerances, and
                application guidelines. Enter your email to receive the PDF instantly.
            </p>

            <form id="leadForm" method="POST" action="{{ route('lead.capture') }}" class="mb-3">
                @csrf
                <input type="hidden" name="page_path" value="{{ Request::path() }}">
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
            <div class="section-title center">
                <h2>Specifications of Square Bars</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Category</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Product</td>
                                    <td>Square Bars</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Materials</td>
                                    <td>Stainless Steel, Carbon Steel, Alloy Steel, Duplex, Super Duplex, Nickel Alloys, Titanium, Aluminium, Brass & Copper</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Size Range</td>
                                    <td>6 mm x 6 mm to 150 mm x 150 mm</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Custom Sizes</td>
                                    <td>Up to 200 mm x 200 mm</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Lengths</td>
                                    <td>3m, 4m, 6m & Cut-to-Length</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Types</td>
                                    <td>Hot Rolled, Cold Drawn, Forged, Bright & Polished</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Finishes</td>
                                    <td>Bright, Polished, Mill Finish, Shot Blasted, Pickled & Passivated</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Standards</td>
                                    <td>ASTM A276, ASTM A484, ASTM B160, EN 10059, DIN 1014</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Certification</td>
                                    <td>EN 10204 3.1, Mill Test Certificate</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="size-weight" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Square Bar Size & Weight Chart</h2>
            </div>

            <p class="text-center mb-4">Moksh Tubes supplies square bars in sizes ranging from 6 mm to 200 mm suitable for structural, machining, fabrication, and architectural applications.</p>

            <div class="row justify-content-center">
                <div class="col-lg-8 mb-4">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Size (mm)</th>
                                    <th>Inches</th>
                                    <th>Sectional Area (mm²)</th>
                                    <th>Weight (kg/m)</th>
                                    <th>Weight (lb/ft)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>6</td><td>1/4</td><td>36</td><td>0.283</td><td>0.190</td></tr>
                                <tr class="t-row"><td>8</td><td>5/16</td><td>64</td><td>0.503</td><td>0.338</td></tr>
                                <tr class="t-row"><td>10</td><td>3/8</td><td>100</td><td>0.785</td><td>0.527</td></tr>
                                <tr class="t-row"><td>12</td><td>1/2</td><td>144</td><td>1.13</td><td>0.758</td></tr>
                                <tr class="t-row"><td>16</td><td>5/8</td><td>256</td><td>2.01</td><td>1.35</td></tr>
                                <tr class="t-row"><td>18</td><td>11/16</td><td>324</td><td>2.54</td><td>1.70</td></tr>
                                <tr class="t-row"><td>20</td><td>3/4</td><td>400</td><td>3.14</td><td>2.11</td></tr>
                                <tr class="t-row"><td>22</td><td>7/8</td><td>484</td><td>3.85</td><td>2.58</td></tr>
                                <tr class="t-row"><td>25</td><td>1</td><td>625</td><td>4.91</td><td>3.30</td></tr>
                                <tr class="t-row"><td>28</td><td>1-1/8</td><td>784</td><td>6.16</td><td>4.14</td></tr>
                                <tr class="t-row"><td>30</td><td>1-3/16</td><td>900</td><td>7.07</td><td>4.75</td></tr>
                                <tr class="t-row"><td>32</td><td>1-1/4</td><td>1024</td><td>8.04</td><td>5.40</td></tr>
                                <tr class="t-row"><td>36</td><td>1-7/16</td><td>1296</td><td>10.18</td><td>6.83</td></tr>
                                <tr class="t-row"><td>40</td><td>1-9/16</td><td>1600</td><td>12.56</td><td>8.43</td></tr>
                                <tr class="t-row"><td>45</td><td>1-3/4</td><td>2025</td><td>15.90</td><td>10.67</td></tr>
                                <tr class="t-row"><td>50</td><td>2</td><td>2500</td><td>19.63</td><td>13.19</td></tr>
                                <tr class="t-row"><td>55</td><td>2-3/16</td><td>3025</td><td>23.77</td><td>15.98</td></tr>
                                <tr class="t-row"><td>60</td><td>2-3/8</td><td>3600</td><td>28.26</td><td>18.99</td></tr>
                                <tr class="t-row"><td>65</td><td>2-1/2</td><td>4225</td><td>33.13</td><td>22.25</td></tr>
                                <tr class="t-row"><td>70</td><td>2-3/4</td><td>4900</td><td>38.48</td><td>25.82</td></tr>
                                <tr class="t-row"><td>75</td><td>3</td><td>5625</td><td>44.18</td><td>29.68</td></tr>
                                <tr class="t-row"><td>80</td><td>3-1/8</td><td>6400</td><td>50.24</td><td>33.71</td></tr>
                                <tr class="t-row"><td>90</td><td>3-1/2</td><td>8100</td><td>63.62</td><td>42.76</td></tr>
                                <tr class="t-row"><td>100</td><td>4</td><td>10000</td><td>78.50</td><td>52.73</td></tr>
                                <tr class="t-row"><td>110</td><td>4-3/8</td><td>12100</td><td>95.00</td><td>63.90</td></tr>
                                <tr class="t-row"><td>120</td><td>4-3/4</td><td>14400</td><td>113.10</td><td>76.00</td></tr>
                                <tr class="t-row"><td>125</td><td>5</td><td>15625</td><td>122.72</td><td>82.43</td></tr>
                                <tr class="t-row"><td>130</td><td>5-1/8</td><td>16900</td><td>132.70</td><td>89.10</td></tr>
                                <tr class="t-row"><td>140</td><td>5-1/2</td><td>19600</td><td>153.70</td><td>103.30</td></tr>
                                <tr class="t-row"><td>150</td><td>6</td><td>22500</td><td>176.71</td><td>118.70</td></tr>
                                <tr class="t-row"><td>160</td><td>6-1/4</td><td>25600</td><td>201.10</td><td>135.00</td></tr>
                                <tr class="t-row"><td>180</td><td>7-1/8</td><td>32400</td><td>254.50</td><td>170.90</td></tr>
                                <tr class="t-row"><td>200</td><td>8</td><td>40000</td><td>314.00</td><td>211.00</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="types" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Types of Square Bars</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-3">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-hammer"></i></div>
                        <h5>Hot Rolled Square Bars</h5>
                        <p>Cost-effective solution with high strength, excellent weldability, and suitable for structural applications.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-rulers"></i></div>
                        <h5>Cold Drawn Square Bars</h5>
                        <p>Offers better dimensional accuracy, improved machinability, enhanced mechanical properties, and smooth surface finish.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Forged Square Bars</h5>
                        <p>Superior toughness, high load-bearing capability, and excellent fatigue resistance. Suitable for critical engineering applications.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="advantage-card h-100">
                        <div class="advantage-icon"><i class="bi bi-stars"></i></div>
                        <h5>Bright & Polished Square Bars</h5>
                        <p>Excellent appearance, smooth surface finish, and corrosion resistance. Ideal for decorative projects and precision engineering.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="grades" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Grades Available</h2>
            </div>
            
            <div class="row align-items-center mt-4 justify-content-center">
                <div class="col-lg-10">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Material</th>
                                    <th>Grades</th>
                                    <th>Application</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td class="fw-bold text-center">Stainless Steel</td>
                                    <td>SS 304, SS 304L, SS 316, SS 316L, SS 310, SS 321, SS 347</td>
                                    <td>Ideal for food processing, pharmaceutical, marine, and chemical industries.</td>
                                </tr>
                                <tr class="t-row">
                                    <td class="fw-bold text-center">Carbon Steel</td>
                                    <td>ASTM A36, IS 2062, EN8, EN9</td>
                                    <td>Suitable for general engineering and construction applications.</td>
                                </tr>
                                <tr class="t-row">
                                    <td class="fw-bold text-center">Alloy Steel</td>
                                    <td>EN19, EN24, EN31, AISI 4140, AISI 4130</td>
                                    <td>Used in heavy engineering, automotive, and high-strength applications.</td>
                                </tr>
                                <tr class="t-row">
                                    <td class="fw-bold text-center">Duplex & Super Duplex</td>
                                    <td>UNS S31803, UNS S32205, UNS S32750, UNS S32760</td>
                                    <td>Designed for offshore, marine, and chemical processing industries.</td>
                                </tr>
                                <tr class="t-row">
                                    <td class="fw-bold text-center">Nickel Alloy</td>
                                    <td>Inconel 600, Inconel 625, Monel 400, Monel K500, Hastelloy C22, Hastelloy C276</td>
                                    <td>Suitable for highly corrosive and high-temperature environments.</td>
                                </tr>
                                <tr class="t-row">
                                    <td class="fw-bold text-center">Titanium</td>
                                    <td>Grade 2, Grade 5</td>
                                    <td>Used in aerospace, medical, marine, and desalination industries.</td>
                                </tr>
                                <tr class="t-row">
                                    <td class="fw-bold text-center">Aluminium</td>
                                    <td>6061, 6082, 7075</td>
                                    <td>Preferred for lightweight structural applications.</td>
                                </tr>
                                <tr class="t-row">
                                    <td class="fw-bold text-center">Brass & Copper</td>
                                    <td>C11000 Copper, C26000 Brass</td>
                                    <td>Used for electrical, decorative, and marine applications.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="manufacturing" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Manufacturing Process of Square Bars</h2>
            </div>
            
            <p class="text-center mb-4">The manufacturing process of square bars involves multiple stages to ensure quality, dimensional accuracy, and mechanical strength.</p>

            <div class="row mt-4 justify-content-center">
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="pe-md-3">
                                <p class="fs-6" style="text-align: justify;"><strong>1. Raw Material Selection</strong><br>
                                Premium-quality billets and ingots are selected according to international specifications.</p>
                                
                                <p class="fs-6 mt-3" style="text-align: justify;"><strong>2. Hot Rolling or Forging</strong><br>
                                The material is processed through hot rolling or forging operations to achieve the desired square profile.</p>
                                
                                <p class="fs-6 mt-3" style="text-align: justify;"><strong>3. Heat Treatment</strong><br>
                                Depending on the material grade, bars may undergo Annealing, Normalizing, Solution Annealing, or Quenching & Tempering.</p>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="pe-md-3">
                                <p class="fs-6 mt-3" style="text-align: justify;"><strong>4. Surface Finishing</strong><br>
                                The bars are finished through Grinding, Polishing, Pickling, Passivation, or Bright Drawing.</p>
                                
                                <p class="fs-6 mt-3" style="text-align: justify;"><strong>5. Inspection & Testing</strong><br>
                                Every batch undergoes rigorous testing to ensure compliance with ASTM, ASME, EN, and DIN standards.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="mechanical" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Mechanical Properties</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h4 class="text-center mb-3" style="color: #db7227;">Mechanical Properties of Square Bars</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Material</th>
                                    <th>Tensile Strength (MPa)</th>
                                    <th>Yield Strength (MPa)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>SS 304</td><td>515</td><td>205</td></tr>
                                <tr class="t-row"><td>SS 316</td><td>515</td><td>205</td></tr>
                                <tr class="t-row"><td>EN8</td><td>550</td><td>280</td></tr>
                                <tr class="t-row"><td>EN19</td><td>850</td><td>680</td></tr>
                                <tr class="t-row"><td>Duplex 2205</td><td>620</td><td>450</td></tr>
                                <tr class="t-row"><td>Inconel 625</td><td>827</td><td>414</td></tr>
                                <tr class="t-row"><td>Titanium Grade 2</td><td>345</td><td>275</td></tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="text-center mt-3">
                        📌 Actual values vary according to grade and heat treatment condition.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="applications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications & Uses</h2>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card h-100">
                        <div class="application-icon"><i class="bi bi-building"></i></div>
                        <h5>Construction & Infrastructure</h5>
                        <p>✔ Building frameworks<br>✔ Reinforcement structures<br>✔ Gates and grills<br>✔ Support systems</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card h-100">
                        <div class="application-icon"><i class="bi bi-tsunami"></i></div>
                        <h5>Marine & Offshore</h5>
                        <p>✔ Offshore platforms<br>✔ Marine fittings<br>✔ Shipbuilding components<br>✔ Corrosion-resistant structures</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card h-100">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Oil & Gas Industry</h5>
                        <p>✔ Pump components<br>✔ Valve bodies<br>✔ Structural supports<br>✔ Refinery equipment</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card h-100">
                        <div class="application-icon"><i class="bi bi-car-front"></i></div>
                        <h5>Automotive & Aerospace</h5>
                        <p>✔ Chassis components<br>✔ Tooling systems<br>✔ Aircraft structures<br>✔ Precision machined parts</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="application-card h-100">
                        <div class="application-icon"><i class="bi bi-gear"></i></div>
                        <h5>Industrial Manufacturing</h5>
                        <p>✔ Machine components<br>✔ Heavy-duty industrial equipment<br>✔ Support structures<br>✔ Brackets and tools</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="why-choose-us" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container text-center">
            <div class="section-title center">
                <h2>Why Choose Moksh Tubes & Fittings LLP?</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-3">
                    <div class="why-banner-block h-100 bg-white border p-4 rounded">
                        <div class="why-banner-icon mb-3"><i class="bi bi-box-seam fs-2 text-primary"></i></div>
                        <h5>Extensive inventory availability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="why-banner-block h-100 bg-white border p-4 rounded">
                        <div class="why-banner-icon mb-3"><i class="bi bi-award fs-2 text-primary"></i></div>
                        <h5>ISO-certified quality systems</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="why-banner-block h-100 bg-white border p-4 rounded">
                        <div class="why-banner-icon mb-3"><i class="bi bi-gear fs-2 text-primary"></i></div>
                        <h5>Custom manufacturing capabilities</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="why-banner-block h-100 bg-white border p-4 rounded">
                        <div class="why-banner-icon mb-3"><i class="bi bi-tags fs-2 text-primary"></i></div>
                        <h5>Competitive pricing</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="why-banner-block h-100 bg-white border p-4 rounded">
                        <div class="why-banner-icon mb-3"><i class="bi bi-globe2 fs-2 text-primary"></i></div>
                        <h5>Worldwide export support</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="why-banner-block h-100 bg-white border p-4 rounded">
                        <div class="why-banner-icon mb-3"><i class="bi bi-truck fs-2 text-primary"></i></div>
                        <h5>Fast dispatch schedules</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact-us" class="sec-padd-bottom bg-light">
        <div class="container">
            <div class="contact-cta-box text-center p-5 rounded border shadow-sm">
                <h2>Request a Quote</h2>
                <p class="fs-5 mt-3">
                    Looking for premium-quality Square Bars for construction, industrial, marine, or engineering projects?<br>
                    Contact <strong>Moksh Tubes & Fittings LLP</strong> today for competitive pricing, technical assistance, and worldwide delivery.<br><br>
                    📞 <strong>Call:</strong> +91 97695 84950<br>
                    📧 <strong>Email:</strong> sales@mokshtubes.com<br><br>
                    We supply high-performance square bars engineered for strength, reliability, and long service life in demanding industrial environments.
                </p>
                <!-- Call button -->
                <a href="javascript:void(0);" class="btn btn-lg mt-4 text-white" style="background-color: #db7227; padding: 12px 30px; border-radius: 8px;" data-bs-toggle="modal"
                    data-bs-target="#contactFormModal">
                    Get in Touch
                </a>
            </div>
        </div>
    </section>

@endsection

@section('jsscripts')
    <script type="application/ld+json">
        @verbatim
        [{
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "Moksh Tubes & Fittings LLP",
            "url": "https://www.mokshtubes.com",
            "logo": "https://www.mokshtubes.com/assets/logo.png",
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+91-97695-84950",
                "email": "sales@mokshtubes.com",
                "contactType": "sales",
                "areaServed": ["IN","AE","SA","QA","OM","KW","US","EU"],
                "availableLanguage": ["English"]
            }
        },
        {
            "@context": "https://schema.org",
            "@type": "Product",
            "name": "Square Bars",
            "description": "Buy Square Bars in Stainless Steel, Carbon Steel, Alloy Steel, Duplex, Nickel Alloy, Titanium, Aluminium & Brass grades. Available in various sizes and specifications.",
            "brand": {
                "@type": "Brand",
                "name": "Moksh Tubes & Fittings LLP"
            },
            "manufacturer": {
                "@type": "Organization",
                "name": "Moksh Tubes & Fittings LLP"
            },
            "url": "https://www.mokshtubes.com/square-bars",
            "offers": {
                "@type": "AggregateOffer",
                "priceCurrency": "USD",
                "lowPrice": "1.5",
                "highPrice": "50",
                "offerCount": "100"
            }
        }]
        @endverbatim
    </script>
@endsection
