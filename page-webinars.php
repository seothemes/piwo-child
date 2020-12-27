<?php
/**
 *
 * Template Name: Webinars Template
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
    <div class="text-cont">
      <!--<h4>Upcoming Events</h4>-->
    </div>

<!-- Events Begin -->
    <?php
      global $post;
      $args = array(
        'posts_per_page' => '1',
        'post_type' => "anxt_events",
        'order' => 'DESC'
        );

      global $the_query_category;
        $the_query_category = new WP_Query( $args );
        $count = 1;
          if ( $the_query_category->have_posts() ) : while ( $the_query_category->have_posts() ) : $the_query_category->the_post();
    ?>  

     <!-- <div class="post-cont">
      <div class="img-cont">
        <?php the_post_thumbnail('img-full-size');?>
      </div>
    <div class="cat-date-cont"> -->
      <!-- <div class="cat-cont">
      <p>LIVE EVENT</p> 
         <p>July, August, September & October dates available!</p> 
       </div> -->
       <!-- <div class="date-cont">
        <p><?php the_field("cmb_event_start");?></p>
      </div> 
    </div>
    <div class="title-cont">
     <a href="<?php the_field("cmb_event_website"); ?>" target="_blank">  <h3><?php the_title(); ?></h3> </a>
    </div>
    <div class="cont-btn">
      <a href="<?php the_field("cmb_event_website");?>" target="_blank" class="btn"> Register Now </a>
    </div>
    <div class="text-cont-2">
      <div class="p-cont">
        <p> <?php the_field("cmb_event_venue"); ?> </p>
      </div>
      <div class="p-cont-2">
        <p><?php the_field("job_position"); ?> </p>
      </div>
    </div>
  </div> -->
  
         <?php $count++; ?>

         <?php endwhile; ?>

         <?php wp_reset_query(); ?> 
<!-- post navigation -->
         <?php else: ?>

<!-- no posts found -->
         <?php endif; ?>

<!-- Events End -->

<!--Webinars-->
<div class="text-cont">
      <h4>Upcoming Webinars</h4>
    </div>
     
     <?php
    global $post;
    $args = array(
      'posts_per_page' => '1',
      'post_type' => "anxt_webinars",
      'order' => 'DESC'
      );

    global $the_query_category;
      $the_query_category = new WP_Query( $args );
      $count = 1;
        if ( $the_query_category->have_posts() ) : while ( $the_query_category->have_posts() ) : $the_query_category->the_post();
  ?> 
    <div class="post-cont">
    <div class="img-cont">
     <?php the_post_thumbnail('img-full-size');?>
    </div>
    <div class="cat-date-cont">
      <div class="cat-cont">
        <p>WEBINAR</p>
      </div>
      <div class="date-cont">
        <p><?php the_field("webinar_date_and_time_start_copy_two");?></p>
      </div>
    </div>
    <div class="title-cont">
     <a href="<?php the_field("webinar_link_copy");?>" target="_blank"> <h3><?php the_title(); ?></h3> </a>
     <div class="d-none-m" style="margin-top: 20px;"> 
      <div style="height: 3px; background: #a4ca53; width: 33%;"></div>  <p style="color: white;font-family: Montserrat; font-weight: 600; margin-top: 8px;"><br><?php the_field('webinar_presenters') ?></p>
      </div>
    </div>
    <div class="orange-btn-itself">
    <a href="<?php the_field("webinar_link_copy");?>" target="_blank"> Register Now </a>
    </div>
    <div class="text-cont-2"> 
       
       <div class="p-cont-2">
        <p><?php the_field("job_position"); ?> </p>
      </div>
    </div>
  </div> 
       <?php 
         $count++;
         endwhile; 
        wp_reset_query(); 
// post navigation 
        else:
// no posts found 
       endif;  ?>
<!-- Webinars End -->


</section>
<!-- Section 3 End -->

<!--Section 4 begins-->
<section class="fourth-cont container-fluid">
  <div class="container">
    <div class="title-cont">
      <h4>Watch on Demand</h4>
     </div>
    <div class="row">
      <?php
        global $post;
        $args = array(
          'posts_per_page' => '60',
          'post_type' => "anxt_webinars",
          'offset' => 1,
          'order' => 'DESC'
          );

        global $the_query_category;
          $the_query_category = new WP_Query( $args );
          $count = 1;
            if ( $the_query_category->have_posts() ) : while (    $the_query_category->have_posts() ) : $the_query_category->the_post();
      ?>

      <div class="col-md-4 col-lg-4 pb-4">
        <div class="content-cont mb-4 ">
          <div class="img-cont">
            <a href="<?php the_permalink();?>"> <?php the_post_thumbnail('square-size');?></a>
           </div>

          <div class="info-cont">
            <div class="date-author-cont"> 
              <div class="date-cont">
                <p><?php the_field("webinar_date_and_time_start"); ?></p>
              </div>
              <!-- <div class="author-cont">
                <p><//?php the_field("webinar_presenters"); ?></p>
              </div> -->
            </div>
            <div class="title-cont">
              <a href="<?php the_permalink();?>"><h4><?php the_title(); ?></h4></a>
            </div>
            <div class="btn-cont">
              <a href="<?php the_permalink();?>">Watch Now</a>
            </div>
           </div> <!-- end info container-->

         </div> <!-- end content container -->
      </div>  <!-- col 4 -->
     

          <?php $count++; ?>

          <?php endwhile; ?>

          <?php

          wp_reset_query(); ?>
<!-- post navigation -->
    <?php else: ?>

<!-- no posts found -->
    <?php endif; ?>
    </div> <!-- row -->
  </div> <!--  container -->
</section> <!-- section -->
<!--Section 4 Ends-->

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