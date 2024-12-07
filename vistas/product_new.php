<div class="container is-fluid mb-6">
	<h1 class="title"style="text-align: center;">Mobiliario</h1>
	<h2 class="subtitle"style="text-align: center;">Agrega mobiliario</h2>
</div>

<div class="container pb-6 pt-6">
	<?php 
		require_once "./php/main.php";
	?>
 
	<div class="form-rest mb-6 mt-6"></div>

	<form action="./php/producto_guardar.php" method="POST" class="FormularioAjax" autocomplete="off" enctype="multipart/form-data" >
		<div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Num Inventario</label>
				  	<input class="input" type="text" name="producto_codigo" pattern="[a-zA-Z0-9- ]{1,70}" maxlength="70" required >
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Nombre</label>
				  	<input class="input" type="text" name="producto_nombre" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\-\/ ]{1,70}" maxlength="70" required >
				</div>
		  	</div>
		</div>
		<div class="columns">
		<div class="column">
		    	<div class="control">
					<label>Marca</label>
				  	<input class="input" type="text" name="producto_marca" pattern="[a-zA-Z0-9- ]{1,70}" maxlength="70" required >
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Modelo</label>
				  	<input class="input" type="text" name="producto_modelo" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\-\/ ]{1,70}" maxlength="70" required >
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Material</label>
				  	<input class="input" type="text" name="producto_material" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\-\/ ]{1,70}" maxlength="70" required >
				</div>
		  	</div>
			  <div class="column">
		    	<div class="control">
					<label>Serie</label>
				  	<input class="input" type="text" name="producto_serie" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\-\/ ]{1,70}" maxlength="70" required >
				</div>
		  	</div>
			  <div class="column">
		    	<div class="control">
					<label>Estado</label>
				  	<input class="input" type="text" name="producto_estado" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\-\/ ]{1,70}" maxlength="70" required >
				</div>
		  	</div>

			  </div>

			<div class="columns">
				<div class="column">
					<div class="control">
						<label>Fáctura</label>
						<input class="input" type="text" name="producto_factura" pattern="[a-zA-Z0-9- ]{1,70}" maxlength="70" required >
					</div>
				</div>
				<div class="column">
					<div class="control">
						<label>Fecha</label>
						<input class="input" type="text" name="producto_fecha" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\-\/ ]{1,70}" maxlength="70" required >
					</div>
				</div>
				<div class="column">
		    	<div class="control">
					<label>Precio</label>
				  	<input class="input" type="text" name="producto_precio" pattern="[0-9.]{1,25}" maxlength="25" required >
				</div>
		  	</div>
				<div class="column">
					<div class="control">
						<label>Area Ubicación</label>
						<input class="input" type="text" name="producto_arubicacion" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\-\/ ]{1,70}" maxlength="70" required >
					</div>
				</div>
		    </div>
			
		
		<div class="columns">
		    <div class="column">
			    <div class="control">
						<label>Ubicación</label>
						<input class="input" type="text" name="producto_ubicacion" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\-\/ ]{1,70}" maxlength="70" required >
					</div>
			    </div>	
		  	<div class="column">
		    	<div class="control">
					<label>Comentarios</label>
				  	<input class="input" type="text" name="producto_stock" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\-\/ ]{1,70}" maxlength="90" required >
				</div>
		  	</div>
		  	<div class="column">
				<label>Resguardante</label><br>
		    	<div class="select is-rounded">
				  	<select name="producto_categoria" >
				    	<option value="" selected="" >Seleccione una opción</option>
				    	<?php
    						$categorias=conexion();
    						$categorias=$categorias->query("SELECT * FROM usuario");
    						if($categorias->rowCount()>0){
    							$categorias=$categorias->fetchAll();
    							foreach($categorias as $row){
    								echo '<option value="'.$row['usuario_codigo'].'" >'.$row['usuario_codigo'].'</option>';
				    			}
				   			}
				   			$categorias=null;
				    	?>
				  	</select>
				</div>
		  	</div>
		</div>
		<div class="columns">
			<div class="column">
				<label>Foto o imagen del código de barras del mobiliario</label><br>
				<div class="file is-small has-name">
				  	<label class="file-label">
				    	<input class="file-input" type="file" name="producto_foto" accept=".jpg, .png, .jpeg" >
				    	<span class="file-cta">
				      		<span class="file-label">Imagen</span>
				    	</span>
				    	<span class="file-name">JPG, JPEG, PNG. (MAX 3MB)</span>
				  	</label>
				</div>
			</div>
		</div>
		<p class="has-text-centered">
			<button type="submit" class="button is-info is-rounded">Guardar</button>
		</p>
	</form>
</div>