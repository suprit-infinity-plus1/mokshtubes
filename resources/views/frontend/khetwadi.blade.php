@extends('layouts.master')
@section('title', 'Kamatipura Mumbai Office – Contact Moksh Tubes')
@section('meta_keywords', 'Pipe supplier in Khetwadi')
@section('meta_description',
    'Visit Moksh Tubes at Kamatipura, Mumbai. Call +91 97695 84950 or email info@mokshtubes.com
    for inquiries, directions, or business assistance today.')

@section('og_image', asset('assets/images/slides/Mokshtubes-banner-desktop.webp'))
@section('og_type', 'website')


@section('content')

    <section class="bg-light sec-padd-bottom">
        <div class="container py-5">
            <!-- Title in center -->
            <h1 class="text-center mb-5 fw-semibold my-4 title-color">Khetwadi Mumbai </h1>

            <!-- Two column layout -->
            <div class="row">
                <!-- Left Content (60%) -->
                <!-- Left Content (60%) -->
                <div class="col-md-5 content-left">
                    <h2 class="fs-5 fw-semibold my-4">Visiting Address</h2>
                    <p class="my-3b fs-5" style="max-width: 350px">
                        6/A, Ground Floor, Rajwanti Mansion, 4th Khetwadi, Mumbai, Maharashtra- 400 004.
                    </p>

                    <h2 class="fs-5 fw-semibold mt-4 mb-2">Contact Details</h2>

                    <p class="mb-2">
                        📞 <a href="tel:+919819777413" class="text-decoration-none text-dark fw-medium">+91 9819777413</a>
                    </p>
                    <p class="mb-2">
                        📞 <a href="tel:+91 98332 99961" class="text-decoration-none text-dark fw-medium">+91 98332
                            99961</a>
                    </p>
                    <p>
                        📧 <a href="mailto:info@mokshtubes.com"
                            class="text-decoration-none text-dark fw-medium">info@mokshtubes.com</a>
                    </p>
                    <h2 class="fs-5 fw-semibold mt-4 mb-2">Get Direction</h2>

                    <p class=" fs-5 mb-2">18°56'56"N 72°49'31"E</p>

                    <p>
                        <a href="https://maps.app.goo.gl/Nok2fPjWZrKHHsUJ9" target="_blank" rel="noopener"
                            class="text-primary fs-4" title="Open in Google Maps">
                            <i class="bi bi-geo-alt-fill"></i>
                        </a>
                    </p>




                </div>


                <!-- Right Content: Map -->
                <div class="col-md-7">
                    <div class="ratio ratio-4x3">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3773.3750110239916!2d72.82037992520247!3d18.959038582221584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7ce1656fe7bdd%3A0x953bc465e58544dc!2sMoksh%20Tubes!5e0!3m2!1sen!2sin!4v1759581804206!5m2!1sen!2sin"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
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
                                    <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"
                                        style="margin-bottom:10px;"></div>
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
