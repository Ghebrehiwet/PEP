<!DOCTYPE html>
<html>
<head <?php language_attributes(); ?>>

	<meta charset="<?php bloginfo('charset'); ?>">


	<title><?php bloginfo("name") . wp_title('|'); ?></title>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"> 

	<meta name="robots" content="noindex, nofollow" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/media-queries.css" type=text/css" />
	
	<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>


	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class($class); ?>>
<header>
  <div id="background">
				<h1><a href="<?php echo get_option('home'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/home_header.gif" alt="header background image" /></a></h1>
  </div>
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
        <div class="nav-collapse collapse">
         <ul class="nav">

			  <?php wp_list_pages(array('title_li' => '')); ?>

		</ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>
 </header>

  <div class="container-fluid">