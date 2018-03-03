

window.onload = function() {


    document.getElementById("box-line").style.opacity = "1";
    document.getElementById("arrow").style.opacity = "1";


    var hi = new Vivus('hi-there', {
        type: 'scenario-sync',
        duration: 100,
        forceRender: false,
        dashGap: 20
    }, function () {});

    // function (obj) {obj.el.classList.add('finished')

    var hi2 = new Vivus('hi-there2', {
        type: 'scenario-sync',
        duration: 70,
        forceRender: false,
        dashGap: 20
    }, function () {});

    var canvas = oCanvas.create({
        canvas: '#canvas',
        background: '#6fc9c8',
        fps: 60
    });

        var windowXArray = [],
        windowYArray = [];

    for (var i = 0; i < $(window).innerWidth(); i++) {
        windowXArray.push(i);
    }

    for (var i = 0; i < $(window).innerHeight(); i++) {
        windowYArray.push(i);
    }

    function randomPlacement(array) {
        var placement = array[Math.floor(Math.random() * array.length)];
        return placement;
    }


  setInterval(function () {

        var triangle2 = canvas.display.polygon({
            x: randomPlacement(windowXArray),
            y: randomPlacement(windowYArray),
            sides: 3,
            radius: Math.floor((Math.random() * 40) + 1),
            rotation: Math.floor((Math.random() * 360) + 1),
            fill: "#ffffff"
        });


        canvas.addChild(triangle2);



        triangle2.animate({
            radius: 20,
            opacity: 0
        }, {
            duration: '800',
            easing: 'linear',
        });

        setTimeout(function () {
            canvas.removeChild(triangle2)
        }, 3000);

    }, 400);


    setInterval(function () {
        var triangle1 = canvas.display.polygon({
            x: randomPlacement(windowXArray),
            y: randomPlacement(windowYArray),
            sides: 3,
            radius: Math.floor((Math.random() * 20) + 1),
            rotation: Math.floor((Math.random() * 360) + 1),
            fill: "#efe15f"
        });


        canvas.addChild(triangle1);

        triangle1.animate({
            radius: 10,
            opacity: 0
        }, {
            duration: '800',
            easing: 'linear',
        });

        setTimeout(function () {
            canvas.removeChild(triangle1)
        }, 3000);


    }, 400);




    $(window).resize(function () {
        canvas.width = $(window).innerWidth();
        canvas.height = $(window).innerHeight();
    });

    $(window).resize();


};

jQuery(document).ready(function ($) {


    $(function () {

        var $container = $('.grid');

        $container.imagesLoaded(function () {
            $container.masonry({
                itemSelector: 'li'
            });
        });

    });


    

    $('.open-gallery-link').click(function () {

        $(".slide").fitVids();

        var itemNum = $(this).data("slideid");

        var items = [];
        $($(this).attr('href')).find('.slide').each(function () {
            items.push({
                src: $(this)
            });
        });

        $.magnificPopup.open({
            items: items,
            gallery: {
                enabled: true
            }
        }, itemNum);
    });


});
