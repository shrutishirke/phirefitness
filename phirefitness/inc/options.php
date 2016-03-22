<?php

/* Referenced Class 9 Lecture.
http://codex.wordpress.org/Function_Reference/add_settings_field/*


/* This function adds our options page as a sub-menu item to an already existing menu.*/

function phirefitness_add_submenu(){
  add_submenu_page( 'themes.php', 'PhireFitness Options Page', 'Theme Options', 'manage_options', 'theme_options', 'my_theme_options_page');
}
add_action( 'admin_menu', 'phirefitness_add_submenu' );



/* This function registers the setting for the options page. */ 
function phirefitness_settings_init(){
  register_setting( 'theme_options', 'phirefitness_options_settings' );

/*This will add a settings field to a settings page and section. */  
add_settings_section(
  'phirefitness_options_page_section',  //the id
  'Description', //Title of the Section 
  'phirefitness_options_page_section_callback', //This is the call back function that we will create. 
  'theme_options' //Title of our options page. 
  
);

/*This function will provie the user with section detail and description.
It was previously created in add_settings_section. */

function phirefitness_options_page_section_callback() { 
      echo 'Section Detail.';
    }

      /*This function will add a text box in our theme options page. */
      add_settings_field(
      'phirefitness_text_field', //id- String for use in the 'id' attribute of tags. 
      'Enter Email Address', // Title
      'phirefitness_text_field_render', //$callback 
      'theme_options',//the page on which to display the field. 
      'phirefitness_options_page_section' //section of the settings in which to display the select or text box.
      );

      function phirefitness_text_field_render() { 
      $options = get_option( 'phirefitness_options_settings' );
      ?>
      <input type="text" name="phirefitness_options_settings[phirefitness_text_field]" value="<?php if (isset($options['phirefitness_text_field'])) echo $options['phirefitness_text_field']; ?>" />
      <?php
      }
    
      /*This function will add a checkbox*/
      add_settings_field(
      'phirefitness_checkbox_field',
      'Checkmark for Coupon',
      'phirefitness_checkbox_field_render',
      'theme_options',
      'phirefitness_options_page_section'

      );

      function phirefitness_checkbox_field_render() { 
      $options = get_option( 'phirefitness_options_settings' );
      ?>
      <input type="checkbox" name="phirefitness_options_settings[phirefitness_checkbox_field]" <?php if (isset($options['phirefitness_checkbox_field'])) checked( 'on', ($options['phirefitness_checkbox_field']) ) ; ?> value="on" />
      <label>Check for Coupon</label> 
      <?php 
      }
    
      /*This will add a radio button.*/ 
      add_settings_field(
      'phirefitness_radio_field',
      'Choose your Role',
      'phirefitness_radio_field_render',
      'theme_options',
      'phirefitness_options_page_section'
      );

      function phirefitness_radio_field_render() { 
      $options = get_option( 'phirefitness_options_settings' );
      ?>
      <input type="radio" name="phirefitness_options_settings[phirefitness_radio_field]" <?php if (isset($options['phirefitness_radio_field'])) checked( $options['phirefitness_radio_field'], 1 ); ?> value="Member" /> <label>Member</label><br />
      <input type="radio" name="phirefitness_options_settings[phirefitness_radio_field]" <?php if (isset($options['phirefitness_radio_field'])) checked( $options['phirefitness_radio_field'], 2 ); ?> value="Visitor" /> <label>Administrator</label><br />
      <input type="radio" name="phirefitness_options_settings[phirefitness_radio_field]" <?php if (isset($options['phirefitness_radio_field'])) checked( $options['phirefitness_radio_field'], 3 ); ?> value="Administrator" /> <label>Visitor</label>
      <?php
      }
    
      


      /*This function creates a select box to the page. */
      add_settings_field(
      'phirefitness_select_field',
      'Choose from the drop dropdown',
      'phirefitness_select_field_render',
      'theme_options',
      'phirefitness_options_page_section'

      );

      function phirefitness_select_field_render() { 
      $options = get_option( 'phirefitness_options_settings' );
      ?>
      <select name="phirefitness_options_settings[phirefitness_select_field]">
        <option value="1" <?php if (isset($options['phirefitness_select_field'])) selected( $options['phirefitness_select_field'], 1 ); ?>>New Member</option>
        <option value="2" <?php if (isset($options['phirefitness_select_field'])) selected( $options['phirefitness_select_field'], 2 ); ?>>Already Signed up</option>
      </select>
      <?php
      }
    

      /*This function creates the Options Page under Appearence in the Dashboard of Wordpress. */
      function my_theme_options_page(){ 
      ?>
      <form action="options.php" method="post">
        <h2>PhireFitness Options Page</h2>
        <?php
        settings_fields( 'theme_options' );
        do_settings_sections( 'theme_options' );
        submit_button();
        ?>
      </form>
      <?php
    }

}


/*This function activates the plugin. */  
add_action( 'admin_init', 'phirefitness_settings_init' );





