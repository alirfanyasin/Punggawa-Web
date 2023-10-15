@extends('layouts.app')
@section('title', env('APP_NAME') . ' - Division Profile')
@section('content')
  {{-- Breadcrumb start --}}
  <div class="flex justify-between breadcrumb">
    <h3 class="font-semibold lg:text-2xl xs:text-md md:text-xl">Division Profile</h3>
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
            <a href="{{ route('division.profile') }}"
              class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">Division
              Profile
            </a>
          </div>
        </li>
      </ol>
    </nav>
  </div>
  {{-- Breadcrumb end --}}

  {{-- Wrapper start --}}
  <section id="wrapper" class="h-screen mt-8">
    <form action="{{ route('division.profile.update', $data->user_id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      {{-- @method('PUT') --}}
      <div class="flex gap-4">
        <div class="w-6/12">
          <div class="mb-3">
            <label for="name_division" class="block mb-2">Name Division</label>
            <input type="text" name="name" id="name_division" class="w-full rounded-xl" value="{{ $data->name }}">
            @error('name')
              <small class="text-red-700">
                {{ $message }}
              </small>
            @enderror
          </div>
          <div class="mb-3">
            <label for="description" class="block mb-2">Description</label>
            <textarea name="description" id="description" cols="30" rows="6" class="w-full rounded-xl">{{ $data->description }}</textarea>
            @error('description')
              <small class="text-red-700">
                {{ $message }}
              </small>
            @enderror
          </div>
          <div class="mb-3">
            <label for="guidebook_link" class="block mb-2">Guidebook Link</label>
            <input type="text" name="guidebook_link" id="guidebook_link" class="w-full rounded-xl"
              value="{{ $data->guidebook_link }}">
            @error('guidebook_link')
              <small class="text-red-700">
                {{ $message }}
              </small>
            @enderror
          </div>

          <div class="grid grid-cols-2 gap-4 mb-3">
            <div>
              <label for="logo" class="block mb-2">Logo</label>
              <input type="file" name="logo" id="logo" class="w-full rounded-xl" onchange="readLogo(this)"
                value="{{ $data->logo }}">
              @error('logo')
                <small class="text-red-700">
                  {{ $message }}
                </small>
              @enderror
            </div>
            <div>
              <label for="timeline" class="block mb-2">Timeline</label>
              <input type="file" name="timeline" id="timeline" class="w-full rounded-xl" onchange="readTimeline(this)"
                value="{{ $data->timeline }}">
              @error('timeline')
                <small class="text-red-700">
                  {{ $message }}
                </small>
              @enderror
            </div>
          </div>

        </div>
        <div class="w-3/12">
          <div class="mt-7 bg-[#15616D] rounded-xl">
            <img src="{{ asset('storage/logo/' . $data->logo) }}" alt=""
              class="w-full border rounded-xl border-[#15616D]" id="previewLogo">
          </div>

        </div>
        <div class="w-3/12">
          <div class="mt-7 bg-[#15616D] rounded-xl">
            <img src="{{ asset('storage/timeline/' . $data->timeline) }}" alt=""
              class="w-full border rounded-xl border-[#15616D]" id="previewTimeline">
          </div>
        </div>
      </div>
      <div class="mt-5">
        <button type="submit" class="px-8 py-2 rounded-xl text-white bg-[#15616D] hover:bg-[#2a8996]"
          id="btn-all">Update Profile</button>
      </div>
    </form>
  </section>
  {{-- Wrapper end --}}


  @include('components.app.footer')

  @push('js-custom')
    <script>
      function readLogo(input) {
        let file = input.files[0];
        let fileReader = new FileReader();

        fileReader.onload = function() {
          let selectedImage = document.getElementById('previewLogo');
          selectedImage.src = fileReader.result;
        };

        fileReader.readAsDataURL(file);
      }

      function readTimeline(input) {
        let file = input.files[0];
        let fileReader = new FileReader();

        fileReader.onload = function() {
          let selectedImage = document.getElementById('previewTimeline');
          selectedImage.src = fileReader.result;
        };

        fileReader.readAsDataURL(file);
      }
    </script>
  @endpush


@endsection
