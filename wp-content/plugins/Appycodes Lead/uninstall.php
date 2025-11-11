<?php
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    exit;
}

global $wpdb;
$table = $wpdb->prefix . 'appycodes_lead';

// If you want to remove the table on uninstall, uncomment below.
$wpdb->query( "DROP TABLE IF EXISTS {$table}" );