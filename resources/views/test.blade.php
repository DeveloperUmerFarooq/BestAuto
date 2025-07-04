@extends('layouts.layout')
@section('page')
    <div class="home-page">
      
      <!-- Hero Section -->
      <section class="hero-section position-relative overflow-hidden h-auto">
        <div class="hero-overlay"></div>
        <div class="container position-relative z-index-1">
          <div class="row min-vh-80 align-items-center py-5">
            <div class="col-lg-8 text-center text-lg-start" id="hero-text">
              <h1 class="display-3 fw-bold text-white mb-4 title">
                Your Trusted <span class="text-primary">Auto Repair</span> Shop
                in Berwyn Heights
              </h1>
              <p class="lead text-light mb-5 text-center text-md-start sub-title">
                Professional auto repair and tire services with ASE certified
                mechanics. We keep your vehicle running smoothly and safely.
              </p>
              <div class="d-flex flex-column flex-md-row align-items-md-center gap-3 mt-4 justify-content-start">
                <!-- Book Appointment Button -->
                <button
                  class="btn button glassmorphism px-4 py-3 fw-semibold text-white d-flex align-items-center gap-2 hero-button"
                >
                  <span>
                    Book An Appointment
                    <i class="fas fa-arrow-right text-white fs-6"></i>
                  </span>
                </button>
              
                <!-- Our Services Button -->
                <a
                  href="#services"
                  class="btn btn-outline-light fw-semibold px-4 py-3 d-flex align-items-center gap-2 hero-button"
                  id="service-btn"
                  style="white-space: nowrap;"
                >
                <i class="fas fa-wrench"></i>
                  Our Services
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Features Section -->
      <section class="py-5 bg-black text-light fade-left">
        <div class="container py-4">
          <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-4">
              <div class="d-flex align-items-center">
                <div class="me-3 text-primary">
                  <i class="fas fa-shield-alt" style="font-size: 4em;"></i>
                </div>
                <div>
                  <h4>ASE Certified</h4>
                  <p class="mb-0">
                    Our technicians are certified professionals with years of
                    experience.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="d-flex align-items-center">
                <div class="me-3 text-primary">
                  <i class="fas fa-clock" style="font-size: 4em;"></i>
                </div>
                <div>
                  <h4>Fast Service</h4>
                  <p class="mb-0">
                    We value your time and provide efficient, timely service.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="d-flex align-items-center">
                <div class="me-3 text-primary">
                  <i class="fas fa-money-bill-wave" style="font-size: 4em;"></i>
                </div>
                <div>
                  <h4>Transparent Pricing</h4>
                  <p class="mb-0">
                    No hidden fees - transparent pricing for all services.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      

      <!-- About Section -->
      <section class="py-5" id="about-section">
        <div class="container py-4">
          <div class="row align-items-center g-5">
            <div class="col-lg-6">
              <div class="pe-lg-5 text-center text-md-start">
                <h2
                  class="display-4 fw-bold text-white mb-4 mb-2 fade-up"
                  id="about-heading"
                >
                  About Us
                </h2>
                <h2 class="display-5 fw-bold text-white mb-4 fade-up">
                  <span class="text-primary" id="title"
                    >Best Auto Repair & Tire</span
                  >
                  - Your Trusted Auto Care Partner
                </h2>
                <p class="lead text-light mb-4 fade-up">
                  With years of experience and a commitment to excellence, our
                  ASE certified mechanics provide comprehensive car maintenance
                  and repair solutions tailored to your needs.
                </p>
                <div class="row g-4 mb-4">
                  <div class="col-sm-6">
                    <div class="d-flex align-items-start">
                      <i
                        class="bi bi-check-circle-fill text-primary me-3 mt-1"
                      ></i>
                      <div>
                        <h3 class="h5 text-white text-start fade-up">Quality Service</h3>
                        <p class="text-light mb-0 small fade-left">
                          State-of-the-art equipment and high-quality parts
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="d-flex align-items-start">
                      <i
                        class="bi bi-check-circle-fill text-primary me-3 mt-1"
                      ></i>
                      <div>
                        <h3 class="h5 text-white text-start fade-up">Customer Focus</h3>
                        <p class="text-light mb-0 small fade-right">
                          Honest pricing with customer satisfaction guarantee
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="d-flex flex-wrap justify-content-center justify-content-md-start gap-3">
                  <button href="{{ route('home') }}" class="btn button text-light px-4 py-3 glassmorphism fs-5">
                    <span>Book now</span>
                  </button>
                  <a href="#services-section">
                    <button class="btn btn-outline-light py-3 fs-5">
                      <i class="bi bi-play-circle me-2"></i> View Services
                    </button>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="position-relative">
                <img
                  src="https://reliable-auto.com/wp-content/uploads/2020/11/mechanic-checking-car-1.jpg"
                  alt="Mechanic working on car"
                  class="img-fluid rounded-top-4 shadow-lg fade-right" 
                />
                <div
                  class="about-experience bg-primary text-white rounded-bottom-4 p-3 shadow"
                >
                  <h3 class="display-4 fw-bold mb-0">15+</h3>
                  <p class="mb-0">Years Experience</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Services Section -->
      <section class="py-3" id="services-section">
        <h1
          class="display-4 fw-bold text-white text-center text-shadow fade-up"
          id="service-heading"
        >
          Services <span class="text-primary">We Provide</span>
        </h1>
        <p class="lead text-light px-1 mx-auto text-center fade-up">
          We go beyond standard auto services to deliver exceptional experiences
          for every customer
        </p>
        <swiper-container
          class="MySwiper my-5 pt-3 mx-2"
          space-between="10"
          autoplay='{"delay": 3000, "disableOnInteraction": false}'
          mousewheel="true"
          navigation="false"
          keyboard="true"
          loop="true"
          breakpoints='{
            "0": { "slidesPerView": 1 },
            "640": { "slidesPerView": 2 },
            "768": { "slidesPerView": 2 },
            "1024": { "slidesPerView": 3},    
            "1536": { "slidesPerView": 4 }  
          }'
        >
          <swiper-slide>
            <div class="card service-card h-100 border-primary bg-black">
              <div class="card-body p-4 text-center">
                <div class="icon-wrapper mb-3">
                  <i class="fas fa-oil-can text-primary fs-1"></i>
                </div>
                <h4 class="card-title fw-bold">Oil Changes</h4>
                <p class="card-text text-start">
                  Regular oil changes extend engine life and improve
                  performance. We use high-quality oils and filters.
                </p>
                <a href="{{ route('home') }}" class="btn btn-outline-primary mt-3">Learn More</a>
              </div>
            </div>
          </swiper-slide>
          <swiper-slide>
            <div class="card service-card h-100 border-primary bg-black">
              <div class="card-body p-4 text-center">
                <div class="icon-wrapper mb-3">
                  <i class="fas fa-car-side text-primary fs-1"></i>
                </div>
                <h4 class="card-title fw-bold">Tire Services</h4>
                <p class="card-text text-start">
                  Tire sales, rotation, balancing, alignment, and repair from
                  top brands at competitive prices.
                </p>
                <a href="{{ route('home') }}" class="btn btn-outline-primary mt-3">Learn More</a>
              </div>
            </div>
          </swiper-slide>
          <swiper-slide>
            <div class="card service-card h-100 border-primary bg-black">
              <div class="card-body p-4 text-center">
                <div class="icon-wrapper mb-3">
                  <i class="fas fa-shield-alt text-primary fs-1"></i>
                </div>
                <h4 class="card-title fw-bold">Brake Services</h4>
                <p class="card-text text-start">
                  Complete brake inspection, repair, and replacement to ensure
                  your safety on the road.
                </p>
                <a href="{{ route('home') }}" class="btn btn-outline-primary mt-3">Learn More</a>
              </div>
            </div>
          </swiper-slide>
          <swiper-slide>
            <div class="card service-card h-100 border-primary bg-black">
              <div class="card-body p-4 text-center">
                <div class="icon-wrapper mb-3">
                  <i class="fas fa-cogs text-primary fs-1"></i>
                </div>
                <h4 class="card-title fw-bold">Engine Repair</h4>
                <p class="card-text text-start">
                  Diagnostics and repairs for all engine issues, from minor
                  tune-ups to major overhauls.
                </p>
                <a href="{{ route('home') }}" class="btn btn-outline-primary mt-3">Learn More</a>
              </div>
            </div>
          </swiper-slide>
          <swiper-slide>
            <div class="card service-card h-100 border-primary bg-black">
              <div class="card-body p-4 text-center">
                <div class="icon-wrapper mb-3">
                  <i class="fas fa-snowflake text-primary fs-1"></i>
                </div>
                <h4 class="card-title fw-bold">AC Services</h4>
                <p class="card-text text-start">
                  Keep cool with our AC inspection, recharge, and repair
                  services for all vehicle makes.
                </p>
                <a href="{{ route('home') }}" class="btn btn-outline-primary mt-3">Learn More</a>
              </div>
            </div>
          </swiper-slide>
          <swiper-slide>
            <div class="card service-card h-100 border-primary bg-black">
              <div class="card-body p-4 text-center">
                <div class="icon-wrapper mb-3">
                  <i class="fas fa-bolt text-primary fs-1"></i>
                </div>
                <h4 class="card-title fw-bold">Electrical Systems</h4>
                <p class="card-text text-start">
                  Diagnosis and repair of all electrical components including
                  batteries, alternators, and starters.
                </p>
                <a href="{{ route('home') }}" class="btn btn-outline-primary mt-3">Learn More</a>
              </div>
            </div>
          </swiper-slide>
        </swiper-container>
        <div class="d-flex justify-content-center">
          <button
            class="btn button glassmorphism px-4 py-3 fw-semibold text-white d-flex align-items-center gap-2"
            id="hero-button"
          >
            <span>
              Book An Appointment
              <i class="fas fa-arrow-right text-white fs-6"></i>
            </span>
          </button>
        </div>
      </section>
      

      <!-- Why Us Section -->
      <section id="why-us">
        <div class="container pt-5 pb-lg-5 pb-4">
          <div class="text-center mb-5">
            <h1 class="display-4 fw-bold text-white mb-4 fade-up" id="why-us-heading">
              Why Choose
              <span class="text-primary">Best Auto Repair & Tire?</span>
            </h1>
            <p class="lead text-light mx-auto text-center fade-up" style="max-width: 700px">
              We go beyond standard auto services to deliver exceptional
              experiences for every customer
            </p>
          </div>
      
          <!-- Cards -->
          <div class="row gy-4 gx-4 justify-content-center">
            <div class="col-md-6 col-lg-4">
              <div class="card why-cards glassmorphism h-100">
                <div class="card-body p-4">
                  <div class="icon-wrapper mb-3 text-center">
                    <i class="fas fa-user-cog fa-2x text-white"></i>
                  </div>
                  <h4 class="card-title fw-bold text-center">Expert Technicians</h4>
                  <div class="divider bg-light mx-auto my-3" style="height: 2px; width: 60px"></div>
                  <p class="card-text">
                    Our ASE-certified technicians bring years of expertise,
                    ensuring your vehicle is in good hands.
                  </p>
                </div>
              </div>
            </div>
      
            <div class="col-md-6 col-lg-4">
              <div class="card why-cards glassmorphism h-100">
                <div class="card-body p-4">
                  <div class="icon-wrapper mb-3 text-center">
                    <i class="fas fa-tools fa-2x text-white"></i>
                  </div>
                  <h4 class="card-title fw-bold text-center">Comprehensive Services</h4>
                  <div class="divider bg-light mx-auto my-3" style="height: 2px; width: 60px"></div>
                  <p class="card-text">
                    From routine maintenance to complex repairs, we offer all
                    auto services to keep your car running smoothly.
                  </p>
                </div>
              </div>
            </div>
      
            <div class="col-md-6 col-lg-4">
              <div class="card why-cards glassmorphism h-100">
                <div class="card-body p-4">
                  <div class="icon-wrapper mb-3 text-center">
                    <i class="fas fa-dollar-sign fa-2x text-white"></i>
                  </div>
                  <h4 class="card-title fw-bold text-center">Affordable Tires</h4>
                  <div class="divider bg-light mx-auto my-3" style="height: 2px; width: 60px"></div>
                  <p class="card-text">
                    We offer the best brands of tires at competitive prices,
                    including all-season, performance, and winter tires.
                  </p>
                </div>
              </div>
            </div>
      
            <div class="col-md-6 col-lg-4">
              <div class="card why-cards glassmorphism h-100">
                <div class="card-body p-4">
                  <div class="icon-wrapper mb-3 text-center">
                    <i class="fas fa-tachometer-alt fa-2x text-white"></i>
                  </div>
                  <h4 class="card-title fw-bold text-center">Efficient Service</h4>
                  <div class="divider bg-light mx-auto my-3" style="height: 2px; width: 60px"></div>
                  <p class="card-text">
                    We value your time, so we work efficiently to get your
                    vehicle back on the road as quickly as possible.
                  </p>
                </div>
              </div>
            </div>
      
            <div class="col-md-6 col-lg-4">
              <div class="card why-cards glassmorphism h-100">
                <div class="card-body p-4">
                  <div class="icon-wrapper mb-3 text-center">
                    <i class="fas fa-smile fa-2x text-white"></i>
                  </div>
                  <h4 class="card-title fw-bold text-center">Customer Satisfaction</h4>
                  <div class="divider bg-light mx-auto my-3" style="height: 2px; width: 60px"></div>
                  <p class="card-text">
                    We're dedicated to providing top-notch service and ensuring
                    our customers leave completely satisfied.
                  </p>
                </div>
              </div>
            </div>
      
            <div class="col-md-6 col-lg-4">
              <div class="card why-cards glassmorphism h-100">
                <div class="card-body p-4">
                  <div class="icon-wrapper mb-3 text-center">
                    <i class="fas fa-coins fa-2x text-white"></i>
                  </div>
                  <h4 class="card-title fw-bold text-center">Transparent Pricing</h4>
                  <div class="divider bg-light mx-auto my-3" style="height: 2px; width: 60px"></div>
                  <p class="card-text">
                    No hidden fees! We believe in clear pricing so you know
                    exactly what you're paying for.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Testimonial -->
    <section class="py-5">
      <div class="container py-4">
        <div class="text-center mb-5">
          <h2 class="display-4 fw-bold text-light fade-up">
            What Our <span class="text-primary">Customers Say</span>
          </h2>
          <p class="lead mx-auto text-center text-md-start text-light fade-up" style="max-width: 700px">
            Don't just take our word for it - hear from our satisfied customers
          </p>
        </div>

        <div class="row g-4 justify-content-center">
          <div class="col-md-6 col-lg-4">
            <div class="card h-100 bg-black border-primary">
              <div class="card-body p-4">
                <div class="mb-3 text-warning">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                </div>
                <p class="card-text">
                  "Best Auto Repair saved me hundreds compared to the
                  dealership. Honest service and quality work. I won't go
                  anywhere else!"
                </p>
                <div class="d-flex align-items-center mt-4">
                  <img
                    src="https://randomuser.me/api/portraits/men/32.jpg"
                    alt="Customer"
                    class="rounded-circle me-3"
                    width="50"
                  />
                  <div>
                    <h6 class="mb-0">Michael T.</h6>
                    <small class="text-light">Berwyn Heights</small>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="card h-100 bg-black border-primary">
              <div class="card-body p-4">
                <div class="mb-3 text-warning">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                </div>
                <p class="card-text">
                  "Fast, friendly service. They explained everything clearly and
                  didn't try to upsell me on unnecessary repairs. Highly
                  recommend!"
                </p>
                <div class="d-flex align-items-center mt-4">
                  <img
                    src="https://randomuser.me/api/portraits/women/44.jpg"
                    alt="Customer"
                    class="rounded-circle me-3"
                    width="50"
                  />
                  <div>
                    <h6 class="mb-0">Sarah K.</h6>
                    <small class="text-light">College Park</small>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="card h-100 bg-black border-primary">
              <div class="card-body p-4">
                <div class="mb-3 text-warning">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-half"></i>
                </div>
                <p class="card-text">
                  "Had a complete brake job done and my car stops better than
                  when it was new. Fair prices and excellent workmanship."
                </p>
                <div class="d-flex align-items-center mt-4">
                  <img
                    src="https://randomuser.me/api/portraits/men/75.jpg"
                    alt="Customer"
                    class="rounded-circle me-3"
                    width="50"
                  />
                  <div>
                    <h6 class="mb-0">David P.</h6>
                    <small class="text-light">Greenbelt</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Faq section -->
    <section class="py-md-2 py-lg-3" id="faq-section">
      <div class="container py-4">
        <div class="row">
          <!-- Left Info Section -->
          <div class="col-lg-6 text-center text-lg-start">
            <h2 class="display-5 fw-bold mb-4 text-white fade-up">
              Frequently Asked <span class="text-primary">Questions</span>
            </h2>
            <p class="lead text-white text-center text-lg-start fade-up">
              Get answers to common questions about our auto repair services
            </p>
            <img
              src="assets/images/FAQ.svg"
              alt="Mechanic working"
              class="img-fluid mt-5 rounded-3 d-none d-lg-block fade-left"
            />
          </div>

          <!-- Right FAQ Accordion Section -->
          <div class="col-lg-6 mt-lg-4">
            <div class="accordion" id="faqAccordion">
              <!-- Question 1 -->
              <div class="accordion-item bg-dark border-primary mb-3">
                <h3 class="accordion-header">
                  <button
                    class="accordion-button bg-black text-light"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#faq1"
                  >
                    Can I get on-the-spot service without an appointment?
                  </button>
                </h3>
                <div
                  id="faq1"
                  class="accordion-collapse collapse show"
                  data-bs-parent="#faqAccordion"
                >
                  <div class="accordion-body">
                    Walk-ins are welcome, but availability depends on our
                    current workload. We recommend booking in advance for
                    faster service.
                  </div>
                </div>
              </div>

              <!-- Question 2 -->
              <div class="accordion-item bg-dark border-primary mb-3">
                <h3 class="accordion-header">
                  <button
                    class="accordion-button collapsed bg-black text-light"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#faq2"
                  >
                    Do you provide free vehicle inspections?
                  </button>
                </h3>
                <div
                  id="faq2"
                  class="accordion-collapse collapse"
                  data-bs-parent="#faqAccordion"
                >
                  <div class="accordion-body">
                    Yes! We offer Maryland State Inspections and diagnostic
                    checks to ensure your vehicle is safe and running
                    properly.
                  </div>
                </div>
              </div>

              <!-- Question 3 -->
              <div class="accordion-item bg-dark border-primary mb-3">
                <h3 class="accordion-header">
                  <button
                    class="accordion-button collapsed bg-black text-light"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#faq3"
                  >
                    How often should I get an oil change?
                  </button>
                </h3>
                <div
                  id="faq3"
                  class="accordion-collapse collapse"
                  data-bs-parent="#faqAccordion"
                >
                  <div class="accordion-body">
                    We recommend regular oil changes every 3,000 to 5,000
                    miles, depending on whether you use regular or full
                    synthetic oil.
                  </div>
                </div>
              </div>

              <!-- Question 4 -->
              <div class="accordion-item bg-dark border-primary mb-3">
                <h3 class="accordion-header">
                  <button
                    class="accordion-button collapsed bg-black text-light"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#faq4"
                  >
                    How do I know if I need new tires?
                  </button>
                </h3>
                <div
                  id="faq4"
                  class="accordion-collapse collapse"
                  data-bs-parent="#faqAccordion"
                >
                  <div class="accordion-body">
                    If your tread depth is low (less than 2/32"), you
                    experience poor traction, or notice cracks and uneven
                    wear, it's time for new tires.
                  </div>
                </div>
              </div>

              <!-- Question 5 -->
              <div class="accordion-item bg-dark border-primary mb-3">
                <h3 class="accordion-header">
                  <button
                    class="accordion-button collapsed bg-black text-light"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#faq5"
                  >
                    How often should I rotate my tires?
                  </button>
                </h3>
                <div
                  id="faq5"
                  class="accordion-collapse collapse"
                  data-bs-parent="#faqAccordion"
                >
                  <div class="accordion-body">
                    Tire rotation should be done every 5,000 to 7,000 miles to
                    ensure even wear and extend tire life.
                  </div>
                </div>
              </div>

              <!-- Question 6 -->
              <div class="accordion-item bg-dark border-primary mb-3">
                <h3 class="accordion-header">
                  <button
                    class="accordion-button collapsed bg-black text-light"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#faq6"
                  >
                    How can I tell if my brakes need servicing?
                  </button>
                </h3>
                <div
                  id="faq6"
                  class="accordion-collapse collapse"
                  data-bs-parent="#faqAccordion"
                >
                  <div class="accordion-body">
                    Signs include squeaking/grinding noises, soft brake pedal,
                    vibration while braking, or increased stopping distance.
                  </div>
                </div>
              </div>

              <!-- Question 7 -->
              <div class="accordion-item bg-dark border-primary mb-3">
                <h3 class="accordion-header">
                  <button
                    class="accordion-button collapsed bg-black text-light"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#faq7"
                  >
                    How often should I replace my coolant?
                  </button>
                </h3>
                <div
                  id="faq7"
                  class="accordion-collapse collapse"
                  data-bs-parent="#faqAccordion"
                >
                  <div class="accordion-body">
                    Flush and replace engine coolant every 30,000 to 50,000
                    miles to prevent overheating and corrosion.
                  </div>
                </div>
              </div>

              <!-- Question 8 -->
              <div class="accordion-item bg-dark border-primary mb-3">
                <h3 class="accordion-header">
                  <button
                    class="accordion-button collapsed bg-black text-light"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#faq8"
                  >
                    How long does a car battery typically last?
                  </button>
                </h3>
                <div
                  id="faq8"
                  class="accordion-collapse collapse"
                  data-bs-parent="#faqAccordion"
                >
                  <div class="accordion-body">
                    Most car batteries last 3-5 years. Extreme temperatures
                    and frequent short trips can shorten battery life.
                  </div>
                </div>
              </div>

              <!-- Question 9 -->
              <div class="accordion-item bg-dark border-primary mb-3">
                <h3 class="accordion-header">
                  <button
                    class="accordion-button collapsed bg-black text-light"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#faq9"
                  >
                    Why is my car's AC not blowing cold air?
                  </button>
                </h3>
                <div
                  id="faq9"
                  class="accordion-collapse collapse"
                  data-bs-parent="#faqAccordion"
                >
                  <div class="accordion-body">
                    This could indicate low refrigerant, a leak, or a failing
                    component. Our technicians can diagnose and repair AC
                    issues quickly.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="py-3 fade-up">
      <div class="container">
        <div class="cta-section glassmorphism p-3 p-lg-5 rounded-4 text-light">
          <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
              <h2 class="display-4 fw-bold mb-4 heading">Experience the Best Auto Care Difference</h2>
              <p class="lead mb-5 text-center">Join our family of satisfied customers in Laurel and surrounding areas</p>
              <div class="d-flex justify-content-center gap-3">
                <button
                class="btn button glassmorphism px-4 py-3 fw-semibold text-white d-flex align-items-center gap-2"
              >
                <span>
                  Book An Appointment
                  <i class="fas fa-arrow-right text-white fs-6"></i>
                </span>
              </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    </div>
    @include('modals.login')
    @include('modals.signup')
@endsection