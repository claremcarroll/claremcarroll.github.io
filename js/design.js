


window.onload = function() {

  (function () {

      
        $.ajax({
            url:"js/designprojects.json",
            type:"GET",
            dataType:"json",
            beforeSend: function(){ },
                success:function(jsonData){
                  var data = JSON.stringify(jsonData);

                  var projectData = JSON.parse(data),
                    getTemplate = $('#portfolio-template').html(),
                    template    = Handlebars.compile(getTemplate),
                    result      = template(projectData);

                    console.log(result);
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
      // console.log(widthParsed);
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



      var $grid = $('.grid').isotope({
        itemSelector: '.project',
        getSortData: {
          name: '[title]', // value of attribute
        }
      });


      $('button').on( 'click', function() {
            var filterValue = $(this).attr('data-filter');
            console.log($(this).attr('data-filter'));
            $grid.isotope({ filter: filterValue });

      });

      $('#sort-name').on( 'click', function() {
        $grid.isotope({ sortBy : 'name', sortAscending: true });
      });

      $('#sort-new').on( 'click', function() {
        $grid.isotope({ sortBy: 'original-order', sortAscending: true });
      });

      $('#sort-old').on( 'click', function() {
        $grid.isotope({ sortBy: 'original-order', sortAscending: false });
      });

      $('#sort-rand').on( 'click', function() {
        $grid.isotope('shuffle');
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

      $(".filter-button").click(function(){
        $( ".filter-button" ).removeClass( "selectedF" );
        $(this).addClass("selectedF");
        console.log("click");
      });

      $(".sort-button").click(function(){
        $( ".sort-button" ).removeClass( "selectedS" );
        $(this).addClass("selectedS");
      });

       

    }



    

}

      $(window).resize(function() {

            
            $("project-row3").height($( "#main-vid" ).height());

            var ratio = 0.8;
            var width = $('.project').first().css( "width" );
            var widthParsed = parseInt(width,10);
            console.log(widthParsed);
            var newheight = widthParsed*ratio;
            $('.grid li').css("height", newheight);
            $('.grid img').css("height", newheight);

            if($( window ).width() > 779) {
                $("#hamburger").removeClass('open');
                $( ".menu-drop" ).height(0);
            }


      });

