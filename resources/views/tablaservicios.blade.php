@extends('layouts.app')



@section('title','servicios')
@section('content')



<div class="container">
<u1>
	@if($servicios->isNotEmpty())

	<table class="table">
		<thead class="thead-dark card-header">
			<tr>
			<th scope="col"> ID</th>
			<th scope="col"> Nombre del estacionamiento</th>
			<th scope="col"> Abre </th>
			<th scope="col"> Cierra</th>
			<th scope="col"> Calificacion</th>
			<th scope="col"> Tarifa</th>


			</tr>

		</thead>
		<tbody class="cardd">
			<tr>
			@foreach($servicios as $servicio)
        <td>
	 	{{
		$servicio->idservi
		}}
		</td>

		 <td>
	 	{{
		$servicio->nombreestacionamiento
		}}
		</td>
		<td>
	 	{{
		$servicio->horarioabre
		}}
		</td>
		<td>
	 	{{
		$servicio->horariofin
		}}
		</td>
		<td>
	 	{{
		$servicio->calificacion
		}}
		</td>




			<td>
		<a class="btn btn-primary" href="{{ url( '/tarifa',$servicio->idservi)}}"> Ver tarifas</a>
		<a class="btn btn-primary" href="{{ url( '/tarifa/crea',$servicio->idservi)}}"> crear</a>

			</td>

        </tr>
		@endforeach

		</tbody>

	</table>

	@endif




</u1>
</div>
@endsection
