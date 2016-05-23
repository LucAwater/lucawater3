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
  <meta name="description" content="web developer + designer">

  <meta property="og:title" content="Luc Awater">
  <meta property="og:description" content="web developer + designer">
  <meta property="og:url" content="<?php echo home_url(); ?>">

  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Fonts from Typography.com -->
  <link rel="stylesheet" type="text/css" href="https://cloud.typography.com/6711094/6669152/css/fonts.css" />

  <!-- Stylesheet -->
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/app.css">

  <!-- WP_HEAD() -->
  <?php wp_head(); ?>
</head>

<body>
  <main role="main">
    <header>
      <h1><strong>Luc Awater</strong><br>writes code for web</h1>
    </header>
    
    <section class="text">
      <h2>I am a <strong>web developer</strong> + designer from the Netherlands, currently living in Stockholm. I combine code with a touch of design to build stuff for the web.</h2>
    </section>
