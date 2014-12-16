@extends('_master')

@section('title')
	Sign up
@stop

@section('content')
@foreach($errors->all() as $message)
	<div class='error'>{{ $message }}</div>
@endforeach

<style>
h1 {text-align:center;}
</style>

<h1>Sign up</h1><br><br>




<div align="center">
{{ Form::open(array('url' => '/signup')) }}

    {{ Form::label('email') }}
    {{ Form::text('email') }}

    {{ Form::label('password') }}
    {{ Form::password('password') }}
    <small>Min 6 characters</small>

    {{ Form::submit('Submit') }}

{{ Form::close() }}

</div>
@stop
