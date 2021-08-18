<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Lidablogs</div>
    </a>

    @if(Auth::user()->role == 'admin')
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Dashboard
    </div>

    <li class="nav-item {{request()->is('dashboard') ? 'active' : ''}}">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-home"></i>
            <span>Dashboard</span></a>
    </li>
    
    <hr class="sidebar-divider d-none d-md-block">
    @endif

    <!-- Heading -->
    <div class="sidebar-heading">
        Data Blogs
    </div>
    @if(Auth::check())
    
    <li class="nav-item {{request()->is('blog') ? 'active' : ''}}">
        <a class="nav-link" href="/blog">
        <i class="fas fa-chart-bar"></i>
            <span>Data Blogs</span></a>
    </li>
   
    <li class="nav-item {{request()->is('blog/create') ? 'active' : ''}}">
        <a class="nav-link" href="/blog/create">
        <i class="fas fa-folder-plus"></i>
            <span>Tambah Blogs</span></a>
    </li>

    @if(Auth::user()->role == 'admin')
    <hr class="sidebar-divider d-none d-md-block">

      <!-- Heading -->
        <div class="sidebar-heading">
            Data User
        </div>

    <li class="nav-item {{request()->is('user') ? 'active' : ''}}">
        <a class="nav-link" href="/user">
        <i class="fas fa-users"></i>
            <span>Data User</span></a>
    </li>
    @endif

    @endif
    
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
