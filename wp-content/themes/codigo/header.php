<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>

	<button
    class="navbar-toggler navbar-toggler__animated"
    type="button"
    data-toggle="collapse"
    data-target="#navbarCollapse"
    aria-controls="navbarCollapse"
    aria-expanded="false"
    aria-label="Toggle navigation"
  >
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>

  <!-- header -->
    <header>
      <nav class="navbar bg-transparent">

	  <?php 
	  $logo_white = '<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 191.7 114.5" style="enable-background:new 0 0 191.7 114.5;" xml:space="preserve">
<style type="text/css">.st0{fill:#FFFFFF;}</style>
<g><g><g>
			<path class="st0" d="M81.6,114.5H33c-9.1,0-16.5-7.2-16.7-16.2C7.2,98,0,90.6,0,81.5V32.9c0-9,7.2-16.4,16.2-16.7
				C16.5,7.2,23.9,0,33,0h48.6c9.2,0,16.7,7.5,16.7,16.7s-7.5,16.7-16.7,16.7H35c-0.8,0-1.5,0.7-1.5,1.5v4c0,0.8,0.7,1.5,1.5,1.5
				h38.5c9.2,0,16.7,7.5,16.7,16.7S82.7,74,73.5,74H35c-0.8,0-1.5,0.7-1.5,1.5v4c0,0.8,0.7,1.5,1.5,1.5h46.6
				c9.2,0,16.7,7.5,16.7,16.7S90.8,114.5,81.6,114.5z M16.7,17.3C8.1,17.3,1,24.3,1,33v48.6c0,8.6,7,15.7,15.7,15.7h0.5v0.5
				c0,8.6,7,15.7,15.7,15.7h48.6c8.6,0,15.7-7,15.7-15.7s-7-15.7-15.7-15.7H35c-1.4,0-2.6-1.1-2.6-2.6v-4c0-1.4,1.2-2.6,2.6-2.6
				h38.5c8.6,0,15.7-7,15.7-15.7s-7-15.7-15.7-15.7H35c-1.4,0-2.6-1.1-2.6-2.6v-4c0-1.4,1.2-2.6,2.6-2.6h46.6
				c8.6,0,15.7-7,15.7-15.7s-7-15.7-15.7-15.7H33c-8.6,0-15.7,7-15.7,15.7v0.5L16.7,17.3L16.7,17.3z"/>
		</g>
		<g>
			<path class="st0" d="M81.6,114.5H32.9l0,0c-7,0-12.7-5.7-12.7-12.7c0-2-1.5-3.5-3.5-3.5C9.7,98.3,4,92.6,4,85.6V28.9
				c0-7,5.7-12.7,12.7-12.7c1.9,0,3.5-1.6,3.5-3.5c0-7,5.7-12.7,12.7-12.7l0,0h48.7c7,0,12.7,5.7,12.7,12.7s-5.7,12.7-12.7,12.7
				H32.9c-2,0-3.5,1.5-3.5,3.5V41c0,1.9,1.6,3.5,3.5,3.5h40.5c7,0,12.7,5.7,12.7,12.7s-5.7,12.7-12.7,12.7H32.9
				c-1.9,0-3.5,1.6-3.5,3.5v12.1c0,1.9,1.6,3.5,3.5,3.5h48.7c7,0,12.7,5.7,12.7,12.7S88.6,114.5,81.6,114.5z M32.9,113.4h48.7
				c1.9,0,3.5-1.6,3.5-3.5s-1.6-3.5-3.5-3.5H32.9c-1.5,0-2.9-0.3-4.2-0.7c0.5,1.4,0.7,2.9,0.7,4.2C29.4,111.8,31,113.4,32.9,113.4z
				 M25.1,103.6c0.2,0.7,0.3,1.4,0.3,2.2c0,2.7,1.5,5.2,3.7,6.5c-0.4-0.7-0.7-1.5-0.7-2.4c0-1.5-0.4-3.2-1-4.8
				C26.5,104.7,25.8,104.2,25.1,103.6z M32.9,105.3h48.7c2.5,0,4.6,2.1,4.6,4.6c0,0.9-0.3,1.7-0.7,2.4c2.2-1.3,3.7-3.7,3.7-6.5
				c0-4.2-3.4-7.6-7.6-7.6H32.9c-4.8,0-8.6-3.9-8.6-8.6V73.4c0-4.8,3.9-8.6,8.6-8.6h40.5c4.2,0,7.6-3.4,7.6-7.6s-3.4-7.6-7.6-7.6
				H32.9c-4.8,0-8.6-3.9-8.6-8.6V24.8c0-4.8,3.9-8.6,8.6-8.6h48.7c4.2,0,7.6-3.4,7.6-7.6c0-2.7-1.5-5.2-3.7-6.5
				c0.4,0.7,0.7,1.5,0.7,2.4c0,2.5-2.1,4.6-4.6,4.6H32.9c-6.4,0-11.6,5.2-11.6,11.6V41c0,6.4,5.2,11.6,11.6,11.6h40.5
				c2.5,0,4.6,2.1,4.6,4.6s-2.1,4.6-4.6,4.6H32.9c-6.4,0-11.6,5.2-11.6,11.6v20.2C21.3,100.1,26.5,105.3,32.9,105.3z M32.9,65.9
				c-4.2,0-7.6,3.4-7.6,7.6v16.2c0,4.2,3.4,7.6,7.6,7.6h48.7c4.8,0,8.6,3.9,8.6,8.6c0,2-0.7,3.9-1.9,5.4c2.9-2.1,4.9-5.6,4.9-9.4
				c0-6.4-5.2-11.6-11.6-11.6H32.9c-2.5,0-4.6-2.1-4.6-4.6V73.4c0-2.5,2.1-4.6,4.6-4.6h40.5c6.4,0,11.6-5.2,11.6-11.6
				s-5.2-11.6-11.6-11.6H32.9c-2.5,0-4.6-2.1-4.6-4.6V28.9c0-2.5,2.1-4.6,4.6-4.6h48.7c6.4,0,11.6-5.2,11.6-11.6
				c0-3.9-1.9-7.3-4.9-9.4c1.2,1.5,1.9,3.4,1.9,5.4c0,4.8-3.9,8.6-8.6,8.6H32.9c-4.2,0-7.6,3.4-7.6,7.6V41c0,4.2,3.4,7.6,7.6,7.6
				h40.5c4.8,0,8.6,3.9,8.6,8.6s-3.9,8.6-8.6,8.6L32.9,65.9L32.9,65.9z M20.6,99.3c0.4,0.7,0.7,1.5,0.7,2.4c0,3.9,1.9,7.3,4.9,9.4
				c-1.2-1.5-1.9-3.4-1.9-5.4C24.3,103.1,22.8,100.7,20.6,99.3z M16.7,97.2c1.6,0,3.1,0.4,4.4,1.2c-0.6-1.5-0.9-3.1-0.9-4.7V73.4
				c0-7,5.7-12.7,12.7-12.7h40.5c2,0,3.5-1.5,3.5-3.5c0-1.9-1.6-3.5-3.5-3.5H32.9c-7,0-12.7-5.7-12.7-12.7V20.8
				c0-1.7,0.3-3.3,0.9-4.7c-1.3,0.8-2.8,1.2-4.4,1.2c-1.9,0-3.5,1.6-3.5,3.5v72.9C13.2,95.6,14.8,97.2,16.7,97.2z M12.8,18.4
				c-2.2,1.3-3.7,3.7-3.7,6.5v64.8c0,2.7,1.5,5.2,3.7,6.5c-0.4-0.7-0.7-1.5-0.7-2.4v-73C12.1,19.9,12.4,19.1,12.8,18.4z M10,19.4
				c-3,2.1-4.9,5.6-4.9,9.5v56.7c0,3.9,1.9,7.3,4.9,9.4c-1.2-1.5-1.9-3.4-1.9-5.4V24.8C8.1,22.8,8.8,20.9,10,19.4z M26.2,3.2
				c-2.9,2.1-4.9,5.6-4.9,9.4c0,0.9-0.3,1.7-0.7,2.4c2.2-1.3,3.7-3.7,3.7-6.5C24.3,6.6,25,4.7,26.2,3.2z M29.1,2.2
				c-2.2,1.3-3.7,3.7-3.7,6.5c0,0.8-0.1,1.5-0.3,2.2c0.7-0.5,1.4-1,2.2-1.4c0.7-1.6,1-3.3,1-4.8C28.4,3.7,28.6,2.9,29.1,2.2z
				 M32.9,1.1c-2,0-3.5,1.5-3.5,3.5c0,1.4-0.2,2.8-0.7,4.2c1.3-0.5,2.8-0.7,4.2-0.7h48.7c1.9,0,3.5-1.6,3.5-3.5c0-2-1.5-3.5-3.5-3.5
				C81.6,1.1,32.9,1.1,32.9,1.1z"/>
		</g>
		<path class="st0" d="M185.3,31.3c-0.5,0-1,0.4-1,1c0,0.6,0.4,1,1,1h3.8c0.5,0,1-0.4,1-1c0-0.3,0.3-0.6,0.6-0.6c0.5,0,1-0.4,1-1
			v-1.3c0-0.5-0.4-1-1-1c-0.3,0-0.6-0.3-0.6-0.6c0-0.5-0.4-1-1-1H186c-0.3,0-0.6-0.3-0.6-0.6V25c0-0.3,0.3-0.6,0.6-0.6h3.8
			c0.5,0,1-0.4,1-1c0-0.5-0.4-1-1-1H186c-0.5,0-1,0.4-1,1c0,0.3-0.3,0.6-0.6,0.6c-0.5,0-1,0.4-1,1v1.3c0,0.5,0.4,1,1,1
			c0.3,0,0.6,0.3,0.6,0.6c0,0.5,0.4,1,1,1h3.1c0.3,0,0.6,0.3,0.6,0.6v1.3c0,0.3-0.3,0.6-0.6,0.6L185.3,31.3L185.3,31.3z M176.7,30.8
			c0,0.5,0.4,1,1,1c0.3,0,0.6,0.3,0.6,0.6c0,0.5,0.4,1,1,1h2.3c0.5,0,1-0.4,1-1s-0.4-1-1-1h-2.3c-0.3,0-0.6-0.3-0.6-0.6V25
			c0-0.3,0.3-0.6,0.6-0.6h2.3c0.5,0,1-0.4,1-1c0-0.5-0.4-1-1-1h-2.3c-0.3,0-0.6-0.3-0.6-0.6v-1.5c0-0.5-0.4-1-1-1c-0.5,0-1,0.4-1,1
			V22c0,0.3-0.3,0.6-0.6,0.6h-0.8c-0.5,0-1,0.4-1,1c0,0.5,0.4,1,1,1h0.8c0.3,0,0.6,0.3,0.6,0.6V30.8z M165.5,30.8c0,0.5,0.4,1,1,1
			c0.3,0,0.6,0.3,0.6,0.6c0,0.5,0.4,1,1,1h3.8c0.5,0,1-0.4,1-1s-0.4-1-1-1H168c-0.3,0-0.6-0.3-0.6-0.6V25c0-0.3,0.3-0.6,0.6-0.6h3.8
			c0.5,0,1-0.4,1-1c0-0.5-0.4-1-1-1H168c-0.5,0-1,0.4-1,1c0,0.3-0.3,0.6-0.6,0.6c-0.5,0-1,0.4-1,1v5.8H165.5z M154.4,30.8
			c0,0.5,0.4,1,1,1c0.3,0,0.6,0.3,0.6,0.6c0,0.5,0.4,1,1,1h4.6c0.5,0,1-0.4,1-1s-0.4-1-1-1H157c-0.3,0-0.6-0.3-0.6-0.6v-1.3
			c0-0.3,0.3-0.6,0.6-0.6h3.8c0.5,0,1-0.4,1-1c0-0.3,0.3-0.6,0.6-0.6c0.5,0,1-0.4,1-1V25c0-0.5-0.4-1-1-1c-0.3,0-0.6-0.3-0.6-0.6
			c0-0.5-0.4-1-1-1H157c-0.5,0-1,0.4-1,1c0,0.3-0.3,0.6-0.6,0.6c-0.5,0-1,0.4-1,1V30.8z M156.9,26.9c-0.3,0-0.6-0.3-0.6-0.6V25
			c0-0.3,0.3-0.6,0.6-0.6h3.8c0.3,0,0.6,0.3,0.6,0.6v1.3c0,0.3-0.3,0.6-0.6,0.6H156.9z M149.8,36.9c0,0.5,0.4,1,1,1c0.5,0,1-0.4,1-1
			V23.5c0-0.5-0.4-1-1-1c-0.5,0-1,0.4-1,1V36.9z M149.8,19.7c0,0.5,0.4,1,1,1c0.5,0,1-0.4,1-1v-0.8c0-0.5-0.4-1-1-1
			c-0.5,0-1,0.4-1,1V19.7z M140.8,31.3c-0.3,0-0.6-0.3-0.6-0.6V25c0-0.3,0.3-0.6,0.6-0.6h3.8c0.3,0,0.6,0.3,0.6,0.6v5.8
			c0,0.3-0.3,0.6-0.6,0.6h-3.8V31.3z M138.3,30.8c0,0.5,0.4,1,1,1c0.3,0,0.6,0.3,0.6,0.6c0,0.5,0.4,1,1,1h3.8c0.5,0,1-0.4,1-1
			c0-0.3,0.3-0.6,0.6-0.6c0.5,0,1-0.4,1-1V25c0-0.5-0.4-1-1-1c-0.3,0-0.6-0.3-0.6-0.6c0-0.5-0.4-1-1-1h-3.8c-0.5,0-1,0.4-1,1
			c0,0.3-0.3,0.6-0.6,0.6c-0.5,0-1,0.4-1,1V30.8z M130.4,32.3c0,0.5,0.4,1,1,1c0.5,0,1-0.4,1-1V25c0-0.3,0.3-0.6,0.6-0.6h3.1
			c0.5,0,1-0.4,1-1c0-0.5-0.4-1-1-1H133c-0.5,0-1,0.4-1,1c0,0.3-0.3,0.6-0.6,0.6c-0.5,0-1,0.4-1,1V32.3z M120.7,25.4
			c-0.3,0-0.6-0.3-0.6-0.6V22c0-0.3,0.3-0.6,0.6-0.6h5.4c0.3,0,0.6,0.3,0.6,0.6v2.9c0,0.3-0.3,0.6-0.6,0.6h-5.4V25.4z M118.2,32.3
			c0,0.5,0.4,1,1,1c0.5,0,1-0.4,1-1v-4.4c0-0.3,0.3-0.6,0.6-0.6h5.4c0.5,0,1-0.4,1-1c0-0.3,0.3-0.6,0.6-0.6c0.5,0,1-0.4,1-1V22
			c0-0.5-0.4-1-1-1c-0.3,0-0.6-0.3-0.6-0.6c0-0.5-0.4-1-1-1h-6.9c-0.5,0-1,0.4-1,1L118.2,32.3L118.2,32.3z"/>
		<path class="st0" d="M158.8,13c0,0.5,0.4,1,1,1c0.5,0,1-0.4,1-1V5.7c0-0.3,0.3-0.6,0.6-0.6h3.1c0.5,0,1-0.4,1-1c0-0.5-0.4-1-1-1
			h-3.1c-0.5,0-1,0.4-1,1c0,0.3-0.3,0.6-0.6,0.6c-0.5,0-1,0.4-1,1V13z M148.1,11.5c0,0.5,0.4,1,1,1c0.3,0,0.6,0.3,0.6,0.6
			c0,0.5,0.4,1,1,1h4.6c0.5,0,1-0.4,1-1s-0.4-1-1-1h-4.6c-0.3,0-0.6-0.3-0.6-0.6v-1.3c0-0.3,0.3-0.6,0.6-0.6h3.8c0.5,0,1-0.4,1-1
			c0-0.3,0.3-0.6,0.6-0.6c0.5,0,1-0.4,1-1V5.7c0-0.5-0.4-1-1-1c-0.3,0-0.6-0.3-0.6-0.6c0-0.5-0.4-1-1-1h-3.8c-0.5,0-1,0.4-1,1
			c0,0.3-0.3,0.6-0.6,0.6c-0.5,0-1,0.4-1,1V11.5z M150.6,7.6c-0.3,0-0.6-0.3-0.6-0.6V5.7c0-0.3,0.3-0.6,0.6-0.6h3.8
			c0.3,0,0.6,0.3,0.6,0.6V7c0,0.3-0.3,0.6-0.6,0.6H150.6z M140.8,11.5c0,0.5,0.4,1,1,1c0.3,0,0.6,0.3,0.6,0.6c0,0.5,0.4,1,1,1h2.3
			c0.5,0,1-0.4,1-1s-0.4-1-1-1h-2.3c-0.3,0-0.6-0.3-0.6-0.6V5.7c0-0.3,0.3-0.6,0.6-0.6h2.3c0.5,0,1-0.4,1-1c0-0.5-0.4-1-1-1h-2.3
			c-0.3,0-0.6-0.3-0.6-0.6V1.1c0-0.5-0.4-1-1-1s-1,0.4-1,1v1.5c0,0.3-0.3,0.6-0.6,0.6h-0.8c-0.5,0-1,0.4-1,1c0,0.5,0.4,1,1,1h0.8
			c0.3,0,0.6,0.3,0.6,0.6V11.5L140.8,11.5z M128.1,13c0,0.5,0.4,1,1,1c0.5,0,1-0.4,1-1V5.7c0-0.3,0.3-0.6,0.6-0.6h3.8
			c0.3,0,0.6,0.3,0.6,0.6V13c0,0.5,0.4,1,1,1c0.5,0,1-0.4,1-1V5.7c0-0.5-0.4-1-1-1c-0.3,0-0.6-0.3-0.6-0.6c0-0.5-0.4-1-1-1h-5.4
			c-0.5,0-1,0.4-1,1L128.1,13L128.1,13z M118.2,13c0,0.5,0.4,1,1,1h6.1c0.5,0,1-0.4,1-1s-0.4-1-1-1h-4.6c-0.3,0-0.6-0.3-0.6-0.6V8.6
			c0-0.3,0.3-0.6,0.6-0.6h3.8c0.5,0,1-0.4,1-1c0-0.5-0.4-1-1-1h-3.8c-0.3,0-0.6-0.3-0.6-0.6V2.7c0-0.3,0.3-0.6,0.6-0.6h4.6
			c0.5,0,1-0.4,1-1c0-0.5-0.4-1-1-1h-6.1c-0.5,0-1,0.4-1,1V13z"/>
	</g></g></svg>'; 
	
	$logo_brown = '<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	viewBox="0 0 191.7 114.5" style="enable-background:new 0 0 191.7 114.5;" xml:space="preserve">
<style type="text/css">
   .st0{fill:#70634A;}
   .st1{fill:#614F25;}
</style>
<path class="st0" d="M81.6,114.5H33c-9.1,0-16.5-7.2-16.7-16.2C7.2,98,0,90.6,0,81.5V32.9c0-9,7.2-16.4,16.2-16.7
   C16.5,7.2,23.9,0,33,0h48.6c9.2,0,16.7,7.5,16.7,16.7s-7.5,16.7-16.7,16.7H35c-0.8,0-1.5,0.7-1.5,1.5v4c0,0.8,0.7,1.5,1.5,1.5h38.5
   c9.2,0,16.7,7.5,16.7,16.7S82.7,74,73.5,74H35c-0.8,0-1.5,0.7-1.5,1.5v4c0,0.8,0.7,1.5,1.5,1.5h46.6c9.2,0,16.7,7.5,16.7,16.7
   S90.8,114.5,81.6,114.5z M16.7,17.3C8.1,17.3,1,24.3,1,33v48.6c0,8.6,7,15.7,15.7,15.7h0.5v0.5c0,8.6,7,15.7,15.7,15.7h48.6
   c8.6,0,15.7-7,15.7-15.7s-7-15.7-15.7-15.7H35c-1.4,0-2.6-1.1-2.6-2.6v-4c0-1.4,1.2-2.6,2.6-2.6h38.5c8.6,0,15.7-7,15.7-15.7
   s-7-15.7-15.7-15.7H35c-1.4,0-2.6-1.1-2.6-2.6v-4c0-1.4,1.2-2.6,2.6-2.6h46.6c8.6,0,15.7-7,15.7-15.7s-7-15.7-15.7-15.7H33
   c-8.6,0-15.7,7-15.7,15.7v0.5L16.7,17.3L16.7,17.3z"/>
<path class="st0" d="M81.6,114.5H32.9l0,0c-7,0-12.7-5.7-12.7-12.7c0-2-1.5-3.5-3.5-3.5C9.7,98.3,4,92.6,4,85.6V28.9
   c0-7,5.7-12.7,12.7-12.7c1.9,0,3.5-1.6,3.5-3.5c0-7,5.7-12.7,12.7-12.7l0,0h48.7c7,0,12.7,5.7,12.7,12.7s-5.7,12.7-12.7,12.7H32.9
   c-2,0-3.5,1.5-3.5,3.5V41c0,1.9,1.6,3.5,3.5,3.5h40.5c7,0,12.7,5.7,12.7,12.7s-5.7,12.7-12.7,12.7H32.9c-1.9,0-3.5,1.6-3.5,3.5v12.1
   c0,1.9,1.6,3.5,3.5,3.5h48.7c7,0,12.7,5.7,12.7,12.7S88.6,114.5,81.6,114.5z M32.9,113.4h48.7c1.9,0,3.5-1.6,3.5-3.5
   s-1.6-3.5-3.5-3.5H32.9c-1.5,0-2.9-0.3-4.2-0.7c0.5,1.4,0.7,2.9,0.7,4.2C29.4,111.8,31,113.4,32.9,113.4z M25.1,103.6
   c0.2,0.7,0.3,1.4,0.3,2.2c0,2.7,1.5,5.2,3.7,6.5c-0.4-0.7-0.7-1.5-0.7-2.4c0-1.5-0.4-3.2-1-4.8C26.5,104.7,25.8,104.2,25.1,103.6z
	M32.9,105.3h48.7c2.5,0,4.6,2.1,4.6,4.6c0,0.9-0.3,1.7-0.7,2.4c2.2-1.3,3.7-3.7,3.7-6.5c0-4.2-3.4-7.6-7.6-7.6H32.9
   c-4.8,0-8.6-3.9-8.6-8.6V73.4c0-4.8,3.9-8.6,8.6-8.6h40.5c4.2,0,7.6-3.4,7.6-7.6s-3.4-7.6-7.6-7.6H32.9c-4.8,0-8.6-3.9-8.6-8.6V24.8
   c0-4.8,3.9-8.6,8.6-8.6h48.7c4.2,0,7.6-3.4,7.6-7.6c0-2.7-1.5-5.2-3.7-6.5c0.4,0.7,0.7,1.5,0.7,2.4c0,2.5-2.1,4.6-4.6,4.6H32.9
   c-6.4,0-11.6,5.2-11.6,11.6V41c0,6.4,5.2,11.6,11.6,11.6h40.5c2.5,0,4.6,2.1,4.6,4.6s-2.1,4.6-4.6,4.6H32.9
   c-6.4,0-11.6,5.2-11.6,11.6v20.2C21.3,100.1,26.5,105.3,32.9,105.3z M32.9,65.9c-4.2,0-7.6,3.4-7.6,7.6v16.2c0,4.2,3.4,7.6,7.6,7.6
   h48.7c4.8,0,8.6,3.9,8.6,8.6c0,2-0.7,3.9-1.9,5.4c2.9-2.1,4.9-5.6,4.9-9.4c0-6.4-5.2-11.6-11.6-11.6H32.9c-2.5,0-4.6-2.1-4.6-4.6
   V73.4c0-2.5,2.1-4.6,4.6-4.6h40.5c6.4,0,11.6-5.2,11.6-11.6s-5.2-11.6-11.6-11.6H32.9c-2.5,0-4.6-2.1-4.6-4.6V28.9
   c0-2.5,2.1-4.6,4.6-4.6h48.7c6.4,0,11.6-5.2,11.6-11.6c0-3.9-1.9-7.3-4.9-9.4c1.2,1.5,1.9,3.4,1.9,5.4c0,4.8-3.9,8.6-8.6,8.6H32.9
   c-4.2,0-7.6,3.4-7.6,7.6V41c0,4.2,3.4,7.6,7.6,7.6h40.5c4.8,0,8.6,3.9,8.6,8.6s-3.9,8.6-8.6,8.6L32.9,65.9L32.9,65.9z M20.6,99.3
   c0.4,0.7,0.7,1.5,0.7,2.4c0,3.9,1.9,7.3,4.9,9.4c-1.2-1.5-1.9-3.4-1.9-5.4C24.3,103.1,22.8,100.7,20.6,99.3z M16.7,97.2
   c1.6,0,3.1,0.4,4.4,1.2c-0.6-1.5-0.9-3.1-0.9-4.7V73.4c0-7,5.7-12.7,12.7-12.7h40.5c2,0,3.5-1.5,3.5-3.5c0-1.9-1.6-3.5-3.5-3.5H32.9
   c-7,0-12.7-5.7-12.7-12.7V20.8c0-1.7,0.3-3.3,0.9-4.7c-1.3,0.8-2.8,1.2-4.4,1.2c-1.9,0-3.5,1.6-3.5,3.5v72.9
   C13.2,95.6,14.8,97.2,16.7,97.2z M12.8,18.4c-2.2,1.3-3.7,3.7-3.7,6.5v64.8c0,2.7,1.5,5.2,3.7,6.5c-0.4-0.7-0.7-1.5-0.7-2.4v-73
   C12.1,19.9,12.4,19.1,12.8,18.4z M10,19.4c-3,2.1-4.9,5.6-4.9,9.5v56.7c0,3.9,1.9,7.3,4.9,9.4c-1.2-1.5-1.9-3.4-1.9-5.4V24.8
   C8.1,22.8,8.8,20.9,10,19.4z M26.2,3.2c-2.9,2.1-4.9,5.6-4.9,9.4c0,0.9-0.3,1.7-0.7,2.4c2.2-1.3,3.7-3.7,3.7-6.5
   C24.3,6.6,25,4.7,26.2,3.2z M29.1,2.2c-2.2,1.3-3.7,3.7-3.7,6.5c0,0.8-0.1,1.5-0.3,2.2c0.7-0.5,1.4-1,2.2-1.4c0.7-1.6,1-3.3,1-4.8
   C28.4,3.7,28.6,2.9,29.1,2.2z M32.9,1.1c-2,0-3.5,1.5-3.5,3.5c0,1.4-0.2,2.8-0.7,4.2c1.3-0.5,2.8-0.7,4.2-0.7h48.7
   c1.9,0,3.5-1.6,3.5-3.5c0-2-1.5-3.5-3.5-3.5C81.6,1.1,32.9,1.1,32.9,1.1z"/>
<path class="st1" d="M185.3,31.3c-0.5,0-1,0.4-1,1c0,0.6,0.4,1,1,1h3.8c0.5,0,1-0.4,1-1c0-0.3,0.3-0.6,0.6-0.6c0.5,0,1-0.4,1-1v-1.3
   c0-0.5-0.4-1-1-1c-0.3,0-0.6-0.3-0.6-0.6c0-0.5-0.4-1-1-1H186c-0.3,0-0.6-0.3-0.6-0.6V25c0-0.3,0.3-0.6,0.6-0.6h3.8c0.5,0,1-0.4,1-1
   c0-0.5-0.4-1-1-1H186c-0.5,0-1,0.4-1,1c0,0.3-0.3,0.6-0.6,0.6c-0.5,0-1,0.4-1,1v1.3c0,0.5,0.4,1,1,1c0.3,0,0.6,0.3,0.6,0.6
   c0,0.5,0.4,1,1,1h3.1c0.3,0,0.6,0.3,0.6,0.6v1.3c0,0.3-0.3,0.6-0.6,0.6L185.3,31.3L185.3,31.3z M176.7,30.8c0,0.5,0.4,1,1,1
   c0.3,0,0.6,0.3,0.6,0.6c0,0.5,0.4,1,1,1h2.3c0.5,0,1-0.4,1-1c0-0.6-0.4-1-1-1h-2.3c-0.3,0-0.6-0.3-0.6-0.6V25c0-0.3,0.3-0.6,0.6-0.6
   h2.3c0.5,0,1-0.4,1-1c0-0.5-0.4-1-1-1h-2.3c-0.3,0-0.6-0.3-0.6-0.6v-1.5c0-0.5-0.4-1-1-1c-0.5,0-1,0.4-1,1V22c0,0.3-0.3,0.6-0.6,0.6
   h-0.8c-0.5,0-1,0.4-1,1c0,0.5,0.4,1,1,1h0.8c0.3,0,0.6,0.3,0.6,0.6V30.8z M165.5,30.8c0,0.5,0.4,1,1,1c0.3,0,0.6,0.3,0.6,0.6
   c0,0.5,0.4,1,1,1h3.8c0.5,0,1-0.4,1-1c0-0.6-0.4-1-1-1H168c-0.3,0-0.6-0.3-0.6-0.6V25c0-0.3,0.3-0.6,0.6-0.6h3.8c0.5,0,1-0.4,1-1
   c0-0.5-0.4-1-1-1H168c-0.5,0-1,0.4-1,1c0,0.3-0.3,0.6-0.6,0.6c-0.5,0-1,0.4-1,1v5.8H165.5z M154.4,30.8c0,0.5,0.4,1,1,1
   c0.3,0,0.6,0.3,0.6,0.6c0,0.5,0.4,1,1,1h4.6c0.5,0,1-0.4,1-1c0-0.6-0.4-1-1-1H157c-0.3,0-0.6-0.3-0.6-0.6v-1.3
   c0-0.3,0.3-0.6,0.6-0.6h3.8c0.5,0,1-0.4,1-1c0-0.3,0.3-0.6,0.6-0.6c0.5,0,1-0.4,1-1V25c0-0.5-0.4-1-1-1c-0.3,0-0.6-0.3-0.6-0.6
   c0-0.5-0.4-1-1-1H157c-0.5,0-1,0.4-1,1c0,0.3-0.3,0.6-0.6,0.6c-0.5,0-1,0.4-1,1V30.8z M156.9,26.9c-0.3,0-0.6-0.3-0.6-0.6V25
   c0-0.3,0.3-0.6,0.6-0.6h3.8c0.3,0,0.6,0.3,0.6,0.6v1.3c0,0.3-0.3,0.6-0.6,0.6H156.9z M149.8,36.9c0,0.5,0.4,1,1,1c0.5,0,1-0.4,1-1
   V23.5c0-0.5-0.4-1-1-1c-0.5,0-1,0.4-1,1V36.9z M149.8,19.7c0,0.5,0.4,1,1,1c0.5,0,1-0.4,1-1v-0.8c0-0.5-0.4-1-1-1c-0.5,0-1,0.4-1,1
   V19.7z M140.8,31.3c-0.3,0-0.6-0.3-0.6-0.6V25c0-0.3,0.3-0.6,0.6-0.6h3.8c0.3,0,0.6,0.3,0.6,0.6v5.8c0,0.3-0.3,0.6-0.6,0.6h-3.8
   V31.3z M138.3,30.8c0,0.5,0.4,1,1,1c0.3,0,0.6,0.3,0.6,0.6c0,0.5,0.4,1,1,1h3.8c0.5,0,1-0.4,1-1c0-0.3,0.3-0.6,0.6-0.6
   c0.5,0,1-0.4,1-1V25c0-0.5-0.4-1-1-1c-0.3,0-0.6-0.3-0.6-0.6c0-0.5-0.4-1-1-1h-3.8c-0.5,0-1,0.4-1,1c0,0.3-0.3,0.6-0.6,0.6
   c-0.5,0-1,0.4-1,1V30.8z M130.4,32.3c0,0.5,0.4,1,1,1c0.5,0,1-0.4,1-1V25c0-0.3,0.3-0.6,0.6-0.6h3.1c0.5,0,1-0.4,1-1
   c0-0.5-0.4-1-1-1H133c-0.5,0-1,0.4-1,1c0,0.3-0.3,0.6-0.6,0.6c-0.5,0-1,0.4-1,1V32.3z M120.7,25.4c-0.3,0-0.6-0.3-0.6-0.6V22
   c0-0.3,0.3-0.6,0.6-0.6h5.4c0.3,0,0.6,0.3,0.6,0.6v2.9c0,0.3-0.3,0.6-0.6,0.6h-5.4V25.4z M118.2,32.3c0,0.5,0.4,1,1,1
   c0.5,0,1-0.4,1-1v-4.4c0-0.3,0.3-0.6,0.6-0.6h5.4c0.5,0,1-0.4,1-1c0-0.3,0.3-0.6,0.6-0.6c0.5,0,1-0.4,1-1V22c0-0.5-0.4-1-1-1
   c-0.3,0-0.6-0.3-0.6-0.6c0-0.5-0.4-1-1-1h-6.9c-0.5,0-1,0.4-1,1L118.2,32.3L118.2,32.3z"/>
<path class="st1" d="M158.8,13c0,0.5,0.4,1,1,1c0.5,0,1-0.4,1-1V5.7c0-0.3,0.3-0.6,0.6-0.6h3.1c0.5,0,1-0.4,1-1c0-0.5-0.4-1-1-1
   h-3.1c-0.5,0-1,0.4-1,1c0,0.3-0.3,0.6-0.6,0.6c-0.5,0-1,0.4-1,1V13z M148.1,11.5c0,0.5,0.4,1,1,1c0.3,0,0.6,0.3,0.6,0.6
   c0,0.5,0.4,1,1,1h4.6c0.5,0,1-0.4,1-1s-0.4-1-1-1h-4.6c-0.3,0-0.6-0.3-0.6-0.6v-1.3c0-0.3,0.3-0.6,0.6-0.6h3.8c0.5,0,1-0.4,1-1
   c0-0.3,0.3-0.6,0.6-0.6c0.5,0,1-0.4,1-1V5.7c0-0.5-0.4-1-1-1c-0.3,0-0.6-0.3-0.6-0.6c0-0.5-0.4-1-1-1h-3.8c-0.5,0-1,0.4-1,1
   c0,0.3-0.3,0.6-0.6,0.6c-0.5,0-1,0.4-1,1V11.5z M150.6,7.6c-0.3,0-0.6-0.3-0.6-0.6V5.7c0-0.3,0.3-0.6,0.6-0.6h3.8
   c0.3,0,0.6,0.3,0.6,0.6V7c0,0.3-0.3,0.6-0.6,0.6H150.6z M140.8,11.5c0,0.5,0.4,1,1,1c0.3,0,0.6,0.3,0.6,0.6c0,0.5,0.4,1,1,1h2.3
   c0.5,0,1-0.4,1-1s-0.4-1-1-1h-2.3c-0.3,0-0.6-0.3-0.6-0.6V5.7c0-0.3,0.3-0.6,0.6-0.6h2.3c0.5,0,1-0.4,1-1c0-0.5-0.4-1-1-1h-2.3
   c-0.3,0-0.6-0.3-0.6-0.6V1.1c0-0.5-0.4-1-1-1s-1,0.4-1,1v1.5c0,0.3-0.3,0.6-0.6,0.6h-0.8c-0.5,0-1,0.4-1,1c0,0.5,0.4,1,1,1h0.8
   c0.3,0,0.6,0.3,0.6,0.6V11.5L140.8,11.5z M128.1,13c0,0.5,0.4,1,1,1c0.5,0,1-0.4,1-1V5.7c0-0.3,0.3-0.6,0.6-0.6h3.8
   c0.3,0,0.6,0.3,0.6,0.6V13c0,0.5,0.4,1,1,1c0.5,0,1-0.4,1-1V5.7c0-0.5-0.4-1-1-1c-0.3,0-0.6-0.3-0.6-0.6c0-0.5-0.4-1-1-1h-5.4
   c-0.5,0-1,0.4-1,1L128.1,13L128.1,13z M118.2,13c0,0.5,0.4,1,1,1h6.1c0.5,0,1-0.4,1-1s-0.4-1-1-1h-4.6c-0.3,0-0.6-0.3-0.6-0.6V8.6
   c0-0.3,0.3-0.6,0.6-0.6h3.8c0.5,0,1-0.4,1-1c0-0.5-0.4-1-1-1h-3.8c-0.3,0-0.6-0.3-0.6-0.6V2.7c0-0.3,0.3-0.6,0.6-0.6h4.6
   c0.5,0,1-0.4,1-1c0-0.5-0.4-1-1-1h-6.1c-0.5,0-1,0.4-1,1V13z"/>
</svg>
';?>

		<?php if ( is_front_page() && is_home() ) : ?>

			<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php echo $logo_white ?></a></h1>

		<?php else : ?>

			<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php echo $logo_white ?></a>

		<?php endif; ?>


        
        
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-wrapper d-flex flex-column">
            <div class="navbar-top">
              <p><a href="mailto:info@enterprojects.net">info@enterprojects.net</a><br/>
              <a href="tel:+66628201936">+66 628201936</a></p>
			</div>
			
			<!-- The WordPress Menu goes here -->
			<?php 
			wp_nav_menu(
				array(
					'theme_location'  => 'header-menu',
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => 'navbar-nav',
					'fallback_cb'     => '',
					'menu_id'         => 'main-menu',
					'depth'           => 2,
					'walker'          => new Codigo_WP_Bootstrap_Navwalker(),
				)
			); 
			?>

			<?php /*

            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="./selected-projects.html">Projects</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./practice.html">Practice</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./journal.html">Journal</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./practice.html#contact">Contact</a>
              </li>
			</ul>

			*/?>
			

            <div class="navbar-bottom">
              <p><a href="https://www.linkedin.com/in/patrick-keane-5601355/" target="_blank">LinkedIn</a><br/>
                <a href="https://www.instagram.com/patrickeane/" target="_blank">Instagram</a></p>
            </div>
          </div>
		</div>
		
      </nav>
    </header>
	<!-- /header -->
