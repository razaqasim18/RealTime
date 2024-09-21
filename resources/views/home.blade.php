@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <ul id="users">

                        </ul>
                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="module">
        window.Echo.channel('join').listen('UserJoin', (event) => {
            const usersElement = document.getElementById('users');

            let element = document.createElement('li');

            element.setAttribute('id', event.user.id);
            element.innerText = event.user.name;

            usersElement.appendChild(element);
        });
    </script>
@endsection
