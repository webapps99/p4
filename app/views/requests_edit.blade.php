@extends('_master')

@section('title')
Edit Request
@stop

@section('head')

@stop

@section('content')

<ul class="errors">
    @foreach($errors->all() as $message)
        <li>{{ $message }}</li>
    @endforeach
</ul>

<style>
h1 {text-align:center;}
</style>




<h1>Edit or Delete</h1>
<br>


{{---- EDIT -----}}
{{ Form::open(array('url' => '/requests_edit')) }}

{{ Form::hidden('id',$request['id']); }} {{---- Get Request ID -----}}


<table align="center">
    <tr>
        <td width="20" align="left">
       {{ Form::label('email','Email:') }}

        </td>
        <td width="20" align="left">
         {{ Form::text('email',$request['email']); }}

        </td>
        <td width="20"><br><br><br>
        </td>


        <td width="55" align="left">
        {{ Form::label('phone', 'Phone:') }}

        </td>

        <td width="20" align="left">
         {{ Form::text('phone',$request['phone']); }}
        </td>

    </tr>



<tr>
        <td width="20" align="left">
       {{ Form::label('breed','Breed:') }}

        </td>
        <td width="20" align="left">
        {{ Form::text('breed',$request['breed']); }}

        </td>
        <td width="20"><br><br><br>
        </td>


        <td width="55" align="left">
        {{ Form::label('age', 'Pet Age:') }}

        </td>

        <td width="20" align="left">
        {{ Form::text('age',$request['age']); }}
        </td>

    </tr>

    <tr>

        <td width="55" align="left">
        {{ Form::label('svcdate', 'Svc Date:') }}
        </td>

        <td width="20" align="left">
        {{ Form::text('svcdate',$request['svcdate']); }}
        </td>

        </td>
        <td width="20"><br><br><br>
        </td>

        <td width="20" align="left">
         {{ Form::label('nbrdogs', '# Dogs:') }}
        </td>

        <td width="20">
        {{ Form::text('nbrdogs',$request['nbrdogs']); }}
        </td>

    </tr>

</table>

<br>

<table align="center">
<tr>
   <td width="25" align="left">
      {{ Form::label('service_desc', 'Service:') }}
   </td>

   </td>
   <td width="20"><br>
   </td>

   <td width="90" align="center">
      {{ Form::select('service_desc', $services, $request->service_desc); }}<br>
   </td>

</tr>

</table>

<br>

<table align="center">
<tr>
<td>
<p style="text-align: center;">
{{ Form::submit('Save    '); }}
</p>

{{ Form::close() }}
</td>
</tr>

<tr>
<td>
<div>
    {{---- DELETE -----}}
    {{ Form::open(array('url' => '/requests/delete')) }}
    {{ Form::hidden('id',$request['id']); }}
    <button onClick='parentNode.submit();return false;'>Delete</button>
    {{ Form::close() }}
</div>

</td>
</tr>
</table>

@stop
