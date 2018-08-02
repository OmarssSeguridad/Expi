@extends('layouts.app')
@section('title','tarifas')
@section('content')


<div class="container">
<u1>
	@if($tarifas->isNotEmpty())

	<table class="table">
		<thead class="thead-dark card-header">
			<tr>
			<th scope="col"> ID</th>
			<th scope="col"> tiempo base</th>
			<th scope="col"> tarifa </th>
			<th scope="col"> Accion </th>
			</tr>
		</thead>
		<tbody class="cardd">
			<tr>
			@foreach($tarifas as $tarifa)
        <td>
	 	{{
		$tarifa->idtarifa
		}}
		</td>

		 <td>
	 	{{
		$tarifa->tiempobase
		}}
		</td>
		<td>
	 	{{
		$tarifa->tarifabase
		}}
		</td>





			<td>
			<a class="btn btn-primary" href="{{ url( '/tarifa/ver',$tarifa->idtarifa)}}"> Ver </a>
			</td>

        </tr>
		@endforeach

		</tbody>

	</table>

	@endif




</u1>
</div>
@endsection
