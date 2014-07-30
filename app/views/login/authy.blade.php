@include('global.header')
	{{ Form::open(array('url' => 'authy')) }}
		<table>
			<tr>
				<td>{{ Form::label('auth', 'Authy Code') }}</td>
				<td>{{ Form::text('authcode', Input::old('authcode'), array('placeholder' => '10101')) }}</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>{{ Form::submit('Submit') }}</td>
			</tr>
		</table>
	{{ Form::close() }}
@include('global.footer')