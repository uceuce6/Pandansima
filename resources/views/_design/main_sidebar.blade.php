<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ url('assets/dist/img/completed-task.png') }}" alt="Abdul Syukur" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">D.A.N</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ url('assets/dist/img/B.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">PANDAN<b>SIMA</b></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <!--                            <li class="nav-item has-treeview menu-open">-->
                <li class="nav-item has-treeview <?php echo Request::segment(1) == 'dashboard' ? 'menu-open' : '' ?>">
                    <a href="#" class="nav-link <?php echo Request::segment(1) == 'dashboard' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/v1') }}" class="nav-link <?php echo Request::segment(2) == 'v1' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                    </ul>
<!--                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/v2') }}" class="nav-link <?php echo Request::segment(2) == 'v2' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard II</p>
                            </a>
                        </li>
                    </ul> -->
                </li>

                <li class="nav-item has-treeview <?php echo Request::segment(1) == 'tables' ? 'menu-open' : '' ?>">
                    <a href="#" class="nav-link <?php echo Request::segment(1) == 'tables' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Analisis
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/awal') }}" class="nav-link <?php echo Request::segment(2) == 'simple' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tema Pengawasan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/perwakilan') }}" class="nav-link <?php echo Request::segment(2) == 'datatables' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Unit Kerja</p>
                            </a>
                        </li>
<!--                        <li class="nav-item">
                            <a href="{{ url('/') }}" class="nav-link <?php echo Request::segment(2) == 'jsgrid' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>[underconstruction]</p>
                            </a>
                        </li> -->
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
