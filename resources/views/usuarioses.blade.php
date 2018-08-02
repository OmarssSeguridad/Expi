@extends('layouts.app')
@section('title','admistradores')
@section('content')

<div class="container">
                <div class="card-header ">{{ __('  Formulario') }}</div>
<u1>
	@if($admins->isNotEmpty())

	<table class="table">
		<thead class="thead-dark card-header">
			<tr>
			<th scope="col"> Nombre</th>
			<th scope="col"> Apellido paterno</th>
			<th scope="col"> Apellido materno</th>
			<th scope="col"> Correo</th>
			<th scope="col"> Actividad</th>
			<th scope="col"> </th>

			</tr>

		</thead>
		<tbody class="cardd">
			<tr>
			@foreach($admins as $admin)

		<td >{{
		$admin->nombre
		}}</td>
		<td>
	 	{{
		$admin->ap
		}}
		</td>
		<td>
	 	{{
		$admin->am
		}}
		</td>
		<td>
	 	{{
		$admin->email
		}}
		</td>
			<td>
		<a class="btn btn-primary" href="{{ url( '/asignacontrato',$admin->idadmin)}}"> Asignar contrato</a>
			</td>
<th></th>
</tr>
		@endforeach

		</tbody>

	</table>

	@endif




</u1>
</div>
@endsection
