<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description"
    content="Punggawa adalah sebuah organisasi untuk menampung lomba-lomba untuk mahasiswa IT Telkom Surabaya.">
  <meta name="keywords" content="Punggawa, Punggawa IT Telkom Surabaya, Lomba-Lomba Mahasiswa">
  <meta name="robots" content="index,follow">
  <link rel="canonical" href="https://www.example.com/index">
  <meta name="author" content="Punggawa Development Team ">
  <meta property="og:title" content="Punggawa Inspiratif - IT Telkom Surabaya">
  <meta property="og:description"
    content="Punggawa adalah sebuah organisasi untuk menampung lomba-lomba untuk mahasiswa IT Telkom Surabaya.">

  <title>@yield('title')</title>

  {{-- Style CSS | Tailwind CSS and Flowbite --}}
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  {{-- JQuery --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  {{-- CSS Custom --}}
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  {{-- CDN Font awesome --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  @stack('css-custom')


</head>

<body>


  {{-- Navbar --}}
  @include('components.app.navbar')

  <div class="flex">
    @include('components.app.sidebar')
    <main class="h-screen pt-20 overflow-auto lg:px-10 lg:w-10/12 xs:w-full xs:px-5">
      @yield('content')
    </main>

  </div>


  <script>
    var menu = document.querySelector('.icon-menu')
    var sidebar = document.querySelector('aside')

    menu.addEventListener('click', function() {
      sidebar.classList.toggle('xs:hidden');
    })
  </script>

  <script>
    var lis = document.querySelectorAll('aside ul li');

    lis.forEach(function(li) {
      var img = li.querySelector('img');
      var originalSrc = img.getAttribute('src');

      li.addEventListener('mouseover', function(e) {
        e.preventDefault();
        if (originalSrc === '{{ asset('assets/image/icon/icon-dashboard.png') }}') {
          img.setAttribute('src', '{{ asset('assets/image/icon/icon-dashboard-solid.png') }}');
        } else if (originalSrc === '{{ asset('assets/image/icon/icon-trophy.png') }}') {
          img.setAttribute('src', '{{ asset('assets/image/icon/icon-trophy-solid.png') }}');
        } else if (originalSrc === '{{ asset('assets/image/icon/icon-bootcamp.png') }}') {
          img.setAttribute('src', '{{ asset('assets/image/icon/icon-bootcamp-solid.png') }}');
        } else if (originalSrc === '{{ asset('assets/image/icon/icon-certificate.png') }}') {
          img.setAttribute('src', '{{ asset('assets/image/icon/icon-certificate-solid.png') }}');
        } else if (originalSrc === '{{ asset('assets/image/icon/icon-setting.png') }}') {
          img.setAttribute('src', '{{ asset('assets/image/icon/icon-setting-solid.png') }}');
        }
      });

      li.addEventListener('mouseout', function(e) {
        e.preventDefault();
        img.setAttribute('src', originalSrc);
      });
    });
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>
  @stack('js-custom')


</body>

</html>
