@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-4">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                        <h1>ciao {{Auth::user()->name}}</h1>
                        <p>la tua email è {{Auth::user()->email}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
