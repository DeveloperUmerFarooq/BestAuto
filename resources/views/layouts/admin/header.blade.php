<header class="top-nav glassmorphism py-3 px-4 d-flex justify-content-between align-items-center">
  <button class="btn btn-outline-primary d-lg-none sidebar-toggle">
    <i class="fas fa-bars"></i>
  </button>
  
  <div class="d-flex align-items-center justify-content-end w-100 gap-1">
    <div class="user-icon rounded-circle bg-primary d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
      <i class="fas fa-user text-white"></i>
    </div>
    <div class="user-info text-end">
      <div class="fw-bold text-white">{{ auth()->user()->name }}</div>
    </div>
    <form method="POST" action="{{ route('logout') }}" class="ms-2">
      @csrf
      <button type="submit" class="btn btn-outline-danger btn-sm" title="Logout">
        <i class="fas fa-sign-out-alt"></i>
      </button>
    </form>
  </div>
</header>