<section class="focus" id="focus">



<div class="container">





	<!-- SECTION HEADER -->



	<div class="section-header">



		



		<!-- SECTION TITLE -->

		<?php
		$zerif_ourfocus_title = get_theme_mod('zerif_ourfocus_title','Our focus');
		
		if( !empty($zerif_ourfocus_title) ):
			echo '<h2 class="dark-text">'.$zerif_ourfocus_title.'</h2>';
		endif;	
		

		$zerif_ourfocus_subtitle = get_theme_mod('zerif_ourfocus_subtitle','Add a subtitle in Customizer, "Our focus section"');



		if( !empty($zerif_ourfocus_subtitle) ):



			echo '<h6>'.$zerif_ourfocus_subtitle.'</h6>';

			

		endif;	

		?>



	</div>





	<div class="row">



			<?php

			if ( is_active_sidebar( 'sidebar-ourfocus' ) ) :	

				dynamic_sidebar( 'sidebar-ourfocus' ); 

			else:

				the_widget( 'zerif_ourfocus','title=Box 1&text=text&link=#&image_uri='.get_template_directory_uri().'/images/focus.png' );

				the_widget( 'zerif_ourfocus','title=Box 2&text=text&link=#&image_uri='.get_template_directory_uri().'/images/focus.png' );

				the_widget( 'zerif_ourfocus','title=Box 3&text=text&link=#&image_uri='.get_template_directory_uri().'/images/focus.png' );

				the_widget( 'zerif_ourfocus','title=Box 4&text=text&link=#&image_uri='.get_template_directory_uri().'/images/focus.png' );

			endif;

			?>



	</div>



</div> <!-- / END CONTAINER -->



</section>  <!-- / END FOCUS SECTION -->