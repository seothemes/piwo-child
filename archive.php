<?php
get_header(); 
$sidebar = 'show';
$blog_class = 'large-with-sidebar';
if(function_exists('get_field')) {
	if(get_field('piwo_archive_sidebar', 'option') == true) {
		$sidebar = 'show';
		$blog_class .= ' sidebar-on';
	} else {
		$sidebar = 'hide';
		$blog_class = 'large-12 large-without-sidebar';
	}
}

?>

<?php 
	if(function_exists('get_field')) {
		$intro_bg = $intro_color = $breadcrumb_bg = $breadcrumb_color = '';
		$intro_bg = get_field('piwo_archive_intro_bg','option');
		$intro_color = get_field('piwo_archive_intro_color', 'option');
		 $breadcrumb_bg = get_field('piwo_archive_breadcrumbs_intro_bg','option');
		$breadcrumb_color = get_field('piwo_archive_breadcrumbs_color', 'option');
	
		echo piwo_intro_section($intro_bg,$intro_color);
		piwo_breadcrumb($breadcrumb_bg,$breadcrumb_color);
	}
?>


<div class="content blog blog-masonry page-padding">
	<div class="row">
	
		<div class="small-12 <?php echo esc_attr( $blog_class ); ?> columns">
		<div class="container go-back">
	          <button onclick="goBack()" class="mb-class">&larr; Go Back</button>
		      </div>
			<div class="blog-post-content">
				
				<div class="grid-sizer"></div>
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/post/content','masonry' );
					endwhile; ?>
			</div>
				<?php the_posts_pagination(array(
	    			'prev_text' => '<div class="previous-page arrow-prev"><i class="fa fa-angle-left"></i></div>',
	    			'next_text' => '<div class="next-page arrow-next"><i class="fa fa-angle-right"></i></div>',
				)); ?>			
				<?php else :
				get_template_part( 'template-parts/post/content', 'none' );
				endif; ?>
		</div>
		<?php if(is_active_sidebar('sidebar-1') && $sidebar == 'show') : ?>
		<div class="small-12 large-sidebar columns">
			<div class="single-post-sidebar">
				<?php get_sidebar(); ?>
			</div>
		</div>
		<?php endif; ?>
	</div>
</div>

<!-- Anexinet Main Form Begin -->
<?php include('form.php'); ?> 
<!-- Anexinet Main Form End -->

<?php get_footer();