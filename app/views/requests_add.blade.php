@extends('_master')



@section('title')
    Request a Service
@stop

@section('content')

<ul class="errors">
    @foreach($errors->all() as $message)
        <li>{{ $message }}</li>
    @endforeach
</ul>


<div class="textcenter">
<h1>Request a Service</h1>
</div>

<title>jQuery UI Datepicker - Default functionality</title>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
<script>
$(function() {
$( "#datepicker" ).datepicker({dateFormat: 'yy-mm-dd'});
});
</script>


{{ Form::open(array('url' => '/requests_add')) }}

<table class = logo1>
    <tr>
        <td width="20" align="left">
       {{ Form::label('email','Email:') }}

        </td>
        <td width="20" align="left">
        {{ Form::text('email', Auth::user()->email); }}

        </td>
        <td width="20"><br><br><br>
        </td>


        <td width="55" align="left">
        {{ Form::label('phone', 'Phone:') }}

        </td>

        <td width="20" align="left">
        {{ Form::text('phone'); }}
        </td>

    </tr>



<tr>
        <td width="20" align="left">
       {{ Form::label('breed','Breed:') }}

        </td>
        <td width="20" align="left">
        {{ Form::text('breed'); }}

        </td>
        <td width="20"><br><br><br>
        </td>


        <td width="55" align="left">
        {{ Form::label('age', 'Pet Age:') }}

        </td>

        <td width="20" align="left">
        {{ Form::text('age'); }}
        </td>

    </tr>

    <tr>

        <td width="55" align="left">
        {{ Form::label('svcdate', 'Svc Date:') }}
        </td>

        <td width="20" align="left">
        <input type="text" id="datepicker" name="svcdate">
        </td>

        </td>
        <td width="20"><br><br><br>
        </td>

        <td width="20" align="left">
         {{ Form::label('nbrdogs', '# Dogs:') }}
        </td>

        <td width="20">
        {{ Form::text('nbrdogs'); }}
        </td>

    </tr>

</table>

<br>

<table class = logo1>
<tr>
   <td width="25" align="left">
      {{ Form::label('service_desc', 'Service:') }}
   </td>

   </td>
   <td width="20"><br>
   </td>

   <td width="90" align="center">
      {{ Form::select('service_desc', $services); }}<br>
   </td>

</tr>

</table>

<br>

<table class = logo1>
<tr>
    <td>
    {{ Form::submit('Request'); }}
    </td>
    </tr>

</table>

{{ Form::close() }}

@stop