<?php


		echo '<div class="container">';


		$zerif_bigtitle_title = get_theme_mod('zerif_bigtitle_title','To add a title here please go to Customizer, "Big title section"');


		if(isset($zerif_bigtitle_title) && $zerif_bigtitle_title != ""):


			echo '<h1 class="intro-text">'.$zerif_bigtitle_title.'</h6>';


		endif;


		


		$zerif_bigtitle_redbutton_label = get_theme_mod('zerif_bigtitle_redbutton_label','One button');


		$zerif_bigtitle_redbutton_url = get_theme_mod('zerif_bigtitle_redbutton_url','#');


		


		$zerif_bigtitle_greenbutton_label = get_theme_mod('zerif_bigtitle_greenbutton_label','Another button');


		$zerif_bigtitle_greenbutton_url = get_theme_mod('zerif_bigtitle_greenbutton_url','#');


		


		if( (isset($zerif_bigtitle_redbutton_label) && $zerif_bigtitle_redbutton_label != "" && isset($zerif_bigtitle_redbutton_url) && $zerif_bigtitle_redbutton_url != "") || 


		(isset($zerif_bigtitle_greenbutton_label) && $zerif_bigtitle_greenbutton_label != "" && isset($zerif_bigtitle_greenbutton_url) && $zerif_bigtitle_greenbutton_url != "")):


			echo '<div class="buttons">';


				if (isset($zerif_bigtitle_redbutton_label) && $zerif_bigtitle_redbutton_label != "" && isset($zerif_bigtitle_redbutton_url) && $zerif_bigtitle_redbutton_url != ""):


					echo '<a href="'.$zerif_bigtitle_redbutton_url.'" class="btn btn-primary custom-button red-btn">'.$zerif_bigtitle_redbutton_label.'</a>';


				endif;


				if (isset($zerif_bigtitle_greenbutton_label) && $zerif_bigtitle_greenbutton_label != "" && isset($zerif_bigtitle_greenbutton_url) && $zerif_bigtitle_greenbutton_url != ""):


					echo '<a href="'.$zerif_bigtitle_greenbutton_url.'" class="btn btn-primary custom-button green-btn">'.$zerif_bigtitle_greenbutton_label.'</a>';


				endif;


			echo '</div>';


		endif;


		


		echo '</div>';


		echo '<div class="clear"></div>';


?>