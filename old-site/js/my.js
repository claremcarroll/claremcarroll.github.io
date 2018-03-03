

window.onload = function() {

  (function () {
        $.ajax({
            url:"js/projects.json",
            type:"GET",
            dataType:"json",
            beforeSend: function(){ },
                success:function(jsonData){
                  var data = JSON.stringify(jsonData);

                  var projectData = JSON.parse(data),
                    getTemplate = $('#portfolio-template').html(),
                    template    = Handlebars.compile(getTemplate),
                    result      = template(projectData);

                  var projectData2 = JSON.parse(data),
                    getTemplate2 = $('#popup-template').html(),
                    template2    = Handlebars.compile(getTemplate2),
                    result2      = template2(projectData);


                  $('#portfolio-grid').html(result);
                  $('#popup-grid').html(result2);
                  everythingElse();
                }
            })
      })();
 

    function everythingElse() {
        
        
      // Stick menu
      $(".menu").sticky({topSpacing:0});


      //Menu mobile click
      $( ".icon" ).click(function() {
        $( " ul.menu-click" ).slideToggle( "slow", function() {
        // Animation complete.
        });
      });

      document.getElementById("box-line").style.opacity = "1";
      document.getElementById("arrow").style.opacity = "1";

      var hi = new Vivus('hi-there', {
          type: 'scenario-sync',
          duration: 100,
          start: 'autostart', 
          forceRender: false,
          dashGap: 0
      }, function () {
      });


      var canvas = oCanvas.create({
          canvas: '#canvas',
          background: '#9ad4d6',
          fps: 60
      });

      var cX = 100;
      var cY = 100;

      $("#home").mousemove(function(e){

        cX = e.clientX;
        cY = e.clientY;

      });


      function randomTen(){
        return Math.floor(Math.random() * 50);
      }

      function randomTwenty(){
        return Math.floor(Math.random() * 100);
      }

      function randomThirty(){
        return Math.floor(Math.random() * 150);
      }

      function randomBool(num){
        var rand = (Math.floor(Math.random() * 2) == 0);

        if(rand == true) {
          return num * -1;
        }
        else
          return num;
      }

      function randomLocation1(num) {
        return num + randomBool(randomTen());
      }

      function randomLocation2(num) {
        return num + randomBool(randomTwenty());
      }

      function randomLocation3(num) {
        return num + randomBool(randomThirty());
      }


    setInterval(function () {
          var triangle1 = canvas.display.polygon({
              x: randomLocation2(cX),
              y: randomLocation2(cY),
              sides: 3,
              radius: Math.floor((Math.random() * 20) + 1),
              rotation: Math.floor((Math.random() * 360) + 1),
              fill: "#efe15f"
          });

          var triangle2 = canvas.display.polygon({
              x: randomLocation1(cX),
              y: randomLocation1(cY),
              sides: 3,
              radius: Math.floor((Math.random() * 40) + 1),
              rotation: Math.floor((Math.random() * 360) + 1),
              fill: "#ffffff"
          });

          var triangle3 = canvas.display.polygon({
              x: randomLocation2(cX),
              y: randomLocation2(cY),
              sides: 3,
              radius: Math.floor((Math.random() * 10) + 1),
              rotation: Math.floor((Math.random() * 360) + 1),
              fill: "#0f1935"
          });

          canvas.addChild(triangle1);
          canvas.addChild(triangle2);
          canvas.addChild(triangle3);

          triangle1.animate({
              radius: 10,
              opacity: 0
          }, {
              duration: '800',
              easing: 'linear',
          });

          triangle2.animate({
              radius: 20,
              opacity: 0
          }, {
              duration: '800',
              easing: 'linear',
          });

          triangle3.animate({
              radius: 10,
              opacity: 0
          }, {
              duration: '800',
              easing: 'linear',
          });

          setTimeout(function () {
              canvas.removeChild(triangle1)
              canvas.removeChild(triangle2)
              canvas.removeChild(triangle3)
          }, 3000);

      }, 400);


      $(window).resize(function () {
          canvas.width = $(window).innerWidth();
          canvas.height = $(window).innerHeight();
      });

      $(window).resize();


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
        $grid.isotope({ sortBy : 'name' });
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
              type: 'inline',
              mainClass: 'mfp-with-zoom',
              items: items,
              zoom: {
                enabled: true,
                duration: 100 
              },
              gallery: {
                  enabled: true
              }
          }, itemNum);
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

         $('a.menu-item').bind('click', function(e) {
        e.preventDefault();
             
        var target = $(this).attr("href");
            

        $('html, body').stop().animate({ scrollTop: $(target).offset().top-140 }, 1000, function() {

        });
            
        return false;
         });

      $(window).scroll(function(){
         var fromTop = $(this).scrollTop()+topMenuHeight;
         var cur = scrollItems.map(function(){
           if ($(this).offset().top < fromTop)
             return this;
         });

         cur = cur[cur.length-1];
         var id = cur && cur.length ? cur[0].id : "";
         
         if (lastId !== id) {
             lastId = id;
             menuItems
               .parent().removeClass("active")
               .end().filter("[href=\"#"+id+"\"]").parent().addClass("active");
         }                   
      });  
    }



    

}
