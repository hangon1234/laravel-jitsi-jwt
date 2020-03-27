@extends("layouts.master")
@section('title', 'Create new room')
@section('body')
<div class="container">
<div class="row justify-content-center">
    <div class="col-md-10"> 
        <div class="card">
            <div class="card-header">Create new room</div>
            <div class="card-body">
                <form method="POST" action="{{url('/room/create')}}">
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
                        <label>Room name</label>
                        <input type="text" class="form-control" 
                        placeholder="Enter room name" name="name" required>
                    </div>
                    <button type='submit' class='btn btn-primary'>Create</button>  
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection