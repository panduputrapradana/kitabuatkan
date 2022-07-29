<ul class="navbar-nav bg-gradient sidebar sidebar-dark accordion" style="background-color: #0ea5e9" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('Dashboard'); ?>">
        <div class="sidebar-brand-text mx-1" style="font-family: 'Berkshire Swash', cursive;">Kita Buatkan</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Dashboard'); ?>">
            <i class="fas fa-fw fa-home"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Opsi
    </div>

    <!-- Nav Item - Pages Collapse Menu -->

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('User'); ?>">
            <i class="fas fa-fw fa-user-cog"></i>
            <span>User</span>
        </a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Beranda'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Beranda</span>
        </a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Basic'); ?>">
            <i class="fas fa-fw fa-book"></i>
            <span>Basic</span>
        </a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Keunggulan'); ?>">
            <i class="fas fa-fw fa-trophy"></i>
            <span>Keunggulan</span>
        </a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Harga'); ?>">
            <i class="fas fa-fw fa-dollar-sign"></i>
            <span>Harga</span>
        </a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Portfolio'); ?>">
            <i class="fas fa-fw fa-award"></i>
            <span>Portfolio</span>
        </a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Testimonials'); ?>">
            <i class="fas fa-fw fa-comment-dots"></i>
            <span>Testimonials</span>
        </a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Form'); ?>">
            <i class="fas fa-fw fa-envelope-open-text"></i>
            <span>Form</span>
        </a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Kontak'); ?>">
            <i class="fas fa-fw fa-address-book"></i>
            <span>Kontak</span>
        </a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Clients'); ?>">
            <i class="fas fa-fw fa-user-friends"></i>
            <span>Clients</span>
        </a>
    </li>




    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        End
    </div>

    <!-- Nav Item - Pages Collapse Menu -->


    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" onclick="return confirm('Yakin akan logout???')" href="<?= base_url('Logout'); ?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>