@extends('layouts.master')

@section('title', 'Materials | Moksh Tubes')

@section('content')

<!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Materials</h1>
                </div>
            </div>
        </div>
    </section>

    <!--End breadcrumb area-->


<section class="sec-padd-top sec-padd-bottom bg-light">
    <div class="container">
        <div class="section-title center">
                <h2>Explore Our Materials</h2>
            </div>

        <div class="row g-4">
            @php
                $materials = [
                    'Nickel Alloys',
                    'Titanium Alloys',
                    'Duplex / Super Duplex',
                    'Austenitic Stainless Steel',
                    'High Strength Stainless Steel',
                    'Super Austenitic Stainless Steel',
                    'Carbon Steel',
                    'Engineering Steels',
                    'Aluminium Alloys',
                    'Copper Alloys',
                    'Zirconium',
                    'Tantalum',
                    'Special Alloys',
                    'Haynes Superalloys',
                ];
            @endphp

           @foreach($materials as $material)
    @php
        $slug = Str::slug($material);
        $link = $slug === 'nickel-alloys' ? url('/materials/nickel-alloys') : '#';
    @endphp

    <div class="col-12 col-md-4 col-lg-3">
        <a href="{{ $link }}" class="text-decoration-none d-block h-100">
            <div class="material-card">
                <img src="https://placehold.co/370x190/db7227/fef5f0?text=370x190&font=roboto" alt="{{ $material }}">
                <h5>{{ $material }}</h5>
            </div>
        </a>
    </div>
@endforeach

        </div>
    </div>
</section>


@endsection
