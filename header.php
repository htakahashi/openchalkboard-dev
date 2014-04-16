<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>OpenChalkboard</title>
	<link href="<?php bloginfo('stylesheet_url');?>" type="text/css" rel="stylesheet" />
	<link href="//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" type="text/css" rel="stylesheet" />
	
	<?php
	if ( is_home() ) {
	// This is a homepage
	} else {
	// This is not a homepage
	?>
	<style>
		#head-rpt #head-bkg {
			
		}
		#foot-rpt #foot-bkg {
			background: url(img/bkg-foot.png) no-repeat 0 0 transparent;
		}
	</style>
	<?php
	}
	?>

	<?php wp_head(); ?> 
</head>

<?php
if ( is_home() ) {
	// This is a homepage
	echo '<body id="home">';
} else {
	// This is not a homepage
	echo '<body>';

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
							<li><a href="/" id="nav-home" class="active">home</a></li>
							<li><a href="#" id="nav-our-mission">our mission</a></li>
							<li><a href="#" id="nav-why-student-curiosity-is-key">why student curiosity is key</a></li>
							<li><a href="#" id="nav-research-behind-spark">research behind SPARK</a></li>
							<li><a href="#" id="nav-think-tank">think tank</a></li>
							<li><a href="#" id="nav-blog">blog</a></li>
						</ul>
					</div><!-- /#nav -->
				</div><!-- /#head-content -->
			</div><!-- /#head-bkg -->
		</div><!-- /#head-rpt -->
