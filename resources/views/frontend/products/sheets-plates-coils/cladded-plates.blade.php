@extends('layouts.master')

@section('title', 'Cladded Plates | Stainless Steel & Nickel Alloy Clad Plates')
@section('meta_description', 'Buy cladded plates with stainless steel, nickel alloy & titanium cladding. High strength, corrosion-resistant plates for industrial use.')
@section('meta_keywords', 'Cladded Plates, clad plates, stainless steel clad plates, nickel alloy clad plates, composite metal plates, industrial clad plates')
@section('og_image', asset('assets/images/product/Sheets-Plates-and-Coils/Cladded-Plates.webp'))
@section('og_type', 'article')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/product/Sheets-Plates-and-Coils/Cladded-Plates.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Cladded Plates<br>Stainless Steel, Nickel Alloy & Composite Clad Plates</h1>

                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                        Cladded Plates are advanced composite metal plates combining a corrosion-resistant alloy layer with a strong structural base material. Moksh Tubes & Fittings LLP supplies high-quality cladded plates manufactured using explosive bonding, roll bonding, and weld overlay techniques. These plates offer superior corrosion resistance, strength, and cost efficiency, making them ideal for oil & gas, petrochemical, marine, and power generation industries across India and global markets.
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
            <a href="#uses">Uses & Advantages</a> |
            <a href="#manufacturing">Manufacturing</a> |
            <a href="#mechanical">Mechanical Properties</a> |
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
                <h2>Introduction</h2>
            </div>

            <h3 class="fw-semibold text-center mb-5" style="color: #db7227;">
                CLADDED PLATES
            </h3>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/product/Sheets-Plates-and-Coils/Cladded-Plates.webp') }}" alt="Cladded Plates"
                        class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4" style="text-align: justify;">
                            <strong class="text-black">Cladded Plates</strong> are composite materials formed by bonding two or more metals to achieve combined properties that cannot be obtained with a single material. Typically, a corrosion-resistant alloy such as stainless steel, nickel alloy, or titanium is bonded to a carbon steel or low-alloy steel base.
                        </p>

                        <p class="fs-6 mb-4" style="text-align: justify;">
                            This combination provides the structural strength and cost efficiency of the base metal while offering corrosion resistance and durability from the cladding layer. Cladded plates are widely used in critical applications where both performance and cost optimization are required.
                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            At <strong style="color:black;"><a href="{{ url('/contact-us') }}">Moksh Tubes & Fittings LLP</a></strong>, we supply premium-quality cladded plates manufactured through advanced techniques such as explosive bonding, roll bonding, and weld overlay. Our products comply with ASTM, ASME, and API standards for demanding industrial environments.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Cladded Plates Datasheet</h3>
            <p class="mb-3">
                Get the complete datasheet including chemical composition, mechanical properties, standards, tolerances, and application guidelines. Enter your email to receive the PDF instantly.
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
                <h2>Specifications of Cladded Plates</h2>
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
                                <tr class="t-row"><td>Base Material</td><td>Carbon Steel (ASTM A516, A36), Low Alloy Steel</td></tr>
                                <tr class="t-row"><td>Cladding Material</td><td>Stainless Steel, Duplex, Nickel Alloys, Titanium, Copper Alloys</td></tr>
                                <tr class="t-row"><td>Total Thickness</td><td>3 mm to 200 mm</td></tr>
                                <tr class="t-row"><td>Cladding Thickness</td><td>1 mm to 25 mm</td></tr>
                                <tr class="t-row"><td>Plate Size</td><td>Up to 3000 mm × 12000 mm</td></tr>
                                <tr class="t-row"><td>Bonding Methods</td><td>Explosive Bonding, Roll Bonding, Weld Overlay</td></tr>
                                <tr class="t-row"><td>Finishes</td><td>Mill Finish, Pickled & Passivated, Polished</td></tr>
                                <tr class="t-row"><td>Standards</td><td>ASTM B898, ASME SA263/264/265, API</td></tr>
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
                <h2 class="fw-bold" style="color: #174268;">Size & Weight Charts</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8 mb-4">
                    <h4 class="text-center mb-3" style="color: #db7227;">Cladded Plate Weight Chart (kg/m²)</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row"><th>Thickness</th><th>MS + SS</th><th>MS + Copper</th><th>SS + Aluminium</th></tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>5 mm</td><td>39.2</td><td>40.2</td><td>37.1</td></tr>
                                <tr class="t-row"><td>10 mm</td><td>78.5</td><td>80.6</td><td>73.8</td></tr>
                                <tr class="t-row"><td>20 mm</td><td>157.0</td><td>161.2</td><td>147.6</td></tr>
                                <tr class="t-row"><td>30 mm</td><td>235.5</td><td>241.8</td><td>221.5</td></tr>
                                <tr class="t-row"><td>50 mm</td><td>392.5</td><td>402.9</td><td>368.9</td></tr>
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
                        <h5>Stainless Steel Clad</h5>
                        <p>304 / 304L<br>316 / 316L<br>321 / 347</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-tools"></i></div>
                        <h5>Duplex & Super Duplex</h5>
                        <p>S31803, S32750, S32760</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear"></i></div>
                        <h5>Nickel Alloy Clad</h5>
                        <p>Inconel 625, 825<br>Hastelloy C22 / C276</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-nut"></i></div>
                        <h5>Titanium Clad</h5>
                        <p>Grade 1, 2, 5</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-lightbulb"></i></div>
                        <h5>Copper & Copper-Nickel</h5>
                        <p>Cu-Ni 70/30<br>Cu-Ni 90/10</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-box"></i></div>
                        <h5>Special Alloys</h5>
                        <p>904L, AL-6XN, Alloy 926</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="applications" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Cladded Plates</h2>
            </div>

            <div class="row g-4 justify-content-center mt-4">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Oil & Gas Industry</h5>
                        <p>✔ Pressure vessels<br>✔ Storage tanks<br>✔ Pipelines & offshore structures</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Petrochemical & Chemical Plants</h5>
                        <p>✔ Reactors<br>✔ Heat exchangers<br>✔ Columns & scrubbers</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-water"></i></div>
                        <h5>Marine & Offshore</h5>
                        <p>✔ Shipbuilding<br>✔ Offshore platforms</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning"></i></div>
                        <h5>Power Generation</h5>
                        <p>✔ Boilers<br>✔ Condensers<br>✔ FGD systems</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-airplane"></i></div>
                        <h5>Aerospace & Defense</h5>
                        <p>✔ Structural components<br>✔ Specialized equipment</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="uses" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Uses & Advantages of Cladded Plates</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-piggy-bank"></i></div>
                        <h5>Cost Efficiency</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-hammer"></i></div>
                        <h5>High Strength & Durability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-x"></i></div>
                        <h5>Corrosion Resistance</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-layers"></i></div>
                        <h5>Wide Material Combinations</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-rulers"></i></div>
                        <h5>Customizable Thickness</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-patch-check"></i></div>
                        <h5>Compliance with Global Standards</h5>
                    </div>
                </div>
            </div>
            
            <p class="text-center mt-4">
                <strong>Uses:</strong> Corrosion-resistant surface with structural strength | Cost-effective alternative to solid alloy plates | Extended service life in harsh environments | Suitable for chemical and marine applications | Ideal for pressure vessels and heavy-duty equipment
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
                        <p class="fs-6" style="text-align: justify;"><strong>Bonding Methods:</strong></p>
                        <p>✔ Explosive Bonding – High-energy bonding for dissimilar metals</p>
                        <p>✔ Roll Bonding – Pressure-based bonding process</p>
                        <p>✔ Weld Overlay – Deposition of clad layer over base metal</p>
                        <p class="fs-6 mt-3" style="text-align: justify;"><strong>Process Steps:</strong></p>
                        <p>Material preparation</p>
                        <p>Bonding process</p>
                        <p>Heat treatment</p>
                        <p>Surface finishing</p>
                        <p>Inspection & testing</p>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6" style="text-align: justify;"><strong>Testing & Quality Control:</strong></p>
                        <p>Each Cladded Plate undergoes strict inspection including:</p>
                        <p>✔ Bond integrity testing</p>
                        <p>✔ Ultrasonic testing (UT)</p>
                        <p>✔ Thickness measurement</p>
                        <p>✔ Material certification</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="mechanical" class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Mechanical Properties (Typical)</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Material</th>
                                    <th>Tensile Strength (MPa)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row"><td>Carbon Steel Base</td><td>400–550</td></tr>
                                <tr class="t-row"><td>Stainless Steel Clad</td><td>515</td></tr>
                                <tr class="t-row"><td>Nickel Alloy</td><td>600+</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="tolerances" class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="row mt-4 justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-rulers"></i></div>
                        <h5>Dimensional Tolerances</h5>
                        <p><strong>Thickness:</strong> ±0.5 mm to ±2 mm</p>
                        <p><strong>Cladding thickness:</strong> ±10%</p>
                        <p><strong>Length:</strong> ±5 mm</p>
                        <p><strong>Flatness:</strong> As per standard</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-5" id="export">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-box-seam"></i></div>
                        <h5>Exports & Supply Coverage</h5>
                        <p><strong>We supply across India:</strong> Mumbai, Pune, Ahmedabad, Bangalore, Chennai, Hyderabad</p>
                        <p><strong>Export markets:</strong> UAE, Saudi Arabia, Qatar, Oman, Kuwait</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="why-choose-us" class="sec-padd-top sec-padd-bottom">
        <div class="container text-center">
            <div class="section-title center">
                <h2>Why Choose Moksh Tubes & Fittings LLP?</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Advanced cladding technology</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-layers"></i></div>
                        <h5>Wide alloy combinations</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-clipboard-check"></i></div>
                        <h5>Strict quality control</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-tools"></i></div>
                        <h5>Custom fabrication support</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Global project supply</h5>
                    </div>
                </div>
            </div>

            <div class="row mt-5 justify-content-center text-start">
                <div class="col-lg-8">
                    <div class="p-4 rounded shadow-sm bg-light border">
                        <h4 class="mb-3 text-center" style="color: #db7227;">Buying Guide – Cladded Plates</h4>
                        <p class="mb-2"><strong>Before selecting:</strong></p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Base material strength requirement</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Cladding material type</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Thickness ratio (base vs clad)</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Application environment</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Corrosion resistance needs</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Standard compliance</li>
                        </ul>
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
                                <h4>Q1. What are cladded plates?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Composite plates combining two metals for strength and corrosion resistance.</p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Q2. What materials are used?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Carbon steel base with SS, nickel, titanium, or copper cladding.</p>
                            </div>
                        </div>
                        
                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Q3. What bonding methods are used?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Explosive bonding, roll bonding, weld overlay.</p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Q4. What thickness range is available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>3 mm to 200 mm total thickness.</p>
                            </div>
                        </div>
                        
                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Q5. Where are they used?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Oil & gas, petrochemical, marine, power plants.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End faq content area-->

    <!-- Contact Section -->
    <section id="contact-us" class="sec-padd-bottom mt-5">
        <div class="container">
            <div class="contact-cta-box">
                <h2>REQUEST A QUOTE</h2>
                <p>
                    Looking for high-performance cladded plates?<br>
                    📞 Contact Moksh Tubes & Fittings LLP at +91 97695 84950<br>
                    We supply advanced composite plates designed for demanding industrial applications.
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
            "name": "Cladded Plates | Stainless Steel & Nickel Alloy Clad Plates",
            "description": "Buy cladded plates with stainless steel, nickel alloy & titanium cladding. High strength, corrosion-resistant plates for industrial use.",
            "brand": {
                "@type": "Brand",
                "name": "Moksh Tubes & Fittings LLP"
            },
            "manufacturer": {
                "@type": "Organization",
                "name": "Moksh Tubes & Fittings LLP"
            },
            "material": "Carbon Steel Base with Stainless Steel, Duplex, Nickel Alloys, Titanium, Copper Alloys Cladding",
            "url": "https://www.mokshtubes.com/cladded-plates",
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
                "name": "Q1. What are cladded plates?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "Composite plates combining two metals for strength and corrosion resistance."
                }
            },{
                "@type": "Question",
                "name": "Q2. What materials are used?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "Carbon steel base with SS, nickel, titanium, or copper cladding."
                }
            },{
                "@type": "Question",
                "name": "Q3. What bonding methods are used?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "Explosive bonding, roll bonding, weld overlay."
                }
            },{
                "@type": "Question",
                "name": "Q4. What thickness range is available?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "3 mm to 200 mm total thickness."
                }
            },{
                "@type": "Question",
                "name": "Q5. Where are they used?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "Oil & gas, petrochemical, marine, power plants."
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
                "name": "Products",
                "item": "https://www.mokshtubes.com/products"
            },{
                "@type": "ListItem",
                "position": 3,
                "name": "Cladded Plates",
                "item": "https://www.mokshtubes.com/cladded-plates"
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
