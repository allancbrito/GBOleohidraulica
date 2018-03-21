<?php


			echo '<section class="testimonial" id="onde_estamos">';


				echo '<div class="container">';


					echo '<div class="section-header">';


						$zerif_onde_estamos_title = get_theme_mod('zerif_onde_estamos_title',__('Onde estamos','zerif-lite'));

						if( !empty($zerif_onde_estamos_title) ):

							echo '<h2 class="white-text dark-border-bottom">'.__($zerif_onde_estamos_title,'zerif-lite').'</h2>';

						endif;


						$zerif_onde_estamos_subtitle = get_theme_mod('zerif_onde_estamos_subtitle');


						if( !empty($zerif_onde_estamos_subtitle) ):


							echo '<h6 class="white-text">'.__($zerif_onde_estamos_subtitle,'zerif-lite').'</h6>';


						endif;


					echo '</div>';


					echo '<div class="row" data-scrollreveal="enter right after 0s over 1s">';


						echo '<div class="col-md-12">';


							echo '<div id="client-feedbacks" class="owl-carousel owl-theme">';

									if(is_active_sidebar( 'sidebar-onde_estamos' )):


										dynamic_sidebar( 'sidebar-onde_estamos' );
									else:

										the_widget( 'zerif_testimonial_widget','title=Dana Lorem&text=Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur nec sem vel sapien venenatis mattis non vitae augue. Nullam congue commodo lorem vitae facilisis. Suspendisse malesuada id turpis interdum dictum.&image_uri='.get_stylesheet_directory_uri().'/images/testimonial1.jpg' );
										the_widget( 'zerif_testimonial_widget','title=Linda Guthrie&text=Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur nec sem vel sapien venenatis mattis non vitae augue. Nullam congue commodo lorem vitae facilisis. Suspendisse malesuada id turpis interdum dictum.&image_uri='.get_stylesheet_directory_uri().'/images/testimonial2.jpg' );
										the_widget( 'zerif_testimonial_widget','title=Cynthia Henry&text=Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur nec sem vel sapien venenatis mattis non vitae augue. Nullam congue commodo lorem vitae facilisis. Suspendisse malesuada id turpis interdum dictum.&image_uri='.get_stylesheet_directory_uri().'/images/testimonial3.jpg' );

									endif;



							echo '</div>';


						echo '</div>';


					echo '</div>';


				echo '</div>';


			echo '</section>';


?>
