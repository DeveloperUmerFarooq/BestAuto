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
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    

    <script
      src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs"
      type="module"
    ></script>
    <script src="https://unpkg.com/split-type"></script>
  </head>
<body>
    @unless (request()->is('dashboard*'))
    @include('layouts.header')
    @endunless
    @yield('page')
    @auth
    @include('modals.update-password')
    @endauth
    @unless(request()->is('dashboard*'))
    @include('layouts.footer')
    @endunless
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/lenis@1.2.3/dist/lenis.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
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
