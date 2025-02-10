<?php  
$root_directory = get_template_directory();
get_template_part('partials/head');
?>
<body <?php body_class(); ?>>
	<?php 
		do_action('get_header');
		get_main_header();
	?>
	
	<main class="main 3xl:grid-cols-6 grid grid-cols-2 md:grid-cols-4">
		<?php get_main_template(); ?>
	</main>

	<?php
		do_action('get_footer');
		get_main_footer();
	?>
</body>
</html>