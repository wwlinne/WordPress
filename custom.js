jQuery(document).ready(function ($) {
    $('.image-slider').slick({
        dots: true, // Display navigation dots
        arrows: true, // Display navigation arrows
        infinite: true, // Loop the slider
        speed: 500, // Transition speed in milliseconds
        autoplay: true, // Autoplay the slider
        autoplaySpeed: 3000 // Autoplay interval in milliseconds
    });
});
