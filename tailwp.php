<?php

/**
 * @wordpress-plugin
 * Plugin Name:       TailWP
 * Plugin URI:        https://tailwp.com
 * Description:       Placeholder plugin for TailWP
 * Version:           1.0
 * Author:            Maximebj
 * Author URI:        https://dysign.fr
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       tailwp
 * Domain Path:       /languages
 */

defined( 'ABSPATH' ) || exit;

# Register Hooks
add_action( 'admin_enqueue_scripts', 'tailwp_enqueue_assets' );
add_action( 'admin_menu', 'tailwp_register_page' );


# Enqueue style in WP Admin
function tailwp_enqueue_assets( string $hook ): void
{
  if( str_contains( $hook, 'tailwp' ) ) { 
    wp_enqueue_style( 'tailwp', plugin_dir_url( __FILE__ ) . 'dist/styles.css', [], '1.0', 'all' );
  }
}


# Register settings using the Settings API 
function tailwp_register_page(): void
{   
  add_menu_page(
    'TailWP',
    'TailWP',
    'manage_options',
    'tailwp',
    function () { include 'templates/tailwp-home.php'; },
    'dashicons-superhero-alt',
    100
  );

  add_submenu_page( 
    'tailwp', 
    'WP Rocket', 
    'WP Rocket', 
    'manage_options', 
    'tailwp-wprocket',
    function () { 
      $tab = isset( $_GET['tab'] ) ? $_GET['tab'] : 'dashboard';
      include "templates/wprocket/$tab.php"; 
    }
  );

  add_submenu_page( 
    'tailwp', 
    'WooCommerce', 
    'WooCommerce', 
    'manage_options', 
    'tailwp-woocommerce', 
    function () { include 'templates/woocommerce.php'; }
  );

  add_submenu_page( 
    'tailwp', 
    'WP GridBuilder', 
    'WP GridBuilder', 
    'manage_options', 
    'tailwp-gridbuilder', 
    function () { 
      $tab = isset( $_GET['tab'] ) ? $_GET['tab'] : 'dashboard';
      include "templates/gridbuilder/$tab.php"; 
    }
  );

  add_submenu_page( 
    'tailwp', 
    'WP Smush', 
    'WP Smush', 
    'manage_options', 
    'tailwp-smush', 
    function () { include 'templates/wpsmush.php'; }
  );
} 

function tailwp_url( string $path = '' ): void
{
  echo plugin_dir_url( __FILE__ ) . $path;
}


