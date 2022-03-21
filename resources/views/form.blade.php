@extends('layouts.base')
@section('content')

<div class="row justify-content-center">
	<div class="col-4 p-4">

		<div class="card">
			<div class="card-header">
				<h3>{{ $type == 0 ? "Agregar" : "Editar" }} Articulo</h3>
			</div>

			<div class="card-body">

				<form method="post" action="{{ $type == 0 ? url('add') : url('update') }}">
					@csrf

					{{-- Article Name --}}
					<div class="mb-3">      
						<label for="name" class="form-label">Nombre:</label>        
						<input name="name" type="text" class="form-control" id="name" value="{{ $type == 0 ? old('name') : $a->name }}">  
						@error('name')
						<span class="error">Debe Ingresar el nombre del articulo</span>
						@enderror
						<div id="nameHelp" class="form-text">Ingrese el nombre del articulo</div>
					</div>

					{{-- Article Description --}}
					<div class="mb-3">      
						<label for="description" class="form-label">Descripcion:</label>        
						<input name="description" type="text" class="form-control" id="description" value="{{ $type == 0 ? old('description') : $a->description }}">    
						@error('description')
						<span class="error">Debe Ingresar la descripcion del articulo</span>
						@enderror
						<div id="descriptionHelp" class="form-text">
							Ingrese una descripcion del articulo
						</div>
					</div>

					{{-- Article Categorie --}}
					<div class="mb-3">      
						<label for="categorie" class="form-label">Categoria:</label>        
						<input name="categorie" type="text" class="form-control" id="categorie" value="{{ $type == 0 ? old('categorie') : $a->categorie }}">
						@error('categorie')
						<span class="error">Debe Ingresar la categoria del articulo</span>
						@enderror
						<div id="categorieHelp" class="form-text">
							Ingrese una categoria del articulo
						</div>
					</div>

					<div class="row">

						<div class="col">
							{{-- Article Amount --}}
							<div class="mb-3">      
								<label for="amount" class="form-label">Cantidad:</label>        
								<input name="amount" type="number" class="form-control" id="amount" value="{{ $type == 0 ? old('amount') : $a->amount }}">    
								@error('amount')
								<span class="error">Debe Ingresar la cantidad del articulo</span>
								@enderror
								<div id="amountHelp" class="form-text">
									Ingrese la cantidad del articulo
								</div>
							</div>
						</div>

						<div class="col">
							{{-- Article Price --}}
							<div class="mb-3">      
								<label for="price" class="form-label">Precio:</label>       
								<input name="price" type="number" class="form-control" id="price" step="0.01" value="{{ $type == 0 ? old('price') : $a->price }}">  
								@error('price')
								<span class="is-invalid">Debe Ingresar el precio del articulo</span>
								@enderror
								<div id="priceHelp" class="form-text">
									Ingrese el precio del articulo
								</div>
							</div>
						</div>

						@if($type == 1)
							<input id="id" name="id" type="hidden" value="{{ $a->id }}">
						@endif

					</div>{{-- Row --}}

					<div class="text-center">
						<input type="submit" value="{{ $type == 0 ? "Agregar" : "Actualizar" }}" class="btn btn-primary">
						<a href="{{ url('/') }}" class="btn btn-danger">Cancelar</a>
					</div>
				</form>{{-- Form --}}
			</div>{{-- Card Body --}}

		</div>{{-- Card --}}

	</div>{{-- MAIN --}}
</div>

@endsection