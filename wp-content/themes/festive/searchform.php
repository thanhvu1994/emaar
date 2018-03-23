<?php
/**
 * The template for displaying the header search form
 */ ?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label class="<?php echo ( get_theme_mod( 'festive-set-search-icon' ) ) ? sanitize_html_class( get_theme_mod( 'festive-set-search-icon' ) ) : sanitize_html_class( 'festive-search-icon-arrow' ); ?>">
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search&hellip;', 'placeholder', 'festive' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Search for:', 'label', 'festive' ); ?>" />
	</label>
	<input type="submit" class="search-submit" value="" />
	<div class="clearboth"></div>
</form>