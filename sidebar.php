<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

		<div id="primary" class="widget-area" role="complementary">
			<ul class="xoxo">
<?php
	/* When we call the dynamic_sidebar() function, it'll spit out
	 * the widgets for that widget area. If it instead returns false,
	 * then the sidebar simply doesn't exist, so we'll hard-code in
	 * some default sidebar stuff just in case.
	 */
	if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>
	
			<li id="search" class="widget-container widget_search">
				<?php get_search_form(); ?>
			</li>

			<li id="archives" class="widget-container">
				<h3 class="widget-title"><?php _e( 'Archives', 'twentyten' ); ?></h3>
				<ul>
					<?php wp_get_archives( 'type=monthly' ); ?>
				</ul>
			</li>

			<li id="meta" class="widget-container">
				<h3 class="widget-title"><?php _e( 'Meta', 'twentyten' ); ?></h3>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</li>

		<?php endif; // end primary widget area ?>
			</ul>
		
		<!-- lysender's badges -->
		<div class="lysender-badges">
			<div class="badge"><a href="http://twitter.com/lysender" title="Follow Lysender on Twitter"><img height="18" width="80" alt="Follow Lysender on Twitter" src="http://blog.lysender.com/wp-content/uploads/2009/02/twitter_logo_125x29.png"/></a></div>

		   <div class="badge"><a href="http://friendfeed.com/lysender"><img alt="Subscribe to Lysender on FriendFeed" style="border: medium none ;" src="http://blog.lysender.com/wp-content/uploads/2009/02/chicletpng.gif"/></a></div>

			<div class="badge"><a href="http://www.topblogs.com.ph/web-development/"><img style="border:none" src="http://www.topblogs.com.ph/track_19758.gif" alt="Web Development &amp; Design - Top Blogs Philippines" /></a></div>

			<div class="badge"><a href="http://weblogs.com.ph/" title="Filipino &amp; Pinoy Blogs"><img src="http://blog.lysender.com/wp-content/uploads/2010/07/weblogs-button.png" style="height:15px;width:80px;border:0" alt="Filipino &amp; Pinoy Blogs"></a></div>

			<div class="badge"><a href="http://www.blogcatalog.com/directory/technology/internet/web_programming/" title="Programming Blogs - BlogCatalog Blog Directory"><img src="http://blog.lysender.com/wp-content/uploads/2010/07/blogcatalog5.gif" alt="Programming Blogs - BlogCatalog Blog Directory" style="border: 0;" /></a></div>

			<div class="badge"><a href="http://www.phpugph.com" title="I'm a PHPUGer!" target="_blank"><img src="http://blog.lysender.com/wp-content/uploads/2009/02/phpugph-user.png" alt="I'm a PHPUGer!" /></a></div>

			<div class="badge"><a href="http://validator.w3.org/check?uri=referer"><img src="http://blog.lysender.com/wp-content/uploads/2009/02/valid-xhtml10.png" alt="Valid XHTML 1.0 Transitional" height="31" width="88" /></a></div>

		</div><!-- lysender-badges -->

		</div><!-- #primary .widget-area -->

<?php
	// A second sidebar for widgets, just because.
	if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>

		<div id="secondary" class="widget-area" role="complementary">
			<ul class="xoxo">
				<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
			</ul>
		</div><!-- #secondary .widget-area -->

<?php endif; ?>
