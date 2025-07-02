@extends('layouts.layout')
@section('title')
<title>Home | Best Auto Repair & Tire</title>
@endsection
@section('page')
     <!-- Hero Section -->
    <section class="contact-hero d-flex align-items-center py-5 hero-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h1 class="display-4 fw-bold text-white mb-3 title">Contact <span class="text-primary">Our Shops</span></h1>
                    <p class="lead text-white opacity-75 text-center sub-title">Two convenient locations to serve all your auto repair needs in Berwyn Heights, MD</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Cards Section -->
    <section class="py-2">
        <div class="container">
            <div class="row justify-content-center g-4">
                <!-- Shop 1 -->
                <div class="col-md-6 text-light">
                    <div class="contact-card bg-black border border-primary h-100 p-4 rounded-3">
                        <div class="d-flex align-items-center mb-4">
                            <div class="bg-primary rounded-circle p-3 me-3">
                              <i class="fas fa-shop fa-2x"></i>
                            </div>
                            <h3 class="mb-0">Best Auto Repair & Tire 1</h3>
                        </div>
                        
                        <div class="contact-info mb-4">
                            <div class="d-flex gap-2 align-items-start mb-3">
                                  <lottie-player src="{{ asset('assets/lotties/Clock.json') }}" background="transparent" speed="1" style="width: 40px;" loop autoplay></lottie-player>
                                <div>
                                    <h6 class="mb-1">Hours</h6>
                                    <p class="mb-0">Mon-Fri: 7:30 AM - 6:00 PM<br>Sat: 8:00 AM - 4:00 PM</p>
                                </div>
                            </div>
                            
                            <div class="d-flex gap-2 align-items-start justify-content-start mb-3">
                                <lottie-player src="{{ asset('assets/lotties/Phone.json') }}" style="width: 40px;" background="transparent" speed="1" loop autoplay></lottie-player>
                                <div>
                                    <h6 class="mb-1">Phone</h6>
                                    <p class="mb-0"><a href="tel:+12406682878" class="text-white">+1 240-668-2878</a></p>
                                </div>
                            </div>
                            
                            <div class="d-flex gap-2 align-items-start">
                                 <lottie-player src="{{ asset('assets/lotties/Mail.json') }}" background="transparent" speed="1" style="width: 40px;" loop autoplay></lottie-player>
                                <div>
                                    <h6 class="mb-1">Email</h6>
                                    <p class="mb-0"><a href="mailto:arservicecenter01@gmail.com" class="text-white">arservicecenter01@gmail.com</a></p>
                                </div>
                            </div>
                        </div>
                        
                        <a href="https://maps.google.com/maps/dir//5550+Greenbelt+Rd+College+Park,+MD+20740+USA/@38.9983602,-76.9160839,16z/data=!4m5!4m4!1m0!1m2!1m1!1s0x89b7c3ff0f7d2d8d:0xcce8f68cc52c00fd"
                           target="_blank" 
                           class="btn btn-outline-primary w-100 py-2">
                            <i class="fas fa-directions me-2"></i> Get Directions
                        </a>
                    </div>
                </div>
                
                <!-- Shop 2 -->
                <div class="col-md-6 text-light">
                  <div class="contact-card bg-black border border-primary h-100 p-4 rounded-3">
                        <div class="d-flex align-items-center mb-4">
                            <div class="bg-primary rounded-circle p-3 me-3">
                              <i class="fas fa-shop fa-2x"></i>
                            </div>
                            <h3 class="mb-0">Best Auto Repair & Tire 2</h3>
                        </div>
                        
                        <div class="contact-info mb-4">
                            <div class="d-flex gap-2 align-items-start mb-3">
                              <lottie-player src="{{ asset('assets/lotties/Clock.json') }}" background="transparent" speed="1" style="width: 40px;" loop autoplay></lottie-player>
                                <div>
                                    <h6 class="mb-1">Hours</h6>
                                    <p class="mb-0">Mon-Fri: 7:30 AM - 6:00 PM<br>Sat: 8:00 AM - 4:00 PM</p>
                                </div>
                            </div>
                            
                            <div class="d-flex gap-2 align-items-start mb-3">
                                <lottie-player src="{{ asset('assets/lotties/Phone.json') }}" background="transparent" speed="1" style="width: 40px;" loop autoplay></lottie-player>
                                <div>
                                    <h6 class="mb-1">Phone</h6>
                                    <p class="mb-0"><a href="tel:+12406682878" class="text-white">+1 240-668-2878</a></p>
                                </div>
                            </div>
                            
                            <div class="d-flex gap-2 align-items-start">
                                 <lottie-player src="{{ asset('assets/lotties/Mail.json') }}" background="transparent" speed="1" style="width: 40px;" loop autoplay></lottie-player>
                                <div>
                                    <h6 class="mb-1">Email</h6>
                                    <p class="mb-0"><a href="mailto:arservicecenter01@gmail.com" class="text-white">arservicecenter01@gmail.com</a></p>
                                </div>
                            </div>
                        </div>
                        
                        <a href="https://maps.google.com/maps/dir//Best+Auto+Repair+and+Tire+6001+Greenbelt+Rd+Berwyn+Heights,+MD+20740+United+States/@38.9975207,-76.9115946,12z/data=!4m5!4m4!1m0!1m2!1m1!1s0x89b7c3ccfed28ec7:0x45863190036a0847" 
                           target="_blank" 
                           class="btn btn-outline-primary w-100 py-2">
                            <i class="fas fa-directions me-2"></i> Get Directions
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Appointment Form Section -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center mb-5">
                    <h2 class="display-5 fw-bold text-white mb-3 fade-up">Schedule <span class="text-primary">An Appointment</span></h2>
                    <p class="lead text-white text-center opacity-75 fade-up">Fill out the form below and we'll get back to you promptly to confirm your appointment</p>
                </div>
            </div>

            <div class="row justify-content-center fade-up">
                <div class="col-lg-8">
                    <div class="appointment-form glassmorphism p-4 p-lg-5 rounded-3">
                        <form id="appointmentForm">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="fullName" placeholder="John Doe" required>
                                        <label for="fullName">Full Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="name@example.com" required>
                                        <label for="email">Email Address</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="tel" class="form-control" id="phone" placeholder="+1 (123) 456-7890" required>
                                        <label for="phone">Phone Number</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select" id="location" required>
                                            <option value="" selected disabled>Select location</option>
                                            <option value="location1">Best Auto Repair & Tire 1</option>
                                            <option value="location2">Best Auto Repair & Tire 2</option>
                                        </select>
                                        <label for="location">Preferred Location</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="vehicle" placeholder="Toyota Camry" required>
                                        <label for="vehicle">Vehicle Make/Model</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="date" class="form-control" id="appointmentDate" required>
                                        <label for="appointmentDate">Preferred Date</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <select class="form-select" id="service" required>
                                            <option value="" selected disabled>Select a service</option>
                                            <option value="oil-change">Oil Change</option>
                                            <option value="tire-rotation">Tire Rotation</option>
                                            <option value="brake-service">Brake Service</option>
                                            <option value="engine-diagnostic">Engine Diagnostic</option>
                                            <option value="other">Other Service</option>
                                        </select>
                                        <label for="service">Service Needed</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave your message here" id="message" style="height: 120px"></textarea>
                                        <label for="message">Additional Details</label>
                                    </div>
                                </div>
                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn btn-primary w-100 py-3 fw-bold">
                                        <i class="fas fa-calendar-check me-2"></i> Book Appointment
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Faq section -->
    @include('faq')

    <!-- Call to Action -->
    <section class="py-5 bg-black fade-up">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h2 class="display-5 fw-bold text-white mb-4">Need Immediate Assistance?</h2>
                    <p class="lead text-white text-center mb-5">Call us now to speak with one of our service advisors</p>
                    <a href="tel:+12406682878" class="btn button glassmorphism text-light btn-lg px-5 py-3 fw-bold">
                        <span>
                            <i class="fas fa-phone-alt me-2"></i> +1 240-668-2878
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection