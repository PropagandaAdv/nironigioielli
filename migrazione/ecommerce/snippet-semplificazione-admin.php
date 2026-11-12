<?php
/**
 * Semplifica la schermata "Aggiungi prodotto" per il ruolo Gestore del negozio.
 * Va installato come plugin "must-use" (wp-content/mu-plugins/nironi-admin-semplice.php)
 * oppure con un plugin di snippet. NON installabile dal connettore MCP: richiede accesso al sito.
 */
add_action( 'add_meta_boxes', function () {
	if ( ! current_user_can( 'manage_woocommerce' ) || current_user_can( 'manage_options' ) ) { return; }
	// Metabox che il cliente non deve vedere.
	foreach ( array( 'postcustom', 'commentstatusdiv', 'commentsdiv', 'slugdiv', 'authordiv', 'tagsdiv-product_tag', 'woocommerce-product-data-upsells-hidden' ) as $id ) {
		remove_meta_box( $id, 'product', 'normal' );
		remove_meta_box( $id, 'product', 'side' );
	}
}, 99 );
add_filter( 'product_type_selector', function ( $types ) {
	// Il cliente carica solo prodotti semplici e variabili.
	return array_intersect_key( $types, array_flip( array( 'simple', 'variable' ) ) );
} );
add_filter( 'woocommerce_product_data_tabs', function ( $tabs ) {
	if ( current_user_can( 'manage_options' ) ) { return $tabs; }
	unset( $tabs['shipping'], $tabs['linked_product'], $tabs['advanced'] ); // Mantieni: Generale, Inventario, Attributi, Varianti.
	return $tabs;
} );
