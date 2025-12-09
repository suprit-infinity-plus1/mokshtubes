@extends('layouts.master')

@section('title', 'Super Duplex 2507 – High Corrosion Resistance')

@section('meta_description', 'Super Duplex Stainless Steel 2507 (S32750) – ultra corrosion-resistant, high-strength alloy for chemical, marine, and industrial applications.')

@section('meta_keywords', 'Super Duplex Stainless Steel 2507, S32750, 2507 pipes, 2507 tubes, 2507 fittings,
    corrosion-resistant stainless steel, high strength super duplex steel, Mokshtubes LLP, chemical processing steel, marine
    engineering steel, oil and gas stainless steel, desalination plant steel, stainless steel plates, stainless steel
    flanges')
@section('og_image', asset('assets/images/aluminium-alloys/aluminium-alloys-6061-T6.webp'))
@section('og_type', 'article')
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>
    Duplex 2507 Stainless Steel<br>
   Ultra High Corrosion-Resistant Alloy

</h1>
 <!-- Add your extra content here -->
                    <p class="text-center mt-3 px-3 py-2 text-white position-relative"
                        style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px;">
                  Super Duplex Stainless Steel 2507 (UNS S32750) is a premium super duplex alloy offering ultra-high corrosion resistance, outstanding strength, and exceptional resistance to pitting, crevice corrosion, and chloride-induced stress corrosion cracking. Designed for highly aggressive environments, 2507 is widely used in offshore platforms, desalination plants, chemical processing, and marine applications where maximum durability and reliability are essential.

                    </p>
                    <!-- End extra content -->



                </div>
            </div>
        </div>
    </section>

    <style>

    .material-tabs {
    background: #ffffff;
    text-align: center;
    padding: 15px 0;
    border-bottom: 1px solid #e5e5e5;
    position: sticky;   /* you missed this */
    top: 50px;             /* and this */
    z-index: 1020;
}

.material-tabs a {
    margin: 0 14px;
    font-weight: 600;
    color: #1b3c61 !important;
    text-decoration: none;
    font-size: 16px;
    transition: 0.25s ease;
    display: inline-block;
}

.material-tabs a:hover {
    color: #db7227 !important;
    transform: translateY(-2px);
}
</style>
<div class="sticky-top bg-white border-bottom material-tabs d-none d-md-block w-100">
    <div class="container">
        <a href="#overview">Overview</a> |
        <a href="#composition">Chemical Composition</a> |
        <a href="#heat-treatment">Heat Treatment</a> |
        <a href="#mechanical">Mechanical Properties</a> |
        <a href="#price">Advantages</a> |
        <a href="#applications">Applications</a> |
        <a href="#faq">FAQ</a> |
        <a href="#contact us">Contact Us</a> 
    </div>
</div>

    <!--End breadcrumb area-->

    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Super Duplex 2507 (S32750) | Product Overview</h2>
            </div>

            <h3 class="h2 fw-semibold text-center mb-5" style="color: #db7227;">
                Introduction To Super Duplex Stainless Steel 2507
            </h3>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/aluminium-alloys/aluminium-alloys-6061-T6.webp') }}"
                        alt="Super Duplex Stainless Steel 2507" class="img-fluid rounded shadow-sm" loading="lazy">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black">Super Duplex Stainless Steel 2507 (S32750)</strong> is a premium
                            duplex stainless steel grade with exceptional corrosion resistance and high mechanical strength.
                            Featuring high levels of chromium (25%), molybdenum (4%), and nitrogen, this alloy offers
                            unmatched resistance to pitting, crevice corrosion, and stress corrosion cracking, particularly
                            in chloride-rich and aggressive environments.
                        </p>

                        <p class="fs-6 text-justify" style="text-align: justify;">
                            <a href="{{ route('index') }}">MOKSH TUBES & FITTINGS LLP</a> is a trusted supplier, exporter,
                            importer, and stockist of Super Duplex 2507 products including <a
                                href="{{ route('products') }}">pipes, tubes, fittings, flanges, sheets, plates</a>, and custom
                                components. This alloy is widely used in offshore oil & gas, chemical processing, marine
                            engineering, and desalination plants.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

     {{-- start datasheet --}}
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download Duplex 2507 Datasheet
</h3>
            <p class="mb-3">
              Get the complete Duplex 2507 datasheet with chemical composition, mechanical properties, corrosion resistance data, heat treatment details, and applications.

            </p>

            <!-- Lead Capture Form -->
            <form id="leadForm" method="POST" action="https://mokshtubes.com/datasheet-leads-capture" class="mb-3">
                <input type="hidden" name="_token" value="WNVWvpO4YR2OqZaIJDl2mE3UfyreGys3Vp19brsc" autocomplete="off">
                <div class="row justify-content-center">
                    <input type="hidden" name="pdf" value="haynes-242.pdf">
                    <div class="col-md-6 mb-2">
                        <input type="email" name="email" required="" class="form-control p-3"
                            placeholder="Enter your email address">
                    </div>
                    <div class="col-md-3 mb-2">
                        <button type="submit" class="btn btn-lg w-100 text-white"
                            style="background-color:#db7227; border-radius:8px;">
                            📥 Get Datasheet
                        </button>
                    </div>
                </div>
            </form>



            <p class="small text-muted">
                We respect your privacy. Your email will only be used to send the datasheet.
            </p>
        </div>
    </section>
    <!-- End Datasheet Download Section -->

    <section class="sec-padd-top sec-padd-bottom bg-light">
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
                                    <th>Content (%)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Carbon (C)</td>
                                    <td>≤ 0.03</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Manganese (Mn)</td>
                                    <td>≤ 0.50</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Silicon (Si)</td>
                                    <td>≤ 0.80</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Chromium (Cr)</td>
                                    <td>24.0 – 26.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nickel (Ni)</td>
                                    <td>6.0 – 8.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Molybdenum (Mo)</td>
                                    <td>3.0 – 5.0</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Copper (Cu)</td>
                                    <td>0.50 max</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nitrogen (N)</td>
                                    <td>0.24 – 0.32</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron (Fe)</td>
                                    <td>Balance</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Mechanical Properties</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Property</th>
                                    <th>Value</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Tensile Strength</td>
                                    <td>850 – 1,050 MPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (0.2% Offset)</td>
                                    <td>550 – 750 MPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elongation</td>
                                    <td>20 – 25%</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Hardness</td>
                                    <td>≤ 320 HB</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Density</td>
                                    <td>7.8 g/cm³</td>
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

    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Products in Duplex Stainless Steel S31803</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Duplex Stainless Steel S31803</strong> is available in a variety of mill
                        forms:
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
                    <h2 class="fw-bold fs-5 text-center my-4" style="color: #174268;">
                        We supply Duplex Stainless Steel S31803 materials in accordance with the most stringent industry
                        standards: </h2>
                </div>
            </div>

            <!-- Product Image Cards (Now centered and responsive) -->
            <div class="row g-4">
                @foreach ($products as $product)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex">
                        <div class="mx-auto" style="width: 100%; max-width: 300px;">
                            <a href="{{ route($product['route']) }}" class="text-decoration-none">
                                <div class="product-card h-100">
                                    <img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}"
                                        class="img-fluid  w-100">
                                    <h6 class="product-card-title text-center mt-2 px-2">{{ $product['name'] }}</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container text-center">
            <div class="section-title center">
                <h2>Uses and Advantages</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h3>Highest corrosion resistance among duplex stainless steels</h3>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h3>Exceptional resistance to pitting and crevice corrosion, even in seawater and acidic
                            environments</h3>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-arrow-up-square"></i></div>
                        <h3>Excellent resistance to chloride stress corrosion cracking</h3>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-tools"></i></div>
                        <h3>High mechanical strength (twice that of austenitic stainless steels)</h3>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h3>Long service life in the most aggressive environments</h3>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-wrench"></i></div>
                        <h3>Good weldability and formability</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Super Duplex Stainless Steel 2507 (S32750)</h2>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h3>Offshore Oil & Gas Platforms</h3>
                        <p>Subsea equipment and offshore installations.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet-half"></i></div>
                        <h3>Desalination Plants</h3>
                        <p>Components and seawater cooling systems.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h3>Chemical Processing</h3>
                        <p>Reactors, heat exchangers, and piping systems.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-box-seam"></i></div>
                        <h3>Marine Engineering</h3>
                        <p>Structural components in corrosive environments.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h3>Pressure Vessels & Flanges</h3>
                        <p>Equipment in corrosive conditions and chloride-rich fluids.</p>
                    </div>
                </div>
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
                        <h3>Seamless & Welded Pipes</h3>
                        <p>Mokshtubes Fittings & LLP offers Super Duplex 2507 in seamless pipes, welded pipes, tubes,
                            fittings, flanges, sheets, plates, and custom fabricated components with international quality
                            assurance.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h3>Custom Fabrication</h3>
                        <p>Our products adhere to strict quality standards to ensure long-term performance in the most
                            demanding environments.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h3>Quality Standards</h3>
                        <p>Manufactured to the highest standards for long-lasting industrial performance.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h3>Technical Support</h3>
                        <p>Experienced guidance for material selection and application across industries.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h3>Customer Satisfaction</h3>
                        <p>Commitment to quality assurance and long-term client satisfaction.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Start faq content area-->
    <section class="faq-content-area sec-padd2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="accordion-box">
                        <div class="section-title center">
                            <h2>FAQ's</h2>
                        </div>

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn active">
                                <h3>Why is Super Duplex 2507 (S32750) considered superior?</h3>
                            </div>
                            <div class="accord-content collapsed">
                                <p>Due to its high chromium, molybdenum, and nitrogen content, it offers the highest
                                    corrosion resistance among duplex stainless steels, especially in chloride environments.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h3>Is S32750 weldable?</h3>
                            </div>
                            <div class="accord-content">
                                <p>Yes, but controlled heat input and post-weld heat treatment are essential to maintain
                                    corrosion resistance and mechanical properties.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h3>Where is S32750 most commonly used?</h3>
                            </div>
                            <div class="accord-content">
                                <p>In offshore oil & gas, marine engineering, chemical processing, and desalination plants
                                    where maximum corrosion resistance is required.</p>
                            </div>
                        </div>

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h3>Can S32750 be used in seawater applications?</h3>
                            </div>
                            <div class="accord-content">
                                <p>Yes — it is exceptionally resistant to seawater corrosion and chloride stress corrosion
                                    cracking, making it ideal for marine environments.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End faq content area-->

    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Contact Us</h2>
                <p>
                    For inquiries, pricing, or customized Super Duplex Stainless Steel 2507 solutions, <strong>Moksh Tubes &
                        Fittings
                        LLP</strong> is your reliable partner in Super Duplex Stainless Steel 2507.</p>
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
      "name": "Why is Super Duplex 2507 (S32750) considered superior?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Due to its high chromium, molybdenum, and nitrogen content, it offers the highest corrosion resistance among duplex stainless steels, especially in chloride environments."
      }
    },
    {
      "@type": "Question",
      "name": "Is S32750 weldable?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, but controlled heat input and post-weld heat treatment are essential to maintain corrosion resistance and mechanical properties."
      }
    },
    {
      "@type": "Question",
      "name": "Where is S32750 most commonly used?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "In offshore oil & gas, marine engineering, chemical processing, and desalination plants where maximum corrosion resistance is required."
      }
    },
    {
      "@type": "Question",
      "name": "Can S32750 be used in seawater applications?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes — it is exceptionally resistant to seawater corrosion and chloride stress corrosion cracking, making it ideal for marine environments."
      }
    }
  ]
}
@endverbatim
</script>
@endsection
