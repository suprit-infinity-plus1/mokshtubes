@extends('layouts.master')

@section('title', 'Seamless vs Welded Pipes in UAE | Key Differences & Guide')
@section('meta_description',
    'Learn the difference between seamless and welded pipes for UAE projects. Compare cost,
    strength & applications to choose the best option.')
@section('meta_keywords', 'Seamless, Welded Pipes')


@section('content')
    <!--Start breadcrumb area-->

    <section class="breadcrumb-area" style="background-image: url({{ asset('assets/images/background/din-standard.jpg') }});">
        <div class="container text-center">
            <h1>Seamless vs Welded Pipes: UAE’s Ultimate Guide</h1>
        </div>
    </section>
    <!-- End breadcrumb area -->


    <section id="blog-area" class="blog-with-sidebar-area blog-single-area bg-light">
        <div class="container">
            <div class="row">
                <!-- Blog Content -->
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <div class="blog-post">
                        <div class="single-blog-post">
                            <div class="img-holder mb-4">
                                <img src="{{ asset('assets/images/blog/uae’s-ultimate-guide.webp') }}"
                                    alt="DIN Standard Metal Alloys & Tubes Germany" class="img-fluid rounded">
                            </div>
                            <div class="text-holder">

                                <!-- Blog Title -->
                                <div class="blog-title text-start">
                                    <h2>Building the Future of the UAE: Choosing the Right Pipes</h2>
                                </div>

                                <!-- Introduction -->
                                <div class="text">
                                    <p>
                                        Imagine this you’re overseeing a mega project on Dubai’s skyline. Dozens of floors
                                        up, your team is laying out kilometers of piping that will carry water, fuel, or
                                        steam. A single wrong material choice could trigger delays, safety concerns, or
                                        system failures impacting thousands of people.</p>
                                    <p>
                                        This is the daily reality for engineers and contractors across the Emirates. From
                                        Abu Dhabi’s offshore oil rigs to Sharjah’s municipal infrastructure, the decision
                                        between seamless and welded pipes isn’t just technical it’s strategic.</p>
                                    <p>
                                        This guide will break down the key differences, UAE specific applications, and cost
                                        factors to help you make the right choice.</p>
                                </div>

                                <!-- Automotive Sector -->
                                <section id="blog-area" class="blog-with-sidebar-area blog-single-area">
                                    <div class="blog-title text-start">
                                        <h2>What Are Seamless Pipes? – The Premium Choice</h2>
                                    </div>
                                    <p>
                                        <a href="{{ route('products.pipes-tubes.seamless-pipes') }}">Seamless pipes</a> are
                                        produced from solid steel billets, heated to around 1200°C, and
                                        pierced to create a hollow tube. The result? A pipe without welds or seams.
                                    </p>
                                    <div class="exapmle">
                                        <h3>Key Benefits of Seamless Pipes</h3>
                                    </div>
                                    <div class="row">
                                        <div class="text">
                                            <ul>
                                                <li><strong>No weak points: </strong> No seam means higher pressure
                                                    tolerance.</li>
                                                <li><strong>Uniform wall thickness: </strong> Consistent performance across
                                                    the length.</li>
                                                <li><strong>High strength: </strong> Heat treated for enhanced durability.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="exapmle">
                                        <h3>Where UAE Uses Seamless Pipes</h3>
                                    </div>
                                    <div class="row">
                                        <div class="text">
                                            <ul>
                                                <li><strong>Oil & Gas: </strong> ADNOC relies on seamless pipes for offshore
                                                    drilling where pressures exceed 10,000 PSI.</li>
                                                <li><strong>Petrochemicals: </strong> Ruwais complexes use them for chemical
                                                    transport at >400°C.</li>
                                                <li><strong>Power Generation: </strong> Barakah Nuclear Plant integrates
                                                    them into reactor cooling systems where safety is critical.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </section>

                                <section id="blog-area" class="blog-with-sidebar-area blog-single-area">
                                    <div class="blog-title text-start">
                                        <h2>What Are Welded Pipes? – The Versatile Workhorses</h2>
                                    </div>
                                    <p>
                                        <a href="{{ route('products.pipes-tubes.welded-pipes') }}">Welded pipes</a> are made
                                        by rolling flat steel plates into cylindrical form and welding
                                        the edges together. While less expensive, they’re highly reliable in many
                                        industries.
                                    </p>
                                    <div class="exapmle">
                                        <h3>Main Types of Welded Pipes in the UAE</h3>
                                    </div>
                                    <div class="row">
                                        <div class="text">
                                            <ul>
                                                <li><strong>ERW (Electric Resistance Welded): </strong> Common in
                                                    residential projects and water distribution.</li>
                                                <li><strong>LSAW (Longitudinal Submerged Arc Welded): </strong> Large
                                                    diameter pipes for city water networks.</li>
                                                <li><strong>SSAW (Spiral Submerged Arc Welded): </strong> Best for
                                                    long distance pipelines across emirates.</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="exapmle">
                                        <h3>Where Welded Pipes Excel</h3>
                                    </div>
                                    <div class="row">
                                        <div class="text">
                                            <ul>
                                                <li><strong>Construction: </strong> Plumbing, HVAC, and fire protection in
                                                    towers across Dubai and Abu Dhabi.</li>
                                                <li><strong>Municipal Water Systems: </strong> Sharjah and Ajman networks.
                                                </li>
                                                <li><strong>Desalination Plants: </strong> Efficient for low-pressure
                                                    distribution.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </section>

                                <section id="blog-area" class="blog-with-sidebar-area blog-single-area">
                                    <div class="container">
                                        <div class="blog-title">
                                            <h2><a href="{{ route('blogs.welded-vs-seamless') }}">Seamless vs Welded
                                                    Pipes</a> Quick Comparison</h2>
                                        </div>

                                        <div class="row justify-content-center">
                                            <div class="col-lg-12">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped align-middle">
                                                        <thead class="table-dark text-center">
                                                            <tr class="t-row">
                                                                <th>Factor</th>
                                                                <th>Seamless Pipes</th>
                                                                <th>Welded Pipes</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="text-center">
                                                            <tr class="t-row">
                                                                <td>Manufacturing</td>
                                                                <td>Solid billet, pierced</td>
                                                                <td>Rolled steel, welded seam</td>
                                                            </tr>
                                                            <tr class="t-row">
                                                                <td>Strength</td>
                                                                <td>Very high (no seam)</td>
                                                                <td>Adequate, depends on weld</td>
                                                            </tr>
                                                            <tr class="t-row">
                                                                <td>Pressure Tolerance</td>
                                                                <td>>10,000 PSI</td>
                                                                <td>Low to medium pressure</td>
                                                            </tr>
                                                            <tr class="t-row">
                                                                <td>Temperature</td>
                                                                <td>Excellent (extreme heat/cold)</td>
                                                                <td>Good (standard conditions)</td>
                                                            </tr>
                                                            <tr class="t-row">
                                                                <td>Durability</td>
                                                                <td>Longer lifespan</td>
                                                                <td>Requires maintenance</td>
                                                            </tr>
                                                            <tr class="t-row">
                                                                <td>Cost</td>
                                                                <td>20–40% higher</td>
                                                                <td>More affordable</td>
                                                            </tr>
                                                            <tr class="t-row">
                                                                <td>Availability (UAE)</td>
                                                                <td>Mostly imported (6–12 weeks)</td>
                                                                <td>Widely available (2–4 weeks)</td>
                                                            </tr>
                                                            <tr class="t-row">
                                                                <td>Best For</td>
                                                                <td>Critical, safety sensitive </td>
                                                                <td>Budget conscious, general</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section id="blog-area" class="blog-with-sidebar-area blog-single-area">
                                    <div class="container">
                                        <div class="blog-title">
                                            <h2>UAE Specific Applications</h2>
                                        </div>

                                        <div class="row justify-content-center">
                                            <div class="col-lg-12">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped align-middle">
                                                        <thead class="table-dark text-center">
                                                            <tr class="t-row">
                                                                <th>Sector</th>
                                                                <th>Seamless Pipes</th>
                                                                <th>Welded Pipes</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="text-center">
                                                            <tr class="t-row">
                                                                <td>Oil & Gas</td>
                                                                <td>Offshore drilling, refinery piping</td>
                                                                <td>Storage, drainage</td>
                                                            </tr>
                                                            <tr class="t-row">
                                                                <td>Petrochemicals</td>
                                                                <td>High temp reactors, corrosive flows</td>
                                                                <td>Utility water lines</td>
                                                            </tr>
                                                            <tr class="t-row">
                                                                <td>Power Generation</td>
                                                                <td>Steam turbines, boilers, nuclear systems</td>
                                                                <td>Cooling water lines</td>
                                                            </tr>
                                                            <tr class="t-row">
                                                                <td>Construction</td>
                                                                <td>Rare (only critical systems)</td>
                                                                <td>HVAC, plumbing, scaffolding</td>
                                                            </tr>
                                                            <tr class="t-row">
                                                                <td>Water Systems</td>
                                                                <td>Desalination high pressure lines</td>
                                                                <td>Municipal, irrigation, wastewater</td>
                                                            </tr>
                                                            <tr class="t-row">
                                                                <td>Fire Protection</td>
                                                                <td>Industrial fire suppression</td>
                                                                <td>Sprinkler systems in malls/offices</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section id="blog-area" class="blog-with-sidebar-area blog-single-area">
                                    <div class="blog-title text-start">
                                        <h2>Strength & Performance Analysis</h2>
                                    </div>
                                    <div class="row">
                                        <div class="text">
                                            <ul>
                                                <li><strong>Pressure: </strong> Seamless pipes handle extreme loads (e.g.,
                                                    Emirates Global Aluminium uses them for 6,000 PSI steam).</li>
                                                <li><strong>Temperature: </strong> Seamless remains stable up to 800°C+,
                                                    welded suitable for standard ranges.</li>
                                                <li><strong>Corrosion: </strong> Seamless = uniform surface + no crevice
                                                    corrosion risk.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="blog-title text-start">
                                        <h2>Cost Factors in the UAE</h2>
                                    </div>
                                    <div class="exapmle">
                                        <h3>Typical Prices (per meter)</h3>
                                    </div>
                                    <div class="row">
                                        <div class="text">
                                            <ul>
                                                <li><strong>Seamless Pipes: </strong> AED 25–40</li>
                                                <li><strong>Welded Pipes: </strong> AED 15–25</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="exapmle">
                                        <h3>Other Considerations</h3>
                                    </div>
                                    <div class="row">
                                        <div class="text">
                                            <ul>
                                                <li>
                                                    <strong>Installation: </strong> Welded easier and cheaper to handle.
                                                </li>
                                                <li>
                                                    <strong>Maintenance: </strong> Seamless needs less upkeep.
                                                </li>
                                                <li>
                                                    <strong>Lifecycle Value: </strong> Seamless pays off in long-term
                                                    projects.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </section>

                                <section id="blog-area" class="blog-with-sidebar-area blog-single-area">
                                    <div class="blog-title text-start">
                                        <h2>Quality Standards in UAE</h2>
                                    </div>

                                    <div class="row">
                                        <div class="text">
                                            <ul>
                                                <li><strong>International: </strong>ASTM, API, ISO compliance.</li>
                                                <li><strong>Local: </strong> ESMA approvals, municipality codes, ADNOC
                                                    requirements.</li>
                                                <li><strong>Supplier Selection: </strong> Prioritize reliable logistics,
                                                    certifications, and technical support.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </section>

                                <section id="blog-area" class="blog-with-sidebar-area blog-single-area">
                                    <div class="blog-title text-start">
                                        <h2>Decision Framework</h2>
                                    </div>

                                    <div class="col-6 d-flex w-100">
                                        <div class="tip-box-point">
                                            <div class="tip-box">
                                                <h3>Choose <a
                                                        href="{{ route('products.pipes-tubes.seamless-pipes') }}">Seamless
                                                        Pipes</a> When:</h3>
                                                <ul>
                                                    <li>
                                                        Safety critical systems.
                                                    </li>
                                                    <li>
                                                        High pressures (>1000 PSI).
                                                    </li>
                                                    <li>
                                                        Extreme heat/cold environments.
                                                    </li>
                                                    <li>
                                                        Corrosive materials present.
                                                    </li>
                                                    <li>
                                                        Long term reliability matters.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="tip-box-point">
                                            <div class="tip-box">
                                                <h3>Choose <a
                                                        href="{{ route('products.pipes-tubes.welded-pipes') }}">Welded
                                                        Pipes</a> When:</h3>
                                                <ul>
                                                    <li>
                                                        Budget is tight.
                                                    </li>
                                                    <li>
                                                        Normal operating conditions.
                                                    </li>
                                                    <li>
                                                        Quick availability needed.
                                                    </li>
                                                    <li>
                                                        Large diameters required.
                                                    </li>
                                                    <li>
                                                        Maintenance is acceptable.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <!-- FAQs -->
                                <section class="faq-content-area">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="accordion-box">
                                                    <div class="blog-title text-start">
                                                        <h2>FAQ's</h2>
                                                    </div>

                                                    <div class="accordion accordion-block">
                                                        <div class="accord-btn">
                                                            <h4>Can welded pipes be used for high-pressure oil & gas
                                                                applications in the UAE?</h4>
                                                        </div>
                                                        <div class="accord-content">
                                                            <p>Welded pipes can handle moderate pressures, but most UAE oil
                                                                & gas projects (like ADNOC’s offshore rigs) require seamless
                                                                pipes due to extreme pressures above 5,000 PSI and strict
                                                                safety standards.</p>
                                                        </div>
                                                    </div>

                                                    <div class="accordion accordion-block">
                                                        <div class="accord-btn">
                                                            <h4>Are seamless pipes worth the higher cost for Dubai
                                                                construction projects?</h4>
                                                        </div>
                                                        <div class="accord-content">
                                                            <p>For regular plumbing, HVAC, and fire systems, welded pipes
                                                                are cost effective and sufficient. Seamless pipes are worth
                                                                the investment only for critical systems where failure could
                                                                cause major safety or financial risks.</p>
                                                        </div>
                                                    </div>

                                                    <div class="accordion accordion-block">
                                                        <div class="accord-btn">
                                                            <h4>How do UAE’s harsh environmental conditions affect pipe
                                                                performance?</h4>
                                                        </div>
                                                        <div class="accord-content">
                                                            <p>With high heat, humidity, and salty coastal air, corrosion
                                                                resistance is vital. Both pipe types can be coated, but
                                                                seamless pipes typically last longer in extreme
                                                                environments.</p>
                                                        </div>
                                                    </div>

                                                    <div class="accordion accordion-block">
                                                        <div class="accord-btn">
                                                            <h4>What’s the delivery time difference between seamless and
                                                                welded pipes in the UAE?</h4>
                                                        </div>
                                                        <div class="accord-content">
                                                            <p><a href="{{ route('products.pipes-tubes.welded-pipes') }}">Welded
                                                                    pipes</a> are locally available with 2–4 week delivery.
                                                                <a
                                                                    href="{{ route('products.pipes-tubes.seamless-pipes') }}">Seamless
                                                                    pipes</a>, often imported, may require 6–12 weeks
                                                                depending on specifications.
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="accordion accordion-block">
                                                        <div class="accord-btn">
                                                            <h4>Which pipe type is better for UAE desalination plants?</h4>
                                                        </div>
                                                        <div class="accord-content">
                                                            <p>Most desalination plants use both <a
                                                                    href="{{ route('products.pipes-tubes.seamless-pipes') }}">seamless
                                                                    pipes</a> for
                                                                high pressure RO (reverse osmosis) systems, and welded pipes
                                                                for low pressure water distribution.</p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>


                                <div class="text-holder">
                                    <div class="blog-title text-start">
                                        <h2><strong>Conclusion:</strong> Which Pipe Is Right for You?</h2>
                                    </div>
                                    <div class="text">
                                        <p>
                                            <a href="{{ route('index') }}">Moksh Tubes</a>, we know how critical this
                                            decision is whether it’s a high pressure
                                            oil & gas system, a Dubai skyscraper, or municipal water supply. Our team has
                                            helped engineers, contractors, and project managers across the Emirates make
                                            smart, cost-effective pipe choices that last.
                                        <p>
                                            Let’s talk about your project today. We’ll guide you step by step and make sure
                                            you get the right seamless or welded pipes delivered on time, on budget, and
                                            with complete peace of mind.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Start sidebar Wrapper-->
                <div class="col-lg-3 col-md-12 col-sm-7 col-xs-12">
                    <div class="sidebar-wrapper">
                        <!--Start single sidebar-->
                        <div class="container ">
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <h4 class="fw-bold mb-4">Products We Offer</h4>
                                    <ul class="list-unstyled mb-4">
                                        <li class="product-item mb-2">
                                            <a href="{{ route('products.pipes-tubes') }}" class="product-link">
                                                <i class="bi bi-box-seam me-2"></i> Pipes & Tubes
                                            </a>
                                        </li>
                                        <li class="product-item mb-2">
                                            <a href="{{ route('products.sheets-plates-coils') }}" class="product-link">
                                                <i class="bi bi-square me-2"></i> Sheets, Plates & Coils
                                            </a>
                                        </li>
                                        <li class="product-item mb-2">
                                            <a href="{{ route('products.bars-rods') }}" class="product-link">
                                                <i class="bi bi-diagram-3 me-2"></i> Bars & Rods
                                            </a>
                                        </li>
                                        <li class="product-item mb-2">
                                            <a href="{{ route('products.special-fabricated') }}" class="product-link">
                                                <i class="bi bi-tools me-2"></i> Special Fabricated
                                            </a>
                                        </li>
                                        <li class="product-item mb-2">
                                            <a href="{{ route('products.pipe-fittings-flanges-fasteners') }}"
                                                class="product-link">
                                                <i class="bi bi-nut me-2"></i> Pipe Fittings, Flanges & Fasteners
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <h4 class="fw-bold mb-4">Categories</h4>
                                    <ul class="list-unstyled mb-4">
                                        <li class="category-item mb-2">
                                            <a href="#" class="category-link">
                                                <i class="bi bi-building me-2"></i> Architecture Plans
                                            </a>
                                        </li>
                                        <li class="category-item mb-2">
                                            <a href="#" class="category-link">
                                                <i class="bi bi-hammer me-2"></i> Construction Projects
                                            </a>
                                        </li>
                                        <li class="category-item mb-2">
                                            <a href="#" class="category-link">
                                                <i class="bi bi-brush me-2"></i> Paintings
                                            </a>
                                        </li>
                                        <li class="category-item mb-2">
                                            <a href="#" class="category-link">
                                                <i class="bi bi-lightning-charge me-2"></i> Electrical Works
                                            </a>
                                        </li>
                                        <li class="category-item mb-2">
                                            <a href="#" class="category-link">
                                                <i class="bi bi-tools me-2"></i> Plumbing Works
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--End single sidebar-->
                        <!--Start single sidebar-->
                        <div class="single-sidebar">
                            <div class="sec-title">
                                <h3>Recent Blogs</h3>
                            </div>
                            <ul class="recent-post">
                                <li>
                                    <div class="img-holder">
                                        <img src="{{ asset('assets/images/blogs/thumb/why-hastelloy-weighs-more-than-stainless-steel-thumb.webp') }}"
                                            alt="Awesome Image">
                                        <div class="overlay-style-two">
                                            <div class="box">
                                                <div class="content">
                                                    <a
                                                        href="{{ route('blogs.why-hastelloy-weighs-more-than-stainless-steel') }}">
                                                        <i class="fa fa-link" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="title-holder">
                                        <a href="{{ route('blogs.why-hastelloy-weighs-more-than-stainless-steel') }}">
                                            <h5 class="post-title">
                                                Why Hastelloy Weighs More Than Stainless Steel
                                            </h5>
                                        </a>
                                        <h6 class="post-date">
                                            <i class="icon-calendar-with-spring-binder-and-date-blocks"></i>
                                            august 14, 2025
                                        </h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="img-holder">
                                        <img src="{{ asset('assets/images/blogs/thumb/the-role-of-high-performance-alloys-in-desalination-plants-thumb.webp') }}"
                                            alt="Awesome Image">
                                        <div class="overlay-style-two">
                                            <div class="box">
                                                <div class="content">
                                                    <a href="{{ route('blogs.the-role-of-high-performance') }}">
                                                        <i class="fa fa-link" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="title-holder">
                                        <a href="{{ route('blogs.the-role-of-high-performance') }}">
                                            <h5 class="post-title">
                                                The Role of High Performance Alloys in Desalination Plants
                                            </h5>
                                        </a>
                                        <h6 class="post-date">
                                            <i class="icon-calendar-with-spring-binder-and-date-blocks"></i>
                                            august 14, 2025
                                        </h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="img-holder">
                                        <img src="{{ asset('assets/images/blogs/thumb/india’s-stainless-steel-export-industry-thumb.webp') }}"
                                            alt="Awesome Image">
                                        <div class="overlay-style-two">
                                            <div class="box">
                                                <div class="content">
                                                    <a
                                                        href="{{ route('blogs.india’s-stainless-steel-export-industry') }}">
                                                        <i class="fa fa-link" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="title-holder">
                                        <a href="{{ route('blogs.india’s-stainless-steel-export-industry') }}">
                                            <h5 class="post-title">
                                                India’s Stainless Steel Exports – Moksh Tubes Global Reach
                                            </h5>
                                        </a>
                                        <h6 class="post-date">
                                            <i class="icon-calendar-with-spring-binder-and-date-blocks"></i>
                                            august 14, 2025
                                        </h6>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--End single sidebar-->
                        <div class="container my-5">
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <div class="card-body ">
                                        <!-- Heading -->
                                        <div class="section-title">
                                            <h2>get in <span class="thm-color">touch</span></h2>
                                            <p>Let’s forge a connection — contact our team today.</p>
                                        </div>

                                        <!-- Map -->
                                        <div class="mb-3 text-center">
                                            <iframe
                                                src="https://www.google.com/maps/place/Moksh+Tubes+%26+Fittings+LLP/@18.956197,72.8288042,17z/data=!4m10!1m2!2m1!1smoksh+tubes.com+map!3m6!1s0x3be7cf9ee4261af1:0x57adb33b0f4c262!8m2!3d18.9561299!4d72.8287668!15sChNtb2tzaCB0dWJlcy5jb20gbWFwkgEMbWFudWZhY3R1cmVyqgFOCgsvZy8xdHJyYm5wcxABKgciA2NvbSgAMh8QASIbjJWhbK9Dq8lgbx706NjWt0eyqM7Fa1e3RgjMMhMQAiIPbW9rc2ggdHViZXMgY29t4AEA!16s%2Fg%2F11xdfzyd83?entry=ttu&g_ep=EgoyMDI1MDkyMy4wIKXMDSoASAFQAw%3D%3D"
                                                width="100%" height="200" style="border:0;" allowfullscreen=""
                                                loading="lazy">
                                            </iframe>
                                        </div>

                                        <!-- Contact Info -->
                                        <p class="mb-2"><i class="bi bi-envelope me-2 text-primary"></i>
                                            info@mokstubes.com</p>
                                        <p class="mb-2"><i class="bi bi-geo-alt me-2 text-danger"></i>
                                            <strong>Office Address:</strong> Hinglaj Bhavan, Gulalwadi Mumbai, Maharashtra.
                                            400004
                                        </p>
                                        <p class="mb-2"><i class="bi bi-geo-alt me-2 text-success"></i>
                                            <strong>Office Address:</strong> 6/A, Ground Floor, Rajwanti Mansion, Khetwadi
                                            Mumbai
                                        </p>
                                        <p class="mb-2"><i class="bi bi-geo-alt me-2 text-info"></i>
                                            <strong>Office Address:</strong> 95/95A, Dawood Baug, Sukhlaji Street,
                                            Kamatipura Mumbai
                                        </p>

                                        <!-- Social Icons -->
                                        <div class="mt-3 text-center">
                                            <a href="https://wa.me/+919769584950"
                                                class="btn btn-outline-success btn-sm rounded-circle me-2"><i
                                                    class="bi bi-whatsapp"></i></a>
                                            <a href="https://www.instagram.com/mokshtubesandfittingsllp/"
                                                class="btn btn-outline-dark btn-sm rounded-circle me-2"><i
                                                    class="bi bi-instagram"></i></a>
                                            <a href="https://www.facebook.com/mokshtubes/"
                                                class="btn btn-outline-primary btn-sm rounded-circle me-2"><i
                                                    class="bi bi-facebook"></i></a>
                                            <a href="https://www.linkedin.com/company/moksh-tubes/"
                                                class="btn btn-outline-info btn-sm rounded-circle"><i
                                                    class="bi bi-linkedin"></i></a>
                                            <a href="https://x.com/Moksh_Tubes"
                                                class="btn btn-outline-info btn-sm rounded-circle"><i
                                                    class="fab fa-x-twitter"></i></a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Start contant form --}}
                        <section class="blog-contact-form">
                            <div class="section-title">
                                <h2>get in <span class="thm-color">touch</span></h2>
                                <p>Let’s forge a connection — contact our team today.</p>
                            </div>

                            <form id="contact-form" name="contact_form" class="default-form" action="inc/sendmail.php"
                                method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input class="m-1" type="text" name="form_name" placeholder="Your Name*"
                                            required="">
                                    </div>
                                    <div class="col-md-12">
                                        <input class="m-1" type="email" name="form_email" placeholder="Your Mail*"
                                            required="">
                                    </div>
                                    <div class="col-md-12">
                                        <input class="m-1" type="text" name="form_phone" placeholder="Phone">
                                    </div>
                                    <div class="col-md-12">
                                        <input class="m-1" type="text" name="form_subject" placeholder="Subject">
                                    </div>
                                    <div class="col-md-12">
                                        <textarea name="form_message" class="m-1" placeholder="Your Message.." required=""></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <input id="form_botcheck" name="form_botcheck" type="hidden" value="">
                                        <button class="thm-btn bg-clr1 m-1" type="submit"
                                            data-loading-text="Please wait...">
                                            send message
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </section>
                        {{-- End contant form --}}

                    </div>
                </div>
                <!--End Sidebar Wrapper-->
            </div>
        </div>
    </section>
    <section class="pt-4 mb-5 col-12">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Contact Us</h2>
                <p>
                    Looking for a trusted DIN-standard alloy and industrial tube supplier in Germany?<br> Connect with
                    <strong>Mokshtubes & Fittings LLP</strong> today and discover how our materials can enhance your
                    manufacturing
                    capabilities.
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
