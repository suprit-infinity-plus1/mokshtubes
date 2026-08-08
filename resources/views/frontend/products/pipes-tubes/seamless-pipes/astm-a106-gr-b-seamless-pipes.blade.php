@extends('layouts.master')
@section('title', 'ASTM A106 Gr B Seamless Pipes | Moksh Tubes')
@section('meta_description', 'ASTM A106 Grade B Seamless Pipes – high-pressure carbon steel pipes for high-temperature
    service. Available in various sizes and schedules.')
@section('meta_keywords', 'ASTM A106 Gr B, seamless pipes, carbon steel pipes, high pressure pipes, seamless carbon
    steel')
@section('og_image', asset('assets/images/product/seamless-pipes.webp'))
@section('og_type', 'product')
@section('content')

    {{-- Breadcrumb --}}
    <section class="breadcrumb-area" style="background-image: url({{ asset('assets/images/product/seamless-pipes.webp') }});">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>ASTM A106 Grade B Seamless Pipes</h1>
                </div>
            </div>
        </div>
    </section>

    {{-- Coming Soon Section --}}
    <section class="sec-padd-top sec-padd-bottom" style="min-height: 60vh; display: flex; align-items: center;">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-7 col-md-9">

                    <div
                        style="
                        background: linear-gradient(135deg, #f8faff 0%, #eef3fb 100%);
                        border: 2px solid #e0e8f7;
                        border-radius: 20px;
                        padding: 60px 40px;
                        box-shadow: 0 8px 40px rgba(23,66,104,0.10);
                    ">
                        {{-- Icon --}}
                        <div style="font-size: 72px; line-height: 1; margin-bottom: 20px;">⚙️</div>

                        <h2 class="fw-bold mb-3" style="color: #174268; font-size: 2.2rem;">Coming Soon</h2>

                        <p class="mb-4" style="color: #555; font-size: 1.05rem; line-height: 1.7;">
                            We are currently preparing the detailed product page for
                            <strong style="color: #db7227;">ASTM A106 Grade B Seamless Pipes</strong>.
                            This page will include full specifications, size charts, and technical data sheets.
                        </p>

                        <div
                            style="
                            background: #fff;
                            border-radius: 12px;
                            padding: 20px 28px;
                            display: inline-block;
                            border: 1.5px solid #e0e8f7;
                            margin-bottom: 32px;
                            text-align: left;
                        ">
                            <p class="mb-1" style="color: #174268; font-weight: 600;">Quick Facts:</p>
                            <ul class="mb-0" style="color: #555; padding-left: 18px; line-height: 1.9;">
                                <li>Standard: ASTM A106 Grade B</li>
                                <li>Type: Seamless Carbon Steel Pipe</li>
                                <li>Applications: High-temperature, high-pressure service</li>
                                <li>OD: ¼" to 24" NB</li>
                            </ul>
                        </div>

                        <div class="d-flex flex-wrap gap-3 justify-content-center">
                            <a href="{{ url('products/pipes-tubes/seamless-pipes') }}" class="btn"
                                style="background:#174268; color:#fff; padding:12px 28px; border-radius:8px; font-weight:600; text-decoration:none;">
                                ← Back to Seamless Pipes
                            </a>
                            <a href="{{ route('contact-us') }}" class="btn"
                                style="background:#db7227; color:#fff; padding:12px 28px; border-radius:8px; font-weight:600; text-decoration:none;">
                                Contact Us for Enquiry
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Datasheet Download -->
    <section class="sec-padd-bottom bg-light">
        <div class="datasheet-download px-4 text-center">
            <h3 class="mb-3" style="color:#174268;">Download ASTM A106 Gr B Seamless Pipes Datasheet</h3>
            <p class="mb-3">
                Get the complete ASTM A106 Gr B Seamless Pipes datasheet with chemical composition,
                mechanical properties, heat treatment details, and applications.
                Enter your email to receive the PDF instantly.
            </p>

            <!-- Lead Capture Form -->
            <form id="leadForm" method="POST" action="{{ route('lead.capture') }}" class="mb-3">
                @csrf

                <input type="hidden" name="page_path" value="{{ $slug }}">

                <div class="row justify-content-center">
                    <div class="col-md-6 mb-2">
                        <input type="email" name="email" required class="form-control p-3"
                            placeholder="Enter your email address">
                    </div>

                    <div class="col-md-3 mb-2">
                        <button type="submit" class="btn btn-lg w-100 text-white"
                            style="background-color:#db7227; border-radius:8px;">
                            Get Datasheet
                        </button>
                    </div>
                </div>
            </form>

            @if (session('success'))
                <div class="alert alert-success mt-3">
                    {{ session('success') }}
                </div>
            @endif

            <p class="small text-muted">
                We respect your privacy. Your email will only be used to send the datasheet.
            </p>
        </div>
    </section>
@endsection
