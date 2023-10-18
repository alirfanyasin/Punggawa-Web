<aside class="bg-[#F4F2F2] lg:w-2/12 h-screen  lg:block lg:relative xs:hidden xs:w-8/12 xs:absolute z-10">
  @hasrole('user')
    <ul class="pt-20">
      <li class="text-[#15616D] font-semibold  hover:font-bold mb-3">
        @if (Request::is('dashboard'))
          <a href="/dashboard" class="flex items-center px-8 py-3">
            <img src="{{ asset('assets/image/icon/icon-dashboard-solid.png') }}" class="mr-3 w-7 h-7" alt="">
            Dashboard</a>
        @else
          <a href="/dashboard" class="flex items-center px-8 py-3">
            <img src="{{ asset('assets/image/icon/icon-dashboard.png') }}" class="mr-3 w-7 h-7" alt="">
            Dashboard</a>
        @endif
      </li>
      <li class="text-[#15616D] font-semibold  hover:font-bold mb-3">
        @if (Request::is('competition') || Request::is('competition/*'))
          <a href="{{ route('competition') }}" class="flex items-center px-8 py-3">
            <img src="{{ asset('assets/image/icon/icon-trophy-solid.png') }}" class="mr-3 w-7 h-7"
              alt="">Competition</a>
        @else
          <a href="{{ route('competition') }}" class="flex items-center px-8 py-3">
            <img src="{{ asset('assets/image/icon/icon-trophy.png') }}" class="mr-3 w-7 h-7"
              alt="">Competition</a>
        @endif
      </li>
      <li class="text-[#15616D] font-semibold  hover:font-bold mb-3">
        @if (Request::is('academic-advisor'))
          <a href="{{ route('academic-advisor') }}" class="flex items-center px-8 py-3">
            <img src="{{ asset('assets/image/icon/icon-lecture-solid.png') }}" class="mr-3 w-7 h-7"
              alt="">Academic Advisor</a>
        @else
          <a href="{{ route('academic-advisor') }}" class="flex items-center px-8 py-3">
            <img src="{{ asset('assets/image/icon/icon-lecture.png') }}" class="mr-3 w-7 h-7" alt="">Academic
            Advisor</a>
        @endif
      </li>
      <li class="text-[#15616D] font-semibold  hover:font-bold mb-3">
        @if (Request::is('invoice') || Request::is('invoice/*'))
          <a href="{{ route('invoice') }}" class="flex items-center px-8 py-3">
            <img src="{{ asset('assets/image/icon/icon-invoice-solid.png') }}" class="mr-3 w-7 h-7"
              alt="">Invoice</a>
        @else
          <a href="{{ route('invoice') }}" class="flex items-center px-8 py-3">
            <img src="{{ asset('assets/image/icon/icon-invoice.png') }}" class="mr-3 w-7 h-7" alt="">Invoice</a>
        @endif
      </li>
    </ul>
  @endhasrole

  @hasrole('super-admin')
    <ul class="pt-20">
      <li class="text-[#15616D] font-semibold hover:font-bold mb-3">
        @if (Request::is('app/dashboard'))
          <a href="{{ route('super-admin.dashboard') }}" class="flex items-center px-8 py-3">
            <img src="{{ asset('assets/image/icon/icon-dashboard-solid.png') }}" class="mr-3 w-7 h-7" alt="">
            Dashboard</a>
        @else
          <a href="{{ route('super-admin.dashboard') }}" class="flex items-center px-8 py-3">
            <img src="{{ asset('assets/image/icon/icon-dashboard.png') }}" class="mr-3 w-7 h-7" alt="">
            Dashboard</a>
        @endif
      </li>
      <li class="text-[#15616D] font-semibold hover:font-bold mb-3">
        @if (Request::is('app/academic-advisor'))
          <a href="{{ route('super-admin.academic-advisor') }}" class="flex items-center px-8 py-3">
            <img src="{{ asset('assets/image/icon/icon-lecture-solid.png') }}" class="mr-3 w-7 h-7" alt="">
            Academic Advisor</a>
        @else
          <a href="{{ route('super-admin.academic-advisor') }}" class="flex items-center px-8 py-3">
            <img src="{{ asset('assets/image/icon/icon-lecture.png') }}" class="mr-3 w-7 h-7" alt="">
            Academic Advisor</a>
        @endif
      </li>
      <li class="text-[#15616D] font-semibold hover:font-bold mb-3">
        @if (Request::is('app/invoice'))
          <a href="{{ route('super-admin.invoice') }}" class="flex items-center px-8 py-3">
            <img src="{{ asset('assets/image/icon/icon-invoice-solid.png') }}" class="mr-3 w-7 h-7" alt="">
            Invoice</a>
        @else
          <a href="{{ route('super-admin.invoice') }}" class="flex items-center px-8 py-3">
            <img src="{{ asset('assets/image/icon/icon-invoice.png') }}" class="mr-3 w-7 h-7" alt="">
            Invoice</a>
        @endif
      </li>
      <li class="text-[#15616D] font-semibold hover:font-bold mb-3">
        @if (Request::is('app/account'))
          <a href="{{ route('super-admin.account') }}" class="flex items-center px-8 py-3">
            <img src="{{ asset('assets/image/icon/icon-account-solid.png') }}" class="w-5 mr-6 h-7" alt="">
            Account</a>
        @else
          <a href="{{ route('super-admin.account') }}" class="flex items-center px-8 py-3">
            <img src="{{ asset('assets/image/icon/icon-account.png') }}" class="w-6 mr-3 h-7" alt="">
            Account</a>
        @endif
      </li>
    </ul>
  @endhasrole

  @hasrole('division')
    <ul class="pt-20">
      <li class="text-[#15616D] font-semibold  hover:font-bold mb-3">
        @if (Request::is('division/dashboard'))
          <a href="{{ route('division.dashboard') }}" class="flex items-center px-8 py-3">
            <img src="{{ asset('assets/image/icon/icon-dashboard-solid.png') }}" class="mr-3 w-7 h-7" alt="">
            Dashboard</a>
        @else
          <a href="{{ route('division.dashboard') }}" class="flex items-center px-8 py-3">
            <img src="{{ asset('assets/image/icon/icon-dashboard.png') }}" class="mr-3 w-7 h-7" alt="">
            Dashboard</a>
        @endif
      </li>
      <li class="text-[#15616D] font-semibold  hover:font-bold mb-3">
        @if (Request::is('division/competition') || Request::is('division/competition/*'))
          <a href="{{ route('division.competition') }}" class="flex items-center px-8 py-3">
            <img src="{{ asset('assets/image/icon/icon-trophy-solid.png') }}" class="mr-3 w-7 h-7"
              alt="">Competition</a>
        @else
          <a href="{{ route('division.competition') }}" class="flex items-center px-8 py-3">
            <img src="{{ asset('assets/image/icon/icon-trophy.png') }}" class="mr-3 w-7 h-7"
              alt="">Competition</a>
        @endif
      </li>
      <li class="text-[#15616D] font-semibold  hover:font-bold mb-3">
        @if (Request::is('division/profile'))
          <a href="{{ route('division.profile') }}" class="flex items-center px-8 py-3">
            <img src="{{ asset('assets/image/icon/icon-division-profile-solid.png') }}" class="mr-3 w-7 h-7"
              alt="">Division Profile</a>
        @else
          <a href="{{ route('division.profile') }}" class="flex items-center px-8 py-3">
            <img src="{{ asset('assets/image/icon/icon-division-profile.png') }}" class="mr-3 w-7 h-7"
              alt="">Division Profile</a>
        @endif
      </li>
    </ul>
  @endhasrole

  <center>
    <div class="absolute bottom-0 mx-20 mb-10">
      <p class="text-center text-slate-400">V1.0.25</p>
    </div>
  </center>
</aside>
