


window.onload = function() {


everythingElse();


    function everythingElse() {

      $('.image-modal').modaal({
        type: 'image'
      });

      $(".modalize").on('click', function () {
        console.log("hello");
          $(".image-modal").attr("href", $(this).prop('src'));
          $(".image-modal").attr("alt", $(this).prop('alt'));
          $(".image-modal").click();

      });


      $('#hamburger').click(function(){
        $(this).toggleClass('open');

        $(".menu-drop .content").toggleClass('hidden');
        if ( $(".menu-drop").height() != 220)
              $( ".menu-drop" ).animate({ height: 220 }, 0 );
        if ( $(".menu-drop").height() != 0)
              $( ".menu-drop" ).animate({ height: 0 }, 0 );
      });

      var flexbig = "1";
      var opacticylow = 0.7;
      var ogfilter = "filter: grayscale(1) contrast(90%) brightness(50%)";
      var hovfilter = "filter: grayscale(1) contrast(800%) brightness(30%)";

      var overfilter = "filter: invert(75%);"
      var resetfilter = "filter: saturate(-50%);"

      var zoom = "auto 105%";


      $( "#d1" ).mouseenter(function() {
        $( "#w1" ).css("opacity", 1);
        $( "#w1" ).css("flex", flexbig);
        $( "#d1" ).css("flex", flexbig);
        $( "#w1" ).css("filter", hovfilter);
        $( "#d1" ).css("filter", overfilter);
        $( "#w1" ).css("background-size",zoom);
      });
      $('#d1').click(function() {
         window.location = "uxdesign.html";
      });

      $( "#d2" ).mouseenter(function() {
          $( "#w2" ).css("opacity", 1);
          $( "#w2" ).css("flex", flexbig);
          $( "#d2" ).css("flex", flexbig);
          $( "#w2" ).css("filter", hovfilter);
          $( "#d2" ).css("filter", overfilter);
          $( "#w2" ).css("background-size",zoom);
      });

      $('#d2').click(function() {
         window.location = "development.html";
      });

      $( "#d3" ).mouseenter(function() {
          $( "#w3" ).css("opacity", 1);
          $( "#w3" ).css("flex", flexbig);
          $( "#d3" ).css("flex", flexbig);
          $( "#w3" ).css("filter", hovfilter);
          $( "#d3" ).css("filter", overfilter);
          $( "#w3" ).css("background-size",zoom);
      });

      $('#d3').click(function() {
         window.location = "visualdesign.html";
      });

      $( "#d1" ).mouseleave(function() {
          $( "#w1" ).css("opacity", opacticylow);
          $( "#w1" ).css("flex", "1");
          $( "#d1" ).css("flex", "1");
          $( "#w1" ).css("filter", ogfilter);
          $( "#d1" ).css("filter", resetfilter);
          $( "#w1" ).css("background-size","auto 100%");
      });

      $( "#d2" ).mouseleave(function() {
          $( "#w2" ).css("opacity", opacticylow);
          $( "#w2" ).css("flex", "1");
          $( "#d2" ).css("flex", "1");
          $( "#w2" ).css("filter", ogfilter);
          $( "#d2" ).css("filter", resetfilter);
          $( "#w2" ).css("background-size","auto 100%");
      });

      $( "#d3" ).mouseleave(function() {
          $( "#w3" ).css("opacity", opacticylow);
          $( "#w3" ).css("flex", "1");
          $( "#d3" ).css("flex", "1");
          $( "#w3" ).css("filter", ogfilter);
          $( "#d3" ).css("filter", resetfilter);
          $( "#w3" ).css("background-size","auto 100%");
      });


    }
    

}

      $(window).resize(function() {


            if($( window ).width() > 779) {
                $("#hamburger").removeClass('open');
                if( !$( ".menu-drop .content" ).hasClass( "hidden" )) {
                  $(".menu-drop .content").addClass('hidden');
                }
                
                $( ".menu-drop" ).height(0);
            }



      });

      $("#mainheader").click(function() {
          var video = $("#header-vid").get(0);
          video.play();
      });

      $('video').on('ended', function () {
        this.load();
        this.play();
      });

