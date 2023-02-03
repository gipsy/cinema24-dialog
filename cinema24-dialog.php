<?php
/**
 * @package Cinema24Dialog
 */
/*
 * Plugin Name: Cinema24 Dialog
 * Description: Modal dialog popup based on Bootstrap 4
 * Version: 1.0.0
 * Author: Taras Gavrysh
 * License: Unlicensed
 * Text Domain: cinema24-dialog
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

class Cinema24Dialog
{

  function activate() {
    // generated a CPT
    // flush rewrite rules
  }

  function deactivate() {
    // flush rewrite rules
  }

  function uninstall() {

  }

  function custom_post_type() {

  }
}

if ( class_exists( 'Cinema24Dialog') ) {
  $cinema24Dialog = new Cinema24Dialog();
}

// activate
register_activation_hook( __FILE__, array( $cinema24Dialog, 'activate' ) );

// deactivate
register_deactivation_hook( __FILE__, array( $cinema24Dialog, 'deactivate' ) );
