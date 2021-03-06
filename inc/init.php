<?php
/**
* Load SO Bundle Widgets.
*/
if ( class_exists( 'SiteOrigin_Widget' ) ) {
	$so_widgets = array(
		'slider'           => 'slider/slider.php',
		'services'         =>'services/services.php',
		'skill'            =>'skill/skill.php',
		'title'            => 'title/title.php',
		'title-subtitle'   => 'title-subtitle/title-subtitle.php',
		'counter'          => 'counter/counter.php',
		'testimonial'      => 'testimonial/testimonial.php',
		'client'           =>'client/client.php',
		'post'             =>'post/post.php',
		'address'          =>'address/address.php',
		'graph'            => 'graph/graph.php',
		'highlights'       =>'company-highlights/highlights.php',
		'sliding-services' =>'sliding-services/sliding-services.php',
		'tabs'             =>'tabs/tabs.php',
		'contact-ways'     =>'contact-ways/contact_ways.php',
		'hero'             =>'hero/hero.php',
		'form-map'         =>'form-map/form-map.php',
		'download-btn'     =>'download-btn/download-btn.php',
		'services-hover'   =>'services-hover/services-hover.php',
		'advisor-list'     =>'advisor-list/advisor-list.php',
		'faq'              =>'faq/faq.php',
		'spacer'           => 'spacer/spacer.php',
		'contact-details'  =>'contact-details/contact-details.php',
		'point-features'   =>'point-features/point-features.php',
		'youtube-video'    =>'youtube-video/youtube-video.php',
		'cta'              =>'cta/cta.php',
		'banner'           =>'banner/banner.php',
		'random-images'    =>'random-images/random-images.php',
		'progressbar'      =>'progressbar/progressbar.php',
		'gallery'      =>'gallery/gallery.php',
		);
		$temp_dir = get_template_directory();
		foreach ($so_widgets as $key => $value) {
			require $temp_dir . '/inc/so-widgets/'. $value;
		}
}
