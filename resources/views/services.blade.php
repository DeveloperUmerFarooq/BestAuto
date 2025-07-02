@extends('layouts.layout')
@section('title')
<title>Premium Oil Change Service | Best Auto Repair & Tires</title>
@endsection
@section('page')
<!-- Add Font Awesome CSS in your layout file or here -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- Hero Section -->
<div class="service-hero text-center">
    <div class="container">
        <h1 class="display-4 fw-bold mb-4 title">Premium <span class="text-primary">Oil Change</span> Service</h1>
        <p class="lead mb-5 sub-title">Extend your engine's life with our expert care</p>
        <button href="{{ route('home') }}" class="btn button text-light px-4 py-3 glassmorphism fs-5 hero-button">
                    <span><i class="fas fa-tachometer-alt me-2"></i> Book now</span>
        </button>
    </div>
</div>

<!-- Service Details -->
<div class="container mb-5" id="service-details">
    <div class="card shadow-lg overflow-hidden bg-transparent border-0" id="service-card">
        <div class="row g-0">
            <!-- Service Image Column -->
            <div class="col-lg-6">
                <img src="https://img.freepik.com/free-photo/close-up-auto-mechanic-hand-pouring-replacing-fresh-oil-into-car-engine-auto-repair-garage-automobile-maintenance-industry-concept_1150-16579.jpg?t=st=1750692861~exp=1750696461~hmac=dab55c9ab90dc12bd305bfc86970ad10ba599a5fcad66dc514c8e8c022863ace&w=1060" 
                     class="service-img img-fluid h-100" 
                     alt="Professional Oil Change Service">
            </div>
            
            <!-- Service Content Column -->
            <div class="col-lg-6 bg-black">
                <div class="card-body p-4 p-xl-5">
                    <!-- Guarantee Badge -->
                    <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-center mb-4">
                        <span class="badge guarantee-badge mb-3 px-3 py-2 text-uppercase">
                            <i class="fas fa-shield-alt me-2"></i>12-Month Warranty
                        </span>
                        <span class="badge bg-dark mb-3 px-3 py-2">
                            <i class="fas fa-clock me-2"></i>30 Min Service
                        </span>
                    </div>
                    
                    <!-- Service Title -->
                    <h2 class="display-5 fw-bold mb-4 fade-right">Complete <span class="text-primary"> Oil Change</span> Package</h2>
                    
                    <!-- Price -->
                    <div class="d-flex align-items-center justify-content-center mb-4 neomorphism p-3 rounded fade-right">
                        <div class="d-flex flex align-items-center gap-4">
                            <span class="text-light text-uppercase fs-4">Starting at</span>
                            <span class="display-4 fw-bold text-success me-2">$49.99</span>
                        </div>
                    </div>
                    
                    <!-- Description -->
                    <p class="lead mb-4 fade-up">
                        Our premium oil change service includes full synthetic oil, new oil filter, 
                        and a comprehensive 20-point vehicle inspection to keep your engine running 
                        smoothly and efficiently.
                    </p>
                    
                    <!-- Features List -->
                    <ul class="list-unstyled mb-5">
                        <li class="mb-3 d-flex fade-left">
                            <i class="fas fa-check-circle text-success me-3 fs-5"></i>
                            <span>Full synthetic or conventional oil options</span>
                        </li>
                        <li class="mb-3 d-flex fade-left">
                            <i class="fas fa-check-circle text-success me-3 fs-5"></i>
                            <span>Premium oil filter replacement</span>
                        </li>
                        <li class="mb-3 d-flex fade-left">
                            <i class="fas fa-check-circle text-success me-3 fs-5"></i>
                            <span>20-point vehicle safety inspection</span>
                        </li>
                        <li class="mb-3 d-flex fade-left">
                            <i class="fas fa-check-circle text-success me-3 fs-5"></i>
                            <span>Fluid level top-off (washer, coolant, etc.)</span>
                        </li>
                        <li class="mb-3 d-flex fade-left">
                            <i class="fas fa-check-circle text-success me-3 fs-5"></i>
                            <span>Lube all chassis components</span>
                        </li>
                    </ul>
                    
                    <!-- CTA Buttons -->
                    <div class="d-grid gap-3 d-md-flex">
                        <button href="{{ route('home') }}" class="btn button border-1 border-primary text-light px-4 py-3 glassmorphism fs-5
                        flex-grow-1">
                    <span><i class="fas fa-calendar-check me-2"></i> Schedule Service</span>
                    </button>
                        <a href="tel:+12406682878" class="btn btn-outline-primary btn-lg px-4 py-3 fw-bold">
                            <i class="fas fa-phone me-2"></i> Call Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Benefits Section -->
<div class="container mb-5">
    <h1 class="display-4 fw-bold text-white text-center text-shadow fade-up py-3" id="service-heading">
        Why Choose Our <span class="text-primary">Oil Change</span> Service? 
    </h1>
    <div class="row justify-content-center g-4 py-2 py-md-3 py-lg-5">
        <div class="col-md-6 col-lg-4">
            <div class="card glassmorphism shadow-sm">
                <div class="card-body text-center p-4">
                    <div class="benefit-icon fs-1">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3 class="h5 fw-bold">Certified Technicians</h3>
                    <p>ASE-certified professionals using manufacturer-approved procedures</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card glassmorphism shadow-sm">
                <div class="card-body text-center p-4">
                    <div class="benefit-icon  fs-1">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3 class="h5 fw-bold">Quality Parts</h3>
                    <p>We use only premium filters and certified motor oils</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card glassmorphism shadow-sm">
                <div class="card-body text-center p-4">
                    <div class="benefit-icon fs-1">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="h5 fw-bold">Warranty Protected</h3>
                    <p>All services meet manufacturer warranty requirements</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection