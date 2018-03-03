<?php


			echo '<section class="testimonial" id="testimonials">';


				echo '<div class="container">';


					echo '<div class="section-header">';

						$zerif_testimonials_title = get_theme_mod('zerif_testimonials_title','Testimonials');
						
						if( !empty($zerif_testimonials_title) ):
					
							echo '<h2 class="white-text">'.$zerif_testimonials_title.'</h2>';
							
						endif;	


						$zerif_testimonials_subtitle = get_theme_mod('zerif_testimonials_subtitle');


						if( !empty($zerif_testimonials_subtitle) ):


							echo '<h6 class="white-text">'.$zerif_testimonials_subtitle.'</h6>';


						endif;


					echo '</div>';


					echo '<div class="row" data-scrollreveal="enter right after 0s over 1s">';


						echo '<div class="col-md-12">';


							echo '<div id="client-feedbacks" class="owl-carousel owl-theme">';

									if(is_active_sidebar( 'sidebar-testimonials' )):

									
										dynamic_sidebar( 'sidebar-testimonials' );
									else:
									
										the_widget( 'zerif_testimonial_widget','title=John Dow&text=Add a testimonial widget in the "Widgets: Testimonials section" in Customizer' );
										the_widget( 'zerif_testimonial_widget','title=John Dow&text=Add a testimonial widget in the "Widgets: Testimonials section" in Customizer' );
										the_widget( 'zerif_testimonial_widget','title=John Dow&text=Add a testimonial widget in the "Widgets: Testimonials section" in Customizer' );
									
									endif;

								

							echo '</div>';


						echo '</div>';


					echo '</div>';


				echo '</div>';


			echo '</section>';


?>