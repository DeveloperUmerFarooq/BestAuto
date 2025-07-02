@extends('layouts.layout')
@section('title')
<title>About | Best Auto Repair & Tire</title>
@endsection
@section('page')
    
  <div class="about-page text-white">
    <!-- Hero Section -->
    <section class="hero-section pb-5">
      <div class="container">
        <div class="row pt-5 nt-5 align-items-center">
          <div class="col-lg-6">
            <h1 class="display-3 fw-bold text-white mb-4 text-center text-lg-start title">About <span
                class="text-primary">Best Auto Repair &
                Tire</span></h1>
            <p class="normal-text text-light mb-3 text-center text-lg-start sub-title">Where trust, expertise, and
              dedication merge to deliver exceptional
              automotive care</p>
            <div class="d-flex justify-content-center justify-content-lg-start">
              <button
                class="btn button glassmorphism px-4 py-3 fw-semibold text-white d-flex align-items-center gap-2 hero-button">
                <span>
                  Book An Appointment
                  <i class="fas fa-arrow-right text-white fs-6"></i>
                </span>
              </button>
            </div>
          </div>
          <div class="col-lg-6 d-none d-lg-inline-block">
            <img src="https://wallpapers.com/images/hd/garage-background-7xns1q2orkv0hn07.jpg"
              alt="Auto repair technicians at work" class="img-fluid rounded-4 shadow-lg hero-image">
          </div>
        </div>
      </div>
    </section>

    <!-- Our Story Section -->
    <section class="story-section pt-3 pb-0 position-relative" id="story-section">
      <div class="container py-3">
        <div class="row g-5 align-items-center mb-5">
          <div class="col-lg-6">
            <div class="pe-lg-5">
              <h2 class="display-4 fw-bold mb-4 fade-up">Our <span class="text-primary">Journey</span></h2>
              <p class="fs-5 mb-4 fade-up">What began as a small garage with big dreams has grown into Laurel's premier
                auto repair destination, thanks to the trust of our community and our relentless commitment to quality.
              </p>

              <div class="highlight-quote p-4 mb-4 bg-dark bg-opacity-50 rounded overflow-hidden">
                <p class="mb-0 fs-5 fade-left">"One of our first customers entrusted us with their most valuable
                  possession - a car gifted by their late father. It's moments like these that remind us why we do what
                  we do."</p>
              </div>

              <p class="fs-5 fade-right">Founded by Sheikh Omar Shahid, Best Auto Repair & Tire was built on the belief
                that auto service should be transparent, reliable, and delivered with personal care. From those early
                days working with limited resources to our current state-of-the-art facility, that philosophy hasn't
                changed.</p>
            </div>
          </div>
          <div class="col-lg-6">
            <img src="{{ asset('assets/images/founder.jpg') }}" id="rotate" alt="Founder of Best Auto Repair & Tire"
              class="img-fluid founder-image w-100">
          </div>
        </div>
        @include('stats')
    </section>

    <!-- Mission Section -->
    <section class="py-3 bg-dark" id="mission-section">
      <div class="container py-5">
        <div class="row justify-content-center mb-5">
          <div class="col-lg-8 text-center">
            <h2 class="display-4 fw-bold mb-3 fade-up">Our <span class="text-primary">Commitment</span></h2>
            <p class="lead fade-up">These principles guide every repair, every interaction, and every decision we make
            </p>
          </div>
        </div>
        <div class="row g-4">
          <div class="col-md-4">
            <div class="card mission-card bg-black border-primary border-2 p-4 rounded-4 h-100">
              <div class="icon-box mb-4 text-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" viewBox="0 0 16 16">
                  <path
                    d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2" />
                </svg>
              </div>
              <h3 class="h3 fw-bold mb-3">Expert Care</h3>
              <p class="fs-5">Our ASE-certified technicians combine years of experience with ongoing training to deliver
                repairs you can trust, using only premium parts and the latest diagnostic technology.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mission-card bg-black border-primary border-2 p-4 rounded-4 h-100">
              <div class="icon-box mb-4 text-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" viewBox="0 0 16 16">
                  <path
                    d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2" />
                </svg>
              </div>
              <h3 class="h3 fw-bold mb-3">Transparent Service</h3>
              <p class="fs-5">No hidden fees, no unnecessary repairs. We provide clear explanations, upfront pricing,
                and honest recommendations so you can make informed decisions about your vehicle.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mission-card bg-black border-primary border-2 p-4 rounded-4 h-100">
              <div class="icon-box mb-4 text-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" viewBox="0 0 16 16">
                  <path
                    d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
                </svg>
              </div>
              <h3 class="h3 fw-bold mb-3">Community Focus</h3>
              <p class="fs-5">We're proud to be part of the Laurel community. From supporting local events to providing
                fair pricing, we believe in giving back to the neighborhood that supports us.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Team Section -->
    <section class="py-2">
      <div class="container py-5">
        <div class="row justify-content-center mb-5">
          <div class="col-lg-8 text-center">
            <h2 class="display-4 fw-bold mb-3 fade-up">Meet Our <span class="text-primary">Team</span></h2>
            <p class="lead fade-up">The skilled professionals who make it all happen</p>
          </div>
        </div>
        <div class="row g-4">
          <div class="col-md-4">
            <div class="card team-card bg-dark border-0 h-100 overflow-hidden">
              <img
            style="height: 25rem !important;"
                src="https://images.unsplash.com/photo-1562788869-4ed32648eb72?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fGVtcGxveWVlfGVufDB8fDB8fHww""
                class="card-img-top object-fit-cover" alt="ASE Certified Technician">
              <div class="card-body">
                <h3 class="h4 fw-bold">Sheikh Omar Shahid</h3>
                <p class="text-primary mb-2">Founder & Lead Technician</p>
                <p>With 15+ years in the industry, Omar brings unparalleled expertise and a personal touch to every
                  repair.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card team-card bg-dark border-0 h-100 overflow-hidden">
              <img
            style="height: 25rem !important;"
                src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=987&q=80"
                class="card-img-top object-fit-cover" alt="ASE Certified Technician">
              <div class="card-body">
                <h3 class="h4 fw-bold">James Wilson</h3>
                <p class="text-primary mb-2">Master Technician</p>
                <p>Specializing in electrical systems, James solves the most complex diagnostic challenges.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card team-card bg-dark border-0 h-100 overflow-hidden">
              <img
            style="height: 25rem !important;"
                src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=987&q=80"
                class="card-img-top object-fit-cover" alt="ASE Certified Technician">
              <div class="card-body">
                <h3 class="h4 fw-bold">James Wilson</h3>
                <p class="text-primary mb-2">Master Technician</p>
                <p>Specializing in electrical systems, James solves the most complex diagnostic challenges.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    @include('cta')
  </div>
@endsection