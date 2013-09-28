<?php

// Plugin definition
$plugin = array(
  'title' => t('Hagenpage'),
  'icon' => 'hagenpage.png',
  'category' => t('Drupalhagen'),
  'theme' => 'hagenpage',
  'css' => 'hagenpage.css',
  'regions' => array(
    'header' => t('Header'),
    'schedule' => t('Schedule'),
    'venue' => t('Venue'),
    'footer' => t('Footer'),
  ),
);
