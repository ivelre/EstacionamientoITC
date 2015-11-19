{include file="header.tpl"}
		<div class="cuerpo">
			<h1>Modificar a {$datos.nombre}</h1>
		</div>
		<div class="cuerpo">
			<div class="row">
			  <div>
			  		<hr>
			  		<form class="form-horizontal" action="validaciones.php" id="alta">
			  			<input  class="validacion" name="validacion" value="1">
			  			<div class="form-group">
				  			<label class="col-sm-3 control-label">Nombre:</label>
				  			<div class="col-sm-9">
				  				<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" required value="{$datos.nombre}">
				  			</div>
				  		</div>
				  		<div class="form-group">
				  			<label class="col-sm-3 control-label">Apellido Paterno:</label>
				  			<div class="col-sm-9">
				  				<input type="text" class="form-control" name="apaterno" id="apaterno" placeholder="Apellido Paterno" required value="{$datos.apaterno}">
				  			</div>
				  		</div>
				  		<div class="form-group">
				  			<label class="col-sm-3 control-label">Apellido Materno:</label>
				  			<div class="col-sm-9">
				  				<input type="text" class="form-control" name="amaterno" id="amaterno" placeholder="Apellido Maternp" required value="{$datos.amaterno}">
				  			</div>
				  		</div>
				  		<div class="form-group">
				  			<label class="col-sm-3 control-label">Domicilio:</label>
				  			<div class="col-sm-9">
				  				<input type="text" class="form-control" name="domicilio" id="domicilio" placeholder="Domicilio" required value="{$datos.domicilio}">
				  			</div>
				  		</div>
							<div class="form-group">
				  			<label class="col-sm-3 control-label">Teléfono:</label>
				  			<div class="col-sm-9">
				  				<input type="text" class="form-control" name="telefono" id="telefono" placeholder="Teléfono" required value="{$datos.telefono}">
				  			</div>
				  		</div>
				  		<div class="form-group">
				  			<label class="col-sm-3 control-label">Tipo se propietario:</label>
				  			<div class="col-sm-9">
					  			<select name="tipo_usuario" id="tipo_usuario" class="form-control">
					  				{if $datos.tipo_usuario ==1}
					  					<option value="1" selected>Alumno</option>
						  				<option value="2">Profesor</option>
						  				<option value="3">Administrativo</option>
						  			{/if}
						  			{if $datos.tipo_usuario ==2}
					  					<option value="1">Alumno</option>
						  				<option value="2" selected>Profesor</option>
						  				<option value="3">Administrativo</option>
						  			{/if}
						  			{if $datos.tipo_usuario ==3}
					  					<option value="1">Alumno</option>
						  				<option value="2">Profesor</option>
						  				<option value="3" selected>Administrativo</option>
						  			{/if}
					  			</select>
				  			</div>
				  		</div>
				  		<div class="form-group">
				  			<label class="col-sm-3 control-label">Licencia:</label>
				  			<div class="col-sm-9">
				  				<input type="text" class="form-control" name="licencia" id="licencia" placeholder="Licencia" required value="{$datos.licencia}">
				  			</div>
				  		</div>
				  		<div class="form-group">
				  			<label class="col-sm-3 control-label">targeta de circulación:</label>
				  			<div class="col-sm-9">
				  				<input type="text" class="form-control" name="tcirculacion" id="tcirculacion" placeholder="targeta de circulación" required value="{$datos.tcirculacion}">
				  			</div>
				  		</div>
				  		<div class="form-group">
				  			<label class="col-sm-3 control-label">Fotogragía:</label>
				  			<div class="col-sm-9">
				  				<input type="file" name="fotografia" id="Archivo">
				  			</div>
				  		</div>
				  		{$i=1}
				  		{foreach item=dato_auto from=$datos_auto}
					  		<h1>Vehículo</h1>
				  			<hr>
				  			<div class="form-group">
					  			<label class="col-sm-3 control-label">Marca:</label>
					  			<div class="col-sm-9">
					  				<input type="text" class="form-control" name="marca_{$i}" id="marca" placeholder="Marca" required value="{$dato_auto.marca}">
					  			</div>
					  		</div>
					  		<div class="form-group">
					  			<label class="col-sm-3 control-label">Modelo:</label>
					  			<div class="col-sm-9">
					  				<input type="text" class="form-control" name="modelo_{$i}" id="modelo" placeholder="Modelo" required value="{$dato_auto.modelo}">
					  			</div>
					  		</div>
					  		<div class="form-group">
					  			<label class="col-sm-3 control-label">Transmisión:</label>
					  			<div class="col-sm-9">
					  				<input type="text" class="form-control" name="transmision_{$i}" id="transmision" placeholder="Transmision" required value="{$dato_auto.transmision}">
					  			</div>
					  		</div>
					  		<div class="form-group">
					  			<label class="col-sm-3 control-label">Placas:</label>
					  			<div class="col-sm-9">
					  				<input type="text" class="form-control" name="placas_{$i}" id="placas" placeholder="placas" required value="{$dato_auto.placas}">
					  			</div>
					  		</div>
					  		<div class="form-group">
					  			<label class="col-sm-3 control-label">Color:</label>
					  			<div class="col-sm-9">
					  				<input type="text" class="form-control" name="color_{$i}" id="color" placeholder="Color" required value="{$dato_auto.color}">
					  			</div>
					  		</div>
					  		<div class="form-group">
					  			<label class="col-sm-3 control-label">Año:</label>
					  			<div class="col-sm-9">
					  				<input type="text" class="form-control" name="ano_{$i}" id="ano" placeholder="Año" required value="{$dato_auto.ano}">
					  			</div>
					  		</div>
					  		<h3>Marcas</h3>
					  		<input type="checkbox" name="seguro_{$i}" id="" value="1" "{if $dato_auto.caracteristicas_1=='true'} checked {/if}">Seguro <br>
					  		<input type="checkbox" name="ac_{$i}" id="" value="2" "{if $dato_auto.caracteristicas_2=='true'} checked {/if}">Aire acondicionado <br>
					  		<input type="checkbox" name="estereo_{$i}" id="" value="3" "{if $dato_auto.caracteristicas_3=='true'} checked {/if}">Estereo <br>
					  		<input type="checkbox" name="ba_{$i}" id="" value="4" "{if $dato_auto.caracteristicas_4=='true'} checked {/if}">Bolsas de aire o seguridad <br>
					  		<input type="checkbox" name="frenos_{$i}" id="" value="5" "{if $dato_auto.caracteristicas_5=='true'} checked {/if}">Frenos de disco <br>
					  		<input type="checkbox" name="birlos_{$i}" id="" value="6" "{if $dato_auto.caracteristicas_6=='true'} checked {/if}">Birlos de seguridad <br>
					  		<h3>Observaciones:</h3>
					  		<textarea rows="4" cols="100" name="observaciones_{$i}" form="alta" placeholder="Añada sus observaciones" >{$dato_auto.observaciones}</textarea>
					  		<div class="form-group text-right">
					  			<input type="submit" class="btn btn-default" value="Actualizar">
					  		</div>

					  	{$i++}
					  {/foreach}
			  		</form>
			  </div>
			</div>
		</div>
{include file="footer.tpl"}