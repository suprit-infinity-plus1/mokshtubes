@extends('layouts.master')

@section('title', 'Titanium Grade 12')
@section('meta_description',
    'Corrosion-resistant Titanium Grade 12 with enhanced weldability for marine & chemical uses.
    ')

@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Titanium Grade 12</h1>
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
                Introduction To Titanium Grade 12 / UNS R53400
            </h2>

            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/titanium/titanium-grade2.webp') }}" alt="Titanium Grade 12"
                        class="img-fluid rounded shadow-sm">
                </div>

                <!-- Content Right -->
                <div class="col-md-6">
                    <div class="pe-md-3">
                        <p class="fs-6 mb-4 text-justify" style="text-align: justify;">
                            <strong class="text-black"> MOKSH TUBES & FITTINGS LLP</strong> is a trusted manufacturer,
                            exporter, importer, stockist, and supplier of a wide array of<strong class="text-black">
                                Titanium Grade 12 products.</strong> Our
                            offerings include <a href="{{ route('products.pipes-tubes') }}">Pipes & Tubes</a>, Sheets &
                            Plates, Pipe Fittings, Flanges, Wires, Bars, Coils,
                            Welding Rods, and Custom Components designed for extreme performance and reliability.

                        </p>

                        <p class="fs-6" style="text-align: justify;">
                            <strong class="text-black">Titanium Grade 12 </strong>is a trusted manufacturer, exporter,
                            importer, stockist, and supplier of a wide array of Titanium Grade 12 <a
                                href="{{ route('products') }}">products</a>. Our offerings
                            include Pipes & Tubes, Sheets & Plates, Pipe Fittings, Flanges, Wires, Bars, Coils, Welding
                            Rods, and Custom Components designed for extreme performance and reliability.
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
                                    <td>Titanium</td>
                                    <td>Balance</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nickel</td>
                                    <td>0.6 – 0.9</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Molybdenum</td>
                                    <td>0.2 – 0.4</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Iron</td>
                                    <td>≤ 0.30</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon</td>
                                    <td>≤ 0.08</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nitrogen</td>
                                    <td>≤ 0.03</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Oxygen</td>
                                    <td>≤ 0.25</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Hydrogen</td>
                                    <td>≤ 0.015</td>
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
                                    <td>0.163 lb/in³</td>
                                    <td>4.51 g/cm³</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Melting Point</td>
                                    <td>1620–1660 °F</td>
                                    <td>882–904 °C</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elastic Modulus</td>
                                    <td>15.0 x 10⁶ psi</td>
                                    <td>103 GPa</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Thermal Conductivity</td>
                                    <td>9.8 Btu/hr·ft·°F</td>
                                    <td>16.9 W/m·K</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Electrical Resistivity</td>
                                    <td>27.0 μΩ·cm</td>
                                    <td>1.34 μΩ·m</td>
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
                                    <th>Tubing (Annealed)</th>
                                    <th>Tubing (Cold Drawn)</th>
                                    <th>Bar (Annealed)</th>
                                    <th>Plate (Annealed)</th>
                                    <th>Sheet (Annealed)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Tensile Strength (ksi)</td>
                                    <td>80</td>
                                    <td>100</td>
                                    <td>85</td>
                                    <td>82</td>
                                    <td>84</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Tensile Strength (MPa)</td>
                                    <td>552</td>
                                    <td>690</td>
                                    <td>586</td>
                                    <td>565</td>
                                    <td>579</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (0.2%) (ksi)</td>
                                    <td>60</td>
                                    <td>85</td>
                                    <td>65</td>
                                    <td>63</td>
                                    <td>64</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Yield Strength (MPa)</td>
                                    <td>414</td>
                                    <td>586</td>
                                    <td>448</td>
                                    <td>434</td>
                                    <td>441</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Elongation (%)</td>
                                    <td>25</td>
                                    <td>15</td>
                                    <td>20</td>
                                    <td>4</td>
                                    <td>18</td>
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
                'image' => 'assets/images/all product/seamless-pipes-10.jpg',
            ],

            [
                'name' => 'Welded Pipes (ERW & EFW)',
                'route' => 'products.pipes-tubes.welded-pipes',
                'image' => 'assets/images/all product/welded-pipes-tubes-1.jpg',
            ],
            [
                'name' => 'Tubes (Capillary, U-Bend)',
                'route' => 'products.pipes-tubes.u-bent-tubes',
                'image' => 'assets/images/all product/11zon_resized.jpg',
            ],
            [
                'name' => 'Sheets & Plates',
                'route' => 'products.pipes-tubes.u-bent-tubes',
                'image' => 'assets/images/all product/sheets-plates.jpg',
            ],
            [
                'name' => 'Coils & Strips',
                'route' => 'products.pipes-tubes.u-bent-tubes',
                'image' => 'assets/images/aluminium-alloys/aluminium-alloys-5083.webp',
            ],
            [
                'name' => 'Round Bars, Flat Bars, Hex Bars, Square Bars',
                'route' => 'products.pipes-tubes.u-bent-tubes',
                'image' => 'assets/images/aluminium-alloys/aluminium-alloys-6063.webp',
            ],
            [
                'name' => 'Pipe Fittings (Elbows, Tees, Reducers, Caps, Stub Ends)',
                'route' => 'products.pipes-tubes.u-bent-tubes',
                'image' => 'assets/images/aluminium-alloys/aluminium-alloys-6012.webp',
            ],
            [
                'name' => 'Flanges (Weld Neck, Slip-On, Blind, Socket Weld, Threaded)',
                'route' => 'products.pipes-tubes.u-bent-tubes',
                'image' => 'assets/images/engineering-steels/engineering-steels-4130.webp',
            ],
            [
                'name' => 'Fasteners (Bolts, Nuts, Screws, Washers, Studs)',
                'route' => 'products.pipes-tubes.u-bent-tubes',
                'image' => 'assets/images/all product/FASTENERS-1.png',
            ],
            [
                'name' => 'Custom Fabricated Components',
                'route' => 'products.pipes-tubes.u-bent-tubes',
                'image' => 'assets/images/all product/custom-metal-fabricated.jpg',
            ],
        ];
    @endphp

    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Products in Titanium Grade 12</h2>
            </div>
            <!-- Highlighted Paragraph -->
            <div class="row justify-content-center mb-4" style="text-align: justify;">
                <div class="col-lg-10">
                    <p class="fs-6">
                        <strong class="text-dark">Titanium Grade 12 (UNS R53400) </strong>is widely recognized for its
                        exceptional resistance to corrosion in hot, mildly reducing environments such as those involving wet
                        chlorine gas, acetic acid, or nitric mixtures. This makes it a valuable alloy across various
                        critical industries.
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
                        Titanium Grade 12 is produced and tested to meet international specifications:
                    </p>
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
        <div class="container">
            <div class="section-title center">
                <h2>Uses and Advantages</h2>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Excellent corrosion resistance in both oxidizing and reducing media</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-half"></i></div>
                        <h5>Superior performance in mildly acidic and chloride-containing environments</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-thermometer-high"></i></div>
                        <h5>High strength-to-weight ratio for efficient structural use</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h5>Exceptional weldability and formability</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building-gear"></i></div>
                        <h5>Suitable for high-temperature and pressure service</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h5>Resistant to crevice corrosion and stress corrosion cracking</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications of Titanium Grade 12</h2>
                <p class="text-center pb-3"><strong class="text-dark">Titanium Grade 12</strong> is a top choice for
                    industries that demand both corrosion performance and mechanical integrity. Its versatility allows it to
                    serve a wide array of applications:
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Chemical Processing</h5>
                        <p>Ideal for reactors, piping systems, heat exchangers, and storage tanks that handle acidic or
                            chloride-rich fluids</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-cloud-fog2-fill"></i></div>
                        <h5>Desalination and Marine Environments</h5>
                        <p>Used in evaporators, condensers, and seawater cooling systems.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-fuel-pump"></i></div>
                        <h5>Power Generation</h5>
                        <p>Trusted in steam turbine condensers, feedwater heaters, and auxiliary systems in nuclear and
                            fossil power plants.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Oil & Gas Industry</h5>
                        <p>Suitable for offshore and onshore piping, pressure vessels, and production facilities exposed to
                            brine or hydrogen sulfide.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h5>Pollution Control & Waste Management</h5>
                        <p>Applied in flue gas scrubbers and handling systems for industrial effluents.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Automotive & Aerospace</h5>
                        <p>Used in components requiring strength, corrosion resistance, and weight reduction.</p>
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
                        <h5>Precision Engineering – We ensure dimensional accuracy and premium finishing in every product.
                        </h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Global Sourcing – Only the finest raw materials from verified international sources.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5>Expertise in Titanium Alloys – Decades of experience in specialty metals.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Worldwide Shipping – On-time delivery, anywhere in the world.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <h5>Custom Solutions – From standard to bespoke items, we deliver to your requirements.</h5>
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
                                <h4>What is Titanium Grade 12?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Titanium Grade 12 (UNS R53400) is a corrosion-resistant titanium alloy containing nickel
                                    and molybdenum. It offers excellent strength, weldability, and reliable performance in
                                    acidic, chloride, and marine environments, making it suitable for demanding industrial
                                    applications.
                                </p>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the common applications of Titanium Grade 12?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Titanium Grade 12 is widely used in chemical processing plants, desalination systems,
                                    marine and offshore equipment, power generation, oil and gas applications, pollution
                                    control systems, automotive, and aerospace industries. It provides excellent corrosion
                                    resistance and structural reliability under high temperature and high-pressure
                                    conditions.
                                </p>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What products are available in Titanium Grade 12?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP supplies Titanium Grade 12 as seamless and welded pipes,
                                    tubes, sheets, plates, coils, bars, fittings, flanges, fasteners, welding rods, and
                                    custom fabricated components. All products are tested and manufactured to meet
                                    international industrial standards.
                                </p>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why is Titanium Grade 12 preferred over other alloys?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Titanium Grade 12 offers superior corrosion resistance in both oxidizing and reducing
                                    environments, a high strength to weight ratio, excellent weldability and formability,
                                    and long term durability. These properties make it ideal for demanding chemical, marine,
                                    and industrial applications.
                                </p>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose MOKSH TUBES & FITTINGS LLP?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    MOKSH TUBES & FITTINGS LLP delivers premium Titanium Grade 12 products with precision
                                    engineering, global sourcing, decades of titanium expertise, worldwide shipping, and
                                    custom solutions tailored to industrial and mission critical applications, ensuring
                                    high performance and reliability.
                                </p>
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
                    Get in touch with <strong>Moksh Tubes & Fittings LLP</strong> your trusted partner in high-performance
                    titanium and specialty alloys.</p>
                <!-- Call button -->
                <a href="tel:+919769584950" class="contact-cta-btn">Get in Touch</a>
            </div>
        </div>
    </section>





@endsection
