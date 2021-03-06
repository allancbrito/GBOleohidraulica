<section class="focus" id="linhaprodutos">



<div class="container">





	<!-- SECTION HEADER -->



	<div class="section-header">







		<!-- SECTION TITLE -->


		<?php
		$zerif_linhaprodutos_title = get_theme_mod('zerif_linhaprodutos_title',__('LINHA PRODUTOS','zerif-lite'));

		if( !empty($zerif_linhaprodutos_title) ):
			echo '<h2 class="dark-text red-border-bottom">'.__($zerif_linhaprodutos_title,'zerif-lite').'</h2>';
		endif;
		?>




		<?php

		$zerif_linhaprodutos_subtitle = get_theme_mod('zerif_linhaprodutos_subtitle',__('What makes this single-page WordPress theme unique.','zerif-lite'));



		if( !empty($zerif_linhaprodutos_subtitle) ):



			echo '<h6>'.__($zerif_linhaprodutos_subtitle,'zerif-lite').'</h6>';



		endif;

		?>



	</div>





	<div class="row produtos">



			<?php

			if ( is_active_sidebar( 'sidebar-linhaprodutos' ) ) :

				dynamic_sidebar( 'sidebar-linhaprodutos' );

			else:

				the_widget( 'zerif_linhaprodutos','title=PARALLAX EFFECT&text=Create memorable pages with smooth parallax effects that everyone loves. Also, use our lightweight content slider offering you smooth and great-looking animations.&link=#&image_uri='.get_stylesheet_directory_uri()."/images/parallax.png", array('before_widget' => '', 'after_widget' => '') );

				the_widget( 'zerif_linhaprodutos','title=WOOCOMMERCE&text=Build a front page for your WooCommerce store in a matter of minutes. The neat and clean presentation will help your sales and make your store accessible to everyone.&link=#&image_uri='.get_stylesheet_directory_uri()."/images/woo.png", array('before_widget' => '', 'after_widget' => '') );

				the_widget( 'zerif_linhaprodutos','title=CUSTOM CONTENT BLOCKS&text=Showcase your team, products, clients, about info, testimonials, latest posts from the blog, contact form, additional calls to action. Everything translation ready.&link=#&image_uri='.get_stylesheet_directory_uri()."/images/ccc.png", array('before_widget' => '', 'after_widget' => '') );

				the_widget( 'zerif_linhaprodutos','title=GO PRO FOR MORE FEATURES&text=Get new content blocks: pricing table, Google Maps, and more. Change the sections order, display each block exactly where you need it, customize the blocks with whatever colors you wish.&link=#&image_uri='.get_stylesheet_directory_uri()."/images/ti-logo.png", array('before_widget' => '', 'after_widget' => '') );

			endif;

			?>



	</div>



</div> <!-- / END CONTAINER -->



</section>  <!-- / END FOCUS SECTION -->
