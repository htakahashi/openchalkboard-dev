<?php get_header(); ?>

	  <div id="main-content-rpt">
	  	<div id="main-content-bkg">
			<div id="main-content">

				<h1>Blog</h1>

				<?php
				$args = array( 'posts_per_page' => 10, 'order'=> 'ASC', 'orderby' => 'title' );
				$postslist = get_posts( $args );
				foreach ( $postslist as $post ) :
				  setup_postdata( $post ); ?> 
				<h2><?php the_title(); ?> - <?php the_date(); ?></h2>

				<?php the_excerpt(); ?>
				<?php
				endforeach; 
				wp_reset_postdata();
				?>			
	
			  </div><!-- /#main-content -->	  	
	  	</div><!-- /#main-content-bkg -->
	  </div><!-- /#main-content-rpt -->

<?php get_footer(); ?>