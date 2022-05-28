<x-guest-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6 mt-4">
                @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                <h1>Olvidé mi contraseña del Panel</h1>
                <form method="POST" action="{{ route('admin.password.email') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email">Correo:</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autofocus>
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar enlace de restablecimiento</button>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>