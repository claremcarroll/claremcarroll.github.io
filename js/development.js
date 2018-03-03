


window.onload = function() {

  (function () {

      
        $.ajax({
            url:"js/development.json",
            type:"GET",
            dataType:"json",
            beforeSend: function(){ },
                success:function(jsonData){
                  var data = JSON.stringify(jsonData);

                  var projectData = JSON.parse(data),
                    getTemplate = $('#portfolio-template').html(),
                    template    = Handlebars.compile(getTemplate),
                    result      = template(projectData);

    
                  $('#portfolio-grid').html(result);
                  everythingElse();
                }
            });

      })();


    function everythingElse() {

      // var vph = $(window).height();
      // $('#main-header').css({‘height’: vph + ‘px’});

      $("project-row3").height($( "#main-vid" ).height());

      var ratio = 0.8;
      var width = $('.project').first().css( "width" );
      var widthParsed = parseInt(width,10);
      var newheight = widthParsed*ratio;
      $('.grid li').css("height", newheight);
      $('.grid img').css("height", newheight);

      $('#hamburger').click(function(){
        $(this).toggleClass('open');

        $(".menu-drop .content").toggleClass('hidden');
        if ( $(".menu-drop").height() != 190)
              $( ".menu-drop" ).animate({ height: 190 }, 0 );
        if ( $(".menu-drop").height() != 0)
              $( ".menu-drop" ).animate({ height: 0 }, 0 );
      });

        
      
      //Menu mobile click
      $( ".icon" ).click(function() {
        $( " ul.menu-click" ).slideToggle( "slow", function() {
        // Animation complete.
        });
      });

        // Menu Scroll to content and Active menu
        var lastId,
          topMenu = $("#menu"),
          topMenuHeight = topMenu.outerHeight()+145,
          menuItems = topMenu.find("a"),
          scrollItems = menuItems.map(function(){
            var item = $($(this).attr("href"));
            if (item.length) { return item; }
          });


       

    }
    

}

      $(window).resize(function() {

            
            $("project-row3").height($( "#main-vid" ).height());

            var ratio = 0.8;
            var width = $('.project').first().css( "width" );
            var widthParsed = parseInt(width,10);
            var newheight = widthParsed*ratio;
            $('.grid li').css("height", newheight);
            $('.grid img').css("height", newheight);

            if($( window ).width() > 779) {
                $("#hamburger").removeClass('open');
                $( ".menu-drop" ).height(0);
            }


      });

