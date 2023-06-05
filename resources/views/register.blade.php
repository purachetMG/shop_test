@extends('main')

@section('content')



<div class="wrapper fadeInDown">
    <h2>Register</h2>
    <div id="formContent">
  
        <form action="{{ route('show.validate_register') }}" method="POST">
            
            @csrf  
            <input type="text" name="name" class="form-control" placeholder="Name" /><br>
					@if($errors->has('name'))
						<span class="text-danger">{{ $errors->first('name') }}</span>
					@endif

            <input type="text" name="email" class="form-control" placeholder="Email Address" /><br>
					@if($errors->has('email'))
						<span class="text-danger">{{ $errors->first('email') }}</span>
					@endif
            <input type="password" name="password" class="form-control" placeholder="Password" /><br>
					@if($errors->has('password'))
						<span class="text-danger">{{ $errors->first('password') }}</span>
					@endif
        <input type="submit" class="fadeIn fourth" value="Register">
    
      </form>
  
    </div>
  </div>




@endsection('content')