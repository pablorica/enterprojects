<?php
/**
 * Block Name: One Column
 *
 * This is the template that displays the one column block.
 *
 * @param   array $block The block settings and attributes.
 * @param   bool $is_preview True during AJAX preview.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if (!function_exists('get_field')) {
	exit; // Exit if ACF is not enabled
}

$block_style = get_field('bonecolumn_style'); 
$block_color = (get_field('bonecolumn_color') ? get_field('bonecolumn_color') : '#FFFFFF'); 


$body = get_field('bonecolumn_body'); 
$body['classname'] = 'onecolumn';
$body['animation'] = get_field('bonecolumn_animation');

$htmlBody = my_acf_block_column( $body );
if(!$htmlBody) {
	$block_class .= ' d-none d-md-block ';
}

echo '
<section id="'.$block_style['section_id'].'" class="section '.$block_style['section_class'].'" data-color="'.$block_color.'">
  <div id="'.$block_style['container_id'].'" class="container-fluid h-100 d-flex flex-column '.$block_style['container_class'].'">
	<div id="'.$block_style['block_id'].'" class="gblock gblock__onecolumn '.$block_style['block_class'].'" >
			'.$htmlBody.'
	</div>
  </div>
</section>';
?>

