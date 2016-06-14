


{{ Form::open(array('action' => 'TestForm@index')) }}
{{ Form::label('label', 'E-Mail Address')}}
{{ Form::text('email','')}}
{{ Form::submit('Submit')}}
{{ Form::close() }}