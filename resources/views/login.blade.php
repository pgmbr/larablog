@extends('master')

@section('content')

	{!! Form::open(['route' => 'login', 'class' => 'box box-auth']) !!}

		<h2 class="box-auth-heading">
			Login
		</h2>

		{!! Form::email('email', null, ['class' => 'form-control', 'required']) !!}
		{!! Form::password('password', ['class' => 'form-control', 'required']) !!}
		{!! Form::submit('Login', [ 'class' => 'btn btn-lg btn-primary btn-block']) !!}

		<label class="checkbox">
			{!! Form::checkbox('rememberme', 'remember-me', true) !!}
			Remember me
		</label>

		<p class="alt-action text-center">
			Not registered?<br>
			<a href="{{ route('register') }}">Register</a>
		</p>

	{!! Form::close() !!}


		{{--<p class="alt-action text-center">--}}
			{{--Forgot your password?<br>--}}
			{{--<a href="{{ route('reset') }}">Reset password</a>--}}
		{{--</p>--}}


@endsection