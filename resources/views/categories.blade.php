@extends('layouts.app')

@section('hero')
<div class="bg-dark text-white py-5 text-center shadow-sm">
    <div class="container">
        <h1 class="display-5 fw-bold">All Diamond Categories</h1>
        <p class="lead">Explore our finest diamond collections by category</p>
    </div>
</div>

<!-- Optional custom styling -->
<style>
    .hover-shadow:hover {
        box-shadow: 0 0.8rem 1.5rem rgba(0, 0, 0, 0.15);
        transition: box-shadow 0.3s ease-in-out;
    }
    .transition {
        transition: all 0.3s ease-in-out;
    }
</style>
@endsection

@section('content')
<div class="container py-5">
    <div class="row">
        @foreach ($categories as $category)
            <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
                <div class="card h-100 border-0 shadow-sm hover-shadow transition">
                    
                    @if($category->image)
                        <img 
                            src="{{ asset('images/' . $category->image) }}"     
                            alt="{{ $category->name }}" 
                            class="card-img-top" 
                            style="height: 180px; object-fit: cover;"
                        >
                    @else
                        <img 
                            src="{{ asset('images/no-image.png') }}" 
                            alt="No Image" 
                            class="card-img-top" 
                            style="height: 180px; object-fit: cover;"
                        >         
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
@endsection
