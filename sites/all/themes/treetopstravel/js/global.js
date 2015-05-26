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