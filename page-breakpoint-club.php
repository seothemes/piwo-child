<?php
/**
 *
 * Template Name: The Breakpoint Club Template
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
	
		if(get_field('piwo_intro_section') == 'enabled') {
			$intro_bg = get_field('piwo_intro_bg');
			$intro_color = get_field('piwo_intro_text_color');
		}
	
		if((get_field('piwo_page_intro_section','option') && get_field('piwo_intro_section') == 'default') || get_field('piwo_intro_section') == 'enabled') {
			echo piwo_intro_section($intro_bg,$intro_color);
		}
	
	} else {
		echo piwo_intro_section();
	
	}
	?>


  <!-- Section 3 Begin -->
<section class="third-cont container">
  <div class="row">
    <div class="img-p-cont">
      <div class="col-md-3 ">
        <div class="img-cont">
          <img src="https://www.anexinet.com/wp-content/uploads/2018/10/Dan-Kelley.jpg" alt="Dan-Kelley"/>
        </div>
      </div>
      <div class="col-md-9">
        <p> I've designed and built solutions from desktop to mobile, for both start-ups and enterprises. I'm now a recovering enterprise architect that stays current by engaging with smart people, listening and learning. My goal is to help developers so they can bring better solutions to market faster.</p>
      </div>
    </div>
    <div class="col-md-12">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Date</th>
          <th scope="col">Link</th>
        </tr>
      </thead>
    <tbody>
<!-- begins query -->
  <?php
    global $post;
    $args = array(
      'posts_per_page' => '-1',
      'cat' => "20",
      'order' => 'DESC'
      );

    global $the_query_category;
      $the_query_category = new WP_Query( $args );
      $count = 1;
        if ( $the_query_category->have_posts() ) : while ( $the_query_category->have_posts() ) : $the_query_category->the_post();
  ?>
<!-- ends query -->
<!-- begin looped content -->
<tr>
      <td><a href="<?php the_permalink();?>"><p><?php the_title(); ?></p></a></td>
      <td><p><?php the_date(); ?></p></td>
      <td><a class="blue" href="<?php the_permalink();?>"><p>Listen Now</p></a> </td>
    </tr>
<!-- end looped content -->
<!-- begin count -->
        <?php $count++; ?>

        <?php endwhile; ?>

        <?php

        wp_reset_query(); ?>
<!-- end count -->
<!-- post navigation -->
        <?php else: ?>
<!-- no posts found -->
        <?php endif; ?>
<!-- end if -->
</tbody>
</table>
    </div>
  </div>

</section>
<!-- Section 3 End -->
<!-- Anexinet Main Form Begin -->
<?php include('form.php'); ?> 
<!-- Anexinet Main Form End -->
    
	<?php if(!$full_pages == true) {
		echo '</div>';
	}
	?>
</div>

<?php endwhile; ?>
<?php get_footer();