<?php
/**
 * Template for displaying sql export page
 */
// Prevent direct access.
if ( ! defined( 'INSR_DIR' ) ) {
	//exit;
}
?>
<div class="wrap">

	<h1 id="title"><?php esc_html_e( 'Search & Replace', 'insr' ); ?></h1>

	<h2 class="nav-tab-wrapper">
		<a class="nav-tab" href="<?php echo admin_url() ?>tools.php?page=db_backup"><?php esc_html_e( 'Backup Database', 'insr' ); ?></a>
		<a class="nav-tab" href="<?php echo admin_url() ?>tools.php?page=replace_domain"><?php esc_html_e( 'Replace Domain/URL', 'insr' ); ?></a>
		<a class="nav-tab" href="<?php echo admin_url() ?>tools.php?page=inpsyde_search_replace"><?php esc_html_e( 'Search and replace', 'insr' ); ?></a>
		<a class="nav-tab" href="<?php echo admin_url() ?>tools.php?page=sql_import"><?php esc_html_e( 'Import SQL file', 'insr' ); ?></a>
		<a class="nav-tab nav-tab-active" href="<?php echo admin_url() ?>tools.php?page=credits"><?php esc_html_e( 'Credits', 'insr' ); ?></a>
	</h2>

	<p><?php esc_html_e( 'The Inpsyde Credits.', 'insr' ); ?> </p>