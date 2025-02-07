<div class="app-header d-flex align-items-center">
    <div class="brand-container-sm d-xl-none d-flex align-items-center">
        <div class="app-brand">
            <a href="index-2.html">
                <img src="assets/images/logo.svg" class="logo" alt="Medicare Admin Template">
            </a>
        </div>
        <button type="button" class="toggle-sidebar">
            <i class="ri-menu-line"></i>
        </button>
    </div>
    <div class="header-actions">
        <div class="dropdown ms-3">
            <a id="userSettings" class="dropdown-toggle d-flex align-items-center" href="#!" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                <div class="avatar-box">
                    <img src="https://firebasestorage.googleapis.com/v0/b/sikapadi-43215.appspot.com/o/Proyek%2Flogo%20fiqri.png?alt=media&token=bad07dfc-0a52-434d-89f4-c930997c93df" class="img-2xx rounded-5" alt="Medical Dashboard">
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end shadow-lg">
                <div class="px-3 py-2">
                    <span class="small">{{ Auth::user()->email }}</span>
                </div>
                <div class="mx-3 my-2 d-grid">
                    <a href="{{ route('profile.edit') }}" class="btn btn-outline-primary mx-3 mt-2 d-block">My
                        Profile</a>
                </div>
                <div class="mx-3 my-2 d-grid">
                    <a href="{{ route('logout') }}" class="btn btn-outline-danger mx-3 mt-2 d-block" id="logout-button">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SweetAlert2 CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.getElementById('logout-button').addEventListener('click', function (e) {
        e.preventDefault(); // Mencegah tindakan default (logout langsung)

        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Anda akan keluar dari sistem!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Logout!',
            cancelButtonText: 'Tidak'
        }).then((result) => {
            if (result.isConfirmed) {
                // Jika pengguna mengklik "Ya", submit form logout
                document.getElementById('logout-form').submit();
            }
        });
    });
</script>