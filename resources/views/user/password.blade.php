@extends('app')
@section('content')
<div class="row">
    <div class="col-md-6" style="margin: 50px auto;">
        @if(session('success'))
            <p class="alert alert-success">{{ session('success') }}</p>
        @endif
        @if($errors->any())
            @foreach($errors->all() as $err)
            <p class="alert alert-danger">{{ $err }}</p>
            @endforeach
        @endif
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">Change Password</h5>
                <form action="{{ route('password.action') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label>Password</label>
                        <input class="form-control" type="password" name="old_password" />
                    </div>
                    <div class="mb-3">
                        <label>New Password</label>
                        <input class="form-control" type="password" name="new_password" />
                    </div>
                    <div class="mb-3">
                        <label>New Password Confirmation</label>
                        <input class="form-control" type="password" name="new_password_confirmation" />
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary">Change</button>
                        <a class="btn btn-danger" href="{{ route('home') }}">Back</a>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
</div>
@endsection