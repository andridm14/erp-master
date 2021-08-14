<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fab fa-superpowers"></i>
                </div>
                <div class="sidebar-brand-text mx-3">DEPARTEMENT ACCOUNTING</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url(); ?>depart_accounting/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-sitemap"></i>
                    <span>Data Operasional</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Biaya Operasional:</h6>
                        <a class="collapse-item" href="<?= base_url(); ?>depart_accounting/material">Material</a>
                        <a class="collapse-item" href="<?= base_url(); ?>depart_accounting/Tanggungan">Tanggungan</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item Modul - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>depart_accounting/masterData">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span>Data Produk</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>depart_accounting/Transaksi">
                    <i class="fa fa-money-bill"></i>
                    <span>Data Penjualan</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>depart_accounting/invoice">
                    <i class="fas fa-fw fa-file-invoice"></i>
                    <span>Invoice</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>depart_accounting/laporan">
                    <i class="fa fa-chart-pie" aria-hidden="true"></i>
                    <span>Laporan</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>depart_accounting/pengaturan">
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