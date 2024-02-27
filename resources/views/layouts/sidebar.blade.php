 {{-- @if(Auth()->user()->level =='Admin') --}}
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo" href="index.html"><img src="{{ asset('assets/img/ABSEN KARYAWAN.png') }}" alt="logo" /></a>
      <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="{{ asset('assets/img/absen.png') }}" alt="logo" /></a>
    </div>
    <ul class="nav">
      <li class="nav-item profile">
        <div class="profile-desc">
          <div class="profile-pic">
            <div class="count-indicator">
              <img class="img-xs rounded-circle " src="../assets/images/faces/face15.jpg" alt="">
              <span class="count bg-success"></span>
            </div>
            <div class="profile-name">
              @if (auth()->user()->can('user_index'))
              <h5 class="mb-0 font-weight-normal">admin</h5>
              @elseif(auth()->user()->can('cekout'))
              <h5 class="mb-0 font-weight-normal">karyawan</h5>
              @endif
             
              <span>Gold Member</span>
            </div>
          </div>
          <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
          <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-settings text-primary"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-onepassword  text-info"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
          </div>
        </div>
      </li>
      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>
      <li class="nav-item menu-items">
        @if (auth()->user()->can('user_index'))
        <a class="nav-link" href="/dashboard">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Dashboard</span>
        </a>
        @elseif(auth()->user()->can('cekout'))
        <a class="nav-link" href="/absen">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Dashboard</span>
        </a>
        @endif
      </li>
      @if (auth()->user()->can('user_index'))
      <li class="nav-item menu-items">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-icon">
            <i class="mdi mdi-laptop"></i>
          </span>
          
          <span class="menu-title">Menu Utama</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
           <li class="nav-item"> <a class="nav-link" href="/user">Kelola Data User</a></li>
            <li class="nav-item"> <a class="nav-link" href="/absen">Kelola Data Absensi</a></li>
            <li class="nav-item"> <a class="nav-link" href="/cuti">Kelola Data Cuti</a></li>
            <li class="nav-item"> <a class="nav-link" href="/jadwal">Kelola Data Jadwal</a></li>
            <li class="nav-item"> <a class="nav-link" href="/karyawan">Kelola Data Karyawan</a></li>
            <li class="nav-item"> <a class="nav-link" href="/laporan">Kelola Data Laporan</a></li>
          </ul>
        </div>
      </li>
      @elseif(auth()->user()->can('cekout'))
      @endif

      <li class="nav-item menu-items">
        <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
          <span class="menu-icon">
            <i class="mdi mdi-security"></i>
          </span>
          <span class="menu-title">Setting</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> 
            
            <li class="nav-item" :href="route('profile.edit')"><a class="nav-link">
              {{ __('Profile') }}   </a>
          </li>
        </li>
            {{-- <li class="nav-item"> <a class="nav-link" href="#"> Setting </a></li> --}}
            {{-- <li  class="nav-item"> <a class="nav-link" href="/"> Logout </a></li> --}}
            <li class="nav-item"> 
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <li class="nav-item" :href="route('logout')"
                      onclick="event.preventDefault();
                                  this.closest('form').submit();"> <a class="nav-link">
                                      {{ __('Log Out') }}
                                    </a>
            </li>
          </form>
        </li>
          </ul>
        </div>
      </li>
    </ul>
  </nav>
  {{-- @elseif(Auth()->user()->level === 'SuperAdmin')  --}}
  {{-- <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo" href="index.html"><img src="{{ asset('assets/img/ABSEN KARYAWAN.png') }}" alt="logo" /></a>
      <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="{{ asset('assets/img/absen.png') }}" alt="logo" /></a>
    </div>
    <ul class="nav">
      <li class="nav-item profile">
        <div class="profile-desc">
          <div class="profile-pic">
            <div class="count-indicator">
              <img class="img-xs rounded-circle " src="../assets/images/faces/face15.jpg" alt="">
              <span class="count bg-success"></span>
            </div>
            <div class="profile-name">
              <h5 class="mb-0 font-weight-normal">Super admin</h5>
              <span>Gold Member</span>
            </div>
          </div>
          <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
          <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-settings text-primary"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-onepassword  text-info"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-calendar-today text-success"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
              </div>
            </a>
          </div>
        </div>
      </li>
      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="/dashboard">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-icon">
            <i class="mdi mdi-laptop"></i>
          </span>
          <span class="menu-title">Menu Utama</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="/user">Kelola Data User</a></li>
            <li class="nav-item"> <a class="nav-link" href="/absen">Kelola Data Absensi</a></li>
            <li class="nav-item"> <a class="nav-link" href="/cuti">Kelola Data Cuti</a></li>
            <li class="nav-item"> <a class="nav-link" href="/jadwal">Kelola Data Jadwal</a></li>
            <li class="nav-item"> <a class="nav-link" href="/karyawan">Kelola Data Karyawan</a></li>
            <li class="nav-item"> <a class="nav-link" href="/laporan">Kelola Data Laporan</a></li>
          </ul>
        </div>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
          <span class="menu-icon">
            <i class="mdi mdi-security"></i>
          </span>
          <span class="menu-title">Setting</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="#"> Setting </a></li>
            <li class="nav-item"> <a class="nav-link" href="/login"> Logout </a></li>
          </ul>
        </div>
      </li>
    </ul>
  </nav> --}}
  {{-- @endif --}}