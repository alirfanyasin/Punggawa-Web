@extends('layouts.auth')
@section('title', env('APP_NAME') . ' - Login')
@section('content')

  <main>
    <div class="flex items-center justify-center lg:flex-nowrap xs:flex-wrap xs:mt-20 md:mt-0">
      <div class="lg:px-32 xs:px-10 md:w-1/2 xs:w-full">
        <form action="" class="">
          <h1 class="text-[#2C717C] text-4xl mb-10">Daftar</h1>
          <div class="w-full mb-9 input-group">
            <input type="text" name="email"
              class="border-b-2 bg-transparent border-[#2C717C] border-0 focus:ring-0 w-full" id=""
              placeholder="Nama Lengkap">
          </div>
          <div class="w-full mb-9 input-group">
            <input type="email" name="email"
              class="border-b-2 bg-transparent border-[#2C717C] border-0 focus:ring-0 w-full" id=""
              placeholder="Alamat Email">
          </div>
          <div class="w-full mb-9 input-group">
            <input type="number" name="email"
              class="border-b-2 bg-transparent border-[#2C717C] border-0 focus:ring-0 w-full" id=""
              placeholder="NIM">
          </div>
          <div class="w-full mb-9 input-group">
            <input type="password" name="email"
              class="border-b-2 bg-transparent border-[#2C717C] border-0 focus:ring-0 w-full" id=""
              placeholder="Password">
          </div>
          <div>
            <button type="submit"
              class="py-3 rounded-xl w-full font-semibold bg-[#2C717C] text-white hover:bg-[#26616a]">Daftar</button>
          </div>
        </form>
        <div class="text-center mt-9">
          <span class="mb-5 text-[#7E7E7E]">Atau masuk menggunakan</span>
          <a href="">
            <img src="{{ asset('assets/image/icon/icon-google.png') }}" class="mx-auto my-5" alt="">
          </a>
          <span class="text-[#7E7E7E]">Sudah memiliki akun ? <a href="/login"
              class="text-[#2C717C] font-semibold">Masuk</a></span>
        </div>
      </div>
      <div class="w-1/2 md:block xs:hidden">
        <img src="{{ asset('assets/image/illustration-4.png') }}" class="w-full h-screen" alt="">
      </div>

    </div>
  </main>

@endsection
