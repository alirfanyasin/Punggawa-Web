@extends('layouts.auth')
@section('title', env('APP_NAME') . ' - Login')
@section('content')

  <main>
    <div class="flex items-center justify-center lg:flex-nowrap xs:flex-wrap xs:mt-20 md:mt-0">
      <div class="w-1/2 md:block xs:hidden">
        <img src="{{ asset('assets/image/illustration-3.png') }}" class="w-full h-screen" alt="">
      </div>
      <div class="lg:px-32 xs:px-10 md:w-1/2 xs:w-full">
        <form action="" class="">
          <h1 class="text-[#2C717C] text-4xl mb-10">Masuk</h1>
          <div class="w-full mb-9 input-group">
            <input type="text" name="email"
              class="border-b-2 bg-transparent border-[#2C717C] border-0 focus:ring-0  w-full" id=""
              placeholder="Masukkan NIM / Email">
          </div>
          <div class="w-full mb-3 input-group">
            <input type="password" name="email"
              class="border-b-2 bg-transparent border-[#2C717C] border-0 focus:ring-0 w-full" id=""
              placeholder="Password">
          </div>
          <div class="flex justify-between mb-9">
            <div>
              <input type="checkbox" name="" class="mr-3" id="remember">
              <label for="remember" class="text-[#7E7E7E] text-sm">Remember me?</label>
            </div>
            <a href="" class="text-[#7E7E7E] text-sm">Lupa Password?</a>
          </div>
          <div>
            <button type="submit"
              class="py-3 rounded-xl w-full font-semibold bg-[#2C717C] text-white hover:bg-[#26616a]">Masuk</button>
          </div>
        </form>
        <div class="text-center mt-9">
          <span class="mb-5 text-[#7E7E7E]">Atau masuk menggunakan</span>
          <a href="">
            <img src="{{ asset('assets/image/icon/icon-google.png') }}" class="mx-auto my-5" alt="">
          </a>
          <span class="text-[#7E7E7E]">Belum memiliki akun ? <a href="/register"
              class="text-[#2C717C] font-semibold">Daftar</a></span>
        </div>
      </div>
    </div>
  </main>

@endsection
