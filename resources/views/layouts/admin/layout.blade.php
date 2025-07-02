<!DOCTYPE html>
<html lang="en">
  <head>
    @yield('title')
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="{{ asset('assets/images/Logo.svg') }}" type="image/x-icon">
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <link rel="stylesheet" href="https://use.typekit.net/fen5fmu.css" />

    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />

    {{-- Bootstrap CSS --}}
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    {{-- Font Awesom CSS --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    {{-- DataTables CSS --}}
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])


    

    {{-- <script
      src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs"
      type="module"
    ></script>
    <script src="https://unpkg.com/split-type"></script> --}}
  </head>
<body>
    <div class="dashboard-page">
        <div class="d-flex flex-column flex-lg-row min-vh-100">
            @include('layouts.admin.sidebar')
            
            <main class="main-content flex-grow-1 bg-dark text-light">
                @include('layouts.admin.header')
                
                <div class="container-fluid py-4 px-4">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>
    @auth
    @include('modals.update-password')
    @endauth
    {{-- <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script> --}}
    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>

    {{-- Chart js --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.2.0"></script>
    {{-- <script src="https://unpkg.com/lenis@1.2.3/dist/lenis.min.js"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/gsap.min.js"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/ScrollTrigger.min.js"></script> --}}

    {{-- Sweet Alerts 2 --}}

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- <script src="{{asset('assets/js/main.js')}}"></script> --}}

    <script>
  document.addEventListener('DOMContentLoaded', function() {
    const sidebarToggle = document.querySelector('.sidebar-toggle');
    const sidebar = document.querySelector('.sidebar');
    
    sidebarToggle.addEventListener('click', function() {
      sidebar.classList.toggle('show');
    });
    
    document.addEventListener('click', function(e) {
      if (window.innerWidth < 992 && !sidebar.contains(e.target) && 
          e.target !== sidebarToggle && !sidebarToggle.contains(e.target)) {
        sidebar.classList.remove('show');
      }
    });
  });
</script>
    <script>
    const Toast = Swal.mixin({
        toast: true,
        position: 'bottom-end',
        showConfirmButton: false,
        timer: 4000,
        timerProgressBar: true,
        customClass: {
            popup: 'colored-toast'
        },
        showClass: {
        popup: 'swal2-show-custom'
    },
    hideClass: {
        popup: 'swal2-hide-custom'
    },
        background: '#1e1e2f',
    });

    @if(session('success'))
        Toast.fire({
            icon: 'success',
            title: @json(session('success')),
            color: '#70e000',       
            iconColor: '#70e000',
        });
    @endif

    @if(session('error'))
        Toast.fire({
            icon: 'error',
            title: @json(session('error')),
            color: '#d00000',       
            iconColor: '#d00000'
        });
    @endif

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            Toast.fire({
                icon: 'error',
                title: @json($error),
                color: '#d00000',
                iconColor: '#d00000'
            });
        @endforeach
    @endif
</script>
@stack('scripts')
