<?php
/**
 *
 * Template Name: Events Pages childs
 *
 * @package      Page Template
 * @author       Luis Rosales <lrosales@anexinet.com>
 * @copyright    Copyright (c) 2018, Anexinet
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 *
 */

	?>
<?php get_header();?>
<!-- Section 1 -->
<section class="main-cont">
  <div class="img-cont">
  </div>
  <div class="main-banner-cont">
  <div class="text-cont">
    <h2>Events</h2>
  </div>
   <!-- <div class="sub-text-cont">
    <p>We don’t just read the news. We make it. </p>
  </div>  -->
  </div>
  </section>
<!-- Section1 -->
<!-- Gradient Jumbotron Module Begin -->
<section class="grdnt-jumbo-cont">
  <div class="container">
    <div class="row">
      <div class="jumbotron-cont">
        <h4>Stay abreast of the latest exciting happenings at Anexinet and learn how we continue to leverage the very latest technologies to help you deliver the best customer experience possible.</h4>
      </div>
    </div>
  </div>
</section>
<!-- Gradient Jumbotron Module End -->
      
<!-- Section 3 Begin -->
<section class="third-cont container">
    <div class="text-cont">
      <h4>Upcoming Events</h4>
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

     <div class="post-cont">
      <div class="img-cont">
        <?php the_post_thumbnail('img-full-size');?>
      </div>
    <div class="cat-date-cont"> 
       <div class="cat-cont">
       <p><?php the_field('kind_of_event') ?></p> 
       
       </div> 
        <div class="date-cont">
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
  </div>  
  
         <?php
         
         $count++; 

          endwhile; 

          wp_reset_query(); 
// post navigation 
          else: 

// no posts found 
          endif; ?>

<!-- Events End -->

<!--Webinars-->
<div class="text-cont">
      <h4>Upcoming Webinars.</h4>
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
     <div class="d-none-m" style="margin-top: 25px;"> 
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
      <h4>Recent Events.</h4>
    </div>

    <div class="row ">
      <?php
        global $post;
        $args = array(
          'posts_per_page' => '9',
          'post_type' => array("anxt_events", "anxt_webinars"),
           'offset' => 2,
          'order' => 'DESC'
          );

        global $the_query_category;
          $the_query_category = new WP_Query( $args );
          $count = 1;
            if ( $the_query_category->have_posts() ) : while (    $the_query_category->have_posts() ) : $the_query_category->the_post();
      ?>

      <div class="col-sm-6 col-md-4 col-lg-4">
        <div class="content-cont">
          <div class="img-cont">
          <?php if (get_post_type() == "anxt_webinars"){  ?>
               <a href="<?php the_permalink()?>"> <?php the_post_thumbnail('square-size') ?> </a>
               <?php   }
                else { ?>
                  <?php the_post_thumbnail('square-size')?>
                <?php  } ?>
           </div>

          <div class="info-cont">
            <div class="date-author-cont"> 
              <div class="date-cont">
                <p><?php the_field("cmb_event_start"); ?></p>
              </div>
            </div>
            <div class="title-cont">
            <?php if (get_post_type() == "anxt_webinars"){  ?>
               <a href="<?php the_permalink()?>" target="_blank"> <h4><?php the_title(); ?></h4> </a>
               <?php   }
                else { ?>
                    <h4><?php the_title(); ?></h4>
                <?php  } ?>
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

   <!-- <div class="col-md-12">
      <div class="container">
        <?php //wp_pagenavi( array( 'query' => $the_query_category) ); ?> 
          <div class="cont-btn">
            <a class="btn" href="https://www.anexinet.com/blog/category/news/">Load More...</a> 
          </div>
      </div>
    </div> -->

    </div> <!-- row -->

  </div> <!--  container -->
 </section> <!-- section -->
<!--Section 4 Ends-->
 <!-- <//?php if(!$full_pages == true) {
		    echo '</div>';
	      }
	          ?>
        </div> -->

<!-- Anexinet Main Form Begin -->
<?php include('form.php'); ?> 
<!-- Anexinet Main Form End -->
</div>
<?php get_footer();