@extends('layout')
@section('content')

<div class="row" >
    <div class="col-md-6" style="margin: 50px auto;">
        @if($errors->any())
            @foreach($errors->all() as $err)
            <p class="alert alert-danger">{{ $err }}</p>
            @endforeach
        @endif
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">Register</h5>
                <form action="{{ route('register.action') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label>Name </label>
                    <input class="form-control" type="text" name="name" value="{{ old('name') }}" />
                </div>
                <div class="mb-3">
                    <label>Email </label>
                    <input class="form-control" type="email" name="email" value="{{ old('email') }}" />
                </div>
                <div class="mb-3">
                    <label>Password </label>
                    <input class="form-control" type="password" name="password" />
                </div>
                <div class="mb-3">
                    <label>Password Confirmation</label>
                    <input class="form-control" type="password" name="password_confirm" />
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Register</button>
                    <a class="btn btn-danger" href="{{ route('login') }}">Back</a>
                </div>
                </form>
                <!-- <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a> -->
            </div>
        </div>
       
    </div>
</div>
@endsection