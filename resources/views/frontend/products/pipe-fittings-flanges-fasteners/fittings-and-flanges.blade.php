@extends('layouts.master')
@section('title', 'Flanges & Pipe Fittings | Moksh Tubes & Fittings LLP')
@section('meta_description',
    'High quality flanges: stainless steel, weld neck, slip-on, blind. Explore flange types,
    ASME B16.5 dimensions & industrial flange joints.')
@section('meta_keywords',
    'flanges, stainless steel flanges, weld neck flange, slip on flange, blind flange, pipe
    flange, flange joint, b16 5 flange dimensions, orifice flange, spectacle blind flange')
@section('content')
    <!--Start breadcrumb area-->


    <!--End mainmenu area-->

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Flanges & Pipe Fittings</h1>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Flanges & Pipe Fittings</h2>
            </div>

            <div class="row align-items-center">
                <!-- Left Image -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/peoduct/flangs/Flanges-&-Pipe-Fittings.webp') }}"
                        alt="Flanges-&-Pipe-Fittings" class="img-fluid rounded shadow-sm">
                </div>

                <!-- Right Content -->
                <div class="col-md-6">
                    <p class="fs-6 mb-3 text-justify">
                        <strong class="text-black">Flanges</strong> are essential piping components used to connect pipes,
                        valves, pumps, and other equipment in a piping system. They provide easy assembly and disassembly
                        for inspection, cleaning, or modification of pipelines.
                    </p>
                    <p class="fs-6 mb-3 text-justify">
                        <a href="{{ route('index') }}">Moksh Tubes & Fittings LLP</a>, we supply a complete range of
                        industrial flanges including stainless
                        steel flanges, carbon steel flanges, alloy steel flanges, duplex & super duplex flanges, <a
                            href="{{ route('materials.nickel-Based-Superalloys') }}">nickel
                            alloy</a> flanges, titanium flanges, and copper alloy flanges.
                    </p>
                    <p class="fs-6 text-justify">
                        Our pipe flanges comply with ASTM, ASME, ANSI, DIN, EN, and BS standards, designed to withstand high
                        pressure, temperature, and corrosive environments. These flange joints are widely used in oil & gas,
                        power generation, chemical, and marine industries.
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
                                    <td>Stainless Steel, Carbon Steel, Alloy Steel, Duplex & Super Duplex, Nickel Alloys,
                                        Titanium, Copper Alloys</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Grades</td>
                                    <td>ASTM/ASME/DIN/BS/EN certified grades – all major alloys available</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Size Range</td>
                                    <td>½” NB to 72” NB (custom flange sizes available)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Pressure Ratings</td>
                                    <td>Class 150 to Class 2500 / PN 6 to PN 400</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Types</td>
                                    <td>Weld Neck Flange, Slip-On Flange, Blind Flange, Socket Weld Flange, Threaded Flange,
                                        Lap Joint Flange, Spectacle Blind Flange, Orifice Flange, Long Weld Neck Flange</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Face Types</td>
                                    <td>Raised Face (RF), Flat Face (FF), Ring-Type Joint (RTJ)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Standards</td>
                                    <td>ASME B16.5, ASME B16.47 (Series A & B), MSS-SP-44, BS 4504, DIN EN 1092-1</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Finishes</td>
                                    <td>Serrated, Smooth, Stock Finish, Mirror Polish (for sanitary stainless flanges)</td>
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
                            <th>NPS (in)</th>
                            <th>OD (mm)</th>
                            <th>BCD (mm)</th>
                            <th>Bolt Holes (No. × Dia)</th>
                            <th>Flange Thk (mm)</th>
                            <th>RF Height (mm)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="t-row">
                            <td>½</td>
                            <td>89</td>
                            <td>60.3</td>
                            <td>4 × 15.9</td>
                            <td>11.2</td>
                            <td>1.6</td>
                        </tr>
                        <tr class="t-row">
                            <td>¾</td>
                            <td>98</td>
                            <td>69.9</td>
                            <td>4 × 15.9</td>
                            <td>12.7</td>
                            <td>1.6</td>
                        </tr>
                        <tr class="t-row">
                            <td>1</td>
                            <td>108</td>
                            <td>79.4</td>
                            <td>4 × 15.9</td>
                            <td>14.3</td>
                            <td>1.6</td>
                        </tr>
                        <tr class="t-row">
                            <td>1¼</td>
                            <td>117</td>
                            <td>88.9</td>
                            <td>4 × 15.9</td>
                            <td>15.9</td>
                            <td>1.6</td>
                        </tr>
                        <tr class="t-row">
                            <td>1½</td>
                            <td>127</td>
                            <td>98.4</td>
                            <td>4 × 15.9</td>
                            <td>15.9</td>
                            <td>1.6</td>
                        </tr>
                        <tr class="t-row">
                            <td>2</td>
                            <td>152</td>
                            <td>120.7</td>
                            <td>4 × 19.1</td>
                            <td>16.0</td>
                            <td>1.6</td>
                        </tr>
                        <tr class="t-row">
                            <td>2½</td>
                            <td>178</td>
                            <td>139.7</td>
                            <td>4 × 19.1</td>
                            <td>17.5</td>
                            <td>1.6</td>
                        </tr>
                        <tr class="t-row">
                            <td>3</td>
                            <td>191</td>
                            <td>152.4</td>
                            <td>4 × 19.1</td>
                            <td>19.1</td>
                            <td>1.6</td>
                        </tr>
                        <tr class="t-row">
                            <td>4</td>
                            <td>229</td>
                            <td>190.5</td>
                            <td>8 × 19.1</td>
                            <td>22.3</td>
                            <td>1.6</td>
                        </tr>
                        <tr class="t-row">
                            <td>5</td>
                            <td>254</td>
                            <td>215.9</td>
                            <td>8 × 22.2</td>
                            <td>23.9</td>
                            <td>1.6</td>
                        </tr>
                        <tr class="t-row">
                            <td>6</td>
                            <td>279</td>
                            <td>241.3</td>
                            <td>8 × 22.2</td>
                            <td>25.4</td>
                            <td>1.6</td>
                        </tr>
                        <tr class="t-row">
                            <td>8</td>
                            <td>343</td>
                            <td>298.5</td>
                            <td>8 × 22.2</td>
                            <td>28.6</td>
                            <td>1.6</td>
                        </tr>
                        <tr class="t-row">
                            <td>10</td>
                            <td>406</td>
                            <td>362.0</td>
                            <td>12 × 25.4</td>
                            <td>30.2</td>
                            <td>1.6</td>
                        </tr>
                        <tr class="t-row">
                            <td>12</td>
                            <td>483</td>
                            <td>431.8</td>
                            <td>12 × 25.4</td>
                            <td>32.0</td>
                            <td>1.6</td>
                        </tr>
                        <tr class="t-row">
                            <td>14</td>
                            <td>533</td>
                            <td>476.3</td>
                            <td>12 × 28.6</td>
                            <td>35.0</td>
                            <td>1.6</td>
                        </tr>
                        <tr class="t-row">
                            <td>16</td>
                            <td>597</td>
                            <td>539.8</td>
                            <td>16 × 28.6</td>
                            <td>37.0</td>
                            <td>1.6</td>
                        </tr>
                        <tr class="t-row">
                            <td>18</td>
                            <td>635</td>
                            <td>577.8</td>
                            <td>16 × 31.8</td>
                            <td>40.0</td>
                            <td>1.6</td>
                        </tr>
                        <tr class="t-row">
                            <td>20</td>
                            <td>698</td>
                            <td>635.0</td>
                            <td>20 × 31.8</td>
                            <td>42.0</td>
                            <td>1.6</td>
                        </tr>
                        <tr class="t-row">
                            <td>24</td>
                            <td>813</td>
                            <td>749.3</td>
                            <td>20 × 34.9</td>
                            <td>48.0</td>
                            <td>1.6</td>
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
                <h2 class="fw-bold" style="color: #174268;">Flanges Dimensions</h2>
            </div>

            <!-- Child Title -->
            <div class="section-title center mb-3">
                <h4 class="text-center mb-0" style="color: #db7227;">Expanded Table (for one item – Flanges Dimensions)</h4>
            </div>


            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>NPS (in)</th>
                                    <th>OD (mm)</th>
                                    <th>Bolt Circle (mm)</th>
                                    <th>No. of Bolts</th>
                                    <th>Bolt Size</th>
                                    <th>RF Raised Face Thickness (mm)</th>
                                    <th>Flange Thickness (mm)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr class="t-row">
                                    <td>½</td>
                                    <td>95</td>
                                    <td>66.5</td>
                                    <td>4</td>
                                    <td>M12</td>
                                    <td>2.0</td>
                                    <td>14</td>
                                </tr>
                                <tr class="t-row">
                                    <td>¾</td>
                                    <td>105</td>
                                    <td>76.2</td>
                                    <td>4</td>
                                    <td>M12</td>
                                    <td>2.0</td>
                                    <td>16</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1</td>
                                    <td>115</td>
                                    <td>85.7</td>
                                    <td>4</td>
                                    <td>M16</td>
                                    <td>2.0</td>
                                    <td>17</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1 ¼</td>
                                    <td>125</td>
                                    <td>95.2</td>
                                    <td>4</td>
                                    <td>M16</td>
                                    <td>2.0</td>
                                    <td>18</td>
                                </tr>
                                <tr class="t-row">
                                    <td>1 ½</td>
                                    <td>140</td>
                                    <td>107.9</td>
                                    <td>4</td>
                                    <td>M16</td>
                                    <td>2.0</td>
                                    <td>19</td>
                                </tr>
                                <tr class="t-row">
                                    <td>2</td>
                                    <td>165</td>
                                    <td>127.0</td>
                                    <td>8</td>
                                    <td>M16</td>
                                    <td>2.0</td>
                                    <td>20</td>
                                </tr>
                                <tr class="t-row">
                                    <td>2 ½</td>
                                    <td>190</td>
                                    <td>149.2</td>
                                    <td>8</td>
                                    <td>M16</td>
                                    <td>2.0</td>
                                    <td>22</td>
                                </tr>
                                <tr class="t-row">
                                    <td>3</td>
                                    <td>210</td>
                                    <td>168.3</td>
                                    <td>8</td>
                                    <td>M20</td>
                                    <td>2.0</td>
                                    <td>24</td>
                                </tr>
                                <tr class="t-row">
                                    <td>4</td>
                                    <td>255</td>
                                    <td>200.0</td>
                                    <td>8</td>
                                    <td>M20</td>
                                    <td>2.0</td>
                                    <td>27</td>
                                </tr>
                                <tr class="t-row">
                                    <td>5</td>
                                    <td>280</td>
                                    <td>235.0</td>
                                    <td>8</td>
                                    <td>M22</td>
                                    <td>2.0</td>
                                    <td>29</td>
                                </tr>
                                <tr class="t-row">
                                    <td>6</td>
                                    <td>320</td>
                                    <td>269.9</td>
                                    <td>12</td>
                                    <td>M22</td>
                                    <td>2.0</td>
                                    <td>32</td>
                                </tr>
                                <tr class="t-row">
                                    <td>8</td>
                                    <td>380</td>
                                    <td>330.2</td>
                                    <td>12</td>
                                    <td>M24</td>
                                    <td>2.0</td>
                                    <td>38</td>
                                </tr>
                                <tr class="t-row">
                                    <td>10</td>
                                    <td>445</td>
                                    <td>387.4</td>
                                    <td>16</td>
                                    <td>M27</td>
                                    <td>2.0</td>
                                    <td>44</td>
                                </tr>
                                <tr class="t-row">
                                    <td>12</td>
                                    <td>505</td>
                                    <td>451.0</td>
                                    <td>16</td>
                                    <td>M30</td>
                                    <td>2.0</td>
                                    <td>48</td>
                                </tr>
                                <tr class="t-row">
                                    <td>14</td>
                                    <td>545</td>
                                    <td>476.0</td>
                                    <td>20</td>
                                    <td>M30</td>
                                    <td>2.0</td>
                                    <td>51</td>
                                </tr>
                                <tr class="t-row">
                                    <td>16</td>
                                    <td>610</td>
                                    <td>540.0</td>
                                    <td>20</td>
                                    <td>M33</td>
                                    <td>2.0</td>
                                    <td>55</td>
                                </tr>
                                <tr class="t-row">
                                    <td>18</td>
                                    <td>685</td>
                                    <td>600.0</td>
                                    <td>24</td>
                                    <td>M33</td>
                                    <td>2.0</td>
                                    <td>58</td>
                                </tr>
                                <tr class="t-row">
                                    <td>20</td>
                                    <td>750</td>
                                    <td>660.0</td>
                                    <td>24</td>
                                    <td>M36</td>
                                    <td>2.0</td>
                                    <td>62</td>
                                </tr>
                                <tr class="t-row">
                                    <td>24</td>
                                    <td>870</td>
                                    <td>775.0</td>
                                    <td>24</td>
                                    <td>M39</td>
                                    <td>2.0</td>
                                    <td>70</td>
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
                <h2 class="fw-bold" style="color: #174268;">Flange Dimensions</h2>
            </div>

            <!-- Child Title -->
            <div class="section-title center mb-3">
                <h4 class="text-center mb-0" style="color: #db7227;">Expanded Table (for one item – Class 600 Flanges)
                </h4>
            </div>


            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped align-middle">
                                <thead class="table-dark text-center">
                                    <tr class="t-row">
                                        <th>NPS (in)</th>
                                        <th>OD of Flange (mm)</th>
                                        <th>Thickness (mm)</th>
                                        <th>Bolt Circle Dia. (mm)</th>
                                        <th>Bolt Hole Dia. (mm)</th>
                                        <th>No. of Bolts</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <tr class="t-row">
                                        <td>½</td>
                                        <td>95</td>
                                        <td>22.3</td>
                                        <td>66.7</td>
                                        <td>16</td>
                                        <td>4</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>¾</td>
                                        <td>117</td>
                                        <td>23.9</td>
                                        <td>82.6</td>
                                        <td>16</td>
                                        <td>4</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>1</td>
                                        <td>124</td>
                                        <td>26.9</td>
                                        <td>89.0</td>
                                        <td>19</td>
                                        <td>4</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>1 ¼</td>
                                        <td>133</td>
                                        <td>28.7</td>
                                        <td>98.6</td>
                                        <td>19</td>
                                        <td>4</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>1 ½</td>
                                        <td>156</td>
                                        <td>30.2</td>
                                        <td>114.3</td>
                                        <td>22</td>
                                        <td>4</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>2</td>
                                        <td>165</td>
                                        <td>32.0</td>
                                        <td>127.0</td>
                                        <td>22</td>
                                        <td>8</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>2 ½</td>
                                        <td>190</td>
                                        <td>35.1</td>
                                        <td>149.0</td>
                                        <td>25</td>
                                        <td>8</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>3</td>
                                        <td>210</td>
                                        <td>38.1</td>
                                        <td>168.0</td>
                                        <td>25</td>
                                        <td>8</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>4</td>
                                        <td>254</td>
                                        <td>44.5</td>
                                        <td>200.0</td>
                                        <td>29</td>
                                        <td>8</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>5</td>
                                        <td>279</td>
                                        <td>47.8</td>
                                        <td>235.0</td>
                                        <td>29</td>
                                        <td>8</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>6</td>
                                        <td>318</td>
                                        <td>55.6</td>
                                        <td>269.0</td>
                                        <td>32</td>
                                        <td>12</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>8</td>
                                        <td>381</td>
                                        <td>63.5</td>
                                        <td>330.0</td>
                                        <td>35</td>
                                        <td>12</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>10</td>
                                        <td>445</td>
                                        <td>69.9</td>
                                        <td>387.0</td>
                                        <td>38</td>
                                        <td>16</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>12</td>
                                        <td>521</td>
                                        <td>76.2</td>
                                        <td>451.0</td>
                                        <td>41</td>
                                        <td>16</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>14</td>
                                        <td>584</td>
                                        <td>82.6</td>
                                        <td>514.0</td>
                                        <td>45</td>
                                        <td>20</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>16</td>
                                        <td>648</td>
                                        <td>88.9</td>
                                        <td>572.0</td>
                                        <td>51</td>
                                        <td>20</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>18</td>
                                        <td>711</td>
                                        <td>95.3</td>
                                        <td>635.0</td>
                                        <td>54</td>
                                        <td>24</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>20</td>
                                        <td>775</td>
                                        <td>101.6</td>
                                        <td>699.0</td>
                                        <td>54</td>
                                        <td>24</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>24</td>
                                        <td>914</td>
                                        <td>114.3</td>
                                        <td>813.0</td>
                                        <td>64</td>
                                        <td>24</td>
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
                <h2 class="fw-bold" style="color: #174268;">Flange Dimensions</h2>
            </div>

            <!-- Child Title -->
            <div class="section-title center mb-3">
                <h4 class="text-center mb-0" style="color: #db7227;">Expanded Table (for one item – Class 600 Flanges)
                </h4>
            </div>


            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped align-middle">
                                <thead class="table-dark text-center">
                                    <tr class="t-row">
                                        <th>NPS (in)</th>
                                        <th>OD of Flange (D)</th>
                                        <th>Bolt Circle Dia (K)</th>
                                        <th>No. of Bolts</th>
                                        <th>Bolt Dia (M)</th>
                                        <th>RF Raised Face (h)</th>
                                        <th>Flange Thickness (T)</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <tr class="t-row">
                                        <td>½</td>
                                        <td>95</td>
                                        <td>66.7</td>
                                        <td>4</td>
                                        <td>M12</td>
                                        <td>2.0</td>
                                        <td>14.3</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>¾</td>
                                        <td>117</td>
                                        <td>82.6</td>
                                        <td>4</td>
                                        <td>M16</td>
                                        <td>2.0</td>
                                        <td>15.9</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>1</td>
                                        <td>124</td>
                                        <td>89.0</td>
                                        <td>4</td>
                                        <td>M16</td>
                                        <td>2.0</td>
                                        <td>17.5</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>1¼</td>
                                        <td>133</td>
                                        <td>98.6</td>
                                        <td>4</td>
                                        <td>M16</td>
                                        <td>2.0</td>
                                        <td>19.1</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>1½</td>
                                        <td>156</td>
                                        <td>114.3</td>
                                        <td>4</td>
                                        <td>M20</td>
                                        <td>2.0</td>
                                        <td>20.7</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>2</td>
                                        <td>165</td>
                                        <td>127.0</td>
                                        <td>8</td>
                                        <td>M16</td>
                                        <td>2.0</td>
                                        <td>22.3</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>2½</td>
                                        <td>190</td>
                                        <td>149.2</td>
                                        <td>8</td>
                                        <td>M20</td>
                                        <td>2.0</td>
                                        <td>28.6</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>3</td>
                                        <td>210</td>
                                        <td>168.3</td>
                                        <td>8</td>
                                        <td>M20</td>
                                        <td>2.0</td>
                                        <td>30.2</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>4</td>
                                        <td>273</td>
                                        <td>222.3</td>
                                        <td>8</td>
                                        <td>M24</td>
                                        <td>2.0</td>
                                        <td>36.5</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>5</td>
                                        <td>330</td>
                                        <td>279.4</td>
                                        <td>8</td>
                                        <td>M27</td>
                                        <td>2.0</td>
                                        <td>42.9</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>6</td>
                                        <td>356</td>
                                        <td>317.5</td>
                                        <td>12</td>
                                        <td>M27</td>
                                        <td>2.0</td>
                                        <td>45.0</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>8</td>
                                        <td>419</td>
                                        <td>381.0</td>
                                        <td>12</td>
                                        <td>M30</td>
                                        <td>2.0</td>
                                        <td>52.4</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>10</td>
                                        <td>508</td>
                                        <td>470.0</td>
                                        <td>16</td>
                                        <td>M30</td>
                                        <td>2.0</td>
                                        <td>60.3</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>12</td>
                                        <td>559</td>
                                        <td>533.0</td>
                                        <td>16</td>
                                        <td>M33</td>
                                        <td>2.0</td>
                                        <td>66.7</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>14</td>
                                        <td>610</td>
                                        <td>584.0</td>
                                        <td>20</td>
                                        <td>M33</td>
                                        <td>2.0</td>
                                        <td>69.9</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>16</td>
                                        <td>686</td>
                                        <td>648.0</td>
                                        <td>20</td>
                                        <td>M36</td>
                                        <td>2.0</td>
                                        <td>76.2</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>18</td>
                                        <td>743</td>
                                        <td>711.0</td>
                                        <td>20</td>
                                        <td>M36</td>
                                        <td>2.0</td>
                                        <td>82.6</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>20</td>
                                        <td>787</td>
                                        <td>775.0</td>
                                        <td>24</td>
                                        <td>M39</td>
                                        <td>2.0</td>
                                        <td>88.9</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>24</td>
                                        <td>914</td>
                                        <td>914.0</td>
                                        <td>24</td>
                                        <td>M45</td>
                                        <td>2.0</td>
                                        <td>101.6</td>
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
                <h2 class="fw-bold" style="color: #174268;">Flange Dimensions</h2>
            </div>

            <!-- Child Title -->
            <div class="section-title center mb-3">
                <h4 class="text-center mb-0" style="color: #db7227;">Expanded Table (for one item – Class 900 Flanges)
                </h4>
            </div>


            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped align-middle">
                                <thead class="table-dark text-center">
                                    <tr class="t-row">
                                        <th>NPS (in)</th>
                                        <th>OD (mm)</th>
                                        <th>Raised Face Dia (mm)</th>
                                        <th>Bolt Circle Dia (mm)</th>
                                        <th>Bolt Holes (Qty × Dia mm)</th>
                                        <th>Flange Thickness (mm)</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <tr class="t-row">
                                        <td>½</td>
                                        <td>95</td>
                                        <td>35</td>
                                        <td>66.5</td>
                                        <td>4 × 16</td>
                                        <td>30</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>¾</td>
                                        <td>105</td>
                                        <td>43</td>
                                        <td>76</td>
                                        <td>4 × 16</td>
                                        <td>32</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>1</td>
                                        <td>120</td>
                                        <td>51</td>
                                        <td>86</td>
                                        <td>4 × 19</td>
                                        <td>38</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>1¼</td>
                                        <td>140</td>
                                        <td>64</td>
                                        <td>95</td>
                                        <td>4 × 19</td>
                                        <td>38</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>1½</td>
                                        <td>150</td>
                                        <td>73</td>
                                        <td>111</td>
                                        <td>4 × 22</td>
                                        <td>44</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>2</td>
                                        <td>165</td>
                                        <td>92</td>
                                        <td>127</td>
                                        <td>8 × 19</td>
                                        <td>48</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>2½</td>
                                        <td>190</td>
                                        <td>105</td>
                                        <td>149</td>
                                        <td>8 × 22</td>
                                        <td>51</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>3</td>
                                        <td>210</td>
                                        <td>127</td>
                                        <td>168</td>
                                        <td>8 × 22</td>
                                        <td>54</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>4</td>
                                        <td>265</td>
                                        <td>157</td>
                                        <td>216</td>
                                        <td>8 × 25</td>
                                        <td>62</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>5</td>
                                        <td>305</td>
                                        <td>186</td>
                                        <td>254</td>
                                        <td>8 × 29</td>
                                        <td>70</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>6</td>
                                        <td>355</td>
                                        <td>216</td>
                                        <td>279</td>
                                        <td>12 × 29</td>
                                        <td>76</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>8</td>
                                        <td>445</td>
                                        <td>270</td>
                                        <td>343</td>
                                        <td>12 × 32</td>
                                        <td>89</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>10</td>
                                        <td>530</td>
                                        <td>324</td>
                                        <td>419</td>
                                        <td>16 × 32</td>
                                        <td>102</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>12</td>
                                        <td>610</td>
                                        <td>381</td>
                                        <td>489</td>
                                        <td>16 × 35</td>
                                        <td>114</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>14</td>
                                        <td>665</td>
                                        <td>413</td>
                                        <td>559</td>
                                        <td>20 × 35</td>
                                        <td>127</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>16</td>
                                        <td>755</td>
                                        <td>470</td>
                                        <td>616</td>
                                        <td>20 × 38</td>
                                        <td>140</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>18</td>
                                        <td>840</td>
                                        <td>533</td>
                                        <td>686</td>
                                        <td>20 × 41</td>
                                        <td>152</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>20</td>
                                        <td>910</td>
                                        <td>584</td>
                                        <td>749</td>
                                        <td>24 × 41</td>
                                        <td>165</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>24</td>
                                        <td>1090</td>
                                        <td>705</td>
                                        <td>940</td>
                                        <td>24 × 45</td>
                                        <td>191</td>
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
                <h2 class="fw-bold" style="color: #174268;">Flange Dimensions</h2>
            </div>

            <!-- Child Title -->
            <div class="section-title center mb-3">
                <h4 class="text-center mb-0" style="color: #db7227;">Expanded Table (for one item – Class 900 Flanges)
                </h4>
            </div>


            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped align-middle">
                                <thead class="table-dark text-center">
                                    <tr class="t-row">
                                        <th>NPS</th>
                                        <th>OD of Flange (D)</th>
                                        <th>Bolt Circle (K)</th>
                                        <th>No. of Bolts</th>
                                        <th>Bolt Hole Dia (L)</th>
                                        <th>Raised Face Dia (R)</th>
                                        <th>Hub Dia (C)</th>
                                        <th>Flange Thickness (T)</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <tr class="t-row">
                                        <td>½</td>
                                        <td>95</td>
                                        <td>66</td>
                                        <td>4</td>
                                        <td>16</td>
                                        <td>35</td>
                                        <td>21</td>
                                        <td>38</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>¾</td>
                                        <td>120</td>
                                        <td>82</td>
                                        <td>4</td>
                                        <td>19</td>
                                        <td>43</td>
                                        <td>27</td>
                                        <td>44</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>1</td>
                                        <td>135</td>
                                        <td>92</td>
                                        <td>4</td>
                                        <td>22</td>
                                        <td>51</td>
                                        <td>33</td>
                                        <td>51</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>1 ½</td>
                                        <td>170</td>
                                        <td>120</td>
                                        <td>4</td>
                                        <td>25</td>
                                        <td>73</td>
                                        <td>48</td>
                                        <td>67</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>2</td>
                                        <td>205</td>
                                        <td>146</td>
                                        <td>8</td>
                                        <td>25</td>
                                        <td>92</td>
                                        <td>60</td>
                                        <td>76</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>3</td>
                                        <td>265</td>
                                        <td>190</td>
                                        <td>8</td>
                                        <td>29</td>
                                        <td>127</td>
                                        <td>89</td>
                                        <td>95</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>4</td>
                                        <td>310</td>
                                        <td>235</td>
                                        <td>8</td>
                                        <td>32</td>
                                        <td>157</td>
                                        <td>114</td>
                                        <td>114</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>6</td>
                                        <td>420</td>
                                        <td>330</td>
                                        <td>12</td>
                                        <td>38</td>
                                        <td>216</td>
                                        <td>168</td>
                                        <td>152</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>8</td>
                                        <td>545</td>
                                        <td>419</td>
                                        <td>12</td>
                                        <td>45</td>
                                        <td>270</td>
                                        <td>219</td>
                                        <td>191</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>10</td>
                                        <td>655</td>
                                        <td>508</td>
                                        <td>16</td>
                                        <td>51</td>
                                        <td>324</td>
                                        <td>273</td>
                                        <td>229</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>12</td>
                                        <td>735</td>
                                        <td>559</td>
                                        <td>20</td>
                                        <td>54</td>
                                        <td>381</td>
                                        <td>324</td>
                                        <td>254</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>14</td>
                                        <td>840</td>
                                        <td>635</td>
                                        <td>20</td>
                                        <td>57</td>
                                        <td>413</td>
                                        <td>356</td>
                                        <td>279</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>16</td>
                                        <td>915</td>
                                        <td>705</td>
                                        <td>24</td>
                                        <td>64</td>
                                        <td>470</td>
                                        <td>406</td>
                                        <td>305</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>18</td>
                                        <td>1015</td>
                                        <td>775</td>
                                        <td>24</td>
                                        <td>70</td>
                                        <td>533</td>
                                        <td>457</td>
                                        <td>330</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>20</td>
                                        <td>1110</td>
                                        <td>870</td>
                                        <td>28</td>
                                        <td>73</td>
                                        <td>584</td>
                                        <td>508</td>
                                        <td>356</td>
                                    </tr>
                                    <tr class="t-row">
                                        <td>24</td>
                                        <td>1325</td>
                                        <td>1065</td>
                                        <td>32</td>
                                        <td>83</td>
                                        <td>705</td>
                                        <td>610</td>
                                        <td>406</td>
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
                <h4 class="text-center mb-0" style="color: #db7227;"><strong>Flanges</strong> are available in:</h4>
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
                                    <td>Stainless Steel Flanges</td>
                                    <td>304, 304L, 316, 316L, 310, 321, 347</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon Steel Flanges</td>
                                    <td>ASTM A105, ASTM A350 LF2, ASTM A516 (MS Flange)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Alloy Steel Flanges</td>
                                    <td>ASTM A182 F1, F5, F9, F11, F22</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Duplex & Super Duplex Flanges</td>
                                    <td>UNS S31803, S32205, S32750, S32760</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nickel Alloy Flanges</td>
                                    <td>Inconel, Monel, Hastelloy</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Titanium Flanges</td>
                                    <td>Grades 2, 5</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Copper Alloy Flanges</td>
                                    <td>Brass, Bronze, Cu-Ni 70/30, Cu-Ni 90/10</td>
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
    {{-- <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Application</h2>
            </div>
            <p class="mb-4">
                Welded pipes and tubes are indispensable components in numerous industries due to their exceptional
                strength, precise dimensional accuracy, and cost-effectiveness. These versatile products are widely utilized
                for structural purposes and fluid transport systems, particularly in demanding environments.
            </p>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            1. Oil and Gas Industry
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Welded pipes and tubes find extensive use in the energy sector, including:</strong>
                            <ul>
                                <li>
                                    Onshore and offshore pipeline networks
                                </li>
                                <li>
                                    Crude oil and natural gas transmission systems
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            2. Power Generation
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Power plants rely on welded pipes and tubes to ensure operational efficiency in areas
                                such as:</strong>
                            <ul>
                                <li>
                                    Boiler tubes, superheaters, and economizers
                                </li>
                                <li>
                                    Condensers and feedwater systems
                                </li>
                                <li>
                                    Heat recovery steam generators (HRSG)
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            3. Chemical and Petrochemical Industry
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>For handling corrosive substances and high-pressure environments, welded pipes and tubes
                                are essential in:</strong>
                            <ul>
                                <li>
                                    Transporting corrosive fluids and gases
                                </li>
                                <li>
                                    Process piping within chemical reactors
                                </li>
                                <li>
                                    Distillation and separation systems
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            4. Construction and Infrastructure
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Welded pipes and tubes are critical in the construction sector for:</strong>
                            <ul>
                                <li>
                                    Building structures and architectural frameworks
                                </li>
                                <li>
                                    Bridges, tunnels, and industrial sheds
                                </li>
                                <li>
                                    Water distribution and sewage systems
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            5. Automotive and Transport
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>The automotive and heavy transport industries heavily utilize welded pipes and tubes
                                for:</strong>
                            <ul>
                                <li>
                                    Exhaust systems and fuel lines
                                </li>
                                <li>
                                    Hydraulic systems and structural components
                                </li>
                                <li>
                                    Roll cages and chassis frameworks
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            6. Food, Beverage, and Dairy Processing
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Hygienic-grade welded pipes and tubes ensure safe and sanitary applications in:</strong>
                            <ul>
                                <li>
                                    Sanitary fluid transfer systems
                                </li>
                                <li>
                                    Process lines for dairy and beverage production
                                </li>
                                <li>
                                    Clean-in-place (CIP) and sterilization systems
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            7. Marine and Shipbuilding
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Welded pipes and tubes also serve an integral role in:</strong>
                            <ul>
                                <li>
                                    Seawater piping systems
                                </li>
                                <li>
                                    Ballast and bilge systems
                                </li>
                                <li>
                                    Structural frameworks for ships and offshore platforms
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            8. HVAC and Plumbing
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Welded pipes and tubes provide reliable solutions for the HVAC and plumbing sectors,
                                including:</strong>
                            <ul>
                                <li>
                                    Hot and cold water distribution
                                </li>
                                <li>
                                    Heating, ventilation, and air conditioning systems
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="section-title center">
                <h2>Applications</h2>
                <p class="text-center pb-3">
                    <strong class="text-black">Flanges</strong> are used in diverse industries:
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon">
                            <i class="bi bi-fuel-pump-fill"></i>
                        </div>
                        <h5>Oil & Gas</h5>
                        <ul>
                            <li>Weld neck flanges, blind flanges, spectacle blind flanges for pipelines</li>
                            <li>Solutions for offshore platforms</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon">
                            <i class="bi bi-lightning-charge-fill"></i>
                        </div>
                        <h5>Power Generation</h5>
                        <ul>
                            <li>Alloy flanges for boilers and turbines</li>
                            <li>High-pressure piping systems</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon">
                            <i class="bi bi-tsunami"></i>
                        </div>
                        <h5>Marine & Shipbuilding</h5>
                        <ul>
                            <li>Copper-nickel flanges, duplex flanges</li>
                            <li>Stainless steel pipe flanges</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6">
                    <div class="application-card">
                        <div class="application-icon">
                            <i class="bi bi-flask"></i>
                        </div>
                        <h5>Chemical & Industrial Plants</h5>
                        <ul>
                            <li>Orifice flanges for flow measurement</li>
                            <li>Corrosion-resistant stainless flanges for tanks and process lines</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6">
                    <div class="application-card">
                        <div class="application-icon">
                            <i class="bi bi-airplane-engines-fill"></i>
                        </div>
                        <h5>Automotive & Aerospace</h5>
                        <ul>
                            <li>Exhaust pipe flanges</li>
                            <li>Lightweight titanium flanges for defense and aerospace projects</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-12 col-lg-12">
                    <div class="application-card">
                        <div class="application-icon">
                            <i class="bi bi-building"></i>
                        </div>
                        <h5>Construction & Infrastructure</h5>
                        <ul>
                            <li>Flanges for HVAC systems</li>
                            <li>Water treatment and fire protection networks</li>
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
                <h2>Uses of Flanges</h2>
            </div>
            <!-- Child Title -->
            <div class="section-title center mb-3">
                <h4 class="text-center mb-0" style="color: #db7227;">Flanges are used extensively
                    across multiple
                    industries, including:</h4>
            </div>
            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-plug-fill"></i></div>
                        <h4>Easy Connections</h4>
                        <h5>Connect pipelines and equipment easily (flange joint, flange connection)</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-droplet-fill"></i></div>
                        <h4>Leak Prevention</h4>
                        <h5>Provides sealing against leaks using flange gaskets and sealants</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-search"></i></div>
                        <h4>Inspection & Cleaning</h4>
                        <h5>Allows easy inspection, cleaning, or modification of piping systems</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-graph-up"></i></div>
                        <h4>Flow Measurement</h4>
                        <h5>Supports flow measurement with orifice flanges and spectacle blind flanges</h5>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-6">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-link-45deg"></i></div>
                        <h4>Flexible Usage</h4>
                        <h5>Suitable for both temporary and permanent piping connections</h5>
                    </div>
                </div>
            </div>

        </div>
    </section>
    {{-- Advantages of Welded Pipes & Tubes --}}
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Advantages of Flanges</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h4>Precision Engineering</h4>
                        <h5>Tight tolerances for perfect fit</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-layers"></i></div>
                        <h4>Material Versatility</h4>
                        <h5>Stainless, carbon, nickel, titanium, and copper alloys (stainless flange, MS flange)</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-patch-check-fill"></i></div>
                        <h4>Compliance</h4>
                        <h5>Meets ASME, ASTM, ANSI, DIN, EN, BS standards</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-sliders"></i></div>
                        <h4>Custom Options</h4>
                        <h5>Non-standard sizes, high-pressure ratings, and coatings available</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-lock"></i></div>
                        <h4>Durable & Reliable</h4>
                        <h5>Withstands extreme pressure and corrosive media</h5>
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
                        <div class="why-banner-icon"><i class="bi bi-diagram-3-fill"></i></div>
                        <h5>Complete Range: Class 150 to 2500, PN6 to PN400</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-patch-check-fill"></i></div>
                        <h5>ISO 9001:2015 Certified with Mill Test Certificates (MTC)</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-tools"></i></div>
                        <h5>Custom Flanges: Long Weld Neck, Lap Joint, Orifice, Spectacle Blind</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Global Reach: Serving Oil & Gas, Marine, Chemical, and Power Industries</h5>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-truck"></i></div>
                        <h5>On Time Delivery with Robust Inventory</h5>
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
                                <h4>What is a flange?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    A flange is a mechanical component used to connect pipes, valves, pumps, and other
                                    equipment in a piping system.
                                    It ensures a secure joint and allows for easy assembly, inspection, and maintenance of
                                    pipelines.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What is PCD in flange?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    PCD (Pitch Circle Diameter) in a flange is the diameter of the circle formed by the
                                    centers of the bolt holes.
                                    Correct PCD measurement is essential for proper alignment of flange joints.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>How to measure flange size?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    To measure a flange size, note the Outer Diameter (OD), Bolt Circle Diameter (PCD),
                                    number of bolt holes, and flange thickness.
                                    Accurate measurement ensures the pipe flange fits perfectly in your system.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What is a flange coupling?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    A flange coupling is a type of mechanical connection used to join two shafts or pipes
                                    with flanges, bolts, and gaskets.
                                    It provides a robust, leak-proof connection in industrial and piping applications.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What materials are flanges made of?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Flanges are available in Stainless Steel (304, 316, 310), Carbon Steel (A105, A350 LF2),
                                    Alloy Steel (F11, F22), Duplex & Super Duplex, Nickel Alloys (Inconel, Monel), Titanium,
                                    and Copper Alloys (Cu-Ni, Brass, Bronze).
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
                    Looking for high-quality stainless steel flanges, carbon steel flanges, or alloy flanges?<br>Contact <strong><a
                            href="{{ route('index') }}">Moksh Tubes & Fittings LLP</a></strong>
                </p>
                <!-- Call button -->
                <a href="tel:+919769584950" class="contact-cta-btn">Get in Touch</a>
            </div>
        </div>
    </section>

    <!--End breadcrumb area-->


@endsection
