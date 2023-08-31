@extends('layouts.app')

@section('title', env('APP_NAME') . ' - Divisi Gemastik')

@section('content')
  <!-- Jumbotron start -->
  <section id="jumbotron-section">
    <div class="relative flex justify-center h-screen bg-center bg-no-repeat bg-cover">
      <div class="absolute w-full -mt-6 animation-wave -z-10">
        <img src="/assets/image/bg-jumbotron-lp2.png " class="absolute w-full mT-10 waveTop" alt="">
        <img src="/assets/image/bg-jumbotron-lp4.png " class="absolute w-full mt-5 waveMiddle" alt="">
        <img src="/assets/image/bg-jumbotron-lp3.png " class="absolute w-full mt-16 waveBottom" alt="">
      </div>
      <div class="container flex items-center max-w-screen-xl mt-10">
        <div class="w-6/12 tagline">
          <h1 class="font-semibold text-white uppercase text-7xl">Divisi
            <span class="text-[#FFB902]">Gemastik</span>
          </h1>
          <p class="mt-10 text-[#E9E9E9] text-xl">GEMASTIK adalah singkatan dari "Gelar Mahasiswa Nasional Bidang Ilmu
            Komputer." Ini adalah salah satu ajang kompetisi mahasiswa tingkat nasional di Indonesia yang berfokus pada
            bidang ilmu komputer dan teknologi informasi. GEMASTIK diadakan oleh Direktorat Jenderal Pendidikan Tinggi,
            Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi Republik Indonesia.</p>

          <div>

            <a href="#"
              class="inline-block px-7 py-3 mt-10 rounded-lg bg-white text-[#15616D] shadow-lg mr-5">Guidebook</a>
            <a href="#" class="inline-block px-7 py-3 mt-10 rounded-lg bg-white text-[#15616D] shadow-lg">Daftar
              GEMASTIK</a>
          </div>
        </div>
        <div class="flex justify-center w-6/12 tagline">
          <img src="/assets/image/logo/gemastik-logo.png" class="w-8/12" alt="">
        </div>
      </div>
    </div>
  </section>
  <!-- Jumbotron end -->


  {{-- Kegiatan start --}}
  <section class="mt-32 mb-10">
    <header class="text-center">
      <div class="mb-3 text-2xl">Daftar Kegiatan</div>
      <h2 class="text-4xl font-semibold">GEMASTIK 2023</h2>
    </header>
    <div class="max-w-screen-xl mx-auto mt-10">
      <div class="flex flex-row flex-wrap">
        <div class="p-10 text-center shadow-xl basis-3/12 rounded-xl">
          <div class="flex justify-center">
            <img src="{{ asset('assets/image/icon/code-icon.png') }}" alt="">
          </div>
          <h3 class="mt-5 text-xl text-[#4D4D4D] font-bold">Programming</h3>
        </div>
        <div class="p-10 text-center shadow-xl basis-3/12 rounded-xl">
          <div class="flex justify-center">
            <img src="{{ asset('assets/image/icon/code-icon.png') }}" alt="">
          </div>
          <h3 class="mt-5 text-xl text-[#4D4D4D] font-bold">Cyber Security</h3>
        </div>
        <div class="p-10 text-center shadow-xl basis-3/12 rounded-xl">
          <div class="flex justify-center">
            <img src="{{ asset('assets/image/icon/code-icon.png') }}" alt="">
          </div>
          <h3 class="mt-5 text-xl text-[#4D4D4D] font-bold">Data Mining</h3>
        </div>
        <div class="p-10 text-center shadow-xl basis-3/12 rounded-xl">
          <div class="flex justify-center">
            <img src="{{ asset('assets/image/icon/code-icon.png') }}" alt="">
          </div>
          <h3 class="mt-5 text-xl text-[#4D4D4D] font-bold">UX Design</h3>
        </div>
        <div class="p-10 text-center shadow-xl basis-3/12 rounded-xl">
          <div class="flex justify-center">
            <img src="{{ asset('assets/image/icon/code-icon.png') }}" alt="">
          </div>
          <h3 class="mt-5 text-xl text-[#4D4D4D] font-bold">Animation</h3>
        </div>
        <div class="p-10 text-center shadow-xl basis-3/12 rounded-xl">
          <div class="flex justify-center">
            <img src="{{ asset('assets/image/icon/code-icon.png') }}" alt="">
          </div>
          <h3 class="mt-5 text-xl text-[#4D4D4D] font-bold">Smart City</h3>
        </div>
        <div class="p-10 text-center shadow-xl basis-3/12 rounded-xl">
          <div class="flex justify-center">
            <img src="{{ asset('assets/image/icon/code-icon.png') }}" alt="">
          </div>
          <h3 class="mt-5 text-xl text-[#4D4D4D] font-bold">ICT Scientific Paper</h3>
        </div>
        <div class="p-10 text-center shadow-xl basis-3/12 rounded-xl">
          <div class="flex justify-center">
            <img src="{{ asset('assets/image/icon/code-icon.png') }}" alt="">
          </div>
          <h3 class="mt-5 text-xl text-[#4D4D4D] font-bold">Software Development</h3>
        </div>
        <div class="p-10 text-center shadow-xl basis-3/12 rounded-xl">
          <div class="flex justify-center">
            <img src="{{ asset('assets/image/icon/code-icon.png') }}" alt="">
          </div>
          <h3 class="mt-5 text-xl text-[#4D4D4D] font-bold">Smart Device, Embedded System & IoT</h3>
        </div>
        <div class="p-10 text-center shadow-xl basis-3/12 rounded-xl">
          <div class="flex justify-center">
            <img src="{{ asset('assets/image/icon/code-icon.png') }}" alt="">
          </div>
          <h3 class="mt-5 text-xl text-[#4D4D4D] font-bold">ICT Business Development</h3>
        </div>
        <div class="p-10 text-center shadow-xl basis-3/12 rounded-xl">
          <div class="flex justify-center">
            <img src="{{ asset('assets/image/icon/code-icon.png') }}" alt="">
          </div>
          <h3 class="mt-5 text-xl text-[#4D4D4D] font-bold">Game Development</h3>
        </div>
      </div>
    </div>
  </section>
  {{-- Kegiatan end --}}
@endsection
