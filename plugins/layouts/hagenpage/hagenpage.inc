<?php

// Plugin definition
$plugin = array(
  'title' => t('Hagenpage'),
  'icon' => 'hagenpage.png',
  'category' => t('Drupalhagen'),
  'theme' => 'hagenpage',
  'css' => 'hagenpage.css',
  'regions' => array(
    'topbar' => t('Top navigation'),
    'header' => t('Header'),
    'schedule' => t('Schedule'),
    'sponsors' => t('Sponsors'),
    'venue' => t('Venue'),
    'footer' => t('Footer'),
  ),
);
