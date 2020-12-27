<?php
/**
 *
 * Template Name: Videos Template page
 *
 * @package      Page Template
 * @author       Luis Rosales <lrosales@anexinet.com>
 * @copyright    Copyright (c) 2018, Anexinet
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 *
 */

	?>

<?php get_header();

$class = $full_pages = $full_class = $col_class = '';
$post_id = get_the_ID();

$vc_enabled = get_post_meta($post_id, '_wpb_vc_js_status', true);
$col_class = 'small-12 columns small-centered';

if($vc_enabled != true) {
	$class = 'page-padding';
}
if(function_exists('get_field')) {
	$full_pages = get_field('piwo_full_pages');
	if($full_pages == true) {
		$full_class = 'piwo-full-pages';
		$col_class = 'full-column';
	}
}



while ( have_posts() ) : the_post(); ?>

<?php
	if(function_exists('get_field')) {
		$intro_bg = $intro_color = $breadcrumb_bg = $breadcrumb_color = '';
		if(get_field('piwo_intro_section') == 'default') {
			$intro_bg = get_field('piwo_page_intro_bg','option');
			$intro_color = get_field('piwo_page_intro_color', 'option');
		}
		if(get_field('piwo_show_breadcrumbs') == 'default') {
			$breadcrumb_bg = get_field('piwo_page_breadcrumbs_intro_bg','option');
			$breadcrumb_color = get_field('piwo_page_breadcrumbs_color', 'option');
		}
		if(get_field('piwo_intro_section') == 'enabled') {
			$intro_bg = get_field('piwo_intro_bg');
			$intro_color = get_field('piwo_intro_text_color');
		}
		if(get_field('piwo_show_breadcrumbs') == 'enabled') {
			$breadcrumb_bg = get_field('piwo_breadcrumbs_bg');
			$breadcrumb_color = get_field('piwo_breadcrumbs_color');
		}
		if((get_field('piwo_page_intro_section','option') && get_field('piwo_intro_section') == 'default') || get_field('piwo_intro_section') == 'enabled') {
			echo piwo_intro_section($intro_bg,$intro_color);
		}
		if((get_field('piwo_page_breadcrumbs','option') && get_field('piwo_show_breadcrumbs') == 'default') || get_field('piwo_show_breadcrumbs') == 'enabled') {
			piwo_breadcrumb($breadcrumb_bg,$breadcrumb_color);
		}
	} else {
		echo piwo_intro_section();
		piwo_breadcrumb();
	}
	?>
	<style>
	.vidyard-lightbox-centering{
		padding-bottom: 56.25% !important;
	}
	</style>

<div class="classic page-bg-color <?php echo esc_attr($class);?> <?php echo esc_attr($full_class); ?>">
	<?php if(!$full_pages == true) { ?>
	<section class="grdnt-jumbo-cont">
  <div class="container">
    <div class="row">
      <div class="jumbotron-cont">
			<h4>	<?php the_field('subtitle_video') ?> </h4>
      </div>
    </div>
  </div> 
</section>
<?php	} ?>
		<div class="<?php echo esc_attr($col_class);?> container blog-content">
		<section class="fourth-cont container-fluid">
  <div class="container">
    <div class="row">
		<?php
			global $post;
			$args = array(
				'posts_per_page' => '-1',
				// 'cat' => "23, 47, 24, 489, 1029",
				'post_type' => 'videos',
				'order' => 'DESC'
				);
				
			global $the_query_category;
				$the_query_category = new WP_Query( $args );
				$count = 1;
					if ( $the_query_category->have_posts() ): 
						while (    $the_query_category->have_posts() ): 
							$the_query_category->the_post();
		?>
      <div class="col-md-6 col-lg-4 pb-4">
        <div class="content-cont mb-4 ">
          <div class="img-cont">
						<script type="text/javascript" async src="https://play.vidyard.com/embed/v4.js"></script>
						<img <?php the_field("video_code_vidyard") ?> />
           </div>
					 <div class="info-cont">
					<h3 class="fs-18 f-w-700"><?php the_field('video_title')?>  </h3>
    			<p class="c-4d4d4d fs-14"><?php the_field('video_description') ?></p>
    				<!-- <div class="cont-btn">
							<a href="#" class="btn">Watch Now</a>	
			  		</div> -->
		  	</div>
         </div> 
      </div>  
      
	
<!--looped content end  -->
		<?php $count++; ?>
		<?php endwhile; ?>
		<?php
			wp_reset_query(); ?>
<!-- post navigation -->
		<?php else: ?>
<!-- no posts found -->
		<?php endif; ?>
	</div> 
	</div> 
</section> 

			<?php
			the_content();
			wp_link_pages( array(
				'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'piwo' ),
				'after'       => '</div>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			) );
			?>
		</div>
		<div class="small-12 columns small-centered blog-content">
			
			<?php
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>
		</div>
	<?php if(!$full_pages == true) {
		echo '</div>';
	}
	?>
</div>
<?php endwhile; ?>
<!-- Anexinet Main Form Begin -->
<?php include('form.php'); ?> 
<!-- Anexinet Main Form End -->
<?php get_footer();




  













