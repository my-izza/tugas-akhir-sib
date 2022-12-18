<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('administrator/dashboard/') ?>" class="brand-link">
        <img src="<?= base_url() ?>assets/images/arkatama.png" style="opacity: .8"> <br>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Nor Izza Afcarina</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?= base_url('administrator/dashboard/') ?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('administrator/dashboard/') ?>" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Produk
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('administrator/carousel/') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Carousel</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('administrator/newproduct/') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>New Arrival</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('administrator/promo/') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Promo</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('administrator/product/') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Product</p>
                            </a>
                        </li>
                    </ul>
                </li>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-circle nav-icon"></i>
                        <p>Level 1</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>