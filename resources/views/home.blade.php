@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                @guest (!Route::has('register'))
                    <h1>YOU MOST LOGIN TO SEE MORE</h1>
                @else
                <div class="card-body">
                        <!-- @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif-->
                        <div id="app">
                            <p class="h5">Sektori i studenteve:</p>
                        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm  mb-1">
                        <ul class="navbar-nav auto">
                        <li class="nav-item">
                    <a class="nav-link" href="/Admin">Search</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/Insert">Insert</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                     </ul>
                        </nav>
                        <p class="h5">Sektori i Librave:</p>
                        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                        <ul class="navbar-nav auto">
                        <li class="nav-item">
                    <a class="nav-link" href="/librat">Search</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/Insert">Insert</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                     </ul>
                        </nav>
                        </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
