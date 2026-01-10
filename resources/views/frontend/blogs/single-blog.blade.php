@extends('layouts.master')

@section('title', $blog->title)
@section('meta_description', $blog->meta_description ?? '')
@section('meta_keywords', $blog->meta_keywords ?? '')
@section('og_image', asset('storage/' . $blog->cover_image))
@section('og_type', 'article')
@section('content')

    <!-- Start breadcrumb area -->
    <section class="breadcrumb-area" style="background-image: url({{ asset('storage/' . $blog->cover_image) }});">
        <div class="container text-center">
            <h1>{{ $blog->title }}</h1>
        </div>
    </section>
    <!-- End breadcrumb area -->


    <section id="blog-area" class="blog-with-sidebar-area blog-single-area bg-light">
        <div class="container">
            <div class="row">

                <!-- Blog content -->
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <div class="blog-post">
                        <div class="single-blog-post">
                            {{-- {{ dd($blog) }} --}}
                            <!-- Featured Image -->
                            @if ($blog->cover_image)
                                <div class="img-holder mb-4">
                                    <img src="{{ asset('storage/' . $blog->cover_image) }}" alt="{{ $blog->title }}"
                                        class="img-fluid w-100">
                                </div>
                            @endif

                            <!-- Title & Meta -->
                            <div class="text-holder">
                                <div class="blog-title text-start">
                                    <h2>{{ $blog->title }}</h2>
                                </div>

                                {{-- Display content directly (keeps your HTML tags) --}}
                                {!! $blog->content !!}
                                {{-- {{ dd($blog->faqs) }} --}}
                                @if ($blog->faqs->count())
                                    <!--Start faq content area-->
                                    <section class="faq-content-area">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="accordion-box">
                                                        <div class="blog-title text-start">
                                                            <h2>FAQ's</h2>
                                                        </div>
                                                        <!--Start single accordion box-->
                                                        @foreach ($blog->faqs as $index => $faq)
                                                            <div class="accordion accordion-block">
                                                                <div class="accord-btn ">
                                                                    <h4>{{ $faq->question }}</h4>
                                                                </div>
                                                                <div class="accord-content">
                                                                    <p>
                                                                        {!! $faq->answer !!}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                        <!--End single accordion box-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                {{-- allBlogs --}}

                {{-- {{ dd($allBlogs->all()) }} --}}
                <div class="col-lg-3 col-md-12 col-sm-7 col-xs-12">
                    <div class="sidebar-wrapper">
                        <div class="container ">
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <h4 class="fw-bold mb-4">Products We Offer</h4>
                                    <ul class="list-unstyled mb-4">
                                        <li class="product-item mb-2">
                                            <a href="{{ route('products.pipes-tubes') }}" class="product-link">
                                                <i class="bi bi-box-seam me-2"></i> Pipes & Tubes
                                            </a>
                                        </li>
                                        <li class="product-item mb-2">
                                            <a href="{{ route('products.sheets-plates-coils') }}" class="product-link">
                                                <i class="bi bi-square me-2"></i> Sheets, Plates & Coils
                                            </a>
                                        </li>
                                        <li class="product-item mb-2">
                                            <a href="{{ route('products.bars-rods') }}" class="product-link">
                                                <i class="bi bi-diagram-3 me-2"></i> Bars & Rods
                                            </a>
                                        </li>
                                        <li class="product-item mb-2">
                                            <a href="{{ route('products.special-fabricated') }}" class="product-link">
                                                <i class="bi bi-tools me-2"></i> Special Fabricated
                                            </a>
                                        </li>
                                        <li class="product-item mb-2">
                                            <a href="{{ route('products.pipe-fittings-flanges-fasteners') }}"
                                                class="product-link">
                                                <i class="bi bi-nut me-2"></i> Pipe Fittings, Flanges & Fasteners
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <h4 class="fw-bold mb-4">Categories</h4>
                                    <ul class="list-unstyled mb-4">
                                        <li class="category-item mb-2">
                                            <a href="#" class="category-link">
                                                <i class="bi bi-building me-2"></i> Architecture Plans
                                            </a>
                                        </li>
                                        <li class="category-item mb-2">
                                            <a href="#" class="category-link">
                                                <i class="bi bi-hammer me-2"></i> Construction Projects
                                            </a>
                                        </li>
                                        <li class="category-item mb-2">
                                            <a href="#" class="category-link">
                                                <i class="bi bi-brush me-2"></i> Paintings
                                            </a>
                                        </li>
                                        <li class="category-item mb-2">
                                            <a href="#" class="category-link">
                                                <i class="bi bi-lightning-charge me-2"></i> Electrical Works
                                            </a>
                                        </li>
                                        <li class="category-item mb-2">
                                            <a href="#" class="category-link">
                                                <i class="bi bi-tools me-2"></i> Plumbing Works
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!--End single sidebar-->
                        <!--Start single sidebar-->
                        <div class="single-sidebar">
                            <div class="sec-title">
                                <h2>Recent Blogs</h2>
                            </div>
                            {{-- <ul class="recent-post">
                                @foreach ($allBlogs as $allBlog)
                                    {{ dd($allBlog) }}
                        <li>
                            <div class="img-holder">
                                <img src="{{ asset('assets/images/blogs/thumb/why-hastelloy-weighs-more-than-stainless-steel-thumb.webp') }}" alt="Awesome Image">
                                <div class="overlay-style-two">
                                    <div class="box">
                                        <div class="content">
                                            <a href="{{ route('blogs.why-hastelloy-weighs-more-than-stainless-steel') }}">
                                                <i class="fa fa-link" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="title-holder">
                                <a href="{{ route('blogs.why-hastelloy-weighs-more-than-stainless-steel') }}">
                                    <h5 class="post-title">
                                        Why Hastelloy Weighs More Than Stainless Steel
                                    </h5>
                                </a>
                                <h6 class="post-date">
                                    <i class="icon-calendar-with-spring-binder-and-date-blocks"></i>
                                    august 14, 2025
                                </h6>
                            </div>
                        </li>
                        @endforeach
                        </ul> --}}
                            <ul class="recent-post">
                                @foreach ($allBlogs as $allBlog)
                                    {{-- {{ dd($allBlog) }} --}}
                                    <li>
                                        <div class="img-holder">
                                            <img src="{{ asset('storage/' . $allBlog->cover_image) }}"
                                                alt="{{ $allBlog->title }}">
                                            <div class="overlay-style-two">
                                                <div class="box">
                                                    <div class="content">
                                                        <a href="{{ route('frontend.single-blog', $allBlog->slug) }}">
                                                            <i class="fa fa-link" aria-hidden="true"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title-holder">
                                            <a href="{{ route('frontend.single-blog', $allBlog->slug) }}">
                                                <h5 class="post-title">
                                                    {{ $allBlog->title }}
                                                </h5>
                                            </a>
                                            <h6 class="post-date">
                                                <i class="icon-calendar-with-spring-binder-and-date-blocks"></i>
                                                {{ \Carbon\Carbon::parse($allBlog->published_at)->format('F d, Y') }}
                                            </h6>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>

                        </div>
                        <!--End single sidebar-->

                        <div class="container my-5">
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <div class="card-body ">
                                        <!-- Heading -->
                                        <div class="section-title">
                                            <h2>Locate <span class="thm-color">Us</span></h2>
                                            {{-- <p>Let’s forge a connection — contact our team today.</p> --}}
                                        </div>

                                        <!-- Map -->
                                        <div class="mb-3 text-center">
                                            <iframe
                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3773.4406978634916!2d72.82619187387158!3d18.956134955727215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7cf9ee4261af1%3A0x57adb33b0f4c262!2sMoksh%20Tubes%20%26%20Fittings%20LLP!5e0!3m2!1sen!2sin!4v1759748667385!5m2!1sen!2sin"
                                                width="100%" height="200" style="border:0;" allowfullscreen=""
                                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>

                                        <!-- Contact Info -->
                                        <p class="mb-2"><i class="bi bi-envelope me-2 text-primary"></i>
                                            info@mokstubes.com</p>
                                        <p class="mb-2"><i class="bi bi-geo-alt me-2 text-danger"></i>
                                            <strong>Office Address:</strong> Hinglaj Bhavan, Gulalwadi Mumbai, Maharashtra.
                                            400004
                                        </p>
                                        <p class="mb-2"><i class="bi bi-geo-alt me-2 text-success"></i>
                                            <strong>Office Address:</strong> 6/A, Ground Floor, Rajwanti Mansion, Khetwadi
                                            Mumbai
                                        </p>
                                        <p class="mb-2"><i class="bi bi-geo-alt me-2 text-info"></i>
                                            <strong>Office Address:</strong> 95/95A, Dawood Baug, Sukhlaji Street,
                                            Kamatipura Mumbai
                                        </p>
                                        <p class="mb-2"><i class="bi bi-geo-alt me-2 text-danger"></i>
                                            <strong>Office Address:</strong> 92E, Plot No. 3, New Tank Bunder, Darukhana,
                                            Mumbai,
                                            Maharashtra- 400 010.
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Start contant form --}}
                        <section class="blog-contact-form">
                            <div class="section-title">
                                <h2>get in <span class="thm-color">touch</span></h2>
                                <p>Let’s forge a connection — contact our team today.</p>
                            </div>

                            <form id="contact-form" name="contact_form" class="default-form"
                                action="{{ url('sendmail') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <input class="m-1" type="text" name="form_name" placeholder="Your Name*"
                                            required="">
                                    </div>
                                    <div class="col-md-12">
                                        <input class="m-1" type="email" name="form_email" placeholder="Your Mail*"
                                            required="">
                                    </div>
                                    <div class="col-md-12">
                                        <input class="m-1" type="text" name="form_phone" placeholder="Phone">
                                    </div>
                                    <div class="col-md-12">
                                        <input class="m-1" type="text" name="form_subject" placeholder="Subject">
                                    </div>
                                    <div class="col-md-12">
                                        <textarea name="form_message" class="m-1" placeholder="Your Message.." required=""></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <input id="form_botcheck" name="form_botcheck" type="hidden" value="">
                                        <button class="thm-btn bg-clr1 m-1" type="submit"
                                            data-loading-text="Please wait...">
                                            send message
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </section>
                        {{-- End contant form --}}

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Contact CTA (Always visible) -->
    <section class="pt-4 mb-5 col-12">
        <div class="container">
            <div class="contact-cta-box">
                <h2>Contact Us</h2>
                <p>
                    At <strong>Moksh Tubes & Fittings LLP</strong>, we’re dedicated to making
                    your purchases seamless — offering expert advice, a wide inventory of
                    certified products, and global support for every order, large or small.
                </p>

                <!-- Call button -->
                <a href="javascript:void(0);" class="contact-cta-btn" data-bs-toggle="modal"
                    data-bs-target="#contactFormModal">
                    Get in Touch
                </a>
            </div>
        </div>
    </section>

@endsection

@section('extrajs')
    @if (!empty($blog->schema))
        {!! $blog->schema !!}
    @endif
@endsection
