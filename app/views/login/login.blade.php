<!-- app/views/login.blade.php -->
@include('global.header')
	{{ Form::open(array('url' => 'login')) }}
		<h1>Login</h1>
		
		<!-- if there are login errors, show them here -->
		<p>
			{{ $errors->first('username') }}
			{{ $errors->first('password') }}
		</p>
		<table>
			<tr>
				<td>{{ Form::label('username', 'Username') }}</td>
				<td>{{ Form::text('username', Input::old('username'), array('placeholder' => 'example@example.com')) }}</td>
			</tr>
	
			<tr>
				<td>{{ Form::label('password', 'Password') }}</td>
				<td>{{ Form::password('password') }}</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>{{ Form::submit('Submit') }}</td>
			</tr>
		</table>
	{{ Form::close() }}
@include('global.footer')

