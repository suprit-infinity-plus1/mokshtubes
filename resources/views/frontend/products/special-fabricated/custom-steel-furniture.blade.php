@extends('layouts.master')
@section('title', 'Custom Steel Furniture – Modern, Durable & Stylish') <!-- 52 characters -->
@section('meta_description',
    'Premium custom steel furniture from Moksh Tubes — rust-resistant, durable, and stylish for homes, offices, hospitality, and industrial use.') <!-- 152 characters -->
@section('meta_keywords', 'Custom Steel Furniture, Steel Furniture Manufacturers, Stainless Steel Furniture, Durable Steel Furniture, Modern Steel Furniture Designs, Industrial Steel Furniture, Custom Steel Tables, Chairs, Racks, Cabinets, Steel Furniture for Home & Office')
@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/peoduct/steel-furniture/custom-steel-furniture.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Premium Custom Steel Furniture Solutions</h1> <!-- 52 characters -->
                </div>
            </div>
        </div>
    </section>



    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Custom Steel Furniture</h2>
            </div>

            <div class="row align-items-center">
                <!-- Left Image -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/peoduct/steel-furniture/custom-steel-furniture.webp') }}"
                        alt="Custom-Steel-Furniture" class="img-fluid rounded shadow-sm">
                </div>

                <!-- Right Content -->
                <div class="col-md-6">
                    <p class="fs-6 mb-3 text-justify">
                        <strong class="text-black">Custom Steel Furniture</strong> represents the perfect balance of
                        <strong>functionality, durability, and design
                            innovation.</strong> Unlike mass produced pieces, custom made steel furniture is tailored to
                        meet <strong>unique
                            aesthetic preferences, space constraints, and functional requirements.</strong> From minimalist
                        modern
                        interiors to industrial style commercial setups, steel furniture has become an integral choice for
                        architects, designers, and homeowners.
                    </p>
                    <p class="fs-6 mb-3 text-justify">
                        Steel furniture is valued for its strength and longevity, offering superior performance compared to
                        wooden or plastic alternatives. Its ability to integrate seamlessly with materials like glass, wood,
                        and stone allows for endless design possibilities. <strong class="text-black"><a
                                href="{{ route('index') }}">Moksh Tubes & Fittings LLP</a></strong> brings decades of
                        fabrication expertise to deliver furniture solutions that are structurally sound,
                        corrosion-resistant, and visually appealing.
                    </p>
                    <p class="fs-6 text-justify">
                        From elegant dining tables and sleek office desks to heavy duty industrial workstations and custom
                        shelving units, our steel furniture is crafted with precision <a
                            href="{{ route('materials.engineering-Steels') }}">engineering</a> and premium <a
                            href="{{ route('materials') }}">grade
                            materials</a> to ensure it withstands the test of time making it a long term investment for any
                        setting.
                </div>
            </div>
        </div>
    </section>

    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Specifications</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Category</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody class="text-start">
                                <tr class="t-row">
                                    <td>Material</td>
                                    <td>Stainless Steel, Mild Steel, Carbon Steel, Duplex & Super Duplex Steel</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Grades</td>
                                    <td>As per ASTM/ASME standards available in all mentioned alloys</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Dimensions</td>
                                    <td>Fully customizable designed to suit specific client needs</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Finishes</td>
                                    <td>Matte, Mirror, Brushed, Powder Coated, Painted, Antique Finish</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Fabrication Methods</td>
                                    <td>CNC Cutting, Laser Cutting, TIG/MIG Welding, Polishing & Surface Treatment</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Types</td>
                                    <td>Tables, Chairs, Cabinets, Workstations, Wardrobes, Shelves, Storage Units, Outdoor
                                        Furniture</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Applications</td>
                                    <td>Residential, Commercial, Industrial, Hospitality & Institutional Spaces</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Durability</td>
                                    <td>Rust resistant, termite proof, long-lasting performance even under heavy use</td>
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
            <div class="section-title center">
                <h2 class="fw-bold" style="color: #174268;">Charts</h2>


            </div>
            <!-- Child Title -->
            <div class="section-title center mb-3">
                <h4 class="text-center mb-0" style="color: #db7227;">Weight Chart</h4>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr class="t-row">
                            <th>Furniture Type</th>
                            <th>Section Type</th>
                            <th>Standard Size (mm)</th>
                            <th>Thickness Range (mm)</th>
                            <th>Approx. Weight (kg/m)</th>
                            <th>Usage / Remarks</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row">
                            <td rowspan="3">Chairs</td>
                            <td>Round Tube</td>
                            <td>Ø19 – Ø25</td>
                            <td>1.2 – 1.5</td>
                            <td>0.60 – 0.95</td>
                            <td>Café chairs, dining chairs</td>
                        </tr>
                        <tr class="t-row">
                            <td>Square Tube</td>
                            <td>25 × 25</td>
                            <td>1.2 – 1.5</td>
                            <td>0.89 – 1.10</td>
                            <td>Frames & legs</td>
                        </tr>
                        <tr class="t-row">
                            <td>Flat Bar</td>
                            <td>25 × 5</td>
                            <td>Solid</td>
                            <td>0.98</td>
                            <td>Supports, braces</td>
                        </tr>

                        <tr class="t-row">
                            <td rowspan="3">Tables</td>
                            <td>Square Tube</td>
                            <td>40 × 40</td>
                            <td>1.5 – 2.0</td>
                            <td>1.50 – 2.00</td>
                            <td>Dining & office tables</td>
                        </tr>
                        <tr class="t-row">
                            <td>Rectangular Tube</td>
                            <td>50 × 25</td>
                            <td>1.5 – 2.0</td>
                            <td>1.38 – 1.80</td>
                            <td>Side frames</td>
                        </tr>
                        <tr class="t-row">
                            <td>Sheet Top</td>
                            <td>Custom</td>
                            <td>1.0 – 2.0</td>
                            <td>Varies</td>
                            <td>Powder-coated / SS</td>
                        </tr>

                        <tr class="t-row">
                            <td rowspan="3">Storage Racks</td>
                            <td>Square Tube</td>
                            <td>50 × 50</td>
                            <td>2.0 – 3.0</td>
                            <td>2.47 – 3.70</td>
                            <td>Heavy-duty frames</td>
                        </tr>
                        <tr class="t-row">
                            <td>Rectangular Tube</td>
                            <td>75 × 40</td>
                            <td>2.0 – 3.0</td>
                            <td>2.68 – 3.95</td>
                            <td>Uprights</td>
                        </tr>
                        <tr class="t-row">
                            <td>Sheet Shelves</td>
                            <td>Custom</td>
                            <td>1.0 – 2.0</td>
                            <td>Varies</td>
                            <td>Solid / perforated</td>
                        </tr>

                        <tr class="t-row">
                            <td rowspan="3">Beds (Frames)</td>
                            <td>Square Tube</td>
                            <td>50 × 50</td>
                            <td>1.5 – 2.0</td>
                            <td>1.90 – 2.47</td>
                            <td>Main structure</td>
                        </tr>
                        <tr class="t-row">
                            <td>Rectangular Tube</td>
                            <td>75 × 40</td>
                            <td>1.5 – 2.0</td>
                            <td>2.30 – 2.90</td>
                            <td>Side supports</td>
                        </tr>
                        <tr class="t-row">
                            <td>Flat Bar</td>
                            <td>40 × 5</td>
                            <td>Solid</td>
                            <td>1.57</td>
                            <td>Reinforcement</td>
                        </tr>

                        <tr class="t-row">
                            <td rowspan="2">Benches</td>
                            <td>Square Tube</td>
                            <td>40 × 40</td>
                            <td>1.5 – 2.0</td>
                            <td>1.50 – 2.00</td>
                            <td>Seating frames</td>
                        </tr>
                        <tr class="t-row">
                            <td>Flat Bar</td>
                            <td>50 × 6</td>
                            <td>Solid</td>
                            <td>2.36</td>
                            <td>Seat slats</td>
                        </tr>

                        <tr class="t-row">
                            <td rowspan="2">Cabinets / Lockers</td>
                            <td>Square Tube</td>
                            <td>25 × 25</td>
                            <td>1.0 – 1.5</td>
                            <td>0.75 – 1.10</td>
                            <td>Frame</td>
                        </tr>
                        <tr class="t-row">
                            <td>Sheet Panels</td>
                            <td>Custom</td>
                            <td>0.8 – 1.2</td>
                            <td>Varies</td>
                            <td>Doors & sides</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="bg-light" style="padding-top: 80px;">
        <div class="container">

            <!-- Parent Title -->
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Storage Racks</h2>
            </div>

            <!-- Child Title -->
            <div class="section-title center mb-3">
                <h4 class="text-center mb-0" style="color: #db7227;">Expanded Table (for one item – Storage Racks)</h4>
            </div>


            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Furniture Type</th>
                                    <th>Section Type</th>
                                    <th>Standard Size (mm)</th>
                                    <th>Thickness (mm)</th>
                                    <th>Weight (kg/m)</th>
                                    <th>Finish Options</th>
                                    <th>Steel Grade</th>
                                    <th>Load Capacity</th>
                                    <th>Application</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>Storage Rack</td>
                                    <td>Square Tube</td>
                                    <td>50 × 50</td>
                                    <td>2.0 – 3.0</td>
                                    <td>2.47 – 3.70</td>
                                    <td>Powder coat / SS</td>
                                    <td>MS / SS202</td>
                                    <td>150–250 kg</td>
                                    <td>Industrial / Shop</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Storage Rack</td>
                                    <td>Rectangular</td>
                                    <td>75 × 40</td>
                                    <td>2.0 – 3.0</td>
                                    <td>2.68 – 3.95</td>
                                    <td>Painted / SS Brushed</td>
                                    <td>MS / SS304</td>
                                    <td>250–500 kg</td>
                                    <td>Warehouse / Garage</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Storage Rack</td>
                                    <td>Sheet Shelf</td>
                                    <td>900 × 450</td>
                                    <td>1.0 – 2.0</td>
                                    <td>Varies</td>
                                    <td>Powder coat / GI</td>
                                    <td>MS / GI</td>
                                    <td>50–150 kg</td>
                                    <td>Home / Office</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Grades Available --}}
    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Grades Available</h2>
            </div>
            <div class="section-title center mb-3">
                <h4 class="text-center mb-0" style="color: #db7227;"><strong>Custom Steel Furniture</strong> is
                    manufactured in a wide range of grades, ensuring suitability for different applications, environments,
                    and design goals:</h4>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Material</th>
                                    <th>Grades</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td>Stainless Steel</td>
                                    <td>304, 304L, 316, 316L, 310, 321 <br>
                                        <small>(Corrosion resistance & sleek finishes – ideal for premium interiors and
                                            outdoor furniture)</small>
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon & Mild Steel</td>
                                    <td>IS2062, ASTM A36, A106 <br>
                                        <small>(Robust, economical furniture frames)</small>
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Duplex & Super Duplex</td>
                                    <td>2205, S31803, S32750 <br>
                                        <small>(Excellent for furniture in coastal areas or high-humidity
                                            environments)</small>
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td>High-Performance Alloys</td>
                                    <td>904L, SMO 254, AL-6XN <br>
                                        <small>(Luxury & industrial-grade furniture needing extreme durability)</small>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Gallery --}}
    <section class="our-services">
        <div class="container">
            <div class="container">
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.nickel-Based-Superalloys') }}">
                                <img class="w-100" src="{{ asset('assets/images/peoduct/NICKLE-ALLOYS.jpeg') }}"
                                    alt="NICKLE ALLOYS">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0">NICKLE ALLOYS</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.austenitic-stainless-Steel') }}">
                                <img class="w-100" src="{{ asset('assets/images/peoduct/STAINLESS-STEEL.jpeg') }}"
                                    alt="STAINLESS STEEL">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0">STAINLESS STEEL</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.duplex-and-super-duplex') }}">
                                <img class="w-100" src="{{ asset('assets/images/peoduct/DUPLEX-SUPER.png') }}"
                                    alt="DUPLEX & SUPER">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0">DUPLEX & SUPER</h6>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.titanium') }}">
                                <img class="w-100" src="{{ asset('assets/images/peoduct/TITANIUM-ALLOYS.jpg') }}"
                                    alt="TITANIUM ALLOYS">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0">TITANIUM ALLOYS</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4 ">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.haynes-Superalloys') }}">
                                <img class="w-100" src="{{ asset('assets/images/peoduct/RARE-TO-ALLOYS.jpg') }}"
                                    alt="Haynes Superalloys">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0">Haynes Superalloys</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100" href="{{ route('materials.inconel') }}">
                                <img class="w-100" src="{{ asset('assets/images/peoduct/CARBON-ALLOYS.jpg') }}"
                                    alt="Inconel">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0">Inconel</h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- Applications --}}
    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications</h2>
                <p class="text-center pb-3">
                    <strong class="text-black">Custom Steel Furniture</strong> is versatile and used across a variety of
                    industries and settings:
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon">
                            <i class="bi bi-house-door-fill"></i>
                        </div>
                        <h5>Residential</h5>
                        <ul>
                            <li>Dining tables, kitchen islands, beds, wardrobes, and storage cabinets</li>
                            <li>Outdoor furniture built to withstand sun, rain, and weather changes</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon">
                            <i class="bi bi-buildings"></i>
                        </div>
                        <h5>Commercial</h5>
                        <ul>
                            <li>Modular office desks, shelving units, reception counters, and filing cabinets</li>
                            <li>Conference tables, workstations, and display furniture for retail</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon">
                            <i class="bi bi-cup-straw"></i>
                        </div>
                        <h5>Hospitality</h5>
                        <ul>
                            <li>Restaurant tables, bar counters, café seating, and outdoor dining furniture</li>
                            <li>Hotel room wardrobes, luggage racks, and custom-designed furniture</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6">
                    <div class="application-card">
                        <div class="application-icon">
                            <i class="bi bi-gear-wide-connected"></i>
                        </div>
                        <h5>Industrial & Workshop</h5>
                        <ul>
                            <li>Heavy-duty workbenches, tool storage systems, and fabrication tables</li>
                            <li>Warehouse shelving, carts, and custom-built organizational racks</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6">
                    <div class="application-card">
                        <div class="application-icon">
                            <i class="bi bi-mortarboard-fill"></i>
                        </div>
                        <h5>Institutional</h5>
                        <ul>
                            <li>School and university furniture, library shelves, and laboratory tables</li>
                            <li>Hostel and dormitory steel furniture solutions</li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- <p class="text-center pb-3 my-4"><strong class="text-dark">HASTELLOY C-276's</strong> unique combination of
                corrosion resistance, weldability, and mechanical durability makes it a reliable material for
                mission-critical applications where long-term performance is non-negotiable.

            </p> --}}
        </div>
    </section>

    {{-- Uses of Welded Pipes and Tubes --}}
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Uses of Custom Steel Furniture</h2>
            </div>
            <!-- Child Title -->
            <div class="section-title center mb-3">
                <h4 class="text-center mb-0" style="color: #db7227;">Custom Steel Furniture are used extensively
                    across multiple
                    industries, including:</h4>
            </div>
            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-palette-fill"></i></div>
                        <h4>Aesthetic Appeal</h4>
                        <h5>Enhances aesthetic appeal while ensuring strength and longevity</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-hammer"></i></div>
                        <h4>Heavy-Duty Support</h4>
                        <h5>Provides heavy-duty support in industrial and commercial settings</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-layers-half"></i></div>
                        <h4>Design Flexibility</h4>
                        <h5>Offers design flexibility, integrating with wood, glass, or stone</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-hospital"></i></div>
                        <h4>Hygienic Applications</h4>
                        <h5>Suitable for hygienic environments like restaurants and hospitals</h5>
                    </div>
                </div>

                <!-- NEW Advantage Card -->
                <div class="col-sm-12 col-lg-6">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-lock-fill"></i></div>
                        <h4>Safety & Durability</h4>
                        <h5>Ensures long-term durability with high safety standards in all applications</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Advantages of Welded Pipes & Tubes --}}
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Advantages of Custom Steel Furniture</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-cash-coin"></i></div>
                        <h4>Cost-Effective Investment</h4>
                        <h5>Outlasts wooden and plastic furniture, reducing replacement costs.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
                        <h4>Corrosion & Termite Resistance</h4>
                        <h5>Ideal for humid, coastal, and pest-prone environments.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-recycle"></i></div>
                        <h4>Eco-Friendly Choice</h4>
                        <h5>Made from recyclable steel, supporting sustainability.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-brush"></i></div>
                        <h4>Design Versatility</h4>
                        <h5>Can be shaped into modern, industrial, or classic designs to match décor.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-bucket"></i></div>
                        <h4>Low Maintenance</h4>
                        <h5>Easy to clean, requiring minimal upkeep compared to other materials.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-box-seam"></i></div>
                        <h4>Heavy Load-Bearing Capacity</h4>
                        <h5>Perfect for residential, industrial, and commercial use.</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>



    {{-- why choose us --}}
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container text-center">
            <div class="section-title center">
                <h2>WHY CHOOSE US?</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-award-fill"></i></div>
                        <h5>Expertise in Fabrication: Decades of experience in crafting high-quality steel furniture.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-brush-fill"></i></div>
                        <h5>Custom Design Solutions: From concept to completion, we deliver furniture tailored to your
                            vision.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-gem"></i></div>
                        <h5>Premium Material Selection: Only certified steel grades are used for superior quality.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Global Reach & Timely Delivery: Supplying projects across India and worldwide.</h5>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-currency-rupee"></i></div>
                        <h5>Competitive Pricing: Affordable solutions without compromising quality or craftsmanship.</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Start faq content area-->
    <section class="faq-content-area sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="accordion-box">
                        <div class="section-title center">
                            <h2>FAQ's</h2>
                        </div>

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why should I choose custom steel furniture over wooden furniture?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Steel furniture is stronger, termite-proof, rust-resistant, and more durable than wood.
                                    Unlike wooden furniture, it requires minimal maintenance and lasts much longer.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Is custom steel furniture suitable for homes or only for industrial use?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Custom steel furniture is versatile. It is used in homes (tables, beds, wardrobes),
                                    offices (desks, cabinets), hospitality (restaurants, hotels), and industries
                                    (workbenches, storage racks).
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Can steel furniture be combined with wood, glass, or stone?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Yes, steel integrates seamlessly with materials like wood, glass, and stone to create
                                    unique and stylish designs that match modern interiors.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What grades of steel are used in custom furniture?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    We manufacture furniture using stainless steel (304, 316, etc.), mild steel, carbon
                                    steel, duplex steel, and even high-performance alloys depending on the application and
                                    environment.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Will my steel furniture rust over time?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    No, when manufactured with the right grade (like SS 304/316) and protective finishes
                                    (powder coating, polishing), steel furniture remains rust-free and corrosion-resistant.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Is steel furniture heavy to move around?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Not necessarily. Steel furniture is strong but can be fabricated in lightweight
                                    sections. Many designs are modular, making them easy to move and reassemble.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Can custom steel furniture be designed to match my interior theme?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Absolutely. We offer matte, mirror, brushed, powder-coated, and antique finishes to
                                    match modern, industrial, or classic décor.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>How do I maintain custom steel furniture?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Maintenance is simple—just wipe with a damp cloth. Unlike wood, it doesn’t require
                                    polishing, painting, or termite treatment.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Is custom steel furniture cost-effective?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Yes, while the initial investment may be slightly higher than wood or plastic, steel
                                    furniture lasts decades, reducing replacement and repair costs.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Can you design modular or space-saving steel furniture?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Yes, we specialize in modular, foldable, and space-optimized steel furniture ideal for
                                    homes, offices, and institutions.
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

    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Contact Us</h2>
                <p>
                    Looking for Custom Steel Furniture that combines design, durability, and value?<br>Contact <strong><a
                            href="{{ route('index') }}">Moksh Tubes & Fittings LLP</a></strong>
                </p>
               <!-- Call button -->
                <a href="javascript:void(0);" class="contact-cta-btn" data-bs-toggle="modal"
                    data-bs-target="#contactFormModal">
                    Get in Touch
                </a>
            </div>
        </div>
    </section>

    <!--End breadcrumb area-->


@endsection
@section('jsscripts')
@verbatim
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Why should I choose custom steel furniture over wooden furniture?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Steel furniture is stronger, termite-proof, rust-resistant, and more durable than wood. Unlike wooden furniture, it requires minimal maintenance and lasts much longer."
      }
    },
    {
      "@type": "Question",
      "name": "Is custom steel furniture suitable for homes or only for industrial use?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Custom steel furniture is versatile. It is used in homes (tables, beds, wardrobes), offices (desks, cabinets), hospitality (restaurants, hotels), and industries (workbenches, storage racks)."
      }
    },
    {
      "@type": "Question",
      "name": "Can steel furniture be combined with wood, glass, or stone?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, steel integrates seamlessly with materials like wood, glass, and stone to create unique and stylish designs that match modern interiors."
      }
    },
    {
      "@type": "Question",
      "name": "What grades of steel are used in custom furniture?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We manufacture furniture using stainless steel (304, 316, etc.), mild steel, carbon steel, duplex steel, and even high-performance alloys depending on the application and environment."
      }
    },
    {
      "@type": "Question",
      "name": "Will my steel furniture rust over time?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No, when manufactured with the right grade (like SS 304/316) and protective finishes (powder coating, polishing), steel furniture remains rust-free and corrosion-resistant."
      }
    },
    {
      "@type": "Question",
      "name": "Is steel furniture heavy to move around?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Not necessarily. Steel furniture is strong but can be fabricated in lightweight sections. Many designs are modular, making them easy to move and reassemble."
      }
    },
    {
      "@type": "Question",
      "name": "Can custom steel furniture be designed to match my interior theme?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Absolutely. We offer matte, mirror, brushed, powder-coated, and antique finishes to match modern, industrial, or classic décor."
      }
    },
    {
      "@type": "Question",
      "name": "How do I maintain custom steel furniture?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Maintenance is simple—just wipe with a damp cloth. Unlike wood, it doesn’t require polishing, painting, or termite treatment."
      }
    },
    {
      "@type": "Question",
      "name": "Is custom steel furniture cost-effective?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, while the initial investment may be slightly higher than wood or plastic, steel furniture lasts decades, reducing replacement and repair costs."
      }
    },
    {
      "@type": "Question",
      "name": "Can you design modular or space-saving steel furniture?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we specialize in modular, foldable, and space-optimized steel furniture ideal for homes, offices, and institutions."
      }
    }
  ]
}
</script>
@endverbatim
@endsection
