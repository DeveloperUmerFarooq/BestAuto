<aside class="sidebar bg-black rounded-0 text-white">
      <div class="sidebar-header p-4 border-bottom border-primary">
        <a href="{{ route('home') }}" class=" d-flex align-items-center">
            <img src="{{ asset('assets/images/Logo.svg') }}" alt="">
        </a>
      </div>
      
      <nav class="sidebar-nav p-3">
        <ul class="nav flex-column">
          <li class="nav-item mb-2">
            <a href="{{ route('dashboard') }}" class="nav-link">
              <i class="fas fa-tachometer-alt me-2"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li class="nav-item mb-2">
            <a href="" class="nav-link">
              <i class="fas fa-calendar-check me-2"></i>
              <span>Appointments</span>
            </a>
          </li>
          <li class="nav-item mb-2">
            <a href="" class="nav-link">
              <i class="fas fa-users me-2"></i>
              <span>Users</span>
            </a>
          </li>
          <li class="nav-item mb-2">
            <a href="" class="nav-link">
              <i class="fas fa-blog me-2"></i>
              <span>Blogs</span>
            </a>
          </li>
          <li class="nav-item mb-2">
            <a href="" class="nav-link">
              <i class="fas fa-wrench me-2"></i>
              <span>Services</span>
            </a>
          </li>
        </ul>
      </nav>
      
      <div class="sidebar-footer mt-auto p-3 border-top border-primary">
        <a href="{{ route('home') }}" class="btn btn-outline-primary btn-sm w-100 mb-2">
          <i class="fas fa-home me-1"></i> View Website
        </a>
        <a href="#" data-bs-toggle="modal" data-bs-target="#changePasswordModal" class="btn btn-outline-light btn-sm w-100 mb-2">
          <i class="fas fa-key me-1"></i> Change Password
        </a>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="btn btn-outline-danger btn-sm w-100">
            <i class="fas fa-sign-out-alt me-1"></i> Logout
          </button>
        </form>
      </div>
    </aside>