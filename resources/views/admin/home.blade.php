<x-admin-layout>
    <div class="container">
        <div class="row">
            <div class="col mt-4">
                <p>Hello <strong>{{ Auth::user()->name }}</strong></p>
                <p>You're logged in Admin Panel!</p>
                <form class="form-inline" method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button class="btn btn-primary text-decoration-none" type="submit">Salir Admin</button>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
