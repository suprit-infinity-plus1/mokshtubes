@extends('layouts.master')

@section('title', 'Fabricated SS Grills | Stainless Steel Window & Balcony Grills')
@section('meta_description', 'Custom fabricated SS grills for windows, balconies & gates. Durable stainless steel grill systems in 304 & 316 grades with modern designs.')
@section('meta_keywords', 'Fabricated SS Grills, stainless steel grills, SS window grills, SS balcony grills, decorative SS grills, custom steel grills')
@section('og_image', asset('assets/images/product/SS-grill.webp'))
@section('og_type', 'article')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/product/SS-grill.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Fabricated SS Grills<br>Stainless Steel Decorative & Security Systems</h1>

                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Fabricated Stainless Steel (SS) Grills are modern architectural solutions designed for security, ventilation, and aesthetic enhancement in residential, commercial, and industrial projects. Moksh Tubes & Fittings LLP manufactures custom SS grills using high-quality stainless steel, duplex alloys, and advanced fabrication techniques such as CNC cutting and laser processing. Our grills offer durability, corrosion resistance, and premium finishes suitable for indoor and outdoor applications across India and export markets.
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
                FABRICATED SS GRILLS
            </h3>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/product/SS-grill.webp') }}" alt="stainless steel window grill design"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4" style="text-align: justify;">
                            <strong class="text-black">Fabricated Stainless Steel Grills</strong> are essential components used for safety, protection, and design enhancement in modern infrastructure. These grills are widely installed in windows, balconies, staircases, doors, partitions, and industrial enclosures.
                        </p>

                        <p class="fs-6 mb-4" style="text-align: justify;">
                            Compared to traditional iron or wooden grills, stainless steel grills offer superior corrosion resistance, minimal maintenance, and long-term durability. They are designed to withstand harsh environmental conditions while maintaining their structural strength and visual appeal.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            At <strong style="color:black;"><a href="{{ url('/contact-us') }}">Moksh Tubes & Fittings LLP</a></strong>, we design and fabricate custom SS grills using advanced manufacturing techniques such as CNC cutting, laser cutting, and TIG welding. Our grills are engineered for both functional performance and architectural aesthetics, making them ideal for residential, commercial, and industrial applications.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download SS Grills Catalog</h3>
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
                <h2>2. Specifications of Fabricated SS Grills</h2>
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
                                <tr class="t-row"><td>Material</td><td>Stainless Steel, Duplex & Super Duplex, Mild Steel (hybrid)</td></tr>
                                <tr class="t-row"><td>Grades</td><td>ASTM / ASME compliant</td></tr>
                                <tr class="t-row"><td>Types</td><td>Window Grills, Door Grills, Balcony Grills, Partition Grills</td></tr>
                                <tr class="t-row"><td>Fabrication</td><td>CNC Cutting, Laser Cutting, TIG/MIG Welding</td></tr>
                                <tr class="t-row"><td>Finishes</td><td>Matte, Mirror, Brushed, Powder Coated, Antique</td></tr>
                                <tr class="t-row"><td>Dimensions</td><td>Fully customizable</td></tr>
                                <tr class="t-row"><td>Applications</td><td>Residential, Commercial, Industrial</td></tr>
                                <tr class="t-row"><td>Durability</td><td>Weatherproof, corrosion-resistant</td></tr>
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
                <h2 class="fw-bold" style="color: #174268;">3. Size & Weight Charts</h2>
            </div>
            
            <h4 class="text-center mb-3" style="color: #db7227;">Square & Rectangular Tube Weight Chart (kg/m)</h4>
            <div class="row justify-content-center mb-5">
                <div class="col-lg-10">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Section</th>
                                    <th>Size</th>
                                    <th>1.0 mm</th>
                                    <th>1.5 mm</th>
                                    <th>2.0 mm</th>
                                    <th>3.0 mm</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>Square</td><td>25×25</td><td>0.74</td><td>1.12</td><td>1.48</td><td>2.19</td></tr>
                                <tr class="t-row"><td>Square</td><td>50×50</td><td>1.53</td><td>2.32</td><td>3.10</td><td>4.63</td></tr>
                                <tr class="t-row"><td>Square</td><td>75×75</td><td>2.32</td><td>3.55</td><td>4.71</td><td>6.98</td></tr>
                                <tr class="t-row"><td>Rectangular</td><td>50×25</td><td>1.07</td><td>1.60</td><td>2.13</td><td>3.17</td></tr>
                                <tr class="t-row"><td>Rectangular</td><td>100×50</td><td>2.29</td><td>3.44</td><td>4.59</td><td>6.86</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <h4 class="text-center mb-3" style="color: #db7227;">Flat Bar Weight Reference</h4>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Size</th>
                                    <th>Thickness</th>
                                    <th>Weight (kg/m)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>25×5</td><td>5 mm</td><td>0.98</td></tr>
                                <tr class="t-row"><td>50×6</td><td>6 mm</td><td>2.36</td></tr>
                                <tr class="t-row"><td>75×8</td><td>8 mm</td><td>4.75</td></tr>
                                <tr class="t-row"><td>100×10</td><td>10 mm</td><td>7.85</td></tr>
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
                        <p><strong>304 / 304L:</strong> Residential & interior use<br><strong>316 / 316L:</strong> Outdoor & coastal applications<br><strong>310 / 321:</strong> High-temperature applications</p>
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
                        <p><strong>904L, SMO 254:</strong> Luxury & designer architectural grills</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="applications" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>5. Applications of Fabricated SS Grills</h2>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-3">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-house-door"></i></div>
                        <h5>1️⃣ Residential</h5>
                        <p>✔ Balcony & staircase grills<br>✔ Window & door grills<br>✔ Decorative interior partitions</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-building"></i></div>
                        <h5>2️⃣ Commercial</h5>
                        <p>✔ Office partitions & façade grills<br>✔ Entry gates & security grills</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cup-hot"></i></div>
                        <h5>3️⃣ Hospitality</h5>
                        <p>✔ Hotel interiors & designer panels<br>✔ Restaurant partitions & decorative screens</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear"></i></div>
                        <h5>4️⃣ Industrial & Institutional</h5>
                        <p>✔ Factory safety grills<br>✔ Ventilation & protective enclosures</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="uses" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>6. Uses & Advantages of Fabricated SS Grills</h2>
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
                        <h5>Long Lifespan</h5>
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
                        <h5>Custom Design Flexibility</h5>
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
                        <h5>Premium Aesthetic Appeal</h5>
                    </div>
                </div>
            </div>
            
            <p class="text-center mt-4">
                <strong>Uses:</strong> Security for windows, doors & balconies | Decorative architectural element | Ventilation with protection | Interior space partitioning | Durable outdoor applications
            </p>
        </div>
    </section>

    <section id="manufacturing" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Manufacturing Process of SS Grills</h2>
            </div>
            
            <div class="row mt-4 justify-content-center">
                <div class="col-md-8">
                    <div class="pe-md-3 text-center">
                        <p class="fs-6 text-start d-inline-block"><strong>Fabrication Steps:</strong><br><br>
                        1️⃣ Material selection (SS / Duplex)<br>
                        2️⃣ CNC / laser cutting<br>
                        3️⃣ Bending & shaping<br>
                        4️⃣ TIG/MIG welding<br>
                        5️⃣ Surface finishing & polishing<br>
                        6️⃣ Final inspection</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="mechanical" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">9. Mechanical Properties (Typical)</h2>
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
                        <p>Before selecting SS grills:<br>
                        ✔ Grade (304 vs 316 vs Duplex)<br>
                        ✔ Indoor vs outdoor use<br>
                        ✔ Design complexity (laser / simple)<br>
                        ✔ Thickness & strength requirement<br>
                        ✔ Finish preference<br>
                        ✔ Installation type</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-rulers"></i></div>
                        <h5>Dimensional Tolerances</h5>
                        <p><strong>Thickness:</strong> ±10%</p>
                        <p><strong>Length:</strong> ±5 mm</p>
                        <p><strong>Straightness:</strong> As per fabrication standards</p>
                        <p><strong>Surface Finish:</strong> As required</p>
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
                <strong>Industries We Serve:</strong> Residential Construction | Commercial Buildings | Hospitality Projects | Industrial Facilities | Infrastructure Projects
            </p>
            <p class="text-center mt-2">
                We also offer <strong class="text-dark"><a href="#">SS Railing Products</a></strong>, <a href="#">Glass Railings</a>, and <strong class="text-dark"><a href="#">Stainless Steel Pipes</a></strong>.
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
                        <h5>Expert fabrication team</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-tools"></i></div>
                        <h5>Premium-grade materials</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-boxes"></i></div>
                        <h5>Custom design capability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Fast delivery & export support</h5>
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
                                <h4>Q1. Why choose SS grills over iron?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    SS grills are rust-proof, durable, and low maintenance.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Q2. Can SS grills be customized?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Yes, fully customizable designs and sizes.
                                </p>
                            </div>
                        </div>
                        
                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Q3. Which grade is best?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    304 for indoor, 316 for outdoor, Duplex for harsh environments.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Q4. Are they suitable for outdoor use?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Yes, highly weather-resistant.
                                </p>
                            </div>
                        </div>
                        
                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Q5. Do they require maintenance?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Minimal cleaning required.
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
                    Looking for high-quality fabricated SS grills?<br>
                    📞 Contact Moksh Tubes & Fittings LLP at +91 97695 84950<br>
                    We deliver custom-designed stainless steel grills combining security, durability, and modern aesthetics.
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
            "name": "Fabricated SS Grills",
            "description": "Custom fabricated SS grills for windows, balconies & gates. Durable stainless steel grill systems in 304 & 316 grades with modern designs.",
            "brand": {
                "@type": "Brand",
                "name": "Moksh Tubes & Fittings LLP"
            },
            "manufacturer": {
                "@type": "Organization",
                "name": "Moksh Tubes & Fittings LLP"
            },
            "material": "Stainless Steel, Duplex & Super Duplex, Mild Steel",
            "url": "https://www.mokshtubes.com/products/special-fabricated/fabricated-ss-grills",
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
                "name": "Why choose SS grills over iron?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "SS grills are rust-proof, durable, and low maintenance."
                }
            },{
                "@type": "Question",
                "name": "Which grade is best?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "304 for indoor, 316 for outdoor, Duplex for harsh environments."
                }
            },{
                "@type": "Question",
                "name": "Are they suitable for outdoor use?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, highly weather-resistant."
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
                "name": "Fabricated SS Grills",
                "item": "https://www.mokshtubes.com/products/special-fabricated/fabricated-ss-grills"
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
