jQuery(document).ready(function($){

    (function() {
      var behanceProjectAPI = 'js/projects.json';

      function setPortfolioTemplate() {
        var projectData = JSON.parse(sessionStorage.getItem('behanceProject')),
          getTemplate = $('#portfolio-template').html(),
          template    = Handlebars.compile(getTemplate),
          result      = template(projectData);

          getTemplate2 = $('#popup-template').html(),
          template2    = Handlebars.compile(getTemplate2),
          result2      = template2(projectData);


        $('#portfolio-grid').html(result);
        $('#popup-grid').html(result2);
      };

      if(sessionStorage.getItem('behanceProject')) {
        setPortfolioTemplate();
      } else {
        $.getJSON(behanceProjectAPI, function(project) {
          var data = JSON.stringify(project);
          sessionStorage.setItem('behanceProject', data);
          setPortfolioTemplate();
        });

      };

    })();


  
});

$(window).load(function(){
  // niceScroll
  $("html").niceScroll();
    
    
  // Stick menu
  $(".menu").sticky({topSpacing:0});


  //Menu mobile click
  $( ".icon" ).click(function() {
    $( " ul.menu-click" ).slideToggle( "slow", function() {
    // Animation complete.
    });
  });

});
