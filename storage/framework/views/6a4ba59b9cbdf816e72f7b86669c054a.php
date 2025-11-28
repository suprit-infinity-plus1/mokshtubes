<?php $__env->startSection('title', 'Moksh Tubes || Contact Us'); ?>

<?php $__env->startSection('content'); ?>

    <section class="bg-light sec-padd-bottom">
        <div class="container py-5">
            <!-- Title in center -->
            <h1 class="text-center mb-5 fw-semibold my-4 title-color">Kamatipura Mumbai </h1>

            <!-- Two column layout -->
            <div class="row">
                <!-- Left Content (60%) -->
                <!-- Left Content (60%) -->
                <div class="col-md-5 content-left">
                    <h2 class="fs-5 fw-semibold my-4">Visiting Address</h2>
                    <p class="my-3b fs-5" style="max-width: 350px">
                        Ground Floor, 4, 95/95A, Dawood Baug, Sukhlaji Street, Kamatipura, Mumbai, Maharashtra- 400 008.
                    </p>

                    <h2 class="fs-5 fw-semibold mt-4 mb-2">Contact Details</h5>

                    <p class="mb-2">
                        📞 <a href="tel:+919999999999" class="text-decoration-none text-dark fw-medium">+91 99999 99999</a>
                    </p>
                    <p>
                        📧 <a href="mailto:info@mokshtubes.com"
                            class="text-decoration-none text-dark fw-medium">info@mokshtubes.com</a>
                    </p>
                    <h2 class="fs-5 fw-semibold mt-4 mb-2">Get Direction</h2>

                    <p class=" fs-5 mb-2">18°57'54"N 72°49'28"E</p>

                    <p>
                        <a href="https://maps.app.goo.gl/4KJZX3MP9LG36EdU9" target="_blank" class="text-primary fs-4"
                            title="Open in Google Maps">
                            <i class="bi bi-geo-alt-fill"></i>
                        </a>
                    </p>




                </div>


                <!-- Right Content: Map -->
                <div class="col-md-7">
                    <div class="ratio ratio-4x3">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3773.258712168042!2d72.82017916932202!3d18.964178416198504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7ce14d5cd95ab%3A0xab56d066ee0361ea!2sSukhlaji%20Marg%2C%20Dawood%20Baug%2C%20Dalal%20Estate%2C%20Kamathipura%2C%20Mumbai%2C%20Maharashtra%20400008!5e0!3m2!1sen!2sin!4v1759583909272!5m2!1sen!2sin"
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
                                    
                                    <span class="flaticon-web-page-home"></span>
                                </div>
                                <div class="text-holder">

                                    <h3 class="h6">Dawood Baug, Sukhlaji Street, Kamatipura,</h3>
                                    <p> Mumbai, Maharashtra- 400 008</p>
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
    <!--End contact form area-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\mokshtube-new\mokshtube\resources\views/frontend/kamatipura.blade.php ENDPATH**/ ?>