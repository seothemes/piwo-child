<?php
/**
 *
 * Template Name: Blogs Page
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

<div class="classic page-bg-color <?php echo esc_attr($class);?> <?php echo esc_attr($full_class); ?>">
	<?php if(!$full_pages == true) {
		echo '<div class="row">';
	}
	?>
		<div class="<?php echo esc_attr($col_class);?> blog-content">
			<?php
			the_content();
			
			?>
		</div>

<!-- Post Section Begin -->
<!-- Main  container -->
<div class="main-sect-cont container">
<!-- Filter Begin -->
  <section class="second-cont">
    <div class="container">
    <a href="#" class="grdnt-btn" data-slug="post">
      <button >All</button></a>
      <a href="#" class="grdnt-btn tipo-cat" data-slug="white_papers">
      <button >Costumer Engagement</button></a>
      <a href="#" class="grdnt-btn" data-slug="e_books">
      <button >Analytics & Insights</button></a>
      <a href="#" class="grdnt-btn" data-slug="infographics">
      <button >Cloud & Hybrid IT</button></a>
      <a href="#" class="grdnt-btn" data-slug="tip_sheets">
      <button >Manades Services</button></a>
    </div>
  </section>
<!-- Filter End -->
<section class="fourth-cont container-fluid">
  <div class="container">
    <div class="row">
<!-- Loop Begin -->
      <?php
        global $post;
        $args = array(
        'posts_per_page' => '6',
        'cat' => "7, 8, 9, 6",
        'order' => 'ASC'
        );

      global $the_query_category;
        $the_query_category = new WP_Query( $args );
        $count = 1;
          if ( $the_query_category->have_posts() ) : while ( $the_query_category->have_posts() ) : $the_query_category->the_post();
      ?>
<!-- Loop End-->
<!-- Looped Content Begin -->
      <div class="col-md-4 col-lg-4">
        <div class="content-cont">
          <div class="img-cont">
          <a href="<?php the_permalink();?>"> <?php the_post_thumbnail('img-full-size');?></a>
          </div>
          <div class="info-cont">
            <div class="date-author-cont"> 
              <div class="date-cont">
                <p><?php the_date(); ?></p>
              </div>
              <div class="author-cont">
                <p><?php the_author(); ?></p>
              </div>
            </div>
            <div class="title-cont">
              <h4><?php the_title(); ?></h4>
            </div>
            <div class="text-cont">
              <p><?php the_content(); ?></p>
            </div>
            <div class="btn-cont">
              <a href="<?php the_permalink();?>">Learn More</a>
            </div>
          </div> <!-- end info container-->
        </div> <!-- end content container -->
      </div>  <!-- end col -4 -->
<!-- Looped content end -->

        <?php $count++; ?>

        <?php endwhile; ?>

        <?php

        wp_reset_query(); ?>
<!-- post navigation -->
        <?php else: ?>

<!-- no posts found -->
        <?php endif; ?>
        
        </div> <!-- row end-->
  </div> <!-- Main container end -->
</section> <!--section container end -->
</div>    <!-- Main Section Cont end -->
<!-- Section 3 End -->
<div class="small-12 <?php echo esc_attr( $blog_class ); ?> columns">
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
    
	<?php if(!$full_pages == true) {
		echo '</div>';
	}
	?>
</div>
<?php endwhile; ?>
<?php get_footer();


