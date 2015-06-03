
<?php
if ($items){

$imagen ="";
?>
<!-- Place somewhere in the <body> of your page -->
<?php for ($i=0; $i < count($items); $i++) {
	
	$url = "";
	$link="";
	$titulo_slide="";
	$desc_slide="";
	$titulo_slide_markup = "";
	$desc_slide_markup = "";
	$texto_boton_link_slide = "";
	$texto_boton_link_slide_markup="";


		if (isset($items[$i]['field_image']['#items'][0]['uri'])){
			$url = '/sites/default/files/slides_internos/'.str_replace("public://slides_internos/","",$items[$i]['field_image']['#items'][0]['uri']);
			

		}

		if (isset($items[$i]['field_slide_link']['#items'][0]['value'])){
			$link = $items[$i]['field_slide_link']['#items'][0]['value'];
			

		}
		if (isset($items[$i]['field_slide_titulo']['#items'][0]['value'])){
			$titulo_slide = $items[$i]['field_slide_titulo']['#items'][0]['value'];
			

		}
		if (isset($items[$i]['field_slide_descripcion']['#items'][0]['value'])){
			$desc_slide = $items[$i]['field_slide_descripcion']['#items'][0]['value'];
			

		}

		if (isset($items[$i]['field_slide_texto_boton_link']['#items'][0]['value'])){
			$texto_boton_link_slide = $items[$i]['field_slide_texto_boton_link']['#items'][0]['value'];
			

		}
		
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
	}
} ?>
<div class="flexslider flexslider-interno">
  <ul class="slides">
		<?php print $imagen ?>
	</ul>
	<div class="container-nav"></div>
</div>
<?php 	flexslider_add(); } ?>