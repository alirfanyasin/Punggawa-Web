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
        @if (Request::is('contest-followed'))
          <a href="/contest-followed" class="flex items-center px-8 py-3">
            <img src="{{ asset('assets/image/icon/icon-trophy-solid.png') }}" class="mr-3 w-7 h-7" alt="">Contest
            Followed</a>
        @else
          <a href="/contest-followed" class="flex items-center px-8 py-3">
            <img src="{{ asset('assets/image/icon/icon-trophy.png') }}" class="mr-3 w-7 h-7" alt="">Contest
            Followed</a>
        @endif
      </li>
      <li class="text-[#15616D] font-semibold  hover:font-bold mb-3">
        @if (Request::is('bootcamp'))
          <a href="/bootcamp" class="flex items-center px-8 py-3">
            <img src="{{ asset('assets/image/icon/icon-bootcamp-solid.png') }}" class="mr-3 w-7 h-7"
              alt="">Bootcamp</a>
        @else
          <a href="/bootcamp" class="flex items-center px-8 py-3">
            <img src="{{ asset('assets/image/icon/icon-bootcamp.png') }}" class="mr-3 w-7 h-7" alt="">Bootcamp</a>
        @endif

      </li>
      <li class="text-[#15616D] font-semibold  hover:font-bold mb-3">
        @if (Request::is('certificate'))
          <a href="certificate" class="flex items-center px-8 py-3">
            <img src="{{ asset('assets/image/icon/icon-certificate-solid.png') }}" class="mr-3 w-7 h-7"
              alt="">Certificate</a>
        @else
          <a href="certificate" class="flex items-center px-8 py-3">
            <img src="{{ asset('assets/image/icon/icon-certificate.png') }}" class="mr-3 w-7 h-7"
              alt="">Certificate</a>
        @endif
      </li>
      <li class="text-[#15616D] font-semibold  hover:font-bold mb-3">
        @if (Request::is('setting'))
          <a href="setting" class="flex items-center px-8 py-3">
            <img src="{{ asset('assets/image/icon/icon-setting-solid.png') }}" class="mr-3 w-7 h-7"
              alt="">Setting</a>
        @else
          <a href="setting" class="flex items-center px-8 py-3">
            <img src="{{ asset('assets/image/icon/icon-setting.png') }}" class="mr-3 w-7 h-7" alt="">Setting</a>
        @endif

      </li>
    </ul>
  @endhasrole

  @hasrole('super-admin')
    <ul class="pt-20">
      <li class="text-[#15616D] font-semibold  hover:font-bold mb-3">
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
        @if (Request::is('division/contest') || Request::is('division/contest/*'))
          <a href="{{ route('division.contest') }}" class="flex items-center px-8 py-3">
            <img src="{{ asset('assets/image/icon/icon-trophy-solid.png') }}" class="mr-3 w-7 h-7"
              alt="">Contest</a>
        @else
          <a href="{{ route('division.contest') }}" class="flex items-center px-8 py-3">
            <img src="{{ asset('assets/image/icon/icon-trophy.png') }}" class="mr-3 w-7 h-7" alt="">Contest</a>
        @endif
      </li>
    </ul>
  @endhasrole
</aside>
