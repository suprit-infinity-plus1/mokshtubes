@extends('layouts.master')

@section('title', 'Super Duplex Stainless Steel S32760 | Ultra-Corrosion-Resistant Alloy')

@section('meta_description',
    'Buy Super Duplex Stainless Steel S32760 pipes, tubes & fittings from Mokshtubes LLP. Exceptional corrosion resistance, high strength, and long-lasting performance.')

@section('meta_keywords',
    'Super Duplex Stainless Steel S32760, S32760 pipes, S32760 tubes, S32760 fittings, corrosion-resistant stainless steel, high strength super duplex steel, Mokshtubes LLP, chemical processing steel, marine engineering steel, oil and gas stainless steel, desalination plant steel, stainless steel plates, stainless steel flanges')

@section('content')

<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto text-center">
                <h1>Super Duplex Stainless Steel S32760 | Ultra-Corrosion-Resistant Alloy</h1>
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

        <h3 class="h2 fw-semibold text-center mb-5" style="color: #db7227;">
            Introduction To Super Duplex Stainless Steel S32760
        </h3>

        <div class="row align-items-center">
            <!-- Image Left -->
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="{{ asset('assets/images/aluminium-alloys/aluminium-alloys-6061-T6.webp') }}"
                    alt="Super Duplex Stainless Steel S32760" class="img-fluid rounded shadow-sm">
            </div>

            <!-- Content Right -->
            <div class="col-md-6">
                <div class="pe-md-3">
                    <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                        <strong class="text-black">Super Duplex Stainless Steel S32760</strong> (commonly called PREN 50 stainless steel) is a premium duplex stainless steel grade with superior resistance to pitting, crevice corrosion, and stress corrosion cracking. It contains high chromium, molybdenum, and nitrogen content, making it one of the most corrosion-resistant stainless steels available.
                    </p>

                    <p class="fs-6 text-justify" style="text-align: justify;">
                        <a href="{{ route('index') }}">MOKSH TUBES & FITTINGS LLP</a> is a trusted supplier, exporter, importer, and stockist of Super Duplex S32760 products such as <a href="{{ route('products') }}">pipes, tubes, fittings, flanges, plates, and custom components</a>, designed for use in the most aggressive environments including seawater, chemical processing, and offshore oil & gas applications.
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
                                <th>Content (%)</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr class="t-row"><td>Carbon (C)</td><td>≤ 0.03</td></tr>
                            <tr class="t-row"><td>Manganese (Mn)</td><td>≤ 1.00</td></tr>
                            <tr class="t-row"><td>Silicon (Si)</td><td>≤ 1.00</td></tr>
                            <tr class="t-row"><td>Chromium (Cr)</td><td>24.0 – 26.0</td></tr>
                            <tr class="t-row"><td>Nickel (Ni)</td><td>6.0 – 8.0</td></tr>
                            <tr class="t-row"><td>Molybdenum (Mo)</td><td>3.0 – 4.0</td></tr>
                            <tr class="t-row"><td>Copper (Cu)</td><td>0.50 – 1.00</td></tr>
                            <tr class="t-row"><td>Nitrogen (N)</td><td>0.24 – 0.32</td></tr>
                            <tr class="t-row"><td>Iron (Fe)</td><td>Balance</td></tr>
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
                            <tr class="t-row"><td>Tensile Strength</td><td>800 – 1,000 MPa</td></tr>
                            <tr class="t-row"><td>Yield Strength (0.2% Offset)</td><td>550 – 750 MPa</td></tr>
                            <tr class="t-row"><td>Elongation</td><td>25 – 30%</td></tr>
                            <tr class="t-row"><td>Hardness</td><td>≤ 320 HB</td></tr>
                            <tr class="t-row"><td>Density</td><td>7.8 g/cm³</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

@php
    $products = [
        ['name' => 'Seamless Pipes','route' => 'products.pipes-tubes.seamless-pipes','image' => 'assets/images/all product/seamless-pipes-10.jpg'],
        ['name' => 'Welded Pipes (ERW & EFW)','route' => 'products.pipes-tubes.welded-pipes','image' => 'assets/images/all product/welded-pipes-tubes-1.jpg'],
        ['name' => 'Tubes (Capillary, U-Bend)','route' => 'products.pipes-tubes.u-bent-tubes','image' => 'assets/images/all product/11zon_resized.jpg'],
        ['name' => 'Sheets & Plates','route' => 'products.pipes-tubes.u-bent-tubes','image' => 'assets/images/all product/sheets-plates.jpg'],
        ['name' => 'Coils & Strips','route' => 'products.pipes-tubes.u-bent-tubes','image' => 'assets/images/aluminium-alloys/aluminium-alloys-5083.webp'],
        ['name' => 'Round Bars, Flat Bars, Hex Bars, Square Bars','route' => 'products.pipes-tubes.u-bent-tubes','image' => 'assets/images/aluminium-alloys/aluminium-alloys-6063.webp'],
        ['name' => 'Pipe Fittings (Elbows, Tees, Reducers, Caps, Stub Ends)','route' => 'products.pipes-tubes.u-bent-tubes','image' => 'assets/images/aluminium-alloys/aluminium-alloys-6012.webp'],
        ['name' => 'Flanges (Weld Neck, Slip-On, Blind, Socket Weld, Threaded)','route' => 'products.pipes-tubes.u-bent-tubes','image' => 'assets/images/engineering-steels/engineering-steels-4130.webp'],
        ['name' => 'Fasteners (Bolts, Nuts, Screws, Washers, Studs)','route' => 'products.pipes-tubes.u-bent-tubes','image' => 'assets/images/all product/FASTENERS-1.png'],
        ['name' => 'Custom Fabricated Components','route' => 'products.pipes-tubes.u-bent-tubes','image' => 'assets/images/all product/custom-metal-fabricated.jpg'],
    ];
@endphp

<section class="sec-padd-top sec-padd-bottom">
    <div class="container">
        <div class="section-title center">
            <h2>Products in Super Duplex Stainless Steel S32760</h2>
        </div>
        <div class="row justify-content-center mb-4" style="text-align: justify;">
            <div class="col-lg-10">
                <p class="fs-6">
                    <strong class="text-dark">Super Duplex Stainless Steel S32760</strong> is available in a variety of mill forms:
                </p>
            </div>
        </div>

        <div class="row justify-content-center mb-5">
            <div class="col-lg-10">
                <div class="p-4 bg-white rounded shadow-sm border-start border-4" style="border-color: #db7227;">
                    <div class="row">
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

        <div class="row justify-content-center mb-3">
            <div class="col-lg-10">
                <h2 class="fw-bold fs-5 text-center my-4" style="color: #174268;">
                    We supply Super Duplex Stainless Steel S32760 materials in accordance with the most stringent industry standards:
                </h2>
            </div>
        </div>

        <div class="row g-4">
            @foreach ($products as $product)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex">
                    <div class="mx-auto" style="width: 100%; max-width: 300px;">
                        <a href="{{ route($product['route']) }}" class="text-decoration-none">
                            <div class="product-card h-100">
                                <img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}" class="img-fluid  w-100">
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
    <div class="container">
        <div class="section-title center">
            <h2>Uses and Advantages</h2>
        </div>

        <div class="row g-4 mt-4 justify-content-center">
            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                    <h3>Exceptional resistance to chloride-induced stress corrosion cracking</h3>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                    <h3>Superior pitting and crevice corrosion resistance, especially in seawater</h3>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-arrow-up-square"></i></div>
                    <h3>Excellent mechanical strength at elevated temperatures</h3>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-tools"></i></div>
                    <h3>Good weldability and formability</h3>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="advantage-card">
                    <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                    <h3>Long service life in harsh, aggressive environments</h3>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="sec-padd-top sec-padd-bottom">
    <div class="container">
        <div class="section-title center">
            <h2>Applications of Super Duplex Stainless Steel S32760</h2>
            <p class="text-center pb-3"><strong class="text-dark">Super Duplex Stainless Steel S32760</strong> is widely used across multiple industries:</p>
        </div>

        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                    <h3>Offshore Oil & Gas</h3>
                    <p>Platforms, risers, subsea equipment, and pipelines.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                    <h3>Desalination Plants</h3>
                    <p>Seawater cooling systems and desalination equipment.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                    <h3>Chemical Processing</h3>
                    <p>Reactors, heat exchangers, and piping for chemical industries.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-box-seam"></i></div>
                    <h3>Marine Engineering</h3>
                    <p>Offshore structures and seawater applications.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="application-card">
                    <div class="application-icon"><i class="bi bi-file-earmark-text"></i></div>
                    <h3>Pressure Vessels</h3>
                    <p>Vessels operating in aggressive corrosive environments.</p>
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
                    <p>Mokshtubes Fittings & LLP provides Super Duplex S32760 in seamless pipes, welded pipes, tubes,
                        fittings, flanges, sheets, plates, and custom fabricated components.</p>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="why-banner-block">
                    <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                    <h3>Custom Fabrication</h3>
                    <p>Our products meet stringent quality standards to deliver long-term performance in the harshest environments.</p>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="why-banner-block">
                    <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                    <h3>Quality Standards</h3>
                    <p>All components are manufactured to the highest international standards, ensuring durability and reliability.</p>
                </div>
            </div>

            <div class="col-sm-6 col-lg-6">
                <div class="why-banner-block">
                    <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                    <h3>Technical Support</h3>
                    <p>Our expert team provides guidance for selecting the right materials and applications across industries.</p>
                </div>
            </div>

            <div class="col-sm-6 col-lg-6">
                <div class="why-banner-block">
                    <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                    <h3>Customer Satisfaction</h3>
                    <p>We are committed to quality assurance and long-term client satisfaction through reliable service and product excellence.</p>
                </div>
            </div>
        </div>
    </div>
</section>




<section class="faq-content-area sec-padd2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="accordion-box">
                    <div class="section-title center">
                        <h2>FAQ's</h2>
                    </div>

                    <div class="accordion accordion-block">
                        <div class="accord-btn active">
                            <h3>Why is Super Duplex S32760 highly corrosion-resistant?</h3>
                        </div>
                        <div class="accord-content collapsed">
                            <p>Due to its high chromium, molybdenum, and nitrogen content, it has excellent resistance to pitting, crevice corrosion, and chloride stress corrosion cracking.</p>
                        </div>
                    </div>

                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h3>Is S32760 weldable?</h3>
                        </div>
                        <div class="accord-content">
                            <p>Yes, but welding requires controlled heat input and post-weld heat treatment to maintain corrosion resistance and mechanical properties.</p>
                        </div>
                    </div>

                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h3>Where is S32760 most commonly used?</h3>
                        </div>
                        <div class="accord-content">
                            <p>Primarily in offshore oil & gas, marine engineering, and desalination plants, where chloride resistance is critical.</p>
                        </div>
                    </div>

                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h3>Can S32760 be used in seawater applications?</h3>
                        </div>
                        <div class="accord-content">
                            <p>Yes, it offers excellent resistance to seawater corrosion and stress corrosion cracking.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Contact Us</h2>
                <p>
                    For inquiries, pricing, or customized Super Duplex Stainless Steel S32760 solutions, <strong>Moksh Tubes &
                        Fittings
                        LLP</strong> is your reliable partner in Super Duplex Stainless Steel S32760.</p>
                <a href="javascript:void(0);" class="contact-cta-btn" data-bs-toggle="modal"
                    data-bs-target="#contactFormModal">
                    Get in Touch
                </a>
            </div>
        </div>
    </section>

@endsection
