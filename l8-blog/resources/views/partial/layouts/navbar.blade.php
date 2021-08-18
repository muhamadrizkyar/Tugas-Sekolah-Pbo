<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    <ul class="navbar-nav ml-auto">
    <div class="topbar-divider d-none d-sm-block"></div>

    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->name}}</span>
            <img class="img-profile rounded-circle shadow"
                src="{{asset('template/img/undraw_profile.svg')}}">
        </a>
        @if(Auth::check())
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
            aria-labelledby="userDropdown">
            @if(Auth::user()->role == 'admin')
            <a class="dropdown-item" href="/dashboard">
                <i class="fas fa-fw fa-home fa-sm fa-fw mr-2 text-gray-400"></i>
                Dashboard
            </a>
            @endif
            <a class="dropdown-item" href="/blog">
                <i class="fas fa-chart-bar fa-sm fa-fw mr-2 text-gray-400"></i>
                Data Blogs
            </a>
            <a class="dropdown-item" href="/blog/create">
                <i class="fas fa-folder-plus fa-sm fa-fw mr-2 text-gray-400"></i>
                Tambah Data Blogs
            </a>
            @if(Auth::user()->role == 'admin')
            <a class="dropdown-item" href="/user">
                <i class="fas fa-users fa-sm fa-fw mr-2 text-gray-400"></i>
                Data User
            </a>
            @endif
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
            </a>
        </div>
    </li>

    </ul>

    @endif
     <!-- Logout Modal-->
     <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Siap untuk keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Logout" di bawah jika siap untuk mengakhiri session saat ini.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>

</nav>