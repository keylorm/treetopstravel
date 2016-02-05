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


  /* Mapa Destinos*/


  /*Clima Destinos */
    var attr_idioma ="";
    if(jQuery("body").hasClass("i18n-es")){
        attr_idioma = "&lang=sp";
    }

    jQuery.getJSON("http://api.openweathermap.org/data/2.5/group?id=3623716,3623076,3623977,3623656,3622193,3622247,3622561,3621889&units=metric&appid=0704de6c28bad65a7e1dd67f03bb7820"+attr_idioma, 
    function(data){
        jQuery.each( data.list, function( key, val ) {
          
          switch(val.id){
            case 3623716:
              jQuery(".clima-temp-llanuras-norte").text(Math.round(val.main.temp)+"°");
              jQuery(".clima-description-llanuras-norte").text(val.weather[0].description);
              jQuery(".clima-logo-llanuras-norte").css("background-image", "url(/sites/all/themes/treetopstravel/images/"+val.weather[0].icon+".png)");
              break;
            case 3623076:
              jQuery(".clima-temp-pacifico-norte").text(Math.round(val.main.temp)+"°");
              jQuery(".clima-description-pacifico-norte").text(val.weather[0].description);
              jQuery(".clima-logo-pacifico-norte").css("background-image", "url(/sites/all/themes/treetopstravel/images/"+val.weather[0].icon+".png)");
              break;
            case 3623977:
              jQuery(".clima-temp-valle-central").text(Math.round(val.main.temp)+"°");
              jQuery(".clima-description-valle-central").text(val.weather[0].description);
              jQuery(".clima-logo-valle-central").css("background-image", "url(/sites/all/themes/treetopstravel/images/"+val.weather[0].icon+".png)");
              break;
            case 3623656:
              jQuery(".clima-temp-pacifico-sur").text(Math.round(val.main.temp)+"°");
              jQuery(".clima-description-pacifico-sur").text(val.weather[0].description);
              jQuery(".clima-logo-pacifico-sur").css("background-image", "url(/sites/all/themes/treetopstravel/images/"+val.weather[0].icon+".png)");
              break;
            case 3622193:
              jQuery(".clima-temp-pacifico-central").text(Math.round(val.main.temp)+"°");
              jQuery(".clima-description-pacifico-central").text(val.weather[0].description);
              jQuery(".clima-logo-pacifico-central").css("background-image", "url(/sites/all/themes/treetopstravel/images/"+val.weather[0].icon+".png)");
              break;
            case 3622247:
              jQuery(".clima-temp-caribe").text(Math.round(val.main.temp)+"°");
              jQuery(".clima-description-caribe").text(val.weather[0].description);
              jQuery(".clima-logo-caribe").css("background-image", "url(/sites/all/themes/treetopstravel/images/"+val.weather[0].icon+".png)");
              break;
            case 3622561:
              jQuery(".clima-temp-peninsula-nicoya").text(Math.round(val.main.temp)+"°");
              jQuery(".clima-description-peninsula-nicoya").text(val.weather[0].description);
              jQuery(".clima-logo-peninsula-nicoya").css("background-image", "url(/sites/all/themes/treetopstravel/images/"+val.weather[0].icon+".png)");
              break;
            case 3621889:
              jQuery(".clima-temp-valle-central-alto").text(Math.round(val.main.temp)+"°");
              jQuery(".clima-description-valle-central-alto").text(val.weather[0].description);
              jQuery(".clima-logo-valle-central-alto").css("background-image", "url(/sites/all/themes/treetopstravel/images/"+val.weather[0].icon+".png)");
              break;

          }
          
        });
    });


  jQuery('#llanuras-norte').hover(function(){
    jQuery('.llanura-norte-hover').css('opacity', '1');
    jQuery('.clima-title, .clima-temp-detalle, .clima-logo-detalle, .clima-description-detalle').css("display", "none");
    jQuery('.clima-title-llanuras-norte, .clima-logo-llanuras-norte,.clima-temp-llanuras-norte, .clima-description-llanuras-norte').css("display", "block");


  },function(){
    jQuery('.llanura-norte-hover').css('opacity', '0');
  } );

  jQuery('#caribe').hover(function(){
    jQuery('.caribe-hover').css('opacity', '1');
    jQuery('.clima-title, .clima-temp-detalle, .clima-logo-detalle, .clima-description-detalle').css("display", "none");
    jQuery('.clima-title-caribe, .clima-logo-caribe, .clima-temp-caribe, .clima-description-caribe').css("display", "block");
  },function(){
    jQuery('.caribe-hover').css('opacity', '0');
  } );

  jQuery('#valle-central').hover(function(){
    jQuery('.valle-central-hover').css('opacity', '1');
    jQuery('.clima-title, .clima-temp-detalle, .clima-logo-detalle, .clima-description-detalle').css("display", "none");
    jQuery('.clima-title-valle-central, .clima-logo-valle-central,.clima-temp-valle-central, .clima-description-valle-central').css("display", "block");
  },function(){
    jQuery('.valle-central-hover').css('opacity', '0');
  } );

  jQuery('#valle-central-alto').hover(function(){
    jQuery('.valle-central-alto-hover').css('opacity', '1');
    jQuery('.clima-title, .clima-temp-detalle, .clima-logo-detalle, .clima-description-detalle').css("display", "none");
    jQuery('.clima-title-valle-central-alto, .clima-logo-valle-central-alto,.clima-temp-valle-central-alto, .clima-description-valle-central-alto').css("display", "block");
  },function(){
    jQuery('.valle-central-alto-hover').css('opacity', '0');
  } );

  jQuery('#pacifico-sur').hover(function(){
    jQuery('.pacifico-sur-hover').css('opacity', '1');
    jQuery('.clima-title, .clima-temp-detalle, .clima-logo-detalle, .clima-description-detalle').css("display", "none");
    jQuery('.clima-title-pacifico-sur, .clima-logo-pacifico-sur,.clima-temp-pacifico-sur, .clima-description-pacifico-sur').css("display", "block");
  },function(){
    jQuery('.pacifico-sur-hover').css('opacity', '0');
  } );

  jQuery('#pacifico-central').hover(function(){
    jQuery('.pacifico-central-hover').css('opacity', '1');
    jQuery('.clima-title, .clima-temp-detalle, .clima-logo-detalle, .clima-description-detalle').css("display", "none");
    jQuery('.clima-title-pacifico-central, .clima-logo-pacifico-central,.clima-temp-pacifico-central, .clima-description-pacifico-central').css("display", "block");
  },function(){
    jQuery('.pacifico-central-hover').css('opacity', '0');
  } );

  jQuery('#peninsula-nicoya').hover(function(){
    jQuery('.peninsula-nicoya-hover').css('opacity', '1');
    jQuery('.clima-title, .clima-temp-detalle, .clima-logo-detalle, .clima-description-detalle').css("display", "none");
    jQuery('.clima-title-peninsula-nicoya, .clima-logo-peninsula-nicoya,.clima-temp-peninsula-nicoya, .clima-description-peninsula-nicoya').css("display", "block");
  },function(){
    jQuery('.peninsula-nicoya-hover').css('opacity', '0');
  } );

  jQuery('#pacifico-norte').hover(function(){
    jQuery('.pacifico-norte-hover').css('opacity', '1');
    jQuery('.clima-title, .clima-temp-detalle, .clima-logo-detalle, .clima-description-detalle').css("display", "none");
    jQuery('.clima-title-pacifico-norte, .clima-logo-pacifico-norte,.clima-temp-pacifico-norte, .clima-description-pacifico-norte').css("display", "block");
  },function(){
    jQuery('.pacifico-norte-hover').css('opacity', '0');
  } );

  jQuery(".clima-title").click(function(){
    jQuery(".view-id-regiones .view-content").accordion({active:(jQuery(this).data("tab-id"))});
    var target = jQuery(this.hash);
    target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
    if (target.length) {
      jQuery('html, body').animate({
        scrollTop: target.offset().top
      }, 1000);
      return false;
    }
  });


  /**/
  var region = getParameterByName('region');

  if(region!=""){
    switch (region){
      case "caribe":
        jQuery('.caribe-hover').css('opacity', '1');
        jQuery('.clima-title, .clima-temp-detalle, .clima-logo-detalle, .clima-description-detalle').css("display", "none");
        jQuery('.clima-title-caribe, .clima-logo-caribe, .clima-temp-caribe, .clima-description-caribe').css("display", "block");
        jQuery(".view-id-regiones .view-content").accordion({active:7});
        break;
      case "llanuras":
        jQuery('.llanura-norte-hover').css('opacity', '1');
        jQuery('.clima-title, .clima-temp-detalle, .clima-logo-detalle, .clima-description-detalle').css("display", "none");
        jQuery('.clima-title-llanuras-norte, .clima-logo-llanuras-norte,.clima-temp-llanuras-norte, .clima-description-llanuras-norte').css("display", "block");

        jQuery(".view-id-regiones .view-content").accordion({active:6});
        break;
      case "valle_central":
        jQuery('.valle-central-hover').css('opacity', '1');
        jQuery('.clima-title, .clima-temp-detalle, .clima-logo-detalle, .clima-description-detalle').css("display", "none");
        jQuery('.clima-title-valle-central, .clima-logo-valle-central,.clima-temp-valle-central, .clima-description-valle-central').css("display", "block");

        jQuery(".view-id-regiones .view-content").accordion({active:1});
        break;
      case "valle_central_alto":
        jQuery('.valle-central-alto-hover').css('opacity', '1');
        jQuery('.clima-title, .clima-temp-detalle, .clima-logo-detalle, .clima-description-detalle').css("display", "none");
        jQuery('.clima-title-valle-central-alto, .clima-logo-valle-central-alto,.clima-temp-valle-central-alto, .clima-description-valle-central-alto').css("display", "block");
        jQuery(".view-id-regiones .view-content").accordion({active:2});
        break;
      case "pacifico_sur":
        jQuery('.pacifico-sur-hover').css('opacity', '1');
        jQuery('.clima-title, .clima-temp-detalle, .clima-logo-detalle, .clima-description-detalle').css("display", "none");
        jQuery('.clima-title-pacifico-sur, .clima-logo-pacifico-sur,.clima-temp-pacifico-sur, .clima-description-pacifico-sur').css("display", "block");

        jQuery(".view-id-regiones .view-content").accordion({active:3});
        break;
      case "peninsula_nicoya":
        jQuery('.peninsula-nicoya-hover').css('opacity', '1');
        jQuery('.clima-title, .clima-temp-detalle, .clima-logo-detalle, .clima-description-detalle').css("display", "none");
        jQuery('.clima-title-peninsula-nicoya, .clima-logo-peninsula-nicoya,.clima-temp-peninsula-nicoya, .clima-description-peninsula-nicoya').css("display", "block");
        jQuery(".view-id-regiones .view-content").accordion({active:5});
        break;
      case "pacifico_central":
        jQuery('.pacifico-central-hover').css('opacity', '1');
        jQuery('.clima-title, .clima-temp-detalle, .clima-logo-detalle, .clima-description-detalle').css("display", "none");
        jQuery('.clima-title-pacifico-central, .clima-logo-pacifico-central,.clima-temp-pacifico-central, .clima-description-pacifico-central').css("display", "block");
        jQuery(".view-id-regiones .view-content").accordion({active:4});
        break;
      case "pacifico_norte":
        jQuery('.pacifico-norte-hover').css('opacity', '1');
        jQuery('.clima-title, .clima-temp-detalle, .clima-logo-detalle, .clima-description-detalle').css("display", "none");
        jQuery('.clima-title-pacifico-norte, .clima-logo-pacifico-norte,.clima-temp-pacifico-norte, .clima-description-pacifico-norte').css("display", "block");
        jQuery(".view-id-regiones .view-content").accordion({active:0});
        break;
    }
  }

  console.log(region);
  



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

function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
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