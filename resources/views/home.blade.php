@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    @if (Auth::User()->role == 'admin')
                        <a href="/admin">Admin</a>
                    @endif
                    
                    @if (Auth::User()->role == 'user')
                        <a href="/user">User</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
