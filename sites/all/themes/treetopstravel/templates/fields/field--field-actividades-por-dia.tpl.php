
<?php
if ($items){

$actividad="";
$class_par="";

?>
<!-- Place somewhere in the <body> of your page -->
<?php for ($i=0; $i < count($items); $i++) {
	
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


		if (isset($items[$i]['field_descripcion_actividad']['#items'][0]['value'])){
			$descri = $items[$i]['field_descripcion_actividad']['#items'][0]['value'];
			

		}
		if (isset($items[$i]['field_noche']['#items'][0]['value'])){
			$noche = $items[$i]['field_noche']['#title'].": ".$items[$i]['field_noche']['#items'][0]['value'];
			

		}

		if (isset($items[$i]['field_tour']['#items'][0]['value'])){
			$tour = $items[$i]['field_tour']['#title'].": ".$items[$i]['field_tour']['#items'][0]['value'];
			

		}

		if(($i%2)==0){
			$class_par="par";

		}else{
			$class_par="impar";
		}



		$actividad .= "<div class='actividad-row actividad-row-".$class_par." actividad-row".($i+1)."'>
		<div class='actividad-col-izq'><div class='actividad-dia-numero'><p>".$titulo_dia."</p></div></div>
		<div class='actividad-col-der'><div class='actividad-desc'>".$descri."</div><div class='actividad-tour'>".$tour."</div><div class='actividad-noche'>".$noche."</div></div></div>";

		
} ?>
<div class="actividades-por-dia-field">
  
		<?php print $actividad ?>
	
</div>
<div class="linea-divisoria"></div>
<?php 	} ?>