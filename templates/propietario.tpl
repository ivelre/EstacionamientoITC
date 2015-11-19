{include file="header.tpl"}
		<div class="cuerpo">
			<h1>Propietario </h1>
			<hr>
		</div>
			<div class="contenido">
				<p for="" class="control-label"><b>Nombre:</b> {$datos.nombre} {$datos.apaterno} {$datos.amaterno}</p><br>
				<p for="" class="control-label"><b>Direccion:</b> {$datos.domicilio}</p><br>
				<p for="" class="control-label"><b>Teléfono:</b> {$datos.telefono}</p><br>
				<p for="" class="control-label"><b>Tipo de usuario:</b> {if $datos.tipo_usuario == 1} Alumno {/if}
																																{if $datos.tipo_usuario == 2} Profesor {/if}
																																{if $datos.tipo_usuario == 3} Administración {/if}</p><br>
				<p for="" class="control-label"><b>Licencia:</b> {$datos.licencia}</p><br>
				<p for="" class="control-label"><b>Tarjeta de circulacion:</b> {$datos.tcirculacion}</p><br>
			</div>
		{foreach item=dato_auto from=$datos_auto}
			<div class="cuerpo">
				<h1>Vehiculo</h1>
				<hr>
			</div>
				<div class="contenido">
					<p for="" class="control-label"><b>Marca:</b> {$dato_auto.marca}</p><br>
					<p for="" class="control-label"><b>Modelo:</b> {$dato_auto.modelo}</p><br>
					<p for="" class="control-label"><b>Transmición:</b> {$dato_auto.transmision}</p><br>
					<p for="" class="control-label"><b>Placas:</b> {$dato_auto.placas}</p><br>
					<p for="" class="control-label"><b>Color:</b> {$dato_auto.color}</p><br>
					<p for="" class="control-label"><b>Año:</b> {$dato_auto.ano}</p><br>
					<p for="" class="control-label"><b>Caracteristicas:</b> {$dato_auto.caracteristicas}</p><br>
					<p for="" class="control-label"><b>Observaciones:</b> {$dato_auto.observaciones}</p><br>
				</div>
		{/foreach}
{include file="footer.tpl"}