@extends("layouts.master")
@section("Sign in WebRTC")
@section('body')
@parent
<div class="container">
<div class="row justify-content-center">
    <div class="col-md-10"> 
        <div class="card">
            <div class="card-header">Sign in</div>
            <div class="card-body">
                <form method="POST" action="{{url('/login')}}">
                    @csrf
                    @if($errors->any())
                    <div class="alert alert-danger">
                       Please check your username or password and try again
                    </div>
                    @endif
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" 
                        placeholder="Enter username" name="username" 
                        value="{{old('username')}}" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class='form-control' 
                        placeholder="Enter password" name="password"
                        value="{{old('password')}}" required>
                    </div>
                    <button type='submit' class='btn btn-primary card-link'>Submit</button>
                    <a href="{{url('/register')}}" class='card-link'>Register</a>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection