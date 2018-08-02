@extends('layouts.app')
@section('admins')
@section('content')


<div class="container">
<u1>
	@if($admins->isNotEmpty())

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
			@foreach($admins as $admin)
        <td>
	 	{{
		$admin->idadmin
		}}
		</td>
		 <td>
	 	{{
		$admin->nombre
		}}

		{{
		$admin->ap
		}}

		{{
		$admin->am
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
