@extends('layouts.master')
@section('title', 'Moksh Tubes || Contact Us')

@section('content')

    <div class="container py-5">
        <!-- Title in center -->
        <h1 class="text-center mb-5 fw-semibold my-4 title-color">Gulalwadi Mumbai </h1>

        <!-- Two column layout -->
        <div class="row">
            <!-- Left Content (60%) -->
            <!-- Left Content (60%) -->
            <div class="col-md-5 content-left">
                <h4 class="fs-5 fw-semibold my-4">Visiting Address</h4>
                <p class="my-3b fs-5" style="max-width: 350px">
                    Office No. 20, 2nd Floor, Bldg. No. 36/40, Hinglaj Bhavan, Kika Street, Gulalwadi, Mumbai- 400 004.
                </p>

                <h5 class="fs-5 fw-semibold mt-4 mb-2">Contact Details</h5>

                <p class="mb-2">
                    📞 <a href="tel:+919999999999" class="text-decoration-none text-dark fw-medium">+91 99999 99999</a>
                </p>
                <p>
                    📧 <a href="mailto:info@mokshtubes.com"
                        class="text-decoration-none text-dark fw-medium">info@mokshtubes.com</a>
                </p>
                <h2 class="fs-5 fw-semibold mt-4 mb-2">Get Direction</h2>

                <p class=" fs-5 mb-2">18°57'22"N 72°49'43"E</p>

                <p>
                    <a href="https://maps.app.goo.gl/7WYkcCj9HwC5cK267" target="_blank" class="text-primary fs-4"
                        title="Open in Google Maps">
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
@endsection
