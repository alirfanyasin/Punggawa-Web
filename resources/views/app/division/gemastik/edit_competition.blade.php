@extends('layouts.app')
@section('title', env('APP_NAME') . ' - Edit Competition')
@section('content')
  {{-- Breadcrumb start --}}
  <div class="flex justify-between breadcrumb">
    <h3 class="font-semibold lg:text-2xl xs:text-md md:text-xl">Edit Competition</h3>
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
            <a href="{{ route('division.competition.create') }}"
              class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">Edit
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
    <form action="{{ route('division.competition.update', $data->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="flex gap-4">
        <div class="w-8/12">
          <div class="mb-3">
            <label for="name_competition" class="block mb-2">Name Competition</label>
            <input type="text" name="name" id="name_competition" class="w-full rounded-xl"
              value="{{ $data->name }}">
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

          <div class="grid grid-cols-2 gap-4 mb-3">
            <div>
              <label for="start_date" class="block mb-2">Start Date</label>
              <input type="date" id="start_date" name="start_date" class="w-full rounded-xl"
                value="{{ $data->start_date }}">
              @error('start_date')
                <small class="text-red-700">
                  {{ $message }}
                </small>
              @enderror
            </div>
            <div>
              <label for="end_date" class="block mb-2">End Date <span class="italic">(optional)</span></label>
              <input type="date" id="end_date" name="end_date" class="w-full rounded-xl"
                value="{{ $data->end_date }}">
            </div>
          </div>
          <div class="grid grid-cols-2 gap-4 mb-3">
            <div>
              <label for="guidebook_link" class="block mb-2">Guidebook Link <span class="italic">(optional)</span></label>
              <input type="text" name="guidebook_link" id="guidebook_link" class="w-full rounded-xl"
                value="{{ $data->guidebook_link }}">
            </div>
            <div>
              <label for="registration_link" class="block mb-2">Registration Link <span
                  class="italic">(optional)</span></label>
              <input type="text" name="registration_link" id="registration_link" class="w-full rounded-xl"
                value="{{ $data->registration_link }}">
            </div>
          </div>

          <div class="grid grid-cols-2 gap-4 mb-3">
            <div>
              <label for="category" class="block mb-2">Category</label>
              <select name="category" id="category" class="rounded-xl">
                <option value="Programming" {{ $data->category == 'Programming' ? 'selected' : '' }}>Programming</option>
                <option value="Cyber Security" {{ $data->category == 'Cyber Security' ? 'selected' : '' }}>Cyber Security
                </option>
                <option value="Data Mining" {{ $data->category == 'Data Mining' ? 'selected' : '' }}>Data Mining</option>
                <option value="UX Design" {{ $data->category == 'UX Design' ? 'selected' : '' }}>UX Design</option>
                <option value="Animation" {{ $data->category == 'UX Design' ? 'selected' : '' }}>Animation</option>
                <option value="Smart City" {{ $data->category == 'Smart City' ? 'selected' : '' }}>Smart City</option>
                <option value="ICT Scientific Paper" {{ $data->category == 'ICT Scientific Paper' ? 'selected' : '' }}>
                  ICT Scientific Paper</option>
                <option value="Software Development" {{ $data->category == 'Software Development' ? 'selected' : '' }}>
                  Software Development</option>
                <option value="Smart Device, Embedded System & IoT"
                  {{ $data->category == 'Smart Device, Embedded System & IoT' ? 'selected' : '' }}>Smart Device, Embedded
                  System & IoT</option>
                <option value="ICT Bussiness Development"
                  {{ $data->category == 'ICT Bussiness Development' ? 'selected' : '' }}>ICT Bussiness Development
                </option>
                <option value="Game Development" {{ $data->category == 'Game Development' ? 'selected' : '' }}>Game
                  Development</option>
              </select>
            </div>
            <div>
              <label for="poster" class="block mb-2">Poster</label>
              <input type="file" name="poster" id="poster" class="w-full rounded-xl" onchange="previewFile()"
                value="{{ $data->poster }}">
              @error('poster')
                <small class="text-red-700">
                  {{ $message }}
                </small>
              @enderror
            </div>
          </div>

        </div>
        <div class="w-4/12">
          <div class="mt-7">
            <img src="{{ asset('storage/poster/' . $data->poster) }}" alt="" class="w-full rounded-xl"
              id="previewImg">
          </div>
        </div>
      </div>
      <div class="mt-5">
        <button type="submit" class="px-8 py-2 rounded-xl text-white bg-[#15616D] hover:bg-[#2a8996]"
          id="btn-all">Update</button>
      </div>
    </form>
  </section>
  {{-- Wrapper end --}}

  @include('components.app.footer')

  @push('js-custom')
    <script>
      function previewFile() {
        const preview = document.querySelector("#previewImg");
        const file = document.querySelector("input[type=file]").files[0];
        const reader = new FileReader();

        reader.addEventListener(
          "load",
          () => {
            // convert image file to base64 string
            preview.src = reader.result;
          },
          false,
        );

        if (file) {
          reader.readAsDataURL(file);
        }
      }
    </script>
  @endpush


@endsection
