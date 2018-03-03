

	$('.image-modal').modaal({
        type: 'image'
    });

    $("img").on('click', function () {
    	console.log("hello");
        $(".image-modal").attr("href", $(this).prop('src'));
        $(".image-modal").attr("alt", $(this).prop('alt'));
        $(".image-modal").click();

    });

   //  $( function() {
	  //   $( "#accordion" ).accordion();
	  // } );
