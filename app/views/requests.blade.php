@extends('_master')

@section('title')
	Service Requests
@stop

@section('content')

<div class="textcenter">
<h1>Service Requests</h1>
</div>


<br>
	@if(sizeof($requests) == 0)
		<ul style="text-align: center">No current Service Requests</ul>

	@else



			 <table  class="logo1">
                    <tr>
                           <TH id="t0" width="60"></TH>
                           <TH id="t1" width="140" style="text-align:center">Email</TH>
                           <TH id="t2" width="120" style="text-align:center">Phone</TH>
                           <TH id="t3" width="150" style="text-align:center">Breed</TH>
                           <TH id="t4" width="50" style="text-align:center">Age</TH>
                           <TH id="t5" width="120" style="text-align:center">Svc Date</TH>
                           <TH id="t6" width="100" style="text-align:center"># Dogs</TH>
                           <TH id="t7" width="250" style="text-align:center">Service Desc</TH>

                    </tr>



                    @foreach($requests as $request)


                    <tr>

                          <TD headers="t0 width=60"><a href='/requests_edit/{{$request['id']}}'>Edit</a></TD>
                          <TD headers="t1" width="140">{{ $request['email'] }}</TD>
                          <TD headers="t2" width="120">{{ $request['phone'] }}</TD>
                          <TD headers="t3" width="150"> {{ $request['breed'] }}</TD>
                          <TD headers="t4" width="50"> {{ $request['age'] }}</TD>
                          <TD headers="t5" width="120">{{ $request['svcdate'] }}</TD>
                          <TD headers="t6" width="100">{{ $request['nbrdogs'] }}</TD>
                          <TD headers="t7" width="250">{{ $services[$request['service_desc']] }}</TD>

                    </tr>

                    @endforeach

            </table>




	@endif

@stop





