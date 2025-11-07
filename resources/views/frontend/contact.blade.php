@extends('layouts.master')
@section('title', 'Contact Mokshtubes Fittings LLP | Request a Quote or Inquiry')
@section('meta_description',
    'Get in touch with Mokshtubes Fittings & LLP for inquiries, quotations, or technical
    assistance. Call, email, or visit us.')
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
    <section class="breadcrumb-area" style="background-image: url(/assets/images/slides/Mokshtubes-banner-desktop.webp);">
        <div class="container text-center">
            <h1>Contact Us</h1>
        </div>
    </section>
    <!--End breadcrumb area-->

    <section class="global-presence pt-5 bg-light">
        <div class="container text-center">
            <h2 class="fw-semibold mb-3 fs-1">Moksh Tube Locations and Contact Details</h2>
            <p class="moksh-overview-contact">
                Discover Moksh Tube Steel’s global footprint delivering excellence across industries and regions. <br>
                From trusted partners to our strategic locations, find us wherever your business needs us.
            </p>
            <!-- ✅ Added SEO Benefit Text -->
            <p class="text-success fw-semibold mt-3 fs-5">🚀 Get quote within 24 hours – Global delivery available.</p>
        </div>
    </section>

    <section class="bg-light sec-padd-top sec-padd-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="sticky-card" style="position: sticky; top: 100px;">
                        <div class="list-group">

                            <a href="{{ route('contact-us-gulalwadi') }}" class="list-group-item location-card">
                                <h2 class="mb-1 fw-semibold h5">Gulalwadi – Mumbai</h2>
                                <p class="mb-0 small">Bldg. No. 36/40, Hinglaj Bhavan, Kika Street</p>
                            </a>

                            <a href="{{ route('contact-us-khetwadi') }}" class="list-group-item location-card">
                                <h2 class="mb-1 fw-semibold h5">Khetwadi – Mumbai</h2>
                                <p class="mb-0 small">6/A, Ground Floor, Rajwanti Mansion</p>
                            </a>

                            <a href="{{ route('contact-us-kamatipura') }}" class="list-group-item location-card">
                                <h2 class="mb-1 fw-semibold h5">Kamatipura – Mumbai</h2>
                                <p class="mb-0 small">95/95A, Dawood Baug, Sukhlaji Street</p>
                            </a>

                            <a href="{{ route('contact-us-darukhana') }}" class="list-group-item location-card mb-0">
                                <h2 class="mb-1 fw-semibold h5">Darukhana – Mumbai</h2>
                                <p class="mb-0 small">92E, Plot No. 3, New Tank Bunder, Reay Road</p>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3773.4404691355185!2d72.82619187351122!3d18.95614506718077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sMoksh%20Tubes!5e0!3m2!1sen!2sin!4v1759824406817!5m2!1sen!2sin"
                        width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!--Start contact form area-->
    <section class="contact-form-area sec-padd-top">
        <div class="container">
            <div class="section-title text-center">
                <h2>Get in <span class="thm-color">Touch</span></h2>
                <p>Let’s forge a connection — contact our team today. </p>
                <!-- ✅ Added Benefit Text below heading -->
                <p class="text-success fw-semibold mt-2">✅ Get quote within 24 hours – Global delivery available.</p>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <div class="contact-form shadow-sm p-4 bg-white rounded">
                        <form id="contact-form" name="contact_form" class="default-form" action="inc/sendmail.php"
                            method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="form_name" placeholder="Your Name*" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="form_email" placeholder="Your Mail*" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="form_phone" placeholder="Phone">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="form_subject" placeholder="Subject">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <textarea name="form_message" placeholder="Your Message.." required></textarea>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-12 d-flex flex-wrap align-items-center justify-content-between">
                                    <button class="thm-btn bg-clr1" type="submit" data-loading-text="Please wait...">Send
                                        Message</button>

                                    <!-- ✅ WhatsApp CTA -->
                                    {{-- <a href="https://wa.me/919769584950" target="_blank"
                                        class="btn btn-success mt-3 mt-md-0">
                                        💬 Chat on WhatsApp
                                    </a> --}}
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
                        <ul class="">
                            <li>
                                <div class="iocn-holder">
                                    <span class="flaticon-web-page-home"></span>
                                </div>
                                <div class="text-holder">

                                    <h3 class="h6">Hinglaj Bhavan, Gulalwadi</h3>
                                    <p>Mumbai, Maharashtra. 400004</p>
                                </div>
                            </li>
                            <li>
                                <div class="iocn-holder">
                                    <span class="icon-technology-1"></span>
                                </div>
                                <div class="text-holder">
                                    <h3 class="h6">Call Us On</h3>
                                    <p>+91 97695 84950</p>
                                </div>
                            </li>
                            <li>
                                <div class="iocn-holder">
                                    <span class="icon-letter-1"></span>
                                </div>
                                <div class="text-holder">
                                    <h3 class="h6">Mail Us @</h3>
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

    <!-- ✅ Schema Markup for SEO -->

@endsection

@section('extrajs')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Moksh Tubes & Fittings LLP",
        "url": "https://www.mokstubes.com",
        "logo": "https://www.mokstubes.com/assets/images/logo.png",
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+91-97695-84950",
            "contactType": "Customer Service",
            "email": "info@mokstubes.com",
            "areaServed": "Worldwide",
            "availableLanguage": ["English", "Hindi"]
        }
    }
    </script>

@endsection