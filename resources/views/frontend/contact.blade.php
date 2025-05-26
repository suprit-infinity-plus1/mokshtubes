
@extends('layouts.master')
@section('title', 'Moksh Tubes || Contact Us')
@section('content')
        <!--Start breadcrumb area-->
        <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
            <div class="container text-center">
                <h1>Contact Us</h1>
            </div>
        </section>
        <!--End breadcrumb area-->




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
                                        <input type="text" name="form_name" value="" placeholder="Your Name*"
                                            required="">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" name="form_email" value="" placeholder="Your Mail*"
                                            required="">
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
                                        <textarea name="form_message" placeholder="Your Message.."
                                            required=""></textarea>
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



        <section class="home-google-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d943.3624929957525!2d72.82755531962317!3d18.955724967265716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7cf9ee4261af1%3A0x57adb33b0f4c262!2sMoksh%20Tubes%20%26%20Fittings%20LLP!5e0!3m2!1sen!2sin!4v1747987043971!5m2!1sen!2sin"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>



        </section>

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