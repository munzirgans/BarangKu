
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard.index')}}">
            <div class="sidebar-brand-icon">
                <i class="fas fa-box"></i>
            </div>
            <div class="sidebar-brand-text mx-3">MyInvento</div>
        </a>
        <hr class="sidebar-divider my-0">
        <li class="nav-item {{Request::is('dashboard') ? 'active' : ''}}">
            <a class="nav-link" href="{{route('dashboard.index')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <hr class="sidebar-divider">
        <div class="sidebar-heading">
            Inventory
        </div>
        <li class="nav-item {{Request::segment(2) == 'data-barang' ? 'active' : ''}}">
            <a class="nav-link" href="{{route('data-barang.index')}}">
                <i class="fas fa-box-open"></i>
                <span>Inventory Data</span>
            </a>
        </li>
        <hr class="sidebar-divider d-none d-md-block">

        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
    </ul>