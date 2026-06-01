@extends('layouts.master')

@section('title', 'Custom Steel Furniture | Stainless Steel & Industrial Furniture')
@section('meta_description', 'Custom steel furniture for homes, offices & industries. Durable stainless steel & MS furniture with modern designs and high strength.')
@section('meta_keywords', 'Custom Steel Furniture, steel furniture, stainless steel furniture, industrial furniture, custom metal furniture, steel office furniture')
@section('og_image', asset('assets/images/product/steel-furniture/custom-steel-furniture.webp'))
@section('og_type', 'article')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/product/steel-furniture/custom-steel-furniture.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Custom Steel Furniture<br>Stainless Steel, Mild Steel & Industrial Solutions</h1>

                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Custom Steel Furniture is a modern solution combining durability, functionality, and design flexibility for residential, commercial, and industrial applications. Moksh Tubes & Fittings LLP manufactures high-quality custom steel furniture using stainless steel, mild steel, and advanced fabrication techniques such as CNC cutting and laser processing. Our furniture solutions are corrosion-resistant, structurally strong, and fully customizable to suit diverse architectural and industrial requirements across India and export markets.
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
                CUSTOM STEEL FURNITURE
            </h3>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/product/steel-furniture/custom-steel-furniture.webp') }}" alt="custom stainless steel furniture design"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4" style="text-align: justify;">
                            <strong class="text-black">Custom Steel Furniture</strong> represents a perfect blend of strength, durability, and design innovation. Unlike standard furniture, custom steel furniture is engineered to meet specific functional requirements, space constraints, and aesthetic preferences.
                        </p>

                        <p class="fs-6 mb-4" style="text-align: justify;">
                            Steel furniture offers superior performance compared to wood or plastic, with higher load-bearing capacity, corrosion resistance, and longer lifespan. It can be seamlessly combined with materials like glass, wood, and stone to create modern, industrial, or luxury designs.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            At <strong style="color:black;"><a href="{{ url('/contact-us') }}">Moksh Tubes & Fittings LLP</a></strong>, we design and fabricate customized steel furniture solutions including tables, chairs, workstations, cabinets, storage systems, and industrial furniture. Using advanced fabrication methods and premium-grade materials, we deliver products that ensure long-term reliability and visual appeal.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Custom Steel Furniture Catalog</h3>
            <p class="mb-3">
                Get the complete catalog including material specifications, design options, and application guidelines. Enter your email to receive the PDF instantly.
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
                <h2>2. Specifications</h2>
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
                                <tr class="t-row"><td>Material</td><td>Stainless Steel, Mild Steel, Carbon Steel, Duplex & Super Duplex</td></tr>
                                <tr class="t-row"><td>Grades</td><td>ASTM / ASME compliant</td></tr>
                                <tr class="t-row"><td>Types</td><td>Tables, Chairs, Cabinets, Workstations, Shelves, Storage Units</td></tr>
                                <tr class="t-row"><td>Finishes</td><td>Matte, Mirror, Brushed, Powder Coated, Painted, Antique</td></tr>
                                <tr class="t-row"><td>Fabrication</td><td>CNC Cutting, Laser Cutting, TIG/MIG Welding</td></tr>
                                <tr class="t-row"><td>Dimensions</td><td>Fully customizable</td></tr>
                                <tr class="t-row"><td>Applications</td><td>Residential, Commercial, Industrial</td></tr>
                                <tr class="t-row"><td>Durability</td><td>Rust-resistant, termite-proof, long-lasting</td></tr>
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
                <h2 class="fw-bold" style="color: #174268;">3. Size & Weight Chart</h2>
            </div>
            
            <h4 class="text-center mb-3" style="color: #db7227;">Standard Sections & Weight Reference</h4>
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row"><th>Furniture</th><th>Section</th><th>Size</th><th>Thickness (mm)</th><th>Weight (kg/m)</th></tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>Chairs</td><td>Round Tube</td><td>Ø19–25</td><td>1.2–1.5</td><td>0.60–0.95</td></tr>
                                <tr class="t-row"><td>Tables</td><td>Square Tube</td><td>40×40</td><td>1.5–2.0</td><td>1.50–2.00</td></tr>
                                <tr class="t-row"><td>Racks</td><td>Square Tube</td><td>50×50</td><td>2.0–3.0</td><td>2.47–3.70</td></tr>
                                <tr class="t-row"><td>Beds</td><td>Rectangular</td><td>75×40</td><td>1.5–2.0</td><td>2.30–2.90</td></tr>
                                <tr class="t-row"><td>Cabinets</td><td>Square Tube</td><td>25×25</td><td>1.0–1.5</td><td>0.75–1.10</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <h4 class="text-center mb-3" style="color: #db7227;">Example – Storage Rack Load Chart</h4>
            <div class="row justify-content-center mb-5">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row"><th>Size (mm)</th><th>Section Type</th><th>1.0 mm (kg/m)</th><th>2.0 mm (kg/m)</th><th>3.0 mm (kg/m)</th><th>4.0 mm (kg/m)</th><th>5.0 mm (kg/m)</th><th>6.0 mm (kg/m)</th><th>8.0 mm (kg/m)</th></tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>25×25</td><td>Square (SHS)</td><td>0.60</td><td>1.18</td><td>1.75</td><td>2.32</td><td>2.90</td><td>3.47</td><td>4.62</td></tr>
                                <tr class="t-row"><td>40×40</td><td>Square (SHS)</td><td>0.95</td><td>1.85</td><td>2.75</td><td>3.65</td><td>4.55</td><td>5.45</td><td>7.25</td></tr>
                                <tr class="t-row"><td>50×50</td><td>Square (SHS)</td><td>1.20</td><td>2.35</td><td>3.50</td><td>4.65</td><td>5.80</td><td>6.95</td><td>9.25</td></tr>
                                <tr class="t-row"><td>60×40</td><td>Rectangular (RHS)</td><td>1.10</td><td>2.10</td><td>3.15</td><td>4.20</td><td>5.25</td><td>6.30</td><td>8.40</td></tr>
                                <tr class="t-row"><td>75×40</td><td>Rectangular (RHS)</td><td>1.35</td><td>2.60</td><td>3.90</td><td>5.20</td><td>6.50</td><td>7.80</td><td>10.40</td></tr>
                                <tr class="t-row"><td>100×50</td><td>Rectangular (RHS)</td><td>1.80</td><td>3.50</td><td>5.25</td><td>7.00</td><td>8.75</td><td>10.50</td><td>14.00</td></tr>
                                <tr class="t-row"><td>120×60</td><td>Rectangular (RHS)</td><td>2.20</td><td>4.30</td><td>6.40</td><td>8.55</td><td>10.70</td><td>12.85</td><td>17.10</td></tr>
                                <tr class="t-row"><td>150×75</td><td>Rectangular (RHS)</td><td>2.80</td><td>5.40</td><td>8.10</td><td>10.80</td><td>13.50</td><td>16.20</td><td>21.60</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <h4 class="text-center mb-3" style="color: #db7227;">Load Capacity Reference</h4>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row"><th>Section</th><th>Size</th><th>Load Capacity</th><th>Application</th></tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>Square Tube</td><td>50×50</td><td>150–250 kg</td><td>Industrial racks</td></tr>
                                <tr class="t-row"><td>Rectangular</td><td>75×40</td><td>250–500 kg</td><td>Warehouse</td></tr>
                                <tr class="t-row"><td>Sheet Shelf</td><td>Custom</td><td>50–150 kg</td><td>Home / Office</td></tr>
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
                <h2>4. Grades Available</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Stainless Steel Grades</h5>
                        <p><strong>304 / 304L:</strong> Interior & premium furniture<br><strong>316 / 316L:</strong> Outdoor & corrosion-resistant</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Carbon & Mild Steel</h5>
                        <p><strong>IS 2062, ASTM A36:</strong> Cost-effective structural furniture</p>
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
                        <h5>High-Performance Alloys</h5>
                        <p><strong>904L, SMO 254, AL-6XN:</strong> Luxury & industrial-grade furniture</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="applications" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>5. Applications of Custom Steel Furniture</h2>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-house-door"></i></div>
                        <h5>1️⃣ Residential</h5>
                        <p>✔ Dining tables, beds, wardrobes<br>✔ Kitchen & storage units<br>✔ Outdoor furniture</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-building"></i></div>
                        <h5>2️⃣ Commercial</h5>
                        <p>✔ Office desks & workstations<br>✔ Filing cabinets & shelving<br>✔ Retail display furniture</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cup-hot"></i></div>
                        <h5>3️⃣ Hospitality</h5>
                        <p>✔ Restaurant tables & café seating<br>✔ Hotel furniture & bar counters</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-tools"></i></div>
                        <h5>4️⃣ Industrial & Workshop</h5>
                        <p>✔ Workbenches & tool storage<br>✔ Warehouse racks & carts</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-book"></i></div>
                        <h5>5️⃣ Institutional</h5>
                        <p>✔ School & lab furniture<br>✔ Library & dormitory solutions</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="uses" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>6. Uses & Advantages of Custom Steel Furniture</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-arrow-up-circle"></i></div>
                        <h5>Long Lifespan</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-shaded"></i></div>
                        <h5>Corrosion & Termite Resistance</h5>
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
                        <div class="advantage-icon"><i class="bi bi-box-seam"></i></div>
                        <h5>High Load-Bearing Capacity</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-tree"></i></div>
                        <h5>Eco-Friendly Material</h5>
                    </div>
                </div>
                
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-brush"></i></div>
                        <h5>Design Versatility</h5>
                    </div>
                </div>
            </div>
            
            <p class="text-center mt-4">
                <strong>Uses:</strong> Provides strong structural support | Enhances interior aesthetics | Supports modular & space-saving designs | Suitable for hygienic environments | Integrates with glass, wood & stone
            </p>
        </div>
    </section>

    <section id="manufacturing" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Manufacturing Process & Quality Control</h2>
            </div>
            
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6" style="text-align: justify;"><strong>Fabrication Process:</strong></p>
                        <p>1️⃣ Material selection</p>
                        <p>2️⃣ CNC / laser cutting</p>
                        <p>3️⃣ Bending & shaping</p>
                        <p>4️⃣ Welding (TIG/MIG)</p>
                        <p>5️⃣ Surface finishing (powder coating / polishing)</p>
                        <p>6️⃣ Assembly & inspection</p>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6" style="text-align: justify;"><strong>Testing & Quality Control:</strong></p>
                        <p>Each Custom Steel Furniture unit undergoes strict inspection including:</p>
                        <p>✔ Weld strength testing</p>
                        <p>✔ Dimensional inspection</p>
                        <p>✔ Surface finish testing</p>
                        <p>✔ Load capacity checks</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="mechanical" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">9. Mechanical Properties</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h4 class="text-center mb-3" style="color: #db7227;">Typical Mechanical Properties</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Material</th>
                                    <th>Tensile Strength (MPa)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>Stainless Steel 304</td><td>515</td></tr>
                                <tr class="t-row"><td>Stainless Steel 316</td><td>515</td></tr>
                                <tr class="t-row"><td>Mild Steel</td><td>400–550</td></tr>
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
                        <p>Before selecting furniture:<br>
                        ✔ Material type (SS / MS / Duplex)<br>
                        ✔ Load-bearing requirement<br>
                        ✔ Indoor vs outdoor use<br>
                        ✔ Finish preference<br>
                        ✔ Design customization<br>
                        ✔ Modular or fixed installation</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-rulers"></i></div>
                        <h5>Dimensional Tolerances</h5>
                        <p><strong>Thickness:</strong> ±10%</p>
                        <p><strong>Length:</strong> ±5 mm</p>
                        <p><strong>Alignment:</strong> ±3 mm</p>
                        <p><strong>Finish:</strong> As per requirement</p>
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
                <strong>Industries We Serve:</strong> Residential Projects | Commercial Offices | Hospitality Sector | Industrial Facilities | Educational Institutions
            </p>
            <p class="text-center mt-2">
                We also offer <a href="#">Fabricated SS Grills</a>, <a href="#">SS Railing Products</a>, and <a href="#">Glass Railings</a>.
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
                        <div class="why-banner-icon"><i class="bi bi-tools"></i></div>
                        <h5>Custom fabrication expertise</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Premium-grade materials</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-brush"></i></div>
                        <h5>Wide design flexibility</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-clock-history"></i></div>
                        <h5>Reliable delivery timelines</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-tags"></i></div>
                        <h5>Competitive pricing</h5>
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
                                <h4>Q1. Why choose steel over wood?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Steel is stronger, termite-proof, and long-lasting.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Q2. Can furniture be customized?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Yes, fully tailored designs are available.
                                </p>
                            </div>
                        </div>
                        
                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Q3. Is steel furniture suitable for homes?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Yes, widely used in residential and modern interiors.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Q4. Will it rust?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    No, with proper grade and finish.
                                </p>
                            </div>
                        </div>
                        
                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Q5. Is it heavy?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Can be designed lightweight and modular.
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
                    Looking for custom steel furniture solutions?<br>
                    📞 Contact Moksh Tubes & Fittings LLP at +91 97695 84950<br>
                    We design and deliver durable, modern, and fully customized steel furniture for all applications.
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
            "name": "Custom Steel Furniture",
            "description": "Custom steel furniture for homes, offices & industries. Durable stainless steel & MS furniture with modern designs and high strength.",
            "brand": {
                "@type": "Brand",
                "name": "Moksh Tubes & Fittings LLP"
            },
            "manufacturer": {
                "@type": "Organization",
                "name": "Moksh Tubes & Fittings LLP"
            },
            "material": "Stainless Steel, Mild Steel, Carbon Steel",
            "url": "https://www.mokshtubes.com/products/special-fabricated/custom-steel-furniture",
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
                "name": "Why choose steel over wood?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "Steel is stronger, termite-proof, and long-lasting."
                }
            },{
                "@type": "Question",
                "name": "Can furniture be customized?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, fully tailored designs are available."
                }
            },{
                "@type": "Question",
                "name": "Is steel furniture suitable for homes?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, widely used in residential and modern interiors."
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
                "name": "Custom Steel Furniture",
                "item": "https://www.mokshtubes.com/products/special-fabricated/custom-steel-furniture"
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
