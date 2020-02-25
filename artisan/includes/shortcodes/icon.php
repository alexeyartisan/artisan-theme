<?php

function art_icon_shortcode( $atts ) {
	return '<i class="fa fa-' . $atts['icon'] . '"></i>';
}