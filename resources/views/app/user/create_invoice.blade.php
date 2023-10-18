@extends('layouts.app')
@section('title', env('APP_NAME') . ' - Create Invoice')
@section('content')
  {{-- Breadcrumb start --}}
  <div class="flex justify-between breadcrumb">
    <h3 class="font-semibold lg:text-2xl xs:text-md md:text-xl">Create Invoice</h3>
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
    <div class="flex justify-between gap-5">
      <div class="w-7/12">
        <div class="mb-4">
          <label for="select_competition">Select Competition</label>
          <select name="" id="select_competition" class="block mt-2 rounded-xl w-full" onchange="getValue()">
            <option selected disabled>-- Choose --</option>
            @foreach ($data as $competition)
              <option value="{{ $competition->id }}">{{ $competition->name }} -
                {{ $competition->category }} -
                {{ $competition->user->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="mb-4">
          <label for="fund">Fund</label>
          <input type="number" class="rounded-xl block mt-2 w-full" name="fund" placeholder="Rp. 250.000">
        </div>
      </div>
      <div class="w-5/12">
        <label for="">Preview</label>
        <div class="rounded-xl border w-full overflow-hidden mt-2">
          <header class="text-center bg-[#15616D] text-white py-3">
            <h1 class="pt-7 text-center text-5xl font-semibold">Invoice</h1>
            <p class="font-semibold text-lg">Punggawa <span class="text-yellow-400">Inspratif</span></p>
          </header>
          <div class="p-10">
            <table>
              <tr class="">
                <td class="font-semibold">Nama Mahasiswa</td>
                <td class="ml-3">:</td>
                <td>{{ Auth::user()->name }}</td>
              </tr>
              <tr>
                <td class="font-semibold">NIM</td>
                <td>:</td>
                <td>{{ Auth::user()->nim }}</td>
              </tr>
              {{-- <tr>
                <td class="font-semibold">Prodi</td>
                <td>:</td>
                <td>{{ Auth::user()->nim }}</td>
              </tr> --}}
              <tr>
                <td class="font-semibold">Nama Lomba</td>
                <td>:</td>
                <td class="nama-lomba">-</td>
              </tr>
              <tr>
                <td class="font-semibold">Kategori Lomba</td>
                <td>:</td>
                <td class="kategori-lomba">-</td>
              </tr>
              <tr>
                <td class="font-semibold">Biaya Lomba</td>
                <td>:</td>
                <td class="biaya">-</td>
              </tr>
            </table>

            <div class="mt-20 text-center me-0">
              <p class="mb-20">Surabaya, 20 Oktober 2023</p>
              <p class="font-semibold">Nama Dosen</p>
              <p class="">Kemahasiswaan</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Wrapper end --}}

  @include('components.app.footer')

  <script>
    function getValue() {
      const selectElement = document.getElementById('select_competition'); // Mengakses elemen select
      const selectedValue = selectElement.value; // Mengambil nilai terpilih

      console.log(selectedValue); // Mencetak nilai terpilih ke konsol


      $.ajax({
        url: "{{ route('invoice.selected', ':id') }}".replace(':id', selectedValue),
        type: 'GET',
        success: function(response) {
          console.log('success');
          $('.nama-lomba').text(response.dataSelected.name);
          $('.kategori-lomba').text(response.dataSelected.category);

          // Perbarui elemen HTML dengan data yang diterima
          // $('.biaya').text('Rp. ' + response.dataSelected.fund);
        },
        error: function(res) {
          alert('error')
        }
      })
    }
  </script>

@endsection
