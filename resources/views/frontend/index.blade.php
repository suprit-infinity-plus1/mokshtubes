@extends('layouts.master')
@section('title', 'Moksh Tubes || Home')
@section('content')
        <!--Start rev slider wrapper-->
        <section class="rev_slider_wrapper">
            <div id="slider1" class="rev_slider" data-version="5.0">
                <ul>
                    <li data-transition="slidingoverlayleft">
                        <img src="{{asset('assets/images/slides/2.jpg')}}" alt="" width="1920" height="880" data-bgposition="top center"
                            data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1">

                        <div class="tp-caption  tp-resizeme" data-x="right" data-hoffset="15" data-y="center"
                            data-voffset="-50" data-transform_idle="o:1;"
                            data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none"
                            data-responsive_offset="on" data-start="700">
                            <div class="slide-content-box">
                                <h1>Provide Solution <br>for Industries plan </h1>
                                <p>They'll have to make the best of things its an uphill climb.<br> The weather started
                                    getting was tossed. </p>
                            </div>
                        </div>
                        <div class="tp-caption tp-resizeme" data-x="right" data-hoffset="390" data-y="center"
                            data-voffset="110" data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="2300">
                            <div class="slide-content-box">
                                <div class="button">
                                    <a class="thm-btn bg-clr1" href="#">About Us</a>
                                </div>
                            </div>
                        </div>
                        <div class="tp-caption tp-resizeme" data-x="right" data-hoffset="180" data-y="center"
                            data-voffset="110" data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="2600">
                            <div class="slide-content-box">
                                <div class="button">
                                    <a class="thm-btn bg-clr2" href="#">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li data-transition="slidingoverlayright">
                        <img src="{{asset('assets/images/slides/3.jpg')}}" alt="" width="1920" height="550" data-bgposition="top center"
                            data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1">

                        <div class="tp-caption  tp-resizeme" data-x="left" data-hoffset="15" data-y="center"
                            data-voffset="-50" data-transform_idle="o:1;"
                            data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none"
                            data-responsive_offset="on" data-start="700">
                            <div class="slide-content-box">
                                <h1>We help Industries<br>innovate and grow.</h1>
                                <p>They'll have to make the best of things its an uphill climb.<br> The weather started
                                    getting was tossed. </p>
                            </div>
                        </div>
                        <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="15" data-y="center"
                            data-voffset="110" data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="2300">
                            <div class="slide-content-box">
                                <div class="button">
                                    <a class="thm-btn bg-clr1" href="#">About Us</a>
                                </div>
                            </div>
                        </div>
                        <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="227" data-y="center"
                            data-voffset="110" data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="2600">
                            <div class="slide-content-box">
                                <div class="button">
                                    <a class="thm-btn bg-clr2" href="#">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li data-transition="slidingoverlayleft">
                        <img src="{{asset('assets/images/slides/1.jpg')}}" alt="" width="1920" height="880" data-bgposition="top center"
                            data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1">

                        <div class="tp-caption  tp-resizeme" data-x="left" data-hoffset="15" data-y="center"
                            data-voffset="-50" data-transform_idle="o:1;"
                            data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none"
                            data-responsive_offset="on" data-start="700">
                            <div class="slide-content-box">
                                <h1>Welcome to Moksh Tubes & <br>Fittings LLP </h1>
                                <p>They'll have to make the best of things its an uphill climb.<br> The weather started
                                    getting was tossed. </p>
                            </div>
                        </div>
                        <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="15" data-y="center"
                            data-voffset="110" data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="2300">
                            <div class="slide-content-box">
                                <div class="button">
                                    <a class="thm-btn bg-clr1" href="#">About Us</a>
                                </div>
                            </div>
                        </div>
                        <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="227" data-y="center"
                            data-voffset="110" data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="2600">
                            <div class="slide-content-box">
                                <div class="button">
                                    <a class="thm-btn bg-clr2" href="#">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </li>


                </ul>
            </div>
        </section>
        <!--End rev slider wrapper-->


        <section class="about-us sec-padd-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12">

                        <figure class="about-img">
                            <!-- <img src="images/resource/1.png" alt="about titan builders photo"> -->
                            <img src="https://placehold.co/1000x700" alt="about titan builders photo">
                        </figure>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="about-text">
                            <h2>
                                about <span class="thm-color">Moksh Tubes & Fittings LLP</span>
                            </h2>
                            <div class="text">
                                <p>Thank you for being a friend. Travelled down the road and back again. Your heart is
                                    true you're a pal and a confidant. It's time to put on makeup. It's time to dress up
                                    right.They're all together ooky the Addams Family doin' it our way. There's nothing
                                    we wont try. Never heard the word impossible. This time there's no stopping us.</p>
                            </div>
                            <div class="fact-counter">
                                <ul>
                                    <li class="single-fact-counter">
                                        <div class="icon-holder"><span class="flaticon-social"></span></div>
                                        <span class="timer" data-from="1" data-to="2456" data-speed="5000"
                                            data-refresh-interval="50">2456</span>
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                        <h3>Engineers & Workers</h3>
                                    </li>
                                    <li class="single-fact-counter">
                                        <div class="icon-holder"><span class="flaticon-landscape"></span></div>
                                        <span class="timer" data-from="1" data-to="640" data-speed="5000"
                                            data-refresh-interval="50">640</span>
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                        <h3>Factory in Worldwide</h3>
                                    </li>
                                    <li class="single-fact-counter">
                                        <div class="icon-holder"><span class="flaticon-innovation"></span></div>
                                        <span class="timer" data-from="1" data-to="3250" data-speed="5000"
                                            data-refresh-interval="50">3250</span>
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                        <h3>Projects Completed</h3>
                                    </li>
                                </ul>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </section>


        <section class="our-services">
            <div class="container">

                <div class="row">
                    <div class="col-md-4 col-sm-5 col-xs-12">
                        <div class="section-title">
                            <h2>Our Products</h2>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-7 col-xs-12 font-20">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. A dolor amet enim
                            <br>qui deserunt deleniti voluptates nobis asperiores, quia blanditiis.
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="single-our-service">
                            <figure class="img-box">
                                <a href="single-service.html"><img src="{{asset('assets/images/service/1.jpg')}}" alt="Awesome Image"></a>
                            </figure>
                            <a href="#">
                                <h4>WELDED PIPES</h4>
                            </a>

                            <p>Lorem ipsum dolor sit amet, consectetur elit <br>
                                voluptates modi facere vel debitis sapiente sequi!</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-our-service">
                            <figure class="img-box">
                                <a href="single-service.html"><img src="{{asset('assets/images/service/2.jpg')}}" alt="Awesome Image"></a>
                            </figure>
                            <a href="#">
                                <h4>SEAMLESS PIPES</h4>
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur elit <br>
                                voluptates modi facere vel debitis sapiente sequi!</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-our-service">
                            <figure class="img-box">
                                <a href="single-service.html"><img src="{{asset('assets/images/service/3.jpg')}}" alt="Awesome Image"></a>
                            </figure>
                            <a href="#">
                                <h4>SHEETS & PLATES</h4>
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur elit <br>
                                voluptates modi facere vel debitis sapiente sequi!</p>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="single-our-service">
                            <figure class="img-box">
                                <a href="#single-service.html"><img src="{{asset('assets/images/service/4.jpg')}}" alt="Awesome Image"></a>
                            </figure>
                            <a href="#">
                                <h4>PERFORATED SHEETS</h4>
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur elit <br>
                                voluptates modi facere vel debitis sapiente sequi!</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-our-service">
                            <figure class="img-box">
                                <a href="#single-service.html"><img src="{{asset('assets/images/service/5.jpg')}}" alt="Awesome Image"></a>
                            </figure>
                            <a href="#">
                                <h4>ROUND BARS</h4>
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur elit <br>
                                voluptates modi facere vel debitis sapiente sequi!</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-our-service">
                            <figure class="img-box">
                                <a href="#single-service.html"><img src="{{asset('assets/images/service/6.jpg')}}" alt="Awesome Image"></a>
                            </figure>
                            <a href="#">
                                <h4>FASTENERS</h4>
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur elit <br>
                                voluptates modi facere vel debitis sapiente sequi!</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- <section class="latest-project sec-padd" style="background-image: url(images/background/5.jpg);">
            <div class="container">
                <div class="section-title">
                    <h2>Latest Projects</h2>
                </div>
                <div class="latest-project-carousel">
                    <div class="item">
                        <div class="single-project">
                            <figure class="imghvr-shutter-in-out-horiz">
                                <img src="images/project/p1.jpg" alt="Awesome Image" />
                                <figcaption>
                                    <div class="content">
                                        <a href="project-single.html">
                                            <h4>PETROLEUM GAS</h4>
                                        </a>
                                        <p>Chemical</p>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-latest-project-carousel">
                            <div class="single-project">
                                <figure class="imghvr-shutter-in-out-horiz">
                                    <img src="images/project/p2.jpg" alt="Awesome Image" />
                                    <figcaption>
                                        <div class="content">
                                            <a href="project-single.html">
                                                <h4>MULTI SPRING PUSH</h4>
                                            </a>
                                            <p>Mechanical</p>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-latest-project-carousel">
                            <div class="single-project">
                                <figure class="imghvr-shutter-in-out-horiz">
                                    <img src="images/project/p3.jpg" alt="Awesome Image" />
                                    <figcaption>
                                        <div class="content">
                                            <a href="project-single.html">
                                                <h4>STORAGE SYSTEM</h4>
                                            </a>
                                            <p>Power Energy</p>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-latest-project-carousel">
                            <div class="single-project">
                                <figure class="imghvr-shutter-in-out-horiz">
                                    <img src="images/project/p4.jpg" alt="Awesome Image" />
                                    <figcaption>
                                        <div class="content">
                                            <a href="project-single.html">
                                                <h4>MENUFACTURING</h4>
                                            </a>
                                            <p>Agricultural</p>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section> -->


        <!-- <section class="call-back sec-padd2" style="background-image: url(images/background/4.jpg);">
            <div class="container">

                <div class="row">
                    <div class="col-md-5 col-sm-12">
                        <div class="section-title">
                            <h2>Request a Call Back</h2>
                        </div>
                        <h4>Have You Any Question About Us?</h4>
                        <br>
                        <div class="text">
                            <p>Any kind of business solution and consultion hesitate to contact with us for customer
                                support. We are love to hear from you</p><br>
                            <p><span>Phone & Email:</span> For any information contact with us through our <a href="#">
                                    Email</a> and you can also contact with directe by call us in this number
                                <span>(+880) 1723801729</span>
                            </p><br>
                            <p><span>Office Hours:</span> We are alwyes open excpet saturday & Sunday from
                                <span>10:00am</span> to <span> 8:00pm</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12">
                        <div class="contact-form-area">
                            <div class="contact-form">
                                <form id="contact-form" name="contact_form" class="default-form"
                                    action="inc/sendmail.php" method="post" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" name="form_name" value="" placeholder="Your Name*"
                                                required="" aria-required="true">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="email" name="form_email" value="" placeholder="Your Mail*"
                                                required="" aria-required="true">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" name="form_phone" value="" placeholder="Phone">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="form_subject" value="" placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <textarea name="form_message" placeholder="Your Message.." required=""
                                                aria-required="true"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input id="form_botcheck" name="form_botcheck" class="form-control"
                                                type="hidden" value="">
                                            <button class="thm-btn bg-clr1" type="submit"
                                                data-loading-text="Please wait...">send message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section> -->

        <section class="all-products-container sec-padd2 ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-col service-col">
                            <h3 class="footer-title">PIPES & TUBES </h3>
                            <ul class="footer-list">
                                <li><a href="#">WELDED PIPES (ERW & EFW)</a></li>
                                <li><a href="#">SEAMLESS PIPES</a></li>
                                <li><a href="#">CAPILLARIESS</a></li>
                                <li><a href="#">HOLLOW SECTION PIPE (SQUARE, RECTANGULAR & OVAL)</a></li>
                                <li><a href="#">U-BENT TUBES</a></li>
                                <li><a href="#">BOILER & HEAT EXCHANGER TUBES</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-col service-col">
                            <h3 class="footer-title">SHEETS, PLATES & COILS</h3>
                            <ul class="footer-list">
                                <li><a href="#">SHEETS & PLATES</a></li>
                                <li><a href="#">COILS</a></li>
                                <li><a href="#">STRIPS</a></li>
                                <li><a href="#">PERFORATED SHEETS</a></li>
                                <li><a href="#">CHEQUERED SHEETS</a></li>
                                <li><a href="#">SHIM SHEETS</a></li>
                                <li><a href="#">CLADDED PLATES</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-col service-col">
                            <h3 class="footer-title">BARS & RODS</h3>
                            <ul class="footer-list">
                                <li><a href="#">ROUND BARS</a></li>
                                <li><a href="#">HEXAGON BARS</a></li>
                                <li><a href="#">FLAT BARS</a></li>
                                <li><a href="#">SQUARE BARS</a></li>
                                <li><a href="#">THREADED RODS</a></li>
                                <li><a href="#">HOLLOW BARS</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-col service-col">
                            <h3 class="footer-title">PIPE FITTINGS, FLANGES & FASTENERS</h3>
                            <ul class="footer-list">
                                <li><a href="#">FITTINGS</a></li>
                                <li><a href="#">FLANGES</a></li>
                                <li><a href="#">FASTENERS</a></li>
                                <li><a href="#">GASKETS</a></li>
                                <li><a href="#">CUSTOM FABRICATED FITTINGS</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="brand-logo sec-padd">
            <div class="container">
                <ul class="brand-carousel">
                    <li><a href="#"><img src="{{asset('assets/images/brand/1.jpg')}}" alt=""></a></li>
                    <li><a href="#"><img src="{{asset('assets/images/brand/2.jpg')}}" alt=""></a></li>
                    <li><a href="#"><img src="{{asset('assets/images/brand/3.jpg')}}" alt=""></a></li>
                    <li><a href="#"><img src="{{asset('assets/images/brand/4.jpg')}}" alt=""></a></li>
                    <li><a href="#"><img src="{{asset('assets/images/brand/5.jpg')}}" alt=""></a></li>
                </ul>
            </div>
        </section>

        <section class="blog-section sec-padd2">
            <div class="container">
                <div class="section-title">
                    <h2>blogs</h2>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="default-blog-news wow fadeInUp animated animated"
                            style="visibility: visible; animation-name: fadeInUp;">
                            <figure class="img-holder">
                                <a href="blog-details.html"><img src="{{asset('assets/images/blog/1.jpg')}}" alt="News"></a>
                                <figcaption class="overlay">
                                    <div class="box">
                                        <div class="content">
                                            <a href="blog-details.html"><i class="fa fa-link"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class="lower-content">
                                <a href="blog-details.html">
                                    <h4>MATERIALS & MANUFACTURING </h4>
                                </a>
                                <div class="post-meta">by fletcher | 14 Comments | 21 Feb</div>
                                <div class="text">
                                    <p>Except to obtain some advantage from it? But who has any right to find to enjoy a
                                        pleasure.</p>
                                </div>
                                <div class="link">
                                    <a href="blog-details.html" class="default_link">Read More <i
                                            class="fa fa-angle-right"></i></a>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="default-blog-news wow fadeInUp animated animated"
                            style="visibility: visible; animation-name: fadeInUp;">
                            <figure class="img-holder">
                                <a href="blog-details.html"><img src="{{asset('assets/images/blog/2.jpg')}}" alt="News"></a>
                                <figcaption class="overlay">
                                    <div class="box">
                                        <div class="content">
                                            <a href="blog-details.html"><i class="fa fa-link"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class="lower-content">
                                <a href="blog-details.html">
                                    <h4>COMMERCIAL AND REAL PROJECTS</h4>
                                </a>
                                <div class="post-meta">by Richards | 22 Comments | 17 Apr</div>
                                <div class="text">
                                    <p>Great pleasure to take a trivial example, which of us undertakes laborious.</p>
                                </div>
                                <div class="link">
                                    <a href="blog-details.html" class="default_link">Read More <i
                                            class="fa fa-angle-right"></i></a>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="default-blog-news wow fadeInUp animated animated"
                            style="visibility: visible; animation-name: fadeInUp;">
                            <figure class="img-holder">
                                <a href="blog-details.html"><img src="{{asset('assets/images/blog/3.jpg')}}" alt="News"></a>
                                <figcaption class="overlay">
                                    <div class="box">
                                        <div class="content">
                                            <a href="blog-details.html"><i class="fa fa-link"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class="lower-content">
                                <a href="blog-details.html">
                                    <h4>MATERIALS FOR THE ECONOMY</h4>
                                </a>
                                <div class="post-meta">by Vincent | 16 Comments | 14 June</div>
                                <div class="text">
                                    <p>Pleasure and praising pain was born and I will give you a complete account.</p>
                                </div>
                                <div class="link">
                                    <a href="blog-details.html" class="default_link">Read More <i
                                            class="fa fa-angle-right"></i></a>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>
@endsection