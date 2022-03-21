<div class="container">
	<div class="row">

		@include('livewire.form')

		<div class="col-9 p-4">
			<div class="card text-center">
				<div class="card-header">
					<h3>Articulos</h3>
				</div>
				<div class="card-body">
					<table class="table table-striped">
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
										<button wire:click="editArticle({{ $a->id }})" type="button" class="btn btn-info">Editar</button>
										<button wire:click="confirmDeleteArticle({{ $a->id }})" type="button" class="btn btn-danger">Borrar</button>
									</div>
								</td>
							</tr>
							@endforeach


						</tbody>{{-- Table Body --}}

					</table>{{-- Table --}}
				</div>{{-- Card Body --}}

				<div class="card-footer text-muted">
					<div class="container">
						{{ $articles->links('layouts.pagination') }}
					</div>
				</div>{{-- Card Footer --}}

			</div>{{-- Card --}}

		</div> {{-- col-9 --}}
	</div>{{-- Row --}}
</div>{{-- Container --}}

<script>
	window.addEventListener('openForm', e => {
		$('#form').modal('show');

	});

	window.addEventListener('closeForm', e => {
		$('#form').modal('hide');

	});

	window.addEventListener('confirm', e => {
		Livewire.emit(
			'deleteArticle', 
			confirm("Esta seguro de borrar " + event.detail.name + '?'),
			event.detail.id
			)
	});
</script>


