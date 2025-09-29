@extends('layouts.master')

@section('title', 'Why Hastelloy Weighs More Than Stainless Steel. ')
@section('meta_description',
    'Learn why Hastelloy is heavier than stainless steel. Compare densities, compositions, and
    industrial applications with expert insights.')



@section('content')
    <!--Start breadcrumb area-->

    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container text-center">
            <h1>Why Hastelloy Weighs More Than Stainless Steel</h1>
        </div>
    </section>
    <!--End breadcrumb area-->




    <section id="blog-area" class="blog-with-sidebar-area blog-single-area bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <div class="blog-post">
                        <div class="single-blog-post">
                            <div class="img-holder">
                                <img src="{{ asset('assets/images/blog/why-hastelloy-weighs-more-than-stainless-steel.webp') }}"
                                    alt="hastelloy-vs-stainless">
                            </div>
                            <div class="text-holder">
                                <div class="blog-title text-start">
                                    <h2>Why Hastelloy Weighs More Than Stainless Steel</h2>
                                </div>
                                <div class="text">
                                    <p>
                                        When selecting metals for demanding industrial applications, weight matters as much
                                        as performance. Engineers often find themselves choosing between <a
                                            href="{{ route('materials.hastelloy') }}">Hastelloy</a> and
                                        stainless steel, two popular corrosion resistant metals with distinct
                                        characteristics.
                                    </p>
                                </div>
                                <div class="text">
                                    <p>
                                        While both materials offer excellent durability, Hastelloy consistently weighs more
                                        than stainless steel a difference that impacts everything from installation costs to
                                        structural requirements. This weight difference isn't coincidental; it stems from
                                        fundamental differences in their chemical composition and density.
                                    </p>
                                </div>
                                <div class="text">
                                    <p>
                                        In this guide, we'll explore exactly why Hastelloy is heavier, compare key
                                        specifications, and help you understand when this weight difference matters for your
                                        projects.
                                    </p>
                                </div>

                                <section id="blog-area" class="blog-with-sidebar-area blog-single-area">
                                    <div class="text-holder">
                                        <div class="blog-title text-start">
                                            <h2>Understanding Hastelloy: The Heavy Duty Champion</h2>
                                        </div>
                                        <div class="exapmle">
                                            <h3>What Makes Hastelloy Special?</h3>
                                        </div>

                                        <div class="text">
                                            <p>Hastelloy represents a family of <a
                                                    href="{{ route('materials.nickel-Based-Superalloys') }}">nickel based
                                                    superalloys</a> engineered for
                                                extreme
                                                environments. These corrosion resistant metals excel where ordinary
                                                materials fail,
                                                particularly in chemical processing and marine applications.</p>
                                            <ul>
                                                <li>Nickel (Ni): 50-70% of the total composition</li>
                                                <li>Molybdenum (Mo): 10-16% for enhanced corrosion resistance</li>
                                                <li>Chromium (Cr): 15-22% for oxidation protection</li>
                                                <li>Iron (Fe): Minimal amounts, much lower than stainless steel</li>
                                                <li>Cobalt (Co): Up to 5% in certain grades</li>
                                            </ul>
                                        </div>
                                        <div class="exapmle">
                                            <h3>Common Hastelloy Applications</h3>

                                            <ul>
                                                <li>Chemical processing equipment exposed to acids and alkalis</li>
                                                <li>Heat exchangers in power generation facilities</li>
                                                <li>Marine components requiring seawater resistance</li>
                                                <li>Pharmaceutical manufacturing equipment</li>
                                                <li>Aerospace components facing extreme temperatures</li>
                                            </ul>
                                        </div>
                                </section>

                                <section id="blog-area" class="blog-with-sidebar-area blog-single-area">
                                    <div class="text-holder">
                                        <div class="blog-title text-start">
                                            <h2>Stainless Steel: The Versatile Alternative</h2>
                                        </div>
                                        <div class="exapmle">
                                            <h3>Composition and Characteristics</h3>

                                            <ul>
                                                <li>304 Stainless Steel: 18% chromium, 8% nickel</li>
                                                <li>316 Stainless Steel: 16% chromium, 10% nickel, 2% molybdenum</li>
                                                <li>310 Stainless Steel: 25% chromium, 20% nickel (high-temperature grade)
                                                </li>
                                            </ul>
                                        </div>
                                        <p>Unlike nickel alloys such as Hastelloy, stainless steel relies primarily on iron
                                            as its
                                            base metal, contributing to its lighter weight profile.</p>

                                        <div class="exapmle">
                                            <h3>Why <a href="{{ route('materials.austenitic-stainless-Steel') }}">Stainless
                                                    Steel</a> Remains Popular</h3>

                                            <ul>
                                                <li>Cost effective for general applications</li>
                                                <li>Readily available in multiple grades</li>
                                                <li>Easier to machine and fabricate</li>
                                                <li>Sufficient corrosion resistance for most environments</li>
                                                <li>Lighter weight reduces structural requirements</li>
                                            </ul>
                                        </div>
                                    </div>
                                </section>

                                <section id="blog-area" class="blog-with-sidebar-area blog-single-area">
                                    <div class="container">
                                        <div class="blog-title">
                                            <h2>The Science Behind Weight Differences</h2>
                                        </div>
                                        <div class="exapmle">
                                            <h3>Density: The Primary Factor</h3>
                                            <ul>
                                                <li><strong>High Nickel Content:</strong> Nickel density 8.9 g/cm³ vs Iron
                                                    7.85 g/cm³,
                                                    with 50–70% composition in Hastelloy.</li>
                                                <li><strong>Molybdenum Addition:</strong> Very dense at 10.28 g/cm³, adds
                                                    substantial
                                                    weight but essential for chemical resistance.</li>
                                                <li><strong>Cobalt Presence:</strong> Density 8.9 g/cm³, contributes to both
                                                    weight and
                                                    high-temperature strength.</li>
                                            </ul>
                                        </div>

                                        <div class="row justify-content-center">
                                            <div class="col-lg-12">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped align-middle">
                                                        <thead class="table-dark text-center">
                                                            <tr class="t-row">
                                                                <th>Material</th>
                                                                <th>Density Range (g/cm³)</th>
                                                                <th>Primary Base Metal</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="text-center">
                                                            <tr class="t-row">
                                                                <td>Stainless Steel 304</td>
                                                                <td>7.9-8.0</td>
                                                                <td>Iron (Fe)</td>
                                                            </tr>
                                                            <tr class="t-row">
                                                                <td>Stainless Steel 316</td>
                                                                <td>8.0-8.1</td>
                                                                <td>Iron (Fe)</td>
                                                            </tr>
                                                            <tr class="t-row">
                                                                <td>Hastelloy C-276</td>
                                                                <td>8.9</td>
                                                                <td>Nickel (Ni)</td>
                                                            </tr>
                                                            <tr class="t-row">
                                                                <td>Hastelloy C-22</td>
                                                                <td>8.7</td>
                                                                <td>Nickel (Ni)</td>
                                                            </tr>
                                                            <tr class="t-row">
                                                                <td>Hastelloy B-2</td>
                                                                <td>9.2</td>
                                                                <td>Nickel (Ni)</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section id="blog-area">
                                    <div class="text-holder">
                                        <div class="container">
                                            <div class="blog-title text-start">
                                                <h2>Real World Impact of Weight Differences</h2>
                                            </div>
                                            <div class="row">
                                                <div class="text">
                                                    <ul>
                                                        <li><strong>Support Requirements:</strong> Heavier components need
                                                            reinforced mounting,
                                                            stronger foundations, and lifting equipment.</li>
                                                        <li><strong>Transportation Costs:</strong> Higher shipping expenses,
                                                            robust handling
                                                            equipment, increased installation complexity.</li>
                                                        <li><strong>Cost Implications:</strong> Higher freight, labor, and
                                                            installation costs
                                                            but long term durability offsets expenses.</li>
                                                    </ul>
                                                </div>
                                </section>

                                <section id="blog-area" class="blog-with-sidebar-area blog-single-area">
                                    <div class="text-holder">
                                        <div class="blog-title text-start">
                                            <h2>Making the Right Material Choice</h2>
                                        </div>
                                        <div class="exapmle">
                                            <h3>When to Choose Welded Stainless Steel Pipes</h3>
                                        </div>
                                        <p>
                                            <strong>Choose Hastelloy When:</strong> Extreme corrosion resistance, high
                                            temperatures,
                                            chemical compatibility, and long term durability are required.
                                        </p>
                                        <p>
                                            <strong>Choose Stainless Steel When:</strong> Moderate corrosion resistance,
                                            lighter
                                            weight, budget sensitivity, and easier fabrication are priorities.
                                        </p>
                                </section>

                                <section id="blog-area" class="blog-with-sidebar-area blog-single-area">
                                    <div class="text-holder">
                                        <div class="blog-title text-start">
                                            <h2>Future Trends in Metal Selection</h2>
                                        </div>

                                        <div class="text">
                                            <ul>
                                                <li><a href="{{ route('materials.titanium') }}">Titanium based
                                                        superalloys</a></li>
                                                <li>Advanced aluminum lithium compositions</li>
                                                <li>Hybrid metal matrix composites</li>
                                            </ul>
                                        </div>
                                        <p>Engineers also increasingly use computer modeling, hollow section designs, and
                                            strategic
                                            material placement to minimize weight without sacrificing performance.
                                        </p>
                                    </div>
                                </section>

                                <!--Start faq content area-->
                                <section class="faq-content-area">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="accordion-box">
                                                    <div class="blog-title text-start">
                                                        <h2>FAQ's</h2>
                                                    </div>

                                                    <!--Start single accordion box-->
                                                    <div class="accordion accordion-block">
                                                        <div class="accord-btn">
                                                            <h4>How much heavier is Hastelloy compared to stainless steel?
                                                            </h4>
                                                        </div>
                                                        <div class="accord-content">
                                                            <p>
                                                                Hastelloy typically weighs 10-15% more than stainless steel,
                                                                with densities ranging from
                                                                8.7-9.2 g/cm³ versus 7.9-8.1 g/cm³ for stainless steel.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!--End single accordion box-->

                                                    <!--Start single accordion box-->
                                                    <div class="accordion accordion-block">
                                                        <div class="accord-btn">
                                                            <h4>Does the extra weight affect Hastelloy's performance?</h4>
                                                        </div>
                                                        <div class="accord-content">
                                                            <p>
                                                                No, the higher density doesn't compromise performance. In
                                                                fact, the elements that add
                                                                weight also enhance corrosion resistance and
                                                                high-temperature strength.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!--End single accordion box-->

                                                    <!--Start single accordion box-->
                                                    <div class="accordion accordion-block">
                                                        <div class="accord-btn">
                                                            <h4>Can I substitute stainless steel for Hastelloy to save
                                                                weight?</h4>
                                                        </div>
                                                        <div class="accord-content">
                                                            <p>
                                                                Only if your application doesn't require Hastelloy's
                                                                superior corrosion resistance.
                                                                In harsh chemical environments, this substitution could lead
                                                                to premature failure.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!--End single accordion box-->

                                                    <!--Start single accordion box-->
                                                    <div class="accordion accordion-block">
                                                        <div class="accord-btn">
                                                            <h4>Are there lightweight Hastelloy alternatives?</h4>
                                                        </div>
                                                        <div class="accord-content">
                                                            <p>
                                                                For specific applications, <a
                                                                    href="{{ route('materials.titanium') }}">titanium
                                                                    alloys</a> or specialized
                                                                stainless steel grades
                                                                might offer similar corrosion resistance with reduced
                                                                weight, though typically at higher costs.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!--End single accordion box-->

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!--End faq content area-->


                                <div class="text-holder">
                                    <div class="blog-title text-start">
                                        <h2>Conclusion</h2>
                                    </div>
                                    <div class="text">
                                        <p>
                                            The weight difference between Hastelloy and stainless steel reflects their
                                            fundamental compositional differences. Hastelloy's higher density driven by
                                            substantial nickel and molybdenum content—delivers unmatched corrosion
                                            resistance in exchange for additional weight.
                                        <p>
                                            When selecting between these industrial metals, consider your specific
                                            requirements. If your application demands extreme chemical resistance or
                                            high-temperature performance, Hastelloy's weight premium pays dividends in
                                            reliability and longevity. For general applications, stainless steel's lighter
                                            weight and lower cost often provide the optimal balance.
                                        </p>
                                        <p>
                                            Ready to specify the right material for your project? Consider consulting with
                                            materials engineers who can evaluate your specific requirements and recommend
                                            the optimal balance between performance, weight, and cost for your application.
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
                    AT<strong> Moksh Tubes & Fittings LLP</strong>, we’re dedicated to making
                    your purchases seamless offering expert advice, a wide inventory of
                    certified products, and global support for every order, large or small.
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
