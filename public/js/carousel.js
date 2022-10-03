$(document).ready(function () {
    var itemsMainDiv = ".rescarousel";
    var itemsDiv = ".rescarousel-inner";
    var itemWidth = "";
    $(".leftlst, .rightlst").click(function () {
        // saber que boton ocultar al llegar al final
        var condition = $(this).hasClass("leftlst");
        if (condition) click(0, this);
        else click(1, this);
    });
    rescarouselSize(); // invoca a la funcion antes de definirla
    $(window).resize(function () {
        rescarouselSize();
    });
    function rescarouselSize() {
        var incno = 0;
        var dataItems = "data-items";
        var itemClass = ".item";
        var id = 0;
        var btnParentSb = "";
        var itemsSplit = "";
        var sampwidth = $(itemsMainDiv).width(); // conocer el width de estos divs // el itemsMainDiv es .carousel
        var bodyWidth = $("body").width();
        $(itemsDiv).each(function () {
            // itemsDiv es el rescarousel-inner // each es un for
            id = id + 1;
            var itemNumbers = $(this).find(itemClass).length; // nos da el numero de items
            btnParentSb = $(this).parent().attr(dataItems); //extrae el valor de data-Items
            itemsSplit = btnParentSb.split(",");
            $(this)
                .parent()
                .attr("id", "ResSlid" + id);
            if (bodyWidth >= 1200) {
                incno = itemsSplit[2];
                itemWidth = sampwidth / incno;
            } else {
                incno = itemsSplit[0];
                itemWidth = sampwidth / incno;
            }
            $(this).css({
                transform: "translateX(0px)",
                width: itemWidth * itemNumbers,
            });
            $(this)
                .find(itemClass)
                .each(function () {
                    $(this).outerWidth(itemWidth); // outerWidth es el width completo con todo
                });

            $(".leftlst").addClass("outt");
            $(".rightlst").removeClass("outt");
        });
    }
    function rescarousel(e, el, s) {
        var leftBtn = ".leftlst";
        var rightBtn = ".rightlst";
        var translateXval = "";
        var divStyle = $(el + " " + itemsDiv).css("transform");
        var values = divStyle.match(/-?[\d\.]+/g);
        var xds = Math.abs(values[4]);
        if (e == 0) {
            translateXval = parseInt(xds) - parseInt(itemWidth * s);
            $(el + " " + rightBtn).removeClass("outt");

            if (translateXval <= itemWidth / 2) {
                translateXval = 0;
                $(el + " " + leftBtn).addClass("outt");
            }
        } else if (e == 1) {
            var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
            translateXval = parseInt(xds) + parseInt(itemWidth * s);
            $(el + " " + leftBtn).removeClass("outt");

            if (translateXval >= itemsCondition - itemWidth / 2) {
                translateXval = itemsCondition;
                $(el + " " + rightBtn).addClass("outt");
            }
        }
        $(el + " " + itemsDiv).css(
            "transform",
            "translateX(" + -translateXval + "px)"
        );
    }
    function click(ell, ee) {
        var Parent = "#" + $(ee).parent().attr("id");
        var slide = $(Parent).attr("data-slide");
        rescarousel(ell, Parent, slide);
    }
});
