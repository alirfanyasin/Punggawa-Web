{{-- Footer start --}}
<footer class="w-full py-10 bg-[#2C717C]">
  <div class="max-w-screen-xl mx-auto md:px-0 xs:px-6">
    <div class="grid md:grid-cols-3 xs:grid-cols-1 gap-4">
      <div>
        <img src="{{ asset('assets/image/logo/Logo_Institut_Teknologi_Telkom_Surabaya_white.svg') }}" alt="">
        <h2 class="my-5 text-4xl font-semibold text-white">Punggawa <span class="text-[#FFB902]">Inspiratif</span></h2>
        <p class="text-white xs:text-sm md:text-md">Pusat informasi dan pengelolaan lomba di bidang akademik dan non-akademik
          Institut Teknologi Telkom Surabaya</p>
        <div class="flex gap-4 mt-5 social-media xs:hidden md:block">
          <a href="">
            <div class="flex items-center justify-center w-10 h-10 bg-white rounded-full facebook">
              <img src="{{ asset('assets/image/icon/facebook.png') }}" alt="">
            </div>
          </a>
          <a href="">
            <div class="flex items-center justify-center w-10 h-10 bg-white rounded-full facebook">
              <img src="{{ asset('assets/image/icon/telegram.png') }}" alt="">
            </div>
          </a>
          <a href="">
            <div class="flex items-center justify-center w-10 h-10 bg-white rounded-full facebook">
              <img src="{{ asset('assets/image/icon/instagram.png') }}" alt="">
            </div>
          </a>
        </div>
      </div>

      <div class="md:flex md:justify-center xs:my-10 md:my-0">
        <div>
          <h3 class="md:text-3xl xs:text-xl font-semibold text-white">Fitur</h3>
          <ul class="mt-3 text-white xs:text-sm md:text-md">
            <li><a href="">Beranda</a></li>
            <li><a href="">Divisi</a></li>
            <li><a href="">Pusat Informasi</a></li>
            <li><a href="">FAQ</a></li>
          </ul>
        </div>
      </div>

      <div>
        <h3 class="md:text-3xl xs:text-xl font-semibold text-white">Hubungi Kami</h3>
        <div class="flex mt-5">
          <img src="{{ asset('assets/image/icon/location.png') }}" class="w-10 h-10" alt="">
          <p class="ml-5 text-white xs:text-sm md:text-md">Jl. Ketintang No.156, Gayungan, Surabaya,
            Jawa Timur 60231</p>
        </div>
        <div class="flex mt-5">
          <img src="{{ asset('assets/image/icon/email.png') }}" class="w-10 h-10" alt="">
          <p class="ml-5 text-white xs:text-sm md:text-md">punggawainspiratif@gmail.com</p>
        </div>
        <div class="flex mt-5">
          <div class="relative flex items-center w-full">
            <div class="absolute rounded-full p-3 left-2 bg-[#F8F8F8]">
              <img src="{{ asset('assets/image/icon/email2.png') }}" class="w-5 h-5" alt="">
            </div>
            <input type="email" name="email" id="email"
              class="w-full p-5 pl-16 pr-40 text-sm bg-white rounded-full text-slate-400 h-14"
              placeholder="Masukkan email...">
            <button
              class="px-7 py-2 absolute right-2 rounded-full font-bold tracking-widest text-sm text-black uppercase bg-[#FFB902]">Subscribe</button>
          </div>
        </div>
      </div>
    </div>

    <hr class="mt-10 border border-slate-400">

    <div class="mt-5 text-center">
      <p class="text-white xs:text-xs md:text-md">Copyright &copy; {{ date('Y') }} Punggawa Inspiratif | All Rights Reserved </p>
    </div>


  </div>

</footer>
{{-- Footer end --}}
