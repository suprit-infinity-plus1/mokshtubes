@extends('layouts.master')

@section('title', 'Glass Railings | Frameless Balcony & Staircase Glass Railing')
@section('meta_description', 'Premium glass railings with toughened & laminated glass. Frameless balcony & staircase railing systems with SS hardware. India & export supply.')
@section('meta_keywords', 'Glass Railings, frameless glass railing, glass balcony railing, glass staircase railing, toughened glass railing, glass railing systems')
@section('og_image', asset('assets/images/product/Glass-railing.webp'))
@section('og_type', 'article')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/product/Glass-railing.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Glass Railings<br>Frameless, Toughened & Laminated Systems</h1>

                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Glass Railings are modern architectural solutions designed to provide safety, transparency, and aesthetic appeal in residential, commercial, and hospitality projects. Moksh Tubes & Fittings LLP offers premium-quality glass railing systems including frameless, semi-framed, and fully framed designs using toughened and laminated glass with stainless steel and aluminium hardware. Our systems ensure durability, structural safety, and a sleek contemporary finish for indoor and outdoor applications across India and export markets.
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
                GLASS RAILINGS
            </h3>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/product/Glass-railing.webp') }}" alt="frameless glass railing balcony design"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4" style="text-align: justify;">
                            <strong class="text-black">Glass Railings</strong> are an essential element in contemporary architecture, combining safety with elegance and unobstructed visibility. Unlike traditional railing systems, glass railings create an open and spacious feel, allowing natural light to flow freely while maintaining structural protection.
                        </p>

                        <p class="fs-6 mb-4" style="text-align: justify;">
                            These railing systems are widely used in balconies, staircases, terraces, pool areas, and commercial buildings. They are engineered using toughened or laminated safety glass along with high-quality stainless steel or aluminium fittings to ensure long-term durability and safety.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            At <strong style="color:black;"><a href="{{ url('/contact-us') }}">Moksh Tubes & Fittings LLP</a></strong>, we design, fabricate, and supply customized glass railing systems tailored to architectural requirements. Our solutions comply with international safety standards and are suitable for residential, commercial, and high-end luxury projects.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Glass Railings Catalog</h3>
            <p class="mb-3">
                Get the complete catalog including material specifications, hardware options, and installation guidelines. Enter your email to receive the PDF instantly.
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
                                <tr class="t-row"><td>Material</td><td>Toughened Glass, Laminated Glass, Stainless Steel (304/316), Aluminium</td></tr>
                                <tr class="t-row"><td>Glass Thickness</td><td>10 mm to 20 mm</td></tr>
                                <tr class="t-row"><td>Types</td><td>Frameless, Semi-Framed, Fully Framed, Spigot Mounted, Post Mounted</td></tr>
                                <tr class="t-row"><td>Finishes</td><td>Clear, Frosted, Tinted, Etched, Sandblasted</td></tr>
                                <tr class="t-row"><td>Hardware</td><td>Clamps, Spigots, Channels, Handrails</td></tr>
                                <tr class="t-row"><td>Applications</td><td>Balconies, Staircases, Pool Areas, Commercial Spaces</td></tr>
                                <tr class="t-row"><td>Mounting</td><td>Top Mounted, Side Mounted, Channel Mounted</td></tr>
                                <tr class="t-row"><td>Durability</td><td>Impact-resistant, weatherproof, long-lasting</td></tr>
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
            
            <h4 class="text-center mb-3" style="color: #db7227;">Stainless Steel Support Pipe Weight Chart</h4>
            <div class="row justify-content-center mb-5">
                <div class="col-lg-10">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row"><th>OD (mm)</th><th>Inch</th><th>1.0 mm (kg/m)</th><th>1.5 mm (kg/m)</th><th>2.0 mm (kg/m)</th><th>3.0 mm (kg/m)</th></tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>12.7</td><td>½”</td><td>0.25</td><td>0.37</td><td>0.49</td><td>0.73</td></tr>
                                <tr class="t-row"><td>25.4</td><td>1”</td><td>0.51</td><td>0.72</td><td>0.95</td><td>1.39</td></tr>
                                <tr class="t-row"><td>38.1</td><td>1½”</td><td>0.79</td><td>1.14</td><td>1.50</td><td>2.21</td></tr>
                                <tr class="t-row"><td>50.8</td><td>2”</td><td>1.05</td><td>1.53</td><td>2.00</td><td>2.93</td></tr>
                                <tr class="t-row"><td>76.2</td><td>3”</td><td>1.55</td><td>2.34</td><td>3.04</td><td>4.41</td></tr>
                                <tr class="t-row"><td>101.6</td><td>4”</td><td>2.07</td><td>3.12</td><td>4.05</td><td>5.90</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <h4 class="text-center mb-3" style="color: #db7227;">Glass Panel Weight Chart (kg/m²)</h4>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row"><th>Glass Type</th><th>Thickness</th><th>Weight (kg/m²)</th></tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>Toughened</td><td>10 mm</td><td>25</td></tr>
                                <tr class="t-row"><td>Toughened</td><td>12 mm</td><td>30</td></tr>
                                <tr class="t-row"><td>Toughened</td><td>15 mm</td><td>37.5</td></tr>
                                <tr class="t-row"><td>Laminated</td><td>12 mm</td><td>30</td></tr>
                                <tr class="t-row"><td>Laminated</td><td>16 mm</td><td>40</td></tr>
                                <tr class="t-row"><td>Laminated</td><td>20 mm</td><td>50</td></tr>
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
                <h2>4. Grades & Glass Types Available</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Stainless Steel Hardware</h5>
                        <p><strong>304:</strong> Indoor applications<br><strong>316:</strong> Marine & outdoor applications</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-window"></i></div>
                        <h5>Glass Types</h5>
                        <p><strong>Toughened (Tempered) Glass</strong><br><strong>Laminated Safety Glass</strong><br><strong>Heat-Soaked Glass</strong></p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gem"></i></div>
                        <h5>Special Options</h5>
                        <p>UV-resistant coatings<br>Frosted / etched designer glass<br>Tinted & decorative panels</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="applications" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>5. Applications of Glass Railings</h2>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-3">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-house-door"></i></div>
                        <h5>1️⃣ Residential</h5>
                        <p>✔ Balcony glass railings<br>✔ Staircase glass systems<br>✔ Terrace enclosures</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-building"></i></div>
                        <h5>2️⃣ Commercial</h5>
                        <p>✔ Office interiors & atriums<br>✔ Shopping malls & showrooms<br>✔ Airports & institutions</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cup-hot"></i></div>
                        <h5>3️⃣ Hospitality</h5>
                        <p>✔ Hotels & resorts<br>✔ Poolside railings<br>✔ Rooftop restaurants</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-tree"></i></div>
                        <h5>4️⃣ Outdoor & Landscape</h5>
                        <p>✔ Garden railings<br>✔ Marine & coastal installations</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="uses" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>6. Uses & Advantages of Glass Railings</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gem"></i></div>
                        <h5>Modern & Premium Appearance</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-shaded"></i></div>
                        <h5>High Strength & Safety</h5>
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
                        <div class="advantage-icon"><i class="bi bi-check-circle"></i></div>
                        <h5>Corrosion-Free System</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-brush"></i></div>
                        <h5>Custom Design Flexibility</h5>
                    </div>
                </div>
                
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-arrow-up-circle"></i></div>
                        <h5>Long Lifespan</h5>
                    </div>
                </div>
            </div>
            
            <p class="text-center mt-4">
                <strong>Uses:</strong> Provides safety without blocking view | Enhances natural lighting | Creates modern architectural aesthetics | Suitable for indoor & outdoor use | Supports customized designs
            </p>
        </div>
    </section>

    <section id="manufacturing" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Manufacturing & Installation Process</h2>
            </div>
            
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6" style="text-align: justify;"><strong>Glass Processing:</strong></p>
                        <p>1️⃣ Raw glass cutting</p>
                        <p>2️⃣ Heat treatment (toughening)</p>
                        <p>3️⃣ Lamination (if required)</p>
                        <p>4️⃣ Edge polishing & finishing</p>
                        <p>5️⃣ Quality inspection</p>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6" style="text-align: justify;"><strong>Installation Process:</strong></p>
                        <p>1️⃣ Site measurement</p>
                        <p>2️⃣ Hardware installation (spigots/channels)</p>
                        <p>3️⃣ Glass panel placement</p>
                        <p>4️⃣ Alignment & fixing</p>
                        <p>5️⃣ Final inspection</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="mechanical" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">9. Mechanical & Safety Properties</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Property</th>
                                    <th>Value</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>Impact Resistance</td><td>High</td></tr>
                                <tr class="t-row"><td>Strength</td><td>4–5x stronger than normal glass</td></tr>
                                <tr class="t-row"><td>Safety</td><td>Breaks into blunt pieces</td></tr>
                                <tr class="t-row"><td>Load Bearing</td><td>Suitable for structural railing systems</td></tr>
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
                        <p>Before selecting glass railings:<br>
                        ✔ Glass type (toughened vs laminated)<br>
                        ✔ Thickness requirement<br>
                        ✔ Indoor vs outdoor use<br>
                        ✔ Mounting system (frameless / framed)<br>
                        ✔ Hardware grade (304 vs 316)<br>
                        ✔ Design preference (clear / frosted / tinted)</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-rulers"></i></div>
                        <h5>Dimensional Tolerances</h5>
                        <p><strong>Glass Thickness:</strong> ±0.2 mm</p>
                        <p><strong>Panel Size:</strong> ±2 mm</p>
                        <p><strong>Alignment Tolerance:</strong> ±3 mm</p>
                        <p><strong>Edge Finish:</strong> Polished / Bevelled</p>
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
                <strong>Industries We Serve:</strong> Residential Construction | Commercial Buildings | Hospitality & Luxury Projects | Infrastructure Projects | Marine & Coastal Applications
            </p>
            <p class="text-center mt-2">
                We also offer <strong class="text-dark"><a href="#">Stainless Steel Pipes</a></strong>, <a href="#">SS Railing Products</a>, and <strong class="text-dark"><a href="#">Duplex Steel Products</a></strong>.
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
                        <h5>Custom design solutions</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>International standard compliance</h5>
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
                        <div class="why-banner-icon"><i class="bi bi-boxes"></i></div>
                        <h5>Complete railing system provider</h5>
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
                                <h4>Q1. Are glass railings safe?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Yes, toughened and laminated glass ensures high safety.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Q2. What thickness is best?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    8–12 mm standard, 20 mm for heavy-duty.
                                </p>
                            </div>
                        </div>
                        
                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Q3. Can glass railings be used outdoors?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Yes, with 316 stainless steel hardware.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Q4. Do they require maintenance?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Minimal—only regular cleaning needed.
                                </p>
                            </div>
                        </div>
                        
                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Q5. How long do they last?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    15–20+ years with proper installation.
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
                    Looking for premium glass railing systems?<br>
                    📞 Contact Moksh Tubes & Fittings LLP at +91 97695 84950<br>
                    We deliver modern, durable, and custom-designed glass railing solutions for residential and commercial projects.
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
            "name": "Glass Railings",
            "description": "Premium glass railings with toughened & laminated glass. Frameless balcony & staircase railing systems with SS hardware. India & export supply.",
            "brand": {
                "@type": "Brand",
                "name": "Moksh Tubes & Fittings LLP"
            },
            "manufacturer": {
                "@type": "Organization",
                "name": "Moksh Tubes & Fittings LLP"
            },
            "material": "Toughened Glass, Laminated Glass, Stainless Steel (304/316), Aluminium",
            "url": "https://www.mokshtubes.com/products/special-fabricated/glass-railings",
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
                "name": "Are glass railings safe?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, toughened and laminated glass ensures high safety."
                }
            },{
                "@type": "Question",
                "name": "Can glass railings be used outdoors?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, with 316 stainless steel hardware."
                }
            },{
                "@type": "Question",
                "name": "How long do they last?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "15–20+ years with proper installation."
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
                "name": "Glass Railings",
                "item": "https://www.mokshtubes.com/products/special-fabricated/glass-railings"
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
