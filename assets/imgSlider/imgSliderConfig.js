$(document).ready(function () {
    var options = {
        $FillMode: 2,
        $AutoPlay: true,
        $AutoPlayInterval: 4000,
        $PauseOnHover: 1,
        $ArrowKeyNavigation: true,
        $SlideEasing: $JssorEasing$.$EaseOutQuint,
        $SlideDuration: 800,
        $MinDragOffsetToSlide: 20,
        $BulletNavigatorOptions: {
            $Class: $JssorBulletNavigator$,
            $ChanceToShow: 2,
            $AutoCenter: 1,
            $SpacingX: 8,
            $SpacingY: 8,
            $Scale: false
        },
        $ArrowNavigatorOptions: {
            $Class: $JssorArrowNavigator$,
            $ChanceToShow: 1,
            $AutoCenter: 2,
            $Steps: 1
        }
    };
    $("#slider1_container").css("display", "block");
    var jssor_slider1 = new $JssorSlider$("slider1_container", options);
    function ScaleSlider() {
        var bodyWidth = document.body.clientWidth;
        if (bodyWidth <= 750) {
            jssor_slider1.$ScaleWidth(bodyWidth);
            $("#slider1_container").css("margin-top", "0");
        } else if (bodyWidth) {
            jssor_slider1.$ScaleWidth(Math.min(bodyWidth - 70, 1160));
            $("#slider1_container").css("margin-top", "6px");
        } else {
            window.setTimeout(ScaleSlider, 30);
        }
    }
    ScaleSlider();
    $(window).bind("load", ScaleSlider);
    $(window).bind("resize", ScaleSlider);
    $(window).bind("orientationchange", ScaleSlider);
});