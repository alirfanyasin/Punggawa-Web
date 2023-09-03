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
  {{-- <link rel="stylesheet" href="{{ asset('') }}"> --}}
  {{-- CSS Custom --}}
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  @stack('css-custom')
</head>

<body>

  @include('components.navbar')

  <main>
    @yield('content')
  </main>

  @include('components.footer')


  @stack('js-custom')
</body>

</html>
