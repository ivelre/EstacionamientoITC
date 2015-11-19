{include file="header.tpl"}
		<div class="cuerpo">
			<h1>Lista de propietarios</h1>
		</div>

		<div class="contenido">
			{foreach from=$datos item=dato}
			<div id="linea-{$dato.id}">
    		<p>
				<button type="button" class="btn btn-default" id="icon" aria-label="Left Align" title="Eliminar a {$dato.nombre}" onclick="eliminaPerfil({$dato.id})">
				  <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> 
				</button> 
    		<a href="tarjeton.php?id={$dato.id}"><button type="button" class="btn btn-default" id="icon" aria-label="Left Align" title="Tarjetón de {$dato.nombre}">
				  <span class="glyphicon glyphicon-tags" aria-hidden="true"></span> 
				</button></a> 
    		<a href="editar.php?id={$dato.id}"><button type="button" class="btn btn-default" id="icon" aria-label="Left Align" title="Editar a {$dato.nombre}">
				  <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 
				</button> </a>
				<a href="propietario.php?id={$dato.id}"><button type="button" class="btn btn-default" id="icon" aria-label="Left Align" title="Ver a {$dato.nombre}">
				  <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> 
				</button></a> 
    		<a href="propietario.php?id={$dato.id}">{$dato.nombre} {$dato.apaterno} {$dato.amaterno} 
																					{if $dato.tipo_usuario==1}Alumno {/if}
																					{if $dato.tipo_usuario==2}Profesor{/if}
																					{if $dato.tipo_usuario==3}Administrativo{/if}</a><br><br>
				</p>
			</div>
  		{/foreach}
		</div>
<script type="text/javascript">
var eliminaPerfil = function(id) {
	jQuery.ajax({
	  url: '/validaciones.php',
	  type: 'POST',
	  dataType: 'json',
	  data: {
	  	id: id,
	  	fn: 'remove'
	  },
	  success: function(data, textStatus, xhr) {
	    if(data.success == true) {
	    	$("#linea-" + id).fadeOut().remove();
	    }
	    if(data.success == false) {
	    	alert('Error: ' + data.reason);
	    }
	  },
	  error: function(xhr, textStatus, errorThrown) {
	    $("#linea-" + id).fadeOut().remove();
	  }
	});
}
	
</script>
{include file="footer.tpl"}