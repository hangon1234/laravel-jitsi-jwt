@extends("layouts.master")
@section("Register WebRTC")
@section('body')
<div class="container">
<div class="row justify-content-center">
    <div class="col-md-10"> 
        <div class="card">
            <div class="card-header">Register</div>
            <div class="card-body">
                <form method="POST" action="{{url('/register')}}">
                    @csrf
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" 
                        placeholder="Enter username" name="username" 
                        value="{{old('username')}}" required>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" 
                        placeholder="Enter name" name="name" 
                        value="{{old('name')}}" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class='form-control' 
                        placeholder="Enter password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class='form-control' 
                        placeholder="Enter password" name="password_confirmation" required>
                    </div>
                    <button type='submit' class='btn btn-primary'>Sign in</button>  
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection