<?php
/**
 * Plugin Name:       Plugin Boilerplate
 * Description:       Gutenberg Block Plugin Boilerplate.
 * Requires at least: 5.7
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Mobeen Abdullah
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       plugin-boilerplate
 *
 */

function wp_blocks_plugin_boilerplate_enqueue_assets() {

    $asset_file = include(plugin_dir_path( __FILE__ ) . 'build/index.asset.php');

    wp_enqueue_script( 'wp-blocks-plugin-boilerplate-script', plugins_url('build/index.js', __FILE__), $asset_file['dependencies'], $asset_file['version']);
    
    wp_enqueue_style( 'wp-blocks-plugin-boilerplate-style', plugins_url('build/index.css', __FILE__) );
}

add_action( 'enqueue_block_editor_assets', 'wp_blocks_plugin_boilerplate_enqueue_assets' );