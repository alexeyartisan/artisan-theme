<?php

function art_head() {
?>
<style>
	.navbar.navbar-inverse, .card .card-header.bg-primary, .btn-primary {
		background-color: <?php echo get_theme_mod( 'header_bg_color', '#4285f4' ); ?> !important;
	}
</style>
<?php
}