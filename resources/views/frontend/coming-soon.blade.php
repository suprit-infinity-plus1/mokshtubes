@extends('layouts.master')

@section('title', $title ?? 'Coming Soon | Moksh Tubes LLP')
@section('meta_description', ($itemName ?? 'This product') . ' for ' . ($categoryName ?? 'this category') . ' is coming soon to Moksh Tubes LLP.')
@section('canonical', url()->current())

@section('content')
<section class="sec-padd-top sec-padd-bottom">
    <div class="container text-center py-5">
        <div class="mb-4">
            <i class="bi bi-tools" style="font-size: 4rem; color: #174268;"></i>
        </div>
        <h2 class="fw-bold mb-3" style="color: #174268;">Coming Soon</h2>
        <p class="lead mb-4">
            We are currently updating our inventory and specifications for <strong>{{ $itemName }}</strong> in our <strong>{{ $categoryName }}</strong> category.
        </p>
        <p>
            Please check back later, or <a href="{{ route('contact-us') }}" class="text-primary text-decoration-underline">contact us</a> for immediate inquiries.
        </p>
        <div class="mt-5">
            <a href="{{ $backUrl }}" class="btn btn-primary px-4 py-2" style="background-color: #174268; border-color: #174268;">
                {{ $backText }}
            </a>
        </div>
    </div>
</section>
@endsection
