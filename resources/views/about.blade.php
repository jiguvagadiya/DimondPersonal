@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="bg-dark text-white py-5 text-center shadow">
    <div class="container">
        <h1 class="display-4 fw-bold">About Us</h1>
        <p class="lead">Discover the brilliance behind our diamonds</p>
    </div>
</section>

<!-- Main Content -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            
            <!-- Image -->
            <div class="col-md-6 mb-4 mb-md-0">
              <img src="https://images.squarespace-cdn.com/content/v1/556af3c6e4b00a6a3d48cf64/1434763536456-FJ34HPEASEKY9SGV8LLW/ABOUT-US.jpg?format=1500w" alt="Diamond Collection" class="img-fluid rounded shadow">

            </div>

            <!-- Text -->
            <div class="col-md-6">
                <h3 class="fw-bold mb-3 text-primary">Who We Are</h3>
                <p class="text-muted">
                    Welcome to our Diamond Collection — where elegance meets excellence. Our mission is to offer handpicked, stunning diamond categories, including Gold, Platinum, and Wedding Specials that speak of luxury and love.
                </p>
                <p class="text-muted">
                    With years of experience in the diamond industry, we ensure quality, trust, and satisfaction for every customer. Our curated collections are designed to make your special moments shine brighter.
                </p>
                <a href="{{ route('contact') }}" class="btn btn-outline-primary mt-3">Contact Us</a>
            </div>

        </div>
    </div>
</section>

<!-- Core Values Section -->
<section class="py-5">
    <div class="container">
        <h4 class="text-center fw-bold mb-5">Why Choose Us</h4>
        <div class="row text-center g-4">
            <div class="col-md-4">
                <div class="p-4 bg-white rounded shadow-sm h-100">
                    <i class="bi bi-gem fs-1 text-primary"></i>
                    <h5 class="fw-bold mt-3">Premium Quality</h5>
                    <p class="text-muted">Only the finest, certified diamonds with perfect craftsmanship.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 bg-white rounded shadow-sm h-100">
                    <i class="bi bi-heart fs-1 text-danger"></i>
                    <h5 class="fw-bold mt-3">Trusted by Many</h5>
                    <p class="text-muted">We’ve built strong trust with thousands of happy customers.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 bg-white rounded shadow-sm h-100">
                    <i class="bi bi-star fs-1 text-warning"></i>
                    <h5 class="fw-bold mt-3">Timeless Designs</h5>
                    <p class="text-muted">Modern yet classic pieces perfect for every special occasion.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Optional Custom Styling -->
<style>
    .shadow-sm:hover {
        box-shadow: 0 0.75rem 1.5rem rgba(0, 0, 0, 0.15) !important;
        transition: all 0.3s ease-in-out;
    }
</style>

@endsection
