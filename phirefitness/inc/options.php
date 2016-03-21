<?php

function phirefitness_add_submenu(){
  add_submenu_page( 'themes.php', 'PhireFitness Options Page', 'Theme Options', 'manage_options', 'theme_options', 'my_theme_options_page');
}
add_action( 'admin_menu', 'phirefitness_add_submenu' );

function phirefitness_settings_init(){
  register_setting( 'theme_options', 'opions_settings' );
  
add_settings_section(
  'phirefitness_options_page_section',
  'Your section description',
  'phirefitness_options_page_selection_callback',
  'theme_options'
  
);

<?php
