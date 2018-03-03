


window.onload = function() {
   

  (function () {

        $.ajax({
            url:"js/news.json",
            type:"GET",
            dataType:"json",
            beforeSend: function(){ },
                success:function(jsonData){
                  var data = JSON.stringify(jsonData);

                  var projectData = JSON.parse(data),
                    getTemplate = $('#single-feed-template').html(),
                    template    = Handlebars.compile(getTemplate),
                    result      = template(projectData);

                    console.log(result);
                  $('#news').html(result);
                  everythingElse();
                }
        });

      

      })();


    function everythingElse() {

      lazyload();

      $(window).scroll(lazyload);



      $('#hamburger').click(function(){
        $(this).toggleClass('open');

        $(".menu-drop .content").toggleClass('hidden');
        if ( $(".menu-drop").height() != 220)
              $( ".menu-drop" ).animate({ height: 220 }, 0 );
        if ( $(".menu-drop").height() != 0)
              $( ".menu-drop" ).animate({ height: 0 }, 0 );
      });

      if ($('#back-to-top').length) {
          var scrollTrigger = 100, // px
              backToTop = function () {
                  var scrollTop = $(window).scrollTop();
                  if (scrollTop > scrollTrigger) {
                      $('#back-to-top').addClass('show');
                  } else {
                      $('#back-to-top').removeClass('show');
                  }
              };
          backToTop();
          $(window).on('scroll', function () {
              backToTop();
          });
          $('#back-to-top').on('click', function (e) {
              e.preventDefault();
              $('html,body').animate({
                  scrollTop: 0
              }, 700);
          });
      }


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


function lazyload(){
   var wt = $(window).scrollTop();    //* top of the window
   var wb = wt + $(window).height();  //* bottom of the window

   $(".description").each(function(){
      var ot = $(this).offset().top;  //* top of object (i.e. advertising div)
      var ob = ot + $(this).height(); //* bottom of object

      if(!$(this).attr("loaded") && wt<=ob && wb >= ot){
         $(this).addClass("loaded");
         $(this).css("opacity", 1);
      }
   });
}

