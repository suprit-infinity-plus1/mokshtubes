@extends('layouts.master')

@section('title', 'Special Steel Grades Sheets, Plates & Coils | Moksh Tubes LLP')
@section('meta_description', 'High quality Special Steel Grades including High Manganese MN13 Grade, Corten A, and Corten B (IRSM 41-97).')
@section('canonical', url()->current())

@section('content')
<section class="sec-padd-top sec-padd-bottom bg-white">
    <div class="container">
        <div class="section-title center mb-5">
            <h2 class="fw-bold" style="color: #174268;">Special Steel Grades</h2>
            <p class="text-center">Browse our comprehensive range of Special Steel Grades sheets, plates, and coils.</p>
        </div>

        <div class="row g-4">
            <!-- High Manganese MN13 Grade -->
            <div class="col-12 col-sm-6 col-lg-4">
                <a href="{{ route('products.sheets-plates-coils.item', ['category' => 'special-steel-grades', 'slug' => 'high-manganese-mn13']) }}" class="text-decoration-none d-block h-100">
                    <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                        style="border-color: #db7227; transition: 0.3s;">
                        <img src="https://placehold.co/550x350"
                            alt="High Manganese MN13 Grade" class="img-fluid rounded mb-3"
                            style="border-radius: 8px;">
                        <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                            style="background-color: #174268; color: #fff; display: inline-block;">
                            High Manganese MN13 Grade
                        </h6>
                    </div>
                </a>
            </div>

            <!-- Corten A -->
            <div class="col-12 col-sm-6 col-lg-4">
                <a href="{{ route('products.sheets-plates-coils.item', ['category' => 'special-steel-grades', 'slug' => 'corten-a']) }}" class="text-decoration-none d-block h-100">
                    <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                        style="border-color: #db7227; transition: 0.3s;">
                        <img src="https://placehold.co/550x350"
                            alt="Corten A" class="img-fluid rounded mb-3"
                            style="border-radius: 8px;">
                        <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                            style="background-color: #174268; color: #fff; display: inline-block;">
                            Corten A
                        </h6>
                    </div>
                </a>
            </div>

            <!-- Corten B (IRSM 41-97) -->
            <div class="col-12 col-sm-6 col-lg-4">
                <a href="{{ route('products.sheets-plates-coils.item', ['category' => 'special-steel-grades', 'slug' => 'corten-b']) }}" class="text-decoration-none d-block h-100">
                    <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                        style="border-color: #db7227; transition: 0.3s;">
                        <img src="https://placehold.co/550x350"
                            alt="Corten B (IRSM 41-97)" class="img-fluid rounded mb-3"
                            style="border-radius: 8px;">
                        <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                            style="background-color: #174268; color: #fff; display: inline-block;">
                            Corten B (IRSM 41-97)
                        </h6>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
