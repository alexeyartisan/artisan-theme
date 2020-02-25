<?php
	$theme_opts = get_option( 'art_opts' );
?>

<footer class="footer">
	<div class="container">
		<?php if( empty( $theme_opts['footer'] ) ): ?>
		Powered by <a href="http://getbootstrap.com/" target="_blank">Bootstrap</a><span class="dot"></span>Made with <i class="fa fa-heart text-danger"></i> by <a href="#" target="_blank">Artisan</a>
		<?php else: ?>
			<?php echo stripslashes_deep( $theme_opts['footer'] ); ?>
		<?php endif; ?>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>