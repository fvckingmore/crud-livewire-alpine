<div class="col-3 pt-4">
	<div > {{-- FORM --}}
		<div class="card">
			<div class="card-header">
				<h3 class="text-center">Ingrese un articulo</h3>
			</div>
			<div class="card-body">
				<form>  
					{{-- Article Name --}}
					<div class="mb-3">      
						<label for="name" class="form-label">Nombre:</label>        
						<input type="text" class="form-control" id="name" aria-describedby="nameHelp">  
						<div id="nameHelp" class="form-text">Ingrese el nombre del articulo</div>
					</div>

					{{-- Article Description --}}
					<div class="mb-3">      
						<label for="description" class="form-label">Descripcion:</label>        
						<input type="text" class="form-control" id="description" aria-describedby="descriptionHelp">    
						<div id="descriptionHelp" class="form-text">
							Ingrese una descripcion del articulo
						</div>
					</div>

					{{-- Article Categorie --}}
					<div class="mb-3">      
						<label for="categorie" class="form-label">Categoria:</label>        
						<input type="text" class="form-control" id="categorie" aria-describedby="categorieHelp">    
						<div id="categorieHelp" class="form-text">
							Ingrese una categoria del articulo
						</div>
					</div>

					<div class="row">

						<div class="col">
							{{-- Article Amount --}}
							<div class="mb-3">      
								<label for="amount" class="form-label">Cantidad:</label>        
								<input type="number" class="form-control" id="amount" aria-describedby="amountHelp">    
								<div id="amountHelp" class="form-text">
									Ingrese la cantidad del articulo
								</div>
							</div>
						</div>

						<div class="col">
							{{-- Article Price --}}
							<div class="mb-3">      
								<label for="price" class="form-label">Precio:</label>       
								<input type="number" class="form-control" id="price" step="0.01" aria-describedby="priceHelp">  
								<div id="priceHelp" class="form-text">
									Ingrese el precio del articulo
								</div>
							</div>
						</div>

					</div>{{-- Row --}}

					<div class="row text-center mx-auto">
						<button type="submit" class="btn btn-primary">Agregar</button>
					</div>

				</form>{{-- Form --}}
			</div>{{-- Card Body --}}
		</div>{{-- Card --}}
	</div>{{-- FORM --}}
	
</div>
