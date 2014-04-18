<?php get_header(); ?>

	  <div id="main-content-rpt">
	  	<div id="main-content-bkg">
			<div id="main-content">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<h1 id="post-title"><?php the_title(); ?></h1>

					<?php the_content(); ?>

				<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>
	
			  </div><!-- /#main-content -->	  	
	  	</div><!-- /#main-content-bkg -->
	  </div><!-- /#main-content-rpt -->

<?php get_footer(); ?>