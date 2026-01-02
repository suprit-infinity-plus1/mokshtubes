@extends('layouts.master')

@section('title', 'Carbide Alloys for Superior Hardness & Precision')
@section('meta_description', 'Carbide delivers exceptional hardness, wear resistance & precision—ideal for cutting
    tools, machinery & demanding industrial applications.')
@section('meta_keywords',
    'Carbide, high hardness carbide, wear resistant carbide, precision cutting tools, industrial
    carbide, high stress applications, durable carbide')
@section('og_image',
    asset('assets/images/hard-to-find-and-special-alloys/hard-to-find-and-special-alloys-carbide.webp'))
@section('og_type', 'article')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area"
        style="background-image: url(/assets/images/hard-to-find-and-special-alloys/hard-to-find-and-special-alloys-carbide.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Carbide Alloys <br> High Hardness & Precision</h1>
                </div>
            </div>
        </div>
    </section>

    <!--End breadcrumb area-->
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Product Overview</h2>
            </div>

            <h2 class="fw-semibold text-center mb-5" style="color: #db7227;">
                Introduction to Carbide Alloys – Tungsten, Titanium & Tantalum
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/hard-to-find-and-special-alloys/hard-to-find-and-special-alloys-carbide.webp') }}"
                        alt="Carbide alloys" class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a trusted manufacturer,
                            exporter, and supplier of Carbide Alloys, offering a wide range of <a
                                href="{{ route('products') }}">products</a> including Tungsten
                            Carbide (WC), Titanium Carbide (TiC), Tantalum Carbide (TaC), and specialty carbide-based tools
                            and components. Our range includes rods, strips, dies, nozzles, inserts, buttons, rings, wear
                            parts, and custom-engineered <a
                                href="{{ route('materials.hard-To-Find-Special-Alloys') }}">carbide</a> components
                            designed to withstand extreme wear, abrasion,
                            and thermal stress.

                        <p> <strong class="text-black"><a
                                    href="{{ route('materials.hard-To-Find-Special-Alloys') }}">Carbide
                                    Alloys</a></strong> are hard, wear-resistant materials made by
                            combining carbide particles with metallic binders like cobalt or nickel. These alloys offer
                            exceptional hardness, high-temperature resistance, and excellent dimensional stability, making
                            them ideal for demanding industrial applications including metal cutting, mining, oil & gas,
                            aerospace, and wear protection systems.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Chemical Composition</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Element</th>
                                    <th>Composition (%)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Tungsten</td>
                                    <td>80.0 – 97.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon</td>
                                    <td>4.0 – 6.5</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Cobalt</td>
                                    <td>3.0 – 20.0 (binder phase)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Titanium</td>
                                    <td>Optional (in TiC grades)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tantalum</td>
                                    <td>Optional (in TaC grades)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Niobium</td>
                                    <td>Optional</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nickel</td>
                                    <td>Optional binder (for corrosion-resistant grades)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Technical Composition</h2>
            </div>

            <!-- Physical Properties Table -->
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8">
                    <h4 class="text-center mb-3" style="color: #db7227;">Physical Properties</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Property</th>
                                    <th>Imperial</th>
                                    <th>Metric</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Density</td>
                                    <td>15.6 lb/in³</td>
                                    <td>15.6 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Point</td>
                                    <td>5742 °F (sublimation)</td>
                                    <td>3170 °C (sublimation)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Modulus of Elasticity – Tension</td>
                                    <td>59 × 10³ ksi</td>
                                    <td>407 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Modulus of Elasticity – Compression</td>
                                    <td>59 × 10³ ksi</td>
                                    <td>407 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Modulus of Elasticity – Torsion</td>
                                    <td>20 × 10³ ksi</td>
                                    <td>138 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Poisson’s Ratio</td>
                                    <td>0.22</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Curie Temperature</td>
                                    <td>Not applicable</td>
                                    <td>Not applicable</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Mechanical Properties Table -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h4 class="text-center mb-3" style="color: #db7227;">Mechanical Properties</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Property</th>
                                    <th>Annealed</th>
                                    <th>Hot-Finished</th>
                                    <th>Cold Worked</th>
                                    <th>Hot-Rolled</th>
                                    <th>Sheet</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Tensile Strength (ksi / MPa)</td>
                                    <td>300–400 / 2070–2760</td>
                                    <td>—</td>
                                    <td>—</td>
                                    <td>—</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (0.2%) (ksi / MPa)</td>
                                    <td>250–350 / 1720–2410</td>
                                    <td>—</td>
                                    <td>—</td>
                                    <td>—</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elongation (%)</td>
                                    <td>0.1–1</td>
                                    <td>—</td>
                                    <td>—</td>
                                    <td>—</td>
                                    <td>—</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Rockwell Hardness (B / C)</td>
                                    <td>—</td>
                                    <td>—</td>
                                    <td>—</td>
                                    <td>—</td>
                                    <td>80–90 HRC</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Brinell Hardness (HB)</td>
                                    <td>1500–2200</td>
                                    <td>—</td>
                                    <td>—</td>
                                    <td>—</td>
                                    <td>—</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @php
        $products = [
            [
                'name' => 'Seamless Pipes',
                'route' => 'products.pipes-tubes.seamless-pipes',
                'image' => 'assets/images/all product/seamless-pipes-10.webp',
            ],

            [
                'name' => 'Welded Pipes (ERW & EFW)',
                'route' => 'products.pipes-tubes.welded-pipes',
                'image' => 'assets/images/all product/welded-pipes-tubes-1.webp',
            ],
            [
                'name' => 'Tubes (Capillary, U-Bend)',
                'route' => 'products.pipes-tubes.u-bent-tubes',
                'image' => 'assets/images/all product/u-bent-tube.webp',
            ],
            [
                'name' => 'Sheets & Plates',
                'route' => 'products.sheets-plates-coils.sheets-and-plates',
                'image' => 'assets/images/all product/sheets-plates.webp',
            ],
            [
                'name' => 'Coils & Strips',
                'route' => 'products.sheets-plates-coils.strips',
                'image' => 'assets/images/aluminium-alloys/aluminium-alloys-5083.webp',
            ],
            [
                'name' => 'Round Bars, Flat Bars, Hex Bars, Square Bars',
                'route' => 'products.bars-rods',
                'image' => 'assets/images/aluminium-alloys/aluminium-alloys-6063.webp',
            ],
            [
                'name' => 'Pipe Fittings (Elbows, Tees, Reducers, Caps, Stub Ends)',
                'route' => 'products.pipe-fittings-flanges-fasteners.pipe-fittings',
                'image' => 'assets/images/aluminium-alloys/aluminium-alloys-6012.webp',
            ],
            [
                'name' => 'Flanges (Weld Neck, Slip-On, Blind, Socket Weld, Threaded)',
                'route' => 'products.pipe-fittings-flanges-fasteners.flanges-and-gaskets',
                'image' => 'assets/images/engineering-steels/engineering-steels-4130.webp',
            ],
            [
                'name' => 'Fasteners (Bolts, Nuts, Screws, Washers, Studs)',
                'route' => 'products.pipe-fittings-flanges-fasteners.fasteners',
                'image' => 'assets/images/all product/FASTENERS.webp',
            ],
            [
                'name' => 'Custom Fabricated Components',
                'route' => 'products.pipe-fittings-flanges-fasteners.custom-fabricated-fittings',
                'image' => 'assets/images/all product/custom-metal-fabricated.webp',
            ],
        ];
    @endphp

    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Products in Carbide Alloys</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Carbide Alloys</strong> is commonly supplied as:
                    </p>
                </div>
            </div>

            <!-- Horizontal Styled Product List -->
            <div class="row justify-content-center mb-5">
                <div class="col-lg-10">
                    <div class="p-4 bg-white rounded shadow-sm border-start border-4" style="border-color: #db7227;">
                        <div class="row">
                            {{-- @foreach ($products as $slug => $product) --}}
                            @foreach ($products as $product)
                                <div class="col-12 col-sm-6 mb-2 d-flex justify-content-start align-items-start">
                                    <span class="me-2" style="color: #db7227; font-size: 1.1rem;">&#10004;</span>
                                    <span>{{ $product['name'] }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- Emphasized Line -->
            <div class="row justify-content-center mb-3">
                <div class="col-lg-10">
                    <p class="fw-bold fs-5 text-center my-4" style="color: #174268;">
                        We supply Carbide Alloys materials in accordance with the most stringent industry standards: </p>
                </div>
            </div>

            <!-- Product Image Cards (Now centered and responsive) -->
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-4 justify-content-center">
                @foreach ($products as $product)
                    <div class="col d-flex">
                        <a href="{{ route($product['route']) }}" class="text-decoration-none w-100">
                            <div class="product-card h-100">
                                <img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}"
                                    class="img-fluid w-100">
                                <h6 class="product-card-title text-center mt-0 py-4">{{ $product['name'] }}</h6>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Uses and Advantages</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Extremely high hardness and wear resistance</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Excellent heat resistance and thermal stability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>High compressive strength and rigidity</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Resistance to corrosion (in WC-Ni grades)</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Long service life under extreme conditions</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Carbide Alloys</h2>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Tooling & Machining</h5>
                        <p>Cutting tools (turning, milling, drilling).</p>
                        <p>Reamers, end mills, and wear blades.</p>
                        <p>Stamping and punching dies.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Mining & Construction</h5>
                        <p>Button bits, drill rods, chisel tools.</p>
                        <p>Road planning picks, tunneling bits.</p>
                        <p>Oil well drilling heads and downhole tools.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Industrial Wear Parts</h5>
                        <p>Pump sleeves, seal rings, guide bushings.</p>
                        <p>Abrasive-resistant liners, wear blocks.</p>
                        <p>Valves, plungers, and mechanical seals.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Chemical & Energy Industry</h5>
                        <p>Components exposed to corrosive slurries.</p>
                        <p>Carbide wear plates in reactors and furnaces.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Aerospace & Defense</h5>
                        <p>Jet engine components, rocket nozzles.</p>
                        <p>Armor-piercing cores and protective inserts.</p>
                    </div>
                </div>

                {{-- <div class="col-md-6 col-lg-4">
                <div class="application-card">
                     <div class="application-icon"><i class="bi bi-strategies"></i></div>
                    <h5>Why It Works</h5>
                    <p><strong>HASTELLOY C276’s</strong> combination of corrosion resistance, weldability, and mechanical durability makes it ideal for mission-critical applications where long-term performance is non-negotiable.</p>
                </div>
            </div> --}}
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container text-center">
            <div class="section-title center">
                <h2>WHY CHOOSE US?</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-award-fill"></i></div>
                        <h5>In-house capability for precision carbide machining</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>ISO-compliant manufacturing and custom grade development</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>End-to-end supply from powder to finished components</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Strong network of global clients and OEMs</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Technical assistance and quick turnaround for custom parts</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Start faq content area-->
    <section class="faq-content-area sec-padd2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="accordion-box">
                        <div class="section-title center">
                            <h2>FAQ's</h2>
                        </div>

                        <!-- Q1 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are Carbide Alloys used for?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Carbide Alloys are used for cutting tools, mining bits, drilling heads, stamping and
                                    punching dies, wear parts in industrial machinery, aerospace components, and
                                    chemical-resistant applications.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What types of Carbide Alloys does MOKSH TUBES & FITTINGS supply?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    We supply Tungsten Carbide (WC), Titanium Carbide (TiC), Tantalum Carbide (TaC), and
                                    custom carbide grades for specialized applications, available as rods, strips, sheets,
                                    tubes, and fabricated components.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the key properties of Carbide Alloys?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Carbide Alloys offer extreme hardness, excellent wear resistance, high compressive
                                    strength, thermal stability, corrosion resistance (in specific grades), and long service
                                    life under harsh conditions.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>In what forms are Carbide Alloys available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Carbide Alloys are supplied as seamless and welded pipes, tubes, sheets, plates, bars,
                                    flanges, fasteners, and custom engineered components tailored to industrial needs.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose MOKSH TUBES & FITTINGS for Carbide Alloys?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    We provide ISO compliant carbide products with precision machining capabilities, custom
                                    grade development, end to end supply from powder to finished parts, technical support,
                                    and global delivery for OEMs and industrial clients.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End faq content area-->

     {{-- blog section start --}}
      <section class="blog-section sec-padd2">
        <div class="container">
            <div class="section-title">
                <h2>blogs</h2>
            </div>
            <div class="row">
                @foreach ($blogs as $blog)
                    {{-- {{ dd($blog) }} --}}
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="default-blog-news wow fadeInUp animated">

                            <figure class="img-holder mb-0">
                                <a href="{{ route('frontend.single-blog', $blog->slug) }}">
                                    <img src="{{ asset('storage/' . $blog->cover_image) }}" alt="{{ $blog->title }}"
                                        loading="lazy">
                                </a>
                                <figcaption class="overlay">
                                    <div class="box">
                                        <div class="content">
                                            <a href="{{ route('frontend.single-blog', $blog->slug) }}">
                                                <i class="fa fa-link" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class="lower-content">
                                <a href="{{ route('frontend.single-blog', $blog->slug) }}">
                                    <h5>{{ Str::limit($blog->title, 30) }}</h5>
                                </a>

                                <div class="post-meta">
                                    by {{ $blog->author ?? 'Admin' }} |
                                    {{ $blog->created_at->format('F d, Y') }}
                                </div>

                                <!--<div class="text">-->
                                <!--</div>-->
                                {!! \Str::limit(strip_tags($blog->content, '<i>'), 120) !!}

                                <div class="link">
                                    <a href="{{ route('frontend.single-blog', $blog->slug) }}" class="default_link">
                                        Read More <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- blog section end --}}


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Contact Us</h2>
                <p>
                    Contact <strong>Moksh Tubes & Fittings LLP</strong> — your trusted partner in wear-resistant and
                    high-strength carbide solutions.
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
            {
            "@context": "https://schema.org",
            "@type": "FAQPage",
            "mainEntity": [
                {
                "@type": "Question",
                "name": "What are Carbide Alloys used for?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Carbide Alloys are used for cutting tools, mining bits, drilling heads, stamping and punching dies, wear parts in industrial machinery, aerospace components, and chemical-resistant applications."
                }
                },
                {
                "@type": "Question",
                "name": "What types of Carbide Alloys does MOKSH TUBES & FITTINGS supply?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We supply Tungsten Carbide (WC), Titanium Carbide (TiC), Tantalum Carbide (TaC), and custom carbide grades for specialized applications, available as rods, strips, sheets, tubes, and fabricated components."
                }
                },
                {
                "@type": "Question",
                "name": "What are the key properties of Carbide Alloys?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Carbide Alloys offer extreme hardness, excellent wear resistance, high compressive strength, thermal stability, corrosion resistance (in specific grades), and long service life under harsh conditions."
                }
                },
                {
                "@type": "Question",
                "name": "In what forms are Carbide Alloys available?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Carbide Alloys are supplied as seamless and welded pipes, tubes, sheets, plates, bars, flanges, fasteners, and custom engineered components tailored to industrial needs."
                }
                },
                {
                "@type": "Question",
                "name": "Why choose MOKSH TUBES & FITTINGS for Carbide Alloys?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We provide ISO compliant carbide products with precision machining capabilities, custom grade development, end to end supply from powder to finished parts, technical support, and global delivery for OEMs and industrial clients."
                }
                }
            ]
            }

        @endverbatim
    </script>
@endsection
