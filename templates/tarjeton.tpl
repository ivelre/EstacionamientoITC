{include file="header.tpl"}
		<div class="cuerpo">
			<div class="cuerpo">
				<h1>Tarjetón de {$datos.nombre}</h1>
			</div>
			<hr>
			{foreach from=$codigo item=tarjeton}
				{$tarjeton.codigo}
			{/foreach}
		</div>
{include file="footer.tpl"}