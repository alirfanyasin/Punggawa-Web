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
        <form action="{{ route('invoice.store') }}" method="POST">
          @csrf
          <div class="mb-4">
            <label for="select_competition">Pilih Lomba</label>
            <select name="competition_id" id="select_competition" class="block w-full mt-2 rounded-xl"
              onchange="getValue()">
              <option selected disabled>-- Choose --</option>
              @foreach ($data as $competition)
                @if ($competition->fund != null)
                  <option value="{{ $competition->id }}">{{ $competition->name }} -
                    {{ $competition->user->name }}</option>
                @endif
              @endforeach
            </select>
          </div>
          <div class="mb-4">
            <button type="submit" class="px-8 py-2 rounded-xl text-white bg-[#15616D] hover:bg-[#2a8996]">Submit</button>
          </div>
        </form>
      </div>
      <div class="w-5/12">
        <label for="">Preview</label>
        <div class="w-full mt-2 overflow-hidden border rounded-xl">
          <header class="text-center bg-[#15616D] text-white py-3">
            <h1 class="mb-3 text-4xl font-semibold text-center pt-7">Pengajuan Biaya</h1>
            <p class="text-lg font-semibold">Punggawa <span class="text-yellow-400">Inspratif</span></p>
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
              <tr>
                <td class="font-semibold">No Rekening</td>
                <td>:</td>
                <td class="no_rek">-</td>
              </tr>
            </table>

            <div class="mt-20 text-center me-0">
              <p class="mb-20">Surabaya, {{ date('d F Y') }}</p>
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
          $('.biaya').text(response.dataSelected.fund);
          $('.no_rek').text(response.dataSelected.no_rek);
        },
        error: function(res) {
          alert('error')
        }
      })
    }
  </script>

@endsection
