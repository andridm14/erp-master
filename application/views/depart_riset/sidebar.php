<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar  -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar Menu Departement  -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fab fa-superpowers"></i>
                </div>
                <div class="sidebar-brand-text mx-3">DEPARTEMENT R&D</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url(); ?>depart_riset/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                    <span>Data Produk</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Produk Management:</h6>
                        <a class="collapse-item" href="<?= base_url(); ?>depart_riset/masterProduk">Master Produk</a>
                        <a class="collapse-item" href="<?= base_url(); ?>depart_riset/stock">Jumlah stock</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>depart_riset/riset">
                    <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                    <span>Riset data Produk</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>depart_riset/material">
                    <i class="fa fa-cube" aria-hidden="true"></i>
                    <span>Data Bill Material</span></a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo1" aria-expanded="true" aria-controls="collapseTwo1">
                    <i class="fa fa-cube" aria-hidden="true"></i>
                    <span>Data BOM</span>
                </a>
                <div id="collapseTwo1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Daftar:</h6>
                        <a class="collapse-item" href="<?= base_url(); ?>depart_riset/material">Material</a>
                        <a class="collapse-item" href="<?= base_url(); ?>depart_riset/komponen">Komponen</a>
                        <a class="collapse-item" href="<?= base_url(); ?>depart_riset/kuantitas">Kuantitas</a>
                    </div>
                </div>
            </li> -->

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>depart_riset/laporan">
                    <i class="fa fa-chart-pie" aria-hidden="true"></i>
                    <span>Laporan</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>depart_riset/pengaturan">
                    <i class="fas fa-cogs"></i>
                    <span>Pengaturan</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->