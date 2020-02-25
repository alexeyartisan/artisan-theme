<?php
	$theme_opts = get_option( 'art_opts' );
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title><?php bloginfo( 'name' ); ?> <?php wp_title(); ?></title>

	<?php wp_head(); ?>
</head>

<body>

<nav class="navbar navbar-inverse">
	<div class="container">
		<div class="navbar-header">
			<?php if ( $theme_opts['logo_type'] == 1 ): ?>
				<a class="navbar-brand rippler" href="<?php echo site_url( '/' ); ?>"><?php bloginfo( 'name' ); ?></a>
			<?php else: ?>
				<a class="navbar-brand rippler" href="<?php echo site_url( '/' ); ?>"><img src="<?php echo $theme_opts['logo_img']; ?>" style="max-width: 100%; max-height: 100%; width: auto; height: auto;"></a>
			<?php endif; ?>
			
		</div>
		<div id="navbar" class="collapse navbar-collapse">
            
			<?php
				wp_nav_menu(array(
					'theme_location' => 'primary',
					'container' => false,
					'menu_class' => 'nav navbar-nav'
				));
			?>

			<ul class="nav navbar-nav navbar-right">
				<li><a href="https://twitter.com/<?php echo $theme_opts['twitter']; ?>"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://facebook.com/<?php echo $theme_opts['facebook']; ?>"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://youtube.com/<?php echo $theme_opts['youtube']; ?>"><i class="fa fa-youtube"></i></a></li>
			</ul>
		</div>
	</div>
</nav>