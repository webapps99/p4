@extends('_master')

@section('title')
	Services
@stop

@section('content')

	@if(sizeof($services) == 0)
		No results
	@else






            <table align="center">

                    <tr>

                       <TH id="t1" width="200">Service Type</TH>
                       <TH id="t2" width="250">Service Description</TH>
                       <TH id="t3" width="100">Cost</TH>

                    </tr>

                    <br>

                    @foreach($services as $service)

                    <tr>

                      <TD headers="t1" width="200">{{ $service['service_type'] }}</TD>
                      <TD headers="t2" width="250">{{ $service['service_desc'] }}</TD>
                      <TD headers="t3" width="100">{{ $service['cost'] }}</TD>

                    </tr>

                    @endforeach

            </table>





	@endif

@stop
