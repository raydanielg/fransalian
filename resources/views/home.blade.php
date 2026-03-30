@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <h1>Welcome to Fransalian School</h1>
        <p>A leading primary day school committed to providing quality education, fostering integrity, and nurturing the holistic growth of every child in Dar es Salaam.</p>
        <div class="hero-btns">
            <a href="#" class="btn btn-primary btn-lg px-4 py-2" style="background-color: var(--accent-blue); border: none;">Learn More</a>
            <a href="{{ route('login') }}" class="btn btn-outline-light btn-lg px-4 py-2">Student Portal</a>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section-title text-start">
                    <h2>About Our School</h2>
                    <div class="divider ms-0"></div>
                </div>
                <p>Fransalian School Bombambili is a Primary Day School owned and managed by the Missionary Society of St. Francis de Sales (Fransalians). Founded on principles of excellence, we aim to provide a nurturing environment where children can excel academically and socially.</p>
                <p>Our curriculum is designed to challenge students while providing the support they need to succeed in an ever-changing world.</p>
                <div class="mt-4">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fas fa-check-circle text-primary me-2"></i>
                        <span>Qualified and experienced teaching staff</span>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <i class="fas fa-check-circle text-primary me-2"></i>
                        <span>Modern learning facilities and environment</span>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <i class="fas fa-check-circle text-primary me-2"></i>
                        <span>Focus on moral and spiritual growth</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0">
                <img src="https://images.unsplash.com/photo-1577891729319-f4871c674d01?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="School Environment" class="img-fluid rounded-3 shadow">
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision Section -->
<section class="section-padding">
    <div class="container">
        <div class="section-title">
            <h2>Our Core Values</h2>
            <div class="divider"></div>
        </div>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="feature-card text-center">
                    <div class="feature-icon mx-auto">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3>Our Mission</h3>
                    <p>To contribute to the integral growth of the pupil intellectually, emotionally and physically. We empower students to appreciate truth, peace, and justice.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="feature-card text-center">
                    <div class="feature-icon mx-auto">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Our Vision</h3>
                    <p>To develop the realization of national identity, respect, equality and cultural values. We prepare pupils to contribute to a better world through mental and physical work.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="section-padding pb-4">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4">
                <img src="{{ asset('cropped-cropped-school_emblem-1-removebg-preview.png') }}" alt="Footer Logo" class="footer-logo">
                <p class="text-white-50 mt-3">Fransalian School Bombambili is dedicated to providing quality education under the guidance of the Missionary Society of St. Francis de Sales.</p>
                <div class="d-flex gap-3 mt-4">
                    <a href="#" class="text-white fs-5"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-white fs-5"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white fs-5"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-2 footer-links">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Admission</a></li>
                    <li><a href="#">Fees Structure</a></li>
                </ul>
            </div>
            <div class="col-lg-3 footer-links">
                <h4>School Portal</h4>
                <ul>
                    <li><a href="{{ route('login') }}">Parent Login</a></li>
                    <li><a href="{{ route('login') }}">Staff Portal</a></li>
                    <li><a href="{{ route('register') }}">Admission Portal</a></li>
                    <li><a href="#">Student Results</a></li>
                </ul>
            </div>
            <div class="col-lg-3 footer-links">
                <h4>Contact Info</h4>
                <ul class="text-white-50">
                    <li><i class="fas fa-map-marker-alt me-2"></i> Bombambili, Gongo la Mboto, Dar es Salaam</li>
                    <li><i class="fas fa-phone me-2"></i> 0784 377 306, 0758 204 865</li>
                    <li><i class="fas fa-envelope me-2"></i> fransalianb2@gmail.com</li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© {{ date('Y') }} Fransalian School Bombambili. All Rights Reserved. Managed by Missionary Society of St. Francis de Sales.</p>
        </div>
    </div>
</footer>
@endsection
