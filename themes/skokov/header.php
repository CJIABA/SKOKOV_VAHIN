<!DOCTYPE HTML>
<html>
<head>
    <title>><?php bloginfo('name'); wp_title() ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <?php wp_head(); ?>
</head>
<body>
<div class="header">
    <div class="wrap">
        <div class="logo">
            <a href="#">
                <h1>
                    <img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="Skokov logotype"/>
                </h1>
            </a>
        </div>
        <div class="header-menu">
	        <?php wp_nav_menu(array('theme_location' => 'nav', 'container' => false)); ?>
        </div>
        <div class="type-header">
            <h2>
                <span>BLOG</span>
            </h2>
        </div>
    </div>
</div>