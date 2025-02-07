<nav id="sidebar" class="sidebar-wrapper">

    <!-- Brand container starts -->
    <div class="brand-container d-flex align-items-center justify-content-between">

        <!-- App brand starts -->
        <div class="app-brand ms-3">
            <a href="index-2.html">
                <img src="assets/images/logo.svg" class="logo" alt="Medicare Admin Template">
            </a>
        </div>
        <!-- App brand ends -->

        <!-- Pin sidebar starts -->
        <button type="button" class="pin-sidebar me-3">
            <i class="ri-menu-line"></i>
        </button>
        <!-- Pin sidebar ends -->

    </div>
    <!-- Brand container ends -->

    <!-- Sidebar profile starts -->
    <div class="sidebar-profile">
        <img src="https://firebasestorage.googleapis.com/v0/b/sikapadi-43215.appspot.com/o/Proyek%2Flogo%20fiqri.png?alt=media&token=bad07dfc-0a52-434d-89f4-c930997c93df" class="rounded-5" alt="Hospital Admin Templates">
        <h6 class="mb-1 profile-name text-nowrap text-truncate text-primary">{{ Auth::user()->name }}</h6>
        <small class="profile-name text-nowrap text-truncate">{{ Auth::user()->email }}</small>
    </div>
    <!-- Sidebar profile ends -->

    <!-- Sidebar menu starts -->
    <div class="sidebarMenuScroll">
        <ul class="sidebar-menu">
            <li>
                <a href="{{ url('/dashboard') }}">
                    <i class="ri-home-5-line"></i>
                    <span class="menu-text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/tentang-saya') }}">
                    <i class="ri-empathize-line"></i>
                    <span class="menu-text">Tentang Saya</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#!">
                    <i class="ri-nurse-line"></i>
                    <span class="menu-text">Master Data</span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{ url('/layanan') }}">Layanan</a>
                    </li>
                    <li>
                        <a href="{{ url('/proyek') }}">Proyek</a>
                    </li>
                    <li>
                        <a href="{{url('/sertifikat')}}">Sertifikat</a>
                    </li>
                    <li>
                        <a href="{{url('/pendidikan')}}">Pendidikan</a>
                    </li>
                    <li>
                        <a href="{{url('/keahlian')}}">Keahlian</a>
                    </li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#!">
                    <i class="ri-nurse-line"></i>
                    <span class="menu-text">Lain-Lain</span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{ url('/status') }}">Status</a>
                    </li>
                    <li>
                        <a href="{{ url('/kategori') }}">Kategori</a>
                    </li>
                    <li>
                        <a href="{{url('/kategori_keahlian')}}">Kategori Keahlian</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="{{ url('/pengaturan') }}">
                  <i class="ri-settings-5-line"></i>
                  <span class="menu-text">Pengaturan</span>
                </a>
              </li>
        </ul>
    </div>
    <!-- Sidebar menu ends -->

    <!-- Sidebar contact starts -->
    <div class="sidebar-contact">
        <p class="fw-light mb-1 text-nowrap text-truncate">Emergency Contact</p>
        <h5 class="m-0 lh-1 text-nowrap text-truncate">0987654321</h5>
        <i class="ri-phone-line"></i>
    </div>
    <!-- Sidebar contact ends -->

</nav>
