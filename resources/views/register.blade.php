@extends('master')

@section('content')

	{!! Form::open(['route' => 'register', 'class' => 'box box-auth']) !!}

		<h2 class="box-auth-heading">
			Register
		</h2>

		{!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
		{!! Form::email('email', null, ['class' => 'form-control', 'required']) !!}
		{!! Form::password('password', ['class' => 'form-control', 'required']) !!}
		{!! Form::submit('Register', [ 'class' => 'btn btn-lg btn-primary btn-block']) !!}


		<p class="alt-action text-center">
			<a href="{{ route('login') }}">Come inside</a>
		</p>

	{!! Form::close() !!}


		{{--<p class="alt-action text-center">--}}
			{{--Forgot your password?<br>--}}
			{{--<a href="{{ route('reset') }}">Reset password</a>--}}
		{{--</p>--}}


@endsection