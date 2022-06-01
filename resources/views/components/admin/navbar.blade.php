<nav class="main-header p-2">
    <div class="navbar navbar-expand">
        <ul class="navbar-nav mr-4">
            <li class="nav-item">
                <a class="nav-link pl-0" data-widget="pushmenu" href="#">
                    <img src="{{ asset('images/panel/three-dots.svg') }}" height="20" alt="Menu Icon">
                </a>
            </li>
        </ul>
        <span class="navbar-text d-none d-md-block">
            <p class="mb-0 d-inline">Selecciona las opciones de los ITEMS para EDITAR</p>
            <img src="{{ asset('images/panel/edit-icon.svg') }}" height="20" class="mx-1" alt="Edit Icon">
            <p class="mb-0 d-inline">o BORRAR</p>
            <img src="{{ asset('images/panel/trash-icon.svg') }}" height="20" class="mx-1" alt="Delete Icon">
        </span>
        <span class="navbar-text ml-auto btn-link-pill">
            <a href="{{ url('/') }}" class="d-flex align-items-center text-decoration-none text-white" target="_blank">
                <i class="fas fa-desktop d-none d-md-inline mr-2"></i>
                <i class="fas fa-mobile-alt d-inline d-md-none mr-2"></i>
                <p class="mb-0 d-inline">Ver Web</p>
            </a>
        </span>
        {{-- <button class="btn btn-link d-flex align-items-center" wire:click="logout">
            <p class="mb-0 mr-2">SALIR</p>
            <img src="{{ asset('images/panel/exit-icon.svg') }}" height="20" alt="Exit Icon">
        </button> --}}
    </div>
</nav>
