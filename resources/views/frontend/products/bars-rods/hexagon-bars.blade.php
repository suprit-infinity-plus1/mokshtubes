@extends('layouts.master')
@section('title', 'Hexagon Bars – Stainless, Brass, Aluminium & Alloy') <!-- 53 characters -->
@section('meta_description',
    'Mokshtubes offers premium stainless, brass, aluminium & alloy hexagon bars in various
    sizes, grades & weight chart.') <!-- 152 characters -->
@section('meta_keywords',
    'hexagon bar, hexagonal bars, stainless steel hex bar, mild steel hex bar, alloy steel hex
    bar, brass hex bar, aluminium hex bar, hex bar sizes, hex bar weight chart')
    @section('og_title', 'Premium Stainless Steel & Alloy Hexagon Bars | Hex Bar Suppliers')

@section('og_description', 'Buy stainless steel hexagon bar, hex steel bar, 316 stainless steel hex bar, aluminium hexagon bar, and brass hex bar at best prices with global delivery')

@section('og_image', 'https://mokshtubes.com/assets/images/products/Hexagon-Bars.jpg')

@section('og_url', url()->current())

@section('og_type', 'product')

@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/peoduct/Hexagon-Bars.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Premium Stainless & Alloy Hexagon Bars</h1> <!-- 52 characters -->
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Hexagon Bars</h2>
            </div>

            <div class="row align-items-center">
                <!-- Left Image -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/peoduct/Hexagon-Bars.jpg') }}"
                        alt="Hexagon Bars" class="img-fluid rounded shadow-sm">
                </div>

                <!-- Right Content -->
                <div class="col-md-6">
                    <p class="fs-6 mb-3 text-justify">
                        <strong class="text-black">Hexagon Bars</strong> (also called hexagonal bars) are six sided solid
                        metal bars widely used for precision machining, fabrication, and fastener manufacturing. Their
                        geometry allows for easy gripping, machining, and threading, making them the first choice for nuts,
                        bolts, studs, and mechanical components.
                    <p class="fs-6 mb-3 text-justify">
                        <a href="{{ route('index') }}"><b>Moksh Tubes & Fittings LLP</b></a>, we supply high quality
                        <a href="{{ route('materials.super-Austenitic-Stainless-Steel') }}">stainless steel</a> hexagon bar,
                        stainless steel hex bar, hex steel bar, hexagon steel bar, <a
                            href="{{ route('materials.aluminium-Alloys') }}">aluminium</a>
                        hexagon bar, brass hexagon bar, brass hex bar, aluminum hex bar, and special alloys. Our hexagonal
                        bright bars and hexagonal hollow bars are manufactured to ASTM, ASME, DIN, EN, and JIS standards,
                        ensuring precision, durability, and excellent machinability.
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
                                    <td><a href="{{ route('materials.high-strength-stainless-steel') }}">Stainless
                                            Steel</a>, Carbon Steel, Alloy Steel, <a
                                            href="{{ route('materials.duplex-and-super-duplex') }}">Duplex &amp; Super
                                            Duplex</a>, <a href="{{ route('materials.nickel-Based-Superalloys') }}">Nickel
                                            Alloys</a>, <a href="{{ route('materials.titanium') }}">Titanium</a>, <a
                                            href="{{ route('materials.aluminium-Alloys') }}">Aluminum</a>, Brass, <a
                                            href="{{ route('materials.copper-Alloys') }}">Copper</a></td>
                                </tr>
                                <tr class="t-row">
                                    <td>Grades</td>
                                    <td>ASTM, ASME, DIN, EN, and JIS certified grades – all major alloys available</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Size Range (Across Flats)</td>
                                    <td>6 mm to 75 mm (custom sizes up to 100 mm on request)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Lengths</td>
                                    <td>3 meters to 6 meters (or cut to length)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Types</td>
                                    <td>Hot Rolled Hex Bars, Cold Drawn Hex Bars, Precision Ground Hex Bars</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Finishes</td>
                                    <td>Bright, Polished, Mill Finish, Shot Blasted, Pickled &amp; Passivated</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Standards</td>
                                    <td>ASTM A276, A484, ASTM B160, EN 10060, JIS H3250</td>
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
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr class="t-row">
                            <th>Across Flats (mm)</th>
                            <th>Sectional Area (mm²)</th>
                            <th>MS (7.85)</th>
                            <th>SS (7.93)</th>
                            <th>Aluminium (2.70)</th>
                            <th>Brass (8.40)</th>
                            <th>Copper (8.94)</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="t-row">
                            <td>10</td>
                            <td>86.6</td>
                            <td>0.68</td>
                            <td>0.69</td>
                            <td>0.23</td>
                            <td>0.73</td>
                            <td>0.77</td>
                        </tr>
                        <tr class="t-row">
                            <td>12</td>
                            <td>124.7</td>
                            <td>0.98</td>
                            <td>0.99</td>
                            <td>0.34</td>
                            <td>1.05</td>
                            <td>1.11</td>
                        </tr>
                        <tr class="t-row">
                            <td>14</td>
                            <td>169.7</td>
                            <td>1.33</td>
                            <td>1.35</td>
                            <td>0.46</td>
                            <td>1.43</td>
                            <td>1.51</td>
                        </tr>
                        <tr class="t-row">
                            <td>16</td>
                            <td>221.0</td>
                            <td>1.73</td>
                            <td>1.75</td>
                            <td>0.60</td>
                            <td>1.86</td>
                            <td>1.97</td>
                        </tr>
                        <tr class="t-row">
                            <td>18</td>
                            <td>279.5</td>
                            <td>2.19</td>
                            <td>2.22</td>
                            <td>0.75</td>
                            <td>2.35</td>
                            <td>2.49</td>
                        </tr>
                        <tr class="t-row">
                            <td>20</td>
                            <td>346.4</td>
                            <td>2.72</td>
                            <td>2.75</td>
                            <td>0.94</td>
                            <td>2.91</td>
                            <td>3.10</td>
                        </tr>
                        <tr class="t-row">
                            <td>22</td>
                            <td>420.8</td>
                            <td>3.31</td>
                            <td>3.34</td>
                            <td>1.14</td>
                            <td>3.53</td>
                            <td>3.76</td>
                        </tr>
                        <tr class="t-row">
                            <td>25</td>
                            <td>541.3</td>
                            <td>4.25</td>
                            <td>4.29</td>
                            <td>1.46</td>
                            <td>4.54</td>
                            <td>4.84</td>
                        </tr>
                        <tr class="t-row">
                            <td>28</td>
                            <td>679.1</td>
                            <td>5.34</td>
                            <td>5.39</td>
                            <td>1.83</td>
                            <td>5.70</td>
                            <td>6.08</td>
                        </tr>
                        <tr class="t-row">
                            <td>30</td>
                            <td>779.4</td>
                            <td>6.11</td>
                            <td>6.16</td>
                            <td>2.09</td>
                            <td>6.54</td>
                            <td>6.95</td>
                        </tr>
                        <tr class="t-row">
                            <td>32</td>
                            <td>886.9</td>
                            <td>6.95</td>
                            <td>7.02</td>
                            <td>2.38</td>
                            <td>7.44</td>
                            <td>7.91</td>
                        </tr>
                        <tr class="t-row">
                            <td>36</td>
                            <td>1124.0</td>
                            <td>8.80</td>
                            <td>8.91</td>
                            <td>3.02</td>
                            <td>9.42</td>
                            <td>10.06</td>
                        </tr>
                        <tr class="t-row">
                            <td>40</td>
                            <td>1386.0</td>
                            <td>10.87</td>
                            <td>10.99</td>
                            <td>3.68</td>
                            <td>11.64</td>
                            <td>12.39</td>
                        </tr>
                        <tr class="t-row">
                            <td>45</td>
                            <td>1752.0</td>
                            <td>13.75</td>
                            <td>13.89</td>
                            <td>4.64</td>
                            <td>14.74</td>
                            <td>15.68</td>
                        </tr>
                        <tr class="t-row">
                            <td>50</td>
                            <td>2165.0</td>
                            <td>16.99</td>
                            <td>17.16</td>
                            <td>5.74</td>
                            <td>18.19</td>
                            <td>19.36</td>
                        </tr>
                        <tr class="t-row">
                            <td>55</td>
                            <td>2625.0</td>
                            <td>20.60</td>
                            <td>20.78</td>
                            <td>6.96</td>
                            <td>22.05</td>
                            <td>23.47</td>
                        </tr>
                        <tr class="t-row">
                            <td>60</td>
                            <td>3115.0</td>
                            <td>24.45</td>
                            <td>24.70</td>
                            <td>8.27</td>
                            <td>26.15</td>
                            <td>27.86</td>
                        </tr>
                        <tr class="t-row">
                            <td>65</td>
                            <td>3650.0</td>
                            <td>28.66</td>
                            <td>28.95</td>
                            <td>9.68</td>
                            <td>30.66</td>
                            <td>32.66</td>
                        </tr>
                        <tr class="t-row">
                            <td>70</td>
                            <td>4240.0</td>
                            <td>33.29</td>
                            <td>33.61</td>
                            <td>11.23</td>
                            <td>35.63</td>
                            <td>37.92</td>
                        </tr>
                        <tr class="t-row">
                            <td>75</td>
                            <td>4870.0</td>
                            <td>38.21</td>
                            <td>38.59</td>
                            <td>12.90</td>
                            <td>41.04</td>
                            <td>43.70</td>
                        </tr>
                        <tr class="t-row">
                            <td>80</td>
                            <td>5540.0</td>
                            <td>43.49</td>
                            <td>43.95</td>
                            <td>14.70</td>
                            <td>46.80</td>
                            <td>49.88</td>
                        </tr>
                        <tr class="t-row">
                            <td>90</td>
                            <td>6990.0</td>
                            <td>54.87</td>
                            <td>55.47</td>
                            <td>18.52</td>
                            <td>58.74</td>
                            <td>62.66</td>
                        </tr>
                        <tr class="t-row">
                            <td>100</td>
                            <td>8660.0</td>
                            <td>67.95</td>
                            <td>68.64</td>
                            <td>22.90</td>
                            <td>72.74</td>
                            <td>77.38</td>
                        </tr>
                        <tr class="t-row">
                            <td>110</td>
                            <td>10460.0</td>
                            <td>82.10</td>
                            <td>82.96</td>
                            <td>27.80</td>
                            <td>87.86</td>
                            <td>93.57</td>
                        </tr>
                        <tr class="t-row">
                            <td>120</td>
                            <td>12470.0</td>
                            <td>97.87</td>
                            <td>98.91</td>
                            <td>33.67</td>
                            <td>106.75</td>
                            <td>113.42</td>
                        </tr>
                        <tr class="t-row">
                            <td>125</td>
                            <td>13540.0</td>
                            <td>106.30</td>
                            <td>107.42</td>
                            <td>36.56</td>
                            <td>115.74</td>
                            <td>122.49</td>
                        </tr>
                        <tr class="t-row">
                            <td>130</td>
                            <td>14620.0</td>
                            <td>114.70</td>
                            <td>115.99</td>
                            <td>39.51</td>
                            <td>125.20</td>
                            <td>132.12</td>
                        </tr>
                        <tr class="t-row">
                            <td>140</td>
                            <td>16970.0</td>
                            <td>133.20</td>
                            <td>134.68</td>
                            <td>45.80</td>
                            <td>144.60</td>
                            <td>152.10</td>
                        </tr>
                        <tr class="t-row">
                            <td>150</td>
                            <td>19490.0</td>
                            <td>152.90</td>
                            <td>154.58</td>
                            <td>52.62</td>
                            <td>166.70</td>
                            <td>175.06</td>
                        </tr>
                        <tr class="t-row">
                            <td>160</td>
                            <td>22180.0</td>
                            <td>174.00</td>
                            <td>175.95</td>
                            <td>59.88</td>
                            <td>189.90</td>
                            <td>199.30</td>
                        </tr>
                        <tr class="t-row">
                            <td>170</td>
                            <td>25040.0</td>
                            <td>196.50</td>
                            <td>198.67</td>
                            <td>67.61</td>
                            <td>214.60</td>
                            <td>225.00</td>
                        </tr>
                        <tr class="t-row">
                            <td>180</td>
                            <td>28080.0</td>
                            <td>220.70</td>
                            <td>223.05</td>
                            <td>75.82</td>
                            <td>240.90</td>
                            <td>253.20</td>
                        </tr>
                        <tr class="t-row">
                            <td>190</td>
                            <td>31290.0</td>
                            <td>245.70</td>
                            <td>248.39</td>
                            <td>84.49</td>
                            <td>268.90</td>
                            <td>282.70</td>
                        </tr>
                        <tr class="t-row">
                            <td>200</td>
                            <td>34640.0</td>
                            <td>272.00</td>
                            <td>275.00</td>
                            <td>93.60</td>
                            <td>298.90</td>
                            <td>314.00</td>
                        </tr>
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
                <h4 class="text-center mb-0" style="color: #db7227;"><strong>Hexagon Bars</strong> in a wide range of
                    grades, ensuring suitability for different applications, environments,
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
                                    <td>
                                        303 stainless steel hex bar, 304 stainless steel hex bar, <a
                                            href="{{ url('materials/austenitic-stainless-steel/austenitic-stainless-steel-316') }}">316
                                            stainless steel</a> hex
                                        bar,
                                        316 stainless steel hexagon bar, 316 hex bar, 17-4 stainless hex bar, 17-4PH hex
                                        bar,
                                        ss 303 hex bar, <a
                                            href="{{ url('materials/austenitic-stainless-steel/austenitic-stainless-steel-304') }}">ss
                                            304</a> hex bar, ss 304 hex bar price, ss hex bar, ss hexagonal rod
                                        <br>
                                        <small>(Corrosion resistance & machining)</small>
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon Steel</td>
                                    <td>
                                        ASTM A36, EN8, EN9, IS2062
                                        <br>
                                        <small>(General engineering & structural applications)</small>
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Alloy Steel</td>
                                    <td>
                                        4140, 4130, EN19, EN24
                                        <br>
                                        <small>(Heavy duty engineering)</small>
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Duplex & Super Duplex</td>
                                    <td>
                                        2205, S32750, S32760
                                        <br>
                                        <small>(Oil, gas & offshore)</small>
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nickel Alloys</td>
                                    <td>
                                        <a href="{{ route('materials.inconel') }}">Inconel</a>, <a
                                            href="{{ route('materials.monel') }}">Monel</a>, <a
                                            href="{{ route('materials.hastelloy') }}">Hastelloy</a>
                                        <br>
                                        <small>(High temperature & corrosive service)</small>
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Titanium</td>
                                    <td>
                                        <a href="{{ url('materials/titanium/titanium-grade-2') }}">Grade 2</a>, <a
                                            href="{{ url('materials/titanium/titanium-grade-5') }}">Grade 5</a>
                                        <br>
                                        <small>(Aerospace & desalination projects)</small>
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Copper & Brass</td>
                                    <td>
                                        brass hex rod, brass hex rod sizes, brass hexagon, brass hex bar price, brass hex
                                        bar weight <a href="{{ route('calculator') }}">calculator</a>,
                                        hex bar brass, hexagonal brass rod, hexagonal brass bar suppliers, brass hex bar
                                        stock
                                        <br>
                                        <small>(Marine & decorative)</small>
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Aluminum</td>
                                    <td>
                                        aluminium hex bar sizes, aluminium hex rod, aluminium hex tube, aluminium hexagonal
                                        tube,
                                        hexagon aluminum tube, hexagonal aluminum extrusion, 6061, 6082, 7075
                                        <br>
                                        <small>(Lightweight & corrosion resistant)</small>
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
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Types of Hexagon Bars</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-building"></i></div>
                        <h4>Hot Rolled Hex Bars</h4>
                        <h5>Strong & economical for structural use</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h4>Cold Drawn Hex Bars</h4>
                        <h5>Smooth finish, tight tolerances for machining</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-stars"></i></div>
                        <h4>Bright & Polished Hex Bars</h4>
                        <h5>Decorative and high-finish uses</h5>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-6">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-tools"></i></div>
                        <h4>Free Cutting Brass Hex Bars</h4>
                        <h5>Excellent machinability for <a
                                href="{{ url('products/pipe-fittings-flanges-fasteners/fasteners') }}">fasteners</a></h5>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-6">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h4>Custom Hex Bars</h4>
                        <h5>Available in tailored sizes & finishes as per project needs.</h5>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications</h2>
                <p class="text-center pb-3">
                    <strong class="text-black">Hexagon Bars</strong> is versatile and used across a variety of
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
                            <li>Base plates, braces, <a
                                    href="{{ url('products/pipe-fittings-flanges-fasteners/fittings-and-flanges') }}">fittings</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon">
                            <i class="bi bi-water"></i>
                        </div>
                        <h5>Marine & Shipbuilding</h5>
                        <ul>
                            <li>Stainless & <a href="{{ route('materials.duplex-and-super-duplex') }}">duplex</a> hex bars
                                for corrosion resistance, <a href="{{ route('materials.copper-Alloys') }}">copper</a> <a
                                    href="{{ route('materials.nickel-Based-Superalloys') }}">nickel</a> for seawater</li>
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
                            <li>Stainless steel hex bar suppliers for nuts, bolts, valve components</li>
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
                            <li>Aluminium hex bar & <a href="{{ route('materials.titanium') }}">titanium</a> hex bars for
                                engine & suspension</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon">
                            <i class="bi bi-gear-wide-connected"></i>
                        </div>
                        <h5>Industrial Manufacturing</h5>
                        <ul>
                            <li>Machining stock, fastener production</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon">
                            <i class="bi bi-bricks"></i>
                        </div>
                        <h5>Decorative & Architectural</h5>
                        <ul>
                            <li>Brass hex bars for luxury trims</li>
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
                <h2>Uses of Hexagon Bars</h2>
            </div>
            <!-- Child Title -->
            <div class="section-title center mb-3">
                <h4 class="text-center mb-0" style="color: #db7227;">Hexagon Bars are used extensively
                    across multiple
                    industries, including:</h4>
            </div>
            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-nut"></i></div>
                        <h4>Fastener Manufacturing</h4>
                        <h5>Nuts, bolts, studs, and threaded components</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear"></i></div>
                        <h4>Machining Stock</h4>
                        <h5>Easy to grip & machine into precision parts</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-diagram-3"></i></div>
                        <h4>Structural & Fabrication</h4>
                        <h5>Used in supports, brackets, and frameworks</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-brush"></i></div>
                        <h4>Decorative Applications</h4>
                        <h5>Brass & stainless hex bars for interior and hardware designs</h5>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-6">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-lightning-charge"></i></div>
                        <h4>Electrical Components</h4>
                        <h5>Copper hex bars for conductive parts & terminals</h5>
                    </div>
                </div>
            </div>

        </div>
    </section>


    {{-- Advantages of Welded Pipes & Tubes --}}
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Advantages of Hexagon Bars</h2>
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
                        <h5>Stainless, <a href="{{ route('materials.duplex-and-super-duplex') }}">Duplex</a>, Nickel,
                            Titanium, Copper alloys.</h5>
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
                        <div class="why-banner-icon"><i class="bi bi-box-seam"></i></div>
                        <h5>Hex bar suppliers with extensive stock in Mumbai, India</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-patch-check-fill"></i></div>
                        <h5>ISO 9001:2015 certified, MTC & third party inspection available</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Hexagon bar suppliers for global industries (fasteners, marine, oil & gas)</h5>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>Ready stock for urgent projects with fast delivery</h5>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5><a href="{{ url('products/special-fabricated/custom-steel-furniture') }}">Custom</a> machining
                            & cut to length solutions available.</h5>
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
                                <h4>What are hexagon bars used for?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Hexagon bars are commonly used in nuts, bolts, fasteners, and precision components due
                                    to their six sided shape, which makes them easy to machine and grip.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What materials are available in hexagon bars?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    We supply stainless steel hexagon bars, mild steel hexagon bars, alloy steel hexagon
                                    bars, brass hexagon bars, copper hexagon bars, and aluminium hexagon bars in different
                                    grades and finishes.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What sizes do hexagon bars come in?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Hexagon bars are available in a wide range of sizes, including 10 mm hexagon bar, 20 mm
                                    hex bar, and custom cut to size options.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>How to calculate the weight of a hexagon bar?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    The weight of a hexagon bar can be calculated using the formula:<br>
                                    <b>Weight (kg/m) = (0.0068 × Across Flat Dimension²) × Density of Material.</b>
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Who are the leading hexagon bar suppliers in Mumbai, India?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    <a href="{{ route('index') }}">Moksh Tubes & Fittings LLP</a> is among the trusted
                                    hexagon bar suppliers in Mumbai,
                                    offering a wide range of stainless steel, MS, alloy steel, copper, brass, and aluminium
                                    hexagon bars.
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
                    Looking for high quality hexagonal steel bar suppliers or metric brass hex stock?<br>Contact <strong><a
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
      "name": "What are hexagon bars used for?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Hexagon bars are commonly used in nuts, bolts, fasteners, and precision components due to their six-sided shape, which makes them easy to machine and grip."
      }
    },
    {
      "@type": "Question",
      "name": "What materials are available in hexagon bars?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We supply stainless steel hexagon bars, mild steel hexagon bars, alloy steel hexagon bars, brass hexagon bars, copper hexagon bars, and aluminium hexagon bars in different grades and finishes."
      }
    },
    {
      "@type": "Question",
      "name": "What sizes do hexagon bars come in?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Hexagon bars are available in a wide range of sizes, including 10 mm hexagon bar, 20 mm hex bar, and custom cut-to-size options."
      }
    },
    {
      "@type": "Question",
      "name": "How to calculate the weight of a hexagon bar?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The weight of a hexagon bar can be calculated using the formula: Weight (kg/m) = (0.0068 × Across Flat Dimension²) × Density of Material."
      }
    },
    {
      "@type": "Question",
      "name": "Who are the leading hexagon bar suppliers in Mumbai, India?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Moksh Tubes & Fittings LLP is among the trusted hexagon bar suppliers in Mumbai, offering a wide range of stainless steel, MS, alloy steel, copper, brass, and aluminium hexagon bars."
      }
    }
  ]
}
@endverbatim
</script>
@endsection
