<?php

  $rows = get_field('blokken');
  if( $rows )
  {
    echo '<div class="uk-container uk-container-center">';
    echo '<div class="uk-grid" data-uk-grid="{gutter:16}" data-uk-grid-margin>';

 foreach( $rows as $row ) {

  echo '<div class="uk-width-medium-1-2">';
  echo '<div class="uk-panel uk-panel-box uk-text-center">';

  echo '<h2 class="uk-panel-title">' . $row['title'] . '';
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
