<x-guest-layout>
    <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-sm-10 col-md-8 col-lg-5 col-xl-4">
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <form class="form-signin" method="POST" action="{{ route('admin.password.email') }}">
                <x-application-logo title="Reestablecer contraseña" />
                @csrf
                <label for="name" class="sr-only">Correo</label>
                <input class="form-control" type="email" name="email" id="email" placeholder="Correo" required >
                <button type="submit" class="btn btn-lg btn-orange btn-block text-white mt-2">Enviar</button>
                <a class="d-block text-white text-center mt-2" href="{{ route('admin.login')}}">
                    Iniciar sesión
                </a>
                <p class="mt-5 mb-3 text-muted text-center">Aera Studio &copy; 2018-{{ date("Y") }}</p>
            </form>
        </div>
    </div>
</x-guest-layout>
