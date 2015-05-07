
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
		
		if($url != ''){
			if($link != ''){
				if ($titulo_slide != '' || $desc_slide != ''){
					if($titulo_slide != ''){
						$titulo_slide_markup = "<h3><a href=\"".$link."\" >".$titulo_slide."</a></h3>";
					}
					if($desc_slide != ''){
						$desc_slide_markup = "<p>".$desc_slide."</p>";
					}
					

					$imagen .= "<li><a href=\"".$link."\" ><img src=\"/sites/default/files/slides/".$items[$i]['field_image']['#items'][0]['filename']."\" /></a><div class='flex-caption'>".$titulo_slide_markup.$desc_slide_markup."</div></li>";
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
					

					$imagen .= "<li><img src=\"/sites/default/files/slides/".$items[$i]['field_image']['#items'][0]['filename']."\" /><div class='flex-caption'>".$titulo_slide_markup.$desc_slide_markup."</div></li>";
				}else{
					$imagen .= "<li><img src=\"/sites/default/files/slides/".$items[$i]['field_image']['#items'][0]['filename']."\" /></li>";
			}

			
		}
	}
} ?>
<div class="flexslider">
  <ul class="slides">
		<?php print $imagen ?>
	</ul>
</div>
<?php 	flexslider_add(); } ?>