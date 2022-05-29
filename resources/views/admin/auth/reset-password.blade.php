<x-guest-layout>
    <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-sm-10 col-md-8 col-lg-5 col-xl-4">
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <form class="form-signin" method="POST" action="{{ route('admin.password.update') }}">
                <x-application-logo title="Cambiar contraseña" />
                @csrf
                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                <label for="name" class="sr-only">Correo</label>
                <input class="form-control mb-2" type="email" name="email" id="email" placeholder="Correo" value="{{ $request->email }}" required autofocus>
                <label for="password" class="sr-only">Contraseña</label>
                <input class="form-control mb-0" type="password" name="password" id="password" placeholder="Contraseña" required >
                <label for="password_confirmation" class="sr-only">Confirmar contraseña</label>
                <input class="form-control" type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirmar contraseña" required >
                <button type="submit" class="btn btn-lg btn-orange btn-block text-white mt-2">Guardar</button>
                <p class="mt-5 mb-3 text-muted text-center">Aera Studio &copy; 2018-{{ date("Y") }}</p>
            </form>
        </div>
    </div>
</x-guest-layout>
