{include file="header.tpl"}
		<div class="cuerpo">
			<div class="row">
			  <div>
			  		<h1>Registro de propietario</h1>
			  		<hr>
			  		<form class="form-horizontal" action="validaciones.php" id="alta">
			  			<input  class="validacion" name="validacion" value="1">
			  			<div class="form-group">
				  			<label class="col-sm-3 control-label">Nombre:</label>
				  			<div class="col-sm-9">
				  				<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" required>
				  			</div>
				  		</div>
				  		<div class="form-group">
				  			<label class="col-sm-3 control-label">Apellido Paterno:</label>
				  			<div class="col-sm-9">
				  				<input type="text" class="form-control" name="apaterno" id="apaterno" placeholder="Apellido Paterno" required>
				  			</div>
				  		</div>
				  		<div class="form-group">
				  			<label class="col-sm-3 control-label">Apellido Materno:</label>
				  			<div class="col-sm-9">
				  				<input type="text" class="form-control" name="amaterno" id="amaterno" placeholder="Apellido Maternp" required>
				  			</div>
				  		</div>
				  		<div class="form-group">
				  			<label class="col-sm-3 control-label">Domicilio:</label>
				  			<div class="col-sm-9">
				  				<input type="text" class="form-control" name="domicilio" id="domicilio" placeholder="Domicilio" required>
				  			</div>
				  		</div>
							<div class="form-group">
				  			<label class="col-sm-3 control-label">Teléfono:</label>
				  			<div class="col-sm-9">
				  				<input type="text" class="form-control" name="telefono" id="telefono" placeholder="Teléfono" required>
				  			</div>
				  		</div>
				  		<div class="form-group">
				  			<label class="col-sm-3 control-label">Tipo se propietario:</label>
				  			<div class="col-sm-9">
					  			<select name="tipo_usuario" id="tipo_usuario" class="form-control">
					  				<option value="1">Alumno</option>
					  				<option value="2">Profesor</option>
					  				<option value="3">Administrativo</option>
					  			</select>
				  			</div>
				  		</div>
				  		<div class="form-group">
				  			<label class="col-sm-3 control-label">Licencia:</label>
				  			<div class="col-sm-9">
				  				<input type="text" class="form-control" name="licencia" id="licencia" placeholder="Licencia" required>
				  			</div>
				  		</div>
				  		<div class="form-group">
				  			<label class="col-sm-3 control-label">tarjeta de circulación:</label>
				  			<div class="col-sm-9">
				  				<input type="text" class="form-control" name="tcirculacion" id="tcirculacion" placeholder="targeta de circulación" required>
				  			</div>
				  		</div>
				  		<h1>Primer Vehículo</h1>
			  			<hr>
			  			<div class="form-group">
				  			<label class="col-sm-3 control-label">Marca:</label>
				  			<div class="col-sm-9">
				  				<input type="text" class="form-control" name="marca" id="marca" placeholder="Marca" required>
				  			</div>
				  		</div>
				  		<div class="form-group">
				  			<label class="col-sm-3 control-label">Modelo:</label>
				  			<div class="col-sm-9">
				  				<input type="text" class="form-control" name="modelo" id="modelo" placeholder="Modelo" required>
				  			</div>
				  		</div>
				  		<div class="form-group">
				  			<label class="col-sm-3 control-label">Transmisión:</label>
				  			<div class="col-sm-9">
				  				<input type="text" class="form-control" name="transmision" id="transmision" placeholder="Transmision" required>
				  			</div>
				  		</div>
				  		<div class="form-group">
				  			<label class="col-sm-3 control-label">Placas:</label>
				  			<div class="col-sm-9">
				  				<input type="text" class="form-control" name="placas" id="placas" placeholder="placas" required>
				  			</div>
				  		</div>
				  		<div class="form-group">
				  			<label class="col-sm-3 control-label">Color:</label>
				  			<div class="col-sm-9">
				  				<input type="text" class="form-control" name="color" id="color" placeholder="Color" required>
				  			</div>
				  		</div>
				  		<div class="form-group">
				  			<label class="col-sm-3 control-label">Año:</label>
				  			<div class="col-sm-9">
				  				<input type="text" class="form-control" name="ano" id="ano" placeholder="Año" required>
				  			</div>
				  		</div>
				  		<h3>Marcas</h3>
				  		<input type="checkbox" name="seguro" id="" value="1">Seguro <br>
				  		<input type="checkbox" name="ac" id="" value="2">Aire acondicionado <br>
				  		<input type="checkbox" name="estereo" id="" value="3">Estereo <br>
				  		<input type="checkbox" name="ba" id="" value="4">Bolsas de aire o seguridad <br>
				  		<input type="checkbox" name="frenos" id="" value="5">Frenos de disco <br>
				  		<input type="checkbox" name="birlos" id="" value="6">Birlos de seguridad <br>
				  		<h3>Observaciones:</h3>
				  		<textarea rows="4" cols="100" name="observaciones" form="alta" placeholder="Añada sus observaciones"></textarea>
				  		<div class="form-group text-right">
				  			<input type="submit" class="btn btn-default" value="registrar">
				  		</div>
			  		<h1><input type="checkbox" name="vehiculo_2" id="" value="1">Segundo vehículo</h1>
			  			<hr>
			  			<div class="form-group">
				  			<label class="col-sm-3 control-label">Marca:</label>
				  			<div class="col-sm-9">
				  				<input type="text" class="form-control" name="marca_2" id="marca_2" placeholder="Marca" >
				  			</div>
				  		</div>
				  		<div class="form-group">
				  			<label class="col-sm-3 control-label">Modelo:</label>
				  			<div class="col-sm-9">
				  				<input type="text" class="form-control" name="modelo_2" id="modelo_2" placeholder="Modelo" >
				  			</div>
				  		</div>
				  		<div class="form-group">
				  			<label class="col-sm-3 control-label">Transmisión:</label>
				  			<div class="col-sm-9">
				  				<input type="text" class="form-control" name="transmision_2" id="transmision_2" placeholder="Transmisión" >
				  			</div>
				  		</div>
				  		<div class="form-group">
				  			<label class="col-sm-3 control-label">Placas:</label>
				  			<div class="col-sm-9">
				  				<input type="text" class="form-control" name="placas_2" id="placas_2" placeholder="placas" >
				  			</div>
				  		</div>
				  		<div class="form-group">
				  			<label class="col-sm-3 control-label">Color:</label>
				  			<div class="col-sm-9">
				  				<input type="text" class="form-control" name="color_2" id="color_2" placeholder="Color" >
				  			</div>
				  		</div>
				  		<div class="form-group">
				  			<label class="col-sm-3 control-label">Año:</label>
				  			<div class="col-sm-9">
				  				<input type="text" class="form-control" name="ano_2" id="ano_2" placeholder="Año" >
				  			</div>
				  		</div>
				  		<h3>Marcas</h3>
				  		<input type="checkbox" name="seguro_2" value="1">Seguro <br>
				  		<input type="checkbox" name="ac_2" value="2">Aire acondicionado <br>
				  		<input type="checkbox" name="estereo_2" value="3">Estereo <br>
				  		<input type="checkbox" name="ba_2" value="4">Bolsas de aire o seguridad <br>
				  		<input type="checkbox" name="frenos_2" value="5">Frenos de disco <br>
				  		<input type="checkbox" name="birlos_2" value="6">Birlos de seguridad <br>
				  		<h3>Observaciones:</h3>
				  		<textarea rows="4" cols="100" name="observaciones_2" form="alta" placeholder="Añada sus observaciones"></textarea>
				  		<div class="form-group text-right">
				  			<input type="submit" class="btn btn-default" value="registrar">
				  		</div>
			  		</form>
			  </div>
			</div>
		</div>
{include file="footer.tpl"}