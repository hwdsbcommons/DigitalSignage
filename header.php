<?php
/**
 * Header
 *
 * Setup the header for our theme
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?php language_attributes(); ?>" > <!--<![endif]-->




<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php bloginfo('name'); ?></title>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css" integrity="sha256-2RdmDD1veq0y68SwASxtC7hKE+IBoBLjNLzKS59Ghsk=" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/modernizr/3.3.1/modernizr.min.js" integrity="sha256-65rhSmwPSQGe83K1p6cudTQxfiMNutuHCIB0n8CqvF4=" crossorigin="anonymous"></script>

<title><?php wp_title(); ?></title>

        <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<div class="content">
