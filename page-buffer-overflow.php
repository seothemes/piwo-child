<?php
/**
 *
 * Template Name: Buffer Overflow Template
 *
 * @package      Page Template
 * @author       Luis Rosales <lrosales@anexinet.com>
 * @copyright    Copyright (c) 2018, Anexinet
 * @license      https://opensource.org/licenses/gpl-2.0.php GNU Public License
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

  <!-- Section 3 Begin -->
<section class="third-cont container">
  <div class="row">
    <div class="img-p-cont">
      <div class="col-md-3 ">
        <div class="img-cont">
          <img src="https://www.anexinet.com/wp-content/uploads/2018/10/Ned-gif.gif" alt="Ned Bellavance"/>
        </div>
      </div>
      <div class="col-md-9">
        <p>Life for Ned Eschaton Bellavance has never been what one would describe as ‘easy.’ Born a younger son in the far western Scottish kingdom of Dál Riata, Ned knew he would have to carve out his own path in life. Always an impetuous youth, Ned quickly developed interest (and quite a bit of skill) with the bow, the blade, and the Microsoft Windows operating system. He ran into trouble towards the time of his traditional betrothal, defying age-old tradition and leading to chaos in the kingdom. He resolved the now-famous crisis with grace, elan, and only a small amount of bribery. Unfortunately, the terms of the peace required that he leave Scotland forever, lest he inadvertently shatter the fragile peace.</p>
      </div>
    </div>
    <div class="img-p-cont">
      <div class="col-md-3 ">
        <div class="img-cont">
          <img src="https://www.anexinet.com/wp-content/uploads/2018/10/Webp.net-gifmaker-10.gif" alt="Ned Bellavance"/>
        </div>
      </div>
      <div class="col-md-9">
        <p>Chris Hayner is a two-time gold medal champion of hog racing. Growing up in rural Albania, Chris developed a penchant for two things: Linux and riding pigs. Following his passion to the states, Chris joined the amateur hog riding league of extraordinary gentlemen (AHRLEG) in 2007, and rode his pride sow, Grimblesnitz, to gold in 2008. Sadly, in 2012, Grimblesnitz met with an untimely death in a freak rickshaw accident amongst the rolling hills of San Francisco. Being in the Bay Area, Chris turned to his second passion of Linux and virtualization technologies, eventually landing an Architect role here at Anexinet.<br><br>Grimblesnitz forever in our hearts, briefly in our stomachs.</p>
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
      'cat' => "19",
      'order' => 'DESC'
      );

    global $the_query_category;
      $the_query_category = new WP_Query( $args );
      $count = 1;
        if ( $the_query_category->have_posts() ) : while ( $the_query_category->have_posts() ) : $the_query_category->the_post();
  ?>
<!-- ends query -->
<!-- begin content -->
    <tr>
      <td><a href="<?php the_permalink();?>"><p><?php the_title(); ?></p></a></td>
      <td><p><?php the_date(); ?></p></td>
      <td><a class="blue" href="<?php the_permalink();?>"><p >Listen Now</p></a> </td>
    </tr>
<!-- ends content -->
 
        <?php $count++; ?>

        <?php endwhile; ?>

        <?php

        wp_reset_query(); ?>
<!-- post navigation -->
        <?php else: ?>

<!-- no posts found -->
        <?php endif; ?>

        </tbody>
</table>
    </div>
  </div>

</section>
<!-- Section 3 End -->


    
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