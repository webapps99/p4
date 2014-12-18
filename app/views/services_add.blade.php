@extends('_master')

@section('title')
Add a Service
@stop

@section('content')

<div class="textcenter">
<h1>Add a Service</h1>
</div>

{{ Form::open(array('url' => '/services_add')) }}

<table class = logo1>
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


<table class = logo1>
<tr>
    <td>
    {{ Form::submit('Submit'); }}
    </td>
    </tr>

</table>

{{ Form::close() }}

@stop