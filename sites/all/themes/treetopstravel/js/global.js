jQuery(window).load(function() {
  jQuery('.flexslider.flexslider-home').flexslider({
    animation: "slide",
    animationLoop: true,
    pauseOnHover: false,
    controlsContainer: ".container-nav",
    directionNav: false
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
  jQuery(".i18n-es .views-exposed-form .form-item-field-region-tid select option[value='All']").text("Todas las regiones");
  jQuery(".i18n-es .views-exposed-form .form-item-field-destino-target-id select option[value='All']").text("Todos los destinos");    
  jQuery(".i18n-en .views-exposed-form .form-item-field-region-tid select option[value='All']").text("All the regions");
  jQuery(".i18n-en .views-exposed-form .form-item-field-destino-target-id select option[value='All']").text("All the destinations");    

});
jQuery(document).ajaxSuccess(function() {
  jQuery(".i18n-es .views-exposed-form .form-item-field-region-tid select option[value='All']").text("Todas las regiones");
  jQuery(".i18n-es .views-exposed-form .form-item-field-destino-target-id select option[value='All']").text("Todos los destinos");    
  jQuery(".i18n-en .views-exposed-form .form-item-field-region-tid select option[value='All']").text("All the regions");
  jQuery(".i18n-en .views-exposed-form .form-item-field-destino-target-id select option[value='All']").text("All the destinations");    

});

// Controlled by buttons
var $controlledByButtons = $('#controlledByButtons');
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
});