@extends("layouts.master")
@section('title', "Test laravel")
@section('body')
<div class="container">
    <div class="jumbotron">
        <h1>Deadly simple Jitsi token issuer and room manager</h1>
        <hr>
        <h4>Author: Kim Hangon :)</h4>
    </div>
    <table class="table">
    	<thead>
    		<tr>
    			<th scope='col'>#</th>
    			<th scope='col'>Room</th>
    			<th scope='col'>Creator</th>
    			<th scope='col'>Created at</th>
    			<th scope='col'>Join</th>
                <th scope='col'>Delete</th>
    		</tr>
    	</thead>
    	<tbody>
    		@foreach($rooms as $key=>$room)
    		<tr>
    			<th scope='col'>{{++$key}}</th>
    			<th scope='col'>{{$room->name}}</th>
    			<th scope='col'>{{$room->user->name}}</th>
    			<th scope='col'>{{$room->created_at}}</th>
    			<th scope='col'><a href="{{url('/room/'.$room->id)}}" target="_blank" class="text-dark btn">Join</a></th>
                <th scope='col'><a href="{{url('/room/delete/'.$room->id)}}" class="text-dark btn">Delete</a></th>
    		</tr>
    		@endforeach
    	</tbody>
    </table>
    {{$rooms->links()}}
    <a href="{{url('/room/create')}}" class='btn btn-primary'>Create new room</a>
</div>
@endsection