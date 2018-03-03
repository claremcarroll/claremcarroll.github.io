<?php 

get_header(); 


if ( get_option( 'show_on_front' ) == 'page' ) {

	echo '</header>';

	echo '<div id="content" class="site-content">';
	
		echo '<div class="container">';

			echo '<div class="content-left-wrap col-md-12">';

				echo '<div id="primary" class="content-area">';

					echo '<main id="main" class="site-main" role="main">';

						while (have_posts()) : the_post();
							get_template_part('content', 'page');
						endwhile;
						
					echo '</main>';					
				
				echo '</div>';
				
			echo '</div>';	
			
		echo '</div>';		

	echo '</div>';
	
}
else {


	if(isset($_POST['submitted'])) :        


			/* name */


			if(trim($_POST['myname']) === ''):               


				$nameError = __('* Please enter your name.','zerif');               


				$hasError = true;        


			else:               


				$name = trim($_POST['myname']);        


			endif; 


			/* email */	


			if(trim($_POST['myemail']) === ''):               


				$emailError = __('* Please enter your email address.','zerif');               


				$hasError = true;        


			elseif (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['myemail']))) :               


				$emailError = __('* You entered an invalid email address.','zerif');               


				$hasError = true;        


			else:               


				$email = trim($_POST['myemail']);        


			endif;  


			/* subject */


			if(trim($_POST['mysubject']) === ''):               


				$subjectError = __('* Please enter a subject.','zerif');               


				$hasError = true;        


			else:               


				$subject = trim($_POST['mysubject']);        


			endif; 


			/* message */


			if(trim($_POST['mymessage']) === ''):               


				$messageError = __('* Please enter a message.','zerif');               


				$hasError = true;        


			else:                                     


				$message = stripslashes(trim($_POST['mymessage']));               


			endif; 		


			


			/* send the email */


			if(!isset($hasError)):               

				$zerif_contactus_email = get_theme_mod('zerif_contactus_email');
				
				if( empty($zerif_contactus_email) ):
				
					$emailTo = get_theme_mod('zerif_email');
				
				else:
					
					$emailTo = $zerif_contactus_email;
				
				endif;


				if(isset($emailTo) && $emailTo != ""):

					if( empty($subject) ):
						$subject = 'From '.$name;
					endif;


					$body = "Name: $name \n\nEmail: $email \n\n Subject: $subject \n\n Message: $message";               


					$headers = 'From: '.$name.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email; 				               


					wp_mail($emailTo, $subject, $body, $headers);               


					$emailSent = true;        


				else:


					$emailSent = false;


				endif;


			endif;	


		endif;	
		
	$zerif_bigtitle_show = get_theme_mod('zerif_bigtitle_show');
	
	if( isset($zerif_bigtitle_show) && $zerif_bigtitle_show != 1 ):

		include get_template_directory() . "/sections/big_title.php";
	endif;	


?>


</header> <!-- / END HOME SECTION  -->


<div id="content" class="site-content">



<?php

	$section1 = get_theme_mod('section1','our_focus');
	$section2 = get_theme_mod('section2','bottom_ribbon');
	$section3 = get_theme_mod('section3','portofolio');
	$section4 = get_theme_mod('section4','about_us');
	$section5 = get_theme_mod('section5','our_team');
	$section6 = get_theme_mod('section6','testimonials');
	$section7 = get_theme_mod('section7','right_ribbon');
	$section8 = get_theme_mod('section8','contact_us');
	$section9 = get_theme_mod('section9','map');
	$section10 = get_theme_mod('section10','packages');
	$section11 = get_theme_mod('section11','subscribe');
	
	$sections[0] = $section1;
	$sections[1] = $section2;
	$sections[2] = $section3;
	$sections[3] = $section4;
	$sections[4] = $section5;
	$sections[5] = $section6;
	$sections[6] = $section7;
	$sections[7] = $section8;
	$sections[8] = $section9;
	$sections[9] = $section10;
	$sections[10] = $section11;
	
	for ($i = 0; $i < 11; $i++):
	
	if( !empty($sections[$i]) ):
		
		switch ( $sections[$i] ) {
		
			case "our_focus":
				
				/* OUR FOCUS SECTION */
	
				$zerif_ourfocus_show = get_theme_mod('zerif_ourfocus_show');
				
				if( isset($zerif_ourfocus_show) && $zerif_ourfocus_show != 1 ):
					include get_template_directory() . "/sections/our_focus.php";
				endif;
				
				break;
				
			case "portofolio":
				
				/* PORTOFOLIO */
	
				$zerif_portofolio_show = get_theme_mod('zerif_portofolio_show');
				
				if( isset($zerif_portofolio_show) && $zerif_portofolio_show != 1 ):

					include get_template_directory() . "/sections/portofolio.php";
				endif;	
				
				break;
			case "about_us":
				
				/* ABOUT US */
	
				$zerif_aboutus_show = get_theme_mod('zerif_aboutus_show');
				
				if( isset($zerif_aboutus_show) && $zerif_aboutus_show != 1 ):

					include get_template_directory() . "/sections/about_us.php";
				endif;	
				
				break;
			case "our_team":
				
				/* OUR TEAM */

				$zerif_ourteam_show = get_theme_mod('zerif_ourteam_show');
				
				if( isset($zerif_ourteam_show) && $zerif_ourteam_show != 1 ):

					include get_template_directory() . "/sections/our_team.php";
				endif;	
				
				break;
			case "testimonials":
				
				/* TESTIMONIALS */

				$zerif_testimonials_show = get_theme_mod('zerif_testimonials_show');
				
				if( isset($zerif_testimonials_show) && $zerif_testimonials_show != 1 ):

					include get_template_directory() . "/sections/testimonials.php";
				endif;
				
				break;
			case "bottom_ribbon":
				
				/* RIBBON WITH BOTTOM BUTTON */

				include get_template_directory() . "/sections/ribbon_with_bottom_button.php";
				
				break;		
			case "right_ribbon":
				
				/* RIBBON WITH RIGHT SIDE BUTTON */

				include get_template_directory() . "/sections/ribbon_with_right_button.php";
				
				break;
			case "packages":
				
				/* PACKAGES */

				$zerif_packages_show = get_theme_mod('zerif_packages_show');

				if( !empty($zerif_packages_show) ):

					include get_template_directory() . "/sections/packages.php";
				endif;	
				
				break;
			case "map":
				
				/* GOOGLE MAP */

				$zerif_googlemap_show = get_theme_mod('zerif_googlemap_show');

				if( !empty($zerif_googlemap_show) ):

					include get_template_directory() . "/sections/google_map.php";
				endif;	
				
				break;
			case "subscribe":
				
				/* SUBSCRIBE */

				$zerif_subscribe_show = get_theme_mod('zerif_subscribe_show');

				if( !empty($zerif_subscribe_show) ):

					include get_template_directory() . "/sections/subscribe.php";
				endif;	
				
				break;		
			case "contact_us":
				/* CONTACT US */
				$zerif_contactus_show = get_theme_mod('zerif_contactus_show');
				
				if( isset($zerif_contactus_show) && $zerif_contactus_show != 1 ):
					?>
					<section class="contact-us" id="contact">
						<div class="container">
							<!-- SECTION HEADER -->
							<div class="section-header">
								<?php
									$zerif_contactus_title = get_theme_mod('zerif_contactus_title','Get in touch');
									if ( !empty($zerif_contactus_title) ):
										echo '<h2 class="white-text">'.$zerif_contactus_title.'</h2>';
									endif;
								
									$zerif_contactus_subtitle = get_theme_mod('zerif_contactus_subtitle');
									if( !empty($zerif_contactus_subtitle) ):
										echo '<h6 class="white-text">'.$zerif_contactus_subtitle.'</h6>';
									endif;
								?>
							</div>
							<!-- / END SECTION HEADER -->
							
							<!-- CONTACT FORM-->
							<div class="row">

								<?php 

									if(isset($emailSent) && $emailSent == true) :

										echo '<p class="error white-text">'.__('Thanks, your email was sent successfully!','zerif').'</p>';                            

									elseif(isset($_POST['submitted'])):                                    

										echo '<p class="error white-text">'.__('Sorry, an error occured.','zerif').'<p>';                            

									endif;

								

									if(isset($nameError) && $nameError != '') :																		 

										echo '<p class="error white-text">'.$nameError.'</p>';																 

									endif;	

									if(isset($emailError) && $emailError != '') :																		 

										echo '<p class="error white-text">'.$emailError.'</p>';																 

									endif;	

									if(isset($subjectError) && $subjectError != '') :																		 

										echo '<p class="error white-text">'.$subjectError.'</p>';																 

									endif;	

									if(isset($messageError) && $messageError != '') :																		 

										echo '<p class="error white-text">'.$messageError.'</p>';																 

									endif;	

								?>

								<form role="form" method="POST" action="" onSubmit="this.scrollPosition.value=document.body.scrollTop" class="contact-form">

									<input type="hidden" name="scrollPosition">

									<input type="hidden" name="submitted" id="submitted" value="true" />

									<div class="col-lg-4 col-sm-4" data-scrollreveal="enter left after 0s over 1s">

										<input type="text" name="myname" placeholder="Your Name" class="form-control input-box" value="<?php if(isset($_POST['myname'])) echo $_POST['myname'];?>">

									</div>

									<div class="col-lg-4 col-sm-4" data-scrollreveal="enter left after 0s over 1s">

										<input type="email" name="myemail" placeholder="Your Email" class="form-control input-box" value="<?php if(isset($_POST['myemail'])) echo $_POST['myemail'];?>">

									</div>

									<div class="col-lg-4 col-sm-4" data-scrollreveal="enter left after 0s over 1s">

										<input type="text" name="mysubject" placeholder="Subject" class="form-control input-box" value="<?php if(isset($_POST['mysubject'])) echo $_POST['mysubject'];?>">

									</div>

									<div class="col-md-12" data-scrollreveal="enter right after 0s over 1s">

										<textarea name="mymessage" class="form-control textarea-box" placeholder="Your Message"><?php if(isset($_POST['mymessage'])) { echo stripslashes($_POST['mymessage']); } ?></textarea>

									</div>

									<?php
										$zerif_contactus_button_label = get_theme_mod('zerif_contactus_button_label','Send Message');
										if( !empty($zerif_contactus_button_label) ):
											echo '<button class="btn btn-primary custom-button red-btn" type="submit" data-scrollreveal="enter left after 0s over 1s">'.$zerif_contactus_button_label.'</button>';
										endif;
									?>
									

								</form>

							</div>

							<!-- / END CONTACT FORM-->

						</div> <!-- / END CONTAINER -->

					</section> <!-- / END CONTACT US SECTION-->
					<?php
				endif;
				break;		
		}
	endif;
	endfor;
}

get_footer(); ?>