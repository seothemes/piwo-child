<?php
/**
 *
 * Template Name: Events Pages
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
    <h2>News_</h2>
  </div>
   <div class="sub-text-cont">
    <p>We don’t just read the news. We make it. </p>
  </div> 
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

    <!--Webinar-->
<?php
    global $post;
    $args = array(
      'posts_per_page' => '2',
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
        <p><?php the_field("webinar_date_and_time_start");?></p>
      </div>
    </div>
    <div class="title-cont">
     <a href="<?php the_field("webinar_link");?>" target="_blank"> <h3><?php the_title(); ?></h3> </a>
    </div>
    <div class="cont-btn">
    <a href="<?php the_field("webinar_link");?>" class="btn" target="_blank"> Register Now </a>
    </div>
    <div class="text-cont-2">
      <div class="p-cont">
        <p>Presenter: <?php the_field("webinar_presenters"); ?> </p>
      </div>
      <div class="p-cont-2">
        <p><?php the_field("job_position"); ?> </p>
      </div>
    </div>
  </div>
  
        <?php $count++; ?>

        <?php endwhile; ?>

        <?php

        wp_reset_query(); ?>
<!-- post navigation -->
        <?php else: ?>

<!-- no posts found -->
        <?php endif; ?>
<!--Webinar-->

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
        <p>Event</p>
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
        <p><?php the_field("cmb_event_venue"); ?> </p>
      </div>
      <div class="p-cont-2">
        <p><?php the_field("job_position"); ?> </p>
      </div>
    </div>
  </div>
  
        <?php $count++; ?>

        <?php endwhile; ?>

        <?php

        wp_reset_query(); ?>
<!-- post navigation -->
        <?php else: ?>

<!-- no posts found -->
        <?php endif; ?>




</section>
<!-- Section 3 End -->
<!--Section 4 begins-->
<section class="fourth-cont container-fluid">
  <div class="container">
    <!-- Filter Begin -->
<div class="main-sect-cont">
  <section class="second-cont">
    <div class="container cont-btn">
      <a href="#" class="grdnt-btn tipo-cat btn active" data-slug="all">
        All</a>
        <a href="#" class="grdnt-btn btn" data-slug="events">
        Events</a>
      <a href="#" class="grdnt-btn btn" data-slug="articles">
        Articles</a>
      <a href="#" class="grdnt-btn btn" data-slug="press_releases">
        Press Releases</a>
       <a href="#" class="grdnt-btn btn" data-slug="awards">
          Awards</a> 
    </div>
  </section>
<!-- Filter End -->
    <div class="title-cont">
      <h4>Recent News</h4>
     </div>
    <div class="row cont-post_all cont-query">

      <?php
        global $post;
        global $paged;

        if( get_query_var( 'paged' ) )
            $my_page = get_query_var( 'paged' );
          else {
          if( get_query_var( 'page' ) )
            $my_page = get_query_var( 'page' );
          else
            $my_page = 1;
            set_query_var( 'paged', $my_page );
            $paged = $my_page;
          }

        $args = array(
          'posts_per_page' => '6',
          'cat' => "15, 4, 327",
          'order' => 'DESC'
          );

        global $the_query_category;
          $the_query_category = new WP_Query( $args );
          $count = 1;
            if ( $the_query_category->have_posts() ) : while (    $the_query_category->have_posts() ) : $the_query_category->the_post();
      ?>

      <div class="col-md-4 col-lg-4">
        <div class="content-cont">
          <div class="img-cont">
            <a href="<?php the_permalink();?>"> 
            <?php if  (has_post_thumbnail() ) {
                      the_post_thumbnail('square-size'); }
                  else {  
 echo '<img src="' . get_bloginfo( "template_directory" ) . '/assets/images/generic-image.jpg" />'; 
                       }
                ?></a>
           </div>

          <div class="info-cont">
            <div class="date-author-cont"> 
              <div class="date-cont">
                <p><?php the_date(); ?></p>
              </div>
              <div class="date-cont">
                <p><?php the_category(); ?></p>
              </div>
              <!-- <div class="author-cont">
                <p><?php the_author(); ?></p>
              </div> -->
            </div>
            <div class="title-cont">
              <a href="<?php the_permalink();?>"><h4><?php the_title(); ?></h4></a>
            </div>
            <div class="btn-cont">
              <a href="<?php the_permalink();?>">Learn More</a>
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

    <div class="col-md-12">
      <div class="container">
        <?php //wp_pagenavi( array( 'query' => $the_query_category) ); ?> 
          <div class="cont-btn">
            <a class="btn" href="https://www.anexinet.com/blog/category/news/">View More...</a> 
          </div>
      </div>
    </div>

    </div> <!-- row -->


    <div class="row cont-post_events cont-query">
      <?php
        global $post;
        $args = array(
          'posts_per_page' => '6',
          'post_type' => "anxt_events",
          'order' => 'DESC'
          );

        global $the_query_category;
          $the_query_category = new WP_Query( $args );
          $count = 1;
            if ( $the_query_category->have_posts() ) : while (    $the_query_category->have_posts() ) : $the_query_category->the_post();
      ?>

      <div class="col-md-4 col-lg-4">
        <div class="content-cont">
          <div class="img-cont">
            <a href="<?php the_permalink();?>"> <?php if ( has_post_thumbnail() ) {
                    the_post_thumbnail('square-size'); }
                  else {
                    echo '<img src="' . get_bloginfo( "template_directory" ) 
                        . '/assets/images/red-logo.png" />';
                       }
                ?></a>
           </div>

          <div class="info-cont">
            <div class="date-author-cont"> 
              <div class="date-cont">
                <p><?php the_field("cmb_event_start"); ?></p>
              </div>
              <div class="date-cont">
                <p><?php the_category(); ?></p>
              </div>
              <!-- <div class="author-cont">
                <p><?php the_author(); ?></p>
              </div>  -->
            </div>
            <div class="title-cont">
              <a href="<?php the_permalink();?>"><h4><?php the_title(); ?></h4></a>
            </div>
            <div class="btn-cont">
              <a href="<?php the_permalink();?>">Learn More</a>
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

<!-- Articles Begin -->
<div class="row cont-post_articles cont-query">
      <?php
        global $post;
        $args = array(
          'posts_per_page' => '6',
          'cat' => "15",
          'order' => 'DESC'
          );

        global $the_query_category;
          $the_query_category = new WP_Query( $args );
          $count = 1;
            if ( $the_query_category->have_posts() ) : while (    $the_query_category->have_posts() ) : $the_query_category->the_post();
      ?>

      <div class="col-md-4 col-lg-4">
        <div class="content-cont">
          <div class="img-cont">
            <a href="<?php the_permalink();?>"> <?php if  (has_post_thumbnail() ) {
                    the_post_thumbnail('square-size');
                   }
                  else { 
                   
// echo '<img src="' . get_bloginfo( "template_directory" ) . '/assets/images/red-logo.png" />';
                       }
                ?></a>
           </div>

          <div class="info-cont">
            <div class="date-author-cont"> 
              <div class="date-cont">
                <p><?php the_date(); ?></p>
              </div>
              <div class="date-cont">
                <p><?php the_category(); ?></p>
              </div>
              <!-- <div class="author-cont">
                <p><?php the_author(); ?></p>
              </div> -->
            </div>
            <div class="title-cont">
              <a href="<?php the_permalink();?>"><h4><?php the_title(); ?></h4></a>
            </div>
            <div class="btn-cont">
              <a href="<?php the_permalink();?>">Learn More</a>
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

    
    <div class="col-md-12">
      <div class="container">
        <?php //wp_pagenavi( array( 'query' => $the_query_category) ); ?> 
          <div class="cont-btn">
            <a class="btn" href="https://www.anexinet.com/blog/category/articles/">View More...</a> 
          </div>
      </div>
    </div>

    </div> <!-- row -->
<!-- Articles End -->
<!-- Press Releases Begin -->
    <div class="row cont-post_press_releases cont-query">
      <?php
        global $post;
        $args = array(
          'posts_per_page' => '6',
          'cat' => "327",
          'order' => 'DESC'
          );

        global $the_query_category;
          $the_query_category = new WP_Query( $args );
          $count = 1;
            if ( $the_query_category->have_posts() ) : while (    $the_query_category->have_posts() ) : $the_query_category->the_post();
      ?>

      <div class="col-md-4 col-lg-4">
        <div class="content-cont">
          <div class="img-cont">
            <a href="<?php the_permalink();?>"> <?php if ( has_post_thumbnail() ) {
                    echo the_post_thumbnail('square-size'); }
                  else {
                    echo '<img src="' . get_bloginfo( 'template_directory' ) 
                        . '/assets/images/red-logo.png" />';
                       }?></a>
           </div>

          <div class="info-cont">
            <div class="date-author-cont"> 
              <div class="date-cont">
                <p><?php the_date(); ?></p>
              </div>
              <div class="date-cont">
                <p><?php the_category(); ?></p>
              </div>
              <!-- <div class="author-cont">
                <p><?php the_author(); ?></p>
              </div> -->
            </div>
            <div class="title-cont">
              <a href="<?php the_permalink();?>"><h4><?php the_title(); ?></h4></a>
            </div>
            <div class="btn-cont">
              <a href="<?php the_permalink();?>">Learn More</a>
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

   
   <div class="col-md-12">
      <div class="container">
        <?php //wp_pagenavi( array( 'query' => $the_query_category) ); ?> 
          <div class="cont-btn">
            <a class="btn" href="https://www.anexinet.com/blog/category/press-releases/">View More...</a> 
          </div>
      </div>
    </div>

    </div> <!-- row -->
<!-- Press Releases End -->
<!-- Awards Begin -->
<div class="row cont-post_awards cont-query">
      <?php
        global $post;
        $args = array(
          'posts_per_page' => '12',
          'cat' => "493",
          'order' => 'DESC'
          );

        global $the_query_category;
          $the_query_category = new WP_Query( $args );
          $count = 1;
            if ( $the_query_category->have_posts() ) : while (    $the_query_category->have_posts() ) : $the_query_category->the_post();
      ?>

      <div class="col-md-4 col-lg-4">
        <div class="content-cont">
          <div class="img-cont">
             <?php if  (has_post_thumbnail() ) {
                    the_post_thumbnail('square-size');
                   }
                  else {         
                  // echo '<img src="' . get_bloginfo( "template_directory" ) . '/assets/images/red-logo.png" />';
                       }
                ?>
           </div>  <!-- end img-cont -->
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
<!-- Awards End -->

  </div> <!--  container -->
 </section> <!-- section -->
<!--Section 4 Ends-->
 <?php if(!$full_pages == true) {
		    echo '</div>';
	      }
	          ?>
        </div>


<!-- Anexinet Main Form Begin -->
<?php include('form.php'); ?> 
<!-- Anexinet Main Form End -->
</div>
<?php get_footer();