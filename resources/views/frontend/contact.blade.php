@extends('layouts.master')
@section('title', 'Moksh Tubes || Contact Us')
@section('extracss')
    <style>
        .location-card {
            cursor: pointer;
            padding: 20px;
            margin-bottom: 15px;
            border-radius: 10px;
            transition: all 0.3s ease;
            background-color: #ffffff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            color: #000 !important;
            /* Force black text by default */
        }

        .location-card h5,
        .location-card p {
            color: #000 !important;
            /* Force black text for headings and paragraphs */
        }

        .location-card:hover,
        .location-card.active {
            background-color: #db7227;
            color: #fff !important;
            border: none;
        }

        .location-card:hover h5,
        .location-card:hover p,
        .location-card.active h5,
        .location-card.active p {
            color: #fff !important;
        }

        .moksh-overview-contact {
            font-weight: 500;
            color: #5b5757;
            font-size: 18px;
        }

        .sticky-card {
            position: sticky;
            top: 100px;
        }

        .branch-card {
            background-color: #ffffff;
            transition: all 0.3s ease;
        }

        .branch-btn {
            background-color: #db7227;
            color: #fff;
            font-weight: 500;
            transition: background-color 0.3s ease;
            border: none;
        }

        .branch-btn:hover {
            background-color: #b85c1f;
            color: #fff;
        }
    </style>
@endsection


@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container text-center">
            <h1>Contact Us</h1>
        </div>
    </section>
    <!--End breadcrumb area-->






    <section class="global-presence pt-5 bg-light">
        <div class="container">
            <div class="text-center">
                <h1 class="fw-semibold mb-3">Moksh Tube Locations and Contact Details</h1>
                <p class="moksh-overview-contact">
                    Discover Moksh Tube Steel’s global footprint — delivering excellence across industries and regions. <br>
                    From trusted partners to our strategic locations, find us wherever your business needs us.
                </p>

            </div>


        </div>
    </section>

    <!-- <section class=" bg-light sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="sticky-card" style="position: sticky; top: 100px;">
                        <div class="list-group">

                            <a href="#" class="list-group-item location-card">
                                <h5 class="mb-1 fw-semibold">Gulalwadi – Mumbai</h5>
                                <p class="mb-0 small">Bldg. No. 36/40, Hinglaj Bhavan, Kika Street</p>
                            </a>

                            <a href="#" class="list-group-item location-card">
                                <h5 class="mb-1 fw-semibold">Khetwadi – Mumbai</h5>
                                <p class="mb-0 small">6/A, Ground Floor, Rajwanti Mansion</p>
                            </a>

                            <a href="#" class="list-group-item location-card">
                                <h5 class="mb-1 fw-semibold">Kamatipura – Mumbai</h5>
                                <p class="mb-0 small">95/95A, Dawood Baug, Sukhlaji Street</p>
                            </a>

                            <a href="#" class="list-group-item location-card mb-0">
                                <h5 class="mb-1 fw-semibold">Darukhana – Mumbai</h5>
                                <p class="mb-0 small">92E, Plot No. 3, New Tank Bunder, Reay Road</p>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <img id="mapImage" src="{{ asset('assets/images/background/2.jpg') }}" alt="Location Map"
                        class="img-fluid rounded shadow-sm w-100">
                </div>
            </div>
        </div>
    </section> -->



    <section class=" bg-light sec-padd-top sec-padd-bottom">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3">
                        <div class="p-4 shadow-sm rounded branch-card h-100">
                            <h5 class="fw-semibold mb-2">Gulalwadi – Mumbai</h5>
                            <p class="small mb-1">36/40, Hinglaj Bhavan, Kika Street</p>
                            <p class="small mb-1">📞 +91 97695 84950</p>
                            <p class="small mb-3">✉️ info@mokstubes.com</p>
                            <a href="#" class="btn branch-btn w-100">See Location</a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="p-4 shadow-sm rounded branch-card h-100">
                            <h5 class="fw-semibold mb-2">Khetwadi – Mumbai</h5>
                            <p class="small mb-1">6/A, Rajwanti Mansion</p>
                            <p class="small mb-1">📞 +91 97695 84950</p>
                            <p class="small mb-3">✉️ info@mokstubes.com</p>
                            <a href="#" class="btn branch-btn w-100">See Location</a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="p-4 shadow-sm rounded branch-card h-100">
                            <h5 class="fw-semibold mb-2">Kamatipura – Mumbai</h5>
                            <p class="small mb-1">95/95A, Dawood Baug, Sukhlaji Street</p>
                            <p class="small mb-1">📞 +91 97695 84950</p>
                            <p class="small mb-3">✉️ info@mokstubes.com</p>
                            <a href="#" class="btn branch-btn w-100">See Location</a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="p-4 shadow-sm rounded branch-card h-100">
                            <h5 class="fw-semibold mb-2">Darukhana – Mumbai</h5>
                            <p class="small mb-1">92E, Plot No. 3, Reay Road</p>
                            <p class="small mb-1">📞 +91 97695 84950</p>
                            <p class="small mb-3">✉️ info@mokstubes.com</p>
                            <a href="#" class="btn branch-btn w-100">See Location</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>









    <!-- <section class="home-google-map">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d943.3624929957525!2d72.82755531962317!3d18.955724967265716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7cf9ee4261af1%3A0x57adb33b0f4c262!2sMoksh%20Tubes%20%26%20Fittings%20LLP!5e0!3m2!1sen!2sin!4v1747987043971!5m2!1sen!2sin"
                                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade">
                                    </iframe>



                                </section> -->

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


    <!--Start contact form area-->
    <section class="contact-form-area sec-padd-top">
        <div class="container">
            <div class="section-title">
                <h2>get in <span class="thm-color">touch</span></h2>
                <p>Let’s forge a connection — contact our team today. </p>
            </div>

            <div class="row">

                <div class="col-md-8">

                    <div class="contact-form">
                        <form id="contact-form" name="contact_form" class="default-form" action="inc/sendmail.php"
                            method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="form_name" value="" placeholder="Your Name*" required="">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="form_email" value="" placeholder="Your Mail*" required="">
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
                                    <textarea name="form_message" placeholder="Your Message.." required=""></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden"
                                        value="">
                                    <button class="thm-btn bg-clr1" type="submit" data-loading-text="Please wait...">send
                                        message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="footer-contact-info">
                        <div class="title">
                            <h4>Quick Contact</h4>
                            <p>If you are passionate about helping people: through education, or preventing then
                                you </p>
                        </div>
                        <ul class="clearfix">
                            <li>
                                <div class="iocn-holder">
                                    {{-- <span class="fa fa-home"></span> --}}
                                    <span class="flaticon-web-page-home"></span>
                                </div>
                                <div class="text-holder">

                                    <h6>Hinglaj Bhavan, Gulalwadi</h6>
                                    <p>Mumbai, Maharashtra. 400004</p>
                                </div>
                            </li>
                            <li>
                                <div class="iocn-holder">
                                    <span class="icon-technology-1"></span>
                                </div>
                                <div class="text-holder">
                                    <h6>Call Us On</h6>
                                    <p>+91 97695 84950</p>
                                </div>
                            </li>
                            <li>
                                <div class="iocn-holder">
                                    <span class="icon-letter-1"></span>
                                </div>
                                <div class="text-holder">
                                    <h6>Mail Us @</h6>
                                    <a href="#">
                                        <p>info@mokstubes.com</p>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!--End contact form area-->


@endsection

@section('extrajs')

@endsection