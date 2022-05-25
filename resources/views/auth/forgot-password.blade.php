<x-app-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6 mt-4">
                <h1>Olvidé mi contraseña</h1>
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email">Correo:</label>
                        <input type="email" class="form-control" id="email" name="email" required autofocus>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar enlace de restablecimiento</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
