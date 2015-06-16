jQuery(window).load(function() {
  jQuery('.front .flexslider').flexslider({
    animation: "slide",
    animationLoop: true,
    pauseOnHover: false,
    controlsContainer: ".container-nav",
    directionNav: false
  });

  jQuery('.not-front .flexslider').flexslider({
    animation: "slide",
    animationLoop: true,
    pauseOnHover: false,
    controlsContainer: ".container-nav",
    directionNav: true
  });

  jQuery('.flexslider.flexslider-interno').flexslider({
    animation: "slide",
    animationLoop: true,
    pauseOnHover: false,
    controlsContainer: ".container-nav",
    directionNav: true
  });


  

  

});


jQuery(document).ready(function() {
  jQuery(".i18n-es .view-display-id-block .views-exposed-form .form-item-field-region-tid select option[value='All']").text("Todas las regiones");
  jQuery(".i18n-es .view-display-id-block .views-exposed-form .form-item-field-destino-target-id select option[value='All']").text("Todos los destinos");    
  jQuery(".i18n-en .view-display-id-block_1 .views-exposed-form .form-item-field-region-tid select option[value='All']").text("All the regions");
  jQuery(".i18n-en .view-display-id-block_1 .views-exposed-form .form-item-field-destino-target-id select option[value='All']").text("All the destinations");    


  var label_menores_12 = jQuery(".webform-component--datos-itinerario--datos-del-itinerario--fila-4--menores-de-12-anos label");
  jQuery(".webform-component--datos-itinerario--datos-del-itinerario--fila-4--menores-de-12-anos select").after(label_menores_12);


   var label_menores_12_eng = jQuery(".webform-component--datos-itinerario--datos-del-itinerario--fila-4--under-12 label");
  jQuery(".webform-component--datos-itinerario--datos-del-itinerario--fila-4--under-12 select").after(label_menores_12_eng);



  /*Mover Tags del filtro expuesto de listados a un bloque aparte*/

  mover_tags_filtro_expuesto();



});
jQuery(document).ajaxSuccess(function() {
  jQuery(".i18n-es .view-display-id-block .views-exposed-form .form-item-field-region-tid select option[value='All']").text("Todas las regiones");
  jQuery(".i18n-es .view-display-id-block .views-exposed-form .form-item-field-destino-target-id select option[value='All']").text("Todos los destinos");    
  jQuery(".i18n-en .view-display-id-block_1 .views-exposed-form .form-item-field-region-tid select option[value='All']").text("All the regions");
  jQuery(".i18n-en .view-display-id-block_1 .views-exposed-form .form-item-field-destino-target-id select option[value='All']").text("All the destinations");    


  var label_menores_12 = jQuery(".webform-component--datos-itinerario--datos-del-itinerario--fila-4--menores-de-12-anos label");
  jQuery(".webform-component--datos-itinerario--datos-del-itinerario--fila-4--menores-de-12-anos select").after(label_menores_12);


   var label_menores_12_eng = jQuery(".webform-component--datos-itinerario--datos-del-itinerario--fila-4--under-12 label");
  jQuery(".webform-component--datos-itinerario--datos-del-itinerario--fila-4--under-12 select").after(label_menores_12_eng);




  /*Mover Tags del filtro expuesto de listados a un bloque aparte*/

  mover_tags_filtro_expuesto();


});


function mover_tags_filtro_expuesto(){

  var filtrotags = jQuery(".view-listados-de-tours-y-hoteles .view-filters #edit-field-tags-tours-tid-selective-wrapper").html();
  jQuery(".view-listados-de-tours-y-hoteles .view-filters").after("<div class='view-filters-tags'>"+filtrotags+"</div>");

  //jQuery(".view-listados-de-tours-y-hoteles .view-filters").after(jQuery(".view-listados-de-tours-y-hoteles .view-filters #edit-field-tags-tours-tid-selective-wrapper"));

}

// Controlled by buttons
/*var $controlledByButtons = $('#controlledByButtons');
$controlledByButtons.updown({
	step: 10,
	shiftStep: 100
});
var $updown = $controlledByButtons.data('updown');
$('#btnIncrease').click(function(event){
	$updown.increase(event);
	$updown.triggerEvents();
});
$('#btnDecrease').click(function(event){
	$updown.decrease(event);
	$updown.triggerEvents();
});*/