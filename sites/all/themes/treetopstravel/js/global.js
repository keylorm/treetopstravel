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