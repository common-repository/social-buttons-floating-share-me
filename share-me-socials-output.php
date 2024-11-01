<?php

add_filter( 'the_content', 'ca_sms_share_floating_bar_output' );

function ca_sms_share_floating_bar_output( $content ) {
	if( !is_front_page() && !is_archive() ) {
		$ca_encoded_permalink = urlencode( get_permalink() );
		$ca_post_title = str_replace( ' ', '%20', get_the_title() );
		$ca_site_name = get_bloginfo( 'name' );
		// Construct sharing URLs
		$ca_twitterURL = 'https://twitter.com/intent/tweet?text='.$ca_post_title.'&amp;url='.$ca_encoded_permalink.'&amp;via='.$ca_site_name;
		$ca_facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$ca_encoded_permalink;
		$ca_googleplusURL = 'https://plus.google.com/share?url='.$ca_encoded_permalink;

		if ( get_option( 'ca-sms-twitter' ) == 1 ||
			 get_option( 'ca-sms-facebook' ) == 1 ||
			 get_option( 'ca-sms-googleplus' ) == 1 ) {

			$content .= '<div class="ca-share-me-socials">';
			if ( get_option( 'ca-sms-twitter' ) == 1 ) {
				$content .= '<a href="'.$ca_twitterURL.'" class="ca-twitter-share ca-share-me-slide" target="_blank" rel="nofollow"></a>';
			}

			if ( get_option( 'ca-sms-facebook' ) == 1 ) {
				$content .= '<a href="'.$ca_facebookURL.'" class="ca-facebook-share ca-share-me-slide" target="_blank" rel="nofollow"></a>';
			}

			if ( get_option( 'ca-sms-googleplus' ) == 1 ) {
				$content .= '<a href="'.$ca_googleplusURL.'" class="ca-googleplus-share ca-share-me-slide" target="_blank" rel="nofollow"></a>';
			}
			$content.= '</div>';
		}
	}
	return $content;
}
add_action( 'wp_enqueue_scripts', 'ca_sms_enqueue_styles' );
function ca_sms_enqueue_styles() {
	if( !is_front_page() && !is_archive() ) {
		wp_register_style( 'ca-sms-styles-file', plugin_dir_url(__FILE__) . 'assets/css/casms-styles.css', '', '1.0.0', 'all' );
		wp_enqueue_style( 'ca-sms-styles-file' );
	}
}