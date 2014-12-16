@extends('_master')

@section('title')
Add a Service
@stop

@section('content')

<style>
h1 {text-align:center;}
</style>

<h1>Add a Service</h1>


{{ Form::open(array('url' => '/services_add')) }}

<table align="center">
    <tr>
        <td width="20" align="left">
       {{ Form::label('service_type','Svc Type:') }}

        </td>
        <td width="20" align="left">
        {{ Form::text('service_type'); }}

        </td>
        <td width="20"><br><br><br>
        </td>


        <td width="55" align="left">
        {{ Form::label('service_desc', 'Svc Desc:') }}

        </td>

        <td width="20" align="left">
        {{ Form::text('service_desc'); }}
        </td>

        </td>
        <td width="20"><br><br><br>
        </td>


        <td width="55" align="left">
        {{ Form::label('cost', 'Cost:') }}

        </td>

        <td width="20" align="left">
        {{ Form::text('cost'); }}
        </td>


    </tr>


<table align="center">
<tr>
    <td>
    {{ Form::submit('Submit'); }}
    </td>
    </tr>

</table>

{{ Form::close() }}

@stop