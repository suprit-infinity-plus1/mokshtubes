@extends('layouts.master')
@section('title', 'Hollow Bars – Stainless, Alloy & MS Mokshtubes') <!-- 53 characters -->
@section('meta_description', 'Mokshtubes supplies high-quality stainless steel, MS, alloy, aluminium & bronze hollow
    bars in custom sizes, grades & worldwide delivery.') <!-- 153 characters -->
@section('meta_keywords', 'Hollow Bars, Stainless Hollow Bars, Alloy Hollow Bars, MS Hollow Bars, Aluminium Hollow Bars,
    Bronze Hollow Bars')
@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/peoduct/Hollow-Bars.jpeg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>High Quality Stainless & Alloy Hollow Bars</h1> <!-- 52 characters -->
                </div>
            </div>
        </div>
    </section>



    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Hollow Bars</h2>
            </div>

            <div class="row align-items-center">
                <!-- Left Image -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/peoduct/Hollow-Bars.jpeg') }}"
                        alt="Hollow Bars" class="img-fluid rounded shadow-sm">
                </div>

                <!-- Right Content -->
                <div class="col-md-6">
                    <p class="fs-6 mb-3 text-justify">
                        <strong class="text-black">Hollow Bars</strong> are tubular metal <a
                            href="{{ route('products.bars-rods') }}">bars</a> with a hollow center,
                        offering a <a href="{{ route('materials.high-strength-stainless-steel') }}">high strength</a> to
                        weight ratio. Widely used in automotive, construction, marine,
                        aerospace, and mechanical applications, they provide excellent machinability and versatility.
                    <p class="fs-6 mb-3 text-justify">
                        <a href="{{ route('index') }}"><b>Moksh Tubes & Fittings LLP</b></a>, we supply high quality
                        stainless steel hollow bars, MS hollow bars, 4140
                        hollow bars, <a href="{{ route('materials.aluminium-Alloys') }}">aluminium</a> hollow <a
                            href="{{ url('products/bars-rods/square-bars') }}">square bars</a>, bronze hollow bars, and <a
                            href="{{ route('materials.nickel-Based-Superalloys') }}">nickel</a> hollow bars. We also offer
                        hollow square bars, extruded hollow bars, and oil filled hollow bars for specialized applications.
                        All <a href="{{ route('products') }}">products</a> conform to ASTM, ASME, DIN, EN, and JIS
                        standards.
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
                                    <td>Stainless Steel, Carbon Steel, Alloy Steel, <a
                                            href="{{ route('materials.duplex-and-super-duplex') }}">Duplex & Super
                                            Duplex</a>, Nickel Alloys,
                                        Titanium, Copper Alloys</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Grades</td>
                                    <td>ASTM, ASME, DIN, EN certified grades – all major alloys available</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Size Range</td>
                                    <td>OD: 25 mm – 450 mm / ID: 12 mm – 300 mm (custom sizes available)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Wall Thickness</td>
                                    <td>5 mm – 100 mm</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Lengths</td>
                                    <td>Standard 3m – 6m; cut to length on request</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Standards</td>
                                    <td>ASTM A511, A312, A790, EN 10294, DIN 17458</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Forms</td>
                                    <td>Seamless Hollow Bars, <a
                                            href="{{ route('products.pipes-tubes.welded-pipes') }}">Welded</a> Hollow Bars
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Finishes</td>
                                    <td>Mill Finish, Polished, Pickled & Passivated, Ground</td>
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
                            <th>OD (mm)</th>
                            <th>WT (mm)</th>
                            <th>ID (mm)</th>
                            <th>Weight (Kg/m)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row">
                            <td>20</td>
                            <td>2</td>
                            <td>16</td>
                            <td>0.94</td>
                        </tr>
                        <tr class="t-row">
                            <td>25</td>
                            <td>3</td>
                            <td>19</td>
                            <td>1.72</td>
                        </tr>
                        <tr class="t-row">
                            <td>30</td>
                            <td>4</td>
                            <td>22</td>
                            <td>2.72</td>
                        </tr>
                        <tr class="t-row">
                            <td>40</td>
                            <td>5</td>
                            <td>30</td>
                            <td>4.56</td>
                        </tr>
                        <tr class="t-row">
                            <td>50</td>
                            <td>6</td>
                            <td>38</td>
                            <td>6.80</td>
                        </tr>
                        <tr class="t-row">
                            <td>60</td>
                            <td>8</td>
                            <td>44</td>
                            <td>10.84</td>
                        </tr>
                        <tr class="t-row">
                            <td>80</td>
                            <td>10</td>
                            <td>60</td>
                            <td>18.24</td>
                        </tr>
                        <tr class="t-row">
                            <td>100</td>
                            <td>12</td>
                            <td>76</td>
                            <td>27.28</td>
                        </tr>
                        <tr class="t-row">
                            <td>150</td>
                            <td>16</td>
                            <td>118</td>
                            <td>54.40</td>
                        </tr>
                        <tr class="t-row">
                            <td>200</td>
                            <td>20</td>
                            <td>160</td>
                            <td>88.80</td>
                        </tr>
                        <tr class="t-row">
                            <td>250</td>
                            <td>25</td>
                            <td>200</td>
                            <td>138.00</td>
                        </tr>
                        <tr class="t-row">
                            <td>300</td>
                            <td>30</td>
                            <td>240</td>
                            <td>198.00</td>
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
                <h2 class="fw-bold" style="color: #174268;">Nominal Bore</h2>
            </div>

            <!-- Child Title -->
            <div class="section-title center mb-3">
                <h4 class="text-center mb-0" style="color: #db7227;">Expanded Table (for one item – Hollow Pipes)</h4>
            </div>


            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle text-center">
                            <thead class="table-dark">
                                <tr class="t-row">
                                    <th>NB (mm)</th>
                                    <th>Inches</th>
                                    <th>OD (mm)</th>
                                    <th>Sch 40 WT (mm)</th>
                                    <th>Sch 40 Wt (Kg/m)</th>
                                    <th>Sch 80 WT (mm)</th>
                                    <th>Sch 80 Wt (Kg/m)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>15</td>
                                    <td>1/2</td>
                                    <td>21.3</td>
                                    <td>2.77</td>
                                    <td>1.27</td>
                                    <td>3.73</td>
                                    <td>1.62</td>
                                </tr>
                                <tr class="t-row">
                                    <td>20</td>
                                    <td>3/4</td>
                                    <td>26.7</td>
                                    <td>2.87</td>
                                    <td>1.68</td>
                                    <td>3.91</td>
                                    <td>2.20</td>
                                </tr>
                                <tr class="t-row">
                                    <td>25</td>
                                    <td>1</td>
                                    <td>33.4</td>
                                    <td>3.38</td>
                                    <td>2.50</td>
                                    <td>4.55</td>
                                    <td>3.24</td>
                                </tr>
                                <tr class="t-row">
                                    <td>32</td>
                                    <td>1 1/4</td>
                                    <td>42.2</td>
                                    <td>3.56</td>
                                    <td>3.38</td>
                                    <td>4.85</td>
                                    <td>4.47</td>
                                </tr>
                                <tr class="t-row">
                                    <td>40</td>
                                    <td>1 1/2</td>
                                    <td>48.3</td>
                                    <td>3.68</td>
                                    <td>4.05</td>
                                    <td>5.08</td>
                                    <td>5.41</td>
                                </tr>
                                <tr class="t-row">
                                    <td>50</td>
                                    <td>2</td>
                                    <td>60.3</td>
                                    <td>3.91</td>
                                    <td>5.44</td>
                                    <td>5.54</td>
                                    <td>7.48</td>
                                </tr>
                                <tr class="t-row">
                                    <td>65</td>
                                    <td>2 1/2</td>
                                    <td>73.0</td>
                                    <td>5.16</td>
                                    <td>8.63</td>
                                    <td>7.01</td>
                                    <td>11.40</td>
                                </tr>
                                <tr class="t-row">
                                    <td>80</td>
                                    <td>3</td>
                                    <td>88.9</td>
                                    <td>5.49</td>
                                    <td>11.30</td>
                                    <td>7.62</td>
                                    <td>15.20</td>
                                </tr>
                                <tr class="t-row">
                                    <td>100</td>
                                    <td>4</td>
                                    <td>114.3</td>
                                    <td>6.02</td>
                                    <td>16.07</td>
                                    <td>8.56</td>
                                    <td>22.30</td>
                                </tr>
                                <tr class="t-row">
                                    <td>150</td>
                                    <td>6</td>
                                    <td>168.3</td>
                                    <td>7.11</td>
                                    <td>28.30</td>
                                    <td>10.97</td>
                                    <td>42.70</td>
                                </tr>
                                <tr class="t-row">
                                    <td>200</td>
                                    <td>8</td>
                                    <td>219.1</td>
                                    <td>8.18</td>
                                    <td>42.60</td>
                                    <td>12.70</td>
                                    <td>64.60</td>
                                </tr>
                                <tr class="t-row">
                                    <td>250</td>
                                    <td>10</td>
                                    <td>273.1</td>
                                    <td>9.27</td>
                                    <td>60.50</td>
                                    <td>12.70</td>
                                    <td>96.00</td>
                                </tr>
                                <tr class="t-row">
                                    <td>300</td>
                                    <td>12</td>
                                    <td>323.9</td>
                                    <td>9.52</td>
                                    <td>73.88</td>
                                    <td>12.70</td>
                                    <td>132.00</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light" style="padding-top: 80px;">
        <div class="container">

            <!-- Parent Title -->
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Square Hollow Sections</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle text-center">
                            <thead class="table-dark">
                                <tr class="t-row">
                                    <th>Size (mm)</th>
                                    <th>WT (mm)</th>
                                    <th>Weight (Kg/m)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>25 × 25</td>
                                    <td>2</td>
                                    <td>1.47</td>
                                </tr>
                                <tr class="t-row">
                                    <td>25 × 25</td>
                                    <td>3</td>
                                    <td>2.13</td>
                                </tr>
                                <tr class="t-row">
                                    <td>40 × 40</td>
                                    <td>3</td>
                                    <td>3.55</td>
                                </tr>
                                <tr class="t-row">
                                    <td>50 × 50</td>
                                    <td>3</td>
                                    <td>4.49</td>
                                </tr>
                                <tr class="t-row">
                                    <td>50 × 50</td>
                                    <td>4</td>
                                    <td>5.84</td>
                                </tr>
                                <tr class="t-row">
                                    <td>60 × 60</td>
                                    <td>4</td>
                                    <td>7.11</td>
                                </tr>
                                <tr class="t-row">
                                    <td>75 × 75</td>
                                    <td>5</td>
                                    <td>11.05</td>
                                </tr>
                                <tr class="t-row">
                                    <td>100 × 100</td>
                                    <td>5</td>
                                    <td>14.87</td>
                                </tr>
                                <tr class="t-row">
                                    <td>150 × 150</td>
                                    <td>6</td>
                                    <td>26.65</td>
                                </tr>
                                <tr class="t-row">
                                    <td>200 × 200</td>
                                    <td>8</td>
                                    <td>47.19</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light" style="padding-top: 80px;">
        <div class="container">

            <!-- Parent Title -->
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Rectangular Hollow Sections</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle text-center">
                            <thead class="table-dark">
                                <tr class="t-row">
                                    <th>Size (mm)</th>
                                    <th>WT (mm)</th>
                                    <th>Weight (Kg/m)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>40 × 20</td>
                                    <td>2</td>
                                    <td>2.08</td>
                                </tr>
                                <tr class="t-row">
                                    <td>50 × 25</td>
                                    <td>3</td>
                                    <td>3.61</td>
                                </tr>
                                <tr class="t-row">
                                    <td>60 × 40</td>
                                    <td>3</td>
                                    <td>4.49</td>
                                </tr>
                                <tr class="t-row">
                                    <td>80 × 40</td>
                                    <td>4</td>
                                    <td>7.56</td>
                                </tr>
                                <tr class="t-row">
                                    <td>100 × 50</td>
                                    <td>4</td>
                                    <td>9.28</td>
                                </tr>
                                <tr class="t-row">
                                    <td>120 × 60</td>
                                    <td>5</td>
                                    <td>14.25</td>
                                </tr>
                                <tr class="t-row">
                                    <td>150 × 100</td>
                                    <td>6</td>
                                    <td>21.88</td>
                                </tr>
                                <tr class="t-row">
                                    <td>200 × 100</td>
                                    <td>8</td>
                                    <td>33.98</td>
                                </tr>
                                <tr class="t-row">
                                    <td>250 × 150</td>
                                    <td>8</td>
                                    <td>48.45</td>
                                </tr>
                                <tr class="t-row">
                                    <td>300 × 200</td>
                                    <td>10</td>
                                    <td>85.00</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light" style="padding-top: 80px;">
        <div class="container">

            <!-- Parent Title -->
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Oval Hollow Sections</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle text-center">
                            <thead class="table-dark">
                                <tr class="t-row">
                                    <th>Size (mm)</th>
                                    <th>WT (mm)</th>
                                    <th>Weight (Kg/m)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>30 × 15</td>
                                    <td>2</td>
                                    <td>1.15</td>
                                </tr>
                                <tr class="t-row">
                                    <td>40 × 20</td>
                                    <td>2</td>
                                    <td>1.60</td>
                                </tr>
                                <tr class="t-row">
                                    <td>50 × 25</td>
                                    <td>2.5</td>
                                    <td>2.40</td>
                                </tr>
                                <tr class="t-row">
                                    <td>60 × 30</td>
                                    <td>3</td>
                                    <td>3.50</td>
                                </tr>
                                <tr class="t-row">
                                    <td>80 × 40</td>
                                    <td>3</td>
                                    <td>4.80</td>
                                </tr>
                                <tr class="t-row">
                                    <td>100 × 50</td>
                                    <td>4</td>
                                    <td>7.20</td>
                                </tr>
                                <tr class="t-row">
                                    <td>120 × 60</td>
                                    <td>5</td>
                                    <td>11.20</td>
                                </tr>
                                <tr class="t-row">
                                    <td>150 × 75</td>
                                    <td>6</td>
                                    <td>19.50</td>
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
                <h4 class="text-center mb-0" style="color: #db7227;"><strong>Hollow Bars</strong> is
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
                                    <td><a
                                            href="{{ url('materials/austenitic-stainless-steel/austenitic-stainless-steel-304') }}">304</a>,
                                        304L, 316, 316L, <a
                                            href="{{ url('frontend/materials/austenitic-stainless-steel/austenitic-stainless-steel-310') }}">310</a>,
                                        321, <a
                                            href="{{ url('frontend/materials/austenitic-stainless-steel/austenitic-stainless-steel-347') }}">347</a>
                                        <br>
                                        <small>(Corrosion resistance & machining)</small>
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon Steel</td>
                                    <td>ASTM A105, A350 LF2, IS2062 <br>
                                        <small>(Structural & general engineering)</small>
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Alloy Steel</td>
                                    <td><a
                                            href="{{ url('materials/engineering-steels/engineering-steels-4140') }}">4140</a>,
                                        4130, EN19, <a
                                            href="{{ url('materials/engineering-steels/engineering-steels-en24') }}">EN24</a>
                                        <br>
                                        <small>(High strength machined components)</small>
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Duplex & Super Duplex</td>
                                    <td><a
                                            href="{{ url('materials/duplex-and-super-duplex/super-duplex-2205') }}">2205</a>,
                                        S32750, <a
                                            href="{{ url('materials/duplex-and-super-duplex/super-duplex-s32760') }}">S32760</a>
                                        <br>
                                        <small>(Offshore & chemical processing)</small>
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nickel Alloys</td>
                                    <td>Inconel, <a href="{{ route('materials.monel') }}">Monel</a>, Hastelloy <br>
                                        <small>(High temperature & corrosive environments)</small>
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Titanium</td>
                                    <td>Grades 2, <a href="{{ url('materials/titanium/titanium-grade-5') }}">5</a> <br>
                                        <small>(Aerospace, desalination & chemical industries)</small>
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Copper Alloys</td>
                                    <td><a href="{{ url('materials/copper-alloys/copper-alloys-cu-ni-70-30') }}">Cu-Ni
                                            70/30</a>, Cu-Ni 90/10, Brass, Bronze <br>
                                        <small>(Marine & decorative)</small>
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
                    <strong class="text-black">Hollow Bars</strong> is versatile and used across a variety of
                    industries and settings:
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon">
                            <i class="bi bi-building"></i>
                        </div>
                        <h5>Construction & Infrastructure</h5>
                        <ul>
                            <li>Structural supports, frameworks, base plates</li>
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
                            <li>Bronze, nickel, duplex, and Cu-Ni hollow bars for shafts, propellers, offshore rigs</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon">
                            <i class="bi bi-fuel-pump"></i>
                        </div>
                        <h5>Oil, Gas & Petrochemical</h5>
                        <ul>
                            <li>Valve bodies, pump housings, manifolds, high-pressure pipelines</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon">
                            <i class="bi bi-gear-wide-connected"></i>
                        </div>
                        <h5>Industrial & Engineering</h5>
                        <ul>
                            <li>Bushings, bearings, hydraulic cylinders, rollers, machine tools</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon">
                            <i class="bi bi-truck-front"></i>
                        </div>
                        <h5>Automotive & Aerospace</h5>
                        <ul>
                            <li>Shafts, hydraulic systems, landing gear, lightweight components</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon">
                            <i class="bi bi-capsule-pill"></i>
                        </div>
                        <h5>Food, Pharma & Chemical</h5>
                        <ul>
                            <li>Sanitary fittings, clean piping, processing machinery</li>
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


    {{-- Advantages of Welded Pipes & Tubes --}}
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Advantages of Hollow Bars</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-tools"></i></div>
                        <h4>High Machinability</h4>
                        <h5>Turning, boring, threading, milling.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-bullseye"></i></div>
                        <h4>Consistent Quality</h4>
                        <h5>Tight tolerances on OD, ID, wall thickness.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-cash-coin"></i></div>
                        <h4>Material Efficiency</h4>
                        <h5>Less waste, cost effective production.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-layers"></i></div>
                        <h4>Wide Material Range</h4>
                        <h5>Stainless, Duplex, Nickel, Titanium, Copper alloys.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-globe2"></i></div>
                        <h4>Global Standards</h4>
                        <h5>ASTM, ASME, DIN, EN, ISO certified.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-sliders"></i></div>
                        <h4>Custom Solutions</h4>
                        <h5>Cut to length & special dimensions available.</h5>
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
                        <div class="why-banner-icon"><i class="bi bi-layers-fill"></i></div>
                        <h5>Wide Range: Stainless Steel, MS, Alloy, Aluminium, Bronze, Nickel.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-rulers"></i></div>
                        <h5>Custom Sizes & Grades available for diverse applications.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-patch-check-fill"></i></div>
                        <h5>High Quality Standards: ASTM, ASME, DIN, EN, JIS compliant.</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Global Supply: Bangladesh, India, UAE, USA, Europe.</h5>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-people-fill"></i></div>
                        <h5>Trusted Suppliers: Hollow Bar Albany, Hollow MS Bar Bangladesh.</h5>
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
                                <h4>What is a hollow bar and where is it used?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    A hollow bar is a metal bar with a hollow center, reducing weight while maintaining
                                    strength.
                                    It is widely used in construction, automotive, aerospace, marine, and mechanical
                                    projects.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What materials are available?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Stainless steel, MS, 4140, aluminium hollow <a
                                        href="{{ url('products/bars-rods/square-bars') }}">square bars</a>, bronze, and
                                    nickel hollow bars.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What sizes can I get?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Sizes range from 10 mm hollow bar to 2 inch × 2 inch hollow square bar, with wall
                                    thickness
                                    and custom diameters available.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Can I get hollow bars in Dhaka or Albany?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Yes, delivery is available for Hollow Square Bars in Dhaka, Hollow Bar Albany, and
                                    worldwide.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What types do you supply?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    We supply hollow steel bar, extruded hollow bar, oil-filled hollow bar, MS hollow bar,
                                    and aluminium hollow square bar. All products meet ASTM, ASME, DIN, and EN standards.
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
                    For precision hollow bars for machining or structural applications:<br>Contact <strong><a
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
<script type="application/ld+json">
@verbatim
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is a hollow bar and where is it used?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A hollow bar is a metal bar with a hollow center, reducing weight while maintaining strength. It is widely used in construction, automotive, aerospace, marine, and mechanical projects."
      }
    },
    {
      "@type": "Question",
      "name": "What materials are available?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Stainless steel, MS, 4140, aluminium hollow square bars, bronze, and nickel hollow bars are available."
      }
    },
    {
      "@type": "Question",
      "name": "What sizes can I get?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Sizes range from 10 mm hollow bar to 2 inch × 2 inch hollow square bar, with wall thickness and custom diameters available."
      }
    },
    {
      "@type": "Question",
      "name": "Can I get hollow bars in Dhaka or Albany?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, delivery is available for Hollow Square Bars in Dhaka, Hollow Bar Albany, and worldwide."
      }
    },
    {
      "@type": "Question",
      "name": "What types do you supply?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We supply hollow steel bar, extruded hollow bar, oil-filled hollow bar, MS hollow bar, and aluminium hollow square bar. All products meet ASTM, ASME, DIN, and EN standards."
      }
    }
  ]
}
@endverbatim
</script>
@endsection
