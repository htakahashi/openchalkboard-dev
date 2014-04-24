<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>OpenChalkboard</title>
	<link href="<?php bloginfo('stylesheet_url');?>" type="text/css" rel="stylesheet" />
	<link href="//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" type="text/css" rel="stylesheet" />
	
	<?php wp_head(); ?> 
</head>

<?php
if ( is_home() ) {
	// This is a homepage
	echo '<body id="home">';
} else {
	// This is not a homepage
	echo '<body class="subpage">';
}
?>

	<div id="wrapper">
		<div id="head-rpt">
			<div id="head-bkg">
				<div id="head-content">
					<a href="#" id="logo"></a>
					<p id="mantra">Teachers sparking <span>a brighter tomorrow.</span></p>

					<div id="nav">
						<ul>
						<?php if(is_front_page()):?>
							<li><a href="/" id="nav-home" class="active">home</a></li>
						<?php else: ?>
							<li><a href="/" id="nav-home">home</a></li>	
						<?php endif;?>
							
						<?php if(is_page('our-mission')):?>
							<li><a href="/our-mission/" id="nav-our-mission" class="active">our mission</a></li>
						<?php else: ?>
							<li><a href="/our-mission/" id="nav-our-mission">our mission</a></li>
						<?php endif;?>

						<?php if(is_page('why-student-curiosity-is-key')):?>
							<li><a href="/why-student-curiosity-is-key/" id="nav-why-student-curiosity-is-key" class="active">why student curiosity is key</a></li>
						<?php else: ?>
							<li><a href="/why-student-curiosity-is-key/" id="nav-why-student-curiosity-is-key">why student curiosity is key</a></li>
						<?php endif;?>

						<?php if(is_page('research-behind-spark')):?>
							<li><a href="/research-behind-spark/" id="nav-research-behind-spark" class="active">research behind SPARK</a></li>
						<?php else: ?>
							<li><a href="/research-behind-spark/" id="nav-research-behind-spark">research behind SPARK</a></li>
						<?php endif;?>

						<?php if(is_page('questions')):?>
							<li><a href="/questions/categories/sabaidiscuss/" id="nav-think-tank" class="active">think tank</a></li>
						<?php else: ?>
							<li><a href="/questions/categories/sabaidiscuss/" id="nav-think-tank">think tank</a></li>
						<?php endif;?>

						<?php if(is_page('blog')):?>
							<li><a href="/blog/" id="nav-blog" class="active">blog</a></li>
						<?php else: ?>
							<li><a href="/blog/" id="nav-blog">blog</a></li>
						<?php endif;?>						
							
						</ul>
					</div><!-- /#nav -->
				</div><!-- /#head-content -->
			</div><!-- /#head-bkg -->
		</div><!-- /#head-rpt -->
