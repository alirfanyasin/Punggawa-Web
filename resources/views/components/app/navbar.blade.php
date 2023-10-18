<nav class="bg-[#15616D] w-full fixed z-20 ">
  <div class="flex items-center justify-between py-3 lg:px-14 xs:px-5">
    <div class="flex items-center logo">
      <div class="mr-3 text-2xl text-white hover:cursor-pointer icon-menu xs:block lg:hidden">
        <i class="fa-solid fa-bars"></i>
      </div>
      <img src="{{ asset('assets/image/logo/logo_itts.png') }}" class="lg:w-20 lg:h-10 xs:w-15 xs:h-8" alt="">
    </div>
    <div class="flex items-center account">
      <span class="mr-5 text-white xs:hidden md:block"><b>Halo</b>, {{ Auth::user()->name }}</span>

      <span
        class="lg:w-10 lg:h-10 xs:w-8 xs:h-8 p-0.5 overflow-hidden rounded-full ring-2 ring-slate-300 hover:cursor-pointer"
        id="dropdownDefaultButton" data-dropdown-toggle="dropdown">
        <img src="{{ asset('assets/image/photo-profile.jpg') }}" class="w-full h-full overflow-hidden rounded-full"
          alt="">
      </span>



      <!-- Dropdown menu -->
      <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
          @hasrole(['super-admin', 'user'])
            <li>
              <a href="{{ route('account.setting') }}"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><i
                  class="fa-regular fa-user"></i>&nbsp; Account</a>
            </li>
          @endhasrole
          {{-- <li>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><i
                class="fa-solid fa-gear"></i>&nbsp; Activity Log</a>
          </li> --}}
          <li>
            <form action="{{ route('logout') }}" method="POST" class="inline">
              @csrf
              <button
                class="block w-full px-4 py-2 text-left hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><i
                  class="fa-solid fa-arrow-right-from-bracket"></i>&nbsp; Logout</button>
            </form>

          </li>
        </ul>
      </div>


    </div>
  </div>
</nav>
