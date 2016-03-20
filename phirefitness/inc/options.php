<?php

function phirefitness_add_submenu(){
  add_submenu_page( 'themes.php', 'PhireFitness Options Page', 'Theme Options', 'manage_options', 'theme_options', 'my_theme_options_page');
}
add_action( 'admin_menu', 'add_submenu' );

function phirefitness_settings_init(){
  register_setting( 'theme_options', 'opions_settings' );
  
add_settings_section(
  'phirefitness_options_page_section',
  'Your section description',
  'phirefitness_options_page_selection_callback',
  'theme_options'
  
);
function phirefitness_options_page_section_callback() { 
		echo 'A description and detail about the section.';
	}


add_settings_field(
  'phirefitness_radio_field',
  'Enter Email Address',
  'phirefitness_text_field_render',
  'theme_options',
  'phirefitness_options_page_section'
);

add_settings_field(
  'phirefitness_checkbox_field',
  'Checkmark Preference',
  'phirefitness_checkbox_field_render',
  'theme_options',
  'phirefitness_options_page_section',
);

add_settings_field(
'phirefitness_radio_field',
'Choose your Role',
'phirefitness_radio_field_render',
'theme_options',
'phirefitness_options_page_section'
);

add_settings_field(
'phirefitness_textarea_field',
'Enter Additional Comments'
'phirefitness_textarea_field_render',
'theme_options',
'phirefitness_options_page_section'

);

add_settings_field(
  'phirefitness_select_field',
  'Choose from the menu',
  'phirefitness_select_field_render',
  'theme_options',
  'phirefitness_options_page_section'

);

function phirefitness_text_field_render() {
  $options = get_option( 'phirefitness_options_setings' );
  ?>
  <input type="text" name="phirefitness_options_settings[phirefitness_text_field]" value="<?php if (isset($options[]phirefitness_text_field'])) echo $options['phirefitness_text_field']; ?>" />
}


function phirefitness_radio_field_render(){
  $options = get_option( 'phirefitness_options_settings' );
  ?>
  <input type="radio" name="phirefitness_options_settings[phirefitness_radio_field]" <?php if (isset($options['phirefitness_radio_field'])) checked( $options['phirefitness_radio_field'], 1 ); ?> value="1" />
  <input type="radio" name="phirefitness_options_settings[phirefitness_radio_field]" <?php if (isset($options['phirefitness_radio_field'])) checked( $options['phirefitness_radio_field'], 2 ); ?> value="1" />
  <input type="radio" name="phirefitness_options_settings[phirefitness_radio_field]" <?php if (isset($options['phirefitness_radio_field'])) checked( $options['phirefitness_radio_field'], 3 ); ?> value="1" />
  <? php
}

function phirefitness_textarea_field_render(){
  $options = get_option( 'phirefitness_options_settings' );
  ?>
  <textarea cols="40" rows="5" name="phirefitness_options_settings[phirefitness_textarea_field]"><?php if (isset($options['phirefitnes_textarea_field'])) echo $options['phirefitness_textarea_field']; ?></textarea>
  
  
function phirefitness_select_field_render(){
  $options = get_option( 'phirefitness_options_settings' );
  ?>
  <select name="phirefitness_options_settings[phirefitness_select_field]">
    <option value="1" <?php if (isset($options['phirefitness_select_field])) selected( $options['phirefitness_select_field'], 1 ); ?>>Option 1</option>
    <option value="2" <?php if (isset($options['phirefitness_select_field])) selected( $options['phirefitness_select_field'], 2 ); ?>>Option 1</option>
</select>
<?php 
}

function my_theme_options_page(){
  ?>
  <form action="options.php" method="post">
    <h2> PhireFitness Options Page</h2>
    <?php
    settings_fields( 'theme_options' );
    do_settings_sections( 'theme_options' );
    submit_button();
    ?>
  </form>
  <?php
}

add_action( 'admin_init', 'phirefitness_settings_init' );




  
  
