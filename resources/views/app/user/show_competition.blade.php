@extends('layouts.app')
@section('title', env('APP_NAME') . ' - Detail Competition')
@section('content')
  {{-- Breadcrumb start --}}
  <div class="flex justify-between breadcrumb">
    <h3 class="font-semibold lg:text-2xl xs:text-md md:text-xl">Detail Competition</h3>
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
            <a href="{{ route('division.competition.show', $data->id) }}"
              class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">Detail
              Competition
            </a>
          </div>
        </li>
      </ol>
    </nav>
  </div>
  {{-- Breadcrumb end --}}

  {{-- Wrapper start --}}
  <section id="wrapper" class="h-screen mt-8">
    <div class="flex gap-4">
      <div class="w-4/12 ">
        <img src="{{ asset('storage/poster/' . $data->poster) }}" alt="{{ $data->name }}" class="rounded-xl">
      </div>
      <div class="w-8/12">
        <div class="flex justify-between">
          <h1 class="text-3xl font-semibold">{{ $data->name }}</h1>
        </div>
        <p class="my-5">{{ $data->description }}</p>

        @if ($data->fund != null)
          <div class="mb-7">
            <h2 class="mb-2 text-2xl">Rp. {{ number_format($data->fund, 0, ',', '.') }}</h2>
            <span>No. Rek ({{ substr($data->no_rek, 0, 8) . 'xxxxx' }})</span>
          </div>
        @else
          <div class="mb-7">
            <p class="inline py-1 text-xl bg-green-300 rounded-lg px-7">Gratis Biaya Pendaftaran</p>
          </div>
        @endif
        <div class="flex">
          <div class="mb-5 mr-10">
            <h4 class="text-lg font-semibold">Dimulai pada tanggal</h4>
            <p>{{ date('d F Y', strtotime($data->start_date)) }}</p>
          </div>
          @if ($data->end_date != null)
            <div class="mb-5">
              <h4 class="text-lg font-semibold">Berakhir pada tanggal</h4>
              <p>{{ date('d F Y', strtotime($data->end_date)) }}</p>
            </div>
          @endif
        </div>
        <h4 class="text-lg font-semibold">Kategori</h4>
        <p>{{ $data->user->name . ' - ' . $data->category }}</p>

        <div class="mt-10">
          @if ($data->registration_link != null)
            <a href="{{ $data->registration_link }}" target="_blank"
              class="px-8 py-3 rounded-xl decoration-0 text-white bg-[#15616D] hover:bg-[#2a8996]">Registration Now</a>
          @endif

          @if ($data->guidebook_link != null)
            <a href="{{ $data->guidebook_link }}" target="_blank"
              class="px-8 py-3 rounded-xl decoration-0 text-[#15616D] border border-[#15616D] hover:bg-[#15616D] hover:text-white">Guidebook</a>
          @endif

        </div>
      </div>
    </div>
  </section>
  {{-- Wrapper end --}}


  @include('components.app.footer')
@endsection
