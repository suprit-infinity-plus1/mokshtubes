@extends('layouts.master')
@section('title', 'Round Bars – SS, MS, Alloy, Copper & Brass') <!-- 52 characters -->
@section('meta_description',
    'Mokshtubes supplies high-quality stainless steel, MS, alloy, copper, brass, nickel & aluminium round bars in various sizes, grades & weight chart.') <!-- 153 characters -->
@section('meta_keywords', 'Round Bars, Stainless Steel Round Bars, MS Round Bars, Alloy Round Bars, Copper Round Bars, Brass Round Bars, Nickel Round Bars, Aluminium Round Bars')
@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Premium SS, MS & Alloy Round Bars</h1> <!-- 52 characters -->
                </div>
            </div>
        </div>
    </section>


        <!--End breadcrumb area-->


    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-4">
                <h2 class="fw-bold" style="color: #174268;">Round Bars</h2>
            </div>

            <div class="row align-items-center">
                <!-- Left Image -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/peoduct/Bars & Rods/round-bars.webp') }}" alt="Round Bars"
                        class="img-fluid rounded shadow-sm">
                </div>

                <!-- Right Content -->
                <div class="col-md-6">
                    <p class="fs-6 mb-3 text-justify">
                        <strong class="text-black">Round Bars</strong> are solid cylindrical metal bars widely used across
                        construction,
                        automotive, aerospace, marine, and engineering sectors. Available in different materials, sizes, and
                        finishes, steel round bars are one of the most versatile raw <a
                            href="{{ route('materials') }}">materials</a> for machining, fabrication,
                        and structural applications.
                    </p>
                    <p class="fs-6 mb-3 text-justify">
                        <a href="{{ route('index') }}">Moksh Tubes & Fittings LLP</a>, we provide premium quality stainless
                        steel round bars (SS round bars),
                        carbon steel round bars (MS round bars), alloy steel round bars, duplex & super duplex round bars,
                        <a href="{{ route('materials.nickel-Based-Superalloys') }}">nickel alloy</a> round bars, <a
                            href="{{ route('materials.titanium') }}">titanium</a> round bars, aluminium round bars, brass
                        round bars, and copper
                        round bars. All our plain round bars and bright steel round bars are manufactured as per ASTM, ASME,
                        DIN, EN, and JIS standards, ensuring tight tolerances, excellent surface finish, and durability for
                        demanding industries.
                    </p>

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
                                        Titanium, Aluminum, Brass, Copper</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Grades</td>
                                    <td>ASTM, ASME, DIN, EN, and JIS certified grades – all major alloys available</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Size Range</td>
                                    <td>Dia: 3mm round bar to 500 mm (custom diameters up to 600 mm on request)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Lengths</td>
                                    <td>3 meters to 6 meters (cut-to-length round bars on request)</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Types</td>
                                    <td>Hot Rolled, Cold Drawn, Forged, Bright Mild Steel Round Bar</td>
                                </tr>
                                <tr class="t-row">
                                    <td>Finishes</td>
                                    <td>Bright, Polished, Mill Finish, Peeled & Ground, Shot Blasted, Pickled & Passivated
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Standards</td>
                                    <td>ASTM A276, A479, A484, A582, EN 10060, DIN 671</td>
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
                            <th>Diameter (mm)</th>
                            <th>Weight (kg/m)</th>
                            <th>Weight (kg/12 m bar)</th>
                            <th>Weight (lb/ft)</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="t-row">
                            <td>6</td>
                            <td>0.222</td>
                            <td>2.66</td>
                            <td>0.149</td>
                        </tr>
                        <tr class="t-row">
                            <td>7</td>
                            <td>0.302</td>
                            <td>3.63</td>
                            <td>0.203</td>
                        </tr>
                        <tr class="t-row">
                            <td>8</td>
                            <td>0.395</td>
                            <td>4.74</td>
                            <td>0.265</td>
                        </tr>
                        <tr class="t-row">
                            <td>9</td>
                            <td>0.499</td>
                            <td>5.99</td>
                            <td>0.336</td>
                        </tr>
                        <tr class="t-row">
                            <td>10</td>
                            <td>0.617</td>
                            <td>7.4</td>
                            <td>0.414</td>
                        </tr>
                        <tr class="t-row">
                            <td>11</td>
                            <td>0.746</td>
                            <td>8.95</td>
                            <td>0.501</td>
                        </tr>
                        <tr class="t-row">
                            <td>12</td>
                            <td>0.888</td>
                            <td>10.65</td>
                            <td>0.597</td>
                        </tr>
                        <tr class="t-row">
                            <td>13</td>
                            <td>1.042</td>
                            <td>12.5</td>
                            <td>0.7</td>
                        </tr>
                        <tr class="t-row">
                            <td>14</td>
                            <td>1.208</td>
                            <td>14.5</td>
                            <td>0.812</td>
                        </tr>
                        <tr class="t-row">
                            <td>15</td>
                            <td>1.387</td>
                            <td>16.65</td>
                            <td>0.932</td>
                        </tr>
                        <tr class="t-row">
                            <td>16</td>
                            <td>1.578</td>
                            <td>18.94</td>
                            <td>1.061</td>
                        </tr>
                        <tr class="t-row">
                            <td>17</td>
                            <td>1.782</td>
                            <td>21.38</td>
                            <td>1.197</td>
                        </tr>
                        <tr class="t-row">
                            <td>18</td>
                            <td>1.998</td>
                            <td>23.97</td>
                            <td>1.342</td>
                        </tr>
                        <tr class="t-row">
                            <td>19</td>
                            <td>2.226</td>
                            <td>26.71</td>
                            <td>1.496</td>
                        </tr>
                        <tr class="t-row">
                            <td>20</td>
                            <td>2.466</td>
                            <td>29.59</td>
                            <td>1.657</td>
                        </tr>
                        <tr class="t-row">
                            <td>21</td>
                            <td>2.719</td>
                            <td>32.63</td>
                            <td>1.827</td>
                        </tr>
                        <tr class="t-row">
                            <td>22</td>
                            <td>2.984</td>
                            <td>35.81</td>
                            <td>2.005</td>
                        </tr>
                        <tr class="t-row">
                            <td>23</td>
                            <td>3.261</td>
                            <td>39.14</td>
                            <td>2.192</td>
                        </tr>
                        <tr class="t-row">
                            <td>24</td>
                            <td>3.551</td>
                            <td>42.62</td>
                            <td>2.386</td>
                        </tr>
                        <tr class="t-row">
                            <td>25</td>
                            <td>3.853</td>
                            <td>46.24</td>
                            <td>2.589</td>
                        </tr>
                        <tr class="t-row">
                            <td>26</td>
                            <td>4.168</td>
                            <td>50.01</td>
                            <td>2.801</td>
                        </tr>
                        <tr class="t-row">
                            <td>27</td>
                            <td>4.495</td>
                            <td>53.93</td>
                            <td>3.02</td>
                        </tr>
                        <tr class="t-row">
                            <td>28</td>
                            <td>4.834</td>
                            <td>58</td>
                            <td>3.248</td>
                        </tr>
                        <tr class="t-row">
                            <td>29</td>
                            <td>5.185</td>
                            <td>62.22</td>
                            <td>3.484</td>
                        </tr>
                        <tr class="t-row">
                            <td>30</td>
                            <td>5.549</td>
                            <td>66.59</td>
                            <td>3.729</td>
                        </tr>
                        <tr class="t-row">
                            <td>31</td>
                            <td>5.925</td>
                            <td>71.1</td>
                            <td>3.981</td>
                        </tr>
                        <tr class="t-row">
                            <td>32</td>
                            <td>6.313</td>
                            <td>75.76</td>
                            <td>4.242</td>
                        </tr>
                        <tr class="t-row">
                            <td>33</td>
                            <td>6.714</td>
                            <td>80.57</td>
                            <td>4.512</td>
                        </tr>
                        <tr class="t-row">
                            <td>34</td>
                            <td>7.127</td>
                            <td>85.53</td>
                            <td>4.789</td>
                        </tr>
                        <tr class="t-row">
                            <td>35</td>
                            <td>7.553</td>
                            <td>90.63</td>
                            <td>5.075</td>
                        </tr>
                        <tr class="t-row">
                            <td>36</td>
                            <td>7.99</td>
                            <td>95.88</td>
                            <td>5.369</td>
                        </tr>
                        <tr class="t-row">
                            <td>37</td>
                            <td>8.44</td>
                            <td>101.28</td>
                            <td>5.672</td>
                        </tr>
                        <tr class="t-row">
                            <td>38</td>
                            <td>8.903</td>
                            <td>106.83</td>
                            <td>5.982</td>
                        </tr>
                        <tr class="t-row">
                            <td>39</td>
                            <td>9.378</td>
                            <td>112.53</td>
                            <td>6.301</td>
                        </tr>
                        <tr class="t-row">
                            <td>40</td>
                            <td>9.865</td>
                            <td>118.38</td>
                            <td>6.629</td>
                        </tr>
                        <tr class="t-row">
                            <td>41</td>
                            <td>10.364</td>
                            <td>124.37</td>
                            <td>6.964</td>
                        </tr>
                        <tr class="t-row">
                            <td>42</td>
                            <td>10.876</td>
                            <td>130.51</td>
                            <td>7.308</td>
                        </tr>
                        <tr class="t-row">
                            <td>43</td>
                            <td>11.4</td>
                            <td>136.8</td>
                            <td>7.66</td>
                        </tr>
                        <tr class="t-row">
                            <td>44</td>
                            <td>11.936</td>
                            <td>143.23</td>
                            <td>8.021</td>
                        </tr>
                        <tr class="t-row">
                            <td>45</td>
                            <td>12.485</td>
                            <td>149.82</td>
                            <td>8.389</td>
                        </tr>
                        <tr class="t-row">
                            <td>46</td>
                            <td>13.046</td>
                            <td>156.55</td>
                            <td>8.766</td>
                        </tr>
                        <tr class="t-row">
                            <td>47</td>
                            <td>13.619</td>
                            <td>163.43</td>
                            <td>9.152</td>
                        </tr>
                        <tr class="t-row">
                            <td>48</td>
                            <td>14.205</td>
                            <td>170.46</td>
                            <td>9.545</td>
                        </tr>
                        <tr class="t-row">
                            <td>49</td>
                            <td>14.803</td>
                            <td>177.64</td>
                            <td>9.947</td>
                        </tr>
                        <tr class="t-row">
                            <td>50</td>
                            <td>15.413</td>
                            <td>184.96</td>
                            <td>10.357</td>
                        </tr>
                        <tr class="t-row">
                            <td>51</td>
                            <td>16.036</td>
                            <td>192.43</td>
                            <td>10.776</td>
                        </tr>
                        <tr class="t-row">
                            <td>52</td>
                            <td>16.671</td>
                            <td>200.05</td>
                            <td>11.202</td>
                        </tr>
                        <tr class="t-row">
                            <td>53</td>
                            <td>17.319</td>
                            <td>207.82</td>
                            <td>11.638</td>
                        </tr>
                        <tr class="t-row">
                            <td>54</td>
                            <td>17.978</td>
                            <td>215.74</td>
                            <td>12.081</td>
                        </tr>
                        <tr class="t-row">
                            <td>55</td>
                            <td>18.65</td>
                            <td>223.8</td>
                            <td>12.532</td>
                        </tr>
                        <tr class="t-row">
                            <td>56</td>
                            <td>19.335</td>
                            <td>232.02</td>
                            <td>12.992</td>
                        </tr>
                        <tr class="t-row">
                            <td>57</td>
                            <td>20.031</td>
                            <td>240.38</td>
                            <td>13.46</td>
                        </tr>
                        <tr class="t-row">
                            <td>58</td>
                            <td>20.74</td>
                            <td>248.88</td>
                            <td>13.937</td>
                        </tr>
                        <tr class="t-row">
                            <td>59</td>
                            <td>21.462</td>
                            <td>257.54</td>
                            <td>14.422</td>
                        </tr>
                        <tr class="t-row">
                            <td>60</td>
                            <td>22.195</td>
                            <td>266.34</td>
                            <td>14.915</td>
                        </tr>
                        <tr class="t-row">
                            <td>61</td>
                            <td>22.941</td>
                            <td>275.3</td>
                            <td>15.416</td>
                        </tr>
                        <tr class="t-row">
                            <td>62</td>
                            <td>23.7</td>
                            <td>284.4</td>
                            <td>15.925</td>
                        </tr>
                        <tr class="t-row">
                            <td>63</td>
                            <td>24.47</td>
                            <td>293.64</td>
                            <td>16.443</td>
                        </tr>
                        <tr class="t-row">
                            <td>64</td>
                            <td>25.253</td>
                            <td>303.04</td>
                            <td>16.969</td>
                        </tr>
                        <tr class="t-row">
                            <td>65</td>
                            <td>26.049</td>
                            <td>312.58</td>
                            <td>17.504</td>
                        </tr>
                        <tr class="t-row">
                            <td>66</td>
                            <td>26.856</td>
                            <td>322.28</td>
                            <td>18.047</td>
                        </tr>
                        <tr class="t-row">
                            <td>67</td>
                            <td>27.676</td>
                            <td>332.12</td>
                            <td>18.598</td>
                        </tr>
                        <tr class="t-row">
                            <td>68</td>
                            <td>28.509</td>
                            <td>342.1</td>
                            <td>19.157</td>
                        </tr>
                        <tr class="t-row">
                            <td>69</td>
                            <td>29.353</td>
                            <td>352.24</td>
                            <td>19.725</td>
                        </tr>
                        <tr class="t-row">
                            <td>70</td>
                            <td>30.21</td>
                            <td>362.52</td>
                            <td>20.3</td>
                        </tr>
                        <tr class="t-row">
                            <td>71</td>
                            <td>31.08</td>
                            <td>372.96</td>
                            <td>20.885</td>
                        </tr>
                        <tr class="t-row">
                            <td>72</td>
                            <td>31.961</td>
                            <td>383.54</td>
                            <td>21.477</td>
                        </tr>
                        <tr class="t-row">
                            <td>73</td>
                            <td>32.855</td>
                            <td>394.26</td>
                            <td>22.078</td>
                        </tr>
                        <tr class="t-row">
                            <td>74</td>
                            <td>33.762</td>
                            <td>405.14</td>
                            <td>22.687</td>
                        </tr>
                        <tr class="t-row">
                            <td>75</td>
                            <td>34.68</td>
                            <td>416.16</td>
                            <td>23.304</td>
                        </tr>
                        <tr class="t-row">
                            <td>76</td>
                            <td>35.611</td>
                            <td>427.33</td>
                            <td>23.93</td>
                        </tr>
                        <tr class="t-row">
                            <td>77</td>
                            <td>36.555</td>
                            <td>438.65</td>
                            <td>24.563</td>
                        </tr>
                        <tr class="t-row">
                            <td>78</td>
                            <td>37.51</td>
                            <td>450.12</td>
                            <td>25.206</td>
                        </tr>
                        <tr class="t-row">
                            <td>79</td>
                            <td>38.478</td>
                            <td>461.74</td>
                            <td>25.856</td>
                        </tr>
                        <tr class="t-row">
                            <td>80</td>
                            <td>39.458</td>
                            <td>473.5</td>
                            <td>26.515</td>
                        </tr>
                        <tr class="t-row">
                            <td>81</td>
                            <td>40.451</td>
                            <td>485.41</td>
                            <td>27.182</td>
                        </tr>
                        <tr class="t-row">
                            <td>82</td>
                            <td>41.456</td>
                            <td>497.47</td>
                            <td>27.857</td>
                        </tr>
                        <tr class="t-row">
                            <td>83</td>
                            <td>42.473</td>
                            <td>509.68</td>
                            <td>28.541</td>
                        </tr>
                        <tr class="t-row">
                            <td>84</td>
                            <td>43.503</td>
                            <td>522.03</td>
                            <td>29.233</td>
                        </tr>
                        <tr class="t-row">
                            <td>85</td>
                            <td>44.545</td>
                            <td>534.54</td>
                            <td>29.933</td>
                        </tr>
                        <tr class="t-row">
                            <td>86</td>
                            <td>45.599</td>
                            <td>547.19</td>
                            <td>30.641</td>
                        </tr>
                        <tr class="t-row">
                            <td>87</td>
                            <td>46.666</td>
                            <td>559.99</td>
                            <td>31.358</td>
                        </tr>
                        <tr class="t-row">
                            <td>88</td>
                            <td>47.745</td>
                            <td>572.94</td>
                            <td>32.083</td>
                        </tr>
                        <tr class="t-row">
                            <td>89</td>
                            <td>48.836</td>
                            <td>586.03</td>
                            <td>32.816</td>
                        </tr>
                        <tr class="t-row">
                            <td>90</td>
                            <td>49.94</td>
                            <td>599.27</td>
                            <td>33.558</td>
                        </tr>
                        <tr class="t-row">
                            <td>91</td>
                            <td>51.055</td>
                            <td>612.67</td>
                            <td>34.308</td>
                        </tr>
                        <tr class="t-row">
                            <td>92</td>
                            <td>52.184</td>
                            <td>626.2</td>
                            <td>35.066</td>
                        </tr>
                        <tr class="t-row">
                            <td>93</td>
                            <td>53.324</td>
                            <td>639.89</td>
                            <td>35.832</td>
                        </tr>
                        <tr class="t-row">
                            <td>94</td>
                            <td>54.477</td>
                            <td>653.73</td>
                            <td>36.607</td>
                        </tr>
                        <tr class="t-row">
                            <td>95</td>
                            <td>55.643</td>
                            <td>667.71</td>
                            <td>37.39</td>
                        </tr>
                        <tr class="t-row">
                            <td>96</td>
                            <td>56.82</td>
                            <td>681.84</td>
                            <td>38.181</td>
                        </tr>
                        <tr class="t-row">
                            <td>97</td>
                            <td>58.01</td>
                            <td>696.12</td>
                            <td>38.981</td>
                        </tr>
                        <tr class="t-row">
                            <td>98</td>
                            <td>59.212</td>
                            <td>710.55</td>
                            <td>39.789</td>
                        </tr>
                        <tr class="t-row">
                            <td>99</td>
                            <td>60.427</td>
                            <td>725.12</td>
                            <td>40.605</td>
                        </tr>
                        <tr class="t-row">
                            <td>100</td>
                            <td>61.654</td>
                            <td>739.85</td>
                            <td>41.429</td>
                        </tr>
                        <tr class="t-row">
                            <td>101</td>
                            <td>62.893</td>
                            <td>754.72</td>
                            <td>42.262</td>
                        </tr>
                        <tr class="t-row">
                            <td>102</td>
                            <td>64.145</td>
                            <td>769.73</td>
                            <td>43.103</td>
                        </tr>
                        <tr class="t-row">
                            <td>103</td>
                            <td>65.408</td>
                            <td>784.9</td>
                            <td>43.952</td>
                        </tr>
                        <tr class="t-row">
                            <td>104</td>
                            <td>66.685</td>
                            <td>800.22</td>
                            <td>44.81</td>
                        </tr>
                        <tr class="t-row">
                            <td>105</td>
                            <td>67.973</td>
                            <td>815.68</td>
                            <td>45.676</td>
                        </tr>
                        <tr class="t-row">
                            <td>106</td>
                            <td>69.274</td>
                            <td>831.29</td>
                            <td>46.55</td>
                        </tr>
                        <tr class="t-row">
                            <td>107</td>
                            <td>70.587</td>
                            <td>847.05</td>
                            <td>47.432</td>
                        </tr>
                        <tr class="t-row">
                            <td>108</td>
                            <td>71.913</td>
                            <td>862.96</td>
                            <td>48.323</td>
                        </tr>
                        <tr class="t-row">
                            <td>109</td>
                            <td>73.251</td>
                            <td>879.01</td>
                            <td>49.222</td>
                        </tr>
                        <tr class="t-row">
                            <td>110</td>
                            <td>74.601</td>
                            <td>895.21</td>
                            <td>50.13</td>
                        </tr>
                        <tr class="t-row">
                            <td>111</td>
                            <td>75.964</td>
                            <td>911.56</td>
                            <td>51.045</td>
                        </tr>
                        <tr class="t-row">
                            <td>112</td>
                            <td>77.338</td>
                            <td>928.06</td>
                            <td>51.969</td>
                        </tr>
                        <tr class="t-row">
                            <td>113</td>
                            <td>78.726</td>
                            <td>944.71</td>
                            <td>52.901</td>
                        </tr>
                        <tr class="t-row">
                            <td>114</td>
                            <td>80.125</td>
                            <td>961.5</td>
                            <td>53.842</td>
                        </tr>
                        <tr class="t-row">
                            <td>115</td>
                            <td>81.537</td>
                            <td>978.45</td>
                            <td>54.79</td>
                        </tr>
                        <tr class="t-row">
                            <td>116</td>
                            <td>82.961</td>
                            <td>995.54</td>
                            <td>55.747</td>
                        </tr>
                        <tr class="t-row">
                            <td>117</td>
                            <td>84.398</td>
                            <td>1012.77</td>
                            <td>56.713</td>
                        </tr>
                        <tr class="t-row">
                            <td>118</td>
                            <td>85.847</td>
                            <td>1030.16</td>
                            <td>57.686</td>
                        </tr>
                        <tr class="t-row">
                            <td>119</td>
                            <td>87.308</td>
                            <td>1047.69</td>
                            <td>58.668</td>
                        </tr>
                        <tr class="t-row">
                            <td>120</td>
                            <td>88.781</td>
                            <td>1065.38</td>
                            <td>59.658</td>
                        </tr>
                        <tr class="t-row">
                            <td>121</td>
                            <td>90.267</td>
                            <td>1083.21</td>
                            <td>60.657</td>
                        </tr>
                        <tr class="t-row">
                            <td>122</td>
                            <td>91.765</td>
                            <td>1101.19</td>
                            <td>61.663</td>
                        </tr>
                        <tr class="t-row">
                            <td>123</td>
                            <td>93.276</td>
                            <td>1119.31</td>
                            <td>62.678</td>
                        </tr>
                        <tr class="t-row">
                            <td>124</td>
                            <td>94.799</td>
                            <td>1137.59</td>
                            <td>63.702</td>
                        </tr>
                        <tr class="t-row">
                            <td>125</td>
                            <td>96.334</td>
                            <td>1156.01</td>
                            <td>64.733</td>
                        </tr>
                        <tr class="t-row">
                            <td>126</td>
                            <td>97.882</td>
                            <td>1174.58</td>
                            <td>65.773</td>
                        </tr>
                        <tr class="t-row">
                            <td>127</td>
                            <td>99.441</td>
                            <td>1193.3</td>
                            <td>66.821</td>
                        </tr>
                        <tr class="t-row">
                            <td>128</td>
                            <td>101.014</td>
                            <td>1212.16</td>
                            <td>67.878</td>
                        </tr>
                        <tr class="t-row">
                            <td>129</td>
                            <td>102.598</td>
                            <td>1231.18</td>
                            <td>68.943</td>
                        </tr>
                        <tr class="t-row">
                            <td>130</td>
                            <td>104.195</td>
                            <td>1250.34</td>
                            <td>70.016</td>
                        </tr>
                        <tr class="t-row">
                            <td>131</td>
                            <td>105.804</td>
                            <td>1269.65</td>
                            <td>71.097</td>
                        </tr>
                        <tr class="t-row">
                            <td>132</td>
                            <td>107.426</td>
                            <td>1289.11</td>
                            <td>72.187</td>
                        </tr>
                        <tr class="t-row">
                            <td>133</td>
                            <td>109.059</td>
                            <td>1308.71</td>
                            <td>73.284</td>
                        </tr>
                        <tr class="t-row">
                            <td>134</td>
                            <td>110.705</td>
                            <td>1328.47</td>
                            <td>74.391</td>
                        </tr>
                        <tr class="t-row">
                            <td>135</td>
                            <td>112.364</td>
                            <td>1348.37</td>
                            <td>75.505</td>
                        </tr>
                        <tr class="t-row">
                            <td>136</td>
                            <td>114.035</td>
                            <td>1368.42</td>
                            <td>76.628</td>
                        </tr>
                        <tr class="t-row">
                            <td>137</td>
                            <td>115.718</td>
                            <td>1388.62</td>
                            <td>77.759</td>
                        </tr>
                        <tr class="t-row">
                            <td>138</td>
                            <td>117.413</td>
                            <td>1408.96</td>
                            <td>78.898</td>
                        </tr>
                        <tr class="t-row">
                            <td>139</td>
                            <td>119.121</td>
                            <td>1429.45</td>
                            <td>80.046</td>
                        </tr>
                        <tr class="t-row">
                            <td>140</td>
                            <td>120.841</td>
                            <td>1450.1</td>
                            <td>81.202</td>
                        </tr>
                        <tr class="t-row">
                            <td>141</td>
                            <td>122.574</td>
                            <td>1470.89</td>
                            <td>82.366</td>
                        </tr>
                        <tr class="t-row">
                            <td>142</td>
                            <td>124.319</td>
                            <td>1491.82</td>
                            <td>83.538</td>
                        </tr>
                        <tr class="t-row">
                            <td>143</td>
                            <td>126.076</td>
                            <td>1512.91</td>
                            <td>84.719</td>
                        </tr>
                        <tr class="t-row">
                            <td>144</td>
                            <td>127.845</td>
                            <td>1534.14</td>
                            <td>85.908</td>
                        </tr>
                        <tr class="t-row">
                            <td>145</td>
                            <td>129.627</td>
                            <td>1555.52</td>
                            <td>87.105</td>
                        </tr>
                        <tr class="t-row">
                            <td>146</td>
                            <td>131.421</td>
                            <td>1577.05</td>
                            <td>88.311</td>
                        </tr>
                        <tr class="t-row">
                            <td>147</td>
                            <td>133.228</td>
                            <td>1598.73</td>
                            <td>89.525</td>
                        </tr>
                        <tr class="t-row">
                            <td>148</td>
                            <td>135.046</td>
                            <td>1620.56</td>
                            <td>90.747</td>
                        </tr>
                        <tr class="t-row">
                            <td>149</td>
                            <td>136.878</td>
                            <td>1642.53</td>
                            <td>91.977</td>
                        </tr>
                        <tr class="t-row">
                            <td>150</td>
                            <td>138.721</td>
                            <td>1664.65</td>
                            <td>93.216</td>
                        </tr>
                        <tr class="t-row">
                            <td>151</td>
                            <td>140.577</td>
                            <td>1686.92</td>
                            <td>94.463</td>
                        </tr>
                        <tr class="t-row">
                            <td>152</td>
                            <td>142.445</td>
                            <td>1709.34</td>
                            <td>95.718</td>
                        </tr>
                        <tr class="t-row">
                            <td>153</td>
                            <td>144.325</td>
                            <td>1731.9</td>
                            <td>96.982</td>
                        </tr>
                        <tr class="t-row">
                            <td>154</td>
                            <td>146.218</td>
                            <td>1754.62</td>
                            <td>98.254</td>
                        </tr>
                        <tr class="t-row">
                            <td>155</td>
                            <td>148.123</td>
                            <td>1777.48</td>
                            <td>99.534</td>
                        </tr>
                        <tr class="t-row">
                            <td>156</td>
                            <td>150.041</td>
                            <td>1800.49</td>
                            <td>100.822</td>
                        </tr>
                        <tr class="t-row">
                            <td>157</td>
                            <td>151.97</td>
                            <td>1823.64</td>
                            <td>102.119</td>
                        </tr>
                        <tr class="t-row">
                            <td>158</td>
                            <td>153.912</td>
                            <td>1846.95</td>
                            <td>103.424</td>
                        </tr>
                        <tr class="t-row">
                            <td>159</td>
                            <td>155.867</td>
                            <td>1870.4</td>
                            <td>104.738</td>
                        </tr>
                        <tr class="t-row">
                            <td>160</td>
                            <td>157.834</td>
                            <td>1894</td>
                            <td>106.059</td>
                        </tr>
                        <tr class="t-row">
                            <td>161</td>
                            <td>159.813</td>
                            <td>1917.75</td>
                            <td>107.389</td>
                        </tr>
                        <tr class="t-row">
                            <td>162</td>
                            <td>161.804</td>
                            <td>1941.65</td>
                            <td>108.727</td>
                        </tr>
                        <tr class="t-row">
                            <td>163</td>
                            <td>163.808</td>
                            <td>1965.69</td>
                            <td>110.074</td>
                        </tr>
                        <tr class="t-row">
                            <td>164</td>
                            <td>165.824</td>
                            <td>1989.89</td>
                            <td>111.428</td>
                        </tr>
                        <tr class="t-row">
                            <td>165</td>
                            <td>167.852</td>
                            <td>2014.23</td>
                            <td>112.791</td>
                        </tr>
                        <tr class="t-row">
                            <td>166</td>
                            <td>169.893</td>
                            <td>2038.72</td>
                            <td>114.163</td>
                        </tr>
                        <tr class="t-row">
                            <td>167</td>
                            <td>171.946</td>
                            <td>2063.35</td>
                            <td>115.542</td>
                        </tr>
                        <tr class="t-row">
                            <td>168</td>
                            <td>174.012</td>
                            <td>2088.14</td>
                            <td>116.93</td>
                        </tr>
                        <tr class="t-row">
                            <td>169</td>
                            <td>176.089</td>
                            <td>2113.07</td>
                            <td>118.326</td>
                        </tr>
                        <tr class="t-row">
                            <td>170</td>
                            <td>178.179</td>
                            <td>2138.15</td>
                            <td>119.731</td>
                        </tr>
                        <tr class="t-row">
                            <td>171</td>
                            <td>180.282</td>
                            <td>2163.38</td>
                            <td>121.144</td>
                        </tr>
                        <tr class="t-row">
                            <td>172</td>
                            <td>182.396</td>
                            <td>2188.76</td>
                            <td>122.565</td>
                        </tr>
                        <tr class="t-row">
                            <td>173</td>
                            <td>184.524</td>
                            <td>2214.28</td>
                            <td>123.994</td>
                        </tr>
                        <tr class="t-row">
                            <td>174</td>
                            <td>186.663</td>
                            <td>2239.95</td>
                            <td>125.432</td>
                        </tr>
                        <tr class="t-row">
                            <td>175</td>
                            <td>188.815</td>
                            <td>2265.78</td>
                            <td>126.877</td>
                        </tr>
                        <tr class="t-row">
                            <td>176</td>
                            <td>190.979</td>
                            <td>2291.74</td>
                            <td>128.332</td>
                        </tr>
                        <tr class="t-row">
                            <td>177</td>
                            <td>193.155</td>
                            <td>2317.86</td>
                            <td>129.794</td>
                        </tr>
                        <tr class="t-row">
                            <td>178</td>
                            <td>195.344</td>
                            <td>2344.13</td>
                            <td>131.265</td>
                        </tr>
                        <tr class="t-row">
                            <td>179</td>
                            <td>197.545</td>
                            <td>2370.54</td>
                            <td>132.744</td>
                        </tr>
                        <tr class="t-row">
                            <td>180</td>
                            <td>199.758</td>
                            <td>2397.1</td>
                            <td>134.231</td>
                        </tr>
                        <tr class="t-row">
                            <td>181</td>
                            <td>201.984</td>
                            <td>2423.81</td>
                            <td>135.727</td>
                        </tr>
                        <tr class="t-row">
                            <td>182</td>
                            <td>204.222</td>
                            <td>2450.66</td>
                            <td>137.231</td>
                        </tr>
                        <tr class="t-row">
                            <td>183</td>
                            <td>206.472</td>
                            <td>2477.67</td>
                            <td>138.743</td>
                        </tr>
                        <tr class="t-row">
                            <td>184</td>
                            <td>208.735</td>
                            <td>2504.82</td>
                            <td>140.263</td>
                        </tr>
                        <tr class="t-row">
                            <td>185</td>
                            <td>211.01</td>
                            <td>2532.12</td>
                            <td>141.792</td>
                        </tr>
                        <tr class="t-row">
                            <td>186</td>
                            <td>213.297</td>
                            <td>2559.57</td>
                            <td>143.329</td>
                        </tr>
                        <tr class="t-row">
                            <td>187</td>
                            <td>215.597</td>
                            <td>2587.16</td>
                            <td>144.874</td>
                        </tr>
                        <tr class="t-row">
                            <td>188</td>
                            <td>217.909</td>
                            <td>2614.91</td>
                            <td>146.428</td>
                        </tr>
                        <tr class="t-row">
                            <td>189</td>
                            <td>220.233</td>
                            <td>2642.8</td>
                            <td>147.99</td>
                        </tr>
                        <tr class="t-row">
                            <td>190</td>
                            <td>222.57</td>
                            <td>2670.84</td>
                            <td>149.56</td>
                        </tr>
                        <tr class="t-row">
                            <td>191</td>
                            <td>224.919</td>
                            <td>2699.03</td>
                            <td>151.138</td>
                        </tr>
                        <tr class="t-row">
                            <td>192</td>
                            <td>227.28</td>
                            <td>2727.36</td>
                            <td>152.725</td>
                        </tr>
                        <tr class="t-row">
                            <td>193</td>
                            <td>229.654</td>
                            <td>2755.85</td>
                            <td>154.32</td>
                        </tr>
                        <tr class="t-row">
                            <td>194</td>
                            <td>232.04</td>
                            <td>2784.48</td>
                            <td>155.924</td>
                        </tr>
                        <tr class="t-row">
                            <td>195</td>
                            <td>234.438</td>
                            <td>2813.26</td>
                            <td>157.535</td>
                        </tr>
                        <tr class="t-row">
                            <td>196</td>
                            <td>236.849</td>
                            <td>2842.19</td>
                            <td>159.155</td>
                        </tr>
                        <tr class="t-row">
                            <td>197</td>
                            <td>239.272</td>
                            <td>2871.26</td>
                            <td>160.783</td>
                        </tr>
                        <tr class="t-row">
                            <td>198</td>
                            <td>241.707</td>
                            <td>2900.49</td>
                            <td>162.42</td>
                        </tr>
                        <tr class="t-row">
                            <td>199</td>
                            <td>244.155</td>
                            <td>2929.86</td>
                            <td>164.064</td>
                        </tr>
                        <tr class="t-row">
                            <td>200</td>
                            <td>246.615</td>
                            <td>2959.38</td>
                            <td>165.717</td>
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
                <h4 class="text-center mb-0" style="color: #db7227;"><strong>Round Bars</strong> in a wide
                    range of grades:</h4>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr class="t-row">
                                    <th>Material</th>
                                    <th>Grades / Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t-row">
                                    <td>Stainless Steel Round Bars</td>
                                    <td>
                                        304 stainless steel round bar, 310 stainless steel round bar, 455 stainless steel
                                        round bar <br>
                                        <small>(Corrosion-resistant & hygienic applications)</small>
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Carbon Steel Round Bars (MS Round Bars)</td>
                                    <td>
                                        ASTM A36, EN8 SS round bar, N8 SS round bar, EN9, IS2062 <br>
                                        <small>(Widely used in structural, engineering & general fabrication)</small>
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Alloy Steel Round Bars</td>
                                    <td>
                                        EN19, EN24, EN31, 4140, 4130 <br>
                                        <small>(Ideal for heavy-duty & high strength components)</small>
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Duplex & Super Duplex Round Bars</td>
                                    <td>
                                        2205, S32750, S32760 <br>
                                        <small>(Best for oil, gas, and marine environments)</small>
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Nickel Alloy Round Bars</td>
                                    <td>
                                        Inconel 600 round bar, Inconel 718 round bar, Alloy 600 round bar, Alloy 601 round
                                        bar, Monel 400 round bar, Waspaloy round bar, 718 Inconel round bar suppliers <br>
                                        <small>(Designed for extreme heat & corrosive conditions)</small>
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Titanium Round Bars</td>
                                    <td>
                                        Grades 2, 5 <br>
                                        <small>(For aerospace, desalination & chemical projects)</small>
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Copper & Brass Round Bars</td>
                                    <td>
                                        Copper round bar, brass round bar, phosphor bronze round bar, bronze round bar <br>
                                        <small>(Used in electrical, decorative & marine applications)</small>
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Aluminium Round Bars</td>
                                    <td>
                                        Aluminium round bar, aluminium alloy round bar (6061, 6082, 7075) <br>
                                        <small>(Lightweight, corrosion resistant)</small>
                                    </td>
                                </tr>
                                <tr class="t-row">
                                    <td>Special Round Bars</td>
                                    <td>
                                        PTFE round bar, magnet round bar, zirconium round bar specifications
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
                    <strong class="text-black">Round Bars</strong> are essential for structural, mechanical, and
                    industrial uses:
                </p>
            </div>

            <div class="row g-4">

                <!-- Construction & Infrastructure -->
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon">
                            <i class="bi bi-building"></i>
                        </div>
                        <h5>Construction & Infrastructure</h5>
                        <ul>
                            <li>MS round bars for structural supports, tie rods, reinforcement frameworks</li>
                        </ul>
                    </div>
                </div>

                <!-- Marine & Offshore -->
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon">
                            <i class="bi bi-tsunami"></i>
                        </div>
                        <h5>Marine & Offshore</h5>
                        <ul>
                            <li>Copper round bars & duplex stainless round bars for propellers, shafts & ship fittings</li>
                        </ul>
                    </div>
                </div>

                <!-- Oil, Gas & Petrochemical -->
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon">
                            <i class="bi bi-fuel-pump-fill"></i>
                        </div>
                        <h5>Oil, Gas & Petrochemical</h5>
                        <ul>
                            <li>Alloy steel round bars for pump shafts, valves & manifolds</li>
                        </ul>
                    </div>
                </div>

                <!-- Automotive & Aerospace -->
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon">
                            <i class="bi bi-airplane-engines"></i>
                        </div>
                        <h5>Automotive & Aerospace</h5>
                        <ul>
                            <li>Titanium round bars & aluminium round bars for landing gear, axles, suspension parts</li>
                        </ul>
                    </div>
                </div>

                <!-- Manufacturing & Engineering -->
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon">
                            <i class="bi bi-gear-wide-connected"></i>
                        </div>
                        <h5>Manufacturing & Engineering</h5>
                        <ul>
                            <li>Machining stock, fasteners, rollers, tools & bearings</li>
                        </ul>
                    </div>
                </div>

                <!-- Decorative & Architectural -->
                <div class="col-md-6 col-lg-4">
                    <div class="application-card">
                        <div class="application-icon">
                            <i class="bi bi-brush-fill"></i>
                        </div>
                        <h5>Decorative & Architectural</h5>
                        <ul>
                            <li>Polished stainless steel round bars & brass round bars for railings, furniture & interiors
                            </li>
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
                <h2>Uses of Round Bars</h2>
            </div>
            <!-- Child Title -->
            <div class="section-title center mb-3">
                <h3 class="text-center mb-0" style="color: #db7227;">Round Bars are used extensively
                    across multiple
                    industries, including:</h3>
            </div>
            <div class="row g-4 mt-4">

                <!-- Hot Rolled Round Bars -->
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-diagram-3-fill"></i></div>
                        <h4>Hot Rolled Round Bars</h4>
                        <h5>Economical, slightly rough finish, for structural & heavy-duty use</h5>
                    </div>
                </div>

                <!-- Cold Drawn Round Bars -->
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-box-arrow-down"></i></div>
                        <h4>Cold Drawn Round Bars</h4>
                        <h5>Smooth surface, tighter tolerances, better machinability</h5>
                    </div>
                </div>

                <!-- Forged Round Bars -->
                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-tools"></i></div>
                        <h4>Forged Round Bars</h4>
                        <h5>For shafts, heavy engineering, and high-stress parts</h5>
                    </div>
                </div>

                <!-- Bright Mild Steel Round Bar -->
                <div class="col-sm-6 col-lg-6">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-rulers"></i></div>
                        <h4>Bright Mild Steel Round Bar</h4>
                        <h5>Polished for decorative and precision use</h5>
                    </div>
                </div>

                <!-- Alloy Steel Round Bars -->
                <div class="col-sm-6 col-lg-6">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h4>Alloy Steel Round Bars</h4>
                        <h5>High-strength, suitable for heavy-duty machinery and engineering components</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Advantages --}}
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center">
                <h2>Advantages of Round Bars</h2>
            </div>

            <div class="row g-4 mt-4">

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-gear-fill"></i></div>
                        <h4>High Precision</h4>
                        <h5>Tight tolerances ensuring accurate dimensions</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-grid-1x2-fill"></i></div>
                        <h4>Wide Variety</h4>
                        <h5>SS round bars, MS round bars, Alloy Steel round bars, Nickel Alloy round bars</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-palette-fill"></i></div>
                        <h4>Multiple Finishes</h4>
                        <h5>Bright, Polished, Hot Rolled, Cold Drawn</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-scissors"></i></div>
                        <h4>Custom Sizes</h4>
                        <h5>Custom cutting available (ex: 12mm to 200mm round bars)</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-cash-stack"></i></div>
                        <h4>Competitive Pricing</h4>
                        <h5>Available at stainless steel round bar prices competitive in the market</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="bi bi-shield-fill-check"></i></div>
                        <h4>Durable & Corrosion-Resistant</h4>
                        <h5>Meets ASTM, ASME, DIN, EN standards</h5>
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

                <!-- Extensive Inventory -->
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-box-seam"></i></div>
                        <h5>Extensive Inventory – Ready stock of round bars for sale in multiple grades</h5>
                    </div>
                </div>

                <!-- ISO Certified -->
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-patch-check-fill"></i></div>
                        <h5>ISO Certified with full MTC & third-party inspection</h5>
                    </div>
                </div>

                <!-- Global Supply -->
                <div class="col-sm-6 col-lg-4">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-globe2"></i></div>
                        <h5>Global Supply – Serving oil & gas, aerospace, marine & infrastructure sectors</h5>
                    </div>
                </div>

                <!-- Customization -->
                <div class="col-sm-6 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-sliders"></i></div>
                        <h5>Customization – Special diameters, cut lengths & finishes on demand</h5>
                    </div>
                </div>

                <!-- Trusted Supplier Network -->
                <div class="col-sm-12 col-lg-6">
                    <div class="why-banner-block">
                        <div class="why-banner-icon"><i class="bi bi-people-fill"></i></div>
                        <h5>Mokshtubes is recognized among trusted Round Bar Suppliers in Mumbai, India and Mild Steel Round
                            Bars Sweden, serving clients across Norway, Nigeria, UAE, USA, Singapore, Maldives, Saudi
                            Arabia, Germany, United Kingdom, Canada, Jordan, Peru, Australia, Thailand, Russian Federation,
                            France, Belgium, Bulgaria, Taiwan, Italy, Netherlands.</h5>
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
                                <h4>How to calculate the weight of a round bar?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    The weight of a round bar can be calculated using the formula: <br>
                                    <strong>Weight (kg) = (π × D² / 4) × L × ρ</strong> <br>
                                    Where: <br>
                                    ● D = Diameter of the round bar in meters <br>
                                    ● L = Length of the round bar in meters <br>
                                    ● ρ = Density of the material in kg/m³ (e.g., 7850 kg/m³ for steel) <br>
                                    You can also refer to our round bar weight chart for quick reference.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What materials are available for round bars?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Round bars are available in stainless steel (SS), mild steel (MS), carbon steel, alloy
                                    steel, duplex & super duplex, <a
                                        href="{{ route('materials.nickel-Based-Superalloys') }}">nickel alloys</a>,
                                    titanium, aluminium, brass, and copper.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What grades of round bars can I get?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    We offer ASTM, ASME, DIN, EN, and JIS certified grades across all major alloys, ensuring
                                    compliance with international standards.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Where are your round bars supplied?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Mokshtubes supplies round bars in Mumbai, India and internationally to countries
                                    including Sweden, Norway, Nigeria, UAE, USA, Singapore, Maldives, Saudi Arabia, Germany,
                                    UK, Canada, Jordan, Peru, Australia, Thailand, Russia, France, Belgium, Bulgaria,
                                    Taiwan, Italy, and Netherlands.
                                </p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why choose Mokshtubes for round bars?</h4>
                            </div>
                            <div class="accord-content">
                                <p>
                                    Mokshtubes offers high precision, wide variety of <a
                                        href="{{ route('materials') }}">materials</a> and grades, multiple
                                    finishes, custom cutting, competitive prices, and durable bars complying with ASTM,
                                    ASME, DIN, and EN standards.
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
                    Looking for high quality round bars for your next project?<br>Contact <strong><a
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
