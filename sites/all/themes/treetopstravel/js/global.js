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


  var label_menores_12 = jQuery(".webform-component--datos-itinerario--datos-del-itinerario--fila-4--menores-de-12-anos label");
  jQuery(".webform-component--datos-itinerario--datos-del-itinerario--fila-4--menores-de-12-anos select").after(label_menores_12);

});

jQuery(document).ready(function() {
  jQuery(".i18n-es .view-display-id-block .views-exposed-form .form-item-field-region-tid select option[value='All']").text("Todas las regiones");
  jQuery(".i18n-es .view-display-id-block .views-exposed-form .form-item-field-destino-target-id select option[value='All']").text("Todos los destinos");    
  jQuery(".i18n-en .view-display-id-block_1 .views-exposed-form .form-item-field-region-tid select option[value='All']").text("All the regions");
  jQuery(".i18n-en .view-display-id-block_1 .views-exposed-form .form-item-field-destino-target-id select option[value='All']").text("All the destinations");    

});
jQuery(document).ajaxSuccess(function() {
  jQuery(".i18n-es .view-display-id-block .views-exposed-form .form-item-field-region-tid select option[value='All']").text("Todas las regiones");
  jQuery(".i18n-es .view-display-id-block .views-exposed-form .form-item-field-destino-target-id select option[value='All']").text("Todos los destinos");    
  jQuery(".i18n-en .view-display-id-block_1 .views-exposed-form .form-item-field-region-tid select option[value='All']").text("All the regions");
  jQuery(".i18n-en .view-display-id-block_1 .views-exposed-form .form-item-field-destino-target-id select option[value='All']").text("All the destinations");    

});

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