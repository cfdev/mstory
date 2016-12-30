<?php if (!defined('PLX_ROOT')) exit; ?>
<!DOCTYPE html>
<html lang="<?php $plxShow->defaultLang() ?>">
<head>
	<meta charset="<?php $plxShow->charset('min'); ?>">
	<meta name="copyright" content="cfdev CC-BY-NC - http://www.cfdev.fr">
	<meta name="author" content="cfdev - http://www.cfdev.fr">
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0">
	<title><?php $plxShow->pageTitle(); ?></title>
	<?php $plxShow->meta('description') ?>
	<?php $plxShow->meta('keywords') ?>
	<link rel="icon" href="<?php $plxShow->template(); ?>/img/favicon.png" />
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/mstyle.css" media="screen"/>

	<?php $plxShow->pluginsCss() ?>
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" />

	<!-- meta social-->
	<meta property="og:title" content="<?php $plxShow->pageTitle(); ?>" /> 
	<meta property="og:description" content="" />  
	<meta property="og:image" content="<?php $plxShow->template(); ?>/img/logo.png" />
	<meta property="og:image:type" content="image/png" />
</head>

<body id="top">
		
		<nav role="navigation">	
		<div class="responsive-menu">
			<label for="menu"><i class="fa fa-bars fa-fw fa-2x"></i></label>
			<input type="checkbox" id="menu">
			<ul class="menu text-right">
				<?php $plxShow->staticList('','<li id="#static_id"><a href="#static_url" class="#static_status" title="#static_name">#static_name</a></li>'); ?>
				<?php $plxShow->pageBlog('<li id="#page_id"><a class="#page_status" href="#page_url" title="#page_name">#page_name</a></li>'); ?>
			</ul>
		</div>

    </nav>
	
	<header role="banner" >	
		<div class="container text-center">
			
			<h1><a href="<?php $plxShow->racine(); ?>"><img src="<?php $plxShow->template(); ?>/img/logo.png" alt="Logo" /></a><?php $plxShow->mainTitle('link'); ?></h1>
			<h2><?php $plxShow->subTitle(); ?></h2>
		</div>		
	</header>