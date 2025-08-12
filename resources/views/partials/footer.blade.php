<footer class="bg-dark text-white mt-5 pt-5 border-top shadow-lg">
    <style>
        .footer-link {
            color: rgba(255, 255, 255, 0.6);
            text-decoration: none;
            display: block;
            padding: 0.25rem 0;
            transition: color 0.2s ease-in-out;
        }

        .footer-link:hover {
            color: #ffffff;
            text-decoration: underline;
        }

        .social-icon {
            color: #ffffff;
            font-size: 1.4rem;
            margin-right: 15px;
            transition: color 0.3s ease-in-out;
        }

        .social-icon:hover {
            color: #0d6efd;
        }
    </style>

    <div class="container pb-5">
        <div class="row gy-4">

            <!-- Company Info -->
            <div class="col-md-4 col-12">
                <h5 class="text-uppercase mb-3">DiamondSite</h5>
                <p class="text-white-50">
                    Discover timeless elegance with our curated collection of diamonds and fine jewelry.
                    Visit our store or explore online to find your perfect sparkle.
                </p>
            </div>

            <!-- Navigation Links -->
            <div class="col-md-4 col-6">
                <h5 class="text-uppercase mb-3">Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('home') }}" class="footer-link">Home</a></li>
                    <li><a href="{{ route('categories') }}" class="footer-link">Categories</a></li>
                    <li><a href="{{ route('about') }}" class="footer-link">About</a></li>
                    <li><a href="{{ route('contact') }}" class="footer-link">Contact</a></li>
                </ul>
            </div>

            <!-- Social & Contact -->
            <div class="col-md-4 col-6">
                <h5 class="text-uppercase mb-3">Connect With Us</h5>
                <div class="d-flex mb-3">
                    <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="social-icon"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="social-icon"><i class="bi bi-envelope"></i></a>
                </div>
                <p class="mb-0 text-white-50">Email: <a href="mailto:support@diamondsite.com" class="text-white-50 text-decoration-none">support@diamondsite.com</a></p>
            </div>

        </div>
        <hr class="border-secondary my-4">
        <div class="text-center text-white-50 small">
            &copy; {{ date('Y') }} DiamondSite. All rights reserved.
        </div>
    </div>
</footer>
