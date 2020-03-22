@extends("layouts.master")
@section("title", "Account manage")
@section('body')
<div class="container" id="app">
<div class="row justify-content-center">
    <div class="col-md-10"> 
        <div class="card">
            <div class="card-header">Update account information</div>
            <div class="card-body">
                <form method="POST" action="{{url('/account')}}">
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
                        <input type="text" class="form-control" value="{{auth()->user()->username}}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" 
                        placeholder="Enter name" name="name" 
                        value="{{auth()->user()->name}}" required>
                    </div>
                    <div class="form-group form-check">
                    	<input type="checkbox" class="form-check-input" v-on:click="toggle">
                    	<label class="form-check-label">Change password</label>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class='form-control' 
                        placeholder="Enter password" v-bind:name="name"
                        v-bind:disabled="disabled == true">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class='form-control' 
                        placeholder="Enter password" name="password_confirmation"
                        v-bind:disabled="disabled == true">
                    </div>
                    <button type='submit' class='btn btn-primary'>Update</button>  
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<script type="text/javascript">
	var app = new Vue({
		el: "#app",
		data: {
			disabled: true,
			name: ''
		},
		methods: {
			toggle: function(){
				this.disabled = !this.disabled
				if(!this.disabled){
					this.name = 'password'
				}else{
					this.name = ''
				}
			}
		}
	})
</script>
@endsection