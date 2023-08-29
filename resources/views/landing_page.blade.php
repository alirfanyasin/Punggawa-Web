@extends('layouts.app')
@section('title',
  env('APP_NAME') .
  '- Pusat informasi dan pengelolaan lomba di bidang akademik dan non-akademik
  Institut Teknologi Telkom Surabaya')
@section('content')
  <!-- Jumbotron start -->
  <section id="jumbotron-section">
    <div class="relative flex justify-center h-screen bg-center bg-no-repeat bg-cover">
      <div class="absolute w-full -mt-6 animation-wave -z-10">
        <img src="/assets/image/bg-jumbotron-lp2.png " class="absolute w-full mT-10 waveTop" alt="">
        <img src="/assets/image/bg-jumbotron-lp4.png " class="absolute w-full mt-5 waveMiddle" alt="">
        <img src="/assets/image/bg-jumbotron-lp3.png " class="absolute w-full mt-16 waveBottom" alt="">
      </div>
      <div class="container flex items-center max-w-screen-xl mt-10">
        <div class="w-6/12 tagline">
          <h1 class="font-semibold text-white uppercase text-7xl">Punggawa
            <br>
            <span class="text-[#FFB902]">Inspiratif</span>
          </h1>
          <p class="mt-10 text-[#E9E9E9] text-xl">Pusat informasi dan pengelolaan lomba di bidang akademik dan
            non-akademik Institut Teknologi Telkom Surabaya</p>

          <a href="#" class="inline-block px-7 py-3 mt-10 rounded-lg bg-white text-[#15616D] shadow-lg">Lihat
            Lomba</a>
        </div>
        <div class="w-6/12 mx-auto tagline">
          <img src="/assets/image/object-jp.png" class="w-full" alt="">
        </div>
      </div>
    </div>
  </section>
  <!-- Jumbotron end -->


  <!-- About start -->
  <section class="mt-32">
    <header class="text-center">
      <h2 class="text-4xl font-semibold text-[#3D4650]">Tentang Punggawa
        <span class="text-[#15616D]">Inspiratif</span>
      </h2>
    </header>
    <div class="flex justify-center mt-16 rounded-lg">
      <iframe width="700" height="400" src="https://www.youtube.com/embed/ck-x84uSgxg?si=VqKhVarxivwhhPIy"
        title="YouTube video player" frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        allowfullscreen class="rounded-2xl"></iframe>
    </div>
  </section>
  <!-- About end -->

  <!-- Visi start -->
  <section class="mt-32">
    <header class="text-center">
      <h2 class="text-4xl font-semibold text-[#3D4650]">Visi Punggawa
        <span class="text-[#15616D]">Inspiratif</span>
      </h2>
    </header>
    <div class="flex justify-center w-full">
      <div class="mt-10 rounded-3xl container max-w-5xl box-border p-10 bg-[#F5F5F5]">
        <p class="text-center">Menjadi pionir transformasi mahasiswa melalui penciptaan lingkungan pengembangan yang
          unggul berlandaskan karakter prestatif dan kontributif.</p>
      </div>
    </div>
  </section>
  <!-- Visi end -->

  <!-- Misi start -->
  <section class="mt-10">
    <header class="text-center">
      <h2 class="text-4xl font-semibold text-[#3D4650]">Misi Punggawa
        <span class="text-[#15616D]">Inspiratif</span>
      </h2>
    </header>
    <div class="box-border flex justify-center mt-10">
      <div class="grid max-w-5xl grid-cols-3 gap-4">
        <div
          class="bg-[#F5F5F5] box-border p-5 rounded-xl hover:-translate-y-5 hover:-translate-x-5 hover:scale-110 hover:ease-out hover:duration-700">
          <div class="flex justify-center mt-6">
            <img src="./assets/image/icon/icon-1.png" class="w-20 h-20" alt="">
          </div>
          <p class="mt-5 text-center">Menyampaikan informasi terkait kegiatan pengembangan dan kompetisi mahasiswa.
          </p>
        </div>
        <div
          class="bg-[#F5F5F5] box-border p-5 rounded-xl hover:-translate-y-5 hover:scale-100 hover:ease-out hover:duration-700">
          <div class="flex justify-center mt-6">
            <img src="./assets/image/icon/icon-2.png" class="w-20 h-20" alt="">
          </div>
          <p class="mt-5 text-center">Memberikan dukungan serta panduan dalam mempersiapkan diri menghadapi kompetisi.
          </p>
        </div>
        <div
          class="bg-[#F5F5F5] box-border p-5 rounded-xl hover:-translate-y-5 hover:translate-x-5 hover:scale-110 hover:ease-out hover:duration-700">
          <div class="flex justify-center mt-6">
            <img src="./assets/image/icon/icon-3.png" class="w-20 h-20" alt="">
          </div>
          <p class="mt-5 text-center">Menyediakan lingkungan dan aktivitas pengembangan dalam persiapan serta partisipasi
            menghadapi berbagai kompetisi.
          </p>
        </div>
        <div
          class="bg-[#F5F5F5] box-border p-5 rounded-xl hover:translate-y-5 hover:-translate-x-5 hover:scale-110 hover:ease-out hover:duration-700">
          <div class="flex justify-center mt-6">
            <img src="./assets/image/icon/icon-4.png" class="w-20 h-20" alt="">
          </div>
          <p class="mt-5 text-center">Mengapresiasi dan mempromosikan usaha serta prestasi mahasiswa berpartisipasi dan
            berprestasi dalam berbagai kompetisi.
          </p>
        </div>
        <div
          class="bg-[#F5F5F5] box-border p-5 rounded-xl hover:translate-y-5 hover:scale-100 hover:ease-out hover:duration-700">
          <div class="flex justify-center mt-6">
            <img src="./assets/image/icon/icon-5.png" class="w-20 h-20" alt="">
          </div>
          <p class="mt-5 text-center">
            Mendorong dan menginspirasi mahasiswa untuk turut aktif berkompetisi dan berkontribusi.
          </p>
        </div>
        <div
          class="bg-[#F5F5F5] box-border p-5 rounded-xl hover:translate-y-5 hover:translate-x-5 hover:scale-110 hover:ease-out hover:duration-700">
          <div class="flex justify-center mt-6">
            <img src="./assets/image/icon/icon-6.png" class="w-20 h-20" alt="">
          </div>
          <p class="mt-5 text-center">Berkolaborasi secara internal dan eksternal untuk menciptakan lingkungan
            pengembangan mahasiswa.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- Misi end -->


  <div class="relative w-full h-full">
    <img src="/assets/image/bg2-jumbotron-lp.png" class="absolute w-full -mt-80 -z-10" alt="">
  </div>


  <!-- Divisi start -->
  <section class="mt-32">
    <header class="text-center">
      <div class="mb-3 text-2xl text-white">Division</div>
      <h2 class="text-4xl font-semibold text-center text-white">Misi Punggawa
        <span class="text-[#FFB902]">Inspiratif</span>
      </h2>
    </header>
    <div class="max-w-screen-xl mx-auto mt-10">
      <div class="grid grid-cols-4 gap-4">
        <div class="bg-[#F5F5F5] box-border p-5 rounded-xl shadow-xl">
          <div class="flex justify-center mt-6">
            <img src="./assets/image/icon/icon-7.png" class="w-20 h-20" alt="">
          </div>
          <h3 class="text-2xl font-bold text-[#4D4D4D] text-center">GEMASTIK</h3>
          <p class="mt-5 mb-5 text-center">
            Our membership management software provides full automation of membership renewals and payments
          </p>
        </div>
        <div class="bg-[#F5F5F5] box-border p-5 rounded-xl shadow-xl">
          <div class="flex justify-center mt-6">
            <img src="./assets/image/icon/icon-8.png" class="w-20 h-20" alt="">
          </div>
          <h3 class="text-2xl font-bold text-[#4D4D4D] text-center">PKM</h3>
          <p class="mt-5 mb-5 text-center">
            Our membership management software provides full automation of membership renewals and payments
          </p>
        </div>
        <div class="bg-[#F5F5F5] box-border p-5 rounded-xl shadow-xl">
          <div class="flex justify-center mt-6">
            <img src="./assets/image/icon/icon-9.png" class="w-20 h-20" alt="">
          </div>
          <h3 class="text-2xl font-bold text-[#4D4D4D] text-center">MAWAPRES</h3>
          <p class="mt-5 mb-5 text-center">
            Our membership management software provides full automation of membership renewals and payments
          </p>
        </div>
        <div class="bg-[#F5F5F5] box-border p-5 rounded-xl shadow-xl">
          <div class="flex justify-center mt-6">
            <img src="./assets/image/icon/icon-10.png" class="w-20 h-20" alt="">
          </div>
          <h3 class="text-2xl font-bold text-[#4D4D4D] text-center">DATA ETHUSIAST
          </h3>
          <p class="mt-5 mb-5 text-center">
            Our membership management software provides full automation of membership renewals and payments
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- Divisi end -->


  <!-- Kilas start -->
  <section class="mt-32">
    <header class="text-center">
      <div class="mb-3 text-2xl">Kilas</div>
      <h2 class="text-4xl font-semibold text-center">Pemaparan
        <span class="text-[#15616D]">Juara</span>
      </h2>
    </header>

    <div class="max-w-screen-xl mx-auto mt-10">
      <div class="grid grid-cols-3 gap-10">
        <div class="rounded-xl">
          <div class="relative">
            <img src="/assets/image/card-1.png" class="w-full" alt="">
            <div class="absolute flex items-center px-4 py-2 bg-white rounded-lg top-2 left-2">
              <img src="/assets/image/icon/icon-piala.png" class="w-4 h-4 mr-2" alt="">
              <span class="font-medium">Prestasi</span>
            </div>
            <div class="absolute flex items-center px-4 py-1 bg-white rounded-lg bottom-2 right-2">
              <img src="/assets/image/icon/icon-calender.png" class="w-8 h-8 mr-2" alt="">
              <span class="">05 Agustus 2023</span>
            </div>
          </div>
          <p class="mt-5 text-2xl font-bold">Dosen dan Mahasiswa Teknologi Informasi berkolaborasi untuk membangun Smart
            Urban Farming</p>
        </div>
        <div class="rounded-xl">
          <div class="relative">
            <img src="/assets/image/card-1.png" class="w-full" alt="">
            <div class="absolute flex items-center px-4 py-2 bg-white rounded-lg top-2 left-2">
              <img src="/assets/image/icon/icon-piala.png" class="w-4 h-4 mr-2" alt="">
              <span class="font-medium">Prestasi</span>
            </div>
            <div class="absolute flex items-center px-4 py-1 bg-white rounded-lg bottom-2 right-2">
              <img src="/assets/image/icon/icon-calender.png" class="w-8 h-8 mr-2" alt="">
              <span class="">05 Agustus 2023</span>
            </div>
          </div>
          <p class="mt-5 text-2xl font-bold">Dosen dan Mahasiswa Teknologi Informasi berkolaborasi untuk membangun Smart
            Urban Farming</p>
        </div>
        <div class="rounded-xl">
          <div class="relative">
            <img src="/assets/image/card-1.png" class="w-full" alt="">
            <div class="absolute flex items-center px-4 py-2 bg-white rounded-lg top-2 left-2">
              <img src="/assets/image/icon/icon-piala.png" class="w-4 h-4 mr-2" alt="">
              <span class="font-medium">Prestasi</span>
            </div>
            <div class="absolute flex items-center px-4 py-1 bg-white rounded-lg bottom-2 right-2">
              <img src="/assets/image/icon/icon-calender.png" class="w-8 h-8 mr-2" alt="">
              <span class="">05 Agustus 2023</span>
            </div>
          </div>
          <p class="mt-5 text-2xl font-bold">Dosen dan Mahasiswa Teknologi Informasi berkolaborasi untuk membangun Smart
            Urban Farming</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Kilas end -->


  <!-- FAQ start -->
  <section class="h-screen mt-52" id="faq-section">
    <div class="max-w-screen-xl pt-40 mx-auto">
      <header class="flex items-center justify-start">
        <img src="/assets/image/icon/icon-chat.png" class="w-9 h-9" alt="">
        <span class="ml-5 font-bold text-[#15616D] text-3xl">Pertanyaan yang sering diajukan</span>
      </header>

      <div id="accordion-flush" data-accordion="collapse"
        data-active-classes="bg-[#CCF7FF] px-10 dark:bg-gray-900 text-gray-900 dark:text-white"
        data-inactive-classes="text-gray-500 dark:text-gray-400 rounded-xl mb-5 bg-white p-10" class="mt-10">
        <h2 id="accordion-flush-heading-1" class="">
          <button type="button"
            class="flex items-center justify-between w-full py-5 font-medium text-left text-black rounded-t-xl dark:border-gray-700 dark:text-gray-400"
            data-accordion-target="#accordion-flush-body-1" aria-expanded="true"
            aria-controls="accordion-flush-body-1">
            <span>What is Webflow and why is it the best website builder?</span>
            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 5 5 1 1 5" />
            </svg>
          </button>
        </h2>
        <div id="accordion-flush-body-1" class="hidden bg-[#CCF7FF] px-10 pb-5 rounded-b-xl shadow-lg mb-5"
          aria-labelledby="accordion-flush-heading-1">
          <div class="py-5 dark:border-gray-700">
            <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of interactive components
              built on top of Tailwind CSS including buttons, dropdowns, modals, navbars, and more.</p>
            <p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to
              <a href="/docs/getting-started/introduction/" class="text-blue-600 dark:text-blue-500 hover:underline">get
                started</a>
              and start developing websites even faster with components on top of Tailwind CSS.
            </p>
          </div>
        </div>
        <h2 id="accordion-flush-heading-2">
          <button type="button"
            class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 dark:border-gray-700 dark:text-gray-400"
            data-accordion-target="#accordion-flush-body-2" aria-expanded="false"
            aria-controls="accordion-flush-body-2">
            <span>Is there a Figma file available?</span>
            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 5 5 1 1 5" />
            </svg>
          </button>
        </h2>
        <div id="accordion-flush-body-2" class="hidden bg-[#CCF7FF] px-10 pb-5 rounded-b-xl shadow-lg mb-5"
          aria-labelledby="accordion-flush-heading-2">
          <div class="py-5 dark:border-gray-700">
            <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and designed using the
              Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
            <p class="text-gray-500 dark:text-gray-400">Check out the
              <a href="https://flowbite.com/figma/" class="text-blue-600 dark:text-blue-500 hover:underline">Figma
                design system</a>
              based on the utility classes from Tailwind CSS and components from Flowbite.
            </p>
          </div>
        </div>
        <h2 id="accordion-flush-heading-3">
          <button type="button"
            class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 dark:border-gray-700 dark:text-gray-400"
            data-accordion-target="#accordion-flush-body-3" aria-expanded="false"
            aria-controls="accordion-flush-body-3">
            <span>What are the differences between Flowbite and Tailwind UI?</span>
            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 5 5 1 1 5" />
            </svg>
          </button>
        </h2>
        <div id="accordion-flush-body-3" class="hidden bg-[#CCF7FF] px-10 pb-5 rounded-b-xl shadow-lg mb-5"
          aria-labelledby="accordion-flush-heading-3">
          <div class="py-5 dark:border-gray-700">
            <p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that the core components from
              Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product. Another difference is
              that Flowbite relies on smaller and standalone components, whereas Tailwind UI offers sections of pages.</p>
            <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both Flowbite, Flowbite
              Pro, and even Tailwind UI as there is no technical reason stopping you from using the best of two worlds.
            </p>
            <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>
            <ul class="pl-5 text-gray-500 list-disc dark:text-gray-400">
              <li>
                <a href="https://flowbite.com/pro/" class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite
                  Pro</a>
              </li>
              <li>
                <a href="https://tailwindui.com/" rel="nofollow"
                  class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a>
              </li>
            </ul>
          </div>
        </div>
        <h2 id="accordion-flush-heading-4">
          <button type="button"
            class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 dark:border-gray-700 dark:text-gray-400"
            data-accordion-target="#accordion-flush-body-4" aria-expanded="false"
            aria-controls="accordion-flush-body-4">
            <span>Why is BRIX Templates the best Webflow agency out there?</span>
            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 5 5 1 1 5" />
            </svg>
          </button>
        </h2>
        <div id="accordion-flush-body-4" class="hidden bg-[#CCF7FF] px-10 pb-5 rounded-b-xl shadow-lg"
          aria-labelledby="accordion-flush-heading-4">
          <div class="py-5 dark:border-gray-700">
            <p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that the core components from
              Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product. Another difference is
              that Flowbite relies on smaller and standalone components, whereas Tailwind UI offers sections of pages.</p>
            <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both Flowbite, Flowbite
              Pro, and even Tailwind UI as there is no technical reason stopping you from using the best of two worlds.
            </p>
            <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>
            <ul class="pl-5 text-gray-500 list-disc dark:text-gray-400">
              <li>
                <a href="https://flowbite.com/pro/" class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite
                  Pro</a>
              </li>
              <li>
                <a href="https://tailwindui.com/" rel="nofollow"
                  class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- FAQ end -->

@endsection
