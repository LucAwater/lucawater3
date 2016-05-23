<?php get_header(); ?>

<section class="projects">
  <p>A selection of my projects</p>

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
          <a href="<?php echo $url; ?>" target="_blank"><h3><?php echo $title; ?></h3></a>
        </li>

        <?php
      endforeach;

    echo '</ul>';

  endif;
  ?>

</section>

<?php get_footer(); ?>