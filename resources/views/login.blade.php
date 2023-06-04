@extends('main')

@section('content')

@if($message = Session::get('success'))

<div class="alert alert-info">
{{ $message }}
</div>

@endif

<div class="wrapper fadeInDown">
    <h2>Login</h2>
    <div id="formContent">
  
        <form action="{{ route('show.validate_login') }}" method="post">
            @csrf  
            <input type="text" name="email" class="fadeIn second" placeholder="Email" />
            @if($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
            <input type="password" name="password" class="fadeIn third" placeholder="Password" />
            @if($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
        <input type="submit" class="fadeIn fourth" value="Log In">
    
      </form>
  
    </div>
  </div>



@endsection('content')
