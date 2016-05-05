<?php get_header(); ?>

<section class="projects">
  <h1>Selected Projects</h1>

  <?php
  /*
   * Get projects from ACF custom field on homepage
   */
  $projects = get_field('projects');

  if( $projects ):

    echo '<ul>';

      foreach( $projects as $project ):

        $date = $project['project_date'];
        $title = $project['project_title'];
        $url = $project['project_url'];
        ?>

        <li>
          <span><?php echo $date; ?></span>
          <a href="<?php echo $url; ?>" target="_blank"><h2><?php echo $title; ?></h2></a>
        </li>

        <?php
      endforeach;

    echo '</ul>';

  endif;
  ?>

</section>

<?php get_footer(); ?>