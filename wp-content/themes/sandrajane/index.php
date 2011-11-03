<?php get_header() ?>

	<div id="container">
	<div id="leftbar">
	<img src="<?php bloginfo('stylesheet_directory'); ?>/images/SandraJaneLogo.gif">
	<?php wp_nav_menu( array( 'theme_location' => 'left-menu' ) ); ?>
	<img src="<?php bloginfo('stylesheet_directory'); ?>/images/SandraJaneShop.gif">
	<div class="address">46-48 King Street<br />Cambridge</div>
	</div><!-- #leftbar -->
		<div id="content">
			<h1 class="mainh1">Welcome</h1>
			<div id="post">
			<p>Welcome to Sandra Jane, the high quality interior design store. You'll find everything to make your home feel special; fabrics, wall coverings, soft furnishings, furniture (for inside and out) lighting and accessories.<br /><br />
			We're happy to visit your home or business to advise on the creating and implementing of the right look.<br /><br />
			We stock the up-market brand names you know and trust plus a host of unusual items that we have sourced from our favourite suppliers from around the world.<br /><br /> 
			We are always introducing new stock from different suppliers and for new seasons so we don't produce a catalogue. Come and see us! We're a family business and the founders are still active in the business and keen to help you.</p>
			</div>
			<h1 class="mainh1">01223 323211 | <a href="mailto:contact@sandrajane.co.uk">contact@sandrajane.co.uk</a></h1>
			<div id="decoration"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/Home.gif" class="left"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/home1.gif" class="right"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/home2.gif" class="right"></div>
		</div><!-- #content -->
	</div><!-- #container -->

<?php //get_sidebar() ?>
<?php get_footer() ?>