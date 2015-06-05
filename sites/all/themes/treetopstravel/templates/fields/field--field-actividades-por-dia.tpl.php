
<?php
if ($items){

$columna1_markup ="";
$columna2_markup ="";
?>
<!-- Place somewhere in the <body> of your page -->
<?php for ($i=0; $i < count($items); $i++) {
	dpm($items);
	$titulo_dia = "";
	$descri="";
	$noche="";
	$tour="";
	$titulo_dia_markup = "";
	$descri_markup = "";
	$tour_markup = "";
	$noche_markup="";


		

		if (isset($items[$i]['field_titulo_dia']['#items'][0]['value'])){
			$titulo_dia = $items[$i]['field_titulo_dia']['#items'][0]['value'];
			

		}else{	
			$titulo_dia = $i+1;
		}


		if (isset($items[$i]['field_descripcion_actividad ']['#items'][0]['value'])){
			$descri = $items[$i]['field_descripcion_actividad ']['#items'][0]['value'];
			

		}
		if (isset($items[$i]['field_noche']['#items'][0]['value'])){
			$noche = $items[$i]['field_noche']['#title'].": ".$items[$i]['field_noche']['#items'][0]['value'];
			

		}

		if (isset($items[$i]['field_tour']['#items'][0]['value'])){
			$tour = $items[$i]['field_tour']['#title'].": ".$items[$i]['field_tour ']['#items'][0]['value'];
			

		}/*
		
		if($url != ''){
			if($link != ''){
				if ($titulo_slide != '' || $desc_slide != '' || $texto_boton_link_slide != ''){
					if($titulo_slide != ''){
						$titulo_slide_markup = "<h3><a href=\"".$link."\" >".$titulo_slide."</a></h3>";
					}
					if($desc_slide != ''){
						$desc_slide_markup = "<p>".$desc_slide."</p>";
					}

					if($texto_boton_link_slide != ''){
						$texto_boton_link_slide_markup = "<p><a class='link-ver-mas-slide' href='".$link."'>".$texto_boton_link_slide."</a></p>";
					}
					

					$imagen .= "<li><a href=\"".$link."\" ><img src='".$url."' /></a><div class='flex-caption'><div class='flex-caption-inner'>".$titulo_slide_markup.$desc_slide_markup.$texto_boton_link_slide_markup."</div></div></li>";
				}else{
					$imagen .= "<li><a href=\"".$link."\" ><img src='".$url."' /></a></li>";
				}
			}else{
				if ($titulo_slide != '' || $desc_slide != ''){
					if($titulo_slide != ''){
						$titulo_slide_markup = "<h3>".$titulo_slide."</h3>";
					}
					if($desc_slide != ''){
						$desc_slide_markup = "<p>".$desc_slide."</p>";
					}
					

					$imagen .= "<li><img src='".$url."' /><div class='flex-caption'><div class='flex-caption-inner'>".$titulo_slide_markup.$desc_slide_markup."</div></div></li>";
				}else{
					$imagen .= "<li><img src='".$url."' /></li>";
			}

			
		}
	}*/
} ?>
<div class="flexslider flexslider-home">
  <ul class="slides">
		<?php print $imagen ?>
	</ul>
	<div class="container-nav"></div>
</div>
<?php 	flexslider_add(); } ?>