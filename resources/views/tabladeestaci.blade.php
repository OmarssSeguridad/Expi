@extends('layouts.app')
@section('estacis')
@section('content')


<div class="container">
<u1>
	@if($estacis->isNotEmpty())

	<table class="table">
		<thead class="thead-dark card-header">
			<tr>
			<th scope="col"> ID</th>
			<th scope="col"> Nombre</th>
			<th scope="col"> Accion</th>
			</tr>
		</thead>
		<tbody class="cardd">
			<tr>
			@foreach($estacis as $estaci)
        <td>
	 	{{
		$estaci->idadmin
		}}
		</td>
		 <td>
	 	{{
		$estaci->nombre
		}}



		</td>
        </tr>
		@endforeach

		</tbody>

	</table>

	@endif




</u1>
</div>
@endsection
