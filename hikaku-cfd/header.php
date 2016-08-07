<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="css/app.css" />
	<link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
</head>

<body>
	<div class="siteHeader clearfix">
		<div class="row">
			<div class="small-12 columns siteLogo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">CFD.com</a>
			</div>
		</div>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<div class="row">
				<div class="small-12 columns">
					<div class="menu">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><img src="<?php echo get_template_directory_uri(); ?>/img/nav.png" height="300" width="300" alt=""></button>
						 <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</div>
				</div>
			</div>
		</nav>
	</div>
 <?php if(!is_front_page()){ ?>
  <div class="row">
   <div clsss="small-12 columns breadCrumb">
   <?php if ( class_exists('WP_SiteManager_bread_crumb')){WP_SiteManager_bread_crumb::bread_crumb('type=string'); } ?>
   </div>
 </div>
<?php } ?>