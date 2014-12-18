@extends('_master')

@section('title')
	Services
@stop

@section('content')

	@if(sizeof($services) == 0)
		No results
	@else



<br>


            <table class="logo1">

                    <tr>

                       <TH id="t1" style="text-align:center">Service Type</TH>
                       <TH id="t2" style="text-align:center">Service Description</TH>
                       <TH id="t3" style="text-align:center">Cost</TH>

                    </tr>



                    @foreach($services as $service)

                    <tr>

                      <TD headers="t1" style="width:200px">{{ $service['service_type'] }}</TD>
                      <TD headers="t2" style="width:250px">{{ $service['service_desc'] }}</TD>
                      <TD headers="t3" style="width:100px">{{ $service['cost'] }}</TD>

                    </tr>

                    @endforeach

            </table>





	@endif

@stop
