<x-guest-layout>
    <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-sm-10 col-md-8 col-lg-5 col-xl-4">
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <form class="form-signin" method="POST" action="{{ route('admin.login') }}">
                <x-application-logo title="Panel de Administración" />
                @csrf
                <label for="name" class="sr-only">Usuario</label>
                <input class="form-control" type="text" name="name" id="name" placeholder="Usuario" value="{{ old('name') }}" required >
                <label for="password" class="sr-only">Contraseña</label>
                <input class="form-control" type="password" name="password" id="password" placeholder="Contraseña" required >
                <button type="submit" class="btn btn-lg btn-orange btn-block text-white">Ingresar</button>
                <a class="d-block text-decortion-none text-white text-center mt-2" href="{{ route('admin.password.request')}}">
                    ¿Olvidaste tu contraseña?
                </a>
                <p class="mt-5 mb-3 text-muted text-center">Aera Studio &copy; 2018-{{ date("Y") }}</p>
            </form>
        </div>
    </div>
</x-guest-layout>
