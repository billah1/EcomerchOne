
<script src="{{asset('/')}}frontend/js/jquery.min.js"></script>
<script src="{{asset('/')}}frontend/js/bootstrap.min.js"></script>

<script src="{{asset('/')}}frontend/vendor/flexslider/jquery.flexslider-min.js"></script>

<script src="{{asset('/')}}frontend/vendor/owlcarousel/owl.carousel.js"></script>
<script>
    jQuery.noConflict();
    jQuery( document ).ready(function( $ ) {

        var owl = $("#owl-classes");

        owl.owlCarousel({

            items : 3, //10 items above 1000px browser width
            itemsDesktop : [1000,3], //5 items between 1000px and 901px
            itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
            itemsTablet: [640,2],
            itemsMobile : [480,1], // itemsMobile disabled - inherit from itemsTablet option
            navigation: false,
            pagination: true,
            autoPlay:true
        });

        var owl = $("#owl-teachers");

        owl.owlCarousel({

            items : 2, //10 items above 1000px browser width
            itemsDesktop : [1000,2], //5 items between 1000px and 901px
            itemsDesktopSmall : [900,2], // 3 items betweem 900px and 601px
            itemsTablet: [600,1],
            itemsMobile : [480,1], // itemsMobile disabled - inherit from itemsTablet option
            navigation: false,
            pagination: true,
            autoPlay:true
        });

    });
</script>

<script src="{{asset('/')}}frontend/js/theme.js"></script>

<script type="text/javascript" src="{{asset('/')}}frontend/vendor/fancybox/js/jquery.fancybox.js"></script>
<script type="text/javascript" src="{{asset('/')}}frontend/vendor/fancybox/js/custom.fancybox.js"></script>
<script>
    jQuery.noConflict();
    jQuery('.fancybox').fancybox();
</script>

<script src="{{asset('/')}}frontend/js/wow.min.js"></script>
<script> new WOW().init(); </script>
