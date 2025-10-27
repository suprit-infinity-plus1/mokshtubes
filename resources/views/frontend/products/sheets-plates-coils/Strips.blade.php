@extends('layouts.master')
@section('title', 'Metal Strips – Premium Stainless, Carbon & Alloy Metals') <!-- 52 characters -->
@section('meta_description',
    'Mokshtubes provides high-quality metal strips in stainless steel, carbon steel, and alloys, ideal for automotive, construction, and industrial applications with superior precision and durability.') <!-- 153 characters -->
@section('meta_keywords', 'Metal Strips Supplier, Stainless Steel Strips, Carbon Steel Strips, Alloy Strips, Industrial Metal Strips, Custom Metal Strips, Precision Metal Strips, Durable Metal Strips, High-Quality Metal Strips, Mokshtubes Metal Strips')
@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>High-Quality Metal Strips for Industrial Use</h1> <!-- 52 characters -->
                </div>
            </div>
        </div>
    </section>



    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Metal Strips</h2>
            </div>

            <div class="row align-items-center">
                <!-- Left Image -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/peoduct/Sheets, Plates and Coils/Metal-Strips.jpg') }}"
                        alt="Hexagon Bars" class="img-fluid rounded shadow-sm">
                </div>

                <!-- Right Content -->
                <div class="col-md-6">
                    <p class="fs-6 mb-3 text-justify">
    <strong class="text-black">Metal Strips</strong> are narrow, flat-rolled products slit from wider coils or sheets and
    used in a wide range of industrial, engineering, and decorative applications. These strips are produced from
    stainless steel, carbon steel, aluminum, brass, copper, nickel alloys, and other specialty metals.
</p>
<p class="fs-6 mb-3 text-justify">
    Because of their precision thickness, narrow widths, and high-quality finishes, metal strips are widely used in
    automotive, electronics, construction, consumer goods, and manufacturing industries.
    <a href="{{ route('index') }}"><b>Moksh Tubes & Fittings LLP</b></a> supplies premium-quality strips in a variety of
    materials, grades, and finishes. Our strips conform to ASTM, ASME, DIN, JIS, and EN standards, ensuring consistency,
    durability, and performance for demanding applications.
</p>

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
                        <td>Stainless Steel, Carbon Steel, Mild Steel, Alloy Steel, Duplex &amp; Super Duplex, Aluminum, Copper, Brass, Nickel Alloys, Titanium</td>
                    </tr>
                    <tr class="t-row">
                        <td>Grades</td>
                        <td>ASTM/ASME/DIN/JIS/EN certified grades – all major alloys available</td>
                    </tr>
                    <tr class="t-row">
                        <td>Thickness Range</td>
                        <td>0.10 mm to 6 mm</td>
                    </tr>
                    <tr class="t-row">
                        <td>Width Range</td>
                        <td>5 mm to 500 mm (custom slit widths available)</td>
                    </tr>
                    <tr class="t-row">
                        <td>Length</td>
                        <td>Coil form or cut-to-length strips</td>
                    </tr>
                    <tr class="t-row">
                        <td>Finishes</td>
                        <td>2B, BA, Matte, Hairline, Mirror, PVC Coated, Anodized (for aluminum)</td>
                    </tr>
                    <tr class="t-row">
                        <td>Standards</td>
                        <td>ASTM A240, A480, A666, IS 6911, JIS G4304, EN 10088</td>
                    </tr>
                    <tr class="t-row">
                        <td>Types</td>
                        <td>Hot Rolled Strips, Cold Rolled Strips, Precision Strips, Decorative Strips</td>
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
                <h4 class="text-center mb-0" style="color: #db7227;">Metal Strip Weight Chart (Width 10 mm)</h4>
            </div>

           <div class="table-responsive">
    <table class="table table-bordered table-striped align-middle">
        <thead class="table-dark text-center">
            <tr class="t-row">
                <th>Thickness (mm)</th>
                <th>MS (7.85)</th>
                <th>SS (7.93)</th>
                <th>Aluminium (2.70)</th>
                <th>Brass (8.40)</th>
                <th>Copper (8.94)</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <tr class="t-row"><td>0.5</td><td>0.039</td><td>0.040</td><td>0.014</td><td>0.042</td><td>0.045</td></tr>
            <tr class="t-row"><td>0.7</td><td>0.055</td><td>0.056</td><td>0.019</td><td>0.059</td><td>0.063</td></tr>
            <tr class="t-row"><td>1.0</td><td>0.079</td><td>0.079</td><td>0.027</td><td>0.084</td><td>0.089</td></tr>
            <tr class="t-row"><td>1.2</td><td>0.094</td><td>0.095</td><td>0.032</td><td>0.101</td><td>0.107</td></tr>
            <tr class="t-row"><td>1.5</td><td>0.118</td><td>0.119</td><td>0.041</td><td>0.126</td><td>0.134</td></tr>
            <tr class="t-row"><td>2.0</td><td>0.157</td><td>0.159</td><td>0.054</td><td>0.168</td><td>0.179</td></tr>
            <tr class="t-row"><td>2.5</td><td>0.196</td><td>0.198</td><td>0.068</td><td>0.210</td><td>0.223</td></tr>
            <tr class="t-row"><td>3.0</td><td>0.236</td><td>0.238</td><td>0.081</td><td>0.252</td><td>0.268</td></tr>
            <tr class="t-row"><td>4.0</td><td>0.314</td><td>0.317</td><td>0.108</td><td>0.336</td><td>0.358</td></tr>
            <tr class="t-row"><td>5.0</td><td>0.393</td><td>0.397</td><td>0.135</td><td>0.420</td><td>0.447</td></tr>
            <tr class="t-row"><td>6.0</td><td>0.471</td><td>0.476</td><td>0.162</td><td>0.504</td><td>0.536</td></tr>
            <tr class="t-row"><td>8.0</td><td>0.628</td><td>0.634</td><td>0.216</td><td>0.672</td><td>0.715</td></tr>
            <tr class="t-row"><td>10.0</td><td>0.785</td><td>0.793</td><td>0.270</td><td>0.840</td><td>0.894</td></tr>
        </tbody>
    </table>
</div>

 <!-- Child Title -->
            <div class="section-title center mb-3">
                <h4 class="text-center mb-0" style="color: #db7227;">Metal Strip Weight Chart — Width 20 mm</h4>
            </div>
<div class="table-responsive">
    <table class="table table-bordered table-striped align-middle">
        <thead class="table-dark text-center">
            <tr class="t-row">
                <th>Thickness (mm)</th>
                <th>MS (7.85)</th>
                <th>SS (7.93)</th>
                <th>Aluminium (2.70)</th>
                <th>Brass (8.40)</th>
                <th>Copper (8.94)</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <tr class="t-row"><td>0.5</td><td>0.157</td><td>0.159</td><td>0.054</td><td>0.168</td><td>0.179</td></tr>
            <tr class="t-row"><td>0.7</td><td>0.196</td><td>0.222</td><td>0.189</td><td>0.588</td><td>0.626</td></tr>
            <tr class="t-row"><td>1.0</td><td>0.157</td><td>0.159</td><td>0.054</td><td>0.168</td><td>0.179</td></tr>
            <tr class="t-row"><td>0.7</td><td>0.111</td><td>0.111</td><td>0.054</td><td>0.168</td><td>0.179</td></tr>
            <tr class="t-row"><td>1.0</td><td>0.157</td><td>0.159</td><td>0.054</td><td>0.168</td><td>0.179</td></tr>
            <tr class="t-row"><td>1.2</td><td>0.188</td><td>0.190</td><td>0.065</td><td>0.202</td><td>0.214</td></tr>
            <tr class="t-row"><td>1.5</td><td>0.236</td><td>0.238</td><td>0.081</td><td>0.252</td><td>0.268</td></tr>
            <tr class="t-row"><td>2.0</td><td>0.314</td><td>0.317</td><td>0.108</td><td>0.336</td><td>0.358</td></tr>
            <tr class="t-row"><td>2.5</td><td>0.393</td><td>0.397</td><td>0.135</td><td>0.420</td><td>0.447</td></tr>
            <tr class="t-row"><td>3.0</td><td>0.471</td><td>0.476</td><td>0.162</td><td>0.504</td><td>0.536</td></tr>
            <tr class="t-row"><td>4.0</td><td>0.628</td><td>0.634</td><td>0.216</td><td>0.672</td><td>0.715</td></tr>
            <tr class="t-row"><td>5.0</td><td>0.785</td><td>0.793</td><td>0.270</td><td>0.840</td><td>0.894</td></tr>
            <tr class="t-row"><td>6.0</td><td>0.942</td><td>0.952</td><td>0.324</td><td>1.008</td><td>1.073</td></tr>
            <tr class="t-row"><td>8.0</td><td>1.256</td><td>1.268</td><td>0.432</td><td>1.344</td><td>1.430</td></tr>
            <tr class="t-row"><td>10.0</td><td>1.570</td><td>1.586</td><td>0.540</td><td>1.680</td><td>1.788</td></tr>
        </tbody>
    </table>
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
                <h4 class="text-center mb-0" style="color: #db7227;">We provide<strong> Metal Strips</strong> in multiple grades to match every requirement:</h4>
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
                        <td>
                            Stainless Steel Strips: 304, 304L, 316, 316L, 310, 321, 347 – corrosion-resistant for food, pharma, and decorative uses
                            <br><small>(Corrosion resistance & machining)</small>
                        </td>
                    </tr>
                    <tr class="t-row">
                        <td>Carbon Steel</td>
                        <td>
                            Carbon & Mild Steel Strips: ASTM A36, IS2062 – for construction, structural, and fabrication needs
                            <br><small>(General engineering & structural applications)</small>
                        </td>
                    </tr>
                    <tr class="t-row">
                        <td>Alloy Steel</td>
                        <td>
                            <!-- No strips content provided for Alloy Steel -->
                        </td>
                    </tr>
                    <tr class="t-row">
                        <td>Duplex & Super Duplex</td>
                        <td>
                            Duplex & Super Duplex Strips: 2205, S32750 – for marine and offshore applications
                            <br><small>(Oil, gas & offshore)</small>
                        </td>
                    </tr>
                    <tr class="t-row">
                        <td>Nickel Alloys</td>
                        <td>
                            Nickel & Titanium Strips: Inconel, Monel, Hastelloy, Titanium – for aerospace, chemical, and high-performance industries
                            <br><small>(High-temperature & corrosive service)</small>
                        </td>
                    </tr>
                    <tr class="t-row">
                        <td>Titanium</td>
                        <td>
                            <!-- Covered under Nickel & Titanium Strips -->
                        </td>
                    </tr>
                    <tr class="t-row">
                        <td>Copper & Brass</td>
                        <td>
                            Copper & Brass Strips: C11000, C26000 – for electrical, decorative, and thermal applications
                            <br><small>(Marine & decorative)</small>
                        </td>
                    </tr>
                    <tr class="t-row">
                        <td>Aluminum</td>
                        <td>
                            Aluminum Strips: 1100, 5052, 6061, 6063 – lightweight and versatile for transport and architectural use
                            <br><small>(Lightweight & corrosion resistant)</small>
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
                            <a class="w-100" href="#">
                                <img class="w-100" src="{{ asset('assets/images/peoduct/NICKLE-ALLOYS.jpeg') }}" alt="NICKLE ALLOYS">
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
                            <a class="w-100" href="#">
                                <img class="w-100" src="{{ asset('assets/images/peoduct/STAINLESS-STEEL.jpeg') }}" alt="STAINLESS STEEL">
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
                            <a class="w-100" href="#">
                                <img class="w-100" src="{{ asset('assets/images/peoduct/DUPLEX-SUPER.png') }}" alt="DUPLEX & SUPER">
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
                            <a class="w-100" href="##">
                                <img class="w-100" src="{{ asset('assets/images/peoduct/TITANIUM-ALLOYS.jpg') }}" alt="TITANIUM ALLOYS">
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
                            <a class="w-100">
                                <img class="w-100" src="{{ asset('assets/images/peoduct/RARE-TO-ALLOYS.jpg') }}" alt="RARE TO ALLOYS">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0">RARE TO ALLOYS</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="single-our-service border">
                        <figure class="img-box mb-0">
                            <a class="w-100">
                                <img class="w-100" src="{{ asset('assets/images/peoduct/CARBON-ALLOYS.jpg') }}" alt="CARBON ALLOYS">
                            </a>
                        </figure>
                        <div class="p-2 text-center">
                            <h6 class="mt-0">CARBON ALLOYS</h6>
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
                    <strong class="text-black">Metal Strips</strong> are highly versatile and used across multiple industries:
                </p>
            </div>

           <div class="row g-4">
    <div class="col-md-6 col-lg-4">
        <div class="application-card">
            <div class="application-icon">
                <i class="bi bi-building"></i>
            </div>
            <h5>Construction & Architectural Use</h5>
            <ul>
                <li>Cladding, trims, flashings, and facades</li>
                <li>Roofing components, decorative edges, and signage</li>
                <li>Interior design features like partitions and accent details</li>
            </ul>
        </div>
    </div>

    <div class="col-md-6 col-lg-4">
        <div class="application-card">
            <div class="application-icon">
                <i class="bi bi-truck-front"></i>
            </div>
            <h5>Automotive Industry</h5>
            <ul>
                <li>Exhaust systems, trim pieces, clamps, and brackets</li>
                <li>Fuel lines, brake lines, and protective covers</li>
                <li>Lightweight aluminum and stainless strips for bodywork</li>
            </ul>
        </div>
    </div>

    <div class="col-md-6 col-lg-4">
        <div class="application-card">
            <div class="application-icon">
                <i class="bi bi-gear-wide-connected"></i>
            </div>
            <h5>Industrial & Engineering Applications</h5>
            <ul>
                <li>Conveyor belts, machine guards, and fabrication parts</li>
                <li>Springs, clamps, washers, and shims cut from strips</li>
                <li>Strapping for securing heavy loads in logistics</li>
            </ul>
        </div>
    </div>

    <div class="col-md-6 col-lg-4">
        <div class="application-card">
            <div class="application-icon">
                <i class="bi bi-lightning-charge"></i>
            </div>
            <h5>Electrical & Electronics</h5>
            <ul>
                <li>Copper and brass strips for bus bars, connectors, and terminals</li>
                <li>Transformer windings and switchgear components</li>
                <li>EMI shielding and grounding strips</li>
            </ul>
        </div>
    </div>

    <div class="col-md-6 col-lg-4">
        <div class="application-card">
            <div class="application-icon">
                <i class="bi bi-water"></i>
            </div>
            <h5>Marine & Offshore</h5>
            <ul>
                <li>Corrosion-resistant stainless strips for ship fittings and deck hardware</li>
                <li>Aluminum strips for lightweight marine structures</li>
            </ul>
        </div>
    </div>

    <div class="col-md-6 col-lg-4">
        <div class="application-card">
            <div class="application-icon">
                <i class="bi bi-bricks"></i>
            </div>
            <h5>Decorative & Consumer Goods</h5>
            <ul>
                <li>Mirror-finish strips for furniture, kitchens, and luxury interiors</li>
                <li>Decorative trims for malls, hotels, and architectural projects</li>
                <li>Jewelry and watch components</li>
            </ul>
        </div>
    </div>

    <div class="col-md-6 col-lg-4">
        <div class="application-card">
            <div class="application-icon">
                <i class="bi bi-box-seam"></i>
            </div>
            <h5>Packaging & Binding</h5>
            <ul>
                <li>Steel strapping and banding strips for industrial packaging</li>
                <li>Protective edge strips for pallets, drums, and crates</li>
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

    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Uses of Metal Strips</h2>
            </div>
            <!-- Child Title -->
            <div class="section-title center mb-3">
                <h4 class="text-center mb-0" style="color: #db7227;">Metal Strips are used extensively
                    across multiple
                    industries, including:</h4>
            </div>
           <div class="row g-4 mt-4">
    <div class="col-sm-6 col-lg-4">
        <div class="advantage-card">
            <div class="advantage-icon"><i class="bi bi-diagram-3"></i></div>
            <h4>Fabrication</h4>
            <h5>Easily cut, formed, and welded into custom components</h5>
        </div>
    </div>

    <div class="col-sm-6 col-lg-4">
        <div class="advantage-card">
            <div class="advantage-icon"><i class="bi bi-brush"></i></div>
            <h4>Trims & Edging</h4>
            <h5>Provides clean finishing for structures and products</h5>
        </div>
    </div>

    <div class="col-sm-6 col-lg-4">
        <div class="advantage-card">
            <div class="advantage-icon"><i class="bi bi-link-45deg"></i></div>
            <h4>Strapping & Binding</h4>
            <h5>Industrial-grade strips for load securing</h5>
        </div>
    </div>

    <div class="col-sm-6 col-lg-6">
        <div class="advantage-card">
            <div class="advantage-icon"><i class="bi bi-lightning-charge"></i></div>
            <h4>Conductive Applications</h4>
            <h5>Copper & brass strips for electrical uses</h5>
        </div>
    </div>

    <div class="col-sm-12 col-lg-6">
        <div class="advantage-card">
            <div class="advantage-icon"><i class="bi bi-palette"></i></div>
            <h4>Decorative Finishes</h4>
            <h5>Enhances aesthetics in architectural & interior designs</h5>
        </div>
    </div>
</div>


        </div>
    </section>


    {{-- Advantages of Welded Pipes & Tubes --}}
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Advantages of Metal Strips</h2>
            </div>

           <div class="row g-4 mt-4">
    <div class="col-sm-6 col-lg-4">
        <div class="advantage-card">
            <div class="advantage-icon"><i class="bi bi-bullseye"></i></div>
            <h4>Precision & Accuracy</h4>
            <h5>Tight tolerances on thickness and width</h5>
        </div>
    </div>

    <div class="col-sm-6 col-lg-4">
        <div class="advantage-card">
            <div class="advantage-icon"><i class="bi bi-layers"></i></div>
            <h4>Material Variety</h4>
            <h5>Stainless, aluminum, brass, copper, titanium, and more</h5>
        </div>
    </div>

    <div class="col-sm-6 col-lg-4">
        <div class="advantage-card">
            <div class="advantage-icon"><i class="bi bi-sliders"></i></div>
            <h4>Customizable</h4>
            <h5>Available in coils, cut lengths, and custom slit widths</h5>
        </div>
    </div>

    <div class="col-sm-6 col-lg-4">
        <div class="advantage-card">
            <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
            <h4>Durable & Versatile</h4>
            <h5>Suitable for heavy-duty industrial use or fine decorative work</h5>
        </div>
    </div>

    <div class="col-sm-6 col-lg-4">
        <div class="advantage-card">
            <div class="advantage-icon"><i class="bi bi-cash-coin"></i></div>
            <h4>Cost-Efficient</h4>
            <h5>Strips minimize waste and optimize usage</h5>
        </div>
    </div>

    <div class="col-sm-6 col-lg-4">
        <div class="advantage-card">
            <div class="advantage-icon"><i class="bi bi-globe2"></i></div>
            <h4>Global Standards</h4>
            <h5>Manufactured to ASTM, ASME, DIN, and EN specifications</h5>
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
                            <h2>Frequently Asked Questions (FAQ) – Metal Strips</h2>
                        </div>

                       <!--Start single accordion box-->
<div class="accordion accordion-block">
    <div class="accord-btn">
        <h4>What are metal strips?</h4>
    </div>
    <div class="accord-content">
        <p>
            Metal strips are long, narrow pieces of metal that are produced in specific widths and thicknesses. They are widely used in construction, automotive, electrical, and industrial applications.
        </p>
    </div>
</div>
<!--End single accordion box-->

<!--Start single accordion box-->
<div class="accordion accordion-block">
    <div class="accord-btn">
        <h4>Which materials are strips available in?</h4>
    </div>
    <div class="accord-content">
        <p>
            Strips can be manufactured from stainless steel, carbon steel, aluminum, brass, copper, nickel alloys, titanium, and other special alloys depending on usage.
        </p>
    </div>
</div>
<!--End single accordion box-->

<!--Start single accordion box-->
<div class="accordion accordion-block">
    <div class="accord-btn">
        <h4>What thickness and width ranges are available?</h4>
    </div>
    <div class="accord-content">
        <p>
            Thickness: usually from 0.1 mm to 20 mm<br>
            Width: typically from 10 mm to 600 mm<br>
            (Custom sizes are also supplied based on requirements.)
        </p>
    </div>
</div>
<!--End single accordion box-->

<!--Start single accordion box-->
<div class="accordion accordion-block">
    <div class="accord-btn">
        <h4>What are the common applications of metal strips?</h4>
    </div>
    <div class="accord-content">
        <p>
            - Electrical & switchgear components<br>
            - Automotive parts & cladding<br>
            - Springs & washers<br>
            - Heat exchangers & condensers<br>
            - Construction & decorative purposes<br>
            - Precision engineering and fabrication
        </p>
    </div>
</div>
<!--End single accordion box-->

<!--Start single accordion box-->
<div class="accordion accordion-block">
    <div class="accord-btn">
        <h4>Are strips different from sheets and coils?</h4>
    </div>
    <div class="accord-content">
        <p>
            Yes.<br>
            <b>Sheets</b> – wider and available in flat form<br>
            <b>Strips</b> – narrower, cut from coils, with controlled width<br>
            <b>Coils</b> – continuous rolled form before cutting into strips or sheets
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


    {{-- why choose us --}}
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container text-center">
            <div class="section-title center">
                <h2>WHY CHOOSE US?</h2>
            </div>

            <div class="row g-4 mt-4">
    <div class="col-sm-6 col-lg-4">
        <div class="why-banner-block">
            <div class="why-banner-icon"><i class="bi bi-box-seam"></i></div>
            <h5>Wide Range: From ultra-thin precision strips to heavy-duty industrial widths</h5>
        </div>
    </div>

    <div class="col-sm-6 col-lg-4">
        <div class="why-banner-block">
            <div class="why-banner-icon"><i class="bi bi-patch-check-fill"></i></div>
            <h5>High-Quality Processing: Slitting, recoiling, and surface finishing expertise</h5>
        </div>
    </div>

    <div class="col-sm-6 col-lg-4">
        <div class="why-banner-block">
            <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
            <h5>Customization: Tailored widths, thicknesses, and packaging</h5>
        </div>
    </div>

    <div class="col-sm-12 col-lg-6">
        <div class="why-banner-block">
            <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
            <h5>Reliable Stock & Supply: Ready-to-ship materials for urgent requirements</h5>
        </div>
    </div>

    <div class="col-sm-12 col-lg-6">
        <div class="why-banner-block">
            <div class="why-banner-icon"><i class="bi bi-gear-wide-connected"></i></div>
            <h5>Proven Expertise: Supplying to automotive, construction, marine, and engineering sectors worldwide</h5>
        </div>
    </div>
</div>


        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Contact Us</h2>
                <p>
                    Looking for metal strips for your project or industrial application?<br>Contact <strong><a
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
