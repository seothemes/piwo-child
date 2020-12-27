<?php
/**
 *
 * Template Name: Blog Page
 *
 * @package      Page Template
 * @author       Luis Rosales <lrosales@anexinet.com>
 * @copyright    Copyright (c) 2018, Anexinet
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 *
 */

	?>
 <?php get_header(); ?> 

 <style>
   #searchsubmit{
    max-width: 11% !important;
    border: none !important;
   }
   </style>

<!-- Section 1 -->
<section class="main-cont">
  <div class="img-cont">
  </div>
  <div class="main-banner-cont">
  <div class="text-cont">
    <h2>Blog</h2>
      <?php echo do_shortcode("[wpbsearch]"); ?>
  </div>
  <!-- <div class="sub-text-cont">
    <p>Anexinet customers profit from our holistic approach from engaging front-end interactions to dependable back-end solutions, all informed by data-driven insights.</p>
  </div> -->
  </div>
  </section>
<!-- Section1 -->
<!-- Filter Begin -->
<div class="main-sect-cont">
  <section class="second-cont">
    <div class="container cont-btn cont-btn-digital">

      <?php

  $slug_cloud_hybrid_i = 'cloud-hybrid-it';
  $cat_cloud_hybrid_i = get_category_by_slug($slug_cloud_hybrid_i);
  $id_cloud_hybrid_i = $cat_cloud_hybrid_i->term_id;

  $slug_enterprise_mobility = 'enterprise_mobility';
  $cat_enterprise_mobility = get_category_by_slug($slug_enterprise_mobility);
  $id_enterprise_mobility = $cat_enterprise_mobility->term_id;

  $slug_customer_engagement = 'customer-engagement';
  $cat_customer_engagement = get_category_by_slug($slug_customer_engagement);
  $id_customer_engagement = $cat_customer_engagement->term_id;

  $slug_analytics_insights = 'analytics-insights';
  $cat_analytics_insights = get_category_by_slug($slug_analytics_insights);
  $id_analytics_insights = $cat_analytics_insights->term_id;

  $slug_managed_services = 'managed-services';
  $cat_managed_services = get_category_by_slug($slug_managed_services);
  $id_managed_services = $cat_managed_services->term_id;

  ?>

  

      <a href="#" class="grdnt-btn grdnt-btn-all tipo-cat btn active" data-id="<?php echo $id_cloud_hybrid_i .','. $id_enterprise_mobility .','. $id_customer_engagement  .','. $id_analytics_insights .','. $id_managed_services; ?>">
        All</a>
        <a href="#" class="grdnt-btn btn" data-id="<?php echo $id_cloud_hybrid_i; ?>">
      Cloud & Hybrid IT</a>
        <a href="#" class="grdnt-btn btn" data-id="<?php echo $id_enterprise_mobility; ?>">
      Enterprise Mobility</a>
        <a href="#" class="grdnt-btn btn" data-id="<?php echo $id_customer_engagement; ?>">
        Customer Engagement</a>
      <a href="#" class="grdnt-btn btn" data-id="<?php echo $id_analytics_insights; ?>">
      Analytics & Insights</a>
     
      <a href="#" class="grdnt-btn btn" data-id="<?php echo $id_managed_services; ?>">
      Managed Services</a>





      <!-- 
            <a href="#" class="grdnt-btn tipo-cat btn active" data-slug="all">
        All</a>
        <a href="#" class="grdnt-btn btn" data-slug="cloud-hybrid-it">
      Cloud & Hybrid IT</a>
        <a href="#" class="grdnt-btn btn" data-slug="enterprise_mobility">
      Enterprise Mobility</a>
        <a href="#" class="grdnt-btn btn" data-slug="customer-engagement">
        Customer Engagement</a>
      <a href="#" class="grdnt-btn btn" data-slug="analytics-insights">
      Analytics & Insights</a>
     
      <a href="#" class="grdnt-btn btn" data-slug="managed-services">
      Managed Services</a>
      
       
       -->
      
       
    </div>
  </section>
<!-- Filter End -->
<!--Section 4 begins-->
<section class="fourth-cont container-fluid">
  <div class="container">
    <div class="cont-query">
   <div class="row">
      <?php


      
        global $post;


             $args = array(
              'cat' => array($id_cloud_hybrid_i, $id_enterprise_mobility, $id_customer_engagement, $id_analytics_insights, $id_managed_services),
              'posts_per_page' => '9',
              'order' => 'DESC'
              );

/*
        $args = array(
          'posts_per_page' => '30',
          'cat' => "23, 47, 24, 489, 1029",
          'order' => 'DESC', 
          'paged' => $paged
          );
        
  */  
        global $the_query_category;
          $the_query_category = new WP_Query( $args );
          $count = 1;
            if ( $the_query_category->have_posts() ) : while (    $the_query_category->have_posts() ) : $the_query_category->the_post();
      ?>
<!-- looped content begin -->
      <div class="blog-post col-md-4 col-lg-4">
        <div class="content-cont">
          <div class="img-cont">
            <a href="<?php the_permalink();?>"> <?php the_post_thumbnail('square-size');?></a>
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

              <div class="author-cont post-author ">
                <!-- <span><?php echo esc_html__('by', 'piwo'); ?> </span> -->
                <p> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ));  ?>"><?php echo get_the_author(); ?></a></p>
              </div>


            </div>
            <div class="title-cont">
              <a href="<?php the_permalink();?>"><h4><?php the_title(); ?></h4></a>
              <!-- <a href="<?php the_permalink();?>"><p><?php the_excerpt(); ?></p></a> -->
            </div>
            <div class="btn-cont">
              <a href="<?php the_permalink();?>">Read Now</a>
            </div>
           </div> <!-- end info container-->

         </div> <!-- end content container -->
      </div>  <!-- col 4 -->
<!-- looped content end -->  

          <?php $count++; ?>

          <?php endwhile; ?>
         
          <?php

          wp_reset_query(); ?>
<!-- post navigation -->
    <?php else: ?>

<!-- no posts found -->
    <?php endif; ?>

    <div id="continue"></div>


  </div> <!-- row -->



    <div class="col-md-12">
      <div class="container blog-pager">
      
<a class="large-blue-btn-digital btn_view_more_static btn_view_more" data-id="<?php echo $id_cloud_hybrid_i .','. $id_enterprise_mobility .','. $id_customer_engagement .','. $id_analytics_insights .','. $id_managed_services; ?>">View more →</a>

      </div>
    </div>





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