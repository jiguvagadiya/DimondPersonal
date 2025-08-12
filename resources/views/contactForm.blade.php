@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="bg-dark text-white py-5 text-center shadow">
        <div class="container">
            <h1 class="display-5 fw-bold">Contact Us</h1>
            <p class="lead">We’re here to assist you with all your diamond needs.</p>
        </div>
    </section>

    <!-- Contact Info + Form -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4">
                <!-- Contact Info Cards -->
                <div class="col-md-6">
                    <div class="p-4 bg-white rounded shadow-sm mb-4">
                        <h5 class="fw-bold text-primary mb-3"><i class="bi bi-envelope-fill me-2"></i>Email Us</h5>
                        <p class="text-muted mb-0">contact@diamondsite.com</p>
                    </div>
                    <div class="p-4 bg-white rounded shadow-sm mb-4">
                        <h5 class="fw-bold text-primary mb-3"><i class="bi bi-telephone-fill me-2"></i>Call Us</h5>
                        <p class="text-muted mb-0">+91 12345 67890</p>
                    </div>
                    <div class="p-4 bg-white rounded shadow-sm">
                        <h5 class="fw-bold text-primary mb-3"><i class="bi bi-geo-alt-fill me-2"></i>Visit Us</h5>
                        <p class="text-muted mb-0">123, Diamond Street, Surat, Gujarat, India</p>
                    </div>
                </div>

                <!-- Contact Form (Optional) -->
                <div class="col-md-6">
                    <div class="bg-white p-4 rounded shadow-sm">
                        <h5 class="fw-bold text-primary mb-4">Send a Message</h5>
                       
                        <form action="{{ route('contact.us.store') }}" id="contactUSForm" method="POST">
                            @csrf
                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                            <div class="mb-3">
                                <input type="text" class="form-control" name="name" placeholder="Your Name"  value="{{ old('name') }}" required>
                                 @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" name="email" placeholder="Your Email"  value="{{ old('email') }}" required>
                                 @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <input type="phone" class="form-control" name="phone" placeholder="Your Phone"  value="{{ old('phone') }}" required>
                                 @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" name="message" rows="4" placeholder="Your Message"  value="{{ old('message') }}" required></textarea>
                                 @error('message') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional Styling -->
    <style>
        .shadow-sm:hover {
            box-shadow: 0 0.75rem 1.25rem rgba(0, 0, 0, 0.15) !important;
            transition: 0.3s ease;
        }
    </style>
@endsection
