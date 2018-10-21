<?php

  $rows = get_field('blokken');
  if( $rows )
  {
    echo '<div class="uk-container">';
    echo '<div class="uk-child-width-1-2@s uk-margin" uk-grid="masonry: true">';

 foreach( $rows as $row ) {

  echo '<div>';
  echo '<div class="uk-card uk-card-default uk-text-center">';

  echo '<h2 class="uk-card-title">' . $row['title'] . '';
  echo '</h2>';

  echo ''. $row['content'] . '';
  echo '<footer>' .$row['footer'] . '';
  echo '</footer>';

  echo '</div>';
  echo '</div>';
}

echo '</div>';
echo '</div>';
echo '<div class="uk-block"></div>';
} ?>
