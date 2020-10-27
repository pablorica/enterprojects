<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if (!function_exists('get_field')) {
	exit; // Exit if ACF is not enabled 
}


global $type, $video_url, $video_filed, $video_filem, $args;

if($post_featured = get_field('post_featured')){
	$type 		 = $post_featured['type'];
	$video_url   = $post_featured['video_url']; 
	$video_filem = $post_featured['video_file_mobile']; 
	$video_filed = $post_featured['video_file_desktop']; 
	$args = array(
		'controls' => $post_featured['controls'],
		'autoplay' => $post_featured['autoplay'],
		'loop' 	   => $post_featured['loop'],
		'muted'    => $post_featured['muted'],
	);
}

if($type == 'videofile') {

	//error_log(print_r($video_filem,true));
	//error_log(print_r($video_filed,true));

	$controls = ($args['controls'] ? 'controls' : '');
	$autoplay = ($args['autoplay'] ? 'playsinline autoplay' : '');
	$loop 	  = ($args['loop'] ? 'loop' : '');
	$muted 	  = ($args['muted'] ? 'muted' : '');

	$posterd = '';
	if($posterd_id=$video_filed['poster'])  $posterd = 'poster="'.wp_get_attachment_image($posterd_id, 'medium_large').'"';
	$posterm = $posterd;

	$mp4m   = $mp4d  = ($video_filed['mp4'] ? '<source src="'.$video_filed['mp4'].'" type="video/mp4">' : '');
	$oggm   = $oggd  = ($video_filed['ogg'] ? '<source src="'.$video_filed['ogg'].'" type="video/ogg">' : '');
	$webmm  = $webmd = ($video_filed['webm'] ? '<source src="'.$video_filed['webm'].'" type="video/webm">' : '');

	$mp4m   = ($video_filem['mp4'] ? '<source src="'.$video_filem['mp4'].'" type="video/mp4">' : $mp4m);
	$oggm   = ($video_filem['ogg'] ? '<source src="'.$video_filem['ogg'].'" type="video/ogg">' : $oggm);
	$webmm  = ($video_filem['webm'] ? '<source src="'.$video_filem['webm'].'" type="video/webm">' : $webmm);

	if(!$mp4d)   $mp4d = $mp4m;
	if(!$oggd)   $oggd = $oggm;
	if(!$webmd) $webmd = $webmm;

	$htmlVideo ='
	<video class="d-md-none" '.$controls.' '.$poster.' '.$autoplay.' '.$loop.' '.$muted.'>
	  '.$mp4m.'
	  '.$oggm.'
	  '.$webmm.'
	Your browser does not support the video tag.
	</video>
	 <video class="d-none d-md-block" '.$controls.' '.$poster.' '.$autoplay.' '.$loop.' '.$muted.'>
	  '.$mp4d.'
	  '.$oggd.'
	  '.$webmd.'
	Your browser does not support the video tag.
	</video>';
}
if($type == 'videourl') {
	$htmlVideo = codigo_display_html_video($video_url, $args); 
}
?>


<div class="component_video">
	<?php echo $htmlVideo; ?>
</div>
