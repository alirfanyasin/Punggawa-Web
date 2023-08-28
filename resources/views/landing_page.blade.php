@extends('layouts.app')
@section('title',
  env('APP_NAME') .
  '- Pusat informasi dan pengelolaan lomba di bidang akademik dan non-akademik
  Institut Teknologi Telkom Surabaya')
@section('content')
  <!-- Jumbotron start -->
  <section id="jumbotron-section">
    <div class="flex justify-center h-screen">
      <div class="container flex items-center max-w-screen-xl mt-10">
        <div class="w-6/12 tagline">
          <h1 class="font-semibold text-white uppercase text-7xl">Punggawa
            <br>
            <span class="text-[#FFB902]">Inspiratif</span>
          </h1>
          <p class="mt-10 text-[#E9E9E9] text-xl">Pusat informasi dan pengelolaan lomba di bidang akademik dan non-akademik
            Institut Teknologi Telkom Surabaya</p>

          <a href="#"
            class="inline-block px-7 py-3 mt-10 rounded-lg bg-white hover:bg-slate-300 text-[#15616D] shadow-lg">Lihat
            Lomba</a>
        </div>
        <div class="w-6/12 mx-auto tagline">
          <img src="/assets/image/object-jp.png" class="w-full" alt="">
        </div>
      </div>
    </div>
  </section>
  <!-- Jumbotron end -->


  <!-- About start -->
  <section class="mt-32">
    <header class="text-center">
      <h2 class="text-4xl font-semibold text-[#3D4650]">Tentang Punggawa
        <span class="text-[#15616D]">Inspiratif</span>
      </h2>
    </header>
    <div class="flex justify-center mt-16 rounded-lg">
      <iframe width="700" height="400" src="https://www.youtube.com/embed/ck-x84uSgxg?si=VqKhVarxivwhhPIy"
        title="YouTube video player" frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        allowfullscreen class="rounded-2xl"></iframe>
    </div>
  </section>
  <!-- About end -->

@endsection
