<nav id="mainnav-container" class="mainnav">
  <div class="mainnav__inner">
    <!-- Navigation menu -->
    <div class="mainnav__top-content scrollable-content pb-5">
      <!-- Profile Widget -->
      <div class="mainnav__profile mt-3 d-flex3">
        <div class="mt-2 d-mn-max"></div>
        <div class="mininav-toggle text-center py-2">
          <img class="mainnav__avatar img-md rounded-circle border" src="{{ asset('nouser.jpg') }}" alt="Profile Picture" style="object-fit:cover">
        </div>
        <div class="mininav-toggle text-center py-0">
          <span class="badge bg-secondary">online</span>
        </div>
        <div class="mininav-content collapse d-mn-max">
          @auth
            <div class="d-grid">
              <!-- User name and position -->
              <button class="d-block btn shadow-none p-2" data-bs-toggle="collapse" data-bs-target="#usernav" aria-expanded="false" aria-controls="usernav">
                <span class="dropdown-toggle d-flex justify-content-center align-items-center">
                  <h6 class="mb-0 me-1">{{ session('nama') }}</h6>
                </span>
                <small class="text-primary">{{ session('nama_level') }}</small>
              </button>
                <!-- Collapsed user menu -->
              <div id="usernav" class="nav flex-column collapse">
                <form action="{{ route('auth.logout') }}" method="post">
                  @csrf
                  <button type="submit" class="nav-link" style="border:none; background-color:white;">
                    <i class="pli-unlock fs-5 me-2"></i>
                    <span class="ms-1">Keluar Aplikasi</span>
                  </button>
                </form>
              </div>
            </div>
          @endauth
        </div>
      </div>
      <!-- Navigation Category -->
      <div class="mainnav__categoriy py-3">
        <ul class="mainnav__menu nav flex-column">
          <li class="nav-item mb-1">
            <a href="{{ route('beranda.index') }}" class="nav-link mininav-toggle {{ navlinknya('beranda') }}">
              <span class="pli-layout-grid fw-bold fs-5 me-2"></span>
              <span class="nav-label mininav-content ms-1">Beranda</span>
            </a>
          </li>
          <li class="nav-item mb-1">
            <a href="{{ route('siaran.index') }}" class="nav-link mininav-toggle {{ navlinknya('siaran') }}">
              <span class="pli-vpn fw-bold fs-5 me-2"></span>
              <span class="nav-label mininav-content ms-1">Siaran</span>
            </a>
          </li>
          <li class="nav-item mb-1">
            <a href="{{ route('pengaturan.index') }}" class="nav-link mininav-toggle {{ navlinknya('pengaturan') }}">
              <span class="pli-gears fw-bold fs-5 me-2"></span>
              <span class="nav-label mininav-content ms-1">Pengaturan</span>
            </a>
          </li>
          <!-- <li class="nav-item has-sub">
            <a href="javascript:void(0)" class="mininav-toggle nav-link">
              <span class="pli-layout-grid fw-bold fs-5 me-2"></span>
              <span class="nav-label ms-1">Menu</span>
            </a>
            <ul class="mininav-content nav collapse" style="">
              <li class="nav-item mb-1">
                <a href="{{ route('beranda.index') }}" class="nav-link mininav-toggle {{ navlinknya('beranda') }}">
                  <span class="nav-label mininav-content ms-1">Beranda</span>
                </a>
              </li>
            </ul>
          </li> -->
        </ul>
      </div>
    </div>
  </div>
</nav>
</script>
