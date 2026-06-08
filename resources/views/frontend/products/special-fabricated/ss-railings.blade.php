@extends('layouts.master')

@section('title', 'SS Railing Products | Stainless Steel Balcony & Staircase Railings')
@section('meta_description', 'Premium SS railing products including balcony, staircase & glass railings. Durable stainless steel railing systems in 304 & 316 grades.')
@section('meta_keywords', 'SS Railing Products, SS railing design, Stainless steel railing, SS balcony railing, SS staircase railing, SS glass railing')
@section('og_image', asset('assets/images/product/SS-railings.webp'))
@section('og_type', 'article')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/product/SS-railings.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>SS Railing Products<br>Stainless Steel Railing Systems</h1>

                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Stainless Steel (SS) Railing Products are modern architectural solutions designed for safety, durability, and aesthetic appeal in residential, commercial, and industrial projects. Moksh Tubes & Fittings LLP supplies high-quality SS railing systems including modular railings, handrails, balusters, posts, and glass-supported railing systems in grades 304, 316, duplex, and premium alloys. Our railing solutions offer corrosion resistance, structural strength, and long service life for indoor and outdoor applications across India and export markets.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

    <!-- Start Material Tabs -->
    <div class="sticky-top bg-white border-bottom material-tabs w-100">
        <div class="container">
            <a href="#overview">Overview</a> |
            <a href="#specifications">Specifications</a> |
            <a href="#size-weight">Size & Weight</a> |
            <a href="#grades">Grades</a> |
            <a href="#applications">Applications</a> |
            <a href="#buying-guide">Buying Guide</a> |
            <a href="#manufacturing">Manufacturing</a> |
            <a href="#mechanical">Properties</a> |
            <a href="#tolerances">Tolerances</a> |
            <a href="#export">Packaging & Exports</a> |
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
                SS RAILING PRODUCTS
            </h3>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/product/SS-railings.webp') }}" alt="SS railing design balcony stainless steel"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4" style="text-align: justify;">
                            <strong class="text-black">Stainless Steel Railing Products</strong> are essential structural and decorative components used in modern architecture for safety, support, and design enhancement. These railings are widely installed in staircases, balconies, terraces, walkways, and commercial infrastructure.
                        </p>

                        <p class="fs-6 mb-4" style="text-align: justify;">
                            Compared to traditional materials like wood or mild steel, SS railings offer superior corrosion resistance, minimal maintenance, and long-term durability. They are suitable for both indoor and outdoor applications, including coastal and high-humidity environments.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            At <strong style="color:black;"><a href="{{ url('/contact-us') }}">Moksh Tubes & Fittings LLP</a></strong>, we manufacture and supply premium-grade SS railing systems including modular railings, SS glass railing systems, handrails, balusters, clamps, and connectors. Our products comply with international standards and are designed to meet architectural, structural, and safety requirements.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download SS Railing Catalog</h3>
            <p class="mb-3">
                Get the complete catalog including material specifications, dimensions, and design options. Enter your email to receive the PDF instantly.
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
                            Get Catalog
                        </button>
                    </div>
                </div>
            </form>

            @if (session('success'))
                <div class="alert alert-success mt-3">
                    {{ session('success') }}
                </div>
            @endif
        </div>
    </section>

    <section id="specifications" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Specifications of SS Railing Products</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Category</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>Material</td><td>Stainless Steel (304, 304L, 316, 316L), Duplex & Super Duplex</td></tr>
                                <tr class="t-row"><td>Types</td><td>Modular Railings, Handrails, Balusters, Posts, Clamps, Spigots</td></tr>
                                <tr class="t-row"><td>Finishes</td><td>Matte, Mirror, Satin, Brushed, Powder Coated</td></tr>
                                <tr class="t-row"><td>OD Range</td><td>12.7 mm to 168.3 mm</td></tr>
                                <tr class="t-row"><td>Thickness</td><td>1.0 mm to 3.5 mm</td></tr>
                                <tr class="t-row"><td>Mounting</td><td>Top Mounted, Side Mounted, Glass Supported</td></tr>
                                <tr class="t-row"><td>Applications</td><td>Staircases, Balconies, Decks, Pool Areas</td></tr>
                                <tr class="t-row"><td>Customization</td><td>Fully customizable designs & dimensions</td></tr>
                                <tr class="t-row"><td>Durability</td><td>Corrosion-resistant, weatherproof</td></tr>
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
                <h2 class="fw-bold" style="color: #174268;">Size & Weight Chart – SS Railing Tubes</h2>
            </div>
            
            <p class="text-center mb-3 text-muted">Stainless Steel Railing Tube Weight Chart (Grade 304/316, Density 7.93 g/cm³ – SS railing pipe weight per meter)</p>
            
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>OD (mm)</th>
                                    <th>Inches</th>
                                    <th>1.0 mm (kg/m)</th>
                                    <th>1.2 mm (kg/m)</th>
                                    <th>1.5 mm (kg/m)</th>
                                    <th>2.0 mm (kg/m)</th>
                                    <th>2.5 mm (kg/m)</th>
                                    <th>3.0 mm (kg/m)</th>
                                    <th>3.5 mm (kg/m)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>12.7</td><td>½”</td><td>0.25</td><td>0.30</td><td>0.37</td><td>0.49</td><td>0.61</td><td>0.73</td><td>0.85</td></tr>
                                <tr class="t-row"><td>15.88</td><td>⅝”</td><td>0.32</td><td>0.38</td><td>0.48</td><td>0.63</td><td>0.78</td><td>0.92</td><td>1.07</td></tr>
                                <tr class="t-row"><td>19.05</td><td>¾”</td><td>0.38</td><td>0.46</td><td>0.58</td><td>0.77</td><td>0.95</td><td>1.13</td><td>1.30</td></tr>
                                <tr class="t-row"><td>25.4</td><td>1”</td><td>0.51</td><td>0.59</td><td>0.72</td><td>0.95</td><td>1.17</td><td>1.39</td><td>1.60</td></tr>
                                <tr class="t-row"><td>31.8</td><td>1¼”</td><td>0.65</td><td>0.75</td><td>0.95</td><td>1.24</td><td>1.53</td><td>1.81</td><td>2.08</td></tr>
                                <tr class="t-row"><td>38.1</td><td>1½”</td><td>0.79</td><td>0.91</td><td>1.14</td><td>1.50</td><td>1.86</td><td>2.21</td><td>2.56</td></tr>
                                <tr class="t-row"><td>42.4</td><td>1.67”</td><td>0.88</td><td>1.02</td><td>1.28</td><td>1.68</td><td>2.07</td><td>2.46</td><td>2.84</td></tr>
                                <tr class="t-row"><td>48.3</td><td>1.9”</td><td>1.01</td><td>1.17</td><td>1.47</td><td>1.94</td><td>2.40</td><td>2.86</td><td>3.31</td></tr>
                                <tr class="t-row"><td>50.8</td><td>2”</td><td>1.05</td><td>1.22</td><td>1.53</td><td>2.00</td><td>2.47</td><td>2.93</td><td>3.38</td></tr>
                                <tr class="t-row"><td>63.5</td><td>2½”</td><td>1.29</td><td>1.54</td><td>1.93</td><td>2.52</td><td>3.10</td><td>3.68</td><td>4.25</td></tr>
                                <tr class="t-row"><td>76.2</td><td>3”</td><td>1.55</td><td>1.86</td><td>2.34</td><td>3.04</td><td>3.73</td><td>4.41</td><td>5.08</td></tr>
                                <tr class="t-row"><td>88.9</td><td>3½”</td><td>1.81</td><td>2.18</td><td>2.73</td><td>3.55</td><td>4.36</td><td>5.16</td><td>5.95</td></tr>
                                <tr class="t-row"><td>101.6</td><td>4”</td><td>2.07</td><td>2.49</td><td>3.14</td><td>4.07</td><td>5.00</td><td>5.92</td><td>6.83</td></tr>
                                <tr class="t-row"><td>114.3</td><td>4½”</td><td>2.34</td><td>2.81</td><td>3.55</td><td>4.60</td><td>5.65</td><td>6.69</td><td>7.73</td></tr>
                                <tr class="t-row"><td>127</td><td>5”</td><td>2.60</td><td>3.13</td><td>3.95</td><td>5.12</td><td>6.28</td><td>7.44</td><td>8.59</td></tr>
                                <tr class="t-row"><td>141.3</td><td>5½”</td><td>2.89</td><td>3.47</td><td>4.38</td><td>5.69</td><td>6.99</td><td>8.29</td><td>9.59</td></tr>
                                <tr class="t-row"><td>168.3</td><td>6”</td><td>3.44</td><td>4.14</td><td>5.23</td><td>6.81</td><td>8.38</td><td>9.95</td><td>11.5</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="grades" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Grades Available</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Stainless Steel Grades</h5>
                        <p><strong>304 / 304L:</strong> Interior & standard applications<br><strong>316 / 316L:</strong> Marine & outdoor applications</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gem"></i></div>
                        <h5>Duplex & Super Duplex</h5>
                        <p><strong>2205, S31803, S32750:</strong> High strength & corrosion resistance</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-award-fill"></i></div>
                        <h5>Premium Alloys</h5>
                        <p><strong>904L, SMO 254:</strong> Luxury & high-end architectural projects</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="applications" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of SS Railing Products</h2>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-3">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-house-door"></i></div>
                        <h5>Residential</h5>
                        <p>✔ Staircase railings<br>✔ Balcony & terrace railings<br>✔ Deck & patio railings</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-building"></i></div>
                        <h5>Commercial</h5>
                        <p>✔ Office buildings & malls<br>✔ Airports & metro stations<br>✔ Showrooms & glass partitions</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cup-hot"></i></div>
                        <h5>Hospitality</h5>
                        <p>✔ Hotels & resorts<br>✔ Poolside railings<br>✔ Rooftop enclosures</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-truck"></i></div>
                        <h5>Industrial & Public</h5>
                        <p>✔ Factories & warehouses<br>✔ Hospitals & institutions<br>✔ Government buildings</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="uses" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2> Uses & Advantages of SS Railing Products</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-shaded"></i></div>
                        <h5>High Corrosion Resistance</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-arrow-up-circle"></i></div>
                        <h5>Long Service Life</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-wrench"></i></div>
                        <h5>Low Maintenance</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gem"></i></div>
                        <h5>Modern Aesthetic Appeal</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-layers"></i></div>
                        <h5>High Strength & Durability</h5>
                    </div>
                </div>
                
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-tree"></i></div>
                        <h5>Eco-Friendly & Recyclable</h5>
                    </div>
                </div>
            </div>
            
            <p class="text-center mt-4">
                <strong>Uses:</strong> Safety support for staircases & balconies | Enhances modern architectural aesthetics | Suitable for indoor & outdoor use | Compatible with glass, wood & hybrid designs | Provides structural stability in public spaces
            </p>
        </div>
    </section>

    <section id="manufacturing" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Manufacturing Process of SS Railing Systems</h2>
            </div>
            
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6" style="text-align: justify;"><strong>Tube Manufacturing:</strong></p>
                        <p>Stainless steel raw material selection</p>
                        <p>Tube forming (seamless / welded)</p>
                        <p>Polishing & finishing</p>
                        <p>Cutting & fabrication</p>
                        <p>Assembly & inspection</p>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6" style="text-align: justify;"><strong>Railing Fabrication:</strong></p>
                        <p>Design & customization</p>
                        <p>Component cutting & welding</p>
                        <p>Surface finishing (mirror / satin)</p>
                        <p>Assembly of fittings & accessories</p>
                        <p>Final inspection & packaging</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="mechanical" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Mechanical Properties (Typical SS Grades)</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Grade</th>
                                    <th>Tensile Strength (MPa)</th>
                                    <th>Yield Strength (MPa)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>SS 304</td><td>515</td><td>205</td></tr>
                                <tr class="t-row"><td>SS 316</td><td>515</td><td>205</td></tr>
                                <tr class="t-row"><td>Duplex 2205</td><td>620</td><td>450</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="buying-guide" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="row mt-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-card-checklist"></i></div>
                        <h5>Buying Guide</h5>
                        <p>Before selecting SS railings:<br>
                        ✔ Grade (304 vs 316)<br>
                        ✔ Indoor vs outdoor use<br>
                        ✔ Design type (glass / modular / cable)<br>
                        ✔ Thickness & strength requirement<br>
                        ✔ Finish (mirror / matte / powder coated)<br>
                        ✔ Installation method</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-rulers"></i></div>
                        <h5>Dimensional Tolerances</h5>
                        <p><strong>OD Tolerance:</strong> ±1%</p>
                        <p><strong>Thickness:</strong> ±10%</p>
                        <p><strong>Length:</strong> ±5 mm</p>
                        <p><strong>Surface Finish:</strong> As per customer requirement</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Exports & Supply Coverage</h5>
                        <p><strong>Pan-India:</strong> Mumbai, Pune, Ahmedabad, Bangalore, Chennai, Hyderabad</p>
                        <p><strong>Export Markets:</strong> UAE, Saudi Arabia, Qatar, Oman, Kuwait</p>
                    </div>
                </div>
            </div>
            
            <p class="text-center mt-4">
                <strong>Industries We Serve:</strong> Residential Construction | Commercial Infrastructure | Hospitality | Industrial Projects | Public Infrastructure
            </p>
            <p class="text-center mt-2">
                We also offer <strong class="text-dark"><a href="#">Stainless Steel Pipes</a></strong>, <a href="#">Seamless Pipes</a>, and <strong class="text-dark"><a href="#">Duplex Steel Products</a></strong>.
            </p>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container text-center">
            <div class="section-title center">
                <h2>Why Choose Moksh Tubes & Fittings LLP?</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Premium quality materials</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-tools"></i></div>
                        <h5>Custom design capability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-boxes"></i></div>
                        <h5>Wide product range</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Fast delivery & export support</h5>
                    </div>
                </div>
                
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-tags"></i></div>
                        <h5>Competitive pricing</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe"></i></div>
                        <h5>Trusted supplier for global projects</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Start faq content area-->
    <section id="faq" class="faq-content-area sec-padd2 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="accordion-box">
                        <div class="section-title center">
                            <h2>Frequently Asked Questions (FAQ)</h2>
                        </div>

                        <!-- Q1 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Q1. Which SS grade is best for railings?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    304 for indoor, 316 for outdoor/marine.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Q2. Are SS railings rust-proof?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Yes, stainless steel offers excellent corrosion resistance.
                                </p>
                            </div>
                        </div>
                        
                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Q3. Can SS railings be customized?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Yes, fully customizable designs are available.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Q4. What finishes are available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Mirror, matte, satin, brushed, powder-coated.
                                </p>
                            </div>
                        </div>
                        
                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Q5. Are SS railings suitable for outdoor use?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Yes, especially SS 316 and duplex grades.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End faq content area-->

    <!-- Contact Section -->
    <section id="contact-us" class="sec-padd-bottom">
        <div class="container">
            <div class="contact-cta-box">
                <h2>REQUEST A QUOTE</h2>
                <p>
                    Looking for premium SS railing systems for your project?<br>
                    📞 Contact Moksh Tubes & Fittings LLP at +91 97695 84950<br>
                    We deliver durable, modern, and custom stainless steel railing solutions for residential and commercial applications.
                </p>
                <!-- Call button -->
                <a href="javascript:void(0);" class="contact-cta-btn" data-bs-toggle="modal"
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
                "contactType": "sales",
                "areaServed": ["IN","AE","SA","QA","OM","KW"],
                "availableLanguage": ["English"]
            }
        },
        {
            "@context": "https://schema.org",
            "@type": "Product",
            "name": "SS Railing Products",
            "description": "Premium SS railing products including balcony, staircase & glass railings. Durable stainless steel railing systems in 304 & 316 grades.",
            "brand": {
                "@type": "Brand",
                "name": "Moksh Tubes & Fittings LLP"
            },
            "manufacturer": {
                "@type": "Organization",
                "name": "Moksh Tubes & Fittings LLP"
            },
            "material": "Stainless Steel (304, 304L, 316, 316L), Duplex & Super Duplex",
            "url": "https://www.mokshtubes.com/products/special-fabricated/ss-railings",
            "offers": {
                "@type": "Offer",
                "availability": "https://schema.org/InStock",
                "priceCurrency": "INR",
                "url": "https://www.mokshtubes.com/contact-us"
            }
        },
        {
            "@context": "https://schema.org",
            "@type": "FAQPage",
            "mainEntity": [{
                "@type": "Question",
                "name": "Which SS grade is best for railings?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "304 for indoor, 316 for outdoor/marine."
                }
            },{
                "@type": "Question",
                "name": "Are SS railings rust-proof?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, stainless steel offers excellent corrosion resistance."
                }
            },{
                "@type": "Question",
                "name": "Are SS railings suitable for outdoor use?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, especially SS 316 and duplex grades."
                }
            }]
        },
        {
            "@context": "https://schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": [{
                "@type": "ListItem",
                "position": 1,
                "name": "Home",
                "item": "https://www.mokshtubes.com"
            },{
                "@type": "ListItem",
                "position": 2,
                "name": "Special Fabricated",
                "item": "https://www.mokshtubes.com/products/special-fabricated"
            },{
                "@type": "ListItem",
                "position": 3,
                "name": "SS Railings",
                "item": "https://www.mokshtubes.com/products/special-fabricated/ss-railings"
            }]
        },
        {
            "@context": "https://schema.org",
            "@type": "LocalBusiness",
            "name": "Moksh Tubes & Fittings LLP",
            "address": {
                "@type": "PostalAddress",
                "addressCountry": "India"
            },
            "areaServed": ["India","UAE","Saudi Arabia","Qatar","Oman","Kuwait"],
            "telephone": "+91-97695-84950"
        }]
        @endverbatim
    </script>
@endsection
