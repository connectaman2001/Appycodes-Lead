<?php
/**
 * Plugin Name: Appycodes Lead
 * Description: Simple lead capture plugin. Phase 1 — creates the DB table on activation.
 * Version: 0.1
 * Author: Aman Sinha
 * Text Domain: appycodes-lead
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Activation hook: create DB table
 */
function appycodes_lead_activate() {
    global $wpdb;

    $table_name = $wpdb->prefix . 'appycodes_lead';
    $charset_collate = $wpdb->get_charset_collate();

    // SQL for table creation
    $sql = "CREATE TABLE {$table_name} (
        id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(191) NOT NULL,
        created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id),
        KEY email_idx (email)
    ) {$charset_collate};";

    // Require upgrade functions and run dbDelta
    require_once ABSPATH . 'wp-admin/includes/upgrade.php';
    dbDelta( $sql );
}
register_activation_hook( __FILE__, 'appycodes_lead_activate' );

/**
 * Deactivation hook (optional) - does nothing by default.
 * We avoid dropping tables on deactivation to prevent accidental data loss.
 */
function appycodes_lead_deactivate() {
    // No destructive action on deactivation.
}
register_deactivation_hook( __FILE__, 'appycodes_lead_deactivate' );

/**
 * Optional: helper to return table name (useful later)
 */
function appycodes_lead_table_name() {
    global $wpdb;
    return $wpdb->prefix . 'appycodes_lead';
}