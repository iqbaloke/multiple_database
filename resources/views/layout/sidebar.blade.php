<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item {{Request::is('home')?'active':''}}">
        <a class="nav-link" href="/home">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    @if(auth()->user()->role == 'admin')
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Data Karyawan
    </div>

    <li class="nav-item {{Request::is('karyawan')?'active':''}}">
        <a class="nav-link" href="/karyawan">
            <i class="fas fa-users"></i>
            <span>Karyawan</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Triggers
    </div>
    <li class="nav-item {{Request::is('update')?'active':''}}">
        <a class="nav-link" href="/after-update">
            <i class="fas fa-edit"></i>
            <span>After update</span></a>
    </li>
    <li class="nav-item {{Request::is('insert')?'active':''}}">
        <a class="nav-link" href="/after-insert">
            <i class="fas fa-pen"></i>
            <span>After Insert</span></a>
    </li>
    <li class="nav-item {{Request::is('delete')?'active':''}}">
        <a class="nav-link" href="/after-delete">
            <i class="fas fa-trash-alt"></i>
            <span>After Delete</span></a>
    </li>
    @endif

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>