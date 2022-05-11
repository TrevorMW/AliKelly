<?php
/**
 * @package WordPress
 * @subpackage themename
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php echo site_global_description(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="https://secureservercdn.net/104.238.68.196/56x.ebb.myftpupload.com/wp-content/uploads/2021/03/cropped-ali-site-icon-32x32.png" sizes="32x32">
	<link rel="icon" href="https://secureservercdn.net/104.238.68.196/56x.ebb.myftpupload.com/wp-content/uploads/2021/03/cropped-ali-site-icon-192x192.png" sizes="192x192">
	<link rel="apple-touch-icon" href="https://secureservercdn.net/104.238.68.196/56x.ebb.myftpupload.com/wp-content/uploads/2021/03/cropped-ali-site-icon-180x180.png">
	<meta name="msapplication-TileImage" content="https://secureservercdn.net/104.238.68.196/56x.ebb.myftpupload.com/wp-content/uploads/2021/03/cropped-ali-site-icon-270x270.png">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<header class="wrapper">
		<div class="wrapper white desktopHeader">
			<?php //var_dump(has_nav_menu('primary-right')); ?>
			<div class="container large flexed">
				<div class="navLeft">
					<nav>
						<ul>
							<?php wp_nav_menu(array(
								'theme_location' => 'primary-left',
								'menu'           => 'primary-left',
								'container'      => false,
								'items_wrap'     => '%3$s',
								'depth'          => 0
							)) ?>
						</ul>
					</nav>
				</div>
				<div id="logoBox">
					<a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/static/images/alikelly_logo.png" alt="" title="" /></a>
					<h1 class="acc">Ali Kelly</h1>
				</div>
				<div class="navRight">
					<nav>
						<ul>
							<?php wp_nav_menu(array(
								'theme_location' => 'primary-right',
								'menu'           => 'primary-right',
								'container'      => false,
								'items_wrap'     => '%3$s',
								'depth'          => 0
							)) ?>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<div class="wrapper white mobileHeader">
			<div class="container flexed">
				<div id="logoBox">
					<a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/static/images/alikelly_logo.png" alt="" title="" /></a>
					<h1 class="acc">Ali Kelly</h1>
				</div>
				<!--<div class="">
					<a href="#" data-search-trigger><i class="fa fa-fw fa-search"></i></a>
				</div>-->
				<div class="">
					<a href="#" data-mobile-nav-trigger><i class="fa fa-fw fa-bars"></i></a>
				</div>
			</div>
		</div>
		
	</header>

<?php if(is_front_page()){ ?> 
	<main class="wrapper homepage">
<?php } else { ?>
	<main class="wrapper smoke innerpage">
<?php } ?>