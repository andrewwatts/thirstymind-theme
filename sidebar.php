<div class="yui-gb" id="sidebar-wrapper">
	<div id="primary" class="sidebar yui-u first">
		<ul class="xoxo">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : // begin primary sidebar widgets ?>

            <li id="about">
            
                <h3><?php _e( 'About', 'sandbox' ) ?></h3>
                
                <p><img src="<?php echo wp_get_attachment_url(493) ?>" alt="Andrew Watts" title="Andrew Watts" align="left">thirstymind.org is 
                the personal site of Andrew Watts, where I share my thoughts on software, technology &amp; life.</p>
                
                <ul>
                    <li><a href="<?php echo get_page_uri(488) ?>" alt="Andrew Watts' Projects" title="Andrew Watts' Projects">Projects &raquo;</a></li>                
                    <li><a href="<?php echo get_page_uri(133) ?>" alt="About Andrew Watts" title="About Andrew Watts">More &raquo;</a></li>
                </ul>
            </li>

<?php
/*

			<li id="pages">
				<h3><?php _e( 'Pages', 'sandbox' ) ?></h3>
				<ul>
<?php wp_list_pages('title_li=&sort_column=menu_order' ) ?>
				</ul>
			</li>
			

			<li id="categories">
				<h3><?php _e( 'Categories', 'sandbox' ) ?></h3>
				<ul>
<?php wp_list_categories('title_li=&show_count=0&hierarchical=1') ?> 

				</ul>
			</li>
*/
?>			
<?php endif; // end primary sidebar widgets  ?>
		</ul>
	</div><!-- #primary .sidebar -->

	<div id="secondary" class="sidebar yui-u">
		<ul class="xoxo">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : // begin secondary sidebar widgets ?>
			<li id="search">
				<h3><label for="s"><?php _e( 'Search', 'sandbox' ) ?></label></h3>
				<form id="searchform" class="blog-search" method="get" action="<?php bloginfo('home') ?>">
					<div>
						<input id="s" name="s" type="text" class="text" value="<?php the_search_query() ?>" size="10" tabindex="1" />
						<input type="submit" class="button" value="<?php _e( 'Find', 'sandbox' ) ?>" tabindex="2" />
					</div>
				</form>
			</li>

<?php wp_list_bookmarks('category=70&title_before=<h3>&title_after=</h3>&show_images=1') ?>

			<li id="rss-links">
				<h3><?php _e( 'RSS Feeds', 'sandbox' ) ?></h3>
				<ul>
					<li><a href="<?php bloginfo('rss2_url') ?>" title="<?php printf( __( '%s latest posts', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" rel="alternate" type="application/rss+xml"><?php _e( 'All posts', 'sandbox' ) ?></a></li>
					<li><a href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" rel="alternate" type="application/rss+xml"><?php _e( 'All comments', 'sandbox' ) ?></a></li>
				</ul>
			</li>

			<li id="meta">
				<h3><?php _e( 'Meta', 'sandbox' ) ?></h3>
				<ul>
					<?php wp_register() ?>

					<li><?php wp_loginout() ?></li>
					<?php wp_meta() ?>

				</ul>
			</li>
<?php endif; // end secondary sidebar widgets  ?>
		</ul>
	</div><!-- #secondary .sidebar -->
	
	<div id="terciary" class="sidebar yui-u">
		<ul class="xoxo">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(3) ) : // begin primary sidebar widgets ?>
			<li id="calendar">
				<?php get_calendar(); ?>
			</li>

			<li id="archives">
				<h3><?php _e( 'Archives', 'sandbox' ) ?></h3>
				<ul>
<?php wp_get_archives('type=monthly') ?>

				</ul>
			</li>						
	<?php endif; ?>
		</ul>
	</div>
</div>
