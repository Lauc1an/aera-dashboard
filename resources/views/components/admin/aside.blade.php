<aside class="main-sidebar sidebar-dark-orange elevation-4">
    <a href="{{ route('admin.home') }}" class="brand-link">
        <img src="{{ asset('images/panel/logo-ae.png') }}" alt="Aera Studio" class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">Aera Studio</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{ asset('images/panel/avatar.svg') }}" class="img-circle elevation-2" alt="Avatar">
          </div>
          <div class="info">
            <a href="#" class="d-block">{{ Auth::user()->name }}</a>
          </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="true">

                {{-- <li class="nav-item has-treeview {{ request()->segment(2) == 'registros' ? 'menu-is-opening menu-open' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>Registros<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('panel.record.licenses') }}" class="nav-link {{ Route::current()->getName() == 'panel.record.licenses' || Route::current()->getName() == 'panel.record.licenses-crud' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-id-card"></i>
                                <p>Licencias</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview {{ request()->segment(2) == 'config' ? 'menu-is-opening menu-open' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>Config.<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('panel.config.admins') }}" class="nav-link {{ Route::current()->getName() == 'panel.config.admins' || Route::current()->getName() == 'panel.config.admins-crud' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-users"></i>
                                <p>Administradores</p>
                            </a>
                        </li>
                    </ul>
                </li> --}}

            </ul>
        </nav>
    </div>
</aside>
