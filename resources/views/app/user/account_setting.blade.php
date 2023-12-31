@extends('layouts.app')
@section('title', env('APP_NAME') . ' - Contest Followed')
@section('content')
  {{-- Breadcrumb start --}}
  <div class="flex justify-between breadcrumb">
    <h3 class="font-semibold lg:text-2xl xs:text-md md:text-xl">Account</h3>
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
            <a href="{{ route('account.setting') }}"
              class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">Account</a>
          </div>
        </li>
      </ol>
    </nav>
  </div>
  {{-- Breadcrumb end --}}

  {{-- Wrapper start --}}
  <section id="wrapper" class="mt-8">
    <div class="gap-4 lg:flex lg:flex-nowrap md:flex-wrap">
      <div class="bg-[#F4F2F2] mb-5 p-5 rounded-xl relative lg:w-4/12 xs:w-full">
        <h2 class="font-semibold lg:text-xl xs:text-md">Profile</h2>
        <div class="mx-auto rounded-full w-40 relative h-40 ring-4 ring-[#2C717C] p-1 mt-16">
          <img src="{{ asset('assets/image/photo-profile.jpg') }}" class="w-full h-full rounded-full" alt="">
          {{-- <a href="#"
            class="w-8 h-8 rounded-full flex justify-center items-center absolute bg-[#2C717C] right-0 bottom-4">
            <span class="text-3xl text-white">+</span>
          </a> --}}
        </div>

        <div class="mb-20 lg:px-10 xs:px-2 mt-7">
          <div class="text-center">
            <h1 class="text-[#2C717C] font-bold lg:text-3xl xs:text-2xl">{{ Auth::user()->name }}</h1>
            <p class="text-[#8C8C8C]">{{ Auth::user()->study_program }}</p>
          </div>
          <div class="mt-5">
            <div class="mb-3 list-group">
              <label for="" class="text-[#2C717C] font-semibold ">NIM</label>
              <p class="text-[#8C8C8C]">{{ Auth::user()->nim }}</p>
            </div>
            <div class="mb-3 list-group">
              <label for="" class="text-[#2C717C] font-semibold ">Email Address</label>
              <p class="text-[#8C8C8C]">{{ Auth::user()->email }}</p>
            </div>
            <div class="mb-3 list-group">
              <label for="" class="text-[#2C717C] font-semibold ">Phone Number</label>
              <p class="text-[#8C8C8C]">{{ Auth::user()->phone_number }}</p>
            </div>
            <div class="mb-3 list-group">
              <label for="" class="text-[#2C717C] font-semibold ">Date of Birth</label>
              <p class="text-[#8C8C8C]">{{ date('d F Y', strtotime(Auth::user()->date_of_birth)) }}</p>
            </div>
            <div class="mb-3 list-group">
              <label for="" class="text-[#2C717C] font-semibold ">KTM</label>
              <p class="text-[#8C8C8C]"><a href="{{ asset('storage/ktm/' . Auth::user()->ktm) }}" target="_blank">Show your
                  KTM</a></p>
            </div>
            <div class="mb-3 list-group">
              <label for="" class="text-[#2C717C] font-semibold ">Generation</label>
              <p class="text-[#8C8C8C]">{{ Auth::user()->generation }}</p>
            </div>
          </div>
          <div class="absolute bottom-0 right-0">
            <img src="{{ asset('assets/image/illustration-2.png') }}" class="w-full" alt="">
          </div>
        </div>
      </div>

      <div class="bg-[#F4F2F2] p-5 rounded-xl lg:w-8/12 xs:w-full relative h-full">
        <h2 class="text-xl font-semibold">Setting</h2>
        <form action="{{ route('account.update') }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PATCH')
          <input type="hidden" name="id" value="{{ Auth::user()->id }}">
          <div class="grid gap-4 mt-6 md:grid-cols-2 xs:grid-cols-1">
            <div class="">
              <div class="mb-5 input-group">
                <label for="" class="text-[#15616D]">Full Name</label>
                <input type="text" name="name"
                  class="w-full border-none rounded-xl bg-[#E8E8E8] focus:ring-[#15616D]"
                  value="{{ Auth::user()->name }}">
                @error('name')
                  <small class="text-red-700">
                    {{ $message }}
                  </small>
                @enderror
              </div>
              <div class="mb-5 input-group">
                <label for="" class="text-[#15616D]">Email</label>
                <input type="email" name="email"
                  class="w-full border-none rounded-xl bg-[#E8E8E8] focus:ring-[#15616D]"
                  value="{{ Auth::user()->email }}">
                @error('email')
                  <small class="text-red-700">
                    {{ $message }}
                  </small>
                @enderror
              </div>
              <div class="mb-5 input-group">
                <label for="" class="text-[#15616D]">Place of Birth</label>
                <input type="text" name="place_of_birth"
                  class="w-full border-none rounded-xl bg-[#E8E8E8] focus:ring-[#15616D]"
                  value="{{ Auth::user()->place_of_birth }}">
                @error('place_of_birth')
                  <small class="text-red-700">
                    {{ $message }}
                  </small>
                @enderror
              </div>
              <div class="mb-5 input-group">
                <label for="" class="text-[#15616D]">Study program</label>
                <input type="text" name="study_program"
                  class="w-full border-none rounded-xl bg-[#E8E8E8] focus:ring-[#15616D]"
                  value="{{ Auth::user()->study_program }}">
                @error('study_program')
                  <small class="text-red-700">
                    {{ $message }}
                  </small>
                @enderror
              </div>
              <div class="mb-5 input-group">
                <label for="" class="text-[#15616D]">KTM</label>
                <input type="file" name="ktm"
                  class="w-full border-none rounded-xl bg-[#E8E8E8] focus:ring-[#15616D]"
                  value="{{ Auth::user()->ktm }}" accept="image/jpg, image/jpeg, image/png">
                @error('ktm')
                  <small class="text-red-700">
                    {{ $message }}
                  </small>
                @enderror
              </div>
            </div>
            <div class="">
              <div class="mb-5 input-group">
                <label for="" class="text-[#15616D]">NIM</label>
                <input type="number" name="nim"
                  class="w-full border-none rounded-xl bg-[#E8E8E8] focus:ring-[#15616D]"
                  value="{{ Auth::user()->nim }}">
                @error('nim')
                  <small class="text-red-700">
                    {{ $message }}
                  </small>
                @enderror
              </div>
              <div class="mb-5 input-group">
                <label for="" class="text-[#15616D]">Phone Number</label>
                <input type="number" name="phone_number"
                  class="w-full border-none rounded-xl bg-[#E8E8E8] focus:ring-[#15616D]"
                  value="{{ Auth::user()->phone_number }}">
                @error('phone_number')
                  <small class="text-red-700">
                    {{ $message }}
                  </small>
                @enderror
              </div>
              <div class="mb-5 input-group">
                <label for="" class="text-[#15616D]">Date of Birth</label>
                <input type="date" name="date_of_birth"
                  class="w-full border-none rounded-xl bg-[#E8E8E8] focus:ring-[#15616D]"
                  value="{{ Auth::user()->date_of_birth }}">
                @error('date_of_birth')
                  <small class="text-red-700">
                    {{ $message }}
                  </small>
                @enderror
              </div>
              <div class="mb-5 input-group">
                <label for="" class="text-[#15616D]">Generation</label>
                <input type="number" name="generation"
                  class="w-full border-none rounded-xl bg-[#E8E8E8] focus:ring-[#15616D]"
                  value="{{ Auth::user()->generation }}">
                @error('generation')
                  <small class="text-red-700">
                    {{ $message }}
                  </small>
                @enderror
              </div>
              <div class="mb-5 input-group">
                <label for="avatar" class="text-[#15616D]">Avatar</label>
                <input type="file" name="avatar"
                  class="w-full border-none rounded-xl bg-[#E8E8E8] focus:ring-[#15616D]"
                  value="{{ Auth::user()->avatar }}" accept="image/jpg, image/jpeg, image/png">
                @error('avatar')
                  <small class="text-red-700">
                    {{ $message }}
                  </small>
                @enderror
              </div>
            </div>
          </div>
          {{-- <div>
            <div class="mb-5 input-group">
              <label for="" class="text-[#15616D]">KTM</label>
              <input type="file" name="ktm"
                class="w-full border-none rounded-xl bg-[#E8E8E8] focus:ring-[#15616D]"
                value="{{ Auth::user()->ktm }}">
              @error('ktm')
                <small class="text-red-700">
                  {{ $message }}
                </small>
              @enderror
            </div>
          </div> --}}
          <div class="flex justify-end mt-5">
            <a href="#"
              class=" text-[#15616D] outline hover:bg-[#15616D] hover:text-white outline-2 outline-[#15616D] rounded-xl px-5 py-2 mr-3">Forgot
              Password</a>
            <button type="submit" class="bg-[#15616D] text-white rounded-xl px-5 py-2">Save Change</button>
          </div>
        </form>
      </div>
    </div>
  </section>
  {{-- Wrapper end --}}

  @include('components.app.footer')
@endsection
