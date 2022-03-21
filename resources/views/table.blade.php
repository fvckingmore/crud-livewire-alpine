<div class="container">
	<div class="row">

		<div class="p-4">
			<div class="card text-center">
				<div class="card-header">
					<h3>Articulos</h3>
				</div>
				<div class="card-body">
					<table id="aja" class="table table-striped">
						<thead class="text-center">
							<tr>
								<th class="text-center align-middle" scope="col">#</th>
								<th class="text-center align-middle" scope="col">Nombre</th>
								<th class="text-center align-middle" scope="col">Descripcion</th>
								<th class="text-center align-middle" scope="col">Categoria</th>
								<th class="text-center align-middle" scope="col">Cantidad</th>
								<th class="text-center align-middle" scope="col">Precio</th>
								<th class="text-center align-middle" scope="col"></th>
							</tr>
						</thead>

						<tbody>

							@foreach($articles as $a)
							<tr>
								<td class="text-center align-middle">{{ $a->id }}</td>
								<td class="text-center align-middle">{{ $a->name }}</td>
								<td class="text-center align-middle">{{ $a->description }}</td>
								<td class="text-center align-middle">{{ $a->categorie }}</td>
								<td class="text-center align-middle">{{ $a->amount }}</td>
								<td class="text-center align-middle">{{ $a->price }}</td>
								<td>
									<div class="btn-group" role="group">
										<a href="{{ url('edit/'.$a->id) }}" class="btn btn-info">Edtar</a>
										<form method="post" action="{{ url('delete') }}">
											@csrf
											<input type="hidden" name="id" value={{ $a->id }}>
											<input type="submit" value="Borrar" class="btn btn-danger">
										</form>
									</div>
								</td>
							</tr>
							@endforeach


						</tbody>{{-- Table Body --}}

					</table>{{-- Table --}}
				</div>{{-- Card Body --}}
			</div>{{-- Card --}}

			<div class="text-center mt-2">
				<a href="{{ url('create') }}" class="btn btn-primary">
					Agregar
				</a>
			</div>

		</div> {{-- col-9 --}}
	</div>{{-- Row --}}
</div>{{-- Container --}}


<script>
	var jq = jQuery.noConflict(true);

	$(document).ready( function () {
		$('#aja').DataTable();
	} );
</script>


