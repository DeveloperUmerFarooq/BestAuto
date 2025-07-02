 <!-- Map Section -->
    <div class="pt-1 glassmorphism bg-dark fade-up" id="map-section">
      <div class="container-fluid">
        <div class="row" id="maps-container">
          <!-- Map Column -->
          <div class="col-md">
            <h3 class="text-light text-center">Best Auto Repair & Tire 1</h3>
            <iframe
              style="filter: invert(90%)"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3100.74317961505!2d-76.91864172435132!3d38.99835734074128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7c3ff0f7d2d8d%3A0xcce8f68cc52c00fd!2s5550%20Greenbelt%20Rd%2C%20College%20Park%2C%20MD%2020740%2C%20USA!5e0!3m2!1sen!2s!4v1744996657844!5m2!1sen!2s" 
              width="100%"
              height="450"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
          <div class="col-md">
            <h3 class="text-light text-center">Best Auto Repair & Tire 2</h3>
            <iframe
              style="filter: invert(90%)"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49602.126296499206!2d-76.94380772614494!3d39.01228189775194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7c3ccfed28ec7%3A0x45863190036a0847!2sBest%20Auto%20Repair%20and%20Tire!5e0!3m2!1sen!2s!4v1744197317359!5m2!1sen!2s"
              width="100%"
              height="450"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="text-white text-center text-lg-start pt-5 pb-3" id="footer-section">
      <div class="container fade-up">
        <div class="row gap-lg-5 gy-5 justify-content-between">
          <!-- Logo and Description -->
          <div class="col-lg-4 col-md-6 text-md-start text-center">
            <img
              loading="lazy"
              src="{{ asset('assets/images/Logo.svg') }}"
              width="220"
              alt="Best Auto Repair & Tire Logo"
              class="mb-3 rounded-3 p-2"
            />
            <p class="text-center text-md-start">
              Your trusted auto repair shop in Berwyn Heights, MD. Quality service, honest pricing, and customer satisfaction guaranteed.
            </p>
          </div>
          
          <!-- Services -->
          <div class="col-lg-3 col-md-4 text-md-start text-center">
  <h5 class="fw-bold mb-3 text-uppercase">Our Services</h5>
  <ul class="list-unstyled">
    <li>
      <a href="{{ route('home') }}" class="text-white text-decoration-none d-block py-1 hover-opacity">
        <i class="fas fa-oil-can me-2"></i>Oil Changes
      </a>
    </li>
    <li>
      <a href="{{ route('home') }}" class="text-white text-decoration-none d-block py-1 hover-opacity">
        <i class="fas fa-shield-alt me-2"></i>Brake Service
      </a>
    </li>
    <li>
      <a href="{{ route('home') }}" class="text-white text-decoration-none d-block py-1 hover-opacity">
        <i class="fas fa-car-side me-2"></i>Tire Services
      </a>
    </li>
    <li>
      <a href="{{ route('home') }}" class="text-white text-decoration-none d-block py-1 hover-opacity">
        <i class="fas fa-tools me-2"></i>Engine Repair
      </a>
    </li>
    <li>
      <a href="{{ route('home') }}" class="text-white text-decoration-none d-block py-1 hover-opacity">
        <i class="fas fa-snowflake me-2"></i>AC Service
      </a>
    </li>
  </ul>
          </div>

          <!-- Contact Info -->
          <div class="col-lg col-md-12 text-center text-md-start">
            <h5 class="fw-bold mb-3 text-uppercase">Contact Info</h5>
            <ul class="list-unstyled">
              <li class="mb-3 d-flex align-items-start justify-content-start gap-2">
                <div class="bg-white rounded-circle p-2">
                  <lottie-player src="{{ asset('assets/lotties/Address.json') }}" background="transparent" speed="1" style="width: 30px; height: 30px" loop autoplay></lottie-player>
                </div>
                <a class="text-start" href="https://maps.google.com/maps/dir//Best+Auto+Repair+and+Tire+6001+Greenbelt+Rd+Berwyn+Heights,+MD+20740+United+States/@38.9975207,-76.9115946,12z/data=!4m5!4m4!1m0!1m2!1m1!1s0x89b7c3ccfed28ec7:0x45863190036a0847" target="_blank">
                  <span>6001 Greenbelt Road<br>Berwyn Heights, MD 20740</span>
                </a>
                </li>
              <li class="mb-3 d-flex align-items-center justify-content-start gap-2">
                <div class="bg-white rounded-circle p-2">
                  <lottie-player src="{{ asset('assets/lotties/Phone.json') }}" background="transparent" speed="1" style="width: 30px; height: 30px" loop autoplay></lottie-player>
                </div>
                <a href="tel:+12406682878" class="text-white text-decoration-none">+1 240-668-2878</a>
              </li>
              <li class="mb-3 d-flex align-items-center justify-content-start gap-2">
                <div class="bg-white rounded-circle p-2">
                  <lottie-player src="{{ asset('assets/lotties/Mail.json') }}" background="transparent" speed="1" style="width: 30px; height: 30px" loop autoplay></lottie-player>
                </div>
                <a href="mailto:arservicecenter01@gmail.com" class="text-white text-decoration-none">arservicecenter01@gmail.com</a>
              </li>
              <li class="d-flex align-items-start justify-content-start gap-2" style="cursor: pointer;">
                <div class="bg-white rounded-circle p-2">
                  <lottie-player src="{{ asset('assets/lotties/Clock.json') }}" background="transparent" speed="1" style="width: 30px; height: 30px" loop autoplay></lottie-player>
                </div>
                <span>Mon-Fri: 7:30 AM - 6:00 PM<br>Sat: 8:00 AM - 4:00 PM</span>
              </li>
            </ul>
          </div>
        </div>
    
        <!-- Social Media -->
        <div class="social-media d-flex justify-content-center align-items-center mt-4 gap-3 flex-wrap">
          <a href="https://www.facebook.com/bestautorepairandtires/" target="_blank" class="rounded-circle bg-white p-2">
            <lottie-player src="{{ asset('assets/lotties/Facebook.json') }}" background="transparent" speed="1" style="width: 40px; height: 40px" loop autoplay></lottie-player>
          </a>
          <a href="https://www.instagram.com/bestautorepairs/" target="_blank" class="rounded-circle bg-white p-2">
            <lottie-player src="{{ asset('assets/lotties/Instagram.json') }}" background="transparent" speed="1" style="width: 40px; height: 40px" loop autoplay></lottie-player>
          </a>
        </div>
    
        <!-- Copyright -->
        <hr class="my-4 border-white-50" />
        <p class="mb-0">&copy; 2025 Best Auto Repair & Tire. All Rights Reserved.</p>
    </footer>