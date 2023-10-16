@extends('layouts.app')
@section('title', env('APP_NAME') . ' - Contest Followed')
@section('content')
  {{-- Breadcrumb start --}}
  <div class="flex justify-between breadcrumb">
    <h3 class="font-semibold lg:text-2xl xs:text-md md:text-xl">Competition</h3>
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
            <a href="{{ route('competition') }}"
              class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">Competition</a>
          </div>
        </li>
      </ol>
    </nav>
  </div>
  {{-- Breadcrumb end --}}

  {{-- Wrapper start --}}
  <section id="wrapper" class="h-screen mt-8">
    <div class="">
      <div class="flex items-center justify-between mb-10">
        <div class="tab-button">
          <a href="#" class="px-8 py-2 border rounded-full border-2-outline bg-slate-200 hover:bg-slate-200"
            id="btn-all">Active</a>
          <a href="#" class="px-8 py-2 border rounded-full border-2-outline hover:bg-slate-200"
            id="btn-finish">Done</a>
        </div>
        <div>
          <div class="relative w-100">
            <i class="absolute fa-solid fa-magnifying-glass text-slate-400 top-3.5 left-3"></i>
            <input type="search" name="search" class="pl-10 border rounded-full ">
          </div>
        </div>
      </div>
      <div id="tab1">
        <div class="grid gap-4 lg:grid-cols-4 md:grid-cols-2 xs:grid-cols-1">
          @foreach ($data as $item)
            @if (Auth::user()->hasRole('user') && $item->status == 'Active')
              <div class="bg-[#F4F2F2] p-5 rounded-xl relative">
                <a href="{{ route('competition.show', $item->id) }}">
                  <div class="w-full h-64 overflow-hidden rounded-xl">
                    <img src="{{ asset('storage/poster/' . $item->poster) }}" class="w-full" alt="">
                  </div>
                  <div class="mt-5">
                    <h4 class="font-semibold">{{ $item->name }}</h4>
                    <div class="flex items-center justify-between mt-7 ">
                      <span class="px-3 py-1 text-xs text-white rounded-full bg-[#15616D]">{{ $item->status }}</span>
                      <span class="text-sm font-light">{{ date('d F Y', strtotime($item->start_date)) }}
                      </span>
                    </div>
                  </div>
                </a>
              </div>
            @endif
          @endforeach
        </div>
      </div>
      <div id="tab2" hidden>
        <div class="grid gap-4 lg:grid-cols-4 md:grid-cols-2 xs:grid-cols-1">
          @foreach ($data as $item)
            @if (Auth::user()->hasRole('user') && $item->status == 'Done')
              <div class="bg-[#F4F2F2] p-5 rounded-xl relative">
                <a href="{{ route('competition.show', $item->id) }}">
                  <div class="w-full h-64 overflow-hidden rounded-xl">
                    <img src="{{ asset('storage/poster/' . $item->poster) }}" class="w-full" alt="">
                  </div>
                  <div class="mt-5">
                    <h4 class="font-semibold">{{ $item->name }}</h4>
                    <div class="flex items-center justify-between mt-7 ">
                      <span class="px-3 py-1 text-xs text-white bg-green-400 rounded-full">{{ $item->status }}</span>
                      <span class="text-sm font-light">{{ date('d F Y', strtotime($item->start_date)) }}
                      </span>
                    </div>
                  </div>
                </a>
              </div>
            @endif
          @endforeach
        </div>
      </div>

    </div>
  </section>
  {{-- Wrapper end --}}

  @include('components.app.footer')

  @push('js-custom')
    <script>
      var btnAll = document.querySelector('#btn-all');
      var btnFinish = document.querySelector('#btn-finish');
      var tab1 = document.querySelector('#tab1');
      var tab2 = document.querySelector('#tab2');


      btnAll.addEventListener('click', function(e) {
        e.preventDefault()
        this.classList.add('bg-slate-200')
        btnFinish.classList.remove('bg-slate-200')
        tab1.removeAttribute('hidden');
        tab2.setAttribute('hidden', 'true');
      })

      btnFinish.addEventListener('click', function(e) {
        e.preventDefault()
        this.classList.add('bg-slate-200')
        btnAll.classList.remove('bg-slate-200')
        tab1.setAttribute('hidden', 'true');
        tab2.removeAttribute('hidden');
      })
    </script>
  @endpush
@endsection
