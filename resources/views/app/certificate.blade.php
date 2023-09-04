@extends('layouts.app')
@section('title', env('APP_NAME') . ' - Certificate')
@section('content')
  {{-- Breadcrumb start --}}
  <div class="flex justify-between breadcrumb">
    <h3 class="font-semibold lg:text-2xl xs:text-md md:text-xl">Certificate</h3>
    <nav class="flex" aria-label="Breadcrumb">
      <ol class="inline-flex items-center space-x-1 md:space-x-3">
        <li class="inline-flex items-center">
          <a href="#"
            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
            <svg class="w-3 h-3 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
              viewBox="0 0 20 20">
              <path
                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
            </svg>
            Home
          </a>
        </li>
        <li>
          <div class="flex items-center">
            <svg class="w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
              viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 9 4-4-4-4" />
            </svg>
            <a href="/contest-followed"
              class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">Certificate</a>
          </div>
        </li>
      </ol>
    </nav>
  </div>
  {{-- Breadcrumb end --}}

  {{-- Wrapper start --}}
  <section id="wrapper" class="h-screen mt-8">
    <div class="grid gap-4 lg:grid-cols-4 md:grid-cols-2 xs:grid-cols-1">
      <div class="bg-[#F4F2F2] p-5 rounded-xl relative">
        <div class="w-full h-32 overflow-hidden rounded-xl">
          <img src="{{ asset('assets/image/card-img.jpeg') }}" class="w-full" alt="">
        </div>
        <div class="mt-5">
          <h4 class="font-semibold">Lomba Competitive Programming Gemastik 2023</h4>
          <div class="flex items-center justify-end mt-7">
            <a href="" class="bg-[#2C717C] flex items-center text-white text-sm px-3 py-1 rounded-full">Unduh
              <i class="ml-2 fa-solid fa-arrow-down"></i></a>
          </div>
        </div>
      </div>
      <div class="bg-[#F4F2F2] p-5 rounded-xl relative">
        <div class="w-full h-32 overflow-hidden rounded-xl">
          <img src="{{ asset('assets/image/card-img.jpeg') }}" class="w-full" alt="">
        </div>
        <div class="mt-5">
          <h4 class="font-semibold">Lomba Competitive Programming Gemastik 2023</h4>
          <div class="flex items-center justify-end mt-7">
            <a href="" class="bg-[#2C717C] flex items-center text-white text-sm px-3 py-1 rounded-full">Unduh
              <i class="ml-2 fa-solid fa-arrow-down"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Wrapper end --}}

  @include('components.app.footer')

@endsection
