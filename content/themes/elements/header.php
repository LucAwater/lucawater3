<?php
/*
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the main tag.
 */
?>

<!DOCTYPE html>
<!--[if IE 9]>    <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <title>Luc Awater</title>

  <link rel="canonical" href="<?php echo home_url(); ?>">

  <!-- META TAGS -->
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="description" content="">

  <meta property="og:title" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">

  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Stylesheet -->
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/app.css">

  <!-- WP_HEAD() -->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header>
    <button type="button">contact me</button>

    <object type="image/svg+xml" data="<?php echo get_template_directory_uri(); ?>/img/title.svg">Your browser does not support SVGs</object>
  </header>

  <!-- Main content -->
  <main role="main">
