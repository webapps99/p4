@extends('_master')

@section('title')
	Log in
@stop

@section('content')

<style>
h1 {text-align:center;}
</style>

<h1>Log in</h1><br><br>

<div align="center">
{{ Form::open(array('url' => '/login')) }}

    {{ Form::label('email') }}
    {{ Form::text('email') }}

    {{ Form::label('password') }}
    {{ Form::password('password') }}

    {{ Form::submit('Submit') }}

{{ Form::close() }}

</div>

@stop