@extends('layouts.master')
@section('title', 'Moksh Tubes || Contact Us')

@section('extracss')
<style>
.bg-orange {
  background-color: #f4770c;
}

.icon-box {
  width: 48px;
  height: 48px;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50%;
  flex-shrink: 0;
}

.btn-gradient {
  background: linear-gradient(135deg, #f4770c, #ff8f38);
  color: white;
  border: none;
  transition: 0.3s ease;
  border-radius: 6px;
}
.btn-gradient:hover {
  background: linear-gradient(135deg, #e26200, #fa7813);
  color: white;
}
</style>
@endsection
@section('content')

    <!-- <section class="bg-light pb-5">

        <div class="container-fluid px-0">
            <div class="w-100 " style="height: 500px;">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3773.4420541005015!2d72.8278971!3d18.956075!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7cf9ee4261af1%3A0x57adb33b0f4c262!2sMoksh%20Tubes%20%26%20Fittings%20LLP!5e0!3m2!1sen!2sin!4v1750077034926!5m2!1sen!2sin"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>

        <div class="container pb-5" style="margin-top: -48px">

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold">Visiting Address</h5>
                            <p class="card-text fs-5 mt-3">
                                6/A, Ground Floor, Rajwanti Mansion, 4th Khetwadi, Mumbai, Maharashtra - 400 004.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold">Contact Details</h5>
                            <p class="card-text fs-5 mt-3 mb-2">
                                📞 <a href="tel:+919999999999" class="text-decoration-none text-dark fw-medium">+91 99999
                                    99999</a>
                            </p>
                            <p class="card-text fs-5">
                                📧 <a href="mailto:info@mokshtubes.com"
                                    class="text-decoration-none text-dark fw-medium">info@mokshtubes.com</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold">Get Direction</h5>
                            <p class="card-text fs-5 mt-3 mb-2">18°57'22"N 72°49'43"E</p>
                            <a href="https://maps.app.goo.gl/7WYkcCj9HwC5cK267" target="_blank"
                                class="btn btn-outline-primary d-inline-flex align-items-center gap-2">
                                <i class="bi bi-geo-alt-fill fs-5"></i> Open in Google Maps
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

<section class="bg-light py-5">
  <div class="container">
    <h2 class="text-center fw-semibold mb-5 title-color">Darukhana – Mumbai</h2>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
      
      <!-- Card 1 -->
      <div class="col">
        <div class="custom-info-card text-center p-4 h-100 border rounded shadow-sm">
          <div class="fs-2 text-orange mb-3"><i class="bi bi-geo-alt-fill"></i></div>
          <h5 class="fw-semibold mb-2">Visiting Address</h5>
          <p class="fs-6 mb-0">
            92E, Plot No. 3, New Tank Bunder, Reay Road, Mumbai – 400 010
          </p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col">
        <div class="custom-info-card text-center p-4 h-100 border rounded shadow-sm">
          <div class="fs-2 text-orange mb-3"><i class="bi bi-telephone-fill"></i></div>
          <h5 class="fw-semibold mb-2">Phone</h5>
          <p class="fs-6 mb-0">
            <a href="tel:+919999999999" class="text-decoration-none text-dark fw-medium">+91 99999 99999</a>
          </p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col">
        <div class="custom-info-card text-center p-4 h-100 border rounded shadow-sm">
          <div class="fs-2 text-orange mb-3"><i class="bi bi-envelope-fill"></i></div>
          <h5 class="fw-semibold mb-2">Email</h5>
          <p class="fs-6 mb-0">
            <a href="mailto:info@mokshtubes.com" class="text-decoration-none text-dark fw-medium">info@mokshtubes.com</a>
          </p>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col">
        <div class="custom-info-card text-center p-4 h-100 border rounded shadow-sm">
          <div class="fs-2 text-orange mb-3"><i class="bi bi-map-fill"></i></div>
          <h5 class="fw-semibold mb-2">Get Direction</h5>
          <p class="fs-6">18°57'22"N 72°49'43"E</p>
          <a href="https://maps.app.goo.gl/7WYkcCj9HwC5cK267" target="_blank"
             class="btn btn-orange btn-sm px-3">
            See Location
          </a>
        </div>
      </div>

    </div>
  </div>
</section>


<section class="contact-premium-section py-5 bg-light">
  <div class="container">
    <h2 class="text-center fw-bold mb-5 title-color">Darukhana – Mumbai</h2>

    <div class="row align-items-stretch g-4">
      
      <!-- Left Block: Info List -->
      <div class="col-lg-6">
        <div class="d-flex flex-column gap-4 h-100 justify-content-center">

          <!-- Address -->
          <div class="d-flex align-items-start gap-3">
            <div class="icon-box text-white bg-orange">
              <i class="bi bi-geo-alt-fill fs-4"></i>
            </div>
            <div>
              <h5 class="fw-semibold mb-1">Visiting Address</h5>
              <p class="mb-0">92E, Plot No. 3, New Tank Bunder, Reay Road, Mumbai – 400 010</p>
            </div>
          </div>

          <!-- Phone -->
          <div class="d-flex align-items-start gap-3">
            <div class="icon-box text-white bg-orange">
              <i class="bi bi-telephone-fill fs-4"></i>
            </div>
            <div>
              <h5 class="fw-semibold mb-1">Phone</h5>
              <a href="tel:+919999999999" class="text-decoration-none text-dark">+91 99999 99999</a>
            </div>
          </div>

          <!-- Email -->
          <div class="d-flex align-items-start gap-3">
            <div class="icon-box text-white bg-orange">
              <i class="bi bi-envelope-fill fs-4"></i>
            </div>
            <div>
              <h5 class="fw-semibold mb-1">Email</h5>
              <a href="mailto:info@mokshtubes.com" class="text-decoration-none text-dark">info@mokshtubes.com</a>
            </div>
          </div>

          <!-- Coordinates -->
          <div class="d-flex align-items-start gap-3">
            <div class="icon-box text-white bg-orange">
              <i class="bi bi-map-fill fs-4"></i>
            </div>
            <div>
              <h5 class="fw-semibold mb-1">Coordinates</h5>
              <p class="mb-0">18°57'22"N 72°49'43"E</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Block: CTA Box -->
      <div class="col-lg-6 d-flex">
        <div class="cta-card shadow-sm rounded p-5 text-center d-flex flex-column justify-content-center w-100">
          <h4 class="fw-semibold mb-3">Need Directions?</h4>
          <p class="mb-4">Open the exact location directly in Google Maps for hassle-free navigation.</p>
          <a href="https://maps.app.goo.gl/7WYkcCj9HwC5cK267" target="_blank"
             class="btn btn-gradient px-4 py-2 fw-semibold">
            <i class="bi bi-geo-alt-fill me-2"></i> See Location
          </a>
        </div>
      </div>

    </div>
  </div>
</section>



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
                            method="post" novalidate="novalidate">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="form_name" value="" placeholder="Your Name*" required=""
                                        aria-required="true">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="form_email" value="" placeholder="Your Mail*" required=""
                                        aria-required="true">
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

    


@endsection