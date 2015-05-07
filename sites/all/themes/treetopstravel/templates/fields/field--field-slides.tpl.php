
<?php
if ($items){
$imagen ="";
dpm($items);
?>
<!-- Place somewhere in the <body> of your page -->
<?php for ($i=0; $i < count($items); $i++) {
	$url = "";
	$link="";
	$titulo_slide="";
	$desc_slide="";
	$titulo_slide_markup = "";
	$desc_slide_markup = "";


		if (isset($items[$i]['field_image']['#items'][0]['filename'])){
			$url = '/sites/default/files/slides/'.$items[$i]['field_image']['#items'][0]['filename'];
			

		}

		if (isset($items[$i]['field_slide_link']['#items'][0]['value'])){
			$link = $items[$i]['field_slide_link']['#items'][0]['value'];
			

		}
		if (isset($items[$i]['field_slide_titulo']['#items'][0]['value'])){
			$titulo_slide = $items[$i]['field_slide_titulo']['#items'][0]['value'];
			

		}
		if (isset($items[$i]['field_slide_descripcin']['#items'][0]['value'])){
			$desc_slide = $items[$i]['field_slide_descripcin']['#items'][0]['value'];
			

		}
		/*if($i==(count($items)-1)){
			$last="logo-pasamano-last";
		}else{
		$last="";
		}
		if($i==0){
			$first="logo-pasamano-first";
		}else{
		$first="";
		}*/
		if($url != ''){
			if($link != ''){
				if ($titulo_slide != '' || $desc_slide != ''){
					if($titulo_slide != ''){
						$titulo_slide_markup = "<h3><a href=\"".$link."\" >".$titulo_slide."</a></h3>";
					}
					if($desc_slide != ''){
						$desc_slide_markup = "<p>".$desc_slide."</p>";
					}
					

					$imagen .= "<li><a href=\"".$link."\" ><img src=\"/sites/default/files/slides/".$items[$i]['field_image']['#items'][0]['filename']."\" /></a><div class='caption'>".$titulo_slide_markup.$desc_slide_markup."</div></li>";
				}else{
					$imagen .= "<li><a href=\"".$link."\" ><img src=\"/sites/default/files/slides/".$items[$i]['field_image']['#items'][0]['filename']."\" /></a></li>";
				}
			}else{
				if ($titulo_slide != '' || $desc_slide != ''){
					if($titulo_slide != ''){
						$titulo_slide_markup = "<h3>".$titulo_slide."</h3>";
					}
					if($desc_slide != ''){
						$desc_slide_markup = "<p>".$desc_slide."</p>";
					}
					

					$imagen .= "<li><img src=\"/sites/default/files/slides/".$items[$i]['field_image']['#items'][0]['filename']."\" /><div class='caption'>".$titulo_slide_markup.$desc_slide_markup."</div></li>";
				}else{
					$imagen .= "<li><img src=\"/sites/default/files/slides/".$items[$i]['field_image']['#items'][0]['filename']."\" /></li>";
			}

			
		}/*else{
			$imagen .= "<div class=\"logo-pasamano logo-pasamano-".($i+1)." ".$first." ".$last."\">
			<div class='logo-pasamanos-imagen'><img src=\"/sites/default/files/listado_pasamanos/".$items[$i]['field_imagen_thumbnail']['#items'][0]['filename']."\" /></div>
			<div class='logo-pasamanos-nombre'><p>".$items[$i]['field_nombre_pasamano']['#items'][0]['value']."</p></div>
			</div>";*/
	}
} ?>
<div class="flexslider">
  <ul class="slides">
		<?php print $imagen ?>
	</ul>
</div>
<?php } ?>