@extends('layouts.app')

@section('hero')
    <div class="bg-dark text-white py-5 text-center shadow-sm">
        <div class="container">
            <h1 class="display-4 fw-bold">All Diamond Categories</h1>
            <p class="lead mb-0">Explore our finest diamond collections by category</p>
        </div>
    </div>
@endsection

@section('content')
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

   <style>
    .hover-shadow:hover {
        box-shadow: 0 0.8rem 1.5rem rgba(0, 0, 0, 0.15);
        transform: translateY(-4px);
        transition: all 0.3s ease-in-out;
    }

    .transition {
        transition: all 0.3s ease-in-out;
    }

    .swiper-container {
        width: 100%;
        height: 70vh;
        margin-bottom: 2rem;
        position: relative;
    }

    .swiper-slide img {
        width: 100%;
        height: 100vh;
        object-fit: cover;
        display: block;
    }

    .swiper-button-next,
    .swiper-button-prev {
        color: #fff;
        width: 40px; /* Increased size */
        height: 40px; /* Increased size */
        font-size: 28px; /* Icon size */
        border-radius: 50%;
        background-color: rgba(0, 0, 0, 0.4);
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background-color 0.3s ease, transform 0.3s ease;
        z-index: 10;
    }

    .swiper-button-next:hover,
    .swiper-button-prev:hover {
        background-color: rgba(0, 0, 0, 0.7);
        transform: scale(1.1); /* Slight hover zoom */
    }

    .swiper-button-next::after,
    .swiper-button-prev::after {
        font-size: 28px; /* Bigger arrow icons */
    }

    .swiper-pagination-bullet {
        background-color: #fff;
        opacity: 0.8;
    }

    .swiper-pagination-bullet-active {
        background-color: #0d6efd;
    }

    .card-img-top {
        height: 180px;
        object-fit: cover;
        border-top-left-radius: 0.5rem;
        border-top-right-radius: 0.5rem;
    }
</style>

    <div class="container-fluid px-0">
        <!-- Swiper Slider -->
        <div class="swiper swiper-container mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{ asset('images/slide1.jpeg') }}" alt="Diamond Quote Slide">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/slide2.jpeg') }}" alt="Ratnvaya Slide">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/slide3.jpeg') }}" alt="Diamond Group Slide">
                </div>
            </div>

            <!-- Controls -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination mt-3"></div>
        </div>
    </div>

    <div class="container py-5">
        <!-- Category Cards -->
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="card h-100 border-0 shadow-sm hover-shadow transition">
                        @if ($category->image)
                            <img src="{{ asset('images/' . $category->image) }}" alt="{{ $category->name }}"
                                class="card-img-top">
                        @else
                            <img src="{{ asset('images/no-image.png') }}" alt="No Image" class="card-img-top">
                        @endif

                        <div class="card-body d-flex flex-column text-center">
                            <h5 class="card-title text-primary fw-bold mb-2">{{ $category->name }}</h5>
                            <p class="card-text text-muted small">{{ $category->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <script>
        const swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 0,
            loop: true,
            speed: 800,
            effect: 'slide',
            grabCursor: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            }
        });
    </script>
@endsection
