<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?></title>
		<!-- <link href="//www.google-analytics.com" rel="dns-prefetch"> -->
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/icon.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
		<meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

		<?php wp_head(); ?>
		<script>
      conditionizr.config({
        assets: '<?php echo get_template_directory_uri(); ?>',
        tests: {}
      });
    </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<header class="header clear" role="banner">

					<div class="container">
						<div class="row">
							<div class="col-12 col-sm-6 logo">
								<a href="<?php echo home_url(); ?>">
									<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="img-fluid logo-img">
								</a>
							</div>
							<div class="col-12 col-sm-6 social">
								<div class="header_social pull-right">
									<a class="social_link" href="" target="_blank">
										<i class="fa fa-facebook-official social_img" aria-hidden="true"></i>
									</a>
									<a class="social_link" href="" target="_blank">
										<i class="fa fa-pinterest-square social_img" aria-hidden="true"></i>
									</a>
									<a class="social_link" href="" target="_blank">
										<i class="fa fa-instagram social_img" aria-hidden="true"></i>
									</a>
								</div>
							</div>
						</div>
					</div><!-- /container -->

					<div class="container">
						<div class="inner">
							<div class="row">
								<div class="col-12 col-sm-12" id="nav">
									<nav class="navbar navbar-default navbar-expand-md navbar-light bg-faded" role="navigation">
									  <div class="navbar-header">
											<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
									      <span class="navbar-toggler-icon"></span>
									    </button>
									  </div>
										<div class="collapse navbar-collapse navbar-top-collapse" id="bs4navbar">
											<?php wp_nav_menu( array(
												'menu'      		 	=> 'header-menu',
												'theme_location' 	=> 'header-menu',
												'menu_id'       	=> 'navigation',
												'depth'      			=> 2,
												'container'  			=> false,
												'menu_class' 			=> 'nav navbar-nav',
												'walker'          => new wp_bootstrap_navwalker()
											) );?>
										</div><!-- /.navbar-collapse -->
									</nav>
								</div>
							</div>
						</div>
					</div><!-- /container -->

			</header><!-- /header -->
