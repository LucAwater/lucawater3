<?php
/*
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the main tag.
 */
?>

<!DOCTYPE html>
<head>
  <title>Luc Awater</title>

  <link rel="canonical" href="<?php echo home_url(); ?>">

  <!-- META TAGS -->
  <meta charset="utf-8  " />
  <meta name="description" content="">

  <meta property="og:title" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">

  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Fonts from Typography.com -->
  <link rel="stylesheet" type="text/css" href="https://cloud.typography.com/6711094/6669152/css/fonts.css" />

  <!-- Stylesheet -->
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/app.css">

  <!-- WP_HEAD() -->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header>
    <div><button type="button">contact me</button></div>

    <object type="image/svg+xml" data="<?php echo get_template_directory_uri(); ?>/img/title.svg">Your browser does not support SVGs</object>
  </header>

  <main role="main">
    <section class="text">
      <h1>I am a <strong>web developer</strong> + designer from the Netherlands, currently living in Stockholm.</h1>
    </section>
