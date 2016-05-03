<?php
get_header();

$projects = get_field('projects');

if( $projects ):
  foreach( $projects as $project ):

    $date = $project['project_date'];
    $title = $project['project_title'];
    $url = $project['project_url'];

    echo
    '<li>
      <p>' . $date . '</p>
      <a href="' . $url . '" target="_blank"><h2>' . $title . '</h2></a>
    </li>';

  endforeach;
endif;

get_footer();
?>