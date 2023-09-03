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
  {{-- CSS Custom --}}
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  @stack('css-custom')
</head>

<body>


  {{-- Navbar --}}
  @include('components.app.navbar')

  <div class="flex">
    @include('components.app.sidebar')
    <main class="w-10/12 h-screen px-10 pt-20 overflow-auto">
      @yield('content')
    </main>

  </div>



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
  @stack('js-custom')

</body>

</html>
