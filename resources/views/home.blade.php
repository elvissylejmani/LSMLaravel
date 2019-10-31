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
                    <a href="/Admin">Admin</a>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
