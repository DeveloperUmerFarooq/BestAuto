<div class="container-fluid px-3 px-md-5 py-2 py-lg-3">
      <div class="row">
        <!-- Contact Icons Column -->
        <div class="col">
          <div class="d-flex flex-wrap gap-2 gap-md-3">
            <!-- Phone -->
            <a href="tel:+12406682878" class="icon-link" aria-label="Call us">
              <div class="icon-container">
                <lottie-player
                  src="{{ asset('assets/lotties/Phone.json') }}"
                  background="transparent"
                  speed="1"
                  style="width: 60px; height: 60px"
                  loop
                  autoplay
                ></lottie-player>
                <span class="icon-label d-none d-md-inline">Call Us</span>
              </div>
            </a>

            <!-- Email -->
            <a
              href="mailto:arservicecenter01@gmail.com"
              class="icon-link"
              aria-label="Email us"
            >
              <div class="icon-container">
                <lottie-player
                  src="{{ asset('assets/lotties/Mail.json') }}"
                  background="transparent"
                  speed="1"
                  style="width: 60px; height: 60px"
                  loop
                  autoplay
                ></lottie-player>
                <span class="icon-label d-none d-md-inline">Email Us</span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md text-center d-none d-md-block">
          <a href="{{ route('home') }}">
            <img src="{{ asset('assets/images/Logo.svg') }}" class="logo" width="200">
          </a>
        </div>
        <div class="col">
          <div
            class="d-flex justify-content-end align-items-center flex-wrap gap-2 gap-md-3"
          >
            <!-- Facebook -->
            <a
              href="https://www.facebook.com/bestautorepairandtires/"
              target="_blank"
              class="icon-link"
              aria-label="Facebook"
            >
              <div class="icon-container">
                <lottie-player
                  src="{{ asset('assets/lotties/Facebook.json') }}"
                  background="transparent"
                  speed="1"
                  style="width: 65px; height: 65px"
                  loop
                  autoplay
                ></lottie-player>
                <span class="icon-label d-none d-md-inline">Facebook</span>
              </div>
            </a>

            <!-- Instagram -->
            <a
              href="https://www.instagram.com/bestautorepairs/"
              target="_blank"
              class="icon-link"
              aria-label="Instagram"
            >
              <div class="icon-container">
                <lottie-player
                  src="{{ asset('assets/lotties/Instagram.json') }}"
                  background="transparent"
                  speed="1"
                  style="width: 65px; height: 65px"
                  loop
                  autoplay
                ></lottie-player>
                <span class="icon-label d-none d-md-inline">Instagram</span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <header>
      <nav class="navbar glassmorphism navbar-expand-lg shadow">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('home') }}"
            ><img
              src="{{ asset('assets/images/Logo.svg') }}"
              class="rounded-2 logo"
              width="80"
              height="10%"
              alt=""
          /></a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="#ffffff"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="lucide lucide-align-justify"
            >
              <path d="M3 12h18" />
              <path d="M3 18h18" />
              <path d="M3 6h18" />
            </svg>
          </button>

          <div class="collapse navbar-collapse" id="navbarNav">
            <ul
              class="navbar-nav gap-3 mt-1 mt-lg-0 w-100 d-flex align-items-lg-center justify-content-lg-center"
            >
              <li class="nav-item">
                <a
                  class="nav-link active"
                  aria-current="page"
                  href="{{ route('home') }}"
                  >Home</a
                >
              </li>
              @auth
              @can('view dashboard')
              <li class="nav-item">
                <a
                  class="nav-link active"
                  aria-current="page"
                  href="{{ route('dashboard') }}"
                  >Dashboard</a
                >
              </li>
              @endcan
              @endauth
              <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }}">About</a>
              </li>
              <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Services
  </a>
  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="servicesDropdown">
    <li><a class="dropdown-item" href="{{ route('services')}}">Oil Change</a></li>
    <li><a class="dropdown-item" href="{{ route('services')}}">Tire Rotation</a></li>
    <li><a class="dropdown-item" href="{{ route('services')}}">Brake Service</a></li>
    <li><a class="dropdown-item" href="{{ route('services')}}">Engine Diagnostic</a></li>
  </ul>
</li>

              <li class="nav-item">
                <a class="nav-link" href="{{ route('blogs') }}">Blogs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}">Contact</a>
              </li>
              @auth
              @can('view appointments')
              <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}">Appointments</a>
              </li>
              @endcan
                        <li class="nav-item dropdown ms-lg-auto">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('home') }}" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-dark dropdown-menu-end" aria-labelledby="navbarDropdown">
                                     <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#changePasswordModal">Change Password</a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                    @else
              <li class="nav-item ms-lg-auto">
                <a class="nav-link" href="{{ route('home') }}" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}" data-bs-toggle="modal" data-bs-target="#signUpModal">Sign Up</a>
              </li>
              @endauth
            </ul>
          </div>
        </div>
      </nav>
    </header>

    