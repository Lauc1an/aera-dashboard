<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col mt-4">
                <p>Hello <strong>{{ Auth::user()->name }}</strong></p>
                <p>You're logged in!</p>
            </div>
        </div>
    </div>
</x-app-layout>
