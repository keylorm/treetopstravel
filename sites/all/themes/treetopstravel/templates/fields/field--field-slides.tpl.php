
<?php
if ($items){
$imagen ="";
dpm($items);
?>
<!-- Place somewhere in the <body> of your page -->
<?php for ($i=0; $i < count($items); $i++) {
	$url = "";

	if (isset($items[$i]['field_imagen_thumbnail']['#items'][0]['filename'])&&isset($items[$i]['field_imagen_real']['#items'][0]['filename'])){
			$url = '/sites/default/files/listado_pasamanos/'.$items[$i]['field_imagen_real']['#items'][0]['filename'];

		}
		if($i==(count($items)-1)){
			$last="logo-pasamano-last";
		}else{
		$last="";
		}
		if($i==0){
			$first="logo-pasamano-first";
		}else{
		$first="";
		}
		if($url != ''){

			$imagen .= "<div class=\"logo-pasamano logo-pasamano-".($i+1)." ".$first." ".$last."\">
			<div class='logo-pasamanos-imagen'><a href=\"".$url."\" class='pasamanos-popup'><img src=\"/sites/default/files/listado_pasamanos/".$items[$i]['field_imagen_thumbnail']['#items'][0]['filename']."\" /></a></div>
			<div class='logo-pasamanos-nombre'><p>".$items[$i]['field_nombre_pasamano']['#items'][0]['value']."</p></div>
			</div>";
		}else{
			$imagen .= "<div class=\"logo-pasamano logo-pasamano-".($i+1)." ".$first." ".$last."\">
			<div class='logo-pasamanos-imagen'><img src=\"/sites/default/files/listado_pasamanos/".$items[$i]['field_imagen_thumbnail']['#items'][0]['filename']."\" /></div>
			<div class='logo-pasamanos-nombre'><p>".$items[$i]['field_nombre_pasamano']['#items'][0]['value']."</p></div>
			</div>";
	}
} ?>
<div class="pasamanos">
	<h3>Opciones de Pasamanos</h3>
		<div class="listado-pasamanos">
		<?php print $imagen ?>
	</div>
	<div class="pasamanos-cotizar"><a href="/contactenos">Cotizar</a></div>
</div>
<?php } ?>