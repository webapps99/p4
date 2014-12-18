@extends('_master')

@section('title')
	Log in
@stop

@section('content')

<div class="textcenter">
<h1>Log in</h1>
</div>

<br><br>

<div class="logo1">
{{ Form::open(array('url' => '/login')) }}

    {{ Form::label('email') }}
    {{ Form::text('email') }}

    {{ Form::label('password') }}
    {{ Form::password('password') }}

    {{ Form::submit('Submit') }}

{{ Form::close() }}

</div>

@stop