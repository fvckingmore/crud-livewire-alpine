<div>
	<div id="form" class="modal" tabindex="-1" role="dialog" wire:ignore>
		<div class="modal-dialog" role="document">
			<div class="modal-content">

				<div class="modal-header">
					<h5 class="modal-title">{{ $type }} {{ $type == 0 ? "Agregar" : "Editar" }} Articulo</h5>
				</div>{{-- Modal Header --}}

				<div class="modal-body">
					<div>
						{{-- Article Name --}}
						<div class="mb-3">      
							<label for="name" class="form-label">Nombre:</label>        
							<input type="text" class="form-control" id="name" wire:model.defer="name">  
							@error('name')
							<span class="error">Debe Ingresar el nombre del articulo</span>
							@enderror
							<div id="nameHelp" class="form-text">Ingrese el nombre del articulo</div>
						</div>

						{{-- Article Description --}}
						<div class="mb-3">      
							<label for="description" class="form-label">Descripcion:</label>        
							<input type="text" class="form-control" id="description" wire:model.defer="description">    
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
							<input type="text" class="form-control" id="categorie"wire:model.defer="categorie">
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
									<input type="number" class="form-control" id="amount" wire:model.defer="amount">    
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
									<input type="number" class="form-control" id="price" step="0.01" wire:model.defer="price">  
									@error('price')
									<span class="is-invalid">Debe Ingresar el precio del articulo</span>
									@enderror
									<div id="priceHelp" class="form-text">
										Ingrese el precio del articulo
									</div>
								</div>
							</div>

						</div>{{-- Row --}}

					</div>{{-- MAIN --}}




				</div>

				<div class="modal-footer">
					<button wire:click.prevent="addArticle" class="btn btn-primary">
						{{ $type == 0 ? "Agregar" : "Actualizar" }}
					</button>
					<button wire:click.prevent="closeForm" type="button" class="btn btn-secondary">
						Cancelar
					</button>
				</div>{{-- Modal Footer --}}

			</div>{{-- Modal Content --}}
		</div>
	</div>{{-- Modal Base --}}
</div>
