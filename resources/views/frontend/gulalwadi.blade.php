@extends('layouts.master')
@section('title', 'Gulalwadi Mumbai Office – Contact Moksh Tubes Today')
@section('meta_keywords', 'Stainless steel pipes in Gulalwadi')
@section('meta_description',
    'Visit our Gulalwadi, Mumbai office or contact Moksh Tubes at +91 97695 84950 |
    info@mokshtubes.com for inquiries, directions, or business support.')
@section('og_image', asset('assets/images/slides/Mokshtubes-banner-desktop.webp'))
@section('og_type', 'website')

@section('content')

    <section class="bg-light sec-padd-bottom">
        <div class="container py-5">
            <!-- Title in center -->
            <h1 class="text-center mb-5 fw-semibold my-4 title-color">Gulalwadi Mumbai </h1>

            <!-- Two column layout -->
            <div class="row">
                <!-- Left Content (60%) -->
                <!-- Left Content (60%) -->
                <div class="col-md-5 content-left">
                    <h2 class="fs-5 fw-semibold my-4">Visiting Address</h2>
                    <p class="my-3b fs-5" style="max-width: 350px">
                        Office No. 20, 2nd Floor, Bldg. No. 36/40, Hinglaj Bhavan, Kika Street, Gulalwadi, Mumbai- 400 004.
                    </p>

                    <h2 class="fs-5 fw-semibold mt-4 mb-2">Contact Details</h2>

                    <p class="mb-2">
                        📞 <a href="tel:+91 97695 84950" class="text-decoration-none text-dark fw-medium">+91 97695
                            84950</a>
                    </p>
                    <p>
                        📧 <a href="mailto:info@mokshtubes.com"
                            class="text-decoration-none text-dark fw-medium">info@mokshtubes.com</a>
                    </p>
                    <h2 class="fs-5 fw-semibold mt-4 mb-2">Get Direction</h2>

                    <p class=" fs-5 mb-2">18°57'22"N 72°49'43"E</p>
                    <p>
                        <a href="https://maps.app.goo.gl/7WYkcCj9HwC5cK267" target="_blank" rel="noreferrer"
                            class="text-primary fs-4" title="Open in Google Maps">
                            <i class="bi bi-geo-alt-fill"></i>
                        </a>
                    </p>




                </div>


                <!-- Right Content: Map -->
                <div class="col-md-7">
                    <div class="ratio ratio-4x3">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3773.4420541005015!2d72.8278971!3d18.956075!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7cf9ee4261af1%3A0x57adb33b0f4c262!2sMoksh%20Tubes%20%26%20Fittings%20LLP!5e0!3m2!1sen!2sin!4v1750077034926!5m2!1sen!2sin"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

            </div>
        </div>
    </section>




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
                        <form id="contact-form" name="contact_form" class="default-form" action="{{ url('sendmail') }}"
                            method="post">
                            @csrf
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
                                <div class="col-md-12">
                                    <input type="text" name="form_phone" value="" placeholder="Phone">
                                </div>
                                {{-- <div class="col-md-6">
                                    <input type="text" name="form_subject" value="" placeholder="Subject">
                                </div> --}}
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
                            <h2>Quick Contact</h2>
                            <p>If you are passionate about helping people: through education, or preventing then
                                you </p>
                        </div>
                        <ul class="clearfix">
                            <li>
                                <div class="iocn-holder">
                                    <a href="https://maps.app.goo.gl/DZXPXEmamcy86DDx6">
                                        <span class="flaticon-web-page-home"></span>
                                    </a>
                                </div>
                                <div class="text-holder">
                                    <a href="https://maps.app.goo.gl/DZXPXEmamcy86DDx6">
                                        <h3 class="h6">Hinglaj Bhavan, Gulalwadi</h3>
                                        <p>Mumbai, Maharashtra. 400004</p>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="iocn-holder">
                                    <a href="tel:+919769584950">
                                        <span class="icon-technology-1"></span>
                                    </a>
                                </div>
                                <div class="text-holder">
                                    <h3 class="h6">Call Us On</h3>
                                    <a href="tel:+919769584950">
                                        <p>+91 97695 84950</p>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="iocn-holder">
                                    <a href="https://wa.me/919769584950" target="_blank">
                                        <span class="fa-brands fa-whatsapp"></span>
                                    </a>
                                </div>
                                <div class="text-holder">
                                    <h3 class="h6">Whatsapp</h3>
                                    <a href="https://wa.me/919769584950" target="_blank">
                                        <p>+91 97695 84950</p>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="iocn-holder">
                                    <a href="mailto:info@mokstubes.com">
                                        <span class="icon-letter-1"></span>
                                    </a>
                                </div>
                                <div class="text-holder">
                                    <h3 class="h6">Mail Us @</h3>
                                    <a href="mailto:info@mokstubes.com">
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
