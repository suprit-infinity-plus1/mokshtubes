@extends('layouts.master')
@section('title', 'About Mokshtubes LLP | Expert in High-Performance Alloys')
@section('meta_description', 'Learn about Mokshtubes LLP, a trusted global supplier of stainless steel, nickel alloys, Hastelloy, Inconel and custom-engineered metal solutions for critical industries.')
@section('meta_keywords',
'Mokshtubes, Metal Alloys Supplier, High Performance Alloys, Industrial Metal Solutions,
Premium Quality Alloys, Alloy Tubes, Engineering Alloys')

{{-- Only custom OG fields --}}
@section('og_image', asset('assets/images/about/Untitled.png'))
@section('og_type', 'website')

@section('content')

<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image: url(/assets/images/about/Untitled.png);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto text-center">
                <h1>About Moksh Tubes <br> Trusted Alloy Experts</h1> <!-- 52 characters -->
            </div>
        </div>
    </div>
</section>

<!--End breadcrumb area-->


<section class="about-us sec-padd-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12">

                <figure class="about-img h-100 m-0">
                    <!-- <img src="images/resource/1.png" alt="about titan builders photo"> -->
                    <img src="{{ asset('assets/images/about/about-materials_11zon.webp') }}" alt="about titan builders photo" class="img-fluid w-100 h-100 object-fit-cover custom-img" loading="lazy">
                    <!-- <img src="https://placehold.co/300x300" class="mt-1" alt="about titan builders photo"> -->
                </figure>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="about-text">
                    <h2>
                        about <span class="thm-color">Moksh Tubes & Fittings LLP</span>
                    </h2>
                    <div class="text">
                        <!-- <p>Thank you for being a friend. Travelled down the road and back again. Your heart is
                                                                                                                                    true you're a pal and a confidant. It's time to put on makeup. It's time to dress up
                                                                                                                                    right.They're all together ooky the Addams Family doin' it our way. There's nothing
                                                                                                                                    we wont try. Never heard the word impossible. This time there's no stopping us.</p> -->
                        <p>
                            <strong class="text-black">
                                MOKSH TUBES & FITTINGS LLP
                            </strong>
                            is one of the leading suppliers,
                            stockists, and exporters of <strong class="text-black"><a href="{{ route('products.pipes-tubes') }}"> Pipes & Tubes</a>, Pipe Fittings,
                                Flanges,
                                Fasteners, Sheets
                                & Plates, Coils, Wires, Round Bars, Flat Bars, Angles, Channels, Welding rods,
                                Wire
                                Mesh, and other Custom and Hard to Find Steel Products. </strong> <br> <br>

                            With a strong focus on reliability and precision, we specialize in catering to a
                            diverse industrial sectors by offering a wide range of materials in <strong class="text-black">ferrous
                                and
                                non-ferrous grades, including Stainless Steel, Duplex & Super Duplex Steel,
                                Nickel
                                Alloys such as <a href="{{ route('materials.hastelloy') }}"> Hastelloy</a>,<a href="{{ route('materials.inconel') }}"> Inconel</a>,<a href="{{ route('materials.monel') }}"> Monel</a>, Titanium Alloys, Copper & Bronze
                                Alloys,
                                Carbon Steel Alloys, Rare Alloys such as Nimonic, ferralium, Zirconium, Tantalum
                                and
                                so on. </strong> <br> <br>

                            Our extensive inventory and top-notch sourcing capabilities enables us to assist
                            our
                            clients with all their project requirements across Industries like Oil & Gas,
                            Sugar
                            Industries, Dairies, Boilers & Pressure Vessels, Petrochemicals, Water
                            Management,
                            Pharmaceuticals, Marine, Food & Beverage Processing, Power Generation,
                            Construction,
                            Solar, and Chemical Industries.

                        </p>
                    </div>


                </div>


            </div>
            <div class="fact-counter">
                <ul class="d-flex flex-wrap justify-content-center gap-5">
                    <li class="single-fact-counter">
                        <div class="icon-holder"><span class="flaticon-social"></span></div>
                        <span class="timer" data-from="1" data-to="20" data-speed="5000" data-refresh-interval="50">20</span>
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        <h3>years of experience</h3>
                    </li>
                    <li class="single-fact-counter">
                        <div class="icon-holder"><span class="flaticon-landscape"></span></div>
                        <span class="timer" data-from="1" data-to="12" data-speed="5000" data-refresh-interval="50">12</span>
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        <h3>countries served globally</h3>
                    </li>
                    <li class="single-fact-counter">
                        <div class="icon-holder"><span class="flaticon-innovation"></span></div>
                        <span class="timer" data-from="1" data-to="300" data-speed="5000" data-refresh-interval="50">300</span>
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        <h3>Projects Completed</h3>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="call-out sec-padd center" style="background-image: url(images/background/2.jpg);">
    <div class="container">
        <div class="content">
            <h2>action is the foundational key to all success</h2>
            <!-- <p>Where the kisses are hers and hers and his. Three's company too. Goodbye gray sky hello blue.
                                                                                                                                    There's nothing can hold me <br>when I hold you. Feels so right it cant be wrong. Rockin' and
                                                                                                                                    rollin' all week long.</p> -->
            <p>Quality materials. Reliable supply. Trusted by professionals across industries, we’re here to
                support your success with products built to perform.</p>

            <a href="{{ route('contact-us') }}" class="thm-btn bg-clr1">contact us</a>
        </div>
    </div>
</section>


<section>
    <div class="container vision-mission">
        <!-- First Row: Text Left, Image Right -->
        <div class="row align-items-center mb-5">
            <div class="col-md-6">
                <h2>OUR HISTORY</h2>
                <p>
                    Established in the year <strong class="text-black">2005</strong> by <strong class="text-black">Mr.
                        Vikram B. Jain and Mr. Naresh
                        B. Jain, Moksh Tubes &
                        Fittings LLP,</strong>
                    which had started as a modest venture has evolved into a global leader in
                    <strong class="text-black">manufacturing
                        and
                        supply of
                        a wide range of Steel Products.</strong>
                </p>
                <h2 class="mt-4">OUR MISSION</h2>
                <p>
                    To provide immediate access to our clients by giving them access to a comprehensive range of
                    piping
                    products & components in various material options.
                </p>
            </div>
            <div class="col-md-6 text-center">
                <!-- Desktop Image -->
                <img src="{{ asset('assets/images/history/our-mission.webp') }}" alt="Large" class="img-fluid d-none d-lg-block" loading="lazy">
                <!-- Tablet Image 400x250-->
                <img src="{{ asset('assets/images/history/our-mission.webp') }}" alt="Tablet" class="img-fluid d-none d-md-block d-lg-none" loading="lazy">
                <!-- Mobile Image 300x200 -->
                <img src="{{ asset('assets/images/history/our-mission.webp') }}" alt="Mobile" class="img-fluid d-block d-md-none mx-auto" loading="lazy">
            </div>
        </div>

        <!-- Second Row: Image Left, Text Right -->
        <div class="row align-items-center mb-5 flex-md-row-reverse">
            <div class="col-md-6">
                <h2>OUR VISION</h2>
                <p>
                    To support a broad spectrum of industries by supplying high quality materials where quality,
                    corrosion & heat resistance and timely deliveries are critical to operations.
                </p>
                <h2 class="mt-4">OUR GOAL</h2>
                <p>
                    To expand our global footprint while maintaining the highest standards of quality in
                    delivering
                    reliable solutions for our customer’s most demanding projects and critical applications.
                </p>
            </div>
            <div class="col-md-6 text-center">
                <!-- Desktop Image 600x300 -->
                <img src="{{ asset('assets/images/history/our-goal.jpg') }}" alt="Large" class="img-fluid d-none d-lg-block">
                <!-- Tablet Image 400x250 -->
                <img src="{{ asset('assets/images/history/our-goal.jpg') }}" alt="Tablet" class="img-fluid d-none d-md-block d-lg-none">
                <!-- Mobile Image 300x200 -->
                <img src="{{ asset('assets/images/history/our-goal.jpg') }}" alt="Mobile" class="img-fluid d-block d-md-none mx-auto">
            </div>
        </div>
    </div>



</section>

<section class="why-chooseus sec-padd2">
    <div class="container">

        <div class="section-title center">
            <h2>why choose Us</h2>
        </div>

        <div class="row">
            <div class="item col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <div class="inner-box wow fadeIn animated" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="icon_box">
                        <span class="fas fa-warehouse
        "></span>
                    </div>
                    <h3>Extensive Inventory</h3>
                    <div class="text">
                        <p>Over 200 tons of steel products in ready stock for fast and reliable delivery across
                            sectors.</p>
                    </div>
                </div>
            </div>

            <div class="item col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <div class="inner-box wow fadeIn animated" data-wow-delay="100ms" data-wow-duration="1500ms">
                    <div class="icon_box">
                        <span class="fas fa-globe"></span>
                    </div>
                    <h3>Sourcing Capabilities</h3>
                    <div class="text">
                        <p>Backed by a global network to locate and deliver even the hardest-to-find steel
                            products.</p>
                    </div>
                </div>
            </div>

            <div class="item col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <div class="inner-box wow fadeIn animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="icon_box">
                        <span class="fas fa-layer-group"></span>
                    </div>
                    <h3>Wide Range of Materials</h3>
                    <div class="text">
                        <p>Offering stainless steel, duplex, nickel alloys, and more to meet diverse industry
                            needs.</p>
                    </div>
                </div>
            </div>

            <div class="item col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <div class="inner-box wow fadeIn animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="icon_box">
                        <span class="fas fa-certificate
        "></span>
                    </div>
                    <h3>Certified Quality</h3>
                    <div class="text">
                        <p>All materials comply with ASTM, ASME, ISO, DIN, and other global quality standards.
                        </p>
                    </div>
                </div>
            </div>

            <div class="item col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <div class="inner-box wow fadeIn animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="icon_box">
                        <span class="fas fa-tags
        "></span>
                    </div>
                    <h3>Competitive Pricing</h3>
                    <div class="text">
                        <p>We deliver cost-effective solutions without compromising on quality or performance.
                        </p>
                    </div>
                </div>
            </div>

            <div class="item col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <div class="inner-box wow fadeIn animated" data-wow-delay="500ms" data-wow-duration="1500ms">
                    <div class="icon_box">
                        <span class="fas fa-truck
        "></span>
                    </div>
                    <h3>Reliable Logistics</h3>
                    <div class="text">
                        <p>On-time delivery solutions tailored to meet tight project schedules and deadlines.
                        </p>
                    </div>
                </div>
            </div>

            <div class="item col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <div class="inner-box wow fadeIn animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="icon_box">
                        <span class="fas fa-headset

        "></span>
                    </div>
                    <h3>Dedicated Support</h3>
                    <div class="text">
                        <p>Get expert technical advice and seamless support from start to finish on every order.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="row">


                                                                                                            <div class="item col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                                                                                                <div class="inner-box wow fadeIn animated animated" data-wow-delay="0ms"
                                                                                                                    data-wow-duration="1500ms"
                                                                                                                    style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeIn;">

                                                                                                                    <div class="icon_box">
                                                                                                                        <span class="flaticon-people-1"></span>
                                                                                                                    </div>

                                                                                                                    <h4>EXPERIENCED</h4>
                                                                                                                    <div class="text">
                                                                                                                        <p>Doin' it our way. Nothin's gonna turn us back now. Straight ahead and on the track
                                                                                                                            now. </p>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="item col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                                                                                                <div class="inner-box wow fadeIn animated animated" data-wow-delay="0ms"
                                                                                                                    data-wow-duration="1500ms"
                                                                                                                    style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeIn;">

                                                                                                                    <div class="icon_box">
                                                                                                                        <span class="flaticon-sun"></span>
                                                                                                                    </div>

                                                                                                                    <h4>PROFESSIONAL SERVICE</h4>
                                                                                                                    <div class="text">
                                                                                                                        <p>Doin' it our way. Nothin's gonna turn us back now. Straight ahead and on the track
                                                                                                                            now.</p>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="item col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                                                                                                <div class="inner-box wow fadeIn animated animated" data-wow-delay="0ms"
                                                                                                                    data-wow-duration="1500ms"
                                                                                                                    style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeIn;">

                                                                                                                    <div class="icon_box">
                                                                                                                        <span class="flaticon-people-2"></span>
                                                                                                                    </div>

                                                                                                                    <h4>PUBLIC PROJECTS</h4>
                                                                                                                    <div class="text">
                                                                                                                        <p>Doin' it our way. Nothin's gonna turn us back now. Straight ahead and on the track
                                                                                                                            now.</p>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="item col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                                                                                                <div class="inner-box wow fadeIn animated animated" data-wow-delay="0ms"
                                                                                                                    data-wow-duration="1500ms"
                                                                                                                    style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeIn;">

                                                                                                                    <div class="icon_box">
                                                                                                                        <span class="flaticon-factory"></span>
                                                                                                                    </div>

                                                                                                                    <h4>SUPERIOR QUALITY</h4>
                                                                                                                    <div class="text">
                                                                                                                        <p>Doin' it our way. Nothin's gonna turn us back now. Straight ahead and on the track
                                                                                                                            now. </p>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="item col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                                                                                                <div class="inner-box wow fadeIn animated animated" data-wow-delay="0ms"
                                                                                                                    data-wow-duration="1500ms"
                                                                                                                    style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeIn;">

                                                                                                                    <div class="icon_box">
                                                                                                                        <span class="flaticon-arrows"></span>
                                                                                                                    </div>

                                                                                                                    <h4>COMPETITIVE PRICE</h4>
                                                                                                                    <div class="text">
                                                                                                                        <p>Doin' it our way. Nothin's gonna turn us back now. Straight ahead and on the track
                                                                                                                            now. </p>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="item col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                                                                                                <div class="inner-box wow fadeIn animated animated" data-wow-delay="0ms"
                                                                                                                    data-wow-duration="1500ms"
                                                                                                                    style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeIn;">

                                                                                                                    <div class="icon_box">
                                                                                                                        <span class="flaticon-technology-1"></span>
                                                                                                                    </div>

                                                                                                                    <h4>TIME DELIVERY</h4>
                                                                                                                    <div class="text">
                                                                                                                        <p>Doin' it our way. Nothin's gonna turn us back now. Straight ahead and on the track
                                                                                                                            now. </p>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>

                                                                                                        </div> -->
    </div>
</section>

<!-- <section class="testimonial padd3">
                                                                                                    <div class="container">
                                                                                                        <div class="section-title center">
                                                                                                            <h2>Client Feedback</h2>
                                                                                                        </div>
                                                                                                        <div class="testimonial-carousel">
                                                                                                            <div class="testimonial-item">
                                                                                                                <div class="content">
                                                                                                                    <span class="fa fa-quote-left"></span>
                                                                                                                    <p>Lorem ipsum dolor sit amet ment tionim sea. Ei explicari evertitur uptatum vi core
                                                                                                                        zupitor inciderint reforin aluminium</p>

                                                                                                                    <ul class="rating">
                                                                                                                        <li class="fa fa-star"></li>
                                                                                                                        <li class="fa fa-star"></li>
                                                                                                                        <li class="fa fa-star"></li>
                                                                                                                        <li class="fa fa-star"></li>
                                                                                                                        <li class="fa fa-star"></li>
                                                                                                                    </ul>
                                                                                                                </div>
                                                                                                                <div class="author">
                                                                                                                    <ul class="list-inline">
                                                                                                                        <li>
                                                                                                                            <img src="images/team/1.png" alt="">
                                                                                                                        </li>
                                                                                                                        <li>
                                                                                                                            <h5>Allen Duckeat</h5>
                                                                                                                            <p>Newyork</p>
                                                                                                                        </li>
                                                                                                                    </ul>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="testimonial-item">
                                                                                                                <div class="content">
                                                                                                                    <span class="fa fa-quote-left"></span>
                                                                                                                    <p>Lorem ipsum dolor sit amet ment tionim sea. Ei explicari evertitur uptatum vi core
                                                                                                                        zupitor inciderint reforin aluminium</p>

                                                                                                                    <ul class="rating">
                                                                                                                        <li class="fa fa-star"></li>
                                                                                                                        <li class="fa fa-star"></li>
                                                                                                                        <li class="fa fa-star"></li>
                                                                                                                        <li class="fa fa-star"></li>
                                                                                                                        <li class="fa fa-star"></li>
                                                                                                                    </ul>
                                                                                                                </div>
                                                                                                                <div class="author">
                                                                                                                    <ul class="list-inline">
                                                                                                                        <li>
                                                                                                                            <img src="images/team/2.png" alt="">
                                                                                                                        </li>
                                                                                                                        <li>
                                                                                                                            <h5>mack raider</h5>
                                                                                                                            <p>California</p>
                                                                                                                        </li>
                                                                                                                    </ul>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="testimonial-item">
                                                                                                                <div class="content">
                                                                                                                    <span class="fa fa-quote-left"></span>
                                                                                                                    <p>Lorem ipsum dolor sit amet ment tionim sea. Ei explicari evertitur uptatum vi core
                                                                                                                        zupitor inciderint reforin aluminium</p>

                                                                                                                    <ul class="rating">
                                                                                                                        <li class="fa fa-star"></li>
                                                                                                                        <li class="fa fa-star"></li>
                                                                                                                        <li class="fa fa-star"></li>
                                                                                                                        <li class="fa fa-star"></li>
                                                                                                                        <li class="fa fa-star"></li>
                                                                                                                    </ul>
                                                                                                                </div>
                                                                                                                <div class="author">
                                                                                                                    <ul class="list-inline">
                                                                                                                        <li>
                                                                                                                            <img src="images/team/3.png" alt="">
                                                                                                                        </li>
                                                                                                                        <li>
                                                                                                                            <h5>Don Flethcer</h5>
                                                                                                                            <p>Los Angeles</p>
                                                                                                                        </li>
                                                                                                                    </ul>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </section> -->

<section class="subscribe center sec-padd">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12 mx-auto">
                <h2>Subscribe For Newsletter</h2>
                <p>Idea of denouncing pleasure praising pain was born and I will give you a complete account
                    <br> of system, expound the great explorer.
                </p>
                <form class="subscribe-form">
                    <input type="email" placeholder="Email Address"><span class="fa fa-envelope ms-2"></span>
                    <button type="submit" class="thm-btn bg-clr1">subscribe us</button>
                </form>
            </div>
        </div>

    </div>
</section>

{{-- <section class="team sec-padd">
        <div class="container">
            <div class="section-title center">
                <h2>meet our team</h2>
            </div>

            <div class="row">
                <article class="col-md-3 col-sm-6 col-xs-12">
                    <div class="item tran5">
                        <div class="team-member">
                            <figure class="img-box">
                                <a href="#"><img src="{{ asset('assets/images/team/4.jpg') }}"
alt="team member photo"></a>
<div class="overlay">
    <ul class="social">
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-skype"></i></a></li>
    </ul>
</div>
</figure>
<div class="member-info">
    <a href="#">
        <h5>Ben Afflin</h5>
    </a>
    <p>President</p>
</div>
</div>
</div>

</article>
<article class="col-md-3 col-sm-6 col-xs-12">
    <div class="item tran5">
        <div class="team-member">
            <figure class="img-box">
                <a href="#"><img src="{{ asset('assets/images/team/3.jpg') }}" alt="team member photo"></a>
                <div class="overlay">
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    </ul>
                </div>
            </figure>
            <div class="member-info">
                <a href="#">
                    <h5>rick grimes</h5>
                </a>
                <p>Co - founder</p>
            </div>
        </div>
    </div>

</article>
<article class="col-md-3 col-sm-6 col-xs-12">
    <div class="item tran5">
        <div class="team-member">
            <figure class="img-box">
                <a href="#"><img src="{{ asset('assets/images/team/2.jpg') }}" alt="team member photo"></a>
                <div class="overlay">
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    </ul>
                </div>
            </figure>
            <div class="member-info">
                <a href="#">
                    <h5>deryl dixon</h5>
                </a>
                <p>Developer</p>
            </div>
        </div>
    </div>

</article>
<article class="col-md-3 col-sm-6 col-xs-12">
    <div class="item tran5">
        <div class="team-member">
            <figure class="img-box">
                <a href="#"><img src="{{ asset('assets/images/team/1.jpg') }}" alt="team member photo"></a>
                <div class="overlay">
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    </ul>
                </div>
            </figure>
            <div class="member-info">
                <a href="#">
                    <h5>Jom Caraleno</h5>
                </a>
                <p>Engineer</p>
            </div>
        </div>
    </div>

</article>
</div>
</div>

</section> --}}

<!--Start faq content area-->
<section class="faq-content-area sec-padd2">
    <div class="container">
        <div class="section-title center">
            <h2>FAQ's</h2>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="accordion-box">
                    <!--Start single accordion box-->
                    <div class="accordion accordion-block">
                        <div class="accord-btn active">
                            <h3 class="h6">What products does Moksh Tubes & Fittings LLP manufacture and supply?
                            </h3>
                        </div>
                        <div class="accord-content collapsed">
                            <p>Moksh Tubes & Fittings LLP manufactures and supplies a wide range of steel products,
                                including Pipes & Tubes, Pipe Fittings, Flanges, Fasteners, Sheets & Plates, Coils,
                                Wires, Round Bars, Flat Bars, Angles, Channels, Welding Rods, Wire Mesh, and other
                                custom and hard-to-find steel products in both ferrous and non-ferrous grades.</p>
                        </div>
                    </div>
                    <!--End single accordion box-->
                    <!--Start single accordion box-->
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h3 class="h6">Which industries does Moksh Tubes & Fittings LLP serve?</h3>
                        </div>
                        <div class="accord-content">
                            <p>We cater to diverse industries such as Oil & Gas, Petrochemicals, Power Generation,
                                Water Management, Pharmaceuticals, Food & Beverage, Marine, Construction, Sugar
                                Industries, Boilers & Pressure Vessels, Solar, and Chemical Processing, delivering
                                high quality materials for critical applications.</p>
                        </div>
                    </div>
                    <!--End single accordion box-->
                    <!--Start single accordion box-->
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h3 class="h6">What materials are available at Moksh Tubes & Fittings LLP?
                            </h3>
                        </div>
                        <div class="accord-content">
                            <p>Our product range covers Stainless Steel, Duplex & Super Duplex Steel, Nickel Alloys
                                like Hastelloy, Inconel, and Monel, Titanium Alloys, Copper & Bronze Alloys, Carbon
                                Steel, and rare alloys including Nimonic, Ferralium, Zirconium, and Tantalum.</p>
                        </div>
                    </div>
                    <!--End single accordion box-->
                    <!--Start single accordion box-->
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h3 class="h6">How does Moksh Tubes & Fittings LLP ensure quality standards?
                            </h3>
                        </div>
                        <div class="accord-content">
                            <p>All materials we supply comply with international standards such as ASTM, ASME, ISO,
                                and DIN. We maintain strict quality control procedures and partner with trusted
                                suppliers to ensure reliable performance and durability in every project.
                            </p>
                        </div>
                    </div>
                    <!--End single accordion box-->
                    <!--Start single accordion box-->
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h3 class="h6">Does Moksh Tubes & Fittings LLP offer global delivery?
                            </h3>
                        </div>
                        <div class="accord-content">
                            <p>Yes. With 20 years of experience and projects completed in over 12 countries, Moksh
                                Tubes & Fittings LLP has the logistics and sourcing capabilities to deliver steel
                                products worldwide, ensuring on-time supply for urgent and large-scale orders.</p>
                        </div>
                    </div>
                    <!--End single accordion box-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--End faq content area-->






<!-- <div class="call-out2">
         <div class="container">
     <div class="clearfix">
    <div class="float_left">
         <h4>Have any question or need any business consultation?</h4>
    </div>
    <div class="float_right">
    <a href="contact.html" class="thm-btn bg-clr2">Request Quote</a>
     </div>
    </div>

     </div>
    </div> -->

@endsection
@section('jsscripts')
<script type="application/ld+json">
    @verbatim {
        "@context": "https://schema.org"
        , "@type": "FAQPage"
        , "mainEntity": [{
                "@type": "Question"
                , "name": "What products does Moksh Tubes & Fittings LLP manufacture and supply?"
                , "acceptedAnswer": {
                    "@type": "Answer"
                    , "text": "Moksh Tubes & Fittings LLP manufactures and supplies a wide range of steel products, including Pipes & Tubes, Pipe Fittings, Flanges, Fasteners, Sheets & Plates, Coils, Wires, Round Bars, Flat Bars, Angles, Channels, Welding Rods, Wire Mesh, and other custom and hard-to-find steel products in both ferrous and non-ferrous grades."
                }
            }
            , {
                "@type": "Question"
                , "name": "Which industries does Moksh Tubes & Fittings LLP serve?"
                , "acceptedAnswer": {
                    "@type": "Answer"
                    , "text": "We cater to diverse industries such as Oil & Gas, Petrochemicals, Power Generation, Water Management, Pharmaceuticals, Food & Beverage, Marine, Construction, Sugar Industries, Boilers & Pressure Vessels, Solar, and Chemical Processing, delivering high quality materials for critical applications."
                }
            }
            , {
                "@type": "Question"
                , "name": "What materials are available at Moksh Tubes & Fittings LLP?"
                , "acceptedAnswer": {
                    "@type": "Answer"
                    , "text": "Our product range covers Stainless Steel, Duplex & Super Duplex Steel, Nickel Alloys like Hastelloy, Inconel, and Monel, Titanium Alloys, Copper & Bronze Alloys, Carbon Steel, and rare alloys including Nimonic, Ferralium, Zirconium, and Tantalum."
                }
            }
            , {
                "@type": "Question"
                , "name": "How does Moksh Tubes & Fittings LLP ensure quality standards?"
                , "acceptedAnswer": {
                    "@type": "Answer"
                    , "text": "All materials we supply comply with international standards such as ASTM, ASME, ISO, and DIN. We maintain strict quality control procedures and partner with trusted suppliers to ensure reliable performance and durability in every project."
                }
            }
            , {
                "@type": "Question"
                , "name": "Does Moksh Tubes & Fittings LLP offer global delivery?"
                , "acceptedAnswer": {
                    "@type": "Answer"
                    , "text": "Yes. With 20 years of experience and projects completed in over 12 countries, Moksh Tubes & Fittings LLP has the logistics and sourcing capabilities to deliver steel products worldwide, ensuring on-time supply for urgent and large-scale orders."
                }
            }
        ]
    }
    @endverbatim

</script>
@endsection
