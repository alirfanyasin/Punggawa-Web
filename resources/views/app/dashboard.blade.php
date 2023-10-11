@extends('layouts.app')
@section('title', env('APP_NAME') . ' - Dashboard')
@section('content')
  {{-- Breadcrumb start --}}
  <div class="flex justify-between breadcrumb">
    <h3 class="font-semibold lg:text-2xl xs:text-md md:text-xl">Dashboard</h3>
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
            <a href="#"
              class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">Dashboard</a>
          </div>
        </li>
      </ol>
    </nav>
  </div>
  {{-- Breadcrumb end --}}


  {{-- Wrapper start --}}
  <section id="wrapper" class="mt-8">
    <div class="grid lg:grid-cols-2 gap-x-4 md:grid-cols-1">
      <div>
        <div class="bg-[#F4F2F2] rounded-2xl lg:p-10 xs:p-5 flex justify-between gap-4 items-center">
          <div class="xs:w-8/12 lg:w-1/2">
            <h1 class="font-semibold lg:text-3xl xs:text-xl">Halo <span
                class="text-[#15616D]">{{ Auth::user()->name }}</span>
            </h1>
            @hasrole('user')
              <small>User</small>
            @endhasrole
            @hasrole('admin')
              <small>Admin</small>
            @endhasrole
            <p class="lg:mt-5 md:mt-4 xs:mt-2 font-light text-[#7B7B7B] lg:text-lg xs:text-xs md:text-md">Kelengkapan
              Profile</p>
            <div class="w-full h-4 mt-2 mb-4 bg-gray-200 rounded-full dark:bg-gray-700">
              <div class="h-4 bg-[#15616D] rounded-full dark:bg-blue-500 text-white text-xs text-center"
                style="width: 45%">45%</div>
            </div>
          </div>
          <div class="flex justify-end lg:w-1/2 xs:w-4/12">
            <img src="{{ asset('assets/image/illustration-1.png') }}" class="w-full" alt="">
          </div>
        </div>

        <div class="grid grid-cols-2 mt-5 gap-x-5">
          <div class="bg-[#F4F2F2] rounded-2xl p-6">
            <div class="relative flex justify-between">
              <div>
                <h2 class="font-semibold md:text-xl xs:text-sm">Jumlah Lomba</h2>
                <p class="text-[#7B7B7B] xs:text-xs md:text-lg">Telah diikuti</p>
                <h1 class="text-[#15616D] my-6 xs:text-7xl  lg:text-8xl">05</h1>
              </div>
              <div class="absolute bottom-0 right-0">
                <img src="{{ asset('assets/image/icon/icon-11.png') }}" class="lg:w-full xs:w-8 md:w-20" alt="">
              </div>
            </div>
          </div>
          <div class="bg-[#F4F2F2] rounded-2xl p-6">
            <div class="relative flex justify-between">
              <div>
                <h2 class="text-xl font-semibold md:text-xl xs:text-sm">Jumlah Sertifikat</h2>
                <p class="text-[#7B7B7B] xs:text-xs md:text-lg">Telah didapat</p>
                <h1 class="text-8xl text-[#15616D] my-6 xs:text-7xl  lg:text-8xl">03</h1>
              </div>
              <div class="absolute bottom-0 right-0">
                <img src="{{ asset('assets/image/icon/icon-12.png') }}" class="lg:w-full xs:w-8 md:w-20" alt="">
              </div>
            </div>
          </div>
        </div>

        <div class="bg-[#F4F2F2] rounded-2xl p-6 mt-5 mb-5">
          {!! $chart->container() !!}
        </div>
      </div>

      {{-- Calender start --}}
      <div class="bg-[#F4F2F2] rounded-2xl lg:p-10 xs:p-5 mb-5">
        <h2 class="text-xl font-semibold">Timeline Lomba</h2>
        <p class="text-[#7B7B7B] text-md">Terdekat</p>
        <div class="flex items-center justify-center mt-10 rounded-xl">
          <div class="w-full p-4 bg-white shadow rounded-2xl sm:p-6">
            <div class="flex items-center justify-around mb-4">
              <button class="p-2 border rounded-lg sm:p-4 hover:bg-gray-200">
                <svg class="w-4 h-4 sm:w-5 sm:h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                  <path
                    d="M4.83594 12.0001L11.043 18.2072L12.4573 16.793L7.66436 12.0001L12.4573 7.20718L11.043 5.79297L4.83594 12.0001ZM10.4858 12.0001L16.6929 18.2072L18.1072 16.793L13.3143 12.0001L18.1072 7.20718L16.6929 5.79297L10.4858 12.0001Z">
                  </path>
                </svg>
              </button>
              <button class="p-2 border rounded-lg sm:p-4 hover:bg-gray-200">
                <svg class="w-4 h-4 sm:w-5 sm:h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                  <path
                    d="M10.8284 12.0007L15.7782 16.9504L14.364 18.3646L8 12.0007L14.364 5.63672L15.7782 7.05093L10.8284 12.0007Z">
                  </path>
                </svg>
              </button>
              <div class="text-base font-semibold">August 2023</div>
              <button class="p-2 border rounded-lg sm:p-4 hover:bg-gray-200">
                <svg class="w-4 h-4 sm:w-5 sm:h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                  <path
                    d="M13.1714 12.0007L8.22168 7.05093L9.63589 5.63672L15.9999 12.0007L9.63589 18.3646L8.22168 16.9504L13.1714 12.0007Z">
                  </path>
                </svg>
              </button>
              <button class="p-2 border rounded-lg sm:p-4 hover:bg-gray-200">
                <svg class="w-4 h-4 sm:w-5 sm:h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                  <path
                    d="M19.1643 12.0001L12.9572 5.79297L11.543 7.20718L16.3359 12.0001L11.543 16.793L12.9572 18.2072L19.1643 12.0001ZM13.5144 12.0001L7.30728 5.79297L5.89307 7.20718L10.686 12.0001L5.89307 16.793L7.30728 18.2072L13.5144 12.0001Z">
                  </path>
                </svg>
              </button>
            </div>
            <div class="grid grid-cols-7 gap-2">
              <div class="text-center text-gray-500">Su</div>
              <div class="text-center text-gray-500">Mo</div>
              <div class="text-center text-gray-500">Tu</div>
              <div class="text-center text-gray-500">We</div>
              <div class="text-center text-gray-500">Th</div>
              <div class="text-center text-gray-500">Fr</div>
              <div class="text-center text-gray-500">Sa</div>
              <!-- Calendar days -->
              <div class="p-2 text-center text-gray-500 rounded-md sm:p-4 hover:bg-gray-500 hover:text-white">-
              </div>
              <div class="p-2 text-center text-gray-500 rounded-md sm:p-4 hover:bg-gray-500 hover:text-white">-
              </div>
              <div class="p-2 text-center text-gray-700 rounded-md sm:p-4 hover:bg-gray-900 hover:text-white">1
              </div>
              <div class="p-2 text-center text-gray-700 rounded-md sm:p-4 hover:bg-gray-900 hover:text-white">2
              </div>
              <div class="p-2 text-center text-gray-700 rounded-md sm:p-4 hover:bg-gray-900 hover:text-white">3
              </div>
              <div class="p-2 text-center text-gray-700 rounded-md sm:p-4 hover:bg-gray-900 hover:text-white">4
              </div>
              <div class="p-2 text-center text-gray-700 rounded-md sm:p-4 hover:bg-gray-900 hover:text-white">5
              </div>
              <div class="p-2 text-center text-gray-700 rounded-md sm:p-4 hover:bg-gray-900 hover:text-white">6
              </div>
              <div class="p-2 text-center text-gray-700 rounded-md sm:p-4 hover:bg-gray-900 hover:text-white">7
              </div>
              <div class="p-2 text-center text-gray-700 rounded-md sm:p-4 hover:bg-gray-900 hover:text-white">8
              </div>
              <div
                class="p-2 text-center text-white bg-[#15616D] rounded-full border-gray-500 sm:p-4 hover:bg-white hover:text-gray-900 hover:border">
                9</div>
              <div class="p-2 text-center text-gray-700 rounded-md sm:p-4 hover:bg-gray-900 hover:text-white">10
              </div>
              <div class="p-2 text-center text-gray-700 rounded-md sm:p-4 hover:bg-gray-900 hover:text-white">11
              </div>
              <div class="p-2 text-center text-gray-700 rounded-md sm:p-4 hover:bg-gray-900 hover:text-white">12
              </div>
              <div class="p-2 text-center text-gray-700 rounded-md sm:p-4 hover:bg-gray-900 hover:text-white">13
              </div>
              <div class="p-2 text-center text-gray-700 rounded-md sm:p-4 hover:bg-gray-900 hover:text-white">14
              </div>
              <div class="p-2 text-center text-gray-700 rounded-md sm:p-4 hover:bg-gray-900 hover:text-white">15
              </div>
              <div class="p-2 text-center text-gray-700 rounded-md sm:p-4 hover:bg-gray-900 hover:text-white">16
              </div>
              <div class="p-2 text-center text-gray-700 rounded-md sm:p-4 hover:bg-gray-900 hover:text-white">17
              </div>
              <div class="p-2 text-center text-gray-700 rounded-md sm:p-4 hover:bg-gray-900 hover:text-white">18
              </div>
              <div class="p-2 text-center text-gray-700 rounded-md sm:p-4 hover:bg-gray-900 hover:text-white">19
              </div>
              <div class="p-2 text-center text-gray-700 rounded-md sm:p-4 hover:bg-gray-900 hover:text-white">20
              </div>
              <div class="p-2 text-center text-gray-700 rounded-md sm:p-4 hover:bg-gray-900 hover:text-white">21
              </div>
              <div class="p-2 text-center text-gray-700 rounded-md sm:p-4 hover:bg-gray-900 hover:text-white">22
              </div>
              <div class="p-2 text-center text-gray-700 rounded-md sm:p-4 hover:bg-gray-900 hover:text-white">23
              </div>
              <div class="p-2 text-center text-gray-700 rounded-md sm:p-4 hover:bg-gray-900 hover:text-white">24
              </div>
              <div class="p-2 text-center text-gray-700 rounded-md sm:p-4 hover:bg-gray-900 hover:text-white">25
              </div>
              <div class="p-2 text-center text-gray-700 rounded-md sm:p-4 hover:bg-gray-900 hover:text-white">26
              </div>
              <div class="p-2 text-center text-gray-700 rounded-md sm:p-4 hover:bg-gray-900 hover:text-white">27
              </div>
              <div class="p-2 text-center text-gray-700 rounded-md sm:p-4 hover:bg-gray-900 hover:text-white">28
              </div>
              <div class="p-2 text-center text-gray-700 rounded-md sm:p-4 hover:bg-gray-900 hover:text-white">29
              </div>
              <div class="p-2 text-center text-gray-700 rounded-md sm:p-4 hover:bg-gray-900 hover:text-white">30
              </div>
              <div class="p-2 text-center text-gray-700 rounded-md sm:p-4 hover:bg-gray-900 hover:text-white">31
              </div>
            </div>
          </div>
        </div>

        <div class="mt-10">
          <h3 class="text-[#15616D] font-semibold text-lg">20 Agustus 2023</h3>
          <div class="flex items-center mt-4">
            <img src="" alt=""
              class="bg-white rounded-full lg:w-20 lg:h-20 md:w-16 md:h-16 xs:w-14 xs:h-14">
            <div class="ml-4">
              <h3 class="font-semibold lg:text-xl md:text-lg xs:text-md">Lomba Gemastik 2024</h3>
              <p class="text-[#8C8C8C] xs:text-sm">Gemastik (Nasional)</p>
            </div>
          </div>
        </div>
        <div class="mt-10">
          <h3 class="text-[#15616D] font-semibold text-lg">20 Agustus 2023</h3>
          <div class="flex items-center mt-4">
            <img src="" alt=""
              class="bg-white rounded-full lg:w-20 lg:h-20 md:w-16 md:h-16 xs:w-14 xs:h-14">
            <div class="ml-4">
              <h3 class="font-semibold lg:text-xl md:text-lg xs:text-md">Lomba Gemastik 2024</h3>
              <p class="text-[#8C8C8C] xs:text-sm">Gemastik (Nasional)</p>
            </div>
          </div>
        </div>


      </div>
      {{-- Calender end --}}
    </div>
  </section>
  {{-- Wrapper end --}}


  {{-- warning start --}}
  <div id="toast-warning"
    class="absolute flex items-center w-full max-w-xs p-4 text-gray-500 bg-yellow-300 rounded-lg shadow right-10 top-20 dark:text-gray-400 dark:bg-gray-800"
    role="alert">
    <div
      class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-orange-500 bg-orange-100 rounded-lg dark:bg-orange-700 dark:text-orange-200">
      <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
        viewBox="0 0 20 20">
        <path
          d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM10 15a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm1-4a1 1 0 0 1-2 0V6a1 1 0 0 1 2 0v5Z" />
      </svg>
      <span class="sr-only">Warning icon</span>
    </div>
    <div class="ml-3 text-sm font-normal">Lengkapi Profile Anda.</div>
    <button type="button"
      class="ml-auto -mx-1.5 -my-1.5 bg-yellow-300 text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
      data-dismiss-target="#toast-warning" aria-label="Close">
      <span class="sr-only">Close</span>
      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
      </svg>
    </button>
  </div>
  {{-- warning end --}}



  @include('components.app.footer')


  @push('js-custom')
    <script src="{{ $chart->cdn() }}"></script>
    {{ $chart->script() }}
    <script src="{{ $bootcamp->cdn() }}"></script>
    {{ $bootcamp->script() }}
  @endpush
@endsection
