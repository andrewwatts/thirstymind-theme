<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">

    <title>
    <?php if(wp_title('', false)) { ?>
        <?php wp_title( '--', true, 'right' ); echo wp_specialchars( get_bloginfo('name'), 1 ) ?>
    <?php } else { ?>
    	<?php echo wp_specialchars( get_bloginfo('name'), 1 ) ?>: andrew watts' weblog
    <?php } ?>
    </title>
	<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
	<meta name="description" content="andrew watts' weblog. discussions in software, technology and life." />
    <meta name="keywords" content="andrew watts, developer, software, engineer, code, andrew, watts, d3w4rd, deward, andrewwatts, dandrewwatts, thristymind, technology" />

	
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/fancy.yuic.css" />
	
	
	
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php printf( __( '%s latest posts', 'sandbox' ), 'thirstymind.org: andrew watts\'' ) ?>" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'sandbox' ), 'thirstymind.org: andrew watts\'' ) ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
	
	<script type="text/javascript" src="<?php bloginfo('template_directory')?>/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory')?>/js/jquery.fancybox.yuic.js"></script>
	<!--[if lt IE 7]><script src="<?php bloginfo('template_directory')?>/js/jquery.pngFix.pack.js" type="text/javascript"></script><![endif]-->
	<script type="text/javascript" src="<?php bloginfo('template_directory')?>/js/satorii.js"></script>
	
	<?php wp_head() /* For plugins */?>
	
	<script type="text/javascript">var disqus_iframe_css = "http://www.thirstymind.org/wordpress/wp-content/themes/thirstymind-theme/css/disqus-form.css";</script>
</head>

<body class="<?php sandbox_body_class() ?>">

<div id="wrapper" class="hfeed">

	<div id="header">
		<h1 id="blog-title"><span><a href="<?php bloginfo('home') ?>/" title="<?php echo wp_specialchars( get_bloginfo('name'), 1 ) ?>" rel="home"><?php bloginfo('name') ?></a></span></h1>
		<h2 id="blog-description"><?php bloginfo('description') ?></h2>	
	</div><!--  #header -->
	
<?php
/*
    	<?php if ( !is_single($post) ) { ?>
    	<div id="access">
    		<div class="skip-link"><a href="#content" title="<?php _e( 'Skip to content', 'sandbox' ) ?>"><?php _e( 'Skip to content', 'sandbox' ) ?></a></div>
    		<?php sandbox_globalnav() ?>
    	</div><!-- #access -->	
    	<?php } ?>	
*/
?>