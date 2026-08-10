@extends('layouts.master')
@section('title', 'Datasheet Not Found - Moksh Tubes & Fittings LLP')
@section('content')
    <!--Start breadcrumb area-->
    <!-- <section class="breadcrumb-area" style="background-color: #174268; padding: 60px 0;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1 class="text-white">Datasheet Not Found</h1>
                </div>
            </div>
        </div>
    </section> -->

    <section class="sec-padd-top sec-padd-bottom bg-light" style="min-height: 50vh; display: flex; align-items: center;">
        <div class="container text-center py-5">
            <div class="mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="#dc3545" class="bi bi-file-earmark-x" viewBox="0 0 16 16">
                    <path d="M6.854 7.146a.5.5 0 1 0-.708.708L7.293 9l-1.147 1.146a.5.5 0 0 0 .708.708L8 9.707l1.146 1.147a.5.5 0 0 0 .708-.708L8.707 9l1.147-1.146a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146z"/>
                    <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                </svg>
            </div>
            <h2 class="fw-bold mb-3" style="color: #174268;">Oops! Datasheet Unavailable</h2>
            <p class="fs-5 text-muted mb-4">
                We're sorry, but the requested datasheet could not be found or is currently being updated.
            </p>
            <div class="alert alert-info d-inline-block shadow-sm p-4" style="border-radius: 12px; border-left: 5px solid #db7227; background-color: #fff; max-width: 600px;">
                <h5 class="mb-2" style="color: #db7227;"><i class="bi bi-info-circle-fill me-2"></i>Rest Assured!</h5>
                <p class="mb-0 fs-6 text-dark">
                    Our team has been notified about your request. We will manually check the documents and <strong>connect with you within 24 hours</strong> with the required information.
                </p>
            </div>
            <div class="mt-5">
                <a href="{{ route('index') }}" class="btn btn-lg text-white px-5 py-3 shadow-sm" style="background-color:#db7227; border-radius:8px; font-weight: 500; transition: all 0.3s ease;">
                    Return to Homepage
                </a>
            </div>
        </div>
    </section>
@endsection
